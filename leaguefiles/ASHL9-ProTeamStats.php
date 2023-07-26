<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Stats</title>
<script src="ASHL9.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - ASHL9-STHS.db - ASHL9-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL9.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL9-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL9-STHSCareerStat.db";
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
<tr><td>Anaheim Ducks</td><td>82</td><td>32</td><td>33</td><td>4</td><td>7</td><td>3</td><td>3</td><td>256</td><td>260</td><td>41</td><td>18</td><td>16</td><td>2</td><td>3</td><td>1</td><td>1</td><td>126</td><td>131</td><td>41</td><td>14</td><td>17</td><td>2</td><td>4</td><td>2</td><td>2</td><td>130</td><td>129</td><td>256</td><td>466</td><td>722</td></tr>
<tr><td>Arizona Coyotes</td><td>82</td><td>29</td><td>32</td><td>6</td><td>7</td><td>6</td><td>2</td><td>243</td><td>231</td><td>41</td><td>13</td><td>14</td><td>4</td><td>5</td><td>5</td><td>0</td><td>119</td><td>104</td><td>41</td><td>16</td><td>18</td><td>2</td><td>2</td><td>1</td><td>2</td><td>124</td><td>127</td><td>243</td><td>431</td><td>674</td></tr>
<tr><td>Boston Bruins</td><td>82</td><td>32</td><td>37</td><td>6</td><td>2</td><td>1</td><td>4</td><td>243</td><td>252</td><td>41</td><td>18</td><td>15</td><td>4</td><td>1</td><td>1</td><td>2</td><td>128</td><td>111</td><td>41</td><td>14</td><td>22</td><td>2</td><td>1</td><td>0</td><td>2</td><td>115</td><td>141</td><td>243</td><td>443</td><td>686</td></tr>
<tr><td>Buffalo Sabres</td><td>82</td><td>39</td><td>27</td><td>4</td><td>7</td><td>1</td><td>4</td><td>255</td><td>238</td><td>41</td><td>20</td><td>11</td><td>2</td><td>4</td><td>1</td><td>3</td><td>131</td><td>114</td><td>41</td><td>19</td><td>16</td><td>2</td><td>3</td><td>0</td><td>1</td><td>124</td><td>124</td><td>255</td><td>470</td><td>725</td></tr>
<tr><td>Calgary Flames</td><td>82</td><td>35</td><td>33</td><td>6</td><td>3</td><td>3</td><td>2</td><td>237</td><td>236</td><td>41</td><td>18</td><td>18</td><td>2</td><td>1</td><td>2</td><td>0</td><td>114</td><td>115</td><td>41</td><td>17</td><td>15</td><td>4</td><td>2</td><td>1</td><td>2</td><td>123</td><td>121</td><td>237</td><td>428</td><td>665</td></tr>
<tr><td>Carolina Hurricanes</td><td>82</td><td>33</td><td>39</td><td>3</td><td>3</td><td>2</td><td>2</td><td>245</td><td>253</td><td>41</td><td>16</td><td>21</td><td>1</td><td>1</td><td>2</td><td>0</td><td>122</td><td>123</td><td>41</td><td>17</td><td>18</td><td>2</td><td>2</td><td>0</td><td>2</td><td>123</td><td>130</td><td>245</td><td>446</td><td>691</td></tr>
<tr><td>Chicago Blackhawks</td><td>82</td><td>24</td><td>45</td><td>6</td><td>2</td><td>4</td><td>1</td><td>200</td><td>252</td><td>40</td><td>13</td><td>21</td><td>1</td><td>1</td><td>3</td><td>1</td><td>94</td><td>117</td><td>42</td><td>11</td><td>24</td><td>5</td><td>1</td><td>1</td><td>0</td><td>106</td><td>135</td><td>200</td><td>356</td><td>556</td></tr>
<tr><td>Colorado Avalanche</td><td>82</td><td>33</td><td>35</td><td>7</td><td>4</td><td>2</td><td>1</td><td>258</td><td>258</td><td>41</td><td>12</td><td>19</td><td>6</td><td>2</td><td>1</td><td>1</td><td>125</td><td>130</td><td>41</td><td>21</td><td>16</td><td>1</td><td>2</td><td>1</td><td>0</td><td>133</td><td>128</td><td>258</td><td>453</td><td>711</td></tr>
<tr><td>Columbus Blue Jackets</td><td>82</td><td>27</td><td>36</td><td>7</td><td>7</td><td>2</td><td>3</td><td>236</td><td>266</td><td>42</td><td>21</td><td>13</td><td>1</td><td>5</td><td>2</td><td>0</td><td>128</td><td>117</td><td>40</td><td>6</td><td>23</td><td>6</td><td>2</td><td>0</td><td>3</td><td>108</td><td>149</td><td>236</td><td>435</td><td>671</td></tr>
<tr><td>Dallas Stars</td><td>82</td><td>32</td><td>30</td><td>8</td><td>2</td><td>5</td><td>5</td><td>246</td><td>257</td><td>40</td><td>17</td><td>12</td><td>6</td><td>0</td><td>1</td><td>4</td><td>126</td><td>117</td><td>42</td><td>15</td><td>18</td><td>2</td><td>2</td><td>4</td><td>1</td><td>120</td><td>140</td><td>246</td><td>439</td><td>685</td></tr>
<tr><td>Detroit Red Wings</td><td>82</td><td>33</td><td>31</td><td>8</td><td>4</td><td>4</td><td>2</td><td>238</td><td>226</td><td>41</td><td>14</td><td>15</td><td>6</td><td>3</td><td>3</td><td>0</td><td>116</td><td>114</td><td>41</td><td>19</td><td>16</td><td>2</td><td>1</td><td>1</td><td>2</td><td>122</td><td>112</td><td>238</td><td>434</td><td>672</td></tr>
<tr><td>Edmonton Oilers</td><td>82</td><td>26</td><td>42</td><td>5</td><td>6</td><td>2</td><td>1</td><td>229</td><td>259</td><td>41</td><td>14</td><td>20</td><td>1</td><td>4</td><td>1</td><td>1</td><td>117</td><td>133</td><td>41</td><td>12</td><td>22</td><td>4</td><td>2</td><td>1</td><td>0</td><td>112</td><td>126</td><td>229</td><td>403</td><td>632</td></tr>
<tr><td>Florida Panthers</td><td>82</td><td>41</td><td>30</td><td>6</td><td>3</td><td>0</td><td>2</td><td>256</td><td>220</td><td>41</td><td>23</td><td>15</td><td>1</td><td>1</td><td>0</td><td>1</td><td>127</td><td>103</td><td>41</td><td>18</td><td>15</td><td>5</td><td>2</td><td>0</td><td>1</td><td>129</td><td>117</td><td>256</td><td>469</td><td>725</td></tr>
<tr><td>Los Angeles Kings</td><td>82</td><td>42</td><td>22</td><td>7</td><td>6</td><td>2</td><td>3</td><td>298</td><td>232</td><td>41</td><td>22</td><td>9</td><td>3</td><td>2</td><td>2</td><td>3</td><td>151</td><td>123</td><td>41</td><td>20</td><td>13</td><td>4</td><td>4</td><td>0</td><td>0</td><td>147</td><td>109</td><td>298</td><td>544</td><td>842</td></tr>
<tr><td>Minnesota Wild</td><td>82</td><td>26</td><td>37</td><td>5</td><td>8</td><td>4</td><td>2</td><td>210</td><td>239</td><td>41</td><td>15</td><td>20</td><td>3</td><td>2</td><td>0</td><td>1</td><td>108</td><td>118</td><td>41</td><td>11</td><td>17</td><td>2</td><td>6</td><td>4</td><td>1</td><td>102</td><td>121</td><td>210</td><td>379</td><td>589</td></tr>
<tr><td>Montreal Canadiens</td><td>82</td><td>40</td><td>30</td><td>5</td><td>3</td><td>2</td><td>2</td><td>242</td><td>224</td><td>40</td><td>22</td><td>12</td><td>0</td><td>3</td><td>2</td><td>1</td><td>125</td><td>102</td><td>42</td><td>18</td><td>18</td><td>5</td><td>0</td><td>0</td><td>1</td><td>117</td><td>122</td><td>242</td><td>440</td><td>682</td></tr>
<tr><td>Nashville Predators</td><td>82</td><td>30</td><td>38</td><td>5</td><td>3</td><td>3</td><td>3</td><td>234</td><td>254</td><td>41</td><td>14</td><td>22</td><td>2</td><td>1</td><td>1</td><td>1</td><td>115</td><td>132</td><td>41</td><td>16</td><td>16</td><td>3</td><td>2</td><td>2</td><td>2</td><td>119</td><td>122</td><td>234</td><td>428</td><td>662</td></tr>
<tr><td>New Jersey Devils</td><td>82</td><td>25</td><td>43</td><td>2</td><td>7</td><td>3</td><td>2</td><td>234</td><td>259</td><td>41</td><td>13</td><td>21</td><td>1</td><td>5</td><td>0</td><td>1</td><td>120</td><td>133</td><td>41</td><td>12</td><td>22</td><td>1</td><td>2</td><td>3</td><td>1</td><td>114</td><td>126</td><td>234</td><td>427</td><td>661</td></tr>
<tr><td>New York Islanders</td><td>82</td><td>23</td><td>41</td><td>5</td><td>6</td><td>4</td><td>3</td><td>230</td><td>252</td><td>41</td><td>11</td><td>19</td><td>5</td><td>5</td><td>1</td><td>0</td><td>112</td><td>126</td><td>41</td><td>12</td><td>22</td><td>0</td><td>1</td><td>3</td><td>3</td><td>118</td><td>126</td><td>230</td><td>418</td><td>648</td></tr>
<tr><td>New York Rangers</td><td>82</td><td>40</td><td>28</td><td>2</td><td>4</td><td>4</td><td>4</td><td>286</td><td>261</td><td>41</td><td>19</td><td>12</td><td>2</td><td>2</td><td>3</td><td>3</td><td>144</td><td>126</td><td>41</td><td>21</td><td>16</td><td>0</td><td>2</td><td>1</td><td>1</td><td>142</td><td>135</td><td>286</td><td>502</td><td>788</td></tr>
<tr><td>Ottawa Senators</td><td>82</td><td>30</td><td>43</td><td>3</td><td>1</td><td>2</td><td>3</td><td>230</td><td>256</td><td>40</td><td>14</td><td>23</td><td>1</td><td>0</td><td>0</td><td>2</td><td>117</td><td>129</td><td>42</td><td>16</td><td>20</td><td>2</td><td>1</td><td>2</td><td>1</td><td>113</td><td>127</td><td>230</td><td>420</td><td>650</td></tr>
<tr><td>Philadelphia Flyers</td><td>82</td><td>33</td><td>32</td><td>4</td><td>8</td><td>1</td><td>4</td><td>240</td><td>244</td><td>41</td><td>16</td><td>15</td><td>3</td><td>4</td><td>1</td><td>2</td><td>128</td><td>129</td><td>41</td><td>17</td><td>17</td><td>1</td><td>4</td><td>0</td><td>2</td><td>112</td><td>115</td><td>240</td><td>427</td><td>667</td></tr>
<tr><td>Pittsburgh Penguins</td><td>82</td><td>39</td><td>30</td><td>3</td><td>1</td><td>7</td><td>2</td><td>285</td><td>248</td><td>42</td><td>22</td><td>12</td><td>2</td><td>1</td><td>5</td><td>0</td><td>161</td><td>126</td><td>40</td><td>17</td><td>18</td><td>1</td><td>0</td><td>2</td><td>2</td><td>124</td><td>122</td><td>285</td><td>514</td><td>799</td></tr>
<tr><td>Quebec Nordiques</td><td>82</td><td>37</td><td>26</td><td>5</td><td>7</td><td>3</td><td>4</td><td>259</td><td>248</td><td>42</td><td>19</td><td>13</td><td>2</td><td>5</td><td>2</td><td>1</td><td>125</td><td>124</td><td>40</td><td>18</td><td>13</td><td>3</td><td>2</td><td>1</td><td>3</td><td>134</td><td>124</td><td>259</td><td>476</td><td>735</td></tr>
<tr><td>San Jose Sharks</td><td>82</td><td>38</td><td>31</td><td>4</td><td>4</td><td>2</td><td>3</td><td>266</td><td>246</td><td>40</td><td>20</td><td>12</td><td>1</td><td>4</td><td>1</td><td>2</td><td>135</td><td>123</td><td>42</td><td>18</td><td>19</td><td>3</td><td>0</td><td>1</td><td>1</td><td>131</td><td>123</td><td>266</td><td>484</td><td>750</td></tr>
<tr><td>Seattle Saints</td><td>82</td><td>36</td><td>32</td><td>2</td><td>6</td><td>3</td><td>3</td><td>241</td><td>239</td><td>41</td><td>19</td><td>16</td><td>1</td><td>3</td><td>2</td><td>0</td><td>130</td><td>123</td><td>41</td><td>17</td><td>16</td><td>1</td><td>3</td><td>1</td><td>3</td><td>111</td><td>116</td><td>241</td><td>434</td><td>675</td></tr>
<tr><td>St. Louis Blues</td><td>82</td><td>41</td><td>25</td><td>5</td><td>6</td><td>2</td><td>3</td><td>259</td><td>229</td><td>40</td><td>22</td><td>11</td><td>3</td><td>0</td><td>2</td><td>2</td><td>133</td><td>101</td><td>42</td><td>19</td><td>14</td><td>2</td><td>6</td><td>0</td><td>1</td><td>126</td><td>128</td><td>259</td><td>466</td><td>725</td></tr>
<tr><td>Tampa Bay Lightning</td><td>82</td><td>37</td><td>32</td><td>1</td><td>7</td><td>2</td><td>3</td><td>261</td><td>278</td><td>42</td><td>21</td><td>15</td><td>0</td><td>4</td><td>0</td><td>2</td><td>134</td><td>136</td><td>40</td><td>16</td><td>17</td><td>1</td><td>3</td><td>2</td><td>1</td><td>127</td><td>142</td><td>261</td><td>470</td><td>731</td></tr>
<tr><td>Toronto Maple Leafs</td><td>82</td><td>32</td><td>35</td><td>1</td><td>4</td><td>3</td><td>7</td><td>239</td><td>258</td><td>41</td><td>22</td><td>12</td><td>1</td><td>2</td><td>2</td><td>2</td><td>133</td><td>113</td><td>41</td><td>10</td><td>23</td><td>0</td><td>2</td><td>1</td><td>5</td><td>106</td><td>145</td><td>239</td><td>428</td><td>667</td></tr>
<tr><td>Vancouver Canucks</td><td>82</td><td>37</td><td>33</td><td>5</td><td>5</td><td>1</td><td>1</td><td>259</td><td>256</td><td>42</td><td>16</td><td>20</td><td>3</td><td>3</td><td>0</td><td>0</td><td>125</td><td>140</td><td>40</td><td>21</td><td>13</td><td>2</td><td>2</td><td>1</td><td>1</td><td>134</td><td>116</td><td>259</td><td>468</td><td>727</td></tr>
<tr><td>Vegas Golden Knights</td><td>82</td><td>35</td><td>30</td><td>6</td><td>5</td><td>4</td><td>2</td><td>274</td><td>240</td><td>41</td><td>20</td><td>14</td><td>2</td><td>1</td><td>3</td><td>1</td><td>142</td><td>121</td><td>41</td><td>15</td><td>16</td><td>4</td><td>4</td><td>1</td><td>1</td><td>132</td><td>119</td><td>274</td><td>499</td><td>773</td></tr>
<tr><td>Washington Capitals</td><td>82</td><td>35</td><td>37</td><td>4</td><td>2</td><td>2</td><td>2</td><td>223</td><td>234</td><td>42</td><td>22</td><td>17</td><td>0</td><td>1</td><td>1</td><td>1</td><td>121</td><td>118</td><td>40</td><td>13</td><td>20</td><td>4</td><td>1</td><td>1</td><td>1</td><td>102</td><td>116</td><td>223</td><td>405</td><td>628</td></tr>
<tr><td>Winnipeg Jets</td><td>82</td><td>38</td><td>35</td><td>2</td><td>2</td><td>2</td><td>3</td><td>253</td><td>260</td><td>41</td><td>24</td><td>15</td><td>1</td><td>0</td><td>0</td><td>1</td><td>143</td><td>118</td><td>41</td><td>14</td><td>20</td><td>1</td><td>2</td><td>2</td><td>2</td><td>110</td><td>142</td><td>253</td><td>455</td><td>708</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>ANH</td><td>102</td><td>69</td><td>78</td><td>11</td><td>2702</td><td>891</td><td>857</td><td>918</td><td>59</td><td>2754</td><td>769</td><td>755</td><td>1650</td><td>299</td><td>72</td><td>24,08%</td><td>342</td><td>75</td><td>78,07%</td><td>2</td><td>49,64%</td><td>51,52%</td><td>50,27%</td><td>1978</td><td>1962</td><td>1030</td><td>593</td><td>1361</td><td>511</td><td>1</td><td>2</td></tr>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>87</td><td>70</td><td>74</td><td>17</td><td>2583</td><td>841</td><td>788</td><td>900</td><td>83</td><td>2640</td><td>714</td><td>743</td><td>1577</td><td>272</td><td>49</td><td>18,01%</td><td>322</td><td>53</td><td>83,54%</td><td>4</td><td>49,92%</td><td>52,61%</td><td>51,90%</td><td>1968</td><td>1991</td><td>1030</td><td>598</td><td>1390</td><td>512</td><td>3</td><td>0</td></tr>
<tr><td>Boston Bruins</td><td>BOS</td><td>80</td><td>79</td><td>77</td><td>10</td><td>2615</td><td>821</td><td>888</td><td>863</td><td>63</td><td>2683</td><td>743</td><td>782</td><td>1623</td><td>318</td><td>63</td><td>19,81%</td><td>319</td><td>66</td><td>79,31%</td><td>2</td><td>49,79%</td><td>48,66%</td><td>49,58%</td><td>1987</td><td>1943</td><td>1037</td><td>604</td><td>1344</td><td>517</td><td>5</td><td>5</td></tr>
<tr><td>Buffalo Sabres</td><td>BUF</td><td>90</td><td>85</td><td>75</td><td>5</td><td>2746</td><td>923</td><td>922</td><td>879</td><td>38</td><td>2664</td><td>765</td><td>668</td><td>1581</td><td>299</td><td>64</td><td>21,40%</td><td>290</td><td>53</td><td>81,72%</td><td>5</td><td>50,25%</td><td>50,13%</td><td>54,53%</td><td>1966</td><td>1968</td><td>1030</td><td>591</td><td>1378</td><td>512</td><td>3</td><td>3</td></tr>
<tr><td>Calgary Flames</td><td>CGY</td><td>82</td><td>73</td><td>73</td><td>12</td><td>2673</td><td>865</td><td>868</td><td>910</td><td>48</td><td>2553</td><td>707</td><td>562</td><td>1575</td><td>300</td><td>65</td><td>21,67%</td><td>251</td><td>55</td><td>78,09%</td><td>1</td><td>52,24%</td><td>51,75%</td><td>50,43%</td><td>1953</td><td>1973</td><td>1033</td><td>596</td><td>1378</td><td>515</td><td>2</td><td>1</td></tr>
<tr><td>Carolina Hurricanes</td><td>CAR</td><td>81</td><td>75</td><td>84</td><td>6</td><td>2561</td><td>813</td><td>873</td><td>849</td><td>37</td><td>2650</td><td>780</td><td>682</td><td>1602</td><td>260</td><td>45</td><td>17,31%</td><td>316</td><td>61</td><td>80,70%</td><td>2</td><td>50,55%</td><td>51,16%</td><td>51,98%</td><td>1996</td><td>1916</td><td>1042</td><td>600</td><td>1318</td><td>517</td><td>5</td><td>3</td></tr>
<tr><td>Chicago Blackhawks</td><td>CHI</td><td>68</td><td>62</td><td>60</td><td>12</td><td>2346</td><td>770</td><td>805</td><td>746</td><td>42</td><td>2689</td><td>790</td><td>675</td><td>1529</td><td>292</td><td>47</td><td>16,10%</td><td>310</td><td>58</td><td>81,29%</td><td>1</td><td>53,02%</td><td>51,73%</td><td>51,74%</td><td>1990</td><td>1926</td><td>1041</td><td>605</td><td>1327</td><td>515</td><td>3</td><td>4</td></tr>
<tr><td>Colorado Avalanche</td><td>COL</td><td>81</td><td>85</td><td>83</td><td>12</td><td>2754</td><td>901</td><td>953</td><td>879</td><td>32</td><td>2652</td><td>750</td><td>668</td><td>1559</td><td>331</td><td>55</td><td>16,62%</td><td>284</td><td>50</td><td>82,39%</td><td>5</td><td>50,98%</td><td>52,25%</td><td>51,02%</td><td>2003</td><td>1912</td><td>1038</td><td>604</td><td>1323</td><td>511</td><td>4</td><td>3</td></tr>
<tr><td>Columbus Blue Jackets</td><td>CLB</td><td>76</td><td>75</td><td>76</td><td>12</td><td>2426</td><td>749</td><td>808</td><td>830</td><td>53</td><td>2664</td><td>818</td><td>678</td><td>1514</td><td>292</td><td>58</td><td>19,86%</td><td>298</td><td>66</td><td>77,85%</td><td>1</td><td>50,39%</td><td>49,57%</td><td>51,00%</td><td>1990</td><td>1939</td><td>1047</td><td>603</td><td>1343</td><td>521</td><td>1</td><td>0</td></tr>
<tr><td>Dallas Stars</td><td>DAL</td><td>94</td><td>76</td><td>63</td><td>19</td><td>2555</td><td>825</td><td>833</td><td>841</td><td>86</td><td>2625</td><td>811</td><td>762</td><td>1670</td><td>245</td><td>28</td><td>11,43%</td><td>339</td><td>60</td><td>82,30%</td><td>3</td><td>51,32%</td><td>50,38%</td><td>49,10%</td><td>2001</td><td>1959</td><td>1028</td><td>603</td><td>1362</td><td>505</td><td>1</td><td>3</td></tr>
<tr><td>Detroit Red Wings</td><td>DET</td><td>73</td><td>70</td><td>83</td><td>17</td><td>2497</td><td>826</td><td>823</td><td>813</td><td>58</td><td>2643</td><td>807</td><td>595</td><td>1532</td><td>285</td><td>41</td><td>14,39%</td><td>266</td><td>48</td><td>81,95%</td><td>3</td><td>49,42%</td><td>49,25%</td><td>48,50%</td><td>1998</td><td>1956</td><td>1026</td><td>596</td><td>1370</td><td>514</td><td>4</td><td>0</td></tr>
<tr><td>Edmonton Oilers</td><td>EDM</td><td>83</td><td>75</td><td>64</td><td>9</td><td>2673</td><td>818</td><td>937</td><td>883</td><td>46</td><td>2713</td><td>722</td><td>663</td><td>1654</td><td>314</td><td>49</td><td>15,61%</td><td>293</td><td>56</td><td>80,89%</td><td>1</td><td>49,59%</td><td>48,37%</td><td>48,26%</td><td>1966</td><td>1960</td><td>1034</td><td>600</td><td>1357</td><td>515</td><td>3</td><td>0</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>107</td><td>71</td><td>72</td><td>7</td><td>2607</td><td>890</td><td>853</td><td>846</td><td>26</td><td>2418</td><td>746</td><td>717</td><td>1559</td><td>324</td><td>64</td><td>19,75%</td><td>319</td><td>51</td><td>84,01%</td><td>3</td><td>51,05%</td><td>50,15%</td><td>52,54%</td><td>1922</td><td>1994</td><td>1027</td><td>602</td><td>1383</td><td>512</td><td>3</td><td>1</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>107</td><td>88</td><td>94</td><td>16</td><td>2940</td><td>913</td><td>956</td><td>1030</td><td>63</td><td>2495</td><td>705</td><td>753</td><td>1631</td><td>301</td><td>66</td><td>21,93%</td><td>321</td><td>64</td><td>80,06%</td><td>1</td><td>50,15%</td><td>53,51%</td><td>52,58%</td><td>1882</td><td>2038</td><td>1046</td><td>590</td><td>1421</td><td>526</td><td>4</td><td>2</td></tr>
<tr><td>Minnesota Wild</td><td>MIN</td><td>66</td><td>72</td><td>63</td><td>14</td><td>2498</td><td>831</td><td>880</td><td>748</td><td>63</td><td>2669</td><td>766</td><td>593</td><td>1617</td><td>283</td><td>50</td><td>17,67%</td><td>264</td><td>62</td><td>76,52%</td><td>4</td><td>48,58%</td><td>48,75%</td><td>50,69%</td><td>1988</td><td>1954</td><td>1032</td><td>599</td><td>1359</td><td>515</td><td>2</td><td>0</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>82</td><td>77</td><td>76</td><td>10</td><td>2490</td><td>805</td><td>813</td><td>836</td><td>48</td><td>2548</td><td>749</td><td>792</td><td>1612</td><td>291</td><td>66</td><td>22,68%</td><td>350</td><td>59</td><td>83,14%</td><td>3</td><td>53,15%</td><td>53,14%</td><td>51,70%</td><td>1945</td><td>1981</td><td>1030</td><td>596</td><td>1373</td><td>512</td><td>5</td><td>1</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>84</td><td>78</td><td>64</td><td>14</td><td>2379</td><td>788</td><td>766</td><td>805</td><td>42</td><td>2557</td><td>791</td><td>587</td><td>1465</td><td>287</td><td>50</td><td>17,42%</td><td>258</td><td>48</td><td>81,40%</td><td>4</td><td>51,31%</td><td>49,20%</td><td>50,15%</td><td>1959</td><td>1972</td><td>1031</td><td>595</td><td>1374</td><td>515</td><td>2</td><td>1</td></tr>
<tr><td>New Jersey Devils</td><td>NJD</td><td>88</td><td>67</td><td>74</td><td>7</td><td>2543</td><td>844</td><td>810</td><td>856</td><td>54</td><td>2548</td><td>772</td><td>575</td><td>1492</td><td>298</td><td>50</td><td>16,78%</td><td>265</td><td>53</td><td>80,00%</td><td>0</td><td>48,87%</td><td>48,84%</td><td>49,36%</td><td>1959</td><td>1969</td><td>1034</td><td>597</td><td>1369</td><td>512</td><td>4</td><td>3</td></tr>
<tr><td>New York Islanders</td><td>NYI</td><td>80</td><td>75</td><td>66</td><td>14</td><td>2471</td><td>812</td><td>829</td><td>788</td><td>71</td><td>2689</td><td>840</td><td>707</td><td>1616</td><td>278</td><td>52</td><td>18,71%</td><td>328</td><td>64</td><td>80,49%</td><td>1</td><td>50,39%</td><td>47,56%</td><td>49,92%</td><td>2044</td><td>1901</td><td>1030</td><td>607</td><td>1313</td><td>504</td><td>1</td><td>2</td></tr>
<tr><td>New York Rangers</td><td>NYR</td><td>109</td><td>72</td><td>99</td><td>10</td><td>2775</td><td>877</td><td>884</td><td>978</td><td>67</td><td>2713</td><td>783</td><td>758</td><td>1689</td><td>318</td><td>77</td><td>24,21%</td><td>351</td><td>56</td><td>84,05%</td><td>4</td><td>50,05%</td><td>49,85%</td><td>49,70%</td><td>1972</td><td>1968</td><td>1032</td><td>602</td><td>1369</td><td>511</td><td>2</td><td>4</td></tr>
<tr><td>Ottawa Senators</td><td>OTT</td><td>88</td><td>71</td><td>66</td><td>7</td><td>2534</td><td>817</td><td>854</td><td>835</td><td>45</td><td>2665</td><td>739</td><td>612</td><td>1588</td><td>309</td><td>65</td><td>21,04%</td><td>262</td><td>59</td><td>77,48%</td><td>2</td><td>47,94%</td><td>46,31%</td><td>47,56%</td><td>1957</td><td>1951</td><td>1048</td><td>598</td><td>1354</td><td>521</td><td>4</td><td>4</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>86</td><td>80</td><td>69</td><td>10</td><td>2689</td><td>887</td><td>861</td><td>905</td><td>54</td><td>2549</td><td>787</td><td>639</td><td>1513</td><td>299</td><td>50</td><td>16,72%</td><td>290</td><td>60</td><td>79,31%</td><td>2</td><td>50,54%</td><td>52,05%</td><td>50,68%</td><td>1935</td><td>2025</td><td>1015</td><td>584</td><td>1437</td><td>512</td><td>1</td><td>1</td></tr>
<tr><td>Pittsburgh Penguins</td><td>PIT</td><td>98</td><td>112</td><td>65</td><td>17</td><td>2855</td><td>930</td><td>982</td><td>907</td><td>78</td><td>2458</td><td>694</td><td>615</td><td>1589</td><td>290</td><td>65</td><td>22,41%</td><td>271</td><td>58</td><td>78,60%</td><td>2</td><td>54,78%</td><td>54,61%</td><td>52,41%</td><td>1931</td><td>2002</td><td>1042</td><td>592</td><td>1404</td><td>523</td><td>5</td><td>1</td></tr>
<tr><td>Quebec Nordiques</td><td>QUE</td><td>91</td><td>92</td><td>68</td><td>13</td><td>2629</td><td>819</td><td>935</td><td>846</td><td>55</td><td>2729</td><td>790</td><td>669</td><td>1557</td><td>285</td><td>56</td><td>19,65%</td><td>283</td><td>62</td><td>78,09%</td><td>0</td><td>50,37%</td><td>48,70%</td><td>50,95%</td><td>2020</td><td>1929</td><td>1037</td><td>607</td><td>1331</td><td>512</td><td>4</td><td>1</td></tr>
<tr><td>San Jose Sharks</td><td>SJS</td><td>95</td><td>93</td><td>72</td><td>9</td><td>2668</td><td>878</td><td>867</td><td>891</td><td>55</td><td>2518</td><td>736</td><td>642</td><td>1546</td><td>315</td><td>67</td><td>21,27%</td><td>285</td><td>63</td><td>77,89%</td><td>2</td><td>49,52%</td><td>51,39%</td><td>53,62%</td><td>1932</td><td>1991</td><td>1035</td><td>600</td><td>1397</td><td>518</td><td>4</td><td>3</td></tr>
<tr><td>Seattle Saints</td><td>SEA</td><td>81</td><td>93</td><td>62</td><td>12</td><td>2731</td><td>896</td><td>876</td><td>935</td><td>51</td><td>2656</td><td>856</td><td>733</td><td>1595</td><td>295</td><td>51</td><td>17,29%</td><td>329</td><td>55</td><td>83,28%</td><td>1</td><td>50,98%</td><td>50,76%</td><td>50,20%</td><td>2008</td><td>1915</td><td>1047</td><td>612</td><td>1309</td><td>518</td><td>3</td><td>2</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>97</td><td>82</td><td>73</td><td>8</td><td>2624</td><td>823</td><td>855</td><td>911</td><td>50</td><td>2575</td><td>797</td><td>566</td><td>1546</td><td>266</td><td>70</td><td>26,32%</td><td>252</td><td>40</td><td>84,13%</td><td>1</td><td>49,95%</td><td>51,13%</td><td>51,86%</td><td>1973</td><td>1959</td><td>1041</td><td>594</td><td>1370</td><td>519</td><td>3</td><td>3</td></tr>
<tr><td>Tampa Bay Lightning</td><td>TBL</td><td>100</td><td>79</td><td>79</td><td>6</td><td>2663</td><td>856</td><td>875</td><td>898</td><td>52</td><td>2585</td><td>737</td><td>693</td><td>1650</td><td>275</td><td>53</td><td>19,27%</td><td>285</td><td>65</td><td>77,19%</td><td>6</td><td>50,17%</td><td>49,32%</td><td>51,10%</td><td>1934</td><td>1983</td><td>1047</td><td>593</td><td>1379</td><td>524</td><td>2</td><td>1</td></tr>
<tr><td>Toronto Maple Leafs</td><td>TOR</td><td>85</td><td>74</td><td>76</td><td>8</td><td>2577</td><td>857</td><td>840</td><td>862</td><td>52</td><td>2563</td><td>789</td><td>584</td><td>1465</td><td>324</td><td>55</td><td>16,98%</td><td>265</td><td>52</td><td>80,38%</td><td>2</td><td>53,60%</td><td>51,28%</td><td>52,26%</td><td>1935</td><td>2005</td><td>1037</td><td>602</td><td>1403</td><td>521</td><td>2</td><td>3</td></tr>
<tr><td>Vancouver Canucks</td><td>VAN</td><td>93</td><td>90</td><td>70</td><td>6</td><td>2578</td><td>852</td><td>826</td><td>878</td><td>28</td><td>2661</td><td>709</td><td>716</td><td>1585</td><td>289</td><td>61</td><td>21,11%</td><td>308</td><td>61</td><td>80,19%</td><td>4</td><td>49,50%</td><td>49,51%</td><td>48,70%</td><td>1951</td><td>1969</td><td>1036</td><td>595</td><td>1368</td><td>516</td><td>1</td><td>0</td></tr>
<tr><td>Vegas Golden Knights</td><td>VEG</td><td>91</td><td>80</td><td>93</td><td>12</td><td>2694</td><td>889</td><td>819</td><td>947</td><td>58</td><td>2530</td><td>729</td><td>527</td><td>1488</td><td>287</td><td>70</td><td>24,39%</td><td>244</td><td>44</td><td>81,97%</td><td>1</td><td>48,52%</td><td>50,48%</td><td>49,44%</td><td>1930</td><td>2008</td><td>1030</td><td>589</td><td>1409</td><td>521</td><td>5</td><td>3</td></tr>
<tr><td>Washington Capitals</td><td>WSH</td><td>68</td><td>70</td><td>79</td><td>9</td><td>2566</td><td>836</td><td>833</td><td>875</td><td>40</td><td>2588</td><td>765</td><td>622</td><td>1639</td><td>309</td><td>58</td><td>18,77%</td><td>265</td><td>49</td><td>81,51%</td><td>3</td><td>50,08%</td><td>49,04%</td><td>48,94%</td><td>1948</td><td>1966</td><td>1038</td><td>600</td><td>1368</td><td>519</td><td>2</td><td>3</td></tr>
<tr><td>Winnipeg Jets</td><td>WPG</td><td>104</td><td>70</td><td>75</td><td>7</td><td>2614</td><td>892</td><td>809</td><td>888</td><td>41</td><td>2612</td><td>778</td><td>640</td><td>1573</td><td>290</td><td>58</td><td>20,00%</td><td>295</td><td>64</td><td>78,31%</td><td>2</td><td>49,27%</td><td>48,26%</td><td>48,34%</td><td>1935</td><td>1974</td><td>1041</td><td>594</td><td>1374</td><td>518</td><td>2</td><td>4</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,02</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Los Angeles Kings</td><td>3,63</td></tr>
<tr><td>2</td><td>New York Rangers</td><td>3,49</td></tr>
<tr><td>3</td><td>Pittsburgh Penguins</td><td>3,48</td></tr>
<tr><td>4</td><td>Vegas Golden Knights</td><td>3,34</td></tr>
<tr><td>5</td><td>San Jose Sharks</td><td>3,24</td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>3,18</td></tr>
<tr><td>7</td><td>Vancouver Canucks</td><td>3,16</td></tr>
<tr><td>8</td><td>St. Louis Blues</td><td>3,16</td></tr>
<tr><td>9</td><td>Quebec Nordiques</td><td>3,16</td></tr>
<tr><td>10</td><td>Colorado Avalanche</td><td>3,15</td></tr>
<tr><td>11</td><td>Florida Panthers</td><td>3,12</td></tr>
<tr><td>12</td><td>Anaheim Ducks</td><td>3,12</td></tr>
<tr><td>13</td><td>Buffalo Sabres</td><td>3,11</td></tr>
<tr><td>14</td><td>Winnipeg Jets</td><td>3,09</td></tr>
<tr><td>15</td><td>Dallas Stars</td><td>3,00</td></tr>
<tr><td>16</td><td>Carolina Hurricanes</td><td>2,99</td></tr>
<tr><td>17</td><td>Arizona Coyotes</td><td>2,96</td></tr>
<tr><td>18</td><td>Boston Bruins</td><td>2,96</td></tr>
<tr><td>19</td><td>Montreal Canadiens</td><td>2,95</td></tr>
<tr><td>20</td><td>Seattle Saints</td><td>2,94</td></tr>
<tr><td>21</td><td>Philadelphia Flyers</td><td>2,93</td></tr>
<tr><td>22</td><td>Toronto Maple Leafs</td><td>2,91</td></tr>
<tr><td>23</td><td>Detroit Red Wings</td><td>2,90</td></tr>
<tr><td>24</td><td>Calgary Flames</td><td>2,89</td></tr>
<tr><td>25</td><td>Columbus Blue Jackets</td><td>2,88</td></tr>
<tr><td>26</td><td>New Jersey Devils</td><td>2,85</td></tr>
<tr><td>27</td><td>Nashville Predators</td><td>2,85</td></tr>
<tr><td>28</td><td>Ottawa Senators</td><td>2,80</td></tr>
<tr><td>29</td><td>New York Islanders</td><td>2,80</td></tr>
<tr><td>30</td><td>Edmonton Oilers</td><td>2,79</td></tr>
<tr><td>31</td><td>Washington Capitals</td><td>2,72</td></tr>
<tr><td>32</td><td>Minnesota Wild</td><td>2,56</td></tr>
<tr><td>33</td><td>Chicago Blackhawks</td><td>2,44</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,02</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Florida Panthers</td><td>2,68</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>2,73</td></tr>
<tr><td>3</td><td>Detroit Red Wings</td><td>2,76</td></tr>
<tr><td>4</td><td>St. Louis Blues</td><td>2,79</td></tr>
<tr><td>5</td><td>Arizona Coyotes</td><td>2,82</td></tr>
<tr><td>6</td><td>Los Angeles Kings</td><td>2,83</td></tr>
<tr><td>7</td><td>Washington Capitals</td><td>2,85</td></tr>
<tr><td>8</td><td>Calgary Flames</td><td>2,88</td></tr>
<tr><td>9</td><td>Buffalo Sabres</td><td>2,90</td></tr>
<tr><td>10</td><td>Minnesota Wild</td><td>2,91</td></tr>
<tr><td>11</td><td>Seattle Saints</td><td>2,91</td></tr>
<tr><td>12</td><td>Vegas Golden Knights</td><td>2,93</td></tr>
<tr><td>13</td><td>Philadelphia Flyers</td><td>2,98</td></tr>
<tr><td>14</td><td>San Jose Sharks</td><td>3,00</td></tr>
<tr><td>15</td><td>Pittsburgh Penguins</td><td>3,02</td></tr>
<tr><td>16</td><td>Quebec Nordiques</td><td>3,02</td></tr>
<tr><td>17</td><td>New York Islanders</td><td>3,07</td></tr>
<tr><td>18</td><td>Boston Bruins</td><td>3,07</td></tr>
<tr><td>19</td><td>Chicago Blackhawks</td><td>3,07</td></tr>
<tr><td>20</td><td>Carolina Hurricanes</td><td>3,09</td></tr>
<tr><td>21</td><td>Nashville Predators</td><td>3,10</td></tr>
<tr><td>22</td><td>Ottawa Senators</td><td>3,12</td></tr>
<tr><td>23</td><td>Vancouver Canucks</td><td>3,12</td></tr>
<tr><td>24</td><td>Dallas Stars</td><td>3,13</td></tr>
<tr><td>25</td><td>Colorado Avalanche</td><td>3,15</td></tr>
<tr><td>26</td><td>Toronto Maple Leafs</td><td>3,15</td></tr>
<tr><td>27</td><td>Edmonton Oilers</td><td>3,16</td></tr>
<tr><td>28</td><td>New Jersey Devils</td><td>3,16</td></tr>
<tr><td>29</td><td>Anaheim Ducks</td><td>3,17</td></tr>
<tr><td>30</td><td>Winnipeg Jets</td><td>3,17</td></tr>
<tr><td>31</td><td>New York Rangers</td><td>3,18</td></tr>
<tr><td>32</td><td>Columbus Blue Jackets</td><td>3,24</td></tr>
<tr><td>33</td><td>Tampa Bay Lightning</td><td>3,39</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Los Angeles Kings</td><td>128,45%</td></tr>
<tr><td>2</td><td>Florida Panthers</td><td>116,36%</td></tr>
<tr><td>3</td><td>Pittsburgh Penguins</td><td>114,92%</td></tr>
<tr><td>4</td><td>Vegas Golden Knights</td><td>114,17%</td></tr>
<tr><td>5</td><td>St. Louis Blues</td><td>113,10%</td></tr>
<tr><td>6</td><td>New York Rangers</td><td>109,58%</td></tr>
<tr><td>7</td><td>San Jose Sharks</td><td>108,13%</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>108,04%</td></tr>
<tr><td>9</td><td>Buffalo Sabres</td><td>107,14%</td></tr>
<tr><td>10</td><td>Detroit Red Wings</td><td>105,31%</td></tr>
<tr><td>11</td><td>Arizona Coyotes</td><td>105,19%</td></tr>
<tr><td>12</td><td>Quebec Nordiques</td><td>104,44%</td></tr>
<tr><td>13</td><td>Vancouver Canucks</td><td>101,17%</td></tr>
<tr><td>14</td><td>Seattle Saints</td><td>100,84%</td></tr>
<tr><td>15</td><td>Calgary Flames</td><td>100,42%</td></tr>
<tr><td>16</td><td>Colorado Avalanche</td><td>100,00%</td></tr>
<tr><td>17</td><td>Anaheim Ducks</td><td>98,46%</td></tr>
<tr><td>18</td><td>Philadelphia Flyers</td><td>98,36%</td></tr>
<tr><td>19</td><td>Winnipeg Jets</td><td>97,31%</td></tr>
<tr><td>20</td><td>Carolina Hurricanes</td><td>96,84%</td></tr>
<tr><td>21</td><td>Boston Bruins</td><td>96,43%</td></tr>
<tr><td>22</td><td>Dallas Stars</td><td>95,72%</td></tr>
<tr><td>23</td><td>Washington Capitals</td><td>95,30%</td></tr>
<tr><td>24</td><td>Tampa Bay Lightning</td><td>93,88%</td></tr>
<tr><td>25</td><td>Toronto Maple Leafs</td><td>92,64%</td></tr>
<tr><td>26</td><td>Nashville Predators</td><td>92,13%</td></tr>
<tr><td>27</td><td>New York Islanders</td><td>91,27%</td></tr>
<tr><td>28</td><td>New Jersey Devils</td><td>90,35%</td></tr>
<tr><td>29</td><td>Ottawa Senators</td><td>89,84%</td></tr>
<tr><td>30</td><td>Columbus Blue Jackets</td><td>88,72%</td></tr>
<tr><td>31</td><td>Edmonton Oilers</td><td>88,42%</td></tr>
<tr><td>32</td><td>Minnesota Wild</td><td>87,87%</td></tr>
<tr><td>33</td><td>Chicago Blackhawks</td><td>79,37%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,44%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>26,32%</td></tr>
<tr><td>2</td><td>Vegas Golden Knights</td><td>24,39%</td></tr>
<tr><td>3</td><td>New York Rangers</td><td>24,21%</td></tr>
<tr><td>4</td><td>Anaheim Ducks</td><td>24,08%</td></tr>
<tr><td>5</td><td>Montreal Canadiens</td><td>22,68%</td></tr>
<tr><td>6</td><td>Pittsburgh Penguins</td><td>22,41%</td></tr>
<tr><td>7</td><td>Los Angeles Kings</td><td>21,93%</td></tr>
<tr><td>8</td><td>Calgary Flames</td><td>21,67%</td></tr>
<tr><td>9</td><td>Buffalo Sabres</td><td>21,40%</td></tr>
<tr><td>10</td><td>San Jose Sharks</td><td>21,27%</td></tr>
<tr><td>11</td><td>Vancouver Canucks</td><td>21,11%</td></tr>
<tr><td>12</td><td>Ottawa Senators</td><td>21,04%</td></tr>
<tr><td>13</td><td>Winnipeg Jets</td><td>20,00%</td></tr>
<tr><td>14</td><td>Columbus Blue Jackets</td><td>19,86%</td></tr>
<tr><td>15</td><td>Boston Bruins</td><td>19,81%</td></tr>
<tr><td>16</td><td>Florida Panthers</td><td>19,75%</td></tr>
<tr><td>17</td><td>Quebec Nordiques</td><td>19,65%</td></tr>
<tr><td>18</td><td>Tampa Bay Lightning</td><td>19,27%</td></tr>
<tr><td>19</td><td>Washington Capitals</td><td>18,77%</td></tr>
<tr><td>20</td><td>New York Islanders</td><td>18,71%</td></tr>
<tr><td>21</td><td>Arizona Coyotes</td><td>18,01%</td></tr>
<tr><td>22</td><td>Minnesota Wild</td><td>17,67%</td></tr>
<tr><td>23</td><td>Nashville Predators</td><td>17,42%</td></tr>
<tr><td>24</td><td>Carolina Hurricanes</td><td>17,31%</td></tr>
<tr><td>25</td><td>Seattle Saints</td><td>17,29%</td></tr>
<tr><td>26</td><td>Toronto Maple Leafs</td><td>16,98%</td></tr>
<tr><td>27</td><td>New Jersey Devils</td><td>16,78%</td></tr>
<tr><td>28</td><td>Philadelphia Flyers</td><td>16,72%</td></tr>
<tr><td>29</td><td>Colorado Avalanche</td><td>16,62%</td></tr>
<tr><td>30</td><td>Chicago Blackhawks</td><td>16,10%</td></tr>
<tr><td>31</td><td>Edmonton Oilers</td><td>15,61%</td></tr>
<tr><td>32</td><td>Detroit Red Wings</td><td>14,39%</td></tr>
<tr><td>33</td><td>Dallas Stars</td><td>11,43%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,56%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>84,13%</td></tr>
<tr><td>2</td><td>New York Rangers</td><td>84,05%</td></tr>
<tr><td>3</td><td>Florida Panthers</td><td>84,01%</td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>83,54%</td></tr>
<tr><td>5</td><td>Seattle Saints</td><td>83,28%</td></tr>
<tr><td>6</td><td>Montreal Canadiens</td><td>83,14%</td></tr>
<tr><td>7</td><td>Colorado Avalanche</td><td>82,39%</td></tr>
<tr><td>8</td><td>Dallas Stars</td><td>82,30%</td></tr>
<tr><td>9</td><td>Vegas Golden Knights</td><td>81,97%</td></tr>
<tr><td>10</td><td>Detroit Red Wings</td><td>81,95%</td></tr>
<tr><td>11</td><td>Buffalo Sabres</td><td>81,72%</td></tr>
<tr><td>12</td><td>Washington Capitals</td><td>81,51%</td></tr>
<tr><td>13</td><td>Nashville Predators</td><td>81,40%</td></tr>
<tr><td>14</td><td>Chicago Blackhawks</td><td>81,29%</td></tr>
<tr><td>15</td><td>Edmonton Oilers</td><td>80,89%</td></tr>
<tr><td>16</td><td>Carolina Hurricanes</td><td>80,70%</td></tr>
<tr><td>17</td><td>New York Islanders</td><td>80,49%</td></tr>
<tr><td>18</td><td>Toronto Maple Leafs</td><td>80,38%</td></tr>
<tr><td>19</td><td>Vancouver Canucks</td><td>80,19%</td></tr>
<tr><td>20</td><td>Los Angeles Kings</td><td>80,06%</td></tr>
<tr><td>21</td><td>New Jersey Devils</td><td>80,00%</td></tr>
<tr><td>22</td><td>Philadelphia Flyers</td><td>79,31%</td></tr>
<tr><td>23</td><td>Boston Bruins</td><td>79,31%</td></tr>
<tr><td>24</td><td>Pittsburgh Penguins</td><td>78,60%</td></tr>
<tr><td>25</td><td>Winnipeg Jets</td><td>78,31%</td></tr>
<tr><td>26</td><td>Quebec Nordiques</td><td>78,09%</td></tr>
<tr><td>27</td><td>Calgary Flames</td><td>78,09%</td></tr>
<tr><td>28</td><td>Anaheim Ducks</td><td>78,07%</td></tr>
<tr><td>29</td><td>San Jose Sharks</td><td>77,89%</td></tr>
<tr><td>30</td><td>Columbus Blue Jackets</td><td>77,85%</td></tr>
<tr><td>31</td><td>Ottawa Senators</td><td>77,48%</td></tr>
<tr><td>32</td><td>Tampa Bay Lightning</td><td>77,19%</td></tr>
<tr><td>33</td><td>Minnesota Wild</td><td>76,52%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>110,44%</td></tr>
<tr><td>2</td><td>New York Rangers</td><td>108,26%</td></tr>
<tr><td>3</td><td>Vegas Golden Knights</td><td>106,36%</td></tr>
<tr><td>4</td><td>Montreal Canadiens</td><td>105,82%</td></tr>
<tr><td>5</td><td>Florida Panthers</td><td>103,77%</td></tr>
<tr><td>6</td><td>Buffalo Sabres</td><td>103,13%</td></tr>
<tr><td>7</td><td>Anaheim Ducks</td><td>102,15%</td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>101,99%</td></tr>
<tr><td>9</td><td>Arizona Coyotes</td><td>101,56%</td></tr>
<tr><td>10</td><td>Vancouver Canucks</td><td>101,30%</td></tr>
<tr><td>11</td><td>Pittsburgh Penguins</td><td>101,01%</td></tr>
<tr><td>12</td><td>Seattle Saints</td><td>100,57%</td></tr>
<tr><td>13</td><td>Washington Capitals</td><td>100,28%</td></tr>
<tr><td>14</td><td>Calgary Flames</td><td>99,75%</td></tr>
<tr><td>15</td><td>New York Islanders</td><td>99,19%</td></tr>
<tr><td>16</td><td>San Jose Sharks</td><td>99,16%</td></tr>
<tr><td>17</td><td>Boston Bruins</td><td>99,12%</td></tr>
<tr><td>18</td><td>Colorado Avalanche</td><td>99,01%</td></tr>
<tr><td>19</td><td>Nashville Predators</td><td>98,82%</td></tr>
<tr><td>20</td><td>Ottawa Senators</td><td>98,52%</td></tr>
<tr><td>21</td><td>Winnipeg Jets</td><td>98,31%</td></tr>
<tr><td>22</td><td>Carolina Hurricanes</td><td>98,00%</td></tr>
<tr><td>23</td><td>Quebec Nordiques</td><td>97,74%</td></tr>
<tr><td>24</td><td>Columbus Blue Jackets</td><td>97,72%</td></tr>
<tr><td>25</td><td>Chicago Blackhawks</td><td>97,39%</td></tr>
<tr><td>26</td><td>Toronto Maple Leafs</td><td>97,35%</td></tr>
<tr><td>27</td><td>New Jersey Devils</td><td>96,78%</td></tr>
<tr><td>28</td><td>Edmonton Oilers</td><td>96,49%</td></tr>
<tr><td>29</td><td>Tampa Bay Lightning</td><td>96,47%</td></tr>
<tr><td>30</td><td>Detroit Red Wings</td><td>96,34%</td></tr>
<tr><td>31</td><td>Philadelphia Flyers</td><td>96,03%</td></tr>
<tr><td>32</td><td>Minnesota Wild</td><td>94,18%</td></tr>
<tr><td>33</td><td>Dallas Stars</td><td>93,73%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31,88</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Los Angeles Kings</td><td>35,85</td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>34,82</td></tr>
<tr><td>3</td><td>New York Rangers</td><td>33,84</td></tr>
<tr><td>4</td><td>Colorado Avalanche</td><td>33,59</td></tr>
<tr><td>5</td><td>Buffalo Sabres</td><td>33,49</td></tr>
<tr><td>6</td><td>Seattle Saints</td><td>33,30</td></tr>
<tr><td>7</td><td>Anaheim Ducks</td><td>32,95</td></tr>
<tr><td>8</td><td>Vegas Golden Knights</td><td>32,85</td></tr>
<tr><td>9</td><td>Philadelphia Flyers</td><td>32,79</td></tr>
<tr><td>10</td><td>Edmonton Oilers</td><td>32,60</td></tr>
<tr><td>11</td><td>Calgary Flames</td><td>32,60</td></tr>
<tr><td>12</td><td>San Jose Sharks</td><td>32,54</td></tr>
<tr><td>13</td><td>Tampa Bay Lightning</td><td>32,48</td></tr>
<tr><td>14</td><td>Quebec Nordiques</td><td>32,06</td></tr>
<tr><td>15</td><td>St. Louis Blues</td><td>32,00</td></tr>
<tr><td>16</td><td>Boston Bruins</td><td>31,89</td></tr>
<tr><td>17</td><td>Winnipeg Jets</td><td>31,88</td></tr>
<tr><td>18</td><td>Florida Panthers</td><td>31,79</td></tr>
<tr><td>19</td><td>Arizona Coyotes</td><td>31,50</td></tr>
<tr><td>20</td><td>Vancouver Canucks</td><td>31,44</td></tr>
<tr><td>21</td><td>Toronto Maple Leafs</td><td>31,43</td></tr>
<tr><td>22</td><td>Washington Capitals</td><td>31,29</td></tr>
<tr><td>23</td><td>Carolina Hurricanes</td><td>31,23</td></tr>
<tr><td>24</td><td>Dallas Stars</td><td>31,16</td></tr>
<tr><td>25</td><td>New Jersey Devils</td><td>31,01</td></tr>
<tr><td>26</td><td>Ottawa Senators</td><td>30,90</td></tr>
<tr><td>27</td><td>Minnesota Wild</td><td>30,46</td></tr>
<tr><td>28</td><td>Detroit Red Wings</td><td>30,45</td></tr>
<tr><td>29</td><td>Montreal Canadiens</td><td>30,37</td></tr>
<tr><td>30</td><td>New York Islanders</td><td>30,13</td></tr>
<tr><td>31</td><td>Columbus Blue Jackets</td><td>29,59</td></tr>
<tr><td>32</td><td>Nashville Predators</td><td>29,01</td></tr>
<tr><td>33</td><td>Chicago Blackhawks</td><td>28,61</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31,88</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Florida Panthers</td><td>29,49</td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>29,98</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>30,43</td></tr>
<tr><td>4</td><td>San Jose Sharks</td><td>30,71</td></tr>
<tr><td>5</td><td>Vegas Golden Knights</td><td>30,85</td></tr>
<tr><td>6</td><td>Montreal Canadiens</td><td>31,07</td></tr>
<tr><td>7</td><td>New Jersey Devils</td><td>31,07</td></tr>
<tr><td>8</td><td>Philadelphia Flyers</td><td>31,09</td></tr>
<tr><td>9</td><td>Calgary Flames</td><td>31,13</td></tr>
<tr><td>10</td><td>Nashville Predators</td><td>31,18</td></tr>
<tr><td>11</td><td>Toronto Maple Leafs</td><td>31,26</td></tr>
<tr><td>12</td><td>St. Louis Blues</td><td>31,40</td></tr>
<tr><td>13</td><td>Tampa Bay Lightning</td><td>31,52</td></tr>
<tr><td>14</td><td>Washington Capitals</td><td>31,56</td></tr>
<tr><td>15</td><td>Winnipeg Jets</td><td>31,85</td></tr>
<tr><td>16</td><td>Dallas Stars</td><td>32,01</td></tr>
<tr><td>17</td><td>Arizona Coyotes</td><td>32,20</td></tr>
<tr><td>18</td><td>Detroit Red Wings</td><td>32,23</td></tr>
<tr><td>19</td><td>Carolina Hurricanes</td><td>32,32</td></tr>
<tr><td>20</td><td>Colorado Avalanche</td><td>32,34</td></tr>
<tr><td>21</td><td>Seattle Saints</td><td>32,39</td></tr>
<tr><td>22</td><td>Vancouver Canucks</td><td>32,45</td></tr>
<tr><td>23</td><td>Buffalo Sabres</td><td>32,49</td></tr>
<tr><td>24</td><td>Columbus Blue Jackets</td><td>32,49</td></tr>
<tr><td>25</td><td>Ottawa Senators</td><td>32,50</td></tr>
<tr><td>26</td><td>Minnesota Wild</td><td>32,55</td></tr>
<tr><td>27</td><td>Boston Bruins</td><td>32,72</td></tr>
<tr><td>28</td><td>Chicago Blackhawks</td><td>32,79</td></tr>
<tr><td>29</td><td>New York Islanders</td><td>32,79</td></tr>
<tr><td>30</td><td>Edmonton Oilers</td><td>33,09</td></tr>
<tr><td>31</td><td>New York Rangers</td><td>33,09</td></tr>
<tr><td>32</td><td>Quebec Nordiques</td><td>33,28</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>33,59</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Los Angeles Kings</td><td>117,84%</td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>116,15%</td></tr>
<tr><td>3</td><td>Florida Panthers</td><td>107,82%</td></tr>
<tr><td>4</td><td>Vegas Golden Knights</td><td>106,48%</td></tr>
<tr><td>5</td><td>San Jose Sharks</td><td>105,96%</td></tr>
<tr><td>6</td><td>Philadelphia Flyers</td><td>105,49%</td></tr>
<tr><td>7</td><td>Calgary Flames</td><td>104,70%</td></tr>
<tr><td>8</td><td>Colorado Avalanche</td><td>103,85%</td></tr>
<tr><td>9</td><td>Buffalo Sabres</td><td>103,08%</td></tr>
<tr><td>10</td><td>Tampa Bay Lightning</td><td>103,02%</td></tr>
<tr><td>11</td><td>Seattle Saints</td><td>102,82%</td></tr>
<tr><td>12</td><td>New York Rangers</td><td>102,29%</td></tr>
<tr><td>13</td><td>St. Louis Blues</td><td>101,90%</td></tr>
<tr><td>14</td><td>Toronto Maple Leafs</td><td>100,55%</td></tr>
<tr><td>15</td><td>Winnipeg Jets</td><td>100,08%</td></tr>
<tr><td>16</td><td>New Jersey Devils</td><td>99,80%</td></tr>
<tr><td>17</td><td>Washington Capitals</td><td>99,15%</td></tr>
<tr><td>18</td><td>Edmonton Oilers</td><td>98,53%</td></tr>
<tr><td>19</td><td>Anaheim Ducks</td><td>98,11%</td></tr>
<tr><td>20</td><td>Arizona Coyotes</td><td>97,84%</td></tr>
<tr><td>21</td><td>Montreal Canadiens</td><td>97,72%</td></tr>
<tr><td>22</td><td>Boston Bruins</td><td>97,47%</td></tr>
<tr><td>23</td><td>Dallas Stars</td><td>97,33%</td></tr>
<tr><td>24</td><td>Vancouver Canucks</td><td>96,88%</td></tr>
<tr><td>25</td><td>Carolina Hurricanes</td><td>96,64%</td></tr>
<tr><td>26</td><td>Quebec Nordiques</td><td>96,34%</td></tr>
<tr><td>27</td><td>Ottawa Senators</td><td>95,08%</td></tr>
<tr><td>28</td><td>Detroit Red Wings</td><td>94,48%</td></tr>
<tr><td>29</td><td>Minnesota Wild</td><td>93,59%</td></tr>
<tr><td>30</td><td>Nashville Predators</td><td>93,04%</td></tr>
<tr><td>31</td><td>New York Islanders</td><td>91,89%</td></tr>
<tr><td>32</td><td>Columbus Blue Jackets</td><td>91,07%</td></tr>
<tr><td>33</td><td>Chicago Blackhawks</td><td>87,24%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8,12</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Vegas Golden Knights</td><td>6,43</td></tr>
<tr><td>2</td><td>Calgary Flames</td><td>6,85</td></tr>
<tr><td>3</td><td>St. Louis Blues</td><td>6,90</td></tr>
<tr><td>4</td><td>New Jersey Devils</td><td>7,01</td></tr>
<tr><td>5</td><td>Toronto Maple Leafs</td><td>7,12</td></tr>
<tr><td>6</td><td>Nashville Predators</td><td>7,16</td></tr>
<tr><td>7</td><td>Minnesota Wild</td><td>7,23</td></tr>
<tr><td>8</td><td>Detroit Red Wings</td><td>7,26</td></tr>
<tr><td>9</td><td>Ottawa Senators</td><td>7,46</td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>7,50</td></tr>
<tr><td>11</td><td>Washington Capitals</td><td>7,59</td></tr>
<tr><td>12</td><td>Philadelphia Flyers</td><td>7,79</td></tr>
<tr><td>13</td><td>Winnipeg Jets</td><td>7,80</td></tr>
<tr><td>14</td><td>San Jose Sharks</td><td>7,83</td></tr>
<tr><td>15</td><td>Edmonton Oilers</td><td>8,09</td></tr>
<tr><td>16</td><td>Colorado Avalanche</td><td>8,15</td></tr>
<tr><td>17</td><td>Buffalo Sabres</td><td>8,15</td></tr>
<tr><td>18</td><td>Quebec Nordiques</td><td>8,16</td></tr>
<tr><td>19</td><td>Chicago Blackhawks</td><td>8,23</td></tr>
<tr><td>20</td><td>Columbus Blue Jackets</td><td>8,27</td></tr>
<tr><td>21</td><td>Carolina Hurricanes</td><td>8,32</td></tr>
<tr><td>22</td><td>Tampa Bay Lightning</td><td>8,45</td></tr>
<tr><td>23</td><td>New York Islanders</td><td>8,62</td></tr>
<tr><td>24</td><td>Vancouver Canucks</td><td>8,73</td></tr>
<tr><td>25</td><td>Florida Panthers</td><td>8,74</td></tr>
<tr><td>26</td><td>Seattle Saints</td><td>8,94</td></tr>
<tr><td>27</td><td>Arizona Coyotes</td><td>9,06</td></tr>
<tr><td>28</td><td>Los Angeles Kings</td><td>9,18</td></tr>
<tr><td>29</td><td>Anaheim Ducks</td><td>9,21</td></tr>
<tr><td>30</td><td>New York Rangers</td><td>9,24</td></tr>
<tr><td>31</td><td>Dallas Stars</td><td>9,29</td></tr>
<tr><td>32</td><td>Boston Bruins</td><td>9,54</td></tr>
<tr><td>33</td><td>Montreal Canadiens</td><td>9,66</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,25</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>New York Rangers</td><td>20,60</td></tr>
<tr><td>2</td><td>Dallas Stars</td><td>20,37</td></tr>
<tr><td>3</td><td>Edmonton Oilers</td><td>20,17</td></tr>
<tr><td>4</td><td>Tampa Bay Lightning</td><td>20,12</td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>20,12</td></tr>
<tr><td>6</td><td>Washington Capitals</td><td>19,99</td></tr>
<tr><td>7</td><td>Los Angeles Kings</td><td>19,89</td></tr>
<tr><td>8</td><td>Boston Bruins</td><td>19,79</td></tr>
<tr><td>9</td><td>Minnesota Wild</td><td>19,72</td></tr>
<tr><td>10</td><td>New York Islanders</td><td>19,71</td></tr>
<tr><td>11</td><td>Montreal Canadiens</td><td>19,66</td></tr>
<tr><td>12</td><td>Carolina Hurricanes</td><td>19,54</td></tr>
<tr><td>13</td><td>Seattle Saints</td><td>19,45</td></tr>
<tr><td>14</td><td>Pittsburgh Penguins</td><td>19,38</td></tr>
<tr><td>15</td><td>Ottawa Senators</td><td>19,37</td></tr>
<tr><td>16</td><td>Vancouver Canucks</td><td>19,33</td></tr>
<tr><td>17</td><td>Buffalo Sabres</td><td>19,28</td></tr>
<tr><td>18</td><td>Arizona Coyotes</td><td>19,23</td></tr>
<tr><td>19</td><td>Calgary Flames</td><td>19,21</td></tr>
<tr><td>20</td><td>Winnipeg Jets</td><td>19,18</td></tr>
<tr><td>21</td><td>Florida Panthers</td><td>19,01</td></tr>
<tr><td>22</td><td>Colorado Avalanche</td><td>19,01</td></tr>
<tr><td>23</td><td>Quebec Nordiques</td><td>18,99</td></tr>
<tr><td>24</td><td>St. Louis Blues</td><td>18,85</td></tr>
<tr><td>25</td><td>San Jose Sharks</td><td>18,85</td></tr>
<tr><td>26</td><td>Detroit Red Wings</td><td>18,68</td></tr>
<tr><td>27</td><td>Chicago Blackhawks</td><td>18,65</td></tr>
<tr><td>28</td><td>Columbus Blue Jackets</td><td>18,46</td></tr>
<tr><td>29</td><td>Philadelphia Flyers</td><td>18,45</td></tr>
<tr><td>30</td><td>New Jersey Devils</td><td>18,20</td></tr>
<tr><td>31</td><td>Vegas Golden Knights</td><td>18,15</td></tr>
<tr><td>32</td><td>Toronto Maple Leafs</td><td>17,87</td></tr>
<tr><td>33</td><td>Nashville Predators</td><td>17,87</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Pittsburgh Penguins</td><td>54,29%</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>52,90%</td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>52,38%</td></tr>
<tr><td>4</td><td>Chicago Blackhawks</td><td>52,28%</td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>52,04%</td></tr>
<tr><td>6</td><td>Calgary Flames</td><td>51,72%</td></tr>
<tr><td>7</td><td>Colorado Avalanche</td><td>51,52%</td></tr>
<tr><td>8</td><td>Arizona Coyotes</td><td>51,35%</td></tr>
<tr><td>9</td><td>Philadelphia Flyers</td><td>51,20%</td></tr>
<tr><td>10</td><td>Carolina Hurricanes</td><td>51,05%</td></tr>
<tr><td>11</td><td>San Jose Sharks</td><td>51,03%</td></tr>
<tr><td>12</td><td>Buffalo Sabres</td><td>50,94%</td></tr>
<tr><td>13</td><td>Florida Panthers</td><td>50,93%</td></tr>
<tr><td>14</td><td>St. Louis Blues</td><td>50,77%</td></tr>
<tr><td>15</td><td>Seattle Saints</td><td>50,75%</td></tr>
<tr><td>16</td><td>Dallas Stars</td><td>50,54%</td></tr>
<tr><td>17</td><td>Anaheim Ducks</td><td>50,54%</td></tr>
<tr><td>18</td><td>Nashville Predators</td><td>50,25%</td></tr>
<tr><td>19</td><td>Columbus Blue Jackets</td><td>50,17%</td></tr>
<tr><td>20</td><td>Tampa Bay Lightning</td><td>49,99%</td></tr>
<tr><td>21</td><td>New York Rangers</td><td>49,91%</td></tr>
<tr><td>22</td><td>Quebec Nordiques</td><td>49,77%</td></tr>
<tr><td>23</td><td>Vegas Golden Knights</td><td>49,51%</td></tr>
<tr><td>24</td><td>Washington Capitals</td><td>49,46%</td></tr>
<tr><td>25</td><td>Vancouver Canucks</td><td>49,36%</td></tr>
<tr><td>26</td><td>Boston Bruins</td><td>49,30%</td></tr>
<tr><td>27</td><td>Detroit Red Wings</td><td>49,20%</td></tr>
<tr><td>28</td><td>New York Islanders</td><td>49,19%</td></tr>
<tr><td>29</td><td>Minnesota Wild</td><td>49,01%</td></tr>
<tr><td>30</td><td>New Jersey Devils</td><td>48,94%</td></tr>
<tr><td>31</td><td>Edmonton Oilers</td><td>48,85%</td></tr>
<tr><td>32</td><td>Winnipeg Jets</td><td>48,69%</td></tr>
<tr><td>33</td><td>Ottawa Senators</td><td>47,21%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
