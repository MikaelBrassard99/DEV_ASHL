<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Pro Team Lines</title>
<script src="ASHL8-PRE.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL8-PRE.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL8-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL8-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleSaints">Seattle Saints</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matt Duchene             Bobby Ryan               David Pastrnak           36     0   1  4  
 2 Evgeni Malkin            Gabriel Landeskog        Brock Boeser             34     0   2  3  
 3 Mike Richards            Matthew Tkachuk          Mitch Marner             23     0   2  3  
 4 Stephen Weiss            Trevor Lewis             Brad Boyes               7      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Justin Schultz                                    40     0   2  3  
 2 Erik Johnson             Brandon Montour                                   38     0   2  3  
 3 Jamie Oleksiak           David Rundblad                                    22     0   3  2  
 4 Cam Fowler               Jamie Oleksiak                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matt Duchene             Brock Boeser             David Pastrnak           57     0   0  5  
 2 Evgeni Malkin            Gabriel Landeskog        Bobby Ryan               43     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Justin Schultz                                    55     0   0  5  
 2 Brandon Montour          Erik Johnson                                      45     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mike Richards            Gabriel Landeskog        55     1   3  1  
 2 Stephen Weiss            Bobby Ryan               45     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Johnson             Jamie Oleksiak           57     1   4  0  
 2 Brandon Montour          Cam Fowler               43     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mike Richards                                     60     0   5  0  
 2 Stephen Weiss                                     40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Johnson             Jamie Oleksiak           60     1   4  0  
 2 Brandon Montour          Cam Fowler               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Matt Duchene             Bobby Ryan               60     0   1  4  
 2 Mike Richards            Evgeni Malkin            40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Erik Johnson             55     0   2  3  
 2 Brandon Montour          Justin Schultz           45     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Matt Duchene             David Pastrnak           Evgeni Malkin            Cam Fowler               Justin Schultz           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mike Richards            Gabriel Landeskog        Bobby Ryan               Erik Johnson             Cam Fowler               

<b>Goaltenders</b>
Starting : Ilya Bryzgalov           
Backup : Scott Darling            

<b>Extra Forwards</b>
Normal : Mitch Marner, Matt Duchene, Evgeni Malkin - PP : David Pastrnak, Matt Duchene - PK : Mike Richards
<b>Extra Defensemen</b>
Normal : Erik Johnson, Cam Fowler, Justin Schultz - PP : Cam Fowler - PK : Erik Johnson, Jamie Oleksiak
<b>Penalty Shots</b>
Evgeni Malkin, Matt Duchene, David Pastrnak, Bobby Ryan, Mitch Marner
<b>Custom OT Lines Forwards</b>
Matt Duchene, David Pastrnak, Evgeni Malkin, Gabriel Landeskog, Bobby Ryan, Brock Boeser, Mitch Marner, Matthew Tkachuk, Mike Richards, Trevor Lewis
<b>Custom OT Lines Defensemen</b>
Cam Fowler, Justin Schultz, Erik Johnson, Brandon Montour, David Rundblad

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Bo Horvat                Alex DeBrincat           32     0   1  4  
 2 Jordan Staal             John Gaudreau            Logan Couture            27     0   1  4  
 3 Cole Cassels             Cole Ully                Oliver Bjorkstrand       23     0   2  3  
 4 Lukas Sedlak             Alex Iafallo             Nikita Jevpalovs         18     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Hamonic           Hampus Lindholm                                   37     0   4  1  
 2 Zach Bogosian            Matt Benning                                      35     0   4  1  
 3 Jake Dotchin             Travis Sanheim                                    23     1   4  0  
 4 Travis Hamonic           Zach Bogosian                                     5      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Couture            John Tavares             Jordan Staal             55     0   0  5  
 2 Lukas Sedlak             Oliver Bjorkstrand       John Gaudreau            45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Hamonic           Zach Bogosian                                     70     0   1  4  
 2 Jake Dotchin             Matt Benning                                      30     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Staal             John Tavares             70     1   4  0  
 2 Logan Couture            Lukas Sedlak             30     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zach Bogosian            Hampus Lindholm          70     1   4  0  
 2 Matt Benning             Travis Hamonic           30     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Oliver Bjorkstrand                                60     1   4  0  
 2 Logan Couture                                     40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Matt Benning             60     1   4  0  
 2 Hampus Lindholm          Zach Bogosian            40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Logan Couture            Jordan Staal             60     0   2  3  
 2 Oliver Bjorkstrand       John Tavares             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Benning             Travis Hamonic           60     1   3  1  
 2 Zach Bogosian            Jake Dotchin             40     1   4  0  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Couture            John Tavares             Jordan Staal             Travis Hamonic           Zach Bogosian            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Couture            John Tavares             Jordan Staal             Travis Hamonic           Zach Bogosian            

<b>Goaltenders</b>
Starting : Mark Visentin            
Backup : Craig Anderson           

<b>Extra Forwards</b>
Normal : Logan Couture, Bo Horvat, John Gaudreau - PP : Oliver Bjorkstrand, Alex DeBrincat - PK : Jordan Staal
<b>Extra Defensemen</b>
Normal : Matt Benning, Jake Dotchin, Travis Hamonic - PP : Matt Benning - PK : Matt Benning, Hampus Lindholm
<b>Penalty Shots</b>
Logan Couture, Bo Horvat, John Gaudreau, Oliver Bjorkstrand, Alex DeBrincat
<b>Custom OT Lines Forwards</b>
Jordan Staal, Logan Couture, John Gaudreau, Bo Horvat, Alex DeBrincat, Cole Cassels, Nikita Jevpalovs, Oliver Bjorkstrand, John Tavares, Lukas Sedlak
<b>Custom OT Lines Defensemen</b>
Jake Dotchin, Travis Sanheim, Travis Hamonic, Matt Benning, Zach Bogosian

<b>Scratches</b>
Jyrki Jokipakka (Healthy), Joseph Blandisi (Healthy), Rihards Bukarts (Healthy)</pre></div>
<h1 class="TeamLinesPro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Ryan Donato              William Nylander         27     1   1  3  
 2 Rasmus Asplund           Brad Marchand            Josh Bailey              26     1   2  2  
 3 Nico Hischier            Marko Dano               Joe Pavelski             24     1   3  1  
 4 Frédérik Gauthier        Jonathan Drouin          Josh Anderson            23     1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Charles McAvoy           John Carlson                                      45     1   2  2  
 2 Marco Scandella          Derrick Pouliot                                   35     1   2  2  
 3 Andrej Sustr             Thomas Hickey                                     20     1   2  2  
 4 Charles McAvoy           John Carlson                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Ryan Donato              William Nylander         60     1   1  3  
 2 Rasmus Asplund           Jonathan Drouin          Brad Marchand            40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Charles McAvoy           Derrick Pouliot                                   70     1   1  3  
 2 John Carlson             Marco Scandella                                   30     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrice Bergeron         Brad Marchand            60     1   2  2  
 2 Frédérik Gauthier        Josh Bailey              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Carlson             Andrej Sustr             60     1   2  2  
 2 Marco Scandella          Derrick Pouliot          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Patrice Bergeron                                  50     1   3  1  
 2 Josh Bailey                                       50     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Carlson             Andrej Sustr             60     1   3  1  
 2 Marco Scandella          Charles McAvoy           40     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nico Hischier            Ryan Donato              60     1   2  2  
 2 Rasmus Asplund           William Nylander         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Carlson             Marco Scandella          50     1   2  2  
 2 Charles McAvoy           Derrick Pouliot          50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nico Hischier            Jonathan Drouin          William Nylander         Charles McAvoy           John Carlson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Bergeron         Brad Marchand            Josh Bailey              John Carlson             Marco Scandella          

<b>Goaltenders</b>
Starting : Igor Shestyorkin         
Backup : Josh Harding             

<b>Extra Forwards</b>
Normal : Jonathan Drouin, Joe Pavelski, Brad Marchand - PP : Josh Anderson, Josh Bailey - PK : Josh Anderson
<b>Extra Defensemen</b>
Normal : Charles McAvoy, Thomas Hickey, Andrej Sustr - PP : Charles McAvoy - PK : Charles McAvoy, Thomas Hickey
<b>Penalty Shots</b>
Jonathan Drouin, Brad Marchand, William Nylander, Nico Hischier, Ryan Donato
<b>Custom OT Lines Forwards</b>
Patrice Bergeron, Brad Marchand, Nico Hischier, William Nylander, Ryan Donato, Jonathan Drouin, Marko Dano, Josh Bailey, Frédérik Gauthier, Joe Pavelski
<b>Custom OT Lines Defensemen</b>
Charles McAvoy, John Carlson, Marco Scandella, Derrick Pouliot, Andrej Sustr

<b>Scratches</b>
Robert Bortuzzo (Healthy), Frank Vatrano (Healthy), Mike Hoffman (Healthy)</pre></div>
<h1 class="TeamLinesPro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Adam Henrique            Brayden Schenn           Kyle Turris              31     0   2  3  
 2 Ryan Johansen            Conor Sheary             Kyle Okposo              31     0   2  3  
 3 Craig Smith              Michael Sgarbossa        Andreas Athanasiou       25     1   2  2  
 4 Maxwell Reinhart         Scott Laughton           Andreas Athanasiou       13     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyler Myers              Victor Hedman                                     34     1   2  2  
 2 Mark Giordano            David Savard                                      34     1   2  2  
 3 Colin Miller             Julius Honka                                      22     1   2  2  
 4 Tim Gleason              Julius Honka                                      10     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Adam Henrique            Brayden Schenn           Andreas Athanasiou       50     0   1  4  
 2 Ryan Johansen            Conor Sheary             Kyle Okposo              50     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Tyler Myers                                       50     1   2  2  
 2 Julius Honka             Mark Giordano                                     50     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Johansen            Maxwell Reinhart         50     1   3  1  
 2 Adam Henrique            Brayden Schenn           50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            David Savard             50     1   3  1  
 2 Colin Miller             Tyler Myers              50     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Adam Henrique                                     50     1   4  0  
 2 Ryan Johansen                                     50     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            David Savard             50     1   3  1  
 2 Colin Miller             Tyler Myers              50     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Adam Henrique            Conor Sheary             50     1   2  2  
 2 Ryan Johansen            Brayden Schenn           50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Mark Giordano            50     1   2  2  
 2 David Savard             Tyler Myers              50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Johansen            Adam Henrique            Brayden Schenn           Victor Hedman            Tyler Myers              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Adam Henrique            Kyle Okposo              Kyle Turris              Tyler Myers              Victor Hedman            

<b>Goaltenders</b>
Starting : Frederik Andersen        
Backup : Ryan Miller              

<b>Extra Forwards</b>
Normal : Adam Henrique, Andreas Athanasiou, Brayden Schenn - PP : Andreas Athanasiou, Adam Henrique - PK : Adam Henrique
<b>Extra Defensemen</b>
Normal : Tyler Myers, Victor Hedman, Tim Gleason - PP : Tyler Myers - PK : Tim Gleason, Tyler Myers
<b>Penalty Shots</b>
Adam Henrique, Ryan Johansen, Brayden Schenn, Kyle Okposo, Conor Sheary
<b>Custom OT Lines Forwards</b>
Adam Henrique, Conor Sheary, Brayden Schenn, Ryan Johansen, Kyle Okposo, Kyle Turris, Andreas Athanasiou, Michael Sgarbossa, Scott Laughton, Maxwell Reinhart
<b>Custom OT Lines Defensemen</b>
Tyler Myers, Victor Hedman, David Savard, Julius Honka, Tim Gleason

