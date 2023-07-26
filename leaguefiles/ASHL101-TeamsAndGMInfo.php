<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Teams And GM Info</title>
<script src="ASHL101.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL101-STHS.db - ASHL101-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1160px) {
.STHSWarning {display:block;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(1){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(1){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(2){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(2){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(3){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(3){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(4){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(4){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(5){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(5){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(6){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(6){display:none;}
}</style>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL101-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL101-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<table class="STHSTeamsAndGMInfo_MainTable"><thead><tr>
<th>Team Name</th>
<th>General Manager</th>
<th>Instant Messenger</th>
<th>Email</th>
<th>City</th>
<th>Arena</th>
<th>Farm Team Name</th>
<th>Last File Load Date</th>
<th># of Load Lines</th>
<th># of Fail Auto Roster</th>
<th># of Fail Pro Auto Line</th>
<th># of Fail Farm Auto Line</th>
<th># of Fail Simulation</th></tr></thead><tbody>
<tr><td>Anaheim Ducks</td>
<td>Dominik Cocozza</td>
<td></td>
<td><a href="mailto:dominik.cocozza@hotmail.ca">dominik.cocozza@hotmail.ca</a></td>
<td></td>
<td>Honda Center</td>
<td>Laval Chiefs</td>
<td>9 mai 2021 at 18:25</td>
<td>47</td>
<td>145</td>
<td>84</td>
<td>124</td>
<td>49</td></tr>
<tr><td>Arizona Coyotes</td>
<td>Maxime Bourassa Guillemette</td>
<td></td>
<td><a href="mailto:crazyboug72@hotmail.com">crazyboug72@hotmail.com</a></td>
<td></td>
<td>Gila River Arena</td>
<td>The Nuuk Vikings</td>
<td>10 mai 2021 at 05:22</td>
<td>73</td>
<td>53</td>
<td>33</td>
<td>69</td>
<td>24</td></tr>
<tr><td>Boston Bruins</td>
<td>Alexandre Brabant</td>
<td></td>
<td><a href="mailto:brabant66@hotmail.com">brabant66@hotmail.com</a></td>
<td></td>
<td>TD Garden</td>
<td>Providence Bruins</td>
<td>10 mai 2021 at 18:57</td>
<td>78</td>
<td>99</td>
<td>55</td>
<td>93</td>
<td>45</td></tr>
<tr><td>Buffalo Sabres</td>
<td>Jean-Bruno Gélinas</td>
<td></td>
<td><a href="mailto:jbgelinas@hotmail.ca">jbgelinas@hotmail.ca</a></td>
<td></td>
<td>First Niagara Center</td>
<td>Rochester Americans</td>
<td>8 mai 2021 at 11:53</td>
<td>27</td>
<td>167</td>
<td>99</td>
<td>119</td>
<td>77</td></tr>
<tr><td>Calgary Flames</td>
<td>Alex See-Cret</td>
<td></td>
<td><a href="mailto:Alex_50@hotmail.com">Alex_50@hotmail.com</a></td>
<td></td>
<td>Scotiabank Saddledome</td>
<td>Joliette Sportif</td>
<td>10 mai 2021 at 18:55</td>
<td>41</td>
<td>94</td>
<td>59</td>
<td>104</td>
<td>49</td></tr>
<tr><td>Carolina Hurricanes</td>
<td>Richard Gadbois</td>
<td></td>
<td><a href="mailto:carolina2021.rick@hotmail.com">carolina2021.rick@hotmail.com</a></td>
<td></td>
<td>RBC Center</td>
<td>Charlotte Checkers</td>
<td>10 mai 2021 at 12:46</td>
<td>73</td>
<td>127</td>
<td>80</td>
<td>114</td>
<td>35</td></tr>
<tr><td>Chicago Blackhawks</td>
<td>Olivier Coudé</td>
<td></td>
<td><a href="mailto:vier_c88@hotmail.com">vier_c88@hotmail.com</a></td>
<td></td>
<td>United Center</td>
<td>Rockford IceHogs</td>
<td>21 avril 2021 at 05:39</td>
<td>17</td>
<td>67</td>
<td>40</td>
<td>65</td>
<td>32</td></tr>
<tr><td>Colorado Avalanche</td>
<td>Tony Roy</td>
<td></td>
<td><a href="mailto:tonyboutch@hotmail.com">tonyboutch@hotmail.com</a></td>
<td></td>
<td>Pepsi Center</td>
<td>Lake Erie Monsters</td>
<td>10 mai 2021 at 19:08</td>
<td>60</td>
<td>82</td>
<td>72</td>
<td>78</td>
<td>24</td></tr>
<tr><td>Columbus Blue Jackets</td>
<td>David Côté</td>
<td></td>
<td><a href="mailto:divad_86@hotmail.com">divad_86@hotmail.com</a></td>
<td></td>
<td>Nationwide Arena</td>
<td>Springfield Falcons</td>
<td>10 mai 2021 at 18:20</td>
<td>66</td>
<td>193</td>
<td>82</td>
<td>145</td>
<td>81</td></tr>
<tr><td>Dallas Stars</td>
<td>Benoît Dicaire</td>
<td></td>
<td><a href="mailto:bendicaire@hotmail.com">bendicaire@hotmail.com</a></td>
<td></td>
<td>American Airlines Center</td>
<td>Las Vegas Gamblers</td>
<td>9 mai 2021 at 05:32</td>
<td>65</td>
<td>158</td>
<td>98</td>
<td>151</td>
<td>74</td></tr>
<tr><td>Detroit Red Wings</td>
<td>J-P Vandal</td>
<td>tanenr de perdre en criss</td>
<td><a href="mailto:Vandal316@hotmail.com">Vandal316@hotmail.com</a></td>
<td></td>
<td>Joe Louis Arena</td>
<td>Grand Rapids Griffins</td>
<td>6 mai 2021 at 18:25</td>
<td>29</td>
<td>169</td>
<td>96</td>
<td>156</td>
<td>49</td></tr>
<tr><td>Edmonton Oilers</td>
<td>Bernard Martel</td>
<td></td>
<td><a href="mailto:mben33@hotmail.com">mben33@hotmail.com</a></td>
<td></td>
<td>Rexall Place</td>
<td>Oklahoma City Barons</td>
<td>9 mai 2021 at 12:04</td>
<td>28</td>
<td>91</td>
<td>64</td>
<td>97</td>
<td>30</td></tr>
<tr><td>Florida Panthers</td>
<td>Mikaël Brassard</td>
<td></td>
<td><a href="mailto:beavers026@gmail.com">beavers026@gmail.com</a></td>
<td></td>
<td>BankAtlantic Center</td>
<td>San Antonio Rampage</td>
<td>9 mai 2021 at 12:03</td>
<td>56</td>
<td>111</td>
<td>73</td>
<td>97</td>
<td>44</td></tr>
<tr><td>Los Angeles Kings</td>
<td>Steeve Garneau</td>
<td></td>
<td><a href="mailto:srgarneau@hotmail.com">srgarneau@hotmail.com</a></td>
<td></td>
<td>Staples Center</td>
<td>Gatineau Olympiques</td>
<td>10 mai 2021 at 05:20</td>
<td>28</td>
<td>109</td>
<td>53</td>
<td>85</td>
<td>40</td></tr>
<tr><td>Minnesota Wild</td>
<td>Alain Bosch</td>
<td></td>
<td><a href="mailto:alain.bosch@hotmail.com">alain.bosch@hotmail.com</a></td>
<td></td>
<td>Xcel Energy Center</td>
<td>Houston Aeros</td>
<td>8 mai 2021 at 05:26</td>
<td>52</td>
<td>94</td>
<td>46</td>
<td>93</td>
<td>28</td></tr>
<tr><td>Montreal Canadiens</td>
<td>Simon Brassard</td>
<td></td>
<td><a href="mailto:ashligue@hotmail.com">ashligue@hotmail.com</a></td>
<td></td>
<td>Bell Centre</td>
<td>Trois-Rivières Draveurs</td>
<td>9 mai 2021 at 18:28</td>
<td>92</td>
<td>57</td>
<td>38</td>
<td>64</td>
<td>16</td></tr>
<tr><td>Nashville Predators</td>
<td>Mathieu Boudreault</td>
<td></td>
<td><a href="mailto:matt7424@hotmail.com">matt7424@hotmail.com</a></td>
<td></td>
<td>Bridgestone Arena</td>
<td>Milwaukee Admirals</td>
<td>10 mai 2021 at 18:55</td>
<td>38</td>
<td>92</td>
<td>44</td>
<td>66</td>
<td>32</td></tr>
<tr><td>New Jersey Devils</td>
<td>Yannick Ferland</td>
<td></td>
<td><a href="mailto:yferland75@hotmail.com">yferland75@hotmail.com</a></td>
<td></td>
<td>Prudential Center</td>
<td>Albany Devils</td>
<td>10 mai 2021 at 13:01</td>
<td>62</td>
<td>96</td>
<td>66</td>
<td>99</td>
<td>31</td></tr>
<tr><td>New York Islanders</td>
<td>Maxime-Olivier Mercier</td>
<td></td>
<td><a href="mailto:maxolimer@gmail.com">maxolimer@gmail.com</a></td>
<td></td>
<td>Nassau Coliseum</td>
<td>Bridgeport Sound Tigers</td>
<td>1 mai 2021 at 04:56</td>
<td>28</td>
<td>181</td>
<td>132</td>
<td>148</td>
<td>40</td></tr>
<tr><td>New York Rangers</td>
<td>Francis Bérubé</td>
<td></td>
<td><a href="mailto:frankidikidi@hotmail.com">frankidikidi@hotmail.com</a></td>
<td></td>
<td>Madison Square Garden</td>
<td>Connecticut Whale</td>
<td>10 mai 2021 at 18:20</td>
<td>38</td>
<td>130</td>
<td>59</td>
<td>98</td>
<td>37</td></tr>
<tr><td>Ottawa Senators</td>
<td>Éric Santerre</td>
<td></td>
<td><a href="mailto:bongpwett@hotmail.com">bongpwett@hotmail.com</a></td>
<td></td>
<td>Centre Canadian Tire</td>
<td>Binghamton Senators</td>
<td>10 mai 2021 at 12:45</td>
<td>44</td>
<td>174</td>
<td>82</td>
<td>137</td>
<td>102</td></tr>
<tr><td>Philadelphia Flyers</td>
<td>Mathieu Veilleux / Vincent Deslauriers</td>
<td></td>
<td><a href="mailto:mathieuveilleux7@gmail.com">mathieuveilleux7@gmail.com</a></td>
<td></td>
<td>Wells Fargo Center</td>
<td>Adirondack Phantoms</td>
<td>9 mai 2021 at 18:26</td>
<td>35</td>
<td>74</td>
<td>46</td>
<td>90</td>
<td>37</td></tr>
<tr><td>Pittsburgh Penguins</td>
<td>Yannick Vézina-Roy / Félix Julien</td>
<td></td>
<td><a href="mailto:yannickvezinaroy@gmail.com">yannickvezinaroy@gmail.com</a></td>
<td></td>
<td>Consol Energy Center</td>
<td>Wilkes-Barre/Scranton Penguins</td>
<td>10 mai 2021 at 18:58</td>
<td>54</td>
<td>68</td>
<td>28</td>
<td>68</td>
<td>43</td></tr>
<tr><td>Quebec Nordiques</td>
<td>Olivier Madgin</td>
<td></td>
<td><a href="mailto:oliviermadgin@gmail.com">oliviermadgin@gmail.com</a></td>
<td></td>
<td>Colisée Pepsi</td>
<td>Chicoutimi Saguenéens</td>
<td>6 mai 2021 at 18:24</td>
<td>33</td>
<td>107</td>
<td>77</td>
<td>114</td>
<td>28</td></tr>
<tr><td>San Jose Sharks</td>
<td>Daniel Mercier</td>
<td></td>
<td><a href="mailto:mercdan@hotmail.com">mercdan@hotmail.com</a></td>
<td></td>
<td>HP Pavilion</td>
<td>Rouyn-Noranda Huskies</td>
<td>9 mai 2021 at 05:32</td>
<td>41</td>
<td>72</td>
<td>56</td>
<td>86</td>
<td>29</td></tr>
<tr><td>Seattle Kraken</td>
<td>Martin Mercier</td>
<td></td>
<td><a href="mailto:Tipoucostaud@gmail.com">Tipoucostaud@gmail.com</a></td>
<td></td>
<td>Amazon Center</td>
<td>Mercer Island Hafgufa</td>
<td>7 mai 2021 at 03:47</td>
<td>90</td>
<td>80</td>
<td>49</td>
<td>98</td>
<td>38</td></tr>
<tr><td>St. Louis Blues</td>
<td>Stéphane Paquette</td>
<td></td>
<td><a href="mailto:cl.301@hotmail.com">cl.301@hotmail.com</a></td>
<td></td>
<td>Scottrade Center</td>
<td>Peoria Rivermen</td>
<td>10 mai 2021 at 12:46</td>
<td>69</td>
<td>35</td>
<td>23</td>
<td>52</td>
<td>17</td></tr>
<tr><td>Tampa Bay Lightning</td>
<td>Felix Fortier</td>
<td></td>
<td><a href="mailto:Felix.fortier@live.com">Felix.fortier@live.com</a></td>
<td></td>
<td>Tampa Bay Times Forum</td>
<td>Norfolk Admirals</td>
<td>8 mai 2021 at 19:54</td>
<td>36</td>
<td>138</td>
<td>89</td>
<td>101</td>
<td>39</td></tr>
<tr><td>Toronto Maple Leafs</td>
<td>Sébastien Tremblay</td>
<td></td>
<td><a href="mailto:pocketrocket114@hotmail.com">pocketrocket114@hotmail.com</a></td>
<td></td>
<td>Air Canada Center</td>
<td>Roberval Dwarfs</td>
<td>10 mai 2021 at 05:21</td>
<td>25</td>
<td>144</td>
<td>88</td>
<td>118</td>
<td>63</td></tr>
<tr><td>Vancouver Canucks</td>
<td>Jason Perreault</td>
<td></td>
<td><a href="mailto:jape2257@hotmail.com">jape2257@hotmail.com</a></td>
<td></td>
<td>Rogers Arena</td>
<td>Chicago Wolves</td>
<td>3 mai 2021 at 19:16</td>
<td>38</td>
<td>70</td>
<td>34</td>
<td>85</td>
<td>17</td></tr>
<tr><td>Vegas Golden Knights</td>
<td>Jonathan Légaré</td>
<td></td>
<td><a href="mailto:insanejoe@hotmail.com">insanejoe@hotmail.com</a></td>
<td></td>
<td>T-Mobile Arena</td>
<td>Henderson Silver Knights</td>
<td>10 mai 2021 at 05:22</td>
<td>117</td>
<td>8</td>
<td>6</td>
<td>7</td>
<td>0</td></tr>
<tr><td>Washington Capitals</td>
<td>Jean-Philippe Sauvé</td>
<td></td>
<td><a href="mailto:gearfix@hotmail.com">gearfix@hotmail.com</a></td>
<td></td>
<td>Verizon Center</td>
<td>CCCP Red Army</td>
<td>30 avril 2021 at 15:52</td>
<td>25</td>
<td>110</td>
<td>73</td>
<td>123</td>
<td>23</td></tr>
<tr><td>Winnipeg Jets</td>
<td>Andrew Shaughnessy</td>
<td></td>
<td><a href="mailto:a.shaughnessy1@gmail.com">a.shaughnessy1@gmail.com</a></td>
<td></td>
<td>MTS Centre</td>
<td>Manitoba Moose</td>
<td>22 avril 2021 at 23:23</td>
<td>23</td>
<td>112</td>
<td>68</td>
<td>96</td>
<td>52</td></tr>
</tbody></table><br />
<a href="mailto:dominik.cocozza@hotmail.ca;crazyboug72@hotmail.com;brabant66@hotmail.com;jbgelinas@hotmail.ca;Alex_50@hotmail.com;carolina2021.rick@hotmail.com;vier_c88@hotmail.com;tonyboutch@hotmail.com;divad_86@hotmail.com;bendicaire@hotmail.com;Vandal316@hotmail.com;mben33@hotmail.com;beavers026@gmail.com;srgarneau@hotmail.com;alain.bosch@hotmail.com;ashligue@hotmail.com;matt7424@hotmail.com;yferland75@hotmail.com;maxolimer@gmail.com;frankidikidi@hotmail.com;bongpwett@hotmail.com;mathieuveilleux7@gmail.com;yannickvezinaroy@gmail.com;oliviermadgin@gmail.com;mercdan@hotmail.com;Tipoucostaud@gmail.com;cl.301@hotmail.com;Felix.fortier@live.com;pocketrocket114@hotmail.com;jape2257@hotmail.com;insanejoe@hotmail.com;gearfix@hotmail.com;a.shaughnessy1@gmail.com">Email all General Manager</a>
<?php include "Footer.php";?>
