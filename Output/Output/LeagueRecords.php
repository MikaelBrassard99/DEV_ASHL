﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - League Records</title>
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
<h1 class="STHSLeagueRecord_TeamRecords">Team Records</h1>
<table class="STHSRecordTable">
<tr><td colspan="6"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Anaheim Ducks</td><td>2013</td><td>1108</td><td>13</td><td></td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>2013</td><td>573</td><td>12</td><td></td></tr>
<tr><td>3</td><td>Colorado Avalanche</td><td>2014</td><td>336</td><td>12</td><td></td></tr>
<tr><td>4</td><td>Anaheim Ducks</td><td>2013</td><td>719</td><td>11</td><td></td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>2014</td><td>595</td><td>11</td><td></td></tr>
<tr><td>6</td><td>Philadelphia Flyers</td><td>2014</td><td>831</td><td>11</td><td></td></tr>
<tr><td>7</td><td>Buffalo Sabres</td><td>2015</td><td>417</td><td>11</td><td></td></tr>
<tr><td>8</td><td>San Jose Sharks</td><td>2015</td><td>499</td><td>11</td><td></td></tr>
<tr><td>9</td><td>Buffalo Sabres</td><td>2015</td><td>705</td><td>11</td><td></td></tr>
<tr><td>10</td><td>Los Angeles Kings</td><td>2015</td><td>1178</td><td>11</td><td></td></tr>

<tr><td colspan="6"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Los Angeles Kings</td><td>2015</td><td>373</td><td></td><td></td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>2014</td><td>364</td><td></td><td></td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>2015</td><td>356</td><td></td><td></td></tr>
<tr><td>4</td><td>Buffalo Sabres</td><td>2014</td><td>340</td><td></td><td></td></tr>
<tr><td>5</td><td>Vancouver Canucks</td><td>2022</td><td>336</td><td></td><td></td></tr>
<tr><td>6</td><td>Anaheim Ducks</td><td>2012</td><td>332</td><td></td><td></td></tr>
<tr><td>7</td><td>Columbus Blue Jackets</td><td>2022</td><td>327</td><td></td><td></td></tr>
<tr><td>8</td><td>Anaheim Ducks</td><td>2022</td><td>325</td><td></td><td></td></tr>
<tr><td>9</td><td>Anaheim Ducks</td><td>2011</td><td>320</td><td></td><td></td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>2013</td><td>314</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Carolina Hurricanes</td><td>2022</td><td>318</td><td></td><td></td></tr>
<tr><td>2</td><td>Minnesota Wild</td><td>2015</td><td>316</td><td></td><td></td></tr>
<tr><td>3</td><td>Columbus Blue Jackets</td><td>2014</td><td>315</td><td></td><td></td></tr>
<tr><td>4</td><td>Ottawa Senators</td><td>2015</td><td>311</td><td></td><td></td></tr>
<tr><td>5</td><td>Quebec Nordiques</td><td>2022</td><td>304</td><td></td><td></td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>2015</td><td>302</td><td></td><td></td></tr>
<tr><td>7</td><td>Detroit Red Wings</td><td>2015</td><td>297</td><td></td><td></td></tr>
<tr><td>8</td><td>Tampa Bay Lightning</td><td>2011</td><td>295</td><td></td><td></td></tr>
<tr><td>9</td><td>Seattle Saints</td><td>2011</td><td>293</td><td></td><td></td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>2022</td><td>293</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Los Angeles Kings</td><td>2013</td><td>573</td><td>22</td><td></td></tr>
<tr><td>2</td><td>Anaheim Ducks</td><td>2013</td><td>1108</td><td>21</td><td></td></tr>
<tr><td>3</td><td>Colorado Avalanche</td><td>2014</td><td>336</td><td>21</td><td></td></tr>
<tr><td>4</td><td>Los Angeles Kings</td><td>2015</td><td>1178</td><td>21</td><td></td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>2014</td><td>595</td><td>20</td><td></td></tr>
<tr><td>6</td><td>Minnesota Wild</td><td>2017</td><td>713</td><td>20</td><td></td></tr>
<tr><td>7</td><td>San Jose Sharks</td><td>2015</td><td>499</td><td>19</td><td></td></tr>
<tr><td>8</td><td>Buffalo Sabres</td><td>2015</td><td>705</td><td>19</td><td></td></tr>
<tr><td>9</td><td>Seattle Saints</td><td>2017</td><td>702</td><td>19</td><td></td></tr>
<tr><td>10</td><td>Anaheim Ducks</td><td>2012</td><td>1257</td><td>18</td><td></td></tr>

<tr><td colspan="6"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Los Angeles Kings</td><td>2015</td><td>633</td><td></td><td></td></tr>
<tr><td>2</td><td>Philadelphia Flyers</td><td>2015</td><td>597</td><td></td><td></td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>2014</td><td>596</td><td></td><td></td></tr>
<tr><td>4</td><td>Buffalo Sabres</td><td>2014</td><td>573</td><td></td><td></td></tr>
<tr><td>5</td><td>Columbus Blue Jackets</td><td>2022</td><td>559</td><td></td><td></td></tr>
<tr><td>6</td><td>Anaheim Ducks</td><td>2012</td><td>558</td><td></td><td></td></tr>
<tr><td>7</td><td>Vancouver Canucks</td><td>2022</td><td>553</td><td></td><td></td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>2019</td><td>544</td><td></td><td></td></tr>
<tr><td>9</td><td>Anaheim Ducks</td><td>2022</td><td>542</td><td></td><td></td></tr>
<tr><td>10</td><td>Tampa Bay Lightning</td><td>2018</td><td>533</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Los Angeles Kings</td><td>2013</td><td>573</td><td>34</td><td></td></tr>
<tr><td>2</td><td>Anaheim Ducks</td><td>2013</td><td>1108</td><td>34</td><td></td></tr>
<tr><td>3</td><td>Colorado Avalanche</td><td>2014</td><td>336</td><td>33</td><td></td></tr>
<tr><td>4</td><td>Los Angeles Kings</td><td>2015</td><td>1178</td><td>32</td><td></td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>2014</td><td>595</td><td>31</td><td></td></tr>
<tr><td>6</td><td>Minnesota Wild</td><td>2017</td><td>713</td><td>31</td><td></td></tr>
<tr><td>7</td><td>San Jose Sharks</td><td>2015</td><td>499</td><td>30</td><td></td></tr>
<tr><td>8</td><td>Buffalo Sabres</td><td>2015</td><td>705</td><td>30</td><td></td></tr>
<tr><td>9</td><td>Philadelphia Flyers</td><td>2014</td><td>831</td><td>29</td><td></td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>2015</td><td>417</td><td>29</td><td></td></tr>

<tr><td colspan="6"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Los Angeles Kings</td><td>2015</td><td>1006</td><td></td><td></td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>2014</td><td>960</td><td></td><td></td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>2015</td><td>953</td><td></td><td></td></tr>
<tr><td>4</td><td>Buffalo Sabres</td><td>2014</td><td>913</td><td></td><td></td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>2012</td><td>890</td><td></td><td></td></tr>
<tr><td>6</td><td>Vancouver Canucks</td><td>2022</td><td>889</td><td></td><td></td></tr>
<tr><td>7</td><td>Columbus Blue Jackets</td><td>2022</td><td>886</td><td></td><td></td></tr>
<tr><td>8</td><td>Anaheim Ducks</td><td>2022</td><td>867</td><td></td><td></td></tr>
<tr><td>9</td><td>Los Angeles Kings</td><td>2019</td><td>842</td><td></td><td></td></tr>
<tr><td>10</td><td>Anaheim Ducks</td><td>2011</td><td>839</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>San Jose Sharks</td><td>2019</td><td>944</td><td>62</td><td></td></tr>
<tr><td>2</td><td>Winnipeg Jets</td><td>2019</td><td>884</td><td>61</td><td></td></tr>
<tr><td>3</td><td>Vegas Golden Knights</td><td>2020</td><td>881</td><td>59</td><td></td></tr>
<tr><td>4</td><td>Pittsburgh Penguins</td><td>2019</td><td>47</td><td>57</td><td></td></tr>
<tr><td>5</td><td>Calgary Flames</td><td>2019</td><td>105</td><td>57</td><td></td></tr>
<tr><td>6</td><td>Los Angeles Kings</td><td>2019</td><td>573</td><td>57</td><td></td></tr>
<tr><td>7</td><td>Los Angeles Kings</td><td>2019</td><td>284</td><td>56</td><td></td></tr>
<tr><td>8</td><td>Toronto Maple Leafs</td><td>2019</td><td>1036</td><td>56</td><td></td></tr>
<tr><td>9</td><td>New York Rangers</td><td>2019</td><td>1128</td><td>56</td><td></td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>2021</td><td>1135</td><td>56</td><td></td></tr>

