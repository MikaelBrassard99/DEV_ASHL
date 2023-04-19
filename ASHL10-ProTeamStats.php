<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Stats</title>
<script src="ASHL10.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.3.3 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL10.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL10-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL10-STHSCareerStat.db";
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
<tr><td>Anaheim Ducks</td><td>20</td><td>8</td><td>9</td><td>0</td><td>3</td><td>0</td><td>0</td><td>58</td><td>64</td><td>11</td><td>6</td><td>3</td><td>0</td><td>2</td><td>0</td><td>0</td><td>32</td><td>29</td><td>9</td><td>2</td><td>6</td><td>0</td><td>1</td><td>0</td><td>0</td><td>26</td><td>35</td><td>58</td><td>103</td><td>161</td></tr>
<tr><td>Arizona Coyotes</td><td>20</td><td>7</td><td>9</td><td>1</td><td>1</td><td>1</td><td>1</td><td>63</td><td>70</td><td>11</td><td>2</td><td>6</td><td>1</td><td>0</td><td>1</td><td>1</td><td>30</td><td>39</td><td>9</td><td>5</td><td>3</td><td>0</td><td>1</td><td>0</td><td>0</td><td>33</td><td>31</td><td>63</td><td>113</td><td>176</td></tr>
<tr><td>Boston Bruins</td><td>20</td><td>6</td><td>9</td><td>1</td><td>1</td><td>2</td><td>1</td><td>60</td><td>65</td><td>9</td><td>3</td><td>2</td><td>1</td><td>0</td><td>2</td><td>1</td><td>33</td><td>29</td><td>11</td><td>3</td><td>7</td><td>0</td><td>1</td><td>0</td><td>0</td><td>27</td><td>36</td><td>60</td><td>106</td><td>166</td></tr>
<tr><td>Buffalo Sabres</td><td>20</td><td>9</td><td>8</td><td>1</td><td>1</td><td>0</td><td>1</td><td>65</td><td>58</td><td>9</td><td>4</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>37</td><td>30</td><td>11</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>1</td><td>28</td><td>28</td><td>65</td><td>114</td><td>179</td></tr>
<tr><td>Calgary Flames</td><td>20</td><td>7</td><td>10</td><td>2</td><td>0</td><td>0</td><td>1</td><td>47</td><td>55</td><td>9</td><td>2</td><td>6</td><td>1</td><td>0</td><td>0</td><td>0</td><td>12</td><td>23</td><td>11</td><td>5</td><td>4</td><td>1</td><td>0</td><td>0</td><td>1</td><td>35</td><td>32</td><td>47</td><td>79</td><td>126</td></tr>
<tr><td>Carolina Hurricanes</td><td>20</td><td>6</td><td>9</td><td>2</td><td>0</td><td>1</td><td>2</td><td>62</td><td>69</td><td>11</td><td>4</td><td>6</td><td>1</td><td>0</td><td>0</td><td>0</td><td>33</td><td>38</td><td>9</td><td>2</td><td>3</td><td>1</td><td>0</td><td>1</td><td>2</td><td>29</td><td>31</td><td>62</td><td>117</td><td>179</td></tr>
<tr><td>Chicago Blackhawks</td><td>20</td><td>8</td><td>9</td><td>1</td><td>2</td><td>0</td><td>0</td><td>58</td><td>56</td><td>11</td><td>4</td><td>6</td><td>1</td><td>0</td><td>0</td><td>0</td><td>34</td><td>35</td><td>9</td><td>4</td><td>3</td><td>0</td><td>2</td><td>0</td><td>0</td><td>24</td><td>21</td><td>58</td><td>106</td><td>164</td></tr>
<tr><td>Colorado Avalanche</td><td>20</td><td>13</td><td>5</td><td>1</td><td>0</td><td>0</td><td>1</td><td>70</td><td>50</td><td>8</td><td>5</td><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>29</td><td>21</td><td>12</td><td>8</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>41</td><td>29</td><td>70</td><td>124</td><td>194</td></tr>
<tr><td>Columbus Blue Jackets</td><td>20</td><td>8</td><td>10</td><td>0</td><td>1</td><td>1</td><td>0</td><td>49</td><td>60</td><td>10</td><td>5</td><td>4</td><td>0</td><td>0</td><td>1</td><td>0</td><td>26</td><td>27</td><td>10</td><td>3</td><td>6</td><td>0</td><td>1</td><td>0</td><td>0</td><td>23</td><td>33</td><td>49</td><td>88</td><td>137</td></tr>
<tr><td>Dallas Stars</td><td>20</td><td>7</td><td>6</td><td>1</td><td>2</td><td>1</td><td>3</td><td>70</td><td>65</td><td>11</td><td>4</td><td>3</td><td>1</td><td>1</td><td>0</td><td>2</td><td>41</td><td>37</td><td>9</td><td>3</td><td>3</td><td>0</td><td>1</td><td>1</td><td>1</td><td>29</td><td>28</td><td>70</td><td>128</td><td>198</td></tr>
<tr><td>Detroit Red Wings</td><td>20</td><td>9</td><td>8</td><td>1</td><td>1</td><td>1</td><td>0</td><td>67</td><td>57</td><td>10</td><td>6</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>36</td><td>22</td><td>10</td><td>3</td><td>6</td><td>0</td><td>0</td><td>1</td><td>0</td><td>31</td><td>35</td><td>67</td><td>127</td><td>194</td></tr>
<tr><td>Edmonton Oilers</td><td>20</td><td>8</td><td>8</td><td>2</td><td>1</td><td>0</td><td>1</td><td>70</td><td>68</td><td>9</td><td>4</td><td>2</td><td>1</td><td>1</td><td>0</td><td>1</td><td>30</td><td>27</td><td>11</td><td>4</td><td>6</td><td>1</td><td>0</td><td>0</td><td>0</td><td>40</td><td>41</td><td>70</td><td>128</td><td>198</td></tr>
<tr><td>Florida Panthers</td><td>20</td><td>10</td><td>5</td><td>1</td><td>1</td><td>0</td><td>3</td><td>63</td><td>60</td><td>8</td><td>6</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>26</td><td>18</td><td>12</td><td>4</td><td>4</td><td>1</td><td>0</td><td>0</td><td>3</td><td>37</td><td>42</td><td>63</td><td>118</td><td>181</td></tr>
<tr><td>Los Angeles Kings</td><td>20</td><td>7</td><td>8</td><td>1</td><td>2</td><td>2</td><td>0</td><td>59</td><td>63</td><td>11</td><td>5</td><td>4</td><td>1</td><td>0</td><td>1</td><td>0</td><td>39</td><td>32</td><td>9</td><td>2</td><td>4</td><td>0</td><td>2</td><td>1</td><td>0</td><td>20</td><td>31</td><td>59</td><td>102</td><td>161</td></tr>
<tr><td>Minnesota Wild</td><td>20</td><td>9</td><td>9</td><td>0</td><td>1</td><td>0</td><td>1</td><td>51</td><td>53</td><td>9</td><td>4</td><td>3</td><td>0</td><td>1</td><td>0</td><td>1</td><td>25</td><td>25</td><td>11</td><td>5</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>26</td><td>28</td><td>51</td><td>94</td><td>145</td></tr>
<tr><td>Montreal Canadiens</td><td>20</td><td>9</td><td>9</td><td>0</td><td>1</td><td>0</td><td>1</td><td>64</td><td>65</td><td>12</td><td>6</td><td>4</td><td>0</td><td>1</td><td>0</td><td>1</td><td>44</td><td>41</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>24</td><td>64</td><td>114</td><td>178</td></tr>
<tr><td>Nashville Predators</td><td>20</td><td>9</td><td>8</td><td>0</td><td>1</td><td>1</td><td>1</td><td>52</td><td>53</td><td>11</td><td>8</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>32</td><td>21</td><td>9</td><td>1</td><td>6</td><td>0</td><td>1</td><td>1</td><td>0</td><td>20</td><td>32</td><td>52</td><td>89</td><td>141</td></tr>
<tr><td>New Jersey Devils</td><td>20</td><td>8</td><td>8</td><td>1</td><td>1</td><td>0</td><td>2</td><td>47</td><td>54</td><td>9</td><td>5</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>21</td><td>16</td><td>11</td><td>3</td><td>6</td><td>0</td><td>1</td><td>0</td><td>1</td><td>26</td><td>38</td><td>47</td><td>79</td><td>126</td></tr>
<tr><td>New York Islanders</td><td>20</td><td>9</td><td>6</td><td>2</td><td>2</td><td>1</td><td>0</td><td>68</td><td>59</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>31</td><td>24</td><td>12</td><td>4</td><td>3</td><td>2</td><td>2</td><td>1</td><td>0</td><td>37</td><td>35</td><td>68</td><td>124</td><td>192</td></tr>
<tr><td>New York Rangers</td><td>20</td><td>8</td><td>7</td><td>3</td><td>0</td><td>1</td><td>1</td><td>69</td><td>55</td><td>9</td><td>6</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>34</td><td>22</td><td>11</td><td>2</td><td>5</td><td>2</td><td>0</td><td>1</td><td>1</td><td>35</td><td>33</td><td>69</td><td>123</td><td>192</td></tr>
<tr><td>Ottawa Senators</td><td>20</td><td>11</td><td>6</td><td>1</td><td>0</td><td>2</td><td>0</td><td>70</td><td>58</td><td>12</td><td>8</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>38</td><td>31</td><td>8</td><td>3</td><td>2</td><td>1</td><td>0</td><td>2</td><td>0</td><td>32</td><td>27</td><td>70</td><td>118</td><td>188</td></tr>
<tr><td>Philadelphia Flyers</td><td>20</td><td>14</td><td>5</td><td>0</td><td>0</td><td>1</td><td>0</td><td>64</td><td>38</td><td>10</td><td>7</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>38</td><td>21</td><td>10</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>26</td><td>17</td><td>64</td><td>118</td><td>182</td></tr>
<tr><td>Pittsburgh Penguins</td><td>20</td><td>5</td><td>8</td><td>3</td><td>3</td><td>1</td><td>0</td><td>71</td><td>72</td><td>9</td><td>1</td><td>4</td><td>2</td><td>1</td><td>1</td><td>0</td><td>31</td><td>32</td><td>11</td><td>4</td><td>4</td><td>1</td><td>2</td><td>0</td><td>0</td><td>40</td><td>40</td><td>71</td><td>127</td><td>198</td></tr>
<tr><td>Quebec Nordiques</td><td>20</td><td>5</td><td>11</td><td>0</td><td>2</td><td>1</td><td>1</td><td>51</td><td>69</td><td>11</td><td>2</td><td>6</td><td>0</td><td>1</td><td>1</td><td>1</td><td>30</td><td>39</td><td>9</td><td>3</td><td>5</td><td>0</td><td>1</td><td>0</td><td>0</td><td>21</td><td>30</td><td>51</td><td>93</td><td>144</td></tr>
<tr><td>San Jose Sharks</td><td>20</td><td>8</td><td>9</td><td>0</td><td>2</td><td>1</td><td>0</td><td>60</td><td>66</td><td>10</td><td>5</td><td>4</td><td>0</td><td>1</td><td>0</td><td>0</td><td>31</td><td>34</td><td>10</td><td>3</td><td>5</td><td>0</td><td>1</td><td>1</td><td>0</td><td>29</td><td>32</td><td>60</td><td>105</td><td>165</td></tr>
<tr><td>Seattle Kraken</td><td>20</td><td>6</td><td>11</td><td>1</td><td>0</td><td>1</td><td>1</td><td>58</td><td>62</td><td>10</td><td>5</td><td>3</td><td>1</td><td>0</td><td>1</td><td>0</td><td>37</td><td>26</td><td>10</td><td>1</td><td>8</td><td>0</td><td>0</td><td>0</td><td>1</td><td>21</td><td>36</td><td>58</td><td>104</td><td>162</td></tr>
<tr><td>St. Louis Blues</td><td>20</td><td>8</td><td>6</td><td>2</td><td>2</td><td>1</td><td>1</td><td>61</td><td>61</td><td>10</td><td>5</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>32</td><td>30</td><td>10</td><td>3</td><td>2</td><td>1</td><td>2</td><td>1</td><td>1</td><td>29</td><td>31</td><td>61</td><td>111</td><td>172</td></tr>
<tr><td>Tampa Bay Lightning</td><td>20</td><td>6</td><td>12</td><td>0</td><td>0</td><td>1</td><td>1</td><td>49</td><td>62</td><td>10</td><td>3</td><td>5</td><td>0</td><td>0</td><td>1</td><td>1</td><td>29</td><td>31</td><td>10</td><td>3</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>31</td><td>49</td><td>82</td><td>131</td></tr>
<tr><td>Toronto Maple Leafs</td><td>20</td><td>6</td><td>10</td><td>2</td><td>1</td><td>1</td><td>0</td><td>52</td><td>56</td><td>10</td><td>4</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>29</td><td>29</td><td>10</td><td>2</td><td>5</td><td>1</td><td>1</td><td>1</td><td>0</td><td>23</td><td>27</td><td>52</td><td>95</td><td>147</td></tr>
<tr><td>Vancouver Canucks</td><td>20</td><td>5</td><td>6</td><td>4</td><td>0</td><td>4</td><td>1</td><td>52</td><td>53</td><td>10</td><td>2</td><td>1</td><td>3</td><td>0</td><td>3</td><td>1</td><td>34</td><td>27</td><td>10</td><td>3</td><td>5</td><td>1</td><td>0</td><td>1</td><td>0</td><td>18</td><td>26</td><td>52</td><td>91</td><td>143</td></tr>
<tr><td>Vegas Golden Knights</td><td>20</td><td>10</td><td>6</td><td>2</td><td>2</td><td>0</td><td>0</td><td>64</td><td>58</td><td>11</td><td>6</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>33</td><td>26</td><td>9</td><td>4</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>31</td><td>32</td><td>64</td><td>116</td><td>180</td></tr>
<tr><td>Washington Capitals</td><td>20</td><td>8</td><td>4</td><td>0</td><td>2</td><td>3</td><td>3</td><td>59</td><td>54</td><td>10</td><td>5</td><td>1</td><td>0</td><td>1</td><td>1</td><td>2</td><td>25</td><td>19</td><td>10</td><td>3</td><td>3</td><td>0</td><td>1</td><td>2</td><td>1</td><td>34</td><td>35</td><td>59</td><td>100</td><td>159</td></tr>
<tr><td>Winnipeg Jets</td><td>20</td><td>8</td><td>11</td><td>0</td><td>0</td><td>0</td><td>1</td><td>46</td><td>61</td><td>11</td><td>6</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>29</td><td>9</td><td>2</td><td>6</td><td>0</td><td>0</td><td>0</td><td>1</td><td>19</td><td>32</td><td>46</td><td>83</td><td>129</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>ANH</td><td>24</td><td>17</td><td>17</td><td>0</td><td>614</td><td>206</td><td>191</td><td>214</td><td>3</td><td>627</td><td>207</td><td>156</td><td>415</td><td>83</td><td>19</td><td>22,89%</td><td>74</td><td>12</td><td>83,78%</td><td>1</td><td>46,07%</td><td>45,89%</td><td>47,81%</td><td>496</td><td>462</td><td>247</td><td>149</td><td>321</td><td>121</td><td>2</td><td>2</td></tr>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>22</td><td>28</td><td>11</td><td>4</td><td>625</td><td>195</td><td>216</td><td>201</td><td>19</td><td>658</td><td>184</td><td>187</td><td>415</td><td>63</td><td>18</td><td>28,57%</td><td>82</td><td>19</td><td>76,83%</td><td>0</td><td>54,84%</td><td>57,34%</td><td>52,85%</td><td>480</td><td>483</td><td>253</td><td>145</td><td>336</td><td>127</td><td>0</td><td>0</td></tr>
<tr><td>Boston Bruins</td><td>BOS</td><td>20</td><td>17</td><td>20</td><td>7</td><td>584</td><td>190</td><td>182</td><td>203</td><td>20</td><td>652</td><td>188</td><td>173</td><td>365</td><td>74</td><td>16</td><td>21,62%</td><td>75</td><td>16</td><td>78,67%</td><td>0</td><td>50,97%</td><td>50,92%</td><td>52,79%</td><td>483</td><td>483</td><td>251</td><td>144</td><td>336</td><td>124</td><td>1</td><td>0</td></tr>
<tr><td>Buffalo Sabres</td><td>BUF</td><td>16</td><td>22</td><td>26</td><td>2</td><td>596</td><td>195</td><td>204</td><td>191</td><td>10</td><td>612</td><td>181</td><td>126</td><td>364</td><td>69</td><td>17</td><td>24,64%</td><td>55</td><td>8</td><td>85,45%</td><td>0</td><td>48,92%</td><td>52,47%</td><td>51,78%</td><td>486</td><td>474</td><td>250</td><td>144</td><td>333</td><td>125</td><td>1</td><td>1</td></tr>
<tr><td>Calgary Flames</td><td>CGY</td><td>15</td><td>11</td><td>19</td><td>2</td><td>597</td><td>222</td><td>174</td><td>192</td><td>11</td><td>601</td><td>184</td><td>151</td><td>381</td><td>75</td><td>7</td><td>9,33%</td><td>65</td><td>15</td><td>76,92%</td><td>0</td><td>50,07%</td><td>51,87%</td><td>50,34%</td><td>478</td><td>480</td><td>254</td><td>146</td><td>333</td><td>128</td><td>2</td><td>1</td></tr>
<tr><td>Carolina Hurricanes</td><td>CAR</td><td>23</td><td>22</td><td>14</td><td>3</td><td>603</td><td>204</td><td>204</td><td>181</td><td>24</td><td>629</td><td>203</td><td>188</td><td>421</td><td>89</td><td>17</td><td>19,10%</td><td>84</td><td>19</td><td>77,38%</td><td>1</td><td>46,26%</td><td>53,13%</td><td>50,46%</td><td>486</td><td>475</td><td>259</td><td>152</td><td>325</td><td>130</td><td>0</td><td>1</td></tr>
<tr><td>Chicago Blackhawks</td><td>CHI</td><td>24</td><td>14</td><td>19</td><td>1</td><td>624</td><td>214</td><td>201</td><td>207</td><td>2</td><td>600</td><td>174</td><td>175</td><td>387</td><td>66</td><td>12</td><td>18,18%</td><td>73</td><td>13</td><td>82,19%</td><td>1</td><td>52,65%</td><td>53,53%</td><td>50,34%</td><td>480</td><td>479</td><td>243</td><td>142</td><td>335</td><td>122</td><td>1</td><td>1</td></tr>
<tr><td>Colorado Avalanche</td><td>COL</td><td>27</td><td>18</td><td>24</td><td>1</td><td>641</td><td>183</td><td>202</td><td>253</td><td>6</td><td>624</td><td>179</td><td>138</td><td>404</td><td>80</td><td>17</td><td>21,25%</td><td>63</td><td>11</td><td>82,54%</td><td>2</td><td>51,30%</td><td>49,66%</td><td>48,73%</td><td>484</td><td>472</td><td>253</td><td>147</td><td>332</td><td>123</td><td>1</td><td>1</td></tr>
<tr><td>Columbus Blue Jackets</td><td>CLB</td><td>20</td><td>15</td><td>13</td><td>3</td><td>577</td><td>213</td><td>167</td><td>194</td><td>6</td><td>637</td><td>164</td><td>150</td><td>348</td><td>63</td><td>11</td><td>17,46%</td><td>70</td><td>11</td><td>84,29%</td><td>0</td><td>51,21%</td><td>50,71%</td><td>48,80%</td><td>485</td><td>466</td><td>255</td><td>151</td><td>319</td><td>125</td><td>0</td><td>1</td></tr>
<tr><td>Dallas Stars</td><td>DAL</td><td>22</td><td>20</td><td>26</td><td>2</td><td>633</td><td>193</td><td>199</td><td>230</td><td>22</td><td>699</td><td>176</td><td>207</td><td>437</td><td>78</td><td>19</td><td>24,36%</td><td>82</td><td>16</td><td>80,49%</td><td>0</td><td>49,94%</td><td>55,74%</td><td>52,94%</td><td>489</td><td>484</td><td>254</td><td>148</td><td>338</td><td>127</td><td>1</td><td>1</td></tr>
<tr><td>Detroit Red Wings</td><td>DET</td><td>18</td><td>22</td><td>25</td><td>2</td><td>682</td><td>205</td><td>230</td><td>244</td><td>6</td><td>611</td><td>178</td><td>126</td><td>349</td><td>90</td><td>18</td><td>20,00%</td><td>57</td><td>16</td><td>71,93%</td><td>0</td><td>47,90%</td><td>47,75%</td><td>48,77%</td><td>463</td><td>497</td><td>249</td><td>142</td><td>354</td><td>127</td><td>2</td><td>0</td></tr>
<tr><td>Edmonton Oilers</td><td>EDM</td><td>25</td><td>20</td><td>23</td><td>3</td><td>688</td><td>233</td><td>221</td><td>227</td><td>10</td><td>675</td><td>219</td><td>166</td><td>391</td><td>68</td><td>20</td><td>29,41%</td><td>76</td><td>21</td><td>72,37%</td><td>2</td><td>47,47%</td><td>49,05%</td><td>48,17%</td><td>503</td><td>464</td><td>242</td><td>141</td><td>325</td><td>119</td><td>2</td><td>0</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>30</td><td>18</td><td>14</td><td>1</td><td>669</td><td>251</td><td>197</td><td>213</td><td>20</td><td>675</td><td>174</td><td>173</td><td>385</td><td>85</td><td>18</td><td>21,18%</td><td>71</td><td>15</td><td>78,87%</td><td>2</td><td>49,93%</td><td>53,50%</td><td>42,58%</td><td>465</td><td>506</td><td>247</td><td>143</td><td>362</td><td>124</td><td>0</td><td>0</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>26</td><td>17</td><td>13</td><td>5</td><td>646</td><td>222</td><td>225</td><td>192</td><td>16</td><td>623</td><td>163</td><td>179</td><td>390</td><td>71</td><td>16</td><td>22,54%</td><td>80</td><td>14</td><td>82,50%</td><td>0</td><td>53,09%</td><td>51,68%</td><td>56,45%</td><td>463</td><td>508</td><td>246</td><td>141</td><td>357</td><td>124</td><td>0</td><td>0</td></tr>
<tr><td>Minnesota Wild</td><td>MIN</td><td>10</td><td>23</td><td>18</td><td>0</td><td>575</td><td>185</td><td>186</td><td>199</td><td>8</td><td>655</td><td>174</td><td>178</td><td>345</td><td>58</td><td>9</td><td>15,52%</td><td>82</td><td>17</td><td>79,27%</td><td>0</td><td>46,90%</td><td>46,35%</td><td>50,00%</td><td>493</td><td>470</td><td>247</td><td>141</td><td>327</td><td>123</td><td>1</td><td>1</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>26</td><td>13</td><td>25</td><td>1</td><td>662</td><td>229</td><td>192</td><td>231</td><td>17</td><td>624</td><td>199</td><td>164</td><td>365</td><td>78</td><td>17</td><td>21,79%</td><td>71</td><td>16</td><td>77,46%</td><td>1</td><td>53,93%</td><td>53,06%</td><td>49,40%</td><td>464</td><td>494</td><td>250</td><td>142</td><td>347</td><td>126</td><td>0</td><td>2</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>19</td><td>20</td><td>12</td><td>2</td><td>604</td><td>196</td><td>202</td><td>200</td><td>14</td><td>534</td><td>179</td><td>115</td><td>396</td><td>65</td><td>15</td><td>23,08%</td><td>50</td><td>6</td><td>88,00%</td><td>0</td><td>50,00%</td><td>51,39%</td><td>48,03%</td><td>476</td><td>481</td><td>257</td><td>143</td><td>335</td><td>127</td><td>1</td><td>1</td></tr>
<tr><td>New Jersey Devils</td><td>NJD</td><td>15</td><td>13</td><td>18</td><td>3</td><td>623</td><td>193</td><td>223</td><td>202</td><td>15</td><td>589</td><td>198</td><td>145</td><td>387</td><td>71</td><td>9</td><td>12,68%</td><td>64</td><td>13</td><td>79,69%</td><td>1</td><td>48,17%</td><td>52,27%</td><td>48,74%</td><td>483</td><td>481</td><td>251</td><td>145</td><td>335</td><td>128</td><td>3</td><td>0</td></tr>
<tr><td>New York Islanders</td><td>NYI</td><td>23</td><td>21</td><td>21</td><td>4</td><td>620</td><td>185</td><td>214</td><td>213</td><td>11</td><td>612</td><td>187</td><td>142</td><td>411</td><td>73</td><td>16</td><td>21,92%</td><td>63</td><td>11</td><td>82,54%</td><td>1</td><td>50,75%</td><td>51,04%</td><td>50,33%</td><td>477</td><td>485</td><td>253</td><td>148</td><td>336</td><td>129</td><td>1</td><td>0</td></tr>
<tr><td>New York Rangers</td><td>NYR</td><td>28</td><td>23</td><td>14</td><td>7</td><td>689</td><td>247</td><td>228</td><td>201</td><td>22</td><td>630</td><td>188</td><td>183</td><td>395</td><td>78</td><td>12</td><td>15,38%</td><td>75</td><td>16</td><td>78,67%</td><td>0</td><td>47,36%</td><td>47,33%</td><td>52,04%</td><td>484</td><td>479</td><td>251</td><td>147</td><td>335</td><td>127</td><td>2</td><td>2</td></tr>
<tr><td>Ottawa Senators</td><td>OTT</td><td>26</td><td>22</td><td>19</td><td>6</td><td>629</td><td>218</td><td>212</td><td>187</td><td>22</td><td>665</td><td>202</td><td>152</td><td>383</td><td>63</td><td>18</td><td>28,57%</td><td>68</td><td>13</td><td>80,88%</td><td>1</td><td>48,35%</td><td>50,35%</td><td>49,52%</td><td>492</td><td>466</td><td>253</td><td>148</td><td>322</td><td>123</td><td>1</td><td>0</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>23</td><td>20</td><td>20</td><td>1</td><td>644</td><td>209</td><td>222</td><td>209</td><td>11</td><td>576</td><td>170</td><td>165</td><td>351</td><td>75</td><td>12</td><td>16,00%</td><td>69</td><td>6</td><td>91,30%</td><td>0</td><td>52,38%</td><td>53,13%</td><td>57,53%</td><td>466</td><td>495</td><td>244</td><td>144</td><td>350</td><td>121</td><td>2</td><td>0</td></tr>
<tr><td>Pittsburgh Penguins</td><td>PIT</td><td>20</td><td>26</td><td>21</td><td>4</td><td>667</td><td>219</td><td>213</td><td>220</td><td>17</td><td>590</td><td>200</td><td>158</td><td>408</td><td>63</td><td>17</td><td>26,98%</td><td>66</td><td>18</td><td>72,73%</td><td>0</td><td>50,64%</td><td>54,74%</td><td>53,12%</td><td>487</td><td>480</td><td>248</td><td>143</td><td>337</td><td>123</td><td>0</td><td>2</td></tr>
<tr><td>Quebec Nordiques</td><td>QUE</td><td>18</td><td>17</td><td>15</td><td>3</td><td>618</td><td>214</td><td>210</td><td>186</td><td>17</td><td>606</td><td>183</td><td>186</td><td>384</td><td>78</td><td>15</td><td>19,23%</td><td>75</td><td>12</td><td>84,00%</td><td>0</td><td>48,72%</td><td>46,68%</td><td>46,53%</td><td>475</td><td>486</td><td>252</td><td>147</td><td>338</td><td>125</td><td>1</td><td>1</td></tr>
<tr><td>San Jose Sharks</td><td>SJS</td><td>28</td><td>19</td><td>12</td><td>3</td><td>609</td><td>197</td><td>207</td><td>201</td><td>12</td><td>671</td><td>197</td><td>174</td><td>435</td><td>70</td><td>5</td><td>7,14%</td><td>81</td><td>14</td><td>82,72%</td><td>1</td><td>48,02%</td><td>47,61%</td><td>48,10%</td><td>494</td><td>471</td><td>247</td><td>145</td><td>324</td><td>122</td><td>0</td><td>0</td></tr>
<tr><td>Seattle Kraken</td><td>SEA</td><td>20</td><td>23</td><td>13</td><td>3</td><td>617</td><td>220</td><td>192</td><td>190</td><td>21</td><td>629</td><td>192</td><td>140</td><td>393</td><td>77</td><td>13</td><td>16,88%</td><td>66</td><td>16</td><td>75,76%</td><td>2</td><td>50,75%</td><td>50,14%</td><td>52,20%</td><td>496</td><td>465</td><td>254</td><td>147</td><td>319</td><td>129</td><td>0</td><td>1</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>27</td><td>17</td><td>14</td><td>4</td><td>617</td><td>204</td><td>216</td><td>188</td><td>17</td><td>632</td><td>156</td><td>140</td><td>354</td><td>62</td><td>10</td><td>16,13%</td><td>67</td><td>13</td><td>80,60%</td><td>2</td><td>49,72%</td><td>50,71%</td><td>52,01%</td><td>482</td><td>478</td><td>257</td><td>147</td><td>331</td><td>127</td><td>1</td><td>0</td></tr>
<tr><td>Tampa Bay Lightning</td><td>TBL</td><td>16</td><td>20</td><td>12</td><td>3</td><td>634</td><td>193</td><td>201</td><td>236</td><td>15</td><td>638</td><td>206</td><td>191</td><td>391</td><td>66</td><td>10</td><td>15,15%</td><td>86</td><td>23</td><td>73,26%</td><td>0</td><td>50,34%</td><td>54,57%</td><td>54,18%</td><td>478</td><td>484</td><td>248</td><td>145</td><td>338</td><td>122</td><td>1</td><td>0</td></tr>
<tr><td>Toronto Maple Leafs</td><td>TOR</td><td>22</td><td>10</td><td>17</td><td>4</td><td>630</td><td>219</td><td>187</td><td>215</td><td>12</td><td>589</td><td>195</td><td>174</td><td>366</td><td>76</td><td>18</td><td>23,68%</td><td>69</td><td>14</td><td>79,71%</td><td>0</td><td>50,66%</td><td>51,74%</td><td>53,18%</td><td>465</td><td>494</td><td>256</td><td>147</td><td>345</td><td>127</td><td>2</td><td>0</td></tr>
<tr><td>Vancouver Canucks</td><td>VAN</td><td>15</td><td>11</td><td>18</td><td>14</td><td>601</td><td>208</td><td>165</td><td>201</td><td>49</td><td>678</td><td>207</td><td>237</td><td>383</td><td>66</td><td>8</td><td>12,12%</td><td>108</td><td>22</td><td>79,63%</td><td>1</td><td>51,51%</td><td>52,97%</td><td>53,77%</td><td>496</td><td>482</td><td>254</td><td>151</td><td>332</td><td>123</td><td>2</td><td>0</td></tr>
<tr><td>Vegas Golden Knights</td><td>VEG</td><td>19</td><td>24</td><td>19</td><td>2</td><td>667</td><td>192</td><td>227</td><td>245</td><td>3</td><td>602</td><td>168</td><td>138</td><td>408</td><td>65</td><td>14</td><td>21,54%</td><td>62</td><td>12</td><td>80,65%</td><td>1</td><td>49,64%</td><td>46,55%</td><td>51,83%</td><td>476</td><td>482</td><td>247</td><td>143</td><td>336</td><td>122</td><td>0</td><td>1</td></tr>
<tr><td>Washington Capitals</td><td>WSH</td><td>23</td><td>16</td><td>17</td><td>7</td><td>622</td><td>212</td><td>199</td><td>194</td><td>38</td><td>627</td><td>182</td><td>171</td><td>376</td><td>72</td><td>16</td><td>22,22%</td><td>72</td><td>14</td><td>80,56%</td><td>1</td><td>47,45%</td><td>50,74%</td><td>50,53%</td><td>490</td><td>488</td><td>254</td><td>149</td><td>341</td><td>125</td><td>1</td><td>0</td></tr>
<tr><td>Winnipeg Jets</td><td>WPG</td><td>18</td><td>18</td><td>10</td><td>2</td><td>585</td><td>177</td><td>210</td><td>195</td><td>6</td><td>622</td><td>171</td><td>176</td><td>370</td><td>65</td><td>14</td><td>21,54%</td><td>74</td><td>11</td><td>85,14%</td><td>0</td><td>52,32%</td><td>49,05%</td><td>49,24%</td><td>467</td><td>489</td><td>249</td><td>143</td><td>345</td><td>126</td><td>3</td><td>1</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,98</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Pittsburgh Penguins</td><td>3,55</td></tr>
<tr><td>2</td><td>Colorado Avalanche</td><td>3,50</td></tr>
<tr><td>3</td><td>Dallas Stars</td><td>3,50</td></tr>
<tr><td>4</td><td>Edmonton Oilers</td><td>3,50</td></tr>
<tr><td>5</td><td>Ottawa Senators</td><td>3,50</td></tr>
<tr><td>6</td><td>New York Rangers</td><td>3,45</td></tr>
<tr><td>7</td><td>New York Islanders</td><td>3,40</td></tr>
<tr><td>8</td><td>Detroit Red Wings</td><td>3,35</td></tr>
<tr><td>9</td><td>Buffalo Sabres</td><td>3,25</td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>3,20</td></tr>
<tr><td>11</td><td>Philadelphia Flyers</td><td>3,20</td></tr>
<tr><td>12</td><td>Vegas Golden Knights</td><td>3,20</td></tr>
<tr><td>13</td><td>Arizona Coyotes</td><td>3,15</td></tr>
<tr><td>14</td><td>Florida Panthers</td><td>3,15</td></tr>
<tr><td>15</td><td>Carolina Hurricanes</td><td>3,10</td></tr>
<tr><td>16</td><td>St. Louis Blues</td><td>3,05</td></tr>
<tr><td>17</td><td>Boston Bruins</td><td>3,00</td></tr>
<tr><td>18</td><td>San Jose Sharks</td><td>3,00</td></tr>
<tr><td>19</td><td>Los Angeles Kings</td><td>2,95</td></tr>
<tr><td>20</td><td>Washington Capitals</td><td>2,95</td></tr>
<tr><td>21</td><td>Anaheim Ducks</td><td>2,90</td></tr>
<tr><td>22</td><td>Chicago Blackhawks</td><td>2,90</td></tr>
<tr><td>23</td><td>Seattle Kraken</td><td>2,90</td></tr>
<tr><td>24</td><td>Nashville Predators</td><td>2,60</td></tr>
<tr><td>25</td><td>Toronto Maple Leafs</td><td>2,60</td></tr>
<tr><td>26</td><td>Vancouver Canucks</td><td>2,60</td></tr>
<tr><td>27</td><td>Minnesota Wild</td><td>2,55</td></tr>
<tr><td>28</td><td>Quebec Nordiques</td><td>2,55</td></tr>
<tr><td>29</td><td>Columbus Blue Jackets</td><td>2,45</td></tr>
<tr><td>30</td><td>Tampa Bay Lightning</td><td>2,45</td></tr>
<tr><td>31</td><td>New Jersey Devils</td><td>2,35</td></tr>
<tr><td>32</td><td>Calgary Flames</td><td>2,35</td></tr>
<tr><td>33</td><td>Winnipeg Jets</td><td>2,30</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,98</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Philadelphia Flyers</td><td>1,90</td></tr>
<tr><td>2</td><td>Colorado Avalanche</td><td>2,50</td></tr>
<tr><td>3</td><td>Vancouver Canucks</td><td>2,65</td></tr>
<tr><td>4</td><td>Nashville Predators</td><td>2,65</td></tr>
<tr><td>5</td><td>Minnesota Wild</td><td>2,65</td></tr>
<tr><td>6</td><td>Washington Capitals</td><td>2,70</td></tr>
<tr><td>7</td><td>New Jersey Devils</td><td>2,70</td></tr>
<tr><td>8</td><td>New York Rangers</td><td>2,75</td></tr>
<tr><td>9</td><td>Calgary Flames</td><td>2,75</td></tr>
<tr><td>10</td><td>Toronto Maple Leafs</td><td>2,80</td></tr>
<tr><td>11</td><td>Chicago Blackhawks</td><td>2,80</td></tr>
<tr><td>12</td><td>Detroit Red Wings</td><td>2,85</td></tr>
<tr><td>13</td><td>Vegas Golden Knights</td><td>2,90</td></tr>
<tr><td>14</td><td>Ottawa Senators</td><td>2,90</td></tr>
<tr><td>15</td><td>Buffalo Sabres</td><td>2,90</td></tr>
<tr><td>16</td><td>New York Islanders</td><td>2,95</td></tr>
<tr><td>17</td><td>Florida Panthers</td><td>3,00</td></tr>
<tr><td>18</td><td>Columbus Blue Jackets</td><td>3,00</td></tr>
<tr><td>19</td><td>Winnipeg Jets</td><td>3,05</td></tr>
<tr><td>20</td><td>St. Louis Blues</td><td>3,05</td></tr>
<tr><td>21</td><td>Tampa Bay Lightning</td><td>3,10</td></tr>
<tr><td>22</td><td>Seattle Kraken</td><td>3,10</td></tr>
<tr><td>23</td><td>Los Angeles Kings</td><td>3,15</td></tr>
<tr><td>24</td><td>Anaheim Ducks</td><td>3,20</td></tr>
<tr><td>25</td><td>Montreal Canadiens</td><td>3,25</td></tr>
<tr><td>26</td><td>Dallas Stars</td><td>3,25</td></tr>
<tr><td>27</td><td>Boston Bruins</td><td>3,25</td></tr>
<tr><td>28</td><td>San Jose Sharks</td><td>3,30</td></tr>
<tr><td>29</td><td>Edmonton Oilers</td><td>3,40</td></tr>
<tr><td>30</td><td>Quebec Nordiques</td><td>3,45</td></tr>
<tr><td>31</td><td>Carolina Hurricanes</td><td>3,45</td></tr>
<tr><td>32</td><td>Arizona Coyotes</td><td>3,50</td></tr>
<tr><td>33</td><td>Pittsburgh Penguins</td><td>3,60</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Philadelphia Flyers</td><td>168,42%</td></tr>
<tr><td>2</td><td>Colorado Avalanche</td><td>140,00%</td></tr>
<tr><td>3</td><td>New York Rangers</td><td>125,45%</td></tr>
<tr><td>4</td><td>Ottawa Senators</td><td>120,69%</td></tr>
<tr><td>5</td><td>Detroit Red Wings</td><td>117,54%</td></tr>
<tr><td>6</td><td>New York Islanders</td><td>115,25%</td></tr>
<tr><td>7</td><td>Buffalo Sabres</td><td>112,07%</td></tr>
<tr><td>8</td><td>Vegas Golden Knights</td><td>110,34%</td></tr>
<tr><td>9</td><td>Washington Capitals</td><td>109,26%</td></tr>
<tr><td>10</td><td>Dallas Stars</td><td>107,69%</td></tr>
<tr><td>11</td><td>Florida Panthers</td><td>105,00%</td></tr>
<tr><td>12</td><td>Chicago Blackhawks</td><td>103,57%</td></tr>
<tr><td>13</td><td>Edmonton Oilers</td><td>102,94%</td></tr>
<tr><td>14</td><td>St. Louis Blues</td><td>100,00%</td></tr>
<tr><td>15</td><td>Pittsburgh Penguins</td><td>98,61%</td></tr>
<tr><td>16</td><td>Montreal Canadiens</td><td>98,46%</td></tr>
<tr><td>17</td><td>Vancouver Canucks</td><td>98,11%</td></tr>
<tr><td>18</td><td>Nashville Predators</td><td>98,11%</td></tr>
<tr><td>19</td><td>Minnesota Wild</td><td>96,23%</td></tr>
<tr><td>20</td><td>Los Angeles Kings</td><td>93,65%</td></tr>
<tr><td>21</td><td>Seattle Kraken</td><td>93,55%</td></tr>
<tr><td>22</td><td>Toronto Maple Leafs</td><td>92,86%</td></tr>
<tr><td>23</td><td>Boston Bruins</td><td>92,31%</td></tr>
<tr><td>24</td><td>San Jose Sharks</td><td>90,91%</td></tr>
<tr><td>25</td><td>Anaheim Ducks</td><td>90,63%</td></tr>
<tr><td>26</td><td>Arizona Coyotes</td><td>90,00%</td></tr>
<tr><td>27</td><td>Carolina Hurricanes</td><td>89,86%</td></tr>
<tr><td>28</td><td>New Jersey Devils</td><td>87,04%</td></tr>
<tr><td>29</td><td>Calgary Flames</td><td>85,45%</td></tr>
<tr><td>30</td><td>Columbus Blue Jackets</td><td>81,67%</td></tr>
<tr><td>31</td><td>Tampa Bay Lightning</td><td>79,03%</td></tr>
<tr><td>32</td><td>Winnipeg Jets</td><td>75,41%</td></tr>
<tr><td>33</td><td>Quebec Nordiques</td><td>73,91%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,92%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Edmonton Oilers</td><td>29,41%</td></tr>
<tr><td>2</td><td>Arizona Coyotes</td><td>28,57%</td></tr>
<tr><td>3</td><td>Ottawa Senators</td><td>28,57%</td></tr>
<tr><td>4</td><td>Pittsburgh Penguins</td><td>26,98%</td></tr>
<tr><td>5</td><td>Buffalo Sabres</td><td>24,64%</td></tr>
<tr><td>6</td><td>Dallas Stars</td><td>24,36%</td></tr>
<tr><td>7</td><td>Toronto Maple Leafs</td><td>23,68%</td></tr>
<tr><td>8</td><td>Nashville Predators</td><td>23,08%</td></tr>
<tr><td>9</td><td>Anaheim Ducks</td><td>22,89%</td></tr>
<tr><td>10</td><td>Los Angeles Kings</td><td>22,54%</td></tr>
<tr><td>11</td><td>Washington Capitals</td><td>22,22%</td></tr>
<tr><td>12</td><td>New York Islanders</td><td>21,92%</td></tr>
<tr><td>13</td><td>Montreal Canadiens</td><td>21,79%</td></tr>
<tr><td>14</td><td>Boston Bruins</td><td>21,62%</td></tr>
<tr><td>15</td><td>Winnipeg Jets</td><td>21,54%</td></tr>
<tr><td>16</td><td>Vegas Golden Knights</td><td>21,54%</td></tr>
<tr><td>17</td><td>Colorado Avalanche</td><td>21,25%</td></tr>
<tr><td>18</td><td>Florida Panthers</td><td>21,18%</td></tr>
<tr><td>19</td><td>Detroit Red Wings</td><td>20,00%</td></tr>
<tr><td>20</td><td>Quebec Nordiques</td><td>19,23%</td></tr>
<tr><td>21</td><td>Carolina Hurricanes</td><td>19,10%</td></tr>
<tr><td>22</td><td>Chicago Blackhawks</td><td>18,18%</td></tr>
<tr><td>23</td><td>Columbus Blue Jackets</td><td>17,46%</td></tr>
<tr><td>24</td><td>Seattle Kraken</td><td>16,88%</td></tr>
<tr><td>25</td><td>St. Louis Blues</td><td>16,13%</td></tr>
<tr><td>26</td><td>Philadelphia Flyers</td><td>16,00%</td></tr>
<tr><td>27</td><td>Minnesota Wild</td><td>15,52%</td></tr>
<tr><td>28</td><td>New York Rangers</td><td>15,38%</td></tr>
<tr><td>29</td><td>Tampa Bay Lightning</td><td>15,15%</td></tr>
<tr><td>30</td><td>New Jersey Devils</td><td>12,68%</td></tr>
<tr><td>31</td><td>Vancouver Canucks</td><td>12,12%</td></tr>
<tr><td>32</td><td>Calgary Flames</td><td>9,33%</td></tr>
<tr><td>33</td><td>San Jose Sharks</td><td>7,14%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,08%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Philadelphia Flyers</td><td>91,30%</td></tr>
<tr><td>2</td><td>Nashville Predators</td><td>88,00%</td></tr>
<tr><td>3</td><td>Buffalo Sabres</td><td>85,45%</td></tr>
<tr><td>4</td><td>Winnipeg Jets</td><td>85,14%</td></tr>
<tr><td>5</td><td>Columbus Blue Jackets</td><td>84,29%</td></tr>
<tr><td>6</td><td>Quebec Nordiques</td><td>84,00%</td></tr>
<tr><td>7</td><td>Anaheim Ducks</td><td>83,78%</td></tr>
<tr><td>8</td><td>San Jose Sharks</td><td>82,72%</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>82,54%</td></tr>
<tr><td>10</td><td>New York Islanders</td><td>82,54%</td></tr>
<tr><td>11</td><td>Los Angeles Kings</td><td>82,50%</td></tr>
<tr><td>12</td><td>Chicago Blackhawks</td><td>82,19%</td></tr>
<tr><td>13</td><td>Ottawa Senators</td><td>80,88%</td></tr>
<tr><td>14</td><td>Vegas Golden Knights</td><td>80,65%</td></tr>
<tr><td>15</td><td>St. Louis Blues</td><td>80,60%</td></tr>
<tr><td>16</td><td>Washington Capitals</td><td>80,56%</td></tr>
<tr><td>17</td><td>Dallas Stars</td><td>80,49%</td></tr>
<tr><td>18</td><td>Toronto Maple Leafs</td><td>79,71%</td></tr>
<tr><td>19</td><td>New Jersey Devils</td><td>79,69%</td></tr>
<tr><td>20</td><td>Vancouver Canucks</td><td>79,63%</td></tr>
<tr><td>21</td><td>Minnesota Wild</td><td>79,27%</td></tr>
<tr><td>22</td><td>Florida Panthers</td><td>78,87%</td></tr>
<tr><td>23</td><td>Boston Bruins</td><td>78,67%</td></tr>
<tr><td>24</td><td>New York Rangers</td><td>78,67%</td></tr>
<tr><td>25</td><td>Montreal Canadiens</td><td>77,46%</td></tr>
<tr><td>26</td><td>Carolina Hurricanes</td><td>77,38%</td></tr>
<tr><td>27</td><td>Calgary Flames</td><td>76,92%</td></tr>
<tr><td>28</td><td>Arizona Coyotes</td><td>76,83%</td></tr>
<tr><td>29</td><td>Seattle Kraken</td><td>75,76%</td></tr>
<tr><td>30</td><td>Tampa Bay Lightning</td><td>73,26%</td></tr>
<tr><td>31</td><td>Pittsburgh Penguins</td><td>72,73%</td></tr>
<tr><td>32</td><td>Edmonton Oilers</td><td>72,37%</td></tr>
<tr><td>33</td><td>Detroit Red Wings</td><td>71,93%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>111,08%</td></tr>
<tr><td>2</td><td>Buffalo Sabres</td><td>110,09%</td></tr>
<tr><td>3</td><td>Ottawa Senators</td><td>109,45%</td></tr>
<tr><td>4</td><td>Philadelphia Flyers</td><td>107,30%</td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>106,68%</td></tr>
<tr><td>6</td><td>Winnipeg Jets</td><td>106,67%</td></tr>
<tr><td>7</td><td>Arizona Coyotes</td><td>105,40%</td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>105,04%</td></tr>
<tr><td>9</td><td>Dallas Stars</td><td>104,85%</td></tr>
<tr><td>10</td><td>New York Islanders</td><td>104,46%</td></tr>
<tr><td>11</td><td>Colorado Avalanche</td><td>103,79%</td></tr>
<tr><td>12</td><td>Toronto Maple Leafs</td><td>103,39%</td></tr>
<tr><td>13</td><td>Quebec Nordiques</td><td>103,23%</td></tr>
<tr><td>14</td><td>Washington Capitals</td><td>102,78%</td></tr>
<tr><td>15</td><td>Vegas Golden Knights</td><td>102,18%</td></tr>
<tr><td>16</td><td>Edmonton Oilers</td><td>101,78%</td></tr>
<tr><td>17</td><td>Columbus Blue Jackets</td><td>101,75%</td></tr>
<tr><td>18</td><td>Chicago Blackhawks</td><td>100,37%</td></tr>
<tr><td>19</td><td>Boston Bruins</td><td>100,29%</td></tr>
<tr><td>20</td><td>Florida Panthers</td><td>100,05%</td></tr>
<tr><td>21</td><td>Pittsburgh Penguins</td><td>99,71%</td></tr>
<tr><td>22</td><td>Montreal Canadiens</td><td>99,26%</td></tr>
<tr><td>23</td><td>St. Louis Blues</td><td>96,73%</td></tr>
<tr><td>24</td><td>Carolina Hurricanes</td><td>96,48%</td></tr>
<tr><td>25</td><td>Minnesota Wild</td><td>94,79%</td></tr>
<tr><td>26</td><td>New York Rangers</td><td>94,05%</td></tr>
<tr><td>27</td><td>Seattle Kraken</td><td>92,64%</td></tr>
<tr><td>28</td><td>New Jersey Devils</td><td>92,36%</td></tr>
<tr><td>29</td><td>Detroit Red Wings</td><td>91,93%</td></tr>
<tr><td>30</td><td>Vancouver Canucks</td><td>91,75%</td></tr>
<tr><td>31</td><td>San Jose Sharks</td><td>89,86%</td></tr>
<tr><td>32</td><td>Tampa Bay Lightning</td><td>88,41%</td></tr>
<tr><td>33</td><td>Calgary Flames</td><td>86,26%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31,35</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>New York Rangers</td><td>34,45</td></tr>
<tr><td>2</td><td>Edmonton Oilers</td><td>34,40</td></tr>
<tr><td>3</td><td>Detroit Red Wings</td><td>34,10</td></tr>
<tr><td>4</td><td>Florida Panthers</td><td>33,45</td></tr>
<tr><td>5</td><td>Pittsburgh Penguins</td><td>33,35</td></tr>
<tr><td>6</td><td>Vegas Golden Knights</td><td>33,35</td></tr>
<tr><td>7</td><td>Montreal Canadiens</td><td>33,10</td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>32,30</td></tr>
<tr><td>9</td><td>Philadelphia Flyers</td><td>32,20</td></tr>
<tr><td>10</td><td>Colorado Avalanche</td><td>32,05</td></tr>
<tr><td>11</td><td>Tampa Bay Lightning</td><td>31,70</td></tr>
<tr><td>12</td><td>Dallas Stars</td><td>31,65</td></tr>
<tr><td>13</td><td>Toronto Maple Leafs</td><td>31,50</td></tr>
<tr><td>14</td><td>Ottawa Senators</td><td>31,45</td></tr>
<tr><td>15</td><td>Arizona Coyotes</td><td>31,25</td></tr>
<tr><td>16</td><td>Chicago Blackhawks</td><td>31,20</td></tr>
<tr><td>17</td><td>New Jersey Devils</td><td>31,15</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>31,10</td></tr>
<tr><td>19</td><td>New York Islanders</td><td>31,00</td></tr>
<tr><td>20</td><td>Quebec Nordiques</td><td>30,90</td></tr>
<tr><td>21</td><td>Seattle Kraken</td><td>30,85</td></tr>
<tr><td>22</td><td>St. Louis Blues</td><td>30,85</td></tr>
<tr><td>23</td><td>Anaheim Ducks</td><td>30,70</td></tr>
<tr><td>24</td><td>San Jose Sharks</td><td>30,45</td></tr>
<tr><td>25</td><td>Nashville Predators</td><td>30,20</td></tr>
<tr><td>26</td><td>Carolina Hurricanes</td><td>30,15</td></tr>
<tr><td>27</td><td>Vancouver Canucks</td><td>30,05</td></tr>
<tr><td>28</td><td>Calgary Flames</td><td>29,85</td></tr>
<tr><td>29</td><td>Buffalo Sabres</td><td>29,80</td></tr>
<tr><td>30</td><td>Winnipeg Jets</td><td>29,25</td></tr>
<tr><td>31</td><td>Boston Bruins</td><td>29,20</td></tr>
<tr><td>32</td><td>Columbus Blue Jackets</td><td>28,85</td></tr>
<tr><td>33</td><td>Minnesota Wild</td><td>28,75</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31,35</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>26,70</td></tr>
<tr><td>2</td><td>Philadelphia Flyers</td><td>28,80</td></tr>
<tr><td>3</td><td>Toronto Maple Leafs</td><td>29,45</td></tr>
<tr><td>4</td><td>New Jersey Devils</td><td>29,45</td></tr>
<tr><td>5</td><td>Pittsburgh Penguins</td><td>29,50</td></tr>
<tr><td>6</td><td>Chicago Blackhawks</td><td>30,00</td></tr>
<tr><td>7</td><td>Calgary Flames</td><td>30,05</td></tr>
<tr><td>8</td><td>Vegas Golden Knights</td><td>30,10</td></tr>
<tr><td>9</td><td>Quebec Nordiques</td><td>30,30</td></tr>
<tr><td>10</td><td>Detroit Red Wings</td><td>30,55</td></tr>
<tr><td>11</td><td>New York Islanders</td><td>30,60</td></tr>
<tr><td>12</td><td>Buffalo Sabres</td><td>30,60</td></tr>
<tr><td>13</td><td>Winnipeg Jets</td><td>31,10</td></tr>
<tr><td>14</td><td>Los Angeles Kings</td><td>31,15</td></tr>
<tr><td>15</td><td>Montreal Canadiens</td><td>31,20</td></tr>
<tr><td>16</td><td>Colorado Avalanche</td><td>31,20</td></tr>
<tr><td>17</td><td>Washington Capitals</td><td>31,35</td></tr>
<tr><td>18</td><td>Anaheim Ducks</td><td>31,35</td></tr>
<tr><td>19</td><td>Seattle Kraken</td><td>31,45</td></tr>
<tr><td>20</td><td>Carolina Hurricanes</td><td>31,45</td></tr>
<tr><td>21</td><td>New York Rangers</td><td>31,50</td></tr>
<tr><td>22</td><td>St. Louis Blues</td><td>31,60</td></tr>
<tr><td>23</td><td>Columbus Blue Jackets</td><td>31,85</td></tr>
<tr><td>24</td><td>Tampa Bay Lightning</td><td>31,90</td></tr>
<tr><td>25</td><td>Boston Bruins</td><td>32,60</td></tr>
<tr><td>26</td><td>Minnesota Wild</td><td>32,75</td></tr>
<tr><td>27</td><td>Arizona Coyotes</td><td>32,90</td></tr>
<tr><td>28</td><td>Ottawa Senators</td><td>33,25</td></tr>
<tr><td>29</td><td>San Jose Sharks</td><td>33,55</td></tr>
<tr><td>30</td><td>Florida Panthers</td><td>33,75</td></tr>
<tr><td>31</td><td>Edmonton Oilers</td><td>33,75</td></tr>
<tr><td>32</td><td>Vancouver Canucks</td><td>33,90</td></tr>
<tr><td>33</td><td>Dallas Stars</td><td>34,95</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>113,11%</td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>113,05%</td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>111,81%</td></tr>
<tr><td>4</td><td>Detroit Red Wings</td><td>111,62%</td></tr>
<tr><td>5</td><td>Vegas Golden Knights</td><td>110,80%</td></tr>
<tr><td>6</td><td>New York Rangers</td><td>109,37%</td></tr>
<tr><td>7</td><td>Toronto Maple Leafs</td><td>106,96%</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>106,09%</td></tr>
<tr><td>9</td><td>New Jersey Devils</td><td>105,77%</td></tr>
<tr><td>10</td><td>Chicago Blackhawks</td><td>104,00%</td></tr>
<tr><td>11</td><td>Los Angeles Kings</td><td>103,69%</td></tr>
<tr><td>12</td><td>Colorado Avalanche</td><td>102,72%</td></tr>
<tr><td>13</td><td>Quebec Nordiques</td><td>101,98%</td></tr>
<tr><td>14</td><td>Edmonton Oilers</td><td>101,93%</td></tr>
<tr><td>15</td><td>New York Islanders</td><td>101,31%</td></tr>
<tr><td>16</td><td>Tampa Bay Lightning</td><td>99,37%</td></tr>
<tr><td>17</td><td>Calgary Flames</td><td>99,33%</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>99,20%</td></tr>
<tr><td>19</td><td>Florida Panthers</td><td>99,11%</td></tr>
<tr><td>20</td><td>Seattle Kraken</td><td>98,09%</td></tr>
<tr><td>21</td><td>Anaheim Ducks</td><td>97,93%</td></tr>
<tr><td>22</td><td>St. Louis Blues</td><td>97,63%</td></tr>
<tr><td>23</td><td>Buffalo Sabres</td><td>97,39%</td></tr>
<tr><td>24</td><td>Carolina Hurricanes</td><td>95,87%</td></tr>
<tr><td>25</td><td>Arizona Coyotes</td><td>94,98%</td></tr>
<tr><td>26</td><td>Ottawa Senators</td><td>94,59%</td></tr>
<tr><td>27</td><td>Winnipeg Jets</td><td>94,05%</td></tr>
<tr><td>28</td><td>San Jose Sharks</td><td>90,76%</td></tr>
<tr><td>29</td><td>Columbus Blue Jackets</td><td>90,58%</td></tr>
<tr><td>30</td><td>Dallas Stars</td><td>90,56%</td></tr>
<tr><td>31</td><td>Boston Bruins</td><td>89,57%</td></tr>
<tr><td>32</td><td>Vancouver Canucks</td><td>88,64%</td></tr>
<tr><td>33</td><td>Minnesota Wild</td><td>87,79%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8,22</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>5,75</td></tr>
<tr><td>2</td><td>Buffalo Sabres</td><td>6,30</td></tr>
<tr><td>3</td><td>Detroit Red Wings</td><td>6,30</td></tr>
<tr><td>4</td><td>Vegas Golden Knights</td><td>6,90</td></tr>
<tr><td>5</td><td>Colorado Avalanche</td><td>6,90</td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>7,00</td></tr>
<tr><td>7</td><td>Seattle Kraken</td><td>7,00</td></tr>
<tr><td>8</td><td>New York Islanders</td><td>7,10</td></tr>
<tr><td>9</td><td>New Jersey Devils</td><td>7,25</td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>7,50</td></tr>
<tr><td>11</td><td>Calgary Flames</td><td>7,55</td></tr>
<tr><td>12</td><td>Ottawa Senators</td><td>7,60</td></tr>
<tr><td>13</td><td>Anaheim Ducks</td><td>7,80</td></tr>
<tr><td>14</td><td>Pittsburgh Penguins</td><td>7,90</td></tr>
<tr><td>15</td><td>Montreal Canadiens</td><td>8,20</td></tr>
<tr><td>16</td><td>Philadelphia Flyers</td><td>8,25</td></tr>
<tr><td>17</td><td>Edmonton Oilers</td><td>8,30</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>8,55</td></tr>
<tr><td>19</td><td>Florida Panthers</td><td>8,65</td></tr>
<tr><td>20</td><td>Boston Bruins</td><td>8,65</td></tr>
<tr><td>21</td><td>Toronto Maple Leafs</td><td>8,70</td></tr>
<tr><td>22</td><td>San Jose Sharks</td><td>8,70</td></tr>
<tr><td>23</td><td>Chicago Blackhawks</td><td>8,75</td></tr>
<tr><td>24</td><td>Winnipeg Jets</td><td>8,80</td></tr>
<tr><td>25</td><td>Minnesota Wild</td><td>8,90</td></tr>
<tr><td>26</td><td>Los Angeles Kings</td><td>8,95</td></tr>
<tr><td>27</td><td>New York Rangers</td><td>9,15</td></tr>
<tr><td>28</td><td>Quebec Nordiques</td><td>9,30</td></tr>
<tr><td>29</td><td>Arizona Coyotes</td><td>9,35</td></tr>
<tr><td>30</td><td>Carolina Hurricanes</td><td>9,40</td></tr>
<tr><td>31</td><td>Tampa Bay Lightning</td><td>9,55</td></tr>
<tr><td>32</td><td>Dallas Stars</td><td>10,35</td></tr>
<tr><td>33</td><td>Vancouver Canucks</td><td>11,85</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,32</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Dallas Stars</td><td>21,85</td></tr>
<tr><td>2</td><td>San Jose Sharks</td><td>21,75</td></tr>
<tr><td>3</td><td>Carolina Hurricanes</td><td>21,05</td></tr>
<tr><td>4</td><td>Anaheim Ducks</td><td>20,75</td></tr>
<tr><td>5</td><td>Arizona Coyotes</td><td>20,75</td></tr>
<tr><td>6</td><td>New York Islanders</td><td>20,55</td></tr>
<tr><td>7</td><td>Pittsburgh Penguins</td><td>20,40</td></tr>
<tr><td>8</td><td>Vegas Golden Knights</td><td>20,40</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>20,20</td></tr>
<tr><td>10</td><td>Nashville Predators</td><td>19,80</td></tr>
<tr><td>11</td><td>New York Rangers</td><td>19,75</td></tr>
<tr><td>12</td><td>Seattle Kraken</td><td>19,65</td></tr>
<tr><td>13</td><td>Edmonton Oilers</td><td>19,55</td></tr>
<tr><td>14</td><td>Tampa Bay Lightning</td><td>19,55</td></tr>
<tr><td>15</td><td>Los Angeles Kings</td><td>19,50</td></tr>
<tr><td>16</td><td>Chicago Blackhawks</td><td>19,35</td></tr>
<tr><td>17</td><td>New Jersey Devils</td><td>19,35</td></tr>
<tr><td>18</td><td>Florida Panthers</td><td>19,25</td></tr>
<tr><td>19</td><td>Quebec Nordiques</td><td>19,20</td></tr>
<tr><td>20</td><td>Ottawa Senators</td><td>19,15</td></tr>
<tr><td>21</td><td>Vancouver Canucks</td><td>19,15</td></tr>
<tr><td>22</td><td>Calgary Flames</td><td>19,05</td></tr>
<tr><td>23</td><td>Washington Capitals</td><td>18,80</td></tr>
<tr><td>24</td><td>Winnipeg Jets</td><td>18,50</td></tr>
<tr><td>25</td><td>Toronto Maple Leafs</td><td>18,30</td></tr>
<tr><td>26</td><td>Boston Bruins</td><td>18,25</td></tr>
<tr><td>27</td><td>Montreal Canadiens</td><td>18,25</td></tr>
<tr><td>28</td><td>Buffalo Sabres</td><td>18,20</td></tr>
<tr><td>29</td><td>St. Louis Blues</td><td>17,70</td></tr>
<tr><td>30</td><td>Philadelphia Flyers</td><td>17,55</td></tr>
<tr><td>31</td><td>Detroit Red Wings</td><td>17,45</td></tr>
<tr><td>32</td><td>Columbus Blue Jackets</td><td>17,40</td></tr>
<tr><td>33</td><td>Minnesota Wild</td><td>17,25</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Arizona Coyotes</td><td>55,48%</td></tr>
<tr><td>2</td><td>Philadelphia Flyers</td><td>53,59%</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>53,04%</td></tr>
<tr><td>4</td><td>Pittsburgh Penguins</td><td>52,81%</td></tr>
<tr><td>5</td><td>Dallas Stars</td><td>52,77%</td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>52,74%</td></tr>
<tr><td>7</td><td>Montreal Canadiens</td><td>52,72%</td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>52,63%</td></tr>
<tr><td>9</td><td>Vancouver Canucks</td><td>52,48%</td></tr>
<tr><td>10</td><td>Toronto Maple Leafs</td><td>51,56%</td></tr>
<tr><td>11</td><td>Boston Bruins</td><td>51,27%</td></tr>
<tr><td>12</td><td>Buffalo Sabres</td><td>50,89%</td></tr>
<tr><td>13</td><td>Calgary Flames</td><td>50,86%</td></tr>
<tr><td>14</td><td>New York Islanders</td><td>50,80%</td></tr>
<tr><td>15</td><td>Seattle Kraken</td><td>50,74%</td></tr>
<tr><td>16</td><td>Columbus Blue Jackets</td><td>50,60%</td></tr>
<tr><td>17</td><td>St. Louis Blues</td><td>50,52%</td></tr>
<tr><td>18</td><td>Winnipeg Jets</td><td>50,46%</td></tr>
<tr><td>19</td><td>Nashville Predators</td><td>50,24%</td></tr>
<tr><td>20</td><td>Colorado Avalanche</td><td>50,17%</td></tr>
<tr><td>21</td><td>Florida Panthers</td><td>50,17%</td></tr>
<tr><td>22</td><td>New Jersey Devils</td><td>50,00%</td></tr>
<tr><td>23</td><td>Carolina Hurricanes</td><td>49,78%</td></tr>
<tr><td>24</td><td>Ottawa Senators</td><td>49,35%</td></tr>
<tr><td>25</td><td>Washington Capitals</td><td>49,29%</td></tr>
<tr><td>26</td><td>Vegas Golden Knights</td><td>48,69%</td></tr>
<tr><td>27</td><td>Edmonton Oilers</td><td>48,24%</td></tr>
<tr><td>28</td><td>New York Rangers</td><td>48,17%</td></tr>
<tr><td>29</td><td>Detroit Red Wings</td><td>48,00%</td></tr>
<tr><td>30</td><td>San Jose Sharks</td><td>47,88%</td></tr>
<tr><td>31</td><td>Quebec Nordiques</td><td>47,48%</td></tr>
<tr><td>32</td><td>Minnesota Wild</td><td>47,23%</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>46,29%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
