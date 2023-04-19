<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Pro Team Lines</title>
<script src="IHWC-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="IHWC-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"IHWC-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"IHWC-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#ALLEMAGNE">ALLEMAGNE</a> | <a href="#CANADA">CANADA</a> | <a href="#ETATS-UNIS">ETATS-UNIS</a> | <a href="#FINLANDE">FINLANDE</a> | <a href="#LETTONIE">LETTONIE</a> | <a href="#REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a> | <a href="#RUSSIE">RUSSIE</a> | <a href="#SLOVAQUIE">SLOVAQUIE</a> | <a href="#SUEDE">SUEDE</a> | <a href="#SUISSE">SUISSE</a> | <a href="#TEAMWORLD">TEAM WORLD</a> | <a href="#U23NORTHAMERICA">U23 NORTH AMERICA</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_ALL"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">ALLEMAGNE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#ALLEMAGNE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#ALLEMAGNE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#ALLEMAGNE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#ALLEMAGNE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#ALLEMAGNE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#ALLEMAGNE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#ALLEMAGNE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#ALLEMAGNE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#ALLEMAGNE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#ALLEMAGNE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#ALLEMAGNE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#ALLEMAGNE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ALLEMAGNE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ALLEMAGNE" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tobias Rieder            Daniel Pietta            Dominik Kahun            40     1   2  2  
 2 Nico Sturm               Laurin Braun             Lean Bergmann            30     1   2  2  
 3 Markus Eisenschmid       Philip Gogulla           Dominik Bokk             20     1   2  2  
 4 Tim Stützle              Lukas Reichel            Eduard Lewandowski       10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Yannic Seidenberg                                 40     1   2  2  
 2 Jonas Müller             Moritz Seider                                     30     1   2  2  
 3 Simon Sezemsky           Leon Gawanke                                      20     1   2  2  
 4 Konrad Abeltshauser      Yannic Seidenberg                                 10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tobias Rieder            Daniel Pietta            Dominik Kahun            60     1   2  2  
 2 Nico Sturm               Laurin Braun             Lean Bergmann            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Yannic Seidenberg                                 60     1   2  2  
 2 Jonas Müller             Moritz Seider                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tobias Rieder            Daniel Pietta            60     1   2  2  
 2 Dominik Kahun            Nico Sturm               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Yannic Seidenberg        60     1   2  2  
 2 Jonas Müller             Moritz Seider            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tobias Rieder                                     60     1   2  2  
 2 Daniel Pietta                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Yannic Seidenberg        60     1   2  2  
 2 Jonas Müller             Moritz Seider            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tobias Rieder            Daniel Pietta            60     1   2  2  
 2 Dominik Kahun            Nico Sturm               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Yannic Seidenberg        60     1   2  2  
 2 Jonas Müller             Moritz Seider            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tobias Rieder            Daniel Pietta            Dominik Kahun            Konrad Abeltshauser      Yannic Seidenberg        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tobias Rieder            Daniel Pietta            Dominik Kahun            Konrad Abeltshauser      Yannic Seidenberg        

<b>Goaltenders</b>
Starting : Danny aus den Birken     
Backup : Mathias Niederberger     

<b>Extra Forwards</b>
Normal : Philip Gogulla, Dominik Bokk, Eduard Lewandowski - PP : Philip Gogulla, Dominik Bokk - PK : Eduard Lewandowski
<b>Extra Defensemen</b>
Normal : Simon Sezemsky, Leon Gawanke, Jonas Müller - PP : Simon Sezemsky - PK : Leon Gawanke, Jonas Müller
<b>Penalty Shots</b>
Tobias Rieder, Yannic Seidenberg, Daniel Pietta, Dominik Kahun, Nico Sturm
<b>Custom OT Lines Forwards</b>
Tobias Rieder, Yannic Seidenberg, Daniel Pietta, Dominik Kahun, Nico Sturm, Laurin Braun, Simon Sezemsky, Philip Gogulla, Lean Bergmann, Dominik Bokk
<b>Custom OT Lines Defensemen</b>
Konrad Abeltshauser, Yannic Seidenberg, Jonas Müller, Moritz Seider, Simon Sezemsky

<b>Scratches</b>
Brooks Macek (Healthy), Marc Michaelis (Healthy), Denis Reul (Fractured Bone in Left Hand Injury)</pre></div>
<h1 class="TeamLinesPro_CAN"><a id="CANADA">CANADA</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">CANADA Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#CANADA">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#CANADA">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#CANADA">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#CANADA">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#CANADA">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#CANADA">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#CANADA">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#CANADA">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#CANADA">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#CANADA">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#CANADA">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#CANADA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CANADA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CANADA" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Steven Stamkos           Taylor Hall              Sam Reinhart             26     0   1  4  
 2 Jonathan Toews           Brad Marchand            Mark Stone               26     0   1  4  
 3 John Tavares             Bo Horvat                Ty Rattie                24     0   1  4  
 4 Logan Couture            Phillip Danault          Jonathan Drouin          24     0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Luke Schenn                                       34     0   3  2  
 2 Brent Burns              David Musil                                       33     0   1  4  
 3 Cody Ceci                Ryan Ellis                                        33     0   1  4  
 4 Cam Fowler               Brent Burns                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Steven Stamkos           Taylor Hall              Logan Couture            60     0   0  5  
 2 John Tavares             Brad Marchand            Sam Reinhart             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Brent Burns                                       60     0   0  5  
 2 Cody Ceci                Ryan Ellis                                        40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           Bo Horvat                60     0   5  0  
 2 Phillip Danault          Brad Marchand            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cody Ceci                Luke Schenn              60     0   5  0  
 2 Cam Fowler               David Musil              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Toews                                    60     0   5  0  
 2 Phillip Danault                                   40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cody Ceci                Luke Schenn              60     0   5  0  
 2 Cam Fowler               David Musil              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sam Reinhart             Mark Stone               60     1   1  3  
 2 Jonathan Drouin          Ty Rattie                40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Brent Burns              60     1   1  3  
 2 Luke Schenn              David Musil              40     1   1  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Steven Stamkos           Taylor Hall              Mark Stone               Cam Fowler               Brent Burns              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Phillip Danault          Brent Burns              Luke Schenn              David Musil              

