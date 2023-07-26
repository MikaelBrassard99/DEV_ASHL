<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Team Lines</title>
<script src="ASHL10.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#LavalChiefs">Laval Chiefs</a> | <a href="#PortlandPirates">Portland Pirates</a> | <a href="#ProvidenceBruins">Providence Bruins</a> | <a href="#RochesterAmericans">Rochester Americans</a> | <a href="#JolietteSportif">Joliette Sportif</a> | <a href="#CharlotteCheckers">Charlotte Checkers</a> | <a href="#RockfordIceHogs">Rockford IceHogs</a> | <a href="#LakeErieMonsters">Lake Erie Monsters</a> | <a href="#SpringfieldFalcons">Springfield Falcons</a> | <a href="#LasVegasGamblers">Las Vegas Gamblers</a> | <a href="#GrandRapidsGriffins">Grand Rapids Griffins</a> | <a href="#OklahomaCityBarons">Oklahoma City Barons</a> | <a href="#SanAntonioRampage">San Antonio Rampage</a> | <a href="#GatineauOlympiques">Gatineau Olympiques</a> | <a href="#HoustonAeros">Houston Aeros</a> | <a href="#Trois-RivièresDraveurs">Trois-Rivières Draveurs</a> | <a href="#MilwaukeeAdmirals">Milwaukee Admirals</a> | <a href="#AlbanyDevils">Albany Devils</a> | <a href="#BridgeportSoundTigers">Bridgeport Sound Tigers</a> | <a href="#ConnecticutWhale">Connecticut Whale</a> | <a href="#BinghamtonSenators">Binghamton Senators</a> | <a href="#AdirondackPhantoms">Adirondack Phantoms</a> | <a href="#Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a> | <a href="#ChicoutimiSaguenéens">Chicoutimi Saguenéens</a> | <a href="#Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a> | <a href="#MercerIslandArchangels">Mercer Island Archangels</a> | <a href="#PeoriaRivermen">Peoria Rivermen</a> | <a href="#NorfolkAdmirals">Norfolk Admirals</a> | <a href="#RobervalDwarfs">Roberval Dwarfs</a> | <a href="#ChicagoWolves">Chicago Wolves</a> | <a href="#HendersonSilverKnights">Henderson Silver Knights</a> | <a href="#LandshutCannibals">Landshut Cannibals</a> | <a href="#ManitobaMoose">Manitoba Moose</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLineFarm_LAV"><a id="LavalChiefs">Laval Chiefs</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#LavalChiefs">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#LavalChiefs">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#LavalChiefs">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#LavalChiefs">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#LavalChiefs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LavalChiefs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LavalChiefs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Sonny Milano             Daniel Sprong            35     0   1  4  
 2 Unknown Player           Rudolfs Balcers          Owen Tippett             35     0   1  4  
 3 Jacob Olofsson           Robin Kovacs             Troy Terry               25     0   1  4  
 4 Unknown Player           Robin Kovacs             Nikita Korostelev        5      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Filip Hronek             Juuso Välimäki                                    35     1   3  1  
 2 Unknown Player           Sami Niku                                         35     1   3  1  
 3 Unknown Player           Unknown Player                                    25     1   3  1  
 4 Joonas Lyytinen          Unknown Player                                    5      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Robin Kovacs             Rudolfs Balcers          Daniel Sprong            55     0   0  5  
 2 Unknown Player           Sonny Milano             Owen Tippett             45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Filip Hronek             Sami Niku                                         55     0   1  4  
 2 Juuso Välimäki           Unknown Player                                    45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob Olofsson           Robin Kovacs             55     1   3  1  
 2 Unknown Player           Nikita Korostelev        45     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Juuso Välimäki           55     1   3  1  
 2 Sami Niku                Filip Hronek             45     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jacob Olofsson                                    60     1   4  0  
 2 Unknown Player                                    40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Juuso Välimäki           55     1   4  0  
 2 Unknown Player           Filip Hronek             45     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Robin Kovacs             50     0   2  3  
 2 Troy Terry               Owen Tippett             50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Joonas Lyytinen          60     1   3  1  
 2 Unknown Player           Filip Hronek             40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Robin Kovacs             Rudolfs Balcers          Daniel Sprong            Filip Hronek             Sami Niku                

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jacob Olofsson           Robin Kovacs             Daniel Sprong            Unknown Player           Juuso Välimäki           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           
Third : Tyler Parsons            

<b>Extra Forwards</b>
Normal : Robin Kovacs, Rudolfs Balcers, Sonny Milano - PP : Robin Kovacs, Troy Terry - PK : Owen Tippett
<b>Extra Defensemen</b>
Normal : Filip Hronek, Juuso Välimäki, Unknown Player - PP : Unknown Player - PK : Sami Niku, Joonas Lyytinen
<b>Penalty Shots</b>
Troy Terry, Daniel Sprong, Rudolfs Balcers, Sonny Milano, Robin Kovacs
<b>Custom OT Lines Forwards</b>
Nikita Korostelev, Daniel Sprong, Sonny Milano, Rudolfs Balcers, Unknown Player, Owen Tippett, Unknown Player, Robin Kovacs, Troy Terry, Jacob Olofsson
<b>Custom OT Lines Defensemen</b>
Juuso Välimäki, Filip Hronek, Sami Niku, Joonas Lyytinen, Unknown Player

<b>Scratches</b>
Kalle Kossila (Healthy), Alex Barré-Boulet (Healthy), Ben Harpur (Healthy), Gabriel Beaupré (Healthy), Anthony Beauvillier (Healthy)
Allen York (Healthy)</pre></div>
<h1 class="TeamLineFarm_POR"><a id="PortlandPirates">Portland Pirates</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#PortlandPirates">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#PortlandPirates">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#PortlandPirates">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#PortlandPirates">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#PortlandPirates">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PortlandPirates');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PortlandPirates" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Greg Meireles            Skyler McKenzie          Vilmos Gallo             28     0   1  4  
 2 Yegor Sharangovich       Vadim Vasjonkin          Joachim Blichfeld        26     0   1  4  
 3 Unknown Player           Arturas Laukaitis        Trey Fix-Wolansky        24     0   1  4  
 4 Max Hermens              Jayden Halbgewachs       Jermaine Loewen          22     1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Karlis Cukste                                     30     1   2  2  
 2 Mattias Norstebo         Unknown Player                                    27     1   2  2  
 3 Kacper Bartnik           Gregorio Gios                                     23     1   2  2  
 4 Yegor Sharangovich       Unknown Player                                    20     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Vadim Vasjonkin          Trey Fix-Wolansky        60     1   0  4  
 2 Max Hermens              Joachim Blichfeld        Vilmos Gallo             40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Norstebo         Karlis Cukste                                     60     1   1  3  
 2 Unknown Player           Gregorio Gios                                     40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Max Hermens              Jermaine Loewen          60     1   2  2  
 2 Trey Fix-Wolansky        Vilmos Gallo             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Karlis Cukste            60     1   2  2  
 2 Unknown Player           Mattias Norstebo         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Vilmos Gallo                                      60     1   2  2  
 2 Max Hermens                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Karlis Cukste            60     1   2  2  
 2 Mattias Norstebo         Gregorio Gios            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Vadim Vasjonkin          60     1   2  2  
 2 Max Hermens              Vilmos Gallo             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Karlis Cukste            60     1   2  2  
 2 Mattias Norstebo         Gregorio Gios            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joachim Blichfeld        Jayden Halbgewachs       Trey Fix-Wolansky        Mattias Norstebo         Karlis Cukste            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Max Hermens              Mattias Norstebo         Vilmos Gallo             Unknown Player           Karlis Cukste            

<b>Goaltenders</b>
Starting : Mareks Mitens            
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Skyler McKenzie, Greg Meireles - PP : Unknown Player, Max Hermens - PK : Jermaine Loewen
<b>Extra Defensemen</b>
Normal : Karlis Cukste, Mattias Norstebo, Gregorio Gios - PP : Mattias Norstebo - PK : Mattias Norstebo, Gregorio Gios
<b>Penalty Shots</b>
Jayden Halbgewachs, Unknown Player, Unknown Player, Vilmos Gallo, Trey Fix-Wolansky
<b>Custom OT Lines Forwards</b>
Joachim Blichfeld, Unknown Player, Max Hermens, Vilmos Gallo, Greg Meireles, Trey Fix-Wolansky, Unknown Player, Jermaine Loewen, Vadim Vasjonkin, Skyler McKenzie
<b>Custom OT Lines Defensemen</b>
Unknown Player, Karlis Cukste, Mattias Norstebo, Gregorio Gios, Unknown Player

<b>Scratches</b>
Arturs Kulda (Healthy), Rodrigo Abols (Healthy), Jesper Jensen (Healthy), Ronalds Kenins (Healthy), Demid Yeremeyev (Healthy)
Emil Garipov (Healthy)</pre></div>
<h1 class="TeamLineFarm_PRO"><a id="ProvidenceBruins">Providence Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#ProvidenceBruins">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#ProvidenceBruins">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#ProvidenceBruins">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#ProvidenceBruins">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#ProvidenceBruins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ProvidenceBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ProvidenceBruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alexander Khokhlachev    Simon Tremblay           Hudson Fasching          25     1   2  2  
 2 Riley Sheahan            Justin Florek            Ben Sexton               25     1   2  2  
 3 Jakob Forsbacka Karlsson Calle Jarnkrok           Jordan Schroeder         25     1   2  2  
 4 Calle Jarnkrok           Hudson Fasching          Jamie Arniel             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cameron Gaunce           Roland McKeown                                    25     1   2  2  
 2 Konrad Abeltshauser      Zach Trotman                                      25     1   2  2  
 3 Dalton Thrower           Cody Goloubef                                     25     1   2  2  
 4 Roland McKeown           Tommy Cross                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alexander Khokhlachev    Simon Tremblay           Hudson Fasching          60     1   2  2  
 2 Riley Sheahan            Justin Florek            Ben Sexton               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cameron Gaunce           Dalton Thrower                                    60     1   2  2  
 2 Konrad Abeltshauser      Zach Trotman                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Hudson Fasching          Alexander Khokhlachev    60     1   2  2  
 2 Riley Sheahan            Jakob Forsbacka Karlsson 40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Gaunce           Dalton Thrower           60     1   2  2  
 2 Konrad Abeltshauser      Zach Trotman             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Hudson Fasching                                   60     1   2  2  
 2 Alexander Khokhlachev                             40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Gaunce           Cody Goloubef            60     1   2  2  
 2 Konrad Abeltshauser      Zach Trotman             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Hudson Fasching          Alexander Khokhlachev    60     1   2  2  
 2 Riley Sheahan            Jakob Forsbacka Karlsson 40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Gaunce           Dalton Thrower           60     1   2  2  
 2 Konrad Abeltshauser      Zach Trotman             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexander Khokhlachev    Simon Tremblay           Hudson Fasching          Cameron Gaunce           Dalton Thrower           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexander Khokhlachev    Simon Tremblay           Hudson Fasching          Cameron Gaunce           Dalton Thrower           

<b>Goaltenders</b>
Starting : Michael Hutchinson       
Backup : Henrik Karlsson          
Third : Lars Volden              

<b>Extra Forwards</b>
Normal : Tyler Randell, Jordan Schroeder, Jamie Arniel - PP : Tyler Randell, Jordan Schroeder - PK : Jamie Arniel
<b>Extra Defensemen</b>
Normal : David Warsofsky, Dalton Thrower, Cody Goloubef - PP : David Warsofsky - PK : Dalton Thrower, Cody Goloubef
<b>Penalty Shots</b>
Hudson Fasching, Alexander Khokhlachev, Riley Sheahan, Jakob Forsbacka Karlsson, Simon Tremblay
<b>Custom OT Lines Forwards</b>
Hudson Fasching, Alexander Khokhlachev, Riley Sheahan, Jakob Forsbacka Karlsson, Simon Tremblay, Calle Jarnkrok, Justin Florek, Ben Sexton, Jordan Schroeder, Jamie Arniel
<b>Custom OT Lines Defensemen</b>
Cameron Gaunce, Roland McKeown, Konrad Abeltshauser, Zach Trotman, Dalton Thrower

