<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Entry Draft</title>
<script src="ASHL101.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.5.5 - ASHL101-STHS.db - ASHL101-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL101.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
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
<table class="STHSEntryDraft_MainTable">
<thead><tr><th class="STHSEntryDraft_Rank">Rank #</th><th class="STHSEntryDraft_Team">Team</th><th class="STHSEntryDraft_Pick">Pick</th></tr></thead><tbody>
<tr><td colspan="3" class="STHSCenter"><b>Round #1</b></td></tr>
<tr><td>1</td><td>New York Islanders</td><td>Alexis Lafrenière</td></tr>
<tr><td>2</td><td>Montreal Canadiens (Chicago Blackhawks)</td><td>Quinton Byfield</td></tr>
<tr><td>3</td><td>Vegas Golden Knights (Columbus Blue Jackets)</td><td>Tim Stützle</td></tr>
<tr><td>4</td><td>Winnipeg Jets (New Jersey Devils)</td><td>Alexander Holtz</td></tr>
<tr><td>5</td><td>Edmonton Oilers</td><td>Marco Rossi</td></tr>
<tr><td>6</td><td>New York Islanders (Ottawa Senators)</td><td>Cole Perfetti</td></tr>
<tr><td>7</td><td>Minnesota Wild</td><td>Lucas Raymond</td></tr>
<tr><td>8</td><td>Buffalo Sabres (Carolina Hurricanes)</td><td>Jamie Drysdale</td></tr>
<tr><td>9</td><td>Nashville Predators</td><td>Anton Lundell</td></tr>
<tr><td>10</td><td>Vegas Golden Knights (Toronto Maple Leafs)</td><td>Jake Sanderson</td></tr>
<tr><td>11</td><td>Nashville Predators (Boston Bruins)</td><td>Jack Quinn</td></tr>
<tr><td>12</td><td>Washington Capitals</td><td>Iaroslav Askarov</td></tr>
<tr><td>13</td><td>Calgary Flames (Anaheim Ducks)</td><td>Seth Jarvis</td></tr>
<tr><td>14</td><td>Colorado Avalanche</td><td>Hendrix Lapierre</td></tr>
<tr><td>15</td><td>New York Rangers (Winnipeg Jets)</td><td>Dawson Mercer</td></tr>
<tr><td>16</td><td>Chicago Blackhawks (Arizona Coyotes)</td><td>Dylan Holloway</td></tr>
<tr><td>17</td><td>Quebec Nordiques (Seattle Kraken)</td><td>Connor Zary</td></tr>
<tr><td>18</td><td>Quebec Nordiques (Philadelphia Flyers)</td><td>Noel Gunler</td></tr>
<tr><td>19</td><td>Florida Panthers (Tampa Bay Lightning)</td><td>Ryan O'Rourke</td></tr>
<tr><td>20</td><td>New York Islanders (Calgary Flames)</td><td>Dominik Kubalik</td></tr>
<tr><td>21</td><td>Columbus Blue Jackets (San Jose Sharks)</td><td>Mavrik Bourque</td></tr>
<tr><td>22</td><td>Washington Capitals (Detroit Red Wings)</td><td>Justin Barron</td></tr>
<tr><td>23</td><td>Montreal Canadiens (Buffalo Sabres)</td><td>Brendan Brisson</td></tr>
<tr><td>24</td><td>Florida Panthers (Montreal Canadiens)</td><td>Jacob Perreault</td></tr>
<tr><td>25</td><td>Arizona Coyotes (Los Angeles Kings)</td><td>Rodion Amirov</td></tr>
<tr><td>26</td><td>Tampa Bay Lightning (Vancouver Canucks)</td><td>Braden Schneider</td></tr>
<tr><td>27</td><td>Dallas Stars</td><td>Kaiden Guhle</td></tr>
<tr><td>28</td><td>Florida Panthers</td><td>Carter Savoie</td></tr>
<tr><td>29</td><td>New York Rangers</td><td>Lukas Reichel</td></tr>
<tr><td>30</td><td>Montreal Canadiens (Vegas Golden Knights)</td><td>Thomas Bordeleau</td></tr>
<tr><td>31</td><td>Boston Bruins (Quebec Nordiques)</td><td>Jan Mysak</td></tr>
<tr><td>32</td><td>Tampa Bay Lightning (Pittsburgh Penguins)</td><td>Tyson Foerster</td></tr>
<tr><td>33</td><td>Detroit Red Wings (St. Louis Blues)</td><td>John-Jason Peterka</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #2</b></td></tr>
<tr><td>34</td><td>Vegas Golden Knights (New Jersey Devils)</td><td>William Wallinder</td></tr>
<tr><td>35</td><td>Florida Panthers (Chicago Blackhawks)</td><td>Jean-Luc Foudy</td></tr>
<tr><td>36</td><td>Edmonton Oilers (New York Islanders)</td><td>Ridly Greig</td></tr>
<tr><td>37</td><td>Edmonton Oilers</td><td>Martin Chromiak</td></tr>
<tr><td>38</td><td>Ottawa Senators</td><td>William Villeneuve</td></tr>
<tr><td>39</td><td>Seattle Kraken (Minnesota Wild)</td><td>William Dufour</td></tr>
<tr><td>40</td><td>Toronto Maple Leafs (Carolina Hurricanes)</td><td>Roni Hirvonen</td></tr>
<tr><td>41</td><td>Tampa Bay Lightning (Columbus Blue Jackets)</td><td>Marat Khusnutdinov</td></tr>
<tr><td>42</td><td>Boston Bruins (Nashville Predators)</td><td>Michael Benning</td></tr>
<tr><td>43</td><td>Tampa Bay Lightning (Toronto Maple Leafs)</td><td>Lukas Cormier</td></tr>
<tr><td>44</td><td>Boston Bruins</td><td>Theodor Niederbach</td></tr>
<tr><td>45</td><td>Nashville Predators (Washington Capitals)</td><td>Jérémie Poirier</td></tr>
<tr><td>46</td><td>Washington Capitals (Anaheim Ducks)</td><td>Vasiliy Ponomarev</td></tr>
<tr><td>47</td><td>Tampa Bay Lightning (Colorado Avalanche)</td><td>Luke Evangelista</td></tr>
<tr><td>48</td><td>Chicago Blackhawks (Winnipeg Jets)</td><td>Helge Grans</td></tr>
<tr><td>49</td><td>Arizona Coyotes</td><td>Ozzy Wiesblatt</td></tr>
<tr><td>50</td><td>Ottawa Senators (Seattle Kraken)</td><td>Jake Neighbours</td></tr>
<tr><td>51</td><td>Toronto Maple Leafs (Philadelphia Flyers)</td><td>Kasper Simontaival</td></tr>
<tr><td>52</td><td>Toronto Maple Leafs (Tampa Bay Lightning)</td><td>Joni Jurmo</td></tr>
<tr><td>53</td><td>Calgary Flames</td><td>Blake Biondi</td></tr>
<tr><td>54</td><td>New York Rangers (San Jose Sharks)</td><td>Emil Andrae</td></tr>
<tr><td>55</td><td>Calgary Flames (Detroit Red Wings)</td><td>Jack Finley</td></tr>
<tr><td>56</td><td>Buffalo Sabres</td><td>Sam Colangelo</td></tr>
<tr><td>57</td><td>Ottawa Senators (Montreal Canadiens)</td><td>Yan Kuznetsov</td></tr>
<tr><td>58</td><td>Montreal Canadiens (Los Angeles Kings)</td><td>Artyom Galimov</td></tr>
<tr><td>59</td><td>Montreal Canadiens (Vancouver Canucks)</td><td>Blake Lizotte</td></tr>
<tr><td>60</td><td>Ottawa Senators (Dallas Stars)</td><td>Ty Smilanic</td></tr>
<tr><td>61</td><td>Tampa Bay Lightning (Florida Panthers)</td><td>Topi Niemela</td></tr>
<tr><td>62</td><td>New York Rangers</td><td>Zion Nybeck</td></tr>
<tr><td>63</td><td>Nashville Predators (Vegas Golden Knights)</td><td>Tyler Kleven</td></tr>
<tr><td>64</td><td>Tampa Bay Lightning (Quebec Nordiques)</td><td>Drew Commesso</td></tr>
<tr><td>65</td><td>Ottawa Senators (Pittsburgh Penguins)</td><td>Alex Cotton</td></tr>
<tr><td>66</td><td>Chicago Blackhawks (St. Louis Blues)</td><td>Danil Gushchin</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #3</b></td></tr>
<tr><td>67</td><td>Vegas Golden Knights (New Jersey Devils)</td><td>Shakir Mukhamadullin</td></tr>
<tr><td>68</td><td>Florida Panthers (Chicago Blackhawks)</td><td>Sean Farrell</td></tr>
<tr><td>69</td><td>Montreal Canadiens (New York Islanders)</td><td>Egor Sokolov</td></tr>
<tr><td>70</td><td>Pittsburgh Penguins (Edmonton Oilers)</td><td>Kaapo Kähkönen</td></tr>
<tr><td>71</td><td>Dallas Stars (Ottawa Senators)</td><td>Pavel Novak</td></tr>
<tr><td>72</td><td>Montreal Canadiens (Minnesota Wild)</td><td>Artyom Zub</td></tr>
<tr><td>73</td><td>Calgary Flames (Carolina Hurricanes)</td><td>Ronan Seeley</td></tr>
<tr><td>74</td><td>Anaheim Ducks (Columbus Blue Jackets)</td><td>Dmitri Ovchinnikov</td></tr>
<tr><td>75</td><td>New York Rangers (Nashville Predators)</td><td>Anton Johannesson</td></tr>
<tr><td>76</td><td>New York Islanders (Toronto Maple Leafs)</td><td>Jan Bednar</td></tr>
<tr><td>77</td><td>Boston Bruins</td><td>Justin Sourdif</td></tr>
<tr><td>78</td><td>Washington Capitals</td><td>Roby Jarventie</td></tr>
<tr><td>79</td><td>Edmonton Oilers (Anaheim Ducks)</td><td>Luke Tuch</td></tr>
<tr><td>80</td><td>New York Islanders (Colorado Avalanche)</td><td>Dylan Peterson</td></tr>
<tr><td>81</td><td>Dallas Stars (Winnipeg Jets)</td><td>Ethan Bowen</td></tr>
<tr><td>82</td><td>Calgary Flames (Arizona Coyotes)</td><td>Oliver Suni</td></tr>
<tr><td>83</td><td>Calgary Flames (Seattle Kraken)</td><td>Daemon Hunt</td></tr>
<tr><td>84</td><td>Winnipeg Jets (Philadelphia Flyers)</td><td>Maxim Groshev</td></tr>
<tr><td>85</td><td>Tampa Bay Lightning</td><td>Antonio Stranges</td></tr>
<tr><td>86</td><td>Calgary Flames</td><td>Brock Faber</td></tr>
<tr><td>87</td><td>Anaheim Ducks (San Jose Sharks)</td><td>Joel Blomqvist</td></tr>
<tr><td>88</td><td>Washington Capitals (Detroit Red Wings)</td><td>Theo Rochette</td></tr>
<tr><td>89</td><td>New York Islanders (Buffalo Sabres)</td><td>Thimo Nickl</td></tr>
<tr><td>90</td><td>Dallas Stars (Montreal Canadiens)</td><td>Wyatt Kaiser</td></tr>
<tr><td>91</td><td>Los Angeles Kings</td><td>Daniel Torgersson</td></tr>
<tr><td>92</td><td>St. Louis Blues (Vancouver Canucks)</td><td>Yegor Zamula</td></tr>
<tr><td>93</td><td>Dallas Stars</td><td>Bogdan Trineyev</td></tr>
<tr><td>94</td><td>Montreal Canadiens (Florida Panthers)</td><td>Matej Chalupa</td></tr>
<tr><td>95</td><td>New York Rangers</td><td>Nico Daws</td></tr>
<tr><td>96</td><td>Columbus Blue Jackets (Vegas Golden Knights)</td><td>Calle Clang</td></tr>
<tr><td>97</td><td>Montreal Canadiens (Quebec Nordiques)</td><td>Brett Berard</td></tr>
<tr><td>98</td><td>Seattle Kraken (Pittsburgh Penguins)</td><td>Connor McClennon</td></tr>
<tr><td>99</td><td>St. Louis Blues</td><td>Dmitry Voronkov</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #4</b></td></tr>
<tr><td>100</td><td>Montreal Canadiens (New Jersey Devils)</td><td>Oskari Laaksonen</td></tr>
<tr><td>101</td><td>Winnipeg Jets (Chicago Blackhawks)</td><td>William Cuylle</td></tr>
<tr><td>102</td><td>Vegas Golden Knights (New York Islanders)</td><td>Janne Kuokkanen</td></tr>
<tr><td>103</td><td>Edmonton Oilers</td><td>Eemil Viro</td></tr>
<tr><td>104</td><td>Vancouver Canucks (Ottawa Senators)</td><td>Jaromir Pytlik</td></tr>
<tr><td>105</td><td>Montreal Canadiens (Minnesota Wild)</td><td>Alexander Gordin</td></tr>
<tr><td>106</td><td>Calgary Flames (Carolina Hurricanes)</td><td>Michal Gut</td></tr>
<tr><td>107</td><td>Vegas Golden Knights (Columbus Blue Jackets)</td><td>Brennan Menell</td></tr>
<tr><td>108</td><td>Nashville Predators</td><td>Tyler Tullio</td></tr>
<tr><td>109</td><td>St. Louis Blues (Toronto Maple Leafs)</td><td>Matt Roy</td></tr>
<tr><td>110</td><td>Buffalo Sabres (Boston Bruins)</td><td>Timur Bilyalov</td></tr>
<tr><td>111</td><td>Washington Capitals</td><td>Alexander Nikishin</td></tr>
<tr><td>112</td><td>San Jose Sharks (Anaheim Ducks)</td><td>William Rouleau</td></tr>
<tr><td>113</td><td>Minnesota Wild (Colorado Avalanche)</td><td>Samuel Hlavaj</td></tr>
<tr><td>114</td><td>Montreal Canadiens (Winnipeg Jets)</td><td>Devon Levi</td></tr>
<tr><td>115</td><td>Nashville Predators (Arizona Coyotes)</td><td>Emil Heineman</td></tr>
<tr><td>116</td><td>Edmonton Oilers (Seattle Kraken)</td><td>Donovan Sebrango</td></tr>
<tr><td>117</td><td>New York Islanders (Philadelphia Flyers)</td><td>Patrick Guzzo</td></tr>
<tr><td>118</td><td>Winnipeg Jets (Tampa Bay Lightning)</td><td>Carson Bantle</td></tr>
<tr><td>119</td><td>New Jersey Devils (Calgary Flames)</td><td>Gage Goncalves</td></tr>
<tr><td>120</td><td>Vancouver Canucks (San Jose Sharks)</td><td>Logan Morrisson</td></tr>
<tr><td>121</td><td>Buffalo Sabres (Detroit Red Wings)</td><td>Veeti Miettinen</td></tr>
<tr><td>122</td><td>Nashville Predators (Buffalo Sabres)</td><td>Zayde Wisdom</td></tr>
<tr><td>123</td><td>Winnipeg Jets (Montreal Canadiens)</td><td>Owen Pederson</td></tr>
<tr><td>124</td><td>Los Angeles Kings</td><td>Cross Hanas</td></tr>
<tr><td>125</td><td>Nashville Predators (Vancouver Canucks)</td><td>Eamon Powell</td></tr>
<tr><td>126</td><td>New York Rangers (Dallas Stars)</td><td>Tristen Robins</td></tr>
<tr><td>127</td><td>Florida Panthers</td><td>Brandon Coe</td></tr>
<tr><td>128</td><td>St. Louis Blues (New York Rangers)</td><td>Jacob Dion</td></tr>
<tr><td>129</td><td>Buffalo Sabres (Vegas Golden Knights)</td><td>Yevgeni Oksentyuk</td></tr>
<tr><td>130</td><td>Quebec Nordiques</td><td>James Hardie</td></tr>
<tr><td>131</td><td>Detroit Red Wings (Pittsburgh Penguins)</td><td>Mikko Lehtonen</td></tr>
<tr><td>132</td><td>St. Louis Blues</td><td>Jeremy Swayman</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #5</b></td></tr>
<tr><td>133</td><td>New Jersey Devils</td><td>Mitchell Miller</td></tr>
<tr><td>134</td><td>Winnipeg Jets (Chicago Blackhawks)</td><td>Simon Knak</td></tr>
<tr><td>135</td><td>Arizona Coyotes (New York Islanders)</td><td>Kirill Steklo</td></tr>
<tr><td>136</td><td>Edmonton Oilers</td><td>Aidan Campbell</td></tr>
<tr><td>137</td><td>Montreal Canadiens (Ottawa Senators)</td><td>Louis Crevier</td></tr>
<tr><td>138</td><td>Vegas Golden Knights (Minnesota Wild)</td><td>Brayden Burke</td></tr>
<tr><td>139</td><td>Pittsburgh Penguins (Carolina Hurricanes)</td><td>Mikhail Abramov</td></tr>
<tr><td>140</td><td>Arizona Coyotes (Columbus Blue Jackets)</td><td>Declan Bronte</td></tr>
<tr><td>141</td><td>Nashville Predators</td><td>Evan Vierling</td></tr>
<tr><td>142</td><td>Carolina Hurricanes (Toronto Maple Leafs)</td><td>Ian Moore</td></tr>
<tr><td>143</td><td>Boston Bruins</td><td>Landon Slaggert</td></tr>
<tr><td>144</td><td>Arizona Coyotes (Washington Capitals)</td><td>Hakan Salt</td></tr>
<tr><td>145</td><td>Philadelphia Flyers (Anaheim Ducks)</td><td>Dylan Garand</td></tr>
<tr><td>146</td><td>Washington Capitals (Colorado Avalanche)</td><td>Simon Gnyp</td></tr>
<tr><td>147</td><td>Arizona Coyotes (Winnipeg Jets)</td><td>Reinhard Venter</td></tr>
<tr><td>148</td><td>Pittsburgh Penguins (Arizona Coyotes)</td><td>Mathias Laferrière</td></tr>
<tr><td>149</td><td>Philadelphia Flyers (Seattle Kraken)</td><td>Taylor Gauthier</td></tr>
<tr><td>150</td><td>Calgary Flames (Philadelphia Flyers)</td><td>Ryder Rolston</td></tr>
<tr><td>151</td><td>Pittsburgh Penguins (Tampa Bay Lightning)</td><td>Nico Sturm</td></tr>
<tr><td>152</td><td>San Jose Sharks (Calgary Flames)</td><td>Mathieu Gagnon</td></tr>
<tr><td>153</td><td>Arizona Coyotes (San Jose Sharks)</td><td>Marko Mladenovic</td></tr>
<tr><td>154</td><td>Winnipeg Jets (Detroit Red Wings)</td><td>Luke Prokop</td></tr>
<tr><td>155</td><td>Colorado Avalanche (Buffalo Sabres)</td><td>Mikisiw Awashish</td></tr>
<tr><td>156</td><td>Quebec Nordiques (Montreal Canadiens)</td><td>Stephen Halliday</td></tr>
<tr><td>157</td><td>Montreal Canadiens (Los Angeles Kings)</td><td>Sam Lafferty</td></tr>
<tr><td>158</td><td>Winnipeg Jets (Vancouver Canucks)</td><td>Ryan Francis</td></tr>
<tr><td>159</td><td>Pittsburgh Penguins (Dallas Stars)</td><td>Drew O'Connor</td></tr>
<tr><td>160</td><td>Florida Panthers</td><td>Will Cranley</td></tr>
<tr><td>161</td><td>New York Rangers</td><td>Samuel Johannesson</td></tr>
<tr><td>162</td><td>Washington Capitals (Vegas Golden Knights)</td><td>Kristian Tanus</td></tr>
<tr><td>163</td><td>Montreal Canadiens (Quebec Nordiques)</td><td>Alexander True</td></tr>
<tr><td>164</td><td>Carolina Hurricanes (Pittsburgh Penguins)</td><td>Benjamin Zloty</td></tr>
<tr><td>165</td><td>Calgary Flames (St. Louis Blues)</td><td>Simon Kubicek</td></tr>
</tbody></table><br /><h1 class="STHSEntryDraft_AvailableProspect">Availables Prospect</h1>
<?php include "Footer.php";?>
