<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleKraken">Seattle Kraken</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#VegasGoldenKnights">Vegas Golden Knights</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brendan Leipsic          Dylan Strome             Brock Boeser             25     1   2  2  
 2 Ryan Strome              Zach Sanford             Dustin Brown             25     1   2  2  
 3 Jesperi Kotkaniemi       Lawson Crouse            Martin Necas             25     1   2  2  
 4 Mike Amadio              Daniel Sprong            Chris Wagner             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Alexander Edler                                   25     1   2  2  
 2 Zachary Werenski         Jarred Tinordi                                    25     1   2  2  
 3 Brandon Montour          Markus Nutivaara                                  25     1   2  2  
 4 Cam Fowler               Alexander Edler                                   25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brendan Leipsic          Dylan Strome             Brock Boeser             60     1   2  2  
 2 Ryan Strome              Zach Sanford             Dustin Brown             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Alexander Edler                                   60     1   2  2  
 2 Zachary Werenski         Jarred Tinordi                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brock Boeser             Brendan Leipsic          60     1   2  2  
 2 Ryan Strome              Dylan Strome             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Alexander Edler          60     1   2  2  
 2 Zachary Werenski         Jarred Tinordi           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brock Boeser                                      60     1   2  2  
 2 Brendan Leipsic                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Alexander Edler          60     1   2  2  
 2 Zachary Werenski         Jarred Tinordi           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brock Boeser             Brendan Leipsic          60     1   2  2  
 2 Ryan Strome              Dylan Strome             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Alexander Edler          60     1   2  2  
 2 Zachary Werenski         Jarred Tinordi           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brendan Leipsic          Dylan Strome             Brock Boeser             Cam Fowler               Alexander Edler          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brendan Leipsic          Dylan Strome             Brock Boeser             Cam Fowler               Alexander Edler          

<b>Goaltenders</b>
Starting : Jacob Markstrom          
Backup : Scott Darling            

<b>Extra Forwards</b>
Normal : Lawson Crouse, Jesperi Kotkaniemi, Martin Necas - PP : Lawson Crouse, Jesperi Kotkaniemi - PK : Martin Necas
<b>Extra Defensemen</b>
Normal : Brandon Montour, Markus Nutivaara, Zachary Werenski - PP : Brandon Montour - PK : Markus Nutivaara, Zachary Werenski
<b>Penalty Shots</b>
Brock Boeser, Brendan Leipsic, Ryan Strome, Dylan Strome, Zach Sanford
<b>Custom OT Lines Forwards</b>
Brock Boeser, Brendan Leipsic, Ryan Strome, Dylan Strome, Zach Sanford, Lawson Crouse, Jesperi Kotkaniemi, Dustin Brown, Martin Necas, Mike Amadio
<b>Custom OT Lines Defensemen</b>
Cam Fowler, Alexander Edler, Zachary Werenski, Jarred Tinordi, Brandon Montour

<b>Scratches</b>
Andrey Pedan (Healthy), Rudolfs Balcers (Healthy), Joey Laleggia (Healthy)</pre></div>
<h1 class="TeamLinesPro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Couture            Oskar Lindblom           Steven Stamkos           32     0   1  4  
 2 John Tavares             Bo Horvat                Sam Bennett              28     0   1  4  
 3 Eric Staal               T.J. Oshie               Jeff Carter              23     0   1  4  
 4 Cole Cassels             Noel Acciari             Wayne Simmonds           17     2   1  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Bogosian            Hampus Lindholm                                   44     1   3  1  
 2 Brandon Gormley          Travis Sanheim                                    28     1   3  1  
 3 Duncan Keith             Ryan Suter                                        24     1   3  1  
 4 Hampus Lindholm          Zach Bogosian                                     4      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Oskar Lindblom           Steven Stamkos           60     0   1  4  
 2 Logan Couture            Bo Horvat                Sam Bennett              40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Bogosian            Hampus Lindholm                                   75     1   1  3  
 2 Brandon Gormley          Travis Sanheim                                    25     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cole Cassels             Noel Acciari             70     1   4  0  
 2 Eric Staal               Jeff Carter              30     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Zach Bogosian            60     1   4  0  
 2 Hampus Lindholm          Brandon Gormley          40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Cole Cassels                                      60     0   5  0  
 2 Eric Staal                                        40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Zach Bogosian            60     0   5  0  
 2 Travis Sanheim           Hampus Lindholm          40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Eric Staal               Sam Bennett              60     2   3  0  
 2 T.J. Oshie               Oskar Lindblom           40     2   3  0  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Gormley          Travis Sanheim           60     2   3  0  
 2 Ryan Suter               Duncan Keith             40     2   3  0  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Tavares             Steven Stamkos           Logan Couture            Hampus Lindholm          Zach Bogosian            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cole Cassels             Logan Couture            Sam Bennett              Brandon Gormley          Zach Bogosian            

<b>Goaltenders</b>
Starting : Braden Holtby            
Backup : Petr Mrazek              

<b>Extra Forwards</b>
Normal : Logan Couture, Steven Stamkos, Noel Acciari - PP : Steven Stamkos, Eric Staal - PK : Jeff Carter
<b>Extra Defensemen</b>
Normal : Duncan Keith, Brandon Gormley, Travis Sanheim - PP : Brandon Gormley - PK : Travis Sanheim, Brandon Gormley
<b>Penalty Shots</b>
Steven Stamkos, Logan Couture, John Tavares, Sam Bennett, Bo Horvat
<b>Custom OT Lines Forwards</b>
John Tavares, Steven Stamkos, Logan Couture, Oskar Lindblom, T.J. Oshie, Bo Horvat, Eric Staal, Sam Bennett, Jeff Carter, Noel Acciari
<b>Custom OT Lines Defensemen</b>
Hampus Lindholm, Zach Bogosian, Brandon Gormley, Travis Sanheim, Ryan Suter

<b>Scratches</b>
Sam Steel (Healthy), Keegan Kanzig (Healthy), Raman Hrabarenka (Healthy)</pre></div>
<h1 class="TeamLinesPro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Marchand            Jake Guentzel            Ondrej Kase              34     0   1  4  
 2 Nico Hischier            Jamie Benn               Bobby Ryan               33     0   2  3  
 3 Dillon Dube              Rickard Rakell           Rick Nash                23     0   3  2  
 4 Frédérik Gauthier        Marko Dano               Scott Kosmachuk          10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     John Carlson                                      32     0   2  3  
 2 Charlie McAvoy           Mario Ferraro                                     32     0   2  3  
 3 Marco Scandella          Eric Gelinas                                      28     0   3  2  
 4 John Carlson             Marco Scandella                                   8      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Marchand            Jake Guentzel            Ondrej Kase              55     0   0  5  
 2 Nico Hischier            Rickard Rakell           Bobby Ryan               45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Charlie McAvoy           John Carlson                                      55     0   0  5  
 2 Eric Gelinas             Oliver Ekman-Larsson                              45     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brad Marchand            Ondrej Kase              60     0   5  0  
 2 Frédérik Gauthier        Dillon Dube              40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Marco Scandella          50     0   5  0  
 2 Mario Ferraro            John Carlson             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brad Marchand                                     60     0   5  0  
 2 Dillon Dube                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Marco Scandella          50     0   5  0  
 2 Mario Ferraro            John Carlson             50     0   0  5  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nico Hischier            Jake Guentzel            50     0   1  4  
 2 Brad Marchand            Ondrej Kase              50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Charlie McAvoy           John Carlson             60     0   2  3  
 2 Oliver Ekman-Larsson     Eric Gelinas             40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Marchand            Jake Guentzel            Ondrej Kase              John Carlson             Charlie McAvoy           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Marchand            Dillon Dube              Ondrej Kase              Marco Scandella          Oliver Ekman-Larsson     

<b>Goaltenders</b>
Starting : Igor Shestyorkin         
Backup : Pavel Francouz           

<b>Extra Forwards</b>
Normal : Brad Marchand, Jake Guentzel, Nico Hischier - PP : Jake Guentzel, Brad Marchand - PK : Brad Marchand
<b>Extra Defensemen</b>
Normal : John Carlson, Charlie McAvoy, Oliver Ekman-Larsson - PP : John Carlson - PK : Marco Scandella, Oliver Ekman-Larsson
<b>Penalty Shots</b>
Jamie Benn, Bobby Ryan, Brad Marchand, Jake Guentzel, Nico Hischier
<b>Custom OT Lines Forwards</b>
Brad Marchand, Jake Guentzel, Nico Hischier, Ondrej Kase, Rickard Rakell, Bobby Ryan, Marko Dano, Jamie Benn, Frédérik Gauthier, Dillon Dube
<b>Custom OT Lines Defensemen</b>
John Carlson, Charlie McAvoy, Oliver Ekman-Larsson, Mario Ferraro, Eric Gelinas

<b>Scratches</b>
Cameron Gaunce (Healthy), Vladimir Tkachev (Healthy), Derrick Pouliot (Suspend), Hudson Fasching (Healthy)</pre></div>
<h1 class="TeamLinesPro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikhail Grigorenko       Jonathan Drouin          Adam Erne                27     1   2  2  
 2 Charlie Coyle            Jakub Voracek            Jordan Eberle            27     1   2  2  
 3 Nick Cousins             Jiri Sekac               Jaedon Descheneau        26     1   2  2  
 4 Jaedon Descheneau        Pierre Engvall           Luke Kunin               20     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Nathan Beaulieu                                   27     1   2  2  
 2 Tyler Myers              Dylan Olsen                                       27     1   2  2  
 3 Connor Carrick           Madison Bowey                                     25     1   2  2  
 4 Trevor Murphy            Connor Carrick                                    21     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikhail Grigorenko       Jonathan Drouin          Jordan Eberle            50     0   1  4  
 2 Charlie Coyle            Jakub Voracek            Adam Erne                50     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Tyler Myers                                       50     0   2  3  
 2 Nick Cousins             Dylan Olsen                                       50     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaedon Descheneau        Adam Erne                50     1   3  1  
 2 Luke Kunin               Jordan Eberle            50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Tyler Myers              50     1   3  1  
 2 Dylan Olsen              Nathan Beaulieu          50     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jaedon Descheneau                                 51     1   4  0  
 2 Jordan Eberle                                     49     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Tyler Myers              50     1   4  0  
 2 Dylan Olsen              Nathan Beaulieu          50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Charlie Coyle            Adam Erne                50     1   2  2  
 2 Jaedon Descheneau        Jordan Eberle            50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Tyler Myers              50     1   2  2  
 2 Dylan Olsen              Nathan Beaulieu          50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Charlie Coyle            Jonathan Drouin          Jordan Eberle            Kevin Shattenkirk        Tyler Myers              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jaedon Descheneau        Adam Erne                Jordan Eberle            Kevin Shattenkirk        Tyler Myers              

<b>Goaltenders</b>
Starting : James Reimer             
Backup : Jared Coreau             

<b>Extra Forwards</b>
Normal : Nick Cousins, Jaedon Descheneau, Pierre Engvall - PP : Nick Cousins, Jaedon Descheneau - PK : Jordan Eberle
<b>Extra Defensemen</b>
Normal : Connor Carrick, Madison Bowey, Kevin Shattenkirk - PP : Connor Carrick - PK : Tyler Myers, Connor Carrick
<b>Penalty Shots</b>
Jonathan Drouin, Jordan Eberle, Charlie Coyle, Jakub Voracek, Mikhail Grigorenko
<b>Custom OT Lines Forwards</b>
Charlie Coyle, Jordan Eberle, Jakub Voracek, Jonathan Drouin, Mikhail Grigorenko, Luke Kunin, Nick Cousins, Jaedon Descheneau, Jiri Sekac, Pierre Engvall
<b>Custom OT Lines Defensemen</b>
Kevin Shattenkirk, Tyler Myers, Madison Bowey, Trevor Murphy, Connor Carrick

