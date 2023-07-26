<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Farm Team Stats</title>
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
<tr><td>Laval Chiefs</td><td>82</td><td>32</td><td>29</td><td>5</td><td>6</td><td>5</td><td>5</td><td>235</td><td>227</td><td>41</td><td>15</td><td>15</td><td>4</td><td>4</td><td>1</td><td>2</td><td>120</td><td>118</td><td>41</td><td>17</td><td>14</td><td>1</td><td>2</td><td>4</td><td>3</td><td>115</td><td>109</td><td>235</td><td>412</td><td>647</td></tr>
<tr><td>Portland Pirates</td><td>82</td><td>28</td><td>38</td><td>4</td><td>3</td><td>2</td><td>7</td><td>255</td><td>281</td><td>41</td><td>13</td><td>19</td><td>2</td><td>1</td><td>2</td><td>4</td><td>126</td><td>139</td><td>41</td><td>15</td><td>19</td><td>2</td><td>2</td><td>0</td><td>3</td><td>129</td><td>142</td><td>255</td><td>449</td><td>704</td></tr>
<tr><td>Providence Bruins</td><td>82</td><td>34</td><td>33</td><td>5</td><td>8</td><td>0</td><td>2</td><td>227</td><td>249</td><td>41</td><td>17</td><td>13</td><td>2</td><td>7</td><td>0</td><td>2</td><td>110</td><td>113</td><td>41</td><td>17</td><td>20</td><td>3</td><td>1</td><td>0</td><td>0</td><td>117</td><td>136</td><td>227</td><td>418</td><td>645</td></tr>
<tr><td>Rochester Americans</td><td>82</td><td>36</td><td>26</td><td>5</td><td>7</td><td>3</td><td>5</td><td>244</td><td>232</td><td>41</td><td>18</td><td>12</td><td>2</td><td>3</td><td>2</td><td>4</td><td>126</td><td>112</td><td>41</td><td>18</td><td>14</td><td>3</td><td>4</td><td>1</td><td>1</td><td>118</td><td>120</td><td>244</td><td>443</td><td>687</td></tr>
<tr><td>Joliette Sportif</td><td>82</td><td>32</td><td>34</td><td>8</td><td>3</td><td>2</td><td>3</td><td>245</td><td>250</td><td>41</td><td>21</td><td>13</td><td>4</td><td>1</td><td>1</td><td>1</td><td>126</td><td>108</td><td>41</td><td>11</td><td>21</td><td>4</td><td>2</td><td>1</td><td>2</td><td>119</td><td>142</td><td>245</td><td>433</td><td>678</td></tr>
<tr><td>Charlotte Checkers</td><td>82</td><td>26</td><td>37</td><td>7</td><td>4</td><td>4</td><td>4</td><td>217</td><td>243</td><td>41</td><td>15</td><td>17</td><td>3</td><td>2</td><td>2</td><td>2</td><td>122</td><td>119</td><td>41</td><td>11</td><td>20</td><td>4</td><td>2</td><td>2</td><td>2</td><td>95</td><td>124</td><td>217</td><td>392</td><td>609</td></tr>
<tr><td>Rockford IceHogs</td><td>82</td><td>34</td><td>29</td><td>8</td><td>3</td><td>6</td><td>2</td><td>257</td><td>239</td><td>41</td><td>19</td><td>14</td><td>5</td><td>1</td><td>2</td><td>0</td><td>125</td><td>114</td><td>41</td><td>15</td><td>15</td><td>3</td><td>2</td><td>4</td><td>2</td><td>132</td><td>125</td><td>257</td><td>455</td><td>712</td></tr>
<tr><td>Lake Erie Monsters</td><td>82</td><td>42</td><td>32</td><td>3</td><td>3</td><td>1</td><td>1</td><td>262</td><td>234</td><td>41</td><td>20</td><td>19</td><td>0</td><td>2</td><td>0</td><td>0</td><td>130</td><td>122</td><td>41</td><td>22</td><td>13</td><td>3</td><td>1</td><td>1</td><td>1</td><td>132</td><td>112</td><td>262</td><td>470</td><td>732</td></tr>
<tr><td>Springfield Falcons</td><td>82</td><td>30</td><td>32</td><td>5</td><td>6</td><td>3</td><td>6</td><td>248</td><td>244</td><td>41</td><td>17</td><td>15</td><td>1</td><td>4</td><td>1</td><td>3</td><td>132</td><td>127</td><td>41</td><td>13</td><td>17</td><td>4</td><td>2</td><td>2</td><td>3</td><td>116</td><td>117</td><td>248</td><td>451</td><td>699</td></tr>
<tr><td>Las Vegas Gamblers</td><td>82</td><td>26</td><td>42</td><td>3</td><td>5</td><td>3</td><td>3</td><td>210</td><td>255</td><td>41</td><td>14</td><td>21</td><td>1</td><td>2</td><td>2</td><td>1</td><td>115</td><td>128</td><td>41</td><td>12</td><td>21</td><td>2</td><td>3</td><td>1</td><td>2</td><td>95</td><td>127</td><td>210</td><td>383</td><td>593</td></tr>
<tr><td>Grand Rapids Griffins</td><td>82</td><td>30</td><td>33</td><td>4</td><td>8</td><td>3</td><td>4</td><td>238</td><td>245</td><td>41</td><td>16</td><td>17</td><td>2</td><td>4</td><td>1</td><td>1</td><td>117</td><td>119</td><td>41</td><td>14</td><td>16</td><td>2</td><td>4</td><td>2</td><td>3</td><td>121</td><td>126</td><td>238</td><td>424</td><td>662</td></tr>
<tr><td>Oklahoma City Barons</td><td>82</td><td>45</td><td>21</td><td>6</td><td>2</td><td>3</td><td>5</td><td>277</td><td>219</td><td>41</td><td>22</td><td>10</td><td>4</td><td>0</td><td>2</td><td>3</td><td>143</td><td>105</td><td>41</td><td>23</td><td>11</td><td>2</td><td>2</td><td>1</td><td>2</td><td>134</td><td>114</td><td>277</td><td>506</td><td>783</td></tr>
<tr><td>San Antonio Rampage</td><td>82</td><td>30</td><td>38</td><td>7</td><td>5</td><td>0</td><td>2</td><td>226</td><td>240</td><td>41</td><td>18</td><td>17</td><td>4</td><td>1</td><td>0</td><td>1</td><td>122</td><td>119</td><td>41</td><td>12</td><td>21</td><td>3</td><td>4</td><td>0</td><td>1</td><td>104</td><td>121</td><td>226</td><td>406</td><td>632</td></tr>
<tr><td>Gatineau Olympiques</td><td>82</td><td>38</td><td>32</td><td>1</td><td>6</td><td>1</td><td>4</td><td>265</td><td>247</td><td>41</td><td>20</td><td>16</td><td>1</td><td>3</td><td>1</td><td>0</td><td>131</td><td>116</td><td>41</td><td>18</td><td>16</td><td>0</td><td>3</td><td>0</td><td>4</td><td>134</td><td>131</td><td>265</td><td>472</td><td>737</td></tr>
<tr><td>Houston Aeros</td><td>82</td><td>30</td><td>36</td><td>3</td><td>3</td><td>7</td><td>3</td><td>236</td><td>246</td><td>41</td><td>12</td><td>20</td><td>1</td><td>3</td><td>4</td><td>1</td><td>120</td><td>130</td><td>41</td><td>18</td><td>16</td><td>2</td><td>0</td><td>3</td><td>2</td><td>116</td><td>116</td><td>236</td><td>410</td><td>646</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>82</td><td>38</td><td>27</td><td>9</td><td>3</td><td>3</td><td>2</td><td>263</td><td>227</td><td>41</td><td>21</td><td>12</td><td>4</td><td>2</td><td>1</td><td>1</td><td>136</td><td>113</td><td>41</td><td>17</td><td>15</td><td>5</td><td>1</td><td>2</td><td>1</td><td>127</td><td>114</td><td>263</td><td>474</td><td>737</td></tr>
<tr><td>Milwaukee Admirals</td><td>82</td><td>25</td><td>35</td><td>5</td><td>7</td><td>3</td><td>7</td><td>228</td><td>261</td><td>41</td><td>14</td><td>19</td><td>2</td><td>3</td><td>1</td><td>2</td><td>105</td><td>120</td><td>41</td><td>11</td><td>16</td><td>3</td><td>4</td><td>2</td><td>5</td><td>123</td><td>141</td><td>228</td><td>420</td><td>648</td></tr>
<tr><td>Albany Devils</td><td>82</td><td>31</td><td>35</td><td>6</td><td>4</td><td>6</td><td>0</td><td>223</td><td>230</td><td>41</td><td>16</td><td>16</td><td>4</td><td>2</td><td>3</td><td>0</td><td>118</td><td>115</td><td>41</td><td>15</td><td>19</td><td>2</td><td>2</td><td>3</td><td>0</td><td>105</td><td>115</td><td>223</td><td>396</td><td>619</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>82</td><td>39</td><td>28</td><td>8</td><td>5</td><td>0</td><td>2</td><td>256</td><td>218</td><td>41</td><td>22</td><td>14</td><td>2</td><td>1</td><td>0</td><td>2</td><td>125</td><td>101</td><td>41</td><td>17</td><td>14</td><td>6</td><td>4</td><td>0</td><td>0</td><td>131</td><td>117</td><td>256</td><td>460</td><td>716</td></tr>
<tr><td>Connecticut Whale</td><td>82</td><td>35</td><td>33</td><td>4</td><td>3</td><td>4</td><td>3</td><td>245</td><td>227</td><td>41</td><td>18</td><td>14</td><td>2</td><td>2</td><td>2</td><td>3</td><td>125</td><td>111</td><td>41</td><td>17</td><td>19</td><td>2</td><td>1</td><td>2</td><td>0</td><td>120</td><td>116</td><td>245</td><td>441</td><td>686</td></tr>
<tr><td>Binghamton Senators</td><td>82</td><td>35</td><td>32</td><td>2</td><td>7</td><td>4</td><td>2</td><td>227</td><td>246</td><td>41</td><td>18</td><td>13</td><td>2</td><td>3</td><td>3</td><td>2</td><td>119</td><td>117</td><td>41</td><td>17</td><td>19</td><td>0</td><td>4</td><td>1</td><td>0</td><td>108</td><td>129</td><td>227</td><td>404</td><td>631</td></tr>
<tr><td>Adirondack Phantoms</td><td>82</td><td>32</td><td>34</td><td>5</td><td>5</td><td>3</td><td>3</td><td>230</td><td>228</td><td>41</td><td>15</td><td>19</td><td>2</td><td>2</td><td>2</td><td>1</td><td>116</td><td>114</td><td>41</td><td>17</td><td>15</td><td>3</td><td>3</td><td>1</td><td>2</td><td>114</td><td>114</td><td>230</td><td>417</td><td>647</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>82</td><td>35</td><td>31</td><td>7</td><td>3</td><td>4</td><td>2</td><td>244</td><td>220</td><td>41</td><td>17</td><td>16</td><td>4</td><td>1</td><td>2</td><td>1</td><td>127</td><td>111</td><td>41</td><td>18</td><td>15</td><td>3</td><td>2</td><td>2</td><td>1</td><td>117</td><td>109</td><td>244</td><td>438</td><td>682</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>82</td><td>27</td><td>39</td><td>5</td><td>2</td><td>6</td><td>3</td><td>242</td><td>264</td><td>41</td><td>14</td><td>19</td><td>4</td><td>0</td><td>3</td><td>1</td><td>128</td><td>127</td><td>41</td><td>13</td><td>20</td><td>1</td><td>2</td><td>3</td><td>2</td><td>114</td><td>137</td><td>242</td><td>430</td><td>672</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>82</td><td>29</td><td>34</td><td>4</td><td>7</td><td>5</td><td>3</td><td>233</td><td>251</td><td>41</td><td>9</td><td>20</td><td>1</td><td>4</td><td>5</td><td>2</td><td>117</td><td>131</td><td>41</td><td>20</td><td>14</td><td>3</td><td>3</td><td>0</td><td>1</td><td>116</td><td>120</td><td>233</td><td>423</td><td>656</td></tr>
<tr><td>Mercer Island Archangels</td><td>82</td><td>29</td><td>38</td><td>3</td><td>2</td><td>5</td><td>5</td><td>237</td><td>245</td><td>41</td><td>14</td><td>20</td><td>1</td><td>2</td><td>2</td><td>2</td><td>118</td><td>131</td><td>41</td><td>15</td><td>18</td><td>2</td><td>0</td><td>3</td><td>3</td><td>119</td><td>114</td><td>237</td><td>424</td><td>661</td></tr>
<tr><td>Peoria Rivermen</td><td>82</td><td>37</td><td>22</td><td>9</td><td>6</td><td>6</td><td>2</td><td>251</td><td>220</td><td>41</td><td>17</td><td>10</td><td>5</td><td>3</td><td>5</td><td>1</td><td>124</td><td>110</td><td>41</td><td>20</td><td>12</td><td>4</td><td>3</td><td>1</td><td>1</td><td>127</td><td>110</td><td>251</td><td>448</td><td>699</td></tr>
<tr><td>Norfolk Admirals</td><td>82</td><td>33</td><td>32</td><td>4</td><td>8</td><td>1</td><td>4</td><td>254</td><td>245</td><td>41</td><td>19</td><td>10</td><td>3</td><td>6</td><td>1</td><td>2</td><td>136</td><td>114</td><td>41</td><td>14</td><td>22</td><td>1</td><td>2</td><td>0</td><td>2</td><td>118</td><td>131</td><td>254</td><td>462</td><td>716</td></tr>
<tr><td>Roberval Dwarfs</td><td>82</td><td>35</td><td>35</td><td>4</td><td>4</td><td>0</td><td>4</td><td>249</td><td>264</td><td>41</td><td>22</td><td>13</td><td>2</td><td>2</td><td>0</td><td>2</td><td>141</td><td>116</td><td>41</td><td>13</td><td>22</td><td>2</td><td>2</td><td>0</td><td>2</td><td>108</td><td>148</td><td>249</td><td>449</td><td>698</td></tr>
<tr><td>Chicago Wolves</td><td>82</td><td>38</td><td>30</td><td>5</td><td>3</td><td>5</td><td>1</td><td>248</td><td>216</td><td>41</td><td>19</td><td>16</td><td>2</td><td>2</td><td>2</td><td>0</td><td>129</td><td>110</td><td>41</td><td>19</td><td>14</td><td>3</td><td>1</td><td>3</td><td>1</td><td>119</td><td>106</td><td>248</td><td>445</td><td>693</td></tr>
<tr><td>Landshut Cannibals</td><td>82</td><td>25</td><td>37</td><td>1</td><td>10</td><td>5</td><td>4</td><td>220</td><td>256</td><td>41</td><td>18</td><td>15</td><td>0</td><td>4</td><td>2</td><td>2</td><td>112</td><td>111</td><td>41</td><td>7</td><td>22</td><td>1</td><td>6</td><td>3</td><td>2</td><td>108</td><td>145</td><td>220</td><td>376</td><td>596</td></tr>
<tr><td>Manitoba Moose</td><td>82</td><td>33</td><td>35</td><td>1</td><td>5</td><td>4</td><td>4</td><td>231</td><td>254</td><td>41</td><td>25</td><td>10</td><td>0</td><td>3</td><td>2</td><td>1</td><td>135</td><td>106</td><td>41</td><td>8</td><td>25</td><td>1</td><td>2</td><td>2</td><td>3</td><td>96</td><td>148</td><td>231</td><td>412</td><td>643</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Laval Chiefs</td><td>LAV</td><td>77</td><td>81</td><td>67</td><td>15</td><td>2617</td><td>873</td><td>887</td><td>802</td><td>90</td><td>2502</td><td>717</td><td>610</td><td>1640</td><td>311</td><td>63</td><td>20,26%</td><td>266</td><td>40</td><td>84,96%</td><td>0</td><td>48,89%</td><td>51,97%</td><td>49,64%</td><td>1972</td><td>1956</td><td>1063</td><td>610</td><td>1341</td><td>534</td><td>5</td><td>0</td></tr>
<tr><td>Portland Pirates</td><td>POR</td><td>90</td><td>79</td><td>80</td><td>12</td><td>2544</td><td>821</td><td>809</td><td>876</td><td>71</td><td>2680</td><td>808</td><td>629</td><td>1618</td><td>283</td><td>70</td><td>24,73%</td><td>275</td><td>59</td><td>78,55%</td><td>3</td><td>47,59%</td><td>47,31%</td><td>45,09%</td><td>2014</td><td>1907</td><td>1059</td><td>620</td><td>1308</td><td>518</td><td>1</td><td>7</td></tr>
<tr><td>Providence Bruins</td><td>PRO</td><td>86</td><td>70</td><td>66</td><td>5</td><td>2508</td><td>857</td><td>826</td><td>802</td><td>28</td><td>2586</td><td>652</td><td>652</td><td>1633</td><td>295</td><td>62</td><td>21,02%</td><td>280</td><td>63</td><td>77,50%</td><td>3</td><td>48,84%</td><td>51,24%</td><td>49,61%</td><td>1921</td><td>1965</td><td>1061</td><td>614</td><td>1347</td><td>530</td><td>4</td><td>1</td></tr>
<tr><td>Rochester Americans</td><td>RCH</td><td>80</td><td>82</td><td>74</td><td>12</td><td>2699</td><td>891</td><td>886</td><td>866</td><td>86</td><td>2535</td><td>728</td><td>656</td><td>1694</td><td>304</td><td>52</td><td>17,11%</td><td>292</td><td>60</td><td>79,45%</td><td>2</td><td>51,71%</td><td>50,67%</td><td>51,80%</td><td>1940</td><td>1981</td><td>1063</td><td>622</td><td>1364</td><td>528</td><td>4</td><td>0</td></tr>
<tr><td>Joliette Sportif</td><td>JOL</td><td>93</td><td>68</td><td>74</td><td>17</td><td>2554</td><td>899</td><td>797</td><td>819</td><td>60</td><td>2598</td><td>776</td><td>627</td><td>1610</td><td>303</td><td>67</td><td>22,11%</td><td>268</td><td>58</td><td>78,36%</td><td>2</td><td>51,50%</td><td>51,01%</td><td>51,77%</td><td>1952</td><td>1953</td><td>1064</td><td>615</td><td>1343</td><td>524</td><td>5</td><td>2</td></tr>
<tr><td>Charlotte Checkers</td><td>CHA</td><td>77</td><td>74</td><td>55</td><td>20</td><td>2414</td><td>793</td><td>738</td><td>851</td><td>69</td><td>2513</td><td>741</td><td>709</td><td>1742</td><td>280</td><td>49</td><td>17,50%</td><td>297</td><td>66</td><td>77,78%</td><td>1</td><td>49,10%</td><td>51,65%</td><td>50,64%</td><td>1971</td><td>1941</td><td>1064</td><td>618</td><td>1327</td><td>526</td><td>2</td><td>2</td></tr>
<tr><td>Rockford IceHogs</td><td>RFD</td><td>95</td><td>83</td><td>65</td><td>16</td><td>2478</td><td>799</td><td>808</td><td>821</td><td>81</td><td>2681</td><td>760</td><td>721</td><td>1648</td><td>286</td><td>56</td><td>19,58%</td><td>309</td><td>59</td><td>80,91%</td><td>1</td><td>49,87%</td><td>48,54%</td><td>47,74%</td><td>1990</td><td>1935</td><td>1059</td><td>614</td><td>1323</td><td>526</td><td>3</td><td>2</td></tr>
<tr><td>Lake Erie Monsters</td><td>LKE</td><td>83</td><td>88</td><td>87</td><td>5</td><td>2609</td><td>858</td><td>861</td><td>879</td><td>17</td><td>2352</td><td>682</td><td>656</td><td>1658</td><td>309</td><td>68</td><td>22,01%</td><td>278</td><td>50</td><td>82,01%</td><td>4</td><td>50,65%</td><td>49,75%</td><td>53,70%</td><td>1914</td><td>1976</td><td>1052</td><td>613</td><td>1359</td><td>521</td><td>4</td><td>2</td></tr>
<tr><td>Springfield Falcons</td><td>SPR</td><td>85</td><td>82</td><td>73</td><td>13</td><td>2548</td><td>820</td><td>816</td><td>876</td><td>78</td><td>2566</td><td>737</td><td>677</td><td>1668</td><td>300</td><td>51</td><td>17,00%</td><td>317</td><td>77</td><td>75,71%</td><td>2</td><td>52,13%</td><td>51,47%</td><td>52,55%</td><td>1942</td><td>1990</td><td>1055</td><td>614</td><td>1373</td><td>531</td><td>5</td><td>3</td></tr>
<tr><td>Las Vegas Gamblers</td><td>LVG</td><td>75</td><td>65</td><td>64</td><td>8</td><td>2432</td><td>807</td><td>802</td><td>785</td><td>61</td><td>2589</td><td>791</td><td>710</td><td>1698</td><td>271</td><td>48</td><td>17,71%</td><td>316</td><td>60</td><td>81,01%</td><td>4</td><td>50,25%</td><td>50,95%</td><td>51,82%</td><td>1987</td><td>1912</td><td>1068</td><td>624</td><td>1297</td><td>527</td><td>0</td><td>1</td></tr>
<tr><td>Grand Rapids Griffins</td><td>GRG</td><td>80</td><td>80</td><td>71</td><td>9</td><td>2554</td><td>828</td><td>831</td><td>847</td><td>73</td><td>2506</td><td>758</td><td>638</td><td>1526</td><td>332</td><td>67</td><td>20,18%</td><td>280</td><td>48</td><td>82,86%</td><td>2</td><td>50,07%</td><td>51,31%</td><td>51,94%</td><td>1924</td><td>1995</td><td>1061</td><td>614</td><td>1371</td><td>540</td><td>6</td><td>3</td></tr>
<tr><td>Oklahoma City Barons</td><td>OKC</td><td>110</td><td>88</td><td>70</td><td>13</td><td>2754</td><td>893</td><td>930</td><td>886</td><td>73</td><td>2633</td><td>723</td><td>696</td><td>1612</td><td>267</td><td>55</td><td>20,60%</td><td>317</td><td>45</td><td>85,80%</td><td>4</td><td>51,35%</td><td>52,85%</td><td>51,15%</td><td>1986</td><td>1933</td><td>1062</td><td>618</td><td>1319</td><td>526</td><td>7</td><td>1</td></tr>
<tr><td>San Antonio Rampage</td><td>SAR</td><td>69</td><td>74</td><td>76</td><td>10</td><td>2624</td><td>856</td><td>800</td><td>938</td><td>42</td><td>2516</td><td>693</td><td>594</td><td>1585</td><td>312</td><td>54</td><td>17,31%</td><td>268</td><td>58</td><td>78,36%</td><td>1</td><td>49,70%</td><td>51,14%</td><td>51,88%</td><td>1917</td><td>1992</td><td>1043</td><td>602</td><td>1376</td><td>525</td><td>4</td><td>4</td></tr>
<tr><td>Gatineau Olympiques</td><td>GAT</td><td>86</td><td>90</td><td>87</td><td>3</td><td>2626</td><td>839</td><td>856</td><td>905</td><td>41</td><td>2575</td><td>799</td><td>678</td><td>1643</td><td>285</td><td>63</td><td>22,11%</td><td>294</td><td>58</td><td>80,27%</td><td>3</td><td>49,78%</td><td>51,16%</td><td>47,48%</td><td>1963</td><td>1947</td><td>1055</td><td>612</td><td>1340</td><td>522</td><td>3</td><td>2</td></tr>
<tr><td>Houston Aeros</td><td>HOU</td><td>85</td><td>80</td><td>61</td><td>15</td><td>2633</td><td>880</td><td>865</td><td>847</td><td>72</td><td>2545</td><td>767</td><td>585</td><td>1665</td><td>293</td><td>55</td><td>18,77%</td><td>248</td><td>48</td><td>80,65%</td><td>3</td><td>52,15%</td><td>51,64%</td><td>52,35%</td><td>1942</td><td>1975</td><td>1063</td><td>610</td><td>1355</td><td>531</td><td>3</td><td>4</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>TRD</td><td>91</td><td>85</td><td>75</td><td>14</td><td>2627</td><td>871</td><td>841</td><td>872</td><td>61</td><td>2502</td><td>685</td><td>782</td><td>1717</td><td>285</td><td>61</td><td>21,40%</td><td>353</td><td>67</td><td>81,02%</td><td>5</td><td>51,45%</td><td>50,43%</td><td>48,72%</td><td>1947</td><td>1954</td><td>1063</td><td>619</td><td>1336</td><td>524</td><td>2</td><td>0</td></tr>
<tr><td>Milwaukee Admirals</td><td>MIL</td><td>73</td><td>72</td><td>75</td><td>13</td><td>2530</td><td>810</td><td>847</td><td>829</td><td>81</td><td>2614</td><td>751</td><td>715</td><td>1582</td><td>281</td><td>41</td><td>14,59%</td><td>319</td><td>60</td><td>81,19%</td><td>2</td><td>49,59%</td><td>51,35%</td><td>51,74%</td><td>1953</td><td>1993</td><td>1050</td><td>606</td><td>1368</td><td>524</td><td>1</td><td>1</td></tr>
<tr><td>Albany Devils</td><td>ALB</td><td>74</td><td>62</td><td>75</td><td>16</td><td>2443</td><td>800</td><td>822</td><td>797</td><td>43</td><td>2655</td><td>776</td><td>764</td><td>1645</td><td>267</td><td>50</td><td>18,73%</td><td>342</td><td>70</td><td>79,53%</td><td>1</td><td>51,57%</td><td>50,77%</td><td>52,55%</td><td>2017</td><td>1888</td><td>1059</td><td>619</td><td>1281</td><td>520</td><td>5</td><td>1</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>BRI</td><td>98</td><td>81</td><td>69</td><td>10</td><td>2522</td><td>904</td><td>755</td><td>832</td><td>38</td><td>2565</td><td>750</td><td>679</td><td>1532</td><td>298</td><td>60</td><td>20,13%</td><td>297</td><td>56</td><td>81,14%</td><td>1</td><td>50,10%</td><td>52,74%</td><td>49,88%</td><td>1945</td><td>1960</td><td>1051</td><td>611</td><td>1350</td><td>528</td><td>4</td><td>1</td></tr>
<tr><td>Connecticut Whale</td><td>CTW</td><td>97</td><td>71</td><td>69</td><td>10</td><td>2627</td><td>896</td><td>810</td><td>890</td><td>52</td><td>2434</td><td>699</td><td>612</td><td>1565</td><td>315</td><td>59</td><td>18,73%</td><td>285</td><td>60</td><td>78,95%</td><td>4</td><td>51,46%</td><td>49,50%</td><td>48,82%</td><td>1881</td><td>2041</td><td>1045</td><td>594</td><td>1431</td><td>528</td><td>6</td><td>1</td></tr>
<tr><td>Binghamton Senators</td><td>BNG</td><td>85</td><td>71</td><td>65</td><td>7</td><td>2572</td><td>823</td><td>853</td><td>864</td><td>50</td><td>2610</td><td>738</td><td>591</td><td>1698</td><td>309</td><td>53</td><td>17,15%</td><td>275</td><td>53</td><td>80,73%</td><td>1</td><td>49,46%</td><td>51,28%</td><td>51,09%</td><td>1949</td><td>1960</td><td>1055</td><td>611</td><td>1343</td><td>524</td><td>2</td><td>1</td></tr>
<tr><td>Adirondack Phantoms</td><td>ADK</td><td>77</td><td>74</td><td>71</td><td>10</td><td>2567</td><td>817</td><td>829</td><td>876</td><td>62</td><td>2548</td><td>662</td><td>633</td><td>1556</td><td>285</td><td>59</td><td>20,70%</td><td>272</td><td>48</td><td>82,35%</td><td>3</td><td>50,74%</td><td>50,17%</td><td>53,80%</td><td>1925</td><td>2001</td><td>1049</td><td>601</td><td>1388</td><td>524</td><td>6</td><td>2</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>WBS</td><td>86</td><td>89</td><td>58</td><td>14</td><td>2580</td><td>858</td><td>838</td><td>854</td><td>54</td><td>2358</td><td>693</td><td>591</td><td>1532</td><td>294</td><td>49</td><td>16,67%</td><td>244</td><td>42</td><td>82,79%</td><td>4</td><td>50,71%</td><td>49,78%</td><td>49,77%</td><td>1917</td><td>1972</td><td>1081</td><td>625</td><td>1352</td><td>543</td><td>5</td><td>2</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>CHI</td><td>86</td><td>69</td><td>76</td><td>15</td><td>2529</td><td>811</td><td>822</td><td>857</td><td>71</td><td>2738</td><td>747</td><td>770</td><td>1718</td><td>267</td><td>65</td><td>24,34%</td><td>330</td><td>67</td><td>79,70%</td><td>4</td><td>48,13%</td><td>48,34%</td><td>50,27%</td><td>2014</td><td>1903</td><td>1057</td><td>614</td><td>1294</td><td>519</td><td>1</td><td>4</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>RNO</td><td>72</td><td>86</td><td>66</td><td>13</td><td>2489</td><td>836</td><td>832</td><td>781</td><td>68</td><td>2649</td><td>719</td><td>695</td><td>1641</td><td>287</td><td>54</td><td>18,82%</td><td>314</td><td>65</td><td>79,30%</td><td>0</td><td>49,43%</td><td>48,62%</td><td>52,17%</td><td>1984</td><td>1943</td><td>1056</td><td>618</td><td>1329</td><td>525</td><td>4</td><td>3</td></tr>
<tr><td>Mercer Island Archangels</td><td>MIA</td><td>81</td><td>67</td><td>81</td><td>14</td><td>2591</td><td>840</td><td>844</td><td>857</td><td>98</td><td>2540</td><td>722</td><td>676</td><td>1696</td><td>296</td><td>57</td><td>19,26%</td><td>300</td><td>59</td><td>80,33%</td><td>2</td><td>52,85%</td><td>50,43%</td><td>51,63%</td><td>1939</td><td>1981</td><td>1069</td><td>624</td><td>1362</td><td>531</td><td>2</td><td>4</td></tr>
<tr><td>Peoria Rivermen</td><td>PEO</td><td>91</td><td>75</td><td>70</td><td>20</td><td>2603</td><td>858</td><td>840</td><td>857</td><td>80</td><td>2490</td><td>709</td><td>646</td><td>1613</td><td>286</td><td>54</td><td>18,88%</td><td>281</td><td>45</td><td>83,99%</td><td>2</td><td>52,33%</td><td>51,17%</td><td>54,86%</td><td>1931</td><td>1986</td><td>1069</td><td>615</td><td>1362</td><td>539</td><td>5</td><td>0</td></tr>
<tr><td>Norfolk Admirals</td><td>NOR</td><td>101</td><td>68</td><td>80</td><td>9</td><td>2559</td><td>845</td><td>833</td><td>838</td><td>60</td><td>2611</td><td>744</td><td>718</td><td>1654</td><td>304</td><td>57</td><td>18,75%</td><td>300</td><td>55</td><td>81,67%</td><td>3</td><td>49,47%</td><td>51,26%</td><td>51,02%</td><td>1992</td><td>1932</td><td>1050</td><td>612</td><td>1315</td><td>524</td><td>2</td><td>0</td></tr>
<tr><td>Roberval Dwarfs</td><td>ROB</td><td>95</td><td>72</td><td>78</td><td>7</td><td>2642</td><td>858</td><td>929</td><td>831</td><td>37</td><td>2589</td><td>763</td><td>605</td><td>1469</td><td>293</td><td>59</td><td>20,14%</td><td>266</td><td>55</td><td>79,32%</td><td>2</td><td>50,96%</td><td>51,86%</td><td>49,23%</td><td>1968</td><td>1944</td><td>1049</td><td>609</td><td>1342</td><td>524</td><td>3</td><td>1</td></tr>
<tr><td>Chicago Wolves</td><td>CHI</td><td>89</td><td>76</td><td>73</td><td>12</td><td>2511</td><td>814</td><td>801</td><td>864</td><td>51</td><td>2576</td><td>756</td><td>558</td><td>1626</td><td>288</td><td>51</td><td>17,71%</td><td>249</td><td>45</td><td>81,93%</td><td>0</td><td>50,42%</td><td>50,37%</td><td>49,32%</td><td>1961</td><td>1957</td><td>1054</td><td>615</td><td>1349</td><td>527</td><td>3</td><td>5</td></tr>
<tr><td>Landshut Cannibals</td><td>LAN</td><td>85</td><td>70</td><td>59</td><td>15</td><td>2597</td><td>873</td><td>868</td><td>825</td><td>66</td><td>2700</td><td>838</td><td>719</td><td>1650</td><td>309</td><td>56</td><td>18,12%</td><td>314</td><td>49</td><td>84,39%</td><td>1</td><td>48,59%</td><td>49,92%</td><td>48,76%</td><td>1998</td><td>1935</td><td>1054</td><td>621</td><td>1322</td><td>521</td><td>2</td><td>0</td></tr>
<tr><td>Manitoba Moose</td><td>MAN</td><td>75</td><td>71</td><td>80</td><td>9</td><td>2594</td><td>838</td><td>853</td><td>867</td><td>60</td><td>2621</td><td>723</td><td>728</td><td>1648</td><td>281</td><td>47</td><td>16,73%</td><td>330</td><td>67</td><td>79,70%</td><td>3</td><td>50,20%</td><td>49,58%</td><td>49,96%</td><td>1977</td><td>1921</td><td>1066</td><td>620</td><td>1306</td><td>530</td><td>2</td><td>2</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,94</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Oklahoma City Barons</td><td>3,38</td></tr>
<tr><td>2</td><td>Gatineau Olympiques</td><td>3,23</td></tr>
<tr><td>3</td><td>Trois-Rivières Draveurs</td><td>3,21</td></tr>
<tr><td>4</td><td>Lake Erie Monsters</td><td>3,20</td></tr>
<tr><td>5</td><td>Rockford IceHogs</td><td>3,13</td></tr>
<tr><td>6</td><td>Bridgeport Sound Tigers</td><td>3,12</td></tr>
<tr><td>7</td><td>Portland Pirates</td><td>3,11</td></tr>
<tr><td>8</td><td>Norfolk Admirals</td><td>3,10</td></tr>
<tr><td>9</td><td>Peoria Rivermen</td><td>3,06</td></tr>
<tr><td>10</td><td>Roberval Dwarfs</td><td>3,04</td></tr>
<tr><td>11</td><td>Chicago Wolves</td><td>3,02</td></tr>
<tr><td>12</td><td>Springfield Falcons</td><td>3,02</td></tr>
<tr><td>13</td><td>Connecticut Whale</td><td>2,99</td></tr>
<tr><td>14</td><td>Joliette Sportif</td><td>2,99</td></tr>
<tr><td>15</td><td>Wilkes-Barre/Scranton Penguins</td><td>2,98</td></tr>
<tr><td>16</td><td>Rochester Americans</td><td>2,98</td></tr>
<tr><td>17</td><td>Chicoutimi Saguenéens</td><td>2,95</td></tr>
<tr><td>18</td><td>Grand Rapids Griffins</td><td>2,90</td></tr>
<tr><td>19</td><td>Mercer Island Archangels</td><td>2,89</td></tr>
<tr><td>20</td><td>Houston Aeros</td><td>2,88</td></tr>
<tr><td>21</td><td>Laval Chiefs</td><td>2,87</td></tr>
<tr><td>22</td><td>Rouyn-Noranda Huskies</td><td>2,84</td></tr>
<tr><td>23</td><td>Manitoba Moose</td><td>2,82</td></tr>
<tr><td>24</td><td>Adirondack Phantoms</td><td>2,80</td></tr>
<tr><td>25</td><td>Milwaukee Admirals</td><td>2,78</td></tr>
<tr><td>26</td><td>Binghamton Senators</td><td>2,77</td></tr>
<tr><td>27</td><td>Providence Bruins</td><td>2,77</td></tr>
<tr><td>28</td><td>San Antonio Rampage</td><td>2,76</td></tr>
<tr><td>29</td><td>Albany Devils</td><td>2,72</td></tr>
<tr><td>30</td><td>Landshut Cannibals</td><td>2,68</td></tr>
<tr><td>31</td><td>Charlotte Checkers</td><td>2,65</td></tr>
<tr><td>32</td><td>Las Vegas Gamblers</td><td>2,56</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,94</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Chicago Wolves</td><td>2,63</td></tr>
<tr><td>2</td><td>Bridgeport Sound Tigers</td><td>2,66</td></tr>
<tr><td>3</td><td>Oklahoma City Barons</td><td>2,67</td></tr>
<tr><td>4</td><td>Wilkes-Barre/Scranton Penguins</td><td>2,68</td></tr>
<tr><td>5</td><td>Peoria Rivermen</td><td>2,68</td></tr>
<tr><td>6</td><td>Laval Chiefs</td><td>2,77</td></tr>
<tr><td>7</td><td>Trois-Rivières Draveurs</td><td>2,77</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>2,77</td></tr>
<tr><td>9</td><td>Adirondack Phantoms</td><td>2,78</td></tr>
<tr><td>10</td><td>Albany Devils</td><td>2,80</td></tr>
<tr><td>11</td><td>Rochester Americans</td><td>2,83</td></tr>
<tr><td>12</td><td>Lake Erie Monsters</td><td>2,85</td></tr>
<tr><td>13</td><td>Rockford IceHogs</td><td>2,91</td></tr>
<tr><td>14</td><td>San Antonio Rampage</td><td>2,93</td></tr>
<tr><td>15</td><td>Charlotte Checkers</td><td>2,96</td></tr>
<tr><td>16</td><td>Springfield Falcons</td><td>2,98</td></tr>
<tr><td>17</td><td>Grand Rapids Griffins</td><td>2,99</td></tr>
<tr><td>18</td><td>Mercer Island Archangels</td><td>2,99</td></tr>
<tr><td>19</td><td>Norfolk Admirals</td><td>2,99</td></tr>
<tr><td>20</td><td>Houston Aeros</td><td>3,00</td></tr>
<tr><td>21</td><td>Binghamton Senators</td><td>3,00</td></tr>
<tr><td>22</td><td>Gatineau Olympiques</td><td>3,01</td></tr>
<tr><td>23</td><td>Providence Bruins</td><td>3,04</td></tr>
<tr><td>24</td><td>Joliette Sportif</td><td>3,05</td></tr>
<tr><td>25</td><td>Rouyn-Noranda Huskies</td><td>3,06</td></tr>
<tr><td>26</td><td>Manitoba Moose</td><td>3,10</td></tr>
<tr><td>27</td><td>Las Vegas Gamblers</td><td>3,11</td></tr>
<tr><td>28</td><td>Landshut Cannibals</td><td>3,12</td></tr>
<tr><td>29</td><td>Milwaukee Admirals</td><td>3,18</td></tr>
<tr><td>30</td><td>Chicoutimi Saguenéens</td><td>3,22</td></tr>
<tr><td>31</td><td>Roberval Dwarfs</td><td>3,22</td></tr>
<tr><td>32</td><td>Portland Pirates</td><td>3,43</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Oklahoma City Barons</td><td>126,48%</td></tr>
<tr><td>2</td><td>Bridgeport Sound Tigers</td><td>117,43%</td></tr>
<tr><td>3</td><td>Trois-Rivières Draveurs</td><td>115,86%</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>114,81%</td></tr>
<tr><td>5</td><td>Peoria Rivermen</td><td>114,09%</td></tr>
<tr><td>6</td><td>Lake Erie Monsters</td><td>111,97%</td></tr>
<tr><td>7</td><td>Wilkes-Barre/Scranton Penguins</td><td>110,91%</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>107,93%</td></tr>
<tr><td>9</td><td>Rockford IceHogs</td><td>107,53%</td></tr>
<tr><td>10</td><td>Gatineau Olympiques</td><td>107,29%</td></tr>
<tr><td>11</td><td>Rochester Americans</td><td>105,17%</td></tr>
<tr><td>12</td><td>Norfolk Admirals</td><td>103,67%</td></tr>
<tr><td>13</td><td>Laval Chiefs</td><td>103,52%</td></tr>
<tr><td>14</td><td>Springfield Falcons</td><td>101,64%</td></tr>
<tr><td>15</td><td>Adirondack Phantoms</td><td>100,88%</td></tr>
<tr><td>16</td><td>Joliette Sportif</td><td>98,00%</td></tr>
<tr><td>17</td><td>Grand Rapids Griffins</td><td>97,14%</td></tr>
<tr><td>18</td><td>Albany Devils</td><td>96,96%</td></tr>
<tr><td>19</td><td>Mercer Island Archangels</td><td>96,73%</td></tr>
<tr><td>20</td><td>Houston Aeros</td><td>95,93%</td></tr>
<tr><td>21</td><td>Roberval Dwarfs</td><td>94,32%</td></tr>
<tr><td>22</td><td>San Antonio Rampage</td><td>94,17%</td></tr>
<tr><td>23</td><td>Rouyn-Noranda Huskies</td><td>92,83%</td></tr>
<tr><td>24</td><td>Binghamton Senators</td><td>92,28%</td></tr>
<tr><td>25</td><td>Chicoutimi Saguenéens</td><td>91,67%</td></tr>
<tr><td>26</td><td>Providence Bruins</td><td>91,16%</td></tr>
<tr><td>27</td><td>Manitoba Moose</td><td>90,94%</td></tr>
<tr><td>28</td><td>Portland Pirates</td><td>90,75%</td></tr>
<tr><td>29</td><td>Charlotte Checkers</td><td>89,30%</td></tr>
<tr><td>30</td><td>Milwaukee Admirals</td><td>87,36%</td></tr>
<tr><td>31</td><td>Landshut Cannibals</td><td>85,94%</td></tr>
<tr><td>32</td><td>Las Vegas Gamblers</td><td>82,35%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,33%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Portland Pirates</td><td>24,73%</td></tr>
<tr><td>2</td><td>Chicoutimi Saguenéens</td><td>24,34%</td></tr>
<tr><td>3</td><td>Joliette Sportif</td><td>22,11%</td></tr>
<tr><td>4</td><td>Gatineau Olympiques</td><td>22,11%</td></tr>
<tr><td>5</td><td>Lake Erie Monsters</td><td>22,01%</td></tr>
<tr><td>6</td><td>Trois-Rivières Draveurs</td><td>21,40%</td></tr>
<tr><td>7</td><td>Providence Bruins</td><td>21,02%</td></tr>
<tr><td>8</td><td>Adirondack Phantoms</td><td>20,70%</td></tr>
<tr><td>9</td><td>Oklahoma City Barons</td><td>20,60%</td></tr>
<tr><td>10</td><td>Laval Chiefs</td><td>20,26%</td></tr>
<tr><td>11</td><td>Grand Rapids Griffins</td><td>20,18%</td></tr>
<tr><td>12</td><td>Roberval Dwarfs</td><td>20,14%</td></tr>
<tr><td>13</td><td>Bridgeport Sound Tigers</td><td>20,13%</td></tr>
<tr><td>14</td><td>Rockford IceHogs</td><td>19,58%</td></tr>
<tr><td>15</td><td>Mercer Island Archangels</td><td>19,26%</td></tr>
<tr><td>16</td><td>Peoria Rivermen</td><td>18,88%</td></tr>
<tr><td>17</td><td>Rouyn-Noranda Huskies</td><td>18,82%</td></tr>
<tr><td>18</td><td>Houston Aeros</td><td>18,77%</td></tr>
<tr><td>19</td><td>Norfolk Admirals</td><td>18,75%</td></tr>
<tr><td>20</td><td>Connecticut Whale</td><td>18,73%</td></tr>
<tr><td>21</td><td>Albany Devils</td><td>18,73%</td></tr>
<tr><td>22</td><td>Landshut Cannibals</td><td>18,12%</td></tr>
<tr><td>23</td><td>Las Vegas Gamblers</td><td>17,71%</td></tr>
<tr><td>24</td><td>Chicago Wolves</td><td>17,71%</td></tr>
<tr><td>25</td><td>Charlotte Checkers</td><td>17,50%</td></tr>
<tr><td>26</td><td>San Antonio Rampage</td><td>17,31%</td></tr>
<tr><td>27</td><td>Binghamton Senators</td><td>17,15%</td></tr>
<tr><td>28</td><td>Rochester Americans</td><td>17,11%</td></tr>
<tr><td>29</td><td>Springfield Falcons</td><td>17,00%</td></tr>
<tr><td>30</td><td>Manitoba Moose</td><td>16,73%</td></tr>
<tr><td>31</td><td>Wilkes-Barre/Scranton Penguins</td><td>16,67%</td></tr>
<tr><td>32</td><td>Milwaukee Admirals</td><td>14,59%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,67%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Oklahoma City Barons</td><td>85,80%</td></tr>
<tr><td>2</td><td>Laval Chiefs</td><td>84,96%</td></tr>
<tr><td>3</td><td>Landshut Cannibals</td><td>84,39%</td></tr>
<tr><td>4</td><td>Peoria Rivermen</td><td>83,99%</td></tr>
<tr><td>5</td><td>Grand Rapids Griffins</td><td>82,86%</td></tr>
<tr><td>6</td><td>Wilkes-Barre/Scranton Penguins</td><td>82,79%</td></tr>
<tr><td>7</td><td>Adirondack Phantoms</td><td>82,35%</td></tr>
<tr><td>8</td><td>Lake Erie Monsters</td><td>82,01%</td></tr>
<tr><td>9</td><td>Chicago Wolves</td><td>81,93%</td></tr>
<tr><td>10</td><td>Norfolk Admirals</td><td>81,67%</td></tr>
<tr><td>11</td><td>Milwaukee Admirals</td><td>81,19%</td></tr>
<tr><td>12</td><td>Bridgeport Sound Tigers</td><td>81,14%</td></tr>
<tr><td>13</td><td>Trois-Rivières Draveurs</td><td>81,02%</td></tr>
<tr><td>14</td><td>Las Vegas Gamblers</td><td>81,01%</td></tr>
<tr><td>15</td><td>Rockford IceHogs</td><td>80,91%</td></tr>
<tr><td>16</td><td>Binghamton Senators</td><td>80,73%</td></tr>
<tr><td>17</td><td>Houston Aeros</td><td>80,65%</td></tr>
<tr><td>18</td><td>Mercer Island Archangels</td><td>80,33%</td></tr>
<tr><td>19</td><td>Gatineau Olympiques</td><td>80,27%</td></tr>
<tr><td>20</td><td>Manitoba Moose</td><td>79,70%</td></tr>
<tr><td>21</td><td>Chicoutimi Saguenéens</td><td>79,70%</td></tr>
<tr><td>22</td><td>Albany Devils</td><td>79,53%</td></tr>
<tr><td>23</td><td>Rochester Americans</td><td>79,45%</td></tr>
<tr><td>24</td><td>Roberval Dwarfs</td><td>79,32%</td></tr>
<tr><td>25</td><td>Rouyn-Noranda Huskies</td><td>79,30%</td></tr>
<tr><td>26</td><td>Connecticut Whale</td><td>78,95%</td></tr>
<tr><td>27</td><td>Portland Pirates</td><td>78,55%</td></tr>
<tr><td>28</td><td>San Antonio Rampage</td><td>78,36%</td></tr>
<tr><td>29</td><td>Joliette Sportif</td><td>78,36%</td></tr>
<tr><td>30</td><td>Charlotte Checkers</td><td>77,78%</td></tr>
<tr><td>31</td><td>Providence Bruins</td><td>77,50%</td></tr>
<tr><td>32</td><td>Springfield Falcons</td><td>75,71%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Oklahoma City Barons</td><td>106,40%</td></tr>
<tr><td>2</td><td>Laval Chiefs</td><td>105,22%</td></tr>
<tr><td>3</td><td>Chicoutimi Saguenéens</td><td>104,04%</td></tr>
<tr><td>4</td><td>Lake Erie Monsters</td><td>104,02%</td></tr>
<tr><td>5</td><td>Portland Pirates</td><td>103,28%</td></tr>
<tr><td>6</td><td>Adirondack Phantoms</td><td>103,05%</td></tr>
<tr><td>7</td><td>Grand Rapids Griffins</td><td>103,04%</td></tr>
<tr><td>8</td><td>Peoria Rivermen</td><td>102,87%</td></tr>
<tr><td>9</td><td>Landshut Cannibals</td><td>102,52%</td></tr>
<tr><td>10</td><td>Trois-Rivières Draveurs</td><td>102,42%</td></tr>
<tr><td>11</td><td>Gatineau Olympiques</td><td>102,38%</td></tr>
<tr><td>12</td><td>Bridgeport Sound Tigers</td><td>101,28%</td></tr>
<tr><td>13</td><td>Rockford IceHogs</td><td>100,49%</td></tr>
<tr><td>14</td><td>Joliette Sportif</td><td>100,47%</td></tr>
<tr><td>15</td><td>Norfolk Admirals</td><td>100,42%</td></tr>
<tr><td>16</td><td>Chicago Wolves</td><td>99,64%</td></tr>
<tr><td>17</td><td>Mercer Island Archangels</td><td>99,59%</td></tr>
<tr><td>18</td><td>Roberval Dwarfs</td><td>99,46%</td></tr>
<tr><td>19</td><td>Wilkes-Barre/Scranton Penguins</td><td>99,45%</td></tr>
<tr><td>20</td><td>Houston Aeros</td><td>99,42%</td></tr>
<tr><td>21</td><td>Las Vegas Gamblers</td><td>98,72%</td></tr>
<tr><td>22</td><td>Providence Bruins</td><td>98,52%</td></tr>
<tr><td>23</td><td>Albany Devils</td><td>98,26%</td></tr>
<tr><td>24</td><td>Rouyn-Noranda Huskies</td><td>98,11%</td></tr>
<tr><td>25</td><td>Binghamton Senators</td><td>97,88%</td></tr>
<tr><td>26</td><td>Connecticut Whale</td><td>97,68%</td></tr>
<tr><td>27</td><td>Rochester Americans</td><td>96,56%</td></tr>
<tr><td>28</td><td>Manitoba Moose</td><td>96,42%</td></tr>
<tr><td>29</td><td>Milwaukee Admirals</td><td>95,78%</td></tr>
<tr><td>30</td><td>San Antonio Rampage</td><td>95,67%</td></tr>
<tr><td>31</td><td>Charlotte Checkers</td><td>95,28%</td></tr>
<tr><td>32</td><td>Springfield Falcons</td><td>92,71%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31,32</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Oklahoma City Barons</td><td>33,59</td></tr>
<tr><td>2</td><td>Rochester Americans</td><td>32,91</td></tr>
<tr><td>3</td><td>Roberval Dwarfs</td><td>32,22</td></tr>
<tr><td>4</td><td>Houston Aeros</td><td>32,11</td></tr>
<tr><td>5</td><td>Connecticut Whale</td><td>32,04</td></tr>
<tr><td>6</td><td>Trois-Rivières Draveurs</td><td>32,04</td></tr>
<tr><td>7</td><td>Gatineau Olympiques</td><td>32,02</td></tr>
<tr><td>8</td><td>San Antonio Rampage</td><td>32,00</td></tr>
<tr><td>9</td><td>Laval Chiefs</td><td>31,91</td></tr>
<tr><td>10</td><td>Lake Erie Monsters</td><td>31,82</td></tr>
<tr><td>11</td><td>Peoria Rivermen</td><td>31,74</td></tr>
<tr><td>12</td><td>Landshut Cannibals</td><td>31,67</td></tr>
<tr><td>13</td><td>Manitoba Moose</td><td>31,63</td></tr>
<tr><td>14</td><td>Mercer Island Archangels</td><td>31,60</td></tr>
<tr><td>15</td><td>Wilkes-Barre/Scranton Penguins</td><td>31,46</td></tr>
<tr><td>16</td><td>Binghamton Senators</td><td>31,37</td></tr>
<tr><td>17</td><td>Adirondack Phantoms</td><td>31,30</td></tr>
<tr><td>18</td><td>Norfolk Admirals</td><td>31,21</td></tr>
<tr><td>19</td><td>Grand Rapids Griffins</td><td>31,15</td></tr>
<tr><td>20</td><td>Joliette Sportif</td><td>31,15</td></tr>
<tr><td>21</td><td>Springfield Falcons</td><td>31,07</td></tr>
<tr><td>22</td><td>Portland Pirates</td><td>31,02</td></tr>
<tr><td>23</td><td>Milwaukee Admirals</td><td>30,85</td></tr>
<tr><td>24</td><td>Chicoutimi Saguenéens</td><td>30,84</td></tr>
<tr><td>25</td><td>Bridgeport Sound Tigers</td><td>30,76</td></tr>
<tr><td>26</td><td>Chicago Wolves</td><td>30,62</td></tr>
<tr><td>27</td><td>Providence Bruins</td><td>30,59</td></tr>
<tr><td>28</td><td>Rouyn-Noranda Huskies</td><td>30,35</td></tr>
<tr><td>29</td><td>Rockford IceHogs</td><td>30,22</td></tr>
<tr><td>30</td><td>Albany Devils</td><td>29,79</td></tr>
<tr><td>31</td><td>Las Vegas Gamblers</td><td>29,66</td></tr>
<tr><td>32</td><td>Charlotte Checkers</td><td>29,44</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31,32</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Lake Erie Monsters</td><td>28,68</td></tr>
<tr><td>2</td><td>Wilkes-Barre/Scranton Penguins</td><td>28,76</td></tr>
<tr><td>3</td><td>Connecticut Whale</td><td>29,68</td></tr>
<tr><td>4</td><td>Peoria Rivermen</td><td>30,37</td></tr>
<tr><td>5</td><td>Laval Chiefs</td><td>30,51</td></tr>
<tr><td>6</td><td>Trois-Rivières Draveurs</td><td>30,51</td></tr>
<tr><td>7</td><td>Grand Rapids Griffins</td><td>30,56</td></tr>
<tr><td>8</td><td>Charlotte Checkers</td><td>30,65</td></tr>
<tr><td>9</td><td>San Antonio Rampage</td><td>30,68</td></tr>
<tr><td>10</td><td>Rochester Americans</td><td>30,91</td></tr>
<tr><td>11</td><td>Mercer Island Archangels</td><td>30,98</td></tr>
<tr><td>12</td><td>Houston Aeros</td><td>31,04</td></tr>
<tr><td>13</td><td>Adirondack Phantoms</td><td>31,07</td></tr>
<tr><td>14</td><td>Bridgeport Sound Tigers</td><td>31,28</td></tr>
<tr><td>15</td><td>Springfield Falcons</td><td>31,29</td></tr>
<tr><td>16</td><td>Gatineau Olympiques</td><td>31,40</td></tr>
<tr><td>17</td><td>Chicago Wolves</td><td>31,41</td></tr>
<tr><td>18</td><td>Providence Bruins</td><td>31,54</td></tr>
<tr><td>19</td><td>Las Vegas Gamblers</td><td>31,57</td></tr>
<tr><td>20</td><td>Roberval Dwarfs</td><td>31,57</td></tr>
<tr><td>21</td><td>Joliette Sportif</td><td>31,68</td></tr>
<tr><td>22</td><td>Binghamton Senators</td><td>31,83</td></tr>
<tr><td>23</td><td>Norfolk Admirals</td><td>31,84</td></tr>
<tr><td>24</td><td>Milwaukee Admirals</td><td>31,88</td></tr>
<tr><td>25</td><td>Manitoba Moose</td><td>31,96</td></tr>
<tr><td>26</td><td>Oklahoma City Barons</td><td>32,11</td></tr>
<tr><td>27</td><td>Rouyn-Noranda Huskies</td><td>32,30</td></tr>
<tr><td>28</td><td>Albany Devils</td><td>32,38</td></tr>
<tr><td>29</td><td>Portland Pirates</td><td>32,68</td></tr>
<tr><td>30</td><td>Rockford IceHogs</td><td>32,70</td></tr>
<tr><td>31</td><td>Landshut Cannibals</td><td>32,93</td></tr>
<tr><td>32</td><td>Chicoutimi Saguenéens</td><td>33,39</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Lake Erie Monsters</td><td>110,93%</td></tr>
<tr><td>2</td><td>Wilkes-Barre/Scranton Penguins</td><td>109,41%</td></tr>
<tr><td>3</td><td>Connecticut Whale</td><td>107,93%</td></tr>
<tr><td>4</td><td>Rochester Americans</td><td>106,47%</td></tr>
<tr><td>5</td><td>Trois-Rivières Draveurs</td><td>105,00%</td></tr>
<tr><td>6</td><td>Laval Chiefs</td><td>104,60%</td></tr>
<tr><td>7</td><td>Oklahoma City Barons</td><td>104,60%</td></tr>
<tr><td>8</td><td>Peoria Rivermen</td><td>104,54%</td></tr>
<tr><td>9</td><td>San Antonio Rampage</td><td>104,29%</td></tr>
<tr><td>10</td><td>Houston Aeros</td><td>103,46%</td></tr>
<tr><td>11</td><td>Roberval Dwarfs</td><td>102,05%</td></tr>
<tr><td>12</td><td>Mercer Island Archangels</td><td>102,01%</td></tr>
<tr><td>13</td><td>Gatineau Olympiques</td><td>101,98%</td></tr>
<tr><td>14</td><td>Grand Rapids Griffins</td><td>101,92%</td></tr>
<tr><td>15</td><td>Adirondack Phantoms</td><td>100,75%</td></tr>
<tr><td>16</td><td>Springfield Falcons</td><td>99,30%</td></tr>
<tr><td>17</td><td>Manitoba Moose</td><td>98,97%</td></tr>
<tr><td>18</td><td>Binghamton Senators</td><td>98,54%</td></tr>
<tr><td>19</td><td>Bridgeport Sound Tigers</td><td>98,32%</td></tr>
<tr><td>20</td><td>Joliette Sportif</td><td>98,31%</td></tr>
<tr><td>21</td><td>Norfolk Admirals</td><td>98,01%</td></tr>
<tr><td>22</td><td>Chicago Wolves</td><td>97,48%</td></tr>
<tr><td>23</td><td>Providence Bruins</td><td>96,98%</td></tr>
<tr><td>24</td><td>Milwaukee Admirals</td><td>96,79%</td></tr>
<tr><td>25</td><td>Landshut Cannibals</td><td>96,19%</td></tr>
<tr><td>26</td><td>Charlotte Checkers</td><td>96,06%</td></tr>
<tr><td>27</td><td>Portland Pirates</td><td>94,93%</td></tr>
<tr><td>28</td><td>Rouyn-Noranda Huskies</td><td>93,96%</td></tr>
<tr><td>29</td><td>Las Vegas Gamblers</td><td>93,94%</td></tr>
<tr><td>30</td><td>Rockford IceHogs</td><td>92,43%</td></tr>
<tr><td>31</td><td>Chicoutimi Saguenéens</td><td>92,37%</td></tr>
<tr><td>32</td><td>Albany Devils</td><td>92,02%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8,13</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Chicago Wolves</td><td>6,80</td></tr>
<tr><td>2</td><td>Houston Aeros</td><td>7,13</td></tr>
<tr><td>3</td><td>Binghamton Senators</td><td>7,21</td></tr>
<tr><td>4</td><td>Wilkes-Barre/Scranton Penguins</td><td>7,21</td></tr>
<tr><td>5</td><td>San Antonio Rampage</td><td>7,24</td></tr>
<tr><td>6</td><td>Roberval Dwarfs</td><td>7,38</td></tr>
<tr><td>7</td><td>Laval Chiefs</td><td>7,44</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>7,46</td></tr>
<tr><td>9</td><td>Joliette Sportif</td><td>7,65</td></tr>
<tr><td>10</td><td>Portland Pirates</td><td>7,67</td></tr>
<tr><td>11</td><td>Adirondack Phantoms</td><td>7,72</td></tr>
<tr><td>12</td><td>Grand Rapids Griffins</td><td>7,78</td></tr>
<tr><td>13</td><td>Peoria Rivermen</td><td>7,88</td></tr>
<tr><td>14</td><td>Providence Bruins</td><td>7,95</td></tr>
<tr><td>15</td><td>Rochester Americans</td><td>8,00</td></tr>
<tr><td>16</td><td>Lake Erie Monsters</td><td>8,00</td></tr>
<tr><td>17</td><td>Mercer Island Archangels</td><td>8,24</td></tr>
<tr><td>18</td><td>Springfield Falcons</td><td>8,26</td></tr>
<tr><td>19</td><td>Gatineau Olympiques</td><td>8,27</td></tr>
<tr><td>20</td><td>Bridgeport Sound Tigers</td><td>8,28</td></tr>
<tr><td>21</td><td>Rouyn-Noranda Huskies</td><td>8,48</td></tr>
<tr><td>22</td><td>Oklahoma City Barons</td><td>8,49</td></tr>
<tr><td>23</td><td>Charlotte Checkers</td><td>8,65</td></tr>
<tr><td>24</td><td>Las Vegas Gamblers</td><td>8,66</td></tr>
<tr><td>25</td><td>Milwaukee Admirals</td><td>8,72</td></tr>
<tr><td>26</td><td>Norfolk Admirals</td><td>8,76</td></tr>
<tr><td>27</td><td>Landshut Cannibals</td><td>8,77</td></tr>
<tr><td>28</td><td>Rockford IceHogs</td><td>8,79</td></tr>
<tr><td>29</td><td>Manitoba Moose</td><td>8,88</td></tr>
<tr><td>30</td><td>Albany Devils</td><td>9,32</td></tr>
<tr><td>31</td><td>Chicoutimi Saguenéens</td><td>9,39</td></tr>
<tr><td>32</td><td>Trois-Rivières Draveurs</td><td>9,54</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,89</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Charlotte Checkers</td><td>21,24</td></tr>
<tr><td>2</td><td>Chicoutimi Saguenéens</td><td>20,95</td></tr>
<tr><td>3</td><td>Trois-Rivières Draveurs</td><td>20,94</td></tr>
<tr><td>4</td><td>Binghamton Senators</td><td>20,71</td></tr>
<tr><td>5</td><td>Las Vegas Gamblers</td><td>20,71</td></tr>
<tr><td>6</td><td>Mercer Island Archangels</td><td>20,68</td></tr>
<tr><td>7</td><td>Rochester Americans</td><td>20,66</td></tr>
<tr><td>8</td><td>Springfield Falcons</td><td>20,34</td></tr>
<tr><td>9</td><td>Houston Aeros</td><td>20,30</td></tr>
<tr><td>10</td><td>Lake Erie Monsters</td><td>20,22</td></tr>
<tr><td>11</td><td>Norfolk Admirals</td><td>20,17</td></tr>
<tr><td>12</td><td>Landshut Cannibals</td><td>20,12</td></tr>
<tr><td>13</td><td>Manitoba Moose</td><td>20,10</td></tr>
<tr><td>14</td><td>Rockford IceHogs</td><td>20,10</td></tr>
<tr><td>15</td><td>Albany Devils</td><td>20,06</td></tr>
<tr><td>16</td><td>Gatineau Olympiques</td><td>20,04</td></tr>
<tr><td>17</td><td>Rouyn-Noranda Huskies</td><td>20,01</td></tr>
<tr><td>18</td><td>Laval Chiefs</td><td>20,00</td></tr>
<tr><td>19</td><td>Providence Bruins</td><td>19,91</td></tr>
<tr><td>20</td><td>Chicago Wolves</td><td>19,83</td></tr>
<tr><td>21</td><td>Portland Pirates</td><td>19,73</td></tr>
<tr><td>22</td><td>Peoria Rivermen</td><td>19,67</td></tr>
<tr><td>23</td><td>Oklahoma City Barons</td><td>19,66</td></tr>
<tr><td>24</td><td>Joliette Sportif</td><td>19,63</td></tr>
<tr><td>25</td><td>San Antonio Rampage</td><td>19,33</td></tr>
<tr><td>26</td><td>Milwaukee Admirals</td><td>19,29</td></tr>
<tr><td>27</td><td>Connecticut Whale</td><td>19,09</td></tr>
<tr><td>28</td><td>Adirondack Phantoms</td><td>18,98</td></tr>
<tr><td>29</td><td>Wilkes-Barre/Scranton Penguins</td><td>18,68</td></tr>
<tr><td>30</td><td>Bridgeport Sound Tigers</td><td>18,68</td></tr>
<tr><td>31</td><td>Grand Rapids Griffins</td><td>18,61</td></tr>
<tr><td>32</td><td>Roberval Dwarfs</td><td>17,91</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Peoria Rivermen</td><td>52,29%</td></tr>
<tr><td>2</td><td>Houston Aeros</td><td>51,97%</td></tr>
<tr><td>3</td><td>Oklahoma City Barons</td><td>51,95%</td></tr>
<tr><td>4</td><td>Springfield Falcons</td><td>51,94%</td></tr>
<tr><td>5</td><td>Mercer Island Archangels</td><td>51,64%</td></tr>
<tr><td>6</td><td>Albany Devils</td><td>51,43%</td></tr>
<tr><td>7</td><td>Joliette Sportif</td><td>51,35%</td></tr>
<tr><td>8</td><td>Rochester Americans</td><td>51,29%</td></tr>
<tr><td>9</td><td>Bridgeport Sound Tigers</td><td>51,15%</td></tr>
<tr><td>10</td><td>Adirondack Phantoms</td><td>51,04%</td></tr>
<tr><td>11</td><td>Roberval Dwarfs</td><td>51,02%</td></tr>
<tr><td>12</td><td>Grand Rapids Griffins</td><td>50,91%</td></tr>
<tr><td>13</td><td>Lake Erie Monsters</td><td>50,82%</td></tr>
<tr><td>14</td><td>Las Vegas Gamblers</td><td>50,81%</td></tr>
<tr><td>15</td><td>San Antonio Rampage</td><td>50,70%</td></tr>
<tr><td>16</td><td>Milwaukee Admirals</td><td>50,69%</td></tr>
<tr><td>17</td><td>Trois-Rivières Draveurs</td><td>50,55%</td></tr>
<tr><td>18</td><td>Binghamton Senators</td><td>50,50%</td></tr>
<tr><td>19</td><td>Norfolk Admirals</td><td>50,47%</td></tr>
<tr><td>20</td><td>Charlotte Checkers</td><td>50,42%</td></tr>
<tr><td>21</td><td>Laval Chiefs</td><td>50,32%</td></tr>
<tr><td>22</td><td>Chicago Wolves</td><td>50,21%</td></tr>
<tr><td>23</td><td>Connecticut Whale</td><td>50,16%</td></tr>
<tr><td>24</td><td>Wilkes-Barre/Scranton Penguins</td><td>50,15%</td></tr>
<tr><td>25</td><td>Providence Bruins</td><td>49,95%</td></tr>
<tr><td>26</td><td>Gatineau Olympiques</td><td>49,92%</td></tr>
<tr><td>27</td><td>Manitoba Moose</td><td>49,90%</td></tr>
<tr><td>28</td><td>Rouyn-Noranda Huskies</td><td>49,61%</td></tr>
<tr><td>29</td><td>Landshut Cannibals</td><td>49,16%</td></tr>
<tr><td>30</td><td>Rockford IceHogs</td><td>48,96%</td></tr>
<tr><td>31</td><td>Chicoutimi Saguenéens</td><td>48,60%</td></tr>
<tr><td>32</td><td>Portland Pirates</td><td>47,02%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
