<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Pro Individual Leaders</title>
<script src="WC-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - WC-STHS.bin - WC-STHSCareerStat.bin"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<b>Minimum Games Played: 5</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Connor McDavid (CAN)</td><td>13</td><td>13</td></tr>
<tr><td>2</td><td>David Pastrnak (CZE)</td><td>14</td><td>11</td></tr>
<tr><td>3</td><td>Brock Boeser (USA)</td><td>14</td><td>11</td></tr>
<tr><td>4</td><td>Steven Stamkos (CAN)</td><td>13</td><td>9</td></tr>
<tr><td>5</td><td>Auston Matthews (USA)</td><td>14</td><td>9</td></tr>
<tr><td>6</td><td>Jeff Skinner (CAN)</td><td>13</td><td>8</td></tr>
<tr><td>7</td><td>Tomas Hertl (CZE)</td><td>14</td><td>8</td></tr>
<tr><td>8</td><td>Rudolfs Balcers (LET)</td><td>11</td><td>7</td></tr>
<tr><td>9</td><td>Nico Hischier (SWI)</td><td>11</td><td>7</td></tr>
<tr><td>10</td><td>William Nylander (SWE)</td><td>12</td><td>7</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (CAN)</td><td>13</td><td>19</td></tr>
<tr><td>2</td><td>Jack Eichel (USA)</td><td>14</td><td>15</td></tr>
<tr><td>3</td><td>Tomas Hertl (CZE)</td><td>14</td><td>14</td></tr>
<tr><td>4</td><td>Connor McDavid (CAN)</td><td>13</td><td>13</td></tr>
<tr><td>5</td><td>Sidney Crosby (CAN)</td><td>13</td><td>12</td></tr>
<tr><td>6</td><td>Nikita Kucherov (RUS)</td><td>13</td><td>12</td></tr>
<tr><td>7</td><td>Jeff Skinner (CAN)</td><td>13</td><td>11</td></tr>
<tr><td>8</td><td>Jakub Vrana (CZE)</td><td>14</td><td>11</td></tr>
<tr><td>9</td><td>David Pastrnak (CZE)</td><td>14</td><td>11</td></tr>
<tr><td>10</td><td>Brock Boeser (USA)</td><td>14</td><td>11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Elias Pettersson (SWE)</td><td>12</td><td>48</td></tr>
<tr><td>2</td><td>David Pastrnak (CZE)</td><td>14</td><td>48</td></tr>
<tr><td>3</td><td>Brock Boeser (USA)</td><td>14</td><td>47</td></tr>
<tr><td>4</td><td>JJ Peterka (GER)</td><td>11</td><td>46</td></tr>
<tr><td>5</td><td>Aleksander Barkov (FIN)</td><td>12</td><td>45</td></tr>
<tr><td>6</td><td>Connor McDavid (CAN)</td><td>13</td><td>43</td></tr>
<tr><td>7</td><td>Auston Matthews (USA)</td><td>14</td><td>43</td></tr>
<tr><td>8</td><td>Tomas Hertl (CZE)</td><td>14</td><td>43</td></tr>
<tr><td>9</td><td>Nikolaj Ehlers (DAN)</td><td>11</td><td>41</td></tr>
<tr><td>10</td><td>Teuvo Teravainen (FIN)</td><td>12</td><td>41</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Steven Stamkos (CAN)</td><td>13</td><td>39,13%</td></tr>
<tr><td>2</td><td>Connor McDavid (CAN)</td><td>13</td><td>30,23%</td></tr>
<tr><td>3</td><td>Jeff Skinner (CAN)</td><td>13</td><td>26,67%</td></tr>
<tr><td>4</td><td>Brock Boeser (USA)</td><td>14</td><td>23,40%</td></tr>
<tr><td>5</td><td>Brayden Point (CAN)</td><td>13</td><td>23,33%</td></tr>
<tr><td>6</td><td>Mathew Barzal (CAN)</td><td>13</td><td>23,33%</td></tr>
<tr><td>7</td><td>David Pastrnak (CZE)</td><td>14</td><td>22,92%</td></tr>
<tr><td>8</td><td>Jake Guentzel (USA)</td><td>13</td><td>22,73%</td></tr>
<tr><td>9</td><td>Mikhail Sergachev (RUS)</td><td>13</td><td>22,73%</td></tr>
<tr><td>10</td><td>Alex Galchenyuk (USA)</td><td>14</td><td>22,73%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Connor McDavid (CAN)</td><td>13</td><td>13-13-26</td></tr>
<tr><td>2</td><td>Nathan MacKinnon (CAN)</td><td>13</td><td>7-19-26</td></tr>
<tr><td>3</td><td>Tomas Hertl (CZE)</td><td>14</td><td>8-14-22</td></tr>
<tr><td>4</td><td>Steven Stamkos (CAN)</td><td>13</td><td>9-9-18</td></tr>
<tr><td>5</td><td>Auston Matthews (USA)</td><td>14</td><td>9-9-18</td></tr>
<tr><td>6</td><td>Sidney Crosby (CAN)</td><td>13</td><td>5-12-17</td></tr>
<tr><td>7</td><td>Nico Hischier (SWI)</td><td>11</td><td>7-8-15</td></tr>
<tr><td>8</td><td>Jack Eichel (USA)</td><td>14</td><td>0-15-15</td></tr>
<tr><td>9</td><td>Mathew Barzal (CAN)</td><td>13</td><td>7-7-14</td></tr>
<tr><td>10</td><td>Aleksander Barkov (FIN)</td><td>12</td><td>6-8-14</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>David Pastrnak (CZE)</td><td>14</td><td>11-11-22</td></tr>
<tr><td>2</td><td>Tomas Hertl (CZE)</td><td>14</td><td>8-14-22</td></tr>
<tr><td>3</td><td>Jeff Skinner (CAN)</td><td>13</td><td>8-11-19</td></tr>
<tr><td>4</td><td>Steven Stamkos (CAN)</td><td>13</td><td>9-9-18</td></tr>
<tr><td>5</td><td>Jakub Vrana (CZE)</td><td>14</td><td>6-11-17</td></tr>
<tr><td>6</td><td>Andrei Svechnikov (RUS)</td><td>13</td><td>6-9-15</td></tr>
<tr><td>7</td><td>Rudolfs Balcers (LET)</td><td>11</td><td>7-7-14</td></tr>
<tr><td>8</td><td>Alex Galchenyuk (USA)</td><td>14</td><td>5-9-14</td></tr>
<tr><td>9</td><td>Timo Meier (SWI)</td><td>11</td><td>6-7-13</td></tr>
<tr><td>10</td><td>Leon Draisaitl (GER)</td><td>11</td><td>5-7-12</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (CAN)</td><td>13</td><td>7-19-26</td></tr>
<tr><td>2</td><td>David Pastrnak (CZE)</td><td>14</td><td>11-11-22</td></tr>
<tr><td>3</td><td>Brock Boeser (USA)</td><td>14</td><td>11-11-22</td></tr>
<tr><td>4</td><td>Tomas Hertl (CZE)</td><td>14</td><td>8-14-22</td></tr>
<tr><td>5</td><td>Nikita Kucherov (RUS)</td><td>13</td><td>7-12-19</td></tr>
<tr><td>6</td><td>Steven Stamkos (CAN)</td><td>13</td><td>9-9-18</td></tr>
<tr><td>7</td><td>Jakub Vrana (CZE)</td><td>14</td><td>6-11-17</td></tr>
<tr><td>8</td><td>Andrei Svechnikov (RUS)</td><td>13</td><td>6-9-15</td></tr>
<tr><td>9</td><td>Rudolfs Balcers (LET)</td><td>11</td><td>7-7-14</td></tr>
<tr><td>10</td><td>Mathew Barzal (CAN)</td><td>13</td><td>7-7-14</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Jacob Trouba (USA)</td><td>14</td><td>4-8-12</td></tr>
<tr><td>2</td><td>Cam Fowler (USA)</td><td>14</td><td>5-6-11</td></tr>
<tr><td>3</td><td>Alex Pietrangelo (CAN)</td><td>13</td><td>1-9-10</td></tr>
<tr><td>4</td><td>Mikhail Sergachev (RUS)</td><td>13</td><td>5-4-9</td></tr>
<tr><td>5</td><td>Cale Makar (CAN)</td><td>13</td><td>2-6-8</td></tr>
<tr><td>6</td><td>Filip Hronek (CZE)</td><td>14</td><td>2-5-7</td></tr>
<tr><td>7</td><td>Zachary Werenski (USA)</td><td>14</td><td>1-6-7</td></tr>
<tr><td>8</td><td>Miro Heiskanen (FIN)</td><td>12</td><td>0-7-7</td></tr>
<tr><td>9</td><td>Victor Hedman (SWE)</td><td>12</td><td>0-7-7</td></tr>
<tr><td>10</td><td>Aaron Ekblad (CAN)</td><td>13</td><td>2-4-6</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Connor McDavid (CAN)</td><td>13</td><td>2,29</td></tr>
<tr><td>2</td><td>Nathan MacKinnon (CAN)</td><td>13</td><td>2,27</td></tr>
<tr><td>3</td><td>Alex Galchenyuk (USA)</td><td>14</td><td>1,85</td></tr>
<tr><td>4</td><td>Brock Boeser (USA)</td><td>14</td><td>1,83</td></tr>
<tr><td>5</td><td>Steven Stamkos (CAN)</td><td>13</td><td>1,78</td></tr>
<tr><td>6</td><td>Tomas Hertl (CZE)</td><td>14</td><td>1,78</td></tr>
<tr><td>7</td><td>David Pastrnak (CZE)</td><td>14</td><td>1,77</td></tr>
<tr><td>8</td><td>Sidney Crosby (CAN)</td><td>13</td><td>1,72</td></tr>
<tr><td>9</td><td>Jeff Skinner (CAN)</td><td>13</td><td>1,70</td></tr>
<tr><td>10</td><td>Nikita Kucherov (RUS)</td><td>13</td><td>1,60</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Aleksander Barkov (FIN)</td><td>12</td><td>61,21%</td></tr>
<tr><td>2</td><td>Tyler Moy (SWI)</td><td>11</td><td>58,90%</td></tr>
<tr><td>3</td><td>Tomas Hertl (CZE)</td><td>14</td><td>58,30%</td></tr>
<tr><td>4</td><td>Enzo Corvi (SWI)</td><td>11</td><td>57,89%</td></tr>
<tr><td>5</td><td>Connor McDavid (CAN)</td><td>13</td><td>57,22%</td></tr>
<tr><td>6</td><td>Theodor Blueger (LET)</td><td>11</td><td>56,43%</td></tr>
<tr><td>7</td><td>Zemgus Girgensons (LET)</td><td>11</td><td>55,87%</td></tr>
<tr><td>8</td><td>Leon Draisaitl (GER)</td><td>11</td><td>55,08%</td></tr>
<tr><td>9</td><td>Dylan Larkin (USA)</td><td>14</td><td>54,95%</td></tr>
<tr><td>10</td><td>Sean Monahan (CAN)</td><td>12</td><td>54,93%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Aaron Ekblad (CAN)</td><td>13</td><td>24</td></tr>
<tr><td>2</td><td>Cale Makar (CAN)</td><td>13</td><td>22</td></tr>
<tr><td>3</td><td>Jeff Skinner (CAN)</td><td>13</td><td>19</td></tr>
<tr><td>4</td><td>Nathan MacKinnon (CAN)</td><td>13</td><td>19</td></tr>
<tr><td>5</td><td>Connor McDavid (CAN)</td><td>13</td><td>19</td></tr>
<tr><td>6</td><td>Sidney Crosby (CAN)</td><td>13</td><td>16</td></tr>
<tr><td>7</td><td>Charlie McAvoy (USA)</td><td>14</td><td>14</td></tr>
<tr><td>8</td><td>Seth Jones (USA)</td><td>14</td><td>14</td></tr>
<tr><td>9</td><td>Brock Boeser (USA)</td><td>14</td><td>14</td></tr>
<tr><td>10</td><td>Kris Letang (CAN)</td><td>13</td><td>13</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>David Musil (CZE)</td><td>14</td><td>24</td></tr>
<tr><td>2</td><td>Jacob Trouba (USA)</td><td>14</td><td>20</td></tr>
<tr><td>3</td><td>Moritz Seider (GER)</td><td>11</td><td>19</td></tr>
<tr><td>4</td><td>Oliver Lauridsen (DAN)</td><td>11</td><td>18</td></tr>
<tr><td>5</td><td>Mikhail Sergachev (RUS)</td><td>13</td><td>18</td></tr>
<tr><td>6</td><td>Filip Hronek (CZE)</td><td>14</td><td>18</td></tr>
<tr><td>7</td><td>Charlie McAvoy (USA)</td><td>14</td><td>18</td></tr>
<tr><td>8</td><td>Tyler Moy (SWI)</td><td>11</td><td>16</td></tr>
<tr><td>9</td><td>Pavol Regenda (SVK)</td><td>11</td><td>16</td></tr>
<tr><td>10</td><td>Victor Hedman (SWE)</td><td>12</td><td>16</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Andrey Pedan (WLD)</td><td>11</td><td>29</td></tr>
<tr><td>2</td><td>Erik Cernak (SVK)</td><td>11</td><td>27</td></tr>
<tr><td>3</td><td>Cam Fowler (USA)</td><td>14</td><td>25</td></tr>
<tr><td>4</td><td>Alex Pietrangelo (CAN)</td><td>13</td><td>23</td></tr>
<tr><td>5</td><td>Radim Simek (CZE)</td><td>14</td><td>23</td></tr>
<tr><td>6</td><td>Oskars Cibulskis (LET)</td><td>11</td><td>22</td></tr>
<tr><td>7</td><td>Marco Scandella (WLD)</td><td>11</td><td>21</td></tr>
<tr><td>8</td><td>Oliver Lauridsen (DAN)</td><td>11</td><td>21</td></tr>
<tr><td>9</td><td>Jonas Brodin (SWE)</td><td>12</td><td>21</td></tr>
<tr><td>10</td><td>Cale Makar (CAN)</td><td>13</td><td>21</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Adam Ruzicka (SVK)</td><td>11</td><td>2-4-6</td></tr>
<tr><td>2</td><td>Marcel Brandt (GER)</td><td>11</td><td>1-5-6</td></tr>
<tr><td>3</td><td>Juraj Slafkovský (SVK)</td><td>11</td><td>3-2-5</td></tr>
<tr><td>4</td><td>Moritz Seider (GER)</td><td>11</td><td>0-4-4</td></tr>
<tr><td>5</td><td>Marian Studenic (SVK)</td><td>11</td><td>2-1-3</td></tr>
<tr><td>6</td><td>Mathias From (DAN)</td><td>11</td><td>2-1-3</td></tr>
<tr><td>7</td><td>Milos Kelemen (SVK)</td><td>11</td><td>2-1-3</td></tr>
<tr><td>8</td><td>Eetu Luostarinen (FIN)</td><td>12</td><td>1-2-3</td></tr>
<tr><td>9</td><td>Martin Chromiak (SVK)</td><td>11</td><td>0-3-3</td></tr>
<tr><td>10</td><td>Simon Nemec (SVK)</td><td>11</td><td>0-3-3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Erik Cernak (SVK)</td><td>11</td><td>36</td></tr>
<tr><td>2</td><td>Luca Sbisa (WLD)</td><td>11</td><td>32</td></tr>
<tr><td>3</td><td>Drew Doughty (CAN)</td><td>13</td><td>32</td></tr>
<tr><td>4</td><td>Charlie McAvoy (USA)</td><td>14</td><td>32</td></tr>
<tr><td>5</td><td>Karlis Cukste (LET)</td><td>11</td><td>31</td></tr>
<tr><td>6</td><td>Sebastian Aho (FIN)</td><td>12</td><td>30</td></tr>
<tr><td>7</td><td>Aaron Ekblad (CAN)</td><td>13</td><td>28</td></tr>
<tr><td>8</td><td>Timo Meier (SWI)</td><td>11</td><td>27</td></tr>
<tr><td>9</td><td>Patrik Laine (FIN)</td><td>12</td><td>27</td></tr>
<tr><td>10</td><td>Jacob Trouba (USA)</td><td>14</td><td>27</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Andrei Svechnikov (RUS)</td><td>13</td><td>4</td></tr>
<tr><td>2</td><td>Zemgus Girgensons (LET)</td><td>11</td><td>3</td></tr>
<tr><td>3</td><td>Nico Hischier (SWI)</td><td>11</td><td>3</td></tr>
<tr><td>4</td><td>William Nylander (SWE)</td><td>12</td><td>3</td></tr>
<tr><td>5</td><td>Teuvo Teravainen (FIN)</td><td>12</td><td>3</td></tr>
<tr><td>6</td><td>Connor McDavid (CAN)</td><td>13</td><td>3</td></tr>
<tr><td>7</td><td>Mathew Barzal (CAN)</td><td>13</td><td>3</td></tr>
<tr><td>8</td><td>David Pastrnak (CZE)</td><td>14</td><td>3</td></tr>
<tr><td>9</td><td>Brock Boeser (USA)</td><td>14</td><td>3</td></tr>
<tr><td>10</td><td>Alexandre Texier (WLD)</td><td>11</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (WLD)</td><td>11</td><td>1</td></tr>
<tr><td>2</td><td>Marco Rossi (WLD)</td><td>11</td><td>1</td></tr>
<tr><td>3</td><td>Martin Marincin (SVK)</td><td>11</td><td>1</td></tr>
<tr><td>4</td><td>Nico Hischier (SWI)</td><td>11</td><td>1</td></tr>
<tr><td>5</td><td>Daniel Sprong (WLD)</td><td>11</td><td>1</td></tr>
<tr><td>6</td><td>Miks Indrasis (LET)</td><td>11</td><td>1</td></tr>
<tr><td>7</td><td>Gabriel Landeskog (SWE)</td><td>12</td><td>1</td></tr>
<tr><td>8</td><td>Vladislav Kamenev (RUS)</td><td>13</td><td>1</td></tr>
<tr><td>9</td><td>Charlie McAvoy (USA)</td><td>14</td><td>1</td></tr>
<tr><td>10</td><td>Jakub Vrana (CZE)</td><td>14</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Connor McDavid (CAN)</td><td>13</td><td>4</td></tr>
<tr><td>2</td><td>David Pastrnak (CZE)</td><td>14</td><td>4</td></tr>
<tr><td>3</td><td>Steven Stamkos (CAN)</td><td>13</td><td>3</td></tr>
<tr><td>4</td><td>Nikita Kucherov (RUS)</td><td>13</td><td>3</td></tr>
<tr><td>5</td><td>Auston Matthews (USA)</td><td>14</td><td>3</td></tr>
<tr><td>6</td><td>Leon Draisaitl (GER)</td><td>11</td><td>2</td></tr>
<tr><td>7</td><td>Timo Meier (SWI)</td><td>11</td><td>2</td></tr>
<tr><td>8</td><td>Patrik Laine (FIN)</td><td>12</td><td>2</td></tr>
<tr><td>9</td><td>Filip Forsberg (SWE)</td><td>12</td><td>2</td></tr>
<tr><td>10</td><td>Mikhail Sergachev (RUS)</td><td>13</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Aleksander Barkov (FIN)</td><td>12</td><td>2</td></tr>
<tr><td>2</td><td>Martin Fehervary (SVK)</td><td>11</td><td>1</td></tr>
<tr><td>3</td><td>Rudolfs Balcers (LET)</td><td>11</td><td>1</td></tr>
<tr><td>4</td><td>Marko Dano (SVK)</td><td>11</td><td>1</td></tr>
<tr><td>5</td><td>Kevin Fiala (SWI)</td><td>11</td><td>1</td></tr>
<tr><td>6</td><td>Uvis Balinskis (LET)</td><td>11</td><td>1</td></tr>
<tr><td>7</td><td>Marc Michaelis (GER)</td><td>11</td><td>1</td></tr>
<tr><td>8</td><td>Jesse Puljujarvi (FIN)</td><td>12</td><td>1</td></tr>
<tr><td>9</td><td>Teuvo Teravainen (FIN)</td><td>12</td><td>1</td></tr>
<tr><td>10</td><td>Elias Lindholm (SWE)</td><td>12</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Miks Indrasis (LET)</td><td>11</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Jacob Trouba (USA)</td><td>14</td><td>322</td></tr>
<tr><td>2</td><td>Filip Hronek (CZE)</td><td>14</td><td>315</td></tr>
<tr><td>3</td><td>Cam Fowler (USA)</td><td>14</td><td>306</td></tr>
<tr><td>4</td><td>Rasmus Ristolainen (FIN)</td><td>12</td><td>301</td></tr>
<tr><td>5</td><td>Alex Pietrangelo (CAN)</td><td>13</td><td>295</td></tr>
<tr><td>6</td><td>Aaron Ekblad (CAN)</td><td>13</td><td>295</td></tr>
<tr><td>7</td><td>David Musil (CZE)</td><td>14</td><td>294</td></tr>
<tr><td>8</td><td>Erik Cernak (SVK)</td><td>11</td><td>292</td></tr>
<tr><td>9</td><td>Luca Sbisa (WLD)</td><td>11</td><td>291</td></tr>
<tr><td>10</td><td>Charlie McAvoy (USA)</td><td>14</td><td>291</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Timo Meier (SWI)</td><td>11</td><td>1</td></tr>
<tr><td>2</td><td>Tim Stützle (GER)</td><td>11</td><td>1</td></tr>
<tr><td>3</td><td>Filip Forsberg (SWE)</td><td>12</td><td>1</td></tr>
<tr><td>4</td><td>Mathew Barzal (CAN)</td><td>13</td><td>1</td></tr>
<tr><td>5</td><td>Andrei Svechnikov (RUS)</td><td>13</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Connor McDavid (CAN)</td><td>13</td><td>6</td></tr>
<tr><td>2</td><td>Mikko Rantanen (FIN)</td><td>12</td><td>2</td></tr>
<tr><td>3</td><td>William Nylander (SWE)</td><td>12</td><td>2</td></tr>
<tr><td>4</td><td>Steven Stamkos (CAN)</td><td>13</td><td>2</td></tr>
<tr><td>5</td><td>Valeri Nichushkin (RUS)</td><td>13</td><td>2</td></tr>
<tr><td>6</td><td>Mikhail Sergachev (RUS)</td><td>13</td><td>2</td></tr>
<tr><td>7</td><td>Jacob De La Rose (SWE)</td><td>8</td><td>1</td></tr>
<tr><td>8</td><td>Alexandre Texier (WLD)</td><td>11</td><td>1</td></tr>
<tr><td>9</td><td>Oskar Lindblom (SWE)</td><td>11</td><td>1</td></tr>
<tr><td>10</td><td>Theodor Blueger (LET)</td><td>11</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Connor McDavid (CAN)</td><td>13</td><td>8</td></tr>
<tr><td>2</td><td>Nathan MacKinnon (CAN)</td><td>13</td><td>6</td></tr>
<tr><td>3</td><td>Alex Ovechkin (RUS)</td><td>13</td><td>5</td></tr>
<tr><td>4</td><td>Mikko Rantanen (FIN)</td><td>12</td><td>4</td></tr>
<tr><td>5</td><td>Aleksander Barkov (FIN)</td><td>12</td><td>4</td></tr>
<tr><td>6</td><td>Auston Matthews (USA)</td><td>14</td><td>4</td></tr>
<tr><td>7</td><td>Brock Boeser (USA)</td><td>14</td><td>4</td></tr>
<tr><td>8</td><td>Jack Hughes (USA)</td><td>12</td><td>3</td></tr>
<tr><td>9</td><td>Jeff Skinner (CAN)</td><td>13</td><td>3</td></tr>
<tr><td>10</td><td>Sidney Crosby (CAN)</td><td>13</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Aaron Ekblad (CAN)</td><td>13</td><td>36</td></tr>
<tr><td>2</td><td>Cam Fowler (USA)</td><td>14</td><td>36</td></tr>
<tr><td>3</td><td>Marco Scandella (WLD)</td><td>11</td><td>34</td></tr>
<tr><td>4</td><td>Seth Jones (USA)</td><td>14</td><td>32</td></tr>
<tr><td>5</td><td>Charlie McAvoy (USA)</td><td>14</td><td>30</td></tr>
<tr><td>6</td><td>Jacob Trouba (USA)</td><td>14</td><td>30</td></tr>
<tr><td>7</td><td>Andrey Pedan (WLD)</td><td>11</td><td>29</td></tr>
<tr><td>8</td><td>Moritz Seider (GER)</td><td>11</td><td>29</td></tr>
<tr><td>9</td><td>Jonas Siegenthaler (SWI)</td><td>11</td><td>29</td></tr>
<tr><td>10</td><td>Oliver Joakim Larsen (DAN)</td><td>11</td><td>29</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Cole Caufield (USA)</td><td>10</td><td>1</td></tr>
<tr><td>2</td><td>Anze Kopitar (WLD)</td><td>11</td><td>1</td></tr>
<tr><td>3</td><td>Marko Dano (SVK)</td><td>11</td><td>1</td></tr>
<tr><td>4</td><td>Martin Reway (SVK)</td><td>11</td><td>1</td></tr>
<tr><td>5</td><td>Teuvo Teravainen (FIN)</td><td>12</td><td>1</td></tr>
<tr><td>6</td><td>Jack Hughes (USA)</td><td>12</td><td>1</td></tr>
<tr><td>7</td><td>Nikita Kucherov (RUS)</td><td>13</td><td>1</td></tr>
<tr><td>8</td><td>Tomas Hertl (CZE)</td><td>14</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td>1</td><td>Brock Boeser (USA)</td><td>14</td><td>33</td></tr>
<tr><td>2</td><td>Nikolaj Ehlers (DAN)</td><td>11</td><td>32</td></tr>
<tr><td>3</td><td>Nikita Kucherov (RUS)</td><td>13</td><td>32</td></tr>
<tr><td>4</td><td>Alexandre Texier (WLD)</td><td>11</td><td>31</td></tr>
<tr><td>5</td><td>Oliver Bjorkstrand (DAN)</td><td>11</td><td>30</td></tr>
<tr><td>6</td><td>Auston Matthews (USA)</td><td>14</td><td>30</td></tr>
<tr><td>7</td><td>Tim Stützle (GER)</td><td>11</td><td>29</td></tr>
<tr><td>8</td><td>Nathan MacKinnon (CAN)</td><td>13</td><td>28</td></tr>
<tr><td>9</td><td>Jack Eichel (USA)</td><td>14</td><td>28</td></tr>
<tr><td>10</td><td>David Pastrnak (CZE)</td><td>14</td><td>27</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td>1</td><td>Luca Sbisa (WLD)</td><td>11</td><td>24</td></tr>
<tr><td>2</td><td>Aaron Ekblad (CAN)</td><td>13</td><td>22</td></tr>
<tr><td>3</td><td>J.J. Moser (SWI)</td><td>11</td><td>19</td></tr>
<tr><td>4</td><td>Erik Cernak (SVK)</td><td>11</td><td>19</td></tr>
<tr><td>5</td><td>Jonas Brodin (SWE)</td><td>12</td><td>19</td></tr>
<tr><td>6</td><td>Radim Simek (CZE)</td><td>14</td><td>19</td></tr>
<tr><td>7</td><td>Jonas Siegenthaler (SWI)</td><td>11</td><td>18</td></tr>
<tr><td>8</td><td>Victor Hedman (SWE)</td><td>12</td><td>18</td></tr>
<tr><td>9</td><td>Noah Hanifin (USA)</td><td>14</td><td>18</td></tr>
<tr><td>10</td><td>Philip Larsen (DAN)</td><td>11</td><td>17</td></tr>
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
<tr><td>1</td><td>Matt Murray (CAN)</td><td>9</td><td>0,935</td></tr>
<tr><td>2</td><td>Andrey Vasilevskiy (RUS)</td><td>11</td><td>0,933</td></tr>
<tr><td>3</td><td>Philipp Grubauer (GER)</td><td>10</td><td>0,919</td></tr>
<tr><td>4</td><td>Akira Schmid (SWI)</td><td>11</td><td>0,918</td></tr>
<tr><td>5</td><td>Ondrej Pavelec (CZE)</td><td>10</td><td>0,912</td></tr>
<tr><td>6</td><td>Connor Hellebuyck (USA)</td><td>9</td><td>0,911</td></tr>
<tr><td>7</td><td>Robin Lehner (SWE)</td><td>11</td><td>0,910</td></tr>
<tr><td>8</td><td>Jaroslav Halak (SVK)</td><td>11</td><td>0,909</td></tr>
<tr><td>9</td><td>Juuse Saros (FIN)</td><td>10</td><td>0,909</td></tr>
<tr><td>10</td><td>Jack Campbell (USA)</td><td>6</td><td>0,909</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Matt Murray (CAN)</td><td>9</td><td>1,67</td></tr>
<tr><td>2</td><td>Andrey Vasilevskiy (RUS)</td><td>11</td><td>2,03</td></tr>
<tr><td>3</td><td>Akira Schmid (SWI)</td><td>11</td><td>2,33</td></tr>
<tr><td>4</td><td>Robin Lehner (SWE)</td><td>11</td><td>2,37</td></tr>
<tr><td>5</td><td>Philipp Grubauer (GER)</td><td>10</td><td>2,48</td></tr>
<tr><td>6</td><td>Ondrej Pavelec (CZE)</td><td>10</td><td>2,49</td></tr>
<tr><td>7</td><td>Juuse Saros (FIN)</td><td>10</td><td>2,54</td></tr>
<tr><td>8</td><td>Jaroslav Halak (SVK)</td><td>11</td><td>2,63</td></tr>
<tr><td>9</td><td>Connor Hellebuyck (USA)</td><td>9</td><td>2,67</td></tr>
<tr><td>10</td><td>Jack Campbell (USA)</td><td>6</td><td>2,70</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Robin Lehner (SWE)</td><td>11</td><td>659</td></tr>
<tr><td>2</td><td>Andrey Vasilevskiy (RUS)</td><td>11</td><td>650</td></tr>
<tr><td>3</td><td>Akira Schmid (SWI)</td><td>11</td><td>643</td></tr>
<tr><td>4</td><td>Jaroslav Halak (SVK)</td><td>11</td><td>616</td></tr>
<tr><td>5</td><td>Philipp Grubauer (GER)</td><td>10</td><td>604</td></tr>
<tr><td>6</td><td>Juuse Saros (FIN)</td><td>10</td><td>590</td></tr>
<tr><td>7</td><td>Ondrej Pavelec (CZE)</td><td>10</td><td>578</td></tr>
<tr><td>8</td><td>Matt Murray (CAN)</td><td>9</td><td>540</td></tr>
<tr><td>9</td><td>Connor Hellebuyck (USA)</td><td>9</td><td>517</td></tr>
<tr><td>10</td><td>Elvis Merzlikins (LET)</td><td>8</td><td>490</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Andrey Vasilevskiy (RUS)</td><td>11</td><td>330</td></tr>
<tr><td>2</td><td>Philipp Grubauer (GER)</td><td>10</td><td>310</td></tr>
<tr><td>3</td><td>Akira Schmid (SWI)</td><td>11</td><td>306</td></tr>
<tr><td>4</td><td>Jaroslav Halak (SVK)</td><td>11</td><td>297</td></tr>
<tr><td>5</td><td>Robin Lehner (SWE)</td><td>11</td><td>290</td></tr>
<tr><td>6</td><td>Ondrej Pavelec (CZE)</td><td>10</td><td>274</td></tr>
<tr><td>7</td><td>Juuse Saros (FIN)</td><td>10</td><td>274</td></tr>
<tr><td>8</td><td>Connor Hellebuyck (USA)</td><td>9</td><td>258</td></tr>
<tr><td>9</td><td>Elvis Merzlikins (LET)</td><td>8</td><td>247</td></tr>
<tr><td>10</td><td>Matt Murray (CAN)</td><td>9</td><td>231</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Carter Hart (CAN)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Philipp Grubauer (GER)</td><td>10</td><td>1</td></tr>
<tr><td>3</td><td>Andrey Vasilevskiy (RUS)</td><td>11</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Matt Murray (CAN)</td><td>9</td><td>9</td></tr>
<tr><td>2</td><td>Connor Hellebuyck (USA)</td><td>9</td><td>8</td></tr>
<tr><td>3</td><td>Andrey Vasilevskiy (RUS)</td><td>11</td><td>8</td></tr>
<tr><td>4</td><td>Ondrej Pavelec (CZE)</td><td>10</td><td>7</td></tr>
<tr><td>5</td><td>Robin Lehner (SWE)</td><td>11</td><td>6</td></tr>
<tr><td>6</td><td>Juuse Saros (FIN)</td><td>10</td><td>5</td></tr>
<tr><td>7</td><td>Akira Schmid (SWI)</td><td>11</td><td>5</td></tr>
<tr><td>8</td><td>Jack Campbell (USA)</td><td>6</td><td>4</td></tr>
<tr><td>9</td><td>Philipp Grubauer (GER)</td><td>10</td><td>4</td></tr>
<tr><td>10</td><td>Carter Hart (CAN)</td><td>4</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Connor Hellebuyck (USA)</td><td>4</td><td>1,000</td></tr>
<tr><td>2</td><td>Demid Yeremeyev (WLD)</td><td>3</td><td>1,000</td></tr>
<tr><td>3</td><td>Jack Campbell (USA)</td><td>3</td><td>1,000</td></tr>
<tr><td>4</td><td>Andrey Vasilevskiy (RUS)</td><td>3</td><td>1,000</td></tr>
<tr><td>5</td><td>Ondrej Pavelec (CZE)</td><td>3</td><td>1,000</td></tr>
<tr><td>6</td><td>Juuse Saros (FIN)</td><td>6</td><td>0,833</td></tr>
<tr><td>7</td><td>Akira Schmid (SWI)</td><td>4</td><td>0,750</td></tr>
<tr><td>8</td><td>Jaroslav Halak (SVK)</td><td>6</td><td>0,667</td></tr>
<tr><td>9</td><td>Philipp Grubauer (GER)</td><td>3</td><td>0,667</td></tr>
<tr><td>10</td><td>Elvis Merzlikins (LET)</td><td>5</td><td>0,400</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Frederik Andersen (DAN)</td><td>7</td><td>6</td></tr>
<tr><td>2</td><td>Jaroslav Halak (SVK)</td><td>11</td><td>6</td></tr>
<tr><td>3</td><td>Alexandar Georgiyev (WLD)</td><td>7</td><td>5</td></tr>
<tr><td>4</td><td>Philipp Grubauer (GER)</td><td>10</td><td>5</td></tr>
<tr><td>5</td><td>Robin Lehner (SWE)</td><td>11</td><td>5</td></tr>
<tr><td>6</td><td>Mads Søgaard (DAN)</td><td>6</td><td>4</td></tr>
<tr><td>7</td><td>Juuse Saros (FIN)</td><td>10</td><td>4</td></tr>
<tr><td>8</td><td>Akira Schmid (SWI)</td><td>11</td><td>4</td></tr>
<tr><td>9</td><td>Arturs Silovs (LET)</td><td>3</td><td>3</td></tr>
<tr><td>10</td><td>Demid Yeremeyev (WLD)</td><td>4</td><td>3</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
