<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CMHJ - Pro Team Lines</title>
<script src="CMHJ.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.5.5 - CMHJ-STHS.db - CMHJ-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="CMHJ.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"CMHJ-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"CMHJ-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Allemagne">Allemagne</a> | <a href="#Canada">Canada</a> | <a href="#Finlande">Finlande</a> | <a href="#RépubliqueTchèque">République Tchèque</a> | <a href="#Russie">Russie</a> | <a href="#Suède">Suède</a> | <a href="#TeamWorld">Team World</a> | <a href="#USA">USA</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_GER"><a id="Allemagne">Allemagne</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Allemagne Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#Allemagne">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#Allemagne">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#Allemagne">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#Allemagne">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#Allemagne">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#Allemagne">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#Allemagne">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#Allemagne">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#Allemagne">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#Allemagne">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#Allemagne">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#Allemagne">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Allemagne');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Allemagne" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tim Stützle              Lukas Reichel            Joshua Samanski          40     1   2  2  
 2 Samuel Dubé              John-Jason Peterka       Florian Elias            30     1   2  2  
 3 Connor Korte             Filip Reisnecker         Jan Nijenhuis            20     1   2  2  
 4 Elias Lindner            Markus Schweiger         Haakon Hänelt            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Moritz Seider            Simon Gnyp                                        40     1   2  2  
 2 Maximilian Glötzl        Luca Münzenberger                                 30     1   2  2  
 3 Maksymilian Szuber       Niklas Länger                                     20     1   2  2  
 4 Moritz Seider            Simon Gnyp                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tim Stützle              Lukas Reichel            Joshua Samanski          60     1   2  2  
 2 Samuel Dubé              John-Jason Peterka       Florian Elias            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Moritz Seider            Maximilian Glötzl                                 60     1   2  2  
 2 Haakon Hänelt            Simon Gnyp                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joshua Samanski          Lukas Reichel            60     1   2  2  
 2 Haakon Hänelt            Elias Lindner            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Moritz Seider            Luca Münzenberger        60     1   2  2  
 2 Maximilian Glötzl        Maksymilian Szuber       40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joshua Samanski                                   60     1   2  2  
 2 Tim Stützle                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Moritz Seider            Simon Gnyp               60     1   2  2  
 2 Luca Münzenberger        Maximilian Glötzl        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tim Stützle              Lukas Reichel            60     1   2  2  
 2 Samuel Dubé              John-Jason Peterka       40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Moritz Seider            Luca Münzenberger        60     1   2  2  
 2 Maksymilian Szuber       Simon Gnyp               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tim Stützle              John-Jason Peterka       Lukas Reichel            Maximilian Glötzl        Moritz Seider            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joshua Samanski          Tim Stützle              Lukas Reichel            Moritz Seider            Maximilian Glötzl        

<b>Goaltenders</b>
Starting : Tobias Ancicka           
Backup : Arno Tiefensee           

<b>Extra Forwards</b>
Normal : Tim Stützle, Joshua Samanski, Jan Nijenhuis - PP : Florian Elias, Connor Korte - PK : Jan Nijenhuis
<b>Extra Defensemen</b>
Normal : Simon Gnyp, Niklas Länger, Luca Münzenberger - PP : Haakon Hänelt - PK : Moritz Seider, Simon Gnyp
<b>Penalty Shots</b>
Tim Stützle, Lukas Reichel, Joshua Samanski, John-Jason Peterka, Elias Lindner
<b>Custom OT Lines Forwards</b>
Tim Stützle, John-Jason Peterka, Lukas Reichel, Samuel Dubé, Joshua Samanski, Markus Schweiger, Jan Nijenhuis, Connor Korte, Elias Lindner, Filip Reisnecker
<b>Custom OT Lines Defensemen</b>
Moritz Seider, Haakon Hänelt, Luca Münzenberger, Maximilian Glötzl, Simon Gnyp