<b>Scratches</b>
Matthew Corrente (Healthy), James Sheppard (Healthy)</pre></div>
<h1 class="TeamLinesPro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Teuvo Teravainen         Antoine Vermette         Kyle Palmieri            25     1   2  2  
 2 Chris Tierney            Brett Connolly           Tomas Hertl              25     1   2  2  
 3 Frans Nielsen            Ondrej Palat             Pierre-Luc Dubois        25     1   2  2  
 4 Colin Smith              Ryan MacInnis            Josh Ho-Sang             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Karl Alzner              Oliver Ekman-Larsson                              25     1   2  2  
 2 Jonathon Blum            Tyler Wotherspoon                                 25     1   2  2  
 3 Matthew Finn             Jacob Larsson                                     25     1   2  2  
 4 Karl Alzner              Oliver Ekman-Larsson                              25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Teuvo Teravainen         Pierre-Luc Dubois        Kyle Palmieri            60     1   2  2  
 2 Chris Tierney            Brett Connolly           Tomas Hertl              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Karl Alzner              Oliver Ekman-Larsson                              60     1   2  2  
 2 Jonathon Blum            Tyler Wotherspoon                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Tierney            Ryan MacInnis            60     1   2  2  
 2 Antoine Vermette         Pierre-Luc Dubois        40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Karl Alzner              Oliver Ekman-Larsson     60     1   2  2  
 2 Jonathon Blum            Tyler Wotherspoon        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Teuvo Teravainen                                  60     1   2  2  
 2 Chris Tierney                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Karl Alzner              Oliver Ekman-Larsson     60     1   2  2  
 2 Jonathon Blum            Tyler Wotherspoon        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Teuvo Teravainen         Chris Tierney            60     1   2  2  
 2 Antoine Vermette         Kyle Palmieri            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Karl Alzner              Oliver Ekman-Larsson     60     1   2  2  
 2 Jonathon Blum            Tyler Wotherspoon        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Teuvo Teravainen         Antoine Vermette         Kyle Palmieri            Karl Alzner              Oliver Ekman-Larsson     

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Teuvo Teravainen         Antoine Vermette         Kyle Palmieri            Karl Alzner              Oliver Ekman-Larsson     

<b>Goaltenders</b>
Starting : Simeon Varlamov          
Backup : Jack Lafontaine          

<b>Extra Forwards</b>
Normal : Ryan MacInnis, Colin Smith, Ondrej Palat - PP : Josh Ho-Sang, Colin Smith - PK : Frans Nielsen
<b>Extra Defensemen</b>
Normal : Matthew Finn, Jacob Larsson, Jonathon Blum - PP : Matthew Finn - PK : Jacob Larsson, Jonathon Blum
<b>Penalty Shots</b>
Teuvo Teravainen, Chris Tierney, Antoine Vermette, Kyle Palmieri, Frans Nielsen
<b>Custom OT Lines Forwards</b>
Teuvo Teravainen, Chris Tierney, Antoine Vermette, Kyle Palmieri, Frans Nielsen, Brett Connolly, Colin Smith, Ondrej Palat, Tomas Hertl, Pierre-Luc Dubois
<b>Custom OT Lines Defensemen</b>
Karl Alzner, Oliver Ekman-Larsson, Jonathon Blum, Tyler Wotherspoon, Matthew Finn

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Quinton Howden           Milan Lucic              Blake Wheeler            27     1   2  2  
 2 Mattias Janmark-Nylen    Reilly Smith             Jonathan Audy-Marchessaul27     1   1  3  
 3 Martin Hanzal            Marian Gaborik           Brandon Pirri            26     1   1  3  
 4 Marcel Noebels           Valtteri Filppula        Cal Clutterbuck          20     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Marc Methot                                       38     1   2  2  
 2 Keaton Ellerby           Marc-Andre Gragnani                               33     1   2  2  
 3 Carl Gunnarsson          Nick Petrecki                                     29     1   2  2  
 4 Marc-Edouard Vlasic      Marc Methot                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Quinton Howden           Milan Lucic              Blake Wheeler            60     1   1  3  
 2 Mattias Janmark-Nylen    Reilly Smith             Jonathan Audy-Marchessaul40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Marc Methot                                       60     1   2  2  
 2 Keaton Ellerby           Marc-Andre Gragnani                               40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Milan Lucic              Blake Wheeler            60     1   3  1  
 2 Martin Hanzal            Quinton Howden           40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Marc Methot              60     1   3  1  
 2 Keaton Ellerby           Marc-Andre Gragnani      40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Quinton Howden                                    60     0   5  0  
 2 Marcel Noebels                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Marc Methot              60     0   5  0  
 2 Keaton Ellerby           Marc-Andre Gragnani      40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Milan Lucic              Blake Wheeler            60     1   2  2  
 2 Martin Hanzal            Reilly Smith             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Marc Methot              60     1   2  2  
 2 Keaton Ellerby           Marc-Andre Gragnani      40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Blake Wheeler            Milan Lucic              Jonathan Audy-MarchessaulMarc-Edouard Vlasic      Marc Methot              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Blake Wheeler            Milan Lucic              Jonathan Audy-MarchessaulMarc-Edouard Vlasic      Marc Methot              

<b>Goaltenders</b>
Starting : Antti Niemi              
Backup : Ben Scrivens             

<b>Extra Forwards</b>
Normal : Mattias Janmark-Nylen, Marian Gaborik, Blake Wheeler - PP : Marian Gaborik, Brandon Pirri - PK : Marcel Noebels
<b>Extra Defensemen</b>
Normal : Carl Gunnarsson, Marc-Edouard Vlasic, Keaton Ellerby - PP : Carl Gunnarsson - PK : Carl Gunnarsson, Keaton Ellerby
<b>Penalty Shots</b>
Milan Lucic, Blake Wheeler, Marian Gaborik, Mattias Janmark-Nylen, Reilly Smith
<b>Custom OT Lines Forwards</b>
Milan Lucic, Blake Wheeler, Martin Hanzal, Jonathan Audy-Marchessault, Quinton Howden, Marian Gaborik, Reilly Smith, Brandon Pirri, Valtteri Filppula, Mattias Janmark-Nylen
<b>Custom OT Lines Defensemen</b>
Marc-Edouard Vlasic, Marc Methot, Keaton Ellerby, Marc-Andre Gragnani, Carl Gunnarsson

<b>Scratches</b>
Fedor Tyutin (Healthy), Patrick O'Sullivan (Healthy), Rasmus Nielsen (Healthy)</pre></div>
<h1 class="TeamLinesPro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Danton Heinen            Patrick Kane             34     1   2  2  
 2 Antti Suomela            Nikita Gusev             David Backes             28     1   2  2  
 3 Marcus Kruger            David Ullstrom           Justin Williams          22     1   2  2  
 4 Jonathan Toews           Antoine Roussel          Jeremy Morin             16     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dylan Olsen              Dennis Wideman                                    34     1   2  2  
 2 Jakub Kindl              Roman Polak                                       33     1   2  2  
 3 Gustav Olofsson          Adam Clendening                                   33     1   2  2  
 4 Gustav Olofsson          Dennis Wideman                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Danton Heinen            Patrick Kane             50     1   2  2  
 2 Marcus Kruger            Nikita Gusev             David Backes             50     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Wideman           Dylan Olsen                                       50     1   2  2  
 2 Adam Clendening          Jakub Kindl                                       50     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           David Backes             50     1   2  2  
 2 Marcus Kruger            Patrick Kane             50     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Olofsson          Dennis Wideman           50     1   2  2  
 2 Jakub Kindl              Dylan Olsen              50     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Toews                                    50     1   2  2  
 2 Marcus Kruger                                     50     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Olofsson          Dennis Wideman           50     1   2  2  
 2 Jakub Kindl              Dylan Olsen              50     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           Patrick Kane             50     1   2  2  
 2 Marcus Kruger            David Backes             50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dylan Olsen              Dennis Wideman           50     1   2  2  
 2 Jakub Kindl              Gustav Olofsson          50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Danton Heinen            Patrick Kane             Dennis Wideman           Dylan Olsen              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Marcus Kruger            David Backes             Gustav Olofsson          Roman Polak              

<b>Goaltenders</b>
Starting : Carey Price              
Backup : Antti Raanta             

<b>Extra Forwards</b>
Normal : Nikita Gusev, Marcus Kruger, Jeremy Morin - PP : Nikita Gusev, Antti Suomela - PK : Antoine Roussel
<b>Extra Defensemen</b>
Normal : Jakub Kindl, Gustav Olofsson, Dennis Wideman - PP : Gustav Olofsson - PK : Jakub Kindl, Dylan Olsen
<b>Penalty Shots</b>
Patrick Kane, Jonathan Toews, Marcus Kruger, Nikita Gusev, David Backes
<b>Custom OT Lines Forwards</b>
Jonathan Toews, Patrick Kane, Marcus Kruger, Danton Heinen, David Backes, Nikita Gusev, Antti Suomela, Antoine Roussel, Justin Williams, Jeremy Morin
<b>Custom OT Lines Defensemen</b>
Dennis Wideman, Dylan Olsen, Adam Clendening, Jakub Kindl, Gustav Olofsson

<b>Scratches</b>
Gustav Nyquist (Healthy), Byron Froese (Healthy), Libor Kasik (Healthy)</pre></div>
<h1 class="TeamLinesPro_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Magnus Paajarvi          Devin Setoguchi          30     0   0  5  
 2 Anton Lander             Nikita Filatov           Peter Mueller            30     0   1  4  
 3 Robby Fabbri             Patrick Sharp            Jake Virtanen            30     0   1  4  
 4 Brian Boyle              Evan Rodrigues           Joachim Nermark          10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Yann Sauve               Jani Hakanpaa                                     38     1   1  3  
 2 Niklas Hjalmarsson       Jack Hillen                                       38     1   2  2  
 3 Ty Wishart               Brett Cote                                        24     1   2  2  
 4 Niklas Hjalmarsson       Yann Sauve                                        0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Magnus Paajarvi          Devin Setoguchi          65     0   0  5  
 2 Brian Boyle              Patrick Sharp            Nikita Filatov           35     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jani Hakanpaa            Yann Sauve                                        60     0   0  5  
 2 Niklas Hjalmarsson       Jack Hillen                                       40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brian Boyle              Evan Rodrigues           80     1   4  0  
 2 Sean Monahan             Joachim Nermark          20     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Niklas Hjalmarsson       Yann Sauve               60     1   4  0  
 2 Jani Hakanpaa            Jack Hillen              40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brian Boyle                                       55     0   5  0  
 2 Joachim Nermark                                   45     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Niklas Hjalmarsson       Jack Hillen              60     1   4  0  
 2 Jani Hakanpaa            Ty Wishart               40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Monahan             Robby Fabbri             50     0   1  4  
 2 Anton Lander             Nikita Filatov           50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jani Hakanpaa            Jack Hillen              60     1   1  3  
 2 Niklas Hjalmarsson       Yann Sauve               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Magnus Paajarvi          Devin Setoguchi          Yann Sauve               Jack Hillen              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brian Boyle              Evan Rodrigues           Joachim Nermark          Niklas Hjalmarsson       Yann Sauve               

<b>Goaltenders</b>
Starting : Andrew Hammond           
Backup : Martin Jones             

