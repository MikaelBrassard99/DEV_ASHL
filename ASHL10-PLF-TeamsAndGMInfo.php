<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Teams And GM Info</title>
<script src="ASHL10-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.3.3 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL10-PLF.css" rel="stylesheet" type="text/css" />
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
<td>3 septembre 2020 at 06:22</td>
<td>6</td>
<td>138</td>
<td>76</td>
<td>115</td>
<td>47</td></tr>
<tr><td>Arizona Coyotes</td>
<td>Maxime Bourassa Guillemette</td>
<td></td>
<td><a href="mailto:crazyboug72@hotmail.com">crazyboug72@hotmail.com</a></td>
<td></td>
<td>Gila River Arena</td>
<td>Portland Pirates</td>
<td>30 octobre 2020 at 05:57</td>
<td>24</td>
<td>44</td>
<td>27</td>
<td>56</td>
<td>19</td></tr>
<tr><td>Boston Bruins</td>
<td>Alexandre Brabant</td>
<td></td>
<td><a href="mailto:brabant66@hotmail.com">brabant66@hotmail.com</a></td>
<td></td>
<td>TD Garden</td>
<td>Providence Bruins</td>
<td>23 octobre 2020 at 05:33</td>
<td>7</td>
<td>86</td>
<td>40</td>
<td>83</td>
<td>43</td></tr>
<tr><td>Buffalo Sabres</td>
<td>Jean-Bruno Gélinas</td>
<td></td>
<td><a href="mailto:jbgelinas@hotmail.ca">jbgelinas@hotmail.ca</a></td>
<td></td>
<td>First Niagara Center</td>
<td>Rochester Americans</td>
<td>31 août 2020 at 05:52</td>
<td>2</td>
<td>151</td>
<td>84</td>
<td>98</td>
<td>70</td></tr>
<tr><td>Calgary Flames</td>
<td>Alex See-Cret</td>
<td></td>
<td><a href="mailto:Alex_50@hotmail.com">Alex_50@hotmail.com</a></td>
<td></td>
<td>Scotiabank Saddledome</td>
<td>Joliette Sportif</td>
<td>26 octobre 2020 at 07:08</td>
<td>9</td>
<td>89</td>
<td>51</td>
<td>95</td>
<td>50</td></tr>
<tr><td>Carolina Hurricanes</td>
<td>Daniel Turgeon</td>
<td></td>
<td><a href="mailto:daniel.turgeon@live.com">daniel.turgeon@live.com</a></td>
<td></td>
<td>RBC Center</td>
<td>Charlotte Checkers</td>
<td>11 août 2020 at 06:35</td>
<td>4</td>
<td>121</td>
<td>68</td>
<td>100</td>
<td>34</td></tr>
<tr><td>Chicago Blackhawks</td>
<td>Olivier Coudé</td>
<td></td>
<td><a href="mailto:vier_c88@hotmail.com">vier_c88@hotmail.com</a></td>
<td></td>
<td>United Center</td>
<td>Rockford IceHogs</td>
<td>10 novembre 2020 at 19:11</td>
<td>12</td>
<td>58</td>
<td>32</td>
<td>56</td>
<td>26</td></tr>
<tr><td>Colorado Avalanche</td>
<td>Tony Roy</td>
<td></td>
<td><a href="mailto:tonyboutch@hotmail.com">tonyboutch@hotmail.com</a></td>
<td></td>
<td>Pepsi Center</td>
<td>Lake Erie Monsters</td>
<td>19 octobre 2020 at 06:08</td>
<td>14</td>
<td>71</td>
<td>63</td>
<td>60</td>
<td>15</td></tr>
<tr><td>Columbus Blue Jackets</td>
<td>David Côté</td>
<td></td>
<td><a href="mailto:divad_86@hotmail.com">divad_86@hotmail.com</a></td>
<td></td>
<td>Nationwide Arena</td>
<td>Springfield Falcons</td>
<td>15 novembre 2020 at 00:38</td>
<td>21</td>
<td>185</td>
<td>71</td>
<td>135</td>
<td>81</td></tr>
<tr><td>Dallas Stars</td>
<td>Pierre-Luc Brisson</td>
<td></td>
<td><a href="mailto:ebeniste.plbrisson@gmail.com">ebeniste.plbrisson@gmail.com</a></td>
<td></td>
<td>American Airlines Center</td>
<td>Las Vegas Gamblers</td>
<td>2 octobre 2020 at 05:53</td>
<td>2</td>
<td>154</td>
<td>94</td>
<td>138</td>
<td>68</td></tr>
<tr><td>Detroit Red Wings</td>
<td>J-P Vandal</td>
<td>Veaudry le ptit penis</td>
<td><a href="mailto:Vandal316@hotmail.com">Vandal316@hotmail.com</a></td>
<td></td>
<td>Joe Louis Arena</td>
<td>Grand Rapids Griffins</td>
<td>9 octobre 2020 at 05:54</td>
<td>4</td>
<td>149</td>
<td>84</td>
<td>133</td>
<td>43</td></tr>
<tr><td>Edmonton Oilers</td>
<td>Bernard Martel</td>
<td></td>
<td><a href="mailto:mben33@hotmail.com">mben33@hotmail.com</a></td>
<td></td>
<td>Rexall Place</td>
<td>Oklahoma City Barons</td>
<td>3 octobre 2020 at 23:29</td>
<td>6</td>
<td>78</td>
<td>55</td>
<td>81</td>
<td>27</td></tr>
<tr><td>Florida Panthers</td>
<td>Mikaël Brassard</td>
<td></td>
<td><a href="mailto:beavers026@gmail.com">beavers026@gmail.com</a></td>
<td></td>
<td>BankAtlantic Center</td>
<td>San Antonio Rampage</td>
<td>5 octobre 2020 at 17:09</td>
<td>9</td>
<td>102</td>
<td>64</td>
<td>86</td>
<td>42</td></tr>
<tr><td>Los Angeles Kings</td>
<td>Steeve Garneau</td>
<td></td>
<td><a href="mailto:srgarneau@hotmail.com">srgarneau@hotmail.com</a></td>
<td></td>
<td>Staples Center</td>
<td>Gatineau Olympiques</td>
<td>18 octobre 2020 at 06:38</td>
<td>9</td>
<td>94</td>
<td>43</td>
<td>72</td>
<td>37</td></tr>
<tr><td>Minnesota Wild</td>
<td>Alain Bosch</td>
<td></td>
<td><a href="mailto:alain.bosch@hotmail.com">alain.bosch@hotmail.com</a></td>
<td></td>
<td>Xcel Energy Center</td>
<td>Houston Aeros</td>
<td>2 octobre 2020 at 05:55</td>
<td>7</td>
<td>85</td>
<td>38</td>
<td>85</td>
<td>27</td></tr>
<tr><td>Montreal Canadiens</td>
<td>Simon Brassard</td>
<td></td>
<td><a href="mailto:ashligue@hotmail.com">ashligue@hotmail.com</a></td>
<td></td>
<td>Bell Centre</td>
<td>Trois-Rivières Draveurs</td>
<td>10 novembre 2020 at 04:25</td>
<td>24</td>
<td>50</td>
<td>33</td>
<td>55</td>
<td>15</td></tr>
<tr><td>Nashville Predators</td>
<td>Mathieu Boudreault</td>
<td></td>
<td><a href="mailto:matt7424@hotmail.com">matt7424@hotmail.com</a></td>
<td></td>
<td>Bridgestone Arena</td>
<td>Milwaukee Admirals</td>
<td>9 novembre 2020 at 05:19</td>
<td>5</td>
<td>85</td>
<td>42</td>
<td>54</td>
<td>33</td></tr>
<tr><td>New Jersey Devils</td>
<td>Yannick Ferland</td>
<td></td>
<td><a href="mailto:yferland75@hotmail.com">yferland75@hotmail.com</a></td>
<td></td>
<td>Prudential Center</td>
<td>Albany Devils</td>
<td>5 octobre 2020 at 05:11</td>
<td>13</td>
<td>91</td>
<td>60</td>
<td>89</td>
<td>31</td></tr>
<tr><td>New York Islanders</td>
<td>Maxime-Olivier Mercier</td>
<td></td>
<td><a href="mailto:maxolimer@gmail.com">maxolimer@gmail.com</a></td>
<td></td>
<td>Nassau Coliseum</td>
<td>Bridgeport Sound Tigers</td>
<td>8 octobre 2020 at 07:49</td>
<td>6</td>
<td>167</td>
<td>120</td>
<td>131</td>
<td>36</td></tr>
<tr><td>New York Rangers</td>
<td>Francis Bérubé</td>
<td></td>
<td><a href="mailto:frankidikidi@hotmail.com">frankidikidi@hotmail.com</a></td>
<td></td>
<td>Madison Square Garden</td>
<td>Connecticut Whale</td>
<td>30 septembre 2020 at 17:43</td>
<td>6</td>
<td>129</td>
<td>54</td>
<td>94</td>
<td>38</td></tr>
<tr><td>Ottawa Senators</td>
<td>Éric Santerre</td>
<td></td>
<td><a href="mailto:bongpwett@hotmail.com">bongpwett@hotmail.com</a></td>
<td></td>
<td>Centre Canadian Tire</td>
<td>Binghamton Senators</td>
<td>16 octobre 2020 at 15:12</td>
<td>11</td>
<td>154</td>
<td>66</td>
<td>116</td>
<td>94</td></tr>
<tr><td>Philadelphia Flyers</td>
<td>Mathieu Veilleux</td>
<td></td>
<td><a href="mailto:mathieuveilleux7@gmail.com">mathieuveilleux7@gmail.com</a></td>
<td></td>
<td>Wells Fargo Center</td>
<td>Adirondack Phantoms</td>
<td>31 août 2020 at 05:52</td>
<td>2</td>
<td>65</td>
<td>38</td>
<td>74</td>
<td>37</td></tr>
<tr><td>Pittsburgh Penguins</td>
<td>Éric Simard</td>
<td></td>
<td><a href="mailto:erik.simard@live.ca">erik.simard@live.ca</a></td>
<td></td>
<td>Consol Energy Center</td>
<td>Wilkes-Barre/Scranton Penguins</td>
<td>20 octobre 2020 at 06:15</td>
<td>31</td>
<td>59</td>
<td>21</td>
<td>58</td>
<td>41</td></tr>
<tr><td>Quebec Nordiques</td>
<td>Olivier Madgin</td>
<td></td>
<td><a href="mailto:oliviermadgin@gmail.com">oliviermadgin@gmail.com</a></td>
<td></td>
<td>Colisée Pepsi</td>
<td>Chicoutimi Saguenéens</td>
<td>7 octobre 2020 at 05:20</td>
<td>12</td>
<td>94</td>
<td>68</td>
<td>105</td>
<td>22</td></tr>
<tr><td>San Jose Sharks</td>
<td>Daniel Mercier</td>
<td></td>
<td><a href="mailto:mercdan@hotmail.com">mercdan@hotmail.com</a></td>
<td></td>
<td>HP Pavilion</td>
<td>Rouyn-Noranda Huskies</td>
<td>15 octobre 2020 at 04:51</td>
<td>9</td>
<td>71</td>
<td>53</td>
<td>79</td>
<td>34</td></tr>
<tr><td>Seattle Kraken</td>
<td>Martin Mercier</td>
<td></td>
<td><a href="mailto:Tipoucostaud@gmail.com">Tipoucostaud@gmail.com</a></td>
<td></td>
<td>Amazon Center</td>
<td>Mercer Island Hafgufa</td>
<td>23 septembre 2020 at 05:39</td>
<td>14</td>
<td>70</td>
<td>41</td>
<td>84</td>
<td>36</td></tr>
<tr><td>St. Louis Blues</td>
<td>Mélissa Roussel</td>
<td></td>
<td><a href="mailto:melissa22janvier80@live.ca">melissa22janvier80@live.ca</a></td>
<td></td>
<td>Scottrade Center</td>
<td>Peoria Rivermen</td>
<td>5 octobre 2020 at 17:09</td>
<td>18</td>
<td>29</td>
<td>14</td>
<td>43</td>
<td>17</td></tr>
<tr><td>Tampa Bay Lightning</td>
<td>Felix Fortier</td>
<td></td>
<td><a href="mailto:Felix.fortier@live.com">Felix.fortier@live.com</a></td>
<td></td>
<td>Tampa Bay Times Forum</td>
<td>Norfolk Admirals</td>
<td>26 septembre 2020 at 17:31</td>
<td>5</td>
<td>131</td>
<td>85</td>
<td>92</td>
<td>38</td></tr>
<tr><td>Toronto Maple Leafs</td>
<td>Sébastien Tremblay</td>
<td></td>
<td><a href="mailto:pocketrocket114@hotmail.com">pocketrocket114@hotmail.com</a></td>
<td></td>
<td>Air Canada Center</td>
<td>Roberval Dwarfs</td>
<td>2 août 2020 at 08:06</td>
<td>1</td>
<td>134</td>
<td>81</td>
<td>107</td>
<td>63</td></tr>
<tr><td>Vancouver Canucks</td>
<td>Jason Perreault</td>
<td></td>
<td><a href="mailto:jape2257@hotmail.com">jape2257@hotmail.com</a></td>
<td></td>
<td>Rogers Arena</td>
<td>Chicago Wolves</td>
<td>3 octobre 2020 at 06:56</td>
<td>8</td>
<td>60</td>
<td>29</td>
<td>73</td>
<td>12</td></tr>
<tr><td>Vegas Golden Knights</td>
<td>Jonathan Légaré</td>
<td></td>
<td><a href="mailto:insanejoe@hotmail.com">insanejoe@hotmail.com</a></td>
<td></td>
<td>T-Mobile Arena</td>
<td>Henderson Silver Knights</td>
<td>18 octobre 2020 at 06:36</td>
<td>19</td>
<td>8</td>
<td>7</td>
<td>3</td>
<td>1</td></tr>
<tr><td>Washington Capitals</td>
<td>Joey Pronovost</td>
<td></td>
<td><a href="mailto:joeypronovost@hotmail.com">joeypronovost@hotmail.com</a></td>
<td></td>
<td>Verizon Center</td>
<td>Landshut Cannibals</td>
<td>2 août 2020 at 07:58</td>
<td>1</td>
<td>100</td>
<td>67</td>
<td>106</td>
<td>22</td></tr>
<tr><td>Winnipeg Jets</td>
<td>Maxyme Veaudry</td>
<td></td>
<td><a href="mailto:max_veaudry@hotmail.com">max_veaudry@hotmail.com</a></td>
<td></td>
<td>MTS Centre</td>
<td>Manitoba Moose</td>
<td>8 octobre 2020 at 07:50</td>
<td>15</td>
<td>100</td>
<td>61</td>
<td>80</td>
<td>41</td></tr>
</tbody></table><br />
<a href="mailto:dominik.cocozza@hotmail.ca;crazyboug72@hotmail.com;brabant66@hotmail.com;jbgelinas@hotmail.ca;Alex_50@hotmail.com;daniel.turgeon@live.com;vier_c88@hotmail.com;tonyboutch@hotmail.com;divad_86@hotmail.com;ebeniste.plbrisson@gmail.com;Vandal316@hotmail.com;mben33@hotmail.com;beavers026@gmail.com;srgarneau@hotmail.com;alain.bosch@hotmail.com;ashligue@hotmail.com;matt7424@hotmail.com;yferland75@hotmail.com;maxolimer@gmail.com;frankidikidi@hotmail.com;bongpwett@hotmail.com;mathieuveilleux7@gmail.com;erik.simard@live.ca;oliviermadgin@gmail.com;mercdan@hotmail.com;Tipoucostaud@gmail.com;melissa22janvier80@live.ca;Felix.fortier@live.com;pocketrocket114@hotmail.com;jape2257@hotmail.com;insanejoe@hotmail.com;joeypronovost@hotmail.com;max_veaudry@hotmail.com">Email all General Manager</a>
<?php include "Footer.php";?>