<b>Scratches</b>
Tommy Pasanen (Healthy), Jakub Borzecki (Healthy), Nikita Quapp (Healthy)</pre></div>
<h1 class="TeamLinesPro_CAN"><a id="Canada">Canada</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Canada Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#Canada">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#Canada">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#Canada">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#Canada">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#Canada">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#Canada">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#Canada">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#Canada">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#Canada">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#Canada">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#Canada">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#Canada">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canada');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canada" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Kirby Dach               Alexis Lafrenière        Alex Beaucage            30     0   3  2  
 2 Dylan Cozens             Jakob Pelletier          Jack Quinn               30     0   3  2  
 3 Quinton Byfield          Cole Perfetti            Dawson Mercer            20     0   3  2  
 4 Connor McMichael         Alex Newhook             Jamie Drysdale           20     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Bowen Byram              Thomas Harley                                     40     0   3  2  
 2 Braden Schneider         Samuel Régis                                      30     0   3  2  
 3 Kaiden Guhle             Justin Barron                                     30     0   3  2  
 4 Samuel Régis             Thomas Harley                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Kirby Dach               Dylan Cozens             Alex Beaucage            60     0   1  4  
 2 Quinton Byfield          Alexis Lafrenière        Jack Quinn               40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Bowen Byram              Thomas Harley                                     60     0   3  2  
 2 Samuel Régis             Jamie Drysdale                                    40     0   3  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alex Newhook             Dawson Mercer            60     0   5  0  
 2 Quinton Byfield          Jamie Drysdale           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Braden Schneider         Kaiden Guhle             60     0   5  0  
 2 Justin Barron            Thomas Harley            40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dawson Mercer                                     60     0   5  0  
 2 Jamie Drysdale                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kaiden Guhle             Thomas Harley            60     0   5  0  
 2 Braden Schneider         Justin Barron            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor McMichael         Alex Newhook             60     0   3  2  
 2 Cole Perfetti            Jakob Pelletier          40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kaiden Guhle             Jamie Drysdale           60     0   3  2  
 2 Braden Schneider         Bowen Byram              40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kirby Dach               Dylan Cozens             Alex Beaucage            Bowen Byram              Braden Schneider         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Quinton Byfield          Jakob Pelletier          Dawson Mercer            Bowen Byram              Braden Schneider         

<b>Goaltenders</b>
Starting : Dylan Garand             
Backup : Brett Brochu             

<b>Extra Forwards</b>
Normal : Kirby Dach, Dylan Cozens, Jakob Pelletier - PP : Connor McMichael, Alexis Lafrenière - PK : Quinton Byfield
<b>Extra Defensemen</b>
Normal : Jamie Drysdale, Justin Barron, Samuel Régis - PP : Bowen Byram - PK : Kaiden Guhle, Braden Schneider
<b>Penalty Shots</b>
Alexis Lafrenière, Connor McMichael, Kirby Dach, Dylan Cozens, Alex Beaucage
<b>Custom OT Lines Forwards</b>
Kirby Dach, Alex Beaucage, Quinton Byfield, Alexis Lafrenière, Dylan Cozens, Cole Perfetti, Alex Newhook, Connor McMichael, Jakob Pelletier, Jack Quinn
<b>Custom OT Lines Defensemen</b>
Bowen Byram, Braden Schneider, Thomas Harley, Justin Barron, Jamie Drysdale