<b>Extra Forwards</b>
Normal : Sean Monahan, Nikita Filatov, Devin Setoguchi - PP : Peter Mueller, Sean Monahan - PK : Sean Monahan
<b>Extra Defensemen</b>
Normal : Yann Sauve, Niklas Hjalmarsson, Jani Hakanpaa - PP : Jani Hakanpaa - PK : Jani Hakanpaa, Niklas Hjalmarsson
<b>Penalty Shots</b>
Sean Monahan, Patrick Sharp, Peter Mueller, Devin Setoguchi, Nikita Filatov
<b>Custom OT Lines Forwards</b>
Sean Monahan, Devin Setoguchi, Magnus Paajarvi, Nikita Filatov, Robby Fabbri, Anton Lander, Patrick Sharp, Peter Mueller, Brian Boyle, Jake Virtanen
<b>Custom OT Lines Defensemen</b>
Niklas Hjalmarsson, Yann Sauve, Jack Hillen, Jani Hakanpaa, Brett Cote

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Eric Staal               Rick Nash                25     1   2  2  
 2 Ryan Getzlaf             Ilya Kovalchuk           Elias Lindholm           25     1   2  2  
 3 Andrew Shaw              Adam Erne                Drew Shore               25     1   2  2  
 4 Jack Eichel              Patrick Bjorkstrand      Mitch Holmberg           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Keith Yandle                                      40     1   2  2  
 2 Erik Gudbranson          Brandon Gormley                                   40     1   2  2  
 3 Shane Hanna              Mirco Mueller                                     20     1   2  2  
 4 Kevin Shattenkirk        Keith Yandle                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Eric Staal               Rick Nash                50     1   2  2  
 2 Ryan Getzlaf             Ilya Kovalchuk           Elias Lindholm           50     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Keith Yandle                                      50     1   2  2  
 2 Erik Gudbranson          Mirco Mueller                                     50     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Getzlaf             Eric Staal               60     0   5  0  
 2 Jack Eichel              Rick Nash                40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Keith Yandle             60     1   4  0  
 2 Erik Gudbranson          Shane Hanna              40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Eric Staal                                        60     0   5  0  
 2 Andrew Shaw                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Keith Yandle             60     0   5  0  
 2 Erik Gudbranson          Shane Hanna              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Eichel              Eric Staal               60     1   2  2  
 2 Ryan Getzlaf             Rick Nash                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Keith Yandle             60     1   2  2  
 2 Erik Gudbranson          Mirco Mueller            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Getzlaf             Eric Staal               Rick Nash                Kevin Shattenkirk        Keith Yandle             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Getzlaf             Eric Staal               Rick Nash                Kevin Shattenkirk        Keith Yandle             

<b>Goaltenders</b>
Starting : Anton Forsberg           
Backup : Kevin Poulin             

<b>Extra Forwards</b>
Normal : Andrew Shaw, Adam Erne, Drew Shore - PP : Andrew Shaw, Adam Erne - PK : Drew Shore
<b>Extra Defensemen</b>
Normal : Shane Hanna, Mirco Mueller, Erik Gudbranson - PP : Shane Hanna - PK : Mirco Mueller, Erik Gudbranson
<b>Penalty Shots</b>
Ryan Getzlaf, Eric Staal, Jack Eichel, Rick Nash, Ilya Kovalchuk
<b>Custom OT Lines Forwards</b>
Ryan Getzlaf, Eric Staal, Jack Eichel, Rick Nash, Ilya Kovalchuk, Elias Lindholm, Andrew Shaw, Adam Erne, Drew Shore, Mitch Holmberg
<b>Custom OT Lines Defensemen</b>
Kevin Shattenkirk, Keith Yandle, Erik Gudbranson, Brandon Gormley, Shane Hanna

<b>Scratches</b>
Devin Shore (Healthy)</pre></div>
<h1 class="TeamLinesPro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Max Domi                 Leon Draisaitl           25     1   2  2  
 2 Mathew Barzal            Hunter Shinkaruk         Nick Palmieri            25     1   2  2  
 3 Mikko Koivu              Tomas Tatar              Ryan Hartman             25     1   2  2  
 4 Conner Bleackley         Phillip Di Giuseppe      Sean Couturier           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Duncan Siemens           Alex Petrovic                                     25     1   2  2  
 2 Jonathan Ericsson        Philip Larsen                                     25     1   2  2  
 3 Kyle Quincey             Haydn Fleury                                      25     1   2  2  
 4 Korbinian Holzer         Duncan Siemens                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Max Domi                 Leon Draisaitl           60     1   2  2  
 2 Mikko Koivu              Hunter Shinkaruk         Tomas Tatar              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Duncan Siemens           Mathew Barzal                                     60     1   2  2  
 2 Jonathan Ericsson        Philip Larsen                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Leon Draisaitl           60     1   2  2  
 2 Mathew Barzal            Mikko Koivu              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Duncan Siemens           Alex Petrovic            60     1   2  2  
 2 Jonathan Ericsson        Philip Larsen            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sean Couturier                                    60     1   2  2  
 2 Leon Draisaitl                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Duncan Siemens           Alex Petrovic            60     1   2  2  
 2 Jonathan Ericsson        Philip Larsen            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Leon Draisaitl           60     1   2  2  
 2 Mathew Barzal            Mikko Koivu              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Duncan Siemens           Alex Petrovic            60     1   2  2  
 2 Jonathan Ericsson        Philip Larsen            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Max Domi                 Leon Draisaitl           Duncan Siemens           Alex Petrovic            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Nick Palmieri            Ryan Hartman             Duncan Siemens           Alex Petrovic            

<b>Goaltenders</b>
Starting : Corey Crawford           
Backup : Brendan Burke            

<b>Extra Forwards</b>
Normal : Sean Couturier, Conner Bleackley, Hunter Shinkaruk - PP : Sean Couturier, Conner Bleackley - PK : Hunter Shinkaruk
<b>Extra Defensemen</b>
Normal : Kyle Quincey, Haydn Fleury, Korbinian Holzer - PP : Kyle Quincey - PK : Haydn Fleury, Korbinian Holzer
<b>Penalty Shots</b>
Sean Couturier, Leon Draisaitl, Mathew Barzal, Mikko Koivu, Nick Palmieri
<b>Custom OT Lines Forwards</b>
Sean Couturier, Leon Draisaitl, Mathew Barzal, Mikko Koivu, Hunter Shinkaruk, Max Domi, Tomas Tatar, Ryan Hartman, Conner Bleackley, Nick Palmieri
<b>Custom OT Lines Defensemen</b>
Duncan Siemens, Alex Petrovic, Jonathan Ericsson, Philip Larsen, Haydn Fleury

<b>Scratches</b>
Marc-Andre Cliche (Healthy), Kale Clague (Healthy), Nick Suzuki (Healthy)</pre></div>
<h1 class="TeamLinesPro_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins      Alexander Burmistrov     Jaden Schwartz           40     1   1  3  
 2 Dave Bolland             Henrik Zetterberg        Nathan MacKinnon         34     1   1  3  
 3 Auston Matthews          Marcus Johansson         Jannik Hansen            15     0   0  5  
 4 Michael Bournival        Adam Lowry               Jannik Hansen            11     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Kulikov           Nick Leddy                                        25     1   2  2  
 2 Slater Koekkoek          Jaccob Slavin                                     25     1   2  2  
 3 Jeff Petry               Madison Bowey                                     25     1   2  2  
 4 Josh Gorges              Dmitri Kulikov                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins      Jaden Schwartz           Nathan MacKinnon         60     1   2  2  
 2 Alexander Burmistrov     Marcus Johansson         Jannik Hansen            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Kulikov           Jaccob Slavin                                     60     1   2  2  
 2 Nick Leddy               Slater Koekkoek                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins      Jaden Schwartz           60     1   2  2  
 2 Nathan MacKinnon         Alexander Burmistrov     40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitri Kulikov           Nick Leddy               60     1   2  2  
 2 Slater Koekkoek          Jaccob Slavin            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins                               60     1   2  2  
 2 Jaden Schwartz                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitri Kulikov           Nick Leddy               60     1   2  2  
 2 Slater Koekkoek          Jaccob Slavin            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins      Jaden Schwartz           60     1   2  2  
 2 Nathan MacKinnon         Alexander Burmistrov     40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitri Kulikov           Nick Leddy               60     1   2  2  
 2 Slater Koekkoek          Jaccob Slavin            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Nugent-Hopkins      Jaden Schwartz           Nathan MacKinnon         Dmitri Kulikov           Nick Leddy               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Nugent-Hopkins      Jaden Schwartz           Nathan MacKinnon         Dmitri Kulikov           Nick Leddy               

<b>Goaltenders</b>
Starting : Ondrej Pavelec           
Backup : Ilya Sorokin             

<b>Extra Forwards</b>
Normal : Michael Bournival, Auston Matthews, Henrik Zetterberg - PP : Michael Bournival, Auston Matthews - PK : Henrik Zetterberg
<b>Extra Defensemen</b>
Normal : Jeff Petry, Jaccob Slavin, Dmitri Kulikov - PP : Jeff Petry - PK : Jaccob Slavin, Dmitri Kulikov
<b>Penalty Shots</b>
Ryan Nugent-Hopkins, Jaden Schwartz, Nathan MacKinnon, Alexander Burmistrov, Marcus Johansson
<b>Custom OT Lines Forwards</b>
Ryan Nugent-Hopkins, Jaden Schwartz, Nathan MacKinnon, Alexander Burmistrov, Marcus Johansson, Auston Matthews, Jannik Hansen, Henrik Zetterberg, Dave Bolland, Adam Lowry
<b>Custom OT Lines Defensemen</b>
Dmitri Kulikov, Nick Leddy, Slater Koekkoek, Jaccob Slavin, Jeff Petry

<b>Scratches</b>
Nate Schmidt (Groin Injury)</pre></div>
<h1 class="TeamLinesPro_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Gagner               Taylor Hall              Jordan Eberle            31     0   1  4  
 2 Maxim Lapierre           Chris Stewart            Brendan Gallagher        31     0   1  4  
 3 Kieffer Bellows          Bryan Bickell            Kailer Yamamoto          29     0   1  4  
 4 Seth Griffith            Jakob Silfverberg        Ryan Callahan            9      0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Daniel Girardi           Rasmus Dahlin                                     33     0   1  4  
 2 Joni Pitkanen            Cody Ceci                                         33     0   2  3  
 3 Colten Teubert           Erik Gustafsson                                   31     0   2  3  
 4 Colten Teubert           Erik Gustafsson                                   3      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Gagner               Taylor Hall              Jordan Eberle            55     0   0  5  
 2 Kieffer Bellows          Chris Stewart            Brendan Gallagher        45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Dahlin            Colten Teubert                                    55     0   1  4  
 2 Daniel Girardi           Cody Ceci                                         45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Maxim Lapierre           Bryan Bickell            57     0   4  1  
 2 Seth Griffith            Ryan Callahan            43     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colten Teubert           Cody Ceci                57     1   4  0  
 2 Daniel Girardi           Erik Gustafsson          43     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Maxim Lapierre                                    57     0   5  0  
 2 Seth Griffith                                     43     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cody Ceci                Daniel Girardi           57     0   5  0  
 2 Colten Teubert           Rasmus Dahlin            43     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sam Gagner               Jordan Eberle            55     0   1  4  
 2 Kieffer Bellows          Ryan Callahan            45     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cody Ceci                Rasmus Dahlin            55     0   2  3  
 2 Colten Teubert           Daniel Girardi           45     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Gagner               Chris Stewart            Jordan Eberle            Cody Ceci                Joni Pitkanen            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Maxim Lapierre           Bryan Bickell            Ryan Callahan            Cody Ceci                Colten Teubert           

<b>Goaltenders</b>
Starting : Marc-Andre Fleury        
Backup : Devan Dubnyk             

