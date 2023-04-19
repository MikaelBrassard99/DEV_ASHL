<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Individual Leaders</title>
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
<b>Minimum Games Played: 10</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Sidney Crosby (MTL)</td><td>20</td><td>12</td></tr>
<tr><td>2</td><td>Claude Giroux (PHI)</td><td>20</td><td>11</td></tr>
<tr><td>3</td><td>Filip Forsberg (MTL)</td><td>20</td><td>11</td></tr>
<tr><td>4</td><td>Brayden Point (NYR)</td><td>20</td><td>10</td></tr>
<tr><td>5</td><td>Nathan MacKinnon (STL)</td><td>20</td><td>10</td></tr>
<tr><td>6</td><td>Elias Lindholm (DET)</td><td>20</td><td>10</td></tr>
<tr><td>7</td><td>Nikita Kucherov (FLA)</td><td>20</td><td>10</td></tr>
<tr><td>8</td><td>Dylan Larkin (FLA)</td><td>20</td><td>10</td></tr>
<tr><td>9</td><td>Brendan Gallagher (EDM)</td><td>20</td><td>9</td></tr>
<tr><td>10</td><td>Jonathan Toews (CHI)</td><td>20</td><td>9</td></tr>
<tr><td>11</td><td>Matt Duchene (PIT)</td><td>20</td><td>9</td></tr>
<tr><td>12</td><td>Steven Stamkos (ARZ)</td><td>20</td><td>9</td></tr>
<tr><td>13</td><td>Sean Couturier (DAL)</td><td>20</td><td>9</td></tr>
<tr><td>14</td><td>Tyler Seguin (BUF)</td><td>20</td><td>9</td></tr>
<tr><td>15</td><td>Maxwell Reinhart (CAR)</td><td>20</td><td>9</td></tr>
<tr><td>16</td><td>Émile Poirier (ANH)</td><td>20</td><td>9</td></tr>
<tr><td>17</td><td>Sam Bennett (OTT)</td><td>18</td><td>8</td></tr>
<tr><td>18</td><td>Alexander Edler (OTT)</td><td>20</td><td>8</td></tr>
<tr><td>19</td><td>Bobby Ryan (PIT)</td><td>20</td><td>8</td></tr>
<tr><td>20</td><td>Derek Stepan (PIT)</td><td>20</td><td>8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Erik Johnson (VEG)</td><td>18</td><td>21</td></tr>
<tr><td>2</td><td>Oscar Klefbom (PHI)</td><td>20</td><td>20</td></tr>
<tr><td>3</td><td>Zach Bogosian (ARZ)</td><td>20</td><td>19</td></tr>
<tr><td>4</td><td>Hampus Lindholm (ARZ)</td><td>20</td><td>18</td></tr>
<tr><td>5</td><td>Matt Duchene (PIT)</td><td>20</td><td>17</td></tr>
<tr><td>6</td><td>Erik Gudbranson (NYI)</td><td>20</td><td>17</td></tr>
<tr><td>7</td><td>Alexander Edler (OTT)</td><td>20</td><td>16</td></tr>
<tr><td>8</td><td>Jack Johnson (SJS)</td><td>20</td><td>16</td></tr>
<tr><td>9</td><td>Aaron Ekblad (FLA)</td><td>20</td><td>16</td></tr>
<tr><td>10</td><td>Noah Hanifin (SEA)</td><td>20</td><td>16</td></tr>
<tr><td>11</td><td>Alexander Burmistrov (ANH)</td><td>20</td><td>15</td></tr>
<tr><td>12</td><td>Kevin Shattenkirk (BUF)</td><td>20</td><td>15</td></tr>
<tr><td>13</td><td>Connor Murphy (QUE)</td><td>20</td><td>15</td></tr>
<tr><td>14</td><td>Shea Theodore (NYR)</td><td>20</td><td>15</td></tr>
<tr><td>15</td><td>Haydn Fleury (DAL)</td><td>20</td><td>15</td></tr>
<tr><td>16</td><td>Brayden Point (NYR)</td><td>20</td><td>14</td></tr>
<tr><td>17</td><td>Taylor Hall (EDM)</td><td>20</td><td>14</td></tr>
<tr><td>18</td><td>Adam Larsson (PHI)</td><td>20</td><td>14</td></tr>
<tr><td>19</td><td>Ryan Murray (PHI)</td><td>20</td><td>14</td></tr>
<tr><td>20</td><td>Cody Ceci (EDM)</td><td>20</td><td>14</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (LOS)</td><td>20</td><td>90</td></tr>
<tr><td>2</td><td>Matt Duchene (PIT)</td><td>20</td><td>90</td></tr>
<tr><td>3</td><td>David Pastrnak (TBL)</td><td>20</td><td>89</td></tr>
<tr><td>4</td><td>Claude Giroux (PHI)</td><td>20</td><td>88</td></tr>
<tr><td>5</td><td>Nathan MacKinnon (STL)</td><td>20</td><td>88</td></tr>
<tr><td>6</td><td>Sean Monahan (COL)</td><td>20</td><td>88</td></tr>
<tr><td>7</td><td>Taylor Hall (EDM)</td><td>20</td><td>86</td></tr>
<tr><td>8</td><td>Connor McDavid (VAN)</td><td>20</td><td>85</td></tr>
<tr><td>9</td><td>Jonathan Toews (CHI)</td><td>20</td><td>84</td></tr>
<tr><td>10</td><td>Brayden Point (NYR)</td><td>20</td><td>84</td></tr>
<tr><td>11</td><td>Steven Stamkos (ARZ)</td><td>20</td><td>84</td></tr>
<tr><td>12</td><td>Jaden Schwartz (DET)</td><td>20</td><td>84</td></tr>
<tr><td>13</td><td>Auston Matthews (WPG)</td><td>20</td><td>83</td></tr>
<tr><td>14</td><td>Mikko Rantanen (TOR)</td><td>20</td><td>82</td></tr>
<tr><td>15</td><td>Jonathan Drouin (OTT)</td><td>20</td><td>81</td></tr>
<tr><td>16</td><td>Brock Boeser (ANH)</td><td>20</td><td>79</td></tr>
<tr><td>17</td><td>Viktor Arvidsson (NYR)</td><td>20</td><td>78</td></tr>
<tr><td>18</td><td>Filip Forsberg (MTL)</td><td>20</td><td>78</td></tr>
<tr><td>19</td><td>Jeff Skinner (LOS)</td><td>20</td><td>77</td></tr>
<tr><td>20</td><td>Robby Fabbri (COL)</td><td>20</td><td>77</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Keaton Ellerby (CAR)</td><td>17</td><td>31,58%</td></tr>
<tr><td>2</td><td>Oskar Sundqvist (CGY)</td><td>20</td><td>26,92%</td></tr>
<tr><td>3</td><td>Alan Quine (FLA)</td><td>18</td><td>25,93%</td></tr>
<tr><td>4</td><td>Alexander Edler (OTT)</td><td>20</td><td>25,81%</td></tr>
<tr><td>5</td><td>Scott Kosmachuk (BOS)</td><td>20</td><td>23,81%</td></tr>
<tr><td>6</td><td>Denis Malgin (NYR)</td><td>16</td><td>23,08%</td></tr>
<tr><td>7</td><td>Travis Dermott (NJD)</td><td>18</td><td>21,74%</td></tr>
<tr><td>8</td><td>Saku Maenalanen (WSH)</td><td>20</td><td>21,05%</td></tr>
<tr><td>9</td><td>Max Friberg (BUF)</td><td>20</td><td>20,83%</td></tr>
<tr><td>10</td><td>Maxime Comtois (QUE)</td><td>16</td><td>20,00%</td></tr>
<tr><td>11</td><td>Mike Reilly (QUE)</td><td>20</td><td>20,00%</td></tr>
<tr><td>12</td><td>Brandon Gormley (ARZ)</td><td>20</td><td>20,00%</td></tr>
<tr><td>13</td><td>Émile Poirier (ANH)</td><td>20</td><td>19,57%</td></tr>
<tr><td>14</td><td>Joachim Nermark (COL)</td><td>20</td><td>19,35%</td></tr>
<tr><td>15</td><td>Kevin Stenlund (NJD)</td><td>20</td><td>19,05%</td></tr>
<tr><td>16</td><td>Curtis Lazar (PHI)</td><td>20</td><td>19,05%</td></tr>
<tr><td>17</td><td>Jamie Benn (BOS)</td><td>20</td><td>18,92%</td></tr>
<tr><td>18</td><td>Jakub Vrana (MTL)</td><td>20</td><td>18,60%</td></tr>
<tr><td>19</td><td>Sidney Crosby (MTL)</td><td>20</td><td>18,46%</td></tr>
<tr><td>20</td><td>Reilly Smith (NJD)</td><td>20</td><td>18,42%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Matt Duchene (PIT)</td><td>20</td><td>9-17-26</td></tr>
<tr><td>2</td><td>Claude Giroux (PHI)</td><td>20</td><td>11-13-24</td></tr>
<tr><td>3</td><td>Brayden Point (NYR)</td><td>20</td><td>10-14-24</td></tr>
<tr><td>4</td><td>Sidney Crosby (MTL)</td><td>20</td><td>12-11-23</td></tr>
<tr><td>5</td><td>Dylan Larkin (FLA)</td><td>20</td><td>10-12-22</td></tr>
<tr><td>6</td><td>Elias Lindholm (DET)</td><td>20</td><td>10-11-21</td></tr>
<tr><td>7</td><td>Jonathan Toews (CHI)</td><td>20</td><td>9-12-21</td></tr>
<tr><td>8</td><td>Dylan Strome (NYI)</td><td>20</td><td>8-13-21</td></tr>
<tr><td>9</td><td>Nathan MacKinnon (STL)</td><td>20</td><td>10-10-20</td></tr>
<tr><td>10</td><td>Derek Stepan (PIT)</td><td>20</td><td>8-12-20</td></tr>
<tr><td>11</td><td>Zemgus Girgensons (VAN)</td><td>20</td><td>8-12-20</td></tr>
<tr><td>12</td><td>Robby Fabbri (COL)</td><td>20</td><td>8-12-20</td></tr>
<tr><td>13</td><td>Steven Stamkos (ARZ)</td><td>20</td><td>9-10-19</td></tr>
<tr><td>14</td><td>Sean Monahan (COL)</td><td>20</td><td>7-12-19</td></tr>
<tr><td>15</td><td>Sam Bennett (OTT)</td><td>18</td><td>8-10-18</td></tr>
<tr><td>16</td><td>Jonathan Drouin (OTT)</td><td>20</td><td>8-10-18</td></tr>
<tr><td>17</td><td>Sam Reinhart (NSH)</td><td>20</td><td>8-10-18</td></tr>
<tr><td>18</td><td>Evgeny Grachev (COL)</td><td>20</td><td>7-11-18</td></tr>
<tr><td>19</td><td>John Tavares (ARZ)</td><td>20</td><td>7-11-18</td></tr>
<tr><td>20</td><td>Jaden Schwartz (DET)</td><td>20</td><td>7-11-18</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Claude Giroux (PHI)</td><td>20</td><td>11-13-24</td></tr>
<tr><td>2</td><td>Filip Forsberg (MTL)</td><td>20</td><td>11-13-24</td></tr>
<tr><td>3</td><td>Dylan Larkin (FLA)</td><td>20</td><td>10-12-22</td></tr>
<tr><td>4</td><td>Dylan Strome (NYI)</td><td>20</td><td>8-13-21</td></tr>
<tr><td>5</td><td>Zemgus Girgensons (VAN)</td><td>20</td><td>8-12-20</td></tr>
<tr><td>6</td><td>Robby Fabbri (COL)</td><td>20</td><td>8-12-20</td></tr>
<tr><td>7</td><td>Nail Yakupov (NYR)</td><td>20</td><td>8-11-19</td></tr>
<tr><td>8</td><td>Sam Bennett (OTT)</td><td>18</td><td>8-10-18</td></tr>
<tr><td>9</td><td>Jonathan Drouin (OTT)</td><td>20</td><td>8-10-18</td></tr>
<tr><td>10</td><td>Evgeny Grachev (COL)</td><td>20</td><td>7-11-18</td></tr>
<tr><td>11</td><td>Jaden Schwartz (DET)</td><td>20</td><td>7-11-18</td></tr>
<tr><td>12</td><td>Kyle Connor (ANH)</td><td>20</td><td>5-13-18</td></tr>
<tr><td>13</td><td>Vladimir Tarasenko (PIT)</td><td>21</td><td>5-13-18</td></tr>
<tr><td>14</td><td>Taylor Hall (EDM)</td><td>20</td><td>4-14-18</td></tr>
<tr><td>15</td><td>Alexander Burmistrov (ANH)</td><td>20</td><td>3-15-18</td></tr>
<tr><td>16</td><td>Pavel Zacha (WSH)</td><td>20</td><td>5-12-17</td></tr>
<tr><td>17</td><td>Valeri Nichushkin (VEG)</td><td>20</td><td>8-8-16</td></tr>
<tr><td>18</td><td>Artemi Panarin (STL)</td><td>20</td><td>7-9-16</td></tr>
<tr><td>19</td><td>Loui Eriksson (CAR)</td><td>20</td><td>6-10-16</td></tr>
<tr><td>20</td><td>Brad Marchand (BOS)</td><td>20</td><td>5-11-16</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Matt Duchene (PIT)</td><td>20</td><td>9-17-26</td></tr>
<tr><td>2</td><td>Claude Giroux (PHI)</td><td>20</td><td>11-13-24</td></tr>
<tr><td>3</td><td>Filip Forsberg (MTL)</td><td>20</td><td>11-13-24</td></tr>
<tr><td>4</td><td>Elias Lindholm (DET)</td><td>20</td><td>10-11-21</td></tr>
<tr><td>5</td><td>Brendan Gallagher (EDM)</td><td>20</td><td>9-12-21</td></tr>
<tr><td>6</td><td>Nathan MacKinnon (STL)</td><td>20</td><td>10-10-20</td></tr>
<tr><td>7</td><td>Zemgus Girgensons (VAN)</td><td>20</td><td>8-12-20</td></tr>
<tr><td>8</td><td>Steven Stamkos (ARZ)</td><td>20</td><td>9-10-19</td></tr>
<tr><td>9</td><td>Nail Yakupov (NYR)</td><td>20</td><td>8-11-19</td></tr>
<tr><td>10</td><td>Mark Stone (NYI)</td><td>20</td><td>8-10-18</td></tr>
<tr><td>11</td><td>Jonathan Drouin (OTT)</td><td>20</td><td>8-10-18</td></tr>
<tr><td>12</td><td>Sam Reinhart (NSH)</td><td>20</td><td>8-10-18</td></tr>
<tr><td>13</td><td>Jaden Schwartz (DET)</td><td>20</td><td>7-11-18</td></tr>
<tr><td>14</td><td>Vladimir Tarasenko (PIT)</td><td>21</td><td>5-13-18</td></tr>
<tr><td>15</td><td>Alexander Burmistrov (ANH)</td><td>20</td><td>3-15-18</td></tr>
<tr><td>16</td><td>Nikita Kucherov (FLA)</td><td>20</td><td>10-7-17</td></tr>
<tr><td>17</td><td>Tyler Seguin (BUF)</td><td>20</td><td>9-8-17</td></tr>
<tr><td>18</td><td>Patrick Kane (VEG)</td><td>20</td><td>8-8-16</td></tr>
<tr><td>19</td><td>Valeri Nichushkin (VEG)</td><td>20</td><td>8-8-16</td></tr>
<tr><td>20</td><td>Leon Draisaitl (DAL)</td><td>20</td><td>7-9-16</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Erik Johnson (VEG)</td><td>18</td><td>6-21-27</td></tr>
<tr><td>2</td><td>Alexander Edler (OTT)</td><td>20</td><td>8-16-24</td></tr>
<tr><td>3</td><td>Hampus Lindholm (ARZ)</td><td>20</td><td>4-18-22</td></tr>
<tr><td>4</td><td>Zach Bogosian (ARZ)</td><td>20</td><td>3-19-22</td></tr>
<tr><td>5</td><td>Adam Larsson (PHI)</td><td>20</td><td>7-14-21</td></tr>
<tr><td>6</td><td>Oscar Klefbom (PHI)</td><td>20</td><td>1-20-21</td></tr>
<tr><td>7</td><td>Cody Ceci (EDM)</td><td>20</td><td>6-14-20</td></tr>
<tr><td>8</td><td>Aaron Ekblad (FLA)</td><td>20</td><td>4-16-20</td></tr>
<tr><td>9</td><td>Erik Gudbranson (NYI)</td><td>20</td><td>3-17-20</td></tr>
<tr><td>10</td><td>Kristopher Letang (PIT)</td><td>22</td><td>7-12-19</td></tr>
<tr><td>11</td><td>Cam Fowler (ANH)</td><td>20</td><td>6-13-19</td></tr>
<tr><td>12</td><td>Jack Johnson (SJS)</td><td>20</td><td>3-16-19</td></tr>
<tr><td>13</td><td>Nick Leddy (DET)</td><td>20</td><td>8-10-18</td></tr>
<tr><td>14</td><td>Justin Schultz (VEG)</td><td>20</td><td>6-12-18</td></tr>
<tr><td>15</td><td>Justin Faulk (NSH)</td><td>20</td><td>5-13-18</td></tr>
<tr><td>16</td><td>Seth Jones (NYI)</td><td>20</td><td>4-14-18</td></tr>
<tr><td>17</td><td>Shea Theodore (NYR)</td><td>20</td><td>3-15-18</td></tr>
<tr><td>18</td><td>Haydn Fleury (DAL)</td><td>20</td><td>3-15-18</td></tr>
<tr><td>19</td><td>Dougie Hamilton (VAN)</td><td>20</td><td>6-11-17</td></tr>
<tr><td>20</td><td>Alex Pietrangelo (MTL)</td><td>20</td><td>5-12-17</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Dave Bolland (DET)</td><td>20</td><td>2,40</td></tr>
<tr><td>2</td><td>Ryan Hartman (DAL)</td><td>20</td><td>1,50</td></tr>
<tr><td>3</td><td>Matt Duchene (PIT)</td><td>20</td><td>1,36</td></tr>
<tr><td>4</td><td>Erik Johnson (VEG)</td><td>18</td><td>1,23</td></tr>
<tr><td>5</td><td>Sam Gagner (EDM)</td><td>13</td><td>1,22</td></tr>
<tr><td>6</td><td>Dylan Larkin (FLA)</td><td>20</td><td>1,22</td></tr>
<tr><td>7</td><td>Filip Forsberg (MTL)</td><td>20</td><td>1,21</td></tr>
<tr><td>8</td><td>Brayden Point (NYR)</td><td>20</td><td>1,20</td></tr>
<tr><td>9</td><td>Hampus Lindholm (ARZ)</td><td>20</td><td>1,19</td></tr>
<tr><td>10</td><td>Elias Lindholm (DET)</td><td>20</td><td>1,18</td></tr>
<tr><td>11</td><td>Adam Erne (VEG)</td><td>16</td><td>1,17</td></tr>
<tr><td>12</td><td>Alexander Edler (OTT)</td><td>20</td><td>1,15</td></tr>
<tr><td>13</td><td>Claude Giroux (PHI)</td><td>20</td><td>1,15</td></tr>
<tr><td>14</td><td>Nail Yakupov (NYR)</td><td>20</td><td>1,15</td></tr>
<tr><td>15</td><td>Brendan Gallagher (EDM)</td><td>20</td><td>1,12</td></tr>
<tr><td>16</td><td>Sidney Crosby (MTL)</td><td>20</td><td>1,11</td></tr>
<tr><td>17</td><td>Derek Stepan (PIT)</td><td>20</td><td>1,08</td></tr>
<tr><td>18</td><td>Travis Konecny (NYR)</td><td>18</td><td>1,07</td></tr>
<tr><td>19</td><td>Robby Fabbri (COL)</td><td>20</td><td>1,03</td></tr>
<tr><td>20</td><td>Dylan Strome (NYI)</td><td>20</td><td>1,01</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Eric Staal (ARZ)</td><td>20</td><td>65,87%</td></tr>
<tr><td>2</td><td>Patrice Bergeron (NJD)</td><td>17</td><td>60,85%</td></tr>
<tr><td>3</td><td>Evgeni Malkin (CGY)</td><td>20</td><td>57,88%</td></tr>
<tr><td>4</td><td>John Tavares (ARZ)</td><td>20</td><td>57,46%</td></tr>
<tr><td>5</td><td>Michael Frolik (NYI)</td><td>11</td><td>56,73%</td></tr>
<tr><td>6</td><td>Tyler Bozak (LOS)</td><td>20</td><td>56,67%</td></tr>
<tr><td>7</td><td>Henrik Zetterberg (PIT)</td><td>20</td><td>56,62%</td></tr>
<tr><td>8</td><td>Jonathan Toews (CHI)</td><td>20</td><td>56,47%</td></tr>
<tr><td>9</td><td>Bo Horvat (ARZ)</td><td>20</td><td>56,44%</td></tr>
<tr><td>10</td><td>Tomas Hertl (PHI)</td><td>20</td><td>55,90%</td></tr>
<tr><td>11</td><td>Marcus Johansson (TBL)</td><td>20</td><td>55,87%</td></tr>
<tr><td>12</td><td>Louis Leblanc (TOR)</td><td>20</td><td>55,82%</td></tr>
<tr><td>13</td><td>Nicklas Backstrom (PIT)</td><td>20</td><td>55,60%</td></tr>
<tr><td>14</td><td>Tyson Baillie (NYI)</td><td>20</td><td>55,44%</td></tr>
<tr><td>15</td><td>Sidney Crosby (MTL)</td><td>20</td><td>55,27%</td></tr>
<tr><td>16</td><td>Zemgus Girgensons (VAN)</td><td>20</td><td>55,14%</td></tr>
<tr><td>17</td><td>Claude Giroux (PHI)</td><td>20</td><td>54,90%</td></tr>
<tr><td>18</td><td>Freddie Hamilton (NSH)</td><td>20</td><td>54,85%</td></tr>
<tr><td>19</td><td>Shawn Matthias (CLB)</td><td>20</td><td>54,45%</td></tr>
<tr><td>20</td><td>Ryan Kesler (MTL)</td><td>20</td><td>54,40%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Alexander Edler (OTT)</td><td>20</td><td>15</td></tr>
<tr><td>2</td><td>Claude Giroux (PHI)</td><td>20</td><td>15</td></tr>
<tr><td>3</td><td>Tomas Hertl (PHI)</td><td>20</td><td>15</td></tr>
<tr><td>4</td><td>Matthew Tkachuk (VAN)</td><td>20</td><td>14</td></tr>
<tr><td>5</td><td>Zemgus Girgensons (VAN)</td><td>20</td><td>13</td></tr>
<tr><td>6</td><td>Nick Schmaltz (PHI)</td><td>20</td><td>12</td></tr>
<tr><td>7</td><td>Andrew Cogliano (DET)</td><td>20</td><td>11</td></tr>
<tr><td>8</td><td>Nick Holden (DAL)</td><td>20</td><td>11</td></tr>
<tr><td>9</td><td>Tyler Seguin (BUF)</td><td>20</td><td>11</td></tr>
<tr><td>10</td><td>Mika Zibanejad (DET)</td><td>20</td><td>11</td></tr>
<tr><td>11</td><td>Elias Lindholm (DET)</td><td>20</td><td>11</td></tr>
<tr><td>12</td><td>Sven Andrighetto (MIN)</td><td>20</td><td>10</td></tr>
<tr><td>13</td><td>Morgan Ellis (DAL)</td><td>20</td><td>10</td></tr>
<tr><td>14</td><td>Robby Fabbri (COL)</td><td>20</td><td>10</td></tr>
<tr><td>15</td><td>Karl Alzner (PIT)</td><td>18</td><td>9</td></tr>
<tr><td>16</td><td>Brandon Sutter (PIT)</td><td>20</td><td>9</td></tr>
<tr><td>17</td><td>A.J. Greer (SJS)</td><td>20</td><td>9</td></tr>
<tr><td>18</td><td>Evgeny Grachev (COL)</td><td>20</td><td>9</td></tr>
<tr><td>19</td><td>Greg Nemisz (CGY)</td><td>20</td><td>9</td></tr>
<tr><td>20</td><td>Magnus Paajarvi (COL)</td><td>20</td><td>9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Zach Bogosian (ARZ)</td><td>20</td><td>54</td></tr>
<tr><td>2</td><td>Matt Dumba (MIN)</td><td>20</td><td>44</td></tr>
<tr><td>3</td><td>Duncan Siemens (DAL)</td><td>20</td><td>42</td></tr>
<tr><td>4</td><td>Connor Murphy (QUE)</td><td>20</td><td>38</td></tr>
<tr><td>5</td><td>Michael Paliotta (CAR)</td><td>14</td><td>37</td></tr>
<tr><td>6</td><td>Marc-Andre Bourdon (NSH)</td><td>20</td><td>36</td></tr>
<tr><td>7</td><td>Mark Pysyk (LOS)</td><td>20</td><td>34</td></tr>
<tr><td>8</td><td>Victor Hedman (WPG)</td><td>20</td><td>33</td></tr>
<tr><td>9</td><td>Kristopher Letang (PIT)</td><td>22</td><td>33</td></tr>
<tr><td>10</td><td>Luke Schenn (TOR)</td><td>20</td><td>32</td></tr>
<tr><td>11</td><td>Aaron Ekblad (FLA)</td><td>20</td><td>32</td></tr>
<tr><td>12</td><td>Brendan Smith (QUE)</td><td>20</td><td>32</td></tr>
<tr><td>13</td><td>Dougie Hamilton (VAN)</td><td>20</td><td>32</td></tr>
<tr><td>14</td><td>Colton Parayko (WSH)</td><td>20</td><td>31</td></tr>
<tr><td>15</td><td>Taylor Doherty (ANH)</td><td>11</td><td>30</td></tr>
<tr><td>16</td><td>Simon Despres (TBL)</td><td>20</td><td>30</td></tr>
<tr><td>17</td><td>Luca Sbisa (CHI)</td><td>20</td><td>30</td></tr>
<tr><td>18</td><td>Griffin Reinhart (NYR)</td><td>20</td><td>30</td></tr>
<tr><td>19</td><td>Morgan Rielly (TOR)</td><td>20</td><td>30</td></tr>
<tr><td>20</td><td>Brian Dumoulin (TBL)</td><td>20</td><td>29</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Luke Schenn (TOR)</td><td>20</td><td>49</td></tr>
<tr><td>2</td><td>Nikita Zadorov (TBL)</td><td>20</td><td>46</td></tr>
<tr><td>3</td><td>Colin Miller (SEA)</td><td>20</td><td>43</td></tr>
<tr><td>4</td><td>Shea Weber (DAL)</td><td>20</td><td>43</td></tr>
<tr><td>5</td><td>Colten Teubert (EDM)</td><td>20</td><td>43</td></tr>
<tr><td>6</td><td>Alex Pietrangelo (MTL)</td><td>20</td><td>42</td></tr>
<tr><td>7</td><td>Daniel Girardi (EDM)</td><td>20</td><td>40</td></tr>
<tr><td>8</td><td>Simon Despres (TBL)</td><td>20</td><td>40</td></tr>
<tr><td>9</td><td>Travis Hamonic (CGY)</td><td>20</td><td>40</td></tr>
<tr><td>10</td><td>Jamie McBain (OTT)</td><td>20</td><td>39</td></tr>
<tr><td>11</td><td>Derek Forbort (LOS)</td><td>20</td><td>39</td></tr>
<tr><td>12</td><td>Mikko Vainonen (EDM)</td><td>20</td><td>39</td></tr>
<tr><td>13</td><td>Justin Faulk (NSH)</td><td>20</td><td>38</td></tr>
<tr><td>14</td><td>Marc Staal (CHI)</td><td>20</td><td>37</td></tr>
<tr><td>15</td><td>Jérémy Lauzon (SJS)</td><td>16</td><td>36</td></tr>
<tr><td>16</td><td>John Carlson (BOS)</td><td>20</td><td>36</td></tr>
<tr><td>17</td><td>Jan Rutta (MTL)</td><td>20</td><td>36</td></tr>
<tr><td>18</td><td>Zach Bogosian (ARZ)</td><td>20</td><td>36</td></tr>
<tr><td>19</td><td>Dmitri Kulikov (WPG)</td><td>20</td><td>35</td></tr>
<tr><td>20</td><td>Dougie Hamilton (VAN)</td><td>20</td><td>35</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Pavel Zacha (WSH)</td><td>20</td><td>5-12-17</td></tr>
<tr><td>2</td><td>Kirby Dach (EDM)</td><td>20</td><td>5-11-16</td></tr>
<tr><td>3</td><td>Dominik Kubalik (NYI)</td><td>19</td><td>7-8-15</td></tr>
<tr><td>4</td><td>Anthony DeAngelo (WSH)</td><td>19</td><td>5-10-15</td></tr>
<tr><td>5</td><td>Jake DeBrusk (STL)</td><td>20</td><td>5-8-13</td></tr>
<tr><td>6</td><td>Tyson Jost (OTT)</td><td>20</td><td>6-6-12</td></tr>
<tr><td>7</td><td>Gustav Olofsson (COL)</td><td>20</td><td>2-10-12</td></tr>
<tr><td>8</td><td>Warren Foegele (SJS)</td><td>16</td><td>6-5-11</td></tr>
<tr><td>9</td><td>A.J. Greer (SJS)</td><td>20</td><td>6-5-11</td></tr>
<tr><td>10</td><td>Oskar Lindblom (ARZ)</td><td>14</td><td>5-6-11</td></tr>
<tr><td>11</td><td>Casey Mittelstadt (VEG)</td><td>20</td><td>5-5-10</td></tr>
<tr><td>12</td><td>Rasmus Sandin (FLA)</td><td>18</td><td>2-8-10</td></tr>
<tr><td>13</td><td>Quinn Hughes (TBL)</td><td>20</td><td>1-9-10</td></tr>
<tr><td>14</td><td>Travis Dermott (NJD)</td><td>18</td><td>5-4-9</td></tr>
<tr><td>15</td><td>Sergey Tolchinsky (COL)</td><td>14</td><td>4-5-9</td></tr>
<tr><td>16</td><td>John Nyberg (CHI)</td><td>20</td><td>3-6-9</td></tr>
<tr><td>17</td><td>Philippe Myers (SJS)</td><td>16</td><td>2-7-9</td></tr>
<tr><td>18</td><td>Rasmus Andersson (LOS)</td><td>19</td><td>2-7-9</td></tr>
<tr><td>19</td><td>Matt Roy (STL)</td><td>20</td><td>1-7-8</td></tr>
<tr><td>20</td><td>Erik Cernak (VAN)</td><td>20</td><td>0-8-8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Travis Hamonic (CGY)</td><td>20</td><td>68</td></tr>
<tr><td>2</td><td>Evander Kane (TBL)</td><td>20</td><td>60</td></tr>
<tr><td>3</td><td>Luke Schenn (TOR)</td><td>20</td><td>60</td></tr>
<tr><td>4</td><td>Jaedon Descheneau (BUF)</td><td>20</td><td>60</td></tr>
<tr><td>5</td><td>Zach Bogosian (ARZ)</td><td>20</td><td>59</td></tr>
<tr><td>6</td><td>A.J. Greer (SJS)</td><td>20</td><td>58</td></tr>
<tr><td>7</td><td>Colton Parayko (WSH)</td><td>20</td><td>58</td></tr>
<tr><td>8</td><td>Michael Dal Colle (WSH)</td><td>20</td><td>58</td></tr>
<tr><td>9</td><td>Timo Meier (SJS)</td><td>20</td><td>58</td></tr>
<tr><td>10</td><td>Mark Scheifele (STL)</td><td>17</td><td>57</td></tr>
<tr><td>11</td><td>Jared McCann (NJD)</td><td>20</td><td>57</td></tr>
<tr><td>12</td><td>Pierre-Luc Dubois (CGY)</td><td>20</td><td>56</td></tr>
<tr><td>13</td><td>Milan Lucic (CAR)</td><td>20</td><td>56</td></tr>
<tr><td>14</td><td>Ryan Getzlaf (QUE)</td><td>20</td><td>55</td></tr>
<tr><td>15</td><td>Ryan McDonagh (NYR)</td><td>20</td><td>55</td></tr>
<tr><td>16</td><td>Brad Marchand (BOS)</td><td>20</td><td>54</td></tr>
<tr><td>17</td><td>Claude Giroux (PHI)</td><td>20</td><td>54</td></tr>
<tr><td>18</td><td>Erik Johnson (VEG)</td><td>18</td><td>52</td></tr>
<tr><td>19</td><td>Alex Ovechkin (ANH)</td><td>20</td><td>52</td></tr>
<tr><td>20</td><td>Colten Teubert (EDM)</td><td>20</td><td>52</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Nick Leddy (DET)</td><td>20</td><td>6</td></tr>
<tr><td>2</td><td>Émile Poirier (ANH)</td><td>20</td><td>6</td></tr>
<tr><td>3</td><td>Alexander Edler (OTT)</td><td>20</td><td>5</td></tr>
<tr><td>4</td><td>Brendan Gallagher (EDM)</td><td>20</td><td>5</td></tr>
<tr><td>5</td><td>Mike Reilly (QUE)</td><td>20</td><td>5</td></tr>
<tr><td>6</td><td>Keaton Ellerby (CAR)</td><td>17</td><td>4</td></tr>
<tr><td>7</td><td>Erik Johnson (VEG)</td><td>18</td><td>4</td></tr>
<tr><td>8</td><td>Cam Fowler (ANH)</td><td>20</td><td>4</td></tr>
<tr><td>9</td><td>Drew Doughty (LOS)</td><td>20</td><td>4</td></tr>
<tr><td>10</td><td>Josh Anderson (FLA)</td><td>20</td><td>4</td></tr>
<tr><td>11</td><td>Sidney Crosby (MTL)</td><td>20</td><td>4</td></tr>
<tr><td>12</td><td>Steven Stamkos (ARZ)</td><td>20</td><td>4</td></tr>
<tr><td>13</td><td>Justin Faulk (NSH)</td><td>20</td><td>4</td></tr>
<tr><td>14</td><td>Jake Dotchin (SEA)</td><td>20</td><td>4</td></tr>
<tr><td>15</td><td>Jaden Schwartz (DET)</td><td>20</td><td>4</td></tr>
<tr><td>16</td><td>Olli Maatta (BOS)</td><td>20</td><td>4</td></tr>
<tr><td>17</td><td>Cody Ceci (EDM)</td><td>20</td><td>4</td></tr>
<tr><td>18</td><td>Justin Schultz (VEG)</td><td>20</td><td>4</td></tr>
<tr><td>19</td><td>Seth Jones (NYI)</td><td>20</td><td>4</td></tr>
<tr><td>20</td><td>Nathan Beaulieu (BUF)</td><td>20</td><td>4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>T.J. Galiardi (COL)</td><td>14</td><td>1</td></tr>
<tr><td>2</td><td>Jordan Greenway (FLA)</td><td>18</td><td>1</td></tr>
<tr><td>3</td><td>Joel Edmundson (FLA)</td><td>20</td><td>1</td></tr>
<tr><td>4</td><td>Marc-Edouard Vlasic (STL)</td><td>20</td><td>1</td></tr>
<tr><td>5</td><td>Marcus Kruger (VEG)</td><td>20</td><td>1</td></tr>
<tr><td>6</td><td>Nazem Kadri (STL)</td><td>20</td><td>1</td></tr>
<tr><td>7</td><td>Sidney Crosby (MTL)</td><td>20</td><td>1</td></tr>
<tr><td>8</td><td>Zach Parise (OTT)</td><td>20</td><td>1</td></tr>
<tr><td>9</td><td>Curtis Hamilton (SEA)</td><td>20</td><td>1</td></tr>
<tr><td>10</td><td>Tobias Rieder (EDM)</td><td>20</td><td>1</td></tr>
<tr><td>11</td><td>Maxwell Reinhart (CAR)</td><td>20</td><td>1</td></tr>
<tr><td>12</td><td>Radek Faksa (SJS)</td><td>20</td><td>1</td></tr>
<tr><td>13</td><td>Austin Watson (SEA)</td><td>20</td><td>1</td></tr>
<tr><td>14</td><td>Mitch Holmberg (CHI)</td><td>20</td><td>1</td></tr>
<tr><td>15</td><td>Sean Monahan (COL)</td><td>20</td><td>1</td></tr>
<tr><td>16</td><td>Patrick Holland (NYI)</td><td>20</td><td>1</td></tr>
<tr><td>17</td><td>Nicolas Kerdiles (VAN)</td><td>20</td><td>1</td></tr>
<tr><td>18</td><td>Pavel Zacha (WSH)</td><td>20</td><td>1</td></tr>
<tr><td>19</td><td>Cédric Paquette (EDM)</td><td>20</td><td>1</td></tr>
<tr><td>20</td><td>Jack Eichel (NJD)</td><td>20</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Mikko Rantanen (TOR)</td><td>20</td><td>4</td></tr>
<tr><td>2</td><td>Brayden Point (NYR)</td><td>20</td><td>4</td></tr>
<tr><td>3</td><td>David Backes (CHI)</td><td>20</td><td>3</td></tr>
<tr><td>4</td><td>Leon Draisaitl (DAL)</td><td>20</td><td>3</td></tr>
<tr><td>5</td><td>Magnus Paajarvi (COL)</td><td>20</td><td>3</td></tr>
<tr><td>6</td><td>Nick Cousins (NYI)</td><td>20</td><td>3</td></tr>
<tr><td>7</td><td>Mika Zibanejad (DET)</td><td>20</td><td>3</td></tr>
<tr><td>8</td><td>Sven Andrighetto (MIN)</td><td>20</td><td>3</td></tr>
<tr><td>9</td><td>Justin Schultz (VEG)</td><td>20</td><td>3</td></tr>
<tr><td>10</td><td>Jonathan Drouin (OTT)</td><td>20</td><td>3</td></tr>
<tr><td>11</td><td>Sam Reinhart (NSH)</td><td>20</td><td>3</td></tr>
<tr><td>12</td><td>Andre Burakovsky (CLB)</td><td>20</td><td>3</td></tr>
<tr><td>13</td><td>Matthew Tkachuk (VAN)</td><td>20</td><td>3</td></tr>
<tr><td>14</td><td>Duncan Keith (ARZ)</td><td>16</td><td>2</td></tr>
<tr><td>15</td><td>Clayton Keller (SJS)</td><td>16</td><td>2</td></tr>
<tr><td>16</td><td>Adam Erne (VEG)</td><td>16</td><td>2</td></tr>
<tr><td>17</td><td>Keaton Ellerby (CAR)</td><td>17</td><td>2</td></tr>
<tr><td>18</td><td>Karl Alzner (PIT)</td><td>18</td><td>2</td></tr>
<tr><td>19</td><td>Sam Bennett (OTT)</td><td>18</td><td>2</td></tr>
<tr><td>20</td><td>Adam Henrique (BUF)</td><td>20</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Nikita Kucherov (FLA)</td><td>20</td><td>4</td></tr>
<tr><td>2</td><td>Alexander Edler (OTT)</td><td>20</td><td>3</td></tr>
<tr><td>3</td><td>Antti Suomela (CHI)</td><td>19</td><td>2</td></tr>
<tr><td>4</td><td>John Tavares (ARZ)</td><td>20</td><td>2</td></tr>
<tr><td>5</td><td>Andreas Athanasiou (MIN)</td><td>20</td><td>2</td></tr>
<tr><td>6</td><td>Alex DeBrincat (ARZ)</td><td>20</td><td>2</td></tr>
<tr><td>7</td><td>Jaden Schwartz (DET)</td><td>20</td><td>2</td></tr>
<tr><td>8</td><td>Filip Forsberg (MTL)</td><td>20</td><td>2</td></tr>
<tr><td>9</td><td>Theodor Blueger (STL)</td><td>20</td><td>2</td></tr>
<tr><td>10</td><td>Henrik Samuelsson (NJD)</td><td>20</td><td>2</td></tr>
<tr><td>11</td><td>Nicolas Petan (SEA)</td><td>20</td><td>2</td></tr>
<tr><td>12</td><td>Robby Fabbri (COL)</td><td>20</td><td>2</td></tr>
<tr><td>13</td><td>Chris Tierney (CGY)</td><td>20</td><td>2</td></tr>
<tr><td>14</td><td>Jake DeBrusk (STL)</td><td>20</td><td>2</td></tr>
<tr><td>15</td><td>Bryan Rust (TBL)</td><td>22</td><td>2</td></tr>
<tr><td>16</td><td>Andrew O'Brien (PIT)</td><td>6</td><td>1</td></tr>
<tr><td>17</td><td>Paul Stastny (SJS)</td><td>9</td><td>1</td></tr>
<tr><td>18</td><td>Aaron Ness (MIN)</td><td>11</td><td>1</td></tr>
<tr><td>19</td><td>Rickard Rakell (BOS)</td><td>13</td><td>1</td></tr>
<tr><td>20</td><td>Noah Dobson (SJS)</td><td>16</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Adam Larsson (PHI)</td><td>20</td><td>2</td></tr>
<tr><td>2</td><td>Maxime Comtois (QUE)</td><td>16</td><td>1</td></tr>
<tr><td>3</td><td>Warren Foegele (SJS)</td><td>16</td><td>1</td></tr>
<tr><td>4</td><td>Alex Pietrangelo (MTL)</td><td>20</td><td>1</td></tr>
<tr><td>5</td><td>Dave Bolland (DET)</td><td>20</td><td>1</td></tr>
<tr><td>6</td><td>Jack Johnson (SJS)</td><td>20</td><td>1</td></tr>
<tr><td>7</td><td>Marcus Johansson (TBL)</td><td>20</td><td>1</td></tr>
<tr><td>8</td><td>Ryan O'Reilly (BUF)</td><td>20</td><td>1</td></tr>
<tr><td>9</td><td>Sidney Crosby (MTL)</td><td>20</td><td>1</td></tr>
<tr><td>10</td><td>Tomas Plekanec (STL)</td><td>20</td><td>1</td></tr>
<tr><td>11</td><td>Vyacheslav Voynov (DET)</td><td>20</td><td>1</td></tr>
<tr><td>12</td><td>Adam Lowry (DET)</td><td>20</td><td>1</td></tr>
<tr><td>13</td><td>Zack Kassian (TOR)</td><td>20</td><td>1</td></tr>
<tr><td>14</td><td>Ryan Ellis (WSH)</td><td>20</td><td>1</td></tr>
<tr><td>15</td><td>Zemgus Girgensons (VAN)</td><td>20</td><td>1</td></tr>
<tr><td>16</td><td>Myles Bell (VEG)</td><td>20</td><td>1</td></tr>
<tr><td>17</td><td>Chris Tierney (CGY)</td><td>20</td><td>1</td></tr>
<tr><td>18</td><td>Tanner Pearson (STL)</td><td>20</td><td>1</td></tr>
<tr><td>19</td><td>Alexander Kerfoot (COL)</td><td>20</td><td>1</td></tr>
<tr><td>20</td><td>Adam Gaudette (NJD)</td><td>20</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Jaden Schwartz (DET)</td><td>20</td><td>508</td></tr>
<tr><td>2</td><td>Kristopher Letang (PIT)</td><td>22</td><td>507</td></tr>
<tr><td>3</td><td>Colin Wilson (QUE)</td><td>20</td><td>503</td></tr>
<tr><td>4</td><td>Nick Leddy (DET)</td><td>20</td><td>501</td></tr>
<tr><td>5</td><td>Shea Weber (DAL)</td><td>20</td><td>500</td></tr>
<tr><td>6</td><td>Oliver Ekman-Larsson (CGY)</td><td>20</td><td>500</td></tr>
<tr><td>7</td><td>Alex Pietrangelo (MTL)</td><td>20</td><td>499</td></tr>
<tr><td>8</td><td>Travis Hamonic (CGY)</td><td>20</td><td>496</td></tr>
<tr><td>9</td><td>Vyacheslav Voynov (DET)</td><td>20</td><td>492</td></tr>
<tr><td>10</td><td>Jacob Trouba (NJD)</td><td>20</td><td>487</td></tr>
<tr><td>11</td><td>Dan DeKeyser (QUE)</td><td>20</td><td>485</td></tr>
<tr><td>12</td><td>Jack Johnson (SJS)</td><td>20</td><td>483</td></tr>
<tr><td>13</td><td>Erik Gudbranson (NYI)</td><td>20</td><td>482</td></tr>
<tr><td>14</td><td>John Carlson (BOS)</td><td>20</td><td>481</td></tr>
<tr><td>15</td><td>Drew Doughty (LOS)</td><td>20</td><td>479</td></tr>
<tr><td>16</td><td>Seth Jones (NYI)</td><td>20</td><td>478</td></tr>
<tr><td>17</td><td>Morgan Rielly (TOR)</td><td>20</td><td>478</td></tr>
<tr><td>18</td><td>Dmitri Kulikov (WPG)</td><td>20</td><td>472</td></tr>
<tr><td>19</td><td>Justin Faulk (NSH)</td><td>20</td><td>472</td></tr>
<tr><td>20</td><td>Brady Skjei (STL)</td><td>20</td><td>472</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Sidney Crosby (MTL)</td><td>20</td><td>2</td></tr>
<tr><td>2</td><td>Sam Gagner (EDM)</td><td>13</td><td>1</td></tr>
<tr><td>3</td><td>Erik Johnson (VEG)</td><td>18</td><td>1</td></tr>
<tr><td>4</td><td>Evander Kane (TBL)</td><td>20</td><td>1</td></tr>
<tr><td>5</td><td>James Neal (VAN)</td><td>20</td><td>1</td></tr>
<tr><td>6</td><td>Jeff Skinner (LOS)</td><td>20</td><td>1</td></tr>
<tr><td>7</td><td>Nazem Kadri (STL)</td><td>20</td><td>1</td></tr>
<tr><td>8</td><td>Patric Hornqvist (OTT)</td><td>20</td><td>1</td></tr>
<tr><td>9</td><td>Nick Cousins (NYI)</td><td>20</td><td>1</td></tr>
<tr><td>10</td><td>Steven Stamkos (ARZ)</td><td>20</td><td>1</td></tr>
<tr><td>11</td><td>Gabriel Landeskog (WPG)</td><td>20</td><td>1</td></tr>
<tr><td>12</td><td>Evgeny Kuznetsov (STL)</td><td>20</td><td>1</td></tr>
<tr><td>13</td><td>Ondrej Kase (NJD)</td><td>20</td><td>1</td></tr>
<tr><td>14</td><td>Dylan Larkin (FLA)</td><td>20</td><td>1</td></tr>
<tr><td>15</td><td>Matthew Tkachuk (VAN)</td><td>20</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Claude Giroux (PHI)</td><td>20</td><td>5</td></tr>
<tr><td>2</td><td>Michael Paliotta (CAR)</td><td>14</td><td>3</td></tr>
<tr><td>3</td><td>Dominik Kubalik (NYI)</td><td>19</td><td>3</td></tr>
<tr><td>4</td><td>Patrick Kane (VEG)</td><td>20</td><td>3</td></tr>
<tr><td>5</td><td>Brayden Point (NYR)</td><td>20</td><td>3</td></tr>
<tr><td>6</td><td>Adam Erne (VEG)</td><td>16</td><td>2</td></tr>
<tr><td>7</td><td>Mike Hoffman (ANH)</td><td>19</td><td>2</td></tr>
<tr><td>8</td><td>Brayden Schenn (SEA)</td><td>20</td><td>2</td></tr>
<tr><td>9</td><td>Chris Stewart (EDM)</td><td>20</td><td>2</td></tr>
<tr><td>10</td><td>Derek Stepan (PIT)</td><td>20</td><td>2</td></tr>
<tr><td>11</td><td>Marcus Johansson (TBL)</td><td>20</td><td>2</td></tr>
<tr><td>12</td><td>Steven Stamkos (ARZ)</td><td>20</td><td>2</td></tr>
<tr><td>13</td><td>Jake Dotchin (SEA)</td><td>20</td><td>2</td></tr>
<tr><td>14</td><td>Jaden Schwartz (DET)</td><td>20</td><td>2</td></tr>
<tr><td>15</td><td>Nail Yakupov (NYR)</td><td>20</td><td>2</td></tr>
<tr><td>16</td><td>Theodor Blueger (STL)</td><td>20</td><td>2</td></tr>
<tr><td>17</td><td>Jake Virtanen (MIN)</td><td>20</td><td>2</td></tr>
<tr><td>18</td><td>Oliver Bjorkstrand (NSH)</td><td>20</td><td>2</td></tr>
<tr><td>19</td><td>Connor McDavid (VAN)</td><td>20</td><td>2</td></tr>
<tr><td>20</td><td>Kyle Connor (ANH)</td><td>20</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Sean Couturier (DAL)</td><td>20</td><td>9</td></tr>
<tr><td>2</td><td>Brendan Gallagher (EDM)</td><td>20</td><td>8</td></tr>
<tr><td>3</td><td>Jake Virtanen (MIN)</td><td>20</td><td>8</td></tr>
<tr><td>4</td><td>Luke Schenn (TOR)</td><td>20</td><td>6</td></tr>
<tr><td>5</td><td>Adam Larsson (PHI)</td><td>20</td><td>6</td></tr>
<tr><td>6</td><td>Claude Giroux (PHI)</td><td>20</td><td>5</td></tr>
<tr><td>7</td><td>Matt Duchene (PIT)</td><td>20</td><td>5</td></tr>
<tr><td>8</td><td>Oscar Klefbom (PHI)</td><td>20</td><td>5</td></tr>
<tr><td>9</td><td>Kyle Connor (ANH)</td><td>20</td><td>5</td></tr>
<tr><td>10</td><td>Michael Paliotta (CAR)</td><td>14</td><td>4</td></tr>
<tr><td>11</td><td>Clayton Keller (SJS)</td><td>16</td><td>4</td></tr>
<tr><td>12</td><td>Darnell Nurse (SEA)</td><td>17</td><td>4</td></tr>
<tr><td>13</td><td>Travis Dermott (NJD)</td><td>18</td><td>4</td></tr>
<tr><td>14</td><td>Patrick Kane (VEG)</td><td>20</td><td>4</td></tr>
<tr><td>15</td><td>Tyler Seguin (BUF)</td><td>20</td><td>4</td></tr>
<tr><td>16</td><td>Jake Gardiner (WPG)</td><td>20</td><td>4</td></tr>
<tr><td>17</td><td>Oliver Bjorkstrand (NSH)</td><td>20</td><td>4</td></tr>
<tr><td>18</td><td>Connor McDavid (VAN)</td><td>20</td><td>4</td></tr>
<tr><td>19</td><td>Vladimir Tarasenko (PIT)</td><td>21</td><td>4</td></tr>
<tr><td>20</td><td>Kristopher Letang (PIT)</td><td>22</td><td>4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Sean Monahan (COL)</td><td>20</td><td>66</td></tr>
<tr><td>2</td><td>Sean Couturier (DAL)</td><td>20</td><td>61</td></tr>
<tr><td>3</td><td>Jonathan Toews (CHI)</td><td>20</td><td>60</td></tr>
<tr><td>4</td><td>Radek Faksa (SJS)</td><td>20</td><td>60</td></tr>
<tr><td>5</td><td>Zemgus Girgensons (VAN)</td><td>20</td><td>54</td></tr>
<tr><td>6</td><td>Nathan MacKinnon (STL)</td><td>20</td><td>54</td></tr>
<tr><td>7</td><td>Jordan Staal (LOS)</td><td>20</td><td>53</td></tr>
<tr><td>8</td><td>Blake Wheeler (MIN)</td><td>20</td><td>51</td></tr>
<tr><td>9</td><td>Ryan O'Reilly (BUF)</td><td>20</td><td>51</td></tr>
<tr><td>10</td><td>Derek Stepan (PIT)</td><td>20</td><td>49</td></tr>
<tr><td>11</td><td>Aleksander Barkov (NYR)</td><td>20</td><td>49</td></tr>
<tr><td>12</td><td>Jean-Gabriel Pageau (TOR)</td><td>20</td><td>48</td></tr>
<tr><td>13</td><td>Auston Matthews (WPG)</td><td>20</td><td>47</td></tr>
<tr><td>14</td><td>Anze Kopitar (LOS)</td><td>20</td><td>46</td></tr>
<tr><td>15</td><td>Colin Wilson (QUE)</td><td>20</td><td>46</td></tr>
<tr><td>16</td><td>Michael Dal Colle (WSH)</td><td>20</td><td>46</td></tr>
<tr><td>17</td><td>Sidney Crosby (MTL)</td><td>20</td><td>45</td></tr>
<tr><td>18</td><td>Jeff Skinner (LOS)</td><td>20</td><td>44</td></tr>
<tr><td>19</td><td>Cole Cassels (ARZ)</td><td>20</td><td>44</td></tr>
<tr><td>20</td><td>Pavel Zacha (WSH)</td><td>20</td><td>44</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Connor McDavid (VAN)</td><td>20</td><td>4</td></tr>
<tr><td>2</td><td>William Nylander (BOS)</td><td>20</td><td>2</td></tr>
<tr><td>3</td><td>Viktor Arvidsson (NYR)</td><td>20</td><td>2</td></tr>
<tr><td>4</td><td>Phil Kessel (WSH)</td><td>20</td><td>2</td></tr>
<tr><td>5</td><td>Zach Parise (OTT)</td><td>20</td><td>2</td></tr>
<tr><td>6</td><td>Vladislav Namestnikov (WSH)</td><td>20</td><td>2</td></tr>
<tr><td>7</td><td>Zemgus Girgensons (VAN)</td><td>20</td><td>2</td></tr>
<tr><td>8</td><td>Nico Hischier (BOS)</td><td>20</td><td>2</td></tr>
<tr><td>9</td><td>Matthew Tkachuk (VAN)</td><td>20</td><td>2</td></tr>
<tr><td>10</td><td>Noah Rod (WPG)</td><td>8</td><td>1</td></tr>
<tr><td>11</td><td>Manuel Wiederer (SJS)</td><td>15</td><td>1</td></tr>
<tr><td>12</td><td>Warren Foegele (SJS)</td><td>16</td><td>1</td></tr>
<tr><td>13</td><td>Sam Bennett (OTT)</td><td>18</td><td>1</td></tr>
<tr><td>14</td><td>Anze Kopitar (LOS)</td><td>20</td><td>1</td></tr>
<tr><td>15</td><td>Brad Marchand (BOS)</td><td>20</td><td>1</td></tr>
<tr><td>16</td><td>A.J. Greer (SJS)</td><td>20</td><td>1</td></tr>
<tr><td>17</td><td>James Neal (VAN)</td><td>20</td><td>1</td></tr>
<tr><td>18</td><td>Jason Spezza (OTT)</td><td>20</td><td>1</td></tr>
<tr><td>19</td><td>Jeff Skinner (LOS)</td><td>20</td><td>1</td></tr>
<tr><td>20</td><td>Jake Guentzel (QUE)</td><td>20</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Duncan Siemens (DAL)</td><td>20</td><td>2</td></tr>
<tr><td>2</td><td>Brendan Smith (QUE)</td><td>20</td><td>2</td></tr>
<tr><td>3</td><td>Joshua Jacobs (NSH)</td><td>3</td><td>1</td></tr>
<tr><td>4</td><td>Michael Paliotta (CAR)</td><td>14</td><td>1</td></tr>
<tr><td>5</td><td>Alexander Urbom (OTT)</td><td>15</td><td>1</td></tr>
<tr><td>6</td><td>Tobias Enstrom (TOR)</td><td>16</td><td>1</td></tr>
<tr><td>7</td><td>Karl Alzner (PIT)</td><td>18</td><td>1</td></tr>
<tr><td>8</td><td>Alex Pietrangelo (MTL)</td><td>20</td><td>1</td></tr>
<tr><td>9</td><td>Dmitri Kulikov (WPG)</td><td>20</td><td>1</td></tr>
<tr><td>10</td><td>Drew Doughty (LOS)</td><td>20</td><td>1</td></tr>
<tr><td>11</td><td>Evgeni Malkin (CGY)</td><td>20</td><td>1</td></tr>
<tr><td>12</td><td>Alex Petrovic (DAL)</td><td>20</td><td>1</td></tr>
<tr><td>13</td><td>Logan Couture (ARZ)</td><td>20</td><td>1</td></tr>
<tr><td>14</td><td>Ryan O'Reilly (BUF)</td><td>20</td><td>1</td></tr>
<tr><td>15</td><td>Theo Peckham (CAR)</td><td>20</td><td>1</td></tr>
<tr><td>16</td><td>Victor Hedman (WPG)</td><td>20</td><td>1</td></tr>
<tr><td>17</td><td>Brian Dumoulin (TBL)</td><td>20</td><td>1</td></tr>
<tr><td>18</td><td>Jacob Trouba (NJD)</td><td>20</td><td>1</td></tr>
<tr><td>19</td><td>Slater Koekkoek (BUF)</td><td>20</td><td>1</td></tr>
<tr><td>20</td><td>Travis Brown (PHI)</td><td>20</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Duncan Siemens (DAL)</td><td>20</td><td>2</td></tr>
<tr><td>2</td><td>Joshua Jacobs (NSH)</td><td>3</td><td>1</td></tr>
<tr><td>3</td><td>Karl Alzner (PIT)</td><td>18</td><td>1</td></tr>
<tr><td>4</td><td>Drew Doughty (LOS)</td><td>20</td><td>1</td></tr>
<tr><td>5</td><td>Evgeni Malkin (CGY)</td><td>20</td><td>1</td></tr>
<tr><td>6</td><td>Travis Brown (PHI)</td><td>20</td><td>1</td></tr>
<tr><td>7</td><td>Rasmus Ristolainen (VAN)</td><td>20</td><td>1</td></tr>
<tr><td>8</td><td>Scott Kosmachuk (BOS)</td><td>20</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Jonathan Quick (PHI)</td><td>20</td><td>0,934</td></tr>
<tr><td>2</td><td>Cory Schneider (VAN)</td><td>12</td><td>0,923</td></tr>
<tr><td>3</td><td>Thatcher Demko (MIN)</td><td>20</td><td>0,922</td></tr>
<tr><td>4</td><td>Alexandar Georgiyev (CLB)</td><td>11</td><td>0,921</td></tr>
<tr><td>5</td><td>Anders Lindback (CHI)</td><td>17</td><td>0,921</td></tr>
<tr><td>6</td><td>Braden Holtby (WSH)</td><td>20</td><td>0,920</td></tr>
<tr><td>7</td><td>Pekka Rinne (OTT)</td><td>17</td><td>0,919</td></tr>
<tr><td>8</td><td>Tuukka Rask (STL)</td><td>18</td><td>0,918</td></tr>
<tr><td>9</td><td>Ben Bishop (NYI)</td><td>13</td><td>0,916</td></tr>
<tr><td>10</td><td>Ondrej Pavelec (DET)</td><td>18</td><td>0,914</td></tr>
<tr><td>11</td><td>Ville Husso (FLA)</td><td>17</td><td>0,913</td></tr>
<tr><td>12</td><td>Martin Jones (COL)</td><td>13</td><td>0,912</td></tr>
<tr><td>13</td><td>Ilya Sorokin (NJD)</td><td>15</td><td>0,911</td></tr>
<tr><td>14</td><td>Jack Campbell (NYR)</td><td>15</td><td>0,910</td></tr>
<tr><td>15</td><td>Jordan Binnington (DAL)</td><td>20</td><td>0,910</td></tr>
<tr><td>16</td><td>Darcy Kuemper (TBL)</td><td>10</td><td>0,909</td></tr>
<tr><td>17</td><td>Robin Lehner (SEA)</td><td>17</td><td>0,909</td></tr>
<tr><td>18</td><td>Igor Shestyorkin (BOS)</td><td>16</td><td>0,907</td></tr>
<tr><td>19</td><td>Jacob Markstrom (BUF)</td><td>20</td><td>0,906</td></tr>
<tr><td>20</td><td>Matt Murray (VEG)</td><td>19</td><td>0,905</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Jonathan Quick (PHI)</td><td>20</td><td>1,90</td></tr>
<tr><td>2</td><td>Alexandar Georgiyev (CLB)</td><td>11</td><td>2,38</td></tr>
<tr><td>3</td><td>Anders Lindback (CHI)</td><td>17</td><td>2,39</td></tr>
<tr><td>4</td><td>Braden Holtby (WSH)</td><td>20</td><td>2,47</td></tr>
<tr><td>5</td><td>Tristan Jarry (NSH)</td><td>15</td><td>2,48</td></tr>
<tr><td>6</td><td>Ben Bishop (NYI)</td><td>13</td><td>2,49</td></tr>
<tr><td>7</td><td>Cory Schneider (VAN)</td><td>12</td><td>2,50</td></tr>
<tr><td>8</td><td>Thatcher Demko (MIN)</td><td>20</td><td>2,54</td></tr>
<tr><td>9</td><td>Pekka Rinne (OTT)</td><td>17</td><td>2,55</td></tr>
<tr><td>10</td><td>Ilya Sorokin (NJD)</td><td>15</td><td>2,63</td></tr>
<tr><td>11</td><td>Ondrej Pavelec (DET)</td><td>18</td><td>2,63</td></tr>
<tr><td>12</td><td>Tuukka Rask (STL)</td><td>18</td><td>2,64</td></tr>
<tr><td>13</td><td>Olivier Roy (CGY)</td><td>11</td><td>2,68</td></tr>
<tr><td>14</td><td>Martin Jones (COL)</td><td>13</td><td>2,71</td></tr>
<tr><td>15</td><td>Jack Campbell (NYR)</td><td>15</td><td>2,82</td></tr>
<tr><td>16</td><td>Matt Murray (VEG)</td><td>19</td><td>2,82</td></tr>
<tr><td>17</td><td>Jacob Markstrom (BUF)</td><td>20</td><td>2,82</td></tr>
<tr><td>18</td><td>Steve Mason (TOR)</td><td>20</td><td>2,85</td></tr>
<tr><td>19</td><td>Robin Lehner (SEA)</td><td>17</td><td>2,92</td></tr>
<tr><td>20</td><td>Ville Husso (FLA)</td><td>17</td><td>2,94</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Thatcher Demko (MIN)</td><td>20</td><td>1 206</td></tr>
<tr><td>2</td><td>Jonathan Quick (PHI)</td><td>20</td><td>1 203</td></tr>
<tr><td>3</td><td>Steve Mason (TOR)</td><td>20</td><td>1 179</td></tr>
<tr><td>4</td><td>Calvin Pickard (CAR)</td><td>20</td><td>1 175</td></tr>
<tr><td>5</td><td>Braden Holtby (WSH)</td><td>20</td><td>1 166</td></tr>
<tr><td>6</td><td>Jordan Binnington (DAL)</td><td>20</td><td>1 165</td></tr>
<tr><td>7</td><td>Jacob Markstrom (BUF)</td><td>20</td><td>1 149</td></tr>
<tr><td>8</td><td>Matt Murray (VEG)</td><td>19</td><td>1 128</td></tr>
<tr><td>9</td><td>Marc-Andre Fleury (EDM)</td><td>18</td><td>1 060</td></tr>
<tr><td>10</td><td>Ondrej Pavelec (DET)</td><td>18</td><td>1 025</td></tr>
<tr><td>11</td><td>Tuukka Rask (STL)</td><td>18</td><td>1 021</td></tr>
<tr><td>12</td><td>Jaroslav Halak (SJS)</td><td>18</td><td>1 012</td></tr>
<tr><td>13</td><td>Pekka Rinne (OTT)</td><td>17</td><td>1 012</td></tr>
<tr><td>14</td><td>Michal Neuvirth (LOS)</td><td>19</td><td>989</td></tr>
<tr><td>15</td><td>Simeon Varlamov (QUE)</td><td>18</td><td>989</td></tr>
<tr><td>16</td><td>Connor Hellebuyck (ARZ)</td><td>16</td><td>972</td></tr>
<tr><td>17</td><td>Ville Husso (FLA)</td><td>17</td><td>959</td></tr>
<tr><td>18</td><td>Anders Lindback (CHI)</td><td>17</td><td>953</td></tr>
<tr><td>19</td><td>Robin Lehner (SEA)</td><td>17</td><td>923</td></tr>
<tr><td>20</td><td>Sergei Bobrovsky (ANH)</td><td>16</td><td>904</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Jordan Binnington (DAL)</td><td>20</td><td>664</td></tr>
<tr><td>2</td><td>Thatcher Demko (MIN)</td><td>20</td><td>654</td></tr>
<tr><td>3</td><td>Calvin Pickard (CAR)</td><td>20</td><td>613</td></tr>
<tr><td>4</td><td>Braden Holtby (WSH)</td><td>20</td><td>601</td></tr>
<tr><td>5</td><td>Marc-Andre Fleury (EDM)</td><td>18</td><td>593</td></tr>
<tr><td>6</td><td>Steve Mason (TOR)</td><td>20</td><td>580</td></tr>
<tr><td>7</td><td>Jacob Markstrom (BUF)</td><td>20</td><td>576</td></tr>
<tr><td>8</td><td>Jonathan Quick (PHI)</td><td>20</td><td>576</td></tr>
<tr><td>9</td><td>Jaroslav Halak (SJS)</td><td>18</td><td>575</td></tr>
<tr><td>10</td><td>Matt Murray (VEG)</td><td>19</td><td>559</td></tr>
<tr><td>11</td><td>Tuukka Rask (STL)</td><td>18</td><td>546</td></tr>
<tr><td>12</td><td>Ville Husso (FLA)</td><td>17</td><td>538</td></tr>
<tr><td>13</td><td>Pekka Rinne (OTT)</td><td>17</td><td>530</td></tr>
<tr><td>14</td><td>Connor Hellebuyck (ARZ)</td><td>16</td><td>529</td></tr>
<tr><td>15</td><td>Ondrej Pavelec (DET)</td><td>18</td><td>524</td></tr>
<tr><td>16</td><td>Michal Neuvirth (LOS)</td><td>19</td><td>498</td></tr>
<tr><td>17</td><td>Simeon Varlamov (QUE)</td><td>18</td><td>496</td></tr>
<tr><td>18</td><td>Robin Lehner (SEA)</td><td>17</td><td>494</td></tr>
<tr><td>19</td><td>Sergei Bobrovsky (ANH)</td><td>16</td><td>484</td></tr>
<tr><td>20</td><td>Anders Lindback (CHI)</td><td>17</td><td>479</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Carey Price (WPG)</td><td>16</td><td>3</td></tr>
<tr><td>2</td><td>James Reimer (CGY)</td><td>10</td><td>2</td></tr>
<tr><td>3</td><td>Ilya Sorokin (NJD)</td><td>15</td><td>2</td></tr>
<tr><td>4</td><td>Sergei Bobrovsky (ANH)</td><td>16</td><td>2</td></tr>
<tr><td>5</td><td>Ondrej Pavelec (DET)</td><td>18</td><td>2</td></tr>
<tr><td>6</td><td>Jonathan Quick (PHI)</td><td>20</td><td>2</td></tr>
<tr><td>7</td><td>Steve Mason (TOR)</td><td>20</td><td>2</td></tr>
<tr><td>8</td><td>Matt Hackett (EDM)</td><td>3</td><td>1</td></tr>
<tr><td>9</td><td>Kari Lehtonen (QUE)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Anthony Stolarz (NYR)</td><td>6</td><td>1</td></tr>
<tr><td>11</td><td>Josh Harding (BOS)</td><td>6</td><td>1</td></tr>
<tr><td>12</td><td>Keith Kinkaid (NJD)</td><td>7</td><td>1</td></tr>
<tr><td>13</td><td>Andrew Hammond (COL)</td><td>8</td><td>1</td></tr>
<tr><td>14</td><td>Vitek Vanecek (VAN)</td><td>8</td><td>1</td></tr>
<tr><td>15</td><td>Jake Paterson (NYI)</td><td>9</td><td>1</td></tr>
<tr><td>16</td><td>Darcy Kuemper (TBL)</td><td>10</td><td>1</td></tr>
<tr><td>17</td><td>Cory Schneider (VAN)</td><td>12</td><td>1</td></tr>
<tr><td>18</td><td>Jack Campbell (NYR)</td><td>15</td><td>1</td></tr>
<tr><td>19</td><td>Tristan Jarry (NSH)</td><td>15</td><td>1</td></tr>
<tr><td>20</td><td>Anders Lindback (CHI)</td><td>17</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Jonathan Quick (PHI)</td><td>20</td><td>15</td></tr>
<tr><td>2</td><td>Pekka Rinne (OTT)</td><td>17</td><td>13</td></tr>
<tr><td>3</td><td>Ondrej Pavelec (DET)</td><td>18</td><td>11</td></tr>
<tr><td>4</td><td>Tuukka Rask (STL)</td><td>18</td><td>11</td></tr>
<tr><td>5</td><td>Matt Murray (VEG)</td><td>19</td><td>11</td></tr>
<tr><td>6</td><td>Braden Holtby (WSH)</td><td>20</td><td>11</td></tr>
<tr><td>7</td><td>Ville Husso (FLA)</td><td>17</td><td>10</td></tr>
<tr><td>8</td><td>Michal Neuvirth (LOS)</td><td>19</td><td>10</td></tr>
<tr><td>9</td><td>Martin Jones (COL)</td><td>13</td><td>9</td></tr>
<tr><td>10</td><td>Anders Lindback (CHI)</td><td>17</td><td>9</td></tr>
<tr><td>11</td><td>Marc-Andre Fleury (EDM)</td><td>18</td><td>9</td></tr>
<tr><td>12</td><td>Calvin Pickard (CAR)</td><td>20</td><td>9</td></tr>
<tr><td>13</td><td>Jordan Binnington (DAL)</td><td>20</td><td>9</td></tr>
<tr><td>14</td><td>Jacob Markstrom (BUF)</td><td>20</td><td>9</td></tr>
<tr><td>15</td><td>Thatcher Demko (MIN)</td><td>20</td><td>9</td></tr>
<tr><td>16</td><td>Steve Mason (TOR)</td><td>20</td><td>9</td></tr>
<tr><td>17</td><td>Ben Bishop (NYI)</td><td>13</td><td>8</td></tr>
<tr><td>18</td><td>Jack Campbell (NYR)</td><td>15</td><td>8</td></tr>
<tr><td>19</td><td>Jaroslav Halak (SJS)</td><td>18</td><td>8</td></tr>
<tr><td>20</td><td>Alexandar Georgiyev (CLB)</td><td>11</td><td>7</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Jonathan Quick (PHI)</td><td>7</td><td>1,000</td></tr>
<tr><td>2</td><td>Ondrej Pavelec (DET)</td><td>3</td><td>1,000</td></tr>
<tr><td>3</td><td>Frederik Andersen (FLA)</td><td>3</td><td>1,000</td></tr>
<tr><td>4</td><td>Steve Mason (TOR)</td><td>2</td><td>1,000</td></tr>
<tr><td>5</td><td>Jake Paterson (NYI)</td><td>2</td><td>1,000</td></tr>
<tr><td>6</td><td>Michal Neuvirth (LOS)</td><td>9</td><td>0,889</td></tr>
<tr><td>7</td><td>Pekka Rinne (OTT)</td><td>9</td><td>0,778</td></tr>
<tr><td>8</td><td>Jaroslav Halak (SJS)</td><td>8</td><td>0,750</td></tr>
<tr><td>9</td><td>Tuukka Rask (STL)</td><td>8</td><td>0,750</td></tr>
<tr><td>10</td><td>Tristan Jarry (NSH)</td><td>8</td><td>0,750</td></tr>
<tr><td>11</td><td>Anthony Stolarz (NYR)</td><td>4</td><td>0,750</td></tr>
<tr><td>12</td><td>Darcy Kuemper (TBL)</td><td>4</td><td>0,750</td></tr>
<tr><td>13</td><td>Cory Schneider (VAN)</td><td>22</td><td>0,727</td></tr>
<tr><td>14</td><td>John Gibson (PIT)</td><td>7</td><td>0,714</td></tr>
<tr><td>15</td><td>Pavel Francouz (MTL)</td><td>7</td><td>0,714</td></tr>
<tr><td>16</td><td>Robin Lehner (SEA)</td><td>7</td><td>0,714</td></tr>
<tr><td>17</td><td>Calvin Pickard (CAR)</td><td>10</td><td>0,700</td></tr>
<tr><td>18</td><td>Ville Husso (FLA)</td><td>9</td><td>0,667</td></tr>
<tr><td>19</td><td>Simeon Varlamov (QUE)</td><td>9</td><td>0,667</td></tr>
<tr><td>20</td><td>Connor Hellebuyck (ARZ)</td><td>6</td><td>0,667</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Simeon Varlamov (QUE)</td><td>18</td><td>10</td></tr>
<tr><td>2</td><td>Steve Mason (TOR)</td><td>20</td><td>10</td></tr>
<tr><td>3</td><td>Carey Price (WPG)</td><td>16</td><td>9</td></tr>
<tr><td>4</td><td>Calvin Pickard (CAR)</td><td>20</td><td>9</td></tr>
<tr><td>5</td><td>Thatcher Demko (MIN)</td><td>20</td><td>9</td></tr>
<tr><td>6</td><td>Sergei Bobrovsky (ANH)</td><td>16</td><td>8</td></tr>
<tr><td>7</td><td>Robin Lehner (SEA)</td><td>17</td><td>8</td></tr>
<tr><td>8</td><td>Jacob Markstrom (BUF)</td><td>20</td><td>8</td></tr>
<tr><td>9</td><td>Tristan Jarry (NSH)</td><td>15</td><td>7</td></tr>
<tr><td>10</td><td>Connor Hellebuyck (ARZ)</td><td>16</td><td>7</td></tr>
<tr><td>11</td><td>Jaroslav Halak (SJS)</td><td>18</td><td>7</td></tr>
<tr><td>12</td><td>Marc-Andre Fleury (EDM)</td><td>18</td><td>7</td></tr>
<tr><td>13</td><td>Henrik Lundqvist (CLB)</td><td>10</td><td>6</td></tr>
<tr><td>14</td><td>Darcy Kuemper (TBL)</td><td>10</td><td>6</td></tr>
<tr><td>15</td><td>Olivier Roy (CGY)</td><td>11</td><td>6</td></tr>
<tr><td>16</td><td>John Gibson (PIT)</td><td>11</td><td>6</td></tr>
<tr><td>17</td><td>Jack Campbell (NYR)</td><td>15</td><td>6</td></tr>
<tr><td>18</td><td>Ilya Sorokin (NJD)</td><td>15</td><td>6</td></tr>
<tr><td>19</td><td>Igor Shestyorkin (BOS)</td><td>16</td><td>6</td></tr>
<tr><td>20</td><td>Anders Lindback (CHI)</td><td>17</td><td>6</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
