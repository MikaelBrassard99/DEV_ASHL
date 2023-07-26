<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Pro Team Stats</title>
<script src="IHWC-PLF.js"></script>
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
<link href="IHWC-PLF.css" rel="stylesheet" type="text/css" />
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
<tr><td>ALLEMAGNE</td><td>6</td><td>3</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>20</td><td>22</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>19</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>4</td><td>3</td><td>20</td><td>32</td><td>52</td></tr>
<tr><td>CANADA</td><td>7</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>33</td><td>22</td><td>4</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>18</td><td>14</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>8</td><td>33</td><td>59</td><td>92</td></tr>
<tr><td>ETATS-UNIS</td><td>8</td><td>5</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td><td>33</td><td>22</td><td>4</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>1</td><td>15</td><td>12</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>18</td><td>10</td><td>33</td><td>54</td><td>87</td></tr>
<tr><td>FINLANDE</td><td>7</td><td>3</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>24</td><td>20</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>6</td><td>4</td><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>16</td><td>14</td><td>24</td><td>43</td><td>67</td></tr>
<tr><td>SUEDE</td><td>6</td><td>1</td><td>2</td><td>1</td><td>0</td><td>0</td><td>2</td><td>19</td><td>20</td><td>3</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>9</td><td>10</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>10</td><td>10</td><td>19</td><td>36</td><td>55</td></tr>
<tr><td>SUISSE</td><td>8</td><td>2</td><td>4</td><td>0</td><td>0</td><td>1</td><td>0</td><td>27</td><td>25</td><td>5</td><td>1</td><td>3</td><td>0</td><td>0</td><td>1</td><td>0</td><td>14</td><td>17</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>8</td><td>27</td><td>50</td><td>77</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>ALLEMAGNE</td><td>ALL</td><td>6</td><td>4</td><td>9</td><td>1</td><td>206</td><td>66</td><td>61</td><td>77</td><td>5</td><td>205</td><td>61</td><td>38</td><td>121</td><td>17</td><td>4</td><td>23,53%</td><td>17</td><td>5</td><td>70,59%</td><td>0</td><td>54,93%</td><td>45,69%</td><td>56,73%</td><td>144</td><td>145</td><td>76</td><td>44</td><td>101</td><td>36</td><td>0</td><td>0</td></tr>
<tr><td>CANADA</td><td>CAN</td><td>13</td><td>12</td><td>6</td><td>3</td><td>298</td><td>99</td><td>98</td><td>87</td><td>17</td><td>198</td><td>62</td><td>56</td><td>130</td><td>27</td><td>5</td><td>18,52%</td><td>24</td><td>8</td><td>66,67%</td><td>1</td><td>53,78%</td><td>52,80%</td><td>50,00%</td><td>158</td><td>183</td><td>87</td><td>51</td><td>131</td><td>45</td><td>0</td><td>0</td></tr>
<tr><td>ETATS-UNIS</td><td>USA</td><td>15</td><td>9</td><td>8</td><td>2</td><td>256</td><td>101</td><td>86</td><td>65</td><td>13</td><td>245</td><td>75</td><td>69</td><td>176</td><td>25</td><td>7</td><td>28,00%</td><td>30</td><td>7</td><td>76,67%</td><td>1</td><td>50,00%</td><td>50,87%</td><td>50,00%</td><td>188</td><td>199</td><td>103</td><td>59</td><td>139</td><td>53</td><td>0</td><td>0</td></tr>
<tr><td>FINLANDE</td><td>FIN</td><td>7</td><td>8</td><td>7</td><td>3</td><td>222</td><td>75</td><td>84</td><td>58</td><td>8</td><td>227</td><td>69</td><td>37</td><td>141</td><td>28</td><td>8</td><td>28,57%</td><td>16</td><td>2</td><td>87,50%</td><td>0</td><td>51,31%</td><td>46,06%</td><td>55,46%</td><td>176</td><td>167</td><td>90</td><td>52</td><td>115</td><td>46</td><td>1</td><td>0</td></tr>
<tr><td>SUEDE</td><td>SWE</td><td>5</td><td>10</td><td>3</td><td>2</td><td>159</td><td>51</td><td>54</td><td>47</td><td>13</td><td>182</td><td>55</td><td>48</td><td>102</td><td>15</td><td>5</td><td>33,33%</td><td>20</td><td>1</td><td>95,00%</td><td>1</td><td>53,95%</td><td>55,94%</td><td>51,04%</td><td>143</td><td>150</td><td>79</td><td>46</td><td>104</td><td>39</td><td>0</td><td>0</td></tr>
<tr><td>SUISSE</td><td>SUI</td><td>15</td><td>4</td><td>7</td><td>2</td><td>239</td><td>86</td><td>69</td><td>76</td><td>11</td><td>296</td><td>85</td><td>62</td><td>147</td><td>22</td><td>5</td><td>22,73%</td><td>29</td><td>6</td><td>79,31%</td><td>0</td><td>44,82%</td><td>42,86%</td><td>43,80%</td><td>207</td><td>187</td><td>102</td><td>61</td><td>129</td><td>51</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,71</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CANADA</td><td>4,71</td></tr>
<tr><td>2</td><td>ETATS-UNIS</td><td>4,13</td></tr>
<tr><td>3</td><td>FINLANDE</td><td>3,43</td></tr>
<tr><td>4</td><td>SUISSE</td><td>3,38</td></tr>
<tr><td>5</td><td>ALLEMAGNE</td><td>3,33</td></tr>
<tr><td>6</td><td>SUEDE</td><td>3,17</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,12</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>ETATS-UNIS</td><td>2,75</td></tr>
<tr><td>2</td><td>FINLANDE</td><td>2,86</td></tr>
<tr><td>3</td><td>SUISSE</td><td>3,13</td></tr>
<tr><td>4</td><td>CANADA</td><td>3,14</td></tr>
<tr><td>5</td><td>SUEDE</td><td>3,33</td></tr>
<tr><td>6</td><td>ALLEMAGNE</td><td>3,67</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>CANADA</td><td>150,00%</td></tr>
<tr><td>2</td><td>ETATS-UNIS</td><td>150,00%</td></tr>
<tr><td>3</td><td>FINLANDE</td><td>120,00%</td></tr>
<tr><td>4</td><td>SUISSE</td><td>108,00%</td></tr>
<tr><td>5</td><td>SUEDE</td><td>95,00%</td></tr>
<tr><td>6</td><td>ALLEMAGNE</td><td>90,91%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 25,37%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>SUEDE</td><td>33,33%</td></tr>
<tr><td>2</td><td>FINLANDE</td><td>28,57%</td></tr>
<tr><td>3</td><td>ETATS-UNIS</td><td>28,00%</td></tr>
<tr><td>4</td><td>ALLEMAGNE</td><td>23,53%</td></tr>
<tr><td>5</td><td>SUISSE</td><td>22,73%</td></tr>
<tr><td>6</td><td>CANADA</td><td>18,52%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 78,68%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>SUEDE</td><td>95,00%</td></tr>
<tr><td>2</td><td>FINLANDE</td><td>87,50%</td></tr>
<tr><td>3</td><td>SUISSE</td><td>79,31%</td></tr>
<tr><td>4</td><td>ETATS-UNIS</td><td>76,67%</td></tr>
<tr><td>5</td><td>ALLEMAGNE</td><td>70,59%</td></tr>
<tr><td>6</td><td>CANADA</td><td>66,67%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>SUEDE</td><td>128,33%</td></tr>
<tr><td>2</td><td>FINLANDE</td><td>116,07%</td></tr>
<tr><td>3</td><td>ETATS-UNIS</td><td>104,67%</td></tr>
<tr><td>4</td><td>SUISSE</td><td>102,04%</td></tr>
<tr><td>5</td><td>ALLEMAGNE</td><td>94,12%</td></tr>
<tr><td>6</td><td>CANADA</td><td>85,19%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,86</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CANADA</td><td>42,57</td></tr>
<tr><td>2</td><td>ALLEMAGNE</td><td>34,33</td></tr>
<tr><td>3</td><td>ETATS-UNIS</td><td>32,00</td></tr>
<tr><td>4</td><td>FINLANDE</td><td>31,71</td></tr>
<tr><td>5</td><td>SUISSE</td><td>29,88</td></tr>
<tr><td>6</td><td>SUEDE</td><td>26,50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,21</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CANADA</td><td>28,29</td></tr>
<tr><td>2</td><td>SUEDE</td><td>30,33</td></tr>
<tr><td>3</td><td>ETATS-UNIS</td><td>30,63</td></tr>
<tr><td>4</td><td>FINLANDE</td><td>32,43</td></tr>
<tr><td>5</td><td>ALLEMAGNE</td><td>34,17</td></tr>
<tr><td>6</td><td>SUISSE</td><td>37,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>CANADA</td><td>150,51%</td></tr>
<tr><td>2</td><td>ETATS-UNIS</td><td>104,49%</td></tr>
<tr><td>3</td><td>ALLEMAGNE</td><td>100,49%</td></tr>
<tr><td>4</td><td>FINLANDE</td><td>97,80%</td></tr>
<tr><td>5</td><td>SUEDE</td><td>87,36%</td></tr>
<tr><td>6</td><td>SUISSE</td><td>80,74%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7,38</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>FINLANDE</td><td>5,29</td></tr>
<tr><td>2</td><td>ALLEMAGNE</td><td>6,33</td></tr>
<tr><td>3</td><td>SUISSE</td><td>7,75</td></tr>
<tr><td>4</td><td>SUEDE</td><td>8,00</td></tr>
<tr><td>5</td><td>CANADA</td><td>8,00</td></tr>
<tr><td>6</td><td>ETATS-UNIS</td><td>8,63</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,45</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>ETATS-UNIS</td><td>22,00</td></tr>
<tr><td>2</td><td>ALLEMAGNE</td><td>20,17</td></tr>
<tr><td>3</td><td>FINLANDE</td><td>20,14</td></tr>
<tr><td>4</td><td>CANADA</td><td>18,57</td></tr>
<tr><td>5</td><td>SUISSE</td><td>18,38</td></tr>
<tr><td>6</td><td>SUEDE</td><td>17,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>SUEDE</td><td>54,19%</td></tr>
<tr><td>2</td><td>CANADA</td><td>52,69%</td></tr>
<tr><td>3</td><td>ALLEMAGNE</td><td>51,37%</td></tr>
<tr><td>4</td><td>ETATS-UNIS</td><td>50,34%</td></tr>
<tr><td>5</td><td>FINLANDE</td><td>50,00%</td></tr>
<tr><td>6</td><td>SUISSE</td><td>43,90%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