<b>Extra Forwards</b>
Normal : Chris Stewart, Kieffer Bellows, Jordan Eberle - PP : Bryan Bickell, Kieffer Bellows - PK : Maxim Lapierre
<b>Extra Defensemen</b>
Normal : Cody Ceci, Colten Teubert, Daniel Girardi - PP : Cody Ceci - PK : Cody Ceci, Colten Teubert
<b>Penalty Shots</b>
Jordan Eberle, Kieffer Bellows, Sam Gagner, Jakob Silfverberg, Brendan Gallagher
<b>Custom OT Lines Forwards</b>
Sam Gagner, Jordan Eberle, Kieffer Bellows, Ryan Callahan, Maxim Lapierre, Chris Stewart, Seth Griffith, Brendan Gallagher, Kailer Yamamoto, Jakob Silfverberg
<b>Custom OT Lines Defensemen</b>
Cody Ceci, Colten Teubert, Rasmus Dahlin, Daniel Girardi, Joni Pitkanen

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brock Nelson             Jiri Sekac               Wayne Simmonds           25     1   2  2  
 2 Dylan Larkin             Nikolaj Ehlers           Nikita Kucherov          25     0   0  5  
 3 Joel Eriksson Ek         Alex Tuch                Andrei Svechnikov        25     1   2  2  
 4 Paul Gaustad             Andrew Ladd              Lauri Korpikoski         25     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Zachary Werenski                                  34     1   2  2  
 2 Dan DeKeyser             Ryan Murphy                                       33     1   2  2  
 3 John Moore               Matthew Carle                                     33     1   2  2  
 4 Vyacheslav Voynov        Zachary Werenski                                  0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Larkin             Nikolaj Ehlers           Nikita Kucherov          50     0   0  5  
 2 Joel Eriksson Ek         Alex Tuch                Andrei Svechnikov        50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Zachary Werenski                                  50     0   0  5  
 2 Dan DeKeyser             Ryan Murphy                                       50     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Paul Gaustad             Lauri Korpikoski         50     1   2  2  
 2 Joel Eriksson Ek         Andrew Ladd              50     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Moore               Matthew Carle            50     1   2  2  
 2 Vyacheslav Voynov        Dan DeKeyser             50     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Paul Gaustad                                      50     1   2  2  
 2 Joel Eriksson Ek                                  50     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Moore               Matthew Carle            50     1   2  2  
 2 Vyacheslav Voynov        Dan DeKeyser             50     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dylan Larkin             Nikolaj Ehlers           50     1   2  2  
 2 Brock Nelson             Nikita Kucherov          50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Zachary Werenski         50     1   2  2  
 2 Dan DeKeyser             Ryan Murphy              50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dylan Larkin             Nikolaj Ehlers           Nikita Kucherov          Vyacheslav Voynov        Zachary Werenski         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Paul Gaustad             Andrew Ladd              Lauri Korpikoski         John Moore               Matthew Carle            

<b>Goaltenders</b>
Starting : Matt Murray              
Backup : Petr Mrazek              

<b>Extra Forwards</b>
Normal : Nikita Kucherov, Nikolaj Ehlers, Dylan Larkin - PP : Nikita Kucherov, Nikolaj Ehlers - PK : Paul Gaustad
<b>Extra Defensemen</b>
Normal : Vyacheslav Voynov, Zachary Werenski, Ryan Murphy - PP : Zachary Werenski - PK : John Moore, Matthew Carle
<b>Penalty Shots</b>
Joel Eriksson Ek, Dylan Larkin, Nikita Kucherov, Nikolaj Ehlers, Andrei Svechnikov
<b>Custom OT Lines Forwards</b>
Nikita Kucherov, Nikolaj Ehlers, Dylan Larkin, Brock Nelson, Andrei Svechnikov, Wayne Simmonds, Joel Eriksson Ek, Paul Gaustad, Alex Tuch, Andrew Ladd
<b>Custom OT Lines Defensemen</b>
Vyacheslav Voynov, Zachary Werenski, Ryan Murphy, Dan DeKeyser, John Moore

<b>Scratches</b>
Tyler Toffoli (Healthy)</pre></div>
<h1 class="TeamLinesPro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             Brett Ritchie            29     0   1  4  
 2 Jordan Martinook         Ryan Haggerty            Corey Perry              28     0   2  3  
 3 Tyler Bozak              Kevin Hayes              Vincent Trocheck         25     0   2  3  
 4 Jordan Weal              Jerry D'Amigo            Patrick Holland          18     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Pysyk               Kristopher Letang                                 34     0   2  3  
 2 Drew Doughty             Ben Hutton                                        33     0   2  3  
 3 Derek Forbort            Tyler Cuma                                        33     0   2  3  
 4 Drew Doughty             Kristopher Letang                                 0      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             Brett Ritchie            60     0   0  5  
 2 Tyler Bozak              Vincent Trocheck         Corey Perry              40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Kristopher Letang                                 60     0   1  4  
 2 Mark Pysyk               Tyler Cuma                                        40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kevin Hayes              Jerry D'Amigo            60     0   4  1  
 2 Patrick Holland          Jordan Martinook         40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derek Forbort            Mark Pysyk               60     2   3  0  
 2 Drew Doughty             Kristopher Letang        40     2   3  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Patrick Holland                                   60     0   4  1  
 2 Kevin Hayes                                       40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derek Forbort            Mark Pysyk               60     1   4  0  
 2 Drew Doughty             Kristopher Letang        40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             60     0   1  4  
 2 Jordan Weal              Corey Perry              40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Ben Hutton               60     1   2  2  
 2 Derek Forbort            Tyler Cuma               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Jeff Skinner             Corey Perry              Drew Doughty             Kristopher Letang        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Jeff Skinner             Corey Perry              Drew Doughty             Derek Forbort            

<b>Goaltenders</b>
Starting : Michal Neuvirth          
Backup : Philipp Grubauer         

<b>Extra Forwards</b>
Normal : Brett Ritchie, Ryan Haggerty, Jerry D'Amigo - PP : Brett Ritchie, Ryan Haggerty - PK : Ryan Haggerty
<b>Extra Defensemen</b>
Normal : Derek Forbort, Mark Pysyk, Tyler Cuma - PP : Derek Forbort - PK : Mark Pysyk, Tyler Cuma
<b>Penalty Shots</b>
Jeff Skinner, Anze Kopitar, Corey Perry, Tyler Bozak, Vincent Trocheck
<b>Custom OT Lines Forwards</b>
Jeff Skinner, Anze Kopitar, Corey Perry, Tyler Bozak, Ryan Haggerty, Brett Ritchie, Vincent Trocheck, Jordan Weal, Kevin Hayes, Jordan Martinook
<b>Custom OT Lines Defensemen</b>
Drew Doughty, Tyler Cuma, Mark Pysyk, Kristopher Letang, Ben Hutton

<b>Scratches</b>
Andy Andreoff (Healthy), Anze Kuralt (Healthy), Christopher Gibson (Healthy)</pre></div>
<h1 class="TeamLinesPro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Nikolay Prokhorkin       Jakub Voracek            36     1   2  2  
 2 Charlie Coyle            Kevin Labanc             Connor Brown             28     1   2  2  
 3 Andrew Copp              Thomas Vanek             Mattias Tedenby          25     1   2  2  
 4 Zack Phillips            Sebastian Collberg       JC Lipon                 11     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Steven Kampfer           Simon Despres                                     40     1   2  2  
 2 Jamie McBain             Matt Dumba                                        30     1   2  2  
 3 Jonathon Merrill         Colby Cohen                                       20     1   2  2  
 4 Simon Despres            Matt Dumba                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Nikolay Prokhorkin       Jakub Voracek            60     1   2  2  
 2 Charlie Coyle            Kevin Labanc             Connor Brown             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Thomas Vanek             Matt Dumba                                        60     1   2  2  
 2 Simon Despres            Steven Kampfer                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrew Copp              Connor Brown             60     1   2  2  
 2 Zack Phillips            Kevin Labanc             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colby Cohen              Jamie McBain             60     1   2  2  
 2 Simon Despres            Jonathon Merrill         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Andrew Copp                                       60     1   2  2  
 2 Zack Phillips                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colby Cohen              Jamie McBain             60     1   2  2  
 2 Simon Despres            Jonathon Merrill         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Jakub Voracek            60     1   2  2  
 2 Charlie Coyle            Kevin Labanc             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Steven Kampfer           Simon Despres            60     1   2  2  
 2 Jamie McBain             Matt Dumba               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeny Kuznetsov         Nikolay Prokhorkin       Jakub Voracek            Matt Dumba               Charlie Coyle            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Copp              Zack Phillips            Connor Brown             Simon Despres            Jamie McBain             

<b>Goaltenders</b>
Starting : Matt Hackett             
Backup : Thatcher Demko           

<b>Extra Forwards</b>
Normal : Kevin Labanc, Evgeny Kuznetsov, Jakub Voracek - PP : Charlie Coyle, Nikolay Prokhorkin - PK : Connor Brown
<b>Extra Defensemen</b>
Normal : Matt Dumba, Jamie McBain, Simon Despres - PP : Jamie McBain - PK : Colby Cohen, Jamie McBain
<b>Penalty Shots</b>
Nikolay Prokhorkin, Jakub Voracek, Evgeny Kuznetsov, Kevin Labanc, Connor Brown
<b>Custom OT Lines Forwards</b>
Evgeny Kuznetsov, Jakub Voracek, Charlie Coyle, Kevin Labanc, Zack Phillips, Connor Brown, Andrew Copp, Nikolay Prokhorkin, Thomas Vanek, Mattias Tedenby
<b>Custom OT Lines Defensemen</b>
Simon Despres, Matt Dumba, Steven Kampfer, Jamie McBain, Colby Cohen

<b>Scratches</b>
Ryan Suter (Bruised Right Foot Injury), Cale Fleury (Healthy)</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Alexander Kerfoot        Filip Forsberg           25     1   2  2  
 2 Sam Bennett              Zach Parise              Anthony Duclair          25     1   2  2  
 3 Austin Watson            Martin Reway             Andreas Johnsson         25     1   2  2  
 4 Derek Roy                Alan Quine               Unknown Player           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         T.J. Brennan                                      33     1   2  2  
 2 Brent Seabrook           Xavier Ouellet                                    33     1   2  2  
 3 Mac Weegar               Christian Wolanin                                 32     1   2  2  
 4 Alex Pietrangelo         Brent Seabrook                                    2      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Filip Forsberg           Zach Parise              60     1   2  2  
 2 Austin Watson            Anthony Duclair          Sam Bennett              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Xavier Ouellet           Mac Weegar                                        60     1   2  2  
 2 Christian Wolanin        Brent Seabrook                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sidney Crosby            Zach Parise              60     1   2  2  
 2 Unknown Player           Martin Reway             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mac Weegar               Xavier Ouellet           60     1   2  2  
 2 Brent Seabrook           Alex Pietrangelo         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Filip Forsberg                                    60     1   2  2  
 2 Sidney Crosby                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Brent Seabrook           60     1   2  2  
 2 Mac Weegar               Xavier Ouellet           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Filip Forsberg           Sidney Crosby            60     1   2  2  
 2 Zach Parise              Alan Quine               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Seabrook           Alex Pietrangelo         60     1   2  2  
 2 Xavier Ouellet           Mac Weegar               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Filip Forsberg           Zach Parise              Xavier Ouellet           Mac Weegar               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Filip Forsberg           Zach Parise              Xavier Ouellet           Mac Weegar               

<b>Goaltenders</b>
Starting : Jaroslav Halak           
Backup : Jhonas Enroth            

<b>Extra Forwards</b>
Normal : Zach Parise, Sidney Crosby, Filip Forsberg - PP : Zach Parise, Anthony Duclair - PK : Sidney Crosby
<b>Extra Defensemen</b>
Normal : Xavier Ouellet, Brent Seabrook, Mac Weegar - PP : Xavier Ouellet - PK : Xavier Ouellet, Mac Weegar
<b>Penalty Shots</b>
Austin Watson, Sidney Crosby, Filip Forsberg, Zach Parise, Anthony Duclair
<b>Custom OT Lines Forwards</b>
Derek Roy, Alan Quine, Sidney Crosby, Filip Forsberg, Zach Parise, Austin Watson, Sam Bennett, Anthony Duclair, Martin Reway, Unknown Player
<b>Custom OT Lines Defensemen</b>
Mac Weegar, Brent Seabrook, Christian Wolanin, Xavier Ouellet, Alex Pietrangelo

