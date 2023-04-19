<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Teams And GM Info</title>
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
<td>25 avril 2019 at 07:49</td>
<td>29</td>
<td>111</td>
<td>63</td>
<td>101</td>
<td>33</td></tr>
<tr><td>Arizona Coyotes</td>
<td>Maxime Bourassa Guillemette</td>
<td></td>
<td><a href="mailto:crazyboug72@hotmail.com">crazyboug72@hotmail.com</a></td>
<td></td>
<td>Gila River Arena</td>
<td>Portland Pirates</td>
<td>23 avril 2019 at 07:50</td>
<td>65</td>
<td>34</td>
<td>19</td>
<td>43</td>
<td>15</td></tr>
<tr><td>Boston Bruins</td>
<td>Alexandre Brabant</td>
<td></td>
<td><a href="mailto:brabant66@hotmail.com">brabant66@hotmail.com</a></td>
<td></td>
<td>TD Garden</td>
<td>Providence Bruins</td>
<td>19 avril 2019 at 10:28</td>
<td>32</td>
<td>68</td>
<td>27</td>
<td>66</td>
<td>32</td></tr>
<tr><td>Buffalo Sabres</td>
<td>Jean-Bruno Gélinas</td>
<td></td>
<td><a href="mailto:jbgelinas@hotmail.ca">jbgelinas@hotmail.ca</a></td>
<td></td>
<td>First Niagara Center</td>
<td>Rochester Americans</td>
<td>28 mars 2019 at 22:26</td>
<td>22</td>
<td>125</td>
<td>71</td>
<td>78</td>
<td>58</td></tr>
<tr><td>Calgary Flames</td>
<td>Alex See-Cret</td>
<td></td>
<td><a href="mailto:Alex_50@hotmail.com">Alex_50@hotmail.com</a></td>
<td></td>
<td>Scotiabank Saddledome</td>
<td>Joliette Sportif</td>
<td>13 avril 2019 at 11:39</td>
<td>44</td>
<td>60</td>
<td>43</td>
<td>72</td>
<td>24</td></tr>
<tr><td>Carolina Hurricanes</td>
<td>Daniel Turgeon</td>
<td></td>
<td><a href="mailto:daniel.turgeon@live.com">daniel.turgeon@live.com</a></td>
<td></td>
<td>RBC Center</td>
<td>Charlotte Checkers</td>
<td>22 mars 2019 at 08:05</td>
<td>32</td>
<td>104</td>
<td>57</td>
<td>88</td>
<td>27</td></tr>
<tr><td>Chicago Blackhawks</td>
<td>Olivier Coudé</td>
<td></td>
<td><a href="mailto:vier_c88@hotmail.com">vier_c88@hotmail.com</a></td>
<td></td>
<td>United Center</td>
<td>Rockford IceHogs</td>
<td>14 mai 2019 at 15:22</td>
<td>88</td>
<td>39</td>
<td>24</td>
<td>29</td>
<td>10</td></tr>
<tr><td>Colorado Avalanche</td>
<td>Tony Roy</td>
<td></td>
<td><a href="mailto:tonyboutch@hotmail.com">tonyboutch@hotmail.com</a></td>
<td></td>
<td>Pepsi Center</td>
<td>Lake Erie Monsters</td>
<td>30 avril 2019 at 07:32</td>
<td>91</td>
<td>53</td>
<td>50</td>
<td>44</td>
<td>14</td></tr>
<tr><td>Columbus Blue Jackets</td>
<td>Mathieu St-Laurent</td>
<td></td>
<td><a href="mailto:Stlaurentmathieu@outlook.com">Stlaurentmathieu@outlook.com</a></td>
<td></td>
<td>Nationwide Arena</td>
<td>Springfield Falcons</td>
<td>23 mars 2019 at 15:04</td>
<td>14</td>
<td>137</td>
<td>41</td>
<td>106</td>
<td>57</td></tr>
<tr><td>Dallas Stars</td>
<td>Pierre-Luc Brisson</td>
<td></td>
<td><a href="mailto:ebeniste.plbrisson@g­mail.com">ebeniste.plbrisson@g­mail.com</a></td>
<td></td>
<td>American Airlines Center</td>
<td>Las Vegas Gamblers</td>
<td>12 mars 2019 at 13:46</td>
<td>17</td>
<td>128</td>
<td>77</td>
<td>118</td>
<td>54</td></tr>
<tr><td>Detroit Red Wings</td>
<td>J-P Vandal</td>
<td></td>
<td><a href="mailto:Vandal316@hotmail.com">Vandal316@hotmail.com</a></td>
<td></td>
<td>Joe Louis Arena</td>
<td>Grand Rapids Griffins</td>
<td>23 mars 2019 at 15:01</td>
<td>23</td>
<td>121</td>
<td>62</td>
<td>114</td>
<td>33</td></tr>
<tr><td>Edmonton Oilers</td>
<td>Bernard Martel</td>
<td></td>
<td><a href="mailto:mben33@hotmail.com">mben33@hotmail.com</a></td>
<td></td>
<td>Rexall Place</td>
<td>Oklahoma City Barons</td>
<td>20 avril 2019 at 16:19</td>
<td>26</td>
<td>64</td>
<td>44</td>
<td>68</td>
<td>26</td></tr>
<tr><td>Florida Panthers</td>
<td>Mikaël Brassard</td>
<td></td>
<td><a href="mailto:beavers026@gmail.com">beavers026@gmail.com</a></td>
<td></td>
<td>BankAtlantic Center</td>
<td>San Antonio Rampage</td>
<td>6 mai 2019 at 03:49</td>
<td>49</td>
<td>88</td>
<td>54</td>
<td>78</td>
<td>37</td></tr>
<tr><td>Los Angeles Kings</td>
<td>Steeve Garneau</td>
<td></td>
<td><a href="mailto:srgarneau@hotmail.com">srgarneau@hotmail.com</a></td>
<td></td>
<td>Staples Center</td>
<td>Gatineau Olympiques</td>
<td>16 mai 2019 at 07:09</td>
<td>53</td>
<td>78</td>
<td>35</td>
<td>62</td>
<td>34</td></tr>
<tr><td>Minnesota Wild</td>
<td>Alain Bosch</td>
<td></td>
<td><a href="mailto:alain.bosch@hotmail.com">alain.bosch@hotmail.com</a></td>
<td></td>
<td>Xcel Energy Center</td>
<td>Houston Aeros</td>
<td>4 avril 2019 at 10:19</td>
<td>36</td>
<td>70</td>
<td>29</td>
<td>72</td>
<td>17</td></tr>
<tr><td>Montreal Canadiens</td>
<td>Simon Brassard</td>
<td></td>
<td><a href="mailto:ashligue@hotmail.com">ashligue@hotmail.com</a></td>
<td></td>
<td>Bell Centre</td>
<td>Trois-Rivières Draveurs</td>
<td>30 juillet 2018 at 15:57</td>
<td>1</td>
<td>35</td>
<td>22</td>
<td>37</td>
<td>10</td></tr>
<tr><td>Nashville Predators</td>
<td>Mathieu Boudreault</td>
<td></td>
<td><a href="mailto:matt7424@hotmail.com">matt7424@hotmail.com</a></td>
<td></td>
<td>Bridgestone Arena</td>
<td>Milwaukee Admirals</td>
<td>7 mai 2019 at 08:52</td>
<td>34</td>
<td>62</td>
<td>31</td>
<td>42</td>
<td>24</td></tr>
<tr><td>New Jersey Devils</td>
<td>Yannick Ferland</td>
<td></td>
<td><a href="mailto:yferland75@hotmail.com">yferland75@hotmail.com</a></td>
<td></td>
<td>Prudential Center</td>
<td>Albany Devils</td>
<td>5 mai 2019 at 10:53</td>
<td>38</td>
<td>74</td>
<td>46</td>
<td>78</td>
<td>27</td></tr>
<tr><td>New York Islanders</td>
<td>Jacques Ouellet</td>
<td></td>
<td><a href="mailto:smashwall@live.ca">smashwall@live.ca</a></td>
<td></td>
<td>Nassau Coliseum</td>
<td>Bridgeport Sound Tigers</td>
<td>23 mars 2019 at 14:59</td>
<td>16</td>
<td>142</td>
<td>95</td>
<td>105</td>
<td>23</td></tr>
<tr><td>New York Rangers</td>
<td>Francis Bérubé</td>
<td></td>
<td><a href="mailto:frankidikidi@hotmail.com">frankidikidi@hotmail.com</a></td>
<td></td>
<td>Madison Square Garden</td>
<td>Connecticut Whale</td>
<td>22 avril 2019 at 06:14</td>
<td>18</td>
<td>109</td>
<td>48</td>
<td>86</td>
<td>25</td></tr>
<tr><td>Ottawa Senators</td>
<td>Bobby Tibodo</td>
<td></td>
<td><a href="mailto:bobbytbodo@gmail.com">bobbytbodo@gmail.com</a></td>
<td></td>
<td>Centre Canadian Tire</td>
<td>Binghamton Senators</td>
<td>30 avril 2019 at 07:31</td>
<td>45</td>
<td>128</td>
<td>47</td>
<td>86</td>
<td>79</td></tr>
<tr><td>Philadelphia Flyers</td>
<td>Seth Stepien</td>
<td></td>
<td><a href="mailto:mathieuveilleux7@gmail.com">mathieuveilleux7@gmail.com</a></td>
<td></td>
<td>Wells Fargo Center</td>
<td>Adirondack Phantoms</td>
<td>19 avril 2019 at 10:28</td>
<td>46</td>
<td>51</td>
<td>25</td>
<td>60</td>
<td>27</td></tr>
<tr><td>Pittsburgh Penguins</td>
<td>Éric Simard</td>
<td></td>
<td><a href="mailto:erik.simard@live.ca">erik.simard@live.ca</a></td>
<td></td>
<td>Consol Energy Center</td>
<td>Wilkes-Barre/Scranton Penguins</td>
<td>16 mai 2019 at 06:59</td>
<td>127</td>
<td>51</td>
<td>13</td>
<td>44</td>
<td>37</td></tr>
<tr><td>Quebec Nordiques</td>
<td>Olivier Madgin</td>
<td></td>
<td><a href="mailto:oliviermadgin@gmail.com">oliviermadgin@gmail.com</a></td>
<td></td>
<td>Colisée Pepsi</td>
<td>Chicoutimi Saguenéens</td>
<td>3 avril 2019 at 07:43</td>
<td>26</td>
<td>74</td>
<td>53</td>
<td>83</td>
<td>15</td></tr>
<tr><td>San Jose Sharks</td>
<td>Daniel Mercier</td>
<td></td>
<td><a href="mailto:mercdan@hotmail.com">mercdan@hotmail.com</a></td>
<td></td>
<td>HP Pavilion</td>
<td>Rouyn-Noranda Huskies</td>
<td>10 avril 2019 at 09:31</td>
<td>73</td>
<td>61</td>
<td>46</td>
<td>68</td>
<td>20</td></tr>
<tr><td>Seattle Saints</td>
<td>Martin Mercier</td>
<td></td>
<td><a href="mailto:Tipoucostaud@gmail.com">Tipoucostaud@gmail.com</a></td>
<td></td>
<td>KeyArena</td>
<td>Mercer Island Archangels</td>
<td>8 avril 2019 at 08:04</td>
<td>56</td>
<td>55</td>
<td>33</td>
<td>77</td>
<td>22</td></tr>
<tr><td>St. Louis Blues</td>
<td>Mélissa Roussel</td>
<td></td>
<td><a href="mailto:melissa22janvier80@live.ca">melissa22janvier80@live.ca</a></td>
<td></td>
<td>Scottrade Center</td>
<td>Peoria Rivermen</td>
<td>29 avril 2019 at 07:36</td>
<td>104</td>
<td>23</td>
<td>10</td>
<td>31</td>
<td>5</td></tr>
<tr><td>Tampa Bay Lightning</td>
<td>Julien Lessard</td>
<td></td>
<td><a href="mailto:julien.tlessard@gmail.com">julien.tlessard@gmail.com</a></td>
<td></td>
<td>Tampa Bay Times Forum</td>
<td>Norfolk Admirals</td>
<td>24 avril 2019 at 10:56</td>
<td>47</td>
<td>113</td>
<td>77</td>
<td>77</td>
<td>28</td></tr>
<tr><td>Toronto Maple Leafs</td>
<td>Sébastien Tremblay</td>
<td></td>
<td><a href="mailto:pocketrocket114@hotmail.com">pocketrocket114@hotmail.com</a></td>
<td></td>
<td>Air Canada Center</td>
<td>Roberval Dwarfs</td>
<td>15 avril 2019 at 07:32</td>
<td>23</td>
<td>107</td>
<td>66</td>
<td>88</td>
<td>46</td></tr>
<tr><td>Vancouver Canucks</td>
<td>Jason Perreault</td>
<td></td>
<td><a href="mailto:jape2257@hotmail.com">jape2257@hotmail.com</a></td>
<td></td>
<td>Rogers Arena</td>
<td>Chicago Wolves</td>
<td>16 avril 2019 at 07:34</td>
<td>41</td>
<td>49</td>
<td>20</td>
<td>62</td>
<td>10</td></tr>
<tr><td>Washington Capitals</td>
<td>Joey Pronovost</td>
<td></td>
<td><a href="mailto:joeypronovost@hotmail.com">joeypronovost@hotmail.com</a></td>
<td></td>
<td>Verizon Center</td>
<td>Landshut Cannibals</td>
<td>9 avril 2019 at 15:26</td>
<td>28</td>
<td>90</td>
<td>59</td>
<td>88</td>
<td>19</td></tr>
<tr><td>Winnipeg Jets</td>
<td>Maxyme Veaudry</td>
<td></td>
<td><a href="mailto:max_veaudry@hotmail.com">max_veaudry@hotmail.com</a></td>
<td></td>
<td>MTS Centre</td>
<td>Manitoba Moose</td>
<td>14 avril 2019 at 07:32</td>
<td>29</td>
<td>76</td>
<td>46</td>
<td>66</td>
<td>29</td></tr>
</tbody></table><br />
<a href="mailto:dominik.cocozza@hotmail.ca;crazyboug72@hotmail.com;brabant66@hotmail.com;jbgelinas@hotmail.ca;Alex_50@hotmail.com;daniel.turgeon@live.com;vier_c88@hotmail.com;tonyboutch@hotmail.com;Stlaurentmathieu@outlook.com;ebeniste.plbrisson@g­mail.com;Vandal316@hotmail.com;mben33@hotmail.com;beavers026@gmail.com;srgarneau@hotmail.com;alain.bosch@hotmail.com;ashligue@hotmail.com;matt7424@hotmail.com;yferland75@hotmail.com;smashwall@live.ca;frankidikidi@hotmail.com;bobbytbodo@gmail.com;mathieuveilleux7@gmail.com;erik.simard@live.ca;oliviermadgin@gmail.com;mercdan@hotmail.com;Tipoucostaud@gmail.com;melissa22janvier80@live.ca;julien.tlessard@gmail.com;pocketrocket114@hotmail.com;jape2257@hotmail.com;joeypronovost@hotmail.com;max_veaudry@hotmail.com">Email all General Manager</a>
<?php include "Footer.php";?>