<b>Scratches</b>
Shane Wright (Healthy), Connor Zary (Healthy), Jonathan Lemieux (Healthy)</pre></div>
<h1 class="TeamLinesPro_FIN"><a id="Finlande">Finlande</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Finlande Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#Finlande">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#Finlande">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#Finlande">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#Finlande">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#Finlande">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#Finlande">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#Finlande">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#Finlande">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#Finlande">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#Finlande">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#Finlande">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#Finlande">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Finlande');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Finlande" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anton Lundell            Antti Saarela            Kaapo Kakko              37     0   1  4  
 2 Juuso Parssinen          Patrik Puistola          Aku Räty                 35     0   2  3  
 3 Brad Lambert             Roni Hirvonen            Kasper Simontaival       23     1   1  3  
 4 Henri Nikkanen           Roby Jarventie           Aatu Räty                5      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ville Heinola            Eemil Viro                                        38     1   1  3  
 2 Joni Jurmo               Antti Tuomisto                                    32     1   2  2  
 3 Mikko Kokkonen           Topi Niemela                                      30     1   3  1  
 4 Ville Heinola            Joni Jurmo                                        0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anton Lundell            Antti Saarela            Kaapo Kakko              60     0   0  5  
 2 Juuso Parssinen          Roby Jarventie           Patrik Puistola          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ville Heinola            Eemil Viro                                        60     0   0  5  
 2 Mikko Kokkonen           Antti Tuomisto                                    40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Roni Hirvonen            Aku Räty                 60     0   5  0  
 2 Juuso Parssinen          Kasper Simontaival       40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joni Jurmo               Topi Niemela             60     0   5  0  
 2 Ville Heinola            Mikko Kokkonen           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Roni Hirvonen                                     60     0   5  0  
 2 Juuso Parssinen                                   40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joni Jurmo               Topi Niemela             60     0   5  0  
 2 Ville Heinola            Mikko Kokkonen           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anton Lundell            Kaapo Kakko              60     0   1  4  
 2 Juuso Parssinen          Antti Saarela            40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ville Heinola            Eemil Viro               60     1   1  3  
 2 Joni Jurmo               Antti Tuomisto           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anton Lundell            Antti Saarela            Kaapo Kakko              Ville Heinola            Eemil Viro               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anton Lundell            Patrik Puistola          Kaapo Kakko              Ville Heinola            Joni Jurmo               

<b>Goaltenders</b>
Starting : Joel Blomqvist           
Backup : Leevi Merilainen         

<b>Extra Forwards</b>
Normal : Kaapo Kakko, Anton Lundell, Juuso Parssinen - PP : Brad Lambert, Aatu Räty - PK : Anton Lundell
<b>Extra Defensemen</b>
Normal : Ville Heinola, Joni Jurmo, Eemil Viro - PP : Topi Niemela - PK : Eemil Viro, Antti Tuomisto
<b>Penalty Shots</b>
Patrik Puistola, Kaapo Kakko, Anton Lundell, Roby Jarventie, Brad Lambert
<b>Custom OT Lines Forwards</b>
Anton Lundell, Kaapo Kakko, Juuso Parssinen, Patrik Puistola, Roni Hirvonen, Antti Saarela, Aatu Räty, Aku Räty, Brad Lambert, Roby Jarventie
<b>Custom OT Lines Defensemen</b>
Ville Heinola, Eemil Viro, Antti Tuomisto, Mikko Kokkonen, Joni Jurmo

<b>Scratches</b>
Leevi Aaltonen (Healthy), Santeri Hatakka (Healthy), Kari Piiroinen (Healthy)</pre></div>
<h1 class="TeamLinesPro_CZE"><a id="RépubliqueTchèque">République Tchèque</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">République Tchèque Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#RépubliqueTchèque">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#RépubliqueTchèque">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#RépubliqueTchèque">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#RépubliqueTchèque">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#RépubliqueTchèque">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#RépubliqueTchèque">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#RépubliqueTchèque">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#RépubliqueTchèque">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#RépubliqueTchèque">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#RépubliqueTchèque">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#RépubliqueTchèque">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#RépubliqueTchèque">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RépubliqueTchèque');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RépubliqueTchèque" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jan Mysak                Michal Teply             Pavel Novak              30     0   1  4  
 2 Filip Prikryl            Radek Muzik              Ondrej Psenicka          27     0   2  3  
 3 Adam Najman              Martin Lang              Adam Raska               25     0   2  3  
 4 Jaromir Pytlik           David Jindra             Jonas Peterek            18     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Simon Kubicek            Martin Hugo Has                                   40     0   2  3  
 2 Karel Klikorka           Stanislav Svozil                                  30     0   2  3  
 3 Radek Kucerik            David Jiricek                                     20     0   2  3  
 4 Simon Kubicek            Martin Hugo Has                                   10     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jan Mysak                Michal Teply             Pavel Novak              60     0   0  5  
 2 Filip Prikryl            Radek Muzik              Ondrej Psenicka          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Simon Kubicek            Martin Hugo Has                                   60     0   0  5  
 2 Karel Klikorka           Stanislav Svozil                                  40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jan Mysak                Michal Teply             60     0   5  0  
 2 Filip Prikryl            Adam Najman              40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Simon Kubicek            Martin Hugo Has          60     0   5  0  
 2 Karel Klikorka           Stanislav Svozil         40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jan Mysak                                         60     0   5  0  
 2 Michal Teply                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Simon Kubicek            Martin Hugo Has          60     0   5  0  
 2 Karel Klikorka           Stanislav Svozil         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jan Mysak                Michal Teply             60     1   2  2  
 2 Filip Prikryl            Adam Najman              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Simon Kubicek            Martin Hugo Has          60     1   2  2  
 2 Karel Klikorka           Stanislav Svozil         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jan Mysak                Michal Teply             Pavel Novak              Simon Kubicek            Martin Hugo Has          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jan Mysak                Michal Teply             Pavel Novak              Simon Kubicek            Martin Hugo Has          

