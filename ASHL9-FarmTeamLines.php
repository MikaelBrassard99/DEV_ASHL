<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Team Lines</title>
<script src="ASHL9.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - ASHL9-STHS.db - ASHL9-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL9.css" rel="stylesheet" type="text/css" />
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#LavalChiefs">Laval Chiefs</a> | <a href="#PortlandPirates">Portland Pirates</a> | <a href="#ProvidenceBruins">Providence Bruins</a> | <a href="#RochesterAmericans">Rochester Americans</a> | <a href="#JolietteSportif">Joliette Sportif</a> | <a href="#CharlotteCheckers">Charlotte Checkers</a> | <a href="#RockfordIceHogs">Rockford IceHogs</a> | <a href="#LakeErieMonsters">Lake Erie Monsters</a> | <a href="#SpringfieldFalcons">Springfield Falcons</a> | <a href="#LasVegasGamblers">Las Vegas Gamblers</a> | <a href="#GrandRapidsGriffins">Grand Rapids Griffins</a> | <a href="#OklahomaCityBarons">Oklahoma City Barons</a> | <a href="#SanAntonioRampage">San Antonio Rampage</a> | <a href="#GatineauOlympiques">Gatineau Olympiques</a> | <a href="#HoustonAeros">Houston Aeros</a> | <a href="#Trois-RivièresDraveurs">Trois-Rivières Draveurs</a> | <a href="#MilwaukeeAdmirals">Milwaukee Admirals</a> | <a href="#AlbanyDevils">Albany Devils</a> | <a href="#BridgeportSoundTigers">Bridgeport Sound Tigers</a> | <a href="#ConnecticutWhale">Connecticut Whale</a> | <a href="#BinghamtonSenators">Binghamton Senators</a> | <a href="#AdirondackPhantoms">Adirondack Phantoms</a> | <a href="#Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a> | <a href="#ChicoutimiSaguenéens">Chicoutimi Saguenéens</a> | <a href="#Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a> | <a href="#MercerIslandArchangels">Mercer Island Archangels</a> | <a href="#PeoriaRivermen">Peoria Rivermen</a> | <a href="#NorfolkAdmirals">Norfolk Admirals</a> | <a href="#RobervalDwarfs">Roberval Dwarfs</a> | <a href="#ChicagoWolves">Chicago Wolves</a> | <a href="#ParadiseDarkAngels">Paradise Dark Angels</a> | <a href="#LandshutCannibals">Landshut Cannibals</a> | <a href="#ManitobaMoose">Manitoba Moose</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLineFarm_LAV"><a id="LavalChiefs">Laval Chiefs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#LavalChiefs">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#LavalChiefs">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#LavalChiefs">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#LavalChiefs">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#LavalChiefs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LavalChiefs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LavalChiefs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Kalle Kossila            Sonny Milano             Daniel Sprong            35     0   1  4  
 2 Alex Barré-Boulet        Rudolfs Balcers          Owen Tippett             35     0   1  4  
 3 Jacob Olofsson           Robin Kovacs             Troy Terry               25     0   1  4  
 4 Kalle Kossila            Robin Kovacs             Nikita Korostelev        5      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Filip Hronek             Juuso Välimäki                                    35     1   3  1  
 2 Ben Harpur               Sami Niku                                         35     1   3  1  
 3 Jonathon Merrill         Gabriel Beaupré                                   25     1   3  1  
 4 Joonas Lyytinen          Gabriel Beaupré                                   5      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Robin Kovacs             Rudolfs Balcers          Daniel Sprong            55     0   0  5  
 2 Alex Barré-Boulet        Sonny Milano             Owen Tippett             45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Filip Hronek             Sami Niku                                         55     0   1  4  
 2 Juuso Välimäki           Ben Harpur                                        45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob Olofsson           Robin Kovacs             55     1   3  1  
 2 Kalle Kossila            Nikita Korostelev        45     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Harpur               Juuso Välimäki           55     1   3  1  
 2 Sami Niku                Filip Hronek             45     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jacob Olofsson                                    60     1   4  0  
 2 Kalle Kossila                                     40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Harpur               Juuso Välimäki           55     1   4  0  
 2 Gabriel Beaupré          Filip Hronek             45     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kalle Kossila            Robin Kovacs             50     0   2  3  
 2 Troy Terry               Owen Tippett             50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gabriel Beaupré          Joonas Lyytinen          60     1   3  1  
 2 Ben Harpur               Filip Hronek             40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Robin Kovacs             Rudolfs Balcers          Daniel Sprong            Filip Hronek             Sami Niku                

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jacob Olofsson           Robin Kovacs             Daniel Sprong            Ben Harpur               Juuso Välimäki           

<b>Goaltenders</b>
Starting : Scott Darling            
Backup : Allen York               
Third : Tyler Parsons            

<b>Extra Forwards</b>
Normal : Robin Kovacs, Rudolfs Balcers, Sonny Milano - PP : Robin Kovacs, Troy Terry - PK : Owen Tippett
<b>Extra Defensemen</b>
Normal : Filip Hronek, Juuso Välimäki, Ben Harpur - PP : Jonathon Merrill - PK : Sami Niku, Joonas Lyytinen
<b>Penalty Shots</b>
Troy Terry, Daniel Sprong, Rudolfs Balcers, Sonny Milano, Robin Kovacs
<b>Custom OT Lines Forwards</b>
Nikita Korostelev, Daniel Sprong, Sonny Milano, Rudolfs Balcers, Alex Barré-Boulet, Owen Tippett, Kalle Kossila, Robin Kovacs, Troy Terry, Jacob Olofsson
<b>Custom OT Lines Defensemen</b>
Juuso Välimäki, Filip Hronek, Sami Niku, Joonas Lyytinen, Ben Harpur

<b>Scratches</b>
Anthony Beauvillier (Sports Hernia Injury)</pre></div>
<h1 class="TeamLineFarm_POR"><a id="PortlandPirates">Portland Pirates</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#PortlandPirates">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#PortlandPirates">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#PortlandPirates">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#PortlandPirates">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#PortlandPirates">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PortlandPirates');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PortlandPirates" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Greg Meireles            Skyler McKenzie          Vilmos Gallo             28     0   1  4  
 2 Yegor Sharangovich       Vadim Vasjonkin          Joachim Blichfeld        26     0   1  4  
 3 Justin Almeida           Arturas Laukaitis        Trey Fix-Wolansky        24     0   1  4  
 4 Max Hermens              Jayden Halbgewachs       Jermaine Loewen          22     1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Backman          Karlis Cukste                                     30     1   2  2  
 2 Mattias Norstebo         Jesper Jensen                                     27     1   2  2  
 3 Kacper Bartnik           Gregorio Gios                                     23     1   2  2  
 4 Yegor Sharangovich       Sam Miletic                                       20     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Miletic              Vadim Vasjonkin          Trey Fix-Wolansky        60     1   0  4  
 2 Max Hermens              Joachim Blichfeld        Vilmos Gallo             40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Norstebo         Karlis Cukste                                     60     1   1  3  
 2 Mattias Backman          Gregorio Gios                                     40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Max Hermens              Jermaine Loewen          60     1   2  2  
 2 Trey Fix-Wolansky        Vilmos Gallo             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mattias Backman          Karlis Cukste            60     1   2  2  
 2 Jesper Jensen            Mattias Norstebo         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Vilmos Gallo                                      60     1   2  2  
 2 Max Hermens                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mattias Backman          Karlis Cukste            60     1   2  2  
 2 Mattias Norstebo         Gregorio Gios            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Justin Almeida           Vadim Vasjonkin          60     1   2  2  
 2 Max Hermens              Vilmos Gallo             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mattias Backman          Karlis Cukste            60     1   2  2  
 2 Mattias Norstebo         Gregorio Gios            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joachim Blichfeld        Jayden Halbgewachs       Trey Fix-Wolansky        Mattias Norstebo         Karlis Cukste            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Max Hermens              Mattias Norstebo         Vilmos Gallo             Mattias Backman          Karlis Cukste            

<b>Goaltenders</b>
Starting : Mareks Mitens            
Backup : Olivier Roy              

<b>Extra Forwards</b>
Normal : Sam Miletic, Skyler McKenzie, Greg Meireles - PP : Sam Miletic, Max Hermens - PK : Jermaine Loewen
<b>Extra Defensemen</b>
Normal : Karlis Cukste, Mattias Norstebo, Gregorio Gios - PP : Mattias Norstebo - PK : Mattias Norstebo, Gregorio Gios
<b>Penalty Shots</b>
Jayden Halbgewachs, Sam Miletic, Justin Almeida, Vilmos Gallo, Trey Fix-Wolansky
<b>Custom OT Lines Forwards</b>
Joachim Blichfeld, Sam Miletic, Max Hermens, Vilmos Gallo, Greg Meireles, Trey Fix-Wolansky, Justin Almeida, Jermaine Loewen, Vadim Vasjonkin, Skyler McKenzie
<b>Custom OT Lines Defensemen</b>
Mattias Backman, Karlis Cukste, Mattias Norstebo, Gregorio Gios, Jesper Jensen

<b>Scratches</b>
Rodrigo Abols (Healthy), T.J. Brodie (Healthy), Ronalds Kenins (Healthy), Demid Yeremeyev (Healthy), Emil Garipov (Healthy)</pre></div>
<h1 class="TeamLineFarm_PRO"><a id="ProvidenceBruins">Providence Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#ProvidenceBruins">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#ProvidenceBruins">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#ProvidenceBruins">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#ProvidenceBruins">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#ProvidenceBruins">Farm Team StatsVS</a> ]
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
Christian Ehrhoff (Healthy), Marc-Antoine Pouliot (Healthy), Tim Bozon (Healthy), Adam Courchaine (Healthy), Brian Ferlin (Healthy)</pre></div>
<h1 class="TeamLineFarm_RCH"><a id="RochesterAmericans">Rochester Americans</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#RochesterAmericans">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#RochesterAmericans">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#RochesterAmericans">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#RochesterAmericans">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#RochesterAmericans">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RochesterAmericans');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RochesterAmericans" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Laughton           Nicklas Bergfors         Richard Panik            25     1   2  2  
 2 Trevor Cox               Sean Kuraly              Tomas Kubalik            25     1   2  2  
 3 Matthew Highmore         Jujhar Khaira            Eric Cornel              25     1   2  2  
 4 Daniel O'Regan           Arttu Ruotsalainen       Kole Lind                25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brad Hunt                Carl Dahlstrom                                    25     1   2  2  
 2 Harrison Ruopp           Matt Taormina                                     25     1   2  2  
 3 Kyle Cumiskey            Daniel O'Regan                                    25     1   2  2  
 4 Brad Hunt                Carl Dahlstrom                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Laughton           Nicklas Bergfors         Richard Panik            60     1   2  2  
 2 Trevor Cox               Sean Kuraly              Tomas Kubalik            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brad Hunt                Carl Dahlstrom                                    60     1   2  2  
 2 Harrison Ruopp           Matt Taormina                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Bergfors         Scott Laughton           60     1   2  2  
 2 Trevor Cox               Sean Kuraly              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brad Hunt                Carl Dahlstrom           60     1   2  2  
 2 Harrison Ruopp           Matt Taormina            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nicklas Bergfors                                  60     1   2  2  
 2 Scott Laughton                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brad Hunt                Carl Dahlstrom           60     1   2  2  
 2 Harrison Ruopp           Matt Taormina            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Bergfors         Scott Laughton           60     1   2  2  
 2 Trevor Cox               Sean Kuraly              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brad Hunt                Carl Dahlstrom           60     1   2  2  
 2 Harrison Ruopp           Matt Taormina            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Laughton           Nicklas Bergfors         Richard Panik            Brad Hunt                Carl Dahlstrom           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Laughton           Nicklas Bergfors         Richard Panik            Brad Hunt                Carl Dahlstrom           

<b>Goaltenders</b>
Starting : Bradley Eidsness         
Backup : Elvis Merzlikins         

<b>Extra Forwards</b>
Normal : Cameron Morrison, Matthew Highmore, Jujhar Khaira - PP : Cameron Morrison, Matthew Highmore - PK : Jujhar Khaira
<b>Extra Defensemen</b>
Normal : Kyle Cumiskey, Harrison Ruopp, Matt Taormina - PP : Kyle Cumiskey - PK : Harrison Ruopp, Matt Taormina
<b>Penalty Shots</b>
Nicklas Bergfors, Scott Laughton, Trevor Cox, Sean Kuraly, Richard Panik
<b>Custom OT Lines Forwards</b>
Nicklas Bergfors, Scott Laughton, Trevor Cox, Sean Kuraly, Richard Panik, Tomas Kubalik, Matthew Highmore, Daniel O'Regan, Jujhar Khaira, Eric Cornel
<b>Custom OT Lines Defensemen</b>
Brad Hunt, Carl Dahlstrom, Harrison Ruopp, Matt Taormina, Kyle Cumiskey