<b>Scratches</b>
Robin Press (Healthy), Maxim Letunov (Healthy)</pre></div>
<h1 class="TeamLinesPro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matt Duchene             Teuvo Teravainen         Marcus Johansson         36     1   1  3  
 2 Alex Galchenyuk          Anthony Duclair          Chris Tierney            33     1   1  3  
 3 Unknown Player           Ryan MacInnis            Tomas Tatar              25     1   2  2  
 4 Barrett Hayton           Phillip Di Giuseppe      Adrian Kempe             6      2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Hamonic           Damon Severson                                    36     1   2  2  
 2 Thomas Chabot            Olli Maatta                                       34     1   2  2  
 3 Tyler Wotherspoon        Ryan Lindgren                                     22     1   2  2  
 4 Tyler Wotherspoon        Olli Maatta                                       8      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matt Duchene             Teuvo Teravainen         Alex Galchenyuk          60     0   0  5  
 2 Marcus Johansson         Anthony Duclair          Tomas Tatar              40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Hamonic           Olli Maatta                                       60     1   0  4  
 2 Damon Severson           Thomas Chabot                                     40     1   0  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Tierney            Ryan MacInnis            60     0   5  0  
 2 Unknown Player           Adrian Kempe             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Olli Maatta              60     1   4  0  
 2 Damon Severson           Tyler Wotherspoon        40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan MacInnis                                     60     0   5  0  
 2 Chris Tierney                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Olli Maatta              60     0   5  0  
 2 Damon Severson           Tyler Wotherspoon        40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Tierney            Ryan MacInnis            60     2   1  2  
 2 Unknown Player           Adrian Kempe             40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Olli Maatta              60     1   2  2  
 2 Damon Severson           Tyler Wotherspoon        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Matt Duchene             Teuvo Teravainen         Alex Galchenyuk          Travis Hamonic           Olli Maatta              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Tierney            Marcus Johansson         Ryan MacInnis            Travis Hamonic           Olli Maatta              

<b>Goaltenders</b>
Starting : Jonathan Quick           
Backup : Corey Crawford           

<b>Extra Forwards</b>
Normal : Barrett Hayton, Ryan MacInnis, Chris Tierney - PP : Teuvo Teravainen, Marcus Johansson - PK : Ryan MacInnis
<b>Extra Defensemen</b>
Normal : Tyler Wotherspoon, Ryan Lindgren, Damon Severson - PP : Olli Maatta - PK : Travis Hamonic, Damon Severson
<b>Penalty Shots</b>
Alex Galchenyuk, Teuvo Teravainen, Matt Duchene, Marcus Johansson, Anthony Duclair
<b>Custom OT Lines Forwards</b>
Alex Galchenyuk, Teuvo Teravainen, Marcus Johansson, Anthony Duclair, Matt Duchene, Chris Tierney, Ryan MacInnis, Barrett Hayton, Tomas Tatar, Phillip Di Giuseppe
<b>Custom OT Lines Defensemen</b>
Travis Hamonic, Olli Maatta, Damon Severson, Ryan Lindgren, Tyler Wotherspoon

<b>Scratches</b>
Bryan Little (Healthy), Christopher Tanev (Healthy), Nick Paul (Healthy), Ilya Lyubushkin (Healthy)</pre></div>
<h1 class="TeamLinesPro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Brandon Saad             Andrew Shaw              25     1   2  2  
 2 Jordan Weal              Anthony Camara           Christian Thomas         25     1   2  2  
 3 Maxwell Reinhart         Kenny Agostino           Stefan Noesen            25     1   2  2  
 4 Joe Colborne             Marcel Noebels           Brandon Saad             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Taylor Doherty           Ian Cole                                          25     1   2  2  
 2 Keaton Ellerby           Mark Barberio                                     25     1   2  2  
 3 Morgan Ellis             Josh Manson                                       25     1   2  2  
 4 Carl Gunnarsson          Taylor Doherty                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Brandon Saad             Andrew Shaw              60     1   2  2  
 2 Jordan Weal              Anthony Camara           Christian Thomas         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Taylor Doherty           Ian Cole                                          60     1   2  2  
 2 Keaton Ellerby           Mark Barberio                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Saad             Evgeny Kuznetsov         60     1   2  2  
 2 Andrew Shaw              Anthony Camara           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Doherty           Ian Cole                 60     1   2  2  
 2 Keaton Ellerby           Mark Barberio            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brandon Saad                                      60     1   2  2  
 2 Evgeny Kuznetsov                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Doherty           Ian Cole                 60     1   2  2  
 2 Keaton Ellerby           Mark Barberio            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Saad             Evgeny Kuznetsov         60     1   2  2  
 2 Andrew Shaw              Anthony Camara           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Doherty           Ian Cole                 60     1   2  2  
 2 Keaton Ellerby           Mark Barberio            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeny Kuznetsov         Brandon Saad             Andrew Shaw              Taylor Doherty           Ian Cole                 

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeny Kuznetsov         Brandon Saad             Andrew Shaw              Taylor Doherty           Ian Cole                 

<b>Goaltenders</b>
Starting : Calvin Pickard           
Backup : Joni Ortio               

<b>Extra Forwards</b>
Normal : Kenny Agostino, Maxwell Reinhart, Stefan Noesen - PP : Kenny Agostino, Maxwell Reinhart - PK : Stefan Noesen
<b>Extra Defensemen</b>
Normal : Morgan Ellis, Josh Manson, Carl Gunnarsson - PP : Morgan Ellis - PK : Josh Manson, Carl Gunnarsson
<b>Penalty Shots</b>
Brandon Saad, Evgeny Kuznetsov, Andrew Shaw, Anthony Camara, Christian Thomas
<b>Custom OT Lines Forwards</b>
Brandon Saad, Evgeny Kuznetsov, Andrew Shaw, Anthony Camara, Christian Thomas, Kenny Agostino, Jordan Weal, Maxwell Reinhart, Stefan Noesen, Marcel Noebels
<b>Custom OT Lines Defensemen</b>
Taylor Doherty, Ian Cole, Keaton Ellerby, Mark Barberio, Morgan Ellis

<b>Scratches</b>
Ales Hemsky (Healthy), Jakob Silfverberg (Healthy), Shayne Gostisbehere (Healthy)</pre></div>
<h1 class="TeamLinesPro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Gustav Nyquist           Evgeny Dadonov           34     1   1  3  
 2 Antti Suomela            William Carrier          Mitch Holmberg           28     1   2  2  
 3 Justin Holl              Nikolay Prokhorkin       David Backes             22     1   2  2  
 4 Greg Chase               Adam Helewka             Justin Holl              16     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marc Staal               Cody Franson                                      34     1   3  1  
 2 Luca Sbisa               David Savard                                      33     1   2  2  
 3 John Nyberg              Adam Clendening                                   33     1   3  1  
 4 Luca Sbisa               Cody Franson                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Mitch Holmberg           Evgeny Dadonov           50     0   0  5  
 2 Antti Suomela            William Carrier          Gustav Nyquist           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 David Savard             Cody Franson                                      50     1   3  1  
 2 Adam Clendening          Luca Sbisa                                        50     1   3  1  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           David Backes             50     0   5  0  
 2 Mitch Holmberg           William Carrier          50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Marc Staal               50     1   4  0  
 2 Cody Franson             David Savard             50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Toews                                    50     0   5  0  
 2 David Backes                                      50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Marc Staal               50     1   4  0  
 2 Cody Franson             David Savard             50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           William Carrier          50     0   2  3  
 2 Antti Suomela            David Backes             50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Cody Franson             50     1   3  1  
 2 Luca Sbisa               David Savard             50     1   1  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Mitch Holmberg           Evgeny Dadonov           David Savard             Cody Franson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           William Carrier          David Backes             Luca Sbisa               Marc Staal               

<b>Goaltenders</b>
Starting : Mackenzie Blackwood      
Backup : Anders Lindback          

<b>Extra Forwards</b>
Normal : William Carrier, David Backes, Mitch Holmberg - PP : William Carrier, Nikolay Prokhorkin - PK : Jonathan Toews
<b>Extra Defensemen</b>
Normal : Luca Sbisa, Adam Clendening, David Savard - PP : John Nyberg - PK : David Savard, John Nyberg
<b>Penalty Shots</b>
Jonathan Toews, Gustav Nyquist, Evgeny Dadonov, Mitch Holmberg, David Backes
<b>Custom OT Lines Forwards</b>
Jonathan Toews, Evgeny Dadonov, William Carrier, Mitch Holmberg, Antti Suomela, David Backes, Greg Chase, Gustav Nyquist, Justin Holl, Nikolay Prokhorkin
<b>Custom OT Lines Defensemen</b>
Cody Franson, Luca Sbisa, David Savard, Marc Staal, Adam Clendening

<b>Scratches</b>
Cooper Marody (Healthy), Nikita Gusev (Healthy)</pre></div>
<h1 class="TeamLinesPro_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Robby Fabbri             Colin Wilson             40     0   1  4  
 2 Evgeny Grachev           Alexander Kerfoot        Magnus Paajarvi          36     0   1  4  
 3 Joachim Nermark          Devin Setoguchi          Colin Smith              20     0   3  2  
 4 T.J. Galiardi            Taylor Leier             Christophe Lalancette    4      1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum                                     40     1   2  2  
 2 Yann Sauve               Andreas Englund                                   40     1   2  2  
 3 Jani Hakanpaa            Devon Toews                                       20     1   3  1  
 4 Vyacheslav Voynov        Jonathon Blum                                     0      0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Robby Fabbri             Colin Wilson             60     0   0  5  
 2 Evgeny Grachev           Alexander Kerfoot        Magnus Paajarvi          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jonathon Blum            Vyacheslav Voynov                                 60     0   0  5  
 2 Yann Sauve               Andreas Englund                                   40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joachim Nermark          T.J. Galiardi            70     0   5  0  
 2 Sean Monahan             Christophe Lalancette    30     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum            70     0   5  0  
 2 Devon Toews              Yann Sauve               30     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joachim Nermark                                   65     0   5  0  
 2 T.J. Galiardi                                     35     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum            60     0   5  0  
 2 Devon Toews              Yann Sauve               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Monahan             Robby Fabbri             60     0   1  4  
 2 Colin Wilson             Alexander Kerfoot        40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum            60     1   1  3  
 2 Devon Toews              Yann Sauve               40     1   1  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Robby Fabbri             Colin Wilson             Jonathon Blum            Vyacheslav Voynov        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             T.J. Galiardi            Christophe Lalancette    Vyacheslav Voynov        Jonathon Blum            

<b>Goaltenders</b>
Starting : Andrew Hammond           
Backup : Martin Jones             

<b>Extra Forwards</b>
Normal : Alexander Kerfoot, Sean Monahan, Colin Wilson - PP : Devin Setoguchi, Colin Smith - PK : Joachim Nermark
<b>Extra Defensemen</b>
Normal : Andreas Englund, Jonathon Blum, Vyacheslav Voynov - PP : Andreas Englund - PK : Jani Hakanpaa, Devon Toews
<b>Penalty Shots</b>
Robby Fabbri, Evgeny Grachev, Sean Monahan, Colin Wilson, Devin Setoguchi
<b>Custom OT Lines Forwards</b>
Sean Monahan, Robby Fabbri, Colin Wilson, Magnus Paajarvi, Alexander Kerfoot, Evgeny Grachev, Colin Smith, Christophe Lalancette, T.J. Galiardi, Devin Setoguchi
<b>Custom OT Lines Defensemen</b>
Vyacheslav Voynov, Jonathon Blum, Yann Sauve, Jani Hakanpaa, Devon Toews

<b>Scratches</b>
Jake Walman (Healthy), Nikita Filatov (Healthy), Michael Chaput (Healthy), Alex Iafallo (Healthy)</pre></div>
<h1 class="TeamLinesPro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Christian Dvorak         Ilya Mikheyev            30     0   5  0  
 2 Joel Eriksson Ek         Johnny Gaudreau          Nathan MacKinnon         30     0   1  4  
 3 Derek Ryan               Jason Dickinson          Dmitrij Jaskin           25     1   4  0  
 4 Shawn Matthias           Remi Elie                Logan Shaw               15     2   3  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Gudbranson          Jonas Brodin                                      35     1   4  0  
 2 Nikita Nesterov          Niklas Hjalmarsson                                35     1   4  0  
 3 Brent Seabrook           Alexander Urbom                                   30     1   4  0  
 4 Erik Gudbranson          Jonas Brodin                                      0      1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Christian Dvorak         Nathan MacKinnon         60     0   0  5  
 2 Joel Eriksson Ek         Johnny Gaudreau          Ilya Mikheyev            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Seabrook           Jonas Brodin                                      60     0   1  4  
 2 Erik Gudbranson          Nikita Nesterov                                   40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Ryan               Jason Dickinson          60     1   4  0  
 2 Shawn Matthias           Remi Elie                40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Urbom          Niklas Hjalmarsson       60     3   2  0  
 2 Erik Gudbranson          Brent Seabrook           40     3   2  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Derek Ryan                                        60     2   3  0  
 2 Shawn Matthias                                    40     2   3  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Urbom          Niklas Hjalmarsson       60     3   2  0  
 2 Nikita Nesterov          Erik Gudbranson          40     3   2  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Backstrom        Nathan MacKinnon         60     0   1  4  
 2 Christian Dvorak         Johnny Gaudreau          40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jonas Brodin             Brent Seabrook           60     1   3  1  
 2 Erik Gudbranson          Niklas Hjalmarsson       40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Johnny Gaudreau          Nathan MacKinnon         Erik Gudbranson          Jonas Brodin             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Joel Eriksson Ek         Nathan MacKinnon         Alexander Urbom          Niklas Hjalmarsson       

