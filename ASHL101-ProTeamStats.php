<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Stats</title>
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
<tr><td>Anaheim Ducks</td><td>82</td><td>32</td><td>39</td><td>2</td><td>3</td><td>3</td><td>3</td><td>232</td><td>252</td><td>41</td><td>18</td><td>16</td><td>1</td><td>2</td><td>3</td><td>1</td><td>129</td><td>123</td><td>41</td><td>14</td><td>23</td><td>1</td><td>1</td><td>0</td><td>2</td><td>103</td><td>129</td><td>232</td><td>416</td><td>648</td></tr>
<tr><td>Arizona Coyotes</td><td>82</td><td>39</td><td>29</td><td>4</td><td>8</td><td>0</td><td>2</td><td>247</td><td>240</td><td>41</td><td>21</td><td>14</td><td>2</td><td>3</td><td>0</td><td>1</td><td>130</td><td>118</td><td>41</td><td>18</td><td>15</td><td>2</td><td>5</td><td>0</td><td>1</td><td>117</td><td>122</td><td>247</td><td>447</td><td>694</td></tr>
<tr><td>Boston Bruins</td><td>82</td><td>38</td><td>31</td><td>5</td><td>0</td><td>3</td><td>5</td><td>250</td><td>240</td><td>41</td><td>22</td><td>17</td><td>2</td><td>0</td><td>0</td><td>0</td><td>127</td><td>116</td><td>41</td><td>16</td><td>14</td><td>3</td><td>0</td><td>3</td><td>5</td><td>123</td><td>124</td><td>250</td><td>459</td><td>709</td></tr>
<tr><td>Buffalo Sabres</td><td>82</td><td>35</td><td>33</td><td>4</td><td>6</td><td>2</td><td>2</td><td>255</td><td>238</td><td>41</td><td>13</td><td>20</td><td>2</td><td>3</td><td>2</td><td>1</td><td>124</td><td>135</td><td>41</td><td>22</td><td>13</td><td>2</td><td>3</td><td>0</td><td>1</td><td>131</td><td>103</td><td>255</td><td>466</td><td>721</td></tr>
<tr><td>Calgary Flames</td><td>82</td><td>37</td><td>31</td><td>6</td><td>2</td><td>0</td><td>6</td><td>258</td><td>247</td><td>41</td><td>22</td><td>16</td><td>1</td><td>1</td><td>0</td><td>1</td><td>132</td><td>118</td><td>41</td><td>15</td><td>15</td><td>5</td><td>1</td><td>0</td><td>5</td><td>126</td><td>129</td><td>258</td><td>475</td><td>733</td></tr>
<tr><td>Carolina Hurricanes</td><td>82</td><td>23</td><td>41</td><td>1</td><td>9</td><td>3</td><td>5</td><td>223</td><td>274</td><td>41</td><td>10</td><td>20</td><td>0</td><td>6</td><td>1</td><td>4</td><td>115</td><td>144</td><td>41</td><td>13</td><td>21</td><td>1</td><td>3</td><td>2</td><td>1</td><td>108</td><td>130</td><td>223</td><td>406</td><td>629</td></tr>
<tr><td>Chicago Blackhawks</td><td>82</td><td>31</td><td>34</td><td>5</td><td>5</td><td>4</td><td>3</td><td>253</td><td>250</td><td>41</td><td>20</td><td>11</td><td>2</td><td>3</td><td>4</td><td>1</td><td>138</td><td>107</td><td>41</td><td>11</td><td>23</td><td>3</td><td>2</td><td>0</td><td>2</td><td>115</td><td>143</td><td>253</td><td>452</td><td>705</td></tr>
<tr><td>Colorado Avalanche</td><td>82</td><td>35</td><td>28</td><td>9</td><td>7</td><td>1</td><td>2</td><td>253</td><td>252</td><td>41</td><td>23</td><td>11</td><td>3</td><td>3</td><td>1</td><td>0</td><td>138</td><td>116</td><td>41</td><td>12</td><td>17</td><td>6</td><td>4</td><td>0</td><td>2</td><td>115</td><td>136</td><td>253</td><td>452</td><td>705</td></tr>
<tr><td>Columbus Blue Jackets</td><td>82</td><td>38</td><td>28</td><td>6</td><td>7</td><td>2</td><td>1</td><td>245</td><td>225</td><td>41</td><td>19</td><td>17</td><td>1</td><td>3</td><td>1</td><td>0</td><td>118</td><td>110</td><td>41</td><td>19</td><td>11</td><td>5</td><td>4</td><td>1</td><td>1</td><td>127</td><td>115</td><td>245</td><td>438</td><td>683</td></tr>
<tr><td>Dallas Stars</td><td>82</td><td>35</td><td>39</td><td>3</td><td>3</td><td>0</td><td>2</td><td>231</td><td>244</td><td>41</td><td>19</td><td>19</td><td>1</td><td>0</td><td>0</td><td>2</td><td>123</td><td>120</td><td>41</td><td>16</td><td>20</td><td>2</td><td>3</td><td>0</td><td>0</td><td>108</td><td>124</td><td>231</td><td>425</td><td>656</td></tr>
<tr><td>Detroit Red Wings</td><td>82</td><td>30</td><td>35</td><td>2</td><td>8</td><td>3</td><td>4</td><td>240</td><td>254</td><td>41</td><td>16</td><td>17</td><td>0</td><td>5</td><td>2</td><td>1</td><td>119</td><td>122</td><td>41</td><td>14</td><td>18</td><td>2</td><td>3</td><td>1</td><td>3</td><td>121</td><td>132</td><td>240</td><td>441</td><td>681</td></tr>
<tr><td>Edmonton Oilers</td><td>82</td><td>32</td><td>34</td><td>9</td><td>6</td><td>0</td><td>1</td><td>250</td><td>249</td><td>41</td><td>11</td><td>20</td><td>7</td><td>3</td><td>0</td><td>0</td><td>114</td><td>126</td><td>41</td><td>21</td><td>14</td><td>2</td><td>3</td><td>0</td><td>1</td><td>136</td><td>123</td><td>250</td><td>454</td><td>704</td></tr>
<tr><td>Florida Panthers</td><td>82</td><td>35</td><td>29</td><td>7</td><td>4</td><td>3</td><td>4</td><td>264</td><td>243</td><td>41</td><td>18</td><td>12</td><td>3</td><td>4</td><td>2</td><td>2</td><td>127</td><td>114</td><td>41</td><td>17</td><td>17</td><td>4</td><td>0</td><td>1</td><td>2</td><td>137</td><td>129</td><td>264</td><td>482</td><td>746</td></tr>
<tr><td>Los Angeles Kings</td><td>82</td><td>40</td><td>24</td><td>5</td><td>5</td><td>5</td><td>3</td><td>270</td><td>226</td><td>41</td><td>19</td><td>10</td><td>3</td><td>4</td><td>3</td><td>2</td><td>140</td><td>115</td><td>41</td><td>21</td><td>14</td><td>2</td><td>1</td><td>2</td><td>1</td><td>130</td><td>111</td><td>270</td><td>477</td><td>747</td></tr>
<tr><td>Minnesota Wild</td><td>82</td><td>32</td><td>33</td><td>7</td><td>6</td><td>4</td><td>0</td><td>237</td><td>250</td><td>41</td><td>19</td><td>14</td><td>2</td><td>3</td><td>3</td><td>0</td><td>132</td><td>124</td><td>41</td><td>13</td><td>19</td><td>5</td><td>3</td><td>1</td><td>0</td><td>105</td><td>126</td><td>237</td><td>421</td><td>658</td></tr>
<tr><td>Montreal Canadiens</td><td>82</td><td>38</td><td>28</td><td>4</td><td>7</td><td>5</td><td>0</td><td>262</td><td>225</td><td>41</td><td>18</td><td>17</td><td>0</td><td>4</td><td>2</td><td>0</td><td>127</td><td>112</td><td>41</td><td>20</td><td>11</td><td>4</td><td>3</td><td>3</td><td>0</td><td>135</td><td>113</td><td>262</td><td>463</td><td>725</td></tr>
<tr><td>Nashville Predators</td><td>82</td><td>33</td><td>32</td><td>5</td><td>6</td><td>4</td><td>2</td><td>239</td><td>239</td><td>41</td><td>19</td><td>14</td><td>2</td><td>3</td><td>3</td><td>0</td><td>125</td><td>107</td><td>41</td><td>14</td><td>18</td><td>3</td><td>3</td><td>1</td><td>2</td><td>114</td><td>132</td><td>239</td><td>437</td><td>676</td></tr>
<tr><td>New Jersey Devils</td><td>82</td><td>28</td><td>39</td><td>5</td><td>3</td><td>6</td><td>1</td><td>210</td><td>229</td><td>41</td><td>13</td><td>21</td><td>2</td><td>2</td><td>3</td><td>0</td><td>103</td><td>117</td><td>41</td><td>15</td><td>18</td><td>3</td><td>1</td><td>3</td><td>1</td><td>107</td><td>112</td><td>210</td><td>373</td><td>583</td></tr>
<tr><td>New York Islanders</td><td>82</td><td>32</td><td>41</td><td>2</td><td>3</td><td>3</td><td>1</td><td>230</td><td>249</td><td>41</td><td>17</td><td>19</td><td>2</td><td>2</td><td>0</td><td>1</td><td>112</td><td>118</td><td>41</td><td>15</td><td>22</td><td>0</td><td>1</td><td>3</td><td>0</td><td>118</td><td>131</td><td>230</td><td>418</td><td>648</td></tr>
<tr><td>New York Rangers</td><td>82</td><td>27</td><td>33</td><td>6</td><td>9</td><td>3</td><td>4</td><td>217</td><td>237</td><td>41</td><td>13</td><td>14</td><td>5</td><td>7</td><td>1</td><td>1</td><td>113</td><td>116</td><td>41</td><td>14</td><td>19</td><td>1</td><td>2</td><td>2</td><td>3</td><td>104</td><td>121</td><td>217</td><td>385</td><td>602</td></tr>
<tr><td>Ottawa Senators</td><td>82</td><td>26</td><td>37</td><td>4</td><td>7</td><td>4</td><td>4</td><td>199</td><td>243</td><td>41</td><td>13</td><td>16</td><td>4</td><td>2</td><td>2</td><td>4</td><td>109</td><td>118</td><td>41</td><td>13</td><td>21</td><td>0</td><td>5</td><td>2</td><td>0</td><td>90</td><td>125</td><td>199</td><td>356</td><td>555</td></tr>
<tr><td>Philadelphia Flyers</td><td>82</td><td>38</td><td>26</td><td>8</td><td>3</td><td>2</td><td>5</td><td>255</td><td>244</td><td>41</td><td>19</td><td>12</td><td>4</td><td>2</td><td>0</td><td>4</td><td>130</td><td>125</td><td>41</td><td>19</td><td>14</td><td>4</td><td>1</td><td>2</td><td>1</td><td>125</td><td>119</td><td>255</td><td>465</td><td>720</td></tr>
<tr><td>Pittsburgh Penguins</td><td>82</td><td>32</td><td>34</td><td>4</td><td>7</td><td>2</td><td>3</td><td>236</td><td>232</td><td>41</td><td>15</td><td>17</td><td>3</td><td>3</td><td>1</td><td>2</td><td>121</td><td>113</td><td>41</td><td>17</td><td>17</td><td>1</td><td>4</td><td>1</td><td>1</td><td>115</td><td>119</td><td>236</td><td>421</td><td>657</td></tr>
<tr><td>Quebec Nordiques</td><td>82</td><td>26</td><td>40</td><td>3</td><td>3</td><td>4</td><td>6</td><td>219</td><td>253</td><td>41</td><td>12</td><td>20</td><td>0</td><td>3</td><td>2</td><td>4</td><td>100</td><td>126</td><td>41</td><td>14</td><td>20</td><td>3</td><td>0</td><td>2</td><td>2</td><td>119</td><td>127</td><td>219</td><td>380</td><td>599</td></tr>
<tr><td>San Jose Sharks</td><td>82</td><td>32</td><td>30</td><td>5</td><td>2</td><td>3</td><td>10</td><td>241</td><td>244</td><td>41</td><td>18</td><td>13</td><td>3</td><td>0</td><td>2</td><td>5</td><td>120</td><td>104</td><td>41</td><td>14</td><td>17</td><td>2</td><td>2</td><td>1</td><td>5</td><td>121</td><td>140</td><td>241</td><td>441</td><td>682</td></tr>
<tr><td>Seattle Kraken</td><td>82</td><td>32</td><td>36</td><td>3</td><td>3</td><td>4</td><td>4</td><td>234</td><td>253</td><td>41</td><td>17</td><td>18</td><td>3</td><td>2</td><td>1</td><td>0</td><td>118</td><td>118</td><td>41</td><td>15</td><td>18</td><td>0</td><td>1</td><td>3</td><td>4</td><td>116</td><td>135</td><td>234</td><td>410</td><td>644</td></tr>
<tr><td>St. Louis Blues</td><td>82</td><td>37</td><td>29</td><td>6</td><td>4</td><td>4</td><td>2</td><td>263</td><td>220</td><td>41</td><td>15</td><td>15</td><td>3</td><td>2</td><td>4</td><td>2</td><td>130</td><td>113</td><td>41</td><td>22</td><td>14</td><td>3</td><td>2</td><td>0</td><td>0</td><td>133</td><td>107</td><td>263</td><td>469</td><td>732</td></tr>
<tr><td>Tampa Bay Lightning</td><td>82</td><td>30</td><td>36</td><td>4</td><td>5</td><td>6</td><td>1</td><td>237</td><td>229</td><td>41</td><td>17</td><td>16</td><td>1</td><td>2</td><td>4</td><td>1</td><td>138</td><td>116</td><td>41</td><td>13</td><td>20</td><td>3</td><td>3</td><td>2</td><td>0</td><td>99</td><td>113</td><td>237</td><td>422</td><td>659</td></tr>
<tr><td>Toronto Maple Leafs</td><td>82</td><td>35</td><td>32</td><td>3</td><td>3</td><td>6</td><td>3</td><td>243</td><td>224</td><td>41</td><td>21</td><td>14</td><td>2</td><td>1</td><td>3</td><td>0</td><td>125</td><td>92</td><td>41</td><td>14</td><td>18</td><td>1</td><td>2</td><td>3</td><td>3</td><td>118</td><td>132</td><td>243</td><td>454</td><td>697</td></tr>
<tr><td>Vancouver Canucks</td><td>82</td><td>34</td><td>39</td><td>4</td><td>2</td><td>2</td><td>1</td><td>243</td><td>244</td><td>41</td><td>17</td><td>19</td><td>2</td><td>1</td><td>1</td><td>1</td><td>128</td><td>126</td><td>41</td><td>17</td><td>20</td><td>2</td><td>1</td><td>1</td><td>0</td><td>115</td><td>118</td><td>243</td><td>433</td><td>676</td></tr>
<tr><td>Vegas Golden Knights</td><td>82</td><td>40</td><td>28</td><td>5</td><td>3</td><td>3</td><td>3</td><td>235</td><td>206</td><td>41</td><td>23</td><td>13</td><td>1</td><td>1</td><td>1</td><td>2</td><td>125</td><td>97</td><td>41</td><td>17</td><td>15</td><td>4</td><td>2</td><td>2</td><td>1</td><td>110</td><td>109</td><td>235</td><td>424</td><td>659</td></tr>
<tr><td>Washington Capitals</td><td>82</td><td>27</td><td>39</td><td>3</td><td>5</td><td>3</td><td>5</td><td>221</td><td>252</td><td>41</td><td>16</td><td>21</td><td>0</td><td>2</td><td>1</td><td>1</td><td>115</td><td>122</td><td>41</td><td>11</td><td>18</td><td>3</td><td>3</td><td>2</td><td>4</td><td>106</td><td>130</td><td>221</td><td>406</td><td>627</td></tr>
<tr><td>Winnipeg Jets</td><td>82</td><td>37</td><td>29</td><td>9</td><td>4</td><td>2</td><td>1</td><td>240</td><td>225</td><td>41</td><td>16</td><td>14</td><td>6</td><td>3</td><td>1</td><td>1</td><td>124</td><td>115</td><td>41</td><td>21</td><td>15</td><td>3</td><td>1</td><td>1</td><td>0</td><td>116</td><td>110</td><td>240</td><td>421</td><td>661</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>ANH</td><td>78</td><td>82</td><td>67</td><td>9</td><td>2497</td><td>795</td><td>830</td><td>848</td><td>52</td><td>2490</td><td>740</td><td>784</td><td>1634</td><td>319</td><td>64</td><td>20,06%</td><td>345</td><td>61</td><td>82,32%</td><td>5</td><td>48,43%</td><td>48,84%</td><td>50,24%</td><td>1963</td><td>1968</td><td>1027</td><td>597</td><td>1361</td><td>512</td><td>3</td><td>2</td></tr>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>92</td><td>74</td><td>77</td><td>4</td><td>2467</td><td>846</td><td>828</td><td>771</td><td>29</td><td>2411</td><td>711</td><td>750</td><td>1657</td><td>278</td><td>47</td><td>16,91%</td><td>322</td><td>67</td><td>79,19%</td><td>5</td><td>50,69%</td><td>53,32%</td><td>55,05%</td><td>1914</td><td>2003</td><td>1032</td><td>591</td><td>1399</td><td>518</td><td>4</td><td>6</td></tr>
<tr><td>Boston Bruins</td><td>BOS</td><td>92</td><td>69</td><td>81</td><td>12</td><td>2581</td><td>830</td><td>811</td><td>911</td><td>58</td><td>2420</td><td>730</td><td>630</td><td>1536</td><td>294</td><td>61</td><td>20,75%</td><td>280</td><td>67</td><td>76,07%</td><td>2</td><td>49,89%</td><td>50,57%</td><td>52,11%</td><td>1969</td><td>1972</td><td>1025</td><td>596</td><td>1378</td><td>514</td><td>2</td><td>2</td></tr>
<tr><td>Buffalo Sabres</td><td>BUF</td><td>79</td><td>91</td><td>79</td><td>8</td><td>2544</td><td>811</td><td>825</td><td>886</td><td>36</td><td>2495</td><td>761</td><td>646</td><td>1601</td><td>291</td><td>59</td><td>20,27%</td><td>287</td><td>63</td><td>78,05%</td><td>2</td><td>49,35%</td><td>49,68%</td><td>49,29%</td><td>2002</td><td>1925</td><td>1028</td><td>599</td><td>1329</td><td>510</td><td>3</td><td>4</td></tr>
<tr><td>Calgary Flames</td><td>CGY</td><td>87</td><td>87</td><td>78</td><td>9</td><td>2420</td><td>766</td><td>803</td><td>814</td><td>56</td><td>2494</td><td>813</td><td>663</td><td>1586</td><td>283</td><td>54</td><td>19,08%</td><td>288</td><td>53</td><td>81,60%</td><td>3</td><td>50,89%</td><td>51,53%</td><td>51,24%</td><td>1942</td><td>1993</td><td>1030</td><td>584</td><td>1396</td><td>516</td><td>5</td><td>3</td></tr>
<tr><td>Carolina Hurricanes</td><td>CAR</td><td>69</td><td>76</td><td>74</td><td>8</td><td>2437</td><td>783</td><td>833</td><td>784</td><td>67</td><td>2689</td><td>736</td><td>767</td><td>1529</td><td>272</td><td>59</td><td>21,69%</td><td>335</td><td>72</td><td>78,51%</td><td>1</td><td>51,12%</td><td>51,42%</td><td>50,77%</td><td>2010</td><td>1947</td><td>1031</td><td>606</td><td>1340</td><td>509</td><td>1</td><td>3</td></tr>
<tr><td>Chicago Blackhawks</td><td>CHI</td><td>96</td><td>84</td><td>64</td><td>13</td><td>2501</td><td>852</td><td>840</td><td>788</td><td>48</td><td>2458</td><td>725</td><td>612</td><td>1664</td><td>311</td><td>54</td><td>17,36%</td><td>279</td><td>62</td><td>77,78%</td><td>9</td><td>52,54%</td><td>50,80%</td><td>50,70%</td><td>1954</td><td>1969</td><td>1047</td><td>609</td><td>1365</td><td>517</td><td>2</td><td>4</td></tr>
<tr><td>Colorado Avalanche</td><td>COL</td><td>85</td><td>88</td><td>70</td><td>11</td><td>2594</td><td>851</td><td>897</td><td>820</td><td>35</td><td>2537</td><td>743</td><td>707</td><td>1537</td><td>302</td><td>61</td><td>20,20%</td><td>319</td><td>64</td><td>79,94%</td><td>4</td><td>50,57%</td><td>49,85%</td><td>51,25%</td><td>2000</td><td>1938</td><td>1031</td><td>605</td><td>1344</td><td>504</td><td>5</td><td>4</td></tr>
<tr><td>Columbus Blue Jackets</td><td>CLB</td><td>89</td><td>77</td><td>71</td><td>8</td><td>2536</td><td>833</td><td>854</td><td>820</td><td>38</td><td>2501</td><td>790</td><td>638</td><td>1515</td><td>269</td><td>56</td><td>20,82%</td><td>292</td><td>50</td><td>82,88%</td><td>4</td><td>50,03%</td><td>50,29%</td><td>50,33%</td><td>1986</td><td>1935</td><td>1029</td><td>605</td><td>1345</td><td>504</td><td>3</td><td>1</td></tr>
<tr><td>Dallas Stars</td><td>DAL</td><td>85</td><td>73</td><td>70</td><td>4</td><td>2446</td><td>845</td><td>766</td><td>819</td><td>21</td><td>2524</td><td>708</td><td>718</td><td>1669</td><td>250</td><td>45</td><td>18,00%</td><td>317</td><td>57</td><td>82,02%</td><td>1</td><td>51,28%</td><td>50,94%</td><td>48,47%</td><td>1970</td><td>1948</td><td>1022</td><td>603</td><td>1361</td><td>505</td><td>4</td><td>3</td></tr>
<tr><td>Detroit Red Wings</td><td>DET</td><td>94</td><td>63</td><td>78</td><td>9</td><td>2342</td><td>826</td><td>697</td><td>790</td><td>58</td><td>2436</td><td>695</td><td>660</td><td>1495</td><td>298</td><td>64</td><td>21,48%</td><td>294</td><td>64</td><td>78,23%</td><td>1</td><td>51,33%</td><td>49,33%</td><td>50,00%</td><td>1948</td><td>1992</td><td>1039</td><td>592</td><td>1387</td><td>521</td><td>5</td><td>0</td></tr>
<tr><td>Edmonton Oilers</td><td>EDM</td><td>92</td><td>80</td><td>69</td><td>10</td><td>2592</td><td>833</td><td>852</td><td>873</td><td>39</td><td>2560</td><td>752</td><td>593</td><td>1594</td><td>295</td><td>56</td><td>18,98%</td><td>274</td><td>54</td><td>80,29%</td><td>4</td><td>49,28%</td><td>49,93%</td><td>47,86%</td><td>1966</td><td>1966</td><td>1025</td><td>592</td><td>1379</td><td>505</td><td>2</td><td>1</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>101</td><td>81</td><td>72</td><td>12</td><td>2625</td><td>872</td><td>935</td><td>782</td><td>56</td><td>2501</td><td>773</td><td>720</td><td>1609</td><td>295</td><td>65</td><td>22,03%</td><td>325</td><td>63</td><td>80,62%</td><td>3</td><td>49,65%</td><td>50,62%</td><td>48,15%</td><td>1964</td><td>1983</td><td>1032</td><td>599</td><td>1386</td><td>511</td><td>1</td><td>0</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>88</td><td>85</td><td>87</td><td>16</td><td>2597</td><td>810</td><td>918</td><td>834</td><td>73</td><td>2409</td><td>700</td><td>698</td><td>1551</td><td>337</td><td>69</td><td>20,47%</td><td>317</td><td>55</td><td>82,65%</td><td>4</td><td>52,68%</td><td>52,76%</td><td>52,44%</td><td>1928</td><td>2020</td><td>1029</td><td>598</td><td>1419</td><td>521</td><td>3</td><td>2</td></tr>
<tr><td>Minnesota Wild</td><td>MIN</td><td>86</td><td>62</td><td>78</td><td>12</td><td>2382</td><td>793</td><td>750</td><td>804</td><td>49</td><td>2592</td><td>784</td><td>548</td><td>1454</td><td>290</td><td>59</td><td>20,34%</td><td>245</td><td>61</td><td>75,10%</td><td>3</td><td>46,40%</td><td>46,59%</td><td>48,61%</td><td>2009</td><td>1922</td><td>1041</td><td>590</td><td>1332</td><td>519</td><td>6</td><td>2</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>91</td><td>81</td><td>81</td><td>13</td><td>2619</td><td>888</td><td>830</td><td>868</td><td>48</td><td>2537</td><td>746</td><td>716</td><td>1605</td><td>311</td><td>67</td><td>21,54%</td><td>323</td><td>52</td><td>83,90%</td><td>2</td><td>52,76%</td><td>53,31%</td><td>55,39%</td><td>1942</td><td>1998</td><td>1030</td><td>597</td><td>1385</td><td>512</td><td>5</td><td>4</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>87</td><td>65</td><td>78</td><td>12</td><td>2448</td><td>784</td><td>782</td><td>843</td><td>61</td><td>2498</td><td>730</td><td>558</td><td>1497</td><td>263</td><td>43</td><td>16,35%</td><td>241</td><td>41</td><td>82,99%</td><td>1</td><td>51,82%</td><td>47,67%</td><td>47,96%</td><td>1962</td><td>1964</td><td>1040</td><td>597</td><td>1367</td><td>521</td><td>6</td><td>2</td></tr>
<tr><td>New Jersey Devils</td><td>NJD</td><td>61</td><td>75</td><td>63</td><td>18</td><td>2348</td><td>730</td><td>779</td><td>809</td><td>53</td><td>2473</td><td>730</td><td>574</td><td>1483</td><td>277</td><td>53</td><td>19,13%</td><td>257</td><td>64</td><td>75,10%</td><td>1</td><td>51,71%</td><td>51,31%</td><td>49,71%</td><td>1965</td><td>1967</td><td>1036</td><td>605</td><td>1366</td><td>514</td><td>6</td><td>2</td></tr>
<tr><td>New York Islanders</td><td>NYI</td><td>88</td><td>61</td><td>76</td><td>7</td><td>2389</td><td>767</td><td>752</td><td>855</td><td>29</td><td>2572</td><td>740</td><td>698</td><td>1577</td><td>280</td><td>57</td><td>20,36%</td><td>305</td><td>66</td><td>78,36%</td><td>3</td><td>48,34%</td><td>49,04%</td><td>50,32%</td><td>1994</td><td>1926</td><td>1031</td><td>606</td><td>1336</td><td>506</td><td>3</td><td>3</td></tr>
<tr><td>New York Rangers</td><td>NYR</td><td>72</td><td>68</td><td>68</td><td>10</td><td>2646</td><td>851</td><td>851</td><td>910</td><td>57</td><td>2501</td><td>748</td><td>655</td><td>1617</td><td>321</td><td>45</td><td>14,02%</td><td>305</td><td>50</td><td>83,61%</td><td>4</td><td>51,65%</td><td>49,30%</td><td>51,17%</td><td>1935</td><td>2025</td><td>1029</td><td>604</td><td>1416</td><td>512</td><td>3</td><td>3</td></tr>
<tr><td>Ottawa Senators</td><td>OTT</td><td>70</td><td>60</td><td>61</td><td>13</td><td>2433</td><td>829</td><td>766</td><td>787</td><td>84</td><td>2606</td><td>742</td><td>640</td><td>1596</td><td>265</td><td>40</td><td>15,09%</td><td>287</td><td>60</td><td>79,09%</td><td>2</td><td>48,10%</td><td>48,24%</td><td>51,54%</td><td>2001</td><td>1941</td><td>1038</td><td>601</td><td>1344</td><td>513</td><td>4</td><td>0</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>97</td><td>83</td><td>65</td><td>13</td><td>2537</td><td>853</td><td>860</td><td>788</td><td>67</td><td>2427</td><td>778</td><td>669</td><td>1575</td><td>302</td><td>59</td><td>19,54%</td><td>290</td><td>57</td><td>80,34%</td><td>1</td><td>51,59%</td><td>51,97%</td><td>52,06%</td><td>1934</td><td>2016</td><td>1028</td><td>595</td><td>1408</td><td>512</td><td>1</td><td>1</td></tr>
<tr><td>Pittsburgh Penguins</td><td>PIT</td><td>96</td><td>71</td><td>63</td><td>9</td><td>2539</td><td>861</td><td>767</td><td>892</td><td>41</td><td>2456</td><td>722</td><td>613</td><td>1564</td><td>321</td><td>53</td><td>16,51%</td><td>264</td><td>53</td><td>79,92%</td><td>2</td><td>52,55%</td><td>50,44%</td><td>53,43%</td><td>1951</td><td>1983</td><td>1032</td><td>596</td><td>1377</td><td>519</td><td>2</td><td>2</td></tr>
<tr><td>Quebec Nordiques</td><td>QUE</td><td>60</td><td>87</td><td>65</td><td>15</td><td>2480</td><td>803</td><td>784</td><td>858</td><td>82</td><td>2562</td><td>801</td><td>692</td><td>1706</td><td>304</td><td>56</td><td>18,42%</td><td>303</td><td>77</td><td>74,59%</td><td>2</td><td>47,96%</td><td>48,18%</td><td>48,42%</td><td>2043</td><td>1895</td><td>1037</td><td>608</td><td>1300</td><td>515</td><td>1</td><td>1</td></tr>
<tr><td>San Jose Sharks</td><td>SJS</td><td>80</td><td>79</td><td>74</td><td>14</td><td>2455</td><td>783</td><td>807</td><td>821</td><td>99</td><td>2514</td><td>719</td><td>619</td><td>1565</td><td>301</td><td>60</td><td>19,93%</td><td>269</td><td>52</td><td>80,67%</td><td>0</td><td>52,04%</td><td>52,61%</td><td>52,40%</td><td>1948</td><td>2008</td><td>1040</td><td>600</td><td>1406</td><td>524</td><td>3</td><td>2</td></tr>
<tr><td>Seattle Kraken</td><td>SEA</td><td>77</td><td>81</td><td>69</td><td>16</td><td>2480</td><td>821</td><td>822</td><td>807</td><td>60</td><td>2730</td><td>846</td><td>660</td><td>1584</td><td>253</td><td>51</td><td>20,16%</td><td>309</td><td>49</td><td>84,14%</td><td>2</td><td>48,93%</td><td>47,41%</td><td>50,79%</td><td>2071</td><td>1865</td><td>1033</td><td>600</td><td>1286</td><td>505</td><td>5</td><td>2</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>95</td><td>91</td><td>67</td><td>12</td><td>2694</td><td>881</td><td>914</td><td>858</td><td>59</td><td>2432</td><td>755</td><td>553</td><td>1497</td><td>303</td><td>73</td><td>24,09%</td><td>252</td><td>36</td><td>85,71%</td><td>2</td><td>50,97%</td><td>50,31%</td><td>50,51%</td><td>1947</td><td>1992</td><td>1029</td><td>595</td><td>1393</td><td>513</td><td>2</td><td>1</td></tr>
<tr><td>Tampa Bay Lightning</td><td>TBL</td><td>91</td><td>68</td><td>68</td><td>13</td><td>2575</td><td>892</td><td>764</td><td>872</td><td>73</td><td>2376</td><td>740</td><td>665</td><td>1524</td><td>277</td><td>58</td><td>20,94%</td><td>289</td><td>57</td><td>80,28%</td><td>3</td><td>50,27%</td><td>51,91%</td><td>50,00%</td><td>1956</td><td>1988</td><td>1030</td><td>598</td><td>1392</td><td>516</td><td>11</td><td>1</td></tr>
<tr><td>Toronto Maple Leafs</td><td>TOR</td><td>86</td><td>75</td><td>73</td><td>13</td><td>2511</td><td>834</td><td>788</td><td>838</td><td>84</td><td>2546</td><td>731</td><td>678</td><td>1541</td><td>280</td><td>62</td><td>22,14%</td><td>300</td><td>51</td><td>83,00%</td><td>2</td><td>52,30%</td><td>53,61%</td><td>51,59%</td><td>1962</td><td>1974</td><td>1046</td><td>598</td><td>1366</td><td>524</td><td>4</td><td>1</td></tr>
<tr><td>Vancouver Canucks</td><td>VAN</td><td>88</td><td>74</td><td>75</td><td>7</td><td>2520</td><td>808</td><td>828</td><td>863</td><td>31</td><td>2426</td><td>701</td><td>636</td><td>1599</td><td>308</td><td>63</td><td>20,45%</td><td>281</td><td>66</td><td>76,51%</td><td>0</td><td>51,86%</td><td>48,87%</td><td>51,08%</td><td>1919</td><td>1992</td><td>1035</td><td>593</td><td>1388</td><td>525</td><td>5</td><td>3</td></tr>
<tr><td>Vegas Golden Knights</td><td>VEG</td><td>92</td><td>67</td><td>68</td><td>11</td><td>2474</td><td>820</td><td>811</td><td>819</td><td>50</td><td>2381</td><td>647</td><td>550</td><td>1504</td><td>285</td><td>51</td><td>17,89%</td><td>253</td><td>37</td><td>85,38%</td><td>1</td><td>53,27%</td><td>49,73%</td><td>49,40%</td><td>1914</td><td>2006</td><td>1045</td><td>601</td><td>1399</td><td>527</td><td>5</td><td>1</td></tr>
<tr><td>Washington Capitals</td><td>WSH</td><td>68</td><td>83</td><td>64</td><td>11</td><td>2341</td><td>700</td><td>812</td><td>806</td><td>54</td><td>2601</td><td>693</td><td>598</td><td>1538</td><td>288</td><td>52</td><td>18,06%</td><td>264</td><td>54</td><td>79,55%</td><td>0</td><td>48,64%</td><td>48,06%</td><td>49,30%</td><td>1992</td><td>1947</td><td>1026</td><td>602</td><td>1358</td><td>513</td><td>3</td><td>1</td></tr>
<tr><td>Winnipeg Jets</td><td>WPG</td><td>78</td><td>78</td><td>73</td><td>13</td><td>2580</td><td>862</td><td>805</td><td>875</td><td>51</td><td>2475</td><td>746</td><td>659</td><td>1597</td><td>292</td><td>77</td><td>26,37%</td><td>304</td><td>58</td><td>80,92%</td><td>1</td><td>51,48%</td><td>50,30%</td><td>50,17%</td><td>1976</td><td>1968</td><td>1019</td><td>596</td><td>1370</td><td>505</td><td>5</td><td>3</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,93</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Los Angeles Kings</td><td>3,29</td></tr>
<tr><td>2</td><td>Florida Panthers</td><td>3,22</td></tr>
<tr><td>3</td><td>St. Louis Blues</td><td>3,21</td></tr>
<tr><td>4</td><td>Montreal Canadiens</td><td>3,20</td></tr>
<tr><td>5</td><td>Calgary Flames</td><td>3,15</td></tr>
<tr><td>6</td><td>Buffalo Sabres</td><td>3,11</td></tr>
<tr><td>7</td><td>Philadelphia Flyers</td><td>3,11</td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>3,09</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>3,09</td></tr>
<tr><td>10</td><td>Boston Bruins</td><td>3,05</td></tr>
<tr><td>11</td><td>Edmonton Oilers</td><td>3,05</td></tr>
<tr><td>12</td><td>Arizona Coyotes</td><td>3,01</td></tr>
<tr><td>13</td><td>Columbus Blue Jackets</td><td>2,99</td></tr>
<tr><td>14</td><td>Toronto Maple Leafs</td><td>2,96</td></tr>
<tr><td>15</td><td>Vancouver Canucks</td><td>2,96</td></tr>
<tr><td>16</td><td>San Jose Sharks</td><td>2,94</td></tr>
<tr><td>17</td><td>Detroit Red Wings</td><td>2,93</td></tr>
<tr><td>18</td><td>Winnipeg Jets</td><td>2,93</td></tr>
<tr><td>19</td><td>Nashville Predators</td><td>2,91</td></tr>
<tr><td>20</td><td>Minnesota Wild</td><td>2,89</td></tr>
<tr><td>21</td><td>Tampa Bay Lightning</td><td>2,89</td></tr>
<tr><td>22</td><td>Pittsburgh Penguins</td><td>2,88</td></tr>
<tr><td>23</td><td>Vegas Golden Knights</td><td>2,87</td></tr>
<tr><td>24</td><td>Seattle Kraken</td><td>2,85</td></tr>
<tr><td>25</td><td>Anaheim Ducks</td><td>2,83</td></tr>
<tr><td>26</td><td>Dallas Stars</td><td>2,82</td></tr>
<tr><td>27</td><td>New York Islanders</td><td>2,80</td></tr>
<tr><td>28</td><td>Carolina Hurricanes</td><td>2,72</td></tr>
<tr><td>29</td><td>Washington Capitals</td><td>2,70</td></tr>
<tr><td>30</td><td>Quebec Nordiques</td><td>2,67</td></tr>
<tr><td>31</td><td>New York Rangers</td><td>2,65</td></tr>
<tr><td>32</td><td>New Jersey Devils</td><td>2,56</td></tr>
<tr><td>33</td><td>Ottawa Senators</td><td>2,43</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,93</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Vegas Golden Knights</td><td>2,51</td></tr>
<tr><td>2</td><td>St. Louis Blues</td><td>2,68</td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>2,73</td></tr>
<tr><td>4</td><td>Winnipeg Jets</td><td>2,74</td></tr>
<tr><td>5</td><td>Montreal Canadiens</td><td>2,74</td></tr>
<tr><td>6</td><td>Columbus Blue Jackets</td><td>2,74</td></tr>
<tr><td>7</td><td>Los Angeles Kings</td><td>2,76</td></tr>
<tr><td>8</td><td>Tampa Bay Lightning</td><td>2,79</td></tr>
<tr><td>9</td><td>New Jersey Devils</td><td>2,79</td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>2,83</td></tr>
<tr><td>11</td><td>New York Rangers</td><td>2,89</td></tr>
<tr><td>12</td><td>Buffalo Sabres</td><td>2,90</td></tr>
<tr><td>13</td><td>Nashville Predators</td><td>2,91</td></tr>
<tr><td>14</td><td>Boston Bruins</td><td>2,93</td></tr>
<tr><td>15</td><td>Arizona Coyotes</td><td>2,93</td></tr>
<tr><td>16</td><td>Ottawa Senators</td><td>2,96</td></tr>
<tr><td>17</td><td>Florida Panthers</td><td>2,96</td></tr>
<tr><td>18</td><td>San Jose Sharks</td><td>2,98</td></tr>
<tr><td>19</td><td>Philadelphia Flyers</td><td>2,98</td></tr>
<tr><td>20</td><td>Dallas Stars</td><td>2,98</td></tr>
<tr><td>21</td><td>Vancouver Canucks</td><td>2,98</td></tr>
<tr><td>22</td><td>Calgary Flames</td><td>3,01</td></tr>
<tr><td>23</td><td>New York Islanders</td><td>3,04</td></tr>
<tr><td>24</td><td>Edmonton Oilers</td><td>3,04</td></tr>
<tr><td>25</td><td>Minnesota Wild</td><td>3,05</td></tr>
<tr><td>26</td><td>Chicago Blackhawks</td><td>3,05</td></tr>
<tr><td>27</td><td>Washington Capitals</td><td>3,07</td></tr>
<tr><td>28</td><td>Colorado Avalanche</td><td>3,07</td></tr>
<tr><td>29</td><td>Anaheim Ducks</td><td>3,07</td></tr>
<tr><td>30</td><td>Seattle Kraken</td><td>3,09</td></tr>
<tr><td>31</td><td>Quebec Nordiques</td><td>3,09</td></tr>
<tr><td>32</td><td>Detroit Red Wings</td><td>3,10</td></tr>
<tr><td>33</td><td>Carolina Hurricanes</td><td>3,34</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>119,55%</td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>119,47%</td></tr>
<tr><td>3</td><td>Montreal Canadiens</td><td>116,44%</td></tr>
<tr><td>4</td><td>Vegas Golden Knights</td><td>114,08%</td></tr>
<tr><td>5</td><td>Columbus Blue Jackets</td><td>108,89%</td></tr>
<tr><td>6</td><td>Florida Panthers</td><td>108,64%</td></tr>
<tr><td>7</td><td>Toronto Maple Leafs</td><td>108,48%</td></tr>
<tr><td>8</td><td>Buffalo Sabres</td><td>107,14%</td></tr>
<tr><td>9</td><td>Winnipeg Jets</td><td>106,67%</td></tr>
<tr><td>10</td><td>Philadelphia Flyers</td><td>104,51%</td></tr>
<tr><td>11</td><td>Calgary Flames</td><td>104,45%</td></tr>
<tr><td>12</td><td>Boston Bruins</td><td>104,17%</td></tr>
<tr><td>13</td><td>Tampa Bay Lightning</td><td>103,49%</td></tr>
<tr><td>14</td><td>Arizona Coyotes</td><td>102,92%</td></tr>
<tr><td>15</td><td>Pittsburgh Penguins</td><td>101,72%</td></tr>
<tr><td>16</td><td>Chicago Blackhawks</td><td>101,20%</td></tr>
<tr><td>17</td><td>Edmonton Oilers</td><td>100,40%</td></tr>
<tr><td>18</td><td>Colorado Avalanche</td><td>100,40%</td></tr>
<tr><td>19</td><td>Nashville Predators</td><td>100,00%</td></tr>
<tr><td>20</td><td>Vancouver Canucks</td><td>99,59%</td></tr>
<tr><td>21</td><td>San Jose Sharks</td><td>98,77%</td></tr>
<tr><td>22</td><td>Minnesota Wild</td><td>94,80%</td></tr>
<tr><td>23</td><td>Dallas Stars</td><td>94,67%</td></tr>
<tr><td>24</td><td>Detroit Red Wings</td><td>94,49%</td></tr>
<tr><td>25</td><td>Seattle Kraken</td><td>92,49%</td></tr>
<tr><td>26</td><td>New York Islanders</td><td>92,37%</td></tr>
<tr><td>27</td><td>Anaheim Ducks</td><td>92,06%</td></tr>
<tr><td>28</td><td>New Jersey Devils</td><td>91,70%</td></tr>
<tr><td>29</td><td>New York Rangers</td><td>91,56%</td></tr>
<tr><td>30</td><td>Washington Capitals</td><td>87,70%</td></tr>
<tr><td>31</td><td>Quebec Nordiques</td><td>86,56%</td></tr>
<tr><td>32</td><td>Ottawa Senators</td><td>81,89%</td></tr>
<tr><td>33</td><td>Carolina Hurricanes</td><td>81,39%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,69%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Winnipeg Jets</td><td>26,37%</td></tr>
<tr><td>2</td><td>St. Louis Blues</td><td>24,09%</td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>22,14%</td></tr>
<tr><td>4</td><td>Florida Panthers</td><td>22,03%</td></tr>
<tr><td>5</td><td>Carolina Hurricanes</td><td>21,69%</td></tr>
<tr><td>6</td><td>Montreal Canadiens</td><td>21,54%</td></tr>
<tr><td>7</td><td>Detroit Red Wings</td><td>21,48%</td></tr>
<tr><td>8</td><td>Tampa Bay Lightning</td><td>20,94%</td></tr>
<tr><td>9</td><td>Columbus Blue Jackets</td><td>20,82%</td></tr>
<tr><td>10</td><td>Boston Bruins</td><td>20,75%</td></tr>
<tr><td>11</td><td>Los Angeles Kings</td><td>20,47%</td></tr>
<tr><td>12</td><td>Vancouver Canucks</td><td>20,45%</td></tr>
<tr><td>13</td><td>New York Islanders</td><td>20,36%</td></tr>
<tr><td>14</td><td>Minnesota Wild</td><td>20,34%</td></tr>
<tr><td>15</td><td>Buffalo Sabres</td><td>20,27%</td></tr>
<tr><td>16</td><td>Colorado Avalanche</td><td>20,20%</td></tr>
<tr><td>17</td><td>Seattle Kraken</td><td>20,16%</td></tr>
<tr><td>18</td><td>Anaheim Ducks</td><td>20,06%</td></tr>
<tr><td>19</td><td>San Jose Sharks</td><td>19,93%</td></tr>
<tr><td>20</td><td>Philadelphia Flyers</td><td>19,54%</td></tr>
<tr><td>21</td><td>New Jersey Devils</td><td>19,13%</td></tr>
<tr><td>22</td><td>Calgary Flames</td><td>19,08%</td></tr>
<tr><td>23</td><td>Edmonton Oilers</td><td>18,98%</td></tr>
<tr><td>24</td><td>Quebec Nordiques</td><td>18,42%</td></tr>
<tr><td>25</td><td>Washington Capitals</td><td>18,06%</td></tr>
<tr><td>26</td><td>Dallas Stars</td><td>18,00%</td></tr>
<tr><td>27</td><td>Vegas Golden Knights</td><td>17,89%</td></tr>
<tr><td>28</td><td>Chicago Blackhawks</td><td>17,36%</td></tr>
<tr><td>29</td><td>Arizona Coyotes</td><td>16,91%</td></tr>
<tr><td>30</td><td>Pittsburgh Penguins</td><td>16,51%</td></tr>
<tr><td>31</td><td>Nashville Predators</td><td>16,35%</td></tr>
<tr><td>32</td><td>Ottawa Senators</td><td>15,09%</td></tr>
<tr><td>33</td><td>New York Rangers</td><td>14,02%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,31%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>85,71%</td></tr>
<tr><td>2</td><td>Vegas Golden Knights</td><td>85,38%</td></tr>
<tr><td>3</td><td>Seattle Kraken</td><td>84,14%</td></tr>
<tr><td>4</td><td>Montreal Canadiens</td><td>83,90%</td></tr>
<tr><td>5</td><td>New York Rangers</td><td>83,61%</td></tr>
<tr><td>6</td><td>Toronto Maple Leafs</td><td>83,00%</td></tr>
<tr><td>7</td><td>Nashville Predators</td><td>82,99%</td></tr>
<tr><td>8</td><td>Columbus Blue Jackets</td><td>82,88%</td></tr>
<tr><td>9</td><td>Los Angeles Kings</td><td>82,65%</td></tr>
<tr><td>10</td><td>Anaheim Ducks</td><td>82,32%</td></tr>
<tr><td>11</td><td>Dallas Stars</td><td>82,02%</td></tr>
<tr><td>12</td><td>Calgary Flames</td><td>81,60%</td></tr>
<tr><td>13</td><td>Winnipeg Jets</td><td>80,92%</td></tr>
<tr><td>14</td><td>San Jose Sharks</td><td>80,67%</td></tr>
<tr><td>15</td><td>Florida Panthers</td><td>80,62%</td></tr>
<tr><td>16</td><td>Philadelphia Flyers</td><td>80,34%</td></tr>
<tr><td>17</td><td>Edmonton Oilers</td><td>80,29%</td></tr>
<tr><td>18</td><td>Tampa Bay Lightning</td><td>80,28%</td></tr>
<tr><td>19</td><td>Colorado Avalanche</td><td>79,94%</td></tr>
<tr><td>20</td><td>Pittsburgh Penguins</td><td>79,92%</td></tr>
<tr><td>21</td><td>Washington Capitals</td><td>79,55%</td></tr>
<tr><td>22</td><td>Arizona Coyotes</td><td>79,19%</td></tr>
<tr><td>23</td><td>Ottawa Senators</td><td>79,09%</td></tr>
<tr><td>24</td><td>Carolina Hurricanes</td><td>78,51%</td></tr>
<tr><td>25</td><td>New York Islanders</td><td>78,36%</td></tr>
<tr><td>26</td><td>Detroit Red Wings</td><td>78,23%</td></tr>
<tr><td>27</td><td>Buffalo Sabres</td><td>78,05%</td></tr>
<tr><td>28</td><td>Chicago Blackhawks</td><td>77,78%</td></tr>
<tr><td>29</td><td>Vancouver Canucks</td><td>76,51%</td></tr>
<tr><td>30</td><td>Boston Bruins</td><td>76,07%</td></tr>
<tr><td>31</td><td>Minnesota Wild</td><td>75,10%</td></tr>
<tr><td>32</td><td>New Jersey Devils</td><td>75,10%</td></tr>
<tr><td>33</td><td>Quebec Nordiques</td><td>74,59%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>109,81%</td></tr>
<tr><td>2</td><td>Winnipeg Jets</td><td>107,29%</td></tr>
<tr><td>3</td><td>Montreal Canadiens</td><td>105,44%</td></tr>
<tr><td>4</td><td>Toronto Maple Leafs</td><td>105,14%</td></tr>
<tr><td>5</td><td>Seattle Kraken</td><td>104,30%</td></tr>
<tr><td>6</td><td>Columbus Blue Jackets</td><td>103,69%</td></tr>
<tr><td>7</td><td>Vegas Golden Knights</td><td>103,27%</td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>103,12%</td></tr>
<tr><td>9</td><td>Florida Panthers</td><td>102,65%</td></tr>
<tr><td>10</td><td>Anaheim Ducks</td><td>102,38%</td></tr>
<tr><td>11</td><td>Tampa Bay Lightning</td><td>101,22%</td></tr>
<tr><td>12</td><td>Calgary Flames</td><td>100,68%</td></tr>
<tr><td>13</td><td>San Jose Sharks</td><td>100,60%</td></tr>
<tr><td>14</td><td>Carolina Hurricanes</td><td>100,20%</td></tr>
<tr><td>15</td><td>Colorado Avalanche</td><td>100,14%</td></tr>
<tr><td>16</td><td>Dallas Stars</td><td>100,02%</td></tr>
<tr><td>17</td><td>Philadelphia Flyers</td><td>99,88%</td></tr>
<tr><td>18</td><td>Detroit Red Wings</td><td>99,71%</td></tr>
<tr><td>19</td><td>Nashville Predators</td><td>99,34%</td></tr>
<tr><td>20</td><td>Edmonton Oilers</td><td>99,28%</td></tr>
<tr><td>21</td><td>New York Islanders</td><td>98,72%</td></tr>
<tr><td>22</td><td>Buffalo Sabres</td><td>98,32%</td></tr>
<tr><td>23</td><td>New York Rangers</td><td>97,63%</td></tr>
<tr><td>24</td><td>Washington Capitals</td><td>97,60%</td></tr>
<tr><td>25</td><td>Vancouver Canucks</td><td>96,97%</td></tr>
<tr><td>26</td><td>Boston Bruins</td><td>96,82%</td></tr>
<tr><td>27</td><td>Pittsburgh Penguins</td><td>96,44%</td></tr>
<tr><td>28</td><td>Arizona Coyotes</td><td>96,10%</td></tr>
<tr><td>29</td><td>Minnesota Wild</td><td>95,45%</td></tr>
<tr><td>30</td><td>Chicago Blackhawks</td><td>95,14%</td></tr>
<tr><td>31</td><td>New Jersey Devils</td><td>94,23%</td></tr>
<tr><td>32</td><td>Ottawa Senators</td><td>94,19%</td></tr>
<tr><td>33</td><td>Quebec Nordiques</td><td>93,01%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30,54</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>32,85</td></tr>
<tr><td>2</td><td>New York Rangers</td><td>32,27</td></tr>
<tr><td>3</td><td>Florida Panthers</td><td>32,01</td></tr>
<tr><td>4</td><td>Montreal Canadiens</td><td>31,94</td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>31,67</td></tr>
<tr><td>6</td><td>Colorado Avalanche</td><td>31,63</td></tr>
<tr><td>7</td><td>Edmonton Oilers</td><td>31,61</td></tr>
<tr><td>8</td><td>Boston Bruins</td><td>31,48</td></tr>
<tr><td>9</td><td>Winnipeg Jets</td><td>31,46</td></tr>
<tr><td>10</td><td>Tampa Bay Lightning</td><td>31,40</td></tr>
<tr><td>11</td><td>Buffalo Sabres</td><td>31,02</td></tr>
<tr><td>12</td><td>Pittsburgh Penguins</td><td>30,96</td></tr>
<tr><td>13</td><td>Philadelphia Flyers</td><td>30,94</td></tr>
<tr><td>14</td><td>Columbus Blue Jackets</td><td>30,93</td></tr>
<tr><td>15</td><td>Vancouver Canucks</td><td>30,73</td></tr>
<tr><td>16</td><td>Toronto Maple Leafs</td><td>30,62</td></tr>
<tr><td>17</td><td>Chicago Blackhawks</td><td>30,50</td></tr>
<tr><td>18</td><td>Anaheim Ducks</td><td>30,45</td></tr>
<tr><td>19</td><td>Quebec Nordiques</td><td>30,24</td></tr>
<tr><td>20</td><td>Seattle Kraken</td><td>30,24</td></tr>
<tr><td>21</td><td>Vegas Golden Knights</td><td>30,17</td></tr>
<tr><td>22</td><td>Arizona Coyotes</td><td>30,09</td></tr>
<tr><td>23</td><td>San Jose Sharks</td><td>29,94</td></tr>
<tr><td>24</td><td>Nashville Predators</td><td>29,85</td></tr>
<tr><td>25</td><td>Dallas Stars</td><td>29,83</td></tr>
<tr><td>26</td><td>Carolina Hurricanes</td><td>29,72</td></tr>
<tr><td>27</td><td>Ottawa Senators</td><td>29,67</td></tr>
<tr><td>28</td><td>Calgary Flames</td><td>29,51</td></tr>
<tr><td>29</td><td>New York Islanders</td><td>29,13</td></tr>
<tr><td>30</td><td>Minnesota Wild</td><td>29,05</td></tr>
<tr><td>31</td><td>New Jersey Devils</td><td>28,63</td></tr>
<tr><td>32</td><td>Detroit Red Wings</td><td>28,56</td></tr>
<tr><td>33</td><td>Washington Capitals</td><td>28,55</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30,54</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Tampa Bay Lightning</td><td>28,98</td></tr>
<tr><td>2</td><td>Vegas Golden Knights</td><td>29,04</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>29,38</td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>29,40</td></tr>
<tr><td>5</td><td>Boston Bruins</td><td>29,51</td></tr>
<tr><td>6</td><td>Vancouver Canucks</td><td>29,59</td></tr>
<tr><td>7</td><td>Philadelphia Flyers</td><td>29,60</td></tr>
<tr><td>8</td><td>St. Louis Blues</td><td>29,66</td></tr>
<tr><td>9</td><td>Detroit Red Wings</td><td>29,71</td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>29,95</td></tr>
<tr><td>11</td><td>Chicago Blackhawks</td><td>29,98</td></tr>
<tr><td>12</td><td>New Jersey Devils</td><td>30,16</td></tr>
<tr><td>13</td><td>Winnipeg Jets</td><td>30,18</td></tr>
<tr><td>14</td><td>Anaheim Ducks</td><td>30,37</td></tr>
<tr><td>15</td><td>Calgary Flames</td><td>30,41</td></tr>
<tr><td>16</td><td>Buffalo Sabres</td><td>30,43</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>30,46</td></tr>
<tr><td>18</td><td>Florida Panthers</td><td>30,50</td></tr>
<tr><td>19</td><td>Columbus Blue Jackets</td><td>30,50</td></tr>
<tr><td>20</td><td>New York Rangers</td><td>30,50</td></tr>
<tr><td>21</td><td>San Jose Sharks</td><td>30,66</td></tr>
<tr><td>22</td><td>Dallas Stars</td><td>30,78</td></tr>
<tr><td>23</td><td>Montreal Canadiens</td><td>30,94</td></tr>
<tr><td>24</td><td>Colorado Avalanche</td><td>30,94</td></tr>
<tr><td>25</td><td>Toronto Maple Leafs</td><td>31,05</td></tr>
<tr><td>26</td><td>Edmonton Oilers</td><td>31,22</td></tr>
<tr><td>27</td><td>Quebec Nordiques</td><td>31,24</td></tr>
<tr><td>28</td><td>New York Islanders</td><td>31,37</td></tr>
<tr><td>29</td><td>Minnesota Wild</td><td>31,61</td></tr>
<tr><td>30</td><td>Washington Capitals</td><td>31,72</td></tr>
<tr><td>31</td><td>Ottawa Senators</td><td>31,78</td></tr>
<tr><td>32</td><td>Carolina Hurricanes</td><td>32,79</td></tr>
<tr><td>33</td><td>Seattle Kraken</td><td>33,29</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>110,77%</td></tr>
<tr><td>2</td><td>Tampa Bay Lightning</td><td>108,38%</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>107,80%</td></tr>
<tr><td>4</td><td>Boston Bruins</td><td>106,65%</td></tr>
<tr><td>5</td><td>New York Rangers</td><td>105,80%</td></tr>
<tr><td>6</td><td>Florida Panthers</td><td>104,96%</td></tr>
<tr><td>7</td><td>Philadelphia Flyers</td><td>104,53%</td></tr>
<tr><td>8</td><td>Winnipeg Jets</td><td>104,24%</td></tr>
<tr><td>9</td><td>Vegas Golden Knights</td><td>103,91%</td></tr>
<tr><td>10</td><td>Vancouver Canucks</td><td>103,87%</td></tr>
<tr><td>11</td><td>Pittsburgh Penguins</td><td>103,38%</td></tr>
<tr><td>12</td><td>Montreal Canadiens</td><td>103,23%</td></tr>
<tr><td>13</td><td>Arizona Coyotes</td><td>102,32%</td></tr>
<tr><td>14</td><td>Colorado Avalanche</td><td>102,25%</td></tr>
<tr><td>15</td><td>Buffalo Sabres</td><td>101,96%</td></tr>
<tr><td>16</td><td>Chicago Blackhawks</td><td>101,75%</td></tr>
<tr><td>17</td><td>Columbus Blue Jackets</td><td>101,40%</td></tr>
<tr><td>18</td><td>Edmonton Oilers</td><td>101,25%</td></tr>
<tr><td>19</td><td>Anaheim Ducks</td><td>100,28%</td></tr>
<tr><td>20</td><td>Toronto Maple Leafs</td><td>98,63%</td></tr>
<tr><td>21</td><td>Nashville Predators</td><td>98,00%</td></tr>
<tr><td>22</td><td>San Jose Sharks</td><td>97,65%</td></tr>
<tr><td>23</td><td>Calgary Flames</td><td>97,03%</td></tr>
<tr><td>24</td><td>Dallas Stars</td><td>96,91%</td></tr>
<tr><td>25</td><td>Quebec Nordiques</td><td>96,80%</td></tr>
<tr><td>26</td><td>Detroit Red Wings</td><td>96,14%</td></tr>
<tr><td>27</td><td>New Jersey Devils</td><td>94,95%</td></tr>
<tr><td>28</td><td>Ottawa Senators</td><td>93,36%</td></tr>
<tr><td>29</td><td>New York Islanders</td><td>92,88%</td></tr>
<tr><td>30</td><td>Minnesota Wild</td><td>91,90%</td></tr>
<tr><td>31</td><td>Seattle Kraken</td><td>90,84%</td></tr>
<tr><td>32</td><td>Carolina Hurricanes</td><td>90,63%</td></tr>
<tr><td>33</td><td>Washington Capitals</td><td>90,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7,97</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Minnesota Wild</td><td>6,68</td></tr>
<tr><td>2</td><td>Vegas Golden Knights</td><td>6,71</td></tr>
<tr><td>3</td><td>St. Louis Blues</td><td>6,74</td></tr>
<tr><td>4</td><td>Nashville Predators</td><td>6,80</td></tr>
<tr><td>5</td><td>New Jersey Devils</td><td>7,00</td></tr>
<tr><td>6</td><td>Edmonton Oilers</td><td>7,23</td></tr>
<tr><td>7</td><td>Washington Capitals</td><td>7,29</td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>7,46</td></tr>
<tr><td>9</td><td>Pittsburgh Penguins</td><td>7,48</td></tr>
<tr><td>10</td><td>San Jose Sharks</td><td>7,55</td></tr>
<tr><td>11</td><td>Boston Bruins</td><td>7,68</td></tr>
<tr><td>12</td><td>Vancouver Canucks</td><td>7,76</td></tr>
<tr><td>13</td><td>Columbus Blue Jackets</td><td>7,78</td></tr>
<tr><td>14</td><td>Ottawa Senators</td><td>7,80</td></tr>
<tr><td>15</td><td>Buffalo Sabres</td><td>7,88</td></tr>
<tr><td>16</td><td>New York Rangers</td><td>7,99</td></tr>
<tr><td>17</td><td>Winnipeg Jets</td><td>8,04</td></tr>
<tr><td>18</td><td>Detroit Red Wings</td><td>8,05</td></tr>
<tr><td>19</td><td>Seattle Kraken</td><td>8,05</td></tr>
<tr><td>20</td><td>Calgary Flames</td><td>8,09</td></tr>
<tr><td>21</td><td>Tampa Bay Lightning</td><td>8,11</td></tr>
<tr><td>22</td><td>Philadelphia Flyers</td><td>8,16</td></tr>
<tr><td>23</td><td>Toronto Maple Leafs</td><td>8,27</td></tr>
<tr><td>24</td><td>Quebec Nordiques</td><td>8,44</td></tr>
<tr><td>25</td><td>New York Islanders</td><td>8,51</td></tr>
<tr><td>26</td><td>Los Angeles Kings</td><td>8,51</td></tr>
<tr><td>27</td><td>Colorado Avalanche</td><td>8,62</td></tr>
<tr><td>28</td><td>Montreal Canadiens</td><td>8,73</td></tr>
<tr><td>29</td><td>Dallas Stars</td><td>8,76</td></tr>
<tr><td>30</td><td>Florida Panthers</td><td>8,78</td></tr>
<tr><td>31</td><td>Arizona Coyotes</td><td>9,15</td></tr>
<tr><td>32</td><td>Carolina Hurricanes</td><td>9,35</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>9,56</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,14</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Quebec Nordiques</td><td>20,80</td></tr>
<tr><td>2</td><td>Dallas Stars</td><td>20,35</td></tr>
<tr><td>3</td><td>Chicago Blackhawks</td><td>20,29</td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>20,21</td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>19,93</td></tr>
<tr><td>6</td><td>New York Rangers</td><td>19,72</td></tr>
<tr><td>7</td><td>Florida Panthers</td><td>19,62</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>19,57</td></tr>
<tr><td>9</td><td>Buffalo Sabres</td><td>19,52</td></tr>
<tr><td>10</td><td>Vancouver Canucks</td><td>19,50</td></tr>
<tr><td>11</td><td>Winnipeg Jets</td><td>19,48</td></tr>
<tr><td>12</td><td>Ottawa Senators</td><td>19,46</td></tr>
<tr><td>13</td><td>Edmonton Oilers</td><td>19,44</td></tr>
<tr><td>14</td><td>Calgary Flames</td><td>19,34</td></tr>
<tr><td>15</td><td>Seattle Kraken</td><td>19,32</td></tr>
<tr><td>16</td><td>New York Islanders</td><td>19,23</td></tr>
<tr><td>17</td><td>Philadelphia Flyers</td><td>19,21</td></tr>
<tr><td>18</td><td>San Jose Sharks</td><td>19,09</td></tr>
<tr><td>19</td><td>Pittsburgh Penguins</td><td>19,07</td></tr>
<tr><td>20</td><td>Los Angeles Kings</td><td>18,91</td></tr>
<tr><td>21</td><td>Toronto Maple Leafs</td><td>18,79</td></tr>
<tr><td>22</td><td>Washington Capitals</td><td>18,76</td></tr>
<tr><td>23</td><td>Colorado Avalanche</td><td>18,74</td></tr>
<tr><td>24</td><td>Boston Bruins</td><td>18,73</td></tr>
<tr><td>25</td><td>Carolina Hurricanes</td><td>18,65</td></tr>
<tr><td>26</td><td>Tampa Bay Lightning</td><td>18,59</td></tr>
<tr><td>27</td><td>Columbus Blue Jackets</td><td>18,48</td></tr>
<tr><td>28</td><td>Vegas Golden Knights</td><td>18,34</td></tr>
<tr><td>29</td><td>Nashville Predators</td><td>18,26</td></tr>
<tr><td>30</td><td>St. Louis Blues</td><td>18,26</td></tr>
<tr><td>31</td><td>Detroit Red Wings</td><td>18,23</td></tr>
<tr><td>32</td><td>New Jersey Devils</td><td>18,09</td></tr>
<tr><td>33</td><td>Minnesota Wild</td><td>17,73</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Montreal Canadiens</td><td>53,46%</td></tr>
<tr><td>2</td><td>Toronto Maple Leafs</td><td>52,72%</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>52,67%</td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>52,56%</td></tr>
<tr><td>5</td><td>San Jose Sharks</td><td>52,33%</td></tr>
<tr><td>6</td><td>Philadelphia Flyers</td><td>51,83%</td></tr>
<tr><td>7</td><td>Pittsburgh Penguins</td><td>51,82%</td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>51,49%</td></tr>
<tr><td>9</td><td>Calgary Flames</td><td>51,22%</td></tr>
<tr><td>10</td><td>New Jersey Devils</td><td>51,19%</td></tr>
<tr><td>11</td><td>Carolina Hurricanes</td><td>51,18%</td></tr>
<tr><td>12</td><td>Vegas Golden Knights</td><td>51,10%</td></tr>
<tr><td>13</td><td>Tampa Bay Lightning</td><td>50,91%</td></tr>
<tr><td>14</td><td>Winnipeg Jets</td><td>50,77%</td></tr>
<tr><td>15</td><td>Dallas Stars</td><td>50,65%</td></tr>
<tr><td>16</td><td>St. Louis Blues</td><td>50,61%</td></tr>
<tr><td>17</td><td>New York Rangers</td><td>50,58%</td></tr>
<tr><td>18</td><td>Boston Bruins</td><td>50,57%</td></tr>
<tr><td>19</td><td>Vancouver Canucks</td><td>50,49%</td></tr>
<tr><td>20</td><td>Colorado Avalanche</td><td>50,39%</td></tr>
<tr><td>21</td><td>Detroit Red Wings</td><td>50,27%</td></tr>
<tr><td>22</td><td>Columbus Blue Jackets</td><td>50,19%</td></tr>
<tr><td>23</td><td>Florida Panthers</td><td>49,80%</td></tr>
<tr><td>24</td><td>Buffalo Sabres</td><td>49,47%</td></tr>
<tr><td>25</td><td>Nashville Predators</td><td>49,44%</td></tr>
<tr><td>26</td><td>Edmonton Oilers</td><td>49,29%</td></tr>
<tr><td>27</td><td>New York Islanders</td><td>48,97%</td></tr>
<tr><td>28</td><td>Anaheim Ducks</td><td>48,92%</td></tr>
<tr><td>29</td><td>Ottawa Senators</td><td>48,74%</td></tr>
<tr><td>30</td><td>Seattle Kraken</td><td>48,66%</td></tr>
<tr><td>31</td><td>Washington Capitals</td><td>48,52%</td></tr>
<tr><td>32</td><td>Quebec Nordiques</td><td>48,13%</td></tr>
<tr><td>33</td><td>Minnesota Wild</td><td>46,88%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