<tr><td colspan="6"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Los Angeles Kings</td><td>2019</td><td>2940</td><td></td><td></td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>2019</td><td>2855</td><td></td><td></td></tr>
<tr><td>3</td><td>Pittsburgh Penguins</td><td>2018</td><td>2799</td><td></td><td></td></tr>
<tr><td>4</td><td>New York Rangers</td><td>2019</td><td>2775</td><td></td><td></td></tr>
<tr><td>5</td><td>Colorado Avalanche</td><td>2019</td><td>2754</td><td></td><td></td></tr>
<tr><td>6</td><td>Buffalo Sabres</td><td>2019</td><td>2746</td><td></td><td></td></tr>
<tr><td>7</td><td>Seattle Saints</td><td>2019</td><td>2731</td><td></td><td></td></tr>
<tr><td>8</td><td>Anaheim Ducks</td><td>2019</td><td>2702</td><td></td><td></td></tr>
<tr><td>9</td><td>Tampa Bay Lightning</td><td>2018</td><td>2697</td><td></td><td></td></tr>
<tr><td>10</td><td>Vegas Golden Knights</td><td>2019</td><td>2694</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Florida Panthers</td><td>2013</td><td>665</td><td>28</td><td></td></tr>
<tr><td>2</td><td>St. Louis Blues</td><td>2014</td><td>881</td><td>28</td><td></td></tr>
<tr><td>3</td><td>New York Rangers</td><td>2017</td><td>499</td><td>28</td><td></td></tr>
<tr><td>4</td><td>San Jose Sharks</td><td>2012</td><td>189</td><td>27</td><td></td></tr>
<tr><td>5</td><td>Dallas Stars</td><td>2013</td><td>1024</td><td>27</td><td></td></tr>
<tr><td>6</td><td>Dallas Stars</td><td>2015</td><td>71</td><td>27</td><td></td></tr>
<tr><td>7</td><td>St. Louis Blues</td><td>2020</td><td>1127</td><td>27</td><td></td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>2022</td><td>408</td><td>27</td><td></td></tr>
<tr><td>9</td><td>Quebec Nordiques</td><td>2013</td><td>27</td><td>26</td><td></td></tr>
<tr><td>10</td><td>New Jersey Devils</td><td>2017</td><td>518</td><td>26</td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Toronto Maple Leafs</td><td>2011</td><td>971</td><td></td><td></td></tr>
<tr><td>2</td><td>New York Islanders</td><td>2012</td><td>943</td><td></td><td></td></tr>
<tr><td>3</td><td>San Jose Sharks</td><td>2013</td><td>941</td><td></td><td></td></tr>
<tr><td>4</td><td>Minnesota Wild</td><td>2012</td><td>939</td><td></td><td></td></tr>
<tr><td>5</td><td>Quebec Nordiques</td><td>2013</td><td>937</td><td></td><td></td></tr>
<tr><td>6</td><td>New York Islanders</td><td>2022</td><td>936</td><td></td><td></td></tr>
<tr><td>7</td><td>Ottawa Senators</td><td>2011</td><td>928</td><td></td><td></td></tr>
<tr><td>8</td><td>Florida Panthers</td><td>2012</td><td>925</td><td></td><td></td></tr>
<tr><td>9</td><td>New York Rangers</td><td>2012</td><td>923</td><td></td><td></td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>2011</td><td>920</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Washington Capitals</td><td>2018</td><td>2756</td><td></td><td></td></tr>
<tr><td>2</td><td>Anaheim Ducks</td><td>2019</td><td>2754</td><td></td><td></td></tr>
<tr><td>3</td><td>Seattle Kraken</td><td>2020</td><td>2730</td><td></td><td></td></tr>
<tr><td>4</td><td>Quebec Nordiques</td><td>2019</td><td>2729</td><td></td><td></td></tr>
<tr><td>5</td><td>New York Rangers</td><td>2019</td><td>2713</td><td></td><td></td></tr>
<tr><td>6</td><td>Edmonton Oilers</td><td>2019</td><td>2713</td><td></td><td></td></tr>
<tr><td>7</td><td>New York Islanders</td><td>2019</td><td>2689</td><td></td><td></td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>2019</td><td>2689</td><td></td><td></td></tr>
<tr><td>9</td><td>Carolina Hurricanes</td><td>2020</td><td>2689</td><td></td><td></td></tr>
<tr><td>10</td><td>Boston Bruins</td><td>2019</td><td>2683</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Ottawa Senators</td><td>2011</td><td>573</td><td>70</td><td></td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>2019</td><td>197</td><td>68</td><td></td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>2015</td><td>1062</td><td>67</td><td></td></tr>
<tr><td>4</td><td>Calgary Flames</td><td>2014</td><td>1242</td><td>65</td><td></td></tr>
<tr><td>5</td><td>New York Islanders</td><td>2012</td><td>330</td><td>58</td><td></td></tr>
<tr><td>6</td><td>Washington Capitals</td><td>2012</td><td>1161</td><td>56</td><td></td></tr>
<tr><td>7</td><td>New York Islanders</td><td>2012</td><td>1264</td><td>56</td><td></td></tr>
<tr><td>8</td><td>Toronto Maple Leafs</td><td>2011</td><td>831</td><td>55</td><td></td></tr>
<tr><td>9</td><td>New York Rangers</td><td>2015</td><td>1062</td><td>55</td><td></td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>2012</td><td>340</td><td>54</td><td></td></tr>

<tr><td colspan="6"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Seattle Saints</td><td>2011</td><td>1252</td><td></td><td></td></tr>
<tr><td>2</td><td>Ottawa Senators</td><td>2011</td><td>1223</td><td></td><td></td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>2011</td><td>1212</td><td></td><td></td></tr>
<tr><td>4</td><td>New York Islanders</td><td>2013</td><td>1206</td><td></td><td></td></tr>
<tr><td>5</td><td>Dallas Stars</td><td>2012</td><td>1186</td><td></td><td></td></tr>
<tr><td>6</td><td>Pittsburgh Penguins</td><td>2011</td><td>1179</td><td></td><td></td></tr>
<tr><td>7</td><td>Quebec Nordiques</td><td>2011</td><td>1151</td><td></td><td></td></tr>
<tr><td>8</td><td>Columbus Blue Jackets</td><td>2011</td><td>1123</td><td></td><td></td></tr>
<tr><td>9</td><td>Florida Panthers</td><td>2011</td><td>1083</td><td></td><td></td></tr>
<tr><td>10</td><td>Carolina Hurricanes</td><td>2011</td><td>1029</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Philadelphia Flyers</td><td>2021</td><td>1328</td><td>42</td><td></td></tr>
<tr><td>2</td><td>Calgary Flames</td><td>2013</td><td>329</td><td>39</td><td></td></tr>
<tr><td>3</td><td>Carolina Hurricanes</td><td>2018</td><td>782</td><td>38</td><td></td></tr>
<tr><td>4</td><td>Edmonton Oilers</td><td>2021</td><td>974</td><td>38</td><td></td></tr>
<tr><td>5</td><td>Toronto Maple Leafs</td><td>2013</td><td>907</td><td>37</td><td></td></tr>
<tr><td>6</td><td>New York Rangers</td><td>2017</td><td>1131</td><td>37</td><td></td></tr>
<tr><td>7</td><td>Carolina Hurricanes</td><td>2021</td><td>915</td><td>37</td><td></td></tr>
<tr><td>8</td><td>Seattle Saints</td><td>2014</td><td>623</td><td>36</td><td></td></tr>
<tr><td>9</td><td>Ottawa Senators</td><td>2014</td><td>1122</td><td>36</td><td></td></tr>
<tr><td>10</td><td>Carolina Hurricanes</td><td>2017</td><td>1070</td><td>36</td><td></td></tr>