<b>Goaltenders</b>
Starting : Jan Bednar               
Backup : Nick Malik               

<b>Extra Forwards</b>
Normal : Jonas Peterek, Jaromir Pytlik, Martin Lang - PP : Jonas Peterek, Jaromir Pytlik - PK : Martin Lang
<b>Extra Defensemen</b>
Normal : Radek Kucerik, David Jiricek, Karel Klikorka - PP : Radek Kucerik - PK : David Jiricek, Karel Klikorka
<b>Penalty Shots</b>
Jan Mysak, Michal Teply, Filip Prikryl, Adam Najman, Jaromir Pytlik
<b>Custom OT Lines Forwards</b>
Jan Mysak, Michal Teply, Filip Prikryl, Adam Najman, Jaromir Pytlik, Pavel Novak, Radek Muzik, Ondrej Psenicka, Jonas Peterek, Martin Lang
<b>Custom OT Lines Defensemen</b>
Simon Kubicek, Martin Hugo Has, Karel Klikorka, Stanislav Svozil, Radek Kucerik

<b>Scratches</b>
Ondrej Balaz (Healthy), David Vitouch (Healthy), Lukas Parik (Healthy)</pre></div>
<h1 class="TeamLinesPro_RUS"><a id="Russie">Russie</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Russie Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#Russie">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#Russie">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#Russie">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#Russie">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#Russie">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#Russie">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#Russie">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#Russie">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#Russie">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#Russie">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#Russie">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#Russie">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Russie');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Russie" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Yegor Afanasyev          Rodion Amirov            Vasili Podkolzin         40     1   2  2  
 2 Mikhail Abramov          Dmitri Ovchinnikov       Yegor Chinakhov          30     1   2  2  
 3 Vasili Ponomaryov        Nikita Chibrikov         Danil Gushchin           20     1   2  2  
 4 Ilya Nikolayev           Marat Khusnutdinov       Danil Gushchin           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shakir Mukhamadullin     Yan Kuznetsov                                     40     1   2  2  
 2 Semyon Chistyakov        Alexander Nikishin                                30     1   2  2  
 3 Daniil Chayka            Vladislav Lukashevich                             20     1   2  2  
 4 Yegor Savikov            Daniil Chayka                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Yegor Afanasyev          Rodion Amirov            Vasili Podkolzin         60     1   2  2  
 2 Mikhail Abramov          Nikita Chibrikov         Yegor Chinakhov          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shakir Mukhamadullin     Danil Gushchin                                    60     1   2  2  
 2 Semyon Chistyakov        Vasili Ponomaryov                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Vasili Podkolzin         Yegor Afanasyev          60     1   2  2  
 2 Yegor Chinakhov          Mikhail Abramov          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shakir Mukhamadullin     Yan Kuznetsov            60     1   2  2  
 2 Semyon Chistyakov        Alexander Nikishin       40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Vasili Podkolzin                                  60     1   2  2  
 2 Yegor Afanasyev                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shakir Mukhamadullin     Yan Kuznetsov            60     1   2  2  
 2 Semyon Chistyakov        Alexander Nikishin       40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Vasili Podkolzin         Yegor Afanasyev          60     1   2  2  
 2 Yegor Chinakhov          Mikhail Abramov          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shakir Mukhamadullin     Yan Kuznetsov            60     1   2  2  
 2 Semyon Chistyakov        Alexander Nikishin       40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Yegor Afanasyev          Rodion Amirov            Vasili Podkolzin         Shakir Mukhamadullin     Yan Kuznetsov            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Yegor Afanasyev          Rodion Amirov            Vasili Podkolzin         Shakir Mukhamadullin     Yan Kuznetsov            

