<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Lines</title>
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
<h1 class="TeamLinesPro_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Jesperi Kotkaniemi       Brock Boeser             38     1   2  2  
 2 Dylan Strome             Brendan Leipsic          Martin Necas             32     1   2  2  
 3 Ryan Strome              Lawson Crouse            Alexander Nylander       25     1   2  2  
 4 Tyler Bozak              Zach Sanford             Stefan Noesen            5      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Brandon Montour                                   40     1   3  1  
 2 Alexander Edler          Zachary Werenski                                  35     1   3  1  
 3 Sami Niku                Tyler Wotherspoon                                 20     1   3  1  
 4 Sami Niku                Tyler Wotherspoon                                 5      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Dylan Strome             Brock Boeser             60     0   1  4  
 2 Ryan Strome              Brendan Leipsic          Martin Necas             40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Zachary Werenski                                  60     0   1  4  
 2 Alexander Edler          Brandon Montour                                   40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Bozak              Lawson Crouse            60     1   3  1  
 2 Zach Sanford             Stefan Noesen            40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Tyler Wotherspoon        60     1   4  0  
 2 Zachary Werenski         Brandon Montour          40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tyler Bozak                                       60     1   4  0  
 2 Lawson Crouse                                     40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Tyler Wotherspoon        60     1   4  0  
 2 Zachary Werenski         Brandon Montour          40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jesperi Kotkaniemi       Brendan Leipsic          55     1   2  2  
 2 John Tavares             Brock Boeser             45     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Brandon Montour          55     1   3  1  
 2 Sami Niku                Tyler Wotherspoon        45     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Tavares             Dylan Strome             Brock Boeser             Cam Fowler               Zachary Werenski         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Bozak              Lawson Crouse            Zach Sanford             Alexander Edler          Brandon Montour          

<b>Goaltenders</b>
Starting : Jacob Markstrom          
Backup : Oscar Dansk              

<b>Extra Forwards</b>
Normal : Dylan Strome, Alexander Nylander, Jesperi Kotkaniemi - PP : Jesperi Kotkaniemi, Lawson Crouse - PK : Martin Necas
<b>Extra Defensemen</b>
Normal : Brandon Montour, Tyler Wotherspoon, Zachary Werenski - PP : Sami Niku - PK : Cam Fowler, Sami Niku
<b>Penalty Shots</b>
John Tavares, Ryan Strome, Brock Boeser, Dylan Strome, Cam Fowler
<b>Custom OT Lines Forwards</b>
John Tavares, Brock Boeser, Dylan Strome, Brendan Leipsic, Ryan Strome, Martin Necas, Jesperi Kotkaniemi, Lawson Crouse, Tyler Bozak, Alexander Nylander
<b>Custom OT Lines Defensemen</b>
Cam Fowler, Brandon Montour, Zachary Werenski, Alexander Edler, Tyler Wotherspoon

<b>Scratches</b>
Chris Wagner (Healthy), Robin Kovacs (Healthy)</pre></div>
<h1 class="TeamLinesPro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 William Karlsson         Sam Steel                Steven Stamkos           32     0   1  4  
 2 Bo Horvat                Oskar Lindblom           Sam Bennett              28     0   1  4  
 3 Noel Acciari             Max Jones                Zack MacEwen             23     1   2  2  
 4 Rodrigo Abols            Gerald Mayhew            Michael McCarron         17     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Johnson             Travis Sanheim                                    33     1   3  1  
 2 Zach Bogosian            Hampus Lindholm                                   33     1   3  1  
 3 Raman Hrabarenka         Keegan Kanzig                                     21     2   3  0  
 4 Hampus Lindholm          Zach Bogosian                                     13     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 William Karlsson         Oskar Lindblom           Steven Stamkos           60     0   1  4  
 2 Bo Horvat                Sam Steel                Sam Bennett              40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Bogosian            Hampus Lindholm                                   75     0   2  3  
 2 Erik Johnson             Travis Sanheim                                    25     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Noel Acciari             Max Jones                70     1   4  0  
 2 Michael McCarron         Zack MacEwen             30     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Johnson             Zach Bogosian            60     1   4  0  
 2 Keegan Kanzig            Raman Hrabarenka         40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Noel Acciari                                      60     0   5  0  
 2 Michael McCarron                                  40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Johnson             Zach Bogosian            60     0   5  0  
 2 Travis Sanheim           Hampus Lindholm          40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Noel Acciari             Max Jones                60     2   3  0  
 2 Rodrigo Abols            Zack MacEwen             40     2   3  0  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Raman Hrabarenka         Travis Sanheim           60     2   3  0  
 2 Hampus Lindholm          Keegan Kanzig            40     2   3  0  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   William Karlsson         Steven Stamkos           Sam Steel                Hampus Lindholm          Zach Bogosian            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Bo Horvat                Noel Acciari             Sam Bennett              Erik Johnson             Zach Bogosian            

<b>Goaltenders</b>
Starting : Braden Holtby            
Backup : Benjamin Conz            

<b>Extra Forwards</b>
Normal : Oskar Lindblom, Rodrigo Abols, Zack MacEwen - PP : Rodrigo Abols, Max Jones - PK : Steven Stamkos
<b>Extra Defensemen</b>
Normal : Travis Sanheim, Keegan Kanzig, Raman Hrabarenka - PP : Travis Sanheim - PK : Travis Sanheim, Zach Bogosian
<b>Penalty Shots</b>
Steven Stamkos, Noel Acciari, William Karlsson, Sam Bennett, Bo Horvat
<b>Custom OT Lines Forwards</b>
William Karlsson, Steven Stamkos, Sam Steel, Oskar Lindblom, Rodrigo Abols, Bo Horvat, Max Jones, Sam Bennett, Zack MacEwen, Noel Acciari
<b>Custom OT Lines Defensemen</b>
Hampus Lindholm, Zach Bogosian, Erik Johnson, Travis Sanheim, Raman Hrabarenka

<b>Scratches</b>
Mattias Norstebo (Healthy), Arturas Laukaitis (Healthy)</pre></div>
<h1 class="TeamLinesPro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Marchand            Jake Guentzel            David Pastrnak           32     0   1  4  
 2 Nico Hischier            Bobby Ryan               Rickard Rakell           30     0   2  3  
 3 Frédérik Gauthier        Angelo Miceli            Scott Kosmachuk          23     1   3  1  
 4 Jakob Forsbacka Karlsson Mason Marchment          Marko Dano               15     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Charlie McAvoy           Oliver Ekman-Larsson                              33     0   2  3  
 2 Carson Soucy             Marco Scandella                                   33     1   4  0  
 3 Brett Kulak              Eric Gelinas                                      28     0   2  3  
 4 Charlie McAvoy           Oliver Ekman-Larsson                              6      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Marchand            Jake Guentzel            David Pastrnak           55     0   0  5  
 2 Nico Hischier            Bobby Ryan               Rickard Rakell           45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Charlie McAvoy           Oliver Ekman-Larsson                              55     0   0  5  
 2 Eric Gelinas             Marco Scandella                                   45     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brad Marchand            Bobby Ryan               60     0   5  0  
 2 Frédérik Gauthier        Marko Dano               40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Carson Soucy             Marco Scandella          50     0   5  0  
 2 Oliver Ekman-Larsson     Eric Gelinas             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brad Marchand                                     60     0   5  0  
 2 Nico Hischier                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Carson Soucy             Marco Scandella          50     0   5  0  
 2 Oliver Ekman-Larsson     Eric Gelinas             50     0   0  5  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brad Marchand            David Pastrnak           50     0   1  4  
 2 Nico Hischier            Jake Guentzel            50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Charlie McAvoy           Oliver Ekman-Larsson     60     0   2  3  
 2 Eric Gelinas             Marco Scandella          40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Marchand            David Pastrnak           Jake Guentzel            Oliver Ekman-Larsson     Charlie McAvoy           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nico Hischier            Brad Marchand            Bobby Ryan               Oliver Ekman-Larsson     Carson Soucy             

<b>Goaltenders</b>
Starting : Igor Shestyorkin         
Backup : Pavel Francouz           

<b>Extra Forwards</b>
Normal : David Pastrnak, Jake Guentzel, Nico Hischier - PP : David Pastrnak, Jake Guentzel - PK : Brad Marchand
<b>Extra Defensemen</b>
Normal : Charlie McAvoy, Oliver Ekman-Larsson, Carson Soucy - PP : Charlie McAvoy - PK : Oliver Ekman-Larsson, Carson Soucy
<b>Penalty Shots</b>
Bobby Ryan, Brad Marchand, David Pastrnak, Jake Guentzel, Nico Hischier
<b>Custom OT Lines Forwards</b>
Brad Marchand, David Pastrnak, Nico Hischier, Jake Guentzel, Rickard Rakell, Bobby Ryan, Marko Dano, Jakob Forsbacka Karlsson, Angelo Miceli, Scott Kosmachuk
<b>Custom OT Lines Defensemen</b>
Charlie McAvoy, Oliver Ekman-Larsson, Eric Gelinas, Marco Scandella, Carson Soucy

<b>Scratches</b>
Vladimir Tkachev (Healthy), Derrick Pouliot (Suspend), Hudson Fasching (Healthy)</pre></div>
<h1 class="TeamLinesPro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mark Scheifele           Jonathan Drouin          Adam Erne                28     1   2  2  
 2 Mikhail Grigorenko       Nick Cousins             Jordan Eberle            27     1   2  2  
 3 Greg McKegg              Alexandre Texier         Daniel Bernhardt         25     1   2  2  
 4 Michael Bournival        Pierre Engvall           Daniel Bernhardt         20     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyler Myers              Kevin Shattenkirk                                 25     1   2  2  
 2 Dylan Olsen              Nathan Beaulieu                                   25     1   2  2  
 3 Stefan Elliott           Madison Bowey                                     25     1   2  2  
 4 Stefan Elliott           Connor Carrick                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mark Scheifele           Jonathan Drouin          Adam Erne                51     0   1  4  
 2 Mikhail Grigorenko       Nick Cousins             Jordan Eberle            49     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyler Myers              Kevin Shattenkirk                                 51     1   2  2  
 2 Dylan Olsen              Nathan Beaulieu                                   49     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Bournival        Daniel Bernhardt         50     1   3  1  
 2 Greg McKegg              Adam Erne                50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Myers              Kevin Shattenkirk        50     1   3  1  
 2 Dylan Olsen              Madison Bowey            50     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael Bournival                                 50     1   4  0  
 2 Greg McKegg                                       50     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Myers              Kevin Shattenkirk        60     1   2  2  
 2 Dylan Olsen              Madison Bowey            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Eberle            Mark Scheifele           50     1   2  2  
 2 Jonathan Drouin          Nick Cousins             50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Myers              Kevin Shattenkirk        50     1   2  2  
 2 Dylan Olsen              Nathan Beaulieu          50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Jonathan Drouin          Jordan Eberle            Tyler Myers              Kevin Shattenkirk        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Adam Erne                Jordan Eberle            Tyler Myers              Kevin Shattenkirk        

<b>Goaltenders</b>
Starting : John Gibson              
Backup : Philipp Grubauer         

<b>Extra Forwards</b>
Normal : Pierre Engvall, Greg McKegg, Alexandre Texier - PP : Alexandre Texier, Daniel Bernhardt - PK : Jordan Eberle
<b>Extra Defensemen</b>
Normal : Stefan Elliott, Connor Carrick, Madison Bowey - PP : Stefan Elliott - PK : Connor Carrick, Stefan Elliott
<b>Penalty Shots</b>
Jonathan Drouin, Mark Scheifele, Jordan Eberle, Mikhail Grigorenko, Adam Erne
<b>Custom OT Lines Forwards</b>
Jordan Eberle, Mark Scheifele, Jonathan Drouin, Nick Cousins, Adam Erne, Mikhail Grigorenko, Daniel Bernhardt, Greg McKegg, Pierre Engvall, Alexandre Texier
<b>Custom OT Lines Defensemen</b>
Tyler Myers, Kevin Shattenkirk, Dylan Olsen, Connor Carrick, Nathan Beaulieu

