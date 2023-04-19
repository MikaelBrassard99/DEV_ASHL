<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Individual Leaders</title>
<script src="ASHL9-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - ASHL9-STHS.db - ASHL9-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL9-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
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
<b>Minimum Games Played: 7</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Matt Duchene (PIT)</td><td>23</td><td>16</td></tr>
<tr><td>2</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>15</td></tr>
<tr><td>3</td><td>Artemi Panarin (STL)</td><td>20</td><td>10</td></tr>
<tr><td>4</td><td>Evgeny Kuznetsov (STL)</td><td>22</td><td>10</td></tr>
<tr><td>5</td><td>Patric Hornqvist (PIT)</td><td>23</td><td>9</td></tr>
<tr><td>6</td><td>Tomas Plekanec (STL)</td><td>22</td><td>8</td></tr>
<tr><td>7</td><td>Tyler Bozak (PIT)</td><td>23</td><td>8</td></tr>
<tr><td>8</td><td>David Pastrnak (TBL)</td><td>7</td><td>7</td></tr>
<tr><td>9</td><td>Patrick Kane (VEG)</td><td>16</td><td>7</td></tr>
<tr><td>10</td><td>Justin Schultz (VEG)</td><td>16</td><td>7</td></tr>
<tr><td>11</td><td>Colin Wilson (QUE)</td><td>19</td><td>7</td></tr>
<tr><td>12</td><td>James Neal (STL)</td><td>22</td><td>7</td></tr>
<tr><td>13</td><td>Dylan Larkin (FLA)</td><td>9</td><td>6</td></tr>
<tr><td>14</td><td>Nikolaj Ehlers (VAN)</td><td>11</td><td>6</td></tr>
<tr><td>15</td><td>Patrice Bergeron (VEG)</td><td>16</td><td>6</td></tr>
<tr><td>16</td><td>Morgan Klimchuk (VEG)</td><td>16</td><td>6</td></tr>
<tr><td>17</td><td>Alexander Burmistrov (PIT)</td><td>23</td><td>6</td></tr>
<tr><td>18</td><td>Bobby Ryan (PIT)</td><td>23</td><td>6</td></tr>
<tr><td>19</td><td>Brayden Point (NYR)</td><td>10</td><td>5</td></tr>
<tr><td>20</td><td>Jakub Voracek (VAN)</td><td>11</td><td>5</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>21</td></tr>
<tr><td>2</td><td>Brandon Sutter (PIT)</td><td>23</td><td>15</td></tr>
<tr><td>3</td><td>Tim Erixon (PIT)</td><td>23</td><td>14</td></tr>
<tr><td>4</td><td>Kristopher Letang (VEG)</td><td>16</td><td>13</td></tr>
<tr><td>5</td><td>Brady Skjei (STL)</td><td>21</td><td>13</td></tr>
<tr><td>6</td><td>Marc-Edouard Vlasic (STL)</td><td>22</td><td>13</td></tr>
<tr><td>7</td><td>Alexander Burmistrov (PIT)</td><td>23</td><td>13</td></tr>
<tr><td>8</td><td>Erik Johnson (PIT)</td><td>23</td><td>12</td></tr>
<tr><td>9</td><td>Mattias Ekholm (VEG)</td><td>16</td><td>11</td></tr>
<tr><td>10</td><td>William Karlsson (VEG)</td><td>16</td><td>11</td></tr>
<tr><td>11</td><td>Jamie Oleksiak (STL)</td><td>19</td><td>11</td></tr>
<tr><td>12</td><td>Connor Murphy (QUE)</td><td>19</td><td>11</td></tr>
<tr><td>13</td><td>Matt Duchene (PIT)</td><td>23</td><td>11</td></tr>
<tr><td>14</td><td>Artemi Panarin (STL)</td><td>20</td><td>10</td></tr>
<tr><td>15</td><td>Ian Cole (STL)</td><td>22</td><td>10</td></tr>
<tr><td>16</td><td>Mark Scheifele (STL)</td><td>22</td><td>10</td></tr>
<tr><td>17</td><td>Kris Russell (VEG)</td><td>16</td><td>9</td></tr>
<tr><td>18</td><td>Patrice Bergeron (VEG)</td><td>16</td><td>9</td></tr>
<tr><td>19</td><td>Patrick Kane (VEG)</td><td>16</td><td>9</td></tr>
<tr><td>20</td><td>Justin Schultz (VEG)</td><td>16</td><td>9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>129</td></tr>
<tr><td>2</td><td>Matt Duchene (PIT)</td><td>23</td><td>96</td></tr>
<tr><td>3</td><td>Alexander Burmistrov (PIT)</td><td>23</td><td>92</td></tr>
<tr><td>4</td><td>Brandon Sutter (PIT)</td><td>23</td><td>92</td></tr>
<tr><td>5</td><td>Patric Hornqvist (PIT)</td><td>23</td><td>79</td></tr>
<tr><td>6</td><td>Bobby Ryan (PIT)</td><td>23</td><td>76</td></tr>
<tr><td>7</td><td>Evgeny Kuznetsov (STL)</td><td>22</td><td>75</td></tr>
<tr><td>8</td><td>Mark Scheifele (STL)</td><td>22</td><td>71</td></tr>
<tr><td>9</td><td>Jake Guentzel (QUE)</td><td>19</td><td>66</td></tr>
<tr><td>10</td><td>Kris Versteeg (PIT)</td><td>23</td><td>63</td></tr>
<tr><td>11</td><td>Colin Wilson (QUE)</td><td>19</td><td>60</td></tr>
<tr><td>12</td><td>Artemi Panarin (STL)</td><td>20</td><td>60</td></tr>
<tr><td>13</td><td>Connor McDavid (VAN)</td><td>11</td><td>59</td></tr>
<tr><td>14</td><td>Patrick Kane (VEG)</td><td>16</td><td>58</td></tr>
<tr><td>15</td><td>Nazem Kadri (STL)</td><td>22</td><td>57</td></tr>
<tr><td>16</td><td>Erik Johnson (PIT)</td><td>23</td><td>57</td></tr>
<tr><td>17</td><td>Brayden Point (NYR)</td><td>10</td><td>54</td></tr>
<tr><td>18</td><td>Tim Erixon (PIT)</td><td>23</td><td>54</td></tr>
<tr><td>19</td><td>Ryan Getzlaf (QUE)</td><td>19</td><td>53</td></tr>
<tr><td>20</td><td>James Neal (STL)</td><td>22</td><td>53</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Mark Giordano (PHI)</td><td>7</td><td>30,00%</td></tr>
<tr><td>2</td><td>Dylan Larkin (FLA)</td><td>9</td><td>26,09%</td></tr>
<tr><td>3</td><td>Brendan Ranford (PHI)</td><td>7</td><td>25,00%</td></tr>
<tr><td>4</td><td>Justin Schultz (VEG)</td><td>16</td><td>24,14%</td></tr>
<tr><td>5</td><td>Josh Anderson (FLA)</td><td>9</td><td>23,53%</td></tr>
<tr><td>6</td><td>Boone Jenner (TBL)</td><td>7</td><td>23,08%</td></tr>
<tr><td>7</td><td>Tomas Plekanec (STL)</td><td>22</td><td>22,86%</td></tr>
<tr><td>8</td><td>Charles Hudon (VEG)</td><td>15</td><td>22,73%</td></tr>
<tr><td>9</td><td>Tom Kuhnhackl (QUE)</td><td>14</td><td>20,00%</td></tr>
<tr><td>10</td><td>Tyler Bozak (PIT)</td><td>23</td><td>20,00%</td></tr>
<tr><td>11</td><td>Lukas Sedlak (QUE)</td><td>19</td><td>19,23%</td></tr>
<tr><td>12</td><td>Ryan Nugent-Hopkins (PHI)</td><td>7</td><td>18,75%</td></tr>
<tr><td>13</td><td>Jakub Voracek (VAN)</td><td>11</td><td>17,24%</td></tr>
<tr><td>14</td><td>Morgan Klimchuk (VEG)</td><td>16</td><td>17,14%</td></tr>
<tr><td>15</td><td>Esa Lindell (TBL)</td><td>7</td><td>16,67%</td></tr>
<tr><td>16</td><td>Curtis Lazar (PHI)</td><td>7</td><td>16,67%</td></tr>
<tr><td>17</td><td>Ryan McDonagh (NYR)</td><td>10</td><td>16,67%</td></tr>
<tr><td>18</td><td>Dan DeKeyser (QUE)</td><td>19</td><td>16,67%</td></tr>
<tr><td>19</td><td>Artemi Panarin (STL)</td><td>20</td><td>16,67%</td></tr>
<tr><td>20</td><td>Matt Duchene (PIT)</td><td>23</td><td>16,67%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>15-21-36</td></tr>
<tr><td>2</td><td>Matt Duchene (PIT)</td><td>23</td><td>16-11-27</td></tr>
<tr><td>3</td><td>Brandon Sutter (PIT)</td><td>23</td><td>5-15-20</td></tr>
<tr><td>4</td><td>Alexander Burmistrov (PIT)</td><td>23</td><td>6-13-19</td></tr>
<tr><td>5</td><td>Evgeny Kuznetsov (STL)</td><td>22</td><td>10-8-18</td></tr>
<tr><td>6</td><td>Tyler Bozak (PIT)</td><td>23</td><td>8-9-17</td></tr>
<tr><td>7</td><td>Patrick Kane (VEG)</td><td>16</td><td>7-9-16</td></tr>
<tr><td>8</td><td>Patrice Bergeron (VEG)</td><td>16</td><td>6-9-15</td></tr>
<tr><td>9</td><td>Mark Scheifele (STL)</td><td>22</td><td>4-10-14</td></tr>
<tr><td>10</td><td>William Karlsson (VEG)</td><td>16</td><td>3-11-14</td></tr>
<tr><td>11</td><td>Tomas Plekanec (STL)</td><td>22</td><td>8-5-13</td></tr>
<tr><td>12</td><td>Colin Wilson (QUE)</td><td>19</td><td>7-6-13</td></tr>
<tr><td>13</td><td>Ryan Getzlaf (QUE)</td><td>19</td><td>5-8-13</td></tr>
<tr><td>14</td><td>Nazem Kadri (STL)</td><td>22</td><td>5-7-12</td></tr>
<tr><td>15</td><td>T.J. Oshie (QUE)</td><td>19</td><td>2-9-11</td></tr>
<tr><td>16</td><td>Dylan Larkin (FLA)</td><td>9</td><td>6-4-10</td></tr>
<tr><td>17</td><td>Brayden Point (NYR)</td><td>10</td><td>5-5-10</td></tr>
<tr><td>18</td><td>Connor McDavid (VAN)</td><td>11</td><td>4-6-10</td></tr>
<tr><td>19</td><td>Sean Couturier (DAL)</td><td>11</td><td>2-8-10</td></tr>
<tr><td>20</td><td>Mathew Barzal (DAL)</td><td>11</td><td>5-4-9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Artemi Panarin (STL)</td><td>20</td><td>10-10-20</td></tr>
<tr><td>2</td><td>Alexander Burmistrov (PIT)</td><td>23</td><td>6-13-19</td></tr>
<tr><td>3</td><td>Evgeny Kuznetsov (STL)</td><td>22</td><td>10-8-18</td></tr>
<tr><td>4</td><td>James Neal (STL)</td><td>22</td><td>7-8-15</td></tr>
<tr><td>5</td><td>Bobby Ryan (PIT)</td><td>23</td><td>6-9-15</td></tr>
<tr><td>6</td><td>Colin Wilson (QUE)</td><td>19</td><td>7-6-13</td></tr>
<tr><td>7</td><td>David Pastrnak (TBL)</td><td>7</td><td>7-5-12</td></tr>
<tr><td>8</td><td>Conor Sheary (VEG)</td><td>16</td><td>5-7-12</td></tr>
<tr><td>9</td><td>Nazem Kadri (STL)</td><td>22</td><td>5-7-12</td></tr>
<tr><td>10</td><td>T.J. Oshie (QUE)</td><td>19</td><td>2-9-11</td></tr>
<tr><td>11</td><td>Dylan Larkin (FLA)</td><td>9</td><td>6-4-10</td></tr>
<tr><td>12</td><td>Morgan Klimchuk (VEG)</td><td>16</td><td>6-4-10</td></tr>
<tr><td>13</td><td>Charles Hudon (VEG)</td><td>15</td><td>5-4-9</td></tr>
<tr><td>14</td><td>Jaden Schwartz (DET)</td><td>7</td><td>4-5-9</td></tr>
<tr><td>15</td><td>Adam Erne (VEG)</td><td>16</td><td>4-5-9</td></tr>
<tr><td>16</td><td>Brendan Leipsic (VEG)</td><td>16</td><td>1-8-9</td></tr>
<tr><td>17</td><td>Nikolaj Ehlers (VAN)</td><td>11</td><td>6-2-8</td></tr>
<tr><td>18</td><td>Jakub Voracek (VAN)</td><td>11</td><td>5-3-8</td></tr>
<tr><td>19</td><td>Jake Guentzel (QUE)</td><td>19</td><td>5-3-8</td></tr>
<tr><td>20</td><td>Theodor Blueger (STL)</td><td>22</td><td>3-5-8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>15-21-36</td></tr>
<tr><td>2</td><td>Matt Duchene (PIT)</td><td>23</td><td>16-11-27</td></tr>
<tr><td>3</td><td>Brandon Sutter (PIT)</td><td>23</td><td>5-15-20</td></tr>
<tr><td>4</td><td>Alexander Burmistrov (PIT)</td><td>23</td><td>6-13-19</td></tr>
<tr><td>5</td><td>Evgeny Kuznetsov (STL)</td><td>22</td><td>10-8-18</td></tr>
<tr><td>6</td><td>Patric Hornqvist (PIT)</td><td>23</td><td>9-8-17</td></tr>
<tr><td>7</td><td>Tyler Bozak (PIT)</td><td>23</td><td>8-9-17</td></tr>
<tr><td>8</td><td>Patrick Kane (VEG)</td><td>16</td><td>7-9-16</td></tr>
<tr><td>9</td><td>James Neal (STL)</td><td>22</td><td>7-8-15</td></tr>
<tr><td>10</td><td>Bobby Ryan (PIT)</td><td>23</td><td>6-9-15</td></tr>
<tr><td>11</td><td>Colin Wilson (QUE)</td><td>19</td><td>7-6-13</td></tr>
<tr><td>12</td><td>David Pastrnak (TBL)</td><td>7</td><td>7-5-12</td></tr>
<tr><td>13</td><td>Conor Sheary (VEG)</td><td>16</td><td>5-7-12</td></tr>
<tr><td>14</td><td>Nazem Kadri (STL)</td><td>22</td><td>5-7-12</td></tr>
<tr><td>15</td><td>T.J. Oshie (QUE)</td><td>19</td><td>2-9-11</td></tr>
<tr><td>16</td><td>Jaden Schwartz (DET)</td><td>7</td><td>4-5-9</td></tr>
<tr><td>17</td><td>Adam Erne (VEG)</td><td>16</td><td>4-5-9</td></tr>
<tr><td>18</td><td>Brendan Leipsic (VEG)</td><td>16</td><td>1-8-9</td></tr>
<tr><td>19</td><td>Nikolaj Ehlers (VAN)</td><td>11</td><td>6-2-8</td></tr>
<tr><td>20</td><td>Jakub Voracek (VAN)</td><td>11</td><td>5-3-8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Erik Johnson (PIT)</td><td>23</td><td>5-12-17</td></tr>
<tr><td>2</td><td>Tim Erixon (PIT)</td><td>23</td><td>3-14-17</td></tr>
<tr><td>3</td><td>Justin Schultz (VEG)</td><td>16</td><td>7-9-16</td></tr>
<tr><td>4</td><td>Brady Skjei (STL)</td><td>21</td><td>3-13-16</td></tr>
<tr><td>5</td><td>Marc-Edouard Vlasic (STL)</td><td>22</td><td>2-13-15</td></tr>
<tr><td>6</td><td>Kristopher Letang (VEG)</td><td>16</td><td>1-13-14</td></tr>
<tr><td>7</td><td>Mattias Ekholm (VEG)</td><td>16</td><td>2-11-13</td></tr>
<tr><td>8</td><td>Jamie Oleksiak (STL)</td><td>19</td><td>2-11-13</td></tr>
<tr><td>9</td><td>Kris Russell (VEG)</td><td>16</td><td>3-9-12</td></tr>
<tr><td>10</td><td>Ian Cole (STL)</td><td>22</td><td>2-10-12</td></tr>
<tr><td>11</td><td>Connor Murphy (QUE)</td><td>19</td><td>1-11-12</td></tr>
<tr><td>12</td><td>Brendan Smith (QUE)</td><td>19</td><td>2-9-11</td></tr>
<tr><td>13</td><td>Shea Weber (DAL)</td><td>11</td><td>3-7-10</td></tr>
<tr><td>14</td><td>Dougie Hamilton (VAN)</td><td>11</td><td>2-8-10</td></tr>
<tr><td>15</td><td>Mike Reilly (QUE)</td><td>19</td><td>2-8-10</td></tr>
<tr><td>16</td><td>Dan DeKeyser (QUE)</td><td>19</td><td>5-4-9</td></tr>
<tr><td>17</td><td>Simon Despres (VEG)</td><td>16</td><td>4-5-9</td></tr>
<tr><td>18</td><td>Josh Morrissey (VAN)</td><td>11</td><td>2-7-9</td></tr>
<tr><td>19</td><td>Alex Goligoski (DET)</td><td>7</td><td>2-6-8</td></tr>
<tr><td>20</td><td>Matt Grzelcyk (VEG)</td><td>16</td><td>2-6-8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>David Pastrnak (TBL)</td><td>7</td><td>1,59</td></tr>
<tr><td>2</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>1,46</td></tr>
<tr><td>3</td><td>Dylan Larkin (FLA)</td><td>9</td><td>1,30</td></tr>
<tr><td>4</td><td>Curtis Lazar (PHI)</td><td>7</td><td>1,19</td></tr>
<tr><td>5</td><td>Adam Larsson (PHI)</td><td>7</td><td>1,12</td></tr>
<tr><td>6</td><td>Matt Duchene (PIT)</td><td>23</td><td>1,11</td></tr>
<tr><td>7</td><td>Artemi Panarin (STL)</td><td>20</td><td>1,06</td></tr>
<tr><td>8</td><td>Brendan Ranford (PHI)</td><td>7</td><td>1,05</td></tr>
<tr><td>9</td><td>Nick Schmaltz (PHI)</td><td>7</td><td>1,05</td></tr>
<tr><td>10</td><td>Jaden Schwartz (DET)</td><td>7</td><td>1,04</td></tr>
<tr><td>11</td><td>Patrick Kane (VEG)</td><td>16</td><td>1,03</td></tr>
<tr><td>12</td><td>Alex Goligoski (DET)</td><td>7</td><td>1,02</td></tr>
<tr><td>13</td><td>Justin Schultz (VEG)</td><td>16</td><td>0,99</td></tr>
<tr><td>14</td><td>Patrice Bergeron (VEG)</td><td>16</td><td>0,97</td></tr>
<tr><td>15</td><td>Brayden Point (NYR)</td><td>10</td><td>0,94</td></tr>
<tr><td>16</td><td>Patrik Laine (DET)</td><td>7</td><td>0,92</td></tr>
<tr><td>17</td><td>Frank Vatrano (QUE)</td><td>10</td><td>0,90</td></tr>
<tr><td>18</td><td>Jonathan Huberdeau (FLA)</td><td>9</td><td>0,90</td></tr>
<tr><td>19</td><td>William Karlsson (VEG)</td><td>16</td><td>0,90</td></tr>
<tr><td>20</td><td>Charles Hudon (VEG)</td><td>15</td><td>0,88</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Marcus Johansson (TBL)</td><td>7</td><td>67,65%</td></tr>
<tr><td>2</td><td>Sean Couturier (DAL)</td><td>11</td><td>60,56%</td></tr>
<tr><td>3</td><td>Patrice Bergeron (VEG)</td><td>16</td><td>57,49%</td></tr>
<tr><td>4</td><td>Claude Giroux (PHI)</td><td>7</td><td>56,52%</td></tr>
<tr><td>5</td><td>Brandon Dubinsky (STL)</td><td>22</td><td>56,03%</td></tr>
<tr><td>6</td><td>Ryan Getzlaf (QUE)</td><td>19</td><td>55,92%</td></tr>
<tr><td>7</td><td>Zemgus Girgensons (VAN)</td><td>11</td><td>55,46%</td></tr>
<tr><td>8</td><td>Tyler Bozak (PIT)</td><td>23</td><td>55,42%</td></tr>
<tr><td>9</td><td>Marc-Andre Cliche (DAL)</td><td>7</td><td>55,17%</td></tr>
<tr><td>10</td><td>Jason Spezza (DET)</td><td>7</td><td>55,12%</td></tr>
<tr><td>11</td><td>Mikael Backlund (TBL)</td><td>7</td><td>52,88%</td></tr>
<tr><td>12</td><td>Jaden Schwartz (DET)</td><td>7</td><td>52,63%</td></tr>
<tr><td>13</td><td>Jean-Gabriel Pageau (TBL)</td><td>7</td><td>52,58%</td></tr>
<tr><td>14</td><td>Brandon Sutter (PIT)</td><td>23</td><td>52,46%</td></tr>
<tr><td>15</td><td>Zach Hyman (TBL)</td><td>7</td><td>52,38%</td></tr>
<tr><td>16</td><td>Brayden Point (NYR)</td><td>10</td><td>52,30%</td></tr>
<tr><td>17</td><td>Matt Duchene (PIT)</td><td>23</td><td>51,46%</td></tr>
<tr><td>18</td><td>Evgeny Kuznetsov (STL)</td><td>22</td><td>51,15%</td></tr>
<tr><td>19</td><td>Paul Stastny (PIT)</td><td>23</td><td>50,90%</td></tr>
<tr><td>20</td><td>Connor McDavid (VAN)</td><td>11</td><td>50,71%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Brady Skjei (STL)</td><td>21</td><td>16</td></tr>
<tr><td>2</td><td>Kristopher Letang (VEG)</td><td>16</td><td>14</td></tr>
<tr><td>3</td><td>Artemi Panarin (STL)</td><td>20</td><td>13</td></tr>
<tr><td>4</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>12</td></tr>
<tr><td>5</td><td>Morgan Klimchuk (VEG)</td><td>16</td><td>11</td></tr>
<tr><td>6</td><td>Jamie Oleksiak (STL)</td><td>19</td><td>11</td></tr>
<tr><td>7</td><td>Patrice Bergeron (VEG)</td><td>16</td><td>10</td></tr>
<tr><td>8</td><td>Patrick Kane (VEG)</td><td>16</td><td>10</td></tr>
<tr><td>9</td><td>Charles Hudon (VEG)</td><td>15</td><td>9</td></tr>
<tr><td>10</td><td>Mattias Ekholm (VEG)</td><td>16</td><td>9</td></tr>
<tr><td>11</td><td>Connor Murphy (QUE)</td><td>19</td><td>9</td></tr>
<tr><td>12</td><td>Brendan Leipsic (VEG)</td><td>16</td><td>8</td></tr>
<tr><td>13</td><td>Tomas Plekanec (STL)</td><td>22</td><td>8</td></tr>
<tr><td>14</td><td>Theodor Blueger (STL)</td><td>22</td><td>8</td></tr>
<tr><td>15</td><td>Linus Omark (VEG)</td><td>11</td><td>7</td></tr>
<tr><td>16</td><td>Simon Despres (VEG)</td><td>16</td><td>7</td></tr>
<tr><td>17</td><td>Tyler Bozak (PIT)</td><td>23</td><td>7</td></tr>
<tr><td>18</td><td>Jiri Sekac (PIT)</td><td>23</td><td>7</td></tr>
<tr><td>19</td><td>Frank Vatrano (QUE)</td><td>10</td><td>6</td></tr>
<tr><td>20</td><td>Mike Reilly (QUE)</td><td>19</td><td>6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Jamie Oleksiak (STL)</td><td>19</td><td>49</td></tr>
<tr><td>2</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>28</td></tr>
<tr><td>3</td><td>Ian Cole (STL)</td><td>22</td><td>26</td></tr>
<tr><td>4</td><td>Erik Johnson (PIT)</td><td>23</td><td>26</td></tr>
<tr><td>5</td><td>Simon Despres (VEG)</td><td>16</td><td>25</td></tr>
<tr><td>6</td><td>Dylan McIlrath (NYR)</td><td>10</td><td>24</td></tr>
<tr><td>7</td><td>Matt Grzelcyk (VEG)</td><td>16</td><td>24</td></tr>
<tr><td>8</td><td>Ryan Wilson (PIT)</td><td>23</td><td>24</td></tr>
<tr><td>9</td><td>Jay Bouwmeester (PIT)</td><td>12</td><td>21</td></tr>
<tr><td>10</td><td>Robert Bortuzzo (PIT)</td><td>18</td><td>21</td></tr>
<tr><td>11</td><td>Dillon Fournier (QUE)</td><td>16</td><td>20</td></tr>
<tr><td>12</td><td>Ryan Getzlaf (QUE)</td><td>19</td><td>20</td></tr>
<tr><td>13</td><td>Brendan Smith (QUE)</td><td>19</td><td>20</td></tr>
<tr><td>14</td><td>Zach Aston-Reese (QUE)</td><td>15</td><td>18</td></tr>
<tr><td>15</td><td>Adam Erne (VEG)</td><td>16</td><td>18</td></tr>
<tr><td>16</td><td>Connor Murphy (QUE)</td><td>19</td><td>18</td></tr>
<tr><td>17</td><td>Bobby Ryan (PIT)</td><td>23</td><td>18</td></tr>
<tr><td>18</td><td>Kris Versteeg (PIT)</td><td>23</td><td>18</td></tr>
<tr><td>19</td><td>Tim Erixon (PIT)</td><td>23</td><td>18</td></tr>
<tr><td>20</td><td>John Moore (PHI)</td><td>7</td><td>17</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Marc-Edouard Vlasic (STL)</td><td>22</td><td>49</td></tr>
<tr><td>2</td><td>Dan DeKeyser (QUE)</td><td>19</td><td>40</td></tr>
<tr><td>3</td><td>Connor Murphy (QUE)</td><td>19</td><td>35</td></tr>
<tr><td>4</td><td>Justin Braun (PIT)</td><td>22</td><td>33</td></tr>
<tr><td>5</td><td>Erik Johnson (PIT)</td><td>23</td><td>32</td></tr>
<tr><td>6</td><td>Matt Grzelcyk (VEG)</td><td>16</td><td>31</td></tr>
<tr><td>7</td><td>Simon Despres (VEG)</td><td>16</td><td>29</td></tr>
<tr><td>8</td><td>Ian Cole (STL)</td><td>22</td><td>29</td></tr>
<tr><td>9</td><td>Mattias Ekholm (VEG)</td><td>16</td><td>28</td></tr>
<tr><td>10</td><td>Brendan Smith (QUE)</td><td>19</td><td>28</td></tr>
<tr><td>11</td><td>Jamie Oleksiak (STL)</td><td>19</td><td>28</td></tr>
<tr><td>12</td><td>Dougie Hamilton (VAN)</td><td>11</td><td>25</td></tr>
<tr><td>13</td><td>Kristopher Letang (VEG)</td><td>16</td><td>25</td></tr>
<tr><td>14</td><td>Alex Petrovic (DAL)</td><td>11</td><td>24</td></tr>
<tr><td>15</td><td>Shea Weber (DAL)</td><td>11</td><td>24</td></tr>
<tr><td>16</td><td>Brett Kulak (QUE)</td><td>19</td><td>24</td></tr>
<tr><td>17</td><td>Ryan Wilson (PIT)</td><td>23</td><td>22</td></tr>
<tr><td>18</td><td>Ryan Murray (PHI)</td><td>7</td><td>21</td></tr>
<tr><td>19</td><td>Aaron Ekblad (FLA)</td><td>9</td><td>20</td></tr>
<tr><td>20</td><td>Ryan McDonagh (NYR)</td><td>10</td><td>20</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Morgan Klimchuk (VEG)</td><td>16</td><td>6-4-10</td></tr>
<tr><td>2</td><td>Charles Hudon (VEG)</td><td>15</td><td>5-4-9</td></tr>
<tr><td>3</td><td>Theodor Blueger (STL)</td><td>22</td><td>3-5-8</td></tr>
<tr><td>4</td><td>Colin White (VAN)</td><td>11</td><td>3-4-7</td></tr>
<tr><td>5</td><td>Esa Lindell (TBL)</td><td>7</td><td>2-5-7</td></tr>
<tr><td>6</td><td>Noah Dobson (SJS)</td><td>5</td><td>1-5-6</td></tr>
<tr><td>7</td><td>Kaapo Kakko (VAN)</td><td>11</td><td>1-5-6</td></tr>
<tr><td>8</td><td>Dillon Fournier (QUE)</td><td>16</td><td>1-4-5</td></tr>
<tr><td>9</td><td>Adam Pelech (NYR)</td><td>10</td><td>2-2-4</td></tr>
<tr><td>10</td><td>Madison Bowey (FLA)</td><td>9</td><td>0-4-4</td></tr>
<tr><td>11</td><td>Radek Faksa (SJS)</td><td>5</td><td>2-1-3</td></tr>
<tr><td>12</td><td>Jakub Vrana (NYR)</td><td>10</td><td>2-1-3</td></tr>
<tr><td>13</td><td>Maxime Comtois (QUE)</td><td>10</td><td>1-2-3</td></tr>
<tr><td>14</td><td>Liam Foudy (VAN)</td><td>11</td><td>2-0-2</td></tr>
<tr><td>15</td><td>Jack Hughes (DET)</td><td>5</td><td>1-1-2</td></tr>
<tr><td>16</td><td>Jake DeBrusk (VEG)</td><td>5</td><td>0-2-2</td></tr>
<tr><td>17</td><td>Carter Verhaeghe (NYR)</td><td>10</td><td>0-2-2</td></tr>
<tr><td>18</td><td>Damir Zhafyarov (NYR)</td><td>3</td><td>1-0-1</td></tr>
<tr><td>19</td><td>Timo Meier (SJS)</td><td>5</td><td>1-0-1</td></tr>
<tr><td>20</td><td>Andreas Johnsson (PHI)</td><td>7</td><td>1-0-1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Jamie Oleksiak (STL)</td><td>19</td><td>66</td></tr>
<tr><td>2</td><td>Adam Erne (VEG)</td><td>16</td><td>65</td></tr>
<tr><td>3</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>64</td></tr>
<tr><td>4</td><td>Bobby Ryan (PIT)</td><td>23</td><td>59</td></tr>
<tr><td>5</td><td>Erik Johnson (PIT)</td><td>23</td><td>59</td></tr>
<tr><td>6</td><td>Brendan Smith (QUE)</td><td>19</td><td>55</td></tr>
<tr><td>7</td><td>Ian Cole (STL)</td><td>22</td><td>51</td></tr>
<tr><td>8</td><td>Ryan Wilson (PIT)</td><td>23</td><td>45</td></tr>
<tr><td>9</td><td>Connor Murphy (QUE)</td><td>19</td><td>41</td></tr>
<tr><td>10</td><td>Simon Despres (VEG)</td><td>16</td><td>40</td></tr>
<tr><td>11</td><td>James Neal (STL)</td><td>22</td><td>39</td></tr>
<tr><td>12</td><td>Mark Scheifele (STL)</td><td>22</td><td>38</td></tr>
<tr><td>13</td><td>Zach Aston-Reese (QUE)</td><td>15</td><td>37</td></tr>
<tr><td>14</td><td>Robert Bortuzzo (PIT)</td><td>18</td><td>36</td></tr>
<tr><td>15</td><td>Ryan Getzlaf (QUE)</td><td>19</td><td>35</td></tr>
<tr><td>16</td><td>Matt Duchene (PIT)</td><td>23</td><td>34</td></tr>
<tr><td>17</td><td>Brandon Sutter (PIT)</td><td>23</td><td>31</td></tr>
<tr><td>18</td><td>Dillon Fournier (QUE)</td><td>16</td><td>28</td></tr>
<tr><td>19</td><td>Travis Brown (PHI)</td><td>7</td><td>27</td></tr>
<tr><td>20</td><td>Duncan Siemens (DAL)</td><td>11</td><td>27</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Matt Duchene (PIT)</td><td>23</td><td>7</td></tr>
<tr><td>2</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>6</td></tr>
<tr><td>3</td><td>Erik Johnson (PIT)</td><td>23</td><td>5</td></tr>
<tr><td>4</td><td>Justin Schultz (VEG)</td><td>16</td><td>4</td></tr>
<tr><td>5</td><td>Patric Hornqvist (PIT)</td><td>23</td><td>4</td></tr>
<tr><td>6</td><td>Mark Giordano (PHI)</td><td>7</td><td>3</td></tr>
<tr><td>7</td><td>David Pastrnak (TBL)</td><td>7</td><td>3</td></tr>
<tr><td>8</td><td>Dylan Larkin (FLA)</td><td>9</td><td>3</td></tr>
<tr><td>9</td><td>Brayden Point (NYR)</td><td>10</td><td>3</td></tr>
<tr><td>10</td><td>Jakub Voracek (VAN)</td><td>11</td><td>3</td></tr>
<tr><td>11</td><td>Conor Sheary (VEG)</td><td>16</td><td>3</td></tr>
<tr><td>12</td><td>Alex Goligoski (DET)</td><td>7</td><td>2</td></tr>
<tr><td>13</td><td>Mikael Granlund (DET)</td><td>7</td><td>2</td></tr>
<tr><td>14</td><td>Boone Jenner (TBL)</td><td>7</td><td>2</td></tr>
<tr><td>15</td><td>Brendan Perlini (FLA)</td><td>9</td><td>2</td></tr>
<tr><td>16</td><td>Zachary Werenski (FLA)</td><td>9</td><td>2</td></tr>
<tr><td>17</td><td>Ryan McDonagh (NYR)</td><td>10</td><td>2</td></tr>
<tr><td>18</td><td>Aleksander Barkov (NYR)</td><td>10</td><td>2</td></tr>
<tr><td>19</td><td>Zemgus Girgensons (VAN)</td><td>11</td><td>2</td></tr>
<tr><td>20</td><td>Ahti Oksanen (VAN)</td><td>11</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Alexander Urbom (MTL)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Claude Giroux (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Charles Hudon (VEG)</td><td>15</td><td>1</td></tr>
<tr><td>4</td><td>Mattias Ekholm (VEG)</td><td>16</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>7</td></tr>
<tr><td>2</td><td>Matt Duchene (PIT)</td><td>23</td><td>7</td></tr>
<tr><td>3</td><td>Josh Anderson (FLA)</td><td>9</td><td>2</td></tr>
<tr><td>4</td><td>Brayden Point (NYR)</td><td>10</td><td>2</td></tr>
<tr><td>5</td><td>Simon Despres (VEG)</td><td>16</td><td>2</td></tr>
<tr><td>6</td><td>Justin Schultz (VEG)</td><td>16</td><td>2</td></tr>
<tr><td>7</td><td>Lukas Sedlak (QUE)</td><td>19</td><td>2</td></tr>
<tr><td>8</td><td>Tomas Plekanec (STL)</td><td>22</td><td>2</td></tr>
<tr><td>9</td><td>Evgeny Kuznetsov (STL)</td><td>22</td><td>2</td></tr>
<tr><td>10</td><td>Damir Zhafyarov (NYR)</td><td>3</td><td>1</td></tr>
<tr><td>11</td><td>Derek Roy (FLA)</td><td>4</td><td>1</td></tr>
<tr><td>12</td><td>Reid Boucher (BUF)</td><td>5</td><td>1</td></tr>
<tr><td>13</td><td>Matthew Nieto (SJS)</td><td>5</td><td>1</td></tr>
<tr><td>14</td><td>Drew Doughty (LOS)</td><td>6</td><td>1</td></tr>
<tr><td>15</td><td>Evgeni Malkin (CGY)</td><td>6</td><td>1</td></tr>
<tr><td>16</td><td>Jeff Skinner (LOS)</td><td>6</td><td>1</td></tr>
<tr><td>17</td><td>Travis Hamonic (CGY)</td><td>6</td><td>1</td></tr>
<tr><td>18</td><td>Gabriel Gagné (QUE)</td><td>6</td><td>1</td></tr>
<tr><td>19</td><td>John Moore (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>20</td><td>Andreas Johnsson (PHI)</td><td>7</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Nick Bjugstad (FLA)</td><td>9</td><td>2</td></tr>
<tr><td>2</td><td>Artemi Panarin (STL)</td><td>20</td><td>2</td></tr>
<tr><td>3</td><td>Ryan O'Reilly (BUF)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Anze Kopitar (LOS)</td><td>6</td><td>1</td></tr>
<tr><td>5</td><td>Jordan Staal (LOS)</td><td>6</td><td>1</td></tr>
<tr><td>6</td><td>Mikael Granlund (DET)</td><td>7</td><td>1</td></tr>
<tr><td>7</td><td>Brendan Ranford (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>8</td><td>David Pastrnak (TBL)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>Dylan Larkin (FLA)</td><td>9</td><td>1</td></tr>
<tr><td>10</td><td>Alexander Wennberg (NYR)</td><td>10</td><td>1</td></tr>
<tr><td>11</td><td>Vladimir Tarasenko (DAL)</td><td>11</td><td>1</td></tr>
<tr><td>12</td><td>Connor McDavid (VAN)</td><td>11</td><td>1</td></tr>
<tr><td>13</td><td>Charles Hudon (VEG)</td><td>15</td><td>1</td></tr>
<tr><td>14</td><td>Justin Schultz (VEG)</td><td>16</td><td>1</td></tr>
<tr><td>15</td><td>Myles Bell (VEG)</td><td>16</td><td>1</td></tr>
<tr><td>16</td><td>Mattias Ekholm (VEG)</td><td>16</td><td>1</td></tr>
<tr><td>17</td><td>Colin Wilson (QUE)</td><td>19</td><td>1</td></tr>
<tr><td>18</td><td>Lukas Sedlak (QUE)</td><td>19</td><td>1</td></tr>
<tr><td>19</td><td>Dan DeKeyser (QUE)</td><td>19</td><td>1</td></tr>
<tr><td>20</td><td>Nazem Kadri (STL)</td><td>22</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Nick Leddy (DET)</td><td>7</td><td>1</td></tr>
<tr><td>2</td><td>Jaden Schwartz (DET)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Jakub Voracek (VAN)</td><td>11</td><td>1</td></tr>
<tr><td>4</td><td>Colin Wilson (QUE)</td><td>19</td><td>1</td></tr>
<tr><td>5</td><td>Marc-Edouard Vlasic (STL)</td><td>22</td><td>1</td></tr>
<tr><td>6</td><td>Tomas Plekanec (STL)</td><td>22</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Erik Johnson (PIT)</td><td>23</td><td>589</td></tr>
<tr><td>2</td><td>Alexander Burmistrov (PIT)</td><td>23</td><td>563</td></tr>
<tr><td>3</td><td>Marc-Edouard Vlasic (STL)</td><td>22</td><td>552</td></tr>
<tr><td>4</td><td>Brandon Sutter (PIT)</td><td>23</td><td>517</td></tr>
<tr><td>5</td><td>Ian Cole (STL)</td><td>22</td><td>506</td></tr>
<tr><td>6</td><td>Tim Erixon (PIT)</td><td>23</td><td>502</td></tr>
<tr><td>7</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>493</td></tr>
<tr><td>8</td><td>Paul Stastny (PIT)</td><td>23</td><td>492</td></tr>
<tr><td>9</td><td>Bobby Ryan (PIT)</td><td>23</td><td>488</td></tr>
<tr><td>10</td><td>Matt Duchene (PIT)</td><td>23</td><td>486</td></tr>
<tr><td>11</td><td>James Neal (STL)</td><td>22</td><td>483</td></tr>
<tr><td>12</td><td>Nazem Kadri (STL)</td><td>22</td><td>459</td></tr>
<tr><td>13</td><td>Evgeny Kuznetsov (STL)</td><td>22</td><td>457</td></tr>
<tr><td>14</td><td>Mark Scheifele (STL)</td><td>22</td><td>452</td></tr>
<tr><td>15</td><td>Brendan Smith (QUE)</td><td>19</td><td>449</td></tr>
<tr><td>16</td><td>Ryan Wilson (PIT)</td><td>23</td><td>446</td></tr>
<tr><td>17</td><td>Brady Skjei (STL)</td><td>21</td><td>444</td></tr>
<tr><td>18</td><td>Dan DeKeyser (QUE)</td><td>19</td><td>443</td></tr>
<tr><td>19</td><td>Tyler Bozak (PIT)</td><td>23</td><td>419</td></tr>
<tr><td>20</td><td>Patric Hornqvist (PIT)</td><td>23</td><td>417</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>David Pastrnak (TBL)</td><td>7</td><td>1</td></tr>
<tr><td>2</td><td>Nikolaj Ehlers (VAN)</td><td>11</td><td>1</td></tr>
<tr><td>3</td><td>Patrice Bergeron (VEG)</td><td>16</td><td>1</td></tr>
<tr><td>4</td><td>Artemi Panarin (STL)</td><td>20</td><td>1</td></tr>
<tr><td>5</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>1</td></tr>
<tr><td>6</td><td>Matt Duchene (PIT)</td><td>23</td><td>1</td></tr>
<tr><td>7</td><td>Tyler Bozak (PIT)</td><td>23</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>3</td></tr>
<tr><td>2</td><td>Alexander Urbom (MTL)</td><td>4</td><td>2</td></tr>
<tr><td>3</td><td>Nikita Kucherov (FLA)</td><td>5</td><td>2</td></tr>
<tr><td>4</td><td>Dylan Larkin (FLA)</td><td>9</td><td>2</td></tr>
<tr><td>5</td><td>Jakub Vrana (NYR)</td><td>10</td><td>2</td></tr>
<tr><td>6</td><td>Sidney Crosby (MTL)</td><td>1</td><td>1</td></tr>
<tr><td>7</td><td>Tyler Motte (QUE)</td><td>3</td><td>1</td></tr>
<tr><td>8</td><td>Filip Forsberg (MTL)</td><td>4</td><td>1</td></tr>
<tr><td>9</td><td>Danton Heinen (MTL)</td><td>4</td><td>1</td></tr>
<tr><td>10</td><td>Evander Kane (BUF)</td><td>5</td><td>1</td></tr>
<tr><td>11</td><td>Nathan Beaulieu (BUF)</td><td>5</td><td>1</td></tr>
<tr><td>12</td><td>Timo Meier (SJS)</td><td>5</td><td>1</td></tr>
<tr><td>13</td><td>Corey Perry (LOS)</td><td>6</td><td>1</td></tr>
<tr><td>14</td><td>Jan Rutta (LOS)</td><td>6</td><td>1</td></tr>
<tr><td>15</td><td>Derek Forbort (LOS)</td><td>6</td><td>1</td></tr>
<tr><td>16</td><td>Alex Galchenyuk (CGY)</td><td>6</td><td>1</td></tr>
<tr><td>17</td><td>Teuvo Teravainen (CGY)</td><td>6</td><td>1</td></tr>
<tr><td>18</td><td>Patrick Holland (LOS)</td><td>6</td><td>1</td></tr>
<tr><td>19</td><td>Jeff Carter (TBL)</td><td>7</td><td>1</td></tr>
<tr><td>20</td><td>Mika Zibanejad (DET)</td><td>7</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>9</td></tr>
<tr><td>2</td><td>Alexander Urbom (MTL)</td><td>4</td><td>4</td></tr>
<tr><td>3</td><td>Ryan O'Reilly (BUF)</td><td>5</td><td>4</td></tr>
<tr><td>4</td><td>Jeff Skinner (LOS)</td><td>6</td><td>4</td></tr>
<tr><td>5</td><td>Zachary Werenski (FLA)</td><td>9</td><td>4</td></tr>
<tr><td>6</td><td>Beau Bennett (MTL)</td><td>4</td><td>3</td></tr>
<tr><td>7</td><td>Jordan Eberle (BUF)</td><td>5</td><td>3</td></tr>
<tr><td>8</td><td>Michael Del Zotto (CGY)</td><td>6</td><td>3</td></tr>
<tr><td>9</td><td>Conor Sheary (VEG)</td><td>16</td><td>3</td></tr>
<tr><td>10</td><td>William Karlsson (VEG)</td><td>16</td><td>3</td></tr>
<tr><td>11</td><td>Brandon Montour (MTL)</td><td>4</td><td>2</td></tr>
<tr><td>12</td><td>Kevin Shattenkirk (BUF)</td><td>5</td><td>2</td></tr>
<tr><td>13</td><td>Aaron Ness (SJS)</td><td>5</td><td>2</td></tr>
<tr><td>14</td><td>Nikita Kucherov (FLA)</td><td>5</td><td>2</td></tr>
<tr><td>15</td><td>Jan Rutta (LOS)</td><td>6</td><td>2</td></tr>
<tr><td>16</td><td>Derek Forbort (LOS)</td><td>6</td><td>2</td></tr>
<tr><td>17</td><td>Alex Galchenyuk (CGY)</td><td>6</td><td>2</td></tr>
<tr><td>18</td><td>Teuvo Teravainen (CGY)</td><td>6</td><td>2</td></tr>
<tr><td>19</td><td>Brett Ritchie (LOS)</td><td>6</td><td>2</td></tr>
<tr><td>20</td><td>Jeff Carter (TBL)</td><td>7</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (STL)</td><td>22</td><td>61</td></tr>
<tr><td>2</td><td>Alexander Burmistrov (PIT)</td><td>23</td><td>56</td></tr>
<tr><td>3</td><td>Matt Duchene (PIT)</td><td>23</td><td>54</td></tr>
<tr><td>4</td><td>Tyler Bozak (PIT)</td><td>23</td><td>50</td></tr>
<tr><td>5</td><td>Mark Scheifele (STL)</td><td>22</td><td>49</td></tr>
<tr><td>6</td><td>Paul Stastny (PIT)</td><td>23</td><td>49</td></tr>
<tr><td>7</td><td>Brandon Sutter (PIT)</td><td>23</td><td>47</td></tr>
<tr><td>8</td><td>Ryan Getzlaf (QUE)</td><td>19</td><td>45</td></tr>
<tr><td>9</td><td>Connor McDavid (VAN)</td><td>11</td><td>41</td></tr>
<tr><td>10</td><td>Tomas Plekanec (STL)</td><td>22</td><td>41</td></tr>
<tr><td>11</td><td>Erik Johnson (PIT)</td><td>23</td><td>36</td></tr>
<tr><td>12</td><td>Patric Hornqvist (PIT)</td><td>23</td><td>36</td></tr>
<tr><td>13</td><td>Brayden Point (NYR)</td><td>10</td><td>33</td></tr>
<tr><td>14</td><td>William Karlsson (VEG)</td><td>16</td><td>32</td></tr>
<tr><td>15</td><td>Marc-Edouard Vlasic (STL)</td><td>22</td><td>30</td></tr>
<tr><td>16</td><td>Colin Wilson (QUE)</td><td>19</td><td>29</td></tr>
<tr><td>17</td><td>Brady Skjei (STL)</td><td>21</td><td>29</td></tr>
<tr><td>18</td><td>Theodor Blueger (STL)</td><td>22</td><td>29</td></tr>
<tr><td>19</td><td>Sean Couturier (DAL)</td><td>11</td><td>28</td></tr>
<tr><td>20</td><td>Zemgus Girgensons (VAN)</td><td>11</td><td>28</td></tr>
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
<tr><td>1</td><td>John Moore (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>2</td><td>Ryan Murray (PHI)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Jay Bouwmeester (PIT)</td><td>12</td><td>1</td></tr>
<tr><td>4</td><td>Simon Despres (VEG)</td><td>16</td><td>1</td></tr>
<tr><td>5</td><td>Kris Russell (VEG)</td><td>16</td><td>1</td></tr>
<tr><td>6</td><td>Robert Bortuzzo (PIT)</td><td>18</td><td>1</td></tr>
<tr><td>7</td><td>Jamie Oleksiak (STL)</td><td>19</td><td>1</td></tr>
<tr><td>8</td><td>Marc-Edouard Vlasic (STL)</td><td>22</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Simon Despres (VEG)</td><td>16</td><td>1</td></tr>
<tr><td>2</td><td>Kris Russell (VEG)</td><td>16</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>John Gibson (TBL)</td><td>7</td><td>0,924</td></tr>
<tr><td>2</td><td>Andrey Vasilevskiy (FLA)</td><td>9</td><td>0,921</td></tr>
<tr><td>3</td><td>Kevin Poulin (VEG)</td><td>15</td><td>0,919</td></tr>
<tr><td>4</td><td>Tuukka Rask (STL)</td><td>22</td><td>0,918</td></tr>
<tr><td>5</td><td>Simeon Varlamov (QUE)</td><td>14</td><td>0,917</td></tr>
<tr><td>6</td><td>Jack Campbell (NYR)</td><td>8</td><td>0,914</td></tr>
<tr><td>7</td><td>Matt Murray (PIT)</td><td>17</td><td>0,910</td></tr>
<tr><td>8</td><td>Ondrej Pavelec (DET)</td><td>7</td><td>0,908</td></tr>
<tr><td>9</td><td>Vitek Vanecek (VAN)</td><td>10</td><td>0,899</td></tr>
<tr><td>10</td><td>Jonathan Quick (PHI)</td><td>7</td><td>0,899</td></tr>
<tr><td>11</td><td>Corey Crawford (DAL)</td><td>11</td><td>0,889</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>John Gibson (TBL)</td><td>7</td><td>2,45</td></tr>
<tr><td>2</td><td>Kevin Poulin (VEG)</td><td>15</td><td>2,49</td></tr>
<tr><td>3</td><td>Tuukka Rask (STL)</td><td>22</td><td>2,53</td></tr>
<tr><td>4</td><td>Andrey Vasilevskiy (FLA)</td><td>9</td><td>2,69</td></tr>
<tr><td>5</td><td>Matt Murray (PIT)</td><td>17</td><td>2,70</td></tr>
<tr><td>6</td><td>Simeon Varlamov (QUE)</td><td>14</td><td>2,75</td></tr>
<tr><td>7</td><td>Jack Campbell (NYR)</td><td>8</td><td>2,86</td></tr>
<tr><td>8</td><td>Ondrej Pavelec (DET)</td><td>7</td><td>3,04</td></tr>
<tr><td>9</td><td>Vitek Vanecek (VAN)</td><td>10</td><td>3,25</td></tr>
<tr><td>10</td><td>Corey Crawford (DAL)</td><td>11</td><td>3,40</td></tr>
<tr><td>11</td><td>Jonathan Quick (PHI)</td><td>7</td><td>3,55</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Tuukka Rask (STL)</td><td>22</td><td>1 375</td></tr>
<tr><td>2</td><td>Matt Murray (PIT)</td><td>17</td><td>1 000</td></tr>
<tr><td>3</td><td>Kevin Poulin (VEG)</td><td>15</td><td>916</td></tr>
<tr><td>4</td><td>Simeon Varlamov (QUE)</td><td>14</td><td>831</td></tr>
<tr><td>5</td><td>Corey Crawford (DAL)</td><td>11</td><td>635</td></tr>
<tr><td>6</td><td>Vitek Vanecek (VAN)</td><td>10</td><td>609</td></tr>
<tr><td>7</td><td>Andrey Vasilevskiy (FLA)</td><td>9</td><td>535</td></tr>
<tr><td>8</td><td>Jack Campbell (NYR)</td><td>8</td><td>462</td></tr>
<tr><td>9</td><td>John Gibson (TBL)</td><td>7</td><td>441</td></tr>
<tr><td>10</td><td>Ondrej Pavelec (DET)</td><td>7</td><td>434</td></tr>
<tr><td>11</td><td>Jonathan Quick (PHI)</td><td>7</td><td>423</td></tr>
<tr><td>12</td><td>Michal Neuvirth (LOS)</td><td>6</td><td>412</td></tr>
<tr><td>13</td><td>Cam Ward (PIT)</td><td>7</td><td>404</td></tr>
<tr><td>14</td><td>James Reimer (CGY)</td><td>6</td><td>354</td></tr>
<tr><td>15</td><td>Kari Lehtonen (QUE)</td><td>6</td><td>345</td></tr>
<tr><td>16</td><td>Jacob Markstrom (BUF)</td><td>5</td><td>285</td></tr>
<tr><td>17</td><td>Jaroslav Halak (MTL)</td><td>3</td><td>182</td></tr>
<tr><td>18</td><td>Henrik Lundqvist (NYR)</td><td>3</td><td>160</td></tr>
<tr><td>19</td><td>Chase Marchand (SJS)</td><td>3</td><td>156</td></tr>
<tr><td>20</td><td>Cory Schneider (SJS)</td><td>3</td><td>154</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Tuukka Rask (STL)</td><td>22</td><td>705</td></tr>
<tr><td>2</td><td>Matt Murray (PIT)</td><td>17</td><td>499</td></tr>
<tr><td>3</td><td>Kevin Poulin (VEG)</td><td>15</td><td>468</td></tr>
<tr><td>4</td><td>Simeon Varlamov (QUE)</td><td>14</td><td>456</td></tr>
<tr><td>5</td><td>Vitek Vanecek (VAN)</td><td>10</td><td>327</td></tr>
<tr><td>6</td><td>Corey Crawford (DAL)</td><td>11</td><td>325</td></tr>
<tr><td>7</td><td>Andrey Vasilevskiy (FLA)</td><td>9</td><td>304</td></tr>
<tr><td>8</td><td>Jack Campbell (NYR)</td><td>8</td><td>257</td></tr>
<tr><td>9</td><td>Jonathan Quick (PHI)</td><td>7</td><td>247</td></tr>
<tr><td>10</td><td>Ondrej Pavelec (DET)</td><td>7</td><td>240</td></tr>
<tr><td>11</td><td>John Gibson (TBL)</td><td>7</td><td>236</td></tr>
<tr><td>12</td><td>Michal Neuvirth (LOS)</td><td>6</td><td>218</td></tr>
<tr><td>13</td><td>Cam Ward (PIT)</td><td>7</td><td>205</td></tr>
<tr><td>14</td><td>Kari Lehtonen (QUE)</td><td>6</td><td>201</td></tr>
<tr><td>15</td><td>Jacob Markstrom (BUF)</td><td>5</td><td>192</td></tr>
<tr><td>16</td><td>James Reimer (CGY)</td><td>6</td><td>158</td></tr>
<tr><td>17</td><td>Jaroslav Halak (MTL)</td><td>3</td><td>101</td></tr>
<tr><td>18</td><td>Henrik Lundqvist (NYR)</td><td>3</td><td>88</td></tr>
<tr><td>19</td><td>Chase Marchand (SJS)</td><td>3</td><td>80</td></tr>
<tr><td>20</td><td>Darcy Kuemper (VAN)</td><td>3</td><td>79</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Tuukka Rask (STL)</td><td>22</td><td>2</td></tr>
<tr><td>2</td><td>Cam Ward (PIT)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Vitek Vanecek (VAN)</td><td>10</td><td>1</td></tr>
<tr><td>4</td><td>Simeon Varlamov (QUE)</td><td>14</td><td>1</td></tr>
<tr><td>5</td><td>Kevin Poulin (VEG)</td><td>15</td><td>1</td></tr>
<tr><td>6</td><td>Matt Murray (PIT)</td><td>17</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Tuukka Rask (STL)</td><td>22</td><td>16</td></tr>
<tr><td>2</td><td>Kevin Poulin (VEG)</td><td>15</td><td>11</td></tr>
<tr><td>3</td><td>Matt Murray (PIT)</td><td>17</td><td>10</td></tr>
<tr><td>4</td><td>Simeon Varlamov (QUE)</td><td>14</td><td>8</td></tr>
<tr><td>5</td><td>Andrey Vasilevskiy (FLA)</td><td>9</td><td>5</td></tr>
<tr><td>6</td><td>Jack Campbell (NYR)</td><td>8</td><td>4</td></tr>
<tr><td>7</td><td>Vitek Vanecek (VAN)</td><td>10</td><td>4</td></tr>
<tr><td>8</td><td>Corey Crawford (DAL)</td><td>11</td><td>4</td></tr>
<tr><td>9</td><td>Kari Lehtonen (QUE)</td><td>6</td><td>3</td></tr>
<tr><td>10</td><td>John Gibson (TBL)</td><td>7</td><td>3</td></tr>
<tr><td>11</td><td>Jonathan Quick (PHI)</td><td>7</td><td>3</td></tr>
<tr><td>12</td><td>Ondrej Pavelec (DET)</td><td>7</td><td>3</td></tr>
<tr><td>13</td><td>James Reimer (CGY)</td><td>6</td><td>2</td></tr>
<tr><td>14</td><td>Michal Neuvirth (LOS)</td><td>6</td><td>2</td></tr>
<tr><td>15</td><td>Cam Ward (PIT)</td><td>7</td><td>2</td></tr>
<tr><td>16</td><td>Henrik Lundqvist (NYR)</td><td>3</td><td>1</td></tr>
<tr><td>17</td><td>Chase Marchand (SJS)</td><td>3</td><td>1</td></tr>
<tr><td>18</td><td>Darcy Kuemper (VAN)</td><td>3</td><td>1</td></tr>
<tr><td>19</td><td>Jacob Markstrom (BUF)</td><td>5</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Corey Crawford (DAL)</td><td>11</td><td>7</td></tr>
<tr><td>2</td><td>Matt Murray (PIT)</td><td>17</td><td>6</td></tr>
<tr><td>3</td><td>Simeon Varlamov (QUE)</td><td>14</td><td>5</td></tr>
<tr><td>4</td><td>Cam Ward (PIT)</td><td>7</td><td>4</td></tr>
<tr><td>5</td><td>Jonathan Quick (PHI)</td><td>7</td><td>4</td></tr>
<tr><td>6</td><td>Vitek Vanecek (VAN)</td><td>10</td><td>4</td></tr>
<tr><td>7</td><td>Tuukka Rask (STL)</td><td>22</td><td>4</td></tr>
<tr><td>8</td><td>Jacob Markstrom (BUF)</td><td>5</td><td>3</td></tr>
<tr><td>9</td><td>James Reimer (CGY)</td><td>6</td><td>3</td></tr>
<tr><td>10</td><td>Jack Campbell (NYR)</td><td>8</td><td>3</td></tr>
<tr><td>11</td><td>Andrey Vasilevskiy (FLA)</td><td>9</td><td>3</td></tr>
<tr><td>12</td><td>Kevin Poulin (VEG)</td><td>15</td><td>3</td></tr>
<tr><td>13</td><td>Cory Schneider (SJS)</td><td>3</td><td>2</td></tr>
<tr><td>14</td><td>Jaroslav Halak (MTL)</td><td>3</td><td>2</td></tr>
<tr><td>15</td><td>Kari Lehtonen (QUE)</td><td>6</td><td>2</td></tr>
<tr><td>16</td><td>Michal Neuvirth (LOS)</td><td>6</td><td>2</td></tr>
<tr><td>17</td><td>John Gibson (TBL)</td><td>7</td><td>2</td></tr>
<tr><td>18</td><td>Ondrej Pavelec (DET)</td><td>7</td><td>2</td></tr>
<tr><td>19</td><td>Marek Mazanec (VEG)</td><td>2</td><td>1</td></tr>
<tr><td>20</td><td>Henrik Lundqvist (NYR)</td><td>3</td><td>1</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