<b>Goaltenders</b>
Starting : Carey Price              
Backup : Braden Holtby            

<b>Extra Forwards</b>
Normal : Ty Rattie, Logan Couture, Bo Horvat - PP : John Tavares, Mark Stone - PK : Bo Horvat
<b>Extra Defensemen</b>
Normal : Luke Schenn, Ryan Ellis, Cody Ceci - PP : Luke Schenn - PK : Ryan Ellis, Brent Burns
<b>Penalty Shots</b>
Steven Stamkos, Taylor Hall, Jonathan Toews, Brad Marchand, John Tavares
<b>Custom OT Lines Forwards</b>
Steven Stamkos, Taylor Hall, Jonathan Toews, Mark Stone, John Tavares, Brad Marchand, Sam Reinhart, Logan Couture, Ty Rattie, Bo Horvat
<b>Custom OT Lines Defensemen</b>
Cam Fowler, Brent Burns, Ryan Ellis, Luke Schenn, Cody Ceci

<b>Scratches</b>
Sean Monahan (Healthy), Brayden Schenn (Healthy), Colton Parayko (Healthy)</pre></div>
<h1 class="TeamLinesPro_USA"><a id="ETATS-UNIS">ETATS-UNIS</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">ETATS-UNIS Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#ETATS-UNIS">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#ETATS-UNIS">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#ETATS-UNIS">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#ETATS-UNIS">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#ETATS-UNIS">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#ETATS-UNIS">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#ETATS-UNIS">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#ETATS-UNIS">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#ETATS-UNIS">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#ETATS-UNIS">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#ETATS-UNIS">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#ETATS-UNIS">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ETATS-UNIS');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ETATS-UNIS" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Johnny Gaudreau          Blake Wheeler            35     0   2  3  
 2 Derek Stepan             Max Pacioretty           Phil Kessel              35     0   2  3  
 3 Cole Cassels             Kyle Connor              Emerson Etem             20     0   2  3  
 4 Tyler Johnson            Zach Parise              Ryan Callahan            10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyler Myers              Jacob Trouba                                      35     0   3  2  
 2 Zach Bogosian            John Carlson                                      35     0   3  2  
 3 Jake Gardiner            Ryan Suter                                        20     0   3  2  
 4 Tyler Myers              Ryan Suter                                        10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Johnny Gaudreau          Phil Kessel              60     0   0  5  
 2 Derek Stepan             Max Pacioretty           Blake Wheeler            40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyler Myers              Jacob Trouba                                      60     0   1  4  
 2 Zach Bogosian            John Carlson                                      40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cole Cassels             Ryan Callahan            60     0   4  1  
 2 Derek Stepan             Emerson Etem             40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Myers              Ryan Suter               60     0   5  0  
 2 Zach Bogosian            Jacob Trouba             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Cole Cassels                                      60     0   4  1  
 2 Derek Stepan                                      40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Myers              Ryan Suter               60     0   5  0  
 2 Zach Bogosian            Jacob Trouba             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Eichel              Johnny Gaudreau          60     0   2  3  
 2 Derek Stepan             Phil Kessel              40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Myers              Ryan Suter               60     0   3  2  
 2 Zach Bogosian            John Carlson             40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Johnny Gaudreau          Phil Kessel              Tyler Myers              John Carlson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Derek Stepan             Zach Parise              Emerson Etem             Zach Bogosian            Ryan Suter               

<b>Goaltenders</b>
Starting : Ben Bishop               
Backup : Connor Hellebuyck        

<b>Extra Forwards</b>
Normal : Jack Eichel, Johnny Gaudreau, Blake Wheeler - PP : Jack Eichel, Phil Kessel - PK : Cole Cassels
<b>Extra Defensemen</b>
Normal : Tyler Myers, John Carlson, Jake Gardiner - PP : John Carlson - PK : Zach Bogosian, Ryan Suter
<b>Penalty Shots</b>
Johnny Gaudreau, Phil Kessel, Jack Eichel, Max Pacioretty, Derek Stepan
<b>Custom OT Lines Forwards</b>
Jack Eichel, Johnny Gaudreau, Phil Kessel, Blake Wheeler, Max Pacioretty, Derek Stepan, Kyle Connor, Zach Parise, Emerson Etem, Cole Cassels
<b>Custom OT Lines Defensemen</b>
Tyler Myers, John Carlson, Jake Gardiner, Ryan Suter, Zach Bogosian

