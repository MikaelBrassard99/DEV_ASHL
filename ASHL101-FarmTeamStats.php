<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Team Stats</title>
<script src="ASHL101.js"></script>
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
<tr><td>Laval Chiefs</td><td>80</td><td>35</td><td>34</td><td>7</td><td>1</td><td>1</td><td>2</td><td>245</td><td>243</td><td>40</td><td>16</td><td>17</td><td>6</td><td>1</td><td>0</td><td>0</td><td>128</td><td>122</td><td>40</td><td>19</td><td>17</td><td>1</td><td>0</td><td>1</td><td>2</td><td>117</td><td>121</td><td>245</td><td>439</td><td>684</td></tr>
<tr><td>The Nuuk Vikings</td><td>80</td><td>26</td><td>42</td><td>4</td><td>4</td><td>3</td><td>1</td><td>222</td><td>248</td><td>40</td><td>14</td><td>21</td><td>3</td><td>1</td><td>1</td><td>0</td><td>115</td><td>121</td><td>40</td><td>12</td><td>21</td><td>1</td><td>3</td><td>2</td><td>1</td><td>107</td><td>127</td><td>222</td><td>385</td><td>607</td></tr>
<tr><td>Providence Bruins</td><td>80</td><td>23</td><td>32</td><td>7</td><td>7</td><td>7</td><td>4</td><td>234</td><td>238</td><td>40</td><td>11</td><td>14</td><td>4</td><td>4</td><td>4</td><td>3</td><td>125</td><td>129</td><td>40</td><td>12</td><td>18</td><td>3</td><td>3</td><td>3</td><td>1</td><td>109</td><td>109</td><td>234</td><td>414</td><td>648</td></tr>
<tr><td>Rochester Americans</td><td>80</td><td>34</td><td>29</td><td>5</td><td>3</td><td>4</td><td>5</td><td>250</td><td>244</td><td>40</td><td>16</td><td>15</td><td>1</td><td>2</td><td>3</td><td>3</td><td>122</td><td>118</td><td>40</td><td>18</td><td>14</td><td>4</td><td>1</td><td>1</td><td>2</td><td>128</td><td>126</td><td>250</td><td>443</td><td>693</td></tr>
<tr><td>Joliette Sportif</td><td>80</td><td>27</td><td>40</td><td>4</td><td>4</td><td>2</td><td>3</td><td>213</td><td>237</td><td>40</td><td>15</td><td>19</td><td>1</td><td>2</td><td>2</td><td>1</td><td>112</td><td>116</td><td>40</td><td>12</td><td>21</td><td>3</td><td>2</td><td>0</td><td>2</td><td>101</td><td>121</td><td>213</td><td>389</td><td>602</td></tr>
<tr><td>Charlotte Checkers</td><td>80</td><td>30</td><td>29</td><td>8</td><td>7</td><td>4</td><td>2</td><td>243</td><td>239</td><td>40</td><td>19</td><td>13</td><td>3</td><td>3</td><td>2</td><td>0</td><td>122</td><td>112</td><td>40</td><td>11</td><td>16</td><td>5</td><td>4</td><td>2</td><td>2</td><td>121</td><td>127</td><td>243</td><td>431</td><td>674</td></tr>
<tr><td>Rockford IceHogs</td><td>80</td><td>28</td><td>40</td><td>1</td><td>5</td><td>1</td><td>5</td><td>220</td><td>264</td><td>40</td><td>15</td><td>19</td><td>0</td><td>2</td><td>1</td><td>3</td><td>110</td><td>130</td><td>40</td><td>13</td><td>21</td><td>1</td><td>3</td><td>0</td><td>2</td><td>110</td><td>134</td><td>220</td><td>394</td><td>614</td></tr>
<tr><td>Lake Erie Monsters</td><td>80</td><td>36</td><td>27</td><td>6</td><td>4</td><td>3</td><td>4</td><td>250</td><td>229</td><td>40</td><td>19</td><td>13</td><td>3</td><td>2</td><td>2</td><td>1</td><td>133</td><td>124</td><td>40</td><td>17</td><td>14</td><td>3</td><td>2</td><td>1</td><td>3</td><td>117</td><td>105</td><td>250</td><td>448</td><td>698</td></tr>
<tr><td>Springfield Falcons</td><td>80</td><td>37</td><td>26</td><td>9</td><td>2</td><td>2</td><td>4</td><td>243</td><td>223</td><td>40</td><td>19</td><td>10</td><td>7</td><td>1</td><td>1</td><td>2</td><td>128</td><td>113</td><td>40</td><td>18</td><td>16</td><td>2</td><td>1</td><td>1</td><td>2</td><td>115</td><td>110</td><td>243</td><td>444</td><td>687</td></tr>
<tr><td>Las Vegas Gamblers</td><td>80</td><td>30</td><td>32</td><td>4</td><td>7</td><td>7</td><td>0</td><td>238</td><td>246</td><td>40</td><td>15</td><td>15</td><td>2</td><td>4</td><td>4</td><td>0</td><td>122</td><td>122</td><td>40</td><td>15</td><td>17</td><td>2</td><td>3</td><td>3</td><td>0</td><td>116</td><td>124</td><td>238</td><td>415</td><td>653</td></tr>
<tr><td>Grand Rapids Griffins</td><td>80</td><td>36</td><td>29</td><td>7</td><td>4</td><td>4</td><td>0</td><td>240</td><td>231</td><td>40</td><td>21</td><td>11</td><td>5</td><td>2</td><td>1</td><td>0</td><td>122</td><td>101</td><td>40</td><td>15</td><td>18</td><td>2</td><td>2</td><td>3</td><td>0</td><td>118</td><td>130</td><td>240</td><td>423</td><td>663</td></tr>
<tr><td>Oklahoma City Barons</td><td>80</td><td>33</td><td>33</td><td>6</td><td>2</td><td>3</td><td>3</td><td>239</td><td>218</td><td>40</td><td>17</td><td>16</td><td>3</td><td>1</td><td>2</td><td>1</td><td>126</td><td>109</td><td>40</td><td>16</td><td>17</td><td>3</td><td>1</td><td>1</td><td>2</td><td>113</td><td>109</td><td>239</td><td>436</td><td>675</td></tr>
<tr><td>San Antonio Rampage</td><td>80</td><td>27</td><td>31</td><td>9</td><td>8</td><td>3</td><td>2</td><td>241</td><td>249</td><td>40</td><td>15</td><td>15</td><td>4</td><td>4</td><td>1</td><td>1</td><td>113</td><td>117</td><td>40</td><td>12</td><td>16</td><td>5</td><td>4</td><td>2</td><td>1</td><td>128</td><td>132</td><td>241</td><td>441</td><td>682</td></tr>
<tr><td>Gatineau Olympiques</td><td>80</td><td>34</td><td>31</td><td>5</td><td>8</td><td>2</td><td>0</td><td>234</td><td>235</td><td>40</td><td>17</td><td>15</td><td>4</td><td>4</td><td>0</td><td>0</td><td>112</td><td>113</td><td>40</td><td>17</td><td>16</td><td>1</td><td>4</td><td>2</td><td>0</td><td>122</td><td>122</td><td>234</td><td>421</td><td>655</td></tr>
<tr><td>Houston Aeros</td><td>80</td><td>28</td><td>40</td><td>5</td><td>4</td><td>2</td><td>1</td><td>220</td><td>251</td><td>40</td><td>18</td><td>18</td><td>2</td><td>0</td><td>1</td><td>1</td><td>114</td><td>113</td><td>40</td><td>10</td><td>22</td><td>3</td><td>4</td><td>1</td><td>0</td><td>106</td><td>138</td><td>220</td><td>400</td><td>620</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>80</td><td>28</td><td>36</td><td>4</td><td>6</td><td>2</td><td>4</td><td>226</td><td>252</td><td>40</td><td>14</td><td>19</td><td>1</td><td>4</td><td>0</td><td>2</td><td>112</td><td>126</td><td>40</td><td>14</td><td>17</td><td>3</td><td>2</td><td>2</td><td>2</td><td>114</td><td>126</td><td>226</td><td>410</td><td>636</td></tr>
<tr><td>Milwaukee Admirals</td><td>80</td><td>38</td><td>25</td><td>5</td><td>6</td><td>1</td><td>5</td><td>259</td><td>232</td><td>40</td><td>22</td><td>9</td><td>3</td><td>2</td><td>1</td><td>3</td><td>128</td><td>107</td><td>40</td><td>16</td><td>16</td><td>2</td><td>4</td><td>0</td><td>2</td><td>131</td><td>125</td><td>259</td><td>470</td><td>729</td></tr>
<tr><td>Albany Devils</td><td>80</td><td>31</td><td>34</td><td>2</td><td>4</td><td>5</td><td>4</td><td>233</td><td>241</td><td>40</td><td>18</td><td>16</td><td>1</td><td>1</td><td>3</td><td>1</td><td>120</td><td>120</td><td>40</td><td>13</td><td>18</td><td>1</td><td>3</td><td>2</td><td>3</td><td>113</td><td>121</td><td>233</td><td>407</td><td>640</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>80</td><td>33</td><td>29</td><td>3</td><td>9</td><td>3</td><td>3</td><td>235</td><td>232</td><td>40</td><td>18</td><td>14</td><td>2</td><td>3</td><td>2</td><td>1</td><td>125</td><td>115</td><td>40</td><td>15</td><td>15</td><td>1</td><td>6</td><td>1</td><td>2</td><td>110</td><td>117</td><td>235</td><td>426</td><td>661</td></tr>
<tr><td>Connecticut Whale</td><td>80</td><td>43</td><td>25</td><td>3</td><td>6</td><td>1</td><td>2</td><td>286</td><td>249</td><td>40</td><td>19</td><td>14</td><td>2</td><td>4</td><td>1</td><td>0</td><td>137</td><td>128</td><td>40</td><td>24</td><td>11</td><td>1</td><td>2</td><td>0</td><td>2</td><td>149</td><td>121</td><td>286</td><td>516</td><td>802</td></tr>
<tr><td>Binghamton Senators</td><td>80</td><td>30</td><td>38</td><td>4</td><td>5</td><td>1</td><td>2</td><td>247</td><td>275</td><td>40</td><td>14</td><td>21</td><td>2</td><td>1</td><td>1</td><td>1</td><td>124</td><td>149</td><td>40</td><td>16</td><td>17</td><td>2</td><td>4</td><td>0</td><td>1</td><td>123</td><td>126</td><td>247</td><td>447</td><td>694</td></tr>
<tr><td>Adirondack Phantoms</td><td>80</td><td>29</td><td>37</td><td>3</td><td>5</td><td>2</td><td>4</td><td>217</td><td>248</td><td>40</td><td>17</td><td>14</td><td>1</td><td>3</td><td>1</td><td>4</td><td>121</td><td>121</td><td>40</td><td>12</td><td>23</td><td>2</td><td>2</td><td>1</td><td>0</td><td>96</td><td>127</td><td>217</td><td>389</td><td>606</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>80</td><td>36</td><td>27</td><td>8</td><td>3</td><td>5</td><td>1</td><td>242</td><td>226</td><td>40</td><td>17</td><td>10</td><td>7</td><td>2</td><td>3</td><td>1</td><td>128</td><td>117</td><td>40</td><td>19</td><td>17</td><td>1</td><td>1</td><td>2</td><td>0</td><td>114</td><td>109</td><td>242</td><td>429</td><td>671</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>80</td><td>33</td><td>28</td><td>8</td><td>2</td><td>5</td><td>4</td><td>277</td><td>241</td><td>40</td><td>18</td><td>14</td><td>4</td><td>0</td><td>1</td><td>3</td><td>133</td><td>114</td><td>40</td><td>15</td><td>14</td><td>4</td><td>2</td><td>4</td><td>1</td><td>144</td><td>127</td><td>277</td><td>496</td><td>773</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>80</td><td>33</td><td>33</td><td>5</td><td>6</td><td>2</td><td>1</td><td>243</td><td>231</td><td>40</td><td>16</td><td>18</td><td>2</td><td>1</td><td>2</td><td>1</td><td>118</td><td>118</td><td>40</td><td>17</td><td>15</td><td>3</td><td>5</td><td>0</td><td>0</td><td>125</td><td>113</td><td>243</td><td>439</td><td>682</td></tr>
<tr><td>Mercer Island Hafgufa</td><td>80</td><td>32</td><td>34</td><td>2</td><td>5</td><td>5</td><td>2</td><td>252</td><td>237</td><td>40</td><td>18</td><td>15</td><td>2</td><td>2</td><td>3</td><td>0</td><td>130</td><td>115</td><td>40</td><td>14</td><td>19</td><td>0</td><td>3</td><td>2</td><td>2</td><td>122</td><td>122</td><td>252</td><td>445</td><td>697</td></tr>
<tr><td>Peoria Rivermen</td><td>80</td><td>31</td><td>37</td><td>6</td><td>3</td><td>0</td><td>3</td><td>233</td><td>241</td><td>40</td><td>17</td><td>19</td><td>2</td><td>1</td><td>0</td><td>1</td><td>109</td><td>117</td><td>40</td><td>14</td><td>18</td><td>4</td><td>2</td><td>0</td><td>2</td><td>124</td><td>124</td><td>233</td><td>422</td><td>655</td></tr>
<tr><td>Norfolk Admirals</td><td>80</td><td>40</td><td>29</td><td>3</td><td>6</td><td>1</td><td>1</td><td>248</td><td>217</td><td>40</td><td>21</td><td>15</td><td>1</td><td>2</td><td>1</td><td>0</td><td>119</td><td>102</td><td>40</td><td>19</td><td>14</td><td>2</td><td>4</td><td>0</td><td>1</td><td>129</td><td>115</td><td>248</td><td>461</td><td>709</td></tr>
<tr><td>Roberval Dwarfs</td><td>80</td><td>34</td><td>36</td><td>2</td><td>3</td><td>2</td><td>3</td><td>232</td><td>251</td><td>40</td><td>20</td><td>16</td><td>1</td><td>1</td><td>1</td><td>1</td><td>120</td><td>121</td><td>40</td><td>14</td><td>20</td><td>1</td><td>2</td><td>1</td><td>2</td><td>112</td><td>130</td><td>232</td><td>428</td><td>660</td></tr>
<tr><td>Chicago Wolves</td><td>80</td><td>35</td><td>24</td><td>8</td><td>9</td><td>2</td><td>2</td><td>243</td><td>225</td><td>40</td><td>18</td><td>11</td><td>5</td><td>6</td><td>0</td><td>0</td><td>125</td><td>116</td><td>40</td><td>17</td><td>13</td><td>3</td><td>3</td><td>2</td><td>2</td><td>118</td><td>109</td><td>243</td><td>442</td><td>685</td></tr>
<tr><td>Henderson Silver Knights</td><td>80</td><td>29</td><td>35</td><td>3</td><td>7</td><td>1</td><td>5</td><td>232</td><td>243</td><td>40</td><td>13</td><td>17</td><td>3</td><td>2</td><td>1</td><td>4</td><td>118</td><td>130</td><td>40</td><td>16</td><td>18</td><td>0</td><td>5</td><td>0</td><td>1</td><td>114</td><td>113</td><td>232</td><td>429</td><td>661</td></tr>
<tr><td>CCCP Red Army</td><td>80</td><td>37</td><td>30</td><td>5</td><td>5</td><td>1</td><td>2</td><td>254</td><td>238</td><td>40</td><td>20</td><td>14</td><td>2</td><td>3</td><td>1</td><td>0</td><td>121</td><td>113</td><td>40</td><td>17</td><td>16</td><td>3</td><td>2</td><td>0</td><td>2</td><td>133</td><td>125</td><td>254</td><td>454</td><td>708</td></tr>
<tr><td>Manitoba Moose</td><td>80</td><td>31</td><td>35</td><td>2</td><td>3</td><td>3</td><td>6</td><td>229</td><td>246</td><td>40</td><td>22</td><td>11</td><td>1</td><td>2</td><td>1</td><td>3</td><td>128</td><td>111</td><td>40</td><td>9</td><td>24</td><td>1</td><td>1</td><td>2</td><td>3</td><td>101</td><td>135</td><td>229</td><td>407</td><td>636</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Laval Chiefs</td><td>LAV</td><td>89</td><td>65</td><td>83</td><td>11</td><td>2488</td><td>791</td><td>811</td><td>855</td><td>38</td><td>2424</td><td>736</td><td>577</td><td>1549</td><td>272</td><td>67</td><td>24,63%</td><td>243</td><td>45</td><td>81,48%</td><td>0</td><td>48,54%</td><td>48,96%</td><td>51,48%</td><td>1873</td><td>1931</td><td>1028</td><td>577</td><td>1340</td><td>520</td><td>5</td><td>3</td></tr>
<tr><td>The Nuuk Vikings</td><td>NUU</td><td>67</td><td>70</td><td>78</td><td>8</td><td>2538</td><td>830</td><td>831</td><td>853</td><td>38</td><td>2670</td><td>760</td><td>706</td><td>1676</td><td>256</td><td>42</td><td>16,41%</td><td>318</td><td>71</td><td>77,67%</td><td>4</td><td>47,92%</td><td>48,87%</td><td>51,49%</td><td>1992</td><td>1816</td><td>1024</td><td>599</td><td>1233</td><td>497</td><td>1</td><td>3</td></tr>
<tr><td>Providence Bruins</td><td>PRO</td><td>85</td><td>59</td><td>76</td><td>16</td><td>2483</td><td>840</td><td>812</td><td>777</td><td>87</td><td>2520</td><td>723</td><td>579</td><td>1536</td><td>271</td><td>47</td><td>17,34%</td><td>258</td><td>45</td><td>82,56%</td><td>1</td><td>52,04%</td><td>50,95%</td><td>53,26%</td><td>1910</td><td>1941</td><td>1032</td><td>590</td><td>1340</td><td>515</td><td>5</td><td>3</td></tr>
<tr><td>Rochester Americans</td><td>RCH</td><td>78</td><td>91</td><td>72</td><td>14</td><td>2666</td><td>891</td><td>888</td><td>851</td><td>64</td><td>2684</td><td>769</td><td>527</td><td>1509</td><td>257</td><td>52</td><td>20,23%</td><td>239</td><td>46</td><td>80,75%</td><td>1</td><td>50,76%</td><td>51,09%</td><td>51,36%</td><td>1900</td><td>1940</td><td>1022</td><td>582</td><td>1358</td><td>511</td><td>1</td><td>0</td></tr>
<tr><td>Joliette Sportif</td><td>JOL</td><td>67</td><td>73</td><td>67</td><td>9</td><td>2409</td><td>753</td><td>818</td><td>808</td><td>49</td><td>2573</td><td>751</td><td>681</td><td>1626</td><td>272</td><td>46</td><td>16,91%</td><td>305</td><td>55</td><td>81,97%</td><td>2</td><td>52,22%</td><td>50,97%</td><td>52,03%</td><td>1915</td><td>1904</td><td>1024</td><td>601</td><td>1310</td><td>509</td><td>3</td><td>2</td></tr>
<tr><td>Charlotte Checkers</td><td>CHA</td><td>80</td><td>74</td><td>77</td><td>14</td><td>2652</td><td>846</td><td>896</td><td>862</td><td>67</td><td>2652</td><td>782</td><td>738</td><td>1688</td><td>257</td><td>43</td><td>16,73%</td><td>307</td><td>58</td><td>81,11%</td><td>3</td><td>51,51%</td><td>51,22%</td><td>52,02%</td><td>1935</td><td>1897</td><td>1026</td><td>599</td><td>1303</td><td>507</td><td>0</td><td>2</td></tr>
<tr><td>Rockford IceHogs</td><td>RFD</td><td>79</td><td>76</td><td>63</td><td>3</td><td>2453</td><td>824</td><td>814</td><td>788</td><td>46</td><td>2644</td><td>742</td><td>602</td><td>1520</td><td>247</td><td>42</td><td>17,00%</td><td>253</td><td>54</td><td>78,66%</td><td>0</td><td>52,29%</td><td>51,44%</td><td>50,37%</td><td>1914</td><td>1895</td><td>1034</td><td>594</td><td>1305</td><td>512</td><td>4</td><td>5</td></tr>
<tr><td>Lake Erie Monsters</td><td>LKE</td><td>85</td><td>91</td><td>65</td><td>12</td><td>2533</td><td>824</td><td>777</td><td>887</td><td>70</td><td>2515</td><td>700</td><td>677</td><td>1557</td><td>287</td><td>52</td><td>18,12%</td><td>303</td><td>63</td><td>79,21%</td><td>2</td><td>49,27%</td><td>52,00%</td><td>49,88%</td><td>1889</td><td>1924</td><td>1044</td><td>596</td><td>1326</td><td>517</td><td>3</td><td>0</td></tr>
<tr><td>Springfield Falcons</td><td>SPR</td><td>82</td><td>75</td><td>75</td><td>17</td><td>2624</td><td>822</td><td>838</td><td>922</td><td>72</td><td>2542</td><td>762</td><td>566</td><td>1611</td><td>277</td><td>55</td><td>19,86%</td><td>260</td><td>47</td><td>81,92%</td><td>3</td><td>50,03%</td><td>51,10%</td><td>51,23%</td><td>1931</td><td>1898</td><td>1025</td><td>588</td><td>1310</td><td>509</td><td>7</td><td>2</td></tr>
<tr><td>Las Vegas Gamblers</td><td>LVG</td><td>87</td><td>72</td><td>68</td><td>17</td><td>2675</td><td>878</td><td>896</td><td>867</td><td>60</td><td>2527</td><td>721</td><td>632</td><td>1551</td><td>293</td><td>55</td><td>18,77%</td><td>288</td><td>57</td><td>80,21%</td><td>2</td><td>51,54%</td><td>50,02%</td><td>50,93%</td><td>1921</td><td>1906</td><td>1033</td><td>603</td><td>1303</td><td>514</td><td>4</td><td>2</td></tr>
<tr><td>Grand Rapids Griffins</td><td>GRG</td><td>103</td><td>64</td><td>62</td><td>14</td><td>2539</td><td>889</td><td>815</td><td>806</td><td>40</td><td>2622</td><td>771</td><td>553</td><td>1578</td><td>285</td><td>56</td><td>19,65%</td><td>252</td><td>47</td><td>81,35%</td><td>1</td><td>51,34%</td><td>49,73%</td><td>52,32%</td><td>1933</td><td>1879</td><td>1029</td><td>599</td><td>1286</td><td>515</td><td>5</td><td>0</td></tr>
<tr><td>Oklahoma City Barons</td><td>OKC</td><td>74</td><td>80</td><td>76</td><td>13</td><td>2665</td><td>893</td><td>874</td><td>863</td><td>59</td><td>2632</td><td>801</td><td>649</td><td>1647</td><td>276</td><td>65</td><td>23,55%</td><td>294</td><td>48</td><td>83,67%</td><td>4</td><td>50,55%</td><td>49,92%</td><td>50,94%</td><td>1936</td><td>1887</td><td>1022</td><td>599</td><td>1297</td><td>508</td><td>2</td><td>0</td></tr>
<tr><td>San Antonio Rampage</td><td>SAR</td><td>90</td><td>70</td><td>69</td><td>14</td><td>2543</td><td>827</td><td>829</td><td>847</td><td>58</td><td>2523</td><td>707</td><td>569</td><td>1492</td><td>271</td><td>42</td><td>15,50%</td><td>254</td><td>48</td><td>81,10%</td><td>1</td><td>52,07%</td><td>53,09%</td><td>51,16%</td><td>1900</td><td>1934</td><td>1037</td><td>590</td><td>1343</td><td>516</td><td>6</td><td>1</td></tr>
<tr><td>Gatineau Olympiques</td><td>GAT</td><td>89</td><td>81</td><td>57</td><td>9</td><td>2548</td><td>825</td><td>865</td><td>838</td><td>25</td><td>2428</td><td>709</td><td>639</td><td>1553</td><td>264</td><td>44</td><td>16,67%</td><td>266</td><td>53</td><td>80,08%</td><td>3</td><td>50,60%</td><td>49,70%</td><td>50,04%</td><td>1870</td><td>1939</td><td>1019</td><td>588</td><td>1344</td><td>510</td><td>2</td><td>4</td></tr>
<tr><td>Houston Aeros</td><td>HOU</td><td>72</td><td>86</td><td>55</td><td>9</td><td>2528</td><td>830</td><td>864</td><td>818</td><td>24</td><td>2458</td><td>763</td><td>627</td><td>1510</td><td>264</td><td>44</td><td>16,67%</td><td>281</td><td>58</td><td>79,36%</td><td>5</td><td>48,45%</td><td>48,85%</td><td>48,81%</td><td>1891</td><td>1912</td><td>1026</td><td>589</td><td>1318</td><td>512</td><td>2</td><td>1</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>TRD</td><td>84</td><td>67</td><td>69</td><td>8</td><td>2567</td><td>823</td><td>869</td><td>848</td><td>45</td><td>2569</td><td>746</td><td>569</td><td>1618</td><td>289</td><td>52</td><td>17,99%</td><td>254</td><td>56</td><td>77,95%</td><td>1</td><td>51,24%</td><td>49,43%</td><td>50,59%</td><td>1884</td><td>1924</td><td>1040</td><td>596</td><td>1322</td><td>520</td><td>1</td><td>2</td></tr>
<tr><td>Milwaukee Admirals</td><td>MIL</td><td>104</td><td>80</td><td>69</td><td>8</td><td>2621</td><td>884</td><td>854</td><td>846</td><td>58</td><td>2451</td><td>712</td><td>600</td><td>1524</td><td>268</td><td>55</td><td>20,52%</td><td>263</td><td>53</td><td>79,85%</td><td>1</td><td>51,06%</td><td>52,87%</td><td>51,09%</td><td>1892</td><td>1926</td><td>1038</td><td>596</td><td>1329</td><td>520</td><td>5</td><td>6</td></tr>
<tr><td>Albany Devils</td><td>ALB</td><td>90</td><td>66</td><td>70</td><td>10</td><td>2548</td><td>840</td><td>848</td><td>833</td><td>55</td><td>2563</td><td>794</td><td>657</td><td>1571</td><td>271</td><td>50</td><td>18,45%</td><td>290</td><td>51</td><td>82,41%</td><td>1</td><td>48,97%</td><td>49,81%</td><td>49,88%</td><td>1928</td><td>1902</td><td>1027</td><td>596</td><td>1315</td><td>508</td><td>0</td><td>2</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>BRI</td><td>82</td><td>73</td><td>74</td><td>8</td><td>2642</td><td>821</td><td>838</td><td>938</td><td>73</td><td>2459</td><td>741</td><td>639</td><td>1586</td><td>296</td><td>61</td><td>20,61%</td><td>271</td><td>48</td><td>82,29%</td><td>5</td><td>51,82%</td><td>50,82%</td><td>51,53%</td><td>1863</td><td>1967</td><td>1028</td><td>586</td><td>1361</td><td>518</td><td>8</td><td>3</td></tr>
<tr><td>Connecticut Whale</td><td>CTW</td><td>99</td><td>100</td><td>83</td><td>7</td><td>2738</td><td>872</td><td>912</td><td>942</td><td>25</td><td>2430</td><td>716</td><td>576</td><td>1580</td><td>278</td><td>62</td><td>22,30%</td><td>254</td><td>52</td><td>79,53%</td><td>3</td><td>51,38%</td><td>50,67%</td><td>50,96%</td><td>1834</td><td>1976</td><td>1017</td><td>577</td><td>1386</td><td>515</td><td>3</td><td>4</td></tr>
<tr><td>Binghamton Senators</td><td>BNG</td><td>87</td><td>80</td><td>75</td><td>5</td><td>2556</td><td>829</td><td>864</td><td>836</td><td>34</td><td>2592</td><td>752</td><td>555</td><td>1580</td><td>266</td><td>48</td><td>18,05%</td><td>241</td><td>49</td><td>79,67%</td><td>2</td><td>49,11%</td><td>50,09%</td><td>49,45%</td><td>1939</td><td>1867</td><td>1031</td><td>592</td><td>1279</td><td>513</td><td>1</td><td>1</td></tr>
<tr><td>Adirondack Phantoms</td><td>ADK</td><td>80</td><td>70</td><td>62</td><td>6</td><td>2372</td><td>771</td><td>810</td><td>761</td><td>46</td><td>2537</td><td>794</td><td>638</td><td>1605</td><td>272</td><td>65</td><td>23,90%</td><td>283</td><td>51</td><td>81,98%</td><td>1</td><td>49,48%</td><td>48,78%</td><td>46,30%</td><td>1925</td><td>1900</td><td>1025</td><td>594</td><td>1305</td><td>508</td><td>2</td><td>3</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>WBS</td><td>65</td><td>81</td><td>83</td><td>14</td><td>2454</td><td>755</td><td>831</td><td>823</td><td>69</td><td>2530</td><td>758</td><td>536</td><td>1492</td><td>291</td><td>54</td><td>18,56%</td><td>250</td><td>52</td><td>79,20%</td><td>3</td><td>50,45%</td><td>49,07%</td><td>48,88%</td><td>1914</td><td>1913</td><td>1033</td><td>604</td><td>1320</td><td>514</td><td>4</td><td>2</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>CHI</td><td>104</td><td>86</td><td>74</td><td>17</td><td>2641</td><td>893</td><td>863</td><td>837</td><td>78</td><td>2696</td><td>782</td><td>712</td><td>1557</td><td>229</td><td>60</td><td>26,20%</td><td>306</td><td>61</td><td>80,07%</td><td>4</td><td>50,46%</td><td>50,31%</td><td>51,42%</td><td>1945</td><td>1888</td><td>1026</td><td>591</td><td>1300</td><td>507</td><td>2</td><td>0</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>RNO</td><td>85</td><td>78</td><td>73</td><td>9</td><td>2639</td><td>864</td><td>853</td><td>900</td><td>29</td><td>2552</td><td>732</td><td>655</td><td>1608</td><td>285</td><td>65</td><td>22,81%</td><td>290</td><td>58</td><td>80,00%</td><td>0</td><td>48,86%</td><td>50,47%</td><td>50,73%</td><td>1889</td><td>1918</td><td>1028</td><td>591</td><td>1326</td><td>514</td><td>6</td><td>1</td></tr>
<tr><td>Mercer Island Hafgufa</td><td>MIH</td><td>96</td><td>79</td><td>70</td><td>12</td><td>2569</td><td>858</td><td>879</td><td>805</td><td>51</td><td>2552</td><td>762</td><td>643</td><td>1539</td><td>274</td><td>58</td><td>21,17%</td><td>277</td><td>59</td><td>78,70%</td><td>5</td><td>50,64%</td><td>49,86%</td><td>50,77%</td><td>1893</td><td>1916</td><td>1044</td><td>596</td><td>1320</td><td>523</td><td>2</td><td>2</td></tr>
<tr><td>Peoria Rivermen</td><td>PEO</td><td>74</td><td>85</td><td>68</td><td>6</td><td>2434</td><td>825</td><td>789</td><td>801</td><td>27</td><td>2590</td><td>711</td><td>614</td><td>1567</td><td>272</td><td>64</td><td>23,53%</td><td>277</td><td>53</td><td>80,87%</td><td>4</td><td>49,39%</td><td>49,68%</td><td>46,73%</td><td>1912</td><td>1897</td><td>1032</td><td>600</td><td>1304</td><td>509</td><td>2</td><td>1</td></tr>
<tr><td>Norfolk Admirals</td><td>NOR</td><td>97</td><td>78</td><td>69</td><td>4</td><td>2604</td><td>869</td><td>845</td><td>873</td><td>22</td><td>2524</td><td>736</td><td>629</td><td>1573</td><td>283</td><td>53</td><td>18,73%</td><td>267</td><td>51</td><td>80,90%</td><td>4</td><td>50,44%</td><td>51,85%</td><td>48,66%</td><td>1895</td><td>1921</td><td>1008</td><td>581</td><td>1345</td><td>500</td><td>6</td><td>1</td></tr>
<tr><td>Roberval Dwarfs</td><td>ROB</td><td>80</td><td>79</td><td>69</td><td>8</td><td>2752</td><td>868</td><td>943</td><td>917</td><td>44</td><td>2499</td><td>723</td><td>428</td><td>1332</td><td>298</td><td>57</td><td>19,13%</td><td>186</td><td>39</td><td>79,03%</td><td>1</td><td>52,20%</td><td>52,13%</td><td>52,45%</td><td>1897</td><td>1914</td><td>1025</td><td>587</td><td>1327</td><td>516</td><td>4</td><td>1</td></tr>
<tr><td>Chicago Wolves</td><td>CHI</td><td>91</td><td>82</td><td>60</td><td>15</td><td>2488</td><td>856</td><td>833</td><td>759</td><td>57</td><td>2559</td><td>779</td><td>614</td><td>1467</td><td>296</td><td>60</td><td>20,27%</td><td>279</td><td>54</td><td>80,65%</td><td>2</td><td>52,72%</td><td>50,84%</td><td>54,06%</td><td>1920</td><td>1916</td><td>1020</td><td>593</td><td>1323</td><td>513</td><td>3</td><td>0</td></tr>
<tr><td>Henderson Silver Knights</td><td>PAR</td><td>59</td><td>91</td><td>78</td><td>9</td><td>2515</td><td>782</td><td>858</td><td>848</td><td>50</td><td>2495</td><td>757</td><td>615</td><td>1502</td><td>249</td><td>56</td><td>22,49%</td><td>272</td><td>59</td><td>78,31%</td><td>3</td><td>53,08%</td><td>51,26%</td><td>53,26%</td><td>1895</td><td>1939</td><td>1024</td><td>589</td><td>1345</td><td>511</td><td>3</td><td>3</td></tr>
<tr><td>CCCP Red Army</td><td>CCC</td><td>101</td><td>72</td><td>75</td><td>9</td><td>2415</td><td>806</td><td>763</td><td>823</td><td>37</td><td>2618</td><td>782</td><td>603</td><td>1568</td><td>252</td><td>46</td><td>18,25%</td><td>275</td><td>58</td><td>78,91%</td><td>1</td><td>47,24%</td><td>47,73%</td><td>46,78%</td><td>1933</td><td>1883</td><td>1023</td><td>592</td><td>1295</td><td>505</td><td>3</td><td>2</td></tr>
<tr><td>Manitoba Moose</td><td>MAN</td><td>92</td><td>82</td><td>50</td><td>6</td><td>2455</td><td>845</td><td>838</td><td>738</td><td>63</td><td>2724</td><td>795</td><td>704</td><td>1619</td><td>249</td><td>50</td><td>20,08%</td><td>311</td><td>69</td><td>77,81%</td><td>5</td><td>48,73%</td><td>49,67%</td><td>53,53%</td><td>1960</td><td>1860</td><td>1031</td><td>598</td><td>1261</td><td>505</td><td>3</td><td>1</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Connecticut Whale</td><td>3,58</td></tr>
<tr><td>2</td><td>Chicoutimi Saguenéens</td><td>3,46</td></tr>
<tr><td>3</td><td>Milwaukee Admirals</td><td>3,24</td></tr>
<tr><td>4</td><td>CCCP Red Army</td><td>3,18</td></tr>
<tr><td>5</td><td>Mercer Island Hafgufa</td><td>3,15</td></tr>
<tr><td>6</td><td>Rochester Americans</td><td>3,13</td></tr>
<tr><td>7</td><td>Lake Erie Monsters</td><td>3,13</td></tr>
<tr><td>8</td><td>Norfolk Admirals</td><td>3,10</td></tr>
<tr><td>9</td><td>Binghamton Senators</td><td>3,09</td></tr>
<tr><td>10</td><td>Laval Chiefs</td><td>3,06</td></tr>
<tr><td>11</td><td>Charlotte Checkers</td><td>3,04</td></tr>
<tr><td>12</td><td>Springfield Falcons</td><td>3,04</td></tr>
<tr><td>13</td><td>Rouyn-Noranda Huskies</td><td>3,04</td></tr>
<tr><td>14</td><td>Chicago Wolves</td><td>3,04</td></tr>
<tr><td>15</td><td>Wilkes-Barre/Scranton Penguins</td><td>3,03</td></tr>
<tr><td>16</td><td>San Antonio Rampage</td><td>3,01</td></tr>
<tr><td>17</td><td>Grand Rapids Griffins</td><td>3,00</td></tr>
<tr><td>18</td><td>Oklahoma City Barons</td><td>2,99</td></tr>
<tr><td>19</td><td>Las Vegas Gamblers</td><td>2,98</td></tr>
<tr><td>20</td><td>Bridgeport Sound Tigers</td><td>2,94</td></tr>
<tr><td>21</td><td>Providence Bruins</td><td>2,93</td></tr>
<tr><td>22</td><td>Gatineau Olympiques</td><td>2,93</td></tr>
<tr><td>23</td><td>Albany Devils</td><td>2,91</td></tr>
<tr><td>24</td><td>Peoria Rivermen</td><td>2,91</td></tr>
<tr><td>25</td><td>Roberval Dwarfs</td><td>2,90</td></tr>
<tr><td>26</td><td>Henderson Silver Knights</td><td>2,90</td></tr>
<tr><td>27</td><td>Manitoba Moose</td><td>2,86</td></tr>
<tr><td>28</td><td>Trois-Rivières Draveurs</td><td>2,83</td></tr>
<tr><td>29</td><td>The Nuuk Vikings</td><td>2,78</td></tr>
<tr><td>30</td><td>Rockford IceHogs</td><td>2,75</td></tr>
<tr><td>31</td><td>Houston Aeros</td><td>2,75</td></tr>
<tr><td>32</td><td>Adirondack Phantoms</td><td>2,71</td></tr>
<tr><td>33</td><td>Joliette Sportif</td><td>2,66</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Norfolk Admirals</td><td>2,71</td></tr>
<tr><td>2</td><td>Oklahoma City Barons</td><td>2,73</td></tr>
<tr><td>3</td><td>Springfield Falcons</td><td>2,79</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>2,81</td></tr>
<tr><td>5</td><td>Wilkes-Barre/Scranton Penguins</td><td>2,83</td></tr>
<tr><td>6</td><td>Lake Erie Monsters</td><td>2,86</td></tr>
<tr><td>7</td><td>Rouyn-Noranda Huskies</td><td>2,89</td></tr>
<tr><td>8</td><td>Grand Rapids Griffins</td><td>2,89</td></tr>
<tr><td>9</td><td>Bridgeport Sound Tigers</td><td>2,90</td></tr>
<tr><td>10</td><td>Milwaukee Admirals</td><td>2,90</td></tr>
<tr><td>11</td><td>Gatineau Olympiques</td><td>2,94</td></tr>
<tr><td>12</td><td>Mercer Island Hafgufa</td><td>2,96</td></tr>
<tr><td>13</td><td>Joliette Sportif</td><td>2,96</td></tr>
<tr><td>14</td><td>CCCP Red Army</td><td>2,98</td></tr>
<tr><td>15</td><td>Providence Bruins</td><td>2,98</td></tr>
<tr><td>16</td><td>Charlotte Checkers</td><td>2,99</td></tr>
<tr><td>17</td><td>Peoria Rivermen</td><td>3,01</td></tr>
<tr><td>18</td><td>Albany Devils</td><td>3,01</td></tr>
<tr><td>19</td><td>Chicoutimi Saguenéens</td><td>3,01</td></tr>
<tr><td>20</td><td>Henderson Silver Knights</td><td>3,04</td></tr>
<tr><td>21</td><td>Laval Chiefs</td><td>3,04</td></tr>
<tr><td>22</td><td>Rochester Americans</td><td>3,05</td></tr>
<tr><td>23</td><td>Manitoba Moose</td><td>3,08</td></tr>
<tr><td>24</td><td>Las Vegas Gamblers</td><td>3,08</td></tr>
<tr><td>25</td><td>Adirondack Phantoms</td><td>3,10</td></tr>
<tr><td>26</td><td>The Nuuk Vikings</td><td>3,10</td></tr>
<tr><td>27</td><td>Connecticut Whale</td><td>3,11</td></tr>
<tr><td>28</td><td>San Antonio Rampage</td><td>3,11</td></tr>
<tr><td>29</td><td>Roberval Dwarfs</td><td>3,14</td></tr>
<tr><td>30</td><td>Houston Aeros</td><td>3,14</td></tr>
<tr><td>31</td><td>Trois-Rivières Draveurs</td><td>3,15</td></tr>
<tr><td>32</td><td>Rockford IceHogs</td><td>3,30</td></tr>
<tr><td>33</td><td>Binghamton Senators</td><td>3,44</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Chicoutimi Saguenéens</td><td>114,94%</td></tr>
<tr><td>2</td><td>Connecticut Whale</td><td>114,86%</td></tr>
<tr><td>3</td><td>Norfolk Admirals</td><td>114,29%</td></tr>
<tr><td>4</td><td>Milwaukee Admirals</td><td>111,64%</td></tr>
<tr><td>5</td><td>Oklahoma City Barons</td><td>109,63%</td></tr>
<tr><td>6</td><td>Lake Erie Monsters</td><td>109,17%</td></tr>
<tr><td>7</td><td>Springfield Falcons</td><td>108,97%</td></tr>
<tr><td>8</td><td>Chicago Wolves</td><td>108,00%</td></tr>
<tr><td>9</td><td>Wilkes-Barre/Scranton Penguins</td><td>107,08%</td></tr>
<tr><td>10</td><td>CCCP Red Army</td><td>106,72%</td></tr>
<tr><td>11</td><td>Mercer Island Hafgufa</td><td>106,33%</td></tr>
<tr><td>12</td><td>Rouyn-Noranda Huskies</td><td>105,19%</td></tr>
<tr><td>13</td><td>Grand Rapids Griffins</td><td>103,90%</td></tr>
<tr><td>14</td><td>Rochester Americans</td><td>102,46%</td></tr>
<tr><td>15</td><td>Charlotte Checkers</td><td>101,67%</td></tr>
<tr><td>16</td><td>Bridgeport Sound Tigers</td><td>101,29%</td></tr>
<tr><td>17</td><td>Laval Chiefs</td><td>100,82%</td></tr>
<tr><td>18</td><td>Gatineau Olympiques</td><td>99,57%</td></tr>
<tr><td>19</td><td>Providence Bruins</td><td>98,32%</td></tr>
<tr><td>20</td><td>San Antonio Rampage</td><td>96,79%</td></tr>
<tr><td>21</td><td>Las Vegas Gamblers</td><td>96,75%</td></tr>
<tr><td>22</td><td>Albany Devils</td><td>96,68%</td></tr>
<tr><td>23</td><td>Peoria Rivermen</td><td>96,68%</td></tr>
<tr><td>24</td><td>Henderson Silver Knights</td><td>95,47%</td></tr>
<tr><td>25</td><td>Manitoba Moose</td><td>93,09%</td></tr>
<tr><td>26</td><td>Roberval Dwarfs</td><td>92,43%</td></tr>
<tr><td>27</td><td>Joliette Sportif</td><td>89,87%</td></tr>
<tr><td>28</td><td>Binghamton Senators</td><td>89,82%</td></tr>
<tr><td>29</td><td>Trois-Rivières Draveurs</td><td>89,68%</td></tr>
<tr><td>30</td><td>The Nuuk Vikings</td><td>89,52%</td></tr>
<tr><td>31</td><td>Houston Aeros</td><td>87,65%</td></tr>
<tr><td>32</td><td>Adirondack Phantoms</td><td>87,50%</td></tr>
<tr><td>33</td><td>Rockford IceHogs</td><td>83,33%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,72%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Chicoutimi Saguenéens</td><td>26,20%</td></tr>
<tr><td>2</td><td>Laval Chiefs</td><td>24,63%</td></tr>
<tr><td>3</td><td>Adirondack Phantoms</td><td>23,90%</td></tr>
<tr><td>4</td><td>Oklahoma City Barons</td><td>23,55%</td></tr>
<tr><td>5</td><td>Peoria Rivermen</td><td>23,53%</td></tr>
<tr><td>6</td><td>Rouyn-Noranda Huskies</td><td>22,81%</td></tr>
<tr><td>7</td><td>Henderson Silver Knights</td><td>22,49%</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>22,30%</td></tr>
<tr><td>9</td><td>Mercer Island Hafgufa</td><td>21,17%</td></tr>
<tr><td>10</td><td>Bridgeport Sound Tigers</td><td>20,61%</td></tr>
<tr><td>11</td><td>Milwaukee Admirals</td><td>20,52%</td></tr>
<tr><td>12</td><td>Chicago Wolves</td><td>20,27%</td></tr>
<tr><td>13</td><td>Rochester Americans</td><td>20,23%</td></tr>
<tr><td>14</td><td>Manitoba Moose</td><td>20,08%</td></tr>
<tr><td>15</td><td>Springfield Falcons</td><td>19,86%</td></tr>
<tr><td>16</td><td>Grand Rapids Griffins</td><td>19,65%</td></tr>
<tr><td>17</td><td>Roberval Dwarfs</td><td>19,13%</td></tr>
<tr><td>18</td><td>Las Vegas Gamblers</td><td>18,77%</td></tr>
<tr><td>19</td><td>Norfolk Admirals</td><td>18,73%</td></tr>
<tr><td>20</td><td>Wilkes-Barre/Scranton Penguins</td><td>18,56%</td></tr>
<tr><td>21</td><td>Albany Devils</td><td>18,45%</td></tr>
<tr><td>22</td><td>CCCP Red Army</td><td>18,25%</td></tr>
<tr><td>23</td><td>Lake Erie Monsters</td><td>18,12%</td></tr>
<tr><td>24</td><td>Binghamton Senators</td><td>18,05%</td></tr>
<tr><td>25</td><td>Trois-Rivières Draveurs</td><td>17,99%</td></tr>
<tr><td>26</td><td>Providence Bruins</td><td>17,34%</td></tr>
<tr><td>27</td><td>Rockford IceHogs</td><td>17,00%</td></tr>
<tr><td>28</td><td>Joliette Sportif</td><td>16,91%</td></tr>
<tr><td>29</td><td>Charlotte Checkers</td><td>16,73%</td></tr>
<tr><td>30</td><td>Gatineau Olympiques</td><td>16,67%</td></tr>
<tr><td>31</td><td>Houston Aeros</td><td>16,67%</td></tr>
<tr><td>32</td><td>The Nuuk Vikings</td><td>16,41%</td></tr>
<tr><td>33</td><td>San Antonio Rampage</td><td>15,50%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,28%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Oklahoma City Barons</td><td>83,67%</td></tr>
<tr><td>2</td><td>Providence Bruins</td><td>82,56%</td></tr>
<tr><td>3</td><td>Albany Devils</td><td>82,41%</td></tr>
<tr><td>4</td><td>Bridgeport Sound Tigers</td><td>82,29%</td></tr>
<tr><td>5</td><td>Adirondack Phantoms</td><td>81,98%</td></tr>
<tr><td>6</td><td>Joliette Sportif</td><td>81,97%</td></tr>
<tr><td>7</td><td>Springfield Falcons</td><td>81,92%</td></tr>
<tr><td>8</td><td>Laval Chiefs</td><td>81,48%</td></tr>
<tr><td>9</td><td>Grand Rapids Griffins</td><td>81,35%</td></tr>
<tr><td>10</td><td>Charlotte Checkers</td><td>81,11%</td></tr>
<tr><td>11</td><td>San Antonio Rampage</td><td>81,10%</td></tr>
<tr><td>12</td><td>Norfolk Admirals</td><td>80,90%</td></tr>
<tr><td>13</td><td>Peoria Rivermen</td><td>80,87%</td></tr>
<tr><td>14</td><td>Rochester Americans</td><td>80,75%</td></tr>
<tr><td>15</td><td>Chicago Wolves</td><td>80,65%</td></tr>
<tr><td>16</td><td>Las Vegas Gamblers</td><td>80,21%</td></tr>
<tr><td>17</td><td>Gatineau Olympiques</td><td>80,08%</td></tr>
<tr><td>18</td><td>Chicoutimi Saguenéens</td><td>80,07%</td></tr>
<tr><td>19</td><td>Rouyn-Noranda Huskies</td><td>80,00%</td></tr>
<tr><td>20</td><td>Milwaukee Admirals</td><td>79,85%</td></tr>
<tr><td>21</td><td>Binghamton Senators</td><td>79,67%</td></tr>
<tr><td>22</td><td>Connecticut Whale</td><td>79,53%</td></tr>
<tr><td>23</td><td>Houston Aeros</td><td>79,36%</td></tr>
<tr><td>24</td><td>Lake Erie Monsters</td><td>79,21%</td></tr>
<tr><td>25</td><td>Wilkes-Barre/Scranton Penguins</td><td>79,20%</td></tr>
<tr><td>26</td><td>Roberval Dwarfs</td><td>79,03%</td></tr>
<tr><td>27</td><td>CCCP Red Army</td><td>78,91%</td></tr>
<tr><td>28</td><td>Mercer Island Hafgufa</td><td>78,70%</td></tr>
<tr><td>29</td><td>Rockford IceHogs</td><td>78,66%</td></tr>
<tr><td>30</td><td>Henderson Silver Knights</td><td>78,31%</td></tr>
<tr><td>31</td><td>Trois-Rivières Draveurs</td><td>77,95%</td></tr>
<tr><td>32</td><td>Manitoba Moose</td><td>77,81%</td></tr>
<tr><td>33</td><td>The Nuuk Vikings</td><td>77,67%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Oklahoma City Barons</td><td>107,22%</td></tr>
<tr><td>2</td><td>Chicoutimi Saguenéens</td><td>106,27%</td></tr>
<tr><td>3</td><td>Laval Chiefs</td><td>106,11%</td></tr>
<tr><td>4</td><td>Adirondack Phantoms</td><td>105,88%</td></tr>
<tr><td>5</td><td>Peoria Rivermen</td><td>104,40%</td></tr>
<tr><td>6</td><td>Bridgeport Sound Tigers</td><td>102,90%</td></tr>
<tr><td>7</td><td>Rouyn-Noranda Huskies</td><td>102,81%</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>101,83%</td></tr>
<tr><td>9</td><td>Springfield Falcons</td><td>101,78%</td></tr>
<tr><td>10</td><td>Grand Rapids Griffins</td><td>101,00%</td></tr>
<tr><td>11</td><td>Rochester Americans</td><td>100,99%</td></tr>
<tr><td>12</td><td>Chicago Wolves</td><td>100,92%</td></tr>
<tr><td>13</td><td>Albany Devils</td><td>100,86%</td></tr>
<tr><td>14</td><td>Henderson Silver Knights</td><td>100,80%</td></tr>
<tr><td>15</td><td>Milwaukee Admirals</td><td>100,37%</td></tr>
<tr><td>16</td><td>Providence Bruins</td><td>99,90%</td></tr>
<tr><td>17</td><td>Mercer Island Hafgufa</td><td>99,87%</td></tr>
<tr><td>18</td><td>Norfolk Admirals</td><td>99,63%</td></tr>
<tr><td>19</td><td>Las Vegas Gamblers</td><td>98,98%</td></tr>
<tr><td>20</td><td>Joliette Sportif</td><td>98,88%</td></tr>
<tr><td>21</td><td>Roberval Dwarfs</td><td>98,16%</td></tr>
<tr><td>22</td><td>Manitoba Moose</td><td>97,89%</td></tr>
<tr><td>23</td><td>Charlotte Checkers</td><td>97,84%</td></tr>
<tr><td>24</td><td>Wilkes-Barre/Scranton Penguins</td><td>97,76%</td></tr>
<tr><td>25</td><td>Binghamton Senators</td><td>97,71%</td></tr>
<tr><td>26</td><td>Lake Erie Monsters</td><td>97,33%</td></tr>
<tr><td>27</td><td>CCCP Red Army</td><td>97,16%</td></tr>
<tr><td>28</td><td>Gatineau Olympiques</td><td>96,74%</td></tr>
<tr><td>29</td><td>San Antonio Rampage</td><td>96,60%</td></tr>
<tr><td>30</td><td>Houston Aeros</td><td>96,03%</td></tr>
<tr><td>31</td><td>Trois-Rivières Draveurs</td><td>95,95%</td></tr>
<tr><td>32</td><td>Rockford IceHogs</td><td>95,66%</td></tr>
<tr><td>33</td><td>The Nuuk Vikings</td><td>94,08%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31,95</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Roberval Dwarfs</td><td>34,40</td></tr>
<tr><td>2</td><td>Connecticut Whale</td><td>34,23</td></tr>
<tr><td>3</td><td>Las Vegas Gamblers</td><td>33,44</td></tr>
<tr><td>4</td><td>Rochester Americans</td><td>33,33</td></tr>
<tr><td>5</td><td>Oklahoma City Barons</td><td>33,31</td></tr>
<tr><td>6</td><td>Charlotte Checkers</td><td>33,15</td></tr>
<tr><td>7</td><td>Bridgeport Sound Tigers</td><td>33,03</td></tr>
<tr><td>8</td><td>Chicoutimi Saguenéens</td><td>33,01</td></tr>
<tr><td>9</td><td>Rouyn-Noranda Huskies</td><td>32,99</td></tr>
<tr><td>10</td><td>Springfield Falcons</td><td>32,80</td></tr>
<tr><td>11</td><td>Milwaukee Admirals</td><td>32,76</td></tr>
<tr><td>12</td><td>Norfolk Admirals</td><td>32,55</td></tr>
<tr><td>13</td><td>Mercer Island Hafgufa</td><td>32,11</td></tr>
<tr><td>14</td><td>Trois-Rivières Draveurs</td><td>32,09</td></tr>
<tr><td>15</td><td>Binghamton Senators</td><td>31,95</td></tr>
<tr><td>16</td><td>Gatineau Olympiques</td><td>31,85</td></tr>
<tr><td>17</td><td>Albany Devils</td><td>31,85</td></tr>
<tr><td>18</td><td>San Antonio Rampage</td><td>31,79</td></tr>
<tr><td>19</td><td>Grand Rapids Griffins</td><td>31,74</td></tr>
<tr><td>20</td><td>The Nuuk Vikings</td><td>31,73</td></tr>
<tr><td>21</td><td>Lake Erie Monsters</td><td>31,66</td></tr>
<tr><td>22</td><td>Houston Aeros</td><td>31,60</td></tr>
<tr><td>23</td><td>Henderson Silver Knights</td><td>31,44</td></tr>
<tr><td>24</td><td>Laval Chiefs</td><td>31,10</td></tr>
<tr><td>25</td><td>Chicago Wolves</td><td>31,10</td></tr>
<tr><td>26</td><td>Providence Bruins</td><td>31,04</td></tr>
<tr><td>27</td><td>Manitoba Moose</td><td>30,69</td></tr>
<tr><td>28</td><td>Wilkes-Barre/Scranton Penguins</td><td>30,68</td></tr>
<tr><td>29</td><td>Rockford IceHogs</td><td>30,66</td></tr>
<tr><td>30</td><td>Peoria Rivermen</td><td>30,43</td></tr>
<tr><td>31</td><td>CCCP Red Army</td><td>30,19</td></tr>
<tr><td>32</td><td>Joliette Sportif</td><td>30,11</td></tr>
<tr><td>33</td><td>Adirondack Phantoms</td><td>29,65</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31,95</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>30,30</td></tr>
<tr><td>2</td><td>Gatineau Olympiques</td><td>30,35</td></tr>
<tr><td>3</td><td>Connecticut Whale</td><td>30,38</td></tr>
<tr><td>4</td><td>Milwaukee Admirals</td><td>30,64</td></tr>
<tr><td>5</td><td>Houston Aeros</td><td>30,73</td></tr>
<tr><td>6</td><td>Bridgeport Sound Tigers</td><td>30,74</td></tr>
<tr><td>7</td><td>Henderson Silver Knights</td><td>31,19</td></tr>
<tr><td>8</td><td>Roberval Dwarfs</td><td>31,24</td></tr>
<tr><td>9</td><td>Lake Erie Monsters</td><td>31,44</td></tr>
<tr><td>10</td><td>Providence Bruins</td><td>31,50</td></tr>
<tr><td>11</td><td>San Antonio Rampage</td><td>31,54</td></tr>
<tr><td>12</td><td>Norfolk Admirals</td><td>31,55</td></tr>
<tr><td>13</td><td>Las Vegas Gamblers</td><td>31,59</td></tr>
<tr><td>14</td><td>Wilkes-Barre/Scranton Penguins</td><td>31,63</td></tr>
<tr><td>15</td><td>Adirondack Phantoms</td><td>31,71</td></tr>
<tr><td>16</td><td>Springfield Falcons</td><td>31,78</td></tr>
<tr><td>17</td><td>Mercer Island Hafgufa</td><td>31,90</td></tr>
<tr><td>18</td><td>Rouyn-Noranda Huskies</td><td>31,90</td></tr>
<tr><td>19</td><td>Chicago Wolves</td><td>31,99</td></tr>
<tr><td>20</td><td>Albany Devils</td><td>32,04</td></tr>
<tr><td>21</td><td>Trois-Rivières Draveurs</td><td>32,11</td></tr>
<tr><td>22</td><td>Joliette Sportif</td><td>32,16</td></tr>
<tr><td>23</td><td>Peoria Rivermen</td><td>32,38</td></tr>
<tr><td>24</td><td>Binghamton Senators</td><td>32,40</td></tr>
<tr><td>25</td><td>CCCP Red Army</td><td>32,73</td></tr>
<tr><td>26</td><td>Grand Rapids Griffins</td><td>32,78</td></tr>
<tr><td>27</td><td>Oklahoma City Barons</td><td>32,90</td></tr>
<tr><td>28</td><td>Rockford IceHogs</td><td>33,05</td></tr>
<tr><td>29</td><td>Charlotte Checkers</td><td>33,15</td></tr>
<tr><td>30</td><td>The Nuuk Vikings</td><td>33,38</td></tr>
<tr><td>31</td><td>Rochester Americans</td><td>33,55</td></tr>
<tr><td>32</td><td>Chicoutimi Saguenéens</td><td>33,70</td></tr>
<tr><td>33</td><td>Manitoba Moose</td><td>34,05</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Connecticut Whale</td><td>112,67%</td></tr>
<tr><td>2</td><td>Roberval Dwarfs</td><td>110,12%</td></tr>
<tr><td>3</td><td>Bridgeport Sound Tigers</td><td>107,44%</td></tr>
<tr><td>4</td><td>Milwaukee Admirals</td><td>106,94%</td></tr>
<tr><td>5</td><td>Las Vegas Gamblers</td><td>105,86%</td></tr>
<tr><td>6</td><td>Gatineau Olympiques</td><td>104,94%</td></tr>
<tr><td>7</td><td>Rouyn-Noranda Huskies</td><td>103,41%</td></tr>
<tr><td>8</td><td>Springfield Falcons</td><td>103,23%</td></tr>
<tr><td>9</td><td>Norfolk Admirals</td><td>103,17%</td></tr>
<tr><td>10</td><td>Houston Aeros</td><td>102,85%</td></tr>
<tr><td>11</td><td>Laval Chiefs</td><td>102,64%</td></tr>
<tr><td>12</td><td>Oklahoma City Barons</td><td>101,25%</td></tr>
<tr><td>13</td><td>Henderson Silver Knights</td><td>100,80%</td></tr>
<tr><td>14</td><td>San Antonio Rampage</td><td>100,79%</td></tr>
<tr><td>15</td><td>Lake Erie Monsters</td><td>100,72%</td></tr>
<tr><td>16</td><td>Mercer Island Hafgufa</td><td>100,67%</td></tr>
<tr><td>17</td><td>Charlotte Checkers</td><td>100,00%</td></tr>
<tr><td>18</td><td>Trois-Rivières Draveurs</td><td>99,92%</td></tr>
<tr><td>19</td><td>Albany Devils</td><td>99,41%</td></tr>
<tr><td>20</td><td>Rochester Americans</td><td>99,33%</td></tr>
<tr><td>21</td><td>Binghamton Senators</td><td>98,61%</td></tr>
<tr><td>22</td><td>Providence Bruins</td><td>98,53%</td></tr>
<tr><td>23</td><td>Chicoutimi Saguenéens</td><td>97,96%</td></tr>
<tr><td>24</td><td>Chicago Wolves</td><td>97,23%</td></tr>
<tr><td>25</td><td>Wilkes-Barre/Scranton Penguins</td><td>97,00%</td></tr>
<tr><td>26</td><td>Grand Rapids Griffins</td><td>96,83%</td></tr>
<tr><td>27</td><td>The Nuuk Vikings</td><td>95,06%</td></tr>
<tr><td>28</td><td>Peoria Rivermen</td><td>93,98%</td></tr>
<tr><td>29</td><td>Joliette Sportif</td><td>93,63%</td></tr>
<tr><td>30</td><td>Adirondack Phantoms</td><td>93,50%</td></tr>
<tr><td>31</td><td>Rockford IceHogs</td><td>92,78%</td></tr>
<tr><td>32</td><td>CCCP Red Army</td><td>92,25%</td></tr>
<tr><td>33</td><td>Manitoba Moose</td><td>90,12%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7,69</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Roberval Dwarfs</td><td>5,35</td></tr>
<tr><td>2</td><td>Rochester Americans</td><td>6,59</td></tr>
<tr><td>3</td><td>Wilkes-Barre/Scranton Penguins</td><td>6,70</td></tr>
<tr><td>4</td><td>Grand Rapids Griffins</td><td>6,91</td></tr>
<tr><td>5</td><td>Binghamton Senators</td><td>6,94</td></tr>
<tr><td>6</td><td>Springfield Falcons</td><td>7,08</td></tr>
<tr><td>7</td><td>Trois-Rivières Draveurs</td><td>7,11</td></tr>
<tr><td>8</td><td>San Antonio Rampage</td><td>7,11</td></tr>
<tr><td>9</td><td>Connecticut Whale</td><td>7,20</td></tr>
<tr><td>10</td><td>Laval Chiefs</td><td>7,21</td></tr>
<tr><td>11</td><td>Providence Bruins</td><td>7,24</td></tr>
<tr><td>12</td><td>Milwaukee Admirals</td><td>7,50</td></tr>
<tr><td>13</td><td>Rockford IceHogs</td><td>7,53</td></tr>
<tr><td>14</td><td>CCCP Red Army</td><td>7,54</td></tr>
<tr><td>15</td><td>Chicago Wolves</td><td>7,68</td></tr>
<tr><td>16</td><td>Peoria Rivermen</td><td>7,68</td></tr>
<tr><td>17</td><td>Henderson Silver Knights</td><td>7,69</td></tr>
<tr><td>18</td><td>Houston Aeros</td><td>7,84</td></tr>
<tr><td>19</td><td>Norfolk Admirals</td><td>7,86</td></tr>
<tr><td>20</td><td>Las Vegas Gamblers</td><td>7,90</td></tr>
<tr><td>21</td><td>Adirondack Phantoms</td><td>7,98</td></tr>
<tr><td>22</td><td>Bridgeport Sound Tigers</td><td>7,99</td></tr>
<tr><td>23</td><td>Gatineau Olympiques</td><td>7,99</td></tr>
<tr><td>24</td><td>Mercer Island Hafgufa</td><td>8,04</td></tr>
<tr><td>25</td><td>Oklahoma City Barons</td><td>8,11</td></tr>
<tr><td>26</td><td>Rouyn-Noranda Huskies</td><td>8,19</td></tr>
<tr><td>27</td><td>Albany Devils</td><td>8,21</td></tr>
<tr><td>28</td><td>Lake Erie Monsters</td><td>8,46</td></tr>
<tr><td>29</td><td>Joliette Sportif</td><td>8,51</td></tr>
<tr><td>30</td><td>Manitoba Moose</td><td>8,80</td></tr>
<tr><td>31</td><td>The Nuuk Vikings</td><td>8,83</td></tr>
<tr><td>32</td><td>Chicoutimi Saguenéens</td><td>8,90</td></tr>
<tr><td>33</td><td>Charlotte Checkers</td><td>9,23</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,50</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Charlotte Checkers</td><td>21,10</td></tr>
<tr><td>2</td><td>The Nuuk Vikings</td><td>20,95</td></tr>
<tr><td>3</td><td>Oklahoma City Barons</td><td>20,59</td></tr>
<tr><td>4</td><td>Joliette Sportif</td><td>20,33</td></tr>
<tr><td>5</td><td>Manitoba Moose</td><td>20,24</td></tr>
<tr><td>6</td><td>Trois-Rivières Draveurs</td><td>20,23</td></tr>
<tr><td>7</td><td>Springfield Falcons</td><td>20,14</td></tr>
<tr><td>8</td><td>Rouyn-Noranda Huskies</td><td>20,10</td></tr>
<tr><td>9</td><td>Adirondack Phantoms</td><td>20,06</td></tr>
<tr><td>10</td><td>Bridgeport Sound Tigers</td><td>19,83</td></tr>
<tr><td>11</td><td>Connecticut Whale</td><td>19,75</td></tr>
<tr><td>12</td><td>Binghamton Senators</td><td>19,75</td></tr>
<tr><td>13</td><td>Grand Rapids Griffins</td><td>19,73</td></tr>
<tr><td>14</td><td>Norfolk Admirals</td><td>19,66</td></tr>
<tr><td>15</td><td>Albany Devils</td><td>19,64</td></tr>
<tr><td>16</td><td>CCCP Red Army</td><td>19,60</td></tr>
<tr><td>17</td><td>Peoria Rivermen</td><td>19,59</td></tr>
<tr><td>18</td><td>Lake Erie Monsters</td><td>19,46</td></tr>
<tr><td>19</td><td>Chicoutimi Saguenéens</td><td>19,46</td></tr>
<tr><td>20</td><td>Gatineau Olympiques</td><td>19,41</td></tr>
<tr><td>21</td><td>Las Vegas Gamblers</td><td>19,39</td></tr>
<tr><td>22</td><td>Laval Chiefs</td><td>19,36</td></tr>
<tr><td>23</td><td>Mercer Island Hafgufa</td><td>19,24</td></tr>
<tr><td>24</td><td>Providence Bruins</td><td>19,20</td></tr>
<tr><td>25</td><td>Milwaukee Admirals</td><td>19,05</td></tr>
<tr><td>26</td><td>Rockford IceHogs</td><td>19,00</td></tr>
<tr><td>27</td><td>Houston Aeros</td><td>18,88</td></tr>
<tr><td>28</td><td>Rochester Americans</td><td>18,86</td></tr>
<tr><td>29</td><td>Henderson Silver Knights</td><td>18,78</td></tr>
<tr><td>30</td><td>San Antonio Rampage</td><td>18,65</td></tr>
<tr><td>31</td><td>Wilkes-Barre/Scranton Penguins</td><td>18,65</td></tr>
<tr><td>32</td><td>Chicago Wolves</td><td>18,34</td></tr>
<tr><td>33</td><td>Roberval Dwarfs</td><td>16,65</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Henderson Silver Knights</td><td>52,36%</td></tr>
<tr><td>2</td><td>San Antonio Rampage</td><td>52,33%</td></tr>
<tr><td>3</td><td>Roberval Dwarfs</td><td>52,21%</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>52,18%</td></tr>
<tr><td>5</td><td>Milwaukee Admirals</td><td>51,82%</td></tr>
<tr><td>6</td><td>Providence Bruins</td><td>51,82%</td></tr>
<tr><td>7</td><td>Joliette Sportif</td><td>51,68%</td></tr>
<tr><td>8</td><td>Rockford IceHogs</td><td>51,60%</td></tr>
<tr><td>9</td><td>Charlotte Checkers</td><td>51,48%</td></tr>
<tr><td>10</td><td>Bridgeport Sound Tigers</td><td>51,34%</td></tr>
<tr><td>11</td><td>Rochester Americans</td><td>51,00%</td></tr>
<tr><td>12</td><td>Connecticut Whale</td><td>51,00%</td></tr>
<tr><td>13</td><td>Grand Rapids Griffins</td><td>50,85%</td></tr>
<tr><td>14</td><td>Las Vegas Gamblers</td><td>50,80%</td></tr>
<tr><td>15</td><td>Norfolk Admirals</td><td>50,72%</td></tr>
<tr><td>16</td><td>Springfield Falcons</td><td>50,68%</td></tr>
<tr><td>17</td><td>Chicoutimi Saguenéens</td><td>50,57%</td></tr>
<tr><td>18</td><td>Lake Erie Monsters</td><td>50,49%</td></tr>
<tr><td>19</td><td>Trois-Rivières Draveurs</td><td>50,38%</td></tr>
<tr><td>20</td><td>Oklahoma City Barons</td><td>50,35%</td></tr>
<tr><td>21</td><td>Mercer Island Hafgufa</td><td>50,35%</td></tr>
<tr><td>22</td><td>Gatineau Olympiques</td><td>50,12%</td></tr>
<tr><td>23</td><td>Manitoba Moose</td><td>49,94%</td></tr>
<tr><td>24</td><td>Rouyn-Noranda Huskies</td><td>49,86%</td></tr>
<tr><td>25</td><td>Wilkes-Barre/Scranton Penguins</td><td>49,63%</td></tr>
<tr><td>26</td><td>Binghamton Senators</td><td>49,57%</td></tr>
<tr><td>27</td><td>Albany Devils</td><td>49,47%</td></tr>
<tr><td>28</td><td>Laval Chiefs</td><td>49,25%</td></tr>
<tr><td>29</td><td>Peoria Rivermen</td><td>49,04%</td></tr>
<tr><td>30</td><td>The Nuuk Vikings</td><td>48,92%</td></tr>
<tr><td>31</td><td>Houston Aeros</td><td>48,68%</td></tr>
<tr><td>32</td><td>Adirondack Phantoms</td><td>48,63%</td></tr>
<tr><td>33</td><td>CCCP Red Army</td><td>47,35%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