<b>Scratches</b>
Jan Rutta (Healthy), Jujhar Khaira (Healthy)</pre></div>
<h1 class="TeamLinesPro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matt Duchene             Alex Galchenyuk          Barrett Hayton           36     1   1  3  
 2 Marcus Johansson         Anthony Duclair          Teuvo Teravainen         33     1   1  3  
 3 Chris Tierney            Ryan MacInnis            Adrian Kempe             25     1   2  2  
 4 Oskar Sundqvist          Eric Robinson            Blake Lizotte            6      2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Hamonic           Thomas Chabot                                     36     1   2  2  
 2 Damon Severson           Olli Maatta                                       34     1   2  2  
 3 Markus Nutivaara         Ryan Lindgren                                     22     1   2  2  
 4 Ryan Lindgren            Travis Hamonic                                    8      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matt Duchene             Teuvo Teravainen         Alex Galchenyuk          60     0   0  5  
 2 Marcus Johansson         Anthony Duclair          Chris Tierney            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Hamonic           Olli Maatta                                       60     1   0  4  
 2 Damon Severson           Thomas Chabot                                     40     1   0  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Tierney            Ryan MacInnis            60     0   5  0  
 2 Oskar Sundqvist          Adrian Kempe             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Olli Maatta              60     1   4  0  
 2 Damon Severson           Markus Nutivaara         40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Chris Tierney                                     60     0   5  0  
 2 Ryan MacInnis                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Olli Maatta              60     0   5  0  
 2 Damon Severson           Ryan Lindgren            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Tierney            Ryan MacInnis            60     2   1  2  
 2 Oskar Sundqvist          Adrian Kempe             40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Olli Maatta              60     1   2  2  
 2 Damon Severson           Ryan Lindgren            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Matt Duchene             Teuvo Teravainen         Alex Galchenyuk          Travis Hamonic           Olli Maatta              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Tierney            Marcus Johansson         Ryan MacInnis            Travis Hamonic           Olli Maatta              

<b>Goaltenders</b>
Starting : Jonathan Quick           
Backup : Anders Nilsson           

<b>Extra Forwards</b>
Normal : Barrett Hayton, Ryan MacInnis, Chris Tierney - PP : Teuvo Teravainen, Marcus Johansson - PK : Ryan MacInnis
<b>Extra Defensemen</b>
Normal : Markus Nutivaara, Ryan Lindgren, Damon Severson - PP : Olli Maatta - PK : Travis Hamonic, Damon Severson
<b>Penalty Shots</b>
Alex Galchenyuk, Teuvo Teravainen, Matt Duchene, Marcus Johansson, Anthony Duclair
<b>Custom OT Lines Forwards</b>
Alex Galchenyuk, Teuvo Teravainen, Marcus Johansson, Anthony Duclair, Matt Duchene, Chris Tierney, Ryan MacInnis, Barrett Hayton, Oskar Sundqvist, Blake Lizotte
<b>Custom OT Lines Defensemen</b>
Travis Hamonic, Olli Maatta, Damon Severson, Ryan Lindgren, Markus Nutivaara

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Brandon Saad             Dylan Gambrell           25     1   2  2  
 2 Peter Trainor            Brock Nelson             Jordan Weal              25     1   2  2  
 3 Unknown Player           Unknown Player           Rihards Bukarts          25     1   2  2  
 4 Evan Rodrigues           John Quenneville         Unknown Player           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Luca Sbisa               Brian Dumoulin                                    25     1   2  2  
 2 Taylor Doherty           Mark Barberio                                     25     1   2  2  
 3 Ilya Lyubushkin          Shayne Gostisbehere                               25     1   2  2  
 4 Luca Sbisa               Brian Dumoulin                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Brandon Saad             Dylan Gambrell           60     1   2  2  
 2 Peter Trainor            Brock Nelson             Jordan Weal              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Luca Sbisa               Brian Dumoulin                                    60     1   2  2  
 2 Taylor Doherty           Mark Barberio                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Brandon Saad             60     1   2  2  
 2 Dylan Gambrell           Peter Trainor            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Brian Dumoulin           60     1   2  2  
 2 Taylor Doherty           Mark Barberio            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Evgeny Kuznetsov                                  60     1   2  2  
 2 Brandon Saad                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Brian Dumoulin           60     1   2  2  
 2 Taylor Doherty           Mark Barberio            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Brandon Saad             60     1   2  2  
 2 Dylan Gambrell           Peter Trainor            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Brian Dumoulin           60     1   2  2  
 2 Taylor Doherty           Mark Barberio            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeny Kuznetsov         Brandon Saad             Dylan Gambrell           Luca Sbisa               Brian Dumoulin           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeny Kuznetsov         Brandon Saad             Dylan Gambrell           Luca Sbisa               Brian Dumoulin           

<b>Goaltenders</b>
Starting : Kevin Poulin             
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Rihards Bukarts - PP : Unknown Player, Unknown Player - PK : Rihards Bukarts
<b>Extra Defensemen</b>
Normal : Ilya Lyubushkin, Shayne Gostisbehere, Taylor Doherty - PP : Ilya Lyubushkin - PK : Shayne Gostisbehere, Taylor Doherty
<b>Penalty Shots</b>
Evgeny Kuznetsov, Brandon Saad, Dylan Gambrell, Peter Trainor, Brock Nelson
<b>Custom OT Lines Forwards</b>
Evgeny Kuznetsov, Brandon Saad, Dylan Gambrell, Peter Trainor, Brock Nelson, Jordan Weal, Unknown Player, Unknown Player, Rihards Bukarts, Evan Rodrigues
<b>Custom OT Lines Defensemen</b>
Luca Sbisa, Brian Dumoulin, Taylor Doherty, Mark Barberio, Ilya Lyubushkin

<b>Scratches</b>
Keaton Ellerby (Back Injury), Ryan Getzlaf (Suspend), Marcel Noebels (Suspend), Anthony Camara (Healthy), Josh Manson (Suspend)
Nikita Gusev (Suspend), Calvin Pickard (Suspend)</pre></div>
<h1 class="TeamLinesPro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Gustav Nyquist           Evgeny Dadonov           34     1   1  3  
 2 Antti Suomela            William Carrier          Mitch Holmberg           28     1   2  2  
 3 Justin Holl              Nikolay Prokhorkin       Nick Bjugstad            22     1   2  2  
 4 Greg Chase               Adam Helewka             Justin Holl              16     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marc Staal               Cody Franson                                      34     1   3  1  
 2 Brayden McNabb           David Savard                                      33     1   2  2  
 3 John Nyberg              Adam Clendening                                   33     1   3  1  
 4 Marc Staal               Cody Franson                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Mitch Holmberg           Evgeny Dadonov           50     0   0  5  
 2 Antti Suomela            William Carrier          Gustav Nyquist           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 David Savard             Cody Franson                                      50     1   3  1  
 2 Adam Clendening          Marc Staal                                        50     1   3  1  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           Evgeny Dadonov           50     0   5  0  
 2 Mitch Holmberg           William Carrier          50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Clendening          Marc Staal               50     1   4  0  
 2 Cody Franson             David Savard             50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Toews                                    50     0   5  0  
 2 William Carrier                                   50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Nyberg              Marc Staal               50     1   4  0  
 2 Cody Franson             David Savard             50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           William Carrier          50     0   2  3  
 2 Antti Suomela            Mitch Holmberg           50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Cody Franson             50     1   3  1  
 2 Adam Clendening          David Savard             50     1   1  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Mitch Holmberg           Evgeny Dadonov           David Savard             Cody Franson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           William Carrier          Nick Bjugstad            Brayden McNabb           Marc Staal               

<b>Goaltenders</b>
Starting : Mackenzie Blackwood      
Backup : Keith Kinkaid            

<b>Extra Forwards</b>
Normal : William Carrier, Jonathan Toews, Mitch Holmberg - PP : William Carrier, Nikolay Prokhorkin - PK : Jonathan Toews
<b>Extra Defensemen</b>
Normal : Cody Franson, Adam Clendening, David Savard - PP : John Nyberg - PK : David Savard, John Nyberg
<b>Penalty Shots</b>
Jonathan Toews, Gustav Nyquist, Evgeny Dadonov, Mitch Holmberg, William Carrier
<b>Custom OT Lines Forwards</b>
Jonathan Toews, Evgeny Dadonov, William Carrier, Mitch Holmberg, Antti Suomela, Nick Bjugstad, Greg Chase, Gustav Nyquist, Justin Holl, Nikolay Prokhorkin
<b>Custom OT Lines Defensemen</b>
Cody Franson, Brayden McNabb, David Savard, Marc Staal, Adam Clendening

<b>Scratches</b>
Anders Lindback (Healthy)</pre></div>
<h1 class="TeamLinesPro_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Robby Fabbri             Colin Wilson             36     0   1  4  
 2 Evgeny Grachev           Magnus Paajarvi          Alexander Kerfoot        30     0   1  4  
 3 Joachim Nermark          Taylor Leier             Colin Smith              26     1   1  3  
 4 Christophe Lalancette    Alex Iafallo             Jason Zucker             8      1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum                                     37     0   1  4  
 2 Devon Toews              Yann Sauve                                        36     1   1  3  
 3 Jani Hakanpaa            Andreas Englund                                   27     1   3  1  
 4 Vyacheslav Voynov        Jonathon Blum                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Robby Fabbri             Colin Wilson             60     0   0  5  
 2 Evgeny Grachev           Magnus Paajarvi          Colin Smith              40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum                                     60     0   1  4  
 2 Devon Toews              Yann Sauve                                        40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joachim Nermark          Alex Iafallo             60     1   3  1  
 2 Sean Monahan             Taylor Leier             40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum            60     1   4  0  
 2 Devon Toews              Yann Sauve               40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joachim Nermark                                   60     0   5  0  
 2 Alex Iafallo                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum            60     1   4  0  
 2 Devon Toews              Yann Sauve               40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Monahan             Robby Fabbri             60     0   1  4  
 2 Colin Wilson             Magnus Paajarvi          40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Jonathon Blum            60     0   1  4  
 2 Devon Toews              Yann Sauve               40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Robby Fabbri             Colin Wilson             Vyacheslav Voynov        Jonathon Blum            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Robby Fabbri             Colin Wilson             Vyacheslav Voynov        Jonathon Blum            

<b>Goaltenders</b>
Starting : Martin Jones             
Backup : Andrew Hammond           

<b>Extra Forwards</b>
Normal : Alex Iafallo, Alexander Kerfoot, Christophe Lalancette - PP : Alex Iafallo, Alexander Kerfoot - PK : Christophe Lalancette
<b>Extra Defensemen</b>
Normal : Jani Hakanpaa, Andreas Englund, Devon Toews - PP : Jani Hakanpaa - PK : Andreas Englund, Devon Toews
<b>Penalty Shots</b>
Sean Monahan, Robby Fabbri, Colin Wilson, Magnus Paajarvi, Evgeny Grachev
<b>Custom OT Lines Forwards</b>
Sean Monahan, Robby Fabbri, Colin Wilson, Magnus Paajarvi, Evgeny Grachev, Colin Smith, Alexander Kerfoot, Christophe Lalancette, Joachim Nermark, Taylor Leier
<b>Custom OT Lines Defensemen</b>
Vyacheslav Voynov, Jonathon Blum, Devon Toews, Yann Sauve, Jani Hakanpaa

<b>Scratches</b>
Jake Walman (Suspend), Brett Cote (Healthy)</pre></div>
<h1 class="TeamLinesPro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Jason Dickinson          Nathan MacKinnon         25     0   2  3  
 2 Christian Dvorak         Johnny Gaudreau          Ilya Mikheyev            25     1   1  3  
 3 Joel Eriksson Ek         Remi Elie                Dmitrij Jaskin           25     1   1  3  
 4 Derek Ryan               Pius Suter               Brandon McMillan         25     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Gudbranson          Jonas Brodin                                      35     1   2  2  
 2 Oscar Klefbom            Adam Boqvist                                      35     1   2  2  
 3 Marcus Pettersson        Nikita Nesterov                                   30     1   3  1  
 4 Erik Gudbranson          Jonas Brodin                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Jason Dickinson          Nathan MacKinnon         60     0   0  5  
 2 Christian Dvorak         Johnny Gaudreau          Ilya Mikheyev            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Gudbranson          Jonas Brodin                                      60     0   1  4  
 2 Oscar Klefbom            Adam Boqvist                                      40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Ryan               Ilya Mikheyev            60     2   3  0  
 2 Joel Eriksson Ek         Remi Elie                40     2   3  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Nesterov          Oscar Klefbom            60     2   3  0  
 2 Erik Gudbranson          Jonas Brodin             40     2   3  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Derek Ryan                                        60     2   3  0  
 2 Joel Eriksson Ek                                  40     2   3  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Nesterov          Oscar Klefbom            60     2   3  0  
 2 Jonas Brodin             Erik Gudbranson          40     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Backstrom        Nathan MacKinnon         60     0   1  4  
 2 Christian Dvorak         Johnny Gaudreau          40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Boqvist             Oscar Klefbom            60     1   1  3  
 2 Erik Gudbranson          Jonas Brodin             40     1   1  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Johnny Gaudreau          Nathan MacKinnon         Erik Gudbranson          Jonas Brodin             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Christian Dvorak         Ilya Mikheyev            Erik Gudbranson          Oscar Klefbom            