<b>Scratches</b>
Marc-Antoine Pouliot (Healthy), Tim Bozon (Healthy), Adam Courchaine (Healthy), Brian Ferlin (Healthy)</pre></div>
<h1 class="TeamLineFarm_RCH"><a id="RochesterAmericans">Rochester Americans</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#RochesterAmericans">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#RochesterAmericans">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#RochesterAmericans">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#RochesterAmericans">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#RochesterAmericans">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RochesterAmericans');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RochesterAmericans" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Laughton           Unknown Player           Unknown Player           25     1   2  2  
 2 Matthew Highmore         Unknown Player           Tomas Kubalik            25     1   2  2  
 3 Trevor Cox               Unknown Player           Nick Baptiste            25     1   2  2  
 4 Eric Cornel              Peter Cehlarik           Unknown Player           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Harrison Ruopp           Unknown Player                                    25     1   2  2  
 2 Ralfs Freibergs          Unknown Player                                    25     1   2  2  
 3 Filip Westerlund         Eric Cornel                                       25     1   2  2  
 4 Harrison Ruopp           Unknown Player                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Laughton           Unknown Player           Unknown Player           60     1   2  2  
 2 Matthew Highmore         Unknown Player           Tomas Kubalik            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Harrison Ruopp           Unknown Player                                    60     1   2  2  
 2 Ralfs Freibergs          Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Scott Laughton           Matthew Highmore         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Harrison Ruopp           Unknown Player           60     1   2  2  
 2 Ralfs Freibergs          Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Harrison Ruopp           Unknown Player           60     1   2  2  
 2 Ralfs Freibergs          Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Scott Laughton           Matthew Highmore         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Harrison Ruopp           Unknown Player           60     1   2  2  
 2 Ralfs Freibergs          Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Laughton           Unknown Player           Unknown Player           Harrison Ruopp           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Laughton           Unknown Player           Unknown Player           Harrison Ruopp           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Elvis Merzlikins         

<b>Extra Forwards</b>
Normal : Cameron Morrison, Trevor Cox, Nick Baptiste - PP : Cameron Morrison, Trevor Cox - PK : Nick Baptiste
<b>Extra Defensemen</b>
Normal : Filip Westerlund, Ralfs Freibergs, Unknown Player - PP : Filip Westerlund - PK : Ralfs Freibergs, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Scott Laughton, Matthew Highmore, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Scott Laughton, Matthew Highmore, Unknown Player, Tomas Kubalik, Trevor Cox, Nick Baptiste, Unknown Player, Eric Cornel
<b>Custom OT Lines Defensemen</b>
Harrison Ruopp, Unknown Player, Ralfs Freibergs, Unknown Player, Filip Westerlund

<b>Scratches</b>
Kyle Cumiskey (Healthy), Matt Taormina (Healthy), Nicklas Bergfors (Healthy), Sergei Kostitsyn (Healthy), Richard Panik (Healthy)
Sean Kuraly (Healthy), Tomas Jurco (Healthy), Daniel O'Regan (Healthy), Jujhar Khaira (Healthy), Carl Dahlstrom (Healthy)
Bradley Eidsness (Healthy)</pre></div>
<h1 class="TeamLineFarm_JOL"><a id="JolietteSportif">Joliette Sportif</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#JolietteSportif">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#JolietteSportif">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#JolietteSportif">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#JolietteSportif">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#JolietteSportif">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_JolietteSportif');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_JolietteSportif" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Antoine Vermette         Unknown Player           Jesper Fasth             25     1   2  2  
 2 Scott Wilson             Ryan MacInnis            Danny Kristo             25     1   2  2  
 3 Nick Paul                Jiri Hudler              Greg Nemisz              25     1   2  2  
 4 Unknown Player           Unknown Player           Michael Ferland          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jacob Larsson                                     25     1   2  2  
 2 Ryan Lindgren            Louis Belpedio                                    25     1   2  2  
 3 Oscar Fantenberg         Luke Green                                        25     1   2  2  
 4 Unknown Player           Jacob Larsson                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Antoine Vermette         Unknown Player           Ryan MacInnis            60     1   2  2  
 2 Scott Wilson             Greg Nemisz              Danny Kristo             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jacob Larsson                                     60     1   2  2  
 2 Ryan Lindgren            Louis Belpedio                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Antoine Vermette         Ryan MacInnis            60     1   2  2  
 2 Michael Ferland          Greg Nemisz              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jacob Larsson            60     1   2  2  
 2 Ryan Lindgren            Louis Belpedio           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Antoine Vermette                                  60     1   2  2  
 2 Nick Paul                                         40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jacob Larsson            60     1   2  2  
 2 Ryan Lindgren            Louis Belpedio           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Paul                Michael Ferland          60     1   2  2  
 2 Ryan MacInnis            Jesper Fasth             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jacob Larsson            60     1   2  2  
 2 Ryan Lindgren            Louis Belpedio           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Antoine Vermette         Unknown Player           Ryan MacInnis            Unknown Player           Jacob Larsson            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Antoine Vermette         Ryan MacInnis            Greg Nemisz              Unknown Player           Jacob Larsson            

<b>Goaltenders</b>
Starting : Jack Lafontaine          
Backup : Laurent Brossoit         

<b>Extra Forwards</b>
Normal : Jesper Fasth, Unknown Player, Unknown Player - PP : Ryan MacInnis, Danny Kristo - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Oscar Fantenberg, Luke Green, Ryan Lindgren - PP : Oscar Fantenberg - PK : Unknown Player, Ryan Lindgren
<b>Penalty Shots</b>
Antoine Vermette, Unknown Player, Danny Kristo, Ryan MacInnis, Greg Nemisz
<b>Custom OT Lines Forwards</b>
Antoine Vermette, Unknown Player, Michael Ferland, Greg Nemisz, Nick Paul, Ryan MacInnis, Jiri Hudler, Unknown Player, Danny Kristo, Jesper Fasth
<b>Custom OT Lines Defensemen</b>
Unknown Player, Jacob Larsson, Ryan Lindgren, Louis Belpedio, Oscar Fantenberg