<tr><td colspan="6"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Carolina Hurricanes</td><td>2022</td><td>1727</td><td></td><td></td></tr>
<tr><td>2</td><td>Washington Capitals</td><td>2018</td><td>1715</td><td></td><td></td></tr>
<tr><td>3</td><td>Quebec Nordiques</td><td>2020</td><td>1706</td><td></td><td></td></tr>
<tr><td>4</td><td>Carolina Hurricanes</td><td>2018</td><td>1700</td><td></td><td></td></tr>
<tr><td>5</td><td>Boston Bruins</td><td>2022</td><td>1698</td><td></td><td></td></tr>
<tr><td>6</td><td>Philadelphia Flyers</td><td>2022</td><td>1696</td><td></td><td></td></tr>
<tr><td>7</td><td>New York Rangers</td><td>2019</td><td>1689</td><td></td><td></td></tr>
<tr><td>8</td><td>Nashville Predators</td><td>2022</td><td>1689</td><td></td><td></td></tr>
<tr><td>9</td><td>Chicago Blackhawks</td><td>2018</td><td>1684</td><td></td><td></td></tr>
<tr><td>10</td><td>Calgary Flames</td><td>2022</td><td>1683</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Carolina Hurricanes</td><td>2022</td><td>7</td><td></td><td></td></tr>
<tr><td>2</td><td>Phoenix Coyotes</td><td>2012</td><td>6</td><td></td><td></td></tr>
<tr><td>3</td><td>Dallas Stars</td><td>2016</td><td>6</td><td></td><td></td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>2020</td><td>6</td><td></td><td></td></tr>
<tr><td>5</td><td>Chicago Blackhawks</td><td>2022</td><td>6</td><td></td><td></td></tr>
<tr><td>6</td><td>Los Angeles Kings</td><td>2016</td><td>5</td><td></td><td></td></tr>
<tr><td>7</td><td>New York Islanders</td><td>2017</td><td>5</td><td></td><td></td></tr>
<tr><td>8</td><td>Philadelphia Flyers</td><td>2017</td><td>5</td><td></td><td></td></tr>
<tr><td>9</td><td>Boston Bruins</td><td>2019</td><td>5</td><td></td><td></td></tr>
<tr><td>10</td><td>Washington Capitals</td><td>2011</td><td>4</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Washington Capitals</td><td>2019</td><td>40,00%</td><td></td><td></td></tr>
<tr><td>2</td><td>Anaheim Ducks</td><td>2022</td><td>32,10%</td><td></td><td></td></tr>
<tr><td>3</td><td>Buffalo Sabres</td><td>2011</td><td>30,20%</td><td></td><td></td></tr>
<tr><td>4</td><td>Anaheim Ducks</td><td>2012</td><td>29,80%</td><td></td><td></td></tr>
<tr><td>5</td><td>Pittsburgh Penguins</td><td>2019</td><td>29,30%</td><td></td><td></td></tr>
<tr><td>6</td><td>Los Angeles Kings</td><td>2014</td><td>29,20%</td><td></td><td></td></tr>
<tr><td>7</td><td>Boston Bruins</td><td>2019</td><td>28,60%</td><td></td><td></td></tr>
<tr><td>8</td><td>Buffalo Sabres</td><td>2013</td><td>28,20%</td><td></td><td></td></tr>
<tr><td>9</td><td>Ottawa Senators</td><td>2011</td><td>27,70%</td><td></td><td></td></tr>
<tr><td>10</td><td>Anaheim Ducks</td><td>2011</td><td>27,40%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Chicago Blackhawks</td><td>2019</td><td>94,60%</td><td></td><td></td></tr>
<tr><td>2</td><td>Minnesota Wild</td><td>2019</td><td>93,30%</td><td></td><td></td></tr>
<tr><td>3</td><td>Montreal Canadiens</td><td>2019</td><td>91,70%</td><td></td><td></td></tr>
<tr><td>4</td><td>Buffalo Sabres</td><td>2019</td><td>90,90%</td><td></td><td></td></tr>
<tr><td>5</td><td>Vancouver Canucks</td><td>2011</td><td>89,90%</td><td></td><td></td></tr>
<tr><td>6</td><td>Vegas Golden Knights</td><td>2019</td><td>89,50%</td><td></td><td></td></tr>
<tr><td>7</td><td>Montreal Canadiens</td><td>2012</td><td>89,40%</td><td></td><td></td></tr>
<tr><td>8</td><td>Florida Panthers</td><td>2016</td><td>89,00%</td><td></td><td></td></tr>
<tr><td>9</td><td>St. Louis Blues</td><td>2013</td><td>88,50%</td><td></td><td></td></tr>
<tr><td>10</td><td>New York Rangers</td><td>2011</td><td>88,20%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Los Angeles Kings</td><td>2015</td><td>67</td><td></td><td></td></tr>
<tr><td>2</td><td>Philadelphia Flyers</td><td>2015</td><td>66</td><td></td><td></td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>2014</td><td>65</td><td></td><td></td></tr>
<tr><td>4</td><td>New York Rangers</td><td>2011</td><td>63</td><td></td><td></td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>2012</td><td>63</td><td></td><td></td></tr>
<tr><td>6</td><td>Anaheim Ducks</td><td>2013</td><td>63</td><td></td><td></td></tr>
<tr><td>7</td><td>Vancouver Canucks</td><td>2011</td><td>62</td><td></td><td></td></tr>
<tr><td>8</td><td>Vancouver Canucks</td><td>2014</td><td>61</td><td></td><td></td></tr>
<tr><td>9</td><td>New York Rangers</td><td>2022</td><td>61</td><td></td><td></td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>2022</td><td>61</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Tampa Bay Lightning</td><td>2011</td><td>66</td><td></td><td></td></tr>
<tr><td>2</td><td>Calgary Flames</td><td>2012</td><td>66</td><td></td><td></td></tr>
<tr><td>3</td><td>New Jersey Devils</td><td>2013</td><td>65</td><td></td><td></td></tr>
<tr><td>4</td><td>Carolina Hurricanes</td><td>2022</td><td>65</td><td></td><td></td></tr>
<tr><td>5</td><td>Quebec Nordiques</td><td>2022</td><td>65</td><td></td><td></td></tr>
<tr><td>6</td><td>Minnesota Wild</td><td>2011</td><td>64</td><td></td><td></td></tr>
<tr><td>7</td><td>Seattle Saints</td><td>2011</td><td>63</td><td></td><td></td></tr>
<tr><td>8</td><td>Washington Capitals</td><td>2022</td><td>61</td><td></td><td></td></tr>
<tr><td>9</td><td>Dallas Stars</td><td>2012</td><td>59</td><td></td><td></td></tr>
<tr><td>10</td><td>New Jersey Devils</td><td>2012</td><td>57</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Philadelphia Flyers</td><td>2015</td><td>137</td><td></td><td></td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>2015</td><td>135</td><td></td><td></td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>2014</td><td>134</td><td></td><td></td></tr>
<tr><td>4</td><td>Vancouver Canucks</td><td>2011</td><td>133</td><td></td><td></td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>2012</td><td>133</td><td></td><td></td></tr>
<tr><td>6</td><td>New York Rangers</td><td>2011</td><td>132</td><td></td><td></td></tr>
<tr><td>7</td><td>Anaheim Ducks</td><td>2013</td><td>130</td><td></td><td></td></tr>
<tr><td>8</td><td>Vegas Golden Knights</td><td>2022</td><td>128</td><td></td><td></td></tr>
<tr><td>9</td><td>New York Rangers</td><td>2022</td><td>127</td><td></td><td></td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>2011</td><td>126</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Los Angeles Kings</td><td>2014</td><td>33</td><td></td><td></td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>2015</td><td>33</td><td></td><td></td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>2015</td><td>32</td><td></td><td></td></tr>
<tr><td>4</td><td>Columbus Blue Jackets</td><td>2022</td><td>32</td><td></td><td></td></tr>
<tr><td>5</td><td>New York Rangers</td><td>2012</td><td>31</td><td></td><td></td></tr>
<tr><td>6</td><td>Buffalo Sabres</td><td>2012</td><td>31</td><td></td><td></td></tr>
<tr><td>7</td><td>Buffalo Sabres</td><td>2014</td><td>31</td><td></td><td></td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>2014</td><td>31</td><td></td><td></td></tr>
<tr><td>9</td><td>Vancouver Canucks</td><td>2012</td><td>30</td><td></td><td></td></tr>
<tr><td>10</td><td>Anaheim Ducks</td><td>2012</td><td>30</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Philadelphia Flyers</td><td>2014</td><td>27</td><td></td><td></td></tr>
<tr><td>2</td><td>Philadelphia Flyers</td><td>2015</td><td>27</td><td></td><td></td></tr>
<tr><td>3</td><td>Vancouver Canucks</td><td>2011</td><td>26</td><td></td><td></td></tr>
<tr><td>4</td><td>Anaheim Ducks</td><td>2012</td><td>26</td><td></td><td></td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>2014</td><td>26</td><td></td><td></td></tr>
<tr><td>6</td><td>New York Rangers</td><td>2011</td><td>25</td><td></td><td></td></tr>
<tr><td>7</td><td>Buffalo Sabres</td><td>2011</td><td>24</td><td></td><td></td></tr>
<tr><td>8</td><td>Pittsburgh Penguins</td><td>2012</td><td>24</td><td></td><td></td></tr>
<tr><td>9</td><td>Vegas Golden Knights</td><td>2021</td><td>24</td><td></td><td></td></tr>
<tr><td>10</td><td>New York Rangers</td><td>2022</td><td>24</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_PlayersRecords">Players Records</h1>
<table class="STHSRecordPlayerGoalerTable">
<tr><td colspan="7"><b>Most Ice Time In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Niklas Hjalmarsson</td><td>Colorado Avalanche</td><td>2013</td><td>1067</td><td>36:02</td><td></td></tr>
<tr><td>2</td><td>Jeff Schultz</td><td>New Jersey Devils</td><td>2014</td><td>255</td><td>35:05</td><td></td></tr>
<tr><td>3</td><td>Dustin Byfuglien</td><td>Winnipeg Jets</td><td>2013</td><td>664</td><td>33:41</td><td></td></tr>
<tr><td>4</td><td>Dion Phaneuf</td><td>San Jose Sharks</td><td>2014</td><td>1067</td><td>33:31</td><td></td></tr>
<tr><td>5</td><td>Anton Babchuk</td><td>Nashville Predators</td><td>2013</td><td>721</td><td>33:02</td><td></td></tr>
<tr><td>6</td><td>Jay Bouwmeester</td><td>Phoenix Coyotes</td><td>2013</td><td>452</td><td>32:55</td><td></td></tr>
<tr><td>7</td><td>Andrew MacDonald</td><td>New York Islanders</td><td>2013</td><td>777</td><td>32:49</td><td></td></tr>
<tr><td>8</td><td>Mike Green</td><td>New York Islanders</td><td>2013</td><td>777</td><td>32:49</td><td></td></tr>
<tr><td>9</td><td>Tom Gilbert</td><td>Edmonton Oilers</td><td>2011</td><td>1049</td><td>32:47</td><td></td></tr>
<tr><td>10</td><td>Andrej Meszaros</td><td>Philadelphia Flyers</td><td>2012</td><td>813</td><td>32:45</td><td></td></tr>