<b>Scratches</b>
James Van Riemsdyk (Healthy), Kevin Labanc (Healthy), Jamie McBain (Healthy)</pre></div>
<h1 class="TeamLinesPro_FIN"><a id="FINLANDE">FINLANDE</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">FINLANDE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#FINLANDE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#FINLANDE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#FINLANDE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#FINLANDE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#FINLANDE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#FINLANDE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#FINLANDE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#FINLANDE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#FINLANDE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#FINLANDE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#FINLANDE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#FINLANDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FINLANDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FINLANDE" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikko Rantanen           Sebastian Aho            Jesse Puljujarvi         40     0   1  4  
 2 Roope Hintz              Saku Maenalanen          Teemu Pulkkinen          30     0   2  3  
 3 Miikka Salomaki          Kasperi Kapanen          Toni Rajala              20     1   2  2  
 4 Tuomo Ruutu              Ville Leskinen           Joel Armia               10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Miro Heiskanen           Olli Maatta                                       40     0   2  3  
 2 Jani Hakanpaa            Sami Vatanen                                      30     1   2  2  
 3 Ville Pokka              Julius Honka                                      20     1   2  2  
 4 Miro Heiskanen           Olli Maatta                                       10     2   3  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sebastian Aho            Saku Maenalanen          Mikko Rantanen           60     0   0  5  
 2 Roope Hintz              Toni Rajala              Jesse Puljujarvi         40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Miro Heiskanen           Olli Maatta                                       60     0   1  4  
 2 Sami Vatanen             Ville Pokka                                       40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Miikka Salomaki          Ville Leskinen           60     1   3  1  
 2 Tuomo Ruutu              Joel Armia               40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jani Hakanpaa            Olli Maatta              60     0   5  0  
 2 Miro Heiskanen           Sami Vatanen             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tuomo Ruutu                                       60     1   2  2  
 2 Miikka Salomaki                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jani Hakanpaa            Olli Maatta              60     1   2  2  
 2 Miro Heiskanen           Sami Vatanen             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tuomo Ruutu              Mikko Rantanen           60     0   2  3  
 2 Miikka Salomaki          Saku Maenalanen          40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Miro Heiskanen           Olli Maatta              60     1   2  2  
 2 Sami Vatanen             Ville Pokka              40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikko Rantanen           Sebastian Aho            Jesse Puljujarvi         Miro Heiskanen           Olli Maatta              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tuomo Ruutu              Miikka Salomaki          Mikko Rantanen           Jani Hakanpaa            Olli Maatta              

<b>Goaltenders</b>
Starting : Pekka Rinne              
Backup : Juuse Saros              

<b>Extra Forwards</b>
Normal : Jesse Puljujarvi, Kasperi Kapanen, Mikko Rantanen - PP : Sebastian Aho, Kasperi Kapanen - PK : Joel Armia
<b>Extra Defensemen</b>
Normal : Olli Maatta, Ville Pokka, Sami Vatanen - PP : Olli Maatta - PK : Jani Hakanpaa, Julius Honka
<b>Penalty Shots</b>
Teemu Pulkkinen, Mikko Rantanen, Toni Rajala, Sebastian Aho, Jesse Puljujarvi
<b>Custom OT Lines Forwards</b>
Mikko Rantanen, Sebastian Aho, Jesse Puljujarvi, Saku Maenalanen, Kasperi Kapanen, Miikka Salomaki, Tuomo Ruutu, Roope Hintz, Toni Rajala, Joel Armia
<b>Custom OT Lines Defensemen</b>
Miro Heiskanen, Olli Maatta, Sami Vatanen, Ville Pokka, Julius Honka

<b>Scratches</b>
Antti Suomela (Healthy), Jesperi Kotkaniemi (Healthy), Jyrki Jokipakka (Healthy)</pre></div>
<h1 class="TeamLinesPro_LET"><a id="LETTONIE">LETTONIE</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">LETTONIE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#LETTONIE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#LETTONIE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#LETTONIE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#LETTONIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#LETTONIE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#LETTONIE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#LETTONIE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#LETTONIE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#LETTONIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#LETTONIE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#LETTONIE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#LETTONIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LETTONIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LETTONIE" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Kaspars Daugavins        Rudolfs Balcers          Martin Karsums           35     0   5  0  
 2 Rodrigo Abols            Nikita Jevpalovs         Miks Indrasis            30     0   5  0  
 3 Oskars Batna             Ronalds Kenins           Raimonds Vitolins        20     0   5  0  
 4 Andris Dzerins           Lauris Darzins           Vitalijs Pavlovs         15     0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Uvis Janis Balinskis     Kristaps Sotnieks                                 40     0   5  0  
 2 Karlis Cukste            Oskars Bartulis                                   30     0   5  0  
 3 Janis Jaks               Harijs Brants                                     20     0   5  0  
 4 Uvis Janis Balinskis     Kristaps Sotnieks                                 10     0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Kaspars Daugavins        Nikita Jevpalovs         Martin Karsums           60     0   0  5  
 2 Rodrigo Abols            Rudolfs Balcers          Miks Indrasis            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Uvis Janis Balinskis     Kristaps Sotnieks                                 60     0   0  5  
 2 Karlis Cukste            Oskars Bartulis                                   40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nikita Jevpalovs         Martin Karsums           60     0   5  0  
 2 Rudolfs Balcers          Kaspars Daugavins        40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Uvis Janis Balinskis     Kristaps Sotnieks        60     0   5  0  
 2 Karlis Cukste            Oskars Bartulis          40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nikita Jevpalovs                                  60     0   5  0  
 2 Martin Karsums                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Uvis Janis Balinskis     Kristaps Sotnieks        60     0   5  0  
 2 Karlis Cukste            Oskars Bartulis          40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nikita Jevpalovs         Martin Karsums           60     0   5  0  
 2 Rudolfs Balcers          Kaspars Daugavins        40     0   5  0  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Uvis Janis Balinskis     Kristaps Sotnieks        60     0   5  0  
 2 Karlis Cukste            Oskars Bartulis          40     0   5  0  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kaspars Daugavins        Nikita Jevpalovs         Martin Karsums           Uvis Janis Balinskis     Kristaps Sotnieks        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kaspars Daugavins        Nikita Jevpalovs         Martin Karsums           Uvis Janis Balinskis     Kristaps Sotnieks        

