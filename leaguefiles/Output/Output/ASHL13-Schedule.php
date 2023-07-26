<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Schedule</title>
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
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 1</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Nashville Predators</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Charlotte Checkers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 2</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs New York Rangers (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Vancouver Canucks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Manitoba Moose</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 3</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_ProLink">
New York Islanders vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Seattle Kraken</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Blainville-Boisbriand Armada</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_ProLink">
New York Islanders vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_ProLink">
New York Rangers vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Vancouver Canucks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Springfield Falcons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 5</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_ProLink">
New York Rangers vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs San Jose Sharks (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Quebec Nordiques</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Houston Aeros</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 6</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_ProLink">
Nashville Predators vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Ottawa Senators</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Norfolk Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 7</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Vegas Golden Knights</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">54</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Binghamton Senators</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 8</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Nashville Predators</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Rouyn-Noranda Huskies</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 9</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Calgary Flames (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_ProLink">
New York Rangers vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">54</td><td class="STHSSchedule_ProLink">
New York Islanders vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Los Angeles Kings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs The Nuuk Vikings</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 10</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Quebec Nordiques</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Chicago Wolves</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 11</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_ProLink">
New York Rangers vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Dallas Stars</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">82</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Milwaukee Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 12</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Buffalo Sabres</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs San Antonio Rampage</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 13</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs New York Rangers (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Chicago Blackhawks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Bridgeport Sound Tigers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 14</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Montreal Canadiens (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Washington Capitals</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">106</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">107</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">108</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">109</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">110</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">111</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">112</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">113</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">114</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">115</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Manitoba Moose</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 15</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Philadelphia Flyers (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">82</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_ProLink">
New York Rangers vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Winnipeg Jets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">116</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">117</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">118</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">119</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">120</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">121</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">122</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">123</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">124</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">125</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Verdun Junior</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 16</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Arizona Coyotes</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">126</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">127</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">128</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">129</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Milwaukee Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 17</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_ProLink">
New York Islanders vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_ProLink">
New York Rangers vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs St. Louis Blues</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">130</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">131</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">132</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Albany Devils</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 18</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs New York Rangers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">133</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">134</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">135</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">136</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Laval Chiefs</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 19</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">106</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">107</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">108</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">109</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">110</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Seattle Kraken</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">137</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">138</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">139</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">140</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">141</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">142</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">143</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">144</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">145</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">146</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">147</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Oklahoma City Barons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 20</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">111</td><td class="STHSSchedule_ProLink">
New York Islanders vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">112</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Montreal Canadiens (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">113</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">114</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">115</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">116</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">117</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">118</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">119</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">120</td><td class="STHSSchedule_ProLink">
New York Rangers vs Columbus Blue Jackets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">148</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">149</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">150</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">151</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">152</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Mercer Island Hafgufa</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 21</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">121</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">122</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">123</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">124</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">125</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">126</td><td class="STHSSchedule_ProLink">
Washington Capitals vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">127</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">128</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">129</td><td class="STHSSchedule_ProLink">
Dallas Stars vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">130</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">131</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Philadelphia Flyers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">153</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">154</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">155</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">156</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">157</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">158</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">159</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">160</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">161</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">162</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">163</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Albany Devils</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 22</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">132</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">133</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">134</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">135</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">136</td><td class="STHSSchedule_ProLink">
Boston Bruins vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">137</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Los Angeles Kings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">164</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">165</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">166</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">167</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">168</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">169</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Connecticut Whale</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 23</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">138</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">139</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">140</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Colorado Avalanche (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">170</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">171</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">172</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">173</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">174</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Bridgeport Sound Tigers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 24</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">141</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">142</td><td class="STHSSchedule_ProLink">
Nashville Predators vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">143</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">144</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Toronto Maple Leafs (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">145</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">146</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">147</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">148</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">149</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">150</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">151</td><td class="STHSSchedule_ProLink">
New York Islanders vs New Jersey Devils</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">175</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">176</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">177</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">178</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">179</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">180</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">181</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">182</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">183</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">184</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">185</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Wilkes-Barre/Scranton Penguins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 25</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">152</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">153</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">154</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">155</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">156</td><td class="STHSSchedule_ProLink">
New York Rangers vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">157</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">158</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">159</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">160</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">161</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">162</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Edmonton Oilers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">186</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">187</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">188</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Chisinau Pelicans</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 26</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">163</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">164</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">165</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">166</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">167</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">168</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">169</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">170</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">171</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">172</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Detroit Red Wings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">189</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">190</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">191</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">192</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Joliette Sportif</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 27</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">173</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">174</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">175</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">176</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">177</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Toronto Maple Leafs (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">178</td><td class="STHSSchedule_ProLink">
New York Islanders vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">179</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">180</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">181</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">182</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Edmonton Oilers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">193</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">194</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">195</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">196</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">197</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">198</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Manitoba Moose</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 28</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">183</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Colorado Avalanche</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">199</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">200</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">201</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">202</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">203</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">204</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">205</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">206</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">207</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">208</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">209</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Springfield Falcons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 29</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">184</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Pittsburgh Penguins (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">185</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">186</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Quebec Nordiques</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">210</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">211</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">212</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">213</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Roberval Dwarfs</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 30</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">187</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Ottawa Senators (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">188</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Winnipeg Jets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">214</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">215</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">216</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">217</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">218</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">219</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">220</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">221</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">222</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">223</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">224</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">225</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Chicoutimi Saguenéens</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 31</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">189</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">190</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">191</td><td class="STHSSchedule_ProLink">
Washington Capitals vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">192</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">193</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">194</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">195</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">196</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">197</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs St. Louis Blues</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">226</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">227</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">228</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Binghamton Senators</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 32</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">198</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">199</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">200</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">201</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Anaheim Ducks (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">202</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">203</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">204</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">205</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">206</td><td class="STHSSchedule_ProLink">
New York Islanders vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">207</td><td class="STHSSchedule_ProLink">
New York Rangers vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">208</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Calgary Flames</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">229</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Trois-Rivières Lions</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 33</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">209</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Los Angeles Kings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">230</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">231</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">232</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">233</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">234</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">235</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">236</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Lake Erie Monsters</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 34</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">210</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">211</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">212</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">213</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Chicago Blackhawks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">237</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">238</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">239</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">240</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">241</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">242</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">243</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">244</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">245</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">246</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">247</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">248</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Houston Aeros</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 35</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">214</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">215</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">216</td><td class="STHSSchedule_ProLink">
Boston Bruins vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">217</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">218</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">219</td><td class="STHSSchedule_ProLink">
New York Rangers vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">220</td><td class="STHSSchedule_ProLink">
New York Islanders vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">221</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">222</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">223</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">224</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Buffalo Sabres</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">249</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">250</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">251</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">252</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">253</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">254</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">255</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">256</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">257</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">258</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">259</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Norfolk Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 36</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">225</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">226</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">227</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">228</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Edmonton Oilers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">260</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">261</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">262</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">263</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">264</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">265</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Charlotte Checkers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 37</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">229</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">230</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs New York Rangers (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">231</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Tampa Bay Lightning (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">232</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">233</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">234</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">235</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">236</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Colorado Avalanche (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">237</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">238</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Arizona Coyotes</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">266</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">267</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">268</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">269</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">270</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">271</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">272</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Laval Chiefs</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 38</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">239</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">240</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">241</td><td class="STHSSchedule_ProLink">
Calgary Flames vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">242</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Detroit Red Wings (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">243</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">244</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">245</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">246</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">247</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">248</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">249</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Florida Panthers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">273</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">274</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">275</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">276</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">277</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">278</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Springfield Falcons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 39</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">250</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs New Jersey Devils</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">279</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">280</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">281</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">282</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">283</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">284</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Rochester Americans</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 40</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">251</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">252</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">253</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">254</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">255</td><td class="STHSSchedule_ProLink">
New York Islanders vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">256</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">257</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">258</td><td class="STHSSchedule_ProLink">
New York Rangers vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">259</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Tampa Bay Lightning</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">285</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">286</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">287</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">288</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">289</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">290</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">291</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">292</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">293</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">294</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">295</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">296</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Rouyn-Noranda Huskies</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 41</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">260</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">261</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">262</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">263</td><td class="STHSSchedule_ProLink">
Washington Capitals vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">264</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">265</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">266</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">267</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">268</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">269</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">270</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Minnesota Wild</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">297</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">298</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">299</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">300</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">301</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">302</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">303</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">304</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">305</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">306</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">307</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">308</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Springfield Falcons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 42</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">271</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">272</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">273</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Los Angeles Kings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">309</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">310</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">311</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">312</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">313</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">314</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">315</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">316</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Bridgeport Sound Tigers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 43</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">274</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">275</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Detroit Red Wings (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">276</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">277</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">278</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">279</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">280</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">281</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">282</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">283</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">284</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Dallas Stars</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">317</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">318</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">319</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">320</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">321</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">322</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">323</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">324</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">325</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">326</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">327</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">328</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Henderson Silver Knights</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 44</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">285</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">286</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">287</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">288</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">289</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">290</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">291</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">292</td><td class="STHSSchedule_ProLink">
New York Rangers vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">293</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">294</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Philadelphia Flyers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">329</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">330</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Blainville-Boisbriand Armada</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 45</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">295</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">296</td><td class="STHSSchedule_ProLink">
Washington Capitals vs New York Rangers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">331</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">332</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">333</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">334</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">335</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">336</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">337</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">338</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">339</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">340</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">341</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">342</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">343</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Adirondack Phantoms</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 46</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">297</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Tampa Bay Lightning</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">344</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">345</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">346</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">347</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">348</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">349</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">350</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">351</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">352</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">353</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">354</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">355</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs San Antonio Rampage</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 47</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">298</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Edmonton Oilers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">356</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">357</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Grand Rapids Griffins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 48</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">299</td><td class="STHSSchedule_ProLink">
New York Islanders vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">300</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">301</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">302</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Columbus Blue Jackets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">358</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">359</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">360</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">361</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">362</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Albany Devils</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 49</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">303</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">304</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Pittsburgh Penguins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">363</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">364</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">365</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">366</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">367</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">368</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">369</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">370</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">371</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">372</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">373</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">374</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">375</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Milwaukee Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 50</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">305</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">306</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">307</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">308</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">309</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">310</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">311</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">312</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">313</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">314</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Dallas Stars</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">376</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">377</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">378</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">379</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">380</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">381</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">382</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">383</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">384</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">385</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">386</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">387</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">388</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Joliette Sportif</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 51</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">315</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">316</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs New Jersey Devils</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">389</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">390</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">391</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">392</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Charlotte Checkers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 52</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">317</td><td class="STHSSchedule_ProLink">
Calgary Flames vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">318</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Colorado Avalanche (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">319</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">320</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">321</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">322</td><td class="STHSSchedule_ProLink">
Boston Bruins vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">323</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">324</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">325</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">326</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Carolina Hurricanes</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">393</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">394</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">395</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">396</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">397</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">398</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Roberval Dwarfs</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 53</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">327</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">328</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">329</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">330</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">331</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">332</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">333</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">334</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">335</td><td class="STHSSchedule_ProLink">
New York Islanders vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">336</td><td class="STHSSchedule_ProLink">
New York Rangers vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">337</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Boston Bruins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">399</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">400</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">401</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">402</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">403</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">404</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">405</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">406</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">407</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">408</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">409</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Mercer Island Hafgufa</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 54</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">338</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">339</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">340</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">341</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">342</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">343</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">344</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">345</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">346</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">347</td><td class="STHSSchedule_ProLink">
Nashville Predators vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">348</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">349</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Edmonton Oilers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">410</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">411</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">412</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">413</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Connecticut Whale</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 55</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">350</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">351</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">352</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs San Jose Sharks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">414</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">415</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">416</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">417</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">418</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">419</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Albany Devils</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 56</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">353</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">354</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Quebec Nordiques</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">420</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">421</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">422</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Rochester Americans</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 57</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">355</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">356</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">357</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Vancouver Canucks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">423</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">424</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">425</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">426</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">427</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Joliette Sportif</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 58</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">358</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">359</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">360</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">361</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">362</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">363</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">364</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">365</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">366</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">367</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Washington Capitals</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">428</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">429</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">430</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">431</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">432</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">433</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">434</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">435</td><td class="STHSSchedule_FarmLink">
Albany Devils vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">436</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">437</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">438</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Mercer Island Hafgufa</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 59</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">368</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">369</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">370</td><td class="STHSSchedule_ProLink">
New York Islanders vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">371</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">372</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">373</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">374</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">375</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">376</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">377</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">378</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Quebec Nordiques</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">439</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Roberval Dwarfs</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 60</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">379</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">380</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">381</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">382</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">383</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">384</td><td class="STHSSchedule_ProLink">
New York Rangers vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">385</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">386</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Florida Panthers (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">387</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">388</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Montreal Canadiens</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">440</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">441</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">442</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Lake Erie Monsters</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 61</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">389</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">390</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">391</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">392</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Carolina Hurricanes</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">443</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">444</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">445</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">446</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">447</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">448</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">449</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">450</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">451</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">452</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">453</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">454</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Springfield Falcons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 62</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">393</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">394</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">395</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">396</td><td class="STHSSchedule_ProLink">
Nashville Predators vs St. Louis Blues</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">455</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">456</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">457</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Norfolk Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 63</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">397</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">398</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">399</td><td class="STHSSchedule_ProLink">
New York Islanders vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">400</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">401</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">402</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">403</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">404</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">405</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">406</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Pittsburgh Penguins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">458</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">459</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">460</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">461</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">462</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">463</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">464</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">465</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">466</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">467</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">468</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">469</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Gatineau Olympiques</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 64</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">407</td><td class="STHSSchedule_ProLink">
New York Rangers vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">408</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">409</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Chicago Blackhawks (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">410</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">411</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Detroit Red Wings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">470</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">471</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">472</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">473</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">474</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Chicoutimi Saguenéens</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 65</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">412</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">413</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Montreal Canadiens (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">414</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">415</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">416</td><td class="STHSSchedule_ProLink">
Dallas Stars vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">417</td><td class="STHSSchedule_ProLink">
New York Islanders vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">418</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">419</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">420</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">421</td><td class="STHSSchedule_ProLink">
Calgary Flames vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">422</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">423</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Buffalo Sabres</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">475</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">476</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">477</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Houston Aeros</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 66</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">424</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">425</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">426</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">427</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">428</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">429</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs St. Louis Blues</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">478</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">479</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">480</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">481</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">482</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">483</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">484</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">485</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">486</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">487</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">488</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">489</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">490</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Springfield Falcons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 67</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">430</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">431</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">432</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">433</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">434</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Dallas Stars</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">491</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">492</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">493</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">494</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">495</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">496</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">497</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">498</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">499</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">500</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">501</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">502</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Providence Bruins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 68</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">435</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Detroit Red Wings (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">436</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">437</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">438</td><td class="STHSSchedule_ProLink">
New York Rangers vs Philadelphia Flyers (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">439</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Washington Capitals</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">503</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">504</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">505</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">506</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">507</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">508</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">509</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Laval Chiefs</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 69</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">440</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Minnesota Wild</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">510</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">511</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">512</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">513</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">514</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">515</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">516</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">517</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">518</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">519</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">520</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Blainville-Boisbriand Armada</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 70</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">441</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">442</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">443</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">444</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">445</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">446</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">447</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">448</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">449</td><td class="STHSSchedule_ProLink">
Washington Capitals vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">450</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">451</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Anaheim Ducks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">521</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">522</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">523</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">524</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">525</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">526</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">527</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">528</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">529</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">530</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">531</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">532</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Rouyn-Noranda Huskies</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 71</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">452</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Toronto Maple Leafs</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">533</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">534</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs The Nuuk Vikings</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 72</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">453</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">454</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">455</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">456</td><td class="STHSSchedule_ProLink">
Florida Panthers vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">457</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">458</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs New York Rangers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">535</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">536</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">537</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">538</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">539</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">540</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">541</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">542</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">543</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">544</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">545</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Wilkes-Barre/Scranton Penguins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 73</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">459</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Edmonton Oilers (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">460</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">461</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">462</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">463</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">464</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">465</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">466</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">467</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">468</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">469</td><td class="STHSSchedule_ProLink">
New York Islanders vs Pittsburgh Penguins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">546</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">547</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">548</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">549</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Adirondack Phantoms</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 74</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">470</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">471</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">472</td><td class="STHSSchedule_ProLink">
New York Rangers vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">473</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">474</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">475</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">476</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">477</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">478</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Calgary Flames (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">479</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">480</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs San Jose Sharks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">550</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">551</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">552</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">553</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">554</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">555</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">556</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">557</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">558</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">559</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">560</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Milwaukee Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 75</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">481</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">482</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">483</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">484</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">485</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">486</td><td class="STHSSchedule_ProLink">
New York Islanders vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">487</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">488</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">489</td><td class="STHSSchedule_ProLink">
New York Rangers vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">490</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Seattle Kraken</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">561</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">562</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">563</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">564</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">565</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">566</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Houston Aeros</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 76</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">491</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">492</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">493</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">494</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Los Angeles Kings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">567</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">568</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">569</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">570</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">571</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">572</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">573</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">574</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">575</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">576</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Chisinau Pelicans</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 77</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">495</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs New York Islanders</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">577</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">578</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">579</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">580</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">581</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Wilkes-Barre/Scranton Penguins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 78</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">496</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">497</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Buffalo Sabres</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">582</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">583</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs San Antonio Rampage</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 79</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">498</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">499</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">500</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">501</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">502</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">503</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Pittsburgh Penguins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">584</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">585</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">586</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Grand Rapids Griffins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 80</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">504</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">505</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">506</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">507</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Ottawa Senators</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">587</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">588</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">589</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Laval Chiefs</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 81</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">508</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">509</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">510</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Chicago Blackhawks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">590</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">591</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">592</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">593</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">594</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">595</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">596</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">597</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">598</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">599</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">600</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Adirondack Phantoms</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 82</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">511</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">512</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">513</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">514</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">515</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Anaheim Ducks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">601</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">602</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">603</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">604</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">605</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">606</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">607</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">608</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">609</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">610</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">611</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Norfolk Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 83</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">516</td><td class="STHSSchedule_ProLink">
New York Islanders vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">517</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">518</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Colorado Avalanche (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">612</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">613</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs San Antonio Rampage</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 84</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">519</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">520</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">521</td><td class="STHSSchedule_ProLink">
New York Rangers vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">522</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">523</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">524</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">525</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">526</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">527</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">528</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">529</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Columbus Blue Jackets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">614</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">615</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">616</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">617</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">618</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">619</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">620</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Blainville-Boisbriand Armada</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 85</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">530</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">531</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">532</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">533</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Vegas Golden Knights</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">621</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">622</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">623</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">624</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">625</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">626</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">627</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">628</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">629</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">630</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">631</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">632</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">633</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Nunavik Natturaliit</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 86</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">534</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">535</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">536</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">537</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Calgary Flames</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">634</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Verdun Junior</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 87</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">538</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Pittsburgh Penguins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">635</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">636</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">637</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">638</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">639</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Gatineau Olympiques</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 88</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">539</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">540</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">541</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">542</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">543</td><td class="STHSSchedule_ProLink">
New York Rangers vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">544</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">545</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">546</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">547</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">548</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Florida Panthers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">640</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">641</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">642</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">643</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">644</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">645</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">646</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">647</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">648</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">649</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">650</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">651</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Grand Rapids Griffins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 89</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">549</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">550</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">551</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Edmonton Oilers (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">552</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs New York Islanders</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">652</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">653</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">654</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Connecticut Whale</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 90</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">553</td><td class="STHSSchedule_ProLink">
New York Rangers vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">554</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">555</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">556</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Seattle Kraken</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">655</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">656</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">657</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs San Antonio Rampage</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 91</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">557</td><td class="STHSSchedule_ProLink">
New York Islanders vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">558</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">559</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">560</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Tampa Bay Lightning</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">658</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">659</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">660</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Springfield Falcons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 92</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">561</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs New York Rangers (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">661</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">662</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">663</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">664</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">665</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">666</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Charlotte Checkers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 93</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">562</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">563</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">564</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">565</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">566</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">567</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">568</td><td class="STHSSchedule_ProLink">
Calgary Flames vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">569</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">570</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">571</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">572</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Florida Panthers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">667</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">668</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">669</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">670</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">671</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">672</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">673</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">674</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">675</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">676</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">677</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">678</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Laval Chiefs</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 94</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">573</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">574</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">575</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">576</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">577</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">578</td><td class="STHSSchedule_ProLink">
New York Rangers vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">579</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">580</td><td class="STHSSchedule_ProLink">
New York Islanders vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">581</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">582</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs San Jose Sharks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">679</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">680</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">681</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">682</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">683</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">684</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">685</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">686</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">687</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">688</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">689</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Rochester Americans</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 95</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">583</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">584</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">585</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">586</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">587</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">588</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Seattle Kraken</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">690</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">691</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">692</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Trois-Rivières Lions</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 96</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">589</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">590</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">591</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">592</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs New York Rangers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">693</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">694</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">695</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">696</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">697</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">698</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">699</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">700</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">701</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">702</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">703</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">704</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Chicoutimi Saguenéens</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 97</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">593</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">594</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Tampa Bay Lightning</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">705</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">706</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">707</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">708</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">709</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">710</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">711</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">712</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">713</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">714</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Verdun Junior</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 98</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">595</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">596</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Boston Bruins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">715</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">716</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">717</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs San Antonio Rampage</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 99</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">597</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">598</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">599</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">600</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">601</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">602</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">603</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">604</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">605</td><td class="STHSSchedule_ProLink">
New York Islanders vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">606</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Ottawa Senators</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">718</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">719</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">720</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">721</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">722</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">723</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">724</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">725</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">726</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">727</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">728</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Adirondack Phantoms</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 100</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">607</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">608</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">609</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">610</td><td class="STHSSchedule_ProLink">
Boston Bruins vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">611</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">612</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">613</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">614</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">615</td><td class="STHSSchedule_ProLink">
New York Rangers vs Philadelphia Flyers (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">616</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Toronto Maple Leafs</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">729</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">730</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Trois-Rivières Lions</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 101</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">617</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">618</td><td class="STHSSchedule_ProLink">
New York Islanders vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">619</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">620</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Winnipeg Jets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">731</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">732</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">733</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">734</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">735</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">736</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">737</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">738</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">739</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">740</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Albany Devils</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 102</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">621</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">622</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">623</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">624</td><td class="STHSSchedule_ProLink">
Florida Panthers vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">625</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs New York Rangers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">741</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">742</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">743</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">744</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">745</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">746</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">747</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">748</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">749</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">750</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">751</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">752</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Nunavik Natturaliit</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 103</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">626</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">627</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Tampa Bay Lightning</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">753</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Connecticut Whale</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 104</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">628</td><td class="STHSSchedule_ProLink">
New York Rangers vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">629</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">630</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">631</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Los Angeles Kings (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">632</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">633</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">634</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">635</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">636</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Minnesota Wild</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">754</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">755</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">756</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">757</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">758</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">759</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Trois-Rivières Lions</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 105</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">637</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">638</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">639</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Vancouver Canucks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">760</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">761</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">762</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">763</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Chicago Wolves</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 106</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">640</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">641</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">642</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Philadelphia Flyers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">764</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">765</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">766</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">767</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">768</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Oklahoma City Barons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 107</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">643</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">644</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">645</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">646</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">647</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">648</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">649</td><td class="STHSSchedule_ProLink">
New York Islanders vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">650</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">651</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">652</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Anaheim Ducks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">769</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">770</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">771</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">772</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">773</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">774</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">775</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">776</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">777</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">778</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">779</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">780</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Blainville-Boisbriand Armada</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 108</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">653</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">654</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">655</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">656</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">657</td><td class="STHSSchedule_ProLink">
New York Rangers vs New York Islanders (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">658</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">659</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">660</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">661</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">662</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">663</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Calgary Flames</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">781</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">782</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">783</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">784</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">785</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Norfolk Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 109</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">664</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">665</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">666</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">667</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">668</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">669</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">670</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">671</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">672</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Ottawa Senators</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">786</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">787</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">788</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">789</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">790</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">791</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">792</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">793</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">794</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">795</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Binghamton Senators</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 110</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">673</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Boston Bruins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">796</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">797</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">798</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">799</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">800</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">801</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">802</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">803</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">804</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">805</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">806</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">807</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">808</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Laval Chiefs</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 111</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">674</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">675</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">676</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">677</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">678</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">679</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">680</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">681</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">682</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Philadelphia Flyers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">809</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">810</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">811</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">812</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">813</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">814</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Providence Bruins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 112</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">683</td><td class="STHSSchedule_ProLink">
New York Islanders vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">684</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">685</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">686</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">687</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">688</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">689</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">690</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">691</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">692</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Boston Bruins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">815</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">816</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">817</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">818</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">819</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">820</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">821</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">822</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">823</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">824</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">825</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Manitoba Moose</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 113</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">693</td><td class="STHSSchedule_ProLink">
Washington Capitals vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">694</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Buffalo Sabres</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">826</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">827</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">828</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">829</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">830</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Henderson Silver Knights</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 114</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">695</td><td class="STHSSchedule_ProLink">
New York Rangers vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">696</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">697</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">698</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">699</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">700</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">701</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">702</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">703</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">704</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">705</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Edmonton Oilers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">831</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">832</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">833</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">834</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">835</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Chicago Wolves</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 115</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">706</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">707</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">708</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">709</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">710</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">711</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">712</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">713</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">714</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">715</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">716</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs New York Islanders</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">836</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">837</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">838</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">839</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">840</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">841</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">842</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">843</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">844</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">845</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">846</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Norfolk Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 116</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">717</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">718</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">719</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Anaheim Ducks (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">720</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">721</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Winnipeg Jets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">847</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">848</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">849</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">850</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">851</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">852</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">853</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">854</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">855</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">856</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Grand Rapids Griffins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 117</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">722</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">723</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">724</td><td class="STHSSchedule_ProLink">
New York Rangers vs Buffalo Sabres</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">857</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">858</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">859</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">860</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Adirondack Phantoms</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 118</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">725</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">726</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">727</td><td class="STHSSchedule_ProLink">
New York Islanders vs Boston Bruins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">861</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">862</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">863</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">864</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">865</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">866</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">867</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">868</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">869</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">870</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">871</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Albany Devils</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 119</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">728</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">729</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">730</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">731</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">732</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">733</td><td class="STHSSchedule_ProLink">
Nashville Predators vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">734</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">735</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">736</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">737</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">738</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Chicago Blackhawks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">872</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">873</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">874</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">875</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Joliette Sportif</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 120</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">739</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">740</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">741</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">742</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">743</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">744</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">745</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">746</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">747</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">748</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">749</td><td class="STHSSchedule_ProLink">
Dallas Stars vs New York Islanders</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">876</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">877</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">878</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Lake Erie Monsters</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 121</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">750</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">751</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Anaheim Ducks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">879</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">880</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">881</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">882</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">883</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">884</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">885</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">886</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">887</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">888</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">889</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">890</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">891</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Henderson Silver Knights</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 122</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">752</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">753</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Carolina Hurricanes</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">892</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">893</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">894</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">895</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">896</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">897</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">898</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">899</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">900</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">901</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">902</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">903</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">904</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Bridgeport Sound Tigers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 123</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">754</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">755</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">756</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">757</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs New Jersey Devils</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">905</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">906</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">907</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Roberval Dwarfs</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 124</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">758</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">759</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">760</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Los Angeles Kings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">908</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">909</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">910</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">911</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">912</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">913</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">914</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">915</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">916</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">917</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">918</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">919</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Springfield Falcons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 125</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">761</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">762</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">763</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">764</td><td class="STHSSchedule_ProLink">
New York Rangers vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">765</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Edmonton Oilers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">920</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">921</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">922</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">923</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">924</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">925</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">926</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Joliette Sportif</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 126</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">766</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">767</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">768</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">769</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">770</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">771</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">772</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">773</td><td class="STHSSchedule_ProLink">
New York Islanders vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">774</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Vancouver Canucks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">927</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">928</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">929</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">930</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">931</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">932</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">933</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">934</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">935</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">936</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">937</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">938</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">939</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Wilkes-Barre/Scranton Penguins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 127</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">775</td><td class="STHSSchedule_ProLink">
Dallas Stars vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">776</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">777</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">778</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">779</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">780</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Toronto Maple Leafs</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">940</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">941</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs The Nuuk Vikings</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 128</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">781</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Philadelphia Flyers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">942</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">943</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Albany Devils</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 129</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">782</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">783</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">784</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">785</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">786</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">787</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">788</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">789</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">790</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">791</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Buffalo Sabres</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">944</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">945</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">946</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">947</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">948</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">949</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">950</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">951</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">952</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">953</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">954</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Milwaukee Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 130</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">792</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">793</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">794</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">795</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">796</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">797</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">798</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">799</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">800</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Dallas Stars</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">955</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">956</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Grand Rapids Griffins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 131</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">801</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">802</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Detroit Red Wings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">957</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">958</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">959</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">960</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">961</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">962</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">963</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">964</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">965</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">966</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">967</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Adirondack Phantoms</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 132</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">803</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">804</td><td class="STHSSchedule_ProLink">
New York Rangers vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">805</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">806</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Montreal Canadiens (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">807</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">808</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">809</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">810</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">811</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">812</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Philadelphia Flyers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">968</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">969</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">970</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">971</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">972</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">973</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">974</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">975</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">976</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">977</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">978</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">979</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Trois-Rivières Lions</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 133</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">813</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">814</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">815</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Anaheim Ducks (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">816</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Colorado Avalanche</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">980</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">981</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">982</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">983</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">984</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">985</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Bridgeport Sound Tigers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 134</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">817</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">818</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">819</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">820</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Seattle Kraken</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">986</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">987</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">988</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">989</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">990</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">991</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">992</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">993</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">994</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">995</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">996</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">997</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">998</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Gatineau Olympiques</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 135</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">821</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">822</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">823</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">824</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">825</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">826</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Los Angeles Kings (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">827</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">828</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">829</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">830</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Detroit Red Wings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">999</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1000</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">1001</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1002</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1003</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">1004</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1005</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">1006</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1007</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1008</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Connecticut Whale</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 136</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">831</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">832</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">833</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">834</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">835</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">836</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">837</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">838</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">839</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">840</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs New York Islanders</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1009</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1010</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">1011</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1012</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1013</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1014</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">1015</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1016</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1017</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Bridgeport Sound Tigers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 137</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">841</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">842</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">843</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Florida Panthers (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1018</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1019</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">1020</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">1021</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1022</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1023</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1024</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1025</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">1026</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1027</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1028</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">1029</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Oklahoma City Barons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 138</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">844</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">845</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">846</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">847</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">848</td><td class="STHSSchedule_ProLink">
New York Islanders vs Seattle Kraken</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1030</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">1031</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">1032</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Gatineau Olympiques</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 139</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">849</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">850</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">851</td><td class="STHSSchedule_ProLink">
Dallas Stars vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">852</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">853</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Pittsburgh Penguins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1033</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">1034</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1035</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">1036</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">1037</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">1038</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1039</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">1040</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1041</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1042</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1043</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs San Antonio Rampage</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 140</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">854</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">855</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">856</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Toronto Maple Leafs</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1044</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Houston Aeros</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 141</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">857</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">858</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Buffalo Sabres</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1045</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1046</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1047</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">1048</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1049</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Norfolk Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 142</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">859</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">860</td><td class="STHSSchedule_ProLink">
New York Rangers vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">861</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">862</td><td class="STHSSchedule_ProLink">
New York Islanders vs San Jose Sharks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1050</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1051</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">1052</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Rochester Americans</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 143</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">863</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">864</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">865</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">866</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">867</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">868</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">869</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">870</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">871</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">872</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">873</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Pittsburgh Penguins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1053</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">1054</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1055</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1056</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1057</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">1058</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">1059</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1060</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1061</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1062</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Nunavik Natturaliit</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 144</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">874</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">875</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">876</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">877</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">878</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">879</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Anaheim Ducks (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">880</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">881</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">882</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">883</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">884</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Winnipeg Jets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1063</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1064</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">1065</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1066</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">1067</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">1068</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">1069</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1070</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1071</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">1072</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1073</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1074</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">1075</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Charlotte Checkers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 145</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">885</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">886</td><td class="STHSSchedule_ProLink">
Florida Panthers vs New York Rangers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1076</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1077</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1078</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">1079</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">1080</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1081</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">1082</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Milwaukee Admirals</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 146</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">887</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">888</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">889</td><td class="STHSSchedule_ProLink">
Calgary Flames vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">890</td><td class="STHSSchedule_ProLink">
New York Islanders vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">891</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Los Angeles Kings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1083</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">1084</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1085</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">1086</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1087</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1088</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1089</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1090</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1091</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">1092</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">1093</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">1094</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Rouyn-Noranda Huskies</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 147</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">892</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">893</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">894</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">895</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">896</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">897</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">898</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">899</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">900</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs San Jose Sharks (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">901</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">902</td><td class="STHSSchedule_ProLink">
New York Rangers vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">903</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Vancouver Canucks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1095</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1096</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">1097</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1098</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">1099</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1100</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1101</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">1102</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1103</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1104</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1105</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">1106</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1107</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Lake Erie Monsters</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 148</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">904</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">905</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">906</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">907</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">908</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">909</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">910</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Ottawa Senators (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">911</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">912</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">913</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">914</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">915</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Philadelphia Flyers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1108</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">1109</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">1110</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1111</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1112</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">1113</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1114</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1115</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Trois-Rivières Lions</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 149</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">916</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">917</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">918</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">919</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">920</td><td class="STHSSchedule_ProLink">
New York Islanders vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">921</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">922</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Los Angeles Kings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1116</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1117</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1118</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1119</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1120</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1121</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">1122</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Verdun Junior</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 150</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">923</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">924</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">925</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">926</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">927</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">928</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">929</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Chicago Blackhawks (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">930</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">931</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">932</td><td class="STHSSchedule_ProLink">
New York Rangers vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">933</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">934</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs San Jose Sharks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1123</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">1124</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1125</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1126</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">1127</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">1128</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1129</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Adirondack Phantoms</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 151</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">935</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">936</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">937</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">938</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">939</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">940</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">941</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">942</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">943</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">944</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">945</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">946</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Anaheim Ducks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1130</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1131</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">1132</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">1133</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1134</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1135</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">1136</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1137</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1138</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Albany Devils</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 152</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">947</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">948</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">949</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">950</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">951</td><td class="STHSSchedule_ProLink">
New York Islanders vs New York Rangers (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">952</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">953</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">954</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">955</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Los Angeles Kings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1139</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1140</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1141</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">1142</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1143</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">1144</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">1145</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs San Antonio Rampage</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 153</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">956</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">957</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">958</td><td class="STHSSchedule_ProLink">
New York Rangers vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">959</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Arizona Coyotes</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1146</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">1147</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1148</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1149</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">1150</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1151</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1152</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">1153</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">1154</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1155</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1156</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">1157</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1158</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Binghamton Senators</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 154</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">960</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">961</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">962</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">963</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">964</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">965</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">966</td><td class="STHSSchedule_ProLink">
Florida Panthers vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">967</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">968</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">969</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Quebec Nordiques</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1159</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Providence Bruins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 155</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">970</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Chicago Blackhawks (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">971</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">972</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">973</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">974</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">975</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">976</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">977</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">978</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">979</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Anaheim Ducks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1160</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1161</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1162</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1163</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Adirondack Phantoms</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 156</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">980</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">981</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">982</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">983</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs New York Rangers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1164</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">1165</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">1166</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">1167</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">1168</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">1169</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Laval Chiefs</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 157</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">984</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">985</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">986</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">987</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">988</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">989</td><td class="STHSSchedule_ProLink">
New York Islanders vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">990</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">991</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">992</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">993</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">994</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">995</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Columbus Blue Jackets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1170</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1171</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1172</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1173</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1174</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Charlotte Checkers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 158</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">996</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">997</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Toronto Maple Leafs (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">998</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">999</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1000</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Vegas Golden Knights</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1175</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1176</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">1177</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Nunavik Natturaliit</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 159</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1001</td><td class="STHSSchedule_ProLink">
New York Islanders vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1002</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">1003</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1004</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1005</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1006</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">1007</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1008</td><td class="STHSSchedule_ProLink">
New York Rangers vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1009</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1010</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">1011</td><td class="STHSSchedule_ProLink">
Dallas Stars vs New Jersey Devils</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1178</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1179</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">1180</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">1181</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1182</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1183</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">1184</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1185</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Providence Bruins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 160</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1012</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1013</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1014</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1015</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1016</td><td class="STHSSchedule_ProLink">
New York Rangers vs New York Islanders (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1017</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Pittsburgh Penguins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1186</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1187</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Grand Rapids Griffins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 161</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1018</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">1019</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1020</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">1021</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1022</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1023</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">1024</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">1025</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1026</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1027</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Detroit Red Wings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1188</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1189</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">1190</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1191</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Chicoutimi Saguenéens</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 162</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1028</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Vegas Golden Knights</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1192</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">1193</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">1194</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1195</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">1196</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1197</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">1198</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">1199</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1200</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">1201</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1202</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Blainville-Boisbriand Armada</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 163</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1029</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Boston Bruins (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1030</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">1031</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1032</td><td class="STHSSchedule_ProLink">
New York Islanders vs Columbus Blue Jackets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1203</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">1204</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">1205</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Chisinau Pelicans</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 164</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1033</td><td class="STHSSchedule_ProLink">
Washington Capitals vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1034</td><td class="STHSSchedule_ProLink">
Calgary Flames vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">1035</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1036</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1037</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">1038</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1039</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1040</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">1041</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Philadelphia Flyers (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1042</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Florida Panthers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1206</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1207</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1208</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Charlotte Checkers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 165</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1043</td><td class="STHSSchedule_ProLink">
New York Islanders vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1044</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1045</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1046</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Anaheim Ducks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1209</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1210</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">1211</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1212</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">1213</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1214</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">1215</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1216</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1217</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1218</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Rochester Americans</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 166</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1047</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">1048</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Pittsburgh Penguins (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1049</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1050</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1051</td><td class="STHSSchedule_ProLink">
Boston Bruins vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1052</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1053</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1054</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs New York Islanders</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1219</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1220</td><td class="STHSSchedule_FarmLink">
Albany Devils vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">1221</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1222</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1223</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">1224</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1225</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1226</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">1227</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1228</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">1229</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Blainville-Boisbriand Armada</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 167</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1055</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">1056</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">1057</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">1058</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1059</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1060</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1061</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1062</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1063</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">1064</td><td class="STHSSchedule_ProLink">
New York Rangers vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1065</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1066</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Ottawa Senators</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1230</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1231</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">1232</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1233</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">1234</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1235</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Charlotte Checkers</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 168</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1067</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1068</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">1069</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1070</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">1071</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Edmonton Oilers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1236</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">1237</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">1238</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">1239</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1240</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">1241</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1242</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1243</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">1244</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1245</td><td class="STHSSchedule_FarmLink">
Roberval Dwarfs vs Nunavik Natturaliit</td></tr>
</table>
</td></tr>
<tr><td colspan="4"><b>----------- Trade Deadline --- Trades can’t be done after this day is simulated!</b></td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 169</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1072</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1073</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">1074</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1075</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Quebec Nordiques</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1246</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">1247</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">1248</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1249</td><td class="STHSSchedule_FarmLink">
Bridgeport Sound Tigers vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1250</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Wilkes-Barre/Scranton Penguins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 170</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1076</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Seattle Kraken</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1251</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1252</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1253</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1254</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1255</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Mercer Island Hafgufa</td></tr>
<tr><td class="STHSSchedule_GameNumber">1256</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">1257</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1258</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Laval Chiefs</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 171</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1077</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1078</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Philadelphia Flyers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1259</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1260</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1261</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1262</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">1263</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">1264</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">1265</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">1266</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">1267</td><td class="STHSSchedule_FarmLink">
Rochester Americans vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1268</td><td class="STHSSchedule_FarmLink">
Albany Devils vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">1269</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Trois-Rivières Lions</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 172</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1079</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1080</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1081</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1082</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1083</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1084</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">1085</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1086</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1087</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">1088</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">1089</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Chicago Blackhawks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1270</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">1271</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1272</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1273</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1274</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">1275</td><td class="STHSSchedule_FarmLink">
Oklahoma City Barons vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1276</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1277</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1278</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1279</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">1280</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Albany Devils</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 173</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1090</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1091</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Los Angeles Kings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1281</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">1282</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1283</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">1284</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1285</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1286</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1287</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1288</td><td class="STHSSchedule_FarmLink">
Lake Erie Monsters vs Mercer Island Hafgufa</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 174</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1092</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">1093</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">1094</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">1095</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Montreal Canadiens (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1289</td><td class="STHSSchedule_FarmLink">
Trois-Rivières Lions vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">1290</td><td class="STHSSchedule_FarmLink">
Gatineau Olympiques vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">1291</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1292</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Henderson Silver Knights</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 175</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1096</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1097</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1098</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1099</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1100</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">1101</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1102</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1103</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1104</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1105</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1106</td><td class="STHSSchedule_ProLink">
New York Rangers vs Ottawa Senators</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1293</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1294</td><td class="STHSSchedule_FarmLink">
Grand Rapids Griffins vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1295</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">1296</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1297</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Houston Aeros</td></tr>
<tr><td class="STHSSchedule_GameNumber">1298</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">1299</td><td class="STHSSchedule_FarmLink">
Milwaukee Admirals vs Chicago Wolves</td></tr>
<tr><td class="STHSSchedule_GameNumber">1300</td><td class="STHSSchedule_FarmLink">
Wilkes-Barre/Scranton Penguins vs San Antonio Rampage</td></tr>
<tr><td class="STHSSchedule_GameNumber">1301</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Chisinau Pelicans</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 176</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1107</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1108</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Quebec Nordiques (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1109</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1110</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">1111</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">1112</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1113</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1114</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1115</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1116</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Toronto Maple Leafs</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1302</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Springfield Falcons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1303</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">1304</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1305</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Providence Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1306</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">1307</td><td class="STHSSchedule_FarmLink">
Albany Devils vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1308</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Nunavik Natturaliit</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 177</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1117</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">1118</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1119</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1120</td><td class="STHSSchedule_ProLink">
Boston Bruins vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1121</td><td class="STHSSchedule_ProLink">
New York Islanders vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">1122</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">1123</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Chicago Blackhawks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1309</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">1310</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Trois-Rivières Lions</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 178</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1124</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1125</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1126</td><td class="STHSSchedule_ProLink">
New York Rangers vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1127</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">1128</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1129</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1130</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Montreal Canadiens</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1311</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1312</td><td class="STHSSchedule_FarmLink">
Manitoba Moose vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1313</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1314</td><td class="STHSSchedule_FarmLink">
Norfolk Admirals vs Oklahoma City Barons</td></tr>
<tr><td class="STHSSchedule_GameNumber">1315</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1316</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1317</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1318</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1319</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">1320</td><td class="STHSSchedule_FarmLink">
Charlotte Checkers vs Gatineau Olympiques</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 179</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1131</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">1132</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">1133</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1134</td><td class="STHSSchedule_ProLink">
New York Rangers vs Boston Bruins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1321</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Mercer Island Hafgufa</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 180</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1135</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Edmonton Oilers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1322</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Verdun Junior</td></tr>
<tr><td class="STHSSchedule_GameNumber">1323</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Chicoutimi Saguenéens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1324</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Houston Aeros</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 181</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1136</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">1137</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">1138</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Quebec Nordiques (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1139</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1140</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1141</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1142</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1143</td><td class="STHSSchedule_ProLink">
New York Islanders vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1144</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1145</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Toronto Maple Leafs</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1325</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Joliette Sportif</td></tr>
<tr><td class="STHSSchedule_GameNumber">1326</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Henderson Silver Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1327</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Binghamton Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1328</td><td class="STHSSchedule_FarmLink">
Rouyn-Noranda Huskies vs The Nuuk Vikings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1329</td><td class="STHSSchedule_FarmLink">
Springfield Falcons vs Connecticut Whale</td></tr>
<tr><td class="STHSSchedule_GameNumber">1330</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs San Antonio Rampage</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 182</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1146</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1147</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1148</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">1149</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1150</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">1151</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">1152</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1153</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">1154</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1155</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1156</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Vegas Golden Knights</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1331</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Providence Bruins</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 183</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1157</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1158</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Chicago Blackhawks (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1159</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1160</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Montreal Canadiens (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1161</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Calgary Flames</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1332</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Adirondack Phantoms</td></tr>
<tr><td class="STHSSchedule_GameNumber">1333</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Nunavik Natturaliit</td></tr>
<tr><td class="STHSSchedule_GameNumber">1334</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Chicago Wolves</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 184</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1162</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1163</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1164</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">1165</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1166</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Detroit Red Wings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1335</td><td class="STHSSchedule_FarmLink">
Nunavik Natturaliit vs Laval Chiefs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1336</td><td class="STHSSchedule_FarmLink">
Henderson Silver Knights vs Blainville-Boisbriand Armada</td></tr>
<tr><td class="STHSSchedule_GameNumber">1337</td><td class="STHSSchedule_FarmLink">
Chicoutimi Saguenéens vs Chisinau Pelicans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1338</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Roberval Dwarfs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1339</td><td class="STHSSchedule_FarmLink">
San Antonio Rampage vs Rochester Americans</td></tr>
<tr><td class="STHSSchedule_GameNumber">1340</td><td class="STHSSchedule_FarmLink">
Providence Bruins vs Bridgeport Sound Tigers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1341</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Lake Erie Monsters</td></tr>
<tr><td class="STHSSchedule_GameNumber">1342</td><td class="STHSSchedule_FarmLink">
The Nuuk Vikings vs Trois-Rivières Lions</td></tr>
<tr><td class="STHSSchedule_GameNumber">1343</td><td class="STHSSchedule_FarmLink">
Joliette Sportif vs Grand Rapids Griffins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1344</td><td class="STHSSchedule_FarmLink">
Houston Aeros vs Oklahoma City Barons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 185</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1167</td><td class="STHSSchedule_ProLink">
Buffalo Sabres vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">1168</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">1169</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">1170</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Toronto Maple Leafs (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1171</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1172</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">1173</td><td class="STHSSchedule_ProLink">
New York Islanders vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1174</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1175</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Florida Panthers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1345</td><td class="STHSSchedule_FarmLink">
Adirondack Phantoms vs Norfolk Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1346</td><td class="STHSSchedule_FarmLink">
Blainville-Boisbriand Armada vs Manitoba Moose</td></tr>
<tr><td class="STHSSchedule_GameNumber">1347</td><td class="STHSSchedule_FarmLink">
Verdun Junior vs Gatineau Olympiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1348</td><td class="STHSSchedule_FarmLink">
Laval Chiefs vs Albany Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1349</td><td class="STHSSchedule_FarmLink">
Chisinau Pelicans vs Wilkes-Barre/Scranton Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1350</td><td class="STHSSchedule_FarmLink">
Chicago Wolves vs Rouyn-Noranda Huskies</td></tr>
<tr><td class="STHSSchedule_GameNumber">1351</td><td class="STHSSchedule_FarmLink">
Connecticut Whale vs Milwaukee Admirals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1352</td><td class="STHSSchedule_FarmLink">
Mercer Island Hafgufa vs Charlotte Checkers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1353</td><td class="STHSSchedule_FarmLink">
Binghamton Senators vs Springfield Falcons</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 186</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1176</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Philadelphia Flyers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<b>--------------  Rest Day</b>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 187</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1177</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1178</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1179</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1180</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1181</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1182</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1183</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1184</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">1185</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">1186</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs New York Rangers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 188</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1187</td><td class="STHSSchedule_ProLink">
Tampa Bay Lightning vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1188</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">1189</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Los Angeles Kings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1190</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1191</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">1192</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">1193</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">1194</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1195</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1196</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Columbus Blue Jackets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 189</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1197</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Calgary Flames</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 190</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1198</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1199</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Chicago Blackhawks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 191</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1200</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1201</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1202</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1203</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Minnesota Wild</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 192</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1204</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1205</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1206</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1207</td><td class="STHSSchedule_ProLink">
Florida Panthers vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1208</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1209</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1210</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Quebec Nordiques (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1211</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1212</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Winnipeg Jets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 193</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1213</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">1214</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1215</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Boston Bruins (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1216</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">1217</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1218</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1219</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1220</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">1221</td><td class="STHSSchedule_ProLink">
Florida Panthers vs Tampa Bay Lightning (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1222</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Los Angeles Kings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 194</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1223</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Arizona Coyotes</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 195</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1224</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Calgary Flames</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 196</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1225</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs San Jose Sharks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1226</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Columbus Blue Jackets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1227</td><td class="STHSSchedule_ProLink">
Washington Capitals vs Philadelphia Flyers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1228</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">1229</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">1230</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1231</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1232</td><td class="STHSSchedule_ProLink">
Nashville Predators vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1233</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">1234</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Minnesota Wild</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 197</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1235</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Ottawa Senators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1236</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Chicago Blackhawks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1237</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1238</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1239</td><td class="STHSSchedule_ProLink">
Toronto Maple Leafs vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1240</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Detroit Red Wings</td></tr>
<tr><td class="STHSSchedule_GameNumber">1241</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs Boston Bruins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1242</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Florida Panthers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 198</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1243</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Vegas Golden Knights</td></tr>
<tr><td class="STHSSchedule_GameNumber">1244</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1245</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1246</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">1247</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Colorado Avalanche</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 199</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1248</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1249</td><td class="STHSSchedule_ProLink">
New Jersey Devils vs New York Rangers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1250</td><td class="STHSSchedule_ProLink">
Winnipeg Jets vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">1251</td><td class="STHSSchedule_ProLink">
Pittsburgh Penguins vs Toronto Maple Leafs</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 200</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1252</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">1253</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Washington Capitals</td></tr>
<tr><td class="STHSSchedule_GameNumber">1254</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Nashville Predators</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 201</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1255</td><td class="STHSSchedule_ProLink">
Seattle Kraken vs Los Angeles Kings</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 202</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1256</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs San Jose Sharks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 203</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1257</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Arizona Coyotes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1258</td><td class="STHSSchedule_ProLink">
Detroit Red Wings vs Columbus Blue Jackets</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 204</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1259</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Calgary Flames</td></tr>
<tr><td class="STHSSchedule_GameNumber">1260</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs St. Louis Blues</td></tr>
<tr><td class="STHSSchedule_GameNumber">1261</td><td class="STHSSchedule_ProLink">
Quebec Nordiques vs Carolina Hurricanes</td></tr>
<tr><td class="STHSSchedule_GameNumber">1262</td><td class="STHSSchedule_ProLink">
Montreal Canadiens vs Florida Panthers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1263</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Chicago Blackhawks</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 205</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1264</td><td class="STHSSchedule_ProLink">
Anaheim Ducks vs New York Islanders</td></tr>
<tr><td class="STHSSchedule_GameNumber">1265</td><td class="STHSSchedule_ProLink">
St. Louis Blues vs Vancouver Canucks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1266</td><td class="STHSSchedule_ProLink">
Vegas Golden Knights vs Colorado Avalanche</td></tr>
<tr><td class="STHSSchedule_GameNumber">1267</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Minnesota Wild</td></tr>
<tr><td class="STHSSchedule_GameNumber">1268</td><td class="STHSSchedule_ProLink">
Los Angeles Kings vs Dallas Stars</td></tr>
<tr><td class="STHSSchedule_GameNumber">1269</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Edmonton Oilers</td></tr>
<tr><td class="STHSSchedule_GameNumber">1270</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Philadelphia Flyers</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 206</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1271</td><td class="STHSSchedule_ProLink">
Columbus Blue Jackets vs Boston Bruins</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 207</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1272</td><td class="STHSSchedule_ProLink">
San Jose Sharks vs Ottawa Senators</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 208</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1273</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Montreal Canadiens</td></tr>
<tr><td class="STHSSchedule_GameNumber">1274</td><td class="STHSSchedule_ProLink">
Arizona Coyotes vs Nashville Predators</td></tr>
<tr><td class="STHSSchedule_GameNumber">1275</td><td class="STHSSchedule_ProLink">
Chicago Blackhawks vs Detroit Red Wings (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1276</td><td class="STHSSchedule_ProLink">
Colorado Avalanche vs Seattle Kraken</td></tr>
<tr><td class="STHSSchedule_GameNumber">1277</td><td class="STHSSchedule_ProLink">
Florida Panthers vs New Jersey Devils</td></tr>
<tr><td class="STHSSchedule_GameNumber">1278</td><td class="STHSSchedule_ProLink">
Minnesota Wild vs Pittsburgh Penguins</td></tr>
<tr><td class="STHSSchedule_GameNumber">1279</td><td class="STHSSchedule_ProLink">
Ottawa Senators vs Tampa Bay Lightning</td></tr>
<tr><td class="STHSSchedule_GameNumber">1280</td><td class="STHSSchedule_ProLink">
Vancouver Canucks vs Buffalo Sabres</td></tr>
<tr><td class="STHSSchedule_GameNumber">1281</td><td class="STHSSchedule_ProLink">
New York Islanders vs New York Rangers (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1282</td><td class="STHSSchedule_ProLink">
Boston Bruins vs Washington Capitals</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 209</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1283</td><td class="STHSSchedule_ProLink">
Carolina Hurricanes vs Toronto Maple Leafs</td></tr>
<tr><td class="STHSSchedule_GameNumber">1284</td><td class="STHSSchedule_ProLink">
Calgary Flames vs Anaheim Ducks</td></tr>
<tr><td class="STHSSchedule_GameNumber">1285</td><td class="STHSSchedule_ProLink">
Philadelphia Flyers vs Winnipeg Jets</td></tr>
<tr><td class="STHSSchedule_GameNumber">1286</td><td class="STHSSchedule_ProLink">
Edmonton Oilers vs Quebec Nordiques</td></tr>
<tr><td class="STHSSchedule_GameNumber">1287</td><td class="STHSSchedule_ProLink">
Dallas Stars vs Vegas Golden Knights</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 210</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<b>--------------  Rest Day</b>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
</table>
<?php include "Footer.php";?>
