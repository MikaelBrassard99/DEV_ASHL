<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Team Stats</title>
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
<tr><td>Laval Chiefs</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>24</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>16</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>8</td><td>21</td><td>40</td><td>61</td></tr>
<tr><td>Rochester Americans</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>15</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>6</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>9</td><td>6</td><td>11</td><td>17</td></tr>
<tr><td>Charlotte Checkers</td><td>12</td><td>6</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>41</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>23</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>18</td><td>33</td><td>62</td><td>95</td></tr>
<tr><td>Lake Erie Monsters</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>22</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>10</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>12</td><td>14</td><td>27</td><td>41</td></tr>
<tr><td>Springfield Falcons</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>16</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>7</td><td>12</td><td>22</td><td>34</td></tr>
<tr><td>Grand Rapids Griffins</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>17</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>6</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>11</td><td>12</td><td>21</td><td>33</td></tr>
<tr><td>Oklahoma City Barons</td><td>21</td><td>13</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>69</td><td>65</td><td>9</td><td>6</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>36</td><td>12</td><td>7</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>36</td><td>29</td><td>69</td><td>123</td><td>192</td></tr>
<tr><td>Gatineau Olympiques</td><td>12</td><td>6</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>37</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>20</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>17</td><td>37</td><td>72</td><td>109</td></tr>
<tr><td>Milwaukee Admirals</td><td>17</td><td>10</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>60</td><td>52</td><td>9</td><td>6</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>25</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>27</td><td>60</td><td>111</td><td>171</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>16</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>7</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>14</td><td>27</td><td>41</td></tr>
<tr><td>Connecticut Whale</td><td>19</td><td>11</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>61</td><td>53</td><td>10</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>35</td><td>21</td><td>9</td><td>4</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>26</td><td>32</td><td>61</td><td>114</td><td>175</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>22</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>11</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>11</td><td>22</td><td>39</td><td>61</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>17</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>6</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>11</td><td>15</td><td>27</td><td>42</td></tr>
<tr><td>Norfolk Admirals</td><td>21</td><td>16</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>78</td><td>48</td><td>11</td><td>9</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>40</td><td>24</td><td>10</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>38</td><td>24</td><td>78</td><td>143</td><td>221</td></tr>
<tr><td>Chicago Wolves</td><td>11</td><td>5</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>32</td><td>38</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>17</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>21</td><td>32</td><td>59</td><td>91</td></tr>
<tr><td>CCCP Red Army</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>14</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>8</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>6</td><td>11</td><td>22</td><td>33</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Laval Chiefs</td><td>LAV</td><td>8</td><td>7</td><td>6</td><td>0</td><td>182</td><td>65</td><td>52</td><td>64</td><td>1</td><td>174</td><td>40</td><td>44</td><td>124</td><td>17</td><td>3</td><td>17,65%</td><td>20</td><td>5</td><td>75,00%</td><td>0</td><td>46,81%</td><td>51,64%</td><td>46,46%</td><td>131</td><td>153</td><td>80</td><td>43</td><td>107</td><td>40</td><td>0</td><td>0</td></tr>
<tr><td>Rochester Americans</td><td>RCH</td><td>2</td><td>3</td><td>1</td><td>0</td><td>120</td><td>39</td><td>26</td><td>54</td><td>1</td><td>128</td><td>42</td><td>30</td><td>72</td><td>7</td><td>1</td><td>14,29%</td><td>14</td><td>1</td><td>92,86%</td><td>0</td><td>53,46%</td><td>50,68%</td><td>47,46%</td><td>97</td><td>91</td><td>53</td><td>30</td><td>61</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>Charlotte Checkers</td><td>CHA</td><td>11</td><td>12</td><td>8</td><td>2</td><td>423</td><td>143</td><td>143</td><td>123</td><td>14</td><td>378</td><td>114</td><td>86</td><td>242</td><td>40</td><td>6</td><td>15,00%</td><td>41</td><td>12</td><td>70,73%</td><td>0</td><td>47,80%</td><td>50,82%</td><td>48,65%</td><td>284</td><td>297</td><td>160</td><td>89</td><td>205</td><td>78</td><td>0</td><td>0</td></tr>
<tr><td>Lake Erie Monsters</td><td>LKE</td><td>5</td><td>5</td><td>3</td><td>1</td><td>175</td><td>57</td><td>59</td><td>57</td><td>2</td><td>198</td><td>46</td><td>36</td><td>121</td><td>23</td><td>5</td><td>21,74%</td><td>17</td><td>6</td><td>64,71%</td><td>1</td><td>51,35%</td><td>52,61%</td><td>56,19%</td><td>145</td><td>138</td><td>82</td><td>44</td><td>93</td><td>41</td><td>0</td><td>0</td></tr>
<tr><td>Springfield Falcons</td><td>SPR</td><td>6</td><td>3</td><td>2</td><td>1</td><td>177</td><td>58</td><td>51</td><td>43</td><td>25</td><td>178</td><td>56</td><td>46</td><td>105</td><td>21</td><td>4</td><td>19,05%</td><td>21</td><td>1</td><td>95,24%</td><td>0</td><td>47,60%</td><td>45,58%</td><td>44,30%</td><td>130</td><td>128</td><td>70</td><td>40</td><td>87</td><td>35</td><td>0</td><td>0</td></tr>
<tr><td>Grand Rapids Griffins</td><td>GRG</td><td>4</td><td>4</td><td>4</td><td>0</td><td>151</td><td>46</td><td>56</td><td>49</td><td>0</td><td>174</td><td>48</td><td>50</td><td>90</td><td>9</td><td>3</td><td>33,33%</td><td>22</td><td>5</td><td>77,27%</td><td>0</td><td>56,06%</td><td>48,45%</td><td>47,50%</td><td>132</td><td>103</td><td>65</td><td>38</td><td>69</td><td>30</td><td>0</td><td>0</td></tr>
<tr><td>Oklahoma City Barons</td><td>OKC</td><td>23</td><td>20</td><td>21</td><td>5</td><td>715</td><td>226</td><td>256</td><td>217</td><td>16</td><td>671</td><td>182</td><td>164</td><td>454</td><td>74</td><td>10</td><td>13,51%</td><td>72</td><td>9</td><td>87,50%</td><td>0</td><td>50,33%</td><td>49,12%</td><td>50,87%</td><td>500</td><td>519</td><td>276</td><td>158</td><td>357</td><td>137</td><td>1</td><td>1</td></tr>
<tr><td>Gatineau Olympiques</td><td>GAT</td><td>18</td><td>5</td><td>13</td><td>1</td><td>407</td><td>128</td><td>127</td><td>143</td><td>9</td><td>385</td><td>104</td><td>90</td><td>230</td><td>38</td><td>11</td><td>28,95%</td><td>42</td><td>8</td><td>80,95%</td><td>0</td><td>46,10%</td><td>48,01%</td><td>47,15%</td><td>283</td><td>285</td><td>158</td><td>88</td><td>199</td><td>77</td><td>1</td><td>0</td></tr>
<tr><td>Milwaukee Admirals</td><td>MIL</td><td>17</td><td>22</td><td>20</td><td>1</td><td>559</td><td>168</td><td>186</td><td>197</td><td>8</td><td>566</td><td>162</td><td>112</td><td>299</td><td>63</td><td>10</td><td>15,87%</td><td>50</td><td>10</td><td>80,00%</td><td>0</td><td>53,51%</td><td>49,75%</td><td>50,54%</td><td>391</td><td>413</td><td>220</td><td>125</td><td>287</td><td>113</td><td>1</td><td>0</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>BRI</td><td>4</td><td>4</td><td>6</td><td>0</td><td>185</td><td>80</td><td>52</td><td>53</td><td>0</td><td>173</td><td>49</td><td>44</td><td>112</td><td>19</td><td>4</td><td>21,05%</td><td>20</td><td>3</td><td>85,00%</td><td>1</td><td>49,74%</td><td>45,54%</td><td>57,83%</td><td>137</td><td>148</td><td>75</td><td>43</td><td>103</td><td>39</td><td>1</td><td>0</td></tr>
<tr><td>Connecticut Whale</td><td>CTW</td><td>26</td><td>18</td><td>15</td><td>2</td><td>610</td><td>180</td><td>195</td><td>187</td><td>48</td><td>660</td><td>211</td><td>170</td><td>388</td><td>59</td><td>15</td><td>25,42%</td><td>77</td><td>16</td><td>79,22%</td><td>1</td><td>49,32%</td><td>49,63%</td><td>51,88%</td><td>486</td><td>450</td><td>250</td><td>144</td><td>309</td><td>121</td><td>2</td><td>0</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>WBS</td><td>9</td><td>4</td><td>8</td><td>1</td><td>262</td><td>92</td><td>75</td><td>93</td><td>2</td><td>277</td><td>65</td><td>54</td><td>171</td><td>26</td><td>3</td><td>11,54%</td><td>26</td><td>6</td><td>76,92%</td><td>1</td><td>45,33%</td><td>47,58%</td><td>57,36%</td><td>193</td><td>186</td><td>103</td><td>59</td><td>126</td><td>53</td><td>0</td><td>1</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>CHI</td><td>4</td><td>8</td><td>3</td><td>0</td><td>197</td><td>69</td><td>56</td><td>72</td><td>0</td><td>210</td><td>52</td><td>38</td><td>121</td><td>20</td><td>4</td><td>20,00%</td><td>18</td><td>4</td><td>77,78%</td><td>0</td><td>48,40%</td><td>51,67%</td><td>39,77%</td><td>146</td><td>138</td><td>80</td><td>46</td><td>93</td><td>41</td><td>0</td><td>0</td></tr>
<tr><td>Norfolk Admirals</td><td>NOR</td><td>27</td><td>30</td><td>20</td><td>1</td><td>722</td><td>237</td><td>255</td><td>216</td><td>14</td><td>705</td><td>198</td><td>150</td><td>401</td><td>83</td><td>23</td><td>27,71%</td><td>66</td><td>9</td><td>86,36%</td><td>1</td><td>52,92%</td><td>54,91%</td><td>51,04%</td><td>492</td><td>529</td><td>269</td><td>156</td><td>373</td><td>138</td><td>1</td><td>0</td></tr>
<tr><td>Chicago Wolves</td><td>CHI</td><td>13</td><td>10</td><td>8</td><td>1</td><td>340</td><td>90</td><td>120</td><td>127</td><td>3</td><td>356</td><td>93</td><td>75</td><td>189</td><td>36</td><td>6</td><td>16,67%</td><td>32</td><td>7</td><td>78,13%</td><td>1</td><td>47,97%</td><td>51,31%</td><td>47,40%</td><td>280</td><td>245</td><td>145</td><td>86</td><td>167</td><td>70</td><td>0</td><td>0</td></tr>
<tr><td>CCCP Red Army</td><td>CCC</td><td>4</td><td>5</td><td>2</td><td>0</td><td>158</td><td>45</td><td>58</td><td>55</td><td>0</td><td>150</td><td>51</td><td>32</td><td>100</td><td>18</td><td>0</td><td>0,00%</td><td>15</td><td>6</td><td>60,00%</td><td>0</td><td>49,14%</td><td>45,05%</td><td>45,71%</td><td>119</td><td>120</td><td>62</td><td>36</td><td>84</td><td>31</td><td>1</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,03</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Norfolk Admirals</td><td>3,71</td></tr>
<tr><td>2</td><td>Milwaukee Admirals</td><td>3,53</td></tr>
<tr><td>3</td><td>Laval Chiefs</td><td>3,50</td></tr>
<tr><td>4</td><td>Oklahoma City Barons</td><td>3,29</td></tr>
<tr><td>5</td><td>Connecticut Whale</td><td>3,21</td></tr>
<tr><td>6</td><td>Gatineau Olympiques</td><td>3,08</td></tr>
<tr><td>7</td><td>Chicago Wolves</td><td>2,91</td></tr>
<tr><td>8</td><td>Charlotte Checkers</td><td>2,75</td></tr>
<tr><td>9</td><td>Wilkes-Barre/Scranton Penguins</td><td>2,75</td></tr>
<tr><td>10</td><td>Chicoutimi Saguenéens</td><td>2,50</td></tr>
<tr><td>11</td><td>Grand Rapids Griffins</td><td>2,40</td></tr>
<tr><td>12</td><td>Springfield Falcons</td><td>2,40</td></tr>
<tr><td>13</td><td>Bridgeport Sound Tigers</td><td>2,33</td></tr>
<tr><td>14</td><td>Lake Erie Monsters</td><td>2,33</td></tr>
<tr><td>15</td><td>CCCP Red Army</td><td>2,20</td></tr>
<tr><td>16</td><td>Rochester Americans</td><td>1,50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,03</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Norfolk Admirals</td><td>2,29</td></tr>
<tr><td>2</td><td>Bridgeport Sound Tigers</td><td>2,67</td></tr>
<tr><td>3</td><td>Wilkes-Barre/Scranton Penguins</td><td>2,75</td></tr>
<tr><td>4</td><td>Connecticut Whale</td><td>2,79</td></tr>
<tr><td>5</td><td>CCCP Red Army</td><td>2,80</td></tr>
<tr><td>6</td><td>Chicoutimi Saguenéens</td><td>2,83</td></tr>
<tr><td>7</td><td>Milwaukee Admirals</td><td>3,06</td></tr>
<tr><td>8</td><td>Gatineau Olympiques</td><td>3,08</td></tr>
<tr><td>9</td><td>Oklahoma City Barons</td><td>3,10</td></tr>
<tr><td>10</td><td>Springfield Falcons</td><td>3,20</td></tr>
<tr><td>11</td><td>Grand Rapids Griffins</td><td>3,40</td></tr>
<tr><td>12</td><td>Charlotte Checkers</td><td>3,42</td></tr>
<tr><td>13</td><td>Chicago Wolves</td><td>3,45</td></tr>
<tr><td>14</td><td>Lake Erie Monsters</td><td>3,67</td></tr>
<tr><td>15</td><td>Rochester Americans</td><td>3,75</td></tr>
<tr><td>16</td><td>Laval Chiefs</td><td>4,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Norfolk Admirals</td><td>162,50%</td></tr>
<tr><td>2</td><td>Milwaukee Admirals</td><td>115,38%</td></tr>
<tr><td>3</td><td>Connecticut Whale</td><td>115,09%</td></tr>
<tr><td>4</td><td>Oklahoma City Barons</td><td>106,15%</td></tr>
<tr><td>5</td><td>Gatineau Olympiques</td><td>100,00%</td></tr>
<tr><td>6</td><td>Wilkes-Barre/Scranton Penguins</td><td>100,00%</td></tr>
<tr><td>7</td><td>Chicoutimi Saguenéens</td><td>88,24%</td></tr>
<tr><td>8</td><td>Laval Chiefs</td><td>87,50%</td></tr>
<tr><td>9</td><td>Bridgeport Sound Tigers</td><td>87,50%</td></tr>
<tr><td>10</td><td>Chicago Wolves</td><td>84,21%</td></tr>
<tr><td>11</td><td>Charlotte Checkers</td><td>80,49%</td></tr>
<tr><td>12</td><td>CCCP Red Army</td><td>78,57%</td></tr>
<tr><td>13</td><td>Springfield Falcons</td><td>75,00%</td></tr>
<tr><td>14</td><td>Grand Rapids Griffins</td><td>70,59%</td></tr>
<tr><td>15</td><td>Lake Erie Monsters</td><td>63,64%</td></tr>
<tr><td>16</td><td>Rochester Americans</td><td>40,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,53%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Grand Rapids Griffins</td><td>33,33%</td></tr>
<tr><td>2</td><td>Gatineau Olympiques</td><td>28,95%</td></tr>
<tr><td>3</td><td>Norfolk Admirals</td><td>27,71%</td></tr>
<tr><td>4</td><td>Connecticut Whale</td><td>25,42%</td></tr>
<tr><td>5</td><td>Lake Erie Monsters</td><td>21,74%</td></tr>
<tr><td>6</td><td>Bridgeport Sound Tigers</td><td>21,05%</td></tr>
<tr><td>7</td><td>Chicoutimi Saguenéens</td><td>20,00%</td></tr>
<tr><td>8</td><td>Springfield Falcons</td><td>19,05%</td></tr>
<tr><td>9</td><td>Laval Chiefs</td><td>17,65%</td></tr>
<tr><td>10</td><td>Chicago Wolves</td><td>16,67%</td></tr>
<tr><td>11</td><td>Milwaukee Admirals</td><td>15,87%</td></tr>
<tr><td>12</td><td>Charlotte Checkers</td><td>15,00%</td></tr>
<tr><td>13</td><td>Rochester Americans</td><td>14,29%</td></tr>
<tr><td>14</td><td>Oklahoma City Barons</td><td>13,51%</td></tr>
<tr><td>15</td><td>Wilkes-Barre/Scranton Penguins</td><td>11,54%</td></tr>
<tr><td>16</td><td>CCCP Red Army</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,47%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Springfield Falcons</td><td>95,24%</td></tr>
<tr><td>2</td><td>Rochester Americans</td><td>92,86%</td></tr>
<tr><td>3</td><td>Oklahoma City Barons</td><td>87,50%</td></tr>
<tr><td>4</td><td>Norfolk Admirals</td><td>86,36%</td></tr>
<tr><td>5</td><td>Bridgeport Sound Tigers</td><td>85,00%</td></tr>
<tr><td>6</td><td>Gatineau Olympiques</td><td>80,95%</td></tr>
<tr><td>7</td><td>Milwaukee Admirals</td><td>80,00%</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>79,22%</td></tr>
<tr><td>9</td><td>Chicago Wolves</td><td>78,13%</td></tr>
<tr><td>10</td><td>Chicoutimi Saguenéens</td><td>77,78%</td></tr>
<tr><td>11</td><td>Grand Rapids Griffins</td><td>77,27%</td></tr>
<tr><td>12</td><td>Wilkes-Barre/Scranton Penguins</td><td>76,92%</td></tr>
<tr><td>13</td><td>Laval Chiefs</td><td>75,00%</td></tr>
<tr><td>14</td><td>Charlotte Checkers</td><td>70,73%</td></tr>
<tr><td>15</td><td>Lake Erie Monsters</td><td>64,71%</td></tr>
<tr><td>16</td><td>CCCP Red Army</td><td>60,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Springfield Falcons</td><td>114,29%</td></tr>
<tr><td>2</td><td>Norfolk Admirals</td><td>114,07%</td></tr>
<tr><td>3</td><td>Grand Rapids Griffins</td><td>110,61%</td></tr>
<tr><td>4</td><td>Gatineau Olympiques</td><td>109,90%</td></tr>
<tr><td>5</td><td>Rochester Americans</td><td>107,14%</td></tr>
<tr><td>6</td><td>Bridgeport Sound Tigers</td><td>106,05%</td></tr>
<tr><td>7</td><td>Connecticut Whale</td><td>104,64%</td></tr>
<tr><td>8</td><td>Oklahoma City Barons</td><td>101,01%</td></tr>
<tr><td>9</td><td>Chicoutimi Saguenéens</td><td>97,78%</td></tr>
<tr><td>10</td><td>Milwaukee Admirals</td><td>95,87%</td></tr>
<tr><td>11</td><td>Chicago Wolves</td><td>94,79%</td></tr>
<tr><td>12</td><td>Laval Chiefs</td><td>92,65%</td></tr>
<tr><td>13</td><td>Wilkes-Barre/Scranton Penguins</td><td>88,46%</td></tr>
<tr><td>14</td><td>Lake Erie Monsters</td><td>86,45%</td></tr>
<tr><td>15</td><td>Charlotte Checkers</td><td>85,73%</td></tr>
<tr><td>16</td><td>CCCP Red Army</td><td>60,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,82</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Springfield Falcons</td><td>35,40</td></tr>
<tr><td>2</td><td>Charlotte Checkers</td><td>35,25</td></tr>
<tr><td>3</td><td>Norfolk Admirals</td><td>34,38</td></tr>
<tr><td>4</td><td>Oklahoma City Barons</td><td>34,05</td></tr>
<tr><td>5</td><td>Gatineau Olympiques</td><td>33,92</td></tr>
<tr><td>6</td><td>Milwaukee Admirals</td><td>32,88</td></tr>
<tr><td>7</td><td>Chicoutimi Saguenéens</td><td>32,83</td></tr>
<tr><td>8</td><td>Wilkes-Barre/Scranton Penguins</td><td>32,75</td></tr>
<tr><td>9</td><td>Connecticut Whale</td><td>32,11</td></tr>
<tr><td>10</td><td>CCCP Red Army</td><td>31,60</td></tr>
<tr><td>11</td><td>Chicago Wolves</td><td>30,91</td></tr>
<tr><td>12</td><td>Bridgeport Sound Tigers</td><td>30,83</td></tr>
<tr><td>13</td><td>Laval Chiefs</td><td>30,33</td></tr>
<tr><td>14</td><td>Grand Rapids Griffins</td><td>30,20</td></tr>
<tr><td>15</td><td>Rochester Americans</td><td>30,00</td></tr>
<tr><td>16</td><td>Lake Erie Monsters</td><td>29,17</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,82</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Bridgeport Sound Tigers</td><td>28,83</td></tr>
<tr><td>2</td><td>Laval Chiefs</td><td>29,00</td></tr>
<tr><td>3</td><td>CCCP Red Army</td><td>30,00</td></tr>
<tr><td>4</td><td>Charlotte Checkers</td><td>31,50</td></tr>
<tr><td>5</td><td>Oklahoma City Barons</td><td>31,95</td></tr>
<tr><td>6</td><td>Rochester Americans</td><td>32,00</td></tr>
<tr><td>7</td><td>Gatineau Olympiques</td><td>32,08</td></tr>
<tr><td>8</td><td>Chicago Wolves</td><td>32,36</td></tr>
<tr><td>9</td><td>Lake Erie Monsters</td><td>33,00</td></tr>
<tr><td>10</td><td>Milwaukee Admirals</td><td>33,29</td></tr>
<tr><td>11</td><td>Norfolk Admirals</td><td>33,57</td></tr>
<tr><td>12</td><td>Wilkes-Barre/Scranton Penguins</td><td>34,63</td></tr>
<tr><td>13</td><td>Connecticut Whale</td><td>34,74</td></tr>
<tr><td>14</td><td>Grand Rapids Griffins</td><td>34,80</td></tr>
<tr><td>15</td><td>Chicoutimi Saguenéens</td><td>35,00</td></tr>
<tr><td>16</td><td>Springfield Falcons</td><td>35,60</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Charlotte Checkers</td><td>111,90%</td></tr>
<tr><td>2</td><td>Bridgeport Sound Tigers</td><td>106,94%</td></tr>
<tr><td>3</td><td>Oklahoma City Barons</td><td>106,56%</td></tr>
<tr><td>4</td><td>Gatineau Olympiques</td><td>105,71%</td></tr>
<tr><td>5</td><td>CCCP Red Army</td><td>105,33%</td></tr>
<tr><td>6</td><td>Laval Chiefs</td><td>104,60%</td></tr>
<tr><td>7</td><td>Norfolk Admirals</td><td>102,41%</td></tr>
<tr><td>8</td><td>Springfield Falcons</td><td>99,44%</td></tr>
<tr><td>9</td><td>Milwaukee Admirals</td><td>98,76%</td></tr>
<tr><td>10</td><td>Chicago Wolves</td><td>95,51%</td></tr>
<tr><td>11</td><td>Wilkes-Barre/Scranton Penguins</td><td>94,58%</td></tr>
<tr><td>12</td><td>Chicoutimi Saguenéens</td><td>93,81%</td></tr>
<tr><td>13</td><td>Rochester Americans</td><td>93,75%</td></tr>
<tr><td>14</td><td>Connecticut Whale</td><td>92,42%</td></tr>
<tr><td>15</td><td>Lake Erie Monsters</td><td>88,38%</td></tr>
<tr><td>16</td><td>Grand Rapids Griffins</td><td>86,78%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7,45</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Lake Erie Monsters</td><td>6,00</td></tr>
<tr><td>2</td><td>Chicoutimi Saguenéens</td><td>6,33</td></tr>
<tr><td>3</td><td>CCCP Red Army</td><td>6,40</td></tr>
<tr><td>4</td><td>Milwaukee Admirals</td><td>6,59</td></tr>
<tr><td>5</td><td>Wilkes-Barre/Scranton Penguins</td><td>6,75</td></tr>
<tr><td>6</td><td>Chicago Wolves</td><td>6,82</td></tr>
<tr><td>7</td><td>Norfolk Admirals</td><td>7,14</td></tr>
<tr><td>8</td><td>Charlotte Checkers</td><td>7,17</td></tr>
<tr><td>9</td><td>Laval Chiefs</td><td>7,33</td></tr>
<tr><td>10</td><td>Bridgeport Sound Tigers</td><td>7,33</td></tr>
<tr><td>11</td><td>Rochester Americans</td><td>7,50</td></tr>
<tr><td>12</td><td>Gatineau Olympiques</td><td>7,50</td></tr>
<tr><td>13</td><td>Oklahoma City Barons</td><td>7,81</td></tr>
<tr><td>14</td><td>Connecticut Whale</td><td>8,95</td></tr>
<tr><td>15</td><td>Springfield Falcons</td><td>9,20</td></tr>
<tr><td>16</td><td>Grand Rapids Griffins</td><td>10,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,63</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Oklahoma City Barons</td><td>21,62</td></tr>
<tr><td>2</td><td>Wilkes-Barre/Scranton Penguins</td><td>21,38</td></tr>
<tr><td>3</td><td>Springfield Falcons</td><td>21,00</td></tr>
<tr><td>4</td><td>Laval Chiefs</td><td>20,67</td></tr>
<tr><td>5</td><td>Connecticut Whale</td><td>20,42</td></tr>
<tr><td>6</td><td>Charlotte Checkers</td><td>20,17</td></tr>
<tr><td>7</td><td>Chicoutimi Saguenéens</td><td>20,17</td></tr>
<tr><td>8</td><td>Lake Erie Monsters</td><td>20,17</td></tr>
<tr><td>9</td><td>CCCP Red Army</td><td>20,00</td></tr>
<tr><td>10</td><td>Gatineau Olympiques</td><td>19,17</td></tr>
<tr><td>11</td><td>Norfolk Admirals</td><td>19,10</td></tr>
<tr><td>12</td><td>Bridgeport Sound Tigers</td><td>18,67</td></tr>
<tr><td>13</td><td>Grand Rapids Griffins</td><td>18,00</td></tr>
<tr><td>14</td><td>Rochester Americans</td><td>18,00</td></tr>
<tr><td>15</td><td>Milwaukee Admirals</td><td>17,59</td></tr>
<tr><td>16</td><td>Chicago Wolves</td><td>17,18</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Norfolk Admirals</td><td>53,38%</td></tr>
<tr><td>2</td><td>Lake Erie Monsters</td><td>52,79%</td></tr>
<tr><td>3</td><td>Grand Rapids Griffins</td><td>51,71%</td></tr>
<tr><td>4</td><td>Milwaukee Admirals</td><td>51,46%</td></tr>
<tr><td>5</td><td>Rochester Americans</td><td>51,37%</td></tr>
<tr><td>6</td><td>Oklahoma City Barons</td><td>49,90%</td></tr>
<tr><td>7</td><td>Connecticut Whale</td><td>49,88%</td></tr>
<tr><td>8</td><td>Charlotte Checkers</td><td>49,31%</td></tr>
<tr><td>9</td><td>Bridgeport Sound Tigers</td><td>49,28%</td></tr>
<tr><td>10</td><td>Chicago Wolves</td><td>49,18%</td></tr>
<tr><td>11</td><td>Laval Chiefs</td><td>48,80%</td></tr>
<tr><td>12</td><td>Wilkes-Barre/Scranton Penguins</td><td>48,35%</td></tr>
<tr><td>13</td><td>Chicoutimi Saguenéens</td><td>48,26%</td></tr>
<tr><td>14</td><td>Gatineau Olympiques</td><td>47,10%</td></tr>
<tr><td>15</td><td>CCCP Red Army</td><td>46,76%</td></tr>
<tr><td>16</td><td>Springfield Falcons</td><td>46,22%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
