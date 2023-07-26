<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Team Stats</title>
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
<tr><td>Laval Chiefs</td><td>80</td><td>30</td><td>32</td><td>4</td><td>7</td><td>6</td><td>1</td><td>237</td><td>241</td><td>40</td><td>15</td><td>17</td><td>1</td><td>2</td><td>4</td><td>1</td><td>112</td><td>124</td><td>40</td><td>15</td><td>15</td><td>3</td><td>5</td><td>2</td><td>0</td><td>125</td><td>117</td><td>237</td><td>426</td><td>663</td></tr>
<tr><td>Portland Pirates</td><td>80</td><td>28</td><td>39</td><td>5</td><td>4</td><td>2</td><td>2</td><td>232</td><td>265</td><td>40</td><td>14</td><td>21</td><td>0</td><td>4</td><td>0</td><td>1</td><td>124</td><td>147</td><td>40</td><td>14</td><td>18</td><td>5</td><td>0</td><td>2</td><td>1</td><td>108</td><td>118</td><td>232</td><td>415</td><td>647</td></tr>
<tr><td>Providence Bruins</td><td>80</td><td>30</td><td>33</td><td>6</td><td>5</td><td>2</td><td>4</td><td>236</td><td>250</td><td>40</td><td>14</td><td>15</td><td>4</td><td>3</td><td>1</td><td>3</td><td>121</td><td>124</td><td>40</td><td>16</td><td>18</td><td>2</td><td>2</td><td>1</td><td>1</td><td>115</td><td>126</td><td>236</td><td>434</td><td>670</td></tr>
<tr><td>Rochester Americans</td><td>80</td><td>30</td><td>32</td><td>7</td><td>3</td><td>6</td><td>2</td><td>254</td><td>259</td><td>40</td><td>16</td><td>16</td><td>4</td><td>1</td><td>3</td><td>0</td><td>131</td><td>124</td><td>40</td><td>14</td><td>16</td><td>3</td><td>2</td><td>3</td><td>2</td><td>123</td><td>135</td><td>254</td><td>448</td><td>702</td></tr>
<tr><td>Joliette Sportif</td><td>80</td><td>31</td><td>28</td><td>5</td><td>5</td><td>6</td><td>5</td><td>245</td><td>251</td><td>40</td><td>17</td><td>13</td><td>3</td><td>4</td><td>2</td><td>1</td><td>134</td><td>130</td><td>40</td><td>14</td><td>15</td><td>2</td><td>1</td><td>4</td><td>4</td><td>111</td><td>121</td><td>245</td><td>436</td><td>681</td></tr>
<tr><td>Charlotte Checkers</td><td>80</td><td>34</td><td>29</td><td>4</td><td>7</td><td>4</td><td>2</td><td>242</td><td>225</td><td>40</td><td>19</td><td>15</td><td>4</td><td>0</td><td>1</td><td>1</td><td>122</td><td>103</td><td>40</td><td>15</td><td>14</td><td>0</td><td>7</td><td>3</td><td>1</td><td>120</td><td>122</td><td>242</td><td>432</td><td>674</td></tr>
<tr><td>Rockford IceHogs</td><td>80</td><td>37</td><td>24</td><td>6</td><td>4</td><td>2</td><td>7</td><td>254</td><td>231</td><td>40</td><td>19</td><td>12</td><td>2</td><td>3</td><td>1</td><td>3</td><td>123</td><td>117</td><td>40</td><td>18</td><td>12</td><td>4</td><td>1</td><td>1</td><td>4</td><td>131</td><td>114</td><td>254</td><td>451</td><td>705</td></tr>
<tr><td>Lake Erie Monsters</td><td>80</td><td>35</td><td>31</td><td>6</td><td>4</td><td>0</td><td>4</td><td>252</td><td>235</td><td>40</td><td>16</td><td>15</td><td>5</td><td>2</td><td>0</td><td>2</td><td>123</td><td>114</td><td>40</td><td>19</td><td>16</td><td>1</td><td>2</td><td>0</td><td>2</td><td>129</td><td>121</td><td>252</td><td>457</td><td>709</td></tr>
<tr><td>Springfield Falcons</td><td>80</td><td>33</td><td>32</td><td>5</td><td>5</td><td>1</td><td>4</td><td>243</td><td>243</td><td>40</td><td>14</td><td>15</td><td>2</td><td>4</td><td>1</td><td>4</td><td>123</td><td>125</td><td>40</td><td>19</td><td>17</td><td>3</td><td>1</td><td>0</td><td>0</td><td>120</td><td>118</td><td>243</td><td>452</td><td>695</td></tr>
<tr><td>Las Vegas Gamblers</td><td>80</td><td>43</td><td>29</td><td>2</td><td>2</td><td>3</td><td>1</td><td>244</td><td>233</td><td>40</td><td>19</td><td>17</td><td>1</td><td>2</td><td>1</td><td>0</td><td>116</td><td>123</td><td>40</td><td>24</td><td>12</td><td>1</td><td>0</td><td>2</td><td>1</td><td>128</td><td>110</td><td>244</td><td>435</td><td>679</td></tr>
<tr><td>Grand Rapids Griffins</td><td>80</td><td>40</td><td>35</td><td>1</td><td>3</td><td>0</td><td>1</td><td>235</td><td>215</td><td>40</td><td>20</td><td>18</td><td>0</td><td>1</td><td>0</td><td>1</td><td>114</td><td>102</td><td>40</td><td>20</td><td>17</td><td>1</td><td>2</td><td>0</td><td>0</td><td>121</td><td>113</td><td>235</td><td>419</td><td>654</td></tr>
<tr><td>Oklahoma City Barons</td><td>80</td><td>36</td><td>30</td><td>4</td><td>3</td><td>4</td><td>3</td><td>263</td><td>252</td><td>40</td><td>18</td><td>17</td><td>1</td><td>2</td><td>1</td><td>1</td><td>125</td><td>122</td><td>40</td><td>18</td><td>13</td><td>3</td><td>1</td><td>3</td><td>2</td><td>138</td><td>130</td><td>263</td><td>467</td><td>730</td></tr>
<tr><td>San Antonio Rampage</td><td>80</td><td>34</td><td>32</td><td>6</td><td>3</td><td>2</td><td>3</td><td>250</td><td>237</td><td>40</td><td>18</td><td>16</td><td>1</td><td>2</td><td>2</td><td>1</td><td>129</td><td>115</td><td>40</td><td>16</td><td>16</td><td>5</td><td>1</td><td>0</td><td>2</td><td>121</td><td>122</td><td>250</td><td>452</td><td>702</td></tr>
<tr><td>Gatineau Olympiques</td><td>80</td><td>38</td><td>34</td><td>1</td><td>1</td><td>3</td><td>3</td><td>243</td><td>223</td><td>40</td><td>21</td><td>14</td><td>0</td><td>1</td><td>2</td><td>2</td><td>128</td><td>105</td><td>40</td><td>17</td><td>20</td><td>1</td><td>0</td><td>1</td><td>1</td><td>115</td><td>118</td><td>243</td><td>429</td><td>672</td></tr>
<tr><td>Houston Aeros</td><td>80</td><td>31</td><td>35</td><td>1</td><td>6</td><td>2</td><td>5</td><td>250</td><td>268</td><td>40</td><td>15</td><td>20</td><td>0</td><td>2</td><td>1</td><td>2</td><td>117</td><td>130</td><td>40</td><td>16</td><td>15</td><td>1</td><td>4</td><td>1</td><td>3</td><td>133</td><td>138</td><td>250</td><td>440</td><td>690</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>80</td><td>40</td><td>26</td><td>3</td><td>7</td><td>1</td><td>3</td><td>251</td><td>220</td><td>40</td><td>22</td><td>14</td><td>0</td><td>4</td><td>0</td><td>0</td><td>121</td><td>105</td><td>40</td><td>18</td><td>12</td><td>3</td><td>3</td><td>1</td><td>3</td><td>130</td><td>115</td><td>251</td><td>452</td><td>703</td></tr>
<tr><td>Milwaukee Admirals</td><td>80</td><td>34</td><td>32</td><td>5</td><td>1</td><td>3</td><td>5</td><td>263</td><td>248</td><td>40</td><td>18</td><td>14</td><td>4</td><td>0</td><td>2</td><td>2</td><td>136</td><td>123</td><td>40</td><td>16</td><td>18</td><td>1</td><td>1</td><td>1</td><td>3</td><td>127</td><td>125</td><td>263</td><td>474</td><td>737</td></tr>
<tr><td>Albany Devils</td><td>80</td><td>27</td><td>38</td><td>9</td><td>3</td><td>3</td><td>0</td><td>230</td><td>251</td><td>40</td><td>12</td><td>21</td><td>3</td><td>3</td><td>1</td><td>0</td><td>106</td><td>121</td><td>40</td><td>15</td><td>17</td><td>6</td><td>0</td><td>2</td><td>0</td><td>124</td><td>130</td><td>230</td><td>410</td><td>640</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>80</td><td>27</td><td>39</td><td>2</td><td>8</td><td>4</td><td>0</td><td>223</td><td>261</td><td>40</td><td>14</td><td>19</td><td>0</td><td>3</td><td>4</td><td>0</td><td>114</td><td>124</td><td>40</td><td>13</td><td>20</td><td>2</td><td>5</td><td>0</td><td>0</td><td>109</td><td>137</td><td>223</td><td>404</td><td>627</td></tr>
<tr><td>Connecticut Whale</td><td>80</td><td>34</td><td>30</td><td>9</td><td>5</td><td>1</td><td>1</td><td>244</td><td>239</td><td>40</td><td>20</td><td>11</td><td>4</td><td>4</td><td>0</td><td>1</td><td>142</td><td>117</td><td>40</td><td>14</td><td>19</td><td>5</td><td>1</td><td>1</td><td>0</td><td>102</td><td>122</td><td>244</td><td>440</td><td>684</td></tr>
<tr><td>Binghamton Senators</td><td>80</td><td>27</td><td>38</td><td>6</td><td>6</td><td>2</td><td>1</td><td>242</td><td>251</td><td>40</td><td>16</td><td>16</td><td>2</td><td>5</td><td>1</td><td>0</td><td>136</td><td>128</td><td>40</td><td>11</td><td>22</td><td>4</td><td>1</td><td>1</td><td>1</td><td>106</td><td>123</td><td>242</td><td>443</td><td>685</td></tr>
<tr><td>Adirondack Phantoms</td><td>80</td><td>32</td><td>32</td><td>4</td><td>8</td><td>2</td><td>2</td><td>244</td><td>241</td><td>40</td><td>18</td><td>15</td><td>2</td><td>4</td><td>1</td><td>0</td><td>125</td><td>115</td><td>40</td><td>14</td><td>17</td><td>2</td><td>4</td><td>1</td><td>2</td><td>119</td><td>126</td><td>244</td><td>423</td><td>667</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>80</td><td>39</td><td>25</td><td>5</td><td>6</td><td>2</td><td>3</td><td>266</td><td>233</td><td>40</td><td>16</td><td>12</td><td>4</td><td>5</td><td>2</td><td>1</td><td>134</td><td>123</td><td>40</td><td>23</td><td>13</td><td>1</td><td>1</td><td>0</td><td>2</td><td>132</td><td>110</td><td>266</td><td>479</td><td>745</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>80</td><td>33</td><td>30</td><td>4</td><td>7</td><td>4</td><td>2</td><td>244</td><td>227</td><td>40</td><td>21</td><td>13</td><td>0</td><td>1</td><td>3</td><td>2</td><td>120</td><td>103</td><td>40</td><td>12</td><td>17</td><td>4</td><td>6</td><td>1</td><td>0</td><td>124</td><td>124</td><td>244</td><td>443</td><td>687</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>80</td><td>35</td><td>31</td><td>6</td><td>3</td><td>3</td><td>2</td><td>262</td><td>246</td><td>40</td><td>18</td><td>14</td><td>2</td><td>2</td><td>3</td><td>1</td><td>132</td><td>121</td><td>40</td><td>17</td><td>17</td><td>4</td><td>1</td><td>0</td><td>1</td><td>130</td><td>125</td><td>262</td><td>469</td><td>731</td></tr>
<tr><td>Mercer Island Archangels</td><td>80</td><td>25</td><td>41</td><td>5</td><td>4</td><td>4</td><td>1</td><td>214</td><td>232</td><td>40</td><td>13</td><td>17</td><td>4</td><td>3</td><td>2</td><td>1</td><td>104</td><td>113</td><td>40</td><td>12</td><td>24</td><td>1</td><td>1</td><td>2</td><td>0</td><td>110</td><td>119</td><td>214</td><td>375</td><td>589</td></tr>
<tr><td>Peoria Rivermen</td><td>80</td><td>20</td><td>40</td><td>4</td><td>8</td><td>6</td><td>2</td><td>207</td><td>252</td><td>40</td><td>9</td><td>19</td><td>2</td><td>5</td><td>5</td><td>0</td><td>103</td><td>123</td><td>40</td><td>11</td><td>21</td><td>2</td><td>3</td><td>1</td><td>2</td><td>104</td><td>129</td><td>207</td><td>371</td><td>578</td></tr>
<tr><td>Norfolk Admirals</td><td>80</td><td>31</td><td>32</td><td>5</td><td>4</td><td>4</td><td>4</td><td>241</td><td>254</td><td>40</td><td>17</td><td>13</td><td>3</td><td>2</td><td>2</td><td>3</td><td>132</td><td>117</td><td>40</td><td>14</td><td>19</td><td>2</td><td>2</td><td>2</td><td>1</td><td>109</td><td>137</td><td>241</td><td>428</td><td>669</td></tr>
<tr><td>Roberval Dwarfs</td><td>80</td><td>26</td><td>39</td><td>3</td><td>6</td><td>3</td><td>3</td><td>236</td><td>260</td><td>40</td><td>16</td><td>19</td><td>2</td><td>2</td><td>1</td><td>0</td><td>127</td><td>133</td><td>40</td><td>10</td><td>20</td><td>1</td><td>4</td><td>2</td><td>3</td><td>109</td><td>127</td><td>236</td><td>422</td><td>658</td></tr>
<tr><td>Chicago Wolves</td><td>80</td><td>34</td><td>31</td><td>8</td><td>2</td><td>2</td><td>3</td><td>225</td><td>217</td><td>40</td><td>16</td><td>17</td><td>4</td><td>2</td><td>0</td><td>1</td><td>114</td><td>120</td><td>40</td><td>18</td><td>14</td><td>4</td><td>0</td><td>2</td><td>2</td><td>111</td><td>97</td><td>225</td><td>405</td><td>630</td></tr>
<tr><td>Paradise Dark Angels</td><td>80</td><td>40</td><td>26</td><td>6</td><td>4</td><td>2</td><td>2</td><td>261</td><td>238</td><td>40</td><td>20</td><td>12</td><td>4</td><td>2</td><td>1</td><td>1</td><td>127</td><td>111</td><td>40</td><td>20</td><td>14</td><td>2</td><td>2</td><td>1</td><td>1</td><td>134</td><td>127</td><td>261</td><td>469</td><td>730</td></tr>
<tr><td>Landshut Cannibals</td><td>80</td><td>37</td><td>34</td><td>2</td><td>5</td><td>0</td><td>2</td><td>233</td><td>235</td><td>40</td><td>17</td><td>18</td><td>0</td><td>3</td><td>0</td><td>2</td><td>111</td><td>120</td><td>40</td><td>20</td><td>16</td><td>2</td><td>2</td><td>0</td><td>0</td><td>122</td><td>115</td><td>233</td><td>419</td><td>652</td></tr>
<tr><td>Manitoba Moose</td><td>80</td><td>28</td><td>40</td><td>3</td><td>3</td><td>0</td><td>6</td><td>239</td><td>272</td><td>40</td><td>17</td><td>19</td><td>0</td><td>1</td><td>0</td><td>3</td><td>121</td><td>136</td><td>40</td><td>11</td><td>21</td><td>3</td><td>2</td><td>0</td><td>3</td><td>118</td><td>136</td><td>239</td><td>443</td><td>682</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Laval Chiefs</td><td>LAV</td><td>78</td><td>81</td><td>68</td><td>13</td><td>2629</td><td>858</td><td>886</td><td>836</td><td>70</td><td>2626</td><td>752</td><td>494</td><td>1538</td><td>245</td><td>52</td><td>21,22%</td><td>224</td><td>47</td><td>79,02%</td><td>1</td><td>47,64%</td><td>48,69%</td><td>50,08%</td><td>1906</td><td>1928</td><td>1027</td><td>584</td><td>1340</td><td>509</td><td>1</td><td>2</td></tr>
<tr><td>Portland Pirates</td><td>POR</td><td>89</td><td>76</td><td>60</td><td>10</td><td>2561</td><td>910</td><td>811</td><td>810</td><td>49</td><td>2793</td><td>804</td><td>635</td><td>1633</td><td>266</td><td>47</td><td>17,67%</td><td>283</td><td>61</td><td>78,45%</td><td>0</td><td>47,20%</td><td>49,30%</td><td>46,46%</td><td>1963</td><td>1853</td><td>1026</td><td>603</td><td>1264</td><td>503</td><td>3</td><td>0</td></tr>
<tr><td>Providence Bruins</td><td>PRO</td><td>90</td><td>83</td><td>55</td><td>9</td><td>2483</td><td>817</td><td>792</td><td>836</td><td>58</td><td>2622</td><td>805</td><td>646</td><td>1596</td><td>269</td><td>54</td><td>20,07%</td><td>288</td><td>59</td><td>79,51%</td><td>0</td><td>50,77%</td><td>49,11%</td><td>48,61%</td><td>1895</td><td>1907</td><td>1041</td><td>596</td><td>1306</td><td>519</td><td>5</td><td>3</td></tr>
<tr><td>Rochester Americans</td><td>RCH</td><td>102</td><td>66</td><td>73</td><td>13</td><td>2591</td><td>846</td><td>867</td><td>834</td><td>69</td><td>2685</td><td>762</td><td>608</td><td>1518</td><td>284</td><td>55</td><td>19,37%</td><td>273</td><td>60</td><td>78,02%</td><td>2</td><td>49,54%</td><td>49,93%</td><td>50,73%</td><td>1929</td><td>1897</td><td>1031</td><td>596</td><td>1309</td><td>514</td><td>1</td><td>1</td></tr>
<tr><td>Joliette Sportif</td><td>JOL</td><td>81</td><td>86</td><td>67</td><td>12</td><td>2686</td><td>897</td><td>861</td><td>877</td><td>85</td><td>2454</td><td>721</td><td>661</td><td>1445</td><td>296</td><td>44</td><td>14,86%</td><td>276</td><td>69</td><td>75,00%</td><td>2</td><td>53,30%</td><td>53,64%</td><td>53,08%</td><td>1881</td><td>1950</td><td>1043</td><td>599</td><td>1350</td><td>519</td><td>3</td><td>0</td></tr>
<tr><td>Charlotte Checkers</td><td>CHA</td><td>86</td><td>62</td><td>86</td><td>13</td><td>2605</td><td>841</td><td>823</td><td>910</td><td>60</td><td>2508</td><td>710</td><td>718</td><td>1719</td><td>270</td><td>48</td><td>17,78%</td><td>325</td><td>61</td><td>81,23%</td><td>3</td><td>51,30%</td><td>52,81%</td><td>50,28%</td><td>1892</td><td>1920</td><td>1039</td><td>600</td><td>1320</td><td>514</td><td>5</td><td>0</td></tr>
<tr><td>Rockford IceHogs</td><td>RFD</td><td>95</td><td>81</td><td>70</td><td>11</td><td>2485</td><td>815</td><td>833</td><td>779</td><td>91</td><td>2681</td><td>745</td><td>621</td><td>1545</td><td>257</td><td>43</td><td>16,73%</td><td>262</td><td>43</td><td>83,59%</td><td>4</td><td>49,52%</td><td>52,51%</td><td>53,39%</td><td>1926</td><td>1891</td><td>1047</td><td>599</td><td>1299</td><td>523</td><td>4</td><td>3</td></tr>
<tr><td>Lake Erie Monsters</td><td>LKE</td><td>99</td><td>78</td><td>69</td><td>8</td><td>2621</td><td>849</td><td>852</td><td>895</td><td>39</td><td>2558</td><td>724</td><td>595</td><td>1519</td><td>271</td><td>55</td><td>20,30%</td><td>259</td><td>49</td><td>81,08%</td><td>4</td><td>51,47%</td><td>51,30%</td><td>51,10%</td><td>1894</td><td>1917</td><td>1028</td><td>601</td><td>1325</td><td>516</td><td>5</td><td>1</td></tr>
<tr><td>Springfield Falcons</td><td>SPR</td><td>79</td><td>80</td><td>78</td><td>8</td><td>2527</td><td>849</td><td>785</td><td>851</td><td>63</td><td>2606</td><td>741</td><td>628</td><td>1654</td><td>259</td><td>55</td><td>21,24%</td><td>271</td><td>52</td><td>80,81%</td><td>3</td><td>49,26%</td><td>51,34%</td><td>50,43%</td><td>1915</td><td>1908</td><td>1023</td><td>588</td><td>1308</td><td>515</td><td>1</td><td>1</td></tr>
<tr><td>Las Vegas Gamblers</td><td>LVG</td><td>91</td><td>75</td><td>73</td><td>6</td><td>2715</td><td>892</td><td>925</td><td>882</td><td>33</td><td>2673</td><td>763</td><td>664</td><td>1653</td><td>285</td><td>47</td><td>16,49%</td><td>292</td><td>57</td><td>80,48%</td><td>1</td><td>50,49%</td><td>49,69%</td><td>52,70%</td><td>1907</td><td>1894</td><td>1027</td><td>595</td><td>1294</td><td>512</td><td>4</td><td>1</td></tr>
<tr><td>Grand Rapids Griffins</td><td>GRG</td><td>87</td><td>75</td><td>72</td><td>1</td><td>2659</td><td>883</td><td>871</td><td>889</td><td>19</td><td>2486</td><td>741</td><td>516</td><td>1493</td><td>307</td><td>55</td><td>17,92%</td><td>234</td><td>39</td><td>83,33%</td><td>4</td><td>49,75%</td><td>49,84%</td><td>50,04%</td><td>1877</td><td>1915</td><td>1025</td><td>593</td><td>1311</td><td>515</td><td>3</td><td>1</td></tr>
<tr><td>Oklahoma City Barons</td><td>OKC</td><td>100</td><td>91</td><td>64</td><td>10</td><td>2722</td><td>843</td><td>867</td><td>983</td><td>52</td><td>2666</td><td>797</td><td>602</td><td>1645</td><td>269</td><td>63</td><td>23,42%</td><td>255</td><td>54</td><td>78,82%</td><td>2</td><td>48,41%</td><td>50,42%</td><td>53,08%</td><td>1914</td><td>1899</td><td>1035</td><td>593</td><td>1303</td><td>516</td><td>3</td><td>2</td></tr>
<tr><td>San Antonio Rampage</td><td>SAR</td><td>86</td><td>90</td><td>66</td><td>10</td><td>2558</td><td>819</td><td>847</td><td>857</td><td>50</td><td>2662</td><td>745</td><td>615</td><td>1603</td><td>271</td><td>54</td><td>19,93%</td><td>279</td><td>55</td><td>80,29%</td><td>3</td><td>49,84%</td><td>50,85%</td><td>46,52%</td><td>1921</td><td>1901</td><td>1020</td><td>594</td><td>1315</td><td>508</td><td>3</td><td>2</td></tr>
<tr><td>Gatineau Olympiques</td><td>GAT</td><td>79</td><td>75</td><td>85</td><td>6</td><td>2735</td><td>864</td><td>961</td><td>882</td><td>48</td><td>2544</td><td>773</td><td>630</td><td>1573</td><td>274</td><td>62</td><td>22,63%</td><td>272</td><td>43</td><td>84,19%</td><td>2</td><td>50,67%</td><td>49,69%</td><td>48,80%</td><td>1888</td><td>1917</td><td>1028</td><td>600</td><td>1322</td><td>513</td><td>4</td><td>1</td></tr>
<tr><td>Houston Aeros</td><td>HOU</td><td>87</td><td>95</td><td>65</td><td>6</td><td>2666</td><td>862</td><td>898</td><td>881</td><td>49</td><td>2554</td><td>747</td><td>657</td><td>1489</td><td>270</td><td>55</td><td>20,37%</td><td>283</td><td>54</td><td>80,92%</td><td>4</td><td>50,61%</td><td>52,68%</td><td>49,34%</td><td>1900</td><td>1910</td><td>1036</td><td>589</td><td>1316</td><td>509</td><td>4</td><td>3</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>TRD</td><td>99</td><td>83</td><td>65</td><td>8</td><td>2615</td><td>870</td><td>847</td><td>870</td><td>45</td><td>2498</td><td>725</td><td>666</td><td>1579</td><td>301</td><td>73</td><td>24,25%</td><td>294</td><td>52</td><td>82,31%</td><td>2</td><td>51,41%</td><td>50,93%</td><td>54,28%</td><td>1859</td><td>1950</td><td>1036</td><td>592</td><td>1343</td><td>522</td><td>6</td><td>2</td></tr>
<tr><td>Milwaukee Admirals</td><td>MIL</td><td>97</td><td>86</td><td>72</td><td>11</td><td>2524</td><td>827</td><td>816</td><td>856</td><td>55</td><td>2512</td><td>717</td><td>611</td><td>1503</td><td>263</td><td>57</td><td>21,67%</td><td>259</td><td>44</td><td>83,01%</td><td>2</td><td>48,82%</td><td>49,57%</td><td>47,78%</td><td>1890</td><td>1930</td><td>1038</td><td>593</td><td>1332</td><td>518</td><td>1</td><td>1</td></tr>
<tr><td>Albany Devils</td><td>ALB</td><td>79</td><td>67</td><td>72</td><td>13</td><td>2334</td><td>780</td><td>766</td><td>759</td><td>38</td><td>2564</td><td>708</td><td>615</td><td>1598</td><td>299</td><td>56</td><td>18,73%</td><td>281</td><td>72</td><td>74,38%</td><td>3</td><td>48,24%</td><td>48,41%</td><td>51,75%</td><td>1897</td><td>1899</td><td>1045</td><td>599</td><td>1293</td><td>526</td><td>3</td><td>2</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>BRI</td><td>79</td><td>73</td><td>65</td><td>8</td><td>2513</td><td>788</td><td>850</td><td>843</td><td>47</td><td>2594</td><td>771</td><td>635</td><td>1530</td><td>270</td><td>53</td><td>19,63%</td><td>281</td><td>59</td><td>79,00%</td><td>2</td><td>50,40%</td><td>52,03%</td><td>51,03%</td><td>1897</td><td>1905</td><td>1036</td><td>592</td><td>1304</td><td>516</td><td>2</td><td>2</td></tr>
<tr><td>Connecticut Whale</td><td>CTW</td><td>84</td><td>68</td><td>82</td><td>11</td><td>2607</td><td>853</td><td>851</td><td>870</td><td>43</td><td>2505</td><td>723</td><td>554</td><td>1534</td><td>291</td><td>56</td><td>19,24%</td><td>247</td><td>48</td><td>80,57%</td><td>3</td><td>48,52%</td><td>50,82%</td><td>49,92%</td><td>1878</td><td>1953</td><td>1015</td><td>584</td><td>1360</td><td>511</td><td>2</td><td>1</td></tr>
<tr><td>Binghamton Senators</td><td>BNG</td><td>76</td><td>79</td><td>79</td><td>8</td><td>2543</td><td>841</td><td>800</td><td>879</td><td>33</td><td>2603</td><td>764</td><td>618</td><td>1568</td><td>275</td><td>52</td><td>18,91%</td><td>270</td><td>55</td><td>79,63%</td><td>3</td><td>49,22%</td><td>49,47%</td><td>49,32%</td><td>1912</td><td>1891</td><td>1034</td><td>596</td><td>1299</td><td>511</td><td>5</td><td>1</td></tr>
<tr><td>Adirondack Phantoms</td><td>ADK</td><td>104</td><td>63</td><td>71</td><td>10</td><td>2541</td><td>830</td><td>809</td><td>863</td><td>55</td><td>2659</td><td>792</td><td>652</td><td>1562</td><td>266</td><td>57</td><td>21,43%</td><td>295</td><td>55</td><td>81,36%</td><td>1</td><td>50,47%</td><td>50,51%</td><td>51,50%</td><td>1930</td><td>1894</td><td>1024</td><td>592</td><td>1299</td><td>509</td><td>0</td><td>2</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>WBS</td><td>98</td><td>86</td><td>75</td><td>11</td><td>2698</td><td>880</td><td>852</td><td>923</td><td>62</td><td>2632</td><td>725</td><td>602</td><td>1562</td><td>280</td><td>64</td><td>22,86%</td><td>281</td><td>49</td><td>82,56%</td><td>5</td><td>53,17%</td><td>52,84%</td><td>52,88%</td><td>1910</td><td>1884</td><td>1057</td><td>612</td><td>1283</td><td>526</td><td>1</td><td>5</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>CHI</td><td>84</td><td>73</td><td>79</td><td>9</td><td>2519</td><td>852</td><td>773</td><td>859</td><td>53</td><td>2607</td><td>812</td><td>758</td><td>1714</td><td>284</td><td>61</td><td>21,48%</td><td>330</td><td>50</td><td>84,85%</td><td>3</td><td>50,13%</td><td>50,11%</td><td>47,64%</td><td>1953</td><td>1866</td><td>1031</td><td>610</td><td>1270</td><td>509</td><td>3</td><td>1</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>RNO</td><td>100</td><td>78</td><td>75</td><td>12</td><td>2685</td><td>869</td><td>851</td><td>926</td><td>57</td><td>2666</td><td>758</td><td>635</td><td>1723</td><td>286</td><td>53</td><td>18,53%</td><td>288</td><td>57</td><td>80,21%</td><td>2</td><td>49,46%</td><td>48,74%</td><td>48,30%</td><td>1942</td><td>1880</td><td>1026</td><td>598</td><td>1291</td><td>506</td><td>4</td><td>1</td></tr>
<tr><td>Mercer Island Archangels</td><td>MIA</td><td>77</td><td>70</td><td>58</td><td>11</td><td>2568</td><td>869</td><td>838</td><td>824</td><td>58</td><td>2558</td><td>776</td><td>703</td><td>1569</td><td>278</td><td>56</td><td>20,14%</td><td>302</td><td>63</td><td>79,14%</td><td>2</td><td>52,55%</td><td>52,51%</td><td>53,49%</td><td>1898</td><td>1920</td><td>1036</td><td>600</td><td>1321</td><td>515</td><td>3</td><td>2</td></tr>
<tr><td>Peoria Rivermen</td><td>PEO</td><td>64</td><td>65</td><td>68</td><td>11</td><td>2479</td><td>800</td><td>834</td><td>801</td><td>69</td><td>2582</td><td>753</td><td>651</td><td>1526</td><td>253</td><td>44</td><td>17,39%</td><td>290</td><td>55</td><td>81,03%</td><td>2</td><td>53,79%</td><td>53,24%</td><td>55,17%</td><td>1905</td><td>1917</td><td>1040</td><td>595</td><td>1316</td><td>516</td><td>5</td><td>1</td></tr>
<tr><td>Norfolk Admirals</td><td>NOR</td><td>98</td><td>71</td><td>63</td><td>14</td><td>2617</td><td>900</td><td>888</td><td>798</td><td>63</td><td>2685</td><td>792</td><td>648</td><td>1546</td><td>265</td><td>45</td><td>16,98%</td><td>276</td><td>55</td><td>80,07%</td><td>4</td><td>48,58%</td><td>49,07%</td><td>50,39%</td><td>1943</td><td>1890</td><td>1033</td><td>598</td><td>1290</td><td>510</td><td>0</td><td>4</td></tr>
<tr><td>Roberval Dwarfs</td><td>ROB</td><td>82</td><td>92</td><td>56</td><td>8</td><td>2601</td><td>795</td><td>881</td><td>892</td><td>54</td><td>2550</td><td>735</td><td>547</td><td>1508</td><td>283</td><td>54</td><td>19,08%</td><td>245</td><td>54</td><td>77,96%</td><td>1</td><td>51,18%</td><td>52,09%</td><td>51,55%</td><td>1908</td><td>1903</td><td>1035</td><td>589</td><td>1318</td><td>517</td><td>2</td><td>1</td></tr>
<tr><td>Chicago Wolves</td><td>CHI</td><td>70</td><td>81</td><td>64</td><td>13</td><td>2591</td><td>833</td><td>921</td><td>805</td><td>50</td><td>2617</td><td>781</td><td>666</td><td>1564</td><td>273</td><td>47</td><td>17,22%</td><td>297</td><td>48</td><td>83,84%</td><td>5</td><td>49,63%</td><td>49,33%</td><td>50,08%</td><td>1937</td><td>1880</td><td>1029</td><td>609</td><td>1286</td><td>511</td><td>4</td><td>2</td></tr>
<tr><td>Paradise Dark Angels</td><td>PAR</td><td>96</td><td>87</td><td>70</td><td>8</td><td>2804</td><td>938</td><td>956</td><td>875</td><td>45</td><td>2492</td><td>715</td><td>595</td><td>1593</td><td>283</td><td>57</td><td>20,14%</td><td>253</td><td>47</td><td>81,42%</td><td>1</td><td>52,25%</td><td>50,77%</td><td>50,99%</td><td>1858</td><td>1958</td><td>1025</td><td>590</td><td>1357</td><td>517</td><td>2</td><td>2</td></tr>
<tr><td>Landshut Cannibals</td><td>LAN</td><td>87</td><td>73</td><td>71</td><td>2</td><td>2520</td><td>833</td><td>836</td><td>834</td><td>29</td><td>2608</td><td>770</td><td>659</td><td>1585</td><td>309</td><td>50</td><td>16,18%</td><td>286</td><td>48</td><td>83,22%</td><td>2</td><td>47,75%</td><td>48,67%</td><td>49,51%</td><td>1894</td><td>1912</td><td>1017</td><td>589</td><td>1312</td><td>508</td><td>1</td><td>1</td></tr>
<tr><td>Manitoba Moose</td><td>MAN</td><td>80</td><td>82</td><td>74</td><td>4</td><td>2648</td><td>847</td><td>918</td><td>847</td><td>57</td><td>2600</td><td>803</td><td>695</td><td>1566</td><td>299</td><td>54</td><td>18,06%</td><td>300</td><td>64</td><td>78,67%</td><td>1</td><td>51,91%</td><td>52,10%</td><td>50,55%</td><td>1921</td><td>1901</td><td>1025</td><td>606</td><td>1309</td><td>507</td><td>3</td><td>4</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,03</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wilkes-Barre/Scranton Penguins</td><td>3,33</td></tr>
<tr><td>2</td><td>Milwaukee Admirals</td><td>3,29</td></tr>
<tr><td>3</td><td>Oklahoma City Barons</td><td>3,29</td></tr>
<tr><td>4</td><td>Rouyn-Noranda Huskies</td><td>3,28</td></tr>
<tr><td>5</td><td>Paradise Dark Angels</td><td>3,26</td></tr>
<tr><td>6</td><td>Rockford IceHogs</td><td>3,18</td></tr>
<tr><td>7</td><td>Rochester Americans</td><td>3,18</td></tr>
<tr><td>8</td><td>Lake Erie Monsters</td><td>3,15</td></tr>
<tr><td>9</td><td>Trois-Rivières Draveurs</td><td>3,14</td></tr>
<tr><td>10</td><td>Houston Aeros</td><td>3,13</td></tr>
<tr><td>11</td><td>San Antonio Rampage</td><td>3,13</td></tr>
<tr><td>12</td><td>Joliette Sportif</td><td>3,06</td></tr>
<tr><td>13</td><td>Adirondack Phantoms</td><td>3,05</td></tr>
<tr><td>14</td><td>Chicoutimi Saguenéens</td><td>3,05</td></tr>
<tr><td>15</td><td>Las Vegas Gamblers</td><td>3,05</td></tr>
<tr><td>16</td><td>Connecticut Whale</td><td>3,05</td></tr>
<tr><td>17</td><td>Springfield Falcons</td><td>3,04</td></tr>
<tr><td>18</td><td>Gatineau Olympiques</td><td>3,04</td></tr>
<tr><td>19</td><td>Binghamton Senators</td><td>3,03</td></tr>
<tr><td>20</td><td>Charlotte Checkers</td><td>3,03</td></tr>
<tr><td>21</td><td>Norfolk Admirals</td><td>3,01</td></tr>
<tr><td>22</td><td>Manitoba Moose</td><td>2,99</td></tr>
<tr><td>23</td><td>Laval Chiefs</td><td>2,96</td></tr>
<tr><td>24</td><td>Roberval Dwarfs</td><td>2,95</td></tr>
<tr><td>25</td><td>Providence Bruins</td><td>2,95</td></tr>
<tr><td>26</td><td>Grand Rapids Griffins</td><td>2,94</td></tr>
<tr><td>27</td><td>Landshut Cannibals</td><td>2,91</td></tr>
<tr><td>28</td><td>Portland Pirates</td><td>2,90</td></tr>
<tr><td>29</td><td>Albany Devils</td><td>2,88</td></tr>
<tr><td>30</td><td>Chicago Wolves</td><td>2,81</td></tr>
<tr><td>31</td><td>Bridgeport Sound Tigers</td><td>2,79</td></tr>
<tr><td>32</td><td>Mercer Island Archangels</td><td>2,68</td></tr>
<tr><td>33</td><td>Peoria Rivermen</td><td>2,59</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,03</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Grand Rapids Griffins</td><td>2,69</td></tr>
<tr><td>2</td><td>Chicago Wolves</td><td>2,71</td></tr>
<tr><td>3</td><td>Trois-Rivières Draveurs</td><td>2,75</td></tr>
<tr><td>4</td><td>Gatineau Olympiques</td><td>2,79</td></tr>
<tr><td>5</td><td>Charlotte Checkers</td><td>2,81</td></tr>
<tr><td>6</td><td>Chicoutimi Saguenéens</td><td>2,84</td></tr>
<tr><td>7</td><td>Rockford IceHogs</td><td>2,89</td></tr>
<tr><td>8</td><td>Mercer Island Archangels</td><td>2,90</td></tr>
<tr><td>9</td><td>Las Vegas Gamblers</td><td>2,91</td></tr>
<tr><td>10</td><td>Wilkes-Barre/Scranton Penguins</td><td>2,91</td></tr>
<tr><td>11</td><td>Lake Erie Monsters</td><td>2,94</td></tr>
<tr><td>12</td><td>Landshut Cannibals</td><td>2,94</td></tr>
<tr><td>13</td><td>San Antonio Rampage</td><td>2,96</td></tr>
<tr><td>14</td><td>Paradise Dark Angels</td><td>2,98</td></tr>
<tr><td>15</td><td>Connecticut Whale</td><td>2,99</td></tr>
<tr><td>16</td><td>Adirondack Phantoms</td><td>3,01</td></tr>
<tr><td>17</td><td>Laval Chiefs</td><td>3,01</td></tr>
<tr><td>18</td><td>Springfield Falcons</td><td>3,04</td></tr>
<tr><td>19</td><td>Rouyn-Noranda Huskies</td><td>3,08</td></tr>
<tr><td>20</td><td>Milwaukee Admirals</td><td>3,10</td></tr>
<tr><td>21</td><td>Providence Bruins</td><td>3,13</td></tr>
<tr><td>22</td><td>Joliette Sportif</td><td>3,14</td></tr>
<tr><td>23</td><td>Albany Devils</td><td>3,14</td></tr>
<tr><td>24</td><td>Binghamton Senators</td><td>3,14</td></tr>
<tr><td>25</td><td>Oklahoma City Barons</td><td>3,15</td></tr>
<tr><td>26</td><td>Peoria Rivermen</td><td>3,15</td></tr>
<tr><td>27</td><td>Norfolk Admirals</td><td>3,18</td></tr>
<tr><td>28</td><td>Rochester Americans</td><td>3,24</td></tr>
<tr><td>29</td><td>Roberval Dwarfs</td><td>3,25</td></tr>
<tr><td>30</td><td>Bridgeport Sound Tigers</td><td>3,26</td></tr>
<tr><td>31</td><td>Portland Pirates</td><td>3,31</td></tr>
<tr><td>32</td><td>Houston Aeros</td><td>3,35</td></tr>
<tr><td>33</td><td>Manitoba Moose</td><td>3,40</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Wilkes-Barre/Scranton Penguins</td><td>114,16%</td></tr>
<tr><td>2</td><td>Trois-Rivières Draveurs</td><td>114,09%</td></tr>
<tr><td>3</td><td>Rockford IceHogs</td><td>109,96%</td></tr>
<tr><td>4</td><td>Paradise Dark Angels</td><td>109,66%</td></tr>
<tr><td>5</td><td>Grand Rapids Griffins</td><td>109,30%</td></tr>
<tr><td>6</td><td>Gatineau Olympiques</td><td>108,97%</td></tr>
<tr><td>7</td><td>Charlotte Checkers</td><td>107,56%</td></tr>
<tr><td>8</td><td>Chicoutimi Saguenéens</td><td>107,49%</td></tr>
<tr><td>9</td><td>Lake Erie Monsters</td><td>107,23%</td></tr>
<tr><td>10</td><td>Rouyn-Noranda Huskies</td><td>106,50%</td></tr>
<tr><td>11</td><td>Milwaukee Admirals</td><td>106,05%</td></tr>
<tr><td>12</td><td>San Antonio Rampage</td><td>105,49%</td></tr>
<tr><td>13</td><td>Las Vegas Gamblers</td><td>104,72%</td></tr>
<tr><td>14</td><td>Oklahoma City Barons</td><td>104,37%</td></tr>
<tr><td>15</td><td>Chicago Wolves</td><td>103,69%</td></tr>
<tr><td>16</td><td>Connecticut Whale</td><td>102,09%</td></tr>
<tr><td>17</td><td>Adirondack Phantoms</td><td>101,24%</td></tr>
<tr><td>18</td><td>Springfield Falcons</td><td>100,00%</td></tr>
<tr><td>19</td><td>Landshut Cannibals</td><td>99,15%</td></tr>
<tr><td>20</td><td>Laval Chiefs</td><td>98,34%</td></tr>
<tr><td>21</td><td>Rochester Americans</td><td>98,07%</td></tr>
<tr><td>22</td><td>Joliette Sportif</td><td>97,61%</td></tr>
<tr><td>23</td><td>Binghamton Senators</td><td>96,41%</td></tr>
<tr><td>24</td><td>Norfolk Admirals</td><td>94,88%</td></tr>
<tr><td>25</td><td>Providence Bruins</td><td>94,40%</td></tr>
<tr><td>26</td><td>Houston Aeros</td><td>93,28%</td></tr>
<tr><td>27</td><td>Mercer Island Archangels</td><td>92,24%</td></tr>
<tr><td>28</td><td>Albany Devils</td><td>91,63%</td></tr>
<tr><td>29</td><td>Roberval Dwarfs</td><td>90,77%</td></tr>
<tr><td>30</td><td>Manitoba Moose</td><td>87,87%</td></tr>
<tr><td>31</td><td>Portland Pirates</td><td>87,55%</td></tr>
<tr><td>32</td><td>Bridgeport Sound Tigers</td><td>85,44%</td></tr>
<tr><td>33</td><td>Peoria Rivermen</td><td>82,14%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,43%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Trois-Rivières Draveurs</td><td>24,25%</td></tr>
<tr><td>2</td><td>Oklahoma City Barons</td><td>23,42%</td></tr>
<tr><td>3</td><td>Wilkes-Barre/Scranton Penguins</td><td>22,86%</td></tr>
<tr><td>4</td><td>Gatineau Olympiques</td><td>22,63%</td></tr>
<tr><td>5</td><td>Milwaukee Admirals</td><td>21,67%</td></tr>
<tr><td>6</td><td>Chicoutimi Saguenéens</td><td>21,48%</td></tr>
<tr><td>7</td><td>Adirondack Phantoms</td><td>21,43%</td></tr>
<tr><td>8</td><td>Springfield Falcons</td><td>21,24%</td></tr>
<tr><td>9</td><td>Laval Chiefs</td><td>21,22%</td></tr>
<tr><td>10</td><td>Houston Aeros</td><td>20,37%</td></tr>
<tr><td>11</td><td>Lake Erie Monsters</td><td>20,30%</td></tr>
<tr><td>12</td><td>Mercer Island Archangels</td><td>20,14%</td></tr>
<tr><td>13</td><td>Paradise Dark Angels</td><td>20,14%</td></tr>
<tr><td>14</td><td>Providence Bruins</td><td>20,07%</td></tr>
<tr><td>15</td><td>San Antonio Rampage</td><td>19,93%</td></tr>
<tr><td>16</td><td>Bridgeport Sound Tigers</td><td>19,63%</td></tr>
<tr><td>17</td><td>Rochester Americans</td><td>19,37%</td></tr>
<tr><td>18</td><td>Connecticut Whale</td><td>19,24%</td></tr>
<tr><td>19</td><td>Roberval Dwarfs</td><td>19,08%</td></tr>
<tr><td>20</td><td>Binghamton Senators</td><td>18,91%</td></tr>
<tr><td>21</td><td>Albany Devils</td><td>18,73%</td></tr>
<tr><td>22</td><td>Rouyn-Noranda Huskies</td><td>18,53%</td></tr>
<tr><td>23</td><td>Manitoba Moose</td><td>18,06%</td></tr>
<tr><td>24</td><td>Grand Rapids Griffins</td><td>17,92%</td></tr>
<tr><td>25</td><td>Charlotte Checkers</td><td>17,78%</td></tr>
<tr><td>26</td><td>Portland Pirates</td><td>17,67%</td></tr>
<tr><td>27</td><td>Peoria Rivermen</td><td>17,39%</td></tr>
<tr><td>28</td><td>Chicago Wolves</td><td>17,22%</td></tr>
<tr><td>29</td><td>Norfolk Admirals</td><td>16,98%</td></tr>
<tr><td>30</td><td>Rockford IceHogs</td><td>16,73%</td></tr>
<tr><td>31</td><td>Las Vegas Gamblers</td><td>16,49%</td></tr>
<tr><td>32</td><td>Landshut Cannibals</td><td>16,18%</td></tr>
<tr><td>33</td><td>Joliette Sportif</td><td>14,86%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,57%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Chicoutimi Saguenéens</td><td>84,85%</td></tr>
<tr><td>2</td><td>Gatineau Olympiques</td><td>84,19%</td></tr>
<tr><td>3</td><td>Chicago Wolves</td><td>83,84%</td></tr>
<tr><td>4</td><td>Rockford IceHogs</td><td>83,59%</td></tr>
<tr><td>5</td><td>Grand Rapids Griffins</td><td>83,33%</td></tr>
<tr><td>6</td><td>Landshut Cannibals</td><td>83,22%</td></tr>
<tr><td>7</td><td>Milwaukee Admirals</td><td>83,01%</td></tr>
<tr><td>8</td><td>Wilkes-Barre/Scranton Penguins</td><td>82,56%</td></tr>
<tr><td>9</td><td>Trois-Rivières Draveurs</td><td>82,31%</td></tr>
<tr><td>10</td><td>Paradise Dark Angels</td><td>81,42%</td></tr>
<tr><td>11</td><td>Adirondack Phantoms</td><td>81,36%</td></tr>
<tr><td>12</td><td>Charlotte Checkers</td><td>81,23%</td></tr>
<tr><td>13</td><td>Lake Erie Monsters</td><td>81,08%</td></tr>
<tr><td>14</td><td>Peoria Rivermen</td><td>81,03%</td></tr>
<tr><td>15</td><td>Houston Aeros</td><td>80,92%</td></tr>
<tr><td>16</td><td>Springfield Falcons</td><td>80,81%</td></tr>
<tr><td>17</td><td>Connecticut Whale</td><td>80,57%</td></tr>
<tr><td>18</td><td>Las Vegas Gamblers</td><td>80,48%</td></tr>
<tr><td>19</td><td>San Antonio Rampage</td><td>80,29%</td></tr>
<tr><td>20</td><td>Rouyn-Noranda Huskies</td><td>80,21%</td></tr>
<tr><td>21</td><td>Norfolk Admirals</td><td>80,07%</td></tr>
<tr><td>22</td><td>Binghamton Senators</td><td>79,63%</td></tr>
<tr><td>23</td><td>Providence Bruins</td><td>79,51%</td></tr>
<tr><td>24</td><td>Mercer Island Archangels</td><td>79,14%</td></tr>
<tr><td>25</td><td>Laval Chiefs</td><td>79,02%</td></tr>
<tr><td>26</td><td>Bridgeport Sound Tigers</td><td>79,00%</td></tr>
<tr><td>27</td><td>Oklahoma City Barons</td><td>78,82%</td></tr>
<tr><td>28</td><td>Manitoba Moose</td><td>78,67%</td></tr>
<tr><td>29</td><td>Portland Pirates</td><td>78,45%</td></tr>
<tr><td>30</td><td>Rochester Americans</td><td>78,02%</td></tr>
<tr><td>31</td><td>Roberval Dwarfs</td><td>77,96%</td></tr>
<tr><td>32</td><td>Joliette Sportif</td><td>75,00%</td></tr>
<tr><td>33</td><td>Albany Devils</td><td>74,38%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Gatineau Olympiques</td><td>106,82%</td></tr>
<tr><td>2</td><td>Trois-Rivières Draveurs</td><td>106,57%</td></tr>
<tr><td>3</td><td>Chicoutimi Saguenéens</td><td>106,33%</td></tr>
<tr><td>4</td><td>Wilkes-Barre/Scranton Penguins</td><td>105,42%</td></tr>
<tr><td>5</td><td>Milwaukee Admirals</td><td>104,68%</td></tr>
<tr><td>6</td><td>Adirondack Phantoms</td><td>102,78%</td></tr>
<tr><td>7</td><td>Oklahoma City Barons</td><td>102,24%</td></tr>
<tr><td>8</td><td>Springfield Falcons</td><td>102,05%</td></tr>
<tr><td>9</td><td>Paradise Dark Angels</td><td>101,56%</td></tr>
<tr><td>10</td><td>Lake Erie Monsters</td><td>101,38%</td></tr>
<tr><td>11</td><td>Houston Aeros</td><td>101,29%</td></tr>
<tr><td>12</td><td>Grand Rapids Griffins</td><td>101,25%</td></tr>
<tr><td>13</td><td>Chicago Wolves</td><td>101,05%</td></tr>
<tr><td>14</td><td>Rockford IceHogs</td><td>100,32%</td></tr>
<tr><td>15</td><td>Laval Chiefs</td><td>100,24%</td></tr>
<tr><td>16</td><td>San Antonio Rampage</td><td>100,21%</td></tr>
<tr><td>17</td><td>Connecticut Whale</td><td>99,81%</td></tr>
<tr><td>18</td><td>Providence Bruins</td><td>99,59%</td></tr>
<tr><td>19</td><td>Landshut Cannibals</td><td>99,40%</td></tr>
<tr><td>20</td><td>Mercer Island Archangels</td><td>99,28%</td></tr>
<tr><td>21</td><td>Charlotte Checkers</td><td>99,01%</td></tr>
<tr><td>22</td><td>Rouyn-Noranda Huskies</td><td>98,74%</td></tr>
<tr><td>23</td><td>Bridgeport Sound Tigers</td><td>98,63%</td></tr>
<tr><td>24</td><td>Binghamton Senators</td><td>98,54%</td></tr>
<tr><td>25</td><td>Peoria Rivermen</td><td>98,43%</td></tr>
<tr><td>26</td><td>Rochester Americans</td><td>97,39%</td></tr>
<tr><td>27</td><td>Norfolk Admirals</td><td>97,05%</td></tr>
<tr><td>28</td><td>Roberval Dwarfs</td><td>97,04%</td></tr>
<tr><td>29</td><td>Las Vegas Gamblers</td><td>96,97%</td></tr>
<tr><td>30</td><td>Manitoba Moose</td><td>96,73%</td></tr>
<tr><td>31</td><td>Portland Pirates</td><td>96,11%</td></tr>
<tr><td>32</td><td>Albany Devils</td><td>93,11%</td></tr>
<tr><td>33</td><td>Joliette Sportif</td><td>89,86%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,44</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Paradise Dark Angels</td><td>35,05</td></tr>
<tr><td>2</td><td>Gatineau Olympiques</td><td>34,19</td></tr>
<tr><td>3</td><td>Oklahoma City Barons</td><td>34,03</td></tr>
<tr><td>4</td><td>Las Vegas Gamblers</td><td>33,94</td></tr>
<tr><td>5</td><td>Wilkes-Barre/Scranton Penguins</td><td>33,73</td></tr>
<tr><td>6</td><td>Joliette Sportif</td><td>33,58</td></tr>
<tr><td>7</td><td>Rouyn-Noranda Huskies</td><td>33,56</td></tr>
<tr><td>8</td><td>Houston Aeros</td><td>33,33</td></tr>
<tr><td>9</td><td>Grand Rapids Griffins</td><td>33,24</td></tr>
<tr><td>10</td><td>Manitoba Moose</td><td>33,10</td></tr>
<tr><td>11</td><td>Laval Chiefs</td><td>32,86</td></tr>
<tr><td>12</td><td>Lake Erie Monsters</td><td>32,76</td></tr>
<tr><td>13</td><td>Norfolk Admirals</td><td>32,71</td></tr>
<tr><td>14</td><td>Trois-Rivières Draveurs</td><td>32,69</td></tr>
<tr><td>15</td><td>Connecticut Whale</td><td>32,59</td></tr>
<tr><td>16</td><td>Charlotte Checkers</td><td>32,56</td></tr>
<tr><td>17</td><td>Roberval Dwarfs</td><td>32,51</td></tr>
<tr><td>18</td><td>Chicago Wolves</td><td>32,39</td></tr>
<tr><td>19</td><td>Rochester Americans</td><td>32,39</td></tr>
<tr><td>20</td><td>Mercer Island Archangels</td><td>32,10</td></tr>
<tr><td>21</td><td>Portland Pirates</td><td>32,01</td></tr>
<tr><td>22</td><td>San Antonio Rampage</td><td>31,98</td></tr>
<tr><td>23</td><td>Binghamton Senators</td><td>31,79</td></tr>
<tr><td>24</td><td>Adirondack Phantoms</td><td>31,76</td></tr>
<tr><td>25</td><td>Springfield Falcons</td><td>31,59</td></tr>
<tr><td>26</td><td>Milwaukee Admirals</td><td>31,55</td></tr>
<tr><td>27</td><td>Landshut Cannibals</td><td>31,50</td></tr>
<tr><td>28</td><td>Chicoutimi Saguenéens</td><td>31,49</td></tr>
<tr><td>29</td><td>Bridgeport Sound Tigers</td><td>31,41</td></tr>
<tr><td>30</td><td>Rockford IceHogs</td><td>31,06</td></tr>
<tr><td>31</td><td>Providence Bruins</td><td>31,04</td></tr>
<tr><td>32</td><td>Peoria Rivermen</td><td>30,99</td></tr>
<tr><td>33</td><td>Albany Devils</td><td>29,18</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,44</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Joliette Sportif</td><td>30,68</td></tr>
<tr><td>2</td><td>Grand Rapids Griffins</td><td>31,08</td></tr>
<tr><td>3</td><td>Paradise Dark Angels</td><td>31,15</td></tr>
<tr><td>4</td><td>Trois-Rivières Draveurs</td><td>31,23</td></tr>
<tr><td>5</td><td>Connecticut Whale</td><td>31,31</td></tr>
<tr><td>6</td><td>Charlotte Checkers</td><td>31,35</td></tr>
<tr><td>7</td><td>Milwaukee Admirals</td><td>31,40</td></tr>
<tr><td>8</td><td>Gatineau Olympiques</td><td>31,80</td></tr>
<tr><td>9</td><td>Roberval Dwarfs</td><td>31,88</td></tr>
<tr><td>10</td><td>Houston Aeros</td><td>31,93</td></tr>
<tr><td>11</td><td>Lake Erie Monsters</td><td>31,98</td></tr>
<tr><td>12</td><td>Mercer Island Archangels</td><td>31,98</td></tr>
<tr><td>13</td><td>Albany Devils</td><td>32,05</td></tr>
<tr><td>14</td><td>Peoria Rivermen</td><td>32,28</td></tr>
<tr><td>15</td><td>Bridgeport Sound Tigers</td><td>32,43</td></tr>
<tr><td>16</td><td>Manitoba Moose</td><td>32,50</td></tr>
<tr><td>17</td><td>Binghamton Senators</td><td>32,54</td></tr>
<tr><td>18</td><td>Springfield Falcons</td><td>32,58</td></tr>
<tr><td>19</td><td>Chicoutimi Saguenéens</td><td>32,59</td></tr>
<tr><td>20</td><td>Landshut Cannibals</td><td>32,60</td></tr>
<tr><td>21</td><td>Chicago Wolves</td><td>32,71</td></tr>
<tr><td>22</td><td>Providence Bruins</td><td>32,78</td></tr>
<tr><td>23</td><td>Laval Chiefs</td><td>32,83</td></tr>
<tr><td>24</td><td>Wilkes-Barre/Scranton Penguins</td><td>32,90</td></tr>
<tr><td>25</td><td>Adirondack Phantoms</td><td>33,24</td></tr>
<tr><td>26</td><td>San Antonio Rampage</td><td>33,28</td></tr>
<tr><td>27</td><td>Oklahoma City Barons</td><td>33,33</td></tr>
<tr><td>28</td><td>Rouyn-Noranda Huskies</td><td>33,33</td></tr>
<tr><td>29</td><td>Las Vegas Gamblers</td><td>33,41</td></tr>
<tr><td>30</td><td>Rockford IceHogs</td><td>33,51</td></tr>
<tr><td>31</td><td>Rochester Americans</td><td>33,56</td></tr>
<tr><td>32</td><td>Norfolk Admirals</td><td>33,56</td></tr>
<tr><td>33</td><td>Portland Pirates</td><td>34,91</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Paradise Dark Angels</td><td>112,52%</td></tr>
<tr><td>2</td><td>Joliette Sportif</td><td>109,45%</td></tr>
<tr><td>3</td><td>Gatineau Olympiques</td><td>107,51%</td></tr>
<tr><td>4</td><td>Grand Rapids Griffins</td><td>106,96%</td></tr>
<tr><td>5</td><td>Trois-Rivières Draveurs</td><td>104,68%</td></tr>
<tr><td>6</td><td>Houston Aeros</td><td>104,39%</td></tr>
<tr><td>7</td><td>Connecticut Whale</td><td>104,07%</td></tr>
<tr><td>8</td><td>Charlotte Checkers</td><td>103,87%</td></tr>
<tr><td>9</td><td>Wilkes-Barre/Scranton Penguins</td><td>102,51%</td></tr>
<tr><td>10</td><td>Lake Erie Monsters</td><td>102,46%</td></tr>
<tr><td>11</td><td>Oklahoma City Barons</td><td>102,10%</td></tr>
<tr><td>12</td><td>Roberval Dwarfs</td><td>102,00%</td></tr>
<tr><td>13</td><td>Manitoba Moose</td><td>101,85%</td></tr>
<tr><td>14</td><td>Las Vegas Gamblers</td><td>101,57%</td></tr>
<tr><td>15</td><td>Rouyn-Noranda Huskies</td><td>100,71%</td></tr>
<tr><td>16</td><td>Milwaukee Admirals</td><td>100,48%</td></tr>
<tr><td>17</td><td>Mercer Island Archangels</td><td>100,39%</td></tr>
<tr><td>18</td><td>Laval Chiefs</td><td>100,11%</td></tr>
<tr><td>19</td><td>Chicago Wolves</td><td>99,01%</td></tr>
<tr><td>20</td><td>Binghamton Senators</td><td>97,69%</td></tr>
<tr><td>21</td><td>Norfolk Admirals</td><td>97,47%</td></tr>
<tr><td>22</td><td>Springfield Falcons</td><td>96,97%</td></tr>
<tr><td>23</td><td>Bridgeport Sound Tigers</td><td>96,88%</td></tr>
<tr><td>24</td><td>Landshut Cannibals</td><td>96,63%</td></tr>
<tr><td>25</td><td>Chicoutimi Saguenéens</td><td>96,62%</td></tr>
<tr><td>26</td><td>Rochester Americans</td><td>96,50%</td></tr>
<tr><td>27</td><td>San Antonio Rampage</td><td>96,09%</td></tr>
<tr><td>28</td><td>Peoria Rivermen</td><td>96,01%</td></tr>
<tr><td>29</td><td>Adirondack Phantoms</td><td>95,56%</td></tr>
<tr><td>30</td><td>Providence Bruins</td><td>94,70%</td></tr>
<tr><td>31</td><td>Rockford IceHogs</td><td>92,69%</td></tr>
<tr><td>32</td><td>Portland Pirates</td><td>91,69%</td></tr>
<tr><td>33</td><td>Albany Devils</td><td>91,03%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7,88</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>6,18</td></tr>
<tr><td>2</td><td>Grand Rapids Griffins</td><td>6,45</td></tr>
<tr><td>3</td><td>Roberval Dwarfs</td><td>6,84</td></tr>
<tr><td>4</td><td>Connecticut Whale</td><td>6,93</td></tr>
<tr><td>5</td><td>Lake Erie Monsters</td><td>7,44</td></tr>
<tr><td>6</td><td>Paradise Dark Angels</td><td>7,44</td></tr>
<tr><td>7</td><td>Oklahoma City Barons</td><td>7,53</td></tr>
<tr><td>8</td><td>Wilkes-Barre/Scranton Penguins</td><td>7,53</td></tr>
<tr><td>9</td><td>Rochester Americans</td><td>7,60</td></tr>
<tr><td>10</td><td>Milwaukee Admirals</td><td>7,64</td></tr>
<tr><td>11</td><td>San Antonio Rampage</td><td>7,69</td></tr>
<tr><td>12</td><td>Albany Devils</td><td>7,69</td></tr>
<tr><td>13</td><td>Binghamton Senators</td><td>7,73</td></tr>
<tr><td>14</td><td>Rockford IceHogs</td><td>7,76</td></tr>
<tr><td>15</td><td>Springfield Falcons</td><td>7,85</td></tr>
<tr><td>16</td><td>Gatineau Olympiques</td><td>7,88</td></tr>
<tr><td>17</td><td>Rouyn-Noranda Huskies</td><td>7,94</td></tr>
<tr><td>18</td><td>Portland Pirates</td><td>7,94</td></tr>
<tr><td>19</td><td>Bridgeport Sound Tigers</td><td>7,94</td></tr>
<tr><td>20</td><td>Providence Bruins</td><td>8,08</td></tr>
<tr><td>21</td><td>Norfolk Admirals</td><td>8,10</td></tr>
<tr><td>22</td><td>Peoria Rivermen</td><td>8,14</td></tr>
<tr><td>23</td><td>Adirondack Phantoms</td><td>8,15</td></tr>
<tr><td>24</td><td>Houston Aeros</td><td>8,21</td></tr>
<tr><td>25</td><td>Landshut Cannibals</td><td>8,24</td></tr>
<tr><td>26</td><td>Joliette Sportif</td><td>8,26</td></tr>
<tr><td>27</td><td>Las Vegas Gamblers</td><td>8,30</td></tr>
<tr><td>28</td><td>Trois-Rivières Draveurs</td><td>8,33</td></tr>
<tr><td>29</td><td>Chicago Wolves</td><td>8,33</td></tr>
<tr><td>30</td><td>Manitoba Moose</td><td>8,69</td></tr>
<tr><td>31</td><td>Mercer Island Archangels</td><td>8,79</td></tr>
<tr><td>32</td><td>Charlotte Checkers</td><td>8,98</td></tr>
<tr><td>33</td><td>Chicoutimi Saguenéens</td><td>9,48</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,68</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Rouyn-Noranda Huskies</td><td>21,54</td></tr>
<tr><td>2</td><td>Charlotte Checkers</td><td>21,49</td></tr>
<tr><td>3</td><td>Chicoutimi Saguenéens</td><td>21,43</td></tr>
<tr><td>4</td><td>Springfield Falcons</td><td>20,68</td></tr>
<tr><td>5</td><td>Las Vegas Gamblers</td><td>20,66</td></tr>
<tr><td>6</td><td>Oklahoma City Barons</td><td>20,56</td></tr>
<tr><td>7</td><td>Portland Pirates</td><td>20,41</td></tr>
<tr><td>8</td><td>San Antonio Rampage</td><td>20,04</td></tr>
<tr><td>9</td><td>Albany Devils</td><td>19,98</td></tr>
<tr><td>10</td><td>Providence Bruins</td><td>19,95</td></tr>
<tr><td>11</td><td>Paradise Dark Angels</td><td>19,91</td></tr>
<tr><td>12</td><td>Landshut Cannibals</td><td>19,81</td></tr>
<tr><td>13</td><td>Trois-Rivières Draveurs</td><td>19,74</td></tr>
<tr><td>14</td><td>Gatineau Olympiques</td><td>19,66</td></tr>
<tr><td>15</td><td>Mercer Island Archangels</td><td>19,61</td></tr>
<tr><td>16</td><td>Binghamton Senators</td><td>19,60</td></tr>
<tr><td>17</td><td>Manitoba Moose</td><td>19,58</td></tr>
<tr><td>18</td><td>Chicago Wolves</td><td>19,55</td></tr>
<tr><td>19</td><td>Wilkes-Barre/Scranton Penguins</td><td>19,53</td></tr>
<tr><td>20</td><td>Adirondack Phantoms</td><td>19,53</td></tr>
<tr><td>21</td><td>Norfolk Admirals</td><td>19,33</td></tr>
<tr><td>22</td><td>Rockford IceHogs</td><td>19,31</td></tr>
<tr><td>23</td><td>Laval Chiefs</td><td>19,23</td></tr>
<tr><td>24</td><td>Connecticut Whale</td><td>19,18</td></tr>
<tr><td>25</td><td>Bridgeport Sound Tigers</td><td>19,13</td></tr>
<tr><td>26</td><td>Peoria Rivermen</td><td>19,08</td></tr>
<tr><td>27</td><td>Lake Erie Monsters</td><td>18,99</td></tr>
<tr><td>28</td><td>Rochester Americans</td><td>18,98</td></tr>
<tr><td>29</td><td>Roberval Dwarfs</td><td>18,85</td></tr>
<tr><td>30</td><td>Milwaukee Admirals</td><td>18,79</td></tr>
<tr><td>31</td><td>Grand Rapids Griffins</td><td>18,66</td></tr>
<tr><td>32</td><td>Houston Aeros</td><td>18,61</td></tr>
<tr><td>33</td><td>Joliette Sportif</td><td>18,06</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Peoria Rivermen</td><td>53,80%</td></tr>
<tr><td>2</td><td>Joliette Sportif</td><td>53,40%</td></tr>
<tr><td>3</td><td>Wilkes-Barre/Scranton Penguins</td><td>52,98%</td></tr>
<tr><td>4</td><td>Mercer Island Archangels</td><td>52,70%</td></tr>
<tr><td>5</td><td>Charlotte Checkers</td><td>51,75%</td></tr>
<tr><td>6</td><td>Manitoba Moose</td><td>51,74%</td></tr>
<tr><td>7</td><td>Trois-Rivières Draveurs</td><td>51,71%</td></tr>
<tr><td>8</td><td>Roberval Dwarfs</td><td>51,62%</td></tr>
<tr><td>9</td><td>Paradise Dark Angels</td><td>51,39%</td></tr>
<tr><td>10</td><td>Rockford IceHogs</td><td>51,39%</td></tr>
<tr><td>11</td><td>Lake Erie Monsters</td><td>51,34%</td></tr>
<tr><td>12</td><td>Houston Aeros</td><td>51,27%</td></tr>
<tr><td>13</td><td>Bridgeport Sound Tigers</td><td>51,18%</td></tr>
<tr><td>14</td><td>Adirondack Phantoms</td><td>50,66%</td></tr>
<tr><td>15</td><td>Las Vegas Gamblers</td><td>50,55%</td></tr>
<tr><td>16</td><td>Springfield Falcons</td><td>50,32%</td></tr>
<tr><td>17</td><td>Oklahoma City Barons</td><td>50,07%</td></tr>
<tr><td>18</td><td>Gatineau Olympiques</td><td>49,92%</td></tr>
<tr><td>19</td><td>Rochester Americans</td><td>49,92%</td></tr>
<tr><td>20</td><td>Grand Rapids Griffins</td><td>49,84%</td></tr>
<tr><td>21</td><td>Connecticut Whale</td><td>49,74%</td></tr>
<tr><td>22</td><td>Providence Bruins</td><td>49,73%</td></tr>
<tr><td>23</td><td>Chicoutimi Saguenéens</td><td>49,68%</td></tr>
<tr><td>24</td><td>San Antonio Rampage</td><td>49,63%</td></tr>
<tr><td>25</td><td>Chicago Wolves</td><td>49,59%</td></tr>
<tr><td>26</td><td>Binghamton Senators</td><td>49,34%</td></tr>
<tr><td>27</td><td>Norfolk Admirals</td><td>49,10%</td></tr>
<tr><td>28</td><td>Rouyn-Noranda Huskies</td><td>48,95%</td></tr>
<tr><td>29</td><td>Albany Devils</td><td>48,94%</td></tr>
<tr><td>30</td><td>Milwaukee Admirals</td><td>48,93%</td></tr>
<tr><td>31</td><td>Laval Chiefs</td><td>48,50%</td></tr>
<tr><td>32</td><td>Landshut Cannibals</td><td>48,44%</td></tr>
<tr><td>33</td><td>Portland Pirates</td><td>47,91%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
