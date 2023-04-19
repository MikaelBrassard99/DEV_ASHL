<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Entry Draft</title>
<script src="ASHL11.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL11-STHS.db - ASHL11-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL11-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL11-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<table class="STHSEntryDraft_MainTable">
<thead><tr><th class="STHSEntryDraft_Rank">Rank #</th><th class="STHSEntryDraft_Team">Team</th><th class="STHSEntryDraft_Pick">Pick</th></tr></thead><tbody>
<tr><td colspan="3" class="STHSCenter"><b>Round #1</b></td></tr>
<tr><td>1</td><td>Detroit Red Wings (Carolina Hurricanes)</td><td></td></tr>
<tr><td>2</td><td>Quebec Nordiques</td><td></td></tr>
<tr><td>3</td><td>Washington Capitals</td><td></td></tr>
<tr><td>4</td><td>Pittsburgh Penguins (New York Islanders)</td><td></td></tr>
<tr><td>5</td><td>Dallas Stars (Ottawa Senators)</td><td></td></tr>
<tr><td>6</td><td>Anaheim Ducks</td><td></td></tr>
<tr><td>7</td><td>Dallas Stars</td><td></td></tr>
<tr><td>8</td><td>Boston Bruins (New Jersey Devils)</td><td></td></tr>
<tr><td>9</td><td>Vegas Golden Knights (Detroit Red Wings)</td><td></td></tr>
<tr><td>10</td><td>Vancouver Canucks</td><td></td></tr>
<tr><td>11</td><td>Tampa Bay Lightning (New York Rangers)</td><td></td></tr>
<tr><td>12</td><td>Carolina Hurricanes (Seattle Kraken)</td><td></td></tr>
<tr><td>13</td><td>Quebec Nordiques (Tampa Bay Lightning)</td><td></td></tr>
<tr><td>14</td><td>Chicago Blackhawks</td><td></td></tr>
<tr><td>15</td><td>Edmonton Oilers</td><td></td></tr>
<tr><td>16</td><td>Vegas Golden Knights (San Jose Sharks)</td><td></td></tr>
<tr><td>17</td><td>Montreal Canadiens (Minnesota Wild)</td><td></td></tr>
<tr><td>18</td><td>Buffalo Sabres</td><td></td></tr>
<tr><td>19</td><td>Dallas Stars (Nashville Predators)</td><td></td></tr>
<tr><td>20</td><td>Pittsburgh Penguins (Calgary Flames)</td><td></td></tr>
<tr><td>21</td><td>Toronto Maple Leafs (Arizona Coyotes)</td><td></td></tr>
<tr><td>22</td><td>Tampa Bay Lightning (Boston Bruins)</td><td></td></tr>
<tr><td>23</td><td>New York Rangers (Florida Panthers)</td><td></td></tr>
<tr><td>24</td><td>Montreal Canadiens (Colorado Avalanche)</td><td></td></tr>
<tr><td>25</td><td>St. Louis Blues</td><td></td></tr>
<tr><td>26</td><td>St. Louis Blues (Columbus Blue Jackets)</td><td></td></tr>
<tr><td>27</td><td>Montreal Canadiens (Vegas Golden Knights)</td><td></td></tr>
<tr><td>28</td><td>Pittsburgh Penguins (Montreal Canadiens)</td><td></td></tr>
<tr><td>29</td><td>St. Louis Blues (Philadelphia Flyers)</td><td></td></tr>
<tr><td>30</td><td>Minnesota Wild (Pittsburgh Penguins)</td><td></td></tr>
<tr><td>31</td><td>Los Angeles Kings</td><td></td></tr>
<tr><td>32</td><td>San Jose Sharks (Winnipeg Jets)</td><td></td></tr>
<tr><td>33</td><td>Quebec Nordiques (Toronto Maple Leafs)</td><td></td></tr>
<tr><td>34</td><td>Carolina Hurricanes</td><td></td></tr>
<tr><td>35</td><td>Tampa Bay Lightning (Quebec Nordiques)</td><td></td></tr>
<tr><td>36</td><td>Boston Bruins (Washington Capitals)</td><td></td></tr>
<tr><td>37</td><td>Anaheim Ducks (New York Islanders)</td><td></td></tr>
<tr><td>38</td><td>St. Louis Blues (Ottawa Senators)</td><td></td></tr>
<tr><td>39</td><td>St. Louis Blues (Anaheim Ducks)</td><td></td></tr>
<tr><td>40</td><td>Dallas Stars</td><td></td></tr>
<tr><td>41</td><td>St. Louis Blues (New Jersey Devils)</td><td></td></tr>
<tr><td>42</td><td>Quebec Nordiques (Detroit Red Wings)</td><td></td></tr>
<tr><td>43</td><td>St. Louis Blues (Vancouver Canucks)</td><td></td></tr>
<tr><td>44</td><td>New York Rangers</td><td></td></tr>
<tr><td>45</td><td>Montreal Canadiens (Seattle Kraken)</td><td></td></tr>
<tr><td>46</td><td>Boston Bruins (Tampa Bay Lightning)</td><td></td></tr>
<tr><td>47</td><td>Pittsburgh Penguins (Chicago Blackhawks)</td><td></td></tr>
<tr><td>48</td><td>St. Louis Blues (Edmonton Oilers)</td><td></td></tr>
<tr><td>49</td><td>Calgary Flames (San Jose Sharks)</td><td></td></tr>
<tr><td>50</td><td>New York Rangers (Minnesota Wild)</td><td></td></tr>
<tr><td>51</td><td>Dallas Stars (Buffalo Sabres)</td><td></td></tr>
<tr><td>52</td><td>Montreal Canadiens (Nashville Predators)</td><td></td></tr>
<tr><td>53</td><td>Calgary Flames</td><td></td></tr>
<tr><td>54</td><td>Arizona Coyotes</td><td></td></tr>
<tr><td>55</td><td>Pittsburgh Penguins (Boston Bruins)</td><td></td></tr>
<tr><td>56</td><td>Dallas Stars (Florida Panthers)</td><td></td></tr>
<tr><td>57</td><td>Quebec Nordiques (Colorado Avalanche)</td><td></td></tr>
<tr><td>58</td><td>Dallas Stars (St. Louis Blues)</td><td></td></tr>
<tr><td>59</td><td>Vancouver Canucks (Columbus Blue Jackets)</td><td></td></tr>
<tr><td>60</td><td>Arizona Coyotes (Vegas Golden Knights)</td><td></td></tr>
<tr><td>61</td><td>Columbus Blue Jackets (Montreal Canadiens)</td><td></td></tr>
<tr><td>62</td><td>Pittsburgh Penguins (Philadelphia Flyers)</td><td></td></tr>
<tr><td>63</td><td>Calgary Flames (Pittsburgh Penguins)</td><td></td></tr>
<tr><td>64</td><td>Los Angeles Kings</td><td></td></tr>
<tr><td>65</td><td>Quebec Nordiques (Winnipeg Jets)</td><td></td></tr>
<tr><td>66</td><td>St. Louis Blues (Toronto Maple Leafs)</td><td></td></tr>
<tr><td>67</td><td>Nashville Predators (Carolina Hurricanes)</td><td></td></tr>
<tr><td>68</td><td>Quebec Nordiques</td><td></td></tr>
<tr><td>69</td><td>Montreal Canadiens (Washington Capitals)</td><td></td></tr>
<tr><td>70</td><td>Buffalo Sabres (New York Islanders)</td><td></td></tr>
<tr><td>71</td><td>Nashville Predators (Ottawa Senators)</td><td></td></tr>
<tr><td>72</td><td>Chicago Blackhawks (Anaheim Ducks)</td><td></td></tr>
<tr><td>73</td><td>St. Louis Blues (Dallas Stars)</td><td></td></tr>
<tr><td>74</td><td>Ottawa Senators (New Jersey Devils)</td><td></td></tr>
<tr><td>75</td><td>Quebec Nordiques (Detroit Red Wings)</td><td></td></tr>
<tr><td>76</td><td>Winnipeg Jets (Vancouver Canucks)</td><td></td></tr>
<tr><td>77</td><td>Ottawa Senators (New York Rangers)</td><td></td></tr>
<tr><td>78</td><td>Dallas Stars (Seattle Kraken)</td><td></td></tr>
<tr><td>79</td><td>Montreal Canadiens (Tampa Bay Lightning)</td><td></td></tr>
<tr><td>80</td><td>St. Louis Blues (Chicago Blackhawks)</td><td></td></tr>
<tr><td>81</td><td>Arizona Coyotes (Edmonton Oilers)</td><td></td></tr>
<tr><td>82</td><td>St. Louis Blues (San Jose Sharks)</td><td></td></tr>
<tr><td>83</td><td>Boston Bruins (Minnesota Wild)</td><td></td></tr>
<tr><td>84</td><td>Vancouver Canucks (Buffalo Sabres)</td><td></td></tr>
<tr><td>85</td><td>Florida Panthers (Nashville Predators)</td><td></td></tr>
<tr><td>86</td><td>Buffalo Sabres (Calgary Flames)</td><td></td></tr>
<tr><td>87</td><td>Montreal Canadiens (Arizona Coyotes)</td><td></td></tr>
<tr><td>88</td><td>St. Louis Blues (Boston Bruins)</td><td></td></tr>
<tr><td>89</td><td>Columbus Blue Jackets (Florida Panthers)</td><td></td></tr>
<tr><td>90</td><td>Ottawa Senators (Colorado Avalanche)</td><td></td></tr>
<tr><td>91</td><td>St. Louis Blues</td><td></td></tr>
<tr><td>92</td><td>Quebec Nordiques (Columbus Blue Jackets)</td><td></td></tr>
<tr><td>93</td><td>Minnesota Wild (Vegas Golden Knights)</td><td></td></tr>
<tr><td>94</td><td>Ottawa Senators (Montreal Canadiens)</td><td></td></tr>
<tr><td>95</td><td>Colorado Avalanche (Philadelphia Flyers)</td><td></td></tr>
<tr><td>96</td><td>Montreal Canadiens (Pittsburgh Penguins)</td><td></td></tr>
<tr><td>97</td><td>Buffalo Sabres (Los Angeles Kings)</td><td></td></tr>
<tr><td>98</td><td>Columbus Blue Jackets (Winnipeg Jets)</td><td></td></tr>
<tr><td>99</td><td>Chicago Blackhawks (Toronto Maple Leafs)</td><td></td></tr>
<tr><td>100</td><td>Columbus Blue Jackets (Carolina Hurricanes)</td><td></td></tr>
<tr><td>101</td><td>Montreal Canadiens (Quebec Nordiques)</td><td></td></tr>
<tr><td>102</td><td>Vegas Golden Knights (Washington Capitals)</td><td></td></tr>
<tr><td>103</td><td>Columbus Blue Jackets (New York Islanders)</td><td></td></tr>
<tr><td>104</td><td>Detroit Red Wings (Ottawa Senators)</td><td></td></tr>
<tr><td>105</td><td>Columbus Blue Jackets (Anaheim Ducks)</td><td></td></tr>
<tr><td>106</td><td>Vegas Golden Knights (Dallas Stars)</td><td></td></tr>
<tr><td>107</td><td>Seattle Kraken (New Jersey Devils)</td><td></td></tr>
<tr><td>108</td><td>Seattle Kraken (Detroit Red Wings)</td><td></td></tr>
<tr><td>109</td><td>Seattle Kraken (Vancouver Canucks)</td><td></td></tr>
<tr><td>110</td><td>New York Rangers</td><td></td></tr>
<tr><td>111</td><td>Quebec Nordiques (Seattle Kraken)</td><td></td></tr>
<tr><td>112</td><td>Montreal Canadiens (Tampa Bay Lightning)</td><td></td></tr>
<tr><td>113</td><td>Pittsburgh Penguins (Chicago Blackhawks)</td><td></td></tr>
<tr><td>114</td><td>Edmonton Oilers</td><td></td></tr>
<tr><td>115</td><td>Quebec Nordiques (San Jose Sharks)</td><td></td></tr>
<tr><td>116</td><td>Philadelphia Flyers (Minnesota Wild)</td><td></td></tr>
<tr><td>117</td><td>Columbus Blue Jackets (Buffalo Sabres)</td><td></td></tr>
<tr><td>118</td><td>Columbus Blue Jackets (Nashville Predators)</td><td></td></tr>
<tr><td>119</td><td>Vegas Golden Knights (Calgary Flames)</td><td></td></tr>
<tr><td>120</td><td>Montreal Canadiens (Arizona Coyotes)</td><td></td></tr>
<tr><td>121</td><td>Boston Bruins</td><td></td></tr>
<tr><td>122</td><td>Florida Panthers</td><td></td></tr>
<tr><td>123</td><td>Seattle Kraken (Colorado Avalanche)</td><td></td></tr>
<tr><td>124</td><td>San Jose Sharks (St. Louis Blues)</td><td></td></tr>
<tr><td>125</td><td>Boston Bruins (Columbus Blue Jackets)</td><td></td></tr>
<tr><td>126</td><td>New York Islanders (Vegas Golden Knights)</td><td></td></tr>
<tr><td>127</td><td>Montreal Canadiens</td><td></td></tr>
<tr><td>128</td><td>Boston Bruins (Philadelphia Flyers)</td><td></td></tr>
<tr><td>129</td><td>New York Islanders (Pittsburgh Penguins)</td><td></td></tr>
<tr><td>130</td><td>St. Louis Blues (Los Angeles Kings)</td><td></td></tr>
<tr><td>131</td><td>Montreal Canadiens (Winnipeg Jets)</td><td></td></tr>
<tr><td>132</td><td>Winnipeg Jets (Toronto Maple Leafs)</td><td></td></tr>
<tr><td>133</td><td>St. Louis Blues (Carolina Hurricanes)</td><td></td></tr>
<tr><td>134</td><td>Montreal Canadiens (Quebec Nordiques)</td><td></td></tr>
<tr><td>135</td><td>Washington Capitals</td><td></td></tr>
<tr><td>136</td><td>St. Louis Blues (New York Islanders)</td><td></td></tr>
<tr><td>137</td><td>St. Louis Blues (Ottawa Senators)</td><td></td></tr>
<tr><td>138</td><td>Vegas Golden Knights (Anaheim Ducks)</td><td></td></tr>
<tr><td>139</td><td>Quebec Nordiques (Dallas Stars)</td><td></td></tr>
<tr><td>140</td><td>New Jersey Devils</td><td></td></tr>
<tr><td>141</td><td>Arizona Coyotes (Detroit Red Wings)</td><td></td></tr>
<tr><td>142</td><td>St. Louis Blues (Vancouver Canucks)</td><td></td></tr>
<tr><td>143</td><td>Vegas Golden Knights (New York Rangers)</td><td></td></tr>
<tr><td>144</td><td>Vegas Golden Knights (Seattle Kraken)</td><td></td></tr>
<tr><td>145</td><td>Arizona Coyotes (Tampa Bay Lightning)</td><td></td></tr>
<tr><td>146</td><td>Montreal Canadiens (Chicago Blackhawks)</td><td></td></tr>
<tr><td>147</td><td>Edmonton Oilers</td><td></td></tr>
<tr><td>148</td><td>Vegas Golden Knights (San Jose Sharks)</td><td></td></tr>
<tr><td>149</td><td>Vegas Golden Knights (Minnesota Wild)</td><td></td></tr>
<tr><td>150</td><td>Vegas Golden Knights (Buffalo Sabres)</td><td></td></tr>
<tr><td>151</td><td>Nashville Predators</td><td></td></tr>
<tr><td>152</td><td>Columbus Blue Jackets (Calgary Flames)</td><td></td></tr>
<tr><td>153</td><td>Montreal Canadiens (Arizona Coyotes)</td><td></td></tr>
<tr><td>154</td><td>Boston Bruins</td><td></td></tr>
<tr><td>155</td><td>Florida Panthers</td><td></td></tr>
<tr><td>156</td><td>Pittsburgh Penguins (Colorado Avalanche)</td><td></td></tr>
<tr><td>157</td><td>St. Louis Blues</td><td></td></tr>
<tr><td>158</td><td>Colorado Avalanche (Columbus Blue Jackets)</td><td></td></tr>
<tr><td>159</td><td>Colorado Avalanche (Vegas Golden Knights)</td><td></td></tr>
<tr><td>160</td><td>New Jersey Devils (Montreal Canadiens)</td><td></td></tr>
<tr><td>161</td><td>Philadelphia Flyers</td><td></td></tr>
<tr><td>162</td><td>Vegas Golden Knights (Pittsburgh Penguins)</td><td></td></tr>
<tr><td>163</td><td>Pittsburgh Penguins (Los Angeles Kings)</td><td></td></tr>
<tr><td>164</td><td>Montreal Canadiens (Winnipeg Jets)</td><td></td></tr>
<tr><td>165</td><td>Toronto Maple Leafs</td><td></td></tr>
</tbody></table><br /><h1 class="STHSEntryDraft_AvailableProspect">Availables Prospect</h1>
<?php include "Footer.php";?>
