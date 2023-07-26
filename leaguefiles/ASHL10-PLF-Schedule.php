<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Schedule</title>
<script src="ASHL10-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.3.3 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="ASHL RSS Feed" href="https://www.ashligue.com/site//RSSFeed.xml" />
<link href="ASHL10-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL10-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL10-STHSCareerStat.db";
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
<a href="ASHL10-PLF-1.php">Quebec Nordiques (2) vs Philadelphia Flyers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-2.php">Tampa Bay Lightning (1) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-3.php">Toronto Maple Leafs (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-4.php">Columbus Blue Jackets (3) vs Florida Panthers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-5.php">Boston Bruins (1) vs New York Islanders (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-6.php">Carolina Hurricanes (5) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-7.php">Montreal Canadiens (3) vs Buffalo Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-8.php">Pittsburgh Penguins (4) vs New Jersey Devils (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 2</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-9.php">Winnipeg Jets (5) vs Colorado Avalanche (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-10.php">Calgary Flames (4) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-11.php">Anaheim Ducks (3) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-12.php">Arizona Coyotes (6) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-13.php">San Jose Sharks (2) vs Detroit Red Wings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-14.php">Chicago Blackhawks (5) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-15.php">Minnesota Wild (4) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-16.php">Los Angeles Kings (3) vs Edmonton Oilers (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 3</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-17.php">Quebec Nordiques (1) vs Philadelphia Flyers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-18.php">Tampa Bay Lightning (1) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-19.php">Toronto Maple Leafs (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-20.php">Columbus Blue Jackets (7) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-21.php">Boston Bruins (1) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-22.php">Carolina Hurricanes (5) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-23.php">Montreal Canadiens (4) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-24.php">Pittsburgh Penguins (4) vs New Jersey Devils (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-25.php">Winnipeg Jets (2) vs Colorado Avalanche (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-26.php">Calgary Flames (2) vs Vancouver Canucks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-27.php">Anaheim Ducks (2) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-28.php">Arizona Coyotes (3) vs St. Louis Blues (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-29.php">San Jose Sharks (2) vs Detroit Red Wings (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-30.php">Chicago Blackhawks (3) vs Dallas Stars (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-31.php">Minnesota Wild (2) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-32.php">Los Angeles Kings (4) vs Edmonton Oilers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 5</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-33.php">Philadelphia Flyers (3) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-34.php">Ottawa Senators (3) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-35.php">Washington Capitals (4) vs Toronto Maple Leafs (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-36.php">Florida Panthers (3) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-37.php">New York Islanders (1) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-38.php">New York Rangers (4) vs Carolina Hurricanes (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-39.php">Buffalo Sabres (5) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-40.php">New Jersey Devils (2) vs Pittsburgh Penguins (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 6</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-41.php">Colorado Avalanche (3) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-42.php">Vancouver Canucks (1) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-43.php">Vegas Golden Knights (4) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-44.php">St. Louis Blues (2) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-45.php">Detroit Red Wings (4) vs San Jose Sharks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-46.php">Dallas Stars (2) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-47.php">Nashville Predators (3) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-48.php">Edmonton Oilers (3) vs Los Angeles Kings (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 7</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-49.php">Philadelphia Flyers (4) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-51.php">Washington Capitals (2) vs Toronto Maple Leafs (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-52.php">Florida Panthers (2) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-53.php">New York Islanders (4) vs Boston Bruins (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-55.php">Buffalo Sabres (0) vs Montreal Canadiens (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 8</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-57.php">Colorado Avalanche (2) vs Winnipeg Jets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-58.php">Vancouver Canucks (1) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-61.php">Detroit Red Wings (3) vs San Jose Sharks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-62.php">Dallas Stars (5) vs Chicago Blackhawks (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 9</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-65.php">Quebec Nordiques (3) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-68.php">Columbus Blue Jackets (4) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-69.php">Boston Bruins (3) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-71.php">Montreal Canadiens (6) vs Buffalo Sabres (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 10</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-77.php">San Jose Sharks (7) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-78.php">Chicago Blackhawks (5) vs Dallas Stars (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 11</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-81.php">Columbus Blue Jackets (2) vs Philadelphia Flyers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">82</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-82.php">Boston Bruins (2) vs Ottawa Senators (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-83.php">Carolina Hurricanes (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-84.php">Montreal Canadiens (5) vs Pittsburgh Penguins (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 12</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-85.php">Calgary Flames (2) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-86.php">Arizona Coyotes (5) vs Vegas Golden Knights (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-87.php">San Jose Sharks (1) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-88.php">Chicago Blackhawks (1) vs Los Angeles Kings (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 13</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-89.php">Columbus Blue Jackets (5) vs Philadelphia Flyers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-90.php">Boston Bruins (2) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-91.php">Carolina Hurricanes (0) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-92.php">Montreal Canadiens (1) vs Pittsburgh Penguins (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 14</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-93.php">Calgary Flames (5) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-94.php">Arizona Coyotes (5) vs Vegas Golden Knights (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-95.php">San Jose Sharks (1) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-96.php">Chicago Blackhawks (4) vs Los Angeles Kings (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 15</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-97.php">Philadelphia Flyers (4) vs Columbus Blue Jackets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-98.php">Ottawa Senators (4) vs Boston Bruins (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-99.php">Washington Capitals (3) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-100.php">Pittsburgh Penguins (3) vs Montreal Canadiens (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 16</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-101.php">Colorado Avalanche (4) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-102.php">Vegas Golden Knights (4) vs Arizona Coyotes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-103.php">Nashville Predators (5) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-104.php">Los Angeles Kings (4) vs Chicago Blackhawks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 17</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-105.php">Philadelphia Flyers (2) vs Columbus Blue Jackets (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">106</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-106.php">Ottawa Senators (1) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">107</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-107.php">Washington Capitals (4) vs Carolina Hurricanes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">108</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-108.php">Pittsburgh Penguins (1) vs Montreal Canadiens (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 18</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">109</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-109.php">Colorado Avalanche (1) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">110</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-110.php">Vegas Golden Knights (0) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">112</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-112.php">Los Angeles Kings (2) vs Chicago Blackhawks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 19</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">116</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-116.php">Montreal Canadiens (5) vs Pittsburgh Penguins (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 20</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">120</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-120.php">Chicago Blackhawks (3) vs Los Angeles Kings (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 21</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">121</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-121.php">Columbus Blue Jackets (1) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">122</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-122.php">Boston Bruins (1) vs Montreal Canadiens (5)</a>  (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 22</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">123</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-123.php">Calgary Flames (0) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">124</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-124.php">Arizona Coyotes (3) vs Chicago Blackhawks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 23</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">125</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-125.php">Columbus Blue Jackets (5) vs Washington Capitals (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">126</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-126.php">Boston Bruins (1) vs Montreal Canadiens (4)</a>  (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 24</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">127</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-127.php">Calgary Flames (2) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">128</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-128.php">Arizona Coyotes (2) vs Chicago Blackhawks (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 25</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">129</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-129.php">Washington Capitals (3) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">130</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-130.php">Montreal Canadiens (1) vs Boston Bruins (5)</a>  (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 26</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">131</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-131.php">Nashville Predators (6) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">132</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-132.php">Chicago Blackhawks (4) vs Arizona Coyotes (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 27</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">133</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-133.php">Washington Capitals (2) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">134</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-134.php">Montreal Canadiens (3) vs Boston Bruins (1)</a>  (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 28</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">136</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-136.php">Chicago Blackhawks (5) vs Arizona Coyotes (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 29</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">137</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-137.php">Columbus Blue Jackets (4) vs Washington Capitals (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 30</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 31</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">141</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-141.php">Columbus Blue Jackets (3) vs Montreal Canadiens (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 32</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">142</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-142.php">Chicago Blackhawks (3) vs Nashville Predators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 33</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">143</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-143.php">Columbus Blue Jackets (5) vs Montreal Canadiens (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 34</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">144</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-144.php">Chicago Blackhawks (5) vs Nashville Predators (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 35</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">145</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-145.php">Montreal Canadiens (4) vs Columbus Blue Jackets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 36</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">146</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-146.php">Nashville Predators (3) vs Chicago Blackhawks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 37</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">147</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-147.php">Montreal Canadiens (4) vs Columbus Blue Jackets (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 38</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">148</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-148.php">Nashville Predators (5) vs Chicago Blackhawks (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 39</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">149</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-149.php">Columbus Blue Jackets (3) vs Montreal Canadiens (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 40</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">150</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-150.php">Chicago Blackhawks (2) vs Nashville Predators (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 41</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">151</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-151.php">Columbus Blue Jackets (2) vs Nashville Predators (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 42</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">152</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-152.php">Columbus Blue Jackets (1) vs Nashville Predators (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 43</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">153</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-153.php">Nashville Predators (2) vs Columbus Blue Jackets (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 44</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">154</td><td class="STHSSchedule_ProLink">
<a href="ASHL10-PLF-154.php">Nashville Predators (4) vs Columbus Blue Jackets (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><a id="Last_Simulate_Day"></a><b>Day 45</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
</table>
<?php include "Footer.php";?>