<b>Goaltenders</b>
Starting : Alexandar Georgiyev      
Backup : Tuukka Rask              

<b>Extra Forwards</b>
Normal : Joel Eriksson Ek, Dmitrij Jaskin, Remi Elie - PP : Joel Eriksson Ek, Dmitrij Jaskin - PK : Brandon McMillan
<b>Extra Defensemen</b>
Normal : Nikita Nesterov, Marcus Pettersson, Erik Gudbranson - PP : Nikita Nesterov - PK : Adam Boqvist, Marcus Pettersson
<b>Penalty Shots</b>
Nathan MacKinnon, Johnny Gaudreau, Nicklas Backstrom, Dmitrij Jaskin, Brandon McMillan
<b>Custom OT Lines Forwards</b>
Nathan MacKinnon, Johnny Gaudreau, Nicklas Backstrom, Christian Dvorak, Ilya Mikheyev, Jason Dickinson, Joel Eriksson Ek, Dmitrij Jaskin, Remi Elie, Pius Suter
<b>Custom OT Lines Defensemen</b>
Erik Gudbranson, Jonas Brodin, Oscar Klefbom, Adam Boqvist, Nikita Nesterov

<b>Scratches</b>
Carl Gunnarsson (Healthy), Shawn Matthias (Healthy), Barclay Goodrow (Healthy)</pre></div>
<h1 class="TeamLinesPro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathew Barzal            Sven Baertschi           Leon Draisaitl           38     0   2  3  
 2 Sean Couturier           Max Domi                 Alexander Radulov        35     0   2  3  
 3 Conner Bleackley         Hunter Shinkaruk         Jayce Hawryluk           25     0   3  2  
 4 Darren Helm              Travis Boyd              Curtis Hamilton          2      0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Duncan Siemens           Shea Weber                                        38     0   3  2  
 2 Haydn Fleury             Alexander Urbom                                   35     0   3  2  
 3 Alex Petrovic            Matt Roy                                          25     0   4  1  
 4 Alex Petrovic            Matt Roy                                          2      0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathew Barzal            Sven Baertschi           Leon Draisaitl           50     0   0  5  
 2 Sean Couturier           Max Domi                 Alexander Radulov        50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Duncan Siemens           Shea Weber                                        50     0   1  4  
 2 Haydn Fleury             Alexander Urbom                                   50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Curtis Hamilton          50     0   4  1  
 2 Conner Bleackley         Darren Helm              50     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Duncan Siemens           Shea Weber               50     0   5  0  
 2 Alex Petrovic            Alexander Urbom          50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sean Couturier                                    50     0   5  0  
 2 Conner Bleackley                                  50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Duncan Siemens           Shea Weber               50     0   5  0  
 2 Alex Petrovic            Alexander Urbom          50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mathew Barzal            Leon Draisaitl           50     0   2  3  
 2 Sean Couturier           Max Domi                 50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Haydn Fleury             Alexander Urbom          50     0   4  1  
 2 Alex Petrovic            Matt Roy                 50     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mathew Barzal            Max Domi                 Leon Draisaitl           Duncan Siemens           Shea Weber               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Darren Helm              Mathew Barzal            Alex Petrovic            Alexander Urbom          

<b>Goaltenders</b>
Starting : Marek Mazanec            
Backup : Jordan Binnington        

<b>Extra Forwards</b>
Normal : Sean Couturier, Jayce Hawryluk, Conner Bleackley - PP : Hunter Shinkaruk, Mathew Barzal - PK : Jayce Hawryluk
<b>Extra Defensemen</b>
Normal : Haydn Fleury, Alexander Urbom, Alex Petrovic - PP : Matt Roy - PK : Duncan Siemens, Shea Weber
<b>Penalty Shots</b>
Alexander Radulov, Max Domi, Mathew Barzal, Sven Baertschi, Sean Couturier
<b>Custom OT Lines Forwards</b>
Hunter Shinkaruk, Leon Draisaitl, Conner Bleackley, Max Domi, Mathew Barzal, Travis Boyd, Jayce Hawryluk, Sven Baertschi, Sean Couturier, Alexander Radulov
<b>Custom OT Lines Defensemen</b>
Shea Weber, Duncan Siemens, Alexander Urbom, Haydn Fleury, Matt Roy

<b>Scratches</b>
Evan Fitzpatrick (Healthy)</pre></div>
<h1 class="TeamLinesPro_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jaden Schwartz           Tomas Hertl              Evgeni Malkin            25     1   2  2  
 2 Nick Suzuki              Brady Tkachuk            Jean-Gabriel Pageau      25     1   2  2  
 3 Ryan Kesler              Kyle Connor              Josh Anderson            25     1   2  2  
 4 Jeff Carter              Jordan Greenway          Jaden Schwartz           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nick Leddy               John Klingberg                                    25     1   2  2  
 2 Mirco Mueller            Mark Katic                                        25     1   2  2  
 3 Philip Larsen            Nikolas Brouillard                                25     1   2  2  
 4 Nick Leddy               John Klingberg                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jaden Schwartz           Tomas Hertl              Evgeni Malkin            60     1   2  2  
 2 Nick Suzuki              Brady Tkachuk            Jean-Gabriel Pageau      40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nick Leddy               John Klingberg                                    60     1   2  2  
 2 Mirco Mueller            Mark Katic                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaden Schwartz           Tomas Hertl              60     1   2  2  
 2 Brady Tkachuk            Evgeni Malkin            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nick Leddy               John Klingberg           60     1   2  2  
 2 Mirco Mueller            Mark Katic               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jaden Schwartz                                    60     1   2  2  
 2 Tomas Hertl                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nick Leddy               John Klingberg           60     1   2  2  
 2 Mirco Mueller            Mark Katic               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaden Schwartz           Tomas Hertl              60     1   2  2  
 2 Brady Tkachuk            Evgeni Malkin            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nick Leddy               John Klingberg           60     1   2  2  
 2 Mirco Mueller            Mark Katic               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jaden Schwartz           Tomas Hertl              Evgeni Malkin            Nick Leddy               John Klingberg           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jaden Schwartz           Tomas Hertl              Evgeni Malkin            Nick Leddy               John Klingberg           

<b>Goaltenders</b>
Starting : Connor Hellebuyck        
Backup : Kari Lehtonen            

<b>Extra Forwards</b>
Normal : Charles Hudon, Kyle Connor, Ryan Kesler - PP : Charles Hudon, Kyle Connor - PK : Ryan Kesler
<b>Extra Defensemen</b>
Normal : Philip Larsen, Nikolas Brouillard, Mirco Mueller - PP : Philip Larsen - PK : Nikolas Brouillard, Mirco Mueller
<b>Penalty Shots</b>
Jaden Schwartz, Tomas Hertl, Brady Tkachuk, Evgeni Malkin, Nick Suzuki
<b>Custom OT Lines Forwards</b>
Jaden Schwartz, Tomas Hertl, Brady Tkachuk, Evgeni Malkin, Nick Suzuki, Kyle Connor, Jean-Gabriel Pageau, Ryan Kesler, Josh Anderson, Jeff Carter
<b>Custom OT Lines Defensemen</b>
Nick Leddy, John Klingberg, Mirco Mueller, Mark Katic, Philip Larsen

<b>Scratches</b>
Brogan Rafferty (Healthy)</pre></div>
<h1 class="TeamLinesPro_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Gagner               Taylor Hall              Chris Stewart            35     0   2  3  
 2 Tobias Rieder            Kailer Yamamoto          Ryan Callahan            34     0   2  3  
 3 Cédric Paquette          Paul Bittner             Brendan Gallagher        26     0   2  3  
 4 Cameron Hughes           Brendan Lemieux          Bogdan Yakimov           5      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cody Ceci                Rasmus Dahlin                                     33     0   3  2  
 2 Mikko Vainonen           Colten Teubert                                    33     0   2  3  
 3 Martin Marincin          Jack Dougherty                                    31     0   2  3  
 4 Rasmus Dahlin            Mikko Vainonen                                    3      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Gagner               Taylor Hall              Chris Stewart            55     0   0  5  
 2 Tobias Rieder            Kailer Yamamoto          Brendan Gallagher        45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cody Ceci                Rasmus Dahlin                                     55     0   1  4  
 2 Colten Teubert           Jack Dougherty                                    45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cédric Paquette          Tobias Rieder            57     0   5  0  
 2 Bogdan Yakimov           Brendan Lemieux          43     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colten Teubert           Martin Marincin          57     0   5  0  
 2 Mikko Vainonen           Jack Dougherty           43     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Cédric Paquette                                   57     0   5  0  
 2 Bogdan Yakimov                                    43     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mikko Vainonen           Colten Teubert           57     0   5  0  
 2 Jack Dougherty           Martin Marincin          43     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sam Gagner               Taylor Hall              55     0   1  4  
 2 Tobias Rieder            Ryan Callahan            45     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cody Ceci                Rasmus Dahlin            55     0   2  3  
 2 Mikko Vainonen           Martin Marincin          45     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Gagner               Taylor Hall              Ryan Callahan            Cody Ceci                Rasmus Dahlin            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cédric Paquette          Tobias Rieder            Brendan Gallagher        Mikko Vainonen           Martin Marincin          

<b>Goaltenders</b>
Starting : Marc-Andre Fleury        
Backup : Matt Hackett             

<b>Extra Forwards</b>
Normal : Ryan Callahan, Taylor Hall, Sam Gagner - PP : Ryan Callahan, Sam Gagner - PK : Brendan Gallagher
<b>Extra Defensemen</b>
Normal : Martin Marincin, Jack Dougherty, Cody Ceci - PP : Mikko Vainonen - PK : Colten Teubert, Mikko Vainonen
<b>Penalty Shots</b>
Sam Gagner, Taylor Hall, Chris Stewart, Ryan Callahan, Brendan Gallagher
<b>Custom OT Lines Forwards</b>
Sam Gagner, Taylor Hall, Tobias Rieder, Kailer Yamamoto, Cédric Paquette, Ryan Callahan, Cameron Hughes, Brendan Gallagher, Paul Bittner, Chris Stewart
<b>Custom OT Lines Defensemen</b>
Cody Ceci, Rasmus Dahlin, Mikko Vainonen, Colten Teubert, Martin Marincin

<b>Scratches</b>
Martin Gernat (Healthy), Frank Vatrano (Healthy), Ville Husso (Healthy)</pre></div>
<h1 class="TeamLinesPro_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Oliver Bjorkstrand       Jonathan Huberdeau       30     1   2  2  
 2 Ryan O'Reilly            Dylan Larkin             Ondrej Kase              30     1   2  2  
 3 Phillip Danault          Dillon Dube              Brendan Perlini          30     1   3  1  
 4 Jacob De La Rose         Alan Quine               Ryan Tesink              10     3   2  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Aaron Ekblad             Scott Harrington                                  34     1   3  1  
 2 David Musil              Sean Walker                                       33     1   3  1  
 3 Joel Edmundson           Mario Ferraro                                     33     1   4  0  
 4 Joel Edmundson           Mario Ferraro                                     0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Dylan Larkin             Jonathan Huberdeau       52     0   0  5  
 2 Ryan O'Reilly            Oliver Bjorkstrand       Ondrej Kase              48     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Aaron Ekblad             Sean Walker                                       52     0   1  4  
 2 Scott Harrington         David Musil                                       48     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob De La Rose         Brendan Perlini          52     0   5  0  
 2 Phillip Danault          Dillon Dube              48     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Musil              Joel Edmundson           52     0   5  0  
 2 Aaron Ekblad             Scott Harrington         48     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jacob De La Rose                                  52     0   5  0  
 2 Phillip Danault                                   48     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Musil              Joel Edmundson           52     0   5  0  
 2 Aaron Ekblad             Scott Harrington         48     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Jonathan Huberdeau       52     0   1  4  
 2 Ryan O'Reilly            Dylan Larkin             48     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ekblad             Scott Harrington         52     1   3  1  
 2 David Musil              Sean Walker              48     1   4  0  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Dylan Larkin             Jonathan Huberdeau       Aaron Ekblad             Sean Walker              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jacob De La Rose         Phillip Danault          Brendan Perlini          David Musil              Joel Edmundson           

