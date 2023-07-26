<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Schedule</title>
<script src="ASHL101.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL101-STHS.db - ASHL101-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="ASHL RSS Feed" href="http://www.ashligue.com/site//RSSFeed.xml" />
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
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 1</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1.php">Minnesota Wild (2) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-2.php">Toronto Maple Leafs (2) vs Columbus Blue Jackets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-3.php">Chicago Blackhawks (5) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-4.php">Washington Capitals (0) vs Tampa Bay Lightning (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-5.php">Winnipeg Jets (3) vs Calgary Flames (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-6.php">New York Rangers (4) vs Philadelphia Flyers (3)</a>  - SO (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-7.php">Dallas Stars (2) vs Los Angeles Kings (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-8.php">New Jersey Devils (3) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-9.php">St. Louis Blues (5) vs Detroit Red Wings (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-10.php">Florida Panthers (3) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-11.php">New York Islanders (4) vs Carolina Hurricanes (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1.php">Houston Aeros (3) vs Henderson Silver Knights (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-2.php">Las Vegas Gamblers (4) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-3.php">Trois-Rivières Draveurs (1) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-4.php">Manitoba Moose (1) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-5.php">CCCP Red Army (6) vs San Antonio Rampage (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-6.php">Chicoutimi Saguenéens (6) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-7.php">Binghamton Senators (5) vs Lake Erie Monsters (6)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-8.php">Chicago Wolves (2) vs Oklahoma City Barons (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 2</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-12.php">San Jose Sharks (2) vs Seattle Kraken (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-13.php">Los Angeles Kings (0) vs Vegas Golden Knights (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-14.php">Boston Bruins (0) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-15.php">Anaheim Ducks (0) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-16.php">Quebec Nordiques (4) vs Montreal Canadiens (3)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-17.php">Columbus Blue Jackets (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-18.php">New York Islanders (4) vs Buffalo Sabres (8)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-19.php">Detroit Red Wings (5) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-20.php">Colorado Avalanche (1) vs Winnipeg Jets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-21.php">New York Rangers (3) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-22.php">Carolina Hurricanes (6) vs Toronto Maple Leafs (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-9.php">Providence Bruins (2) vs Joliette Sportif (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-10.php">Oklahoma City Barons (2) vs Peoria Rivermen (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-11.php">Rochester Americans (4) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-12.php">Trois-Rivières Draveurs (4) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-13.php">Springfield Falcons (1) vs The Nuuk Vikings (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-14.php">Norfolk Admirals (3) vs Gatineau Olympiques (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 3</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-23.php">Chicago Blackhawks (2) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-24.php">Washington Capitals (2) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-25.php">Arizona Coyotes (4) vs Dallas Stars (5)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-15.php">Manitoba Moose (4) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-16.php">San Antonio Rampage (4) vs Laval Chiefs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-17.php">Albany Devils (2) vs Adirondack Phantoms (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-18.php">CCCP Red Army (3) vs Bridgeport Sound Tigers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-19.php">Charlotte Checkers (0) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-20.php">Wilkes-Barre/Scranton Penguins (3) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-21.php">Houston Aeros (4) vs Mercer Island Hafgufa (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-22.php">Peoria Rivermen (4) vs Las Vegas Gamblers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-23.php">Lake Erie Monsters (2) vs Chicago Wolves (1)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-26.php">Detroit Red Wings (2) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-27.php">Seattle Kraken (5) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-28.php">Winnipeg Jets (5) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-29.php">Ottawa Senators (2) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-30.php">Pittsburgh Penguins (1) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-31.php">New Jersey Devils (2) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-32.php">Philadelphia Flyers (3) vs New York Rangers (2)</a>  - OT (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-33.php">Buffalo Sabres (1) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-34.php">Toronto Maple Leafs (4) vs Montreal Canadiens (3)</a>  - OT (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-35.php">Calgary Flames (0) vs Edmonton Oilers (2)</a>  (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-24.php">Rouyn-Noranda Huskies (2) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-25.php">Albany Devils (1) vs Chicoutimi Saguenéens (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-26.php">Lake Erie Monsters (5) vs Rochester Americans (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-27.php">The Nuuk Vikings (6) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-28.php">CCCP Red Army (2) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-29.php">Henderson Silver Knights (1) vs Binghamton Senators (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 5</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-36.php">Seattle Kraken (3) vs Vegas Golden Knights (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-37.php">Philadelphia Flyers (2) vs Tampa Bay Lightning (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-38.php">Los Angeles Kings (3) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-39.php">Colorado Avalanche (1) vs Vancouver Canucks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-40.php">Florida Panthers (1) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-41.php">Boston Bruins (2) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-42.php">Dallas Stars (3) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-43.php">Edmonton Oilers (6) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-44.php">Ottawa Senators (1) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-45.php">San Jose Sharks (4) vs Minnesota Wild (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-46.php">Montreal Canadiens (4) vs Buffalo Sabres (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-47.php">Calgary Flames (6) vs Quebec Nordiques (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-30.php">Bridgeport Sound Tigers (2) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-31.php">Laval Chiefs (3) vs Houston Aeros (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-32.php">Norfolk Admirals (0) vs Trois-Rivières Draveurs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-33.php">Rockford IceHogs (3) vs Gatineau Olympiques (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-34.php">Adirondack Phantoms (5) vs Connecticut Whale (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-35.php">Chicago Wolves (1) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-36.php">San Antonio Rampage (1) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-37.php">Joliette Sportif (4) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-38.php">Oklahoma City Barons (5) vs Mercer Island Hafgufa (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 6</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-48.php">Nashville Predators (2) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-49.php">Vegas Golden Knights (4) vs Chicago Blackhawks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-50.php">New Jersey Devils (4) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-51.php">Boston Bruins (4) vs New York Islanders (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-39.php">Wilkes-Barre/Scranton Penguins (2) vs CCCP Red Army (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-40.php">Mercer Island Hafgufa (0) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-41.php">Manitoba Moose (3) vs Providence Bruins (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-42.php">Oklahoma City Barons (0) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-43.php">The Nuuk Vikings (1) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-44.php">Rockford IceHogs (4) vs Las Vegas Gamblers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-45.php">Rochester Americans (2) vs Peoria Rivermen (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-46.php">Roberval Dwarfs (3) vs Binghamton Senators (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-47.php">Adirondack Phantoms (1) vs Charlotte Checkers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 7</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-52.php">Philadelphia Flyers (0) vs New York Rangers (1)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-53.php">Detroit Red Wings (2) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">54</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-54.php">Pittsburgh Penguins (3) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-55.php">Winnipeg Jets (0) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-56.php">Tampa Bay Lightning (2) vs Florida Panthers (6)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-57.php">St. Louis Blues (4) vs Los Angeles Kings (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-58.php">Edmonton Oilers (4) vs Seattle Kraken (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-59.php">Minnesota Wild (1) vs Calgary Flames (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-60.php">Carolina Hurricanes (4) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-61.php">Vancouver Canucks (2) vs San Jose Sharks (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-62.php">Buffalo Sabres (2) vs Columbus Blue Jackets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-63.php">Arizona Coyotes (2) vs Anaheim Ducks (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-48.php">The Nuuk Vikings (4) vs Henderson Silver Knights (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-49.php">Connecticut Whale (4) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-50.php">San Antonio Rampage (3) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-51.php">Houston Aeros (0) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-52.php">Grand Rapids Griffins (3) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-53.php">Binghamton Senators (2) vs Albany Devils (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">54</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-54.php">Milwaukee Admirals (2) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-55.php">Charlotte Checkers (4) vs Chicago Wolves (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-56.php">Norfolk Admirals (3) vs Rochester Americans (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 8</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-64.php">St. Louis Blues (2) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-65.php">New York Islanders (0) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-66.php">Montreal Canadiens (2) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-67.php">Quebec Nordiques (0) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-68.php">Colorado Avalanche (0) vs Nashville Predators (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-57.php">San Antonio Rampage (3) vs Wilkes-Barre/Scranton Penguins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-58.php">Albany Devils (4) vs Adirondack Phantoms (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-59.php">Henderson Silver Knights (1) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-60.php">Gatineau Olympiques (4) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-61.php">Connecticut Whale (5) vs CCCP Red Army (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-62.php">Rouyn-Noranda Huskies (0) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-63.php">Las Vegas Gamblers (4) vs Oklahoma City Barons (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-64.php">Chicoutimi Saguenéens (2) vs Providence Bruins (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 9</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-69.php">Pittsburgh Penguins (4) vs Philadelphia Flyers (1)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-70.php">Chicago Blackhawks (3) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-71.php">Toronto Maple Leafs (2) vs Tampa Bay Lightning (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-72.php">Los Angeles Kings (2) vs Vegas Golden Knights (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-73.php">Washington Capitals (4) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-74.php">Florida Panthers (4) vs Carolina Hurricanes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-75.php">Minnesota Wild (1) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-76.php">Quebec Nordiques (2) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-77.php">Anaheim Ducks (3) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-78.php">Seattle Kraken (1) vs San Jose Sharks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-65.php">Bridgeport Sound Tigers (2) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-66.php">Springfield Falcons (2) vs The Nuuk Vikings (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-67.php">Trois-Rivières Draveurs (2) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-68.php">Joliette Sportif (2) vs Mercer Island Hafgufa (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-69.php">Lake Erie Monsters (2) vs Roberval Dwarfs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-70.php">Laval Chiefs (2) vs Peoria Rivermen (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-71.php">Rochester Americans (1) vs Grand Rapids Griffins (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 10</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-79.php">Boston Bruins (3) vs Montreal Canadiens (4)</a>  - SO (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-80.php">Edmonton Oilers (3) vs Arizona Coyotes (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-81.php">Florida Panthers (0) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">82</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-82.php">Dallas Stars (5) vs Colorado Avalanche (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-83.php">Vancouver Canucks (3) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-84.php">Columbus Blue Jackets (3) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-85.php">New Jersey Devils (2) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-86.php">St. Louis Blues (3) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-87.php">Carolina Hurricanes (2) vs Toronto Maple Leafs (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-88.php">Detroit Red Wings (2) vs Chicago Blackhawks (5)</a>  (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-72.php">Bridgeport Sound Tigers (2) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-73.php">Rouyn-Noranda Huskies (3) vs Gatineau Olympiques (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-74.php">Chicoutimi Saguenéens (4) vs Charlotte Checkers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-75.php">Binghamton Senators (3) vs Wilkes-Barre/Scranton Penguins (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-76.php">Providence Bruins (3) vs Chicago Wolves (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-77.php">Milwaukee Admirals (2) vs Las Vegas Gamblers (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-78.php">Albany Devils (4) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-79.php">Springfield Falcons (2) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-80.php">Joliette Sportif (1) vs Connecticut Whale (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 11</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-89.php">New York Rangers (3) vs Pittsburgh Penguins (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-90.php">Nashville Predators (4) vs Edmonton Oilers (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-91.php">Tampa Bay Lightning (3) vs Philadelphia Flyers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-92.php">Vegas Golden Knights (3) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-93.php">San Jose Sharks (5) vs Seattle Kraken (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-94.php">Buffalo Sabres (4) vs Quebec Nordiques (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-95.php">Arizona Coyotes (1) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-96.php">Anaheim Ducks (1) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-97.php">Calgary Flames (2) vs Columbus Blue Jackets (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-81.php">Oklahoma City Barons (3) vs Rockford IceHogs (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">82</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-82.php">Grand Rapids Griffins (1) vs Henderson Silver Knights (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-83.php">CCCP Red Army (1) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-84.php">Wilkes-Barre/Scranton Penguins (6) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-85.php">Houston Aeros (3) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-86.php">Providence Bruins (3) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-87.php">Peoria Rivermen (1) vs Norfolk Admirals (2)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 12</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-98.php">Washington Capitals (1) vs New Jersey Devils (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-99.php">New York Rangers (5) vs Florida Panthers (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-100.php">New York Islanders (4) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-101.php">Vancouver Canucks (2) vs St. Louis Blues (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-102.php">Nashville Predators (4) vs Detroit Red Wings (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-88.php">Mercer Island Hafgufa (1) vs Chicoutimi Saguenéens (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-89.php">Roberval Dwarfs (2) vs Rochester Americans (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-90.php">Rockford IceHogs (1) vs The Nuuk Vikings (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-91.php">Grand Rapids Griffins (1) vs Rouyn-Noranda Huskies (0)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-92.php">Gatineau Olympiques (5) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-93.php">Adirondack Phantoms (0) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-94.php">Chicago Wolves (3) vs Joliette Sportif (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-95.php">Charlotte Checkers (3) vs CCCP Red Army (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-96.php">Albany Devils (0) vs San Antonio Rampage (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 13</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-103.php">Pittsburgh Penguins (4) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-104.php">Colorado Avalanche (2) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-105.php">Montreal Canadiens (1) vs Toronto Maple Leafs (5)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">106</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-106.php">Columbus Blue Jackets (3) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">107</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-107.php">Chicago Blackhawks (0) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">108</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-108.php">Los Angeles Kings (4) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">109</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-109.php">Ottawa Senators (1) vs Buffalo Sabres (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-97.php">Houston Aeros (1) vs Oklahoma City Barons (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-98.php">Las Vegas Gamblers (2) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-99.php">Milwaukee Admirals (3) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-100.php">Lake Erie Monsters (5) vs Henderson Silver Knights (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-101.php">Manitoba Moose (4) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-102.php">Norfolk Admirals (1) vs Gatineau Olympiques (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 14</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">110</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-110.php">Edmonton Oilers (2) vs Calgary Flames (1)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">111</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-111.php">Quebec Nordiques (3) vs Philadelphia Flyers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">112</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-112.php">Arizona Coyotes (5) vs San Jose Sharks (6)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">113</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-113.php">Seattle Kraken (3) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">114</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-114.php">Vegas Golden Knights (1) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">115</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-115.php">Winnipeg Jets (3) vs Nashville Predators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-103.php">Trois-Rivières Draveurs (3) vs Albany Devils (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-104.php">Henderson Silver Knights (2) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-105.php">Connecticut Whale (6) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">106</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-106.php">Chicago Wolves (2) vs Mercer Island Hafgufa (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">107</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-107.php">Providence Bruins (1) vs Wilkes-Barre/Scranton Penguins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">108</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-108.php">Manitoba Moose (0) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">109</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-109.php">Chicoutimi Saguenéens (5) vs Rochester Americans (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">110</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-110.php">The Nuuk Vikings (3) vs Binghamton Senators (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">111</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-111.php">Las Vegas Gamblers (2) vs Charlotte Checkers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 15</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">116</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-116.php">Detroit Red Wings (4) vs Vancouver Canucks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">117</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-117.php">Colorado Avalanche (5) vs Los Angeles Kings (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">118</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-118.php">San Jose Sharks (0) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">119</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-119.php">New York Rangers (2) vs New York Islanders (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">120</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-120.php">Boston Bruins (1) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">121</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-121.php">Washington Capitals (1) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">122</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-122.php">Toronto Maple Leafs (2) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">123</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-123.php">Dallas Stars (4) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">124</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-124.php">Anaheim Ducks (4) vs Seattle Kraken (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">125</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-125.php">Carolina Hurricanes (1) vs Pittsburgh Penguins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">126</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-126.php">Tampa Bay Lightning (3) vs Arizona Coyotes (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">112</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-112.php">Roberval Dwarfs (3) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">113</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-113.php">Oklahoma City Barons (4) vs Joliette Sportif (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">114</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-114.php">Milwaukee Admirals (0) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">115</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-115.php">San Antonio Rampage (1) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">116</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-116.php">Peoria Rivermen (4) vs Springfield Falcons (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">117</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-117.php">Lake Erie Monsters (3) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">118</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-118.php">Wilkes-Barre/Scranton Penguins (2) vs CCCP Red Army (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">119</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-119.php">Laval Chiefs (4) vs The Nuuk Vikings (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 16</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">127</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-127.php">Montreal Canadiens (5) vs Quebec Nordiques (1)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">128</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-128.php">Buffalo Sabres (3) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">129</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-129.php">Calgary Flames (6) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">130</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-130.php">Ottawa Senators (1) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">131</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-131.php">New Jersey Devils (2) vs New York Rangers (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">132</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-132.php">Philadelphia Flyers (3) vs Washington Capitals (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">133</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-133.php">St. Louis Blues (5) vs Minnesota Wild (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">120</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-120.php">Charlotte Checkers (0) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">121</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-121.php">Trois-Rivières Draveurs (4) vs Providence Bruins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">122</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-122.php">Gatineau Olympiques (3) vs Chicago Wolves (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">123</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-123.php">Rochester Americans (2) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">124</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-124.php">Springfield Falcons (4) vs Las Vegas Gamblers (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">125</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-125.php">Rouyn-Noranda Huskies (0) vs Milwaukee Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 17</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">134</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-134.php">New York Islanders (1) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">135</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-135.php">Carolina Hurricanes (1) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">136</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-136.php">Vancouver Canucks (4) vs Vegas Golden Knights (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">137</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-137.php">Chicago Blackhawks (3) vs Nashville Predators (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">138</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-138.php">Toronto Maple Leafs (0) vs Florida Panthers (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">139</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-139.php">Winnipeg Jets (6) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">140</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-140.php">Arizona Coyotes (3) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">141</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-141.php">Pittsburgh Penguins (3) vs Buffalo Sabres (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">142</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-142.php">Montreal Canadiens (5) vs Philadelphia Flyers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">143</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-143.php">Quebec Nordiques (2) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">144</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-144.php">Calgary Flames (4) vs Ottawa Senators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">126</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-126.php">Adirondack Phantoms (2) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">127</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-127.php">Laval Chiefs (2) vs Lake Erie Monsters (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">128</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-128.php">Henderson Silver Knights (1) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">129</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-129.php">Connecticut Whale (5) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">130</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-130.php">Peoria Rivermen (5) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">131</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-131.php">Rochester Americans (3) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">132</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-132.php">Binghamton Senators (4) vs Trois-Rivières Draveurs (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 18</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">145</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-145.php">Seattle Kraken (4) vs Edmonton Oilers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">146</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-146.php">St. Louis Blues (0) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">147</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-147.php">Minnesota Wild (4) vs Vancouver Canucks (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">148</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-148.php">Toronto Maple Leafs (2) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">149</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-149.php">New York Islanders (4) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">150</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-150.php">Dallas Stars (1) vs Detroit Red Wings (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">133</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-133.php">Rouyn-Noranda Huskies (3) vs Mercer Island Hafgufa (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">134</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-134.php">Roberval Dwarfs (4) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">135</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-135.php">The Nuuk Vikings (4) vs Gatineau Olympiques (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">136</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-136.php">Providence Bruins (2) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">137</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-137.php">Grand Rapids Griffins (2) vs Rockford IceHogs (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">138</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-138.php">Norfolk Admirals (6) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">139</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-139.php">CCCP Red Army (3) vs Charlotte Checkers (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">140</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-140.php">Peoria Rivermen (4) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">141</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-141.php">Connecticut Whale (1) vs Chicoutimi Saguenéens (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 19</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">151</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-151.php">Columbus Blue Jackets (3) vs Washington Capitals (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">152</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-152.php">Colorado Avalanche (3) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">153</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-153.php">Tampa Bay Lightning (3) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">154</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-154.php">Florida Panthers (3) vs Boston Bruins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">155</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-155.php">Nashville Predators (5) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">156</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-156.php">Vegas Golden Knights (4) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">157</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-157.php">Buffalo Sabres (3) vs Montreal Canadiens (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">158</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-158.php">Philadelphia Flyers (4) vs Pittsburgh Penguins (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">159</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-159.php">Los Angeles Kings (3) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">160</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-160.php">Calgary Flames (3) vs Seattle Kraken (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">142</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-142.php">Milwaukee Admirals (5) vs Las Vegas Gamblers (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">143</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-143.php">Chicoutimi Saguenéens (4) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">144</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-144.php">Oklahoma City Barons (4) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">145</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-145.php">San Antonio Rampage (3) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">146</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-146.php">Houston Aeros (2) vs Henderson Silver Knights (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">147</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-147.php">Manitoba Moose (2) vs Adirondack Phantoms (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 20</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">161</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-161.php">Ottawa Senators (1) vs New York Islanders (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">162</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-162.php">Minnesota Wild (0) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">163</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-163.php">Florida Panthers (1) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">164</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-164.php">Edmonton Oilers (5) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">165</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-165.php">San Jose Sharks (5) vs Anaheim Ducks (4)</a>  - SO (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">166</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-166.php">Dallas Stars (0) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">167</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-167.php">Detroit Red Wings (4) vs Vegas Golden Knights (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">168</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-168.php">Columbus Blue Jackets (4) vs Tampa Bay Lightning (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">169</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-169.php">Los Angeles Kings (5) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">170</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-170.php">New Jersey Devils (1) vs Boston Bruins (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">148</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-148.php">Providence Bruins (4) vs Roberval Dwarfs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">149</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-149.php">Milwaukee Admirals (5) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">150</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-150.php">Mercer Island Hafgufa (2) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">151</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-151.php">Adirondack Phantoms (3) vs CCCP Red Army (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">152</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-152.php">Rouyn-Noranda Huskies (3) vs The Nuuk Vikings (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">153</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-153.php">Bridgeport Sound Tigers (4) vs Rochester Americans (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 21</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">171</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-171.php">Chicago Blackhawks (3) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">172</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-172.php">Anaheim Ducks (2) vs Winnipeg Jets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">173</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-173.php">New York Rangers (1) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">174</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-174.php">Ottawa Senators (5) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">175</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-175.php">Edmonton Oilers (4) vs Minnesota Wild (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">176</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-176.php">San Jose Sharks (3) vs Buffalo Sabres (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">177</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-177.php">Pittsburgh Penguins (1) vs Philadelphia Flyers (2)</a>  - OT (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">154</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-154.php">Albany Devils (4) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">155</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-155.php">Binghamton Senators (4) vs Connecticut Whale (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">156</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-156.php">Manitoba Moose (3) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">157</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-157.php">Gatineau Olympiques (2) vs Peoria Rivermen (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">158</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-158.php">Laval Chiefs (7) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">159</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-159.php">Las Vegas Gamblers (3) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">160</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-160.php">Charlotte Checkers (4) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">161</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-161.php">Rochester Americans (3) vs Providence Bruins (4)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 22</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">178</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-178.php">Boston Bruins (5) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">179</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-179.php">Washington Capitals (2) vs Montreal Canadiens (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">180</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-180.php">Seattle Kraken (2) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">181</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-181.php">Colorado Avalanche (3) vs Columbus Blue Jackets (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">182</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-182.php">Nashville Predators (3) vs Dallas Stars (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">183</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-183.php">Winnipeg Jets (3) vs St. Louis Blues (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">184</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-184.php">New York Rangers (1) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">185</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-185.php">New York Islanders (1) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">186</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-186.php">Tampa Bay Lightning (1) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">187</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-187.php">Chicago Blackhawks (3) vs Detroit Red Wings (4)</a>  - SO (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">162</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-162.php">The Nuuk Vikings (5) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">163</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-163.php">Wilkes-Barre/Scranton Penguins (1) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">164</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-164.php">Bridgeport Sound Tigers (2) vs Albany Devils (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">165</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-165.php">Chicago Wolves (4) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">166</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-166.php">Rockford IceHogs (1) vs Mercer Island Hafgufa (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">167</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-167.php">Lake Erie Monsters (1) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">168</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-168.php">CCCP Red Army (1) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">169</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-169.php">Chicoutimi Saguenéens (6) vs Henderson Silver Knights (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 23</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">188</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-188.php">Vancouver Canucks (4) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">189</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-189.php">Buffalo Sabres (1) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">190</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-190.php">Vegas Golden Knights (3) vs Edmonton Oilers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">191</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-191.php">Seattle Kraken (4) vs Calgary Flames (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">192</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-192.php">Quebec Nordiques (5) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">193</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-193.php">Anaheim Ducks (2) vs San Jose Sharks (3)</a>  - SO (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">194</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-194.php">Philadelphia Flyers (3) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">195</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-195.php">Arizona Coyotes (4) vs Minnesota Wild (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">170</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-170.php">Grand Rapids Griffins (3) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">171</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-171.php">Oklahoma City Barons (0) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">172</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-172.php">Houston Aeros (3) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">173</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-173.php">Connecticut Whale (5) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">174</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-174.php">Trois-Rivières Draveurs (4) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">175</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-175.php">Norfolk Admirals (2) vs Charlotte Checkers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 24</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">196</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-196.php">Tampa Bay Lightning (5) vs New York Rangers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">197</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-197.php">Nashville Predators (3) vs Colorado Avalanche (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">198</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-198.php">Montreal Canadiens (3) vs New York Islanders (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">199</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-199.php">Winnipeg Jets (0) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">200</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-200.php">Vegas Golden Knights (5) vs Seattle Kraken (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">201</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-201.php">New Jersey Devils (2) vs Columbus Blue Jackets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">202</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-202.php">Anaheim Ducks (3) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">203</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-203.php">Toronto Maple Leafs (1) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">204</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-204.php">Detroit Red Wings (6) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">205</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-205.php">Carolina Hurricanes (3) vs Boston Bruins (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">176</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-176.php">Rouyn-Noranda Huskies (4) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">177</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-177.php">Rochester Americans (4) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">178</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-178.php">Mercer Island Hafgufa (4) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">179</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-179.php">Roberval Dwarfs (0) vs Bridgeport Sound Tigers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">180</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-180.php">The Nuuk Vikings (2) vs Laval Chiefs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">181</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-181.php">Grand Rapids Griffins (4) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">182</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-182.php">San Antonio Rampage (3) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">183</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-183.php">Manitoba Moose (3) vs CCCP Red Army (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">184</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-184.php">Henderson Silver Knights (0) vs Lake Erie Monsters (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 25</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">206</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-206.php">Florida Panthers (2) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">207</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-207.php">Ottawa Senators (4) vs Philadelphia Flyers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">208</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-208.php">Calgary Flames (5) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">209</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-209.php">Edmonton Oilers (2) vs Quebec Nordiques (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">210</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-210.php">San Jose Sharks (2) vs Los Angeles Kings (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">211</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-211.php">Tampa Bay Lightning (3) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">212</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-212.php">Colorado Avalanche (1) vs St. Louis Blues (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">213</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-213.php">Minnesota Wild (5) vs Nashville Predators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">214</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-214.php">Boston Bruins (4) vs Montreal Canadiens (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">215</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-215.php">New Jersey Devils (3) vs Vegas Golden Knights (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">185</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-185.php">Joliette Sportif (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">186</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-186.php">Albany Devils (7) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">187</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-187.php">Adirondack Phantoms (1) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">188</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-188.php">Gatineau Olympiques (3) vs Trois-Rivières Draveurs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">189</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-189.php">Binghamton Senators (3) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">190</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-190.php">Houston Aeros (4) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">191</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-191.php">CCCP Red Army (6) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">192</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-192.php">Bridgeport Sound Tigers (3) vs San Antonio Rampage (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">193</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-193.php">Chicago Wolves (2) vs The Nuuk Vikings (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 26</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">216</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-216.php">Winnipeg Jets (4) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">217</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-217.php">Washington Capitals (3) vs New York Islanders (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">218</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-218.php">Carolina Hurricanes (1) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">219</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-219.php">Dallas Stars (4) vs Chicago Blackhawks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">194</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-194.php">Las Vegas Gamblers (0) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">195</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-195.php">Laval Chiefs (5) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">196</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-196.php">Connecticut Whale (5) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">197</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-197.php">Charlotte Checkers (3) vs Manitoba Moose (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">198</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-198.php">Providence Bruins (1) vs Houston Aeros (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">199</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-199.php">Henderson Silver Knights (4) vs Springfield Falcons (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 27</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">220</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-220.php">Seattle Kraken (2) vs Toronto Maple Leafs (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">221</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-221.php">Buffalo Sabres (5) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">222</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-222.php">New York Rangers (1) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">223</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-223.php">Los Angeles Kings (6) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">224</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-224.php">Edmonton Oilers (2) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">225</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-225.php">Vancouver Canucks (2) vs Anaheim Ducks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">200</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-200.php">Joliette Sportif (5) vs Rockford IceHogs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">201</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-201.php">Lake Erie Monsters (2) vs Mercer Island Hafgufa (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">202</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-202.php">Roberval Dwarfs (1) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">203</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-203.php">Norfolk Admirals (1) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">204</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-204.php">Binghamton Senators (3) vs Peoria Rivermen (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">205</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-205.php">Chicoutimi Saguenéens (5) vs Trois-Rivières Draveurs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 28</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">226</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-226.php">Pittsburgh Penguins (4) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">227</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-227.php">Montreal Canadiens (3) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">228</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-228.php">Nashville Predators (2) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">229</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-229.php">Chicago Blackhawks (5) vs Colorado Avalanche (6)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">230</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-230.php">Minnesota Wild (3) vs Edmonton Oilers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">231</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-231.php">Detroit Red Wings (6) vs Seattle Kraken (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">232</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-232.php">New York Islanders (0) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">233</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-233.php">Toronto Maple Leafs (3) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">234</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-234.php">Vegas Golden Knights (1) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">235</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-235.php">Carolina Hurricanes (3) vs Philadelphia Flyers (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">206</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-206.php">Providence Bruins (3) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">207</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-207.php">Charlotte Checkers (3) vs Chicago Wolves (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">208</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-208.php">The Nuuk Vikings (0) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">209</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-209.php">CCCP Red Army (4) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">210</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-210.php">Oklahoma City Barons (5) vs Henderson Silver Knights (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 29</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">236</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-236.php">San Jose Sharks (3) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">237</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-237.php">Calgary Flames (2) vs St. Louis Blues (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">238</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-238.php">Washington Capitals (3) vs Ottawa Senators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">239</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-239.php">Quebec Nordiques (2) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">240</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-240.php">Florida Panthers (6) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">241</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-241.php">Los Angeles Kings (2) vs Anaheim Ducks (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">242</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-242.php">Montreal Canadiens (2) vs Boston Bruins (5)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">243</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-243.php">Nashville Predators (3) vs Minnesota Wild (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">244</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-244.php">New Jersey Devils (5) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">245</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-245.php">Columbus Blue Jackets (3) vs Pittsburgh Penguins (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">211</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-211.php">Albany Devils (2) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">212</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-212.php">Connecticut Whale (3) vs Roberval Dwarfs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">213</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-213.php">Milwaukee Admirals (2) vs Grand Rapids Griffins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">214</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-214.php">Gatineau Olympiques (1) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">215</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-215.php">Chicoutimi Saguenéens (5) vs Binghamton Senators (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 30</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">246</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-246.php">Arizona Coyotes (1) vs Vegas Golden Knights (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">247</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-247.php">Detroit Red Wings (3) vs Winnipeg Jets (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">248</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-248.php">Philadelphia Flyers (4) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">249</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-249.php">New York Rangers (3) vs Carolina Hurricanes (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">250</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-250.php">St. Louis Blues (5) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">251</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-251.php">San Jose Sharks (2) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">252</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-252.php">Buffalo Sabres (3) vs Florida Panthers (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">253</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-253.php">Calgary Flames (2) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">254</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-254.php">Vancouver Canucks (3) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">255</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-255.php">Dallas Stars (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">256</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-256.php">Ottawa Senators (1) vs Seattle Kraken (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">216</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-216.php">Oklahoma City Barons (5) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">217</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-217.php">Providence Bruins (4) vs Rochester Americans (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">218</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-218.php">Bridgeport Sound Tigers (3) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">219</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-219.php">CCCP Red Army (6) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">220</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-220.php">Manitoba Moose (2) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">221</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-221.php">Grand Rapids Griffins (4) vs Norfolk Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 31</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">257</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-257.php">Boston Bruins (1) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">258</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-258.php">Philadelphia Flyers (3) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">259</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-259.php">Anaheim Ducks (2) vs Nashville Predators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">260</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-260.php">Arizona Coyotes (5) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">261</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-261.php">Carolina Hurricanes (4) vs New York Rangers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">262</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-262.php">Pittsburgh Penguins (3) vs Detroit Red Wings (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">263</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-263.php">Quebec Nordiques (6) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">264</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-264.php">Colorado Avalanche (2) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">265</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-265.php">Vegas Golden Knights (4) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">266</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-266.php">Chicago Blackhawks (5) vs Winnipeg Jets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">222</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-222.php">Chicago Wolves (6) vs Milwaukee Admirals (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">223</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-223.php">Mercer Island Hafgufa (2) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">224</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-224.php">Trois-Rivières Draveurs (3) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">225</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-225.php">Wilkes-Barre/Scranton Penguins (0) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">226</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-226.php">Las Vegas Gamblers (4) vs The Nuuk Vikings (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">227</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-227.php">Roberval Dwarfs (3) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">228</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-228.php">Adirondack Phantoms (2) vs Providence Bruins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">229</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-229.php">Binghamton Senators (5) vs Manitoba Moose (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">230</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-230.php">Bridgeport Sound Tigers (3) vs CCCP Red Army (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 32</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">267</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-267.php">New York Islanders (3) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">268</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-268.php">Ottawa Senators (2) vs San Jose Sharks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">269</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-269.php">Toronto Maple Leafs (2) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">270</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-270.php">Los Angeles Kings (5) vs Vancouver Canucks (7)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">231</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-231.php">Joliette Sportif (4) vs Oklahoma City Barons (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">232</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-232.php">Springfield Falcons (4) vs Rockford IceHogs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">233</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-233.php">Adirondack Phantoms (1) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">234</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-234.php">Gatineau Olympiques (4) vs Mercer Island Hafgufa (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">235</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-235.php">Rouyn-Noranda Huskies (3) vs Henderson Silver Knights (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">236</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-236.php">Norfolk Admirals (3) vs Laval Chiefs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">237</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-237.php">San Antonio Rampage (1) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">238</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-238.php">Rochester Americans (3) vs Charlotte Checkers (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 33</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">271</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-271.php">Dallas Stars (3) vs Seattle Kraken (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">272</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-272.php">Buffalo Sabres (1) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">273</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-273.php">Anaheim Ducks (2) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">274</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-274.php">Washington Capitals (2) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">275</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-275.php">Chicago Blackhawks (2) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">276</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-276.php">Colorado Avalanche (2) vs Vegas Golden Knights (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">239</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-239.php">Milwaukee Admirals (2) vs Springfield Falcons (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">240</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-240.php">Houston Aeros (2) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">241</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-241.php">Grand Rapids Griffins (4) vs Chicago Wolves (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">242</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-242.php">Binghamton Senators (2) vs Roberval Dwarfs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">243</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-243.php">Trois-Rivières Draveurs (4) vs Lake Erie Monsters (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">244</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-244.php">Norfolk Admirals (1) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">245</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-245.php">Laval Chiefs (2) vs Gatineau Olympiques (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 34</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">277</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-277.php">Carolina Hurricanes (1) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">278</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-278.php">Columbus Blue Jackets (0) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">279</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-279.php">Quebec Nordiques (1) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">280</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-280.php">Tampa Bay Lightning (1) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">281</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-281.php">Minnesota Wild (6) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">282</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-282.php">New York Islanders (5) vs New Jersey Devils (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">246</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-246.php">CCCP Red Army (4) vs Connecticut Whale (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">247</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-247.php">Oklahoma City Barons (3) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">248</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-248.php">Peoria Rivermen (3) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">249</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-249.php">Bridgeport Sound Tigers (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">250</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-250.php">Manitoba Moose (2) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">251</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-251.php">Milwaukee Admirals (3) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">252</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-252.php">Rockford IceHogs (4) vs The Nuuk Vikings (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">253</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-253.php">Wilkes-Barre/Scranton Penguins (2) vs Adirondack Phantoms (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">254</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-254.php">Providence Bruins (4) vs Trois-Rivières Draveurs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 35</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">283</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-283.php">Dallas Stars (3) vs Detroit Red Wings (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">284</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-284.php">Los Angeles Kings (5) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">285</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-285.php">Buffalo Sabres (2) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">286</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-286.php">St. Louis Blues (5) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">287</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-287.php">Anaheim Ducks (2) vs San Jose Sharks (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">288</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-288.php">Florida Panthers (2) vs Ottawa Senators (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">289</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-289.php">Seattle Kraken (4) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">290</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-290.php">Winnipeg Jets (3) vs Colorado Avalanche (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">291</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-291.php">Boston Bruins (6) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">292</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-292.php">Vancouver Canucks (3) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">293</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-293.php">Edmonton Oilers (4) vs Chicago Blackhawks (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">255</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-255.php">Mercer Island Hafgufa (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">256</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-256.php">San Antonio Rampage (7) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">257</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-257.php">Lake Erie Monsters (4) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">258</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-258.php">Roberval Dwarfs (3) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">259</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-259.php">Albany Devils (3) vs Bridgeport Sound Tigers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">260</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-260.php">Rochester Americans (3) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">261</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-261.php">Charlotte Checkers (3) vs Providence Bruins (4)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 36</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">294</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-294.php">Minnesota Wild (3) vs Buffalo Sabres (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">295</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-295.php">Tampa Bay Lightning (2) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">296</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-296.php">Philadelphia Flyers (3) vs Los Angeles Kings (2)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">262</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-262.php">Henderson Silver Knights (2) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">263</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-263.php">Connecticut Whale (3) vs CCCP Red Army (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">264</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-264.php">The Nuuk Vikings (1) vs Oklahoma City Barons (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">265</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-265.php">Laval Chiefs (4) vs Rockford IceHogs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">266</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-266.php">Chicoutimi Saguenéens (3) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">267</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-267.php">Rouyn-Noranda Huskies (1) vs Peoria Rivermen (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">268</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-268.php">Las Vegas Gamblers (4) vs Joliette Sportif (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 37</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">297</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-297.php">Edmonton Oilers (4) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">298</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-298.php">Pittsburgh Penguins (1) vs Columbus Blue Jackets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">299</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-299.php">Boston Bruins (3) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">300</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-300.php">Ottawa Senators (4) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">301</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-301.php">Nashville Predators (2) vs Vancouver Canucks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">269</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-269.php">Grand Rapids Griffins (7) vs Mercer Island Hafgufa (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">270</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-270.php">Roberval Dwarfs (2) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">271</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-271.php">Adirondack Phantoms (3) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">272</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-272.php">Lake Erie Monsters (1) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">273</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-273.php">Trois-Rivières Draveurs (3) vs Henderson Silver Knights (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">274</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-274.php">Binghamton Senators (4) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">275</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-275.php">Houston Aeros (1) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">276</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-276.php">Manitoba Moose (6) vs Las Vegas Gamblers (7)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 38</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">302</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-302.php">Philadelphia Flyers (4) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">303</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-303.php">Minnesota Wild (3) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">304</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-304.php">Detroit Red Wings (3) vs New York Rangers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">277</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-277.php">Joliette Sportif (3) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">278</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-278.php">Albany Devils (2) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">279</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-279.php">Bridgeport Sound Tigers (1) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">280</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-280.php">Chicoutimi Saguenéens (3) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">281</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-281.php">Springfield Falcons (4) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">282</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-282.php">CCCP Red Army (4) vs The Nuuk Vikings (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">283</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-283.php">Providence Bruins (1) vs Milwaukee Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 39</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">305</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-305.php">Montreal Canadiens (3) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">306</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-306.php">Quebec Nordiques (3) vs Pittsburgh Penguins (2)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">284</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-284.php">Peoria Rivermen (5) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">285</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-285.php">Lake Erie Monsters (3) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">286</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-286.php">Chicago Wolves (1) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">287</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-287.php">Oklahoma City Barons (2) vs Grand Rapids Griffins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">288</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-288.php">Mercer Island Hafgufa (6) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">289</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-289.php">Wilkes-Barre/Scranton Penguins (4) vs Binghamton Senators (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 40</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">307</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-307.php">New York Rangers (3) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">308</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-308.php">Winnipeg Jets (0) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">309</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-309.php">Buffalo Sabres (6) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">310</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-310.php">Edmonton Oilers (2) vs Toronto Maple Leafs (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">311</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-311.php">Detroit Red Wings (2) vs Washington Capitals (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">290</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-290.php">Norfolk Admirals (3) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">291</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-291.php">Bridgeport Sound Tigers (4) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">292</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-292.php">Charlotte Checkers (3) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">293</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-293.php">Laval Chiefs (2) vs Manitoba Moose (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">294</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-294.php">Connecticut Whale (5) vs CCCP Red Army (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">295</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-295.php">Rochester Americans (4) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">296</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-296.php">Las Vegas Gamblers (1) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">297</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-297.php">The Nuuk Vikings (4) vs Rockford IceHogs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 41</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">312</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-312.php">Minnesota Wild (2) vs San Jose Sharks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">313</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-313.php">Chicago Blackhawks (5) vs Seattle Kraken (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">314</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-314.php">Boston Bruins (7) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">315</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-315.php">Quebec Nordiques (3) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">316</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-316.php">Los Angeles Kings (6) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">317</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-317.php">Arizona Coyotes (5) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">318</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-318.php">St. Louis Blues (5) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">319</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-319.php">Vegas Golden Knights (2) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">320</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-320.php">Columbus Blue Jackets (3) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">321</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-321.php">Vancouver Canucks (3) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">322</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-322.php">Montreal Canadiens (1) vs Winnipeg Jets (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">298</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-298.php">Joliette Sportif (4) vs Bridgeport Sound Tigers (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">299</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-299.php">Grand Rapids Griffins (3) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">300</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-300.php">Milwaukee Admirals (3) vs Henderson Silver Knights (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">301</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-301.php">Peoria Rivermen (6) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">302</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-302.php">Wilkes-Barre/Scranton Penguins (2) vs Mercer Island Hafgufa (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">303</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-303.php">Adirondack Phantoms (3) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">304</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-304.php">San Antonio Rampage (6) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">305</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-305.php">Binghamton Senators (4) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">306</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-306.php">Norfolk Admirals (2) vs Trois-Rivières Draveurs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 42</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">323</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-323.php">Nashville Predators (6) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">324</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-324.php">Florida Panthers (3) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">325</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-325.php">Tampa Bay Lightning (5) vs Edmonton Oilers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">307</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-307.php">Las Vegas Gamblers (3) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">308</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-308.php">The Nuuk Vikings (0) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">309</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-309.php">CCCP Red Army (0) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">310</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-310.php">Providence Bruins (5) vs Charlotte Checkers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">311</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-311.php">Rockford IceHogs (1) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">312</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-312.php">Chicoutimi Saguenéens (4) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">313</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-313.php">Rochester Americans (8) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">314</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-314.php">Manitoba Moose (5) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">315</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-315.php">Roberval Dwarfs (4) vs Lake Erie Monsters (5)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 43</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">326</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-326.php">Philadelphia Flyers (2) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">327</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-327.php">St. Louis Blues (2) vs Minnesota Wild (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">328</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-328.php">Vegas Golden Knights (2) vs Chicago Blackhawks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">329</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-329.php">San Jose Sharks (1) vs Quebec Nordiques (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">330</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-330.php">Carolina Hurricanes (6) vs Los Angeles Kings (7)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">331</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-331.php">Arizona Coyotes (4) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">332</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-332.php">Anaheim Ducks (3) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">333</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-333.php">Seattle Kraken (6) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">334</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-334.php">New York Rangers (0) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">335</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-335.php">Ottawa Senators (2) vs New Jersey Devils (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">316</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-316.php">Chicago Wolves (3) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">317</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-317.php">San Antonio Rampage (4) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">318</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-318.php">Henderson Silver Knights (3) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">319</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-319.php">Springfield Falcons (4) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">320</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-320.php">Binghamton Senators (3) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">321</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-321.php">Rouyn-Noranda Huskies (6) vs Norfolk Admirals (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">322</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-322.php">Gatineau Olympiques (4) vs Bridgeport Sound Tigers (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 44</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">336</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-336.php">Florida Panthers (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">337</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-337.php">Tampa Bay Lightning (2) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">338</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-338.php">Dallas Stars (1) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">339</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-339.php">Montreal Canadiens (4) vs New York Islanders (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">340</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-340.php">Colorado Avalanche (4) vs Winnipeg Jets (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">341</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-341.php">Detroit Red Wings (3) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">342</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-342.php">Buffalo Sabres (6) vs Seattle Kraken (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">343</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-343.php">Edmonton Oilers (6) vs St. Louis Blues (7)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">344</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-344.php">Quebec Nordiques (2) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">345</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-345.php">New York Rangers (0) vs Vegas Golden Knights (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">323</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-323.php">Connecticut Whale (6) vs The Nuuk Vikings (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">324</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-324.php">Trois-Rivières Draveurs (3) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">325</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-325.php">Albany Devils (3) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">326</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-326.php">Providence Bruins (1) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">327</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-327.php">Rockford IceHogs (1) vs CCCP Red Army (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">328</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-328.php">Charlotte Checkers (0) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">329</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-329.php">Houston Aeros (4) vs Binghamton Senators (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">330</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-330.php">Laval Chiefs (1) vs Mercer Island Hafgufa (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 45</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">346</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-346.php">Vancouver Canucks (5) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">347</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-347.php">Columbus Blue Jackets (3) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">348</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-348.php">Anaheim Ducks (1) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">349</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-349.php">Washington Capitals (1) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">350</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-350.php">Minnesota Wild (3) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">351</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-351.php">New Jersey Devils (3) vs Los Angeles Kings (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">352</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-352.php">Calgary Flames (4) vs Tampa Bay Lightning (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">353</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-353.php">Buffalo Sabres (2) vs Colorado Avalanche (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">354</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-354.php">Nashville Predators (1) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">355</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-355.php">Toronto Maple Leafs (0) vs Montreal Canadiens (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">356</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-356.php">Pittsburgh Penguins (2) vs Florida Panthers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">357</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-357.php">New York Islanders (1) vs Edmonton Oilers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">331</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-331.php">Rouyn-Noranda Huskies (2) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">332</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-332.php">Joliette Sportif (1) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">333</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-333.php">Wilkes-Barre/Scranton Penguins (3) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">334</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-334.php">Grand Rapids Griffins (3) vs Gatineau Olympiques (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">335</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-335.php">Chicago Wolves (5) vs Peoria Rivermen (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 46</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">358</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-358.php">Winnipeg Jets (5) vs Detroit Red Wings (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">359</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-359.php">Seattle Kraken (2) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">360</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-360.php">Boston Bruins (2) vs New York Rangers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">361</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-361.php">Chicago Blackhawks (2) vs Quebec Nordiques (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">362</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-362.php">Washington Capitals (2) vs Minnesota Wild (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">363</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-363.php">Carolina Hurricanes (5) vs Columbus Blue Jackets (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">364</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-364.php">Los Angeles Kings (2) vs Calgary Flames (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">365</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-365.php">Vancouver Canucks (4) vs New Jersey Devils (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">366</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-366.php">Philadelphia Flyers (3) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">367</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-367.php">Ottawa Senators (1) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">368</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-368.php">Vegas Golden Knights (2) vs St. Louis Blues (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">336</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-336.php">Norfolk Admirals (5) vs Henderson Silver Knights (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">337</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-337.php">Houston Aeros (2) vs Joliette Sportif (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">338</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-338.php">Albany Devils (2) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">339</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-339.php">Lake Erie Monsters (3) vs Milwaukee Admirals (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">340</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-340.php">Manitoba Moose (2) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">341</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-341.php">Charlotte Checkers (1) vs Trois-Rivières Draveurs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 47</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">369</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-369.php">Tampa Bay Lightning (2) vs Buffalo Sabres (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">370</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-370.php">Pittsburgh Penguins (4) vs Toronto Maple Leafs (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">371</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-371.php">Winnipeg Jets (2) vs Montreal Canadiens (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">372</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-372.php">Detroit Red Wings (2) vs Dallas Stars (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">342</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-342.php">Springfield Falcons (3) vs Wilkes-Barre/Scranton Penguins (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">343</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-343.php">Bridgeport Sound Tigers (1) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">344</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-344.php">Connecticut Whale (3) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">345</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-345.php">Binghamton Senators (4) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">346</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-346.php">The Nuuk Vikings (2) vs San Antonio Rampage (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 48</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">373</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-373.php">Edmonton Oilers (0) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">374</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-374.php">Nashville Predators (2) vs New York Islanders (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">375</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-375.php">Washington Capitals (2) vs Florida Panthers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">376</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-376.php">Los Angeles Kings (1) vs Seattle Kraken (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">377</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-377.php">San Jose Sharks (1) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">378</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-378.php">Calgary Flames (2) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">379</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-379.php">Boston Bruins (2) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">380</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-380.php">Philadelphia Flyers (2) vs Chicago Blackhawks (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">381</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-381.php">New Jersey Devils (2) vs New York Rangers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">382</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-382.php">Carolina Hurricanes (2) vs Minnesota Wild (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">383</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-383.php">Columbus Blue Jackets (3) vs Quebec Nordiques (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">347</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-347.php">Mercer Island Hafgufa (4) vs Rochester Americans (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">348</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-348.php">Oklahoma City Barons (2) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">349</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-349.php">Manitoba Moose (4) vs Charlotte Checkers (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">350</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-350.php">Henderson Silver Knights (1) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">351</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-351.php">Albany Devils (4) vs Chicoutimi Saguenéens (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">352</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-352.php">Milwaukee Admirals (3) vs Grand Rapids Griffins (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 49</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">384</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-384.php">Arizona Coyotes (4) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">385</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-385.php">St. Louis Blues (5) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">386</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-386.php">Edmonton Oilers (7) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">387</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-387.php">Florida Panthers (2) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">388</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-388.php">Montreal Canadiens (4) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">389</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-389.php">Toronto Maple Leafs (3) vs Buffalo Sabres (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">390</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-390.php">New York Islanders (2) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">391</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-391.php">Dallas Stars (3) vs Colorado Avalanche (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">353</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-353.php">Norfolk Admirals (3) vs CCCP Red Army (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">354</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-354.php">Peoria Rivermen (5) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">355</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-355.php">Laval Chiefs (4) vs Connecticut Whale (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">356</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-356.php">Las Vegas Gamblers (5) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">357</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-357.php">Joliette Sportif (0) vs The Nuuk Vikings (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">358</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-358.php">Wilkes-Barre/Scranton Penguins (2) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">359</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-359.php">Trois-Rivières Draveurs (4) vs Binghamton Senators (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 50</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">392</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-392.php">Columbus Blue Jackets (3) vs Washington Capitals (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">393</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-393.php">Philadelphia Flyers (4) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">394</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-394.php">New York Rangers (1) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">395</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-395.php">San Jose Sharks (3) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">396</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-396.php">Chicago Blackhawks (2) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">397</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-397.php">Arizona Coyotes (5) vs St. Louis Blues (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">398</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-398.php">Minnesota Wild (3) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">399</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-399.php">Anaheim Ducks (3) vs Seattle Kraken (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">400</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-400.php">Vegas Golden Knights (3) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">401</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-401.php">Ottawa Senators (3) vs Quebec Nordiques (2)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">360</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-360.php">Roberval Dwarfs (5) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">361</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-361.php">San Antonio Rampage (4) vs Albany Devils (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">362</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-362.php">Grand Rapids Griffins (0) vs Norfolk Admirals (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">363</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-363.php">Chicoutimi Saguenéens (4) vs Manitoba Moose (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">364</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-364.php">Springfield Falcons (1) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">365</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-365.php">Milwaukee Admirals (3) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">366</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-366.php">Charlotte Checkers (5) vs Mercer Island Hafgufa (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">367</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-367.php">Lake Erie Monsters (1) vs Henderson Silver Knights (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">368</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-368.php">Adirondack Phantoms (1) vs Peoria Rivermen (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 51</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">402</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-402.php">Colorado Avalanche (5) vs Edmonton Oilers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">403</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-403.php">Buffalo Sabres (4) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">404</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-404.php">Detroit Red Wings (2) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">405</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-405.php">Nashville Predators (2) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">406</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-406.php">New York Islanders (1) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">407</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-407.php">Winnipeg Jets (1) vs Florida Panthers (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">369</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-369.php">Bridgeport Sound Tigers (4) vs Springfield Falcons (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">370</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-370.php">Rochester Americans (3) vs Joliette Sportif (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">371</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-371.php">Houston Aeros (2) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">372</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-372.php">Connecticut Whale (7) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">373</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-373.php">CCCP Red Army (4) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">374</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-374.php">Laval Chiefs (4) vs Rouyn-Noranda Huskies (5)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 52</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">408</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-408.php">Vancouver Canucks (4) vs Philadelphia Flyers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">409</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-409.php">Montreal Canadiens (4) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">410</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-410.php">Arizona Coyotes (3) vs San Jose Sharks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">411</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-411.php">Calgary Flames (0) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">412</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-412.php">Chicago Blackhawks (2) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">413</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-413.php">Carolina Hurricanes (5) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">414</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-414.php">New Jersey Devils (5) vs New York Rangers (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">415</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-415.php">Anaheim Ducks (1) vs Los Angeles Kings (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">416</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-416.php">Seattle Kraken (3) vs Minnesota Wild (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">417</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-417.php">Toronto Maple Leafs (4) vs Ottawa Senators (3)</a>  - SO (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">418</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-418.php">St. Louis Blues (3) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">419</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-419.php">Quebec Nordiques (5) vs Nashville Predators (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">375</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-375.php">Manitoba Moose (0) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">376</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-376.php">Albany Devils (2) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">377</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-377.php">Mercer Island Hafgufa (2) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">378</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-378.php">Henderson Silver Knights (3) vs Grand Rapids Griffins (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">379</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-379.php">San Antonio Rampage (3) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">380</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-380.php">The Nuuk Vikings (3) vs Charlotte Checkers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">381</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-381.php">Rockford IceHogs (6) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">382</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-382.php">Providence Bruins (2) vs Lake Erie Monsters (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 53</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">420</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-420.php">Tampa Bay Lightning (4) vs Winnipeg Jets (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">421</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-421.php">Pittsburgh Penguins (2) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">422</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-422.php">Dallas Stars (4) vs Arizona Coyotes (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">383</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-383.php">Joliette Sportif (2) vs Milwaukee Admirals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">384</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-384.php">Las Vegas Gamblers (3) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">385</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-385.php">CCCP Red Army (2) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">386</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-386.php">Bridgeport Sound Tigers (3) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">387</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-387.php">Chicago Wolves (0) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">388</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-388.php">Trois-Rivières Draveurs (2) vs Binghamton Senators (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 54</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">423</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-423.php">Ottawa Senators (1) vs Buffalo Sabres (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">424</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-424.php">Boston Bruins (6) vs Detroit Red Wings (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">425</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-425.php">New York Rangers (4) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">426</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-426.php">Colorado Avalanche (7) vs Anaheim Ducks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">427</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-427.php">Vancouver Canucks (1) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">428</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-428.php">Washington Capitals (3) vs Philadelphia Flyers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">429</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-429.php">Los Angeles Kings (2) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">430</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-430.php">Vegas Golden Knights (4) vs Columbus Blue Jackets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">431</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-431.php">Quebec Nordiques (1) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">432</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-432.php">Florida Panthers (3) vs Calgary Flames (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">389</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-389.php">Albany Devils (4) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">390</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-390.php">Charlotte Checkers (4) vs Connecticut Whale (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">391</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-391.php">Lake Erie Monsters (4) vs The Nuuk Vikings (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">392</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-392.php">Manitoba Moose (5) vs Providence Bruins (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">393</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-393.php">Peoria Rivermen (4) vs CCCP Red Army (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">394</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-394.php">Oklahoma City Barons (4) vs Bridgeport Sound Tigers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">395</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-395.php">Grand Rapids Griffins (4) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">396</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-396.php">Adirondack Phantoms (4) vs Gatineau Olympiques (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">397</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-397.php">Wilkes-Barre/Scranton Penguins (2) vs Springfield Falcons (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 55</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">433</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-433.php">New York Islanders (3) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">434</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-434.php">Winnipeg Jets (0) vs Seattle Kraken (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">435</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-435.php">Toronto Maple Leafs (1) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">436</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-436.php">Nashville Predators (4) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">437</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-437.php">Minnesota Wild (5) vs Dallas Stars (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">438</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-438.php">Carolina Hurricanes (0) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">439</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-439.php">Detroit Red Wings (3) vs Colorado Avalanche (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">440</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-440.php">Arizona Coyotes (3) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">441</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-441.php">Washington Capitals (2) vs Florida Panthers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">442</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-442.php">Quebec Nordiques (5) vs Vancouver Canucks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">398</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-398.php">Houston Aeros (4) vs Albany Devils (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">399</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-399.php">Mercer Island Hafgufa (4) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">400</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-400.php">Joliette Sportif (5) vs Henderson Silver Knights (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">401</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-401.php">Binghamton Senators (4) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">402</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-402.php">Laval Chiefs (1) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">403</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-403.php">Norfolk Admirals (2) vs Roberval Dwarfs (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 56</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">443</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-443.php">Columbus Blue Jackets (1) vs Vegas Golden Knights (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">444</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-444.php">Buffalo Sabres (4) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">445</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-445.php">Los Angeles Kings (3) vs Edmonton Oilers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">404</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-404.php">Rochester Americans (1) vs Mercer Island Hafgufa (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">405</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-405.php">Oklahoma City Barons (0) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">406</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-406.php">Trois-Rivières Draveurs (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">407</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-407.php">Grand Rapids Griffins (4) vs Milwaukee Admirals (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">408</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-408.php">Connecticut Whale (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">409</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-409.php">Gatineau Olympiques (1) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">410</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-410.php">San Antonio Rampage (3) vs Las Vegas Gamblers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">411</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-411.php">Providence Bruins (2) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">412</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-412.php">Springfield Falcons (2) vs The Nuuk Vikings (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 57</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">446</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-446.php">Seattle Kraken (4) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">447</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-447.php">Tampa Bay Lightning (1) vs New York Rangers (0)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">448</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-448.php">San Jose Sharks (5) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">449</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-449.php">Nashville Predators (5) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">450</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-450.php">New Jersey Devils (4) vs Ottawa Senators (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">413</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-413.php">Houston Aeros (1) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">414</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-414.php">Bridgeport Sound Tigers (2) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">415</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-415.php">Roberval Dwarfs (4) vs Laval Chiefs (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">416</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-416.php">Norfolk Admirals (4) vs Rochester Americans (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">417</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-417.php">Chicago Wolves (3) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">418</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-418.php">Henderson Silver Knights (4) vs CCCP Red Army (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">419</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-419.php">San Antonio Rampage (4) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">420</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-420.php">Oklahoma City Barons (5) vs Connecticut Whale (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 58</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">451</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-451.php">Columbus Blue Jackets (5) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">452</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-452.php">Calgary Flames (5) vs Chicago Blackhawks (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">453</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-453.php">Washington Capitals (2) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">454</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-454.php">Vegas Golden Knights (3) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">455</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-455.php">St. Louis Blues (4) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">456</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-456.php">Pittsburgh Penguins (4) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">457</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-457.php">Colorado Avalanche (3) vs Detroit Red Wings (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">458</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-458.php">Montreal Canadiens (2) vs Quebec Nordiques (1)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">459</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-459.php">Edmonton Oilers (3) vs Los Angeles Kings (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">460</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-460.php">Florida Panthers (5) vs Carolina Hurricanes (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">461</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-461.php">Vancouver Canucks (2) vs Nashville Predators (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">421</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-421.php">Rockford IceHogs (2) vs Grand Rapids Griffins (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">422</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-422.php">Providence Bruins (4) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">423</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-423.php">Chicoutimi Saguenéens (3) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">424</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-424.php">Wilkes-Barre/Scranton Penguins (4) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">425</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-425.php">Peoria Rivermen (5) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">426</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-426.php">The Nuuk Vikings (1) vs Manitoba Moose (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 59</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">462</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-462.php">Winnipeg Jets (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">463</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-463.php">San Jose Sharks (2) vs Dallas Stars (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">464</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-464.php">New York Rangers (2) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">465</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-465.php">Tampa Bay Lightning (4) vs Seattle Kraken (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">466</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-466.php">Minnesota Wild (5) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">467</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-467.php">Philadelphia Flyers (3) vs Pittsburgh Penguins (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">468</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-468.php">Ottawa Senators (3) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">469</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-469.php">Vancouver Canucks (4) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">470</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-470.php">Florida Panthers (2) vs Columbus Blue Jackets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">471</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-471.php">Carolina Hurricanes (3) vs Colorado Avalanche (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">472</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-472.php">Chicago Blackhawks (1) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">473</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-473.php">Buffalo Sabres (3) vs Boston Bruins (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">427</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-427.php">Binghamton Senators (3) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">428</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-428.php">Adirondack Phantoms (2) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">429</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-429.php">Mercer Island Hafgufa (4) vs Providence Bruins (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">430</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-430.php">Rouyn-Noranda Huskies (1) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">431</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-431.php">Chicago Wolves (4) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">432</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-432.php">Milwaukee Admirals (6) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">433</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-433.php">Laval Chiefs (2) vs Henderson Silver Knights (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">434</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-434.php">Lake Erie Monsters (3) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">435</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-435.php">Joliette Sportif (4) vs Las Vegas Gamblers (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 60</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">474</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-474.php">Quebec Nordiques (2) vs Montreal Canadiens (4)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">475</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-475.php">Detroit Red Wings (5) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">476</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-476.php">Los Angeles Kings (1) vs Vegas Golden Knights (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">477</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-477.php">Edmonton Oilers (3) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">478</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-478.php">Seattle Kraken (2) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">479</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-479.php">Toronto Maple Leafs (2) vs Ottawa Senators (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">480</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-480.php">New Jersey Devils (2) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">481</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-481.php">New York Rangers (1) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">482</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-482.php">Dallas Stars (3) vs Philadelphia Flyers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">436</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-436.php">CCCP Red Army (1) vs Mercer Island Hafgufa (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">437</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-437.php">Charlotte Checkers (6) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">438</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-438.php">Connecticut Whale (3) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">439</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-439.php">Chicoutimi Saguenéens (4) vs Trois-Rivières Draveurs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">440</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-440.php">The Nuuk Vikings (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">441</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-441.php">Albany Devils (2) vs Rochester Americans (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">442</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-442.php">Manitoba Moose (3) vs Adirondack Phantoms (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 61</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">483</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-483.php">Los Angeles Kings (1) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">484</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-484.php">Arizona Coyotes (3) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">485</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-485.php">Carolina Hurricanes (4) vs Chicago Blackhawks (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">443</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-443.php">Las Vegas Gamblers (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">444</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-444.php">Lake Erie Monsters (3) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">445</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-445.php">Grand Rapids Griffins (1) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">446</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-446.php">Norfolk Admirals (4) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">447</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-447.php">Gatineau Olympiques (3) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">448</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-448.php">Binghamton Senators (5) vs Chicoutimi Saguenéens (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 62</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">486</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-486.php">Edmonton Oilers (4) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">487</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-487.php">Buffalo Sabres (6) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">488</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-488.php">Anaheim Ducks (1) vs Nashville Predators (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">449</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-449.php">Wilkes-Barre/Scranton Penguins (3) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">450</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-450.php">Manitoba Moose (1) vs CCCP Red Army (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">451</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-451.php">Roberval Dwarfs (1) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">452</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-452.php">Henderson Silver Knights (2) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">453</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-453.php">Houston Aeros (3) vs Oklahoma City Barons (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">454</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-454.php">Rockford IceHogs (2) vs The Nuuk Vikings (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">455</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-455.php">Albany Devils (4) vs Lake Erie Monsters (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 63</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">489</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-489.php">Ottawa Senators (2) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">490</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-490.php">San Jose Sharks (2) vs New York Rangers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">491</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-491.php">Carolina Hurricanes (1) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">492</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-492.php">Arizona Coyotes (1) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">493</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-493.php">Tampa Bay Lightning (4) vs Buffalo Sabres (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">456</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-456.php">Mercer Island Hafgufa (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">457</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-457.php">Chicago Wolves (0) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">458</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-458.php">Las Vegas Gamblers (3) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">459</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-459.php">Rochester Americans (4) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">460</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-460.php">Laval Chiefs (2) vs Houston Aeros (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 64</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">494</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-494.php">Florida Panthers (5) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">495</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-495.php">Minnesota Wild (2) vs Carolina Hurricanes (1)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">461</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-461.php">Charlotte Checkers (6) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">462</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-462.php">San Antonio Rampage (2) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">463</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-463.php">Oklahoma City Barons (3) vs Gatineau Olympiques (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">464</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-464.php">Wilkes-Barre/Scranton Penguins (4) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">465</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-465.php">Peoria Rivermen (4) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">466</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-466.php">The Nuuk Vikings (3) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">467</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-467.php">Joliette Sportif (1) vs Henderson Silver Knights (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">468</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-468.php">Bridgeport Sound Tigers (4) vs Mercer Island Hafgufa (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 65</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">496</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-496.php">Vancouver Canucks (3) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">497</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-497.php">Washington Capitals (3) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">498</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-498.php">Anaheim Ducks (2) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">499</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-499.php">Winnipeg Jets (2) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">500</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-500.php">Arizona Coyotes (3) vs Vegas Golden Knights (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">501</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-501.php">Colorado Avalanche (3) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">502</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-502.php">Philadelphia Flyers (3) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">503</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-503.php">Chicago Blackhawks (2) vs Boston Bruins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">504</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-504.php">New York Rangers (2) vs New York Islanders (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">505</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-505.php">Dallas Stars (2) vs Seattle Kraken (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">469</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-469.php">Grand Rapids Griffins (3) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">470</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-470.php">Connecticut Whale (4) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">471</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-471.php">Roberval Dwarfs (3) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">472</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-472.php">Chicago Wolves (0) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">473</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-473.php">Binghamton Senators (2) vs Rochester Americans (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 66</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">506</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-506.php">Quebec Nordiques (2) vs Montreal Canadiens (4)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">507</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-507.php">Detroit Red Wings (4) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">508</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-508.php">Los Angeles Kings (0) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">509</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-509.php">Ottawa Senators (1) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">510</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-510.php">Buffalo Sabres (0) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">511</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-511.php">Florida Panthers (2) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">512</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-512.php">Boston Bruins (3) vs Tampa Bay Lightning (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">513</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-513.php">Edmonton Oilers (2) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">514</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-514.php">Calgary Flames (5) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">515</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-515.php">Vegas Golden Knights (1) vs Philadelphia Flyers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">474</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-474.php">Albany Devils (4) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">475</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-475.php">Henderson Silver Knights (4) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">476</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-476.php">Oklahoma City Barons (3) vs Chicoutimi Saguenéens (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">477</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-477.php">Gatineau Olympiques (0) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">478</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-478.php">Charlotte Checkers (2) vs Wilkes-Barre/Scranton Penguins (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">479</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-479.php">Norfolk Admirals (4) vs CCCP Red Army (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">480</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-480.php">Springfield Falcons (2) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">481</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-481.php">Rockford IceHogs (5) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">482</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-482.php">The Nuuk Vikings (0) vs Chicago Wolves (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 67</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">516</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-516.php">New Jersey Devils (5) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">517</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-517.php">Columbus Blue Jackets (4) vs Winnipeg Jets (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">518</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-518.php">St. Louis Blues (4) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">519</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-519.php">New York Islanders (4) vs New York Rangers (7)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">520</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-520.php">Seattle Kraken (3) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">521</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-521.php">Pittsburgh Penguins (1) vs Ottawa Senators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">483</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-483.php">Milwaukee Admirals (0) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">484</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-484.php">Connecticut Whale (2) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">485</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-485.php">Houston Aeros (4) vs San Antonio Rampage (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">486</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-486.php">Manitoba Moose (3) vs Providence Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">487</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-487.php">Adirondack Phantoms (4) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">488</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-488.php">Rouyn-Noranda Huskies (3) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">489</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-489.php">Mercer Island Hafgufa (5) vs The Nuuk Vikings (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">490</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-490.php">Rochester Americans (4) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">491</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-491.php">Trois-Rivières Draveurs (5) vs Norfolk Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 68</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">522</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-522.php">San Jose Sharks (2) vs Detroit Red Wings (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">523</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-523.php">Montreal Canadiens (4) vs Florida Panthers (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">524</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-524.php">Nashville Predators (5) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">525</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-525.php">Los Angeles Kings (4) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">526</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-526.php">Edmonton Oilers (6) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">527</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-527.php">Columbus Blue Jackets (1) vs Toronto Maple Leafs (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">528</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-528.php">Anaheim Ducks (4) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">529</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-529.php">Tampa Bay Lightning (2) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">530</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-530.php">Minnesota Wild (2) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">531</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-531.php">Washington Capitals (1) vs Seattle Kraken (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">492</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-492.php">Wilkes-Barre/Scranton Penguins (4) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">493</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-493.php">CCCP Red Army (3) vs Connecticut Whale (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">494</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-494.php">Chicoutimi Saguenéens (4) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">495</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-495.php">Rockford IceHogs (2) vs Manitoba Moose (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">496</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-496.php">Henderson Silver Knights (1) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">497</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-497.php">Joliette Sportif (4) vs Gatineau Olympiques (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 69</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">532</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-532.php">Dallas Stars (5) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">533</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-533.php">Chicago Blackhawks (3) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">534</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-534.php">Philadelphia Flyers (1) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">535</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-535.php">Vegas Golden Knights (3) vs Boston Bruins (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">498</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-498.php">Milwaukee Admirals (6) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">499</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-499.php">Bridgeport Sound Tigers (3) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">500</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-500.php">Mercer Island Hafgufa (4) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">501</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-501.php">Rochester Americans (2) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">502</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-502.php">Roberval Dwarfs (3) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">503</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-503.php">Laval Chiefs (2) vs Las Vegas Gamblers (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">504</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-504.php">Grand Rapids Griffins (2) vs Henderson Silver Knights (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">505</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-505.php">Binghamton Senators (2) vs Lake Erie Monsters (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 70</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">536</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-536.php">New York Rangers (3) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">537</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-537.php">Ottawa Senators (1) vs New York Islanders (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">538</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-538.php">Quebec Nordiques (4) vs Colorado Avalanche (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">539</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-539.php">Toronto Maple Leafs (5) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">540</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-540.php">Minnesota Wild (3) vs Vancouver Canucks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">541</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-541.php">Detroit Red Wings (2) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">542</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-542.php">Winnipeg Jets (2) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">543</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-543.php">Carolina Hurricanes (2) vs Vegas Golden Knights (8)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">544</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-544.php">Tampa Bay Lightning (0) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">545</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-545.php">Boston Bruins (1) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">546</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-546.php">Philadelphia Flyers (1) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">547</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-547.php">New Jersey Devils (4) vs Chicago Blackhawks (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">506</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-506.php">Oklahoma City Barons (3) vs Mercer Island Hafgufa (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">507</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-507.php">Norfolk Admirals (1) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">508</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-508.php">Charlotte Checkers (3) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">509</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-509.php">Wilkes-Barre/Scranton Penguins (2) vs Joliette Sportif (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">510</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-510.php">Providence Bruins (3) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">511</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-511.php">San Antonio Rampage (4) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">512</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-512.php">Springfield Falcons (3) vs CCCP Red Army (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">513</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-513.php">Gatineau Olympiques (2) vs Rochester Americans (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 71</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">548</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-548.php">Buffalo Sabres (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">549</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-549.php">Seattle Kraken (2) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">550</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-550.php">Calgary Flames (2) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">551</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-551.php">St. Louis Blues (0) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">552</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-552.php">Pittsburgh Penguins (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">553</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-553.php">Nashville Predators (3) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">554</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-554.php">Florida Panthers (4) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">555</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-555.php">Montreal Canadiens (3) vs Carolina Hurricanes (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">556</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-556.php">Vancouver Canucks (4) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">557</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-557.php">Colorado Avalanche (1) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">558</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-558.php">New York Islanders (1) vs Toronto Maple Leafs (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">514</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-514.php">Connecticut Whale (3) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">515</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-515.php">Albany Devils (3) vs Grand Rapids Griffins (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">516</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-516.php">Bridgeport Sound Tigers (1) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">517</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-517.php">Peoria Rivermen (3) vs The Nuuk Vikings (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">518</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-518.php">Adirondack Phantoms (0) vs Providence Bruins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">519</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-519.php">Manitoba Moose (3) vs Charlotte Checkers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">520</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-520.php">Rouyn-Noranda Huskies (7) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">521</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-521.php">Lake Erie Monsters (4) vs San Antonio Rampage (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 72</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">559</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-559.php">Calgary Flames (1) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">560</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-560.php">Arizona Coyotes (3) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">561</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-561.php">Boston Bruins (3) vs Pittsburgh Penguins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">562</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-562.php">San Jose Sharks (1) vs St. Louis Blues (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">563</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-563.php">Washington Capitals (1) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">564</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-564.php">Vegas Golden Knights (2) vs Seattle Kraken (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">565</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-565.php">Dallas Stars (3) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">566</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-566.php">Chicago Blackhawks (3) vs Anaheim Ducks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">522</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-522.php">Chicoutimi Saguenéens (4) vs Binghamton Senators (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">523</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-523.php">Chicago Wolves (4) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">524</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-524.php">Rockford IceHogs (1) vs Norfolk Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">525</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-525.php">Trois-Rivières Draveurs (2) vs Bridgeport Sound Tigers (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">526</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-526.php">Las Vegas Gamblers (2) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">527</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-527.php">Gatineau Olympiques (2) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">528</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-528.php">Joliette Sportif (5) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">529</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-529.php">Lake Erie Monsters (3) vs Springfield Falcons (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">530</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-530.php">Henderson Silver Knights (2) vs Peoria Rivermen (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 73</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">567</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-567.php">Toronto Maple Leafs (1) vs Tampa Bay Lightning (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">568</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-568.php">Carolina Hurricanes (2) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">569</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-569.php">Winnipeg Jets (0) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">570</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-570.php">Los Angeles Kings (3) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">571</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-571.php">Edmonton Oilers (3) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">572</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-572.php">Ottawa Senators (0) vs Vancouver Canucks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">531</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-531.php">Rouyn-Noranda Huskies (3) vs Rockford IceHogs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">532</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-532.php">Mercer Island Hafgufa (3) vs Gatineau Olympiques (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">533</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-533.php">The Nuuk Vikings (3) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">534</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-534.php">Laval Chiefs (3) vs Adirondack Phantoms (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">535</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-535.php">CCCP Red Army (4) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">536</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-536.php">Rochester Americans (5) vs Trois-Rivières Draveurs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 74</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">573</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-573.php">St. Louis Blues (6) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">574</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-574.php">Washington Capitals (2) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">575</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-575.php">New York Rangers (3) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">576</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-576.php">New Jersey Devils (2) vs Vegas Golden Knights (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">537</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-537.php">Chicoutimi Saguenéens (6) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">538</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-538.php">Oklahoma City Barons (1) vs Henderson Silver Knights (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">539</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-539.php">Charlotte Checkers (2) vs Rouyn-Noranda Huskies (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">540</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-540.php">Chicago Wolves (3) vs Mercer Island Hafgufa (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">541</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-541.php">Grand Rapids Griffins (4) vs Joliette Sportif (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">542</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-542.php">Providence Bruins (2) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 75</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">577</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-577.php">Tampa Bay Lightning (4) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">578</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-578.php">Anaheim Ducks (4) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">579</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-579.php">Winnipeg Jets (0) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">580</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-580.php">Toronto Maple Leafs (3) vs Florida Panthers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">543</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-543.php">Lake Erie Monsters (3) vs Rochester Americans (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">544</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-544.php">Springfield Falcons (3) vs Laval Chiefs (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">545</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-545.php">CCCP Red Army (7) vs San Antonio Rampage (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">546</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-546.php">Adirondack Phantoms (1) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">547</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-547.php">Binghamton Senators (4) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">548</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-548.php">Roberval Dwarfs (1) vs Chicoutimi Saguenéens (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 76</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">581</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-581.php">New Jersey Devils (3) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">582</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-582.php">Edmonton Oilers (3) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">583</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-583.php">Pittsburgh Penguins (3) vs Philadelphia Flyers (4)</a>  - OT (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">584</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-584.php">Calgary Flames (1) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">585</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-585.php">Montreal Canadiens (6) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">586</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-586.php">Washington Capitals (3) vs New York Rangers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">587</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-587.php">St. Louis Blues (4) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">588</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-588.php">Dallas Stars (4) vs Winnipeg Jets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">589</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-589.php">Vancouver Canucks (1) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">590</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-590.php">San Jose Sharks (5) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">591</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-591.php">Columbus Blue Jackets (5) vs Tampa Bay Lightning (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">549</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-549.php">Norfolk Admirals (3) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">550</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-550.php">Rockford IceHogs (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">551</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-551.php">Albany Devils (2) vs The Nuuk Vikings (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">552</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-552.php">Trois-Rivières Draveurs (3) vs Charlotte Checkers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">553</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-553.php">Milwaukee Admirals (5) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">554</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-554.php">Peoria Rivermen (2) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">555</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-555.php">Oklahoma City Barons (3) vs CCCP Red Army (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">556</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-556.php">Wilkes-Barre/Scranton Penguins (1) vs Lake Erie Monsters (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 77</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">592</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-592.php">Florida Panthers (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">593</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-593.php">Seattle Kraken (5) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">594</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-594.php">Colorado Avalanche (3) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">595</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-595.php">Anaheim Ducks (3) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">596</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-596.php">Toronto Maple Leafs (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">597</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-597.php">Nashville Predators (4) vs Boston Bruins (5)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">557</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-557.php">Manitoba Moose (5) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">558</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-558.php">Houston Aeros (2) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">559</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-559.php">Springfield Falcons (3) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">560</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-560.php">Joliette Sportif (6) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">561</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-561.php">San Antonio Rampage (3) vs Gatineau Olympiques (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">562</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-562.php">Las Vegas Gamblers (4) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">563</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-563.php">Laval Chiefs (4) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">564</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-564.php">Rouyn-Noranda Huskies (1) vs Mercer Island Hafgufa (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 78</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">598</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-598.php">Los Angeles Kings (6) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">599</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-599.php">Detroit Red Wings (4) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">600</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-600.php">Ottawa Senators (2) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">601</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-601.php">San Jose Sharks (2) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">602</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-602.php">Carolina Hurricanes (3) vs Seattle Kraken (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">603</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-603.php">Minnesota Wild (3) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">604</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-604.php">New Jersey Devils (3) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">605</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-605.php">Vancouver Canucks (7) vs Philadelphia Flyers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">606</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-606.php">New York Rangers (3) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">607</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-607.php">Arizona Coyotes (4) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">608</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-608.php">Buffalo Sabres (1) vs Toronto Maple Leafs (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">565</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-565.php">Adirondack Phantoms (3) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">566</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-566.php">Providence Bruins (1) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">567</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-567.php">Chicoutimi Saguenéens (4) vs Henderson Silver Knights (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">568</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-568.php">Connecticut Whale (3) vs Roberval Dwarfs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">569</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-569.php">Grand Rapids Griffins (3) vs Trois-Rivières Draveurs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">570</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-570.php">Wilkes-Barre/Scranton Penguins (1) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">571</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-571.php">Rochester Americans (3) vs Las Vegas Gamblers (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">572</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-572.php">Chicago Wolves (2) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">573</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-573.php">Gatineau Olympiques (2) vs Joliette Sportif (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 79</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">609</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-609.php">San Jose Sharks (1) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">610</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-610.php">Boston Bruins (1) vs Winnipeg Jets (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">611</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-611.php">Tampa Bay Lightning (1) vs Florida Panthers (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">612</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-612.php">New York Islanders (1) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">613</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-613.php">Washington Capitals (3) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">614</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-614.php">Columbus Blue Jackets (3) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">615</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-615.php">Los Angeles Kings (1) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">616</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-616.php">St. Louis Blues (4) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">617</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-617.php">Chicago Blackhawks (2) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">618</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-618.php">Ottawa Senators (1) vs New York Rangers (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">574</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-574.php">Bridgeport Sound Tigers (5) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">575</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-575.php">San Antonio Rampage (5) vs Houston Aeros (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">576</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-576.php">Binghamton Senators (3) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">577</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-577.php">Wilkes-Barre/Scranton Penguins (3) vs CCCP Red Army (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">578</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-578.php">Lake Erie Monsters (2) vs Laval Chiefs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">579</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-579.php">Mercer Island Hafgufa (1) vs The Nuuk Vikings (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">580</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-580.php">Henderson Silver Knights (4) vs Chicago Wolves (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 80</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">619</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-619.php">Philadelphia Flyers (5) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">620</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-620.php">Calgary Flames (3) vs Carolina Hurricanes (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">621</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-621.php">Vegas Golden Knights (3) vs Edmonton Oilers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">622</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-622.php">Montreal Canadiens (2) vs Tampa Bay Lightning (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">581</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-581.php">Providence Bruins (4) vs Rochester Americans (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">582</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-582.php">Grand Rapids Griffins (1) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">583</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-583.php">Norfolk Admirals (3) vs Connecticut Whale (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">584</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-584.php">Albany Devils (4) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">585</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-585.php">Roberval Dwarfs (5) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">586</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-586.php">Milwaukee Admirals (3) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">587</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-587.php">Rockford IceHogs (4) vs Oklahoma City Barons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">588</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-588.php">CCCP Red Army (3) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">589</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-589.php">Trois-Rivières Draveurs (2) vs Manitoba Moose (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 81</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">623</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-623.php">Winnipeg Jets (6) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">624</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-624.php">Quebec Nordiques (6) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">625</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-625.php">Boston Bruins (2) vs Ottawa Senators (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">590</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-590.php">Peoria Rivermen (1) vs Grand Rapids Griffins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">591</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-591.php">Laval Chiefs (3) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">592</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-592.php">The Nuuk Vikings (0) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">593</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-593.php">Charlotte Checkers (2) vs Providence Bruins (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">594</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-594.php">Mercer Island Hafgufa (6) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">595</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-595.php">Joliette Sportif (2) vs Springfield Falcons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">596</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-596.php">Houston Aeros (3) vs Gatineau Olympiques (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 82</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">626</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-626.php">Minnesota Wild (1) vs Los Angeles Kings (8)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">627</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-627.php">New Jersey Devils (3) vs Pittsburgh Penguins (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">628</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-628.php">Buffalo Sabres (2) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">629</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-629.php">Montreal Canadiens (3) vs Colorado Avalanche (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">630</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-630.php">Edmonton Oilers (4) vs Columbus Blue Jackets (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">631</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-631.php">St. Louis Blues (1) vs Seattle Kraken (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">632</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-632.php">Vegas Golden Knights (2) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">633</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-633.php">Calgary Flames (4) vs Nashville Predators (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">634</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-634.php">Arizona Coyotes (3) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">635</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-635.php">Detroit Red Wings (1) vs Chicago Blackhawks (2)</a>  - OT (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">597</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-597.php">Chicago Wolves (5) vs Rockford IceHogs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">598</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-598.php">Roberval Dwarfs (2) vs Peoria Rivermen (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">599</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-599.php">Milwaukee Admirals (4) vs Rouyn-Noranda Huskies (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">600</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-600.php">Oklahoma City Barons (1) vs Las Vegas Gamblers (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">601</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-601.php">Connecticut Whale (2) vs Henderson Silver Knights (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">602</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-602.php">Trois-Rivières Draveurs (4) vs Adirondack Phantoms (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 83</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">636</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-636.php">Tampa Bay Lightning (1) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">637</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-637.php">Anaheim Ducks (3) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">638</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-638.php">Quebec Nordiques (3) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">639</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-639.php">Carolina Hurricanes (2) vs Philadelphia Flyers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">603</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-603.php">Gatineau Olympiques (1) vs Mercer Island Hafgufa (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">604</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-604.php">Manitoba Moose (2) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">605</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-605.php">Chicoutimi Saguenéens (3) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">606</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-606.php">Houston Aeros (4) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">607</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-607.php">CCCP Red Army (4) vs Trois-Rivières Draveurs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 84</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">640</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-640.php">Seattle Kraken (3) vs St. Louis Blues (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">641</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-641.php">Pittsburgh Penguins (4) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">642</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-642.php">Dallas Stars (1) vs Vegas Golden Knights (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">643</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-643.php">Minnesota Wild (1) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">644</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-644.php">Chicago Blackhawks (3) vs Detroit Red Wings (2)</a>  (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">608</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-608.php">Rouyn-Noranda Huskies (3) vs Milwaukee Admirals (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">609</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-609.php">Charlotte Checkers (4) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">610</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-610.php">Grand Rapids Griffins (2) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">611</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-611.php">Rockford IceHogs (2) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">612</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-612.php">Adirondack Phantoms (4) vs San Antonio Rampage (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">613</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-613.php">Providence Bruins (2) vs Laval Chiefs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 85</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">645</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-645.php">Colorado Avalanche (4) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">646</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-646.php">New Jersey Devils (5) vs Winnipeg Jets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">647</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-647.php">Washington Capitals (3) vs Arizona Coyotes (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">614</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-614.php">Springfield Falcons (3) vs Chicoutimi Saguenéens (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">615</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-615.php">Las Vegas Gamblers (4) vs The Nuuk Vikings (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">616</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-616.php">Binghamton Senators (2) vs CCCP Red Army (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">617</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-617.php">Gatineau Olympiques (3) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">618</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-618.php">Joliette Sportif (1) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">619</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-619.php">Norfolk Admirals (8) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 86</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">648</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-648.php">Vancouver Canucks (3) vs New York Rangers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">649</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-649.php">Pittsburgh Penguins (1) vs San Jose Sharks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">650</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-650.php">New York Islanders (5) vs Quebec Nordiques (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">651</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-651.php">Boston Bruins (2) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">652</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-652.php">Edmonton Oilers (3) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">653</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-653.php">Toronto Maple Leafs (4) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">654</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-654.php">Seattle Kraken (3) vs New Jersey Devils (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">620</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-620.php">Albany Devils (4) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">621</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-621.php">Peoria Rivermen (1) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">622</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-622.php">Roberval Dwarfs (5) vs Providence Bruins (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">623</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-623.php">Rouyn-Noranda Huskies (2) vs Grand Rapids Griffins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">624</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-624.php">Adirondack Phantoms (1) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">625</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-625.php">Bridgeport Sound Tigers (7) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">626</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-626.php">Rochester Americans (2) vs Manitoba Moose (1)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 87</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">655</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-655.php">Columbus Blue Jackets (5) vs Los Angeles Kings (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">656</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-656.php">St. Louis Blues (2) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">657</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-657.php">Philadelphia Flyers (1) vs Tampa Bay Lightning (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">658</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-658.php">Anaheim Ducks (4) vs Washington Capitals (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">659</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-659.php">Calgary Flames (3) vs Edmonton Oilers (2)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">660</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-660.php">Arizona Coyotes (2) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">661</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-661.php">Detroit Red Wings (3) vs Colorado Avalanche (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">662</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-662.php">Florida Panthers (1) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">663</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-663.php">Montreal Canadiens (4) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">664</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-664.php">Winnipeg Jets (4) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">665</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-665.php">Toronto Maple Leafs (4) vs Vegas Golden Knights (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">627</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-627.php">Wilkes-Barre/Scranton Penguins (3) vs Albany Devils (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">628</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-628.php">Las Vegas Gamblers (0) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">629</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-629.php">Lake Erie Monsters (3) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">630</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-630.php">Laval Chiefs (1) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">631</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-631.php">The Nuuk Vikings (1) vs Henderson Silver Knights (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">632</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-632.php">Joliette Sportif (3) vs Peoria Rivermen (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 88</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">666</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-666.php">Ottawa Senators (1) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">667</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-667.php">San Jose Sharks (3) vs Seattle Kraken (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">668</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-668.php">Buffalo Sabres (2) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">669</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-669.php">Vancouver Canucks (1) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">670</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-670.php">Minnesota Wild (1) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">671</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-671.php">Tampa Bay Lightning (3) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">672</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-672.php">Colorado Avalanche (3) vs Florida Panthers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">673</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-673.php">Washington Capitals (2) vs Philadelphia Flyers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">674</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-674.php">Calgary Flames (5) vs Montreal Canadiens (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">675</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-675.php">Anaheim Ducks (4) vs St. Louis Blues (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">633</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-633.php">Oklahoma City Barons (1) vs Mercer Island Hafgufa (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">634</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-634.php">Houston Aeros (4) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">635</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-635.php">Bridgeport Sound Tigers (1) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">636</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-636.php">Manitoba Moose (2) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">637</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-637.php">Chicago Wolves (3) vs Las Vegas Gamblers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">638</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-638.php">Adirondack Phantoms (4) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">639</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-639.php">Connecticut Whale (4) vs Rochester Americans (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">640</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-640.php">Providence Bruins (2) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">641</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-641.php">Charlotte Checkers (0) vs San Antonio Rampage (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 89</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">676</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-676.php">Carolina Hurricanes (1) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">677</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-677.php">Arizona Coyotes (2) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">678</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-678.php">Dallas Stars (4) vs Winnipeg Jets (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">679</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-679.php">Nashville Predators (4) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">680</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-680.php">Los Angeles Kings (3) vs San Jose Sharks (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">681</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-681.php">Vegas Golden Knights (1) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">682</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-682.php">Boston Bruins (5) vs Buffalo Sabres (7)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">642</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-642.php">Laval Chiefs (4) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">643</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-643.php">Binghamton Senators (2) vs Joliette Sportif (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">644</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-644.php">Grand Rapids Griffins (3) vs The Nuuk Vikings (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">645</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-645.php">Charlotte Checkers (4) vs CCCP Red Army (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">646</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-646.php">Springfield Falcons (5) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">647</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-647.php">Wilkes-Barre/Scranton Penguins (5) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">648</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-648.php">Gatineau Olympiques (2) vs Norfolk Admirals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">649</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-649.php">Rockford IceHogs (3) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">650</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-650.php">Connecticut Whale (4) vs Bridgeport Sound Tigers (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 90</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">683</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-683.php">Edmonton Oilers (6) vs Calgary Flames (1)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">684</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-684.php">Minnesota Wild (2) vs Ottawa Senators (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">685</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-685.php">New York Rangers (2) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">686</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-686.php">New York Islanders (2) vs Arizona Coyotes (9)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">687</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-687.php">Quebec Nordiques (3) vs Carolina Hurricanes (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">688</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-688.php">Chicago Blackhawks (0) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">689</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-689.php">Pittsburgh Penguins (4) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">690</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-690.php">Seattle Kraken (0) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">691</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-691.php">New Jersey Devils (5) vs Columbus Blue Jackets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">692</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-692.php">Colorado Avalanche (2) vs Nashville Predators (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">651</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-651.php">Peoria Rivermen (2) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">652</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-652.php">Oklahoma City Barons (4) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">653</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-653.php">Mercer Island Hafgufa (3) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">654</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-654.php">Manitoba Moose (4) vs Grand Rapids Griffins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">655</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-655.php">Rochester Americans (2) vs Wilkes-Barre/Scranton Penguins (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">656</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-656.php">Roberval Dwarfs (2) vs Binghamton Senators (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">657</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-657.php">Rouyn-Noranda Huskies (6) vs Henderson Silver Knights (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">658</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-658.php">Chicoutimi Saguenéens (2) vs Springfield Falcons (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 91</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">693</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-693.php">Winnipeg Jets (4) vs Minnesota Wild (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">694</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-694.php">Montreal Canadiens (5) vs Edmonton Oilers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">659</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-659.php">Lake Erie Monsters (1) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">660</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-660.php">Trois-Rivières Draveurs (3) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">661</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-661.php">Norfolk Admirals (4) vs Oklahoma City Barons (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">662</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-662.php">San Antonio Rampage (3) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">663</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-663.php">Joliette Sportif (0) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">664</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-664.php">CCCP Red Army (3) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">665</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-665.php">The Nuuk Vikings (1) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">666</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-666.php">Milwaukee Admirals (5) vs Las Vegas Gamblers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 92</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">695</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-695.php">Florida Panthers (4) vs New York Islanders (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">696</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-696.php">Boston Bruins (3) vs Pittsburgh Penguins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">697</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-697.php">Detroit Red Wings (2) vs Seattle Kraken (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">667</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-667.php">Chicago Wolves (4) vs Mercer Island Hafgufa (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">668</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-668.php">Chicoutimi Saguenéens (4) vs Rouyn-Noranda Huskies (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">669</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-669.php">Providence Bruins (1) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">670</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-670.php">Adirondack Phantoms (1) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">671</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-671.php">Rochester Americans (2) vs Roberval Dwarfs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">672</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-672.php">Norfolk Admirals (5) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">673</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-673.php">Laval Chiefs (2) vs Bridgeport Sound Tigers (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">674</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-674.php">Henderson Silver Knights (2) vs Houston Aeros (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 93</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">698</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-698.php">Carolina Hurricanes (2) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">699</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-699.php">New Jersey Devils (2) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">700</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-700.php">Anaheim Ducks (2) vs Philadelphia Flyers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">701</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-701.php">Winnipeg Jets (3) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">702</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-702.php">San Jose Sharks (4) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">703</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-703.php">Washington Capitals (1) vs Colorado Avalanche (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">704</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-704.php">Los Angeles Kings (2) vs Chicago Blackhawks (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">705</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-705.php">Nashville Predators (0) vs Montreal Canadiens (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">706</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-706.php">Calgary Flames (0) vs Vancouver Canucks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">707</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-707.php">Arizona Coyotes (1) vs New York Rangers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">708</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-708.php">Tampa Bay Lightning (4) vs Quebec Nordiques (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">675</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-675.php">Binghamton Senators (2) vs CCCP Red Army (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">676</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-676.php">Rockford IceHogs (3) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">677</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-677.php">Grand Rapids Griffins (3) vs Lake Erie Monsters (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">678</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-678.php">Gatineau Olympiques (4) vs The Nuuk Vikings (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">679</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-679.php">Albany Devils (2) vs Adirondack Phantoms (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">680</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-680.php">Springfield Falcons (4) vs Chicago Wolves (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">681</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-681.php">Wilkes-Barre/Scranton Penguins (1) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">682</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-682.php">Connecticut Whale (5) vs Chicoutimi Saguenéens (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 94</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">709</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-709.php">Ottawa Senators (6) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">710</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-710.php">New York Islanders (4) vs Buffalo Sabres (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">711</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-711.php">Seattle Kraken (5) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">712</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-712.php">Columbus Blue Jackets (3) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">713</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-713.php">Pittsburgh Penguins (3) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">714</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-714.php">Edmonton Oilers (1) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">715</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-715.php">Tampa Bay Lightning (2) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">716</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-716.php">Los Angeles Kings (5) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">717</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-717.php">Washington Capitals (3) vs New Jersey Devils (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">718</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-718.php">Montreal Canadiens (6) vs Anaheim Ducks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">683</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-683.php">Las Vegas Gamblers (2) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">684</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-684.php">Manitoba Moose (4) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">685</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-685.php">Henderson Silver Knights (0) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">686</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-686.php">Rouyn-Noranda Huskies (4) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">687</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-687.php">Houston Aeros (3) vs Grand Rapids Griffins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">688</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-688.php">Bridgeport Sound Tigers (2) vs Albany Devils (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">689</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-689.php">Roberval Dwarfs (5) vs Wilkes-Barre/Scranton Penguins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">690</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-690.php">Mercer Island Hafgufa (2) vs Binghamton Senators (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 95</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">719</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-719.php">New York Rangers (1) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">720</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-720.php">Philadelphia Flyers (4) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">721</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-721.php">Quebec Nordiques (6) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">722</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-722.php">Nashville Predators (0) vs Edmonton Oilers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">723</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-723.php">Toronto Maple Leafs (4) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">724</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-724.php">Colorado Avalanche (1) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">725</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-725.php">Chicago Blackhawks (3) vs St. Louis Blues (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">691</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-691.php">San Antonio Rampage (4) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">692</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-692.php">Peoria Rivermen (5) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">693</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-693.php">Milwaukee Admirals (3) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">694</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-694.php">Gatineau Olympiques (1) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">695</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-695.php">Trois-Rivières Draveurs (4) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">696</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-696.php">The Nuuk Vikings (2) vs Henderson Silver Knights (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">697</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-697.php">Lake Erie Monsters (6) vs Mercer Island Hafgufa (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 96</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">726</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-726.php">Vegas Golden Knights (1) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">727</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-727.php">Pittsburgh Penguins (4) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">728</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-728.php">Detroit Red Wings (4) vs Tampa Bay Lightning (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">729</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-729.php">Vancouver Canucks (4) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">730</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-730.php">Boston Bruins (4) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">731</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-731.php">Minnesota Wild (7) vs Seattle Kraken (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">732</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-732.php">Buffalo Sabres (3) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">733</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-733.php">Montreal Canadiens (1) vs Philadelphia Flyers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">734</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-734.php">Toronto Maple Leafs (5) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">735</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-735.php">Chicago Blackhawks (4) vs San Jose Sharks (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">698</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-698.php">Roberval Dwarfs (2) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">699</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-699.php">Bridgeport Sound Tigers (3) vs Las Vegas Gamblers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">700</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-700.php">Chicoutimi Saguenéens (3) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">701</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-701.php">Houston Aeros (3) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">702</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-702.php">Charlotte Checkers (4) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">703</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-703.php">Oklahoma City Barons (4) vs Milwaukee Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 97</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">736</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-736.php">Anaheim Ducks (2) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">737</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-737.php">St. Louis Blues (2) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">738</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-738.php">Quebec Nordiques (5) vs New York Rangers (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">704</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-704.php">Chicago Wolves (3) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">705</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-705.php">The Nuuk Vikings (1) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">706</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-706.php">Springfield Falcons (1) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">707</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-707.php">CCCP Red Army (6) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">708</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-708.php">Binghamton Senators (3) vs Lake Erie Monsters (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">709</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-709.php">Rockford IceHogs (3) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">710</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-710.php">Norfolk Admirals (3) vs Chicoutimi Saguenéens (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">711</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-711.php">Wilkes-Barre/Scranton Penguins (4) vs Roberval Dwarfs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 98</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">739</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-739.php">Arizona Coyotes (3) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">740</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-740.php">Seattle Kraken (3) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">741</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-741.php">Boston Bruins (2) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">742</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-742.php">Florida Panthers (4) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">743</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-743.php">Edmonton Oilers (4) vs Detroit Red Wings (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">712</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-712.php">Oklahoma City Barons (4) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">713</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-713.php">Grand Rapids Griffins (4) vs CCCP Red Army (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">714</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-714.php">Charlotte Checkers (1) vs Albany Devils (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">715</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-715.php">Providence Bruins (4) vs Connecticut Whale (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">716</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-716.php">Manitoba Moose (2) vs Bridgeport Sound Tigers (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">717</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-717.php">Henderson Silver Knights (3) vs Houston Aeros (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 99</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">744</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-744.php">Buffalo Sabres (5) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">745</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-745.php">Anaheim Ducks (2) vs Winnipeg Jets (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">746</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-746.php">Tampa Bay Lightning (3) vs Ottawa Senators (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">718</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-718.php">Rouyn-Noranda Huskies (4) vs The Nuuk Vikings (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">719</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-719.php">Rochester Americans (6) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">720</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-720.php">Adirondack Phantoms (1) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">721</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-721.php">Milwaukee Admirals (3) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">722</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-722.php">Peoria Rivermen (1) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">723</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-723.php">Trois-Rivières Draveurs (3) vs Providence Bruins (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">724</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-724.php">Las Vegas Gamblers (0) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">725</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-725.php">Springfield Falcons (3) vs Oklahoma City Barons (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">726</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-726.php">Lake Erie Monsters (3) vs Manitoba Moose (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 100</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">747</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-747.php">St. Louis Blues (2) vs Chicago Blackhawks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">748</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-748.php">Boston Bruins (4) vs Quebec Nordiques (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">749</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-749.php">Columbus Blue Jackets (2) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">750</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-750.php">Detroit Red Wings (1) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">751</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-751.php">Calgary Flames (5) vs Minnesota Wild (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">752</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-752.php">New York Rangers (1) vs Buffalo Sabres (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">727</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-727.php">Mercer Island Hafgufa (3) vs Rockford IceHogs (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">728</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-728.php">Bridgeport Sound Tigers (2) vs Gatineau Olympiques (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">729</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-729.php">Albany Devils (2) vs Henderson Silver Knights (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">730</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-730.php">San Antonio Rampage (1) vs Peoria Rivermen (0)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">731</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-731.php">Laval Chiefs (3) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">732</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-732.php">Houston Aeros (0) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">733</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-733.php">Roberval Dwarfs (1) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">734</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-734.php">The Nuuk Vikings (4) vs Milwaukee Admirals (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">735</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-735.php">Norfolk Admirals (1) vs Trois-Rivières Draveurs (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 101</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">753</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-753.php">Florida Panthers (3) vs Anaheim Ducks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">754</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-754.php">Tampa Bay Lightning (1) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">755</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-755.php">Winnipeg Jets (3) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">756</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-756.php">Pittsburgh Penguins (4) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">757</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-757.php">Philadelphia Flyers (2) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">758</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-758.php">Toronto Maple Leafs (4) vs New York Islanders (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">759</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-759.php">Seattle Kraken (4) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">760</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-760.php">Colorado Avalanche (1) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">761</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-761.php">Vegas Golden Knights (2) vs Nashville Predators (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">762</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-762.php">Montreal Canadiens (5) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">763</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-763.php">St. Louis Blues (6) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">764</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-764.php">Carolina Hurricanes (0) vs New Jersey Devils (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">736</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-736.php">Connecticut Whale (1) vs Mercer Island Hafgufa (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">737</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-737.php">CCCP Red Army (6) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">738</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-738.php">Binghamton Senators (2) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">739</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-739.php">Chicago Wolves (3) vs Rochester Americans (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">740</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-740.php">Wilkes-Barre/Scranton Penguins (1) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">741</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-741.php">Laval Chiefs (2) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">742</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-742.php">Gatineau Olympiques (2) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">743</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-743.php">Grand Rapids Griffins (3) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">744</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-744.php">Bridgeport Sound Tigers (3) vs Albany Devils (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 102</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">765</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-765.php">New York Rangers (4) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">766</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-766.php">Ottawa Senators (0) vs Pittsburgh Penguins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">767</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-767.php">Chicago Blackhawks (2) vs Colorado Avalanche (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">768</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-768.php">Quebec Nordiques (1) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">769</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-769.php">Calgary Flames (1) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">770</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-770.php">Vancouver Canucks (1) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">771</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-771.php">Detroit Red Wings (2) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">772</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-772.php">Arizona Coyotes (2) vs Seattle Kraken (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">773</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-773.php">Dallas Stars (2) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">774</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-774.php">New Jersey Devils (2) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">775</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-775.php">Edmonton Oilers (2) vs Winnipeg Jets (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">745</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-745.php">Houston Aeros (4) vs CCCP Red Army (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">746</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-746.php">Providence Bruins (3) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">747</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-747.php">Joliette Sportif (3) vs Charlotte Checkers (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">748</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-748.php">Binghamton Senators (4) vs Connecticut Whale (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">749</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-749.php">Manitoba Moose (2) vs The Nuuk Vikings (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">750</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-750.php">Henderson Silver Knights (2) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">751</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-751.php">Peoria Rivermen (0) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">752</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-752.php">Las Vegas Gamblers (4) vs Wilkes-Barre/Scranton Penguins (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">753</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-753.php">Milwaukee Admirals (4) vs Rockford IceHogs (5)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 103</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">776</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-776.php">Nashville Predators (2) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">777</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-777.php">Anaheim Ducks (6) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">778</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-778.php">New York Islanders (3) vs New York Rangers (1)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">779</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-779.php">San Jose Sharks (4) vs Chicago Blackhawks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">780</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-780.php">Washington Capitals (4) vs Quebec Nordiques (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">754</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-754.php">Rouyn-Noranda Huskies (2) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">755</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-755.php">Rochester Americans (4) vs Grand Rapids Griffins (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">756</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-756.php">Springfield Falcons (3) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">757</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-757.php">Lake Erie Monsters (3) vs Bridgeport Sound Tigers (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">758</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-758.php">Chicoutimi Saguenéens (2) vs Providence Bruins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">759</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-759.php">Albany Devils (4) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">760</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-760.php">Rockford IceHogs (0) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">761</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-761.php">Adirondack Phantoms (6) vs Henderson Silver Knights (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">762</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-762.php">Trois-Rivières Draveurs (0) vs Mercer Island Hafgufa (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 104</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">781</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-781.php">Carolina Hurricanes (1) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">782</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-782.php">Arizona Coyotes (1) vs Calgary Flames (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">763</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-763.php">Charlotte Checkers (4) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">764</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-764.php">Oklahoma City Barons (3) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">765</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-765.php">Lake Erie Monsters (2) vs Springfield Falcons (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">766</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-766.php">Norfolk Admirals (3) vs Las Vegas Gamblers (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">767</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-767.php">Joliette Sportif (3) vs San Antonio Rampage (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">768</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-768.php">Milwaukee Admirals (2) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">769</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-769.php">Roberval Dwarfs (4) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">770</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-770.php">Connecticut Whale (5) vs Adirondack Phantoms (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 105</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">783</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-783.php">Florida Panthers (3) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">784</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-784.php">Seattle Kraken (0) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">785</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-785.php">Vegas Golden Knights (5) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">786</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-786.php">Nashville Predators (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">787</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-787.php">Winnipeg Jets (3) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">788</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-788.php">New York Islanders (4) vs Carolina Hurricanes (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">789</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-789.php">Tampa Bay Lightning (2) vs Arizona Coyotes (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">771</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-771.php">Albany Devils (1) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">772</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-772.php">Chicoutimi Saguenéens (5) vs CCCP Red Army (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">773</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-773.php">Gatineau Olympiques (3) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">774</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-774.php">Roberval Dwarfs (3) vs Joliette Sportif (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">775</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-775.php">Grand Rapids Griffins (1) vs The Nuuk Vikings (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 106</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">790</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-790.php">Columbus Blue Jackets (3) vs Edmonton Oilers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">791</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-791.php">Pittsburgh Penguins (5) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">792</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-792.php">Vancouver Canucks (4) vs Dallas Stars (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">776</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-776.php">Charlotte Checkers (0) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">777</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-777.php">San Antonio Rampage (6) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">778</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-778.php">Providence Bruins (5) vs Chicoutimi Saguenéens (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">779</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-779.php">Wilkes-Barre/Scranton Penguins (2) vs Bridgeport Sound Tigers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">780</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-780.php">Oklahoma City Barons (4) vs Houston Aeros (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 107</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">793</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-793.php">Los Angeles Kings (3) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">794</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-794.php">New Jersey Devils (1) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">795</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-795.php">Boston Bruins (4) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">796</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-796.php">Calgary Flames (1) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">797</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-797.php">Nashville Predators (3) vs St. Louis Blues (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">798</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-798.php">Montreal Canadiens (4) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">799</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-799.php">Ottawa Senators (1) vs Toronto Maple Leafs (2)</a>  - OT (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">800</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-800.php">Florida Panthers (3) vs Vegas Golden Knights (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">801</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-801.php">New York Rangers (4) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">802</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-802.php">Chicago Blackhawks (2) vs Minnesota Wild (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">781</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-781.php">Springfield Falcons (2) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">782</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-782.php">Mercer Island Hafgufa (3) vs Lake Erie Monsters (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">783</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-783.php">Adirondack Phantoms (3) vs Roberval Dwarfs (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">784</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-784.php">The Nuuk Vikings (4) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">785</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-785.php">Manitoba Moose (2) vs Norfolk Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 108</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">803</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-803.php">Winnipeg Jets (5) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">804</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-804.php">Edmonton Oilers (0) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">805</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-805.php">Dallas Stars (2) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">806</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-806.php">Arizona Coyotes (1) vs Seattle Kraken (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">786</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-786.php">Peoria Rivermen (2) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">787</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-787.php">Bridgeport Sound Tigers (4) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">788</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-788.php">Houston Aeros (3) vs Grand Rapids Griffins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">789</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-789.php">Rockford IceHogs (2) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">790</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-790.php">Joliette Sportif (2) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">791</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-791.php">Laval Chiefs (4) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">792</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-792.php">Gatineau Olympiques (5) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">793</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-793.php">Rochester Americans (5) vs Henderson Silver Knights (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">794</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-794.php">Rouyn-Noranda Huskies (4) vs Las Vegas Gamblers (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 109</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">807</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-807.php">New York Rangers (3) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">808</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-808.php">Tampa Bay Lightning (2) vs New Jersey Devils (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">809</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-809.php">Montreal Canadiens (5) vs Ottawa Senators (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">810</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-810.php">Minnesota Wild (0) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">811</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-811.php">Colorado Avalanche (4) vs Chicago Blackhawks (3)</a>  - OT (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">795</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-795.php">Chicago Wolves (3) vs Springfield Falcons (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">796</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-796.php">Norfolk Admirals (3) vs Mercer Island Hafgufa (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">797</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-797.php">Connecticut Whale (3) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">798</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-798.php">Trois-Rivières Draveurs (3) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">799</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-799.php">Lake Erie Monsters (4) vs Gatineau Olympiques (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">800</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-800.php">Milwaukee Admirals (1) vs CCCP Red Army (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">801</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-801.php">Chicoutimi Saguenéens (3) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">802</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-802.php">Bridgeport Sound Tigers (1) vs Rouyn-Noranda Huskies (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">803</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-803.php">Charlotte Checkers (2) vs Adirondack Phantoms (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 110</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">812</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-812.php">Carolina Hurricanes (3) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">813</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-813.php">Toronto Maple Leafs (3) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">814</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-814.php">Boston Bruins (1) vs Anaheim Ducks (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">815</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-815.php">New York Islanders (3) vs Washington Capitals (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">816</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-816.php">Arizona Coyotes (1) vs Los Angeles Kings (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">817</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-817.php">Philadelphia Flyers (0) vs Winnipeg Jets (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">804</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-804.php">Oklahoma City Barons (5) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">805</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-805.php">Binghamton Senators (3) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">806</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-806.php">Laval Chiefs (6) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">807</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-807.php">Wilkes-Barre/Scranton Penguins (3) vs Milwaukee Admirals (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">808</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-808.php">Houston Aeros (1) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">809</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-809.php">Las Vegas Gamblers (4) vs Roberval Dwarfs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 111</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">818</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-818.php">Montreal Canadiens (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">819</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-819.php">New Jersey Devils (3) vs Boston Bruins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">820</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-820.php">Buffalo Sabres (4) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">821</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-821.php">Detroit Red Wings (1) vs Edmonton Oilers (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">810</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-810.php">Chicoutimi Saguenéens (4) vs The Nuuk Vikings (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">811</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-811.php">San Antonio Rampage (1) vs Connecticut Whale (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">812</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-812.php">Lake Erie Monsters (4) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">813</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-813.php">Adirondack Phantoms (4) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">814</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-814.php">Norfolk Admirals (3) vs Providence Bruins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">815</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-815.php">Mercer Island Hafgufa (3) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">816</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-816.php">Henderson Silver Knights (8) vs Binghamton Senators (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 112</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">822</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-822.php">Vegas Golden Knights (5) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">823</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-823.php">Winnipeg Jets (2) vs Arizona Coyotes (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">824</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-824.php">San Jose Sharks (3) vs Tampa Bay Lightning (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">817</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-817.php">Charlotte Checkers (4) vs Chicoutimi Saguenéens (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">818</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-818.php">Rochester Americans (4) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">819</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-819.php">Peoria Rivermen (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">820</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-820.php">Oklahoma City Barons (1) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">821</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-821.php">Roberval Dwarfs (7) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">822</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-822.php">Rouyn-Noranda Huskies (3) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">823</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-823.php">Las Vegas Gamblers (2) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">824</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-824.php">Gatineau Olympiques (4) vs Rockford IceHogs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 113</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">825</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-825.php">Buffalo Sabres (4) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">826</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-826.php">Calgary Flames (1) vs Dallas Stars (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">827</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-827.php">Seattle Kraken (3) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">828</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-828.php">Colorado Avalanche (2) vs St. Louis Blues (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">829</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-829.php">Ottawa Senators (1) vs Philadelphia Flyers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">825</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-825.php">San Antonio Rampage (1) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">826</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-826.php">Albany Devils (2) vs Oklahoma City Barons (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">827</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-827.php">The Nuuk Vikings (4) vs Springfield Falcons (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">828</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-828.php">Chicago Wolves (3) vs Henderson Silver Knights (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">829</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-829.php">Milwaukee Admirals (5) vs Mercer Island Hafgufa (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">830</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-830.php">Providence Bruins (5) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">831</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-831.php">CCCP Red Army (6) vs Trois-Rivières Draveurs (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">832</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-832.php">Joliette Sportif (3) vs Gatineau Olympiques (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 114</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">830</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-830.php">Toronto Maple Leafs (5) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">831</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-831.php">Washington Capitals (4) vs Nashville Predators (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">832</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-832.php">Tampa Bay Lightning (3) vs Ottawa Senators (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">833</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-833.php">Edmonton Oilers (4) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">834</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-834.php">Anaheim Ducks (0) vs Vegas Golden Knights (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">835</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-835.php">Chicago Blackhawks (4) vs San Jose Sharks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">833</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-833.php">Binghamton Senators (2) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">834</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-834.php">Rockford IceHogs (4) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">835</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-835.php">Adirondack Phantoms (2) vs CCCP Red Army (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">836</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-836.php">Roberval Dwarfs (2) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">837</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-837.php">Bridgeport Sound Tigers (5) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">838</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-838.php">Grand Rapids Griffins (5) vs Milwaukee Admirals (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 115</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">836</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-836.php">Philadelphia Flyers (4) vs Quebec Nordiques (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">837</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-837.php">St. Louis Blues (2) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">838</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-838.php">New York Rangers (3) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">839</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-839.php">Los Angeles Kings (4) vs Minnesota Wild (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">840</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-840.php">Columbus Blue Jackets (0) vs Seattle Kraken (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">839</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-839.php">Trois-Rivières Draveurs (2) vs Joliette Sportif (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">840</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-840.php">Manitoba Moose (0) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">841</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-841.php">The Nuuk Vikings (6) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">842</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-842.php">Chicoutimi Saguenéens (2) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">843</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-843.php">Wilkes-Barre/Scranton Penguins (4) vs Adirondack Phantoms (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">844</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-844.php">Rouyn-Noranda Huskies (2) vs Albany Devils (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 116</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">841</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-841.php">Montreal Canadiens (4) vs Toronto Maple Leafs (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">842</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-842.php">Pittsburgh Penguins (2) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">843</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-843.php">Nashville Predators (3) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">844</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-844.php">New York Islanders (6) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">845</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-845.php">Edmonton Oilers (2) vs Detroit Red Wings (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">846</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-846.php">San Jose Sharks (3) vs New Jersey Devils (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">845</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-845.php">Springfield Falcons (6) vs Roberval Dwarfs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">846</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-846.php">Grand Rapids Griffins (2) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">847</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-847.php">Bridgeport Sound Tigers (5) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">848</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-848.php">Peoria Rivermen (3) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">849</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-849.php">Henderson Silver Knights (3) vs The Nuuk Vikings (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">850</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-850.php">Rochester Americans (1) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">851</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-851.php">Norfolk Admirals (5) vs Charlotte Checkers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 117</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">847</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-847.php">Washington Capitals (4) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">848</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-848.php">Colorado Avalanche (5) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">849</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-849.php">Tampa Bay Lightning (4) vs Carolina Hurricanes (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">850</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-850.php">St. Louis Blues (1) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">851</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-851.php">Minnesota Wild (1) vs Anaheim Ducks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">852</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-852.php">Seattle Kraken (2) vs Boston Bruins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">853</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-853.php">Florida Panthers (5) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">854</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-854.php">Vegas Golden Knights (4) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">855</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-855.php">New York Islanders (1) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">856</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-856.php">San Jose Sharks (5) vs Edmonton Oilers (7)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">852</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-852.php">Albany Devils (2) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">853</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-853.php">Mercer Island Hafgufa (6) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">854</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-854.php">Oklahoma City Barons (1) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">855</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-855.php">CCCP Red Army (2) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">856</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-856.php">San Antonio Rampage (3) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">857</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-857.php">Trois-Rivières Draveurs (3) vs Bridgeport Sound Tigers (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 118</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">857</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-857.php">Quebec Nordiques (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">858</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-858.php">Philadelphia Flyers (2) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">859</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-859.php">Pittsburgh Penguins (2) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">860</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-860.php">Toronto Maple Leafs (4) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">861</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-861.php">Chicago Blackhawks (3) vs Vancouver Canucks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">862</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-862.php">Ottawa Senators (4) vs Nashville Predators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">858</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-858.php">Roberval Dwarfs (3) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">859</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-859.php">Peoria Rivermen (6) vs Springfield Falcons (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">860</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-860.php">Rouyn-Noranda Huskies (4) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">861</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-861.php">Gatineau Olympiques (3) vs Henderson Silver Knights (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">862</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-862.php">Laval Chiefs (2) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">863</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-863.php">Milwaukee Admirals (6) vs Mercer Island Hafgufa (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">864</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-864.php">Lake Erie Monsters (1) vs Chicago Wolves (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 119</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">863</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-863.php">Arizona Coyotes (3) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">864</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-864.php">Anaheim Ducks (2) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">865</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-865.php">Seattle Kraken (2) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">866</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-866.php">Florida Panthers (5) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">867</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-867.php">Buffalo Sabres (5) vs New York Islanders (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">868</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-868.php">New Jersey Devils (2) vs Philadelphia Flyers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">869</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-869.php">New York Rangers (3) vs Quebec Nordiques (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">865</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-865.php">Las Vegas Gamblers (6) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">866</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-866.php">Chicoutimi Saguenéens (1) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">867</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-867.php">Manitoba Moose (3) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">868</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-868.php">Albany Devils (2) vs CCCP Red Army (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">869</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-869.php">Rouyn-Noranda Huskies (2) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">870</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-870.php">Milwaukee Admirals (2) vs San Antonio Rampage (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 120</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">870</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-870.php">Ottawa Senators (3) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">871</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-871.php">Columbus Blue Jackets (4) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">872</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-872.php">Winnipeg Jets (3) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">873</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-873.php">Nashville Predators (3) vs Calgary Flames (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">871</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-871.php">Houston Aeros (3) vs Connecticut Whale (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">872</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-872.php">Bridgeport Sound Tigers (2) vs Rochester Americans (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">873</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-873.php">Norfolk Admirals (8) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">874</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-874.php">Grand Rapids Griffins (4) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">875</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-875.php">Charlotte Checkers (4) vs Laval Chiefs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">876</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-876.php">Lake Erie Monsters (5) vs The Nuuk Vikings (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">877</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-877.php">Oklahoma City Barons (4) vs Milwaukee Admirals (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 121</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">874</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-874.php">Colorado Avalanche (4) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">875</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-875.php">Boston Bruins (2) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">876</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-876.php">Florida Panthers (6) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">877</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-877.php">Montreal Canadiens (3) vs Buffalo Sabres (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">878</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-878.php">St. Louis Blues (3) vs Seattle Kraken (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">878</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-878.php">Henderson Silver Knights (4) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">879</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-879.php">Chicago Wolves (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">880</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-880.php">Joliette Sportif (2) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">881</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-881.php">Albany Devils (2) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">882</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-882.php">Springfield Falcons (1) vs Binghamton Senators (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">883</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-883.php">Trois-Rivières Draveurs (3) vs Houston Aeros (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">884</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-884.php">San Antonio Rampage (1) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">885</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-885.php">Gatineau Olympiques (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">886</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-886.php">CCCP Red Army (1) vs Lake Erie Monsters (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 122</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">879</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-879.php">Nashville Predators (2) vs Chicago Blackhawks (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">880</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-880.php">Detroit Red Wings (2) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">881</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-881.php">Vegas Golden Knights (5) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">882</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-882.php">Pittsburgh Penguins (3) vs New York Rangers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">883</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-883.php">Toronto Maple Leafs (2) vs Winnipeg Jets (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">887</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-887.php">Adirondack Phantoms (3) vs Bridgeport Sound Tigers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">888</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-888.php">Connecticut Whale (4) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">889</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-889.php">Providence Bruins (1) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">890</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-890.php">Rockford IceHogs (1) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">891</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-891.php">Las Vegas Gamblers (2) vs Oklahoma City Barons (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">892</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-892.php">Laval Chiefs (2) vs Mercer Island Hafgufa (9)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">893</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-893.php">The Nuuk Vikings (2) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">894</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-894.php">Peoria Rivermen (5) vs Henderson Silver Knights (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 123</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">884</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-884.php">Carolina Hurricanes (3) vs Washington Capitals (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">885</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-885.php">Calgary Flames (4) vs Anaheim Ducks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">886</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-886.php">St. Louis Blues (3) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">887</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-887.php">New Jersey Devils (2) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">888</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-888.php">San Jose Sharks (4) vs Arizona Coyotes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">889</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-889.php">Seattle Kraken (1) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">890</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-890.php">Buffalo Sabres (3) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">891</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-891.php">Minnesota Wild (3) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">892</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-892.php">Colorado Avalanche (3) vs Dallas Stars (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">893</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-893.php">New York Islanders (3) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">894</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-894.php">Detroit Red Wings (6) vs Vancouver Canucks (5)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">895</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-895.php">Binghamton Senators (3) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">896</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-896.php">Wilkes-Barre/Scranton Penguins (2) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">897</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-897.php">Lake Erie Monsters (3) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">898</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-898.php">Rochester Americans (3) vs Peoria Rivermen (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">899</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-899.php">Milwaukee Admirals (4) vs Joliette Sportif (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">900</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-900.php">Roberval Dwarfs (2) vs Trois-Rivières Draveurs (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">901</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-901.php">San Antonio Rampage (4) vs Chicago Wolves (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 124</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">895</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-895.php">Toronto Maple Leafs (5) vs Philadelphia Flyers (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">896</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-896.php">New York Rangers (1) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">897</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-897.php">Winnipeg Jets (1) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">898</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-898.php">Nashville Predators (4) vs Vegas Golden Knights (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">899</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-899.php">New Jersey Devils (1) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">900</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-900.php">Colorado Avalanche (4) vs Chicago Blackhawks (3)</a>  - OT (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">901</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-901.php">Calgary Flames (1) vs Los Angeles Kings (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">902</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-902.php">Ottawa Senators (1) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">903</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-903.php">Boston Bruins (3) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">904</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-904.php">Vancouver Canucks (3) vs San Jose Sharks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">905</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-905.php">Florida Panthers (4) vs Anaheim Ducks (5)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">902</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-902.php">Adirondack Phantoms (3) vs CCCP Red Army (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">903</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-903.php">Grand Rapids Griffins (4) vs Rouyn-Noranda Huskies (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">904</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-904.php">Providence Bruins (1) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">905</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-905.php">Charlotte Checkers (1) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">906</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-906.php">Oklahoma City Barons (2) vs Laval Chiefs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">907</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-907.php">Mercer Island Hafgufa (4) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">908</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-908.php">The Nuuk Vikings (3) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">909</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-909.php">Albany Devils (2) vs Milwaukee Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 125</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">906</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-906.php">Arizona Coyotes (2) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">907</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-907.php">Columbus Blue Jackets (1) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">908</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-908.php">Montreal Canadiens (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">909</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-909.php">Edmonton Oilers (5) vs Seattle Kraken (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">910</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-910.php">Philadelphia Flyers (4) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">911</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-911.php">Chicago Blackhawks (4) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">912</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-912.php">Quebec Nordiques (0) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">913</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-913.php">Dallas Stars (1) vs Ottawa Senators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">914</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-914.php">Los Angeles Kings (6) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">915</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-915.php">Vegas Golden Knights (1) vs Winnipeg Jets (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">910</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-910.php">Manitoba Moose (2) vs San Antonio Rampage (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">911</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-911.php">Norfolk Admirals (3) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">912</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-912.php">Henderson Silver Knights (6) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">913</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-913.php">Trois-Rivières Draveurs (3) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">914</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-914.php">Bridgeport Sound Tigers (1) vs Binghamton Senators (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">915</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-915.php">Grand Rapids Griffins (4) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">916</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-916.php">Joliette Sportif (1) vs The Nuuk Vikings (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">917</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-917.php">Chicago Wolves (3) vs Charlotte Checkers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">918</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-918.php">Connecticut Whale (4) vs Lake Erie Monsters (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 126</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">916</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-916.php">Pittsburgh Penguins (3) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">917</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-917.php">Boston Bruins (3) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">918</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-918.php">Carolina Hurricanes (4) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">919</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-919.php">Columbus Blue Jackets (4) vs Florida Panthers (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">919</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-919.php">Chicoutimi Saguenéens (4) vs Norfolk Admirals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">920</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-920.php">Laval Chiefs (6) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">921</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-921.php">CCCP Red Army (1) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">922</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-922.php">Houston Aeros (3) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">923</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-923.php">Gatineau Olympiques (3) vs Oklahoma City Barons (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">924</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-924.php">Rouyn-Noranda Huskies (2) vs Springfield Falcons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">925</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-925.php">Peoria Rivermen (6) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">926</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-926.php">Las Vegas Gamblers (2) vs Mercer Island Hafgufa (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 127</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">920</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-920.php">Minnesota Wild (0) vs Tampa Bay Lightning (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">921</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-921.php">Vancouver Canucks (1) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">922</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-922.php">Detroit Red Wings (6) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">923</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-923.php">Toronto Maple Leafs (3) vs Boston Bruins (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">927</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-927.php">Wilkes-Barre/Scranton Penguins (4) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">928</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-928.php">Chicago Wolves (1) vs Henderson Silver Knights (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">929</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-929.php">Rochester Americans (3) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">930</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-930.php">The Nuuk Vikings (3) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">931</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-931.php">Mercer Island Hafgufa (5) vs Peoria Rivermen (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">932</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-932.php">Springfield Falcons (4) vs Joliette Sportif (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">933</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-933.php">Binghamton Senators (1) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">934</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-934.php">Roberval Dwarfs (2) vs CCCP Red Army (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 128</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">924</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-924.php">Anaheim Ducks (5) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">925</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-925.php">Winnipeg Jets (2) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">926</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-926.php">Quebec Nordiques (1) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">927</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-927.php">Philadelphia Flyers (1) vs New York Islanders (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">928</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-928.php">Seattle Kraken (0) vs Vancouver Canucks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">929</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-929.php">Washington Capitals (3) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">930</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-930.php">New York Rangers (6) vs St. Louis Blues (7)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">931</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-931.php">Nashville Predators (2) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">932</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-932.php">Tampa Bay Lightning (3) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">933</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-933.php">New Jersey Devils (1) vs Colorado Avalanche (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">935</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-935.php">Adirondack Phantoms (4) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">936</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-936.php">Laval Chiefs (6) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">937</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-937.php">Chicoutimi Saguenéens (3) vs San Antonio Rampage (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">938</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-938.php">Lake Erie Monsters (2) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">939</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-939.php">Houston Aeros (7) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">940</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-940.php">Oklahoma City Barons (3) vs Chicago Wolves (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">941</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-941.php">Bridgeport Sound Tigers (4) vs Providence Bruins (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">942</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-942.php">Rockford IceHogs (3) vs Charlotte Checkers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">943</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-943.php">Binghamton Senators (5) vs Wilkes-Barre/Scranton Penguins (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 129</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">934</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-934.php">Los Angeles Kings (4) vs Quebec Nordiques (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">935</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-935.php">Toronto Maple Leafs (6) vs Philadelphia Flyers (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">936</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-936.php">Detroit Red Wings (3) vs Minnesota Wild (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">937</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-937.php">Chicago Blackhawks (5) vs Buffalo Sabres (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">944</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-944.php">Joliette Sportif (4) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">945</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-945.php">Trois-Rivières Draveurs (3) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">946</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-946.php">Henderson Silver Knights (4) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">947</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-947.php">Charlotte Checkers (3) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">948</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-948.php">Norfolk Admirals (3) vs The Nuuk Vikings (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">949</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-949.php">Manitoba Moose (7) vs Chicoutimi Saguenéens (6)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">950</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-950.php">Connecticut Whale (3) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">951</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-951.php">Springfield Falcons (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">952</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-952.php">Rouyn-Noranda Huskies (3) vs Lake Erie Monsters (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 130</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">938</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-938.php">San Jose Sharks (7) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">939</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-939.php">Nashville Predators (0) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">940</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-940.php">Montreal Canadiens (2) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">941</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-941.php">Colorado Avalanche (5) vs Carolina Hurricanes (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">942</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-942.php">Columbus Blue Jackets (4) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">943</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-943.php">New York Rangers (4) vs Seattle Kraken (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">944</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-944.php">Dallas Stars (1) vs Ottawa Senators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">945</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-945.php">New York Islanders (3) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">946</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-946.php">Edmonton Oilers (4) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">947</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-947.php">Vancouver Canucks (4) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">948</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-948.php">Pittsburgh Penguins (4) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">949</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-949.php">St. Louis Blues (5) vs Winnipeg Jets (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">953</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-953.php">Oklahoma City Barons (1) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">954</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-954.php">San Antonio Rampage (3) vs Bridgeport Sound Tigers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">955</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-955.php">Providence Bruins (3) vs Manitoba Moose (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">956</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-956.php">Milwaukee Admirals (4) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">957</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-957.php">Mercer Island Hafgufa (2) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">958</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-958.php">Las Vegas Gamblers (5) vs Henderson Silver Knights (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">959</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-959.php">CCCP Red Army (2) vs Gatineau Olympiques (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 131</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">950</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-950.php">Toronto Maple Leafs (1) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">951</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-951.php">Buffalo Sabres (5) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">952</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-952.php">Minnesota Wild (1) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">953</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-953.php">Washington Capitals (3) vs Tampa Bay Lightning (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">960</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-960.php">Lake Erie Monsters (0) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">961</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-961.php">Rockford IceHogs (2) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">962</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-962.php">The Nuuk Vikings (2) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">963</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-963.php">Joliette Sportif (1) vs Mercer Island Hafgufa (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">964</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-964.php">Grand Rapids Griffins (4) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">965</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-965.php">Albany Devils (1) vs CCCP Red Army (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 132</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">954</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-954.php">Columbus Blue Jackets (2) vs New York Rangers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">955</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-955.php">Carolina Hurricanes (1) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">956</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-956.php">Quebec Nordiques (2) vs Toronto Maple Leafs (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">966</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-966.php">Adirondack Phantoms (4) vs Trois-Rivières Draveurs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">967</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-967.php">Rouyn-Noranda Huskies (3) vs Rochester Americans (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">968</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-968.php">Milwaukee Admirals (5) vs Chicago Wolves (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">969</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-969.php">Wilkes-Barre/Scranton Penguins (4) vs San Antonio Rampage (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">970</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-970.php">Bridgeport Sound Tigers (1) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">971</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-971.php">Laval Chiefs (3) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">972</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-972.php">Providence Bruins (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">973</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-973.php">Gatineau Olympiques (2) vs Houston Aeros (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">974</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-974.php">Manitoba Moose (2) vs Roberval Dwarfs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 133</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">957</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-957.php">Buffalo Sabres (2) vs Edmonton Oilers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">958</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-958.php">Los Angeles Kings (2) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">959</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-959.php">Minnesota Wild (5) vs New York Islanders (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">960</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-960.php">New Jersey Devils (2) vs Philadelphia Flyers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">975</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-975.php">Rockford IceHogs (2) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">976</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-976.php">Albany Devils (2) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">977</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-977.php">Springfield Falcons (4) vs Milwaukee Admirals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">978</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-978.php">Grand Rapids Griffins (3) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">979</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-979.php">Henderson Silver Knights (2) vs The Nuuk Vikings (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">980</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-980.php">CCCP Red Army (1) vs Charlotte Checkers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 134</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">961</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-961.php">Boston Bruins (5) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">962</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-962.php">St. Louis Blues (5) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">963</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-963.php">Seattle Kraken (2) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">964</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-964.php">Calgary Flames (4) vs San Jose Sharks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">965</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-965.php">Carolina Hurricanes (2) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">966</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-966.php">Tampa Bay Lightning (3) vs Quebec Nordiques (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">981</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-981.php">Connecticut Whale (2) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">982</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-982.php">San Antonio Rampage (3) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">983</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-983.php">Rochester Americans (2) vs Laval Chiefs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">984</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-984.php">Roberval Dwarfs (1) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">985</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-985.php">Trois-Rivières Draveurs (3) vs Lake Erie Monsters (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">986</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-986.php">Chicago Wolves (5) vs Bridgeport Sound Tigers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">987</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-987.php">CCCP Red Army (2) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">988</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-988.php">Peoria Rivermen (3) vs Grand Rapids Griffins (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 135</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">967</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-967.php">Los Angeles Kings (4) vs Anaheim Ducks (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">968</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-968.php">Florida Panthers (4) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">969</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-969.php">Winnipeg Jets (4) vs Ottawa Senators (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">970</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-970.php">Philadelphia Flyers (6) vs Colorado Avalanche (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">989</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-989.php">Binghamton Senators (2) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">990</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-990.php">Charlotte Checkers (4) vs Oklahoma City Barons (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">991</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-991.php">Houston Aeros (2) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">992</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-992.php">Las Vegas Gamblers (1) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">993</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-993.php">Joliette Sportif (3) vs Mercer Island Hafgufa (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 136</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">971</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-971.php">Pittsburgh Penguins (1) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">972</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-972.php">Detroit Red Wings (2) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">973</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-973.php">San Jose Sharks (5) vs Nashville Predators (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">994</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-994.php">Peoria Rivermen (1) vs Henderson Silver Knights (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">995</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-995.php">Providence Bruins (2) vs Gatineau Olympiques (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">996</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-996.php">Lake Erie Monsters (3) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">997</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-997.php">Rouyn-Noranda Huskies (5) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">998</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-998.php">Milwaukee Admirals (3) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">999</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-999.php">Wilkes-Barre/Scranton Penguins (1) vs Trois-Rivières Draveurs (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 137</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">974</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-974.php">Colorado Avalanche (3) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">975</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-975.php">Ottawa Senators (1) vs Florida Panthers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">976</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-976.php">Vegas Golden Knights (4) vs Seattle Kraken (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">977</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-977.php">Vancouver Canucks (3) vs Buffalo Sabres (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">978</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-978.php">Dallas Stars (5) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">979</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-979.php">Philadelphia Flyers (3) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">980</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-980.php">Chicago Blackhawks (2) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">981</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-981.php">New York Islanders (3) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">982</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-982.php">San Jose Sharks (4) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">983</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-983.php">Edmonton Oilers (1) vs Boston Bruins (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1000</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1000.php">Springfield Falcons (4) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1001</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1001.php">San Antonio Rampage (5) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1002</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1002.php">Oklahoma City Barons (2) vs Joliette Sportif (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1003</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1003.php">Bridgeport Sound Tigers (4) vs CCCP Red Army (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1004</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1004.php">Grand Rapids Griffins (0) vs Adirondack Phantoms (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 138</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">984</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-984.php">Anaheim Ducks (2) vs Detroit Red Wings (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">985</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-985.php">Calgary Flames (5) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">986</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-986.php">Columbus Blue Jackets (4) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">987</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-987.php">Pittsburgh Penguins (3) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">988</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-988.php">St. Louis Blues (6) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">989</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-989.php">Quebec Nordiques (5) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">990</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-990.php">Arizona Coyotes (5) vs Edmonton Oilers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">991</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-991.php">Montreal Canadiens (5) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">992</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-992.php">Washington Capitals (3) vs New York Islanders (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">993</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-993.php">Vancouver Canucks (4) vs Vegas Golden Knights (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1005</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1005.php">Wilkes-Barre/Scranton Penguins (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1006</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1006.php">Gatineau Olympiques (4) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1007</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1007.php">Chicago Wolves (3) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1008</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1008.php">Henderson Silver Knights (3) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1009</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1009.php">Rochester Americans (4) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1010</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1010.php">Trois-Rivières Draveurs (3) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1011</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1011.php">Adirondack Phantoms (2) vs The Nuuk Vikings (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1012</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1012.php">Norfolk Admirals (2) vs San Antonio Rampage (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1013</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1013.php">Connecticut Whale (6) vs Charlotte Checkers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 139</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">994</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-994.php">Ottawa Senators (1) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">995</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-995.php">Florida Panthers (5) vs Philadelphia Flyers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">996</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-996.php">Buffalo Sabres (2) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">997</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-997.php">Boston Bruins (3) vs Minnesota Wild (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">998</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-998.php">Winnipeg Jets (3) vs Chicago Blackhawks (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1014</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1014.php">Springfield Falcons (4) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1015</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1015.php">Oklahoma City Barons (3) vs Providence Bruins (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1016</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1016.php">Manitoba Moose (1) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1017</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1017.php">Joliette Sportif (3) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1018</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1018.php">CCCP Red Army (2) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1019</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1019.php">Grand Rapids Griffins (1) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1020</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1020.php">Charlotte Checkers (5) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1021</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1021.php">Rochester Americans (2) vs Rockford IceHogs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 140</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">999</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-999.php">Carolina Hurricanes (5) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1000</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1000.php">Anaheim Ducks (5) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1001</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1001.php">Toronto Maple Leafs (4) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1002</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1002.php">Dallas Stars (2) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1003</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1003.php">Detroit Red Wings (1) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1004</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1004.php">Los Angeles Kings (2) vs Nashville Predators (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1022</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1022.php">Roberval Dwarfs (1) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1023</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1023.php">Laval Chiefs (3) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1024</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1024.php">Milwaukee Admirals (3) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1025</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1025.php">Peoria Rivermen (3) vs Mercer Island Hafgufa (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1026</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1026.php">Houston Aeros (1) vs Henderson Silver Knights (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1027</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1027.php">Gatineau Olympiques (5) vs Las Vegas Gamblers (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1028</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1028.php">Rouyn-Noranda Huskies (5) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1029</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1029.php">The Nuuk Vikings (6) vs Trois-Rivières Draveurs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 141</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1005</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1005.php">Tampa Bay Lightning (3) vs Pittsburgh Penguins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1006</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1006.php">Edmonton Oilers (4) vs Seattle Kraken (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1007</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1007.php">Montreal Canadiens (0) vs New York Rangers (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1008</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1008.php">Winnipeg Jets (2) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1009</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1009.php">Philadelphia Flyers (6) vs Florida Panthers (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1010</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1010.php">Boston Bruins (1) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1011</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1011.php">Vegas Golden Knights (3) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1012</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1012.php">Minnesota Wild (6) vs Arizona Coyotes (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1013</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1013.php">New York Islanders (2) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1014</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1014.php">Toronto Maple Leafs (2) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1015</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1015.php">Los Angeles Kings (4) vs Detroit Red Wings (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1030</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1030.php">Rockford IceHogs (4) vs Peoria Rivermen (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1031</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1031.php">San Antonio Rampage (6) vs Gatineau Olympiques (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1032</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1032.php">CCCP Red Army (6) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1033</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1033.php">Laval Chiefs (4) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1034</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1034.php">Bridgeport Sound Tigers (2) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1035</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1035.php">Joliette Sportif (1) vs Connecticut Whale (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 142</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1016</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1016.php">New Jersey Devils (2) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1017</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1017.php">Montreal Canadiens (5) vs Boston Bruins (7)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1018</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1018.php">Quebec Nordiques (5) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1019</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1019.php">Minnesota Wild (2) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1020</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1020.php">St. Louis Blues (2) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1021</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1021.php">Columbus Blue Jackets (5) vs Dallas Stars (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1036</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1036.php">Las Vegas Gamblers (4) vs Rochester Americans (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1037</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1037.php">Roberval Dwarfs (3) vs The Nuuk Vikings (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1038</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1038.php">Rouyn-Noranda Huskies (3) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1039</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1039.php">Providence Bruins (3) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1040</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1040.php">Trois-Rivières Draveurs (3) vs Milwaukee Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 143</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1022</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1022.php">Seattle Kraken (2) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1023</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1023.php">Chicago Blackhawks (3) vs Los Angeles Kings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1024</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1024.php">Pittsburgh Penguins (1) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1025</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1025.php">Buffalo Sabres (3) vs Vancouver Canucks (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1026</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1026.php">San Jose Sharks (0) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1027</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1027.php">Washington Capitals (4) vs Columbus Blue Jackets (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1028</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1028.php">Colorado Avalanche (4) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1029</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1029.php">New York Rangers (3) vs Philadelphia Flyers (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1030</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1030.php">St. Louis Blues (3) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1031</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1031.php">Florida Panthers (6) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1032</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1032.php">Anaheim Ducks (2) vs Arizona Coyotes (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1041</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1041.php">Connecticut Whale (0) vs San Antonio Rampage (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1042</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1042.php">Joliette Sportif (1) vs CCCP Red Army (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1043</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1043.php">Chicoutimi Saguenéens (3) vs Charlotte Checkers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1044</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1044.php">Henderson Silver Knights (5) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1045</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1045.php">Albany Devils (5) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1046</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1046.php">Rockford IceHogs (6) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1047</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1047.php">Mercer Island Hafgufa (6) vs Roberval Dwarfs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 144</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1033</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1033.php">Boston Bruins (2) vs Montreal Canadiens (6)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1034</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1034.php">New York Rangers (2) vs Ottawa Senators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1035</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1035.php">Dallas Stars (2) vs Chicago Blackhawks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1048</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1048.php">Binghamton Senators (1) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1049</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1049.php">Milwaukee Admirals (0) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1050</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1050.php">Grand Rapids Griffins (5) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1051</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1051.php">Peoria Rivermen (2) vs Joliette Sportif (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1052</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1052.php">Chicago Wolves (2) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1053</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1053.php">Trois-Rivières Draveurs (4) vs Albany Devils (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1054</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1054.php">The Nuuk Vikings (3) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1055</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1055.php">Lake Erie Monsters (0) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1056</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1056.php">Springfield Falcons (3) vs Mercer Island Hafgufa (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 145</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1036</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1036.php">Vancouver Canucks (1) vs Seattle Kraken (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1037</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1037.php">Edmonton Oilers (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1038</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1038.php">Columbus Blue Jackets (1) vs San Jose Sharks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1039</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1039.php">Nashville Predators (1) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1040</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1040.php">Calgary Flames (4) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1041</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1041.php">Toronto Maple Leafs (2) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1042</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1042.php">New Jersey Devils (1) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1043</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1043.php">Detroit Red Wings (4) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1044</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1044.php">Quebec Nordiques (1) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1045</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1045.php">Philadelphia Flyers (4) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1046</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1046.php">Dallas Stars (3) vs St. Louis Blues (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1057</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1057.php">Charlotte Checkers (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1058</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1058.php">Henderson Silver Knights (5) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1059</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1059.php">Norfolk Admirals (4) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1060</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1060.php">Springfield Falcons (3) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1061</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1061.php">Houston Aeros (0) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1062</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1062.php">Adirondack Phantoms (1) vs Rochester Americans (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 146</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1047</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1047.php">Vegas Golden Knights (3) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1048</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1048.php">Montreal Canadiens (1) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1049</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1049.php">New York Islanders (4) vs Tampa Bay Lightning (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1050</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1050.php">Boston Bruins (2) vs New York Rangers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1051</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1051.php">Buffalo Sabres (3) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1052</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1052.php">Colorado Avalanche (2) vs Detroit Red Wings (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1053</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1053.php">Ottawa Senators (1) vs Toronto Maple Leafs (6)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1054</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1054.php">Arizona Coyotes (2) vs Edmonton Oilers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1055</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1055.php">Pittsburgh Penguins (3) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1056</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1056.php">Philadelphia Flyers (2) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1057</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1057.php">Anaheim Ducks (3) vs Chicago Blackhawks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1063</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1063.php">Bridgeport Sound Tigers (4) vs Henderson Silver Knights (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1064</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1064.php">CCCP Red Army (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1065</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1065.php">Mercer Island Hafgufa (1) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1066</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1066.php">Roberval Dwarfs (5) vs Connecticut Whale (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1067</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1067.php">Rouyn-Noranda Huskies (2) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1068</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1068.php">Rockford IceHogs (4) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1069</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1069.php">Providence Bruins (4) vs Adirondack Phantoms (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1070</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1070.php">Laval Chiefs (1) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1071</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1071.php">Gatineau Olympiques (4) vs Milwaukee Admirals (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 147</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1058</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1058.php">Dallas Stars (4) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1059</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1059.php">Washington Capitals (4) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1060</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1060.php">Carolina Hurricanes (3) vs New York Islanders (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1072</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1072.php">Oklahoma City Barons (2) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1073</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1073.php">Albany Devils (3) vs Binghamton Senators (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1074</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1074.php">Norfolk Admirals (3) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1075</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1075.php">Lake Erie Monsters (4) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1076</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1076.php">Milwaukee Admirals (3) vs The Nuuk Vikings (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1077</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1077.php">Rochester Americans (4) vs CCCP Red Army (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1078</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1078.php">Roberval Dwarfs (4) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1079</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1079.php">Bridgeport Sound Tigers (3) vs Manitoba Moose (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 148</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1061</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1061.php">San Jose Sharks (2) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1062</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1062.php">St. Louis Blues (1) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1063</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1063.php">Winnipeg Jets (3) vs Calgary Flames (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1064</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1064.php">Seattle Kraken (2) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1065</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1065.php">Los Angeles Kings (3) vs Ottawa Senators (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1080</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1080.php">Trois-Rivières Draveurs (3) vs Laval Chiefs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1081</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1081.php">Connecticut Whale (4) vs Providence Bruins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1082</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1082.php">Peoria Rivermen (1) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1083</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1083.php">Wilkes-Barre/Scranton Penguins (4) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1084</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1084.php">Binghamton Senators (1) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1085</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1085.php">Las Vegas Gamblers (4) vs Lake Erie Monsters (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 149</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1066</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1066.php">Vancouver Canucks (4) vs Dallas Stars (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1067</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1067.php">Carolina Hurricanes (2) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1068</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1068.php">Columbus Blue Jackets (5) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1069</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1069.php">Montreal Canadiens (5) vs Florida Panthers (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1070</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1070.php">Anaheim Ducks (0) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1071</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1071.php">New Jersey Devils (2) vs Pittsburgh Penguins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1072</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1072.php">Chicago Blackhawks (1) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1073</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1073.php">Calgary Flames (2) vs San Jose Sharks (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1074</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1074.php">Los Angeles Kings (4) vs Seattle Kraken (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1075</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1075.php">Buffalo Sabres (3) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1076</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1076.php">Washington Capitals (0) vs Tampa Bay Lightning (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1086</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1086.php">Manitoba Moose (0) vs Roberval Dwarfs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1087</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1087.php">Adirondack Phantoms (0) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1088</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1088.php">The Nuuk Vikings (1) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1089</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1089.php">Rochester Americans (4) vs Bridgeport Sound Tigers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1090</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1090.php">Henderson Silver Knights (3) vs Mercer Island Hafgufa (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1091</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1091.php">Providence Bruins (3) vs Rockford IceHogs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 150</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1077</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1077.php">Philadelphia Flyers (4) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1078</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1078.php">Edmonton Oilers (4) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1079</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1079.php">Quebec Nordiques (1) vs Toronto Maple Leafs (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1080</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1080.php">Vancouver Canucks (1) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1081</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1081.php">Pittsburgh Penguins (3) vs New Jersey Devils (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1082</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1082.php">New York Islanders (3) vs Washington Capitals (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1092</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1092.php">Charlotte Checkers (4) vs Springfield Falcons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1093</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1093.php">Peoria Rivermen (1) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1094</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1094.php">Chicago Wolves (4) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1095</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1095.php">Rockford IceHogs (4) vs Henderson Silver Knights (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1096</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1096.php">CCCP Red Army (2) vs Chicoutimi Saguenéens (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1097</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1097.php">Trois-Rivières Draveurs (2) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1098</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1098.php">Rouyn-Noranda Huskies (6) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1099</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1099.php">Albany Devils (2) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1100</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1100.php">Laval Chiefs (1) vs Houston Aeros (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 151</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1083</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1083.php">Ottawa Senators (5) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1084</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1084.php">Vegas Golden Knights (3) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1085</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1085.php">Nashville Predators (2) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1086</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1086.php">Tampa Bay Lightning (1) vs Boston Bruins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1087</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1087.php">Columbus Blue Jackets (3) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1088</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1088.php">New York Rangers (4) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1089</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1089.php">Minnesota Wild (3) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1090</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1090.php">Chicago Blackhawks (3) vs Dallas Stars (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1091</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1091.php">Quebec Nordiques (3) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1092</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1092.php">Arizona Coyotes (5) vs Colorado Avalanche (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1093</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1093.php">San Jose Sharks (5) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1094</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1094.php">Calgary Flames (4) vs Seattle Kraken (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1101</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1101.php">Joliette Sportif (1) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1102</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1102.php">Manitoba Moose (4) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1103</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1103.php">Rochester Americans (0) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1104</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1104.php">Bridgeport Sound Tigers (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1105</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1105.php">Mercer Island Hafgufa (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1106</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1106.php">Norfolk Admirals (6) vs Binghamton Senators (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 152</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1095</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1095.php">St. Louis Blues (1) vs Vegas Golden Knights (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1096</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1096.php">Winnipeg Jets (4) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1097</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1097.php">Philadelphia Flyers (2) vs Columbus Blue Jackets (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1098</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1098.php">Buffalo Sabres (4) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1099</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1099.php">Minnesota Wild (1) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1100</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1100.php">Arizona Coyotes (2) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1101</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1101.php">New Jersey Devils (1) vs Ottawa Senators (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1107</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1107.php">Laval Chiefs (1) vs The Nuuk Vikings (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1108</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1108.php">Springfield Falcons (1) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1109</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1109.php">Providence Bruins (2) vs CCCP Red Army (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1110</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1110.php">Lake Erie Monsters (3) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1111</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1111.php">Chicoutimi Saguenéens (3) vs Roberval Dwarfs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 153</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1102</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1102.php">New York Islanders (1) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1103</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1103.php">Dallas Stars (3) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1104</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1104.php">Pittsburgh Penguins (5) vs Quebec Nordiques (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1105</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1105.php">Florida Panthers (4) vs New York Rangers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1106</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1106.php">Winnipeg Jets (4) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1107</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1107.php">Boston Bruins (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1108</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1108.php">Los Angeles Kings (5) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1109</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1109.php">Detroit Red Wings (4) vs Anaheim Ducks (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1110</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1110.php">Nashville Predators (1) vs Toronto Maple Leafs (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1111</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1111.php">Montreal Canadiens (3) vs St. Louis Blues (2)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1112</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1112.php">Connecticut Whale (5) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1113</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1113.php">Las Vegas Gamblers (3) vs Rouyn-Noranda Huskies (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1114</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1114.php">Henderson Silver Knights (2) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1115</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1115.php">CCCP Red Army (3) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1116</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1116.php">Adirondack Phantoms (2) vs Albany Devils (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1117</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1117.php">Gatineau Olympiques (3) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1118</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1118.php">Binghamton Senators (7) vs Providence Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1119</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1119.php">Joliette Sportif (1) vs Lake Erie Monsters (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 154</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1112</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1112.php">Columbus Blue Jackets (3) vs Philadelphia Flyers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1113</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1113.php">Colorado Avalanche (4) vs Arizona Coyotes (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1114</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1114.php">Vancouver Canucks (3) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1115</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1115.php">New Jersey Devils (1) vs Pittsburgh Penguins (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1120</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1120.php">Milwaukee Admirals (8) vs Laval Chiefs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1121</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1121.php">Mercer Island Hafgufa (2) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1122</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1122.php">Wilkes-Barre/Scranton Penguins (4) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1123</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1123.php">Connecticut Whale (5) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1124</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1124.php">Houston Aeros (1) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1125</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1125.php">The Nuuk Vikings (2) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1126</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1126.php">Peoria Rivermen (0) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1127</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1127.php">Charlotte Checkers (7) vs Henderson Silver Knights (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 155</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1116</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1116.php">Toronto Maple Leafs (4) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1117</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1117.php">Detroit Red Wings (3) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1118</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1118.php">Dallas Stars (3) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1119</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1119.php">Ottawa Senators (2) vs Edmonton Oilers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1120</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1120.php">Vegas Golden Knights (4) vs Los Angeles Kings (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1121</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1121.php">Calgary Flames (4) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1122</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1122.php">Tampa Bay Lightning (3) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1123</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1123.php">Carolina Hurricanes (3) vs New York Islanders (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1124</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1124.php">Nashville Predators (3) vs Seattle Kraken (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1125</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1125.php">Arizona Coyotes (1) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1126</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1126.php">Anaheim Ducks (3) vs Quebec Nordiques (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1127</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1127.php">St. Louis Blues (4) vs Florida Panthers (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1128</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1128.php">Rockford IceHogs (2) vs Mercer Island Hafgufa (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1129</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1129.php">Springfield Falcons (2) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1130</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1130.php">San Antonio Rampage (4) vs Chicoutimi Saguenéens (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1131</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1131.php">Oklahoma City Barons (4) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1132</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1132.php">Adirondack Phantoms (3) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1133</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1133.php">Albany Devils (3) vs Trois-Rivières Draveurs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1134</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1134.php">Rouyn-Noranda Huskies (3) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1135</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1135.php">Norfolk Admirals (6) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1136</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1136.php">Milwaukee Admirals (4) vs Roberval Dwarfs (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4"><b>----------- Trade Deadline --- Trades can’t be done after this day is simulated!</b></td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 156</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1128</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1128.php">Chicago Blackhawks (5) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1129</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1129.php">New York Islanders (8) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1130</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1130.php">San Jose Sharks (4) vs Colorado Avalanche (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1131</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1131.php">New York Rangers (5) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1132</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1132.php">Florida Panthers (3) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1133</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1133.php">Buffalo Sabres (5) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1134</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1134.php">Pittsburgh Penguins (1) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1135</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1135.php">Ottawa Senators (4) vs Washington Capitals (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1137</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1137.php">Grand Rapids Griffins (4) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1138</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1138.php">Las Vegas Gamblers (2) vs CCCP Red Army (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1139</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1139.php">Henderson Silver Knights (0) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1140</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1140.php">Gatineau Olympiques (5) vs The Nuuk Vikings (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 157</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1136</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1136.php">Columbus Blue Jackets (4) vs Nashville Predators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1137</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1137.php">Colorado Avalanche (2) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1138</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1138.php">Boston Bruins (2) vs San Jose Sharks (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1139</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1139.php">Toronto Maple Leafs (3) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1140</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1140.php">Ottawa Senators (1) vs Tampa Bay Lightning (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1141</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1141.php">Vancouver Canucks (1) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1142</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1142.php">Minnesota Wild (3) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1143</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1143.php">Washington Capitals (7) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1144</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1144.php">Dallas Stars (2) vs Anaheim Ducks (1)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1141</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1141.php">Adirondack Phantoms (2) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1142</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1142.php">Peoria Rivermen (4) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1143</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1143.php">Bridgeport Sound Tigers (1) vs Manitoba Moose (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1144</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1144.php">Rockford IceHogs (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1145</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1145.php">Roberval Dwarfs (3) vs Charlotte Checkers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1146</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1146.php">The Nuuk Vikings (4) vs Lake Erie Monsters (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 158</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1145</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1145.php">Columbus Blue Jackets (3) vs Pittsburgh Penguins (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1146</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1146.php">Minnesota Wild (2) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1147</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1147.php">New York Rangers (3) vs Toronto Maple Leafs (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1147</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1147.php">Wilkes-Barre/Scranton Penguins (5) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1148</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1148.php">Gatineau Olympiques (3) vs Laval Chiefs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1149</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1149.php">Springfield Falcons (2) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1150</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1150.php">Las Vegas Gamblers (2) vs Adirondack Phantoms (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1151</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1151.php">Manitoba Moose (2) vs Norfolk Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 159</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1148</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1148.php">Carolina Hurricanes (3) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1149</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1149.php">Chicago Blackhawks (5) vs Ottawa Senators (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1150</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1150.php">Quebec Nordiques (4) vs New Jersey Devils (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1151</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1151.php">San Jose Sharks (3) vs Edmonton Oilers (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1152</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1152.php">Roberval Dwarfs (3) vs Grand Rapids Griffins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1153</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1153.php">Chicago Wolves (3) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1154</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1154.php">Mercer Island Hafgufa (3) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1155</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1155.php">San Antonio Rampage (3) vs Bridgeport Sound Tigers (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1156</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1156.php">Gatineau Olympiques (2) vs Henderson Silver Knights (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1157</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1157.php">Rochester Americans (4) vs Rockford IceHogs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1158</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1158.php">Trois-Rivières Draveurs (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1159</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1159.php">Binghamton Senators (4) vs Springfield Falcons (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 160</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1152</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1152.php">Washington Capitals (5) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1153</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1153.php">Minnesota Wild (3) vs Winnipeg Jets (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1154</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1154.php">Florida Panthers (2) vs Montreal Canadiens (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1155</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1155.php">New York Islanders (6) vs Boston Bruins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1156</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1156.php">Pittsburgh Penguins (5) vs Seattle Kraken (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1160</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1160.php">Henderson Silver Knights (5) vs Mercer Island Hafgufa (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1161</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1161.php">Peoria Rivermen (3) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1162</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1162.php">Rockford IceHogs (3) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1163</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1163.php">Rochester Americans (4) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1164</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1164.php">Providence Bruins (5) vs Houston Aeros (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1165</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1165.php">Binghamton Senators (3) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1166</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1166.php">Trois-Rivières Draveurs (4) vs CCCP Red Army (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1167</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1167.php">Grand Rapids Griffins (4) vs Connecticut Whale (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 161</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1157</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1157.php">Edmonton Oilers (4) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1158</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1158.php">St. Louis Blues (3) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1159</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1159.php">Vancouver Canucks (2) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1160</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1160.php">Philadelphia Flyers (4) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1161</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1161.php">San Jose Sharks (4) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1162</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1162.php">New Jersey Devils (6) vs Quebec Nordiques (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1168</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1168.php">Rockford IceHogs (6) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1169</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1169.php">Mercer Island Hafgufa (2) vs Joliette Sportif (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1170</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1170.php">Albany Devils (5) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1171</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1171.php">CCCP Red Army (4) vs Wilkes-Barre/Scranton Penguins (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1172</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1172.php">Henderson Silver Knights (3) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1173</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1173.php">Connecticut Whale (1) vs Adirondack Phantoms (2)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 162</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1163</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1163.php">Pittsburgh Penguins (5) vs New York Islanders (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1164</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1164.php">Minnesota Wild (2) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1165</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1165.php">Los Angeles Kings (2) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1166</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1166.php">San Jose Sharks (5) vs Anaheim Ducks (6)</a>  (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1174</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1174.php">Springfield Falcons (2) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1175</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1175.php">Las Vegas Gamblers (3) vs Rouyn-Noranda Huskies (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1176</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1176.php">Chicoutimi Saguenéens (1) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1177</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1177.php">Grand Rapids Griffins (2) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1178</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1178.php">Oklahoma City Barons (4) vs The Nuuk Vikings (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1179</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1179.php">San Antonio Rampage (2) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1180</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1180.php">Trois-Rivières Draveurs (1) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1181</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1181.php">Albany Devils (4) vs Providence Bruins (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 163</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1167</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1167.php">New York Rangers (1) vs Philadelphia Flyers (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1168</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1168.php">Colorado Avalanche (3) vs Vancouver Canucks (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1182</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1182.php">Connecticut Whale (6) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1183</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1183.php">Lake Erie Monsters (3) vs Norfolk Admirals (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1184</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1184.php">Wilkes-Barre/Scranton Penguins (2) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1185</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1185.php">Adirondack Phantoms (1) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1186</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1186.php">Joliette Sportif (1) vs Grand Rapids Griffins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1187</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1187.php">Roberval Dwarfs (3) vs Oklahoma City Barons (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 164</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1169</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1169.php">Quebec Nordiques (3) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1170</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1170.php">Ottawa Senators (4) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1171</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1171.php">Montreal Canadiens (2) vs Columbus Blue Jackets (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1188</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1188.php">CCCP Red Army (1) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1189</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1189.php">Springfield Falcons (3) vs Mercer Island Hafgufa (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1190</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1190.php">Henderson Silver Knights (1) vs Chicago Wolves (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1191</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1191.php">Milwaukee Admirals (3) vs Chicoutimi Saguenéens (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1192</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1192.php">Rockford IceHogs (4) vs Gatineau Olympiques (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 165</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1172</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1172.php">Calgary Flames (5) vs Arizona Coyotes (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1173</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1173.php">Carolina Hurricanes (6) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1174</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1174.php">Toronto Maple Leafs (6) vs Washington Capitals (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1193</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1193.php">Rockford IceHogs (0) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1194</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1194.php">Joliette Sportif (5) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1195</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1195.php">Trois-Rivières Draveurs (2) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1196</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1196.php">Charlotte Checkers (1) vs Peoria Rivermen (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1197</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1197.php">Springfield Falcons (5) vs Henderson Silver Knights (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1198</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1198.php">Rouyn-Noranda Huskies (4) vs Laval Chiefs (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1199</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1199.php">Chicoutimi Saguenéens (4) vs The Nuuk Vikings (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 166</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1175</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1175.php">Seattle Kraken (4) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1176</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1176.php">Montreal Canadiens (2) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1177</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1177.php">Los Angeles Kings (5) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1178</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1178.php">Quebec Nordiques (3) vs New Jersey Devils (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1179</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1179.php">Philadelphia Flyers (5) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1180</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1180.php">Chicago Blackhawks (4) vs Edmonton Oilers (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1181</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1181.php">New York Rangers (4) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1182</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1182.php">Vegas Golden Knights (1) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1183</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1183.php">Florida Panthers (4) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1184</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1184.php">New York Islanders (6) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1185</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1185.php">Anaheim Ducks (4) vs Minnesota Wild (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1200</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1200.php">San Antonio Rampage (1) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1201</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1201.php">Wilkes-Barre/Scranton Penguins (4) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1202</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1202.php">Manitoba Moose (0) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1203</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1203.php">Bridgeport Sound Tigers (2) vs Connecticut Whale (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1204</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1204.php">Rouyn-Noranda Huskies (2) vs Adirondack Phantoms (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1205</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1205.php">Providence Bruins (4) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1206</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1206.php">Laval Chiefs (1) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1207</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1207.php">Peoria Rivermen (5) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1208</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1208.php">Las Vegas Gamblers (5) vs Joliette Sportif (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 167</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1186</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1186.php">Dallas Stars (3) vs Los Angeles Kings (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1187</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1187.php">Calgary Flames (3) vs New York Rangers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1188</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1188.php">Tampa Bay Lightning (2) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1189</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1189.php">Colorado Avalanche (1) vs Seattle Kraken (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1190</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1190.php">Pittsburgh Penguins (1) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1191</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1191.php">Vancouver Canucks (4) vs Nashville Predators (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1209</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1209.php">Gatineau Olympiques (4) vs Milwaukee Admirals (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1210</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1210.php">Charlotte Checkers (2) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1211</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1211.php">Houston Aeros (2) vs CCCP Red Army (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1212</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1212.php">Chicoutimi Saguenéens (3) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1213</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1213.php">The Nuuk Vikings (4) vs Trois-Rivières Draveurs (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1214</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1214.php">San Antonio Rampage (5) vs Wilkes-Barre/Scranton Penguins (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1215</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1215.php">Peoria Rivermen (4) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1216</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1216.php">Albany Devils (2) vs Providence Bruins (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 168</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1192</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1192.php">Anaheim Ducks (4) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1193</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1193.php">Quebec Nordiques (1) vs New York Islanders (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1194</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1194.php">Tampa Bay Lightning (1) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1195</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1195.php">San Jose Sharks (0) vs Arizona Coyotes (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1217</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1217.php">Binghamton Senators (2) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1218</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1218.php">Grand Rapids Griffins (3) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1219</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1219.php">Norfolk Admirals (4) vs Bridgeport Sound Tigers (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1220</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1220.php">Connecticut Whale (2) vs Albany Devils (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1221</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1221.php">The Nuuk Vikings (3) vs Mercer Island Hafgufa (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1222</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1222.php">Joliette Sportif (1) vs Chicago Wolves (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 169</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1196</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1196.php">Calgary Flames (3) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1197</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1197.php">Boston Bruins (1) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1198</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1198.php">Winnipeg Jets (3) vs Vancouver Canucks (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1223</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1223.php">Adirondack Phantoms (4) vs Grand Rapids Griffins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1224</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1224.php">Las Vegas Gamblers (5) vs Henderson Silver Knights (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1225</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1225.php">Springfield Falcons (3) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1226</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1226.php">Milwaukee Admirals (1) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1227</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1227.php">Manitoba Moose (0) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1228</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1228.php">Trois-Rivières Draveurs (4) vs Rochester Americans (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 170</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1199</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1199.php">Minnesota Wild (1) vs Chicago Blackhawks (8)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1200</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1200.php">New Jersey Devils (3) vs Buffalo Sabres (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1201</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1201.php">Columbus Blue Jackets (3) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1202</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1202.php">Quebec Nordiques (2) vs Florida Panthers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1229</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1229.php">Lake Erie Monsters (5) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1230</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1230.php">Mercer Island Hafgufa (4) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1231</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1231.php">Springfield Falcons (4) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1232</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1232.php">Chicago Wolves (2) vs CCCP Red Army (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1233</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1233.php">Joliette Sportif (2) vs Laval Chiefs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 171</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1203</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1203.php">New York Islanders (6) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1204</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1204.php">Carolina Hurricanes (2) vs Washington Capitals (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1234</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1234.php">Peoria Rivermen (3) vs San Antonio Rampage (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1235</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1235.php">Chicoutimi Saguenéens (4) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1236</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1236.php">Laval Chiefs (4) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1237</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1237.php">Rockford IceHogs (2) vs Roberval Dwarfs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1238</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1238.php">Wilkes-Barre/Scranton Penguins (2) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1239</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1239.php">Rochester Americans (2) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1240</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1240.php">Adirondack Phantoms (2) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1241</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1241.php">The Nuuk Vikings (2) vs Providence Bruins (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 172</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1205</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1205.php">Seattle Kraken (4) vs Winnipeg Jets (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1206</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1206.php">Florida Panthers (4) vs Tampa Bay Lightning (5)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1207</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1207.php">Nashville Predators (4) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1208</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1208.php">Chicago Blackhawks (3) vs Edmonton Oilers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1209</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1209.php">Washington Capitals (2) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1210</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1210.php">Vegas Golden Knights (0) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1211</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1211.php">Detroit Red Wings (2) vs Anaheim Ducks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1212</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1212.php">Dallas Stars (1) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1213</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1213.php">Buffalo Sabres (3) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1214</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1214.php">Los Angeles Kings (2) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1215</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1215.php">Columbus Blue Jackets (3) vs New York Rangers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1242</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1242.php">Peoria Rivermen (3) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1243</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1243.php">Gatineau Olympiques (4) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1244</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1244.php">Houston Aeros (3) vs Springfield Falcons (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1245</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1245.php">Las Vegas Gamblers (3) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1246</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1246.php">Wilkes-Barre/Scranton Penguins (5) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1247</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1247.php">Mercer Island Hafgufa (3) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1248</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1248.php">Providence Bruins (1) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1249</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1249.php">Chicoutimi Saguenéens (3) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1250</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1250.php">Chicago Wolves (6) vs The Nuuk Vikings (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 173</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1216</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1216.php">New York Islanders (2) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1217</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1217.php">New Jersey Devils (3) vs Carolina Hurricanes (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1218</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1218.php">Winnipeg Jets (3) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1219</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1219.php">St. Louis Blues (4) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1220</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1220.php">Colorado Avalanche (0) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1221</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1221.php">Nashville Predators (4) vs Los Angeles Kings (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1222</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1222.php">Edmonton Oilers (2) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1223</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1223.php">Vancouver Canucks (0) vs Seattle Kraken (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1251</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1251.php">Binghamton Senators (1) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1252</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1252.php">Roberval Dwarfs (1) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1253</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1253.php">Laval Chiefs (3) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1254</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1254.php">Houston Aeros (4) vs Mercer Island Hafgufa (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 174</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1224</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1224.php">St. Louis Blues (5) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1225</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1225.php">Nashville Predators (2) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1226</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1226.php">Calgary Flames (3) vs Detroit Red Wings (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1227</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1227.php">New York Islanders (1) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1228</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1228.php">Chicago Blackhawks (2) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1229</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1229.php">Seattle Kraken (5) vs Florida Panthers (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1230</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1230.php">New York Rangers (0) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1231</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1231.php">Buffalo Sabres (3) vs Ottawa Senators (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1232</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1232.php">Boston Bruins (2) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1233</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1233.php">Vegas Golden Knights (0) vs Colorado Avalanche (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1255</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1255.php">Trois-Rivières Draveurs (1) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1256</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1256.php">Mercer Island Hafgufa (1) vs Henderson Silver Knights (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1257</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1257.php">Las Vegas Gamblers (3) vs Chicago Wolves (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 175</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1234</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1234.php">Washington Capitals (1) vs Toronto Maple Leafs (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1235</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1235.php">Vancouver Canucks (2) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1236</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1236.php">New York Islanders (1) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1237</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1237.php">Dallas Stars (1) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1238</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1238.php">Carolina Hurricanes (2) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1239</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1239.php">Arizona Coyotes (5) vs Winnipeg Jets (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1258</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1258.php">Henderson Silver Knights (4) vs Gatineau Olympiques (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1259</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1259.php">Milwaukee Admirals (3) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1260</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1260.php">Oklahoma City Barons (3) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1261</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1261.php">Mercer Island Hafgufa (2) vs San Antonio Rampage (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1262</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1262.php">Springfield Falcons (2) vs Rochester Americans (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 176</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1240</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1240.php">St. Louis Blues (3) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1241</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1241.php">Detroit Red Wings (1) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1242</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1242.php">Arizona Coyotes (3) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1243</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1243.php">Seattle Kraken (1) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1244</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1244.php">Vegas Golden Knights (1) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1245</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1245.php">Toronto Maple Leafs (1) vs Quebec Nordiques (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1246</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1246.php">Edmonton Oilers (1) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1247</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1247.php">Ottawa Senators (3) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1248</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1248.php">Philadelphia Flyers (3) vs New York Rangers (2)</a>  - OT (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1249</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1249.php">Pittsburgh Penguins (3) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1250</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1250.php">Florida Panthers (3) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1251</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1251.php">Colorado Avalanche (5) vs Minnesota Wild (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1263</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1263.php">San Antonio Rampage (2) vs CCCP Red Army (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1264</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1264.php">Chicago Wolves (2) vs Houston Aeros (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1265</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1265.php">Lake Erie Monsters (5) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1266</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1266.php">Charlotte Checkers (5) vs Connecticut Whale (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1267</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1267.php">Gatineau Olympiques (5) vs Las Vegas Gamblers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 177</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1252</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1252.php">Tampa Bay Lightning (2) vs New York Islanders (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1253</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1253.php">Anaheim Ducks (2) vs Los Angeles Kings (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1254</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1254.php">Detroit Red Wings (1) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1255</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1255.php">Quebec Nordiques (2) vs Dallas Stars (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1268</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1268.php">Connecticut Whale (4) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1269</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1269.php">Rouyn-Noranda Huskies (5) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1270</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1270.php">Mercer Island Hafgufa (4) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1271</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1271.php">Houston Aeros (2) vs The Nuuk Vikings (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1272</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1272.php">Lake Erie Monsters (3) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1273</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1273.php">Henderson Silver Knights (4) vs Joliette Sportif (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 178</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1256</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1256.php">Winnipeg Jets (5) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1257</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1257.php">Nashville Predators (0) vs Seattle Kraken (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1274</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1274.php">Norfolk Admirals (1) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1275</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1275.php">Rockford IceHogs (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1276</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1276.php">Rochester Americans (2) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1277</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1277.php">Laval Chiefs (1) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1278</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1278.php">CCCP Red Army (4) vs Providence Bruins (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 179</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1258</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1258.php">Seattle Kraken (1) vs Vegas Golden Knights (0)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1259</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1259.php">Buffalo Sabres (2) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1260</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1260.php">Nashville Predators (3) vs Arizona Coyotes (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1261</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1261.php">Colorado Avalanche (3) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1262</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1262.php">Chicago Blackhawks (0) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1263</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1263.php">Dallas Stars (2) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1264</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1264.php">San Jose Sharks (1) vs Detroit Red Wings (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1279</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1279.php">Gatineau Olympiques (5) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1280</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1280.php">San Antonio Rampage (3) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1281</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1281.php">Chicoutimi Saguenéens (2) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1282</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1282.php">Roberval Dwarfs (1) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1283</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1283.php">Chicago Wolves (3) vs Lake Erie Monsters (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1284</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1284.php">Springfield Falcons (1) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1285</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1285.php">Binghamton Senators (4) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1286</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1286.php">Manitoba Moose (1) vs Oklahoma City Barons (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 180</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1265</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1265.php">Arizona Coyotes (3) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1266</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1266.php">Vancouver Canucks (0) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1267</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1267.php">Columbus Blue Jackets (4) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1268</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1268.php">Dallas Stars (1) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1269</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1269.php">Philadelphia Flyers (4) vs Washington Capitals (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1287</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1287.php">Chicago Wolves (2) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1288</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1288.php">Houston Aeros (3) vs Mercer Island Hafgufa (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 181</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1270</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1270.php">Florida Panthers (3) vs Tampa Bay Lightning (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1271</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1271.php">Washington Capitals (2) vs Carolina Hurricanes (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1272</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1272.php">Dallas Stars (3) vs Los Angeles Kings (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1273</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1273.php">Philadelphia Flyers (4) vs New York Rangers (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1274</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1274.php">Winnipeg Jets (2) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1275</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1275.php">Seattle Kraken (2) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1276</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1276.php">Ottawa Senators (6) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1277</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1277.php">Anaheim Ducks (2) vs Minnesota Wild (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1278</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1278.php">Detroit Red Wings (5) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1279</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1279.php">Columbus Blue Jackets (3) vs New Jersey Devils (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1289</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1289.php">Mercer Island Hafgufa (3) vs Henderson Silver Knights (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1290</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1290.php">San Antonio Rampage (3) vs CCCP Red Army (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1291</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1291.php">Joliette Sportif (4) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1292</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1292.php">Las Vegas Gamblers (3) vs Chicago Wolves (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 182</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1280</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1280.php">Vegas Golden Knights (3) vs San Jose Sharks (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1281</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1281.php">Toronto Maple Leafs (5) vs Montreal Canadiens (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1282</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1282.php">Tampa Bay Lightning (3) vs New York Islanders (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1283</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1283.php">Calgary Flames (3) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1284</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1284.php">Arizona Coyotes (4) vs Vancouver Canucks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1285</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1285.php">Seattle Kraken (4) vs Chicago Blackhawks (5)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1293</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1293.php">Henderson Silver Knights (1) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1294</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1294.php">Las Vegas Gamblers (1) vs Gatineau Olympiques (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 183</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1286</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1286.php">Dallas Stars (2) vs Pittsburgh Penguins (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1287</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1287.php">Chicago Blackhawks (2) vs Colorado Avalanche (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1288</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1288.php">Florida Panthers (4) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1289</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1289.php">New York Islanders (0) vs New York Rangers (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1290</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1290.php">Tampa Bay Lightning (0) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1291</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1291.php">Boston Bruins (7) vs Arizona Coyotes (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1292</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1292.php">Vegas Golden Knights (4) vs Nashville Predators (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1295</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1295.php">Henderson Silver Knights (5) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1296</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1296.php">Connecticut Whale (4) vs Norfolk Admirals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1297</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1297.php">Rochester Americans (3) vs Charlotte Checkers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1298</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1298.php">CCCP Red Army (5) vs Providence Bruins (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1299</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1299.php">Mercer Island Hafgufa (3) vs Peoria Rivermen (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1300</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1300.php">Gatineau Olympiques (4) vs Rouyn-Noranda Huskies (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 184</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1293</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1293.php">San Jose Sharks (2) vs Seattle Kraken (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1294</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1294.php">Buffalo Sabres (3) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1295</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1295.php">Vegas Golden Knights (2) vs Quebec Nordiques (1)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1301</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1301.php">Milwaukee Admirals (2) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1302</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1302.php">Chicoutimi Saguenéens (5) vs Adirondack Phantoms (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 185</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1296</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1296.php">Montreal Canadiens (3) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1297</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1297.php">Toronto Maple Leafs (0) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1298</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1298.php">Philadelphia Flyers (5) vs Pittsburgh Penguins (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1299</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1299.php">New York Rangers (4) vs New York Islanders (5)</a>  - OT (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1300</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1300.php">Los Angeles Kings (3) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1301</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1301.php">Colorado Avalanche (1) vs Chicago Blackhawks (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1302</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1302.php">Detroit Red Wings (2) vs Dallas Stars (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1303</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1303.php">Anaheim Ducks (1) vs Arizona Coyotes (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1303</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1303.php">Houston Aeros (5) vs The Nuuk Vikings (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1304</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1304.php">Gatineau Olympiques (3) vs Trois-Rivières Draveurs (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1305</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1305.php">Henderson Silver Knights (4) vs Joliette Sportif (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1306</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1306.php">Norfolk Admirals (0) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1307</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1307.php">CCCP Red Army (5) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1308</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1308.php">Adirondack Phantoms (3) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1309</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1309.php">Providence Bruins (4) vs Bridgeport Sound Tigers (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 186</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1304</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1304.php">Seattle Kraken (4) vs San Jose Sharks (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1305</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1305.php">Vegas Golden Knights (4) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1306</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1306.php">Pittsburgh Penguins (1) vs Philadelphia Flyers (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1307</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1307.php">Calgary Flames (3) vs Buffalo Sabres (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1310</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1310.php">Chicago Wolves (4) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1311</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1311.php">Rockford IceHogs (4) vs Springfield Falcons (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1312</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1312.php">Chicoutimi Saguenéens (4) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1313</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1313.php">Peoria Rivermen (2) vs Milwaukee Admirals (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1314</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1314.php">Charlotte Checkers (6) vs Wilkes-Barre/Scranton Penguins (7)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1315</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1315.php">The Nuuk Vikings (5) vs Grand Rapids Griffins (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 187</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1308</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1308.php">Tampa Bay Lightning (1) vs Vancouver Canucks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1309</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1309.php">Nashville Predators (6) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1310</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1310.php">New York Islanders (2) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1311</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1311.php">Florida Panthers (5) vs Minnesota Wild (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1312</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1312.php">Dallas Stars (3) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1313</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1313.php">Chicago Blackhawks (2) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1314</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1314.php">Arizona Coyotes (3) vs Anaheim Ducks (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1316</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1316.php">Chicago Wolves (6) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1317</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1317.php">Mercer Island Hafgufa (3) vs Las Vegas Gamblers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1318</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1318.php">Rochester Americans (6) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1319</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1319.php">Rouyn-Noranda Huskies (4) vs Roberval Dwarfs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1320</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-Farm-1320.php">Rockford IceHogs (3) vs San Antonio Rampage (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 188</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1315</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1315.php">San Jose Sharks (2) vs St. Louis Blues (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1316</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1316.php">Washington Capitals (4) vs Vegas Golden Knights (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1317</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1317.php">Philadelphia Flyers (2) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1318</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1318.php">Montreal Canadiens (3) vs New Jersey Devils (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1319</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1319.php">Edmonton Oilers (4) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1320</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1320.php">Buffalo Sabres (4) vs Carolina Hurricanes (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<b>--------------  Rest Day</b>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 189</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1321</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1321.php">Vancouver Canucks (5) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1322</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1322.php">Winnipeg Jets (4) vs Vegas Golden Knights (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1323</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1323.php">Ottawa Senators (4) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1324</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1324.php">Minnesota Wild (3) vs Florida Panthers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1325</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1325.php">St. Louis Blues (1) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1326</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1326.php">Columbus Blue Jackets (2) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1327</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1327.php">Anaheim Ducks (2) vs Boston Bruins (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 190</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1328</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1328.php">New Jersey Devils (0) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1329</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1329.php">Quebec Nordiques (3) vs Philadelphia Flyers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1330</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1330.php">Carolina Hurricanes (3) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1331</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1331.php">Dallas Stars (3) vs Edmonton Oilers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 191</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1332</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1332.php">Vegas Golden Knights (2) vs Winnipeg Jets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1333</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1333.php">St. Louis Blues (2) vs Seattle Kraken (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1334</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1334.php">Vancouver Canucks (3) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1335</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1335.php">Ottawa Senators (2) vs New York Rangers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1336</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1336.php">Minnesota Wild (1) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1337</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1337.php">Colorado Avalanche (3) vs Columbus Blue Jackets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1338</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1338.php">Boston Bruins (5) vs Anaheim Ducks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 192</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1339</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1339.php">Detroit Red Wings (1) vs Edmonton Oilers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1340</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1340.php">Pittsburgh Penguins (2) vs Quebec Nordiques (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1341</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1341.php">New Jersey Devils (2) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1342</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1342.php">Carolina Hurricanes (1) vs Calgary Flames (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><a id="Last_Simulate_Day"></a><b>Day 193</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1343</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1343.php">Arizona Coyotes (0) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1344</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1344.php">Columbus Blue Jackets (7) vs Colorado Avalanche (6)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1345</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1345.php">Los Angeles Kings (2) vs Minnesota Wild (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1346</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1346.php">Nashville Predators (3) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1347</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1347.php">Toronto Maple Leafs (2) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1348</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1348.php">Edmonton Oilers (4) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1349</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1349.php">Seattle Kraken (4) vs St. Louis Blues (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1350</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1350.php">New York Rangers (1) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1351</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1351.php">Washington Capitals (4) vs Winnipeg Jets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1352</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1352.php">Quebec Nordiques (5) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1353</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-1353.php">Calgary Flames (5) vs Carolina Hurricanes (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 194</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<b>--------------  Rest Day</b>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
</table>
<?php include "Footer.php";?>
