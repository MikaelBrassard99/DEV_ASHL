<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Teams And GM Info</title>
<script src="WC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - WC-STHS.bin - WC-STHSCareerStat.bin"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1160px) {
.STHSWarning {display:block;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(1){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(1){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(2){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(2){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(3){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(3){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(4){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(4){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(5){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(5){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(6){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(6){display:none;}
}</style>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<table class="STHSTeamsAndGMInfo_MainTable"><thead><tr>
<th>Team Name</th>
<th>General Manager</th>
<th>Instant Messenger</th>
<th>Email</th>
<th>City</th>
<th>Arena</th>
<th>Farm Team Name</th>
<th>Last File Load Date</th>
<th># of Load Lines</th>
<th># of Fail Auto Roster</th>
<th># of Fail Pro Auto Line</th>
<th># of Fail Farm Auto Line</th>
<th># of Fail Simulation</th></tr></thead><tbody>
<tr><td>ALLEMAGNE</td>
<td>Benoit Dicaire</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 12</td>
<td>22 août 2023 at 17:34</td>
<td>16</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td></tr>
<tr><td>CANADA</td>
<td>Félix Julien</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 10</td>
<td>22 août 2023 at 21:39</td>
<td>11</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td></tr>
<tr><td>DANEMARK</td>
<td>Jonathan Légaré</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 7</td>
<td>21 août 2023 at 19:55</td>
<td>5</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td></tr>
<tr><td>FINLANDE</td>
<td>Sébastien Tremblay</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 3</td>
<td>11 août 2023 at 21:44</td>
<td>5</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td></tr>
<tr><td>LETTONIE</td>
<td>Simon Brassard</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 8</td>
<td></td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td></tr>
<tr><td>RUSSIE</td>
<td>Mathieu Richard</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 9</td>
<td>21 août 2023 at 06:56</td>
<td>8</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td></tr>
<tr><td>SLOVAQUIE</td>
<td>J-P Vandal</td>
<td></td>
<td><a href="mailto:on veux gagner une game svp!">on veux gagner une game svp!</a></td>
<td></td>
<td></td>
<td>Farm Team 6</td>
<td>26 juillet 2023 at 17:22</td>
<td>1</td>
<td>3</td>
<td>0</td>
<td>0</td>
<td>0</td></tr>
<tr><td>SUÈDE</td>
<td>Alexandre Hamel</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 1</td>
<td>18 août 2023 at 12:48</td>
<td>6</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td></tr>
<tr><td>SUISSE</td>
<td>Jean-Bruno Gélinas</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 5</td>
<td>6 août 2023 at 07:07</td>
<td>2</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td></tr>
<tr><td>TCHÉQUIE</td>
<td>Mercier Family</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 4</td>
<td>21 août 2023 at 06:56</td>
<td>6</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td></tr>
<tr><td>USA</td>
<td>Olivier Madgin</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 2</td>
<td>18 août 2023 at 20:44</td>
<td>8</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td></tr>
<tr><td>WORLD</td>
<td>Maxime Bourassa Guillemette</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 11</td>
<td>22 août 2023 at 21:39</td>
<td>7</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td></tr>
</tbody></table><br />
<a href="mailto:on veux gagner une game svp!">Email all General Manager</a>
<?php include "Footer.php";?>
