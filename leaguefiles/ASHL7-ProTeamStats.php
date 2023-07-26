<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Pro Team Stats</title>
<script type="text/javascript" src="ASHL7.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.2.2" />
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
<link href="ASHL7.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL7-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL7-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 7; /* Show Webpage Top Menu */
include "Menu.php";?>
<script type="text/javascript">$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>82</td><td>34</td><td>31</td><td>5</td><td>7</td><td>2</td><td>3</td><td>230</td><td>219</td><td>41</td><td>14</td><td>18</td><td>4</td><td>1</td><td>1</td><td>3</td><td>105</td><td>106</td><td>41</td><td>20</td><td>13</td><td>1</td><td>6</td><td>1</td><td>0</td><td>125</td><td>113</td><td>230</td><td>414</td><td>644</td></tr>
<tr><td>Arizona Coyotes</td><td>82</td><td>26</td><td>34</td><td>6</td><td>4</td><td>7</td><td>5</td><td>222</td><td>226</td><td>41</td><td>13</td><td>16</td><td>3</td><td>3</td><td>2</td><td>4</td><td>112</td><td>121</td><td>41</td><td>13</td><td>18</td><td>3</td><td>1</td><td>5</td><td>1</td><td>110</td><td>105</td><td>222</td><td>361</td><td>583</td></tr>
<tr><td>Boston Bruins</td><td>82</td><td>30</td><td>32</td><td>8</td><td>7</td><td>0</td><td>5</td><td>230</td><td>245</td><td>41</td><td>14</td><td>17</td><td>6</td><td>2</td><td>0</td><td>2</td><td>118</td><td>122</td><td>41</td><td>16</td><td>15</td><td>2</td><td>5</td><td>0</td><td>3</td><td>112</td><td>123</td><td>230</td><td>397</td><td>627</td></tr>
<tr><td>Buffalo Sabres</td><td>82</td><td>31</td><td>31</td><td>9</td><td>3</td><td>7</td><td>1</td><td>227</td><td>232</td><td>41</td><td>17</td><td>13</td><td>5</td><td>1</td><td>4</td><td>1</td><td>127</td><td>122</td><td>41</td><td>14</td><td>18</td><td>4</td><td>2</td><td>3</td><td>0</td><td>100</td><td>110</td><td>227</td><td>384</td><td>611</td></tr>
<tr><td>Calgary Flames</td><td>82</td><td>30</td><td>38</td><td>1</td><td>6</td><td>6</td><td>1</td><td>211</td><td>221</td><td>41</td><td>13</td><td>21</td><td>1</td><td>2</td><td>3</td><td>1</td><td>113</td><td>119</td><td>41</td><td>17</td><td>17</td><td>0</td><td>4</td><td>3</td><td>0</td><td>98</td><td>102</td><td>211</td><td>355</td><td>566</td></tr>
<tr><td>Carolina Hurricanes</td><td>82</td><td>28</td><td>34</td><td>6</td><td>4</td><td>8</td><td>2</td><td>226</td><td>243</td><td>41</td><td>14</td><td>16</td><td>4</td><td>2</td><td>4</td><td>1</td><td>117</td><td>113</td><td>41</td><td>14</td><td>18</td><td>2</td><td>2</td><td>4</td><td>1</td><td>109</td><td>130</td><td>226</td><td>376</td><td>602</td></tr>
<tr><td>Chicago Blackhawks</td><td>82</td><td>39</td><td>29</td><td>4</td><td>1</td><td>4</td><td>5</td><td>233</td><td>214</td><td>41</td><td>18</td><td>14</td><td>4</td><td>1</td><td>1</td><td>3</td><td>113</td><td>112</td><td>41</td><td>21</td><td>15</td><td>0</td><td>0</td><td>3</td><td>2</td><td>120</td><td>102</td><td>233</td><td>396</td><td>629</td></tr>
<tr><td>Colorado Avalanche</td><td>82</td><td>34</td><td>25</td><td>8</td><td>2</td><td>6</td><td>7</td><td>228</td><td>210</td><td>41</td><td>15</td><td>13</td><td>3</td><td>1</td><td>4</td><td>5</td><td>111</td><td>109</td><td>41</td><td>19</td><td>12</td><td>5</td><td>1</td><td>2</td><td>2</td><td>117</td><td>101</td><td>228</td><td>392</td><td>620</td></tr>
<tr><td>Columbus Blue Jackets</td><td>82</td><td>28</td><td>37</td><td>5</td><td>4</td><td>3</td><td>5</td><td>225</td><td>247</td><td>41</td><td>14</td><td>21</td><td>1</td><td>1</td><td>2</td><td>2</td><td>110</td><td>127</td><td>41</td><td>14</td><td>16</td><td>4</td><td>3</td><td>1</td><td>3</td><td>115</td><td>120</td><td>225</td><td>399</td><td>624</td></tr>
<tr><td>Dallas Stars</td><td>82</td><td>27</td><td>38</td><td>3</td><td>6</td><td>3</td><td>5</td><td>216</td><td>244</td><td>41</td><td>17</td><td>18</td><td>0</td><td>3</td><td>1</td><td>2</td><td>114</td><td>117</td><td>41</td><td>10</td><td>20</td><td>3</td><td>3</td><td>2</td><td>3</td><td>102</td><td>127</td><td>216</td><td>363</td><td>579</td></tr>
<tr><td>Detroit Red Wings</td><td>82</td><td>35</td><td>30</td><td>5</td><td>3</td><td>7</td><td>2</td><td>235</td><td>222</td><td>41</td><td>16</td><td>15</td><td>4</td><td>1</td><td>4</td><td>1</td><td>113</td><td>106</td><td>41</td><td>19</td><td>15</td><td>1</td><td>2</td><td>3</td><td>1</td><td>122</td><td>116</td><td>235</td><td>395</td><td>630</td></tr>
<tr><td>Edmonton Oilers</td><td>82</td><td>28</td><td>36</td><td>4</td><td>7</td><td>3</td><td>4</td><td>224</td><td>244</td><td>41</td><td>13</td><td>21</td><td>1</td><td>5</td><td>1</td><td>0</td><td>118</td><td>130</td><td>41</td><td>15</td><td>15</td><td>3</td><td>2</td><td>2</td><td>4</td><td>106</td><td>114</td><td>224</td><td>384</td><td>608</td></tr>
<tr><td>Florida Panthers</td><td>82</td><td>30</td><td>35</td><td>4</td><td>7</td><td>3</td><td>3</td><td>208</td><td>222</td><td>41</td><td>19</td><td>16</td><td>3</td><td>0</td><td>1</td><td>2</td><td>115</td><td>107</td><td>41</td><td>11</td><td>19</td><td>1</td><td>7</td><td>2</td><td>1</td><td>93</td><td>115</td><td>208</td><td>362</td><td>570</td></tr>
<tr><td>Los Angeles Kings</td><td>82</td><td>43</td><td>25</td><td>3</td><td>4</td><td>3</td><td>4</td><td>222</td><td>203</td><td>41</td><td>21</td><td>10</td><td>2</td><td>2</td><td>3</td><td>3</td><td>108</td><td>95</td><td>41</td><td>22</td><td>15</td><td>1</td><td>2</td><td>0</td><td>1</td><td>114</td><td>108</td><td>222</td><td>377</td><td>599</td></tr>
<tr><td>Minnesota Wild</td><td>82</td><td>35</td><td>29</td><td>6</td><td>4</td><td>5</td><td>3</td><td>239</td><td>224</td><td>41</td><td>18</td><td>16</td><td>3</td><td>1</td><td>2</td><td>1</td><td>114</td><td>103</td><td>41</td><td>17</td><td>13</td><td>3</td><td>3</td><td>3</td><td>2</td><td>125</td><td>121</td><td>239</td><td>409</td><td>648</td></tr>
<tr><td>Montreal Canadiens</td><td>82</td><td>28</td><td>41</td><td>5</td><td>2</td><td>4</td><td>2</td><td>222</td><td>246</td><td>41</td><td>16</td><td>19</td><td>2</td><td>0</td><td>3</td><td>1</td><td>111</td><td>120</td><td>41</td><td>12</td><td>22</td><td>3</td><td>2</td><td>1</td><td>1</td><td>111</td><td>126</td><td>222</td><td>379</td><td>601</td></tr>
<tr><td>Nashville Predators</td><td>82</td><td>31</td><td>29</td><td>2</td><td>5</td><td>10</td><td>5</td><td>233</td><td>228</td><td>41</td><td>12</td><td>19</td><td>2</td><td>4</td><td>3</td><td>1</td><td>120</td><td>125</td><td>41</td><td>19</td><td>10</td><td>0</td><td>1</td><td>7</td><td>4</td><td>113</td><td>103</td><td>233</td><td>397</td><td>630</td></tr>
<tr><td>New Jersey Devils</td><td>82</td><td>36</td><td>27</td><td>3</td><td>8</td><td>1</td><td>7</td><td>240</td><td>230</td><td>41</td><td>18</td><td>11</td><td>2</td><td>5</td><td>1</td><td>4</td><td>124</td><td>115</td><td>41</td><td>18</td><td>16</td><td>1</td><td>3</td><td>0</td><td>3</td><td>116</td><td>115</td><td>240</td><td>426</td><td>666</td></tr>
<tr><td>New York Islanders</td><td>82</td><td>31</td><td>32</td><td>3</td><td>5</td><td>7</td><td>4</td><td>243</td><td>234</td><td>41</td><td>15</td><td>15</td><td>3</td><td>0</td><td>5</td><td>3</td><td>125</td><td>115</td><td>41</td><td>16</td><td>17</td><td>0</td><td>5</td><td>2</td><td>1</td><td>118</td><td>119</td><td>243</td><td>410</td><td>653</td></tr>
<tr><td>New York Rangers</td><td>82</td><td>43</td><td>27</td><td>5</td><td>3</td><td>2</td><td>2</td><td>258</td><td>213</td><td>41</td><td>19</td><td>15</td><td>3</td><td>1</td><td>2</td><td>1</td><td>126</td><td>106</td><td>41</td><td>24</td><td>12</td><td>2</td><td>2</td><td>0</td><td>1</td><td>132</td><td>107</td><td>258</td><td>450</td><td>708</td></tr>
<tr><td>Ottawa Senators</td><td>82</td><td>30</td><td>36</td><td>5</td><td>6</td><td>2</td><td>3</td><td>235</td><td>243</td><td>41</td><td>14</td><td>17</td><td>4</td><td>4</td><td>1</td><td>1</td><td>125</td><td>124</td><td>41</td><td>16</td><td>19</td><td>1</td><td>2</td><td>1</td><td>2</td><td>110</td><td>119</td><td>235</td><td>410</td><td>645</td></tr>
<tr><td>Philadelphia Flyers</td><td>82</td><td>32</td><td>27</td><td>4</td><td>9</td><td>4</td><td>6</td><td>240</td><td>239</td><td>41</td><td>14</td><td>13</td><td>2</td><td>4</td><td>2</td><td>6</td><td>121</td><td>123</td><td>41</td><td>18</td><td>14</td><td>2</td><td>5</td><td>2</td><td>0</td><td>119</td><td>116</td><td>240</td><td>408</td><td>648</td></tr>
<tr><td>Pittsburgh Penguins</td><td>82</td><td>45</td><td>23</td><td>2</td><td>5</td><td>3</td><td>4</td><td>277</td><td>211</td><td>41</td><td>24</td><td>11</td><td>2</td><td>2</td><td>0</td><td>2</td><td>129</td><td>95</td><td>41</td><td>21</td><td>12</td><td>0</td><td>3</td><td>3</td><td>2</td><td>148</td><td>116</td><td>277</td><td>481</td><td>758</td></tr>
<tr><td>Quebec Nordiques</td><td>82</td><td>34</td><td>32</td><td>5</td><td>5</td><td>3</td><td>3</td><td>243</td><td>240</td><td>41</td><td>15</td><td>18</td><td>4</td><td>1</td><td>2</td><td>1</td><td>113</td><td>122</td><td>41</td><td>19</td><td>14</td><td>1</td><td>4</td><td>1</td><td>2</td><td>130</td><td>118</td><td>243</td><td>429</td><td>672</td></tr>
<tr><td>San Jose Sharks</td><td>82</td><td>28</td><td>35</td><td>4</td><td>5</td><td>3</td><td>7</td><td>210</td><td>234</td><td>41</td><td>16</td><td>17</td><td>3</td><td>2</td><td>1</td><td>2</td><td>103</td><td>109</td><td>41</td><td>12</td><td>18</td><td>1</td><td>3</td><td>2</td><td>5</td><td>107</td><td>125</td><td>210</td><td>360</td><td>570</td></tr>
<tr><td>Seattle Saints</td><td>82</td><td>41</td><td>25</td><td>6</td><td>8</td><td>1</td><td>1</td><td>244</td><td>218</td><td>41</td><td>20</td><td>12</td><td>5</td><td>2</td><td>1</td><td>1</td><td>120</td><td>113</td><td>41</td><td>21</td><td>13</td><td>1</td><td>6</td><td>0</td><td>0</td><td>124</td><td>105</td><td>244</td><td>434</td><td>678</td></tr>
<tr><td>St. Louis Blues</td><td>82</td><td>30</td><td>38</td><td>5</td><td>1</td><td>3</td><td>5</td><td>229</td><td>235</td><td>41</td><td>15</td><td>20</td><td>3</td><td>0</td><td>1</td><td>2</td><td>105</td><td>110</td><td>41</td><td>15</td><td>18</td><td>2</td><td>1</td><td>2</td><td>3</td><td>124</td><td>125</td><td>229</td><td>394</td><td>623</td></tr>
<tr><td>Tampa Bay Lightning</td><td>82</td><td>39</td><td>27</td><td>5</td><td>3</td><td>4</td><td>4</td><td>288</td><td>264</td><td>41</td><td>19</td><td>14</td><td>3</td><td>1</td><td>3</td><td>1</td><td>139</td><td>127</td><td>41</td><td>20</td><td>13</td><td>2</td><td>2</td><td>1</td><td>3</td><td>149</td><td>137</td><td>288</td><td>505</td><td>793</td></tr>
<tr><td>Toronto Maple Leafs</td><td>82</td><td>27</td><td>33</td><td>5</td><td>6</td><td>4</td><td>7</td><td>214</td><td>246</td><td>41</td><td>14</td><td>18</td><td>3</td><td>2</td><td>2</td><td>2</td><td>106</td><td>116</td><td>41</td><td>13</td><td>15</td><td>2</td><td>4</td><td>2</td><td>5</td><td>108</td><td>130</td><td>214</td><td>370</td><td>584</td></tr>
<tr><td>Vancouver Canucks</td><td>82</td><td>29</td><td>37</td><td>9</td><td>4</td><td>3</td><td>0</td><td>233</td><td>226</td><td>41</td><td>14</td><td>20</td><td>5</td><td>1</td><td>1</td><td>0</td><td>113</td><td>116</td><td>41</td><td>15</td><td>17</td><td>4</td><td>3</td><td>2</td><td>0</td><td>120</td><td>110</td><td>233</td><td>408</td><td>641</td></tr>
<tr><td>Washington Capitals</td><td>82</td><td>26</td><td>36</td><td>7</td><td>4</td><td>3</td><td>6</td><td>247</td><td>257</td><td>41</td><td>15</td><td>17</td><td>4</td><td>2</td><td>2</td><td>1</td><td>139</td><td>131</td><td>41</td><td>11</td><td>19</td><td>3</td><td>2</td><td>1</td><td>5</td><td>108</td><td>126</td><td>247</td><td>424</td><td>671</td></tr>
<tr><td>Winnipeg Jets</td><td>82</td><td>23</td><td>42</td><td>2</td><td>6</td><td>3</td><td>6</td><td>188</td><td>240</td><td>41</td><td>13</td><td>21</td><td>1</td><td>2</td><td>1</td><td>3</td><td>98</td><td>119</td><td>41</td><td>10</td><td>21</td><td>1</td><td>4</td><td>2</td><td>3</td><td>90</td><td>121</td><td>188</td><td>323</td><td>511</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>ANH</td><td>59</td><td>88</td><td>76</td><td>9</td><td>2482</td><td>788</td><td>806</td><td>863</td><td>48</td><td>2242</td><td>698</td><td>455</td><td>1531</td><td>279</td><td>44</td><td>15,77%</td><td>195</td><td>36</td><td>81,54%</td><td>0</td><td>52,75%</td><td>50,40%</td><td>51,68%</td><td>1790</td><td>1946</td><td>1225</td><td>643</td><td>1274</td><td>628</td><td>0</td><td>4</td></tr>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>58</td><td>77</td><td>74</td><td>21</td><td>2383</td><td>684</td><td>796</td><td>857</td><td>88</td><td>2407</td><td>709</td><td>587</td><td>1437</td><td>251</td><td>55</td><td>21,91%</td><td>269</td><td>55</td><td>79,55%</td><td>2</td><td>51,06%</td><td>52,95%</td><td>51,47%</td><td>1878</td><td>1861</td><td>1260</td><td>683</td><td>1196</td><td>617</td><td>3</td><td>4</td></tr>
<tr><td>Boston Bruins</td><td>BOS</td><td>66</td><td>83</td><td>73</td><td>8</td><td>2258</td><td>747</td><td>735</td><td>747</td><td>46</td><td>2358</td><td>712</td><td>633</td><td>1402</td><td>251</td><td>51</td><td>20,32%</td><td>280</td><td>52</td><td>81,43%</td><td>1</td><td>48,82%</td><td>51,74%</td><td>55,17%</td><td>1834</td><td>1893</td><td>1255</td><td>668</td><td>1219</td><td>626</td><td>2</td><td>1</td></tr>
<tr><td>Buffalo Sabres</td><td>BUF</td><td>67</td><td>72</td><td>72</td><td>20</td><td>2380</td><td>722</td><td>851</td><td>774</td><td>54</td><td>2339</td><td>686</td><td>599</td><td>1479</td><td>250</td><td>60</td><td>24,00%</td><td>275</td><td>47</td><td>82,91%</td><td>1</td><td>49,80%</td><td>50,45%</td><td>50,60%</td><td>1861</td><td>1871</td><td>1245</td><td>670</td><td>1201</td><td>616</td><td>3</td><td>3</td></tr>
<tr><td>Calgary Flames</td><td>CGY</td><td>54</td><td>83</td><td>67</td><td>8</td><td>2369</td><td>748</td><td>794</td><td>812</td><td>41</td><td>2392</td><td>754</td><td>535</td><td>1431</td><td>235</td><td>56</td><td>23,83%</td><td>257</td><td>52</td><td>79,77%</td><td>4</td><td>49,74%</td><td>51,03%</td><td>51,51%</td><td>1888</td><td>1827</td><td>1246</td><td>675</td><td>1167</td><td>612</td><td>2</td><td>3</td></tr>
<tr><td>Carolina Hurricanes</td><td>CAR</td><td>76</td><td>71</td><td>65</td><td>18</td><td>2247</td><td>695</td><td>736</td><td>780</td><td>67</td><td>2309</td><td>739</td><td>741</td><td>1540</td><td>239</td><td>47</td><td>19,67%</td><td>285</td><td>57</td><td>80,00%</td><td>3</td><td>47,46%</td><td>50,56%</td><td>50,49%</td><td>1898</td><td>1840</td><td>1255</td><td>669</td><td>1176</td><td>617</td><td>2</td><td>3</td></tr>
<tr><td>Chicago Blackhawks</td><td>CHI</td><td>59</td><td>92</td><td>74</td><td>13</td><td>2343</td><td>700</td><td>840</td><td>772</td><td>64</td><td>2368</td><td>779</td><td>708</td><td>1527</td><td>224</td><td>49</td><td>21,88%</td><td>315</td><td>43</td><td>86,35%</td><td>4</td><td>51,53%</td><td>53,73%</td><td>53,56%</td><td>1890</td><td>1848</td><td>1236</td><td>673</td><td>1184</td><td>604</td><td>2</td><td>3</td></tr>
<tr><td>Colorado Avalanche</td><td>COL</td><td>71</td><td>77</td><td>66</td><td>21</td><td>2339</td><td>798</td><td>784</td><td>713</td><td>96</td><td>2364</td><td>691</td><td>530</td><td>1477</td><td>289</td><td>51</td><td>17,65%</td><td>225</td><td>39</td><td>82,67%</td><td>0</td><td>49,79%</td><td>50,83%</td><td>49,74%</td><td>1890</td><td>1857</td><td>1259</td><td>683</td><td>1186</td><td>624</td><td>5</td><td>5</td></tr>
<tr><td>Columbus Blue Jackets</td><td>CLB</td><td>67</td><td>67</td><td>83</td><td>10</td><td>2514</td><td>798</td><td>880</td><td>806</td><td>55</td><td>2304</td><td>740</td><td>579</td><td>1441</td><td>281</td><td>54</td><td>19,22%</td><td>256</td><td>46</td><td>82,03%</td><td>1</td><td>49,67%</td><td>50,63%</td><td>50,71%</td><td>1827</td><td>1917</td><td>1228</td><td>658</td><td>1256</td><td>617</td><td>3</td><td>2</td></tr>
<tr><td>Dallas Stars</td><td>DAL</td><td>66</td><td>64</td><td>80</td><td>13</td><td>2316</td><td>716</td><td>790</td><td>783</td><td>67</td><td>2399</td><td>742</td><td>638</td><td>1457</td><td>222</td><td>35</td><td>15,77%</td><td>276</td><td>59</td><td>78,62%</td><td>2</td><td>50,26%</td><td>52,11%</td><td>51,24%</td><td>1891</td><td>1825</td><td>1260</td><td>677</td><td>1160</td><td>622</td><td>3</td><td>1</td></tr>
<tr><td>Detroit Red Wings</td><td>DET</td><td>65</td><td>80</td><td>78</td><td>23</td><td>2318</td><td>731</td><td>817</td><td>749</td><td>64</td><td>2284</td><td>696</td><td>606</td><td>1485</td><td>268</td><td>54</td><td>20,15%</td><td>257</td><td>49</td><td>80,93%</td><td>1</td><td>49,71%</td><td>50,13%</td><td>48,42%</td><td>1848</td><td>1889</td><td>1241</td><td>665</td><td>1216</td><td>623</td><td>5</td><td>2</td></tr>
<tr><td>Edmonton Oilers</td><td>EDM</td><td>77</td><td>67</td><td>73</td><td>11</td><td>2433</td><td>771</td><td>846</td><td>778</td><td>67</td><td>2310</td><td>675</td><td>430</td><td>1489</td><td>263</td><td>45</td><td>17,11%</td><td>193</td><td>48</td><td>75,13%</td><td>2</td><td>49,26%</td><td>50,00%</td><td>50,43%</td><td>1858</td><td>1890</td><td>1228</td><td>656</td><td>1233</td><td>618</td><td>3</td><td>1</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>54</td><td>67</td><td>80</td><td>8</td><td>2290</td><td>721</td><td>791</td><td>754</td><td>45</td><td>2365</td><td>742</td><td>566</td><td>1474</td><td>247</td><td>42</td><td>17,00%</td><td>265</td><td>53</td><td>80,00%</td><td>5</td><td>50,63%</td><td>50,00%</td><td>49,20%</td><td>1897</td><td>1872</td><td>1201</td><td>660</td><td>1217</td><td>593</td><td>5</td><td>1</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>59</td><td>82</td><td>75</td><td>9</td><td>2334</td><td>698</td><td>777</td><td>825</td><td>60</td><td>2290</td><td>706</td><td>513</td><td>1505</td><td>253</td><td>45</td><td>17,79%</td><td>229</td><td>31</td><td>86,46%</td><td>2</td><td>52,14%</td><td>51,94%</td><td>56,04%</td><td>1799</td><td>1929</td><td>1241</td><td>648</td><td>1252</td><td>631</td><td>3</td><td>1</td></tr>
<tr><td>Minnesota Wild</td><td>MIN</td><td>61</td><td>77</td><td>90</td><td>12</td><td>2315</td><td>723</td><td>759</td><td>806</td><td>53</td><td>2381</td><td>747</td><td>518</td><td>1479</td><td>266</td><td>63</td><td>23,68%</td><td>228</td><td>48</td><td>78,95%</td><td>5</td><td>48,83%</td><td>50,15%</td><td>49,75%</td><td>1892</td><td>1849</td><td>1233</td><td>666</td><td>1191</td><td>617</td><td>2</td><td>2</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>74</td><td>71</td><td>68</td><td>11</td><td>2386</td><td>770</td><td>776</td><td>809</td><td>50</td><td>2330</td><td>731</td><td>653</td><td>1506</td><td>298</td><td>43</td><td>14,43%</td><td>282</td><td>64</td><td>77,30%</td><td>0</td><td>50,28%</td><td>50,15%</td><td>53,52%</td><td>1827</td><td>1898</td><td>1242</td><td>666</td><td>1224</td><td>626</td><td>2</td><td>4</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>70</td><td>75</td><td>76</td><td>20</td><td>2392</td><td>791</td><td>791</td><td>782</td><td>86</td><td>2366</td><td>760</td><td>581</td><td>1528</td><td>252</td><td>42</td><td>16,67%</td><td>265</td><td>56</td><td>78,87%</td><td>6</td><td>47,73%</td><td>47,88%</td><td>50,21%</td><td>1885</td><td>1895</td><td>1232</td><td>668</td><td>1220</td><td>616</td><td>3</td><td>2</td></tr>
<tr><td>New Jersey Devils</td><td>NJD</td><td>62</td><td>96</td><td>78</td><td>6</td><td>2345</td><td>741</td><td>763</td><td>815</td><td>48</td><td>2351</td><td>753</td><td>504</td><td>1454</td><td>282</td><td>52</td><td>18,44%</td><td>226</td><td>40</td><td>82,30%</td><td>5</td><td>50,64%</td><td>48,79%</td><td>48,22%</td><td>1874</td><td>1864</td><td>1241</td><td>665</td><td>1201</td><td>621</td><td>3</td><td>3</td></tr>
<tr><td>New York Islanders</td><td>NYI</td><td>74</td><td>95</td><td>64</td><td>14</td><td>2268</td><td>720</td><td>774</td><td>747</td><td>60</td><td>2477</td><td>724</td><td>671</td><td>1505</td><td>224</td><td>47</td><td>20,98%</td><td>304</td><td>51</td><td>83,22%</td><td>2</td><td>50,88%</td><td>52,67%</td><td>51,39%</td><td>1901</td><td>1834</td><td>1248</td><td>674</td><td>1167</td><td>615</td><td>4</td><td>5</td></tr>
<tr><td>New York Rangers</td><td>NYR</td><td>84</td><td>90</td><td>77</td><td>10</td><td>2429</td><td>818</td><td>802</td><td>790</td><td>31</td><td>2348</td><td>734</td><td>676</td><td>1568</td><td>279</td><td>48</td><td>17,20%</td><td>284</td><td>52</td><td>81,69%</td><td>6</td><td>49,78%</td><td>48,22%</td><td>49,87%</td><td>1856</td><td>1867</td><td>1228</td><td>663</td><td>1204</td><td>610</td><td>2</td><td>3</td></tr>
<tr><td>Ottawa Senators</td><td>OTT</td><td>72</td><td>76</td><td>80</td><td>9</td><td>2504</td><td>833</td><td>798</td><td>854</td><td>40</td><td>2395</td><td>732</td><td>499</td><td>1462</td><td>225</td><td>48</td><td>21,33%</td><td>197</td><td>41</td><td>79,19%</td><td>4</td><td>51,07%</td><td>54,90%</td><td>51,16%</td><td>1847</td><td>1901</td><td>1220</td><td>640</td><td>1249</td><td>616</td><td>2</td><td>1</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>65</td><td>76</td><td>91</td><td>13</td><td>2348</td><td>715</td><td>775</td><td>819</td><td>75</td><td>2253</td><td>709</td><td>468</td><td>1548</td><td>306</td><td>60</td><td>19,61%</td><td>205</td><td>49</td><td>76,10%</td><td>2</td><td>52,73%</td><td>51,79%</td><td>54,83%</td><td>1784</td><td>1971</td><td>1245</td><td>649</td><td>1290</td><td>643</td><td>7</td><td>5</td></tr>
<tr><td>Pittsburgh Penguins</td><td>PIT</td><td>80</td><td>104</td><td>88</td><td>7</td><td>2542</td><td>733</td><td>900</td><td>881</td><td>54</td><td>2322</td><td>690</td><td>561</td><td>1492</td><td>277</td><td>59</td><td>21,30%</td><td>240</td><td>43</td><td>82,08%</td><td>1</td><td>52,22%</td><td>50,11%</td><td>52,15%</td><td>1862</td><td>1874</td><td>1235</td><td>663</td><td>1208</td><td>619</td><td>1</td><td>2</td></tr>
<tr><td>Quebec Nordiques</td><td>QUE</td><td>77</td><td>77</td><td>81</td><td>10</td><td>2282</td><td>736</td><td>802</td><td>715</td><td>49</td><td>2371</td><td>712</td><td>589</td><td>1476</td><td>242</td><td>54</td><td>22,31%</td><td>267</td><td>70</td><td>73,78%</td><td>1</td><td>47,46%</td><td>47,29%</td><td>47,86%</td><td>1885</td><td>1831</td><td>1249</td><td>668</td><td>1171</td><td>614</td><td>2</td><td>1</td></tr>
<tr><td>San Jose Sharks</td><td>SJS</td><td>52</td><td>80</td><td>71</td><td>13</td><td>2270</td><td>715</td><td>839</td><td>702</td><td>55</td><td>2366</td><td>718</td><td>525</td><td>1455</td><td>251</td><td>45</td><td>17,93%</td><td>240</td><td>54</td><td>77,50%</td><td>0</td><td>52,02%</td><td>50,61%</td><td>50,84%</td><td>1864</td><td>1862</td><td>1255</td><td>673</td><td>1189</td><td>627</td><td>3</td><td>2</td></tr>
<tr><td>Seattle Saints</td><td>SEA</td><td>68</td><td>76</td><td>93</td><td>8</td><td>2393</td><td>731</td><td>821</td><td>811</td><td>40</td><td>2283</td><td>774</td><td>606</td><td>1633</td><td>249</td><td>52</td><td>20,88%</td><td>283</td><td>53</td><td>81,27%</td><td>1</td><td>48,04%</td><td>51,43%</td><td>50,51%</td><td>1889</td><td>1827</td><td>1233</td><td>669</td><td>1164</td><td>609</td><td>3</td><td>0</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>75</td><td>67</td><td>79</td><td>11</td><td>2287</td><td>732</td><td>776</td><td>754</td><td>54</td><td>2397</td><td>756</td><td>561</td><td>1429</td><td>254</td><td>54</td><td>21,26%</td><td>261</td><td>45</td><td>82,76%</td><td>6</td><td>51,89%</td><td>52,27%</td><td>49,92%</td><td>1918</td><td>1809</td><td>1246</td><td>675</td><td>1140</td><td>617</td><td>1</td><td>2</td></tr>
<tr><td>Tampa Bay Lightning</td><td>TBL</td><td>96</td><td>86</td><td>97</td><td>10</td><td>2601</td><td>875</td><td>838</td><td>857</td><td>62</td><td>2617</td><td>839</td><td>620</td><td>1512</td><td>266</td><td>62</td><td>23,31%</td><td>255</td><td>60</td><td>76,47%</td><td>0</td><td>51,23%</td><td>51,64%</td><td>50,34%</td><td>1947</td><td>1815</td><td>1216</td><td>662</td><td>1175</td><td>597</td><td>1</td><td>1</td></tr>
<tr><td>Toronto Maple Leafs</td><td>TOR</td><td>55</td><td>70</td><td>80</td><td>15</td><td>2368</td><td>738</td><td>793</td><td>796</td><td>81</td><td>2391</td><td>731</td><td>587</td><td>1540</td><td>279</td><td>50</td><td>17,92%</td><td>251</td><td>48</td><td>80,88%</td><td>2</td><td>50,74%</td><td>50,54%</td><td>50,61%</td><td>1858</td><td>1902</td><td>1245</td><td>667</td><td>1223</td><td>630</td><td>2</td><td>2</td></tr>
<tr><td>Vancouver Canucks</td><td>VAN</td><td>53</td><td>81</td><td>87</td><td>15</td><td>2357</td><td>700</td><td>847</td><td>780</td><td>44</td><td>2292</td><td>728</td><td>625</td><td>1390</td><td>226</td><td>44</td><td>19,47%</td><td>279</td><td>56</td><td>79,93%</td><td>2</td><td>51,73%</td><td>53,21%</td><td>49,70%</td><td>1829</td><td>1882</td><td>1247</td><td>665</td><td>1212</td><td>625</td><td>3</td><td>0</td></tr>
<tr><td>Washington Capitals</td><td>WSH</td><td>72</td><td>79</td><td>86</td><td>15</td><td>2340</td><td>678</td><td>776</td><td>846</td><td>73</td><td>2385</td><td>737</td><td>630</td><td>1473</td><td>246</td><td>48</td><td>19,51%</td><td>285</td><td>50</td><td>82,46%</td><td>4</td><td>49,49%</td><td>49,15%</td><td>49,96%</td><td>1885</td><td>1860</td><td>1241</td><td>670</td><td>1194</td><td>613</td><td>0</td><td>2</td></tr>
<tr><td>Winnipeg Jets</td><td>WPG</td><td>46</td><td>72</td><td>65</td><td>7</td><td>2131</td><td>664</td><td>694</td><td>745</td><td>59</td><td>2508</td><td>775</td><td>595</td><td>1450</td><td>221</td><td>38</td><td>17,19%</td><td>266</td><td>50</td><td>81,20%</td><td>1</td><td>44,69%</td><td>48,75%</td><td>47,28%</td><td>1950</td><td>1801</td><td>1229</td><td>665</td><td>1146</td><td>603</td><td>0</td><td>1</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,83</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Tampa Bay Lightning</td><td>3,51</td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>3,38</td></tr>
<tr><td>3</td><td>New York Rangers</td><td>3,15</td></tr>
<tr><td>4</td><td>Washington Capitals</td><td>3,01</td></tr>
<tr><td>5</td><td>Seattle Saints</td><td>2,98</td></tr>
<tr><td>6</td><td>Quebec Nordiques</td><td>2,96</td></tr>
<tr><td>7</td><td>New York Islanders</td><td>2,96</td></tr>
<tr><td>8</td><td>Philadelphia Flyers</td><td>2,93</td></tr>
<tr><td>9</td><td>New Jersey Devils</td><td>2,93</td></tr>
<tr><td>10</td><td>Minnesota Wild</td><td>2,91</td></tr>
<tr><td>11</td><td>Ottawa Senators</td><td>2,87</td></tr>
<tr><td>12</td><td>Detroit Red Wings</td><td>2,87</td></tr>
<tr><td>13</td><td>Vancouver Canucks</td><td>2,84</td></tr>
<tr><td>14</td><td>Nashville Predators</td><td>2,84</td></tr>
<tr><td>15</td><td>Chicago Blackhawks</td><td>2,84</td></tr>
<tr><td>16</td><td>Anaheim Ducks</td><td>2,80</td></tr>
<tr><td>17</td><td>Boston Bruins</td><td>2,80</td></tr>
<tr><td>18</td><td>St. Louis Blues</td><td>2,79</td></tr>
<tr><td>19</td><td>Colorado Avalanche</td><td>2,78</td></tr>
<tr><td>20</td><td>Buffalo Sabres</td><td>2,77</td></tr>
<tr><td>21</td><td>Carolina Hurricanes</td><td>2,76</td></tr>
<tr><td>22</td><td>Columbus Blue Jackets</td><td>2,74</td></tr>
<tr><td>23</td><td>Edmonton Oilers</td><td>2,73</td></tr>
<tr><td>24</td><td>Montreal Canadiens</td><td>2,71</td></tr>
<tr><td>25</td><td>Los Angeles Kings</td><td>2,71</td></tr>
<tr><td>26</td><td>Arizona Coyotes</td><td>2,71</td></tr>
<tr><td>27</td><td>Dallas Stars</td><td>2,63</td></tr>
<tr><td>28</td><td>Toronto Maple Leafs</td><td>2,61</td></tr>
<tr><td>29</td><td>Calgary Flames</td><td>2,57</td></tr>
<tr><td>30</td><td>San Jose Sharks</td><td>2,56</td></tr>
<tr><td>31</td><td>Florida Panthers</td><td>2,54</td></tr>
<tr><td>32</td><td>Winnipeg Jets</td><td>2,29</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,83</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Los Angeles Kings</td><td>2,48</td></tr>
<tr><td>2</td><td>Colorado Avalanche</td><td>2,56</td></tr>
<tr><td>3</td><td>Pittsburgh Penguins</td><td>2,57</td></tr>
<tr><td>4</td><td>New York Rangers</td><td>2,60</td></tr>
<tr><td>5</td><td>Chicago Blackhawks</td><td>2,61</td></tr>
<tr><td>6</td><td>Seattle Saints</td><td>2,66</td></tr>
<tr><td>7</td><td>Anaheim Ducks</td><td>2,67</td></tr>
<tr><td>8</td><td>Calgary Flames</td><td>2,70</td></tr>
<tr><td>9</td><td>Detroit Red Wings</td><td>2,71</td></tr>
<tr><td>10</td><td>Florida Panthers</td><td>2,71</td></tr>
<tr><td>11</td><td>Minnesota Wild</td><td>2,73</td></tr>
<tr><td>12</td><td>Arizona Coyotes</td><td>2,76</td></tr>
<tr><td>13</td><td>Vancouver Canucks</td><td>2,76</td></tr>
<tr><td>14</td><td>Nashville Predators</td><td>2,78</td></tr>
<tr><td>15</td><td>New Jersey Devils</td><td>2,80</td></tr>
<tr><td>16</td><td>Buffalo Sabres</td><td>2,83</td></tr>
<tr><td>17</td><td>New York Islanders</td><td>2,85</td></tr>
<tr><td>18</td><td>San Jose Sharks</td><td>2,85</td></tr>
<tr><td>19</td><td>St. Louis Blues</td><td>2,87</td></tr>
<tr><td>20</td><td>Philadelphia Flyers</td><td>2,91</td></tr>
<tr><td>21</td><td>Quebec Nordiques</td><td>2,93</td></tr>
<tr><td>22</td><td>Winnipeg Jets</td><td>2,93</td></tr>
<tr><td>23</td><td>Carolina Hurricanes</td><td>2,96</td></tr>
<tr><td>24</td><td>Ottawa Senators</td><td>2,96</td></tr>
<tr><td>25</td><td>Dallas Stars</td><td>2,98</td></tr>
<tr><td>26</td><td>Edmonton Oilers</td><td>2,98</td></tr>
<tr><td>27</td><td>Boston Bruins</td><td>2,99</td></tr>
<tr><td>28</td><td>Montreal Canadiens</td><td>3,00</td></tr>
<tr><td>29</td><td>Toronto Maple Leafs</td><td>3,00</td></tr>
<tr><td>30</td><td>Columbus Blue Jackets</td><td>3,01</td></tr>
<tr><td>31</td><td>Washington Capitals</td><td>3,13</td></tr>
<tr><td>32</td><td>Tampa Bay Lightning</td><td>3,22</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Pittsburgh Penguins</td><td>131,28%</td></tr>
<tr><td>2</td><td>New York Rangers</td><td>121,13%</td></tr>
<tr><td>3</td><td>Seattle Saints</td><td>111,93%</td></tr>
<tr><td>4</td><td>Los Angeles Kings</td><td>109,36%</td></tr>
<tr><td>5</td><td>Tampa Bay Lightning</td><td>109,09%</td></tr>
<tr><td>6</td><td>Chicago Blackhawks</td><td>108,88%</td></tr>
<tr><td>7</td><td>Colorado Avalanche</td><td>108,57%</td></tr>
<tr><td>8</td><td>Minnesota Wild</td><td>106,70%</td></tr>
<tr><td>9</td><td>Detroit Red Wings</td><td>105,86%</td></tr>
<tr><td>10</td><td>Anaheim Ducks</td><td>105,02%</td></tr>
<tr><td>11</td><td>New Jersey Devils</td><td>104,35%</td></tr>
<tr><td>12</td><td>New York Islanders</td><td>103,85%</td></tr>
<tr><td>13</td><td>Vancouver Canucks</td><td>103,10%</td></tr>
<tr><td>14</td><td>Nashville Predators</td><td>102,19%</td></tr>
<tr><td>15</td><td>Quebec Nordiques</td><td>101,25%</td></tr>
<tr><td>16</td><td>Philadelphia Flyers</td><td>100,42%</td></tr>
<tr><td>17</td><td>Arizona Coyotes</td><td>98,23%</td></tr>
<tr><td>18</td><td>Buffalo Sabres</td><td>97,84%</td></tr>
<tr><td>19</td><td>St. Louis Blues</td><td>97,45%</td></tr>
<tr><td>20</td><td>Ottawa Senators</td><td>96,71%</td></tr>
<tr><td>21</td><td>Washington Capitals</td><td>96,11%</td></tr>
<tr><td>22</td><td>Calgary Flames</td><td>95,48%</td></tr>
<tr><td>23</td><td>Boston Bruins</td><td>93,88%</td></tr>
<tr><td>24</td><td>Florida Panthers</td><td>93,69%</td></tr>
<tr><td>25</td><td>Carolina Hurricanes</td><td>93,00%</td></tr>
<tr><td>26</td><td>Edmonton Oilers</td><td>91,80%</td></tr>
<tr><td>27</td><td>Columbus Blue Jackets</td><td>91,09%</td></tr>
<tr><td>28</td><td>Montreal Canadiens</td><td>90,24%</td></tr>
<tr><td>29</td><td>San Jose Sharks</td><td>89,74%</td></tr>
<tr><td>30</td><td>Dallas Stars</td><td>88,52%</td></tr>
<tr><td>31</td><td>Toronto Maple Leafs</td><td>86,99%</td></tr>
<tr><td>32</td><td>Winnipeg Jets</td><td>78,33%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,49%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Buffalo Sabres</td><td>24,00%</td></tr>
<tr><td>2</td><td>Calgary Flames</td><td>23,83%</td></tr>
<tr><td>3</td><td>Minnesota Wild</td><td>23,68%</td></tr>
<tr><td>4</td><td>Tampa Bay Lightning</td><td>23,31%</td></tr>
<tr><td>5</td><td>Quebec Nordiques</td><td>22,31%</td></tr>
<tr><td>6</td><td>Arizona Coyotes</td><td>21,91%</td></tr>
<tr><td>7</td><td>Chicago Blackhawks</td><td>21,88%</td></tr>
<tr><td>8</td><td>Ottawa Senators</td><td>21,33%</td></tr>
<tr><td>9</td><td>Pittsburgh Penguins</td><td>21,30%</td></tr>
<tr><td>10</td><td>St. Louis Blues</td><td>21,26%</td></tr>
<tr><td>11</td><td>New York Islanders</td><td>20,98%</td></tr>
<tr><td>12</td><td>Seattle Saints</td><td>20,88%</td></tr>
<tr><td>13</td><td>Boston Bruins</td><td>20,32%</td></tr>
<tr><td>14</td><td>Detroit Red Wings</td><td>20,15%</td></tr>
<tr><td>15</td><td>Carolina Hurricanes</td><td>19,67%</td></tr>
<tr><td>16</td><td>Philadelphia Flyers</td><td>19,61%</td></tr>
<tr><td>17</td><td>Washington Capitals</td><td>19,51%</td></tr>
<tr><td>18</td><td>Vancouver Canucks</td><td>19,47%</td></tr>
<tr><td>19</td><td>Columbus Blue Jackets</td><td>19,22%</td></tr>
<tr><td>20</td><td>New Jersey Devils</td><td>18,44%</td></tr>
<tr><td>21</td><td>San Jose Sharks</td><td>17,93%</td></tr>
<tr><td>22</td><td>Toronto Maple Leafs</td><td>17,92%</td></tr>
<tr><td>23</td><td>Los Angeles Kings</td><td>17,79%</td></tr>
<tr><td>24</td><td>Colorado Avalanche</td><td>17,65%</td></tr>
<tr><td>25</td><td>New York Rangers</td><td>17,20%</td></tr>
<tr><td>26</td><td>Winnipeg Jets</td><td>17,19%</td></tr>
<tr><td>27</td><td>Edmonton Oilers</td><td>17,11%</td></tr>
<tr><td>28</td><td>Florida Panthers</td><td>17,00%</td></tr>
<tr><td>29</td><td>Nashville Predators</td><td>16,67%</td></tr>
<tr><td>30</td><td>Anaheim Ducks</td><td>15,77%</td></tr>
<tr><td>31</td><td>Dallas Stars</td><td>15,77%</td></tr>
<tr><td>32</td><td>Montreal Canadiens</td><td>14,43%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,51%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Los Angeles Kings</td><td>86,46%</td></tr>
<tr><td>2</td><td>Chicago Blackhawks</td><td>86,35%</td></tr>
<tr><td>3</td><td>New York Islanders</td><td>83,22%</td></tr>
<tr><td>4</td><td>Buffalo Sabres</td><td>82,91%</td></tr>
<tr><td>5</td><td>St. Louis Blues</td><td>82,76%</td></tr>
<tr><td>6</td><td>Colorado Avalanche</td><td>82,67%</td></tr>
<tr><td>7</td><td>Washington Capitals</td><td>82,46%</td></tr>
<tr><td>8</td><td>New Jersey Devils</td><td>82,30%</td></tr>
<tr><td>9</td><td>Pittsburgh Penguins</td><td>82,08%</td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>82,03%</td></tr>
<tr><td>11</td><td>New York Rangers</td><td>81,69%</td></tr>
<tr><td>12</td><td>Anaheim Ducks</td><td>81,54%</td></tr>
<tr><td>13</td><td>Boston Bruins</td><td>81,43%</td></tr>
<tr><td>14</td><td>Seattle Saints</td><td>81,27%</td></tr>
<tr><td>15</td><td>Winnipeg Jets</td><td>81,20%</td></tr>
<tr><td>16</td><td>Detroit Red Wings</td><td>80,93%</td></tr>
<tr><td>17</td><td>Toronto Maple Leafs</td><td>80,88%</td></tr>
<tr><td>18</td><td>Florida Panthers</td><td>80,00%</td></tr>
<tr><td>19</td><td>Carolina Hurricanes</td><td>80,00%</td></tr>
<tr><td>20</td><td>Vancouver Canucks</td><td>79,93%</td></tr>
<tr><td>21</td><td>Calgary Flames</td><td>79,77%</td></tr>
<tr><td>22</td><td>Arizona Coyotes</td><td>79,55%</td></tr>
<tr><td>23</td><td>Ottawa Senators</td><td>79,19%</td></tr>
<tr><td>24</td><td>Minnesota Wild</td><td>78,95%</td></tr>
<tr><td>25</td><td>Nashville Predators</td><td>78,87%</td></tr>
<tr><td>26</td><td>Dallas Stars</td><td>78,62%</td></tr>
<tr><td>27</td><td>San Jose Sharks</td><td>77,50%</td></tr>
<tr><td>28</td><td>Montreal Canadiens</td><td>77,30%</td></tr>
<tr><td>29</td><td>Tampa Bay Lightning</td><td>76,47%</td></tr>
<tr><td>30</td><td>Philadelphia Flyers</td><td>76,10%</td></tr>
<tr><td>31</td><td>Edmonton Oilers</td><td>75,13%</td></tr>
<tr><td>32</td><td>Quebec Nordiques</td><td>73,78%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Chicago Blackhawks</td><td>108,22%</td></tr>
<tr><td>2</td><td>Buffalo Sabres</td><td>106,91%</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>104,25%</td></tr>
<tr><td>4</td><td>New York Islanders</td><td>104,21%</td></tr>
<tr><td>5</td><td>St. Louis Blues</td><td>104,02%</td></tr>
<tr><td>6</td><td>Calgary Flames</td><td>103,60%</td></tr>
<tr><td>7</td><td>Pittsburgh Penguins</td><td>103,38%</td></tr>
<tr><td>8</td><td>Minnesota Wild</td><td>102,63%</td></tr>
<tr><td>9</td><td>Seattle Saints</td><td>102,16%</td></tr>
<tr><td>10</td><td>Washington Capitals</td><td>101,97%</td></tr>
<tr><td>11</td><td>Boston Bruins</td><td>101,75%</td></tr>
<tr><td>12</td><td>Arizona Coyotes</td><td>101,47%</td></tr>
<tr><td>13</td><td>Columbus Blue Jackets</td><td>101,25%</td></tr>
<tr><td>14</td><td>Detroit Red Wings</td><td>101,08%</td></tr>
<tr><td>15</td><td>New Jersey Devils</td><td>100,74%</td></tr>
<tr><td>16</td><td>Ottawa Senators</td><td>100,52%</td></tr>
<tr><td>17</td><td>Colorado Avalanche</td><td>100,31%</td></tr>
<tr><td>18</td><td>Tampa Bay Lightning</td><td>99,78%</td></tr>
<tr><td>19</td><td>Carolina Hurricanes</td><td>99,67%</td></tr>
<tr><td>20</td><td>Vancouver Canucks</td><td>99,40%</td></tr>
<tr><td>21</td><td>New York Rangers</td><td>98,89%</td></tr>
<tr><td>22</td><td>Toronto Maple Leafs</td><td>98,80%</td></tr>
<tr><td>23</td><td>Winnipeg Jets</td><td>98,40%</td></tr>
<tr><td>24</td><td>Anaheim Ducks</td><td>97,31%</td></tr>
<tr><td>25</td><td>Florida Panthers</td><td>97,00%</td></tr>
<tr><td>26</td><td>Quebec Nordiques</td><td>96,10%</td></tr>
<tr><td>27</td><td>Philadelphia Flyers</td><td>95,71%</td></tr>
<tr><td>28</td><td>Nashville Predators</td><td>95,53%</td></tr>
<tr><td>29</td><td>San Jose Sharks</td><td>95,43%</td></tr>
<tr><td>30</td><td>Dallas Stars</td><td>94,39%</td></tr>
<tr><td>31</td><td>Edmonton Oilers</td><td>92,24%</td></tr>
<tr><td>32</td><td>Montreal Canadiens</td><td>91,73%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28,80</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Tampa Bay Lightning</td><td>31,72</td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>31,00</td></tr>
<tr><td>3</td><td>Columbus Blue Jackets</td><td>30,66</td></tr>
<tr><td>4</td><td>Ottawa Senators</td><td>30,54</td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>30,27</td></tr>
<tr><td>6</td><td>Edmonton Oilers</td><td>29,67</td></tr>
<tr><td>7</td><td>New York Rangers</td><td>29,62</td></tr>
<tr><td>8</td><td>Seattle Saints</td><td>29,18</td></tr>
<tr><td>9</td><td>Nashville Predators</td><td>29,17</td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>29,10</td></tr>
<tr><td>11</td><td>Arizona Coyotes</td><td>29,06</td></tr>
<tr><td>12</td><td>Buffalo Sabres</td><td>29,02</td></tr>
<tr><td>13</td><td>Calgary Flames</td><td>28,89</td></tr>
<tr><td>14</td><td>Toronto Maple Leafs</td><td>28,88</td></tr>
<tr><td>15</td><td>Vancouver Canucks</td><td>28,74</td></tr>
<tr><td>16</td><td>Philadelphia Flyers</td><td>28,63</td></tr>
<tr><td>17</td><td>New Jersey Devils</td><td>28,60</td></tr>
<tr><td>18</td><td>Chicago Blackhawks</td><td>28,57</td></tr>
<tr><td>19</td><td>Washington Capitals</td><td>28,54</td></tr>
<tr><td>20</td><td>Colorado Avalanche</td><td>28,52</td></tr>
<tr><td>21</td><td>Los Angeles Kings</td><td>28,46</td></tr>
<tr><td>22</td><td>Detroit Red Wings</td><td>28,27</td></tr>
<tr><td>23</td><td>Dallas Stars</td><td>28,24</td></tr>
<tr><td>24</td><td>Minnesota Wild</td><td>28,23</td></tr>
<tr><td>25</td><td>Florida Panthers</td><td>27,93</td></tr>
<tr><td>26</td><td>St. Louis Blues</td><td>27,89</td></tr>
<tr><td>27</td><td>Quebec Nordiques</td><td>27,83</td></tr>
<tr><td>28</td><td>San Jose Sharks</td><td>27,68</td></tr>
<tr><td>29</td><td>New York Islanders</td><td>27,66</td></tr>
<tr><td>30</td><td>Boston Bruins</td><td>27,54</td></tr>
<tr><td>31</td><td>Carolina Hurricanes</td><td>27,40</td></tr>
<tr><td>32</td><td>Winnipeg Jets</td><td>25,99</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28,80</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Anaheim Ducks</td><td>27,34</td></tr>
<tr><td>2</td><td>Philadelphia Flyers</td><td>27,48</td></tr>
<tr><td>3</td><td>Seattle Saints</td><td>27,84</td></tr>
<tr><td>4</td><td>Detroit Red Wings</td><td>27,85</td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>27,93</td></tr>
<tr><td>6</td><td>Vancouver Canucks</td><td>27,95</td></tr>
<tr><td>7</td><td>Columbus Blue Jackets</td><td>28,10</td></tr>
<tr><td>8</td><td>Carolina Hurricanes</td><td>28,16</td></tr>
<tr><td>9</td><td>Edmonton Oilers</td><td>28,17</td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>28,32</td></tr>
<tr><td>11</td><td>Montreal Canadiens</td><td>28,41</td></tr>
<tr><td>12</td><td>Buffalo Sabres</td><td>28,52</td></tr>
<tr><td>13</td><td>New York Rangers</td><td>28,63</td></tr>
<tr><td>14</td><td>New Jersey Devils</td><td>28,67</td></tr>
<tr><td>15</td><td>Boston Bruins</td><td>28,76</td></tr>
<tr><td>16</td><td>Colorado Avalanche</td><td>28,83</td></tr>
<tr><td>17</td><td>Florida Panthers</td><td>28,84</td></tr>
<tr><td>18</td><td>Nashville Predators</td><td>28,85</td></tr>
<tr><td>19</td><td>San Jose Sharks</td><td>28,85</td></tr>
<tr><td>20</td><td>Chicago Blackhawks</td><td>28,88</td></tr>
<tr><td>21</td><td>Quebec Nordiques</td><td>28,91</td></tr>
<tr><td>22</td><td>Minnesota Wild</td><td>29,04</td></tr>
<tr><td>23</td><td>Washington Capitals</td><td>29,09</td></tr>
<tr><td>24</td><td>Toronto Maple Leafs</td><td>29,16</td></tr>
<tr><td>25</td><td>Calgary Flames</td><td>29,17</td></tr>
<tr><td>26</td><td>Ottawa Senators</td><td>29,21</td></tr>
<tr><td>27</td><td>St. Louis Blues</td><td>29,23</td></tr>
<tr><td>28</td><td>Dallas Stars</td><td>29,26</td></tr>
<tr><td>29</td><td>Arizona Coyotes</td><td>29,35</td></tr>
<tr><td>30</td><td>New York Islanders</td><td>30,21</td></tr>
<tr><td>31</td><td>Winnipeg Jets</td><td>30,59</td></tr>
<tr><td>32</td><td>Tampa Bay Lightning</td><td>31,91</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Anaheim Ducks</td><td>110,70%</td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>109,47%</td></tr>
<tr><td>3</td><td>Columbus Blue Jackets</td><td>109,11%</td></tr>
<tr><td>4</td><td>Edmonton Oilers</td><td>105,32%</td></tr>
<tr><td>5</td><td>Seattle Saints</td><td>104,82%</td></tr>
<tr><td>6</td><td>Ottawa Senators</td><td>104,55%</td></tr>
<tr><td>7</td><td>Philadelphia Flyers</td><td>104,22%</td></tr>
<tr><td>8</td><td>New York Rangers</td><td>103,45%</td></tr>
<tr><td>9</td><td>Vancouver Canucks</td><td>102,84%</td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>102,40%</td></tr>
<tr><td>11</td><td>Los Angeles Kings</td><td>101,92%</td></tr>
<tr><td>12</td><td>Buffalo Sabres</td><td>101,75%</td></tr>
<tr><td>13</td><td>Detroit Red Wings</td><td>101,49%</td></tr>
<tr><td>14</td><td>Nashville Predators</td><td>101,10%</td></tr>
<tr><td>15</td><td>New Jersey Devils</td><td>99,74%</td></tr>
<tr><td>16</td><td>Tampa Bay Lightning</td><td>99,39%</td></tr>
<tr><td>17</td><td>Calgary Flames</td><td>99,04%</td></tr>
<tr><td>18</td><td>Toronto Maple Leafs</td><td>99,04%</td></tr>
<tr><td>19</td><td>Arizona Coyotes</td><td>99,00%</td></tr>
<tr><td>20</td><td>Chicago Blackhawks</td><td>98,94%</td></tr>
<tr><td>21</td><td>Colorado Avalanche</td><td>98,94%</td></tr>
<tr><td>22</td><td>Washington Capitals</td><td>98,11%</td></tr>
<tr><td>23</td><td>Carolina Hurricanes</td><td>97,31%</td></tr>
<tr><td>24</td><td>Minnesota Wild</td><td>97,23%</td></tr>
<tr><td>25</td><td>Florida Panthers</td><td>96,83%</td></tr>
<tr><td>26</td><td>Dallas Stars</td><td>96,54%</td></tr>
<tr><td>27</td><td>Quebec Nordiques</td><td>96,25%</td></tr>
<tr><td>28</td><td>San Jose Sharks</td><td>95,94%</td></tr>
<tr><td>29</td><td>Boston Bruins</td><td>95,76%</td></tr>
<tr><td>30</td><td>St. Louis Blues</td><td>95,41%</td></tr>
<tr><td>31</td><td>New York Islanders</td><td>91,56%</td></tr>
<tr><td>32</td><td>Winnipeg Jets</td><td>84,97%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7,08</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Edmonton Oilers</td><td>5,24</td></tr>
<tr><td>2</td><td>Anaheim Ducks</td><td>5,55</td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>5,71</td></tr>
<tr><td>4</td><td>Ottawa Senators</td><td>6,09</td></tr>
<tr><td>5</td><td>New Jersey Devils</td><td>6,15</td></tr>
<tr><td>6</td><td>Los Angeles Kings</td><td>6,26</td></tr>
<tr><td>7</td><td>Minnesota Wild</td><td>6,32</td></tr>
<tr><td>8</td><td>San Jose Sharks</td><td>6,40</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>6,46</td></tr>
<tr><td>10</td><td>Calgary Flames</td><td>6,52</td></tr>
<tr><td>11</td><td>Pittsburgh Penguins</td><td>6,84</td></tr>
<tr><td>12</td><td>St. Louis Blues</td><td>6,84</td></tr>
<tr><td>13</td><td>Florida Panthers</td><td>6,90</td></tr>
<tr><td>14</td><td>Columbus Blue Jackets</td><td>7,06</td></tr>
<tr><td>15</td><td>Nashville Predators</td><td>7,09</td></tr>
<tr><td>16</td><td>Toronto Maple Leafs</td><td>7,16</td></tr>
<tr><td>17</td><td>Arizona Coyotes</td><td>7,16</td></tr>
<tr><td>18</td><td>Quebec Nordiques</td><td>7,18</td></tr>
<tr><td>19</td><td>Winnipeg Jets</td><td>7,26</td></tr>
<tr><td>20</td><td>Buffalo Sabres</td><td>7,30</td></tr>
<tr><td>21</td><td>Detroit Red Wings</td><td>7,39</td></tr>
<tr><td>22</td><td>Seattle Saints</td><td>7,39</td></tr>
<tr><td>23</td><td>Tampa Bay Lightning</td><td>7,56</td></tr>
<tr><td>24</td><td>Vancouver Canucks</td><td>7,62</td></tr>
<tr><td>25</td><td>Washington Capitals</td><td>7,68</td></tr>
<tr><td>26</td><td>Boston Bruins</td><td>7,72</td></tr>
<tr><td>27</td><td>Dallas Stars</td><td>7,78</td></tr>
<tr><td>28</td><td>Montreal Canadiens</td><td>7,96</td></tr>
<tr><td>29</td><td>New York Islanders</td><td>8,18</td></tr>
<tr><td>30</td><td>New York Rangers</td><td>8,24</td></tr>
<tr><td>31</td><td>Chicago Blackhawks</td><td>8,63</td></tr>
<tr><td>32</td><td>Carolina Hurricanes</td><td>9,04</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18,13</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Seattle Saints</td><td>19,91</td></tr>
<tr><td>2</td><td>New York Rangers</td><td>19,12</td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>18,88</td></tr>
<tr><td>4</td><td>Toronto Maple Leafs</td><td>18,78</td></tr>
<tr><td>5</td><td>Carolina Hurricanes</td><td>18,78</td></tr>
<tr><td>6</td><td>Anaheim Ducks</td><td>18,67</td></tr>
<tr><td>7</td><td>Nashville Predators</td><td>18,63</td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>18,62</td></tr>
<tr><td>9</td><td>Tampa Bay Lightning</td><td>18,44</td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>18,37</td></tr>
<tr><td>11</td><td>New York Islanders</td><td>18,35</td></tr>
<tr><td>12</td><td>Los Angeles Kings</td><td>18,35</td></tr>
<tr><td>13</td><td>Pittsburgh Penguins</td><td>18,20</td></tr>
<tr><td>14</td><td>Edmonton Oilers</td><td>18,16</td></tr>
<tr><td>15</td><td>Detroit Red Wings</td><td>18,11</td></tr>
<tr><td>16</td><td>Buffalo Sabres</td><td>18,04</td></tr>
<tr><td>17</td><td>Minnesota Wild</td><td>18,04</td></tr>
<tr><td>18</td><td>Colorado Avalanche</td><td>18,01</td></tr>
<tr><td>19</td><td>Quebec Nordiques</td><td>18,00</td></tr>
<tr><td>20</td><td>Florida Panthers</td><td>17,98</td></tr>
<tr><td>21</td><td>Washington Capitals</td><td>17,96</td></tr>
<tr><td>22</td><td>Ottawa Senators</td><td>17,83</td></tr>
<tr><td>23</td><td>Dallas Stars</td><td>17,77</td></tr>
<tr><td>24</td><td>San Jose Sharks</td><td>17,74</td></tr>
<tr><td>25</td><td>New Jersey Devils</td><td>17,73</td></tr>
<tr><td>26</td><td>Winnipeg Jets</td><td>17,68</td></tr>
<tr><td>27</td><td>Columbus Blue Jackets</td><td>17,57</td></tr>
<tr><td>28</td><td>Arizona Coyotes</td><td>17,52</td></tr>
<tr><td>29</td><td>Calgary Flames</td><td>17,45</td></tr>
<tr><td>30</td><td>St. Louis Blues</td><td>17,43</td></tr>
<tr><td>31</td><td>Boston Bruins</td><td>17,10</td></tr>
<tr><td>32</td><td>Vancouver Canucks</td><td>16,95</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Los Angeles Kings</td><td>52,85%</td></tr>
<tr><td>2</td><td>Chicago Blackhawks</td><td>52,81%</td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>52,80%</td></tr>
<tr><td>4</td><td>Ottawa Senators</td><td>52,65%</td></tr>
<tr><td>5</td><td>Vancouver Canucks</td><td>51,92%</td></tr>
<tr><td>6</td><td>Arizona Coyotes</td><td>51,90%</td></tr>
<tr><td>7</td><td>New York Islanders</td><td>51,67%</td></tr>
<tr><td>8</td><td>St. Louis Blues</td><td>51,63%</td></tr>
<tr><td>9</td><td>Anaheim Ducks</td><td>51,55%</td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>51,35%</td></tr>
<tr><td>11</td><td>Boston Bruins</td><td>51,24%</td></tr>
<tr><td>12</td><td>San Jose Sharks</td><td>51,22%</td></tr>
<tr><td>13</td><td>Tampa Bay Lightning</td><td>51,20%</td></tr>
<tr><td>14</td><td>Dallas Stars</td><td>51,17%</td></tr>
<tr><td>15</td><td>Montreal Canadiens</td><td>50,91%</td></tr>
<tr><td>16</td><td>Toronto Maple Leafs</td><td>50,63%</td></tr>
<tr><td>17</td><td>Calgary Flames</td><td>50,61%</td></tr>
<tr><td>18</td><td>Columbus Blue Jackets</td><td>50,27%</td></tr>
<tr><td>19</td><td>Buffalo Sabres</td><td>50,23%</td></tr>
<tr><td>20</td><td>Colorado Avalanche</td><td>50,19%</td></tr>
<tr><td>21</td><td>Florida Panthers</td><td>50,10%</td></tr>
<tr><td>22</td><td>Seattle Saints</td><td>49,90%</td></tr>
<tr><td>23</td><td>Edmonton Oilers</td><td>49,80%</td></tr>
<tr><td>24</td><td>Detroit Red Wings</td><td>49,61%</td></tr>
<tr><td>25</td><td>Minnesota Wild</td><td>49,55%</td></tr>
<tr><td>26</td><td>Washington Capitals</td><td>49,45%</td></tr>
<tr><td>27</td><td>New Jersey Devils</td><td>49,40%</td></tr>
<tr><td>28</td><td>Carolina Hurricanes</td><td>49,30%</td></tr>
<tr><td>29</td><td>New York Rangers</td><td>49,18%</td></tr>
<tr><td>30</td><td>Nashville Predators</td><td>48,29%</td></tr>
<tr><td>31</td><td>Quebec Nordiques</td><td>47,48%</td></tr>
<tr><td>32</td><td>Winnipeg Jets</td><td>46,74%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
