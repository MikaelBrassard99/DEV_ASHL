<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Team Stats</title>
<script src="ASHL11-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.2.2 - ASHL11-STHS.db - ASHL11-STHSCareerStat.db"/>
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
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Rochester Americans</td><td>10</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>35</td><td>27</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>19</td><td>5</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>8</td><td>35</td><td>60</td><td>95</td></tr>
<tr><td>Charlotte Checkers</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>21</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>8</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>13</td><td>20</td><td>38</td><td>58</td></tr>
<tr><td>Nunavik Natturaliit</td><td>11</td><td>6</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>37</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>18</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>19</td><td>37</td><td>68</td><td>105</td></tr>
<tr><td>Grand Rapids Griffins</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>19</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>12</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>7</td><td>14</td><td>25</td><td>39</td></tr>
<tr><td>Oklahoma City Barons</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>15</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>11</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>4</td><td>14</td><td>25</td><td>39</td></tr>
<tr><td>Houston Aeros</td><td>15</td><td>8</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>49</td><td>45</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>19</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>26</td><td>49</td><td>86</td><td>135</td></tr>
<tr><td>Trois-Rivières Lions</td><td>12</td><td>7</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>33</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>12</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>23</td><td>21</td><td>37</td><td>70</td><td>107</td></tr>
<tr><td>Connecticut Whale</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>17</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>6</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>11</td><td>11</td><td>19</td><td>30</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>25</td><td>15</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>69</td><td>62</td><td>12</td><td>7</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>31</td><td>13</td><td>8</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>36</td><td>31</td><td>69</td><td>124</td><td>193</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>20</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>14</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>6</td><td>11</td><td>19</td><td>30</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>22</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>13</td><td>18</td><td>33</td><td>51</td></tr>
<tr><td>Mercer Island Hafgufa</td><td>23</td><td>16</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>73</td><td>57</td><td>12</td><td>7</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>32</td><td>28</td><td>11</td><td>9</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>41</td><td>29</td><td>73</td><td>129</td><td>202</td></tr>
<tr><td>Norfolk Admirals</td><td>20</td><td>11</td><td>9</td><td>0</td><td>0</td><td>0</td><td>0</td><td>57</td><td>58</td><td>11</td><td>9</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>40</td><td>29</td><td>9</td><td>2</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>29</td><td>57</td><td>101</td><td>158</td></tr>
<tr><td>Chicago Wolves</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>17</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>11</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>6</td><td>14</td><td>28</td><td>42</td></tr>
<tr><td>Henderson Silver Knights</td><td>10</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>34</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>15</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>19</td><td>33</td><td>60</td><td>93</td></tr>
<tr><td>CCCP Red Army</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>20</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>10</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>10</td><td>12</td><td>21</td><td>33</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Rochester Americans</td><td>RCH</td><td>10</td><td>13</td><td>12</td><td>0</td><td>328</td><td>102</td><td>104</td><td>118</td><td>4</td><td>294</td><td>98</td><td>72</td><td>212</td><td>38</td><td>11</td><td>28,95%</td><td>29</td><td>10</td><td>65,52%</td><td>0</td><td>53,91%</td><td>52,15%</td><td>48,78%</td><td>230</td><td>247</td><td>131</td><td>73</td><td>170</td><td>67</td><td>0</td><td>0</td></tr>
<tr><td>Charlotte Checkers</td><td>CHA</td><td>7</td><td>8</td><td>5</td><td>0</td><td>182</td><td>57</td><td>66</td><td>55</td><td>4</td><td>167</td><td>44</td><td>46</td><td>125</td><td>16</td><td>2</td><td>12,50%</td><td>22</td><td>4</td><td>81,82%</td><td>0</td><td>50,74%</td><td>51,13%</td><td>57,14%</td><td>138</td><td>152</td><td>79</td><td>44</td><td>106</td><td>39</td><td>0</td><td>0</td></tr>
<tr><td>Nunavik Natturaliit</td><td>NUN</td><td>17</td><td>10</td><td>9</td><td>1</td><td>325</td><td>121</td><td>98</td><td>102</td><td>4</td><td>355</td><td>122</td><td>90</td><td>210</td><td>32</td><td>9</td><td>28,13%</td><td>44</td><td>8</td><td>81,82%</td><td>0</td><td>51,03%</td><td>48,83%</td><td>54,12%</td><td>263</td><td>271</td><td>138</td><td>78</td><td>191</td><td>69</td><td>1</td><td>1</td></tr>
<tr><td>Grand Rapids Griffins</td><td>GRG</td><td>10</td><td>3</td><td>1</td><td>0</td><td>148</td><td>46</td><td>57</td><td>44</td><td>1</td><td>137</td><td>44</td><td>26</td><td>94</td><td>10</td><td>2</td><td>20,00%</td><td>12</td><td>1</td><td>91,67%</td><td>0</td><td>49,68%</td><td>50,58%</td><td>52,87%</td><td>116</td><td>119</td><td>68</td><td>37</td><td>83</td><td>35</td><td>0</td><td>0</td></tr>
<tr><td>Oklahoma City Barons</td><td>OKC</td><td>5</td><td>2</td><td>6</td><td>1</td><td>184</td><td>70</td><td>55</td><td>53</td><td>6</td><td>203</td><td>59</td><td>44</td><td>112</td><td>24</td><td>7</td><td>29,17%</td><td>20</td><td>1</td><td>95,00%</td><td>0</td><td>48,47%</td><td>46,12%</td><td>56,18%</td><td>147</td><td>145</td><td>78</td><td>43</td><td>100</td><td>40</td><td>1</td><td>0</td></tr>
<tr><td>Houston Aeros</td><td>HOU</td><td>15</td><td>18</td><td>15</td><td>1</td><td>431</td><td>132</td><td>138</td><td>146</td><td>15</td><td>441</td><td>122</td><td>98</td><td>286</td><td>47</td><td>5</td><td>10,64%</td><td>47</td><td>9</td><td>80,85%</td><td>0</td><td>48,03%</td><td>51,61%</td><td>52,21%</td><td>349</td><td>371</td><td>198</td><td>111</td><td>257</td><td>102</td><td>2</td><td>1</td></tr>
<tr><td>Trois-Rivières Lions</td><td>TRL</td><td>11</td><td>13</td><td>13</td><td>0</td><td>380</td><td>120</td><td>136</td><td>124</td><td>0</td><td>385</td><td>115</td><td>92</td><td>263</td><td>44</td><td>13</td><td>29,55%</td><td>45</td><td>8</td><td>82,22%</td><td>0</td><td>52,36%</td><td>50,33%</td><td>43,75%</td><td>285</td><td>287</td><td>147</td><td>86</td><td>200</td><td>72</td><td>0</td><td>0</td></tr>
<tr><td>Connecticut Whale</td><td>CTW</td><td>2</td><td>6</td><td>3</td><td>0</td><td>141</td><td>38</td><td>56</td><td>47</td><td>0</td><td>141</td><td>44</td><td>26</td><td>96</td><td>15</td><td>2</td><td>13,33%</td><td>10</td><td>0</td><td>100,00%</td><td>0</td><td>50,99%</td><td>54,29%</td><td>40,24%</td><td>112</td><td>129</td><td>64</td><td>35</td><td>91</td><td>33</td><td>0</td><td>1</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>WBS</td><td>26</td><td>25</td><td>14</td><td>4</td><td>709</td><td>248</td><td>228</td><td>212</td><td>21</td><td>766</td><td>217</td><td>160</td><td>477</td><td>72</td><td>15</td><td>20,83%</td><td>67</td><td>15</td><td>77,61%</td><td>1</td><td>49,51%</td><td>48,94%</td><td>57,75%</td><td>608</td><td>591</td><td>328</td><td>189</td><td>407</td><td>166</td><td>1</td><td>2</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>CHI</td><td>1</td><td>6</td><td>4</td><td>0</td><td>169</td><td>49</td><td>68</td><td>52</td><td>0</td><td>152</td><td>41</td><td>38</td><td>98</td><td>21</td><td>3</td><td>14,29%</td><td>19</td><td>8</td><td>57,89%</td><td>0</td><td>45,95%</td><td>47,80%</td><td>55,29%</td><td>121</td><td>118</td><td>60</td><td>37</td><td>83</td><td>30</td><td>0</td><td>0</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>RNO</td><td>7</td><td>5</td><td>5</td><td>1</td><td>135</td><td>45</td><td>41</td><td>44</td><td>5</td><td>141</td><td>49</td><td>38</td><td>97</td><td>19</td><td>5</td><td>26,32%</td><td>18</td><td>6</td><td>66,67%</td><td>1</td><td>55,70%</td><td>48,03%</td><td>53,57%</td><td>126</td><td>115</td><td>63</td><td>37</td><td>79</td><td>31</td><td>0</td><td>0</td></tr>
<tr><td>Mercer Island Hafgufa</td><td>MIH</td><td>26</td><td>18</td><td>27</td><td>2</td><td>776</td><td>215</td><td>277</td><td>266</td><td>18</td><td>668</td><td>183</td><td>156</td><td>428</td><td>77</td><td>12</td><td>15,58%</td><td>73</td><td>17</td><td>76,71%</td><td>0</td><td>50,80%</td><td>49,77%</td><td>42,86%</td><td>557</td><td>545</td><td>300</td><td>175</td><td>376</td><td>145</td><td>0</td><td>0</td></tr>
<tr><td>Norfolk Admirals</td><td>NOR</td><td>19</td><td>14</td><td>22</td><td>2</td><td>597</td><td>187</td><td>186</td><td>216</td><td>8</td><td>621</td><td>184</td><td>130</td><td>382</td><td>65</td><td>13</td><td>20,00%</td><td>61</td><td>9</td><td>85,25%</td><td>0</td><td>49,24%</td><td>48,71%</td><td>48,20%</td><td>490</td><td>474</td><td>257</td><td>148</td><td>327</td><td>129</td><td>0</td><td>0</td></tr>
<tr><td>Chicago Wolves</td><td>CHI</td><td>6</td><td>3</td><td>4</td><td>1</td><td>171</td><td>39</td><td>64</td><td>63</td><td>5</td><td>186</td><td>58</td><td>44</td><td>124</td><td>15</td><td>1</td><td>6,67%</td><td>21</td><td>3</td><td>85,71%</td><td>0</td><td>45,71%</td><td>52,55%</td><td>45,98%</td><td>154</td><td>137</td><td>75</td><td>43</td><td>95</td><td>35</td><td>0</td><td>0</td></tr>
<tr><td>Henderson Silver Knights</td><td>PAR</td><td>9</td><td>11</td><td>12</td><td>1</td><td>285</td><td>114</td><td>81</td><td>85</td><td>5</td><td>274</td><td>95</td><td>50</td><td>182</td><td>30</td><td>6</td><td>20,00%</td><td>24</td><td>4</td><td>83,33%</td><td>1</td><td>50,31%</td><td>51,79%</td><td>48,86%</td><td>237</td><td>240</td><td>138</td><td>75</td><td>165</td><td>67</td><td>0</td><td>0</td></tr>
<tr><td>CCCP Red Army</td><td>CCC</td><td>3</td><td>3</td><td>6</td><td>0</td><td>118</td><td>37</td><td>41</td><td>40</td><td>0</td><td>148</td><td>37</td><td>48</td><td>76</td><td>10</td><td>4</td><td>40,00%</td><td>23</td><td>7</td><td>69,57%</td><td>0</td><td>46,36%</td><td>49,19%</td><td>38,71%</td><td>99</td><td>91</td><td>51</td><td>31</td><td>63</td><td>23</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Rouyn-Noranda Huskies</td><td>3,60</td></tr>
<tr><td>2</td><td>Rochester Americans</td><td>3,50</td></tr>
<tr><td>3</td><td>Nunavik Natturaliit</td><td>3,36</td></tr>
<tr><td>4</td><td>Charlotte Checkers</td><td>3,33</td></tr>
<tr><td>5</td><td>Henderson Silver Knights</td><td>3,30</td></tr>
<tr><td>6</td><td>Houston Aeros</td><td>3,27</td></tr>
<tr><td>7</td><td>Mercer Island Hafgufa</td><td>3,17</td></tr>
<tr><td>8</td><td>Trois-Rivières Lions</td><td>3,08</td></tr>
<tr><td>9</td><td>CCCP Red Army</td><td>3,00</td></tr>
<tr><td>10</td><td>Norfolk Admirals</td><td>2,85</td></tr>
<tr><td>11</td><td>Grand Rapids Griffins</td><td>2,80</td></tr>
<tr><td>12</td><td>Wilkes-Barre/Scranton Penguins</td><td>2,76</td></tr>
<tr><td>13</td><td>Chicago Wolves</td><td>2,33</td></tr>
<tr><td>14</td><td>Oklahoma City Barons</td><td>2,33</td></tr>
<tr><td>15</td><td>Chicoutimi Saguenéens</td><td>2,20</td></tr>
<tr><td>16</td><td>Connecticut Whale</td><td>2,20</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Mercer Island Hafgufa</td><td>2,48</td></tr>
<tr><td>2</td><td>Wilkes-Barre/Scranton Penguins</td><td>2,48</td></tr>
<tr><td>3</td><td>Oklahoma City Barons</td><td>2,50</td></tr>
<tr><td>4</td><td>Rochester Americans</td><td>2,70</td></tr>
<tr><td>5</td><td>Trois-Rivières Lions</td><td>2,75</td></tr>
<tr><td>6</td><td>Chicago Wolves</td><td>2,83</td></tr>
<tr><td>7</td><td>Norfolk Admirals</td><td>2,90</td></tr>
<tr><td>8</td><td>Houston Aeros</td><td>3,00</td></tr>
<tr><td>9</td><td>Nunavik Natturaliit</td><td>3,36</td></tr>
<tr><td>10</td><td>Connecticut Whale</td><td>3,40</td></tr>
<tr><td>11</td><td>Henderson Silver Knights</td><td>3,40</td></tr>
<tr><td>12</td><td>Charlotte Checkers</td><td>3,50</td></tr>
<tr><td>13</td><td>Grand Rapids Griffins</td><td>3,80</td></tr>
<tr><td>14</td><td>Chicoutimi Saguenéens</td><td>4,00</td></tr>
<tr><td>15</td><td>Rouyn-Noranda Huskies</td><td>4,40</td></tr>
<tr><td>16</td><td>CCCP Red Army</td><td>5,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Rochester Americans</td><td>129,63%</td></tr>
<tr><td>2</td><td>Mercer Island Hafgufa</td><td>128,07%</td></tr>
<tr><td>3</td><td>Trois-Rivières Lions</td><td>112,12%</td></tr>
<tr><td>4</td><td>Wilkes-Barre/Scranton Penguins</td><td>111,29%</td></tr>
<tr><td>5</td><td>Houston Aeros</td><td>108,89%</td></tr>
<tr><td>6</td><td>Nunavik Natturaliit</td><td>100,00%</td></tr>
<tr><td>7</td><td>Norfolk Admirals</td><td>98,28%</td></tr>
<tr><td>8</td><td>Henderson Silver Knights</td><td>97,06%</td></tr>
<tr><td>9</td><td>Charlotte Checkers</td><td>95,24%</td></tr>
<tr><td>10</td><td>Oklahoma City Barons</td><td>93,33%</td></tr>
<tr><td>11</td><td>Chicago Wolves</td><td>82,35%</td></tr>
<tr><td>12</td><td>Rouyn-Noranda Huskies</td><td>81,82%</td></tr>
<tr><td>13</td><td>Grand Rapids Griffins</td><td>73,68%</td></tr>
<tr><td>14</td><td>Connecticut Whale</td><td>64,71%</td></tr>
<tr><td>15</td><td>CCCP Red Army</td><td>60,00%</td></tr>
<tr><td>16</td><td>Chicoutimi Saguenéens</td><td>55,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 20,56%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>CCCP Red Army</td><td>40,00%</td></tr>
<tr><td>2</td><td>Trois-Rivières Lions</td><td>29,55%</td></tr>
<tr><td>3</td><td>Oklahoma City Barons</td><td>29,17%</td></tr>
<tr><td>4</td><td>Rochester Americans</td><td>28,95%</td></tr>
<tr><td>5</td><td>Nunavik Natturaliit</td><td>28,13%</td></tr>
<tr><td>6</td><td>Rouyn-Noranda Huskies</td><td>26,32%</td></tr>
<tr><td>7</td><td>Wilkes-Barre/Scranton Penguins</td><td>20,83%</td></tr>
<tr><td>8</td><td>Norfolk Admirals</td><td>20,00%</td></tr>
<tr><td>9</td><td>Henderson Silver Knights</td><td>20,00%</td></tr>
<tr><td>10</td><td>Grand Rapids Griffins</td><td>20,00%</td></tr>
<tr><td>11</td><td>Mercer Island Hafgufa</td><td>15,58%</td></tr>
<tr><td>12</td><td>Chicoutimi Saguenéens</td><td>14,29%</td></tr>
<tr><td>13</td><td>Connecticut Whale</td><td>13,33%</td></tr>
<tr><td>14</td><td>Charlotte Checkers</td><td>12,50%</td></tr>
<tr><td>15</td><td>Houston Aeros</td><td>10,64%</td></tr>
<tr><td>16</td><td>Chicago Wolves</td><td>6,67%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 79,44%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Connecticut Whale</td><td>100,00%</td></tr>
<tr><td>2</td><td>Oklahoma City Barons</td><td>95,00%</td></tr>
<tr><td>3</td><td>Grand Rapids Griffins</td><td>91,67%</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>85,71%</td></tr>
<tr><td>5</td><td>Norfolk Admirals</td><td>85,25%</td></tr>
<tr><td>6</td><td>Henderson Silver Knights</td><td>83,33%</td></tr>
<tr><td>7</td><td>Trois-Rivières Lions</td><td>82,22%</td></tr>
<tr><td>8</td><td>Nunavik Natturaliit</td><td>81,82%</td></tr>
<tr><td>9</td><td>Charlotte Checkers</td><td>81,82%</td></tr>
<tr><td>10</td><td>Houston Aeros</td><td>80,85%</td></tr>
<tr><td>11</td><td>Wilkes-Barre/Scranton Penguins</td><td>77,61%</td></tr>
<tr><td>12</td><td>Mercer Island Hafgufa</td><td>76,71%</td></tr>
<tr><td>13</td><td>CCCP Red Army</td><td>69,57%</td></tr>
<tr><td>14</td><td>Rouyn-Noranda Huskies</td><td>66,67%</td></tr>
<tr><td>15</td><td>Rochester Americans</td><td>65,52%</td></tr>
<tr><td>16</td><td>Chicoutimi Saguenéens</td><td>57,89%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Oklahoma City Barons</td><td>124,17%</td></tr>
<tr><td>2</td><td>Connecticut Whale</td><td>113,33%</td></tr>
<tr><td>3</td><td>Trois-Rivières Lions</td><td>111,77%</td></tr>
<tr><td>4</td><td>Grand Rapids Griffins</td><td>111,67%</td></tr>
<tr><td>5</td><td>Nunavik Natturaliit</td><td>109,94%</td></tr>
<tr><td>6</td><td>CCCP Red Army</td><td>109,57%</td></tr>
<tr><td>7</td><td>Norfolk Admirals</td><td>105,25%</td></tr>
<tr><td>8</td><td>Henderson Silver Knights</td><td>103,33%</td></tr>
<tr><td>9</td><td>Wilkes-Barre/Scranton Penguins</td><td>98,45%</td></tr>
<tr><td>10</td><td>Rochester Americans</td><td>94,46%</td></tr>
<tr><td>11</td><td>Charlotte Checkers</td><td>94,32%</td></tr>
<tr><td>12</td><td>Rouyn-Noranda Huskies</td><td>92,98%</td></tr>
<tr><td>13</td><td>Chicago Wolves</td><td>92,38%</td></tr>
<tr><td>14</td><td>Mercer Island Hafgufa</td><td>92,30%</td></tr>
<tr><td>15</td><td>Houston Aeros</td><td>91,49%</td></tr>
<tr><td>16</td><td>Chicoutimi Saguenéens</td><td>72,18%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30,23</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Chicoutimi Saguenéens</td><td>33,80</td></tr>
<tr><td>2</td><td>Mercer Island Hafgufa</td><td>33,74</td></tr>
<tr><td>3</td><td>Rochester Americans</td><td>32,80</td></tr>
<tr><td>4</td><td>Trois-Rivières Lions</td><td>31,67</td></tr>
<tr><td>5</td><td>Oklahoma City Barons</td><td>30,67</td></tr>
<tr><td>6</td><td>Charlotte Checkers</td><td>30,33</td></tr>
<tr><td>7</td><td>Norfolk Admirals</td><td>29,85</td></tr>
<tr><td>8</td><td>Grand Rapids Griffins</td><td>29,60</td></tr>
<tr><td>9</td><td>Nunavik Natturaliit</td><td>29,55</td></tr>
<tr><td>10</td><td>CCCP Red Army</td><td>29,50</td></tr>
<tr><td>11</td><td>Houston Aeros</td><td>28,73</td></tr>
<tr><td>12</td><td>Henderson Silver Knights</td><td>28,50</td></tr>
<tr><td>13</td><td>Chicago Wolves</td><td>28,50</td></tr>
<tr><td>14</td><td>Wilkes-Barre/Scranton Penguins</td><td>28,36</td></tr>
<tr><td>15</td><td>Connecticut Whale</td><td>28,20</td></tr>
<tr><td>16</td><td>Rouyn-Noranda Huskies</td><td>27,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30,23</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Grand Rapids Griffins</td><td>27,40</td></tr>
<tr><td>2</td><td>Henderson Silver Knights</td><td>27,40</td></tr>
<tr><td>3</td><td>Charlotte Checkers</td><td>27,83</td></tr>
<tr><td>4</td><td>Connecticut Whale</td><td>28,20</td></tr>
<tr><td>5</td><td>Rouyn-Noranda Huskies</td><td>28,20</td></tr>
<tr><td>6</td><td>Mercer Island Hafgufa</td><td>29,04</td></tr>
<tr><td>7</td><td>Rochester Americans</td><td>29,40</td></tr>
<tr><td>8</td><td>Houston Aeros</td><td>29,40</td></tr>
<tr><td>9</td><td>Chicoutimi Saguenéens</td><td>30,40</td></tr>
<tr><td>10</td><td>Wilkes-Barre/Scranton Penguins</td><td>30,64</td></tr>
<tr><td>11</td><td>Chicago Wolves</td><td>31,00</td></tr>
<tr><td>12</td><td>Norfolk Admirals</td><td>31,05</td></tr>
<tr><td>13</td><td>Trois-Rivières Lions</td><td>32,08</td></tr>
<tr><td>14</td><td>Nunavik Natturaliit</td><td>32,27</td></tr>
<tr><td>15</td><td>Oklahoma City Barons</td><td>33,83</td></tr>
<tr><td>16</td><td>CCCP Red Army</td><td>37,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Mercer Island Hafgufa</td><td>116,17%</td></tr>
<tr><td>2</td><td>Rochester Americans</td><td>111,56%</td></tr>
<tr><td>3</td><td>Chicoutimi Saguenéens</td><td>111,18%</td></tr>
<tr><td>4</td><td>Charlotte Checkers</td><td>108,98%</td></tr>
<tr><td>5</td><td>Grand Rapids Griffins</td><td>108,03%</td></tr>
<tr><td>6</td><td>Henderson Silver Knights</td><td>104,01%</td></tr>
<tr><td>7</td><td>Connecticut Whale</td><td>100,00%</td></tr>
<tr><td>8</td><td>Trois-Rivières Lions</td><td>98,70%</td></tr>
<tr><td>9</td><td>Houston Aeros</td><td>97,73%</td></tr>
<tr><td>10</td><td>Norfolk Admirals</td><td>96,14%</td></tr>
<tr><td>11</td><td>Rouyn-Noranda Huskies</td><td>95,74%</td></tr>
<tr><td>12</td><td>Wilkes-Barre/Scranton Penguins</td><td>92,56%</td></tr>
<tr><td>13</td><td>Chicago Wolves</td><td>91,94%</td></tr>
<tr><td>14</td><td>Nunavik Natturaliit</td><td>91,55%</td></tr>
<tr><td>15</td><td>Oklahoma City Barons</td><td>90,64%</td></tr>
<tr><td>16</td><td>CCCP Red Army</td><td>79,73%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 6,89</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Henderson Silver Knights</td><td>5,00</td></tr>
<tr><td>2</td><td>Grand Rapids Griffins</td><td>5,20</td></tr>
<tr><td>3</td><td>Connecticut Whale</td><td>5,20</td></tr>
<tr><td>4</td><td>Wilkes-Barre/Scranton Penguins</td><td>6,40</td></tr>
<tr><td>5</td><td>Norfolk Admirals</td><td>6,50</td></tr>
<tr><td>6</td><td>Houston Aeros</td><td>6,53</td></tr>
<tr><td>7</td><td>Mercer Island Hafgufa</td><td>6,78</td></tr>
<tr><td>8</td><td>Rochester Americans</td><td>7,20</td></tr>
<tr><td>9</td><td>Oklahoma City Barons</td><td>7,33</td></tr>
<tr><td>10</td><td>Chicago Wolves</td><td>7,33</td></tr>
<tr><td>11</td><td>Chicoutimi Saguenéens</td><td>7,60</td></tr>
<tr><td>12</td><td>Rouyn-Noranda Huskies</td><td>7,60</td></tr>
<tr><td>13</td><td>Charlotte Checkers</td><td>7,67</td></tr>
<tr><td>14</td><td>Trois-Rivières Lions</td><td>7,67</td></tr>
<tr><td>15</td><td>Nunavik Natturaliit</td><td>8,18</td></tr>
<tr><td>16</td><td>CCCP Red Army</td><td>12,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,42</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Trois-Rivières Lions</td><td>21,92</td></tr>
<tr><td>2</td><td>Rochester Americans</td><td>21,20</td></tr>
<tr><td>3</td><td>Charlotte Checkers</td><td>20,83</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>20,67</td></tr>
<tr><td>5</td><td>Chicoutimi Saguenéens</td><td>19,60</td></tr>
<tr><td>6</td><td>Rouyn-Noranda Huskies</td><td>19,40</td></tr>
<tr><td>7</td><td>Connecticut Whale</td><td>19,20</td></tr>
<tr><td>8</td><td>Norfolk Admirals</td><td>19,10</td></tr>
<tr><td>9</td><td>Nunavik Natturaliit</td><td>19,09</td></tr>
<tr><td>10</td><td>Wilkes-Barre/Scranton Penguins</td><td>19,08</td></tr>
<tr><td>11</td><td>Houston Aeros</td><td>19,07</td></tr>
<tr><td>12</td><td>CCCP Red Army</td><td>19,00</td></tr>
<tr><td>13</td><td>Grand Rapids Griffins</td><td>18,80</td></tr>
<tr><td>14</td><td>Oklahoma City Barons</td><td>18,67</td></tr>
<tr><td>15</td><td>Mercer Island Hafgufa</td><td>18,61</td></tr>
<tr><td>16</td><td>Henderson Silver Knights</td><td>18,20</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Rouyn-Noranda Huskies</td><td>52,28%</td></tr>
<tr><td>2</td><td>Rochester Americans</td><td>52,21%</td></tr>
<tr><td>3</td><td>Charlotte Checkers</td><td>52,04%</td></tr>
<tr><td>4</td><td>Wilkes-Barre/Scranton Penguins</td><td>50,81%</td></tr>
<tr><td>5</td><td>Grand Rapids Griffins</td><td>50,72%</td></tr>
<tr><td>6</td><td>Nunavik Natturaliit</td><td>50,69%</td></tr>
<tr><td>7</td><td>Henderson Silver Knights</td><td>50,60%</td></tr>
<tr><td>8</td><td>Houston Aeros</td><td>50,28%</td></tr>
<tr><td>9</td><td>Connecticut Whale</td><td>50,25%</td></tr>
<tr><td>10</td><td>Trois-Rivières Lions</td><td>50,00%</td></tr>
<tr><td>11</td><td>Mercer Island Hafgufa</td><td>48,96%</td></tr>
<tr><td>12</td><td>Oklahoma City Barons</td><td>48,85%</td></tr>
<tr><td>13</td><td>Norfolk Admirals</td><td>48,85%</td></tr>
<tr><td>14</td><td>Chicago Wolves</td><td>48,48%</td></tr>
<tr><td>15</td><td>Chicoutimi Saguenéens</td><td>48,42%</td></tr>
<tr><td>16</td><td>CCCP Red Army</td><td>45,99%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
