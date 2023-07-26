<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Individual Leaders</title>
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
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>11</td></tr>
<tr><td>2</td><td>Nicolas Aubé-Kubel (NOR)</td><td>21</td><td>11</td></tr>
<tr><td>3</td><td>Denis Guryanov (CTW)</td><td>19</td><td>10</td></tr>
<tr><td>4</td><td>Brendan Lemieux (OKC)</td><td>21</td><td>10</td></tr>
<tr><td>5</td><td>Nicholas Caamano (MIL)</td><td>17</td><td>9</td></tr>
<tr><td>6</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>9</td></tr>
<tr><td>7</td><td>Cameron Hughes (OKC)</td><td>21</td><td>9</td></tr>
<tr><td>8</td><td>Brett Howden (OKC)</td><td>21</td><td>9</td></tr>
<tr><td>9</td><td>Markus Granlund (NOR)</td><td>18</td><td>8</td></tr>
<tr><td>10</td><td>Denis Malgin (CTW)</td><td>19</td><td>7</td></tr>
<tr><td>11</td><td>Miro Heiskanen (NOR)</td><td>21</td><td>7</td></tr>
<tr><td>12</td><td>Alexander Volkov (GAT)</td><td>12</td><td>6</td></tr>
<tr><td>13</td><td>Rasmus Asplund (CHA)</td><td>12</td><td>6</td></tr>
<tr><td>14</td><td>Trent Frederic (CTW)</td><td>16</td><td>6</td></tr>
<tr><td>15</td><td>Logan Brown (MIL)</td><td>17</td><td>6</td></tr>
<tr><td>16</td><td>Tage Thompson (MIL)</td><td>17</td><td>6</td></tr>
<tr><td>17</td><td>William Lagesson (CTW)</td><td>19</td><td>6</td></tr>
<tr><td>18</td><td>Quinn Hughes (NOR)</td><td>21</td><td>6</td></tr>
<tr><td>19</td><td>Jakub Lauko (OKC)</td><td>21</td><td>6</td></tr>
<tr><td>20</td><td>Jared Knight (OKC)</td><td>21</td><td>6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Quinn Hughes (NOR)</td><td>21</td><td>22</td></tr>
<tr><td>2</td><td>Miro Heiskanen (NOR)</td><td>21</td><td>18</td></tr>
<tr><td>3</td><td>Gustav Forsling (CTW)</td><td>15</td><td>17</td></tr>
<tr><td>4</td><td>Ty Dellandrea (NOR)</td><td>21</td><td>16</td></tr>
<tr><td>5</td><td>Henri Jokiharju (OKC)</td><td>21</td><td>15</td></tr>
<tr><td>6</td><td>Nate Schmidt (MIL)</td><td>17</td><td>14</td></tr>
<tr><td>7</td><td>Otto Leskinen (OKC)</td><td>21</td><td>13</td></tr>
<tr><td>8</td><td>Nicolas Aubé-Kubel (NOR)</td><td>21</td><td>12</td></tr>
<tr><td>9</td><td>Patrick Wiercioch (MIL)</td><td>17</td><td>11</td></tr>
<tr><td>10</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>11</td></tr>
<tr><td>11</td><td>Tage Thompson (MIL)</td><td>17</td><td>11</td></tr>
<tr><td>12</td><td>Christian Fischer (CTW)</td><td>19</td><td>11</td></tr>
<tr><td>13</td><td>J.D. Greenway (OKC)</td><td>21</td><td>11</td></tr>
<tr><td>14</td><td>Dmitri Samorukov (OKC)</td><td>21</td><td>11</td></tr>
<tr><td>15</td><td>Brett Howden (OKC)</td><td>21</td><td>11</td></tr>
<tr><td>16</td><td>Nicholas Caamano (MIL)</td><td>17</td><td>10</td></tr>
<tr><td>17</td><td>Brandon Burlon (NOR)</td><td>20</td><td>10</td></tr>
<tr><td>18</td><td>Dominik Masin (OKC)</td><td>21</td><td>10</td></tr>
<tr><td>19</td><td>Tomas Jurco (NOR)</td><td>21</td><td>10</td></tr>
<tr><td>20</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Brendan Lemieux (OKC)</td><td>21</td><td>99</td></tr>
<tr><td>2</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>82</td></tr>
<tr><td>3</td><td>Denis Guryanov (CTW)</td><td>19</td><td>75</td></tr>
<tr><td>4</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>65</td></tr>
<tr><td>5</td><td>Michael McLeod (OKC)</td><td>21</td><td>65</td></tr>
<tr><td>6</td><td>Tomas Jurco (NOR)</td><td>21</td><td>63</td></tr>
<tr><td>7</td><td>Nicolas Aubé-Kubel (NOR)</td><td>21</td><td>63</td></tr>
<tr><td>8</td><td>Paul Bittner (OKC)</td><td>21</td><td>59</td></tr>
<tr><td>9</td><td>Brett Howden (OKC)</td><td>21</td><td>59</td></tr>
<tr><td>10</td><td>Logan Brown (MIL)</td><td>17</td><td>56</td></tr>
<tr><td>11</td><td>Mads Eller (NOR)</td><td>21</td><td>56</td></tr>
<tr><td>12</td><td>Markus Granlund (NOR)</td><td>18</td><td>55</td></tr>
<tr><td>13</td><td>Kirby Dach (OKC)</td><td>21</td><td>55</td></tr>
<tr><td>14</td><td>Nicholas Caamano (MIL)</td><td>17</td><td>54</td></tr>
<tr><td>15</td><td>Jakub Lauko (OKC)</td><td>21</td><td>54</td></tr>
<tr><td>16</td><td>Joel Kiviranta (CHA)</td><td>12</td><td>53</td></tr>
<tr><td>17</td><td>Kiefer Sherwood (CHA)</td><td>12</td><td>53</td></tr>
<tr><td>18</td><td>Denis Malgin (CTW)</td><td>19</td><td>53</td></tr>
<tr><td>19</td><td>Ryan Donato (CTW)</td><td>19</td><td>52</td></tr>
<tr><td>20</td><td>Miro Heiskanen (NOR)</td><td>21</td><td>52</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Carl Klingberg (CHI)</td><td>9</td><td>25,00%</td></tr>
<tr><td>2</td><td>Trent Frederic (CTW)</td><td>16</td><td>24,00%</td></tr>
<tr><td>3</td><td>Laurin Braun (GAT)</td><td>12</td><td>23,08%</td></tr>
<tr><td>4</td><td>Cameron Hughes (OKC)</td><td>21</td><td>17,65%</td></tr>
<tr><td>5</td><td>Nicolas Aubé-Kubel (NOR)</td><td>21</td><td>17,46%</td></tr>
<tr><td>6</td><td>Louis Belpedio (CHA)</td><td>12</td><td>17,39%</td></tr>
<tr><td>7</td><td>Petr Straka (CHI)</td><td>9</td><td>16,67%</td></tr>
<tr><td>8</td><td>Spencer Smallman (CHI)</td><td>11</td><td>16,67%</td></tr>
<tr><td>9</td><td>Nicholas Caamano (MIL)</td><td>17</td><td>16,67%</td></tr>
<tr><td>10</td><td>Alexander Volkov (GAT)</td><td>12</td><td>15,38%</td></tr>
<tr><td>11</td><td>Brett Howden (OKC)</td><td>21</td><td>15,25%</td></tr>
<tr><td>12</td><td>Austin Wagner (NOR)</td><td>21</td><td>15,15%</td></tr>
<tr><td>13</td><td>Jared Knight (OKC)</td><td>21</td><td>14,63%</td></tr>
<tr><td>14</td><td>Markus Granlund (NOR)</td><td>18</td><td>14,55%</td></tr>
<tr><td>15</td><td>Samuel Blais (WBS)</td><td>8</td><td>14,29%</td></tr>
<tr><td>16</td><td>Jan Jenik (CTW)</td><td>19</td><td>14,29%</td></tr>
<tr><td>17</td><td>William Lagesson (CTW)</td><td>19</td><td>14,29%</td></tr>
<tr><td>18</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>13,85%</td></tr>
<tr><td>19</td><td>Skyler McKenzie (WBS)</td><td>8</td><td>13,64%</td></tr>
<tr><td>20</td><td>Rasmus Asplund (CHA)</td><td>12</td><td>13,64%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>11-10-21</td></tr>
<tr><td>2</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>9-11-20</td></tr>
<tr><td>3</td><td>Brett Howden (OKC)</td><td>21</td><td>9-11-20</td></tr>
<tr><td>4</td><td>Ty Dellandrea (NOR)</td><td>21</td><td>3-16-19</td></tr>
<tr><td>5</td><td>Michael McLeod (OKC)</td><td>21</td><td>6-10-16</td></tr>
<tr><td>6</td><td>Cameron Hughes (OKC)</td><td>21</td><td>9-6-15</td></tr>
<tr><td>7</td><td>Christian Fischer (CTW)</td><td>19</td><td>4-11-15</td></tr>
<tr><td>8</td><td>Markus Granlund (NOR)</td><td>18</td><td>8-6-14</td></tr>
<tr><td>9</td><td>Denis Malgin (CTW)</td><td>19</td><td>7-5-12</td></tr>
<tr><td>10</td><td>Rasmus Asplund (CHA)</td><td>12</td><td>6-5-11</td></tr>
<tr><td>11</td><td>Logan Brown (MIL)</td><td>17</td><td>6-5-11</td></tr>
<tr><td>12</td><td>Jakub Lauko (OKC)</td><td>21</td><td>6-5-11</td></tr>
<tr><td>13</td><td>Mikhail Vorobyov (CHA)</td><td>12</td><td>3-8-11</td></tr>
<tr><td>14</td><td>Drew Shore (MIL)</td><td>17</td><td>2-9-11</td></tr>
<tr><td>15</td><td>Nicolas Roy (GAT)</td><td>12</td><td>4-6-10</td></tr>
<tr><td>16</td><td>Kirby Dach (OKC)</td><td>21</td><td>4-5-9</td></tr>
<tr><td>17</td><td>Trent Frederic (CTW)</td><td>16</td><td>6-2-8</td></tr>
<tr><td>18</td><td>Marc-Olivier Roy (MIL)</td><td>17</td><td>4-4-8</td></tr>
<tr><td>19</td><td>Antoine Morand (OKC)</td><td>21</td><td>4-4-8</td></tr>
<tr><td>20</td><td>Anton Lander (CHI)</td><td>11</td><td>3-5-8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>9-11-20</td></tr>
<tr><td>2</td><td>Brett Howden (OKC)</td><td>21</td><td>9-11-20</td></tr>
<tr><td>3</td><td>Denis Guryanov (CTW)</td><td>19</td><td>10-9-19</td></tr>
<tr><td>4</td><td>Tage Thompson (MIL)</td><td>17</td><td>6-11-17</td></tr>
<tr><td>5</td><td>Christian Fischer (CTW)</td><td>19</td><td>4-11-15</td></tr>
<tr><td>6</td><td>Brendan Lemieux (OKC)</td><td>21</td><td>10-4-14</td></tr>
<tr><td>7</td><td>Tomas Jurco (NOR)</td><td>21</td><td>4-10-14</td></tr>
<tr><td>8</td><td>Rasmus Asplund (CHA)</td><td>12</td><td>6-5-11</td></tr>
<tr><td>9</td><td>Alexander Volkov (GAT)</td><td>12</td><td>6-4-10</td></tr>
<tr><td>10</td><td>Jan Jenik (CTW)</td><td>19</td><td>5-5-10</td></tr>
<tr><td>11</td><td>Joel Kiviranta (CHA)</td><td>12</td><td>5-4-9</td></tr>
<tr><td>12</td><td>Paul Bittner (OKC)</td><td>21</td><td>5-4-9</td></tr>
<tr><td>13</td><td>Austin Wagner (NOR)</td><td>21</td><td>5-3-8</td></tr>
<tr><td>14</td><td>Marc-Olivier Roy (MIL)</td><td>17</td><td>4-4-8</td></tr>
<tr><td>15</td><td>Brandon Hagel (CHI)</td><td>11</td><td>3-5-8</td></tr>
<tr><td>16</td><td>Mads Eller (NOR)</td><td>21</td><td>3-5-8</td></tr>
<tr><td>17</td><td>Tyler Benson (CHA)</td><td>12</td><td>2-6-8</td></tr>
<tr><td>18</td><td>Joseph Labate (CHI)</td><td>11</td><td>2-5-7</td></tr>
<tr><td>19</td><td>Jerry D'Amigo (GAT)</td><td>12</td><td>1-6-7</td></tr>
<tr><td>20</td><td>Carl Klingberg (CHI)</td><td>9</td><td>5-1-6</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Nicolas Aubé-Kubel (NOR)</td><td>21</td><td>11-12-23</td></tr>
<tr><td>2</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>11-10-21</td></tr>
<tr><td>3</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>9-11-20</td></tr>
<tr><td>4</td><td>Brett Howden (OKC)</td><td>21</td><td>9-11-20</td></tr>
<tr><td>5</td><td>Denis Guryanov (CTW)</td><td>19</td><td>10-9-19</td></tr>
<tr><td>6</td><td>Nicholas Caamano (MIL)</td><td>17</td><td>9-10-19</td></tr>
<tr><td>7</td><td>Ty Dellandrea (NOR)</td><td>21</td><td>3-16-19</td></tr>
<tr><td>8</td><td>Tage Thompson (MIL)</td><td>17</td><td>6-11-17</td></tr>
<tr><td>9</td><td>Tomas Jurco (NOR)</td><td>21</td><td>4-10-14</td></tr>
<tr><td>10</td><td>Denis Malgin (CTW)</td><td>19</td><td>7-5-12</td></tr>
<tr><td>11</td><td>Rasmus Asplund (CHA)</td><td>12</td><td>6-5-11</td></tr>
<tr><td>12</td><td>Jakub Lauko (OKC)</td><td>21</td><td>6-5-11</td></tr>
<tr><td>13</td><td>Jared Knight (OKC)</td><td>21</td><td>6-5-11</td></tr>
<tr><td>14</td><td>Drew Shore (MIL)</td><td>17</td><td>2-9-11</td></tr>
<tr><td>15</td><td>Alexander Volkov (GAT)</td><td>12</td><td>6-4-10</td></tr>
<tr><td>16</td><td>Jan Jenik (CTW)</td><td>19</td><td>5-5-10</td></tr>
<tr><td>17</td><td>Joel Kiviranta (CHA)</td><td>12</td><td>5-4-9</td></tr>
<tr><td>18</td><td>Austin Wagner (NOR)</td><td>21</td><td>5-3-8</td></tr>
<tr><td>19</td><td>Marc-Olivier Roy (MIL)</td><td>17</td><td>4-4-8</td></tr>
<tr><td>20</td><td>Dylan Cozens (CTW)</td><td>19</td><td>2-6-8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Quinn Hughes (NOR)</td><td>21</td><td>6-22-28</td></tr>
<tr><td>2</td><td>Miro Heiskanen (NOR)</td><td>21</td><td>7-18-25</td></tr>
<tr><td>3</td><td>Gustav Forsling (CTW)</td><td>15</td><td>2-17-19</td></tr>
<tr><td>4</td><td>Henri Jokiharju (OKC)</td><td>21</td><td>3-15-18</td></tr>
<tr><td>5</td><td>Nate Schmidt (MIL)</td><td>17</td><td>2-14-16</td></tr>
<tr><td>6</td><td>William Lagesson (CTW)</td><td>19</td><td>6-8-14</td></tr>
<tr><td>7</td><td>J.D. Greenway (OKC)</td><td>21</td><td>3-11-14</td></tr>
<tr><td>8</td><td>Patrick Wiercioch (MIL)</td><td>17</td><td>2-11-13</td></tr>
<tr><td>9</td><td>Otto Leskinen (OKC)</td><td>21</td><td>0-13-13</td></tr>
<tr><td>10</td><td>Dominik Masin (OKC)</td><td>21</td><td>2-10-12</td></tr>
<tr><td>11</td><td>Dmitri Samorukov (OKC)</td><td>21</td><td>1-11-12</td></tr>
<tr><td>12</td><td>T.J. Brodie (MIL)</td><td>17</td><td>3-8-11</td></tr>
<tr><td>13</td><td>Josh Mahura (CTW)</td><td>19</td><td>2-9-11</td></tr>
<tr><td>14</td><td>Brandon Burlon (NOR)</td><td>20</td><td>1-10-11</td></tr>
<tr><td>15</td><td>Sam Jardine (NOR)</td><td>21</td><td>4-6-10</td></tr>
<tr><td>16</td><td>Joshua Jacobs (MIL)</td><td>17</td><td>1-9-10</td></tr>
<tr><td>17</td><td>Jack Dougherty (OKC)</td><td>21</td><td>1-9-10</td></tr>
<tr><td>18</td><td>Dante Fabbro (GAT)</td><td>12</td><td>2-7-9</td></tr>
<tr><td>19</td><td>Caleb Jones (GAT)</td><td>12</td><td>2-7-9</td></tr>
<tr><td>20</td><td>Robert Hagg (GAT)</td><td>12</td><td>1-8-9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Nicolas Aubé-Kubel (NOR)</td><td>21</td><td>1,19</td></tr>
<tr><td>2</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>1,13</td></tr>
<tr><td>3</td><td>Nicholas Caamano (MIL)</td><td>17</td><td>1,13</td></tr>
<tr><td>4</td><td>Gustav Forsling (CTW)</td><td>15</td><td>1,12</td></tr>
<tr><td>5</td><td>Quinn Hughes (NOR)</td><td>21</td><td>1,10</td></tr>
<tr><td>6</td><td>Mikhail Vorobyov (CHA)</td><td>12</td><td>1,10</td></tr>
<tr><td>7</td><td>Denis Guryanov (CTW)</td><td>19</td><td>1,09</td></tr>
<tr><td>8</td><td>Mike Vecchione (NOR)</td><td>14</td><td>1,06</td></tr>
<tr><td>9</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>1,01</td></tr>
<tr><td>10</td><td>Brett Howden (OKC)</td><td>21</td><td>0,99</td></tr>
<tr><td>11</td><td>Miro Heiskanen (NOR)</td><td>21</td><td>0,99</td></tr>
<tr><td>12</td><td>Tage Thompson (MIL)</td><td>17</td><td>0,99</td></tr>
<tr><td>13</td><td>Nate Schmidt (MIL)</td><td>17</td><td>0,96</td></tr>
<tr><td>14</td><td>Ostap Safin (WBS)</td><td>8</td><td>0,92</td></tr>
<tr><td>15</td><td>Ty Dellandrea (NOR)</td><td>21</td><td>0,88</td></tr>
<tr><td>16</td><td>Emil Bemstrom (CHA)</td><td>10</td><td>0,85</td></tr>
<tr><td>17</td><td>Dominik Simon (WBS)</td><td>8</td><td>0,85</td></tr>
<tr><td>18</td><td>Alexander Volkov (GAT)</td><td>12</td><td>0,85</td></tr>
<tr><td>19</td><td>Jerry D'Amigo (GAT)</td><td>12</td><td>0,85</td></tr>
<tr><td>20</td><td>Henri Jokiharju (OKC)</td><td>21</td><td>0,85</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>David Desharnais (CHI)</td><td>11</td><td>61,54%</td></tr>
<tr><td>2</td><td>Markus Granlund (NOR)</td><td>18</td><td>57,21%</td></tr>
<tr><td>3</td><td>Mads Eller (NOR)</td><td>21</td><td>56,81%</td></tr>
<tr><td>4</td><td>Anton Lander (CHI)</td><td>11</td><td>56,67%</td></tr>
<tr><td>5</td><td>Mikhail Maltsev (WBS)</td><td>8</td><td>55,56%</td></tr>
<tr><td>6</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>54,30%</td></tr>
<tr><td>7</td><td>Trent Frederic (CTW)</td><td>16</td><td>54,26%</td></tr>
<tr><td>8</td><td>Logan Brown (MIL)</td><td>17</td><td>52,87%</td></tr>
<tr><td>9</td><td>Ty Dellandrea (NOR)</td><td>21</td><td>52,85%</td></tr>
<tr><td>10</td><td>Michael McLeod (OKC)</td><td>21</td><td>52,23%</td></tr>
<tr><td>11</td><td>Mikhail Vorobyov (CHA)</td><td>12</td><td>51,78%</td></tr>
<tr><td>12</td><td>Henrik Borgstrom (CTW)</td><td>19</td><td>51,74%</td></tr>
<tr><td>13</td><td>Rasmus Asplund (CHA)</td><td>12</td><td>51,60%</td></tr>
<tr><td>14</td><td>Cristoval Nieves (MIL)</td><td>17</td><td>51,57%</td></tr>
<tr><td>15</td><td>Ross Colton (GAT)</td><td>12</td><td>51,52%</td></tr>
<tr><td>16</td><td>Joey Hishon (CHA)</td><td>12</td><td>50,22%</td></tr>
<tr><td>17</td><td>Nicolas Roy (GAT)</td><td>12</td><td>50,00%</td></tr>
<tr><td>18</td><td>Glenn Gawdin (CTW)</td><td>19</td><td>49,06%</td></tr>
<tr><td>19</td><td>Adam Brooks (CHI)</td><td>11</td><td>49,00%</td></tr>
<tr><td>20</td><td>Lucas Wallmark (NOR)</td><td>10</td><td>48,78%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Sam Jardine (NOR)</td><td>21</td><td>13</td></tr>
<tr><td>2</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>11</td></tr>
<tr><td>3</td><td>Nicholas Caamano (MIL)</td><td>17</td><td>10</td></tr>
<tr><td>4</td><td>Marc-Olivier Roy (MIL)</td><td>17</td><td>10</td></tr>
<tr><td>5</td><td>Jan Jenik (CTW)</td><td>19</td><td>9</td></tr>
<tr><td>6</td><td>Quinn Hughes (NOR)</td><td>21</td><td>9</td></tr>
<tr><td>7</td><td>Nicolas Roy (GAT)</td><td>12</td><td>8</td></tr>
<tr><td>8</td><td>Tage Thompson (MIL)</td><td>17</td><td>8</td></tr>
<tr><td>9</td><td>Ben Smith (NOR)</td><td>21</td><td>8</td></tr>
<tr><td>10</td><td>Brett Howden (OKC)</td><td>21</td><td>8</td></tr>
<tr><td>11</td><td>Matt Luff (GAT)</td><td>12</td><td>7</td></tr>
<tr><td>12</td><td>Drew Shore (MIL)</td><td>17</td><td>7</td></tr>
<tr><td>13</td><td>Nate Schmidt (MIL)</td><td>17</td><td>7</td></tr>
<tr><td>14</td><td>Markus Granlund (NOR)</td><td>18</td><td>7</td></tr>
<tr><td>15</td><td>Brandon Burlon (NOR)</td><td>20</td><td>7</td></tr>
<tr><td>16</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>7</td></tr>
<tr><td>17</td><td>Alexander Volkov (GAT)</td><td>12</td><td>6</td></tr>
<tr><td>18</td><td>Josh Norris (CTW)</td><td>19</td><td>6</td></tr>
<tr><td>19</td><td>Ty Dellandrea (NOR)</td><td>21</td><td>6</td></tr>
<tr><td>20</td><td>Brendan Lemieux (OKC)</td><td>21</td><td>6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Brendan Lemieux (OKC)</td><td>21</td><td>32</td></tr>
<tr><td>2</td><td>Radko Gudas (NOR)</td><td>21</td><td>32</td></tr>
<tr><td>3</td><td>Dylan Cozens (CTW)</td><td>19</td><td>24</td></tr>
<tr><td>4</td><td>Joshua Jacobs (MIL)</td><td>17</td><td>22</td></tr>
<tr><td>5</td><td>Casey Fitzgerald (CTW)</td><td>19</td><td>22</td></tr>
<tr><td>6</td><td>J.D. Greenway (OKC)</td><td>21</td><td>22</td></tr>
<tr><td>7</td><td>Ziyat Paigin (CTW)</td><td>9</td><td>18</td></tr>
<tr><td>8</td><td>Jakub Lauko (OKC)</td><td>21</td><td>18</td></tr>
<tr><td>9</td><td>Ryan Merkley (NOR)</td><td>21</td><td>18</td></tr>
<tr><td>10</td><td>Alex Peters (CHI)</td><td>10</td><td>16</td></tr>
<tr><td>11</td><td>Brandon Carlo (CTW)</td><td>14</td><td>16</td></tr>
<tr><td>12</td><td>Christian Fischer (CTW)</td><td>19</td><td>16</td></tr>
<tr><td>13</td><td>Sam Jardine (NOR)</td><td>21</td><td>16</td></tr>
<tr><td>14</td><td>Mads Eller (NOR)</td><td>21</td><td>16</td></tr>
<tr><td>15</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>16</td></tr>
<tr><td>16</td><td>Michael Paliotta (CHA)</td><td>12</td><td>14</td></tr>
<tr><td>17</td><td>Logan Brown (MIL)</td><td>17</td><td>14</td></tr>
<tr><td>18</td><td>William Lagesson (CTW)</td><td>19</td><td>14</td></tr>
<tr><td>19</td><td>Jack Dougherty (OKC)</td><td>21</td><td>14</td></tr>
<tr><td>20</td><td>Michael McLeod (OKC)</td><td>21</td><td>14</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Quinn Hughes (NOR)</td><td>21</td><td>37</td></tr>
<tr><td>2</td><td>Josh Mahura (CTW)</td><td>19</td><td>36</td></tr>
<tr><td>3</td><td>Radko Gudas (NOR)</td><td>21</td><td>36</td></tr>
<tr><td>4</td><td>William Lagesson (CTW)</td><td>19</td><td>34</td></tr>
<tr><td>5</td><td>Scott Walford (CTW)</td><td>19</td><td>33</td></tr>
<tr><td>6</td><td>Miro Heiskanen (NOR)</td><td>21</td><td>33</td></tr>
<tr><td>7</td><td>Jack Dougherty (OKC)</td><td>21</td><td>31</td></tr>
<tr><td>8</td><td>Gustav Forsling (CTW)</td><td>15</td><td>30</td></tr>
<tr><td>9</td><td>Dmitri Samorukov (OKC)</td><td>21</td><td>29</td></tr>
<tr><td>10</td><td>Casey Fitzgerald (CTW)</td><td>19</td><td>27</td></tr>
<tr><td>11</td><td>Michael Paliotta (CHA)</td><td>12</td><td>25</td></tr>
<tr><td>12</td><td>Dominik Masin (OKC)</td><td>21</td><td>25</td></tr>
<tr><td>13</td><td>Otto Leskinen (OKC)</td><td>21</td><td>24</td></tr>
<tr><td>14</td><td>T.J. Brodie (MIL)</td><td>17</td><td>23</td></tr>
<tr><td>15</td><td>Joshua Jacobs (MIL)</td><td>17</td><td>23</td></tr>
<tr><td>16</td><td>Sam Jardine (NOR)</td><td>21</td><td>23</td></tr>
<tr><td>17</td><td>Ryan Merkley (NOR)</td><td>21</td><td>23</td></tr>
<tr><td>18</td><td>Patrick Wiercioch (MIL)</td><td>17</td><td>22</td></tr>
<tr><td>19</td><td>Dylan Blujus (MIL)</td><td>11</td><td>21</td></tr>
<tr><td>20</td><td>Caleb Jones (GAT)</td><td>12</td><td>20</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Quinn Hughes (NOR)</td><td>21</td><td>6-22-28</td></tr>
<tr><td>2</td><td>Nicolas Aubé-Kubel (NOR)</td><td>21</td><td>11-12-23</td></tr>
<tr><td>3</td><td>Brett Howden (OKC)</td><td>21</td><td>9-11-20</td></tr>
<tr><td>4</td><td>Denis Guryanov (CTW)</td><td>19</td><td>10-9-19</td></tr>
<tr><td>5</td><td>Nicholas Caamano (MIL)</td><td>17</td><td>9-10-19</td></tr>
<tr><td>6</td><td>Ty Dellandrea (NOR)</td><td>21</td><td>3-16-19</td></tr>
<tr><td>7</td><td>Gustav Forsling (CTW)</td><td>15</td><td>2-17-19</td></tr>
<tr><td>8</td><td>Henri Jokiharju (OKC)</td><td>21</td><td>3-15-18</td></tr>
<tr><td>9</td><td>Tage Thompson (MIL)</td><td>17</td><td>6-11-17</td></tr>
<tr><td>10</td><td>Michael McLeod (OKC)</td><td>21</td><td>6-10-16</td></tr>
<tr><td>11</td><td>Cameron Hughes (OKC)</td><td>21</td><td>9-6-15</td></tr>
<tr><td>12</td><td>Christian Fischer (CTW)</td><td>19</td><td>4-11-15</td></tr>
<tr><td>13</td><td>William Lagesson (CTW)</td><td>19</td><td>6-8-14</td></tr>
<tr><td>14</td><td>J.D. Greenway (OKC)</td><td>21</td><td>3-11-14</td></tr>
<tr><td>15</td><td>Otto Leskinen (OKC)</td><td>21</td><td>0-13-13</td></tr>
<tr><td>16</td><td>Denis Malgin (CTW)</td><td>19</td><td>7-5-12</td></tr>
<tr><td>17</td><td>Dominik Masin (OKC)</td><td>21</td><td>2-10-12</td></tr>
<tr><td>18</td><td>Dmitri Samorukov (OKC)</td><td>21</td><td>1-11-12</td></tr>
<tr><td>19</td><td>Rasmus Asplund (CHA)</td><td>12</td><td>6-5-11</td></tr>
<tr><td>20</td><td>Logan Brown (MIL)</td><td>17</td><td>6-5-11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Brendan Lemieux (OKC)</td><td>21</td><td>91</td></tr>
<tr><td>2</td><td>Jakub Lauko (OKC)</td><td>21</td><td>52</td></tr>
<tr><td>3</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>52</td></tr>
<tr><td>4</td><td>Jack Dougherty (OKC)</td><td>21</td><td>49</td></tr>
<tr><td>5</td><td>J.D. Greenway (OKC)</td><td>21</td><td>49</td></tr>
<tr><td>6</td><td>Radko Gudas (NOR)</td><td>21</td><td>45</td></tr>
<tr><td>7</td><td>Christian Fischer (CTW)</td><td>19</td><td>42</td></tr>
<tr><td>8</td><td>Michael McLeod (OKC)</td><td>21</td><td>38</td></tr>
<tr><td>9</td><td>Dylan Cozens (CTW)</td><td>19</td><td>37</td></tr>
<tr><td>10</td><td>Brandon Carlo (CTW)</td><td>14</td><td>36</td></tr>
<tr><td>11</td><td>Joshua Jacobs (MIL)</td><td>17</td><td>36</td></tr>
<tr><td>12</td><td>Ryan Merkley (NOR)</td><td>21</td><td>36</td></tr>
<tr><td>13</td><td>Sam Jardine (NOR)</td><td>21</td><td>35</td></tr>
<tr><td>14</td><td>Austin Wagner (NOR)</td><td>21</td><td>35</td></tr>
<tr><td>15</td><td>William Lagesson (CTW)</td><td>19</td><td>34</td></tr>
<tr><td>16</td><td>Casey Fitzgerald (CTW)</td><td>19</td><td>34</td></tr>
<tr><td>17</td><td>Laurent Dauphin (CHA)</td><td>10</td><td>33</td></tr>
<tr><td>18</td><td>Nicholas Caamano (MIL)</td><td>17</td><td>33</td></tr>
<tr><td>19</td><td>Scott Walford (CTW)</td><td>19</td><td>33</td></tr>
<tr><td>20</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>32</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Miro Heiskanen (NOR)</td><td>21</td><td>5</td></tr>
<tr><td>2</td><td>Quinn Hughes (NOR)</td><td>21</td><td>4</td></tr>
<tr><td>3</td><td>Brett Howden (OKC)</td><td>21</td><td>4</td></tr>
<tr><td>4</td><td>Dominik Simon (WBS)</td><td>8</td><td>3</td></tr>
<tr><td>5</td><td>William Lagesson (CTW)</td><td>19</td><td>3</td></tr>
<tr><td>6</td><td>Denis Malgin (CTW)</td><td>19</td><td>3</td></tr>
<tr><td>7</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>3</td></tr>
<tr><td>8</td><td>Nicolas Aubé-Kubel (NOR)</td><td>21</td><td>3</td></tr>
<tr><td>9</td><td>J.D. Greenway (OKC)</td><td>21</td><td>3</td></tr>
<tr><td>10</td><td>Christian Djoos (LKE)</td><td>6</td><td>2</td></tr>
<tr><td>11</td><td>Seth Griffith (LKE)</td><td>6</td><td>2</td></tr>
<tr><td>12</td><td>Cale Makar (BRI)</td><td>6</td><td>2</td></tr>
<tr><td>13</td><td>Mattias Backman (CHI)</td><td>11</td><td>2</td></tr>
<tr><td>14</td><td>Dante Fabbro (GAT)</td><td>12</td><td>2</td></tr>
<tr><td>15</td><td>Anders Bjork (GAT)</td><td>12</td><td>2</td></tr>
<tr><td>16</td><td>Louis Belpedio (CHA)</td><td>12</td><td>2</td></tr>
<tr><td>17</td><td>Caleb Jones (GAT)</td><td>12</td><td>2</td></tr>
<tr><td>18</td><td>Brandon Carlo (CTW)</td><td>14</td><td>2</td></tr>
<tr><td>19</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>2</td></tr>
<tr><td>20</td><td>Logan Brown (MIL)</td><td>17</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Patrick Holland (NOR)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Sean Malone (BRI)</td><td>6</td><td>1</td></tr>
<tr><td>3</td><td>Jason Zucker (LKE)</td><td>6</td><td>1</td></tr>
<tr><td>4</td><td>Reid Duke (WBS)</td><td>8</td><td>1</td></tr>
<tr><td>5</td><td>Alex Peters (CHI)</td><td>10</td><td>1</td></tr>
<tr><td>6</td><td>Trent Frederic (CTW)</td><td>16</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Nicolas Roy (GAT)</td><td>12</td><td>3</td></tr>
<tr><td>2</td><td>Rasmus Asplund (CHA)</td><td>12</td><td>3</td></tr>
<tr><td>3</td><td>Denis Guryanov (CTW)</td><td>19</td><td>3</td></tr>
<tr><td>4</td><td>Brendan Lemieux (OKC)</td><td>21</td><td>3</td></tr>
<tr><td>5</td><td>Jared Knight (OKC)</td><td>21</td><td>3</td></tr>
<tr><td>6</td><td>Nicolas Aubé-Kubel (NOR)</td><td>21</td><td>3</td></tr>
<tr><td>7</td><td>Samuel Blais (WBS)</td><td>8</td><td>2</td></tr>
<tr><td>8</td><td>Brandon Hagel (CHI)</td><td>11</td><td>2</td></tr>
<tr><td>9</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>2</td></tr>
<tr><td>10</td><td>Sam Jardine (NOR)</td><td>21</td><td>2</td></tr>
<tr><td>11</td><td>Cameron Hughes (OKC)</td><td>21</td><td>2</td></tr>
<tr><td>12</td><td>Nikolai Kovalenko (CCC)</td><td>2</td><td>1</td></tr>
<tr><td>13</td><td>Carter Ashton (CHA)</td><td>4</td><td>1</td></tr>
<tr><td>14</td><td>Joseph Duszak (GRG)</td><td>5</td><td>1</td></tr>
<tr><td>15</td><td>Brett Bulmer (SPR)</td><td>5</td><td>1</td></tr>
<tr><td>16</td><td>Yakov Trenin (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>17</td><td>Seth Griffith (LKE)</td><td>6</td><td>1</td></tr>
<tr><td>18</td><td>Stephen MacAulay (LKE)</td><td>6</td><td>1</td></tr>
<tr><td>19</td><td>Anthony Beauvillier (LAV)</td><td>6</td><td>1</td></tr>
<tr><td>20</td><td>Vitali Abramov (CHI)</td><td>6</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Markus Granlund (NOR)</td><td>18</td><td>3</td></tr>
<tr><td>2</td><td>Liam Foudy (GRG)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Christian Djoos (LKE)</td><td>6</td><td>1</td></tr>
<tr><td>4</td><td>Lucas Johansen (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>5</td><td>Stuart Percy (MIL)</td><td>6</td><td>1</td></tr>
<tr><td>6</td><td>Juuso Välimäki (LAV)</td><td>6</td><td>1</td></tr>
<tr><td>7</td><td>David Desharnais (CHI)</td><td>11</td><td>1</td></tr>
<tr><td>8</td><td>Spencer Smallman (CHI)</td><td>11</td><td>1</td></tr>
<tr><td>9</td><td>Laurin Braun (GAT)</td><td>12</td><td>1</td></tr>
<tr><td>10</td><td>Rasmus Asplund (CHA)</td><td>12</td><td>1</td></tr>
<tr><td>11</td><td>Louis Belpedio (CHA)</td><td>12</td><td>1</td></tr>
<tr><td>12</td><td>Luke Adam (MIL)</td><td>14</td><td>1</td></tr>
<tr><td>13</td><td>Nicholas Caamano (MIL)</td><td>17</td><td>1</td></tr>
<tr><td>14</td><td>Scott Walford (CTW)</td><td>19</td><td>1</td></tr>
<tr><td>15</td><td>Josh Norris (CTW)</td><td>19</td><td>1</td></tr>
<tr><td>16</td><td>Miro Heiskanen (NOR)</td><td>21</td><td>1</td></tr>
<tr><td>17</td><td>Jakub Lauko (OKC)</td><td>21</td><td>1</td></tr>
<tr><td>18</td><td>Tomas Jurco (NOR)</td><td>21</td><td>1</td></tr>
<tr><td>19</td><td>Nicolas Aubé-Kubel (NOR)</td><td>21</td><td>1</td></tr>
<tr><td>20</td><td>Michael McLeod (OKC)</td><td>21</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>1</td></tr>
<tr><td>2</td><td>Nicolas Aubé-Kubel (NOR)</td><td>21</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Jack Dougherty (OKC)</td><td>21</td><td>511</td></tr>
<tr><td>2</td><td>Quinn Hughes (NOR)</td><td>21</td><td>508</td></tr>
<tr><td>3</td><td>Miro Heiskanen (NOR)</td><td>21</td><td>505</td></tr>
<tr><td>4</td><td>Dmitri Samorukov (OKC)</td><td>21</td><td>479</td></tr>
<tr><td>5</td><td>Cameron Hughes (OKC)</td><td>21</td><td>475</td></tr>
<tr><td>6</td><td>Sam Jardine (NOR)</td><td>21</td><td>469</td></tr>
<tr><td>7</td><td>Michael McLeod (OKC)</td><td>21</td><td>456</td></tr>
<tr><td>8</td><td>Kirby Dach (OKC)</td><td>21</td><td>445</td></tr>
<tr><td>9</td><td>Josh Mahura (CTW)</td><td>19</td><td>441</td></tr>
<tr><td>10</td><td>Ryan Merkley (NOR)</td><td>21</td><td>440</td></tr>
<tr><td>11</td><td>Ty Dellandrea (NOR)</td><td>21</td><td>434</td></tr>
<tr><td>12</td><td>Henri Jokiharju (OKC)</td><td>21</td><td>424</td></tr>
<tr><td>13</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>417</td></tr>
<tr><td>14</td><td>William Lagesson (CTW)</td><td>19</td><td>414</td></tr>
<tr><td>15</td><td>J.D. Greenway (OKC)</td><td>21</td><td>411</td></tr>
<tr><td>16</td><td>Denis Malgin (CTW)</td><td>19</td><td>406</td></tr>
<tr><td>17</td><td>Brett Howden (OKC)</td><td>21</td><td>403</td></tr>
<tr><td>18</td><td>Brendan Lemieux (OKC)</td><td>21</td><td>400</td></tr>
<tr><td>19</td><td>Antoine Morand (OKC)</td><td>21</td><td>389</td></tr>
<tr><td>20</td><td>Scott Walford (CTW)</td><td>19</td><td>388</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Denis Guryanov (CTW)</td><td>19</td><td>2</td></tr>
<tr><td>2</td><td>Nicholas Caamano (MIL)</td><td>17</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>3</td></tr>
<tr><td>2</td><td>Nick Baptiste (RCH)</td><td>4</td><td>2</td></tr>
<tr><td>3</td><td>Pius Suter (SPR)</td><td>5</td><td>2</td></tr>
<tr><td>4</td><td>Joseph Duszak (GRG)</td><td>5</td><td>2</td></tr>
<tr><td>5</td><td>Brooks Macek (GRG)</td><td>5</td><td>2</td></tr>
<tr><td>6</td><td>Sean Malone (BRI)</td><td>6</td><td>2</td></tr>
<tr><td>7</td><td>Brett Howden (OKC)</td><td>21</td><td>2</td></tr>
<tr><td>8</td><td>Johan Sundstrom (SPR)</td><td>5</td><td>1</td></tr>
<tr><td>9</td><td>Ryan Button (GRG)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Mathias From (CCC)</td><td>5</td><td>1</td></tr>
<tr><td>11</td><td>Jesper Boqvist (LAV)</td><td>6</td><td>1</td></tr>
<tr><td>12</td><td>Jonathan Dahlen (BRI)</td><td>6</td><td>1</td></tr>
<tr><td>13</td><td>Daniel Zaar (LAV)</td><td>6</td><td>1</td></tr>
<tr><td>14</td><td>Philip Lane (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>15</td><td>Gabriel Gagné (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>16</td><td>Jacob Olofsson (LAV)</td><td>6</td><td>1</td></tr>
<tr><td>17</td><td>Troy Terry (LAV)</td><td>6</td><td>1</td></tr>
<tr><td>18</td><td>Cody Glass (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>19</td><td>Petr Straka (CHI)</td><td>9</td><td>1</td></tr>
<tr><td>20</td><td>Dante Fabbro (GAT)</td><td>12</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Quinn Hughes (NOR)</td><td>21</td><td>7</td></tr>
<tr><td>2</td><td>Brandon Burlon (NOR)</td><td>20</td><td>6</td></tr>
<tr><td>3</td><td>Kyle Wood (LAV)</td><td>6</td><td>5</td></tr>
<tr><td>4</td><td>Juuso Välimäki (LAV)</td><td>6</td><td>5</td></tr>
<tr><td>5</td><td>Troy Terry (LAV)</td><td>6</td><td>4</td></tr>
<tr><td>6</td><td>Dante Fabbro (GAT)</td><td>12</td><td>4</td></tr>
<tr><td>7</td><td>Victor Mete (GAT)</td><td>12</td><td>4</td></tr>
<tr><td>8</td><td>Nicholas Caamano (MIL)</td><td>17</td><td>4</td></tr>
<tr><td>9</td><td>T.J. Brodie (MIL)</td><td>17</td><td>4</td></tr>
<tr><td>10</td><td>Tage Thompson (MIL)</td><td>17</td><td>4</td></tr>
<tr><td>11</td><td>Markus Granlund (NOR)</td><td>18</td><td>4</td></tr>
<tr><td>12</td><td>Denis Malgin (CTW)</td><td>19</td><td>4</td></tr>
<tr><td>13</td><td>Marcus Pettersson (SPR)</td><td>5</td><td>3</td></tr>
<tr><td>14</td><td>Shane Prince (GRG)</td><td>5</td><td>3</td></tr>
<tr><td>15</td><td>Daniel Zaar (LAV)</td><td>6</td><td>3</td></tr>
<tr><td>16</td><td>Cale Makar (BRI)</td><td>6</td><td>3</td></tr>
<tr><td>17</td><td>Joshua Jacobs (MIL)</td><td>17</td><td>3</td></tr>
<tr><td>18</td><td>Denis Guryanov (CTW)</td><td>19</td><td>3</td></tr>
<tr><td>19</td><td>Ty Dellandrea (NOR)</td><td>21</td><td>3</td></tr>
<tr><td>20</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Michael McLeod (OKC)</td><td>21</td><td>55</td></tr>
<tr><td>2</td><td>Ty Dellandrea (NOR)</td><td>21</td><td>53</td></tr>
<tr><td>3</td><td>Antoine Morand (OKC)</td><td>21</td><td>48</td></tr>
<tr><td>4</td><td>Cameron Hughes (OKC)</td><td>21</td><td>47</td></tr>
<tr><td>5</td><td>Glenn Gawdin (CTW)</td><td>19</td><td>44</td></tr>
<tr><td>6</td><td>Markus Granlund (NOR)</td><td>18</td><td>42</td></tr>
<tr><td>7</td><td>Denis Malgin (CTW)</td><td>19</td><td>41</td></tr>
<tr><td>8</td><td>Miro Heiskanen (NOR)</td><td>21</td><td>39</td></tr>
<tr><td>9</td><td>Rasmus Asplund (CHA)</td><td>12</td><td>37</td></tr>
<tr><td>10</td><td>Nicolas Aubé-Kubel (NOR)</td><td>21</td><td>37</td></tr>
<tr><td>11</td><td>Miikka Salomäki (MIL)</td><td>17</td><td>36</td></tr>
<tr><td>12</td><td>Mads Eller (NOR)</td><td>21</td><td>36</td></tr>
<tr><td>13</td><td>Quinn Hughes (NOR)</td><td>21</td><td>35</td></tr>
<tr><td>14</td><td>Josh Mahura (CTW)</td><td>19</td><td>31</td></tr>
<tr><td>15</td><td>Anton Lander (CHI)</td><td>11</td><td>30</td></tr>
<tr><td>16</td><td>Sam Jardine (NOR)</td><td>21</td><td>29</td></tr>
<tr><td>17</td><td>Josh Ho-Sang (NOR)</td><td>21</td><td>29</td></tr>
<tr><td>18</td><td>Anthony Cirelli (GAT)</td><td>12</td><td>28</td></tr>
<tr><td>19</td><td>Logan Brown (MIL)</td><td>17</td><td>28</td></tr>
<tr><td>20</td><td>Jack Dougherty (OKC)</td><td>21</td><td>28</td></tr>
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
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Ken Appleby (NOR)</td><td>20</td><td>0,935</td></tr>
<tr><td>2</td><td>Chet Pickard (MIL)</td><td>14</td><td>0,920</td></tr>
<tr><td>3</td><td>Michael DiPietro (CTW)</td><td>17</td><td>0,911</td></tr>
<tr><td>4</td><td>Adin Hill (GAT)</td><td>11</td><td>0,909</td></tr>
<tr><td>5</td><td>Devan Dubnyk (OKC)</td><td>21</td><td>0,901</td></tr>
<tr><td>6</td><td>Brandon Halverson (CHI)</td><td>9</td><td>0,894</td></tr>
<tr><td>7</td><td>Kevin Lankinen (CHA)</td><td>9</td><td>0,892</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Ken Appleby (NOR)</td><td>20</td><td>2,10</td></tr>
<tr><td>2</td><td>Chet Pickard (MIL)</td><td>14</td><td>2,71</td></tr>
<tr><td>3</td><td>Adin Hill (GAT)</td><td>11</td><td>2,88</td></tr>
<tr><td>4</td><td>Michael DiPietro (CTW)</td><td>17</td><td>2,92</td></tr>
<tr><td>5</td><td>Devan Dubnyk (OKC)</td><td>21</td><td>3,05</td></tr>
<tr><td>6</td><td>Brandon Halverson (CHI)</td><td>9</td><td>3,27</td></tr>
<tr><td>7</td><td>Kevin Lankinen (CHA)</td><td>9</td><td>3,38</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Ken Appleby (NOR)</td><td>20</td><td>1 229</td></tr>
<tr><td>2</td><td>Devan Dubnyk (OKC)</td><td>21</td><td>1 121</td></tr>
<tr><td>3</td><td>Michael DiPietro (CTW)</td><td>17</td><td>965</td></tr>
<tr><td>4</td><td>Chet Pickard (MIL)</td><td>14</td><td>796</td></tr>
<tr><td>5</td><td>Adin Hill (GAT)</td><td>11</td><td>625</td></tr>
<tr><td>6</td><td>Brandon Halverson (CHI)</td><td>9</td><td>514</td></tr>
<tr><td>7</td><td>Kevin Lankinen (CHA)</td><td>9</td><td>461</td></tr>
<tr><td>8</td><td>Kaapo Kähkönen (WBS)</td><td>7</td><td>396</td></tr>
<tr><td>9</td><td>Colton Point (LAV)</td><td>6</td><td>318</td></tr>
<tr><td>10</td><td>Anders Nilsson (SPR)</td><td>5</td><td>317</td></tr>
<tr><td>11</td><td>Jake Paterson (BRI)</td><td>6</td><td>309</td></tr>
<tr><td>12</td><td>Alex Dubeau (GRG)</td><td>5</td><td>301</td></tr>
<tr><td>13</td><td>Ben Scrivens (CHA)</td><td>6</td><td>280</td></tr>
<tr><td>14</td><td>Sami Aittokallio (CHI)</td><td>4</td><td>243</td></tr>
<tr><td>15</td><td>Alexei Melnichuk (CCC)</td><td>4</td><td>240</td></tr>
<tr><td>16</td><td>Christopher Gibson (MIL)</td><td>4</td><td>226</td></tr>
<tr><td>17</td><td>Felix Sandström (CTW)</td><td>5</td><td>221</td></tr>
<tr><td>18</td><td>Brendan Burke (RCH)</td><td>4</td><td>202</td></tr>
<tr><td>19</td><td>Edward Pasquale (LKE)</td><td>4</td><td>200</td></tr>
<tr><td>20</td><td>Tyler Bunz (OKC)</td><td>6</td><td>173</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Ken Appleby (NOR)</td><td>20</td><td>665</td></tr>
<tr><td>2</td><td>Devan Dubnyk (OKC)</td><td>21</td><td>574</td></tr>
<tr><td>3</td><td>Michael DiPietro (CTW)</td><td>17</td><td>527</td></tr>
<tr><td>4</td><td>Chet Pickard (MIL)</td><td>14</td><td>451</td></tr>
<tr><td>5</td><td>Adin Hill (GAT)</td><td>11</td><td>330</td></tr>
<tr><td>6</td><td>Brandon Halverson (CHI)</td><td>9</td><td>265</td></tr>
<tr><td>7</td><td>Kevin Lankinen (CHA)</td><td>9</td><td>241</td></tr>
<tr><td>8</td><td>Kaapo Kähkönen (WBS)</td><td>7</td><td>230</td></tr>
<tr><td>9</td><td>Alex Dubeau (GRG)</td><td>5</td><td>174</td></tr>
<tr><td>10</td><td>Anders Nilsson (SPR)</td><td>5</td><td>172</td></tr>
<tr><td>11</td><td>Sami Aittokallio (CHI)</td><td>4</td><td>150</td></tr>
<tr><td>12</td><td>Jake Paterson (BRI)</td><td>6</td><td>143</td></tr>
<tr><td>13</td><td>Colton Point (LAV)</td><td>6</td><td>140</td></tr>
<tr><td>14</td><td>Ben Scrivens (CHA)</td><td>6</td><td>137</td></tr>
<tr><td>15</td><td>Felix Sandström (CTW)</td><td>5</td><td>133</td></tr>
<tr><td>16</td><td>Alexei Melnichuk (CCC)</td><td>4</td><td>121</td></tr>
<tr><td>17</td><td>Christopher Gibson (MIL)</td><td>4</td><td>115</td></tr>
<tr><td>18</td><td>Brendan Burke (RCH)</td><td>4</td><td>108</td></tr>
<tr><td>19</td><td>Edward Pasquale (LKE)</td><td>4</td><td>102</td></tr>
<tr><td>20</td><td>Dustin Tokarski (LKE)</td><td>4</td><td>96</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Michael DiPietro (CTW)</td><td>17</td><td>2</td></tr>
<tr><td>2</td><td>Alexei Melnichuk (CCC)</td><td>4</td><td>1</td></tr>
<tr><td>3</td><td>Jake Paterson (BRI)</td><td>6</td><td>1</td></tr>
<tr><td>4</td><td>Adin Hill (GAT)</td><td>11</td><td>1</td></tr>
<tr><td>5</td><td>Chet Pickard (MIL)</td><td>14</td><td>1</td></tr>
<tr><td>6</td><td>Ken Appleby (NOR)</td><td>20</td><td>1</td></tr>
<tr><td>7</td><td>Devan Dubnyk (OKC)</td><td>21</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Ken Appleby (NOR)</td><td>20</td><td>16</td></tr>
<tr><td>2</td><td>Devan Dubnyk (OKC)</td><td>21</td><td>10</td></tr>
<tr><td>3</td><td>Chet Pickard (MIL)</td><td>14</td><td>9</td></tr>
<tr><td>4</td><td>Michael DiPietro (CTW)</td><td>17</td><td>8</td></tr>
<tr><td>5</td><td>Adin Hill (GAT)</td><td>11</td><td>6</td></tr>
<tr><td>6</td><td>Kaapo Kähkönen (WBS)</td><td>7</td><td>4</td></tr>
<tr><td>7</td><td>Brandon Halverson (CHI)</td><td>9</td><td>4</td></tr>
<tr><td>8</td><td>Kevin Lankinen (CHA)</td><td>9</td><td>4</td></tr>
<tr><td>9</td><td>Felix Sandström (CTW)</td><td>5</td><td>3</td></tr>
<tr><td>10</td><td>Tyler Bunz (OKC)</td><td>6</td><td>3</td></tr>
<tr><td>11</td><td>Ben Scrivens (CHA)</td><td>6</td><td>2</td></tr>
<tr><td>12</td><td>Jake Paterson (BRI)</td><td>6</td><td>2</td></tr>
<tr><td>13</td><td>Colton Point (LAV)</td><td>6</td><td>2</td></tr>
<tr><td>14</td><td>Mason McDonald (CHI)</td><td>2</td><td>1</td></tr>
<tr><td>15</td><td>Matt O'Connor (CHI)</td><td>3</td><td>1</td></tr>
<tr><td>16</td><td>Alexei Melnichuk (CCC)</td><td>4</td><td>1</td></tr>
<tr><td>17</td><td>Christopher Gibson (MIL)</td><td>4</td><td>1</td></tr>
<tr><td>18</td><td>Sami Aittokallio (CHI)</td><td>4</td><td>1</td></tr>
<tr><td>19</td><td>Dustin Tokarski (LKE)</td><td>4</td><td>1</td></tr>
<tr><td>20</td><td>Edward Pasquale (LKE)</td><td>4</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Devan Dubnyk (OKC)</td><td>21</td><td>7</td></tr>
<tr><td>2</td><td>Michael DiPietro (CTW)</td><td>17</td><td>6</td></tr>
<tr><td>3</td><td>Jake Paterson (BRI)</td><td>6</td><td>4</td></tr>
<tr><td>4</td><td>Brandon Halverson (CHI)</td><td>9</td><td>4</td></tr>
<tr><td>5</td><td>Kevin Lankinen (CHA)</td><td>9</td><td>4</td></tr>
<tr><td>6</td><td>Adin Hill (GAT)</td><td>11</td><td>4</td></tr>
<tr><td>7</td><td>Alexei Melnichuk (CCC)</td><td>4</td><td>3</td></tr>
<tr><td>8</td><td>Dustin Tokarski (LKE)</td><td>4</td><td>3</td></tr>
<tr><td>9</td><td>Brendan Burke (RCH)</td><td>4</td><td>3</td></tr>
<tr><td>10</td><td>Alex Dubeau (GRG)</td><td>5</td><td>3</td></tr>
<tr><td>11</td><td>Colton Point (LAV)</td><td>6</td><td>3</td></tr>
<tr><td>12</td><td>Kaapo Kähkönen (WBS)</td><td>7</td><td>3</td></tr>
<tr><td>13</td><td>Chet Pickard (MIL)</td><td>14</td><td>3</td></tr>
<tr><td>14</td><td>Ken Appleby (NOR)</td><td>20</td><td>3</td></tr>
<tr><td>15</td><td>Christopher Gibson (MIL)</td><td>4</td><td>2</td></tr>
<tr><td>16</td><td>Sami Aittokallio (CHI)</td><td>4</td><td>2</td></tr>
<tr><td>17</td><td>Spencer Knight (NOR)</td><td>1</td><td>1</td></tr>
<tr><td>18</td><td>Danny aus den Birken (CCC)</td><td>1</td><td>1</td></tr>
<tr><td>19</td><td>Antti Niemi (GAT)</td><td>2</td><td>1</td></tr>
<tr><td>20</td><td>Mason McDonald (CHI)</td><td>2</td><td>1</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