<b>Goaltenders</b>
Starting : Arturs Silovs            
Backup : Mareks Mitens            

<b>Extra Forwards</b>
Normal : Oskars Batna, Ronalds Kenins, Lauris Darzins - PP : Oskars Batna, Ronalds Kenins - PK : Lauris Darzins
<b>Extra Defensemen</b>
Normal : Janis Jaks, Harijs Brants, Karlis Cukste - PP : Janis Jaks - PK : Harijs Brants, Karlis Cukste
<b>Penalty Shots</b>
Nikita Jevpalovs, Martin Karsums, Rudolfs Balcers, Kaspars Daugavins, Ronalds Kenins
<b>Custom OT Lines Forwards</b>
Nikita Jevpalovs, Martin Karsums, Rudolfs Balcers, Kaspars Daugavins, Ronalds Kenins, Lauris Darzins, Rodrigo Abols, Miks Indrasis, Vitalijs Pavlovs, Andris Dzerins
<b>Custom OT Lines Defensemen</b>
Uvis Janis Balinskis, Kristaps Sotnieks, Karlis Cukste, Oskars Bartulis, Janis Jaks

<b>Scratches</b>
Emils Gegeris (Healthy), Kalvis Ozols (Healthy), Frenks Razgals (Healthy)</pre></div>
<h1 class="TeamLinesPro_TCH"><a id="REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">REPUBLIQUE TCHEQUE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#REPUBLIQUETCHEQUE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#REPUBLIQUETCHEQUE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#REPUBLIQUETCHEQUE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#REPUBLIQUETCHEQUE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#REPUBLIQUETCHEQUE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#REPUBLIQUETCHEQUE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#REPUBLIQUETCHEQUE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#REPUBLIQUETCHEQUE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#REPUBLIQUETCHEQUE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#REPUBLIQUETCHEQUE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#REPUBLIQUETCHEQUE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#REPUBLIQUETCHEQUE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_REPUBLIQUETCHEQUE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_REPUBLIQUETCHEQUE" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 David Krejci             Ondrej Kase              Michael Frolik           47     0   1  4  
 2 Martin Hanzal            Ondrej Palat             Martin Necas             42     0   1  4  
 3 Pavel Zacha              Filip Zadina             Dominik Simon            10     1   2  2  
 4 Filip Chlapik            David Kampf              Jaromir Jagr             1      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Andrej Sustr             Jakub Kindl                                       40     0   4  1  
 2 Jakub Zboril             Filip Hronek                                      35     0   4  1  
 3 Filip Kral               Tomas Kundratek                                   20     0   3  2  
 4 Jakub Kindl              Tomas Kundratek                                   5      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 David Krejci             Michael Frolik           Ondrej Kase              50     1   2  2  
 2 Martin Hanzal            Filip Zadina             Jaromir Jagr             50     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ondrej Palat             Andrej Sustr                                      50     1   2  2  
 2 Filip Hronek             Dominik Simon                                     50     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Martin Hanzal            Ondrej Kase              60     1   2  2  
 2 David Krejci             Dominik Simon            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrej Sustr             Jakub Kindl              60     1   2  2  
 2 Tomas Kundratek          Jakub Zboril             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 David Krejci                                      60     1   2  2  
 2 Pavel Zacha                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrej Sustr             Filip Hronek             60     1   2  2  
 2 Tomas Kundratek          Jakub Kindl              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Krejci             Ondrej Kase              60     1   2  2  
 2 Michael Frolik           Filip Zadina             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrej Sustr             Pavel Zacha              60     1   2  2  
 2 Filip Hronek             Ondrej Kase              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   David Krejci             Ondrej Kase              Michael Frolik           Andrej Sustr             Jakub Kindl              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Martin Hanzal            Ondrej Palat             Michael Frolik           David Kampf              Jakub Kindl              

<b>Goaltenders</b>
Starting : Petr Mrazek              
Backup : Pavel Francouz           

<b>Extra Forwards</b>
Normal : Ondrej Kase, Ondrej Palat, David Krejci - PP : David Kampf, Filip Zadina - PK : Jaromir Jagr
<b>Extra Defensemen</b>
Normal : Andrej Sustr, Jakub Kindl, Tomas Kundratek - PP : Tomas Kundratek - PK : Tomas Kundratek, Jakub Zboril
<b>Penalty Shots</b>
David Krejci, Filip Zadina, Jaromir Jagr, Martin Hanzal, Ondrej Palat
<b>Custom OT Lines Forwards</b>
David Krejci, David Kampf, Filip Zadina, Martin Hanzal, Martin Necas, Michael Frolik, Ondrej Kase, Ondrej Palat, Pavel Zacha, Unknown Player
<b>Custom OT Lines Defensemen</b>
Andrej Sustr, Jakub Kindl, Jakub Zboril, Tomas Kundratek, Filip Hronek

