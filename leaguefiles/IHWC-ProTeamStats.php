<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Pro Team Stats</title>
<script src="IHWC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
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
<link href="IHWC.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"IHWC-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"IHWC-STHSCareerStat.db";
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
<tr><td>ALLEMAGNE</td><td>5</td><td>3</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>19</td><td>19</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>16</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>4</td><td>3</td><td>19</td><td>30</td><td>49</td></tr>
<tr><td>CANADA</td><td>5</td><td>4</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>25</td><td>12</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>10</td><td>4</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>8</td><td>25</td><td>44</td><td>69</td></tr>
<tr><td>ETATS-UNIS</td><td>5</td><td>2</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td><td>18</td><td>15</td><td>3</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>1</td><td>11</td><td>10</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>7</td><td>5</td><td>18</td><td>28</td><td>46</td></tr>
<tr><td>FINLANDE</td><td>5</td><td>3</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>19</td><td>13</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>1</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>13</td><td>12</td><td>19</td><td>34</td><td>53</td></tr>
<tr><td>LETTONIE</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>17</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>6</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>11</td><td>8</td><td>15</td><td>23</td></tr>
<tr><td>REPUBLIQUE TCHEQUE</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>19</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>9</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>10</td><td>18</td><td>31</td><td>49</td></tr>
<tr><td>RUSSIE</td><td>5</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>20</td><td>20</td><td>4</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>15</td><td>18</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>2</td><td>20</td><td>37</td><td>57</td></tr>
<tr><td>SLOVAQUIE</td><td>5</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>1</td><td>17</td><td>25</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>9</td><td>12</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>13</td><td>17</td><td>30</td><td>47</td></tr>
<tr><td>SUEDE</td><td>5</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>2</td><td>17</td><td>16</td><td>3</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>9</td><td>10</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>8</td><td>6</td><td>17</td><td>32</td><td>49</td></tr>
<tr><td>SUISSE</td><td>5</td><td>2</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>18</td><td>16</td><td>4</td><td>1</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>12</td><td>14</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>2</td><td>18</td><td>32</td><td>50</td></tr>
<tr><td>TEAM WORLD</td><td>5</td><td>1</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>15</td><td>17</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>2</td><td>4</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>14</td><td>15</td><td>15</td><td>26</td><td>41</td></tr>
<tr><td>U23 NORTH AMERICA</td><td>5</td><td>0</td><td>3</td><td>0</td><td>1</td><td>1</td><td>0</td><td>17</td><td>22</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>9</td><td>3</td><td>0</td><td>1</td><td>0</td><td>1</td><td>1</td><td>0</td><td>12</td><td>13</td><td>17</td><td>29</td><td>46</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>ALLEMAGNE</td><td>ALL</td><td>6</td><td>4</td><td>8</td><td>1</td><td>173</td><td>55</td><td>54</td><td>62</td><td>5</td><td>182</td><td>55</td><td>34</td><td>96</td><td>14</td><td>4</td><td>28,57%</td><td>16</td><td>4</td><td>75,00%</td><td>0</td><td>53,65%</td><td>44,85%</td><td>56,82%</td><td>122</td><td>119</td><td>64</td><td>37</td><td>82</td><td>30</td><td>0</td><td>0</td></tr>
<tr><td>CANADA</td><td>CAN</td><td>11</td><td>7</td><td>6</td><td>2</td><td>206</td><td>78</td><td>64</td><td>61</td><td>6</td><td>130</td><td>42</td><td>42</td><td>85</td><td>21</td><td>5</td><td>23,81%</td><td>18</td><td>5</td><td>72,22%</td><td>1</td><td>55,49%</td><td>50,46%</td><td>46,05%</td><td>111</td><td>132</td><td>61</td><td>37</td><td>95</td><td>32</td><td>0</td><td>0</td></tr>
<tr><td>ETATS-UNIS</td><td>USA</td><td>7</td><td>6</td><td>4</td><td>2</td><td>166</td><td>63</td><td>58</td><td>41</td><td>13</td><td>151</td><td>42</td><td>44</td><td>123</td><td>15</td><td>4</td><td>26,67%</td><td>22</td><td>6</td><td>72,73%</td><td>1</td><td>53,37%</td><td>51,56%</td><td>54,76%</td><td>118</td><td>128</td><td>65</td><td>37</td><td>90</td><td>33</td><td>0</td><td>0</td></tr>
<tr><td>FINLANDE</td><td>FIN</td><td>7</td><td>6</td><td>5</td><td>2</td><td>162</td><td>57</td><td>65</td><td>39</td><td>4</td><td>159</td><td>51</td><td>20</td><td>96</td><td>20</td><td>6</td><td>30,00%</td><td>10</td><td>1</td><td>90,00%</td><td>0</td><td>51,31%</td><td>46,11%</td><td>57,61%</td><td>125</td><td>117</td><td>63</td><td>37</td><td>81</td><td>32</td><td>1</td><td>0</td></tr>
<tr><td>LETTONIE</td><td>LET</td><td>2</td><td>5</td><td>1</td><td>0</td><td>156</td><td>54</td><td>43</td><td>59</td><td>0</td><td>154</td><td>44</td><td>34</td><td>69</td><td>22</td><td>1</td><td>4,55%</td><td>15</td><td>5</td><td>66,67%</td><td>1</td><td>46,52%</td><td>52,43%</td><td>46,67%</td><td>111</td><td>124</td><td>65</td><td>37</td><td>87</td><td>33</td><td>0</td><td>0</td></tr>
<tr><td>REPUBLIQUE TCHEQUE</td><td>TCH</td><td>3</td><td>7</td><td>8</td><td>0</td><td>151</td><td>41</td><td>56</td><td>54</td><td>0</td><td>173</td><td>53</td><td>32</td><td>88</td><td>16</td><td>5</td><td>31,25%</td><td>16</td><td>7</td><td>56,25%</td><td>0</td><td>52,31%</td><td>50,00%</td><td>56,52%</td><td>129</td><td>108</td><td>63</td><td>38</td><td>73</td><td>31</td><td>0</td><td>0</td></tr>
<tr><td>RUSSIE</td><td>RUS</td><td>5</td><td>7</td><td>8</td><td>1</td><td>174</td><td>47</td><td>50</td><td>75</td><td>9</td><td>156</td><td>49</td><td>42</td><td>86</td><td>19</td><td>7</td><td>36,84%</td><td>19</td><td>5</td><td>73,68%</td><td>0</td><td>53,26%</td><td>53,55%</td><td>38,20%</td><td>119</td><td>124</td><td>63</td><td>37</td><td>86</td><td>30</td><td>0</td><td>0</td></tr>
<tr><td>SLOVAQUIE</td><td>SLO</td><td>5</td><td>6</td><td>6</td><td>0</td><td>169</td><td>55</td><td>49</td><td>61</td><td>7</td><td>165</td><td>51</td><td>34</td><td>103</td><td>19</td><td>4</td><td>21,05%</td><td>15</td><td>4</td><td>73,33%</td><td>0</td><td>46,70%</td><td>57,61%</td><td>39,08%</td><td>121</td><td>121</td><td>64</td><td>38</td><td>84</td><td>31</td><td>0</td><td>1</td></tr>
<tr><td>SUEDE</td><td>SWE</td><td>4</td><td>9</td><td>3</td><td>2</td><td>136</td><td>45</td><td>48</td><td>36</td><td>13</td><td>150</td><td>47</td><td>36</td><td>84</td><td>13</td><td>5</td><td>38,46%</td><td>15</td><td>1</td><td>93,33%</td><td>1</td><td>54,44%</td><td>55,56%</td><td>48,75%</td><td>118</td><td>127</td><td>66</td><td>38</td><td>89</td><td>33</td><td>0</td><td>0</td></tr>
<tr><td>SUISSE</td><td>SUI</td><td>10</td><td>2</td><td>5</td><td>2</td><td>138</td><td>48</td><td>41</td><td>49</td><td>3</td><td>182</td><td>52</td><td>38</td><td>85</td><td>14</td><td>3</td><td>21,43%</td><td>18</td><td>5</td><td>72,22%</td><td>0</td><td>41,67%</td><td>40,94%</td><td>42,50%</td><td>126</td><td>115</td><td>64</td><td>37</td><td>78</td><td>32</td><td>0</td><td>0</td></tr>
<tr><td>TEAM WORLD</td><td>TWO</td><td>2</td><td>5</td><td>7</td><td>2</td><td>169</td><td>48</td><td>54</td><td>64</td><td>6</td><td>163</td><td>55</td><td>46</td><td>81</td><td>16</td><td>6</td><td>37,50%</td><td>22</td><td>5</td><td>77,27%</td><td>0</td><td>49,47%</td><td>58,16%</td><td>59,76%</td><td>126</td><td>117</td><td>63</td><td>37</td><td>81</td><td>30</td><td>0</td><td>0</td></tr>
<tr><td>U23 NORTH AMERICA</td><td>U23</td><td>9</td><td>5</td><td>2</td><td>1</td><td>147</td><td>38</td><td>52</td><td>55</td><td>5</td><td>182</td><td>56</td><td>61</td><td>92</td><td>18</td><td>4</td><td>22,22%</td><td>21</td><td>6</td><td>71,43%</td><td>0</td><td>42,71%</td><td>38,17%</td><td>51,69%</td><td>124</td><td>119</td><td>64</td><td>34</td><td>81</td><td>32</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,52</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CANADA</td><td>5,00</td></tr>
<tr><td>2</td><td>RUSSIE</td><td>4,00</td></tr>
<tr><td>3</td><td>FINLANDE</td><td>3,80</td></tr>
<tr><td>4</td><td>ALLEMAGNE</td><td>3,80</td></tr>
<tr><td>5</td><td>REPUBLIQUE TCHEQUE</td><td>3,60</td></tr>
<tr><td>6</td><td>ETATS-UNIS</td><td>3,60</td></tr>
<tr><td>7</td><td>SUISSE</td><td>3,60</td></tr>
<tr><td>8</td><td>U23 NORTH AMERICA</td><td>3,40</td></tr>
<tr><td>9</td><td>SUEDE</td><td>3,40</td></tr>
<tr><td>10</td><td>SLOVAQUIE</td><td>3,40</td></tr>
<tr><td>11</td><td>TEAM WORLD</td><td>3,00</td></tr>
<tr><td>12</td><td>LETTONIE</td><td>1,60</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,52</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CANADA</td><td>2,40</td></tr>
<tr><td>2</td><td>FINLANDE</td><td>2,60</td></tr>
<tr><td>3</td><td>ETATS-UNIS</td><td>3,00</td></tr>
<tr><td>4</td><td>SUEDE</td><td>3,20</td></tr>
<tr><td>5</td><td>SUISSE</td><td>3,20</td></tr>
<tr><td>6</td><td>TEAM WORLD</td><td>3,40</td></tr>
<tr><td>7</td><td>LETTONIE</td><td>3,40</td></tr>
<tr><td>8</td><td>ALLEMAGNE</td><td>3,80</td></tr>
<tr><td>9</td><td>REPUBLIQUE TCHEQUE</td><td>3,80</td></tr>
<tr><td>10</td><td>RUSSIE</td><td>4,00</td></tr>
<tr><td>11</td><td>U23 NORTH AMERICA</td><td>4,40</td></tr>
<tr><td>12</td><td>SLOVAQUIE</td><td>5,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>CANADA</td><td>208,33%</td></tr>
<tr><td>2</td><td>FINLANDE</td><td>146,15%</td></tr>
<tr><td>3</td><td>ETATS-UNIS</td><td>120,00%</td></tr>
<tr><td>4</td><td>SUISSE</td><td>112,50%</td></tr>
<tr><td>5</td><td>SUEDE</td><td>106,25%</td></tr>
<tr><td>6</td><td>RUSSIE</td><td>100,00%</td></tr>
<tr><td>7</td><td>ALLEMAGNE</td><td>100,00%</td></tr>
<tr><td>8</td><td>REPUBLIQUE TCHEQUE</td><td>94,74%</td></tr>
<tr><td>9</td><td>TEAM WORLD</td><td>88,24%</td></tr>
<tr><td>10</td><td>U23 NORTH AMERICA</td><td>77,27%</td></tr>
<tr><td>11</td><td>SLOVAQUIE</td><td>68,00%</td></tr>
<tr><td>12</td><td>LETTONIE</td><td>47,06%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 26,09%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>SUEDE</td><td>38,46%</td></tr>
<tr><td>2</td><td>TEAM WORLD</td><td>37,50%</td></tr>
<tr><td>3</td><td>RUSSIE</td><td>36,84%</td></tr>
<tr><td>4</td><td>REPUBLIQUE TCHEQUE</td><td>31,25%</td></tr>
<tr><td>5</td><td>FINLANDE</td><td>30,00%</td></tr>
<tr><td>6</td><td>ALLEMAGNE</td><td>28,57%</td></tr>
<tr><td>7</td><td>ETATS-UNIS</td><td>26,67%</td></tr>
<tr><td>8</td><td>CANADA</td><td>23,81%</td></tr>
<tr><td>9</td><td>U23 NORTH AMERICA</td><td>22,22%</td></tr>
<tr><td>10</td><td>SUISSE</td><td>21,43%</td></tr>
<tr><td>11</td><td>SLOVAQUIE</td><td>21,05%</td></tr>
<tr><td>12</td><td>LETTONIE</td><td>4,55%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 73,91%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>SUEDE</td><td>93,33%</td></tr>
<tr><td>2</td><td>FINLANDE</td><td>90,00%</td></tr>
<tr><td>3</td><td>TEAM WORLD</td><td>77,27%</td></tr>
<tr><td>4</td><td>ALLEMAGNE</td><td>75,00%</td></tr>
<tr><td>5</td><td>RUSSIE</td><td>73,68%</td></tr>
<tr><td>6</td><td>SLOVAQUIE</td><td>73,33%</td></tr>
<tr><td>7</td><td>ETATS-UNIS</td><td>72,73%</td></tr>
<tr><td>8</td><td>SUISSE</td><td>72,22%</td></tr>
<tr><td>9</td><td>CANADA</td><td>72,22%</td></tr>
<tr><td>10</td><td>U23 NORTH AMERICA</td><td>71,43%</td></tr>
<tr><td>11</td><td>LETTONIE</td><td>66,67%</td></tr>
<tr><td>12</td><td>REPUBLIQUE TCHEQUE</td><td>56,25%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>SUEDE</td><td>131,79%</td></tr>
<tr><td>2</td><td>FINLANDE</td><td>120,00%</td></tr>
<tr><td>3</td><td>TEAM WORLD</td><td>114,77%</td></tr>
<tr><td>4</td><td>RUSSIE</td><td>110,53%</td></tr>
<tr><td>5</td><td>ALLEMAGNE</td><td>103,57%</td></tr>
<tr><td>6</td><td>ETATS-UNIS</td><td>99,39%</td></tr>
<tr><td>7</td><td>CANADA</td><td>96,03%</td></tr>
<tr><td>8</td><td>SLOVAQUIE</td><td>94,39%</td></tr>
<tr><td>9</td><td>U23 NORTH AMERICA</td><td>93,65%</td></tr>
<tr><td>10</td><td>SUISSE</td><td>93,65%</td></tr>
<tr><td>11</td><td>REPUBLIQUE TCHEQUE</td><td>87,50%</td></tr>
<tr><td>12</td><td>LETTONIE</td><td>71,21%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,45</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CANADA</td><td>41,20</td></tr>
<tr><td>2</td><td>RUSSIE</td><td>34,80</td></tr>
<tr><td>3</td><td>ALLEMAGNE</td><td>34,60</td></tr>
<tr><td>4</td><td>TEAM WORLD</td><td>33,80</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>33,80</td></tr>
<tr><td>6</td><td>ETATS-UNIS</td><td>33,20</td></tr>
<tr><td>7</td><td>FINLANDE</td><td>32,40</td></tr>
<tr><td>8</td><td>LETTONIE</td><td>31,20</td></tr>
<tr><td>9</td><td>REPUBLIQUE TCHEQUE</td><td>30,20</td></tr>
<tr><td>10</td><td>U23 NORTH AMERICA</td><td>29,40</td></tr>
<tr><td>11</td><td>SUISSE</td><td>27,60</td></tr>
<tr><td>12</td><td>SUEDE</td><td>27,20</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,45</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CANADA</td><td>26,00</td></tr>
<tr><td>2</td><td>SUEDE</td><td>30,00</td></tr>
<tr><td>3</td><td>ETATS-UNIS</td><td>30,20</td></tr>
<tr><td>4</td><td>LETTONIE</td><td>30,80</td></tr>
<tr><td>5</td><td>RUSSIE</td><td>31,20</td></tr>
<tr><td>6</td><td>FINLANDE</td><td>31,80</td></tr>
<tr><td>7</td><td>TEAM WORLD</td><td>32,60</td></tr>
<tr><td>8</td><td>SLOVAQUIE</td><td>33,00</td></tr>
<tr><td>9</td><td>REPUBLIQUE TCHEQUE</td><td>34,60</td></tr>
<tr><td>10</td><td>ALLEMAGNE</td><td>36,40</td></tr>
<tr><td>11</td><td>SUISSE</td><td>36,40</td></tr>
<tr><td>12</td><td>U23 NORTH AMERICA</td><td>36,40</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>CANADA</td><td>158,46%</td></tr>
<tr><td>2</td><td>RUSSIE</td><td>111,54%</td></tr>
<tr><td>3</td><td>ETATS-UNIS</td><td>109,93%</td></tr>
<tr><td>4</td><td>TEAM WORLD</td><td>103,68%</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>102,42%</td></tr>
<tr><td>6</td><td>FINLANDE</td><td>101,89%</td></tr>
<tr><td>7</td><td>LETTONIE</td><td>101,30%</td></tr>
<tr><td>8</td><td>ALLEMAGNE</td><td>95,05%</td></tr>
<tr><td>9</td><td>SUEDE</td><td>90,67%</td></tr>
<tr><td>10</td><td>REPUBLIQUE TCHEQUE</td><td>87,28%</td></tr>
<tr><td>11</td><td>U23 NORTH AMERICA</td><td>80,77%</td></tr>
<tr><td>12</td><td>SUISSE</td><td>75,82%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7,72</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>FINLANDE</td><td>4,00</td></tr>
<tr><td>2</td><td>REPUBLIQUE TCHEQUE</td><td>6,40</td></tr>
<tr><td>3</td><td>ALLEMAGNE</td><td>6,80</td></tr>
<tr><td>4</td><td>LETTONIE</td><td>6,80</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>6,80</td></tr>
<tr><td>6</td><td>SUEDE</td><td>7,20</td></tr>
<tr><td>7</td><td>SUISSE</td><td>7,60</td></tr>
<tr><td>8</td><td>CANADA</td><td>8,40</td></tr>
<tr><td>9</td><td>RUSSIE</td><td>8,40</td></tr>
<tr><td>10</td><td>ETATS-UNIS</td><td>8,80</td></tr>
<tr><td>11</td><td>TEAM WORLD</td><td>9,20</td></tr>
<tr><td>12</td><td>U23 NORTH AMERICA</td><td>12,20</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18,13</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>ETATS-UNIS</td><td>24,60</td></tr>
<tr><td>2</td><td>SLOVAQUIE</td><td>20,60</td></tr>
<tr><td>3</td><td>FINLANDE</td><td>19,20</td></tr>
<tr><td>4</td><td>ALLEMAGNE</td><td>19,20</td></tr>
<tr><td>5</td><td>U23 NORTH AMERICA</td><td>18,40</td></tr>
<tr><td>6</td><td>REPUBLIQUE TCHEQUE</td><td>17,60</td></tr>
<tr><td>7</td><td>RUSSIE</td><td>17,20</td></tr>
<tr><td>8</td><td>SUISSE</td><td>17,00</td></tr>
<tr><td>9</td><td>CANADA</td><td>17,00</td></tr>
<tr><td>10</td><td>SUEDE</td><td>16,80</td></tr>
<tr><td>11</td><td>TEAM WORLD</td><td>16,20</td></tr>
<tr><td>12</td><td>LETTONIE</td><td>13,80</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>TEAM WORLD</td><td>54,94%</td></tr>
<tr><td>2</td><td>SUEDE</td><td>53,83%</td></tr>
<tr><td>3</td><td>ETATS-UNIS</td><td>52,88%</td></tr>
<tr><td>4</td><td>REPUBLIQUE TCHEQUE</td><td>52,28%</td></tr>
<tr><td>5</td><td>CANADA</td><td>51,53%</td></tr>
<tr><td>6</td><td>ALLEMAGNE</td><td>50,63%</td></tr>
<tr><td>7</td><td>RUSSIE</td><td>50,62%</td></tr>
<tr><td>8</td><td>FINLANDE</td><td>50,54%</td></tr>
<tr><td>9</td><td>SLOVAQUIE</td><td>49,57%</td></tr>
<tr><td>10</td><td>LETTONIE</td><td>48,99%</td></tr>
<tr><td>11</td><td>U23 NORTH AMERICA</td><td>42,62%</td></tr>
<tr><td>12</td><td>SUISSE</td><td>41,53%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
