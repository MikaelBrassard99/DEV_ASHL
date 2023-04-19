<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Team Prospects</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleKraken">Seattle Kraken</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#VegasGoldenKnights">Vegas Golden Knights</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamProspects_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 25</h3>
Cayden Primeau(Y:2017-O:113), Cole Perfetti(Y:2020-O:6), David Bernhardt(Y:2016-O:151), Dmitri Ovchinnikov(Y:2020-O:74), Erik Brannstrom(Y:2017-O:23), Filip Chytil(Y:2017-O:24), Ian Mitchell(Y:2017-O:71), Igor Shvyrev(Y:2017-O:132), Jamieson Rees(Y:2019-O:46), Jay O'Brien(Y:2018-O:30), Joel Blomqvist(Y:2020-O:87), Joseph Woll(Y:2016-O:66), Kirill Ustimenko(Y:2017-O:150), Layton Ahac(Y:2019-O:113), Lias Andersson(Y:2017-O:14), Linus Hogberg(Y:2016-O:152), Matthew Strome(Y:2017-O:65), Olivier Nadeau(Y:2021-O:93), Owen Power(Y:2021-O:1), Pavel Dorofeyev(Y:2019-O:60), Pyotr Kotchekov(Y:2019-O:44), Simon Lundmark(Y:2019-O:77), Timothy Liljegren(Y:2017-O:15), Wade Allison(Y:2016-O:71), Wyatt Johnston(Y:2021-O:37)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>NYI 2, PHI 2, MTL 3, ANH 3, CLB 4, PIT 4, CAR 4, VEG 4, BUF 5, CLB 5, ANH 5, MTL 5, ANH 6, ANH 7<br />
<b>Year 2023: </b>ARZ 2, ANH 2, COL 3, ANH 3, ANH 4, PIT 4, ANH 5, ANH 6, ANH 7<br />
<b>Year 2024: </b>ANH 1, ANH 2, ANH 3, ANH 4, CLB 5, ANH 5, ANH 6, ANH 7<br />
<b>Year 2025: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5, ANH 6, ANH 7<br />
<b>Year 2026: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5, ANH 6, ANH 7<br />
</div>
<h1 class="TeamProspects_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 8</h3>
Alec Regula(Y:2018-O:52), Aleksi Heponiemi(Y:2017-O:28), Caedan Bankier(Y:2021-O:62), Colton Dach(Y:2021-O:54), Ozzy Wiesblatt(Y:2020-O:49), Rodion Amirov(Y:2020-O:25), Samuel Fagemo(Y:2019-O:50), Vitali Kravtsov(Y:2018-O:10)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>VEG 5, ARZ 6, ARZ 7, PIT 7<br />
<b>Year 2023: </b>ANH 1, ARZ 1, ARZ 3, ARZ 5, ARZ 6, ARZ 7<br />
<b>Year 2024: </b>ARZ 1, ARZ 2, ARZ 3, ARZ 5, ARZ 6, ARZ 7<br />
<b>Year 2025: </b>ARZ 1, ARZ 2, ARZ 3, ARZ 4, ARZ 5, ARZ 6, ARZ 7<br />
<b>Year 2026: </b>ARZ 1, ARZ 2, ARZ 3, ARZ 4, ARZ 5, ARZ 6, ARZ 7<br />
</div>
<h1 class="TeamProspects_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 18</h3>
Brett Harrison(Y:2021-O:46), Calen Addison(Y:2018-O:38), Dmitri Kuzmin(Y:2021-O:127), Graeme Clarke(Y:2019-O:97), Gustav Lindstrom(Y:2017-O:59), Isaac Belliveau(Y:2021-O:124), Jakub Brabenec(Y:2021-O:157), Justin Sourdif(Y:2020-O:77), Karl Henrikson(Y:2019-O:95), Landon Slaggert(Y:2020-O:143), Mason McTavish(Y:2021-O:9), Noel Gunler(Y:2020-O:18), Ryan Winterton(Y:2021-O:85), Stanislav Svozil(Y:2021-O:36), Theodor Niederbach(Y:2020-O:44), Timothy Gettinger(Y:2016-O:123), Tyler Weiss(Y:2018-O:111), Viljami Marjala(Y:2021-O:126)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>QUE 1, BOS 2, MTL 2, NYR 3, SJS 3, BOS 5, BOS 6<br />
<b>Year 2023: </b>BOS 4, BOS 5, BOS 6, BOS 7<br />
<b>Year 2024: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5, BOS 6, BOS 7<br />
<b>Year 2025: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5, BOS 6, BOS 7<br />
<b>Year 2026: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5, BOS 6, BOS 7<br />
</div>
<h1 class="TeamProspects_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 21</h3>
Albert Johansson(Y:2019-O:72), Alexander Campbell(Y:2019-O:71), Alexei Kolosov(Y:2021-O:99), Dylan Peterson(Y:2020-O:80), Filip Hallander(Y:2018-O:53), Filip Johansson(Y:2018-O:35), Jack Quinn(Y:2020-O:11), Jake Wise(Y:2018-O:47), Jonah Gadjovich(Y:2017-O:60), Kaiden Guhle(Y:2020-O:27), Kirill Maksimov(Y:2017-O:111), Lukas Dostal(Y:2018-O:106), Red Savage(Y:2021-O:88), Sam Colangelo(Y:2020-O:56), Tyler Boucher(Y:2021-O:72), Veeti Miettinen(Y:2020-O:121), William Villeneuve(Y:2020-O:38), Yan Kuznetsov(Y:2020-O:57), Yegor Chinakhov(Y:2021-O:18), Yevgeni Oksentyuk(Y:2020-O:129), Zion Nybeck(Y:2020-O:62)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>VEG 1, DAL 3, BUF 3, VAN 3, STL 5, BUF 6, BUF 7<br />
<b>Year 2023: </b>BUF 1, BUF 3, BUF 4, PIT 6, BUF 6, BUF 7<br />
<b>Year 2024: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
<b>Year 2025: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
<b>Year 2026: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
</div>
<h1 class="TeamProspects_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 14</h3>
Aleksi Heimosalmi(Y:2021-O:53), Anton Olsson(Y:2021-O:63), Blake Biondi(Y:2020-O:53), Brock Faber(Y:2020-O:86), Daemon Hunt(Y:2020-O:83), Emil Andrae(Y:2020-O:54), Jack Drury(Y:2018-O:32), Jack Finley(Y:2020-O:55), Michal Gut(Y:2020-O:106), Ronan Seeley(Y:2020-O:73), Ryder Rolston(Y:2020-O:150), Scott Morrow(Y:2021-O:49), Simon Kubicek(Y:2020-O:165), Ukko-Pekka Luukkonen(Y:2017-O:57)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>CGY 1, STL 1, CGY 2, STL 2, TOR 3, TBL 3, CGY 3, DET 3, STL 4, BUF 4, BOS 4, WPG 4, CGY 5, VAN 5, CGY 6, CGY 7<br />
<b>Year 2023: </b>MTL 1, CGY 1, STL 1, CGY 2, SEA 3, CGY 3, STL 3, CGY 4, CGY 6, CGY 7<br />
<b>Year 2024: </b>CGY 1, CGY 2, CGY 3, PHI 3, CGY 4, CGY 5, CGY 6, CGY 7<br />
<b>Year 2025: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5, CGY 6, CGY 7<br />
<b>Year 2026: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5, CGY 6, CGY 7<br />
</div>
<h1 class="TeamProspects_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 19</h3>
Alexei Lipanov(Y:2017-O:45), Allan McShane(Y:2018-O:83), Benjamin Zloty(Y:2020-O:164), Benoit-Olivier Groulx(Y:2018-O:56), Brendan Brisson(Y:2020-O:23), Cedric Pare(Y:2017-O:107), Gabriel Fortier(Y:2018-O:74), Ian Moore(Y:2020-O:142), Ian Scott(Y:2017-O:124), Jan Mysak(Y:2020-O:31), Luka Burzan(Y:2019-O:83), Mads Sogaard(Y:2019-O:43), Nicolas Meloche(Y:2015-O:42), Olle Eriksson-Ek(Y:2017-O:149), Sasha Chmelevski(Y:2017-O:103), Simon Robertsson(Y:2021-O:13), Thomas Schemitsch(Y:2015-O:86), William Strömgren(Y:2021-O:34), Yaroslav Alexeyev(Y:2017-O:127)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>OTT 1, ANH 2, NJD 2, DET 2, DAL 2, CLB 3, DET 4, DAL 4, CAR 5, CAR 6, CAR 7<br />
<b>Year 2023: </b>CAR 1, CAR 2, STL 2, VEG 2, CAR 3, CAR 6, CAR 7<br />
<b>Year 2024: </b>CAR 1, CAR 2, SEA 2, CAR 3, OTT 3, VEG 3, SEA 3, CAR 4, PHI 5, CAR 6, CAR 7<br />
<b>Year 2025: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5, CAR 6, CAR 7<br />
<b>Year 2026: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5, CAR 6, CAR 7<br />
</div>
<h1 class="TeamProspects_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 15</h3>
Alexander Khovanov(Y:2018-O:140), Aliaksei Protas(Y:2019-O:125), Andrei Svetlakov(Y:2017-O:158), Blade Jenkins(Y:2018-O:123), Bowen Byram(Y:2019-O:8), Cameron Whynot(Y:2021-O:74), Danil Gushchin(Y:2020-O:66), Dylan Holloway(Y:2020-O:16), Helge Grans(Y:2020-O:48), Jakob Pelletier(Y:2019-O:23), Kale Howarth(Y:2017-O:95), Matthew Beniers(Y:2021-O:2), Noel Hoefenmayer(Y:2017-O:112), Prokhor Poltapov(Y:2021-O:68), Zack Ostapchuk(Y:2021-O:101)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>ARZ 2, CHI 3, CHI 5, CHI 6, CHI 7<br />
<b>Year 2023: </b>CHI 1, CHI 2, CHI 3, CHI 4, CGY 5, CHI 5, CHI 6, CHI 7<br />
<b>Year 2024: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, CHI 7<br />
<b>Year 2025: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, CHI 7<br />
<b>Year 2026: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, CHI 7<br />
</div>
<h1 class="TeamProspects_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 10</h3>
Arsen Khisamutdinov(Y:2019-O:143), Ilya Safonov(Y:2021-O:159), Ivan Morozov(Y:2018-O:75), Jesper Sellgren(Y:2019-O:146), Mikisiw Awashish(Y:2020-O:155), Mitchell Gibson(Y:2018-O:118), Noah Meier(Y:2021-O:164), Oskar Back(Y:2018-O:85), Samuel Poulin(Y:2019-O:17), Xavier Bernard(Y:2018-O:93)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>COL 1, COL 5, COL 6, COL 7<br />
<b>Year 2023: </b>COL 1, COL 2, NJD 5, COL 6, COL 7<br />
<b>Year 2024: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
<b>Year 2025: </b>COL 1, COL 2, COL 3, COL 4, COL 6, COL 7<br />
<b>Year 2026: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
</div>
<h1 class="TeamProspects_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 11</h3>
Calle Clang(Y:2020-O:96), Dmitri Kostenko(Y:2021-O:108), Jack Bar(Y:2021-O:100), James Malatesta(Y:2021-O:120), Josh Doan(Y:2021-O:106), Justin Robidas(Y:2021-O:67), Kirill Kirsanov(Y:2021-O:61), Lorenzo Canonica(Y:2021-O:155), Mavrik Bourque(Y:2020-O:21), Nolan Allan(Y:2021-O:103), Victor Stjernborg(Y:2021-O:94)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>CAR 2, MIN 2, VAN 2, SEA 2, CLB 6<br />
<b>Year 2023: </b>CLB 1, NYI 2, CLB 2, MIN 3, CLB 4, ARZ 4, CLB 5, CLB 6, CLB 7<br />
<b>Year 2024: </b>CLB 1, CLB 2, CLB 3, VEG 4, CLB 4, CLB 6, CLB 7<br />
<b>Year 2025: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 6, CLB 7<br />
<b>Year 2026: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5, CLB 6, CLB 7<br />
</div>
<h1 class="TeamProspects_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 23</h3>
Artyom Grushnikov(Y:2021-O:80), Bogdan Trineyev(Y:2020-O:93), Brent Johnson(Y:2021-O:59), Carson Lambos(Y:2021-O:19), Chad Krys(Y:2016-O:64), Dillon Hamaliuk(Y:2019-O:88), Ethan Bowen(Y:2020-O:81), Givani Smith*(Y:2016-O:73), Henry Thrun(Y:2019-O:103), Hugo Alnefelt(Y:2019-O:89), Isac Lundestrom*(Y:2018-O:27), Jesper Wallstedt(Y:2021-O:8), Joel Hofer(Y:2018-O:113), Mikhail Abramov(Y:2020-O:139), Oliver Suni(Y:2020-O:82), Oskar Olausson(Y:2021-O:40), Pavel Novak(Y:2020-O:71), Quinn Olson(Y:2019-O:135), Samuel Helenius(Y:2021-O:56), Santeri Virtanen(Y:2017-O:85), Simon Edvinsson(Y:2021-O:7), Wyatt Kaiser(Y:2020-O:90), Zach Dean(Y:2021-O:51)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>DAL 1, MTL 4, DAL 6, NYI 6, DAL 7<br />
<b>Year 2023: </b>DAL 1, DAL 2, DAL 3, DAL 5, DAL 6, DAL 7<br />
<b>Year 2024: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5, DAL 6, DAL 7<br />
<b>Year 2025: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5, DAL 6, DAL 7<br />
<b>Year 2026: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5, DAL 6, DAL 7<br />
</div>
<h1 class="TeamProspects_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 6</h3>
Alexei Krasikov(Y:2018-O:130), Brady Lyle(Y:2021-O:107), Hendrix Lapierre(Y:2020-O:14), Jean-Luc Foudy(Y:2020-O:35), Jonathan Kovacevic(Y:2017-O:91), William Eklund(Y:2021-O:4)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>DET 1, NJD 1, FLA 2, OTT 3, SEA 4, DET 5, ARZ 5, DET 6, DET 7<br />
<b>Year 2023: </b>DET 1, DET 2, PHI 2, DET 3, DET 4, DET 5, DET 6, DET 7<br />
<b>Year 2024: </b>DET 1, DET 2, DET 3, DET 4, DET 5, DET 6, DET 7<br />
<b>Year 2025: </b>DET 1, DET 2, DET 3, DET 4, DET 5, DET 6, DET 7<br />
<b>Year 2026: </b>DET 1, DET 2, DET 3, DET 4, DET 5, DET 6, DET 7<br />
</div>
<h1 class="TeamProspects_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 23</h3>
Aatu Räty(Y:2021-O:15), Adam Beckman(Y:2019-O:86), Aidan Campbell(Y:2020-O:136), Albert Sjöberg(Y:2021-O:150), Donovan Sebrango(Y:2020-O:116), Eemil Viro(Y:2020-O:103), Ilya Nikolayev(Y:2019-O:73), Jack McBain(Y:2018-O:67), Jordan Cederholm(Y:2016-O:97), Keaton Middleton(Y:2016-O:110), Liam Dower Nilsson(Y:2021-O:117), Luke Tuch(Y:2020-O:79), Marc Del Gaizo(Y:2019-O:119), Marco Rossi(Y:2020-O:5), Markus Phillips(Y:2017-O:106), Marshall Warren(Y:2019-O:69), Martin Chromiak(Y:2020-O:37), Michal Teply(Y:2019-O:91), Milos Roman(Y:2018-O:133), Paul Cotter(Y:2018-O:101), Ridly Greig(Y:2020-O:36), Tarmo Reunanen(Y:2016-O:144), William Wallinder(Y:2020-O:34)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, EDM 7<br />
<b>Year 2023: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, EDM 7<br />
<b>Year 2024: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, EDM 7<br />
<b>Year 2025: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, EDM 7<br />
<b>Year 2026: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, EDM 7<br />
</div>
<h1 class="TeamProspects_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 18</h3>
Anton Lundell(Y:2020-O:9), Cam York(Y:2019-O:9), Carter Savoie(Y:2020-O:28), Jacob Perreault(Y:2020-O:24), Jonathan Gruden(Y:2018-O:80), K'Andre Miller(Y:2018-O:24), Liam Gilmartin(Y:2021-O:128), Linus Karlsson(Y:2018-O:87), Lukas Elvenes(Y:2017-O:125), Luke Mittelstadt(Y:2021-O:161), Marcus Westfalt(Y:2018-O:139), Matthew Robertson(Y:2019-O:27), Michael Benning(Y:2020-O:42), Nikita Alexandrov(Y:2019-O:54), Ryan Johnson(Y:2019-O:36), Ryan O'Rourke(Y:2020-O:19), Thomas Milic(Y:2021-O:87), Will Cranley(Y:2020-O:160)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>NSH 1, FLA 1, BOS 1, QUE 2, FLA 3, WPG 3, FLA 4, FLA 5, FLA 6, FLA 7<br />
<b>Year 2023: </b>BOS 1, FLA 2, BOS 2, FLA 3, MTL 4, FLA 4, FLA 5, FLA 6, FLA 7<br />
<b>Year 2024: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5, FLA 6, FLA 7<br />
<b>Year 2025: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5, FLA 6, FLA 7<br />
<b>Year 2026: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5, FLA 6, FLA 7<br />
</div>
<h1 class="TeamProspects_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 20</h3>
Alexander Kisakov(Y:2021-O:31), Arthur Kaliyev(Y:2019-O:11), Christopher Paquette(Y:2016-O:135), Cross Hanas(Y:2020-O:124), Daniel Torgersson(Y:2020-O:91), Demetrios Koumontzis(Y:2018-O:138), Drake Rymsha(Y:2017-O:99), Eemeli Rasanen(Y:2017-O:63), Garrett Pilon(Y:2016-O:80), Joey Keane(Y:2018-O:116), Liam Hawel(Y:2017-O:139), Martin Pospisil(Y:2018-O:126), Max Gildon(Y:2017-O:74), Mike Robinson(Y:2015-O:144), Nicolas Beaudin(Y:2018-O:36), Noah Cates(Y:2017-O:155), Ryan Shea(Y:2015-O:146), Samu Salminen(Y:2021-O:64), Scott Reedy(Y:2017-O:143), Sergei Zborovsky(Y:2015-O:103)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>LOS 1, CLB 2, LOS 2, LOS 3, LOS 4, OTT 5, LOS 5, LOS 6, LOS 7<br />
<b>Year 2023: </b>LOS 1, LOS 2, LOS 3, NSH 4, STL 4, LOS 4, LOS 5, LOS 6, LOS 7<br />
<b>Year 2024: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5, LOS 6, LOS 7<br />
<b>Year 2025: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5, LOS 6, LOS 7<br />
<b>Year 2026: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5, LOS 6, LOS 7<br />
</div>
<h1 class="TeamProspects_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 12</h3>
Brennan Othmann(Y:2021-O:30), Brett Leason(Y:2019-O:40), Eric Alarie(Y:2021-O:97), Jake Leschyshyn(Y:2017-O:86), Jordan Harris, Kasper Bjorkqvist(Y:2016-O:105), Lucas Raymond(Y:2020-O:7), Marcus Kallionkieli(Y:2019-O:148), Reece Newkirk(Y:2019-O:153), Samuel Hlavaj(Y:2020-O:113), Thomas Harley(Y:2019-O:25), Tim Soderlund(Y:2017-O:148)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>MIN 1, MIN 4, ARZ 4, CHI 4, MIN 6, CLB 7, MIN 7<br />
<b>Year 2023: </b>MIN 1, QUE 4, COL 4, MIN 5, MIN 6, MIN 7<br />
<b>Year 2024: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6, MIN 7<br />
<b>Year 2025: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6, MIN 7<br />
<b>Year 2026: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6, MIN 7<br />
</div>
<h1 class="TeamProspects_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Artyom Galimov(Y:2020-O:58), Ayrton Martino(Y:2021-O:45), Brett Berard(Y:2020-O:97), Cole Caufield(Y:2019-O:5), Corson Ceulemans(Y:2021-O:29), Danila Klimovich(Y:2021-O:52), Devon Levi(Y:2020-O:114), Elliot Desnoyers(Y:2021-O:89), Elmer Söderblom(Y:2021-O:71), Ethan Del Mastro(Y:2021-O:123), Florian Elias(Y:2021-O:167), Isaak Phillips(Y:2021-O:149), Jack Dugan(Y:2017-O:108), Jackson Blake(Y:2021-O:130), Jayden Struble(Y:2019-O:55), Joshua Roy(Y:2021-O:81), Judd Caulfield(Y:2019-O:144), Logan Stankoven(Y:2021-O:27), Martin Rysavy(Y:2021-O:137), Mason Lohrei(Y:2021-O:104), Matej Chalupa(Y:2020-O:94), Matthew Coronato(Y:2021-O:17), Mikey Anderson(Y:2017-O:105), Peter Reynolds(Y:2021-O:115), Quinton Byfield(Y:2020-O:2), Ryan St. Louis(Y:2021-O:134), Thomas Bordeleau(Y:2020-O:30), Topi Niemela(Y:2020-O:61), Vladislav Firstov(Y:2019-O:53), Zakhar Bardakov(Y:2021-O:156)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>MTL 1, CLB 1, OTT 2, SEA 5, MTL 6, MTL 7, BOS 7<br />
<b>Year 2023: </b>MTL 2, BUF 2, MTL 3, SEA 4, SEA 5, MTL 5, PIT 5, WPG 5, MTL 6, MTL 7<br />
<b>Year 2024: </b>MTL 1, MTL 2, STL 2, MTL 3, MTL 4, CAR 5, MTL 6, MTL 7<br />
<b>Year 2025: </b>MTL 1, MTL 2, MTL 3, STL 3, MTL 4, MTL 5, COL 5, MTL 6, MTL 7<br />
<b>Year 2026: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5, MTL 6, MTL 7<br />
</div>
<h1 class="TeamProspects_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 24</h3>
Alexei Toropchenko(Y:2017-O:123), Ben Jones(Y:2017-O:144), Bobby Brink(Y:2019-O:31), Conner Roulette(Y:2021-O:69), Connor McMichael(Y:2019-O:34), David Farrance(Y:2017-O:130), Emil Heineman(Y:2020-O:115), Ethan Phillips(Y:2019-O:158), Evan Vierling(Y:2020-O:141), Gavin Hain(Y:2018-O:144), Jan Drozg(Y:2017-O:126), Jared McIsaac(Y:2018-O:51), Jérémie Poirier(Y:2020-O:45), Jesper Eliasson(Y:2018-O:147), Louis Crevier(Y:2020-O:137), Oliver Kapanen(Y:2021-O:73), Seth Barton(Y:2018-O:86), Simon Holmström(Y:2019-O:29), Tyler Kleven(Y:2020-O:63), Tyler Madden(Y:2018-O:100), Tyler Tullio(Y:2020-O:108), Urho Vaakanainen(Y:2017-O:21), Zac Jones(Y:2019-O:64), Zayde Wisdom(Y:2020-O:122)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>NSH 3, NSH 5, TBL 5, NSH 6, NSH 7<br />
<b>Year 2023: </b>NSH 1, NSH 2, NSH 3, NSH 5, NSH 6, NSH 7<br />
<b>Year 2024: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
<b>Year 2025: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
<b>Year 2026: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
</div>
<h1 class="TeamProspects_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 19</h3>
Cameron Crotty(Y:2017-O:142), Charle Truchon(Y:2021-O:163), Clayton Phillips(Y:2017-O:77), Curtis Hall(Y:2018-O:125), Daniil Misyul(Y:2019-O:128), David Hrenak(Y:2018-O:135), Fabian Zetterlund(Y:2017-O:68), Gage Goncalves(Y:2020-O:119), Gianni Fairbrother(Y:2019-O:142), Jack Badini(Y:2017-O:109), Jake Schmaltz(Y:2019-O:93), Joona Koppanen(Y:2016-O:72), Manix Landry(Y:2021-O:143), Mitchell Miller(Y:2020-O:133), Nicolas Abruzzese(Y:2019-O:99), Riley Stotts(Y:2018-O:78), Riley Sutter(Y:2018-O:84), Xavier Simoneau(Y:2019-O:149), Zachary Gallant(Y:2017-O:104)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>SEA 3, NJD 6, NJD 7<br />
<b>Year 2023: </b>NJD 1, PIT 2, NJD 2, NJD 3, NJD 4, NJD 6, NJD 7<br />
<b>Year 2024: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6, NJD 7<br />
<b>Year 2025: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6, NJD 7<br />
<b>Year 2026: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6, NJD 7<br />
</div>
<h1 class="TeamProspects_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 25</h3>
Alexis Lafrenière(Y:2020-O:1), Andong Song(Y:2015-O:107), Cade Webber(Y:2019-O:100), Dmitri Semykin(Y:2018-O:145), Domenick Fensore(Y:2019-O:129), Grant Mismash(Y:2017-O:66), Jachym Kondelik(Y:2018-O:112), Jake Neighbours(Y:2020-O:50), Jan Bednar(Y:2020-O:76), Jasper Weatherby(Y:2018-O:109), Jonas Rondbjerg(Y:2017-O:75), Josh Lopina(Y:2021-O:131), Kasper Kotkansalo(Y:2017-O:96), Lucas Ciona(Y:2021-O:132), Mattias Norlinder(Y:2019-O:116), Olivier Rodrigue(Y:2018-O:49), Patrick Guzzo(Y:2020-O:117), Peyton Krebs(Y:2019-O:13), Samuel Houde(Y:2018-O:117), Shawn Boudrias(Y:2018-O:108), Thimo Nickl(Y:2020-O:89), Tristan Langan(Y:2019-O:112), Vili Saarijarvi(Y:2015-O:106), Xavier Bouchard(Y:2018-O:146), Yegor Spiridonov(Y:2019-O:115)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>ANH 1, NYI 7<br />
<b>Year 2023: </b>NYR 2, CLB 3, NYI 3, NYI 5, NYI 6, NYI 7<br />
<b>Year 2024: </b>NYI 1, NYI 2, NYI 3, NYI 4, SEA 5, NYI 5, NYI 6, NYI 7<br />
<b>Year 2025: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5, NYI 6, NYI 7<br />
<b>Year 2026: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5, NYI 6, NYI 7<br />
</div>
<h1 class="TeamProspects_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 28</h3>
Albin Grewe(Y:2019-O:84), Alex Formenton(Y:2017-O:31), Andrei Altybarmakyan(Y:2017-O:88), Anton Johannesson(Y:2020-O:75), Anton Karlsson(Y:2014-O:76), Conor Timmins(Y:2017-O:50), Drew Commesso(Y:2020-O:64), Drew Helleson(Y:2019-O:63), Eamon Powell(Y:2020-O:125), Evan Bouchard(Y:2018-O:9), Jacob Bernard-Docker(Y:2018-O:45), John-Jason Peterka(Y:2020-O:33), Lauri Pajuniemi(Y:2018-O:128), Lukas Reichel(Y:2020-O:29), Nathan Noel(Y:2015-O:109), Nico Daws(Y:2020-O:95), Nico Gross(Y:2018-O:127), Olen Zellweger(Y:2021-O:44), Pascal Laberge(Y:2016-O:39), Pierre-Olivier Joseph(Y:2017-O:34), Samuel Johannesson(Y:2020-O:161), Scott Perunovich(Y:2018-O:62), Sebastian Cossa(Y:2021-O:26), Shai Buium(Y:2021-O:50), Slava Demin(Y:2018-O:120), Stuart Skinner(Y:2017-O:97), Tristen Robins(Y:2020-O:126), Tyce Thompson(Y:2019-O:104)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>NYR 1, BUF 1, CHI 1, NYR 2, VEG 2, NYR 4, NYR 5, NYR 6, NYR 7<br />
<b>Year 2023: </b>NYR 1, SJS 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
<b>Year 2024: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
<b>Year 2025: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
<b>Year 2026: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
</div>
<h1 class="TeamProspects_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 13</h3>
Alex Cotton(Y:2020-O:65), Alex Geci(Y:2021-O:102), Cam Dineen(Y:2016-O:90), Connor McClennon(Y:2020-O:98), Jake Sanderson(Y:2020-O:10), Jamie Drysdale(Y:2020-O:8), Logan Mailloux(Y:2021-O:79), Maxim Groshev(Y:2020-O:84), Mikko Kokkonen(Y:2019-O:87), Riley Kidney(Y:2021-O:95), Roman Schmidt(Y:2021-O:76), Ty Smilanic(Y:2020-O:60), Yevgeni Kashnikov(Y:2021-O:96)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>CGY 4, COL 4, ANH 4, PHI 4, NJD 5, OTT 6, OTT 7<br />
<b>Year 2023: </b>OTT 2, SJS 4, OTT 4, OTT 6, OTT 7<br />
<b>Year 2024: </b>OTT 1, OTT 2, STL 3, OTT 4, OTT 5, OTT 6, OTT 7<br />
<b>Year 2025: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5, OTT 6, OTT 7<br />
<b>Year 2026: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5, OTT 6, OTT 7<br />
</div>
<h1 class="TeamProspects_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 12</h3>
Alexander Holtz(Y:2020-O:4), Dylan Garand(Y:2020-O:145), Fredrik Karlström*(Y:2016-O:76), Jacob Peterson, Jeremy Swayman(Y:2020-O:132), Justus Annunen(Y:2018-O:90), Nikita Popugaev*(Y:2017-O:110), Reilly Walsh(Y:2017-O:115), Ryan Mast(Y:2021-O:160), Sasha Teleguine(Y:2021-O:119), Seth Jarvis(Y:2020-O:13), Taylor Gauthier(Y:2020-O:149)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>ARZ 1, PHI 5, PHI 6, PHI 7<br />
<b>Year 2023: </b>PHI 1, PHI 4, PHI 5, PHI 6, PHI 7<br />
<b>Year 2024: </b>PHI 1, PHI 2, SEA 4, PHI 4, PHI 6, PHI 7<br />
<b>Year 2025: </b>PHI 1, PHI 2, PHI 3, PHI 4, PHI 5, PHI 6, PHI 7<br />
<b>Year 2026: </b>PHI 1, PHI 2, PHI 3, PHI 4, PHI 5, PHI 6, PHI 7<br />
</div>
<h1 class="TeamProspects_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 17</h3>
Alex Limoges(Y:2021-O:162), Alex Vlasic(Y:2019-O:39), Arvid Söderblom(Y:2021-O:166), Blake Hillman(Y:2018-O:114), Daniil Chayka(Y:2021-O:47), Denis Smirnov(Y:2017-O:117), Drew O'Connor(Y:2020-O:159), Dylan Duke(Y:2021-O:58), Dylan Guenther(Y:2021-O:6), Fyodor Svechkov(Y:2021-O:20), Jack Rathbone(Y:2017-O:137), Mathias Laferrière(Y:2020-O:148), Matvei Petrov(Y:2021-O:116), Nick Henry(Y:2017-O:122), Ryan Mantha(Y:2014-O:115), Sasha Pastujov(Y:2021-O:28), Ville Koivunen(Y:2021-O:55)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>PIT 1, VAN 1, BOS 3, WSH 4, QUE 5, PIT 6<br />
<b>Year 2023: </b>PIT 1, VAN 2, PIT 3, VEG 4, SJS 5, PIT 7<br />
<b>Year 2024: </b>PIT 1, PIT 2, PIT 4, PIT 5, PIT 6, PIT 7<br />
<b>Year 2025: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5, PIT 6, PIT 7<br />
<b>Year 2026: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5, PIT 6, PIT 7<br />
</div>
<h1 class="TeamProspects_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 24</h3>
Akil Thomas(Y:2018-O:21), Benjamin Gaudreau(Y:2021-O:77), Chase Stillman(Y:2021-O:60), Connor Kurth(Y:2021-O:118), Connor Zary(Y:2020-O:17), Dovar Tinling(Y:2021-O:114), Eeli Tolvanen(Y:2017-O:13), Egor Afanasyev(Y:2019-O:42), Francesco Pinelli(Y:2021-O:14), Jack Peart(Y:2021-O:70), Jackson Perbix(Y:2018-O:122), James Hardie(Y:2020-O:130), Josh Brook(Y:2017-O:83), Luke Hughes(Y:2021-O:5), Matthew Boldy(Y:2019-O:15), Matthew Samoskevich(Y:2021-O:42), Maxim Cajkovic(Y:2019-O:82), Ronnie Attard(Y:2019-O:134), Ryan Ufko(Y:2021-O:92), Samuel Bolduc(Y:2019-O:57), Sean Behrens(Y:2021-O:33), Stephen Halliday(Y:2020-O:156), Tristan Lennox(Y:2021-O:65), Ty Voit(Y:2021-O:142)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>QUE 3, MIN 3, QUE 4, NJD 4, TBL 4, NSH 4, TOR 4, QUE 6, QUE 7<br />
<b>Year 2023: </b>QUE 1, QUE 2, MIN 2, QUE 3, BOS 3, MIN 4, QUE 5, BUF 5, QUE 6, QUE 7, VEG 7<br />
<b>Year 2024: </b>QUE 1, QUE 2, QUE 3, ARZ 4, QUE 5, QUE 6, VEG 6, QUE 7<br />
<b>Year 2025: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5, QUE 6, QUE 7<br />
<b>Year 2026: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5, QUE 6, QUE 7<br />
</div>
<h1 class="TeamProspects_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 2</h3>
Adrian Valigura(Y:2020-O:112), Patrik Hamrla(Y:2021-O:125)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>NYI 1, SJS 1, CAR 1, STL 3, SJS 4, SJS 6, SJS 7<br />
<b>Year 2023: </b>OTT 1, NYI 1, SJS 1, SEA 1, SJS 3, SJS 6, SJS 7<br />
<b>Year 2024: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6, SJS 7<br />
<b>Year 2025: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6, SJS 7<br />
<b>Year 2026: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6, SJS 7<br />
</div>
<h1 class="TeamProspects_SEA"><a id="SeattleKraken">Seattle Kraken</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Kraken Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#SeattleKraken">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#SeattleKraken">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#SeattleKraken">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#SeattleKraken">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#SeattleKraken">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#SeattleKraken">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#SeattleKraken">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#SeattleKraken">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#SeattleKraken">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#SeattleKraken">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#SeattleKraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleKraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleKraken" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 19</h3>
Alexander Gordin(Y:2020-O:105), Anthony Salinitri(Y:2016-O:141), Arnaud Durandeau(Y:2017-O:152), Dante Salituro(Y:2016-O:154), Erik Portillo(Y:2019-O:68), Ethan Keppen(Y:2019-O:59), Hardy Haman-Aktell(Y:2016-O:142), Hunter Jones(Y:2019-O:62), Jake Chiasson(Y:2021-O:111), Jayden Grubbe(Y:2021-O:112), John St. Ivany(Y:2018-O:107), Kevin Mandolese(Y:2018-O:152), Nathan Smith(Y:2018-O:131), Niko Huuhtanen(Y:2021-O:129), Ryan Suzuki(Y:2019-O:26), Sean Tschigerl(Y:2021-O:110), Tyler Kelleher(Y:2016-O:143), Vladimir Bakanin(Y:2019-O:165), Xavier Parent(Y:2019-O:155)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>SEA 1, NYI 4, VAN 4, PIT 5, MIN 5, SEA 6, SEA 7<br />
<b>Year 2023: </b>COL 5, VEG 5, CAR 5, SEA 6, SEA 7<br />
<b>Year 2024: </b>SEA 1, SEA 6, SEA 7<br />
<b>Year 2025: </b>SEA 1, SEA 2, SEA 3, SEA 4, SEA 6, SEA 7<br />
<b>Year 2026: </b>SEA 1, SEA 2, SEA 3, SEA 4, SEA 5, SEA 6, SEA 7<br />
</div>
<h1 class="TeamProspects_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Adam Scheel(Y:2021-O:136), Aidan Hreschuk(Y:2021-O:82), Akito Hirose(Y:2021-O:139), Avery Hayes(Y:2021-O:140), Blake Murray(Y:2019-O:157), Bulat Shafigullin(Y:2018-O:79), Dmitry Voronkov(Y:2020-O:99), Eetu Liukas(Y:2021-O:66), Filip Larsson(Y:2019-O:147), Hugo Gabrielson(Y:2021-O:90), Ilya Nazarov(Y:2021-O:158), Jack Glover(Y:2014-O:63), Jacob Dion(Y:2020-O:128), Jordan Kawaguchi(Y:2021-O:43), Kirill Gerasimyuk(Y:2021-O:84), Lucas Forsell(Y:2021-O:145), Marc McLaughlin(Y:2021-O:133), Matt Kiersted(Y:2021-O:39), Matthew Gleason(Y:2021-O:75), Matthew Knies(Y:2021-O:23), Odeen Tufto(Y:2021-O:41), Patrick Harper(Y:2016-O:112), Ryder Korczak(Y:2021-O:48), Ty Ronning(Y:2016-O:139), Victor Söderström(Y:2019-O:22), Vincent Iorio(Y:2021-O:91), Xavier Bourgault(Y:2021-O:38), Yegor Zamula(Y:2020-O:92), Zachary Bolduc(Y:2021-O:25), Zachary L'Heureux(Y:2021-O:24)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>WPG 5, STL 6, STL 7<br />
<b>Year 2023: </b>CAR 4, STL 5, STL 6, STL 7<br />
<b>Year 2024: </b>STL 1, STL 4, STL 5, VEG 5, MTL 5, STL 6, STL 7<br />
<b>Year 2025: </b>STL 1, STL 2, STL 4, STL 5, STL 6, STL 7<br />
<b>Year 2026: </b>STL 1, STL 2, STL 3, STL 4, STL 5, STL 6, STL 7<br />
</div>
<h1 class="TeamProspects_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 19</h3>
Alex Green(Y:2018-O:155), Alexei Polodyan(Y:2018-O:159), Antonio Stranges(Y:2020-O:85), Chaz Lucius(Y:2021-O:12), Cole Fonstad(Y:2018-O:97), David Noel(Y:2017-O:134), Dylan Samberg(Y:2017-O:61), Isak Rosén(Y:2021-O:35), Jakub Skarek(Y:2018-O:82), John Beecher(Y:2019-O:19), Jonatan Berggren(Y:2018-O:28), Logan Hutsko(Y:2018-O:81), Lukas Cormier(Y:2020-O:43), Luke Evangelista(Y:2020-O:47), Luke Martin(Y:2017-O:70), Marat Khusnutdinov(Y:2020-O:41), Matvei Guskov(Y:2019-O:131), Nikita Chibrikov(Y:2021-O:22), Ruslan Iskhakov(Y:2018-O:59)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>TBL 1, WPG 1, TBL 2, PIT 3, ARZ 3, NYI 3, TBL 6, TBL 7<br />
<b>Year 2023: </b>TBL 1, FLA 1, TBL 2, SEA 2, TBL 3, VEG 3, PHI 3, TBL 4, NYI 4, TBL 6, TBL 7<br />
<b>Year 2024: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5, TBL 6, TBL 7<br />
<b>Year 2025: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5, TBL 6, TBL 7<br />
<b>Year 2026: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5, TBL 6, TBL 7<br />
</div>
<h1 class="TeamProspects_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 23</h3>
Aku Raty(Y:2019-O:121), Antti Saarela(Y:2019-O:78), Antti Tuomisto(Y:2019-O:48), Anttoni Honka(Y:2019-O:74), Axel Rindell(Y:2021-O:168), Colten Ellis(Y:2019-O:138), Eetu Makiniemi(Y:2017-O:128), Eetu Pakkila(Y:2019-O:109), Jesse Ylonen*(Y:2018-O:31), Jett Woo(Y:2018-O:44), Joni Ikonen(Y:2017-O:48), Kasper Simontaival(Y:2020-O:51), Kristian Vesalainen(Y:2017-O:30), Lenni Killinen(Y:2018-O:103), Miska Kukkonen(Y:2018-O:121), Niklas Nordgren(Y:2018-O:73), Patrick Puistola(Y:2019-O:41), Rasmus Kupari(Y:2018-O:18), Robin Salo*(Y:2017-O:55), Roni Hirvonen(Y:2020-O:40), Sampo Ranta(Y:2018-O:76), Samu Tuomaala(Y:2021-O:21), Ville Heinola(Y:2019-O:21)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>TOR 1, TOR 5, TOR 6, TOR 7<br />
<b>Year 2023: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
<b>Year 2024: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
<b>Year 2025: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
<b>Year 2026: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
</div>
<h1 class="TeamProspects_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 13</h3>
Angus Crookshank(Y:2018-O:129), Cole Huckins(Y:2021-O:57), Connor Hall(Y:2016-O:94), Dmitri Katelevsky(Y:2021-O:86), Eetu Luostarinen, Evan Cowley(Y:2013-O:126), Fabian Lysell(Y:2021-O:11), Jaromir Pytlik(Y:2020-O:104), Kirill Marchenko(Y:2018-O:48), Logan Morrisson(Y:2020-O:120), Miles Gendron(Y:2014-O:86), Toni Utunen(Y:2018-O:149), Wyatte Wylie(Y:2018-O:137)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>WPG 2, DAL 5, NYI 5, VEG 6, VAN 6, VAN 7<br />
<b>Year 2023: </b>VAN 1, VAN 3, VAN 4, DAL 4, OTT 5, TBL 5, VAN 6, VAN 7<br />
<b>Year 2024: </b>VAN 1, VAN 2, PIT 3, VAN 3, VAN 4, WPG 5, VAN 5, VAN 6, VAN 7<br />
<b>Year 2025: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, VAN 6, VAN 7<br />
<b>Year 2026: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, VAN 6, VAN 7<br />
</div>
<h1 class="TeamProspects_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#VegasGoldenKnights">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 22</h3>
Alexandr Darin(Y:2019-O:145), Brennan Menell(Y:2020-O:107), Cole Jordan(Y:2021-O:109), Cole Sillinger(Y:2021-O:16), Eric Hjorth(Y:2019-O:150), Guillaume Richard(Y:2021-O:147), Henri Nikkanen(Y:2019-O:151), Jack Malone(Y:2019-O:141), Jack Studnicka(Y:2017-O:64), Jake Martin(Y:2021-O:152), John Ludvig(Y:2019-O:139), Kent Johnson(Y:2021-O:10), Kyle Masters(Y:2021-O:151), Mathias Emilio Pettersen(Y:2021-O:153), Matthew Stienburg(Y:2019-O:117), Nikita Okhotyuk(Y:2019-O:106), Pavel Gogolev(Y:2021-O:146), Robert Orr(Y:2021-O:165), Semyon Chystyakov(Y:2019-O:159), Shakir Mukhamadullin(Y:2020-O:67), Trevor Wong(Y:2021-O:105), Vladislav Lukashevich(Y:2021-O:141)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>NJD 3, VEG 7<br />
<b>Year 2023: </b>VEG 1, VEG 6<br />
<b>Year 2024: </b>VEG 1, VEG 2, QUE 4, VEG 7<br />
<b>Year 2025: </b>VEG 1, VEG 2, VEG 3, VEG 4, VEG 5, VEG 6, VEG 7<br />
<b>Year 2026: </b>VEG 1, VEG 2, VEG 3, VEG 4, VEG 5, VEG 6, VEG 7<br />
</div>
<h1 class="TeamProspects_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 24</h3>
Alexander Nikishin(Y:2020-O:111), Alexander Pashin(Y:2020-O:255), Alexander Romanov(Y:2018-O:40), Blake McLaughlin(Y:2018-O:71), Brandt Clarke(Y:2021-O:3), Brayden Tracey(Y:2019-O:24), Cameron MacDonald(Y:2021-O:138), Carl Grundstrom(Y:2016-O:56), Grigori Denisenko(Y:2018-O:19), Iaroslav Askarov(Y:2020-O:12), Jackson Lacombe(Y:2019-O:61), Jaret Anderson-Dolan(Y:2017-O:36), John Farinacci(Y:2019-O:79), Jonny Tychonick(Y:2018-O:54), Justin Barron(Y:2020-O:22), Kevin Bahl(Y:2018-O:57), Kirill Slepets(Y:2019-O:105), Philip Broberg(Y:2019-O:18), Robert Mastrosimone(Y:2019-O:51), Roby Jarventie(Y:2020-O:78), Sean Farrell(Y:2020-O:68), Theo Rochette(Y:2020-O:88), Vasili Podkolzin(Y:2019-O:3), Vasiliy Ponomarev(Y:2020-O:46)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>WSH 1, PHI 1, NSH 2, WSH 2, SJS 2, CHI 2, TOR 2, COL 2, PIT 2, WSH 3, CAR 3, PHI 3, OTT 4, WSH 5, SJS 5, WSH 6, WSH 7<br />
<b>Year 2023: </b>WSH 1, WSH 2, WSH 3, OTT 3, WSH 4, WSH 5, WSH 6, WSH 7<br />
<b>Year 2024: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5, WSH 6, WSH 7<br />
<b>Year 2025: </b>WSH 1, WSH 2, WSH 3, WSH 4, SEA 5, WSH 5, CLB 5, WSH 6, WSH 7<br />
<b>Year 2026: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5, WSH 6, WSH 7<br />
</div>
<h1 class="TeamProspects_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 12</h3>
Alex Turcotte(Y:2019-O:4), Carson Bantle(Y:2020-O:118), Ilya Fedotov(Y:2021-O:135), Luke Prokop(Y:2020-O:154), Owen Pederson(Y:2020-O:123), Ryan Francis(Y:2020-O:158), Ryan O'Reilly(Y:2018-O:89), Serron Noel(Y:2018-O:37), Simon Knak(Y:2020-O:134), Tristan Broz(Y:2021-O:78), Viktor Lodin(Y:2019-O:102), William Cuylle(Y:2020-O:101)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>BUF 2, VEG 3, COL 3, WPG 6, WPG 7<br />
<b>Year 2023: </b>WPG 1, WPG 2, WPG 3, WPG 4, VAN 5, WPG 6, WPG 7<br />
<b>Year 2024: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 6, WPG 7<br />
<b>Year 2025: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5, WPG 6, WPG 7<br />
<b>Year 2026: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5, WPG 6, WPG 7<br />
</div>
<?php include "Footer.php";?>