<b>Goaltenders</b>
Starting : Alexandar Georgiyev      
Backup : Henrik Lundqvist         

<b>Extra Forwards</b>
Normal : Dmitrij Jaskin, Derek Ryan, Jason Dickinson - PP : Dmitrij Jaskin, Derek Ryan - PK : Ilya Mikheyev
<b>Extra Defensemen</b>
Normal : Nikita Nesterov, Niklas Hjalmarsson, Erik Gudbranson - PP : Niklas Hjalmarsson - PK : Jonas Brodin, Nikita Nesterov
<b>Penalty Shots</b>
Nathan MacKinnon, Johnny Gaudreau, Nicklas Backstrom, Dmitrij Jaskin, Christian Dvorak
<b>Custom OT Lines Forwards</b>
Nathan MacKinnon, Nicklas Backstrom, Johnny Gaudreau, Christian Dvorak, Logan Shaw, Ilya Mikheyev, Jason Dickinson, Dmitrij Jaskin, Shawn Matthias, Derek Ryan
<b>Custom OT Lines Defensemen</b>
Erik Gudbranson, Niklas Hjalmarsson, Jonas Brodin, Brent Seabrook, Alexander Urbom

<b>Scratches</b>
Mirco Mueller (Healthy), Barclay Goodrow (Healthy)</pre></div>
<h1 class="TeamLinesPro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Conner Bleackley         Nils Höglander           Jayce Hawryluk           35     0   2  3  
 2 Mathew Barzal            Max Domi                 Leon Draisaitl           30     0   1  4  
 3 Sean Couturier           Hunter Shinkaruk         Sven Baertschi           25     0   2  3  
 4 Travis Boyd              Tobias Lindberg          Brandon Pirri            10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Parker Wotherspoon       Matt Roy                                          35     0   4  1  
 2 Shea Weber               Haydn Fleury                                      33     0   4  1  
 3 Alex Petrovic            Duncan Siemens                                    29     0   3  2  
 4 Parker Wotherspoon       Matt Roy                                          3      0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathew Barzal            Max Domi                 Leon Draisaitl           50     0   0  5  
 2 Sean Couturier           Hunter Shinkaruk         Sven Baertschi           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Roy                 Shea Weber                                        50     0   1  4  
 2 Parker Wotherspoon       Haydn Fleury                                      50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Conner Bleackley         Jayce Hawryluk           50     0   4  1  
 2 Sean Couturier           Travis Boyd              50     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Duncan Siemens           Shea Weber               50     0   5  0  
 2 Alex Petrovic            Haydn Fleury             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sean Couturier                                    50     0   5  0  
 2 Conner Bleackley                                  50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Duncan Siemens           Shea Weber               50     0   5  0  
 2 Alex Petrovic            Haydn Fleury             50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Max Domi                 Jayce Hawryluk           50     0   2  3  
 2 Conner Bleackley         Nils Höglander           50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Roy                 Shea Weber               55     0   4  1  
 2 Parker Wotherspoon       Haydn Fleury             45     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mathew Barzal            Max Domi                 Leon Draisaitl           Shea Weber               Haydn Fleury             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Conner Bleackley         Jayce Hawryluk           Alex Petrovic            Shea Weber               

<b>Goaltenders</b>
Starting : Filip Gustavsson         
Backup : Evan Fitzpatrick         

<b>Extra Forwards</b>
Normal : Sean Couturier, Brandon Pirri, Conner Bleackley - PP : Hunter Shinkaruk, Mathew Barzal - PK : Jayce Hawryluk
<b>Extra Defensemen</b>
Normal : Haydn Fleury, Parker Wotherspoon, Alex Petrovic - PP : Matt Roy - PK : Duncan Siemens, Shea Weber
<b>Penalty Shots</b>
Leon Draisaitl, Max Domi, Mathew Barzal, Sven Baertschi, Sean Couturier
<b>Custom OT Lines Forwards</b>
Hunter Shinkaruk, Leon Draisaitl, Conner Bleackley, Max Domi, Mathew Barzal, Travis Boyd, Jayce Hawryluk, Sven Baertschi, Sean Couturier, Brandon Pirri
<b>Custom OT Lines Defensemen</b>
Shea Weber, Duncan Siemens, Matt Roy, Haydn Fleury, Alex Petrovic

<b>Scratches</b>
Mattias Janmark-Nylen (Healthy), Ryan Hartman (Healthy), Jordan Binnington (Healthy)</pre></div>
<h1 class="TeamLinesPro_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jaden Schwartz           Tomas Hertl              Jordan Greenway          29     1   2  2  
 2 Jean-Gabriel Pageau      Kyle Connor              Josh Anderson            29     1   2  2  
 3 Radek Faksa              Michael Bournival        Charles Hudon            29     1   2  2  
 4 Dave Bolland             Andrew Cogliano          Max Görtz                13     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oscar Klefbom            Nick Leddy                                        25     1   2  2  
 2 Roman Josi               Jaccob Slavin                                     25     1   2  2  
 3 Philip Larsen            Dennis Persson                                    25     1   2  2  
 4 Oscar Klefbom            Nick Leddy                                        25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jaden Schwartz           Tomas Hertl              Andrew Cogliano          60     1   2  2  
 2 Jean-Gabriel Pageau      Kyle Connor              Josh Anderson            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oscar Klefbom            Nick Leddy                                        60     1   2  2  
 2 Roman Josi               Jaccob Slavin                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaden Schwartz           Tomas Hertl              60     1   2  2  
 2 Andrew Cogliano          Jean-Gabriel Pageau      40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Nick Leddy               60     1   2  2  
 2 Roman Josi               Jaccob Slavin            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jaden Schwartz                                    60     1   2  2  
 2 Tomas Hertl                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Nick Leddy               60     1   2  2  
 2 Roman Josi               Jaccob Slavin            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaden Schwartz           Tomas Hertl              60     1   2  2  
 2 Andrew Cogliano          Jean-Gabriel Pageau      40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Nick Leddy               60     1   2  2  
 2 Roman Josi               Jaccob Slavin            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jaden Schwartz           Tomas Hertl              Andrew Cogliano          Oscar Klefbom            Nick Leddy               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jaden Schwartz           Tomas Hertl              Andrew Cogliano          Oscar Klefbom            Nick Leddy               

<b>Goaltenders</b>
Starting : Timur Bilyalov           
Backup : Josh Harding             

<b>Extra Forwards</b>
Normal : Dave Bolland, Radek Faksa, Michael Bournival - PP : Dave Bolland, Radek Faksa - PK : Michael Bournival
<b>Extra Defensemen</b>
Normal : Philip Larsen, Dennis Persson, Roman Josi - PP : Philip Larsen - PK : Dennis Persson, Roman Josi
<b>Penalty Shots</b>
Jaden Schwartz, Tomas Hertl, Andrew Cogliano, Jean-Gabriel Pageau, Radek Faksa
<b>Custom OT Lines Forwards</b>
Jaden Schwartz, Tomas Hertl, Andrew Cogliano, Jean-Gabriel Pageau, Radek Faksa, Kyle Connor, Josh Anderson, Michael Bournival, Jordan Greenway, Charles Hudon
<b>Custom OT Lines Defensemen</b>
Oscar Klefbom, Nick Leddy, Roman Josi, Jaccob Slavin, Philip Larsen

<b>Scratches</b>
Nikolas Brouillard (Healthy), Mark Borowiecki (Healthy), Jimmy Howard (Healthy)</pre></div>
<h1 class="TeamLinesPro_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Gagner               Taylor Hall              Chris Stewart            35     0   2  3  
 2 Tobias Rieder            Kailer Yamamoto          Ryan Callahan            34     0   2  3  
 3 Cédric Paquette          Kieffer Bellows          Brendan Gallagher        26     0   2  3  
 4 Frank Vatrano            Bogdan Yakimov           Kailer Yamamoto          5      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cody Ceci                Rasmus Dahlin                                     33     0   3  2  
 2 Daniel Girardi           Colten Teubert                                    33     0   2  3  
 3 Martin Marincin          Mikko Vainonen                                    31     0   2  3  
 4 Mikko Vainonen           Colten Teubert                                    3      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Gagner               Taylor Hall              Chris Stewart            55     0   0  5  
 2 Tobias Rieder            Kailer Yamamoto          Ryan Callahan            45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cody Ceci                Rasmus Dahlin                                     55     0   1  4  
 2 Colten Teubert           Daniel Girardi                                    45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Bogdan Yakimov           Frank Vatrano            57     0   5  0  
 2 Beau Starrett            Ryan Callahan            43     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colten Teubert           Martin Marincin          57     0   5  0  
 2 Mikko Vainonen           Daniel Girardi           43     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Frank Vatrano                                     57     0   5  0  
 2 Beau Starrett                                     43     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mikko Vainonen           Daniel Girardi           57     0   5  0  
 2 Colten Teubert           Martin Marincin          43     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sam Gagner               Taylor Hall              55     0   1  4  
 2 Tobias Rieder            Ryan Callahan            45     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mikko Vainonen           Daniel Girardi           55     0   2  3  
 2 Cody Ceci                Rasmus Dahlin            45     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Gagner               Taylor Hall              Ryan Callahan            Cody Ceci                Rasmus Dahlin            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cédric Paquette          Kailer Yamamoto          Brendan Gallagher        Mikko Vainonen           Martin Marincin          

<b>Goaltenders</b>
Starting : Marc-Andre Fleury        
Backup : Matt Hackett             

<b>Extra Forwards</b>
Normal : Kailer Yamamoto, Taylor Hall, Sam Gagner - PP : Kailer Yamamoto, Sam Gagner - PK : Brendan Gallagher
<b>Extra Defensemen</b>
Normal : Martin Marincin, Mikko Vainonen, Daniel Girardi - PP : Martin Marincin - PK : Rasmus Dahlin, Colten Teubert
<b>Penalty Shots</b>
Sam Gagner, Taylor Hall, Chris Stewart, Ryan Callahan, Brendan Gallagher
<b>Custom OT Lines Forwards</b>
Sam Gagner, Taylor Hall, Tobias Rieder, Ryan Callahan, Cédric Paquette, Kailer Yamamoto, Kieffer Bellows, Brendan Gallagher, Bogdan Yakimov, Chris Stewart
<b>Custom OT Lines Defensemen</b>
Cody Ceci, Rasmus Dahlin, Mikko Vainonen, Colten Teubert, Daniel Girardi

<b>Scratches</b>
Alex Lintuniemi (Healthy), Martin Gernat (Healthy)</pre></div>
<h1 class="TeamLinesPro_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan O'Reilly            Jonathan Huberdeau       Nikita Kucherov          35     0   1  4  
 2 Nick Bjugstad            Dylan Larkin             David Pastrnak           35     0   1  4  
 3 Phillip Danault          Jacob De La Rose         Brendan Perlini          20     1   2  2  
 4 Pavel Zacha              Kyle Clifford            Oskar Sundqvist          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Aaron Ekblad             Marc-Edouard Vlasic                               34     1   2  2  
 2 David Musil              Scott Harrington                                  33     1   3  1  
 3 Joel Edmundson           Rasmus Sandin                                     33     1   3  1  
 4 Aaron Ekblad             David Musil                                       0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Larkin             David Pastrnak           Nikita Kucherov          60     0   0  5  
 2 Ryan O'Reilly            Pavel Zacha              Nick Bjugstad            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Aaron Ekblad             Jonathan Huberdeau                                60     0   1  4  
 2 Scott Harrington         Rasmus Sandin                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Phillip Danault          Jacob De La Rose         52     0   5  0  
 2 Pavel Zacha              Kyle Clifford            48     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Musil              Joel Edmundson           52     0   5  0  
 2 Scott Harrington         Marc-Edouard Vlasic      48     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Phillip Danault                                   52     0   5  0  
 2 Jacob De La Rose                                  48     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Musil              Joel Edmundson           52     0   5  0  
 2 Scott Harrington         Marc-Edouard Vlasic      48     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan O'Reilly            Nikita Kucherov          60     1   1  3  
 2 Dylan Larkin             David Pastrnak           40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ekblad             Scott Harrington         60     0   3  2  
 2 Joel Edmundson           Marc-Edouard Vlasic      40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dylan Larkin             David Pastrnak           Nikita Kucherov          Aaron Ekblad             Rasmus Sandin            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Phillip Danault          Jacob De La Rose         Brendan Perlini          David Musil              Joel Edmundson           