<b>Scratches</b>
Filip Chytil (Healthy), Jindrich Abdul (Healthy), Vojtech Budik (Healthy)</pre></div>
<h1 class="TeamLinesPro_RUS"><a id="RUSSIE">RUSSIE</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">RUSSIE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#RUSSIE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#RUSSIE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#RUSSIE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#RUSSIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#RUSSIE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#RUSSIE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#RUSSIE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#RUSSIE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#RUSSIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#RUSSIE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#RUSSIE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#RUSSIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RUSSIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RUSSIE" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikhail Grigorenko       Alexander Radulov        Alexander Ovechkin       40     1   2  2  
 2 Evgeny Grachev           Evgeny Dadonov           Ilya Kovalchuk           30     1   2  2  
 3 Vladislav Namestnikov    Kirill Kaprizov          Pavel Buchnevich         20     1   2  2  
 4 Bogdan Yakimov           Nikita Gusev             Dmitrij Jaskin           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Kulikov           Mikhail Sergachev                                 40     1   2  2  
 2 Dmitri Orlov             Nikita Nesterov                                   30     1   2  2  
 3 Nikita Tryamkin          Anton Volchenkov                                  20     1   2  2  
 4 Dmitri Kulikov           Dmitri Orlov                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ilya Kovalchuk           Alexander Ovechkin       Alexander Radulov        60     1   2  2  
 2 Evgeny Grachev           Evgeny Dadonov           Mikhail Grigorenko       40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mikhail Sergachev        Dmitri Kulikov                                    60     1   2  2  
 2 Dmitri Orlov             Nikita Nesterov                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Bogdan Yakimov           Kirill Kaprizov          60     1   2  2  
 2 Vladislav Namestnikov    Dmitrij Jaskin           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Volchenkov         Dmitri Kulikov           60     1   2  2  
 2 Nikita Tryamkin          Dmitri Orlov             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Kirill Kaprizov                                   60     1   2  2  
 2 Bogdan Yakimov                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Volchenkov         Dmitri Kulikov           60     1   2  2  
 2 Nikita Tryamkin          Nikita Nesterov          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Bogdan Yakimov           Alexander Ovechkin       60     1   2  2  
 2 Dmitrij Jaskin           Vladislav Namestnikov    40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Volchenkov         Dmitri Orlov             60     1   2  2  
 2 Nikita Tryamkin          Nikita Nesterov          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexander Ovechkin       Alexander Radulov        Evgeny Dadonov           Dmitri Kulikov           Mikhail Sergachev        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Bogdan Yakimov           Kirill Kaprizov          Dmitrij Jaskin           Anton Volchenkov         Nikita Tryamkin          

<b>Goaltenders</b>
Starting : Sergei Bobrovsky         
Backup : Ilya Sorokin             

<b>Extra Forwards</b>
Normal : Ilya Kovalchuk, Kirill Kaprizov, Vladislav Namestnikov - PP : Evgeny Dadonov, Evgeny Grachev - PK : Nikita Gusev
<b>Extra Defensemen</b>
Normal : Nikita Tryamkin, Nikita Nesterov, Dmitri Orlov - PP : Dmitri Kulikov - PK : Dmitri Kulikov, Dmitri Orlov
<b>Penalty Shots</b>
Alexander Ovechkin, Alexander Radulov, Ilya Kovalchuk, Evgeny Dadonov, Mikhail Grigorenko
<b>Custom OT Lines Forwards</b>
Alexander Ovechkin, Alexander Radulov, Evgeny Dadonov, Mikhail Grigorenko, Evgeny Grachev, Ilya Kovalchuk, Pavel Buchnevich, Nikita Gusev, Vladislav Namestnikov, Kirill Kaprizov
<b>Custom OT Lines Defensemen</b>
Mikhail Sergachev, Dmitri Kulikov, Dmitri Orlov, Nikita Nesterov, Nikita Tryamkin

<b>Scratches</b>
Nikita Filatov (Healthy), Vladislav Kamenev (Healthy), Yegor Rykov (Healthy)</pre></div>
<h1 class="TeamLinesPro_SLO"><a id="SLOVAQUIE">SLOVAQUIE</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">SLOVAQUIE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#SLOVAQUIE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#SLOVAQUIE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#SLOVAQUIE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#SLOVAQUIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#SLOVAQUIE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#SLOVAQUIE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#SLOVAQUIE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#SLOVAQUIE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#SLOVAQUIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#SLOVAQUIE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#SLOVAQUIE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#SLOVAQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SLOVAQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SLOVAQUIE" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Marko Dano               Martin Bakos             Libor Hudacek            40     1   2  2  
 2 Tomas Zigo               Patrik Lamper            Marcel Hascak            30     1   2  2  
 3 Lukas Cingel             Andrej Kudrna            Robert Lantosi           20     1   2  2  
 4 Tomas Marcinko           Marko Dano               Marian Studenic          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Andrej Sekera            Martin Marincin                                   40     1   2  2  
 2 Michal Cajkovsky         Peter Ceresnak                                    30     1   2  2  
 3 Marek Daloga             Patrik Koch                                       20     1   2  2  
 4 Martin Fehervary         Andrej Sekera                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Marko Dano               Martin Bakos             Libor Hudacek            60     1   2  2  
 2 Tomas Zigo               Patrik Lamper            Marcel Hascak            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Andrej Sekera            Martin Marincin                                   60     1   2  2  
 2 Michal Cajkovsky         Peter Ceresnak                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Marko Dano               Martin Bakos             60     1   2  2  
 2 Libor Hudacek            Marcel Hascak            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrej Sekera            Martin Marincin          60     1   2  2  
 2 Michal Cajkovsky         Peter Ceresnak           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Marko Dano                                        60     1   2  2  
 2 Martin Bakos                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrej Sekera            Martin Marincin          60     1   2  2  
 2 Michal Cajkovsky         Peter Ceresnak           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Marko Dano               Martin Bakos             60     1   2  2  
 2 Libor Hudacek            Marcel Hascak            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrej Sekera            Martin Marincin          60     1   2  2  
 2 Michal Cajkovsky         Peter Ceresnak           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Marko Dano               Martin Bakos             Libor Hudacek            Andrej Sekera            Martin Marincin          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Marko Dano               Martin Bakos             Libor Hudacek            Andrej Sekera            Martin Marincin          

