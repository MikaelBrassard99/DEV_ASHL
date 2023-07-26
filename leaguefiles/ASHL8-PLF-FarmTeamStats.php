<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Farm Team Stats</title>
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
<tr><td>Laval Chiefs</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>14</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>7</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>7</td><td>7</td><td>14</td><td>21</td></tr>
<tr><td>Rochester Americans</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>17</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>10</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>7</td><td>11</td><td>20</td><td>31</td></tr>
<tr><td>Joliette Sportif</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>17</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>6</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>11</td><td>14</td><td>25</td><td>39</td></tr>
<tr><td>Rockford IceHogs</td><td>23</td><td>13</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>71</td><td>66</td><td>13</td><td>5</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>41</td><td>44</td><td>10</td><td>8</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>30</td><td>22</td><td>71</td><td>127</td><td>198</td></tr>
<tr><td>Lake Erie Monsters</td><td>10</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>26</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>14</td><td>5</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>12</td><td>33</td><td>60</td><td>93</td></tr>
<tr><td>Oklahoma City Barons</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>23</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>15</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>8</td><td>19</td><td>36</td><td>55</td></tr>
<tr><td>Gatineau Olympiques</td><td>19</td><td>11</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>66</td><td>60</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>22</td><td>11</td><td>7</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>42</td><td>38</td><td>66</td><td>119</td><td>185</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>27</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>19</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>8</td><td>24</td><td>46</td><td>70</td></tr>
<tr><td>Albany Devils</td><td>20</td><td>11</td><td>9</td><td>0</td><td>0</td><td>0</td><td>0</td><td>68</td><td>62</td><td>9</td><td>6</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>25</td><td>11</td><td>5</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>39</td><td>37</td><td>68</td><td>129</td><td>197</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>30</td><td>28</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>17</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>11</td><td>30</td><td>53</td><td>83</td></tr>
<tr><td>Connecticut Whale</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>16</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>7</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>9</td><td>13</td><td>24</td><td>37</td></tr>
<tr><td>Binghamton Senators</td><td>12</td><td>5</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>40</td><td>45</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>17</td><td>7</td><td>2</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>28</td><td>40</td><td>70</td><td>110</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>22</td><td>16</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>73</td><td>55</td><td>11</td><td>9</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>26</td><td>11</td><td>7</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>36</td><td>29</td><td>73</td><td>128</td><td>201</td></tr>
<tr><td>Peoria Rivermen</td><td>10</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>37</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>21</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>16</td><td>33</td><td>57</td><td>90</td></tr>
<tr><td>Norfolk Admirals</td><td>11</td><td>6</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>30</td><td>33</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>16</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>17</td><td>30</td><td>53</td><td>83</td></tr>
<tr><td>Chicago Wolves</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>16</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>7</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>9</td><td>10</td><td>19</td><td>29</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Laval Chiefs</td><td>LAV</td><td>2</td><td>3</td><td>2</td><td>0</td><td>114</td><td>37</td><td>28</td><td>43</td><td>6</td><td>132</td><td>40</td><td>26</td><td>80</td><td>12</td><td>1</td><td>8,33%</td><td>12</td><td>0</td><td>100,00%</td><td>0</td><td>51,32%</td><td>49,29%</td><td>43,33%</td><td>100</td><td>102</td><td>54</td><td>29</td><td>70</td><td>27</td><td>0</td><td>0</td></tr>
<tr><td>Rochester Americans</td><td>RCH</td><td>2</td><td>4</td><td>5</td><td>0</td><td>159</td><td>46</td><td>58</td><td>44</td><td>11</td><td>161</td><td>39</td><td>48</td><td>117</td><td>17</td><td>3</td><td>17,65%</td><td>22</td><td>7</td><td>68,18%</td><td>0</td><td>48,29%</td><td>50,54%</td><td>44,68%</td><td>127</td><td>121</td><td>71</td><td>40</td><td>81</td><td>34</td><td>0</td><td>0</td></tr>
<tr><td>Joliette Sportif</td><td>JOL</td><td>2</td><td>7</td><td>4</td><td>1</td><td>164</td><td>46</td><td>56</td><td>53</td><td>9</td><td>167</td><td>38</td><td>42</td><td>99</td><td>18</td><td>6</td><td>33,33%</td><td>20</td><td>2</td><td>90,00%</td><td>1</td><td>50,53%</td><td>51,91%</td><td>56,10%</td><td>123</td><td>124</td><td>66</td><td>38</td><td>85</td><td>33</td><td>0</td><td>0</td></tr>
<tr><td>Rockford IceHogs</td><td>RFD</td><td>31</td><td>19</td><td>18</td><td>3</td><td>742</td><td>243</td><td>207</td><td>270</td><td>22</td><td>722</td><td>217</td><td>172</td><td>508</td><td>73</td><td>11</td><td>15,07%</td><td>80</td><td>11</td><td>86,25%</td><td>2</td><td>52,00%</td><td>47,27%</td><td>43,92%</td><td>556</td><td>548</td><td>299</td><td>172</td><td>376</td><td>148</td><td>0</td><td>0</td></tr>
<tr><td>Lake Erie Monsters</td><td>LKE</td><td>11</td><td>11</td><td>9</td><td>2</td><td>300</td><td>107</td><td>90</td><td>93</td><td>10</td><td>307</td><td>91</td><td>85</td><td>199</td><td>33</td><td>4</td><td>12,12%</td><td>32</td><td>4</td><td>87,50%</td><td>0</td><td>51,69%</td><td>50,56%</td><td>59,12%</td><td>247</td><td>240</td><td>130</td><td>75</td><td>165</td><td>66</td><td>0</td><td>0</td></tr>
<tr><td>Oklahoma City Barons</td><td>OKC</td><td>9</td><td>8</td><td>1</td><td>1</td><td>265</td><td>82</td><td>89</td><td>88</td><td>6</td><td>216</td><td>66</td><td>56</td><td>137</td><td>28</td><td>6</td><td>21,43%</td><td>26</td><td>5</td><td>80,77%</td><td>0</td><td>45,88%</td><td>51,94%</td><td>50,88%</td><td>165</td><td>177</td><td>89</td><td>52</td><td>126</td><td>45</td><td>0</td><td>0</td></tr>
<tr><td>Gatineau Olympiques</td><td>GAT</td><td>30</td><td>17</td><td>17</td><td>2</td><td>614</td><td>211</td><td>199</td><td>185</td><td>19</td><td>668</td><td>169</td><td>132</td><td>387</td><td>68</td><td>13</td><td>19,12%</td><td>61</td><td>11</td><td>81,97%</td><td>1</td><td>50,34%</td><td>47,14%</td><td>50,00%</td><td>461</td><td>455</td><td>248</td><td>143</td><td>315</td><td>123</td><td>0</td><td>2</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>TRD</td><td>10</td><td>7</td><td>6</td><td>1</td><td>200</td><td>67</td><td>61</td><td>64</td><td>8</td><td>220</td><td>49</td><td>80</td><td>168</td><td>24</td><td>7</td><td>29,17%</td><td>36</td><td>8</td><td>77,78%</td><td>0</td><td>54,28%</td><td>47,01%</td><td>44,53%</td><td>164</td><td>169</td><td>94</td><td>53</td><td>116</td><td>46</td><td>0</td><td>0</td></tr>
<tr><td>Albany Devils</td><td>ALB</td><td>27</td><td>21</td><td>19</td><td>1</td><td>664</td><td>204</td><td>229</td><td>221</td><td>10</td><td>622</td><td>172</td><td>202</td><td>403</td><td>84</td><td>21</td><td>25,00%</td><td>80</td><td>22</td><td>72,50%</td><td>0</td><td>46,88%</td><td>47,97%</td><td>47,18%</td><td>490</td><td>468</td><td>266</td><td>155</td><td>318</td><td>134</td><td>0</td><td>0</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>BRI</td><td>11</td><td>12</td><td>7</td><td>0</td><td>223</td><td>69</td><td>76</td><td>65</td><td>13</td><td>277</td><td>61</td><td>80</td><td>141</td><td>27</td><td>11</td><td>40,74%</td><td>38</td><td>7</td><td>81,58%</td><td>1</td><td>54,21%</td><td>53,46%</td><td>55,80%</td><td>182</td><td>179</td><td>99</td><td>56</td><td>122</td><td>49</td><td>0</td><td>0</td></tr>
<tr><td>Connecticut Whale</td><td>CTW</td><td>6</td><td>4</td><td>3</td><td>0</td><td>173</td><td>61</td><td>51</td><td>45</td><td>16</td><td>170</td><td>54</td><td>44</td><td>109</td><td>19</td><td>5</td><td>26,32%</td><td>19</td><td>4</td><td>78,95%</td><td>0</td><td>52,28%</td><td>42,29%</td><td>46,67%</td><td>126</td><td>138</td><td>71</td><td>40</td><td>96</td><td>36</td><td>0</td><td>1</td></tr>
<tr><td>Binghamton Senators</td><td>BNG</td><td>20</td><td>6</td><td>11</td><td>3</td><td>431</td><td>132</td><td>138</td><td>125</td><td>36</td><td>384</td><td>109</td><td>94</td><td>269</td><td>56</td><td>8</td><td>14,29%</td><td>42</td><td>13</td><td>69,05%</td><td>0</td><td>43,26%</td><td>45,99%</td><td>44,50%</td><td>300</td><td>301</td><td>161</td><td>93</td><td>207</td><td>81</td><td>0</td><td>1</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>WBS</td><td>28</td><td>20</td><td>22</td><td>3</td><td>714</td><td>218</td><td>248</td><td>239</td><td>9</td><td>655</td><td>210</td><td>154</td><td>426</td><td>84</td><td>25</td><td>29,76%</td><td>67</td><td>12</td><td>82,09%</td><td>0</td><td>53,86%</td><td>54,09%</td><td>55,91%</td><td>508</td><td>545</td><td>291</td><td>166</td><td>378</td><td>145</td><td>0</td><td>0</td></tr>
<tr><td>Peoria Rivermen</td><td>PEO</td><td>12</td><td>10</td><td>11</td><td>0</td><td>314</td><td>96</td><td>101</td><td>114</td><td>3</td><td>323</td><td>93</td><td>74</td><td>198</td><td>28</td><td>3</td><td>10,71%</td><td>34</td><td>10</td><td>70,59%</td><td>0</td><td>53,74%</td><td>49,72%</td><td>51,79%</td><td>246</td><td>235</td><td>133</td><td>76</td><td>159</td><td>66</td><td>0</td><td>0</td></tr>
<tr><td>Norfolk Admirals</td><td>NOR</td><td>7</td><td>12</td><td>8</td><td>3</td><td>351</td><td>96</td><td>124</td><td>106</td><td>25</td><td>415</td><td>106</td><td>105</td><td>250</td><td>44</td><td>6</td><td>13,64%</td><td>46</td><td>12</td><td>73,91%</td><td>0</td><td>52,10%</td><td>53,07%</td><td>53,26%</td><td>288</td><td>273</td><td>152</td><td>87</td><td>184</td><td>75</td><td>0</td><td>0</td></tr>
<tr><td>Chicago Wolves</td><td>CHI</td><td>6</td><td>2</td><td>2</td><td>0</td><td>164</td><td>62</td><td>54</td><td>48</td><td>0</td><td>153</td><td>44</td><td>34</td><td>91</td><td>17</td><td>0</td><td>0,00%</td><td>17</td><td>2</td><td>88,24%</td><td>0</td><td>46,95%</td><td>47,83%</td><td>54,69%</td><td>114</td><td>124</td><td>62</td><td>37</td><td>86</td><td>31</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,15</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Bridgeport Sound Tigers</td><td>4,29</td></tr>
<tr><td>2</td><td>Gatineau Olympiques</td><td>3,47</td></tr>
<tr><td>3</td><td>Trois-Rivières Draveurs</td><td>3,43</td></tr>
<tr><td>4</td><td>Albany Devils</td><td>3,40</td></tr>
<tr><td>5</td><td>Binghamton Senators</td><td>3,33</td></tr>
<tr><td>6</td><td>Wilkes-Barre/Scranton Penguins</td><td>3,32</td></tr>
<tr><td>7</td><td>Peoria Rivermen</td><td>3,30</td></tr>
<tr><td>8</td><td>Lake Erie Monsters</td><td>3,30</td></tr>
<tr><td>9</td><td>Rockford IceHogs</td><td>3,09</td></tr>
<tr><td>10</td><td>Joliette Sportif</td><td>2,80</td></tr>
<tr><td>11</td><td>Norfolk Admirals</td><td>2,73</td></tr>
<tr><td>12</td><td>Oklahoma City Barons</td><td>2,71</td></tr>
<tr><td>13</td><td>Connecticut Whale</td><td>2,60</td></tr>
<tr><td>14</td><td>Rochester Americans</td><td>2,20</td></tr>
<tr><td>15</td><td>Chicago Wolves</td><td>2,00</td></tr>
<tr><td>16</td><td>Laval Chiefs</td><td>1,75</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,15</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wilkes-Barre/Scranton Penguins</td><td>2,50</td></tr>
<tr><td>2</td><td>Lake Erie Monsters</td><td>2,60</td></tr>
<tr><td>3</td><td>Rockford IceHogs</td><td>2,87</td></tr>
<tr><td>4</td><td>Norfolk Admirals</td><td>3,00</td></tr>
<tr><td>5</td><td>Albany Devils</td><td>3,10</td></tr>
<tr><td>6</td><td>Gatineau Olympiques</td><td>3,16</td></tr>
<tr><td>7</td><td>Connecticut Whale</td><td>3,20</td></tr>
<tr><td>8</td><td>Chicago Wolves</td><td>3,20</td></tr>
<tr><td>9</td><td>Oklahoma City Barons</td><td>3,29</td></tr>
<tr><td>10</td><td>Rochester Americans</td><td>3,40</td></tr>
<tr><td>11</td><td>Joliette Sportif</td><td>3,40</td></tr>
<tr><td>12</td><td>Laval Chiefs</td><td>3,50</td></tr>
<tr><td>13</td><td>Peoria Rivermen</td><td>3,70</td></tr>
<tr><td>14</td><td>Binghamton Senators</td><td>3,75</td></tr>
<tr><td>15</td><td>Trois-Rivières Draveurs</td><td>3,86</td></tr>
<tr><td>16</td><td>Bridgeport Sound Tigers</td><td>4,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Wilkes-Barre/Scranton Penguins</td><td>132,73%</td></tr>
<tr><td>2</td><td>Lake Erie Monsters</td><td>126,92%</td></tr>
<tr><td>3</td><td>Gatineau Olympiques</td><td>110,00%</td></tr>
<tr><td>4</td><td>Albany Devils</td><td>109,68%</td></tr>
<tr><td>5</td><td>Rockford IceHogs</td><td>107,58%</td></tr>
<tr><td>6</td><td>Bridgeport Sound Tigers</td><td>107,14%</td></tr>
<tr><td>7</td><td>Norfolk Admirals</td><td>90,91%</td></tr>
<tr><td>8</td><td>Peoria Rivermen</td><td>89,19%</td></tr>
<tr><td>9</td><td>Trois-Rivières Draveurs</td><td>88,89%</td></tr>
<tr><td>10</td><td>Binghamton Senators</td><td>88,89%</td></tr>
<tr><td>11</td><td>Oklahoma City Barons</td><td>82,61%</td></tr>
<tr><td>12</td><td>Joliette Sportif</td><td>82,35%</td></tr>
<tr><td>13</td><td>Connecticut Whale</td><td>81,25%</td></tr>
<tr><td>14</td><td>Rochester Americans</td><td>64,71%</td></tr>
<tr><td>15</td><td>Chicago Wolves</td><td>62,50%</td></tr>
<tr><td>16</td><td>Laval Chiefs</td><td>50,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 20,57%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Bridgeport Sound Tigers</td><td>40,74%</td></tr>
<tr><td>2</td><td>Joliette Sportif</td><td>33,33%</td></tr>
<tr><td>3</td><td>Wilkes-Barre/Scranton Penguins</td><td>29,76%</td></tr>
<tr><td>4</td><td>Trois-Rivières Draveurs</td><td>29,17%</td></tr>
<tr><td>5</td><td>Connecticut Whale</td><td>26,32%</td></tr>
<tr><td>6</td><td>Albany Devils</td><td>25,00%</td></tr>
<tr><td>7</td><td>Oklahoma City Barons</td><td>21,43%</td></tr>
<tr><td>8</td><td>Gatineau Olympiques</td><td>19,12%</td></tr>
<tr><td>9</td><td>Rochester Americans</td><td>17,65%</td></tr>
<tr><td>10</td><td>Rockford IceHogs</td><td>15,07%</td></tr>
<tr><td>11</td><td>Binghamton Senators</td><td>14,29%</td></tr>
<tr><td>12</td><td>Norfolk Admirals</td><td>13,64%</td></tr>
<tr><td>13</td><td>Lake Erie Monsters</td><td>12,12%</td></tr>
<tr><td>14</td><td>Peoria Rivermen</td><td>10,71%</td></tr>
<tr><td>15</td><td>Laval Chiefs</td><td>8,33%</td></tr>
<tr><td>16</td><td>Chicago Wolves</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 79,43%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>100,00%</td></tr>
<tr><td>2</td><td>Joliette Sportif</td><td>90,00%</td></tr>
<tr><td>3</td><td>Chicago Wolves</td><td>88,24%</td></tr>
<tr><td>4</td><td>Lake Erie Monsters</td><td>87,50%</td></tr>
<tr><td>5</td><td>Rockford IceHogs</td><td>86,25%</td></tr>
<tr><td>6</td><td>Wilkes-Barre/Scranton Penguins</td><td>82,09%</td></tr>
<tr><td>7</td><td>Gatineau Olympiques</td><td>81,97%</td></tr>
<tr><td>8</td><td>Bridgeport Sound Tigers</td><td>81,58%</td></tr>
<tr><td>9</td><td>Oklahoma City Barons</td><td>80,77%</td></tr>
<tr><td>10</td><td>Connecticut Whale</td><td>78,95%</td></tr>
<tr><td>11</td><td>Trois-Rivières Draveurs</td><td>77,78%</td></tr>
<tr><td>12</td><td>Norfolk Admirals</td><td>73,91%</td></tr>
<tr><td>13</td><td>Albany Devils</td><td>72,50%</td></tr>
<tr><td>14</td><td>Peoria Rivermen</td><td>70,59%</td></tr>
<tr><td>15</td><td>Binghamton Senators</td><td>69,05%</td></tr>
<tr><td>16</td><td>Rochester Americans</td><td>68,18%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Joliette Sportif</td><td>123,33%</td></tr>
<tr><td>2</td><td>Bridgeport Sound Tigers</td><td>122,32%</td></tr>
<tr><td>3</td><td>Wilkes-Barre/Scranton Penguins</td><td>111,85%</td></tr>
<tr><td>4</td><td>Laval Chiefs</td><td>108,33%</td></tr>
<tr><td>5</td><td>Trois-Rivières Draveurs</td><td>106,94%</td></tr>
<tr><td>6</td><td>Connecticut Whale</td><td>105,26%</td></tr>
<tr><td>7</td><td>Oklahoma City Barons</td><td>102,20%</td></tr>
<tr><td>8</td><td>Rockford IceHogs</td><td>101,32%</td></tr>
<tr><td>9</td><td>Gatineau Olympiques</td><td>101,08%</td></tr>
<tr><td>10</td><td>Lake Erie Monsters</td><td>99,62%</td></tr>
<tr><td>11</td><td>Albany Devils</td><td>97,50%</td></tr>
<tr><td>12</td><td>Chicago Wolves</td><td>88,24%</td></tr>
<tr><td>13</td><td>Norfolk Admirals</td><td>87,55%</td></tr>
<tr><td>14</td><td>Rochester Americans</td><td>85,83%</td></tr>
<tr><td>15</td><td>Binghamton Senators</td><td>83,33%</td></tr>
<tr><td>16</td><td>Peoria Rivermen</td><td>81,30%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,51</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Oklahoma City Barons</td><td>37,86</td></tr>
<tr><td>2</td><td>Binghamton Senators</td><td>35,92</td></tr>
<tr><td>3</td><td>Connecticut Whale</td><td>34,60</td></tr>
<tr><td>4</td><td>Albany Devils</td><td>33,20</td></tr>
<tr><td>5</td><td>Chicago Wolves</td><td>32,80</td></tr>
<tr><td>6</td><td>Joliette Sportif</td><td>32,80</td></tr>
<tr><td>7</td><td>Wilkes-Barre/Scranton Penguins</td><td>32,45</td></tr>
<tr><td>8</td><td>Gatineau Olympiques</td><td>32,32</td></tr>
<tr><td>9</td><td>Rockford IceHogs</td><td>32,26</td></tr>
<tr><td>10</td><td>Norfolk Admirals</td><td>31,91</td></tr>
<tr><td>11</td><td>Bridgeport Sound Tigers</td><td>31,86</td></tr>
<tr><td>12</td><td>Rochester Americans</td><td>31,80</td></tr>
<tr><td>13</td><td>Peoria Rivermen</td><td>31,40</td></tr>
<tr><td>14</td><td>Lake Erie Monsters</td><td>30,00</td></tr>
<tr><td>15</td><td>Trois-Rivières Draveurs</td><td>28,57</td></tr>
<tr><td>16</td><td>Laval Chiefs</td><td>28,50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32,51</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wilkes-Barre/Scranton Penguins</td><td>29,77</td></tr>
<tr><td>2</td><td>Chicago Wolves</td><td>30,60</td></tr>
<tr><td>3</td><td>Lake Erie Monsters</td><td>30,70</td></tr>
<tr><td>4</td><td>Oklahoma City Barons</td><td>30,86</td></tr>
<tr><td>5</td><td>Albany Devils</td><td>31,10</td></tr>
<tr><td>6</td><td>Rockford IceHogs</td><td>31,39</td></tr>
<tr><td>7</td><td>Trois-Rivières Draveurs</td><td>31,43</td></tr>
<tr><td>8</td><td>Binghamton Senators</td><td>32,00</td></tr>
<tr><td>9</td><td>Rochester Americans</td><td>32,20</td></tr>
<tr><td>10</td><td>Peoria Rivermen</td><td>32,30</td></tr>
<tr><td>11</td><td>Laval Chiefs</td><td>33,00</td></tr>
<tr><td>12</td><td>Joliette Sportif</td><td>33,40</td></tr>
<tr><td>13</td><td>Connecticut Whale</td><td>34,00</td></tr>
<tr><td>14</td><td>Gatineau Olympiques</td><td>35,16</td></tr>
<tr><td>15</td><td>Norfolk Admirals</td><td>37,73</td></tr>
<tr><td>16</td><td>Bridgeport Sound Tigers</td><td>39,57</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Oklahoma City Barons</td><td>122,69%</td></tr>
<tr><td>2</td><td>Binghamton Senators</td><td>112,24%</td></tr>
<tr><td>3</td><td>Wilkes-Barre/Scranton Penguins</td><td>109,01%</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>107,19%</td></tr>
<tr><td>5</td><td>Albany Devils</td><td>106,75%</td></tr>
<tr><td>6</td><td>Rockford IceHogs</td><td>102,77%</td></tr>
<tr><td>7</td><td>Connecticut Whale</td><td>101,76%</td></tr>
<tr><td>8</td><td>Rochester Americans</td><td>98,76%</td></tr>
<tr><td>9</td><td>Joliette Sportif</td><td>98,20%</td></tr>
<tr><td>10</td><td>Lake Erie Monsters</td><td>97,72%</td></tr>
<tr><td>11</td><td>Peoria Rivermen</td><td>97,21%</td></tr>
<tr><td>12</td><td>Gatineau Olympiques</td><td>91,92%</td></tr>
<tr><td>13</td><td>Trois-Rivières Draveurs</td><td>90,91%</td></tr>
<tr><td>14</td><td>Laval Chiefs</td><td>86,36%</td></tr>
<tr><td>15</td><td>Norfolk Admirals</td><td>84,58%</td></tr>
<tr><td>16</td><td>Bridgeport Sound Tigers</td><td>80,51%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8,30</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>6,50</td></tr>
<tr><td>2</td><td>Chicago Wolves</td><td>6,80</td></tr>
<tr><td>3</td><td>Gatineau Olympiques</td><td>6,95</td></tr>
<tr><td>4</td><td>Wilkes-Barre/Scranton Penguins</td><td>7,00</td></tr>
<tr><td>5</td><td>Peoria Rivermen</td><td>7,40</td></tr>
<tr><td>6</td><td>Rockford IceHogs</td><td>7,48</td></tr>
<tr><td>7</td><td>Binghamton Senators</td><td>7,83</td></tr>
<tr><td>8</td><td>Oklahoma City Barons</td><td>8,00</td></tr>
<tr><td>9</td><td>Joliette Sportif</td><td>8,40</td></tr>
<tr><td>10</td><td>Lake Erie Monsters</td><td>8,50</td></tr>
<tr><td>11</td><td>Connecticut Whale</td><td>8,80</td></tr>
<tr><td>12</td><td>Norfolk Admirals</td><td>9,55</td></tr>
<tr><td>13</td><td>Rochester Americans</td><td>9,60</td></tr>
<tr><td>14</td><td>Albany Devils</td><td>10,10</td></tr>
<tr><td>15</td><td>Trois-Rivières Draveurs</td><td>11,43</td></tr>
<tr><td>16</td><td>Bridgeport Sound Tigers</td><td>11,43</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 20,83</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Trois-Rivières Draveurs</td><td>24,00</td></tr>
<tr><td>2</td><td>Rochester Americans</td><td>23,40</td></tr>
<tr><td>3</td><td>Norfolk Admirals</td><td>22,73</td></tr>
<tr><td>4</td><td>Binghamton Senators</td><td>22,42</td></tr>
<tr><td>5</td><td>Rockford IceHogs</td><td>22,09</td></tr>
<tr><td>6</td><td>Connecticut Whale</td><td>21,80</td></tr>
<tr><td>7</td><td>Gatineau Olympiques</td><td>20,37</td></tr>
<tr><td>8</td><td>Albany Devils</td><td>20,15</td></tr>
<tr><td>9</td><td>Bridgeport Sound Tigers</td><td>20,14</td></tr>
<tr><td>10</td><td>Laval Chiefs</td><td>20,00</td></tr>
<tr><td>11</td><td>Lake Erie Monsters</td><td>19,90</td></tr>
<tr><td>12</td><td>Peoria Rivermen</td><td>19,80</td></tr>
<tr><td>13</td><td>Joliette Sportif</td><td>19,80</td></tr>
<tr><td>14</td><td>Oklahoma City Barons</td><td>19,57</td></tr>
<tr><td>15</td><td>Wilkes-Barre/Scranton Penguins</td><td>19,36</td></tr>
<tr><td>16</td><td>Chicago Wolves</td><td>18,20</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Wilkes-Barre/Scranton Penguins</td><td>54,33%</td></tr>
<tr><td>2</td><td>Bridgeport Sound Tigers</td><td>54,24%</td></tr>
<tr><td>3</td><td>Norfolk Admirals</td><td>52,69%</td></tr>
<tr><td>4</td><td>Lake Erie Monsters</td><td>52,58%</td></tr>
<tr><td>5</td><td>Joliette Sportif</td><td>52,10%</td></tr>
<tr><td>6</td><td>Peoria Rivermen</td><td>51,71%</td></tr>
<tr><td>7</td><td>Trois-Rivières Draveurs</td><td>49,60%</td></tr>
<tr><td>8</td><td>Oklahoma City Barons</td><td>49,39%</td></tr>
<tr><td>9</td><td>Laval Chiefs</td><td>49,15%</td></tr>
<tr><td>10</td><td>Gatineau Olympiques</td><td>49,02%</td></tr>
<tr><td>11</td><td>Rockford IceHogs</td><td>48,57%</td></tr>
<tr><td>12</td><td>Chicago Wolves</td><td>48,54%</td></tr>
<tr><td>13</td><td>Rochester Americans</td><td>48,45%</td></tr>
<tr><td>14</td><td>Albany Devils</td><td>47,39%</td></tr>
<tr><td>15</td><td>Connecticut Whale</td><td>47,13%</td></tr>
<tr><td>16</td><td>Binghamton Senators</td><td>44,66%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