<tr><td colspan="7"><b>Most Ice Time In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Keith Yandle</td><td>Columbus Blue Jackets</td><td>2013</td><td>2207</td><td></td><td></td></tr>
<tr><td>2</td><td>Nicklas Lidstrom</td><td>Detroit Red Wings</td><td>2011</td><td>2192</td><td></td><td></td></tr>
<tr><td>3</td><td>Shea Weber</td><td>Nashville Predators</td><td>2013</td><td>2182</td><td></td><td></td></tr>
<tr><td>4</td><td>Dustin Byfuglien</td><td>Toronto Maple Leafs</td><td>2014</td><td>2169</td><td></td><td></td></tr>
<tr><td>5</td><td>Jack Johnson</td><td>Washington Capitals</td><td>2017</td><td>2167</td><td></td><td></td></tr>
<tr><td>6</td><td>Kristopher Letang</td><td>Los Angeles Kings</td><td>2014</td><td>2166</td><td></td><td></td></tr>
<tr><td>7</td><td>Kevin Klein</td><td>Calgary Flames</td><td>2013</td><td>2158</td><td></td><td></td></tr>
<tr><td>8</td><td>Cody Franson</td><td>Quebec Nordiques</td><td>2011</td><td>2149</td><td></td><td></td></tr>
<tr><td>9</td><td>Keith Yandle</td><td>Columbus Blue Jackets</td><td>2012</td><td>2148</td><td></td><td></td></tr>
<tr><td>10</td><td>Keith Yandle</td><td>Columbus Blue Jackets</td><td>2011</td><td>2146</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Goals In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Steven Stamkos</td><td>Tampa Bay Lightning</td><td>2011</td><td>434</td><td>6</td><td></td></tr>
<tr><td>2</td><td>Sidney Crosby</td><td>San Jose Sharks</td><td>2012</td><td>113</td><td>6</td><td></td></tr>
<tr><td>3</td><td>Drew Stafford</td><td>Buffalo Sabres</td><td>2012</td><td>801</td><td>6</td><td></td></tr>
<tr><td>4</td><td>Sidney Crosby</td><td>Montreal Canadiens</td><td>2012</td><td>1125</td><td>6</td><td></td></tr>
<tr><td>5</td><td>Alex Ovechkin</td><td>Pittsburgh Penguins</td><td>2013</td><td>35</td><td>6</td><td></td></tr>
<tr><td>6</td><td>Jeff Skinner</td><td>Los Angeles Kings</td><td>2014</td><td>59</td><td>6</td><td></td></tr>
<tr><td>7</td><td>Thomas Vanek</td><td>Buffalo Sabres</td><td>2014</td><td>430</td><td>6</td><td></td></tr>
<tr><td>8</td><td>Claude Giroux</td><td>Philadelphia Flyers</td><td>2014</td><td>831</td><td>6</td><td></td></tr>
<tr><td>9</td><td>Sidney Crosby</td><td>Montreal Canadiens</td><td>2014</td><td>1186</td><td>6</td><td></td></tr>
<tr><td>10</td><td>Daniel Sedin</td><td>Vancouver Canucks</td><td>2015</td><td>117</td><td>6</td><td></td></tr>

<tr><td colspan="7"><b>Most Goals In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Connor McDavid</td><td>Vancouver Canucks</td><td>2022</td><td>100</td><td></td><td></td></tr>
<tr><td>2</td><td>Anze Kopitar</td><td>Los Angeles Kings</td><td>2014</td><td>92</td><td></td><td></td></tr>
<tr><td>3</td><td>Daniel Sedin</td><td>Vancouver Canucks</td><td>2012</td><td>90</td><td></td><td></td></tr>
<tr><td>4</td><td>Jeff Skinner</td><td>Los Angeles Kings</td><td>2015</td><td>88</td><td></td><td></td></tr>
<tr><td>5</td><td>Corey Perry</td><td>Los Angeles Kings</td><td>2014</td><td>85</td><td></td><td></td></tr>
<tr><td>6</td><td>Claude Giroux</td><td>Philadelphia Flyers</td><td>2015</td><td>84</td><td></td><td></td></tr>
<tr><td>7</td><td>Daniel Sedin</td><td>Vancouver Canucks</td><td>2011</td><td>78</td><td></td><td></td></tr>
<tr><td>8</td><td>Anze Kopitar</td><td>Los Angeles Kings</td><td>2015</td><td>78</td><td></td><td></td></tr>
<tr><td>9</td><td>Patrik Laine</td><td>Vancouver Canucks</td><td>2022</td><td>75</td><td></td><td></td></tr>
<tr><td>10</td><td>Ryan Kesler</td><td>Vancouver Canucks</td><td>2011</td><td>71</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Assists In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Claude Giroux</td><td>Philadelphia Flyers</td><td>2015</td><td>1085</td><td>7</td><td></td></tr>
<tr><td>2</td><td>Martin St-Louis</td><td>Tampa Bay Lightning</td><td>2011</td><td>434</td><td>6</td><td></td></tr>
<tr><td>3</td><td>Drew Stafford</td><td>Buffalo Sabres</td><td>2012</td><td>410</td><td>6</td><td></td></tr>
<tr><td>4</td><td>Matt Duchene</td><td>Anaheim Ducks</td><td>2015</td><td>913</td><td>6</td><td></td></tr>
<tr><td>5</td><td>Jordan Staal</td><td>San Jose Sharks</td><td>2016</td><td>47</td><td>6</td><td></td></tr>
<tr><td>6</td><td>Jason Pominville</td><td>Buffalo Sabres</td><td>2011</td><td>470</td><td>5</td><td></td></tr>
<tr><td>7</td><td>Alex Tanguay</td><td>Calgary Flames</td><td>2011</td><td>590</td><td>5</td><td></td></tr>
<tr><td>8</td><td>Erik Karlsson</td><td>Ottawa Senators</td><td>2011</td><td>616</td><td>5</td><td></td></tr>
<tr><td>9</td><td>Daniel Sedin</td><td>Vancouver Canucks</td><td>2011</td><td>748</td><td>5</td><td></td></tr>
<tr><td>10</td><td>Ryan Kesler</td><td>Vancouver Canucks</td><td>2011</td><td>1030</td><td>5</td><td></td></tr>

<tr><td colspan="7"><b>Most Assists In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Anze Kopitar</td><td>Los Angeles Kings</td><td>2014</td><td>122</td><td></td><td></td></tr>
<tr><td>2</td><td>Connor McDavid</td><td>Vancouver Canucks</td><td>2022</td><td>106</td><td></td><td></td></tr>
<tr><td>3</td><td>Jeff Skinner</td><td>Los Angeles Kings</td><td>2015</td><td>104</td><td></td><td></td></tr>
<tr><td>4</td><td>Anze Kopitar</td><td>Los Angeles Kings</td><td>2015</td><td>98</td><td></td><td></td></tr>
<tr><td>5</td><td>Claude Giroux</td><td>Philadelphia Flyers</td><td>2015</td><td>96</td><td></td><td></td></tr>
<tr><td>6</td><td>Patric Hornqvist</td><td>Philadelphia Flyers</td><td>2015</td><td>96</td><td></td><td></td></tr>
<tr><td>7</td><td>Daniel Sedin</td><td>Vancouver Canucks</td><td>2012</td><td>90</td><td></td><td></td></tr>
<tr><td>8</td><td>Matt Duchene</td><td>Anaheim Ducks</td><td>2012</td><td>90</td><td></td><td></td></tr>
<tr><td>9</td><td>Corey Perry</td><td>Los Angeles Kings</td><td>2014</td><td>86</td><td></td><td></td></tr>
<tr><td>10</td><td>Ryan Kesler</td><td>Vancouver Canucks</td><td>2012</td><td>83</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Points In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Claude Giroux</td><td>Philadelphia Flyers</td><td>2014</td><td>831</td><td>9</td><td></td></tr>
<tr><td>2</td><td>Corey Perry</td><td>Anaheim Ducks</td><td>2011</td><td>1280</td><td>8</td><td></td></tr>
<tr><td>3</td><td>Bobby Ryan</td><td>Anaheim Ducks</td><td>2012</td><td>1257</td><td>8</td><td></td></tr>
<tr><td>4</td><td>Matt Duchene</td><td>Anaheim Ducks</td><td>2012</td><td>1257</td><td>8</td><td></td></tr>
<tr><td>5</td><td>Michael Frolik</td><td>New York Islanders</td><td>2013</td><td>572</td><td>8</td><td></td></tr>
<tr><td>6</td><td>Daniel Sedin</td><td>Vancouver Canucks</td><td>2015</td><td>117</td><td>8</td><td></td></tr>
<tr><td>7</td><td>Martin St-Louis</td><td>Tampa Bay Lightning</td><td>2011</td><td>434</td><td>7</td><td></td></tr>
<tr><td>8</td><td>Steven Stamkos</td><td>Tampa Bay Lightning</td><td>2011</td><td>434</td><td>7</td><td></td></tr>
<tr><td>9</td><td>Jason Spezza</td><td>Ottawa Senators</td><td>2011</td><td>616</td><td>7</td><td></td></tr>
<tr><td>10</td><td>Matt Moulson</td><td>Detroit Red Wings</td><td>2011</td><td>669</td><td>7</td><td></td></tr>