<b>Goaltenders</b>
Starting : Sergei Bobrovsky         
Backup : Frederik Andersen        

<b>Extra Forwards</b>
Normal : Aleksander Barkov, Dylan Larkin, Jonathan Huberdeau - PP : Dylan Larkin, Jonathan Huberdeau - PK : Jacob De La Rose
<b>Extra Defensemen</b>
Normal : Aaron Ekblad, Scott Harrington, Sean Walker - PP : Aaron Ekblad - PK : David Musil, Joel Edmundson
<b>Penalty Shots</b>
Aleksander Barkov, Dylan Larkin, Jonathan Huberdeau, Oliver Bjorkstrand, Ryan O'Reilly
<b>Custom OT Lines Forwards</b>
Aleksander Barkov, Jonathan Huberdeau, Dylan Larkin, Ryan O'Reilly, Oliver Bjorkstrand, Ondrej Kase, Phillip Danault, Brendan Perlini, Jacob De La Rose, Dillon Dube
<b>Custom OT Lines Defensemen</b>
Aaron Ekblad, Scott Harrington, Sean Walker, David Musil, Mario Ferraro

<b>Scratches</b>
Joel Hanley (Healthy), Dominic Toninato (Healthy)</pre></div>
<h1 class="TeamLinesPro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             Vincent Trocheck         25     1   2  2  
 2 Nicolas Roy              Anthony Mantha           Corey Perry              25     1   2  2  
 3 Anthony Cirelli          Kevin Fiala              Brett Ritchie            25     1   2  2  
 4 Jeff Skinner             Miles Wood               Mathieu Joseph           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Mark Pysyk                                        25     1   2  2  
 2 Michael Del Zotto        Derek Forbort                                     25     1   2  2  
 3 Rasmus Andersson         Jordan Subban                                     25     1   2  2  
 4 Drew Doughty             Mark Pysyk                                        25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             Vincent Trocheck         60     1   2  2  
 2 Nicolas Roy              Anthony Mantha           Corey Perry              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Mark Pysyk                                        60     1   2  2  
 2 Michael Del Zotto        Derek Forbort                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jeff Skinner             Anze Kopitar             60     1   2  2  
 2 Vincent Trocheck         Corey Perry              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Mark Pysyk               60     1   2  2  
 2 Michael Del Zotto        Derek Forbort            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jeff Skinner                                      60     1   2  2  
 2 Anze Kopitar                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Mark Pysyk               60     1   2  2  
 2 Michael Del Zotto        Derek Forbort            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jeff Skinner             Anze Kopitar             60     1   2  2  
 2 Vincent Trocheck         Corey Perry              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Mark Pysyk               60     1   2  2  
 2 Michael Del Zotto        Derek Forbort            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Jeff Skinner             Vincent Trocheck         Drew Doughty             Mark Pysyk               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Jeff Skinner             Vincent Trocheck         Drew Doughty             Mark Pysyk               

<b>Goaltenders</b>
Starting : Michal Neuvirth          
Backup : Adin Hill                

<b>Extra Forwards</b>
Normal : Anders Bjork, Kevin Fiala, Brett Ritchie - PP : Anders Bjork, Kevin Fiala - PK : Brett Ritchie
<b>Extra Defensemen</b>
Normal : Rasmus Andersson, Jordan Subban, Michael Del Zotto - PP : Rasmus Andersson - PK : Jordan Subban, Michael Del Zotto
<b>Penalty Shots</b>
Jeff Skinner, Anze Kopitar, Vincent Trocheck, Corey Perry, Anthony Mantha
<b>Custom OT Lines Forwards</b>
Jeff Skinner, Anze Kopitar, Vincent Trocheck, Corey Perry, Anthony Mantha, Kevin Fiala, Brett Ritchie, Miles Wood, Nicolas Roy, Anthony Cirelli
<b>Custom OT Lines Defensemen</b>
Drew Doughty, Mark Pysyk, Michael Del Zotto, Derek Forbort, Rasmus Andersson

<b>Scratches</b>
Kevin Hayes (Suspend)</pre></div>
<h1 class="TeamLinesPro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vladimir Tarasenko       Alex Ovechkin            Jake Virtanen            37     1   2  2  
 2 Jack Roslovic            Kevin Labanc             JC Lipon                 29     1   2  2  
 3 Sven Andrighetto         Andreas Johnsson         Conor Garland            24     1   2  2  
 4 Alex Barré-Boulet        Ondrej Palat             Joe Pavelski             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brendan Smith            Ryan Murphy                                       35     1   2  2  
 2 Neal Pionk               Ryan Sproul                                       35     1   2  2  
 3 Aaron Ness               Matt Benning                                      20     1   2  2  
 4 Ryan Murphy              Matt Benning                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vladimir Tarasenko       Kevin Labanc             Alex Ovechkin            60     1   2  2  
 2 Jack Roslovic            Andreas Johnsson         JC Lipon                 40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Sproul              Ryan Murphy                                       60     1   2  2  
 2 Jake Virtanen            Neal Pionk                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joe Pavelski             Jake Virtanen            60     1   2  2  
 2 Jack Roslovic            Ondrej Palat             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ness               Brendan Smith            60     1   2  2  
 2 Matt Benning             Ryan Murphy              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joe Pavelski                                      60     1   2  2  
 2 Ondrej Palat                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ness               Brendan Smith            60     1   2  2  
 2 Matt Benning             Ryan Murphy              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Vladimir Tarasenko       Alex Ovechkin            60     1   2  2  
 2 Jack Roslovic            Kevin Labanc             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Ryan Murphy              60     1   2  2  
 2 Neal Pionk               Ryan Sproul              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vladimir Tarasenko       Alex Ovechkin            Kevin Labanc             Ryan Sproul              Ryan Murphy              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joe Pavelski             Ondrej Palat             Jake Virtanen            Brendan Smith            Aaron Ness               

<b>Goaltenders</b>
Starting : Thatcher Demko           
Backup : Brian Elliott            

<b>Extra Forwards</b>
Normal : Jack Roslovic, Alex Ovechkin, Vladimir Tarasenko - PP : Jack Roslovic, Vladimir Tarasenko - PK : JC Lipon
<b>Extra Defensemen</b>
Normal : Aaron Ness, Ryan Murphy, Brendan Smith - PP : Aaron Ness - PK : Matt Benning, Brendan Smith
<b>Penalty Shots</b>
Kevin Labanc, Vladimir Tarasenko, Alex Ovechkin, Jake Virtanen, Andreas Johnsson
<b>Custom OT Lines Forwards</b>
Vladimir Tarasenko, Alex Ovechkin, Jack Roslovic, Kevin Labanc, Sven Andrighetto, JC Lipon, Andreas Johnsson, Conor Garland, Alex Barré-Boulet, Jake Virtanen
<b>Custom OT Lines Defensemen</b>
Ryan Murphy, Neal Pionk, Brendan Smith, Ryan Sproul, Aaron Ness

<b>Scratches</b>
Colby Cohen (Healthy), Justin Kloos (Healthy), Christian Wolanin (Healthy)</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Filip Forsberg           Jakub Vrana              25     1   2  2  
 2 Danton Heinen            Tomas Tatar              Brent Burns              25     1   2  2  
 3 David Griger             Dominik Kubalik          Gabriel Bourque          25     1   2  2  
 4 Chandler Stephenson      Carter Verhaeghe         Kyle Turris              25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Torey Krug                                        25     1   2  2  
 2 Slater Koekkoek          Jake Gardiner                                     25     1   2  2  
 3 Artyom Zub               Chandler Stephenson                               25     1   2  2  
 4 Alex Pietrangelo         Torey Krug                                        25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Filip Forsberg           Jakub Vrana              60     1   2  2  
 2 Danton Heinen            Tomas Tatar              Brent Burns              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Torey Krug                                        60     1   2  2  
 2 Slater Koekkoek          Jake Gardiner                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sidney Crosby            Filip Forsberg           60     1   2  2  
 2 Jakub Vrana              Danton Heinen            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Torey Krug               60     1   2  2  
 2 Slater Koekkoek          Jake Gardiner            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sidney Crosby                                     60     1   2  2  
 2 Filip Forsberg                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Torey Krug               60     1   2  2  
 2 Slater Koekkoek          Jake Gardiner            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sidney Crosby            Filip Forsberg           60     1   2  2  
 2 Jakub Vrana              Danton Heinen            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Torey Krug               60     1   2  2  
 2 Slater Koekkoek          Jake Gardiner            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Filip Forsberg           Jakub Vrana              Alex Pietrangelo         Torey Krug               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Filip Forsberg           Jakub Vrana              Alex Pietrangelo         Torey Krug               

<b>Goaltenders</b>
Starting : Jake Allen               
Backup : Cal Petersen             

<b>Extra Forwards</b>
Normal : Noah Gregor, Dominik Kubalik, David Griger - PP : Noah Gregor, Dominik Kubalik - PK : David Griger
<b>Extra Defensemen</b>
Normal : Artyom Zub, Brent Burns, Slater Koekkoek - PP : Artyom Zub - PK : Brent Burns, Slater Koekkoek
<b>Penalty Shots</b>
Sidney Crosby, Filip Forsberg, Jakub Vrana, Danton Heinen, Brent Burns
<b>Custom OT Lines Forwards</b>
Sidney Crosby, Filip Forsberg, Jakub Vrana, Danton Heinen, Brent Burns, Tomas Tatar, Dominik Kubalik, David Griger, Gabriel Bourque, Chandler Stephenson
<b>Custom OT Lines Defensemen</b>
Alex Pietrangelo, Torey Krug, Slater Koekkoek, Jake Gardiner, Brent Burns

<b>Scratches</b>
Niko Mikkola (Healthy), Logan O'Connor (Healthy), Julius Honka (Torn Left ACL Injury), Tomas Hyka (Healthy)</pre></div>
<h1 class="TeamLinesPro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mitchell Marner          Nail Yakupov             Nikita Kucherov          35     0   2  3  
 2 Sam Reinhart             Nic Petan                Ty Rattie                32     0   2  3  
 3 Brett Pollock            Tage Thompson            Drake Batherson          23     0   2  3  
 4 Tyler Motte              Trevor Moore             Karson Kuhlman           10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Orlov             Colton Parayko                                    34     1   3  1  
 2 Adam Pelech              Justin Faulk                                      33     1   3  1  
 3 Tyson Barrie             Brett Pesce                                       33     1   3  1  
 4 Adam Pelech              Justin Faulk                                      0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mitchell Marner          Nail Yakupov             Nikita Kucherov          60     0   0  5  
 2 Nic Petan                Ty Rattie                Drake Batherson          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Orlov             Justin Faulk                                      60     0   1  4  
 2 Tyson Barrie             Colton Parayko                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sam Reinhart             Trevor Moore             50     0   5  0  
 2 Karson Kuhlman           Tage Thompson            50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Pelech              Colton Parayko           50     0   5  0  
 2 Brett Pesce              Justin Faulk             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sam Reinhart                                      50     0   5  0  
 2 Karson Kuhlman                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Pelech              Colton Parayko           50     0   5  0  
 2 Brett Pesce              Justin Faulk             50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mitchell Marner          Nikita Kucherov          50     0   2  3  
 2 Sam Reinhart             Nic Petan                50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitri Orlov             Colton Parayko           50     1   2  2  
 2 Adam Pelech              Justin Faulk             50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mitchell Marner          Nail Yakupov             Nikita Kucherov          Dmitri Orlov             Justin Faulk             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Reinhart             Tage Thompson            Karson Kuhlman           Adam Pelech              Colton Parayko           