<b>Goaltenders</b>
Starting : Iaroslav Askarov         
Backup : Ivan Sapozhnikov         

<b>Extra Forwards</b>
Normal : Marat Khusnutdinov, Vasili Ponomaryov, Ilya Nikolayev - PP : Marat Khusnutdinov, Vasili Ponomaryov - PK : Ilya Nikolayev
<b>Extra Defensemen</b>
Normal : Daniil Chayka, Vladislav Lukashevich, Yegor Savikov - PP : Daniil Chayka - PK : Vladislav Lukashevich, Yegor Savikov
<b>Penalty Shots</b>
Vasili Podkolzin, Yegor Afanasyev, Yegor Chinakhov, Mikhail Abramov, Vasili Ponomaryov
<b>Custom OT Lines Forwards</b>
Vasili Podkolzin, Yegor Afanasyev, Yegor Chinakhov, Mikhail Abramov, Vasili Ponomaryov, Rodion Amirov, Ilya Nikolayev, Nikita Chibrikov, Danil Gushchin, Marat Khusnutdinov
<b>Custom OT Lines Defensemen</b>
Shakir Mukhamadullin, Yan Kuznetsov, Semyon Chistyakov, Alexander Nikishin, Daniil Chayka

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_SWE"><a id="Suède">Suède</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Suède Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#Suède">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#Suède">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#Suède">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#Suède">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#Suède">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#Suède">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#Suède">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#Suède">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#Suède">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#Suède">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#Suède">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#Suède">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Suède');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Suède" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 William Eklund           Lucas Raymond            Alexander Holtz          40     0   1  4  
 2 Karl Henriksson          Noel Gunler              Simon Holmström          38     0   1  4  
 3 Albin Grewe              Emil Heineman            Zion Nybeck              20     1   2  2  
 4 Theodor Niederbach       Daniel Torgersson        Simon Robertsson         2      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tobias Björnfot          Victor Soderström                                 34     1   3  1  
 2 Philip Broberg           Albert Johansson                                  33     1   3  1  
 3 Helge Grans              William Wallinder                                 33     1   3  1  
 4 Helge Grans              William Wallinder                                 0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 William Eklund           Lucas Raymond            Alexander Holtz          60     0   0  5  
 2 Karl Henriksson          Noel Gunler              Simon Holmström          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tobias Björnfot          Victor Soderström                                 60     1   0  4  
 2 Philip Broberg           Albert Johansson                                  40     1   0  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Albin Grewe              Daniel Torgersson        60     1   2  2  
 2 Karl Henriksson          Emil Heineman            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tobias Björnfot          Philip Broberg           60     1   2  2  
 2 Victor Soderström        William Wallinder        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Albin Grewe                                       60     1   2  2  
 2 Karl Henriksson                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tobias Björnfot          Philip Broberg           60     1   2  2  
 2 Victor Soderström        William Wallinder        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 William Eklund           Alexander Holtz          60     1   2  2  
 2 Karl Henriksson          Lucas Raymond            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tobias Björnfot          Victor Soderström        60     1   2  2  
 2 Philip Broberg           Albert Johansson         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   William Eklund           Lucas Raymond            Alexander Holtz          Tobias Björnfot          Victor Soderström        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Karl Henriksson          Daniel Torgersson        Albin Grewe              Tobias Björnfot          Philip Broberg           

<b>Goaltenders</b>
Starting : Hugo Alnefelt            
Backup : Jesper Wallstedt         

