<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Pro Team Stats</title>
<script src="WC.js"></script>
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
<tr><td>ALLEMAGNE</td><td>11</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>1</td><td>24</td><td>28</td><td>8</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>1</td><td>20</td><td>20</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>8</td><td>24</td><td>43</td><td>67</td></tr>
<tr><td>CANADA</td><td>11</td><td>10</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>52</td><td>19</td><td>6</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>9</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>30</td><td>10</td><td>52</td><td>87</td><td>139</td></tr>
<tr><td>DANEMARK</td><td>11</td><td>0</td><td>10</td><td>0</td><td>1</td><td>0</td><td>0</td><td>11</td><td>49</td><td>3</td><td>0</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>4</td><td>9</td><td>8</td><td>0</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>40</td><td>11</td><td>19</td><td>30</td></tr>
<tr><td>FINLANDE</td><td>11</td><td>4</td><td>4</td><td>1</td><td>0</td><td>1</td><td>1</td><td>30</td><td>28</td><td>7</td><td>3</td><td>2</td><td>0</td><td>0</td><td>1</td><td>1</td><td>21</td><td>18</td><td>4</td><td>1</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>9</td><td>10</td><td>30</td><td>45</td><td>75</td></tr>
<tr><td>LETTONIE</td><td>11</td><td>3</td><td>6</td><td>0</td><td>0</td><td>0</td><td>2</td><td>25</td><td>41</td><td>5</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>17</td><td>15</td><td>6</td><td>0</td><td>5</td><td>0</td><td>0</td><td>0</td><td>1</td><td>8</td><td>26</td><td>25</td><td>41</td><td>66</td></tr>
<tr><td>RUSSIE</td><td>11</td><td>7</td><td>2</td><td>1</td><td>0</td><td>1</td><td>0</td><td>42</td><td>19</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>7</td><td>7</td><td>4</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>23</td><td>12</td><td>42</td><td>70</td><td>112</td></tr>
<tr><td>SLOVAQUIE</td><td>11</td><td>1</td><td>6</td><td>0</td><td>1</td><td>1</td><td>2</td><td>19</td><td>36</td><td>5</td><td>1</td><td>2</td><td>0</td><td>1</td><td>1</td><td>0</td><td>13</td><td>14</td><td>6</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>2</td><td>6</td><td>22</td><td>19</td><td>29</td><td>48</td></tr>
<tr><td>SUÈDE</td><td>11</td><td>6</td><td>4</td><td>0</td><td>1</td><td>0</td><td>0</td><td>29</td><td>25</td><td>8</td><td>4</td><td>3</td><td>0</td><td>1</td><td>0</td><td>0</td><td>23</td><td>20</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>5</td><td>29</td><td>53</td><td>82</td></tr>
<tr><td>SUISSE</td><td>11</td><td>4</td><td>4</td><td>1</td><td>1</td><td>0</td><td>1</td><td>28</td><td>28</td><td>7</td><td>3</td><td>2</td><td>0</td><td>1</td><td>0</td><td>1</td><td>16</td><td>17</td><td>4</td><td>1</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>12</td><td>11</td><td>28</td><td>45</td><td>73</td></tr>
<tr><td>TCHÉQUIE</td><td>11</td><td>7</td><td>3</td><td>0</td><td>0</td><td>1</td><td>0</td><td>37</td><td>30</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>19</td><td>5</td><td>3</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>18</td><td>11</td><td>37</td><td>63</td><td>100</td></tr>
<tr><td>USA</td><td>11</td><td>8</td><td>1</td><td>0</td><td>0</td><td>2</td><td>0</td><td>49</td><td>23</td><td>4</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>15</td><td>8</td><td>7</td><td>6</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>34</td><td>15</td><td>49</td><td>82</td><td>131</td></tr>
<tr><td>WORLD</td><td>11</td><td>1</td><td>8</td><td>1</td><td>0</td><td>1</td><td>0</td><td>17</td><td>37</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>14</td><td>8</td><td>1</td><td>5</td><td>1</td><td>0</td><td>1</td><td>0</td><td>13</td><td>23</td><td>17</td><td>26</td><td>43</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>ALLEMAGNE</td><td>GER</td><td>8</td><td>7</td><td>9</td><td>0</td><td>325</td><td>104</td><td>111</td><td>106</td><td>7</td><td>344</td><td>100</td><td>69</td><td>221</td><td>45</td><td>6</td><td>13,33%</td><td>35</td><td>7</td><td>80,00%</td><td>0</td><td>46,44%</td><td>51,79%</td><td>49,54%</td><td>262</td><td>246</td><td>157</td><td>84</td><td>162</td><td>79</td><td>1</td><td>0</td></tr>
<tr><td>CANADA</td><td>CAN</td><td>23</td><td>13</td><td>16</td><td>0</td><td>307</td><td>131</td><td>93</td><td>83</td><td>0</td><td>314</td><td>108</td><td>90</td><td>226</td><td>39</td><td>6</td><td>15,38%</td><td>44</td><td>6</td><td>86,36%</td><td>0</td><td>53,11%</td><td>50,84%</td><td>58,17%</td><td>242</td><td>259</td><td>159</td><td>87</td><td>170</td><td>82</td><td>1</td><td>0</td></tr>
<tr><td>DANEMARK</td><td>DAN</td><td>4</td><td>3</td><td>4</td><td>0</td><td>300</td><td>85</td><td>102</td><td>113</td><td>0</td><td>350</td><td>98</td><td>94</td><td>193</td><td>39</td><td>3</td><td>7,69%</td><td>47</td><td>11</td><td>76,60%</td><td>0</td><td>44,50%</td><td>51,74%</td><td>43,48%</td><td>261</td><td>245</td><td>156</td><td>85</td><td>158</td><td>76</td><td>0</td><td>0</td></tr>
<tr><td>FINLANDE</td><td>FIN</td><td>10</td><td>4</td><td>14</td><td>2</td><td>312</td><td>89</td><td>101</td><td>116</td><td>11</td><td>308</td><td>114</td><td>84</td><td>208</td><td>43</td><td>9</td><td>20,93%</td><td>42</td><td>5</td><td>88,10%</td><td>0</td><td>54,91%</td><td>51,21%</td><td>53,38%</td><td>264</td><td>242</td><td>165</td><td>89</td><td>157</td><td>82</td><td>0</td><td>1</td></tr>
<tr><td>LETTONIE</td><td>LET</td><td>5</td><td>13</td><td>7</td><td>0</td><td>342</td><td>117</td><td>111</td><td>112</td><td>7</td><td>320</td><td>113</td><td>88</td><td>203</td><td>46</td><td>6</td><td>13,04%</td><td>44</td><td>12</td><td>72,73%</td><td>1</td><td>53,08%</td><td>46,95%</td><td>48,92%</td><td>256</td><td>252</td><td>162</td><td>89</td><td>168</td><td>81</td><td>0</td><td>0</td></tr>
<tr><td>RUSSIE</td><td>RUS</td><td>14</td><td>16</td><td>10</td><td>2</td><td>360</td><td>128</td><td>116</td><td>106</td><td>13</td><td>346</td><td>92</td><td>64</td><td>211</td><td>43</td><td>12</td><td>27,91%</td><td>32</td><td>5</td><td>84,38%</td><td>1</td><td>51,92%</td><td>47,18%</td><td>48,18%</td><td>244</td><td>266</td><td>156</td><td>82</td><td>181</td><td>80</td><td>0</td><td>0</td></tr>
<tr><td>SLOVAQUIE</td><td>SVK</td><td>6</td><td>8</td><td>4</td><td>2</td><td>312</td><td>81</td><td>100</td><td>119</td><td>20</td><td>324</td><td>124</td><td>100</td><td>193</td><td>39</td><td>4</td><td>10,26%</td><td>50</td><td>6</td><td>88,00%</td><td>1</td><td>40,09%</td><td>42,38%</td><td>50,69%</td><td>268</td><td>240</td><td>168</td><td>90</td><td>149</td><td>82</td><td>0</td><td>0</td></tr>
<tr><td>SUÈDE</td><td>SWE</td><td>12</td><td>8</td><td>9</td><td>0</td><td>340</td><td>104</td><td>127</td><td>109</td><td>0</td><td>292</td><td>124</td><td>78</td><td>209</td><td>37</td><td>4</td><td>10,81%</td><td>39</td><td>4</td><td>89,74%</td><td>1</td><td>52,40%</td><td>46,86%</td><td>48,03%</td><td>236</td><td>264</td><td>161</td><td>85</td><td>177</td><td>81</td><td>0</td><td>0</td></tr>
<tr><td>SUISSE</td><td>SWI</td><td>4</td><td>14</td><td>9</td><td>1</td><td>317</td><td>90</td><td>102</td><td>122</td><td>7</td><td>316</td><td>103</td><td>70</td><td>222</td><td>41</td><td>7</td><td>17,07%</td><td>35</td><td>2</td><td>94,29%</td><td>1</td><td>53,37%</td><td>50,24%</td><td>46,88%</td><td>249</td><td>251</td><td>166</td><td>89</td><td>167</td><td>80</td><td>0</td><td>0</td></tr>
<tr><td>TCHÉQUIE</td><td>CZE</td><td>14</td><td>15</td><td>7</td><td>1</td><td>340</td><td>102</td><td>124</td><td>110</td><td>7</td><td>323</td><td>113</td><td>86</td><td>231</td><td>39</td><td>10</td><td>25,64%</td><td>43</td><td>7</td><td>83,72%</td><td>1</td><td>52,86%</td><td>55,16%</td><td>48,72%</td><td>249</td><td>259</td><td>157</td><td>84</td><td>173</td><td>79</td><td>0</td><td>0</td></tr>
<tr><td>USA</td><td>USA</td><td>12</td><td>13</td><td>22</td><td>2</td><td>336</td><td>89</td><td>106</td><td>135</td><td>12</td><td>326</td><td>111</td><td>110</td><td>216</td><td>48</td><td>6</td><td>12,50%</td><td>55</td><td>9</td><td>83,64%</td><td>2</td><td>43,70%</td><td>57,34%</td><td>54,38%</td><td>253</td><td>258</td><td>159</td><td>88</td><td>171</td><td>81</td><td>0</td><td>0</td></tr>
<tr><td>WORLD</td><td>WLD</td><td>4</td><td>7</td><td>4</td><td>2</td><td>302</td><td>99</td><td>115</td><td>81</td><td>10</td><td>330</td><td>140</td><td>86</td><td>208</td><td>50</td><td>5</td><td>10,00%</td><td>43</td><td>4</td><td>90,70%</td><td>3</td><td>52,33%</td><td>50,66%</td><td>47,62%</td><td>253</td><td>252</td><td>162</td><td>91</td><td>163</td><td>79</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,75</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CANADA</td><td>4,73</td></tr>
<tr><td>2</td><td>USA</td><td>4,45</td></tr>
<tr><td>3</td><td>RUSSIE</td><td>3,82</td></tr>
<tr><td>4</td><td>TCHÉQUIE</td><td>3,36</td></tr>
<tr><td>5</td><td>FINLANDE</td><td>2,73</td></tr>
<tr><td>6</td><td>SUÈDE</td><td>2,64</td></tr>
<tr><td>7</td><td>SUISSE</td><td>2,55</td></tr>
<tr><td>8</td><td>LETTONIE</td><td>2,27</td></tr>
<tr><td>9</td><td>ALLEMAGNE</td><td>2,18</td></tr>
<tr><td>10</td><td>SLOVAQUIE</td><td>1,73</td></tr>
<tr><td>11</td><td>WORLD</td><td>1,55</td></tr>
<tr><td>12</td><td>DANEMARK</td><td>1,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,75</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CANADA</td><td>1,73</td></tr>
<tr><td>2</td><td>RUSSIE</td><td>1,73</td></tr>
<tr><td>3</td><td>USA</td><td>2,09</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>2,27</td></tr>
<tr><td>5</td><td>ALLEMAGNE</td><td>2,55</td></tr>
<tr><td>6</td><td>FINLANDE</td><td>2,55</td></tr>
<tr><td>7</td><td>SUISSE</td><td>2,55</td></tr>
<tr><td>8</td><td>TCHÉQUIE</td><td>2,73</td></tr>
<tr><td>9</td><td>SLOVAQUIE</td><td>3,27</td></tr>
<tr><td>10</td><td>WORLD</td><td>3,36</td></tr>
<tr><td>11</td><td>LETTONIE</td><td>3,73</td></tr>
<tr><td>12</td><td>DANEMARK</td><td>4,45</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>CANADA</td><td>273,68%</td></tr>
<tr><td>2</td><td>RUSSIE</td><td>221,05%</td></tr>
<tr><td>3</td><td>USA</td><td>213,04%</td></tr>
<tr><td>4</td><td>TCHÉQUIE</td><td>123,33%</td></tr>
<tr><td>5</td><td>SUÈDE</td><td>116,00%</td></tr>
<tr><td>6</td><td>FINLANDE</td><td>107,14%</td></tr>
<tr><td>7</td><td>SUISSE</td><td>100,00%</td></tr>
<tr><td>8</td><td>ALLEMAGNE</td><td>85,71%</td></tr>
<tr><td>9</td><td>LETTONIE</td><td>60,98%</td></tr>
<tr><td>10</td><td>SLOVAQUIE</td><td>52,78%</td></tr>
<tr><td>11</td><td>WORLD</td><td>45,95%</td></tr>
<tr><td>12</td><td>DANEMARK</td><td>22,45%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 15,32%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>RUSSIE</td><td>27,91%</td></tr>
<tr><td>2</td><td>TCHÉQUIE</td><td>25,64%</td></tr>
<tr><td>3</td><td>FINLANDE</td><td>20,93%</td></tr>
<tr><td>4</td><td>SUISSE</td><td>17,07%</td></tr>
<tr><td>5</td><td>CANADA</td><td>15,38%</td></tr>
<tr><td>6</td><td>ALLEMAGNE</td><td>13,33%</td></tr>
<tr><td>7</td><td>LETTONIE</td><td>13,04%</td></tr>
<tr><td>8</td><td>USA</td><td>12,50%</td></tr>
<tr><td>9</td><td>SUÈDE</td><td>10,81%</td></tr>
<tr><td>10</td><td>SLOVAQUIE</td><td>10,26%</td></tr>
<tr><td>11</td><td>WORLD</td><td>10,00%</td></tr>
<tr><td>12</td><td>DANEMARK</td><td>7,69%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 84,68%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>SUISSE</td><td>94,29%</td></tr>
<tr><td>2</td><td>WORLD</td><td>90,70%</td></tr>
<tr><td>3</td><td>SUÈDE</td><td>89,74%</td></tr>
<tr><td>4</td><td>FINLANDE</td><td>88,10%</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>88,00%</td></tr>
<tr><td>6</td><td>CANADA</td><td>86,36%</td></tr>
<tr><td>7</td><td>RUSSIE</td><td>84,38%</td></tr>
<tr><td>8</td><td>TCHÉQUIE</td><td>83,72%</td></tr>
<tr><td>9</td><td>USA</td><td>83,64%</td></tr>
<tr><td>10</td><td>ALLEMAGNE</td><td>80,00%</td></tr>
<tr><td>11</td><td>DANEMARK</td><td>76,60%</td></tr>
<tr><td>12</td><td>LETTONIE</td><td>72,73%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>RUSSIE</td><td>112,28%</td></tr>
<tr><td>2</td><td>SUISSE</td><td>111,36%</td></tr>
<tr><td>3</td><td>TCHÉQUIE</td><td>109,36%</td></tr>
<tr><td>4</td><td>FINLANDE</td><td>109,03%</td></tr>
<tr><td>5</td><td>CANADA</td><td>101,75%</td></tr>
<tr><td>6</td><td>WORLD</td><td>100,70%</td></tr>
<tr><td>7</td><td>SUÈDE</td><td>100,55%</td></tr>
<tr><td>8</td><td>SLOVAQUIE</td><td>98,26%</td></tr>
<tr><td>9</td><td>USA</td><td>96,14%</td></tr>
<tr><td>10</td><td>ALLEMAGNE</td><td>93,33%</td></tr>
<tr><td>11</td><td>LETTONIE</td><td>85,77%</td></tr>
<tr><td>12</td><td>DANEMARK</td><td>84,29%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 29,49</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>RUSSIE</td><td>32,73</td></tr>
<tr><td>2</td><td>LETTONIE</td><td>31,09</td></tr>
<tr><td>3</td><td>TCHÉQUIE</td><td>30,91</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>30,91</td></tr>
<tr><td>5</td><td>USA</td><td>30,55</td></tr>
<tr><td>6</td><td>ALLEMAGNE</td><td>29,55</td></tr>
<tr><td>7</td><td>SUISSE</td><td>28,82</td></tr>
<tr><td>8</td><td>SLOVAQUIE</td><td>28,36</td></tr>
<tr><td>9</td><td>FINLANDE</td><td>28,36</td></tr>
<tr><td>10</td><td>CANADA</td><td>27,91</td></tr>
<tr><td>11</td><td>WORLD</td><td>27,45</td></tr>
<tr><td>12</td><td>DANEMARK</td><td>27,27</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 29,49</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>SUÈDE</td><td>26,55</td></tr>
<tr><td>2</td><td>FINLANDE</td><td>28,00</td></tr>
<tr><td>3</td><td>CANADA</td><td>28,55</td></tr>
<tr><td>4</td><td>SUISSE</td><td>28,73</td></tr>
<tr><td>5</td><td>LETTONIE</td><td>29,09</td></tr>
<tr><td>6</td><td>TCHÉQUIE</td><td>29,36</td></tr>
<tr><td>7</td><td>SLOVAQUIE</td><td>29,45</td></tr>
<tr><td>8</td><td>USA</td><td>29,64</td></tr>
<tr><td>9</td><td>WORLD</td><td>30,00</td></tr>
<tr><td>10</td><td>ALLEMAGNE</td><td>31,27</td></tr>
<tr><td>11</td><td>RUSSIE</td><td>31,45</td></tr>
<tr><td>12</td><td>DANEMARK</td><td>31,82</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>SUÈDE</td><td>116,44%</td></tr>
<tr><td>2</td><td>LETTONIE</td><td>106,88%</td></tr>
<tr><td>3</td><td>TCHÉQUIE</td><td>105,26%</td></tr>
<tr><td>4</td><td>RUSSIE</td><td>104,05%</td></tr>
<tr><td>5</td><td>USA</td><td>103,07%</td></tr>
<tr><td>6</td><td>FINLANDE</td><td>101,30%</td></tr>
<tr><td>7</td><td>SUISSE</td><td>100,32%</td></tr>
<tr><td>8</td><td>CANADA</td><td>97,77%</td></tr>
<tr><td>9</td><td>SLOVAQUIE</td><td>96,30%</td></tr>
<tr><td>10</td><td>ALLEMAGNE</td><td>94,48%</td></tr>
<tr><td>11</td><td>WORLD</td><td>91,52%</td></tr>
<tr><td>12</td><td>DANEMARK</td><td>85,71%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7,72</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>RUSSIE</td><td>5,82</td></tr>
<tr><td>2</td><td>ALLEMAGNE</td><td>6,27</td></tr>
<tr><td>3</td><td>SUISSE</td><td>6,36</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>7,09</td></tr>
<tr><td>5</td><td>FINLANDE</td><td>7,64</td></tr>
<tr><td>6</td><td>TCHÉQUIE</td><td>7,82</td></tr>
<tr><td>7</td><td>WORLD</td><td>7,82</td></tr>
<tr><td>8</td><td>LETTONIE</td><td>8,00</td></tr>
<tr><td>9</td><td>CANADA</td><td>8,18</td></tr>
<tr><td>10</td><td>DANEMARK</td><td>8,55</td></tr>
<tr><td>11</td><td>SLOVAQUIE</td><td>9,09</td></tr>
<tr><td>12</td><td>USA</td><td>10,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,25</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>TCHÉQUIE</td><td>21,00</td></tr>
<tr><td>2</td><td>CANADA</td><td>20,55</td></tr>
<tr><td>3</td><td>SUISSE</td><td>20,18</td></tr>
<tr><td>4</td><td>ALLEMAGNE</td><td>20,09</td></tr>
<tr><td>5</td><td>USA</td><td>19,64</td></tr>
<tr><td>6</td><td>RUSSIE</td><td>19,18</td></tr>
<tr><td>7</td><td>SUÈDE</td><td>19,00</td></tr>
<tr><td>8</td><td>WORLD</td><td>18,91</td></tr>
<tr><td>9</td><td>FINLANDE</td><td>18,91</td></tr>
<tr><td>10</td><td>LETTONIE</td><td>18,45</td></tr>
<tr><td>11</td><td>SLOVAQUIE</td><td>17,55</td></tr>
<tr><td>12</td><td>DANEMARK</td><td>17,55</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>CANADA</td><td>53,79%</td></tr>
<tr><td>2</td><td>FINLANDE</td><td>53,19%</td></tr>
<tr><td>3</td><td>TCHÉQUIE</td><td>52,64%</td></tr>
<tr><td>4</td><td>USA</td><td>51,30%</td></tr>
<tr><td>5</td><td>SUISSE</td><td>50,65%</td></tr>
<tr><td>6</td><td>WORLD</td><td>50,55%</td></tr>
<tr><td>7</td><td>LETTONIE</td><td>49,73%</td></tr>
<tr><td>8</td><td>SUÈDE</td><td>49,26%</td></tr>
<tr><td>9</td><td>ALLEMAGNE</td><td>49,13%</td></tr>
<tr><td>10</td><td>RUSSIE</td><td>49,07%</td></tr>
<tr><td>11</td><td>DANEMARK</td><td>47,14%</td></tr>
<tr><td>12</td><td>SLOVAQUIE</td><td>43,61%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
