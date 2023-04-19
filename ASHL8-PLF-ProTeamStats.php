<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Pro Team Stats</title>
<script src="ASHL8-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL8-PLF.css" rel="stylesheet" type="text/css" />
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
<tr><td>Anaheim Ducks</td><td>14</td><td>7</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>39</td><td>38</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>11</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>27</td><td>39</td><td>72</td><td>111</td></tr>
<tr><td>Arizona Coyotes</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>24</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>13</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>11</td><td>19</td><td>33</td><td>52</td></tr>
<tr><td>Boston Bruins</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>18</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>10</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>8</td><td>17</td><td>28</td><td>45</td></tr>
<tr><td>Chicago Blackhawks</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>19</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>6</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>13</td><td>14</td><td>25</td><td>39</td></tr>
<tr><td>Edmonton Oilers</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>21</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>11</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>10</td><td>12</td><td>20</td><td>32</td></tr>
<tr><td>Florida Panthers</td><td>15</td><td>9</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>39</td><td>39</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>17</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>22</td><td>39</td><td>68</td><td>107</td></tr>
<tr><td>Los Angeles Kings</td><td>27</td><td>16</td><td>11</td><td>0</td><td>0</td><td>0</td><td>0</td><td>88</td><td>81</td><td>15</td><td>7</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>46</td><td>45</td><td>12</td><td>9</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>42</td><td>36</td><td>88</td><td>163</td><td>251</td></tr>
<tr><td>Montreal Canadiens</td><td>11</td><td>4</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>26</td><td>30</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>11</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>19</td><td>26</td><td>49</td><td>75</td></tr>
<tr><td>Nashville Predators</td><td>19</td><td>11</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>60</td><td>56</td><td>9</td><td>6</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>38</td><td>29</td><td>10</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>27</td><td>60</td><td>110</td><td>170</td></tr>
<tr><td>New York Rangers</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>18</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>16</td><td>29</td><td>45</td></tr>
<tr><td>Ottawa Senators</td><td>13</td><td>7</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>40</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>17</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>23</td><td>33</td><td>61</td><td>94</td></tr>
<tr><td>Philadelphia Flyers</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>29</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>12</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>17</td><td>19</td><td>36</td><td>55</td></tr>
<tr><td>Pittsburgh Penguins</td><td>26</td><td>15</td><td>11</td><td>0</td><td>0</td><td>0</td><td>0</td><td>95</td><td>64</td><td>14</td><td>8</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>55</td><td>32</td><td>12</td><td>7</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>40</td><td>32</td><td>95</td><td>175</td><td>270</td></tr>
<tr><td>Seattle Saints</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>21</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>12</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>9</td><td>19</td><td>33</td><td>52</td></tr>
<tr><td>St. Louis Blues</td><td>12</td><td>6</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>35</td><td>29</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>15</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>14</td><td>35</td><td>64</td><td>99</td></tr>
<tr><td>Tampa Bay Lightning</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>23</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>13</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>10</td><td>19</td><td>35</td><td>54</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>ANH</td><td>14</td><td>12</td><td>12</td><td>1</td><td>451</td><td>126</td><td>164</td><td>143</td><td>18</td><td>440</td><td>126</td><td>215</td><td>300</td><td>71</td><td>12</td><td>16,90%</td><td>61</td><td>17</td><td>72,13%</td><td>0</td><td>43,88%</td><td>45,34%</td><td>50,45%</td><td>340</td><td>346</td><td>177</td><td>107</td><td>239</td><td>89</td><td>1</td><td>1</td></tr>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>5</td><td>5</td><td>9</td><td>0</td><td>201</td><td>54</td><td>59</td><td>85</td><td>3</td><td>227</td><td>63</td><td>64</td><td>134</td><td>27</td><td>8</td><td>29,63%</td><td>29</td><td>9</td><td>68,97%</td><td>0</td><td>52,53%</td><td>55,56%</td><td>47,83%</td><td>171</td><td>170</td><td>87</td><td>50</td><td>116</td><td>44</td><td>0</td><td>0</td></tr>
<tr><td>Boston Bruins</td><td>BOS</td><td>5</td><td>7</td><td>5</td><td>0</td><td>189</td><td>58</td><td>69</td><td>60</td><td>2</td><td>191</td><td>57</td><td>42</td><td>118</td><td>23</td><td>4</td><td>17,39%</td><td>17</td><td>1</td><td>94,12%</td><td>0</td><td>47,00%</td><td>50,89%</td><td>52,87%</td><td>145</td><td>144</td><td>74</td><td>43</td><td>101</td><td>37</td><td>0</td><td>1</td></tr>
<tr><td>Chicago Blackhawks</td><td>CHI</td><td>2</td><td>4</td><td>7</td><td>1</td><td>204</td><td>63</td><td>66</td><td>57</td><td>18</td><td>204</td><td>63</td><td>58</td><td>137</td><td>18</td><td>2</td><td>11,11%</td><td>27</td><td>3</td><td>88,89%</td><td>1</td><td>52,79%</td><td>52,27%</td><td>53,85%</td><td>160</td><td>147</td><td>81</td><td>47</td><td>100</td><td>40</td><td>0</td><td>1</td></tr>
<tr><td>Edmonton Oilers</td><td>EDM</td><td>4</td><td>5</td><td>3</td><td>0</td><td>190</td><td>62</td><td>64</td><td>64</td><td>0</td><td>221</td><td>60</td><td>55</td><td>109</td><td>18</td><td>2</td><td>11,11%</td><td>24</td><td>8</td><td>66,67%</td><td>0</td><td>46,96%</td><td>45,91%</td><td>43,62%</td><td>148</td><td>138</td><td>74</td><td>42</td><td>96</td><td>37</td><td>0</td><td>0</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>13</td><td>15</td><td>10</td><td>1</td><td>450</td><td>140</td><td>162</td><td>146</td><td>2</td><td>481</td><td>139</td><td>122</td><td>277</td><td>44</td><td>3</td><td>6,82%</td><td>53</td><td>9</td><td>83,02%</td><td>2</td><td>47,50%</td><td>49,05%</td><td>47,98%</td><td>357</td><td>365</td><td>183</td><td>107</td><td>258</td><td>90</td><td>2</td><td>1</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>37</td><td>25</td><td>23</td><td>3</td><td>932</td><td>338</td><td>312</td><td>265</td><td>17</td><td>787</td><td>208</td><td>323</td><td>574</td><td>113</td><td>30</td><td>26,55%</td><td>107</td><td>16</td><td>85,05%</td><td>0</td><td>52,37%</td><td>52,81%</td><td>51,38%</td><td>637</td><td>669</td><td>345</td><td>199</td><td>469</td><td>172</td><td>1</td><td>0</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>10</td><td>6</td><td>9</td><td>1</td><td>342</td><td>120</td><td>97</td><td>121</td><td>4</td><td>343</td><td>98</td><td>95</td><td>199</td><td>40</td><td>6</td><td>15,00%</td><td>34</td><td>7</td><td>79,41%</td><td>0</td><td>50,00%</td><td>53,13%</td><td>47,28%</td><td>257</td><td>265</td><td>140</td><td>79</td><td>185</td><td>73</td><td>1</td><td>0</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>27</td><td>15</td><td>16</td><td>2</td><td>552</td><td>199</td><td>151</td><td>186</td><td>16</td><td>630</td><td>201</td><td>136</td><td>328</td><td>70</td><td>9</td><td>12,86%</td><td>64</td><td>14</td><td>78,13%</td><td>1</td><td>48,33%</td><td>47,83%</td><td>49,50%</td><td>455</td><td>470</td><td>254</td><td>144</td><td>327</td><td>127</td><td>2</td><td>0</td></tr>
<tr><td>New York Rangers</td><td>NYR</td><td>8</td><td>5</td><td>3</td><td>0</td><td>203</td><td>61</td><td>67</td><td>67</td><td>8</td><td>185</td><td>57</td><td>48</td><td>120</td><td>26</td><td>2</td><td>7,69%</td><td>23</td><td>2</td><td>91,30%</td><td>0</td><td>47,49%</td><td>50,00%</td><td>54,74%</td><td>163</td><td>143</td><td>80</td><td>48</td><td>98</td><td>39</td><td>0</td><td>0</td></tr>
<tr><td>Ottawa Senators</td><td>OTT</td><td>8</td><td>9</td><td>13</td><td>3</td><td>427</td><td>134</td><td>116</td><td>127</td><td>50</td><td>485</td><td>134</td><td>117</td><td>233</td><td>44</td><td>5</td><td>11,36%</td><td>47</td><td>4</td><td>91,49%</td><td>0</td><td>47,42%</td><td>51,00%</td><td>45,25%</td><td>319</td><td>350</td><td>175</td><td>100</td><td>249</td><td>89</td><td>0</td><td>0</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>3</td><td>6</td><td>9</td><td>1</td><td>227</td><td>68</td><td>80</td><td>75</td><td>4</td><td>249</td><td>73</td><td>114</td><td>194</td><td>38</td><td>3</td><td>7,89%</td><td>41</td><td>12</td><td>70,73%</td><td>1</td><td>50,18%</td><td>47,02%</td><td>48,72%</td><td>168</td><td>174</td><td>84</td><td>52</td><td>122</td><td>42</td><td>0</td><td>1</td></tr>
<tr><td>Pittsburgh Penguins</td><td>PIT</td><td>33</td><td>33</td><td>28</td><td>1</td><td>913</td><td>281</td><td>296</td><td>312</td><td>24</td><td>852</td><td>259</td><td>248</td><td>541</td><td>99</td><td>23</td><td>23,23%</td><td>99</td><td>14</td><td>85,86%</td><td>0</td><td>52,76%</td><td>52,15%</td><td>51,18%</td><td>664</td><td>616</td><td>328</td><td>193</td><td>426</td><td>163</td><td>3</td><td>0</td></tr>
<tr><td>Seattle Saints</td><td>SEA</td><td>6</td><td>2</td><td>10</td><td>1</td><td>159</td><td>52</td><td>58</td><td>46</td><td>3</td><td>210</td><td>48</td><td>52</td><td>109</td><td>21</td><td>3</td><td>14,29%</td><td>24</td><td>6</td><td>75,00%</td><td>1</td><td>46,93%</td><td>49,21%</td><td>48,35%</td><td>150</td><td>139</td><td>75</td><td>44</td><td>96</td><td>36</td><td>0</td><td>0</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>18</td><td>11</td><td>6</td><td>0</td><td>413</td><td>148</td><td>141</td><td>124</td><td>0</td><td>344</td><td>87</td><td>85</td><td>195</td><td>42</td><td>13</td><td>30,95%</td><td>38</td><td>3</td><td>92,11%</td><td>0</td><td>53,12%</td><td>51,38%</td><td>53,07%</td><td>277</td><td>288</td><td>154</td><td>85</td><td>201</td><td>78</td><td>1</td><td>0</td></tr>
<tr><td>Tampa Bay Lightning</td><td>TBL</td><td>4</td><td>6</td><td>9</td><td>0</td><td>218</td><td>62</td><td>79</td><td>76</td><td>1</td><td>222</td><td>62</td><td>62</td><td>144</td><td>20</td><td>5</td><td>25,00%</td><td>26</td><td>5</td><td>80,77%</td><td>0</td><td>47,41%</td><td>48,80%</td><td>54,31%</td><td>171</td><td>160</td><td>91</td><td>52</td><td>109</td><td>43</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,93</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Pittsburgh Penguins</td><td>3,65</td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>3,26</td></tr>
<tr><td>3</td><td>Seattle Saints</td><td>3,17</td></tr>
<tr><td>4</td><td>Nashville Predators</td><td>3,16</td></tr>
<tr><td>5</td><td>St. Louis Blues</td><td>2,92</td></tr>
<tr><td>6</td><td>Boston Bruins</td><td>2,83</td></tr>
<tr><td>7</td><td>Anaheim Ducks</td><td>2,79</td></tr>
<tr><td>8</td><td>Arizona Coyotes</td><td>2,71</td></tr>
<tr><td>9</td><td>Tampa Bay Lightning</td><td>2,71</td></tr>
<tr><td>10</td><td>Philadelphia Flyers</td><td>2,71</td></tr>
<tr><td>11</td><td>New York Rangers</td><td>2,67</td></tr>
<tr><td>12</td><td>Florida Panthers</td><td>2,60</td></tr>
<tr><td>13</td><td>Ottawa Senators</td><td>2,54</td></tr>
<tr><td>14</td><td>Montreal Canadiens</td><td>2,36</td></tr>
<tr><td>15</td><td>Chicago Blackhawks</td><td>2,33</td></tr>
<tr><td>16</td><td>Edmonton Oilers</td><td>2,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,93</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>2,42</td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>2,46</td></tr>
<tr><td>3</td><td>Florida Panthers</td><td>2,60</td></tr>
<tr><td>4</td><td>Anaheim Ducks</td><td>2,71</td></tr>
<tr><td>5</td><td>Montreal Canadiens</td><td>2,73</td></tr>
<tr><td>6</td><td>Nashville Predators</td><td>2,95</td></tr>
<tr><td>7</td><td>New York Rangers</td><td>3,00</td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>3,00</td></tr>
<tr><td>9</td><td>Boston Bruins</td><td>3,00</td></tr>
<tr><td>10</td><td>Ottawa Senators</td><td>3,08</td></tr>
<tr><td>11</td><td>Chicago Blackhawks</td><td>3,17</td></tr>
<tr><td>12</td><td>Tampa Bay Lightning</td><td>3,29</td></tr>
<tr><td>13</td><td>Arizona Coyotes</td><td>3,43</td></tr>
<tr><td>14</td><td>Edmonton Oilers</td><td>3,50</td></tr>
<tr><td>15</td><td>Seattle Saints</td><td>3,50</td></tr>
<tr><td>16</td><td>Philadelphia Flyers</td><td>4,14</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Pittsburgh Penguins</td><td>148,44%</td></tr>
<tr><td>2</td><td>St. Louis Blues</td><td>120,69%</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>108,64%</td></tr>
<tr><td>4</td><td>Nashville Predators</td><td>107,14%</td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>102,63%</td></tr>
<tr><td>6</td><td>Florida Panthers</td><td>100,00%</td></tr>
<tr><td>7</td><td>Boston Bruins</td><td>94,44%</td></tr>
<tr><td>8</td><td>Seattle Saints</td><td>90,48%</td></tr>
<tr><td>9</td><td>New York Rangers</td><td>88,89%</td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>86,67%</td></tr>
<tr><td>11</td><td>Tampa Bay Lightning</td><td>82,61%</td></tr>
<tr><td>12</td><td>Ottawa Senators</td><td>82,50%</td></tr>
<tr><td>13</td><td>Arizona Coyotes</td><td>79,17%</td></tr>
<tr><td>14</td><td>Chicago Blackhawks</td><td>73,68%</td></tr>
<tr><td>15</td><td>Philadelphia Flyers</td><td>65,52%</td></tr>
<tr><td>16</td><td>Edmonton Oilers</td><td>57,14%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18,21%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>30,95%</td></tr>
<tr><td>2</td><td>Arizona Coyotes</td><td>29,63%</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>26,55%</td></tr>
<tr><td>4</td><td>Tampa Bay Lightning</td><td>25,00%</td></tr>
<tr><td>5</td><td>Pittsburgh Penguins</td><td>23,23%</td></tr>
<tr><td>6</td><td>Boston Bruins</td><td>17,39%</td></tr>
<tr><td>7</td><td>Anaheim Ducks</td><td>16,90%</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>15,00%</td></tr>
<tr><td>9</td><td>Seattle Saints</td><td>14,29%</td></tr>
<tr><td>10</td><td>Nashville Predators</td><td>12,86%</td></tr>
<tr><td>11</td><td>Ottawa Senators</td><td>11,36%</td></tr>
<tr><td>12</td><td>Edmonton Oilers</td><td>11,11%</td></tr>
<tr><td>13</td><td>Chicago Blackhawks</td><td>11,11%</td></tr>
<tr><td>14</td><td>Philadelphia Flyers</td><td>7,89%</td></tr>
<tr><td>15</td><td>New York Rangers</td><td>7,69%</td></tr>
<tr><td>16</td><td>Florida Panthers</td><td>6,82%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 81,79%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Boston Bruins</td><td>94,12%</td></tr>
<tr><td>2</td><td>St. Louis Blues</td><td>92,11%</td></tr>
<tr><td>3</td><td>Ottawa Senators</td><td>91,49%</td></tr>
<tr><td>4</td><td>New York Rangers</td><td>91,30%</td></tr>
<tr><td>5</td><td>Chicago Blackhawks</td><td>88,89%</td></tr>
<tr><td>6</td><td>Pittsburgh Penguins</td><td>85,86%</td></tr>
<tr><td>7</td><td>Los Angeles Kings</td><td>85,05%</td></tr>
<tr><td>8</td><td>Florida Panthers</td><td>83,02%</td></tr>
<tr><td>9</td><td>Tampa Bay Lightning</td><td>80,77%</td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>79,41%</td></tr>
<tr><td>11</td><td>Nashville Predators</td><td>78,13%</td></tr>
<tr><td>12</td><td>Seattle Saints</td><td>75,00%</td></tr>
<tr><td>13</td><td>Anaheim Ducks</td><td>72,13%</td></tr>
<tr><td>14</td><td>Philadelphia Flyers</td><td>70,73%</td></tr>
<tr><td>15</td><td>Arizona Coyotes</td><td>68,97%</td></tr>
<tr><td>16</td><td>Edmonton Oilers</td><td>66,67%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>123,06%</td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>111,60%</td></tr>
<tr><td>3</td><td>Boston Bruins</td><td>111,51%</td></tr>
<tr><td>4</td><td>Pittsburgh Penguins</td><td>109,09%</td></tr>
<tr><td>5</td><td>Tampa Bay Lightning</td><td>105,77%</td></tr>
<tr><td>6</td><td>Ottawa Senators</td><td>102,85%</td></tr>
<tr><td>7</td><td>Chicago Blackhawks</td><td>100,00%</td></tr>
<tr><td>8</td><td>New York Rangers</td><td>99,00%</td></tr>
<tr><td>9</td><td>Arizona Coyotes</td><td>98,60%</td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>94,41%</td></tr>
<tr><td>11</td><td>Nashville Predators</td><td>90,98%</td></tr>
<tr><td>12</td><td>Florida Panthers</td><td>89,84%</td></tr>
<tr><td>13</td><td>Seattle Saints</td><td>89,29%</td></tr>
<tr><td>14</td><td>Anaheim Ducks</td><td>89,03%</td></tr>
<tr><td>15</td><td>Philadelphia Flyers</td><td>78,63%</td></tr>
<tr><td>16</td><td>Edmonton Oilers</td><td>77,78%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,29</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Pittsburgh Penguins</td><td>35,12</td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>34,52</td></tr>
<tr><td>3</td><td>St. Louis Blues</td><td>34,42</td></tr>
<tr><td>4</td><td>Chicago Blackhawks</td><td>34,00</td></tr>
<tr><td>5</td><td>New York Rangers</td><td>33,83</td></tr>
<tr><td>6</td><td>Ottawa Senators</td><td>32,85</td></tr>
<tr><td>7</td><td>Philadelphia Flyers</td><td>32,43</td></tr>
<tr><td>8</td><td>Anaheim Ducks</td><td>32,21</td></tr>
<tr><td>9</td><td>Edmonton Oilers</td><td>31,67</td></tr>
<tr><td>10</td><td>Boston Bruins</td><td>31,50</td></tr>
<tr><td>11</td><td>Tampa Bay Lightning</td><td>31,14</td></tr>
<tr><td>12</td><td>Montreal Canadiens</td><td>31,09</td></tr>
<tr><td>13</td><td>Florida Panthers</td><td>30,00</td></tr>
<tr><td>14</td><td>Nashville Predators</td><td>29,05</td></tr>
<tr><td>15</td><td>Arizona Coyotes</td><td>28,71</td></tr>
<tr><td>16</td><td>Seattle Saints</td><td>26,50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,29</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>28,67</td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>29,15</td></tr>
<tr><td>3</td><td>New York Rangers</td><td>30,83</td></tr>
<tr><td>4</td><td>Montreal Canadiens</td><td>31,18</td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>31,43</td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>31,71</td></tr>
<tr><td>7</td><td>Boston Bruins</td><td>31,83</td></tr>
<tr><td>8</td><td>Florida Panthers</td><td>32,07</td></tr>
<tr><td>9</td><td>Arizona Coyotes</td><td>32,43</td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>32,77</td></tr>
<tr><td>11</td><td>Nashville Predators</td><td>33,16</td></tr>
<tr><td>12</td><td>Chicago Blackhawks</td><td>34,00</td></tr>
<tr><td>13</td><td>Seattle Saints</td><td>35,00</td></tr>
<tr><td>14</td><td>Philadelphia Flyers</td><td>35,57</td></tr>
<tr><td>15</td><td>Edmonton Oilers</td><td>36,83</td></tr>
<tr><td>16</td><td>Ottawa Senators</td><td>37,31</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>St. Louis Blues</td><td>120,06%</td></tr>
<tr><td>2</td><td>Los Angeles Kings</td><td>118,42%</td></tr>
<tr><td>3</td><td>New York Rangers</td><td>109,73%</td></tr>
<tr><td>4</td><td>Pittsburgh Penguins</td><td>107,16%</td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>102,50%</td></tr>
<tr><td>6</td><td>Chicago Blackhawks</td><td>100,00%</td></tr>
<tr><td>7</td><td>Montreal Canadiens</td><td>99,71%</td></tr>
<tr><td>8</td><td>Boston Bruins</td><td>98,95%</td></tr>
<tr><td>9</td><td>Tampa Bay Lightning</td><td>98,20%</td></tr>
<tr><td>10</td><td>Florida Panthers</td><td>93,56%</td></tr>
<tr><td>11</td><td>Philadelphia Flyers</td><td>91,16%</td></tr>
<tr><td>12</td><td>Arizona Coyotes</td><td>88,55%</td></tr>
<tr><td>13</td><td>Ottawa Senators</td><td>88,04%</td></tr>
<tr><td>14</td><td>Nashville Predators</td><td>87,62%</td></tr>
<tr><td>15</td><td>Edmonton Oilers</td><td>85,97%</td></tr>
<tr><td>16</td><td>Seattle Saints</td><td>75,71%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 9,77</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Boston Bruins</td><td>7,00</td></tr>
<tr><td>2</td><td>St. Louis Blues</td><td>7,08</td></tr>
<tr><td>3</td><td>Nashville Predators</td><td>7,16</td></tr>
<tr><td>4</td><td>New York Rangers</td><td>8,00</td></tr>
<tr><td>5</td><td>Florida Panthers</td><td>8,13</td></tr>
<tr><td>6</td><td>Montreal Canadiens</td><td>8,64</td></tr>
<tr><td>7</td><td>Seattle Saints</td><td>8,67</td></tr>
<tr><td>8</td><td>Tampa Bay Lightning</td><td>8,86</td></tr>
<tr><td>9</td><td>Ottawa Senators</td><td>9,00</td></tr>
<tr><td>10</td><td>Arizona Coyotes</td><td>9,14</td></tr>
<tr><td>11</td><td>Edmonton Oilers</td><td>9,17</td></tr>
<tr><td>12</td><td>Pittsburgh Penguins</td><td>9,54</td></tr>
<tr><td>13</td><td>Chicago Blackhawks</td><td>9,67</td></tr>
<tr><td>14</td><td>Los Angeles Kings</td><td>11,96</td></tr>
<tr><td>15</td><td>Anaheim Ducks</td><td>15,36</td></tr>
<tr><td>16</td><td>Philadelphia Flyers</td><td>16,29</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,74</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Philadelphia Flyers</td><td>27,71</td></tr>
<tr><td>2</td><td>Chicago Blackhawks</td><td>22,83</td></tr>
<tr><td>3</td><td>Anaheim Ducks</td><td>21,43</td></tr>
<tr><td>4</td><td>Los Angeles Kings</td><td>21,26</td></tr>
<tr><td>5</td><td>Pittsburgh Penguins</td><td>20,81</td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>20,57</td></tr>
<tr><td>7</td><td>New York Rangers</td><td>20,00</td></tr>
<tr><td>8</td><td>Boston Bruins</td><td>19,67</td></tr>
<tr><td>9</td><td>Arizona Coyotes</td><td>19,14</td></tr>
<tr><td>10</td><td>Florida Panthers</td><td>18,47</td></tr>
<tr><td>11</td><td>Seattle Saints</td><td>18,17</td></tr>
<tr><td>12</td><td>Edmonton Oilers</td><td>18,17</td></tr>
<tr><td>13</td><td>Montreal Canadiens</td><td>18,09</td></tr>
<tr><td>14</td><td>Ottawa Senators</td><td>17,92</td></tr>
<tr><td>15</td><td>Nashville Predators</td><td>17,26</td></tr>
<tr><td>16</td><td>St. Louis Blues</td><td>16,25</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Arizona Coyotes</td><td>52,85%</td></tr>
<tr><td>2</td><td>Chicago Blackhawks</td><td>52,76%</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>52,38%</td></tr>
<tr><td>4</td><td>St. Louis Blues</td><td>52,36%</td></tr>
<tr><td>5</td><td>Pittsburgh Penguins</td><td>52,24%</td></tr>
<tr><td>6</td><td>Montreal Canadiens</td><td>50,80%</td></tr>
<tr><td>7</td><td>New York Rangers</td><td>49,82%</td></tr>
<tr><td>8</td><td>Boston Bruins</td><td>49,62%</td></tr>
<tr><td>9</td><td>Tampa Bay Lightning</td><td>49,21%</td></tr>
<tr><td>10</td><td>Philadelphia Flyers</td><td>48,59%</td></tr>
<tr><td>11</td><td>Ottawa Senators</td><td>48,45%</td></tr>
<tr><td>12</td><td>Nashville Predators</td><td>48,35%</td></tr>
<tr><td>13</td><td>Florida Panthers</td><td>48,20%</td></tr>
<tr><td>14</td><td>Seattle Saints</td><td>48,04%</td></tr>
<tr><td>15</td><td>Edmonton Oilers</td><td>45,96%</td></tr>
<tr><td>16</td><td>Anaheim Ducks</td><td>45,62%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