<b>Scratches</b>
Sergei Kostitsyn (Healthy), Ralfs Freibergs (Healthy), Tomas Jurco (Healthy), Peter Cehlarik (Healthy), Nick Baptiste (Healthy)
Filip Westerlund (Healthy)</pre></div>
<h1 class="TeamLineFarm_JOL"><a id="JolietteSportif">Joliette Sportif</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#JolietteSportif">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#JolietteSportif">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#JolietteSportif">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#JolietteSportif">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#JolietteSportif">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_JolietteSportif');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_JolietteSportif" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brandon Pirri            Antoine Vermette         Anton Slepyshev          25     1   2  2  
 2 Nick Paul                Michael Ferland          Greg Nemisz              25     1   2  2  
 3 Scott Wilson             Jiri Hudler              Brody Sutter             25     1   2  2  
 4 Zach Boychuk             Drew Miller              Riley Barber             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Ramage              Jacob Larsson                                     25     1   2  2  
 2 Ryan Lindgren            Oscar Fantenberg                                  25     1   2  2  
 3 Louis Belpedio           Drew Miller                                       25     1   2  2  
 4 John Ramage              Jacob Larsson                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brandon Pirri            Antoine Vermette         Anton Slepyshev          60     1   2  2  
 2 Nick Paul                Michael Ferland          Greg Nemisz              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Ramage              Jacob Larsson                                     60     1   2  2  
 2 Ryan Lindgren            Oscar Fantenberg                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Pirri            Antoine Vermette         60     1   2  2  
 2 Michael Ferland          Anton Slepyshev          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Ramage              Jacob Larsson            60     1   2  2  
 2 Ryan Lindgren            Oscar Fantenberg         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brandon Pirri                                     60     1   2  2  
 2 Antoine Vermette                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Ramage              Jacob Larsson            60     1   2  2  
 2 Ryan Lindgren            Oscar Fantenberg         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Pirri            Antoine Vermette         60     1   2  2  
 2 Michael Ferland          Anton Slepyshev          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Ramage              Jacob Larsson            60     1   2  2  
 2 Ryan Lindgren            Oscar Fantenberg         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brandon Pirri            Antoine Vermette         Anton Slepyshev          John Ramage              Jacob Larsson            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brandon Pirri            Antoine Vermette         Anton Slepyshev          John Ramage              Jacob Larsson            

<b>Goaltenders</b>
Starting : Laurent Brossoit         
Backup : Melvin Nyffeler          
Third : Jack Lafontaine          

<b>Extra Forwards</b>
Normal : Anton Zlobin, Dmitri Mikhailov, Jesper Fasth - PP : Anton Zlobin, Dmitri Mikhailov - PK : Jesper Fasth
<b>Extra Defensemen</b>
Normal : Louis Belpedio, Ryan Lindgren, Oscar Fantenberg - PP : Louis Belpedio - PK : Ryan Lindgren, Oscar Fantenberg
<b>Penalty Shots</b>
Brandon Pirri, Antoine Vermette, Michael Ferland, Anton Slepyshev, Greg Nemisz
<b>Custom OT Lines Forwards</b>
Brandon Pirri, Antoine Vermette, Michael Ferland, Anton Slepyshev, Greg Nemisz, Nick Paul, Jiri Hudler, Brody Sutter, Drew Miller, Riley Barber
<b>Custom OT Lines Defensemen</b>
John Ramage, Jacob Larsson, Ryan Lindgren, Oscar Fantenberg, Louis Belpedio