<b>Scratches</b>
Scott Harrington (Healthy), Curtis Hamilton (Suspend), Logan Shaw (Healthy)</pre></div>
<h1 class="TeamLinesPro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Colin Wilson             Patrik Laine             Mark Stone               25     1   2  2  
 2 Henrik Sedin             Justin Abdelkader        Sam Reinhart             25     1   2  2  
 3 Zack Smith               Vince Hinostroza         Zach Budish              25     1   2  2  
 4 Peter Trainor            Kevin Roy                Cam Atkinson             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 James Wisniewski         Dmitri Orlov                                      25     1   2  2  
 2 Roman Josi               Tyson Barrie                                      25     1   2  2  
 3 Olli Maatta              Brett Pesce                                       25     1   2  2  
 4 James Wisniewski         Dmitri Orlov                                      25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Colin Wilson             Patrik Laine             Mark Stone               60     1   2  2  
 2 Henrik Sedin             Justin Abdelkader        Sam Reinhart             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 James Wisniewski         Dmitri Orlov                                      60     1   2  2  
 2 Roman Josi               Tyson Barrie                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colin Wilson             Henrik Sedin             60     1   2  2  
 2 Mark Stone               Patrik Laine             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 James Wisniewski         Dmitri Orlov             60     1   2  2  
 2 Roman Josi               Tyson Barrie             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Colin Wilson                                      60     1   2  2  
 2 Henrik Sedin                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 James Wisniewski         Dmitri Orlov             60     1   2  2  
 2 Roman Josi               Tyson Barrie             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colin Wilson             Henrik Sedin             60     1   2  2  
 2 Mark Stone               Patrik Laine             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 James Wisniewski         Dmitri Orlov             60     1   2  2  
 2 Roman Josi               Tyson Barrie             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Colin Wilson             Patrik Laine             Mark Stone               James Wisniewski         Dmitri Orlov             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Colin Wilson             Patrik Laine             Mark Stone               James Wisniewski         Dmitri Orlov             

<b>Goaltenders</b>
Starting : Pekka Rinne              
Backup : Tristan Jarry            

<b>Extra Forwards</b>
Normal : Zack Smith, Peter Trainor, Zach Budish - PP : Zack Smith, Peter Trainor - PK : Zach Budish
<b>Extra Defensemen</b>
Normal : Olli Maatta, Brett Pesce, Roman Josi - PP : Olli Maatta - PK : Brett Pesce, Roman Josi
<b>Penalty Shots</b>
Colin Wilson, Henrik Sedin, Mark Stone, Patrik Laine, Justin Abdelkader
<b>Custom OT Lines Forwards</b>
Colin Wilson, Henrik Sedin, Mark Stone, Patrik Laine, Justin Abdelkader, Sam Reinhart, Zack Smith, Peter Trainor, Zach Budish, Cam Atkinson
<b>Custom OT Lines Defensemen</b>
James Wisniewski, Dmitri Orlov, Roman Josi, Tyson Barrie, Olli Maatta

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Andrew Cogliano          Linus Omark              25     1   2  2  
 2 Tomas Plekanec           Vadim Shipachev          Peter Holland            25     1   2  2  
 3 Ryan Spooner             Artemi Panarin           Nick Schmaltz            25     1   2  2  
 4 Henrik Samuelsson        Blake Coleman            Kevin Stenlund           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Trouba             Seth Jones                                        25     1   2  2  
 2 Jonas Brodin             Ryan Whitney                                      25     1   2  2  
 3 Christopher Tanev        Steven Santini                                    25     1   2  2  
 4 Jacob Trouba             Seth Jones                                        25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Andrew Cogliano          Linus Omark              60     1   2  2  
 2 Tomas Plekanec           Vadim Shipachev          Ryan Spooner             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Trouba             Seth Jones                                        60     1   2  2  
 2 Christopher Tanev        Ryan Whitney                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor McDavid           Andrew Cogliano          60     1   2  2  
 2 Tomas Plekanec           Ryan Spooner             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Seth Jones               60     1   2  2  
 2 Steven Santini           Ryan Whitney             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Connor McDavid                                    60     1   2  2  
 2 Andrew Cogliano                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Seth Jones               60     1   2  2  
 2 Steven Santini           Ryan Whitney             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor McDavid           Andrew Cogliano          60     1   2  2  
 2 Tomas Plekanec           Ryan Spooner             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Seth Jones               60     1   2  2  
 2 Christopher Tanev        Ryan Whitney             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Andrew Cogliano          Linus Omark              Jacob Trouba             Seth Jones               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Andrew Cogliano          Linus Omark              Jacob Trouba             Seth Jones               

<b>Goaltenders</b>
Starting : Sergei Bobrovsky         
Backup : Anders Lindback          

<b>Extra Forwards</b>
Normal : Kevin Stenlund, Henrik Samuelsson, Artemi Panarin - PP : Kevin Stenlund, Henrik Samuelsson - PK : Artemi Panarin
<b>Extra Defensemen</b>
Normal : Christopher Tanev, Steven Santini, Seth Jones - PP : Christopher Tanev - PK : Steven Santini, Jacob Trouba
<b>Penalty Shots</b>
Connor McDavid, Andrew Cogliano, Tomas Plekanec, Ryan Spooner, Henrik Samuelsson
<b>Custom OT Lines Forwards</b>
Connor McDavid, Andrew Cogliano, Tomas Plekanec, Ryan Spooner, Henrik Samuelsson, Linus Omark, Kevin Stenlund, Artemi Panarin, Nick Schmaltz, Vadim Shipachev
<b>Custom OT Lines Defensemen</b>
Jacob Trouba, Seth Jones, Jonas Brodin, Ryan Whitney, Christopher Tanev