<tr><td colspan="7"><b>Most Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Anze Kopitar</td><td>Los Angeles Kings</td><td>2014</td><td>214</td><td></td><td></td></tr>
<tr><td>2</td><td>Connor McDavid</td><td>Vancouver Canucks</td><td>2022</td><td>206</td><td></td><td></td></tr>
<tr><td>3</td><td>Jeff Skinner</td><td>Los Angeles Kings</td><td>2015</td><td>192</td><td></td><td></td></tr>
<tr><td>4</td><td>Daniel Sedin</td><td>Vancouver Canucks</td><td>2012</td><td>180</td><td></td><td></td></tr>
<tr><td>5</td><td>Claude Giroux</td><td>Philadelphia Flyers</td><td>2015</td><td>180</td><td></td><td></td></tr>
<tr><td>6</td><td>Anze Kopitar</td><td>Los Angeles Kings</td><td>2015</td><td>176</td><td></td><td></td></tr>
<tr><td>7</td><td>Corey Perry</td><td>Los Angeles Kings</td><td>2014</td><td>171</td><td></td><td></td></tr>
<tr><td>8</td><td>Patrik Laine</td><td>Vancouver Canucks</td><td>2022</td><td>157</td><td></td><td></td></tr>
<tr><td>9</td><td>Daniel Sedin</td><td>Vancouver Canucks</td><td>2011</td><td>153</td><td></td><td></td></tr>
<tr><td>10</td><td>Ryan Kesler</td><td>Vancouver Canucks</td><td>2011</td><td>152</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Jeff Skinner</td><td>Los Angeles Kings</td><td>2015</td><td>1285</td><td>15</td><td></td></tr>
<tr><td>2</td><td>Steven Stamkos</td><td>Arizona Coyotes</td><td>2022</td><td>822</td><td>15</td><td></td></tr>
<tr><td>3</td><td>Eric Staal</td><td>Carolina Hurricanes</td><td>2014</td><td>643</td><td>14</td><td></td></tr>
<tr><td>4</td><td>Tyler Seguin</td><td>Winnipeg Jets</td><td>2019</td><td>489</td><td>14</td><td></td></tr>
<tr><td>5</td><td>Ilya Kovalchuk</td><td>Anaheim Ducks</td><td>2012</td><td>1123</td><td>13</td><td></td></tr>
<tr><td>6</td><td>Ryan O'Reilly</td><td>New York Rangers</td><td>2014</td><td>719</td><td>13</td><td></td></tr>
<tr><td>7</td><td>Tyler Ennis</td><td>Buffalo Sabres</td><td>2015</td><td>34</td><td>13</td><td></td></tr>
<tr><td>8</td><td>Alexander Semin</td><td>Pittsburgh Penguins</td><td>2015</td><td>189</td><td>13</td><td></td></tr>
<tr><td>9</td><td>Claude Giroux</td><td>Philadelphia Flyers</td><td>2017</td><td>853</td><td>13</td><td></td></tr>
<tr><td>10</td><td>Auston Matthews</td><td>Winnipeg Jets</td><td>2021</td><td>1297</td><td>13</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Jeff Skinner</td><td>Los Angeles Kings</td><td>2019</td><td>400</td><td></td><td></td></tr>
<tr><td>2</td><td>Matt Duchene</td><td>Pittsburgh Penguins</td><td>2019</td><td>392</td><td></td><td></td></tr>
<tr><td>3</td><td>Nathan MacKinnon</td><td>St. Louis Blues</td><td>2019</td><td>388</td><td></td><td></td></tr>
<tr><td>4</td><td>Jeff Skinner</td><td>Los Angeles Kings</td><td>2020</td><td>384</td><td></td><td></td></tr>
<tr><td>5</td><td>Erik Karlsson</td><td>Ottawa Senators</td><td>2011</td><td>382</td><td></td><td></td></tr>
<tr><td>6</td><td>Anze Kopitar</td><td>Los Angeles Kings</td><td>2019</td><td>376</td><td></td><td></td></tr>
<tr><td>7</td><td>Derek Stepan</td><td>Pittsburgh Penguins</td><td>2018</td><td>371</td><td></td><td></td></tr>
<tr><td>8</td><td>David Pastrnak</td><td>Tampa Bay Lightning</td><td>2019</td><td>366</td><td></td><td></td></tr>
<tr><td>9</td><td>Jonathan Toews</td><td>Chicago Blackhawks</td><td>2020</td><td>366</td><td></td><td></td></tr>
<tr><td>10</td><td>Jeff Skinner</td><td>Los Angeles Kings</td><td>2015</td><td>361</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Kevin Bieksa</td><td>Vancouver Canucks</td><td>2012</td><td>1099</td><td>12</td><td></td></tr>
<tr><td>2</td><td>Andrej Sustr</td><td>Boston Bruins</td><td>2018</td><td>690</td><td>11</td><td></td></tr>
<tr><td>3</td><td>Dylan McIlrath</td><td>New York Rangers</td><td>2019</td><td>187</td><td>10</td><td></td></tr>
<tr><td>4</td><td>David Musil</td><td>Chicago Blackhawks</td><td>2022</td><td>408</td><td>10</td><td></td></tr>
<tr><td>5</td><td>Slater Koekkoek</td><td>Dallas Stars</td><td>2022</td><td>1335</td><td>10</td><td></td></tr>
<tr><td>6</td><td>Ryan Whitney</td><td>Edmonton Oilers</td><td>2012</td><td>22</td><td>9</td><td></td></tr>
<tr><td>7</td><td>Cody Franson</td><td>Quebec Nordiques</td><td>2012</td><td>540</td><td>9</td><td></td></tr>
<tr><td>8</td><td>Marc-Edouard Vlasic</td><td>Phoenix Coyotes</td><td>2013</td><td>950</td><td>9</td><td></td></tr>
<tr><td>9</td><td>Luke Schenn</td><td>Toronto Maple Leafs</td><td>2015</td><td>50</td><td>9</td><td></td></tr>
<tr><td>10</td><td>Dan DeKeyser</td><td>Quebec Nordiques</td><td>2015</td><td>272</td><td>9</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Daniel Girardi</td><td>New York Rangers</td><td>2012</td><td>169</td><td></td><td></td></tr>
<tr><td>2</td><td>Cody Franson</td><td>Quebec Nordiques</td><td>2013</td><td>168</td><td></td><td></td></tr>
<tr><td>3</td><td>Jason Garrison</td><td>San Jose Sharks</td><td>2013</td><td>168</td><td></td><td></td></tr>
<tr><td>4</td><td>Nicklas Lidstrom</td><td>Detroit Red Wings</td><td>2011</td><td>166</td><td></td><td></td></tr>
<tr><td>5</td><td>Niklas Hjalmarsson</td><td>Colorado Avalanche</td><td>2013</td><td>166</td><td></td><td></td></tr>
<tr><td>6</td><td>Alexander Urbom</td><td>Montreal Canadiens</td><td>2019</td><td>166</td><td></td><td></td></tr>
<tr><td>7</td><td>Francois Beauchemin</td><td>Tampa Bay Lightning</td><td>2013</td><td>165</td><td></td><td></td></tr>
<tr><td>8</td><td>Shea Weber</td><td>Dallas Stars</td><td>2019</td><td>165</td><td></td><td></td></tr>
<tr><td>9</td><td>Brooks Orpik</td><td>Minnesota Wild</td><td>2012</td><td>161</td><td></td><td></td></tr>
<tr><td>10</td><td>Ryan Murray</td><td>Minnesota Wild</td><td>2022</td><td>161</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Plus Minus In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Corey Perry</td><td>Anaheim Ducks</td><td>2011</td><td>1280</td><td>8</td><td></td></tr>
<tr><td>2</td><td>Ryan Getzlaf</td><td>Anaheim Ducks</td><td>2011</td><td>1280</td><td>8</td><td></td></tr>
<tr><td>3</td><td>James Wisniewski</td><td>Columbus Blue Jackets</td><td>2011</td><td>652</td><td>7</td><td></td></tr>
<tr><td>4</td><td>Keith Yandle</td><td>Columbus Blue Jackets</td><td>2011</td><td>652</td><td>7</td><td></td></tr>
<tr><td>5</td><td>Evgeni Malkin</td><td>Pittsburgh Penguins</td><td>2011</td><td>1149</td><td>7</td><td></td></tr>
<tr><td>6</td><td>Mike Weaver</td><td>Pittsburgh Penguins</td><td>2011</td><td>1149</td><td>7</td><td></td></tr>
<tr><td>7</td><td>Drew Doughty</td><td>Los Angeles Kings</td><td>2014</td><td>217</td><td>7</td><td></td></tr>
<tr><td>8</td><td>Kristopher Letang</td><td>Los Angeles Kings</td><td>2014</td><td>217</td><td>7</td><td></td></tr>
<tr><td>9</td><td>Patric Hornqvist</td><td>Philadelphia Flyers</td><td>2014</td><td>831</td><td>7</td><td></td></tr>
<tr><td>10</td><td>Ryan Kesler</td><td>Vancouver Canucks</td><td>2015</td><td>117</td><td>7</td><td></td></tr>