<b>Goaltenders</b>
Starting : Sergei Bobrovsky         
Backup : Frederik Andersen        

<b>Extra Forwards</b>
Normal : Nikita Kucherov, David Pastrnak, Dylan Larkin - PP : Nikita Kucherov, David Pastrnak - PK : Jacob De La Rose
<b>Extra Defensemen</b>
Normal : Aaron Ekblad, Scott Harrington, Rasmus Sandin - PP : Aaron Ekblad - PK : David Musil, Joel Edmundson
<b>Penalty Shots</b>
Nikita Kucherov, David Pastrnak, Dylan Larkin, Jonathan Huberdeau, Nick Bjugstad
<b>Custom OT Lines Forwards</b>
Nikita Kucherov, David Pastrnak, Dylan Larkin, Jonathan Huberdeau, Ryan O'Reilly, Nick Bjugstad, Pavel Zacha, Phillip Danault, Jacob De La Rose, Brendan Perlini
<b>Custom OT Lines Defensemen</b>
Aaron Ekblad, Scott Harrington, Rasmus Sandin, Joel Edmundson, Marc-Edouard Vlasic

<b>Scratches</b>
Alan Quine (Healthy), Ville Husso (Healthy)</pre></div>
<h1 class="TeamLinesPro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             Kevin Fiala              42     0   2  3  
 2 Jordan Staal             Miles Wood               Corey Perry              32     1   3  1  
 3 Anthony Cirelli          Anthony Mantha           Vincent Trocheck         21     1   3  1  
 4 Tyler Bozak              Kevin Hayes              Brett Ritchie            5      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Mark Pysyk                                        40     0   3  2  
 2 Derek Forbort            Jordan Subban                                     38     0   4  1  
 3 Rasmus Andersson         Ben Hutton                                        22     0   4  1  
 4 Drew Doughty             Mark Pysyk                                        0      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             Corey Perry              60     0   0  5  
 2 Jordan Staal             Kevin Fiala              Miles Wood               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Jordan Subban                                     60     0   0  5  
 2 Mark Pysyk               Rasmus Andersson                                  40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Staal             Tyler Bozak              60     0   5  0  
 2 Anze Kopitar             Anthony Cirelli          40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Pysyk               Derek Forbort            50     0   5  0  
 2 Drew Doughty             Ben Hutton               50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Staal                                      55     0   5  0  
 2 Anze Kopitar                                      45     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Pysyk               Derek Forbort            55     1   4  0  
 2 Drew Doughty             Ben Hutton               45     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Staal             Corey Perry              50     0   3  2  
 2 Anze Kopitar             Jeff Skinner             50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Jordan Subban            50     1   3  1  
 2 Ben Hutton               Rasmus Andersson         50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Jeff Skinner             Miles Wood               Drew Doughty             Jordan Subban            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Staal             Anze Kopitar             Miles Wood               Drew Doughty             Derek Forbort            

<b>Goaltenders</b>
Starting : Michal Neuvirth          
Backup : Philipp Grubauer         

<b>Extra Forwards</b>
Normal : Vincent Trocheck, Anthony Cirelli, Brett Ritchie - PP : Jordan Staal, Anthony Mantha - PK : Brett Ritchie
<b>Extra Defensemen</b>
Normal : Ben Hutton, Derek Forbort, Mark Pysyk - PP : Ben Hutton - PK : Rasmus Andersson, Jordan Subban
<b>Penalty Shots</b>
Jeff Skinner, Anze Kopitar, Corey Perry, Anthony Mantha, Vincent Trocheck
<b>Custom OT Lines Forwards</b>
Jeff Skinner, Anze Kopitar, Kevin Fiala, Jordan Staal, Corey Perry, Tyler Bozak, Miles Wood, Vincent Trocheck, Anthony Mantha, Brett Ritchie
<b>Custom OT Lines Defensemen</b>
Drew Doughty, Rasmus Andersson, Ben Hutton, Mark Pysyk, Jordan Subban

<b>Scratches</b>
Michael Del Zotto (Healthy), Jordan Martinook (Healthy)</pre></div>
<h1 class="TeamLinesPro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vladimir Tarasenko       Kevin Labanc             JC Lipon                 37     1   2  2  
 2 Jack Roslovic            Sven Andrighetto         Jake Virtanen            29     1   2  2  
 3 Brandon McMillan         James Van Riemsdyk       Andreas Johnsson         24     1   2  2  
 4 Byron Froese             Ondrej Palat             Joe Pavelski             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Murphy              Neal Pionk                                        35     1   2  2  
 2 Shane Hanna              Colby Cohen                                       35     1   2  2  
 3 Karl Alzner              John Moore                                        20     1   2  2  
 4 Ryan Murphy              Shane Hanna                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vladimir Tarasenko       Kevin Labanc             Jack Roslovic            60     1   2  2  
 2 Sven Andrighetto         Andreas Johnsson         JC Lipon                 40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Neal Pionk               Ryan Murphy                                       60     1   2  2  
 2 Colby Cohen              Jake Virtanen                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Byron Froese             Brandon McMillan         60     1   2  2  
 2 Joe Pavelski             Ondrej Palat             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Moore               Karl Alzner              60     1   2  2  
 2 Colby Cohen              Neal Pionk               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Byron Froese                                      60     1   2  2  
 2 Joe Pavelski                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Moore               Karl Alzner              60     1   2  2  
 2 Colby Cohen              Neal Pionk               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Vladimir Tarasenko       Kevin Labanc             60     1   2  2  
 2 Jack Roslovic            JC Lipon                 40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Neal Pionk               Ryan Murphy              60     1   2  2  
 2 Colby Cohen              Shane Hanna              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vladimir Tarasenko       Kevin Labanc             JC Lipon                 Ryan Murphy              Jack Roslovic            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Byron Froese             Andreas Johnsson         Joe Pavelski             Karl Alzner              John Moore               

<b>Goaltenders</b>
Starting : Thatcher Demko           
Backup : Brian Elliott            

<b>Extra Forwards</b>
Normal : Jake Virtanen, Sven Andrighetto, JC Lipon - PP : Jake Virtanen, Sven Andrighetto - PK : Jake Virtanen
<b>Extra Defensemen</b>
Normal : Ryan Murphy, Neal Pionk, Colby Cohen - PP : Ryan Murphy - PK : Colby Cohen, Ryan Murphy
<b>Penalty Shots</b>
Andreas Johnsson, Jack Roslovic, Sven Andrighetto, JC Lipon, Jake Virtanen
<b>Custom OT Lines Forwards</b>
Vladimir Tarasenko, Jack Roslovic, Sven Andrighetto, Kevin Labanc, Jake Virtanen, JC Lipon, Andreas Johnsson, Ondrej Palat, Joe Pavelski, James Van Riemsdyk
<b>Custom OT Lines Defensemen</b>
Ryan Murphy, Neal Pionk, Shane Hanna, Colby Cohen, Karl Alzner

<b>Scratches</b>
Justin Kloos (Healthy), Michael Sgarbossa (Healthy), Aaron Ness (Healthy), Devin Shore (Healthy)</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Filip Forsberg           Danton Heinen            30     0   1  4  
 2 Ryan Kesler              Jakub Vrana              Chandler Stephenson      30     1   3  1  
 3 Evgeni Malkin            Alex Ovechkin            Dominik Kubalik          30     0   1  4  
 4 Patrik Berglund          Henrik Zetterberg        Curtis Hamilton          10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Torey Krug                                        42     0   3  2  
 2 Slater Koekkoek          Julius Honka                                      37     0   3  2  
 3 Jan Rutta                Unknown Player                                    20     0   4  1  
 4 Alex Pietrangelo         Torey Krug                                        1      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Filip Forsberg           Alex Ovechkin            70     0   0  5  
 2 Evgeni Malkin            Jakub Vrana              Danton Heinen            30     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Torey Krug                                        75     0   1  4  
 2 Julius Honka             Jan Rutta                                         25     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Kesler              Chandler Stephenson      60     1   4  0  
 2 Sidney Crosby            Jakub Vrana              40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Slater Koekkoek          Jan Rutta                60     1   4  0  
 2 Alex Pietrangelo         Unknown Player           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sidney Crosby                                     65     0   5  0  
 2 Ryan Kesler                                       35     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Slater Koekkoek          Jan Rutta                50     0   5  0  
 2 Alex Pietrangelo         Unknown Player           50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sidney Crosby            Filip Forsberg           50     0   1  4  
 2 Evgeni Malkin            Danton Heinen            50     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Torey Krug               50     0   2  3  
 2 Julius Honka             Slater Koekkoek          50     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Filip Forsberg           Evgeni Malkin            Alex Pietrangelo         Torey Krug               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Filip Forsberg           Jakub Vrana              Alex Pietrangelo         Slater Koekkoek          

<b>Goaltenders</b>
Starting : Ondrej Pavelec           
Backup : Jake Allen               

<b>Extra Forwards</b>
Normal : Sidney Crosby, Filip Forsberg, Alex Ovechkin - PP : Sidney Crosby, Alex Ovechkin - PK : Sidney Crosby
<b>Extra Defensemen</b>
Normal : Alex Pietrangelo, Torey Krug, Julius Honka - PP : Alex Pietrangelo - PK : Alex Pietrangelo, Slater Koekkoek
<b>Penalty Shots</b>
Sidney Crosby, Evgeni Malkin, Alex Ovechkin, Filip Forsberg, Ryan Kesler
<b>Custom OT Lines Forwards</b>
Sidney Crosby, Filip Forsberg, Evgeni Malkin, Alex Ovechkin, Jakub Vrana, Dominik Kubalik, Danton Heinen, Ryan Kesler, Patrik Berglund, Curtis Hamilton
<b>Custom OT Lines Defensemen</b>
Alex Pietrangelo, Torey Krug, Julius Honka, Jan Rutta, Slater Koekkoek

<b>Scratches</b>
Dustin Byfuglien (Healthy), David Griger (Healthy), Tyler Cuma (Healthy), Carter Verhaeghe (Healthy)</pre></div>
<h1 class="TeamLinesPro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mitchell Marner          Ty Rattie                Oliver Bjorkstrand       35     0   2  3  
 2 Sam Reinhart             Nail Yakupov             Drake Batherson          32     0   2  3  
 3 Nic Petan                Tyler Motte              Johan Larsson            23     0   2  3  
 4 Mikael Backlund          Brett Pollock            Karson Kuhlman           10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Faulk             Colton Parayko                                    34     1   3  1  
 2 Dmitri Orlov             Adam Pelech                                       33     1   3  1  
 3 Brett Pesce              Tyson Barrie                                      33     1   3  1  
 4 Dmitri Orlov             Brett Pesce                                       0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mitchell Marner          Ty Rattie                Oliver Bjorkstrand       60     0   0  5  
 2 Sam Reinhart             Nail Yakupov             Drake Batherson          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Orlov             Tyson Barrie                                      60     0   1  4  
 2 Justin Faulk             Colton Parayko                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Karson Kuhlman           Tyler Motte              50     0   5  0  
 2 Mikael Backlund          Brett Pollock            50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Adam Pelech              50     0   5  0  
 2 Brett Pesce              Justin Faulk             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Karson Kuhlman                                    50     0   5  0  
 2 Mikael Backlund                                   50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Adam Pelech              50     0   5  0  
 2 Brett Pesce              Justin Faulk             50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mitchell Marner          Nail Yakupov             50     0   2  3  
 2 Sam Reinhart             Ty Rattie                50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Colton Parayko           50     1   2  2  
 2 Dmitri Orlov             Adam Pelech              50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mitchell Marner          Nail Yakupov             Sam Reinhart             Dmitri Orlov             Justin Faulk             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Reinhart             Mitchell Marner          Oliver Bjorkstrand       Colton Parayko           Justin Faulk             