<b>Scratches</b>
Mark Katic (Fractured Left Foot Injury), Ondrej Kase (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Radek Faksa              Gabriel Bourque          Émile Poirier            25     1   2  2  
 2 Michael Frolik           Jared McCann             Nikita Scherbak          25     1   2  2  
 3 Brendan Leipsic          Michael Bunting          Sven Baertschi           25     1   2  2  
 4 Max Friberg              Cory Conacher            Torrey Mitchell          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Michael Del Zotto        Dustin Byfuglien                                  25     1   2  2  
 2 Dmitry Korobov           Brayden McNabb                                    25     1   2  2  
 3 Anton Volchenkov         Brian Lee                                         25     1   2  2  
 4 Michael Del Zotto        Dustin Byfuglien                                  25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Frolik           Gabriel Bourque          Émile Poirier            60     1   2  2  
 2 Radek Faksa              Sven Baertschi           Nikita Scherbak          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Michael Del Zotto        Dustin Byfuglien                                  60     1   2  2  
 2 Brian Lee                Brayden McNabb                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Frolik           Gabriel Bourque          60     1   2  2  
 2 Émile Poirier            Sven Baertschi           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Del Zotto        Dustin Byfuglien         60     1   2  2  
 2 Brian Lee                Brayden McNabb           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael Frolik                                    60     1   2  2  
 2 Gabriel Bourque                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Del Zotto        Dustin Byfuglien         60     1   2  2  
 2 Brian Lee                Brayden McNabb           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Frolik           Gabriel Bourque          60     1   2  2  
 2 Émile Poirier            Sven Baertschi           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Del Zotto        Dustin Byfuglien         60     1   2  2  
 2 Brian Lee                Brayden McNabb           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Frolik           Gabriel Bourque          Émile Poirier            Michael Del Zotto        Dustin Byfuglien         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Frolik           Gabriel Bourque          Émile Poirier            Michael Del Zotto        Dustin Byfuglien         

<b>Goaltenders</b>
Starting : James Reimer             
Backup : Ben Bishop               

<b>Extra Forwards</b>
Normal : Michael Bunting, Brendan Leipsic, Jared McCann - PP : Michael Bunting, Brendan Leipsic - PK : Jared McCann
<b>Extra Defensemen</b>
Normal : Anton Volchenkov, Michael Del Zotto, Brian Lee - PP : Anton Volchenkov - PK : Dustin Byfuglien, Brian Lee
<b>Penalty Shots</b>
Michael Frolik, Gabriel Bourque, Émile Poirier, Sven Baertschi, Radek Faksa
<b>Custom OT Lines Forwards</b>
Michael Frolik, Gabriel Bourque, Émile Poirier, Sven Baertschi, Radek Faksa, Brendan Leipsic, Jared McCann, Cory Conacher, Michael Bunting, Nikita Scherbak
<b>Custom OT Lines Defensemen</b>
Michael Del Zotto, Dustin Byfuglien, Brian Lee, Brayden McNabb, Anton Volchenkov

<b>Scratches</b>
Cale Makar (Healthy), Laurent Dauphin (Healthy), Callum Booth (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        J.T. Miller              Nail Yakupov             26     0   1  4  
 2 Alexander Wennberg       Brandon Saad             Rickard Rakell           25     0   1  4  
 3 Brayden Point            Tanner Pearson           Viktor Arvidsson         25     1   1  3  
 4 Cody Eakin               Chris Kreider            Christian Thomas         24     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan McDonagh            Shea Theodore                                     34     1   2  2  
 2 Dylan McIlrath           Jake McCabe                                       33     1   2  2  
 3 Griffin Reinhart         Justin Faulk                                      33     1   2  2  
 4 Griffin Reinhart         Justin Faulk                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        J.T. Miller              Nail Yakupov             60     0   0  5  
 2 Alexander Wennberg       Brandon Saad             Rickard Rakell           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan McDonagh            Shea Theodore                                     60     0   1  4  
 2 Justin Faulk             Jake McCabe                                       40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Tanner Pearson           60     1   4  0  
 2 Alexander Wennberg       Brandon Saad             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan McDonagh            Dylan McIlrath           60     1   4  0  
 2 Griffin Reinhart         Justin Faulk             40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Aleksander Barkov                                 60     0   5  0  
 2 Alexander Wennberg                                40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan McDonagh            Dylan McIlrath           60     0   5  0  
 2 Griffin Reinhart         Justin Faulk             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brayden Point            Viktor Arvidsson         60     1   2  2  
 2 Cody Eakin               Tanner Pearson           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Theodore            Dylan McIlrath           60     1   2  2  
 2 Jake McCabe              Justin Faulk             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        J.T. Miller              Nail Yakupov             Ryan McDonagh            Shea Theodore            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Tanner Pearson           Rickard Rakell           Ryan McDonagh            Dylan McIlrath           

<b>Goaltenders</b>
Starting : Henrik Lundqvist         
Backup : Jack Campbell            

<b>Extra Forwards</b>
Normal : Nail Yakupov, Brayden Point, Christian Thomas - PP : Tanner Pearson, Viktor Arvidsson - PK : Rickard Rakell
<b>Extra Defensemen</b>
Normal : Dylan McIlrath, Justin Faulk, Ryan McDonagh - PP : Griffin Reinhart - PK : Jake McCabe, Shea Theodore
<b>Penalty Shots</b>
Nail Yakupov, Aleksander Barkov, J.T. Miller, Rickard Rakell, Viktor Arvidsson
<b>Custom OT Lines Forwards</b>
Aleksander Barkov, Alexander Wennberg, Brayden Point, J.T. Miller, Nail Yakupov, Rickard Rakell, Tanner Pearson, Viktor Arvidsson, Brandon Saad, Chris Kreider
<b>Custom OT Lines Defensemen</b>
Ryan McDonagh, Jake McCabe, Justin Faulk, Shea Theodore, Dylan McIlrath

<b>Scratches</b>
Joonas Donskoi (Healthy), Erik Haula (Healthy), Kevin Czuczman (Healthy)</pre></div>
<h1 class="TeamLinesPro_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Darren Helm              Bryan Little             Kris Versteeg            25     1   2  2  
 2 Jason Spezza             T.J. Oshie               Mikkel Boedker           25     1   2  2  
 3 Travis Zajac             Beau Bennett             Ryan Dzingel             25     1   2  2  
 4 David Desharnais         Zach Hyman               Darren Helm              25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Brent Burns                                       25     1   2  2  
 2 Jeff Schultz             Joel Edmundson                                    25     1   2  2  
 3 Damon Severson           Esa Lindell                                       25     1   2  2  
 4 Erik Karlsson            Brent Burns                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Darren Helm              Bryan Little             Kris Versteeg            60     1   2  2  
 2 Jason Spezza             T.J. Oshie               Mikkel Boedker           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Brent Burns                                       60     1   2  2  
 2 Jeff Schultz             Joel Edmundson                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Darren Helm              Bryan Little             60     1   2  2  
 2 Kris Versteeg            Jason Spezza             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Karlsson            Brent Burns              60     1   2  2  
 2 Jeff Schultz             Joel Edmundson           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Darren Helm                                       60     1   2  2  
 2 Bryan Little                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Karlsson            Brent Burns              60     1   2  2  
 2 Jeff Schultz             Joel Edmundson           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Darren Helm              Bryan Little             60     1   2  2  
 2 Kris Versteeg            Jason Spezza             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Karlsson            Brent Burns              60     1   2  2  
 2 Jeff Schultz             Joel Edmundson           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Darren Helm              Bryan Little             Kris Versteeg            Erik Karlsson            Brent Burns              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Darren Helm              Bryan Little             Kris Versteeg            Erik Karlsson            Brent Burns              

<b>Goaltenders</b>
Starting : Jonas Hiller             
Backup : Jake Allen               

<b>Extra Forwards</b>
Normal : Darren Helm, Travis Zajac, Beau Bennett - PP : Brent Burns, Travis Zajac - PK : Beau Bennett
<b>Extra Defensemen</b>
Normal : Damon Severson, Esa Lindell, Jeff Schultz - PP : Damon Severson - PK : Esa Lindell, Jeff Schultz
<b>Penalty Shots</b>
Darren Helm, Bryan Little, Brent Burns, Kris Versteeg, Jason Spezza
<b>Custom OT Lines Forwards</b>
Darren Helm, Bryan Little, Brent Burns, Kris Versteeg, Jason Spezza, Travis Zajac, T.J. Oshie, Mikkel Boedker, Beau Bennett, David Desharnais
<b>Custom OT Lines Defensemen</b>
Erik Karlsson, Brent Burns, Jeff Schultz, Joel Edmundson, Damon Severson

<b>Scratches</b>
Alex Lintuniemi (Healthy), Derek Grant (Healthy), Andre Petersson (Healthy)</pre></div>
<h1 class="TeamLinesPro_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Boone Jenner             Patric Hornqvist         40     0   2  3  
 2 David Krejci             Johan Larsson            Lars Eller               34     0   2  3  
 3 Zemgus Girgensons        Curtis Lazar             Vladislav Namestnikov    20     0   2  3  
 4 Gabriel Dumont           Ahti Oksanen             Joakim Nordstrom         6      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Weber               Rasmus Ristolainen                                40     0   1  4  
 2 Grant Clitsome           Torey Krug                                        30     0   2  3  
 3 Sami Vatanen             Travis Brown                                      20     0   2  3  
 4 Rasmus Ristolainen       Shea Weber                                        10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Boone Jenner             Patric Hornqvist         60     0   0  5  
 2 David Krejci             Vladislav Namestnikov    Johan Larsson            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Weber               Ahti Oksanen                                      60     0   1  4  
 2 Rasmus Ristolainen       Torey Krug                                        40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Zemgus Girgensons        Joakim Nordstrom         60     0   5  0  
 2 Curtis Lazar             Ahti Oksanen             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Rasmus Ristolainen       60     0   5  0  
 2 Grant Clitsome           Travis Brown             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Zemgus Girgensons                                 60     0   5  0  
 2 Curtis Lazar                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Rasmus Ristolainen       60     0   5  0  
 2 Grant Clitsome           Travis Brown             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Claude Giroux            Patric Hornqvist         60     0   2  3  
 2 David Krejci             Boone Jenner             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Torey Krug               60     0   2  3  
 2 Rasmus Ristolainen       Grant Clitsome           40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Boone Jenner             Patric Hornqvist         Rasmus Ristolainen       Torey Krug               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   David Krejci             Joakim Nordstrom         Patric Hornqvist         Shea Weber               Rasmus Ristolainen       

<b>Goaltenders</b>
Starting : Robin Lehner             
Backup : Marek Mazanec            

<b>Extra Forwards</b>
Normal : Claude Giroux, Boone Jenner, Patric Hornqvist - PP : Claude Giroux, Patric Hornqvist - PK : Zemgus Girgensons
<b>Extra Defensemen</b>
Normal : Shea Weber, Rasmus Ristolainen, Torey Krug - PP : Torey Krug - PK : Shea Weber, Rasmus Ristolainen
<b>Penalty Shots</b>
Claude Giroux, Lars Eller, Patric Hornqvist, Boone Jenner, David Krejci
<b>Custom OT Lines Forwards</b>
Claude Giroux, Boone Jenner, David Krejci, Lars Eller, Johan Larsson, Patric Hornqvist, Zemgus Girgensons, Ahti Oksanen, Joakim Nordstrom, Curtis Lazar
<b>Custom OT Lines Defensemen</b>
Shea Weber, Rasmus Ristolainen, Torey Krug, Sami Vatanen, Grant Clitsome

<b>Scratches</b>
Brian Elliott (Healthy)</pre></div>
<h1 class="TeamLinesPro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Paul Stastny             Alex Ovechkin            Bryan Rust               40     1   2  2  
 2 Derek Stepan             Alexander Semin          Jeff Carter              35     1   2  2  
 3 Shawn Matthias           Matt Martin              Tom Wilson               15     4   1  0  
 4 Brad Richardson          Milan Michalek           David Jones              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Anton Stralman           Duncan Keith                                      40     1   2  2  
 2 Ryan Wilson              Christian Ehrhoff                                 30     1   2  2  
 3 Justin Braun             Trevor Daley                                      25     1   2  2  
 4 Anton Stralman           Justin Braun                                      5      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Paul Stastny             Alex Ovechkin            Alexander Semin          60     1   0  4  
 2 Derek Stepan             Milan Michalek           Jeff Carter              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Christian Ehrhoff        Trevor Daley                                      60     1   0  4  
 2 Anton Stralman           Duncan Keith                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Shawn Matthias           Bryan Rust               60     1   4  0  
 2 Derek Stepan             Tom Wilson               40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Wilson              Duncan Keith             60     1   4  0  
 2 Justin Braun             Anton Stralman           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Shawn Matthias                                    60     1   2  2  
 2 Bryan Rust                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Stralman           Justin Braun             60     1   2  2  
 2 Ryan Wilson              Trevor Daley             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Stepan             Alex Ovechkin            60     1   2  2  
 2 Paul Stastny             Jeff Carter              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Stralman           Duncan Keith             60     1   2  2  
 2 Christian Ehrhoff        Trevor Daley             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Paul Stastny             Alex Ovechkin            Jeff Carter              Duncan Keith             Christian Ehrhoff        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Derek Stepan             Alex Ovechkin            Jeff Carter              Duncan Keith             Ryan Wilson              

<b>Goaltenders</b>
Starting : Cam Ward                 
Backup : Anders Nilsson           

<b>Extra Forwards</b>
Normal : Paul Stastny, Alex Ovechkin, Derek Stepan - PP : Bryan Rust, Shawn Matthias - PK : Brad Richardson
<b>Extra Defensemen</b>
Normal : Duncan Keith, Anton Stralman, Christian Ehrhoff - PP : Anton Stralman - PK : Christian Ehrhoff, Trevor Daley
<b>Penalty Shots</b>
Derek Stepan, Alex Ovechkin, Jeff Carter, Paul Stastny, Alexander Semin
<b>Custom OT Lines Forwards</b>
Derek Stepan, Alex Ovechkin, Paul Stastny, Jeff Carter, Alexander Semin, Bryan Rust, Tom Wilson, Milan Michalek, Shawn Matthias, Matt Martin
<b>Custom OT Lines Defensemen</b>
Ryan Wilson, Duncan Keith, Christian Ehrhoff, Trevor Daley, Anton Stralman

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matthew Peca             Jamie Benn               David Perron             25     0   0  5  
 2 Unknown Player           Vladimir Tarasenko       Nick Bjugstad            25     0   0  5  
 3 Derick Brassard          Nick Foligno             Unknown Player           25     1   2  2  
 4 Joey Hishon              Tom Kuhnhackl            Unknown Player           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cody Franson             Brendan Smith                                     25     1   2  2  
 2 Andrew MacDonald         Brandon Manning                                   25     1   2  2  
 3 Jake Muzzin              Brett Kulak                                       25     1   2  2  
 4 Cody Franson             Brendan Smith                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jamie Benn               Nick Bjugstad            Vladimir Tarasenko       60     1   2  2  
 2 Nick Foligno             David Perron             Derick Brassard          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brendan Smith            Cody Franson                                      60     1   2  2  
 2 Andrew MacDonald         Brandon Manning                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jamie Benn               Vladimir Tarasenko       60     1   2  2  
 2 Nick Bjugstad            Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cody Franson             Brendan Smith            60     1   2  2  
 2 Brandon Manning          Andrew MacDonald         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Vladimir Tarasenko                                60     1   2  2  
 2 Tom Kuhnhackl                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Cody Franson             60     1   2  2  
 2 Brett Kulak              Jake Muzzin              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Bjugstad            Jamie Benn               60     1   2  2  
 2 Matthew Peca             Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cody Franson             Brendan Smith            60     1   2  2  
 2 Jake Muzzin              Brett Kulak              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jamie Benn               Vladimir Tarasenko       Nick Bjugstad            Cody Franson             Brendan Smith            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jamie Benn               Vladimir Tarasenko       Nick Bjugstad            Cody Franson             Brendan Smith            

<b>Goaltenders</b>
Starting : Andrey Vasilevskiy       
Backup : Olivier Roy              

<b>Extra Forwards</b>
Normal : Unknown Player, Jamie Benn, Nick Bjugstad - PP : Vladimir Tarasenko, Nick Foligno - PK : Joey Hishon
<b>Extra Defensemen</b>
Normal : Brendan Smith, Cody Franson, Andrew MacDonald - PP : Brendan Smith - PK : Brandon Manning, Cody Franson
<b>Penalty Shots</b>
Unknown Player, Jamie Benn, Nick Bjugstad, Vladimir Tarasenko, Nick Foligno
<b>Custom OT Lines Forwards</b>
Joey Hishon, Unknown Player, Jamie Benn, Vladimir Tarasenko, Nick Bjugstad, Nick Foligno, Derick Brassard, David Perron, Matthew Peca, Unknown Player
<b>Custom OT Lines Defensemen</b>
Brendan Smith, Cody Franson, Andrew MacDonald, Brandon Manning, Jake Muzzin

<b>Scratches</b>
Zach Aston-Reese (Healthy), Tyler Motte (Healthy), J.T. Brown (Healthy), Philip Lane (Torn Left MCL Injury)</pre></div>
<h1 class="TeamLinesPro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joe Veleno               Tyler Ennis              Jonathan Huberdeau       30     1   2  2  
 2 Jacob Josefson           A.J. Greer               Matthew Nieto            30     1   2  2  
 3 Nicolas Petan            James Van Riemsdyk       Alexander Radulov        20     1   2  2  
 4 Mikael Backlund          Sven Andrighetto         Myles Bell               20     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Murray              Adam Larsson                                      35     1   2  2  
 2 Frank Corrado            Aaron Ness                                        35     1   2  2  
 3 Alec Martinez            Mattias Backman                                   30     1   2  2  
 4 Ryan Murray              Adam Larsson                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Ennis              Jonathan Huberdeau       Matthew Nieto            50     1   2  2  
 2 Nicolas Petan            Jacob Josefson           Alexander Radulov        50     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Larsson             Frank Corrado                                     50     1   2  2  
 2 Ryan Murray              Myles Bell                                        50     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mikael Backlund          Matthew Nieto            60     1   2  2  
 2 Joe Veleno               A.J. Greer               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Larsson             Alec Martinez            50     1   2  2  
 2 Mattias Backman          Ryan Murray              50     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mikael Backlund                                   50     1   2  2  
 2 Myles Bell                                        50     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Murray              Adam Larsson             50     1   2  2  
 2 Mattias Backman          Alec Martinez            50     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Ennis              Jonathan Huberdeau       50     1   2  2  
 2 Jacob Josefson           Matthew Nieto            50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Murray              Aaron Ness               50     1   2  2  
 2 Adam Larsson             Frank Corrado            50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Ennis              Matthew Nieto            Jonathan Huberdeau       Adam Larsson             Myles Bell               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikael Backlund          A.J. Greer               Myles Bell               Ryan Murray              Adam Larsson             

<b>Goaltenders</b>
Starting : Benjamin Conz            
Backup : Mike Smith               

<b>Extra Forwards</b>
Normal : Jonathan Huberdeau, Tyler Ennis, Matthew Nieto - PP : Tyler Ennis, Jonathan Huberdeau - PK : Myles Bell
<b>Extra Defensemen</b>
Normal : Mattias Backman, Ryan Murray, Adam Larsson - PP : Myles Bell - PK : Adam Larsson, Ryan Murray
<b>Penalty Shots</b>
Alexander Radulov, Jonathan Huberdeau, Tyler Ennis, James Van Riemsdyk, Matthew Nieto
<b>Custom OT Lines Forwards</b>
Tyler Ennis, Jonathan Huberdeau, Jacob Josefson, Matthew Nieto, Nicolas Petan, James Van Riemsdyk, Mikael Backlund, Alexander Radulov, Sven Andrighetto, Myles Bell
<b>Custom OT Lines Defensemen</b>
Adam Larsson, Ryan Murray, Frank Corrado, Aaron Ness, Alec Martinez

<b>Scratches</b>
Calvin de Haan (Healthy), Brock McGinn (Healthy), Jean-François Bérubé (Healthy)</pre></div>
<h1 class="TeamLinesPro_SEA"><a id="SeattleSaints">Seattle Saints</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Saints Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#SeattleSaints">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#SeattleSaints">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#SeattleSaints">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#SeattleSaints">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#SeattleSaints">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#SeattleSaints">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#SeattleSaints">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#SeattleSaints">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#SeattleSaints">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#SeattleSaints">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#SeattleSaints">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#SeattleSaints">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleSaints');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleSaints" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mika Zibanejad           Max Pacioretty           Valeri Nichushkin        35     0   1  4  
 2 Patrik Berglund          Chandler Stephenson      Cody Hodgson             30     0   2  3  
 3 Anders Lee               Carl Hagelin             Ben Smith                25     0   2  3  
 4 Dana Tyrell              Patrice Cormier          Pavel Padakin            10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Urbom          Darnell Nurse                                     42     0   3  2  
 2 Keith Aulie              Taylor Doherty                                    33     0   3  2  
 3 Raman Hrabarenka         Mattias Ekholm                                    25     0   3  2  
 4 Mattias Ekholm           Raman Hrabarenka                                  0      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrik Berglund          Max Pacioretty           Valeri Nichushkin        60     0   0  5  
 2 Mika Zibanejad           Carl Hagelin             Cody Hodgson             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Ekholm           Keith Aulie                                       60     0   0  5  
 2 Taylor Doherty           Alexander Urbom                                   40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrik Berglund          Pavel Padakin            60     0   5  0  
 2 Chandler Stephenson      Patrice Cormier          40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Doherty           Alexander Urbom          60     0   5  0  
 2 Mattias Ekholm           Keith Aulie              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Patrik Berglund                                   60     0   5  0  
 2 Chandler Stephenson                               40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Doherty           Alexander Urbom          60     0   5  0  
 2 Mattias Ekholm           Keith Aulie              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrik Berglund          Carl Hagelin             60     0   2  3  
 2 Dana Tyrell              Max Pacioretty           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Keith Aulie              Alexander Urbom          60     0   3  2  
 2 Taylor Doherty           Mattias Ekholm           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mika Zibanejad           Max Pacioretty           Valeri Nichushkin        Mattias Ekholm           Darnell Nurse            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chandler Stephenson      Patrice Cormier          Pavel Padakin            Keith Aulie              Alexander Urbom          

<b>Goaltenders</b>
Starting : Jacob Markstrom          
Backup : John Gibson              

<b>Extra Forwards</b>
Normal : Max Pacioretty, Valeri Nichushkin, Patrik Berglund - PP : Carl Hagelin, Patrik Berglund - PK : Patrik Berglund
<b>Extra Defensemen</b>
Normal : Taylor Doherty, Mattias Ekholm, Alexander Urbom - PP : Taylor Doherty - PK : Mattias Ekholm, Keith Aulie
<b>Penalty Shots</b>
Patrik Berglund, Valeri Nichushkin, Max Pacioretty, Mika Zibanejad, Dana Tyrell
<b>Custom OT Lines Forwards</b>
Patrik Berglund, Valeri Nichushkin, Max Pacioretty, Mika Zibanejad, Dana Tyrell, Ben Smith, Patrice Cormier, Carl Hagelin, Cody Hodgson, Chandler Stephenson
<b>Custom OT Lines Defensemen</b>
Alexander Urbom, Taylor Doherty, Mattias Ekholm, Keith Aulie, Darnell Nurse

<b>Scratches</b>
Tomas Kundratek (Healthy), Matthew Irwin (Healthy), Jordan Schneider (Healthy)</pre></div>
<h1 class="TeamLinesPro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan O'Reilly            Tyler Johnson            Clayton Keller           38     0   1  4  
 2 Mark Scheifele           Evgeny Grachev           Drew Stafford            32     0   1  4  
 3 Joe Thornton             Jake Guentzel            Jordan Caron             25     1   2  2  
 4 Tuomo Ruutu              William Carrier          Dustin Brown             5      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Klein              Alex Goligoski                                    40     1   2  2  
 2 Colton Parayko           Marc-Andre Bourdon                                30     0   2  3  
 3 Will Butcher             Ian Cole                                          20     1   2  2  
 4 Ian Cole                 Kevin Klein                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joe Thornton             Mark Scheifele           Clayton Keller           60     1   0  4  
 2 Ryan O'Reilly            Evgeny Grachev           Tyler Johnson            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Goligoski           Will Butcher                                      60     1   0  4  
 2 Colton Parayko           Ian Cole                                          40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joe Thornton             Dustin Brown             60     1   4  0  
 2 Ryan O'Reilly            Jordan Caron             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Klein              Marc-Andre Bourdon       60     1   4  0  
 2 Alex Goligoski           Ian Cole                 40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dustin Brown                                      60     1   2  2  
 2 Jordan Caron                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Klein              Marc-Andre Bourdon       60     1   2  2  
 2 Colton Parayko           Ian Cole                 40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan O'Reilly            Clayton Keller           60     1   2  2  
 2 Mark Scheifele           Evgeny Grachev           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Guentzel            Tyler Johnson            60     1   2  2  
 2 Colton Parayko           Alex Goligoski           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Ryan O'Reilly            Clayton Keller           Alex Goligoski           Will Butcher             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joe Thornton             Dustin Brown             Ryan O'Reilly            Kevin Klein              Marc-Andre Bourdon       

<b>Goaltenders</b>
Starting : Jonathan Quick           
Backup : Aaron Dell               

<b>Extra Forwards</b>
Normal : Mark Scheifele, Tyler Johnson, Joe Thornton - PP : Drew Stafford, Jake Guentzel - PK : Jordan Caron
<b>Extra Defensemen</b>
Normal : Marc-Andre Bourdon, Alex Goligoski, Ian Cole - PP : Marc-Andre Bourdon - PK : Marc-Andre Bourdon, Will Butcher
<b>Penalty Shots</b>
Clayton Keller, Evgeny Grachev, Mark Scheifele, Ryan O'Reilly, Tyler Johnson
<b>Custom OT Lines Forwards</b>
Dustin Brown, Jordan Caron, Mark Scheifele, Evgeny Grachev, Jake Guentzel, Joe Thornton, Ryan O'Reilly, Tuomo Ruutu, Clayton Keller, Tyler Johnson
<b>Custom OT Lines Defensemen</b>
Will Butcher, Alex Goligoski, Colton Parayko, Ian Cole, Marc-Andre Bourdon

<b>Scratches</b>
Liam Reddox (Healthy), Kevin Dallman (Healthy), Leland Irving (Healthy)</pre></div>
<h1 class="TeamLinesPro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Steven Stamkos           Michael Grabner          Alex Galchenyuk          35     0   1  4  
 2 Nick Cousins             Brandon McMillan         Devante Smith-Pelly      28     0   1  4  
 3 Jean-Gabriel Pageau      Phillip Danault          Scott Kosmachuk          22     0   2  3  
 4 Rocco Grimaldi           Steven Stamkos           Jason Pominville         15     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nikita Zadorov           P.K. Subban                                       40     0   3  2  
 2 Marc Staal               Mike Green                                        35     0   3  2  
 3 Nathan Beaulieu          Jakob Chychrun                                    25     0   4  1  
 4 Marc Staal               Mike Green                                        0      0   0  5  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Steven Stamkos           Devante Smith-Pelly      Alex Galchenyuk          60     0   0  5  
 2 Nick Cousins             Brandon McMillan         Scott Kosmachuk          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 P.K. Subban              Michael Grabner                                   60     0   0  5  
 2 Nathan Beaulieu          Mike Green                                        40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jean-Gabriel Pageau      Devante Smith-Pelly      50     0   5  0  
 2 Phillip Danault          Alex Galchenyuk          50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Jakob Chychrun           50     0   5  0  
 2 Nikita Zadorov           P.K. Subban              50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jean-Gabriel Pageau                               50     0   5  0  
 2 Phillip Danault                                   50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Jakob Chychrun           50     0   5  0  
 2 Nikita Zadorov           P.K. Subban              50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Steven Stamkos           Alex Galchenyuk          60     0   1  4  
 2 Jean-Gabriel Pageau      Phillip Danault          40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zadorov           P.K. Subban              60     0   3  2  
 2 Marc Staal               Mike Green               40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Steven Stamkos           Michael Grabner          Alex Galchenyuk          P.K. Subban              Mike Green               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jean-Gabriel Pageau      Phillip Danault          Devante Smith-Pelly      Marc Staal               Nikita Zadorov           

<b>Goaltenders</b>
Starting : Tuukka Rask              
Backup : Malcolm Subban           

<b>Extra Forwards</b>
Normal : Phillip Danault, Alex Galchenyuk, Devante Smith-Pelly - PP : Phillip Danault, Nick Cousins - PK : Phillip Danault
<b>Extra Defensemen</b>
Normal : Mike Green, Jakob Chychrun, Marc Staal - PP : Mike Green - PK : Nathan Beaulieu, Marc Staal
<b>Penalty Shots</b>
Steven Stamkos, Alex Galchenyuk, Devante Smith-Pelly, Phillip Danault, Nick Cousins
<b>Custom OT Lines Forwards</b>
Steven Stamkos, Michael Grabner, Devante Smith-Pelly, Alex Galchenyuk, Phillip Danault, Jean-Gabriel Pageau, Brandon McMillan, Nick Cousins, Jason Pominville, Scott Kosmachuk
<b>Custom OT Lines Defensemen</b>
Mike Green, Jakob Chychrun, Marc Staal, Nikita Zadorov, Nathan Beaulieu

<b>Scratches</b>
Radko Gudas (Sprained Right Finger Injury), Drake Caggiula (Healthy), Owen Tippett (Healthy)</pre></div>
<h1 class="TeamLinesPro_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Sebastian Aho            Phil Kessel              25     0   1  4  
 2 Mikko Rantanen           Nazem Kadri              Teemu Pulkkinen          25     0   1  4  
 3 Louis Leblanc            Zack Kassian             Tyler Biggs              25     1   2  2  
 4 Sam Carrick              Taylor Pyatt             Josh Leivo               25     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Luke Schenn              Morgan Rielly                                     25     0   2  3  
 2 Tobias Enstrom           Brady Skjei                                       25     1   2  2  
 3 Jesse Blacker            Theo Peckham                                      25     1   3  1  
 4 Luke Schenn              Morgan Rielly                                     25     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Sebastian Aho            Phil Kessel              60     0   0  5  
 2 Mikko Rantanen           Nazem Kadri              Teemu Pulkkinen          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tobias Enstrom           Brady Skjei                                       60     0   1  4  
 2 Morgan Rielly            Jesse Blacker                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Louis Leblanc            Taylor Pyatt             60     0   4  1  
 2 Sam Carrick              Tyler Biggs              40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luke Schenn              Theo Peckham             60     0   5  0  
 2 Brady Skjei              Morgan Rielly            40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Louis Leblanc                                     60     0   5  0  
 2 Sam Carrick                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Theo Peckham             Luke Schenn              60     0   5  0  
 2 Brady Skjei              Morgan Rielly            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Backstrom        Phil Kessel              60     0   2  3  
 2 Louis Leblanc            Tyler Biggs              40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luke Schenn              Morgan Rielly            60     1   2  2  
 2 Tobias Enstrom           Brady Skjei              40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Nazem Kadri              Phil Kessel              Morgan Rielly            Tobias Enstrom           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Louis Leblanc            Taylor Pyatt             Zack Kassian             Luke Schenn              Brady Skjei              

<b>Goaltenders</b>
Starting : Steve Mason              
Backup : Dustin Tokarski          

<b>Extra Forwards</b>
Normal : Mikko Rantanen, Tyler Biggs, Louis Leblanc - PP : Mikko Rantanen, Louis Leblanc - PK : Tyler Biggs
<b>Extra Defensemen</b>
Normal : Brady Skjei, Jesse Blacker, Theo Peckham - PP : Tobias Enstrom - PK : Brady Skjei, Morgan Rielly
<b>Penalty Shots</b>
Phil Kessel, Nazem Kadri, Nicklas Backstrom, Teemu Pulkkinen, Mikko Rantanen
<b>Custom OT Lines Forwards</b>
Phil Kessel, Nicklas Backstrom, Nazem Kadri, Mikko Rantanen, Sebastian Aho, Teemu Pulkkinen, Louis Leblanc, Zack Kassian, Tyler Biggs, Taylor Pyatt
<b>Custom OT Lines Defensemen</b>
Tobias Enstrom, Morgan Rielly, Luke Schenn, Brady Skjei, Theo Peckham

<b>Scratches</b>
Andrew Agozzino (Healthy), James Melindy (Healthy)</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brandon Sutter           Evander Kane             Mikhail Grigorenko       25     1   2  2  
 2 Ryan Kesler              Nicolas Kerdiles         Tyler Seguin             25     1   2  2  
 3 Dmitrij Jaskin           Christian Dvorak         T.J. Galiardi            25     1   2  2  
 4 Nick Shore               Matteson Iacopelli       Cooper Marody            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Edler          Aaron Ekblad                                      25     1   2  2  
 2 Dougie Hamilton          Jason Demers                                      25     1   2  2  
 3 John Klingberg           Brad Hunt                                         25     1   2  2  
 4 Alexander Edler          Aaron Ekblad                                      25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Seguin             Evander Kane             Brandon Sutter           60     1   2  2  
 2 Ryan Kesler              T.J. Galiardi            Mikhail Grigorenko       40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Edler          Aaron Ekblad                                      60     1   2  2  
 2 Dougie Hamilton          John Klingberg                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Seguin             Ryan Kesler              60     1   2  2  
 2 Evander Kane             Brandon Sutter           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Aaron Ekblad             60     1   2  2  
 2 Dougie Hamilton          Jason Demers             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tyler Seguin                                      60     1   2  2  
 2 Ryan Kesler                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Aaron Ekblad             60     1   2  2  
 2 Dougie Hamilton          Jason Demers             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Seguin             Ryan Kesler              60     1   2  2  
 2 Evander Kane             Brandon Sutter           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Aaron Ekblad             60     1   2  2  
 2 John Klingberg           Jason Demers             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Seguin             Evander Kane             Brandon Sutter           Alexander Edler          Aaron Ekblad             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Seguin             Evander Kane             Brandon Sutter           Alexander Edler          Aaron Ekblad             

<b>Goaltenders</b>
Starting : Cory Schneider           
Backup : Darcy Kuemper            

<b>Extra Forwards</b>
Normal : Cooper Marody, Dmitrij Jaskin, Nicolas Kerdiles - PP : Cooper Marody, Dmitrij Jaskin - PK : Nicolas Kerdiles
<b>Extra Defensemen</b>
Normal : John Klingberg, Aaron Ekblad, Alexander Edler - PP : John Klingberg - PK : Brad Hunt, Alexander Edler
<b>Penalty Shots</b>
Tyler Seguin, Ryan Kesler, Evander Kane, Brandon Sutter, T.J. Galiardi
<b>Custom OT Lines Forwards</b>
Tyler Seguin, Ryan Kesler, Evander Kane, Brandon Sutter, T.J. Galiardi, Mikhail Grigorenko, Dmitrij Jaskin, Nicolas Kerdiles, Nick Shore, Christian Dvorak
<b>Custom OT Lines Defensemen</b>
Alexander Edler, Aaron Ekblad, John Klingberg, Jason Demers, Brad Hunt

<b>Scratches</b>
Ludwig Blomstrand (Healthy)</pre></div>
<h1 class="TeamLinesPro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Dal Colle        James Neal               Ty Rattie                35     1   2  2  
 2 Artem Anisimov           Saku Maenalanen          Pavel Buchnevich         30     1   2  2  
 3 Jacob De La Rose         Kyle Clifford            Emerson Etem             25     1   2  2  
 4 Joe Colborne             Jason Zucker             Alexei Mitrofanov        10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mikhail Sergachev        Jack Johnson                                      35     1   2  2  
 2 Ryan Ellis               Yegor Rykov                                       30     1   2  2  
 3 Braydon Coburn           Chaz Reddekopp                                    25     1   2  2  
 4 Jack Johnson             Braydon Coburn                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Dal Colle        Pavel Buchnevich         Saku Maenalanen          60     1   2  2  
 2 Artem Anisimov           Ty Rattie                James Neal               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jack Johnson             Braydon Coburn                                    60     1   2  2  
 2 Ryan Ellis               Mikhail Sergachev                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob De La Rose         Kyle Clifford            60     1   2  2  
 2 Joe Colborne             Emerson Etem             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Braydon Coburn           Jack Johnson             60     1   2  2  
 2 Mikhail Sergachev        Ryan Ellis               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 James Neal                                        60     1   2  2  
 2 Kyle Clifford                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Braydon Coburn           Jack Johnson             60     1   2  2  
 2 Chaz Reddekopp           Yegor Rykov              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob De La Rose         James Neal               60     1   2  2  
 2 Alexei Mitrofanov        Ty Rattie                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Johnson             Braydon Coburn           60     1   2  2  
 2 Yegor Rykov              Chaz Reddekopp           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kyle Clifford            James Neal               Emerson Etem             Jack Johnson             Braydon Coburn           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kyle Clifford            James Neal               Emerson Etem             Jack Johnson             Braydon Coburn           

<b>Goaltenders</b>
Starting : Braden Holtby            
Backup : Pavel Francouz           

<b>Extra Forwards</b>
Normal : Emerson Etem, Kyle Clifford, James Neal - PP : Emerson Etem, Ty Rattie - PK : James Neal
<b>Extra Defensemen</b>
Normal : Braydon Coburn, Jack Johnson, Ryan Ellis - PP : Braydon Coburn - PK : Mikhail Sergachev, Jack Johnson
<b>Penalty Shots</b>
Emerson Etem, Kyle Clifford, James Neal, Ty Rattie, Jacob De La Rose
<b>Custom OT Lines Forwards</b>
James Neal, Emerson Etem, Kyle Clifford, Ty Rattie, Jacob De La Rose, Artem Anisimov, Joe Colborne, Saku Maenalanen, Michael Dal Colle, Pavel Buchnevich
<b>Custom OT Lines Defensemen</b>
Braydon Coburn, Jack Johnson, Ryan Ellis, Mikhail Sergachev, Yegor Rykov

<b>Scratches</b>
Dion Phaneuf (Broken Left Index Finger Injury), Gustav Possler (Healthy), Michael Matheson (Torn Left Knee Ligaments Injury), Theodor Blueger (Healthy), Pavel Zacha (Left Foot Injury)
Lawrence Pilut (Healthy), Kyle Capobianco (Sprained Left Finger Injury)</pre></div>
<h1 class="TeamLinesPro_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL8-PRE-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL8-PRE-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL8-PRE-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL8-PRE-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PRE-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL8-PRE-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL8-PRE-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL8-PRE-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL8-PRE-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PRE-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL8-PRE-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL8-PRE-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andre Burakovsky         Loui Eriksson            Matt Calvert             25     1   2  2  
 2 Ryan Strome              Evgeny Dadonov           Matt Halischuk           25     1   2  2  
 3 Casey Cizikas            Nino Niederreiter        Brendan Perlini          25     1   2  2  
 4 Andrei Loktionov         Marcus Foligno           Loui Eriksson            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Luca Sbisa               Kris Russell                                      25     1   2  2  
 2 Jake Gardiner            David Schlemko                                    25     1   2  2  
 3 Stefan Elliott           Magnus Nygren                                     25     1   2  2  
 4 Ben Chiarot              Luca Sbisa                                        25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andre Burakovsky         Loui Eriksson            Nino Niederreiter        60     1   2  2  
 2 Ryan Strome              Marcus Foligno           Casey Cizikas            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Luca Sbisa               Kris Russell                                      60     1   2  2  
 2 Jake Gardiner            David Schlemko                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Loui Eriksson            Nino Niederreiter        60     1   2  2  
 2 Marcus Foligno           Andre Burakovsky         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Kris Russell             60     1   2  2  
 2 Jake Gardiner            David Schlemko           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Loui Eriksson                                     60     1   2  2  
 2 Nino Niederreiter                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Kris Russell             60     1   2  2  
 2 Jake Gardiner            David Schlemko           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Loui Eriksson            Nino Niederreiter        60     1   2  2  
 2 Marcus Foligno           Andre Burakovsky         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Kris Russell             60     1   2  2  
 2 Jake Gardiner            David Schlemko           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andre Burakovsky         Loui Eriksson            Nino Niederreiter        Luca Sbisa               Kris Russell             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andre Burakovsky         Loui Eriksson            Nino Niederreiter        Luca Sbisa               Kris Russell             

<b>Goaltenders</b>
Starting : Kari Lehtonen            
Backup : Jordan Binnington        

<b>Extra Forwards</b>
Normal : Casey Cizikas, Andrei Loktionov, Loui Eriksson - PP : Casey Cizikas, Andrei Loktionov - PK : Loui Eriksson
<b>Extra Defensemen</b>
Normal : Stefan Elliott, Magnus Nygren, Ben Chiarot - PP : Stefan Elliott - PK : Magnus Nygren, Ben Chiarot
<b>Penalty Shots</b>
Loui Eriksson, Nino Niederreiter, Marcus Foligno, Andre Burakovsky, Ryan Strome
<b>Custom OT Lines Forwards</b>
Loui Eriksson, Nino Niederreiter, Marcus Foligno, Andre Burakovsky, Ryan Strome, Casey Cizikas, Brendan Perlini, Andrei Loktionov, Matt Calvert, Evgeny Dadonov
<b>Custom OT Lines Defensemen</b>
Luca Sbisa, Kris Russell, Jake Gardiner, David Schlemko, Stefan Elliott

<b>Scratches</b>
Filip Zadina (Healthy), Brady Tkachuk (Healthy), Oliver Wahlstrom (Healthy)</pre></div>
<?php include "Footer.php";?>