<b>Goaltenders</b>
Starting : Patrik Rybar             
Backup : Denis Godla              

<b>Extra Forwards</b>
Normal : Robert Lantosi, Lukas Cingel, Tomas Marcinko - PP : Robert Lantosi, Lukas Cingel - PK : Tomas Marcinko
<b>Extra Defensemen</b>
Normal : Marek Daloga, Patrik Koch, Martin Fehervary - PP : Marek Daloga - PK : Patrik Koch, Martin Fehervary
<b>Penalty Shots</b>
Marko Dano, Martin Bakos, Libor Hudacek, Marcel Hascak, Tomas Zigo
<b>Custom OT Lines Forwards</b>
Marko Dano, Martin Bakos, Libor Hudacek, Marcel Hascak, Tomas Zigo, Robert Lantosi, Lukas Cingel, Patrik Lamper, Tomas Marcinko, Marian Studenic
<b>Custom OT Lines Defensemen</b>
Andrej Sekera, Martin Marincin, Michal Cajkovsky, Peter Ceresnak, Marek Daloga

<b>Scratches</b>
Adam Liska (Healthy), Michal Kristof (Healthy), Matus Sukel (Healthy)</pre></div>
<h1 class="TeamLinesPro_SWE"><a id="SUEDE">SUEDE</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">SUEDE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#SUEDE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#SUEDE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#SUEDE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#SUEDE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#SUEDE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#SUEDE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#SUEDE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#SUEDE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#SUEDE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#SUEDE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#SUEDE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#SUEDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUEDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUEDE" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Gabriel Landeskog        Magnus Paajarvi          40     1   2  2  
 2 Patrik Berglund          Loui Eriksson            William Nylander         30     1   2  2  
 3 Rickard Rakell           Max Friberg              Gustav Nyquist           20     1   2  2  
 4 Jacob De La Rose         Joel Eriksson Ek         Gabriel Landeskog        10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Erik Karlsson                                     40     1   2  2  
 2 Hampus Lindholm          Niklas Hjalmarsson                                30     1   2  2  
 3 Tobias Enstrom           Jonas Brodin                                      20     1   2  2  
 4 Victor Hedman            Erik Karlsson                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Gabriel Landeskog        Magnus Paajarvi          60     1   2  2  
 2 Patrik Berglund          Loui Eriksson            William Nylander         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Erik Karlsson                                     60     1   2  2  
 2 Hampus Lindholm          Niklas Hjalmarsson                                40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gabriel Landeskog        Nicklas Backstrom        60     1   2  2  
 2 Magnus Paajarvi          Loui Eriksson            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Erik Karlsson            60     1   2  2  
 2 Hampus Lindholm          Niklas Hjalmarsson       40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Gabriel Landeskog                                 60     1   2  2  
 2 Nicklas Backstrom                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Erik Karlsson            60     1   2  2  
 2 Hampus Lindholm          Niklas Hjalmarsson       40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gabriel Landeskog        Nicklas Backstrom        60     1   2  2  
 2 Magnus Paajarvi          Loui Eriksson            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Erik Karlsson            60     1   2  2  
 2 Hampus Lindholm          Niklas Hjalmarsson       40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Gabriel Landeskog        Magnus Paajarvi          Victor Hedman            Erik Karlsson            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Gabriel Landeskog        Magnus Paajarvi          Victor Hedman            Erik Karlsson            

<b>Goaltenders</b>
Starting : Robin Lehner             
Backup : Anders Nilsson           

<b>Extra Forwards</b>
Normal : Henrik Sedin, Rickard Rakell, Max Friberg - PP : Henrik Sedin, Rickard Rakell - PK : Max Friberg
<b>Extra Defensemen</b>
Normal : Tobias Enstrom, Jonas Brodin, Hampus Lindholm - PP : Tobias Enstrom - PK : Jonas Brodin, Hampus Lindholm
<b>Penalty Shots</b>
Gabriel Landeskog, Nicklas Backstrom, Magnus Paajarvi, Loui Eriksson, Patrik Berglund
<b>Custom OT Lines Forwards</b>
Gabriel Landeskog, Nicklas Backstrom, Magnus Paajarvi, Loui Eriksson, Patrik Berglund, William Nylander, Rickard Rakell, Max Friberg, Jacob De La Rose, Henrik Sedin
<b>Custom OT Lines Defensemen</b>
Victor Hedman, Erik Karlsson, Hampus Lindholm, Niklas Hjalmarsson, Tobias Enstrom

