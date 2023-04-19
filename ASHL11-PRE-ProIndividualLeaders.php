<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Individual Leaders</title>
<script src="ASHL11-PRE.js"></script>
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
<b>Minimum Games Played: 1</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Jordan Eberle (BUF)</td><td>4</td><td>4</td></tr>
<tr><td>2</td><td>Jaden Schwartz (DET)</td><td>4</td><td>4</td></tr>
<tr><td>3</td><td>Kailer Yamamoto (EDM)</td><td>4</td><td>4</td></tr>
<tr><td>4</td><td>Sean Monahan (COL)</td><td>4</td><td>4</td></tr>
<tr><td>5</td><td>Robby Fabbri (COL)</td><td>4</td><td>4</td></tr>
<tr><td>6</td><td>Jakub Voracek (SEA)</td><td>4</td><td>3</td></tr>
<tr><td>7</td><td>Jeff Skinner (LOS)</td><td>4</td><td>3</td></tr>
<tr><td>8</td><td>Logan Couture (VEG)</td><td>4</td><td>3</td></tr>
<tr><td>9</td><td>Sebastian Aho (TOR)</td><td>4</td><td>3</td></tr>
<tr><td>10</td><td>Oskar Lindblom (ARZ)</td><td>4</td><td>3</td></tr>
<tr><td>11</td><td>Matt Duchene (CGY)</td><td>4</td><td>3</td></tr>
<tr><td>12</td><td>Travis Konecny (NYR)</td><td>4</td><td>3</td></tr>
<tr><td>13</td><td>Anton Slepyshev (SEA)</td><td>4</td><td>3</td></tr>
<tr><td>14</td><td>J.T. Miller (NYR)</td><td>4</td><td>3</td></tr>
<tr><td>15</td><td>Brandon Saad (CAR)</td><td>4</td><td>3</td></tr>
<tr><td>16</td><td>Jared Cowen (WSH)</td><td>4</td><td>3</td></tr>
<tr><td>17</td><td>Dmitrij Jaskin (CLB)</td><td>4</td><td>3</td></tr>
<tr><td>18</td><td>Pavel Buchnevich (NYI)</td><td>4</td><td>3</td></tr>
<tr><td>19</td><td>Rihards Bukarts (CAR)</td><td>4</td><td>3</td></tr>
<tr><td>20</td><td>Joel Eriksson Ek (CLB)</td><td>4</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Erik Karlsson (OTT)</td><td>4</td><td>6</td></tr>
<tr><td>2</td><td>Torey Krug (MTL)</td><td>4</td><td>6</td></tr>
<tr><td>3</td><td>Andreas Englund (COL)</td><td>4</td><td>5</td></tr>
<tr><td>4</td><td>Yann Sauve (COL)</td><td>4</td><td>5</td></tr>
<tr><td>5</td><td>Brian Dumoulin (CAR)</td><td>4</td><td>5</td></tr>
<tr><td>6</td><td>Cody Ceci (EDM)</td><td>4</td><td>5</td></tr>
<tr><td>7</td><td>Seth Jones (NYI)</td><td>4</td><td>5</td></tr>
<tr><td>8</td><td>Cody Franson (CHI)</td><td>4</td><td>4</td></tr>
<tr><td>9</td><td>Brendan Gallagher (EDM)</td><td>4</td><td>4</td></tr>
<tr><td>10</td><td>Dmitri Kulikov (WPG)</td><td>4</td><td>4</td></tr>
<tr><td>11</td><td>Jaccob Slavin (WSH)</td><td>4</td><td>4</td></tr>
<tr><td>12</td><td>Ivan Provorov (NYR)</td><td>4</td><td>4</td></tr>
<tr><td>13</td><td>Devon Toews (COL)</td><td>4</td><td>4</td></tr>
<tr><td>14</td><td>Ryan McDonagh (NYR)</td><td>4</td><td>4</td></tr>
<tr><td>15</td><td>Ryan Suter (SEA)</td><td>4</td><td>4</td></tr>
<tr><td>16</td><td>Tim Erixon (PIT)</td><td>4</td><td>4</td></tr>
<tr><td>17</td><td>Colten Teubert (EDM)</td><td>4</td><td>4</td></tr>
<tr><td>18</td><td>Erik Gudbranson (CLB)</td><td>4</td><td>4</td></tr>
<tr><td>19</td><td>Adam Larsson (PHI)</td><td>4</td><td>4</td></tr>
<tr><td>20</td><td>Zemgus Girgensons (VAN)</td><td>4</td><td>4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Mathew Barzal (DAL)</td><td>4</td><td>25</td></tr>
<tr><td>2</td><td>Viktor Arvidsson (NYR)</td><td>4</td><td>20</td></tr>
<tr><td>3</td><td>Jack Eichel (NJD)</td><td>4</td><td>20</td></tr>
<tr><td>4</td><td>Sam Gagner (EDM)</td><td>4</td><td>19</td></tr>
<tr><td>5</td><td>Jaden Schwartz (DET)</td><td>4</td><td>19</td></tr>
<tr><td>6</td><td>Connor McDavid (VAN)</td><td>4</td><td>19</td></tr>
<tr><td>7</td><td>Nick Suzuki (DET)</td><td>4</td><td>19</td></tr>
<tr><td>8</td><td>Jordan Eberle (BUF)</td><td>4</td><td>18</td></tr>
<tr><td>9</td><td>Nick Leddy (DET)</td><td>4</td><td>17</td></tr>
<tr><td>10</td><td>Kailer Yamamoto (EDM)</td><td>4</td><td>17</td></tr>
<tr><td>11</td><td>Jesse Puljujarvi (OTT)</td><td>4</td><td>16</td></tr>
<tr><td>12</td><td>William Nylander (NJD)</td><td>4</td><td>16</td></tr>
<tr><td>13</td><td>Victor Hedman (WPG)</td><td>4</td><td>16</td></tr>
<tr><td>14</td><td>Auston Matthews (WPG)</td><td>4</td><td>15</td></tr>
<tr><td>15</td><td>Steven Stamkos (ARZ)</td><td>4</td><td>15</td></tr>
<tr><td>16</td><td>Taylor Hall (EDM)</td><td>4</td><td>15</td></tr>
<tr><td>17</td><td>Brandon Saad (CAR)</td><td>4</td><td>15</td></tr>
<tr><td>18</td><td>Alex Galchenyuk (CGY)</td><td>4</td><td>15</td></tr>
<tr><td>19</td><td>Kirill Kaprizov (WSH)</td><td>4</td><td>15</td></tr>
<tr><td>20</td><td>Jeff Skinner (LOS)</td><td>4</td><td>14</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Dmitrij Jaskin (CLB)</td><td>4</td><td>50,00%</td></tr>
<tr><td>2</td><td>Rihards Bukarts (CAR)</td><td>4</td><td>50,00%</td></tr>
<tr><td>3</td><td>Robby Fabbri (COL)</td><td>4</td><td>50,00%</td></tr>
<tr><td>4</td><td>Tage Thompson (NSH)</td><td>4</td><td>50,00%</td></tr>
<tr><td>5</td><td>Vince Hinostroza (NYI)</td><td>4</td><td>40,00%</td></tr>
<tr><td>6</td><td>Artturi Lehkonen (SJS)</td><td>4</td><td>40,00%</td></tr>
<tr><td>7</td><td>Miro Heiskanen (TBL)</td><td>4</td><td>40,00%</td></tr>
<tr><td>8</td><td>Tyler Motte (NSH)</td><td>4</td><td>40,00%</td></tr>
<tr><td>9</td><td>Will Butcher (NJD)</td><td>4</td><td>40,00%</td></tr>
<tr><td>10</td><td>Tyler Biggs (OTT)</td><td>4</td><td>40,00%</td></tr>
<tr><td>11</td><td>Travis Konecny (NYR)</td><td>4</td><td>37,50%</td></tr>
<tr><td>12</td><td>J.T. Miller (NYR)</td><td>4</td><td>33,33%</td></tr>
<tr><td>13</td><td>Jared Cowen (WSH)</td><td>4</td><td>33,33%</td></tr>
<tr><td>14</td><td>Brendan Leipsic (ANH)</td><td>4</td><td>33,33%</td></tr>
<tr><td>15</td><td>Martin Gernat (EDM)</td><td>4</td><td>33,33%</td></tr>
<tr><td>16</td><td>John Quenneville (CAR)</td><td>4</td><td>33,33%</td></tr>
<tr><td>17</td><td>Sean Monahan (COL)</td><td>4</td><td>30,77%</td></tr>
<tr><td>18</td><td>Jakub Voracek (SEA)</td><td>4</td><td>30,00%</td></tr>
<tr><td>19</td><td>Anton Slepyshev (SEA)</td><td>4</td><td>30,00%</td></tr>
<tr><td>20</td><td>Joel Eriksson Ek (CLB)</td><td>4</td><td>30,00%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Robby Fabbri (COL)</td><td>4</td><td>4-4-8</td></tr>
<tr><td>2</td><td>Sean Monahan (COL)</td><td>4</td><td>4-2-6</td></tr>
<tr><td>3</td><td>J.T. Miller (NYR)</td><td>4</td><td>3-3-6</td></tr>
<tr><td>4</td><td>Tyson Jost (SEA)</td><td>4</td><td>3-3-6</td></tr>
<tr><td>5</td><td>Jaden Schwartz (DET)</td><td>4</td><td>4-1-5</td></tr>
<tr><td>6</td><td>Logan Couture (VEG)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>7</td><td>Sebastian Aho (TOR)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>8</td><td>Dmitrij Jaskin (CLB)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>9</td><td>Joel Eriksson Ek (CLB)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>10</td><td>Auston Matthews (WPG)</td><td>4</td><td>2-3-5</td></tr>
<tr><td>11</td><td>Sam Gagner (EDM)</td><td>4</td><td>2-3-5</td></tr>
<tr><td>12</td><td>Mikhail Grigorenko (BUF)</td><td>4</td><td>1-4-5</td></tr>
<tr><td>13</td><td>Aleksander Barkov (FLA)</td><td>4</td><td>1-4-5</td></tr>
<tr><td>14</td><td>Matt Duchene (CGY)</td><td>4</td><td>3-1-4</td></tr>
<tr><td>15</td><td>Connor McDavid (VAN)</td><td>4</td><td>3-1-4</td></tr>
<tr><td>16</td><td>Jordan Staal (PIT)</td><td>4</td><td>2-2-4</td></tr>
<tr><td>17</td><td>Tobias Rieder (EDM)</td><td>4</td><td>2-2-4</td></tr>
<tr><td>18</td><td>Nathan MacKinnon (CLB)</td><td>4</td><td>2-2-4</td></tr>
<tr><td>19</td><td>Adam Henrique (TOR)</td><td>4</td><td>1-3-4</td></tr>
<tr><td>20</td><td>Colin Wilson (COL)</td><td>4</td><td>1-3-4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Robby Fabbri (COL)</td><td>4</td><td>4-4-8</td></tr>
<tr><td>2</td><td>Kailer Yamamoto (EDM)</td><td>4</td><td>4-2-6</td></tr>
<tr><td>3</td><td>Anton Slepyshev (SEA)</td><td>4</td><td>3-3-6</td></tr>
<tr><td>4</td><td>J.T. Miller (NYR)</td><td>4</td><td>3-3-6</td></tr>
<tr><td>5</td><td>Tyson Jost (SEA)</td><td>4</td><td>3-3-6</td></tr>
<tr><td>6</td><td>Jaden Schwartz (DET)</td><td>4</td><td>4-1-5</td></tr>
<tr><td>7</td><td>Jakub Voracek (SEA)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>8</td><td>Logan Couture (VEG)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>9</td><td>Sebastian Aho (TOR)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>10</td><td>Travis Konecny (NYR)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>11</td><td>Brandon Saad (CAR)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>12</td><td>Dmitrij Jaskin (CLB)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>13</td><td>Pavel Buchnevich (NYI)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>14</td><td>Joel Eriksson Ek (CLB)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>15</td><td>Sam Gagner (EDM)</td><td>4</td><td>2-3-5</td></tr>
<tr><td>16</td><td>Taylor Hall (EDM)</td><td>4</td><td>2-3-5</td></tr>
<tr><td>17</td><td>Nikolaj Ehlers (VAN)</td><td>4</td><td>2-3-5</td></tr>
<tr><td>18</td><td>Remi Elie (CLB)</td><td>4</td><td>2-3-5</td></tr>
<tr><td>19</td><td>Mikhail Grigorenko (BUF)</td><td>4</td><td>1-4-5</td></tr>
<tr><td>20</td><td>Jeff Skinner (LOS)</td><td>4</td><td>3-1-4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Jordan Eberle (BUF)</td><td>4</td><td>4-2-6</td></tr>
<tr><td>2</td><td>Kailer Yamamoto (EDM)</td><td>4</td><td>4-2-6</td></tr>
<tr><td>3</td><td>Anton Slepyshev (SEA)</td><td>4</td><td>3-3-6</td></tr>
<tr><td>4</td><td>Jaden Schwartz (DET)</td><td>4</td><td>4-1-5</td></tr>
<tr><td>5</td><td>Jakub Voracek (SEA)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>6</td><td>Logan Couture (VEG)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>7</td><td>Sebastian Aho (TOR)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>8</td><td>Travis Konecny (NYR)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>9</td><td>Brandon Saad (CAR)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>10</td><td>Dmitrij Jaskin (CLB)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>11</td><td>Pavel Buchnevich (NYI)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>12</td><td>Joel Eriksson Ek (CLB)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>13</td><td>Sam Gagner (EDM)</td><td>4</td><td>2-3-5</td></tr>
<tr><td>14</td><td>Nikolaj Ehlers (VAN)</td><td>4</td><td>2-3-5</td></tr>
<tr><td>15</td><td>Mikhail Grigorenko (BUF)</td><td>4</td><td>1-4-5</td></tr>
<tr><td>16</td><td>Matt Duchene (CGY)</td><td>4</td><td>3-1-4</td></tr>
<tr><td>17</td><td>Nikita Kucherov (NSH)</td><td>3</td><td>2-2-4</td></tr>
<tr><td>18</td><td>Tobias Rieder (EDM)</td><td>4</td><td>2-2-4</td></tr>
<tr><td>19</td><td>Nathan MacKinnon (CLB)</td><td>4</td><td>2-2-4</td></tr>
<tr><td>20</td><td>Kevin Fiala (LOS)</td><td>4</td><td>2-2-4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Torey Krug (MTL)</td><td>4</td><td>1-6-7</td></tr>
<tr><td>2</td><td>Ryan Suter (SEA)</td><td>4</td><td>2-4-6</td></tr>
<tr><td>3</td><td>Erik Karlsson (OTT)</td><td>4</td><td>0-6-6</td></tr>
<tr><td>4</td><td>Jared Cowen (WSH)</td><td>4</td><td>3-2-5</td></tr>
<tr><td>5</td><td>Brandon Montour (ANH)</td><td>4</td><td>2-3-5</td></tr>
<tr><td>6</td><td>Cody Franson (CHI)</td><td>4</td><td>1-4-5</td></tr>
<tr><td>7</td><td>Ryan McDonagh (NYR)</td><td>4</td><td>1-4-5</td></tr>
<tr><td>8</td><td>Erik Gudbranson (CLB)</td><td>4</td><td>1-4-5</td></tr>
<tr><td>9</td><td>Andreas Englund (COL)</td><td>4</td><td>0-5-5</td></tr>
<tr><td>10</td><td>Yann Sauve (COL)</td><td>4</td><td>0-5-5</td></tr>
<tr><td>11</td><td>Brian Dumoulin (CAR)</td><td>4</td><td>0-5-5</td></tr>
<tr><td>12</td><td>Cody Ceci (EDM)</td><td>4</td><td>0-5-5</td></tr>
<tr><td>13</td><td>Seth Jones (NYI)</td><td>4</td><td>0-5-5</td></tr>
<tr><td>14</td><td>Travis Dermott (NJD)</td><td>4</td><td>2-2-4</td></tr>
<tr><td>15</td><td>Will Butcher (NJD)</td><td>4</td><td>2-2-4</td></tr>
<tr><td>16</td><td>Martin Gernat (EDM)</td><td>4</td><td>2-2-4</td></tr>
<tr><td>17</td><td>Cale Makar (NYI)</td><td>4</td><td>2-2-4</td></tr>
<tr><td>18</td><td>Alex Pietrangelo (MTL)</td><td>4</td><td>1-3-4</td></tr>
<tr><td>19</td><td>Alexander Edler (ANH)</td><td>4</td><td>1-3-4</td></tr>
<tr><td>20</td><td>Drew Doughty (LOS)</td><td>4</td><td>1-3-4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Jason Zucker (COL)</td><td>1</td><td>4,84</td></tr>
<tr><td>2</td><td>Anton Slepyshev (SEA)</td><td>4</td><td>2,06</td></tr>
<tr><td>3</td><td>Tyson Jost (SEA)</td><td>4</td><td>2,06</td></tr>
<tr><td>4</td><td>Kyle Turris (MTL)</td><td>4</td><td>2,03</td></tr>
<tr><td>5</td><td>Robby Fabbri (COL)</td><td>4</td><td>1,96</td></tr>
<tr><td>6</td><td>Dmitrij Jaskin (CLB)</td><td>4</td><td>1,94</td></tr>
<tr><td>7</td><td>J.T. Miller (NYR)</td><td>4</td><td>1,79</td></tr>
<tr><td>8</td><td>Remi Elie (CLB)</td><td>4</td><td>1,70</td></tr>
<tr><td>9</td><td>Joel Eriksson Ek (CLB)</td><td>4</td><td>1,69</td></tr>
<tr><td>10</td><td>Mathieu Joseph (LOS)</td><td>3</td><td>1,67</td></tr>
<tr><td>11</td><td>Kailer Yamamoto (EDM)</td><td>4</td><td>1,66</td></tr>
<tr><td>12</td><td>Jakub Voracek (SEA)</td><td>4</td><td>1,62</td></tr>
<tr><td>13</td><td>Ryan Suter (SEA)</td><td>4</td><td>1,62</td></tr>
<tr><td>14</td><td>Jordan Eberle (BUF)</td><td>4</td><td>1,59</td></tr>
<tr><td>15</td><td>Torey Krug (MTL)</td><td>4</td><td>1,55</td></tr>
<tr><td>16</td><td>Andreas Englund (COL)</td><td>4</td><td>1,51</td></tr>
<tr><td>17</td><td>Adam Helewka (CHI)</td><td>4</td><td>1,48</td></tr>
<tr><td>18</td><td>Alexander Kerfoot (COL)</td><td>4</td><td>1,47</td></tr>
<tr><td>19</td><td>Brendan Gallagher (EDM)</td><td>4</td><td>1,46</td></tr>
<tr><td>20</td><td>Nathan MacKinnon (CLB)</td><td>4</td><td>1,44</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>David Griger (MTL)</td><td>2</td><td>91,67%</td></tr>
<tr><td>2</td><td>Matthew Peca (QUE)</td><td>1</td><td>75,00%</td></tr>
<tr><td>3</td><td>Ryan Hartman (NYI)</td><td>4</td><td>66,67%</td></tr>
<tr><td>4</td><td>Tyler Bertuzzi (NYR)</td><td>4</td><td>64,00%</td></tr>
<tr><td>5</td><td>Adam Henrique (TOR)</td><td>4</td><td>62,50%</td></tr>
<tr><td>6</td><td>Ryan Kesler (DET)</td><td>4</td><td>62,12%</td></tr>
<tr><td>7</td><td>Brett Pollock (NSH)</td><td>4</td><td>60,61%</td></tr>
<tr><td>8</td><td>Patrice Bergeron (NJD)</td><td>4</td><td>60,16%</td></tr>
<tr><td>9</td><td>Marko Dano (BOS)</td><td>4</td><td>60,00%</td></tr>
<tr><td>10</td><td>Jack Evans (QUE)</td><td>3</td><td>59,52%</td></tr>
<tr><td>11</td><td>Alexander Burmistrov (VEG)</td><td>4</td><td>59,42%</td></tr>
<tr><td>12</td><td>David Krejci (NYI)</td><td>4</td><td>59,18%</td></tr>
<tr><td>13</td><td>Mika Zibanejad (VEG)</td><td>4</td><td>58,10%</td></tr>
<tr><td>14</td><td>Jamie Benn (QUE)</td><td>4</td><td>58,06%</td></tr>
<tr><td>15</td><td>Tyler Graovac (MIN)</td><td>3</td><td>57,89%</td></tr>
<tr><td>16</td><td>Mitchell Marner (NSH)</td><td>3</td><td>57,83%</td></tr>
<tr><td>17</td><td>Paul Stastny (QUE)</td><td>4</td><td>57,83%</td></tr>
<tr><td>18</td><td>Greg McKegg (BUF)</td><td>4</td><td>57,81%</td></tr>
<tr><td>19</td><td>Michael Bournival (BUF)</td><td>4</td><td>56,90%</td></tr>
<tr><td>20</td><td>Dominik Kahun (WSH)</td><td>4</td><td>56,76%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Martin Gernat (EDM)</td><td>4</td><td>8</td></tr>
<tr><td>2</td><td>Colten Teubert (EDM)</td><td>4</td><td>7</td></tr>
<tr><td>3</td><td>Dmitrij Jaskin (CLB)</td><td>4</td><td>7</td></tr>
<tr><td>4</td><td>Joel Eriksson Ek (CLB)</td><td>4</td><td>7</td></tr>
<tr><td>5</td><td>Remi Elie (CLB)</td><td>4</td><td>7</td></tr>
<tr><td>6</td><td>Yann Sauve (COL)</td><td>4</td><td>6</td></tr>
<tr><td>7</td><td>Logan Couture (VEG)</td><td>4</td><td>5</td></tr>
<tr><td>8</td><td>Devon Toews (COL)</td><td>4</td><td>5</td></tr>
<tr><td>9</td><td>Stefan Elliott (BUF)</td><td>4</td><td>5</td></tr>
<tr><td>10</td><td>Tobias Rieder (EDM)</td><td>4</td><td>5</td></tr>
<tr><td>11</td><td>Evgeny Kuznetsov (CAR)</td><td>4</td><td>5</td></tr>
<tr><td>12</td><td>Anthony DeAngelo (PIT)</td><td>4</td><td>5</td></tr>
<tr><td>13</td><td>Andreas Johnsson (MIN)</td><td>3</td><td>4</td></tr>
<tr><td>14</td><td>Jordan Oesterle (VAN)</td><td>4</td><td>4</td></tr>
<tr><td>15</td><td>Drake Batherson (NSH)</td><td>4</td><td>4</td></tr>
<tr><td>16</td><td>Erik Karlsson (OTT)</td><td>4</td><td>4</td></tr>
<tr><td>17</td><td>Jakub Voracek (SEA)</td><td>4</td><td>4</td></tr>
<tr><td>18</td><td>Jordan Eberle (BUF)</td><td>4</td><td>4</td></tr>
<tr><td>19</td><td>Luca Sbisa (CAR)</td><td>4</td><td>4</td></tr>
<tr><td>20</td><td>Ivan Provorov (NYR)</td><td>4</td><td>4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Vyacheslav Voynov (COL)</td><td>4</td><td>12</td></tr>
<tr><td>2</td><td>Haydn Fleury (DAL)</td><td>4</td><td>12</td></tr>
<tr><td>3</td><td>Brandon Montour (ANH)</td><td>4</td><td>12</td></tr>
<tr><td>4</td><td>Travis Hamonic (CGY)</td><td>4</td><td>11</td></tr>
<tr><td>5</td><td>Simon Despres (TBL)</td><td>4</td><td>10</td></tr>
<tr><td>6</td><td>Dougie Hamilton (VAN)</td><td>4</td><td>10</td></tr>
<tr><td>7</td><td>William Carrier (CHI)</td><td>4</td><td>10</td></tr>
<tr><td>8</td><td>Jake Virtanen (MIN)</td><td>3</td><td>8</td></tr>
<tr><td>9</td><td>Alexander Edler (ANH)</td><td>4</td><td>8</td></tr>
<tr><td>10</td><td>Brad Marchand (BOS)</td><td>4</td><td>8</td></tr>
<tr><td>11</td><td>A.J. Greer (SJS)</td><td>4</td><td>8</td></tr>
<tr><td>12</td><td>Ben Chiarot (OTT)</td><td>4</td><td>8</td></tr>
<tr><td>13</td><td>Christian Dvorak (CLB)</td><td>4</td><td>8</td></tr>
<tr><td>14</td><td>Jesperi Kotkaniemi (ANH)</td><td>4</td><td>8</td></tr>
<tr><td>15</td><td>Luca Sbisa (CAR)</td><td>4</td><td>8</td></tr>
<tr><td>16</td><td>Nino Niederreiter (WSH)</td><td>4</td><td>8</td></tr>
<tr><td>17</td><td>Colten Teubert (EDM)</td><td>4</td><td>8</td></tr>
<tr><td>18</td><td>Jake Gardiner (MTL)</td><td>4</td><td>8</td></tr>
<tr><td>19</td><td>Brady Skjei (STL)</td><td>4</td><td>8</td></tr>
<tr><td>20</td><td>Matt Dumba (PHI)</td><td>4</td><td>8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Brady Skjei (STL)</td><td>4</td><td>12</td></tr>
<tr><td>2</td><td>Seth Jones (NYI)</td><td>4</td><td>12</td></tr>
<tr><td>3</td><td>Adam Pelech (NSH)</td><td>4</td><td>12</td></tr>
<tr><td>4</td><td>Marc Staal (CHI)</td><td>4</td><td>11</td></tr>
<tr><td>5</td><td>Dysin Mayo (NJD)</td><td>4</td><td>10</td></tr>
<tr><td>6</td><td>Dion Phaneuf (NYI)</td><td>4</td><td>10</td></tr>
<tr><td>7</td><td>Ryan McDonagh (NYR)</td><td>4</td><td>10</td></tr>
<tr><td>8</td><td>Ryan Suter (SEA)</td><td>4</td><td>10</td></tr>
<tr><td>9</td><td>Jared Cowen (WSH)</td><td>4</td><td>10</td></tr>
<tr><td>10</td><td>Hampus Lindholm (ARZ)</td><td>4</td><td>10</td></tr>
<tr><td>11</td><td>Connor Murphy (QUE)</td><td>4</td><td>10</td></tr>
<tr><td>12</td><td>Cale Makar (NYI)</td><td>4</td><td>10</td></tr>
<tr><td>13</td><td>John Carlson (QUE)</td><td>4</td><td>9</td></tr>
<tr><td>14</td><td>Nick Leddy (DET)</td><td>4</td><td>9</td></tr>
<tr><td>15</td><td>Esa Lindell (TBL)</td><td>4</td><td>9</td></tr>
<tr><td>16</td><td>Travis Hamonic (CGY)</td><td>4</td><td>9</td></tr>
<tr><td>17</td><td>Zach Bogosian (ARZ)</td><td>4</td><td>9</td></tr>
<tr><td>18</td><td>Oscar Klefbom (CLB)</td><td>4</td><td>9</td></tr>
<tr><td>19</td><td>Brendan Smith (MIN)</td><td>4</td><td>9</td></tr>
<tr><td>20</td><td>Jacob Trouba (NJD)</td><td>4</td><td>9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Travis Dermott (NJD)</td><td>4</td><td>2-2-4</td></tr>
<tr><td>2</td><td>Nick Suzuki (DET)</td><td>4</td><td>1-3-4</td></tr>
<tr><td>3</td><td>Adam Boqvist (CLB)</td><td>4</td><td>0-4-4</td></tr>
<tr><td>4</td><td>Ethan Bear (OTT)</td><td>4</td><td>0-4-4</td></tr>
<tr><td>5</td><td>Tage Thompson (NSH)</td><td>4</td><td>3-0-3</td></tr>
<tr><td>6</td><td>Kirby Dach (EDM)</td><td>4</td><td>2-1-3</td></tr>
<tr><td>7</td><td>Martin Necas (ANH)</td><td>3</td><td>1-2-3</td></tr>
<tr><td>8</td><td>Alexandre Texier (BUF)</td><td>4</td><td>1-2-3</td></tr>
<tr><td>9</td><td>Rasmus Andersson (LOS)</td><td>4</td><td>1-2-3</td></tr>
<tr><td>10</td><td>Mathieu Joseph (LOS)</td><td>3</td><td>0-3-3</td></tr>
<tr><td>11</td><td>Jack Evans (QUE)</td><td>3</td><td>1-1-2</td></tr>
<tr><td>12</td><td>Christian Wolanin (MIN)</td><td>3</td><td>1-1-2</td></tr>
<tr><td>13</td><td>Denis Malgin (NYR)</td><td>4</td><td>1-1-2</td></tr>
<tr><td>14</td><td>Anthony Cirelli (LOS)</td><td>4</td><td>1-1-2</td></tr>
<tr><td>15</td><td>Roope Hintz (NJD)</td><td>4</td><td>1-1-2</td></tr>
<tr><td>16</td><td>Daniel Bernhardt (BUF)</td><td>4</td><td>0-2-2</td></tr>
<tr><td>17</td><td>Gustav Forsling (NYR)</td><td>4</td><td>0-2-2</td></tr>
<tr><td>18</td><td>Erik Foley (MIN)</td><td>4</td><td>0-2-2</td></tr>
<tr><td>19</td><td>Ryan Poehling (NYR)</td><td>4</td><td>1-0-1</td></tr>
<tr><td>20</td><td>Sam Steel (ARZ)</td><td>4</td><td>1-0-1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Jack Eichel (NJD)</td><td>4</td><td>20</td></tr>
<tr><td>2</td><td>Brandon Montour (ANH)</td><td>4</td><td>20</td></tr>
<tr><td>3</td><td>William Carrier (CHI)</td><td>4</td><td>17</td></tr>
<tr><td>4</td><td>Brent Burns (MTL)</td><td>4</td><td>16</td></tr>
<tr><td>5</td><td>Brayden McNabb (CHI)</td><td>4</td><td>16</td></tr>
<tr><td>6</td><td>Adam Erne (BUF)</td><td>4</td><td>16</td></tr>
<tr><td>7</td><td>Luca Sbisa (CAR)</td><td>4</td><td>15</td></tr>
<tr><td>8</td><td>Jacob Trouba (NJD)</td><td>4</td><td>15</td></tr>
<tr><td>9</td><td>David Musil (FLA)</td><td>4</td><td>15</td></tr>
<tr><td>10</td><td>Ryan Callahan (EDM)</td><td>4</td><td>14</td></tr>
<tr><td>11</td><td>Brad Marchand (BOS)</td><td>4</td><td>13</td></tr>
<tr><td>12</td><td>Jordan Staal (PIT)</td><td>4</td><td>13</td></tr>
<tr><td>13</td><td>Luke Schenn (SJS)</td><td>4</td><td>13</td></tr>
<tr><td>14</td><td>Travis Hamonic (CGY)</td><td>4</td><td>13</td></tr>
<tr><td>15</td><td>Erik Gudbranson (CLB)</td><td>4</td><td>13</td></tr>
<tr><td>16</td><td>Michael Matheson (PIT)</td><td>4</td><td>13</td></tr>
<tr><td>17</td><td>Timo Meier (SJS)</td><td>4</td><td>13</td></tr>
<tr><td>18</td><td>Pierre-Luc Dubois (PHI)</td><td>4</td><td>12</td></tr>
<tr><td>19</td><td>Simon Despres (TBL)</td><td>4</td><td>12</td></tr>
<tr><td>20</td><td>Colton Parayko (NSH)</td><td>4</td><td>12</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Artturi Lehkonen (SJS)</td><td>4</td><td>2</td></tr>
<tr><td>2</td><td>Oskar Lindblom (ARZ)</td><td>4</td><td>2</td></tr>
<tr><td>3</td><td>Miro Heiskanen (TBL)</td><td>4</td><td>2</td></tr>
<tr><td>4</td><td>J.T. Miller (NYR)</td><td>4</td><td>2</td></tr>
<tr><td>5</td><td>Jared Cowen (WSH)</td><td>4</td><td>2</td></tr>
<tr><td>6</td><td>Jonas Brodin (CLB)</td><td>4</td><td>2</td></tr>
<tr><td>7</td><td>Jaden Schwartz (DET)</td><td>4</td><td>2</td></tr>
<tr><td>8</td><td>Kailer Yamamoto (EDM)</td><td>4</td><td>2</td></tr>
<tr><td>9</td><td>Mitch Holmberg (CHI)</td><td>4</td><td>2</td></tr>
<tr><td>10</td><td>Sean Monahan (COL)</td><td>4</td><td>2</td></tr>
<tr><td>11</td><td>Rihards Bukarts (CAR)</td><td>4</td><td>2</td></tr>
<tr><td>12</td><td>Connor McDavid (VAN)</td><td>4</td><td>2</td></tr>
<tr><td>13</td><td>Brandon Montour (ANH)</td><td>4</td><td>2</td></tr>
<tr><td>14</td><td>Mitchell Marner (NSH)</td><td>3</td><td>1</td></tr>
<tr><td>15</td><td>Alex Pietrangelo (MTL)</td><td>4</td><td>1</td></tr>
<tr><td>16</td><td>Alexander Edler (ANH)</td><td>4</td><td>1</td></tr>
<tr><td>17</td><td>Nick Schmaltz (PHI)</td><td>4</td><td>1</td></tr>
<tr><td>18</td><td>Brent Burns (MTL)</td><td>4</td><td>1</td></tr>
<tr><td>19</td><td>Claude Giroux (PHI)</td><td>4</td><td>1</td></tr>
<tr><td>20</td><td>Colin Wilson (COL)</td><td>4</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Petteri Lindbohm (TOR)</td><td>4</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Evgeny Grachev (COL)</td><td>4</td><td>2</td></tr>
<tr><td>2</td><td>Logan Couture (VEG)</td><td>4</td><td>2</td></tr>
<tr><td>3</td><td>Nathan MacKinnon (CLB)</td><td>4</td><td>2</td></tr>
<tr><td>4</td><td>Matthew Tkachuk (VAN)</td><td>4</td><td>2</td></tr>
<tr><td>5</td><td>David Griger (MTL)</td><td>2</td><td>1</td></tr>
<tr><td>6</td><td>Vladimir Tarasenko (MIN)</td><td>3</td><td>1</td></tr>
<tr><td>7</td><td>Nic Petan (NSH)</td><td>3</td><td>1</td></tr>
<tr><td>8</td><td>Nikita Kucherov (NSH)</td><td>3</td><td>1</td></tr>
<tr><td>9</td><td>Kaapo Kakko (VAN)</td><td>4</td><td>1</td></tr>
<tr><td>10</td><td>Andrew Cogliano (PIT)</td><td>4</td><td>1</td></tr>
<tr><td>11</td><td>Troy Stecher (PIT)</td><td>4</td><td>1</td></tr>
<tr><td>12</td><td>Cody Franson (CHI)</td><td>4</td><td>1</td></tr>
<tr><td>13</td><td>Corey Perry (LOS)</td><td>4</td><td>1</td></tr>
<tr><td>14</td><td>Alexandre Texier (BUF)</td><td>4</td><td>1</td></tr>
<tr><td>15</td><td>Ryan Poehling (NYR)</td><td>4</td><td>1</td></tr>
<tr><td>16</td><td>Travis Dermott (NJD)</td><td>4</td><td>1</td></tr>
<tr><td>17</td><td>Conor Sheary (PIT)</td><td>4</td><td>1</td></tr>
<tr><td>18</td><td>Jeff Skinner (LOS)</td><td>4</td><td>1</td></tr>
<tr><td>19</td><td>John Tavares (ANH)</td><td>4</td><td>1</td></tr>
<tr><td>20</td><td>Jonathan Toews (CHI)</td><td>4</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Conor Sheary (PIT)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Jack Johnson (SJS)</td><td>4</td><td>1</td></tr>
<tr><td>3</td><td>Jakub Voracek (SEA)</td><td>4</td><td>1</td></tr>
<tr><td>4</td><td>Kyle Clifford (OTT)</td><td>4</td><td>1</td></tr>
<tr><td>5</td><td>Magnus Paajarvi (COL)</td><td>4</td><td>1</td></tr>
<tr><td>6</td><td>Marc Staal (CHI)</td><td>4</td><td>1</td></tr>
<tr><td>7</td><td>Scott Harrington (FLA)</td><td>4</td><td>1</td></tr>
<tr><td>8</td><td>Travis Konecny (NYR)</td><td>4</td><td>1</td></tr>
<tr><td>9</td><td>Dylan McIlrath (OTT)</td><td>4</td><td>1</td></tr>
<tr><td>10</td><td>Emerson Etem (TOR)</td><td>4</td><td>1</td></tr>
<tr><td>11</td><td>Jaden Schwartz (DET)</td><td>4</td><td>1</td></tr>
<tr><td>12</td><td>Kailer Yamamoto (EDM)</td><td>4</td><td>1</td></tr>
<tr><td>13</td><td>Taylor Leier (COL)</td><td>4</td><td>1</td></tr>
<tr><td>14</td><td>Aleksander Barkov (FLA)</td><td>4</td><td>1</td></tr>
<tr><td>15</td><td>Henrik Samuelsson (NJD)</td><td>4</td><td>1</td></tr>
<tr><td>16</td><td>Cole Ully (WPG)</td><td>4</td><td>1</td></tr>
<tr><td>17</td><td>Sean Monahan (COL)</td><td>4</td><td>1</td></tr>
<tr><td>18</td><td>Jonathan Drouin (BUF)</td><td>4</td><td>1</td></tr>
<tr><td>19</td><td>Nikolaj Ehlers (VAN)</td><td>4</td><td>1</td></tr>
<tr><td>20</td><td>Connor McDavid (VAN)</td><td>4</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Jordan Staal (PIT)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Alex Iafallo (COL)</td><td>4</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Erik Karlsson (OTT)</td><td>4</td><td>107</td></tr>
<tr><td>2</td><td>Brandon Saad (CAR)</td><td>4</td><td>104</td></tr>
<tr><td>3</td><td>Jack Johnson (SJS)</td><td>4</td><td>103</td></tr>
<tr><td>4</td><td>Luke Schenn (SJS)</td><td>4</td><td>102</td></tr>
<tr><td>5</td><td>Dylan McIlrath (OTT)</td><td>4</td><td>102</td></tr>
<tr><td>6</td><td>Nick Leddy (DET)</td><td>4</td><td>101</td></tr>
<tr><td>7</td><td>Alex Pietrangelo (MTL)</td><td>4</td><td>100</td></tr>
<tr><td>8</td><td>Dougie Hamilton (VAN)</td><td>4</td><td>99</td></tr>
<tr><td>9</td><td>Luca Sbisa (CAR)</td><td>4</td><td>99</td></tr>
<tr><td>10</td><td>John Carlson (QUE)</td><td>4</td><td>98</td></tr>
<tr><td>11</td><td>Travis Hamonic (CGY)</td><td>4</td><td>98</td></tr>
<tr><td>12</td><td>Cam Fowler (ANH)</td><td>4</td><td>97</td></tr>
<tr><td>13</td><td>Dysin Mayo (NJD)</td><td>4</td><td>97</td></tr>
<tr><td>14</td><td>Cale Makar (NYI)</td><td>4</td><td>96</td></tr>
<tr><td>15</td><td>Jacob Trouba (NJD)</td><td>4</td><td>96</td></tr>
<tr><td>16</td><td>Anthony DeAngelo (PIT)</td><td>4</td><td>96</td></tr>
<tr><td>17</td><td>Jared Cowen (WSH)</td><td>4</td><td>96</td></tr>
<tr><td>18</td><td>Darnell Nurse (VEG)</td><td>4</td><td>96</td></tr>
<tr><td>19</td><td>Brian Dumoulin (CAR)</td><td>4</td><td>95</td></tr>
<tr><td>20</td><td>Jonathan Toews (CHI)</td><td>4</td><td>95</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Kailer Yamamoto (EDM)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Sean Monahan (COL)</td><td>4</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Dmitrij Jaskin (CLB)</td><td>4</td><td>3</td></tr>
<tr><td>2</td><td>Joel Eriksson Ek (CLB)</td><td>4</td><td>3</td></tr>
<tr><td>3</td><td>Evgeny Grachev (COL)</td><td>4</td><td>2</td></tr>
<tr><td>4</td><td>Conor Sheary (PIT)</td><td>4</td><td>2</td></tr>
<tr><td>5</td><td>Jeff Skinner (LOS)</td><td>4</td><td>2</td></tr>
<tr><td>6</td><td>Jordan Staal (PIT)</td><td>4</td><td>2</td></tr>
<tr><td>7</td><td>Kyle Clifford (OTT)</td><td>4</td><td>2</td></tr>
<tr><td>8</td><td>Logan Couture (VEG)</td><td>4</td><td>2</td></tr>
<tr><td>9</td><td>Oskar Lindblom (ARZ)</td><td>4</td><td>2</td></tr>
<tr><td>10</td><td>Miro Heiskanen (TBL)</td><td>4</td><td>2</td></tr>
<tr><td>11</td><td>J.T. Miller (NYR)</td><td>4</td><td>2</td></tr>
<tr><td>12</td><td>Martin Necas (ANH)</td><td>3</td><td>1</td></tr>
<tr><td>13</td><td>Vladimir Tarasenko (MIN)</td><td>3</td><td>1</td></tr>
<tr><td>14</td><td>Nic Petan (NSH)</td><td>3</td><td>1</td></tr>
<tr><td>15</td><td>Adam Henrique (TOR)</td><td>4</td><td>1</td></tr>
<tr><td>16</td><td>Alexander Burmistrov (VEG)</td><td>4</td><td>1</td></tr>
<tr><td>17</td><td>Nick Schmaltz (PHI)</td><td>4</td><td>1</td></tr>
<tr><td>18</td><td>Jordan Kyrou (NYI)</td><td>4</td><td>1</td></tr>
<tr><td>19</td><td>Cody Franson (CHI)</td><td>4</td><td>1</td></tr>
<tr><td>20</td><td>Jack Johnson (SJS)</td><td>4</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Erik Karlsson (OTT)</td><td>4</td><td>4</td></tr>
<tr><td>2</td><td>Jordan Eberle (BUF)</td><td>4</td><td>4</td></tr>
<tr><td>3</td><td>Jordan Staal (PIT)</td><td>4</td><td>4</td></tr>
<tr><td>4</td><td>Yann Sauve (COL)</td><td>4</td><td>4</td></tr>
<tr><td>5</td><td>J.T. Miller (NYR)</td><td>4</td><td>4</td></tr>
<tr><td>6</td><td>Tobias Rieder (EDM)</td><td>4</td><td>4</td></tr>
<tr><td>7</td><td>Brandon Saad (CAR)</td><td>4</td><td>4</td></tr>
<tr><td>8</td><td>Mikhail Grigorenko (BUF)</td><td>4</td><td>4</td></tr>
<tr><td>9</td><td>Cody Ceci (EDM)</td><td>4</td><td>4</td></tr>
<tr><td>10</td><td>Darren Dietz (VEG)</td><td>4</td><td>4</td></tr>
<tr><td>11</td><td>Nathan MacKinnon (CLB)</td><td>4</td><td>4</td></tr>
<tr><td>12</td><td>Tyson Jost (SEA)</td><td>4</td><td>4</td></tr>
<tr><td>13</td><td>Mathieu Joseph (LOS)</td><td>3</td><td>3</td></tr>
<tr><td>14</td><td>Brendan Gallagher (EDM)</td><td>4</td><td>3</td></tr>
<tr><td>15</td><td>Andreas Englund (COL)</td><td>4</td><td>3</td></tr>
<tr><td>16</td><td>Ivan Provorov (NYR)</td><td>4</td><td>3</td></tr>
<tr><td>17</td><td>Matt Duchene (CGY)</td><td>4</td><td>3</td></tr>
<tr><td>18</td><td>Nicklas Backstrom (CLB)</td><td>4</td><td>3</td></tr>
<tr><td>19</td><td>Ryan Suter (SEA)</td><td>4</td><td>3</td></tr>
<tr><td>20</td><td>Sam Gagner (EDM)</td><td>4</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>John Tavares (ANH)</td><td>4</td><td>15</td></tr>
<tr><td>2</td><td>Jonathan Toews (CHI)</td><td>4</td><td>14</td></tr>
<tr><td>3</td><td>Mathew Barzal (DAL)</td><td>4</td><td>14</td></tr>
<tr><td>4</td><td>Brandon Sutter (SJS)</td><td>4</td><td>12</td></tr>
<tr><td>5</td><td>Jordan Kyrou (NYI)</td><td>4</td><td>12</td></tr>
<tr><td>6</td><td>Erik Karlsson (OTT)</td><td>4</td><td>12</td></tr>
<tr><td>7</td><td>Jeff Skinner (LOS)</td><td>4</td><td>12</td></tr>
<tr><td>8</td><td>Sidney Crosby (MTL)</td><td>4</td><td>12</td></tr>
<tr><td>9</td><td>Sean Couturier (DAL)</td><td>4</td><td>12</td></tr>
<tr><td>10</td><td>Ryan Johansen (OTT)</td><td>4</td><td>12</td></tr>
<tr><td>11</td><td>Brad Marchand (BOS)</td><td>4</td><td>11</td></tr>
<tr><td>12</td><td>Nicolas Roy (LOS)</td><td>4</td><td>11</td></tr>
<tr><td>13</td><td>Michael Dal Colle (WSH)</td><td>4</td><td>11</td></tr>
<tr><td>14</td><td>Taylor Hall (EDM)</td><td>4</td><td>11</td></tr>
<tr><td>15</td><td>Clayton Keller (SJS)</td><td>4</td><td>11</td></tr>
<tr><td>16</td><td>Ryan Strome (ANH)</td><td>4</td><td>11</td></tr>
<tr><td>17</td><td>Ryan Murray (PHI)</td><td>4</td><td>11</td></tr>
<tr><td>18</td><td>Filip Forsberg (MTL)</td><td>4</td><td>11</td></tr>
<tr><td>19</td><td>Claude Giroux (PHI)</td><td>4</td><td>10</td></tr>
<tr><td>20</td><td>Jaccob Slavin (WSH)</td><td>4</td><td>10</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Auston Matthews (WPG)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Bryan Little (WPG)</td><td>4</td><td>1</td></tr>
<tr><td>3</td><td>Brandon Saad (CAR)</td><td>4</td><td>1</td></tr>
<tr><td>4</td><td>Evgeny Kuznetsov (CAR)</td><td>4</td><td>1</td></tr>
<tr><td>5</td><td>Alex Galchenyuk (CGY)</td><td>4</td><td>1</td></tr>
<tr><td>6</td><td>Tom Wilson (NYI)</td><td>4</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Travis Hamonic (CGY)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Rasmus Dahlin (EDM)</td><td>4</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Rasmus Dahlin (EDM)</td><td>4</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Tristan Jarry (NSH)</td><td>1</td><td>1,000</td></tr>
<tr><td>2</td><td>Jacob Markstrom (ANH)</td><td>3</td><td>0,983</td></tr>
<tr><td>3</td><td>Kaapo Kähkönen (PIT)</td><td>3</td><td>0,960</td></tr>
<tr><td>4</td><td>James Reimer (PIT)</td><td>1</td><td>0,958</td></tr>
<tr><td>5</td><td>Ivan Nalimov (STL)</td><td>2</td><td>0,955</td></tr>
<tr><td>6</td><td>Tuukka Rask (CLB)</td><td>1</td><td>0,955</td></tr>
<tr><td>7</td><td>Jake Allen (MTL)</td><td>2</td><td>0,945</td></tr>
<tr><td>8</td><td>Cory Schneider (NJD)</td><td>2</td><td>0,944</td></tr>
<tr><td>9</td><td>Darcy Kuemper (NYI)</td><td>2</td><td>0,944</td></tr>
<tr><td>10</td><td>Calvin Pickard (CAR)</td><td>1</td><td>0,943</td></tr>
<tr><td>11</td><td>Marek Mazanec (DAL)</td><td>3</td><td>0,942</td></tr>
<tr><td>12</td><td>Thatcher Demko (MIN)</td><td>2</td><td>0,933</td></tr>
<tr><td>13</td><td>Sami Aittokallio (QUE)</td><td>4</td><td>0,933</td></tr>
<tr><td>14</td><td>Robin Lehner (OTT)</td><td>4</td><td>0,926</td></tr>
<tr><td>15</td><td>Jordan Binnington (DAL)</td><td>1</td><td>0,925</td></tr>
<tr><td>16</td><td>Benjamin Conz (ARZ)</td><td>2</td><td>0,925</td></tr>
<tr><td>17</td><td>Martin Jones (COL)</td><td>2</td><td>0,921</td></tr>
<tr><td>18</td><td>Matt Murray (VEG)</td><td>3</td><td>0,921</td></tr>
<tr><td>19</td><td>Carey Price (WPG)</td><td>4</td><td>0,918</td></tr>
<tr><td>20</td><td>Ilya Samsonov (LOS)</td><td>3</td><td>0,917</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Tristan Jarry (NSH)</td><td>1</td><td>0,00</td></tr>
<tr><td>2</td><td>Jacob Markstrom (ANH)</td><td>3</td><td>0,54</td></tr>
<tr><td>3</td><td>Tuukka Rask (CLB)</td><td>1</td><td>1,00</td></tr>
<tr><td>4</td><td>James Reimer (PIT)</td><td>1</td><td>1,00</td></tr>
<tr><td>5</td><td>Kaapo Kähkönen (PIT)</td><td>3</td><td>1,00</td></tr>
<tr><td>6</td><td>Thatcher Demko (MIN)</td><td>2</td><td>1,41</td></tr>
<tr><td>7</td><td>Ivan Nalimov (STL)</td><td>2</td><td>1,50</td></tr>
<tr><td>8</td><td>Marek Mazanec (DAL)</td><td>3</td><td>1,68</td></tr>
<tr><td>9</td><td>Sami Aittokallio (QUE)</td><td>4</td><td>1,88</td></tr>
<tr><td>10</td><td>Jake Allen (MTL)</td><td>2</td><td>1,93</td></tr>
<tr><td>11</td><td>Robin Lehner (OTT)</td><td>4</td><td>1,96</td></tr>
<tr><td>12</td><td>Calvin Pickard (CAR)</td><td>1</td><td>1,98</td></tr>
<tr><td>13</td><td>Michal Neuvirth (LOS)</td><td>1</td><td>2,00</td></tr>
<tr><td>14</td><td>Cory Schneider (NJD)</td><td>2</td><td>2,00</td></tr>
<tr><td>15</td><td>Chris Driedger (VAN)</td><td>4</td><td>2,00</td></tr>
<tr><td>16</td><td>Matt Murray (VEG)</td><td>3</td><td>2,18</td></tr>
<tr><td>17</td><td>Darcy Kuemper (NYI)</td><td>2</td><td>2,18</td></tr>
<tr><td>18</td><td>Benjamin Conz (ARZ)</td><td>2</td><td>2,18</td></tr>
<tr><td>19</td><td>Carey Price (WPG)</td><td>4</td><td>2,21</td></tr>
<tr><td>20</td><td>Sergei Bobrovsky (FLA)</td><td>4</td><td>2,22</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Robin Lehner (OTT)</td><td>4</td><td>245</td></tr>
<tr><td>2</td><td>Carey Price (WPG)</td><td>4</td><td>244</td></tr>
<tr><td>3</td><td>Sergei Bobrovsky (FLA)</td><td>4</td><td>244</td></tr>
<tr><td>4</td><td>Chris Driedger (VAN)</td><td>4</td><td>240</td></tr>
<tr><td>5</td><td>Josh Harding (WSH)</td><td>4</td><td>240</td></tr>
<tr><td>6</td><td>David Rittich (PHI)</td><td>4</td><td>240</td></tr>
<tr><td>7</td><td>Connor Hellebuyck (DET)</td><td>4</td><td>240</td></tr>
<tr><td>8</td><td>Mikko Koskinen (TOR)</td><td>4</td><td>239</td></tr>
<tr><td>9</td><td>Mackenzie Blackwood (CHI)</td><td>4</td><td>223</td></tr>
<tr><td>10</td><td>Jaroslav Halak (SJS)</td><td>4</td><td>219</td></tr>
<tr><td>11</td><td>Ville Husso (EDM)</td><td>4</td><td>216</td></tr>
<tr><td>12</td><td>Jack Campbell (NYR)</td><td>4</td><td>209</td></tr>
<tr><td>13</td><td>Igor Shestyorkin (BOS)</td><td>4</td><td>198</td></tr>
<tr><td>14</td><td>Sami Aittokallio (QUE)</td><td>4</td><td>191</td></tr>
<tr><td>15</td><td>Ken Appleby (TBL)</td><td>4</td><td>191</td></tr>
<tr><td>16</td><td>Kevin Poulin (CAR)</td><td>3</td><td>184</td></tr>
<tr><td>17</td><td>Kaapo Kähkönen (PIT)</td><td>3</td><td>180</td></tr>
<tr><td>18</td><td>Philipp Grubauer (BUF)</td><td>3</td><td>180</td></tr>
<tr><td>19</td><td>Ilya Samsonov (LOS)</td><td>3</td><td>180</td></tr>
<tr><td>20</td><td>Carter Hart (NSH)</td><td>3</td><td>180</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Josh Harding (WSH)</td><td>4</td><td>124</td></tr>
<tr><td>2</td><td>Connor Hellebuyck (DET)</td><td>4</td><td>115</td></tr>
<tr><td>3</td><td>Carey Price (WPG)</td><td>4</td><td>110</td></tr>
<tr><td>4</td><td>Robin Lehner (OTT)</td><td>4</td><td>108</td></tr>
<tr><td>5</td><td>Mikko Koskinen (TOR)</td><td>4</td><td>107</td></tr>
<tr><td>6</td><td>Mackenzie Blackwood (CHI)</td><td>4</td><td>107</td></tr>
<tr><td>7</td><td>Jaroslav Halak (SJS)</td><td>4</td><td>104</td></tr>
<tr><td>8</td><td>Ken Appleby (TBL)</td><td>4</td><td>101</td></tr>
<tr><td>9</td><td>Ville Husso (EDM)</td><td>4</td><td>98</td></tr>
<tr><td>10</td><td>Igor Shestyorkin (BOS)</td><td>4</td><td>97</td></tr>
<tr><td>11</td><td>Ilya Samsonov (LOS)</td><td>3</td><td>96</td></tr>
<tr><td>12</td><td>Chris Driedger (VAN)</td><td>4</td><td>96</td></tr>
<tr><td>13</td><td>David Rittich (PHI)</td><td>4</td><td>94</td></tr>
<tr><td>14</td><td>Sergei Bobrovsky (FLA)</td><td>4</td><td>92</td></tr>
<tr><td>15</td><td>Sami Aittokallio (QUE)</td><td>4</td><td>90</td></tr>
<tr><td>16</td><td>Jonathan Quick (CGY)</td><td>4</td><td>89</td></tr>
<tr><td>17</td><td>Marek Mazanec (DAL)</td><td>3</td><td>86</td></tr>
<tr><td>18</td><td>Alexandar Georgiyev (CLB)</td><td>3</td><td>86</td></tr>
<tr><td>19</td><td>Carter Hart (NSH)</td><td>3</td><td>85</td></tr>
<tr><td>20</td><td>Kevin Poulin (CAR)</td><td>3</td><td>83</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Tristan Jarry (NSH)</td><td>1</td><td>1</td></tr>
<tr><td>2</td><td>Cory Schneider (NJD)</td><td>2</td><td>1</td></tr>
<tr><td>3</td><td>Thatcher Demko (MIN)</td><td>2</td><td>1</td></tr>
<tr><td>4</td><td>Ivan Nalimov (STL)</td><td>2</td><td>1</td></tr>
<tr><td>5</td><td>Kaapo Kähkönen (PIT)</td><td>3</td><td>1</td></tr>
<tr><td>6</td><td>Oscar Dansk (ANH)</td><td>3</td><td>1</td></tr>
<tr><td>7</td><td>Jacob Markstrom (ANH)</td><td>3</td><td>1</td></tr>
<tr><td>8</td><td>Marek Mazanec (DAL)</td><td>3</td><td>1</td></tr>
<tr><td>9</td><td>Jack Campbell (NYR)</td><td>4</td><td>1</td></tr>
<tr><td>10</td><td>David Rittich (PHI)</td><td>4</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Kaapo Kähkönen (PIT)</td><td>3</td><td>3</td></tr>
<tr><td>2</td><td>Philipp Grubauer (BUF)</td><td>3</td><td>3</td></tr>
<tr><td>3</td><td>Ilya Samsonov (LOS)</td><td>3</td><td>3</td></tr>
<tr><td>4</td><td>Chris Driedger (VAN)</td><td>4</td><td>3</td></tr>
<tr><td>5</td><td>Ville Husso (EDM)</td><td>4</td><td>3</td></tr>
<tr><td>6</td><td>Cory Schneider (NJD)</td><td>2</td><td>2</td></tr>
<tr><td>7</td><td>Andrew Hammond (COL)</td><td>2</td><td>2</td></tr>
<tr><td>8</td><td>Matt Murray (VEG)</td><td>3</td><td>2</td></tr>
<tr><td>9</td><td>Kevin Poulin (CAR)</td><td>3</td><td>2</td></tr>
<tr><td>10</td><td>Alexandar Georgiyev (CLB)</td><td>3</td><td>2</td></tr>
<tr><td>11</td><td>Carter Hart (NSH)</td><td>3</td><td>2</td></tr>
<tr><td>12</td><td>Jack Campbell (NYR)</td><td>4</td><td>2</td></tr>
<tr><td>13</td><td>Carey Price (WPG)</td><td>4</td><td>2</td></tr>
<tr><td>14</td><td>Sami Aittokallio (QUE)</td><td>4</td><td>2</td></tr>
<tr><td>15</td><td>Mackenzie Blackwood (CHI)</td><td>4</td><td>2</td></tr>
<tr><td>16</td><td>Robin Lehner (OTT)</td><td>4</td><td>2</td></tr>
<tr><td>17</td><td>Sergei Bobrovsky (FLA)</td><td>4</td><td>2</td></tr>
<tr><td>18</td><td>Connor Hellebuyck (DET)</td><td>4</td><td>2</td></tr>
<tr><td>19</td><td>Josh Harding (WSH)</td><td>4</td><td>2</td></tr>
<tr><td>20</td><td>David Rittich (PHI)</td><td>4</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Ben Bishop (NYI)</td><td>3</td><td>1,000</td></tr>
<tr><td>2</td><td>Kevin Poulin (CAR)</td><td>2</td><td>1,000</td></tr>
<tr><td>3</td><td>Carey Price (WPG)</td><td>3</td><td>0,667</td></tr>
<tr><td>4</td><td>Andrey Vasilevskiy (NYR)</td><td>2</td><td>0,500</td></tr>
<tr><td>5</td><td>Jonathan Quick (CGY)</td><td>3</td><td>0,333</td></tr>
<tr><td>6</td><td>Robin Lehner (OTT)</td><td>2</td><td>0,000</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Ken Appleby (TBL)</td><td>4</td><td>4</td></tr>
<tr><td>2</td><td>Braden Holtby (ARZ)</td><td>3</td><td>3</td></tr>
<tr><td>3</td><td>Igor Shestyorkin (BOS)</td><td>4</td><td>3</td></tr>
<tr><td>4</td><td>Jaroslav Halak (SJS)</td><td>4</td><td>3</td></tr>
<tr><td>5</td><td>Ilya Sorokin (NJD)</td><td>2</td><td>2</td></tr>
<tr><td>6</td><td>Marek Mazanec (DAL)</td><td>3</td><td>2</td></tr>
<tr><td>7</td><td>Carey Price (WPG)</td><td>4</td><td>2</td></tr>
<tr><td>8</td><td>Mikko Koskinen (TOR)</td><td>4</td><td>2</td></tr>
<tr><td>9</td><td>Jonathan Quick (CGY)</td><td>4</td><td>2</td></tr>
<tr><td>10</td><td>Mackenzie Blackwood (CHI)</td><td>4</td><td>2</td></tr>
<tr><td>11</td><td>Connor Hellebuyck (DET)</td><td>4</td><td>2</td></tr>
<tr><td>12</td><td>Josh Harding (WSH)</td><td>4</td><td>2</td></tr>
<tr><td>13</td><td>David Rittich (PHI)</td><td>4</td><td>2</td></tr>
<tr><td>14</td><td>Antoine Bibeau (MIN)</td><td>1</td><td>1</td></tr>
<tr><td>15</td><td>Brian Elliott (MIN)</td><td>1</td><td>1</td></tr>
<tr><td>16</td><td>Jordan Binnington (DAL)</td><td>1</td><td>1</td></tr>
<tr><td>17</td><td>John Gibson (BUF)</td><td>1</td><td>1</td></tr>
<tr><td>18</td><td>Petr Mrazek (QUE)</td><td>1</td><td>1</td></tr>
<tr><td>19</td><td>Michal Neuvirth (LOS)</td><td>1</td><td>1</td></tr>
<tr><td>20</td><td>Denis Godla (MIN)</td><td>1</td><td>1</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