<b>Goaltenders</b>
Starting : Carter Hart              
Backup : Tristan Jarry            

<b>Extra Forwards</b>
Normal : Mitchell Marner, Nikita Kucherov, Sam Reinhart - PP : Sam Reinhart, Brett Pollock - PK : Brett Pollock
<b>Extra Defensemen</b>
Normal : Justin Faulk, Colton Parayko, Dmitri Orlov - PP : Brett Pesce - PK : Tyson Barrie, Dmitri Orlov
<b>Penalty Shots</b>
Nikita Kucherov, Mitchell Marner, Nail Yakupov, Sam Reinhart, Ty Rattie
<b>Custom OT Lines Forwards</b>
Mitchell Marner, Nikita Kucherov, Sam Reinhart, Nail Yakupov, Nic Petan, Ty Rattie, Drake Batherson, Tage Thompson, Tyler Motte, Brett Pollock
<b>Custom OT Lines Defensemen</b>
Dmitri Orlov, Justin Faulk, Colton Parayko, Tyson Barrie, Brett Pesce

<b>Scratches</b>
Alec Martinez (Healthy)</pre></div>
<h1 class="TeamLinesPro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Tyler Ennis              William Nylander         34     1   1  3  
 2 Patrice Bergeron         Henrik Samuelsson        James Neal               29     1   1  3  
 3 Roope Hintz              Reilly Smith             Jared McCann             22     1   2  2  
 4 Kevin Stenlund           Jakob Silfverberg        Adam Gaudette            15     5   0  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Trouba             Dysin Mayo                                        35     1   1  3  
 2 Travis Dermott           Will Butcher                                      30     1   1  3  
 3 Steven Santini           Jacob Middleton                                   20     1   1  3  
 4 Jacob Trouba             Dysin Mayo                                        15     5   0  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Tyler Ennis              William Nylander         60     0   0  5  
 2 Patrice Bergeron         Henrik Samuelsson        Jared McCann             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Trouba             Dysin Mayo                                        60     0   0  5  
 2 Travis Dermott           Will Butcher                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrice Bergeron         Jared McCann             60     0   5  0  
 2 Kevin Stenlund           Adam Gaudette            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Dysin Mayo               60     0   5  0  
 2 Travis Dermott           Will Butcher             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Patrice Bergeron                                  60     0   5  0  
 2 Adam Gaudette                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Dysin Mayo               60     0   5  0  
 2 Travis Dermott           Will Butcher             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Eichel              Tyler Ennis              60     1   2  2  
 2 Patrice Bergeron         William Nylander         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Dysin Mayo               60     1   2  2  
 2 Travis Dermott           Will Butcher             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Tyler Ennis              William Nylander         Jacob Trouba             Dysin Mayo               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Bergeron         Jared McCann             Jack Eichel              Jacob Trouba             Dysin Mayo               

<b>Goaltenders</b>
Starting : Cory Schneider           
Backup : Ilya Sorokin             

<b>Extra Forwards</b>
Normal : Patrice Bergeron, Jack Eichel, Jared McCann - PP : Jack Eichel, William Nylander - PK : Jared McCann
<b>Extra Defensemen</b>
Normal : Steven Santini, Jacob Trouba, Travis Dermott - PP : Steven Santini - PK : Jacob Middleton, Dysin Mayo
<b>Penalty Shots</b>
Jack Eichel, Tyler Ennis, Patrice Bergeron, William Nylander, Henrik Samuelsson
<b>Custom OT Lines Forwards</b>
Jack Eichel, Tyler Ennis, Patrice Bergeron, William Nylander, Henrik Samuelsson, Adam Gaudette, James Neal, Reilly Smith, Jared McCann, Roope Hintz
<b>Custom OT Lines Defensemen</b>
Jacob Trouba, Will Butcher, Travis Dermott, Dysin Mayo, Steven Santini

<b>Scratches</b>
Colin Miller (Head Injury), Victor Rask (Strained Left Knee Injury)</pre></div>
<h1 class="TeamLinesPro_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vince Hinostroza         Jesper Bratt             Pavel Buchnevich         35     0   4  1  
 2 Jordan Kyrou             Martin Reway             Charlie Coyle            35     0   4  1  
 3 Cole Cassels             Max Friberg              David Krejci             22     0   2  3  
 4 Ryan Hartman             Yanni Gourde             Tom Wilson               8      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cale Makar               Seth Jones                                        38     0   4  1  
 2 Griffin Reinhart         Vince Dunn                                        36     0   4  1  
 3 Cal Foote                Joakim Ryan                                       25     0   3  2  
 4 Cal Foote                Vince Dunn                                        1      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vince Hinostroza         Jesper Bratt             Pavel Buchnevich         60     0   0  5  
 2 Jordan Kyrou             Max Friberg              Charlie Coyle            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Seth Jones               Cale Makar                                        60     0   1  4  
 2 Vince Dunn               Joakim Ryan                                       40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cole Cassels             Tom Wilson               60     1   4  0  
 2 David Krejci             Ryan Hartman             40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Griffin Reinhart         Seth Jones               60     0   5  0  
 2 Vince Dunn               Cal Foote                40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Cole Cassels                                      60     0   4  1  
 2 David Krejci                                      40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Griffin Reinhart         Seth Jones               60     0   5  0  
 2 Cal Foote                Vince Dunn               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jesper Bratt             Tom Wilson               60     1   2  2  
 2 David Krejci             Pavel Buchnevich         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Seth Jones               Cale Makar               60     1   2  2  
 2 Griffin Reinhart         Joakim Ryan              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vince Hinostroza         Jesper Bratt             Pavel Buchnevich         Cale Makar               Seth Jones               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cole Cassels             Tom Wilson               David Krejci             Griffin Reinhart         Cal Foote                

<b>Goaltenders</b>
Starting : Darcy Kuemper            
Backup : Ben Bishop               

<b>Extra Forwards</b>
Normal : Tom Wilson, Charlie Coyle, David Krejci - PP : Tom Wilson, David Krejci - PK : Yanni Gourde
<b>Extra Defensemen</b>
Normal : Joakim Ryan, Cale Makar, Griffin Reinhart - PP : Joakim Ryan - PK : Joakim Ryan, Vince Dunn
<b>Penalty Shots</b>
Cale Makar, Jordan Kyrou, Vince Hinostroza, Martin Reway, David Krejci
<b>Custom OT Lines Forwards</b>
Martin Reway, Vince Hinostroza, Pavel Buchnevich, David Krejci, Jordan Kyrou, Max Friberg, Jesper Bratt, Cole Cassels, Yanni Gourde, Tom Wilson
<b>Custom OT Lines Defensemen</b>
Cale Makar, Seth Jones, Vince Dunn, Cal Foote, Joakim Ryan