<b>Scratches</b>
Victor Olofsson (Healthy), Mattias Tedenby (Bruised Right Foot Injury), Rasmus Andersson (Healthy)</pre></div>
<h1 class="TeamLinesPro_SUI"><a id="SUISSE">SUISSE</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">SUISSE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#SUISSE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#SUISSE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#SUISSE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#SUISSE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#SUISSE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#SUISSE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#SUISSE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#SUISSE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#SUISSE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#SUISSE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#SUISSE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#SUISSE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUISSE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUISSE" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nico Hischier            Nino Niederreiter        Sven Baertschi           40     0   2  3  
 2 Noah Rod                 Gregory Hofmann          Vincent Praplan          30     0   2  3  
 3 Calvin Thurkauf          Christoph Bertschy       Fabrice Herzog           20     0   3  2  
 4 Philipp Kurashev         Simon Moser              Damien Brunner           10     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Luca Sbisa               Mirco Mueller                                     40     0   3  2  
 2 Michael Fora             Yannick Weber                                     30     0   3  2  
 3 Romain Loeffel           Lukas Frick                                       20     0   3  2  
 4 Luca Sbisa               Mirco Mueller                                     10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nico Hischier            Nino Niederreiter        Sven Baertschi           70     0   1  4  
 2 Noah Rod                 Gregory Hofmann          Damien Brunner           30     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Luca Sbisa               Yannick Weber                                     60     0   1  4  
 2 Lukas Frick              Mirco Mueller                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Calvin Thurkauf          Gregory Hofmann          65     0   4  1  
 2 Noah Rod                 Nino Niederreiter        35     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Mirco Mueller            75     0   5  0  
 2 Michael Fora             Romain Loeffel           25     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Calvin Thurkauf                                   60     0   5  0  
 2 Nico Hischier                                     40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Mirco Mueller            80     0   5  0  
 2 Michael Fora             Romain Loeffel           20     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nico Hischier            Sven Baertschi           60     0   2  3  
 2 Calvin Thurkauf          Nino Niederreiter        40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Yannick Weber            60     0   2  3  
 2 Mirco Mueller            Michael Fora             40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nico Hischier            Nino Niederreiter        Sven Baertschi           Luca Sbisa               Yannick Weber            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nico Hischier            Nino Niederreiter        Noah Rod                 Luca Sbisa               Mirco Mueller            

<b>Goaltenders</b>
Starting : Robert Mayer             
Backup : Reto Berra               

<b>Extra Forwards</b>
Normal : Nico Hischier, Nino Niederreiter, Gregory Hofmann - PP : Nico Hischier, Nino Niederreiter - PK : Calvin Thurkauf
<b>Extra Defensemen</b>
Normal : Luca Sbisa, Yannick Weber, Mirco Mueller - PP : Yannick Weber - PK : Luca Sbisa, Mirco Mueller
<b>Penalty Shots</b>
Damien Brunner, Nico Hischier, Nino Niederreiter, Sven Baertschi, Noah Rod
<b>Custom OT Lines Forwards</b>
Nico Hischier, Nino Niederreiter, Sven Baertschi, Fabrice Herzog, Gregory Hofmann, Damien Brunner, Calvin Thurkauf, Vincent Praplan, Noah Rod, Christoph Bertschy
<b>Custom OT Lines Defensemen</b>
Luca Sbisa, Yannick Weber, Mirco Mueller, Michael Fora, Lukas Frick

<b>Scratches</b>
Raphael Diaz (Sprained Right Knee Injury), Andreas Ambuhl (Torso Injury), Damien Riat (Healthy)</pre></div>
<h1 class="TeamLinesPro_TWO"><a id="TEAMWORLD">TEAM WORLD</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">TEAM WORLD Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#TEAMWORLD">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#TEAMWORLD">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#TEAMWORLD">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#TEAMWORLD">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#TEAMWORLD">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#TEAMWORLD">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#TEAMWORLD">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#TEAMWORLD">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#TEAMWORLD">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#TEAMWORLD">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#TEAMWORLD">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#TEAMWORLD">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TEAMWORLD');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TEAMWORLD" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Lars Eller               Thomas Vanek             Oliver Bjorkstrand       40     1   2  2  
 2 Dustin Boyd              Nigel Dawes              Daniel Sprong            30     1   2  2  
 3 Hafthor Sigrunarson      Antoine Roussel          Wojtek Wolski            20     1   2  2  
 4 Yegor Sharangovich       Joachim Blichfeld        Mathias From             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darren Dietz             Raman Hrabarenka                                  40     1   2  2  
 2 Andrey Pedan             Markus Lauridsen                                  30     1   2  2  
 3 Jesper Jensen            Enrico Miglioranzi                                20     1   2  2  
 4 Darren Dietz             Raman Hrabarenka                                  10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Lars Eller               Oliver Bjorkstrand       Thomas Vanek             60     1   2  2  
 2 Dustin Boyd              Nigel Dawes              Daniel Sprong            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darren Dietz             Raman Hrabarenka                                  60     1   2  2  
 2 Markus Lauridsen         Enrico Miglioranzi                                40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lars Eller               Antoine Roussel          60     1   2  2  
 2 Dustin Boyd              Oliver Bjorkstrand       40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darren Dietz             Raman Hrabarenka         60     1   2  2  
 2 Andrey Pedan             Markus Lauridsen         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Lars Eller                                        60     1   2  2  
 2 Dustin Boyd                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darren Dietz             Raman Hrabarenka         60     1   2  2  
 2 Andrey Pedan             Markus Lauridsen         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lars Eller               Oliver Bjorkstrand       60     1   2  2  
 2 Dustin Boyd              Thomas Vanek             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darren Dietz             Raman Hrabarenka         60     1   2  2  
 2 Andrey Pedan             Markus Lauridsen         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Lars Eller               Oliver Bjorkstrand       Thomas Vanek             Darren Dietz             Raman Hrabarenka         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Lars Eller               Nigel Dawes              Antoine Roussel          Darren Dietz             Raman Hrabarenka         

