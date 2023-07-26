<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Team Prospects</title>
<script src="ASHL10.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.3.3 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL10.css" rel="stylesheet" type="text/css" />
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleKraken">Seattle Kraken</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#VegasGoldenKnights">Vegas Golden Knights</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamProspects_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 26</h3>
Cam York(Y:2019-O:9), David Bernhardt(Y:2016-O:151), Dmitri Ovchinnikov(Y:2020-O:74), Dylan Gambrell(Y:2016-O:70), Filip Chytil(Y:2017-O:24), Igor Shvyrev(Y:2017-O:132), Jamieson Rees(Y:2019-O:46), Jansen Harkins(Y:2015-O:23), Jay O'Brien(Y:2018-O:30), Jayden Struble(Y:2019-O:55), Joel Blomqvist(Y:2020-O:87), Jordan Kyrou(Y:2016-O:29), Kirill Ustimenko(Y:2017-O:150), Layton Ahac(Y:2019-O:113), Lias Andersson(Y:2017-O:14), Linus Hogberg(Y:2016-O:152), Matthew Strome(Y:2017-O:65), Michael Spacek(Y:2015-O:75), Nicolas Meloche(Y:2015-O:42), Pavel Dorofeyev(Y:2019-O:60), Peyton Krebs(Y:2019-O:13), Pyotr Kotchekov(Y:2019-O:44), Simon Lundmark(Y:2019-O:77), Thomas Novak(Y:2015-O:56), Timothy Liljegren(Y:2017-O:15), Wade Allison(Y:2016-O:71)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>ANH 1, EDM 3, ANH 3, COL 3, VAN 3, BUF 4, ANH 4, BUF 5, ANH 5, VAN 5<br />
<b>Year 2022: </b>ANH 1, ANH 2, ANH 3, PIT 4, ANH 4, BUF 5, ANH 5, MTL 5<br />
<b>Year 2023: </b>ANH 1, ANH 2, ANH 3, ANH 4, PIT 4, ANH 5<br />
<b>Year 2024: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5<br />
<b>Year 2025: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5<br />
</div>
<h1 class="TeamProspects_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 10</h3>
Adam Ruzicka(Y:2017-O:56), Alec Regula(Y:2018-O:52), Aleksi Heponiemi(Y:2017-O:28), Arturs Silovs(Y:2019-O:132), Erik Brannstrom(Y:2017-O:23), Morgan Geekie(Y:2017-O:62), Ozzy Wiesblatt(Y:2020-O:49), Rodion Amirov(Y:2020-O:25), Sam Steel(Y:2016-O:24), Samuel Fagemo(Y:2019-O:50)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>ARZ 2, VEG 2, VEG 3<br />
<b>Year 2022: </b>ARZ 2, ARZ 3, DET 3, ARZ 5<br />
<b>Year 2023: </b>ARZ 1, ARZ 2, ARZ 3, ARZ 5<br />
<b>Year 2024: </b>ARZ 1, ARZ 2, ARZ 3, ARZ 4, ARZ 5<br />
<b>Year 2025: </b>ARZ 1, ARZ 2, ARZ 3, ARZ 4, ARZ 5<br />
</div>
<h1 class="TeamProspects_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 13</h3>
Alex Vlasic(Y:2019-O:39), Calen Addison(Y:2018-O:38), Graeme Clarke(Y:2019-O:97), Gustav Lindstrom(Y:2017-O:59), Jake Bean(Y:2016-O:20), Jan Mysak(Y:2020-O:31), Justin Sourdif(Y:2020-O:77), Karl Henrikson(Y:2019-O:95), Landon Slaggert(Y:2020-O:143), Michael Benning(Y:2020-O:42), Theodor Niederbach(Y:2020-O:44), Timothy Gettinger(Y:2016-O:123), Tyler Weiss(Y:2018-O:111)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>BOS 1, BOS 2, BOS 4, BOS 5<br />
<b>Year 2022: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5<br />
<b>Year 2023: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5<br />
<b>Year 2024: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5<br />
<b>Year 2025: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5<br />
</div>
<h1 class="TeamProspects_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 13</h3>
Alexander Campbell(Y:2019-O:71), Alexei Lipanov(Y:2017-O:45), Brandon Saigeon(Y:2018-O:153), Cedric Pare(Y:2017-O:107), Eric Comrie(Y:2013-O:52), Jake Neighbours(Y:2020-O:50), Jamie Drysdale(Y:2020-O:8), Jonah Gadjovich(Y:2017-O:60), Sam Colangelo(Y:2020-O:56), Ty Emberson(Y:2018-O:92), Veeti Miettinen(Y:2020-O:121), Yan Kuznetsov(Y:2020-O:57), Yevgeni Oksentyuk(Y:2020-O:129)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>BUF 1, BUF 2, OTT 3, WPG 5<br />
<b>Year 2022: </b>BUF 1, BUF 2, VEG 2, BUF 3, VEG 4, BUF 4<br />
<b>Year 2023: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5<br />
<b>Year 2024: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5<br />
<b>Year 2025: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5<br />
</div>
<h1 class="TeamProspects_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 18</h3>
Barrett Hayton(Y:2018-O:11), Blake Biondi(Y:2020-O:53), Brock Faber(Y:2020-O:86), Daemon Hunt(Y:2020-O:83), Eemeli Rasanen(Y:2017-O:63), Filip Johansson(Y:2018-O:35), Jack Drury(Y:2018-O:32), Jack Finley(Y:2020-O:55), Kody Clark(Y:2018-O:60), Michal Gut(Y:2020-O:106), Nicolas Beaudin(Y:2018-O:36), Oliver Suni(Y:2020-O:82), Ronan Seeley(Y:2020-O:73), Ryder Rolston(Y:2020-O:150), Seth Jarvis(Y:2020-O:13), Simon Kubicek(Y:2020-O:165), Ukko-Pekka Luukkonen(Y:2017-O:57), Yaroslav Alexeyev(Y:2017-O:127)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>CGY 1, CGY 2, FLA 2, PIT 2, SJS 2, CGY 3, DET 3, CLB 4, CGY 4, NJD 4, VAN 4<br />
<b>Year 2022: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5, VAN 5<br />
<b>Year 2023: </b>CGY 1, CGY 2, SEA 3, CGY 3, CGY 4<br />
<b>Year 2024: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5<br />
<b>Year 2025: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5<br />
</div>
<h1 class="TeamProspects_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 2</h3>
Benjamin Zloty(Y:2020-O:164), Ian Moore(Y:2020-O:142)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>CAR 4, CAR 5, SJS 5<br />
<b>Year 2022: </b>CAR 1, CAR 4, CAR 5<br />
<b>Year 2023: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5<br />
<b>Year 2024: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5<br />
<b>Year 2025: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5<br />
</div>
<h1 class="TeamProspects_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 11</h3>
Alexander Khovanov(Y:2018-O:140), Aliaksei Protas(Y:2019-O:125), Andrei Svetlakov(Y:2017-O:158), Blade Jenkins(Y:2018-O:123), Danil Gushchin(Y:2020-O:66), Dylan Holloway(Y:2020-O:16), Helge Grans(Y:2020-O:48), Jakob Pelletier(Y:2019-O:23), Kale Howarth(Y:2017-O:95), Nathan Smith(Y:2018-O:131), Noel Hoefenmayer(Y:2017-O:112)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>CHI 1, CHI 2, CHI 3, TOR 3, TBL 3, CHI 5<br />
<b>Year 2022: </b>CHI 1, CHI 2, CHI 3, CHI 5<br />
<b>Year 2023: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, COL 5<br />
<b>Year 2024: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5<br />
<b>Year 2025: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5<br />
</div>
<h1 class="TeamProspects_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 9</h3>
Hendrix Lapierre(Y:2020-O:14), Ivan Morozov(Y:2018-O:75), Mikisiw Awashish(Y:2020-O:155), Mitchell Gibson(Y:2018-O:118), Oskar Back(Y:2018-O:85), Ryan McLeod(Y:2018-O:23), Samuel Poulin(Y:2019-O:17), Spencer Watson(Y:2014-O:127), Xavier Bernard(Y:2018-O:93)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>COL 1, COL 2, BOS 3<br />
<b>Year 2022: </b>COL 1, COL 2, COL 3, COL 5<br />
<b>Year 2023: </b>COL 1, COL 2, COL 3, COL 4<br />
<b>Year 2024: </b>COL 1, COL 2, COL 3, COL 4, COL 5<br />
<b>Year 2025: </b>COL 1, COL 2, COL 3, COL 4, COL 5<br />
</div>
<h1 class="TeamProspects_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 6</h3>
Ben Mirageas(Y:2017-O:116), Bowen Byram(Y:2019-O:8), Calle Clang(Y:2020-O:96), Jason Robertson(Y:2017-O:32), Mavrik Bourque(Y:2020-O:21), Riley Stillman(Y:2016-O:150)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>CLB 1, CLB 2, CHI 4, TOR 5, CLB 5<br />
<b>Year 2022: </b>CLB 1, CLB 2, VAN 2, SEA 2, CLB 3, CLB 4, CLB 5, VEG 5<br />
<b>Year 2023: </b>CLB 1, CLB 2, CLB 3, CLB 4, ARZ 4, CLB 5<br />
<b>Year 2024: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5<br />
<b>Year 2025: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5<br />
</div>
<h1 class="TeamProspects_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 20</h3>
Anthony Richard(Y:2015-O:85), Bogdan Trineyev(Y:2020-O:93), Chad Krys(Y:2016-O:64), Daniel Audette(Y:2014-O:61), Dillon Hamaliuk(Y:2019-O:88), Ethan Bowen(Y:2020-O:81), Henry Thrun(Y:2019-O:103), Hugo Alnefelt(Y:2019-O:89), Hunter Smith(Y:2014-O:45), Jake Wise(Y:2018-O:47), Joel Hofer(Y:2018-O:113), Kaiden Guhle(Y:2020-O:27), Lane Zablocki(Y:2017-O:118), Martin Fehervary(Y:2018-O:68), Mikhail Abramov(Y:2020-O:139), Pavel Novak(Y:2020-O:71), Quinn Olson(Y:2019-O:135), Santeri Virtanen(Y:2017-O:85), Simon Bourque, Wyatt Kaiser(Y:2020-O:90)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>DAL 1, DAL 2, DAL 3, DAL 4, COL 4<br />
<b>Year 2022: </b>DAL 1, PIT 1, DAL 2, DAL 3, MTL 4, DAL 4<br />
<b>Year 2023: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5<br />
<b>Year 2024: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5<br />
<b>Year 2025: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5<br />
</div>
<h1 class="TeamProspects_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 3</h3>
Alexei Krasikov(Y:2018-O:130), John-Jason Peterka(Y:2020-O:33), Jonathan Kovacevic(Y:2017-O:91)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>DET 1, WPG 1<br />
<b>Year 2022: </b>DET 1, DET 2, DET 4, SEA 4<br />
<b>Year 2023: </b>DET 1, DET 2, DET 3, DET 4, DET 5<br />
<b>Year 2024: </b>DET 1, DET 2, DET 3, DET 4, DET 5<br />
<b>Year 2025: </b>DET 1, DET 2, DET 3, DET 4, DET 5<br />
</div>
<h1 class="TeamProspects_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 24</h3>
Adam Beckman(Y:2019-O:86), Aidan Campbell(Y:2020-O:136), Andrew Peeke(Y:2016-O:44), Donovan Sebrango(Y:2020-O:116), Eemil Viro(Y:2020-O:103), Ilya Nikolayev(Y:2019-O:73), Jack McBain(Y:2018-O:67), Jordan Cederholm(Y:2016-O:97), Keaton Middleton(Y:2016-O:110), Libor Hajek(Y:2016-O:50), Luke Tuch(Y:2020-O:79), Marc Del Gaizo(Y:2019-O:119), Marco Rossi(Y:2020-O:5), Markus Phillips(Y:2017-O:106), Marshall Warren(Y:2019-O:69), Martin Chromiak(Y:2020-O:37), Michal Teply(Y:2019-O:91), Milos Roman(Y:2018-O:133), Paul Cotter(Y:2018-O:101), Philip Tomasino(Y:2019-O:20), Ridly Greig(Y:2020-O:36), Shane Pinto(Y:2019-O:45), Tarmo Reunanen(Y:2016-O:144), Thomas Schemitsch(Y:2015-O:86)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>EDM 1, EDM 2, EDM 4, EDM 5<br />
<b>Year 2022: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5<br />
<b>Year 2023: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5<br />
<b>Year 2024: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5<br />
<b>Year 2025: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5<br />
</div>
<h1 class="TeamProspects_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 18</h3>
Brandon Coe(Y:2020-O:127), Carter Savoie(Y:2020-O:28), Jacob Perreault(Y:2020-O:24), Jean-Luc Foudy(Y:2020-O:35), Jonathan Gruden(Y:2018-O:80), Kirill Maksimov(Y:2017-O:111), Kyle Olson(Y:2017-O:157), Lukas Elvenes(Y:2017-O:125), Marcus Westfalt(Y:2018-O:139), Matej Pekar(Y:2018-O:77), Nikita Alexandrov(Y:2019-O:54), Ryan O'Rourke(Y:2020-O:19), Ryan Poehling(Y:2017-O:17), Samuel Asselin(Y:2019-O:120), Sean Farrell(Y:2020-O:68), Victor Söderström(Y:2019-O:22), Vitali Kravtsov(Y:2018-O:10), Will Cranley(Y:2020-O:160)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>FLA 1, FLA 4, FLA 5<br />
<b>Year 2022: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5<br />
<b>Year 2023: </b>FLA 1, FLA 2, FLA 3, MTL 4, FLA 4, FLA 5<br />
<b>Year 2024: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5<br />
<b>Year 2025: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5<br />
</div>
<h1 class="TeamProspects_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 22</h3>
Arthur Kaliyev(Y:2019-O:11), Boris Katchouk(Y:2016-O:53), Brent Gates(Y:2015-O:101), Christopher Paquette(Y:2016-O:135), Cross Hanas(Y:2020-O:124), Daniel Torgersson(Y:2020-O:91), Demetrios Koumontzis(Y:2018-O:138), Drake Rymsha(Y:2017-O:99), Garrett Pilon(Y:2016-O:80), Ivan Lodnia(Y:2017-O:67), Joey Keane(Y:2018-O:116), Liam Hawel(Y:2017-O:139), Maksim Sushko(Y:2017-O:94), Martin Pospisil(Y:2018-O:126), Max Gildon(Y:2017-O:74), Mike Robinson(Y:2015-O:144), Noah Cates(Y:2017-O:155), Riley Tufte(Y:2016-O:61), Ryan Shea(Y:2015-O:146), Samuel Montembeault(Y:2015-O:74), Scott Reedy(Y:2017-O:143), Sergei Zborovsky(Y:2015-O:103)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>LOS 1, SEA 1, VEG 1, LOS 2, LOS 3, ARZ 3, LOS 4, MTL 4, COL 5, LOS 5<br />
<b>Year 2022: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5<br />
<b>Year 2023: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5<br />
<b>Year 2024: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5<br />
<b>Year 2025: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5<br />
</div>
<h1 class="TeamProspects_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 11</h3>
Brett Leason(Y:2019-O:40), Brycen Martin(Y:2014-O:74), Jack Rathbone(Y:2017-O:137), Jake Leschyshyn(Y:2017-O:86), Jordan Harris, Kasper Bjorkqvist(Y:2016-O:105), Lucas Raymond(Y:2020-O:7), Marcus Kallionkieli(Y:2019-O:148), Reece Newkirk(Y:2019-O:153), Samuel Hlavaj(Y:2020-O:113), Tim Soderlund(Y:2017-O:148)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>MIN 1, MTL 3, MIN 4, TBL 4, ARZ 4, MIN 5<br />
<b>Year 2022: </b>MIN 1, MIN 2, MIN 3, MIN 4, ARZ 4, CHI 4, MIN 5<br />
<b>Year 2023: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5<br />
<b>Year 2024: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5<br />
<b>Year 2025: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5<br />
</div>
<h1 class="TeamProspects_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Akil Thomas(Y:2018-O:21), Alexander Gordin(Y:2020-O:105), Alexander True(Y:2020-O:163), Alexandre Texier(Y:2017-O:52), Arsen Khisamutdinov(Y:2019-O:143), Artyom Galimov(Y:2020-O:58), Artyom Zub(Y:2020-O:72), Brendan Brisson(Y:2020-O:23), Brett Berard(Y:2020-O:97), Cole Caufield(Y:2019-O:5), Devon Levi(Y:2020-O:114), Domenick Fensore(Y:2019-O:129), Egor Sokolov(Y:2020-O:69), Evan Bouchard(Y:2018-O:9), Gabriel Fortier(Y:2018-O:74), Jack Dugan(Y:2017-O:108), Jesper Sellgren(Y:2019-O:146), Judd Caulfield(Y:2019-O:144), Louis Crevier(Y:2020-O:137), Luka Burzan(Y:2019-O:83), Matej Chalupa(Y:2020-O:94), Mattias Norlinder(Y:2019-O:116), Michael Anderson(Y:2017-O:105), Michael Vukojevic(Y:2019-O:96), Morgan Frost(Y:2017-O:29), Oskari Laaksonen(Y:2020-O:100), Quinton Byfield(Y:2020-O:2), Thomas Bordeleau(Y:2020-O:30), Tyler Tucker(Y:2019-O:152), Vladislav Firstov(Y:2019-O:53)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>TOR 2, SEA 2, BUF 3, SEA 4<br />
<b>Year 2022: </b>MTL 1, MTL 2, OTT 2, MTL 3, SJS 3, SEA 5<br />
<b>Year 2023: </b>MTL 1, MTL 2, MTL 3, SEA 5, MTL 5<br />
<b>Year 2024: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5<br />
<b>Year 2025: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5<br />
</div>
<h1 class="TeamProspects_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Alexei Toropchenko(Y:2017-O:123), Anton Lundell(Y:2020-O:9), Ben Jones(Y:2017-O:144), Bobby Brink(Y:2019-O:31), Connor McMichael(Y:2019-O:34), Conor Timmins(Y:2017-O:50), David Farrance(Y:2017-O:130), Drake Batherson(Y:2017-O:92), Eamon Powell(Y:2020-O:125), Emil Heineman(Y:2020-O:115), Ethan Phillips(Y:2019-O:158), Evan Vierling(Y:2020-O:141), Gavin Hain(Y:2018-O:144), Grigori Denisenko(Y:2018-O:19), Jack Quinn(Y:2020-O:11), Jan Drozg(Y:2017-O:126), Jared McIsaac(Y:2018-O:51), Jaret Anderson-Dolan(Y:2017-O:36), Jérémie Poirier(Y:2020-O:45), Jesper Eliasson(Y:2018-O:147), Kristian Vesalainen(Y:2017-O:30), Ryan Johnson(Y:2019-O:36), Seth Barton(Y:2018-O:86), Simon Holmström(Y:2019-O:29), Tyler Kleven(Y:2020-O:63), Tyler Madden(Y:2018-O:100), Tyler Tullio(Y:2020-O:108), Urho Vaakanainen(Y:2017-O:21), Zac Jones(Y:2019-O:64), Zayde Wisdom(Y:2020-O:122)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>NSH 1, NSH 2, ANH 2, NSH 3, NSH 5<br />
<b>Year 2022: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5<br />
<b>Year 2023: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5<br />
<b>Year 2024: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5<br />
<b>Year 2025: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5<br />
</div>
<h1 class="TeamProspects_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 25</h3>
Cameron Clarke(Y:2016-O:85), Cameron Crotty(Y:2017-O:142), Clayton Phillips(Y:2017-O:77), Curtis Hall(Y:2018-O:125), Daniil Misyul(Y:2019-O:128), David Hrenak(Y:2018-O:135), Fabian Zetterlund(Y:2017-O:68), Gage Goncalves(Y:2020-O:119), Gianni Fairbrother(Y:2019-O:142), Ivan Prosvetov(Y:2018-O:132), Jack Badini(Y:2017-O:109), Jacob Middleton(Y:2014-O:160), Jake Schmaltz(Y:2019-O:93), Joona Koppanen(Y:2016-O:72), Mads Sogaard(Y:2019-O:43), Matthew Mistele(Y:2014-O:113), Mitchell Miller(Y:2020-O:133), Nicolas Abruzzese(Y:2019-O:99), Philipp Kurashev(Y:2018-O:96), Riley Stotts(Y:2018-O:78), Riley Sutter(Y:2018-O:84), Simon Benoit(Y:2019-O:133), Viktor Crus-Rydberg(Y:2013-O:128), Xavier Simoneau(Y:2019-O:149), Zachary Gallant(Y:2017-O:104)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>NJD 1, MTL 1, STL 1, NJD 2, SEA 3, PHI 4, NJD 5<br />
<b>Year 2022: </b>NJD 1, NJD 2, NJD 3, SEA 3, TBL 3, NJD 4<br />
<b>Year 2023: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5<br />
<b>Year 2024: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5<br />
<b>Year 2025: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5<br />
</div>
<h1 class="TeamProspects_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 24</h3>
Alexis Lafrenière(Y:2020-O:1), Andong Song(Y:2015-O:107), Benoit-Olivier Groulx(Y:2018-O:56), Cade Webber(Y:2019-O:100), Cole Perfetti(Y:2020-O:6), Dmitri Semykin(Y:2018-O:145), Dylan Peterson(Y:2020-O:80), Grant Mismash(Y:2017-O:66), Jachym Kondelik(Y:2018-O:112), Jacob Bernard-Docker(Y:2018-O:45), Jan Bednar(Y:2020-O:76), Jasper Weatherby(Y:2018-O:109), Jonas Rondbjerg(Y:2017-O:75), Kasper Kotkansalo(Y:2017-O:96), Logan Hutsko(Y:2018-O:81), Olivier Rodrigue(Y:2018-O:49), Patrick Guzzo(Y:2020-O:117), Samuel Houde(Y:2018-O:117), Shawn Boudrias(Y:2018-O:108), Thimo Nickl(Y:2020-O:89), Tristan Langan(Y:2019-O:112), Vili Saarijarvi(Y:2015-O:106), Xavier Bouchard(Y:2018-O:146), Yegor Spiridonov(Y:2019-O:115)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>NYI 2, MIN 2, NYI 3, VEG 4<br />
<b>Year 2022: </b>NYI 2, NYI 3, NYI 4, NYI 5<br />
<b>Year 2023: </b>NYI 2, NYI 3, NYI 4, NYI 5<br />
<b>Year 2024: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5<br />
<b>Year 2025: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5<br />
</div>
<h1 class="TeamProspects_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 26</h3>
Albin Grewe(Y:2019-O:84), Alex Formenton(Y:2017-O:31), Andrei Altybarmakyan(Y:2017-O:88), Anton Johannesson(Y:2020-O:75), Anton Karlsson(Y:2014-O:76), Dawson Mercer(Y:2020-O:15), Drew Helleson(Y:2019-O:63), Dylan Cozens(Y:2019-O:6), Emil Andrae(Y:2020-O:54), K'Andre Miller(Y:2018-O:24), Lauri Pajuniemi(Y:2018-O:128), Lukas Reichel(Y:2020-O:29), Moritz Seider(Y:2019-O:14), Nathan Noel(Y:2015-O:109), Nick Robertson(Y:2019-O:52), Nico Daws(Y:2020-O:95), Nico Gross(Y:2018-O:127), Pascal Laberge(Y:2016-O:39), Pierre-Olivier Joseph(Y:2017-O:34), Samuel Johannesson(Y:2020-O:161), Scott Perunovich(Y:2018-O:62), Slava Demin(Y:2018-O:120), Stuart Skinner(Y:2017-O:97), Tristen Robins(Y:2020-O:126), Tyce Thompson(Y:2019-O:104), Zion Nybeck(Y:2020-O:62)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>NYR 1, NYR 2, SJS 3, NYR 4, NYR 5, TBL 5<br />
<b>Year 2022: </b>NYR 1, NYR 2, VEG 3, NYR 3, NYR 4, NYR 5<br />
<b>Year 2023: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5<br />
<b>Year 2024: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5<br />
<b>Year 2025: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5<br />
</div>
<h1 class="TeamProspects_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 14</h3>
Aarne Talvitie(Y:2019-O:137), Alex Cotton(Y:2020-O:65), Alex Turcotte(Y:2019-O:4), Allan McShane(Y:2018-O:83), Brinson Pasichnuk(Y:2016-O:119), Cam Dineen(Y:2016-O:90), Carl Grundstrom(Y:2016-O:56), Jack Gorniak(Y:2018-O:148), Joseph Woll(Y:2016-O:66), Justus Annunen(Y:2018-O:90), Mikko Kokkonen(Y:2019-O:87), Thomas Harley(Y:2019-O:25), Ty Smilanic(Y:2020-O:60), William Villeneuve(Y:2020-O:38)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>OTT 1, SJS 1, PIT 1, VAN 2, MTL 2, NYR 3, OTT 4, PIT 4, NYI 5, OTT 5, ARZ 5, SEA 5, PIT 5<br />
<b>Year 2022: </b>OTT 1, SEA 1, OTT 3, OTT 4, COL 4, OTT 5<br />
<b>Year 2023: </b>OTT 2, OTT 3, OTT 4, OTT 5<br />
<b>Year 2024: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5<br />
<b>Year 2025: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5<br />
</div>
<h1 class="TeamProspects_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 5</h3>
Dylan Garand(Y:2020-O:145), Reilly Walsh(Y:2017-O:115), Sasha Chmelevski(Y:2017-O:103), Taylor Gauthier(Y:2020-O:149), Trevor Zegras(Y:2019-O:10)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>PHI 1, PHI 2, CAR 2, PIT 3, PHI 5<br />
<b>Year 2022: </b>PHI 1, ARZ 1, PHI 2, PHI 3, PHI 4, PHI 5<br />
<b>Year 2023: </b>PHI 1, PHI 2, PHI 4, PHI 5<br />
<b>Year 2024: </b>PHI 1, PHI 2, PHI 3, PHI 4, PHI 5<br />
<b>Year 2025: </b>PHI 1, PHI 2, PHI 3, PHI 4, PHI 5<br />
</div>
<h1 class="TeamProspects_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 7</h3>
Blake Hillman(Y:2018-O:114), Denis Smirnov(Y:2017-O:117), Drew O'Connor(Y:2020-O:159), Kaapo Kähkönen(Y:2020-O:70), Mathias Laferrière(Y:2020-O:148), Nick Henry(Y:2017-O:122), Ryan Mantha(Y:2014-O:115)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>FLA 3<br />
<b>Year 2022: </b>DAL 5<br />
<b>Year 2023: </b>PIT 1, PIT 2, PIT 3, PIT 5<br />
<b>Year 2024: </b>PIT 1, PIT 2, PIT 4, PIT 5<br />
<b>Year 2025: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5<br />
</div>
<h1 class="TeamProspects_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 16</h3>
Connor Zary(Y:2020-O:17), Eeli Tolvanen(Y:2017-O:13), Filip Kral(Y:2018-O:154), Jackson Perbix(Y:2018-O:122), James Hardie(Y:2020-O:130), Joel Farabee(Y:2018-O:15), Josh Brook(Y:2017-O:83), Matthew Boldy(Y:2019-O:15), Matthew Robertson(Y:2019-O:27), Maxim Cajkovic(Y:2019-O:82), Noel Gunler(Y:2020-O:18), Ronnie Attard(Y:2019-O:134), Samuel Bolduc(Y:2019-O:57), Stelio Mattheos(Y:2017-O:43), Stephen Halliday(Y:2020-O:156), Tobias Bjornfot(Y:2019-O:35)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>QUE 1, QUE 2, QUE 3, QUE 4, STL 4, MTL 5, DET 5<br />
<b>Year 2022: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5<br />
<b>Year 2023: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5<br />
<b>Year 2024: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5<br />
<b>Year 2025: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5<br />
</div>
<h1 class="TeamProspects_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 2</h3>
Adrian Valigura(Y:2020-O:112), Mathieu Gagnon(Y:2020-O:152)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>CAR 1, DET 2, OTT 2, CLB 3<br />
<b>Year 2022: </b>NYI 1, SJS 1, SJS 4<br />
<b>Year 2023: </b>OTT 1, NYI 1, SJS 1, SJS 2, SJS 3, SJS 4, VEG 4, SJS 5<br />
<b>Year 2024: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5<br />
<b>Year 2025: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5<br />
</div>
<h1 class="TeamProspects_SEA"><a id="SeattleKraken">Seattle Kraken</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Kraken Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#SeattleKraken">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#SeattleKraken">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#SeattleKraken">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#SeattleKraken">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#SeattleKraken">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#SeattleKraken">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#SeattleKraken">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#SeattleKraken">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#SeattleKraken">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#SeattleKraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleKraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleKraken" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 15</h3>
Aku Raty(Y:2019-O:121), Anthony Salinitri(Y:2016-O:141), Arnaud Durandeau(Y:2017-O:152), Connor McClennon(Y:2020-O:98), Dante Salituro(Y:2016-O:154), Ethan Keppen(Y:2019-O:59), Hardy Haman-Aktell(Y:2016-O:142), Ian Scott(Y:2017-O:124), John St. Ivany(Y:2018-O:107), Maxim Mamin(Y:2018-O:141), Tyler Kelleher(Y:2016-O:143), Vladimir Bakanin(Y:2019-O:165), William Dufour(Y:2020-O:39), William Lockwood(Y:2016-O:89), Xavier Parent(Y:2019-O:155)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b><br />
<b>Year 2022: </b>PIT 2, DET 5<br />
<b>Year 2023: </b>SEA 1, SEA 2, SEA 4, CGY 5<br />
<b>Year 2024: </b>SEA 1, SEA 2, SEA 3, SEA 4, SEA 5<br />
<b>Year 2025: </b>SEA 1, SEA 2, SEA 3, SEA 4, SEA 5<br />
</div>
<h1 class="TeamProspects_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 14</h3>
Blake Murray(Y:2019-O:157), Bulat Shafigullin(Y:2018-O:79), Dmitry Voronkov(Y:2020-O:99), Filip Larsson(Y:2019-O:147), Jack Glover(Y:2014-O:63), Jacob Dion(Y:2020-O:128), Jeremy Swayman(Y:2020-O:132), Jimmy Lodge(Y:2013-O:65), Olle Eriksson-Ek(Y:2017-O:149), Patrick Harper(Y:2016-O:112), Ty Ronning(Y:2016-O:139), Vincent Dunn(Y:2013-O:95), Yegor Zamula(Y:2020-O:92), Zack Nastasiuk(Y:2013-O:63)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>STL 2, STL 3, STL 5<br />
<b>Year 2022: </b>STL 1, CAR 2, STL 2, STL 3, STL 4, NJD 5, STL 5<br />
<b>Year 2023: </b>STL 1, STL 2, STL 3, STL 4, STL 5<br />
<b>Year 2024: </b>STL 1, STL 2, STL 3, STL 4, STL 5, VEG 5<br />
<b>Year 2025: </b>STL 1, STL 2, STL 3, STL 4, STL 5<br />
</div>
<h1 class="TeamProspects_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 27</h3>
Albert Johansson(Y:2019-O:72), Alex Green(Y:2018-O:155), Alex Newhook(Y:2019-O:16), Alexei Polodyan(Y:2018-O:159), Antonio Stranges(Y:2020-O:85), Braden Schneider(Y:2020-O:26), Cayden Primeau(Y:2017-O:113), Cole Fonstad(Y:2018-O:97), David Noel(Y:2017-O:134), Drew Commesso(Y:2020-O:64), Dylan Samberg(Y:2017-O:61), Ian Mitchell(Y:2017-O:71), Jakub Skarek(Y:2018-O:82), John Beecher(Y:2019-O:19), Jonatan Berggren(Y:2018-O:28), Kaedan Korczak(Y:2019-O:67), Lukas Cormier(Y:2020-O:43), Lukas Dostal(Y:2018-O:106), Luke Evangelista(Y:2020-O:47), Luke Martin(Y:2017-O:70), Marat Khusnutdinov(Y:2020-O:41), Matvei Guskov(Y:2019-O:131), Patrick Moynihan(Y:2019-O:127), Ruslan Iskhakov(Y:2018-O:59), Topi Niemela(Y:2020-O:61), Tyson Foerster(Y:2020-O:32), Yegor Korshkov(Y:2016-O:40)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>TBL 1, TBL 2, MIN 3<br />
<b>Year 2022: </b>TBL 1, VEG 1, TBL 2, PIT 3, TBL 4, TBL 5<br />
<b>Year 2023: </b>TBL 1, TBL 2, TBL 3, VEG 3, PHI 3, TBL 4<br />
<b>Year 2024: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5<br />
<b>Year 2025: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5<br />
</div>
<h1 class="TeamProspects_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 23</h3>
Antti Saarela(Y:2019-O:78), Antti Tuomisto(Y:2019-O:48), Anttoni Honka(Y:2019-O:74), Colten Ellis(Y:2019-O:138), Eetu Makiniemi(Y:2017-O:128), Eetu Pakkila(Y:2019-O:109), Erik Portillo(Y:2019-O:68), Filip Hallander(Y:2018-O:53), Jack Studnicka(Y:2017-O:64), Jett Woo(Y:2018-O:44), Joni Ikonen(Y:2017-O:48), Joni Jurmo(Y:2020-O:52), Kasper Simontaival(Y:2020-O:51), Lenni Killinen(Y:2018-O:103), Matias Maccelli(Y:2019-O:70), Miska Kukkonen(Y:2018-O:121), Niklas Nordgren(Y:2018-O:73), Patrick Puistola(Y:2019-O:41), Rasmus Kupari(Y:2018-O:18), Roni Hirvonen(Y:2020-O:40), Sampo Ranta(Y:2018-O:76), Ville Heinola(Y:2019-O:21), Vladislav Kotkov(Y:2018-O:94)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>TOR 1, NYI 1, ARZ 1, TOR 4<br />
<b>Year 2022: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5<br />
<b>Year 2023: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5<br />
<b>Year 2024: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5<br />
<b>Year 2025: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5<br />
</div>
<h1 class="TeamProspects_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 10</h3>
Angus Crookshank(Y:2018-O:129), Connor Hall(Y:2016-O:94), Evan Cowley(Y:2013-O:126), Jaromir Pytlik(Y:2020-O:104), Kirill Marchenko(Y:2018-O:48), Logan Morrisson(Y:2020-O:120), Max Jones(Y:2016-O:19), Miles Gendron(Y:2014-O:86), Toni Utunen(Y:2018-O:149), Wyatte Wylie(Y:2018-O:137)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>VAN 1, QUE 5<br />
<b>Year 2022: </b>VAN 1, SJS 2, VAN 3, VAN 4<br />
<b>Year 2023: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, TBL 5<br />
<b>Year 2024: </b>VAN 1, VAN 2, PIT 3, VAN 3, VAN 4, VAN 5<br />
<b>Year 2025: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5<br />
</div>
<h1 class="TeamProspects_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 21</h3>
Alexandr Darin(Y:2019-O:145), Brennan Menell(Y:2020-O:107), Cole Schwindt(Y:2019-O:75), Egor Afanasyev(Y:2019-O:42), Eric Hjorth(Y:2019-O:150), Henri Nikkanen(Y:2019-O:151), Hunter Jones(Y:2019-O:62), Jack Malone(Y:2019-O:141), Jake Sanderson(Y:2020-O:10), John Ludvig(Y:2019-O:139), Kevin Mandolese(Y:2018-O:152), Lucas Feuk(Y:2019-O:135), Matthew Stienburg(Y:2019-O:117), Nathan Légaré(Y:2019-O:38), Nikita Okhotyuk(Y:2019-O:106), Ryan Suzuki(Y:2019-O:26), Semyon Chystyakov(Y:2019-O:159), Shakir Mukhamadullin(Y:2020-O:67), Tim Stützle(Y:2020-O:3), Vladislav Kolyachonok(Y:2019-O:66), William Wallinder(Y:2020-O:34)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>PHI 3, NSH 4, NYI 4, SJS 4, CGY 5, VEG 5<br />
<b>Year 2022: </b>SJS 5<br />
<b>Year 2023: </b>VEG 1, VEG 2, VEG 5<br />
<b>Year 2024: </b>VEG 1, VEG 2, VEG 3, VEG 4<br />
<b>Year 2025: </b>VEG 1, VEG 2, VEG 3, VEG 4, VEG 5<br />
</div>
<h1 class="TeamProspects_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 18</h3>
Alexander Nikishin(Y:2020-O:111), Alexander Pashin(Y:2020-O:255), Alexander Romanov(Y:2018-O:40), Blake McLaughlin(Y:2018-O:71), Brayden Tracey(Y:2019-O:24), Iaroslav Askarov(Y:2020-O:12), Jackson Lacombe(Y:2019-O:61), John Farinacci(Y:2019-O:79), Jonny Tychonick(Y:2018-O:54), Justin Barron(Y:2020-O:22), Kevin Bahl(Y:2018-O:57), Kirill Slepets(Y:2019-O:105), Logan Stanley(Y:2016-O:23), Robert Mastrosimone(Y:2019-O:51), Roby Jarventie(Y:2020-O:78), Theo Rochette(Y:2020-O:88), Vasili Podkolzin(Y:2019-O:3), Vasiliy Ponomarev(Y:2020-O:46)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>WSH 1, WSH 2, WSH 3, CAR 3, NJD 3, WSH 4, DAL 5, WSH 5<br />
<b>Year 2022: </b>WSH 1, WSH 2, WSH 3, CAR 3, WSH 4, WSH 5, PIT 5<br />
<b>Year 2023: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5<br />
<b>Year 2024: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5<br />
<b>Year 2025: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5<br />
</div>
<h1 class="TeamProspects_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 18</h3>
Alexander Holtz(Y:2020-O:4), Carson Bantle(Y:2020-O:118), Connor Ingram(Y:2016-O:106), Eetu Luostarinen, Jakob Ragnarsson(Y:2018-O:64), Linus Karlsson(Y:2018-O:87), Luke Prokop(Y:2020-O:154), Matthew Phillips(Y:2016-O:129), Maxim Groshev(Y:2020-O:84), Otto Koivula(Y:2016-O:100), Owen Pederson(Y:2020-O:123), Philip Broberg(Y:2019-O:18), Ryan Francis(Y:2020-O:158), Ryan O'Reilly(Y:2018-O:89), Serron Noel(Y:2018-O:37), Simon Knak(Y:2020-O:134), Viktor Lodin(Y:2019-O:102), William Cuylle(Y:2020-O:101)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>WPG 2, WPG 3, WPG 4, DET 4<br />
<b>Year 2022: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5<br />
<b>Year 2023: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5<br />
<b>Year 2024: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5<br />
<b>Year 2025: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5<br />
</div>
<?php include "Footer.php";?>
