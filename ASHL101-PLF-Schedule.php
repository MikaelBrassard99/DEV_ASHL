<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Schedule</title>
<script src="ASHL101-PLF.js"></script>
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
<a href="ASHL101-PLF-1.php">Pittsburgh Penguins (4) vs Philadelphia Flyers (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-2.php">Buffalo Sabres (2) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-3.php">Toronto Maple Leafs (6) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-4.php">Boston Bruins (3) vs Florida Panthers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-1.php">Bridgeport Sound Tigers (2) vs Connecticut Whale (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-2.php">Charlotte Checkers (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-3.php">CCCP Red Army (5) vs Norfolk Admirals (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-4.php">Rochester Americans (1) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 2</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-5.php">Nashville Predators (1) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-6.php">Calgary Flames (1) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-7.php">Arizona Coyotes (3) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-8.php">Colorado Avalanche (6) vs St. Louis Blues (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-5.php">Oklahoma City Barons (1) vs Springfield Falcons (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-6.php">Laval Chiefs (1) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-7.php">Lake Erie Monsters (5) vs Gatineau Olympiques (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-8.php">Grand Rapids Griffins (2) vs Milwaukee Admirals (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 3</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-9.php">Pittsburgh Penguins (2) vs Philadelphia Flyers (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-10.php">Buffalo Sabres (2) vs Montreal Canadiens (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-11.php">Toronto Maple Leafs (2) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-12.php">Boston Bruins (3) vs Florida Panthers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-9.php">Bridgeport Sound Tigers (2) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-10.php">Charlotte Checkers (1) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-11.php">CCCP Red Army (1) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-12.php">Rochester Americans (2) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-13.php">Nashville Predators (3) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-14.php">Calgary Flames (1) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-15.php">Arizona Coyotes (3) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-16.php">Colorado Avalanche (2) vs St. Louis Blues (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-13.php">Oklahoma City Barons (5) vs Springfield Falcons (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-14.php">Laval Chiefs (3) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-15.php">Lake Erie Monsters (2) vs Gatineau Olympiques (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-16.php">Grand Rapids Griffins (1) vs Milwaukee Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 5</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-17.php">Philadelphia Flyers (1) vs Pittsburgh Penguins (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-18.php">Montreal Canadiens (6) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-19.php">Columbus Blue Jackets (4) vs Toronto Maple Leafs (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-20.php">Florida Panthers (4) vs Boston Bruins (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-17.php">Connecticut Whale (4) vs Bridgeport Sound Tigers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-18.php">Chicoutimi Saguenéens (2) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-19.php">Norfolk Admirals (3) vs CCCP Red Army (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-20.php">Wilkes-Barre/Scranton Penguins (4) vs Rochester Americans (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 6</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-21.php">Los Angeles Kings (5) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-22.php">Winnipeg Jets (6) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-23.php">Vegas Golden Knights (5) vs Arizona Coyotes (9)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-24.php">St. Louis Blues (3) vs Colorado Avalanche (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-21.php">Springfield Falcons (2) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-22.php">Chicago Wolves (7) vs Laval Chiefs (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-23.php">Gatineau Olympiques (4) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-24.php">Milwaukee Admirals (4) vs Grand Rapids Griffins (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 7</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-25.php">Philadelphia Flyers (2) vs Pittsburgh Penguins (5)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-26.php">Montreal Canadiens (3) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-27.php">Columbus Blue Jackets (0) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-28.php">Florida Panthers (3) vs Boston Bruins (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-25.php">Connecticut Whale (0) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-26.php">Chicoutimi Saguenéens (4) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-27.php">Norfolk Admirals (5) vs CCCP Red Army (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-28.php">Wilkes-Barre/Scranton Penguins (2) vs Rochester Americans (1)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 8</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-29.php">Los Angeles Kings (2) vs Nashville Predators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-30.php">Winnipeg Jets (3) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-31.php">Vegas Golden Knights (5) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-32.php">St. Louis Blues (2) vs Colorado Avalanche (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-29.php">Springfield Falcons (2) vs Oklahoma City Barons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-30.php">Chicago Wolves (3) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-31.php">Gatineau Olympiques (3) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-32.php">Milwaukee Admirals (2) vs Grand Rapids Griffins (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 9</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-33.php">Pittsburgh Penguins (1) vs Philadelphia Flyers (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-34.php">Buffalo Sabres (4) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-35.php">Toronto Maple Leafs (4) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-36.php">Boston Bruins (2) vs Florida Panthers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-33.php">Bridgeport Sound Tigers (4) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-34.php">Charlotte Checkers (2) vs Chicoutimi Saguenéens (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-35.php">CCCP Red Army (1) vs Norfolk Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 10</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-37.php">Nashville Predators (2) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-38.php">Calgary Flames (2) vs Winnipeg Jets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-39.php">Arizona Coyotes (4) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-40.php">Colorado Avalanche (2) vs St. Louis Blues (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-37.php">Oklahoma City Barons (3) vs Springfield Falcons (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-38.php">Laval Chiefs (3) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-39.php">Lake Erie Monsters (1) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-40.php">Grand Rapids Griffins (3) vs Milwaukee Admirals (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 11</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-41.php">Philadelphia Flyers (4) vs Pittsburgh Penguins (3)</a>  - OT (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-42.php">Montreal Canadiens (3) vs Buffalo Sabres (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-41.php">Connecticut Whale (3) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-42.php">Chicoutimi Saguenéens (4) vs Charlotte Checkers (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 12</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-45.php">Los Angeles Kings (3) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-47.php">Vegas Golden Knights (2) vs Arizona Coyotes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-48.php">St. Louis Blues (1) vs Colorado Avalanche (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-46.php">Chicago Wolves (6) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-47.php">Gatineau Olympiques (3) vs Lake Erie Monsters (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 13</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-49.php">Pittsburgh Penguins (4) vs Philadelphia Flyers (3)</a>  - OT (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-50.php">Buffalo Sabres (2) vs Montreal Canadiens (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 14</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-53.php">Nashville Predators (0) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-55.php">Arizona Coyotes (2) vs Vegas Golden Knights (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-56.php">Colorado Avalanche (4) vs St. Louis Blues (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 15</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-57.php">Pittsburgh Penguins (4) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-58.php">Toronto Maple Leafs (1) vs Florida Panthers (8)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-57.php">Charlotte Checkers (2) vs Connecticut Whale (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-58.php">Wilkes-Barre/Scranton Penguins (1) vs Norfolk Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 16</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-59.php">Colorado Avalanche (3) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-60.php">Vegas Golden Knights (1) vs Winnipeg Jets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-59.php">Oklahoma City Barons (5) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-60.php">Milwaukee Admirals (6) vs Gatineau Olympiques (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 17</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-61.php">Pittsburgh Penguins (7) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-62.php">Toronto Maple Leafs (4) vs Florida Panthers (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-61.php">Charlotte Checkers (1) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-62.php">Wilkes-Barre/Scranton Penguins (3) vs Norfolk Admirals (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 18</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-63.php">Colorado Avalanche (3) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-64.php">Vegas Golden Knights (3) vs Winnipeg Jets (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-63.php">Oklahoma City Barons (2) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-64.php">Milwaukee Admirals (4) vs Gatineau Olympiques (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 19</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-65.php">Montreal Canadiens (1) vs Pittsburgh Penguins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-66.php">Florida Panthers (0) vs Toronto Maple Leafs (1)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-65.php">Connecticut Whale (1) vs Charlotte Checkers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-66.php">Norfolk Admirals (4) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 20</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-67.php">Los Angeles Kings (2) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-68.php">Winnipeg Jets (4) vs Vegas Golden Knights (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-67.php">Chicago Wolves (0) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-68.php">Gatineau Olympiques (2) vs Milwaukee Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 21</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-69.php">Montreal Canadiens (2) vs Pittsburgh Penguins (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-70.php">Florida Panthers (2) vs Toronto Maple Leafs (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-69.php">Connecticut Whale (5) vs Charlotte Checkers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-70.php">Norfolk Admirals (4) vs Wilkes-Barre/Scranton Penguins (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 22</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-71.php">Los Angeles Kings (4) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-72.php">Winnipeg Jets (2) vs Vegas Golden Knights (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-71.php">Chicago Wolves (3) vs Oklahoma City Barons (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-72.php">Gatineau Olympiques (5) vs Milwaukee Admirals (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 23</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-74.php">Toronto Maple Leafs (3) vs Florida Panthers (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-73.php">Charlotte Checkers (2) vs Connecticut Whale (1)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 24</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-75.php">Colorado Avalanche (3) vs Los Angeles Kings (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-76.php">Vegas Golden Knights (2) vs Winnipeg Jets (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-75.php">Oklahoma City Barons (3) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-76.php">Milwaukee Admirals (2) vs Gatineau Olympiques (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 25</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-77.php">Connecticut Whale (7) vs Charlotte Checkers (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 26</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-79.php">Los Angeles Kings (2) vs Colorado Avalanche (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-80.php">Winnipeg Jets (2) vs Vegas Golden Knights (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-80.php">Gatineau Olympiques (2) vs Milwaukee Admirals (7)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 27</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 28</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-83.php">Colorado Avalanche (1) vs Los Angeles Kings (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-84.php">Vegas Golden Knights (2) vs Winnipeg Jets (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 29</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-85.php">Pittsburgh Penguins (2) vs Toronto Maple Leafs (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-85.php">Norfolk Admirals (3) vs Connecticut Whale (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 30</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-86.php">Winnipeg Jets (3) vs Los Angeles Kings (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-86.php">Oklahoma City Barons (3) vs Milwaukee Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 31</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-87.php">Pittsburgh Penguins (1) vs Toronto Maple Leafs (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-87.php">Norfolk Admirals (1) vs Connecticut Whale (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 32</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-88.php">Winnipeg Jets (1) vs Los Angeles Kings (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-88.php">Oklahoma City Barons (6) vs Milwaukee Admirals (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 33</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-89.php">Toronto Maple Leafs (3) vs Pittsburgh Penguins (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-89.php">Connecticut Whale (1) vs Norfolk Admirals (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 34</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-90.php">Los Angeles Kings (6) vs Winnipeg Jets (5)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-90.php">Milwaukee Admirals (5) vs Oklahoma City Barons (6)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 35</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-91.php">Toronto Maple Leafs (5) vs Pittsburgh Penguins (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-91.php">Connecticut Whale (2) vs Norfolk Admirals (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 36</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-92.php">Los Angeles Kings (2) vs Winnipeg Jets (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-92.php">Milwaukee Admirals (5) vs Oklahoma City Barons (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 37</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-93.php">Norfolk Admirals (0) vs Connecticut Whale (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 38</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-94.php">Winnipeg Jets (3) vs Los Angeles Kings (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-94.php">Oklahoma City Barons (1) vs Milwaukee Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 39</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-95.php">Connecticut Whale (3) vs Norfolk Admirals (7)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 40</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-96.php">Los Angeles Kings (3) vs Winnipeg Jets (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-96.php">Milwaukee Admirals (5) vs Oklahoma City Barons (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 41</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-97.php">Norfolk Admirals (4) vs Connecticut Whale (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 42</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 43</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-99.php">Toronto Maple Leafs (2) vs Winnipeg Jets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-99.php">Oklahoma City Barons (4) vs Norfolk Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 44</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-100.php">Toronto Maple Leafs (2) vs Winnipeg Jets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-100.php">Oklahoma City Barons (1) vs Norfolk Admirals (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 45</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-101.php">Winnipeg Jets (3) vs Toronto Maple Leafs (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-101.php">Norfolk Admirals (6) vs Oklahoma City Barons (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 46</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-102.php">Winnipeg Jets (2) vs Toronto Maple Leafs (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-102.php">Norfolk Admirals (8) vs Oklahoma City Barons (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 47</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-103.php">Toronto Maple Leafs (1) vs Winnipeg Jets (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_FarmLink">
<a href="ASHL101-PLF-Farm-103.php">Oklahoma City Barons (2) vs Norfolk Admirals (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 48</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-104.php">Winnipeg Jets (2) vs Toronto Maple Leafs (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><a id="Last_Simulate_Day"></a><b>Day 49</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_ProLink">
<a href="ASHL101-PLF-105.php">Toronto Maple Leafs (4) vs Winnipeg Jets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
