<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Pro Individual Leaders</title>
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
<b>Minimum Games Played: 7</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Alex Ovechkin (PIT)</td><td>26</td><td>13</td></tr>
<tr><td>2</td><td>Derek Stepan (PIT)</td><td>26</td><td>13</td></tr>
<tr><td>3</td><td>Jeff Skinner (LOS)</td><td>27</td><td>12</td></tr>
<tr><td>4</td><td>Alexander Semin (PIT)</td><td>26</td><td>10</td></tr>
<tr><td>5</td><td>Anze Kopitar (LOS)</td><td>27</td><td>10</td></tr>
<tr><td>6</td><td>Tyler Bozak (LOS)</td><td>27</td><td>10</td></tr>
<tr><td>7</td><td>Drew Doughty (LOS)</td><td>27</td><td>9</td></tr>
<tr><td>8</td><td>Nathan MacKinnon (NSH)</td><td>19</td><td>8</td></tr>
<tr><td>9</td><td>Bobby Ryan (PIT)</td><td>26</td><td>8</td></tr>
<tr><td>10</td><td>Paul Stastny (PIT)</td><td>26</td><td>8</td></tr>
<tr><td>11</td><td>Anthony Mantha (LOS)</td><td>27</td><td>8</td></tr>
<tr><td>12</td><td>Kevin Fiala (LOS)</td><td>27</td><td>8</td></tr>
<tr><td>13</td><td>Shawn Matthias (PIT)</td><td>26</td><td>7</td></tr>
<tr><td>14</td><td>Matt Duchene (ANH)</td><td>14</td><td>6</td></tr>
<tr><td>15</td><td>Brandon Sutter (FLA)</td><td>15</td><td>6</td></tr>
<tr><td>16</td><td>Nikita Kucherov (FLA)</td><td>15</td><td>6</td></tr>
<tr><td>17</td><td>Henrik Sedin (NSH)</td><td>19</td><td>6</td></tr>
<tr><td>18</td><td>Sam Reinhart (NSH)</td><td>19</td><td>6</td></tr>
<tr><td>19</td><td>Bryan Rust (PIT)</td><td>26</td><td>6</td></tr>
<tr><td>20</td><td>Kristopher Letang (LOS)</td><td>27</td><td>6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Paul Stastny (PIT)</td><td>26</td><td>23</td></tr>
<tr><td>2</td><td>Drew Doughty (LOS)</td><td>27</td><td>20</td></tr>
<tr><td>3</td><td>Derek Stepan (PIT)</td><td>26</td><td>19</td></tr>
<tr><td>4</td><td>Duncan Keith (PIT)</td><td>26</td><td>16</td></tr>
<tr><td>5</td><td>Anze Kopitar (LOS)</td><td>27</td><td>16</td></tr>
<tr><td>6</td><td>Kristopher Letang (LOS)</td><td>27</td><td>16</td></tr>
<tr><td>7</td><td>Ben Hutton (LOS)</td><td>25</td><td>15</td></tr>
<tr><td>8</td><td>Jeff Skinner (LOS)</td><td>27</td><td>15</td></tr>
<tr><td>9</td><td>Alex Ovechkin (PIT)</td><td>26</td><td>14</td></tr>
<tr><td>10</td><td>Corey Perry (LOS)</td><td>27</td><td>14</td></tr>
<tr><td>11</td><td>Cody Franson (PIT)</td><td>17</td><td>13</td></tr>
<tr><td>12</td><td>Tyson Barrie (NSH)</td><td>19</td><td>12</td></tr>
<tr><td>13</td><td>Bobby Ryan (PIT)</td><td>26</td><td>12</td></tr>
<tr><td>14</td><td>Mark Pysyk (LOS)</td><td>27</td><td>11</td></tr>
<tr><td>15</td><td>Adam Henrique (FLA)</td><td>15</td><td>10</td></tr>
<tr><td>16</td><td>Justin Braun (PIT)</td><td>25</td><td>10</td></tr>
<tr><td>17</td><td>Bryan Rust (PIT)</td><td>26</td><td>10</td></tr>
<tr><td>18</td><td>Alex Pietrangelo (MTL)</td><td>11</td><td>9</td></tr>
<tr><td>19</td><td>Justin Schultz (ANH)</td><td>14</td><td>9</td></tr>
<tr><td>20</td><td>Colin Wilson (NSH)</td><td>19</td><td>9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Jeff Skinner (LOS)</td><td>27</td><td>140</td></tr>
<tr><td>2</td><td>Anze Kopitar (LOS)</td><td>27</td><td>117</td></tr>
<tr><td>3</td><td>Derek Stepan (PIT)</td><td>26</td><td>113</td></tr>
<tr><td>4</td><td>Alex Ovechkin (PIT)</td><td>26</td><td>98</td></tr>
<tr><td>5</td><td>Corey Perry (LOS)</td><td>27</td><td>86</td></tr>
<tr><td>6</td><td>Bobby Ryan (PIT)</td><td>26</td><td>82</td></tr>
<tr><td>7</td><td>Paul Stastny (PIT)</td><td>26</td><td>80</td></tr>
<tr><td>8</td><td>Bryan Rust (PIT)</td><td>26</td><td>76</td></tr>
<tr><td>9</td><td>Alexander Semin (PIT)</td><td>26</td><td>74</td></tr>
<tr><td>10</td><td>Tyler Bozak (LOS)</td><td>27</td><td>68</td></tr>
<tr><td>11</td><td>Anthony Mantha (LOS)</td><td>27</td><td>66</td></tr>
<tr><td>12</td><td>Kevin Fiala (LOS)</td><td>27</td><td>65</td></tr>
<tr><td>13</td><td>Drew Doughty (LOS)</td><td>27</td><td>63</td></tr>
<tr><td>14</td><td>David Krejci (OTT)</td><td>13</td><td>60</td></tr>
<tr><td>15</td><td>Nikita Kucherov (FLA)</td><td>15</td><td>59</td></tr>
<tr><td>16</td><td>Conor Sheary (PIT)</td><td>26</td><td>59</td></tr>
<tr><td>17</td><td>Nathan MacKinnon (NSH)</td><td>19</td><td>58</td></tr>
<tr><td>18</td><td>Michael Grabner (OTT)</td><td>13</td><td>54</td></tr>
<tr><td>19</td><td>David Pastrnak (ANH)</td><td>14</td><td>54</td></tr>
<tr><td>20</td><td>Henrik Sedin (NSH)</td><td>19</td><td>54</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Mike Green (TBL)</td><td>7</td><td>25,00%</td></tr>
<tr><td>2</td><td>David Rundblad (PHI)</td><td>7</td><td>25,00%</td></tr>
<tr><td>3</td><td>Zach Budish (NSH)</td><td>19</td><td>23,81%</td></tr>
<tr><td>4</td><td>Max Domi (PHI)</td><td>7</td><td>23,08%</td></tr>
<tr><td>5</td><td>Elias Pettersson (TBL)</td><td>7</td><td>21,43%</td></tr>
<tr><td>6</td><td>Loui Eriksson (ARZ)</td><td>7</td><td>21,05%</td></tr>
<tr><td>7</td><td>T.J. Brennan (ANH)</td><td>14</td><td>20,83%</td></tr>
<tr><td>8</td><td>Peter Trainor (NSH)</td><td>15</td><td>17,65%</td></tr>
<tr><td>9</td><td>Hampus Lindholm (ARZ)</td><td>7</td><td>16,67%</td></tr>
<tr><td>10</td><td>John Klingberg (STL)</td><td>12</td><td>16,67%</td></tr>
<tr><td>11</td><td>Dan DeKeyser (FLA)</td><td>15</td><td>16,67%</td></tr>
<tr><td>12</td><td>Brandon McMillan (OTT)</td><td>13</td><td>16,13%</td></tr>
<tr><td>13</td><td>Shawn Matthias (PIT)</td><td>26</td><td>15,91%</td></tr>
<tr><td>14</td><td>Sam Bennett (MTL)</td><td>11</td><td>15,63%</td></tr>
<tr><td>15</td><td>Brandon Sutter (FLA)</td><td>15</td><td>15,38%</td></tr>
<tr><td>16</td><td>John Tavares (ARZ)</td><td>7</td><td>15,00%</td></tr>
<tr><td>17</td><td>Freddie Hamilton (NSH)</td><td>19</td><td>15,00%</td></tr>
<tr><td>18</td><td>Tyler Bozak (LOS)</td><td>27</td><td>14,71%</td></tr>
<tr><td>19</td><td>Quinton Howden (TBL)</td><td>7</td><td>14,29%</td></tr>
<tr><td>20</td><td>Ryan Murphy (OTT)</td><td>13</td><td>14,29%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Derek Stepan (PIT)</td><td>26</td><td>13-19-32</td></tr>
<tr><td>2</td><td>Paul Stastny (PIT)</td><td>26</td><td>8-23-31</td></tr>
<tr><td>3</td><td>Anze Kopitar (LOS)</td><td>27</td><td>10-16-26</td></tr>
<tr><td>4</td><td>Tyler Bozak (LOS)</td><td>27</td><td>10-9-19</td></tr>
<tr><td>5</td><td>Nathan MacKinnon (NSH)</td><td>19</td><td>8-8-16</td></tr>
<tr><td>6</td><td>Shawn Matthias (PIT)</td><td>26</td><td>7-7-14</td></tr>
<tr><td>7</td><td>Matt Duchene (ANH)</td><td>14</td><td>6-8-14</td></tr>
<tr><td>8</td><td>Henrik Sedin (NSH)</td><td>19</td><td>6-8-14</td></tr>
<tr><td>9</td><td>Adam Henrique (FLA)</td><td>15</td><td>4-10-14</td></tr>
<tr><td>10</td><td>David Krejci (OTT)</td><td>13</td><td>5-8-13</td></tr>
<tr><td>11</td><td>Colin Wilson (NSH)</td><td>19</td><td>4-9-13</td></tr>
<tr><td>12</td><td>Ryan O'Reilly (STL)</td><td>12</td><td>4-8-12</td></tr>
<tr><td>13</td><td>Sam Reinhart (NSH)</td><td>19</td><td>6-5-11</td></tr>
<tr><td>14</td><td>Brandon Sutter (FLA)</td><td>15</td><td>6-4-10</td></tr>
<tr><td>15</td><td>Sam Bennett (MTL)</td><td>11</td><td>5-4-9</td></tr>
<tr><td>16</td><td>Claude Giroux (PHI)</td><td>7</td><td>3-6-9</td></tr>
<tr><td>17</td><td>Vladimir Sobotka (PIT)</td><td>26</td><td>3-6-9</td></tr>
<tr><td>18</td><td>Brandon McMillan (OTT)</td><td>13</td><td>5-3-8</td></tr>
<tr><td>19</td><td>Mitch Marner (STL)</td><td>9</td><td>3-5-8</td></tr>
<tr><td>20</td><td>Nazem Kadri (STL)</td><td>12</td><td>3-5-8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Alex Ovechkin (PIT)</td><td>26</td><td>13-14-27</td></tr>
<tr><td>2</td><td>Jeff Skinner (LOS)</td><td>27</td><td>12-15-27</td></tr>
<tr><td>3</td><td>Bobby Ryan (PIT)</td><td>26</td><td>8-12-20</td></tr>
<tr><td>4</td><td>Alexander Semin (PIT)</td><td>26</td><td>10-9-19</td></tr>
<tr><td>5</td><td>Anthony Mantha (LOS)</td><td>27</td><td>8-9-17</td></tr>
<tr><td>6</td><td>Kevin Fiala (LOS)</td><td>27</td><td>8-9-17</td></tr>
<tr><td>7</td><td>Bryan Rust (PIT)</td><td>26</td><td>6-10-16</td></tr>
<tr><td>8</td><td>Shawn Matthias (PIT)</td><td>26</td><td>7-7-14</td></tr>
<tr><td>9</td><td>Adam Henrique (FLA)</td><td>15</td><td>4-10-14</td></tr>
<tr><td>10</td><td>Colin Wilson (NSH)</td><td>19</td><td>4-9-13</td></tr>
<tr><td>11</td><td>Ryan O'Reilly (STL)</td><td>12</td><td>4-8-12</td></tr>
<tr><td>12</td><td>Conor Sheary (PIT)</td><td>26</td><td>3-8-11</td></tr>
<tr><td>13</td><td>Kirill Kaprizov (NSH)</td><td>16</td><td>4-6-10</td></tr>
<tr><td>14</td><td>Michael Grabner (OTT)</td><td>13</td><td>3-7-10</td></tr>
<tr><td>15</td><td>Sam Bennett (MTL)</td><td>11</td><td>5-4-9</td></tr>
<tr><td>16</td><td>Gabriel Landeskog (FLA)</td><td>15</td><td>4-5-9</td></tr>
<tr><td>17</td><td>Claude Giroux (PHI)</td><td>7</td><td>3-6-9</td></tr>
<tr><td>18</td><td>Vladimir Sobotka (PIT)</td><td>26</td><td>3-6-9</td></tr>
<tr><td>19</td><td>Brandon McMillan (OTT)</td><td>13</td><td>5-3-8</td></tr>
<tr><td>20</td><td>Kyle Connor (ANH)</td><td>14</td><td>4-4-8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Alex Ovechkin (PIT)</td><td>26</td><td>13-14-27</td></tr>
<tr><td>2</td><td>Bobby Ryan (PIT)</td><td>26</td><td>8-12-20</td></tr>
<tr><td>3</td><td>Alexander Semin (PIT)</td><td>26</td><td>10-9-19</td></tr>
<tr><td>4</td><td>Corey Perry (LOS)</td><td>27</td><td>5-14-19</td></tr>
<tr><td>5</td><td>Anthony Mantha (LOS)</td><td>27</td><td>8-9-17</td></tr>
<tr><td>6</td><td>Kevin Fiala (LOS)</td><td>27</td><td>8-9-17</td></tr>
<tr><td>7</td><td>Nathan MacKinnon (NSH)</td><td>19</td><td>8-8-16</td></tr>
<tr><td>8</td><td>Bryan Rust (PIT)</td><td>26</td><td>6-10-16</td></tr>
<tr><td>9</td><td>Oliver Bjorkstrand (NSH)</td><td>19</td><td>5-9-14</td></tr>
<tr><td>10</td><td>David Krejci (OTT)</td><td>13</td><td>5-8-13</td></tr>
<tr><td>11</td><td>Colin Wilson (NSH)</td><td>19</td><td>4-9-13</td></tr>
<tr><td>12</td><td>Ryan O'Reilly (STL)</td><td>12</td><td>4-8-12</td></tr>
<tr><td>13</td><td>Nikita Kucherov (FLA)</td><td>15</td><td>6-5-11</td></tr>
<tr><td>14</td><td>Sam Reinhart (NSH)</td><td>19</td><td>6-5-11</td></tr>
<tr><td>15</td><td>Conor Sheary (PIT)</td><td>26</td><td>3-8-11</td></tr>
<tr><td>16</td><td>Brandon Sutter (FLA)</td><td>15</td><td>6-4-10</td></tr>
<tr><td>17</td><td>Kirill Kaprizov (NSH)</td><td>16</td><td>4-6-10</td></tr>
<tr><td>18</td><td>Michael Grabner (OTT)</td><td>13</td><td>3-7-10</td></tr>
<tr><td>19</td><td>Brock Boeser (ANH)</td><td>14</td><td>5-4-9</td></tr>
<tr><td>20</td><td>Claude Giroux (PHI)</td><td>7</td><td>3-6-9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Drew Doughty (LOS)</td><td>27</td><td>9-20-29</td></tr>
<tr><td>2</td><td>Kristopher Letang (LOS)</td><td>27</td><td>6-16-22</td></tr>
<tr><td>3</td><td>Duncan Keith (PIT)</td><td>26</td><td>3-16-19</td></tr>
<tr><td>4</td><td>Ben Hutton (LOS)</td><td>25</td><td>2-15-17</td></tr>
<tr><td>5</td><td>Mark Pysyk (LOS)</td><td>27</td><td>5-11-16</td></tr>
<tr><td>6</td><td>Justin Braun (PIT)</td><td>25</td><td>5-10-15</td></tr>
<tr><td>7</td><td>Cody Franson (PIT)</td><td>17</td><td>2-13-15</td></tr>
<tr><td>8</td><td>Tyson Barrie (NSH)</td><td>19</td><td>2-12-14</td></tr>
<tr><td>9</td><td>John Klingberg (STL)</td><td>12</td><td>5-7-12</td></tr>
<tr><td>10</td><td>Alex Pietrangelo (MTL)</td><td>11</td><td>3-9-12</td></tr>
<tr><td>11</td><td>T.J. Brennan (ANH)</td><td>14</td><td>5-6-11</td></tr>
<tr><td>12</td><td>Trevor Daley (PIT)</td><td>22</td><td>5-6-11</td></tr>
<tr><td>13</td><td>Christian Ehrhoff (PIT)</td><td>17</td><td>3-8-11</td></tr>
<tr><td>14</td><td>Jakub Jerabek (NSH)</td><td>18</td><td>3-8-11</td></tr>
<tr><td>15</td><td>Justin Schultz (ANH)</td><td>14</td><td>2-9-11</td></tr>
<tr><td>16</td><td>Ryan Wilson (PIT)</td><td>26</td><td>2-9-11</td></tr>
<tr><td>17</td><td>Dmitri Orlov (NSH)</td><td>19</td><td>2-7-9</td></tr>
<tr><td>18</td><td>Roman Josi (NSH)</td><td>19</td><td>2-7-9</td></tr>
<tr><td>19</td><td>Derek Forbort (LOS)</td><td>27</td><td>1-8-9</td></tr>
<tr><td>20</td><td>Dan DeKeyser (FLA)</td><td>15</td><td>3-5-8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Steven Stamkos (TBL)</td><td>7</td><td>1,29</td></tr>
<tr><td>2</td><td>Claude Giroux (PHI)</td><td>7</td><td>1,12</td></tr>
<tr><td>3</td><td>Boone Jenner (PHI)</td><td>7</td><td>1,10</td></tr>
<tr><td>4</td><td>Adam Henrique (FLA)</td><td>15</td><td>1,04</td></tr>
<tr><td>5</td><td>Derek Stepan (PIT)</td><td>26</td><td>1,04</td></tr>
<tr><td>6</td><td>Max Domi (PHI)</td><td>7</td><td>1,03</td></tr>
<tr><td>7</td><td>Paul Stastny (PIT)</td><td>26</td><td>1,03</td></tr>
<tr><td>8</td><td>Loui Eriksson (ARZ)</td><td>7</td><td>1,03</td></tr>
<tr><td>9</td><td>John Klingberg (STL)</td><td>12</td><td>1,02</td></tr>
<tr><td>10</td><td>Nathan Beaulieu (TBL)</td><td>7</td><td>1,02</td></tr>
<tr><td>11</td><td>Mitch Marner (STL)</td><td>9</td><td>1,00</td></tr>
<tr><td>12</td><td>Peter Trainor (NSH)</td><td>15</td><td>0,99</td></tr>
<tr><td>13</td><td>Jeff Skinner (LOS)</td><td>27</td><td>0,97</td></tr>
<tr><td>14</td><td>Sam Bennett (MTL)</td><td>11</td><td>0,92</td></tr>
<tr><td>15</td><td>Alex Ovechkin (PIT)</td><td>26</td><td>0,91</td></tr>
<tr><td>16</td><td>Ryan O'Reilly (STL)</td><td>12</td><td>0,90</td></tr>
<tr><td>17</td><td>Alex Pietrangelo (MTL)</td><td>11</td><td>0,89</td></tr>
<tr><td>18</td><td>Bobby Ryan (PIT)</td><td>26</td><td>0,89</td></tr>
<tr><td>19</td><td>Drew Doughty (LOS)</td><td>27</td><td>0,87</td></tr>
<tr><td>20</td><td>Yohann Auvitu  (STL)</td><td>8</td><td>0,87</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Torrey Mitchell (STL)</td><td>8</td><td>62,50%</td></tr>
<tr><td>2</td><td>Vladimir Sobotka (PIT)</td><td>26</td><td>60,14%</td></tr>
<tr><td>3</td><td>John Tavares (ARZ)</td><td>7</td><td>57,92%</td></tr>
<tr><td>4</td><td>Valtteri Filppula (OTT)</td><td>12</td><td>57,28%</td></tr>
<tr><td>5</td><td>Paul Stastny (PIT)</td><td>26</td><td>57,13%</td></tr>
<tr><td>6</td><td>Jordan Staal (ARZ)</td><td>7</td><td>55,94%</td></tr>
<tr><td>7</td><td>Lars Eller (OTT)</td><td>13</td><td>55,52%</td></tr>
<tr><td>8</td><td>Ryan O'Reilly (STL)</td><td>12</td><td>55,36%</td></tr>
<tr><td>9</td><td>Tyler Bozak (LOS)</td><td>27</td><td>55,18%</td></tr>
<tr><td>10</td><td>Tomas Plekanec (MTL)</td><td>11</td><td>54,59%</td></tr>
<tr><td>11</td><td>Jordan Weal (LOS)</td><td>27</td><td>54,50%</td></tr>
<tr><td>12</td><td>Anze Kopitar (LOS)</td><td>27</td><td>53,27%</td></tr>
<tr><td>13</td><td>Tyler Seguin (FLA)</td><td>15</td><td>53,24%</td></tr>
<tr><td>14</td><td>Marcus Kruger (STL)</td><td>12</td><td>53,00%</td></tr>
<tr><td>15</td><td>Mikael Backlund (TBL)</td><td>7</td><td>52,63%</td></tr>
<tr><td>16</td><td>Curtis Lazar (PHI)</td><td>7</td><td>52,46%</td></tr>
<tr><td>17</td><td>Mark Scheifele (STL)</td><td>12</td><td>51,53%</td></tr>
<tr><td>18</td><td>Claude Giroux (PHI)</td><td>7</td><td>51,27%</td></tr>
<tr><td>19</td><td>Steven Stamkos (TBL)</td><td>7</td><td>50,59%</td></tr>
<tr><td>20</td><td>Austin Watson (MTL)</td><td>11</td><td>50,51%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Alexander Semin (PIT)</td><td>26</td><td>13</td></tr>
<tr><td>2</td><td>Bobby Ryan (PIT)</td><td>26</td><td>13</td></tr>
<tr><td>3</td><td>Anton Stralman (PIT)</td><td>21</td><td>12</td></tr>
<tr><td>4</td><td>Cody Franson (PIT)</td><td>17</td><td>10</td></tr>
<tr><td>5</td><td>Justin Braun (PIT)</td><td>25</td><td>9</td></tr>
<tr><td>6</td><td>Derek Stepan (PIT)</td><td>26</td><td>9</td></tr>
<tr><td>7</td><td>Scott Harrington (MTL)</td><td>11</td><td>7</td></tr>
<tr><td>8</td><td>Paul Stastny (PIT)</td><td>26</td><td>7</td></tr>
<tr><td>9</td><td>Jesse Puljujarvi (ANH)</td><td>14</td><td>6</td></tr>
<tr><td>10</td><td>Justin Schultz (ANH)</td><td>14</td><td>6</td></tr>
<tr><td>11</td><td>Matthew Tkachuk (ANH)</td><td>14</td><td>6</td></tr>
<tr><td>12</td><td>Adam Henrique (FLA)</td><td>15</td><td>6</td></tr>
<tr><td>13</td><td>Christian Ehrhoff (PIT)</td><td>17</td><td>6</td></tr>
<tr><td>14</td><td>Dmitri Orlov (NSH)</td><td>19</td><td>6</td></tr>
<tr><td>15</td><td>Thomas Hickey (NSH)</td><td>19</td><td>6</td></tr>
<tr><td>16</td><td>Sam Reinhart (NSH)</td><td>19</td><td>6</td></tr>
<tr><td>17</td><td>Alex Ovechkin (PIT)</td><td>26</td><td>6</td></tr>
<tr><td>18</td><td>Ryan Wilson (PIT)</td><td>26</td><td>6</td></tr>
<tr><td>19</td><td>Darren Dietz (ANH)</td><td>13</td><td>5</td></tr>
<tr><td>20</td><td>Jamie Oleksiak (ANH)</td><td>14</td><td>5</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Erik Johnson (ANH)</td><td>14</td><td>53</td></tr>
<tr><td>2</td><td>Drew Doughty (LOS)</td><td>27</td><td>47</td></tr>
<tr><td>3</td><td>Ryan Wilson (PIT)</td><td>26</td><td>44</td></tr>
<tr><td>4</td><td>Corey Perry (LOS)</td><td>27</td><td>41</td></tr>
<tr><td>5</td><td>Jakub Jerabek (NSH)</td><td>18</td><td>36</td></tr>
<tr><td>6</td><td>Kristopher Letang (LOS)</td><td>27</td><td>34</td></tr>
<tr><td>7</td><td>Jamie Oleksiak (ANH)</td><td>14</td><td>33</td></tr>
<tr><td>8</td><td>Justin Braun (PIT)</td><td>25</td><td>29</td></tr>
<tr><td>9</td><td>Alex Ovechkin (PIT)</td><td>26</td><td>28</td></tr>
<tr><td>10</td><td>Darren Dietz (ANH)</td><td>13</td><td>25</td></tr>
<tr><td>11</td><td>Brett Ritchie (LOS)</td><td>27</td><td>24</td></tr>
<tr><td>12</td><td>Brandon Montour (MTL)</td><td>11</td><td>23</td></tr>
<tr><td>13</td><td>Mark Pysyk (LOS)</td><td>27</td><td>21</td></tr>
<tr><td>14</td><td>Jared Cowen (OTT)</td><td>13</td><td>20</td></tr>
<tr><td>15</td><td>Ben Hutton (LOS)</td><td>25</td><td>20</td></tr>
<tr><td>16</td><td>Jack Johnson (STL)</td><td>12</td><td>19</td></tr>
<tr><td>17</td><td>Shawn Matthias (PIT)</td><td>26</td><td>19</td></tr>
<tr><td>18</td><td>James Wisniewski (MTL)</td><td>11</td><td>18</td></tr>
<tr><td>19</td><td>Cam Fowler (ANH)</td><td>14</td><td>18</td></tr>
<tr><td>20</td><td>Vincent Trocheck (LOS)</td><td>27</td><td>18</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Duncan Keith (PIT)</td><td>26</td><td>54</td></tr>
<tr><td>2</td><td>Drew Doughty (LOS)</td><td>27</td><td>49</td></tr>
<tr><td>3</td><td>Roman Josi (NSH)</td><td>19</td><td>43</td></tr>
<tr><td>4</td><td>Justin Braun (PIT)</td><td>25</td><td>40</td></tr>
<tr><td>5</td><td>Tyson Barrie (NSH)</td><td>19</td><td>35</td></tr>
<tr><td>6</td><td>Anton Stralman (PIT)</td><td>21</td><td>35</td></tr>
<tr><td>7</td><td>Ryan Wilson (PIT)</td><td>26</td><td>32</td></tr>
<tr><td>8</td><td>Victor Hedman (OTT)</td><td>13</td><td>31</td></tr>
<tr><td>9</td><td>Alexander Edler (FLA)</td><td>15</td><td>31</td></tr>
<tr><td>10</td><td>Brett Pesce (NSH)</td><td>19</td><td>31</td></tr>
<tr><td>11</td><td>Dmitri Orlov (NSH)</td><td>19</td><td>31</td></tr>
<tr><td>12</td><td>Kristopher Letang (LOS)</td><td>27</td><td>29</td></tr>
<tr><td>13</td><td>Derek Forbort (LOS)</td><td>27</td><td>29</td></tr>
<tr><td>14</td><td>Jamie Oleksiak (ANH)</td><td>14</td><td>28</td></tr>
<tr><td>15</td><td>Jared Cowen (OTT)</td><td>13</td><td>27</td></tr>
<tr><td>16</td><td>Joel Edmundson (FLA)</td><td>15</td><td>25</td></tr>
<tr><td>17</td><td>Ben Hutton (LOS)</td><td>25</td><td>24</td></tr>
<tr><td>18</td><td>Mark Pysyk (LOS)</td><td>27</td><td>24</td></tr>
<tr><td>19</td><td>Erik Johnson (ANH)</td><td>14</td><td>23</td></tr>
<tr><td>20</td><td>John Moore (OTT)</td><td>13</td><td>22</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Kevin Fiala (LOS)</td><td>27</td><td>8-9-17</td></tr>
<tr><td>2</td><td>Kyle Connor (ANH)</td><td>14</td><td>4-4-8</td></tr>
<tr><td>3</td><td>Thomas Chabot (LOS)</td><td>27</td><td>1-7-8</td></tr>
<tr><td>4</td><td>Shea Theodore (NYR)</td><td>6</td><td>3-4-7</td></tr>
<tr><td>5</td><td>Peter Trainor (NSH)</td><td>15</td><td>3-3-6</td></tr>
<tr><td>6</td><td>Darren Dietz (ANH)</td><td>13</td><td>2-3-5</td></tr>
<tr><td>7</td><td>Rasmus Dahlin (EDM)</td><td>6</td><td>1-4-5</td></tr>
<tr><td>8</td><td>Elias Pettersson (TBL)</td><td>7</td><td>3-1-4</td></tr>
<tr><td>9</td><td>Antti Suomela (CHI)</td><td>6</td><td>2-2-4</td></tr>
<tr><td>10</td><td>Matthew Tkachuk (ANH)</td><td>14</td><td>2-2-4</td></tr>
<tr><td>11</td><td>Travis Brown (PHI)</td><td>5</td><td>1-3-4</td></tr>
<tr><td>12</td><td>William Karlsson (SEA)</td><td>6</td><td>0-4-4</td></tr>
<tr><td>13</td><td>Samuel Morin (TBL)</td><td>7</td><td>0-3-3</td></tr>
<tr><td>14</td><td>Colton Sissons (BOS)</td><td>6</td><td>1-1-2</td></tr>
<tr><td>15</td><td>Maxim Shalunov (OTT)</td><td>13</td><td>1-1-2</td></tr>
<tr><td>16</td><td>Ryan Haggerty (LOS)</td><td>27</td><td>1-1-2</td></tr>
<tr><td>17</td><td>Brandon Montour (MTL)</td><td>11</td><td>1-0-1</td></tr>
<tr><td>18</td><td>Joel Armia (OTT)</td><td>6</td><td>0-1-1</td></tr>
<tr><td>19</td><td>Alex Iafallo (ARZ)</td><td>6</td><td>0-1-1</td></tr>
<tr><td>20</td><td>Mac Weegar (MTL)</td><td>9</td><td>0-1-1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Drew Doughty (LOS)</td><td>27</td><td>79</td></tr>
<tr><td>2</td><td>Alex Ovechkin (PIT)</td><td>26</td><td>71</td></tr>
<tr><td>3</td><td>Ryan Wilson (PIT)</td><td>26</td><td>71</td></tr>
<tr><td>4</td><td>Derek Forbort (LOS)</td><td>27</td><td>58</td></tr>
<tr><td>5</td><td>Anthony Mantha (LOS)</td><td>27</td><td>58</td></tr>
<tr><td>6</td><td>Anze Kopitar (LOS)</td><td>27</td><td>56</td></tr>
<tr><td>7</td><td>Corey Perry (LOS)</td><td>27</td><td>55</td></tr>
<tr><td>8</td><td>Mark Pysyk (LOS)</td><td>27</td><td>55</td></tr>
<tr><td>9</td><td>Jamie Oleksiak (ANH)</td><td>14</td><td>51</td></tr>
<tr><td>10</td><td>Bobby Ryan (PIT)</td><td>26</td><td>50</td></tr>
<tr><td>11</td><td>Vladimir Sobotka (PIT)</td><td>26</td><td>50</td></tr>
<tr><td>12</td><td>Sam Reinhart (NSH)</td><td>19</td><td>49</td></tr>
<tr><td>13</td><td>Nathan MacKinnon (NSH)</td><td>19</td><td>43</td></tr>
<tr><td>14</td><td>Erik Johnson (ANH)</td><td>14</td><td>42</td></tr>
<tr><td>15</td><td>Kristopher Letang (LOS)</td><td>27</td><td>42</td></tr>
<tr><td>16</td><td>Matt Duchene (ANH)</td><td>14</td><td>41</td></tr>
<tr><td>17</td><td>Cody Franson (PIT)</td><td>17</td><td>37</td></tr>
<tr><td>18</td><td>Paul Stastny (PIT)</td><td>26</td><td>35</td></tr>
<tr><td>19</td><td>Anton Stralman (PIT)</td><td>21</td><td>33</td></tr>
<tr><td>20</td><td>Brent Burns (FLA)</td><td>15</td><td>32</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Drew Doughty (LOS)</td><td>27</td><td>6</td></tr>
<tr><td>2</td><td>Tyler Bozak (LOS)</td><td>27</td><td>5</td></tr>
<tr><td>3</td><td>Mark Pysyk (LOS)</td><td>27</td><td>5</td></tr>
<tr><td>4</td><td>Trevor Daley (PIT)</td><td>22</td><td>4</td></tr>
<tr><td>5</td><td>Mark Scheifele (STL)</td><td>12</td><td>3</td></tr>
<tr><td>6</td><td>John Klingberg (STL)</td><td>12</td><td>3</td></tr>
<tr><td>7</td><td>T.J. Brennan (ANH)</td><td>14</td><td>3</td></tr>
<tr><td>8</td><td>Brock Boeser (ANH)</td><td>14</td><td>3</td></tr>
<tr><td>9</td><td>Christian Ehrhoff (PIT)</td><td>17</td><td>3</td></tr>
<tr><td>10</td><td>Paul Stastny (PIT)</td><td>26</td><td>3</td></tr>
<tr><td>11</td><td>Anze Kopitar (LOS)</td><td>27</td><td>3</td></tr>
<tr><td>12</td><td>Jeff Skinner (LOS)</td><td>27</td><td>3</td></tr>
<tr><td>13</td><td>Logan Couture (ARZ)</td><td>7</td><td>2</td></tr>
<tr><td>14</td><td>Loui Eriksson (ARZ)</td><td>7</td><td>2</td></tr>
<tr><td>15</td><td>Hampus Lindholm (ARZ)</td><td>7</td><td>2</td></tr>
<tr><td>16</td><td>Alex Pietrangelo (MTL)</td><td>11</td><td>2</td></tr>
<tr><td>17</td><td>Marcus Kruger (STL)</td><td>12</td><td>2</td></tr>
<tr><td>18</td><td>Ryan Murphy (OTT)</td><td>13</td><td>2</td></tr>
<tr><td>19</td><td>Michael Grabner (OTT)</td><td>13</td><td>2</td></tr>
<tr><td>20</td><td>Matt Duchene (ANH)</td><td>14</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Alexander Burmistrov (SEA)</td><td>6</td><td>1</td></tr>
<tr><td>2</td><td>Jonathan Toews (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>3</td><td>Marcus Johansson (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>4</td><td>Dan DeKeyser (FLA)</td><td>15</td><td>1</td></tr>
<tr><td>5</td><td>Anthony Camara (FLA)</td><td>15</td><td>1</td></tr>
<tr><td>6</td><td>Freddie Hamilton (NSH)</td><td>19</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>David Krejci (OTT)</td><td>13</td><td>3</td></tr>
<tr><td>2</td><td>Zach Budish (NSH)</td><td>19</td><td>3</td></tr>
<tr><td>3</td><td>Alex Ovechkin (PIT)</td><td>26</td><td>3</td></tr>
<tr><td>4</td><td>Derek Stepan (PIT)</td><td>26</td><td>3</td></tr>
<tr><td>5</td><td>Max Domi (PHI)</td><td>7</td><td>2</td></tr>
<tr><td>6</td><td>Ilya Kovalchuk (MTL)</td><td>11</td><td>2</td></tr>
<tr><td>7</td><td>Matt Duchene (ANH)</td><td>14</td><td>2</td></tr>
<tr><td>8</td><td>Brock Boeser (ANH)</td><td>14</td><td>2</td></tr>
<tr><td>9</td><td>Dylan Larkin (FLA)</td><td>15</td><td>2</td></tr>
<tr><td>10</td><td>Nathan MacKinnon (NSH)</td><td>19</td><td>2</td></tr>
<tr><td>11</td><td>Trevor Daley (PIT)</td><td>22</td><td>2</td></tr>
<tr><td>12</td><td>Bryan Rust (PIT)</td><td>26</td><td>2</td></tr>
<tr><td>13</td><td>Corey Perry (LOS)</td><td>27</td><td>2</td></tr>
<tr><td>14</td><td>Drew Doughty (LOS)</td><td>27</td><td>2</td></tr>
<tr><td>15</td><td>Jeff Skinner (LOS)</td><td>27</td><td>2</td></tr>
<tr><td>16</td><td>Anthony Mantha (LOS)</td><td>27</td><td>2</td></tr>
<tr><td>17</td><td>Alexander Wennberg (NYR)</td><td>4</td><td>1</td></tr>
<tr><td>18</td><td>Brendan Gallagher (EDM)</td><td>6</td><td>1</td></tr>
<tr><td>19</td><td>Josh Anderson (BOS)</td><td>6</td><td>1</td></tr>
<tr><td>20</td><td>Jonathan Toews (CHI)</td><td>6</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Brandon McMillan (OTT)</td><td>13</td><td>2</td></tr>
<tr><td>2</td><td>Matt Duchene (ANH)</td><td>14</td><td>2</td></tr>
<tr><td>3</td><td>Justin Abdelkader (NSH)</td><td>19</td><td>2</td></tr>
<tr><td>4</td><td>Anze Kopitar (LOS)</td><td>27</td><td>2</td></tr>
<tr><td>5</td><td>Bryan Little (SEA)</td><td>6</td><td>1</td></tr>
<tr><td>6</td><td>Jamie Benn (BOS)</td><td>6</td><td>1</td></tr>
<tr><td>7</td><td>Tobias Rieder (EDM)</td><td>6</td><td>1</td></tr>
<tr><td>8</td><td>Ryan Murray (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>9</td><td>Shea Theodore (NYR)</td><td>6</td><td>1</td></tr>
<tr><td>10</td><td>Mikael Backlund (TBL)</td><td>7</td><td>1</td></tr>
<tr><td>11</td><td>Phillip Danault (TBL)</td><td>7</td><td>1</td></tr>
<tr><td>12</td><td>Devante Smith-Pelly (TBL)</td><td>7</td><td>1</td></tr>
<tr><td>13</td><td>Johan Larsson (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>14</td><td>Boone Jenner (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>15</td><td>Tomas Plekanec (MTL)</td><td>11</td><td>1</td></tr>
<tr><td>16</td><td>Sam Bennett (MTL)</td><td>11</td><td>1</td></tr>
<tr><td>17</td><td>Mark Scheifele (STL)</td><td>12</td><td>1</td></tr>
<tr><td>18</td><td>Michael Grabner (OTT)</td><td>13</td><td>1</td></tr>
<tr><td>19</td><td>Victor Hedman (OTT)</td><td>13</td><td>1</td></tr>
<tr><td>20</td><td>Carl Hagelin (OTT)</td><td>13</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Josh Bailey (BOS)</td><td>6</td><td>1</td></tr>
<tr><td>2</td><td>Joel Edmundson (FLA)</td><td>15</td><td>1</td></tr>
<tr><td>3</td><td>Freddie Hamilton (NSH)</td><td>19</td><td>1</td></tr>
<tr><td>4</td><td>Alexander Semin (PIT)</td><td>26</td><td>1</td></tr>
<tr><td>5</td><td>Kevin Fiala (LOS)</td><td>27</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Duncan Keith (PIT)</td><td>26</td><td>689</td></tr>
<tr><td>2</td><td>Drew Doughty (LOS)</td><td>27</td><td>665</td></tr>
<tr><td>3</td><td>Anze Kopitar (LOS)</td><td>27</td><td>650</td></tr>
<tr><td>4</td><td>Kristopher Letang (LOS)</td><td>27</td><td>636</td></tr>
<tr><td>5</td><td>Derek Stepan (PIT)</td><td>26</td><td>616</td></tr>
<tr><td>6</td><td>Corey Perry (LOS)</td><td>27</td><td>613</td></tr>
<tr><td>7</td><td>Paul Stastny (PIT)</td><td>26</td><td>604</td></tr>
<tr><td>8</td><td>Alex Ovechkin (PIT)</td><td>26</td><td>595</td></tr>
<tr><td>9</td><td>Mark Pysyk (LOS)</td><td>27</td><td>591</td></tr>
<tr><td>10</td><td>Bryan Rust (PIT)</td><td>26</td><td>564</td></tr>
<tr><td>11</td><td>Jeff Skinner (LOS)</td><td>27</td><td>554</td></tr>
<tr><td>12</td><td>Tyler Bozak (LOS)</td><td>27</td><td>539</td></tr>
<tr><td>13</td><td>Justin Braun (PIT)</td><td>25</td><td>529</td></tr>
<tr><td>14</td><td>Derek Forbort (LOS)</td><td>27</td><td>486</td></tr>
<tr><td>15</td><td>Kevin Fiala (LOS)</td><td>27</td><td>480</td></tr>
<tr><td>16</td><td>Ben Hutton (LOS)</td><td>25</td><td>473</td></tr>
<tr><td>17</td><td>Alexander Semin (PIT)</td><td>26</td><td>470</td></tr>
<tr><td>18</td><td>Ryan Wilson (PIT)</td><td>26</td><td>467</td></tr>
<tr><td>19</td><td>Roman Josi (NSH)</td><td>19</td><td>455</td></tr>
<tr><td>20</td><td>Bobby Ryan (PIT)</td><td>26</td><td>452</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Alexander Burmistrov (SEA)</td><td>6</td><td>1</td></tr>
<tr><td>2</td><td>Sam Bennett (MTL)</td><td>11</td><td>1</td></tr>
<tr><td>3</td><td>Nathan MacKinnon (NSH)</td><td>19</td><td>1</td></tr>
<tr><td>4</td><td>Alexander Semin (PIT)</td><td>26</td><td>1</td></tr>
<tr><td>5</td><td>Shawn Matthias (PIT)</td><td>26</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Brad Marchand (BOS)</td><td>6</td><td>2</td></tr>
<tr><td>2</td><td>Joe Pavelski (BOS)</td><td>6</td><td>2</td></tr>
<tr><td>3</td><td>Nazem Kadri (STL)</td><td>12</td><td>2</td></tr>
<tr><td>4</td><td>T.J. Brennan (ANH)</td><td>14</td><td>2</td></tr>
<tr><td>5</td><td>Nathan MacKinnon (NSH)</td><td>19</td><td>2</td></tr>
<tr><td>6</td><td>Josh Bailey (BOS)</td><td>6</td><td>1</td></tr>
<tr><td>7</td><td>Justin Williams (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>8</td><td>Patrik Berglund (SEA)</td><td>6</td><td>1</td></tr>
<tr><td>9</td><td>Viktor Arvidsson (NYR)</td><td>6</td><td>1</td></tr>
<tr><td>10</td><td>Ryan McDonagh (NYR)</td><td>6</td><td>1</td></tr>
<tr><td>11</td><td>T.J. Oshie (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>12</td><td>Tomas Jurco (SEA)</td><td>6</td><td>1</td></tr>
<tr><td>13</td><td>Reilly Smith (SEA)</td><td>6</td><td>1</td></tr>
<tr><td>14</td><td>Frédérik Gauthier (BOS)</td><td>6</td><td>1</td></tr>
<tr><td>15</td><td>Loui Eriksson (ARZ)</td><td>7</td><td>1</td></tr>
<tr><td>16</td><td>Quinton Howden (TBL)</td><td>7</td><td>1</td></tr>
<tr><td>17</td><td>Nathan Beaulieu (TBL)</td><td>7</td><td>1</td></tr>
<tr><td>18</td><td>Jean-Gabriel Pageau (TBL)</td><td>7</td><td>1</td></tr>
<tr><td>19</td><td>John Gaudreau (ARZ)</td><td>7</td><td>1</td></tr>
<tr><td>20</td><td>Danton Heinen (MTL)</td><td>11</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Paul Stastny (PIT)</td><td>26</td><td>6</td></tr>
<tr><td>2</td><td>Ryan McDonagh (NYR)</td><td>6</td><td>5</td></tr>
<tr><td>3</td><td>Anze Kopitar (LOS)</td><td>27</td><td>5</td></tr>
<tr><td>4</td><td>Nazem Kadri (STL)</td><td>12</td><td>4</td></tr>
<tr><td>5</td><td>John Klingberg (STL)</td><td>12</td><td>4</td></tr>
<tr><td>6</td><td>Oliver Bjorkstrand (NSH)</td><td>19</td><td>4</td></tr>
<tr><td>7</td><td>Brandon Saad (NYR)</td><td>6</td><td>3</td></tr>
<tr><td>8</td><td>Derrick Pouliot (BOS)</td><td>6</td><td>3</td></tr>
<tr><td>9</td><td>Matt Duchene (ANH)</td><td>14</td><td>3</td></tr>
<tr><td>10</td><td>T.J. Brennan (ANH)</td><td>14</td><td>3</td></tr>
<tr><td>11</td><td>Brad Marchand (BOS)</td><td>6</td><td>2</td></tr>
<tr><td>12</td><td>Joe Pavelski (BOS)</td><td>6</td><td>2</td></tr>
<tr><td>13</td><td>Josh Bailey (BOS)</td><td>6</td><td>2</td></tr>
<tr><td>14</td><td>Frédérik Gauthier (BOS)</td><td>6</td><td>2</td></tr>
<tr><td>15</td><td>Darnell Nurse (SEA)</td><td>6</td><td>2</td></tr>
<tr><td>16</td><td>Kevin Klein (STL)</td><td>12</td><td>2</td></tr>
<tr><td>17</td><td>Nathan MacKinnon (NSH)</td><td>19</td><td>2</td></tr>
<tr><td>18</td><td>Jeff Skinner (LOS)</td><td>27</td><td>2</td></tr>
<tr><td>19</td><td>Mark Pysyk (LOS)</td><td>27</td><td>2</td></tr>
<tr><td>20</td><td>Alexander Urbom (SEA)</td><td>6</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (LOS)</td><td>27</td><td>85</td></tr>
<tr><td>2</td><td>Paul Stastny (PIT)</td><td>26</td><td>78</td></tr>
<tr><td>3</td><td>Derek Stepan (PIT)</td><td>26</td><td>65</td></tr>
<tr><td>4</td><td>Tyler Bozak (LOS)</td><td>27</td><td>65</td></tr>
<tr><td>5</td><td>Drew Doughty (LOS)</td><td>27</td><td>50</td></tr>
<tr><td>6</td><td>Jeff Skinner (LOS)</td><td>27</td><td>48</td></tr>
<tr><td>7</td><td>Nathan MacKinnon (NSH)</td><td>19</td><td>47</td></tr>
<tr><td>8</td><td>Bryan Rust (PIT)</td><td>26</td><td>45</td></tr>
<tr><td>9</td><td>Henrik Sedin (NSH)</td><td>19</td><td>43</td></tr>
<tr><td>10</td><td>Duncan Keith (PIT)</td><td>26</td><td>41</td></tr>
<tr><td>11</td><td>Shawn Matthias (PIT)</td><td>26</td><td>37</td></tr>
<tr><td>12</td><td>Vladimir Sobotka (PIT)</td><td>26</td><td>37</td></tr>
<tr><td>13</td><td>Matt Duchene (ANH)</td><td>14</td><td>35</td></tr>
<tr><td>14</td><td>David Krejci (OTT)</td><td>13</td><td>33</td></tr>
<tr><td>15</td><td>Alex Ovechkin (PIT)</td><td>26</td><td>33</td></tr>
<tr><td>16</td><td>Kristopher Letang (LOS)</td><td>27</td><td>33</td></tr>
<tr><td>17</td><td>Tyler Seguin (FLA)</td><td>15</td><td>32</td></tr>
<tr><td>18</td><td>Zack Smith (NSH)</td><td>19</td><td>32</td></tr>
<tr><td>19</td><td>Mike Richards (MTL)</td><td>11</td><td>31</td></tr>
<tr><td>20</td><td>Brock Nelson (FLA)</td><td>15</td><td>31</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Erik Johnson (ANH)</td><td>14</td><td>3</td></tr>
<tr><td>2</td><td>Drew Doughty (LOS)</td><td>27</td><td>3</td></tr>
<tr><td>3</td><td>Cam Fowler (ANH)</td><td>14</td><td>2</td></tr>
<tr><td>4</td><td>Matt Duchene (ANH)</td><td>14</td><td>2</td></tr>
<tr><td>5</td><td>Kristopher Letang (LOS)</td><td>27</td><td>2</td></tr>
<tr><td>6</td><td>Brett Ritchie (LOS)</td><td>27</td><td>2</td></tr>
<tr><td>7</td><td>Adam Larsson (PHI)</td><td>5</td><td>1</td></tr>
<tr><td>8</td><td>Ryan Callahan (EDM)</td><td>6</td><td>1</td></tr>
<tr><td>9</td><td>Claude Giroux (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Boone Jenner (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>11</td><td>Max Domi (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>12</td><td>Jack Johnson (STL)</td><td>12</td><td>1</td></tr>
<tr><td>13</td><td>Darren Dietz (ANH)</td><td>13</td><td>1</td></tr>
<tr><td>14</td><td>Kyle Turris (ANH)</td><td>14</td><td>1</td></tr>
<tr><td>15</td><td>Clayton Keller (ANH)</td><td>14</td><td>1</td></tr>
<tr><td>16</td><td>Jamie Oleksiak (ANH)</td><td>14</td><td>1</td></tr>
<tr><td>17</td><td>Christian Ehrhoff (PIT)</td><td>17</td><td>1</td></tr>
<tr><td>18</td><td>Justin Braun (PIT)</td><td>25</td><td>1</td></tr>
<tr><td>19</td><td>Shawn Matthias (PIT)</td><td>26</td><td>1</td></tr>
<tr><td>20</td><td>Vladimir Sobotka (PIT)</td><td>26</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Erik Johnson (ANH)</td><td>14</td><td>3</td></tr>
<tr><td>2</td><td>Max Domi (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Jamie Oleksiak (ANH)</td><td>14</td><td>1</td></tr>
<tr><td>4</td><td>Justin Braun (PIT)</td><td>25</td><td>1</td></tr>
<tr><td>5</td><td>Drew Doughty (LOS)</td><td>27</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Cam Ward (PIT)</td><td>26</td><td>0,924</td></tr>
<tr><td>2</td><td>Jonas Hiller (NSH)</td><td>16</td><td>0,921</td></tr>
<tr><td>3</td><td>Matt Murray (FLA)</td><td>15</td><td>0,917</td></tr>
<tr><td>4</td><td>James Reimer (OTT)</td><td>13</td><td>0,916</td></tr>
<tr><td>5</td><td>Ilya Bryzgalov (ANH)</td><td>14</td><td>0,916</td></tr>
<tr><td>6</td><td>Tuukka Rask (STL)</td><td>12</td><td>0,913</td></tr>
<tr><td>7</td><td>Jaroslav Halak (MTL)</td><td>9</td><td>0,910</td></tr>
<tr><td>8</td><td>Michal Neuvirth (LOS)</td><td>25</td><td>0,892</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Cam Ward (PIT)</td><td>26</td><td>2,41</td></tr>
<tr><td>2</td><td>Tuukka Rask (STL)</td><td>12</td><td>2,49</td></tr>
<tr><td>3</td><td>Ilya Bryzgalov (ANH)</td><td>14</td><td>2,58</td></tr>
<tr><td>4</td><td>Matt Murray (FLA)</td><td>15</td><td>2,66</td></tr>
<tr><td>5</td><td>Jonas Hiller (NSH)</td><td>16</td><td>2,74</td></tr>
<tr><td>6</td><td>James Reimer (OTT)</td><td>13</td><td>2,87</td></tr>
<tr><td>7</td><td>Jaroslav Halak (MTL)</td><td>9</td><td>2,88</td></tr>
<tr><td>8</td><td>Michal Neuvirth (LOS)</td><td>25</td><td>3,02</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Cam Ward (PIT)</td><td>26</td><td>1 570</td></tr>
<tr><td>2</td><td>Michal Neuvirth (LOS)</td><td>25</td><td>1 411</td></tr>
<tr><td>3</td><td>Jonas Hiller (NSH)</td><td>16</td><td>942</td></tr>
<tr><td>4</td><td>Ilya Bryzgalov (ANH)</td><td>14</td><td>861</td></tr>
<tr><td>5</td><td>Matt Murray (FLA)</td><td>15</td><td>858</td></tr>
<tr><td>6</td><td>James Reimer (OTT)</td><td>13</td><td>815</td></tr>
<tr><td>7</td><td>Tuukka Rask (STL)</td><td>12</td><td>675</td></tr>
<tr><td>8</td><td>Jaroslav Halak (MTL)</td><td>9</td><td>542</td></tr>
<tr><td>9</td><td>Jonathan Quick (TBL)</td><td>7</td><td>406</td></tr>
<tr><td>10</td><td>Carey Price (CHI)</td><td>6</td><td>361</td></tr>
<tr><td>11</td><td>Josh Harding (BOS)</td><td>6</td><td>340</td></tr>
<tr><td>12</td><td>Brian Elliott (PHI)</td><td>6</td><td>337</td></tr>
<tr><td>13</td><td>Jacob Markstrom (SEA)</td><td>6</td><td>337</td></tr>
<tr><td>14</td><td>Henrik Lundqvist (NYR)</td><td>5</td><td>325</td></tr>
<tr><td>15</td><td>Pekka Rinne (ARZ)</td><td>6</td><td>279</td></tr>
<tr><td>16</td><td>Marc-Andre Fleury (EDM)</td><td>4</td><td>239</td></tr>
<tr><td>17</td><td>Philipp Grubauer (LOS)</td><td>5</td><td>238</td></tr>
<tr><td>18</td><td>Tristan Jarry (NSH)</td><td>4</td><td>235</td></tr>
<tr><td>19</td><td>Mark Visentin (ARZ)</td><td>3</td><td>147</td></tr>
<tr><td>20</td><td>Devan Dubnyk (EDM)</td><td>2</td><td>120</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Cam Ward (PIT)</td><td>26</td><td>830</td></tr>
<tr><td>2</td><td>Michal Neuvirth (LOS)</td><td>25</td><td>657</td></tr>
<tr><td>3</td><td>Jonas Hiller (NSH)</td><td>16</td><td>542</td></tr>
<tr><td>4</td><td>James Reimer (OTT)</td><td>13</td><td>467</td></tr>
<tr><td>5</td><td>Matt Murray (FLA)</td><td>15</td><td>458</td></tr>
<tr><td>6</td><td>Ilya Bryzgalov (ANH)</td><td>14</td><td>439</td></tr>
<tr><td>7</td><td>Tuukka Rask (STL)</td><td>12</td><td>321</td></tr>
<tr><td>8</td><td>Jaroslav Halak (MTL)</td><td>9</td><td>289</td></tr>
<tr><td>9</td><td>Jonathan Quick (TBL)</td><td>7</td><td>216</td></tr>
<tr><td>10</td><td>Jacob Markstrom (SEA)</td><td>6</td><td>197</td></tr>
<tr><td>11</td><td>Brian Elliott (PHI)</td><td>6</td><td>195</td></tr>
<tr><td>12</td><td>Carey Price (CHI)</td><td>6</td><td>189</td></tr>
<tr><td>13</td><td>Josh Harding (BOS)</td><td>6</td><td>176</td></tr>
<tr><td>14</td><td>Marc-Andre Fleury (EDM)</td><td>4</td><td>159</td></tr>
<tr><td>15</td><td>Henrik Lundqvist (NYR)</td><td>5</td><td>154</td></tr>
<tr><td>16</td><td>Pekka Rinne (ARZ)</td><td>6</td><td>148</td></tr>
<tr><td>17</td><td>Philipp Grubauer (LOS)</td><td>5</td><td>130</td></tr>
<tr><td>18</td><td>Tristan Jarry (NSH)</td><td>4</td><td>88</td></tr>
<tr><td>19</td><td>Mark Visentin (ARZ)</td><td>3</td><td>79</td></tr>
<tr><td>20</td><td>Devan Dubnyk (EDM)</td><td>2</td><td>62</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Cam Ward (PIT)</td><td>26</td><td>3</td></tr>
<tr><td>2</td><td>Matt Murray (FLA)</td><td>15</td><td>2</td></tr>
<tr><td>3</td><td>Jonas Hiller (NSH)</td><td>16</td><td>2</td></tr>
<tr><td>4</td><td>Jaroslav Halak (MTL)</td><td>9</td><td>1</td></tr>
<tr><td>5</td><td>Tuukka Rask (STL)</td><td>12</td><td>1</td></tr>
<tr><td>6</td><td>Ilya Bryzgalov (ANH)</td><td>14</td><td>1</td></tr>
<tr><td>7</td><td>Michal Neuvirth (LOS)</td><td>25</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Michal Neuvirth (LOS)</td><td>25</td><td>16</td></tr>
<tr><td>2</td><td>Cam Ward (PIT)</td><td>26</td><td>15</td></tr>
<tr><td>3</td><td>Jonas Hiller (NSH)</td><td>16</td><td>10</td></tr>
<tr><td>4</td><td>Matt Murray (FLA)</td><td>15</td><td>9</td></tr>
<tr><td>5</td><td>James Reimer (OTT)</td><td>13</td><td>7</td></tr>
<tr><td>6</td><td>Ilya Bryzgalov (ANH)</td><td>14</td><td>7</td></tr>
<tr><td>7</td><td>Tuukka Rask (STL)</td><td>12</td><td>6</td></tr>
<tr><td>8</td><td>Jaroslav Halak (MTL)</td><td>9</td><td>4</td></tr>
<tr><td>9</td><td>Brian Elliott (PHI)</td><td>6</td><td>3</td></tr>
<tr><td>10</td><td>Pekka Rinne (ARZ)</td><td>6</td><td>3</td></tr>
<tr><td>11</td><td>Jonathan Quick (TBL)</td><td>7</td><td>3</td></tr>
<tr><td>12</td><td>Marc-Andre Fleury (EDM)</td><td>4</td><td>2</td></tr>
<tr><td>13</td><td>Henrik Lundqvist (NYR)</td><td>5</td><td>2</td></tr>
<tr><td>14</td><td>Carey Price (CHI)</td><td>6</td><td>2</td></tr>
<tr><td>15</td><td>Jacob Markstrom (SEA)</td><td>6</td><td>2</td></tr>
<tr><td>16</td><td>Josh Harding (BOS)</td><td>6</td><td>2</td></tr>
<tr><td>17</td><td>Tristan Jarry (NSH)</td><td>4</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Michal Neuvirth (LOS)</td><td>25</td><td>7</td></tr>
<tr><td>2</td><td>Cam Ward (PIT)</td><td>26</td><td>7</td></tr>
<tr><td>3</td><td>James Reimer (OTT)</td><td>13</td><td>6</td></tr>
<tr><td>4</td><td>Ilya Bryzgalov (ANH)</td><td>14</td><td>6</td></tr>
<tr><td>5</td><td>Jaroslav Halak (MTL)</td><td>9</td><td>5</td></tr>
<tr><td>6</td><td>Tuukka Rask (STL)</td><td>12</td><td>5</td></tr>
<tr><td>7</td><td>Matt Murray (FLA)</td><td>15</td><td>5</td></tr>
<tr><td>8</td><td>Jonas Hiller (NSH)</td><td>16</td><td>5</td></tr>
<tr><td>9</td><td>Jacob Markstrom (SEA)</td><td>6</td><td>4</td></tr>
<tr><td>10</td><td>Brian Elliott (PHI)</td><td>6</td><td>3</td></tr>
<tr><td>11</td><td>Carey Price (CHI)</td><td>6</td><td>3</td></tr>
<tr><td>12</td><td>Pekka Rinne (ARZ)</td><td>6</td><td>3</td></tr>
<tr><td>13</td><td>Josh Harding (BOS)</td><td>6</td><td>3</td></tr>
<tr><td>14</td><td>Jonathan Quick (TBL)</td><td>7</td><td>3</td></tr>
<tr><td>15</td><td>Devan Dubnyk (EDM)</td><td>2</td><td>2</td></tr>
<tr><td>16</td><td>Jimmy Howard (MTL)</td><td>2</td><td>2</td></tr>
<tr><td>17</td><td>Marc-Andre Fleury (EDM)</td><td>4</td><td>2</td></tr>
<tr><td>18</td><td>Henrik Lundqvist (NYR)</td><td>5</td><td>2</td></tr>
<tr><td>19</td><td>Philipp Grubauer (LOS)</td><td>5</td><td>2</td></tr>
<tr><td>20</td><td>Jack Campbell (NYR)</td><td>1</td><td>1</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