<tr><td colspan="7"><b>Most Plus Minus In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Anze Kopitar</td><td>Los Angeles Kings</td><td>2014</td><td>110</td><td></td><td></td></tr>
<tr><td>2</td><td>Connor McDavid</td><td>Vancouver Canucks</td><td>2022</td><td>107</td><td></td><td></td></tr>
<tr><td>3</td><td>Daniel Sedin</td><td>Vancouver Canucks</td><td>2011</td><td>105</td><td></td><td></td></tr>
<tr><td>4</td><td>Ryan Kesler</td><td>Vancouver Canucks</td><td>2011</td><td>104</td><td></td><td></td></tr>
<tr><td>5</td><td>Patrik Laine</td><td>Vancouver Canucks</td><td>2022</td><td>104</td><td></td><td></td></tr>
<tr><td>6</td><td>Corey Perry</td><td>Los Angeles Kings</td><td>2014</td><td>103</td><td></td><td></td></tr>
<tr><td>7</td><td>Jeff Skinner</td><td>Los Angeles Kings</td><td>2015</td><td>97</td><td></td><td></td></tr>
<tr><td>8</td><td>Claude Giroux</td><td>Philadelphia Flyers</td><td>2015</td><td>94</td><td></td><td></td></tr>
<tr><td>9</td><td>Alex Burrows</td><td>Vancouver Canucks</td><td>2011</td><td>93</td><td></td><td></td></tr>
<tr><td>10</td><td>Jeff Carter</td><td>Buffalo Sabres</td><td>2011</td><td>86</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Worse Plus Minus In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Duncan Keith</td><td>Chicago Blackhawks</td><td>2011</td><td>669</td><td>-7</td><td></td></tr>
<tr><td>2</td><td>Cody Franson</td><td>Quebec Nordiques</td><td>2011</td><td>1280</td><td>-7</td><td></td></tr>
<tr><td>3</td><td>Pavel Kubina</td><td>Quebec Nordiques</td><td>2011</td><td>1280</td><td>-7</td><td></td></tr>
<tr><td>4</td><td>Adam McQuaid</td><td>Dallas Stars</td><td>2013</td><td>1108</td><td>-7</td><td></td></tr>
<tr><td>5</td><td>Stephane Robidas</td><td>Dallas Stars</td><td>2013</td><td>1108</td><td>-7</td><td></td></tr>
<tr><td>6</td><td>Tyson Barrie</td><td>Nashville Predators</td><td>2015</td><td>499</td><td>-7</td><td></td></tr>
<tr><td>7</td><td>Roman Josi</td><td>Nashville Predators</td><td>2015</td><td>499</td><td>-7</td><td></td></tr>
<tr><td>8</td><td>Alex Goligoski</td><td>Ottawa Senators</td><td>2016</td><td>200</td><td>-7</td><td></td></tr>
<tr><td>9</td><td>Dominic Moore</td><td>Tampa Bay Lightning</td><td>2011</td><td>357</td><td>-6</td><td></td></tr>
<tr><td>10</td><td>Edward Purcell</td><td>Tampa Bay Lightning</td><td>2011</td><td>357</td><td>-6</td><td></td></tr>

<tr><td colspan="7"><b>Worse Plus Minus In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Pavel Kubina</td><td>Quebec Nordiques</td><td>2011</td><td>-63</td><td></td><td></td></tr>
<tr><td>2</td><td>Paul Martin</td><td>Seattle Saints</td><td>2011</td><td>-61</td><td></td><td></td></tr>
<tr><td>3</td><td>Cody Franson</td><td>Quebec Nordiques</td><td>2011</td><td>-57</td><td></td><td></td></tr>
<tr><td>4</td><td>Marek Zidlicky</td><td>Minnesota Wild</td><td>2011</td><td>-55</td><td></td><td></td></tr>
<tr><td>5</td><td>Eric Brewer</td><td>Quebec Nordiques</td><td>2012</td><td>-54</td><td></td><td></td></tr>
<tr><td>6</td><td>Mike Lundin</td><td>Minnesota Wild</td><td>2011</td><td>-53</td><td></td><td></td></tr>
<tr><td>7</td><td>Nick Schultz</td><td>Minnesota Wild</td><td>2011</td><td>-52</td><td></td><td></td></tr>
<tr><td>8</td><td>Eric Brewer</td><td>Tampa Bay Lightning</td><td>2011</td><td>-49</td><td></td><td></td></tr>
<tr><td>9</td><td>Greg Zanon</td><td>Minnesota Wild</td><td>2011</td><td>-49</td><td></td><td></td></tr>
<tr><td>10</td><td>Noah Dobson</td><td>San Jose Sharks</td><td>2022</td><td>-49</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Micheal Haley</td><td>New York Islanders</td><td>2012</td><td>330</td><td>49</td><td></td></tr>
<tr><td>2</td><td>Zenon Konopka</td><td>Ottawa Senators</td><td>2011</td><td>777</td><td>37</td><td></td></tr>
<tr><td>3</td><td>Arron Asham</td><td>Pittsburgh Penguins</td><td>2011</td><td>910</td><td>37</td><td></td></tr>
<tr><td>4</td><td>Dylan McIlrath</td><td>New York Rangers</td><td>2015</td><td>1062</td><td>37</td><td></td></tr>
<tr><td>5</td><td>Ryane Clowe</td><td>Calgary Flames</td><td>2012</td><td>1277</td><td>32</td><td></td></tr>
<tr><td>6</td><td>Cody McLeod</td><td>Toronto Maple Leafs</td><td>2015</td><td>1062</td><td>32</td><td></td></tr>
<tr><td>7</td><td>Taylor Doherty</td><td>San Jose Sharks</td><td>2016</td><td>9</td><td>32</td><td></td></tr>
<tr><td>8</td><td>David Clarkson</td><td>New Jersey Devils</td><td>2011</td><td>798</td><td>31</td><td></td></tr>
<tr><td>9</td><td>Adam McQuaid</td><td>Dallas Stars</td><td>2012</td><td>778</td><td>31</td><td></td></tr>
<tr><td>10</td><td>Brian Lee</td><td>Ottawa Senators</td><td>2011</td><td>573</td><td>29</td><td></td></tr>

<tr><td colspan="7"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Chris Neil</td><td>Ottawa Senators</td><td>2011</td><td>399</td><td></td><td></td></tr>
<tr><td>2</td><td>Zenon Konopka</td><td>New York Islanders</td><td>2013</td><td>389</td><td></td><td></td></tr>
<tr><td>3</td><td>Adam McQuaid</td><td>Dallas Stars</td><td>2012</td><td>363</td><td></td><td></td></tr>
<tr><td>4</td><td>Deryk Engelland</td><td>Seattle Saints</td><td>2011</td><td>341</td><td></td><td></td></tr>
<tr><td>5</td><td>Milan Lucic</td><td>Boston Bruins</td><td>2012</td><td>302</td><td></td><td></td></tr>
<tr><td>6</td><td>David Clarkson</td><td>New Jersey Devils</td><td>2011</td><td>279</td><td></td><td></td></tr>
<tr><td>7</td><td>Jared Boll</td><td>Columbus Blue Jackets</td><td>2011</td><td>269</td><td></td><td></td></tr>
<tr><td>8</td><td>Nathan Horton</td><td>Pittsburgh Penguins</td><td>2011</td><td>259</td><td></td><td></td></tr>
<tr><td>9</td><td>Derek Joslin</td><td>Carolina Hurricanes</td><td>2011</td><td>247</td><td></td><td></td></tr>
<tr><td>10</td><td>David Backes</td><td>Boston Bruins</td><td>2011</td><td>234</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Charlie McAvoy</td><td>Boston Bruins</td><td>2021</td><td>637</td><td>12</td><td></td></tr>
<tr><td>2</td><td>Duncan Siemens</td><td>Dallas Stars</td><td>2018</td><td>268</td><td>11</td><td></td></tr>
<tr><td>3</td><td>Luke Schenn</td><td>Toronto Maple Leafs</td><td>2018</td><td>622</td><td>11</td><td></td></tr>
<tr><td>4</td><td>Ryan Suter</td><td>Minnesota Wild</td><td>2018</td><td>1194</td><td>11</td><td></td></tr>
<tr><td>5</td><td>Ryan Callahan</td><td>Edmonton Oilers</td><td>2019</td><td>368</td><td>11</td><td></td></tr>
<tr><td>6</td><td>Victor Hedman</td><td>Winnipeg Jets</td><td>2020</td><td>998</td><td>11</td><td></td></tr>
<tr><td>7</td><td>Darnell Nurse</td><td>Vegas Golden Knights</td><td>2021</td><td>191</td><td>11</td><td></td></tr>
<tr><td>8</td><td>Travis Brown</td><td>Philadelphia Flyers</td><td>2021</td><td>269</td><td>11</td><td></td></tr>
<tr><td>9</td><td>J.T. Miller</td><td>Calgary Flames</td><td>2021</td><td>655</td><td>11</td><td></td></tr>
<tr><td>10</td><td>Brayden Schenn</td><td>San Jose Sharks</td><td>2014</td><td>1108</td><td>10</td><td></td></tr>

