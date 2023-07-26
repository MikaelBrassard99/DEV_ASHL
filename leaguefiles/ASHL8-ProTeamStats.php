<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Pro Team Stats</title>
<script src="ASHL8.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL8.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL8-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL8-STHSCareerStat.db";
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
<tr><td>Anaheim Ducks</td><td>82</td><td>37</td><td>32</td><td>5</td><td>2</td><td>2</td><td>4</td><td>258</td><td>236</td><td>41</td><td>16</td><td>16</td><td>3</td><td>2</td><td>1</td><td>3</td><td>128</td><td>118</td><td>41</td><td>21</td><td>16</td><td>2</td><td>0</td><td>1</td><td>1</td><td>130</td><td>118</td><td>258</td><td>465</td><td>723</td></tr>
<tr><td>Arizona Coyotes</td><td>82</td><td>37</td><td>28</td><td>7</td><td>3</td><td>3</td><td>4</td><td>276</td><td>244</td><td>41</td><td>20</td><td>15</td><td>4</td><td>2</td><td>0</td><td>0</td><td>135</td><td>126</td><td>41</td><td>17</td><td>13</td><td>3</td><td>1</td><td>3</td><td>4</td><td>141</td><td>118</td><td>276</td><td>493</td><td>769</td></tr>
<tr><td>Boston Bruins</td><td>82</td><td>44</td><td>23</td><td>5</td><td>2</td><td>5</td><td>3</td><td>246</td><td>191</td><td>41</td><td>27</td><td>10</td><td>0</td><td>1</td><td>2</td><td>1</td><td>125</td><td>89</td><td>41</td><td>17</td><td>13</td><td>5</td><td>1</td><td>3</td><td>2</td><td>121</td><td>102</td><td>246</td><td>445</td><td>691</td></tr>
<tr><td>Buffalo Sabres</td><td>82</td><td>29</td><td>36</td><td>7</td><td>4</td><td>2</td><td>4</td><td>239</td><td>249</td><td>41</td><td>14</td><td>20</td><td>4</td><td>1</td><td>1</td><td>1</td><td>116</td><td>126</td><td>41</td><td>15</td><td>16</td><td>3</td><td>3</td><td>1</td><td>3</td><td>123</td><td>123</td><td>239</td><td>434</td><td>673</td></tr>
<tr><td>Calgary Flames</td><td>82</td><td>25</td><td>37</td><td>5</td><td>10</td><td>3</td><td>2</td><td>211</td><td>237</td><td>41</td><td>15</td><td>17</td><td>2</td><td>5</td><td>1</td><td>1</td><td>112</td><td>115</td><td>41</td><td>10</td><td>20</td><td>3</td><td>5</td><td>2</td><td>1</td><td>99</td><td>122</td><td>211</td><td>372</td><td>583</td></tr>
<tr><td>Carolina Hurricanes</td><td>82</td><td>26</td><td>38</td><td>6</td><td>5</td><td>6</td><td>1</td><td>228</td><td>252</td><td>41</td><td>13</td><td>18</td><td>5</td><td>2</td><td>2</td><td>1</td><td>115</td><td>126</td><td>41</td><td>13</td><td>20</td><td>1</td><td>3</td><td>4</td><td>0</td><td>113</td><td>126</td><td>228</td><td>401</td><td>629</td></tr>
<tr><td>Chicago Blackhawks</td><td>82</td><td>35</td><td>28</td><td>7</td><td>9</td><td>1</td><td>2</td><td>241</td><td>228</td><td>41</td><td>21</td><td>12</td><td>4</td><td>4</td><td>0</td><td>0</td><td>133</td><td>108</td><td>41</td><td>14</td><td>16</td><td>3</td><td>5</td><td>1</td><td>2</td><td>108</td><td>120</td><td>241</td><td>436</td><td>677</td></tr>
<tr><td>Colorado Avalanche</td><td>82</td><td>29</td><td>32</td><td>6</td><td>5</td><td>3</td><td>7</td><td>226</td><td>241</td><td>41</td><td>16</td><td>14</td><td>3</td><td>3</td><td>2</td><td>3</td><td>117</td><td>120</td><td>41</td><td>13</td><td>18</td><td>3</td><td>2</td><td>1</td><td>4</td><td>109</td><td>121</td><td>226</td><td>403</td><td>629</td></tr>
<tr><td>Columbus Blue Jackets</td><td>82</td><td>30</td><td>36</td><td>5</td><td>6</td><td>1</td><td>4</td><td>212</td><td>235</td><td>41</td><td>14</td><td>19</td><td>3</td><td>4</td><td>0</td><td>1</td><td>107</td><td>112</td><td>41</td><td>16</td><td>17</td><td>2</td><td>2</td><td>1</td><td>3</td><td>105</td><td>123</td><td>212</td><td>383</td><td>595</td></tr>
<tr><td>Dallas Stars</td><td>82</td><td>25</td><td>41</td><td>6</td><td>4</td><td>5</td><td>1</td><td>209</td><td>254</td><td>41</td><td>11</td><td>20</td><td>3</td><td>2</td><td>5</td><td>0</td><td>106</td><td>126</td><td>41</td><td>14</td><td>21</td><td>3</td><td>2</td><td>0</td><td>1</td><td>103</td><td>128</td><td>209</td><td>373</td><td>582</td></tr>
<tr><td>Detroit Red Wings</td><td>82</td><td>29</td><td>36</td><td>9</td><td>4</td><td>2</td><td>2</td><td>229</td><td>251</td><td>41</td><td>18</td><td>16</td><td>4</td><td>1</td><td>0</td><td>2</td><td>122</td><td>118</td><td>41</td><td>11</td><td>20</td><td>5</td><td>3</td><td>2</td><td>0</td><td>107</td><td>133</td><td>229</td><td>411</td><td>640</td></tr>
<tr><td>Edmonton Oilers</td><td>82</td><td>36</td><td>31</td><td>4</td><td>6</td><td>1</td><td>4</td><td>256</td><td>248</td><td>41</td><td>19</td><td>15</td><td>2</td><td>1</td><td>1</td><td>3</td><td>125</td><td>122</td><td>41</td><td>17</td><td>16</td><td>2</td><td>5</td><td>0</td><td>1</td><td>131</td><td>126</td><td>256</td><td>462</td><td>718</td></tr>
<tr><td>Florida Panthers</td><td>82</td><td>32</td><td>34</td><td>4</td><td>6</td><td>2</td><td>4</td><td>218</td><td>241</td><td>41</td><td>14</td><td>18</td><td>1</td><td>4</td><td>2</td><td>2</td><td>112</td><td>128</td><td>41</td><td>18</td><td>16</td><td>3</td><td>2</td><td>0</td><td>2</td><td>106</td><td>113</td><td>218</td><td>391</td><td>609</td></tr>
<tr><td>Los Angeles Kings</td><td>82</td><td>41</td><td>27</td><td>4</td><td>3</td><td>5</td><td>2</td><td>271</td><td>227</td><td>41</td><td>21</td><td>15</td><td>2</td><td>1</td><td>1</td><td>1</td><td>136</td><td>111</td><td>41</td><td>20</td><td>12</td><td>2</td><td>2</td><td>4</td><td>1</td><td>135</td><td>116</td><td>271</td><td>479</td><td>750</td></tr>
<tr><td>Minnesota Wild</td><td>82</td><td>26</td><td>36</td><td>3</td><td>8</td><td>4</td><td>5</td><td>218</td><td>244</td><td>41</td><td>13</td><td>18</td><td>0</td><td>5</td><td>3</td><td>2</td><td>102</td><td>111</td><td>41</td><td>13</td><td>18</td><td>3</td><td>3</td><td>1</td><td>3</td><td>116</td><td>133</td><td>218</td><td>396</td><td>614</td></tr>
<tr><td>Montreal Canadiens</td><td>82</td><td>39</td><td>23</td><td>6</td><td>3</td><td>6</td><td>5</td><td>245</td><td>208</td><td>41</td><td>23</td><td>10</td><td>2</td><td>0</td><td>3</td><td>3</td><td>124</td><td>98</td><td>41</td><td>16</td><td>13</td><td>4</td><td>3</td><td>3</td><td>2</td><td>121</td><td>110</td><td>245</td><td>432</td><td>677</td></tr>
<tr><td>Nashville Predators</td><td>82</td><td>38</td><td>33</td><td>7</td><td>3</td><td>0</td><td>1</td><td>227</td><td>209</td><td>41</td><td>18</td><td>18</td><td>3</td><td>1</td><td>0</td><td>1</td><td>112</td><td>99</td><td>41</td><td>20</td><td>15</td><td>4</td><td>2</td><td>0</td><td>0</td><td>115</td><td>110</td><td>227</td><td>418</td><td>645</td></tr>
<tr><td>New Jersey Devils</td><td>82</td><td>32</td><td>38</td><td>2</td><td>2</td><td>4</td><td>4</td><td>226</td><td>232</td><td>41</td><td>18</td><td>18</td><td>1</td><td>1</td><td>1</td><td>2</td><td>114</td><td>107</td><td>41</td><td>14</td><td>20</td><td>1</td><td>1</td><td>3</td><td>2</td><td>112</td><td>125</td><td>226</td><td>414</td><td>640</td></tr>
<tr><td>New York Islanders</td><td>82</td><td>28</td><td>40</td><td>4</td><td>8</td><td>1</td><td>1</td><td>223</td><td>266</td><td>41</td><td>13</td><td>22</td><td>0</td><td>4</td><td>1</td><td>1</td><td>107</td><td>142</td><td>41</td><td>15</td><td>18</td><td>4</td><td>4</td><td>0</td><td>0</td><td>116</td><td>124</td><td>223</td><td>411</td><td>634</td></tr>
<tr><td>New York Rangers</td><td>82</td><td>40</td><td>26</td><td>5</td><td>6</td><td>3</td><td>2</td><td>245</td><td>218</td><td>41</td><td>22</td><td>11</td><td>2</td><td>3</td><td>2</td><td>1</td><td>128</td><td>116</td><td>41</td><td>18</td><td>15</td><td>3</td><td>3</td><td>1</td><td>1</td><td>117</td><td>102</td><td>245</td><td>445</td><td>690</td></tr>
<tr><td>Ottawa Senators</td><td>82</td><td>35</td><td>29</td><td>4</td><td>6</td><td>4</td><td>4</td><td>235</td><td>223</td><td>41</td><td>18</td><td>14</td><td>2</td><td>3</td><td>2</td><td>2</td><td>117</td><td>114</td><td>41</td><td>17</td><td>15</td><td>2</td><td>3</td><td>2</td><td>2</td><td>118</td><td>109</td><td>235</td><td>417</td><td>652</td></tr>
<tr><td>Philadelphia Flyers</td><td>82</td><td>34</td><td>34</td><td>4</td><td>6</td><td>3</td><td>1</td><td>239</td><td>244</td><td>41</td><td>17</td><td>14</td><td>2</td><td>4</td><td>3</td><td>1</td><td>122</td><td>117</td><td>41</td><td>17</td><td>20</td><td>2</td><td>2</td><td>0</td><td>0</td><td>117</td><td>127</td><td>239</td><td>428</td><td>667</td></tr>
<tr><td>Pittsburgh Penguins</td><td>82</td><td>40</td><td>29</td><td>3</td><td>5</td><td>1</td><td>4</td><td>246</td><td>227</td><td>41</td><td>19</td><td>14</td><td>2</td><td>3</td><td>1</td><td>2</td><td>130</td><td>122</td><td>41</td><td>21</td><td>15</td><td>1</td><td>2</td><td>0</td><td>2</td><td>116</td><td>105</td><td>246</td><td>447</td><td>693</td></tr>
<tr><td>Quebec Nordiques</td><td>82</td><td>25</td><td>38</td><td>5</td><td>5</td><td>2</td><td>7</td><td>232</td><td>263</td><td>41</td><td>14</td><td>15</td><td>4</td><td>3</td><td>1</td><td>4</td><td>122</td><td>121</td><td>41</td><td>11</td><td>23</td><td>1</td><td>2</td><td>1</td><td>3</td><td>110</td><td>142</td><td>232</td><td>411</td><td>643</td></tr>
<tr><td>San Jose Sharks</td><td>82</td><td>31</td><td>38</td><td>6</td><td>3</td><td>2</td><td>2</td><td>244</td><td>254</td><td>41</td><td>16</td><td>20</td><td>2</td><td>1</td><td>1</td><td>1</td><td>128</td><td>133</td><td>41</td><td>15</td><td>18</td><td>4</td><td>2</td><td>1</td><td>1</td><td>116</td><td>121</td><td>244</td><td>446</td><td>690</td></tr>
<tr><td>Seattle Saints</td><td>82</td><td>33</td><td>31</td><td>4</td><td>6</td><td>4</td><td>4</td><td>235</td><td>246</td><td>41</td><td>19</td><td>12</td><td>3</td><td>4</td><td>1</td><td>2</td><td>118</td><td>114</td><td>41</td><td>14</td><td>19</td><td>1</td><td>2</td><td>3</td><td>2</td><td>117</td><td>132</td><td>235</td><td>414</td><td>649</td></tr>
<tr><td>St. Louis Blues</td><td>82</td><td>36</td><td>25</td><td>4</td><td>8</td><td>8</td><td>1</td><td>254</td><td>220</td><td>41</td><td>23</td><td>7</td><td>1</td><td>4</td><td>5</td><td>1</td><td>144</td><td>105</td><td>41</td><td>13</td><td>18</td><td>3</td><td>4</td><td>3</td><td>0</td><td>110</td><td>115</td><td>254</td><td>450</td><td>704</td></tr>
<tr><td>Tampa Bay Lightning</td><td>82</td><td>47</td><td>23</td><td>2</td><td>4</td><td>3</td><td>3</td><td>298</td><td>236</td><td>41</td><td>29</td><td>7</td><td>1</td><td>2</td><td>2</td><td>0</td><td>160</td><td>99</td><td>41</td><td>18</td><td>16</td><td>1</td><td>2</td><td>1</td><td>3</td><td>138</td><td>137</td><td>298</td><td>533</td><td>831</td></tr>
<tr><td>Toronto Maple Leafs</td><td>82</td><td>30</td><td>36</td><td>6</td><td>3</td><td>4</td><td>3</td><td>224</td><td>237</td><td>41</td><td>15</td><td>13</td><td>5</td><td>3</td><td>3</td><td>2</td><td>121</td><td>114</td><td>41</td><td>15</td><td>23</td><td>1</td><td>0</td><td>1</td><td>1</td><td>103</td><td>123</td><td>224</td><td>406</td><td>630</td></tr>
<tr><td>Vancouver Canucks</td><td>82</td><td>32</td><td>39</td><td>4</td><td>3</td><td>3</td><td>1</td><td>238</td><td>234</td><td>41</td><td>16</td><td>18</td><td>4</td><td>1</td><td>2</td><td>0</td><td>121</td><td>115</td><td>41</td><td>16</td><td>21</td><td>0</td><td>2</td><td>1</td><td>1</td><td>117</td><td>119</td><td>238</td><td>427</td><td>665</td></tr>
<tr><td>Washington Capitals</td><td>82</td><td>27</td><td>38</td><td>6</td><td>5</td><td>2</td><td>4</td><td>220</td><td>248</td><td>41</td><td>15</td><td>18</td><td>4</td><td>2</td><td>0</td><td>2</td><td>118</td><td>119</td><td>41</td><td>12</td><td>20</td><td>2</td><td>3</td><td>2</td><td>2</td><td>102</td><td>129</td><td>220</td><td>398</td><td>618</td></tr>
<tr><td>Winnipeg Jets</td><td>82</td><td>27</td><td>40</td><td>3</td><td>5</td><td>4</td><td>3</td><td>203</td><td>229</td><td>41</td><td>14</td><td>20</td><td>1</td><td>2</td><td>1</td><td>3</td><td>99</td><td>105</td><td>41</td><td>13</td><td>20</td><td>2</td><td>3</td><td>3</td><td>0</td><td>104</td><td>124</td><td>203</td><td>363</td><td>566</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>ANH</td><td>87</td><td>89</td><td>75</td><td>10</td><td>2463</td><td>833</td><td>811</td><td>789</td><td>52</td><td>2344</td><td>687</td><td>620</td><td>1520</td><td>316</td><td>69</td><td>21,84%</td><td>271</td><td>46</td><td>83,03%</td><td>1</td><td>53,30%</td><td>51,53%</td><td>52,09%</td><td>1901</td><td>2041</td><td>1024</td><td>590</td><td>1447</td><td>522</td><td>6</td><td>4</td></tr>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>86</td><td>90</td><td>90</td><td>14</td><td>2599</td><td>807</td><td>821</td><td>923</td><td>79</td><td>2233</td><td>647</td><td>587</td><td>1547</td><td>301</td><td>79</td><td>26,25%</td><td>265</td><td>51</td><td>80,75%</td><td>1</td><td>51,67%</td><td>52,17%</td><td>54,79%</td><td>1902</td><td>2032</td><td>1040</td><td>587</td><td>1426</td><td>526</td><td>6</td><td>2</td></tr>
<tr><td>Boston Bruins</td><td>BOS</td><td>80</td><td>79</td><td>77</td><td>14</td><td>2375</td><td>788</td><td>744</td><td>814</td><td>59</td><td>2427</td><td>705</td><td>671</td><td>1575</td><td>291</td><td>65</td><td>22,34%</td><td>305</td><td>52</td><td>82,95%</td><td>2</td><td>51,99%</td><td>51,35%</td><td>52,18%</td><td>1952</td><td>1980</td><td>1042</td><td>603</td><td>1375</td><td>520</td><td>3</td><td>2</td></tr>
<tr><td>Buffalo Sabres</td><td>BUF</td><td>82</td><td>81</td><td>67</td><td>11</td><td>2365</td><td>805</td><td>762</td><td>763</td><td>60</td><td>2482</td><td>697</td><td>670</td><td>1600</td><td>282</td><td>55</td><td>19,50%</td><td>303</td><td>58</td><td>80,86%</td><td>3</td><td>49,33%</td><td>49,80%</td><td>48,34%</td><td>1997</td><td>1945</td><td>1031</td><td>594</td><td>1353</td><td>509</td><td>4</td><td>4</td></tr>
<tr><td>Calgary Flames</td><td>CGY</td><td>73</td><td>65</td><td>65</td><td>11</td><td>2309</td><td>736</td><td>773</td><td>773</td><td>45</td><td>2451</td><td>727</td><td>604</td><td>1582</td><td>299</td><td>46</td><td>15,38%</td><td>267</td><td>53</td><td>80,15%</td><td>1</td><td>49,65%</td><td>49,44%</td><td>49,80%</td><td>1997</td><td>1934</td><td>1041</td><td>605</td><td>1341</td><td>519</td><td>4</td><td>3</td></tr>
<tr><td>Carolina Hurricanes</td><td>CAR</td><td>84</td><td>74</td><td>58</td><td>13</td><td>2529</td><td>816</td><td>830</td><td>839</td><td>67</td><td>2441</td><td>715</td><td>650</td><td>1700</td><td>275</td><td>44</td><td>16,00%</td><td>283</td><td>68</td><td>75,97%</td><td>2</td><td>50,82%</td><td>51,56%</td><td>51,33%</td><td>1954</td><td>1978</td><td>1042</td><td>601</td><td>1381</td><td>515</td><td>1</td><td>0</td></tr>
<tr><td>Chicago Blackhawks</td><td>CHI</td><td>66</td><td>82</td><td>85</td><td>10</td><td>2438</td><td>774</td><td>793</td><td>832</td><td>47</td><td>2582</td><td>780</td><td>782</td><td>1684</td><td>272</td><td>44</td><td>16,18%</td><td>336</td><td>56</td><td>83,33%</td><td>2</td><td>50,51%</td><td>53,75%</td><td>51,10%</td><td>2016</td><td>1914</td><td>1036</td><td>608</td><td>1316</td><td>508</td><td>7</td><td>3</td></tr>
<tr><td>Colorado Avalanche</td><td>COL</td><td>70</td><td>78</td><td>69</td><td>11</td><td>2589</td><td>823</td><td>873</td><td>844</td><td>80</td><td>2564</td><td>764</td><td>794</td><td>1630</td><td>284</td><td>42</td><td>14,79%</td><td>336</td><td>53</td><td>84,23%</td><td>1</td><td>50,17%</td><td>51,46%</td><td>50,16%</td><td>2045</td><td>1911</td><td>1045</td><td>610</td><td>1309</td><td>509</td><td>2</td><td>2</td></tr>
<tr><td>Columbus Blue Jackets</td><td>CLB</td><td>75</td><td>68</td><td>63</td><td>8</td><td>2260</td><td>760</td><td>693</td><td>787</td><td>37</td><td>2584</td><td>738</td><td>650</td><td>1574</td><td>288</td><td>54</td><td>18,75%</td><td>294</td><td>46</td><td>84,35%</td><td>2</td><td>50,92%</td><td>50,20%</td><td>50,56%</td><td>1962</td><td>1979</td><td>1027</td><td>596</td><td>1378</td><td>511</td><td>4</td><td>0</td></tr>
<tr><td>Dallas Stars</td><td>DAL</td><td>79</td><td>67</td><td>52</td><td>16</td><td>2346</td><td>800</td><td>725</td><td>800</td><td>49</td><td>2494</td><td>689</td><td>697</td><td>1620</td><td>278</td><td>42</td><td>15,11%</td><td>312</td><td>69</td><td>77,88%</td><td>3</td><td>49,69%</td><td>49,91%</td><td>51,45%</td><td>2000</td><td>1922</td><td>1043</td><td>611</td><td>1331</td><td>509</td><td>3</td><td>2</td></tr>
<tr><td>Detroit Red Wings</td><td>DET</td><td>81</td><td>80</td><td>57</td><td>13</td><td>2405</td><td>739</td><td>805</td><td>827</td><td>49</td><td>2532</td><td>774</td><td>716</td><td>1577</td><td>277</td><td>50</td><td>18,05%</td><td>301</td><td>60</td><td>80,07%</td><td>6</td><td>51,57%</td><td>53,08%</td><td>51,70%</td><td>1959</td><td>1992</td><td>1025</td><td>591</td><td>1392</td><td>514</td><td>5</td><td>1</td></tr>
<tr><td>Edmonton Oilers</td><td>EDM</td><td>91</td><td>86</td><td>74</td><td>6</td><td>2590</td><td>908</td><td>852</td><td>813</td><td>31</td><td>2570</td><td>752</td><td>649</td><td>1559</td><td>288</td><td>57</td><td>19,79%</td><td>288</td><td>54</td><td>81,25%</td><td>2</td><td>48,64%</td><td>46,01%</td><td>48,61%</td><td>2012</td><td>1908</td><td>1038</td><td>604</td><td>1319</td><td>509</td><td>3</td><td>1</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>77</td><td>68</td><td>67</td><td>7</td><td>2466</td><td>861</td><td>812</td><td>763</td><td>51</td><td>2409</td><td>686</td><td>655</td><td>1587</td><td>291</td><td>51</td><td>17,53%</td><td>286</td><td>70</td><td>75,52%</td><td>3</td><td>49,72%</td><td>49,57%</td><td>49,15%</td><td>1926</td><td>2009</td><td>1033</td><td>591</td><td>1408</td><td>516</td><td>5</td><td>2</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>100</td><td>91</td><td>71</td><td>13</td><td>2585</td><td>842</td><td>846</td><td>865</td><td>60</td><td>2366</td><td>624</td><td>713</td><td>1652</td><td>294</td><td>61</td><td>20,75%</td><td>312</td><td>57</td><td>81,73%</td><td>3</td><td>52,56%</td><td>52,01%</td><td>50,95%</td><td>1900</td><td>2032</td><td>1035</td><td>590</td><td>1432</td><td>521</td><td>5</td><td>1</td></tr>
<tr><td>Minnesota Wild</td><td>MIN</td><td>78</td><td>68</td><td>65</td><td>12</td><td>2538</td><td>820</td><td>846</td><td>815</td><td>86</td><td>2436</td><td>726</td><td>509</td><td>1525</td><td>285</td><td>51</td><td>17,89%</td><td>231</td><td>40</td><td>82,68%</td><td>0</td><td>48,13%</td><td>49,52%</td><td>51,16%</td><td>1959</td><td>1988</td><td>1043</td><td>591</td><td>1386</td><td>525</td><td>4</td><td>3</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>96</td><td>71</td><td>66</td><td>18</td><td>2547</td><td>824</td><td>855</td><td>831</td><td>85</td><td>2272</td><td>701</td><td>713</td><td>1638</td><td>337</td><td>66</td><td>19,58%</td><td>298</td><td>54</td><td>81,88%</td><td>2</td><td>51,20%</td><td>51,89%</td><td>52,97%</td><td>1932</td><td>2018</td><td>1045</td><td>605</td><td>1407</td><td>529</td><td>6</td><td>1</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>88</td><td>60</td><td>72</td><td>7</td><td>2368</td><td>794</td><td>737</td><td>820</td><td>20</td><td>2412</td><td>719</td><td>542</td><td>1396</td><td>309</td><td>61</td><td>19,74%</td><td>244</td><td>40</td><td>83,61%</td><td>3</td><td>49,45%</td><td>49,84%</td><td>51,02%</td><td>1947</td><td>1985</td><td>1012</td><td>589</td><td>1394</td><td>510</td><td>7</td><td>3</td></tr>
<tr><td>New Jersey Devils</td><td>NJD</td><td>77</td><td>72</td><td>71</td><td>9</td><td>2490</td><td>853</td><td>800</td><td>803</td><td>61</td><td>2428</td><td>728</td><td>579</td><td>1502</td><td>289</td><td>52</td><td>17,99%</td><td>253</td><td>58</td><td>77,08%</td><td>0</td><td>50,35%</td><td>50,33%</td><td>51,16%</td><td>1950</td><td>1983</td><td>1031</td><td>593</td><td>1386</td><td>517</td><td>5</td><td>2</td></tr>
<tr><td>New York Islanders</td><td>NYI</td><td>89</td><td>62</td><td>67</td><td>5</td><td>2442</td><td>812</td><td>790</td><td>817</td><td>28</td><td>2510</td><td>690</td><td>706</td><td>1650</td><td>316</td><td>67</td><td>21,20%</td><td>302</td><td>57</td><td>81,13%</td><td>2</td><td>47,63%</td><td>50,95%</td><td>51,90%</td><td>1980</td><td>1939</td><td>1029</td><td>597</td><td>1344</td><td>515</td><td>3</td><td>2</td></tr>
<tr><td>New York Rangers</td><td>NYR</td><td>92</td><td>80</td><td>65</td><td>11</td><td>2474</td><td>805</td><td>825</td><td>811</td><td>57</td><td>2512</td><td>751</td><td>763</td><td>1658</td><td>308</td><td>61</td><td>19,81%</td><td>325</td><td>57</td><td>82,46%</td><td>0</td><td>50,34%</td><td>49,76%</td><td>50,75%</td><td>1992</td><td>1950</td><td>1022</td><td>603</td><td>1353</td><td>504</td><td>10</td><td>2</td></tr>
<tr><td>Ottawa Senators</td><td>OTT</td><td>81</td><td>74</td><td>72</td><td>12</td><td>2444</td><td>801</td><td>815</td><td>799</td><td>57</td><td>2411</td><td>679</td><td>643</td><td>1586</td><td>297</td><td>59</td><td>19,87%</td><td>285</td><td>60</td><td>78,95%</td><td>1</td><td>51,61%</td><td>48,26%</td><td>50,08%</td><td>1958</td><td>1986</td><td>1034</td><td>606</td><td>1380</td><td>520</td><td>5</td><td>2</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>86</td><td>78</td><td>68</td><td>10</td><td>2601</td><td>867</td><td>842</td><td>874</td><td>28</td><td>2403</td><td>683</td><td>698</td><td>1610</td><td>334</td><td>70</td><td>20,96%</td><td>287</td><td>68</td><td>76,31%</td><td>2</td><td>50,93%</td><td>50,60%</td><td>50,11%</td><td>1927</td><td>2002</td><td>1031</td><td>589</td><td>1409</td><td>514</td><td>1</td><td>3</td></tr>
<tr><td>Pittsburgh Penguins</td><td>PIT</td><td>80</td><td>90</td><td>72</td><td>7</td><td>2799</td><td>910</td><td>918</td><td>937</td><td>57</td><td>2583</td><td>691</td><td>737</td><td>1605</td><td>278</td><td>52</td><td>18,71%</td><td>314</td><td>57</td><td>81,85%</td><td>4</td><td>52,22%</td><td>51,48%</td><td>54,40%</td><td>2002</td><td>1926</td><td>1027</td><td>603</td><td>1325</td><td>507</td><td>4</td><td>1</td></tr>
<tr><td>Quebec Nordiques</td><td>QUE</td><td>83</td><td>69</td><td>73</td><td>11</td><td>2424</td><td>815</td><td>784</td><td>765</td><td>86</td><td>2572</td><td>764</td><td>759</td><td>1663</td><td>283</td><td>46</td><td>16,25%</td><td>328</td><td>60</td><td>81,71%</td><td>3</td><td>47,41%</td><td>50,28%</td><td>48,44%</td><td>2031</td><td>1915</td><td>1042</td><td>605</td><td>1320</td><td>511</td><td>4</td><td>2</td></tr>
<tr><td>San Jose Sharks</td><td>SJS</td><td>92</td><td>70</td><td>74</td><td>9</td><td>2454</td><td>798</td><td>802</td><td>829</td><td>39</td><td>2411</td><td>723</td><td>597</td><td>1510</td><td>275</td><td>48</td><td>17,45%</td><td>256</td><td>50</td><td>80,47%</td><td>1</td><td>50,07%</td><td>51,52%</td><td>48,31%</td><td>1979</td><td>1957</td><td>1023</td><td>594</td><td>1370</td><td>508</td><td>1</td><td>2</td></tr>
<tr><td>Seattle Saints</td><td>SEA</td><td>76</td><td>79</td><td>72</td><td>11</td><td>2401</td><td>741</td><td>818</td><td>797</td><td>77</td><td>2596</td><td>719</td><td>604</td><td>1602</td><td>270</td><td>51</td><td>18,89%</td><td>261</td><td>51</td><td>80,46%</td><td>4</td><td>48,72%</td><td>49,52%</td><td>49,68%</td><td>2035</td><td>1893</td><td>1060</td><td>617</td><td>1296</td><td>518</td><td>2</td><td>2</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>82</td><td>83</td><td>77</td><td>15</td><td>2509</td><td>834</td><td>824</td><td>818</td><td>60</td><td>2461</td><td>707</td><td>633</td><td>1421</td><td>311</td><td>72</td><td>23,15%</td><td>275</td><td>55</td><td>80,00%</td><td>0</td><td>52,03%</td><td>51,26%</td><td>50,36%</td><td>1936</td><td>2017</td><td>1039</td><td>595</td><td>1410</td><td>528</td><td>2</td><td>0</td></tr>
<tr><td>Tampa Bay Lightning</td><td>TBL</td><td>100</td><td>99</td><td>94</td><td>6</td><td>2697</td><td>847</td><td>862</td><td>967</td><td>45</td><td>2440</td><td>739</td><td>685</td><td>1605</td><td>290</td><td>68</td><td>23,45%</td><td>312</td><td>55</td><td>82,37%</td><td>3</td><td>51,69%</td><td>48,46%</td><td>49,51%</td><td>1964</td><td>1964</td><td>1042</td><td>602</td><td>1359</td><td>517</td><td>8</td><td>1</td></tr>
<tr><td>Toronto Maple Leafs</td><td>TOR</td><td>87</td><td>62</td><td>65</td><td>12</td><td>2266</td><td>766</td><td>728</td><td>750</td><td>43</td><td>2492</td><td>698</td><td>783</td><td>1628</td><td>320</td><td>57</td><td>17,81%</td><td>336</td><td>56</td><td>83,33%</td><td>2</td><td>49,49%</td><td>51,46%</td><td>52,11%</td><td>1959</td><td>1975</td><td>1034</td><td>606</td><td>1367</td><td>515</td><td>4</td><td>2</td></tr>
<tr><td>Vancouver Canucks</td><td>VAN</td><td>72</td><td>79</td><td>80</td><td>10</td><td>2533</td><td>837</td><td>844</td><td>825</td><td>44</td><td>2361</td><td>698</td><td>691</td><td>1525</td><td>284</td><td>56</td><td>19,72%</td><td>294</td><td>60</td><td>79,59%</td><td>2</td><td>52,19%</td><td>54,69%</td><td>52,44%</td><td>1910</td><td>2013</td><td>1028</td><td>585</td><td>1413</td><td>519</td><td>8</td><td>2</td></tr>
<tr><td>Washington Capitals</td><td>WSH</td><td>68</td><td>71</td><td>73</td><td>11</td><td>2386</td><td>770</td><td>776</td><td>812</td><td>48</td><td>2756</td><td>767</td><td>758</td><td>1715</td><td>278</td><td>57</td><td>20,50%</td><td>344</td><td>66</td><td>80,81%</td><td>2</td><td>48,35%</td><td>48,82%</td><td>45,72%</td><td>2012</td><td>1938</td><td>1023</td><td>600</td><td>1337</td><td>503</td><td>2</td><td>3</td></tr>
<tr><td>Winnipeg Jets</td><td>WPG</td><td>83</td><td>62</td><td>51</td><td>10</td><td>2355</td><td>824</td><td>736</td><td>757</td><td>65</td><td>2512</td><td>722</td><td>592</td><td>1671</td><td>278</td><td>42</td><td>15,11%</td><td>274</td><td>58</td><td>78,83%</td><td>1</td><td>47,90%</td><td>49,32%</td><td>49,79%</td><td>1991</td><td>1959</td><td>1024</td><td>591</td><td>1368</td><td>509</td><td>3</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,89</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Tampa Bay Lightning</td><td>3,63</td></tr>
<tr><td>2</td><td>Arizona Coyotes</td><td>3,37</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>3,30</td></tr>
<tr><td>4</td><td>Anaheim Ducks</td><td>3,15</td></tr>
<tr><td>5</td><td>Edmonton Oilers</td><td>3,12</td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>3,10</td></tr>
<tr><td>7</td><td>Pittsburgh Penguins</td><td>3,00</td></tr>
<tr><td>8</td><td>Boston Bruins</td><td>3,00</td></tr>
<tr><td>9</td><td>New York Rangers</td><td>2,99</td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>2,99</td></tr>
<tr><td>11</td><td>San Jose Sharks</td><td>2,98</td></tr>
<tr><td>12</td><td>Chicago Blackhawks</td><td>2,94</td></tr>
<tr><td>13</td><td>Philadelphia Flyers</td><td>2,91</td></tr>
<tr><td>14</td><td>Buffalo Sabres</td><td>2,91</td></tr>
<tr><td>15</td><td>Vancouver Canucks</td><td>2,90</td></tr>
<tr><td>16</td><td>Ottawa Senators</td><td>2,87</td></tr>
<tr><td>17</td><td>Seattle Saints</td><td>2,87</td></tr>
<tr><td>18</td><td>Quebec Nordiques</td><td>2,83</td></tr>
<tr><td>19</td><td>Detroit Red Wings</td><td>2,79</td></tr>
<tr><td>20</td><td>Carolina Hurricanes</td><td>2,78</td></tr>
<tr><td>21</td><td>Nashville Predators</td><td>2,77</td></tr>
<tr><td>22</td><td>New Jersey Devils</td><td>2,76</td></tr>
<tr><td>23</td><td>Colorado Avalanche</td><td>2,76</td></tr>
<tr><td>24</td><td>Toronto Maple Leafs</td><td>2,73</td></tr>
<tr><td>25</td><td>New York Islanders</td><td>2,72</td></tr>
<tr><td>26</td><td>Washington Capitals</td><td>2,68</td></tr>
<tr><td>27</td><td>Minnesota Wild</td><td>2,66</td></tr>
<tr><td>28</td><td>Florida Panthers</td><td>2,66</td></tr>
<tr><td>29</td><td>Columbus Blue Jackets</td><td>2,59</td></tr>
<tr><td>30</td><td>Calgary Flames</td><td>2,57</td></tr>
<tr><td>31</td><td>Dallas Stars</td><td>2,55</td></tr>
<tr><td>32</td><td>Winnipeg Jets</td><td>2,48</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,89</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Boston Bruins</td><td>2,33</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>2,54</td></tr>
<tr><td>3</td><td>Nashville Predators</td><td>2,55</td></tr>
<tr><td>4</td><td>New York Rangers</td><td>2,66</td></tr>
<tr><td>5</td><td>St. Louis Blues</td><td>2,68</td></tr>
<tr><td>6</td><td>Ottawa Senators</td><td>2,72</td></tr>
<tr><td>7</td><td>Los Angeles Kings</td><td>2,77</td></tr>
<tr><td>8</td><td>Pittsburgh Penguins</td><td>2,77</td></tr>
<tr><td>9</td><td>Chicago Blackhawks</td><td>2,78</td></tr>
<tr><td>10</td><td>Winnipeg Jets</td><td>2,79</td></tr>
<tr><td>11</td><td>New Jersey Devils</td><td>2,83</td></tr>
<tr><td>12</td><td>Vancouver Canucks</td><td>2,85</td></tr>
<tr><td>13</td><td>Columbus Blue Jackets</td><td>2,87</td></tr>
<tr><td>14</td><td>Anaheim Ducks</td><td>2,88</td></tr>
<tr><td>15</td><td>Tampa Bay Lightning</td><td>2,88</td></tr>
<tr><td>16</td><td>Toronto Maple Leafs</td><td>2,89</td></tr>
<tr><td>17</td><td>Calgary Flames</td><td>2,89</td></tr>
<tr><td>18</td><td>Colorado Avalanche</td><td>2,94</td></tr>
<tr><td>19</td><td>Florida Panthers</td><td>2,94</td></tr>
<tr><td>20</td><td>Arizona Coyotes</td><td>2,98</td></tr>
<tr><td>21</td><td>Minnesota Wild</td><td>2,98</td></tr>
<tr><td>22</td><td>Philadelphia Flyers</td><td>2,98</td></tr>
<tr><td>23</td><td>Seattle Saints</td><td>3,00</td></tr>
<tr><td>24</td><td>Edmonton Oilers</td><td>3,02</td></tr>
<tr><td>25</td><td>Washington Capitals</td><td>3,02</td></tr>
<tr><td>26</td><td>Buffalo Sabres</td><td>3,04</td></tr>
<tr><td>27</td><td>Detroit Red Wings</td><td>3,06</td></tr>
<tr><td>28</td><td>Carolina Hurricanes</td><td>3,07</td></tr>
<tr><td>29</td><td>Dallas Stars</td><td>3,10</td></tr>
<tr><td>30</td><td>San Jose Sharks</td><td>3,10</td></tr>
<tr><td>31</td><td>Quebec Nordiques</td><td>3,21</td></tr>
<tr><td>32</td><td>New York Islanders</td><td>3,24</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Boston Bruins</td><td>128,80%</td></tr>
<tr><td>2</td><td>Tampa Bay Lightning</td><td>126,27%</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>119,38%</td></tr>
<tr><td>4</td><td>Montreal Canadiens</td><td>117,79%</td></tr>
<tr><td>5</td><td>St. Louis Blues</td><td>115,45%</td></tr>
<tr><td>6</td><td>Arizona Coyotes</td><td>113,11%</td></tr>
<tr><td>7</td><td>New York Rangers</td><td>112,39%</td></tr>
<tr><td>8</td><td>Anaheim Ducks</td><td>109,32%</td></tr>
<tr><td>9</td><td>Nashville Predators</td><td>108,61%</td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>108,37%</td></tr>
<tr><td>11</td><td>Chicago Blackhawks</td><td>105,70%</td></tr>
<tr><td>12</td><td>Ottawa Senators</td><td>105,38%</td></tr>
<tr><td>13</td><td>Edmonton Oilers</td><td>103,23%</td></tr>
<tr><td>14</td><td>Vancouver Canucks</td><td>101,71%</td></tr>
<tr><td>15</td><td>Philadelphia Flyers</td><td>97,95%</td></tr>
<tr><td>16</td><td>New Jersey Devils</td><td>97,41%</td></tr>
<tr><td>17</td><td>San Jose Sharks</td><td>96,06%</td></tr>
<tr><td>18</td><td>Buffalo Sabres</td><td>95,98%</td></tr>
<tr><td>19</td><td>Seattle Saints</td><td>95,53%</td></tr>
<tr><td>20</td><td>Toronto Maple Leafs</td><td>94,51%</td></tr>
<tr><td>21</td><td>Colorado Avalanche</td><td>93,78%</td></tr>
<tr><td>22</td><td>Detroit Red Wings</td><td>91,24%</td></tr>
<tr><td>23</td><td>Carolina Hurricanes</td><td>90,48%</td></tr>
<tr><td>24</td><td>Florida Panthers</td><td>90,46%</td></tr>
<tr><td>25</td><td>Columbus Blue Jackets</td><td>90,21%</td></tr>
<tr><td>26</td><td>Minnesota Wild</td><td>89,34%</td></tr>
<tr><td>27</td><td>Calgary Flames</td><td>89,03%</td></tr>
<tr><td>28</td><td>Washington Capitals</td><td>88,71%</td></tr>
<tr><td>29</td><td>Winnipeg Jets</td><td>88,65%</td></tr>
<tr><td>30</td><td>Quebec Nordiques</td><td>88,21%</td></tr>
<tr><td>31</td><td>New York Islanders</td><td>83,83%</td></tr>
<tr><td>32</td><td>Dallas Stars</td><td>82,28%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,14%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Arizona Coyotes</td><td>26,25%</td></tr>
<tr><td>2</td><td>Tampa Bay Lightning</td><td>23,45%</td></tr>
<tr><td>3</td><td>St. Louis Blues</td><td>23,15%</td></tr>
<tr><td>4</td><td>Boston Bruins</td><td>22,34%</td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>21,84%</td></tr>
<tr><td>6</td><td>New York Islanders</td><td>21,20%</td></tr>
<tr><td>7</td><td>Philadelphia Flyers</td><td>20,96%</td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>20,75%</td></tr>
<tr><td>9</td><td>Washington Capitals</td><td>20,50%</td></tr>
<tr><td>10</td><td>Ottawa Senators</td><td>19,87%</td></tr>
<tr><td>11</td><td>New York Rangers</td><td>19,81%</td></tr>
<tr><td>12</td><td>Edmonton Oilers</td><td>19,79%</td></tr>
<tr><td>13</td><td>Nashville Predators</td><td>19,74%</td></tr>
<tr><td>14</td><td>Vancouver Canucks</td><td>19,72%</td></tr>
<tr><td>15</td><td>Montreal Canadiens</td><td>19,58%</td></tr>
<tr><td>16</td><td>Buffalo Sabres</td><td>19,50%</td></tr>
<tr><td>17</td><td>Seattle Saints</td><td>18,89%</td></tr>
<tr><td>18</td><td>Columbus Blue Jackets</td><td>18,75%</td></tr>
<tr><td>19</td><td>Pittsburgh Penguins</td><td>18,71%</td></tr>
<tr><td>20</td><td>Detroit Red Wings</td><td>18,05%</td></tr>
<tr><td>21</td><td>New Jersey Devils</td><td>17,99%</td></tr>
<tr><td>22</td><td>Minnesota Wild</td><td>17,89%</td></tr>
<tr><td>23</td><td>Toronto Maple Leafs</td><td>17,81%</td></tr>
<tr><td>24</td><td>Florida Panthers</td><td>17,53%</td></tr>
<tr><td>25</td><td>San Jose Sharks</td><td>17,45%</td></tr>
<tr><td>26</td><td>Quebec Nordiques</td><td>16,25%</td></tr>
<tr><td>27</td><td>Chicago Blackhawks</td><td>16,18%</td></tr>
<tr><td>28</td><td>Carolina Hurricanes</td><td>16,00%</td></tr>
<tr><td>29</td><td>Calgary Flames</td><td>15,38%</td></tr>
<tr><td>30</td><td>Winnipeg Jets</td><td>15,11%</td></tr>
<tr><td>31</td><td>Dallas Stars</td><td>15,11%</td></tr>
<tr><td>32</td><td>Colorado Avalanche</td><td>14,79%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,86%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Columbus Blue Jackets</td><td>84,35%</td></tr>
<tr><td>2</td><td>Colorado Avalanche</td><td>84,23%</td></tr>
<tr><td>3</td><td>Nashville Predators</td><td>83,61%</td></tr>
<tr><td>4</td><td>Toronto Maple Leafs</td><td>83,33%</td></tr>
<tr><td>5</td><td>Chicago Blackhawks</td><td>83,33%</td></tr>
<tr><td>6</td><td>Anaheim Ducks</td><td>83,03%</td></tr>
<tr><td>7</td><td>Boston Bruins</td><td>82,95%</td></tr>
<tr><td>8</td><td>Minnesota Wild</td><td>82,68%</td></tr>
<tr><td>9</td><td>New York Rangers</td><td>82,46%</td></tr>
<tr><td>10</td><td>Tampa Bay Lightning</td><td>82,37%</td></tr>
<tr><td>11</td><td>Montreal Canadiens</td><td>81,88%</td></tr>
<tr><td>12</td><td>Pittsburgh Penguins</td><td>81,85%</td></tr>
<tr><td>13</td><td>Los Angeles Kings</td><td>81,73%</td></tr>
<tr><td>14</td><td>Quebec Nordiques</td><td>81,71%</td></tr>
<tr><td>15</td><td>Edmonton Oilers</td><td>81,25%</td></tr>
<tr><td>16</td><td>New York Islanders</td><td>81,13%</td></tr>
<tr><td>17</td><td>Buffalo Sabres</td><td>80,86%</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>80,81%</td></tr>
<tr><td>19</td><td>Arizona Coyotes</td><td>80,75%</td></tr>
<tr><td>20</td><td>San Jose Sharks</td><td>80,47%</td></tr>
<tr><td>21</td><td>Seattle Saints</td><td>80,46%</td></tr>
<tr><td>22</td><td>Calgary Flames</td><td>80,15%</td></tr>
<tr><td>23</td><td>Detroit Red Wings</td><td>80,07%</td></tr>
<tr><td>24</td><td>St. Louis Blues</td><td>80,00%</td></tr>
<tr><td>25</td><td>Vancouver Canucks</td><td>79,59%</td></tr>
<tr><td>26</td><td>Ottawa Senators</td><td>78,95%</td></tr>
<tr><td>27</td><td>Winnipeg Jets</td><td>78,83%</td></tr>
<tr><td>28</td><td>Dallas Stars</td><td>77,88%</td></tr>
<tr><td>29</td><td>New Jersey Devils</td><td>77,08%</td></tr>
<tr><td>30</td><td>Philadelphia Flyers</td><td>76,31%</td></tr>
<tr><td>31</td><td>Carolina Hurricanes</td><td>75,97%</td></tr>
<tr><td>32</td><td>Florida Panthers</td><td>75,52%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Arizona Coyotes</td><td>107,00%</td></tr>
<tr><td>2</td><td>Tampa Bay Lightning</td><td>105,82%</td></tr>
<tr><td>3</td><td>Boston Bruins</td><td>105,29%</td></tr>
<tr><td>4</td><td>Anaheim Ducks</td><td>104,86%</td></tr>
<tr><td>5</td><td>Nashville Predators</td><td>103,35%</td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>103,15%</td></tr>
<tr><td>7</td><td>Columbus Blue Jackets</td><td>103,10%</td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>102,48%</td></tr>
<tr><td>9</td><td>New York Islanders</td><td>102,33%</td></tr>
<tr><td>10</td><td>New York Rangers</td><td>102,27%</td></tr>
<tr><td>11</td><td>Montreal Canadiens</td><td>101,46%</td></tr>
<tr><td>12</td><td>Washington Capitals</td><td>101,32%</td></tr>
<tr><td>13</td><td>Toronto Maple Leafs</td><td>101,15%</td></tr>
<tr><td>14</td><td>Edmonton Oilers</td><td>101,04%</td></tr>
<tr><td>15</td><td>Minnesota Wild</td><td>100,58%</td></tr>
<tr><td>16</td><td>Pittsburgh Penguins</td><td>100,55%</td></tr>
<tr><td>17</td><td>Buffalo Sabres</td><td>100,36%</td></tr>
<tr><td>18</td><td>Chicago Blackhawks</td><td>99,51%</td></tr>
<tr><td>19</td><td>Seattle Saints</td><td>99,35%</td></tr>
<tr><td>20</td><td>Vancouver Canucks</td><td>99,31%</td></tr>
<tr><td>21</td><td>Colorado Avalanche</td><td>99,01%</td></tr>
<tr><td>22</td><td>Ottawa Senators</td><td>98,81%</td></tr>
<tr><td>23</td><td>Detroit Red Wings</td><td>98,12%</td></tr>
<tr><td>24</td><td>Quebec Nordiques</td><td>97,96%</td></tr>
<tr><td>25</td><td>San Jose Sharks</td><td>97,92%</td></tr>
<tr><td>26</td><td>Philadelphia Flyers</td><td>97,26%</td></tr>
<tr><td>27</td><td>Calgary Flames</td><td>95,53%</td></tr>
<tr><td>28</td><td>New Jersey Devils</td><td>95,07%</td></tr>
<tr><td>29</td><td>Winnipeg Jets</td><td>93,94%</td></tr>
<tr><td>30</td><td>Florida Panthers</td><td>93,05%</td></tr>
<tr><td>31</td><td>Dallas Stars</td><td>92,99%</td></tr>
<tr><td>32</td><td>Carolina Hurricanes</td><td>91,97%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30,12</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Pittsburgh Penguins</td><td>34,13</td></tr>
<tr><td>2</td><td>Tampa Bay Lightning</td><td>32,89</td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>31,72</td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>31,70</td></tr>
<tr><td>5</td><td>Edmonton Oilers</td><td>31,59</td></tr>
<tr><td>6</td><td>Colorado Avalanche</td><td>31,57</td></tr>
<tr><td>7</td><td>Los Angeles Kings</td><td>31,52</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>31,06</td></tr>
<tr><td>9</td><td>Minnesota Wild</td><td>30,95</td></tr>
<tr><td>10</td><td>Vancouver Canucks</td><td>30,89</td></tr>
<tr><td>11</td><td>Carolina Hurricanes</td><td>30,84</td></tr>
<tr><td>12</td><td>St. Louis Blues</td><td>30,60</td></tr>
<tr><td>13</td><td>New Jersey Devils</td><td>30,37</td></tr>
<tr><td>14</td><td>New York Rangers</td><td>30,17</td></tr>
<tr><td>15</td><td>Florida Panthers</td><td>30,07</td></tr>
<tr><td>16</td><td>Anaheim Ducks</td><td>30,04</td></tr>
<tr><td>17</td><td>San Jose Sharks</td><td>29,93</td></tr>
<tr><td>18</td><td>Ottawa Senators</td><td>29,80</td></tr>
<tr><td>19</td><td>New York Islanders</td><td>29,78</td></tr>
<tr><td>20</td><td>Chicago Blackhawks</td><td>29,73</td></tr>
<tr><td>21</td><td>Quebec Nordiques</td><td>29,56</td></tr>
<tr><td>22</td><td>Detroit Red Wings</td><td>29,33</td></tr>
<tr><td>23</td><td>Seattle Saints</td><td>29,28</td></tr>
<tr><td>24</td><td>Washington Capitals</td><td>29,10</td></tr>
<tr><td>25</td><td>Boston Bruins</td><td>28,96</td></tr>
<tr><td>26</td><td>Nashville Predators</td><td>28,88</td></tr>
<tr><td>27</td><td>Buffalo Sabres</td><td>28,84</td></tr>
<tr><td>28</td><td>Winnipeg Jets</td><td>28,72</td></tr>
<tr><td>29</td><td>Dallas Stars</td><td>28,61</td></tr>
<tr><td>30</td><td>Calgary Flames</td><td>28,16</td></tr>
<tr><td>31</td><td>Toronto Maple Leafs</td><td>27,63</td></tr>
<tr><td>32</td><td>Columbus Blue Jackets</td><td>27,56</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30,12</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Arizona Coyotes</td><td>27,23</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>27,71</td></tr>
<tr><td>3</td><td>Anaheim Ducks</td><td>28,59</td></tr>
<tr><td>4</td><td>Vancouver Canucks</td><td>28,79</td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>28,85</td></tr>
<tr><td>6</td><td>Philadelphia Flyers</td><td>29,30</td></tr>
<tr><td>7</td><td>Florida Panthers</td><td>29,38</td></tr>
<tr><td>8</td><td>Ottawa Senators</td><td>29,40</td></tr>
<tr><td>9</td><td>San Jose Sharks</td><td>29,40</td></tr>
<tr><td>10</td><td>Nashville Predators</td><td>29,41</td></tr>
<tr><td>11</td><td>Boston Bruins</td><td>29,60</td></tr>
<tr><td>12</td><td>New Jersey Devils</td><td>29,61</td></tr>
<tr><td>13</td><td>Minnesota Wild</td><td>29,71</td></tr>
<tr><td>14</td><td>Tampa Bay Lightning</td><td>29,76</td></tr>
<tr><td>15</td><td>Carolina Hurricanes</td><td>29,77</td></tr>
<tr><td>16</td><td>Calgary Flames</td><td>29,89</td></tr>
<tr><td>17</td><td>St. Louis Blues</td><td>30,01</td></tr>
<tr><td>18</td><td>Buffalo Sabres</td><td>30,27</td></tr>
<tr><td>19</td><td>Toronto Maple Leafs</td><td>30,39</td></tr>
<tr><td>20</td><td>Dallas Stars</td><td>30,41</td></tr>
<tr><td>21</td><td>New York Islanders</td><td>30,61</td></tr>
<tr><td>22</td><td>New York Rangers</td><td>30,63</td></tr>
<tr><td>23</td><td>Winnipeg Jets</td><td>30,63</td></tr>
<tr><td>24</td><td>Detroit Red Wings</td><td>30,88</td></tr>
<tr><td>25</td><td>Colorado Avalanche</td><td>31,27</td></tr>
<tr><td>26</td><td>Edmonton Oilers</td><td>31,34</td></tr>
<tr><td>27</td><td>Quebec Nordiques</td><td>31,37</td></tr>
<tr><td>28</td><td>Chicago Blackhawks</td><td>31,49</td></tr>
<tr><td>29</td><td>Pittsburgh Penguins</td><td>31,50</td></tr>
<tr><td>30</td><td>Columbus Blue Jackets</td><td>31,51</td></tr>
<tr><td>31</td><td>Seattle Saints</td><td>31,66</td></tr>
<tr><td>32</td><td>Washington Capitals</td><td>33,61</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Arizona Coyotes</td><td>116,39%</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>112,10%</td></tr>
<tr><td>3</td><td>Tampa Bay Lightning</td><td>110,53%</td></tr>
<tr><td>4</td><td>Los Angeles Kings</td><td>109,26%</td></tr>
<tr><td>5</td><td>Pittsburgh Penguins</td><td>108,36%</td></tr>
<tr><td>6</td><td>Philadelphia Flyers</td><td>108,24%</td></tr>
<tr><td>7</td><td>Vancouver Canucks</td><td>107,29%</td></tr>
<tr><td>8</td><td>Anaheim Ducks</td><td>105,08%</td></tr>
<tr><td>9</td><td>Minnesota Wild</td><td>104,19%</td></tr>
<tr><td>10</td><td>Carolina Hurricanes</td><td>103,61%</td></tr>
<tr><td>11</td><td>New Jersey Devils</td><td>102,55%</td></tr>
<tr><td>12</td><td>Florida Panthers</td><td>102,37%</td></tr>
<tr><td>13</td><td>St. Louis Blues</td><td>101,95%</td></tr>
<tr><td>14</td><td>San Jose Sharks</td><td>101,78%</td></tr>
<tr><td>15</td><td>Ottawa Senators</td><td>101,37%</td></tr>
<tr><td>16</td><td>Colorado Avalanche</td><td>100,98%</td></tr>
<tr><td>17</td><td>Edmonton Oilers</td><td>100,78%</td></tr>
<tr><td>18</td><td>New York Rangers</td><td>98,49%</td></tr>
<tr><td>19</td><td>Nashville Predators</td><td>98,18%</td></tr>
<tr><td>20</td><td>Boston Bruins</td><td>97,86%</td></tr>
<tr><td>21</td><td>New York Islanders</td><td>97,29%</td></tr>
<tr><td>22</td><td>Buffalo Sabres</td><td>95,29%</td></tr>
<tr><td>23</td><td>Detroit Red Wings</td><td>94,98%</td></tr>
<tr><td>24</td><td>Chicago Blackhawks</td><td>94,42%</td></tr>
<tr><td>25</td><td>Quebec Nordiques</td><td>94,25%</td></tr>
<tr><td>26</td><td>Calgary Flames</td><td>94,21%</td></tr>
<tr><td>27</td><td>Dallas Stars</td><td>94,07%</td></tr>
<tr><td>28</td><td>Winnipeg Jets</td><td>93,75%</td></tr>
<tr><td>29</td><td>Seattle Saints</td><td>92,49%</td></tr>
<tr><td>30</td><td>Toronto Maple Leafs</td><td>90,93%</td></tr>
<tr><td>31</td><td>Columbus Blue Jackets</td><td>87,46%</td></tr>
<tr><td>32</td><td>Washington Capitals</td><td>86,57%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8,17</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Minnesota Wild</td><td>6,21</td></tr>
<tr><td>2</td><td>Nashville Predators</td><td>6,61</td></tr>
<tr><td>3</td><td>New Jersey Devils</td><td>7,06</td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>7,16</td></tr>
<tr><td>5</td><td>Winnipeg Jets</td><td>7,22</td></tr>
<tr><td>6</td><td>San Jose Sharks</td><td>7,28</td></tr>
<tr><td>7</td><td>Calgary Flames</td><td>7,37</td></tr>
<tr><td>8</td><td>Seattle Saints</td><td>7,37</td></tr>
<tr><td>9</td><td>Anaheim Ducks</td><td>7,56</td></tr>
<tr><td>10</td><td>St. Louis Blues</td><td>7,72</td></tr>
<tr><td>11</td><td>Ottawa Senators</td><td>7,84</td></tr>
<tr><td>12</td><td>Edmonton Oilers</td><td>7,91</td></tr>
<tr><td>13</td><td>Carolina Hurricanes</td><td>7,93</td></tr>
<tr><td>14</td><td>Columbus Blue Jackets</td><td>7,93</td></tr>
<tr><td>15</td><td>Florida Panthers</td><td>7,99</td></tr>
<tr><td>16</td><td>Buffalo Sabres</td><td>8,17</td></tr>
<tr><td>17</td><td>Boston Bruins</td><td>8,18</td></tr>
<tr><td>18</td><td>Tampa Bay Lightning</td><td>8,35</td></tr>
<tr><td>19</td><td>Vancouver Canucks</td><td>8,43</td></tr>
<tr><td>20</td><td>Dallas Stars</td><td>8,50</td></tr>
<tr><td>21</td><td>Philadelphia Flyers</td><td>8,51</td></tr>
<tr><td>22</td><td>New York Islanders</td><td>8,61</td></tr>
<tr><td>23</td><td>Los Angeles Kings</td><td>8,70</td></tr>
<tr><td>24</td><td>Montreal Canadiens</td><td>8,70</td></tr>
<tr><td>25</td><td>Detroit Red Wings</td><td>8,73</td></tr>
<tr><td>26</td><td>Pittsburgh Penguins</td><td>8,99</td></tr>
<tr><td>27</td><td>Washington Capitals</td><td>9,24</td></tr>
<tr><td>28</td><td>Quebec Nordiques</td><td>9,26</td></tr>
<tr><td>29</td><td>New York Rangers</td><td>9,30</td></tr>
<tr><td>30</td><td>Chicago Blackhawks</td><td>9,54</td></tr>
<tr><td>31</td><td>Toronto Maple Leafs</td><td>9,55</td></tr>
<tr><td>32</td><td>Colorado Avalanche</td><td>9,68</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,40</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Washington Capitals</td><td>20,91</td></tr>
<tr><td>2</td><td>Carolina Hurricanes</td><td>20,73</td></tr>
<tr><td>3</td><td>Chicago Blackhawks</td><td>20,54</td></tr>
<tr><td>4</td><td>Winnipeg Jets</td><td>20,38</td></tr>
<tr><td>5</td><td>Quebec Nordiques</td><td>20,28</td></tr>
<tr><td>6</td><td>New York Rangers</td><td>20,22</td></tr>
<tr><td>7</td><td>Los Angeles Kings</td><td>20,15</td></tr>
<tr><td>8</td><td>New York Islanders</td><td>20,12</td></tr>
<tr><td>9</td><td>Montreal Canadiens</td><td>19,98</td></tr>
<tr><td>10</td><td>Colorado Avalanche</td><td>19,88</td></tr>
<tr><td>11</td><td>Toronto Maple Leafs</td><td>19,85</td></tr>
<tr><td>12</td><td>Dallas Stars</td><td>19,76</td></tr>
<tr><td>13</td><td>Philadelphia Flyers</td><td>19,63</td></tr>
<tr><td>14</td><td>Tampa Bay Lightning</td><td>19,57</td></tr>
<tr><td>15</td><td>Pittsburgh Penguins</td><td>19,57</td></tr>
<tr><td>16</td><td>Seattle Saints</td><td>19,54</td></tr>
<tr><td>17</td><td>Buffalo Sabres</td><td>19,51</td></tr>
<tr><td>18</td><td>Florida Panthers</td><td>19,35</td></tr>
<tr><td>19</td><td>Ottawa Senators</td><td>19,34</td></tr>
<tr><td>20</td><td>Calgary Flames</td><td>19,29</td></tr>
<tr><td>21</td><td>Detroit Red Wings</td><td>19,23</td></tr>
<tr><td>22</td><td>Boston Bruins</td><td>19,21</td></tr>
<tr><td>23</td><td>Columbus Blue Jackets</td><td>19,20</td></tr>
<tr><td>24</td><td>Edmonton Oilers</td><td>19,01</td></tr>
<tr><td>25</td><td>Arizona Coyotes</td><td>18,87</td></tr>
<tr><td>26</td><td>Vancouver Canucks</td><td>18,60</td></tr>
<tr><td>27</td><td>Minnesota Wild</td><td>18,60</td></tr>
<tr><td>28</td><td>Anaheim Ducks</td><td>18,54</td></tr>
<tr><td>29</td><td>San Jose Sharks</td><td>18,41</td></tr>
<tr><td>30</td><td>New Jersey Devils</td><td>18,32</td></tr>
<tr><td>31</td><td>St. Louis Blues</td><td>17,33</td></tr>
<tr><td>32</td><td>Nashville Predators</td><td>17,02</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Vancouver Canucks</td><td>53,28%</td></tr>
<tr><td>2</td><td>Arizona Coyotes</td><td>52,50%</td></tr>
<tr><td>3</td><td>Anaheim Ducks</td><td>52,34%</td></tr>
<tr><td>4</td><td>Pittsburgh Penguins</td><td>52,27%</td></tr>
<tr><td>5</td><td>Detroit Red Wings</td><td>52,21%</td></tr>
<tr><td>6</td><td>Los Angeles Kings</td><td>52,03%</td></tr>
<tr><td>7</td><td>Chicago Blackhawks</td><td>51,90%</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>51,81%</td></tr>
<tr><td>9</td><td>Boston Bruins</td><td>51,76%</td></tr>
<tr><td>10</td><td>St. Louis Blues</td><td>51,41%</td></tr>
<tr><td>11</td><td>Carolina Hurricanes</td><td>51,22%</td></tr>
<tr><td>12</td><td>Toronto Maple Leafs</td><td>50,74%</td></tr>
<tr><td>13</td><td>Colorado Avalanche</td><td>50,70%</td></tr>
<tr><td>14</td><td>Philadelphia Flyers</td><td>50,64%</td></tr>
<tr><td>15</td><td>Columbus Blue Jackets</td><td>50,57%</td></tr>
<tr><td>16</td><td>New Jersey Devils</td><td>50,48%</td></tr>
<tr><td>17</td><td>San Jose Sharks</td><td>50,34%</td></tr>
<tr><td>18</td><td>New York Rangers</td><td>50,17%</td></tr>
<tr><td>19</td><td>Dallas Stars</td><td>50,10%</td></tr>
<tr><td>20</td><td>Ottawa Senators</td><td>49,95%</td></tr>
<tr><td>21</td><td>Tampa Bay Lightning</td><td>49,92%</td></tr>
<tr><td>22</td><td>Nashville Predators</td><td>49,89%</td></tr>
<tr><td>23</td><td>New York Islanders</td><td>49,75%</td></tr>
<tr><td>24</td><td>Calgary Flames</td><td>49,59%</td></tr>
<tr><td>25</td><td>Florida Panthers</td><td>49,55%</td></tr>
<tr><td>26</td><td>Buffalo Sabres</td><td>49,34%</td></tr>
<tr><td>27</td><td>Minnesota Wild</td><td>49,25%</td></tr>
<tr><td>28</td><td>Seattle Saints</td><td>49,21%</td></tr>
<tr><td>29</td><td>Winnipeg Jets</td><td>48,80%</td></tr>
<tr><td>30</td><td>Quebec Nordiques</td><td>48,74%</td></tr>
<tr><td>31</td><td>Washington Capitals</td><td>48,08%</td></tr>
<tr><td>32</td><td>Edmonton Oilers</td><td>47,55%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
