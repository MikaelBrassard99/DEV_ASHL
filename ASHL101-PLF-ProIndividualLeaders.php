<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Individual Leaders</title>
<script src="ASHL101-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL101-STHS.db - ASHL101-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
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
<b>Minimum Games Played: 7</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Jeff Skinner (LOS)</td><td>20</td><td>12</td></tr>
<tr><td>2</td><td>Sebastian Aho (TOR)</td><td>21</td><td>12</td></tr>
<tr><td>3</td><td>Mikael Granlund (TOR)</td><td>21</td><td>12</td></tr>
<tr><td>4</td><td>Anze Kopitar (LOS)</td><td>20</td><td>11</td></tr>
<tr><td>5</td><td>Alexander Burmistrov (WPG)</td><td>25</td><td>11</td></tr>
<tr><td>6</td><td>Gabriel Landeskog (WPG)</td><td>25</td><td>11</td></tr>
<tr><td>7</td><td>Robby Fabbri (COL)</td><td>14</td><td>10</td></tr>
<tr><td>8</td><td>Auston Matthews (WPG)</td><td>25</td><td>8</td></tr>
<tr><td>9</td><td>Cole Ully (WPG)</td><td>25</td><td>8</td></tr>
<tr><td>10</td><td>Kris Letang (VEG)</td><td>14</td><td>7</td></tr>
<tr><td>11</td><td>Brent Burns (WPG)</td><td>25</td><td>7</td></tr>
<tr><td>12</td><td>Filip Forsberg (MTL)</td><td>11</td><td>6</td></tr>
<tr><td>13</td><td>Colin White (PIT)</td><td>13</td><td>6</td></tr>
<tr><td>14</td><td>Patrik Laine (VEG)</td><td>14</td><td>6</td></tr>
<tr><td>15</td><td>Mika Zibanejad (VEG)</td><td>14</td><td>6</td></tr>
<tr><td>16</td><td>Jake DeBrusk (PIT)</td><td>15</td><td>6</td></tr>
<tr><td>17</td><td>Miles Wood (LOS)</td><td>19</td><td>6</td></tr>
<tr><td>18</td><td>Jordan Staal (LOS)</td><td>20</td><td>6</td></tr>
<tr><td>19</td><td>Victor Hedman (WPG)</td><td>25</td><td>6</td></tr>
<tr><td>20</td><td>Hampus Lindholm (ARZ)</td><td>7</td><td>5</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Drew Doughty (LOS)</td><td>20</td><td>20</td></tr>
<tr><td>2</td><td>Anze Kopitar (LOS)</td><td>20</td><td>16</td></tr>
<tr><td>3</td><td>Auston Matthews (WPG)</td><td>25</td><td>15</td></tr>
<tr><td>4</td><td>Victor Hedman (WPG)</td><td>25</td><td>15</td></tr>
<tr><td>5</td><td>Jeff Skinner (LOS)</td><td>20</td><td>14</td></tr>
<tr><td>6</td><td>Tobias Enstrom (TOR)</td><td>21</td><td>14</td></tr>
<tr><td>7</td><td>Jake Gardiner (WPG)</td><td>25</td><td>14</td></tr>
<tr><td>8</td><td>Mark Pysyk (LOS)</td><td>20</td><td>13</td></tr>
<tr><td>9</td><td>Morgan Rielly (TOR)</td><td>21</td><td>13</td></tr>
<tr><td>10</td><td>Gabriel Landeskog (WPG)</td><td>25</td><td>13</td></tr>
<tr><td>11</td><td>Jordan Subban (LOS)</td><td>20</td><td>12</td></tr>
<tr><td>12</td><td>Mikael Granlund (TOR)</td><td>21</td><td>12</td></tr>
<tr><td>13</td><td>Brent Burns (WPG)</td><td>25</td><td>12</td></tr>
<tr><td>14</td><td>Torey Krug (MTL)</td><td>11</td><td>11</td></tr>
<tr><td>15</td><td>Vyacheslav Voynov (COL)</td><td>14</td><td>11</td></tr>
<tr><td>16</td><td>Ville Pokka (TOR)</td><td>21</td><td>11</td></tr>
<tr><td>17</td><td>Ryan Graves (WPG)</td><td>25</td><td>11</td></tr>
<tr><td>18</td><td>Erik Johnson (VEG)</td><td>14</td><td>10</td></tr>
<tr><td>19</td><td>Justin Schultz (VEG)</td><td>14</td><td>10</td></tr>
<tr><td>20</td><td>Sebastian Aho (TOR)</td><td>21</td><td>10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Jeff Skinner (LOS)</td><td>20</td><td>110</td></tr>
<tr><td>2</td><td>Sebastian Aho (TOR)</td><td>21</td><td>99</td></tr>
<tr><td>3</td><td>Anze Kopitar (LOS)</td><td>20</td><td>90</td></tr>
<tr><td>4</td><td>Mikko Rantanen (TOR)</td><td>19</td><td>88</td></tr>
<tr><td>5</td><td>Auston Matthews (WPG)</td><td>25</td><td>88</td></tr>
<tr><td>6</td><td>Gabriel Landeskog (WPG)</td><td>25</td><td>87</td></tr>
<tr><td>7</td><td>Mikael Granlund (TOR)</td><td>21</td><td>86</td></tr>
<tr><td>8</td><td>Alexander Burmistrov (WPG)</td><td>25</td><td>80</td></tr>
<tr><td>9</td><td>Mark Scheifele (WPG)</td><td>25</td><td>73</td></tr>
<tr><td>10</td><td>Emerson Etem (TOR)</td><td>21</td><td>68</td></tr>
<tr><td>11</td><td>Kevin Fiala (LOS)</td><td>20</td><td>57</td></tr>
<tr><td>12</td><td>Jake DeBrusk (PIT)</td><td>15</td><td>54</td></tr>
<tr><td>13</td><td>Jordan Staal (LOS)</td><td>20</td><td>54</td></tr>
<tr><td>14</td><td>Blake Wheeler (WPG)</td><td>25</td><td>54</td></tr>
<tr><td>15</td><td>Victor Hedman (WPG)</td><td>25</td><td>53</td></tr>
<tr><td>16</td><td>Anders Lee (WPG)</td><td>25</td><td>53</td></tr>
<tr><td>17</td><td>Sean Monahan (COL)</td><td>14</td><td>52</td></tr>
<tr><td>18</td><td>Corey Perry (LOS)</td><td>20</td><td>52</td></tr>
<tr><td>19</td><td>Andre Burakovsky (PIT)</td><td>15</td><td>51</td></tr>
<tr><td>20</td><td>Cole Ully (WPG)</td><td>25</td><td>50</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Hampus Lindholm (ARZ)</td><td>7</td><td>35,71%</td></tr>
<tr><td>2</td><td>T.J. Oshie (ARZ)</td><td>7</td><td>33,33%</td></tr>
<tr><td>3</td><td>Jacob De La Rose (FLA)</td><td>10</td><td>30,77%</td></tr>
<tr><td>4</td><td>Dominik Kubalik (MTL)</td><td>11</td><td>30,77%</td></tr>
<tr><td>5</td><td>Kris Letang (VEG)</td><td>14</td><td>29,17%</td></tr>
<tr><td>6</td><td>Miles Wood (LOS)</td><td>19</td><td>27,27%</td></tr>
<tr><td>7</td><td>Jonathon Blum (COL)</td><td>14</td><td>26,67%</td></tr>
<tr><td>8</td><td>Colin White (PIT)</td><td>13</td><td>26,09%</td></tr>
<tr><td>9</td><td>Robby Fabbri (COL)</td><td>14</td><td>24,39%</td></tr>
<tr><td>10</td><td>Drake Batherson (NSH)</td><td>7</td><td>20,00%</td></tr>
<tr><td>11</td><td>Brock Nelson (VEG)</td><td>10</td><td>18,75%</td></tr>
<tr><td>12</td><td>Patrik Laine (VEG)</td><td>14</td><td>18,75%</td></tr>
<tr><td>13</td><td>Noel Acciari (ARZ)</td><td>7</td><td>18,18%</td></tr>
<tr><td>14</td><td>Valentin Zykov (STL)</td><td>7</td><td>18,18%</td></tr>
<tr><td>15</td><td>Chandler Stephenson (MTL)</td><td>11</td><td>17,65%</td></tr>
<tr><td>16</td><td>Nick Schmaltz (PHI)</td><td>7</td><td>16,67%</td></tr>
<tr><td>17</td><td>Nazem Kadri (STL)</td><td>7</td><td>16,67%</td></tr>
<tr><td>18</td><td>Justin Faulk (NSH)</td><td>7</td><td>16,67%</td></tr>
<tr><td>19</td><td>Brady Skjei (STL)</td><td>7</td><td>16,67%</td></tr>
<tr><td>20</td><td>Theodor Blueger (STL)</td><td>7</td><td>16,67%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (LOS)</td><td>20</td><td>11-16-27</td></tr>
<tr><td>2</td><td>Mikael Granlund (TOR)</td><td>21</td><td>12-12-24</td></tr>
<tr><td>3</td><td>Auston Matthews (WPG)</td><td>25</td><td>8-15-23</td></tr>
<tr><td>4</td><td>Sebastian Aho (TOR)</td><td>21</td><td>12-10-22</td></tr>
<tr><td>5</td><td>Alexander Burmistrov (WPG)</td><td>25</td><td>11-10-21</td></tr>
<tr><td>6</td><td>Robby Fabbri (COL)</td><td>14</td><td>10-6-16</td></tr>
<tr><td>7</td><td>Mika Zibanejad (VEG)</td><td>14</td><td>6-8-14</td></tr>
<tr><td>8</td><td>Mike Richards (TOR)</td><td>21</td><td>5-9-14</td></tr>
<tr><td>9</td><td>Blake Wheeler (WPG)</td><td>25</td><td>5-9-14</td></tr>
<tr><td>10</td><td>Josh Bailey (PIT)</td><td>14</td><td>5-8-13</td></tr>
<tr><td>11</td><td>Mark Scheifele (WPG)</td><td>25</td><td>5-8-13</td></tr>
<tr><td>12</td><td>Sean Monahan (COL)</td><td>14</td><td>4-9-13</td></tr>
<tr><td>13</td><td>Kyle Turris (PIT)</td><td>15</td><td>3-9-12</td></tr>
<tr><td>14</td><td>Anders Lee (WPG)</td><td>25</td><td>5-5-10</td></tr>
<tr><td>15</td><td>Patrick Kane (VEG)</td><td>14</td><td>3-7-10</td></tr>
<tr><td>16</td><td>Sidney Crosby (MTL)</td><td>11</td><td>2-8-10</td></tr>
<tr><td>17</td><td>Colin White (PIT)</td><td>13</td><td>6-3-9</td></tr>
<tr><td>18</td><td>Jordan Staal (LOS)</td><td>20</td><td>6-3-9</td></tr>
<tr><td>19</td><td>Ryan Nugent-Hopkins (PHI)</td><td>7</td><td>4-5-9</td></tr>
<tr><td>20</td><td>Ryan Getzlaf (VEG)</td><td>14</td><td>2-7-9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Jeff Skinner (LOS)</td><td>20</td><td>12-14-26</td></tr>
<tr><td>2</td><td>Mikael Granlund (TOR)</td><td>21</td><td>12-12-24</td></tr>
<tr><td>3</td><td>Gabriel Landeskog (WPG)</td><td>25</td><td>11-13-24</td></tr>
<tr><td>4</td><td>Sebastian Aho (TOR)</td><td>21</td><td>12-10-22</td></tr>
<tr><td>5</td><td>Alexander Burmistrov (WPG)</td><td>25</td><td>11-10-21</td></tr>
<tr><td>6</td><td>Robby Fabbri (COL)</td><td>14</td><td>10-6-16</td></tr>
<tr><td>7</td><td>Cole Ully (WPG)</td><td>25</td><td>8-8-16</td></tr>
<tr><td>8</td><td>Mike Richards (TOR)</td><td>21</td><td>5-9-14</td></tr>
<tr><td>9</td><td>Josh Bailey (PIT)</td><td>14</td><td>5-8-13</td></tr>
<tr><td>10</td><td>Kevin Fiala (LOS)</td><td>20</td><td>5-8-13</td></tr>
<tr><td>11</td><td>Saku Maenalanen (TOR)</td><td>21</td><td>5-8-13</td></tr>
<tr><td>12</td><td>Jake DeBrusk (PIT)</td><td>15</td><td>6-6-12</td></tr>
<tr><td>13</td><td>Andre Burakovsky (PIT)</td><td>15</td><td>5-7-12</td></tr>
<tr><td>14</td><td>Kyle Turris (PIT)</td><td>15</td><td>3-9-12</td></tr>
<tr><td>15</td><td>Filip Forsberg (MTL)</td><td>11</td><td>6-5-11</td></tr>
<tr><td>16</td><td>Emerson Etem (TOR)</td><td>21</td><td>5-6-11</td></tr>
<tr><td>17</td><td>Miles Wood (LOS)</td><td>19</td><td>6-4-10</td></tr>
<tr><td>18</td><td>Anders Lee (WPG)</td><td>25</td><td>5-5-10</td></tr>
<tr><td>19</td><td>David Pastrnak (FLA)</td><td>10</td><td>4-6-10</td></tr>
<tr><td>20</td><td>Patrik Laine (VEG)</td><td>14</td><td>6-3-9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Mikael Granlund (TOR)</td><td>21</td><td>12-12-24</td></tr>
<tr><td>2</td><td>Sebastian Aho (TOR)</td><td>21</td><td>12-10-22</td></tr>
<tr><td>3</td><td>Alexander Burmistrov (WPG)</td><td>25</td><td>11-10-21</td></tr>
<tr><td>4</td><td>Brent Burns (WPG)</td><td>25</td><td>7-12-19</td></tr>
<tr><td>5</td><td>Blake Wheeler (WPG)</td><td>25</td><td>5-9-14</td></tr>
<tr><td>6</td><td>Josh Bailey (PIT)</td><td>14</td><td>5-8-13</td></tr>
<tr><td>7</td><td>Kevin Fiala (LOS)</td><td>20</td><td>5-8-13</td></tr>
<tr><td>8</td><td>Saku Maenalanen (TOR)</td><td>21</td><td>5-8-13</td></tr>
<tr><td>9</td><td>Mikko Rantanen (TOR)</td><td>19</td><td>4-9-13</td></tr>
<tr><td>10</td><td>Jake DeBrusk (PIT)</td><td>15</td><td>6-6-12</td></tr>
<tr><td>11</td><td>Andre Burakovsky (PIT)</td><td>15</td><td>5-7-12</td></tr>
<tr><td>12</td><td>Kyle Turris (PIT)</td><td>15</td><td>3-9-12</td></tr>
<tr><td>13</td><td>Filip Forsberg (MTL)</td><td>11</td><td>6-5-11</td></tr>
<tr><td>14</td><td>Emerson Etem (TOR)</td><td>21</td><td>5-6-11</td></tr>
<tr><td>15</td><td>Miles Wood (LOS)</td><td>19</td><td>6-4-10</td></tr>
<tr><td>16</td><td>Corey Perry (LOS)</td><td>20</td><td>5-5-10</td></tr>
<tr><td>17</td><td>David Pastrnak (FLA)</td><td>10</td><td>4-6-10</td></tr>
<tr><td>18</td><td>Patrick Kane (VEG)</td><td>14</td><td>3-7-10</td></tr>
<tr><td>19</td><td>Colin White (PIT)</td><td>13</td><td>6-3-9</td></tr>
<tr><td>20</td><td>Patrik Laine (VEG)</td><td>14</td><td>6-3-9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Drew Doughty (LOS)</td><td>20</td><td>2-20-22</td></tr>
<tr><td>2</td><td>Victor Hedman (WPG)</td><td>25</td><td>6-15-21</td></tr>
<tr><td>3</td><td>Brent Burns (WPG)</td><td>25</td><td>7-12-19</td></tr>
<tr><td>4</td><td>Jordan Subban (LOS)</td><td>20</td><td>5-12-17</td></tr>
<tr><td>5</td><td>Jake Gardiner (WPG)</td><td>25</td><td>3-14-17</td></tr>
<tr><td>6</td><td>Ville Pokka (TOR)</td><td>21</td><td>5-11-16</td></tr>
<tr><td>7</td><td>Morgan Rielly (TOR)</td><td>21</td><td>3-13-16</td></tr>
<tr><td>8</td><td>Tobias Enstrom (TOR)</td><td>21</td><td>1-14-15</td></tr>
<tr><td>9</td><td>Mark Pysyk (LOS)</td><td>20</td><td>1-13-14</td></tr>
<tr><td>10</td><td>Ryan Graves (WPG)</td><td>25</td><td>2-11-13</td></tr>
<tr><td>11</td><td>Kris Letang (VEG)</td><td>14</td><td>7-5-12</td></tr>
<tr><td>12</td><td>Erik Johnson (VEG)</td><td>14</td><td>2-10-12</td></tr>
<tr><td>13</td><td>Justin Schultz (VEG)</td><td>14</td><td>2-10-12</td></tr>
<tr><td>14</td><td>Torey Krug (MTL)</td><td>11</td><td>1-11-12</td></tr>
<tr><td>15</td><td>Vyacheslav Voynov (COL)</td><td>14</td><td>1-11-12</td></tr>
<tr><td>16</td><td>Hampus Lindholm (ARZ)</td><td>7</td><td>5-6-11</td></tr>
<tr><td>17</td><td>Jonathon Blum (COL)</td><td>14</td><td>4-7-11</td></tr>
<tr><td>18</td><td>Darren Dietz (PIT)</td><td>15</td><td>4-7-11</td></tr>
<tr><td>19</td><td>Stefan Elliott (TOR)</td><td>21</td><td>4-7-11</td></tr>
<tr><td>20</td><td>Calvin de Haan (WPG)</td><td>25</td><td>2-9-11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Ryan Nugent-Hopkins (PHI)</td><td>7</td><td>1,35</td></tr>
<tr><td>2</td><td>Ryan Suter (ARZ)</td><td>7</td><td>1,31</td></tr>
<tr><td>3</td><td>Hampus Lindholm (ARZ)</td><td>7</td><td>1,30</td></tr>
<tr><td>4</td><td>Pierre Engvall (BUF)</td><td>7</td><td>1,30</td></tr>
<tr><td>5</td><td>Jeff Skinner (LOS)</td><td>20</td><td>1,26</td></tr>
<tr><td>6</td><td>Anze Kopitar (LOS)</td><td>20</td><td>1,22</td></tr>
<tr><td>7</td><td>Robby Fabbri (COL)</td><td>14</td><td>1,19</td></tr>
<tr><td>8</td><td>Karson Kuhlman (NSH)</td><td>7</td><td>1,15</td></tr>
<tr><td>9</td><td>Sebastian Aho (TOR)</td><td>21</td><td>1,11</td></tr>
<tr><td>10</td><td>Mika Zibanejad (VEG)</td><td>14</td><td>1,09</td></tr>
<tr><td>11</td><td>Nikita Soshnikov (STL)</td><td>7</td><td>1,09</td></tr>
<tr><td>12</td><td>Filip Forsberg (MTL)</td><td>11</td><td>1,08</td></tr>
<tr><td>13</td><td>John Klingberg (STL)</td><td>7</td><td>1,07</td></tr>
<tr><td>14</td><td>Zach Bogosian (ARZ)</td><td>7</td><td>1,05</td></tr>
<tr><td>15</td><td>David Pastrnak (FLA)</td><td>10</td><td>1,05</td></tr>
<tr><td>16</td><td>Mikael Granlund (TOR)</td><td>21</td><td>1,01</td></tr>
<tr><td>17</td><td>Torey Krug (MTL)</td><td>11</td><td>0,96</td></tr>
<tr><td>18</td><td>T.J. Galiardi (COL)</td><td>11</td><td>0,96</td></tr>
<tr><td>19</td><td>Drew Doughty (LOS)</td><td>20</td><td>0,95</td></tr>
<tr><td>20</td><td>Auston Matthews (WPG)</td><td>25</td><td>0,95</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Logan Couture (ARZ)</td><td>7</td><td>59,72%</td></tr>
<tr><td>2</td><td>Ryan Getzlaf (VEG)</td><td>14</td><td>57,29%</td></tr>
<tr><td>3</td><td>Ryan Spooner (PIT)</td><td>15</td><td>57,14%</td></tr>
<tr><td>4</td><td>John Tavares (ARZ)</td><td>7</td><td>56,41%</td></tr>
<tr><td>5</td><td>Mikko Koivu (TOR)</td><td>21</td><td>55,42%</td></tr>
<tr><td>6</td><td>Jordan Staal (LOS)</td><td>20</td><td>55,32%</td></tr>
<tr><td>7</td><td>Steven Stamkos (ARZ)</td><td>7</td><td>55,17%</td></tr>
<tr><td>8</td><td>Travis Zajac (PIT)</td><td>15</td><td>55,10%</td></tr>
<tr><td>9</td><td>Sidney Crosby (MTL)</td><td>11</td><td>54,76%</td></tr>
<tr><td>10</td><td>Josh Bailey (PIT)</td><td>14</td><td>54,45%</td></tr>
<tr><td>11</td><td>Anze Kopitar (LOS)</td><td>20</td><td>54,36%</td></tr>
<tr><td>12</td><td>Vincent Trocheck (LOS)</td><td>20</td><td>54,14%</td></tr>
<tr><td>13</td><td>Cole Cassels (ARZ)</td><td>7</td><td>53,75%</td></tr>
<tr><td>14</td><td>Patrik Berglund (MTL)</td><td>11</td><td>53,66%</td></tr>
<tr><td>15</td><td>Ryan O'Reilly (FLA)</td><td>9</td><td>53,45%</td></tr>
<tr><td>16</td><td>Tyler Bozak (LOS)</td><td>20</td><td>53,42%</td></tr>
<tr><td>17</td><td>Danton Heinen (MTL)</td><td>11</td><td>52,85%</td></tr>
<tr><td>18</td><td>Nick Bjugstad (FLA)</td><td>10</td><td>52,73%</td></tr>
<tr><td>19</td><td>Eric Staal (ARZ)</td><td>7</td><td>52,70%</td></tr>
<tr><td>20</td><td>Mikael Granlund (TOR)</td><td>21</td><td>52,48%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Gabriel Landeskog (WPG)</td><td>25</td><td>15</td></tr>
<tr><td>2</td><td>Auston Matthews (WPG)</td><td>25</td><td>14</td></tr>
<tr><td>3</td><td>Anze Kopitar (LOS)</td><td>20</td><td>13</td></tr>
<tr><td>4</td><td>Jeff Skinner (LOS)</td><td>20</td><td>13</td></tr>
<tr><td>5</td><td>Ryan Graves (WPG)</td><td>25</td><td>13</td></tr>
<tr><td>6</td><td>Sebastian Aho (TOR)</td><td>21</td><td>12</td></tr>
<tr><td>7</td><td>Blake Wheeler (WPG)</td><td>25</td><td>11</td></tr>
<tr><td>8</td><td>Jake Gardiner (WPG)</td><td>25</td><td>11</td></tr>
<tr><td>9</td><td>Jake DeBrusk (PIT)</td><td>15</td><td>10</td></tr>
<tr><td>10</td><td>Josh Bailey (PIT)</td><td>14</td><td>9</td></tr>
<tr><td>11</td><td>Michael Del Zotto (LOS)</td><td>19</td><td>8</td></tr>
<tr><td>12</td><td>Dmitri Kulikov (WPG)</td><td>20</td><td>8</td></tr>
<tr><td>13</td><td>Eric Staal (ARZ)</td><td>7</td><td>7</td></tr>
<tr><td>14</td><td>Magnus Paajarvi (COL)</td><td>14</td><td>7</td></tr>
<tr><td>15</td><td>Mark Pysyk (LOS)</td><td>20</td><td>7</td></tr>
<tr><td>16</td><td>Sean Monahan (COL)</td><td>14</td><td>6</td></tr>
<tr><td>17</td><td>Mike Green (PIT)</td><td>15</td><td>6</td></tr>
<tr><td>18</td><td>Mikko Lehtonen (TOR)</td><td>18</td><td>6</td></tr>
<tr><td>19</td><td>Miles Wood (LOS)</td><td>19</td><td>6</td></tr>
<tr><td>20</td><td>Brent Burns (WPG)</td><td>25</td><td>6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Morgan Rielly (TOR)</td><td>21</td><td>32</td></tr>
<tr><td>2</td><td>Brent Burns (WPG)</td><td>25</td><td>31</td></tr>
<tr><td>3</td><td>Robby Fabbri (COL)</td><td>14</td><td>26</td></tr>
<tr><td>4</td><td>Darnell Nurse (VEG)</td><td>14</td><td>26</td></tr>
<tr><td>5</td><td>Petteri Lindbohm (TOR)</td><td>18</td><td>26</td></tr>
<tr><td>6</td><td>Dmitri Kulikov (WPG)</td><td>20</td><td>26</td></tr>
<tr><td>7</td><td>Gabriel Landeskog (WPG)</td><td>25</td><td>24</td></tr>
<tr><td>8</td><td>Drew Doughty (LOS)</td><td>20</td><td>22</td></tr>
<tr><td>9</td><td>Ryan O'Reilly (FLA)</td><td>9</td><td>21</td></tr>
<tr><td>10</td><td>Slater Koekkoek (MTL)</td><td>11</td><td>20</td></tr>
<tr><td>11</td><td>Erik Johnson (VEG)</td><td>14</td><td>20</td></tr>
<tr><td>12</td><td>Jani Hakanpaa (COL)</td><td>14</td><td>20</td></tr>
<tr><td>13</td><td>Michael Matheson (PIT)</td><td>15</td><td>20</td></tr>
<tr><td>14</td><td>Victor Hedman (WPG)</td><td>25</td><td>20</td></tr>
<tr><td>15</td><td>Alex Pietrangelo (MTL)</td><td>11</td><td>18</td></tr>
<tr><td>16</td><td>Jake Gardiner (WPG)</td><td>25</td><td>18</td></tr>
<tr><td>17</td><td>Mark Scheifele (WPG)</td><td>25</td><td>18</td></tr>
<tr><td>18</td><td>Corey Perry (LOS)</td><td>20</td><td>17</td></tr>
<tr><td>19</td><td>Mark Giordano (PHI)</td><td>7</td><td>16</td></tr>
<tr><td>20</td><td>Alex Ovechkin (MTL)</td><td>11</td><td>16</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Victor Hedman (WPG)</td><td>25</td><td>60</td></tr>
<tr><td>2</td><td>Ville Pokka (TOR)</td><td>21</td><td>39</td></tr>
<tr><td>3</td><td>Anthony DeAngelo (PIT)</td><td>15</td><td>33</td></tr>
<tr><td>4</td><td>Mark Pysyk (LOS)</td><td>20</td><td>32</td></tr>
<tr><td>5</td><td>Calvin de Haan (WPG)</td><td>25</td><td>28</td></tr>
<tr><td>6</td><td>Jonathon Blum (COL)</td><td>14</td><td>27</td></tr>
<tr><td>7</td><td>Mac Weegar (PIT)</td><td>15</td><td>27</td></tr>
<tr><td>8</td><td>Drew Doughty (LOS)</td><td>20</td><td>26</td></tr>
<tr><td>9</td><td>Joel Edmundson (FLA)</td><td>10</td><td>25</td></tr>
<tr><td>10</td><td>Dmitri Kulikov (WPG)</td><td>20</td><td>25</td></tr>
<tr><td>11</td><td>Jake Gardiner (WPG)</td><td>25</td><td>25</td></tr>
<tr><td>12</td><td>Morgan Rielly (TOR)</td><td>21</td><td>23</td></tr>
<tr><td>13</td><td>Yann Sauve (COL)</td><td>14</td><td>22</td></tr>
<tr><td>14</td><td>Tim Erixon (PIT)</td><td>15</td><td>22</td></tr>
<tr><td>15</td><td>Michael Matheson (PIT)</td><td>15</td><td>22</td></tr>
<tr><td>16</td><td>Vyacheslav Voynov (COL)</td><td>14</td><td>21</td></tr>
<tr><td>17</td><td>Ryan Graves (WPG)</td><td>25</td><td>21</td></tr>
<tr><td>18</td><td>Derek Forbort (LOS)</td><td>19</td><td>20</td></tr>
<tr><td>19</td><td>Alex Pietrangelo (MTL)</td><td>11</td><td>19</td></tr>
<tr><td>20</td><td>Petteri Lindbohm (TOR)</td><td>18</td><td>19</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Jordan Subban (LOS)</td><td>20</td><td>5-12-17</td></tr>
<tr><td>2</td><td>Ryan Graves (WPG)</td><td>25</td><td>2-11-13</td></tr>
<tr><td>3</td><td>Jake DeBrusk (PIT)</td><td>15</td><td>6-6-12</td></tr>
<tr><td>4</td><td>Miles Wood (LOS)</td><td>19</td><td>6-4-10</td></tr>
<tr><td>5</td><td>Anthony DeAngelo (PIT)</td><td>15</td><td>0-8-8</td></tr>
<tr><td>6</td><td>Pavel Zacha (FLA)</td><td>10</td><td>0-5-5</td></tr>
<tr><td>7</td><td>Dominik Kubalik (MTL)</td><td>11</td><td>4-0-4</td></tr>
<tr><td>8</td><td>Oskar Lindblom (ARZ)</td><td>6</td><td>2-2-4</td></tr>
<tr><td>9</td><td>Pierre Engvall (BUF)</td><td>7</td><td>1-3-4</td></tr>
<tr><td>10</td><td>Luke Kunin (BUF)</td><td>7</td><td>1-3-4</td></tr>
<tr><td>11</td><td>Karson Kuhlman (NSH)</td><td>7</td><td>1-2-3</td></tr>
<tr><td>12</td><td>Rasmus Sandin (FLA)</td><td>10</td><td>0-3-3</td></tr>
<tr><td>13</td><td>Victor Olofsson (PIT)</td><td>15</td><td>0-3-3</td></tr>
<tr><td>14</td><td>Drake Batherson (NSH)</td><td>7</td><td>2-0-2</td></tr>
<tr><td>15</td><td>Noel Acciari (ARZ)</td><td>7</td><td>2-0-2</td></tr>
<tr><td>16</td><td>Valentin Zykov (STL)</td><td>7</td><td>2-0-2</td></tr>
<tr><td>17</td><td>Trevor Murphy (BUF)</td><td>7</td><td>1-1-2</td></tr>
<tr><td>18</td><td>Alexander Delnov (PIT)</td><td>14</td><td>1-1-2</td></tr>
<tr><td>19</td><td>Andreas Borgman (STL)</td><td>7</td><td>0-2-2</td></tr>
<tr><td>20</td><td>Nico Sturm (PIT)</td><td>4</td><td>1-0-1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Gabriel Landeskog (WPG)</td><td>25</td><td>72</td></tr>
<tr><td>2</td><td>Brent Burns (WPG)</td><td>25</td><td>67</td></tr>
<tr><td>3</td><td>Victor Hedman (WPG)</td><td>25</td><td>62</td></tr>
<tr><td>4</td><td>Ryan Graves (WPG)</td><td>25</td><td>59</td></tr>
<tr><td>5</td><td>Morgan Rielly (TOR)</td><td>21</td><td>52</td></tr>
<tr><td>6</td><td>Drew Doughty (LOS)</td><td>20</td><td>50</td></tr>
<tr><td>7</td><td>Mark Scheifele (WPG)</td><td>25</td><td>47</td></tr>
<tr><td>8</td><td>Emerson Etem (TOR)</td><td>21</td><td>46</td></tr>
<tr><td>9</td><td>Miles Wood (LOS)</td><td>19</td><td>42</td></tr>
<tr><td>10</td><td>Corey Perry (LOS)</td><td>20</td><td>42</td></tr>
<tr><td>11</td><td>Michael Matheson (PIT)</td><td>15</td><td>40</td></tr>
<tr><td>12</td><td>Jani Hakanpaa (COL)</td><td>14</td><td>37</td></tr>
<tr><td>13</td><td>Jordan Staal (LOS)</td><td>20</td><td>37</td></tr>
<tr><td>14</td><td>Mike Richards (TOR)</td><td>21</td><td>37</td></tr>
<tr><td>15</td><td>Dmitri Kulikov (WPG)</td><td>20</td><td>36</td></tr>
<tr><td>16</td><td>Mark Pysyk (LOS)</td><td>20</td><td>36</td></tr>
<tr><td>17</td><td>Saku Maenalanen (TOR)</td><td>21</td><td>34</td></tr>
<tr><td>18</td><td>Darnell Nurse (VEG)</td><td>14</td><td>32</td></tr>
<tr><td>19</td><td>Darren Dietz (PIT)</td><td>15</td><td>32</td></tr>
<tr><td>20</td><td>Petteri Lindbohm (TOR)</td><td>18</td><td>31</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (LOS)</td><td>20</td><td>5</td></tr>
<tr><td>2</td><td>Jeff Skinner (LOS)</td><td>20</td><td>5</td></tr>
<tr><td>3</td><td>Sebastian Aho (TOR)</td><td>21</td><td>5</td></tr>
<tr><td>4</td><td>Kris Letang (VEG)</td><td>14</td><td>4</td></tr>
<tr><td>5</td><td>Robby Fabbri (COL)</td><td>14</td><td>4</td></tr>
<tr><td>6</td><td>Darren Dietz (PIT)</td><td>15</td><td>4</td></tr>
<tr><td>7</td><td>Cole Ully (WPG)</td><td>25</td><td>4</td></tr>
<tr><td>8</td><td>Scott Harrington (FLA)</td><td>10</td><td>3</td></tr>
<tr><td>9</td><td>Filip Forsberg (MTL)</td><td>11</td><td>3</td></tr>
<tr><td>10</td><td>Stefan Elliott (TOR)</td><td>21</td><td>3</td></tr>
<tr><td>11</td><td>Emerson Etem (TOR)</td><td>21</td><td>3</td></tr>
<tr><td>12</td><td>Ville Pokka (TOR)</td><td>21</td><td>3</td></tr>
<tr><td>13</td><td>Alexander Burmistrov (WPG)</td><td>25</td><td>3</td></tr>
<tr><td>14</td><td>Victor Hedman (WPG)</td><td>25</td><td>3</td></tr>
<tr><td>15</td><td>Gabriel Landeskog (WPG)</td><td>25</td><td>3</td></tr>
<tr><td>16</td><td>Dylan Olsen (BUF)</td><td>4</td><td>2</td></tr>
<tr><td>17</td><td>Matt Duchene (CGY)</td><td>5</td><td>2</td></tr>
<tr><td>18</td><td>Charlie McAvoy (BOS)</td><td>5</td><td>2</td></tr>
<tr><td>19</td><td>Alex Galchenyuk (CGY)</td><td>5</td><td>2</td></tr>
<tr><td>20</td><td>Zach Bogosian (ARZ)</td><td>7</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Wayne Simmonds (ARZ)</td><td>6</td><td>1</td></tr>
<tr><td>2</td><td>Jakub Vrana (MTL)</td><td>11</td><td>1</td></tr>
<tr><td>3</td><td>Brent Burns (WPG)</td><td>25</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Mikael Granlund (TOR)</td><td>21</td><td>4</td></tr>
<tr><td>2</td><td>Mike Green (PIT)</td><td>15</td><td>3</td></tr>
<tr><td>3</td><td>Brent Burns (WPG)</td><td>25</td><td>3</td></tr>
<tr><td>4</td><td>Ryan Nugent-Hopkins (PHI)</td><td>7</td><td>2</td></tr>
<tr><td>5</td><td>Ryan O'Reilly (FLA)</td><td>9</td><td>2</td></tr>
<tr><td>6</td><td>Dominik Kubalik (MTL)</td><td>11</td><td>2</td></tr>
<tr><td>7</td><td>Colin White (PIT)</td><td>13</td><td>2</td></tr>
<tr><td>8</td><td>Colin Wilson (COL)</td><td>14</td><td>2</td></tr>
<tr><td>9</td><td>Kris Letang (VEG)</td><td>14</td><td>2</td></tr>
<tr><td>10</td><td>Jake DeBrusk (PIT)</td><td>15</td><td>2</td></tr>
<tr><td>11</td><td>Miles Wood (LOS)</td><td>19</td><td>2</td></tr>
<tr><td>12</td><td>Jordan Staal (LOS)</td><td>20</td><td>2</td></tr>
<tr><td>13</td><td>Sebastian Aho (TOR)</td><td>21</td><td>2</td></tr>
<tr><td>14</td><td>Emerson Etem (TOR)</td><td>21</td><td>2</td></tr>
<tr><td>15</td><td>Saku Maenalanen (TOR)</td><td>21</td><td>2</td></tr>
<tr><td>16</td><td>Alexander Burmistrov (WPG)</td><td>25</td><td>2</td></tr>
<tr><td>17</td><td>Blake Wheeler (WPG)</td><td>25</td><td>2</td></tr>
<tr><td>18</td><td>Gabriel Landeskog (WPG)</td><td>25</td><td>2</td></tr>
<tr><td>19</td><td>Anders Lee (WPG)</td><td>25</td><td>2</td></tr>
<tr><td>20</td><td>Joachim Nermark (COL)</td><td>4</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Sebastian Aho (TOR)</td><td>21</td><td>4</td></tr>
<tr><td>2</td><td>Auston Matthews (WPG)</td><td>25</td><td>2</td></tr>
<tr><td>3</td><td>Ryan Murray (PHI)</td><td>1</td><td>1</td></tr>
<tr><td>4</td><td>Dylan Olsen (BUF)</td><td>4</td><td>1</td></tr>
<tr><td>5</td><td>Bobby Ryan (BOS)</td><td>5</td><td>1</td></tr>
<tr><td>6</td><td>Alex Galchenyuk (CGY)</td><td>5</td><td>1</td></tr>
<tr><td>7</td><td>Nikita Nesterov (CLB)</td><td>5</td><td>1</td></tr>
<tr><td>8</td><td>Tyler Motte (NSH)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>Devante Smith-Pelly (STL)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Tanner Pearson (STL)</td><td>7</td><td>1</td></tr>
<tr><td>11</td><td>Ryan O'Reilly (FLA)</td><td>9</td><td>1</td></tr>
<tr><td>12</td><td>Jan Rutta (MTL)</td><td>11</td><td>1</td></tr>
<tr><td>13</td><td>Patric Hornqvist (VEG)</td><td>14</td><td>1</td></tr>
<tr><td>14</td><td>Patrick Kane (VEG)</td><td>14</td><td>1</td></tr>
<tr><td>15</td><td>Yann Sauve (COL)</td><td>14</td><td>1</td></tr>
<tr><td>16</td><td>Adam Lowry (PIT)</td><td>14</td><td>1</td></tr>
<tr><td>17</td><td>Mika Zibanejad (VEG)</td><td>14</td><td>1</td></tr>
<tr><td>18</td><td>Robby Fabbri (COL)</td><td>14</td><td>1</td></tr>
<tr><td>19</td><td>Darren Dietz (PIT)</td><td>15</td><td>1</td></tr>
<tr><td>20</td><td>Andre Burakovsky (PIT)</td><td>15</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Logan Shaw (CLB)</td><td>5</td><td>1</td></tr>
<tr><td>2</td><td>John Klingberg (STL)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Saku Maenalanen (TOR)</td><td>21</td><td>1</td></tr>
<tr><td>4</td><td>Alexander Burmistrov (WPG)</td><td>25</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Victor Hedman (WPG)</td><td>25</td><td>626</td></tr>
<tr><td>2</td><td>Morgan Rielly (TOR)</td><td>21</td><td>532</td></tr>
<tr><td>3</td><td>Gabriel Landeskog (WPG)</td><td>25</td><td>530</td></tr>
<tr><td>4</td><td>Jake Gardiner (WPG)</td><td>25</td><td>506</td></tr>
<tr><td>5</td><td>Auston Matthews (WPG)</td><td>25</td><td>485</td></tr>
<tr><td>6</td><td>Calvin de Haan (WPG)</td><td>25</td><td>485</td></tr>
<tr><td>7</td><td>Tobias Enstrom (TOR)</td><td>21</td><td>483</td></tr>
<tr><td>8</td><td>Mikael Granlund (TOR)</td><td>21</td><td>473</td></tr>
<tr><td>9</td><td>Ville Pokka (TOR)</td><td>21</td><td>470</td></tr>
<tr><td>10</td><td>Alexander Burmistrov (WPG)</td><td>25</td><td>467</td></tr>
<tr><td>11</td><td>Brent Burns (WPG)</td><td>25</td><td>461</td></tr>
<tr><td>12</td><td>Drew Doughty (LOS)</td><td>20</td><td>461</td></tr>
<tr><td>13</td><td>Mark Pysyk (LOS)</td><td>20</td><td>453</td></tr>
<tr><td>14</td><td>Ryan Graves (WPG)</td><td>25</td><td>447</td></tr>
<tr><td>15</td><td>Anze Kopitar (LOS)</td><td>20</td><td>441</td></tr>
<tr><td>16</td><td>Emerson Etem (TOR)</td><td>21</td><td>441</td></tr>
<tr><td>17</td><td>Mark Scheifele (WPG)</td><td>25</td><td>433</td></tr>
<tr><td>18</td><td>Anders Lee (WPG)</td><td>25</td><td>432</td></tr>
<tr><td>19</td><td>Stefan Elliott (TOR)</td><td>21</td><td>424</td></tr>
<tr><td>20</td><td>Mikko Rantanen (TOR)</td><td>19</td><td>421</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Mikael Granlund (TOR)</td><td>21</td><td>2</td></tr>
<tr><td>2</td><td>Alexander Burmistrov (WPG)</td><td>25</td><td>2</td></tr>
<tr><td>3</td><td>Hampus Lindholm (ARZ)</td><td>7</td><td>1</td></tr>
<tr><td>4</td><td>Oliver Bjorkstrand (NSH)</td><td>7</td><td>1</td></tr>
<tr><td>5</td><td>Robby Fabbri (COL)</td><td>14</td><td>1</td></tr>
<tr><td>6</td><td>Jake DeBrusk (PIT)</td><td>15</td><td>1</td></tr>
<tr><td>7</td><td>Anze Kopitar (LOS)</td><td>20</td><td>1</td></tr>
<tr><td>8</td><td>Jeff Skinner (LOS)</td><td>20</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>T.J. Oshie (ARZ)</td><td>7</td><td>2</td></tr>
<tr><td>2</td><td>Filip Forsberg (MTL)</td><td>11</td><td>2</td></tr>
<tr><td>3</td><td>William Karlsson (VEG)</td><td>14</td><td>2</td></tr>
<tr><td>4</td><td>Sebastian Aho (TOR)</td><td>21</td><td>2</td></tr>
<tr><td>5</td><td>Mikael Granlund (TOR)</td><td>21</td><td>2</td></tr>
<tr><td>6</td><td>Oscar Fantenberg (WPG)</td><td>4</td><td>1</td></tr>
<tr><td>7</td><td>Brad Marchand (BOS)</td><td>5</td><td>1</td></tr>
<tr><td>8</td><td>Brent Seabrook (CLB)</td><td>5</td><td>1</td></tr>
<tr><td>9</td><td>Matt Duchene (CGY)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Teuvo Teravainen (CGY)</td><td>5</td><td>1</td></tr>
<tr><td>11</td><td>Nathan MacKinnon (CLB)</td><td>5</td><td>1</td></tr>
<tr><td>12</td><td>Nico Hischier (BOS)</td><td>5</td><td>1</td></tr>
<tr><td>13</td><td>Claude Giroux (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>14</td><td>Pierre-Luc Dubois (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>15</td><td>Joakim Nordstrom (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>16</td><td>Jordan Eberle (BUF)</td><td>7</td><td>1</td></tr>
<tr><td>17</td><td>Nazem Kadri (STL)</td><td>7</td><td>1</td></tr>
<tr><td>18</td><td>Charlie Coyle (BUF)</td><td>7</td><td>1</td></tr>
<tr><td>19</td><td>Sam Bennett (ARZ)</td><td>7</td><td>1</td></tr>
<tr><td>20</td><td>David Pastrnak (FLA)</td><td>10</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Drew Doughty (LOS)</td><td>20</td><td>9</td></tr>
<tr><td>2</td><td>Sean Monahan (COL)</td><td>14</td><td>8</td></tr>
<tr><td>3</td><td>Robby Fabbri (COL)</td><td>14</td><td>6</td></tr>
<tr><td>4</td><td>Olli Maatta (CGY)</td><td>5</td><td>5</td></tr>
<tr><td>5</td><td>Ryan Suter (ARZ)</td><td>7</td><td>5</td></tr>
<tr><td>6</td><td>Filip Forsberg (MTL)</td><td>11</td><td>5</td></tr>
<tr><td>7</td><td>Travis Hamonic (CGY)</td><td>5</td><td>4</td></tr>
<tr><td>8</td><td>Sidney Crosby (MTL)</td><td>11</td><td>4</td></tr>
<tr><td>9</td><td>Julius Honka (MTL)</td><td>11</td><td>4</td></tr>
<tr><td>10</td><td>Dylan Olsen (BUF)</td><td>4</td><td>3</td></tr>
<tr><td>11</td><td>Tyler Myers (BUF)</td><td>7</td><td>3</td></tr>
<tr><td>12</td><td>Mikael Granlund (TOR)</td><td>21</td><td>3</td></tr>
<tr><td>13</td><td>Andreas Englund (COL)</td><td>3</td><td>2</td></tr>
<tr><td>14</td><td>Oscar Fantenberg (WPG)</td><td>4</td><td>2</td></tr>
<tr><td>15</td><td>Brad Marchand (BOS)</td><td>5</td><td>2</td></tr>
<tr><td>16</td><td>Ondrej Kase (BOS)</td><td>5</td><td>2</td></tr>
<tr><td>17</td><td>Teuvo Teravainen (CGY)</td><td>5</td><td>2</td></tr>
<tr><td>18</td><td>Damon Severson (CGY)</td><td>5</td><td>2</td></tr>
<tr><td>19</td><td>T.J. Oshie (ARZ)</td><td>7</td><td>2</td></tr>
<tr><td>20</td><td>Adam Larsson (PHI)</td><td>7</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (LOS)</td><td>20</td><td>63</td></tr>
<tr><td>2</td><td>Mikael Granlund (TOR)</td><td>21</td><td>58</td></tr>
<tr><td>3</td><td>Auston Matthews (WPG)</td><td>25</td><td>56</td></tr>
<tr><td>4</td><td>Mike Richards (TOR)</td><td>21</td><td>47</td></tr>
<tr><td>5</td><td>Jordan Staal (LOS)</td><td>20</td><td>45</td></tr>
<tr><td>6</td><td>Adam Henrique (TOR)</td><td>21</td><td>41</td></tr>
<tr><td>7</td><td>Sean Monahan (COL)</td><td>14</td><td>36</td></tr>
<tr><td>8</td><td>Victor Hedman (WPG)</td><td>25</td><td>36</td></tr>
<tr><td>9</td><td>Alexander Burmistrov (WPG)</td><td>25</td><td>35</td></tr>
<tr><td>10</td><td>Alexander Kerfoot (COL)</td><td>14</td><td>34</td></tr>
<tr><td>11</td><td>Mika Zibanejad (VEG)</td><td>14</td><td>33</td></tr>
<tr><td>12</td><td>Drew Doughty (LOS)</td><td>20</td><td>32</td></tr>
<tr><td>13</td><td>Gabriel Landeskog (WPG)</td><td>25</td><td>31</td></tr>
<tr><td>14</td><td>Mark Scheifele (WPG)</td><td>25</td><td>31</td></tr>
<tr><td>15</td><td>William Karlsson (VEG)</td><td>14</td><td>30</td></tr>
<tr><td>16</td><td>Morgan Rielly (TOR)</td><td>21</td><td>30</td></tr>
<tr><td>17</td><td>Jake Gardiner (WPG)</td><td>25</td><td>30</td></tr>
<tr><td>18</td><td>Josh Bailey (PIT)</td><td>14</td><td>28</td></tr>
<tr><td>19</td><td>Mikko Rantanen (TOR)</td><td>19</td><td>28</td></tr>
<tr><td>20</td><td>Ville Pokka (TOR)</td><td>21</td><td>28</td></tr>
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
<tr><td>1</td><td>Eric Gelinas (BOS)</td><td>5</td><td>1</td></tr>
<tr><td>2</td><td>Ryan O'Reilly (FLA)</td><td>9</td><td>1</td></tr>
<tr><td>3</td><td>Corey Perry (LOS)</td><td>20</td><td>1</td></tr>
<tr><td>4</td><td>Brent Burns (WPG)</td><td>25</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Sergei Bobrovsky (FLA)</td><td>9</td><td>0,930</td></tr>
<tr><td>2</td><td>Carey Price (WPG)</td><td>25</td><td>0,918</td></tr>
<tr><td>3</td><td>Steve Mason (TOR)</td><td>21</td><td>0,917</td></tr>
<tr><td>4</td><td>Cam Ward (PIT)</td><td>15</td><td>0,916</td></tr>
<tr><td>5</td><td>Kevin Poulin (STL)</td><td>7</td><td>0,906</td></tr>
<tr><td>6</td><td>Martin Jones (COL)</td><td>10</td><td>0,901</td></tr>
<tr><td>7</td><td>Michal Neuvirth (LOS)</td><td>18</td><td>0,894</td></tr>
<tr><td>8</td><td>Matt Murray (VEG)</td><td>14</td><td>0,883</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Sergei Bobrovsky (FLA)</td><td>9</td><td>2,31</td></tr>
<tr><td>2</td><td>Cam Ward (PIT)</td><td>15</td><td>2,33</td></tr>
<tr><td>3</td><td>Steve Mason (TOR)</td><td>21</td><td>2,48</td></tr>
<tr><td>4</td><td>Carey Price (WPG)</td><td>25</td><td>2,76</td></tr>
<tr><td>5</td><td>Kevin Poulin (STL)</td><td>7</td><td>2,98</td></tr>
<tr><td>6</td><td>Michal Neuvirth (LOS)</td><td>18</td><td>3,12</td></tr>
<tr><td>7</td><td>Martin Jones (COL)</td><td>10</td><td>3,37</td></tr>
<tr><td>8</td><td>Matt Murray (VEG)</td><td>14</td><td>3,87</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Carey Price (WPG)</td><td>25</td><td>1 519</td></tr>
<tr><td>2</td><td>Steve Mason (TOR)</td><td>21</td><td>1 260</td></tr>
<tr><td>3</td><td>Cam Ward (PIT)</td><td>15</td><td>1 003</td></tr>
<tr><td>4</td><td>Michal Neuvirth (LOS)</td><td>18</td><td>924</td></tr>
<tr><td>5</td><td>Matt Murray (VEG)</td><td>14</td><td>697</td></tr>
<tr><td>6</td><td>Sergei Bobrovsky (FLA)</td><td>9</td><td>572</td></tr>
<tr><td>7</td><td>Martin Jones (COL)</td><td>10</td><td>481</td></tr>
<tr><td>8</td><td>Kevin Poulin (STL)</td><td>7</td><td>423</td></tr>
<tr><td>9</td><td>Carter Hart (NSH)</td><td>7</td><td>398</td></tr>
<tr><td>10</td><td>James Reimer (BUF)</td><td>7</td><td>384</td></tr>
<tr><td>11</td><td>Andrew Hammond (COL)</td><td>7</td><td>374</td></tr>
<tr><td>12</td><td>Jake Allen (MTL)</td><td>6</td><td>347</td></tr>
<tr><td>13</td><td>Ondrej Pavelec (MTL)</td><td>6</td><td>347</td></tr>
<tr><td>14</td><td>Tuukka Rask (PHI)</td><td>5</td><td>304</td></tr>
<tr><td>15</td><td>Igor Shestyorkin (BOS)</td><td>5</td><td>300</td></tr>
<tr><td>16</td><td>Philipp Grubauer (LOS)</td><td>7</td><td>289</td></tr>
<tr><td>17</td><td>Braden Holtby (ARZ)</td><td>5</td><td>273</td></tr>
<tr><td>18</td><td>Jonathan Quick (CGY)</td><td>5</td><td>265</td></tr>
<tr><td>19</td><td>Henrik Lundqvist (CLB)</td><td>4</td><td>240</td></tr>
<tr><td>20</td><td>David Rittich (PHI)</td><td>2</td><td>185</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Carey Price (WPG)</td><td>25</td><td>854</td></tr>
<tr><td>2</td><td>Steve Mason (TOR)</td><td>21</td><td>628</td></tr>
<tr><td>3</td><td>Cam Ward (PIT)</td><td>15</td><td>464</td></tr>
<tr><td>4</td><td>Michal Neuvirth (LOS)</td><td>18</td><td>454</td></tr>
<tr><td>5</td><td>Matt Murray (VEG)</td><td>14</td><td>385</td></tr>
<tr><td>6</td><td>Sergei Bobrovsky (FLA)</td><td>9</td><td>316</td></tr>
<tr><td>7</td><td>Martin Jones (COL)</td><td>10</td><td>273</td></tr>
<tr><td>8</td><td>Kevin Poulin (STL)</td><td>7</td><td>224</td></tr>
<tr><td>9</td><td>Carter Hart (NSH)</td><td>7</td><td>208</td></tr>
<tr><td>10</td><td>Jake Allen (MTL)</td><td>6</td><td>202</td></tr>
<tr><td>11</td><td>Andrew Hammond (COL)</td><td>7</td><td>201</td></tr>
<tr><td>12</td><td>James Reimer (BUF)</td><td>7</td><td>200</td></tr>
<tr><td>13</td><td>Ondrej Pavelec (MTL)</td><td>6</td><td>179</td></tr>
<tr><td>14</td><td>Igor Shestyorkin (BOS)</td><td>5</td><td>162</td></tr>
<tr><td>15</td><td>Tuukka Rask (PHI)</td><td>5</td><td>149</td></tr>
<tr><td>16</td><td>Philipp Grubauer (LOS)</td><td>7</td><td>141</td></tr>
<tr><td>17</td><td>Henrik Lundqvist (CLB)</td><td>4</td><td>140</td></tr>
<tr><td>18</td><td>Braden Holtby (ARZ)</td><td>5</td><td>138</td></tr>
<tr><td>19</td><td>Jonathan Quick (CGY)</td><td>5</td><td>130</td></tr>
<tr><td>20</td><td>David Rittich (PHI)</td><td>2</td><td>94</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Steve Mason (TOR)</td><td>21</td><td>2</td></tr>
<tr><td>2</td><td>Michal Neuvirth (LOS)</td><td>18</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Steve Mason (TOR)</td><td>21</td><td>16</td></tr>
<tr><td>2</td><td>Carey Price (WPG)</td><td>25</td><td>15</td></tr>
<tr><td>3</td><td>Cam Ward (PIT)</td><td>15</td><td>8</td></tr>
<tr><td>4</td><td>Matt Murray (VEG)</td><td>14</td><td>7</td></tr>
<tr><td>5</td><td>Michal Neuvirth (LOS)</td><td>18</td><td>7</td></tr>
<tr><td>6</td><td>Sergei Bobrovsky (FLA)</td><td>9</td><td>5</td></tr>
<tr><td>7</td><td>Martin Jones (COL)</td><td>10</td><td>4</td></tr>
<tr><td>8</td><td>James Reimer (BUF)</td><td>7</td><td>3</td></tr>
<tr><td>9</td><td>Kevin Poulin (STL)</td><td>7</td><td>3</td></tr>
<tr><td>10</td><td>Philipp Grubauer (LOS)</td><td>7</td><td>3</td></tr>
<tr><td>11</td><td>Andrew Hammond (COL)</td><td>7</td><td>3</td></tr>
<tr><td>12</td><td>Carter Hart (NSH)</td><td>7</td><td>3</td></tr>
<tr><td>13</td><td>David Rittich (PHI)</td><td>2</td><td>2</td></tr>
<tr><td>14</td><td>Petr Mrazek (ARZ)</td><td>3</td><td>2</td></tr>
<tr><td>15</td><td>Ondrej Pavelec (MTL)</td><td>6</td><td>2</td></tr>
<tr><td>16</td><td>Jake Allen (MTL)</td><td>6</td><td>2</td></tr>
<tr><td>17</td><td>Henrik Lundqvist (CLB)</td><td>4</td><td>1</td></tr>
<tr><td>18</td><td>Braden Holtby (ARZ)</td><td>5</td><td>1</td></tr>
<tr><td>19</td><td>Igor Shestyorkin (BOS)</td><td>5</td><td>1</td></tr>
<tr><td>20</td><td>Jonathan Quick (CGY)</td><td>5</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Michal Neuvirth (LOS)</td><td>18</td><td>8</td></tr>
<tr><td>2</td><td>Carey Price (WPG)</td><td>25</td><td>8</td></tr>
<tr><td>3</td><td>Matt Murray (VEG)</td><td>14</td><td>5</td></tr>
<tr><td>4</td><td>Cam Ward (PIT)</td><td>15</td><td>5</td></tr>
<tr><td>5</td><td>Steve Mason (TOR)</td><td>21</td><td>5</td></tr>
<tr><td>6</td><td>Braden Holtby (ARZ)</td><td>5</td><td>4</td></tr>
<tr><td>7</td><td>Kevin Poulin (STL)</td><td>7</td><td>4</td></tr>
<tr><td>8</td><td>Henrik Lundqvist (CLB)</td><td>4</td><td>3</td></tr>
<tr><td>9</td><td>Igor Shestyorkin (BOS)</td><td>5</td><td>3</td></tr>
<tr><td>10</td><td>Tuukka Rask (PHI)</td><td>5</td><td>3</td></tr>
<tr><td>11</td><td>Ondrej Pavelec (MTL)</td><td>6</td><td>3</td></tr>
<tr><td>12</td><td>Carter Hart (NSH)</td><td>7</td><td>3</td></tr>
<tr><td>13</td><td>Martin Jones (COL)</td><td>10</td><td>3</td></tr>
<tr><td>14</td><td>Jonathan Quick (CGY)</td><td>5</td><td>2</td></tr>
<tr><td>15</td><td>Jake Allen (MTL)</td><td>6</td><td>2</td></tr>
<tr><td>16</td><td>Andrew Hammond (COL)</td><td>7</td><td>2</td></tr>
<tr><td>17</td><td>Corey Crawford (CGY)</td><td>1</td><td>1</td></tr>
<tr><td>18</td><td>Jared Coreau (BUF)</td><td>1</td><td>1</td></tr>
<tr><td>19</td><td>Frederik Andersen (FLA)</td><td>1</td><td>1</td></tr>
<tr><td>20</td><td>Tristan Jarry (NSH)</td><td>1</td><td>1</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
