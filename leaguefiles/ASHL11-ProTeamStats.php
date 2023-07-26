<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Stats</title>
<script src="ASHL11.js"></script>
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
<tr><td>Anaheim Ducks</td><td>82</td><td>37</td><td>39</td><td>1</td><td>1</td><td>2</td><td>2</td><td>230</td><td>237</td><td>41</td><td>16</td><td>22</td><td>0</td><td>1</td><td>1</td><td>1</td><td>103</td><td>123</td><td>41</td><td>21</td><td>17</td><td>1</td><td>0</td><td>1</td><td>1</td><td>127</td><td>114</td><td>230</td><td>413</td><td>643</td></tr>
<tr><td>Arizona Coyotes</td><td>82</td><td>42</td><td>21</td><td>6</td><td>4</td><td>6</td><td>3</td><td>266</td><td>225</td><td>41</td><td>22</td><td>8</td><td>3</td><td>2</td><td>4</td><td>2</td><td>140</td><td>116</td><td>41</td><td>20</td><td>13</td><td>3</td><td>2</td><td>2</td><td>1</td><td>126</td><td>109</td><td>266</td><td>462</td><td>728</td></tr>
<tr><td>Boston Bruins</td><td>82</td><td>34</td><td>34</td><td>4</td><td>3</td><td>3</td><td>4</td><td>248</td><td>254</td><td>41</td><td>19</td><td>14</td><td>2</td><td>1</td><td>2</td><td>3</td><td>139</td><td>124</td><td>41</td><td>15</td><td>20</td><td>2</td><td>2</td><td>1</td><td>1</td><td>109</td><td>130</td><td>248</td><td>445</td><td>693</td></tr>
<tr><td>Buffalo Sabres</td><td>82</td><td>32</td><td>39</td><td>3</td><td>2</td><td>3</td><td>3</td><td>219</td><td>232</td><td>41</td><td>16</td><td>18</td><td>2</td><td>1</td><td>3</td><td>1</td><td>111</td><td>104</td><td>41</td><td>16</td><td>21</td><td>1</td><td>1</td><td>0</td><td>2</td><td>108</td><td>128</td><td>219</td><td>388</td><td>607</td></tr>
<tr><td>Calgary Flames</td><td>82</td><td>27</td><td>38</td><td>7</td><td>5</td><td>3</td><td>2</td><td>220</td><td>254</td><td>41</td><td>17</td><td>17</td><td>3</td><td>2</td><td>2</td><td>0</td><td>116</td><td>124</td><td>41</td><td>10</td><td>21</td><td>4</td><td>3</td><td>1</td><td>2</td><td>104</td><td>130</td><td>220</td><td>396</td><td>616</td></tr>
<tr><td>Carolina Hurricanes</td><td>82</td><td>34</td><td>32</td><td>3</td><td>5</td><td>1</td><td>7</td><td>238</td><td>242</td><td>41</td><td>17</td><td>15</td><td>3</td><td>2</td><td>1</td><td>3</td><td>117</td><td>117</td><td>41</td><td>17</td><td>17</td><td>0</td><td>3</td><td>0</td><td>4</td><td>121</td><td>125</td><td>238</td><td>430</td><td>668</td></tr>
<tr><td>Chicago Blackhawks</td><td>82</td><td>39</td><td>30</td><td>5</td><td>3</td><td>3</td><td>2</td><td>256</td><td>242</td><td>41</td><td>18</td><td>17</td><td>3</td><td>1</td><td>2</td><td>0</td><td>134</td><td>128</td><td>41</td><td>21</td><td>13</td><td>2</td><td>2</td><td>1</td><td>2</td><td>122</td><td>114</td><td>256</td><td>467</td><td>723</td></tr>
<tr><td>Colorado Avalanche</td><td>82</td><td>28</td><td>36</td><td>6</td><td>5</td><td>3</td><td>4</td><td>215</td><td>238</td><td>41</td><td>15</td><td>18</td><td>2</td><td>3</td><td>2</td><td>1</td><td>111</td><td>118</td><td>41</td><td>13</td><td>18</td><td>4</td><td>2</td><td>1</td><td>3</td><td>104</td><td>120</td><td>215</td><td>381</td><td>596</td></tr>
<tr><td>Columbus Blue Jackets</td><td>82</td><td>32</td><td>34</td><td>3</td><td>7</td><td>4</td><td>2</td><td>244</td><td>237</td><td>41</td><td>20</td><td>14</td><td>3</td><td>3</td><td>1</td><td>0</td><td>127</td><td>105</td><td>41</td><td>12</td><td>20</td><td>0</td><td>4</td><td>3</td><td>2</td><td>117</td><td>132</td><td>244</td><td>437</td><td>681</td></tr>
<tr><td>Dallas Stars</td><td>82</td><td>37</td><td>30</td><td>4</td><td>3</td><td>5</td><td>3</td><td>247</td><td>230</td><td>41</td><td>23</td><td>13</td><td>2</td><td>0</td><td>1</td><td>2</td><td>137</td><td>112</td><td>41</td><td>14</td><td>17</td><td>2</td><td>3</td><td>4</td><td>1</td><td>110</td><td>118</td><td>247</td><td>441</td><td>688</td></tr>
<tr><td>Detroit Red Wings</td><td>82</td><td>33</td><td>34</td><td>4</td><td>6</td><td>4</td><td>1</td><td>237</td><td>231</td><td>41</td><td>22</td><td>12</td><td>2</td><td>2</td><td>3</td><td>0</td><td>126</td><td>100</td><td>41</td><td>11</td><td>22</td><td>2</td><td>4</td><td>1</td><td>1</td><td>111</td><td>131</td><td>237</td><td>433</td><td>670</td></tr>
<tr><td>Edmonton Oilers</td><td>82</td><td>29</td><td>39</td><td>7</td><td>2</td><td>3</td><td>2</td><td>240</td><td>272</td><td>41</td><td>16</td><td>20</td><td>3</td><td>1</td><td>1</td><td>0</td><td>122</td><td>144</td><td>41</td><td>13</td><td>19</td><td>4</td><td>1</td><td>2</td><td>2</td><td>118</td><td>128</td><td>240</td><td>436</td><td>676</td></tr>
<tr><td>Florida Panthers</td><td>82</td><td>40</td><td>24</td><td>4</td><td>3</td><td>3</td><td>8</td><td>263</td><td>218</td><td>41</td><td>19</td><td>10</td><td>3</td><td>1</td><td>2</td><td>6</td><td>132</td><td>109</td><td>41</td><td>21</td><td>14</td><td>1</td><td>2</td><td>1</td><td>2</td><td>131</td><td>109</td><td>263</td><td>469</td><td>732</td></tr>
<tr><td>Los Angeles Kings</td><td>82</td><td>37</td><td>30</td><td>3</td><td>8</td><td>2</td><td>2</td><td>249</td><td>232</td><td>41</td><td>18</td><td>14</td><td>3</td><td>5</td><td>1</td><td>0</td><td>124</td><td>115</td><td>41</td><td>19</td><td>16</td><td>0</td><td>3</td><td>1</td><td>2</td><td>125</td><td>117</td><td>249</td><td>450</td><td>699</td></tr>
<tr><td>Minnesota Wild</td><td>82</td><td>32</td><td>37</td><td>3</td><td>4</td><td>5</td><td>1</td><td>228</td><td>248</td><td>41</td><td>15</td><td>17</td><td>3</td><td>2</td><td>3</td><td>1</td><td>110</td><td>117</td><td>41</td><td>17</td><td>20</td><td>0</td><td>2</td><td>2</td><td>0</td><td>118</td><td>131</td><td>228</td><td>407</td><td>635</td></tr>
<tr><td>Montreal Canadiens</td><td>82</td><td>47</td><td>22</td><td>3</td><td>4</td><td>3</td><td>3</td><td>267</td><td>214</td><td>41</td><td>29</td><td>8</td><td>1</td><td>1</td><td>0</td><td>2</td><td>141</td><td>99</td><td>41</td><td>18</td><td>14</td><td>2</td><td>3</td><td>3</td><td>1</td><td>126</td><td>115</td><td>267</td><td>495</td><td>762</td></tr>
<tr><td>Nashville Predators</td><td>82</td><td>32</td><td>34</td><td>4</td><td>5</td><td>3</td><td>4</td><td>246</td><td>248</td><td>41</td><td>16</td><td>18</td><td>1</td><td>1</td><td>2</td><td>3</td><td>121</td><td>126</td><td>41</td><td>16</td><td>16</td><td>3</td><td>4</td><td>1</td><td>1</td><td>125</td><td>122</td><td>246</td><td>447</td><td>693</td></tr>
<tr><td>New Jersey Devils</td><td>82</td><td>38</td><td>31</td><td>2</td><td>3</td><td>4</td><td>4</td><td>242</td><td>222</td><td>41</td><td>21</td><td>13</td><td>1</td><td>2</td><td>2</td><td>2</td><td>134</td><td>113</td><td>41</td><td>17</td><td>18</td><td>1</td><td>1</td><td>2</td><td>2</td><td>108</td><td>109</td><td>242</td><td>438</td><td>680</td></tr>
<tr><td>New York Islanders</td><td>82</td><td>24</td><td>41</td><td>2</td><td>6</td><td>4</td><td>5</td><td>200</td><td>243</td><td>41</td><td>14</td><td>17</td><td>2</td><td>3</td><td>2</td><td>3</td><td>105</td><td>111</td><td>41</td><td>10</td><td>24</td><td>0</td><td>3</td><td>2</td><td>2</td><td>95</td><td>132</td><td>200</td><td>354</td><td>554</td></tr>
<tr><td>New York Rangers</td><td>82</td><td>31</td><td>34</td><td>7</td><td>1</td><td>7</td><td>2</td><td>228</td><td>233</td><td>41</td><td>15</td><td>17</td><td>4</td><td>0</td><td>4</td><td>1</td><td>113</td><td>120</td><td>41</td><td>16</td><td>17</td><td>3</td><td>1</td><td>3</td><td>1</td><td>115</td><td>113</td><td>228</td><td>386</td><td>614</td></tr>
<tr><td>Ottawa Senators</td><td>82</td><td>35</td><td>32</td><td>7</td><td>1</td><td>3</td><td>4</td><td>238</td><td>228</td><td>41</td><td>22</td><td>14</td><td>2</td><td>1</td><td>0</td><td>2</td><td>132</td><td>106</td><td>41</td><td>13</td><td>18</td><td>5</td><td>0</td><td>3</td><td>2</td><td>106</td><td>122</td><td>238</td><td>427</td><td>665</td></tr>
<tr><td>Philadelphia Flyers</td><td>82</td><td>36</td><td>35</td><td>3</td><td>3</td><td>3</td><td>2</td><td>240</td><td>237</td><td>41</td><td>20</td><td>13</td><td>2</td><td>3</td><td>2</td><td>1</td><td>123</td><td>106</td><td>41</td><td>16</td><td>22</td><td>1</td><td>0</td><td>1</td><td>1</td><td>117</td><td>131</td><td>240</td><td>427</td><td>667</td></tr>
<tr><td>Pittsburgh Penguins</td><td>82</td><td>25</td><td>36</td><td>3</td><td>8</td><td>2</td><td>8</td><td>212</td><td>247</td><td>41</td><td>12</td><td>20</td><td>2</td><td>2</td><td>1</td><td>4</td><td>101</td><td>129</td><td>41</td><td>13</td><td>16</td><td>1</td><td>6</td><td>1</td><td>4</td><td>111</td><td>118</td><td>212</td><td>380</td><td>592</td></tr>
<tr><td>Quebec Nordiques</td><td>82</td><td>25</td><td>38</td><td>3</td><td>9</td><td>2</td><td>5</td><td>214</td><td>252</td><td>41</td><td>14</td><td>17</td><td>3</td><td>2</td><td>2</td><td>3</td><td>100</td><td>114</td><td>41</td><td>11</td><td>21</td><td>0</td><td>7</td><td>0</td><td>2</td><td>114</td><td>138</td><td>214</td><td>381</td><td>595</td></tr>
<tr><td>San Jose Sharks</td><td>82</td><td>31</td><td>35</td><td>4</td><td>6</td><td>1</td><td>5</td><td>237</td><td>252</td><td>41</td><td>19</td><td>13</td><td>4</td><td>2</td><td>1</td><td>2</td><td>125</td><td>117</td><td>41</td><td>12</td><td>22</td><td>0</td><td>4</td><td>0</td><td>3</td><td>112</td><td>135</td><td>237</td><td>428</td><td>665</td></tr>
<tr><td>Seattle Kraken</td><td>82</td><td>31</td><td>41</td><td>2</td><td>7</td><td>1</td><td>0</td><td>222</td><td>252</td><td>41</td><td>17</td><td>20</td><td>1</td><td>2</td><td>1</td><td>0</td><td>113</td><td>120</td><td>41</td><td>14</td><td>21</td><td>1</td><td>5</td><td>0</td><td>0</td><td>109</td><td>132</td><td>222</td><td>405</td><td>627</td></tr>
<tr><td>St. Louis Blues</td><td>82</td><td>38</td><td>30</td><td>3</td><td>3</td><td>2</td><td>6</td><td>240</td><td>227</td><td>41</td><td>22</td><td>12</td><td>1</td><td>2</td><td>1</td><td>3</td><td>123</td><td>107</td><td>41</td><td>16</td><td>18</td><td>2</td><td>1</td><td>1</td><td>3</td><td>117</td><td>120</td><td>240</td><td>430</td><td>670</td></tr>
<tr><td>Tampa Bay Lightning</td><td>82</td><td>34</td><td>28</td><td>7</td><td>3</td><td>5</td><td>5</td><td>234</td><td>209</td><td>41</td><td>21</td><td>11</td><td>4</td><td>1</td><td>2</td><td>2</td><td>134</td><td>102</td><td>41</td><td>13</td><td>17</td><td>3</td><td>2</td><td>3</td><td>3</td><td>100</td><td>107</td><td>234</td><td>418</td><td>652</td></tr>
<tr><td>Toronto Maple Leafs</td><td>82</td><td>30</td><td>33</td><td>6</td><td>4</td><td>6</td><td>3</td><td>240</td><td>244</td><td>41</td><td>15</td><td>17</td><td>4</td><td>0</td><td>2</td><td>3</td><td>124</td><td>118</td><td>41</td><td>15</td><td>16</td><td>2</td><td>4</td><td>4</td><td>0</td><td>116</td><td>126</td><td>240</td><td>426</td><td>666</td></tr>
<tr><td>Vancouver Canucks</td><td>82</td><td>35</td><td>40</td><td>2</td><td>1</td><td>2</td><td>2</td><td>247</td><td>243</td><td>41</td><td>20</td><td>19</td><td>1</td><td>0</td><td>0</td><td>1</td><td>127</td><td>113</td><td>41</td><td>15</td><td>21</td><td>1</td><td>1</td><td>2</td><td>1</td><td>120</td><td>130</td><td>247</td><td>438</td><td>685</td></tr>
<tr><td>Vegas Golden Knights</td><td>82</td><td>49</td><td>23</td><td>5</td><td>3</td><td>1</td><td>1</td><td>281</td><td>224</td><td>41</td><td>25</td><td>8</td><td>5</td><td>2</td><td>0</td><td>1</td><td>153</td><td>106</td><td>41</td><td>24</td><td>15</td><td>0</td><td>1</td><td>1</td><td>0</td><td>128</td><td>118</td><td>281</td><td>512</td><td>793</td></tr>
<tr><td>Washington Capitals</td><td>82</td><td>25</td><td>42</td><td>6</td><td>3</td><td>4</td><td>2</td><td>221</td><td>246</td><td>41</td><td>16</td><td>18</td><td>3</td><td>1</td><td>1</td><td>2</td><td>123</td><td>117</td><td>41</td><td>9</td><td>24</td><td>3</td><td>2</td><td>3</td><td>0</td><td>98</td><td>129</td><td>221</td><td>394</td><td>615</td></tr>
<tr><td>Winnipeg Jets</td><td>82</td><td>33</td><td>40</td><td>2</td><td>3</td><td>4</td><td>0</td><td>251</td><td>247</td><td>41</td><td>18</td><td>19</td><td>2</td><td>2</td><td>0</td><td>0</td><td>123</td><td>116</td><td>41</td><td>15</td><td>21</td><td>0</td><td>1</td><td>4</td><td>0</td><td>128</td><td>131</td><td>251</td><td>441</td><td>692</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>ANH</td><td>79</td><td>70</td><td>78</td><td>5</td><td>2390</td><td>788</td><td>810</td><td>777</td><td>28</td><td>2263</td><td>693</td><td>663</td><td>1511</td><td>305</td><td>56</td><td>18,36%</td><td>286</td><td>67</td><td>76,57%</td><td>4</td><td>51,29%</td><td>53,20%</td><td>52,01%</td><td>1926</td><td>1997</td><td>1018</td><td>584</td><td>1406</td><td>511</td><td>5</td><td>2</td></tr>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>86</td><td>93</td><td>75</td><td>18</td><td>2434</td><td>784</td><td>813</td><td>793</td><td>72</td><td>2330</td><td>691</td><td>690</td><td>1648</td><td>274</td><td>55</td><td>20,07%</td><td>309</td><td>55</td><td>82,20%</td><td>3</td><td>50,73%</td><td>50,90%</td><td>51,39%</td><td>1994</td><td>1956</td><td>1041</td><td>606</td><td>1350</td><td>514</td><td>6</td><td>1</td></tr>
<tr><td>Boston Bruins</td><td>BOS</td><td>90</td><td>75</td><td>76</td><td>9</td><td>2447</td><td>822</td><td>827</td><td>762</td><td>59</td><td>2446</td><td>703</td><td>729</td><td>1558</td><td>287</td><td>51</td><td>17,77%</td><td>328</td><td>59</td><td>82,01%</td><td>3</td><td>48,71%</td><td>51,64%</td><td>51,35%</td><td>2000</td><td>1937</td><td>1032</td><td>601</td><td>1347</td><td>505</td><td>1</td><td>1</td></tr>
<tr><td>Buffalo Sabres</td><td>BUF</td><td>72</td><td>70</td><td>71</td><td>8</td><td>2316</td><td>770</td><td>770</td><td>752</td><td>43</td><td>2381</td><td>692</td><td>688</td><td>1568</td><td>271</td><td>53</td><td>19,56%</td><td>300</td><td>59</td><td>80,33%</td><td>1</td><td>48,87%</td><td>50,74%</td><td>53,11%</td><td>1975</td><td>1954</td><td>1034</td><td>592</td><td>1357</td><td>517</td><td>2</td><td>4</td></tr>
<tr><td>Calgary Flames</td><td>CGY</td><td>77</td><td>71</td><td>62</td><td>15</td><td>2253</td><td>742</td><td>723</td><td>759</td><td>47</td><td>2369</td><td>691</td><td>584</td><td>1478</td><td>283</td><td>49</td><td>17,31%</td><td>264</td><td>49</td><td>81,44%</td><td>0</td><td>50,00%</td><td>51,38%</td><td>49,03%</td><td>1941</td><td>1996</td><td>1034</td><td>589</td><td>1402</td><td>523</td><td>6</td><td>2</td></tr>
<tr><td>Carolina Hurricanes</td><td>CAR</td><td>91</td><td>76</td><td>67</td><td>6</td><td>2282</td><td>773</td><td>761</td><td>709</td><td>63</td><td>2436</td><td>699</td><td>677</td><td>1500</td><td>288</td><td>56</td><td>19,44%</td><td>292</td><td>52</td><td>82,19%</td><td>3</td><td>48,67%</td><td>51,26%</td><td>49,15%</td><td>2020</td><td>1920</td><td>1037</td><td>608</td><td>1327</td><td>509</td><td>2</td><td>1</td></tr>
<tr><td>Chicago Blackhawks</td><td>CHI</td><td>83</td><td>82</td><td>83</td><td>9</td><td>2407</td><td>759</td><td>791</td><td>826</td><td>45</td><td>2324</td><td>654</td><td>554</td><td>1463</td><td>305</td><td>64</td><td>20,98%</td><td>251</td><td>56</td><td>77,69%</td><td>0</td><td>49,63%</td><td>51,15%</td><td>51,68%</td><td>1984</td><td>1940</td><td>1045</td><td>606</td><td>1351</td><td>515</td><td>5</td><td>2</td></tr>
<tr><td>Colorado Avalanche</td><td>COL</td><td>70</td><td>69</td><td>67</td><td>14</td><td>2374</td><td>719</td><td>823</td><td>798</td><td>63</td><td>2458</td><td>742</td><td>659</td><td>1453</td><td>289</td><td>39</td><td>13,49%</td><td>291</td><td>60</td><td>79,38%</td><td>0</td><td>50,30%</td><td>49,96%</td><td>47,63%</td><td>1975</td><td>1966</td><td>1037</td><td>602</td><td>1376</td><td>509</td><td>4</td><td>4</td></tr>
<tr><td>Columbus Blue Jackets</td><td>CLB</td><td>85</td><td>79</td><td>73</td><td>10</td><td>2453</td><td>845</td><td>808</td><td>776</td><td>42</td><td>2323</td><td>659</td><td>606</td><td>1444</td><td>300</td><td>67</td><td>22,33%</td><td>268</td><td>41</td><td>84,70%</td><td>0</td><td>49,21%</td><td>50,46%</td><td>50,47%</td><td>1955</td><td>1974</td><td>1040</td><td>598</td><td>1379</td><td>520</td><td>3</td><td>0</td></tr>
<tr><td>Dallas Stars</td><td>DAL</td><td>82</td><td>83</td><td>73</td><td>14</td><td>2384</td><td>784</td><td>790</td><td>778</td><td>59</td><td>2309</td><td>651</td><td>706</td><td>1542</td><td>299</td><td>66</td><td>22,07%</td><td>318</td><td>48</td><td>84,91%</td><td>2</td><td>50,15%</td><td>51,01%</td><td>54,91%</td><td>1948</td><td>2000</td><td>1030</td><td>590</td><td>1404</td><td>512</td><td>3</td><td>4</td></tr>
<tr><td>Detroit Red Wings</td><td>DET</td><td>86</td><td>85</td><td>58</td><td>10</td><td>2447</td><td>846</td><td>801</td><td>768</td><td>45</td><td>2353</td><td>697</td><td>658</td><td>1499</td><td>283</td><td>51</td><td>18,02%</td><td>288</td><td>56</td><td>80,56%</td><td>4</td><td>50,14%</td><td>53,35%</td><td>53,93%</td><td>1953</td><td>1988</td><td>1027</td><td>590</td><td>1393</td><td>519</td><td>5</td><td>3</td></tr>
<tr><td>Edmonton Oilers</td><td>EDM</td><td>80</td><td>82</td><td>68</td><td>12</td><td>2282</td><td>750</td><td>781</td><td>729</td><td>39</td><td>2451</td><td>700</td><td>657</td><td>1495</td><td>293</td><td>68</td><td>23,21%</td><td>282</td><td>58</td><td>79,43%</td><td>2</td><td>48,58%</td><td>48,60%</td><td>49,77%</td><td>2003</td><td>1916</td><td>1042</td><td>603</td><td>1317</td><td>517</td><td>2</td><td>2</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>86</td><td>95</td><td>75</td><td>13</td><td>2606</td><td>817</td><td>847</td><td>910</td><td>71</td><td>2354</td><td>689</td><td>679</td><td>1475</td><td>303</td><td>64</td><td>21,12%</td><td>285</td><td>43</td><td>84,91%</td><td>5</td><td>53,62%</td><td>50,76%</td><td>52,23%</td><td>1934</td><td>2000</td><td>1052</td><td>601</td><td>1397</td><td>524</td><td>6</td><td>1</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>98</td><td>79</td><td>67</td><td>6</td><td>2406</td><td>797</td><td>792</td><td>799</td><td>30</td><td>2320</td><td>691</td><td>682</td><td>1600</td><td>320</td><td>52</td><td>16,25%</td><td>302</td><td>62</td><td>79,47%</td><td>1</td><td>50,34%</td><td>50,31%</td><td>52,77%</td><td>1923</td><td>2013</td><td>1034</td><td>597</td><td>1408</td><td>519</td><td>4</td><td>1</td></tr>
<tr><td>Minnesota Wild</td><td>MIN</td><td>102</td><td>63</td><td>55</td><td>11</td><td>2336</td><td>703</td><td>804</td><td>804</td><td>43</td><td>2390</td><td>690</td><td>593</td><td>1469</td><td>282</td><td>46</td><td>16,31%</td><td>260</td><td>54</td><td>79,23%</td><td>2</td><td>48,15%</td><td>49,75%</td><td>48,38%</td><td>1976</td><td>1952</td><td>1036</td><td>598</td><td>1355</td><td>513</td><td>4</td><td>4</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>109</td><td>90</td><td>62</td><td>10</td><td>2372</td><td>836</td><td>785</td><td>729</td><td>45</td><td>2280</td><td>651</td><td>640</td><td>1499</td><td>316</td><td>67</td><td>21,20%</td><td>297</td><td>54</td><td>81,82%</td><td>1</td><td>52,46%</td><td>53,99%</td><td>51,37%</td><td>1905</td><td>2021</td><td>1039</td><td>590</td><td>1419</td><td>524</td><td>7</td><td>1</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>87</td><td>94</td><td>58</td><td>13</td><td>2407</td><td>785</td><td>814</td><td>770</td><td>61</td><td>2324</td><td>694</td><td>627</td><td>1536</td><td>277</td><td>69</td><td>24,91%</td><td>269</td><td>48</td><td>82,16%</td><td>5</td><td>47,98%</td><td>49,12%</td><td>51,03%</td><td>1929</td><td>2014</td><td>1024</td><td>584</td><td>1418</td><td>513</td><td>5</td><td>1</td></tr>
<tr><td>New Jersey Devils</td><td>NJD</td><td>71</td><td>75</td><td>90</td><td>10</td><td>2324</td><td>787</td><td>767</td><td>749</td><td>46</td><td>2338</td><td>683</td><td>566</td><td>1530</td><td>263</td><td>49</td><td>18,63%</td><td>260</td><td>50</td><td>80,77%</td><td>3</td><td>51,26%</td><td>50,91%</td><td>53,32%</td><td>1981</td><td>1959</td><td>1031</td><td>588</td><td>1369</td><td>512</td><td>4</td><td>3</td></tr>
<tr><td>New York Islanders</td><td>NYI</td><td>67</td><td>69</td><td>58</td><td>11</td><td>2219</td><td>684</td><td>733</td><td>765</td><td>74</td><td>2271</td><td>673</td><td>664</td><td>1536</td><td>268</td><td>52</td><td>19,40%</td><td>299</td><td>57</td><td>80,94%</td><td>3</td><td>50,18%</td><td>50,07%</td><td>49,32%</td><td>1977</td><td>1954</td><td>1051</td><td>605</td><td>1351</td><td>523</td><td>4</td><td>3</td></tr>
<tr><td>New York Rangers</td><td>NYR</td><td>82</td><td>72</td><td>60</td><td>20</td><td>2282</td><td>769</td><td>746</td><td>740</td><td>61</td><td>2338</td><td>715</td><td>641</td><td>1444</td><td>281</td><td>56</td><td>19,93%</td><td>292</td><td>63</td><td>78,42%</td><td>4</td><td>49,96%</td><td>49,48%</td><td>48,78%</td><td>1943</td><td>1991</td><td>1044</td><td>596</td><td>1395</td><td>520</td><td>2</td><td>4</td></tr>
<tr><td>Ottawa Senators</td><td>OTT</td><td>90</td><td>64</td><td>74</td><td>13</td><td>2292</td><td>757</td><td>752</td><td>748</td><td>55</td><td>2408</td><td>688</td><td>680</td><td>1579</td><td>293</td><td>55</td><td>18,77%</td><td>313</td><td>56</td><td>82,11%</td><td>2</td><td>48,41%</td><td>50,15%</td><td>48,91%</td><td>1974</td><td>1961</td><td>1033</td><td>597</td><td>1365</td><td>509</td><td>7</td><td>2</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>84</td><td>77</td><td>73</td><td>9</td><td>2512</td><td>838</td><td>785</td><td>857</td><td>51</td><td>2288</td><td>711</td><td>606</td><td>1557</td><td>302</td><td>55</td><td>18,21%</td><td>270</td><td>63</td><td>76,67%</td><td>1</td><td>49,96%</td><td>51,43%</td><td>47,91%</td><td>1939</td><td>1998</td><td>1028</td><td>583</td><td>1406</td><td>519</td><td>7</td><td>3</td></tr>
<tr><td>Pittsburgh Penguins</td><td>PIT</td><td>80</td><td>67</td><td>60</td><td>7</td><td>2477</td><td>825</td><td>808</td><td>812</td><td>60</td><td>2401</td><td>674</td><td>558</td><td>1502</td><td>315</td><td>58</td><td>18,41%</td><td>236</td><td>48</td><td>79,66%</td><td>1</td><td>52,74%</td><td>52,80%</td><td>52,20%</td><td>1954</td><td>1992</td><td>1052</td><td>605</td><td>1391</td><td>527</td><td>5</td><td>1</td></tr>
<tr><td>Quebec Nordiques</td><td>QUE</td><td>70</td><td>73</td><td>66</td><td>11</td><td>2262</td><td>706</td><td>724</td><td>784</td><td>82</td><td>2356</td><td>702</td><td>653</td><td>1577</td><td>308</td><td>57</td><td>18,51%</td><td>289</td><td>67</td><td>76,82%</td><td>2</td><td>49,73%</td><td>51,76%</td><td>53,42%</td><td>1985</td><td>1963</td><td>1033</td><td>602</td><td>1364</td><td>511</td><td>1</td><td>3</td></tr>
<tr><td>San Jose Sharks</td><td>SJS</td><td>93</td><td>79</td><td>60</td><td>7</td><td>2328</td><td>756</td><td>749</td><td>783</td><td>61</td><td>2480</td><td>726</td><td>680</td><td>1561</td><td>281</td><td>62</td><td>22,06%</td><td>311</td><td>59</td><td>81,03%</td><td>0</td><td>48,42%</td><td>47,41%</td><td>48,08%</td><td>1989</td><td>1938</td><td>1053</td><td>605</td><td>1332</td><td>518</td><td>2</td><td>2</td></tr>
<tr><td>Seattle Kraken</td><td>SEA</td><td>77</td><td>84</td><td>58</td><td>4</td><td>2297</td><td>721</td><td>793</td><td>771</td><td>15</td><td>2559</td><td>711</td><td>643</td><td>1420</td><td>248</td><td>43</td><td>17,34%</td><td>283</td><td>56</td><td>80,21%</td><td>3</td><td>50,28%</td><td>49,46%</td><td>47,66%</td><td>2023</td><td>1895</td><td>1027</td><td>594</td><td>1309</td><td>505</td><td>3</td><td>2</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>82</td><td>74</td><td>79</td><td>9</td><td>2236</td><td>784</td><td>727</td><td>694</td><td>54</td><td>2351</td><td>654</td><td>716</td><td>1540</td><td>283</td><td>53</td><td>18,73%</td><td>331</td><td>57</td><td>82,78%</td><td>4</td><td>51,04%</td><td>52,41%</td><td>51,14%</td><td>1992</td><td>1938</td><td>1044</td><td>608</td><td>1331</td><td>522</td><td>3</td><td>0</td></tr>
<tr><td>Tampa Bay Lightning</td><td>TBL</td><td>89</td><td>71</td><td>62</td><td>15</td><td>2332</td><td>745</td><td>772</td><td>772</td><td>82</td><td>2303</td><td>735</td><td>722</td><td>1629</td><td>287</td><td>58</td><td>20,21%</td><td>316</td><td>54</td><td>82,91%</td><td>1</td><td>50,29%</td><td>48,94%</td><td>49,75%</td><td>1977</td><td>1991</td><td>1028</td><td>600</td><td>1394</td><td>512</td><td>5</td><td>0</td></tr>
<tr><td>Toronto Maple Leafs</td><td>TOR</td><td>95</td><td>74</td><td>59</td><td>15</td><td>2493</td><td>866</td><td>770</td><td>802</td><td>90</td><td>2335</td><td>662</td><td>587</td><td>1468</td><td>301</td><td>60</td><td>19,93%</td><td>258</td><td>55</td><td>78,68%</td><td>6</td><td>52,72%</td><td>53,92%</td><td>50,79%</td><td>1950</td><td>1999</td><td>1043</td><td>594</td><td>1398</td><td>528</td><td>2</td><td>0</td></tr>
<tr><td>Vancouver Canucks</td><td>VAN</td><td>73</td><td>94</td><td>76</td><td>9</td><td>2327</td><td>749</td><td>797</td><td>768</td><td>30</td><td>2364</td><td>671</td><td>674</td><td>1521</td><td>263</td><td>50</td><td>19,01%</td><td>301</td><td>65</td><td>78,41%</td><td>6</td><td>51,07%</td><td>50,44%</td><td>51,99%</td><td>1923</td><td>1981</td><td>1040</td><td>589</td><td>1383</td><td>519</td><td>4</td><td>2</td></tr>
<tr><td>Vegas Golden Knights</td><td>VEG</td><td>100</td><td>94</td><td>81</td><td>7</td><td>2414</td><td>780</td><td>777</td><td>839</td><td>26</td><td>2423</td><td>697</td><td>644</td><td>1529</td><td>279</td><td>64</td><td>22,94%</td><td>285</td><td>60</td><td>78,95%</td><td>4</td><td>49,74%</td><td>50,45%</td><td>50,20%</td><td>1980</td><td>1947</td><td>1021</td><td>590</td><td>1362</td><td>511</td><td>5</td><td>0</td></tr>
<tr><td>Washington Capitals</td><td>WSH</td><td>57</td><td>79</td><td>75</td><td>12</td><td>2265</td><td>715</td><td>771</td><td>759</td><td>40</td><td>2394</td><td>694</td><td>592</td><td>1530</td><td>259</td><td>50</td><td>19,31%</td><td>266</td><td>58</td><td>78,20%</td><td>2</td><td>47,67%</td><td>46,42%</td><td>46,07%</td><td>2034</td><td>1879</td><td>1047</td><td>599</td><td>1290</td><td>517</td><td>3</td><td>3</td></tr>
<tr><td>Winnipeg Jets</td><td>WPG</td><td>88</td><td>86</td><td>71</td><td>9</td><td>2436</td><td>820</td><td>788</td><td>811</td><td>38</td><td>2372</td><td>660</td><td>638</td><td>1518</td><td>267</td><td>53</td><td>19,85%</td><td>273</td><td>59</td><td>78,39%</td><td>2</td><td>51,38%</td><td>52,97%</td><td>52,66%</td><td>1943</td><td>1974</td><td>1029</td><td>590</td><td>1375</td><td>515</td><td>4</td><td>2</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,90</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Vegas Golden Knights</td><td>3,43</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>3,26</td></tr>
<tr><td>3</td><td>Arizona Coyotes</td><td>3,24</td></tr>
<tr><td>4</td><td>Florida Panthers</td><td>3,21</td></tr>
<tr><td>5</td><td>Chicago Blackhawks</td><td>3,12</td></tr>
<tr><td>6</td><td>Winnipeg Jets</td><td>3,06</td></tr>
<tr><td>7</td><td>Los Angeles Kings</td><td>3,04</td></tr>
<tr><td>8</td><td>Boston Bruins</td><td>3,02</td></tr>
<tr><td>9</td><td>Dallas Stars</td><td>3,01</td></tr>
<tr><td>10</td><td>Vancouver Canucks</td><td>3,01</td></tr>
<tr><td>11</td><td>Nashville Predators</td><td>3,00</td></tr>
<tr><td>12</td><td>Columbus Blue Jackets</td><td>2,98</td></tr>
<tr><td>13</td><td>New Jersey Devils</td><td>2,95</td></tr>
<tr><td>14</td><td>St. Louis Blues</td><td>2,93</td></tr>
<tr><td>15</td><td>Edmonton Oilers</td><td>2,93</td></tr>
<tr><td>16</td><td>Philadelphia Flyers</td><td>2,93</td></tr>
<tr><td>17</td><td>Toronto Maple Leafs</td><td>2,93</td></tr>
<tr><td>18</td><td>Carolina Hurricanes</td><td>2,90</td></tr>
<tr><td>19</td><td>Ottawa Senators</td><td>2,90</td></tr>
<tr><td>20</td><td>Detroit Red Wings</td><td>2,89</td></tr>
<tr><td>21</td><td>San Jose Sharks</td><td>2,89</td></tr>
<tr><td>22</td><td>Tampa Bay Lightning</td><td>2,85</td></tr>
<tr><td>23</td><td>Anaheim Ducks</td><td>2,80</td></tr>
<tr><td>24</td><td>Minnesota Wild</td><td>2,78</td></tr>
<tr><td>25</td><td>New York Rangers</td><td>2,78</td></tr>
<tr><td>26</td><td>Seattle Kraken</td><td>2,71</td></tr>
<tr><td>27</td><td>Washington Capitals</td><td>2,70</td></tr>
<tr><td>28</td><td>Calgary Flames</td><td>2,68</td></tr>
<tr><td>29</td><td>Buffalo Sabres</td><td>2,67</td></tr>
<tr><td>30</td><td>Colorado Avalanche</td><td>2,62</td></tr>
<tr><td>31</td><td>Quebec Nordiques</td><td>2,61</td></tr>
<tr><td>32</td><td>Pittsburgh Penguins</td><td>2,59</td></tr>
<tr><td>33</td><td>New York Islanders</td><td>2,44</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,90</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Tampa Bay Lightning</td><td>2,55</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>2,61</td></tr>
<tr><td>3</td><td>Florida Panthers</td><td>2,66</td></tr>
<tr><td>4</td><td>New Jersey Devils</td><td>2,71</td></tr>
<tr><td>5</td><td>Vegas Golden Knights</td><td>2,73</td></tr>
<tr><td>6</td><td>Arizona Coyotes</td><td>2,74</td></tr>
<tr><td>7</td><td>St. Louis Blues</td><td>2,77</td></tr>
<tr><td>8</td><td>Ottawa Senators</td><td>2,78</td></tr>
<tr><td>9</td><td>Dallas Stars</td><td>2,80</td></tr>
<tr><td>10</td><td>Detroit Red Wings</td><td>2,82</td></tr>
<tr><td>11</td><td>Los Angeles Kings</td><td>2,83</td></tr>
<tr><td>12</td><td>Buffalo Sabres</td><td>2,83</td></tr>
<tr><td>13</td><td>New York Rangers</td><td>2,84</td></tr>
<tr><td>14</td><td>Philadelphia Flyers</td><td>2,89</td></tr>
<tr><td>15</td><td>Columbus Blue Jackets</td><td>2,89</td></tr>
<tr><td>16</td><td>Anaheim Ducks</td><td>2,89</td></tr>
<tr><td>17</td><td>Colorado Avalanche</td><td>2,90</td></tr>
<tr><td>18</td><td>Carolina Hurricanes</td><td>2,95</td></tr>
<tr><td>19</td><td>Chicago Blackhawks</td><td>2,95</td></tr>
<tr><td>20</td><td>Vancouver Canucks</td><td>2,96</td></tr>
<tr><td>21</td><td>New York Islanders</td><td>2,96</td></tr>
<tr><td>22</td><td>Toronto Maple Leafs</td><td>2,98</td></tr>
<tr><td>23</td><td>Washington Capitals</td><td>3,00</td></tr>
<tr><td>24</td><td>Winnipeg Jets</td><td>3,01</td></tr>
<tr><td>25</td><td>Pittsburgh Penguins</td><td>3,01</td></tr>
<tr><td>26</td><td>Nashville Predators</td><td>3,02</td></tr>
<tr><td>27</td><td>Minnesota Wild</td><td>3,02</td></tr>
<tr><td>28</td><td>Seattle Kraken</td><td>3,07</td></tr>
<tr><td>29</td><td>San Jose Sharks</td><td>3,07</td></tr>
<tr><td>30</td><td>Quebec Nordiques</td><td>3,07</td></tr>
<tr><td>31</td><td>Calgary Flames</td><td>3,10</td></tr>
<tr><td>32</td><td>Boston Bruins</td><td>3,10</td></tr>
<tr><td>33</td><td>Edmonton Oilers</td><td>3,32</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Vegas Golden Knights</td><td>125,45%</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>124,77%</td></tr>
<tr><td>3</td><td>Florida Panthers</td><td>120,64%</td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>118,22%</td></tr>
<tr><td>5</td><td>Tampa Bay Lightning</td><td>111,96%</td></tr>
<tr><td>6</td><td>New Jersey Devils</td><td>109,01%</td></tr>
<tr><td>7</td><td>Dallas Stars</td><td>107,39%</td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>107,33%</td></tr>
<tr><td>9</td><td>Chicago Blackhawks</td><td>105,79%</td></tr>
<tr><td>10</td><td>St. Louis Blues</td><td>105,73%</td></tr>
<tr><td>11</td><td>Ottawa Senators</td><td>104,39%</td></tr>
<tr><td>12</td><td>Columbus Blue Jackets</td><td>102,95%</td></tr>
<tr><td>13</td><td>Detroit Red Wings</td><td>102,60%</td></tr>
<tr><td>14</td><td>Vancouver Canucks</td><td>101,65%</td></tr>
<tr><td>15</td><td>Winnipeg Jets</td><td>101,62%</td></tr>
<tr><td>16</td><td>Philadelphia Flyers</td><td>101,27%</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>99,19%</td></tr>
<tr><td>18</td><td>Toronto Maple Leafs</td><td>98,36%</td></tr>
<tr><td>19</td><td>Carolina Hurricanes</td><td>98,35%</td></tr>
<tr><td>20</td><td>New York Rangers</td><td>97,85%</td></tr>
<tr><td>21</td><td>Boston Bruins</td><td>97,64%</td></tr>
<tr><td>22</td><td>Anaheim Ducks</td><td>97,05%</td></tr>
<tr><td>23</td><td>Buffalo Sabres</td><td>94,40%</td></tr>
<tr><td>24</td><td>San Jose Sharks</td><td>94,05%</td></tr>
<tr><td>25</td><td>Minnesota Wild</td><td>91,94%</td></tr>
<tr><td>26</td><td>Colorado Avalanche</td><td>90,34%</td></tr>
<tr><td>27</td><td>Washington Capitals</td><td>89,84%</td></tr>
<tr><td>28</td><td>Edmonton Oilers</td><td>88,24%</td></tr>
<tr><td>29</td><td>Seattle Kraken</td><td>88,10%</td></tr>
<tr><td>30</td><td>Calgary Flames</td><td>86,61%</td></tr>
<tr><td>31</td><td>Pittsburgh Penguins</td><td>85,83%</td></tr>
<tr><td>32</td><td>Quebec Nordiques</td><td>84,92%</td></tr>
<tr><td>33</td><td>New York Islanders</td><td>82,30%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,51%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>24,91%</td></tr>
<tr><td>2</td><td>Edmonton Oilers</td><td>23,21%</td></tr>
<tr><td>3</td><td>Vegas Golden Knights</td><td>22,94%</td></tr>
<tr><td>4</td><td>Columbus Blue Jackets</td><td>22,33%</td></tr>
<tr><td>5</td><td>Dallas Stars</td><td>22,07%</td></tr>
<tr><td>6</td><td>San Jose Sharks</td><td>22,06%</td></tr>
<tr><td>7</td><td>Montreal Canadiens</td><td>21,20%</td></tr>
<tr><td>8</td><td>Florida Panthers</td><td>21,12%</td></tr>
<tr><td>9</td><td>Chicago Blackhawks</td><td>20,98%</td></tr>
<tr><td>10</td><td>Tampa Bay Lightning</td><td>20,21%</td></tr>
<tr><td>11</td><td>Arizona Coyotes</td><td>20,07%</td></tr>
<tr><td>12</td><td>Toronto Maple Leafs</td><td>19,93%</td></tr>
<tr><td>13</td><td>New York Rangers</td><td>19,93%</td></tr>
<tr><td>14</td><td>Winnipeg Jets</td><td>19,85%</td></tr>
<tr><td>15</td><td>Buffalo Sabres</td><td>19,56%</td></tr>
<tr><td>16</td><td>Carolina Hurricanes</td><td>19,44%</td></tr>
<tr><td>17</td><td>New York Islanders</td><td>19,40%</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>19,31%</td></tr>
<tr><td>19</td><td>Vancouver Canucks</td><td>19,01%</td></tr>
<tr><td>20</td><td>Ottawa Senators</td><td>18,77%</td></tr>
<tr><td>21</td><td>St. Louis Blues</td><td>18,73%</td></tr>
<tr><td>22</td><td>New Jersey Devils</td><td>18,63%</td></tr>
<tr><td>23</td><td>Quebec Nordiques</td><td>18,51%</td></tr>
<tr><td>24</td><td>Pittsburgh Penguins</td><td>18,41%</td></tr>
<tr><td>25</td><td>Anaheim Ducks</td><td>18,36%</td></tr>
<tr><td>26</td><td>Philadelphia Flyers</td><td>18,21%</td></tr>
<tr><td>27</td><td>Detroit Red Wings</td><td>18,02%</td></tr>
<tr><td>28</td><td>Boston Bruins</td><td>17,77%</td></tr>
<tr><td>29</td><td>Seattle Kraken</td><td>17,34%</td></tr>
<tr><td>30</td><td>Calgary Flames</td><td>17,31%</td></tr>
<tr><td>31</td><td>Minnesota Wild</td><td>16,31%</td></tr>
<tr><td>32</td><td>Los Angeles Kings</td><td>16,25%</td></tr>
<tr><td>33</td><td>Colorado Avalanche</td><td>13,49%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,49%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Florida Panthers</td><td>84,91%</td></tr>
<tr><td>2</td><td>Dallas Stars</td><td>84,91%</td></tr>
<tr><td>3</td><td>Columbus Blue Jackets</td><td>84,70%</td></tr>
<tr><td>4</td><td>Tampa Bay Lightning</td><td>82,91%</td></tr>
<tr><td>5</td><td>St. Louis Blues</td><td>82,78%</td></tr>
<tr><td>6</td><td>Arizona Coyotes</td><td>82,20%</td></tr>
<tr><td>7</td><td>Carolina Hurricanes</td><td>82,19%</td></tr>
<tr><td>8</td><td>Nashville Predators</td><td>82,16%</td></tr>
<tr><td>9</td><td>Ottawa Senators</td><td>82,11%</td></tr>
<tr><td>10</td><td>Boston Bruins</td><td>82,01%</td></tr>
<tr><td>11</td><td>Montreal Canadiens</td><td>81,82%</td></tr>
<tr><td>12</td><td>Calgary Flames</td><td>81,44%</td></tr>
<tr><td>13</td><td>San Jose Sharks</td><td>81,03%</td></tr>
<tr><td>14</td><td>New York Islanders</td><td>80,94%</td></tr>
<tr><td>15</td><td>New Jersey Devils</td><td>80,77%</td></tr>
<tr><td>16</td><td>Detroit Red Wings</td><td>80,56%</td></tr>
<tr><td>17</td><td>Buffalo Sabres</td><td>80,33%</td></tr>
<tr><td>18</td><td>Seattle Kraken</td><td>80,21%</td></tr>
<tr><td>19</td><td>Pittsburgh Penguins</td><td>79,66%</td></tr>
<tr><td>20</td><td>Los Angeles Kings</td><td>79,47%</td></tr>
<tr><td>21</td><td>Edmonton Oilers</td><td>79,43%</td></tr>
<tr><td>22</td><td>Colorado Avalanche</td><td>79,38%</td></tr>
<tr><td>23</td><td>Minnesota Wild</td><td>79,23%</td></tr>
<tr><td>24</td><td>Vegas Golden Knights</td><td>78,95%</td></tr>
<tr><td>25</td><td>Toronto Maple Leafs</td><td>78,68%</td></tr>
<tr><td>26</td><td>New York Rangers</td><td>78,42%</td></tr>
<tr><td>27</td><td>Vancouver Canucks</td><td>78,41%</td></tr>
<tr><td>28</td><td>Winnipeg Jets</td><td>78,39%</td></tr>
<tr><td>29</td><td>Washington Capitals</td><td>78,20%</td></tr>
<tr><td>30</td><td>Chicago Blackhawks</td><td>77,69%</td></tr>
<tr><td>31</td><td>Quebec Nordiques</td><td>76,82%</td></tr>
<tr><td>32</td><td>Philadelphia Flyers</td><td>76,67%</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>76,57%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>107,07%</td></tr>
<tr><td>2</td><td>Columbus Blue Jackets</td><td>107,03%</td></tr>
<tr><td>3</td><td>Dallas Stars</td><td>106,98%</td></tr>
<tr><td>4</td><td>Florida Panthers</td><td>106,03%</td></tr>
<tr><td>5</td><td>Tampa Bay Lightning</td><td>103,12%</td></tr>
<tr><td>6</td><td>San Jose Sharks</td><td>103,09%</td></tr>
<tr><td>7</td><td>Montreal Canadiens</td><td>103,02%</td></tr>
<tr><td>8</td><td>Edmonton Oilers</td><td>102,64%</td></tr>
<tr><td>9</td><td>Arizona Coyotes</td><td>102,27%</td></tr>
<tr><td>10</td><td>Vegas Golden Knights</td><td>101,89%</td></tr>
<tr><td>11</td><td>Carolina Hurricanes</td><td>101,64%</td></tr>
<tr><td>12</td><td>St. Louis Blues</td><td>101,51%</td></tr>
<tr><td>13</td><td>Ottawa Senators</td><td>100,88%</td></tr>
<tr><td>14</td><td>New York Islanders</td><td>100,34%</td></tr>
<tr><td>15</td><td>Buffalo Sabres</td><td>99,89%</td></tr>
<tr><td>16</td><td>Boston Bruins</td><td>99,78%</td></tr>
<tr><td>17</td><td>New Jersey Devils</td><td>99,40%</td></tr>
<tr><td>18</td><td>Calgary Flames</td><td>98,75%</td></tr>
<tr><td>19</td><td>Chicago Blackhawks</td><td>98,67%</td></tr>
<tr><td>20</td><td>Toronto Maple Leafs</td><td>98,62%</td></tr>
<tr><td>21</td><td>Detroit Red Wings</td><td>98,58%</td></tr>
<tr><td>22</td><td>New York Rangers</td><td>98,35%</td></tr>
<tr><td>23</td><td>Winnipeg Jets</td><td>98,24%</td></tr>
<tr><td>24</td><td>Pittsburgh Penguins</td><td>98,07%</td></tr>
<tr><td>25</td><td>Seattle Kraken</td><td>97,55%</td></tr>
<tr><td>26</td><td>Washington Capitals</td><td>97,50%</td></tr>
<tr><td>27</td><td>Vancouver Canucks</td><td>97,42%</td></tr>
<tr><td>28</td><td>Los Angeles Kings</td><td>95,72%</td></tr>
<tr><td>29</td><td>Minnesota Wild</td><td>95,54%</td></tr>
<tr><td>30</td><td>Quebec Nordiques</td><td>95,32%</td></tr>
<tr><td>31</td><td>Anaheim Ducks</td><td>94,93%</td></tr>
<tr><td>32</td><td>Philadelphia Flyers</td><td>94,88%</td></tr>
<tr><td>33</td><td>Colorado Avalanche</td><td>92,88%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28,86</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Florida Panthers</td><td>31,78</td></tr>
<tr><td>2</td><td>Philadelphia Flyers</td><td>30,63</td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>30,40</td></tr>
<tr><td>4</td><td>Pittsburgh Penguins</td><td>30,21</td></tr>
<tr><td>5</td><td>Columbus Blue Jackets</td><td>29,91</td></tr>
<tr><td>6</td><td>Boston Bruins</td><td>29,84</td></tr>
<tr><td>7</td><td>Detroit Red Wings</td><td>29,84</td></tr>
<tr><td>8</td><td>Winnipeg Jets</td><td>29,71</td></tr>
<tr><td>9</td><td>Arizona Coyotes</td><td>29,68</td></tr>
<tr><td>10</td><td>Vegas Golden Knights</td><td>29,44</td></tr>
<tr><td>11</td><td>Chicago Blackhawks</td><td>29,35</td></tr>
<tr><td>12</td><td>Nashville Predators</td><td>29,35</td></tr>
<tr><td>13</td><td>Los Angeles Kings</td><td>29,34</td></tr>
<tr><td>14</td><td>Anaheim Ducks</td><td>29,15</td></tr>
<tr><td>15</td><td>Dallas Stars</td><td>29,07</td></tr>
<tr><td>16</td><td>Colorado Avalanche</td><td>28,95</td></tr>
<tr><td>17</td><td>Montreal Canadiens</td><td>28,93</td></tr>
<tr><td>18</td><td>Minnesota Wild</td><td>28,49</td></tr>
<tr><td>19</td><td>Tampa Bay Lightning</td><td>28,44</td></tr>
<tr><td>20</td><td>San Jose Sharks</td><td>28,39</td></tr>
<tr><td>21</td><td>Vancouver Canucks</td><td>28,38</td></tr>
<tr><td>22</td><td>New Jersey Devils</td><td>28,34</td></tr>
<tr><td>23</td><td>Buffalo Sabres</td><td>28,24</td></tr>
<tr><td>24</td><td>Seattle Kraken</td><td>28,01</td></tr>
<tr><td>25</td><td>Ottawa Senators</td><td>27,95</td></tr>
<tr><td>26</td><td>Carolina Hurricanes</td><td>27,83</td></tr>
<tr><td>27</td><td>Edmonton Oilers</td><td>27,83</td></tr>
<tr><td>28</td><td>New York Rangers</td><td>27,83</td></tr>
<tr><td>29</td><td>Washington Capitals</td><td>27,62</td></tr>
<tr><td>30</td><td>Quebec Nordiques</td><td>27,59</td></tr>
<tr><td>31</td><td>Calgary Flames</td><td>27,48</td></tr>
<tr><td>32</td><td>St. Louis Blues</td><td>27,27</td></tr>
<tr><td>33</td><td>New York Islanders</td><td>27,06</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28,86</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Anaheim Ducks</td><td>27,60</td></tr>
<tr><td>2</td><td>New York Islanders</td><td>27,70</td></tr>
<tr><td>3</td><td>Montreal Canadiens</td><td>27,80</td></tr>
<tr><td>4</td><td>Philadelphia Flyers</td><td>27,90</td></tr>
<tr><td>5</td><td>Tampa Bay Lightning</td><td>28,09</td></tr>
<tr><td>6</td><td>Dallas Stars</td><td>28,16</td></tr>
<tr><td>7</td><td>Los Angeles Kings</td><td>28,29</td></tr>
<tr><td>8</td><td>Columbus Blue Jackets</td><td>28,33</td></tr>
<tr><td>9</td><td>Nashville Predators</td><td>28,34</td></tr>
<tr><td>10</td><td>Chicago Blackhawks</td><td>28,34</td></tr>
<tr><td>11</td><td>Arizona Coyotes</td><td>28,41</td></tr>
<tr><td>12</td><td>Toronto Maple Leafs</td><td>28,48</td></tr>
<tr><td>13</td><td>New York Rangers</td><td>28,51</td></tr>
<tr><td>14</td><td>New Jersey Devils</td><td>28,51</td></tr>
<tr><td>15</td><td>St. Louis Blues</td><td>28,67</td></tr>
<tr><td>16</td><td>Detroit Red Wings</td><td>28,70</td></tr>
<tr><td>17</td><td>Florida Panthers</td><td>28,71</td></tr>
<tr><td>18</td><td>Quebec Nordiques</td><td>28,73</td></tr>
<tr><td>19</td><td>Vancouver Canucks</td><td>28,83</td></tr>
<tr><td>20</td><td>Calgary Flames</td><td>28,89</td></tr>
<tr><td>21</td><td>Winnipeg Jets</td><td>28,93</td></tr>
<tr><td>22</td><td>Buffalo Sabres</td><td>29,04</td></tr>
<tr><td>23</td><td>Minnesota Wild</td><td>29,15</td></tr>
<tr><td>24</td><td>Washington Capitals</td><td>29,20</td></tr>
<tr><td>25</td><td>Pittsburgh Penguins</td><td>29,28</td></tr>
<tr><td>26</td><td>Ottawa Senators</td><td>29,37</td></tr>
<tr><td>27</td><td>Vegas Golden Knights</td><td>29,55</td></tr>
<tr><td>28</td><td>Carolina Hurricanes</td><td>29,71</td></tr>
<tr><td>29</td><td>Boston Bruins</td><td>29,83</td></tr>
<tr><td>30</td><td>Edmonton Oilers</td><td>29,89</td></tr>
<tr><td>31</td><td>Colorado Avalanche</td><td>29,98</td></tr>
<tr><td>32</td><td>San Jose Sharks</td><td>30,24</td></tr>
<tr><td>33</td><td>Seattle Kraken</td><td>31,21</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Florida Panthers</td><td>110,71%</td></tr>
<tr><td>2</td><td>Philadelphia Flyers</td><td>109,79%</td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>106,77%</td></tr>
<tr><td>4</td><td>Anaheim Ducks</td><td>105,61%</td></tr>
<tr><td>5</td><td>Columbus Blue Jackets</td><td>105,60%</td></tr>
<tr><td>6</td><td>Arizona Coyotes</td><td>104,46%</td></tr>
<tr><td>7</td><td>Montreal Canadiens</td><td>104,04%</td></tr>
<tr><td>8</td><td>Detroit Red Wings</td><td>103,99%</td></tr>
<tr><td>9</td><td>Los Angeles Kings</td><td>103,71%</td></tr>
<tr><td>10</td><td>Chicago Blackhawks</td><td>103,57%</td></tr>
<tr><td>11</td><td>Nashville Predators</td><td>103,57%</td></tr>
<tr><td>12</td><td>Dallas Stars</td><td>103,25%</td></tr>
<tr><td>13</td><td>Pittsburgh Penguins</td><td>103,17%</td></tr>
<tr><td>14</td><td>Winnipeg Jets</td><td>102,70%</td></tr>
<tr><td>15</td><td>Tampa Bay Lightning</td><td>101,26%</td></tr>
<tr><td>16</td><td>Boston Bruins</td><td>100,04%</td></tr>
<tr><td>17</td><td>Vegas Golden Knights</td><td>99,63%</td></tr>
<tr><td>18</td><td>New Jersey Devils</td><td>99,40%</td></tr>
<tr><td>19</td><td>Vancouver Canucks</td><td>98,43%</td></tr>
<tr><td>20</td><td>Minnesota Wild</td><td>97,74%</td></tr>
<tr><td>21</td><td>New York Islanders</td><td>97,71%</td></tr>
<tr><td>22</td><td>New York Rangers</td><td>97,60%</td></tr>
<tr><td>23</td><td>Buffalo Sabres</td><td>97,27%</td></tr>
<tr><td>24</td><td>Colorado Avalanche</td><td>96,58%</td></tr>
<tr><td>25</td><td>Quebec Nordiques</td><td>96,01%</td></tr>
<tr><td>26</td><td>Ottawa Senators</td><td>95,18%</td></tr>
<tr><td>27</td><td>St. Louis Blues</td><td>95,11%</td></tr>
<tr><td>28</td><td>Calgary Flames</td><td>95,10%</td></tr>
<tr><td>29</td><td>Washington Capitals</td><td>94,61%</td></tr>
<tr><td>30</td><td>San Jose Sharks</td><td>93,87%</td></tr>
<tr><td>31</td><td>Carolina Hurricanes</td><td>93,68%</td></tr>
<tr><td>32</td><td>Edmonton Oilers</td><td>93,10%</td></tr>
<tr><td>33</td><td>Seattle Kraken</td><td>89,76%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7,89</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Chicago Blackhawks</td><td>6,76</td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>6,80</td></tr>
<tr><td>3</td><td>New Jersey Devils</td><td>6,90</td></tr>
<tr><td>4</td><td>Calgary Flames</td><td>7,12</td></tr>
<tr><td>5</td><td>Toronto Maple Leafs</td><td>7,16</td></tr>
<tr><td>6</td><td>Washington Capitals</td><td>7,22</td></tr>
<tr><td>7</td><td>Minnesota Wild</td><td>7,23</td></tr>
<tr><td>8</td><td>Philadelphia Flyers</td><td>7,39</td></tr>
<tr><td>9</td><td>Columbus Blue Jackets</td><td>7,39</td></tr>
<tr><td>10</td><td>Nashville Predators</td><td>7,65</td></tr>
<tr><td>11</td><td>Winnipeg Jets</td><td>7,78</td></tr>
<tr><td>12</td><td>Montreal Canadiens</td><td>7,80</td></tr>
<tr><td>13</td><td>New York Rangers</td><td>7,82</td></tr>
<tr><td>14</td><td>Seattle Kraken</td><td>7,84</td></tr>
<tr><td>15</td><td>Vegas Golden Knights</td><td>7,85</td></tr>
<tr><td>16</td><td>Quebec Nordiques</td><td>7,96</td></tr>
<tr><td>17</td><td>Edmonton Oilers</td><td>8,01</td></tr>
<tr><td>18</td><td>Detroit Red Wings</td><td>8,02</td></tr>
<tr><td>19</td><td>Colorado Avalanche</td><td>8,04</td></tr>
<tr><td>20</td><td>Anaheim Ducks</td><td>8,09</td></tr>
<tr><td>21</td><td>New York Islanders</td><td>8,10</td></tr>
<tr><td>22</td><td>Vancouver Canucks</td><td>8,22</td></tr>
<tr><td>23</td><td>Carolina Hurricanes</td><td>8,26</td></tr>
<tr><td>24</td><td>Florida Panthers</td><td>8,28</td></tr>
<tr><td>25</td><td>San Jose Sharks</td><td>8,29</td></tr>
<tr><td>26</td><td>Ottawa Senators</td><td>8,29</td></tr>
<tr><td>27</td><td>Los Angeles Kings</td><td>8,32</td></tr>
<tr><td>28</td><td>Buffalo Sabres</td><td>8,39</td></tr>
<tr><td>29</td><td>Arizona Coyotes</td><td>8,41</td></tr>
<tr><td>30</td><td>Dallas Stars</td><td>8,61</td></tr>
<tr><td>31</td><td>St. Louis Blues</td><td>8,73</td></tr>
<tr><td>32</td><td>Tampa Bay Lightning</td><td>8,80</td></tr>
<tr><td>33</td><td>Boston Bruins</td><td>8,89</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18,54</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Arizona Coyotes</td><td>20,10</td></tr>
<tr><td>2</td><td>Tampa Bay Lightning</td><td>19,87</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>19,51</td></tr>
<tr><td>4</td><td>Ottawa Senators</td><td>19,26</td></tr>
<tr><td>5</td><td>Quebec Nordiques</td><td>19,23</td></tr>
<tr><td>6</td><td>Buffalo Sabres</td><td>19,12</td></tr>
<tr><td>7</td><td>San Jose Sharks</td><td>19,04</td></tr>
<tr><td>8</td><td>Boston Bruins</td><td>19,00</td></tr>
<tr><td>9</td><td>Philadelphia Flyers</td><td>18,99</td></tr>
<tr><td>10</td><td>Dallas Stars</td><td>18,80</td></tr>
<tr><td>11</td><td>St. Louis Blues</td><td>18,78</td></tr>
<tr><td>12</td><td>Nashville Predators</td><td>18,73</td></tr>
<tr><td>13</td><td>New York Islanders</td><td>18,73</td></tr>
<tr><td>14</td><td>New Jersey Devils</td><td>18,66</td></tr>
<tr><td>15</td><td>Washington Capitals</td><td>18,66</td></tr>
<tr><td>16</td><td>Vegas Golden Knights</td><td>18,65</td></tr>
<tr><td>17</td><td>Vancouver Canucks</td><td>18,55</td></tr>
<tr><td>18</td><td>Winnipeg Jets</td><td>18,51</td></tr>
<tr><td>19</td><td>Anaheim Ducks</td><td>18,43</td></tr>
<tr><td>20</td><td>Pittsburgh Penguins</td><td>18,32</td></tr>
<tr><td>21</td><td>Carolina Hurricanes</td><td>18,29</td></tr>
<tr><td>22</td><td>Detroit Red Wings</td><td>18,28</td></tr>
<tr><td>23</td><td>Montreal Canadiens</td><td>18,28</td></tr>
<tr><td>24</td><td>Edmonton Oilers</td><td>18,23</td></tr>
<tr><td>25</td><td>Calgary Flames</td><td>18,02</td></tr>
<tr><td>26</td><td>Florida Panthers</td><td>17,99</td></tr>
<tr><td>27</td><td>Minnesota Wild</td><td>17,91</td></tr>
<tr><td>28</td><td>Toronto Maple Leafs</td><td>17,90</td></tr>
<tr><td>29</td><td>Chicago Blackhawks</td><td>17,84</td></tr>
<tr><td>30</td><td>Colorado Avalanche</td><td>17,72</td></tr>
<tr><td>31</td><td>New York Rangers</td><td>17,61</td></tr>
<tr><td>32</td><td>Columbus Blue Jackets</td><td>17,61</td></tr>
<tr><td>33</td><td>Seattle Kraken</td><td>17,32</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Montreal Canadiens</td><td>52,88%</td></tr>
<tr><td>2</td><td>Toronto Maple Leafs</td><td>52,86%</td></tr>
<tr><td>3</td><td>Pittsburgh Penguins</td><td>52,67%</td></tr>
<tr><td>4</td><td>Winnipeg Jets</td><td>52,28%</td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>52,23%</td></tr>
<tr><td>6</td><td>Florida Panthers</td><td>52,15%</td></tr>
<tr><td>7</td><td>Detroit Red Wings</td><td>52,15%</td></tr>
<tr><td>8</td><td>St. Louis Blues</td><td>51,61%</td></tr>
<tr><td>9</td><td>New Jersey Devils</td><td>51,50%</td></tr>
<tr><td>10</td><td>Dallas Stars</td><td>51,37%</td></tr>
<tr><td>11</td><td>Quebec Nordiques</td><td>51,24%</td></tr>
<tr><td>12</td><td>Vancouver Canucks</td><td>51,00%</td></tr>
<tr><td>13</td><td>Arizona Coyotes</td><td>50,92%</td></tr>
<tr><td>14</td><td>Los Angeles Kings</td><td>50,77%</td></tr>
<tr><td>15</td><td>Chicago Blackhawks</td><td>50,65%</td></tr>
<tr><td>16</td><td>Buffalo Sabres</td><td>50,40%</td></tr>
<tr><td>17</td><td>Boston Bruins</td><td>50,39%</td></tr>
<tr><td>18</td><td>Calgary Flames</td><td>50,38%</td></tr>
<tr><td>19</td><td>Philadelphia Flyers</td><td>50,20%</td></tr>
<tr><td>20</td><td>Vegas Golden Knights</td><td>50,11%</td></tr>
<tr><td>21</td><td>New York Islanders</td><td>49,98%</td></tr>
<tr><td>22</td><td>Columbus Blue Jackets</td><td>49,97%</td></tr>
<tr><td>23</td><td>Carolina Hurricanes</td><td>49,77%</td></tr>
<tr><td>24</td><td>Colorado Avalanche</td><td>49,68%</td></tr>
<tr><td>25</td><td>Tampa Bay Lightning</td><td>49,64%</td></tr>
<tr><td>26</td><td>New York Rangers</td><td>49,55%</td></tr>
<tr><td>27</td><td>Seattle Kraken</td><td>49,47%</td></tr>
<tr><td>28</td><td>Ottawa Senators</td><td>49,19%</td></tr>
<tr><td>29</td><td>Nashville Predators</td><td>49,02%</td></tr>
<tr><td>30</td><td>Minnesota Wild</td><td>48,84%</td></tr>
<tr><td>31</td><td>Edmonton Oilers</td><td>48,81%</td></tr>
<tr><td>32</td><td>San Jose Sharks</td><td>47,94%</td></tr>
<tr><td>33</td><td>Washington Capitals</td><td>46,88%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
