<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Team Prospects</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleSaints">Seattle Saints</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#VegasGoldenKnights">Vegas Golden Knights</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamProspects_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 33</h3>
Adam Fox(Y:2016-O:81), Axel Holmstrom(Y:2014-O:106), Cam York(Y:2019-O:9), Cole Sanford(Y:2014-O:145), Daniel Zaar(Y:2014-O:126), David Bernhardt(Y:2016-O:151), Devon Toews(Y:2019-O:56), Dylan Gambrell(Y:2016-O:70), Filip Chytil(Y:2017-O:24), Igor Shvyrev(Y:2017-O:132), Jamieson Rees(Y:2019-O:46), Jansen Harkins(Y:2015-O:23), Jay O'Brien(Y:2018-O:30), Jayden Struble(Y:2019-O:55), Jordan Kyrou(Y:2016-O:29), Kirill Ustimenko(Y:2017-O:150), Kyle Wood(Y:2014-O:88), Layton Ahac(Y:2019-O:113), Lias Andersson(Y:2017-O:14), Linus Hogberg(Y:2016-O:152), Matthew Strome(Y:2017-O:65), Michael Brodzinski(Y:2014-O:155), Michael Spacek(Y:2015-O:75), Nicolas Meloche(Y:2015-O:42), Pavel Dorofeyev(Y:2019-O:60), Peyton Krebs(Y:2019-O:13), Pierre Engvall(Y:2014-O:158), Pyotr Kotchekov(Y:2019-O:44), Ryan Fitzgerald(Y:2013-O:54), Simon Lundmark(Y:2019-O:77), Thomas Novak(Y:2015-O:56), Timothy Liljegren(Y:2017-O:15), Wade Allison(Y:2016-O:71)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>SJS 3, CLB 3, ANH 3, EDM 3, DET 4<br />
<b>Year 2021: </b>ANH 1, ANH 3, COL 3, VAN 3, ANH 4, BUF 5, ANH 5, VAN 5<br />
<b>Year 2022: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5, MTL 5<br />
<b>Year 2023: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5<br />
<b>Year 2024: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5<br />
</div>
<h1 class="TeamProspects_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 12</h3>
Adam Ruzicka(Y:2017-O:56), Alec Regula(Y:2018-O:52), Aleksi Heponiemi(Y:2017-O:28), Arturs Silovs(Y:2019-O:132), Brett Leason(Y:2019-O:40), Erik Brannstrom(Y:2017-O:23), Kasper Bjorkqvist(Y:2016-O:105), Liam Kirk(Y:2019-O:156), Morgan Geekie(Y:2017-O:62), Sam Steel(Y:2016-O:24), Samuel Fagemo(Y:2019-O:50), Semyon Der-Arguchintsev(Y:2018-O:43)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>LOS 1, SJS 5, CLB 5<br />
<b>Year 2021: </b>ARZ 2, VEG 2, VEG 3, BOS 3, ARZ 4, WSH 5<br />
<b>Year 2022: </b>ARZ 2, ARZ 3, ARZ 4, ARZ 5<br />
<b>Year 2023: </b>ARZ 1, ARZ 2, ARZ 3, ARZ 4, ARZ 5<br />
<b>Year 2024: </b>ARZ 1, ARZ 2, ARZ 3, ARZ 4, ARZ 5<br />
</div>
<h1 class="TeamProspects_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 12</h3>
Adam Mascherin(Y:2016-O:35), Alex Vlasic(Y:2019-O:39), Calvin Thurkauf(Y:2016-O:156), Dillon Dube(Y:2016-O:74), Graeme Clarke(Y:2019-O:97), Gustav Lindstrom(Y:2017-O:59), Jake Bean(Y:2016-O:20), Karl Henrikson(Y:2019-O:95), Mario Ferraro(Y:2017-O:87), Timothy Gettinger(Y:2016-O:123), Tyler Weiss(Y:2018-O:111), Zane McIntyre<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>BOS 2, BOS 3, BOS 5<br />
<b>Year 2021: </b>BOS 1, BOS 2, BOS 4, BOS 5<br />
<b>Year 2022: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5<br />
<b>Year 2023: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5<br />
<b>Year 2024: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5<br />
</div>
<h1 class="TeamProspects_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 28</h3>
Alexander Campbell(Y:2019-O:71), Alexei Lipanov(Y:2017-O:45), Anatoli Golyshev, Brandon Saigeon(Y:2018-O:153), Cedric Pare(Y:2017-O:107), Eric Comrie(Y:2013-O:52), Jake Oettinger(Y:2017-O:26), Joe Wegwerth(Y:2014-O:141), Jonah Gadjovich(Y:2017-O:60), Jonathan Ang(Y:2016-O:91), Jonne Tammela(Y:2015-O:158), Julius Nättinen(Y:2015-O:72), Justus Annunen(Y:2018-O:90), Keaton Thompson(Y:2013-O:124), Lauri Pajuniemi(Y:2018-O:128), Lucas Carlsson(Y:2016-O:124), Lucas Johansen(Y:2016-O:43), Lukas Vejdemo(Y:2015-O:94), Mackenzie MacEachern(Y:2012-O:92), Mark Friedman(Y:2014-O:89), Matt MacKenzie, Maxim Letunov(Y:2014-O:48), Mikhail Vorobyov(Y:2015-O:126), Philippe Desrosiers(Y:2013-O:93), Rem Pitlick(Y:2016-O:115), Taylor Cammarata(Y:2013-O:87), Thomas Harley(Y:2019-O:25), Ty Emberson(Y:2018-O:92)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>CAR 1, OTT 2<br />
<b>Year 2021: </b>BUF 1, BUF 2, OTT 3, BUF 4, WPG 5<br />
<b>Year 2022: </b>BUF 1, BUF 2, VEG 2, VEG 3, BUF 3, BUF 4, BUF 5<br />
<b>Year 2023: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5<br />
<b>Year 2024: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5<br />
</div>
<h1 class="TeamProspects_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 12</h3>
Barrett Hayton(Y:2018-O:11), Dennis Gilbert(Y:2015-O:105), Eemeli Rasanen(Y:2017-O:63), Filip Johansson(Y:2018-O:35), Jack Drury(Y:2018-O:32), Kody Clark(Y:2018-O:60), Leon Gawanke(Y:2017-O:159), Nicolas Beaudin(Y:2018-O:36), Todd Burgess(Y:2016-O:117), Ukko-Pekka Luukkonen(Y:2017-O:57), Yaroslav Alexeyev(Y:2017-O:127), Yevgeni Svechnikov(Y:2015-O:20)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>ANH 1, DET 2, VEG 2, STL 2, CGY 2, VEG 3, CGY 3, SEA 3, CAR 3, ARZ 3, VEG 4, CGY 4, SJS 4, CAR 4, PHI 5, STL 5<br />
<b>Year 2021: </b>CGY 1, CGY 2, SJS 2, CGY 3, CGY 4, VAN 4, CGY 5<br />
<b>Year 2022: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5<br />
<b>Year 2023: </b>CGY 1, CGY 2, SEA 3, CGY 3, CGY 4<br />
<b>Year 2024: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5<br />
</div>
<h1 class="TeamProspects_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 7</h3>
Gregory Hofmann, Keegan Lowe, Logan Nelson, Michal Jordan, Rasmus Rissanen, Tanner Kero(Y:2015-O:99), Tommi Kivisto<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>PIT 5, TOR 5<br />
<b>Year 2021: </b>CAR 4, CAR 5, SJS 5<br />
<b>Year 2022: </b>CAR 1, CAR 3, CAR 4, CAR 5<br />
<b>Year 2023: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5<br />
<b>Year 2024: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5<br />
</div>
<h1 class="TeamProspects_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 11</h3>
Alexander Broadhurst, Alexander Khovanov(Y:2018-O:140), Andrei Svetlakov(Y:2017-O:158), Blade Jenkins(Y:2018-O:123), Fredrik Olofsson(Y:2014-O:107), Jakob Pelletier(Y:2019-O:23), Joe Hicketts(Y:2015-O:104), Kale Howarth(Y:2017-O:95), Miro Karjalainen(Y:2014-O:148), Nathan Smith(Y:2018-O:131), Noel Hoefenmayer(Y:2017-O:112)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>ARZ 1, CAR 2, CHI 4, OTT 5, CHI 5<br />
<b>Year 2021: </b>CHI 1, CHI 2, CHI 3, CHI 5<br />
<b>Year 2022: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5<br />
<b>Year 2023: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5<br />
<b>Year 2024: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5<br />
</div>
<h1 class="TeamProspects_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 12</h3>
Brendan Warren(Y:2015-O:91), Iakov Trenin(Y:2015-O:63), Ivan Morozov(Y:2018-O:75), Joseph Cramarossa, Keegan Iverson(Y:2014-O:91), Kyle Rau, Mitchell Gibson(Y:2018-O:118), Oskar Back(Y:2018-O:85), Ryan McLeod(Y:2018-O:23), Samuel Poulin(Y:2019-O:17), Spencer Watson(Y:2014-O:127), Xavier Bernard(Y:2018-O:93)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>COL 1<br />
<b>Year 2021: </b>COL 1, COL 2, COL 5<br />
<b>Year 2022: </b>COL 1, COL 2, COL 3, COL 4, COL 5<br />
<b>Year 2023: </b>COL 1, COL 2, COL 3, COL 4, COL 5<br />
<b>Year 2024: </b>COL 1, COL 2, COL 3, COL 4, COL 5<br />
</div>
<h1 class="TeamProspects_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 7</h3>
Ben Mirageas(Y:2017-O:116), Bowen Byram(Y:2019-O:8), Filip Ahl(Y:2015-O:110), Ilya Mikheyev(Y:2018-O:150), Jason Robertson(Y:2017-O:32), Mattias Samuelsson(Y:2018-O:61), Riley Stillman(Y:2016-O:150)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>CLB 1, NJD 3, NYI 4, COL 4, NYI 5<br />
<b>Year 2021: </b>CLB 1, CLB 2, CLB 3, BUF 3, DET 3, CLB 4, CHI 4, TOR 5, CLB 5<br />
<b>Year 2022: </b>CLB 1, CLB 2, VAN 2, SEA 2, CLB 3, CLB 4, CLB 5, VEG 5<br />
<b>Year 2023: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5<br />
<b>Year 2024: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5<br />
</div>
<h1 class="TeamProspects_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 23</h3>
Alban Eriksson(Y:2018-O:41), Anthony Richard(Y:2015-O:85), Chad Krys(Y:2016-O:64), Daniel Audette(Y:2014-O:61), Dillon Hamaliuk(Y:2019-O:88), Dominic Toninato(Y:2012-O:145), Emil Molin, Guillaume Gélinas(Y:2013-O:114), Henry Thrun(Y:2019-O:103), Hubert Labrie, Hugo Alnefelt(Y:2019-O:89), Hunter Smith(Y:2014-O:45), Jake Wise(Y:2018-O:47), Joel Hofer(Y:2018-O:113), Lane Zablocki(Y:2017-O:118), Luke Gazdic, Martin Fehervary(Y:2018-O:68), Matej Stransky, Mitchell Heard(Y:2012-O:53), Nils Höglander(Y:2019-O:37), Quinn Olson(Y:2019-O:135), Santeri Virtanen(Y:2017-O:85), Simon Bourque<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>DAL 1, NJD 1, OTT 3, DAL 3, MTL 3<br />
<b>Year 2021: </b>DAL 1, DAL 2, DAL 3, DAL 4<br />
<b>Year 2022: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5<br />
<b>Year 2023: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5<br />
<b>Year 2024: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5<br />
</div>
<h1 class="TeamProspects_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 4</h3>
Alexei Krasikov(Y:2018-O:130), Jonathan Kovacevic(Y:2017-O:91), Patrick Sieloff(Y:2012-O:56), Rasmus Bodin(Y:2012-O:120)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b><br />
<b>Year 2021: </b>DET 1, WPG 1, DET 4<br />
<b>Year 2022: </b>DET 1, DET 2, DET 3, DET 4, DET 5<br />
<b>Year 2023: </b>DET 1, DET 2, DET 3, DET 4, DET 5<br />
<b>Year 2024: </b>DET 1, DET 2, DET 3, DET 4, DET 5<br />
</div>
<h1 class="TeamProspects_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 20</h3>
Adam Beckman(Y:2019-O:86), Andrew Peeke(Y:2016-O:44), Henri Jokiharju(Y:2017-O:35), Ilya Nikolayev(Y:2019-O:73), Jack McBain(Y:2018-O:67), Jakub Lauko(Y:2018-O:69), Jordan Cederholm(Y:2016-O:97), Keaton Middleton(Y:2016-O:110), Kirby Dach(Y:2019-O:7), Libor Hajek(Y:2016-O:50), Marc Del Gaizo(Y:2019-O:119), Markus Phillips(Y:2017-O:106), Marshall Warren(Y:2019-O:69), Michal Teply(Y:2019-O:91), Milos Roman(Y:2018-O:133), Paul Cotter(Y:2018-O:101), Philip Tomasino(Y:2019-O:20), Shane Pinto(Y:2019-O:45), Tarmo Reunanen(Y:2016-O:144), Thomas Schemitsch(Y:2015-O:86)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>EDM 1, EDM 2, NYI 2, SEA 4, EDM 4, EDM 5<br />
<b>Year 2021: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5<br />
<b>Year 2022: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5<br />
<b>Year 2023: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5<br />
<b>Year 2024: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5<br />
</div>
<h1 class="TeamProspects_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 13</h3>
Carl Grundstrom(Y:2016-O:56), Jonathan Gruden(Y:2018-O:80), Kirill Maksimov(Y:2017-O:111), Kyle Olson(Y:2017-O:157), Lukas Elvenes(Y:2017-O:125), Marcus Westfalt(Y:2018-O:139), Matej Pekar(Y:2018-O:77), Nikita Alexandrov(Y:2019-O:54), Rasmus Sandin(Y:2018-O:26), Samuel Asselin(Y:2019-O:120), Victor Söderström(Y:2019-O:22), Ville Husso(Y:2014-O:144), Vitali Kravtsov(Y:2018-O:10)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>FLA 1, FLA 2, COL 2, CHI 3, FLA 4, FLA 5, QUE 5<br />
<b>Year 2021: </b>FLA 1, FLA 2, FLA 3, FLA 5<br />
<b>Year 2022: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5<br />
<b>Year 2023: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5<br />
<b>Year 2024: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5<br />
</div>
<h1 class="TeamProspects_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 23</h3>
Alexander Volkov(Y:2017-O:47), Arthur Kaliyev(Y:2019-O:11), Boris Katchouk(Y:2016-O:53), Brent Gates(Y:2015-O:101), Christopher Paquette(Y:2016-O:135), Dante Fabbro(Y:2016-O:26), Demetrios Koumontzis(Y:2018-O:138), Drake Rymsha(Y:2017-O:99), Garrett Pilon(Y:2016-O:80), Ivan Lodnia(Y:2017-O:67), Joey Keane(Y:2018-O:116), Liam Hawel(Y:2017-O:139), Maksim Sushko(Y:2017-O:94), Martin Pospisil(Y:2018-O:126), Max Gildon(Y:2017-O:74), Mike Robinson(Y:2015-O:144), Nicolas Roy(Y:2015-O:60), Noah Cates(Y:2017-O:155), Riley Tufte(Y:2016-O:61), Ryan Shea(Y:2015-O:146), Samuel Montembeault(Y:2015-O:74), Scott Reedy(Y:2017-O:143), Sergei Zborovsky(Y:2015-O:103)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>LOS 3, LOS 4, LOS 5<br />
<b>Year 2021: </b>LOS 1, SEA 1, VEG 1, LOS 2, LOS 3, ARZ 3, LOS 4, MTL 4, LOS 5<br />
<b>Year 2022: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5<br />
<b>Year 2023: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5<br />
<b>Year 2024: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5<br />
</div>
<h1 class="TeamProspects_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 7</h3>
Brycen Martin(Y:2014-O:74), Jack Rathbone(Y:2017-O:137), Jake Leschyshyn(Y:2017-O:86), Jordan Harris, Marcus Kallionkieli(Y:2019-O:148), Nick Seeler, Reece Newkirk(Y:2019-O:153)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>MIN 1, PHI 1, MIN 2, OTT 4<br />
<b>Year 2021: </b>MIN 1, MTL 3, MIN 4, MIN 5<br />
<b>Year 2022: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5<br />
<b>Year 2023: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5<br />
<b>Year 2024: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5<br />
</div>
<h1 class="TeamProspects_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 29</h3>
Akil Thomas(Y:2018-O:21), Alexandre Texier(Y:2017-O:52), Alexis Gravel(Y:2018-O:143), Arnaud Durandeau(Y:2017-O:152), Arsen Khisamutdinov(Y:2019-O:143), Cole Caufield(Y:2019-O:5), Connor Dewar(Y:2018-O:99), Curtis Douglas(Y:2018-O:105), Domenick Fensore(Y:2019-O:129), Ethan Keppen(Y:2019-O:59), Evan Bouchard(Y:2018-O:9), Gabriel Fortier(Y:2018-O:74), Ian Scott(Y:2017-O:124), Jack Dugan(Y:2017-O:108), Jesper Sellgren(Y:2019-O:146), John St. Ivany(Y:2018-O:107), Judd Caulfield(Y:2019-O:144), Luka Burzan(Y:2019-O:83), Mattias Norlinder(Y:2019-O:116), Michael Anderson(Y:2017-O:105), Michael Vukojevic(Y:2019-O:96), Morgan Frost(Y:2017-O:29), Nolan Foote(Y:2019-O:28), Tim Soderlund(Y:2017-O:148), Tuuka Tieksola(Y:2019-O:76), Tyler Tucker(Y:2019-O:152), Vladimir Bakanin(Y:2019-O:165), Vladislav Firstov(Y:2019-O:53), Xavier Parent(Y:2019-O:155)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>CHI 1, LOS 2, NYI 3, QUE 3, FLA 3, MIN 4, NJD 4, MTL 5<br />
<b>Year 2021: </b>MTL 1, MTL 2, SEA 2, CAR 3, COL 4<br />
<b>Year 2022: </b>MTL 1, MTL 2, OTT 2, MTL 3, MTL 4<br />
<b>Year 2023: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5<br />
<b>Year 2024: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5<br />
</div>
<h1 class="TeamProspects_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 26</h3>
Alexei Toropchenko(Y:2017-O:123), Ben Jones(Y:2017-O:144), Bobby Brink(Y:2019-O:31), Bode Wilde(Y:2018-O:29), Connor McMichael(Y:2019-O:34), Conor Timmins(Y:2017-O:50), David Farrance(Y:2017-O:130), Drake Batherson(Y:2017-O:92), Dylan Sadowy(Y:2014-O:82), Ethan Phillips(Y:2019-O:158), Gavin Hain(Y:2018-O:144), Grigori Denisenko(Y:2018-O:19), Jan Drozg(Y:2017-O:126), Jared McIsaac(Y:2018-O:51), Jaret Anderson-Dolan(Y:2017-O:36), Jesper Eliasson(Y:2018-O:147), Jonas Johansson(Y:2014-O:114), Kristian Vesalainen(Y:2017-O:30), Nicholas Caamano(Y:2016-O:137), Ryan Johnson(Y:2019-O:36), Seth Barton(Y:2018-O:86), Simon Holmström(Y:2019-O:29), Spencer Stastney(Y:2018-O:115), Tyler Madden(Y:2018-O:100), Urho Vaakanainen(Y:2017-O:21), Zac Jones(Y:2019-O:64)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>NSH 1, SEA 1, NSH 2, WSH 2, BUF 4, NSH 4, ARZ 4, VAN 4, NSH 5<br />
<b>Year 2021: </b>NSH 1, NSH 2, ANH 2, PIT 2, NSH 3, FLA 4, NSH 5<br />
<b>Year 2022: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5<br />
<b>Year 2023: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5<br />
<b>Year 2024: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5<br />
</div>
<h1 class="TeamProspects_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 34</h3>
Benjamin Finkelstein(Y:2016-O:153), Blake Pietila, Cameron Clarke(Y:2016-O:85), Cameron Crotty(Y:2017-O:142), Casey Mittelstadt(Y:2017-O:12), Clayton Phillips(Y:2017-O:77), Curtis Hall(Y:2018-O:125), Daniel Altshuller(Y:2012-O:103), Daniil Misyul(Y:2019-O:128), David Hrenak(Y:2018-O:135), Dysin Mayo(Y:2014-O:128), Evan Barratt(Y:2017-O:69), Fabian Zetterlund(Y:2017-O:68), Gianni Fairbrother(Y:2019-O:142), Ivan Prosvetov(Y:2018-O:132), Jack Badini(Y:2017-O:109), Jacob Middleton(Y:2014-O:160), Jake Schmaltz(Y:2019-O:93), Joona Koppanen(Y:2016-O:72), Mads Sogaard(Y:2019-O:43), Matthew Mistele(Y:2014-O:113), Michael Rasmussen(Y:2017-O:20), Nick Merkley(Y:2015-O:18), Nicolas Abruzzese(Y:2019-O:99), Philipp Kurashev(Y:2018-O:96), Riley Stotts(Y:2018-O:78), Riley Sutter(Y:2018-O:84), Seth Helgeson, Simon Benoit(Y:2019-O:133), Spencer Knight(Y:2019-O:12), Taylor Raddysh(Y:2016-O:31), Viktor Crus-Rydberg(Y:2013-O:128), Xavier Simoneau(Y:2019-O:149), Zachary Gallant(Y:2017-O:104)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>VEG 1, BUF 1, NJD 2, ANH 2, NJD 5<br />
<b>Year 2021: </b>NJD 1, STL 1, NJD 2, NJD 3, SEA 3, PHI 4, NJD 5, VEG 5<br />
<b>Year 2022: </b>NJD 1, NJD 2, NJD 3, SEA 3, NJD 4<br />
<b>Year 2023: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5<br />
<b>Year 2024: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5<br />
</div>
<h1 class="TeamProspects_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 24</h3>
Andong Song(Y:2015-O:107), Benoit-Olivier Groulx(Y:2018-O:56), Brandon Gignac(Y:2016-O:58), Cade Webber(Y:2019-O:100), Corey Trivino, Dmitri Semykin(Y:2018-O:145), Grant Mismash(Y:2017-O:66), Jachym Kondelik(Y:2018-O:112), Jacob Bernard-Docker(Y:2018-O:45), Jasper Weatherby(Y:2018-O:109), John Persson, Jonas Rondbjerg(Y:2017-O:75), Kasper Kotkansalo(Y:2017-O:96), Kirill Kabanov, Logan Hutsko(Y:2018-O:81), Olivier Rodrigue(Y:2018-O:49), Samuel Houde(Y:2018-O:117), Santeri Saari(Y:2013-O:146), Shawn Boudrias(Y:2018-O:108), Tristan Langan(Y:2019-O:112), Troy Bourke(Y:2012-O:136), Vili Saarijarvi(Y:2015-O:106), Xavier Bouchard(Y:2018-O:146), Yegor Spiridonov(Y:2019-O:115)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>NYI 1, OTT 1, CGY 1, TOR 3, COL 3, BUF 3, PHI 4<br />
<b>Year 2021: </b>NYI 3, TBL 3, NYI 4, SJS 4<br />
<b>Year 2022: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5<br />
<b>Year 2023: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5<br />
<b>Year 2024: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5<br />
</div>
<h1 class="TeamProspects_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Aidan Dudas(Y:2018-O:151), Albin Grewe(Y:2019-O:84), Alex Formenton(Y:2017-O:31), Andrei Altybarmakyan(Y:2017-O:88), Anton Karlsson(Y:2014-O:76), Cam Hillis(Y:2018-O:91), Drew Helleson(Y:2019-O:63), Glenn Gawdin(Y:2015-O:117), Jan Jenik(Y:2018-O:88), Jeremy Bracco(Y:2015-O:40), John Gillies(Y:2012-O:97), Joni Nikko, Josh Norris(Y:2017-O:33), K'Andre Miller(Y:2018-O:24), Moritz Seider(Y:2019-O:14), Nathan Noel(Y:2015-O:109), Nick Robertson(Y:2019-O:52), Nico Gross(Y:2018-O:127), Nikolay Goldobin(Y:2014-O:30), Pascal Laberge(Y:2016-O:39), Peter Ceresnak, Pierre-Olivier Joseph(Y:2017-O:34), Ryan Bourque, Scott Perunovich(Y:2018-O:62), Slava Demin(Y:2018-O:120), Steven Fogarty, Stuart Skinner(Y:2017-O:97), Tyce Thompson(Y:2019-O:104), Vladislav Gavrikov(Y:2015-O:128), William Lagesson(Y:2014-O:104)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>NYR 1, STL 1, NYR 2, SJS 2, NYR 3, NSH 3, NYR 4, BOS 4, NYR 5<br />
<b>Year 2021: </b>NYR 1, NYR 2, NYR 3, SJS 3, NYR 4, NYR 5<br />
<b>Year 2022: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5<br />
<b>Year 2023: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5<br />
<b>Year 2024: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5<br />
</div>
<h1 class="TeamProspects_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 24</h3>
Aarne Talvitie(Y:2019-O:137), Alex Turcotte(Y:2019-O:4), Aliaksei Protas(Y:2019-O:125), Allan McShane(Y:2018-O:83), Brandon Halverson(Y:2014-O:83), Brinson Pasichnuk(Y:2016-O:119), Calen Addison(Y:2018-O:38), Cam Dineen(Y:2016-O:90), Christian Djoos, David Gustafsson(Y:2018-O:66), Dylan Cozens(Y:2019-O:6), Dylan Labbé(Y:2013-O:155), Ilya Konovalov, Ivan Chekhovich(Y:2017-O:100), Jack Gorniak(Y:2018-O:148), Joseph Woll(Y:2016-O:66), Linus Arnesson(Y:2013-O:59), Mikko Kokkonen(Y:2019-O:87), Reid Duke(Y:2014-O:147), Robin Norell(Y:2013-O:159), Ryan Collins(Y:2014-O:51), Ryan Kujawinski(Y:2013-O:123), Ryan Mantha(Y:2014-O:115), Ty Dellandrea(Y:2018-O:13)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>SEA 2, PIT 2, QUE 2, CHI 2, PHI 2, DAL 2, WPG 2, BUF 2<br />
<b>Year 2021: </b>OTT 1, SJS 1, PIT 1, TOR 3, OTT 4, PIT 4, OTT 5, ARZ 5, SEA 5, PIT 5<br />
<b>Year 2022: </b>OTT 1, SEA 1, PIT 3, OTT 3, OTT 4, OTT 5<br />
<b>Year 2023: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5<br />
<b>Year 2024: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5<br />
</div>
<h1 class="TeamProspects_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 4</h3>
Noah Gregor(Y:2016-O:102), Reilly Walsh(Y:2017-O:115), Sasha Chmelevski(Y:2017-O:103), Trevor Zegras(Y:2019-O:10)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>ANH 5, SEA 5<br />
<b>Year 2021: </b>PHI 1, PHI 2, CAR 2, PIT 3, PHI 5<br />
<b>Year 2022: </b>PHI 1, ARZ 1, PHI 2, PHI 3, PHI 4, PHI 5<br />
<b>Year 2023: </b>PHI 1, PHI 2, PHI 4, PHI 5<br />
<b>Year 2024: </b>PHI 1, PHI 2, PHI 3, PHI 4, PHI 5<br />
</div>
<h1 class="TeamProspects_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 4</h3>
Blake Hillman(Y:2018-O:114), Colin McDonald, Henri Ikonen(Y:2013-O:72), Zach Sill<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>ARZ 5, DAL 5, CAR 5<br />
<b>Year 2021: </b>DAL 5, NYI 5<br />
<b>Year 2022: </b>PIT 1, PIT 4, PIT 5<br />
<b>Year 2023: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5<br />
<b>Year 2024: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5<br />
</div>
<h1 class="TeamProspects_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 13</h3>
Arvid Henrikson(Y:2016-O:163), Eeli Tolvanen(Y:2017-O:13), Filip Kral(Y:2018-O:154), Jackson Perbix(Y:2018-O:122), Joel Farabee(Y:2018-O:15), Josh Brook(Y:2017-O:83), Matthew Boldy(Y:2019-O:15), Matthew Robertson(Y:2019-O:27), Maxim Cajkovic(Y:2019-O:82), Ronnie Attard(Y:2019-O:134), Samuel Bolduc(Y:2019-O:57), Stelio Mattheos(Y:2017-O:43), Tobias Bjornfot(Y:2019-O:35)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>BOS 1, QUE 1, QUE 4<br />
<b>Year 2021: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5, MTL 5, DET 5<br />
<b>Year 2022: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5<br />
<b>Year 2023: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5<br />
<b>Year 2024: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5<br />
</div>
<h1 class="TeamProspects_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 9</h3>
Alex Beaucage(Y:2019-O:30), Alex Schoenborn(Y:2014-O:68), Alexis Arsenault(Y:2019-O:122), Gabriel Fontaine(Y:2016-O:67), Justin Bergeron(Y:2019-O:85), Mathieu Boucher(Y:2016-O:140), Samuel Regis(Y:2019-O:118), William Rouleau(Y:2019-O:126), Zachary Emond(Y:2019-O:114)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>MTL 2, CLB 4, ANH 4, CGY 5<br />
<b>Year 2021: </b>CAR 1, VAN 2, NYI 2, DET 2, MIN 2, OTT 2<br />
<b>Year 2022: </b>SJS 1, SJS 3, SJS 4<br />
<b>Year 2023: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5<br />
<b>Year 2024: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5<br />
</div>
<h1 class="TeamProspects_SEA"><a id="SeattleSaints">Seattle Saints</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Saints Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#SeattleSaints">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#SeattleSaints">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#SeattleSaints">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#SeattleSaints">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#SeattleSaints">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#SeattleSaints">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#SeattleSaints">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#SeattleSaints">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#SeattleSaints">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#SeattleSaints">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#SeattleSaints">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#SeattleSaints">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleSaints');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleSaints" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 5</h3>
Anthony Salinitri(Y:2016-O:141), Dante Salituro(Y:2016-O:154), Maxim Mamin(Y:2018-O:141), Tyler Kelleher(Y:2016-O:143), William Lockwood(Y:2016-O:89)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>MIN 3, MIN 5, BUF 5<br />
<b>Year 2021: </b>SEA 4, TBL 4<br />
<b>Year 2022: </b>PIT 2, SEA 4, VEG 4, SEA 5<br />
<b>Year 2023: </b>SEA 1, SEA 2, SEA 4, CGY 5, SEA 5<br />
<b>Year 2024: </b>SEA 1, SEA 2, SEA 3, SEA 4, SEA 5<br />
</div>
<h1 class="TeamProspects_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 25</h3>
Austin Lemieux(Y:2016-O:159), Blake Murray(Y:2019-O:157), Blake Speers(Y:2015-O:76), Bulat Shafigullin(Y:2018-O:79), Dennis Yan(Y:2015-O:64), Filip Larsson(Y:2019-O:147), Jack Glover(Y:2014-O:63), Jens Lööke(Y:2015-O:88), Jimmy Lodge(Y:2013-O:65), Jonas Junland, Jonathan Racine, Ludwig Bystrom(Y:2012-O:73), Marcus Hogberg(Y:2013-O:74), Miroslav Svoboda(Y:2015-O:151), Niklas Hansson(Y:2013-O:90), Niko Hovinen, Olle Eriksson-Ek(Y:2017-O:149), Oskar Steen(Y:2019-O:101), Patrick Harper(Y:2016-O:112), Troy Josephs(Y:2013-O:147), Ty Ronning(Y:2016-O:139), Tye Felhaber(Y:2019-O:162), Vincent Dunn(Y:2013-O:95), Yannick Veilleux, Zack Nastasiuk(Y:2013-O:63)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>STL 3, TOR 4, STL 4<br />
<b>Year 2021: </b>STL 2, STL 3, NSH 4, STL 4, STL 5<br />
<b>Year 2022: </b>STL 1, CAR 2, STL 2, STL 3, STL 4, NJD 5, STL 5<br />
<b>Year 2023: </b>STL 1, STL 2, STL 3, STL 4, STL 5<br />
<b>Year 2024: </b>STL 1, STL 2, STL 3, STL 4, STL 5<br />
</div>
<h1 class="TeamProspects_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 34</h3>
Albert Johansson(Y:2019-O:72), Alex Green(Y:2018-O:155), Alex Newhook(Y:2019-O:16), Alexei Polodyan(Y:2018-O:159), Carl Neill(Y:2015-O:131), Cayden Primeau(Y:2017-O:113), Cole Fonstad(Y:2018-O:97), David Noel(Y:2017-O:134), Dylan Samberg(Y:2017-O:61), Etienne Marcoux, Fabrice Herzog(Y:2013-O:71), François Brassard(Y:2012-O:129), Guillaume Gauthier(Y:2014-O:108), Ian Mitchell(Y:2017-O:71), Jakub Skarek(Y:2018-O:82), Jesper Boqvist(Y:2017-O:38), John Beecher(Y:2019-O:19), Jonatan Berggren(Y:2018-O:28), Kaedan Korczak(Y:2019-O:67), Linus Nässen(Y:2016-O:122), Lukas Dostal(Y:2018-O:106), Luke Martin(Y:2017-O:70), Martin Necas(Y:2017-O:18), Matvei Guskov(Y:2019-O:131), Max Jones(Y:2016-O:19), Olivier Archambault, Patrick Moynihan(Y:2019-O:127), Quinn Hughes(Y:2018-O:8), Ruslan Iskhakov(Y:2018-O:59), Ryan Culkin(Y:2012-O:89), Ryan Suzuki(Y:2019-O:26), Ty Smith(Y:2018-O:17), William Bitten(Y:2016-O:62), Yegor Korshkov(Y:2016-O:40)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>TBL 1, PIT 1, TBL 2, TBL 3, TBL 5<br />
<b>Year 2021: </b>TBL 1, TBL 2, PHI 3, TBL 5<br />
<b>Year 2022: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5<br />
<b>Year 2023: </b>TBL 1, TBL 2, TBL 3, PHI 3, TBL 4, TBL 5<br />
<b>Year 2024: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5<br />
</div>
<h1 class="TeamProspects_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 25</h3>
Antti Saarela(Y:2019-O:78), Antti Tuomisto(Y:2019-O:48), Anttoni Honka(Y:2019-O:74), Colten Ellis(Y:2019-O:138), Eetu Makiniemi(Y:2017-O:128), Eetu Pakkila(Y:2019-O:109), Erik Portillo(Y:2019-O:68), Filip Hallander(Y:2018-O:53), Jack Studnicka(Y:2017-O:64), Jett Woo(Y:2018-O:44), Joni Ikonen(Y:2017-O:48), Lenni Killinen(Y:2018-O:103), Matias Maccelli(Y:2019-O:70), Miska Kukkonen(Y:2018-O:121), Niklas Nordgren(Y:2018-O:73), Olivier Galipeau(Y:2017-O:160), Oliwer Kaski(Y:2019-O:65), Olli Juolevi(Y:2016-O:11), Patrick Puistola(Y:2019-O:41), Rasmus Kupari(Y:2018-O:18), Sampo Ranta(Y:2018-O:76), Teemu Turunen(Y:2019-O:81), Ville Heinola(Y:2019-O:21), Vladislav Kotkov(Y:2018-O:94), Zachary Fucale(Y:2013-O:15)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>TOR 1, VAN 2, TOR 2, CLB 2<br />
<b>Year 2021: </b>TOR 1, TOR 2, TOR 4<br />
<b>Year 2022: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5<br />
<b>Year 2023: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5<br />
<b>Year 2024: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5<br />
</div>
<h1 class="TeamProspects_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 11</h3>
Angus Crookshank(Y:2018-O:129), Connor Hall(Y:2016-O:94), David Honzik, Evan Cowley(Y:2013-O:126), Kirill Marchenko(Y:2018-O:48), Matt Filipe(Y:2016-O:145), Miles Gendron(Y:2014-O:86), Ryan Poehling(Y:2017-O:17), Spencer Smallman(Y:2015-O:143), Toni Utunen(Y:2018-O:149), Wyatte Wylie(Y:2018-O:137)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>VAN 1, PIT 3, VAN 3, DAL 4<br />
<b>Year 2021: </b>VAN 1, MIN 3, VEG 4, NJD 4<br />
<b>Year 2022: </b>VAN 1, SJS 2, VAN 3, VAN 4, VAN 5<br />
<b>Year 2023: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5<br />
<b>Year 2024: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5<br />
</div>
<h1 class="TeamProspects_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#VegasGoldenKnights">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 19</h3>
Alexandr Darin(Y:2019-O:145), Cole Schwindt(Y:2019-O:75), Daniel Vladar(Y:2015-O:122), Egor Afanasyev(Y:2019-O:42), Eric Hjorth(Y:2019-O:150), Henri Nikkanen(Y:2019-O:151), Hunter Jones(Y:2019-O:62), Jack Malone(Y:2019-O:141), John Ludvig(Y:2019-O:139), Kevin Mandolese(Y:2018-O:152), Lassi Thomson(Y:2019-O:32), Lucas Feuk(Y:2019-O:135), Matthew Stienburg(Y:2019-O:117), Nathan Légaré(Y:2019-O:38), Nikita Okhotyuk(Y:2019-O:106), Raphaël Lavoie(Y:2019-O:33), Semyon Chystyakov(Y:2019-O:159), Vladislav Kolyachonok(Y:2019-O:66), Will Borgen(Y:2016-O:155)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>SJS 1, WPG 1<br />
<b>Year 2021: </b>ARZ 1, NYI 1<br />
<b>Year 2022: </b>VEG 1, SJS 5<br />
<b>Year 2023: </b>VEG 1, VEG 2, VEG 3, VEG 4, VEG 5<br />
<b>Year 2024: </b>VEG 1, VEG 2, VEG 3, VEG 4, VEG 5<br />
</div>
<h1 class="TeamProspects_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 31</h3>
Aku Raty(Y:2019-O:121), Alexander Alexeyev(Y:2018-O:34), Alexander Romanov(Y:2018-O:40), Artemi Knyazev(Y:2019-O:49), Blake McLaughlin(Y:2018-O:71), Brayden Tracey(Y:2019-O:24), Charlie Lindgren(Y:2016-O:78), Cliff Pu(Y:2016-O:46), Denis Smirnov(Y:2017-O:117), Dmitry Zavgorodniy(Y:2018-O:72), Dustin Wolf(Y:2019-O:140), Hardy Haman-Aktell(Y:2016-O:142), Jackson Lacombe(Y:2019-O:61), Jesse Gabrielle(Y:2015-O:132), John Farinacci(Y:2019-O:79), Jonny Tychonick(Y:2018-O:54), Jordan Spence(Y:2019-O:98), Kevin Bahl(Y:2018-O:57), Kirill Slepets(Y:2019-O:105), Klim Kostin(Y:2017-O:19), Logan Stanley(Y:2016-O:23), Markus Nurmi(Y:2016-O:134), Mason Shaw(Y:2017-O:81), Mikhail Maltsev(Y:2016-O:113), Nick Henry(Y:2017-O:122), Ostap Safin(Y:2017-O:80), Robert Mastrosimone(Y:2019-O:51), Sean Day(Y:2016-O:57), Tyler Steenbergen(Y:2017-O:58), Valentin Nussbaumer(Y:2019-O:107), Vasili Podkolzin(Y:2019-O:3)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>WSH 1, DET 1, WSH 3, DET 3, WSH 4, WSH 5, VEG 5, COL 5<br />
<b>Year 2021: </b>WSH 1, WSH 2, WSH 3, WSH 4<br />
<b>Year 2022: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5<br />
<b>Year 2023: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5<br />
<b>Year 2024: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5<br />
</div>
<h1 class="TeamProspects_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL9-PLF-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL9-PLF-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL9-PLF-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL9-PLF-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-PLF-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL9-PLF-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL9-PLF-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL9-PLF-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL9-PLF-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL9-PLF-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL9-PLF-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL9-PLF-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 23</h3>
Artur Kayumov(Y:2016-O:49), Connor Ingram(Y:2016-O:106), Deven Sideroff(Y:2015-O:93), Eetu Luostarinen, Eetu Tuulola(Y:2016-O:103), Graham Knott(Y:2015-O:61), Jacob Moverare(Y:2016-O:118), Jakob Ragnarsson(Y:2018-O:64), Jakub Zboril(Y:2015-O:12), Janne Kuokkanen(Y:2016-O:36), Jordan Sambrook(Y:2016-O:95), Juho Lammikko(Y:2014-O:59), Linus Karlsson(Y:2018-O:87), MacKenzie Entwistle(Y:2017-O:78), Matthew Phillips(Y:2016-O:129), Maxime Fortier(Y:2016-O:116), Oskar Lindblom(Y:2015-O:148), Otto Koivula(Y:2016-O:100), Philip Broberg(Y:2019-O:18), Ryan Gropp(Y:2015-O:55), Ryan O'Reilly(Y:2018-O:89), Serron Noel(Y:2018-O:37), Viktor Lodin(Y:2019-O:102)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>MTL 1, ARZ 2, WPG 3, PHI 3, WPG 4, MTL 4, PIT 4, TBL 4, WPG 5, VAN 5, DET 5<br />
<b>Year 2021: </b>WPG 2, WPG 3, WPG 4<br />
<b>Year 2022: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5<br />
<b>Year 2023: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5<br />
<b>Year 2024: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5<br />
</div>
<?php include "Footer.php";?>
