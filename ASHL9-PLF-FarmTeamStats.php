<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Team Stats</title>
<script src="ASHL9-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - ASHL9-STHS.db - ASHL9-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL9-PLF.css" rel="stylesheet" type="text/css" />
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
<tr><td>Rochester Americans</td><td>14</td><td>7</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>50</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>14</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>26</td><td>36</td><td>45</td><td>82</td><td>127</td></tr>
<tr><td>Joliette Sportif</td><td>12</td><td>6</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>48</td><td>47</td><td>6</td><td>1</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>29</td><td>6</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>18</td><td>48</td><td>84</td><td>132</td></tr>
<tr><td>Charlotte Checkers</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>24</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>13</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>11</td><td>28</td><td>52</td><td>80</td></tr>
<tr><td>Rockford IceHogs</td><td>20</td><td>11</td><td>9</td><td>0</td><td>0</td><td>0</td><td>0</td><td>65</td><td>60</td><td>10</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>35</td><td>37</td><td>10</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>30</td><td>23</td><td>65</td><td>123</td><td>188</td></tr>
<tr><td>Lake Erie Monsters</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>24</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>8</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>16</td><td>21</td><td>36</td><td>57</td></tr>
<tr><td>Las Vegas Gamblers</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>19</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>11</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>8</td><td>15</td><td>27</td><td>42</td></tr>
<tr><td>Oklahoma City Barons</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>33</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>18</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>15</td><td>28</td><td>51</td><td>79</td></tr>
<tr><td>San Antonio Rampage</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>17</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>10</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>7</td><td>20</td><td>37</td><td>57</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>11</td><td>5</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>32</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>17</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>15</td><td>24</td><td>43</td><td>67</td></tr>
<tr><td>Connecticut Whale</td><td>22</td><td>15</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>78</td><td>60</td><td>10</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>24</td><td>12</td><td>5</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>36</td><td>78</td><td>141</td><td>219</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>19</td><td>9</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>68</td><td>70</td><td>11</td><td>6</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>46</td><td>39</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>31</td><td>68</td><td>121</td><td>189</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>21</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>8</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>13</td><td>14</td><td>28</td><td>42</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>13</td><td>7</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>42</td><td>42</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>16</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>26</td><td>42</td><td>79</td><td>121</td></tr>
<tr><td>Norfolk Admirals</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>28</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>12</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>16</td><td>24</td><td>44</td><td>68</td></tr>
<tr><td>Chicago Wolves</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>22</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>7</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>15</td><td>19</td><td>33</td><td>52</td></tr>
<tr><td>Paradise Dark Angels</td><td>28</td><td>16</td><td>12</td><td>0</td><td>0</td><td>0</td><td>0</td><td>98</td><td>88</td><td>16</td><td>12</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>59</td><td>41</td><td>12</td><td>4</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>39</td><td>47</td><td>98</td><td>183</td><td>281</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Rochester Americans</td><td>RCH</td><td>18</td><td>16</td><td>7</td><td>4</td><td>501</td><td>177</td><td>138</td><td>149</td><td>37</td><td>487</td><td>153</td><td>94</td><td>249</td><td>61</td><td>12</td><td>19,67%</td><td>40</td><td>6</td><td>85,00%</td><td>1</td><td>45,73%</td><td>49,82%</td><td>47,47%</td><td>360</td><td>335</td><td>186</td><td>108</td><td>230</td><td>93</td><td>1</td><td>0</td></tr>
<tr><td>Joliette Sportif</td><td>JOL</td><td>21</td><td>10</td><td>17</td><td>0</td><td>443</td><td>149</td><td>125</td><td>140</td><td>29</td><td>451</td><td>121</td><td>137</td><td>237</td><td>50</td><td>8</td><td>16,00%</td><td>52</td><td>11</td><td>78,85%</td><td>1</td><td>49,69%</td><td>52,89%</td><td>52,07%</td><td>295</td><td>301</td><td>166</td><td>95</td><td>206</td><td>82</td><td>0</td><td>0</td></tr>
<tr><td>Charlotte Checkers</td><td>CHA</td><td>7</td><td>14</td><td>7</td><td>0</td><td>229</td><td>63</td><td>85</td><td>63</td><td>18</td><td>289</td><td>72</td><td>76</td><td>214</td><td>21</td><td>3</td><td>14,29%</td><td>34</td><td>6</td><td>82,35%</td><td>1</td><td>49,49%</td><td>52,01%</td><td>52,14%</td><td>182</td><td>182</td><td>97</td><td>55</td><td>126</td><td>48</td><td>0</td><td>0</td></tr>
<tr><td>Rockford IceHogs</td><td>RFD</td><td>23</td><td>13</td><td>25</td><td>4</td><td>674</td><td>194</td><td>222</td><td>219</td><td>39</td><td>730</td><td>202</td><td>183</td><td>408</td><td>84</td><td>18</td><td>21,43%</td><td>81</td><td>13</td><td>83,95%</td><td>1</td><td>48,73%</td><td>53,65%</td><td>53,91%</td><td>502</td><td>504</td><td>275</td><td>160</td><td>347</td><td>138</td><td>0</td><td>1</td></tr>
<tr><td>Lake Erie Monsters</td><td>LKE</td><td>10</td><td>5</td><td>6</td><td>0</td><td>208</td><td>77</td><td>61</td><td>70</td><td>0</td><td>272</td><td>65</td><td>62</td><td>123</td><td>22</td><td>6</td><td>27,27%</td><td>29</td><td>6</td><td>79,31%</td><td>0</td><td>51,11%</td><td>56,19%</td><td>56,36%</td><td>177</td><td>155</td><td>88</td><td>53</td><td>104</td><td>43</td><td>0</td><td>0</td></tr>
<tr><td>Las Vegas Gamblers</td><td>LVG</td><td>4</td><td>7</td><td>4</td><td>0</td><td>174</td><td>56</td><td>55</td><td>63</td><td>0</td><td>220</td><td>47</td><td>62</td><td>118</td><td>22</td><td>4</td><td>18,18%</td><td>29</td><td>2</td><td>93,10%</td><td>1</td><td>54,32%</td><td>51,90%</td><td>48,48%</td><td>147</td><td>135</td><td>78</td><td>48</td><td>91</td><td>37</td><td>0</td><td>0</td></tr>
<tr><td>Oklahoma City Barons</td><td>OKC</td><td>16</td><td>4</td><td>8</td><td>0</td><td>225</td><td>78</td><td>87</td><td>60</td><td>0</td><td>211</td><td>77</td><td>62</td><td>126</td><td>19</td><td>5</td><td>26,32%</td><td>24</td><td>7</td><td>70,83%</td><td>1</td><td>50,90%</td><td>50,43%</td><td>44,72%</td><td>146</td><td>136</td><td>78</td><td>45</td><td>93</td><td>38</td><td>0</td><td>0</td></tr>
<tr><td>San Antonio Rampage</td><td>SAR</td><td>8</td><td>7</td><td>5</td><td>0</td><td>188</td><td>61</td><td>69</td><td>57</td><td>1</td><td>185</td><td>53</td><td>58</td><td>123</td><td>27</td><td>6</td><td>22,22%</td><td>27</td><td>5</td><td>81,48%</td><td>0</td><td>45,07%</td><td>50,23%</td><td>58,95%</td><td>142</td><td>143</td><td>80</td><td>44</td><td>98</td><td>42</td><td>0</td><td>0</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>TRD</td><td>8</td><td>6</td><td>8</td><td>2</td><td>358</td><td>107</td><td>124</td><td>120</td><td>7</td><td>325</td><td>100</td><td>88</td><td>203</td><td>52</td><td>6</td><td>11,54%</td><td>40</td><td>7</td><td>82,50%</td><td>0</td><td>51,43%</td><td>53,96%</td><td>43,27%</td><td>254</td><td>265</td><td>147</td><td>83</td><td>182</td><td>72</td><td>0</td><td>1</td></tr>
<tr><td>Connecticut Whale</td><td>CTW</td><td>32</td><td>25</td><td>21</td><td>0</td><td>735</td><td>240</td><td>229</td><td>258</td><td>8</td><td>769</td><td>227</td><td>170</td><td>444</td><td>72</td><td>16</td><td>22,22%</td><td>77</td><td>9</td><td>88,31%</td><td>1</td><td>51,21%</td><td>50,74%</td><td>48,48%</td><td>530</td><td>523</td><td>290</td><td>167</td><td>361</td><td>143</td><td>1</td><td>1</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>WBS</td><td>23</td><td>26</td><td>19</td><td>0</td><td>699</td><td>229</td><td>245</td><td>225</td><td>0</td><td>617</td><td>206</td><td>164</td><td>383</td><td>61</td><td>11</td><td>18,03%</td><td>73</td><td>21</td><td>71,23%</td><td>1</td><td>51,54%</td><td>53,03%</td><td>50,64%</td><td>441</td><td>454</td><td>246</td><td>137</td><td>314</td><td>122</td><td>0</td><td>1</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>CHI</td><td>7</td><td>3</td><td>4</td><td>0</td><td>164</td><td>66</td><td>47</td><td>51</td><td>0</td><td>180</td><td>41</td><td>34</td><td>107</td><td>16</td><td>3</td><td>18,75%</td><td>16</td><td>5</td><td>68,75%</td><td>0</td><td>46,00%</td><td>49,75%</td><td>56,79%</td><td>115</td><td>122</td><td>63</td><td>37</td><td>84</td><td>32</td><td>0</td><td>1</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>RNO</td><td>14</td><td>12</td><td>15</td><td>1</td><td>457</td><td>189</td><td>117</td><td>144</td><td>7</td><td>447</td><td>128</td><td>115</td><td>254</td><td>56</td><td>7</td><td>12,50%</td><td>52</td><td>10</td><td>80,77%</td><td>0</td><td>48,93%</td><td>49,23%</td><td>50,22%</td><td>309</td><td>307</td><td>173</td><td>101</td><td>206</td><td>86</td><td>1</td><td>0</td></tr>
<tr><td>Norfolk Admirals</td><td>NOR</td><td>10</td><td>8</td><td>6</td><td>0</td><td>208</td><td>82</td><td>55</td><td>71</td><td>0</td><td>267</td><td>74</td><td>64</td><td>146</td><td>21</td><td>8</td><td>38,10%</td><td>29</td><td>6</td><td>79,31%</td><td>0</td><td>46,98%</td><td>44,84%</td><td>52,10%</td><td>168</td><td>161</td><td>91</td><td>52</td><td>110</td><td>45</td><td>0</td><td>0</td></tr>
<tr><td>Chicago Wolves</td><td>CHI</td><td>6</td><td>6</td><td>7</td><td>0</td><td>203</td><td>76</td><td>70</td><td>57</td><td>0</td><td>221</td><td>59</td><td>52</td><td>150</td><td>24</td><td>6</td><td>25,00%</td><td>23</td><td>6</td><td>73,91%</td><td>0</td><td>43,09%</td><td>46,12%</td><td>42,61%</td><td>170</td><td>160</td><td>90</td><td>52</td><td>108</td><td>44</td><td>0</td><td>1</td></tr>
<tr><td>Paradise Dark Angels</td><td>PAR</td><td>42</td><td>32</td><td>21</td><td>3</td><td>1098</td><td>341</td><td>365</td><td>349</td><td>43</td><td>893</td><td>256</td><td>211</td><td>605</td><td>113</td><td>21</td><td>18,58%</td><td>95</td><td>20</td><td>78,95%</td><td>1</td><td>46,88%</td><td>49,23%</td><td>48,18%</td><td>661</td><td>717</td><td>374</td><td>209</td><td>495</td><td>191</td><td>1</td><td>1</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,35</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Oklahoma City Barons</td><td>4,67</td></tr>
<tr><td>2</td><td>Joliette Sportif</td><td>4,00</td></tr>
<tr><td>3</td><td>Charlotte Checkers</td><td>4,00</td></tr>
<tr><td>4</td><td>Wilkes-Barre/Scranton Penguins</td><td>3,58</td></tr>
<tr><td>5</td><td>Connecticut Whale</td><td>3,55</td></tr>
<tr><td>6</td><td>Paradise Dark Angels</td><td>3,50</td></tr>
<tr><td>7</td><td>Norfolk Admirals</td><td>3,43</td></tr>
<tr><td>8</td><td>San Antonio Rampage</td><td>3,33</td></tr>
<tr><td>9</td><td>Rockford IceHogs</td><td>3,25</td></tr>
<tr><td>10</td><td>Rouyn-Noranda Huskies</td><td>3,23</td></tr>
<tr><td>11</td><td>Rochester Americans</td><td>3,21</td></tr>
<tr><td>12</td><td>Lake Erie Monsters</td><td>3,00</td></tr>
<tr><td>13</td><td>Chicoutimi Saguenéens</td><td>2,80</td></tr>
<tr><td>14</td><td>Chicago Wolves</td><td>2,71</td></tr>
<tr><td>15</td><td>Las Vegas Gamblers</td><td>2,50</td></tr>
<tr><td>16</td><td>Trois-Rivières Draveurs</td><td>2,18</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3,35</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Connecticut Whale</td><td>2,73</td></tr>
<tr><td>2</td><td>San Antonio Rampage</td><td>2,83</td></tr>
<tr><td>3</td><td>Trois-Rivières Draveurs</td><td>2,91</td></tr>
<tr><td>4</td><td>Rockford IceHogs</td><td>3,00</td></tr>
<tr><td>5</td><td>Chicago Wolves</td><td>3,14</td></tr>
<tr><td>6</td><td>Paradise Dark Angels</td><td>3,14</td></tr>
<tr><td>7</td><td>Las Vegas Gamblers</td><td>3,17</td></tr>
<tr><td>8</td><td>Rouyn-Noranda Huskies</td><td>3,23</td></tr>
<tr><td>9</td><td>Charlotte Checkers</td><td>3,43</td></tr>
<tr><td>10</td><td>Lake Erie Monsters</td><td>3,43</td></tr>
<tr><td>11</td><td>Rochester Americans</td><td>3,57</td></tr>
<tr><td>12</td><td>Wilkes-Barre/Scranton Penguins</td><td>3,68</td></tr>
<tr><td>13</td><td>Joliette Sportif</td><td>3,92</td></tr>
<tr><td>14</td><td>Norfolk Admirals</td><td>4,00</td></tr>
<tr><td>15</td><td>Chicoutimi Saguenéens</td><td>4,20</td></tr>
<tr><td>16</td><td>Oklahoma City Barons</td><td>5,50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Connecticut Whale</td><td>130,00%</td></tr>
<tr><td>2</td><td>San Antonio Rampage</td><td>117,65%</td></tr>
<tr><td>3</td><td>Charlotte Checkers</td><td>116,67%</td></tr>
<tr><td>4</td><td>Paradise Dark Angels</td><td>111,36%</td></tr>
<tr><td>5</td><td>Rockford IceHogs</td><td>108,33%</td></tr>
<tr><td>6</td><td>Joliette Sportif</td><td>102,13%</td></tr>
<tr><td>7</td><td>Rouyn-Noranda Huskies</td><td>100,00%</td></tr>
<tr><td>8</td><td>Wilkes-Barre/Scranton Penguins</td><td>97,14%</td></tr>
<tr><td>9</td><td>Rochester Americans</td><td>90,00%</td></tr>
<tr><td>10</td><td>Lake Erie Monsters</td><td>87,50%</td></tr>
<tr><td>11</td><td>Chicago Wolves</td><td>86,36%</td></tr>
<tr><td>12</td><td>Norfolk Admirals</td><td>85,71%</td></tr>
<tr><td>13</td><td>Oklahoma City Barons</td><td>84,85%</td></tr>
<tr><td>14</td><td>Las Vegas Gamblers</td><td>78,95%</td></tr>
<tr><td>15</td><td>Trois-Rivières Draveurs</td><td>75,00%</td></tr>
<tr><td>16</td><td>Chicoutimi Saguenéens</td><td>66,67%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,42%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Norfolk Admirals</td><td>38,10%</td></tr>
<tr><td>2</td><td>Lake Erie Monsters</td><td>27,27%</td></tr>
<tr><td>3</td><td>Oklahoma City Barons</td><td>26,32%</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>25,00%</td></tr>
<tr><td>5</td><td>Connecticut Whale</td><td>22,22%</td></tr>
<tr><td>6</td><td>San Antonio Rampage</td><td>22,22%</td></tr>
<tr><td>7</td><td>Rockford IceHogs</td><td>21,43%</td></tr>
<tr><td>8</td><td>Rochester Americans</td><td>19,67%</td></tr>
<tr><td>9</td><td>Chicoutimi Saguenéens</td><td>18,75%</td></tr>
<tr><td>10</td><td>Paradise Dark Angels</td><td>18,58%</td></tr>
<tr><td>11</td><td>Las Vegas Gamblers</td><td>18,18%</td></tr>
<tr><td>12</td><td>Wilkes-Barre/Scranton Penguins</td><td>18,03%</td></tr>
<tr><td>13</td><td>Joliette Sportif</td><td>16,00%</td></tr>
<tr><td>14</td><td>Charlotte Checkers</td><td>14,29%</td></tr>
<tr><td>15</td><td>Rouyn-Noranda Huskies</td><td>12,50%</td></tr>
<tr><td>16</td><td>Trois-Rivières Draveurs</td><td>11,54%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,58%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Las Vegas Gamblers</td><td>93,10%</td></tr>
<tr><td>2</td><td>Connecticut Whale</td><td>88,31%</td></tr>
<tr><td>3</td><td>Rochester Americans</td><td>85,00%</td></tr>
<tr><td>4</td><td>Rockford IceHogs</td><td>83,95%</td></tr>
<tr><td>5</td><td>Trois-Rivières Draveurs</td><td>82,50%</td></tr>
<tr><td>6</td><td>Charlotte Checkers</td><td>82,35%</td></tr>
<tr><td>7</td><td>San Antonio Rampage</td><td>81,48%</td></tr>
<tr><td>8</td><td>Rouyn-Noranda Huskies</td><td>80,77%</td></tr>
<tr><td>9</td><td>Norfolk Admirals</td><td>79,31%</td></tr>
<tr><td>10</td><td>Lake Erie Monsters</td><td>79,31%</td></tr>
<tr><td>11</td><td>Paradise Dark Angels</td><td>78,95%</td></tr>
<tr><td>12</td><td>Joliette Sportif</td><td>78,85%</td></tr>
<tr><td>13</td><td>Chicago Wolves</td><td>73,91%</td></tr>
<tr><td>14</td><td>Wilkes-Barre/Scranton Penguins</td><td>71,23%</td></tr>
<tr><td>15</td><td>Oklahoma City Barons</td><td>70,83%</td></tr>
<tr><td>16</td><td>Chicoutimi Saguenéens</td><td>68,75%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Norfolk Admirals</td><td>117,41%</td></tr>
<tr><td>2</td><td>Las Vegas Gamblers</td><td>111,29%</td></tr>
<tr><td>3</td><td>Connecticut Whale</td><td>110,53%</td></tr>
<tr><td>4</td><td>Lake Erie Monsters</td><td>106,58%</td></tr>
<tr><td>5</td><td>Rockford IceHogs</td><td>105,38%</td></tr>
<tr><td>6</td><td>Rochester Americans</td><td>104,67%</td></tr>
<tr><td>7</td><td>San Antonio Rampage</td><td>103,70%</td></tr>
<tr><td>8</td><td>Chicago Wolves</td><td>98,91%</td></tr>
<tr><td>9</td><td>Paradise Dark Angels</td><td>97,53%</td></tr>
<tr><td>10</td><td>Oklahoma City Barons</td><td>97,15%</td></tr>
<tr><td>11</td><td>Charlotte Checkers</td><td>96,64%</td></tr>
<tr><td>12</td><td>Joliette Sportif</td><td>94,85%</td></tr>
<tr><td>13</td><td>Trois-Rivières Draveurs</td><td>94,04%</td></tr>
<tr><td>14</td><td>Rouyn-Noranda Huskies</td><td>93,27%</td></tr>
<tr><td>15</td><td>Wilkes-Barre/Scranton Penguins</td><td>89,27%</td></tr>
<tr><td>16</td><td>Chicoutimi Saguenéens</td><td>87,50%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 34,55</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Paradise Dark Angels</td><td>39,21</td></tr>
<tr><td>2</td><td>Oklahoma City Barons</td><td>37,50</td></tr>
<tr><td>3</td><td>Joliette Sportif</td><td>36,92</td></tr>
<tr><td>4</td><td>Wilkes-Barre/Scranton Penguins</td><td>36,79</td></tr>
<tr><td>5</td><td>Rochester Americans</td><td>35,79</td></tr>
<tr><td>6</td><td>Rouyn-Noranda Huskies</td><td>35,15</td></tr>
<tr><td>7</td><td>Rockford IceHogs</td><td>33,70</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>33,41</td></tr>
<tr><td>9</td><td>Chicoutimi Saguenéens</td><td>32,80</td></tr>
<tr><td>10</td><td>Charlotte Checkers</td><td>32,71</td></tr>
<tr><td>11</td><td>Trois-Rivières Draveurs</td><td>32,55</td></tr>
<tr><td>12</td><td>San Antonio Rampage</td><td>31,33</td></tr>
<tr><td>13</td><td>Norfolk Admirals</td><td>29,71</td></tr>
<tr><td>14</td><td>Lake Erie Monsters</td><td>29,71</td></tr>
<tr><td>15</td><td>Chicago Wolves</td><td>29,00</td></tr>
<tr><td>16</td><td>Las Vegas Gamblers</td><td>29,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 34,55</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Trois-Rivières Draveurs</td><td>29,55</td></tr>
<tr><td>2</td><td>San Antonio Rampage</td><td>30,83</td></tr>
<tr><td>3</td><td>Chicago Wolves</td><td>31,57</td></tr>
<tr><td>4</td><td>Paradise Dark Angels</td><td>31,89</td></tr>
<tr><td>5</td><td>Wilkes-Barre/Scranton Penguins</td><td>32,47</td></tr>
<tr><td>6</td><td>Rouyn-Noranda Huskies</td><td>34,38</td></tr>
<tr><td>7</td><td>Rochester Americans</td><td>34,79</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>34,95</td></tr>
<tr><td>9</td><td>Oklahoma City Barons</td><td>35,17</td></tr>
<tr><td>10</td><td>Chicoutimi Saguenéens</td><td>36,00</td></tr>
<tr><td>11</td><td>Rockford IceHogs</td><td>36,50</td></tr>
<tr><td>12</td><td>Las Vegas Gamblers</td><td>36,67</td></tr>
<tr><td>13</td><td>Joliette Sportif</td><td>37,58</td></tr>
<tr><td>14</td><td>Norfolk Admirals</td><td>38,14</td></tr>
<tr><td>15</td><td>Lake Erie Monsters</td><td>38,86</td></tr>
<tr><td>16</td><td>Charlotte Checkers</td><td>41,29</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Paradise Dark Angels</td><td>122,96%</td></tr>
<tr><td>2</td><td>Wilkes-Barre/Scranton Penguins</td><td>113,29%</td></tr>
<tr><td>3</td><td>Trois-Rivières Draveurs</td><td>110,15%</td></tr>
<tr><td>4</td><td>Oklahoma City Barons</td><td>106,64%</td></tr>
<tr><td>5</td><td>Rochester Americans</td><td>102,87%</td></tr>
<tr><td>6</td><td>Rouyn-Noranda Huskies</td><td>102,24%</td></tr>
<tr><td>7</td><td>San Antonio Rampage</td><td>101,62%</td></tr>
<tr><td>8</td><td>Joliette Sportif</td><td>98,23%</td></tr>
<tr><td>9</td><td>Connecticut Whale</td><td>95,58%</td></tr>
<tr><td>10</td><td>Rockford IceHogs</td><td>92,33%</td></tr>
<tr><td>11</td><td>Chicago Wolves</td><td>91,86%</td></tr>
<tr><td>12</td><td>Chicoutimi Saguenéens</td><td>91,11%</td></tr>
<tr><td>13</td><td>Charlotte Checkers</td><td>79,24%</td></tr>
<tr><td>14</td><td>Las Vegas Gamblers</td><td>79,09%</td></tr>
<tr><td>15</td><td>Norfolk Admirals</td><td>77,90%</td></tr>
<tr><td>16</td><td>Lake Erie Monsters</td><td>76,47%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8,59</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Rochester Americans</td><td>6,71</td></tr>
<tr><td>2</td><td>Chicoutimi Saguenéens</td><td>6,80</td></tr>
<tr><td>3</td><td>Chicago Wolves</td><td>7,43</td></tr>
<tr><td>4</td><td>Paradise Dark Angels</td><td>7,54</td></tr>
<tr><td>5</td><td>Connecticut Whale</td><td>7,73</td></tr>
<tr><td>6</td><td>Trois-Rivières Draveurs</td><td>8,00</td></tr>
<tr><td>7</td><td>Wilkes-Barre/Scranton Penguins</td><td>8,63</td></tr>
<tr><td>8</td><td>Rouyn-Noranda Huskies</td><td>8,85</td></tr>
<tr><td>9</td><td>Lake Erie Monsters</td><td>8,86</td></tr>
<tr><td>10</td><td>Norfolk Admirals</td><td>9,14</td></tr>
<tr><td>11</td><td>Rockford IceHogs</td><td>9,15</td></tr>
<tr><td>12</td><td>San Antonio Rampage</td><td>9,67</td></tr>
<tr><td>13</td><td>Las Vegas Gamblers</td><td>10,33</td></tr>
<tr><td>14</td><td>Oklahoma City Barons</td><td>10,33</td></tr>
<tr><td>15</td><td>Charlotte Checkers</td><td>10,86</td></tr>
<tr><td>16</td><td>Joliette Sportif</td><td>11,42</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 20,47</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Charlotte Checkers</td><td>30,57</td></tr>
<tr><td>2</td><td>Paradise Dark Angels</td><td>21,61</td></tr>
<tr><td>3</td><td>Chicago Wolves</td><td>21,43</td></tr>
<tr><td>4</td><td>Chicoutimi Saguenéens</td><td>21,40</td></tr>
<tr><td>5</td><td>Oklahoma City Barons</td><td>21,00</td></tr>
<tr><td>6</td><td>Norfolk Admirals</td><td>20,86</td></tr>
<tr><td>7</td><td>San Antonio Rampage</td><td>20,50</td></tr>
<tr><td>8</td><td>Rockford IceHogs</td><td>20,40</td></tr>
<tr><td>9</td><td>Connecticut Whale</td><td>20,18</td></tr>
<tr><td>10</td><td>Wilkes-Barre/Scranton Penguins</td><td>20,16</td></tr>
<tr><td>11</td><td>Joliette Sportif</td><td>19,75</td></tr>
<tr><td>12</td><td>Las Vegas Gamblers</td><td>19,67</td></tr>
<tr><td>13</td><td>Rouyn-Noranda Huskies</td><td>19,54</td></tr>
<tr><td>14</td><td>Trois-Rivières Draveurs</td><td>18,45</td></tr>
<tr><td>15</td><td>Rochester Americans</td><td>17,79</td></tr>
<tr><td>16</td><td>Lake Erie Monsters</td><td>17,57</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Lake Erie Monsters</td><td>53,76%</td></tr>
<tr><td>2</td><td>Las Vegas Gamblers</td><td>52,36%</td></tr>
<tr><td>3</td><td>Wilkes-Barre/Scranton Penguins</td><td>52,01%</td></tr>
<tr><td>4</td><td>Rockford IceHogs</td><td>51,59%</td></tr>
<tr><td>5</td><td>Joliette Sportif</td><td>51,44%</td></tr>
<tr><td>6</td><td>Trois-Rivières Draveurs</td><td>51,08%</td></tr>
<tr><td>7</td><td>Charlotte Checkers</td><td>50,95%</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>50,54%</td></tr>
<tr><td>9</td><td>San Antonio Rampage</td><td>49,71%</td></tr>
<tr><td>10</td><td>Oklahoma City Barons</td><td>49,40%</td></tr>
<tr><td>11</td><td>Chicoutimi Saguenéens</td><td>49,38%</td></tr>
<tr><td>12</td><td>Rouyn-Noranda Huskies</td><td>49,28%</td></tr>
<tr><td>13</td><td>Paradise Dark Angels</td><td>48,19%</td></tr>
<tr><td>14</td><td>Rochester Americans</td><td>47,70%</td></tr>
<tr><td>15</td><td>Norfolk Admirals</td><td>47,19%</td></tr>
<tr><td>16</td><td>Chicago Wolves</td><td>44,22%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
