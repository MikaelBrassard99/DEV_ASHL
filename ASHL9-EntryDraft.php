<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Entry Draft</title>
<script src="ASHL9.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL9.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
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
<table class="STHSEntryDraft_MainTable">
<thead><tr><th class="STHSEntryDraft_Rank">Rank #</th><th class="STHSEntryDraft_Team">Team</th><th class="STHSEntryDraft_Pick">Pick</th></tr></thead><tbody>
<tr><td colspan="3" class="STHSCenter"><b>Round #1</b></td></tr>
<tr><td>1</td><td>Edmonton Oilers</td><td></td></tr>
<tr><td>2</td><td>Columbus Blue Jackets</td><td></td></tr>
<tr><td>3</td><td>Dallas Stars</td><td></td></tr>
<tr><td>4</td><td>San Jose Sharks (Ottawa Senators)</td><td></td></tr>
<tr><td>5</td><td>Washington Capitals</td><td></td></tr>
<tr><td>6</td><td>Florida Panthers (Seattle Saints)</td><td></td></tr>
<tr><td>7</td><td>San Jose Sharks (Carolina Hurricanes)</td><td></td></tr>
<tr><td>8</td><td>New York Islanders</td><td></td></tr>
<tr><td>9</td><td>San Jose Sharks (Arizona Coyotes)</td><td></td></tr>
<tr><td>10</td><td>Quebec Nordiques (Boston Bruins)</td><td></td></tr>
<tr><td>11</td><td>Dallas Stars (New Jersey Devils)</td><td></td></tr>
<tr><td>12</td><td>Minnesota Wild (Philadelphia Flyers)</td><td></td></tr>
<tr><td>13</td><td>Detroit Red Wings</td><td></td></tr>
<tr><td>14</td><td>Montreal Canadiens (Chicago Blackhawks)</td><td></td></tr>
<tr><td>15</td><td>Calgary Flames</td><td></td></tr>
<tr><td>16</td><td>Calgary Flames (Anaheim Ducks)</td><td></td></tr>
<tr><td>17</td><td>Vancouver Canucks</td><td></td></tr>
<tr><td>18</td><td>Montreal Canadiens</td><td></td></tr>
<tr><td>19</td><td>Tampa Bay Lightning</td><td></td></tr>
<tr><td>20</td><td>Quebec Nordiques</td><td></td></tr>
<tr><td>21</td><td>New York Rangers (St. Louis Blues)</td><td></td></tr>
<tr><td>22</td><td>San Jose Sharks</td><td></td></tr>
<tr><td>23</td><td>Nashville Predators</td><td></td></tr>
<tr><td>24</td><td>Minnesota Wild</td><td></td></tr>
<tr><td>25</td><td>Colorado Avalanche</td><td></td></tr>
<tr><td>26</td><td>Toronto Maple Leafs</td><td></td></tr>
<tr><td>27</td><td>Buffalo Sabres</td><td></td></tr>
<tr><td>28</td><td>New York Rangers</td><td></td></tr>
<tr><td>29</td><td>San Jose Sharks (Winnipeg Jets)</td><td></td></tr>
<tr><td>30</td><td>Florida Panthers</td><td></td></tr>
<tr><td>31</td><td>Calgary Flames (Los Angeles Kings)</td><td></td></tr>
<tr><td>32</td><td>Vegas Golden Knights</td><td></td></tr>
<tr><td>33</td><td>Philadelphia Flyers (Pittsburgh Penguins)</td><td></td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #2</b></td></tr>
<tr><td>34</td><td>Edmonton Oilers</td><td></td></tr>
<tr><td>35</td><td>Washington Capitals (Columbus Blue Jackets)</td><td></td></tr>
<tr><td>36</td><td>Dallas Stars</td><td></td></tr>
<tr><td>37</td><td>Buffalo Sabres (Ottawa Senators)</td><td></td></tr>
<tr><td>38</td><td>Anaheim Ducks (Washington Capitals)</td><td></td></tr>
<tr><td>39</td><td>Ottawa Senators (Seattle Saints)</td><td></td></tr>
<tr><td>40</td><td>New York Rangers (Carolina Hurricanes)</td><td></td></tr>
<tr><td>41</td><td>New York Islanders</td><td></td></tr>
<tr><td>42</td><td>Winnipeg Jets (Arizona Coyotes)</td><td></td></tr>
<tr><td>43</td><td>Boston Bruins</td><td></td></tr>
<tr><td>44</td><td>New Jersey Devils</td><td></td></tr>
<tr><td>45</td><td>Philadelphia Flyers</td><td></td></tr>
<tr><td>46</td><td>Calgary Flames (Detroit Red Wings)</td><td></td></tr>
<tr><td>47</td><td>Chicago Blackhawks</td><td></td></tr>
<tr><td>48</td><td>Calgary Flames</td><td></td></tr>
<tr><td>49</td><td>Detroit Red Wings (Anaheim Ducks)</td><td></td></tr>
<tr><td>50</td><td>Toronto Maple Leafs (Vancouver Canucks)</td><td></td></tr>
<tr><td>51</td><td>Chicago Blackhawks (Montreal Canadiens)</td><td></td></tr>
<tr><td>52</td><td>Tampa Bay Lightning</td><td></td></tr>
<tr><td>53</td><td>Quebec Nordiques</td><td></td></tr>
<tr><td>54</td><td>Calgary Flames (St. Louis Blues)</td><td></td></tr>
<tr><td>55</td><td>New York Rangers (San Jose Sharks)</td><td></td></tr>
<tr><td>56</td><td>Nashville Predators</td><td></td></tr>
<tr><td>57</td><td>Minnesota Wild</td><td></td></tr>
<tr><td>58</td><td>Florida Panthers (Colorado Avalanche)</td><td></td></tr>
<tr><td>59</td><td>Toronto Maple Leafs</td><td></td></tr>
<tr><td>60</td><td>Vegas Golden Knights (Buffalo Sabres)</td><td></td></tr>
<tr><td>61</td><td>New York Rangers</td><td></td></tr>
<tr><td>62</td><td>Montreal Canadiens (Winnipeg Jets)</td><td></td></tr>
<tr><td>63</td><td>Florida Panthers</td><td></td></tr>
<tr><td>64</td><td>Montreal Canadiens (Los Angeles Kings)</td><td></td></tr>
<tr><td>65</td><td>Calgary Flames (Vegas Golden Knights)</td><td></td></tr>
<tr><td>66</td><td>Ottawa Senators (Pittsburgh Penguins)</td><td></td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #3</b></td></tr>
<tr><td>67</td><td>Anaheim Ducks (Edmonton Oilers)</td><td></td></tr>
<tr><td>68</td><td>St. Louis Blues (Columbus Blue Jackets)</td><td></td></tr>
<tr><td>69</td><td>Dallas Stars</td><td></td></tr>
<tr><td>70</td><td>Vegas Golden Knights (Ottawa Senators)</td><td></td></tr>
<tr><td>71</td><td>Washington Capitals</td><td></td></tr>
<tr><td>72</td><td>New Jersey Devils (Seattle Saints)</td><td></td></tr>
<tr><td>73</td><td>Calgary Flames (Carolina Hurricanes)</td><td></td></tr>
<tr><td>74</td><td>Montreal Canadiens (New York Islanders)</td><td></td></tr>
<tr><td>75</td><td>Calgary Flames (Arizona Coyotes)</td><td></td></tr>
<tr><td>76</td><td>Boston Bruins</td><td></td></tr>
<tr><td>77</td><td>Dallas Stars (New Jersey Devils)</td><td></td></tr>
<tr><td>78</td><td>Buffalo Sabres (Philadelphia Flyers)</td><td></td></tr>
<tr><td>79</td><td>Washington Capitals (Detroit Red Wings)</td><td></td></tr>
<tr><td>80</td><td>Florida Panthers (Chicago Blackhawks)</td><td></td></tr>
<tr><td>81</td><td>Calgary Flames</td><td></td></tr>
<tr><td>82</td><td>Anaheim Ducks</td><td></td></tr>
<tr><td>83</td><td>Ottawa Senators (Vancouver Canucks)</td><td></td></tr>
<tr><td>84</td><td>Dallas Stars (Montreal Canadiens)</td><td></td></tr>
<tr><td>85</td><td>Tampa Bay Lightning</td><td></td></tr>
<tr><td>86</td><td>Montreal Canadiens (Quebec Nordiques)</td><td></td></tr>
<tr><td>87</td><td>Ottawa Senators (St. Louis Blues)</td><td></td></tr>
<tr><td>88</td><td>Tampa Bay Lightning (San Jose Sharks)</td><td></td></tr>
<tr><td>89</td><td>New York Rangers (Nashville Predators)</td><td></td></tr>
<tr><td>90</td><td>Chicago Blackhawks (Minnesota Wild)</td><td></td></tr>
<tr><td>91</td><td>New York Islanders (Colorado Avalanche)</td><td></td></tr>
<tr><td>92</td><td>New York Islanders (Toronto Maple Leafs)</td><td></td></tr>
<tr><td>93</td><td>St. Louis Blues (Buffalo Sabres)</td><td></td></tr>
<tr><td>94</td><td>New York Rangers</td><td></td></tr>
<tr><td>95</td><td>Winnipeg Jets</td><td></td></tr>
<tr><td>96</td><td>Vancouver Canucks (Florida Panthers)</td><td></td></tr>
<tr><td>97</td><td>Los Angeles Kings</td><td></td></tr>
<tr><td>98</td><td>Calgary Flames (Vegas Golden Knights)</td><td></td></tr>
<tr><td>99</td><td>Winnipeg Jets (Pittsburgh Penguins)</td><td></td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #4</b></td></tr>
<tr><td>100</td><td>Edmonton Oilers</td><td></td></tr>
<tr><td>101</td><td>Vancouver Canucks (Columbus Blue Jackets)</td><td></td></tr>
<tr><td>102</td><td>Dallas Stars</td><td></td></tr>
<tr><td>103</td><td>Minnesota Wild (Ottawa Senators)</td><td></td></tr>
<tr><td>104</td><td>Washington Capitals</td><td></td></tr>
<tr><td>105</td><td>Edmonton Oilers (Seattle Saints)</td><td></td></tr>
<tr><td>106</td><td>Calgary Flames (Carolina Hurricanes)</td><td></td></tr>
<tr><td>107</td><td>New York Islanders</td><td></td></tr>
<tr><td>108</td><td>Buffalo Sabres (Arizona Coyotes)</td><td></td></tr>
<tr><td>109</td><td>New York Rangers (Boston Bruins)</td><td></td></tr>
<tr><td>110</td><td>New Jersey Devils</td><td></td></tr>
<tr><td>111</td><td>Philadelphia Flyers</td><td></td></tr>
<tr><td>112</td><td>Toronto Maple Leafs (Detroit Red Wings)</td><td></td></tr>
<tr><td>113</td><td>Chicago Blackhawks</td><td></td></tr>
<tr><td>114</td><td>Calgary Flames</td><td></td></tr>
<tr><td>115</td><td>Seattle Saints (Anaheim Ducks)</td><td></td></tr>
<tr><td>116</td><td>Florida Panthers (Vancouver Canucks)</td><td></td></tr>
<tr><td>117</td><td>Winnipeg Jets (Montreal Canadiens)</td><td></td></tr>
<tr><td>118</td><td>Tampa Bay Lightning</td><td></td></tr>
<tr><td>119</td><td>Quebec Nordiques</td><td></td></tr>
<tr><td>120</td><td>St. Louis Blues</td><td></td></tr>
<tr><td>121</td><td>Calgary Flames (San Jose Sharks)</td><td></td></tr>
<tr><td>122</td><td>Nashville Predators</td><td></td></tr>
<tr><td>123</td><td>Vegas Golden Knights (Minnesota Wild)</td><td></td></tr>
<tr><td>124</td><td>Colorado Avalanche</td><td></td></tr>
<tr><td>125</td><td>St. Louis Blues (Toronto Maple Leafs)</td><td></td></tr>
<tr><td>126</td><td>Buffalo Sabres</td><td></td></tr>
<tr><td>127</td><td>New York Rangers</td><td></td></tr>
<tr><td>128</td><td>Winnipeg Jets</td><td></td></tr>
<tr><td>129</td><td>Florida Panthers</td><td></td></tr>
<tr><td>130</td><td>Los Angeles Kings</td><td></td></tr>
<tr><td>131</td><td>Vegas Golden Knights</td><td></td></tr>
<tr><td>132</td><td>Winnipeg Jets (Pittsburgh Penguins)</td><td></td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #5</b></td></tr>
<tr><td>133</td><td>Edmonton Oilers</td><td></td></tr>
<tr><td>134</td><td>Arizona Coyotes (Columbus Blue Jackets)</td><td></td></tr>
<tr><td>135</td><td>Dallas Stars</td><td></td></tr>
<tr><td>136</td><td>Ottawa Senators</td><td></td></tr>
<tr><td>137</td><td>Washington Capitals</td><td></td></tr>
<tr><td>138</td><td>Philadelphia Flyers (Seattle Saints)</td><td></td></tr>
<tr><td>139</td><td>Pittsburgh Penguins (Carolina Hurricanes)</td><td></td></tr>
<tr><td>140</td><td>New York Islanders</td><td></td></tr>
<tr><td>141</td><td>Quebec Nordiques (Arizona Coyotes)</td><td></td></tr>
<tr><td>142</td><td>Boston Bruins</td><td></td></tr>
<tr><td>143</td><td>New Jersey Devils</td><td></td></tr>
<tr><td>144</td><td>Philadelphia Flyers</td><td></td></tr>
<tr><td>145</td><td>Winnipeg Jets (Detroit Red Wings)</td><td></td></tr>
<tr><td>146</td><td>Chicago Blackhawks</td><td></td></tr>
<tr><td>147</td><td>Calgary Flames</td><td></td></tr>
<tr><td>148</td><td>Philadelphia Flyers (Anaheim Ducks)</td><td></td></tr>
<tr><td>149</td><td>Winnipeg Jets (Vancouver Canucks)</td><td></td></tr>
<tr><td>150</td><td>Minnesota Wild (Montreal Canadiens)</td><td></td></tr>
<tr><td>151</td><td>Tampa Bay Lightning</td><td></td></tr>
<tr><td>152</td><td>Florida Panthers (Quebec Nordiques)</td><td></td></tr>
<tr><td>153</td><td>Calgary Flames (St. Louis Blues)</td><td></td></tr>
<tr><td>154</td><td>Arizona Coyotes (San Jose Sharks)</td><td></td></tr>
<tr><td>155</td><td>Nashville Predators</td><td></td></tr>
<tr><td>156</td><td>San Jose Sharks (Minnesota Wild)</td><td></td></tr>
<tr><td>157</td><td>Washington Capitals (Colorado Avalanche)</td><td></td></tr>
<tr><td>158</td><td>Carolina Hurricanes (Toronto Maple Leafs)</td><td></td></tr>
<tr><td>159</td><td>Buffalo Sabres</td><td></td></tr>
<tr><td>160</td><td>New York Rangers</td><td></td></tr>
<tr><td>161</td><td>Winnipeg Jets</td><td></td></tr>
<tr><td>162</td><td>Florida Panthers</td><td></td></tr>
<tr><td>163</td><td>Los Angeles Kings</td><td></td></tr>
<tr><td>164</td><td>Washington Capitals (Vegas Golden Knights)</td><td></td></tr>
<tr><td>165</td><td>Carolina Hurricanes (Pittsburgh Penguins)</td><td></td></tr>
</tbody></table><br /><h1 class="STHSEntryDraft_AvailableProspect">Availables Prospect</h1>
<?php include "Footer.php";?>
