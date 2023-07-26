<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Team Stats</title>
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
<tr><td>Laval Chiefs</td><td>82</td><td>25</td><td>40</td><td>9</td><td>3</td><td>4</td><td>1</td><td>221</td><td>227</td><td>41</td><td>15</td><td>18</td><td>5</td><td>2</td><td>1</td><td>0</td><td>106</td><td>98</td><td>41</td><td>10</td><td>22</td><td>4</td><td>1</td><td>3</td><td>1</td><td>115</td><td>129</td><td>221</td><td>400</td><td>621</td></tr>
<tr><td>The Nuuk Vikings</td><td>82</td><td>29</td><td>36</td><td>4</td><td>11</td><td>1</td><td>1</td><td>232</td><td>262</td><td>41</td><td>15</td><td>17</td><td>2</td><td>6</td><td>0</td><td>1</td><td>116</td><td>125</td><td>41</td><td>14</td><td>19</td><td>2</td><td>5</td><td>1</td><td>0</td><td>116</td><td>137</td><td>232</td><td>418</td><td>650</td></tr>
<tr><td>Providence Bruins</td><td>82</td><td>31</td><td>30</td><td>4</td><td>5</td><td>5</td><td>7</td><td>240</td><td>248</td><td>41</td><td>19</td><td>9</td><td>2</td><td>4</td><td>3</td><td>4</td><td>124</td><td>114</td><td>41</td><td>12</td><td>21</td><td>2</td><td>1</td><td>2</td><td>3</td><td>116</td><td>134</td><td>240</td><td>423</td><td>663</td></tr>
<tr><td>Rochester Americans</td><td>82</td><td>38</td><td>32</td><td>2</td><td>4</td><td>2</td><td>4</td><td>263</td><td>250</td><td>41</td><td>19</td><td>16</td><td>1</td><td>2</td><td>1</td><td>2</td><td>129</td><td>119</td><td>41</td><td>19</td><td>16</td><td>1</td><td>2</td><td>1</td><td>2</td><td>134</td><td>131</td><td>263</td><td>477</td><td>740</td></tr>
<tr><td>Joliette Sportif</td><td>82</td><td>29</td><td>37</td><td>5</td><td>4</td><td>4</td><td>3</td><td>214</td><td>245</td><td>41</td><td>16</td><td>17</td><td>2</td><td>3</td><td>1</td><td>2</td><td>112</td><td>128</td><td>41</td><td>13</td><td>20</td><td>3</td><td>1</td><td>3</td><td>1</td><td>102</td><td>117</td><td>214</td><td>387</td><td>601</td></tr>
<tr><td>Charlotte Checkers</td><td>82</td><td>35</td><td>31</td><td>4</td><td>5</td><td>2</td><td>5</td><td>257</td><td>257</td><td>41</td><td>21</td><td>13</td><td>1</td><td>4</td><td>0</td><td>2</td><td>143</td><td>125</td><td>41</td><td>14</td><td>18</td><td>3</td><td>1</td><td>2</td><td>3</td><td>114</td><td>132</td><td>257</td><td>463</td><td>720</td></tr>
<tr><td>Rockford IceHogs</td><td>82</td><td>32</td><td>32</td><td>8</td><td>6</td><td>0</td><td>4</td><td>266</td><td>265</td><td>41</td><td>18</td><td>15</td><td>2</td><td>3</td><td>0</td><td>3</td><td>131</td><td>134</td><td>41</td><td>14</td><td>17</td><td>6</td><td>3</td><td>0</td><td>1</td><td>135</td><td>131</td><td>266</td><td>481</td><td>747</td></tr>
<tr><td>Lake Erie Monsters</td><td>82</td><td>29</td><td>34</td><td>2</td><td>7</td><td>6</td><td>4</td><td>243</td><td>268</td><td>41</td><td>18</td><td>15</td><td>0</td><td>3</td><td>3</td><td>2</td><td>129</td><td>127</td><td>41</td><td>11</td><td>19</td><td>2</td><td>4</td><td>3</td><td>2</td><td>114</td><td>141</td><td>243</td><td>430</td><td>673</td></tr>
<tr><td>Springfield Falcons</td><td>82</td><td>24</td><td>37</td><td>5</td><td>7</td><td>5</td><td>4</td><td>224</td><td>256</td><td>41</td><td>14</td><td>19</td><td>2</td><td>1</td><td>3</td><td>2</td><td>129</td><td>136</td><td>41</td><td>10</td><td>18</td><td>3</td><td>6</td><td>2</td><td>2</td><td>95</td><td>120</td><td>224</td><td>393</td><td>617</td></tr>
<tr><td>Nunavik Natturaliit</td><td>82</td><td>37</td><td>31</td><td>6</td><td>2</td><td>2</td><td>4</td><td>255</td><td>235</td><td>41</td><td>22</td><td>14</td><td>2</td><td>0</td><td>1</td><td>2</td><td>126</td><td>93</td><td>41</td><td>15</td><td>17</td><td>4</td><td>2</td><td>1</td><td>2</td><td>129</td><td>142</td><td>255</td><td>452</td><td>707</td></tr>
<tr><td>Grand Rapids Griffins</td><td>82</td><td>42</td><td>27</td><td>4</td><td>4</td><td>4</td><td>1</td><td>258</td><td>214</td><td>41</td><td>17</td><td>14</td><td>3</td><td>3</td><td>3</td><td>1</td><td>120</td><td>116</td><td>41</td><td>25</td><td>13</td><td>1</td><td>1</td><td>1</td><td>0</td><td>138</td><td>98</td><td>258</td><td>455</td><td>713</td></tr>
<tr><td>Oklahoma City Barons</td><td>82</td><td>41</td><td>29</td><td>4</td><td>3</td><td>1</td><td>4</td><td>262</td><td>233</td><td>41</td><td>22</td><td>11</td><td>4</td><td>1</td><td>0</td><td>3</td><td>144</td><td>112</td><td>41</td><td>19</td><td>18</td><td>0</td><td>2</td><td>1</td><td>1</td><td>118</td><td>121</td><td>262</td><td>471</td><td>733</td></tr>
<tr><td>San Antonio Rampage</td><td>82</td><td>35</td><td>31</td><td>2</td><td>8</td><td>3</td><td>3</td><td>257</td><td>253</td><td>41</td><td>19</td><td>14</td><td>2</td><td>5</td><td>1</td><td>0</td><td>130</td><td>113</td><td>41</td><td>16</td><td>17</td><td>0</td><td>3</td><td>2</td><td>3</td><td>127</td><td>140</td><td>257</td><td>470</td><td>727</td></tr>
<tr><td>Gatineau Olympiques</td><td>82</td><td>31</td><td>34</td><td>4</td><td>7</td><td>1</td><td>5</td><td>251</td><td>243</td><td>41</td><td>19</td><td>13</td><td>2</td><td>5</td><td>1</td><td>1</td><td>138</td><td>114</td><td>41</td><td>12</td><td>21</td><td>2</td><td>2</td><td>0</td><td>4</td><td>113</td><td>129</td><td>251</td><td>458</td><td>709</td></tr>
<tr><td>Houston Aeros</td><td>82</td><td>40</td><td>29</td><td>2</td><td>3</td><td>6</td><td>2</td><td>273</td><td>229</td><td>41</td><td>23</td><td>10</td><td>2</td><td>2</td><td>3</td><td>1</td><td>140</td><td>103</td><td>41</td><td>17</td><td>19</td><td>0</td><td>1</td><td>3</td><td>1</td><td>133</td><td>126</td><td>273</td><td>477</td><td>750</td></tr>
<tr><td>Trois-Rivières Lions</td><td>82</td><td>36</td><td>33</td><td>5</td><td>3</td><td>2</td><td>3</td><td>260</td><td>253</td><td>41</td><td>18</td><td>17</td><td>3</td><td>1</td><td>1</td><td>1</td><td>122</td><td>120</td><td>41</td><td>18</td><td>16</td><td>2</td><td>2</td><td>1</td><td>2</td><td>138</td><td>133</td><td>260</td><td>482</td><td>742</td></tr>
<tr><td>Milwaukee Admirals</td><td>82</td><td>29</td><td>36</td><td>7</td><td>2</td><td>5</td><td>3</td><td>239</td><td>246</td><td>41</td><td>17</td><td>17</td><td>2</td><td>1</td><td>2</td><td>2</td><td>123</td><td>125</td><td>41</td><td>12</td><td>19</td><td>5</td><td>1</td><td>3</td><td>1</td><td>116</td><td>121</td><td>239</td><td>419</td><td>658</td></tr>
<tr><td>Albany Devils</td><td>82</td><td>31</td><td>35</td><td>2</td><td>7</td><td>4</td><td>3</td><td>244</td><td>256</td><td>41</td><td>18</td><td>17</td><td>1</td><td>3</td><td>0</td><td>2</td><td>117</td><td>120</td><td>41</td><td>13</td><td>18</td><td>1</td><td>4</td><td>4</td><td>1</td><td>127</td><td>136</td><td>244</td><td>437</td><td>681</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>82</td><td>29</td><td>39</td><td>10</td><td>2</td><td>1</td><td>1</td><td>237</td><td>244</td><td>41</td><td>14</td><td>20</td><td>6</td><td>0</td><td>1</td><td>0</td><td>120</td><td>123</td><td>41</td><td>15</td><td>19</td><td>4</td><td>2</td><td>0</td><td>1</td><td>117</td><td>121</td><td>237</td><td>424</td><td>661</td></tr>
<tr><td>Connecticut Whale</td><td>82</td><td>35</td><td>33</td><td>7</td><td>2</td><td>1</td><td>4</td><td>228</td><td>224</td><td>41</td><td>19</td><td>16</td><td>4</td><td>2</td><td>0</td><td>0</td><td>104</td><td>97</td><td>41</td><td>16</td><td>17</td><td>3</td><td>0</td><td>1</td><td>4</td><td>124</td><td>127</td><td>228</td><td>415</td><td>643</td></tr>
<tr><td>Binghamton Senators</td><td>82</td><td>29</td><td>40</td><td>4</td><td>1</td><td>5</td><td>3</td><td>249</td><td>259</td><td>41</td><td>16</td><td>18</td><td>3</td><td>1</td><td>2</td><td>1</td><td>132</td><td>121</td><td>41</td><td>13</td><td>22</td><td>1</td><td>0</td><td>3</td><td>2</td><td>117</td><td>138</td><td>249</td><td>445</td><td>694</td></tr>
<tr><td>Adirondack Phantoms</td><td>82</td><td>27</td><td>38</td><td>4</td><td>6</td><td>6</td><td>1</td><td>234</td><td>256</td><td>41</td><td>16</td><td>18</td><td>1</td><td>3</td><td>2</td><td>1</td><td>120</td><td>129</td><td>41</td><td>11</td><td>20</td><td>3</td><td>3</td><td>4</td><td>0</td><td>114</td><td>127</td><td>234</td><td>411</td><td>645</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>82</td><td>39</td><td>29</td><td>1</td><td>8</td><td>5</td><td>0</td><td>231</td><td>230</td><td>41</td><td>20</td><td>14</td><td>0</td><td>3</td><td>4</td><td>0</td><td>118</td><td>114</td><td>41</td><td>19</td><td>15</td><td>1</td><td>5</td><td>1</td><td>0</td><td>113</td><td>116</td><td>231</td><td>419</td><td>650</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>82</td><td>38</td><td>32</td><td>3</td><td>5</td><td>1</td><td>3</td><td>249</td><td>225</td><td>41</td><td>20</td><td>13</td><td>2</td><td>3</td><td>0</td><td>3</td><td>131</td><td>118</td><td>41</td><td>18</td><td>19</td><td>1</td><td>2</td><td>1</td><td>0</td><td>118</td><td>107</td><td>249</td><td>455</td><td>704</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>82</td><td>31</td><td>29</td><td>8</td><td>6</td><td>4</td><td>4</td><td>250</td><td>237</td><td>41</td><td>15</td><td>14</td><td>4</td><td>3</td><td>3</td><td>2</td><td>139</td><td>129</td><td>41</td><td>16</td><td>15</td><td>4</td><td>3</td><td>1</td><td>2</td><td>111</td><td>108</td><td>250</td><td>434</td><td>684</td></tr>
<tr><td>Mercer Island Hafgufa</td><td>82</td><td>42</td><td>29</td><td>3</td><td>3</td><td>2</td><td>3</td><td>295</td><td>242</td><td>41</td><td>23</td><td>12</td><td>1</td><td>1</td><td>1</td><td>3</td><td>150</td><td>113</td><td>41</td><td>19</td><td>17</td><td>2</td><td>2</td><td>1</td><td>0</td><td>145</td><td>129</td><td>295</td><td>522</td><td>817</td></tr>
<tr><td>Peoria Rivermen</td><td>82</td><td>25</td><td>41</td><td>4</td><td>5</td><td>5</td><td>2</td><td>229</td><td>275</td><td>41</td><td>15</td><td>19</td><td>2</td><td>1</td><td>3</td><td>1</td><td>123</td><td>134</td><td>41</td><td>10</td><td>22</td><td>2</td><td>4</td><td>2</td><td>1</td><td>106</td><td>141</td><td>229</td><td>401</td><td>630</td></tr>
<tr><td>Norfolk Admirals</td><td>82</td><td>41</td><td>29</td><td>4</td><td>3</td><td>2</td><td>3</td><td>245</td><td>233</td><td>41</td><td>25</td><td>9</td><td>3</td><td>1</td><td>1</td><td>2</td><td>132</td><td>102</td><td>41</td><td>16</td><td>20</td><td>1</td><td>2</td><td>1</td><td>1</td><td>113</td><td>131</td><td>245</td><td>434</td><td>679</td></tr>
<tr><td>Roberval Dwarfs</td><td>82</td><td>31</td><td>34</td><td>7</td><td>3</td><td>2</td><td>5</td><td>253</td><td>254</td><td>41</td><td>15</td><td>16</td><td>4</td><td>2</td><td>2</td><td>2</td><td>142</td><td>131</td><td>41</td><td>16</td><td>18</td><td>3</td><td>1</td><td>0</td><td>3</td><td>111</td><td>123</td><td>253</td><td>453</td><td>706</td></tr>
<tr><td>Chicago Wolves</td><td>82</td><td>37</td><td>32</td><td>1</td><td>5</td><td>3</td><td>4</td><td>236</td><td>247</td><td>41</td><td>17</td><td>17</td><td>1</td><td>3</td><td>0</td><td>3</td><td>112</td><td>127</td><td>41</td><td>20</td><td>15</td><td>0</td><td>2</td><td>3</td><td>1</td><td>124</td><td>120</td><td>236</td><td>422</td><td>658</td></tr>
<tr><td>Henderson Silver Knights</td><td>82</td><td>35</td><td>35</td><td>6</td><td>2</td><td>2</td><td>2</td><td>231</td><td>235</td><td>41</td><td>16</td><td>21</td><td>2</td><td>0</td><td>1</td><td>1</td><td>108</td><td>121</td><td>41</td><td>19</td><td>14</td><td>4</td><td>2</td><td>1</td><td>1</td><td>123</td><td>114</td><td>231</td><td>408</td><td>639</td></tr>
<tr><td>CCCP Red Army</td><td>82</td><td>35</td><td>32</td><td>6</td><td>4</td><td>3</td><td>2</td><td>239</td><td>235</td><td>41</td><td>21</td><td>13</td><td>1</td><td>3</td><td>2</td><td>1</td><td>129</td><td>121</td><td>41</td><td>14</td><td>19</td><td>5</td><td>1</td><td>1</td><td>1</td><td>110</td><td>114</td><td>239</td><td>424</td><td>663</td></tr>
<tr><td>Manitoba Moose</td><td>82</td><td>34</td><td>36</td><td>2</td><td>3</td><td>3</td><td>4</td><td>224</td><td>253</td><td>41</td><td>19</td><td>15</td><td>0</td><td>2</td><td>2</td><td>3</td><td>122</td><td>126</td><td>41</td><td>15</td><td>21</td><td>2</td><td>1</td><td>1</td><td>1</td><td>102</td><td>127</td><td>224</td><td>395</td><td>619</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Laval Chiefs</td><td>LAV</td><td>69</td><td>79</td><td>60</td><td>18</td><td>2495</td><td>790</td><td>811</td><td>856</td><td>62</td><td>2370</td><td>724</td><td>546</td><td>1505</td><td>270</td><td>49</td><td>18,15%</td><td>248</td><td>42</td><td>83,06%</td><td>1</td><td>51,39%</td><td>52,21%</td><td>51,15%</td><td>1919</td><td>2004</td><td>1053</td><td>600</td><td>1401</td><td>528</td><td>3</td><td>0</td></tr>
<tr><td>The Nuuk Vikings</td><td>NUU</td><td>77</td><td>67</td><td>83</td><td>6</td><td>2561</td><td>799</td><td>839</td><td>905</td><td>24</td><td>2599</td><td>710</td><td>533</td><td>1637</td><td>294</td><td>58</td><td>19,73%</td><td>238</td><td>50</td><td>78,99%</td><td>1</td><td>48,52%</td><td>48,39%</td><td>49,27%</td><td>2020</td><td>1887</td><td>1049</td><td>616</td><td>1302</td><td>514</td><td>2</td><td>3</td></tr>
<tr><td>Providence Bruins</td><td>PRO</td><td>92</td><td>71</td><td>68</td><td>12</td><td>2478</td><td>829</td><td>783</td><td>817</td><td>93</td><td>2503</td><td>754</td><td>590</td><td>1612</td><td>269</td><td>41</td><td>15,24%</td><td>273</td><td>49</td><td>82,05%</td><td>2</td><td>52,43%</td><td>49,49%</td><td>51,17%</td><td>1962</td><td>1972</td><td>1067</td><td>610</td><td>1355</td><td>532</td><td>2</td><td>1</td></tr>
<tr><td>Rochester Americans</td><td>RCH</td><td>96</td><td>86</td><td>77</td><td>8</td><td>2547</td><td>876</td><td>804</td><td>835</td><td>56</td><td>2488</td><td>719</td><td>594</td><td>1620</td><td>274</td><td>63</td><td>22,99%</td><td>261</td><td>57</td><td>78,16%</td><td>3</td><td>50,75%</td><td>49,93%</td><td>51,65%</td><td>1959</td><td>1957</td><td>1046</td><td>602</td><td>1360</td><td>525</td><td>4</td><td>3</td></tr>
<tr><td>Joliette Sportif</td><td>JOL</td><td>68</td><td>80</td><td>57</td><td>14</td><td>2345</td><td>761</td><td>779</td><td>774</td><td>54</td><td>2438</td><td>743</td><td>618</td><td>1532</td><td>266</td><td>48</td><td>18,05%</td><td>279</td><td>59</td><td>78,85%</td><td>4</td><td>51,62%</td><td>50,93%</td><td>51,67%</td><td>1958</td><td>1970</td><td>1050</td><td>612</td><td>1360</td><td>523</td><td>2</td><td>6</td></tr>
<tr><td>Charlotte Checkers</td><td>CHA</td><td>90</td><td>94</td><td>67</td><td>8</td><td>2467</td><td>787</td><td>835</td><td>808</td><td>66</td><td>2457</td><td>705</td><td>624</td><td>1615</td><td>271</td><td>44</td><td>16,24%</td><td>286</td><td>60</td><td>79,02%</td><td>2</td><td>50,45%</td><td>49,23%</td><td>53,49%</td><td>1934</td><td>1977</td><td>1056</td><td>602</td><td>1377</td><td>528</td><td>3</td><td>1</td></tr>
<tr><td>Rockford IceHogs</td><td>RFD</td><td>102</td><td>96</td><td>60</td><td>9</td><td>2471</td><td>860</td><td>815</td><td>768</td><td>41</td><td>2526</td><td>792</td><td>646</td><td>1636</td><td>266</td><td>58</td><td>21,80%</td><td>288</td><td>53</td><td>81,60%</td><td>4</td><td>50,00%</td><td>50,56%</td><td>49,05%</td><td>1983</td><td>1924</td><td>1058</td><td>608</td><td>1314</td><td>525</td><td>4</td><td>2</td></tr>
<tr><td>Lake Erie Monsters</td><td>LKE</td><td>86</td><td>71</td><td>78</td><td>13</td><td>2354</td><td>743</td><td>753</td><td>816</td><td>77</td><td>2573</td><td>721</td><td>714</td><td>1612</td><td>262</td><td>52</td><td>19,85%</td><td>323</td><td>71</td><td>78,02%</td><td>3</td><td>49,93%</td><td>51,75%</td><td>50,23%</td><td>1985</td><td>1948</td><td>1057</td><td>610</td><td>1331</td><td>528</td><td>2</td><td>3</td></tr>
<tr><td>Springfield Falcons</td><td>SPR</td><td>81</td><td>78</td><td>55</td><td>15</td><td>2412</td><td>779</td><td>838</td><td>752</td><td>71</td><td>2538</td><td>746</td><td>673</td><td>1644</td><td>265</td><td>42</td><td>15,85%</td><td>306</td><td>66</td><td>78,43%</td><td>4</td><td>50,87%</td><td>48,80%</td><td>47,39%</td><td>2005</td><td>1929</td><td>1054</td><td>617</td><td>1323</td><td>521</td><td>3</td><td>2</td></tr>
<tr><td>Nunavik Natturaliit</td><td>NUN</td><td>93</td><td>78</td><td>76</td><td>9</td><td>2516</td><td>850</td><td>815</td><td>819</td><td>52</td><td>2429</td><td>669</td><td>627</td><td>1625</td><td>272</td><td>45</td><td>16,54%</td><td>271</td><td>53</td><td>80,44%</td><td>5</td><td>50,97%</td><td>51,72%</td><td>52,30%</td><td>1932</td><td>1970</td><td>1063</td><td>613</td><td>1363</td><td>530</td><td>8</td><td>3</td></tr>
<tr><td>Grand Rapids Griffins</td><td>GRG</td><td>93</td><td>91</td><td>66</td><td>13</td><td>2520</td><td>859</td><td>871</td><td>771</td><td>42</td><td>2306</td><td>670</td><td>547</td><td>1470</td><td>277</td><td>56</td><td>20,22%</td><td>241</td><td>41</td><td>82,99%</td><td>2</td><td>52,60%</td><td>51,88%</td><td>51,93%</td><td>1904</td><td>2004</td><td>1051</td><td>600</td><td>1394</td><td>528</td><td>5</td><td>1</td></tr>
<tr><td>Oklahoma City Barons</td><td>OKC</td><td>82</td><td>98</td><td>77</td><td>5</td><td>2510</td><td>798</td><td>871</td><td>816</td><td>39</td><td>2394</td><td>707</td><td>596</td><td>1608</td><td>301</td><td>65</td><td>21,59%</td><td>261</td><td>38</td><td>85,44%</td><td>2</td><td>50,25%</td><td>48,90%</td><td>48,75%</td><td>1933</td><td>1981</td><td>1042</td><td>608</td><td>1375</td><td>523</td><td>5</td><td>1</td></tr>
<tr><td>San Antonio Rampage</td><td>SAR</td><td>84</td><td>91</td><td>77</td><td>9</td><td>2477</td><td>776</td><td>787</td><td>887</td><td>49</td><td>2494</td><td>740</td><td>575</td><td>1570</td><td>280</td><td>62</td><td>22,14%</td><td>257</td><td>44</td><td>82,88%</td><td>2</td><td>49,74%</td><td>50,56%</td><td>50,83%</td><td>1962</td><td>1956</td><td>1055</td><td>608</td><td>1351</td><td>523</td><td>3</td><td>0</td></tr>
<tr><td>Gatineau Olympiques</td><td>GAT</td><td>79</td><td>87</td><td>80</td><td>7</td><td>2480</td><td>815</td><td>828</td><td>803</td><td>56</td><td>2288</td><td>644</td><td>544</td><td>1553</td><td>313</td><td>67</td><td>21,41%</td><td>249</td><td>51</td><td>79,52%</td><td>2</td><td>52,45%</td><td>48,91%</td><td>49,02%</td><td>1892</td><td>2019</td><td>1066</td><td>605</td><td>1402</td><td>535</td><td>2</td><td>0</td></tr>
<tr><td>Houston Aeros</td><td>HOU</td><td>84</td><td>98</td><td>83</td><td>11</td><td>2450</td><td>805</td><td>837</td><td>769</td><td>67</td><td>2528</td><td>745</td><td>662</td><td>1603</td><td>265</td><td>55</td><td>20,75%</td><td>306</td><td>51</td><td>83,33%</td><td>8</td><td>51,33%</td><td>49,12%</td><td>50,47%</td><td>1942</td><td>1963</td><td>1066</td><td>606</td><td>1353</td><td>528</td><td>4</td><td>1</td></tr>
<tr><td>Trois-Rivières Lions</td><td>TRL</td><td>97</td><td>83</td><td>73</td><td>9</td><td>2520</td><td>830</td><td>827</td><td>830</td><td>50</td><td>2502</td><td>724</td><td>717</td><td>1684</td><td>255</td><td>61</td><td>23,92%</td><td>325</td><td>71</td><td>78,15%</td><td>1</td><td>49,96%</td><td>50,82%</td><td>50,53%</td><td>1970</td><td>1918</td><td>1071</td><td>610</td><td>1309</td><td>528</td><td>1</td><td>1</td></tr>
<tr><td>Milwaukee Admirals</td><td>MIL</td><td>72</td><td>90</td><td>65</td><td>16</td><td>2501</td><td>815</td><td>865</td><td>779</td><td>64</td><td>2412</td><td>692</td><td>652</td><td>1492</td><td>282</td><td>51</td><td>18,09%</td><td>273</td><td>56</td><td>79,49%</td><td>2</td><td>51,53%</td><td>52,59%</td><td>53,61%</td><td>1924</td><td>1989</td><td>1063</td><td>611</td><td>1372</td><td>532</td><td>2</td><td>1</td></tr>
<tr><td>Albany Devils</td><td>ALB</td><td>85</td><td>77</td><td>76</td><td>9</td><td>2340</td><td>745</td><td>773</td><td>786</td><td>60</td><td>2484</td><td>757</td><td>596</td><td>1593</td><td>279</td><td>47</td><td>16,85%</td><td>271</td><td>62</td><td>77,12%</td><td>4</td><td>50,04%</td><td>51,28%</td><td>53,08%</td><td>1991</td><td>1913</td><td>1072</td><td>618</td><td>1303</td><td>528</td><td>1</td><td>1</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>BRI</td><td>75</td><td>77</td><td>74</td><td>14</td><td>2368</td><td>749</td><td>791</td><td>797</td><td>39</td><td>2466</td><td>721</td><td>704</td><td>1593</td><td>225</td><td>38</td><td>16,89%</td><td>303</td><td>55</td><td>81,85%</td><td>2</td><td>50,51%</td><td>50,43%</td><td>51,31%</td><td>1977</td><td>1907</td><td>1070</td><td>613</td><td>1303</td><td>522</td><td>3</td><td>3</td></tr>
<tr><td>Connecticut Whale</td><td>CTW</td><td>80</td><td>81</td><td>59</td><td>13</td><td>2513</td><td>836</td><td>863</td><td>786</td><td>47</td><td>2412</td><td>695</td><td>605</td><td>1582</td><td>290</td><td>43</td><td>14,83%</td><td>274</td><td>34</td><td>87,59%</td><td>3</td><td>49,37%</td><td>50,00%</td><td>52,66%</td><td>1938</td><td>1978</td><td>1044</td><td>602</td><td>1365</td><td>529</td><td>2</td><td>7</td></tr>
<tr><td>Binghamton Senators</td><td>BNG</td><td>75</td><td>88</td><td>77</td><td>12</td><td>2537</td><td>824</td><td>826</td><td>851</td><td>66</td><td>2518</td><td>758</td><td>634</td><td>1591</td><td>267</td><td>60</td><td>22,47%</td><td>284</td><td>65</td><td>77,11%</td><td>2</td><td>49,89%</td><td>51,11%</td><td>49,77%</td><td>1999</td><td>1912</td><td>1062</td><td>610</td><td>1316</td><td>521</td><td>0</td><td>3</td></tr>
<tr><td>Adirondack Phantoms</td><td>ADK</td><td>84</td><td>63</td><td>77</td><td>14</td><td>2366</td><td>812</td><td>703</td><td>818</td><td>61</td><td>2585</td><td>717</td><td>604</td><td>1599</td><td>294</td><td>60</td><td>20,41%</td><td>265</td><td>43</td><td>83,77%</td><td>4</td><td>51,54%</td><td>50,71%</td><td>51,36%</td><td>1983</td><td>1915</td><td>1072</td><td>613</td><td>1314</td><td>529</td><td>4</td><td>2</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>WBS</td><td>86</td><td>83</td><td>56</td><td>7</td><td>2485</td><td>775</td><td>854</td><td>834</td><td>35</td><td>2417</td><td>697</td><td>558</td><td>1535</td><td>291</td><td>48</td><td>16,49%</td><td>244</td><td>42</td><td>82,79%</td><td>2</td><td>51,37%</td><td>48,80%</td><td>48,10%</td><td>1926</td><td>1966</td><td>1073</td><td>610</td><td>1351</td><td>535</td><td>5</td><td>2</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>CHI</td><td>84</td><td>90</td><td>71</td><td>5</td><td>2510</td><td>836</td><td>896</td><td>759</td><td>35</td><td>2439</td><td>721</td><td>664</td><td>1627</td><td>271</td><td>50</td><td>18,45%</td><td>288</td><td>50</td><td>82,64%</td><td>1</td><td>50,21%</td><td>50,16%</td><td>48,72%</td><td>1931</td><td>1967</td><td>1057</td><td>606</td><td>1355</td><td>529</td><td>4</td><td>2</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>RNO</td><td>83</td><td>90</td><td>65</td><td>15</td><td>2532</td><td>872</td><td>807</td><td>814</td><td>70</td><td>2488</td><td>754</td><td>576</td><td>1557</td><td>275</td><td>54</td><td>19,64%</td><td>264</td><td>56</td><td>78,79%</td><td>3</td><td>49,30%</td><td>48,95%</td><td>49,96%</td><td>1947</td><td>1968</td><td>1060</td><td>600</td><td>1359</td><td>529</td><td>5</td><td>0</td></tr>
<tr><td>Mercer Island Hafgufa</td><td>MIH</td><td>107</td><td>112</td><td>71</td><td>6</td><td>2533</td><td>853</td><td>843</td><td>811</td><td>44</td><td>2561</td><td>747</td><td>629</td><td>1670</td><td>253</td><td>57</td><td>22,53%</td><td>286</td><td>43</td><td>84,97%</td><td>2</td><td>47,49%</td><td>49,42%</td><td>50,19%</td><td>2015</td><td>1898</td><td>1046</td><td>608</td><td>1297</td><td>520</td><td>6</td><td>3</td></tr>
<tr><td>Peoria Rivermen</td><td>PEO</td><td>70</td><td>90</td><td>60</td><td>14</td><td>2309</td><td>758</td><td>726</td><td>792</td><td>56</td><td>2591</td><td>762</td><td>646</td><td>1625</td><td>252</td><td>48</td><td>19,05%</td><td>288</td><td>61</td><td>78,82%</td><td>2</td><td>49,39%</td><td>50,43%</td><td>50,75%</td><td>1961</td><td>1938</td><td>1071</td><td>599</td><td>1326</td><td>532</td><td>3</td><td>1</td></tr>
<tr><td>Norfolk Admirals</td><td>NOR</td><td>99</td><td>80</td><td>60</td><td>7</td><td>2396</td><td>836</td><td>792</td><td>742</td><td>42</td><td>2393</td><td>728</td><td>605</td><td>1543</td><td>256</td><td>51</td><td>19,92%</td><td>278</td><td>49</td><td>82,37%</td><td>2</td><td>50,75%</td><td>51,96%</td><td>47,53%</td><td>1945</td><td>1950</td><td>1055</td><td>606</td><td>1348</td><td>526</td><td>6</td><td>2</td></tr>
<tr><td>Roberval Dwarfs</td><td>ROB</td><td>88</td><td>84</td><td>72</td><td>13</td><td>2613</td><td>825</td><td>874</td><td>872</td><td>63</td><td>2473</td><td>721</td><td>418</td><td>1416</td><td>266</td><td>48</td><td>18,05%</td><td>178</td><td>38</td><td>78,65%</td><td>1</td><td>51,82%</td><td>51,97%</td><td>52,51%</td><td>1945</td><td>1960</td><td>1072</td><td>604</td><td>1360</td><td>538</td><td>3</td><td>5</td></tr>
<tr><td>Chicago Wolves</td><td>CHI</td><td>87</td><td>70</td><td>75</td><td>8</td><td>2484</td><td>794</td><td>840</td><td>821</td><td>52</td><td>2371</td><td>722</td><td>610</td><td>1560</td><td>265</td><td>47</td><td>17,74%</td><td>259</td><td>55</td><td>78,76%</td><td>3</td><td>50,94%</td><td>50,88%</td><td>50,04%</td><td>1922</td><td>1994</td><td>1051</td><td>601</td><td>1387</td><td>526</td><td>4</td><td>2</td></tr>
<tr><td>Henderson Silver Knights</td><td>PAR</td><td>84</td><td>73</td><td>66</td><td>8</td><td>2500</td><td>829</td><td>866</td><td>775</td><td>41</td><td>2428</td><td>708</td><td>620</td><td>1528</td><td>281</td><td>50</td><td>17,79%</td><td>272</td><td>44</td><td>83,82%</td><td>1</td><td>50,58%</td><td>50,97%</td><td>52,25%</td><td>1928</td><td>1972</td><td>1053</td><td>603</td><td>1360</td><td>528</td><td>7</td><td>1</td></tr>
<tr><td>CCCP Red Army</td><td>CCC</td><td>83</td><td>79</td><td>68</td><td>11</td><td>2434</td><td>840</td><td>773</td><td>784</td><td>59</td><td>2469</td><td>742</td><td>543</td><td>1592</td><td>262</td><td>56</td><td>21,37%</td><td>246</td><td>53</td><td>78,46%</td><td>1</td><td>49,89%</td><td>49,27%</td><td>49,16%</td><td>1949</td><td>1944</td><td>1076</td><td>602</td><td>1333</td><td>536</td><td>3</td><td>1</td></tr>
<tr><td>Manitoba Moose</td><td>MAN</td><td>73</td><td>75</td><td>71</td><td>13</td><td>2333</td><td>811</td><td>765</td><td>733</td><td>56</td><td>2417</td><td>706</td><td>647</td><td>1658</td><td>262</td><td>45</td><td>17,18%</td><td>286</td><td>57</td><td>80,07%</td><td>3</td><td>50,02%</td><td>49,80%</td><td>51,91%</td><td>1950</td><td>1942</td><td>1076</td><td>605</td><td>1333</td><td>535</td><td>4</td><td>1</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,99</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Mercer Island Hafgufa</td><td>3,60</td></tr>
<tr><td>2</td><td>Houston Aeros</td><td>3,33</td></tr>
<tr><td>3</td><td>Rockford IceHogs</td><td>3,24</td></tr>
<tr><td>4</td><td>Rochester Americans</td><td>3,21</td></tr>
<tr><td>5</td><td>Oklahoma City Barons</td><td>3,20</td></tr>
<tr><td>6</td><td>Trois-Rivières Lions</td><td>3,17</td></tr>
<tr><td>7</td><td>Grand Rapids Griffins</td><td>3,15</td></tr>
<tr><td>8</td><td>Charlotte Checkers</td><td>3,13</td></tr>
<tr><td>9</td><td>San Antonio Rampage</td><td>3,13</td></tr>
<tr><td>10</td><td>Nunavik Natturaliit</td><td>3,11</td></tr>
<tr><td>11</td><td>Roberval Dwarfs</td><td>3,09</td></tr>
<tr><td>12</td><td>Gatineau Olympiques</td><td>3,06</td></tr>
<tr><td>13</td><td>Rouyn-Noranda Huskies</td><td>3,05</td></tr>
<tr><td>14</td><td>Binghamton Senators</td><td>3,04</td></tr>
<tr><td>15</td><td>Chicoutimi Saguenéens</td><td>3,04</td></tr>
<tr><td>16</td><td>Norfolk Admirals</td><td>2,99</td></tr>
<tr><td>17</td><td>Albany Devils</td><td>2,98</td></tr>
<tr><td>18</td><td>Lake Erie Monsters</td><td>2,96</td></tr>
<tr><td>19</td><td>Providence Bruins</td><td>2,93</td></tr>
<tr><td>20</td><td>Milwaukee Admirals</td><td>2,91</td></tr>
<tr><td>21</td><td>CCCP Red Army</td><td>2,91</td></tr>
<tr><td>22</td><td>Bridgeport Sound Tigers</td><td>2,89</td></tr>
<tr><td>23</td><td>Chicago Wolves</td><td>2,88</td></tr>
<tr><td>24</td><td>Adirondack Phantoms</td><td>2,85</td></tr>
<tr><td>25</td><td>The Nuuk Vikings</td><td>2,83</td></tr>
<tr><td>26</td><td>Wilkes-Barre/Scranton Penguins</td><td>2,82</td></tr>
<tr><td>27</td><td>Henderson Silver Knights</td><td>2,82</td></tr>
<tr><td>28</td><td>Peoria Rivermen</td><td>2,79</td></tr>
<tr><td>29</td><td>Connecticut Whale</td><td>2,78</td></tr>
<tr><td>30</td><td>Springfield Falcons</td><td>2,73</td></tr>
<tr><td>31</td><td>Manitoba Moose</td><td>2,73</td></tr>
<tr><td>32</td><td>Laval Chiefs</td><td>2,70</td></tr>
<tr><td>33</td><td>Joliette Sportif</td><td>2,61</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,99</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Grand Rapids Griffins</td><td>2,61</td></tr>
<tr><td>2</td><td>Connecticut Whale</td><td>2,73</td></tr>
<tr><td>3</td><td>Chicoutimi Saguenéens</td><td>2,74</td></tr>
<tr><td>4</td><td>Laval Chiefs</td><td>2,77</td></tr>
<tr><td>5</td><td>Houston Aeros</td><td>2,79</td></tr>
<tr><td>6</td><td>Wilkes-Barre/Scranton Penguins</td><td>2,80</td></tr>
<tr><td>7</td><td>Norfolk Admirals</td><td>2,84</td></tr>
<tr><td>8</td><td>Oklahoma City Barons</td><td>2,84</td></tr>
<tr><td>9</td><td>CCCP Red Army</td><td>2,87</td></tr>
<tr><td>10</td><td>Henderson Silver Knights</td><td>2,87</td></tr>
<tr><td>11</td><td>Nunavik Natturaliit</td><td>2,87</td></tr>
<tr><td>12</td><td>Rouyn-Noranda Huskies</td><td>2,89</td></tr>
<tr><td>13</td><td>Mercer Island Hafgufa</td><td>2,95</td></tr>
<tr><td>14</td><td>Gatineau Olympiques</td><td>2,96</td></tr>
<tr><td>15</td><td>Bridgeport Sound Tigers</td><td>2,98</td></tr>
<tr><td>16</td><td>Joliette Sportif</td><td>2,99</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>3,00</td></tr>
<tr><td>18</td><td>Chicago Wolves</td><td>3,01</td></tr>
<tr><td>19</td><td>Providence Bruins</td><td>3,02</td></tr>
<tr><td>20</td><td>Rochester Americans</td><td>3,05</td></tr>
<tr><td>21</td><td>Manitoba Moose</td><td>3,09</td></tr>
<tr><td>22</td><td>Trois-Rivières Lions</td><td>3,09</td></tr>
<tr><td>23</td><td>San Antonio Rampage</td><td>3,09</td></tr>
<tr><td>24</td><td>Roberval Dwarfs</td><td>3,10</td></tr>
<tr><td>25</td><td>Adirondack Phantoms</td><td>3,12</td></tr>
<tr><td>26</td><td>Albany Devils</td><td>3,12</td></tr>
<tr><td>27</td><td>Springfield Falcons</td><td>3,12</td></tr>
<tr><td>28</td><td>Charlotte Checkers</td><td>3,13</td></tr>
<tr><td>29</td><td>Binghamton Senators</td><td>3,16</td></tr>
<tr><td>30</td><td>The Nuuk Vikings</td><td>3,20</td></tr>
<tr><td>31</td><td>Rockford IceHogs</td><td>3,23</td></tr>
<tr><td>32</td><td>Lake Erie Monsters</td><td>3,27</td></tr>
<tr><td>33</td><td>Peoria Rivermen</td><td>3,35</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Mercer Island Hafgufa</td><td>121,90%</td></tr>
<tr><td>2</td><td>Grand Rapids Griffins</td><td>120,56%</td></tr>
<tr><td>3</td><td>Houston Aeros</td><td>119,21%</td></tr>
<tr><td>4</td><td>Oklahoma City Barons</td><td>112,45%</td></tr>
<tr><td>5</td><td>Chicoutimi Saguenéens</td><td>110,67%</td></tr>
<tr><td>6</td><td>Nunavik Natturaliit</td><td>108,51%</td></tr>
<tr><td>7</td><td>Rouyn-Noranda Huskies</td><td>105,49%</td></tr>
<tr><td>8</td><td>Rochester Americans</td><td>105,20%</td></tr>
<tr><td>9</td><td>Norfolk Admirals</td><td>105,15%</td></tr>
<tr><td>10</td><td>Gatineau Olympiques</td><td>103,29%</td></tr>
<tr><td>11</td><td>Trois-Rivières Lions</td><td>102,77%</td></tr>
<tr><td>12</td><td>Connecticut Whale</td><td>101,79%</td></tr>
<tr><td>13</td><td>CCCP Red Army</td><td>101,70%</td></tr>
<tr><td>14</td><td>San Antonio Rampage</td><td>101,58%</td></tr>
<tr><td>15</td><td>Wilkes-Barre/Scranton Penguins</td><td>100,43%</td></tr>
<tr><td>16</td><td>Rockford IceHogs</td><td>100,38%</td></tr>
<tr><td>17</td><td>Charlotte Checkers</td><td>100,00%</td></tr>
<tr><td>18</td><td>Roberval Dwarfs</td><td>99,61%</td></tr>
<tr><td>19</td><td>Henderson Silver Knights</td><td>98,30%</td></tr>
<tr><td>20</td><td>Laval Chiefs</td><td>97,36%</td></tr>
<tr><td>21</td><td>Milwaukee Admirals</td><td>97,15%</td></tr>
<tr><td>22</td><td>Bridgeport Sound Tigers</td><td>97,13%</td></tr>
<tr><td>23</td><td>Providence Bruins</td><td>96,77%</td></tr>
<tr><td>24</td><td>Binghamton Senators</td><td>96,14%</td></tr>
<tr><td>25</td><td>Chicago Wolves</td><td>95,55%</td></tr>
<tr><td>26</td><td>Albany Devils</td><td>95,31%</td></tr>
<tr><td>27</td><td>Adirondack Phantoms</td><td>91,41%</td></tr>
<tr><td>28</td><td>Lake Erie Monsters</td><td>90,67%</td></tr>
<tr><td>29</td><td>The Nuuk Vikings</td><td>88,55%</td></tr>
<tr><td>30</td><td>Manitoba Moose</td><td>88,54%</td></tr>
<tr><td>31</td><td>Springfield Falcons</td><td>87,50%</td></tr>
<tr><td>32</td><td>Joliette Sportif</td><td>87,35%</td></tr>
<tr><td>33</td><td>Peoria Rivermen</td><td>83,27%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,16%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Trois-Rivières Lions</td><td>23,92%</td></tr>
<tr><td>2</td><td>Rochester Americans</td><td>22,99%</td></tr>
<tr><td>3</td><td>Mercer Island Hafgufa</td><td>22,53%</td></tr>
<tr><td>4</td><td>Binghamton Senators</td><td>22,47%</td></tr>
<tr><td>5</td><td>San Antonio Rampage</td><td>22,14%</td></tr>
<tr><td>6</td><td>Rockford IceHogs</td><td>21,80%</td></tr>
<tr><td>7</td><td>Oklahoma City Barons</td><td>21,59%</td></tr>
<tr><td>8</td><td>Gatineau Olympiques</td><td>21,41%</td></tr>
<tr><td>9</td><td>CCCP Red Army</td><td>21,37%</td></tr>
<tr><td>10</td><td>Houston Aeros</td><td>20,75%</td></tr>
<tr><td>11</td><td>Adirondack Phantoms</td><td>20,41%</td></tr>
<tr><td>12</td><td>Grand Rapids Griffins</td><td>20,22%</td></tr>
<tr><td>13</td><td>Norfolk Admirals</td><td>19,92%</td></tr>
<tr><td>14</td><td>Lake Erie Monsters</td><td>19,85%</td></tr>
<tr><td>15</td><td>The Nuuk Vikings</td><td>19,73%</td></tr>
<tr><td>16</td><td>Rouyn-Noranda Huskies</td><td>19,64%</td></tr>
<tr><td>17</td><td>Peoria Rivermen</td><td>19,05%</td></tr>
<tr><td>18</td><td>Chicoutimi Saguenéens</td><td>18,45%</td></tr>
<tr><td>19</td><td>Laval Chiefs</td><td>18,15%</td></tr>
<tr><td>20</td><td>Milwaukee Admirals</td><td>18,09%</td></tr>
<tr><td>21</td><td>Joliette Sportif</td><td>18,05%</td></tr>
<tr><td>22</td><td>Roberval Dwarfs</td><td>18,05%</td></tr>
<tr><td>23</td><td>Henderson Silver Knights</td><td>17,79%</td></tr>
<tr><td>24</td><td>Chicago Wolves</td><td>17,74%</td></tr>
<tr><td>25</td><td>Manitoba Moose</td><td>17,18%</td></tr>
<tr><td>26</td><td>Bridgeport Sound Tigers</td><td>16,89%</td></tr>
<tr><td>27</td><td>Albany Devils</td><td>16,85%</td></tr>
<tr><td>28</td><td>Nunavik Natturaliit</td><td>16,54%</td></tr>
<tr><td>29</td><td>Wilkes-Barre/Scranton Penguins</td><td>16,49%</td></tr>
<tr><td>30</td><td>Charlotte Checkers</td><td>16,24%</td></tr>
<tr><td>31</td><td>Springfield Falcons</td><td>15,85%</td></tr>
<tr><td>32</td><td>Providence Bruins</td><td>15,24%</td></tr>
<tr><td>33</td><td>Connecticut Whale</td><td>14,83%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,84%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Connecticut Whale</td><td>87,59%</td></tr>
<tr><td>2</td><td>Oklahoma City Barons</td><td>85,44%</td></tr>
<tr><td>3</td><td>Mercer Island Hafgufa</td><td>84,97%</td></tr>
<tr><td>4</td><td>Henderson Silver Knights</td><td>83,82%</td></tr>
<tr><td>5</td><td>Adirondack Phantoms</td><td>83,77%</td></tr>
<tr><td>6</td><td>Houston Aeros</td><td>83,33%</td></tr>
<tr><td>7</td><td>Laval Chiefs</td><td>83,06%</td></tr>
<tr><td>8</td><td>Grand Rapids Griffins</td><td>82,99%</td></tr>
<tr><td>9</td><td>San Antonio Rampage</td><td>82,88%</td></tr>
<tr><td>10</td><td>Wilkes-Barre/Scranton Penguins</td><td>82,79%</td></tr>
<tr><td>11</td><td>Chicoutimi Saguenéens</td><td>82,64%</td></tr>
<tr><td>12</td><td>Norfolk Admirals</td><td>82,37%</td></tr>
<tr><td>13</td><td>Providence Bruins</td><td>82,05%</td></tr>
<tr><td>14</td><td>Bridgeport Sound Tigers</td><td>81,85%</td></tr>
<tr><td>15</td><td>Rockford IceHogs</td><td>81,60%</td></tr>
<tr><td>16</td><td>Nunavik Natturaliit</td><td>80,44%</td></tr>
<tr><td>17</td><td>Manitoba Moose</td><td>80,07%</td></tr>
<tr><td>18</td><td>Gatineau Olympiques</td><td>79,52%</td></tr>
<tr><td>19</td><td>Milwaukee Admirals</td><td>79,49%</td></tr>
<tr><td>20</td><td>Charlotte Checkers</td><td>79,02%</td></tr>
<tr><td>21</td><td>The Nuuk Vikings</td><td>78,99%</td></tr>
<tr><td>22</td><td>Joliette Sportif</td><td>78,85%</td></tr>
<tr><td>23</td><td>Peoria Rivermen</td><td>78,82%</td></tr>
<tr><td>24</td><td>Rouyn-Noranda Huskies</td><td>78,79%</td></tr>
<tr><td>25</td><td>Chicago Wolves</td><td>78,76%</td></tr>
<tr><td>26</td><td>Roberval Dwarfs</td><td>78,65%</td></tr>
<tr><td>27</td><td>CCCP Red Army</td><td>78,46%</td></tr>
<tr><td>28</td><td>Springfield Falcons</td><td>78,43%</td></tr>
<tr><td>29</td><td>Rochester Americans</td><td>78,16%</td></tr>
<tr><td>30</td><td>Trois-Rivières Lions</td><td>78,15%</td></tr>
<tr><td>31</td><td>Lake Erie Monsters</td><td>78,02%</td></tr>
<tr><td>32</td><td>Albany Devils</td><td>77,12%</td></tr>
<tr><td>33</td><td>Binghamton Senators</td><td>77,11%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Mercer Island Hafgufa</td><td>107,49%</td></tr>
<tr><td>2</td><td>Oklahoma City Barons</td><td>107,04%</td></tr>
<tr><td>3</td><td>San Antonio Rampage</td><td>105,02%</td></tr>
<tr><td>4</td><td>Adirondack Phantoms</td><td>104,18%</td></tr>
<tr><td>5</td><td>Houston Aeros</td><td>104,09%</td></tr>
<tr><td>6</td><td>Rockford IceHogs</td><td>103,40%</td></tr>
<tr><td>7</td><td>Grand Rapids Griffins</td><td>103,20%</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>102,42%</td></tr>
<tr><td>9</td><td>Norfolk Admirals</td><td>102,30%</td></tr>
<tr><td>10</td><td>Trois-Rivières Lions</td><td>102,08%</td></tr>
<tr><td>11</td><td>Henderson Silver Knights</td><td>101,62%</td></tr>
<tr><td>12</td><td>Laval Chiefs</td><td>101,21%</td></tr>
<tr><td>13</td><td>Rochester Americans</td><td>101,15%</td></tr>
<tr><td>14</td><td>Chicoutimi Saguenéens</td><td>101,09%</td></tr>
<tr><td>15</td><td>Gatineau Olympiques</td><td>100,92%</td></tr>
<tr><td>16</td><td>CCCP Red Army</td><td>99,83%</td></tr>
<tr><td>17</td><td>Binghamton Senators</td><td>99,58%</td></tr>
<tr><td>18</td><td>Wilkes-Barre/Scranton Penguins</td><td>99,28%</td></tr>
<tr><td>19</td><td>Bridgeport Sound Tigers</td><td>98,74%</td></tr>
<tr><td>20</td><td>The Nuuk Vikings</td><td>98,72%</td></tr>
<tr><td>21</td><td>Rouyn-Noranda Huskies</td><td>98,42%</td></tr>
<tr><td>22</td><td>Peoria Rivermen</td><td>97,87%</td></tr>
<tr><td>23</td><td>Lake Erie Monsters</td><td>97,87%</td></tr>
<tr><td>24</td><td>Milwaukee Admirals</td><td>97,57%</td></tr>
<tr><td>25</td><td>Providence Bruins</td><td>97,29%</td></tr>
<tr><td>26</td><td>Manitoba Moose</td><td>97,25%</td></tr>
<tr><td>27</td><td>Nunavik Natturaliit</td><td>96,99%</td></tr>
<tr><td>28</td><td>Joliette Sportif</td><td>96,90%</td></tr>
<tr><td>29</td><td>Roberval Dwarfs</td><td>96,70%</td></tr>
<tr><td>30</td><td>Chicago Wolves</td><td>96,50%</td></tr>
<tr><td>31</td><td>Charlotte Checkers</td><td>95,26%</td></tr>
<tr><td>32</td><td>Springfield Falcons</td><td>94,28%</td></tr>
<tr><td>33</td><td>Albany Devils</td><td>93,97%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30,07</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Roberval Dwarfs</td><td>31,87</td></tr>
<tr><td>2</td><td>The Nuuk Vikings</td><td>31,23</td></tr>
<tr><td>3</td><td>Rochester Americans</td><td>31,06</td></tr>
<tr><td>4</td><td>Binghamton Senators</td><td>30,94</td></tr>
<tr><td>5</td><td>Mercer Island Hafgufa</td><td>30,89</td></tr>
<tr><td>6</td><td>Rouyn-Noranda Huskies</td><td>30,88</td></tr>
<tr><td>7</td><td>Grand Rapids Griffins</td><td>30,73</td></tr>
<tr><td>8</td><td>Trois-Rivières Lions</td><td>30,73</td></tr>
<tr><td>9</td><td>Nunavik Natturaliit</td><td>30,68</td></tr>
<tr><td>10</td><td>Connecticut Whale</td><td>30,65</td></tr>
<tr><td>11</td><td>Oklahoma City Barons</td><td>30,61</td></tr>
<tr><td>12</td><td>Chicoutimi Saguenéens</td><td>30,61</td></tr>
<tr><td>13</td><td>Milwaukee Admirals</td><td>30,50</td></tr>
<tr><td>14</td><td>Henderson Silver Knights</td><td>30,49</td></tr>
<tr><td>15</td><td>Laval Chiefs</td><td>30,43</td></tr>
<tr><td>16</td><td>Wilkes-Barre/Scranton Penguins</td><td>30,30</td></tr>
<tr><td>17</td><td>Chicago Wolves</td><td>30,29</td></tr>
<tr><td>18</td><td>Gatineau Olympiques</td><td>30,24</td></tr>
<tr><td>19</td><td>Providence Bruins</td><td>30,22</td></tr>
<tr><td>20</td><td>San Antonio Rampage</td><td>30,21</td></tr>
<tr><td>21</td><td>Rockford IceHogs</td><td>30,13</td></tr>
<tr><td>22</td><td>Charlotte Checkers</td><td>30,09</td></tr>
<tr><td>23</td><td>Houston Aeros</td><td>29,88</td></tr>
<tr><td>24</td><td>CCCP Red Army</td><td>29,68</td></tr>
<tr><td>25</td><td>Springfield Falcons</td><td>29,41</td></tr>
<tr><td>26</td><td>Norfolk Admirals</td><td>29,22</td></tr>
<tr><td>27</td><td>Bridgeport Sound Tigers</td><td>28,88</td></tr>
<tr><td>28</td><td>Adirondack Phantoms</td><td>28,85</td></tr>
<tr><td>29</td><td>Lake Erie Monsters</td><td>28,71</td></tr>
<tr><td>30</td><td>Joliette Sportif</td><td>28,60</td></tr>
<tr><td>31</td><td>Albany Devils</td><td>28,54</td></tr>
<tr><td>32</td><td>Manitoba Moose</td><td>28,45</td></tr>
<tr><td>33</td><td>Peoria Rivermen</td><td>28,16</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30,07</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Gatineau Olympiques</td><td>27,90</td></tr>
<tr><td>2</td><td>Grand Rapids Griffins</td><td>28,12</td></tr>
<tr><td>3</td><td>Laval Chiefs</td><td>28,90</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>28,91</td></tr>
<tr><td>5</td><td>Norfolk Admirals</td><td>29,18</td></tr>
<tr><td>6</td><td>Oklahoma City Barons</td><td>29,20</td></tr>
<tr><td>7</td><td>Connecticut Whale</td><td>29,41</td></tr>
<tr><td>8</td><td>Milwaukee Admirals</td><td>29,41</td></tr>
<tr><td>9</td><td>Manitoba Moose</td><td>29,48</td></tr>
<tr><td>10</td><td>Wilkes-Barre/Scranton Penguins</td><td>29,48</td></tr>
<tr><td>11</td><td>Henderson Silver Knights</td><td>29,61</td></tr>
<tr><td>12</td><td>Nunavik Natturaliit</td><td>29,62</td></tr>
<tr><td>13</td><td>Joliette Sportif</td><td>29,73</td></tr>
<tr><td>14</td><td>Chicoutimi Saguenéens</td><td>29,74</td></tr>
<tr><td>15</td><td>Charlotte Checkers</td><td>29,96</td></tr>
<tr><td>16</td><td>Bridgeport Sound Tigers</td><td>30,07</td></tr>
<tr><td>17</td><td>CCCP Red Army</td><td>30,11</td></tr>
<tr><td>18</td><td>Roberval Dwarfs</td><td>30,16</td></tr>
<tr><td>19</td><td>Albany Devils</td><td>30,29</td></tr>
<tr><td>20</td><td>Rouyn-Noranda Huskies</td><td>30,34</td></tr>
<tr><td>21</td><td>Rochester Americans</td><td>30,34</td></tr>
<tr><td>22</td><td>San Antonio Rampage</td><td>30,41</td></tr>
<tr><td>23</td><td>Trois-Rivières Lions</td><td>30,51</td></tr>
<tr><td>24</td><td>Providence Bruins</td><td>30,52</td></tr>
<tr><td>25</td><td>Binghamton Senators</td><td>30,71</td></tr>
<tr><td>26</td><td>Rockford IceHogs</td><td>30,80</td></tr>
<tr><td>27</td><td>Houston Aeros</td><td>30,83</td></tr>
<tr><td>28</td><td>Springfield Falcons</td><td>30,95</td></tr>
<tr><td>29</td><td>Mercer Island Hafgufa</td><td>31,23</td></tr>
<tr><td>30</td><td>Lake Erie Monsters</td><td>31,38</td></tr>
<tr><td>31</td><td>Adirondack Phantoms</td><td>31,52</td></tr>
<tr><td>32</td><td>Peoria Rivermen</td><td>31,60</td></tr>
<tr><td>33</td><td>The Nuuk Vikings</td><td>31,70</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Grand Rapids Griffins</td><td>109,28%</td></tr>
<tr><td>2</td><td>Gatineau Olympiques</td><td>108,39%</td></tr>
<tr><td>3</td><td>Roberval Dwarfs</td><td>105,66%</td></tr>
<tr><td>4</td><td>Laval Chiefs</td><td>105,27%</td></tr>
<tr><td>5</td><td>Oklahoma City Barons</td><td>104,85%</td></tr>
<tr><td>6</td><td>Chicago Wolves</td><td>104,77%</td></tr>
<tr><td>7</td><td>Connecticut Whale</td><td>104,19%</td></tr>
<tr><td>8</td><td>Milwaukee Admirals</td><td>103,69%</td></tr>
<tr><td>9</td><td>Nunavik Natturaliit</td><td>103,58%</td></tr>
<tr><td>10</td><td>Henderson Silver Knights</td><td>102,97%</td></tr>
<tr><td>11</td><td>Chicoutimi Saguenéens</td><td>102,91%</td></tr>
<tr><td>12</td><td>Wilkes-Barre/Scranton Penguins</td><td>102,81%</td></tr>
<tr><td>13</td><td>Rochester Americans</td><td>102,37%</td></tr>
<tr><td>14</td><td>Rouyn-Noranda Huskies</td><td>101,77%</td></tr>
<tr><td>15</td><td>Binghamton Senators</td><td>100,75%</td></tr>
<tr><td>16</td><td>Trois-Rivières Lions</td><td>100,72%</td></tr>
<tr><td>17</td><td>Charlotte Checkers</td><td>100,41%</td></tr>
<tr><td>18</td><td>Norfolk Admirals</td><td>100,13%</td></tr>
<tr><td>19</td><td>San Antonio Rampage</td><td>99,32%</td></tr>
<tr><td>20</td><td>Providence Bruins</td><td>99,00%</td></tr>
<tr><td>21</td><td>Mercer Island Hafgufa</td><td>98,91%</td></tr>
<tr><td>22</td><td>CCCP Red Army</td><td>98,58%</td></tr>
<tr><td>23</td><td>The Nuuk Vikings</td><td>98,54%</td></tr>
<tr><td>24</td><td>Rockford IceHogs</td><td>97,82%</td></tr>
<tr><td>25</td><td>Houston Aeros</td><td>96,91%</td></tr>
<tr><td>26</td><td>Manitoba Moose</td><td>96,52%</td></tr>
<tr><td>27</td><td>Joliette Sportif</td><td>96,19%</td></tr>
<tr><td>28</td><td>Bridgeport Sound Tigers</td><td>96,03%</td></tr>
<tr><td>29</td><td>Springfield Falcons</td><td>95,04%</td></tr>
<tr><td>30</td><td>Albany Devils</td><td>94,20%</td></tr>
<tr><td>31</td><td>Adirondack Phantoms</td><td>91,53%</td></tr>
<tr><td>32</td><td>Lake Erie Monsters</td><td>91,49%</td></tr>
<tr><td>33</td><td>Peoria Rivermen</td><td>89,12%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7,43</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Roberval Dwarfs</td><td>5,10</td></tr>
<tr><td>2</td><td>The Nuuk Vikings</td><td>6,50</td></tr>
<tr><td>3</td><td>CCCP Red Army</td><td>6,62</td></tr>
<tr><td>4</td><td>Gatineau Olympiques</td><td>6,63</td></tr>
<tr><td>5</td><td>Laval Chiefs</td><td>6,66</td></tr>
<tr><td>6</td><td>Grand Rapids Griffins</td><td>6,67</td></tr>
<tr><td>7</td><td>Wilkes-Barre/Scranton Penguins</td><td>6,80</td></tr>
<tr><td>8</td><td>San Antonio Rampage</td><td>7,01</td></tr>
<tr><td>9</td><td>Rouyn-Noranda Huskies</td><td>7,02</td></tr>
<tr><td>10</td><td>Providence Bruins</td><td>7,20</td></tr>
<tr><td>11</td><td>Rochester Americans</td><td>7,24</td></tr>
<tr><td>12</td><td>Albany Devils</td><td>7,27</td></tr>
<tr><td>13</td><td>Oklahoma City Barons</td><td>7,27</td></tr>
<tr><td>14</td><td>Adirondack Phantoms</td><td>7,37</td></tr>
<tr><td>15</td><td>Norfolk Admirals</td><td>7,38</td></tr>
<tr><td>16</td><td>Connecticut Whale</td><td>7,38</td></tr>
<tr><td>17</td><td>Chicago Wolves</td><td>7,44</td></tr>
<tr><td>18</td><td>Joliette Sportif</td><td>7,54</td></tr>
<tr><td>19</td><td>Henderson Silver Knights</td><td>7,56</td></tr>
<tr><td>20</td><td>Charlotte Checkers</td><td>7,61</td></tr>
<tr><td>21</td><td>Nunavik Natturaliit</td><td>7,65</td></tr>
<tr><td>22</td><td>Mercer Island Hafgufa</td><td>7,67</td></tr>
<tr><td>23</td><td>Binghamton Senators</td><td>7,73</td></tr>
<tr><td>24</td><td>Peoria Rivermen</td><td>7,88</td></tr>
<tr><td>25</td><td>Rockford IceHogs</td><td>7,88</td></tr>
<tr><td>26</td><td>Manitoba Moose</td><td>7,89</td></tr>
<tr><td>27</td><td>Milwaukee Admirals</td><td>7,95</td></tr>
<tr><td>28</td><td>Houston Aeros</td><td>8,07</td></tr>
<tr><td>29</td><td>Chicoutimi Saguenéens</td><td>8,10</td></tr>
<tr><td>30</td><td>Springfield Falcons</td><td>8,21</td></tr>
<tr><td>31</td><td>Bridgeport Sound Tigers</td><td>8,59</td></tr>
<tr><td>32</td><td>Lake Erie Monsters</td><td>8,71</td></tr>
<tr><td>33</td><td>Trois-Rivières Lions</td><td>8,74</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,32</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Trois-Rivières Lions</td><td>20,54</td></tr>
<tr><td>2</td><td>Mercer Island Hafgufa</td><td>20,37</td></tr>
<tr><td>3</td><td>Manitoba Moose</td><td>20,22</td></tr>
<tr><td>4</td><td>Springfield Falcons</td><td>20,05</td></tr>
<tr><td>5</td><td>The Nuuk Vikings</td><td>19,96</td></tr>
<tr><td>6</td><td>Rockford IceHogs</td><td>19,95</td></tr>
<tr><td>7</td><td>Chicoutimi Saguenéens</td><td>19,84</td></tr>
<tr><td>8</td><td>Nunavik Natturaliit</td><td>19,82</td></tr>
<tr><td>9</td><td>Peoria Rivermen</td><td>19,82</td></tr>
<tr><td>10</td><td>Rochester Americans</td><td>19,76</td></tr>
<tr><td>11</td><td>Charlotte Checkers</td><td>19,70</td></tr>
<tr><td>12</td><td>Providence Bruins</td><td>19,66</td></tr>
<tr><td>13</td><td>Lake Erie Monsters</td><td>19,66</td></tr>
<tr><td>14</td><td>Oklahoma City Barons</td><td>19,61</td></tr>
<tr><td>15</td><td>Houston Aeros</td><td>19,55</td></tr>
<tr><td>16</td><td>Adirondack Phantoms</td><td>19,50</td></tr>
<tr><td>17</td><td>Albany Devils</td><td>19,43</td></tr>
<tr><td>18</td><td>Bridgeport Sound Tigers</td><td>19,43</td></tr>
<tr><td>19</td><td>CCCP Red Army</td><td>19,41</td></tr>
<tr><td>20</td><td>Binghamton Senators</td><td>19,40</td></tr>
<tr><td>21</td><td>Connecticut Whale</td><td>19,29</td></tr>
<tr><td>22</td><td>San Antonio Rampage</td><td>19,15</td></tr>
<tr><td>23</td><td>Chicago Wolves</td><td>19,02</td></tr>
<tr><td>24</td><td>Rouyn-Noranda Huskies</td><td>18,99</td></tr>
<tr><td>25</td><td>Gatineau Olympiques</td><td>18,94</td></tr>
<tr><td>26</td><td>Norfolk Admirals</td><td>18,82</td></tr>
<tr><td>27</td><td>Wilkes-Barre/Scranton Penguins</td><td>18,72</td></tr>
<tr><td>28</td><td>Joliette Sportif</td><td>18,68</td></tr>
<tr><td>29</td><td>Henderson Silver Knights</td><td>18,63</td></tr>
<tr><td>30</td><td>Laval Chiefs</td><td>18,35</td></tr>
<tr><td>31</td><td>Milwaukee Admirals</td><td>18,20</td></tr>
<tr><td>32</td><td>Grand Rapids Griffins</td><td>17,93</td></tr>
<tr><td>33</td><td>Roberval Dwarfs</td><td>17,27</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Milwaukee Admirals</td><td>52,35%</td></tr>
<tr><td>2</td><td>Grand Rapids Griffins</td><td>52,18%</td></tr>
<tr><td>3</td><td>Roberval Dwarfs</td><td>52,01%</td></tr>
<tr><td>4</td><td>Laval Chiefs</td><td>51,69%</td></tr>
<tr><td>5</td><td>Nunavik Natturaliit</td><td>51,52%</td></tr>
<tr><td>6</td><td>Joliette Sportif</td><td>51,35%</td></tr>
<tr><td>7</td><td>Adirondack Phantoms</td><td>51,18%</td></tr>
<tr><td>8</td><td>Albany Devils</td><td>51,11%</td></tr>
<tr><td>9</td><td>Henderson Silver Knights</td><td>51,05%</td></tr>
<tr><td>10</td><td>Providence Bruins</td><td>51,00%</td></tr>
<tr><td>11</td><td>Chicago Wolves</td><td>50,75%</td></tr>
<tr><td>12</td><td>Lake Erie Monsters</td><td>50,70%</td></tr>
<tr><td>13</td><td>Norfolk Admirals</td><td>50,65%</td></tr>
<tr><td>14</td><td>Bridgeport Sound Tigers</td><td>50,63%</td></tr>
<tr><td>15</td><td>Rochester Americans</td><td>50,59%</td></tr>
<tr><td>16</td><td>Charlotte Checkers</td><td>50,53%</td></tr>
<tr><td>17</td><td>Trois-Rivières Lions</td><td>50,42%</td></tr>
<tr><td>18</td><td>Binghamton Senators</td><td>50,37%</td></tr>
<tr><td>19</td><td>Gatineau Olympiques</td><td>50,32%</td></tr>
<tr><td>20</td><td>Houston Aeros</td><td>50,30%</td></tr>
<tr><td>21</td><td>San Antonio Rampage</td><td>50,28%</td></tr>
<tr><td>22</td><td>Manitoba Moose</td><td>50,28%</td></tr>
<tr><td>23</td><td>Connecticut Whale</td><td>50,21%</td></tr>
<tr><td>24</td><td>Peoria Rivermen</td><td>50,06%</td></tr>
<tr><td>25</td><td>Rockford IceHogs</td><td>50,05%</td></tr>
<tr><td>26</td><td>Chicoutimi Saguenéens</td><td>49,91%</td></tr>
<tr><td>27</td><td>Wilkes-Barre/Scranton Penguins</td><td>49,70%</td></tr>
<tr><td>28</td><td>CCCP Red Army</td><td>49,50%</td></tr>
<tr><td>29</td><td>Springfield Falcons</td><td>49,42%</td></tr>
<tr><td>30</td><td>Oklahoma City Barons</td><td>49,41%</td></tr>
<tr><td>31</td><td>Rouyn-Noranda Huskies</td><td>49,27%</td></tr>
<tr><td>32</td><td>Mercer Island Hafgufa</td><td>48,77%</td></tr>
<tr><td>33</td><td>The Nuuk Vikings</td><td>48,60%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