<b>Scratches</b>
Danny Kristo (Right Foot Injury), Brendon Nash (Torso Injury), Luke Green (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHA"><a id="CharlotteCheckers">Charlotte Checkers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#CharlotteCheckers">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#CharlotteCheckers">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#CharlotteCheckers">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#CharlotteCheckers">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#CharlotteCheckers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CharlotteCheckers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CharlotteCheckers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Oscar Lindberg           Andrew Ladd              Stefan Noesen            25     1   2  2  
 2 Kiefer Sherwood          Kenny Agostino           Cal Clutterbuck          25     1   2  2  
 3 Josh Jooris              Lawson Crouse            Carter Ashton            25     1   2  2  
 4 Joey Hishon              Oscar Lindberg           Sondre Olden             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Barberio            Ricard Blidstrand                                 25     1   2  2  
 2 Michael Stone            Dillon Donnelly                                   25     1   2  2  
 3 Michael Paliotta         Josh Manson                                       25     1   2  2  
 4 Ricard Blidstrand        Kenney Morrison                                   25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Oscar Lindberg           Andrew Ladd              Stefan Noesen            60     1   2  2  
 2 Kiefer Sherwood          Kenny Agostino           Cal Clutterbuck          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Barberio            Ricard Blidstrand                                 60     1   2  2  
 2 Michael Stone            Dillon Donnelly                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrew Ladd              Stefan Noesen            60     1   2  2  
 2 Kenny Agostino           Cal Clutterbuck          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Barberio            Michael Paliotta         60     1   2  2  
 2 Michael Stone            Dillon Donnelly          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Andrew Ladd                                       60     1   2  2  
 2 Stefan Noesen                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Barberio            Josh Manson              60     1   2  2  
 2 Michael Stone            Dillon Donnelly          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrew Ladd              Stefan Noesen            60     1   2  2  
 2 Kenny Agostino           Cal Clutterbuck          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Barberio            Ricard Blidstrand        60     1   2  2  
 2 Michael Stone            Dillon Donnelly          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cal Clutterbuck          Andrew Ladd              Stefan Noesen            Mark Barberio            Dillon Donnelly          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cal Clutterbuck          Andrew Ladd              Stefan Noesen            Mark Barberio            Dillon Donnelly          

<b>Goaltenders</b>
Starting : Mike Murphy              
Backup : Ben Scrivens             
Third : Kristers Gudlevskis      

<b>Extra Forwards</b>
Normal : Oscar Lindberg, Lawson Crouse, Carter Ashton - PP : Oscar Lindberg, Lawson Crouse - PK : Carter Ashton
<b>Extra Defensemen</b>
Normal : Michael Paliotta, Josh Manson, Ricard Blidstrand - PP : Michael Paliotta - PK : Josh Manson, Ricard Blidstrand
<b>Penalty Shots</b>
Andrew Ladd, Stefan Noesen, Kenny Agostino, Lawson Crouse, Cal Clutterbuck
<b>Custom OT Lines Forwards</b>
Andrew Ladd, Stefan Noesen, Kenny Agostino, Oscar Lindberg, Cal Clutterbuck, Lawson Crouse, Kiefer Sherwood, Carter Ashton, Sondre Olden, Josh Jooris
<b>Custom OT Lines Defensemen</b>
Mark Barberio, Ricard Blidstrand, Michael Stone, Dillon Donnelly, Michael Paliotta

<b>Scratches</b>
James Wisniewski (Left Knee Injury), Dominik Uher (Healthy), Ladislav Smid (Healthy), Patrick O'Sullivan (Healthy), Zac Dalpe (Healthy)
Rasmus Nielsen (Healthy)</pre></div>
<h1 class="TeamLineFarm_RFD"><a id="RockfordIceHogs">Rockford IceHogs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#RockfordIceHogs">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#RockfordIceHogs">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#RockfordIceHogs">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#RockfordIceHogs">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#RockfordIceHogs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RockfordIceHogs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RockfordIceHogs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Byron Froese             Nathan Walker            Justin Auger             34     0   1  4  
 2 Justin Holl              Zac Rinaldo              Austin Czarnik           28     0   2  3  
 3 Mirko Hoefflin           Andreas Engqvist         Philippe Paradis         22     1   1  3  
 4 Julien Pelletier         Zach Pochiro             Philippe Paradis         16     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gustav Olofsson          Jake Muzzin                                       34     1   3  1  
 2 Julian Melchiori         John Nyberg                                       28     1   3  1  
 3 Enrico Miglioranzi       Trevor Van Riemsdyk                               22     1   3  1  
 4 Jason Fram               Justin Holl                                       16     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Byron Froese             Nathan Walker            Justin Auger             50     0   0  5  
 2 Andreas Engqvist         Zac Rinaldo              Austin Czarnik           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Trevor Van Riemsdyk      Justin Holl                                       50     1   3  1  
 2 Jason Fram               Julian Melchiori                                  50     1   3  1  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Byron Froese             Justin Holl              50     0   5  0  
 2 Andreas Engqvist         Justin Auger             50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Olofsson          John Nyberg              50     1   3  1  
 2 Julian Melchiori         Jake Muzzin              50     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Byron Froese                                      50     0   5  0  
 2 Andreas Engqvist                                  50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Olofsson          John Nyberg              50     1   3  1  
 2 Julian Melchiori         Jake Muzzin              50     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Byron Froese             Justin Auger             50     0   2  3  
 2 Justin Holl              Austin Czarnik           50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Olofsson          Jake Muzzin              50     1   3  1  
 2 Enrico Miglioranzi       John Nyberg              50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Byron Froese             Austin Czarnik           Justin Auger             Trevor Van Riemsdyk      Justin Holl              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Byron Froese             Andreas Engqvist         Justin Holl              Gustav Olofsson          Julian Melchiori         

<b>Goaltenders</b>
Starting : Mackenzie Blackwood      
Backup : Antti Raanta             
Third : Jonathan Bernier         

<b>Extra Forwards</b>
Normal : Austin Czarnik, Nathan Walker, Byron Froese - PP : Austin Czarnik, Mirko Hoefflin - PK : Zach Pochiro
<b>Extra Defensemen</b>
Normal : John Nyberg, Enrico Miglioranzi, Jason Fram - PP : Enrico Miglioranzi - PK : Julian Melchiori, Enrico Miglioranzi
<b>Penalty Shots</b>
Justin Auger, Byron Froese, Philippe Paradis, Austin Czarnik, Mirko Hoefflin
<b>Custom OT Lines Forwards</b>
Byron Froese, Austin Czarnik, Justin Holl, Justin Auger, Mirko Hoefflin, Nathan Walker, Julien Pelletier, Zac Rinaldo, Zach Pochiro, Philippe Paradis
<b>Custom OT Lines Defensemen</b>
Trevor Van Riemsdyk, Justin Holl, Jason Fram, Julian Melchiori, Enrico Miglioranzi

<b>Scratches</b>
Nikolai Zherdev (Healthy), David Gilbert (Healthy), Christopher DiDomenico (Healthy), Rourke Chartier (Healthy), Michael McNiven (Healthy)</pre></div>
<h1 class="TeamLineFarm_LKE"><a id="LakeErieMonsters">Lake Erie Monsters</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#LakeErieMonsters">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#LakeErieMonsters">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#LakeErieMonsters">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#LakeErieMonsters">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#LakeErieMonsters">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LakeErieMonsters');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LakeErieMonsters" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jimmy Huntington         Sergey Tolchinsky        Kurtis Gabriel           34     1   1  3  
 2 Anton Lander             Marcel Noebels           Christoph Bertschy       34     1   1  3  
 3 Ivan Barbashev           Francis Beauvillier      Luke Walker              27     1   1  3  
 4 Nathan Condon            Christoph Bertschy       Luke Walker              5      1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brett Cote               Ryan Stanton                                      25     1   2  2  
 2 Carl Gunnarsson          Stephen Silas                                     25     1   2  2  
 3 Gus Young                Troy Rutkowski                                    25     1   2  2  
 4 Gavin Bayreuther         Jake Walman                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jimmy Huntington         Sergey Tolchinsky        Kurtis Gabriel           60     0   0  5  
 2 Luke Walker              Marcel Noebels           Christoph Bertschy       40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brett Cote               Gus Young                                         60     0   1  4  
 2 Carl Gunnarsson          Stephen Silas                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Marcel Noebels           Sergey Tolchinsky        60     1   3  1  
 2 Kurtis Gabriel           Francis Beauvillier      40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gus Young                Ryan Stanton             60     1   4  0  
 2 Carl Gunnarsson          Stephen Silas            40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sergey Tolchinsky                                 60     0   5  0  
 2 Marcel Noebels                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brett Cote               Ryan Stanton             60     0   5  0  
 2 Carl Gunnarsson          Stephen Silas            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Luke Walker              Sergey Tolchinsky        60     1   2  2  
 2 Marcel Noebels           Kurtis Gabriel           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gus Young                Ryan Stanton             60     1   2  2  
 2 Carl Gunnarsson          Stephen Silas            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Marcel Noebels           Sergey Tolchinsky        Kurtis Gabriel           Carl Gunnarsson          Ryan Stanton             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Marcel Noebels           Sergey Tolchinsky        Kurtis Gabriel           Carl Gunnarsson          Ryan Stanton             

<b>Goaltenders</b>
Starting : Peter Delmas             
Backup : Matt O'Connor            
Third : Trevor Cann              

<b>Extra Forwards</b>
Normal : Luke Walker, Marcel Noebels, Jimmy Huntington - PP : Luke Walker, Marcel Noebels - PK : Jimmy Huntington
<b>Extra Defensemen</b>
Normal : Ryan Stanton, Gus Young, Troy Rutkowski - PP : Ryan Stanton - PK : Gus Young, Troy Rutkowski
<b>Penalty Shots</b>
Jimmy Huntington, Sergey Tolchinsky, Marcel Noebels, Luke Walker, Kurtis Gabriel
<b>Custom OT Lines Forwards</b>
Nathan Condon, Sergey Tolchinsky, Marcel Noebels, Ivan Barbashev, Kurtis Gabriel, Anton Lander, Luke Walker, Christoph Bertschy, Jimmy Huntington, Francis Beauvillier
<b>Custom OT Lines Defensemen</b>
Gavin Bayreuther, Ryan Stanton, Carl Gunnarsson, Stephen Silas, Gus Young

<b>Scratches</b>
Luke Moffatt (Healthy)</pre></div>
<h1 class="TeamLineFarm_SPR"><a id="SpringfieldFalcons">Springfield Falcons</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#SpringfieldFalcons">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#SpringfieldFalcons">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#SpringfieldFalcons">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#SpringfieldFalcons">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#SpringfieldFalcons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SpringfieldFalcons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SpringfieldFalcons" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Shane Bowers             Remi Elie                Dominik Bokk             35     0   1  4  
 2 Carsen Twarynski         Marcus Karlberg          Martin Kaut              30     0   2  3  
 3 Alexander Dergachyov     Pius Suter               Samuel Blais             30     0   2  3  
 4 Derek Grant              Carsen Twarynski         Anton Blidh              5      0   2  3  

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
 2 Derek Grant              Samuel Blais             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Tryamkin          Mirco Mueller            60     1   4  0  
 2 Brendan Guhle            Adam Boqvist             40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Derek Grant                                       60     1   4  0  
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
Starting : Aaron Dell               
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
Pierre-Luc Letourneau-Leblond (Healthy), Eric Locke (Healthy), Mark Owuya (Healthy)</pre></div>
<h1 class="TeamLineFarm_LVG"><a id="LasVegasGamblers">Las Vegas Gamblers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#LasVegasGamblers">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#LasVegasGamblers">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#LasVegasGamblers">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#LasVegasGamblers">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#LasVegasGamblers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LasVegasGamblers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LasVegasGamblers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Conner Bleackley         Lauri Korpikoski         Kyle Okposo              25     1   2  2  
 2 Jayce Hawryluk           Colton Gillies           Cam Atkinson             25     1   2  2  
 3 Melker Karlsson          Jimmy Vesey              Adam Brodecki            25     1   2  2  
 4 Justin Kea               Isac Lundestrom          Tobias Lindberg          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Haydn Fleury             Maxim Chudinov                                    25     1   2  2  
 2 Eric Gryba               Rob O'Gara                                        25     1   2  2  
 3 Parker Wotherspoon       Riley Stadel                                      25     1   2  2  
 4 Haydn Fleury             Maxim Chudinov                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Conner Bleackley         Lauri Korpikoski         Kyle Okposo              60     1   2  2  
 2 Jayce Hawryluk           Colton Gillies           Cam Atkinson             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Haydn Fleury             Maxim Chudinov                                    60     1   2  2  
 2 Eric Gryba               Rob O'Gara                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lauri Korpikoski         Conner Bleackley         60     1   2  2  
 2 Kyle Okposo              Jayce Hawryluk           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Haydn Fleury             Maxim Chudinov           60     1   2  2  
 2 Eric Gryba               Rob O'Gara               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Lauri Korpikoski                                  60     1   2  2  
 2 Conner Bleackley                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Haydn Fleury             Maxim Chudinov           60     1   2  2  
 2 Eric Gryba               Rob O'Gara               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lauri Korpikoski         Conner Bleackley         60     1   2  2  
 2 Kyle Okposo              Jayce Hawryluk           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Haydn Fleury             Maxim Chudinov           60     1   2  2  
 2 Eric Gryba               Rob O'Gara               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Conner Bleackley         Lauri Korpikoski         Kyle Okposo              Haydn Fleury             Maxim Chudinov           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Conner Bleackley         Lauri Korpikoski         Kyle Okposo              Haydn Fleury             Maxim Chudinov           

<b>Goaltenders</b>
Starting : Chad Johnson             
Backup : Filip Gustavsson         
Third : Evan Fitzpatrick         

<b>Extra Forwards</b>
Normal : Givani Smith, Melker Karlsson, Jimmy Vesey - PP : Givani Smith, Melker Karlsson - PK : Jimmy Vesey
<b>Extra Defensemen</b>
Normal : Parker Wotherspoon, Riley Stadel, Eric Gryba - PP : Parker Wotherspoon - PK : Riley Stadel, Eric Gryba
<b>Penalty Shots</b>
Lauri Korpikoski, Conner Bleackley, Kyle Okposo, Jayce Hawryluk, Cam Atkinson
<b>Custom OT Lines Forwards</b>
Lauri Korpikoski, Conner Bleackley, Kyle Okposo, Jayce Hawryluk, Cam Atkinson, Colton Gillies, Melker Karlsson, Jimmy Vesey, Justin Kea, Isac Lundestrom
<b>Custom OT Lines Defensemen</b>
Haydn Fleury, Maxim Chudinov, Eric Gryba, Rob O'Gara, Parker Wotherspoon

<b>Scratches</b>
Christian Jaros (Healthy)</pre></div>
<h1 class="TeamLineFarm_GRG"><a id="GrandRapidsGriffins">Grand Rapids Griffins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#GrandRapidsGriffins">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#GrandRapidsGriffins">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#GrandRapidsGriffins">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#GrandRapidsGriffins">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#GrandRapidsGriffins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GrandRapidsGriffins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GrandRapidsGriffins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Shane Prince             Jannik Hansen            Tomas Vincour            25     1   2  2  
 2 Valtteri Filppula        Andrew Agozzino          Brooks Macek             25     1   2  2  
 3 Dylan Sikura             Brady Tkachuk            Philippe Hudon           25     1   2  2  
 4 Brent Raedeke            Kaspars Daugavins        Jannik Hansen            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Patrick Wiercioch        Alexei Marchenko                                  25     1   2  2  
 2 Dennis Persson           Josh Gorges                                       25     1   2  2  
 3 Ryan Button              Chris Wideman                                     25     1   2  2  
 4 Chad Billins             Patrick Wiercioch                                 25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Shane Prince             Jannik Hansen            Tomas Vincour            60     1   2  2  
 2 Valtteri Filppula        Andrew Agozzino          Brooks Macek             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Patrick Wiercioch        Alexei Marchenko                                  60     1   2  2  
 2 Dennis Persson           Josh Gorges                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jannik Hansen            Shane Prince             60     1   2  2  
 2 Valtteri Filppula        Tomas Vincour            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Patrick Wiercioch        Alexei Marchenko         60     1   2  2  
 2 Dennis Persson           Josh Gorges              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jannik Hansen                                     60     1   2  2  
 2 Shane Prince                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Patrick Wiercioch        Alexei Marchenko         60     1   2  2  
 2 Dennis Persson           Josh Gorges              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jannik Hansen            Shane Prince             60     1   2  2  
 2 Valtteri Filppula        Tomas Vincour            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Patrick Wiercioch        Alexei Marchenko         60     1   2  2  
 2 Dennis Persson           Josh Gorges              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Shane Prince             Jannik Hansen            Tomas Vincour            Patrick Wiercioch        Alexei Marchenko         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Shane Prince             Jannik Hansen            Tomas Vincour            Patrick Wiercioch        Alexei Marchenko         

<b>Goaltenders</b>
Starting : Alex Dubeau              
Backup : Ilya Konovalov           
Third : Luka Gracnar             

<b>Extra Forwards</b>
Normal : Miha Verlic, Dominic Zwerger, Dylan Sikura - PP : Miha Verlic, Dominic Zwerger - PK : Dylan Sikura
<b>Extra Defensemen</b>
Normal : Ryan Button, Chris Wideman, Chad Billins - PP : Ryan Button - PK : Chris Wideman, Chad Billins
<b>Penalty Shots</b>
Jannik Hansen, Shane Prince, Valtteri Filppula, Tomas Vincour, Andrew Agozzino
<b>Custom OT Lines Forwards</b>
Jannik Hansen, Shane Prince, Valtteri Filppula, Tomas Vincour, Andrew Agozzino, Brooks Macek, Dylan Sikura, Philippe Hudon, Brady Tkachuk, Kaspars Daugavins
<b>Custom OT Lines Defensemen</b>
Patrick Wiercioch, Alexei Marchenko, Dennis Persson, Josh Gorges, Ryan Button

<b>Scratches</b>
Mitchell Callahan (Healthy), Jake Allen (Healthy)</pre></div>
<h1 class="TeamLineFarm_OKC"><a id="OklahomaCityBarons">Oklahoma City Barons</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#OklahomaCityBarons">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#OklahomaCityBarons">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#OklahomaCityBarons">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#OklahomaCityBarons">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#OklahomaCityBarons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OklahomaCityBarons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OklahomaCityBarons" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael McLeod           Paul Bittner             Valentin Zykov           34     0   2  3  
 2 Antoine Morand           Gabriel Vilardi          Kailer Yamamoto          32     0   2  3  
 3 Jared Knight             Teemu Hartikainen        Brendan Lemieux          27     0   2  3  
 4 Antoine Morand           Gabriel Vilardi          Jared Knight             7      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Samorukov         Jack Dougherty                                    34     1   2  2  
 2 Otto Leskinen            J.D. Greenway                                     33     1   2  2  
 3 Matthew Spencer          Alex Lintuniemi                                   27     1   2  2  
 4 Matthew Spencer          Dmitri Samorukov                                  6      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael McLeod           Paul Bittner             Valentin Zykov           56     0   0  5  
 2 Antoine Morand           Gabriel Vilardi          Teemu Hartikainen        44     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jack Dougherty           Dmitri Samorukov                                  56     0   1  4  
 2 Otto Leskinen            J.D. Greenway                                     44     0   1  4  

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
 2 Otto Leskinen            Jack Dougherty           45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael McLeod           Valentin Zykov           56     0   1  4  
 2 Antoine Morand           Paul Bittner             44     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitri Samorukov         Jack Dougherty           56     0   1  4  
 2 Otto Leskinen            J.D. Greenway            44     0   1  4  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael McLeod           Paul Bittner             Valentin Zykov           Dmitri Samorukov         Jack Dougherty           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brendan Lemieux          Gabriel Vilardi          Teemu Hartikainen        J.D. Greenway            Matthew Spencer          

<b>Goaltenders</b>
Starting : Tyler Bunz               
Backup : Cedrick Desjardins       
Third : Samu Perhonen            

<b>Extra Forwards</b>
Normal : Paul Bittner, Valentin Zykov, Antoine Morand - PP : Gabriel Vilardi, Antoine Morand - PK : Antoine Morand
<b>Extra Defensemen</b>
Normal : J.D. Greenway, Jack Dougherty, Otto Leskinen - PP : Matthew Spencer - PK : J.D. Greenway, Jack Dougherty
<b>Penalty Shots</b>
Antoine Morand, Michael McLeod, Valentin Zykov, Gabriel Vilardi, Paul Bittner
<b>Custom OT Lines Forwards</b>
Michael McLeod, Valentin Zykov, Jared Knight, Paul Bittner, Antoine Morand, Jimmy Hayes, Gabriel Vilardi, Teemu Hartikainen, Alex Lintuniemi, Brendan Lemieux
<b>Custom OT Lines Defensemen</b>
Otto Leskinen, Jack Dougherty, J.D. Greenway, Dmitri Samorukov, Matthew Spencer

<b>Scratches</b>
Cameron Hughes (Healthy)</pre></div>
<h1 class="TeamLineFarm_SAR"><a id="SanAntonioRampage">San Antonio Rampage</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#SanAntonioRampage">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#SanAntonioRampage">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#SanAntonioRampage">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#SanAntonioRampage">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#SanAntonioRampage">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanAntonioRampage');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanAntonioRampage" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andrew Desjardins        Jordan Greenway          Rihards Bukarts          25     1   2  2  
 2 Andrea Kristler          Iiro Pakarinen           Tomas Hyka               25     1   2  2  
 3 Linus Lindstrom          Garrett Wilson           Bobby Butler             25     1   2  2  
 4 Tanner Kaspick           Justin Feser             Vaclav Karabacek         25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Benning             Andrew O'Brien                                    25     1   2  2  
 2 Adam McQuaid             Colby Robak                                       25     1   2  2  
 3 Juuso Riikola            Jan Kostalek                                      25     1   2  2  
 4 Matt Benning             Andrew O'Brien                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andrew Desjardins        Jordan Greenway          Rihards Bukarts          60     1   2  2  
 2 Andrea Kristler          Iiro Pakarinen           Tomas Hyka               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Benning             Andrew O'Brien                                    60     1   2  2  
 2 Adam McQuaid             Colby Robak                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Greenway          Rihards Bukarts          60     1   2  2  
 2 Iiro Pakarinen           Garrett Wilson           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Benning             Andrew O'Brien           60     1   2  2  
 2 Adam McQuaid             Colby Robak              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Greenway                                   60     1   2  2  
 2 Rihards Bukarts                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Benning             Andrew O'Brien           60     1   2  2  
 2 Adam McQuaid             Colby Robak              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Greenway          Rihards Bukarts          60     1   2  2  
 2 Iiro Pakarinen           Garrett Wilson           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Benning             Andrew O'Brien           60     1   2  2  
 2 Adam McQuaid             Colby Robak              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Desjardins        Jordan Greenway          Rihards Bukarts          Matt Benning             Andrew O'Brien           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Desjardins        Jordan Greenway          Rihards Bukarts          Matt Benning             Andrew O'Brien           

<b>Goaltenders</b>
Starting : Johan Gustafsson         
Backup : Keith Petruzzelli        

<b>Extra Forwards</b>
Normal : Aaron Volpatti, Justin Feser, Bobby Butler - PP : Aaron Volpatti, Justin Feser - PK : Bobby Butler
<b>Extra Defensemen</b>
Normal : Juuso Riikola, Jan Kostalek, Adam McQuaid - PP : Juuso Riikola - PK : Jan Kostalek, Adam McQuaid
<b>Penalty Shots</b>
Jordan Greenway, Rihards Bukarts, Iiro Pakarinen, Garrett Wilson, Tomas Hyka
<b>Custom OT Lines Forwards</b>
Jordan Greenway, Rihards Bukarts, Iiro Pakarinen, Garrett Wilson, Tomas Hyka, Justin Feser, Bobby Butler, Andrew Desjardins, Andrea Kristler, Linus Lindstrom
<b>Custom OT Lines Defensemen</b>
Matt Benning, Andrew O'Brien, Adam McQuaid, Colby Robak, Juuso Riikola

<b>Scratches</b>
Alexander Sulzer (Healthy), Andrey Zubarev (Healthy), Alex Velischek (Healthy), Andrew Bodnarchuk (Healthy), Aapeli Rasanen (Healthy)
Antero Niittymaki (Healthy)</pre></div>
<h1 class="TeamLineFarm_GAT"><a id="GatineauOlympiques">Gatineau Olympiques</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#GatineauOlympiques">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#GatineauOlympiques">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#GatineauOlympiques">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#GatineauOlympiques">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#GatineauOlympiques">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GatineauOlympiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GatineauOlympiques" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Cirelli          Miles Wood               Mathieu Joseph           34     0   1  3  
 2 Jordan Weal              Anders Bjork             Matt Luff                30     0   2  3  
 3 Jerry D'Amigo            Brett Bulmer             Laurin Braun             26     0   3  2  
 4 Mikey Eyssimont          Brendan Gaunce           Nolan Stevens            10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Andersson         Thomas Chabot                                     32     0   3  2  
 2 Robert Hagg              Jordan Subban                                     32     0   3  2  
 3 Victor Mete              Caleb Jones                                       31     0   2  3  
 4 Rasmus Andersson         Thomas Chabot                                     5      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Cirelli          Miles Wood               Mathieu Joseph           60     0   0  5  
 2 Jordan Weal              Anders Bjork             Matt Luff                40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jordan Subban            Thomas Chabot                                     60     0   1  4  
 2 Robert Hagg              Rasmus Andersson                                  40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nolan Stevens            Jerry D'Amigo            60     0   4  1  
 2 Miles Wood               Brett Bulmer             40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Andersson         Thomas Chabot            60     1   4  0  
 2 Robert Hagg              Caleb Jones              40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nolan Stevens                                     60     0   5  0  
 2 Jerry D'Amigo                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Andersson         Thomas Chabot            60     1   4  0  
 2 Robert Hagg              Caleb Jones              40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Weal              Miles Wood               60     0   2  3  
 2 Jerry D'Amigo            Brett Bulmer             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Andersson         Thomas Chabot            60     0   3  2  
 2 Robert Hagg              Jordan Subban            40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Cirelli          Miles Wood               Mathieu Joseph           Rasmus Andersson         Thomas Chabot            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Cirelli          Miles Wood               Jerry D'Amigo            Rasmus Andersson         Thomas Chabot            

<b>Goaltenders</b>
Starting : Adin Hill                
Backup : Christopher Gibson       

<b>Extra Forwards</b>
Normal : Brett Bulmer, Nolan Stevens, Jerry D'Amigo - PP : Jerry D'Amigo, Nolan Stevens - PK : Anthony Cirelli
<b>Extra Defensemen</b>
Normal : Victor Mete, Robert Hagg, Jordan Subban - PP : Victor Mete - PK : Robert Hagg, Jordan Subban
<b>Penalty Shots</b>
Jordan Weal, Miles Wood, Jerry D'Amigo, Brett Bulmer, Matt Luff
<b>Custom OT Lines Forwards</b>
Anthony Cirelli, Miles Wood, Mathieu Joseph, Anders Bjork, Matt Luff, Nolan Stevens, Jordan Weal, Laurin Braun, Jerry D'Amigo, Brett Bulmer
<b>Custom OT Lines Defensemen</b>
Rasmus Andersson, Thomas Chabot, Robert Hagg, Jordan Subban, Victor Mete

<b>Scratches</b>
Matt Donovan (Healthy), Jeff Taylor (Healthy), Ryan Rupert (Healthy), Oleg Sosunov (Healthy), Mitchell Stephens (Healthy)
Ross Colton (Healthy), Joonas Korpisalo (Healthy)</pre></div>
<h1 class="TeamLineFarm_HOU"><a id="HoustonAeros">Houston Aeros</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#HoustonAeros">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#HoustonAeros">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#HoustonAeros">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#HoustonAeros">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#HoustonAeros">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HoustonAeros');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HoustonAeros" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Sgarbossa        Carl Klingberg           Jussi Jokinen            25     1   2  2  
 2 Tyler Graovac            Daniil Zharkov           Nick Sorensen            25     1   2  2  
 3 Cody Almond              Danick Martel            Benoit Pouliot           25     1   2  2  
 4 Carl Klingberg           Reto Suri                Derek Dorsett            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Sproul              Charles-Olivier Roussel                           25     1   2  2  
 2 Maxim Noreau             Adam Ginning                                      25     1   2  2  
 3 Cale Fleury              John Marino                                       25     1   2  2  
 4 Ryan Sproul              Charles-Olivier Roussel                           25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Sgarbossa        Carl Klingberg           Jussi Jokinen            60     1   2  2  
 2 Tyler Graovac            Daniil Zharkov           Nick Sorensen            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Sproul              Charles-Olivier Roussel                           60     1   2  2  
 2 Maxim Noreau             Cale Fleury                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Carl Klingberg           Michael Sgarbossa        60     1   2  2  
 2 Jussi Jokinen            Daniil Zharkov           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Sproul              Charles-Olivier Roussel  60     1   2  2  
 2 Maxim Noreau             John Marino              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Carl Klingberg                                    60     1   2  2  
 2 Michael Sgarbossa                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Sproul              Charles-Olivier Roussel  60     1   2  2  
 2 Maxim Noreau             John Marino              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Carl Klingberg           Michael Sgarbossa        60     1   2  2  
 2 Jussi Jokinen            Daniil Zharkov           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Sproul              Charles-Olivier Roussel  60     1   2  2  
 2 Maxim Noreau             Cale Fleury              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Sgarbossa        Carl Klingberg           Jussi Jokinen            Ryan Sproul              Charles-Olivier Roussel  

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Sgarbossa        Carl Klingberg           Jussi Jokinen            Ryan Sproul              Charles-Olivier Roussel  

<b>Goaltenders</b>
Starting : Anton Khudobin           
Backup : Antoine Bibeau           
Third : François Tremblay        

<b>Extra Forwards</b>
Normal : Conor Garland, Danick Martel, Benoit Pouliot - PP : Conor Garland, Danick Martel - PK : Benoit Pouliot
<b>Extra Defensemen</b>
Normal : Cale Fleury, John Marino, Maxim Noreau - PP : Cale Fleury - PK : John Marino, Maxim Noreau
<b>Penalty Shots</b>
Carl Klingberg, Michael Sgarbossa, Jussi Jokinen, Daniil Zharkov, Nick Sorensen
<b>Custom OT Lines Forwards</b>
Carl Klingberg, Michael Sgarbossa, Jussi Jokinen, Daniil Zharkov, Nick Sorensen, Tyler Graovac, Danick Martel, Benoit Pouliot, Derek Dorsett, Cody Almond
<b>Custom OT Lines Defensemen</b>
Ryan Sproul, Charles-Olivier Roussel, Maxim Noreau, Adam Ginning, Cale Fleury

<b>Scratches</b>
Steve Weinstein (Broken Nose Injury), Ziga Pance (Healthy), Matthias Plachta (Torn Left ACL Injury), Nikita Zaitsev (Healthy)</pre></div>
<h1 class="TeamLineFarm_TRD"><a id="Trois-RivièresDraveurs">Trois-Rivières Draveurs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#Trois-RivièresDraveurs">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#Trois-RivièresDraveurs">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#Trois-RivièresDraveurs">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#Trois-RivièresDraveurs">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#Trois-RivièresDraveurs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Trois-RivièresDraveurs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Trois-RivièresDraveurs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Gaetan Haas              Patrick Bjorkstrand      Ben Smith                37     1   0  4  
 2 Yan-Pavel Laplante       Alex Burrows             Maximilian Veronneau     33     1   1  3  
 3 Clark Bishop             Marcus Davidsson         Josh Currie              20     1   2  2  
 4 Dominic Turgeon          Maxime Talbot            Justin Brazeau           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Roman Polak              Christian Wolanin                                 40     1   2  2  
 2 Rinat Valiev             Dean Kukan                                        40     1   2  2  
 3 Bokondji Imama           Jonas Siegenthaler                                20     1   3  1  
 4 Jonas Siegenthaler       Dean Kukan                                        0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ben Smith                Yan-Pavel Laplante       Patrick Bjorkstrand      60     1   1  3  
 2 Gaetan Haas              Marcus Davidsson         Maximilian Veronneau     40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Christian Wolanin        Dean Kukan                                        60     1   1  3  
 2 Rinat Valiev             Roman Polak                                       40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gaetan Haas              Maximilian Veronneau     60     1   3  1  
 2 Clark Bishop             Maxime Talbot            40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rinat Valiev             Roman Polak              60     1   3  1  
 2 Dean Kukan               Jonas Siegenthaler       40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Gaetan Haas                                       60     1   3  1  
 2 Clark Bishop                                      40     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rinat Valiev             Roman Polak              60     2   3  0  
 2 Jonas Siegenthaler       Dean Kukan               40     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ben Smith                Yan-Pavel Laplante       50     1   2  2  
 2 Gaetan Haas              Patrick Bjorkstrand      50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Polak              Christian Wolanin        50     1   2  2  
 2 Dean Kukan               Rinat Valiev             50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ben Smith                Yan-Pavel Laplante       Patrick Bjorkstrand      Dean Kukan               Christian Wolanin        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Gaetan Haas              Maxime Talbot            Alex Burrows             Dean Kukan               Roman Polak              

<b>Goaltenders</b>
Starting : Ilya Samsonov            
Backup : Justin Peters            

<b>Extra Forwards</b>
Normal : Patrick Bjorkstrand, Ben Smith, Gaetan Haas - PP : Patrick Bjorkstrand, Yan-Pavel Laplante - PK : Gaetan Haas
<b>Extra Defensemen</b>
Normal : Christian Wolanin, Roman Polak, Dean Kukan - PP : Christian Wolanin - PK : Roman Polak, Rinat Valiev
<b>Penalty Shots</b>
Patrick Bjorkstrand, Ben Smith, Marcus Davidsson, Maximilian Veronneau, Yan-Pavel Laplante
<b>Custom OT Lines Forwards</b>
Patrick Bjorkstrand, Ben Smith, Gaetan Haas, Yan-Pavel Laplante, Josh Currie, Alex Burrows, Dominic Turgeon, Justin Brazeau, Maxime Talbot, Marcus Davidsson
<b>Custom OT Lines Defensemen</b>
Christian Wolanin, Roman Polak, Dean Kukan, Jonas Siegenthaler, Rinat Valiev

<b>Scratches</b>
Derek Mathers (Healthy), Antoine Marcoux (Healthy), Leo Komarov (Healthy), Ryan Tesink (Left Foot Injury), Jérémy Grégoire (Healthy)
Sebastian Aho (D) (Sprained Right Knee Injury)</pre></div>
<h1 class="TeamLineFarm_MIL"><a id="MilwaukeeAdmirals">Milwaukee Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#MilwaukeeAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#MilwaukeeAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#MilwaukeeAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#MilwaukeeAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#MilwaukeeAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MilwaukeeAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MilwaukeeAdmirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Marc-Olivier Roy         Cristoval Nieves         Zach Budish              36     1   3  1  
 2 Logan Brown              Taro Hirose              Tage Thompson            34     0   1  4  
 3 Michael Latta            Mark Jankowski           Taylor Beck              20     1   1  3  
 4 Kyle Platzer             Philippe Cornet          Mitch Moroz              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Borowiecki          Mac Bennett                                       35     1   3  1  
 2 Joshua Jacobs            Jack Hillen                                       33     1   3  1  
 3 Markus Lauridsen         Stuart Percy                                      32     1   3  1  
 4 Mark Borowiecki          Mac Bennett                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Brown              Taro Hirose              Tage Thompson            60     0   0  5  
 2 Mark Jankowski           Philippe Cornet          Taylor Beck              40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mac Bennett              Joshua Jacobs                                     60     0   0  5  
 2 Jack Hillen              Stuart Percy                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cristoval Nieves         Zach Budish              60     0   5  0  
 2 Marc-Olivier Roy         Tage Thompson            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Borowiecki          Markus Lauridsen         60     0   5  0  
 2 Joshua Jacobs            Mac Bennett              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Cristoval Nieves                                  60     0   5  0  
 2 Marc-Olivier Roy                                  40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Borowiecki          Markus Lauridsen         60     0   5  0  
 2 Joshua Jacobs            Mac Bennett              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Logan Brown              Taro Hirose              60     1   1  3  
 2 Marc-Olivier Roy         Tage Thompson            40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Borowiecki          Mac Bennett              60     1   2  2  
 2 Joshua Jacobs            Jack Hillen              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Brown              Taro Hirose              Tage Thompson            Mac Bennett              Joshua Jacobs            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Marc-Olivier Roy         Cristoval Nieves         Zach Budish              Mark Borowiecki          Markus Lauridsen         

<b>Goaltenders</b>
Starting : Louis Domingue           
Backup : Jonas Gustavsson         

<b>Extra Forwards</b>
Normal : Taro Hirose, Marc-Olivier Roy, Logan Brown - PP : Marc-Olivier Roy, Michael Latta - PK : Mark Jankowski
<b>Extra Defensemen</b>
Normal : Joshua Jacobs, Mark Borowiecki, Mac Bennett - PP : Mark Borowiecki - PK : Jack Hillen, Stuart Percy
<b>Penalty Shots</b>
Taro Hirose, Taylor Beck, Philippe Cornet, Mark Jankowski, Logan Brown
<b>Custom OT Lines Forwards</b>
Zach Budish, Taro Hirose, Logan Brown, Tage Thompson, Marc-Olivier Roy, Philippe Cornet, Mark Jankowski, Taylor Beck, Michael Latta, Cristoval Nieves
<b>Custom OT Lines Defensemen</b>
Joshua Jacobs, Stuart Percy, Mark Borowiecki, Jack Hillen, Mac Bennett

<b>Scratches</b>
Erik Gustafsson (Healthy), Matthew Carle (Healthy), Dylan Blujus (Healthy), Mike Condon (Healthy)</pre></div>
<h1 class="TeamLineFarm_ALB"><a id="AlbanyDevils">Albany Devils</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#AlbanyDevils">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#AlbanyDevils">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#AlbanyDevils">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#AlbanyDevils">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#AlbanyDevils">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AlbanyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AlbanyDevils" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Roope Hintz              Benn Ferriero            Jackson Houck            35     1   2  2  
 2 Lukas Sutter             Brad Malone              Matt Leitner             30     1   2  2  
 3 Alexandre Giroux         Lucas Lessio             Andrew Fritsch           20     1   2  2  
 4 Ryan Kuffner             Alexandre Giroux         Jackson Houck            15     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Andrej Sekera            Alex Grant                                        35     1   2  2  
 2 Travis Dermott           Brendan Mikkelson                                 30     1   2  2  
 3 Christopher Tanev        Alex Biega                                        20     1   2  2  
 4 Adam Polasek             Brenden Dillon                                    15     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Roope Hintz              Benn Ferriero            Jackson Houck            60     1   2  2  
 2 Lukas Sutter             Brad Malone              Matt Leitner             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Andrej Sekera            Alex Grant                                        60     1   2  2  
 2 Travis Dermott           Brendan Mikkelson                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Roope Hintz              Jackson Houck            60     1   2  2  
 2 Lukas Sutter             Benn Ferriero            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrej Sekera            Alex Grant               60     1   2  2  
 2 Travis Dermott           Brendan Mikkelson        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Roope Hintz                                       60     1   2  2  
 2 Jackson Houck                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrej Sekera            Alex Grant               60     1   2  2  
 2 Travis Dermott           Brendan Mikkelson        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Roope Hintz              Jackson Houck            60     1   2  2  
 2 Lukas Sutter             Benn Ferriero            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrej Sekera            Alex Grant               60     1   2  2  
 2 Travis Dermott           Brendan Mikkelson        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Roope Hintz              Benn Ferriero            Jackson Houck            Andrej Sekera            Alex Grant               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Roope Hintz              Benn Ferriero            Jackson Houck            Andrej Sekera            Alex Grant               

<b>Goaltenders</b>
Starting : Scott Wedgewood          
Backup : Jeremy Smith             

<b>Extra Forwards</b>
Normal : Ryan Kuffner, Lucas Lessio, Andrew Fritsch - PP : Ryan Kuffner, Lucas Lessio - PK : Andrew Fritsch
<b>Extra Defensemen</b>
Normal : Gabriel Carlsson, Alexander Bonsaksen, Christopher Tanev - PP : Gabriel Carlsson - PK : Alexander Bonsaksen, Christopher Tanev
<b>Penalty Shots</b>
Roope Hintz, Jackson Houck, Lukas Sutter, Benn Ferriero, Brad Malone
<b>Custom OT Lines Forwards</b>
Roope Hintz, Jackson Houck, Lukas Sutter, Benn Ferriero, Brad Malone, Lucas Lessio, Matt Leitner, Alexandre Giroux, Ryan Kuffner, Andrew Fritsch
<b>Custom OT Lines Defensemen</b>
Andrej Sekera, Alex Grant, Travis Dermott, Brendan Mikkelson, Christopher Tanev

<b>Scratches</b>
Sam Kurker (Healthy), Axel Andersson (Healthy)</pre></div>
<h1 class="TeamLineFarm_BRI"><a id="BridgeportSoundTigers">Bridgeport Sound Tigers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#BridgeportSoundTigers">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#BridgeportSoundTigers">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#BridgeportSoundTigers">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#BridgeportSoundTigers">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#BridgeportSoundTigers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BridgeportSoundTigers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BridgeportSoundTigers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyson Baillie            Victor Olofsson          Luke Kunin               35     1   2  2  
 2 Jonathan Dahlen          Nikita Scherbak          Johan Sundstrom          25     1   2  2  
 3 Jordan Bellerive         Sean Malone              Joel Eriksson Ek         20     1   2  2  
 4 Dane Fox                 Kevin Klima              Johan Sundstrom          20     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Trevor Murphy            Noah Juulsen                                      33     1   2  2  
 2 Colton White             Alexandre Carrier                                 32     1   2  2  
 3 Jérémy Roy               Cale Makar                                        20     1   2  2  
 4 Noah Juulsen             Brenden Kichton                                   15     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Luke Kunin               Victor Olofsson          Tyson Baillie            60     1   2  2  
 2 Sean Malone              Nikita Scherbak          Joel Eriksson Ek         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexandre Carrier        Trevor Murphy                                     60     1   2  2  
 2 Colton White             Noah Juulsen                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyson Baillie            Joel Eriksson Ek         60     1   2  2  
 2 Victor Olofsson          Luke Kunin               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Juulsen             Alexandre Carrier        60     1   2  2  
 2 Colton White             Brenden Kichton          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joel Eriksson Ek                                  60     1   2  2  
 2 Sean Malone                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Juulsen             Brenden Kichton          60     1   2  2  
 2 Alexandre Carrier        Trevor Murphy            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Luke Kunin               Victor Olofsson          60     1   2  2  
 2 Tyson Baillie            Joel Eriksson Ek         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Juulsen             Alexandre Carrier        60     1   2  2  
 2 Trevor Murphy            Colton White             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Luke Kunin               Victor Olofsson          Tyson Baillie            Alexandre Carrier        Trevor Murphy            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Malone              Kevin Klima              Joel Eriksson Ek         Noah Juulsen             Brenden Kichton          

<b>Goaltenders</b>
Starting : Mike Smith               
Backup : Jake Paterson            
Third : Shamil Shmakov           

<b>Extra Forwards</b>
Normal : Jordan Bellerive, Joel Eriksson Ek, Tyson Baillie - PP : Jordan Bellerive, Tyson Baillie - PK : Tyson Baillie
<b>Extra Defensemen</b>
Normal : Trevor Murphy, Noah Juulsen, Alexandre Carrier - PP : Noah Juulsen - PK : Noah Juulsen, Alexandre Carrier
<b>Penalty Shots</b>
Sean Malone, Victor Olofsson, Tyson Baillie, Luke Kunin, Joel Eriksson Ek
<b>Custom OT Lines Forwards</b>
Victor Olofsson, Tyson Baillie, Luke Kunin, Joel Eriksson Ek, Nikita Scherbak, Kevin Klima, Sean Malone, Dane Fox, Johan Sundstrom, Jordan Bellerive
<b>Custom OT Lines Defensemen</b>
Trevor Murphy, Noah Juulsen, Alexandre Carrier, Colton White, Jérémy Roy

<b>Scratches</b>
Yannick Weber (Healthy), Kerby Rychel (Healthy), Julien Gauthier (Healthy), Kelly Klima (Healthy)</pre></div>
<h1 class="TeamLineFarm_CTW"><a id="ConnecticutWhale">Connecticut Whale</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#ConnecticutWhale">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#ConnecticutWhale">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#ConnecticutWhale">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#ConnecticutWhale">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#ConnecticutWhale">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ConnecticutWhale');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ConnecticutWhale" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyson Jost               Erik Haula               Robert Thomas            26     1   2  2  
 2 Christian Fischer        Ryan Donato              Denis Malgin             26     1   2  2  
 3 Chris Kreider            Cody Eakin               Denis Guryanov           26     1   2  2  
 4 Joseph Blandisi          J.T. Compher             Chris Kreider            22     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gustav Forsling          Ethan Bear                                        34     1   2  2  
 2 Brandon Carlo            Casey Nelson                                      33     1   2  2  
 3 Josh Mahura              Ivan Provorov                                     33     1   2  2  
 4 Brandon Carlo            Gustav Forsling                                   0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyson Jost               Erik Haula               Robert Thomas            60     1   2  2  
 2 Christian Fischer        Cody Eakin               Denis Malgin             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ivan Provorov            Ethan Bear                                        60     1   2  2  
 2 Brandon Carlo            Gustav Forsling                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Denis Malgin             Denis Guryanov           60     1   2  2  
 2 Chris Kreider            Erik Haula               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Forsling          Brandon Carlo            60     1   2  2  
 2 Ivan Provorov            Josh Mahura              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Denis Malgin                                      60     1   2  2  
 2 Denis Guryanov                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Forsling          Brandon Carlo            60     1   2  2  
 2 Ivan Provorov            Josh Mahura              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Kreider            Denis Guryanov           60     1   2  2  
 2 Denis Malgin             Erik Haula               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Mahura              Ethan Bear               60     1   2  2  
 2 Brandon Carlo            Ivan Provorov            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Kreider            Denis Malgin             Robert Thomas            Gustav Forsling          Ivan Provorov            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Kreider            Denis Malgin             Denis Guryanov           Gustav Forsling          Brandon Carlo            

<b>Goaltenders</b>
Starting : Michael DiPietro         
Backup : Anthony Stolarz          

<b>Extra Forwards</b>
Normal : Cody Eakin, Denis Guryanov, Chris Kreider - PP : Denis Guryanov, Erik Haula - PK : Tyson Jost
<b>Extra Defensemen</b>
Normal : Ethan Bear, Brandon Carlo, Gustav Forsling - PP : Gustav Forsling - PK : Ivan Provorov, Gustav Forsling
<b>Penalty Shots</b>
Denis Malgin, Denis Guryanov, Tyson Jost, Erik Haula, Chris Kreider
<b>Custom OT Lines Forwards</b>
Robert Thomas, Denis Guryanov, J.T. Compher, Erik Haula, Chris Kreider, Joseph Blandisi, Christian Fischer, Denis Malgin, Cody Eakin, Tyson Jost
<b>Custom OT Lines Defensemen</b>
Gustav Forsling, Ivan Provorov, Brandon Carlo, Ethan Bear, Josh Mahura

<b>Scratches</b>
Ziyat Paigin (Healthy), Henrik Borgstrom (Healthy), Trent Frederic (Healthy), Matej Tomek (Healthy)</pre></div>
<h1 class="TeamLineFarm_BNG"><a id="BinghamtonSenators">Binghamton Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#BinghamtonSenators">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#BinghamtonSenators">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#BinghamtonSenators">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#BinghamtonSenators">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#BinghamtonSenators">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BinghamtonSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BinghamtonSenators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor Rankin            Erik Foley               Jesse Ylonen             30     0   1  4  
 2 Max McCormick            Dany Heatley             Andre Petersson          29     1   2  2  
 3 Vadim Shipachev          Andrei Kostitsyn         Gustav Possler           25     1   2  2  
 4 Andrei Kostitsyn         Gustav Possler           Andre Petersson          16     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Julius Honka             Kale Clague                                       25     0   2  3  
 2 Filip Berglund           Sébastien Piché                                   25     1   2  2  
 3 Derek Joslin             Jeff Schultz                                      25     1   2  2  
 4 Kale Clague              Julius Honka                                      25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor Rankin            Andrei Kostitsyn         Erik Foley               60     1   2  2  
 2 Max McCormick            Dany Heatley             Gustav Possler           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Julius Honka             Kale Clague                                       60     1   2  2  
 2 Filip Berglund           Sébastien Piché                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor Rankin            Andrei Kostitsyn         60     1   2  2  
 2 Dany Heatley             Erik Foley               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Julius Honka             Derek Joslin             60     1   2  2  
 2 Jeff Schultz             Sébastien Piché          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dany Heatley                                      60     1   2  2  
 2 Andrei Kostitsyn                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Julius Honka             Derek Joslin             60     1   2  2  
 2 Jeff Schultz             Sébastien Piché          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Max McCormick            Andrei Kostitsyn         60     1   2  2  
 2 Dany Heatley             Erik Foley               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Julius Honka             Derek Joslin             60     1   2  2  
 2 Jeff Schultz             Sébastien Piché          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor Rankin            Andrei Kostitsyn         Max McCormick            Julius Honka             Kale Clague              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor Rankin            Andrei Kostitsyn         Max McCormick            Julius Honka             Derek Joslin             

<b>Goaltenders</b>
Starting : Benjamin Conz            
Backup : Igor Bobkov              
Third : Stephon Williams         

<b>Extra Forwards</b>
Normal : Marcus Sorensen, Gustav Possler, Vadim Shipachev - PP : Marcus Sorensen, Gustav Possler - PK : Vadim Shipachev
<b>Extra Defensemen</b>
Normal : Julius Honka, Filip Berglund, Kale Clague - PP : Derek Joslin - PK : Filip Berglund, Kale Clague
<b>Penalty Shots</b>
Gustav Possler, Andrei Kostitsyn, Dany Heatley, Erik Foley, Connor Rankin
<b>Custom OT Lines Forwards</b>
Andre Petersson, Andrei Kostitsyn, Dany Heatley, Erik Foley, Connor Rankin, Max McCormick, Jesse Ylonen, Gustav Possler, Vadim Shipachev, Marcus Sorensen
<b>Custom OT Lines Defensemen</b>
Julius Honka, Derek Joslin, Jeff Schultz, Sébastien Piché, Kale Clague

<b>Scratches</b>
Ales Music (Healthy), Alexis Pepin (Healthy), Denis Godla (Healthy)</pre></div>
<h1 class="TeamLineFarm_ADK"><a id="AdirondackPhantoms">Adirondack Phantoms</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#AdirondackPhantoms">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#AdirondackPhantoms">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#AdirondackPhantoms">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#AdirondackPhantoms">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#AdirondackPhantoms">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AdirondackPhantoms');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AdirondackPhantoms" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Stephane Da Costa        Fredrik Karlstrom        Craig Smith              25     1   2  2  
 2 Gabriel Dumont           Alexandre Mallet         Michael Parks            25     1   2  2  
 3 Alexis Loiseau           Jacob Peterson           Spencer Machacek         25     1   2  2  
 4 Alexis Loiseau           Stephane Da Costa        Sebastian Repo           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney                                    25     1   2  2  
 2 Greg Pateryn             Tyler Lewington                                   25     1   2  2  
 3 Randy Gazzola            Daniel Brickley                                   25     1   2  2  
 4 Randy Gazzola            Alex Plante                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Stephane Da Costa        Fredrik Karlstrom        Craig Smith              60     1   2  2  
 2 Gabriel Dumont           Alexandre Mallet         Michael Parks            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney                                    60     1   2  2  
 2 Greg Pateryn             Tyler Lewington                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Stephane Da Costa        Craig Smith              60     1   2  2  
 2 Gabriel Dumont           Michael Parks            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney           60     1   2  2  
 2 Greg Pateryn             Tyler Lewington          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Stephane Da Costa                                 60     1   2  2  
 2 Craig Smith                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney           60     1   2  2  
 2 Greg Pateryn             Tyler Lewington          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Stephane Da Costa        Craig Smith              60     1   2  2  
 2 Gabriel Dumont           Michael Parks            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney           60     1   2  2  
 2 Greg Pateryn             Tyler Lewington          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Stephane Da Costa        Fredrik Karlstrom        Craig Smith              Alex Plante              Taylor Chorney           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Stephane Da Costa        Fredrik Karlstrom        Craig Smith              Alex Plante              Taylor Chorney           

<b>Goaltenders</b>
Starting : Jakub Kovar              
Backup : Anthony Brodeur          

<b>Extra Forwards</b>
Normal : Stephane Da Costa, Spencer Machacek, Alexis Loiseau - PP : Stephane Da Costa, Spencer Machacek - PK : Alexis Loiseau
<b>Extra Defensemen</b>
Normal : Chris Martenet, Alex Plante, Daniel Brickley - PP : Chris Martenet - PK : Alex Plante, Daniel Brickley
<b>Penalty Shots</b>
Stephane Da Costa, Craig Smith, Gabriel Dumont, Michael Parks, Alexis Loiseau
<b>Custom OT Lines Forwards</b>
Stephane Da Costa, Craig Smith, Gabriel Dumont, Michael Parks, Jacob Peterson, Spencer Machacek, Alexis Loiseau, Fredrik Karlstrom, Sebastian Repo, Alexandre Mallet
<b>Custom OT Lines Defensemen</b>
Alex Plante, Taylor Chorney, Greg Pateryn, Tyler Lewington, Daniel Brickley

<b>Scratches</b>
Mike Winther (Healthy), Teemu Eronen (Sprained Right Ankle Injury), Markus Niemelainen (Healthy), Nikita Popugaev (Healthy), Nick Suzuki (Healthy)
Keegan Kolesar (Healthy)</pre></div>
<h1 class="TeamLineFarm_WBS"><a id="Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#Wilkes-Barre/ScrantonPenguins">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#Wilkes-Barre/ScrantonPenguins">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#Wilkes-Barre/ScrantonPenguins">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#Wilkes-Barre/ScrantonPenguins">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#Wilkes-Barre/ScrantonPenguins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wilkes-Barre/ScrantonPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wilkes-Barre/ScrantonPenguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Shannon             Jan Kovar                Ales Hemsky              38     0   0  5  
 2 Brad Richardson          Colin Greening           Mike Fisher              37     0   0  5  
 3 Maxim Lapierre           Milan Michalek           Ben Maxwell              24     0   2  3  
 4 Mike Fisher              Maxim Lapierre           David Jones              1      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Connauton          Kevan Miller                                      40     0   2  3  
 2 Nick Petrecki            Niklas Grossman                                   30     0   2  3  
 3 Sebastian Owuya          Marc Methot                                       20     0   3  2  
 4 Anton Babchuk            Nick Petrecki                                     10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Shannon             Colin Greening           Ales Hemsky              60     0   0  5  
 2 Maxim Lapierre           Milan Michalek           Ben Maxwell              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Connauton          Niklas Grossman                                   60     0   0  5  
 2 Kevan Miller             Anton Babchuk                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brad Richardson          Ales Hemsky              60     1   3  1  
 2 Mike Fisher              Maxim Lapierre           40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Babchuk            Kevan Miller             60     1   4  0  
 2 Sebastian Owuya          Niklas Grossman          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brad Richardson                                   60     1   2  2  
 2 Ales Hemsky                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevan Miller             Anton Babchuk            60     1   2  2  
 2 Niklas Grossman          Sebastian Owuya          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jan Kovar                Brad Richardson          60     1   2  2  
 2 Mike Fisher              David Jones              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Connauton          Anton Babchuk            60     1   2  2  
 2 Niklas Grossman          Ales Hemsky              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Shannon             Jan Kovar                Ales Hemsky              Kevan Miller             Kevin Connauton          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Richardson          Maxim Lapierre           David Jones              Niklas Grossman          Kevan Miller             

<b>Goaltenders</b>
Starting : Patrick Killeen          
Backup : Pascal Leclaire          

<b>Extra Forwards</b>
Normal : Jan Kovar, Maxim Lapierre, Ales Hemsky - PP : Brad Richardson, Ales Hemsky - PK : Brad Richardson
<b>Extra Defensemen</b>
Normal : Niklas Grossman, Kevin Connauton, Anton Babchuk - PP : Niklas Grossman - PK : Kevin Connauton, Anton Babchuk
<b>Penalty Shots</b>
Mike Fisher, Jan Kovar, Maxim Lapierre, Brad Richardson, Ales Hemsky
<b>Custom OT Lines Forwards</b>
Colin Greening, Jan Kovar, Milan Michalek, Maxim Lapierre, Ales Hemsky, Mike Fisher, Ben Maxwell, Brad Richardson, Ryan Shannon, David Jones
<b>Custom OT Lines Defensemen</b>
Kevin Connauton, Anton Babchuk, Marc Methot, Kevan Miller, Niklas Grossman

<b>Scratches</b>
Brett Sutter (Healthy), Erik Condra (Healthy), Chad Ruhwedel (Healthy), Jason Akeson (Healthy), Reid McNeill (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="ChicoutimiSaguenéens">Chicoutimi Saguenéens</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#ChicoutimiSaguenéens">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#ChicoutimiSaguenéens">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#ChicoutimiSaguenéens">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#ChicoutimiSaguenéens">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#ChicoutimiSaguenéens">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicoutimiSaguenéens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicoutimiSaguenéens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Tyler Motte              Philip Lane              25     1   2  2  
 2 Jack Evans               Maxime Comtois           Brett MacLean            25     1   2  2  
 3 Jack Nevins              Isaac Ratcliffe          Vitali Abramov           25     1   2  2  
 4 Brad Morrison            Dmitry Sokolov           Unknown Player           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Barker               Brandon Manning                                   25     1   2  2  
 2 Brett Lernout            Maxime Lajoie                                     25     1   2  2  
 3 Frédéric Allard          Mikael Wikstrand                                  25     1   2  2  
 4 Hunter Drew              Sean Durzi                                        25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Tyler Motte              Philip Lane              60     1   2  2  
 2 Jack Evans               Maxime Comtois           Brett MacLean            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Barker               Brandon Manning                                   60     1   2  2  
 2 Brett Lernout            Maxime Lajoie                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Tyler Motte              60     1   2  2  
 2 Philip Lane              Jack Evans               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Barker               Brandon Manning          60     1   2  2  
 2 Brett Lernout            Maxime Lajoie            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Tyler Motte                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Barker               Brandon Manning          60     1   2  2  
 2 Brett Lernout            Maxime Lajoie            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Tyler Motte              60     1   2  2  
 2 Philip Lane              Jack Evans               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Barker               Brandon Manning          60     1   2  2  
 2 Brett Lernout            Maxime Lajoie            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Tyler Motte              Philip Lane              Cam Barker               Brandon Manning          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Tyler Motte              Philip Lane              Cam Barker               Brandon Manning          

<b>Goaltenders</b>
Starting : Ivan Nalimov             
Backup : Mason McDonald           

<b>Extra Forwards</b>
Normal : Nate Schnarr, Isaac Ratcliffe, Jack Nevins - PP : Nate Schnarr, Isaac Ratcliffe - PK : Jack Nevins
<b>Extra Defensemen</b>
Normal : Frédéric Allard, Mikael Wikstrand, Hunter Drew - PP : Frédéric Allard - PK : Mikael Wikstrand, Hunter Drew
<b>Penalty Shots</b>
Unknown Player, Tyler Motte, Philip Lane, Jack Evans, Maxime Comtois
<b>Custom OT Lines Forwards</b>
Unknown Player, Tyler Motte, Philip Lane, Jack Evans, Maxime Comtois, Isaac Ratcliffe, Brett MacLean, Jack Nevins, Brad Morrison, Nate Schnarr
<b>Custom OT Lines Defensemen</b>
Cam Barker, Brandon Manning, Brett Lernout, Maxime Lajoie, Frédéric Allard

<b>Scratches</b>
Scott Walford (Strained Right Elbow Injury), Ben Hanowski (Healthy), Alex Tuch (Strained Right Elbow Injury), Gabriel Gagné (Strained Left Knee Injury), Shane Eiserman (Healthy)
Ilya Bryzgalov (Healthy)</pre></div>
<h1 class="TeamLineFarm_RNO"><a id="Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#Rouyn-NorandaHuskies">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#Rouyn-NorandaHuskies">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#Rouyn-NorandaHuskies">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#Rouyn-NorandaHuskies">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#Rouyn-NorandaHuskies">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rouyn-NorandaHuskies');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rouyn-NorandaHuskies" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Julien Nantel            A.J. Greer               Artturi Lehkonen         25     1   2  2  
 2 Francis Perron           Warren Foegele           Martins Dzierkals        25     1   2  2  
 3 Peter Abbandonato        Alexandre Fortin         Antoine Waked            25     1   2  2  
 4 Manuel Wiederer          Rafaël Harvey-Pinard     Vincent Marleau          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Samuel Morin             Philippe Myers                                    25     1   2  2  
 2 Jérémy Lauzon            Nikolas Brouillard                                25     1   2  2  
 3 Bruno-Carl Denis         Jacob Neveu                                       25     1   2  2  
 4 Samuel Morin             Jérémy Lauzon                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Julien Nantel            A.J. Greer               Artturi Lehkonen         60     1   2  2  
 2 Francis Perron           Warren Foegele           Martins Dzierkals        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Samuel Morin             Jérémy Lauzon                                     60     1   2  2  
 2 Philippe Myers           Jacob Neveu                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 A.J. Greer               Artturi Lehkonen         60     1   2  2  
 2 Julien Nantel            Francis Perron           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Morin             Jérémy Lauzon            60     1   2  2  
 2 Philippe Myers           Jacob Neveu              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 A.J. Greer                                        60     1   2  2  
 2 Artturi Lehkonen                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Morin             Jérémy Lauzon            60     1   2  2  
 2 Philippe Myers           Jacob Neveu              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 A.J. Greer               Artturi Lehkonen         60     1   2  2  
 2 Julien Nantel            Francis Perron           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Morin             Jérémy Lauzon            60     1   2  2  
 2 Philippe Myers           Jacob Neveu              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Julien Nantel            A.J. Greer               Artturi Lehkonen         Samuel Morin             Philippe Myers           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Julien Nantel            A.J. Greer               Artturi Lehkonen         Samuel Morin             Jérémy Lauzon            

<b>Goaltenders</b>
Starting : Alex Nedeljkovic         
Backup : Samuel Harvey            

<b>Extra Forwards</b>
Normal : Joel Teasdale, Félix Bibeau, Alexandre Fortin - PP : Joel Teasdale, Félix Bibeau - PK : Alexandre Fortin
<b>Extra Defensemen</b>
Normal : Bruno-Carl Denis, Philippe Myers, Jacob Neveu - PP : Bruno-Carl Denis - PK : Philippe Myers, Jacob Neveu
<b>Penalty Shots</b>
A.J. Greer, Artturi Lehkonen, Julien Nantel, Francis Perron, Warren Foegele
<b>Custom OT Lines Forwards</b>
A.J. Greer, Artturi Lehkonen, Julien Nantel, Francis Perron, Warren Foegele, Martins Dzierkals, Alexandre Fortin, Antoine Waked, Rafaël Harvey-Pinard, Joel Teasdale
<b>Custom OT Lines Defensemen</b>
Samuel Morin, Jérémy Lauzon, Philippe Myers, Jacob Neveu, Bruno-Carl Denis

<b>Scratches</b>
Liam O'Brien (Healthy), Jean-Sébastien Dea (Healthy), Mathieu Brisebois (Healthy), Zachary Lauzon (Healthy), Alexandre Bélanger (Healthy)</pre></div>
<h1 class="TeamLineFarm_MIA"><a id="MercerIslandArchangels">Mercer Island Archangels</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Saints Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#SeattleSaints">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#MercerIslandArchangels">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#MercerIslandArchangels">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#MercerIslandArchangels">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#MercerIslandArchangels">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#MercerIslandArchangels">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MercerIslandArchangels');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MercerIslandArchangels" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathieu Perreault        Wojtek Wolski            Kirill Petrov            25     1   2  2  
 2 Philip McRae             Michael Raffl            Brandon Kozun            25     1   2  2  
 3 Filip Chlapik            Matteson Iacopelli       Alex Chiasson            25     1   2  2  
 4 Simon Stransky           Tyler Benson             Zachary Senyshyn         25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Xavier Ouellet           Dalton Prout                                      25     1   2  2  
 2 Petteri Lindbohm         Jordan Schmaltz                                   25     1   2  2  
 3 Keegan Kanzig            Connor Clifton                                    25     1   2  2  
 4 Jordan Schneider         Xavier Ouellet                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathieu Perreault        Wojtek Wolski            Kirill Petrov            60     1   2  2  
 2 Philip McRae             Michael Raffl            Brandon Kozun            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Xavier Ouellet           Dalton Prout                                      60     1   2  2  
 2 Petteri Lindbohm         Jordan Schmaltz                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Wojtek Wolski            Mathieu Perreault        60     1   2  2  
 2 Kirill Petrov            Brandon Kozun            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Xavier Ouellet           Dalton Prout             60     1   2  2  
 2 Petteri Lindbohm         Jordan Schmaltz          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Wojtek Wolski                                     60     1   2  2  
 2 Mathieu Perreault                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Xavier Ouellet           Dalton Prout             60     1   2  2  
 2 Petteri Lindbohm         Jordan Schmaltz          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Wojtek Wolski            Mathieu Perreault        60     1   2  2  
 2 Kirill Petrov            Brandon Kozun            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Xavier Ouellet           Dalton Prout             60     1   2  2  
 2 Petteri Lindbohm         Jordan Schmaltz          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mathieu Perreault        Wojtek Wolski            Kirill Petrov            Xavier Ouellet           Dalton Prout             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mathieu Perreault        Wojtek Wolski            Kirill Petrov            Xavier Ouellet           Dalton Prout             

<b>Goaltenders</b>
Starting : Chet Pickard             
Backup : Veini Vehvilainen        
Third : Callum Booth             

<b>Extra Forwards</b>
Normal : Alex Chiasson, Zachary Senyshyn, Filip Chlapik - PP : Alex Chiasson, Zachary Senyshyn - PK : Filip Chlapik
<b>Extra Defensemen</b>
Normal : Keegan Kanzig, Connor Clifton, Jordan Schneider - PP : Keegan Kanzig - PK : Connor Clifton, Jordan Schneider
<b>Penalty Shots</b>
Wojtek Wolski, Mathieu Perreault, Kirill Petrov, Brandon Kozun, Michael Raffl
<b>Custom OT Lines Forwards</b>
Wojtek Wolski, Mathieu Perreault, Kirill Petrov, Brandon Kozun, Michael Raffl, Philip McRae, Alex Chiasson, Zachary Senyshyn, Filip Chlapik, Matteson Iacopelli
<b>Custom OT Lines Defensemen</b>
Xavier Ouellet, Dalton Prout, Petteri Lindbohm, Jordan Schmaltz, Keegan Kanzig

<b>Scratches</b>
Alexander Steen (Healthy), Grant Clitsome (Healthy), Jamie Doornbosch (Healthy), Nicolas Deslauriers (Healthy)</pre></div>
<h1 class="TeamLineFarm_PEO"><a id="PeoriaRivermen">Peoria Rivermen</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#PeoriaRivermen">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#PeoriaRivermen">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#PeoriaRivermen">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#PeoriaRivermen">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#PeoriaRivermen">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PeoriaRivermen');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PeoriaRivermen" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Maxwell Reinhart         David Booth              Liam Reddox              29     1   2  2  
 2 David Desharnais         Mattias Ritola           Borna Rendulic           26     1   2  2  
 3 Peter Holland            Jake Chelios             Dustin Boyd              25     1   2  2  
 4 Chase De Leo             Maxwell Reinhart         David Desharnais         20     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Bernhard Ebner           Andy Welinski                                     35     1   2  2  
 2 Johnny Boychuk           Raphael Diaz                                      30     1   2  2  
 3 Victor Antipin           Jordie Benn                                       25     1   2  2  
 4 Victor Antipin           Patrick McNally                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Maxwell Reinhart         David Booth              Liam Reddox              60     1   2  2  
 2 David Desharnais         Mattias Ritola           Borna Rendulic           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Antipin           Bernhard Ebner                                    60     1   2  2  
 2 Johnny Boychuk           Raphael Diaz                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Maxwell Reinhart         David Desharnais         60     1   2  2  
 2 David Booth              Peter Holland            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Antipin           Andy Welinski            60     1   2  2  
 2 Johnny Boychuk           Raphael Diaz             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Maxwell Reinhart                                  60     1   2  2  
 2 David Desharnais                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Antipin           Bernhard Ebner           60     1   2  2  
 2 Johnny Boychuk           Raphael Diaz             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Maxwell Reinhart         David Desharnais         60     1   2  2  
 2 David Booth              Peter Holland            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Bernhard Ebner           Victor Antipin           60     1   2  2  
 2 Johnny Boychuk           Raphael Diaz             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Maxwell Reinhart         David Booth              Liam Reddox              Victor Antipin           Andy Welinski            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Maxwell Reinhart         Jake Chelios             Liam Reddox              Johnny Boychuk           Raphael Diaz             

<b>Goaltenders</b>
Starting : Sami Aittokallio         
Backup : Andrey Makarov           

<b>Extra Forwards</b>
Normal : David Desharnais, Maxwell Reinhart, Chase De Leo - PP : Alex Dostie, Jake Chelios - PK : Chase De Leo
<b>Extra Defensemen</b>
Normal : Bernhard Ebner, Jordie Benn, Andy Welinski - PP : Bernhard Ebner - PK : Jordie Benn, Andy Welinski
<b>Penalty Shots</b>
Maxwell Reinhart, David Desharnais, David Booth, Peter Holland, Liam Reddox
<b>Custom OT Lines Forwards</b>
Maxwell Reinhart, David Desharnais, David Booth, Peter Holland, Liam Reddox, Mattias Ritola, Borna Rendulic, Jake Chelios, Chase De Leo, Dustin Boyd
<b>Custom OT Lines Defensemen</b>
Jordie Benn, Andy Welinski, Johnny Boychuk, Raphael Diaz, Bernhard Ebner

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_NOR"><a id="NorfolkAdmirals">Norfolk Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#NorfolkAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#NorfolkAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#NorfolkAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#NorfolkAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#NorfolkAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NorfolkAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NorfolkAdmirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mads Eller               Daniel Carr              Luke Witkowski           25     1   2  2  
 2 Adam Burish              Joey Anderson            Pavel Padakin            25     1   2  2  
 3 Lucas Wallmark           Austin Wagner            Nicolas Aubé-Kubel       25     1   2  2  
 4 Brian Flynn              Matt Frattin             Dmytro Timashov          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jakob Chychrun           Radko Gudas                                       25     1   2  2  
 2 Brandon Burlon           Guillaume Brisebois                               25     1   2  2  
 3 Matt Frattin             Brian Flynn                                       25     1   2  2  
 4 Jakob Chychrun           Radko Gudas                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mads Eller               Daniel Carr              Luke Witkowski           60     1   2  2  
 2 Adam Burish              Joey Anderson            Pavel Padakin            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jakob Chychrun           Radko Gudas                                       60     1   2  2  
 2 Brandon Burlon           Guillaume Brisebois                               40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mads Eller               Daniel Carr              60     1   2  2  
 2 Adam Burish              Joey Anderson            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakob Chychrun           Radko Gudas              60     1   2  2  
 2 Brandon Burlon           Luke Witkowski           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mads Eller                                        60     1   2  2  
 2 Daniel Carr                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakob Chychrun           Radko Gudas              60     1   2  2  
 2 Brandon Burlon           Luke Witkowski           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mads Eller               Daniel Carr              60     1   2  2  
 2 Adam Burish              Joey Anderson            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakob Chychrun           Radko Gudas              60     1   2  2  
 2 Brandon Burlon           Luke Witkowski           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mads Eller               Daniel Carr              Luke Witkowski           Jakob Chychrun           Radko Gudas              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mads Eller               Daniel Carr              Luke Witkowski           Jakob Chychrun           Radko Gudas              

<b>Goaltenders</b>
Starting : Adam Wilcox              
Backup : Kasper Krog              

<b>Extra Forwards</b>
Normal : Ludwig Blomstrand, Stefan Chaput, Austin Wagner - PP : Ludwig Blomstrand, Stefan Chaput - PK : Austin Wagner
<b>Extra Defensemen</b>
Normal : Guillaume Brisebois, Brandon Burlon, Luke Witkowski - PP : Guillaume Brisebois - PK : Brandon Burlon, Luke Witkowski
<b>Penalty Shots</b>
Luke Witkowski, Mads Eller, Daniel Carr, Adam Burish, Joey Anderson
<b>Custom OT Lines Forwards</b>
Luke Witkowski, Mads Eller, Daniel Carr, Adam Burish, Joey Anderson, Pavel Padakin, Austin Wagner, Nicolas Aubé-Kubel, Matt Frattin, Lucas Wallmark
<b>Custom OT Lines Defensemen</b>
Jakob Chychrun, Radko Gudas, Brandon Burlon, Luke Witkowski, Guillaume Brisebois

<b>Scratches</b>
Mike Vecchione (Healthy), Adam Janosik (Facial Surgery Injury)</pre></div>
<h1 class="TeamLineFarm_ROB"><a id="RobervalDwarfs">Roberval Dwarfs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#RobervalDwarfs">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#RobervalDwarfs">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#RobervalDwarfs">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#RobervalDwarfs">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#RobervalDwarfs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RobervalDwarfs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RobervalDwarfs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ville Leino              Stanislav Galiev         Trevor Lewis             25     1   2  2  
 2 Aleksi Saarela           Ville Leskinen           Alexander Barabanov      25     1   2  2  
 3 Andrew Crescenzi         Petrus Palmu             Josh Leivo               25     1   2  2  
 4 Garrett Meurs            Stanislav Galiev         Lennart Petrell          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Joni Pitkanen            Jesse Blacker                                     25     1   2  2  
 2 Ilya Lyubushkin          Eetu Sopanen                                      25     1   2  2  
 3 James Melindy            Robin Salo                                        25     1   2  2  
 4 Joni Pitkanen            Jesse Blacker                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ville Leino              Stanislav Galiev         Josh Leivo               60     1   2  2  
 2 Aleksi Saarela           Ville Leskinen           Alexander Barabanov      40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Joni Pitkanen            Jesse Blacker                                     60     1   2  2  
 2 Robin Salo               Eetu Sopanen                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Stanislav Galiev         Ville Leskinen           60     1   2  2  
 2 Ville Leino              Alexander Barabanov      40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joni Pitkanen            Jesse Blacker            60     1   2  2  
 2 Robin Salo               Eetu Sopanen             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Stanislav Galiev                                  60     1   2  2  
 2 Ville Leino                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joni Pitkanen            Jesse Blacker            60     1   2  2  
 2 Ilya Lyubushkin          Eetu Sopanen             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Stanislav Galiev         Andrew Crescenzi         60     1   2  2  
 2 Ville Leino              Alexander Barabanov      40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joni Pitkanen            Jesse Blacker            60     1   2  2  
 2 James Melindy            Eetu Sopanen             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ville Leino              Stanislav Galiev         Alexander Barabanov      Joni Pitkanen            Jesse Blacker            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ville Leino              Stanislav Galiev         Alexander Barabanov      Joni Pitkanen            Jesse Blacker            

<b>Goaltenders</b>
Starting : Harri Sateri             
Backup : Garret Sparks            

<b>Extra Forwards</b>
Normal : Josh Leivo, Petrus Palmu, Andrew Crescenzi - PP : Josh Leivo, Petrus Palmu - PK : Andrew Crescenzi
<b>Extra Defensemen</b>
Normal : Joni Pitkanen, Robin Salo, Jesse Blacker - PP : Jesse Blacker - PK : Robin Salo, Joni Pitkanen
<b>Penalty Shots</b>
Stanislav Galiev, Petrus Palmu, Ville Leino, Alexander Barabanov, Ville Leskinen
<b>Custom OT Lines Forwards</b>
Stanislav Galiev, Trevor Lewis, Ville Leino, Alexander Barabanov, Ville Leskinen, Aleksi Saarela, Josh Leivo, Petrus Palmu, Andrew Crescenzi, Garrett Meurs
<b>Custom OT Lines Defensemen</b>
Joni Pitkanen, Jesse Blacker, James Melindy, Eetu Sopanen, Robin Salo

<b>Scratches</b>
Nikita Jevpalovs (Healthy), Erik Gustafsson (Healthy), Justin Kirkland (Healthy), Jhonas Enroth (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="ChicagoWolves">Chicago Wolves</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#ChicagoWolves">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#ChicagoWolves">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#ChicagoWolves">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#ChicagoWolves">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#ChicagoWolves">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoWolves');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoWolves" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alex Friesen             Alexander Killorn        Mats Zuccarello          25     1   2  2  
 2 Andreas Martinsen        Carl Hagelin             Kellan Tochkin           25     1   2  2  
 3 Connor Crisp             Petr Straka              Anton Rodin              25     1   2  2  
 4 Tyler Soy                Justin Shugg             Bracken Kearns           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tom Gilbert              Erik Cernak                                       25     1   2  2  
 2 Korbinian Holzer         Trevor Carrick                                    25     1   2  2  
 3 Bobby Sanguinetti        Alex Peters                                       25     1   2  2  
 4 Matthew Cairns           Matic Podlipnik                                   25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alex Friesen             Alexander Killorn        Mats Zuccarello          60     1   2  2  
 2 Andreas Martinsen        Carl Hagelin             Kellan Tochkin           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tom Gilbert              Erik Cernak                                       60     1   2  2  
 2 Korbinian Holzer         Trevor Carrick                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mats Zuccarello          Alexander Killorn        60     1   2  2  
 2 Carl Hagelin             Alex Friesen             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tom Gilbert              Erik Cernak              60     1   2  2  
 2 Korbinian Holzer         Trevor Carrick           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mats Zuccarello                                   60     1   2  2  
 2 Alexander Killorn                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tom Gilbert              Erik Cernak              60     1   2  2  
 2 Korbinian Holzer         Trevor Carrick           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mats Zuccarello          Alexander Killorn        60     1   2  2  
 2 Carl Hagelin             Alex Friesen             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tom Gilbert              Erik Cernak              60     1   2  2  
 2 Korbinian Holzer         Trevor Carrick           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alex Friesen             Alexander Killorn        Mats Zuccarello          Tom Gilbert              Erik Cernak              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alex Friesen             Alexander Killorn        Mats Zuccarello          Tom Gilbert              Erik Cernak              

<b>Goaltenders</b>
Starting : Ken Appleby              
Backup : Joe Cannata              

<b>Extra Forwards</b>
Normal : Petr Straka, Anton Rodin, Justin Shugg - PP : Petr Straka, Anton Rodin - PK : Justin Shugg
<b>Extra Defensemen</b>
Normal : Bobby Sanguinetti, Alex Peters, Matthew Cairns - PP : Bobby Sanguinetti - PK : Alex Peters, Matthew Cairns
<b>Penalty Shots</b>
Mats Zuccarello, Alexander Killorn, Carl Hagelin, Alex Friesen, Kellan Tochkin
<b>Custom OT Lines Forwards</b>
Mats Zuccarello, Alexander Killorn, Carl Hagelin, Alex Friesen, Kellan Tochkin, Petr Straka, Anton Rodin, Andreas Martinsen, Justin Shugg, Connor Crisp
<b>Custom OT Lines Defensemen</b>
Tom Gilbert, Erik Cernak, Korbinian Holzer, Trevor Carrick, Bobby Sanguinetti

<b>Scratches</b>
Jared Spurgeon (Healthy), Nathan Gerbe (Healthy), Eddie Lack (Healthy)</pre></div>
<h1 class="TeamLineFarm_PAR"><a id="ParadiseDarkAngels">Paradise Dark Angels</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#ParadiseDarkAngels">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#ParadiseDarkAngels">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#ParadiseDarkAngels">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#ParadiseDarkAngels">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#ParadiseDarkAngels">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ParadiseDarkAngels');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ParadiseDarkAngels" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Adam Gaudette            Brett Howden             Cody Glass               40     0   2  3  
 2 Lane Pederson            Cory Conacher            Nathan Bastian           30     0   2  3  
 3 Connor Hurley            Dryden Hunt              Michael Mersch           20     0   2  3  
 4 Riley Nash               David Griger             Yohann Auvitu            10     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Gravel             Dillon Heatherington                              40     0   3  2  
 2 Dennis Cholowski         Gregory Beron                                     30     0   3  2  
 3 Chaz Reddekopp           Brian Lee                                         20     0   3  2  
 4 Kevin Gravel             Dillon Heatherington                              10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Adam Gaudette            Brett Howden             Cody Glass               60     0   0  5  
 2 Lane Pederson            Michael Mersch           Nathan Bastian           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Gravel             Brian Lee                                         60     0   1  4  
 2 Dennis Cholowski         Dillon Heatherington                              40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Riley Nash               Yohann Auvitu            60     0   5  0  
 2 Adam Gaudette            Gregory Beron            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Brian Lee                60     0   5  0  
 2 Braydyn Chizen           Dillon Heatherington     40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Adam Gaudette                                     60     0   5  0  
 2 Riley Nash                                        40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Brian Lee                60     0   5  0  
 2 Braydyn Chizen           Dillon Heatherington     40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Adam Gaudette            Cody Glass               60     0   2  3  
 2 Brett Howden             Nathan Bastian           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Brian Lee                60     0   2  3  
 2 Dennis Cholowski         Dillon Heatherington     40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Adam Gaudette            Brett Howden             Cody Glass               Brian Lee                Dillon Heatherington     

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Adam Gaudette            Yohann Auvitu            Gregory Beron            Kevin Gravel             Dillon Heatherington     

<b>Goaltenders</b>
Starting : Kyle Keyser              
Backup : Matthew Villalta         

<b>Extra Forwards</b>
Normal : Adam Gaudette, Cody Glass, Brett Howden - PP : Adam Gaudette, Cody Glass - PK : Adam Gaudette
<b>Extra Defensemen</b>
Normal : Kevin Gravel, Dillon Heatherington, Gregory Beron - PP : Dillon Heatherington - PK : Dillon Heatherington, Kevin Gravel
<b>Penalty Shots</b>
Adam Gaudette, Michael Mersch, Cody Glass, Brett Howden, Lane Pederson
<b>Custom OT Lines Forwards</b>
Cody Glass, Brett Howden, Nathan Bastian, Michael Mersch, Lane Pederson, Connor Hurley, Adam Gaudette, Gregory Beron, David Griger, Riley Nash
<b>Custom OT Lines Defensemen</b>
Dillon Heatherington, Dennis Cholowski, Gregory Beron, Kevin Gravel, Brian Lee

<b>Scratches</b>
Justin Bailey (Broken Bone (Right Ankle) Injury), Lukas Bengtsson (Bruised Right Shoulder Injury), Vladimir Sobotka (Healthy), Matt Schmalz (Healthy), Lawrence Pilut (Healthy)
Matthew Bradley (Healthy)</pre></div>
<h1 class="TeamLineFarm_LAN"><a id="LandshutCannibals">Landshut Cannibals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#LandshutCannibals">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#LandshutCannibals">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#LandshutCannibals">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#LandshutCannibals">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#LandshutCannibals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LandshutCannibals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LandshutCannibals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dominik Kahun            Vladislav Kamenev        Mathias From             35     0   0  5  
 2 German Rubtsov           Andrew Mangiapane        Daniel Bernhardt         30     0   1  4  
 3 Dominik Simon            Nick Ritchie             John Hayden              22     1   1  3  
 4 Hudson Elynuik           Dominik Kahun            Nikolai Kovalenko        13     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Yegor Rykov              Anthony DeAngelo                                  25     1   2  2  
 2 Kyle Capobianco          Nicolas Hague                                     25     1   2  2  
 3 Mitchell Vande Sompel    Johnathan MacLeod                                 25     1   2  2  
 4 Anthony DeAngelo         Marcus Pettersson                                 25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Hayden              Vladislav Kamenev        Mathias From             60     0   0  5  
 2 Andrew Mangiapane        Nick Ritchie             Daniel Bernhardt         40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Anthony DeAngelo         Nicolas Hague                                     60     0   1  4  
 2 Yegor Rykov              Kyle Capobianco                                   40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 John Hayden              Daniel Bernhardt         60     1   2  2  
 2 Hudson Elynuik           Nick Ritchie             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nicolas Hague            Yegor Rykov              60     1   2  2  
 2 Mitchell Vande Sompel    Anthony DeAngelo         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Vladislav Kamenev                                 60     1   3  1  
 2 John Hayden                                       40     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Yegor Rykov              Anthony DeAngelo         60     1   3  1  
 2 Nicolas Hague            Mitchell Vande Sompel    40     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Daniel Bernhardt         Vladislav Kamenev        60     1   2  2  
 2 German Rubtsov           Mathias From             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Yegor Rykov              Anthony DeAngelo         60     1   2  2  
 2 Mitchell Vande Sompel    Nicolas Hague            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vladislav Kamenev        Daniel Bernhardt         Mathias From             Anthony DeAngelo         Mitchell Vande Sompel    

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dominik Simon            Nick Ritchie             John Hayden              Yegor Rykov              Nicolas Hague            

<b>Goaltenders</b>
Starting : Juuse Saros              
Backup : Danny aus den Birken     
Third : Hannibal Weitzmann       

<b>Extra Forwards</b>
Normal : Dominik Kahun, German Rubtsov, John Hayden - PP : Dominik Kahun, Andrew Mangiapane - PK : Mathias From
<b>Extra Defensemen</b>
Normal : Nicolas Hague, Anthony DeAngelo, Kyle Capobianco - PP : Marcus Pettersson - PK : Marcus Pettersson, Yegor Rykov
<b>Penalty Shots</b>
Vladislav Kamenev, Nick Ritchie, Mathias From, Andrew Mangiapane, German Rubtsov
<b>Custom OT Lines Forwards</b>
John Hayden, Vladislav Kamenev, German Rubtsov, Mathias From, Dominik Kahun, Daniel Bernhardt, Andrew Mangiapane, Nick Ritchie, Dominik Simon, Hudson Elynuik
<b>Custom OT Lines Defensemen</b>
Anthony DeAngelo, Yegor Rykov, Nicolas Hague, Mitchell Vande Sompel, Kyle Capobianco

<b>Scratches</b>
Oliver Kylington (Healthy), Kevin Hancock (Healthy), Radovan Bondra (Healthy)</pre></div>
<h1 class="TeamLineFarm_MAN"><a id="ManitobaMoose">Manitoba Moose</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL9-FarmTeamScoring.php#ManitobaMoose">Farm Team Scoring</a> ]
[ <a href="ASHL9-FarmTeamLines.php#ManitobaMoose">Farm Team Lines</a> ]
[ <a href="ASHL9-FarmTeamSchedule.php#ManitobaMoose">Farm Team Schedule</a> ]
[ <a href="ASHL9-FarmTeamStats.php#ManitobaMoose">Farm Team Stats</a> ]
[ <a href="ASHL9-FarmTeamStatsVS.php#ManitobaMoose">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ManitobaMoose');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ManitobaMoose" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jérôme Verrier           Noah Rod                 Michael Joly             25     1   2  2  
 2 Linden Vey               Brent Pedersen           Alexander Avtsin         25     1   2  2  
 3 Daniel Lafontaine        James Sheppard           Alexandre Grenier        25     1   2  2  
 4 Adam Brooks              Kay Schweri              Tyler Kennedy            25     1   2  2  

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
Backup : Jason Kasdorf            
Third : Olof Lindbom             

<b>Extra Forwards</b>
Normal : Maxime Macenauer, Alexandre Grenier, Tyler Kennedy - PP : Maxime Macenauer, Alexandre Grenier - PK : Tyler Kennedy
<b>Extra Defensemen</b>
Normal : Frederic St-Denis, Joel Chouinard, Kevin Lidström - PP : Frederic St-Denis - PK : Joel Chouinard, Kevin Lidström
<b>Penalty Shots</b>
Jérôme Verrier, Michael Joly, Linden Vey, Alexander Avtsin, Noah Rod
<b>Custom OT Lines Forwards</b>
Jérôme Verrier, Michael Joly, Linden Vey, Alexander Avtsin, Noah Rod, Alexandre Grenier, Tyler Kennedy, Brent Pedersen, Daniel Lafontaine, Adam Brooks
<b>Custom OT Lines Defensemen</b>
Ryan Graves, Peter Stoykewych, Kevin Lidström, Jerome Gauthier-Leduc, Frederic St-Denis

<b>Scratches</b>
None
</pre></div>
<?php include "Footer.php";?>