<b>Extra Forwards</b>
Normal : Alexander Holtz, Lucas Raymond, William Eklund - PP : Alexander Holtz, Lucas Raymond - PK : Daniel Torgersson
<b>Extra Defensemen</b>
Normal : Tobias Björnfot, Victor Soderström, Philip Broberg - PP : Victor Soderström - PK : Tobias Björnfot, Philip Broberg
<b>Penalty Shots</b>
Alexander Holtz, Lucas Raymond, William Eklund, Noel Gunler, Emil Heineman
<b>Custom OT Lines Forwards</b>
Alexander Holtz, Lucas Raymond, William Eklund, Zion Nybeck, Simon Holmström, Noel Gunler, Karl Henriksson, Emil Heineman, Albin Grewe, Theodor Niederbach
<b>Custom OT Lines Defensemen</b>
Victor Soderström, Tobias Björnfot, Philip Broberg, Albert Johansson, William Wallinder

<b>Scratches</b>
Emil Andrae (Healthy), Oskar Magnusson (Healthy), Calle Clang (Healthy)</pre></div>
<h1 class="TeamLinesPro_TWO"><a id="TeamWorld">Team World</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Team World Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#TeamWorld">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#TeamWorld">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#TeamWorld">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#TeamWorld">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#TeamWorld">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#TeamWorld">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#TeamWorld">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#TeamWorld">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#TeamWorld">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#TeamWorld">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#TeamWorld">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#TeamWorld">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TeamWorld');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TeamWorld" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Marco Rossi              Arthur Kaliyev           Raivis Ansons            45     0   4  1  
 2 Théo Rochette            Maxim Cajkovic           Martin Chromiak          30     0   5  0  
 3 Rudolfs Polcs            Reinhard Venter          Simon Knak               15     0   5  0  
 4 Joaquim Muratet          Rapolas Marcinkevicius   Mike Collard             10     0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kirill Steklov           Marko Mladenovic                                  40     1   4  0  
 2 Jonas Brondberg          Jordan Spence                                     30     1   4  0  
 3 Ole Julian Bjorvik Holm  Thimo Nickl                                       20     0   5  0  
 4 Jordan Spence            Jonas Brondberg                                   10     0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Marco Rossi              Arthur Kaliyev           Raivis Ansons            60     0   0  5  
 2 Théo Rochette            Maxim Cajkovic           Martin Chromiak          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jordan Spence            Jonas Brondberg                                   60     1   1  3  
 2 Marko Mladenovic         Kirill Steklov                                    40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Marco Rossi              Raivis Ansons            60     1   4  0  
 2 Joaquim Muratet          Théo Rochette            40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jonas Brondberg          Jordan Spence            60     1   4  0  
 2 Marko Mladenovic         Kirill Steklov           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joaquim Muratet                                   60     1   2  2  
 2 Théo Rochette                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jordan Spence            Jonas Brondberg          60     1   4  0  
 2 Kirill Steklov           Marko Mladenovic         40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Reinhard Venter          Rapolas Marcinkevicius   60     1   2  2  
 2 Rudolfs Polcs            Simon Knak               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ole Julian Bjorvik Holm  Thimo Nickl              60     1   2  2  
 2 Marko Mladenovic         Jordan Spence            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Marco Rossi              Arthur Kaliyev           Théo Rochette            Jonas Brondberg          Jordan Spence            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Marco Rossi              Raivis Ansons            Joaquim Muratet          Jonas Brondberg          Jordan Spence            

<b>Goaltenders</b>
Starting : Tobias Johansen Breivold 
Backup : Frederik Dichow          