<tr><td colspan="7"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Adam Erne</td><td>Vegas Golden Knights</td><td>2019</td><td>287</td><td></td><td></td></tr>
<tr><td>2</td><td>Travis Hamonic</td><td>Colorado Avalanche</td><td>2022</td><td>275</td><td></td><td></td></tr>
<tr><td>3</td><td>Luca Sbisa</td><td>Winnipeg Jets</td><td>2018</td><td>268</td><td></td><td></td></tr>
<tr><td>4</td><td>Adam Erne</td><td>Buffalo Sabres</td><td>2020</td><td>258</td><td></td><td></td></tr>
<tr><td>5</td><td>Luke Schenn</td><td>Toronto Maple Leafs</td><td>2018</td><td>256</td><td></td><td></td></tr>
<tr><td>6</td><td>Ryan Callahan</td><td>Edmonton Oilers</td><td>2020</td><td>254</td><td></td><td></td></tr>
<tr><td>7</td><td>Milan Lucic</td><td>Carolina Hurricanes</td><td>2018</td><td>249</td><td></td><td></td></tr>
<tr><td>8</td><td>Ryan Callahan</td><td>Edmonton Oilers</td><td>2019</td><td>249</td><td></td><td></td></tr>
<tr><td>9</td><td>Milan Lucic</td><td>Carolina Hurricanes</td><td>2019</td><td>245</td><td></td><td></td></tr>
<tr><td>10</td><td>Pierre-Luc Dubois</td><td>Calgary Flames</td><td>2019</td><td>243</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Kevin Hayes</td><td>Los Angeles Kings</td><td>2020</td><td>4</td><td></td><td></td></tr>
<tr><td>2</td><td>Tomas Plekanec</td><td>Montreal Canadiens</td><td>2011</td><td>3</td><td></td><td></td></tr>
<tr><td>3</td><td>Frédérik Gauthier</td><td>Boston Bruins</td><td>2020</td><td>3</td><td></td><td></td></tr>
<tr><td>4</td><td>Chris Tierney</td><td>Anaheim Ducks</td><td>2022</td><td>3</td><td></td><td></td></tr>
<tr><td>5</td><td>Ville Leino</td><td>Philadelphia Flyers</td><td>2011</td><td>2</td><td></td><td></td></tr>
<tr><td>6</td><td>Andrew Cogliano</td><td>Anaheim Ducks</td><td>2012</td><td>2</td><td></td><td></td></tr>
<tr><td>7</td><td>Brett MacLean</td><td>Phoenix Coyotes</td><td>2012</td><td>2</td><td></td><td></td></tr>
<tr><td>8</td><td>Craig Adams</td><td>Pittsburgh Penguins</td><td>2012</td><td>2</td><td></td><td></td></tr>
<tr><td>9</td><td>James Neal</td><td>Washington Capitals</td><td>2018</td><td>2</td><td></td><td></td></tr>
<tr><td>10</td><td>Adam Erne</td><td>Vancouver Canucks</td><td>2018</td><td>2</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Hat Trick In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Connor McDavid</td><td>Vancouver Canucks</td><td>2022</td><td>12</td><td></td><td></td></tr>
<tr><td>2</td><td>Anze Kopitar</td><td>Los Angeles Kings</td><td>2015</td><td>11</td><td></td><td></td></tr>
<tr><td>3</td><td>Sidney Crosby</td><td>San Jose Sharks</td><td>2011</td><td>9</td><td></td><td></td></tr>
<tr><td>4</td><td>Daniel Sedin</td><td>Vancouver Canucks</td><td>2012</td><td>9</td><td></td><td></td></tr>
<tr><td>5</td><td>Anze Kopitar</td><td>Los Angeles Kings</td><td>2014</td><td>9</td><td></td><td></td></tr>
<tr><td>6</td><td>Corey Perry</td><td>Los Angeles Kings</td><td>2014</td><td>9</td><td></td><td></td></tr>
<tr><td>7</td><td>Sidney Crosby</td><td>Montreal Canadiens</td><td>2013</td><td>8</td><td></td><td></td></tr>
<tr><td>8</td><td>Steven Stamkos</td><td>Florida Panthers</td><td>2022</td><td>8</td><td></td><td></td></tr>
<tr><td>9</td><td>Ilya Kovalchuk</td><td>Anaheim Ducks</td><td>2012</td><td>7</td><td></td><td></td></tr>
<tr><td>10</td><td>Daniel Sedin</td><td>Vancouver Canucks</td><td>2013</td><td>7</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Best Faceoff in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Cédric Paquette</td><td>Edmonton Oilers</td><td>2019</td><td>63,00%</td><td></td><td></td></tr>
<tr><td>2</td><td>Manny Malhotra</td><td>Seattle Saints</td><td>2012</td><td>62,70%</td><td></td><td></td></tr>
<tr><td>3</td><td>Evgeny Kuznetsov</td><td>Minnesota Wild</td><td>2019</td><td>62,20%</td><td></td><td></td></tr>
<tr><td>4</td><td>Sidney Crosby</td><td>Montreal Canadiens</td><td>2019</td><td>61,40%</td><td></td><td></td></tr>
<tr><td>5</td><td>Michael Sgarbossa</td><td>Minnesota Wild</td><td>2019</td><td>61,20%</td><td></td><td></td></tr>
<tr><td>6</td><td>Paul Gaustad</td><td>Anaheim Ducks</td><td>2018</td><td>60,70%</td><td></td><td></td></tr>
<tr><td>7</td><td>Tyler Motte</td><td>Quebec Nordiques</td><td>2019</td><td>60,30%</td><td></td><td></td></tr>
<tr><td>8</td><td>Jeff Halpern</td><td>Washington Capitals</td><td>2011</td><td>59,40%</td><td></td><td></td></tr>
<tr><td>9</td><td>Mitch Marner</td><td>St. Louis Blues</td><td>2019</td><td>59,40%</td><td></td><td></td></tr>
<tr><td>10</td><td>Sidney Crosby</td><td>Buffalo Sabres</td><td>2022</td><td>59,20%</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_GoaliesRecords">Goalies Records</h1>
<table class="STHSRecordTable">
<tr><td colspan="7"><b>Shutout In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Mike Smith</td><td>Philadelphia Flyers</td><td>2017</td><td>8</td><td></td><td></td></tr>
<tr><td>2</td><td>Andrey Vasilevskiy</td><td>New York Rangers</td><td>2020</td><td>8</td><td></td><td></td></tr>
<tr><td>3</td><td>Ilya Bryzgalov</td><td>Anaheim Ducks</td><td>2014</td><td>7</td><td></td><td></td></tr>
<tr><td>4</td><td>James Reimer</td><td>New York Islanders</td><td>2014</td><td>7</td><td></td><td></td></tr>
<tr><td>5</td><td>James Reimer</td><td>New York Islanders</td><td>2015</td><td>7</td><td></td><td></td></tr>
<tr><td>6</td><td>Jack Campbell</td><td>New York Rangers</td><td>2018</td><td>7</td><td></td><td></td></tr>
<tr><td>7</td><td>Carey Price</td><td>Chicago Blackhawks</td><td>2018</td><td>7</td><td></td><td></td></tr>
<tr><td>8</td><td>Jonathan Quick</td><td>Tampa Bay Lightning</td><td>2018</td><td>7</td><td></td><td></td></tr>
<tr><td>9</td><td>Robin Lehner</td><td>Ottawa Senators</td><td>2021</td><td>7</td><td></td><td></td></tr>
<tr><td>10</td><td>Jonathan Quick</td><td>Los Angeles Kings</td><td>2011</td><td>6</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Shots Received In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>James Reimer</td><td>Calgary Flames</td><td>2019</td><td>2386</td><td></td><td></td></tr>
<tr><td>2</td><td>Antti Niemi</td><td>Philadelphia Flyers</td><td>2014</td><td>2348</td><td></td><td></td></tr>
<tr><td>3</td><td>Ben Bishop</td><td>New York Islanders</td><td>2019</td><td>2345</td><td></td><td></td></tr>
<tr><td>4</td><td>Roberto Luongo</td><td>St. Louis Blues</td><td>2013</td><td>2309</td><td></td><td></td></tr>
<tr><td>5</td><td>Simeon Varlamov</td><td>Washington Capitals</td><td>2020</td><td>2297</td><td></td><td></td></tr>
<tr><td>6</td><td>Craig Anderson</td><td>Ottawa Senators</td><td>2013</td><td>2282</td><td></td><td></td></tr>
<tr><td>7</td><td>Sergei Bobrovsky</td><td>Seattle Saints</td><td>2014</td><td>2278</td><td></td><td></td></tr>
<tr><td>8</td><td>Jonathan Quick</td><td>Tampa Bay Lightning</td><td>2018</td><td>2273</td><td></td><td></td></tr>
<tr><td>9</td><td>Connor Hellebuyck</td><td>Detroit Red Wings</td><td>2022</td><td>2272</td><td></td><td></td></tr>
<tr><td>10</td><td>Jacob Markstrom</td><td>Buffalo Sabres</td><td>2019</td><td>2271</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Ilya Bryzgalov</td><td>Anaheim Ducks</td><td>2013</td><td>61</td><td></td><td></td></tr>
<tr><td>2</td><td>Cory Schneider</td><td>Vancouver Canucks</td><td>2014</td><td>59</td><td></td><td></td></tr>
<tr><td>3</td><td>Roberto Luongo</td><td>Vancouver Canucks</td><td>2011</td><td>58</td><td></td><td></td></tr>
<tr><td>4</td><td>Antti Niemi</td><td>Philadelphia Flyers</td><td>2014</td><td>58</td><td></td><td></td></tr>
<tr><td>5</td><td>Ryan Miller</td><td>Buffalo Sabres</td><td>2011</td><td>54</td><td></td><td></td></tr>
<tr><td>6</td><td>Andrey Vasilevskiy</td><td>New York Rangers</td><td>2022</td><td>53</td><td></td><td></td></tr>
<tr><td>7</td><td>Matt Murray</td><td>Vegas Golden Knights</td><td>2022</td><td>53</td><td></td><td></td></tr>
<tr><td>8</td><td>Pekka Rinne</td><td>Nashville Predators</td><td>2011</td><td>52</td><td></td><td></td></tr>
<tr><td>9</td><td>Jonas Hiller</td><td>Anaheim Ducks</td><td>2011</td><td>51</td><td></td><td></td></tr>
<tr><td>10</td><td>Cam Ward</td><td>Pittsburgh Penguins</td><td>2012</td><td>51</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Marty Turco</td><td>Seattle Saints</td><td>2011</td><td>48</td><td></td><td></td></tr>
<tr><td>2</td><td>Kari Lehtonen</td><td>Tampa Bay Lightning</td><td>2014</td><td>48</td><td></td><td></td></tr>
<tr><td>3</td><td>Sergei Bobrovsky</td><td>Seattle Saints</td><td>2014</td><td>48</td><td></td><td></td></tr>
<tr><td>4</td><td>John Gibson</td><td>Ottawa Senators</td><td>2015</td><td>48</td><td></td><td></td></tr>
<tr><td>5</td><td>Kevin Poulin</td><td>Quebec Nordiques</td><td>2022</td><td>47</td><td></td><td></td></tr>
<tr><td>6</td><td>Mathieu Garon</td><td>Tampa Bay Lightning</td><td>2011</td><td>46</td><td></td><td></td></tr>
<tr><td>7</td><td>Josh Harding</td><td>Quebec Nordiques</td><td>2014</td><td>43</td><td></td><td></td></tr>
<tr><td>8</td><td>Tuukka Rask</td><td>Boston Bruins</td><td>2013</td><td>40</td><td></td><td></td></tr>
<tr><td>9</td><td>Brian Elliott</td><td>Phoenix Coyotes</td><td>2011</td><td>38</td><td></td><td></td></tr>
<tr><td>10</td><td>Corey Crawford</td><td>Dallas Stars</td><td>2014</td><td>37</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_GameRecords">Game Records</h1>
<table class="STHSRecordPlayerGoalerTable">
<tr><td colspan="7"><b>Most Goals</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Buffalo Sabres</td><td>Tampa Bay Lightning</td><td>2015</td><td>705</td><td>17</td><td></td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>Washington Capitals</td><td>2013</td><td>573</td><td>15</td><td></td></tr>
<tr><td>3</td><td>Vancouver Canucks</td><td>Dallas Stars</td><td>2014</td><td>188</td><td>15</td><td></td></tr>
<tr><td>4</td><td>San Jose Sharks</td><td>Colorado Avalanche</td><td>2014</td><td>336</td><td>15</td><td></td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>Tampa Bay Lightning</td><td>2014</td><td>1239</td><td>15</td><td></td></tr>
<tr><td>6</td><td>Nashville Predators</td><td>Detroit Red Wings</td><td>2015</td><td>139</td><td>15</td><td></td></tr>
<tr><td>7</td><td>Detroit Red Wings</td><td>Anaheim Ducks</td><td>2015</td><td>913</td><td>15</td><td></td></tr>
<tr><td>8</td><td>Florida Panthers</td><td>Washington Capitals</td><td>2017</td><td>1309</td><td>15</td><td></td></tr>
<tr><td>9</td><td>New York Islanders</td><td>Seattle Kraken</td><td>2022</td><td>376</td><td>15</td><td></td></tr>
<tr><td>10</td><td>Anaheim Ducks</td><td>Tampa Bay Lightning</td><td>2012</td><td>1156</td><td>14</td><td></td></tr>

