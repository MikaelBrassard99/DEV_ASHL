<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Farm Team Stats</title>
<script type="text/javascript" src="ASHL6-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.0.9.9" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style type="text/css">
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
<link href="ASHL6-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL6-STHS.db";
$LangOverwrite = (boolean)FALSE;
$lang = "en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 7; /* Show Webpage Top Menu */
include "Menu.php";?>
<script type="text/javascript">$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Laval Chiefs</td><td>19</td><td>15</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>60</td><td>34</td><td>9</td><td>7</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>30</td><td>19</td><td>10</td><td>8</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>30</td><td>15</td><td>60</td><td>98</td><td>158</td></tr>
<tr><td>Providence Bruins</td><td>23</td><td>16</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>65</td><td>55</td><td>13</td><td>10</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>27</td><td>10</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>28</td><td>65</td><td>107</td><td>172</td></tr>
<tr><td>Abbotsford Heat</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>14</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>7</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>7</td><td>11</td><td>16</td><td>27</td></tr>
<tr><td>Charlotte Checkers</td><td>19</td><td>11</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>58</td><td>45</td><td>10</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>34</td><td>24</td><td>9</td><td>4</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>21</td><td>58</td><td>99</td><td>157</td></tr>
<tr><td>Rockford IceHogs</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>14</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>8</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>6</td><td>7</td><td>13</td><td>20</td></tr>
<tr><td>Las Vegas Gamblers</td><td>9</td><td>4</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>29</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>17</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>12</td><td>22</td><td>35</td><td>57</td></tr>
<tr><td>San Antonio Rampage</td><td>10</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>26</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>12</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>14</td><td>28</td><td>47</td><td>75</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>15</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>7</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>8</td><td>11</td><td>20</td><td>31</td></tr>
<tr><td>Milwaukee Admirals</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>19</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>10</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>9</td><td>14</td><td>19</td><td>33</td></tr>
<tr><td>Adirondack Phantoms</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>20</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>12</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>8</td><td>13</td><td>20</td><td>33</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>16</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>7</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>9</td><td>9</td><td>14</td><td>23</td></tr>
<tr><td>Cleveland Knights</td><td>10</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>24</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>15</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>9</td><td>25</td><td>39</td><td>64</td></tr>
<tr><td>Peoria Rivermen</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>13</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>6</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>7</td><td>4</td><td>7</td><td>11</td></tr>
<tr><td>Norfolk Admirals</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>16</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>7</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>9</td><td>12</td><td>19</td><td>31</td></tr>
<tr><td>Chicago Wolves</td><td>16</td><td>8</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>41</td><td>37</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>16</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>21</td><td>41</td><td>65</td><td>106</td></tr>
<tr><td>Manitoba Moose</td><td>11</td><td>7</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>31</td><td>34</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>16</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>18</td><td>31</td><td>56</td><td>87</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Laval Chiefs</td><td>LAV</td><td>15</td><td>19</td><td>22</td><td>4</td><td>593</td><td>180</td><td>179</td><td>210</td><td>24</td><td>481</td><td>174</td><td>116</td><td>328</td><td>48</td><td>10</td><td>20,83%</td><td>44</td><td>11</td><td>75,00%</td><td>1</td><td>50,24%</td><td>54,35%</td><td>51,61%</td><td>389</td><td>430</td><td>365</td><td>176</td><td>248</td><td>184</td><td>3</td><td>0</td></tr>
<tr><td>Providence Bruins</td><td>PRO</td><td>11</td><td>22</td><td>25</td><td>7</td><td>699</td><td>193</td><td>238</td><td>225</td><td>43</td><td>676</td><td>227</td><td>199</td><td>406</td><td>68</td><td>10</td><td>14,71%</td><td>77</td><td>11</td><td>85,71%</td><td>2</td><td>50,77%</td><td>50,75%</td><td>52,87%</td><td>505</td><td>503</td><td>426</td><td>222</td><td>289</td><td>206</td><td>1</td><td>0</td></tr>
<tr><td>Abbotsford Heat</td><td>ABB</td><td>2</td><td>1</td><td>8</td><td>0</td><td>133</td><td>37</td><td>45</td><td>47</td><td>4</td><td>151</td><td>40</td><td>28</td><td>85</td><td>8</td><td>0</td><td>0,00%</td><td>14</td><td>3</td><td>78,57%</td><td>0</td><td>46,36%</td><td>44,66%</td><td>50,00%</td><td>112</td><td>109</td><td>90</td><td>45</td><td>61</td><td>45</td><td>0</td><td>0</td></tr>
<tr><td>Charlotte Checkers</td><td>CHA</td><td>11</td><td>27</td><td>16</td><td>4</td><td>532</td><td>137</td><td>211</td><td>159</td><td>25</td><td>541</td><td>170</td><td>206</td><td>312</td><td>57</td><td>11</td><td>19,30%</td><td>49</td><td>8</td><td>83,67%</td><td>0</td><td>50,74%</td><td>50,96%</td><td>53,99%</td><td>412</td><td>404</td><td>357</td><td>174</td><td>220</td><td>185</td><td>1</td><td>1</td></tr>
<tr><td>Rockford IceHogs</td><td>RFD</td><td>0</td><td>4</td><td>3</td><td>0</td><td>116</td><td>42</td><td>35</td><td>39</td><td>0</td><td>110</td><td>34</td><td>32</td><td>66</td><td>10</td><td>2</td><td>20,00%</td><td>16</td><td>3</td><td>81,25%</td><td>0</td><td>42,71%</td><td>47,52%</td><td>42,11%</td><td>86</td><td>84</td><td>69</td><td>35</td><td>50</td><td>34</td><td>0</td><td>0</td></tr>
<tr><td>Las Vegas Gamblers</td><td>LVG</td><td>9</td><td>6</td><td>5</td><td>2</td><td>258</td><td>95</td><td>81</td><td>72</td><td>10</td><td>263</td><td>80</td><td>34</td><td>137</td><td>25</td><td>6</td><td>24,00%</td><td>12</td><td>0</td><td>100,00%</td><td>0</td><td>48,63%</td><td>49,75%</td><td>47,93%</td><td>196</td><td>195</td><td>162</td><td>83</td><td>115</td><td>80</td><td>1</td><td>2</td></tr>
<tr><td>San Antonio Rampage</td><td>SAR</td><td>10</td><td>5</td><td>12</td><td>1</td><td>281</td><td>84</td><td>88</td><td>108</td><td>1</td><td>272</td><td>82</td><td>132</td><td>176</td><td>32</td><td>6</td><td>18,75%</td><td>46</td><td>3</td><td>93,48%</td><td>1</td><td>50,64%</td><td>49,57%</td><td>45,27%</td><td>213</td><td>207</td><td>183</td><td>94</td><td>113</td><td>89</td><td>0</td><td>0</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>TRD</td><td>1</td><td>5</td><td>5</td><td>0</td><td>125</td><td>32</td><td>46</td><td>47</td><td>0</td><td>145</td><td>45</td><td>48</td><td>90</td><td>8</td><td>2</td><td>25,00%</td><td>14</td><td>2</td><td>85,71%</td><td>0</td><td>50,00%</td><td>47,87%</td><td>39,19%</td><td>105</td><td>103</td><td>92</td><td>47</td><td>59</td><td>43</td><td>0</td><td>0</td></tr>
<tr><td>Milwaukee Admirals</td><td>MIL</td><td>2</td><td>5</td><td>6</td><td>1</td><td>175</td><td>50</td><td>59</td><td>65</td><td>1</td><td>153</td><td>56</td><td>59</td><td>101</td><td>20</td><td>6</td><td>30,00%</td><td>22</td><td>7</td><td>68,18%</td><td>0</td><td>59,38%</td><td>59,03%</td><td>52,81%</td><td>125</td><td>131</td><td>105</td><td>54</td><td>75</td><td>53</td><td>0</td><td>0</td></tr>
<tr><td>Adirondack Phantoms</td><td>ADK</td><td>3</td><td>2</td><td>8</td><td>0</td><td>164</td><td>69</td><td>39</td><td>56</td><td>0</td><td>176</td><td>36</td><td>66</td><td>99</td><td>25</td><td>2</td><td>8,00%</td><td>18</td><td>3</td><td>83,33%</td><td>1</td><td>49,65%</td><td>45,77%</td><td>57,61%</td><td>123</td><td>128</td><td>109</td><td>55</td><td>72</td><td>55</td><td>0</td><td>1</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>CHI</td><td>5</td><td>3</td><td>1</td><td>0</td><td>145</td><td>38</td><td>68</td><td>37</td><td>2</td><td>143</td><td>40</td><td>38</td><td>84</td><td>18</td><td>3</td><td>16,67%</td><td>14</td><td>2</td><td>85,71%</td><td>0</td><td>53,40%</td><td>52,68%</td><td>45,31%</td><td>110</td><td>105</td><td>90</td><td>48</td><td>60</td><td>46</td><td>0</td><td>0</td></tr>
<tr><td>Cleveland Knights</td><td>CLE</td><td>7</td><td>7</td><td>10</td><td>1</td><td>255</td><td>86</td><td>78</td><td>82</td><td>9</td><td>288</td><td>92</td><td>63</td><td>167</td><td>28</td><td>6</td><td>21,43%</td><td>24</td><td>4</td><td>83,33%</td><td>0</td><td>54,34%</td><td>55,02%</td><td>53,80%</td><td>218</td><td>216</td><td>185</td><td>93</td><td>126</td><td>91</td><td>0</td><td>0</td></tr>
<tr><td>Peoria Rivermen</td><td>PEO</td><td>2</td><td>1</td><td>1</td><td>0</td><td>63</td><td>20</td><td>23</td><td>17</td><td>3</td><td>102</td><td>29</td><td>26</td><td>55</td><td>10</td><td>2</td><td>20,00%</td><td>13</td><td>6</td><td>53,85%</td><td>0</td><td>46,91%</td><td>49,35%</td><td>35,71%</td><td>86</td><td>78</td><td>93</td><td>42</td><td>34</td><td>47</td><td>0</td><td>0</td></tr>
<tr><td>Norfolk Admirals</td><td>NOR</td><td>2</td><td>3</td><td>7</td><td>0</td><td>122</td><td>27</td><td>48</td><td>32</td><td>15</td><td>115</td><td>42</td><td>20</td><td>95</td><td>11</td><td>0</td><td>0,00%</td><td>10</td><td>3</td><td>70,00%</td><td>1</td><td>44,83%</td><td>45,36%</td><td>63,08%</td><td>92</td><td>97</td><td>88</td><td>40</td><td>53</td><td>46</td><td>0</td><td>0</td></tr>
<tr><td>Chicago Wolves</td><td>CHI</td><td>15</td><td>14</td><td>12</td><td>0</td><td>425</td><td>133</td><td>137</td><td>151</td><td>4</td><td>453</td><td>168</td><td>123</td><td>258</td><td>43</td><td>11</td><td>25,58%</td><td>44</td><td>12</td><td>72,73%</td><td>1</td><td>43,54%</td><td>45,48%</td><td>48,84%</td><td>355</td><td>337</td><td>292</td><td>148</td><td>188</td><td>147</td><td>1</td><td>1</td></tr>
<tr><td>Manitoba Moose</td><td>MAN</td><td>5</td><td>11</td><td>11</td><td>4</td><td>294</td><td>101</td><td>91</td><td>88</td><td>14</td><td>311</td><td>90</td><td>116</td><td>186</td><td>34</td><td>6</td><td>17,65%</td><td>28</td><td>5</td><td>82,14%</td><td>1</td><td>47,56%</td><td>50,00%</td><td>41,52%</td><td>242</td><td>242</td><td>219</td><td>111</td><td>139</td><td>105</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,63</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>3,16</td></tr>
<tr><td>2</td><td>Charlotte Checkers</td><td>3,05</td></tr>
<tr><td>3</td><td>Norfolk Admirals</td><td>3,00</td></tr>
<tr><td>4</td><td>Providence Bruins</td><td>2,83</td></tr>
<tr><td>5</td><td>Manitoba Moose</td><td>2,82</td></tr>
<tr><td>6</td><td>San Antonio Rampage</td><td>2,80</td></tr>
<tr><td>7</td><td>Chicago Wolves</td><td>2,56</td></tr>
<tr><td>8</td><td>Cleveland Knights</td><td>2,50</td></tr>
<tr><td>9</td><td>Las Vegas Gamblers</td><td>2,44</td></tr>
<tr><td>10</td><td>Milwaukee Admirals</td><td>2,33</td></tr>
<tr><td>11</td><td>Trois-Rivières Draveurs</td><td>2,20</td></tr>
<tr><td>12</td><td>Abbotsford Heat</td><td>2,20</td></tr>
<tr><td>13</td><td>Adirondack Phantoms</td><td>2,17</td></tr>
<tr><td>14</td><td>Chicoutimi Saguenéens</td><td>1,80</td></tr>
<tr><td>15</td><td>Rockford IceHogs</td><td>1,75</td></tr>
<tr><td>16</td><td>Peoria Rivermen</td><td>1,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,63</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>1,79</td></tr>
<tr><td>2</td><td>Chicago Wolves</td><td>2,31</td></tr>
<tr><td>3</td><td>Charlotte Checkers</td><td>2,37</td></tr>
<tr><td>4</td><td>Providence Bruins</td><td>2,39</td></tr>
<tr><td>5</td><td>Cleveland Knights</td><td>2,40</td></tr>
<tr><td>6</td><td>San Antonio Rampage</td><td>2,60</td></tr>
<tr><td>7</td><td>Abbotsford Heat</td><td>2,80</td></tr>
<tr><td>8</td><td>Trois-Rivières Draveurs</td><td>3,00</td></tr>
<tr><td>9</td><td>Manitoba Moose</td><td>3,09</td></tr>
<tr><td>10</td><td>Milwaukee Admirals</td><td>3,17</td></tr>
<tr><td>11</td><td>Chicoutimi Saguenéens</td><td>3,20</td></tr>
<tr><td>12</td><td>Las Vegas Gamblers</td><td>3,22</td></tr>
<tr><td>13</td><td>Peoria Rivermen</td><td>3,25</td></tr>
<tr><td>14</td><td>Adirondack Phantoms</td><td>3,33</td></tr>
<tr><td>15</td><td>Rockford IceHogs</td><td>3,50</td></tr>
<tr><td>16</td><td>Norfolk Admirals</td><td>4,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>176,47%</td></tr>
<tr><td>2</td><td>Charlotte Checkers</td><td>128,89%</td></tr>
<tr><td>3</td><td>Providence Bruins</td><td>118,18%</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>110,81%</td></tr>
<tr><td>5</td><td>San Antonio Rampage</td><td>107,69%</td></tr>
<tr><td>6</td><td>Cleveland Knights</td><td>104,17%</td></tr>
<tr><td>7</td><td>Manitoba Moose</td><td>91,18%</td></tr>
<tr><td>8</td><td>Abbotsford Heat</td><td>78,57%</td></tr>
<tr><td>9</td><td>Las Vegas Gamblers</td><td>75,86%</td></tr>
<tr><td>10</td><td>Norfolk Admirals</td><td>75,00%</td></tr>
<tr><td>11</td><td>Milwaukee Admirals</td><td>73,68%</td></tr>
<tr><td>12</td><td>Trois-Rivières Draveurs</td><td>73,33%</td></tr>
<tr><td>13</td><td>Adirondack Phantoms</td><td>65,00%</td></tr>
<tr><td>14</td><td>Chicoutimi Saguenéens</td><td>56,25%</td></tr>
<tr><td>15</td><td>Rockford IceHogs</td><td>50,00%</td></tr>
<tr><td>16</td><td>Peoria Rivermen</td><td>30,77%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18,65%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Milwaukee Admirals</td><td>30,00%</td></tr>
<tr><td>2</td><td>Chicago Wolves</td><td>25,58%</td></tr>
<tr><td>3</td><td>Trois-Rivières Draveurs</td><td>25,00%</td></tr>
<tr><td>4</td><td>Las Vegas Gamblers</td><td>24,00%</td></tr>
<tr><td>5</td><td>Cleveland Knights</td><td>21,43%</td></tr>
<tr><td>6</td><td>Laval Chiefs</td><td>20,83%</td></tr>
<tr><td>7</td><td>Peoria Rivermen</td><td>20,00%</td></tr>
<tr><td>8</td><td>Rockford IceHogs</td><td>20,00%</td></tr>
<tr><td>9</td><td>Charlotte Checkers</td><td>19,30%</td></tr>
<tr><td>10</td><td>San Antonio Rampage</td><td>18,75%</td></tr>
<tr><td>11</td><td>Manitoba Moose</td><td>17,65%</td></tr>
<tr><td>12</td><td>Chicoutimi Saguenéens</td><td>16,67%</td></tr>
<tr><td>13</td><td>Providence Bruins</td><td>14,71%</td></tr>
<tr><td>14</td><td>Adirondack Phantoms</td><td>8,00%</td></tr>
<tr><td>15</td><td>Abbotsford Heat</td><td>0,00%</td></tr>
<tr><td>16</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 81,35%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Las Vegas Gamblers</td><td>100,00%</td></tr>
<tr><td>2</td><td>San Antonio Rampage</td><td>93,48%</td></tr>
<tr><td>3</td><td>Providence Bruins</td><td>85,71%</td></tr>
<tr><td>4</td><td>Chicoutimi Saguenéens</td><td>85,71%</td></tr>
<tr><td>5</td><td>Trois-Rivières Draveurs</td><td>85,71%</td></tr>
<tr><td>6</td><td>Charlotte Checkers</td><td>83,67%</td></tr>
<tr><td>7</td><td>Cleveland Knights</td><td>83,33%</td></tr>
<tr><td>8</td><td>Adirondack Phantoms</td><td>83,33%</td></tr>
<tr><td>9</td><td>Manitoba Moose</td><td>82,14%</td></tr>
<tr><td>10</td><td>Rockford IceHogs</td><td>81,25%</td></tr>
<tr><td>11</td><td>Abbotsford Heat</td><td>78,57%</td></tr>
<tr><td>12</td><td>Laval Chiefs</td><td>75,00%</td></tr>
<tr><td>13</td><td>Chicago Wolves</td><td>72,73%</td></tr>
<tr><td>14</td><td>Norfolk Admirals</td><td>70,00%</td></tr>
<tr><td>15</td><td>Milwaukee Admirals</td><td>68,18%</td></tr>
<tr><td>16</td><td>Peoria Rivermen</td><td>53,85%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Las Vegas Gamblers</td><td>124,00%</td></tr>
<tr><td>2</td><td>San Antonio Rampage</td><td>112,23%</td></tr>
<tr><td>3</td><td>Trois-Rivières Draveurs</td><td>110,71%</td></tr>
<tr><td>4</td><td>Cleveland Knights</td><td>104,76%</td></tr>
<tr><td>5</td><td>Charlotte Checkers</td><td>102,97%</td></tr>
<tr><td>6</td><td>Chicoutimi Saguenéens</td><td>102,38%</td></tr>
<tr><td>7</td><td>Rockford IceHogs</td><td>101,25%</td></tr>
<tr><td>8</td><td>Providence Bruins</td><td>100,42%</td></tr>
<tr><td>9</td><td>Manitoba Moose</td><td>99,79%</td></tr>
<tr><td>10</td><td>Chicago Wolves</td><td>98,31%</td></tr>
<tr><td>11</td><td>Milwaukee Admirals</td><td>98,18%</td></tr>
<tr><td>12</td><td>Laval Chiefs</td><td>95,83%</td></tr>
<tr><td>13</td><td>Adirondack Phantoms</td><td>91,33%</td></tr>
<tr><td>14</td><td>Abbotsford Heat</td><td>78,57%</td></tr>
<tr><td>15</td><td>Peoria Rivermen</td><td>73,85%</td></tr>
<tr><td>16</td><td>Norfolk Admirals</td><td>70,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28,08</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>31,21</td></tr>
<tr><td>2</td><td>Norfolk Admirals</td><td>30,50</td></tr>
<tr><td>3</td><td>Providence Bruins</td><td>30,39</td></tr>
<tr><td>4</td><td>Milwaukee Admirals</td><td>29,17</td></tr>
<tr><td>5</td><td>Chicoutimi Saguenéens</td><td>29,00</td></tr>
<tr><td>6</td><td>Rockford IceHogs</td><td>29,00</td></tr>
<tr><td>7</td><td>Las Vegas Gamblers</td><td>28,67</td></tr>
<tr><td>8</td><td>San Antonio Rampage</td><td>28,10</td></tr>
<tr><td>9</td><td>Charlotte Checkers</td><td>28,00</td></tr>
<tr><td>10</td><td>Adirondack Phantoms</td><td>27,33</td></tr>
<tr><td>11</td><td>Manitoba Moose</td><td>26,73</td></tr>
<tr><td>12</td><td>Abbotsford Heat</td><td>26,60</td></tr>
<tr><td>13</td><td>Chicago Wolves</td><td>26,56</td></tr>
<tr><td>14</td><td>Cleveland Knights</td><td>25,50</td></tr>
<tr><td>15</td><td>Trois-Rivières Draveurs</td><td>25,00</td></tr>
<tr><td>16</td><td>Peoria Rivermen</td><td>15,75</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28,08</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>25,32</td></tr>
<tr><td>2</td><td>Peoria Rivermen</td><td>25,50</td></tr>
<tr><td>3</td><td>Milwaukee Admirals</td><td>25,50</td></tr>
<tr><td>4</td><td>San Antonio Rampage</td><td>27,20</td></tr>
<tr><td>5</td><td>Rockford IceHogs</td><td>27,50</td></tr>
<tr><td>6</td><td>Manitoba Moose</td><td>28,27</td></tr>
<tr><td>7</td><td>Chicago Wolves</td><td>28,31</td></tr>
<tr><td>8</td><td>Charlotte Checkers</td><td>28,47</td></tr>
<tr><td>9</td><td>Chicoutimi Saguenéens</td><td>28,60</td></tr>
<tr><td>10</td><td>Norfolk Admirals</td><td>28,75</td></tr>
<tr><td>11</td><td>Cleveland Knights</td><td>28,80</td></tr>
<tr><td>12</td><td>Trois-Rivières Draveurs</td><td>29,00</td></tr>
<tr><td>13</td><td>Las Vegas Gamblers</td><td>29,22</td></tr>
<tr><td>14</td><td>Adirondack Phantoms</td><td>29,33</td></tr>
<tr><td>15</td><td>Providence Bruins</td><td>29,39</td></tr>
<tr><td>16</td><td>Abbotsford Heat</td><td>30,20</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>123,28%</td></tr>
<tr><td>2</td><td>Milwaukee Admirals</td><td>114,38%</td></tr>
<tr><td>3</td><td>Norfolk Admirals</td><td>106,09%</td></tr>
<tr><td>4</td><td>Rockford IceHogs</td><td>105,45%</td></tr>
<tr><td>5</td><td>Providence Bruins</td><td>103,40%</td></tr>
<tr><td>6</td><td>San Antonio Rampage</td><td>103,31%</td></tr>
<tr><td>7</td><td>Chicoutimi Saguenéens</td><td>101,40%</td></tr>
<tr><td>8</td><td>Charlotte Checkers</td><td>98,34%</td></tr>
<tr><td>9</td><td>Las Vegas Gamblers</td><td>98,10%</td></tr>
<tr><td>10</td><td>Manitoba Moose</td><td>94,53%</td></tr>
<tr><td>11</td><td>Chicago Wolves</td><td>93,82%</td></tr>
<tr><td>12</td><td>Adirondack Phantoms</td><td>93,18%</td></tr>
<tr><td>13</td><td>Cleveland Knights</td><td>88,54%</td></tr>
<tr><td>14</td><td>Abbotsford Heat</td><td>88,08%</td></tr>
<tr><td>15</td><td>Trois-Rivières Draveurs</td><td>86,21%</td></tr>
<tr><td>16</td><td>Peoria Rivermen</td><td>61,76%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8,37</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Las Vegas Gamblers</td><td>3,78</td></tr>
<tr><td>2</td><td>Norfolk Admirals</td><td>5,00</td></tr>
<tr><td>3</td><td>Abbotsford Heat</td><td>5,60</td></tr>
<tr><td>4</td><td>Laval Chiefs</td><td>6,11</td></tr>
<tr><td>5</td><td>Cleveland Knights</td><td>6,30</td></tr>
<tr><td>6</td><td>Peoria Rivermen</td><td>6,50</td></tr>
<tr><td>7</td><td>Chicoutimi Saguenéens</td><td>7,60</td></tr>
<tr><td>8</td><td>Chicago Wolves</td><td>7,69</td></tr>
<tr><td>9</td><td>Rockford IceHogs</td><td>8,00</td></tr>
<tr><td>10</td><td>Providence Bruins</td><td>8,65</td></tr>
<tr><td>11</td><td>Trois-Rivières Draveurs</td><td>9,60</td></tr>
<tr><td>12</td><td>Milwaukee Admirals</td><td>9,83</td></tr>
<tr><td>13</td><td>Manitoba Moose</td><td>10,55</td></tr>
<tr><td>14</td><td>Charlotte Checkers</td><td>10,84</td></tr>
<tr><td>15</td><td>Adirondack Phantoms</td><td>11,00</td></tr>
<tr><td>16</td><td>San Antonio Rampage</td><td>13,20</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 16,96</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Norfolk Admirals</td><td>23,75</td></tr>
<tr><td>2</td><td>Trois-Rivières Draveurs</td><td>18,00</td></tr>
<tr><td>3</td><td>Providence Bruins</td><td>17,65</td></tr>
<tr><td>4</td><td>San Antonio Rampage</td><td>17,60</td></tr>
<tr><td>5</td><td>Laval Chiefs</td><td>17,26</td></tr>
<tr><td>6</td><td>Abbotsford Heat</td><td>17,00</td></tr>
<tr><td>7</td><td>Manitoba Moose</td><td>16,91</td></tr>
<tr><td>8</td><td>Milwaukee Admirals</td><td>16,83</td></tr>
<tr><td>9</td><td>Chicoutimi Saguenéens</td><td>16,80</td></tr>
<tr><td>10</td><td>Cleveland Knights</td><td>16,70</td></tr>
<tr><td>11</td><td>Adirondack Phantoms</td><td>16,50</td></tr>
<tr><td>12</td><td>Rockford IceHogs</td><td>16,50</td></tr>
<tr><td>13</td><td>Charlotte Checkers</td><td>16,42</td></tr>
<tr><td>14</td><td>Chicago Wolves</td><td>16,13</td></tr>
<tr><td>15</td><td>Las Vegas Gamblers</td><td>15,22</td></tr>
<tr><td>16</td><td>Peoria Rivermen</td><td>13,75</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Milwaukee Admirals</td><td>57,62%</td></tr>
<tr><td>2</td><td>Cleveland Knights</td><td>54,44%</td></tr>
<tr><td>3</td><td>Laval Chiefs</td><td>52,17%</td></tr>
<tr><td>4</td><td>Charlotte Checkers</td><td>51,64%</td></tr>
<tr><td>5</td><td>Chicoutimi Saguenéens</td><td>51,25%</td></tr>
<tr><td>6</td><td>Providence Bruins</td><td>51,24%</td></tr>
<tr><td>7</td><td>Adirondack Phantoms</td><td>50,13%</td></tr>
<tr><td>8</td><td>Norfolk Admirals</td><td>49,80%</td></tr>
<tr><td>9</td><td>San Antonio Rampage</td><td>48,94%</td></tr>
<tr><td>10</td><td>Las Vegas Gamblers</td><td>48,92%</td></tr>
<tr><td>11</td><td>Manitoba Moose</td><td>46,82%</td></tr>
<tr><td>12</td><td>Abbotsford Heat</td><td>46,62%</td></tr>
<tr><td>13</td><td>Trois-Rivières Draveurs</td><td>46,38%</td></tr>
<tr><td>14</td><td>Chicago Wolves</td><td>45,62%</td></tr>
<tr><td>15</td><td>Peoria Rivermen</td><td>45,50%</td></tr>
<tr><td>16</td><td>Rockford IceHogs</td><td>44,49%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
