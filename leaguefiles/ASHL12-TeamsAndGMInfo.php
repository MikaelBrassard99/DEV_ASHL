<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Teams And GM Info</title>
<script src="ASHL12.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.3.3 - ASHL12-STHS.db - ASHL12-STHSCareerStat.db"/>
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
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
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
<td>17 mars 2022 at 09:21</td>
<td>0</td>
<td>152</td>
<td>89</td>
<td>130</td>
<td>52</td></tr>
<tr><td>Arizona Coyotes</td>
<td>Maxime Bourassa Guillemette</td>
<td></td>
<td><a href="mailto:crazyboug72@hotmail.com">crazyboug72@hotmail.com</a></td>
<td></td>
<td>Gila River Arena</td>
<td>The Nuuk Vikings</td>
<td>30 avril 2022 at 08:24</td>
<td>0</td>
<td>60</td>
<td>41</td>
<td>80</td>
<td>24</td></tr>
<tr><td>Boston Bruins</td>
<td>Jean-François Blouin</td>
<td></td>
<td><a href="mailto:djieff84@live.ca">djieff84@live.ca</a></td>
<td></td>
<td>TD Garden</td>
<td>Providence Bruins</td>
<td>23 mars 2022 at 11:09</td>
<td>0</td>
<td>101</td>
<td>56</td>
<td>95</td>
<td>45</td></tr>
<tr><td>Buffalo Sabres</td>
<td>Jean-Bruno Gélinas</td>
<td></td>
<td><a href="mailto:jbgelinas@hotmail.ca">jbgelinas@hotmail.ca</a></td>
<td></td>
<td>KeyBank Center</td>
<td>Rochester Americans</td>
<td>10 avril 2022 at 13:49</td>
<td>0</td>
<td>176</td>
<td>114</td>
<td>132</td>
<td>78</td></tr>
<tr><td>Calgary Flames</td>
<td>Alex See-Cret</td>
<td></td>
<td><a href="mailto:Alex_50@hotmail.com">Alex_50@hotmail.com</a></td>
<td></td>
<td>Scotiabank Saddledome</td>
<td>Joliette Sportif</td>
<td>17 mars 2022 at 19:02</td>
<td>0</td>
<td>102</td>
<td>65</td>
<td>110</td>
<td>53</td></tr>
<tr><td>Carolina Hurricanes</td>
<td>Mathieu Richard</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td>PNC Arena</td>
<td>Charlotte Checkers</td>
<td>3 avril 2022 at 06:43</td>
<td>0</td>
<td>139</td>
<td>88</td>
<td>121</td>
<td>42</td></tr>
<tr><td>Chicago Blackhawks</td>
<td>William Mercier</td>
<td></td>
<td><a href="mailto:Wmercier9@gmail.com">Wmercier9@gmail.com</a></td>
<td></td>
<td>United Center</td>
<td>Blainville-Boisbriand Armada</td>
<td>3 avril 2022 at 06:46</td>
<td>0</td>
<td>71</td>
<td>43</td>
<td>66</td>
<td>35</td></tr>
<tr><td>Colorado Avalanche</td>
<td>Tony Roy</td>
<td></td>
<td><a href="mailto:tonyboutch@hotmail.com">tonyboutch@hotmail.com</a></td>
<td></td>
<td>Ball Arena</td>
<td>Lake Erie Monsters</td>
<td>24 mars 2022 at 19:13</td>
<td>0</td>
<td>92</td>
<td>79</td>
<td>88</td>
<td>32</td></tr>
<tr><td>Columbus Blue Jackets</td>
<td>David Côté</td>
<td></td>
<td><a href="mailto:divad_86@hotmail.com">divad_86@hotmail.com</a></td>
<td></td>
<td>Nationwide Arena</td>
<td>Springfield Falcons</td>
<td>21 mars 2022 at 10:09</td>
<td>0</td>
<td>200</td>
<td>88</td>
<td>152</td>
<td>81</td></tr>
<tr><td>Dallas Stars</td>
<td>Benoît Dicaire</td>
<td></td>
<td><a href="mailto:bendicaire@hotmail.com">bendicaire@hotmail.com</a></td>
<td></td>
<td>American Airlines Center</td>
<td>Nunavik Natturaliit</td>
<td>18 avril 2022 at 08:55</td>
<td>0</td>
<td>159</td>
<td>99</td>
<td>152</td>
<td>74</td></tr>
<tr><td>Detroit Red Wings</td>
<td>J-P Vandal</td>
<td>GO WINGS GO!</td>
<td><a href="mailto:Vandal316@hotmail.com">Vandal316@hotmail.com</a></td>
<td></td>
<td>Little Caesars Arena</td>
<td>Grand Rapids Griffins</td>
<td>20 avril 2022 at 07:17</td>
<td>0</td>
<td>181</td>
<td>102</td>
<td>168</td>
<td>56</td></tr>
<tr><td>Edmonton Oilers</td>
<td>Bernard Martel</td>
<td></td>
<td><a href="mailto:mben33@hotmail.com">mben33@hotmail.com</a></td>
<td></td>
<td>Rogers Place</td>
<td>Oklahoma City Barons</td>
<td>13 mars 2022 at 12:58</td>
<td>0</td>
<td>102</td>
<td>73</td>
<td>107</td>
<td>32</td></tr>
<tr><td>Florida Panthers</td>
<td>Mikaël Brassard</td>
<td></td>
<td><a href="mailto:beavers026@gmail.com">beavers026@gmail.com</a></td>
<td></td>
<td>FLA Live Arena</td>
<td>San Antonio Rampage</td>
<td>7 avril 2022 at 05:57</td>
<td>0</td>
<td>118</td>
<td>77</td>
<td>104</td>
<td>46</td></tr>
<tr><td>Los Angeles Kings</td>
<td>Steeve Garneau</td>
<td></td>
<td><a href="mailto:srgarneau@hotmail.com">srgarneau@hotmail.com</a></td>
<td></td>
<td>Staples Center</td>
<td>Gatineau Olympiques</td>
<td>20 avril 2022 at 07:17</td>
<td>0</td>
<td>128</td>
<td>66</td>
<td>92</td>
<td>45</td></tr>
<tr><td>Minnesota Wild</td>
<td>Alain Bosch</td>
<td></td>
<td><a href="mailto:alain.bosch@hotmail.com">alain.bosch@hotmail.com</a></td>
<td></td>
<td>Xcel Energy Center</td>
<td>Houston Aeros</td>
<td>27 avril 2022 at 05:48</td>
<td>0</td>
<td>107</td>
<td>55</td>
<td>99</td>
<td>30</td></tr>
<tr><td>Montreal Canadiens</td>
<td>Simon Brassard</td>
<td></td>
<td><a href="mailto:ashligue@hotmail.com">ashligue@hotmail.com</a></td>
<td></td>
<td>Bell Centre</td>
<td>Trois-Rivières Lions</td>
<td>3 avril 2022 at 06:48</td>
<td>0</td>
<td>69</td>
<td>47</td>
<td>72</td>
<td>17</td></tr>
<tr><td>Nashville Predators</td>
<td>Mathieu Boudreault</td>
<td></td>
<td><a href="mailto:matt7424@hotmail.com">matt7424@hotmail.com</a></td>
<td></td>
<td>Bridgestone Arena</td>
<td>Milwaukee Admirals</td>
<td>19 mars 2022 at 21:10</td>
<td>0</td>
<td>101</td>
<td>49</td>
<td>73</td>
<td>40</td></tr>
<tr><td>New Jersey Devils</td>
<td>Yannick Ferland</td>
<td></td>
<td><a href="mailto:yferland75@hotmail.com">yferland75@hotmail.com</a></td>
<td></td>
<td>Prudential Center</td>
<td>Albany Devils</td>
<td>16 avril 2022 at 03:57</td>
<td>0</td>
<td>107</td>
<td>73</td>
<td>112</td>
<td>35</td></tr>
<tr><td>New York Islanders</td>
<td>Maxime-Olivier Mercier</td>
<td></td>
<td><a href="mailto:maxolimer@gmail.com">maxolimer@gmail.com</a></td>
<td></td>
<td>UBS Arena</td>
<td>Bridgeport Sound Tigers</td>
<td>18 mars 2022 at 08:09</td>
<td>0</td>
<td>191</td>
<td>140</td>
<td>159</td>
<td>42</td></tr>
<tr><td>New York Rangers</td>
<td>Francis Bérubé</td>
<td></td>
<td><a href="mailto:frankidikidi@hotmail.com">frankidikidi@hotmail.com</a></td>
<td></td>
<td>Madison Square Garden</td>
<td>Connecticut Whale</td>
<td>30 avril 2022 at 22:56</td>
<td>0</td>
<td>143</td>
<td>69</td>
<td>110</td>
<td>37</td></tr>
<tr><td>Ottawa Senators</td>
<td>Éric Santerre</td>
<td></td>
<td><a href="mailto:bongpwett@hotmail.com">bongpwett@hotmail.com</a></td>
<td></td>
<td>Centre Canadian Tire</td>
<td>Binghamton Senators</td>
<td>2 avril 2022 at 07:38</td>
<td>0</td>
<td>183</td>
<td>88</td>
<td>148</td>
<td>103</td></tr>
<tr><td>Philadelphia Flyers</td>
<td>Mathieu Veilleux</td>
<td></td>
<td><a href="mailto:mathieuveilleux7@gmail.com">mathieuveilleux7@gmail.com</a></td>
<td></td>
<td>Wells Fargo Center</td>
<td>Adirondack Phantoms</td>
<td>28 mai 2022 at 09:35</td>
<td>1</td>
<td>81</td>
<td>53</td>
<td>101</td>
<td>40</td></tr>
<tr><td>Pittsburgh Penguins</td>
<td>Yannick Vézina-Roy / Félix Julien</td>
<td></td>
<td><a href="mailto:yannickvezinaroy@gmail.com">yannickvezinaroy@gmail.com</a></td>
<td></td>
<td>PPG Paints Arena</td>
<td>Wilkes-Barre/Scranton Penguins</td>
<td>11 mai 2022 at 06:31</td>
<td>0</td>
<td>77</td>
<td>36</td>
<td>76</td>
<td>43</td></tr>
<tr><td>Quebec Nordiques</td>
<td>Olivier Madgin</td>
<td></td>
<td><a href="mailto:oliviermadgin@gmail.com">oliviermadgin@gmail.com</a></td>
<td></td>
<td>Colisée Pepsi</td>
<td>Chicoutimi Saguenéens</td>
<td>3 avril 2022 at 06:43</td>
<td>0</td>
<td>118</td>
<td>87</td>
<td>127</td>
<td>30</td></tr>
<tr><td>San Jose Sharks</td>
<td>Daniel Mercier</td>
<td></td>
<td><a href="mailto:mercdan@hotmail.com">mercdan@hotmail.com</a></td>
<td></td>
<td>SAP Center</td>
<td>Rouyn-Noranda Huskies</td>
<td>22 mars 2022 at 17:41</td>
<td>0</td>
<td>75</td>
<td>59</td>
<td>90</td>
<td>29</td></tr>
<tr><td>Seattle Kraken</td>
<td>Martin Mercier</td>
<td></td>
<td><a href="mailto:Tipoucostaud@gmail.com">Tipoucostaud@gmail.com</a></td>
<td></td>
<td>Climate Pledge Arena</td>
<td>Mercer Island Hafgufa</td>
<td>11 mai 2022 at 06:31</td>
<td>0</td>
<td>85</td>
<td>54</td>
<td>102</td>
<td>39</td></tr>
<tr><td>St. Louis Blues</td>
<td>Stéphane Paquette</td>
<td></td>
<td><a href="mailto:cl.301@hotmail.com">cl.301@hotmail.com</a></td>
<td></td>
<td>Enterprise Center</td>
<td>Verdun Junior</td>
<td>10 mai 2022 at 05:20</td>
<td>0</td>
<td>39</td>
<td>29</td>
<td>58</td>
<td>18</td></tr>
<tr><td>Tampa Bay Lightning</td>
<td>Felix Fortier</td>
<td></td>
<td><a href="mailto:Felix.fortier@live.com">Felix.fortier@live.com</a></td>
<td></td>
<td>Amalie Arena</td>
<td>Norfolk Admirals</td>
<td>1 mai 2022 at 09:30</td>
<td>0</td>
<td>146</td>
<td>94</td>
<td>109</td>
<td>44</td></tr>
<tr><td>Toronto Maple Leafs</td>
<td>Sébastien Tremblay</td>
<td></td>
<td><a href="mailto:pocketrocket114@hotmail.com">pocketrocket114@hotmail.com</a></td>
<td></td>
<td>Scotiabank Arena</td>
<td>Roberval Dwarfs</td>
<td>7 avril 2022 at 05:46</td>
<td>0</td>
<td>158</td>
<td>98</td>
<td>132</td>
<td>66</td></tr>
<tr><td>Vancouver Canucks</td>
<td>Jason Perreault</td>
<td></td>
<td><a href="mailto:jape2257@hotmail.com">jape2257@hotmail.com</a></td>
<td></td>
<td>Rogers Arena</td>
<td>Chicago Wolves</td>
<td>29 mars 2022 at 19:09</td>
<td>0</td>
<td>76</td>
<td>39</td>
<td>93</td>
<td>20</td></tr>
<tr><td>Vegas Golden Knights</td>
<td>Jonathan Légaré</td>
<td></td>
<td><a href="mailto:insanejoe@hotmail.com">insanejoe@hotmail.com</a></td>
<td></td>
<td>T-Mobile Arena</td>
<td>Henderson Silver Knights</td>
<td>17 avril 2022 at 07:00</td>
<td>0</td>
<td>9</td>
<td>7</td>
<td>12</td>
<td>0</td></tr>
<tr><td>Washington Capitals</td>
<td>Jean-Philippe Sauvé</td>
<td></td>
<td><a href="mailto:gearfix@hotmail.com">gearfix@hotmail.com</a></td>
<td></td>
<td>Capital One Arena</td>
<td>Chisinau Pelicans</td>
<td>19 mars 2022 at 15:16</td>
<td>0</td>
<td>126</td>
<td>86</td>
<td>138</td>
<td>26</td></tr>
<tr><td>Winnipeg Jets</td>
<td>Mélissa Roussel</td>
<td></td>
<td><a href="mailto:melissa22janvier80@live.ca">melissa22janvier80@live.ca</a></td>
<td></td>
<td>Canada Life Centre</td>
<td>Manitoba Moose</td>
<td>19 mars 2022 at 07:01</td>
<td>0</td>
<td>120</td>
<td>72</td>
<td>100</td>
<td>52</td></tr>
</tbody></table><br />
<a href="mailto:dominik.cocozza@hotmail.ca;crazyboug72@hotmail.com;djieff84@live.ca;jbgelinas@hotmail.ca;Alex_50@hotmail.com;Wmercier9@gmail.com;tonyboutch@hotmail.com;divad_86@hotmail.com;bendicaire@hotmail.com;Vandal316@hotmail.com;mben33@hotmail.com;beavers026@gmail.com;srgarneau@hotmail.com;alain.bosch@hotmail.com;ashligue@hotmail.com;matt7424@hotmail.com;yferland75@hotmail.com;maxolimer@gmail.com;frankidikidi@hotmail.com;bongpwett@hotmail.com;mathieuveilleux7@gmail.com;yannickvezinaroy@gmail.com;oliviermadgin@gmail.com;mercdan@hotmail.com;Tipoucostaud@gmail.com;cl.301@hotmail.com;Felix.fortier@live.com;pocketrocket114@hotmail.com;jape2257@hotmail.com;insanejoe@hotmail.com;gearfix@hotmail.com;melissa22janvier80@live.ca">Email all General Manager</a>
<?php include "Footer.php";?>