<b>Scratches</b>
Yannick Weber (Healthy), Jake Paterson (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Point            Travis Konecny           Tyler Bertuzzi           29     0   0  5  
 2 Denis Malgin             Denis Guryanov           Viktor Arvidsson         29     0   0  5  
 3 J.T. Miller              Pavel Zacha              Nikolay Goldobin         23     1   1  3  
 4 Dylan Cozens             Ryan Donato              Ryan Poehling            19     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan McDonagh            Ivan Provorov                                     35     1   2  2  
 2 Shea Theodore            Jakob Chychrun                                    35     1   2  2  
 3 Brandon Carlo            Gustav Forsling                                   30     1   2  2  
 4 Shea Theodore            Ivan Provorov                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Point            Viktor Arvidsson         Travis Konecny           55     0   0  5  
 2 Tyler Bertuzzi           J.T. Miller              Denis Malgin             45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Theodore            Ivan Provorov                                     60     0   0  5  
 2 Ryan McDonagh            Jakob Chychrun                                    40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Viktor Arvidsson         Travis Konecny           60     1   4  0  
 2 Brayden Point            J.T. Miller              40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan McDonagh            Ivan Provorov            57     1   4  0  
 2 Shea Theodore            Brandon Carlo            43     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Viktor Arvidsson                                  60     1   4  0  
 2 Brayden Point                                     40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan McDonagh            Shea Theodore            57     1   4  0  
 2 Ivan Provorov            Gustav Forsling          43     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brayden Point            J.T. Miller              50     1   2  2  
 2 Viktor Arvidsson         Travis Konecny           50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakob Chychrun           Shea Theodore            60     1   2  2  
 2 Ivan Provorov            Ryan McDonagh            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brayden Point            Viktor Arvidsson         Travis Konecny           Ivan Provorov            Shea Theodore            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Travis Konecny           J.T. Miller              Tyler Bertuzzi           Ryan McDonagh            Jakob Chychrun           

<b>Goaltenders</b>
Starting : Jack Campbell            
Backup : Andrey Vasilevskiy       

<b>Extra Forwards</b>
Normal : Brayden Point, Viktor Arvidsson, J.T. Miller - PP : J.T. Miller, Brayden Point - PK : Brayden Point
<b>Extra Defensemen</b>
Normal : Ryan McDonagh, Shea Theodore, Ivan Provorov - PP : Ryan McDonagh - PK : Shea Theodore, Ivan Provorov
<b>Penalty Shots</b>
J.T. Miller, Brayden Point, Viktor Arvidsson, Tyler Bertuzzi, Pavel Zacha
<b>Custom OT Lines Forwards</b>
Tyler Bertuzzi, Brayden Point, Pavel Zacha, Viktor Arvidsson, J.T. Miller, Denis Guryanov, Nikolay Goldobin, Ryan Poehling, Ryan Donato, Dylan Cozens
<b>Custom OT Lines Defensemen</b>
Ryan McDonagh, Shea Theodore, Ivan Provorov, Jakob Chychrun, Brandon Carlo

<b>Scratches</b>
Joseph Blandisi (Healthy), Jake McCabe (Healthy)</pre></div>
<h1 class="TeamLinesPro_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Noah Rod                 Kyle Clifford            Tyler Biggs              25     1   2  2  
 2 Robert Thomas            Jesse Puljujarvi         Michael Grabner          25     1   2  2  
 3 Vladislav Kamenev        Ryan Dzingel             Maxwell Reinhart         25     1   2  2  
 4 Michael Frolik           Nick Paul                Kyle Clifford            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Ethan Bear                                        25     1   2  2  
 2 Dylan McIlrath           Jarred Tinordi                                    25     1   2  2  
 3 Jamie McBain             Ben Chiarot                                       25     1   2  2  
 4 Erik Karlsson            Dylan McIlrath                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vladislav Kamenev        Kyle Clifford            Tyler Biggs              60     1   2  2  
 2 Robert Thomas            Jesse Puljujarvi         Michael Grabner          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Ethan Bear                                        60     1   2  2  
 2 Dylan McIlrath           Jarred Tinordi                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kyle Clifford            Michael Grabner          60     1   2  2  
 2 Tyler Biggs              Jesse Puljujarvi         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Karlsson            Dylan McIlrath           60     1   2  2  
 2 Ethan Bear               Jarred Tinordi           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Kyle Clifford                                     60     1   2  2  
 2 Tyler Biggs                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Karlsson            Dylan McIlrath           60     1   2  2  
 2 Ethan Bear               Jarred Tinordi           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kyle Clifford            Ryan Dzingel             60     1   2  2  
 2 Tyler Biggs              Jesse Puljujarvi         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Karlsson            Dylan McIlrath           60     1   2  2  
 2 Ethan Bear               Jarred Tinordi           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Noah Rod                 Kyle Clifford            Tyler Biggs              Erik Karlsson            Dylan McIlrath           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Noah Rod                 Kyle Clifford            Tyler Biggs              Erik Karlsson            Dylan McIlrath           

<b>Goaltenders</b>
Starting : Robin Lehner             
Backup : Igor Bobkov              

<b>Extra Forwards</b>
Normal : Vladislav Kamenev, Ryan Dzingel, Maxwell Reinhart - PP : Vladislav Kamenev, Ryan Dzingel - PK : Maxwell Reinhart
<b>Extra Defensemen</b>
Normal : Jamie McBain, Ben Chiarot, Ethan Bear - PP : Jamie McBain - PK : Ben Chiarot, Ethan Bear
<b>Penalty Shots</b>
Kyle Clifford, Maxwell Reinhart, Tyler Biggs, Jesse Puljujarvi, Michael Grabner
<b>Custom OT Lines Forwards</b>
Kyle Clifford, Noah Rod, Tyler Biggs, Jesse Puljujarvi, Michael Grabner, Michael Frolik, Vladislav Kamenev, Ryan Dzingel, Maxwell Reinhart, Robert Thomas
<b>Custom OT Lines Defensemen</b>
Erik Karlsson, Dylan McIlrath, Ethan Bear, Jarred Tinordi, Jamie McBain

<b>Scratches</b>
Ryan Johansen (Strained Left Elbow Injury)</pre></div>
<h1 class="TeamLinesPro_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Elias Pettersson         Ryan Nugent-Hopkins      Nick Schmaltz            30     0   0  5  
 2 Claude Giroux            Pierre-Luc Dubois        Casey Mittelstadt        30     0   0  5  
 3 Nicolas Kerdiles         Phillip Di Giuseppe      Andrei Svechnikov        23     0   1  4  
 4 Alexis Loiseau           Joakim Nordstrom         Johan Larsson            17     0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Larsson             Josh Morrissey                                    35     0   1  4  
 2 Ryan Murray              Matt Dumba                                        34     0   1  4  
 3 David Rundblad           Duncan Keith                                      31     0   2  3  
 4 Adam Larsson             Josh Morrissey                                    0      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins      Elias Pettersson         Nick Schmaltz            50     0   0  5  
 2 Claude Giroux            Pierre-Luc Dubois        Andrei Svechnikov        50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Larsson             Josh Morrissey                                    60     0   0  5  
 2 Ryan Murray              Matt Dumba                                        40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexis Loiseau           Joakim Nordstrom         60     0   5  0  
 2 Johan Larsson            Phillip Di Giuseppe      40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Rundblad           Duncan Keith             60     0   5  0  
 2 Matt Dumba               Ryan Murray              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Pierre-Luc Dubois                                 60     0   5  0  
 2 Claude Giroux                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Larsson             Josh Morrissey           60     0   5  0  
 2 Matt Dumba               Ryan Murray              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins      Elias Pettersson         60     0   0  5  
 2 Claude Giroux            Pierre-Luc Dubois        40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Larsson             Josh Morrissey           60     0   0  5  
 2 Ryan Murray              Matt Dumba               40     0   0  5  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Nugent-Hopkins      Elias Pettersson         Claude Giroux            Ryan Murray              Adam Larsson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Nugent-Hopkins      Elias Pettersson         Claude Giroux            Ryan Murray              Adam Larsson             

<b>Goaltenders</b>
Starting : David Rittich            
Backup : Scott Darling            

<b>Extra Forwards</b>
Normal : Andrei Svechnikov, Johan Larsson, Nicolas Kerdiles - PP : Nicolas Kerdiles, Phillip Di Giuseppe - PK : Claude Giroux
<b>Extra Defensemen</b>
Normal : Adam Larsson, Ryan Murray, Josh Morrissey - PP : David Rundblad - PK : Adam Larsson, Ryan Murray
<b>Penalty Shots</b>
Claude Giroux, Elias Pettersson, Ryan Nugent-Hopkins, Andrei Svechnikov, Pierre-Luc Dubois
<b>Custom OT Lines Forwards</b>
Elias Pettersson, Ryan Nugent-Hopkins, Claude Giroux, Pierre-Luc Dubois, Andrei Svechnikov, Nick Schmaltz, Nicolas Kerdiles, Phillip Di Giuseppe, Casey Mittelstadt, Johan Larsson
<b>Custom OT Lines Defensemen</b>
Adam Larsson, Ryan Murray, Josh Morrissey, Matt Dumba, David Rundblad

<b>Scratches</b>
Travis Brown (Healthy)</pre></div>
<h1 class="TeamLinesPro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Colin White              Andre Burakovsky         Ivan Barbashev           33     0   2  3  
 2 Jordan Staal             Jake DeBrusk             Victor Olofsson          32     0   3  2  
 3 Josh Bailey              Ryan Spooner             Conor Sheary             22     0   2  3  
 4 Andrew Cogliano          Adam Lowry               Zack Phillips            13     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Michael Matheson         Anthony DeAngelo                                  32     0   3  2  
 2 Tim Erixon               Mac Weegar                                        30     0   4  1  
 3 Troy Stecher             Jonas Siegenthaler                                20     0   4  1  
 4 Troy Stecher             Anthony DeAngelo                                  18     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Colin White              Andre Burakovsky         Jake DeBrusk             60     0   2  3  
 2 Jordan Staal             Ryan Spooner             Victor Olofsson          40     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tim Erixon               Anthony DeAngelo                                  60     0   2  3  
 2 Michael Matheson         Mac Weegar                                        40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Staal             Zack Phillips            60     0   4  1  
 2 Josh Bailey              Adam Lowry               40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Matheson         Mac Weegar               60     0   4  1  
 2 Tim Erixon               Troy Stecher             40     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Staal                                      60     0   5  0  
 2 Josh Bailey                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Matheson         Mac Weegar               60     0   5  0  
 2 Troy Stecher             Tim Erixon               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Josh Bailey              Andre Burakovsky         60     0   3  2  
 2 Colin White              Jake DeBrusk             40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Matheson         Anthony DeAngelo         60     0   3  2  
 2 Tim Erixon               Mac Weegar               40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Colin White              Andre Burakovsky         Jake DeBrusk             Tim Erixon               Anthony DeAngelo         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Staal             Adam Lowry               Zack Phillips            Michael Matheson         Mac Weegar               

<b>Goaltenders</b>
Starting : Kaapo Kähkönen           
Backup : James Reimer             

<b>Extra Forwards</b>
Normal : Andre Burakovsky, Colin White, Jake DeBrusk - PP : Andre Burakovsky, Jake DeBrusk - PK : Jordan Staal
<b>Extra Defensemen</b>
Normal : Michael Matheson, Anthony DeAngelo, Mac Weegar - PP : Anthony DeAngelo - PK : Michael Matheson, Troy Stecher
<b>Penalty Shots</b>
Andre Burakovsky, Jordan Staal, Ryan Spooner, Josh Bailey, Conor Sheary
<b>Custom OT Lines Forwards</b>
Andre Burakovsky, Jake DeBrusk, Colin White, Ryan Spooner, Victor Olofsson, Jordan Staal, Josh Bailey, Conor Sheary, Zack Phillips, Adam Lowry
<b>Custom OT Lines Defensemen</b>
Anthony DeAngelo, Michael Matheson, Mac Weegar, Tim Erixon, Jonas Siegenthaler

<b>Scratches</b>
Nico Sturm (Healthy), Ryan Lomberg (Healthy), Mike Green (Healthy)</pre></div>
<h1 class="TeamLinesPro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Paul Stastny             Jamie Benn               Alex Tuch                30     0   2  3  
 2 Gabriel Gagné            Brett Connolly           Joel Farabee             30     0   2  3  
 3 Unknown Player           Maxime Comtois           Kyle Palmieri            25     0   3  2  
 4 Lukas Sedlak             James Van Riemsdyk       Connor Brown             15     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Carlson             Marc-Edouard Vlasic                               38     0   4  1  
 2 Dan DeKeyser             Connor Murphy                                     35     0   3  2  
 3 Unknown Player           Mike Reilly                                       27     0   4  1  
 4 John Carlson             Marc-Edouard Vlasic                               0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Gabriel Gagné            Jamie Benn               Joel Farabee             60     2   0  3  
 2 Paul Stastny             Brett Connolly           Alex Tuch                40     2   0  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Carlson             Unknown Player                                    60     0   2  3  
 2 Dan DeKeyser             Connor Murphy                                     40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jamie Benn               Paul Stastny             60     1   2  2  
 2 James Van Riemsdyk       Gabriel Gagné            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Carlson             Marc-Edouard Vlasic      60     1   2  2  
 2 Dan DeKeyser             Connor Murphy            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jamie Benn                                        60     1   2  2  
 2 Paul Stastny                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Carlson             Marc-Edouard Vlasic      60     1   2  2  
 2 Dan DeKeyser             Connor Murphy            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jamie Benn               Paul Stastny             60     0   3  2  
 2 James Van Riemsdyk       Gabriel Gagné            40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Carlson             Marc-Edouard Vlasic      60     1   3  1  
 2 Dan DeKeyser             Connor Murphy            40     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Paul Stastny             Jamie Benn               Gabriel Gagné            John Carlson             Marc-Edouard Vlasic      

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Paul Stastny             Jamie Benn               Gabriel Gagné            John Carlson             Marc-Edouard Vlasic      

<b>Goaltenders</b>
Starting : Sami Aittokallio         
Backup : Petr Mrazek              

<b>Extra Forwards</b>
Normal : Maxime Comtois, Brett Connolly, Kyle Palmieri - PP : Maxime Comtois, Brett Connolly - PK : Kyle Palmieri
<b>Extra Defensemen</b>
Normal : Unknown Player, John Carlson, Dan DeKeyser - PP : Unknown Player - PK : John Carlson, Dan DeKeyser
<b>Penalty Shots</b>
Jamie Benn, Paul Stastny, James Van Riemsdyk, Gabriel Gagné, Joel Farabee
<b>Custom OT Lines Forwards</b>
Jamie Benn, Paul Stastny, James Van Riemsdyk, Gabriel Gagné, Joel Farabee, Brett Connolly, Kyle Palmieri, Lukas Sedlak, Alex Tuch, Maxime Comtois
<b>Custom OT Lines Defensemen</b>
John Carlson, Marc-Edouard Vlasic, Dan DeKeyser, Connor Murphy, Unknown Player

<b>Scratches</b>
Jack Evans (Bruised Right Leg Injury), Matthew Peca (Healthy), Dillon Fournier (Healthy), Shane Hanna (Healthy)</pre></div>
<h1 class="TeamLinesPro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Clayton Keller           Artturi Lehkonen         Timo Meier               32     1   2  2  
 2 Francis Perron           A.J. Greer               Warren Foegele           29     1   2  2  
 3 Brandon Sutter           Jacob Josefson           Matthew Nieto            29     1   2  2  
 4 Julien Nantel            Brock McGinn             Antoine Waked            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Luke Schenn              Jack Johnson                                      40     1   2  2  
 2 Keith Yandle             Chris Bigras                                      30     1   2  2  
 3 Frank Corrado            Ryan Pulock                                       30     1   2  2  
 4 Luke Schenn              Jack Johnson                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brandon Sutter           Timo Meier               Clayton Keller           60     1   2  2  
 2 Jacob Josefson           Matthew Nieto            Artturi Lehkonen         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Chris Bigras             Keith Yandle                                      60     1   2  2  
 2 Jack Johnson             Luke Schenn                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Sutter           A.J. Greer               60     1   2  2  
 2 Antoine Waked            Brock McGinn             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luke Schenn              Jack Johnson             60     1   2  2  
 2 Keith Yandle             Frank Corrado            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brandon Sutter                                    60     1   2  2  
 2 Matthew Nieto                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luke Schenn              Jack Johnson             60     1   2  2  
 2 Keith Yandle             Frank Corrado            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Francis Perron           A.J. Greer               60     1   2  2  
 2 Julien Nantel            Warren Foegele           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luke Schenn              Jack Johnson             60     1   2  2  
 2 Keith Yandle             Frank Corrado            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brandon Sutter           Timo Meier               Clayton Keller           Luke Schenn              Jack Johnson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brandon Sutter           Brock McGinn             Matthew Nieto            Luke Schenn              Jack Johnson             

<b>Goaltenders</b>
Starting : Jaroslav Halak           
Backup : Alex Nedeljkovic         

<b>Extra Forwards</b>
Normal : Artturi Lehkonen, A.J. Greer, Francis Perron - PP : Artturi Lehkonen, A.J. Greer - PK : Francis Perron
<b>Extra Defensemen</b>
Normal : Chris Bigras, Ryan Pulock, Keith Yandle - PP : Chris Bigras - PK : Ryan Pulock, Keith Yandle
<b>Penalty Shots</b>
Brandon Sutter, Timo Meier, Clayton Keller, Matthew Nieto, Jacob Josefson
<b>Custom OT Lines Forwards</b>
Brandon Sutter, Timo Meier, Clayton Keller, Matthew Nieto, Jacob Josefson, A.J. Greer, Francis Perron, Artturi Lehkonen, Warren Foegele, Julien Nantel
<b>Custom OT Lines Defensemen</b>
Luke Schenn, Jack Johnson, Keith Yandle, Frank Corrado, Chris Bigras

<b>Scratches</b>
Bruno-Carl Denis (Healthy), Maxime St-Cyr (Healthy)</pre></div>
<h1 class="TeamLinesPro_SEA"><a id="SeattleKraken">Seattle Kraken</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyson Jost               Anton Slepyshev          Jakub Voracek            33     0   1  4  
 2 Brayden Schenn           Max Pacioretty           Kasperi Kapanen          28     0   2  3  
 3 Jaedon Descheneau        Reid Boucher             Tyson Baillie            24     0   2  3  
 4 Austin Watson            Devante Smith-Pelly      Drake Caggiula           15     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Hanifin             Joe Morrow                                        35     0   1  4  
 2 Nikolai Knyzhov          Ryan Suter                                        33     0   3  2  
 3 Jake Dotchin             Samuel Morin                                      32     0   3  2  
 4 Nikolai Knyzhov          Joe Morrow                                        0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Schenn           Max Pacioretty           Jakub Voracek            60     0   0  5  
 2 Tyson Jost               Anton Slepyshev          Tyson Baillie            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Hanifin             Joe Morrow                                        60     0   0  5  
 2 Samuel Morin             Jake Dotchin                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Austin Watson            Devante Smith-Pelly      60     0   5  0  
 2 Jaedon Descheneau        Drake Caggiula           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Dotchin             Ryan Suter               60     0   5  0  
 2 Samuel Morin             Noah Hanifin             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Austin Watson                                     60     0   5  0  
 2 Tyson Baillie                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Dotchin             Ryan Suter               60     0   5  0  
 2 Nikolai Knyzhov          Samuel Morin             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaedon Descheneau        Reid Boucher             60     0   2  3  
 2 Austin Watson            Anton Slepyshev          40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikolai Knyzhov          Ryan Suter               60     0   3  2  
 2 Jake Dotchin             Joe Morrow               40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyson Jost               Jakub Voracek            Anton Slepyshev          Joe Morrow               Noah Hanifin             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Austin Watson            Devante Smith-Pelly      Tyson Baillie            Jake Dotchin             Ryan Suter               

<b>Goaltenders</b>
Starting : Juuse Saros              
Backup : Steve Mason              

<b>Extra Forwards</b>
Normal : Drake Caggiula, Devante Smith-Pelly, Jakub Voracek - PP : Brayden Schenn, Jaedon Descheneau - PK : Kasperi Kapanen
<b>Extra Defensemen</b>
Normal : Nikolai Knyzhov, Samuel Morin, Joe Morrow - PP : Noah Hanifin - PK : Ryan Suter, Jake Dotchin
<b>Penalty Shots</b>
Jakub Voracek, Max Pacioretty, Brayden Schenn, Anton Slepyshev, Tyson Baillie
<b>Custom OT Lines Forwards</b>
Tyson Jost, Anton Slepyshev, Brayden Schenn, Max Pacioretty, Jaedon Descheneau, Kasperi Kapanen, Tyson Baillie, Reid Boucher, Austin Watson, Devante Smith-Pelly
<b>Custom OT Lines Defensemen</b>
Noah Hanifin, Samuel Morin, Joe Morrow, Jake Dotchin, Nikolai Knyzhov

<b>Scratches</b>
Mattias Janmark-Nylen (Healthy), Matthew Finn (Healthy)</pre></div>
<h1 class="TeamLinesPro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Radek Faksa              Morgan Klimchuk          Curtis Lazar             30     3   2  0  
 2 Nazem Kadri              Artemi Panarin           Valeri Nichushkin        29     0   2  3  
 3 Theodor Blueger          Valentin Zykov           Mark Stone               27     0   1  4  
 4 Frans Nielsen            Tanner Pearson           John Hayden              14     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dillon Heatherington     Jamie Oleksiak                                    36     0   3  2  
 2 Niklas Hjalmarsson       Brady Skjei                                       35     0   2  3  
 3 Andreas Borgman          Keith Aulie                                       29     0   2  3  
 4 Keith Aulie              Dillon Heatherington                              0      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nazem Kadri              Artemi Panarin           Mark Stone               54     0   0  5  
 2 Radek Faksa              Morgan Klimchuk          Valeri Nichushkin        46     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brady Skjei              Dillon Heatherington                              51     0   0  5  
 2 Andreas Borgman          Niklas Hjalmarsson                                49     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Frans Nielsen            Tanner Pearson           52     0   5  0  
 2 Radek Faksa              Curtis Lazar             48     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jamie Oleksiak           Keith Aulie              53     0   5  0  
 2 Dillon Heatherington     Brady Skjei              47     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Frans Nielsen                                     54     0   5  0  
 2 Radek Faksa                                       46     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jamie Oleksiak           Keith Aulie              54     0   5  0  
 2 Dillon Heatherington     Andreas Borgman          46     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Curtis Lazar             Morgan Klimchuk          54     0   3  2  
 2 Nazem Kadri              Valeri Nichushkin        46     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jamie Oleksiak           Dillon Heatherington     54     0   3  2  
 2 Brady Skjei              Andreas Borgman          46     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nazem Kadri              Valeri Nichushkin        Mark Stone               Brady Skjei              Dillon Heatherington     

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Radek Faksa              Tanner Pearson           Curtis Lazar             Brady Skjei              Jamie Oleksiak           

<b>Goaltenders</b>
Starting : Ivan Nalimov             
Backup : Ondrej Pavelec           

<b>Extra Forwards</b>
Normal : Tanner Pearson, Frans Nielsen, John Hayden - PP : John Hayden, Morgan Klimchuk - PK : Morgan Klimchuk
<b>Extra Defensemen</b>
Normal : Niklas Hjalmarsson, Dillon Heatherington, Brady Skjei - PP : Jamie Oleksiak - PK : Andreas Borgman, Niklas Hjalmarsson
<b>Penalty Shots</b>
Morgan Klimchuk, Nazem Kadri, Mark Stone, Valeri Nichushkin, Artemi Panarin
<b>Custom OT Lines Forwards</b>
Valeri Nichushkin, Curtis Lazar, Mark Stone, Tanner Pearson, Morgan Klimchuk, Nazem Kadri, Radek Faksa, Theodor Blueger, Artemi Panarin, Valentin Zykov
<b>Custom OT Lines Defensemen</b>
Andreas Borgman, Brady Skjei, Dillon Heatherington, Jamie Oleksiak, Niklas Hjalmarsson

<b>Scratches</b>
Nikita Tryamkin (Healthy), Nikita Soshnikov (Healthy), Ian McCoshen (Healthy)</pre></div>
<h1 class="TeamLinesPro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Seguin             Evander Kane             Émile Poirier            32     0   5  0  
 2 Alexander Wennberg       Boone Jenner             Elias Lindholm           32     0   1  4  
 3 Josh Ho-Sang             Bryan Rust               Andreas Athanasiou       28     0   2  3  
 4 Eric Staal               Patrice Cormier          Marcus Kruger            8      1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Esa Lindell              P.K. Subban                                       34     1   3  1  
 2 Nikita Zadorov           Quinn Hughes                                      33     0   4  1  
 3 Miro Heiskanen           Simon Despres                                     33     0   4  1  
 4 Miro Heiskanen           Quinn Hughes                                      0      0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Seguin             Émile Poirier            Elias Lindholm           60     0   0  5  
 2 Alexander Wennberg       Boone Jenner             Josh Ho-Sang             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 P.K. Subban              Quinn Hughes                                      60     0   0  5  
 2 Esa Lindell              Miro Heiskanen                                    40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrice Cormier          Evander Kane             60     0   5  0  
 2 Boone Jenner             Bryan Rust               40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zadorov           Simon Despres            60     0   5  0  
 2 Esa Lindell              P.K. Subban              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Evander Kane                                      60     0   5  0  
 2 Boone Jenner                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zadorov           Simon Despres            60     0   5  0  
 2 Esa Lindell              P.K. Subban              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexander Wennberg       Émile Poirier            60     0   0  5  
 2 Tyler Seguin             Elias Lindholm           40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Quinn Hughes             P.K. Subban              60     0   0  5  
 2 Esa Lindell              Miro Heiskanen           40     0   0  5  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Seguin             Émile Poirier            Elias Lindholm           Quinn Hughes             Miro Heiskanen           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexander Wennberg       Evander Kane             Boone Jenner             Nikita Zadorov           Esa Lindell              

<b>Goaltenders</b>
Starting : Malcolm Subban           
Backup : Ken Appleby              

<b>Extra Forwards</b>
Normal : Alexander Wennberg, Marcus Kruger, Eric Staal - PP : Alexander Wennberg, Marcus Kruger - PK : Marcus Kruger
<b>Extra Defensemen</b>
Normal : Quinn Hughes, Miro Heiskanen, Esa Lindell - PP : Nikita Zadorov - PK : Miro Heiskanen, Esa Lindell
<b>Penalty Shots</b>
Émile Poirier, Tyler Seguin, Evander Kane, Josh Ho-Sang, Eric Staal
<b>Custom OT Lines Forwards</b>
Tyler Seguin, Evander Kane, Boone Jenner, Elias Lindholm, Josh Ho-Sang, Alexander Wennberg, Émile Poirier, Andreas Athanasiou, Eric Staal, Marcus Kruger
<b>Custom OT Lines Defensemen</b>
P.K. Subban, Esa Lindell, Quinn Hughes, Nikita Zadorov, Miro Heiskanen

<b>Scratches</b>
Tyler Toffoli (Healthy), Pavel Padakin (Healthy), Tucker Poolman (Healthy)</pre></div>
<h1 class="TeamLinesPro_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikael Granlund          Sebastian Aho            Mikko Rantanen           40     0   1  4  
 2 Adam Henrique            Saku Maenalanen          Teemu Pulkkinen          30     0   1  4  
 3 Mike Richards            Emerson Etem             Louis Leblanc            20     2   3  0  
 4 Mikko Koivu              Zack Kassian             Joel Armia               10     2   3  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Morgan Rielly            Ville Pokka                                       42     0   2  3  
 2 T.J. Brennan             Petteri Lindbohm                                  30     1   2  2  
 3 Samuel Girard            Mikko Lehtonen                                    28     1   2  2  
 4 Morgan Rielly            Ville Pokka                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikael Granlund          Saku Maenalanen          Mikko Rantanen           60     0   0  5  
 2 Adam Henrique            Sebastian Aho            Emerson Etem             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 T.J. Brennan             Morgan Rielly                                     60     0   1  4  
 2 Ville Pokka              Samuel Girard                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mike Richards            Zack Kassian             60     1   4  0  
 2 Mikko Koivu              Louis Leblanc            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Petteri Lindbohm         Mikko Lehtonen           60     0   5  0  
 2 Morgan Rielly            Ville Pokka              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mike Richards                                     60     0   5  0  
 2 Louis Leblanc                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Petteri Lindbohm         Mikko Lehtonen           60     0   5  0  
 2 Morgan Rielly            Ville Pokka              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mikael Granlund          Sebastian Aho            60     0   1  4  
 2 Adam Henrique            Mikko Rantanen           40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Morgan Rielly            Ville Pokka              60     0   2  3  
 2 T.J. Brennan             Samuel Girard            40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikael Granlund          Sebastian Aho            Mikko Rantanen           Morgan Rielly            T.J. Brennan             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mike Richards            Zack Kassian             Louis Leblanc            Petteri Lindbohm         Morgan Rielly            

<b>Goaltenders</b>
Starting : Mikko Koskinen           
Backup : Anthony Stolarz          

<b>Extra Forwards</b>
Normal : Sebastian Aho, Adam Henrique, Mike Richards - PP : Mike Richards, Teemu Pulkkinen - PK : Zack Kassian
<b>Extra Defensemen</b>
Normal : Mikko Lehtonen, Ville Pokka, Samuel Girard - PP : Ville Pokka - PK : T.J. Brennan, Petteri Lindbohm
<b>Penalty Shots</b>
Adam Henrique, Mikael Granlund, Mikko Rantanen, Teemu Pulkkinen, Sebastian Aho
<b>Custom OT Lines Forwards</b>
Mikael Granlund, Sebastian Aho, Mikko Rantanen, Adam Henrique, Emerson Etem, Saku Maenalanen, Teemu Pulkkinen, Mike Richards, Louis Leblanc, Joel Armia
<b>Custom OT Lines Defensemen</b>
Morgan Rielly, Ville Pokka, T.J. Brennan, Petteri Lindbohm, Samuel Girard

<b>Scratches</b>
Jyrki Jokipakka (Healthy)</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Zemgus Girgensons        Filip Zadina             Matthew Tkachuk          30     0   3  2  
 2 Connor McDavid           Nikolaj Ehlers           Kaapo Kakko              30     0   2  3  
 3 Derek Stepan             Ahti Oksanen             Loui Eriksson            30     0   3  2  
 4 Stefan Matteau           Quinton Howden           Matthew Tkachuk          10     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Jason Demers                                      25     0   3  2  
 2 Rasmus Ristolainen       Matt Grzelcyk                                     25     0   3  2  
 3 Jordan Oesterle          Erik Cernak                                       25     0   4  1  
 4 Matt Grzelcyk            Dougie Hamilton                                   25     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Nikolaj Ehlers           Matthew Tkachuk          56     0   0  5  
 2 Derek Stepan             Zemgus Girgensons        Filip Zadina             44     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Rasmus Ristolainen                                54     0   1  4  
 2 Ahti Oksanen             Jordan Oesterle                                   46     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Zemgus Girgensons        Ahti Oksanen             60     1   2  2  
 2 Quinton Howden           Stefan Matteau           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          Rasmus Ristolainen       60     1   2  2  
 2 Jason Demers             Erik Cernak              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Stefan Matteau                                    60     1   2  2  
 2 Zemgus Girgensons                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          Rasmus Ristolainen       60     1   2  2  
 2 Jason Demers             Jordan Oesterle          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor McDavid           Nikolaj Ehlers           60     0   1  4  
 2 Derek Stepan             Matthew Tkachuk          40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          Rasmus Ristolainen       60     0   2  3  
 2 Jason Demers             Jordan Oesterle          40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Nikolaj Ehlers           Matthew Tkachuk          Dougie Hamilton          Rasmus Ristolainen       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Zemgus Girgensons        Matthew Tkachuk          Dougie Hamilton          Rasmus Ristolainen       

<b>Goaltenders</b>
Starting : Chris Driedger           
Backup : Vitek Vanecek            

<b>Extra Forwards</b>
Normal : Connor McDavid, Nikolaj Ehlers, Matthew Tkachuk - PP : Connor McDavid, Filip Zadina - PK : Zemgus Girgensons
<b>Extra Defensemen</b>
Normal : Rasmus Ristolainen, Dougie Hamilton, Jason Demers - PP : Rasmus Ristolainen - PK : Dougie Hamilton, Rasmus Ristolainen
<b>Penalty Shots</b>
Connor McDavid, Nikolaj Ehlers, Matthew Tkachuk, Derek Stepan, Zemgus Girgensons
<b>Custom OT Lines Forwards</b>
Connor McDavid, Nikolaj Ehlers, Matthew Tkachuk, Derek Stepan, Zemgus Girgensons, Stefan Matteau, Ahti Oksanen, Loui Eriksson, Filip Zadina, Kaapo Kakko
<b>Custom OT Lines Defensemen</b>
Dougie Hamilton, Rasmus Ristolainen, Jason Demers, Jordan Oesterle, Ahti Oksanen

<b>Scratches</b>
Tobias Enstrom (Healthy)</pre></div>
<h1 class="TeamLinesPro_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Couture            Alexander Burmistrov     Patrik Laine             36     0   2  3  
 2 Mika Zibanejad           Tim Stützle              Patrick Kane             32     0   2  3  
 3 Kevin Rooney             Tomas Nosek              Sergey Tolchinsky        24     0   3  2  
 4 Casey Cizikas            Michael Bunting          Myles Bell               8      0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Schultz           Darnell Nurse                                     38     0   3  2  
 2 Kris Letang              Brandon Gormley                                   32     0   2  3  
 3 Xavier Ouellet           Darren Dietz                                      24     0   2  3  
 4 Kris Letang              Brandon Gormley                                   6      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Couture            Alexander Burmistrov     Patrik Laine             60     0   0  5  
 2 Mika Zibanejad           Tim Stützle              Patrick Kane             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Schultz           Darnell Nurse                                     60     0   1  4  
 2 Kris Letang              Brandon Gormley                                   40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tomas Nosek              Myles Bell               60     0   4  1  
 2 Kevin Rooney             Michael Bunting          40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Xavier Ouellet           Brandon Gormley          60     0   5  0  
 2 Darren Dietz             Darnell Nurse            40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tomas Nosek                                       60     0   5  0  
 2 Kevin Rooney                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Xavier Ouellet           Brandon Gormley          60     0   4  1  
 2 Darren Dietz             Darnell Nurse            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Logan Couture            Patrik Laine             60     0   2  3  
 2 Mika Zibanejad           Patrick Kane             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Schultz           Darnell Nurse            60     0   2  3  
 2 Kris Letang              Brandon Gormley          40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Couture            Alexander Burmistrov     Patrik Laine             Justin Schultz           Darnell Nurse            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Couture            Alexander Burmistrov     Patrik Laine             Kris Letang              Brandon Gormley          

<b>Goaltenders</b>
Starting : Matt Murray              
Backup : Daniel Vladar            

<b>Extra Forwards</b>
Normal : Patrik Laine, Mika Zibanejad, Logan Couture - PP : Patrik Laine, Logan Couture - PK : Tomas Nosek
<b>Extra Defensemen</b>
Normal : Kris Letang, Darnell Nurse, Justin Schultz - PP : Kris Letang - PK : Darnell Nurse, Brandon Gormley
<b>Penalty Shots</b>
Patrick Kane, Logan Couture, Patrik Laine, Mika Zibanejad, Alexander Burmistrov
<b>Custom OT Lines Forwards</b>
Patrik Laine, Logan Couture, Mika Zibanejad, Alexander Burmistrov, Tomas Nosek, Patrick Kane, Tim Stützle, Michael Bunting, Sergey Tolchinsky, Kevin Rooney
<b>Custom OT Lines Defensemen</b>
Kris Letang, Darnell Nurse, Justin Schultz, Brandon Gormley, Xavier Ouellet

<b>Scratches</b>
Victor Antipin (Healthy), Mike Amadio (Healthy)</pre></div>
<h1 class="TeamLinesPro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Dal Colle        Nino Niederreiter        Alex DeBrincat           25     1   2  2  
 2 Vladislav Namestnikov    Dominik Kahun            Phil Kessel              25     1   2  2  
 3 Mike Hoffman             Nick Ritchie             Kirill Kaprizov          25     1   2  2  
 4 Andrew Mangiapane        Samuel Blais             Oliver Wahlstrom         25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jared Cowen              Ryan Ellis                                        25     1   2  2  
 2 Jaccob Slavin            Mikhail Sergachev                                 25     1   2  2  
 3 Alex Goligoski           Jonathon Merrill                                  25     1   2  2  
 4 Jared Cowen              Ryan Ellis                                        25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Dal Colle        Nino Niederreiter        Alex DeBrincat           60     1   2  2  
 2 Vladislav Namestnikov    Dominik Kahun            Phil Kessel              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jared Cowen              Ryan Ellis                                        60     1   2  2  
 2 Jaccob Slavin            Mikhail Sergachev                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nino Niederreiter        Alex DeBrincat           60     1   2  2  
 2 Phil Kessel              Michael Dal Colle        40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jared Cowen              Ryan Ellis               60     1   2  2  
 2 Jaccob Slavin            Mikhail Sergachev        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nino Niederreiter                                 60     1   2  2  
 2 Alex DeBrincat                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jared Cowen              Ryan Ellis               60     1   2  2  
 2 Jaccob Slavin            Mikhail Sergachev        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nino Niederreiter        Alex DeBrincat           60     1   2  2  
 2 Phil Kessel              Michael Dal Colle        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jared Cowen              Ryan Ellis               60     1   2  2  
 2 Jaccob Slavin            Mikhail Sergachev        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Dal Colle        Nino Niederreiter        Alex DeBrincat           Jared Cowen              Ryan Ellis               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Dal Colle        Nino Niederreiter        Alex DeBrincat           Jared Cowen              Ryan Ellis               

<b>Goaltenders</b>
Starting : Josh Harding             
Backup : Simeon Varlamov          

<b>Extra Forwards</b>
Normal : Nick Ritchie, Kirill Kaprizov, Mike Hoffman - PP : Nick Ritchie, Kirill Kaprizov - PK : Mike Hoffman
<b>Extra Defensemen</b>
Normal : Alex Goligoski, Jonathon Merrill, Jaccob Slavin - PP : Alex Goligoski - PK : Jonathon Merrill, Jaccob Slavin
<b>Penalty Shots</b>
Nino Niederreiter, Alex DeBrincat, Phil Kessel, Michael Dal Colle, Vladislav Namestnikov
<b>Custom OT Lines Forwards</b>
Nino Niederreiter, Alex DeBrincat, Phil Kessel, Michael Dal Colle, Vladislav Namestnikov, Dominik Kahun, Nick Ritchie, Kirill Kaprizov, Mike Hoffman, Andrew Mangiapane
<b>Custom OT Lines Defensemen</b>
Jared Cowen, Ryan Ellis, Jaccob Slavin, Mikhail Sergachev, Alex Goligoski

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Gabriel Landeskog        Blake Wheeler            32     0   0  5  
 2 Tyler Johnson            Anders Lee               Nikita Scherbak          32     0   1  4  
 3 Bryan Little             Cole Ully                Rocco Grimaldi           26     0   2  3  
 4 Andrew Copp              Milan Lucic              Jordan Caron             10     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Dmitri Kulikov                                    36     0   3  2  
 2 Sami Vatanen             Calvin de Haan                                    34     0   4  1  
 3 Ryan Graves              Jordan Schmaltz                                   30     0   4  1  
 4 Victor Hedman            Dmitri Kulikov                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Gabriel Landeskog        Blake Wheeler            55     0   0  5  
 2 Bryan Little             Cole Ully                Tyler Johnson            45     0   5  0  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Anders Lee                                        60     0   1  4  
 2 Dmitri Kulikov           Rocco Grimaldi                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrew Copp              Gabriel Landeskog        60     0   5  0  
 2 Bryan Little             Cole Ully                40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Calvin de Haan           60     0   5  0  
 2 Dmitri Kulikov           Ryan Graves              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Andrew Copp                                       60     0   5  0  
 2 Bryan Little                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Calvin de Haan           60     0   5  0  
 2 Dmitri Kulikov           Ryan Graves              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Auston Matthews          Gabriel Landeskog        55     0   1  4  
 2 Bryan Little             Blake Wheeler            45     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Dmitri Kulikov           60     0   3  2  
 2 Sami Vatanen             Calvin de Haan           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Auston Matthews          Gabriel Landeskog        Blake Wheeler            Victor Hedman            Dmitri Kulikov           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Copp              Cole Ully                Bryan Little             Victor Hedman            Dmitri Kulikov           

<b>Goaltenders</b>
Starting : Carey Price              
Backup : Mark Visentin            

<b>Extra Forwards</b>
Normal : Cole Ully, Auston Matthews, Blake Wheeler - PP : Cole Ully, Auston Matthews - PK : Andrew Copp
<b>Extra Defensemen</b>
Normal : Ryan Graves, Jordan Schmaltz, Victor Hedman - PP : Ryan Graves - PK : Jordan Schmaltz, Victor Hedman
<b>Penalty Shots</b>
Auston Matthews, Blake Wheeler, Bryan Little, Gabriel Landeskog, Tyler Johnson
<b>Custom OT Lines Forwards</b>
Auston Matthews, Gabriel Landeskog, Andrew Copp, Jordan Caron, Bryan Little, Blake Wheeler, Milan Lucic, Nikita Scherbak, Cole Ully, Rocco Grimaldi
<b>Custom OT Lines Defensemen</b>
Victor Hedman, Jordan Schmaltz, Dmitri Kulikov, Calvin de Haan, Ryan Graves

<b>Scratches</b>
None
</pre></div>
<?php include "Footer.php";?>
