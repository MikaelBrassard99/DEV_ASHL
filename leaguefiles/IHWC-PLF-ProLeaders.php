﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Pro Leaders</title>
<script src="IHWC-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(3){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(3){display:none;}
}
@media screen and (max-width: 1060px) {
.STHSScoring_PlayersTable1 tbody td:nth-last-child(6){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(6){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(7){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(7){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(8){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(8){display:none;}
}
@media screen and (max-width: 960px) {
.STHSW10 {display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(3){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(3){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(4){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(4){display:none;}
}
@media screen and (max-width: 890px) {
.STHSW10 {display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(13){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(13){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(15){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(15){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(16){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(16){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(5){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(5){display:none;}
}</style>
<link href="IHWC-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"IHWC-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"IHWC-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<script>$(function(){$("table").basictablesorter()});$(function (){$("table").stickyTableHeaders();});</script>
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tr><td>1</td><td><a href="PlayerReport.php?Player=121">Jack Eichel (USA)</a></td><td>X</td><td></td><td>8</td><td>5</td><td>4</td><td><b>9</b></td><td>-3</td><td>4</td><td>0</td><td>20</td><td>22</td><td>31</td><td>7</td><td>17</td><td>16,13%</td><td>0</td><td>160</td><td>19,96</td><td>0</td><td>4</td><td>4</td><td>4</td><td>21</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>2</td><td><a href="PlayerReport.php?Player=235">Gabriel Landeskog (SWE)</a></td><td>X</td><td></td><td>6</td><td>4</td><td>5</td><td><b>9</b></td><td>6</td><td>2</td><td>0</td><td>20</td><td>9</td><td>29</td><td>1</td><td>21</td><td>13,79%</td><td>1</td><td>142</td><td>23,63</td><td>0</td><td>1</td><td>1</td><td>1</td><td>12</td><td>0</td><td>1</td><td>1</td><td>0</td><td>23</td></tr>
<tr><td>3</td><td><a href="PlayerReport.php?Player=38">Dominik Kahun (R) (ALL)</a></td><td>X</td><td></td><td>6</td><td>3</td><td>6</td><td><b>9</b></td><td>2</td><td>2</td><td>0</td><td>4</td><td>13</td><td>19</td><td>2</td><td>6</td><td>15,79%</td><td>0</td><td>123</td><td>20,50</td><td>0</td><td>2</td><td>2</td><td>3</td><td>16</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td></tr>
<tr><td>4</td><td><a href="PlayerReport.php?Player=190">Sebastian Aho (FIN)</a></td><td>X</td><td></td><td>7</td><td>3</td><td>6</td><td><b>9</b></td><td>1</td><td>0</td><td>0</td><td>9</td><td>9</td><td>30</td><td>9</td><td>19</td><td>10,00%</td><td>2</td><td>147</td><td>21,00</td><td>0</td><td>2</td><td>2</td><td>7</td><td>26</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td></tr>
<tr><td>5</td><td><a href="PlayerReport.php?Player=117">Derek Stepan (R) (USA)</a></td><td>X</td><td></td><td>8</td><td>3</td><td>6</td><td><b>9</b></td><td>6</td><td>4</td><td>0</td><td>16</td><td>21</td><td>31</td><td>5</td><td>13</td><td>9,68%</td><td>2</td><td>173</td><td>21,63</td><td>1</td><td>1</td><td>2</td><td>8</td><td>19</td><td>0</td><td>0</td><td>0</td><td>3</td><td>16</td></tr>
<tr><td>6</td><td><a href="PlayerReport.php?Player=230">Ryan Ellis (CAN)</a></td><td></td><td>X</td><td>7</td><td>2</td><td>7</td><td><b>9</b></td><td>4</td><td>0</td><td>0</td><td>2</td><td>4</td><td>13</td><td>7</td><td>14</td><td>15,38%</td><td>3</td><td>142</td><td>20,28</td><td>2</td><td>1</td><td>3</td><td>9</td><td>18</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td></tr>
<tr><td>7</td><td><a href="PlayerReport.php?Player=107">Martin Bakos (SLO)</a></td><td>X</td><td></td><td>5</td><td>4</td><td>4</td><td><b>8</b></td><td>-1</td><td>0</td><td>0</td><td>4</td><td>9</td><td>17</td><td>4</td><td>8</td><td>23,53%</td><td>0</td><td>121</td><td>24,22</td><td>0</td><td>3</td><td>3</td><td>2</td><td>17</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td></tr>
<tr><td>8</td><td><a href="PlayerReport.php?Player=162">Dmitri Kulikov (RUS)</a></td><td></td><td>X</td><td>5</td><td>3</td><td>5</td><td><b>8</b></td><td>0</td><td>6</td><td>0</td><td>9</td><td>9</td><td>24</td><td>7</td><td>7</td><td>12,50%</td><td>7</td><td>129</td><td>25,77</td><td>3</td><td>2</td><td>5</td><td>17</td><td>16</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td></tr>
<tr><td>9</td><td><a href="PlayerReport.php?Player=19">Nico Hischier (SUI)</a></td><td>X</td><td></td><td>8</td><td>3</td><td>5</td><td><b>8</b></td><td>-3</td><td>4</td><td>0</td><td>4</td><td>18</td><td>22</td><td>7</td><td>13</td><td>13,64%</td><td>1</td><td>178</td><td>22,30</td><td>1</td><td>2</td><td>3</td><td>5</td><td>22</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td></tr>
<tr><td>10</td><td><a href="PlayerReport.php?Player=29">Luca Sbisa (SUI)</a></td><td></td><td>X</td><td>8</td><td>3</td><td>5</td><td><b>8</b></td><td>0</td><td>12</td><td>0</td><td>32</td><td>9</td><td>12</td><td>3</td><td>13</td><td>25,00%</td><td>25</td><td>211</td><td>26,40</td><td>1</td><td>0</td><td>1</td><td>5</td><td>20</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td></tr>
<tr><td>11</td><td><a href="PlayerReport.php?Player=214">Brad Marchand (CAN)</a></td><td>X</td><td></td><td>7</td><td>2</td><td>6</td><td><b>8</b></td><td>3</td><td>2</td><td>0</td><td>12</td><td>5</td><td>26</td><td>10</td><td>18</td><td>7,69%</td><td>0</td><td>117</td><td>16,67</td><td>1</td><td>3</td><td>4</td><td>10</td><td>20</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td></tr>
<tr><td>12</td><td><a href="PlayerReport.php?Player=191">Mikko Rantanen (FIN)</a></td><td>X</td><td></td><td>7</td><td>5</td><td>2</td><td><b>7</b></td><td>1</td><td>7</td><td>5</td><td>16</td><td>17</td><td>22</td><td>4</td><td>17</td><td>22,73%</td><td>0</td><td>148</td><td>21,21</td><td>1</td><td>1</td><td>2</td><td>8</td><td>25</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td></tr>
<tr><td>13</td><td><a href="PlayerReport.php?Player=148">Alexander Ovechkin (RUS)</a></td><td>X</td><td></td><td>5</td><td>4</td><td>3</td><td><b>7</b></td><td>-3</td><td>2</td><td>0</td><td>14</td><td>6</td><td>22</td><td>6</td><td>15</td><td>18,18%</td><td>0</td><td>107</td><td>21,42</td><td>0</td><td>2</td><td>2</td><td>5</td><td>15</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td></tr>
<tr><td>14</td><td><a href="PlayerReport.php?Player=127">Max Pacioretty (USA)</a></td><td>X</td><td></td><td>8</td><td>4</td><td>3</td><td><b>7</b></td><td>6</td><td>10</td><td>0</td><td>21</td><td>7</td><td>25</td><td>9</td><td>9</td><td>16,00%</td><td>4</td><td>155</td><td>19,37</td><td>0</td><td>0</td><td>0</td><td>3</td><td>18</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>15</td><td><a href="PlayerReport.php?Player=204">Miro Heiskanen (R) (FIN)</a></td><td></td><td>X</td><td>7</td><td>3</td><td>4</td><td><b>7</b></td><td>-4</td><td>2</td><td>0</td><td>6</td><td>5</td><td>11</td><td>6</td><td>9</td><td>27,27%</td><td>12</td><td>165</td><td>23,62</td><td>3</td><td>1</td><td>4</td><td>7</td><td>19</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td></tr>
<tr><td>16</td><td><a href="PlayerReport.php?Player=164">Dmitri Orlov (RUS)</a></td><td></td><td>X</td><td>5</td><td>2</td><td>5</td><td><b>7</b></td><td>-2</td><td>0</td><td>0</td><td>1</td><td>8</td><td>9</td><td>1</td><td>7</td><td>22,22%</td><td>8</td><td>117</td><td>23,32</td><td>1</td><td>0</td><td>1</td><td>4</td><td>13</td><td>0</td><td>0</td><td>0</td><td>1</td><td>16</td></tr>
<tr><td>17</td><td><a href="PlayerReport.php?Player=228">Brent Burns (CAN)</a></td><td>X</td><td>X</td><td>7</td><td>2</td><td>5</td><td><b>7</b></td><td>1</td><td>6</td><td>0</td><td>10</td><td>3</td><td>15</td><td>4</td><td>10</td><td>13,33%</td><td>7</td><td>145</td><td>20,70</td><td>1</td><td>1</td><td>2</td><td>8</td><td>28</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td></tr>
<tr><td>18</td><td><a href="PlayerReport.php?Player=94">Marko Dano (SLO)</a></td><td>X</td><td></td><td>5</td><td>1</td><td>6</td><td><b>7</b></td><td>-1</td><td>2</td><td>0</td><td>9</td><td>15</td><td>23</td><td>3</td><td>11</td><td>4,35%</td><td>1</td><td>120</td><td>23,92</td><td>1</td><td>1</td><td>2</td><td>8</td><td>17</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td></tr>
<tr><td>19</td><td><a href="PlayerReport.php?Player=211">Taylor Hall (CAN)</a></td><td>X</td><td></td><td>7</td><td>1</td><td>6</td><td><b>7</b></td><td>7</td><td>0</td><td>0</td><td>2</td><td>9</td><td>29</td><td>9</td><td>13</td><td>3,45%</td><td>2</td><td>118</td><td>16,80</td><td>0</td><td>1</td><td>1</td><td>7</td><td>26</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td></tr>
<tr><td>20</td><td><a href="PlayerReport.php?Player=28">Gregory Hofmann (SUI)</a></td><td>X</td><td></td><td>8</td><td>1</td><td>6</td><td><b>7</b></td><td>5</td><td>6</td><td>0</td><td>8</td><td>6</td><td>29</td><td>6</td><td>18</td><td>3,45%</td><td>2</td><td>149</td><td>18,57</td><td>0</td><td>1</td><td>1</td><td>6</td><td>16</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td></tr>
<tr><td>21</td><td><a href="PlayerReport.php?Player=229">Cody Ceci (CAN)</a></td><td></td><td>X</td><td>6</td><td>0</td><td>7</td><td><b>7</b></td><td>4</td><td>2</td><td>0</td><td>8</td><td>10</td><td>11</td><td>4</td><td>15</td><td>0,00%</td><td>8</td><td>127</td><td>21,11</td><td>0</td><td>1</td><td>1</td><td>4</td><td>14</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td></tr>
<tr><td>22</td><td><a href="PlayerReport.php?Player=205">Olli Maatta (FIN)</a></td><td></td><td>X</td><td>7</td><td>0</td><td>7</td><td><b>7</b></td><td>0</td><td>4</td><td>0</td><td>10</td><td>5</td><td>14</td><td>4</td><td>8</td><td>0,00%</td><td>21</td><td>173</td><td>24,72</td><td>0</td><td>3</td><td>3</td><td>8</td><td>24</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td></tr>
<tr><td>23</td><td><a href="PlayerReport.php?Player=213">Steven Stamkos (CAN)</a></td><td>X</td><td></td><td>7</td><td>4</td><td>2</td><td><b>6</b></td><td>7</td><td>6</td><td>0</td><td>9</td><td>10</td><td>27</td><td>11</td><td>23</td><td>14,81%</td><td>1</td><td>113</td><td>16,18</td><td>0</td><td>0</td><td>0</td><td>8</td><td>26</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>24</td><td><a href="PlayerReport.php?Player=56">David Krejci (TCH)</a></td><td>X</td><td></td><td>5</td><td>3</td><td>3</td><td><b>6</b></td><td>3</td><td>4</td><td>0</td><td>5</td><td>16</td><td>11</td><td>3</td><td>16</td><td>27,27%</td><td>1</td><td>108</td><td>21,51</td><td>1</td><td>0</td><td>1</td><td>4</td><td>12</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td></tr>
<tr><td>25</td><td><a href="PlayerReport.php?Player=233">William Nylander (SWE)</a></td><td>X</td><td></td><td>6</td><td>3</td><td>3</td><td><b>6</b></td><td>3</td><td>0</td><td>0</td><td>0</td><td>7</td><td>20</td><td>10</td><td>7</td><td>15,00%</td><td>0</td><td>118</td><td>19,73</td><td>1</td><td>0</td><td>1</td><td>3</td><td>11</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td></tr>
<tr><td>26</td><td><a href="PlayerReport.php?Player=219">Ty Rattie (CAN)</a></td><td>X</td><td></td><td>7</td><td>3</td><td>3</td><td><b>6</b></td><td>4</td><td>0</td><td>0</td><td>6</td><td>3</td><td>15</td><td>2</td><td>9</td><td>20,00%</td><td>1</td><td>83</td><td>11,85</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>27</td><td><a href="PlayerReport.php?Player=221">Jonathan Toews (CAN)</a></td><td>X</td><td></td><td>7</td><td>3</td><td>3</td><td><b>6</b></td><td>4</td><td>0</td><td>0</td><td>3</td><td>16</td><td>25</td><td>8</td><td>12</td><td>12,00%</td><td>2</td><td>115</td><td>16,49</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td><td>26</td></tr>
<tr><td>28</td><td><a href="PlayerReport.php?Player=15">Noah Rod (R) (SUI)</a></td><td>X</td><td></td><td>8</td><td>3</td><td>3</td><td><b>6</b></td><td>5</td><td>4</td><td>0</td><td>10</td><td>10</td><td>19</td><td>6</td><td>15</td><td>15,79%</td><td>0</td><td>150</td><td>18,77</td><td>0</td><td>1</td><td>1</td><td>3</td><td>16</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td></tr>
<tr><td>29</td><td><a href="PlayerReport.php?Player=130">Phil Kessel (USA)</a></td><td>X</td><td></td><td>8</td><td>3</td><td>3</td><td><b>6</b></td><td>3</td><td>2</td><td>0</td><td>1</td><td>5</td><td>18</td><td>4</td><td>9</td><td>16,67%</td><td>2</td><td>158</td><td>19,75</td><td>1</td><td>0</td><td>1</td><td>2</td><td>22</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>30</td><td><a href="PlayerReport.php?Player=57">Ondrej Kase (TCH)</a></td><td>X</td><td></td><td>5</td><td>2</td><td>4</td><td><b>6</b></td><td>4</td><td>0</td><td>0</td><td>3</td><td>10</td><td>20</td><td>8</td><td>16</td><td>10,00%</td><td>1</td><td>113</td><td>22,59</td><td>0</td><td>2</td><td>2</td><td>5</td><td>12</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td></tr>
<tr><td>31</td><td><a href="PlayerReport.php?Player=48">Tobias Rieder (ALL)</a></td><td>X</td><td></td><td>6</td><td>2</td><td>4</td><td><b>6</b></td><td>1</td><td>4</td><td>0</td><td>6</td><td>19</td><td>16</td><td>8</td><td>19</td><td>12,50%</td><td>2</td><td>137</td><td>22,83</td><td>0</td><td>1</td><td>1</td><td>3</td><td>18</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td></tr>
<tr><td>32</td><td><a href="PlayerReport.php?Player=249">Hampus Lindholm (SWE)</a></td><td></td><td>X</td><td>6</td><td>2</td><td>4</td><td><b>6</b></td><td>-3</td><td>12</td><td>0</td><td>10</td><td>7</td><td>11</td><td>3</td><td>4</td><td>18,18%</td><td>8</td><td>131</td><td>21,89</td><td>2</td><td>2</td><td>4</td><td>5</td><td>11</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td></tr>
<tr><td>33</td><td><a href="PlayerReport.php?Player=31">Nino Niederreiter (SUI)</a></td><td>X</td><td></td><td>8</td><td>2</td><td>4</td><td><b>6</b></td><td>-1</td><td>6</td><td>0</td><td>14</td><td>11</td><td>34</td><td>13</td><td>26</td><td>5,88%</td><td>1</td><td>170</td><td>21,25</td><td>0</td><td>1</td><td>1</td><td>3</td><td>22</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td></tr>
<tr><td>34</td><td><a href="PlayerReport.php?Player=70">Andrej Sustr (TCH)</a></td><td></td><td>X</td><td>5</td><td>1</td><td>5</td><td><b>6</b></td><td>5</td><td>0</td><td>0</td><td>12</td><td>7</td><td>4</td><td>2</td><td>5</td><td>25,00%</td><td>7</td><td>92</td><td>18,42</td><td>1</td><td>1</td><td>2</td><td>3</td><td>9</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td></tr>
<tr><td>35</td><td><a href="PlayerReport.php?Player=18">Raphael Diaz (SUI)</a></td><td></td><td>X</td><td>7</td><td>1</td><td>5</td><td><b>6</b></td><td>1</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>1</td><td>5</td><td>11,11%</td><td>5</td><td>148</td><td>21,15</td><td>0</td><td>1</td><td>1</td><td>3</td><td>16</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td></tr>
<tr><td>36</td><td><a href="PlayerReport.php?Player=225">Cam Fowler (CAN)</a></td><td></td><td>X</td><td>7</td><td>1</td><td>5</td><td><b>6</b></td><td>5</td><td>2</td><td>0</td><td>2</td><td>7</td><td>16</td><td>13</td><td>10</td><td>6,25%</td><td>14</td><td>166</td><td>23,72</td><td>0</td><td>1</td><td>1</td><td>12</td><td>28</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td></tr>
<tr><td>37</td><td><a href="PlayerReport.php?Player=131">Tyler Myers (USA)</a></td><td></td><td>X</td><td>8</td><td>1</td><td>5</td><td><b>6</b></td><td>3</td><td>13</td><td>5</td><td>23</td><td>8</td><td>9</td><td>3</td><td>12</td><td>11,11%</td><td>11</td><td>195</td><td>24,43</td><td>0</td><td>2</td><td>2</td><td>6</td><td>22</td><td>1</td><td>0</td><td>1</td><td>1</td><td>15</td></tr>
<tr><td>38</td><td><a href="PlayerReport.php?Player=132">Zach Bogosian (USA)</a></td><td></td><td>X</td><td>8</td><td>0</td><td>6</td><td><b>6</b></td><td>5</td><td>8</td><td>0</td><td>18</td><td>8</td><td>11</td><td>2</td><td>7</td><td>0,00%</td><td>6</td><td>175</td><td>21,85</td><td>0</td><td>3</td><td>3</td><td>4</td><td>20</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td></tr>
<tr><td>39</td><td><a href="PlayerReport.php?Player=133">John Carlson (USA)</a></td><td></td><td>X</td><td>8</td><td>4</td><td>1</td><td><b>5</b></td><td>4</td><td>2</td><td>0</td><td>7</td><td>15</td><td>11</td><td>3</td><td>5</td><td>36,36%</td><td>9</td><td>172</td><td>21,55</td><td>2</td><td>0</td><td>2</td><td>5</td><td>20</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td></tr>
<tr><td>40</td><td><a href="PlayerReport.php?Player=59">Ondrej Palat (TCH)</a></td><td>X</td><td></td><td>5</td><td>3</td><td>2</td><td><b>5</b></td><td>1</td><td>0</td><td>0</td><td>1</td><td>3</td><td>12</td><td>3</td><td>14</td><td>25,00%</td><td>1</td><td>95</td><td>18,91</td><td>1</td><td>2</td><td>3</td><td>6</td><td>12</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td></tr>
<tr><td>41</td><td><a href="PlayerReport.php?Player=109">Marcel Hascak (SLO)</a></td><td>X</td><td></td><td>5</td><td>3</td><td>2</td><td><b>5</b></td><td>2</td><td>2</td><td>0</td><td>10</td><td>2</td><td>19</td><td>4</td><td>6</td><td>15,79%</td><td>1</td><td>104</td><td>20,73</td><td>1</td><td>0</td><td>1</td><td>7</td><td>15</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td></tr>
<tr><td>42</td><td><a href="PlayerReport.php?Player=60">Michael Frolik (TCH)</a></td><td>X</td><td></td><td>5</td><td>2</td><td>3</td><td><b>5</b></td><td>4</td><td>0</td><td>0</td><td>7</td><td>6</td><td>16</td><td>2</td><td>15</td><td>12,50%</td><td>0</td><td>103</td><td>20,51</td><td>0</td><td>0</td><td>0</td><td>1</td><td>12</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>43</td><td><a href="PlayerReport.php?Player=96">Darren Dietz (TWO)</a></td><td></td><td>X</td><td>5</td><td>2</td><td>3</td><td><b>5</b></td><td>-3</td><td>6</td><td>0</td><td>9</td><td>6</td><td>12</td><td>2</td><td>5</td><td>16,67%</td><td>7</td><td>123</td><td>24,55</td><td>2</td><td>2</td><td>4</td><td>10</td><td>12</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td></tr>
<tr><td>44</td><td><a href="PlayerReport.php?Player=97">Dustin Boyd (TWO)</a></td><td>X</td><td></td><td>5</td><td>2</td><td>3</td><td><b>5</b></td><td>2</td><td>0</td><td>0</td><td>2</td><td>4</td><td>6</td><td>2</td><td>6</td><td>33,33%</td><td>1</td><td>93</td><td>18,62</td><td>0</td><td>1</td><td>1</td><td>0</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td></tr>
<tr><td>45</td><td><a href="PlayerReport.php?Player=36">Daniel Pietta (ALL)</a></td><td>X</td><td></td><td>6</td><td>2</td><td>3</td><td><b>5</b></td><td>-1</td><td>2</td><td>0</td><td>16</td><td>4</td><td>12</td><td>2</td><td>8</td><td>16,67%</td><td>0</td><td>109</td><td>18,19</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>0</td><td>0</td><td>0</td><td>1</td><td>7</td></tr>
<tr><td>46</td><td><a href="PlayerReport.php?Player=192">Jesse Puljujarvi (FIN)</a></td><td>X</td><td></td><td>7</td><td>2</td><td>3</td><td><b>5</b></td><td>-4</td><td>2</td><td>0</td><td>13</td><td>9</td><td>20</td><td>8</td><td>10</td><td>10,00%</td><td>1</td><td>142</td><td>20,33</td><td>1</td><td>2</td><td>3</td><td>3</td><td>16</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>47</td><td><a href="PlayerReport.php?Player=195">Teemu Pulkkinen (FIN)</a></td><td>X</td><td></td><td>7</td><td>2</td><td>3</td><td><b>5</b></td><td>-3</td><td>2</td><td>0</td><td>8</td><td>5</td><td>10</td><td>3</td><td>14</td><td>20,00%</td><td>1</td><td>113</td><td>16,19</td><td>2</td><td>0</td><td>2</td><td>2</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td></tr>
<tr><td>48</td><td><a href="PlayerReport.php?Player=75">Raman Hrabarenka (TWO)</a></td><td></td><td>X</td><td>5</td><td>1</td><td>4</td><td><b>5</b></td><td>-3</td><td>8</td><td>0</td><td>7</td><td>5</td><td>10</td><td>3</td><td>6</td><td>10,00%</td><td>11</td><td>122</td><td>24,48</td><td>1</td><td>2</td><td>3</td><td>6</td><td>12</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td></tr>
<tr><td>49</td><td><a href="PlayerReport.php?Player=159">Ilya Kovalchuk (RUS)</a></td><td>X</td><td></td><td>5</td><td>1</td><td>4</td><td><b>5</b></td><td>3</td><td>4</td><td>0</td><td>5</td><td>6</td><td>12</td><td>4</td><td>10</td><td>8,33%</td><td>1</td><td>90</td><td>18,09</td><td>0</td><td>2</td><td>2</td><td>2</td><td>15</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>50</td><td><a href="PlayerReport.php?Player=166">Mikhail Sergachev (RUS)</a></td><td></td><td>X</td><td>5</td><td>1</td><td>4</td><td><b>5</b></td><td>1</td><td>4</td><td>0</td><td>2</td><td>9</td><td>18</td><td>3</td><td>2</td><td>5,56%</td><td>6</td><td>107</td><td>21,48</td><td>1</td><td>3</td><td>4</td><td>13</td><td>16</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW25">#</th><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th></tr></thead>
<tr><td>1</td><td><a href="GoalieReport.php?Goalie=12">Ben Bishop (USA)</a></td><td>7</td><td>6</td><td>0</td><td>1</td><td><b>0,928</b></td><td>2,23</td><td>430</td><td>0</td><td>0</td><td>16</td><td>223</td><td>0</td><td>0</td><td>0</td><td>0,700</td><td>10</td><td>7</td><td>1</td></tr>
<tr><td>2</td><td><a href="GoalieReport.php?Goalie=20">Pekka Rinne (FIN)</a></td><td>7</td><td>5</td><td>2</td><td>0</td><td><b>0,912</b></td><td>2,82</td><td>404</td><td>0</td><td>1</td><td>19</td><td>215</td><td>0</td><td>1</td><td>0</td><td>1,000</td><td>2</td><td>7</td><td>0</td></tr>
<tr><td>3</td><td><a href="GoalieReport.php?Goalie=24">Robin Lehner (SWE)</a></td><td>5</td><td>2</td><td>2</td><td>1</td><td><b>0,903</b></td><td>2,94</td><td>306</td><td>0</td><td>0</td><td>15</td><td>154</td><td>0</td><td>0</td><td>0</td><td>0,333</td><td>3</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td><a href="GoalieReport.php?Goalie=4">Robert Mayer (SUI)</a></td><td>6</td><td>3</td><td>1</td><td>2</td><td><b>0,914</b></td><td>3,04</td><td>375</td><td>0</td><td>0</td><td>19</td><td>221</td><td>0</td><td>0</td><td>0</td><td>0,667</td><td>3</td><td>6</td><td>2</td></tr>
<tr><td>5</td><td><a href="GoalieReport.php?Goalie=22">Carey Price (CAN)</a></td><td>7</td><td>6</td><td>1</td><td>0</td><td><b>0,890</b></td><td>3,12</td><td>384</td><td>0</td><td>0</td><td>20</td><td>181</td><td>0</td><td>1</td><td>0</td><td>0,667</td><td>3</td><td>7</td><td>0</td></tr>
<tr><td>6</td><td><a href="GoalieReport.php?Goalie=6">Danny aus den Birken (ALL)</a></td><td>6</td><td>4</td><td>2</td><td>0</td><td><b>0,893</b></td><td>3,45</td><td>330</td><td>0</td><td>0</td><td>19</td><td>177</td><td>0</td><td>0</td><td>0</td><td>1,000</td><td>3</td><td>6</td><td>0</td></tr>
<tr><td>7</td><td><a href="GoalieReport.php?Goalie=15">Sergei Bobrovsky (RUS)</a></td><td>5</td><td>2</td><td>2</td><td>1</td><td><b>0,878</b></td><td>3,75</td><td>304</td><td>0</td><td>0</td><td>19</td><td>156</td><td>0</td><td>1</td><td>0</td><td>0,714</td><td>7</td><td>5</td><td>0</td></tr>
<tr><td>8</td><td><a href="GoalieReport.php?Goalie=17">Carter Hart (R) (U23)</a></td><td>5</td><td>1</td><td>3</td><td>1</td><td><b>0,879</b></td><td>4,31</td><td>306</td><td>2</td><td>0</td><td>22</td><td>182</td><td>0</td><td>0</td><td>0</td><td>1,000</td><td>3</td><td>5</td><td>0</td></tr>
</table>
<?php include "Footer.php";?>