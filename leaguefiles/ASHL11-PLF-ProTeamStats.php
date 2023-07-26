<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Stats</title>
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
<tr><td>Arizona Coyotes</td><td>19</td><td>9</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>55</td><td>55</td><td>11</td><td>4</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>34</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>21</td><td>55</td><td>100</td><td>155</td></tr>
<tr><td>Chicago Blackhawks</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>20</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>13</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>7</td><td>19</td><td>34</td><td>53</td></tr>
<tr><td>Dallas Stars</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>21</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>13</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>8</td><td>13</td><td>21</td><td>34</td></tr>
<tr><td>Detroit Red Wings</td><td>13</td><td>7</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>41</td><td>44</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>19</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>26</td><td>25</td><td>41</td><td>77</td><td>118</td></tr>
<tr><td>Florida Panthers</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>22</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>13</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>9</td><td>20</td><td>34</td><td>54</td></tr>
<tr><td>Los Angeles Kings</td><td>13</td><td>7</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>42</td><td>40</td><td>6</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>26</td><td>16</td><td>7</td><td>1</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>24</td><td>42</td><td>77</td><td>119</td></tr>
<tr><td>Montreal Canadiens</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>23</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>14</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>9</td><td>17</td><td>31</td><td>48</td></tr>
<tr><td>Nashville Predators</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>20</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>8</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>12</td><td>20</td><td>35</td><td>55</td></tr>
<tr><td>New Jersey Devils</td><td>12</td><td>5</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>31</td><td>33</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>15</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>18</td><td>31</td><td>55</td><td>86</td></tr>
<tr><td>New York Rangers</td><td>18</td><td>10</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>52</td><td>45</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>21</td><td>10</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>24</td><td>52</td><td>92</td><td>144</td></tr>
<tr><td>Ottawa Senators</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>18</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>8</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>10</td><td>13</td><td>26</td><td>39</td></tr>
<tr><td>Philadelphia Flyers</td><td>22</td><td>16</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>76</td><td>55</td><td>10</td><td>8</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>23</td><td>12</td><td>8</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>39</td><td>32</td><td>76</td><td>142</td><td>218</td></tr>
<tr><td>St. Louis Blues</td><td>23</td><td>14</td><td>9</td><td>0</td><td>0</td><td>0</td><td>0</td><td>71</td><td>65</td><td>11</td><td>8</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>38</td><td>31</td><td>12</td><td>6</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>34</td><td>71</td><td>125</td><td>196</td></tr>
<tr><td>Tampa Bay Lightning</td><td>10</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>28</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>12</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>16</td><td>25</td><td>49</td><td>74</td></tr>
<tr><td>Toronto Maple Leafs</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>22</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>9</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>13</td><td>19</td><td>33</td><td>52</td></tr>
<tr><td>Vegas Golden Knights</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>21</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>6</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>15</td><td>18</td><td>33</td><td>51</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>13</td><td>21</td><td>21</td><td>0</td><td>524</td><td>149</td><td>185</td><td>178</td><td>12</td><td>533</td><td>152</td><td>150</td><td>399</td><td>60</td><td>9</td><td>15,00%</td><td>70</td><td>16</td><td>77,14%</td><td>2</td><td>52,72%</td><td>48,73%</td><td>46,93%</td><td>456</td><td>459</td><td>242</td><td>139</td><td>321</td><td>121</td><td>0</td><td>1</td></tr>
<tr><td>Chicago Blackhawks</td><td>CHI</td><td>3</td><td>8</td><td>8</td><td>0</td><td>181</td><td>67</td><td>58</td><td>56</td><td>0</td><td>195</td><td>60</td><td>87</td><td>119</td><td>25</td><td>6</td><td>24,00%</td><td>38</td><td>11</td><td>71,05%</td><td>1</td><td>51,80%</td><td>48,64%</td><td>51,22%</td><td>155</td><td>136</td><td>73</td><td>45</td><td>91</td><td>35</td><td>1</td><td>0</td></tr>
<tr><td>Dallas Stars</td><td>DAL</td><td>6</td><td>2</td><td>5</td><td>0</td><td>137</td><td>43</td><td>37</td><td>57</td><td>0</td><td>138</td><td>36</td><td>42</td><td>89</td><td>21</td><td>6</td><td>28,57%</td><td>20</td><td>4</td><td>80,00%</td><td>1</td><td>45,78%</td><td>44,77%</td><td>45,24%</td><td>110</td><td>123</td><td>66</td><td>37</td><td>87</td><td>32</td><td>0</td><td>0</td></tr>
<tr><td>Detroit Red Wings</td><td>DET</td><td>12</td><td>16</td><td>12</td><td>1</td><td>399</td><td>122</td><td>128</td><td>145</td><td>4</td><td>376</td><td>96</td><td>109</td><td>245</td><td>62</td><td>14</td><td>22,58%</td><td>48</td><td>11</td><td>77,08%</td><td>0</td><td>54,07%</td><td>47,81%</td><td>54,31%</td><td>299</td><td>321</td><td>164</td><td>96</td><td>224</td><td>83</td><td>1</td><td>0</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>6</td><td>9</td><td>5</td><td>0</td><td>217</td><td>63</td><td>73</td><td>81</td><td>0</td><td>233</td><td>69</td><td>56</td><td>129</td><td>30</td><td>5</td><td>16,67%</td><td>27</td><td>7</td><td>74,07%</td><td>0</td><td>52,21%</td><td>55,68%</td><td>51,46%</td><td>166</td><td>168</td><td>86</td><td>52</td><td>116</td><td>43</td><td>1</td><td>1</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>13</td><td>11</td><td>16</td><td>2</td><td>361</td><td>118</td><td>111</td><td>129</td><td>3</td><td>389</td><td>127</td><td>114</td><td>245</td><td>46</td><td>9</td><td>19,57%</td><td>55</td><td>10</td><td>81,82%</td><td>0</td><td>50,43%</td><td>50,96%</td><td>51,94%</td><td>324</td><td>305</td><td>162</td><td>94</td><td>210</td><td>81</td><td>1</td><td>0</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>7</td><td>6</td><td>4</td><td>0</td><td>136</td><td>49</td><td>40</td><td>47</td><td>0</td><td>162</td><td>30</td><td>38</td><td>83</td><td>18</td><td>6</td><td>33,33%</td><td>18</td><td>5</td><td>72,22%</td><td>0</td><td>50,00%</td><td>56,10%</td><td>47,96%</td><td>121</td><td>118</td><td>61</td><td>34</td><td>83</td><td>30</td><td>0</td><td>1</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>6</td><td>9</td><td>4</td><td>1</td><td>178</td><td>75</td><td>52</td><td>50</td><td>1</td><td>191</td><td>76</td><td>56</td><td>127</td><td>21</td><td>6</td><td>28,57%</td><td>26</td><td>3</td><td>88,46%</td><td>0</td><td>49,15%</td><td>45,54%</td><td>48,94%</td><td>171</td><td>165</td><td>88</td><td>49</td><td>113</td><td>43</td><td>0</td><td>0</td></tr>
<tr><td>New Jersey Devils</td><td>NJD</td><td>12</td><td>10</td><td>8</td><td>1</td><td>361</td><td>121</td><td>117</td><td>114</td><td>9</td><td>342</td><td>105</td><td>86</td><td>245</td><td>34</td><td>6</td><td>17,65%</td><td>39</td><td>10</td><td>74,36%</td><td>0</td><td>50,87%</td><td>49,64%</td><td>47,90%</td><td>292</td><td>294</td><td>147</td><td>88</td><td>206</td><td>73</td><td>0</td><td>0</td></tr>
<tr><td>New York Rangers</td><td>NYR</td><td>18</td><td>12</td><td>21</td><td>1</td><td>542</td><td>181</td><td>160</td><td>186</td><td>15</td><td>540</td><td>190</td><td>195</td><td>362</td><td>80</td><td>18</td><td>22,50%</td><td>90</td><td>19</td><td>78,89%</td><td>1</td><td>46,37%</td><td>48,14%</td><td>47,64%</td><td>462</td><td>442</td><td>234</td><td>141</td><td>303</td><td>115</td><td>1</td><td>0</td></tr>
<tr><td>Ottawa Senators</td><td>OTT</td><td>5</td><td>4</td><td>4</td><td>0</td><td>168</td><td>70</td><td>45</td><td>53</td><td>0</td><td>150</td><td>46</td><td>32</td><td>86</td><td>26</td><td>6</td><td>23,08%</td><td>14</td><td>5</td><td>64,29%</td><td>0</td><td>52,69%</td><td>50,94%</td><td>49,38%</td><td>117</td><td>122</td><td>61</td><td>35</td><td>86</td><td>32</td><td>0</td><td>0</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>27</td><td>28</td><td>18</td><td>3</td><td>622</td><td>202</td><td>203</td><td>205</td><td>12</td><td>569</td><td>176</td><td>156</td><td>437</td><td>102</td><td>22</td><td>21,57%</td><td>74</td><td>13</td><td>82,43%</td><td>0</td><td>48,40%</td><td>49,66%</td><td>51,99%</td><td>520</td><td>544</td><td>270</td><td>159</td><td>385</td><td>139</td><td>2</td><td>0</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>29</td><td>21</td><td>19</td><td>2</td><td>612</td><td>216</td><td>186</td><td>190</td><td>20</td><td>657</td><td>201</td><td>198</td><td>425</td><td>90</td><td>19</td><td>21,11%</td><td>92</td><td>16</td><td>82,61%</td><td>0</td><td>51,03%</td><td>51,20%</td><td>51,56%</td><td>574</td><td>538</td><td>290</td><td>171</td><td>371</td><td>143</td><td>0</td><td>1</td></tr>
<tr><td>Tampa Bay Lightning</td><td>TBL</td><td>11</td><td>5</td><td>9</td><td>0</td><td>305</td><td>93</td><td>80</td><td>114</td><td>18</td><td>307</td><td>84</td><td>102</td><td>167</td><td>38</td><td>9</td><td>23,68%</td><td>48</td><td>12</td><td>75,00%</td><td>0</td><td>50,13%</td><td>50,55%</td><td>51,55%</td><td>248</td><td>262</td><td>134</td><td>78</td><td>183</td><td>66</td><td>0</td><td>0</td></tr>
<tr><td>Toronto Maple Leafs</td><td>TOR</td><td>8</td><td>3</td><td>8</td><td>0</td><td>224</td><td>65</td><td>68</td><td>82</td><td>9</td><td>225</td><td>60</td><td>46</td><td>120</td><td>22</td><td>6</td><td>27,27%</td><td>20</td><td>5</td><td>75,00%</td><td>0</td><td>51,57%</td><td>47,69%</td><td>52,04%</td><td>176</td><td>171</td><td>85</td><td>52</td><td>118</td><td>42</td><td>0</td><td>0</td></tr>
<tr><td>Vegas Golden Knights</td><td>VEG</td><td>8</td><td>5</td><td>5</td><td>0</td><td>193</td><td>65</td><td>59</td><td>69</td><td>0</td><td>153</td><td>46</td><td>34</td><td>90</td><td>21</td><td>3</td><td>14,29%</td><td>17</td><td>3</td><td>82,35%</td><td>0</td><td>50,00%</td><td>49,09%</td><td>43,88%</td><td>131</td><td>155</td><td>74</td><td>41</td><td>113</td><td>37</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,99</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Philadelphia Flyers</td><td>3,45</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>3,40</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>3,23</td></tr>
<tr><td>4</td><td>Chicago Blackhawks</td><td>3,17</td></tr>
<tr><td>5</td><td>Detroit Red Wings</td><td>3,15</td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>3,09</td></tr>
<tr><td>7</td><td>Vegas Golden Knights</td><td>3,00</td></tr>
<tr><td>8</td><td>Arizona Coyotes</td><td>2,89</td></tr>
<tr><td>9</td><td>New York Rangers</td><td>2,89</td></tr>
<tr><td>10</td><td>Nashville Predators</td><td>2,86</td></tr>
<tr><td>11</td><td>Florida Panthers</td><td>2,86</td></tr>
<tr><td>12</td><td>Toronto Maple Leafs</td><td>2,71</td></tr>
<tr><td>13</td><td>Ottawa Senators</td><td>2,60</td></tr>
<tr><td>14</td><td>Dallas Stars</td><td>2,60</td></tr>
<tr><td>15</td><td>New Jersey Devils</td><td>2,58</td></tr>
<tr><td>16</td><td>Tampa Bay Lightning</td><td>2,50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,99</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>New York Rangers</td><td>2,50</td></tr>
<tr><td>2</td><td>Philadelphia Flyers</td><td>2,50</td></tr>
<tr><td>3</td><td>New Jersey Devils</td><td>2,75</td></tr>
<tr><td>4</td><td>Tampa Bay Lightning</td><td>2,80</td></tr>
<tr><td>5</td><td>St. Louis Blues</td><td>2,83</td></tr>
<tr><td>6</td><td>Nashville Predators</td><td>2,86</td></tr>
<tr><td>7</td><td>Arizona Coyotes</td><td>2,89</td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>3,08</td></tr>
<tr><td>9</td><td>Florida Panthers</td><td>3,14</td></tr>
<tr><td>10</td><td>Toronto Maple Leafs</td><td>3,14</td></tr>
<tr><td>11</td><td>Chicago Blackhawks</td><td>3,33</td></tr>
<tr><td>12</td><td>Detroit Red Wings</td><td>3,38</td></tr>
<tr><td>13</td><td>Vegas Golden Knights</td><td>3,50</td></tr>
<tr><td>14</td><td>Ottawa Senators</td><td>3,60</td></tr>
<tr><td>15</td><td>Dallas Stars</td><td>4,20</td></tr>
<tr><td>16</td><td>Montreal Canadiens</td><td>4,60</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Philadelphia Flyers</td><td>138,18%</td></tr>
<tr><td>2</td><td>New York Rangers</td><td>115,56%</td></tr>
<tr><td>3</td><td>St. Louis Blues</td><td>109,23%</td></tr>
<tr><td>4</td><td>Los Angeles Kings</td><td>105,00%</td></tr>
<tr><td>5</td><td>Arizona Coyotes</td><td>100,00%</td></tr>
<tr><td>6</td><td>Nashville Predators</td><td>100,00%</td></tr>
<tr><td>7</td><td>Chicago Blackhawks</td><td>95,00%</td></tr>
<tr><td>8</td><td>New Jersey Devils</td><td>93,94%</td></tr>
<tr><td>9</td><td>Detroit Red Wings</td><td>93,18%</td></tr>
<tr><td>10</td><td>Florida Panthers</td><td>90,91%</td></tr>
<tr><td>11</td><td>Tampa Bay Lightning</td><td>89,29%</td></tr>
<tr><td>12</td><td>Toronto Maple Leafs</td><td>86,36%</td></tr>
<tr><td>13</td><td>Vegas Golden Knights</td><td>85,71%</td></tr>
<tr><td>14</td><td>Montreal Canadiens</td><td>73,91%</td></tr>
<tr><td>15</td><td>Ottawa Senators</td><td>72,22%</td></tr>
<tr><td>16</td><td>Dallas Stars</td><td>61,90%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 21,55%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Montreal Canadiens</td><td>33,33%</td></tr>
<tr><td>2</td><td>Nashville Predators</td><td>28,57%</td></tr>
<tr><td>3</td><td>Dallas Stars</td><td>28,57%</td></tr>
<tr><td>4</td><td>Toronto Maple Leafs</td><td>27,27%</td></tr>
<tr><td>5</td><td>Chicago Blackhawks</td><td>24,00%</td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>23,68%</td></tr>
<tr><td>7</td><td>Ottawa Senators</td><td>23,08%</td></tr>
<tr><td>8</td><td>Detroit Red Wings</td><td>22,58%</td></tr>
<tr><td>9</td><td>New York Rangers</td><td>22,50%</td></tr>
<tr><td>10</td><td>Philadelphia Flyers</td><td>21,57%</td></tr>
<tr><td>11</td><td>St. Louis Blues</td><td>21,11%</td></tr>
<tr><td>12</td><td>Los Angeles Kings</td><td>19,57%</td></tr>
<tr><td>13</td><td>New Jersey Devils</td><td>17,65%</td></tr>
<tr><td>14</td><td>Florida Panthers</td><td>16,67%</td></tr>
<tr><td>15</td><td>Arizona Coyotes</td><td>15,00%</td></tr>
<tr><td>16</td><td>Vegas Golden Knights</td><td>14,29%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 78,45%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>88,46%</td></tr>
<tr><td>2</td><td>St. Louis Blues</td><td>82,61%</td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>82,43%</td></tr>
<tr><td>4</td><td>Vegas Golden Knights</td><td>82,35%</td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>81,82%</td></tr>
<tr><td>6</td><td>Dallas Stars</td><td>80,00%</td></tr>
<tr><td>7</td><td>New York Rangers</td><td>78,89%</td></tr>
<tr><td>8</td><td>Arizona Coyotes</td><td>77,14%</td></tr>
<tr><td>9</td><td>Detroit Red Wings</td><td>77,08%</td></tr>
<tr><td>10</td><td>Tampa Bay Lightning</td><td>75,00%</td></tr>
<tr><td>11</td><td>Toronto Maple Leafs</td><td>75,00%</td></tr>
<tr><td>12</td><td>New Jersey Devils</td><td>74,36%</td></tr>
<tr><td>13</td><td>Florida Panthers</td><td>74,07%</td></tr>
<tr><td>14</td><td>Montreal Canadiens</td><td>72,22%</td></tr>
<tr><td>15</td><td>Chicago Blackhawks</td><td>71,05%</td></tr>
<tr><td>16</td><td>Ottawa Senators</td><td>64,29%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>117,03%</td></tr>
<tr><td>2</td><td>Dallas Stars</td><td>108,57%</td></tr>
<tr><td>3</td><td>Montreal Canadiens</td><td>105,56%</td></tr>
<tr><td>4</td><td>Philadelphia Flyers</td><td>104,00%</td></tr>
<tr><td>5</td><td>St. Louis Blues</td><td>103,72%</td></tr>
<tr><td>6</td><td>Toronto Maple Leafs</td><td>102,27%</td></tr>
<tr><td>7</td><td>New York Rangers</td><td>101,39%</td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>101,38%</td></tr>
<tr><td>9</td><td>Detroit Red Wings</td><td>99,66%</td></tr>
<tr><td>10</td><td>Tampa Bay Lightning</td><td>98,68%</td></tr>
<tr><td>11</td><td>Vegas Golden Knights</td><td>96,64%</td></tr>
<tr><td>12</td><td>Chicago Blackhawks</td><td>95,05%</td></tr>
<tr><td>13</td><td>Arizona Coyotes</td><td>92,14%</td></tr>
<tr><td>14</td><td>New Jersey Devils</td><td>92,01%</td></tr>
<tr><td>15</td><td>Florida Panthers</td><td>90,74%</td></tr>
<tr><td>16</td><td>Ottawa Senators</td><td>87,36%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28,99</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Ottawa Senators</td><td>33,60</td></tr>
<tr><td>2</td><td>Vegas Golden Knights</td><td>32,17</td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>32,00</td></tr>
<tr><td>4</td><td>Florida Panthers</td><td>31,00</td></tr>
<tr><td>5</td><td>Detroit Red Wings</td><td>30,69</td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>30,50</td></tr>
<tr><td>7</td><td>Chicago Blackhawks</td><td>30,17</td></tr>
<tr><td>8</td><td>New York Rangers</td><td>30,11</td></tr>
<tr><td>9</td><td>New Jersey Devils</td><td>30,08</td></tr>
<tr><td>10</td><td>Philadelphia Flyers</td><td>28,27</td></tr>
<tr><td>11</td><td>Los Angeles Kings</td><td>27,77</td></tr>
<tr><td>12</td><td>Arizona Coyotes</td><td>27,58</td></tr>
<tr><td>13</td><td>Dallas Stars</td><td>27,40</td></tr>
<tr><td>14</td><td>Montreal Canadiens</td><td>27,20</td></tr>
<tr><td>15</td><td>St. Louis Blues</td><td>26,61</td></tr>
<tr><td>16</td><td>Nashville Predators</td><td>25,43</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28,99</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Vegas Golden Knights</td><td>25,50</td></tr>
<tr><td>2</td><td>Philadelphia Flyers</td><td>25,86</td></tr>
<tr><td>3</td><td>Nashville Predators</td><td>27,29</td></tr>
<tr><td>4</td><td>Dallas Stars</td><td>27,60</td></tr>
<tr><td>5</td><td>Arizona Coyotes</td><td>28,05</td></tr>
<tr><td>6</td><td>New Jersey Devils</td><td>28,50</td></tr>
<tr><td>7</td><td>St. Louis Blues</td><td>28,57</td></tr>
<tr><td>8</td><td>Detroit Red Wings</td><td>28,92</td></tr>
<tr><td>9</td><td>Los Angeles Kings</td><td>29,92</td></tr>
<tr><td>10</td><td>Ottawa Senators</td><td>30,00</td></tr>
<tr><td>11</td><td>New York Rangers</td><td>30,00</td></tr>
<tr><td>12</td><td>Tampa Bay Lightning</td><td>30,70</td></tr>
<tr><td>13</td><td>Toronto Maple Leafs</td><td>32,14</td></tr>
<tr><td>14</td><td>Montreal Canadiens</td><td>32,40</td></tr>
<tr><td>15</td><td>Chicago Blackhawks</td><td>32,50</td></tr>
<tr><td>16</td><td>Florida Panthers</td><td>33,29</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Vegas Golden Knights</td><td>126,14%</td></tr>
<tr><td>2</td><td>Ottawa Senators</td><td>112,00%</td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>109,31%</td></tr>
<tr><td>4</td><td>Detroit Red Wings</td><td>106,12%</td></tr>
<tr><td>5</td><td>New Jersey Devils</td><td>105,56%</td></tr>
<tr><td>6</td><td>New York Rangers</td><td>100,37%</td></tr>
<tr><td>7</td><td>Toronto Maple Leafs</td><td>99,56%</td></tr>
<tr><td>8</td><td>Tampa Bay Lightning</td><td>99,35%</td></tr>
<tr><td>9</td><td>Dallas Stars</td><td>99,28%</td></tr>
<tr><td>10</td><td>Arizona Coyotes</td><td>98,31%</td></tr>
<tr><td>11</td><td>Nashville Predators</td><td>93,19%</td></tr>
<tr><td>12</td><td>St. Louis Blues</td><td>93,15%</td></tr>
<tr><td>13</td><td>Florida Panthers</td><td>93,13%</td></tr>
<tr><td>14</td><td>Chicago Blackhawks</td><td>92,82%</td></tr>
<tr><td>15</td><td>Los Angeles Kings</td><td>92,80%</td></tr>
<tr><td>16</td><td>Montreal Canadiens</td><td>83,95%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8,43</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Vegas Golden Knights</td><td>5,67</td></tr>
<tr><td>2</td><td>Ottawa Senators</td><td>6,40</td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>6,57</td></tr>
<tr><td>4</td><td>Philadelphia Flyers</td><td>7,09</td></tr>
<tr><td>5</td><td>New Jersey Devils</td><td>7,17</td></tr>
<tr><td>6</td><td>Montreal Canadiens</td><td>7,60</td></tr>
<tr><td>7</td><td>Arizona Coyotes</td><td>7,89</td></tr>
<tr><td>8</td><td>Florida Panthers</td><td>8,00</td></tr>
<tr><td>9</td><td>Nashville Predators</td><td>8,00</td></tr>
<tr><td>10</td><td>Detroit Red Wings</td><td>8,38</td></tr>
<tr><td>11</td><td>Dallas Stars</td><td>8,40</td></tr>
<tr><td>12</td><td>St. Louis Blues</td><td>8,61</td></tr>
<tr><td>13</td><td>Los Angeles Kings</td><td>8,77</td></tr>
<tr><td>14</td><td>Tampa Bay Lightning</td><td>10,20</td></tr>
<tr><td>15</td><td>New York Rangers</td><td>10,83</td></tr>
<tr><td>16</td><td>Chicago Blackhawks</td><td>14,50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18,92</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Arizona Coyotes</td><td>21,00</td></tr>
<tr><td>2</td><td>New Jersey Devils</td><td>20,42</td></tr>
<tr><td>3</td><td>New York Rangers</td><td>20,11</td></tr>
<tr><td>4</td><td>Philadelphia Flyers</td><td>19,86</td></tr>
<tr><td>5</td><td>Chicago Blackhawks</td><td>19,83</td></tr>
<tr><td>6</td><td>Los Angeles Kings</td><td>18,85</td></tr>
<tr><td>7</td><td>Detroit Red Wings</td><td>18,85</td></tr>
<tr><td>8</td><td>St. Louis Blues</td><td>18,48</td></tr>
<tr><td>9</td><td>Florida Panthers</td><td>18,43</td></tr>
<tr><td>10</td><td>Nashville Predators</td><td>18,14</td></tr>
<tr><td>11</td><td>Dallas Stars</td><td>17,80</td></tr>
<tr><td>12</td><td>Ottawa Senators</td><td>17,20</td></tr>
<tr><td>13</td><td>Toronto Maple Leafs</td><td>17,14</td></tr>
<tr><td>14</td><td>Tampa Bay Lightning</td><td>16,70</td></tr>
<tr><td>15</td><td>Montreal Canadiens</td><td>16,60</td></tr>
<tr><td>16</td><td>Vegas Golden Knights</td><td>15,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Florida Panthers</td><td>53,52%</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>51,85%</td></tr>
<tr><td>3</td><td>Detroit Red Wings</td><td>51,51%</td></tr>
<tr><td>4</td><td>Ottawa Senators</td><td>51,30%</td></tr>
<tr><td>5</td><td>St. Louis Blues</td><td>51,19%</td></tr>
<tr><td>6</td><td>Los Angeles Kings</td><td>50,92%</td></tr>
<tr><td>7</td><td>Tampa Bay Lightning</td><td>50,55%</td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>50,38%</td></tr>
<tr><td>9</td><td>Arizona Coyotes</td><td>50,03%</td></tr>
<tr><td>10</td><td>Toronto Maple Leafs</td><td>50,00%</td></tr>
<tr><td>11</td><td>New Jersey Devils</td><td>49,85%</td></tr>
<tr><td>12</td><td>Philadelphia Flyers</td><td>49,61%</td></tr>
<tr><td>13</td><td>Vegas Golden Knights</td><td>48,39%</td></tr>
<tr><td>14</td><td>Nashville Predators</td><td>47,65%</td></tr>
<tr><td>15</td><td>New York Rangers</td><td>47,32%</td></tr>
<tr><td>16</td><td>Dallas Stars</td><td>45,26%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
