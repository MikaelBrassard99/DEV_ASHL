<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Stats</title>
<script src="ASHL10-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.3.3 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
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
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>13</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>9</td><td>8</td><td>14</td><td>22</td></tr>
<tr><td>Arizona Coyotes</td><td>11</td><td>7</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>39</td><td>32</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>15</td><td>6</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>17</td><td>39</td><td>71</td><td>110</td></tr>
<tr><td>Boston Bruins</td><td>13</td><td>7</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>31</td><td>37</td><td>6</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>14</td><td>7</td><td>2</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>23</td><td>31</td><td>59</td><td>90</td></tr>
<tr><td>Buffalo Sabres</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>18</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>13</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>5</td><td>16</td><td>28</td><td>44</td></tr>
<tr><td>Calgary Flames</td><td>11</td><td>6</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>30</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>13</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>17</td><td>29</td><td>49</td><td>78</td></tr>
<tr><td>Carolina Hurricanes</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>23</td><td>21</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>11</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>10</td><td>23</td><td>42</td><td>65</td></tr>
<tr><td>Chicago Blackhawks</td><td>19</td><td>11</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>59</td><td>57</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>26</td><td>11</td><td>8</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>40</td><td>31</td><td>59</td><td>109</td><td>168</td></tr>
<tr><td>Colorado Avalanche</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>21</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>14</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>7</td><td>21</td><td>37</td><td>58</td></tr>
<tr><td>Columbus Blue Jackets</td><td>23</td><td>13</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>74</td><td>61</td><td>10</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>30</td><td>13</td><td>9</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>31</td><td>74</td><td>133</td><td>207</td></tr>
<tr><td>Dallas Stars</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>18</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>13</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>5</td><td>14</td><td>27</td><td>41</td></tr>
<tr><td>Detroit Red Wings</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>20</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>11</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>9</td><td>14</td><td>25</td><td>39</td></tr>
<tr><td>Edmonton Oilers</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>12</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>7</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>5</td><td>7</td><td>13</td><td>20</td></tr>
<tr><td>Florida Panthers</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>20</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>14</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>6</td><td>14</td><td>25</td><td>39</td></tr>
<tr><td>Los Angeles Kings</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>21</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>11</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>10</td><td>27</td><td>50</td><td>77</td></tr>
<tr><td>Minnesota Wild</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>12</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>3</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>9</td><td>7</td><td>12</td><td>19</td></tr>
<tr><td>Montreal Canadiens</td><td>19</td><td>11</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>61</td><td>54</td><td>9</td><td>4</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>22</td><td>10</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>36</td><td>32</td><td>61</td><td>113</td><td>174</td></tr>
<tr><td>Nashville Predators</td><td>18</td><td>15</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>68</td><td>35</td><td>11</td><td>9</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>40</td><td>23</td><td>7</td><td>6</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>12</td><td>68</td><td>124</td><td>192</td></tr>
<tr><td>New Jersey Devils</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>13</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>8</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>5</td><td>7</td><td>13</td><td>20</td></tr>
<tr><td>New York Islanders</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>12</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>5</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>7</td><td>14</td><td>26</td><td>40</td></tr>
<tr><td>New York Rangers</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>15</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>10</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>5</td><td>11</td><td>19</td><td>30</td></tr>
<tr><td>Ottawa Senators</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>15</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>6</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>19</td><td>35</td><td>54</td></tr>
<tr><td>Philadelphia Flyers</td><td>9</td><td>4</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>29</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>13</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>16</td><td>19</td><td>32</td><td>51</td></tr>
<tr><td>Pittsburgh Penguins</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>23</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>13</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>10</td><td>27</td><td>53</td><td>80</td></tr>
<tr><td>Quebec Nordiques</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>13</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>7</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>6</td><td>13</td><td>22</td><td>35</td></tr>
<tr><td>San Jose Sharks</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>26</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>12</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>14</td><td>25</td><td>44</td><td>69</td></tr>
<tr><td>St. Louis Blues</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>12</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>9</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>3</td><td>6</td><td>12</td><td>18</td></tr>
<tr><td>Tampa Bay Lightning</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>9</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>3</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>6</td><td>4</td><td>8</td><td>12</td></tr>
<tr><td>Toronto Maple Leafs</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>11</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>6</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>5</td><td>9</td><td>18</td><td>27</td></tr>
<tr><td>Vancouver Canucks</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>14</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>6</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>8</td><td>9</td><td>16</td><td>25</td></tr>
<tr><td>Vegas Golden Knights</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>26</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>15</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>11</td><td>25</td><td>47</td><td>72</td></tr>
<tr><td>Washington Capitals</td><td>13</td><td>8</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>35</td><td>32</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>20</td><td>6</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>12</td><td>35</td><td>65</td><td>100</td></tr>
<tr><td>Winnipeg Jets</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>12</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>5</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>7</td><td>9</td><td>14</td><td>23</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>ANH</td><td>2</td><td>3</td><td>3</td><td>0</td><td>76</td><td>23</td><td>25</td><td>28</td><td>0</td><td>106</td><td>25</td><td>30</td><td>54</td><td>7</td><td>1</td><td>14,29%</td><td>13</td><td>4</td><td>69,23%</td><td>0</td><td>46,22%</td><td>43,01%</td><td>54,00%</td><td>74</td><td>68</td><td>38</td><td>22</td><td>46</td><td>18</td><td>0</td><td>0</td></tr>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>18</td><td>12</td><td>6</td><td>3</td><td>395</td><td>116</td><td>115</td><td>130</td><td>34</td><td>361</td><td>113</td><td>81</td><td>245</td><td>50</td><td>7</td><td>14,00%</td><td>34</td><td>8</td><td>76,47%</td><td>0</td><td>55,75%</td><td>48,96%</td><td>46,84%</td><td>273</td><td>293</td><td>147</td><td>85</td><td>206</td><td>76</td><td>1</td><td>0</td></tr>
<tr><td>Boston Bruins</td><td>BOS</td><td>10</td><td>9</td><td>9</td><td>3</td><td>406</td><td>140</td><td>124</td><td>127</td><td>15</td><td>421</td><td>126</td><td>142</td><td>261</td><td>46</td><td>8</td><td>17,39%</td><td>67</td><td>13</td><td>80,60%</td><td>1</td><td>50,20%</td><td>51,45%</td><td>53,69%</td><td>320</td><td>313</td><td>164</td><td>98</td><td>217</td><td>79</td><td>0</td><td>1</td></tr>
<tr><td>Buffalo Sabres</td><td>BUF</td><td>9</td><td>4</td><td>3</td><td>0</td><td>164</td><td>52</td><td>61</td><td>51</td><td>0</td><td>155</td><td>68</td><td>46</td><td>86</td><td>21</td><td>4</td><td>19,05%</td><td>20</td><td>6</td><td>70,00%</td><td>0</td><td>48,96%</td><td>51,85%</td><td>56,10%</td><td>116</td><td>119</td><td>65</td><td>37</td><td>82</td><td>33</td><td>0</td><td>0</td></tr>
<tr><td>Calgary Flames</td><td>CGY</td><td>9</td><td>11</td><td>9</td><td>0</td><td>325</td><td>100</td><td>118</td><td>107</td><td>0</td><td>345</td><td>99</td><td>91</td><td>211</td><td>46</td><td>10</td><td>21,74%</td><td>39</td><td>6</td><td>84,62%</td><td>1</td><td>53,06%</td><td>53,56%</td><td>43,75%</td><td>254</td><td>268</td><td>138</td><td>79</td><td>187</td><td>69</td><td>0</td><td>0</td></tr>
<tr><td>Carolina Hurricanes</td><td>CAR</td><td>5</td><td>9</td><td>8</td><td>1</td><td>249</td><td>65</td><td>84</td><td>76</td><td>24</td><td>224</td><td>80</td><td>55</td><td>137</td><td>31</td><td>2</td><td>6,45%</td><td>25</td><td>4</td><td>84,00%</td><td>1</td><td>52,55%</td><td>52,61%</td><td>54,13%</td><td>170</td><td>182</td><td>92</td><td>56</td><td>127</td><td>45</td><td>0</td><td>0</td></tr>
<tr><td>Chicago Blackhawks</td><td>CHI</td><td>24</td><td>17</td><td>18</td><td>0</td><td>552</td><td>164</td><td>171</td><td>213</td><td>4</td><td>638</td><td>181</td><td>178</td><td>364</td><td>70</td><td>12</td><td>17,14%</td><td>80</td><td>16</td><td>80,00%</td><td>1</td><td>50,91%</td><td>47,65%</td><td>57,05%</td><td>470</td><td>445</td><td>244</td><td>144</td><td>302</td><td>120</td><td>0</td><td>0</td></tr>
<tr><td>Colorado Avalanche</td><td>COL</td><td>11</td><td>4</td><td>6</td><td>0</td><td>275</td><td>100</td><td>75</td><td>89</td><td>11</td><td>244</td><td>65</td><td>71</td><td>140</td><td>28</td><td>3</td><td>10,71%</td><td>30</td><td>10</td><td>66,67%</td><td>0</td><td>49,03%</td><td>46,50%</td><td>57,89%</td><td>198</td><td>195</td><td>105</td><td>61</td><td>133</td><td>53</td><td>1</td><td>0</td></tr>
<tr><td>Columbus Blue Jackets</td><td>CLB</td><td>33</td><td>13</td><td>26</td><td>2</td><td>725</td><td>244</td><td>225</td><td>247</td><td>9</td><td>660</td><td>224</td><td>153</td><td>452</td><td>102</td><td>17</td><td>16,67%</td><td>65</td><td>17</td><td>73,85%</td><td>2</td><td>47,70%</td><td>51,28%</td><td>42,73%</td><td>541</td><td>568</td><td>288</td><td>167</td><td>401</td><td>145</td><td>2</td><td>0</td></tr>
<tr><td>Dallas Stars</td><td>DAL</td><td>8</td><td>1</td><td>4</td><td>1</td><td>193</td><td>69</td><td>57</td><td>53</td><td>14</td><td>156</td><td>31</td><td>46</td><td>99</td><td>22</td><td>3</td><td>13,64%</td><td>22</td><td>4</td><td>81,82%</td><td>1</td><td>48,47%</td><td>47,81%</td><td>42,70%</td><td>122</td><td>128</td><td>69</td><td>40</td><td>88</td><td>34</td><td>0</td><td>0</td></tr>
<tr><td>Detroit Red Wings</td><td>DET</td><td>4</td><td>3</td><td>6</td><td>1</td><td>152</td><td>57</td><td>42</td><td>51</td><td>2</td><td>194</td><td>58</td><td>46</td><td>99</td><td>13</td><td>2</td><td>15,38%</td><td>23</td><td>8</td><td>65,22%</td><td>0</td><td>50,67%</td><td>49,73%</td><td>47,31%</td><td>125</td><td>114</td><td>61</td><td>37</td><td>78</td><td>30</td><td>0</td><td>1</td></tr>
<tr><td>Edmonton Oilers</td><td>EDM</td><td>2</td><td>3</td><td>2</td><td>0</td><td>94</td><td>24</td><td>43</td><td>27</td><td>0</td><td>104</td><td>35</td><td>32</td><td>58</td><td>16</td><td>4</td><td>25,00%</td><td>15</td><td>2</td><td>86,67%</td><td>0</td><td>51,33%</td><td>36,70%</td><td>33,33%</td><td>76</td><td>66</td><td>38</td><td>22</td><td>43</td><td>17</td><td>0</td><td>0</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>3</td><td>5</td><td>6</td><td>0</td><td>142</td><td>34</td><td>43</td><td>65</td><td>0</td><td>176</td><td>54</td><td>69</td><td>99</td><td>9</td><td>3</td><td>33,33%</td><td>32</td><td>6</td><td>81,25%</td><td>0</td><td>46,07%</td><td>57,31%</td><td>57,89%</td><td>124</td><td>115</td><td>61</td><td>35</td><td>80</td><td>30</td><td>0</td><td>1</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>6</td><td>7</td><td>13</td><td>1</td><td>274</td><td>79</td><td>90</td><td>103</td><td>2</td><td>224</td><td>63</td><td>88</td><td>151</td><td>32</td><td>10</td><td>31,25%</td><td>39</td><td>7</td><td>82,05%</td><td>1</td><td>59,43%</td><td>49,84%</td><td>53,66%</td><td>180</td><td>199</td><td>101</td><td>59</td><td>138</td><td>52</td><td>0</td><td>0</td></tr>
<tr><td>Minnesota Wild</td><td>MIN</td><td>3</td><td>1</td><td>3</td><td>0</td><td>74</td><td>18</td><td>23</td><td>33</td><td>0</td><td>111</td><td>31</td><td>28</td><td>56</td><td>2</td><td>0</td><td>0,00%</td><td>11</td><td>2</td><td>81,82%</td><td>0</td><td>44,26%</td><td>49,44%</td><td>37,78%</td><td>79</td><td>63</td><td>38</td><td>23</td><td>43</td><td>18</td><td>0</td><td>0</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>26</td><td>14</td><td>20</td><td>1</td><td>603</td><td>226</td><td>180</td><td>193</td><td>4</td><td>577</td><td>172</td><td>156</td><td>372</td><td>81</td><td>19</td><td>23,46%</td><td>70</td><td>13</td><td>81,43%</td><td>0</td><td>51,62%</td><td>51,27%</td><td>50,99%</td><td>446</td><td>463</td><td>234</td><td>138</td><td>326</td><td>118</td><td>1</td><td>0</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>18</td><td>23</td><td>27</td><td>0</td><td>538</td><td>166</td><td>181</td><td>186</td><td>5</td><td>514</td><td>148</td><td>112</td><td>314</td><td>57</td><td>15</td><td>26,32%</td><td>48</td><td>6</td><td>87,50%</td><td>0</td><td>48,93%</td><td>47,91%</td><td>47,67%</td><td>423</td><td>437</td><td>231</td><td>131</td><td>304</td><td>118</td><td>1</td><td>0</td></tr>
<tr><td>New Jersey Devils</td><td>NJD</td><td>1</td><td>5</td><td>1</td><td>0</td><td>89</td><td>32</td><td>33</td><td>23</td><td>1</td><td>110</td><td>26</td><td>33</td><td>53</td><td>8</td><td>1</td><td>12,50%</td><td>14</td><td>3</td><td>78,57%</td><td>0</td><td>47,06%</td><td>50,00%</td><td>46,81%</td><td>77</td><td>69</td><td>37</td><td>22</td><td>47</td><td>18</td><td>0</td><td>0</td></tr>
<tr><td>New York Islanders</td><td>NYI</td><td>7</td><td>7</td><td>0</td><td>0</td><td>164</td><td>59</td><td>64</td><td>41</td><td>0</td><td>159</td><td>46</td><td>22</td><td>83</td><td>23</td><td>5</td><td>21,74%</td><td>11</td><td>0</td><td>100,00%</td><td>0</td><td>44,58%</td><td>52,50%</td><td>50,62%</td><td>115</td><td>122</td><td>62</td><td>35</td><td>86</td><td>35</td><td>0</td><td>0</td></tr>
<tr><td>New York Rangers</td><td>NYR</td><td>7</td><td>1</td><td>3</td><td>0</td><td>112</td><td>34</td><td>37</td><td>33</td><td>8</td><td>123</td><td>45</td><td>30</td><td>60</td><td>11</td><td>1</td><td>9,09%</td><td>15</td><td>1</td><td>93,33%</td><td>1</td><td>46,09%</td><td>51,43%</td><td>50,94%</td><td>76</td><td>81</td><td>40</td><td>23</td><td>56</td><td>20</td><td>0</td><td>0</td></tr>
<tr><td>Ottawa Senators</td><td>OTT</td><td>9</td><td>7</td><td>3</td><td>0</td><td>234</td><td>90</td><td>77</td><td>64</td><td>3</td><td>228</td><td>57</td><td>74</td><td>131</td><td>30</td><td>7</td><td>23,33%</td><td>33</td><td>7</td><td>78,79%</td><td>1</td><td>53,74%</td><td>48,12%</td><td>48,48%</td><td>173</td><td>174</td><td>90</td><td>52</td><td>120</td><td>45</td><td>0</td><td>0</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>8</td><td>3</td><td>6</td><td>2</td><td>268</td><td>90</td><td>73</td><td>98</td><td>7</td><td>261</td><td>77</td><td>60</td><td>166</td><td>38</td><td>6</td><td>15,79%</td><td>28</td><td>3</td><td>89,29%</td><td>0</td><td>51,58%</td><td>54,40%</td><td>52,27%</td><td>211</td><td>222</td><td>114</td><td>66</td><td>155</td><td>58</td><td>0</td><td>0</td></tr>
<tr><td>Pittsburgh Penguins</td><td>PIT</td><td>16</td><td>7</td><td>3</td><td>1</td><td>258</td><td>84</td><td>86</td><td>86</td><td>2</td><td>262</td><td>80</td><td>47</td><td>135</td><td>28</td><td>6</td><td>21,43%</td><td>20</td><td>5</td><td>75,00%</td><td>0</td><td>50,53%</td><td>49,05%</td><td>47,29%</td><td>195</td><td>194</td><td>97</td><td>56</td><td>137</td><td>47</td><td>0</td><td>0</td></tr>
<tr><td>Quebec Nordiques</td><td>QUE</td><td>6</td><td>5</td><td>2</td><td>0</td><td>140</td><td>46</td><td>54</td><td>39</td><td>1</td><td>152</td><td>44</td><td>50</td><td>89</td><td>15</td><td>1</td><td>6,67%</td><td>25</td><td>4</td><td>84,00%</td><td>0</td><td>44,69%</td><td>49,72%</td><td>61,43%</td><td>127</td><td>114</td><td>63</td><td>38</td><td>77</td><td>31</td><td>1</td><td>0</td></tr>
<tr><td>San Jose Sharks</td><td>SJS</td><td>9</td><td>7</td><td>9</td><td>0</td><td>295</td><td>101</td><td>93</td><td>101</td><td>0</td><td>226</td><td>69</td><td>40</td><td>155</td><td>29</td><td>8</td><td>27,59%</td><td>19</td><td>4</td><td>78,95%</td><td>0</td><td>52,45%</td><td>49,85%</td><td>54,48%</td><td>187</td><td>194</td><td>100</td><td>57</td><td>135</td><td>51</td><td>1</td><td>0</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>2</td><td>1</td><td>3</td><td>0</td><td>111</td><td>47</td><td>37</td><td>27</td><td>0</td><td>95</td><td>21</td><td>35</td><td>35</td><td>13</td><td>3</td><td>23,08%</td><td>12</td><td>4</td><td>66,67%</td><td>0</td><td>57,84%</td><td>47,86%</td><td>59,18%</td><td>72</td><td>73</td><td>37</td><td>22</td><td>51</td><td>18</td><td>0</td><td>0</td></tr>
<tr><td>Tampa Bay Lightning</td><td>TBL</td><td>1</td><td>2</td><td>1</td><td>0</td><td>87</td><td>25</td><td>28</td><td>34</td><td>0</td><td>104</td><td>37</td><td>34</td><td>45</td><td>15</td><td>2</td><td>13,33%</td><td>15</td><td>4</td><td>73,33%</td><td>0</td><td>46,96%</td><td>42,86%</td><td>45,24%</td><td>76</td><td>67</td><td>37</td><td>24</td><td>46</td><td>17</td><td>0</td><td>0</td></tr>
<tr><td>Toronto Maple Leafs</td><td>TOR</td><td>2</td><td>4</td><td>3</td><td>0</td><td>114</td><td>29</td><td>44</td><td>37</td><td>4</td><td>120</td><td>35</td><td>20</td><td>73</td><td>12</td><td>1</td><td>8,33%</td><td>10</td><td>1</td><td>90,00%</td><td>0</td><td>54,23%</td><td>50,36%</td><td>48,08%</td><td>104</td><td>94</td><td>56</td><td>32</td><td>64</td><td>28</td><td>0</td><td>0</td></tr>
<tr><td>Vancouver Canucks</td><td>VAN</td><td>5</td><td>3</td><td>1</td><td>0</td><td>129</td><td>45</td><td>38</td><td>46</td><td>0</td><td>112</td><td>26</td><td>42</td><td>88</td><td>13</td><td>2</td><td>15,38%</td><td>20</td><td>4</td><td>80,00%</td><td>0</td><td>51,41%</td><td>49,30%</td><td>55,17%</td><td>98</td><td>92</td><td>50</td><td>29</td><td>63</td><td>24</td><td>0</td><td>0</td></tr>
<tr><td>Vegas Golden Knights</td><td>VEG</td><td>7</td><td>9</td><td>8</td><td>1</td><td>237</td><td>55</td><td>78</td><td>84</td><td>20</td><td>241</td><td>68</td><td>58</td><td>124</td><td>24</td><td>6</td><td>25,00%</td><td>25</td><td>2</td><td>92,00%</td><td>0</td><td>51,68%</td><td>46,07%</td><td>45,45%</td><td>187</td><td>185</td><td>100</td><td>58</td><td>130</td><td>50</td><td>0</td><td>0</td></tr>
<tr><td>Washington Capitals</td><td>WSH</td><td>13</td><td>11</td><td>9</td><td>2</td><td>368</td><td>127</td><td>108</td><td>126</td><td>7</td><td>399</td><td>113</td><td>130</td><td>252</td><td>39</td><td>7</td><td>17,95%</td><td>53</td><td>5</td><td>90,57%</td><td>0</td><td>45,44%</td><td>47,87%</td><td>48,07%</td><td>327</td><td>307</td><td>171</td><td>97</td><td>206</td><td>85</td><td>2</td><td>2</td></tr>
<tr><td>Winnipeg Jets</td><td>WPG</td><td>2</td><td>3</td><td>3</td><td>1</td><td>113</td><td>25</td><td>40</td><td>39</td><td>9</td><td>154</td><td>56</td><td>28</td><td>107</td><td>15</td><td>5</td><td>33,33%</td><td>13</td><td>2</td><td>84,62%</td><td>0</td><td>49,46%</td><td>47,40%</td><td>48,39%</td><td>104</td><td>100</td><td>54</td><td>34</td><td>69</td><td>26</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,95</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>3,78</td></tr>
<tr><td>2</td><td>New York Rangers</td><td>3,67</td></tr>
<tr><td>3</td><td>Vegas Golden Knights</td><td>3,57</td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>3,55</td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>3,38</td></tr>
<tr><td>6</td><td>Pittsburgh Penguins</td><td>3,38</td></tr>
<tr><td>7</td><td>Carolina Hurricanes</td><td>3,29</td></tr>
<tr><td>8</td><td>Columbus Blue Jackets</td><td>3,22</td></tr>
<tr><td>9</td><td>Montreal Canadiens</td><td>3,21</td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>3,20</td></tr>
<tr><td>11</td><td>San Jose Sharks</td><td>3,13</td></tr>
<tr><td>12</td><td>Chicago Blackhawks</td><td>3,11</td></tr>
<tr><td>13</td><td>Florida Panthers</td><td>2,80</td></tr>
<tr><td>14</td><td>Dallas Stars</td><td>2,80</td></tr>
<tr><td>15</td><td>Detroit Red Wings</td><td>2,80</td></tr>
<tr><td>16</td><td>New York Islanders</td><td>2,80</td></tr>
<tr><td>17</td><td>Ottawa Senators</td><td>2,71</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>2,69</td></tr>
<tr><td>19</td><td>Anaheim Ducks</td><td>2,67</td></tr>
<tr><td>20</td><td>Calgary Flames</td><td>2,64</td></tr>
<tr><td>21</td><td>Colorado Avalanche</td><td>2,63</td></tr>
<tr><td>22</td><td>Quebec Nordiques</td><td>2,60</td></tr>
<tr><td>23</td><td>Boston Bruins</td><td>2,38</td></tr>
<tr><td>24</td><td>Edmonton Oilers</td><td>2,33</td></tr>
<tr><td>25</td><td>Minnesota Wild</td><td>2,33</td></tr>
<tr><td>26</td><td>New Jersey Devils</td><td>2,33</td></tr>
<tr><td>27</td><td>Toronto Maple Leafs</td><td>2,25</td></tr>
<tr><td>28</td><td>Vancouver Canucks</td><td>2,25</td></tr>
<tr><td>29</td><td>Winnipeg Jets</td><td>2,25</td></tr>
<tr><td>30</td><td>Philadelphia Flyers</td><td>2,11</td></tr>
<tr><td>31</td><td>St. Louis Blues</td><td>2,00</td></tr>
<tr><td>32</td><td>Tampa Bay Lightning</td><td>1,33</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,95</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>1,94</td></tr>
<tr><td>2</td><td>Ottawa Senators</td><td>2,14</td></tr>
<tr><td>3</td><td>New York Islanders</td><td>2,40</td></tr>
<tr><td>4</td><td>Washington Capitals</td><td>2,46</td></tr>
<tr><td>5</td><td>Quebec Nordiques</td><td>2,60</td></tr>
<tr><td>6</td><td>Los Angeles Kings</td><td>2,63</td></tr>
<tr><td>7</td><td>Colorado Avalanche</td><td>2,63</td></tr>
<tr><td>8</td><td>Columbus Blue Jackets</td><td>2,65</td></tr>
<tr><td>9</td><td>Calgary Flames</td><td>2,73</td></tr>
<tr><td>10</td><td>Toronto Maple Leafs</td><td>2,75</td></tr>
<tr><td>11</td><td>Montreal Canadiens</td><td>2,84</td></tr>
<tr><td>12</td><td>Boston Bruins</td><td>2,85</td></tr>
<tr><td>13</td><td>Pittsburgh Penguins</td><td>2,88</td></tr>
<tr><td>14</td><td>Arizona Coyotes</td><td>2,91</td></tr>
<tr><td>15</td><td>Chicago Blackhawks</td><td>3,00</td></tr>
<tr><td>16</td><td>Carolina Hurricanes</td><td>3,00</td></tr>
<tr><td>17</td><td>Winnipeg Jets</td><td>3,00</td></tr>
<tr><td>18</td><td>Tampa Bay Lightning</td><td>3,00</td></tr>
<tr><td>19</td><td>Philadelphia Flyers</td><td>3,22</td></tr>
<tr><td>20</td><td>San Jose Sharks</td><td>3,25</td></tr>
<tr><td>21</td><td>Vancouver Canucks</td><td>3,50</td></tr>
<tr><td>22</td><td>Dallas Stars</td><td>3,60</td></tr>
<tr><td>23</td><td>Buffalo Sabres</td><td>3,60</td></tr>
<tr><td>24</td><td>Vegas Golden Knights</td><td>3,71</td></tr>
<tr><td>25</td><td>Florida Panthers</td><td>4,00</td></tr>
<tr><td>26</td><td>Detroit Red Wings</td><td>4,00</td></tr>
<tr><td>27</td><td>St. Louis Blues</td><td>4,00</td></tr>
<tr><td>28</td><td>Minnesota Wild</td><td>4,00</td></tr>
<tr><td>29</td><td>Edmonton Oilers</td><td>4,00</td></tr>
<tr><td>30</td><td>New Jersey Devils</td><td>4,33</td></tr>
<tr><td>31</td><td>Anaheim Ducks</td><td>4,33</td></tr>
<tr><td>32</td><td>New York Rangers</td><td>5,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>194,29%</td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>128,57%</td></tr>
<tr><td>3</td><td>Ottawa Senators</td><td>126,67%</td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>121,88%</td></tr>
<tr><td>5</td><td>Columbus Blue Jackets</td><td>121,31%</td></tr>
<tr><td>6</td><td>Pittsburgh Penguins</td><td>117,39%</td></tr>
<tr><td>7</td><td>New York Islanders</td><td>116,67%</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>112,96%</td></tr>
<tr><td>9</td><td>Carolina Hurricanes</td><td>109,52%</td></tr>
<tr><td>10</td><td>Washington Capitals</td><td>109,38%</td></tr>
<tr><td>11</td><td>Chicago Blackhawks</td><td>103,51%</td></tr>
<tr><td>12</td><td>Quebec Nordiques</td><td>100,00%</td></tr>
<tr><td>13</td><td>Colorado Avalanche</td><td>100,00%</td></tr>
<tr><td>14</td><td>Calgary Flames</td><td>96,67%</td></tr>
<tr><td>15</td><td>Vegas Golden Knights</td><td>96,15%</td></tr>
<tr><td>16</td><td>San Jose Sharks</td><td>96,15%</td></tr>
<tr><td>17</td><td>Buffalo Sabres</td><td>88,89%</td></tr>
<tr><td>18</td><td>Boston Bruins</td><td>83,78%</td></tr>
<tr><td>19</td><td>Toronto Maple Leafs</td><td>81,82%</td></tr>
<tr><td>20</td><td>Dallas Stars</td><td>77,78%</td></tr>
<tr><td>21</td><td>Winnipeg Jets</td><td>75,00%</td></tr>
<tr><td>22</td><td>New York Rangers</td><td>73,33%</td></tr>
<tr><td>23</td><td>Detroit Red Wings</td><td>70,00%</td></tr>
<tr><td>24</td><td>Florida Panthers</td><td>70,00%</td></tr>
<tr><td>25</td><td>Philadelphia Flyers</td><td>65,52%</td></tr>
<tr><td>26</td><td>Vancouver Canucks</td><td>64,29%</td></tr>
<tr><td>27</td><td>Anaheim Ducks</td><td>61,54%</td></tr>
<tr><td>28</td><td>Edmonton Oilers</td><td>58,33%</td></tr>
<tr><td>29</td><td>Minnesota Wild</td><td>58,33%</td></tr>
<tr><td>30</td><td>New Jersey Devils</td><td>53,85%</td></tr>
<tr><td>31</td><td>St. Louis Blues</td><td>50,00%</td></tr>
<tr><td>32</td><td>Tampa Bay Lightning</td><td>44,44%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,13%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Winnipeg Jets</td><td>33,33%</td></tr>
<tr><td>2</td><td>Florida Panthers</td><td>33,33%</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>31,25%</td></tr>
<tr><td>4</td><td>San Jose Sharks</td><td>27,59%</td></tr>
<tr><td>5</td><td>Nashville Predators</td><td>26,32%</td></tr>
<tr><td>6</td><td>Edmonton Oilers</td><td>25,00%</td></tr>
<tr><td>7</td><td>Vegas Golden Knights</td><td>25,00%</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>23,46%</td></tr>
<tr><td>9</td><td>Ottawa Senators</td><td>23,33%</td></tr>
<tr><td>10</td><td>St. Louis Blues</td><td>23,08%</td></tr>
<tr><td>11</td><td>New York Islanders</td><td>21,74%</td></tr>
<tr><td>12</td><td>Calgary Flames</td><td>21,74%</td></tr>
<tr><td>13</td><td>Pittsburgh Penguins</td><td>21,43%</td></tr>
<tr><td>14</td><td>Buffalo Sabres</td><td>19,05%</td></tr>
<tr><td>15</td><td>Washington Capitals</td><td>17,95%</td></tr>
<tr><td>16</td><td>Boston Bruins</td><td>17,39%</td></tr>
<tr><td>17</td><td>Chicago Blackhawks</td><td>17,14%</td></tr>
<tr><td>18</td><td>Columbus Blue Jackets</td><td>16,67%</td></tr>
<tr><td>19</td><td>Philadelphia Flyers</td><td>15,79%</td></tr>
<tr><td>20</td><td>Vancouver Canucks</td><td>15,38%</td></tr>
<tr><td>21</td><td>Detroit Red Wings</td><td>15,38%</td></tr>
<tr><td>22</td><td>Anaheim Ducks</td><td>14,29%</td></tr>
<tr><td>23</td><td>Arizona Coyotes</td><td>14,00%</td></tr>
<tr><td>24</td><td>Dallas Stars</td><td>13,64%</td></tr>
<tr><td>25</td><td>Tampa Bay Lightning</td><td>13,33%</td></tr>
<tr><td>26</td><td>New Jersey Devils</td><td>12,50%</td></tr>
<tr><td>27</td><td>Colorado Avalanche</td><td>10,71%</td></tr>
<tr><td>28</td><td>New York Rangers</td><td>9,09%</td></tr>
<tr><td>29</td><td>Toronto Maple Leafs</td><td>8,33%</td></tr>
<tr><td>30</td><td>Quebec Nordiques</td><td>6,67%</td></tr>
<tr><td>31</td><td>Carolina Hurricanes</td><td>6,45%</td></tr>
<tr><td>32</td><td>Minnesota Wild</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,87%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>New York Islanders</td><td>100,00%</td></tr>
<tr><td>2</td><td>New York Rangers</td><td>93,33%</td></tr>
<tr><td>3</td><td>Vegas Golden Knights</td><td>92,00%</td></tr>
<tr><td>4</td><td>Washington Capitals</td><td>90,57%</td></tr>
<tr><td>5</td><td>Toronto Maple Leafs</td><td>90,00%</td></tr>
<tr><td>6</td><td>Philadelphia Flyers</td><td>89,29%</td></tr>
<tr><td>7</td><td>Nashville Predators</td><td>87,50%</td></tr>
<tr><td>8</td><td>Edmonton Oilers</td><td>86,67%</td></tr>
<tr><td>9</td><td>Winnipeg Jets</td><td>84,62%</td></tr>
<tr><td>10</td><td>Calgary Flames</td><td>84,62%</td></tr>
<tr><td>11</td><td>Quebec Nordiques</td><td>84,00%</td></tr>
<tr><td>12</td><td>Carolina Hurricanes</td><td>84,00%</td></tr>
<tr><td>13</td><td>Los Angeles Kings</td><td>82,05%</td></tr>
<tr><td>14</td><td>Dallas Stars</td><td>81,82%</td></tr>
<tr><td>15</td><td>Minnesota Wild</td><td>81,82%</td></tr>
<tr><td>16</td><td>Montreal Canadiens</td><td>81,43%</td></tr>
<tr><td>17</td><td>Florida Panthers</td><td>81,25%</td></tr>
<tr><td>18</td><td>Boston Bruins</td><td>80,60%</td></tr>
<tr><td>19</td><td>Vancouver Canucks</td><td>80,00%</td></tr>
<tr><td>20</td><td>Chicago Blackhawks</td><td>80,00%</td></tr>
<tr><td>21</td><td>San Jose Sharks</td><td>78,95%</td></tr>
<tr><td>22</td><td>Ottawa Senators</td><td>78,79%</td></tr>
<tr><td>23</td><td>New Jersey Devils</td><td>78,57%</td></tr>
<tr><td>24</td><td>Arizona Coyotes</td><td>76,47%</td></tr>
<tr><td>25</td><td>Pittsburgh Penguins</td><td>75,00%</td></tr>
<tr><td>26</td><td>Columbus Blue Jackets</td><td>73,85%</td></tr>
<tr><td>27</td><td>Tampa Bay Lightning</td><td>73,33%</td></tr>
<tr><td>28</td><td>Buffalo Sabres</td><td>70,00%</td></tr>
<tr><td>29</td><td>Anaheim Ducks</td><td>69,23%</td></tr>
<tr><td>30</td><td>Colorado Avalanche</td><td>66,67%</td></tr>
<tr><td>31</td><td>St. Louis Blues</td><td>66,67%</td></tr>
<tr><td>32</td><td>Detroit Red Wings</td><td>65,22%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>New York Islanders</td><td>121,74%</td></tr>
<tr><td>2</td><td>Winnipeg Jets</td><td>117,95%</td></tr>
<tr><td>3</td><td>Vegas Golden Knights</td><td>117,00%</td></tr>
<tr><td>4</td><td>Florida Panthers</td><td>114,58%</td></tr>
<tr><td>5</td><td>Nashville Predators</td><td>113,82%</td></tr>
<tr><td>6</td><td>Los Angeles Kings</td><td>113,30%</td></tr>
<tr><td>7</td><td>Edmonton Oilers</td><td>111,67%</td></tr>
<tr><td>8</td><td>Washington Capitals</td><td>108,51%</td></tr>
<tr><td>9</td><td>San Jose Sharks</td><td>106,53%</td></tr>
<tr><td>10</td><td>Calgary Flames</td><td>106,35%</td></tr>
<tr><td>11</td><td>Philadelphia Flyers</td><td>105,08%</td></tr>
<tr><td>12</td><td>Montreal Canadiens</td><td>104,89%</td></tr>
<tr><td>13</td><td>New York Rangers</td><td>102,42%</td></tr>
<tr><td>14</td><td>Ottawa Senators</td><td>102,12%</td></tr>
<tr><td>15</td><td>Toronto Maple Leafs</td><td>98,33%</td></tr>
<tr><td>16</td><td>Boston Bruins</td><td>97,99%</td></tr>
<tr><td>17</td><td>Chicago Blackhawks</td><td>97,14%</td></tr>
<tr><td>18</td><td>Pittsburgh Penguins</td><td>96,43%</td></tr>
<tr><td>19</td><td>Dallas Stars</td><td>95,45%</td></tr>
<tr><td>20</td><td>Vancouver Canucks</td><td>95,38%</td></tr>
<tr><td>21</td><td>New Jersey Devils</td><td>91,07%</td></tr>
<tr><td>22</td><td>Quebec Nordiques</td><td>90,67%</td></tr>
<tr><td>23</td><td>Columbus Blue Jackets</td><td>90,51%</td></tr>
<tr><td>24</td><td>Arizona Coyotes</td><td>90,47%</td></tr>
<tr><td>25</td><td>Carolina Hurricanes</td><td>90,45%</td></tr>
<tr><td>26</td><td>St. Louis Blues</td><td>89,74%</td></tr>
<tr><td>27</td><td>Buffalo Sabres</td><td>89,05%</td></tr>
<tr><td>28</td><td>Tampa Bay Lightning</td><td>86,67%</td></tr>
<tr><td>29</td><td>Anaheim Ducks</td><td>83,52%</td></tr>
<tr><td>30</td><td>Minnesota Wild</td><td>81,82%</td></tr>
<tr><td>31</td><td>Detroit Red Wings</td><td>80,60%</td></tr>
<tr><td>32</td><td>Colorado Avalanche</td><td>77,38%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31,57</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Dallas Stars</td><td>38,60</td></tr>
<tr><td>2</td><td>New York Rangers</td><td>37,33</td></tr>
<tr><td>3</td><td>St. Louis Blues</td><td>37,00</td></tr>
<tr><td>4</td><td>San Jose Sharks</td><td>36,88</td></tr>
<tr><td>5</td><td>Arizona Coyotes</td><td>35,91</td></tr>
<tr><td>6</td><td>Carolina Hurricanes</td><td>35,57</td></tr>
<tr><td>7</td><td>Colorado Avalanche</td><td>34,38</td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>34,25</td></tr>
<tr><td>9</td><td>Vegas Golden Knights</td><td>33,86</td></tr>
<tr><td>10</td><td>Ottawa Senators</td><td>33,43</td></tr>
<tr><td>11</td><td>Buffalo Sabres</td><td>32,80</td></tr>
<tr><td>12</td><td>New York Islanders</td><td>32,80</td></tr>
<tr><td>13</td><td>Vancouver Canucks</td><td>32,25</td></tr>
<tr><td>14</td><td>Pittsburgh Penguins</td><td>32,25</td></tr>
<tr><td>15</td><td>Montreal Canadiens</td><td>31,74</td></tr>
<tr><td>16</td><td>Columbus Blue Jackets</td><td>31,52</td></tr>
<tr><td>17</td><td>Edmonton Oilers</td><td>31,33</td></tr>
<tr><td>18</td><td>Boston Bruins</td><td>31,23</td></tr>
<tr><td>19</td><td>Detroit Red Wings</td><td>30,40</td></tr>
<tr><td>20</td><td>Nashville Predators</td><td>29,89</td></tr>
<tr><td>21</td><td>Philadelphia Flyers</td><td>29,78</td></tr>
<tr><td>22</td><td>New Jersey Devils</td><td>29,67</td></tr>
<tr><td>23</td><td>Calgary Flames</td><td>29,55</td></tr>
<tr><td>24</td><td>Chicago Blackhawks</td><td>29,05</td></tr>
<tr><td>25</td><td>Tampa Bay Lightning</td><td>29,00</td></tr>
<tr><td>26</td><td>Toronto Maple Leafs</td><td>28,50</td></tr>
<tr><td>27</td><td>Florida Panthers</td><td>28,40</td></tr>
<tr><td>28</td><td>Washington Capitals</td><td>28,31</td></tr>
<tr><td>29</td><td>Winnipeg Jets</td><td>28,25</td></tr>
<tr><td>30</td><td>Quebec Nordiques</td><td>28,00</td></tr>
<tr><td>31</td><td>Anaheim Ducks</td><td>25,33</td></tr>
<tr><td>32</td><td>Minnesota Wild</td><td>24,67</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31,57</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Los Angeles Kings</td><td>28,00</td></tr>
<tr><td>2</td><td>Vancouver Canucks</td><td>28,00</td></tr>
<tr><td>3</td><td>San Jose Sharks</td><td>28,25</td></tr>
<tr><td>4</td><td>Nashville Predators</td><td>28,56</td></tr>
<tr><td>5</td><td>Columbus Blue Jackets</td><td>28,70</td></tr>
<tr><td>6</td><td>Philadelphia Flyers</td><td>29,00</td></tr>
<tr><td>7</td><td>Toronto Maple Leafs</td><td>30,00</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>30,37</td></tr>
<tr><td>9</td><td>Quebec Nordiques</td><td>30,40</td></tr>
<tr><td>10</td><td>Colorado Avalanche</td><td>30,50</td></tr>
<tr><td>11</td><td>Washington Capitals</td><td>30,69</td></tr>
<tr><td>12</td><td>Buffalo Sabres</td><td>31,00</td></tr>
<tr><td>13</td><td>Dallas Stars</td><td>31,20</td></tr>
<tr><td>14</td><td>Calgary Flames</td><td>31,36</td></tr>
<tr><td>15</td><td>St. Louis Blues</td><td>31,67</td></tr>
<tr><td>16</td><td>New York Islanders</td><td>31,80</td></tr>
<tr><td>17</td><td>Carolina Hurricanes</td><td>32,00</td></tr>
<tr><td>18</td><td>Boston Bruins</td><td>32,38</td></tr>
<tr><td>19</td><td>Ottawa Senators</td><td>32,57</td></tr>
<tr><td>20</td><td>Pittsburgh Penguins</td><td>32,75</td></tr>
<tr><td>21</td><td>Arizona Coyotes</td><td>32,82</td></tr>
<tr><td>22</td><td>Chicago Blackhawks</td><td>33,58</td></tr>
<tr><td>23</td><td>Vegas Golden Knights</td><td>34,43</td></tr>
<tr><td>24</td><td>Tampa Bay Lightning</td><td>34,67</td></tr>
<tr><td>25</td><td>Edmonton Oilers</td><td>34,67</td></tr>
<tr><td>26</td><td>Florida Panthers</td><td>35,20</td></tr>
<tr><td>27</td><td>Anaheim Ducks</td><td>35,33</td></tr>
<tr><td>28</td><td>New Jersey Devils</td><td>36,67</td></tr>
<tr><td>29</td><td>Minnesota Wild</td><td>37,00</td></tr>
<tr><td>30</td><td>Winnipeg Jets</td><td>38,50</td></tr>
<tr><td>31</td><td>Detroit Red Wings</td><td>38,80</td></tr>
<tr><td>32</td><td>New York Rangers</td><td>41,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>San Jose Sharks</td><td>130,53%</td></tr>
<tr><td>2</td><td>Dallas Stars</td><td>123,72%</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>122,32%</td></tr>
<tr><td>4</td><td>St. Louis Blues</td><td>116,84%</td></tr>
<tr><td>5</td><td>Vancouver Canucks</td><td>115,18%</td></tr>
<tr><td>6</td><td>Colorado Avalanche</td><td>112,70%</td></tr>
<tr><td>7</td><td>Carolina Hurricanes</td><td>111,16%</td></tr>
<tr><td>8</td><td>Columbus Blue Jackets</td><td>109,85%</td></tr>
<tr><td>9</td><td>Arizona Coyotes</td><td>109,42%</td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>105,81%</td></tr>
<tr><td>11</td><td>Nashville Predators</td><td>104,67%</td></tr>
<tr><td>12</td><td>Montreal Canadiens</td><td>104,51%</td></tr>
<tr><td>13</td><td>New York Islanders</td><td>103,14%</td></tr>
<tr><td>14</td><td>Philadelphia Flyers</td><td>102,68%</td></tr>
<tr><td>15</td><td>Ottawa Senators</td><td>102,63%</td></tr>
<tr><td>16</td><td>Pittsburgh Penguins</td><td>98,47%</td></tr>
<tr><td>17</td><td>Vegas Golden Knights</td><td>98,34%</td></tr>
<tr><td>18</td><td>Boston Bruins</td><td>96,44%</td></tr>
<tr><td>19</td><td>Toronto Maple Leafs</td><td>95,00%</td></tr>
<tr><td>20</td><td>Calgary Flames</td><td>94,20%</td></tr>
<tr><td>21</td><td>Washington Capitals</td><td>92,23%</td></tr>
<tr><td>22</td><td>Quebec Nordiques</td><td>92,11%</td></tr>
<tr><td>23</td><td>New York Rangers</td><td>91,06%</td></tr>
<tr><td>24</td><td>Edmonton Oilers</td><td>90,38%</td></tr>
<tr><td>25</td><td>Chicago Blackhawks</td><td>86,52%</td></tr>
<tr><td>26</td><td>Tampa Bay Lightning</td><td>83,65%</td></tr>
<tr><td>27</td><td>New Jersey Devils</td><td>80,91%</td></tr>
<tr><td>28</td><td>Florida Panthers</td><td>80,68%</td></tr>
<tr><td>29</td><td>Detroit Red Wings</td><td>78,35%</td></tr>
<tr><td>30</td><td>Winnipeg Jets</td><td>73,38%</td></tr>
<tr><td>31</td><td>Anaheim Ducks</td><td>71,70%</td></tr>
<tr><td>32</td><td>Minnesota Wild</td><td>66,67%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8,44</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>New York Islanders</td><td>4,40</td></tr>
<tr><td>2</td><td>Toronto Maple Leafs</td><td>5,00</td></tr>
<tr><td>3</td><td>San Jose Sharks</td><td>5,00</td></tr>
<tr><td>4</td><td>Pittsburgh Penguins</td><td>5,88</td></tr>
<tr><td>5</td><td>Nashville Predators</td><td>6,22</td></tr>
<tr><td>6</td><td>Columbus Blue Jackets</td><td>6,65</td></tr>
<tr><td>7</td><td>Philadelphia Flyers</td><td>6,67</td></tr>
<tr><td>8</td><td>Winnipeg Jets</td><td>7,00</td></tr>
<tr><td>9</td><td>Arizona Coyotes</td><td>7,36</td></tr>
<tr><td>10</td><td>Carolina Hurricanes</td><td>7,86</td></tr>
<tr><td>11</td><td>Montreal Canadiens</td><td>8,21</td></tr>
<tr><td>12</td><td>Calgary Flames</td><td>8,27</td></tr>
<tr><td>13</td><td>Vegas Golden Knights</td><td>8,29</td></tr>
<tr><td>14</td><td>Colorado Avalanche</td><td>8,88</td></tr>
<tr><td>15</td><td>Detroit Red Wings</td><td>9,20</td></tr>
<tr><td>16</td><td>Dallas Stars</td><td>9,20</td></tr>
<tr><td>17</td><td>Buffalo Sabres</td><td>9,20</td></tr>
<tr><td>18</td><td>Minnesota Wild</td><td>9,33</td></tr>
<tr><td>19</td><td>Chicago Blackhawks</td><td>9,37</td></tr>
<tr><td>20</td><td>Washington Capitals</td><td>10,00</td></tr>
<tr><td>21</td><td>Quebec Nordiques</td><td>10,00</td></tr>
<tr><td>22</td><td>New York Rangers</td><td>10,00</td></tr>
<tr><td>23</td><td>Anaheim Ducks</td><td>10,00</td></tr>
<tr><td>24</td><td>Vancouver Canucks</td><td>10,50</td></tr>
<tr><td>25</td><td>Ottawa Senators</td><td>10,57</td></tr>
<tr><td>26</td><td>Edmonton Oilers</td><td>10,67</td></tr>
<tr><td>27</td><td>Boston Bruins</td><td>10,92</td></tr>
<tr><td>28</td><td>Los Angeles Kings</td><td>11,00</td></tr>
<tr><td>29</td><td>New Jersey Devils</td><td>11,00</td></tr>
<tr><td>30</td><td>Tampa Bay Lightning</td><td>11,33</td></tr>
<tr><td>31</td><td>St. Louis Blues</td><td>11,67</td></tr>
<tr><td>32</td><td>Florida Panthers</td><td>13,80</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,02</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Winnipeg Jets</td><td>26,75</td></tr>
<tr><td>2</td><td>Arizona Coyotes</td><td>22,27</td></tr>
<tr><td>3</td><td>Vancouver Canucks</td><td>22,00</td></tr>
<tr><td>4</td><td>Boston Bruins</td><td>20,08</td></tr>
<tr><td>5</td><td>New York Rangers</td><td>20,00</td></tr>
<tr><td>6</td><td>Dallas Stars</td><td>19,80</td></tr>
<tr><td>7</td><td>Detroit Red Wings</td><td>19,80</td></tr>
<tr><td>8</td><td>Florida Panthers</td><td>19,80</td></tr>
<tr><td>9</td><td>Columbus Blue Jackets</td><td>19,65</td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>19,58</td></tr>
<tr><td>11</td><td>Carolina Hurricanes</td><td>19,57</td></tr>
<tr><td>12</td><td>Washington Capitals</td><td>19,38</td></tr>
<tr><td>13</td><td>San Jose Sharks</td><td>19,38</td></tr>
<tr><td>14</td><td>Edmonton Oilers</td><td>19,33</td></tr>
<tr><td>15</td><td>Calgary Flames</td><td>19,18</td></tr>
<tr><td>16</td><td>Chicago Blackhawks</td><td>19,16</td></tr>
<tr><td>17</td><td>Los Angeles Kings</td><td>18,88</td></tr>
<tr><td>18</td><td>Ottawa Senators</td><td>18,71</td></tr>
<tr><td>19</td><td>Minnesota Wild</td><td>18,67</td></tr>
<tr><td>20</td><td>Philadelphia Flyers</td><td>18,44</td></tr>
<tr><td>21</td><td>Toronto Maple Leafs</td><td>18,25</td></tr>
<tr><td>22</td><td>Anaheim Ducks</td><td>18,00</td></tr>
<tr><td>23</td><td>Quebec Nordiques</td><td>17,80</td></tr>
<tr><td>24</td><td>Vegas Golden Knights</td><td>17,71</td></tr>
<tr><td>25</td><td>New Jersey Devils</td><td>17,67</td></tr>
<tr><td>26</td><td>Colorado Avalanche</td><td>17,50</td></tr>
<tr><td>27</td><td>Nashville Predators</td><td>17,44</td></tr>
<tr><td>28</td><td>Buffalo Sabres</td><td>17,20</td></tr>
<tr><td>29</td><td>Pittsburgh Penguins</td><td>16,88</td></tr>
<tr><td>30</td><td>New York Islanders</td><td>16,60</td></tr>
<tr><td>31</td><td>Tampa Bay Lightning</td><td>15,00</td></tr>
<tr><td>32</td><td>St. Louis Blues</td><td>11,67</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Los Angeles Kings</td><td>54,21%</td></tr>
<tr><td>2</td><td>St. Louis Blues</td><td>53,73%</td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>52,87%</td></tr>
<tr><td>4</td><td>Carolina Hurricanes</td><td>52,84%</td></tr>
<tr><td>5</td><td>Florida Panthers</td><td>52,51%</td></tr>
<tr><td>6</td><td>Calgary Flames</td><td>51,86%</td></tr>
<tr><td>7</td><td>San Jose Sharks</td><td>51,65%</td></tr>
<tr><td>8</td><td>Toronto Maple Leafs</td><td>51,65%</td></tr>
<tr><td>9</td><td>Buffalo Sabres</td><td>51,40%</td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>51,37%</td></tr>
<tr><td>11</td><td>Boston Bruins</td><td>51,30%</td></tr>
<tr><td>12</td><td>Vancouver Canucks</td><td>51,17%</td></tr>
<tr><td>13</td><td>Arizona Coyotes</td><td>51,12%</td></tr>
<tr><td>14</td><td>Chicago Blackhawks</td><td>50,71%</td></tr>
<tr><td>15</td><td>Ottawa Senators</td><td>50,62%</td></tr>
<tr><td>16</td><td>Detroit Red Wings</td><td>49,70%</td></tr>
<tr><td>17</td><td>Quebec Nordiques</td><td>49,53%</td></tr>
<tr><td>18</td><td>Pittsburgh Penguins</td><td>49,32%</td></tr>
<tr><td>19</td><td>Colorado Avalanche</td><td>49,27%</td></tr>
<tr><td>20</td><td>New York Rangers</td><td>49,22%</td></tr>
<tr><td>21</td><td>New York Islanders</td><td>49,22%</td></tr>
<tr><td>22</td><td>Winnipeg Jets</td><td>48,51%</td></tr>
<tr><td>23</td><td>Columbus Blue Jackets</td><td>48,35%</td></tr>
<tr><td>24</td><td>Vegas Golden Knights</td><td>48,35%</td></tr>
<tr><td>25</td><td>Nashville Predators</td><td>48,29%</td></tr>
<tr><td>26</td><td>New Jersey Devils</td><td>48,06%</td></tr>
<tr><td>27</td><td>Dallas Stars</td><td>47,17%</td></tr>
<tr><td>28</td><td>Washington Capitals</td><td>46,84%</td></tr>
<tr><td>29</td><td>Anaheim Ducks</td><td>46,56%</td></tr>
<tr><td>30</td><td>Tampa Bay Lightning</td><td>45,04%</td></tr>
<tr><td>31</td><td>Minnesota Wild</td><td>44,92%</td></tr>
<tr><td>32</td><td>Edmonton Oilers</td><td>42,12%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