<tr><td colspan="7"><b>Most Assists</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Buffalo Sabres</td><td>Tampa Bay Lightning</td><td>2015</td><td>705</td><td>31</td><td></td></tr>
<tr><td>2</td><td>Detroit Red Wings</td><td>Anaheim Ducks</td><td>2015</td><td>913</td><td>28</td><td></td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>Washington Capitals</td><td>2015</td><td>1178</td><td>27</td><td></td></tr>
<tr><td>4</td><td>Florida Panthers</td><td>Washington Capitals</td><td>2017</td><td>1309</td><td>27</td><td></td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>Washington Capitals</td><td>2013</td><td>573</td><td>26</td><td></td></tr>
<tr><td>6</td><td>San Jose Sharks</td><td>Colorado Avalanche</td><td>2014</td><td>336</td><td>26</td><td></td></tr>
<tr><td>7</td><td>Nashville Predators</td><td>Detroit Red Wings</td><td>2015</td><td>139</td><td>26</td><td></td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>San Jose Sharks</td><td>2015</td><td>1271</td><td>26</td><td></td></tr>
<tr><td>9</td><td>Boston Bruins</td><td>Detroit Red Wings</td><td>2021</td><td>826</td><td>26</td><td></td></tr>
<tr><td>10</td><td>Minnesota Wild</td><td>Calgary Flames</td><td>2015</td><td>479</td><td>25</td><td></td></tr>

<tr><td colspan="7"><b>Most Points</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Buffalo Sabres</td><td>Tampa Bay Lightning</td><td>2015</td><td>705</td><td>48</td><td></td></tr>
<tr><td>2</td><td>Detroit Red Wings</td><td>Anaheim Ducks</td><td>2015</td><td>913</td><td>43</td><td></td></tr>
<tr><td>3</td><td>Florida Panthers</td><td>Washington Capitals</td><td>2017</td><td>1309</td><td>42</td><td></td></tr>
<tr><td>4</td><td>Los Angeles Kings</td><td>Washington Capitals</td><td>2013</td><td>573</td><td>41</td><td></td></tr>
<tr><td>5</td><td>San Jose Sharks</td><td>Colorado Avalanche</td><td>2014</td><td>336</td><td>41</td><td></td></tr>
<tr><td>6</td><td>Nashville Predators</td><td>Detroit Red Wings</td><td>2015</td><td>139</td><td>41</td><td></td></tr>
<tr><td>7</td><td>Los Angeles Kings</td><td>Washington Capitals</td><td>2015</td><td>1178</td><td>41</td><td></td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>San Jose Sharks</td><td>2015</td><td>1271</td><td>40</td><td></td></tr>
<tr><td>9</td><td>New York Islanders</td><td>Seattle Kraken</td><td>2022</td><td>376</td><td>40</td><td></td></tr>
<tr><td>10</td><td>Vancouver Canucks</td><td>Dallas Stars</td><td>2014</td><td>188</td><td>39</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Pittsburgh Penguins</td><td>Washington Capitals</td><td>2018</td><td>730</td><td>97</td><td></td></tr>
<tr><td>2</td><td>St. Louis Blues</td><td>Anaheim Ducks</td><td>2019</td><td>801</td><td>97</td><td></td></tr>
<tr><td>3</td><td>Chicago Blackhawks</td><td>Pittsburgh Penguins</td><td>2018</td><td>687</td><td>95</td><td></td></tr>
<tr><td>4</td><td>New York Rangers</td><td>New Jersey Devils</td><td>2021</td><td>1027</td><td>93</td><td></td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>Carolina Hurricanes</td><td>2020</td><td>330</td><td>92</td><td></td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>New York Rangers</td><td>2020</td><td>930</td><td>92</td><td></td></tr>
<tr><td>7</td><td>Washington Capitals</td><td>Pittsburgh Penguins</td><td>2018</td><td>371</td><td>91</td><td></td></tr>
<tr><td>8</td><td>Buffalo Sabres</td><td>Seattle Kraken</td><td>2021</td><td>1048</td><td>91</td><td></td></tr>
<tr><td>9</td><td>Washington Capitals</td><td>Pittsburgh Penguins</td><td>2019</td><td>47</td><td>90</td><td></td></tr>
<tr><td>10</td><td>Carolina Hurricanes</td><td>Florida Panthers</td><td>2020</td><td>460</td><td>90</td><td></td></tr>

<tr><td colspan="7"><b>Most Pim</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>New York Rangers</td><td>Toronto Maple Leafs</td><td>2015</td><td>1062</td><td>122</td><td></td></tr>
<tr><td>2</td><td>Boston Bruins</td><td>Montreal Canadiens</td><td>2019</td><td>197</td><td>114</td><td></td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>Ottawa Senators</td><td>2011</td><td>535</td><td>100</td><td></td></tr>
<tr><td>4</td><td>Toronto Maple Leafs</td><td>Ottawa Senators</td><td>2011</td><td>573</td><td>100</td><td></td></tr>
<tr><td>5</td><td>Edmonton Oilers</td><td>Calgary Flames</td><td>2014</td><td>1242</td><td>100</td><td></td></tr>
<tr><td>6</td><td>Montreal Canadiens</td><td>Boston Bruins</td><td>2012</td><td>340</td><td>99</td><td></td></tr>
<tr><td>7</td><td>Toronto Maple Leafs</td><td>Ottawa Senators</td><td>2011</td><td>831</td><td>97</td><td></td></tr>
<tr><td>8</td><td>New York Islanders</td><td>Winnipeg Jets</td><td>2012</td><td>1264</td><td>90</td><td></td></tr>
<tr><td>9</td><td>New York Islanders</td><td>Toronto Maple Leafs</td><td>2012</td><td>330</td><td>86</td><td></td></tr>
<tr><td>10</td><td>New York Islanders</td><td>Washington Capitals</td><td>2012</td><td>1161</td><td>86</td><td></td></tr>

<tr><td colspan="7"><b>Most Hits</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Calgary Flames</td><td>San Jose Sharks</td><td>2013</td><td>329</td><td>68</td><td></td></tr>
<tr><td>2</td><td>Calgary Flames</td><td>Edmonton Oilers</td><td>2021</td><td>974</td><td>68</td><td></td></tr>
<tr><td>3</td><td>New York Rangers</td><td>Philadelphia Flyers</td><td>2018</td><td>597</td><td>65</td><td></td></tr>
<tr><td>4</td><td>Boston Bruins</td><td>Buffalo Sabres</td><td>2021</td><td>1333</td><td>64</td><td></td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>Vancouver Canucks</td><td>2017</td><td>895</td><td>63</td><td></td></tr>
<tr><td>6</td><td>Philadelphia Flyers</td><td>New York Rangers</td><td>2019</td><td>1128</td><td>63</td><td></td></tr>
<tr><td>7</td><td>Chicago Blackhawks</td><td>Seattle Kraken</td><td>2020</td><td>1243</td><td>63</td><td></td></tr>
<tr><td>8</td><td>New York Rangers</td><td>New York Islanders</td><td>2020</td><td>1289</td><td>63</td><td></td></tr>
<tr><td>9</td><td>New York Islanders</td><td>New York Rangers</td><td>2017</td><td>1131</td><td>62</td><td></td></tr>
<tr><td>10</td><td>New York Rangers</td><td>New York Islanders</td><td>2019</td><td>554</td><td>62</td><td></td></tr>

</table>
<?php include "Footer.php";?>