<b>Goaltenders</b>
Starting : Alexandar Georgiyev      
Backup : Frederik Andersen        

<b>Extra Forwards</b>
Normal : Lars Eller, Oliver Bjorkstrand, Joachim Blichfeld - PP : Oliver Bjorkstrand, Thomas Vanek - PK : Antoine Roussel
<b>Extra Defensemen</b>
Normal : Darren Dietz, Markus Lauridsen, Raman Hrabarenka - PP : Darren Dietz - PK : Darren Dietz, Raman Hrabarenka
<b>Penalty Shots</b>
Thomas Vanek, Nigel Dawes, Oliver Bjorkstrand, Daniel Sprong, Wojtek Wolski
<b>Custom OT Lines Forwards</b>
Lars Eller, Oliver Bjorkstrand, Thomas Vanek, Daniel Sprong, Dustin Boyd, Nigel Dawes, Mathias From, Wojtek Wolski, Joachim Blichfeld, Antoine Roussel
<b>Custom OT Lines Defensemen</b>
Darren Dietz, Raman Hrabarenka, Markus Lauridsen, Enrico Miglioranzi, Andrey Pedan

<b>Scratches</b>
Mattias Norstebo (Healthy), Max Hermens (Healthy), Tim Bozon (Healthy)</pre></div>
<h1 class="TeamLinesPro_U23"><a id="U23NORTHAMERICA">U23 NORTH AMERICA</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">U23 NORTH AMERICA Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#U23NORTHAMERICA">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#U23NORTHAMERICA">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#U23NORTHAMERICA">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#U23NORTHAMERICA">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#U23NORTHAMERICA">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#U23NORTHAMERICA">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#U23NORTHAMERICA">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#U23NORTHAMERICA">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#U23NORTHAMERICA">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#U23NORTHAMERICA">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#U23NORTHAMERICA">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#U23NORTHAMERICA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_U23NORTHAMERICA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_U23NORTHAMERICA" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Strome             Alex DeBrincat           Brock Boeser             40     1   2  2  
 2 Anthony Cirelli          Kieffer Bellows          Zachary Senyshyn         30     1   2  2  
 3 Jack Roslovic            Alexis Lafrenière        Owen Tippett             20     1   2  2  
 4 Kirby Dach               Tage Thompson            Brock Boeser             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Charles McAvoy           Noah Hanifin                                      40     1   2  2  
 2 Thomas Chabot            Adam Fox                                          30     1   2  2  
 3 Samuel Girard            Quinn Hughes                                      20     1   2  2  
 4 Cale Makar               Charles McAvoy                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Strome             Alex DeBrincat           Brock Boeser             60     1   2  2  
 2 Anthony Cirelli          Kieffer Bellows          Zachary Senyshyn         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Charles McAvoy           Noah Hanifin                                      60     1   2  2  
 2 Thomas Chabot            Adam Fox                                          40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brock Boeser             Dylan Strome             60     1   2  2  
 2 Alex DeBrincat           Anthony Cirelli          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Charles McAvoy           Noah Hanifin             60     1   2  2  
 2 Thomas Chabot            Adam Fox                 40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brock Boeser                                      60     1   2  2  
 2 Dylan Strome                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Charles McAvoy           Noah Hanifin             60     1   2  2  
 2 Thomas Chabot            Adam Fox                 40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brock Boeser             Dylan Strome             60     1   2  2  
 2 Alex DeBrincat           Anthony Cirelli          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Charles McAvoy           Noah Hanifin             60     1   2  2  
 2 Thomas Chabot            Adam Fox                 40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dylan Strome             Alex DeBrincat           Brock Boeser             Charles McAvoy           Noah Hanifin             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dylan Strome             Alex DeBrincat           Brock Boeser             Charles McAvoy           Noah Hanifin             

<b>Goaltenders</b>
Starting : Colton Point             
Backup : Carter Hart              

<b>Extra Forwards</b>
Normal : Alexis Lafrenière, Jack Roslovic, Kirby Dach - PP : Alexis Lafrenière, Jack Roslovic - PK : Kirby Dach
<b>Extra Defensemen</b>
Normal : Samuel Girard, Quinn Hughes, Cale Makar - PP : Samuel Girard - PK : Quinn Hughes, Cale Makar
<b>Penalty Shots</b>
Brock Boeser, Dylan Strome, Alex DeBrincat, Anthony Cirelli, Kieffer Bellows
<b>Custom OT Lines Forwards</b>
Brock Boeser, Dylan Strome, Alex DeBrincat, Anthony Cirelli, Kieffer Bellows, Zachary Senyshyn, Alexis Lafrenière, Jack Roslovic, Kirby Dach, Owen Tippett
<b>Custom OT Lines Defensemen</b>
Charles McAvoy, Noah Hanifin, Thomas Chabot, Adam Fox, Samuel Girard

<b>Scratches</b>
Mitch Marner (Healthy), Anthony Beauvillier (Healthy)</pre></div>
<?php include "Footer.php";?>