<b>Extra Forwards</b>
Normal : Rudolfs Polcs, Simon Knak, Rapolas Marcinkevicius - PP : Reinhard Venter, Rapolas Marcinkevicius - PK : Raivis Ansons
<b>Extra Defensemen</b>
Normal : Marko Mladenovic, Thimo Nickl, Ole Julian Bjorvik Holm - PP : Kirill Steklov - PK : Marko Mladenovic, Ole Julian Bjorvik Holm
<b>Penalty Shots</b>
Arthur Kaliyev, Marco Rossi, Théo Rochette, Maxim Cajkovic, Martin Chromiak
<b>Custom OT Lines Forwards</b>
Marco Rossi, Arthur Kaliyev, Théo Rochette, Simon Knak, Rudolfs Polcs, Raivis Ansons, Martin Chromiak, Maxim Cajkovic, Joaquim Muratet, Reinhard Venter
<b>Custom OT Lines Defensemen</b>
Jordan Spence, Jonas Brondberg, Kirill Steklov, Ole Julian Bjorvik Holm, Thimo Nickl

<b>Scratches</b>
Sander Vold Engebratten (Healthy), Yusaku Ando (Healthy), Samuel Hlavaj (Healthy)</pre></div>
<h1 class="TeamLinesPro_USA"><a id="USA">USA</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">USA Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#USA">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#USA">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#USA">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#USA">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#USA">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#USA">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#USA">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#USA">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#USA">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#USA">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#USA">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#USA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_USA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_USA" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Trevor Zegras            Nick Robertson           Jack Hughes              26     0   0  5  
 2 Alex Turcotte            Matthew Boldy            Cole Caufield            26     0   0  5  
 3 Thomas Bordeleau         Matthew Beniers          Jacob Perreault          25     0   1  4  
 4 Brendan Brisson          Patrick Moynihan         Bobby Brink              23     0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake Sanderson           Jayden Struble                                    34     1   2  2  
 2 Ryan Johnson             Jackson LaCombe                                   33     1   2  2  
 3 Drew Helleson            Cam York                                          33     1   2  2  
 4 Drew Helleson            Jayden Struble                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Trevor Zegras            Nick Robertson           Jack Hughes              60     0   0  5  
 2 Alex Turcotte            Matthew Boldy            Cole Caufield            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam York                 Jayden Struble                                    60     0   0  5  
 2 Jackson LaCombe          Jake Sanderson                                    40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alex Turcotte            Jacob Perreault          60     1   4  0  
 2 Trevor Zegras            Bobby Brink              40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Sanderson           Ryan Johnson             60     1   4  0  
 2 Drew Helleson            Jayden Struble           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alex Turcotte                                     60     0   5  0  
 2 Trevor Zegras                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Sanderson           Ryan Johnson             60     0   5  0  
 2 Drew Helleson            Jayden Struble           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brendan Brisson          Bobby Brink              60     1   2  2  
 2 Thomas Bordeleau         Jacob Perreault          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Johnson             Drew Helleson            60     1   2  2  
 2 Jackson LaCombe          Cam York                 40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Trevor Zegras            Nick Robertson           Jack Hughes              Cam York                 Jayden Struble           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alex Turcotte            Matthew Boldy            Bobby Brink              Jake Sanderson           Ryan Johnson             

<b>Goaltenders</b>
Starting : Spencer Knight           
Backup : Dustin Wolf              

<b>Extra Forwards</b>
Normal : Matthew Beniers, Bobby Brink, Matthew Boldy - PP : Jacob Perreault, Brendan Brisson - PK : Thomas Bordeleau
<b>Extra Defensemen</b>
Normal : Drew Helleson, Jake Sanderson, Jayden Struble - PP : Ryan Johnson - PK : Cam York, Jackson LaCombe
<b>Penalty Shots</b>
Trevor Zegras, Jack Hughes, Nick Robertson, Cole Caufield, Alex Turcotte
<b>Custom OT Lines Forwards</b>
Jack Hughes, Nick Robertson, Trevor Zegras, Cole Caufield, Alex Turcotte, Matthew Boldy, Thomas Bordeleau, Brendan Brisson, Bobby Brink, Jacob Perreault
<b>Custom OT Lines Defensemen</b>
Jake Sanderson, Cam York, Jayden Struble, Ryan Johnson, Drew Helleson

<b>Scratches</b>
John Farinacci (Healthy), Henry Thrun (Healthy), Drew Commesso (Healthy)</pre></div>
<?php include "Footer.php";?>
