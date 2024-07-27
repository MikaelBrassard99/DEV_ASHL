<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Pro Team Stats</title>
<script src="WC-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - WC-STHS.bin - WC-STHSCareerStat.bin"/>
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
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>CANADA</td><td>13</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>70</td><td>23</td><td>8</td><td>7</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>40</td><td>13</td><td>5</td><td>-4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>30</td><td>10</td><td>70</td><td>119</td><td>189</td></tr>
<tr><td>FINLANDE</td><td>12</td><td>4</td><td>5</td><td>1</td><td>0</td><td>1</td><td>1</td><td>33</td><td>37</td><td>7</td><td>3</td><td>2</td><td>0</td><td>0</td><td>1</td><td>1</td><td>21</td><td>18</td><td>5</td><td>1</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>12</td><td>19</td><td>33</td><td>50</td><td>83</td></tr>
<tr><td>RUSSIE</td><td>13</td><td>2</td><td>3</td><td>1</td><td>0</td><td>1</td><td>0</td><td>49</td><td>28</td><td>5</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>7</td><td>8</td><td>-2</td><td>2</td><td>1</td><td>0</td><td>1</td><td>0</td><td>25</td><td>21</td><td>49</td><td>82</td><td>131</td></tr>
<tr><td>SUÈDE</td><td>12</td><td>6</td><td>5</td><td>0</td><td>1</td><td>0</td><td>0</td><td>32</td><td>29</td><td>9</td><td>4</td><td>4</td><td>0</td><td>1</td><td>0</td><td>0</td><td>26</td><td>24</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>5</td><td>32</td><td>59</td><td>91</td></tr>
<tr><td>TCHÉQUIE</td><td>14</td><td>2</td><td>5</td><td>0</td><td>0</td><td>1</td><td>0</td><td>44</td><td>45</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>19</td><td>8</td><td>-2</td><td>3</td><td>0</td><td>0</td><td>1</td><td>0</td><td>25</td><td>26</td><td>44</td><td>76</td><td>120</td></tr>
<tr><td>USA</td><td>14</td><td>3</td><td>2</td><td>0</td><td>0</td><td>2</td><td>0</td><td>67</td><td>38</td><td>6</td><td>4</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>31</td><td>14</td><td>8</td><td>-1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>36</td><td>24</td><td>67</td><td>110</td><td>177</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>CANADA</td><td>CAN</td><td>30</td><td>18</td><td>22</td><td>0</td><td>376</td><td>154</td><td>114</td><td>108</td><td>0</td><td>359</td><td>130</td><td>96</td><td>284</td><td>50</td><td>9</td><td>18,00%</td><td>47</td><td>6</td><td>87,23%</td><td>0</td><td>52,28%</td><td>49,54%</td><td>57,53%</td><td>282</td><td>309</td><td>189</td><td>102</td><td>204</td><td>97</td><td>1</td><td>0</td></tr>
<tr><td>FINLANDE</td><td>FIN</td><td>10</td><td>5</td><td>16</td><td>2</td><td>342</td><td>91</td><td>121</td><td>124</td><td>11</td><td>342</td><td>131</td><td>86</td><td>225</td><td>47</td><td>10</td><td>21,28%</td><td>43</td><td>5</td><td>88,37%</td><td>0</td><td>53,97%</td><td>51,74%</td><td>55,63%</td><td>290</td><td>262</td><td>179</td><td>96</td><td>169</td><td>89</td><td>0</td><td>1</td></tr>
<tr><td>RUSSIE</td><td>RUS</td><td>17</td><td>20</td><td>10</td><td>2</td><td>415</td><td>150</td><td>140</td><td>115</td><td>13</td><td>395</td><td>110</td><td>74</td><td>249</td><td>49</td><td>13</td><td>26,53%</td><td>37</td><td>6</td><td>83,78%</td><td>1</td><td>53,39%</td><td>48,94%</td><td>46,71%</td><td>286</td><td>314</td><td>185</td><td>97</td><td>213</td><td>95</td><td>1</td><td>0</td></tr>
<tr><td>SUÈDE</td><td>SWE</td><td>13</td><td>9</td><td>10</td><td>0</td><td>366</td><td>116</td><td>133</td><td>117</td><td>0</td><td>316</td><td>132</td><td>82</td><td>229</td><td>45</td><td>5</td><td>11,11%</td><td>41</td><td>5</td><td>87,80%</td><td>1</td><td>52,27%</td><td>46,29%</td><td>46,38%</td><td>256</td><td>289</td><td>176</td><td>93</td><td>193</td><td>89</td><td>0</td><td>0</td></tr>
<tr><td>TCHÉQUIE</td><td>CZE</td><td>19</td><td>17</td><td>7</td><td>1</td><td>410</td><td>134</td><td>148</td><td>124</td><td>7</td><td>415</td><td>141</td><td>116</td><td>282</td><td>46</td><td>11</td><td>23,91%</td><td>58</td><td>9</td><td>84,48%</td><td>1</td><td>51,41%</td><td>53,21%</td><td>51,28%</td><td>322</td><td>321</td><td>202</td><td>109</td><td>212</td><td>100</td><td>0</td><td>0</td></tr>
<tr><td>USA</td><td>USA</td><td>18</td><td>19</td><td>28</td><td>2</td><td>426</td><td>112</td><td>138</td><td>170</td><td>12</td><td>422</td><td>140</td><td>140</td><td>276</td><td>53</td><td>6</td><td>11,32%</td><td>70</td><td>12</td><td>82,86%</td><td>3</td><td>45,00%</td><td>57,14%</td><td>51,20%</td><td>322</td><td>325</td><td>202</td><td>111</td><td>215</td><td>102</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,78</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CANADA</td><td>5,38</td></tr>
<tr><td>2</td><td>USA</td><td>4,79</td></tr>
<tr><td>3</td><td>RUSSIE</td><td>3,77</td></tr>
<tr><td>4</td><td>TCHÉQUIE</td><td>3,14</td></tr>
<tr><td>5</td><td>FINLANDE</td><td>2,75</td></tr>
<tr><td>6</td><td>SUÈDE</td><td>2,67</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,56</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CANADA</td><td>1,77</td></tr>
<tr><td>2</td><td>RUSSIE</td><td>2,15</td></tr>
<tr><td>3</td><td>SUÈDE</td><td>2,42</td></tr>
<tr><td>4</td><td>USA</td><td>2,71</td></tr>
<tr><td>5</td><td>FINLANDE</td><td>3,08</td></tr>
<tr><td>6</td><td>TCHÉQUIE</td><td>3,21</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>CANADA</td><td>304,35%</td></tr>
<tr><td>2</td><td>USA</td><td>176,32%</td></tr>
<tr><td>3</td><td>RUSSIE</td><td>175,00%</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>110,34%</td></tr>
<tr><td>5</td><td>TCHÉQUIE</td><td>97,78%</td></tr>
<tr><td>6</td><td>FINLANDE</td><td>89,19%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18,62%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>RUSSIE</td><td>26,53%</td></tr>
<tr><td>2</td><td>TCHÉQUIE</td><td>23,91%</td></tr>
<tr><td>3</td><td>FINLANDE</td><td>21,28%</td></tr>
<tr><td>4</td><td>CANADA</td><td>18,00%</td></tr>
<tr><td>5</td><td>USA</td><td>11,32%</td></tr>
<tr><td>6</td><td>SUÈDE</td><td>11,11%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 85,47%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>FINLANDE</td><td>88,37%</td></tr>
<tr><td>2</td><td>SUÈDE</td><td>87,80%</td></tr>
<tr><td>3</td><td>CANADA</td><td>87,23%</td></tr>
<tr><td>4</td><td>TCHÉQUIE</td><td>84,48%</td></tr>
<tr><td>5</td><td>RUSSIE</td><td>83,78%</td></tr>
<tr><td>6</td><td>USA</td><td>82,86%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>RUSSIE</td><td>110,31%</td></tr>
<tr><td>2</td><td>FINLANDE</td><td>109,65%</td></tr>
<tr><td>3</td><td>TCHÉQUIE</td><td>108,40%</td></tr>
<tr><td>4</td><td>CANADA</td><td>105,23%</td></tr>
<tr><td>5</td><td>SUÈDE</td><td>98,92%</td></tr>
<tr><td>6</td><td>USA</td><td>94,18%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 29,94</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>RUSSIE</td><td>31,92</td></tr>
<tr><td>2</td><td>SUÈDE</td><td>30,50</td></tr>
<tr><td>3</td><td>USA</td><td>30,43</td></tr>
<tr><td>4</td><td>TCHÉQUIE</td><td>29,29</td></tr>
<tr><td>5</td><td>CANADA</td><td>28,92</td></tr>
<tr><td>6</td><td>FINLANDE</td><td>28,50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28,83</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>SUÈDE</td><td>26,33</td></tr>
<tr><td>2</td><td>CANADA</td><td>27,62</td></tr>
<tr><td>3</td><td>FINLANDE</td><td>28,50</td></tr>
<tr><td>4</td><td>TCHÉQUIE</td><td>29,64</td></tr>
<tr><td>5</td><td>USA</td><td>30,14</td></tr>
<tr><td>6</td><td>RUSSIE</td><td>30,38</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>SUÈDE</td><td>115,82%</td></tr>
<tr><td>2</td><td>RUSSIE</td><td>105,06%</td></tr>
<tr><td>3</td><td>CANADA</td><td>104,74%</td></tr>
<tr><td>4</td><td>USA</td><td>100,95%</td></tr>
<tr><td>5</td><td>FINLANDE</td><td>100,00%</td></tr>
<tr><td>6</td><td>TCHÉQUIE</td><td>98,80%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7,62</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>RUSSIE</td><td>5,69</td></tr>
<tr><td>2</td><td>SUÈDE</td><td>6,83</td></tr>
<tr><td>3</td><td>FINLANDE</td><td>7,17</td></tr>
<tr><td>4</td><td>CANADA</td><td>7,38</td></tr>
<tr><td>5</td><td>TCHÉQUIE</td><td>8,29</td></tr>
<tr><td>6</td><td>USA</td><td>10,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,81</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CANADA</td><td>21,85</td></tr>
<tr><td>2</td><td>TCHÉQUIE</td><td>20,14</td></tr>
<tr><td>3</td><td>USA</td><td>19,71</td></tr>
<tr><td>4</td><td>RUSSIE</td><td>19,15</td></tr>
<tr><td>5</td><td>SUÈDE</td><td>19,08</td></tr>
<tr><td>6</td><td>FINLANDE</td><td>18,75</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>FINLANDE</td><td>53,55%</td></tr>
<tr><td>2</td><td>CANADA</td><td>52,88%</td></tr>
<tr><td>3</td><td>TCHÉQUIE</td><td>52,02%</td></tr>
<tr><td>4</td><td>USA</td><td>50,84%</td></tr>
<tr><td>5</td><td>RUSSIE</td><td>49,93%</td></tr>
<tr><td>6</td><td>SUÈDE</td><td>48,55%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
