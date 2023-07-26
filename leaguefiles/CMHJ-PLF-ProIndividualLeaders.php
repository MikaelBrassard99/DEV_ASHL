<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CMHJ - Pro Individual Leaders</title>
<script src="CMHJ-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - CMHJ-STHS.db - CMHJ-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"CMHJ-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"CMHJ-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<b>Minimum Games Played: 5</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Kaapo Kakko (FIN)</td><td>6</td><td>8</td></tr>
<tr><td>2</td><td>Tim Stützle (GER)</td><td>4</td><td>6</td></tr>
<tr><td>3</td><td>Kirby Dach (CAN)</td><td>5</td><td>5</td></tr>
<tr><td>4</td><td>Jack Hughes (USA)</td><td>6</td><td>5</td></tr>
<tr><td>5</td><td>William Eklund (SWE)</td><td>4</td><td>4</td></tr>
<tr><td>6</td><td>Connor McMichael (CAN)</td><td>5</td><td>4</td></tr>
<tr><td>7</td><td>Alexis Lafrenière (CAN)</td><td>5</td><td>4</td></tr>
<tr><td>8</td><td>Anton Lundell (FIN)</td><td>6</td><td>4</td></tr>
<tr><td>9</td><td>Nick Robertson (USA)</td><td>6</td><td>4</td></tr>
<tr><td>10</td><td>Arthur Kaliyev (TWO)</td><td>3</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Anton Lundell (FIN)</td><td>6</td><td>9</td></tr>
<tr><td>2</td><td>Lukas Reichel (GER)</td><td>4</td><td>7</td></tr>
<tr><td>3</td><td>Jack Hughes (USA)</td><td>6</td><td>7</td></tr>
<tr><td>4</td><td>Trevor Zegras (USA)</td><td>6</td><td>7</td></tr>
<tr><td>5</td><td>Thomas Harley (CAN)</td><td>5</td><td>6</td></tr>
<tr><td>6</td><td>Alexander Holtz (SWE)</td><td>4</td><td>5</td></tr>
<tr><td>7</td><td>Tim Stützle (GER)</td><td>4</td><td>5</td></tr>
<tr><td>8</td><td>Kaapo Kakko (FIN)</td><td>6</td><td>5</td></tr>
<tr><td>9</td><td>Antti Saarela (FIN)</td><td>6</td><td>5</td></tr>
<tr><td>10</td><td>Juuso Parssinen (FIN)</td><td>6</td><td>5</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Kaapo Kakko (FIN)</td><td>6</td><td>31</td></tr>
<tr><td>2</td><td>Jack Hughes (USA)</td><td>6</td><td>25</td></tr>
<tr><td>3</td><td>Kirby Dach (CAN)</td><td>5</td><td>24</td></tr>
<tr><td>4</td><td>Matthew Boldy (USA)</td><td>6</td><td>22</td></tr>
<tr><td>5</td><td>Tim Stützle (GER)</td><td>4</td><td>21</td></tr>
<tr><td>6</td><td>Michal Teply (CZE)</td><td>5</td><td>20</td></tr>
<tr><td>7</td><td>Patrik Puistola (FIN)</td><td>6</td><td>20</td></tr>
<tr><td>8</td><td>Alex Newhook (CAN)</td><td>5</td><td>19</td></tr>
<tr><td>9</td><td>Aku Räty (FIN)</td><td>6</td><td>19</td></tr>
<tr><td>10</td><td>Lukas Reichel (GER)</td><td>4</td><td>18</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Nick Robertson (USA)</td><td>6</td><td>30,77%</td></tr>
<tr><td>2</td><td>Adam Najman (CZE)</td><td>5</td><td>28,57%</td></tr>
<tr><td>3</td><td>Connor McMichael (CAN)</td><td>5</td><td>26,67%</td></tr>
<tr><td>4</td><td>Kaapo Kakko (FIN)</td><td>6</td><td>25,81%</td></tr>
<tr><td>5</td><td>Jack Quinn (CAN)</td><td>5</td><td>25,00%</td></tr>
<tr><td>6</td><td>Thomas Bordeleau (USA)</td><td>5</td><td>25,00%</td></tr>
<tr><td>7</td><td>Alexis Lafrenière (CAN)</td><td>5</td><td>23,53%</td></tr>
<tr><td>8</td><td>Quinton Byfield (CAN)</td><td>5</td><td>22,22%</td></tr>
<tr><td>9</td><td>Anton Lundell (FIN)</td><td>6</td><td>22,22%</td></tr>
<tr><td>10</td><td>Kirby Dach (CAN)</td><td>5</td><td>20,83%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Anton Lundell (FIN)</td><td>6</td><td>4-9-13</td></tr>
<tr><td>2</td><td>Jack Hughes (USA)</td><td>6</td><td>5-7-12</td></tr>
<tr><td>3</td><td>Tim Stützle (GER)</td><td>4</td><td>6-5-11</td></tr>
<tr><td>4</td><td>Trevor Zegras (USA)</td><td>6</td><td>2-7-9</td></tr>
<tr><td>5</td><td>Kirby Dach (CAN)</td><td>5</td><td>5-3-8</td></tr>
<tr><td>6</td><td>William Eklund (SWE)</td><td>4</td><td>4-4-8</td></tr>
<tr><td>7</td><td>Nick Robertson (USA)</td><td>6</td><td>4-4-8</td></tr>
<tr><td>8</td><td>Connor McMichael (CAN)</td><td>5</td><td>4-2-6</td></tr>
<tr><td>9</td><td>Quinton Byfield (CAN)</td><td>5</td><td>2-4-6</td></tr>
<tr><td>10</td><td>Juuso Parssinen (FIN)</td><td>6</td><td>1-5-6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Jack Hughes (USA)</td><td>6</td><td>5-7-12</td></tr>
<tr><td>2</td><td>Tim Stützle (GER)</td><td>4</td><td>6-5-11</td></tr>
<tr><td>3</td><td>Lukas Reichel (GER)</td><td>4</td><td>3-7-10</td></tr>
<tr><td>4</td><td>William Eklund (SWE)</td><td>4</td><td>4-4-8</td></tr>
<tr><td>5</td><td>Alexis Lafrenière (CAN)</td><td>5</td><td>4-4-8</td></tr>
<tr><td>6</td><td>Nick Robertson (USA)</td><td>6</td><td>4-4-8</td></tr>
<tr><td>7</td><td>Matthew Boldy (USA)</td><td>6</td><td>3-4-7</td></tr>
<tr><td>8</td><td>Antti Saarela (FIN)</td><td>6</td><td>2-5-7</td></tr>
<tr><td>9</td><td>Patrik Puistola (FIN)</td><td>6</td><td>3-3-6</td></tr>
<tr><td>10</td><td>Karl Henriksson (SWE)</td><td>4</td><td>2-3-5</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Kaapo Kakko (FIN)</td><td>6</td><td>8-5-13</td></tr>
<tr><td>2</td><td>Jack Hughes (USA)</td><td>6</td><td>5-7-12</td></tr>
<tr><td>3</td><td>Alexander Holtz (SWE)</td><td>4</td><td>2-5-7</td></tr>
<tr><td>4</td><td>Antti Saarela (FIN)</td><td>6</td><td>2-5-7</td></tr>
<tr><td>5</td><td>Patrik Puistola (FIN)</td><td>6</td><td>3-3-6</td></tr>
<tr><td>6</td><td>Cole Caufield (USA)</td><td>6</td><td>2-4-6</td></tr>
<tr><td>7</td><td>Lucas Raymond (SWE)</td><td>4</td><td>2-2-4</td></tr>
<tr><td>8</td><td>Bobby Brink (USA)</td><td>6</td><td>2-2-4</td></tr>
<tr><td>9</td><td>Jacob Perreault (USA)</td><td>6</td><td>2-2-4</td></tr>
<tr><td>10</td><td>Mikhail Abramov (RUS)</td><td>3</td><td>1-3-4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Thomas Harley (CAN)</td><td>5</td><td>0-6-6</td></tr>
<tr><td>2</td><td>Jake Sanderson (USA)</td><td>6</td><td>2-3-5</td></tr>
<tr><td>3</td><td>Simon Kubicek (CZE)</td><td>5</td><td>2-2-4</td></tr>
<tr><td>4</td><td>Simon Gnyp (GER)</td><td>4</td><td>1-3-4</td></tr>
<tr><td>5</td><td>Bowen Byram (CAN)</td><td>5</td><td>1-3-4</td></tr>
<tr><td>6</td><td>Cam York (USA)</td><td>6</td><td>1-3-4</td></tr>
<tr><td>7</td><td>Martin Hugo Has (CZE)</td><td>5</td><td>0-4-4</td></tr>
<tr><td>8</td><td>Topi Niemela (FIN)</td><td>6</td><td>0-4-4</td></tr>
<tr><td>9</td><td>Jordan Spence (TWO)</td><td>3</td><td>0-3-3</td></tr>
<tr><td>10</td><td>Victor Soderström (SWE)</td><td>4</td><td>0-3-3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Kaapo Kakko (FIN)</td><td>6</td><td>2,43</td></tr>
<tr><td>2</td><td>Anton Lundell (FIN)</td><td>6</td><td>2,33</td></tr>
<tr><td>3</td><td>Jack Hughes (USA)</td><td>6</td><td>2,27</td></tr>
<tr><td>4</td><td>Connor McMichael (CAN)</td><td>5</td><td>2,16</td></tr>
<tr><td>5</td><td>Kirby Dach (CAN)</td><td>5</td><td>1,84</td></tr>
<tr><td>6</td><td>Alexis Lafrenière (CAN)</td><td>5</td><td>1,83</td></tr>
<tr><td>7</td><td>Trevor Zegras (USA)</td><td>6</td><td>1,72</td></tr>
<tr><td>8</td><td>Quinton Byfield (CAN)</td><td>5</td><td>1,61</td></tr>
<tr><td>9</td><td>Cole Perfetti (CAN)</td><td>5</td><td>1,60</td></tr>
<tr><td>10</td><td>Nick Robertson (USA)</td><td>6</td><td>1,53</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Roni Hirvonen (FIN)</td><td>6</td><td>63,64%</td></tr>
<tr><td>2</td><td>Alex Newhook (CAN)</td><td>5</td><td>62,50%</td></tr>
<tr><td>3</td><td>Alex Turcotte (USA)</td><td>6</td><td>56,57%</td></tr>
<tr><td>4</td><td>Connor McMichael (CAN)</td><td>5</td><td>53,49%</td></tr>
<tr><td>5</td><td>Anton Lundell (FIN)</td><td>6</td><td>52,43%</td></tr>
<tr><td>6</td><td>Thomas Bordeleau (USA)</td><td>5</td><td>50,00%</td></tr>
<tr><td>7</td><td>Filip Prikryl (CZE)</td><td>5</td><td>48,15%</td></tr>
<tr><td>8</td><td>Brad Lambert (FIN)</td><td>6</td><td>46,94%</td></tr>
<tr><td>9</td><td>Juuso Parssinen (FIN)</td><td>6</td><td>46,84%</td></tr>
<tr><td>10</td><td>Dylan Cozens (CAN)</td><td>5</td><td>46,00%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Connor McMichael (CAN)</td><td>5</td><td>7</td></tr>
<tr><td>2</td><td>Alex Newhook (CAN)</td><td>5</td><td>7</td></tr>
<tr><td>3</td><td>Jamie Drysdale (CAN)</td><td>5</td><td>7</td></tr>
<tr><td>4</td><td>Nick Robertson (USA)</td><td>6</td><td>7</td></tr>
<tr><td>5</td><td>Jack Hughes (USA)</td><td>6</td><td>7</td></tr>
<tr><td>6</td><td>Jayden Struble (USA)</td><td>6</td><td>7</td></tr>
<tr><td>7</td><td>Kaiden Guhle (CAN)</td><td>5</td><td>6</td></tr>
<tr><td>8</td><td>Justin Barron (CAN)</td><td>5</td><td>6</td></tr>
<tr><td>9</td><td>Jake Sanderson (USA)</td><td>6</td><td>6</td></tr>
<tr><td>10</td><td>Samuel Régis (CAN)</td><td>5</td><td>4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Luca Münzenberger (GER)</td><td>4</td><td>15</td></tr>
<tr><td>2</td><td>Bowen Byram (CAN)</td><td>5</td><td>12</td></tr>
<tr><td>3</td><td>Karl Henriksson (SWE)</td><td>4</td><td>10</td></tr>
<tr><td>4</td><td>Marko Mladenovic (TWO)</td><td>3</td><td>8</td></tr>
<tr><td>5</td><td>Shakir Mukhamadullin (RUS)</td><td>3</td><td>8</td></tr>
<tr><td>6</td><td>Albin Grewe (SWE)</td><td>4</td><td>8</td></tr>
<tr><td>7</td><td>Ryan Johnson (USA)</td><td>6</td><td>8</td></tr>
<tr><td>8</td><td>Vasili Podkolzin (RUS)</td><td>3</td><td>6</td></tr>
<tr><td>9</td><td>Simon Kubicek (CZE)</td><td>5</td><td>6</td></tr>
<tr><td>10</td><td>Antti Saarela (FIN)</td><td>6</td><td>6</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Braden Schneider (CAN)</td><td>5</td><td>17</td></tr>
<tr><td>2</td><td>Ryan Johnson (USA)</td><td>6</td><td>12</td></tr>
<tr><td>3</td><td>Simon Kubicek (CZE)</td><td>5</td><td>11</td></tr>
<tr><td>4</td><td>Maximilian Glötzl (GER)</td><td>4</td><td>10</td></tr>
<tr><td>5</td><td>Jordan Spence (TWO)</td><td>3</td><td>9</td></tr>
<tr><td>6</td><td>Victor Soderström (SWE)</td><td>4</td><td>9</td></tr>
<tr><td>7</td><td>Moritz Seider (GER)</td><td>4</td><td>9</td></tr>
<tr><td>8</td><td>Simon Gnyp (GER)</td><td>4</td><td>9</td></tr>
<tr><td>9</td><td>Maksymilian Szuber (GER)</td><td>4</td><td>9</td></tr>
<tr><td>10</td><td>Antti Tuomisto (FIN)</td><td>6</td><td>9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Kaapo Kakko (FIN)</td><td>6</td><td>8-5-13</td></tr>
<tr><td>2</td><td>Anton Lundell (FIN)</td><td>6</td><td>4-9-13</td></tr>
<tr><td>3</td><td>Jack Hughes (USA)</td><td>6</td><td>5-7-12</td></tr>
<tr><td>4</td><td>Tim Stützle (GER)</td><td>4</td><td>6-5-11</td></tr>
<tr><td>5</td><td>Lukas Reichel (GER)</td><td>4</td><td>3-7-10</td></tr>
<tr><td>6</td><td>Trevor Zegras (USA)</td><td>6</td><td>2-7-9</td></tr>
<tr><td>7</td><td>Kirby Dach (CAN)</td><td>5</td><td>5-3-8</td></tr>
<tr><td>8</td><td>William Eklund (SWE)</td><td>4</td><td>4-4-8</td></tr>
<tr><td>9</td><td>Alexis Lafrenière (CAN)</td><td>5</td><td>4-4-8</td></tr>
<tr><td>10</td><td>Nick Robertson (USA)</td><td>6</td><td>4-4-8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Joni Jurmo (FIN)</td><td>6</td><td>17</td></tr>
<tr><td>2</td><td>Simon Kubicek (CZE)</td><td>5</td><td>16</td></tr>
<tr><td>3</td><td>Kaapo Kakko (FIN)</td><td>6</td><td>16</td></tr>
<tr><td>4</td><td>Ville Heinola (FIN)</td><td>6</td><td>15</td></tr>
<tr><td>5</td><td>Moritz Seider (GER)</td><td>4</td><td>12</td></tr>
<tr><td>6</td><td>Bowen Byram (CAN)</td><td>5</td><td>12</td></tr>
<tr><td>7</td><td>Juuso Parssinen (FIN)</td><td>6</td><td>12</td></tr>
<tr><td>8</td><td>Jayden Struble (USA)</td><td>6</td><td>12</td></tr>
<tr><td>9</td><td>Aku Räty (FIN)</td><td>6</td><td>11</td></tr>
<tr><td>10</td><td>Eemil Viro (FIN)</td><td>6</td><td>11</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Kaapo Kakko (FIN)</td><td>6</td><td>3</td></tr>
<tr><td>2</td><td>Alex Turcotte (USA)</td><td>6</td><td>3</td></tr>
<tr><td>3</td><td>Tim Stützle (GER)</td><td>4</td><td>2</td></tr>
<tr><td>4</td><td>Alexis Lafrenière (CAN)</td><td>5</td><td>2</td></tr>
<tr><td>5</td><td>Radek Muzik (CZE)</td><td>5</td><td>2</td></tr>
<tr><td>6</td><td>Filip Prikryl (CZE)</td><td>5</td><td>2</td></tr>
<tr><td>7</td><td>Simon Kubicek (CZE)</td><td>5</td><td>2</td></tr>
<tr><td>8</td><td>Nick Robertson (USA)</td><td>6</td><td>2</td></tr>
<tr><td>9</td><td>Arthur Kaliyev (TWO)</td><td>3</td><td>1</td></tr>
<tr><td>10</td><td>Martin Chromiak (TWO)</td><td>3</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Marco Rossi (TWO)</td><td>3</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Kirby Dach (CAN)</td><td>5</td><td>2</td></tr>
<tr><td>2</td><td>Vasili Podkolzin (RUS)</td><td>3</td><td>1</td></tr>
<tr><td>3</td><td>Noel Gunler (SWE)</td><td>4</td><td>1</td></tr>
<tr><td>4</td><td>Tim Stützle (GER)</td><td>4</td><td>1</td></tr>
<tr><td>5</td><td>Quinton Byfield (CAN)</td><td>5</td><td>1</td></tr>
<tr><td>6</td><td>Jakob Pelletier (CAN)</td><td>5</td><td>1</td></tr>
<tr><td>7</td><td>Jack Quinn (CAN)</td><td>5</td><td>1</td></tr>
<tr><td>8</td><td>Thomas Bordeleau (USA)</td><td>5</td><td>1</td></tr>
<tr><td>9</td><td>Radek Muzik (CZE)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Simon Kubicek (CZE)</td><td>5</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Joshua Samanski (GER)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Jack Quinn (CAN)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Bowen Byram (CAN)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Anton Lundell (FIN)</td><td>6</td><td>1</td></tr>
<tr><td>5</td><td>Roby Jarventie (FIN)</td><td>6</td><td>1</td></tr>
<tr><td>6</td><td>Jack Hughes (USA)</td><td>6</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Ville Heinola (FIN)</td><td>6</td><td>140</td></tr>
<tr><td>2</td><td>Eemil Viro (FIN)</td><td>6</td><td>134</td></tr>
<tr><td>3</td><td>Jake Sanderson (USA)</td><td>6</td><td>132</td></tr>
<tr><td>4</td><td>Cam York (USA)</td><td>6</td><td>125</td></tr>
<tr><td>5</td><td>Jayden Struble (USA)</td><td>6</td><td>125</td></tr>
<tr><td>6</td><td>Martin Hugo Has (CZE)</td><td>5</td><td>124</td></tr>
<tr><td>7</td><td>Joni Jurmo (FIN)</td><td>6</td><td>124</td></tr>
<tr><td>8</td><td>Simon Kubicek (CZE)</td><td>5</td><td>124</td></tr>
<tr><td>9</td><td>Thomas Harley (CAN)</td><td>5</td><td>123</td></tr>
<tr><td>10</td><td>Ryan Johnson (USA)</td><td>6</td><td>118</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Connor McMichael (CAN)</td><td>5</td><td>1</td></tr>
<tr><td>2</td><td>Kirby Dach (CAN)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Kaapo Kakko (FIN)</td><td>6</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>William Eklund (SWE)</td><td>4</td><td>4</td></tr>
<tr><td>2</td><td>Tim Stützle (GER)</td><td>4</td><td>4</td></tr>
<tr><td>3</td><td>Rodion Amirov (RUS)</td><td>3</td><td>2</td></tr>
<tr><td>4</td><td>Yegor Chinakhov (RUS)</td><td>3</td><td>2</td></tr>
<tr><td>5</td><td>Alex Newhook (CAN)</td><td>5</td><td>2</td></tr>
<tr><td>6</td><td>Patrik Puistola (FIN)</td><td>6</td><td>2</td></tr>
<tr><td>7</td><td>Matthew Boldy (USA)</td><td>6</td><td>2</td></tr>
<tr><td>8</td><td>Martin Chromiak (TWO)</td><td>3</td><td>1</td></tr>
<tr><td>9</td><td>Théo Rochette (TWO)</td><td>3</td><td>1</td></tr>
<tr><td>10</td><td>Vasili Ponomaryov (RUS)</td><td>3</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Jack Hughes (USA)</td><td>6</td><td>6</td></tr>
<tr><td>2</td><td>Quinton Byfield (CAN)</td><td>5</td><td>5</td></tr>
<tr><td>3</td><td>Thomas Harley (CAN)</td><td>5</td><td>5</td></tr>
<tr><td>4</td><td>Kaapo Kakko (FIN)</td><td>6</td><td>5</td></tr>
<tr><td>5</td><td>Patrik Puistola (FIN)</td><td>6</td><td>5</td></tr>
<tr><td>6</td><td>Juuso Parssinen (FIN)</td><td>6</td><td>5</td></tr>
<tr><td>7</td><td>Anton Lundell (FIN)</td><td>6</td><td>5</td></tr>
<tr><td>8</td><td>Alexander Holtz (SWE)</td><td>4</td><td>4</td></tr>
<tr><td>9</td><td>William Eklund (SWE)</td><td>4</td><td>4</td></tr>
<tr><td>10</td><td>Tim Stützle (GER)</td><td>4</td><td>4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Alex Turcotte (USA)</td><td>6</td><td>17</td></tr>
<tr><td>2</td><td>Antti Tuomisto (FIN)</td><td>6</td><td>16</td></tr>
<tr><td>3</td><td>Cam York (USA)</td><td>6</td><td>15</td></tr>
<tr><td>4</td><td>Jake Sanderson (USA)</td><td>6</td><td>13</td></tr>
<tr><td>5</td><td>Martin Hugo Has (CZE)</td><td>5</td><td>12</td></tr>
<tr><td>6</td><td>Simon Kubicek (CZE)</td><td>5</td><td>12</td></tr>
<tr><td>7</td><td>Mikko Kokkonen (FIN)</td><td>6</td><td>12</td></tr>
<tr><td>8</td><td>Jackson LaCombe (USA)</td><td>6</td><td>12</td></tr>
<tr><td>9</td><td>Philip Broberg (SWE)</td><td>4</td><td>11</td></tr>
<tr><td>10</td><td>Kaiden Guhle (CAN)</td><td>5</td><td>11</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td>1</td><td>Filip Prikryl (CZE)</td><td>5</td><td>16</td></tr>
<tr><td>2</td><td>Kaapo Kakko (FIN)</td><td>6</td><td>16</td></tr>
<tr><td>3</td><td>Tim Stützle (GER)</td><td>4</td><td>15</td></tr>
<tr><td>4</td><td>Juuso Parssinen (FIN)</td><td>6</td><td>15</td></tr>
<tr><td>5</td><td>Cole Caufield (USA)</td><td>6</td><td>14</td></tr>
<tr><td>6</td><td>Dylan Cozens (CAN)</td><td>5</td><td>11</td></tr>
<tr><td>7</td><td>Brad Lambert (FIN)</td><td>6</td><td>10</td></tr>
<tr><td>8</td><td>Pavel Novak (CZE)</td><td>5</td><td>9</td></tr>
<tr><td>9</td><td>Kasper Simontaival (FIN)</td><td>6</td><td>9</td></tr>
<tr><td>10</td><td>Jack Hughes (USA)</td><td>6</td><td>9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td>1</td><td>Tobias Björnfot (SWE)</td><td>4</td><td>10</td></tr>
<tr><td>2</td><td>Topi Niemela (FIN)</td><td>6</td><td>10</td></tr>
<tr><td>3</td><td>Thomas Harley (CAN)</td><td>5</td><td>9</td></tr>
<tr><td>4</td><td>Mikko Kokkonen (FIN)</td><td>6</td><td>8</td></tr>
<tr><td>5</td><td>Ryan Johnson (USA)</td><td>6</td><td>8</td></tr>
<tr><td>6</td><td>Moritz Seider (GER)</td><td>4</td><td>7</td></tr>
<tr><td>7</td><td>Martin Hugo Has (CZE)</td><td>5</td><td>7</td></tr>
<tr><td>8</td><td>Eemil Viro (FIN)</td><td>6</td><td>7</td></tr>
<tr><td>9</td><td>Joni Jurmo (FIN)</td><td>6</td><td>7</td></tr>
<tr><td>10</td><td>Jake Sanderson (USA)</td><td>6</td><td>7</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Joel Blomqvist (FIN)</td><td>6</td><td>0,884</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Joel Blomqvist (FIN)</td><td>6</td><td>3,57</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Joel Blomqvist (FIN)</td><td>6</td><td>336</td></tr>
<tr><td>2</td><td>Spencer Knight (USA)</td><td>5</td><td>299</td></tr>
<tr><td>3</td><td>Jan Bednar (CZE)</td><td>5</td><td>299</td></tr>
<tr><td>4</td><td>Dylan Garand (CAN)</td><td>4</td><td>248</td></tr>
<tr><td>5</td><td>Tobias Ancicka (GER)</td><td>4</td><td>242</td></tr>
<tr><td>6</td><td>Hugo Alnefelt (SWE)</td><td>4</td><td>194</td></tr>
<tr><td>7</td><td>Iaroslav Askarov (RUS)</td><td>3</td><td>164</td></tr>
<tr><td>8</td><td>Samuel Hlavaj (TWO)</td><td>2</td><td>120</td></tr>
<tr><td>9</td><td>Brett Brochu (CAN)</td><td>1</td><td>63</td></tr>
<tr><td>10</td><td>Dustin Wolf (USA)</td><td>1</td><td>60</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Joel Blomqvist (FIN)</td><td>6</td><td>172</td></tr>
<tr><td>2</td><td>Spencer Knight (USA)</td><td>5</td><td>169</td></tr>
<tr><td>3</td><td>Jan Bednar (CZE)</td><td>5</td><td>160</td></tr>
<tr><td>4</td><td>Dylan Garand (CAN)</td><td>4</td><td>151</td></tr>
<tr><td>5</td><td>Tobias Ancicka (GER)</td><td>4</td><td>141</td></tr>
<tr><td>6</td><td>Hugo Alnefelt (SWE)</td><td>4</td><td>119</td></tr>
<tr><td>7</td><td>Iaroslav Askarov (RUS)</td><td>3</td><td>99</td></tr>
<tr><td>8</td><td>Samuel Hlavaj (TWO)</td><td>2</td><td>89</td></tr>
<tr><td>9</td><td>Dustin Wolf (USA)</td><td>1</td><td>37</td></tr>
<tr><td>10</td><td>Brett Brochu (CAN)</td><td>1</td><td>36</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Dylan Garand (CAN)</td><td>4</td><td>4</td></tr>
<tr><td>2</td><td>Spencer Knight (USA)</td><td>5</td><td>4</td></tr>
<tr><td>3</td><td>Joel Blomqvist (FIN)</td><td>6</td><td>4</td></tr>
<tr><td>4</td><td>Jan Bednar (CZE)</td><td>5</td><td>2</td></tr>
<tr><td>5</td><td>Brett Brochu (CAN)</td><td>1</td><td>1</td></tr>
<tr><td>6</td><td>Iaroslav Askarov (RUS)</td><td>3</td><td>1</td></tr>
<tr><td>7</td><td>Hugo Alnefelt (SWE)</td><td>4</td><td>1</td></tr>
<tr><td>8</td><td>Tobias Ancicka (GER)</td><td>4</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Jan Bednar (CZE)</td><td>5</td><td>3</td></tr>
<tr><td>2</td><td>Samuel Hlavaj (TWO)</td><td>2</td><td>2</td></tr>
<tr><td>3</td><td>Iaroslav Askarov (RUS)</td><td>3</td><td>2</td></tr>
<tr><td>4</td><td>Hugo Alnefelt (SWE)</td><td>4</td><td>2</td></tr>
<tr><td>5</td><td>Tobias Ancicka (GER)</td><td>4</td><td>2</td></tr>
<tr><td>6</td><td>Tobias Johansen Breivold (TWO)</td><td>1</td><td>1</td></tr>
<tr><td>7</td><td>Jesper Wallstedt (SWE)</td><td>1</td><td>1</td></tr>
<tr><td>8</td><td>Dustin Wolf (USA)</td><td>1</td><td>1</td></tr>
<tr><td>9</td><td>Spencer Knight (USA)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Joel Blomqvist (FIN)</td><td>6</td><td>1</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