<b>Goaltenders</b>
Starting : Carter Hart              
Backup : Tristan Jarry            

<b>Extra Forwards</b>
Normal : Mitchell Marner, Sam Reinhart, Nail Yakupov - PP : Nic Petan, Johan Larsson - PK : Sam Reinhart
<b>Extra Defensemen</b>
Normal : Justin Faulk, Colton Parayko, Dmitri Orlov - PP : Brett Pesce - PK : Dmitri Orlov, Tyson Barrie
<b>Penalty Shots</b>
Mitchell Marner, Nail Yakupov, Oliver Bjorkstrand, Sam Reinhart, Ty Rattie
<b>Custom OT Lines Forwards</b>
Mitchell Marner, Nail Yakupov, Sam Reinhart, Oliver Bjorkstrand, Nic Petan, Ty Rattie, Drake Batherson, Johan Larsson, Tyler Motte, Mikael Backlund
<b>Custom OT Lines Defensemen</b>
Dmitri Orlov, Justin Faulk, Colton Parayko, Brett Pesce, Tyson Barrie

<b>Scratches</b>
Alec Martinez (Healthy), Marc-Andre Bourdon (Healthy), Trevor Moore (Healthy)</pre></div>
<h1 class="TeamLinesPro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Tyler Ennis              William Nylander         34     5   0  0  
 2 Jack Eichel              Henrik Samuelsson        Reilly Smith             29     5   0  0  
 3 Victor Rask              Alexander Radulov        Ilya Kovalchuk           22     5   0  0  
 4 Kevin Stenlund           Jared McCann             Alexander Semin          15     5   0  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Trouba             T.J. Brennan                                      35     5   0  0  
 2 Mark Katic               Will Butcher                                      30     5   0  0  
 3 Steven Santini           Colin Miller                                      20     5   0  0  
 4 Jacob Trouba             T.J. Brennan                                      15     5   0  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Tyler Ennis              William Nylander         60     0   0  5  
 2 Jack Eichel              Henrik Samuelsson        Reilly Smith             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Trouba             T.J. Brennan                                      60     0   0  5  
 2 Mark Katic               Will Butcher                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Eichel              Tyler Ennis              60     0   5  0  
 2 Patrice Bergeron         William Nylander         40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             T.J. Brennan             60     0   5  0  
 2 Mark Katic               Will Butcher             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jack Eichel                                       60     0   5  0  
 2 Patrice Bergeron                                  40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             T.J. Brennan             60     0   5  0  
 2 Mark Katic               Will Butcher             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Eichel              Tyler Ennis              60     1   2  2  
 2 Patrice Bergeron         William Nylander         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             T.J. Brennan             60     1   2  2  
 2 Mark Katic               Will Butcher             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Tyler Ennis              William Nylander         Jacob Trouba             T.J. Brennan             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Bergeron         Jared McCann             Jack Eichel              Jacob Trouba             T.J. Brennan             

<b>Goaltenders</b>
Starting : Scott Wedgewood          
Backup : Ilya Sorokin             

<b>Extra Forwards</b>
Normal : Alexander Radulov, Victor Rask, Jared McCann - PP : Alexander Radulov, Victor Rask - PK : Jared McCann
<b>Extra Defensemen</b>
Normal : Steven Santini, Colin Miller, Mark Katic - PP : Steven Santini - PK : Colin Miller, Mark Katic
<b>Penalty Shots</b>
Jack Eichel, Tyler Ennis, Patrice Bergeron, William Nylander, Henrik Samuelsson
<b>Custom OT Lines Forwards</b>
Jack Eichel, Tyler Ennis, Patrice Bergeron, William Nylander, Henrik Samuelsson, Reilly Smith, Alexander Radulov, Victor Rask, Jared McCann, Ilya Kovalchuk
<b>Custom OT Lines Defensemen</b>
Jacob Trouba, T.J. Brennan, Mark Katic, Will Butcher, Steven Santini

