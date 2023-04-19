<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Lines</title>
<script src="ASHL101.js"></script>
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
[ <a href="ASHL101-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brendan Leipsic          Lawson Crouse            Martin Necas             38     1   1  3  
 2 Ryan Strome              Zach Sanford             Nolan Patrick            32     1   1  3  
 3 Jesperi Kotkaniemi       Rudolfs Balcers          Daniel Sprong            27     1   2  2  
 4 Chris Wagner             Dustin Brown             Mike Amadio              3      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Brandon Montour                                   38     1   2  2  
 2 Alexander Edler          Zachary Werenski                                  36     1   2  2  
 3 Jarred Tinordi           Markus Nutivaara                                  26     1   3  1  
 4 Jarred Tinordi           Markus Nutivaara                                  0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brendan Leipsic          Daniel Sprong            Martin Necas             65     0   0  5  
 2 Ryan Strome              Lawson Crouse            Nolan Patrick            35     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Zachary Werenski                                  70     0   1  4  
 2 Alexander Edler          Brandon Montour                                   30     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Wagner             Dustin Brown             60     1   4  0  
 2 Lawson Crouse            Zach Sanford             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jarred Tinordi           Brandon Montour          70     1   4  0  
 2 Alexander Edler          Markus Nutivaara         30     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Chris Wagner                                      60     0   5  0  
 2 Lawson Crouse                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jarred Tinordi           Brandon Montour          70     0   5  0  
 2 Alexander Edler          Markus Nutivaara         30     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jesperi Kotkaniemi       Martin Necas             50     1   1  3  
 2 Ryan Strome              Brendan Leipsic          50     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Markus Nutivaara         50     1   2  2  
 2 Cam Fowler               Zachary Werenski         50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Strome              Brendan Leipsic          Martin Necas             Cam Fowler               Zachary Werenski         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Wagner             Lawson Crouse            Dustin Brown             Alexander Edler          Jarred Tinordi           

<b>Goaltenders</b>
Starting : Jacob Markstrom          
Backup : Scott Darling            

<b>Extra Forwards</b>
Normal : Jesperi Kotkaniemi, Rudolfs Balcers, Ryan Strome - PP : Jesperi Kotkaniemi, Rudolfs Balcers - PK : Nolan Patrick
<b>Extra Defensemen</b>
Normal : Markus Nutivaara, Brandon Montour, Zachary Werenski - PP : Markus Nutivaara - PK : Zachary Werenski, Cam Fowler
<b>Penalty Shots</b>
Ryan Strome, Rudolfs Balcers, Nolan Patrick, Dustin Brown, Brendan Leipsic
<b>Custom OT Lines Forwards</b>
Brendan Leipsic, Nolan Patrick, Martin Necas, Daniel Sprong, Ryan Strome, Rudolfs Balcers, Jesperi Kotkaniemi, Lawson Crouse, Mike Amadio, Zach Sanford
<b>Custom OT Lines Defensemen</b>
Cam Fowler, Zachary Werenski, Alexander Edler, Brandon Montour, Markus Nutivaara

<b>Scratches</b>
Andrey Pedan (Healthy), Dylan Strome (Upper Body Injury), Joey Laleggia (Healthy), Brock Boeser (Healthy)</pre></div>
<h1 class="TeamLinesPro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Oskar Lindblom           Logan Couture            35     3   1  1  
 2 Steven Stamkos           Bo Horvat                Sam Bennett              32     3   1  1  
 3 Cole Cassels             Eric Staal               T.J. Oshie               19     4   1  0  
 4 Jeff Carter              Noel Acciari             Wayne Simmonds           14     4   1  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brandon Gormley          Ryan Suter                                        35     2   3  0  
 2 Zach Bogosian            Hampus Lindholm                                   31     2   3  0  
 3 Duncan Keith             Travis Sanheim                                    25     2   3  0  
 4 Hampus Lindholm          Zach Bogosian                                     9      2   3  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Logan Couture            Steven Stamkos           70     1   0  4  
 2 Bo Horvat                Oskar Lindblom           Sam Bennett              30     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Bogosian            Hampus Lindholm                                   70     1   1  3  
 2 Brandon Gormley          Ryan Suter                                        30     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cole Cassels             Noel Acciari             70     1   4  0  
 2 Eric Staal               Jeff Carter              30     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Zach Bogosian            60     1   4  0  
 2 Hampus Lindholm          Duncan Keith             40     1   4  0  

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
 1 Eric Staal               Wayne Simmonds           60     1   2  2  
 2 T.J. Oshie               Oskar Lindblom           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Gormley          Ryan Suter               60     1   2  2  
 2 Travis Sanheim           Duncan Keith             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Tavares             Steven Stamkos           Logan Couture            Hampus Lindholm          Zach Bogosian            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cole Cassels             Oskar Lindblom           Sam Bennett              Ryan Suter               Zach Bogosian            

<b>Goaltenders</b>
Starting : Braden Holtby            
Backup : Petr Mrazek              

<b>Extra Forwards</b>
Normal : Logan Couture, Oskar Lindblom, Noel Acciari - PP : Steven Stamkos, Eric Staal - PK : Wayne Simmonds
<b>Extra Defensemen</b>
Normal : Duncan Keith, Brandon Gormley, Travis Sanheim - PP : Brandon Gormley - PK : Travis Sanheim, Brandon Gormley
<b>Penalty Shots</b>
Steven Stamkos, Logan Couture, John Tavares, Oskar Lindblom, Bo Horvat
<b>Custom OT Lines Forwards</b>
John Tavares, Logan Couture, Steven Stamkos, Oskar Lindblom, Bo Horvat, Cole Cassels, T.J. Oshie, Sam Bennett, Eric Staal, Noel Acciari
<b>Custom OT Lines Defensemen</b>
Hampus Lindholm, Zach Bogosian, Brandon Gormley, Travis Sanheim, Ryan Suter

<b>Scratches</b>
Keegan Kanzig (Healthy), Michael McCarron (Healthy), Raman Hrabarenka (Healthy)</pre></div>
<h1 class="TeamLinesPro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Marchand            Jake Guentzel            Ondrej Kase              33     0   2  3  
 2 Nico Hischier            Bobby Ryan               Rickard Rakell           32     0   2  3  
 3 Dillon Dube              Jamie Benn               Marko Dano               23     0   3  2  
 4 Frédérik Gauthier        Vladimir Tkachev         Scott Kosmachuk          12     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     John Carlson                                      32     1   2  2  
 2 Charlie McAvoy           Derrick Pouliot                                   32     1   2  2  
 3 Marco Scandella          Eric Gelinas                                      28     1   2  2  
 4 John Carlson             Marco Scandella                                   8      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Marchand            Jake Guentzel            Ondrej Kase              60     0   0  5  
 2 Nico Hischier            Rickard Rakell           Bobby Ryan               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Charlie McAvoy           John Carlson                                      60     0   0  5  
 2 Derrick Pouliot          Oliver Ekman-Larsson                              40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dillon Dube              Scott Kosmachuk          50     0   5  0  
 2 Brad Marchand            Ondrej Kase              50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Marco Scandella          50     0   5  0  
 2 Derrick Pouliot          John Carlson             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brad Marchand                                     60     0   5  0  
 2 Dillon Dube                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Marco Scandella          50     0   5  0  
 2 Derrick Pouliot          John Carlson             50     0   0  5  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nico Hischier            Jake Guentzel            50     0   2  3  
 2 Brad Marchand            Ondrej Kase              50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Charlie McAvoy           John Carlson             60     1   2  2  
 2 Oliver Ekman-Larsson     Derrick Pouliot          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Marchand            Jake Guentzel            Ondrej Kase              John Carlson             Charlie McAvoy           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dillon Dube              Brad Marchand            Ondrej Kase              Marco Scandella          Oliver Ekman-Larsson     

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
John Carlson, Charlie McAvoy, Oliver Ekman-Larsson, Derrick Pouliot, Eric Gelinas

<b>Scratches</b>
Cameron Gaunce (Healthy), Rick Nash (Healthy), Hudson Fasching (Healthy)</pre></div>
<h1 class="TeamLinesPro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikhail Grigorenko       Jonathan Drouin          Jordan Eberle            27     1   2  2  
 2 Charlie Coyle            Adam Erne                Jakub Voracek            27     1   2  2  
 3 Jaedon Descheneau        Jiri Sekac               Nick Cousins             26     1   2  2  
 4 Luke Kunin               Pierre Engvall           Jaedon Descheneau        20     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Harrison Ruopp                                    27     1   2  2  
 2 Tyler Myers              Connor Carrick                                    27     1   2  2  
 3 Trevor Murphy            Madison Bowey                                     25     1   2  2  
 4 Madison Bowey            Trevor Murphy                                     21     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Charlie Coyle            Jonathan Drouin          Jordan Eberle            50     0   1  4  
 2 Mikhail Grigorenko       Adam Erne                Jakub Voracek            50     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Tyler Myers                                       50     0   2  3  
 2 Madison Bowey            Connor Carrick                                    50     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaedon Descheneau        Jordan Eberle            50     1   3  1  
 2 Jonathan Drouin          Charlie Coyle            50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Tyler Myers              50     1   3  1  
 2 Madison Bowey            Connor Carrick           50     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jaedon Descheneau                                 51     1   4  0  
 2 Jordan Eberle                                     49     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Tyler Myers              50     1   4  0  
 2 Connor Carrick           Madison Bowey            50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Charlie Coyle            Jordan Eberle            50     1   2  2  
 2 Jonathan Drouin          Jaedon Descheneau        50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Tyler Myers              50     1   2  2  
 2 Connor Carrick           Madison Bowey            50     1   2  2  

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
Charlie Coyle, Jordan Eberle, Jakub Voracek, Jonathan Drouin, Mikhail Grigorenko, Adam Erne, Nick Cousins, Jaedon Descheneau, Jiri Sekac, Pierre Engvall
<b>Custom OT Lines Defensemen</b>
Kevin Shattenkirk, Tyler Myers, Madison Bowey, Trevor Murphy, Connor Carrick

<b>Scratches</b>
Dylan Olsen (Head Injury), Nathan Beaulieu (Broken Bone (Right Ankle) Injury)</pre></div>
<h1 class="TeamLinesPro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matt Duchene             Alex Galchenyuk          Anthony Duclair          36     1   1  3  
 2 Marcus Johansson         Teuvo Teravainen         Tomas Tatar              33     1   1  3  
 3 Bryan Little             Adrian Kempe             Chris Tierney            25     1   2  2  
 4 Nick Paul                Phillip Di Giuseppe      Ryan MacInnis            6      2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Hamonic           Thomas Chabot                                     36     1   2  2  
 2 Damon Severson           Olli Maatta                                       34     1   2  2  
 3 Tyler Wotherspoon        Christopher Tanev                                 22     1   2  2  
 4 Christopher Tanev        Olli Maatta                                       8      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matt Duchene             Teuvo Teravainen         Alex Galchenyuk          60     0   0  5  
 2 Marcus Johansson         Anthony Duclair          Tomas Tatar              40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Hamonic           Olli Maatta                                       60     1   1  3  
 2 Damon Severson           Thomas Chabot                                     40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Tierney            Ryan MacInnis            60     0   5  0  
 2 Bryan Little             Adrian Kempe             40     1   4  0  

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
 1 Chris Tierney            Ryan MacInnis            60     1   2  2  
 2 Bryan Little             Marcus Johansson         40     1   2  2  

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
Normal : Nick Paul, Ryan MacInnis, Chris Tierney - PP : Teuvo Teravainen, Marcus Johansson - PK : Ryan MacInnis
<b>Extra Defensemen</b>
Normal : Tyler Wotherspoon, Christopher Tanev, Damon Severson - PP : Olli Maatta - PK : Travis Hamonic, Damon Severson
<b>Penalty Shots</b>
Alex Galchenyuk, Teuvo Teravainen, Matt Duchene, Marcus Johansson, Anthony Duclair
<b>Custom OT Lines Forwards</b>
Alex Galchenyuk, Teuvo Teravainen, Marcus Johansson, Anthony Duclair, Matt Duchene, Chris Tierney, Ryan MacInnis, Bryan Little, Tomas Tatar, Phillip Di Giuseppe
<b>Custom OT Lines Defensemen</b>
Travis Hamonic, Olli Maatta, Damon Severson, Christopher Tanev, Tyler Wotherspoon

<b>Scratches</b>
Ilya Lyubushkin (Healthy)</pre></div>
<h1 class="TeamLinesPro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joe Colborne             Marcel Noebels           Stefan Noesen            35     0   2  3  
 2 Andrew Shaw              Kenny Agostino           Christian Thomas         30     0   2  3  
 3 Jordan Weal              Anthony Camara           Brandon Saad             25     1   3  1  
 4 Maxwell Reinhart         Evgeny Kuznetsov         Brandon Saad             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Josh Manson              Ian Cole                                          35     0   3  2  
 2 Taylor Doherty           Keaton Ellerby                                    35     0   3  2  
 3 Mark Barberio            Morgan Ellis                                      30     1   3  1  
 4 Carl Gunnarsson          Ian Cole                                          0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Maxwell Reinhart         Evgeny Kuznetsov         Brandon Saad             60     0   0  5  
 2 Jordan Weal              Kenny Agostino           Christian Thomas         40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Morgan Ellis             Ian Cole                                          60     0   1  4  
 2 Taylor Doherty           Keaton Ellerby                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anthony Camara           Brandon Saad             60     0   5  0  
 2 Marcel Noebels           Christian Thomas         40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Morgan Ellis             Ian Cole                 60     0   5  0  
 2 Taylor Doherty           Keaton Ellerby           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Anthony Camara                                    60     0   5  0  
 2 Kenny Agostino                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Morgan Ellis             Ian Cole                 60     0   5  0  
 2 Taylor Doherty           Keaton Ellerby           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Brandon Saad             60     0   2  3  
 2 Anthony Camara           Christian Thomas         40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Morgan Ellis             Ian Cole                 60     0   3  2  
 2 Taylor Doherty           Keaton Ellerby           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Maxwell Reinhart         Evgeny Kuznetsov         Brandon Saad             Morgan Ellis             Ian Cole                 

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Maxwell Reinhart         Anthony Camara           Christian Thomas         Keaton Ellerby           Ian Cole                 

<b>Goaltenders</b>
Starting : Calvin Pickard           
Backup : Joni Ortio               

<b>Extra Forwards</b>
Normal : Brandon Saad, Anthony Camara, Maxwell Reinhart - PP : Brandon Saad, Anthony Camara - PK : Maxwell Reinhart
<b>Extra Defensemen</b>
Normal : Mark Barberio, Ian Cole, Taylor Doherty - PP : Mark Barberio - PK : Ian Cole, Taylor Doherty
<b>Penalty Shots</b>
Anthony Camara, Kenny Agostino, Brandon Saad, Christian Thomas, Jordan Weal
<b>Custom OT Lines Forwards</b>
Anthony Camara, Kenny Agostino, Evgeny Kuznetsov, Christian Thomas, Jordan Weal, Stefan Noesen, Brandon Saad, Marcel Noebels, Maxwell Reinhart, Andrew Shaw
<b>Custom OT Lines Defensemen</b>
Morgan Ellis, Ian Cole, Taylor Doherty, Keaton Ellerby, Mark Barberio

<b>Scratches</b>
Ales Hemsky (Healthy), Jakob Silfverberg (Healthy), Shayne Gostisbehere (Healthy)</pre></div>
<h1 class="TeamLinesPro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
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
[ <a href="ASHL101-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Robby Fabbri             Colin Wilson             34     0   2  3  
 2 Evgeny Grachev           Alexander Kerfoot        Colin Smith              33     0   2  3  
 3 Joachim Nermark          Magnus Paajarvi          Devin Setoguchi          24     1   2  2  
 4 Michael Chaput           Alex Iafallo             Christophe Lalancette    9      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum                                     34     1   2  2  
 2 Devon Toews              Yann Sauve                                        33     1   2  2  
 3 Jani Hakanpaa            Gustav Olofsson                                   33     1   2  2  
 4 Vyacheslav Voynov        Jonathon Blum                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Robby Fabbri             Colin Wilson             70     0   0  5  
 2 Evgeny Grachev           Magnus Paajarvi          Colin Smith              30     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum                                     60     1   0  4  
 2 Devon Toews              Yann Sauve                                        40     1   0  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joachim Nermark          Christophe Lalancette    70     1   4  0  
 2 Michael Chaput           Alex Iafallo             30     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum            60     1   3  1  
 2 Devon Toews              Yann Sauve               40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joachim Nermark                                   60     0   5  0  
 2 Michael Chaput                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum            60     0   5  0  
 2 Devon Toews              Yann Sauve               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Monahan             Colin Wilson             60     1   1  3  
 2 Robby Fabbri             Alexander Kerfoot        40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum            60     1   2  2  
 2 Devon Toews              Yann Sauve               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeny Grachev           Robby Fabbri             Colin Wilson             Vyacheslav Voynov        Sean Monahan             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Joachim Nermark          Christophe Lalancette    Vyacheslav Voynov        Jonathon Blum            

<b>Goaltenders</b>
Starting : Andrew Hammond           
Backup : Martin Jones             

<b>Extra Forwards</b>
Normal : Michael Chaput, Evgeny Grachev, Alexander Kerfoot - PP : Michael Chaput, Evgeny Grachev - PK : Alexander Kerfoot
<b>Extra Defensemen</b>
Normal : Jani Hakanpaa, Gustav Olofsson, Devon Toews - PP : Jani Hakanpaa - PK : Gustav Olofsson, Devon Toews
<b>Penalty Shots</b>
Robby Fabbri, Evgeny Grachev, Sean Monahan, Colin Wilson, Devin Setoguchi
<b>Custom OT Lines Forwards</b>
Sean Monahan, Colin Wilson, Magnus Paajarvi, Robby Fabbri, Evgeny Grachev, Alexander Kerfoot, Colin Smith, Christophe Lalancette, Joachim Nermark, Devin Setoguchi
<b>Custom OT Lines Defensemen</b>
Vyacheslav Voynov, Jonathon Blum, Devon Toews, Yann Sauve, Jani Hakanpaa

<b>Scratches</b>
Andreas Englund (Bruised Left Foot Injury), Jake Walman (Healthy), Nikita Filatov (Healthy), Taylor Leier (Healthy)</pre></div>
<h1 class="TeamLinesPro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Christian Dvorak         Nathan MacKinnon         30     0   1  4  
 2 Derek Ryan               Johnny Gaudreau          Ilya Mikheyev            30     0   3  2  
 3 Jason Dickinson          Remi Elie                Dmitrij Jaskin           25     0   3  2  
 4 Shawn Matthias           Barclay Goodrow          Logan Shaw               15     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Seabrook           Jonas Brodin                                      35     1   4  0  
 2 Erik Gudbranson          Niklas Hjalmarsson                                35     1   4  0  
 3 Nikita Nesterov          Alexander Urbom                                   30     1   4  0  
 4 Brent Seabrook           Jonas Brodin                                      0      1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Christian Dvorak         Nathan MacKinnon         60     0   0  5  
 2 Jason Dickinson          Johnny Gaudreau          Ilya Mikheyev            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Gudbranson          Jonas Brodin                                      60     0   1  4  
 2 Niklas Hjalmarsson       Nikita Nesterov                                   40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Ryan               Jason Dickinson          60     1   4  0  
 2 Shawn Matthias           Nathan MacKinnon         40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Urbom          Niklas Hjalmarsson       60     2   3  0  
 2 Erik Gudbranson          Brent Seabrook           40     2   3  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Derek Ryan                                        60     1   4  0  
 2 Shawn Matthias                                    40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Urbom          Niklas Hjalmarsson       60     2   3  0  
 2 Brent Seabrook           Erik Gudbranson          40     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Backstrom        Nathan MacKinnon         60     1   1  3  
 2 Christian Dvorak         Johnny Gaudreau          40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jonas Brodin             Brent Seabrook           60     1   3  1  
 2 Erik Gudbranson          Niklas Hjalmarsson       40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Johnny Gaudreau          Nathan MacKinnon         Erik Gudbranson          Jonas Brodin             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Christian Dvorak         Nathan MacKinnon         Alexander Urbom          Niklas Hjalmarsson       

<b>Goaltenders</b>
Starting : Henrik Lundqvist         
Backup : Alexandar Georgiyev      

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
Mirco Mueller (Healthy), Joel Eriksson Ek (Bruised Right Arm Injury)</pre></div>
<h1 class="TeamLinesPro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#DallasStars">Team Records</a> ]
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
[ <a href="ASHL101-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#DetroitRedWings">Team Records</a> ]
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
[ <a href="ASHL101-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#EdmontonOilers">Team Records</a> ]
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
[ <a href="ASHL101-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan O'Reilly            David Pastrnak           Nikita Kucherov          35     0   1  4  
 2 Nick Bjugstad            Dylan Larkin             Jonathan Huberdeau       30     0   1  4  
 3 Jacob De La Rose         Pavel Zacha              Brendan Perlini          25     1   2  2  
 4 Alan Quine               Kyle Clifford            Oskar Sundqvist          10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Aaron Ekblad             Scott Harrington                                  34     1   2  2  
 2 David Musil              Marc-Edouard Vlasic                               33     1   2  2  
 3 Joel Edmundson           Rasmus Sandin                                     33     1   2  2  
 4 Aaron Ekblad             David Musil                                       0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Larkin             David Pastrnak           Nikita Kucherov          50     0   0  5  
 2 Ryan O'Reilly            Pavel Zacha              Nick Bjugstad            50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jonathan Huberdeau       Aaron Ekblad                                      50     0   1  4  
 2 Scott Harrington         Rasmus Sandin                                     50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob De La Rose         Kyle Clifford            52     0   5  0  
 2 Alan Quine               Brendan Perlini          48     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Musil              Joel Edmundson           52     0   5  0  
 2 Scott Harrington         Marc-Edouard Vlasic      48     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jacob De La Rose                                  52     0   5  0  
 2 Alan Quine                                        48     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Musil              Joel Edmundson           52     0   5  0  
 2 Scott Harrington         Marc-Edouard Vlasic      48     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan O'Reilly            Nikita Kucherov          60     0   2  3  
 2 Dylan Larkin             Jonathan Huberdeau       40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ekblad             Scott Harrington         60     0   3  2  
 2 Joel Edmundson           Marc-Edouard Vlasic      40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan O'Reilly            David Pastrnak           Nikita Kucherov          Aaron Ekblad             Rasmus Sandin            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jacob De La Rose         Kyle Clifford            Alan Quine               David Musil              Joel Edmundson           

<b>Goaltenders</b>
Starting : Sergei Bobrovsky         
Backup : Frederik Andersen        

<b>Extra Forwards</b>
Normal : Nikita Kucherov, David Pastrnak, Dylan Larkin - PP : Nikita Kucherov, David Pastrnak - PK : Jacob De La Rose
<b>Extra Defensemen</b>
Normal : Aaron Ekblad, Scott Harrington, Rasmus Sandin - PP : Aaron Ekblad - PK : David Musil, Joel Edmundson
<b>Penalty Shots</b>
Nikita Kucherov, David Pastrnak, Dylan Larkin, Jonathan Huberdeau, Ryan O'Reilly
<b>Custom OT Lines Forwards</b>
Nikita Kucherov, David Pastrnak, Dylan Larkin, Jonathan Huberdeau, Ryan O'Reilly, Nick Bjugstad, Brendan Perlini, Pavel Zacha, Jacob De La Rose, Alan Quine
<b>Custom OT Lines Defensemen</b>
Aaron Ekblad, Scott Harrington, Rasmus Sandin, Joel Edmundson, Marc-Edouard Vlasic

<b>Scratches</b>
Phillip Danault (Healthy), Ville Husso (Healthy)</pre></div>
<h1 class="TeamLinesPro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Cirelli          Jeff Skinner             Miles Wood               34     0   1  4  
 2 Vincent Trocheck         Kevin Fiala              Brett Ritchie            28     0   2  3  
 3 Anze Kopitar             Anthony Mantha           Corey Perry              28     0   1  4  
 4 Tyler Bozak              Jordan Martinook         Jordan Staal             10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Dante Fabbro                                      34     0   2  3  
 2 Mark Pysyk               Jordan Subban                                     33     0   2  3  
 3 Derek Forbort            Michael Del Zotto                                 33     1   2  2  
 4 Drew Doughty             Mark Pysyk                                        0      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Cirelli          Jeff Skinner             Corey Perry              60     0   0  5  
 2 Vincent Trocheck         Kevin Fiala              Miles Wood               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Jordan Subban                                     60     0   1  4  
 2 Mark Pysyk               Michael Del Zotto                                 40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Staal             Tyler Bozak              60     0   5  0  
 2 Anze Kopitar             Anthony Cirelli          40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Pysyk               Derek Forbort            60     1   4  0  
 2 Drew Doughty             Dante Fabbro             40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Staal                                      60     0   5  0  
 2 Anze Kopitar                                      40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Pysyk               Derek Forbort            60     1   4  0  
 2 Drew Doughty             Dante Fabbro             40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Bozak              Corey Perry              50     1   2  2  
 2 Anthony Cirelli          Jeff Skinner             50     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Dante Fabbro             50     1   3  1  
 2 Jordan Subban            Michael Del Zotto        50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Jeff Skinner             Corey Perry              Drew Doughty             Michael Del Zotto        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Staal             Anze Kopitar             Anthony Cirelli          Drew Doughty             Derek Forbort            

<b>Goaltenders</b>
Starting : Adin Hill                
Backup : Michal Neuvirth          

<b>Extra Forwards</b>
Normal : Jordan Staal, Anthony Mantha, Brett Ritchie - PP : Jordan Staal, Anthony Mantha - PK : Brett Ritchie
<b>Extra Defensemen</b>
Normal : Michael Del Zotto, Jordan Subban, Dante Fabbro - PP : Dante Fabbro - PK : Michael Del Zotto, Jordan Subban
<b>Penalty Shots</b>
Jeff Skinner, Anze Kopitar, Corey Perry, Anthony Mantha, Vincent Trocheck
<b>Custom OT Lines Forwards</b>
Jeff Skinner, Anze Kopitar, Kevin Fiala, Jordan Staal, Corey Perry, Tyler Bozak, Brett Ritchie, Vincent Trocheck, Anthony Mantha, Miles Wood
<b>Custom OT Lines Defensemen</b>
Drew Doughty, Michael Del Zotto, Derek Forbort, Dante Fabbro, Jordan Subban

<b>Scratches</b>
Ben Hutton (Healthy), Kevin Hayes (Healthy), Philipp Grubauer (Healthy)</pre></div>
<h1 class="TeamLinesPro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#MinnesotaWild">Team Records</a> ]
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
Justin Kloos (Healthy), Michael Sgarbossa (Healthy), Aaron Ness (Back Spasms Injury), Devin Shore (Healthy)</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Filip Forsberg           Alex Ovechkin            30     1   0  4  
 2 Evgeni Malkin            Jakub Vrana              Danton Heinen            30     1   0  4  
 3 Ryan Kesler              Dominik Kubalik          Chandler Stephenson      26     1   3  1  
 4 Patrik Berglund          Curtis Hamilton          Carter Verhaeghe         14     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Slater Koekkoek                                   35     1   2  2  
 2 Torey Krug               Jan Rutta                                         35     1   2  2  
 3 Julius Honka             Tyler Cuma                                        29     1   2  2  
 4 Alex Pietrangelo         Torey Krug                                        1      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Filip Forsberg           Evgeni Malkin            70     0   0  5  
 2 Danton Heinen            Jakub Vrana              Dominik Kubalik          30     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Torey Krug                                        60     0   1  4  
 2 Alex Ovechkin            Julius Honka                                      40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Kesler              Chandler Stephenson      60     1   4  0  
 2 Danton Heinen            Jakub Vrana              40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Slater Koekkoek          Jan Rutta                60     1   4  0  
 2 Alex Pietrangelo         Tyler Cuma               40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan Kesler                                       65     0   5  0  
 2 Danton Heinen                                     35     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Slater Koekkoek          Jan Rutta                50     0   5  0  
 2 Alex Pietrangelo         Tyler Cuma               50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sidney Crosby            Filip Forsberg           50     1   1  3  
 2 Evgeni Malkin            Alex Ovechkin            50     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Torey Krug               50     1   2  2  
 2 Julius Honka             Slater Koekkoek          50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Filip Forsberg           Alex Ovechkin            Alex Pietrangelo         Torey Krug               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Filip Forsberg           Jakub Vrana              Alex Pietrangelo         Slater Koekkoek          

<b>Goaltenders</b>
Starting : Jake Allen               
Backup : Ondrej Pavelec           

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
Dustin Byfuglien (Healthy), Henrik Zetterberg (Healthy), David Griger (Healthy)</pre></div>
<h1 class="TeamLinesPro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mitchell Marner          Ty Rattie                Oliver Bjorkstrand       33     0   2  3  
 2 Sam Reinhart             Nail Yakupov             Drake Batherson          32     0   2  3  
 3 Nic Petan                Tyler Motte              Johan Larsson            25     1   2  2  
 4 Mikael Backlund          Trevor Moore             Karson Kuhlman           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Faulk             Colton Parayko                                    34     1   3  1  
 2 Dmitri Orlov             Adam Pelech                                       33     1   3  1  
 3 Brett Pesce              Tyson Barrie                                      33     1   3  1  
 4 Dmitri Orlov             Brett Pesce                                       0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mitchell Marner          Ty Rattie                Oliver Bjorkstrand       60     0   0  5  
 2 Sam Reinhart             Nic Petan                Drake Batherson          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Orlov             Tyson Barrie                                      60     0   1  4  
 2 Justin Faulk             Colton Parayko                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Karson Kuhlman           Trevor Moore             50     0   5  0  
 2 Mikael Backlund          Tyler Motte              50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Adam Pelech              50     0   5  0  
 2 Brett Pesce              Justin Faulk             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Karson Kuhlman                                    50     0   5  0  
 2 Trevor Moore                                      50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Adam Pelech              50     0   5  0  
 2 Brett Pesce              Justin Faulk             50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mitchell Marner          Oliver Bjorkstrand       50     0   2  3  
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
   Sam Reinhart             Trevor Moore             Oliver Bjorkstrand       Colton Parayko           Justin Faulk             

<b>Goaltenders</b>
Starting : Tristan Jarry            
Backup : Carter Hart              

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
Alec Martinez (Healthy), Marc-Andre Bourdon (Healthy)</pre></div>
<h1 class="TeamLinesPro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
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
[ <a href="ASHL101-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
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
Jason Robertson (Healthy), Max Friberg (Bruised Right Arm Injury)</pre></div>
<h1 class="TeamLinesPro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#NewYorkRangers">Team Records</a> ]
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
[ <a href="ASHL101-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#OttawaSenators">Team Records</a> ]
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
[ <a href="ASHL101-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Pierre-Luc Dubois        Andrei Svechnikov        30     0   0  5  
 2 Ryan Nugent-Hopkins      Nick Schmaltz            Casey Mittelstadt        30     0   0  5  
 3 Elias Pettersson         Nicolas Kerdiles         Brendan Ranford          30     0   0  5  
 4 Nick Shore               Joakim Nordstrom         Zach Budish              10     0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Josh Morrissey           Adam Larsson                                      34     0   1  4  
 2 Travis Brown             Matt Dumba                                        34     0   1  4  
 3 Mark Giordano            David Rundblad                                    32     0   1  4  
 4 Adam Larsson             Matt Dumba                                        0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Nick Schmaltz            Andrei Svechnikov        50     0   0  5  
 2 Ryan Nugent-Hopkins      Casey Mittelstadt        Pierre-Luc Dubois        50     0   0  5  

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
 2 Adam Larsson             Matt Dumba               40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Claude Giroux                                     60     0   5  0  
 2 Pierre-Luc Dubois                                 40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Morrissey           Adam Larsson             60     0   5  0  
 2 Mark Giordano            Matt Dumba               40     0   5  0  

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
   Claude Giroux            Ryan Nugent-Hopkins      Pierre-Luc Dubois        Adam Larsson             Travis Brown             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Ryan Nugent-Hopkins      Pierre-Luc Dubois        Adam Larsson             Travis Brown             

<b>Goaltenders</b>
Starting : Tuukka Rask              
Backup : David Rittich            

<b>Extra Forwards</b>
Normal : Pierre-Luc Dubois, Joakim Nordstrom, Claude Giroux - PP : Pierre-Luc Dubois, Joakim Nordstrom - PK : Andrei Svechnikov
<b>Extra Defensemen</b>
Normal : Matt Dumba, Adam Larsson, Josh Morrissey - PP : Adam Larsson - PK : Matt Dumba, Adam Larsson
<b>Penalty Shots</b>
Pierre-Luc Dubois, Claude Giroux, Ryan Nugent-Hopkins, Elias Pettersson, Andrei Svechnikov
<b>Custom OT Lines Forwards</b>
Claude Giroux, Pierre-Luc Dubois, Ryan Nugent-Hopkins, Elias Pettersson, Andrei Svechnikov, Nick Schmaltz, Casey Mittelstadt, Nicolas Kerdiles, Joakim Nordstrom, Brendan Ranford
<b>Custom OT Lines Defensemen</b>
Adam Larsson, David Rundblad, Josh Morrissey, Matt Dumba, Mark Giordano

<b>Scratches</b>
Greg Pateryn (Healthy), Ryan Murray (Left Forearm Injury), Alexis Loiseau (Sore Left Knee Injury)</pre></div>
<h1 class="TeamLinesPro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Josh Bailey              Andre Burakovsky         Unknown Player           35     0   3  2  
 2 Kyle Turris              Ryan Spooner             Jake DeBrusk             30     0   2  2  
 3 Nico Sturm               Ivan Barbashev           Victor Olofsson          20     0   3  2  
 4 Travis Zajac             Adam Lowry               Zack Phillips            15     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mac Weegar               Anthony DeAngelo                                  35     0   4  1  
 2 Michael Matheson         Darren Dietz                                      30     0   4  1  
 3 Mike Green               Tim Erixon                                        20     0   4  1  
 4 Mac Weegar               Michael Matheson                                  15     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Josh Bailey              Andre Burakovsky         Jake DeBrusk             60     0   0  5  
 2 Kyle Turris              Victor Olofsson          Unknown Player           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Anthony DeAngelo         Tim Erixon                                        60     0   1  4  
 2 Mike Green               Mac Weegar                                        40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Travis Zajac             Adam Lowry               60     1   4  0  
 2 Josh Bailey              Zack Phillips            40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Matheson         Mac Weegar               60     1   4  0  
 2 Darren Dietz             Tim Erixon               40     1   4  0  

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
 1 Josh Bailey              Jake DeBrusk             60     0   3  2  
 2 Andre Burakovsky         Victor Olofsson          40     0   3  2  

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
Starting : Keith Kinkaid            
Backup : Cam Ward                 

<b>Extra Forwards</b>
Normal : Andre Burakovsky, Jake DeBrusk, Josh Bailey - PP : Andre Burakovsky, Jake DeBrusk - PK : Travis Zajac
<b>Extra Defensemen</b>
Normal : Anthony DeAngelo, Mac Weegar, Michael Matheson - PP : Anthony DeAngelo - PK : Michael Matheson, Darren Dietz
<b>Penalty Shots</b>
Andre Burakovsky, Ryan Spooner, Unknown Player, Josh Bailey, Kyle Turris
<b>Custom OT Lines Forwards</b>
Andre Burakovsky, Josh Bailey, Ryan Spooner, Jake DeBrusk, Unknown Player, Victor Olofsson, Kyle Turris, Ivan Barbashev, Adam Lowry, Zack Phillips
<b>Custom OT Lines Defensemen</b>
Michael Matheson, Anthony DeAngelo, Mac Weegar, Tim Erixon, Darren Dietz

<b>Scratches</b>
Conor Sheary (Strained Right Knee Injury), Ryan Wilson (Healthy), Alexander Delnov (Healthy), Adam Almqvist (Healthy)</pre></div>
<h1 class="TeamLinesPro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#QuebecNordiques">Team Records</a> ]
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
Ben Hanowski (Bruised Right Leg Injury)</pre></div>
<h1 class="TeamLinesPro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#SanJoseSharks">Team Records</a> ]
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
[ <a href="ASHL101-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#SeattleKraken">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#SeattleKraken">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#SeattleKraken">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#SeattleKraken">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#SeattleKraken">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#SeattleKraken">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#SeattleKraken">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#SeattleKraken">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#SeattleKraken">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#SeattleKraken">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#SeattleKraken">Team Records</a> ]
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
Yan-Pavel Laplante (Healthy), Nikita Tryamkin (Back Surgery Injury), Peter Trainor (Broken Ribs Injury)</pre></div>
<h1 class="TeamLinesPro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nazem Kadri              Valeri Nichushkin        Mark Stone               35     0   2  3  
 2 Tyler Johnson            Tanner Pearson           Devante Smith-Pelly      32     0   1  4  
 3 Curtis Lazar             Valentin Zykov           Theodor Blueger          26     0   1  4  
 4 Tomas Plekanec           Frans Nielsen            Nikita Soshnikov         7      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ben Chiarot              Brady Skjei                                       36     0   3  2  
 2 John Klingberg           Jamie Oleksiak                                    35     0   2  3  
 3 Andreas Borgman          Dillon Heatherington                              29     0   2  3  
 4 Ben Chiarot              Dillon Heatherington                              0      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nazem Kadri              Valeri Nichushkin        Mark Stone               54     0   0  5  
 2 Curtis Lazar             Tanner Pearson           Theodor Blueger          46     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Klingberg           Dillon Heatherington                              51     0   0  5  
 2 Brady Skjei              Andreas Borgman                                   49     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Frans Nielsen            Tanner Pearson           52     0   5  0  
 2 Tomas Plekanec           Curtis Lazar             48     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jamie Oleksiak           Ben Chiarot              53     0   5  0  
 2 Dillon Heatherington     Brady Skjei              47     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Frans Nielsen                                     54     0   5  0  
 2 Tomas Plekanec                                    46     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jamie Oleksiak           Ben Chiarot              54     0   5  0  
 2 Dillon Heatherington     Andreas Borgman          46     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Curtis Lazar             Mark Stone               54     0   3  2  
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
   Tomas Plekanec           Frans Nielsen            Curtis Lazar             Brady Skjei              Jamie Oleksiak           

<b>Goaltenders</b>
Starting : Ivan Nalimov             
Backup : Kevin Poulin             

<b>Extra Forwards</b>
Normal : Valentin Zykov, Frans Nielsen, Tomas Plekanec - PP : Tyler Johnson, Valentin Zykov - PK : Devante Smith-Pelly
<b>Extra Defensemen</b>
Normal : Andreas Borgman, Dillon Heatherington, Brady Skjei - PP : Jamie Oleksiak - PK : Andreas Borgman, John Klingberg
<b>Penalty Shots</b>
Nikita Soshnikov, Nazem Kadri, Mark Stone, Valeri Nichushkin, Tyler Johnson
<b>Custom OT Lines Forwards</b>
Valeri Nichushkin, Curtis Lazar, Mark Stone, Tanner Pearson, Tyler Johnson, Nazem Kadri, Devante Smith-Pelly, Theodor Blueger, Nikita Soshnikov, Frans Nielsen
<b>Custom OT Lines Defensemen</b>
Ben Chiarot, Brady Skjei, John Klingberg, Jamie Oleksiak, Andreas Borgman

<b>Scratches</b>
Artemi Panarin (Upper Body Injury)</pre></div>
<h1 class="TeamLinesPro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#TampaBayLightning">Team Records</a> ]
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
[ <a href="ASHL101-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikael Granlund          Sebastian Aho            Mikko Rantanen           40     0   1  4  
 2 Adam Henrique            Emerson Etem             Teemu Pulkkinen          30     0   1  4  
 3 Mike Richards            Saku Maenalanen          Louis Leblanc            20     1   2  2  
 4 Mikko Koivu              Zack Kassian             Joel Armia               10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Samuel Girard            Stefan Elliott                                    42     0   2  3  
 2 Petteri Lindbohm         Ville Pokka                                       30     1   2  2  
 3 Tobias Enstrom           Mikko Lehtonen                                    28     1   2  2  
 4 Samuel Girard            Stefan Elliott                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mike Richards            Sebastian Aho            Mikko Rantanen           60     0   0  5  
 2 Zack Kassian             Mikael Granlund          Emerson Etem             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Samuel Girard            Ville Pokka                                       60     0   1  4  
 2 Tobias Enstrom           Stefan Elliott                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mike Richards            Louis Leblanc            60     1   4  0  
 2 Mikko Koivu              Zack Kassian             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Petteri Lindbohm         Mikko Lehtonen           60     0   5  0  
 2 Stefan Elliott           Ville Pokka              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mike Richards                                     60     0   5  0  
 2 Louis Leblanc                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Petteri Lindbohm         Mikko Lehtonen           60     0   5  0  
 2 Stefan Elliott           Ville Pokka              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mikael Granlund          Mikko Rantanen           60     0   1  4  
 2 Mike Richards            Sebastian Aho            40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Girard            Ville Pokka              60     0   2  3  
 2 Tobias Enstrom           Stefan Elliott           40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mike Richards            Sebastian Aho            Mikko Rantanen           Samuel Girard            Ville Pokka              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mike Richards            Zack Kassian             Louis Leblanc            Petteri Lindbohm         Mikko Lehtonen           

<b>Goaltenders</b>
Starting : Steve Mason              
Backup : Veini Vehvilainen        

<b>Extra Forwards</b>
Normal : Emerson Etem, Mikael Granlund, Mikko Rantanen - PP : Teemu Pulkkinen, Mike Richards - PK : Zack Kassian
<b>Extra Defensemen</b>
Normal : Mikko Lehtonen, Ville Pokka, Samuel Girard - PP : Stefan Elliott - PK : Ville Pokka, Tobias Enstrom
<b>Penalty Shots</b>
Mike Richards, Mikko Rantanen, Mikael Granlund, Teemu Pulkkinen, Emerson Etem
<b>Custom OT Lines Forwards</b>
Mikko Rantanen, Mikael Granlund, Sebastian Aho, Zack Kassian, Emerson Etem, Mike Richards, Teemu Pulkkinen, Louis Leblanc, Joel Armia, Mikko Koivu
<b>Custom OT Lines Defensemen</b>
Samuel Girard, Ville Pokka, Tobias Enstrom, Petteri Lindbohm, Stefan Elliott

<b>Scratches</b>
Morgan Rielly (Healthy), Sam Carrick (Healthy), Garret Sparks (Healthy)</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Nikolaj Ehlers           Kaapo Kakko              33     0   0  5  
 2 Derek Stepan             Ahti Oksanen             Matthew Tkachuk          30     1   2  2  
 3 Darren Helm              Loui Eriksson            Filip Zadina             27     1   2  2  
 4 Stefan Matteau           Carl Hagelin             Filip Zadina             10     1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jordan Oesterle          Dougie Hamilton                                   34     2   3  0  
 2 Rasmus Ristolainen       Erik Cernak                                       34     2   3  0  
 3 Jakub Jerabek            Jason Demers                                      32     2   3  0  
 4 Erik Cernak              Jordan Oesterle                                   0      1   4  0  

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
 2 Jordan Oesterle          Erik Cernak              46     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Stefan Matteau                                    55     1   4  0  
 2 Darren Helm                                       45     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          Erik Cernak              55     1   4  0  
 2 Jordan Oesterle          Jason Demers             45     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Stepan             Matthew Tkachuk          53     1   2  2  
 2 Connor McDavid           Nikolaj Ehlers           47     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Erik Cernak              55     1   2  2  
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
Normal : Dougie Hamilton, Rasmus Ristolainen, Erik Cernak - PP : Dougie Hamilton - PK : Dougie Hamilton, Rasmus Ristolainen
<b>Penalty Shots</b>
Connor McDavid, Matthew Tkachuk, Derek Stepan, Nikolaj Ehlers, Filip Zadina
<b>Custom OT Lines Forwards</b>
Connor McDavid, Matthew Tkachuk, Nikolaj Ehlers, Derek Stepan, Filip Zadina, Kaapo Kakko, Carl Hagelin, Loui Eriksson, Ahti Oksanen, Darren Helm
<b>Custom OT Lines Defensemen</b>
Dougie Hamilton, Rasmus Ristolainen, Erik Cernak, Jordan Oesterle, Ahti Oksanen

<b>Scratches</b>
Zemgus Girgensons (Healthy), Michael Leighton (Healthy)</pre></div>
<h1 class="TeamLinesPro_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#VegasGoldenKnights">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 William Karlsson         Tim Stützle              Patric Hornqvist         34     0   1  4  
 2 Mika Zibanejad           Morgan Klimchuk          Patrick Kane             28     0   2  3  
 3 Marcus Kruger            Patrik Laine             Ryan Getzlaf             28     0   2  3  
 4 Derick Brassard          Myles Bell               Tyler Biggs              10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kris Russell             Erik Johnson                                      34     0   2  3  
 2 Kris Letang              Darnell Nurse                                     33     0   2  3  
 3 Xavier Ouellet           Victor Antipin                                    33     1   2  2  
 4 Kris Letang              Erik Johnson                                      0      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 William Karlsson         Tim Stützle              Patric Hornqvist         50     0   1  4  
 2 Mika Zibanejad           Morgan Klimchuk          Patrick Kane             50     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kris Letang              Victor Antipin                                    60     0   1  4  
 2 Kris Russell             Erik Johnson                                      40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Marcus Kruger            Myles Bell               60     0   5  0  
 2 Ryan Getzlaf             Morgan Klimchuk          40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Xavier Ouellet           Erik Johnson             60     0   5  0  
 2 Victor Antipin           Darnell Nurse            40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Marcus Kruger                                     60     0   5  0  
 2 Ryan Getzlaf                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Xavier Ouellet           Erik Johnson             60     0   4  1  
 2 Victor Antipin           Darnell Nurse            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mika Zibanejad           Patrick Kane             60     0   2  3  
 2 William Karlsson         Patrik Laine             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kris Letang              Darnell Nurse            60     0   2  3  
 2 Kris Russell             Erik Johnson             40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   William Karlsson         Patrik Laine             Patrick Kane             Kris Letang              Darnell Nurse            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Marcus Kruger            Morgan Klimchuk          Patrick Kane             Kris Letang              Erik Johnson             

<b>Goaltenders</b>
Starting : Matt Murray              
Backup : Oscar Dansk              

<b>Extra Forwards</b>
Normal : William Karlsson, Patrick Kane, Mika Zibanejad - PP : Patrik Laine, William Karlsson - PK : Marcus Kruger
<b>Extra Defensemen</b>
Normal : Erik Johnson, Darnell Nurse, Kris Letang - PP : Kris Letang - PK : Erik Johnson, Darnell Nurse
<b>Penalty Shots</b>
Mika Zibanejad, Patrick Kane, Patrik Laine, William Karlsson, Morgan Klimchuk
<b>Custom OT Lines Forwards</b>
Patrick Kane, Patrik Laine, William Karlsson, Mika Zibanejad, Morgan Klimchuk, Tim Stützle, Ryan Getzlaf, Patric Hornqvist, Myles Bell, Marcus Kruger
<b>Custom OT Lines Defensemen</b>
Kris Letang, Erik Johnson, Darnell Nurse, Xavier Ouellet, Victor Antipin

<b>Scratches</b>
Justin Schultz (Healthy), Sergey Tolchinsky (Healthy), Brock Nelson (Left Knee Injury), Michael Bunting (Healthy)</pre></div>
<h1 class="TeamLinesPro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
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
[ <a href="ASHL101-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL101-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL101-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL101-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL101-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL101-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL101-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL101-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL101-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL101-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL101-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL101-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Gabriel Landeskog        Blake Wheeler            32     0   1  4  
 2 Mark Scheifele           Anders Lee               Alexander Burmistrov     28     0   2  3  
 3 Jordan Caron             Cole Ully                Brent Burns              23     0   2  3  
 4 Casey Cizikas            Milan Lucic              Rocco Grimaldi           17     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Sami Vatanen                                      38     0   4  1  
 2 Jake Gardiner            Ryan Graves                                       34     0   4  1  
 3 Dmitri Kulikov           Calvin de Haan                                    28     0   4  1  
 4 Brent Burns              Victor Hedman                                     0      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Gabriel Landeskog        Anders Lee               60     0   0  5  
 2 Mark Scheifele           Cole Ully                Alexander Burmistrov     40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Burns              Victor Hedman                                     60     0   1  4  
 2 Jake Gardiner            Calvin de Haan                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Auston Matthews          Brent Burns              55     0   5  0  
 2 Casey Cizikas            Gabriel Landeskog        45     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Sami Vatanen             55     0   5  0  
 2 Jake Gardiner            Calvin de Haan           45     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Auston Matthews                                   60     0   5  0  
 2 Casey Cizikas                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Brent Burns              60     0   5  0  
 2 Jake Gardiner            Sami Vatanen             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Auston Matthews          Alexander Burmistrov     60     0   1  4  
 2 Mark Scheifele           Gabriel Landeskog        40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Brent Burns              60     0   3  2  
 2 Calvin de Haan           Jake Gardiner            40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Auston Matthews          Anders Lee               Alexander Burmistrov     Victor Hedman            Ryan Graves              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Casey Cizikas            Gabriel Landeskog        Jordan Caron             Victor Hedman            Alexander Burmistrov     

<b>Goaltenders</b>
Starting : Carey Price              
Backup : Mark Visentin            

<b>Extra Forwards</b>
Normal : Auston Matthews, Mark Scheifele, Brent Burns - PP : Gabriel Landeskog, Auston Matthews - PK : Brent Burns
<b>Extra Defensemen</b>
Normal : Victor Hedman, Brent Burns, Jake Gardiner - PP : Victor Hedman - PK : Victor Hedman, Jake Gardiner
<b>Penalty Shots</b>
Alexander Burmistrov, Auston Matthews, Blake Wheeler, Mark Scheifele, Brent Burns
<b>Custom OT Lines Forwards</b>
Auston Matthews, Mark Scheifele, Anders Lee, Gabriel Landeskog, Alexander Burmistrov, Cole Ully, Casey Cizikas, Brent Burns, Blake Wheeler, Jordan Caron
<b>Custom OT Lines Defensemen</b>
Brent Burns, Ryan Graves, Victor Hedman, Calvin de Haan, Jake Gardiner

<b>Scratches</b>
Jason Spezza (Healthy), Andrew Copp (Healthy), Jordan Schmaltz (Healthy)</pre></div>
<?php include "Footer.php";?>
