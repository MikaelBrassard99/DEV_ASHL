<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Pro Individual Leaders</title>
<script src="IHWC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="IHWC.css" rel="stylesheet" type="text/css" />
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
<b>Minimum Games Played: 3</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Martin Bakos (SLO)</td><td>5</td><td>4</td></tr>
<tr><td>2</td><td>Alexander Ovechkin (RUS)</td><td>5</td><td>4</td></tr>
<tr><td>3</td><td>Mikko Rantanen (FIN)</td><td>5</td><td>4</td></tr>
<tr><td>4</td><td>Gabriel Landeskog (SWE)</td><td>5</td><td>4</td></tr>
<tr><td>5</td><td>Luca Sbisa (SUI)</td><td>5</td><td>3</td></tr>
<tr><td>6</td><td>Dominik Kahun (ALL)</td><td>5</td><td>3</td></tr>
<tr><td>7</td><td>Tim Stützle (ALL)</td><td>5</td><td>3</td></tr>
<tr><td>8</td><td>David Krejci (TCH)</td><td>5</td><td>3</td></tr>
<tr><td>9</td><td>Ondrej Palat (TCH)</td><td>5</td><td>3</td></tr>
<tr><td>10</td><td>Marcel Hascak (SLO)</td><td>5</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Cody Ceci (CAN)</td><td>4</td><td>6</td></tr>
<tr><td>2</td><td>Dominik Kahun (ALL)</td><td>5</td><td>6</td></tr>
<tr><td>3</td><td>Marko Dano (SLO)</td><td>5</td><td>6</td></tr>
<tr><td>4</td><td>Brad Marchand (CAN)</td><td>5</td><td>6</td></tr>
<tr><td>5</td><td>Andrej Sustr (TCH)</td><td>5</td><td>5</td></tr>
<tr><td>6</td><td>Markus Lauridsen (TWO)</td><td>5</td><td>5</td></tr>
<tr><td>7</td><td>Dmitri Kulikov (RUS)</td><td>5</td><td>5</td></tr>
<tr><td>8</td><td>Dmitri Orlov (RUS)</td><td>5</td><td>5</td></tr>
<tr><td>9</td><td>Gabriel Landeskog (SWE)</td><td>5</td><td>5</td></tr>
<tr><td>10</td><td>Luca Sbisa (SUI)</td><td>5</td><td>4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Gabriel Landeskog (SWE)</td><td>5</td><td>27</td></tr>
<tr><td>2</td><td>Dmitri Kulikov (RUS)</td><td>5</td><td>24</td></tr>
<tr><td>3</td><td>Marko Dano (SLO)</td><td>5</td><td>23</td></tr>
<tr><td>4</td><td>Mitch Marner (U23)</td><td>5</td><td>23</td></tr>
<tr><td>5</td><td>Alexander Ovechkin (RUS)</td><td>5</td><td>22</td></tr>
<tr><td>6</td><td>Lars Eller (TWO)</td><td>5</td><td>21</td></tr>
<tr><td>7</td><td>Oliver Bjorkstrand (TWO)</td><td>5</td><td>21</td></tr>
<tr><td>8</td><td>Ondrej Kase (TCH)</td><td>5</td><td>20</td></tr>
<tr><td>9</td><td>Thomas Vanek (TWO)</td><td>5</td><td>20</td></tr>
<tr><td>10</td><td>Martin Karsums (LET)</td><td>5</td><td>20</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Yannick Weber (SUI)</td><td>5</td><td>33,33%</td></tr>
<tr><td>2</td><td>Luca Sbisa (SUI)</td><td>5</td><td>33,33%</td></tr>
<tr><td>3</td><td>Tim Stützle (ALL)</td><td>5</td><td>33,33%</td></tr>
<tr><td>4</td><td>Dustin Boyd (TWO)</td><td>5</td><td>33,33%</td></tr>
<tr><td>5</td><td>Vladislav Namestnikov (RUS)</td><td>5</td><td>33,33%</td></tr>
<tr><td>6</td><td>Alex DeBrincat (U23)</td><td>5</td><td>33,33%</td></tr>
<tr><td>7</td><td>Miro Heiskanen (FIN)</td><td>5</td><td>33,33%</td></tr>
<tr><td>8</td><td>Andris Dzerins (LET)</td><td>5</td><td>28,57%</td></tr>
<tr><td>9</td><td>David Krejci (TCH)</td><td>5</td><td>27,27%</td></tr>
<tr><td>10</td><td>Ondrej Palat (TCH)</td><td>5</td><td>25,00%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dominik Kahun (ALL)</td><td>5</td><td>3-6-9</td></tr>
<tr><td>2</td><td>Brad Marchand (CAN)</td><td>5</td><td>2-6-8</td></tr>
<tr><td>3</td><td>Marko Dano (SLO)</td><td>5</td><td>1-6-7</td></tr>
<tr><td>4</td><td>David Krejci (TCH)</td><td>5</td><td>3-3-6</td></tr>
<tr><td>5</td><td>Tobias Rieder (ALL)</td><td>5</td><td>2-4-6</td></tr>
<tr><td>6</td><td>Sebastian Aho (FIN)</td><td>5</td><td>2-4-6</td></tr>
<tr><td>7</td><td>Jonathan Toews (CAN)</td><td>5</td><td>3-2-5</td></tr>
<tr><td>8</td><td>William Nylander (SWE)</td><td>5</td><td>3-2-5</td></tr>
<tr><td>9</td><td>Noah Rod (SUI)</td><td>5</td><td>2-3-5</td></tr>
<tr><td>10</td><td>Daniel Pietta (ALL)</td><td>5</td><td>2-3-5</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Gabriel Landeskog (SWE)</td><td>5</td><td>4-5-9</td></tr>
<tr><td>2</td><td>Dominik Kahun (ALL)</td><td>5</td><td>3-6-9</td></tr>
<tr><td>3</td><td>Martin Bakos (SLO)</td><td>5</td><td>4-4-8</td></tr>
<tr><td>4</td><td>Brad Marchand (CAN)</td><td>5</td><td>2-6-8</td></tr>
<tr><td>5</td><td>Alexander Ovechkin (RUS)</td><td>5</td><td>4-3-7</td></tr>
<tr><td>6</td><td>Marko Dano (SLO)</td><td>5</td><td>1-6-7</td></tr>
<tr><td>7</td><td>Tobias Rieder (ALL)</td><td>5</td><td>2-4-6</td></tr>
<tr><td>8</td><td>Ondrej Kase (TCH)</td><td>5</td><td>2-4-6</td></tr>
<tr><td>9</td><td>Sebastian Aho (FIN)</td><td>5</td><td>2-4-6</td></tr>
<tr><td>10</td><td>Ondrej Palat (TCH)</td><td>5</td><td>3-2-5</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dominik Kahun (ALL)</td><td>5</td><td>3-6-9</td></tr>
<tr><td>2</td><td>Martin Bakos (SLO)</td><td>5</td><td>4-4-8</td></tr>
<tr><td>3</td><td>Alexander Ovechkin (RUS)</td><td>5</td><td>4-3-7</td></tr>
<tr><td>4</td><td>Marko Dano (SLO)</td><td>5</td><td>1-6-7</td></tr>
<tr><td>5</td><td>Mikko Rantanen (FIN)</td><td>5</td><td>4-2-6</td></tr>
<tr><td>6</td><td>David Krejci (TCH)</td><td>5</td><td>3-3-6</td></tr>
<tr><td>7</td><td>Tobias Rieder (ALL)</td><td>5</td><td>2-4-6</td></tr>
<tr><td>8</td><td>Ondrej Kase (TCH)</td><td>5</td><td>2-4-6</td></tr>
<tr><td>9</td><td>Sebastian Aho (FIN)</td><td>5</td><td>2-4-6</td></tr>
<tr><td>10</td><td>Brent Burns (CAN)</td><td>5</td><td>2-4-6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dmitri Kulikov (RUS)</td><td>5</td><td>3-5-8</td></tr>
<tr><td>2</td><td>Luca Sbisa (SUI)</td><td>5</td><td>3-4-7</td></tr>
<tr><td>3</td><td>Dmitri Orlov (RUS)</td><td>5</td><td>2-5-7</td></tr>
<tr><td>4</td><td>Brent Burns (CAN)</td><td>5</td><td>2-4-6</td></tr>
<tr><td>5</td><td>Ryan Ellis (CAN)</td><td>5</td><td>2-4-6</td></tr>
<tr><td>6</td><td>Andrej Sustr (TCH)</td><td>5</td><td>1-5-6</td></tr>
<tr><td>7</td><td>Cody Ceci (CAN)</td><td>4</td><td>0-6-6</td></tr>
<tr><td>8</td><td>Darren Dietz (TWO)</td><td>5</td><td>2-3-5</td></tr>
<tr><td>9</td><td>Miro Heiskanen (FIN)</td><td>5</td><td>2-3-5</td></tr>
<tr><td>10</td><td>Hampus Lindholm (SWE)</td><td>5</td><td>2-3-5</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Brad Marchand (CAN)</td><td>5</td><td>1,90</td></tr>
<tr><td>2</td><td>Dominik Kahun (ALL)</td><td>5</td><td>1,74</td></tr>
<tr><td>3</td><td>Zach Parise (USA)</td><td>5</td><td>1,61</td></tr>
<tr><td>4</td><td>Gabriel Landeskog (SWE)</td><td>5</td><td>1,56</td></tr>
<tr><td>5</td><td>Cody Ceci (CAN)</td><td>4</td><td>1,41</td></tr>
<tr><td>6</td><td>Tyler Johnson (USA)</td><td>5</td><td>1,41</td></tr>
<tr><td>7</td><td>Ty Rattie (CAN)</td><td>5</td><td>1,38</td></tr>
<tr><td>8</td><td>Tim Stützle (ALL)</td><td>5</td><td>1,32</td></tr>
<tr><td>9</td><td>Martin Bakos (SLO)</td><td>5</td><td>1,32</td></tr>
<tr><td>10</td><td>Alexander Ovechkin (RUS)</td><td>5</td><td>1,31</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Michael Frolik (TCH)</td><td>5</td><td>72,41%</td></tr>
<tr><td>2</td><td>Tomas Zigo (SLO)</td><td>5</td><td>63,33%</td></tr>
<tr><td>3</td><td>Tuomo Ruutu (FIN)</td><td>5</td><td>63,16%</td></tr>
<tr><td>4</td><td>Lars Eller (TWO)</td><td>5</td><td>60,89%</td></tr>
<tr><td>5</td><td>Nikita Jevpalovs (LET)</td><td>5</td><td>59,52%</td></tr>
<tr><td>6</td><td>Cole Cassels (USA)</td><td>5</td><td>59,02%</td></tr>
<tr><td>7</td><td>Andris Dzerins (LET)</td><td>5</td><td>58,70%</td></tr>
<tr><td>8</td><td>Nicklas Backstrom (SWE)</td><td>5</td><td>58,67%</td></tr>
<tr><td>9</td><td>Dustin Boyd (TWO)</td><td>5</td><td>58,52%</td></tr>
<tr><td>10</td><td>Jack Eichel (USA)</td><td>5</td><td>55,65%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>David Musil (CAN)</td><td>5</td><td>7</td></tr>
<tr><td>2</td><td>Gabriel Landeskog (SWE)</td><td>5</td><td>7</td></tr>
<tr><td>3</td><td>Jakub Kindl (TCH)</td><td>5</td><td>5</td></tr>
<tr><td>4</td><td>Andrej Sustr (TCH)</td><td>5</td><td>5</td></tr>
<tr><td>5</td><td>Sami Vatanen (FIN)</td><td>5</td><td>5</td></tr>
<tr><td>6</td><td>Bo Horvat (CAN)</td><td>5</td><td>5</td></tr>
<tr><td>7</td><td>Cody Ceci (CAN)</td><td>4</td><td>4</td></tr>
<tr><td>8</td><td>Noah Rod (SUI)</td><td>5</td><td>4</td></tr>
<tr><td>9</td><td>Vincent Praplan (SUI)</td><td>5</td><td>4</td></tr>
<tr><td>10</td><td>Gregory Hofmann (SUI)</td><td>5</td><td>4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Alex DeBrincat (U23)</td><td>5</td><td>15</td></tr>
<tr><td>2</td><td>Martin Marincin (SLO)</td><td>5</td><td>12</td></tr>
<tr><td>3</td><td>Charles McAvoy (U23)</td><td>5</td><td>12</td></tr>
<tr><td>4</td><td>David Musil (CAN)</td><td>5</td><td>12</td></tr>
<tr><td>5</td><td>Luca Sbisa (SUI)</td><td>5</td><td>10</td></tr>
<tr><td>6</td><td>Jonas Müller (ALL)</td><td>5</td><td>10</td></tr>
<tr><td>7</td><td>Antoine Roussel (TWO)</td><td>5</td><td>10</td></tr>
<tr><td>8</td><td>Harijs Brants (LET)</td><td>5</td><td>8</td></tr>
<tr><td>9</td><td>Raman Hrabarenka (TWO)</td><td>5</td><td>8</td></tr>
<tr><td>10</td><td>Jesper Jensen (TWO)</td><td>5</td><td>8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Noah Hanifin (U23)</td><td>5</td><td>15</td></tr>
<tr><td>2</td><td>Jakub Zboril (TCH)</td><td>5</td><td>14</td></tr>
<tr><td>3</td><td>Luca Sbisa (SUI)</td><td>5</td><td>13</td></tr>
<tr><td>4</td><td>Olli Maatta (FIN)</td><td>5</td><td>13</td></tr>
<tr><td>5</td><td>Niklas Hjalmarsson (SWE)</td><td>5</td><td>12</td></tr>
<tr><td>6</td><td>Jakub Kindl (TCH)</td><td>5</td><td>11</td></tr>
<tr><td>7</td><td>Raman Hrabarenka (TWO)</td><td>5</td><td>11</td></tr>
<tr><td>8</td><td>Andrej Sekera (SLO)</td><td>5</td><td>11</td></tr>
<tr><td>9</td><td>Charles McAvoy (U23)</td><td>5</td><td>11</td></tr>
<tr><td>10</td><td>Thomas Chabot (U23)</td><td>5</td><td>11</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dominik Kahun (ALL)</td><td>5</td><td>3-6-9</td></tr>
<tr><td>2</td><td>Noah Rod (SUI)</td><td>5</td><td>2-3-5</td></tr>
<tr><td>3</td><td>Miro Heiskanen (FIN)</td><td>5</td><td>2-3-5</td></tr>
<tr><td>4</td><td>Tim Stützle (ALL)</td><td>5</td><td>3-1-4</td></tr>
<tr><td>5</td><td>Dylan Strome (U23)</td><td>5</td><td>3-1-4</td></tr>
<tr><td>6</td><td>Daniel Sprong (TWO)</td><td>5</td><td>2-2-4</td></tr>
<tr><td>7</td><td>Derek Stepan (USA)</td><td>5</td><td>2-2-4</td></tr>
<tr><td>8</td><td>Adam Fox (U23)</td><td>5</td><td>1-3-4</td></tr>
<tr><td>9</td><td>Calvin Thurkauf (SUI)</td><td>5</td><td>2-1-3</td></tr>
<tr><td>10</td><td>Dominik Bokk (ALL)</td><td>5</td><td>2-1-3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Luca Sbisa (SUI)</td><td>5</td><td>21</td></tr>
<tr><td>2</td><td>Tyler Myers (USA)</td><td>5</td><td>17</td></tr>
<tr><td>3</td><td>Max Pacioretty (USA)</td><td>5</td><td>15</td></tr>
<tr><td>4</td><td>Colton Parayko (CAN)</td><td>5</td><td>15</td></tr>
<tr><td>5</td><td>Gabriel Landeskog (SWE)</td><td>5</td><td>15</td></tr>
<tr><td>6</td><td>Daniel Pietta (ALL)</td><td>5</td><td>14</td></tr>
<tr><td>7</td><td>Zach Bogosian (USA)</td><td>5</td><td>14</td></tr>
<tr><td>8</td><td>Alexander Ovechkin (RUS)</td><td>5</td><td>14</td></tr>
<tr><td>9</td><td>Karlis Cukste (LET)</td><td>5</td><td>13</td></tr>
<tr><td>10</td><td>Yannic Seidenberg (ALL)</td><td>5</td><td>13</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Dmitri Kulikov (RUS)</td><td>5</td><td>3</td></tr>
<tr><td>2</td><td>Yannick Weber (SUI)</td><td>5</td><td>2</td></tr>
<tr><td>3</td><td>Darren Dietz (TWO)</td><td>5</td><td>2</td></tr>
<tr><td>4</td><td>Jamie McBain (USA)</td><td>5</td><td>2</td></tr>
<tr><td>5</td><td>Teemu Pulkkinen (FIN)</td><td>5</td><td>2</td></tr>
<tr><td>6</td><td>Miro Heiskanen (FIN)</td><td>5</td><td>2</td></tr>
<tr><td>7</td><td>Ryan Ellis (CAN)</td><td>5</td><td>2</td></tr>
<tr><td>8</td><td>Tobias Enstrom (SWE)</td><td>5</td><td>2</td></tr>
<tr><td>9</td><td>Hampus Lindholm (SWE)</td><td>5</td><td>2</td></tr>
<tr><td>10</td><td>Oskars Bartulis (LET)</td><td>5</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Tyler Myers (USA)</td><td>5</td><td>1</td></tr>
<tr><td>2</td><td>Martin Karsums (LET)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Bo Horvat (CAN)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Jacob De La Rose (SWE)</td><td>5</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Phillip Danault (CAN)</td><td>1</td><td>1</td></tr>
<tr><td>2</td><td>Calvin Thurkauf (SUI)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Luca Sbisa (SUI)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Dominik Bokk (ALL)</td><td>5</td><td>1</td></tr>
<tr><td>5</td><td>Tim Stützle (ALL)</td><td>5</td><td>1</td></tr>
<tr><td>6</td><td>Yannic Seidenberg (ALL)</td><td>5</td><td>1</td></tr>
<tr><td>7</td><td>David Krejci (TCH)</td><td>5</td><td>1</td></tr>
<tr><td>8</td><td>Ondrej Kase (TCH)</td><td>5</td><td>1</td></tr>
<tr><td>9</td><td>Daniel Sprong (TWO)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Mathias From (TWO)</td><td>5</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Philipp Kurashev (SUI)</td><td>5</td><td>1</td></tr>
<tr><td>2</td><td>Luca Sbisa (SUI)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Daniel Pietta (ALL)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Laurin Braun (ALL)</td><td>5</td><td>1</td></tr>
<tr><td>5</td><td>Tobias Rieder (ALL)</td><td>5</td><td>1</td></tr>
<tr><td>6</td><td>Michael Frolik (TCH)</td><td>5</td><td>1</td></tr>
<tr><td>7</td><td>Oliver Bjorkstrand (TWO)</td><td>5</td><td>1</td></tr>
<tr><td>8</td><td>Martin Bakos (SLO)</td><td>5</td><td>1</td></tr>
<tr><td>9</td><td>Max Pacioretty (USA)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Emerson Etem (USA)</td><td>5</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Ondrej Palat (TCH)</td><td>5</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Mitch Marner (U23)</td><td>5</td><td>131</td></tr>
<tr><td>2</td><td>Dmitri Kulikov (RUS)</td><td>5</td><td>129</td></tr>
<tr><td>3</td><td>Luca Sbisa (SUI)</td><td>5</td><td>129</td></tr>
<tr><td>4</td><td>Victor Hedman (SWE)</td><td>5</td><td>128</td></tr>
<tr><td>5</td><td>Erik Karlsson (SWE)</td><td>5</td><td>127</td></tr>
<tr><td>6</td><td>Noah Hanifin (U23)</td><td>5</td><td>126</td></tr>
<tr><td>7</td><td>Tyler Myers (USA)</td><td>5</td><td>126</td></tr>
<tr><td>8</td><td>Yannic Seidenberg (ALL)</td><td>5</td><td>124</td></tr>
<tr><td>9</td><td>Brock Boeser (U23)</td><td>5</td><td>123</td></tr>
<tr><td>10</td><td>Darren Dietz (TWO)</td><td>5</td><td>123</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>David Krejci (TCH)</td><td>5</td><td>1</td></tr>
<tr><td>2</td><td>Jonathan Toews (CAN)</td><td>5</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Gabriel Landeskog (SWE)</td><td>5</td><td>3</td></tr>
<tr><td>2</td><td>Kyle Connor (USA)</td><td>3</td><td>2</td></tr>
<tr><td>3</td><td>Noah Rod (SUI)</td><td>5</td><td>2</td></tr>
<tr><td>4</td><td>Ondrej Palat (TCH)</td><td>5</td><td>2</td></tr>
<tr><td>5</td><td>Vladislav Namestnikov (RUS)</td><td>5</td><td>2</td></tr>
<tr><td>6</td><td>Dmitri Kulikov (RUS)</td><td>5</td><td>2</td></tr>
<tr><td>7</td><td>Samuel Girard (U23)</td><td>5</td><td>2</td></tr>
<tr><td>8</td><td>Sebastian Aho (FIN)</td><td>5</td><td>2</td></tr>
<tr><td>9</td><td>Ryan Ellis (CAN)</td><td>5</td><td>2</td></tr>
<tr><td>10</td><td>Phillip Danault (CAN)</td><td>1</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Dominik Kahun (ALL)</td><td>5</td><td>5</td></tr>
<tr><td>2</td><td>Alexander Ovechkin (RUS)</td><td>5</td><td>5</td></tr>
<tr><td>3</td><td>Dmitri Kulikov (RUS)</td><td>5</td><td>5</td></tr>
<tr><td>4</td><td>Gabriel Landeskog (SWE)</td><td>5</td><td>5</td></tr>
<tr><td>5</td><td>Nino Niederreiter (SUI)</td><td>5</td><td>4</td></tr>
<tr><td>6</td><td>Thomas Chabot (U23)</td><td>5</td><td>4</td></tr>
<tr><td>7</td><td>Brent Burns (CAN)</td><td>5</td><td>4</td></tr>
<tr><td>8</td><td>Andrej Sustr (TCH)</td><td>5</td><td>3</td></tr>
<tr><td>9</td><td>Dustin Boyd (TWO)</td><td>5</td><td>3</td></tr>
<tr><td>10</td><td>Martin Marincin (SLO)</td><td>5</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>David Krejci (TCH)</td><td>5</td><td>16</td></tr>
<tr><td>2</td><td>Martin Hanzal (TCH)</td><td>5</td><td>15</td></tr>
<tr><td>3</td><td>Marko Dano (SLO)</td><td>5</td><td>15</td></tr>
<tr><td>4</td><td>Jack Eichel (USA)</td><td>5</td><td>15</td></tr>
<tr><td>5</td><td>Tobias Rieder (ALL)</td><td>5</td><td>14</td></tr>
<tr><td>6</td><td>Derek Stepan (USA)</td><td>5</td><td>13</td></tr>
<tr><td>7</td><td>Jonathan Toews (CAN)</td><td>5</td><td>13</td></tr>
<tr><td>8</td><td>Mikhail Grigorenko (RUS)</td><td>5</td><td>12</td></tr>
<tr><td>9</td><td>Mitch Marner (U23)</td><td>5</td><td>12</td></tr>
<tr><td>10</td><td>Erik Karlsson (SWE)</td><td>5</td><td>12</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Damien Brunner (SUI)</td><td>5</td><td>1</td></tr>
<tr><td>2</td><td>Nino Niederreiter (SUI)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Yannic Seidenberg (ALL)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Nigel Dawes (TWO)</td><td>5</td><td>1</td></tr>
<tr><td>5</td><td>Jack Eichel (USA)</td><td>5</td><td>1</td></tr>
<tr><td>6</td><td>Ryan Callahan (USA)</td><td>5</td><td>1</td></tr>
<tr><td>7</td><td>Ilya Kovalchuk (RUS)</td><td>5</td><td>1</td></tr>
<tr><td>8</td><td>Brock Boeser (U23)</td><td>5</td><td>1</td></tr>
<tr><td>9</td><td>Mikko Rantanen (FIN)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Toni Rajala (FIN)</td><td>5</td><td>1</td></tr>
</table></td></tr>
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
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Ben Bishop (USA)</td><td>4</td><td>0,930</td></tr>
<tr><td>2</td><td>Pekka Rinne (FIN)</td><td>5</td><td>0,918</td></tr>
<tr><td>3</td><td>Robin Lehner (SWE)</td><td>4</td><td>0,910</td></tr>
<tr><td>4</td><td>Carey Price (CAN)</td><td>5</td><td>0,908</td></tr>
<tr><td>5</td><td>Arturs Silovs (LET)</td><td>5</td><td>0,907</td></tr>
<tr><td>6</td><td>Robert Mayer (SUI)</td><td>3</td><td>0,907</td></tr>
<tr><td>7</td><td>Petr Mrazek (TCH)</td><td>5</td><td>0,903</td></tr>
<tr><td>8</td><td>Danny aus den Birken (ALL)</td><td>5</td><td>0,896</td></tr>
<tr><td>9</td><td>Alexandar Georgiyev (TWO)</td><td>3</td><td>0,891</td></tr>
<tr><td>10</td><td>Carter Hart (U23)</td><td>5</td><td>0,879</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Ben Bishop (USA)</td><td>4</td><td>2,16</td></tr>
<tr><td>2</td><td>Carey Price (CAN)</td><td>5</td><td>2,36</td></tr>
<tr><td>3</td><td>Pekka Rinne (FIN)</td><td>5</td><td>2,56</td></tr>
<tr><td>4</td><td>Robin Lehner (SWE)</td><td>4</td><td>2,68</td></tr>
<tr><td>5</td><td>Arturs Silovs (LET)</td><td>5</td><td>3,08</td></tr>
<tr><td>6</td><td>Robert Mayer (SUI)</td><td>3</td><td>3,26</td></tr>
<tr><td>7</td><td>Petr Mrazek (TCH)</td><td>5</td><td>3,32</td></tr>
<tr><td>8</td><td>Danny aus den Birken (ALL)</td><td>5</td><td>3,55</td></tr>
<tr><td>9</td><td>Alexandar Georgiyev (TWO)</td><td>3</td><td>3,66</td></tr>
<tr><td>10</td><td>Sergei Bobrovsky (RUS)</td><td>5</td><td>3,75</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Carter Hart (U23)</td><td>5</td><td>306</td></tr>
<tr><td>2</td><td>Carey Price (CAN)</td><td>5</td><td>305</td></tr>
<tr><td>3</td><td>Pekka Rinne (FIN)</td><td>5</td><td>305</td></tr>
<tr><td>4</td><td>Sergei Bobrovsky (RUS)</td><td>5</td><td>304</td></tr>
<tr><td>5</td><td>Petr Mrazek (TCH)</td><td>5</td><td>271</td></tr>
<tr><td>6</td><td>Danny aus den Birken (ALL)</td><td>5</td><td>270</td></tr>
<tr><td>7</td><td>Ben Bishop (USA)</td><td>4</td><td>250</td></tr>
<tr><td>8</td><td>Robin Lehner (SWE)</td><td>4</td><td>246</td></tr>
<tr><td>9</td><td>Patrik Rybar (SLO)</td><td>5</td><td>223</td></tr>
<tr><td>10</td><td>Arturs Silovs (LET)</td><td>5</td><td>214</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Carter Hart (U23)</td><td>5</td><td>182</td></tr>
<tr><td>2</td><td>Pekka Rinne (FIN)</td><td>5</td><td>159</td></tr>
<tr><td>3</td><td>Sergei Bobrovsky (RUS)</td><td>5</td><td>156</td></tr>
<tr><td>4</td><td>Danny aus den Birken (ALL)</td><td>5</td><td>154</td></tr>
<tr><td>5</td><td>Petr Mrazek (TCH)</td><td>5</td><td>154</td></tr>
<tr><td>6</td><td>Carey Price (CAN)</td><td>5</td><td>130</td></tr>
<tr><td>7</td><td>Ben Bishop (USA)</td><td>4</td><td>129</td></tr>
<tr><td>8</td><td>Robin Lehner (SWE)</td><td>4</td><td>122</td></tr>
<tr><td>9</td><td>Arturs Silovs (LET)</td><td>5</td><td>118</td></tr>
<tr><td>10</td><td>Patrik Rybar (SLO)</td><td>5</td><td>115</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Pekka Rinne (FIN)</td><td>5</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Carey Price (CAN)</td><td>5</td><td>5</td></tr>
<tr><td>2</td><td>Danny aus den Birken (ALL)</td><td>5</td><td>4</td></tr>
<tr><td>3</td><td>Pekka Rinne (FIN)</td><td>5</td><td>4</td></tr>
<tr><td>4</td><td>Ben Bishop (USA)</td><td>4</td><td>3</td></tr>
<tr><td>5</td><td>Robert Mayer (SUI)</td><td>3</td><td>2</td></tr>
<tr><td>6</td><td>Alexandar Georgiyev (TWO)</td><td>3</td><td>2</td></tr>
<tr><td>7</td><td>Robin Lehner (SWE)</td><td>4</td><td>2</td></tr>
<tr><td>8</td><td>Petr Mrazek (TCH)</td><td>5</td><td>2</td></tr>
<tr><td>9</td><td>Sergei Bobrovsky (RUS)</td><td>5</td><td>2</td></tr>
<tr><td>10</td><td>Reto Berra (SUI)</td><td>2</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Danny aus den Birken (ALL)</td><td>3</td><td>1,000</td></tr>
<tr><td>2</td><td>Carter Hart (U23)</td><td>3</td><td>1,000</td></tr>
<tr><td>3</td><td>Pekka Rinne (FIN)</td><td>2</td><td>1,000</td></tr>
<tr><td>4</td><td>Sergei Bobrovsky (RUS)</td><td>7</td><td>0,714</td></tr>
<tr><td>5</td><td>Ben Bishop (USA)</td><td>10</td><td>0,700</td></tr>
<tr><td>6</td><td>Robert Mayer (SUI)</td><td>3</td><td>0,667</td></tr>
<tr><td>7</td><td>Denis Godla (SLO)</td><td>3</td><td>0,667</td></tr>
<tr><td>8</td><td>Carey Price (CAN)</td><td>3</td><td>0,667</td></tr>
<tr><td>9</td><td>Anders Nilsson (SWE)</td><td>3</td><td>0,667</td></tr>
<tr><td>10</td><td>Frederik Andersen (TWO)</td><td>3</td><td>0,333</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Carter Hart (U23)</td><td>5</td><td>3</td></tr>
<tr><td>2</td><td>Arturs Silovs (LET)</td><td>5</td><td>3</td></tr>
<tr><td>3</td><td>Denis Godla (SLO)</td><td>3</td><td>2</td></tr>
<tr><td>4</td><td>Petr Mrazek (TCH)</td><td>5</td><td>2</td></tr>
<tr><td>5</td><td>Sergei Bobrovsky (RUS)</td><td>5</td><td>2</td></tr>
<tr><td>6</td><td>Pavel Francouz (TCH)</td><td>1</td><td>1</td></tr>
<tr><td>7</td><td>Mareks Mitens (LET)</td><td>2</td><td>1</td></tr>
<tr><td>8</td><td>Reto Berra (SUI)</td><td>2</td><td>1</td></tr>
<tr><td>9</td><td>Frederik Andersen (TWO)</td><td>2</td><td>1</td></tr>
<tr><td>10</td><td>Robert Mayer (SUI)</td><td>3</td><td>1</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
