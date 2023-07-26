<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Team Prospects</title>
<script type="text/javascript" src="ASHL6-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.0.9.9" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL6-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL6-STHS.db";
$LangOverwrite = (boolean)FALSE;
$lang = "en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 7; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleSaints">Seattle Saints</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamProspects_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 67</h3>
Aapeli Rasanen(Y:2016-O:107), Adam Fox(Y:2016-O:81), Adam Pelech(Y:2012-O:63), Andreas Dahlstrom, Andrey Pedan, Axel Holmstrom(Y:2014-O:106), Brandon Montour(Y:2014-O:73), Brett Perlini, Brock Boeser(Y:2015-O:26), Cameron Morrison(Y:2016-O:48), Casey Fitzgerald(Y:2016-O:126), Christopher Wagner, Cole Sanford(Y:2014-O:145), Daniel Zaar(Y:2014-O:126), David Bernhardt(Y:2016-O:151), Dillon Dube(Y:2016-O:74), Dylan Gambrell(Y:2016-O:70), Ethan Bear(Y:2015-O:160), Filip Hronek(Y:2016-O:59), Gustav Forsling(Y:2015-O:95), Iiro Tarkki, Jake DeBrusk(Y:2015-O:21), Jansen Harkins(Y:2015-O:23), Jesper Bratt(Y:2016-O:114), Johan Gustafsson, Joonas Lyytinen(Y:2014-O:120), Joseph Cramarossa, Josh Brittain, Kalle Kossila(Y:2016-O:160), Keegan Iverson(Y:2014-O:91), Kyle Connor(Y:2015-O:16), Kyle Rau, Kyle Wood(Y:2014-O:88), Linus Hogberg(Y:2016-O:152), Linus Lindstrom(Y:2016-O:148), Louis Belpedio(Y:2014-O:118), Lucas Wallmark(Y:2013-O:61), Mark Bell, Mark Friedman(Y:2014-O:89), Mat Clark, Matthew Tkachuk(Y:2016-O:4), Michael Brodzinski(Y:2014-O:155), Michael Spacek(Y:2015-O:75), Mike Reilly, Nick Pryor, Nikita Korostelev(Y:2015-O:84), Oskar Sundqvist(Y:2014-O:130), Pierre Engvall(Y:2014-O:158), Quentin Shore(Y:2013-O:115), Radoslav Illo, Richard Schofield, Riley Barber(Y:2012-O:127), Rudolfs Balcers(Y:2016-O:158), Ryan Donato(Y:2014-O:55), Ryan Fitzgerald(Y:2013-O:54), Ryan Hegarty, Ryan Walters(Y:2012-O:159), Sean Zimmerman, Spencer Watson(Y:2014-O:127), Thomas Novak(Y:2015-O:56), Tim Heed, Trevor Carrick(Y:2014-O:137), Troy Stecher(Y:2016-O:136), Tyler Parsons(Y:2016-O:111), Vince Dunn(Y:2015-O:49), Wade Allison(Y:2016-O:71), Will Borgen(Y:2016-O:155)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>CAR 2, VAN 5<br />
<b>Year 2018: </b>ANH 1, ANH 3, ANH 4<br />
<b>Year 2019: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5<br />
<b>Year 2020: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5<br />
<b>Year 2021: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5<br />
</div>
<h1 class="TeamProspects_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 20</h3>
Adam Marsh(Y:2015-O:159), Alex DeBrincat(Y:2016-O:22), Anthony Salinitri(Y:2016-O:141), Blake Speers(Y:2015-O:76), Borna Rendulic(Y:2014-O:133), Dante Salituro(Y:2016-O:154), Denis Godla(Y:2015-O:123), Drake Caggiula(Y:2016-O:68), Henri Ikonen(Y:2013-O:72), Lukas Sedlak, Luke Philp(Y:2015-O:156), Matt Schmalz(Y:2015-O:135), Matthew Benning(Y:2016-O:88), Riley Stadel(Y:2014-O:152), Sam Brittain, Sam Kurker(Y:2012-O:101), Sean Kuraly, Simon Stransky(Y:2016-O:120), Tim McGauley(Y:2015-O:121), Tyler Kelleher(Y:2016-O:143)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>ARZ 1, PIT 2, NSH 2, BOS 2, WSH 2, ARZ 3, NYR 3, PIT 4, TBL 4, ARZ 5, NYR 5<br />
<b>Year 2018: </b>ARZ 1, ARZ 2, SEA 2, ARZ 3, ARZ 4, ARZ 5<br />
<b>Year 2019: </b>ARZ 1, ARZ 2, ARZ 3, ARZ 4, ARZ 5<br />
<b>Year 2020: </b>ARZ 1, ARZ 2, ARZ 3, ARZ 4, ARZ 5<br />
<b>Year 2021: </b>ARZ 1, ARZ 2, ARZ 3, ARZ 4, ARZ 5<br />
</div>
<h1 class="TeamProspects_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 23</h3>
Adam Courchaine, Adam Mascherin(Y:2016-O:35), Alexander Fallstrom, Andrew Bodnarchuk, Arvid Henrikson(Y:2016-O:163), Ben Sexton, Brian Ferlin, Calvin Thurkauf(Y:2016-O:156), Charles McAvoy(Y:2016-O:17), Hudson Fasching(Y:2013-O:78), Lane MacDermid, Lars Volden, Marc Cantin, Mark Goggin, Nathan McIver, Nick Tremblay, Rasmus Asplund(Y:2016-O:25), Tim Bozon(Y:2012-O:46), Timothy Gettinger(Y:2016-O:123), Tommy Cross, Trent Whitfield, Zach McKelvie, Zane Gothberg<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>BOS 1, QUE 2, ANH 3<br />
<b>Year 2018: </b>BOS 1, BOS 4<br />
<b>Year 2019: </b>BOS 1, BOS 3, BOS 4, BOS 5<br />
<b>Year 2020: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5<br />
<b>Year 2021: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5<br />
</div>
<h1 class="TeamProspects_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 49</h3>
Aidan Muir(Y:2013-O:156), Alex Lepkowski, Alexander Dergachyov(Y:2015-O:108), Brad Navin, Brandon Gignac(Y:2016-O:58), Cameron Darcy(Y:2014-O:112), Cedrick Henley, Christian Isackson, Connor Knapp, Corey Fienhage, Daniel Catenacci, Daniel Gunnarsson(Y:2012-O:124), Dante Fabbro(Y:2016-O:26), Drew Schiestel, Gregg Sutch, Ivan Barbashev(Y:2014-O:32), Jack Roslovic(Y:2015-O:33), Jesper Lindgren, Joel Armia, Jonathan Ang(Y:2016-O:91), Jonathan Parker, Jonne Tammela(Y:2015-O:158), Jordan Kyrou(Y:2016-O:29), Jordan Schmaltz(Y:2012-O:31), Julius Nättinen(Y:2015-O:72), Justin Haché(Y:2012-O:156), Justin Jokinen, Keaton Thompson(Y:2013-O:124), Kevin Sundher, Lucas Carlsson(Y:2016-O:124), Lukas Vejdemo(Y:2015-O:94), Mackenzie MacEachern(Y:2012-O:92), Mark Adams, Matt MacKenzie, Maxim Letunov(Y:2014-O:48), Mikhail Vorobyov(Y:2015-O:126), Nathan Lieuwen, Nick Crawford, Nick Magyar(Y:2014-O:96), Noah Juulsen(Y:2015-O:30), Peter Cehlarik(Y:2013-O:79), Philippe Desrosiers(Y:2013-O:93), Ryan Pulock(Y:2013-O:28), Scott Laughton(Y:2012-O:28), Shawn Szydlowski, Steven Shipley, Taylor Cammarata(Y:2013-O:87), Victor Mete(Y:2016-O:87), Warren Foegele(Y:2014-O:64)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>BUF 1, CHI 1, PHI 1, BUF 2, ARZ 2, QUE 3, BUF 4<br />
<b>Year 2018: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, ANH 5<br />
<b>Year 2019: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5<br />
<b>Year 2020: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5<br />
<b>Year 2021: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5<br />
</div>
<h1 class="TeamProspects_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 21</h3>
Alex Roach(Y:2012-O:138), Anthony Brodeur(Y:2013-O:145), Bill Arnold, Bryan Cameron, Cam Dineen(Y:2016-O:90), Christopher Breen, Dennis Gilbert(Y:2015-O:105), Gaelan Patterson, Jack Lafontaine(Y:2016-O:109), Jerome Gauthier-Leduc, Joey Leach, John Negrin, Jordan Henry, Luke Green(Y:2016-O:63), Mitch Wahl, Nicholas Larson, Ryan Lindgren(Y:2016-O:82), Ryley Grantham, Scott Wilson, Todd Burgess(Y:2016-O:117), Yevgeni Svechnikov(Y:2015-O:20)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>CGY 2, PHI 2, CGY 4, CGY 5<br />
<b>Year 2018: </b>OTT 1, CGY 1, CGY 2, CGY 4, CGY 5<br />
<b>Year 2019: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5<br />
<b>Year 2020: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5<br />
<b>Year 2021: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5<br />
</div>
<h1 class="TeamProspects_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 22</h3>
A.J. Jenks, Austin Levi, Cedric McNicoll, Chris Durno, Cody Beach, Danny Biega, Gianluca Curcuruto(Y:2012-O:107), Gregory Hofmann, Joe Sova, Justin Krueger, Justin Soryal, Keegan Lowe, Kyle Lawson, Logan Nelson, Matt Mahalak, Matthew Pistilli, Michal Jordan, Nicolas Blanchard, Rasmus Rissanen, Tanner Kero(Y:2015-O:99), Tommi Kivisto, Tyler Stahl<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>NSH 3<br />
<b>Year 2018: </b>PIT 4, CAR 5<br />
<b>Year 2019: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5<br />
<b>Year 2020: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5<br />
<b>Year 2021: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5<br />
</div>
<h1 class="TeamProspects_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 22</h3>
Alexander Broadhurst, Ben Duffy(Y:2012-O:70), Brad Morrison(Y:2015-O:113), Braden Birch, Byron Froese, Connor Chatham(Y:2014-O:66), Danton Heinen(Y:2014-O:116), Erik Foley(Y:2015-O:81), Fredrik Olofsson(Y:2014-O:107), Gustav Olofsson(Y:2013-O:57), Joe Lavin, Johan Mattsson, Kent Simpson, Klas Dahlbeck, Ludvig Rensfeldt, Mac Carruth, Miro Karjalainen(Y:2014-O:148), Paul Phillips, Raphael Bussières(Y:2012-O:38), Rob Flick, Shawn Lalonde, Simon Danis-Pepin<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>CHI 2, CHI 3, BUF 3<br />
<b>Year 2018: </b>SEA 1, CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, PHI 5<br />
<b>Year 2019: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5<br />
<b>Year 2020: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5<br />
<b>Year 2021: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5<br />
</div>
<h1 class="TeamProspects_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 9</h3>
Brendan Warren(Y:2015-O:91), Christoph Bertschy(Y:2015-O:127), Iakov Trenin(Y:2015-O:63), Jake Newton, Joel Eriksson Ek(Y:2015-O:25), Kent Patterson, Lawson Crouse(Y:2015-O:6), Mike Carman, Zach Cohen<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>COL 1, COL 3, CHI 4<br />
<b>Year 2018: </b>COL 1, MIN 2, COL 2, TOR 3, COL 4, COL 5<br />
<b>Year 2019: </b>COL 1, COL 2, COL 3, COL 4, COL 5<br />
<b>Year 2020: </b>COL 1, COL 2, COL 3, COL 4<br />
<b>Year 2021: </b>COL 1, COL 2, COL 3, COL 4, COL 5<br />
</div>
<h1 class="TeamProspects_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 25</h3>
Anton Blidh(Y:2015-O:154), Anton Blomqvist, Anton Forsberg, Austin Madaisky, Barclay Goodrow(Y:2015-O:140), Blake Siebenaler(Y:2014-O:117), Brandon Archibald, Brandon Hickey(Y:2014-O:102), Brendan Guhle(Y:2015-O:57), Brent Regner, Drew Olson, Erik Gustafsson(Y:2012-O:79), Josh Currie(Y:2012-O:84), Kevin Lynch, Martin Ouellette, Mathieu Corbeil-Theriault, Oliver Gabriel, Remi Elie(Y:2013-O:58), Riley Stillman(Y:2016-O:150), Ryan Russell, Seth Ambroz, Steven Delisle, Theo Ruth, Thomas Larkin, Trent Vogelhuber<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>CLB 1, CLB 4, CLB 5<br />
<b>Year 2018: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5<br />
<b>Year 2019: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5<br />
<b>Year 2020: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5<br />
<b>Year 2021: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5<br />
</div>
<h1 class="TeamProspects_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 19</h3>
Alexander Nylander(Y:2016-O:10), Chad Krys(Y:2016-O:64), Daniel Audette(Y:2014-O:61), Dominic Toninato(Y:2012-O:145), Emil Molin, Evan Fitzpatrick(Y:2016-O:47), Givani Smith(Y:2016-O:73), Guillaume Gélinas(Y:2013-O:114), Hubert Labrie, Hunter Smith(Y:2014-O:45), Kale Clague(Y:2016-O:42), Luke Gazdic, Matej Stransky, Matt Grzelcyk(Y:2012-O:113), Mitchell Heard(Y:2012-O:53), Parker Wotherspoon(Y:2015-O:71), Simon Bourque, Tobias Lindberg(Y:2013-O:152), Troy Vance<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>DAL 1, LOS 1, DAL 2, NJD 2, VAN 4, DAL 4, MTL 4, COL 5, MTL 5<br />
<b>Year 2018: </b>DAL 1, VAN 1, DAL 2, QUE 2, DAL 4, CAR 4, DAL 5<br />
<b>Year 2019: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5<br />
<b>Year 2020: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5<br />
<b>Year 2021: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5<br />
</div>
<h1 class="TeamProspects_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 13</h3>
Ben Marshall, Jake Bean(Y:2016-O:20), Joe Hicketts(Y:2015-O:104), Joey Anderson(Y:2016-O:99), Louis-Marc Aubry, Marek Tvrdon, Patrick Sieloff(Y:2012-O:56), Rasmus Bodin(Y:2012-O:120), Timo Meier(Y:2015-O:9), Trevor Parkes, Tyson Jost(Y:2016-O:13), William Wrenn, Willie Coetzee<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>DET 1, MTL 1, NJD 1<br />
<b>Year 2018: </b>QUE 1, DET 1, DET 2, DET 3, DET 5<br />
<b>Year 2019: </b>DET 1, DET 2, DET 3, DET 4, DET 5<br />
<b>Year 2020: </b>DET 1, DET 2, DET 3, DET 4, DET 5<br />
<b>Year 2021: </b>DET 1, DET 2, DET 3, DET 4, DET 5<br />
</div>
<h1 class="TeamProspects_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 34</h3>
Alexander Bumagin, Andrew Peeke(Y:2016-O:44), Antti Tyrvainen, Beau Starrett(Y:2014-O:95), Brandon Davidson, Cameron Abney, Cameron Hughes(Y:2015-O:150), Colton White(Y:2015-O:155), Drew Czerwonka, Frans Tuohimaa, Hunter Tremblay, J.D. Greenway(Y:2016-O:77), Jason Bell(Y:2015-O:118), Jeremie Blain, Johan Motin, Jordan Cederholm(Y:2016-O:97), Keaton Middleton(Y:2016-O:110), Kellen Jones, Kieffer Bellows(Y:2016-O:18), Kristians Pelss, Kyle Bigos, Libor Hajek(Y:2016-O:50), Matt Buckles(Y:2013-O:139), Matthew Spencer(Y:2015-O:54), Michael McLeod(Y:2016-O:12), Milan Kytnar, Ryan Keller, Ryan Martindale, Tanner House, Tarmo Reunanen(Y:2016-O:144), Thomas Schemitsch(Y:2015-O:86), Travis Ewanyk, Tyrell Goulbourne(Y:2013-O:107), Zachary Stepan(Y:2012-O:114)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>EDM 1, EDM 2, EDM 4, EDM 5<br />
<b>Year 2018: </b>EDM 1, PIT 2, EDM 2, VAN 2, EDM 3, MTL 3, EDM 4, EDM 5<br />
<b>Year 2019: </b>EDM 1, EDM 2, VAN 2, EDM 3, EDM 4, EDM 5<br />
<b>Year 2020: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5<br />
<b>Year 2021: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5<br />
</div>
<h1 class="TeamProspects_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 45</h3>
Alex Tuch(Y:2014-O:20), Ben Harpur(Y:2013-O:138), Benjamin Gallacher, Carl Grundstrom(Y:2016-O:56), Colin Jacobs, Connor Brickley, Corey Durocher, David Pacan, Denis Stasyuk, Denis Yachmenev, Edward Wittchow, Garrett Wilson, Greg Rallo, Iiro Pakarinen, Jake Virtanen(Y:2014-O:7), Jan Kostalek(Y:2013-O:131), Joe Basaraba, John Lee, John McFarland, Jonathan Hazen, Josh Birkholz, Justin Bernhardt, Keith Seabrook, Logan Shaw, Mark Cullen, Martin Lojek, Mattias Lindstrom, Max Jones(Y:2016-O:19), Maxim Gaudreault(Y:2012-O:139), Mike Amadio(Y:2014-O:65), Ondrej Roman, R.J. Boyd, Rasmus Bengtsson, Roman Derlyuk, Rourke Chartier(Y:2014-O:80), Sergei Gayduchenko, Shane Eiserman(Y:2014-O:105), Spencer Dillon, Steven Santini(Y:2013-O:67), Tanner Kaspick(Y:2016-O:130), Taylor Raddysh(Y:2016-O:31), Thomas Hyka(Y:2012-O:93), Vaclav Karabacek(Y:2014-O:37), Ville Husso(Y:2014-O:144), Wade Megan<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>PIT 1, FLA 2, FLA 3, BOS 3, FLA 4, WSH 5, FLA 5<br />
<b>Year 2018: </b>FLA 1, FLA 2, FLA 3, FLA 4, QUE 4, FLA 5<br />
<b>Year 2019: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5<br />
<b>Year 2020: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5<br />
<b>Year 2021: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5<br />
</div>
<h1 class="TeamProspects_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 39</h3>
Adin Hill(Y:2015-O:116), Anders Bjork(Y:2014-O:125), Andrew Campbell, Anthony Cirelli(Y:2015-O:73), Anthony Mantha(Y:2013-O:8), Boris Katchouk(Y:2016-O:53), Brent Gates(Y:2015-O:101), Brett Howden(Y:2016-O:32), Caleb Jones(Y:2015-O:133), Christopher Paquette(Y:2016-O:135), David Kolomatis, David Meckler, Garrett Pilon(Y:2016-O:80), Jeff Taylor(Y:2014-O:157), Joel Lowry, Johan Fransson, Jujhar Khaira(Y:2012-O:108), Kevin Fiala(Y:2014-O:13), Mathieu Joseph(Y:2015-O:120), Maxim Kitsyn, Michael Schumacher, Mike Robinson(Y:2015-O:144), Mikey Eyssimont(Y:2016-O:164), Mikhail Lyubushin, Miles Wood(Y:2013-O:70), Mitchell Stephens(Y:2015-O:34), Nolan Stephens(Y:2016-O:147), Oleg Sosunov(Y:2016-O:157), Ray Kaunisto, Riley Tufte(Y:2016-O:61), Robbie Baillargeon(Y:2012-O:122), Robert Czarnik, Ross Colton(Y:2016-O:86), Ryan Rupert(Y:2012-O:121), Ryan Segalla(Y:2013-O:102), Ryan Shea(Y:2015-O:146), Samuel Montembeault(Y:2015-O:74), Sergei Zborovsky(Y:2015-O:103), Thomas Chabot(Y:2015-O:28)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>LOS 2, WPG 2, DET 3, EDM 3, DET 4, LOS 5, NYI 5, QUE 5<br />
<b>Year 2018: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5, OTT 5<br />
<b>Year 2019: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5<br />
<b>Year 2020: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5<br />
<b>Year 2021: </b>LOS 1, LOS 2, LOS 3, LOS 4, LOS 5<br />
</div>
<h1 class="TeamProspects_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Anthony Hamburg, Bjorn Krupp, Brycen Martin(Y:2014-O:74), Chad Rau, Chay Genoway, Colton Jobke, Connor Brown(Y:2012-O:130), David McIntyre, Dennis Endras, Filip Chlapik(Y:2015-O:35), Jarod Palmer, Jeff Penner, Joel Broda, John Marino(Y:2015-O:149), Jon Disalvatore, Jonathan-Ismael Diaby(Y:2013-O:60), Josh Caron, Julian Walker, Kevin Labanc(Y:2014-O:138), Kris Fredheim, Kristopher Foucault, Kyle Medvec, Mario Lucia, Michael Downing(Y:2013-O:133), Mikko Lehtonen, Nick Moutrey(Y:2013-O:153), Nick Seeler, Sean Lorenz, Sergei Kalinin(Y:2015-O:129), Stephen Michalek<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>MIN 1, WSH 3, MTL 3, SJS 3, MIN 5<br />
<b>Year 2018: </b>MIN 1, MIN 3, MIN 5, QUE 5<br />
<b>Year 2019: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5<br />
<b>Year 2020: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5<br />
<b>Year 2021: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5<br />
</div>
<h1 class="TeamProspects_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 27</h3>
Alexander Kerfoot(Y:2012-O:157), Alexis Vanier(Y:2014-O:60), Anthony Beauvillier(Y:2015-O:17), Anthony Richard(Y:2015-O:85), Clark Bishop(Y:2014-O:93), Daniel Sprong(Y:2015-O:31), Daniel Walcott(Y:2014-O:111), Devin Shore(Y:2012-O:94), Dominic Turgeon(Y:2014-O:69), Eric Locke(Y:2012-O:110), Felix Girard(Y:2013-O:97), Francis Beauvillier(Y:2012-O:61), Frederic Allard(Y:2016-O:51), Ian McCoshen(Y:2013-O:42), Jérémy Grégoire(Y:2013-O:110), Mac Weegar(Y:2013-O:113), Mark MacMillan, Maxime Lajoie(Y:2016-O:138), Nicolas Roy(Y:2015-O:60), Nikita Gusev(Y:2016-O:104), Olivier Leblanc(Y:2014-O:151), Rinat Valiev(Y:2014-O:143), Ryan Olsen(Y:2012-O:125), Sam Steel(Y:2016-O:24), Samuel Blais(Y:2014-O:98), Tanner Richard(Y:2012-O:48), William Lockwood(Y:2016-O:89)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>NYI 2, PHI 3, MIN 4, BOS 4, ARZ 4, PIT 5, NSH 5<br />
<b>Year 2018: </b>MTL 1, MTL 2, BOS 2, CAR 3, MTL 4, STL 4, MTL 5, VAN 5, SEA 5, SJS 5<br />
<b>Year 2019: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5<br />
<b>Year 2020: </b>MTL 1, MTL 2, MTL 3, MTL 4, TOR 5, MTL 5<br />
<b>Year 2021: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5<br />
</div>
<h1 class="TeamProspects_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 20</h3>
Brady Vail(Y:2012-O:60), Carter Hart(Y:2016-O:38), Chase Balisy, Chase Lang(Y:2014-O:142), Cristoval Nieves(Y:2012-O:87), Dylan Blujus(Y:2012-O:50), Dylan Sadowy(Y:2014-O:82), Gabryel Boudreau(Y:2013-O:89), John Draeger(Y:2012-O:91), John Quenneville(Y:2014-O:35), Jonas Johansson(Y:2014-O:114), Josh Mahura(Y:2016-O:93), Kevin Roy(Y:2012-O:58), Kyle Platzer(Y:2013-O:130), Magnus Hellberg, Michael Prapavessis(Y:2014-O:146), Nicholas Caamano(Y:2016-O:137), Simon Karlsson, Tristan Jarry(Y:2013-O:68), Victor Olofsson(Y:2014-O:123)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>NSH 1, NSH 4, QUE 4, OTT 5, WPG 5<br />
<b>Year 2018: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5<br />
<b>Year 2019: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5<br />
<b>Year 2020: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5<br />
<b>Year 2021: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5<br />
</div>
<h1 class="TeamProspects_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 40</h3>
Alexander Mikhailishin, Andy Welinski, Benjamin Finkelstein(Y:2016-O:153), Blake Coleman, Blake Pietila, Cameron clarke(Y:2016-O:85), Chad Wiseman, Christian Wolanin(Y:2015-O:134), Corbin McPherson, Curtis Gedig, Dan Kelly, Daniel Altshuller(Y:2012-O:103), Daniel Vladar(Y:2015-O:122), David Wohlberg, Derek Rodwell, Dysin Mayo(Y:2014-O:128), Gabriel Carlsson(Y:2015-O:38), Harry Young, Ivan Khomutov, Jacob Middleton(Y:2014-O:160), Jean-Sebastien Berube, Joe Faust, Joona Koppanen(Y:2016-O:72), Kory Nagy, Mark McNeill, Matt Anderson, Matthew Mistele(Y:2014-O:113), Mauro Jorg, Maxime Clermont, Michael Sislo, Mike Hoeffel, Nathan Perkovich, Ondrej Kase(Y:2014-O:129), Patrick Daly, Petr Vrana, Reece Scarlett, Ryan Pilon(Y:2015-O:53), Seth Helgeson, Valeri Klimov, Viktor Crus-Rydberg(Y:2013-O:128)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>WSH 1, DET 2, MTL 2, VAN 2, NJD 3, CAR 3, VAN 3, NJD 4, WSH 4, SEA 5<br />
<b>Year 2018: </b>NJD 1, NJD 2, NJD 4, NJD 5<br />
<b>Year 2019: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5<br />
<b>Year 2020: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5<br />
<b>Year 2021: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5<br />
</div>
<h1 class="TeamProspects_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 19</h3>
Andong Song(Y:2015-O:107), Brendan Gaunce(Y:2012-O:25), Brenden Kichton, Callum Booth(Y:2015-O:80), Corey Trivino, Dennis Cholowski(Y:2016-O:30), Jérémy Roy(Y:2015-O:32), John Persson, Julien Gauthier(Y:2016-O:21), Kerby Rychel(Y:2013-O:23), Kirill Kabanov, Logan Brown(Y:2016-O:14), Lucas Johansen(Y:2016-O:43), Milan Kolena(Y:2013-O:100), Olli Juolevi(Y:2016-O:11), Robbie Russo, Santeri Saari(Y:2013-O:146), Troy Bourke(Y:2012-O:136), Vili Saarijarvi(Y:2015-O:106)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>NYI 1, NYI 3, LOS 3, OTT 3, TOR 3, NYI 4<br />
<b>Year 2018: </b>NYI 1, NYI 2, CAR 2, NYI 3, NJD 3, NYI 4, VAN 4, NYI 5<br />
<b>Year 2019: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5<br />
<b>Year 2020: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5<br />
<b>Year 2021: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5<br />
</div>
<h1 class="TeamProspects_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 45</h3>
Andrew Yogan, Anton Karlsson(Y:2014-O:76), Blake Parlett, Brendan Bell, Casey Nelson(Y:2016-O:149), Chad Kolarik, Chris Chappell, Danny Hobbs, David Kveton, Francois Bouchard, Glenn Gawdin(Y:2015-O:117), Greg Beller, Henrik Borgstrom(Y:2016-O:28), Ilkka Heikkinen, Ilya Gorokhov, Ivan Baranka, Jason Missiaen, Jason Wilson, Jeremy Bracco(Y:2015-O:40), Joni Nikko, Jyri Niemi, Lee Baldwin, Lukas Zeliska, Matej Tomek(Y:2015-O:83), Michael St. Croix, Mikhail Pashnin, Nathan Noel(Y:2015-O:109), Nikolay Goldobin(Y:2014-O:30), Pascal Laberge(Y:2016-O:39), Peter Ceresnak, Philipp Grubauer, Randy McNaught, Roman Psurny, Ryan Bourque, Sam Klassen, Samuel Noreau, Scott Stajcer, Shane McColgan, Steven Fogarty, Tanner Pearson, Tommy Grant, Trent Frederic(Y:2016-O:34), Vladislav Gavrikov(Y:2015-O:128), William Lagesson(Y:2014-O:104), Zdenek Bahensky<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>NYR 1, NYR 2, SJS 2, OTT 2, PIT 3, NYR 4<br />
<b>Year 2018: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5<br />
<b>Year 2019: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5<br />
<b>Year 2020: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5<br />
<b>Year 2021: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5<br />
</div>
<h1 class="TeamProspects_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 26</h3>
Alex Lintuniemi(Y:2014-O:75), Andre Petersson, Brandon Halverson(Y:2014-O:83), Bryce Aneloski, Colin White(Y:2015-O:14), Darren Kramer, Dylan Labbé(Y:2013-O:155), Filip Ahl(Y:2015-O:110), Geoff Kinrade, Ilya Zubov, Jordan Fransoo, Joseph Woll(Y:2016-O:66), Linus Arnesson(Y:2013-O:59), Logan Stanley(Y:2016-O:23), Luke Opilka(Y:2015-O:142), Mason Geertsen(Y:2013-O:127), Nick Baptiste(Y:2013-O:91), Reid Duke(Y:2014-O:147), Robin Norell(Y:2013-O:159), Ryan Collins(Y:2014-O:51), Ryan Kujawinski(Y:2013-O:123), Ryan Mantha(Y:2014-O:115), Sonny Milano(Y:2014-O:19), Tage Thompson(Y:2016-O:33), Wacey Hamilton, William Bitten(Y:2016-O:62)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>OTT 1, QUE 1, SJS 1, SEA 1, CGY 1, OTT 4<br />
<b>Year 2018: </b>OTT 2, OTT 3, COL 3, OTT 4<br />
<b>Year 2019: </b>OTT 1, VAN 1, OTT 2, OTT 3, OTT 4, OTT 5<br />
<b>Year 2020: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5<br />
<b>Year 2021: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5<br />
</div>
<h1 class="TeamProspects_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 23</h3>
Andrei Popov, Andrew Rowe, Brinson Pasichnuk(Y:2016-O:119), Chris Martenet(Y:2015-O:114), Colin Suellentrop, Denis Bodrov, Ethan Werek, Harry Zolnierczyk, Jakub Kovar, Jon Kalinski, Kasper Bjorkqvist(Y:2016-O:105), Keegan Kolesar(Y:2015-O:87), Luke Pither, Markus Niemelainen(Y:2016-O:69), Mike Testwuide, Nathan Bastian(Y:2016-O:55), Nick Luukko, Noah Gregor(Y:2016-O:102), Paul Thompson, Petr Placek, Rem Pitlick(Y:2016-O:115), Shane Harper, Tyler Brown<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>TBL 2, STL 2, CGY 3, SJS 4, SJS 5, CAR 5, CHI 5<br />
<b>Year 2018: </b>PHI 1, CAR 1, PHI 2, CGY 3, SEA 3, PHI 4<br />
<b>Year 2019: </b>PHI 1, PHI 2, SEA 2, PHI 3, PHI 4, PHI 5<br />
<b>Year 2020: </b>PHI 1, PHI 2, PHI 3, PHI 4, PHI 5<br />
<b>Year 2021: </b>PHI 1, PHI 2, PHI 3, PHI 4, PHI 5<br />
</div>
<h1 class="TeamProspects_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 9</h3>
Colin McDonald, David Quenneville(Y:2016-O:98), Evgeni Isakov, Mattias Modig, Nicholas D'Agostino, Patrick Ehelechner, Reid McNeill, Sergei Anshakov, Zach Sill<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>DAL 5, BUF 5<br />
<b>Year 2018: </b><br />
<b>Year 2019: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5<br />
<b>Year 2020: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5<br />
<b>Year 2021: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5<br />
</div>
<h1 class="TeamProspects_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 8</h3>
Alex Biega, Alexis Pepin(Y:2014-O:67), Bokondji Imama(Y:2014-O:131), Dmitry Sokolov(Y:2016-O:108), Ivan Nalimov(Y:2014-O:99), Mason McDonald(Y:2014-O:38), Raphaël Kuonen, Tyler Motte(Y:2013-O:111)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>SEA 2, LOS 4<br />
<b>Year 2018: </b>BOS 3, QUE 3<br />
<b>Year 2019: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5<br />
<b>Year 2020: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5<br />
<b>Year 2021: </b>QUE 1, QUE 2, QUE 3, QUE 4, QUE 5<br />
</div>
<h1 class="TeamProspects_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 19</h3>
Alex Schoenborn(Y:2014-O:68), Alexandre Fortin(Y:2015-O:112), Brendan Woods(Y:2012-O:118), Christopher Crane, Gabriel Fontaine(Y:2016-O:67), Isaac MacLeod, J.P. Anderson, Jacob Neveu(Y:2016-O:83), Jean-Christophe Beaudin(Y:2015-O:66), Jérémy Lauzon(Y:2015-O:37), Joe Wegwerth(Y:2014-O:141), Justin Sefton, Manuel Wiederer(Y:2016-O:132), Mathieu Boucher(Y:2016-O:140), Max Gaede, Nathan Walker(Y:2014-O:87), Philippe Myers(Y:2015-O:130), Samuel Harvey(Y:2016-O:96), Stephon Williams(Y:2013-O:154)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>FLA 1, WPG 4, ANH 4, BOS 5, ANH 5, PHI 5<br />
<b>Year 2018: </b>SJS 1, WSH 1, SJS 2, ANH 2, SJS 3, SJS 4<br />
<b>Year 2019: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5<br />
<b>Year 2020: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5<br />
<b>Year 2021: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5<br />
</div>
<h1 class="TeamProspects_SEA"><a id="SeattleSaints">Seattle Saints</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Saints Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#SeattleSaints">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#SeattleSaints">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#SeattleSaints">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#SeattleSaints">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#SeattleSaints">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#SeattleSaints">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#SeattleSaints">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#SeattleSaints">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#SeattleSaints">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#SeattleSaints">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#SeattleSaints">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#SeattleSaints">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleSaints');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleSaints" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 4</h3>
Connor Clifton(Y:2013-O:160), John Nyberg(Y:2014-O:150), Pavel Jenys(Y:2014-O:149), Tyler Ganly(Y:2013-O:148)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>SEA 4<br />
<b>Year 2018: </b>PIT 1, PHI 3<br />
<b>Year 2019: </b>SEA 1, SEA 3, SEA 4, SEA 5<br />
<b>Year 2020: </b>SEA 1, SEA 2, SEA 3, SEA 4, SEA 5<br />
<b>Year 2021: </b>SEA 1, SEA 2, SEA 3, SEA 4, SEA 5<br />
</div>
<h1 class="TeamProspects_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 51</h3>
Andrey Makarov(Y:2012-O:160), Austin Lemieux(Y:2016-O:159), Brennan Evans, Brett Ponich, Brock Beukeboom, Cade Fairchild, Carl Dahlstrom(Y:2013-O:85), Chase De Leo(Y:2014-O:58), Clayton Keller(Y:2016-O:9), Darian Dziurzynski, David Shields, Dennis Yan(Y:2015-O:64), Dimitri Semin, Eric Comrie(Y:2013-O:52), Evgeny Skachkov, Guillaume Brisebois(Y:2015-O:59), Jack Glover(Y:2014-O:63), Jakob Forsbacka Karlsson(Y:2015-O:65), Jay Barriball, Jens Lööke(Y:2015-O:88), Jimmy Lodge(Y:2013-O:65), Jonas Junland, Jonathan Racine, Jordan Greenway(Y:2015-O:58), Kyle Hagel, Ludwig Bystrom(Y:2012-O:73), Luke Kunin(Y:2016-O:15), Marcus Hogberg(Y:2013-O:74), Markus Nutivaara(Y:2016-O:92), Max Gardiner, Maxwell Tardy, Miroslav Svoboda(Y:2015-O:151), Nick Merkley(Y:2015-O:18), Nicolas Meloche(Y:2015-O:42), Niklas Hansson(Y:2013-O:90), Niklas Lundstrom, Niko Hovinen, Patrick Harper(Y:2016-O:112), Paul Karpowich, Ryan Turek, Sergei Andronov, Tommy Vannelli(Y:2013-O:53), Travis Erstad, Trevor Nill, Troy Josephs(Y:2013-O:147), Ty Ronning(Y:2016-O:139), Tyler Benson(Y:2016-O:41), Vincent Dunn(Y:2013-O:95), Will Butcher(Y:2013-O:94), Yannick Veilleux, Zack Nastasiuk(Y:2013-O:63)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>STL 1, CAR 1, STL 3, MIN 3, CAR 4, STL 5<br />
<b>Year 2018: </b>STL 1, STL 2, PIT 5<br />
<b>Year 2019: </b>STL 1, STL 2, STL 3, STL 4, STL 5<br />
<b>Year 2020: </b>STL 1, STL 2, STL 3, STL 4, STL 5<br />
<b>Year 2021: </b>STL 1, STL 2, STL 3, STL 4, STL 5<br />
</div>
<h1 class="TeamProspects_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 25</h3>
Adam Wilcox, Alex Hutchings, Brendan O'Donnell, Carl Neill(Y:2015-O:131), Charles Landry, Dmytro Timashov(Y:2015-O:67), Dylan Strome(Y:2015-O:4), Etienne Marcoux, Fabrice Herzog(Y:2013-O:71), François Brassard(Y:2012-O:129), Geoffrey Schemitsch, Guillaume Gauthier(Y:2014-O:108), John Gillies(Y:2012-O:97), Linus Nässen(Y:2016-O:122), Luke Witkowski, Mathieu Roy, Mikael Tam(Y:2012-O:153), Nicolas Aubé-Kubel(Y:2014-O:44), Olivier Archambault, Pat Nagle, Riku Helenius, Ryan Culkin(Y:2012-O:89), Tucker Poolman(Y:2013-O:120), Vitaly Abramov(Y:2016-O:45), Yegor Korshkov(Y:2016-O:40)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>TBL 1, VAN 1, TBL 3, DAL 3, TBL 5<br />
<b>Year 2018: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5<br />
<b>Year 2019: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5<br />
<b>Year 2020: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5<br />
<b>Year 2021: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5<br />
</div>
<h1 class="TeamProspects_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 27</h3>
Andrew Crescenzi, Andrew MacWilliam, Brad Ross, Dale Mitchell, David Broll, Dennis Robertson, Eric Knodel, Garret Sparks, Grant Rollheiser, Greg Scott, Ilya Lyubushkin(Y:2013-O:121), Jamie Devane, Josh Leivo, Josh Nicholls, Justin Kirkland(Y:2014-O:57), Kasperi Kapanen(Y:2014-O:18), Kenny Ryan, Laurent Dauphin(Y:2013-O:40), Max Everson, Petter Granberg, Samuel Girard(Y:2016-O:16), Simon Gysbers, Sondre Olden, Tom Nilsson, Tony Cameranesi, Tyler Brenner, Zachary Fucale(Y:2013-O:15)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>TOR 1, TOR 2 [CON: WPG], ANH 2, TOR 4, TOR 5<br />
<b>Year 2018: </b>TOR 1, TOR 2, TOR 4, TOR 5<br />
<b>Year 2019: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5<br />
<b>Year 2020: </b>TOR 1, TOR 2, TOR 3, TOR 4<br />
<b>Year 2021: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5<br />
</div>
<h1 class="TeamProspects_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 14</h3>
Alex Peters(Y:2014-O:122), Austin Wagner(Y:2015-O:97), Brandon Whitney(Y:2012-O:158), Carsen Twarynski(Y:2016-O:101), Connor Hall(Y:2016-O:94), Cooper Marody(Y:2015-O:98), David Honzik, Evan Cowley(Y:2013-O:126), Julius Bergman(Y:2014-O:54), Matt Filipe(Y:2016-O:145), Matteson Iacopelli(Y:2014-O:90), Matthew Cairns(Y:2016-O:146), Miles Gendron(Y:2014-O:86), Spencer Smallman(Y:2015-O:143)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>CLB 3, DET 5, NJD 5<br />
<b>Year 2018: </b>PIT 3, VAN 3, DAL 3, STL 3, DET 4, BOS 5, STL 5<br />
<b>Year 2019: </b>BOS 2, VAN 3, VAN 4, VAN 5<br />
<b>Year 2020: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5<br />
<b>Year 2021: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5<br />
</div>
<h1 class="TeamProspects_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 44</h3>
Aaron Haydon(Y:2014-O:136), Adam Musil(Y:2015-O:111), Andrew Mangiapane(Y:2015-O:92), Anthony DeAngelo(Y:2014-O:22), Brandon Anderson, Brayden Chizen(Y:2016-O:162), Brett Flemming, Caleb Herbert, Charlie Lindgren(Y:2016-O:78), Chaz Reddekopp(Y:2015-O:145), Christian Djoos, Cliff Pu(Y:2016-O:46), Dominik Simon(Y:2015-O:124), Dustin Stevenson, Garrett Haar, Garrett Mitchell, Hardy Haman-Aktell(Y:2016-O:142), Hudson Elynuik(Y:2016-O:79), J.J. Piccinich(Y:2016-O:133), Jesse Gabrielle(Y:2015-O:132), John Hayden(Y:2013-O:38), Juuse Saros(Y:2013-O:49), Ken Appleby(Y:2015-O:137), Kyle Capobianco(Y:2015-O:79), Loïc Leduc(Y:2012-O:109), Markus Nurmi(Y:2016-O:134), Mathias From(Y:2016-O:121), Matt PetGrave(Y:2012-O:142), Matthew Bradley(Y:2015-O:141), Mikhail Maltsev(Y:2016-O:113), Mikhail Sergachev(Y:2016-O:7), Mitchell Vande Sompel(Y:2015-O:50), Patrick Koudys, Patrick Wey, Pavel Buchnevich(Y:2013-O:45), Pavel Kraskovsky(Y:2014-O:103), Pavel Zacha(Y:2015-O:5), Radovan Bondra(Y:2015-O:157), Roope Hintz(Y:2015-O:68), Samuel Carrier, Sean Day(Y:2016-O:57), Steffen Soberg, Travis Boyd, Tyler Soy(Y:2016-O:125)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>COL 2, MIN 2, WPG 3, PHI 4, COL 4, STL 4<br />
<b>Year 2018: </b>WSH 2, WSH 3, WSH 4, WSH 5<br />
<b>Year 2019: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5<br />
<b>Year 2020: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5, COL 5<br />
<b>Year 2021: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5<br />
</div>
<h1 class="TeamProspects_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL6-PLF-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL6-PLF-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL6-PLF-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL6-PLF-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL6-PLF-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL6-PLF-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL6-PLF-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL6-PLF-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL6-PLF-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL6-PLF-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL6-PLF-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL6-PLF-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 25</h3>
Aaron Harstad, Artur Kayumov(Y:2016-O:49), Austen Brassard, Cody Sol, Connor Ingram(Y:2016-O:106), Daultan Leveille, Dennis Everberg(Y:2014-O:153), Deven Sideroff(Y:2015-O:93), Eamon McAdam(Y:2013-O:125), Eetu Tuulola(Y:2016-O:103), Graham Knott(Y:2015-O:61), Jacob Moverare(Y:2016-O:118), Jakub Zboril(Y:2015-O:12), Janne Kuokkanen(Y:2016-O:36), Jordan Sambrook(Y:2016-O:95), Jordan Samuels-Thomas, Juho Lammikko(Y:2014-O:59), Kendall McFaull, Matthew Phillips(Y:2016-O:129), Maxime Fortier(Y:2016-O:116), Oskar Lindblom(Y:2015-O:148), Otto Koivula(Y:2016-O:100), Ryan Gropp(Y:2015-O:55), Yaroslav Kosov, Zachary Yuen<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2017: </b>WPG 1, ANH 1, CLB 2, SEA 3<br />
<b>Year 2018: </b>WPG 1, WPG 2, WPG 3, SEA 4, WPG 4, MIN 4, WPG 5<br />
<b>Year 2019: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5<br />
<b>Year 2020: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5<br />
<b>Year 2021: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5<br />
</div>
<?php include "Footer.php";?>
