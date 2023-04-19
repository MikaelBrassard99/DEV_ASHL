<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Individual Leaders</title>
<script src="ASHL10-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.3.3 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL10-PLF.css" rel="stylesheet" type="text/css" />
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
<b>Minimum Games Played: 6</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Jakub Vrana (MTL)</td><td>19</td><td>10</td></tr>
<tr><td>2</td><td>Mitch Marner (NSH)</td><td>18</td><td>9</td></tr>
<tr><td>3</td><td>Filip Forsberg (MTL)</td><td>19</td><td>9</td></tr>
<tr><td>4</td><td>Oliver Bjorkstrand (NSH)</td><td>18</td><td>8</td></tr>
<tr><td>5</td><td>Ilya Mikheyev (CLB)</td><td>23</td><td>8</td></tr>
<tr><td>6</td><td>Johnny Hockey Gaudreau (CLB)</td><td>23</td><td>8</td></tr>
<tr><td>7</td><td>Vladimir Tarasenko (PIT)</td><td>8</td><td>7</td></tr>
<tr><td>8</td><td>John Tavares (ARZ)</td><td>11</td><td>7</td></tr>
<tr><td>9</td><td>Sam Reinhart (NSH)</td><td>17</td><td>7</td></tr>
<tr><td>10</td><td>Jonathan Toews (CHI)</td><td>19</td><td>7</td></tr>
<tr><td>11</td><td>Mikhail Grigorenko (CLB)</td><td>23</td><td>7</td></tr>
<tr><td>12</td><td>Andre Burakovsky (CLB)</td><td>23</td><td>7</td></tr>
<tr><td>13</td><td>Bryan Little (CAR)</td><td>7</td><td>6</td></tr>
<tr><td>14</td><td>Peter Trainor (NSH)</td><td>18</td><td>6</td></tr>
<tr><td>15</td><td>Johan Larsson (NSH)</td><td>18</td><td>6</td></tr>
<tr><td>16</td><td>David Backes (CHI)</td><td>19</td><td>6</td></tr>
<tr><td>17</td><td>Evgeny Dadonov (CHI)</td><td>19</td><td>6</td></tr>
<tr><td>18</td><td>Christian Dvorak (CLB)</td><td>19</td><td>6</td></tr>
<tr><td>19</td><td>Sidney Crosby (MTL)</td><td>19</td><td>6</td></tr>
<tr><td>20</td><td>Brent Seabrook (CLB)</td><td>23</td><td>6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Justin Faulk (NSH)</td><td>18</td><td>19</td></tr>
<tr><td>2</td><td>Alex Pietrangelo (MTL)</td><td>19</td><td>16</td></tr>
<tr><td>3</td><td>Cody Franson (CHI)</td><td>19</td><td>14</td></tr>
<tr><td>4</td><td>Nikita Nesterov (CLB)</td><td>23</td><td>14</td></tr>
<tr><td>5</td><td>John Carlson (BOS)</td><td>13</td><td>13</td></tr>
<tr><td>6</td><td>Tyson Barrie (NSH)</td><td>18</td><td>13</td></tr>
<tr><td>7</td><td>Mitch Marner (NSH)</td><td>18</td><td>11</td></tr>
<tr><td>8</td><td>Marc Staal (CHI)</td><td>19</td><td>11</td></tr>
<tr><td>9</td><td>Sidney Crosby (MTL)</td><td>19</td><td>11</td></tr>
<tr><td>10</td><td>Brent Seabrook (CLB)</td><td>23</td><td>11</td></tr>
<tr><td>11</td><td>Ilya Mikheyev (CLB)</td><td>23</td><td>11</td></tr>
<tr><td>12</td><td>Jonas Brodin (CLB)</td><td>23</td><td>11</td></tr>
<tr><td>13</td><td>Johnny Hockey Gaudreau (CLB)</td><td>23</td><td>11</td></tr>
<tr><td>14</td><td>Erik Karlsson (CHI)</td><td>11</td><td>10</td></tr>
<tr><td>15</td><td>Zach Bogosian (ARZ)</td><td>11</td><td>10</td></tr>
<tr><td>16</td><td>Sam Reinhart (NSH)</td><td>17</td><td>10</td></tr>
<tr><td>17</td><td>Dmitri Orlov (NSH)</td><td>18</td><td>10</td></tr>
<tr><td>18</td><td>Filip Forsberg (MTL)</td><td>19</td><td>10</td></tr>
<tr><td>19</td><td>Brandon Montour (MTL)</td><td>19</td><td>10</td></tr>
<tr><td>20</td><td>Andre Burakovsky (CLB)</td><td>23</td><td>10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Filip Forsberg (MTL)</td><td>19</td><td>80</td></tr>
<tr><td>2</td><td>Sidney Crosby (MTL)</td><td>19</td><td>77</td></tr>
<tr><td>3</td><td>Jonathan Toews (CHI)</td><td>19</td><td>76</td></tr>
<tr><td>4</td><td>Ryan Johansen (CLB)</td><td>23</td><td>76</td></tr>
<tr><td>5</td><td>Andre Burakovsky (CLB)</td><td>23</td><td>70</td></tr>
<tr><td>6</td><td>Mikhail Grigorenko (CLB)</td><td>23</td><td>68</td></tr>
<tr><td>7</td><td>Johnny Hockey Gaudreau (CLB)</td><td>23</td><td>64</td></tr>
<tr><td>8</td><td>Jakub Vrana (MTL)</td><td>19</td><td>63</td></tr>
<tr><td>9</td><td>Ilya Mikheyev (CLB)</td><td>23</td><td>62</td></tr>
<tr><td>10</td><td>Mitch Marner (NSH)</td><td>18</td><td>59</td></tr>
<tr><td>11</td><td>Mitch Holmberg (CHI)</td><td>19</td><td>55</td></tr>
<tr><td>12</td><td>Kirill Kaprizov (NSH)</td><td>18</td><td>53</td></tr>
<tr><td>13</td><td>Evgeny Dadonov (CHI)</td><td>19</td><td>52</td></tr>
<tr><td>14</td><td>Oliver Bjorkstrand (NSH)</td><td>18</td><td>51</td></tr>
<tr><td>15</td><td>Clayton Keller (SJS)</td><td>8</td><td>49</td></tr>
<tr><td>16</td><td>Steven Stamkos (ARZ)</td><td>11</td><td>47</td></tr>
<tr><td>17</td><td>David Backes (CHI)</td><td>19</td><td>47</td></tr>
<tr><td>18</td><td>Danton Heinen (MTL)</td><td>19</td><td>47</td></tr>
<tr><td>19</td><td>Brent Seabrook (CLB)</td><td>23</td><td>47</td></tr>
<tr><td>20</td><td>Christian Dvorak (CLB)</td><td>19</td><td>45</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Vladimir Tarasenko (PIT)</td><td>8</td><td>38,89%</td></tr>
<tr><td>2</td><td>Bryan Little (CAR)</td><td>7</td><td>27,27%</td></tr>
<tr><td>3</td><td>Jordan Weal (CAR)</td><td>7</td><td>25,00%</td></tr>
<tr><td>4</td><td>Adam Erne (VEG)</td><td>7</td><td>25,00%</td></tr>
<tr><td>5</td><td>Kyle Palmieri (CGY)</td><td>11</td><td>25,00%</td></tr>
<tr><td>6</td><td>Travis Hamonic (CGY)</td><td>11</td><td>23,81%</td></tr>
<tr><td>7</td><td>Darren Helm (NSH)</td><td>9</td><td>23,53%</td></tr>
<tr><td>8</td><td>Ryan Stanton (COL)</td><td>8</td><td>22,22%</td></tr>
<tr><td>9</td><td>Nolan Patrick (MTL)</td><td>8</td><td>22,22%</td></tr>
<tr><td>10</td><td>Hampus Lindholm (ARZ)</td><td>11</td><td>22,22%</td></tr>
<tr><td>11</td><td>Remi Elie (CLB)</td><td>17</td><td>22,22%</td></tr>
<tr><td>12</td><td>Morgan Klimchuk (VEG)</td><td>7</td><td>21,05%</td></tr>
<tr><td>13</td><td>Roman Josi (MTL)</td><td>19</td><td>20,00%</td></tr>
<tr><td>14</td><td>Jordan Staal (LOS)</td><td>8</td><td>19,23%</td></tr>
<tr><td>15</td><td>Brandon Montour (MTL)</td><td>19</td><td>19,23%</td></tr>
<tr><td>16</td><td>John Tavares (ARZ)</td><td>11</td><td>18,92%</td></tr>
<tr><td>17</td><td>Ryan Murray (PHI)</td><td>9</td><td>18,18%</td></tr>
<tr><td>18</td><td>Jacob De La Rose (WSH)</td><td>13</td><td>18,18%</td></tr>
<tr><td>19</td><td>Mikhail Sergachev (WSH)</td><td>13</td><td>18,18%</td></tr>
<tr><td>20</td><td>Maxwell Reinhart (CAR)</td><td>7</td><td>17,65%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Mitch Marner (NSH)</td><td>18</td><td>9-11-20</td></tr>
<tr><td>2</td><td>Sam Reinhart (NSH)</td><td>17</td><td>7-10-17</td></tr>
<tr><td>3</td><td>Andre Burakovsky (CLB)</td><td>23</td><td>7-10-17</td></tr>
<tr><td>4</td><td>Sidney Crosby (MTL)</td><td>19</td><td>6-11-17</td></tr>
<tr><td>5</td><td>Jonathan Toews (CHI)</td><td>19</td><td>7-9-16</td></tr>
<tr><td>6</td><td>Johan Larsson (NSH)</td><td>18</td><td>6-8-14</td></tr>
<tr><td>7</td><td>Christian Dvorak (CLB)</td><td>19</td><td>6-8-14</td></tr>
<tr><td>8</td><td>Ryan Johansen (CLB)</td><td>23</td><td>5-8-13</td></tr>
<tr><td>9</td><td>Derick Brassard (CHI)</td><td>19</td><td>4-9-13</td></tr>
<tr><td>10</td><td>Mikhail Grigorenko (CLB)</td><td>23</td><td>7-5-12</td></tr>
<tr><td>11</td><td>Peter Trainor (NSH)</td><td>18</td><td>6-6-12</td></tr>
<tr><td>12</td><td>John Tavares (ARZ)</td><td>11</td><td>7-4-11</td></tr>
<tr><td>13</td><td>Bryan Little (CAR)</td><td>7</td><td>6-5-11</td></tr>
<tr><td>14</td><td>Shawn Matthias (CLB)</td><td>23</td><td>6-5-11</td></tr>
<tr><td>15</td><td>Danton Heinen (MTL)</td><td>19</td><td>3-8-11</td></tr>
<tr><td>16</td><td>Vladimir Tarasenko (PIT)</td><td>8</td><td>7-3-10</td></tr>
<tr><td>17</td><td>Jacob De La Rose (WSH)</td><td>13</td><td>4-6-10</td></tr>
<tr><td>18</td><td>Mikael Backlund (NSH)</td><td>18</td><td>2-8-10</td></tr>
<tr><td>19</td><td>David Backes (CHI)</td><td>19</td><td>6-3-9</td></tr>
<tr><td>20</td><td>Michael Dal Colle (WSH)</td><td>13</td><td>4-5-9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Filip Forsberg (MTL)</td><td>19</td><td>9-10-19</td></tr>
<tr><td>2</td><td>Johnny Hockey Gaudreau (CLB)</td><td>23</td><td>8-11-19</td></tr>
<tr><td>3</td><td>Jakub Vrana (MTL)</td><td>19</td><td>10-8-18</td></tr>
<tr><td>4</td><td>Andre Burakovsky (CLB)</td><td>23</td><td>7-10-17</td></tr>
<tr><td>5</td><td>Johan Larsson (NSH)</td><td>18</td><td>6-8-14</td></tr>
<tr><td>6</td><td>Christian Dvorak (CLB)</td><td>19</td><td>6-8-14</td></tr>
<tr><td>7</td><td>Oliver Bjorkstrand (NSH)</td><td>18</td><td>8-5-13</td></tr>
<tr><td>8</td><td>Derick Brassard (CHI)</td><td>19</td><td>4-9-13</td></tr>
<tr><td>9</td><td>Mikhail Grigorenko (CLB)</td><td>23</td><td>7-5-12</td></tr>
<tr><td>10</td><td>Peter Trainor (NSH)</td><td>18</td><td>6-6-12</td></tr>
<tr><td>11</td><td>Oskar Lindblom (ARZ)</td><td>11</td><td>4-8-12</td></tr>
<tr><td>12</td><td>Bryan Little (CAR)</td><td>7</td><td>6-5-11</td></tr>
<tr><td>13</td><td>Evgeny Dadonov (CHI)</td><td>19</td><td>6-5-11</td></tr>
<tr><td>14</td><td>Shawn Matthias (CLB)</td><td>23</td><td>6-5-11</td></tr>
<tr><td>15</td><td>Danton Heinen (MTL)</td><td>19</td><td>3-8-11</td></tr>
<tr><td>16</td><td>Vladimir Tarasenko (PIT)</td><td>8</td><td>7-3-10</td></tr>
<tr><td>17</td><td>Jacob De La Rose (WSH)</td><td>13</td><td>4-6-10</td></tr>
<tr><td>18</td><td>Valeri Nichushkin (VEG)</td><td>7</td><td>3-7-10</td></tr>
<tr><td>19</td><td>Anthony Duclair (MTL)</td><td>19</td><td>3-7-10</td></tr>
<tr><td>20</td><td>Kirill Kaprizov (NSH)</td><td>18</td><td>5-4-9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Mitch Marner (NSH)</td><td>18</td><td>9-11-20</td></tr>
<tr><td>2</td><td>Filip Forsberg (MTL)</td><td>19</td><td>9-10-19</td></tr>
<tr><td>3</td><td>Ilya Mikheyev (CLB)</td><td>23</td><td>8-11-19</td></tr>
<tr><td>4</td><td>Jakub Vrana (MTL)</td><td>19</td><td>10-8-18</td></tr>
<tr><td>5</td><td>Sam Reinhart (NSH)</td><td>17</td><td>7-10-17</td></tr>
<tr><td>6</td><td>Johan Larsson (NSH)</td><td>18</td><td>6-8-14</td></tr>
<tr><td>7</td><td>Oliver Bjorkstrand (NSH)</td><td>18</td><td>8-5-13</td></tr>
<tr><td>8</td><td>Derick Brassard (CHI)</td><td>19</td><td>4-9-13</td></tr>
<tr><td>9</td><td>Mikhail Grigorenko (CLB)</td><td>23</td><td>7-5-12</td></tr>
<tr><td>10</td><td>Bryan Little (CAR)</td><td>7</td><td>6-5-11</td></tr>
<tr><td>11</td><td>Evgeny Dadonov (CHI)</td><td>19</td><td>6-5-11</td></tr>
<tr><td>12</td><td>Mitch Holmberg (CHI)</td><td>19</td><td>4-7-11</td></tr>
<tr><td>13</td><td>Danton Heinen (MTL)</td><td>19</td><td>3-8-11</td></tr>
<tr><td>14</td><td>Vladimir Tarasenko (PIT)</td><td>8</td><td>7-3-10</td></tr>
<tr><td>15</td><td>Valeri Nichushkin (VEG)</td><td>7</td><td>3-7-10</td></tr>
<tr><td>16</td><td>Anthony Duclair (MTL)</td><td>19</td><td>3-7-10</td></tr>
<tr><td>17</td><td>David Backes (CHI)</td><td>19</td><td>6-3-9</td></tr>
<tr><td>18</td><td>Kirill Kaprizov (NSH)</td><td>18</td><td>5-4-9</td></tr>
<tr><td>19</td><td>Nino Niederreiter (WSH)</td><td>13</td><td>4-5-9</td></tr>
<tr><td>20</td><td>William Nylander (BOS)</td><td>13</td><td>4-4-8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Justin Faulk (NSH)</td><td>18</td><td>2-19-21</td></tr>
<tr><td>2</td><td>Alex Pietrangelo (MTL)</td><td>19</td><td>4-16-20</td></tr>
<tr><td>3</td><td>Brent Seabrook (CLB)</td><td>23</td><td>6-11-17</td></tr>
<tr><td>4</td><td>Cody Franson (CHI)</td><td>19</td><td>2-14-16</td></tr>
<tr><td>5</td><td>Brandon Montour (MTL)</td><td>19</td><td>5-10-15</td></tr>
<tr><td>6</td><td>Marc Staal (CHI)</td><td>19</td><td>4-11-15</td></tr>
<tr><td>7</td><td>John Carlson (BOS)</td><td>13</td><td>2-13-15</td></tr>
<tr><td>8</td><td>Tyson Barrie (NSH)</td><td>18</td><td>2-13-15</td></tr>
<tr><td>9</td><td>Nikita Nesterov (CLB)</td><td>23</td><td>1-14-15</td></tr>
<tr><td>10</td><td>Dmitri Orlov (NSH)</td><td>18</td><td>3-10-13</td></tr>
<tr><td>11</td><td>Jonas Brodin (CLB)</td><td>23</td><td>1-11-12</td></tr>
<tr><td>12</td><td>Alec Martinez (NSH)</td><td>18</td><td>2-9-11</td></tr>
<tr><td>13</td><td>Calvin de Haan (CLB)</td><td>23</td><td>2-9-11</td></tr>
<tr><td>14</td><td>Erik Karlsson (CHI)</td><td>11</td><td>1-10-11</td></tr>
<tr><td>15</td><td>Zach Bogosian (ARZ)</td><td>11</td><td>1-10-11</td></tr>
<tr><td>16</td><td>Hampus Lindholm (ARZ)</td><td>11</td><td>4-6-10</td></tr>
<tr><td>17</td><td>Charles McAvoy (BOS)</td><td>13</td><td>3-7-10</td></tr>
<tr><td>18</td><td>Colton Parayko (WSH)</td><td>13</td><td>2-8-10</td></tr>
<tr><td>19</td><td>Mirco Mueller (CLB)</td><td>23</td><td>2-8-10</td></tr>
<tr><td>20</td><td>Mikhail Sergachev (WSH)</td><td>13</td><td>4-5-9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Stephen Weiss (PIT)</td><td>8</td><td>1,83</td></tr>
<tr><td>2</td><td>Bryan Little (CAR)</td><td>7</td><td>1,57</td></tr>
<tr><td>3</td><td>Valeri Nichushkin (VEG)</td><td>7</td><td>1,47</td></tr>
<tr><td>4</td><td>Brock McGinn (SJS)</td><td>8</td><td>1,41</td></tr>
<tr><td>5</td><td>Wayne Simmonds (PIT)</td><td>8</td><td>1,28</td></tr>
<tr><td>6</td><td>Kevin Fiala (LOS)</td><td>8</td><td>1,24</td></tr>
<tr><td>7</td><td>Mark Barberio (CAR)</td><td>7</td><td>1,19</td></tr>
<tr><td>8</td><td>Mitch Marner (NSH)</td><td>18</td><td>1,16</td></tr>
<tr><td>9</td><td>Vladimir Tarasenko (PIT)</td><td>8</td><td>1,15</td></tr>
<tr><td>10</td><td>Corey Perry (LOS)</td><td>8</td><td>1,14</td></tr>
<tr><td>11</td><td>Oskar Lindblom (ARZ)</td><td>11</td><td>1,10</td></tr>
<tr><td>12</td><td>Sam Reinhart (NSH)</td><td>17</td><td>1,08</td></tr>
<tr><td>13</td><td>Filip Forsberg (MTL)</td><td>19</td><td>1,08</td></tr>
<tr><td>14</td><td>Erik Karlsson (CHI)</td><td>11</td><td>1,04</td></tr>
<tr><td>15</td><td>Justin Faulk (NSH)</td><td>18</td><td>1,03</td></tr>
<tr><td>16</td><td>Darren Helm (NSH)</td><td>9</td><td>1,03</td></tr>
<tr><td>17</td><td>Ben Hutton (LOS)</td><td>8</td><td>1,03</td></tr>
<tr><td>18</td><td>Marko Dano (BOS)</td><td>13</td><td>0,99</td></tr>
<tr><td>19</td><td>Mark Pysyk (LOS)</td><td>8</td><td>0,97</td></tr>
<tr><td>20</td><td>John Tavares (ARZ)</td><td>11</td><td>0,97</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Jordan Weal (CAR)</td><td>7</td><td>62,07%</td></tr>
<tr><td>2</td><td>Evgeni Malkin (CGY)</td><td>11</td><td>59,21%</td></tr>
<tr><td>3</td><td>Nick Shore (PHI)</td><td>9</td><td>58,49%</td></tr>
<tr><td>4</td><td>Pierre-Luc Dubois (CGY)</td><td>11</td><td>58,14%</td></tr>
<tr><td>5</td><td>Josh Bailey (BOS)</td><td>13</td><td>58,00%</td></tr>
<tr><td>6</td><td>Brad Marchand (BOS)</td><td>13</td><td>57,45%</td></tr>
<tr><td>7</td><td>Jordan Staal (LOS)</td><td>8</td><td>56,82%</td></tr>
<tr><td>8</td><td>Ryan Nugent-Hopkins (PHI)</td><td>9</td><td>56,31%</td></tr>
<tr><td>9</td><td>Radek Faksa (SJS)</td><td>8</td><td>56,16%</td></tr>
<tr><td>10</td><td>Tyler Johnson (CAR)</td><td>7</td><td>55,90%</td></tr>
<tr><td>11</td><td>Anze Kopitar (LOS)</td><td>8</td><td>55,56%</td></tr>
<tr><td>12</td><td>Brock Nelson (VEG)</td><td>7</td><td>55,00%</td></tr>
<tr><td>13</td><td>Sidney Crosby (MTL)</td><td>19</td><td>54,98%</td></tr>
<tr><td>14</td><td>Jacob Josefson (SJS)</td><td>8</td><td>54,71%</td></tr>
<tr><td>15</td><td>Shawn Matthias (CLB)</td><td>23</td><td>54,66%</td></tr>
<tr><td>16</td><td>Marcus Kruger (VEG)</td><td>7</td><td>54,55%</td></tr>
<tr><td>17</td><td>Evgeny Grachev (COL)</td><td>8</td><td>54,27%</td></tr>
<tr><td>18</td><td>Freddie Hamilton (NSH)</td><td>18</td><td>54,17%</td></tr>
<tr><td>19</td><td>Jonathan Toews (CHI)</td><td>19</td><td>53,94%</td></tr>
<tr><td>20</td><td>John Tavares (ARZ)</td><td>11</td><td>53,87%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Justin Faulk (NSH)</td><td>18</td><td>16</td></tr>
<tr><td>2</td><td>Tyson Barrie (NSH)</td><td>18</td><td>15</td></tr>
<tr><td>3</td><td>Shawn Matthias (CLB)</td><td>23</td><td>12</td></tr>
<tr><td>4</td><td>Bryan Little (CAR)</td><td>7</td><td>11</td></tr>
<tr><td>5</td><td>Loui Eriksson (CAR)</td><td>7</td><td>11</td></tr>
<tr><td>6</td><td>Mitch Marner (NSH)</td><td>18</td><td>11</td></tr>
<tr><td>7</td><td>Peter Trainor (NSH)</td><td>18</td><td>11</td></tr>
<tr><td>8</td><td>Oliver Bjorkstrand (NSH)</td><td>18</td><td>11</td></tr>
<tr><td>9</td><td>Milan Lucic (CAR)</td><td>7</td><td>10</td></tr>
<tr><td>10</td><td>Olli Maatta (BOS)</td><td>13</td><td>10</td></tr>
<tr><td>11</td><td>Brett Pollock (NSH)</td><td>18</td><td>10</td></tr>
<tr><td>12</td><td>Nikita Nesterov (CLB)</td><td>23</td><td>9</td></tr>
<tr><td>13</td><td>Darren Helm (NSH)</td><td>9</td><td>8</td></tr>
<tr><td>14</td><td>Marc Staal (CHI)</td><td>19</td><td>8</td></tr>
<tr><td>15</td><td>Nikita Tryamkin (CLB)</td><td>19</td><td>8</td></tr>
<tr><td>16</td><td>Mitch Holmberg (CHI)</td><td>19</td><td>8</td></tr>
<tr><td>17</td><td>Michael Chaput (CLB)</td><td>23</td><td>8</td></tr>
<tr><td>18</td><td>Barclay Goodrow (CLB)</td><td>23</td><td>8</td></tr>
<tr><td>19</td><td>Jason Zucker (COL)</td><td>8</td><td>7</td></tr>
<tr><td>20</td><td>John Tavares (ARZ)</td><td>11</td><td>7</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Marc Staal (CHI)</td><td>19</td><td>34</td></tr>
<tr><td>2</td><td>Brent Seabrook (CLB)</td><td>23</td><td>25</td></tr>
<tr><td>3</td><td>Charles McAvoy (BOS)</td><td>13</td><td>24</td></tr>
<tr><td>4</td><td>Nikita Tryamkin (CLB)</td><td>19</td><td>24</td></tr>
<tr><td>5</td><td>Derrick Pouliot (BOS)</td><td>13</td><td>22</td></tr>
<tr><td>6</td><td>Anthony Mantha (LOS)</td><td>8</td><td>20</td></tr>
<tr><td>7</td><td>Travis Hamonic (CGY)</td><td>11</td><td>20</td></tr>
<tr><td>8</td><td>Marc-Andre Bourdon (NSH)</td><td>18</td><td>20</td></tr>
<tr><td>9</td><td>Brandon Montour (MTL)</td><td>19</td><td>20</td></tr>
<tr><td>10</td><td>Tanner Pearson (STL)</td><td>3</td><td>19</td></tr>
<tr><td>11</td><td>Milan Lucic (CAR)</td><td>7</td><td>19</td></tr>
<tr><td>12</td><td>Brad Marchand (BOS)</td><td>13</td><td>18</td></tr>
<tr><td>13</td><td>Colton Parayko (WSH)</td><td>13</td><td>18</td></tr>
<tr><td>14</td><td>Michael Dal Colle (WSH)</td><td>13</td><td>18</td></tr>
<tr><td>15</td><td>Jan Rutta (MTL)</td><td>19</td><td>18</td></tr>
<tr><td>16</td><td>David Savard (CHI)</td><td>19</td><td>18</td></tr>
<tr><td>17</td><td>Dustin Byfuglien (COL)</td><td>8</td><td>17</td></tr>
<tr><td>18</td><td>Alexander Edler (OTT)</td><td>7</td><td>16</td></tr>
<tr><td>19</td><td>Michael Del Zotto (CGY)</td><td>11</td><td>16</td></tr>
<tr><td>20</td><td>Jamie Benn (BOS)</td><td>13</td><td>16</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Marc Staal (CHI)</td><td>19</td><td>38</td></tr>
<tr><td>2</td><td>Calvin de Haan (CLB)</td><td>23</td><td>37</td></tr>
<tr><td>3</td><td>Jonas Brodin (CLB)</td><td>23</td><td>35</td></tr>
<tr><td>4</td><td>Alex Pietrangelo (MTL)</td><td>19</td><td>33</td></tr>
<tr><td>5</td><td>Brent Seabrook (CLB)</td><td>23</td><td>32</td></tr>
<tr><td>6</td><td>Mirco Mueller (CLB)</td><td>23</td><td>32</td></tr>
<tr><td>7</td><td>Mikhail Sergachev (WSH)</td><td>13</td><td>30</td></tr>
<tr><td>8</td><td>Cody Franson (CHI)</td><td>19</td><td>28</td></tr>
<tr><td>9</td><td>Nikita Tryamkin (CLB)</td><td>19</td><td>28</td></tr>
<tr><td>10</td><td>Brandon Montour (MTL)</td><td>19</td><td>28</td></tr>
<tr><td>11</td><td>Jan Rutta (MTL)</td><td>19</td><td>27</td></tr>
<tr><td>12</td><td>Luca Sbisa (CHI)</td><td>18</td><td>26</td></tr>
<tr><td>13</td><td>Justin Faulk (NSH)</td><td>18</td><td>26</td></tr>
<tr><td>14</td><td>John Carlson (BOS)</td><td>13</td><td>25</td></tr>
<tr><td>15</td><td>Zach Bogosian (ARZ)</td><td>11</td><td>23</td></tr>
<tr><td>16</td><td>Julius Honka (MTL)</td><td>19</td><td>23</td></tr>
<tr><td>17</td><td>David Savard (CHI)</td><td>19</td><td>22</td></tr>
<tr><td>18</td><td>Nikita Nesterov (CLB)</td><td>23</td><td>22</td></tr>
<tr><td>19</td><td>Oliver Ekman-Larsson (CGY)</td><td>11</td><td>21</td></tr>
<tr><td>20</td><td>Marco Scandella (BOS)</td><td>13</td><td>21</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Oskar Lindblom (ARZ)</td><td>11</td><td>4-8-12</td></tr>
<tr><td>2</td><td>Mirco Mueller (CLB)</td><td>23</td><td>2-8-10</td></tr>
<tr><td>3</td><td>Pavel Zacha (WSH)</td><td>13</td><td>4-4-8</td></tr>
<tr><td>4</td><td>Nikita Tryamkin (CLB)</td><td>19</td><td>1-7-8</td></tr>
<tr><td>5</td><td>Greg Chase (CHI)</td><td>19</td><td>3-4-7</td></tr>
<tr><td>6</td><td>John Nyberg (CHI)</td><td>19</td><td>1-5-6</td></tr>
<tr><td>7</td><td>Gustav Olofsson (COL)</td><td>8</td><td>0-6-6</td></tr>
<tr><td>8</td><td>Remi Elie (CLB)</td><td>17</td><td>4-1-5</td></tr>
<tr><td>9</td><td>Sam Lafferty (MTL)</td><td>19</td><td>4-1-5</td></tr>
<tr><td>10</td><td>Casey Mittelstadt (VEG)</td><td>5</td><td>3-2-5</td></tr>
<tr><td>11</td><td>A.J. Greer (SJS)</td><td>8</td><td>2-2-4</td></tr>
<tr><td>12</td><td>Sergey Tolchinsky (COL)</td><td>8</td><td>2-2-4</td></tr>
<tr><td>13</td><td>Rasmus Andersson (LOS)</td><td>8</td><td>1-3-4</td></tr>
<tr><td>14</td><td>Travis Dermott (NJD)</td><td>2</td><td>1-2-3</td></tr>
<tr><td>15</td><td>Trevor Murphy (BUF)</td><td>5</td><td>1-2-3</td></tr>
<tr><td>16</td><td>Taro Hirose (NSH)</td><td>10</td><td>1-2-3</td></tr>
<tr><td>17</td><td>Mario Ferraro (BOS)</td><td>13</td><td>1-2-3</td></tr>
<tr><td>18</td><td>Jonas Siegenthaler (MTL)</td><td>12</td><td>0-3-3</td></tr>
<tr><td>19</td><td>Dominik Kubalik (NYI)</td><td>5</td><td>2-0-2</td></tr>
<tr><td>20</td><td>Oliwer Kaski (TOR)</td><td>4</td><td>1-1-2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Ryan Johansen (CLB)</td><td>23</td><td>75</td></tr>
<tr><td>2</td><td>Brent Seabrook (CLB)</td><td>23</td><td>64</td></tr>
<tr><td>3</td><td>William Carrier (CHI)</td><td>19</td><td>47</td></tr>
<tr><td>4</td><td>Andre Burakovsky (CLB)</td><td>23</td><td>45</td></tr>
<tr><td>5</td><td>Nikita Tryamkin (CLB)</td><td>19</td><td>44</td></tr>
<tr><td>6</td><td>Marc Staal (CHI)</td><td>19</td><td>43</td></tr>
<tr><td>7</td><td>Michael Dal Colle (WSH)</td><td>13</td><td>42</td></tr>
<tr><td>8</td><td>David Backes (CHI)</td><td>19</td><td>42</td></tr>
<tr><td>9</td><td>Luca Sbisa (CHI)</td><td>18</td><td>38</td></tr>
<tr><td>10</td><td>Charles McAvoy (BOS)</td><td>13</td><td>37</td></tr>
<tr><td>11</td><td>Filip Forsberg (MTL)</td><td>19</td><td>37</td></tr>
<tr><td>12</td><td>Brad Marchand (BOS)</td><td>13</td><td>36</td></tr>
<tr><td>13</td><td>Jan Rutta (MTL)</td><td>19</td><td>35</td></tr>
<tr><td>14</td><td>Travis Hamonic (CGY)</td><td>11</td><td>34</td></tr>
<tr><td>15</td><td>Zach Bogosian (ARZ)</td><td>11</td><td>33</td></tr>
<tr><td>16</td><td>Marc-Andre Bourdon (NSH)</td><td>18</td><td>33</td></tr>
<tr><td>17</td><td>Johan Larsson (NSH)</td><td>18</td><td>33</td></tr>
<tr><td>18</td><td>Brett Pollock (NSH)</td><td>18</td><td>33</td></tr>
<tr><td>19</td><td>Nikolay Prokhorkin (CHI)</td><td>19</td><td>32</td></tr>
<tr><td>20</td><td>Samuel Morin (SJS)</td><td>8</td><td>31</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Brandon Montour (MTL)</td><td>19</td><td>5</td></tr>
<tr><td>2</td><td>Vladimir Tarasenko (PIT)</td><td>8</td><td>4</td></tr>
<tr><td>3</td><td>Travis Hamonic (CGY)</td><td>11</td><td>4</td></tr>
<tr><td>4</td><td>Jakub Vrana (MTL)</td><td>19</td><td>4</td></tr>
<tr><td>5</td><td>Sam Bennett (OTT)</td><td>7</td><td>3</td></tr>
<tr><td>6</td><td>Drew Doughty (LOS)</td><td>8</td><td>3</td></tr>
<tr><td>7</td><td>Mark Pysyk (LOS)</td><td>8</td><td>3</td></tr>
<tr><td>8</td><td>Charles McAvoy (BOS)</td><td>13</td><td>3</td></tr>
<tr><td>9</td><td>Johan Larsson (NSH)</td><td>18</td><td>3</td></tr>
<tr><td>10</td><td>Oliver Bjorkstrand (NSH)</td><td>18</td><td>3</td></tr>
<tr><td>11</td><td>Alex Pietrangelo (MTL)</td><td>19</td><td>3</td></tr>
<tr><td>12</td><td>Evgeny Dadonov (CHI)</td><td>19</td><td>3</td></tr>
<tr><td>13</td><td>Filip Forsberg (MTL)</td><td>19</td><td>3</td></tr>
<tr><td>14</td><td>Brent Seabrook (CLB)</td><td>23</td><td>3</td></tr>
<tr><td>15</td><td>Johnny Hockey Gaudreau (CLB)</td><td>23</td><td>3</td></tr>
<tr><td>16</td><td>Kailer Yamamoto (EDM)</td><td>3</td><td>2</td></tr>
<tr><td>17</td><td>Nathan MacKinnon (STL)</td><td>3</td><td>2</td></tr>
<tr><td>18</td><td>Duncan Siemens (DAL)</td><td>5</td><td>2</td></tr>
<tr><td>19</td><td>Seth Jones (NYI)</td><td>5</td><td>2</td></tr>
<tr><td>20</td><td>Jakob Chychrun (OTT)</td><td>7</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Remi Elie (CLB)</td><td>17</td><td>2</td></tr>
<tr><td>2</td><td>Brayden Point (NYR)</td><td>3</td><td>1</td></tr>
<tr><td>3</td><td>Sean Couturier (DAL)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Jordan Weal (CAR)</td><td>7</td><td>1</td></tr>
<tr><td>5</td><td>Jonathan Drouin (OTT)</td><td>7</td><td>1</td></tr>
<tr><td>6</td><td>Brett Ritchie (LOS)</td><td>8</td><td>1</td></tr>
<tr><td>7</td><td>Damon Severson (CGY)</td><td>11</td><td>1</td></tr>
<tr><td>8</td><td>Mario Ferraro (BOS)</td><td>13</td><td>1</td></tr>
<tr><td>9</td><td>Greg Chase (CHI)</td><td>19</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Sam Reinhart (NSH)</td><td>17</td><td>3</td></tr>
<tr><td>2</td><td>Johan Larsson (NSH)</td><td>18</td><td>3</td></tr>
<tr><td>3</td><td>Jordan Weal (CAR)</td><td>7</td><td>2</td></tr>
<tr><td>4</td><td>Morgan Klimchuk (VEG)</td><td>7</td><td>2</td></tr>
<tr><td>5</td><td>Vladimir Tarasenko (PIT)</td><td>8</td><td>2</td></tr>
<tr><td>6</td><td>Mark Pysyk (LOS)</td><td>8</td><td>2</td></tr>
<tr><td>7</td><td>Claude Giroux (PHI)</td><td>9</td><td>2</td></tr>
<tr><td>8</td><td>John Tavares (ARZ)</td><td>11</td><td>2</td></tr>
<tr><td>9</td><td>Teuvo Teravainen (CGY)</td><td>11</td><td>2</td></tr>
<tr><td>10</td><td>Brett Pollock (NSH)</td><td>18</td><td>2</td></tr>
<tr><td>11</td><td>Jakub Vrana (MTL)</td><td>19</td><td>2</td></tr>
<tr><td>12</td><td>William Carrier (CHI)</td><td>19</td><td>2</td></tr>
<tr><td>13</td><td>Brandon Montour (MTL)</td><td>19</td><td>2</td></tr>
<tr><td>14</td><td>Conor Sheary (CLB)</td><td>23</td><td>2</td></tr>
<tr><td>15</td><td>Ilya Mikheyev (CLB)</td><td>23</td><td>2</td></tr>
<tr><td>16</td><td>Shawn Matthias (CLB)</td><td>23</td><td>2</td></tr>
<tr><td>17</td><td>Barclay Goodrow (CLB)</td><td>23</td><td>2</td></tr>
<tr><td>18</td><td>Dmitri Kulikov (WPG)</td><td>4</td><td>1</td></tr>
<tr><td>19</td><td>James Neal (VAN)</td><td>4</td><td>1</td></tr>
<tr><td>20</td><td>Jean-Gabriel Pageau (TOR)</td><td>4</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Logan Shaw (WPG)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Jakub Voracek (DAL)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Michael Grabner (BUF)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Tyler Motte (QUE)</td><td>5</td><td>1</td></tr>
<tr><td>5</td><td>Vyacheslav Voynov (DET)</td><td>5</td><td>1</td></tr>
<tr><td>6</td><td>Zach Sanford (FLA)</td><td>5</td><td>1</td></tr>
<tr><td>7</td><td>Bryan Little (CAR)</td><td>7</td><td>1</td></tr>
<tr><td>8</td><td>Cal Clutterbuck (CAR)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>Jamie McBain (OTT)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Justin Schultz (VEG)</td><td>7</td><td>1</td></tr>
<tr><td>11</td><td>Corey Perry (LOS)</td><td>8</td><td>1</td></tr>
<tr><td>12</td><td>Dustin Byfuglien (COL)</td><td>8</td><td>1</td></tr>
<tr><td>13</td><td>Wayne Simmonds (PIT)</td><td>8</td><td>1</td></tr>
<tr><td>14</td><td>Curtis Lazar (PHI)</td><td>9</td><td>1</td></tr>
<tr><td>15</td><td>Hampus Lindholm (ARZ)</td><td>11</td><td>1</td></tr>
<tr><td>16</td><td>Nino Niederreiter (WSH)</td><td>13</td><td>1</td></tr>
<tr><td>17</td><td>Michael Dal Colle (WSH)</td><td>13</td><td>1</td></tr>
<tr><td>18</td><td>Charles McAvoy (BOS)</td><td>13</td><td>1</td></tr>
<tr><td>19</td><td>Rickard Rakell (BOS)</td><td>13</td><td>1</td></tr>
<tr><td>20</td><td>Ty Rattie (WSH)</td><td>13</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Bryan Little (CAR)</td><td>7</td><td>1</td></tr>
<tr><td>2</td><td>Devante Smith-Pelly (OTT)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Radek Faksa (SJS)</td><td>8</td><td>1</td></tr>
<tr><td>4</td><td>Christian Dvorak (CLB)</td><td>19</td><td>1</td></tr>
<tr><td>5</td><td>Mirco Mueller (CLB)</td><td>23</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Brent Seabrook (CLB)</td><td>23</td><td>539</td></tr>
<tr><td>2</td><td>Jonas Brodin (CLB)</td><td>23</td><td>513</td></tr>
<tr><td>3</td><td>Johnny Hockey Gaudreau (CLB)</td><td>23</td><td>479</td></tr>
<tr><td>4</td><td>Alex Pietrangelo (MTL)</td><td>19</td><td>472</td></tr>
<tr><td>5</td><td>Calvin de Haan (CLB)</td><td>23</td><td>467</td></tr>
<tr><td>6</td><td>Ryan Johansen (CLB)</td><td>23</td><td>463</td></tr>
<tr><td>7</td><td>Brandon Montour (MTL)</td><td>19</td><td>460</td></tr>
<tr><td>8</td><td>Nikita Nesterov (CLB)</td><td>23</td><td>459</td></tr>
<tr><td>9</td><td>Ilya Mikheyev (CLB)</td><td>23</td><td>451</td></tr>
<tr><td>10</td><td>Mikhail Grigorenko (CLB)</td><td>23</td><td>447</td></tr>
<tr><td>11</td><td>Andre Burakovsky (CLB)</td><td>23</td><td>444</td></tr>
<tr><td>12</td><td>Jonathan Toews (CHI)</td><td>19</td><td>444</td></tr>
<tr><td>13</td><td>Cody Franson (CHI)</td><td>19</td><td>434</td></tr>
<tr><td>14</td><td>Marc Staal (CHI)</td><td>19</td><td>429</td></tr>
<tr><td>15</td><td>Justin Faulk (NSH)</td><td>18</td><td>407</td></tr>
<tr><td>16</td><td>Sidney Crosby (MTL)</td><td>19</td><td>396</td></tr>
<tr><td>17</td><td>Mirco Mueller (CLB)</td><td>23</td><td>395</td></tr>
<tr><td>18</td><td>David Backes (CHI)</td><td>19</td><td>392</td></tr>
<tr><td>19</td><td>Jakub Vrana (MTL)</td><td>19</td><td>392</td></tr>
<tr><td>20</td><td>Roman Josi (MTL)</td><td>19</td><td>385</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Bryan Little (CAR)</td><td>7</td><td>1</td></tr>
<tr><td>2</td><td>Loui Eriksson (CAR)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Robby Fabbri (COL)</td><td>8</td><td>1</td></tr>
<tr><td>4</td><td>John Tavares (ARZ)</td><td>11</td><td>1</td></tr>
<tr><td>5</td><td>Mitch Marner (NSH)</td><td>18</td><td>1</td></tr>
<tr><td>6</td><td>Peter Trainor (NSH)</td><td>18</td><td>1</td></tr>
<tr><td>7</td><td>Oliver Bjorkstrand (NSH)</td><td>18</td><td>1</td></tr>
<tr><td>8</td><td>Filip Forsberg (MTL)</td><td>19</td><td>1</td></tr>
<tr><td>9</td><td>Ilya Mikheyev (CLB)</td><td>23</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Aleksander Barkov (NYR)</td><td>3</td><td>2</td></tr>
<tr><td>2</td><td>Émile Poirier (ANH)</td><td>3</td><td>2</td></tr>
<tr><td>3</td><td>Jesper Bratt (NYR)</td><td>3</td><td>2</td></tr>
<tr><td>4</td><td>Vince Hinostroza (NYI)</td><td>5</td><td>2</td></tr>
<tr><td>5</td><td>Taylor Leier (COL)</td><td>8</td><td>2</td></tr>
<tr><td>6</td><td>Claude Giroux (PHI)</td><td>9</td><td>2</td></tr>
<tr><td>7</td><td>Curtis Lazar (PHI)</td><td>9</td><td>2</td></tr>
<tr><td>8</td><td>Mikhail Sergachev (WSH)</td><td>13</td><td>2</td></tr>
<tr><td>9</td><td>Thomas Hickey (NJD)</td><td>1</td><td>1</td></tr>
<tr><td>10</td><td>Alexander Semin (NJD)</td><td>3</td><td>1</td></tr>
<tr><td>11</td><td>Bryan Rust (TBL)</td><td>3</td><td>1</td></tr>
<tr><td>12</td><td>Dustin Brown (ANH)</td><td>3</td><td>1</td></tr>
<tr><td>13</td><td>Brendan Lemieux (EDM)</td><td>3</td><td>1</td></tr>
<tr><td>14</td><td>Ryan McDonagh (NYR)</td><td>3</td><td>1</td></tr>
<tr><td>15</td><td>Kailer Yamamoto (EDM)</td><td>3</td><td>1</td></tr>
<tr><td>16</td><td>Nathan MacKinnon (STL)</td><td>3</td><td>1</td></tr>
<tr><td>17</td><td>Alexander Wennberg (NYR)</td><td>3</td><td>1</td></tr>
<tr><td>18</td><td>Pavel Buchnevich (TBL)</td><td>3</td><td>1</td></tr>
<tr><td>19</td><td>Kyle Connor (ANH)</td><td>3</td><td>1</td></tr>
<tr><td>20</td><td>Kevin Labanc (MIN)</td><td>3</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Sidney Crosby (MTL)</td><td>19</td><td>6</td></tr>
<tr><td>2</td><td>Nikita Kucherov (FLA)</td><td>5</td><td>5</td></tr>
<tr><td>3</td><td>Mathew Barzal (DAL)</td><td>5</td><td>4</td></tr>
<tr><td>4</td><td>Mikhail Sergachev (WSH)</td><td>13</td><td>4</td></tr>
<tr><td>5</td><td>Evgeny Kuznetsov (STL)</td><td>3</td><td>3</td></tr>
<tr><td>6</td><td>Kailer Yamamoto (EDM)</td><td>3</td><td>3</td></tr>
<tr><td>7</td><td>Rasmus Dahlin (EDM)</td><td>3</td><td>3</td></tr>
<tr><td>8</td><td>Colin Wilson (QUE)</td><td>5</td><td>3</td></tr>
<tr><td>9</td><td>Mike Reilly (QUE)</td><td>5</td><td>3</td></tr>
<tr><td>10</td><td>Vince Hinostroza (NYI)</td><td>5</td><td>3</td></tr>
<tr><td>11</td><td>Tomas Tatar (DAL)</td><td>5</td><td>3</td></tr>
<tr><td>12</td><td>Mikael Granlund (DET)</td><td>5</td><td>3</td></tr>
<tr><td>13</td><td>Jonathan Drouin (OTT)</td><td>7</td><td>3</td></tr>
<tr><td>14</td><td>Drew Doughty (LOS)</td><td>8</td><td>3</td></tr>
<tr><td>15</td><td>Filip Forsberg (MTL)</td><td>19</td><td>3</td></tr>
<tr><td>16</td><td>Anthony Duclair (MTL)</td><td>19</td><td>3</td></tr>
<tr><td>17</td><td>Artemi Panarin (STL)</td><td>3</td><td>2</td></tr>
<tr><td>18</td><td>Brendan Lemieux (EDM)</td><td>3</td><td>2</td></tr>
<tr><td>19</td><td>Miro Heiskanen (ANH)</td><td>3</td><td>2</td></tr>
<tr><td>20</td><td>Travis Konecny (NYR)</td><td>3</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Jonathan Toews (CHI)</td><td>19</td><td>57</td></tr>
<tr><td>2</td><td>Sidney Crosby (MTL)</td><td>19</td><td>51</td></tr>
<tr><td>3</td><td>Derick Brassard (CHI)</td><td>19</td><td>48</td></tr>
<tr><td>4</td><td>Ryan Kesler (MTL)</td><td>19</td><td>46</td></tr>
<tr><td>5</td><td>Ryan Johansen (CLB)</td><td>23</td><td>42</td></tr>
<tr><td>6</td><td>Jason Dickinson (CLB)</td><td>23</td><td>41</td></tr>
<tr><td>7</td><td>Johnny Hockey Gaudreau (CLB)</td><td>23</td><td>40</td></tr>
<tr><td>8</td><td>Justin Faulk (NSH)</td><td>18</td><td>37</td></tr>
<tr><td>9</td><td>Ilya Mikheyev (CLB)</td><td>23</td><td>35</td></tr>
<tr><td>10</td><td>Dmitri Orlov (NSH)</td><td>18</td><td>33</td></tr>
<tr><td>11</td><td>Christian Dvorak (CLB)</td><td>19</td><td>33</td></tr>
<tr><td>12</td><td>Marc Staal (CHI)</td><td>19</td><td>32</td></tr>
<tr><td>13</td><td>Danton Heinen (MTL)</td><td>19</td><td>32</td></tr>
<tr><td>14</td><td>Sean Monahan (COL)</td><td>8</td><td>31</td></tr>
<tr><td>15</td><td>Mikhail Grigorenko (CLB)</td><td>23</td><td>31</td></tr>
<tr><td>16</td><td>Andre Burakovsky (CLB)</td><td>23</td><td>31</td></tr>
<tr><td>17</td><td>Jacob De La Rose (WSH)</td><td>13</td><td>28</td></tr>
<tr><td>18</td><td>Mitch Marner (NSH)</td><td>18</td><td>28</td></tr>
<tr><td>19</td><td>Mikael Backlund (NSH)</td><td>18</td><td>27</td></tr>
<tr><td>20</td><td>Alex Pietrangelo (MTL)</td><td>19</td><td>27</td></tr>
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
<tr><td>1</td><td>Jacob Trouba (NJD)</td><td>3</td><td>1</td></tr>
<tr><td>2</td><td>Joel Edmundson (FLA)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Milan Lucic (CAR)</td><td>7</td><td>1</td></tr>
<tr><td>4</td><td>Andrew O'Brien (PIT)</td><td>7</td><td>1</td></tr>
<tr><td>5</td><td>Dustin Byfuglien (COL)</td><td>8</td><td>1</td></tr>
<tr><td>6</td><td>Evgeni Malkin (CGY)</td><td>11</td><td>1</td></tr>
<tr><td>7</td><td>Michael Matheson (WSH)</td><td>13</td><td>1</td></tr>
<tr><td>8</td><td>Brent Seabrook (CLB)</td><td>23</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Jacob Trouba (NJD)</td><td>3</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Carter Hart (NSH)</td><td>17</td><td>0,937</td></tr>
<tr><td>2</td><td>Pekka Rinne (OTT)</td><td>7</td><td>0,934</td></tr>
<tr><td>3</td><td>Braden Holtby (WSH)</td><td>13</td><td>0,924</td></tr>
<tr><td>4</td><td>Connor Hellebuyck (ARZ)</td><td>10</td><td>0,914</td></tr>
<tr><td>5</td><td>Cam Ward (PIT)</td><td>8</td><td>0,912</td></tr>
<tr><td>6</td><td>Henrik Lundqvist (CLB)</td><td>22</td><td>0,911</td></tr>
<tr><td>7</td><td>James Reimer (CGY)</td><td>11</td><td>0,910</td></tr>
<tr><td>8</td><td>Anders Lindback (CHI)</td><td>19</td><td>0,910</td></tr>
<tr><td>9</td><td>Igor Shestyorkin (BOS)</td><td>13</td><td>0,908</td></tr>
<tr><td>10</td><td>Ilya Samsonov (MTL)</td><td>7</td><td>0,908</td></tr>
<tr><td>11</td><td>Calvin Pickard (CAR)</td><td>7</td><td>0,906</td></tr>
<tr><td>12</td><td>Pavel Francouz (MTL)</td><td>12</td><td>0,906</td></tr>
<tr><td>13</td><td>Michal Neuvirth (LOS)</td><td>8</td><td>0,905</td></tr>
<tr><td>14</td><td>Martin Jones (COL)</td><td>8</td><td>0,904</td></tr>
<tr><td>15</td><td>Matt Murray (VEG)</td><td>7</td><td>0,892</td></tr>
<tr><td>16</td><td>Jonathan Quick (PHI)</td><td>9</td><td>0,889</td></tr>
<tr><td>17</td><td>Jaroslav Halak (SJS)</td><td>8</td><td>0,885</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Carter Hart (NSH)</td><td>17</td><td>1,83</td></tr>
<tr><td>2</td><td>Pekka Rinne (OTT)</td><td>7</td><td>2,06</td></tr>
<tr><td>3</td><td>Braden Holtby (WSH)</td><td>13</td><td>2,24</td></tr>
<tr><td>4</td><td>Connor Hellebuyck (ARZ)</td><td>10</td><td>2,55</td></tr>
<tr><td>5</td><td>Henrik Lundqvist (CLB)</td><td>22</td><td>2,55</td></tr>
<tr><td>6</td><td>Michal Neuvirth (LOS)</td><td>8</td><td>2,70</td></tr>
<tr><td>7</td><td>Martin Jones (COL)</td><td>8</td><td>2,74</td></tr>
<tr><td>8</td><td>James Reimer (CGY)</td><td>11</td><td>2,74</td></tr>
<tr><td>9</td><td>Pavel Francouz (MTL)</td><td>12</td><td>2,83</td></tr>
<tr><td>10</td><td>Cam Ward (PIT)</td><td>8</td><td>2,84</td></tr>
<tr><td>11</td><td>Calvin Pickard (CAR)</td><td>7</td><td>2,84</td></tr>
<tr><td>12</td><td>Ilya Samsonov (MTL)</td><td>7</td><td>2,86</td></tr>
<tr><td>13</td><td>Igor Shestyorkin (BOS)</td><td>13</td><td>2,89</td></tr>
<tr><td>14</td><td>Anders Lindback (CHI)</td><td>19</td><td>3,00</td></tr>
<tr><td>15</td><td>Jonathan Quick (PHI)</td><td>9</td><td>3,19</td></tr>
<tr><td>16</td><td>Jaroslav Halak (SJS)</td><td>8</td><td>3,25</td></tr>
<tr><td>17</td><td>Matt Murray (VEG)</td><td>7</td><td>3,30</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Henrik Lundqvist (CLB)</td><td>22</td><td>1 268</td></tr>
<tr><td>2</td><td>Anders Lindback (CHI)</td><td>19</td><td>1 101</td></tr>
<tr><td>3</td><td>Carter Hart (NSH)</td><td>17</td><td>984</td></tr>
<tr><td>4</td><td>Braden Holtby (WSH)</td><td>13</td><td>804</td></tr>
<tr><td>5</td><td>Igor Shestyorkin (BOS)</td><td>13</td><td>747</td></tr>
<tr><td>6</td><td>Pavel Francouz (MTL)</td><td>12</td><td>722</td></tr>
<tr><td>7</td><td>Connor Hellebuyck (ARZ)</td><td>10</td><td>635</td></tr>
<tr><td>8</td><td>James Reimer (CGY)</td><td>11</td><td>634</td></tr>
<tr><td>9</td><td>Jonathan Quick (PHI)</td><td>9</td><td>546</td></tr>
<tr><td>10</td><td>Cam Ward (PIT)</td><td>8</td><td>486</td></tr>
<tr><td>11</td><td>Jaroslav Halak (SJS)</td><td>8</td><td>481</td></tr>
<tr><td>12</td><td>Matt Murray (VEG)</td><td>7</td><td>472</td></tr>
<tr><td>13</td><td>Michal Neuvirth (LOS)</td><td>8</td><td>444</td></tr>
<tr><td>14</td><td>Calvin Pickard (CAR)</td><td>7</td><td>444</td></tr>
<tr><td>15</td><td>Martin Jones (COL)</td><td>8</td><td>438</td></tr>
<tr><td>16</td><td>Pekka Rinne (OTT)</td><td>7</td><td>436</td></tr>
<tr><td>17</td><td>Ilya Samsonov (MTL)</td><td>7</td><td>420</td></tr>
<tr><td>18</td><td>Jordan Binnington (DAL)</td><td>5</td><td>319</td></tr>
<tr><td>19</td><td>Simeon Varlamov (QUE)</td><td>5</td><td>303</td></tr>
<tr><td>20</td><td>Jake Paterson (NYI)</td><td>5</td><td>300</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Anders Lindback (CHI)</td><td>19</td><td>610</td></tr>
<tr><td>2</td><td>Henrik Lundqvist (CLB)</td><td>22</td><td>605</td></tr>
<tr><td>3</td><td>Carter Hart (NSH)</td><td>17</td><td>474</td></tr>
<tr><td>4</td><td>Braden Holtby (WSH)</td><td>13</td><td>397</td></tr>
<tr><td>5</td><td>Igor Shestyorkin (BOS)</td><td>13</td><td>393</td></tr>
<tr><td>6</td><td>Pavel Francouz (MTL)</td><td>12</td><td>360</td></tr>
<tr><td>7</td><td>James Reimer (CGY)</td><td>11</td><td>322</td></tr>
<tr><td>8</td><td>Connor Hellebuyck (ARZ)</td><td>10</td><td>313</td></tr>
<tr><td>9</td><td>Cam Ward (PIT)</td><td>8</td><td>262</td></tr>
<tr><td>10</td><td>Jonathan Quick (PHI)</td><td>9</td><td>261</td></tr>
<tr><td>11</td><td>Matt Murray (VEG)</td><td>7</td><td>241</td></tr>
<tr><td>12</td><td>Pekka Rinne (OTT)</td><td>7</td><td>228</td></tr>
<tr><td>13</td><td>Jaroslav Halak (SJS)</td><td>8</td><td>226</td></tr>
<tr><td>14</td><td>Calvin Pickard (CAR)</td><td>7</td><td>224</td></tr>
<tr><td>15</td><td>Ilya Samsonov (MTL)</td><td>7</td><td>217</td></tr>
<tr><td>16</td><td>Michal Neuvirth (LOS)</td><td>8</td><td>210</td></tr>
<tr><td>17</td><td>Martin Jones (COL)</td><td>8</td><td>209</td></tr>
<tr><td>18</td><td>Jake Paterson (NYI)</td><td>5</td><td>159</td></tr>
<tr><td>19</td><td>Ondrej Pavelec (DET)</td><td>5</td><td>157</td></tr>
<tr><td>20</td><td>Jordan Binnington (DAL)</td><td>5</td><td>156</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Braden Holtby (WSH)</td><td>13</td><td>2</td></tr>
<tr><td>2</td><td>Henrik Lundqvist (CLB)</td><td>22</td><td>2</td></tr>
<tr><td>3</td><td>Simeon Varlamov (QUE)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Jaroslav Halak (SJS)</td><td>8</td><td>1</td></tr>
<tr><td>5</td><td>Martin Jones (COL)</td><td>8</td><td>1</td></tr>
<tr><td>6</td><td>Connor Hellebuyck (ARZ)</td><td>10</td><td>1</td></tr>
<tr><td>7</td><td>Pavel Francouz (MTL)</td><td>12</td><td>1</td></tr>
<tr><td>8</td><td>Carter Hart (NSH)</td><td>17</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Carter Hart (NSH)</td><td>17</td><td>14</td></tr>
<tr><td>2</td><td>Henrik Lundqvist (CLB)</td><td>22</td><td>12</td></tr>
<tr><td>3</td><td>Anders Lindback (CHI)</td><td>19</td><td>11</td></tr>
<tr><td>4</td><td>Braden Holtby (WSH)</td><td>13</td><td>8</td></tr>
<tr><td>5</td><td>Connor Hellebuyck (ARZ)</td><td>10</td><td>7</td></tr>
<tr><td>6</td><td>Pavel Francouz (MTL)</td><td>12</td><td>7</td></tr>
<tr><td>7</td><td>James Reimer (CGY)</td><td>11</td><td>6</td></tr>
<tr><td>8</td><td>Igor Shestyorkin (BOS)</td><td>13</td><td>6</td></tr>
<tr><td>9</td><td>Cam Ward (PIT)</td><td>8</td><td>5</td></tr>
<tr><td>10</td><td>Michal Neuvirth (LOS)</td><td>8</td><td>5</td></tr>
<tr><td>11</td><td>Calvin Pickard (CAR)</td><td>7</td><td>4</td></tr>
<tr><td>12</td><td>Matt Murray (VEG)</td><td>7</td><td>4</td></tr>
<tr><td>13</td><td>Pekka Rinne (OTT)</td><td>7</td><td>4</td></tr>
<tr><td>14</td><td>Ilya Samsonov (MTL)</td><td>7</td><td>4</td></tr>
<tr><td>15</td><td>Martin Jones (COL)</td><td>8</td><td>4</td></tr>
<tr><td>16</td><td>Jonathan Quick (PHI)</td><td>9</td><td>4</td></tr>
<tr><td>17</td><td>Jaroslav Halak (SJS)</td><td>8</td><td>3</td></tr>
<tr><td>18</td><td>Andrey Vasilevskiy (FLA)</td><td>5</td><td>2</td></tr>
<tr><td>19</td><td>Jordan Binnington (DAL)</td><td>5</td><td>2</td></tr>
<tr><td>20</td><td>Jacob Markstrom (BUF)</td><td>5</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Henrik Lundqvist (CLB)</td><td>22</td><td>8</td></tr>
<tr><td>2</td><td>Anders Lindback (CHI)</td><td>19</td><td>7</td></tr>
<tr><td>3</td><td>Igor Shestyorkin (BOS)</td><td>13</td><td>6</td></tr>
<tr><td>4</td><td>Jonathan Quick (PHI)</td><td>9</td><td>5</td></tr>
<tr><td>5</td><td>James Reimer (CGY)</td><td>11</td><td>5</td></tr>
<tr><td>6</td><td>Pavel Francouz (MTL)</td><td>12</td><td>5</td></tr>
<tr><td>7</td><td>Jaroslav Halak (SJS)</td><td>8</td><td>4</td></tr>
<tr><td>8</td><td>Braden Holtby (WSH)</td><td>13</td><td>4</td></tr>
<tr><td>9</td><td>Thatcher Demko (MIN)</td><td>3</td><td>3</td></tr>
<tr><td>10</td><td>Sergei Bobrovsky (ANH)</td><td>3</td><td>3</td></tr>
<tr><td>11</td><td>Darcy Kuemper (TBL)</td><td>3</td><td>3</td></tr>
<tr><td>12</td><td>Andrey Vasilevskiy (FLA)</td><td>5</td><td>3</td></tr>
<tr><td>13</td><td>Jordan Binnington (DAL)</td><td>5</td><td>3</td></tr>
<tr><td>14</td><td>Jacob Markstrom (BUF)</td><td>5</td><td>3</td></tr>
<tr><td>15</td><td>Ondrej Pavelec (DET)</td><td>5</td><td>3</td></tr>
<tr><td>16</td><td>Ilya Samsonov (MTL)</td><td>7</td><td>3</td></tr>
<tr><td>17</td><td>Martin Jones (COL)</td><td>8</td><td>3</td></tr>
<tr><td>18</td><td>Cory Schneider (VAN)</td><td>3</td><td>2</td></tr>
<tr><td>19</td><td>Marc-Andre Fleury (EDM)</td><td>3</td><td>2</td></tr>
<tr><td>20</td><td>Tuukka Rask (STL)</td><td>3</td><td>2</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
