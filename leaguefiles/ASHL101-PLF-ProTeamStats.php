<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Stats</title>
<script src="ASHL101-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL101-STHS.db - ASHL101-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (min-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(2){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(2){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(2){display:none;}}
@media screen and (max-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(1){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(1){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(1){display:none;}}
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
.STHSTeamStat_Table2 thead th:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(2){display:none;}
}
@media screen and (max-width: 960px) {
.STHSTeamStat_Table2 thead th:nth-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(8){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(9){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(9){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(9){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(10){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(10){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(10){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(11){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(11){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(3){display:none;}
}
}</style>
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
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Arizona Coyotes</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>26</td><td>25</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>12</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>13</td><td>26</td><td>45</td><td>71</td></tr>
<tr><td>Boston Bruins</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>16</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>7</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>13</td><td>25</td><td>38</td></tr>
<tr><td>Buffalo Sabres</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>21</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>12</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>9</td><td>18</td><td>33</td><td>51</td></tr>
<tr><td>Calgary Flames</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>19</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>10</td><td>12</td><td>22</td><td>34</td></tr>
<tr><td>Colorado Avalanche</td><td>14</td><td>7</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>46</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>14</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>32</td><td>45</td><td>82</td><td>127</td></tr>
<tr><td>Columbus Blue Jackets</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>19</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>12</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>7</td><td>14</td><td>26</td><td>40</td></tr>
<tr><td>Florida Panthers</td><td>10</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>31</td><td>25</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>16</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>9</td><td>31</td><td>57</td><td>88</td></tr>
<tr><td>Los Angeles Kings</td><td>20</td><td>10</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>66</td><td>58</td><td>11</td><td>7</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>23</td><td>9</td><td>3</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>35</td><td>66</td><td>117</td><td>183</td></tr>
<tr><td>Montreal Canadiens</td><td>11</td><td>4</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>34</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>21</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>13</td><td>28</td><td>53</td><td>81</td></tr>
<tr><td>Nashville Predators</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>23</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>10</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>13</td><td>17</td><td>31</td><td>48</td></tr>
<tr><td>Philadelphia Flyers</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>21</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>11</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>10</td><td>18</td><td>35</td><td>53</td></tr>
<tr><td>Pittsburgh Penguins</td><td>15</td><td>8</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>39</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>18</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>21</td><td>45</td><td>85</td><td>130</td></tr>
<tr><td>St. Louis Blues</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>25</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>14</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>11</td><td>21</td><td>37</td><td>58</td></tr>
<tr><td>Toronto Maple Leafs</td><td>21</td><td>16</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>65</td><td>57</td><td>9</td><td>9</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>16</td><td>12</td><td>7</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>41</td><td>65</td><td>115</td><td>180</td></tr>
<tr><td>Vegas Golden Knights</td><td>14</td><td>7</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>46</td><td>51</td><td>7</td><td>6</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>26</td><td>20</td><td>7</td><td>1</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>31</td><td>46</td><td>83</td><td>129</td></tr>
<tr><td>Winnipeg Jets</td><td>25</td><td>15</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>85</td><td>71</td><td>14</td><td>12</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>54</td><td>32</td><td>11</td><td>3</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>31</td><td>39</td><td>85</td><td>152</td><td>237</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>8</td><td>11</td><td>6</td><td>1</td><td>223</td><td>82</td><td>69</td><td>66</td><td>6</td><td>217</td><td>57</td><td>72</td><td>132</td><td>22</td><td>6</td><td>27,27%</td><td>35</td><td>7</td><td>80,00%</td><td>1</td><td>56,22%</td><td>53,01%</td><td>53,85%</td><td>166</td><td>169</td><td>89</td><td>53</td><td>116</td><td>44</td><td>0</td><td>0</td></tr>
<tr><td>Boston Bruins</td><td>BOS</td><td>3</td><td>5</td><td>5</td><td>0</td><td>154</td><td>41</td><td>55</td><td>58</td><td>0</td><td>162</td><td>57</td><td>52</td><td>110</td><td>16</td><td>5</td><td>31,25%</td><td>15</td><td>4</td><td>73,33%</td><td>0</td><td>54,14%</td><td>50,28%</td><td>52,70%</td><td>115</td><td>122</td><td>64</td><td>36</td><td>85</td><td>32</td><td>0</td><td>0</td></tr>
<tr><td>Buffalo Sabres</td><td>BUF</td><td>7</td><td>4</td><td>7</td><td>0</td><td>210</td><td>90</td><td>52</td><td>67</td><td>1</td><td>232</td><td>81</td><td>66</td><td>144</td><td>22</td><td>3</td><td>13,64%</td><td>27</td><td>4</td><td>85,19%</td><td>0</td><td>43,87%</td><td>47,81%</td><td>39,62%</td><td>174</td><td>158</td><td>89</td><td>51</td><td>106</td><td>44</td><td>0</td><td>0</td></tr>
<tr><td>Calgary Flames</td><td>CGY</td><td>4</td><td>5</td><td>3</td><td>0</td><td>172</td><td>64</td><td>53</td><td>52</td><td>3</td><td>148</td><td>38</td><td>28</td><td>75</td><td>22</td><td>6</td><td>27,27%</td><td>12</td><td>0</td><td>100,00%</td><td>0</td><td>51,70%</td><td>50,26%</td><td>53,75%</td><td>111</td><td>127</td><td>66</td><td>37</td><td>89</td><td>34</td><td>0</td><td>0</td></tr>
<tr><td>Colorado Avalanche</td><td>COL</td><td>21</td><td>16</td><td>8</td><td>0</td><td>416</td><td>125</td><td>143</td><td>138</td><td>10</td><td>475</td><td>130</td><td>143</td><td>260</td><td>50</td><td>11</td><td>22,00%</td><td>60</td><td>14</td><td>76,67%</td><td>0</td><td>49,46%</td><td>47,11%</td><td>52,40%</td><td>346</td><td>332</td><td>178</td><td>107</td><td>228</td><td>87</td><td>0</td><td>1</td></tr>
<tr><td>Columbus Blue Jackets</td><td>CLB</td><td>7</td><td>3</td><td>4</td><td>0</td><td>154</td><td>59</td><td>47</td><td>48</td><td>0</td><td>168</td><td>39</td><td>42</td><td>94</td><td>16</td><td>1</td><td>6,25%</td><td>18</td><td>4</td><td>77,78%</td><td>0</td><td>47,78%</td><td>46,99%</td><td>38,82%</td><td>116</td><td>121</td><td>64</td><td>36</td><td>85</td><td>31</td><td>0</td><td>0</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>13</td><td>7</td><td>10</td><td>1</td><td>343</td><td>113</td><td>108</td><td>105</td><td>17</td><td>355</td><td>101</td><td>99</td><td>191</td><td>34</td><td>8</td><td>23,53%</td><td>37</td><td>9</td><td>75,68%</td><td>0</td><td>51,77%</td><td>47,28%</td><td>45,70%</td><td>258</td><td>241</td><td>133</td><td>77</td><td>167</td><td>65</td><td>0</td><td>0</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>23</td><td>22</td><td>19</td><td>2</td><td>694</td><td>252</td><td>215</td><td>217</td><td>10</td><td>596</td><td>149</td><td>139</td><td>417</td><td>70</td><td>21</td><td>30,00%</td><td>57</td><td>17</td><td>70,18%</td><td>0</td><td>55,49%</td><td>52,93%</td><td>49,07%</td><td>468</td><td>497</td><td>251</td><td>144</td><td>350</td><td>128</td><td>1</td><td>1</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>9</td><td>10</td><td>7</td><td>2</td><td>350</td><td>106</td><td>108</td><td>123</td><td>13</td><td>381</td><td>89</td><td>104</td><td>191</td><td>32</td><td>6</td><td>18,75%</td><td>42</td><td>7</td><td>83,33%</td><td>1</td><td>49,20%</td><td>52,20%</td><td>60,00%</td><td>276</td><td>274</td><td>146</td><td>85</td><td>191</td><td>72</td><td>0</td><td>0</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>3</td><td>8</td><td>5</td><td>1</td><td>212</td><td>55</td><td>77</td><td>79</td><td>1</td><td>226</td><td>64</td><td>48</td><td>143</td><td>20</td><td>5</td><td>25,00%</td><td>21</td><td>9</td><td>57,14%</td><td>0</td><td>45,24%</td><td>38,49%</td><td>57,27%</td><td>169</td><td>170</td><td>87</td><td>49</td><td>122</td><td>41</td><td>0</td><td>0</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>7</td><td>8</td><td>2</td><td>1</td><td>208</td><td>62</td><td>65</td><td>53</td><td>28</td><td>243</td><td>98</td><td>96</td><td>174</td><td>27</td><td>5</td><td>18,52%</td><td>46</td><td>8</td><td>82,61%</td><td>0</td><td>45,45%</td><td>50,20%</td><td>49,06%</td><td>206</td><td>183</td><td>100</td><td>60</td><td>124</td><td>47</td><td>0</td><td>0</td></tr>
<tr><td>Pittsburgh Penguins</td><td>PIT</td><td>16</td><td>14</td><td>12</td><td>3</td><td>526</td><td>140</td><td>167</td><td>156</td><td>63</td><td>464</td><td>146</td><td>104</td><td>306</td><td>76</td><td>13</td><td>17,11%</td><td>46</td><td>11</td><td>76,09%</td><td>0</td><td>49,53%</td><td>53,50%</td><td>47,72%</td><td>390</td><td>407</td><td>207</td><td>122</td><td>288</td><td>105</td><td>0</td><td>0</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>8</td><td>5</td><td>7</td><td>1</td><td>226</td><td>81</td><td>80</td><td>59</td><td>6</td><td>230</td><td>87</td><td>62</td><td>158</td><td>32</td><td>7</td><td>21,88%</td><td>30</td><td>6</td><td>80,00%</td><td>0</td><td>52,90%</td><td>48,31%</td><td>41,44%</td><td>178</td><td>167</td><td>90</td><td>53</td><td>113</td><td>44</td><td>0</td><td>0</td></tr>
<tr><td>Toronto Maple Leafs</td><td>TOR</td><td>24</td><td>16</td><td>20</td><td>5</td><td>753</td><td>252</td><td>225</td><td>239</td><td>37</td><td>656</td><td>164</td><td>160</td><td>384</td><td>87</td><td>21</td><td>24,14%</td><td>73</td><td>10</td><td>86,30%</td><td>0</td><td>52,41%</td><td>50,92%</td><td>53,76%</td><td>501</td><td>528</td><td>273</td><td>154</td><td>369</td><td>139</td><td>2</td><td>1</td></tr>
<tr><td>Vegas Golden Knights</td><td>VEG</td><td>18</td><td>15</td><td>13</td><td>0</td><td>435</td><td>141</td><td>151</td><td>143</td><td>0</td><td>439</td><td>130</td><td>110</td><td>217</td><td>64</td><td>15</td><td>23,44%</td><td>53</td><td>15</td><td>71,70%</td><td>0</td><td>48,84%</td><td>49,11%</td><td>46,96%</td><td>336</td><td>328</td><td>180</td><td>106</td><td>223</td><td>90</td><td>0</td><td>0</td></tr>
<tr><td>Winnipeg Jets</td><td>WPG</td><td>32</td><td>25</td><td>26</td><td>2</td><td>771</td><td>252</td><td>272</td><td>233</td><td>14</td><td>855</td><td>216</td><td>229</td><td>527</td><td>88</td><td>20</td><td>22,73%</td><td>106</td><td>28</td><td>73,58%</td><td>1</td><td>48,30%</td><td>48,13%</td><td>50,00%</td><td>607</td><td>591</td><td>323</td><td>187</td><td>404</td><td>160</td><td>0</td><td>1</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,06</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Arizona Coyotes</td><td>3,71</td></tr>
<tr><td>2</td><td>Winnipeg Jets</td><td>3,40</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>3,30</td></tr>
<tr><td>4</td><td>Vegas Golden Knights</td><td>3,29</td></tr>
<tr><td>5</td><td>Colorado Avalanche</td><td>3,21</td></tr>
<tr><td>6</td><td>Florida Panthers</td><td>3,10</td></tr>
<tr><td>7</td><td>Toronto Maple Leafs</td><td>3,10</td></tr>
<tr><td>8</td><td>Pittsburgh Penguins</td><td>3,00</td></tr>
<tr><td>9</td><td>St. Louis Blues</td><td>3,00</td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>2,80</td></tr>
<tr><td>11</td><td>Boston Bruins</td><td>2,60</td></tr>
<tr><td>12</td><td>Philadelphia Flyers</td><td>2,57</td></tr>
<tr><td>13</td><td>Buffalo Sabres</td><td>2,57</td></tr>
<tr><td>14</td><td>Montreal Canadiens</td><td>2,55</td></tr>
<tr><td>15</td><td>Nashville Predators</td><td>2,43</td></tr>
<tr><td>16</td><td>Calgary Flames</td><td>2,40</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,06</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Florida Panthers</td><td>2,50</td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>2,60</td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>2,71</td></tr>
<tr><td>4</td><td>Winnipeg Jets</td><td>2,84</td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>2,90</td></tr>
<tr><td>6</td><td>Buffalo Sabres</td><td>3,00</td></tr>
<tr><td>7</td><td>Philadelphia Flyers</td><td>3,00</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>3,09</td></tr>
<tr><td>9</td><td>Boston Bruins</td><td>3,20</td></tr>
<tr><td>10</td><td>Nashville Predators</td><td>3,29</td></tr>
<tr><td>11</td><td>Colorado Avalanche</td><td>3,29</td></tr>
<tr><td>12</td><td>Arizona Coyotes</td><td>3,57</td></tr>
<tr><td>13</td><td>St. Louis Blues</td><td>3,57</td></tr>
<tr><td>14</td><td>Vegas Golden Knights</td><td>3,64</td></tr>
<tr><td>15</td><td>Calgary Flames</td><td>3,80</td></tr>
<tr><td>16</td><td>Columbus Blue Jackets</td><td>3,80</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Florida Panthers</td><td>124,00%</td></tr>
<tr><td>2</td><td>Winnipeg Jets</td><td>119,72%</td></tr>
<tr><td>3</td><td>Pittsburgh Penguins</td><td>115,38%</td></tr>
<tr><td>4</td><td>Toronto Maple Leafs</td><td>114,04%</td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>113,79%</td></tr>
<tr><td>6</td><td>Arizona Coyotes</td><td>104,00%</td></tr>
<tr><td>7</td><td>Colorado Avalanche</td><td>97,83%</td></tr>
<tr><td>8</td><td>Vegas Golden Knights</td><td>90,20%</td></tr>
<tr><td>9</td><td>Philadelphia Flyers</td><td>85,71%</td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>85,71%</td></tr>
<tr><td>11</td><td>St. Louis Blues</td><td>84,00%</td></tr>
<tr><td>12</td><td>Montreal Canadiens</td><td>82,35%</td></tr>
<tr><td>13</td><td>Boston Bruins</td><td>81,25%</td></tr>
<tr><td>14</td><td>Nashville Predators</td><td>73,91%</td></tr>
<tr><td>15</td><td>Columbus Blue Jackets</td><td>73,68%</td></tr>
<tr><td>16</td><td>Calgary Flames</td><td>63,16%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 22,57%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Boston Bruins</td><td>31,25%</td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>30,00%</td></tr>
<tr><td>3</td><td>Arizona Coyotes</td><td>27,27%</td></tr>
<tr><td>4</td><td>Calgary Flames</td><td>27,27%</td></tr>
<tr><td>5</td><td>Nashville Predators</td><td>25,00%</td></tr>
<tr><td>6</td><td>Toronto Maple Leafs</td><td>24,14%</td></tr>
<tr><td>7</td><td>Florida Panthers</td><td>23,53%</td></tr>
<tr><td>8</td><td>Vegas Golden Knights</td><td>23,44%</td></tr>
<tr><td>9</td><td>Winnipeg Jets</td><td>22,73%</td></tr>
<tr><td>10</td><td>Colorado Avalanche</td><td>22,00%</td></tr>
<tr><td>11</td><td>St. Louis Blues</td><td>21,88%</td></tr>
<tr><td>12</td><td>Montreal Canadiens</td><td>18,75%</td></tr>
<tr><td>13</td><td>Philadelphia Flyers</td><td>18,52%</td></tr>
<tr><td>14</td><td>Pittsburgh Penguins</td><td>17,11%</td></tr>
<tr><td>15</td><td>Buffalo Sabres</td><td>13,64%</td></tr>
<tr><td>16</td><td>Columbus Blue Jackets</td><td>6,25%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 77,43%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Calgary Flames</td><td>100,00%</td></tr>
<tr><td>2</td><td>Toronto Maple Leafs</td><td>86,30%</td></tr>
<tr><td>3</td><td>Buffalo Sabres</td><td>85,19%</td></tr>
<tr><td>4</td><td>Montreal Canadiens</td><td>83,33%</td></tr>
<tr><td>5</td><td>Philadelphia Flyers</td><td>82,61%</td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>80,00%</td></tr>
<tr><td>7</td><td>Arizona Coyotes</td><td>80,00%</td></tr>
<tr><td>8</td><td>Columbus Blue Jackets</td><td>77,78%</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>76,67%</td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>76,09%</td></tr>
<tr><td>11</td><td>Florida Panthers</td><td>75,68%</td></tr>
<tr><td>12</td><td>Winnipeg Jets</td><td>73,58%</td></tr>
<tr><td>13</td><td>Boston Bruins</td><td>73,33%</td></tr>
<tr><td>14</td><td>Vegas Golden Knights</td><td>71,70%</td></tr>
<tr><td>15</td><td>Los Angeles Kings</td><td>70,18%</td></tr>
<tr><td>16</td><td>Nashville Predators</td><td>57,14%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Calgary Flames</td><td>127,27%</td></tr>
<tr><td>2</td><td>Toronto Maple Leafs</td><td>110,44%</td></tr>
<tr><td>3</td><td>Arizona Coyotes</td><td>107,27%</td></tr>
<tr><td>4</td><td>Boston Bruins</td><td>104,58%</td></tr>
<tr><td>5</td><td>Montreal Canadiens</td><td>102,08%</td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>101,88%</td></tr>
<tr><td>7</td><td>Philadelphia Flyers</td><td>101,13%</td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>100,18%</td></tr>
<tr><td>9</td><td>Florida Panthers</td><td>99,21%</td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>98,82%</td></tr>
<tr><td>11</td><td>Colorado Avalanche</td><td>98,67%</td></tr>
<tr><td>12</td><td>Winnipeg Jets</td><td>96,31%</td></tr>
<tr><td>13</td><td>Vegas Golden Knights</td><td>95,14%</td></tr>
<tr><td>14</td><td>Pittsburgh Penguins</td><td>93,19%</td></tr>
<tr><td>15</td><td>Columbus Blue Jackets</td><td>84,03%</td></tr>
<tr><td>16</td><td>Nashville Predators</td><td>82,14%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,48</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Toronto Maple Leafs</td><td>35,86</td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>35,07</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>34,70</td></tr>
<tr><td>4</td><td>Calgary Flames</td><td>34,40</td></tr>
<tr><td>5</td><td>Florida Panthers</td><td>34,30</td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>32,29</td></tr>
<tr><td>7</td><td>Arizona Coyotes</td><td>31,86</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>31,82</td></tr>
<tr><td>9</td><td>Vegas Golden Knights</td><td>31,07</td></tr>
<tr><td>10</td><td>Winnipeg Jets</td><td>30,84</td></tr>
<tr><td>11</td><td>Columbus Blue Jackets</td><td>30,80</td></tr>
<tr><td>12</td><td>Boston Bruins</td><td>30,80</td></tr>
<tr><td>13</td><td>Nashville Predators</td><td>30,29</td></tr>
<tr><td>14</td><td>Buffalo Sabres</td><td>30,00</td></tr>
<tr><td>15</td><td>Colorado Avalanche</td><td>29,71</td></tr>
<tr><td>16</td><td>Philadelphia Flyers</td><td>29,71</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,48</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Calgary Flames</td><td>29,60</td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>29,80</td></tr>
<tr><td>3</td><td>Pittsburgh Penguins</td><td>30,93</td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>31,00</td></tr>
<tr><td>5</td><td>Toronto Maple Leafs</td><td>31,24</td></tr>
<tr><td>6</td><td>Vegas Golden Knights</td><td>31,36</td></tr>
<tr><td>7</td><td>Nashville Predators</td><td>32,29</td></tr>
<tr><td>8</td><td>Boston Bruins</td><td>32,40</td></tr>
<tr><td>9</td><td>St. Louis Blues</td><td>32,86</td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>33,14</td></tr>
<tr><td>11</td><td>Columbus Blue Jackets</td><td>33,60</td></tr>
<tr><td>12</td><td>Colorado Avalanche</td><td>33,93</td></tr>
<tr><td>13</td><td>Winnipeg Jets</td><td>34,20</td></tr>
<tr><td>14</td><td>Montreal Canadiens</td><td>34,64</td></tr>
<tr><td>15</td><td>Philadelphia Flyers</td><td>34,71</td></tr>
<tr><td>16</td><td>Florida Panthers</td><td>35,50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Los Angeles Kings</td><td>116,44%</td></tr>
<tr><td>2</td><td>Calgary Flames</td><td>116,22%</td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>114,79%</td></tr>
<tr><td>4</td><td>Pittsburgh Penguins</td><td>113,36%</td></tr>
<tr><td>5</td><td>Arizona Coyotes</td><td>102,77%</td></tr>
<tr><td>6</td><td>Vegas Golden Knights</td><td>99,09%</td></tr>
<tr><td>7</td><td>St. Louis Blues</td><td>98,26%</td></tr>
<tr><td>8</td><td>Florida Panthers</td><td>96,62%</td></tr>
<tr><td>9</td><td>Boston Bruins</td><td>95,06%</td></tr>
<tr><td>10</td><td>Nashville Predators</td><td>93,81%</td></tr>
<tr><td>11</td><td>Montreal Canadiens</td><td>91,86%</td></tr>
<tr><td>12</td><td>Columbus Blue Jackets</td><td>91,67%</td></tr>
<tr><td>13</td><td>Buffalo Sabres</td><td>90,52%</td></tr>
<tr><td>14</td><td>Winnipeg Jets</td><td>90,18%</td></tr>
<tr><td>15</td><td>Colorado Avalanche</td><td>87,58%</td></tr>
<tr><td>16</td><td>Philadelphia Flyers</td><td>85,60%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8,63</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Calgary Flames</td><td>5,60</td></tr>
<tr><td>2</td><td>Nashville Predators</td><td>6,86</td></tr>
<tr><td>3</td><td>Pittsburgh Penguins</td><td>6,93</td></tr>
<tr><td>4</td><td>Los Angeles Kings</td><td>6,95</td></tr>
<tr><td>5</td><td>Toronto Maple Leafs</td><td>7,62</td></tr>
<tr><td>6</td><td>Vegas Golden Knights</td><td>7,86</td></tr>
<tr><td>7</td><td>Columbus Blue Jackets</td><td>8,40</td></tr>
<tr><td>8</td><td>St. Louis Blues</td><td>8,86</td></tr>
<tr><td>9</td><td>Winnipeg Jets</td><td>9,16</td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>9,43</td></tr>
<tr><td>11</td><td>Montreal Canadiens</td><td>9,45</td></tr>
<tr><td>12</td><td>Florida Panthers</td><td>9,90</td></tr>
<tr><td>13</td><td>Colorado Avalanche</td><td>10,21</td></tr>
<tr><td>14</td><td>Arizona Coyotes</td><td>10,29</td></tr>
<tr><td>15</td><td>Boston Bruins</td><td>10,40</td></tr>
<tr><td>16</td><td>Philadelphia Flyers</td><td>13,71</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,57</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Philadelphia Flyers</td><td>24,86</td></tr>
<tr><td>2</td><td>St. Louis Blues</td><td>22,57</td></tr>
<tr><td>3</td><td>Boston Bruins</td><td>22,00</td></tr>
<tr><td>4</td><td>Winnipeg Jets</td><td>21,08</td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>20,85</td></tr>
<tr><td>6</td><td>Buffalo Sabres</td><td>20,57</td></tr>
<tr><td>7</td><td>Nashville Predators</td><td>20,43</td></tr>
<tr><td>8</td><td>Pittsburgh Penguins</td><td>20,40</td></tr>
<tr><td>9</td><td>Florida Panthers</td><td>19,10</td></tr>
<tr><td>10</td><td>Arizona Coyotes</td><td>18,86</td></tr>
<tr><td>11</td><td>Columbus Blue Jackets</td><td>18,80</td></tr>
<tr><td>12</td><td>Colorado Avalanche</td><td>18,57</td></tr>
<tr><td>13</td><td>Toronto Maple Leafs</td><td>18,29</td></tr>
<tr><td>14</td><td>Montreal Canadiens</td><td>17,36</td></tr>
<tr><td>15</td><td>Vegas Golden Knights</td><td>15,50</td></tr>
<tr><td>16</td><td>Calgary Flames</td><td>15,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Arizona Coyotes</td><td>54,43%</td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>53,27%</td></tr>
<tr><td>3</td><td>Boston Bruins</td><td>52,31%</td></tr>
<tr><td>4</td><td>Montreal Canadiens</td><td>52,21%</td></tr>
<tr><td>5</td><td>Toronto Maple Leafs</td><td>51,99%</td></tr>
<tr><td>6</td><td>Calgary Flames</td><td>51,45%</td></tr>
<tr><td>7</td><td>Pittsburgh Penguins</td><td>51,00%</td></tr>
<tr><td>8</td><td>Colorado Avalanche</td><td>49,09%</td></tr>
<tr><td>9</td><td>St. Louis Blues</td><td>48,98%</td></tr>
<tr><td>10</td><td>Florida Panthers</td><td>48,96%</td></tr>
<tr><td>11</td><td>Vegas Golden Knights</td><td>48,60%</td></tr>
<tr><td>12</td><td>Winnipeg Jets</td><td>48,53%</td></tr>
<tr><td>13</td><td>Philadelphia Flyers</td><td>47,81%</td></tr>
<tr><td>14</td><td>Columbus Blue Jackets</td><td>45,86%</td></tr>
<tr><td>15</td><td>Buffalo Sabres</td><td>44,75%</td></tr>
<tr><td>16</td><td>Nashville Predators</td><td>44,50%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
