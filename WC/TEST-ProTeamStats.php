<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Stats</title>
<script src="TEST.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - TEST-STHS.db - TEST-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (min-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(2){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(2){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(2){display:none;}}
@media screen and (max-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(1){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(1){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(1){display:none;}}
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
.STHSTeamStat_Table2 thead th:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(2){display:none;}
}
@media screen and (max-width: 960px) {
.STHSTeamStat_Table2 thead th:nth-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(8){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(9){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(9){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(9){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(10){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(10){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(10){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(11){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(11){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(3){display:none;}
}
}</style>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"TEST-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"TEST-STHSCareerStat.db";
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
<tr><td>Anaheim Ducks</td><td>44</td><td>10</td><td>25</td><td>3</td><td>3</td><td>1</td><td>2</td><td>108</td><td>151</td><td>22</td><td>5</td><td>14</td><td>1</td><td>2</td><td>0</td><td>0</td><td>49</td><td>77</td><td>22</td><td>5</td><td>11</td><td>2</td><td>1</td><td>1</td><td>2</td><td>59</td><td>74</td><td>108</td><td>195</td><td>303</td></tr>
<tr><td>Arizona Coyotes</td><td>44</td><td>23</td><td>16</td><td>4</td><td>0</td><td>1</td><td>0</td><td>145</td><td>123</td><td>22</td><td>12</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>66</td><td>63</td><td>22</td><td>11</td><td>6</td><td>4</td><td>0</td><td>1</td><td>0</td><td>79</td><td>60</td><td>145</td><td>262</td><td>407</td></tr>
<tr><td>Boston Bruins</td><td>44</td><td>16</td><td>21</td><td>2</td><td>3</td><td>0</td><td>2</td><td>125</td><td>139</td><td>22</td><td>8</td><td>11</td><td>1</td><td>1</td><td>0</td><td>1</td><td>64</td><td>72</td><td>22</td><td>8</td><td>10</td><td>1</td><td>2</td><td>0</td><td>1</td><td>61</td><td>67</td><td>125</td><td>227</td><td>352</td></tr>
<tr><td>Buffalo Sabres</td><td>44</td><td>15</td><td>20</td><td>3</td><td>3</td><td>1</td><td>2</td><td>127</td><td>139</td><td>22</td><td>7</td><td>15</td><td>0</td><td>0</td><td>0</td><td>0</td><td>56</td><td>69</td><td>22</td><td>8</td><td>5</td><td>3</td><td>3</td><td>1</td><td>2</td><td>71</td><td>70</td><td>127</td><td>236</td><td>363</td></tr>
<tr><td>Calgary Flames</td><td>44</td><td>17</td><td>19</td><td>1</td><td>1</td><td>4</td><td>2</td><td>138</td><td>141</td><td>22</td><td>11</td><td>9</td><td>0</td><td>0</td><td>1</td><td>1</td><td>69</td><td>61</td><td>22</td><td>6</td><td>10</td><td>1</td><td>1</td><td>3</td><td>1</td><td>69</td><td>80</td><td>138</td><td>239</td><td>377</td></tr>
<tr><td>Carolina Hurricanes</td><td>44</td><td>17</td><td>25</td><td>1</td><td>0</td><td>1</td><td>0</td><td>137</td><td>148</td><td>22</td><td>8</td><td>13</td><td>0</td><td>0</td><td>1</td><td>0</td><td>75</td><td>81</td><td>22</td><td>9</td><td>12</td><td>1</td><td>0</td><td>0</td><td>0</td><td>62</td><td>67</td><td>137</td><td>239</td><td>376</td></tr>
<tr><td>Chicago Blackhawks</td><td>44</td><td>17</td><td>19</td><td>4</td><td>3</td><td>0</td><td>1</td><td>134</td><td>137</td><td>22</td><td>10</td><td>8</td><td>2</td><td>2</td><td>0</td><td>0</td><td>77</td><td>73</td><td>22</td><td>7</td><td>11</td><td>2</td><td>1</td><td>0</td><td>1</td><td>57</td><td>64</td><td>134</td><td>238</td><td>372</td></tr>
<tr><td>Colorado Avalanche</td><td>44</td><td>22</td><td>18</td><td>2</td><td>0</td><td>2</td><td>0</td><td>150</td><td>136</td><td>22</td><td>10</td><td>10</td><td>1</td><td>0</td><td>1</td><td>0</td><td>75</td><td>70</td><td>22</td><td>12</td><td>8</td><td>1</td><td>0</td><td>1</td><td>0</td><td>75</td><td>66</td><td>150</td><td>277</td><td>427</td></tr>
<tr><td>Columbus Blue Jackets</td><td>44</td><td>22</td><td>13</td><td>3</td><td>3</td><td>1</td><td>2</td><td>127</td><td>120</td><td>22</td><td>10</td><td>6</td><td>2</td><td>2</td><td>1</td><td>1</td><td>59</td><td>58</td><td>22</td><td>12</td><td>7</td><td>1</td><td>1</td><td>0</td><td>1</td><td>68</td><td>62</td><td>127</td><td>223</td><td>350</td></tr>
<tr><td>Dallas Stars</td><td>44</td><td>17</td><td>21</td><td>1</td><td>3</td><td>2</td><td>0</td><td>138</td><td>142</td><td>22</td><td>9</td><td>9</td><td>0</td><td>2</td><td>2</td><td>0</td><td>77</td><td>73</td><td>22</td><td>8</td><td>12</td><td>1</td><td>1</td><td>0</td><td>0</td><td>61</td><td>69</td><td>138</td><td>246</td><td>384</td></tr>
<tr><td>Detroit Red Wings</td><td>44</td><td>11</td><td>23</td><td>4</td><td>3</td><td>1</td><td>2</td><td>124</td><td>143</td><td>22</td><td>4</td><td>12</td><td>2</td><td>2</td><td>1</td><td>1</td><td>61</td><td>77</td><td>22</td><td>7</td><td>11</td><td>2</td><td>1</td><td>0</td><td>1</td><td>63</td><td>66</td><td>124</td><td>227</td><td>351</td></tr>
<tr><td>Edmonton Oilers</td><td>44</td><td>17</td><td>18</td><td>2</td><td>3</td><td>3</td><td>1</td><td>119</td><td>124</td><td>22</td><td>9</td><td>9</td><td>2</td><td>0</td><td>1</td><td>1</td><td>66</td><td>68</td><td>22</td><td>8</td><td>9</td><td>0</td><td>3</td><td>2</td><td>0</td><td>53</td><td>56</td><td>119</td><td>212</td><td>331</td></tr>
<tr><td>Florida Panthers</td><td>44</td><td>23</td><td>12</td><td>4</td><td>2</td><td>1</td><td>2</td><td>139</td><td>120</td><td>22</td><td>13</td><td>5</td><td>1</td><td>2</td><td>1</td><td>0</td><td>73</td><td>59</td><td>22</td><td>10</td><td>7</td><td>3</td><td>0</td><td>0</td><td>2</td><td>66</td><td>61</td><td>139</td><td>254</td><td>393</td></tr>
<tr><td>Los Angeles Kings</td><td>44</td><td>21</td><td>12</td><td>3</td><td>5</td><td>1</td><td>2</td><td>139</td><td>117</td><td>22</td><td>9</td><td>6</td><td>2</td><td>3</td><td>1</td><td>1</td><td>75</td><td>63</td><td>22</td><td>12</td><td>6</td><td>1</td><td>2</td><td>0</td><td>1</td><td>64</td><td>54</td><td>139</td><td>250</td><td>389</td></tr>
<tr><td>Minnesota Wild</td><td>44</td><td>12</td><td>20</td><td>4</td><td>3</td><td>1</td><td>4</td><td>113</td><td>127</td><td>22</td><td>5</td><td>10</td><td>1</td><td>2</td><td>1</td><td>3</td><td>54</td><td>65</td><td>22</td><td>7</td><td>10</td><td>3</td><td>1</td><td>0</td><td>1</td><td>59</td><td>62</td><td>113</td><td>210</td><td>323</td></tr>
<tr><td>Montreal Canadiens</td><td>44</td><td>20</td><td>14</td><td>5</td><td>2</td><td>3</td><td>0</td><td>143</td><td>130</td><td>22</td><td>12</td><td>4</td><td>3</td><td>2</td><td>1</td><td>0</td><td>74</td><td>63</td><td>22</td><td>8</td><td>10</td><td>2</td><td>0</td><td>2</td><td>0</td><td>69</td><td>67</td><td>143</td><td>256</td><td>399</td></tr>
<tr><td>Nashville Predators</td><td>44</td><td>18</td><td>18</td><td>3</td><td>3</td><td>1</td><td>1</td><td>110</td><td>109</td><td>22</td><td>7</td><td>11</td><td>1</td><td>2</td><td>0</td><td>1</td><td>48</td><td>58</td><td>22</td><td>11</td><td>7</td><td>2</td><td>1</td><td>1</td><td>0</td><td>62</td><td>51</td><td>110</td><td>194</td><td>304</td></tr>
<tr><td>New Jersey Devils</td><td>44</td><td>15</td><td>18</td><td>2</td><td>5</td><td>2</td><td>2</td><td>117</td><td>127</td><td>22</td><td>9</td><td>9</td><td>0</td><td>2</td><td>1</td><td>1</td><td>56</td><td>54</td><td>22</td><td>6</td><td>9</td><td>2</td><td>3</td><td>1</td><td>1</td><td>61</td><td>73</td><td>117</td><td>212</td><td>329</td></tr>
<tr><td>New York Islanders</td><td>44</td><td>16</td><td>20</td><td>0</td><td>5</td><td>2</td><td>1</td><td>114</td><td>130</td><td>22</td><td>5</td><td>11</td><td>0</td><td>3</td><td>2</td><td>1</td><td>54</td><td>71</td><td>22</td><td>11</td><td>9</td><td>0</td><td>2</td><td>0</td><td>0</td><td>60</td><td>59</td><td>114</td><td>204</td><td>318</td></tr>
<tr><td>New York Rangers</td><td>44</td><td>29</td><td>9</td><td>1</td><td>2</td><td>2</td><td>1</td><td>156</td><td>114</td><td>22</td><td>12</td><td>6</td><td>1</td><td>1</td><td>2</td><td>0</td><td>75</td><td>61</td><td>22</td><td>17</td><td>3</td><td>0</td><td>1</td><td>0</td><td>1</td><td>81</td><td>53</td><td>156</td><td>286</td><td>442</td></tr>
<tr><td>Ottawa Senators</td><td>44</td><td>20</td><td>17</td><td>2</td><td>5</td><td>0</td><td>0</td><td>143</td><td>145</td><td>22</td><td>8</td><td>10</td><td>1</td><td>3</td><td>0</td><td>0</td><td>73</td><td>78</td><td>22</td><td>12</td><td>7</td><td>1</td><td>2</td><td>0</td><td>0</td><td>70</td><td>67</td><td>143</td><td>255</td><td>398</td></tr>
<tr><td>Philadelphia Flyers</td><td>44</td><td>23</td><td>14</td><td>2</td><td>1</td><td>1</td><td>3</td><td>160</td><td>137</td><td>22</td><td>14</td><td>6</td><td>0</td><td>1</td><td>1</td><td>0</td><td>84</td><td>65</td><td>22</td><td>9</td><td>8</td><td>2</td><td>0</td><td>0</td><td>3</td><td>76</td><td>72</td><td>160</td><td>292</td><td>452</td></tr>
<tr><td>Pittsburgh Penguins</td><td>44</td><td>15</td><td>15</td><td>3</td><td>3</td><td>5</td><td>3</td><td>112</td><td>129</td><td>22</td><td>8</td><td>9</td><td>2</td><td>2</td><td>0</td><td>1</td><td>50</td><td>66</td><td>22</td><td>7</td><td>6</td><td>1</td><td>1</td><td>5</td><td>2</td><td>62</td><td>63</td><td>112</td><td>194</td><td>306</td></tr>
<tr><td>Quebec Nordiques</td><td>44</td><td>15</td><td>17</td><td>2</td><td>3</td><td>4</td><td>3</td><td>123</td><td>135</td><td>22</td><td>8</td><td>8</td><td>1</td><td>2</td><td>2</td><td>1</td><td>66</td><td>70</td><td>22</td><td>7</td><td>9</td><td>1</td><td>1</td><td>2</td><td>2</td><td>57</td><td>65</td><td>123</td><td>220</td><td>343</td></tr>
<tr><td>San Jose Sharks</td><td>44</td><td>17</td><td>18</td><td>5</td><td>3</td><td>0</td><td>1</td><td>144</td><td>133</td><td>22</td><td>5</td><td>13</td><td>2</td><td>1</td><td>0</td><td>1</td><td>64</td><td>74</td><td>22</td><td>12</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>80</td><td>59</td><td>144</td><td>267</td><td>411</td></tr>
<tr><td>Seattle Kraken</td><td>44</td><td>16</td><td>22</td><td>3</td><td>1</td><td>2</td><td>0</td><td>113</td><td>121</td><td>22</td><td>9</td><td>10</td><td>2</td><td>0</td><td>1</td><td>0</td><td>58</td><td>62</td><td>22</td><td>7</td><td>12</td><td>1</td><td>1</td><td>1</td><td>0</td><td>55</td><td>59</td><td>113</td><td>199</td><td>312</td></tr>
<tr><td>St. Louis Blues</td><td>44</td><td>13</td><td>20</td><td>3</td><td>6</td><td>1</td><td>1</td><td>117</td><td>132</td><td>22</td><td>7</td><td>11</td><td>1</td><td>3</td><td>0</td><td>0</td><td>54</td><td>65</td><td>22</td><td>6</td><td>9</td><td>2</td><td>3</td><td>1</td><td>1</td><td>63</td><td>67</td><td>117</td><td>209</td><td>326</td></tr>
<tr><td>Tampa Bay Lightning</td><td>44</td><td>17</td><td>16</td><td>1</td><td>3</td><td>3</td><td>4</td><td>146</td><td>144</td><td>22</td><td>6</td><td>7</td><td>0</td><td>3</td><td>2</td><td>4</td><td>69</td><td>75</td><td>22</td><td>11</td><td>9</td><td>1</td><td>0</td><td>1</td><td>0</td><td>77</td><td>69</td><td>146</td><td>256</td><td>402</td></tr>
<tr><td>Toronto Maple Leafs</td><td>44</td><td>17</td><td>16</td><td>6</td><td>2</td><td>2</td><td>1</td><td>143</td><td>120</td><td>22</td><td>7</td><td>8</td><td>5</td><td>1</td><td>1</td><td>0</td><td>69</td><td>53</td><td>22</td><td>10</td><td>8</td><td>1</td><td>1</td><td>1</td><td>1</td><td>74</td><td>67</td><td>143</td><td>254</td><td>397</td></tr>
<tr><td>Vancouver Canucks</td><td>44</td><td>23</td><td>12</td><td>2</td><td>2</td><td>1</td><td>4</td><td>147</td><td>128</td><td>22</td><td>12</td><td>4</td><td>1</td><td>2</td><td>0</td><td>3</td><td>71</td><td>60</td><td>22</td><td>11</td><td>8</td><td>1</td><td>0</td><td>1</td><td>1</td><td>76</td><td>68</td><td>147</td><td>259</td><td>406</td></tr>
<tr><td>Vegas Golden Knights</td><td>44</td><td>17</td><td>21</td><td>2</td><td>3</td><td>0</td><td>1</td><td>123</td><td>138</td><td>22</td><td>9</td><td>9</td><td>1</td><td>2</td><td>0</td><td>1</td><td>64</td><td>70</td><td>22</td><td>8</td><td>12</td><td>1</td><td>1</td><td>0</td><td>0</td><td>59</td><td>68</td><td>123</td><td>223</td><td>346</td></tr>
<tr><td>Washington Capitals</td><td>44</td><td>11</td><td>19</td><td>4</td><td>5</td><td>2</td><td>3</td><td>116</td><td>132</td><td>22</td><td>6</td><td>8</td><td>1</td><td>3</td><td>2</td><td>2</td><td>53</td><td>58</td><td>22</td><td>5</td><td>11</td><td>3</td><td>2</td><td>0</td><td>1</td><td>63</td><td>74</td><td>116</td><td>205</td><td>321</td></tr>
<tr><td>Winnipeg Jets</td><td>44</td><td>21</td><td>15</td><td>4</td><td>2</td><td>1</td><td>1</td><td>150</td><td>129</td><td>22</td><td>12</td><td>6</td><td>3</td><td>0</td><td>0</td><td>1</td><td>76</td><td>54</td><td>22</td><td>9</td><td>9</td><td>1</td><td>2</td><td>1</td><td>0</td><td>74</td><td>75</td><td>150</td><td>273</td><td>423</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>ANH</td><td>49</td><td>33</td><td>22</td><td>5</td><td>1259</td><td>439</td><td>408</td><td>403</td><td>21</td><td>1391</td><td>372</td><td>390</td><td>793</td><td>164</td><td>30</td><td>18,29%</td><td>170</td><td>32</td><td>81,18%</td><td>1</td><td>51,63%</td><td>53,65%</td><td>52,21%</td><td>1058</td><td>1057</td><td>553</td><td>315</td><td>731</td><td>275</td><td>1</td><td>0</td></tr>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>51</td><td>45</td><td>44</td><td>5</td><td>1358</td><td>441</td><td>484</td><td>422</td><td>14</td><td>1294</td><td>380</td><td>383</td><td>813</td><td>157</td><td>36</td><td>22,93%</td><td>167</td><td>37</td><td>77,84%</td><td>1</td><td>49,01%</td><td>47,68%</td><td>50,74%</td><td>1056</td><td>1048</td><td>546</td><td>323</td><td>728</td><td>269</td><td>2</td><td>0</td></tr>
<tr><td>Boston Bruins</td><td>BOS</td><td>39</td><td>36</td><td>48</td><td>3</td><td>1432</td><td>493</td><td>446</td><td>471</td><td>30</td><td>1375</td><td>374</td><td>316</td><td>809</td><td>167</td><td>35</td><td>20,96%</td><td>145</td><td>34</td><td>76,55%</td><td>1</td><td>47,88%</td><td>49,20%</td><td>49,16%</td><td>1049</td><td>1068</td><td>548</td><td>319</td><td>748</td><td>276</td><td>4</td><td>0</td></tr>
<tr><td>Buffalo Sabres</td><td>BUF</td><td>36</td><td>49</td><td>38</td><td>5</td><td>1337</td><td>445</td><td>469</td><td>399</td><td>38</td><td>1356</td><td>390</td><td>373</td><td>805</td><td>151</td><td>38</td><td>25,17%</td><td>166</td><td>30</td><td>81,93%</td><td>1</td><td>54,30%</td><td>49,54%</td><td>52,16%</td><td>1060</td><td>1056</td><td>554</td><td>317</td><td>734</td><td>276</td><td>0</td><td>2</td></tr>
<tr><td>Calgary Flames</td><td>CGY</td><td>56</td><td>33</td><td>44</td><td>8</td><td>1345</td><td>472</td><td>441</td><td>409</td><td>42</td><td>1402</td><td>387</td><td>311</td><td>817</td><td>133</td><td>31</td><td>23,31%</td><td>147</td><td>35</td><td>76,19%</td><td>2</td><td>50,66%</td><td>52,08%</td><td>51,66%</td><td>1057</td><td>1068</td><td>551</td><td>315</td><td>752</td><td>274</td><td>2</td><td>1</td></tr>
<tr><td>Carolina Hurricanes</td><td>CAR</td><td>49</td><td>44</td><td>42</td><td>2</td><td>1279</td><td>448</td><td>412</td><td>416</td><td>5</td><td>1317</td><td>365</td><td>422</td><td>880</td><td>133</td><td>24</td><td>18,05%</td><td>181</td><td>31</td><td>82,87%</td><td>1</td><td>49,33%</td><td>50,50%</td><td>48,69%</td><td>1067</td><td>1020</td><td>558</td><td>323</td><td>704</td><td>271</td><td>2</td><td>2</td></tr>
<tr><td>Chicago Blackhawks</td><td>CHI</td><td>45</td><td>51</td><td>34</td><td>4</td><td>1316</td><td>448</td><td>420</td><td>426</td><td>25</td><td>1353</td><td>411</td><td>397</td><td>804</td><td>150</td><td>30</td><td>20,00%</td><td>181</td><td>40</td><td>77,90%</td><td>1</td><td>49,46%</td><td>52,98%</td><td>50,64%</td><td>1073</td><td>1026</td><td>555</td><td>318</td><td>709</td><td>274</td><td>1</td><td>1</td></tr>
<tr><td>Colorado Avalanche</td><td>COL</td><td>51</td><td>49</td><td>46</td><td>6</td><td>1390</td><td>442</td><td>477</td><td>464</td><td>13</td><td>1351</td><td>409</td><td>365</td><td>872</td><td>171</td><td>39</td><td>22,81%</td><td>158</td><td>36</td><td>77,22%</td><td>1</td><td>49,14%</td><td>51,36%</td><td>52,06%</td><td>1066</td><td>1038</td><td>548</td><td>317</td><td>723</td><td>273</td><td>1</td><td>2</td></tr>
<tr><td>Columbus Blue Jackets</td><td>CLB</td><td>39</td><td>44</td><td>40</td><td>4</td><td>1324</td><td>413</td><td>433</td><td>464</td><td>26</td><td>1291</td><td>338</td><td>310</td><td>847</td><td>153</td><td>31</td><td>20,26%</td><td>135</td><td>26</td><td>80,74%</td><td>0</td><td>49,01%</td><td>51,17%</td><td>55,37%</td><td>1047</td><td>1068</td><td>554</td><td>317</td><td>751</td><td>278</td><td>3</td><td>0</td></tr>
<tr><td>Dallas Stars</td><td>DAL</td><td>39</td><td>53</td><td>43</td><td>5</td><td>1372</td><td>416</td><td>488</td><td>458</td><td>18</td><td>1350</td><td>379</td><td>443</td><td>871</td><td>142</td><td>22</td><td>15,49%</td><td>192</td><td>42</td><td>78,13%</td><td>0</td><td>53,48%</td><td>50,35%</td><td>52,18%</td><td>1047</td><td>1062</td><td>551</td><td>320</td><td>744</td><td>270</td><td>0</td><td>1</td></tr>
<tr><td>Detroit Red Wings</td><td>DET</td><td>51</td><td>33</td><td>35</td><td>8</td><td>1340</td><td>458</td><td>469</td><td>391</td><td>34</td><td>1291</td><td>372</td><td>335</td><td>844</td><td>152</td><td>24</td><td>15,79%</td><td>150</td><td>32</td><td>78,67%</td><td>1</td><td>51,70%</td><td>51,65%</td><td>49,78%</td><td>1030</td><td>1094</td><td>548</td><td>312</td><td>774</td><td>275</td><td>1</td><td>2</td></tr>
<tr><td>Edmonton Oilers</td><td>EDM</td><td>43</td><td>42</td><td>29</td><td>5</td><td>1361</td><td>441</td><td>445</td><td>453</td><td>33</td><td>1311</td><td>355</td><td>334</td><td>826</td><td>152</td><td>27</td><td>17,76%</td><td>146</td><td>19</td><td>86,99%</td><td>1</td><td>50,49%</td><td>50,51%</td><td>51,67%</td><td>1046</td><td>1070</td><td>557</td><td>318</td><td>749</td><td>276</td><td>2</td><td>1</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>47</td><td>37</td><td>50</td><td>5</td><td>1320</td><td>426</td><td>415</td><td>463</td><td>24</td><td>1272</td><td>374</td><td>368</td><td>802</td><td>156</td><td>36</td><td>23,08%</td><td>161</td><td>27</td><td>83,23%</td><td>0</td><td>53,01%</td><td>53,12%</td><td>51,53%</td><td>1027</td><td>1080</td><td>559</td><td>325</td><td>759</td><td>277</td><td>4</td><td>1</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>44</td><td>50</td><td>41</td><td>8</td><td>1392</td><td>432</td><td>500</td><td>444</td><td>30</td><td>1320</td><td>386</td><td>380</td><td>895</td><td>155</td><td>31</td><td>20,00%</td><td>159</td><td>25</td><td>84,28%</td><td>2</td><td>49,20%</td><td>50,99%</td><td>44,36%</td><td>1043</td><td>1072</td><td>551</td><td>318</td><td>750</td><td>278</td><td>1</td><td>1</td></tr>
<tr><td>Minnesota Wild</td><td>MIN</td><td>41</td><td>41</td><td>26</td><td>6</td><td>1284</td><td>462</td><td>422</td><td>384</td><td>30</td><td>1442</td><td>412</td><td>315</td><td>847</td><td>143</td><td>27</td><td>18,88%</td><td>143</td><td>29</td><td>79,72%</td><td>0</td><td>45,57%</td><td>45,57%</td><td>48,77%</td><td>1102</td><td>1026</td><td>549</td><td>316</td><td>716</td><td>271</td><td>5</td><td>1</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>44</td><td>46</td><td>45</td><td>8</td><td>1327</td><td>411</td><td>461</td><td>428</td><td>41</td><td>1321</td><td>345</td><td>328</td><td>896</td><td>159</td><td>30</td><td>18,87%</td><td>138</td><td>30</td><td>78,26%</td><td>1</td><td>51,41%</td><td>50,89%</td><td>48,38%</td><td>1063</td><td>1052</td><td>556</td><td>318</td><td>735</td><td>281</td><td>0</td><td>0</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>37</td><td>31</td><td>38</td><td>4</td><td>1260</td><td>397</td><td>427</td><td>413</td><td>36</td><td>1310</td><td>375</td><td>290</td><td>812</td><td>152</td><td>18</td><td>11,84%</td><td>127</td><td>14</td><td>88,98%</td><td>3</td><td>48,64%</td><td>48,60%</td><td>50,79%</td><td>1046</td><td>1078</td><td>544</td><td>316</td><td>763</td><td>273</td><td>4</td><td>0</td></tr>
<tr><td>New Jersey Devils</td><td>NJD</td><td>42</td><td>36</td><td>35</td><td>5</td><td>1254</td><td>377</td><td>402</td><td>452</td><td>36</td><td>1320</td><td>421</td><td>376</td><td>852</td><td>161</td><td>25</td><td>15,53%</td><td>157</td><td>26</td><td>83,44%</td><td>0</td><td>54,50%</td><td>53,91%</td><td>58,44%</td><td>1072</td><td>1050</td><td>555</td><td>320</td><td>733</td><td>274</td><td>0</td><td>0</td></tr>
<tr><td>New York Islanders</td><td>NYI</td><td>42</td><td>34</td><td>36</td><td>3</td><td>1309</td><td>470</td><td>422</td><td>409</td><td>21</td><td>1334</td><td>422</td><td>340</td><td>784</td><td>151</td><td>24</td><td>15,89%</td><td>151</td><td>25</td><td>83,44%</td><td>1</td><td>50,03%</td><td>46,91%</td><td>47,72%</td><td>1065</td><td>1046</td><td>555</td><td>320</td><td>726</td><td>276</td><td>1</td><td>1</td></tr>
<tr><td>New York Rangers</td><td>NYR</td><td>63</td><td>47</td><td>43</td><td>3</td><td>1340</td><td>439</td><td>459</td><td>429</td><td>19</td><td>1277</td><td>368</td><td>353</td><td>865</td><td>172</td><td>26</td><td>15,12%</td><td>151</td><td>26</td><td>82,78%</td><td>2</td><td>49,36%</td><td>46,00%</td><td>52,91%</td><td>1050</td><td>1067</td><td>544</td><td>323</td><td>748</td><td>275</td><td>3</td><td>1</td></tr>
<tr><td>Ottawa Senators</td><td>OTT</td><td>60</td><td>31</td><td>50</td><td>2</td><td>1365</td><td>426</td><td>426</td><td>492</td><td>21</td><td>1379</td><td>422</td><td>395</td><td>905</td><td>141</td><td>36</td><td>25,53%</td><td>172</td><td>33</td><td>80,81%</td><td>2</td><td>48,60%</td><td>49,29%</td><td>46,11%</td><td>1070</td><td>1035</td><td>553</td><td>318</td><td>715</td><td>272</td><td>1</td><td>2</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>56</td><td>60</td><td>41</td><td>3</td><td>1516</td><td>520</td><td>514</td><td>458</td><td>36</td><td>1269</td><td>382</td><td>314</td><td>830</td><td>172</td><td>43</td><td>25,00%</td><td>140</td><td>26</td><td>81,43%</td><td>0</td><td>53,39%</td><td>52,91%</td><td>51,26%</td><td>1017</td><td>1096</td><td>552</td><td>311</td><td>776</td><td>277</td><td>5</td><td>3</td></tr>
<tr><td>Pittsburgh Penguins</td><td>PIT</td><td>37</td><td>33</td><td>34</td><td>9</td><td>1262</td><td>430</td><td>397</td><td>403</td><td>61</td><td>1299</td><td>388</td><td>306</td><td>770</td><td>156</td><td>25</td><td>16,03%</td><td>134</td><td>29</td><td>78,36%</td><td>2</td><td>51,01%</td><td>53,01%</td><td>50,38%</td><td>1078</td><td>1058</td><td>560</td><td>324</td><td>740</td><td>278</td><td>3</td><td>0</td></tr>
<tr><td>Quebec Nordiques</td><td>QUE</td><td>35</td><td>43</td><td>39</td><td>8</td><td>1346</td><td>447</td><td>434</td><td>450</td><td>42</td><td>1341</td><td>390</td><td>349</td><td>799</td><td>165</td><td>28</td><td>16,97%</td><td>159</td><td>35</td><td>77,99%</td><td>0</td><td>51,42%</td><td>48,47%</td><td>51,32%</td><td>1053</td><td>1074</td><td>557</td><td>320</td><td>748</td><td>280</td><td>4</td><td>1</td></tr>
<tr><td>San Jose Sharks</td><td>SJS</td><td>49</td><td>38</td><td>52</td><td>5</td><td>1405</td><td>417</td><td>484</td><td>490</td><td>17</td><td>1325</td><td>376</td><td>339</td><td>898</td><td>161</td><td>33</td><td>20,50%</td><td>146</td><td>26</td><td>82,19%</td><td>1</td><td>48,88%</td><td>50,34%</td><td>49,78%</td><td>1051</td><td>1065</td><td>545</td><td>316</td><td>747</td><td>272</td><td>1</td><td>1</td></tr>
<tr><td>Seattle Kraken</td><td>SEA</td><td>38</td><td>35</td><td>35</td><td>6</td><td>1249</td><td>413</td><td>440</td><td>379</td><td>22</td><td>1318</td><td>405</td><td>408</td><td>842</td><td>138</td><td>19</td><td>13,77%</td><td>174</td><td>26</td><td>85,06%</td><td>3</td><td>50,98%</td><td>49,63%</td><td>49,19%</td><td>1050</td><td>1060</td><td>550</td><td>320</td><td>741</td><td>274</td><td>4</td><td>0</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>46</td><td>37</td><td>30</td><td>5</td><td>1261</td><td>405</td><td>434</td><td>407</td><td>29</td><td>1420</td><td>393</td><td>382</td><td>824</td><td>167</td><td>24</td><td>14,37%</td><td>163</td><td>35</td><td>78,53%</td><td>2</td><td>49,73%</td><td>51,88%</td><td>49,93%</td><td>1078</td><td>1030</td><td>557</td><td>330</td><td>709</td><td>278</td><td>1</td><td>0</td></tr>
<tr><td>Tampa Bay Lightning</td><td>TBL</td><td>47</td><td>45</td><td>50</td><td>6</td><td>1363</td><td>441</td><td>420</td><td>466</td><td>61</td><td>1320</td><td>370</td><td>399</td><td>799</td><td>170</td><td>32</td><td>18,82%</td><td>170</td><td>35</td><td>79,41%</td><td>0</td><td>52,36%</td><td>54,32%</td><td>50,68%</td><td>1073</td><td>1057</td><td>550</td><td>320</td><td>738</td><td>274</td><td>0</td><td>1</td></tr>
<tr><td>Toronto Maple Leafs</td><td>TOR</td><td>50</td><td>50</td><td>35</td><td>8</td><td>1320</td><td>421</td><td>444</td><td>433</td><td>32</td><td>1300</td><td>367</td><td>285</td><td>810</td><td>174</td><td>42</td><td>24,14%</td><td>131</td><td>26</td><td>80,15%</td><td>0</td><td>52,31%</td><td>50,95%</td><td>54,23%</td><td>1033</td><td>1073</td><td>568</td><td>321</td><td>748</td><td>286</td><td>1</td><td>1</td></tr>
<tr><td>Vancouver Canucks</td><td>VAN</td><td>47</td><td>54</td><td>43</td><td>4</td><td>1370</td><td>446</td><td>454</td><td>450</td><td>37</td><td>1312</td><td>350</td><td>326</td><td>845</td><td>157</td><td>34</td><td>21,66%</td><td>149</td><td>25</td><td>83,22%</td><td>2</td><td>52,09%</td><td>51,40%</td><td>52,72%</td><td>1031</td><td>1089</td><td>554</td><td>317</td><td>766</td><td>280</td><td>0</td><td>0</td></tr>
<tr><td>Vegas Golden Knights</td><td>VEG</td><td>50</td><td>37</td><td>34</td><td>2</td><td>1341</td><td>440</td><td>446</td><td>447</td><td>11</td><td>1356</td><td>426</td><td>348</td><td>864</td><td>134</td><td>24</td><td>17,91%</td><td>167</td><td>40</td><td>76,05%</td><td>0</td><td>50,97%</td><td>51,90%</td><td>51,12%</td><td>1070</td><td>1039</td><td>547</td><td>318</td><td>726</td><td>272</td><td>1</td><td>0</td></tr>
<tr><td>Washington Capitals</td><td>WSH</td><td>41</td><td>34</td><td>35</td><td>9</td><td>1291</td><td>436</td><td>420</td><td>408</td><td>43</td><td>1451</td><td>450</td><td>335</td><td>807</td><td>156</td><td>26</td><td>16,67%</td><td>138</td><td>25</td><td>81,88%</td><td>2</td><td>46,42%</td><td>48,69%</td><td>45,74%</td><td>1099</td><td>1027</td><td>554</td><td>318</td><td>711</td><td>272</td><td>5</td><td>1</td></tr>
<tr><td>Winnipeg Jets</td><td>WPG</td><td>43</td><td>51</td><td>51</td><td>5</td><td>1408</td><td>446</td><td>467</td><td>481</td><td>21</td><td>1328</td><td>391</td><td>323</td><td>839</td><td>140</td><td>28</td><td>20,00%</td><td>137</td><td>21</td><td>84,67%</td><td>1</td><td>46,74%</td><td>49,37%</td><td>49,56%</td><td>1070</td><td>1047</td><td>546</td><td>315</td><td>733</td><td>270</td><td>1</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,99</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Philadelphia Flyers</td><td>3,64</td></tr>
<tr><td>2</td><td>New York Rangers</td><td>3,55</td></tr>
<tr><td>3</td><td>Colorado Avalanche</td><td>3,41</td></tr>
<tr><td>4</td><td>Winnipeg Jets</td><td>3,41</td></tr>
<tr><td>5</td><td>Vancouver Canucks</td><td>3,34</td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>3,32</td></tr>
<tr><td>7</td><td>Arizona Coyotes</td><td>3,30</td></tr>
<tr><td>8</td><td>San Jose Sharks</td><td>3,27</td></tr>
<tr><td>9</td><td>Montreal Canadiens</td><td>3,25</td></tr>
<tr><td>10</td><td>Ottawa Senators</td><td>3,25</td></tr>
<tr><td>11</td><td>Toronto Maple Leafs</td><td>3,25</td></tr>
<tr><td>12</td><td>Florida Panthers</td><td>3,16</td></tr>
<tr><td>13</td><td>Los Angeles Kings</td><td>3,16</td></tr>
<tr><td>14</td><td>Calgary Flames</td><td>3,14</td></tr>
<tr><td>15</td><td>Dallas Stars</td><td>3,14</td></tr>
<tr><td>16</td><td>Carolina Hurricanes</td><td>3,11</td></tr>
<tr><td>17</td><td>Chicago Blackhawks</td><td>3,05</td></tr>
<tr><td>18</td><td>Buffalo Sabres</td><td>2,89</td></tr>
<tr><td>19</td><td>Columbus Blue Jackets</td><td>2,89</td></tr>
<tr><td>20</td><td>Boston Bruins</td><td>2,84</td></tr>
<tr><td>21</td><td>Detroit Red Wings</td><td>2,82</td></tr>
<tr><td>22</td><td>Quebec Nordiques</td><td>2,80</td></tr>
<tr><td>23</td><td>Vegas Golden Knights</td><td>2,80</td></tr>
<tr><td>24</td><td>Edmonton Oilers</td><td>2,70</td></tr>
<tr><td>25</td><td>New Jersey Devils</td><td>2,66</td></tr>
<tr><td>26</td><td>St. Louis Blues</td><td>2,66</td></tr>
<tr><td>27</td><td>Washington Capitals</td><td>2,64</td></tr>
<tr><td>28</td><td>New York Islanders</td><td>2,59</td></tr>
<tr><td>29</td><td>Minnesota Wild</td><td>2,57</td></tr>
<tr><td>30</td><td>Seattle Kraken</td><td>2,57</td></tr>
<tr><td>31</td><td>Pittsburgh Penguins</td><td>2,55</td></tr>
<tr><td>32</td><td>Nashville Predators</td><td>2,50</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>2,45</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,99</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>2,48</td></tr>
<tr><td>2</td><td>New York Rangers</td><td>2,59</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>2,66</td></tr>
<tr><td>4</td><td>Toronto Maple Leafs</td><td>2,73</td></tr>
<tr><td>5</td><td>Florida Panthers</td><td>2,73</td></tr>
<tr><td>6</td><td>Columbus Blue Jackets</td><td>2,73</td></tr>
<tr><td>7</td><td>Seattle Kraken</td><td>2,75</td></tr>
<tr><td>8</td><td>Arizona Coyotes</td><td>2,80</td></tr>
<tr><td>9</td><td>Edmonton Oilers</td><td>2,82</td></tr>
<tr><td>10</td><td>New Jersey Devils</td><td>2,89</td></tr>
<tr><td>11</td><td>Minnesota Wild</td><td>2,89</td></tr>
<tr><td>12</td><td>Vancouver Canucks</td><td>2,91</td></tr>
<tr><td>13</td><td>Winnipeg Jets</td><td>2,93</td></tr>
<tr><td>14</td><td>Pittsburgh Penguins</td><td>2,93</td></tr>
<tr><td>15</td><td>New York Islanders</td><td>2,95</td></tr>
<tr><td>16</td><td>Montreal Canadiens</td><td>2,95</td></tr>
<tr><td>17</td><td>Washington Capitals</td><td>3,00</td></tr>
<tr><td>18</td><td>St. Louis Blues</td><td>3,00</td></tr>
<tr><td>19</td><td>San Jose Sharks</td><td>3,02</td></tr>
<tr><td>20</td><td>Quebec Nordiques</td><td>3,07</td></tr>
<tr><td>21</td><td>Colorado Avalanche</td><td>3,09</td></tr>
<tr><td>22</td><td>Philadelphia Flyers</td><td>3,11</td></tr>
<tr><td>23</td><td>Chicago Blackhawks</td><td>3,11</td></tr>
<tr><td>24</td><td>Vegas Golden Knights</td><td>3,14</td></tr>
<tr><td>25</td><td>Buffalo Sabres</td><td>3,16</td></tr>
<tr><td>26</td><td>Boston Bruins</td><td>3,16</td></tr>
<tr><td>27</td><td>Calgary Flames</td><td>3,20</td></tr>
<tr><td>28</td><td>Dallas Stars</td><td>3,23</td></tr>
<tr><td>29</td><td>Detroit Red Wings</td><td>3,25</td></tr>
<tr><td>30</td><td>Tampa Bay Lightning</td><td>3,27</td></tr>
<tr><td>31</td><td>Ottawa Senators</td><td>3,30</td></tr>
<tr><td>32</td><td>Carolina Hurricanes</td><td>3,36</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>3,43</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>New York Rangers</td><td>136,84%</td></tr>
<tr><td>2</td><td>Toronto Maple Leafs</td><td>119,17%</td></tr>
<tr><td>3</td><td>Los Angeles Kings</td><td>118,80%</td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>117,89%</td></tr>
<tr><td>5</td><td>Philadelphia Flyers</td><td>116,79%</td></tr>
<tr><td>6</td><td>Winnipeg Jets</td><td>116,28%</td></tr>
<tr><td>7</td><td>Florida Panthers</td><td>115,83%</td></tr>
<tr><td>8</td><td>Vancouver Canucks</td><td>114,84%</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>110,29%</td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>110,00%</td></tr>
<tr><td>11</td><td>San Jose Sharks</td><td>108,27%</td></tr>
<tr><td>12</td><td>Columbus Blue Jackets</td><td>105,83%</td></tr>
<tr><td>13</td><td>Tampa Bay Lightning</td><td>101,39%</td></tr>
<tr><td>14</td><td>Nashville Predators</td><td>100,92%</td></tr>
<tr><td>15</td><td>Ottawa Senators</td><td>98,62%</td></tr>
<tr><td>16</td><td>Calgary Flames</td><td>97,87%</td></tr>
<tr><td>17</td><td>Chicago Blackhawks</td><td>97,81%</td></tr>
<tr><td>18</td><td>Dallas Stars</td><td>97,18%</td></tr>
<tr><td>19</td><td>Edmonton Oilers</td><td>95,97%</td></tr>
<tr><td>20</td><td>Seattle Kraken</td><td>93,39%</td></tr>
<tr><td>21</td><td>Carolina Hurricanes</td><td>92,57%</td></tr>
<tr><td>22</td><td>New Jersey Devils</td><td>92,13%</td></tr>
<tr><td>23</td><td>Buffalo Sabres</td><td>91,37%</td></tr>
<tr><td>24</td><td>Quebec Nordiques</td><td>91,11%</td></tr>
<tr><td>25</td><td>Boston Bruins</td><td>89,93%</td></tr>
<tr><td>26</td><td>Vegas Golden Knights</td><td>89,13%</td></tr>
<tr><td>27</td><td>Minnesota Wild</td><td>88,98%</td></tr>
<tr><td>28</td><td>St. Louis Blues</td><td>88,64%</td></tr>
<tr><td>29</td><td>Washington Capitals</td><td>87,88%</td></tr>
<tr><td>30</td><td>New York Islanders</td><td>87,69%</td></tr>
<tr><td>31</td><td>Pittsburgh Penguins</td><td>86,82%</td></tr>
<tr><td>32</td><td>Detroit Red Wings</td><td>86,71%</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>71,52%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,16%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Ottawa Senators</td><td>25,53%</td></tr>
<tr><td>2</td><td>Buffalo Sabres</td><td>25,17%</td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>25,00%</td></tr>
<tr><td>4</td><td>Toronto Maple Leafs</td><td>24,14%</td></tr>
<tr><td>5</td><td>Calgary Flames</td><td>23,31%</td></tr>
<tr><td>6</td><td>Florida Panthers</td><td>23,08%</td></tr>
<tr><td>7</td><td>Arizona Coyotes</td><td>22,93%</td></tr>
<tr><td>8</td><td>Colorado Avalanche</td><td>22,81%</td></tr>
<tr><td>9</td><td>Vancouver Canucks</td><td>21,66%</td></tr>
<tr><td>10</td><td>Boston Bruins</td><td>20,96%</td></tr>
<tr><td>11</td><td>San Jose Sharks</td><td>20,50%</td></tr>
<tr><td>12</td><td>Columbus Blue Jackets</td><td>20,26%</td></tr>
<tr><td>13</td><td>Chicago Blackhawks</td><td>20,00%</td></tr>
<tr><td>14</td><td>Los Angeles Kings</td><td>20,00%</td></tr>
<tr><td>15</td><td>Winnipeg Jets</td><td>20,00%</td></tr>
<tr><td>16</td><td>Minnesota Wild</td><td>18,88%</td></tr>
<tr><td>17</td><td>Montreal Canadiens</td><td>18,87%</td></tr>
<tr><td>18</td><td>Tampa Bay Lightning</td><td>18,82%</td></tr>
<tr><td>19</td><td>Anaheim Ducks</td><td>18,29%</td></tr>
<tr><td>20</td><td>Carolina Hurricanes</td><td>18,05%</td></tr>
<tr><td>21</td><td>Vegas Golden Knights</td><td>17,91%</td></tr>
<tr><td>22</td><td>Edmonton Oilers</td><td>17,76%</td></tr>
<tr><td>23</td><td>Quebec Nordiques</td><td>16,97%</td></tr>
<tr><td>24</td><td>Washington Capitals</td><td>16,67%</td></tr>
<tr><td>25</td><td>Pittsburgh Penguins</td><td>16,03%</td></tr>
<tr><td>26</td><td>New York Islanders</td><td>15,89%</td></tr>
<tr><td>27</td><td>Detroit Red Wings</td><td>15,79%</td></tr>
<tr><td>28</td><td>New Jersey Devils</td><td>15,53%</td></tr>
<tr><td>29</td><td>Dallas Stars</td><td>15,49%</td></tr>
<tr><td>30</td><td>New York Rangers</td><td>15,12%</td></tr>
<tr><td>31</td><td>St. Louis Blues</td><td>14,37%</td></tr>
<tr><td>32</td><td>Seattle Kraken</td><td>13,77%</td></tr>
<tr><td>33</td><td>Nashville Predators</td><td>11,84%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80,84%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>88,98%</td></tr>
<tr><td>2</td><td>Edmonton Oilers</td><td>86,99%</td></tr>
<tr><td>3</td><td>Seattle Kraken</td><td>85,06%</td></tr>
<tr><td>4</td><td>Winnipeg Jets</td><td>84,67%</td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>84,28%</td></tr>
<tr><td>6</td><td>New York Islanders</td><td>83,44%</td></tr>
<tr><td>7</td><td>New Jersey Devils</td><td>83,44%</td></tr>
<tr><td>8</td><td>Florida Panthers</td><td>83,23%</td></tr>
<tr><td>9</td><td>Vancouver Canucks</td><td>83,22%</td></tr>
<tr><td>10</td><td>Carolina Hurricanes</td><td>82,87%</td></tr>
<tr><td>11</td><td>New York Rangers</td><td>82,78%</td></tr>
<tr><td>12</td><td>San Jose Sharks</td><td>82,19%</td></tr>
<tr><td>13</td><td>Buffalo Sabres</td><td>81,93%</td></tr>
<tr><td>14</td><td>Washington Capitals</td><td>81,88%</td></tr>
<tr><td>15</td><td>Philadelphia Flyers</td><td>81,43%</td></tr>
<tr><td>16</td><td>Anaheim Ducks</td><td>81,18%</td></tr>
<tr><td>17</td><td>Ottawa Senators</td><td>80,81%</td></tr>
<tr><td>18</td><td>Columbus Blue Jackets</td><td>80,74%</td></tr>
<tr><td>19</td><td>Toronto Maple Leafs</td><td>80,15%</td></tr>
<tr><td>20</td><td>Minnesota Wild</td><td>79,72%</td></tr>
<tr><td>21</td><td>Tampa Bay Lightning</td><td>79,41%</td></tr>
<tr><td>22</td><td>Detroit Red Wings</td><td>78,67%</td></tr>
<tr><td>23</td><td>St. Louis Blues</td><td>78,53%</td></tr>
<tr><td>24</td><td>Pittsburgh Penguins</td><td>78,36%</td></tr>
<tr><td>25</td><td>Montreal Canadiens</td><td>78,26%</td></tr>
<tr><td>26</td><td>Dallas Stars</td><td>78,13%</td></tr>
<tr><td>27</td><td>Quebec Nordiques</td><td>77,99%</td></tr>
<tr><td>28</td><td>Chicago Blackhawks</td><td>77,90%</td></tr>
<tr><td>29</td><td>Arizona Coyotes</td><td>77,84%</td></tr>
<tr><td>30</td><td>Colorado Avalanche</td><td>77,22%</td></tr>
<tr><td>31</td><td>Boston Bruins</td><td>76,55%</td></tr>
<tr><td>32</td><td>Calgary Flames</td><td>76,19%</td></tr>
<tr><td>33</td><td>Vegas Golden Knights</td><td>76,05%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Buffalo Sabres</td><td>107,09%</td></tr>
<tr><td>2</td><td>Philadelphia Flyers</td><td>106,43%</td></tr>
<tr><td>3</td><td>Ottawa Senators</td><td>106,35%</td></tr>
<tr><td>4</td><td>Florida Panthers</td><td>106,31%</td></tr>
<tr><td>5</td><td>Vancouver Canucks</td><td>104,88%</td></tr>
<tr><td>6</td><td>Edmonton Oilers</td><td>104,75%</td></tr>
<tr><td>7</td><td>Winnipeg Jets</td><td>104,67%</td></tr>
<tr><td>8</td><td>Toronto Maple Leafs</td><td>104,29%</td></tr>
<tr><td>9</td><td>Los Angeles Kings</td><td>104,28%</td></tr>
<tr><td>10</td><td>San Jose Sharks</td><td>102,69%</td></tr>
<tr><td>11</td><td>Columbus Blue Jackets</td><td>101,00%</td></tr>
<tr><td>12</td><td>Carolina Hurricanes</td><td>100,92%</td></tr>
<tr><td>13</td><td>Nashville Predators</td><td>100,82%</td></tr>
<tr><td>14</td><td>Arizona Coyotes</td><td>100,77%</td></tr>
<tr><td>15</td><td>Colorado Avalanche</td><td>100,02%</td></tr>
<tr><td>16</td><td>Calgary Flames</td><td>99,50%</td></tr>
<tr><td>17</td><td>Anaheim Ducks</td><td>99,47%</td></tr>
<tr><td>18</td><td>New York Islanders</td><td>99,34%</td></tr>
<tr><td>19</td><td>New Jersey Devils</td><td>98,97%</td></tr>
<tr><td>20</td><td>Seattle Kraken</td><td>98,83%</td></tr>
<tr><td>21</td><td>Minnesota Wild</td><td>98,60%</td></tr>
<tr><td>22</td><td>Washington Capitals</td><td>98,55%</td></tr>
<tr><td>23</td><td>Tampa Bay Lightning</td><td>98,24%</td></tr>
<tr><td>24</td><td>Chicago Blackhawks</td><td>97,90%</td></tr>
<tr><td>25</td><td>New York Rangers</td><td>97,90%</td></tr>
<tr><td>26</td><td>Boston Bruins</td><td>97,51%</td></tr>
<tr><td>27</td><td>Montreal Canadiens</td><td>97,13%</td></tr>
<tr><td>28</td><td>Quebec Nordiques</td><td>94,96%</td></tr>
<tr><td>29</td><td>Detroit Red Wings</td><td>94,46%</td></tr>
<tr><td>30</td><td>Pittsburgh Penguins</td><td>94,38%</td></tr>
<tr><td>31</td><td>Vegas Golden Knights</td><td>93,96%</td></tr>
<tr><td>32</td><td>Dallas Stars</td><td>93,62%</td></tr>
<tr><td>33</td><td>St. Louis Blues</td><td>92,90%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30,37</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Philadelphia Flyers</td><td>34,45</td></tr>
<tr><td>2</td><td>Boston Bruins</td><td>32,55</td></tr>
<tr><td>3</td><td>Winnipeg Jets</td><td>32,00</td></tr>
<tr><td>4</td><td>San Jose Sharks</td><td>31,93</td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>31,64</td></tr>
<tr><td>6</td><td>Colorado Avalanche</td><td>31,59</td></tr>
<tr><td>7</td><td>Dallas Stars</td><td>31,18</td></tr>
<tr><td>8</td><td>Vancouver Canucks</td><td>31,14</td></tr>
<tr><td>9</td><td>Ottawa Senators</td><td>31,02</td></tr>
<tr><td>10</td><td>Tampa Bay Lightning</td><td>30,98</td></tr>
<tr><td>11</td><td>Edmonton Oilers</td><td>30,93</td></tr>
<tr><td>12</td><td>Arizona Coyotes</td><td>30,86</td></tr>
<tr><td>13</td><td>Quebec Nordiques</td><td>30,59</td></tr>
<tr><td>14</td><td>Calgary Flames</td><td>30,57</td></tr>
<tr><td>15</td><td>Vegas Golden Knights</td><td>30,48</td></tr>
<tr><td>16</td><td>Detroit Red Wings</td><td>30,45</td></tr>
<tr><td>17</td><td>New York Rangers</td><td>30,45</td></tr>
<tr><td>18</td><td>Buffalo Sabres</td><td>30,39</td></tr>
<tr><td>19</td><td>Montreal Canadiens</td><td>30,16</td></tr>
<tr><td>20</td><td>Columbus Blue Jackets</td><td>30,09</td></tr>
<tr><td>21</td><td>Florida Panthers</td><td>30,00</td></tr>
<tr><td>22</td><td>Toronto Maple Leafs</td><td>30,00</td></tr>
<tr><td>23</td><td>Chicago Blackhawks</td><td>29,91</td></tr>
<tr><td>24</td><td>New York Islanders</td><td>29,75</td></tr>
<tr><td>25</td><td>Washington Capitals</td><td>29,34</td></tr>
<tr><td>26</td><td>Minnesota Wild</td><td>29,18</td></tr>
<tr><td>27</td><td>Carolina Hurricanes</td><td>29,07</td></tr>
<tr><td>28</td><td>Pittsburgh Penguins</td><td>28,68</td></tr>
<tr><td>29</td><td>St. Louis Blues</td><td>28,66</td></tr>
<tr><td>30</td><td>Nashville Predators</td><td>28,64</td></tr>
<tr><td>31</td><td>Anaheim Ducks</td><td>28,61</td></tr>
<tr><td>32</td><td>New Jersey Devils</td><td>28,50</td></tr>
<tr><td>33</td><td>Seattle Kraken</td><td>28,39</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30,37</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Philadelphia Flyers</td><td>28,84</td></tr>
<tr><td>2</td><td>Florida Panthers</td><td>28,91</td></tr>
<tr><td>3</td><td>New York Rangers</td><td>29,02</td></tr>
<tr><td>4</td><td>Detroit Red Wings</td><td>29,34</td></tr>
<tr><td>5</td><td>Columbus Blue Jackets</td><td>29,34</td></tr>
<tr><td>6</td><td>Arizona Coyotes</td><td>29,41</td></tr>
<tr><td>7</td><td>Pittsburgh Penguins</td><td>29,52</td></tr>
<tr><td>8</td><td>Toronto Maple Leafs</td><td>29,55</td></tr>
<tr><td>9</td><td>Nashville Predators</td><td>29,77</td></tr>
<tr><td>10</td><td>Edmonton Oilers</td><td>29,80</td></tr>
<tr><td>11</td><td>Vancouver Canucks</td><td>29,82</td></tr>
<tr><td>12</td><td>Carolina Hurricanes</td><td>29,93</td></tr>
<tr><td>13</td><td>Seattle Kraken</td><td>29,95</td></tr>
<tr><td>14</td><td>Tampa Bay Lightning</td><td>30,00</td></tr>
<tr><td>15</td><td>New Jersey Devils</td><td>30,00</td></tr>
<tr><td>16</td><td>Los Angeles Kings</td><td>30,00</td></tr>
<tr><td>17</td><td>Montreal Canadiens</td><td>30,02</td></tr>
<tr><td>18</td><td>San Jose Sharks</td><td>30,11</td></tr>
<tr><td>19</td><td>Winnipeg Jets</td><td>30,18</td></tr>
<tr><td>20</td><td>New York Islanders</td><td>30,32</td></tr>
<tr><td>21</td><td>Quebec Nordiques</td><td>30,48</td></tr>
<tr><td>22</td><td>Dallas Stars</td><td>30,68</td></tr>
<tr><td>23</td><td>Colorado Avalanche</td><td>30,70</td></tr>
<tr><td>24</td><td>Chicago Blackhawks</td><td>30,75</td></tr>
<tr><td>25</td><td>Vegas Golden Knights</td><td>30,82</td></tr>
<tr><td>26</td><td>Buffalo Sabres</td><td>30,82</td></tr>
<tr><td>27</td><td>Boston Bruins</td><td>31,25</td></tr>
<tr><td>28</td><td>Ottawa Senators</td><td>31,34</td></tr>
<tr><td>29</td><td>Anaheim Ducks</td><td>31,61</td></tr>
<tr><td>30</td><td>Calgary Flames</td><td>31,86</td></tr>
<tr><td>31</td><td>St. Louis Blues</td><td>32,27</td></tr>
<tr><td>32</td><td>Minnesota Wild</td><td>32,77</td></tr>
<tr><td>33</td><td>Washington Capitals</td><td>32,98</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Philadelphia Flyers</td><td>119,46%</td></tr>
<tr><td>2</td><td>San Jose Sharks</td><td>106,04%</td></tr>
<tr><td>3</td><td>Winnipeg Jets</td><td>106,02%</td></tr>
<tr><td>4</td><td>Los Angeles Kings</td><td>105,45%</td></tr>
<tr><td>5</td><td>Arizona Coyotes</td><td>104,95%</td></tr>
<tr><td>6</td><td>New York Rangers</td><td>104,93%</td></tr>
<tr><td>7</td><td>Vancouver Canucks</td><td>104,42%</td></tr>
<tr><td>8</td><td>Boston Bruins</td><td>104,15%</td></tr>
<tr><td>9</td><td>Edmonton Oilers</td><td>103,81%</td></tr>
<tr><td>10</td><td>Detroit Red Wings</td><td>103,80%</td></tr>
<tr><td>11</td><td>Florida Panthers</td><td>103,77%</td></tr>
<tr><td>12</td><td>Tampa Bay Lightning</td><td>103,26%</td></tr>
<tr><td>13</td><td>Colorado Avalanche</td><td>102,89%</td></tr>
<tr><td>14</td><td>Columbus Blue Jackets</td><td>102,56%</td></tr>
<tr><td>15</td><td>Dallas Stars</td><td>101,63%</td></tr>
<tr><td>16</td><td>Toronto Maple Leafs</td><td>101,54%</td></tr>
<tr><td>17</td><td>Montreal Canadiens</td><td>100,45%</td></tr>
<tr><td>18</td><td>Quebec Nordiques</td><td>100,37%</td></tr>
<tr><td>19</td><td>Ottawa Senators</td><td>98,98%</td></tr>
<tr><td>20</td><td>Vegas Golden Knights</td><td>98,89%</td></tr>
<tr><td>21</td><td>Buffalo Sabres</td><td>98,60%</td></tr>
<tr><td>22</td><td>New York Islanders</td><td>98,13%</td></tr>
<tr><td>23</td><td>Chicago Blackhawks</td><td>97,27%</td></tr>
<tr><td>24</td><td>Pittsburgh Penguins</td><td>97,15%</td></tr>
<tr><td>25</td><td>Carolina Hurricanes</td><td>97,11%</td></tr>
<tr><td>26</td><td>Nashville Predators</td><td>96,18%</td></tr>
<tr><td>27</td><td>Calgary Flames</td><td>95,93%</td></tr>
<tr><td>28</td><td>New Jersey Devils</td><td>95,00%</td></tr>
<tr><td>29</td><td>Seattle Kraken</td><td>94,76%</td></tr>
<tr><td>30</td><td>Anaheim Ducks</td><td>90,51%</td></tr>
<tr><td>31</td><td>Minnesota Wild</td><td>89,04%</td></tr>
<tr><td>32</td><td>Washington Capitals</td><td>88,97%</td></tr>
<tr><td>33</td><td>St. Louis Blues</td><td>88,80%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8,02</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Toronto Maple Leafs</td><td>6,48</td></tr>
<tr><td>2</td><td>Nashville Predators</td><td>6,59</td></tr>
<tr><td>3</td><td>Pittsburgh Penguins</td><td>6,95</td></tr>
<tr><td>4</td><td>Columbus Blue Jackets</td><td>7,05</td></tr>
<tr><td>5</td><td>Calgary Flames</td><td>7,07</td></tr>
<tr><td>6</td><td>Philadelphia Flyers</td><td>7,14</td></tr>
<tr><td>7</td><td>Minnesota Wild</td><td>7,16</td></tr>
<tr><td>8</td><td>Boston Bruins</td><td>7,18</td></tr>
<tr><td>9</td><td>Winnipeg Jets</td><td>7,34</td></tr>
<tr><td>10</td><td>Vancouver Canucks</td><td>7,41</td></tr>
<tr><td>11</td><td>Montreal Canadiens</td><td>7,45</td></tr>
<tr><td>12</td><td>Edmonton Oilers</td><td>7,59</td></tr>
<tr><td>13</td><td>Washington Capitals</td><td>7,61</td></tr>
<tr><td>14</td><td>Detroit Red Wings</td><td>7,61</td></tr>
<tr><td>15</td><td>San Jose Sharks</td><td>7,70</td></tr>
<tr><td>16</td><td>New York Islanders</td><td>7,73</td></tr>
<tr><td>17</td><td>Vegas Golden Knights</td><td>7,91</td></tr>
<tr><td>18</td><td>Quebec Nordiques</td><td>7,93</td></tr>
<tr><td>19</td><td>New York Rangers</td><td>8,02</td></tr>
<tr><td>20</td><td>Colorado Avalanche</td><td>8,30</td></tr>
<tr><td>21</td><td>Florida Panthers</td><td>8,36</td></tr>
<tr><td>22</td><td>Buffalo Sabres</td><td>8,48</td></tr>
<tr><td>23</td><td>New Jersey Devils</td><td>8,55</td></tr>
<tr><td>24</td><td>Los Angeles Kings</td><td>8,64</td></tr>
<tr><td>25</td><td>St. Louis Blues</td><td>8,68</td></tr>
<tr><td>26</td><td>Arizona Coyotes</td><td>8,70</td></tr>
<tr><td>27</td><td>Anaheim Ducks</td><td>8,86</td></tr>
<tr><td>28</td><td>Ottawa Senators</td><td>8,98</td></tr>
<tr><td>29</td><td>Chicago Blackhawks</td><td>9,02</td></tr>
<tr><td>30</td><td>Tampa Bay Lightning</td><td>9,07</td></tr>
<tr><td>31</td><td>Seattle Kraken</td><td>9,27</td></tr>
<tr><td>32</td><td>Carolina Hurricanes</td><td>9,59</td></tr>
<tr><td>33</td><td>Dallas Stars</td><td>10,07</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18,98</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Ottawa Senators</td><td>20,57</td></tr>
<tr><td>2</td><td>San Jose Sharks</td><td>20,41</td></tr>
<tr><td>3</td><td>Montreal Canadiens</td><td>20,36</td></tr>
<tr><td>4</td><td>Los Angeles Kings</td><td>20,34</td></tr>
<tr><td>5</td><td>Carolina Hurricanes</td><td>20,00</td></tr>
<tr><td>6</td><td>Colorado Avalanche</td><td>19,82</td></tr>
<tr><td>7</td><td>Dallas Stars</td><td>19,80</td></tr>
<tr><td>8</td><td>New York Rangers</td><td>19,66</td></tr>
<tr><td>9</td><td>Vegas Golden Knights</td><td>19,64</td></tr>
<tr><td>10</td><td>New Jersey Devils</td><td>19,36</td></tr>
<tr><td>11</td><td>Columbus Blue Jackets</td><td>19,25</td></tr>
<tr><td>12</td><td>Minnesota Wild</td><td>19,25</td></tr>
<tr><td>13</td><td>Vancouver Canucks</td><td>19,20</td></tr>
<tr><td>14</td><td>Detroit Red Wings</td><td>19,18</td></tr>
<tr><td>15</td><td>Seattle Kraken</td><td>19,14</td></tr>
<tr><td>16</td><td>Winnipeg Jets</td><td>19,07</td></tr>
<tr><td>17</td><td>Philadelphia Flyers</td><td>18,86</td></tr>
<tr><td>18</td><td>Edmonton Oilers</td><td>18,77</td></tr>
<tr><td>19</td><td>St. Louis Blues</td><td>18,73</td></tr>
<tr><td>20</td><td>Calgary Flames</td><td>18,57</td></tr>
<tr><td>21</td><td>Arizona Coyotes</td><td>18,48</td></tr>
<tr><td>22</td><td>Nashville Predators</td><td>18,45</td></tr>
<tr><td>23</td><td>Toronto Maple Leafs</td><td>18,41</td></tr>
<tr><td>24</td><td>Boston Bruins</td><td>18,39</td></tr>
<tr><td>25</td><td>Washington Capitals</td><td>18,34</td></tr>
<tr><td>26</td><td>Buffalo Sabres</td><td>18,30</td></tr>
<tr><td>27</td><td>Chicago Blackhawks</td><td>18,27</td></tr>
<tr><td>28</td><td>Florida Panthers</td><td>18,23</td></tr>
<tr><td>29</td><td>Quebec Nordiques</td><td>18,16</td></tr>
<tr><td>30</td><td>Tampa Bay Lightning</td><td>18,16</td></tr>
<tr><td>31</td><td>Anaheim Ducks</td><td>18,02</td></tr>
<tr><td>32</td><td>New York Islanders</td><td>17,82</td></tr>
<tr><td>33</td><td>Pittsburgh Penguins</td><td>17,50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>New Jersey Devils</td><td>54,96%</td></tr>
<tr><td>2</td><td>Tampa Bay Lightning</td><td>52,83%</td></tr>
<tr><td>3</td><td>Florida Panthers</td><td>52,79%</td></tr>
<tr><td>4</td><td>Philadelphia Flyers</td><td>52,79%</td></tr>
<tr><td>5</td><td>Anaheim Ducks</td><td>52,57%</td></tr>
<tr><td>6</td><td>Toronto Maple Leafs</td><td>52,09%</td></tr>
<tr><td>7</td><td>Buffalo Sabres</td><td>51,98%</td></tr>
<tr><td>8</td><td>Dallas Stars</td><td>51,97%</td></tr>
<tr><td>9</td><td>Vancouver Canucks</td><td>51,92%</td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>51,72%</td></tr>
<tr><td>11</td><td>Calgary Flames</td><td>51,41%</td></tr>
<tr><td>12</td><td>Vegas Golden Knights</td><td>51,37%</td></tr>
<tr><td>13</td><td>Detroit Red Wings</td><td>51,33%</td></tr>
<tr><td>14</td><td>Chicago Blackhawks</td><td>51,09%</td></tr>
<tr><td>15</td><td>Columbus Blue Jackets</td><td>51,01%</td></tr>
<tr><td>16</td><td>Edmonton Oilers</td><td>50,71%</td></tr>
<tr><td>17</td><td>Montreal Canadiens</td><td>50,62%</td></tr>
<tr><td>18</td><td>St. Louis Blues</td><td>50,60%</td></tr>
<tr><td>19</td><td>Colorado Avalanche</td><td>50,58%</td></tr>
<tr><td>20</td><td>Quebec Nordiques</td><td>50,16%</td></tr>
<tr><td>21</td><td>Seattle Kraken</td><td>50,12%</td></tr>
<tr><td>22</td><td>Carolina Hurricanes</td><td>49,67%</td></tr>
<tr><td>23</td><td>San Jose Sharks</td><td>49,66%</td></tr>
<tr><td>24</td><td>Los Angeles Kings</td><td>49,08%</td></tr>
<tr><td>25</td><td>Nashville Predators</td><td>49,00%</td></tr>
<tr><td>26</td><td>Arizona Coyotes</td><td>48,76%</td></tr>
<tr><td>27</td><td>Boston Bruins</td><td>48,67%</td></tr>
<tr><td>28</td><td>New York Rangers</td><td>48,62%</td></tr>
<tr><td>29</td><td>Ottawa Senators</td><td>48,43%</td></tr>
<tr><td>30</td><td>New York Islanders</td><td>48,35%</td></tr>
<tr><td>31</td><td>Winnipeg Jets</td><td>48,34%</td></tr>
<tr><td>32</td><td>Washington Capitals</td><td>47,22%</td></tr>
<tr><td>33</td><td>Minnesota Wild</td><td>46,15%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