<b>Scratches</b>
Brendan Mikkelson (Healthy), Adam Gaudette (Healthy), Cory Schneider (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jordan Kyrou             Pavel Buchnevich         Vince Hinostroza         35     0   4  1  
 2 Martin Reway             Gabriel Bourque          David Krejci             35     0   4  1  
 3 Tyson Baillie            Nikita Scherbak          David Perron             22     0   2  3  
 4 Lars Eller               Yanni Gourde             Tom Wilson               8      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Joakim Ryan              Seth Jones                                        38     0   4  1  
 2 Brian Dumoulin           Vince Dunn                                        36     0   4  1  
 3 Dion Phaneuf             Jyrki Jokipakka                                   25     0   3  2  
 4 Dion Phaneuf             Vince Dunn                                        1      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vince Hinostroza         Jordan Kyrou             Pavel Buchnevich         60     0   0  5  
 2 Martin Reway             Tom Wilson               David Krejci             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Seth Jones               Vince Dunn                                        60     0   1  4  
 2 Brian Dumoulin           Joakim Ryan                                       40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Krejci             Tom Wilson               60     1   4  0  
 2 Tyson Baillie            Martin Reway             40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dion Phaneuf             Jyrki Jokipakka          60     0   5  0  
 2 Brian Dumoulin           Seth Jones               40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tom Wilson                                        60     0   4  1  
 2 David Krejci                                      40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dion Phaneuf             Seth Jones               60     0   5  0  
 2 Jyrki Jokipakka          Brian Dumoulin           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Kyrou             Tom Wilson               60     1   2  2  
 2 David Krejci             Martin Reway             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Seth Jones               Dion Phaneuf             60     1   2  2  
 2 Jyrki Jokipakka          Joakim Ryan              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vince Hinostroza         Martin Reway             David Krejci             Joakim Ryan              Seth Jones               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   David Krejci             Tom Wilson               Tyson Baillie            Dion Phaneuf             Jyrki Jokipakka          

<b>Goaltenders</b>
Starting : Ben Bishop               
Backup : Elvis Merzlikins         

<b>Extra Forwards</b>
Normal : Tom Wilson, Lars Eller, David Krejci - PP : Tom Wilson, David Krejci - PK : Yanni Gourde
<b>Extra Defensemen</b>
Normal : Dion Phaneuf, Jyrki Jokipakka, Brian Dumoulin - PP : Jyrki Jokipakka - PK : Dion Phaneuf, Vince Dunn
<b>Penalty Shots</b>
Lars Eller, Tom Wilson, Vince Hinostroza, Martin Reway, David Krejci
<b>Custom OT Lines Forwards</b>
Martin Reway, Vince Hinostroza, Pavel Buchnevich, David Krejci, Jordan Kyrou, Lars Eller, Tyson Baillie, Gabriel Bourque, Yanni Gourde, Tom Wilson
<b>Custom OT Lines Defensemen</b>
Seth Jones, Joakim Ryan, Vince Dunn, Dion Phaneuf, Brian Dumoulin

<b>Scratches</b>
Kirill Kabanov (Healthy), Yannick Weber (Healthy), Max Friberg (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Point            Travis Konecny           Tyler Bertuzzi           29     0   0  5  
 2 Aleksander Barkov        Jesper Bratt             Viktor Arvidsson         29     0   0  5  
 3 J.T. Miller              Tyson Jost               Kyle Palmieri            23     1   1  3  
 4 J.T. Compher             Joseph Blandisi          Nikolay Goldobin         19     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan McDonagh            Ivan Provorov                                     35     1   2  2  
 2 Shea Theodore            Griffin Reinhart                                  35     1   2  2  
 3 Jakob Chychrun           Jake McCabe                                       30     1   2  2  
 4 Shea Theodore            Ivan Provorov                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Point            Viktor Arvidsson         Travis Konecny           55     0   0  5  
 2 Aleksander Barkov        J.T. Miller              Tyler Bertuzzi           45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Theodore            Ivan Provorov                                     60     0   0  5  
 2 Ryan McDonagh            Jake McCabe                                       40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Tyler Bertuzzi           60     1   4  0  
 2 Brayden Point            J.T. Miller              40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan McDonagh            Griffin Reinhart         57     1   4  0  
 2 Shea Theodore            Jake McCabe              43     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Aleksander Barkov                                 60     1   4  0  
 2 Brayden Point                                     40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan McDonagh            Griffin Reinhart         57     1   4  0  
 2 Ivan Provorov            Jake McCabe              43     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyson Jost               J.T. Compher             50     1   2  2  
 2 Joseph Blandisi          Nikolay Goldobin         50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake McCabe              Shea Theodore            60     1   2  2  
 2 Ivan Provorov            Ryan McDonagh            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brayden Point            Viktor Arvidsson         Travis Konecny           Ivan Provorov            Shea Theodore            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        J.T. Miller              Tyler Bertuzzi           Ryan McDonagh            Griffin Reinhart         

<b>Goaltenders</b>
Starting : Jack Campbell            
Backup : Andrey Vasilevskiy       

<b>Extra Forwards</b>
Normal : Jesper Bratt, Viktor Arvidsson, Nikolay Goldobin - PP : J.T. Miller, Travis Konecny - PK : Aleksander Barkov
<b>Extra Defensemen</b>
Normal : Ryan McDonagh, Griffin Reinhart, Jake McCabe - PP : Jake McCabe - PK : Shea Theodore, Ivan Provorov
<b>Penalty Shots</b>
Aleksander Barkov, Brayden Point, Viktor Arvidsson, Travis Konecny, Jesper Bratt
<b>Custom OT Lines Forwards</b>
Aleksander Barkov, Brayden Point, Travis Konecny, Viktor Arvidsson, J.T. Miller, Tyler Bertuzzi, Jesper Bratt, Kyle Palmieri, Tyson Jost, Nikolay Goldobin
<b>Custom OT Lines Defensemen</b>
Ryan McDonagh, Shea Theodore, Ivan Provorov, Griffin Reinhart, Jakob Chychrun

<b>Scratches</b>
Vladislav Gavrikov (Healthy), Jean-Sébastien Dea (Healthy)</pre></div>
<h1 class="TeamLinesPro_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vladislav Kamenev        Michael Grabner          Jesse Puljujarvi         25     0   1  4  
 2 Ryan Johansen            Michael Frolik           Ryan Dzingel             25     0   1  4  
 3 Evan Rodrigues           Martin Frk               Louick Marcotte          25     0   2  3  
 4 Robert Thomas            Jesse Puljujarvi         Sonny Milano             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ethan Bear               Erik Karlsson                                     25     0   3  2  
 2 Jamie McBain             Keith Aulie                                       25     0   3  2  
 3 Braydon Coburn           Ian McCoshen                                      25     1   2  2  
 4 Erik Karlsson            Jamie McBain                                      25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Johansen            Michael Grabner          Jesse Puljujarvi         60     0   1  4  
 2 Vladislav Kamenev        Michael Frolik           Robert Thomas            40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ethan Bear               Erik Karlsson                                     60     0   1  4  
 2 Ian McCoshen             Jamie McBain                                      40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Grabner          Michael Frolik           60     1   2  2  
 2 Ryan Dzingel             Jesse Puljujarvi         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian McCoshen             Jamie McBain             60     1   2  2  
 2 Erik Karlsson            Keith Aulie              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jesse Puljujarvi                                  60     1   2  2  
 2 Michael Frolik                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ethan Bear               Jamie McBain             60     1   2  2  
 2 Ian McCoshen             Keith Aulie              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Dzingel             Michael Frolik           60     1   2  2  
 2 Jesse Puljujarvi         Michael Grabner          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Braydon Coburn           Jamie McBain             60     1   2  2  
 2 Ian McCoshen             Keith Aulie              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Johansen            Jesse Puljujarvi         Michael Grabner          Ethan Bear               Erik Karlsson            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Frolik           Michael Grabner          Louick Marcotte          Erik Karlsson            Jamie McBain             

<b>Goaltenders</b>
Starting : Robin Lehner             
Backup : Benjamin Conz            

<b>Extra Forwards</b>
Normal : Jesse Puljujarvi, Ryan Dzingel, Michael Frolik - PP : Jesse Puljujarvi, Michael Frolik - PK : Michael Frolik
<b>Extra Defensemen</b>
Normal : Keith Aulie, Ethan Bear, Jamie McBain - PP : Erik Karlsson - PK : Ian McCoshen, Jamie McBain
<b>Penalty Shots</b>
Michael Grabner, Ryan Johansen, Jesse Puljujarvi, Erik Karlsson, Michael Frolik
<b>Custom OT Lines Forwards</b>
Vladislav Kamenev, Jesse Puljujarvi, Evan Rodrigues, Ryan Johansen, Louick Marcotte, Michael Grabner, Robert Thomas, Ryan Dzingel, Sonny Milano, Michael Frolik
<b>Custom OT Lines Defensemen</b>
Ian McCoshen, Jamie McBain, Braydon Coburn, Erik Karlsson, Ethan Bear

<b>Scratches</b>
Steven Kampfer (Healthy), Jack Hughes (Healthy)</pre></div>
<h1 class="TeamLinesPro_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Pierre-Luc Dubois        Brendan Ranford          30     0   0  5  
 2 Ryan Nugent-Hopkins      Nick Schmaltz            Nicolas Kerdiles         30     0   1  4  
 3 Elias Pettersson         Casey Mittelstadt        Joakim Nordstrom         23     1   3  1  
 4 Nick Shore               Wojtek Wolski            Zach Budish              17     0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Josh Morrissey           Adam Larsson                                      35     0   1  4  
 2 Travis Brown             Matt Dumba                                        34     0   1  4  
 3 Mark Giordano            David Rundblad                                    31     1   3  1  
 4 Adam Larsson             Matt Dumba                                        0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Pierre-Luc Dubois        Elias Pettersson         50     0   0  5  
 2 Ryan Nugent-Hopkins      Brendan Ranford          Nick Schmaltz            50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Josh Morrissey           Adam Larsson                                      60     0   0  5  
 2 Travis Brown             Matt Dumba                                        40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joakim Nordstrom         Nick Shore               60     0   5  0  
 2 Nicolas Kerdiles         Zach Budish              40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Giordano            David Rundblad           60     0   5  0  
 2 Travis Brown             Matt Dumba               40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Claude Giroux                                     60     0   5  0  
 2 Pierre-Luc Dubois                                 40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Morrissey           Adam Larsson             60     0   5  0  
 2 Travis Brown             Matt Dumba               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Claude Giroux            Elias Pettersson         60     0   0  5  
 2 Pierre-Luc Dubois        Ryan Nugent-Hopkins      40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Morrissey           Adam Larsson             60     0   0  5  
 2 Travis Brown             Matt Dumba               40     0   0  5  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Ryan Nugent-Hopkins      Pierre-Luc Dubois        Adam Larsson             Josh Morrissey           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Ryan Nugent-Hopkins      Pierre-Luc Dubois        Adam Larsson             Josh Morrissey           

<b>Goaltenders</b>
Starting : Tuukka Rask              
Backup : David Rittich            

<b>Extra Forwards</b>
Normal : Pierre-Luc Dubois, Joakim Nordstrom, Claude Giroux - PP : Pierre-Luc Dubois, Joakim Nordstrom - PK : Zach Budish
<b>Extra Defensemen</b>
Normal : Travis Brown, Adam Larsson, Josh Morrissey - PP : Travis Brown - PK : Travis Brown, Adam Larsson
<b>Penalty Shots</b>
Pierre-Luc Dubois, Claude Giroux, Ryan Nugent-Hopkins, Elias Pettersson, Casey Mittelstadt
<b>Custom OT Lines Forwards</b>
Claude Giroux, Pierre-Luc Dubois, Ryan Nugent-Hopkins, Elias Pettersson, Wojtek Wolski, Nick Schmaltz, Casey Mittelstadt, Nicolas Kerdiles, Joakim Nordstrom, Brendan Ranford
<b>Custom OT Lines Defensemen</b>
Adam Larsson, Travis Brown, Josh Morrissey, Matt Dumba, Mark Giordano

<b>Scratches</b>
Greg Pateryn (Healthy), Ryan Murray (Healthy), Alexis Loiseau (Healthy), Andrei Svechnikov (Healthy)</pre></div>
<h1 class="TeamLinesPro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Josh Bailey              Ryan Spooner             Victor Olofsson          33     0   3  2  
 2 Colin White              Andre Burakovsky         Jake DeBrusk             32     0   2  3  
 3 Kyle Turris              Adam Lowry               Conor Sheary             22     0   4  1  
 4 Travis Zajac             Alexander Delnov         Zack Phillips            13     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tim Erixon               Anthony DeAngelo                                  32     0   3  2  
 2 Michael Matheson         Mac Weegar                                        30     0   4  1  
 3 Darren Dietz             Mike Green                                        20     0   3  2  
 4 Michael Matheson         Anthony DeAngelo                                  18     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Josh Bailey              Andre Burakovsky         Jake DeBrusk             60     0   2  3  
 2 Colin White              Ryan Spooner             Conor Sheary             40     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darren Dietz             Mike Green                                        60     0   2  3  
 2 Tim Erixon               Anthony DeAngelo                                  40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Travis Zajac             Zack Phillips            60     0   4  1  
 2 Josh Bailey              Adam Lowry               40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Matheson         Mac Weegar               60     0   4  1  
 2 Tim Erixon               Anthony DeAngelo         40     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Travis Zajac                                      60     0   5  0  
 2 Josh Bailey                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Matheson         Mac Weegar               60     0   5  0  
 2 Darren Dietz             Tim Erixon               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kyle Turris              Jake DeBrusk             60     0   3  2  
 2 Josh Bailey              Andre Burakovsky         40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Matheson         Anthony DeAngelo         60     0   3  2  
 2 Darren Dietz             Mac Weegar               40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Josh Bailey              Andre Burakovsky         Jake DeBrusk             Mike Green               Anthony DeAngelo         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Travis Zajac             Adam Lowry               Zack Phillips            Michael Matheson         Mac Weegar               

<b>Goaltenders</b>
Starting : Cam Ward                 
Backup : Keith Kinkaid            

<b>Extra Forwards</b>
Normal : Andre Burakovsky, Jake DeBrusk, Ryan Spooner - PP : Andre Burakovsky, Jake DeBrusk - PK : Travis Zajac
<b>Extra Defensemen</b>
Normal : Anthony DeAngelo, Mac Weegar, Michael Matheson - PP : Anthony DeAngelo - PK : Michael Matheson, Darren Dietz
<b>Penalty Shots</b>
Andre Burakovsky, Ryan Spooner, Jake DeBrusk, Conor Sheary, Kyle Turris
<b>Custom OT Lines Forwards</b>
Andre Burakovsky, Colin White, Ryan Spooner, Jake DeBrusk, Conor Sheary, Victor Olofsson, Kyle Turris, Alexander Delnov, Zack Phillips, Adam Lowry
<b>Custom OT Lines Defensemen</b>
Mac Weegar, Anthony DeAngelo, Tim Erixon, Michael Matheson, Darren Dietz

<b>Scratches</b>
Nico Sturm (Healthy), Ryan Wilson (Healthy), Ivan Barbashev (Healthy)</pre></div>
<h1 class="TeamLinesPro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matthew Peca             Brett Connolly           Connor Brown             25     1   2  2  
 2 Lukas Sedlak             Alex Tuch                Zach Aston-Reese         25     1   2  2  
 3 Angelo Miceli            Tom Kuhnhackl            David Kampf              25     1   2  2  
 4 Shane Eiserman           Brett MacLean            Dmitry Sokolov           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser                                      25     1   2  2  
 2 Connor Murphy            Magnus Nygren                                     25     1   2  2  
 3 Dillon Fournier          Mike Reilly                                       25     1   2  2  
 4 Brendan Smith            Dan DeKeyser                                      25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matthew Peca             Brett Connolly           Connor Brown             60     1   2  2  
 2 Lukas Sedlak             Alex Tuch                Zach Aston-Reese         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser                                      60     1   2  2  
 2 Connor Murphy            Dillon Fournier                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brett Connolly           Connor Brown             60     1   2  2  
 2 Matthew Peca             Alex Tuch                40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser             60     1   2  2  
 2 Connor Murphy            Mike Reilly              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brett Connolly                                    60     1   2  2  
 2 Connor Brown                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser             60     1   2  2  
 2 Connor Murphy            Dillon Fournier          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brett Connolly           Connor Brown             60     1   2  2  
 2 Matthew Peca             Alex Tuch                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser             60     1   2  2  
 2 Connor Murphy            Mike Reilly              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Matthew Peca             Brett Connolly           Connor Brown             Brendan Smith            Dan DeKeyser             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Matthew Peca             Brett Connolly           Connor Brown             Brendan Smith            Dan DeKeyser             

<b>Goaltenders</b>
Starting : Kari Lehtonen            
Backup : Pekka Rinne              

<b>Extra Forwards</b>
Normal : Angelo Miceli, David Kampf, Tom Kuhnhackl - PP : Angelo Miceli, David Kampf - PK : Tom Kuhnhackl
<b>Extra Defensemen</b>
Normal : Dillon Fournier, Mike Reilly, Connor Murphy - PP : Dillon Fournier - PK : Mike Reilly, Connor Murphy
<b>Penalty Shots</b>
Brett Connolly, Connor Brown, Matthew Peca, Alex Tuch, Lukas Sedlak
<b>Custom OT Lines Forwards</b>
Brett Connolly, Connor Brown, Matthew Peca, Alex Tuch, Lukas Sedlak, Zach Aston-Reese, Angelo Miceli, David Kampf, Tom Kuhnhackl, Brett MacLean
<b>Custom OT Lines Defensemen</b>
Brendan Smith, Dan DeKeyser, Connor Murphy, Magnus Nygren, Dillon Fournier

<b>Scratches</b>
Ben Hanowski (Healthy)</pre></div>
<h1 class="TeamLinesPro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Clayton Keller           Zach Parise              Timo Meier               40     0   3  2  
 2 Paul Stastny             Jacob Josefson           Matthew Nieto            35     0   3  2  
 3 Brandon Sutter           A.J. Greer               Brock McGinn             20     0   3  2  
 4 Maxime St-Cyr            Artturi Lehkonen         Frank Corrado            5      0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jack Johnson             Keith Yandle                                      35     0   3  2  
 2 Ryan Pulock              Chris Bigras                                      35     0   3  2  
 3 Luke Schenn              Dylan McIlrath                                    30     0   4  1  
 4 Jack Johnson             Keith Yandle                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Clayton Keller           Artturi Lehkonen         Timo Meier               50     0   0  5  
 2 Brandon Sutter           Jacob Josefson           Matthew Nieto            50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jack Johnson             Keith Yandle                                      60     0   2  3  
 2 Ryan Pulock              Chris Bigras                                      40     0   3  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Sutter           A.J. Greer               60     0   4  1  
 2 Matthew Nieto            Brock McGinn             40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Johnson             Luke Schenn              60     0   5  0  
 2 Keith Yandle             Dylan McIlrath           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brock McGinn                                      60     0   5  0  
 2 Zach Parise                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luke Schenn              Keith Yandle             60     0   5  0  
 2 Ryan Pulock              Dylan McIlrath           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Maxime St-Cyr            Artturi Lehkonen         60     0   3  2  
 2 Brandon Sutter           Brock McGinn             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Johnson             Ryan Pulock              60     0   3  2  
 2 Keith Yandle             Chris Bigras             40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Clayton Keller           Timo Meier               Matthew Nieto            Jack Johnson             Keith Yandle             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Paul Stastny             Timo Meier               Matthew Nieto            Jack Johnson             Keith Yandle             

<b>Goaltenders</b>
Starting : Jaroslav Halak           
Backup : John Gibson              

<b>Extra Forwards</b>
Normal : Matthew Nieto, Brandon Sutter, Paul Stastny - PP : Timo Meier, Brandon Sutter - PK : A.J. Greer
<b>Extra Defensemen</b>
Normal : Frank Corrado, Keith Yandle, Ryan Pulock - PP : Frank Corrado - PK : Jack Johnson, Keith Yandle
<b>Penalty Shots</b>
Clayton Keller, Timo Meier, Jacob Josefson, Matthew Nieto, A.J. Greer
<b>Custom OT Lines Forwards</b>
Clayton Keller, Timo Meier, Jacob Josefson, Matthew Nieto, A.J. Greer, Paul Stastny, Zach Parise, Brock McGinn, Brandon Sutter, Artturi Lehkonen
<b>Custom OT Lines Defensemen</b>
Jack Johnson, Keith Yandle, Ryan Pulock, Chris Bigras, Frank Corrado

<b>Scratches</b>
Warren Foegele (Healthy), Chase Marchand (Healthy), Marek Mazanec (Healthy)</pre></div>
<h1 class="TeamLinesPro_SEA"><a id="SeattleKraken">Seattle Kraken</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Kraken Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#SeattleKraken">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#SeattleKraken">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#SeattleKraken">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#SeattleKraken">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#SeattleKraken">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#SeattleKraken">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#SeattleKraken">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#SeattleKraken">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#SeattleKraken">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#SeattleKraken">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#SeattleKraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleKraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleKraken" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Austin Watson            Anton Slepyshev          Rihards Bukarts          35     0   4  1  
 2 Greg McKegg              Max Pacioretty           Reid Boucher             30     0   4  1  
 3 Zac Dalpe                Eric Robinson            Joseph Garreffa          25     0   4  1  
 4 Drake Caggiula           Michael Raffl            Maxim Mamin              10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake Dotchin             Noah Hanifin                                      37     0   4  1  
 2 Joe Morrow               Samuel Morin                                      34     0   4  1  
 3 Matthew Finn             Matt Grzelcyk                                     29     0   4  1  
 4 Matt Grzelcyk            Samuel Morin                                      0      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Zac Dalpe                Rihards Bukarts          Anton Slepyshev          45     0   0  5  
 2 Austin Watson            Max Pacioretty           Reid Boucher             55     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Joe Morrow               Noah Hanifin                                      60     0   0  5  
 2 Samuel Morin             Jake Dotchin                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Austin Watson            Maxim Mamin              60     0   5  0  
 2 Drake Caggiula           Eric Robinson            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Dotchin             Matt Grzelcyk            60     0   5  0  
 2 Samuel Morin             Noah Hanifin             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Drake Caggiula                                    60     0   5  0  
 2 Austin Watson                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Morin             Jake Dotchin             60     0   5  0  
 2 Matt Grzelcyk            Noah Hanifin             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Greg McKegg              Rihards Bukarts          60     0   0  5  
 2 Austin Watson            Eric Robinson            40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Hanifin             Matt Grzelcyk            60     0   1  4  
 2 Matthew Finn             Jake Dotchin             40     0   1  4  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Drake Caggiula           Max Pacioretty           Anton Slepyshev          Samuel Morin             Joe Morrow               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Austin Watson            Drake Caggiula           Maxim Mamin              Noah Hanifin             Jake Dotchin             

<b>Goaltenders</b>
Starting : Jonathan Bernier         
Backup : Juuse Saros              

<b>Extra Forwards</b>
Normal : Rihards Bukarts, Max Pacioretty, Anton Slepyshev - PP : Maxim Mamin, Max Pacioretty - PK : Maxim Mamin
<b>Extra Defensemen</b>
Normal : Jake Dotchin, Matthew Finn, Joe Morrow - PP : Matthew Finn - PK : Joe Morrow, Matthew Finn
<b>Penalty Shots</b>
Max Pacioretty, Greg McKegg, Maxim Mamin, Anton Slepyshev, Reid Boucher
<b>Custom OT Lines Forwards</b>
Zac Dalpe, Max Pacioretty, Drake Caggiula, Rihards Bukarts, Greg McKegg, Anton Slepyshev, Eric Robinson, Reid Boucher, Austin Watson, Maxim Mamin
<b>Custom OT Lines Defensemen</b>
Noah Hanifin, Joe Morrow, Jake Dotchin, Matthew Finn, Samuel Morin

<b>Scratches</b>
Yan-Pavel Laplante (Healthy), Nikita Tryamkin (Healthy), Peter Trainor (Healthy)</pre></div>
<h1 class="TeamLinesPro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Curtis Lazar             Tanner Pearson           Devante Smith-Pelly      33     3   2  0  
 2 Nazem Kadri              Artemi Panarin           Valeri Nichushkin        33     0   1  4  
 3 Theodor Blueger          Valentin Zykov           Mark Stone               27     0   1  4  
 4 Tyler Johnson            Frans Nielsen            Nikita Soshnikov         7      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ben Chiarot              Jamie Oleksiak                                    36     3   2  0  
 2 John Klingberg           Brady Skjei                                       35     0   2  3  
 3 Andreas Borgman          Dillon Heatherington                              29     0   2  3  
 4 Ben Chiarot              Dillon Heatherington                              0      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nazem Kadri              Artemi Panarin           Mark Stone               54     0   0  5  
 2 Tyler Johnson            Tanner Pearson           Valeri Nichushkin        46     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Klingberg           Dillon Heatherington                              51     0   0  5  
 2 Brady Skjei              Andreas Borgman                                   49     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Frans Nielsen            Tanner Pearson           52     0   5  0  
 2 Curtis Lazar             Devante Smith-Pelly      48     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jamie Oleksiak           Ben Chiarot              53     0   5  0  
 2 Dillon Heatherington     Brady Skjei              47     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Frans Nielsen                                     54     0   5  0  
 2 Curtis Lazar                                      46     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jamie Oleksiak           Ben Chiarot              54     0   5  0  
 2 Dillon Heatherington     Andreas Borgman          46     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Curtis Lazar             Artemi Panarin           54     0   3  2  
 2 Nazem Kadri              Valeri Nichushkin        46     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jamie Oleksiak           Dillon Heatherington     54     0   2  3  
 2 Ben Chiarot              Andreas Borgman          46     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nazem Kadri              Valeri Nichushkin        Mark Stone               Brady Skjei              John Klingberg           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Curtis Lazar             Frans Nielsen            Devante Smith-Pelly      Brady Skjei              Jamie Oleksiak           

<b>Goaltenders</b>
Starting : Kevin Poulin             
Backup : Ivan Nalimov             

<b>Extra Forwards</b>
Normal : Tyler Johnson, Frans Nielsen, Valentin Zykov - PP : Valentin Zykov, Devante Smith-Pelly - PK : Nikita Soshnikov
<b>Extra Defensemen</b>
Normal : Andreas Borgman, Dillon Heatherington, Brady Skjei - PP : Jamie Oleksiak - PK : Andreas Borgman, John Klingberg
<b>Penalty Shots</b>
Nikita Soshnikov, Nazem Kadri, Mark Stone, Valeri Nichushkin, Artemi Panarin
<b>Custom OT Lines Forwards</b>
Valeri Nichushkin, Curtis Lazar, Mark Stone, Tanner Pearson, Tyler Johnson, Nazem Kadri, Devante Smith-Pelly, Theodor Blueger, Artemi Panarin, Frans Nielsen
<b>Custom OT Lines Defensemen</b>
Ben Chiarot, Brady Skjei, John Klingberg, Jamie Oleksiak, Andreas Borgman

<b>Scratches</b>
Tomas Plekanec (Healthy)</pre></div>
<h1 class="TeamLinesPro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alexander Wennberg       Boone Jenner             Elias Lindholm           25     0   0  5  
 2 Tyler Seguin             Evander Kane             Émile Poirier            25     0   0  5  
 3 Brayden Schenn           Bryan Rust               Andreas Athanasiou       25     0   0  5  
 4 Patrice Cormier          Cody Eakin               Tyler Toffoli            25     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tucker Poolman           P.K. Subban                                       25     5   0  0  
 2 Nikita Zadorov           Esa Lindell                                       25     5   0  0  
 3 Simon Despres            Adam Janosik                                      25     5   0  0  
 4 P.K. Subban              Simon Despres                                     25     5   0  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Seguin             Émile Poirier            Elias Lindholm           60     0   0  5  
 2 Alexander Wennberg       Brayden Schenn           Boone Jenner             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 P.K. Subban              Nikita Zadorov                                    65     0   0  5  
 2 Adam Janosik             Esa Lindell                                       35     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrice Cormier          Evander Kane             60     5   0  0  
 2 Boone Jenner             Bryan Rust               40     5   0  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zadorov           Simon Despres            60     5   0  0  
 2 Esa Lindell              P.K. Subban              40     5   0  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Evander Kane                                      60     0   0  5  
 2 Boone Jenner                                      40     0   0  5  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zadorov           Simon Despres            50     5   0  0  
 2 Esa Lindell              P.K. Subban              50     5   0  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexander Wennberg       Émile Poirier            50     5   0  0  
 2 Tyler Seguin             Elias Lindholm           50     5   0  0  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 P.K. Subban              Tucker Poolman           60     5   0  0  
 2 Simon Despres            Nikita Zadorov           40     5   0  0  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Seguin             Émile Poirier            Elias Lindholm           P.K. Subban              Tucker Poolman           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexander Wennberg       Evander Kane             Boone Jenner             Nikita Zadorov           Esa Lindell              

<b>Goaltenders</b>
Starting : Adam Wilcox              
Backup : Anthony Stolarz          

<b>Extra Forwards</b>
Normal : Tyler Seguin, Émile Poirier, Elias Lindholm - PP : Tyler Seguin, Boone Jenner - PK : Alexander Wennberg
<b>Extra Defensemen</b>
Normal : Simon Despres, P.K. Subban, Esa Lindell - PP : Adam Janosik - PK : Simon Despres, Esa Lindell
<b>Penalty Shots</b>
Émile Poirier, Tyler Seguin, Evander Kane, Andreas Athanasiou, Elias Lindholm
<b>Custom OT Lines Forwards</b>
Tyler Seguin, Evander Kane, Émile Poirier, Boone Jenner, Elias Lindholm, Brayden Schenn, Andreas Athanasiou, Bryan Rust, Cody Eakin, Patrice Cormier
<b>Custom OT Lines Defensemen</b>
P.K. Subban, Tucker Poolman, Esa Lindell, Simon Despres, Adam Janosik

<b>Scratches</b>
Mattias Ekholm (Healthy), Malcolm Subban (Healthy), Darcy Kuemper (Healthy)</pre></div>
<h1 class="TeamLinesPro_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikael Granlund          Emerson Etem             Mikko Rantanen           40     0   1  4  
 2 Adam Henrique            Saku Maenalanen          Sebastian Aho            30     0   1  4  
 3 Mike Richards            Louis Leblanc            Teemu Pulkkinen          20     2   3  0  
 4 Mikko Koivu              Sam Carrick              Zack Kassian             10     2   3  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Morgan Rielly            Tobias Enstrom                                    42     0   2  3  
 2 Stefan Elliott           Ville Pokka                                       30     1   2  2  
 3 Samuel Girard            Mikko Lehtonen                                    28     1   2  2  
 4 Morgan Rielly            Ville Pokka                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikael Granlund          Emerson Etem             Mikko Rantanen           60     0   0  5  
 2 Mike Richards            Saku Maenalanen          Sebastian Aho            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Morgan Rielly            Ville Pokka                                       60     0   1  4  
 2 Tobias Enstrom           Stefan Elliott                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mike Richards            Louis Leblanc            60     1   4  0  
 2 Mikko Koivu              Zack Kassian             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Morgan Rielly            Ville Pokka              60     0   5  0  
 2 Mikko Lehtonen           Stefan Elliott           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mike Richards                                     60     0   5  0  
 2 Louis Leblanc                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Morgan Rielly            Ville Pokka              60     0   5  0  
 2 Stefan Elliott           Mikko Lehtonen           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mikael Granlund          Mikko Rantanen           60     0   1  4  
 2 Mike Richards            Emerson Etem             40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Morgan Rielly            Ville Pokka              60     0   2  3  
 2 Tobias Enstrom           Stefan Elliott           40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikael Granlund          Sebastian Aho            Mikko Rantanen           Morgan Rielly            Ville Pokka              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mike Richards            Zack Kassian             Louis Leblanc            Mikko Lehtonen           Morgan Rielly            

<b>Goaltenders</b>
Starting : Steve Mason              
Backup : Garret Sparks            

<b>Extra Forwards</b>
Normal : Emerson Etem, Mikael Granlund, Saku Maenalanen - PP : Teemu Pulkkinen, Mike Richards - PK : Zack Kassian
<b>Extra Defensemen</b>
Normal : Morgan Rielly, Ville Pokka, Mikko Lehtonen - PP : Stefan Elliott - PK : Ville Pokka, Tobias Enstrom
<b>Penalty Shots</b>
Mike Richards, Mikko Rantanen, Mikael Granlund, Teemu Pulkkinen, Emerson Etem
<b>Custom OT Lines Forwards</b>
Emerson Etem, Mikael Granlund, Sebastian Aho, Zack Kassian, Teemu Pulkkinen, Mike Richards, Mikko Rantanen, Louis Leblanc, Sam Carrick, Mikko Koivu
<b>Custom OT Lines Defensemen</b>
Morgan Rielly, Ville Pokka, Tobias Enstrom, Mikko Lehtonen, Stefan Elliott

<b>Scratches</b>
Petteri Lindbohm (Healthy), Joel Armia (Healthy)</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Nikolaj Ehlers           Kaapo Kakko              33     0   0  5  
 2 Derek Stepan             Ahti Oksanen             Matthew Tkachuk          30     1   2  2  
 3 Darren Helm              Loui Eriksson            Filip Zadina             27     1   2  2  
 4 Stefan Matteau           Zemgus Girgensons        Filip Zadina             10     1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jordan Oesterle          Dougie Hamilton                                   34     2   3  0  
 2 Rasmus Ristolainen       Erik Cernak                                       34     2   3  0  
 3 Jakub Jerabek            Jason Demers                                      32     2   3  0  
 4 Marc-Andre Gragnani      Jordan Oesterle                                   0      1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Matthew Tkachuk          Kaapo Kakko              56     1   0  4  
 2 Derek Stepan             Filip Zadina             Nikolaj Ehlers           44     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Rasmus Ristolainen                                56     1   0  4  
 2 Jordan Oesterle          Ahti Oksanen                                      44     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Darren Helm              Matthew Tkachuk          54     1   4  0  
 2 Stefan Matteau           Ahti Oksanen             46     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          Jason Demers             54     1   4  0  
 2 Jordan Oesterle          Rasmus Ristolainen       46     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Stefan Matteau                                    55     1   4  0  
 2 Darren Helm                                       45     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          Rasmus Ristolainen       55     1   4  0  
 2 Jordan Oesterle          Jason Demers             45     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Stepan             Matthew Tkachuk          53     1   2  2  
 2 Connor McDavid           Nikolaj Ehlers           47     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Jordan Oesterle          55     1   2  2  
 2 Jason Demers             Dougie Hamilton          45     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Matthew Tkachuk          Nikolaj Ehlers           Rasmus Ristolainen       Dougie Hamilton          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Nikolaj Ehlers           Matthew Tkachuk          Dougie Hamilton          Rasmus Ristolainen       

<b>Goaltenders</b>
Starting : Vitek Vanecek            
Backup : Anton Forsberg           

<b>Extra Forwards</b>
Normal : Connor McDavid, Nikolaj Ehlers, Derek Stepan - PP : Connor McDavid, Matthew Tkachuk - PK : Matthew Tkachuk
<b>Extra Defensemen</b>
Normal : Dougie Hamilton, Rasmus Ristolainen, Jason Demers - PP : Dougie Hamilton - PK : Dougie Hamilton, Rasmus Ristolainen
<b>Penalty Shots</b>
Connor McDavid, Matthew Tkachuk, Derek Stepan, Nikolaj Ehlers, Filip Zadina
<b>Custom OT Lines Forwards</b>
Connor McDavid, Matthew Tkachuk, Nikolaj Ehlers, Derek Stepan, Filip Zadina, Kaapo Kakko, Stefan Matteau, Loui Eriksson, Ahti Oksanen, Darren Helm
<b>Custom OT Lines Defensemen</b>
Dougie Hamilton, Rasmus Ristolainen, Jason Demers, Jordan Oesterle, Ahti Oksanen

<b>Scratches</b>
Carl Hagelin (Healthy), Michael Leighton (Healthy)</pre></div>
<h1 class="TeamLinesPro_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#VegasGoldenKnights">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 William Karlsson         Morgan Klimchuk          Patrick Kane             36     0   1  4  
 2 Mika Zibanejad           Brock Nelson             Patrik Laine             32     0   2  3  
 3 Ryan Getzlaf             Tim Stützle              Patric Hornqvist         24     1   2  2  
 4 Marcus Kruger            Myles Bell               Patrik Laine             8      1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Schultz           Kris Letang                                       38     0   3  2  
 2 Erik Johnson             Xavier Ouellet                                    32     2   1  2  
 3 Kris Russell             Darnell Nurse                                     24     2   2  1  
 4 Justin Schultz           Kris Letang                                       6      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 William Karlsson         Morgan Klimchuk          Patrick Kane             60     0   2  3  
 2 Mika Zibanejad           Tim Stützle              Patrik Laine             40     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Schultz           Kris Letang                                       60     0   2  3  
 2 Erik Johnson             Darnell Nurse                                     40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Getzlaf             Marcus Kruger            60     0   4  1  
 2 Brock Nelson             Morgan Klimchuk          40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Xavier Ouellet           Erik Johnson             60     0   5  0  
 2 Kris Letang              Darnell Nurse            40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brock Nelson                                      60     0   5  0  
 2 Ryan Getzlaf                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Xavier Ouellet           Erik Johnson             60     0   4  1  
 2 Kris Letang              Darnell Nurse            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mika Zibanejad           Patrick Kane             60     0   2  3  
 2 William Karlsson         Patrik Laine             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Schultz           Kris Letang              60     0   2  3  
 2 Erik Johnson             Darnell Nurse            40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   William Karlsson         Patrik Laine             Patrick Kane             Justin Schultz           Kris Letang              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mika Zibanejad           Brock Nelson             Patrick Kane             Kris Letang              Erik Johnson             

<b>Goaltenders</b>
Starting : Matt Murray              
Backup : Vasili Koshechkin        

<b>Extra Forwards</b>
Normal : William Karlsson, Patrick Kane, Mika Zibanejad - PP : Patrik Laine, William Karlsson - PK : Marcus Kruger
<b>Extra Defensemen</b>
Normal : Justin Schultz, Kris Letang, Darnell Nurse - PP : Kris Letang - PK : Erik Johnson, Darnell Nurse
<b>Penalty Shots</b>
Mika Zibanejad, Patrick Kane, Patrik Laine, William Karlsson, Morgan Klimchuk
<b>Custom OT Lines Forwards</b>
Patrick Kane, Patrik Laine, William Karlsson, Mika Zibanejad, Morgan Klimchuk, Tim Stützle, Ryan Getzlaf, Patric Hornqvist, Myles Bell, Marcus Kruger
<b>Custom OT Lines Defensemen</b>
Kris Letang, Justin Schultz, Darnell Nurse, Erik Johnson, Xavier Ouellet

<b>Scratches</b>
Derick Brassard (Healthy), Victor Antipin (Healthy), Tyler Biggs (Healthy)</pre></div>
<h1 class="TeamLinesPro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Quinton Howden           Alex DeBrincat           Tyler Steenbergen        39     0   1  4  
 2 Dominik Kahun            Kirill Kaprizov          Phil Kessel              26     0   1  4  
 3 Marcus Foligno           Markus Nurmi             Nino Niederreiter        22     0   2  3  
 4 Mike Hoffman             Nick Ritchie             Marcus Foligno           13     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Goligoski           Jonathon Merrill                                  36     1   2  2  
 2 Ryan Ellis               Mikhail Sergachev                                 31     1   2  2  
 3 Nicolas Hague            Jared Cowen                                       26     1   2  2  
 4 Ryan Ellis               Jared Cowen                                       7      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Quinton Howden           Alex DeBrincat           Nino Niederreiter        60     0   1  4  
 2 Dominik Kahun            Marcus Foligno           Phil Kessel              40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jared Cowen              Mikhail Sergachev                                 60     1   1  3  
 2 Ryan Ellis               Alex Goligoski                                    40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Phil Kessel              Nino Niederreiter        60     1   2  2  
 2 Dominik Kahun            Alex DeBrincat           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mikhail Sergachev        Ryan Ellis               60     1   2  2  
 2 Jared Cowen              Alex Goligoski           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dominik Kahun                                     60     1   2  2  
 2 Nino Niederreiter                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Ellis               Jared Cowen              60     1   2  2  
 2 Alex Goligoski           Mikhail Sergachev        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nino Niederreiter        Dominik Kahun            60     1   2  2  
 2 Phil Kessel              Alex DeBrincat           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Ellis               Jared Cowen              60     1   2  2  
 2 Mikhail Sergachev        Jonathon Merrill         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kirill Kaprizov          Alex DeBrincat           Nino Niederreiter        Alex Goligoski           Ryan Ellis               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Quinton Howden           Markus Nurmi             Nino Niederreiter        Jared Cowen              Alex Goligoski           

<b>Goaltenders</b>
Starting : Simeon Varlamov          
Backup : Connor Hellebuyck        

<b>Extra Forwards</b>
Normal : Nino Niederreiter, Dominik Kahun, Alex DeBrincat - PP : Dominik Kahun, Nino Niederreiter - PK : Nino Niederreiter
<b>Extra Defensemen</b>
Normal : Ryan Ellis, Mikhail Sergachev, Jared Cowen - PP : Ryan Ellis - PK : Mikhail Sergachev, Ryan Ellis
<b>Penalty Shots</b>
Alex DeBrincat, Nino Niederreiter, Quinton Howden, Dominik Kahun, Phil Kessel
<b>Custom OT Lines Forwards</b>
Mike Hoffman, Quinton Howden, Dominik Kahun, Marcus Foligno, Nick Ritchie, Alex DeBrincat, Markus Nurmi, Phil Kessel, Nino Niederreiter, Kirill Kaprizov
<b>Custom OT Lines Defensemen</b>
Ryan Ellis, Jared Cowen, Nicolas Hague, Mikhail Sergachev, Alex Goligoski

<b>Scratches</b>
Vladislav Namestnikov (Healthy)</pre></div>
<h1 class="TeamLinesPro_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL101-PLF-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL101-PLF-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-PLF-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL101-PLF-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL101-PLF-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL101-PLF-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL101-PLF-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL101-PLF-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL101-PLF-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL101-PLF-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Gabriel Landeskog        Alexander Burmistrov     32     0   0  5  
 2 Mark Scheifele           Anders Lee               Blake Wheeler            32     0   1  4  
 3 Jason Spezza             Cole Ully                Brent Burns              26     0   2  3  
 4 Casey Cizikas            Andrew Copp              Milan Lucic              10     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Jake Gardiner                                     36     0   3  2  
 2 Jordan Schmaltz          Calvin de Haan                                    34     0   4  1  
 3 Ryan Graves              Oscar Fantenberg                                  30     0   4  1  
 4 Victor Hedman            Brent Burns                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Gabriel Landeskog        Alexander Burmistrov     55     0   0  5  
 2 Mark Scheifele           Anders Lee               Blake Wheeler            45     0   5  0  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Brent Burns                                       60     0   1  4  
 2 Jake Gardiner            Cole Ully                                         40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Casey Cizikas            Gabriel Landeskog        60     0   5  0  
 2 Andrew Copp              Blake Wheeler            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Jordan Schmaltz          60     0   5  0  
 2 Calvin de Haan           Oscar Fantenberg         40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Casey Cizikas                                     60     0   5  0  
 2 Andrew Copp                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Jordan Schmaltz          60     0   5  0  
 2 Calvin de Haan           Oscar Fantenberg         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Auston Matthews          Gabriel Landeskog        55     0   1  4  
 2 Mark Scheifele           Alexander Burmistrov     45     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Brent Burns              60     0   3  2  
 2 Jake Gardiner            Calvin de Haan           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Auston Matthews          Gabriel Landeskog        Alexander Burmistrov     Victor Hedman            Brent Burns              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Auston Matthews          Gabriel Landeskog        Alexander Burmistrov     Victor Hedman            Brent Burns              

<b>Goaltenders</b>
Starting : Carey Price              
Backup : Mark Visentin            

<b>Extra Forwards</b>
Normal : Cole Ully, Auston Matthews, Blake Wheeler - PP : Cole Ully, Anders Lee - PK : Andrew Copp
<b>Extra Defensemen</b>
Normal : Ryan Graves, Jordan Schmaltz, Jake Gardiner - PP : Ryan Graves - PK : Jordan Schmaltz, Jake Gardiner
<b>Penalty Shots</b>
Alexander Burmistrov, Auston Matthews, Blake Wheeler, Mark Scheifele, Jason Spezza
<b>Custom OT Lines Forwards</b>
Auston Matthews, Gabriel Landeskog, Alexander Burmistrov, Mark Scheifele, Brent Burns, Blake Wheeler, Milan Lucic, Anders Lee, Cole Ully, Casey Cizikas
<b>Custom OT Lines Defensemen</b>
Victor Hedman, Brent Burns, Jake Gardiner, Calvin de Haan, Ryan Graves

<b>Scratches</b>
Dmitri Kulikov (Torn Right ACL Injury), Jordan Caron (Healthy), Sami Vatanen (Healthy), Rocco Grimaldi (Healthy)</pre></div>
<?php include "Footer.php";?>