<b>Scratches</b>
Brendon Nash (Healthy), Drew Miller (Healthy), Zach Boychuk (Healthy), Anton Zlobin (Healthy), Dmitri Mikhailov (Healthy)
John Ramage (Healthy), Riley Barber (Healthy), Melvin Nyffeler (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHA"><a id="CharlotteCheckers">Charlotte Checkers</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#CharlotteCheckers">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#CharlotteCheckers">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#CharlotteCheckers">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#CharlotteCheckers">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#CharlotteCheckers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CharlotteCheckers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CharlotteCheckers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Oscar Lindberg           Andrew Ladd              Unknown Player           25     1   2  2  
 2 Kiefer Sherwood          Kenny Agostino           Unknown Player           25     1   2  2  
 3 Unknown Player           Unknown Player           Carter Ashton            25     1   2  2  
 4 Joey Hishon              Oscar Lindberg           Sondre Olden             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    25     1   2  2  
 2 Unknown Player           Unknown Player                                    25     1   2  2  
 3 Michael Paliotta         Unknown Player                                    25     1   2  2  
 4 Unknown Player           Unknown Player                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Oscar Lindberg           Andrew Ladd              Unknown Player           60     1   2  2  
 2 Kiefer Sherwood          Kenny Agostino           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrew Ladd              Unknown Player           60     1   2  2  
 2 Kenny Agostino           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Michael Paliotta         60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Andrew Ladd                                       60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrew Ladd              Unknown Player           60     1   2  2  
 2 Kenny Agostino           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Andrew Ladd              Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Andrew Ladd              Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Ben Scrivens             

<b>Extra Forwards</b>
Normal : Oscar Lindberg, Unknown Player, Carter Ashton - PP : Oscar Lindberg, Unknown Player - PK : Carter Ashton
<b>Extra Defensemen</b>
Normal : Michael Paliotta, Unknown Player, Unknown Player - PP : Michael Paliotta - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Andrew Ladd, Unknown Player, Kenny Agostino, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Andrew Ladd, Unknown Player, Kenny Agostino, Oscar Lindberg, Unknown Player, Unknown Player, Kiefer Sherwood, Carter Ashton, Sondre Olden, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Michael Paliotta

<b>Scratches</b>
James Wisniewski (Healthy), Ladislav Smid (Healthy), Patrick O'Sullivan (Healthy), Zac Dalpe (Healthy), Michael Stone (Healthy)
Josh Jooris (Healthy), Rasmus Nielsen (Healthy), Ricard Blidstrand (Healthy), Kenney Morrison (Healthy), Radovan Bondra (Healthy)
Mike Murphy (Healthy)</pre></div>
<h1 class="TeamLineFarm_RFD"><a id="RockfordIceHogs">Rockford IceHogs</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#RockfordIceHogs">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#RockfordIceHogs">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#RockfordIceHogs">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#RockfordIceHogs">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#RockfordIceHogs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RockfordIceHogs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RockfordIceHogs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Nathan Walker            Justin Auger             34     0   1  4  
 2 Christopher DiDomenico   Zach Pochiro             Unknown Player           28     0   2  3  
 3 Unknown Player           Julien Pelletier         Nikolai Zherdev          22     1   1  3  
 4 Unknown Player           Unknown Player           Philippe Paradis         16     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Julian Melchiori                                  34     1   3  1  
 2 Jake Muzzin              Unknown Player                                    33     1   3  1  
 3 Jason Fram               Trevor Van Riemsdyk                               33     1   3  1  
 4 Unknown Player           Julian Melchiori                                  0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Nathan Walker            Justin Auger             50     0   0  5  
 2 Christopher DiDomenico   Zach Pochiro             Unknown Player           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Trevor Van Riemsdyk      Justin Holl                                       50     1   3  1  
 2 Unknown Player           Jason Fram                                        50     1   3  1  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Justin Holl              50     0   5  0  
 2 Unknown Player           Zach Pochiro             50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Julian Melchiori         50     1   3  1  
 2 Jake Muzzin              Unknown Player           50     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    50     0   5  0  
 2 Unknown Player                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Julian Melchiori         50     1   3  1  
 2 Jake Muzzin              Unknown Player           50     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Justin Auger             50     0   2  3  
 2 Christopher DiDomenico   Zach Pochiro             50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Julian Melchiori         50     1   3  1  
 2 Jake Muzzin              Unknown Player           50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Nathan Walker            Justin Auger             Trevor Van Riemsdyk      Justin Holl              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Justin Holl              Unknown Player           Julian Melchiori         

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Justin Auger, Zach Pochiro - PP : Unknown Player, Julien Pelletier - PK : Justin Auger
<b>Extra Defensemen</b>
Normal : Jake Muzzin, Trevor Van Riemsdyk, Justin Holl - PP : Julian Melchiori - PK : Jake Muzzin, Jason Fram
<b>Penalty Shots</b>
Christopher DiDomenico, Nikolai Zherdev, Philippe Paradis, Unknown Player, Justin Auger
<b>Custom OT Lines Forwards</b>
Unknown Player, Justin Auger, Christopher DiDomenico, Unknown Player, Unknown Player, Nathan Walker, Unknown Player, Zach Pochiro, Julien Pelletier, Philippe Paradis
<b>Custom OT Lines Defensemen</b>
Trevor Van Riemsdyk, Justin Holl, Unknown Player, Jason Fram, Julian Melchiori

<b>Scratches</b>
David Gilbert (Healthy), Zac Rinaldo (Healthy)</pre></div>
<h1 class="TeamLineFarm_LKE"><a id="LakeErieMonsters">Lake Erie Monsters</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#LakeErieMonsters">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#LakeErieMonsters">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#LakeErieMonsters">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#LakeErieMonsters">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#LakeErieMonsters">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LakeErieMonsters');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LakeErieMonsters" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Ivan Barbashev           Sergey Tolchinsky        39     0   2  3  
 2 Christoph Bertschy       Unknown Player           Kurtis Gabriel           39     0   2  3  
 3 Unknown Player           Francis Beauvillier      Luke Moffatt             20     0   3  2  
 4 Francis Beauvillier      Christoph Bertschy       Unknown Player           2      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Tim Heed                                          40     0   4  1  
 2 Brett Cote               Ryan Stanton                                      40     0   4  1  
 3 Gus Young                Unknown Player                                    20     0   4  1  
 4 Gavin Bayreuther         Troy Rutkowski                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Sergey Tolchinsky        Unknown Player           60     0   0  5  
 2 Stephen MacAulay         Ivan Barbashev           Kurtis Gabriel           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Stanton             Tim Heed                                          60     0   1  4  
 2 Unknown Player           Stephen Silas                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Sergey Tolchinsky        60     1   3  1  
 2 Kurtis Gabriel           Francis Beauvillier      40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Tim Heed                 60     1   4  0  
 2 Brett Cote               Gus Young                40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sergey Tolchinsky                                 60     0   5  0  
 2 Unknown Player                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Tim Heed                 60     0   5  0  
 2 Brett Cote               Gus Young                40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Sergey Tolchinsky        60     1   2  2  
 2 Unknown Player           Kurtis Gabriel           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gus Young                Ryan Stanton             60     1   2  2  
 2 Unknown Player           Stephen Silas            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Ivan Barbashev           Tim Heed                 Ryan Stanton             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Sergey Tolchinsky        Kurtis Gabriel           Unknown Player           Ryan Stanton             

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Peter Delmas             

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Ryan Stanton, Gus Young, Troy Rutkowski - PP : Ryan Stanton - PK : Gus Young, Troy Rutkowski
<b>Penalty Shots</b>
Luke Moffatt, Sergey Tolchinsky, Unknown Player, Unknown Player, Kurtis Gabriel
<b>Custom OT Lines Forwards</b>
Unknown Player, Sergey Tolchinsky, Unknown Player, Ivan Barbashev, Kurtis Gabriel, Luke Moffatt, Unknown Player, Christoph Bertschy, Unknown Player, Francis Beauvillier
<b>Custom OT Lines Defensemen</b>
Gavin Bayreuther, Ryan Stanton, Unknown Player, Stephen Silas, Gus Young

<b>Scratches</b>
Luke Walker (Healthy), Nathan Condon (Healthy), Trevor Cann (Healthy)</pre></div>
<h1 class="TeamLineFarm_SPR"><a id="SpringfieldFalcons">Springfield Falcons</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#SpringfieldFalcons">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#SpringfieldFalcons">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#SpringfieldFalcons">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#SpringfieldFalcons">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#SpringfieldFalcons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SpringfieldFalcons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SpringfieldFalcons" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Shane Bowers             Remi Elie                Dominik Bokk             35     0   1  4  
 2 Carsen Twarynski         Marcus Karlberg          Martin Kaut              30     0   2  3  
 3 Alexander Dergachyov     Pius Suter               Samuel Blais             30     0   2  3  
 4 Unknown Player           Carsen Twarynski         Anton Blidh              5      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Boqvist             Mirco Mueller                                     35     0   2  3  
 2 Nikita Tryamkin          David Quenneville                                 35     0   3  2  
 3 Brendan Guhle            Blake Siebenaler                                  30     0   3  2  
 4 Adam Boqvist             Mirco Mueller                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Shane Bowers             Remi Elie                Dominik Bokk             60     0   0  5  
 2 Samuel Blais             Marcus Karlberg          Martin Kaut              40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Boqvist             Mirco Mueller                                     60     0   1  4  
 2 David Quenneville        Brendan Guhle                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Pius Suter               Anton Blidh              60     1   4  0  
 2 Unknown Player           Samuel Blais             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Tryamkin          Mirco Mueller            60     1   4  0  
 2 Brendan Guhle            Adam Boqvist             40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   4  0  
 2 Samuel Blais                                      40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Tryamkin          Mirco Mueller            60     1   4  0  
 2 Brendan Guhle            Adam Boqvist             40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Shane Bowers             Dominik Bokk             60     0   1  4  
 2 Marcus Karlberg          Martin Kaut              40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Boqvist             Mirco Mueller            60     0   3  2  
 2 David Quenneville        Brendan Guhle            40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Shane Bowers             Remi Elie                Martin Kaut              Nikita Tryamkin          Mirco Mueller            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Shane Bowers             Remi Elie                Martin Kaut              Nikita Tryamkin          Mirco Mueller            

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Spencer Martin           

<b>Extra Forwards</b>
Normal : Marcus Karlberg, Remi Elie, Shane Bowers - PP : Marcus Karlberg, Shane Bowers - PK : Shane Bowers
<b>Extra Defensemen</b>
Normal : Nikita Tryamkin, Adam Boqvist, Brendan Guhle - PP : Mirco Mueller - PK : Adam Boqvist, Brendan Guhle
<b>Penalty Shots</b>
Dominik Bokk, Remi Elie, Samuel Blais, Alexander Dergachyov, Pius Suter
<b>Custom OT Lines Forwards</b>
Dominik Bokk, Remi Elie, Samuel Blais, Alexander Dergachyov, Pius Suter, Anton Blidh, Martin Kaut, Shane Bowers, Marcus Karlberg, Carsen Twarynski
<b>Custom OT Lines Defensemen</b>
Adam Boqvist, Mirco Mueller, Nikita Tryamkin, David Quenneville, Brendan Guhle

<b>Scratches</b>
Derek Grant (Healthy), Eric Locke (Healthy), Mark Owuya (Healthy), Aaron Dell (Healthy)</pre></div>
<h1 class="TeamLineFarm_LVG"><a id="LasVegasGamblers">Las Vegas Gamblers</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#LasVegasGamblers">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#LasVegasGamblers">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#LasVegasGamblers">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#LasVegasGamblers">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#LasVegasGamblers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LasVegasGamblers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LasVegasGamblers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Conner Bleackley         Lauri Korpikoski         Kyle Okposo              25     1   2  2  
 2 Jayce Hawryluk           Jimmy Vesey              Melker Karlsson          25     1   2  2  
 3 Colton Gillies           Isac Lundestrom          Cam Atkinson             25     1   2  2  
 4 Kyle Okposo              Adam Brodecki            Tobias Lindberg          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Haydn Fleury             Unknown Player                                    25     1   2  2  
 2 Unknown Player           Rob O'Gara                                        25     1   2  2  
 3 Parker Wotherspoon       Unknown Player                                    25     1   2  2  
 4 Haydn Fleury             Unknown Player                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Conner Bleackley         Lauri Korpikoski         Kyle Okposo              60     1   2  2  
 2 Jayce Hawryluk           Jimmy Vesey              Melker Karlsson          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Haydn Fleury             Unknown Player                                    60     1   2  2  
 2 Unknown Player           Rob O'Gara                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kyle Okposo              Lauri Korpikoski         60     1   2  2  
 2 Conner Bleackley         Jayce Hawryluk           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Haydn Fleury             Unknown Player           60     1   2  2  
 2 Unknown Player           Rob O'Gara               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Kyle Okposo                                       60     1   2  2  
 2 Lauri Korpikoski                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Haydn Fleury             Unknown Player           60     1   2  2  
 2 Unknown Player           Rob O'Gara               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kyle Okposo              Lauri Korpikoski         60     1   2  2  
 2 Conner Bleackley         Jayce Hawryluk           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Haydn Fleury             Unknown Player           60     1   2  2  
 2 Unknown Player           Rob O'Gara               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Conner Bleackley         Lauri Korpikoski         Kyle Okposo              Haydn Fleury             Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Conner Bleackley         Lauri Korpikoski         Kyle Okposo              Haydn Fleury             Unknown Player           

<b>Goaltenders</b>
Starting : Filip Gustavsson         
Backup : Evan Fitzpatrick         

<b>Extra Forwards</b>
Normal : Givani Smith, Cam Atkinson, Colton Gillies - PP : Givani Smith, Cam Atkinson - PK : Colton Gillies
<b>Extra Defensemen</b>
Normal : Parker Wotherspoon, Unknown Player, Unknown Player - PP : Parker Wotherspoon - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Kyle Okposo, Lauri Korpikoski, Conner Bleackley, Jayce Hawryluk, Jimmy Vesey
<b>Custom OT Lines Forwards</b>
Kyle Okposo, Lauri Korpikoski, Conner Bleackley, Jayce Hawryluk, Jimmy Vesey, Melker Karlsson, Cam Atkinson, Colton Gillies, Isac Lundestrom, Adam Brodecki
<b>Custom OT Lines Defensemen</b>
Haydn Fleury, Unknown Player, Unknown Player, Rob O'Gara, Parker Wotherspoon

<b>Scratches</b>
Justin Kea (Healthy), Christian Jaros (Healthy), Maxim Chudinov (Healthy), Eric Gryba (Healthy), Chad Johnson (Healthy)</pre></div>
<h1 class="TeamLineFarm_GRG"><a id="GrandRapidsGriffins">Grand Rapids Griffins</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#GrandRapidsGriffins">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#GrandRapidsGriffins">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#GrandRapidsGriffins">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#GrandRapidsGriffins">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#GrandRapidsGriffins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GrandRapidsGriffins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GrandRapidsGriffins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Shane Prince             Unknown Player           Tomas Vincour            25     1   2  2  
 2 Valtteri Filppula        Andrew Agozzino          Brooks Macek             25     1   2  2  
 3 Dylan Sikura             Brady Tkachuk            Philippe Hudon           25     1   2  2  
 4 Brent Raedeke            Kaspars Daugavins        Unknown Player           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    25     1   2  2  
 2 Dennis Persson           Josh Gorges                                       25     1   2  2  
 3 Ryan Button              Unknown Player                                    25     1   2  2  
 4 Chad Billins             Unknown Player                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Shane Prince             Unknown Player           Tomas Vincour            60     1   2  2  
 2 Valtteri Filppula        Andrew Agozzino          Brooks Macek             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Dennis Persson           Josh Gorges                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Shane Prince             60     1   2  2  
 2 Valtteri Filppula        Tomas Vincour            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Dennis Persson           Josh Gorges              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Shane Prince                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Dennis Persson           Josh Gorges              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Shane Prince             60     1   2  2  
 2 Valtteri Filppula        Tomas Vincour            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Dennis Persson           Josh Gorges              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Shane Prince             Unknown Player           Tomas Vincour            Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Shane Prince             Unknown Player           Tomas Vincour            Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Jake Allen               
Backup : Alex Dubeau              

<b>Extra Forwards</b>
Normal : Unknown Player, Dominic Zwerger, Dylan Sikura - PP : Unknown Player, Dominic Zwerger - PK : Dylan Sikura
<b>Extra Defensemen</b>
Normal : Ryan Button, Unknown Player, Chad Billins - PP : Ryan Button - PK : Unknown Player, Chad Billins
<b>Penalty Shots</b>
Unknown Player, Shane Prince, Valtteri Filppula, Tomas Vincour, Andrew Agozzino
<b>Custom OT Lines Forwards</b>
Unknown Player, Shane Prince, Valtteri Filppula, Tomas Vincour, Andrew Agozzino, Brooks Macek, Dylan Sikura, Philippe Hudon, Brady Tkachuk, Kaspars Daugavins
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Dennis Persson, Josh Gorges, Ryan Button

<b>Scratches</b>
Alexei Marchenko (Healthy), Jannik Hansen (Healthy), Teemu Laakso (Healthy), Miha Verlic (Healthy), Chris Wideman (Healthy)
Luka Gracnar (Healthy)</pre></div>
<h1 class="TeamLineFarm_OKC"><a id="OklahomaCityBarons">Oklahoma City Barons</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#OklahomaCityBarons">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#OklahomaCityBarons">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#OklahomaCityBarons">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#OklahomaCityBarons">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#OklahomaCityBarons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OklahomaCityBarons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OklahomaCityBarons" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael McLeod           Paul Bittner             Valentin Zykov           34     0   2  3  
 2 Antoine Morand           Unknown Player           Unknown Player           32     0   2  3  
 3 Jared Knight             Teemu Hartikainen        Brendan Lemieux          27     0   2  3  
 4 Antoine Morand           Brendan Lemieux          Jared Knight             7      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Samorukov         Jack Dougherty                                    34     1   2  2  
 2 Unknown Player           J.D. Greenway                                     33     1   2  2  
 3 Matthew Spencer          Alex Lintuniemi                                   27     1   2  2  
 4 Matthew Spencer          Dmitri Samorukov                                  6      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael McLeod           Paul Bittner             Valentin Zykov           56     0   0  5  
 2 Antoine Morand           Brendan Lemieux          Teemu Hartikainen        44     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jack Dougherty           Dmitri Samorukov                                  56     0   1  4  
 2 Unknown Player           J.D. Greenway                                     44     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael McLeod           Teemu Hartikainen        55     0   5  0  
 2 Antoine Morand           Paul Bittner             45     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matthew Spencer          Alex Lintuniemi          56     1   4  0  
 2 Jack Dougherty           J.D. Greenway            44     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Paul Bittner                                      56     0   5  0  
 2 Michael McLeod                                    44     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matthew Spencer          Alex Lintuniemi          55     0   5  0  
 2 Unknown Player           Jack Dougherty           45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael McLeod           Valentin Zykov           56     0   1  4  
 2 Antoine Morand           Paul Bittner             44     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitri Samorukov         Jack Dougherty           56     0   1  4  
 2 Unknown Player           J.D. Greenway            44     0   1  4  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael McLeod           Paul Bittner             Valentin Zykov           Dmitri Samorukov         Jack Dougherty           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brendan Lemieux          Valentin Zykov           Teemu Hartikainen        J.D. Greenway            Matthew Spencer          

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Tyler Bunz               
Third : Samu Perhonen            

<b>Extra Forwards</b>
Normal : Paul Bittner, Valentin Zykov, Antoine Morand - PP : Paul Bittner, Antoine Morand - PK : Antoine Morand
<b>Extra Defensemen</b>
Normal : J.D. Greenway, Jack Dougherty, Unknown Player - PP : Matthew Spencer - PK : J.D. Greenway, Jack Dougherty
<b>Penalty Shots</b>
Antoine Morand, Michael McLeod, Valentin Zykov, Teemu Hartikainen, Paul Bittner
<b>Custom OT Lines Forwards</b>
Michael McLeod, Valentin Zykov, Jared Knight, Paul Bittner, Antoine Morand, Unknown Player, Unknown Player, Teemu Hartikainen, Alex Lintuniemi, Brendan Lemieux
<b>Custom OT Lines Defensemen</b>
Unknown Player, Jack Dougherty, J.D. Greenway, Dmitri Samorukov, Matthew Spencer

<b>Scratches</b>
Otto Leskinen (Healthy), Daniel Winnik (Healthy), Kailer Yamamoto (Healthy), Jimmy Hayes (Healthy), Gabriel Vilardi (Healthy)
Cameron Hughes (Healthy), Cedrick Desjardins (Healthy)</pre></div>
<h1 class="TeamLineFarm_SAR"><a id="SanAntonioRampage">San Antonio Rampage</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#SanAntonioRampage">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#SanAntonioRampage">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#SanAntonioRampage">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#SanAntonioRampage">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#SanAntonioRampage">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanAntonioRampage');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanAntonioRampage" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Jordan Greenway          Rihards Bukarts          25     1   2  2  
 2 Unknown Player           Iiro Pakarinen           Tomas Hyka               25     1   2  2  
 3 Linus Lindstrom          Garrett Wilson           Unknown Player           25     1   2  2  
 4 Jordan Greenway          Unknown Player           Rihards Bukarts          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Benning             Unknown Player                                    25     1   2  2  
 2 Unknown Player           Unknown Player                                    25     1   2  2  
 3 Juuso Riikola            Jan Kostalek                                      25     1   2  2  
 4 Matt Benning             Unknown Player                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Jordan Greenway          Rihards Bukarts          60     1   2  2  
 2 Unknown Player           Iiro Pakarinen           Tomas Hyka               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Benning             Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Greenway          Rihards Bukarts          60     1   2  2  
 2 Iiro Pakarinen           Garrett Wilson           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Benning             Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Greenway                                   60     1   2  2  
 2 Rihards Bukarts                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Benning             Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Greenway          Rihards Bukarts          60     1   2  2  
 2 Iiro Pakarinen           Garrett Wilson           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Benning             Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Jordan Greenway          Rihards Bukarts          Matt Benning             Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Jordan Greenway          Rihards Bukarts          Matt Benning             Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Johan Gustafsson         
Third : Keith Petruzzelli        

<b>Extra Forwards</b>
Normal : Jordan Greenway, Unknown Player, Unknown Player - PP : Rihards Bukarts, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Juuso Riikola, Jan Kostalek, Unknown Player - PP : Juuso Riikola - PK : Jan Kostalek, Unknown Player
<b>Penalty Shots</b>
Jordan Greenway, Rihards Bukarts, Iiro Pakarinen, Garrett Wilson, Tomas Hyka
<b>Custom OT Lines Forwards</b>
Jordan Greenway, Rihards Bukarts, Iiro Pakarinen, Garrett Wilson, Tomas Hyka, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Linus Lindstrom
<b>Custom OT Lines Defensemen</b>
Matt Benning, Unknown Player, Unknown Player, Unknown Player, Juuso Riikola

<b>Scratches</b>
Aaron Volpatti (Healthy), Adam McQuaid (Healthy), Alexander Sulzer (Healthy), Andrew Desjardins (Healthy), Andrey Zubarev (Healthy)
Bobby Butler (Healthy), Justin Feser (Healthy), Andrea Kristler (Healthy), Andrew Bodnarchuk (Healthy), Vaclav Karabacek (Healthy)
Aapeli Rasanen (Healthy), Tanner Kaspick (Healthy)</pre></div>
<h1 class="TeamLineFarm_GAT"><a id="GatineauOlympiques">Gatineau Olympiques</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#GatineauOlympiques">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#GatineauOlympiques">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#GatineauOlympiques">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#GatineauOlympiques">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#GatineauOlympiques">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GatineauOlympiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GatineauOlympiques" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Miles Wood               Jerry D'Amigo            25     1   2  2  
 2 Anthony Cirelli          Mathieu Joseph           Unknown Player           25     1   2  2  
 3 Brendan Gaunce           Laurin Braun             Matt Luff                25     1   2  2  
 4 Mikey Eyssimont          Anders Bjork             Unknown Player           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Andersson         Robert Hagg                                       25     1   2  2  
 2 Jordan Subban            Caleb Jones                                       25     1   2  2  
 3 Victor Mete              Ryan Segalla                                      25     1   2  2  
 4 Rasmus Andersson         Robert Hagg                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Miles Wood               Jerry D'Amigo            60     1   2  2  
 2 Anthony Cirelli          Mathieu Joseph           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Andersson         Robert Hagg                                       60     1   2  2  
 2 Jordan Subban            Caleb Jones                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Miles Wood               60     1   2  2  
 2 Jerry D'Amigo            Mathieu Joseph           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Andersson         Robert Hagg              60     1   2  2  
 2 Jordan Subban            Caleb Jones              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Miles Wood                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Andersson         Robert Hagg              60     1   2  2  
 2 Jordan Subban            Caleb Jones              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Miles Wood               60     1   2  2  
 2 Jerry D'Amigo            Mathieu Joseph           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Andersson         Robert Hagg              60     1   2  2  
 2 Jordan Subban            Caleb Jones              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Miles Wood               Jerry D'Amigo            Rasmus Andersson         Robert Hagg              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Miles Wood               Jerry D'Amigo            Rasmus Andersson         Robert Hagg              

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Adin Hill                

<b>Extra Forwards</b>
Normal : Nolan Stevens, Brendan Gaunce, Matt Luff - PP : Nolan Stevens, Brendan Gaunce - PK : Matt Luff
<b>Extra Defensemen</b>
Normal : Victor Mete, Ryan Segalla, Jordan Subban - PP : Victor Mete - PK : Ryan Segalla, Jordan Subban
<b>Penalty Shots</b>
Unknown Player, Miles Wood, Jerry D'Amigo, Mathieu Joseph, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Miles Wood, Jerry D'Amigo, Mathieu Joseph, Unknown Player, Anthony Cirelli, Brendan Gaunce, Matt Luff, Laurin Braun, Anders Bjork
<b>Custom OT Lines Defensemen</b>
Rasmus Andersson, Robert Hagg, Jordan Subban, Caleb Jones, Victor Mete

<b>Scratches</b>
Matt Donovan (Healthy), Jeff Taylor (Healthy), Ryan Rupert (Healthy), Oleg Sosunov (Healthy), Mitchell Stephens (Healthy)
Ross Colton (Healthy), Joonas Korpisalo (Healthy)</pre></div>
<h1 class="TeamLineFarm_HOU"><a id="HoustonAeros">Houston Aeros</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#HoustonAeros">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#HoustonAeros">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#HoustonAeros">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#HoustonAeros">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#HoustonAeros">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HoustonAeros');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HoustonAeros" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Jussi Jokinen            25     1   2  2  
 2 Tyler Graovac            Daniil Zharkov           Nick Sorensen            25     1   2  2  
 3 Cody Almond              Unknown Player           Benoit Pouliot           25     1   2  2  
 4 Unknown Player           Reto Suri                Derek Dorsett            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Sproul              Charles-Olivier Roussel                           25     1   2  2  
 2 Maxim Noreau             Adam Ginning                                      25     1   2  2  
 3 Cale Fleury              John Marino                                       25     1   2  2  
 4 Ryan Sproul              Charles-Olivier Roussel                           25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Jussi Jokinen            60     1   2  2  
 2 Tyler Graovac            Daniil Zharkov           Nick Sorensen            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Sproul              Charles-Olivier Roussel                           60     1   2  2  
 2 Maxim Noreau             Cale Fleury                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Jussi Jokinen            Daniil Zharkov           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Sproul              Charles-Olivier Roussel  60     1   2  2  
 2 Maxim Noreau             John Marino              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Sproul              Charles-Olivier Roussel  60     1   2  2  
 2 Maxim Noreau             John Marino              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Jussi Jokinen            Daniil Zharkov           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Sproul              Charles-Olivier Roussel  60     1   2  2  
 2 Maxim Noreau             Cale Fleury              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Jussi Jokinen            Ryan Sproul              Charles-Olivier Roussel  

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Jussi Jokinen            Ryan Sproul              Charles-Olivier Roussel  

<b>Goaltenders</b>
Starting : Anton Khudobin           
Backup : Antoine Bibeau           
Third : François Tremblay        

<b>Extra Forwards</b>
Normal : Conor Garland, Unknown Player, Benoit Pouliot - PP : Conor Garland, Unknown Player - PK : Benoit Pouliot
<b>Extra Defensemen</b>
Normal : Cale Fleury, John Marino, Maxim Noreau - PP : Cale Fleury - PK : John Marino, Maxim Noreau
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Jussi Jokinen, Daniil Zharkov, Nick Sorensen
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Jussi Jokinen, Daniil Zharkov, Nick Sorensen, Tyler Graovac, Unknown Player, Benoit Pouliot, Derek Dorsett, Cody Almond
<b>Custom OT Lines Defensemen</b>
Ryan Sproul, Charles-Olivier Roussel, Maxim Noreau, Adam Ginning, Cale Fleury

<b>Scratches</b>
Steve Weinstein (Healthy), Ziga Pance (Healthy), Matthias Plachta (Healthy), Nikita Zaitsev (Healthy)</pre></div>
<h1 class="TeamLineFarm_TRD"><a id="Trois-RivièresDraveurs">Trois-Rivières Draveurs</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#Trois-RivièresDraveurs">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#Trois-RivièresDraveurs">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#Trois-RivièresDraveurs">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#Trois-RivièresDraveurs">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#Trois-RivièresDraveurs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Trois-RivièresDraveurs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Trois-RivièresDraveurs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Patrick Bjorkstrand      Maximilian Veronneau     37     1   1  3  
 2 Unknown Player           Unknown Player           Unknown Player           33     1   1  3  
 3 Unknown Player           Marcus Davidsson         Josh Currie              20     1   2  2  
 4 Unknown Player           Bokondji Imama           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Christian Wolanin                                 40     1   2  2  
 2 Sebastian Aho (D)        Unknown Player                                    40     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   3  1  
 4 Unknown Player           Unknown Player                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Patrick Bjorkstrand      Maximilian Veronneau     60     1   1  3  
 2 Josh Currie              Marcus Davidsson         Unknown Player           40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Christian Wolanin        Sebastian Aho (D)                                 60     1   1  3  
 2 Unknown Player           Unknown Player                                    40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   3  1  
 2 Unknown Player           Unknown Player           40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   3  1  
 2 Sebastian Aho (D)        Unknown Player           40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    50     1   3  1  
 2 Unknown Player                                    50     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Sebastian Aho (D)        Unknown Player           60     2   3  0  
 2 Unknown Player           Unknown Player           40     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Patrick Bjorkstrand      50     1   2  2  
 2 Unknown Player           Maximilian Veronneau     50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Christian Wolanin        50     1   2  2  
 2 Unknown Player           Sebastian Aho (D)        50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Patrick Bjorkstrand      Maximilian Veronneau     Sebastian Aho (D)        Christian Wolanin        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Patrick Bjorkstrand, Unknown Player, Unknown Player - PP : Patrick Bjorkstrand, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Christian Wolanin, Unknown Player, Sebastian Aho (D) - PP : Christian Wolanin - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Patrick Bjorkstrand, Unknown Player, Marcus Davidsson, Maximilian Veronneau, Unknown Player
<b>Custom OT Lines Forwards</b>
Patrick Bjorkstrand, Unknown Player, Maximilian Veronneau, Unknown Player, Josh Currie, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Marcus Davidsson
<b>Custom OT Lines Defensemen</b>
Christian Wolanin, Unknown Player, Unknown Player, Sebastian Aho (D), Unknown Player

<b>Scratches</b>
Gaetan Haas (Healthy), Alex Burrows (Healthy), Derek Mathers (Healthy), Roman Polak (Healthy), Dean Kukan (Healthy)
Nicolas Deslauriers (Healthy), Jonas Siegenthaler (Healthy), Rinat Valiev (Healthy), Justin Peters (Healthy), Ilya Samsonov (Healthy)</pre></div>
<h1 class="TeamLineFarm_MIL"><a id="MilwaukeeAdmirals">Milwaukee Admirals</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#MilwaukeeAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#MilwaukeeAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#MilwaukeeAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#MilwaukeeAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#MilwaukeeAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MilwaukeeAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MilwaukeeAdmirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Marc-Olivier Roy         Cristoval Nieves         Unknown Player           36     1   3  1  
 2 Logan Brown              Taro Hirose              Tage Thompson            34     0   1  4  
 3 Unknown Player           Mark Jankowski           Unknown Player           20     1   1  3  
 4 Kyle Platzer             Unknown Player           Mitch Moroz              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    35     1   3  1  
 2 Joshua Jacobs            Unknown Player                                    33     1   3  1  
 3 Unknown Player           Stuart Percy                                      32     1   3  1  
 4 Unknown Player           Unknown Player                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Brown              Taro Hirose              Tage Thompson            60     0   0  5  
 2 Mark Jankowski           Unknown Player           Unknown Player           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Joshua Jacobs                                     60     0   0  5  
 2 Unknown Player           Stuart Percy                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cristoval Nieves         Unknown Player           60     0   5  0  
 2 Marc-Olivier Roy         Tage Thompson            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   5  0  
 2 Joshua Jacobs            Unknown Player           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Cristoval Nieves                                  60     0   5  0  
 2 Marc-Olivier Roy                                  40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   5  0  
 2 Joshua Jacobs            Unknown Player           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Logan Brown              Taro Hirose              60     1   1  3  
 2 Marc-Olivier Roy         Tage Thompson            40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Joshua Jacobs            Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Brown              Taro Hirose              Tage Thompson            Unknown Player           Joshua Jacobs            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Marc-Olivier Roy         Cristoval Nieves         Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Taro Hirose, Marc-Olivier Roy, Logan Brown - PP : Marc-Olivier Roy, Unknown Player - PK : Mark Jankowski
<b>Extra Defensemen</b>
Normal : Joshua Jacobs, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Stuart Percy
<b>Penalty Shots</b>
Taro Hirose, Unknown Player, Unknown Player, Mark Jankowski, Logan Brown
<b>Custom OT Lines Forwards</b>
Unknown Player, Taro Hirose, Logan Brown, Tage Thompson, Marc-Olivier Roy, Unknown Player, Mark Jankowski, Unknown Player, Unknown Player, Cristoval Nieves
<b>Custom OT Lines Defensemen</b>
Joshua Jacobs, Stuart Percy, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Erik Gustafsson (Healthy), Matthew Carle (Healthy), Mark Borowiecki (Healthy), Michael Latta (Healthy), Philippe Cornet (Healthy)
Dylan Blujus (Healthy), Jonas Gustavsson (Healthy), Mike Condon (Healthy)</pre></div>
<h1 class="TeamLineFarm_ALB"><a id="AlbanyDevils">Albany Devils</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#AlbanyDevils">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#AlbanyDevils">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#AlbanyDevils">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#AlbanyDevils">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#AlbanyDevils">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AlbanyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AlbanyDevils" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Roope Hintz              Unknown Player           Jackson Houck            35     1   2  2  
 2 Lukas Sutter             Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Lucas Lessio             Andrew Fritsch           20     1   2  2  
 4 Ryan Kuffner             Unknown Player           Jackson Houck            15     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    35     1   2  2  
 2 Travis Dermott           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Alex Biega                                        20     1   2  2  
 4 Adam Polasek             Brenden Dillon                                    15     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Roope Hintz              Unknown Player           Jackson Houck            60     1   2  2  
 2 Lukas Sutter             Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Travis Dermott           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Roope Hintz              Jackson Houck            60     1   2  2  
 2 Lukas Sutter             Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Travis Dermott           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Roope Hintz                                       60     1   2  2  
 2 Jackson Houck                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Travis Dermott           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Roope Hintz              Jackson Houck            60     1   2  2  
 2 Lukas Sutter             Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Travis Dermott           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Roope Hintz              Unknown Player           Jackson Houck            Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Roope Hintz              Unknown Player           Jackson Houck            Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Jeremy Smith             

<b>Extra Forwards</b>
Normal : Ryan Kuffner, Lucas Lessio, Andrew Fritsch - PP : Ryan Kuffner, Lucas Lessio - PK : Andrew Fritsch
<b>Extra Defensemen</b>
Normal : Gabriel Carlsson, Unknown Player, Unknown Player - PP : Gabriel Carlsson - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Roope Hintz, Jackson Houck, Lukas Sutter, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Roope Hintz, Jackson Houck, Lukas Sutter, Unknown Player, Unknown Player, Lucas Lessio, Unknown Player, Unknown Player, Ryan Kuffner, Andrew Fritsch
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Travis Dermott, Unknown Player, Unknown Player

<b>Scratches</b>
Andrej Sekera (Healthy), Benn Ferriero (Healthy), Brad Malone (Healthy), Matt Leitner (Healthy), Alex Grant (Healthy)
Alexander Bonsaksen (Healthy), Sam Kurker (Healthy), Axel Andersson (Healthy)</pre></div>
<h1 class="TeamLineFarm_BRI"><a id="BridgeportSoundTigers">Bridgeport Sound Tigers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#BridgeportSoundTigers">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#BridgeportSoundTigers">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#BridgeportSoundTigers">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#BridgeportSoundTigers">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#BridgeportSoundTigers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BridgeportSoundTigers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BridgeportSoundTigers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joel Eriksson Ek         Victor Olofsson          Luke Kunin               25     1   2  2  
 2 Johan Sundstrom          Jonathan Dahlen          Julien Gauthier          25     1   2  2  
 3 Sean Malone              Kevin Klima              Kerby Rychel             25     1   2  2  
 4 Dane Fox                 Christopher Clapperton   Jordan Bellerive         25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Colton White             Cale Makar                                        25     1   2  2  
 2 Jérémy Roy               Alexandre Carrier                                 25     1   2  2  
 3 Scott Mayfield           Brenden Kichton                                   25     1   2  2  
 4 Colton White             Jérémy Roy                                        25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joel Eriksson Ek         Victor Olofsson          Luke Kunin               60     1   2  2  
 2 Johan Sundstrom          Jonathan Dahlen          Julien Gauthier          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cale Makar               Colton White                                      60     1   2  2  
 2 Alexandre Carrier        Jérémy Roy                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joel Eriksson Ek         Luke Kunin               60     1   2  2  
 2 Sean Malone              Kevin Klima              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton White             Brenden Kichton          60     1   2  2  
 2 Jérémy Roy               Cale Makar               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joel Eriksson Ek                                  60     1   2  2  
 2 Luke Kunin                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brenden Kichton          Scott Mayfield           60     1   2  2  
 2 Jérémy Roy               Colton White             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joel Eriksson Ek         Luke Kunin               60     1   2  2  
 2 Sean Malone              Kevin Klima              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cale Makar               Brenden Kichton          60     1   2  2  
 2 Jérémy Roy               Colton White             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joel Eriksson Ek         Christopher Clapperton   Luke Kunin               Cale Makar               Colton White             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joel Eriksson Ek         Christopher Clapperton   Luke Kunin               Jérémy Roy               Brenden Kichton          

<b>Goaltenders</b>
Starting : Jake Paterson            
Backup : Shamil Shmakov           

<b>Extra Forwards</b>
Normal : Jordan Bellerive, Dane Fox, Julien Gauthier - PP : Jordan Bellerive, Dane Fox - PK : Julien Gauthier
<b>Extra Defensemen</b>
Normal : Brenden Kichton, Cale Makar, Colton White - PP : Brenden Kichton - PK : Cale Makar, Colton White
<b>Penalty Shots</b>
Joel Eriksson Ek, Luke Kunin, Sean Malone, Johan Sundstrom, Dane Fox
<b>Custom OT Lines Forwards</b>
Joel Eriksson Ek, Luke Kunin, Sean Malone, Johan Sundstrom, Dane Fox, Christopher Clapperton, Victor Olofsson, Jordan Bellerive, Kerby Rychel, Julien Gauthier
<b>Custom OT Lines Defensemen</b>
Cale Makar, Colton White, Alexandre Carrier, Scott Mayfield, Brenden Kichton

<b>Scratches</b>
Yannick Weber (Healthy), Kelly Klima (Healthy), Mike Smith (Healthy)</pre></div>
<h1 class="TeamLineFarm_CTW"><a id="ConnecticutWhale">Connecticut Whale</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#ConnecticutWhale">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#ConnecticutWhale">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#ConnecticutWhale">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#ConnecticutWhale">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#ConnecticutWhale">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ConnecticutWhale');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ConnecticutWhale" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Erik Haula               Robert Thomas            26     1   2  2  
 2 Christian Fischer        Ryan Donato              Denis Malgin             26     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           26     1   2  2  
 4 Joseph Blandisi          Unknown Player           Trent Frederic           22     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gustav Forsling          Unknown Player                                    34     1   2  2  
 2 Brandon Carlo            Unknown Player                                    33     1   2  2  
 3 Josh Mahura              Unknown Player                                    33     1   2  2  
 4 Brandon Carlo            Gustav Forsling                                   0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Erik Haula               Robert Thomas            60     1   2  2  
 2 Christian Fischer        Unknown Player           Denis Malgin             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Brandon Carlo            Gustav Forsling                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Denis Malgin             Unknown Player           60     1   2  2  
 2 Unknown Player           Erik Haula               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Forsling          Brandon Carlo            60     1   2  2  
 2 Unknown Player           Josh Mahura              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Denis Malgin                                      60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Forsling          Brandon Carlo            60     1   2  2  
 2 Unknown Player           Josh Mahura              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Denis Malgin             Erik Haula               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Mahura              Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Denis Malgin             Robert Thomas            Gustav Forsling          Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Denis Malgin             Unknown Player           Gustav Forsling          Brandon Carlo            

<b>Goaltenders</b>
Starting : Michael DiPietro         
Backup : Anthony Stolarz          
Third : Felix Sandström          

<b>Extra Forwards</b>
Normal : Denis Malgin, Unknown Player, Unknown Player - PP : Unknown Player, Erik Haula - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Brandon Carlo, Gustav Forsling - PP : Gustav Forsling - PK : Unknown Player, Gustav Forsling
<b>Penalty Shots</b>
Denis Malgin, Unknown Player, Unknown Player, Erik Haula, Unknown Player
<b>Custom OT Lines Forwards</b>
Robert Thomas, Unknown Player, Unknown Player, Erik Haula, Unknown Player, Joseph Blandisi, Christian Fischer, Denis Malgin, Ryan Donato, Unknown Player
<b>Custom OT Lines Defensemen</b>
Gustav Forsling, Unknown Player, Brandon Carlo, Unknown Player, Josh Mahura

<b>Scratches</b>
Christian Folin (Healthy), Denis Guryanov (Healthy), J.T. Compher (Healthy), Ziyat Paigin (Healthy), Henrik Borgstrom (Healthy)
Ethan Bear (Healthy), Casey Nelson (Healthy), Matej Tomek (Healthy)</pre></div>
<h1 class="TeamLineFarm_BNG"><a id="BinghamtonSenators">Binghamton Senators</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#BinghamtonSenators">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#BinghamtonSenators">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#BinghamtonSenators">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#BinghamtonSenators">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#BinghamtonSenators">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BinghamtonSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BinghamtonSenators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor Rankin            Unknown Player           Unknown Player           30     0   1  4  
 2 Max McCormick            Unknown Player           Andre Petersson          29     1   2  2  
 3 Unknown Player           Unknown Player           Gustav Possler           25     1   2  2  
 4 Unknown Player           Gustav Possler           Andre Petersson          16     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    25     0   2  3  
 2 Filip Berglund           Unknown Player                                    25     1   2  2  
 3 Unknown Player           Unknown Player                                    25     1   2  2  
 4 Unknown Player           Unknown Player                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor Rankin            Unknown Player           Unknown Player           60     1   2  2  
 2 Max McCormick            Unknown Player           Gustav Possler           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Filip Berglund           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor Rankin            Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Max McCormick            Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor Rankin            Unknown Player           Max McCormick            Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor Rankin            Unknown Player           Max McCormick            Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Igor Bobkov              
Third : Stephon Williams         

<b>Extra Forwards</b>
Normal : Marcus Sorensen, Gustav Possler, Unknown Player - PP : Marcus Sorensen, Gustav Possler - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Filip Berglund, Unknown Player - PP : Unknown Player - PK : Filip Berglund, Unknown Player
<b>Penalty Shots</b>
Gustav Possler, Unknown Player, Unknown Player, Unknown Player, Connor Rankin
<b>Custom OT Lines Forwards</b>
Andre Petersson, Unknown Player, Unknown Player, Unknown Player, Connor Rankin, Max McCormick, Unknown Player, Gustav Possler, Unknown Player, Marcus Sorensen
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Andrei Kostitsyn (Healthy), Dany Heatley (Healthy), Derek Joslin (Healthy), Jeff Schultz (Healthy), Vadim Shipachev (Healthy)
Ryan Tesink (Healthy), Ales Music (Healthy), Alexis Pepin (Healthy), Jérémy Grégoire (Healthy), Denis Godla (Healthy)</pre></div>
<h1 class="TeamLineFarm_ADK"><a id="AdirondackPhantoms">Adirondack Phantoms</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#AdirondackPhantoms">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#AdirondackPhantoms">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#AdirondackPhantoms">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#AdirondackPhantoms">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#AdirondackPhantoms">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AdirondackPhantoms');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AdirondackPhantoms" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Fredrik Karlstrom        Unknown Player           25     1   2  2  
 2 Unknown Player           Alexandre Mallet         Michael Parks            25     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           25     1   2  2  
 4 Unknown Player           Unknown Player           Sebastian Repo           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney                                    25     1   2  2  
 2 Greg Pateryn             Tyler Lewington                                   25     1   2  2  
 3 Unknown Player           Daniel Brickley                                   25     1   2  2  
 4 Unknown Player           Alex Plante                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Fredrik Karlstrom        Unknown Player           60     1   2  2  
 2 Unknown Player           Alexandre Mallet         Michael Parks            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney                                    60     1   2  2  
 2 Greg Pateryn             Tyler Lewington                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Michael Parks            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney           60     1   2  2  
 2 Greg Pateryn             Tyler Lewington          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney           60     1   2  2  
 2 Greg Pateryn             Tyler Lewington          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Michael Parks            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney           60     1   2  2  
 2 Greg Pateryn             Tyler Lewington          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Fredrik Karlstrom        Unknown Player           Alex Plante              Taylor Chorney           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Fredrik Karlstrom        Unknown Player           Alex Plante              Taylor Chorney           

<b>Goaltenders</b>
Starting : Jakub Kovar              
Backup : Anthony Brodeur          

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Chris Martenet, Alex Plante, Daniel Brickley - PP : Chris Martenet - PK : Alex Plante, Daniel Brickley
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Michael Parks, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Michael Parks, Unknown Player, Unknown Player, Unknown Player, Fredrik Karlstrom, Sebastian Repo, Alexandre Mallet
<b>Custom OT Lines Defensemen</b>
Alex Plante, Taylor Chorney, Greg Pateryn, Tyler Lewington, Daniel Brickley

<b>Scratches</b>
Gabriel Dumont (Healthy), Spencer Machacek (Healthy), Stephane Da Costa (Healthy), Jared Staal (Healthy), Jacob Peterson (Healthy)
Craig Smith (Healthy), Randy Gazzola (Healthy), Alexis Loiseau (Healthy), Nikita Popugaev (Healthy), Nick Suzuki (Healthy)
Keegan Kolesar (Healthy)</pre></div>
<h1 class="TeamLineFarm_WBS"><a id="Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#Wilkes-Barre/ScrantonPenguins">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#Wilkes-Barre/ScrantonPenguins">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#Wilkes-Barre/ScrantonPenguins">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#Wilkes-Barre/ScrantonPenguins">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#Wilkes-Barre/ScrantonPenguins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wilkes-Barre/ScrantonPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wilkes-Barre/ScrantonPenguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           David Jones              40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           25     1   2  2  
 3 Unknown Player           Milan Michalek           Unknown Player           25     1   2  2  
 4 Jan Kovar                Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    25     1   2  2  
 2 Unknown Player           Unknown Player                                    25     1   2  2  
 3 Unknown Player           Unknown Player                                    25     1   2  2  
 4 Unknown Player           Unknown Player                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           David Jones              60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 David Jones              Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 David Jones              Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           David Jones              Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           David Jones              Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Patrick Killeen          

<b>Extra Forwards</b>
Normal : Unknown Player, Milan Michalek, Unknown Player - PP : Unknown Player, Milan Michalek - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, David Jones, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, David Jones, Unknown Player, Unknown Player, Unknown Player, Milan Michalek, Unknown Player, Unknown Player, Jan Kovar
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Anton Babchuk (Healthy), Ben Maxwell (Healthy), Brad Richardson (Healthy), Brandon Prust (Healthy), Brett Sutter (Healthy)
Erik Condra (Healthy), Jason Garrison (Healthy), Chad Ruhwedel (Healthy), Marc Methot (Healthy), Maxim Lapierre (Healthy)
Mike Fisher (Healthy), Niklas Grossman (Healthy), Ryan Shannon (Healthy), Tim Gleason (Healthy), Kevin Connauton (Healthy)
Kevan Miller (Healthy), Jason Akeson (Healthy), Nick Petrecki (Healthy), Sebastian Owuya (Healthy), Reid McNeill (Healthy)
Pascal Leclaire (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="ChicoutimiSaguenéens">Chicoutimi Saguenéens</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#ChicoutimiSaguenéens">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#ChicoutimiSaguenéens">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#ChicoutimiSaguenéens">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#ChicoutimiSaguenéens">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#ChicoutimiSaguenéens">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicoutimiSaguenéens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicoutimiSaguenéens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Maxime Comtois           Philip Lane              25     1   2  2  
 2 Jack Nevins              Vitali Abramov           Brett MacLean            25     1   2  2  
 3 Brad Morrison            Isaac Ratcliffe          J.T. Brown               25     1   2  2  
 4 Unknown Player           Vitali Abramov           Philip Lane              25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    25     1   2  2  
 2 Brett Lernout            Frédéric Allard                                   25     1   2  2  
 3 Sean Durzi               Unknown Player                                    25     1   2  2  
 4 Mikael Wikstrand         Unknown Player                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           J.T. Brown               Philip Lane              60     1   2  2  
 2 Jack Nevins              Isaac Ratcliffe          Brett MacLean            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Brett Lernout            Frédéric Allard                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Maxime Comtois           60     1   2  2  
 2 Isaac Ratcliffe          Philip Lane              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Brett Lernout            Frédéric Allard          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Philip Lane                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Brett Lernout            Frédéric Allard          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Isaac Ratcliffe          60     1   2  2  
 2 J.T. Brown               Philip Lane              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Brett Lernout            Frédéric Allard          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Maxime Comtois           Philip Lane              Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Maxime Comtois           Philip Lane              Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Ivan Nalimov             
Third : Mason McDonald           

<b>Extra Forwards</b>
Normal : Unknown Player, Isaac Ratcliffe, J.T. Brown - PP : Unknown Player, Isaac Ratcliffe - PK : J.T. Brown
<b>Extra Defensemen</b>
Normal : Sean Durzi, Unknown Player, Mikael Wikstrand - PP : Sean Durzi - PK : Unknown Player, Mikael Wikstrand
<b>Penalty Shots</b>
Unknown Player, J.T. Brown, Jack Nevins, Philip Lane, Isaac Ratcliffe
<b>Custom OT Lines Forwards</b>
Unknown Player, Maxime Comtois, Vitali Abramov, Philip Lane, Isaac Ratcliffe, Jack Nevins, Brett MacLean, J.T. Brown, Brad Morrison, Jack Evans
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Brett Lernout, Frédéric Allard, Sean Durzi

<b>Scratches</b>
Cam Barker (Healthy), Nate Schnarr (Healthy), Brandon Manning (Healthy), Ben Hanowski (Healthy), Shane Eiserman (Healthy)
Dmitry Sokolov (Healthy), Ilya Bryzgalov (Healthy)</pre></div>
<h1 class="TeamLineFarm_RNO"><a id="Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#Rouyn-NorandaHuskies">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#Rouyn-NorandaHuskies">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#Rouyn-NorandaHuskies">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#Rouyn-NorandaHuskies">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#Rouyn-NorandaHuskies">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rouyn-NorandaHuskies');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rouyn-NorandaHuskies" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Francis Perron           Warren Foegele           Martins Dzierkals        25     1   2  2  
 2 Julien Nantel            Alexandre Fortin         Manuel Wiederer          25     1   2  2  
 3 Peter Abbandonato        Rafaël Harvey-Pinard     Antoine Waked            25     1   2  2  
 4 Félix Bibeau             Joel Teasdale            Vincent Marleau          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Dobson              Philippe Myers                                    25     1   2  2  
 2 Jérémy Lauzon            Jacob Neveu                                       25     1   2  2  
 3 Samuel Regis             Zachary Lauzon                                    25     1   2  2  
 4 Noah Dobson              Philippe Myers                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Francis Perron           Warren Foegele           Martins Dzierkals        60     1   2  2  
 2 Julien Nantel            Alexandre Fortin         Manuel Wiederer          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Dobson              Philippe Myers                                    60     1   2  2  
 2 Jérémy Lauzon            Jacob Neveu                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Francis Perron           Martins Dzierkals        60     1   2  2  
 2 Warren Foegele           Alexandre Fortin         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Dobson              Philippe Myers           60     1   2  2  
 2 Jérémy Lauzon            Jacob Neveu              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Francis Perron                                    60     1   2  2  
 2 Martins Dzierkals                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Dobson              Philippe Myers           60     1   2  2  
 2 Jérémy Lauzon            Jacob Neveu              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Francis Perron           Martins Dzierkals        60     1   2  2  
 2 Warren Foegele           Alexandre Fortin         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Dobson              Philippe Myers           60     1   2  2  
 2 Jérémy Lauzon            Jacob Neveu              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Francis Perron           Warren Foegele           Martins Dzierkals        Noah Dobson              Philippe Myers           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Francis Perron           Warren Foegele           Martins Dzierkals        Noah Dobson              Philippe Myers           

<b>Goaltenders</b>
Starting : Alex Nedeljkovic         
Backup : Samuel Harvey            

<b>Extra Forwards</b>
Normal : Antoine Waked, Rafaël Harvey-Pinard, Joel Teasdale - PP : Antoine Waked, Rafaël Harvey-Pinard - PK : Joel Teasdale
<b>Extra Defensemen</b>
Normal : Samuel Regis, Zachary Lauzon, Jérémy Lauzon - PP : Samuel Regis - PK : Zachary Lauzon, Jérémy Lauzon
<b>Penalty Shots</b>
Francis Perron, Martins Dzierkals, Warren Foegele, Alexandre Fortin, Julien Nantel
<b>Custom OT Lines Forwards</b>
Francis Perron, Martins Dzierkals, Warren Foegele, Alexandre Fortin, Julien Nantel, Manuel Wiederer, Antoine Waked, Rafaël Harvey-Pinard, Joel Teasdale, Peter Abbandonato
<b>Custom OT Lines Defensemen</b>
Noah Dobson, Philippe Myers, Jérémy Lauzon, Jacob Neveu, Samuel Regis

<b>Scratches</b>
Bruno-Carl Denis (Healthy), Alex Beaucage (Healthy), Alexis Arsenault (Healthy), Justin Bergeron (Healthy), William Rouleau (Healthy)
Mark Fayne (Healthy), Jean-Christophe Beaudin (Healthy), Zachary Emond (Healthy)</pre></div>
<h1 class="TeamLineFarm_MIA"><a id="MercerIslandArchangels">Mercer Island Archangels</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Saints Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#SeattleSaints">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#MercerIslandArchangels">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#MercerIslandArchangels">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#MercerIslandArchangels">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#MercerIslandArchangels">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#MercerIslandArchangels">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MercerIslandArchangels');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MercerIslandArchangels" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathieu Perreault        Unknown Player           Unknown Player           25     1   2  2  
 2 Unknown Player           Michael Raffl            Unknown Player           25     1   2  2  
 3 Filip Chlapik            Unknown Player           Unknown Player           25     1   2  2  
 4 Simon Stransky           Tyler Benson             Zachary Senyshyn         25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    25     1   2  2  
 2 Unknown Player           Jordan Schmaltz                                   25     1   2  2  
 3 Keegan Kanzig            Connor Clifton                                    25     1   2  2  
 4 Jordan Schneider         Unknown Player                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathieu Perreault        Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Michael Raffl            Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Jordan Schmaltz                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Mathieu Perreault        60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Jordan Schmaltz          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Mathieu Perreault                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Jordan Schmaltz          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Mathieu Perreault        60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Jordan Schmaltz          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mathieu Perreault        Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mathieu Perreault        Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           
Third : Callum Booth             

<b>Extra Forwards</b>
Normal : Unknown Player, Zachary Senyshyn, Filip Chlapik - PP : Unknown Player, Zachary Senyshyn - PK : Filip Chlapik
<b>Extra Defensemen</b>
Normal : Keegan Kanzig, Connor Clifton, Jordan Schneider - PP : Keegan Kanzig - PK : Connor Clifton, Jordan Schneider
<b>Penalty Shots</b>
Unknown Player, Mathieu Perreault, Unknown Player, Unknown Player, Michael Raffl
<b>Custom OT Lines Forwards</b>
Unknown Player, Mathieu Perreault, Unknown Player, Unknown Player, Michael Raffl, Unknown Player, Unknown Player, Zachary Senyshyn, Filip Chlapik, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Jordan Schmaltz, Keegan Kanzig

<b>Scratches</b>
Alexander Steen (Healthy), Jamie Doornbosch (Healthy), Antoine Marcoux (Healthy), Philip McRae (Healthy), Dalton Prout (Healthy)
Wojtek Wolski (Healthy), Brandon Kozun (Healthy), Kevin Hancock (Healthy), Matthew Villalta (Healthy)</pre></div>
<h1 class="TeamLineFarm_PEO"><a id="PeoriaRivermen">Peoria Rivermen</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#PeoriaRivermen">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#PeoriaRivermen">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#PeoriaRivermen">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#PeoriaRivermen">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#PeoriaRivermen">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PeoriaRivermen');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PeoriaRivermen" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jordan Szwarz            David Booth              Liam Reddox              29     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           26     1   2  2  
 3 Peter Holland            Unknown Player           Unknown Player           25     1   2  2  
 4 Chase De Leo             David Booth              Unknown Player           20     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Bernhard Ebner           Unknown Player                                    35     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    25     1   2  2  
 4 Unknown Player           Patrick McNally                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Peter Holland            David Booth              Liam Reddox              60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Bernhard Ebner                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Liam Reddox              Unknown Player           60     1   2  2  
 2 David Booth              Peter Holland            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 David Booth                                       60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Bernhard Ebner           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Liam Reddox              Unknown Player           60     1   2  2  
 2 David Booth              Peter Holland            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Bernhard Ebner           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           David Booth              Liam Reddox              Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Liam Reddox              Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Andrey Makarov           

<b>Extra Forwards</b>
Normal : Unknown Player, David Booth, Chase De Leo - PP : Alex Dostie, Unknown Player - PK : Chase De Leo
<b>Extra Defensemen</b>
Normal : Bernhard Ebner, Unknown Player, Unknown Player - PP : Bernhard Ebner - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, David Booth, Peter Holland, Liam Reddox
<b>Custom OT Lines Forwards</b>
Jordan Szwarz, Unknown Player, David Booth, Peter Holland, Liam Reddox, Unknown Player, Unknown Player, Unknown Player, Chase De Leo, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Bernhard Ebner

<b>Scratches</b>
Alexei Emelin (Healthy), Raphael Diaz (Healthy), Dustin Boyd (Healthy), Johnny Boychuk (Healthy), Mattias Ritola (Healthy)
Victor Antipin (Healthy), Jake Chelios (Healthy), Jordie Benn (Healthy), Borna Rendulic (Healthy), Andy Welinski (Healthy)</pre></div>
<h1 class="TeamLineFarm_NOR"><a id="NorfolkAdmirals">Norfolk Admirals</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#NorfolkAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#NorfolkAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#NorfolkAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#NorfolkAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#NorfolkAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NorfolkAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NorfolkAdmirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mads Eller               Unknown Player           Mike Vecchione           30     1   3  1  
 2 Unknown Player           Joey Anderson            Nicolas Aubé-Kubel       25     1   3  1  
 3 Lucas Wallmark           Austin Wagner            Dmytro Timashov          25     0   3  2  
 4 Unknown Player           Unknown Player           Pavel Padakin            20     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    35     1   3  1  
 2 Radko Gudas              Unknown Player                                    35     1   3  1  
 3 Unknown Player           Unknown Player                                    30     2   3  0  
 4 Unknown Player           Unknown Player                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mads Eller               Unknown Player           Unknown Player           60     0   0  5  
 2 Unknown Player           Joey Anderson            Mike Vecchione           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     0   1  4  
 2 Radko Gudas              Unknown Player                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mads Eller               Unknown Player           60     0   4  1  
 2 Unknown Player           Unknown Player           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   4  0  
 2 Radko Gudas              Unknown Player           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mads Eller                                        60     0   5  0  
 2 Unknown Player                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   4  0  
 2 Radko Gudas              Unknown Player           40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mads Eller               Unknown Player           60     0   3  2  
 2 Unknown Player           Unknown Player           40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   3  1  
 2 Radko Gudas              Unknown Player           40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mads Eller               Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mads Eller               Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Adam Wilcox              
Backup : Kasper Krog              

<b>Extra Forwards</b>
Normal : Dmytro Timashov, Ludwig Blomstrand, Austin Wagner - PP : Dmytro Timashov, Ludwig Blomstrand - PK : Austin Wagner
<b>Extra Defensemen</b>
Normal : Adam Janosik, Unknown Player, Unknown Player - PP : Adam Janosik - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Mads Eller, Unknown Player, Unknown Player, Unknown Player, Mike Vecchione
<b>Custom OT Lines Forwards</b>
Mads Eller, Unknown Player, Unknown Player, Unknown Player, Mike Vecchione, Joey Anderson, Austin Wagner, Nicolas Aubé-Kubel, Pavel Padakin, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Radko Gudas, Unknown Player, Adam Janosik

<b>Scratches</b>
Matt Frattin (Healthy), Stefan Chaput (Healthy), Brian Flynn (Healthy), Luke Witkowski (Healthy)</pre></div>
<h1 class="TeamLineFarm_ROB"><a id="RobervalDwarfs">Roberval Dwarfs</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#RobervalDwarfs">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#RobervalDwarfs">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#RobervalDwarfs">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#RobervalDwarfs">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#RobervalDwarfs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RobervalDwarfs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RobervalDwarfs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ville Leino              Unknown Player           Trevor Lewis             25     1   2  2  
 2 Aleksi Saarela           Ville Leskinen           Alexander Barabanov      25     1   2  2  
 3 Andrew Crescenzi         Petrus Palmu             Unknown Player           25     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jesse Blacker                                     25     1   2  2  
 2 Unknown Player           Eetu Sopanen                                      25     1   2  2  
 3 Unknown Player           Robin Salo                                        25     1   2  2  
 4 Unknown Player           Jesse Blacker                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ville Leino              Unknown Player           Unknown Player           60     1   2  2  
 2 Aleksi Saarela           Ville Leskinen           Alexander Barabanov      40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jesse Blacker                                     60     1   2  2  
 2 Robin Salo               Eetu Sopanen                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Ville Leskinen           60     1   2  2  
 2 Ville Leino              Alexander Barabanov      40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jesse Blacker            60     1   2  2  
 2 Robin Salo               Eetu Sopanen             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Ville Leino                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jesse Blacker            60     1   2  2  
 2 Unknown Player           Eetu Sopanen             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Andrew Crescenzi         60     1   2  2  
 2 Ville Leino              Alexander Barabanov      40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jesse Blacker            60     1   2  2  
 2 Unknown Player           Eetu Sopanen             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ville Leino              Unknown Player           Alexander Barabanov      Unknown Player           Jesse Blacker            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ville Leino              Unknown Player           Alexander Barabanov      Unknown Player           Jesse Blacker            

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Petrus Palmu, Andrew Crescenzi - PP : Unknown Player, Petrus Palmu - PK : Andrew Crescenzi
<b>Extra Defensemen</b>
Normal : Unknown Player, Robin Salo, Jesse Blacker - PP : Jesse Blacker - PK : Robin Salo, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Petrus Palmu, Ville Leino, Alexander Barabanov, Ville Leskinen
<b>Custom OT Lines Forwards</b>
Unknown Player, Trevor Lewis, Ville Leino, Alexander Barabanov, Ville Leskinen, Aleksi Saarela, Unknown Player, Petrus Palmu, Andrew Crescenzi, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Jesse Blacker, Unknown Player, Eetu Sopanen, Robin Salo

<b>Scratches</b>
Garrett Meurs (Healthy), Joni Pitkanen (Healthy), Lennart Petrell (Healthy), Nikita Jevpalovs (Healthy), Josh Leivo (Healthy)
Erik Gustafsson (Healthy), Justin Kirkland (Healthy), Harri Sateri (Healthy), Garret Sparks (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="ChicagoWolves">Chicago Wolves</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#ChicagoWolves">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#ChicagoWolves">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#ChicagoWolves">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#ChicagoWolves">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#ChicagoWolves">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoWolves');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoWolves" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Mats Zuccarello          25     1   2  2  
 2 Connor Crisp             Carl Hagelin             Unknown Player           25     1   2  2  
 3 Andreas Martinsen        Petr Straka              Unknown Player           25     1   2  2  
 4 Unknown Player           Unknown Player           Mats Zuccarello          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tom Gilbert              Unknown Player                                    25     1   2  2  
 2 Unknown Player           Trevor Carrick                                    25     1   2  2  
 3 Matthew Cairns           Unknown Player                                    25     1   2  2  
 4 Tom Gilbert              Unknown Player                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Mats Zuccarello          60     1   2  2  
 2 Connor Crisp             Carl Hagelin             Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tom Gilbert              Unknown Player                                    60     1   2  2  
 2 Unknown Player           Trevor Carrick                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mats Zuccarello          Unknown Player           60     1   2  2  
 2 Carl Hagelin             Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tom Gilbert              Unknown Player           60     1   2  2  
 2 Unknown Player           Trevor Carrick           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mats Zuccarello                                   60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tom Gilbert              Unknown Player           60     1   2  2  
 2 Unknown Player           Trevor Carrick           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mats Zuccarello          Unknown Player           60     1   2  2  
 2 Carl Hagelin             Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tom Gilbert              Unknown Player           60     1   2  2  
 2 Unknown Player           Trevor Carrick           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Mats Zuccarello          Tom Gilbert              Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Mats Zuccarello          Tom Gilbert              Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Ken Appleby              

<b>Extra Forwards</b>
Normal : Justin Shugg, Unknown Player, Petr Straka - PP : Justin Shugg, Unknown Player - PK : Petr Straka
<b>Extra Defensemen</b>
Normal : Matthew Cairns, Tom Gilbert, Unknown Player - PP : Matthew Cairns - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Mats Zuccarello, Unknown Player, Carl Hagelin, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Mats Zuccarello, Unknown Player, Carl Hagelin, Unknown Player, Unknown Player, Unknown Player, Petr Straka, Unknown Player, Justin Shugg, Connor Crisp
<b>Custom OT Lines Defensemen</b>
Tom Gilbert, Unknown Player, Unknown Player, Trevor Carrick, Matthew Cairns

<b>Scratches</b>
Kellan Tochkin (Healthy), Joseph Labate (Suspend), David Schlemko (Suspend), Jakub Jerabek (Suspend), Frans Nielsen (Suspend)
Jared Spurgeon (Healthy), Korbinian Holzer (Healthy), Marc-Andre Gragnani (Suspend), Nathan Gerbe (Healthy), Rick Nash (Suspend)
Anton Lander (Suspend), Bobby Sanguinetti (Healthy), Anton Rodin (Healthy), Alexander Killorn (Healthy), Alex Friesen (Healthy)
Matic Podlipnik (Healthy), Nicklas Jensen (Suspend), Tyler Soy (Healthy), Joe Cannata (Healthy), Anton Forsberg (Suspend)</pre></div>
<h1 class="TeamLineFarm_PAR"><a id="HendersonSilverKnights">Henderson Silver Knights</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#HendersonSilverKnights">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#HendersonSilverKnights">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#HendersonSilverKnights">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#HendersonSilverKnights">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#HendersonSilverKnights">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HendersonSilverKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HendersonSilverKnights" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Jake DeBrusk             Unknown Player           40     0   3  2  
 2 Lane Pederson            Brett Howden             Nathan Bastian           35     0   3  2  
 3 Connor Hurley            Cory Conacher            Unknown Player           20     0   3  2  
 4 Unknown Player           Jake DeBrusk             Unknown Player           5      0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Gravel             Dillon Heatherington                              40     0   4  1  
 2 Lukas Bengtsson          Unknown Player                                    30     0   4  1  
 3 Unknown Player           Chaz Reddekopp                                    20     0   4  1  
 4 Kevin Gravel             Unknown Player                                    10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Jake DeBrusk             Unknown Player           60     0   0  5  
 2 Lane Pederson            Brett Howden             Nathan Bastian           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Gravel             Unknown Player                                    60     0   1  4  
 2 Lukas Bengtsson          Dillon Heatherington                              40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Riley Nash               Yohann Auvitu            60     0   5  0  
 2 Unknown Player           Gregory Beron            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Unknown Player           60     0   5  0  
 2 Unknown Player           Dillon Heatherington     40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     0   5  0  
 2 Riley Nash                                        40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Unknown Player           60     0   5  0  
 2 Unknown Player           Dillon Heatherington     40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   2  3  
 2 Lane Pederson            Nathan Bastian           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Unknown Player           60     0   2  3  
 2 Unknown Player           Dillon Heatherington     40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Jake DeBrusk             Unknown Player           Unknown Player           Dillon Heatherington     

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Yohann Auvitu            Gregory Beron            Kevin Gravel             Dillon Heatherington     

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Kyle Keyser              

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Michael Mersch - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Kevin Gravel, Dillon Heatherington, Unknown Player - PP : Dillon Heatherington - PK : Dillon Heatherington, Kevin Gravel
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Brett Howden, Lane Pederson
<b>Custom OT Lines Forwards</b>
Unknown Player, Brett Howden, Nathan Bastian, Unknown Player, Lane Pederson, Connor Hurley, Unknown Player, Gregory Beron, Jake DeBrusk, Cory Conacher
<b>Custom OT Lines Defensemen</b>
Dillon Heatherington, Unknown Player, Unknown Player, Kevin Gravel, Chaz Reddekopp

<b>Scratches</b>
Dennis Cholowski (Healthy), Brian Lee (Healthy), Vladimir Sobotka (Healthy), Dryden Hunt (Healthy), Matthew Bradley (Healthy)</pre></div>
<h1 class="TeamLineFarm_LAN"><a id="LandshutCannibals">Landshut Cannibals</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#LandshutCannibals">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#LandshutCannibals">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#LandshutCannibals">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#LandshutCannibals">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#LandshutCannibals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LandshutCannibals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LandshutCannibals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Vladislav Kamenev        Mathias From             35     0   0  5  
 2 German Rubtsov           Andrew Mangiapane        Daniel Bernhardt         30     0   1  4  
 3 Unknown Player           Unknown Player           Unknown Player           22     1   1  3  
 4 Hudson Elynuik           Unknown Player           Nikolai Kovalenko        13     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Yegor Rykov              Anthony DeAngelo                                  25     1   2  2  
 2 Kyle Capobianco          Nicolas Hague                                     25     1   2  2  
 3 Unknown Player           Johnathan MacLeod                                 25     1   2  2  
 4 Anthony DeAngelo         Marcus Pettersson                                 25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Vladislav Kamenev        Mathias From             60     0   0  5  
 2 Andrew Mangiapane        Unknown Player           Daniel Bernhardt         40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Anthony DeAngelo         Nicolas Hague                                     60     0   1  4  
 2 Yegor Rykov              Kyle Capobianco                                   40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Daniel Bernhardt         60     1   2  2  
 2 Hudson Elynuik           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nicolas Hague            Yegor Rykov              60     1   2  2  
 2 Unknown Player           Anthony DeAngelo         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Vladislav Kamenev                                 60     1   3  1  
 2 Unknown Player                                    40     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Yegor Rykov              Anthony DeAngelo         60     1   3  1  
 2 Nicolas Hague            Unknown Player           40     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Daniel Bernhardt         Vladislav Kamenev        60     1   2  2  
 2 German Rubtsov           Mathias From             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Yegor Rykov              Anthony DeAngelo         60     1   2  2  
 2 Unknown Player           Nicolas Hague            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vladislav Kamenev        Daniel Bernhardt         Mathias From             Anthony DeAngelo         Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Yegor Rykov              Nicolas Hague            

<b>Goaltenders</b>
Starting : Juuse Saros              
Backup : Danny aus den Birken     

<b>Extra Forwards</b>
Normal : Unknown Player, German Rubtsov, Unknown Player - PP : Unknown Player, Andrew Mangiapane - PK : Mathias From
<b>Extra Defensemen</b>
Normal : Nicolas Hague, Anthony DeAngelo, Kyle Capobianco - PP : Marcus Pettersson - PK : Marcus Pettersson, Yegor Rykov
<b>Penalty Shots</b>
Vladislav Kamenev, Unknown Player, Mathias From, Andrew Mangiapane, German Rubtsov
<b>Custom OT Lines Forwards</b>
Unknown Player, Vladislav Kamenev, German Rubtsov, Mathias From, Unknown Player, Daniel Bernhardt, Andrew Mangiapane, Unknown Player, Unknown Player, Hudson Elynuik
<b>Custom OT Lines Defensemen</b>
Anthony DeAngelo, Yegor Rykov, Nicolas Hague, Unknown Player, Kyle Capobianco

<b>Scratches</b>
Oliver Kylington (Healthy), Dominik Kahun (Healthy), Pavel Zacha (Healthy), Nick Ritchie (Healthy), Hannibal Weitzmann (Healthy)</pre></div>
<h1 class="TeamLineFarm_MAN"><a id="ManitobaMoose">Manitoba Moose</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL10-FarmTeamScoring.php#ManitobaMoose">Farm Team Scoring</a> ]
[ <a href="ASHL10-FarmTeamLines.php#ManitobaMoose">Farm Team Lines</a> ]
[ <a href="ASHL10-FarmTeamSchedule.php#ManitobaMoose">Farm Team Schedule</a> ]
[ <a href="ASHL10-FarmTeamStats.php#ManitobaMoose">Farm Team Stats</a> ]
[ <a href="ASHL10-FarmTeamStatsVS.php#ManitobaMoose">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ManitobaMoose');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ManitobaMoose" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jérôme Verrier           Noah Rod                 Michael Joly             25     1   2  2  
 2 Linden Vey               Brent Pedersen           Alexander Avtsin         25     1   2  2  
 3 Daniel Lafontaine        Unknown Player           Alexandre Grenier        25     1   2  2  
 4 Adam Brooks              Kay Schweri              Unknown Player           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Graves              Peter Stoykewych                                  25     1   2  2  
 2 Kevin Lidström           Jerome Gauthier-Leduc                             25     1   2  2  
 3 Frederic St-Denis        Joel Chouinard                                    25     1   2  2  
 4 Ryan Graves              Peter Stoykewych                                  25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jérôme Verrier           Noah Rod                 Michael Joly             60     1   2  2  
 2 Linden Vey               Brent Pedersen           Alexander Avtsin         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Graves              Peter Stoykewych                                  60     1   2  2  
 2 Kevin Lidström           Jerome Gauthier-Leduc                             40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jérôme Verrier           Michael Joly             60     1   2  2  
 2 Linden Vey               Alexander Avtsin         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Graves              Peter Stoykewych         60     1   2  2  
 2 Kevin Lidström           Jerome Gauthier-Leduc    40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jérôme Verrier                                    60     1   2  2  
 2 Michael Joly                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Graves              Peter Stoykewych         60     1   2  2  
 2 Kevin Lidström           Jerome Gauthier-Leduc    40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jérôme Verrier           Michael Joly             60     1   2  2  
 2 Linden Vey               Alexander Avtsin         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Graves              Peter Stoykewych         60     1   2  2  
 2 Kevin Lidström           Jerome Gauthier-Leduc    40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jérôme Verrier           Noah Rod                 Michael Joly             Ryan Graves              Peter Stoykewych         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jérôme Verrier           Noah Rod                 Michael Joly             Ryan Graves              Peter Stoykewych         

<b>Goaltenders</b>
Starting : Jean-François Bérubé     
Backup : Unknown Goalie           
Third : Olof Lindbom             

<b>Extra Forwards</b>
Normal : Maxime Macenauer, Alexandre Grenier, Unknown Player - PP : Maxime Macenauer, Alexandre Grenier - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Frederic St-Denis, Joel Chouinard, Kevin Lidström - PP : Frederic St-Denis - PK : Joel Chouinard, Kevin Lidström
<b>Penalty Shots</b>
Jérôme Verrier, Michael Joly, Linden Vey, Alexander Avtsin, Noah Rod
<b>Custom OT Lines Forwards</b>
Jérôme Verrier, Michael Joly, Linden Vey, Alexander Avtsin, Noah Rod, Alexandre Grenier, Unknown Player, Brent Pedersen, Daniel Lafontaine, Adam Brooks
<b>Custom OT Lines Defensemen</b>
Ryan Graves, Peter Stoykewych, Kevin Lidström, Jerome Gauthier-Leduc, Frederic St-Denis

<b>Scratches</b>
Andrei Loktionov (Healthy), Tyler Kennedy (Healthy), James Sheppard (Healthy), Jason Kasdorf (Healthy)</pre></div>
<?php include "Footer.php";?>
