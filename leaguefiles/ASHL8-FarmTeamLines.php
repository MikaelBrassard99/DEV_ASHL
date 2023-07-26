<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Farm Team Lines</title>
<script src="ASHL8.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL8.css" rel="stylesheet" type="text/css" />
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#LavalChiefs">Laval Chiefs</a> | <a href="#PortlandPirates">Portland Pirates</a> | <a href="#ProvidenceBruins">Providence Bruins</a> | <a href="#RochesterAmericans">Rochester Americans</a> | <a href="#JolietteSportif">Joliette Sportif</a> | <a href="#CharlotteCheckers">Charlotte Checkers</a> | <a href="#RockfordIceHogs">Rockford IceHogs</a> | <a href="#LakeErieMonsters">Lake Erie Monsters</a> | <a href="#SpringfieldFalcons">Springfield Falcons</a> | <a href="#LasVegasGamblers">Las Vegas Gamblers</a> | <a href="#GrandRapidsGriffins">Grand Rapids Griffins</a> | <a href="#OklahomaCityBarons">Oklahoma City Barons</a> | <a href="#SanAntonioRampage">San Antonio Rampage</a> | <a href="#GatineauOlympiques">Gatineau Olympiques</a> | <a href="#HoustonAeros">Houston Aeros</a> | <a href="#Trois-RivièresDraveurs">Trois-Rivières Draveurs</a> | <a href="#MilwaukeeAdmirals">Milwaukee Admirals</a> | <a href="#AlbanyDevils">Albany Devils</a> | <a href="#BridgeportSoundTigers">Bridgeport Sound Tigers</a> | <a href="#ConnecticutWhale">Connecticut Whale</a> | <a href="#BinghamtonSenators">Binghamton Senators</a> | <a href="#AdirondackPhantoms">Adirondack Phantoms</a> | <a href="#Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a> | <a href="#ChicoutimiSaguenéens">Chicoutimi Saguenéens</a> | <a href="#Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a> | <a href="#MercerIslandArchangels">Mercer Island Archangels</a> | <a href="#PeoriaRivermen">Peoria Rivermen</a> | <a href="#NorfolkAdmirals">Norfolk Admirals</a> | <a href="#RobervalDwarfs">Roberval Dwarfs</a> | <a href="#ChicagoWolves">Chicago Wolves</a> | <a href="#LandshutCannibals">Landshut Cannibals</a> | <a href="#ManitobaMoose">Manitoba Moose</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLineFarm_LAV"><a id="LavalChiefs">Laval Chiefs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#LavalChiefs">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#LavalChiefs">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#LavalChiefs">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#LavalChiefs">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#LavalChiefs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LavalChiefs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LavalChiefs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alex Barré-Boulet        Sonny Milano             Daniel Sprong            35     0   1  4  
 2 Stephen Weiss            Scott Hartnell           Troy Terry               32     0   1  4  
 3 Jacob Olofsson           Antti Miettinen          Jesse Ylonen             30     0   2  3  
 4 Aaron Gagnon             Sean Bergenheim          Brad Boyes               3      0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vince Dunn               Josh Manson                                       35     1   3  1  
 2 Ben Harpur               Sami Niku                                         35     1   3  1  
 3 Jonathon Merrill         Gabriel Beaupré                                   25     1   3  1  
 4 Jonathon Merrill         Gabriel Beaupré                                   5      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alex Barré-Boulet        Sonny Milano             Daniel Sprong            55     1   0  4  
 2 Jacob Olofsson           Scott Hartnell           Troy Terry               45     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vince Dunn               Sami Niku                                         55     1   1  3  
 2 Jonathon Merrill         Josh Manson                                       45     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob Olofsson           Scott Hartnell           55     1   3  1  
 2 Stephen Weiss            Sean Bergenheim          45     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Harpur               Josh Manson              55     1   4  0  
 2 Gabriel Beaupré          Jonathon Merrill         45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jacob Olofsson                                    55     1   4  0  
 2 Stephen Weiss                                     45     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Harpur               Josh Manson              55     1   4  0  
 2 Gabriel Beaupré          Jonathon Merrill         45     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aaron Gagnon             Sean Bergenheim          50     0   2  3  
 2 Alex Barré-Boulet        Daniel Sprong            50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gabriel Beaupré          Jonathon Merrill         50     1   2  2  
 2 Ben Harpur               Sami Niku                50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alex Barré-Boulet        Sonny Milano             Daniel Sprong            Vince Dunn               Sami Niku                

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Stephen Weiss            Scott Hartnell           Jacob Olofsson           Ben Harpur               Josh Manson              

<b>Goaltenders</b>
Starting : Colton Point             
Backup : Tyler Parsons            

<b>Extra Forwards</b>
Normal : Jacob Olofsson, Daniel Sprong, Scott Hartnell - PP : Stephen Weiss, Brad Boyes - PK : Sonny Milano
<b>Extra Defensemen</b>
Normal : Jonathon Merrill, Ben Harpur, Josh Manson - PP : Gabriel Beaupré - PK : Vince Dunn, Sami Niku
<b>Penalty Shots</b>
Jacob Olofsson, Daniel Sprong, Antti Miettinen, Scott Hartnell, Sonny Milano
<b>Custom OT Lines Forwards</b>
Alex Barré-Boulet, Sonny Milano, Troy Terry, Daniel Sprong, Stephen Weiss, Jesse Ylonen, Jacob Olofsson, Sean Bergenheim, Aaron Gagnon, Brad Boyes
<b>Custom OT Lines Defensemen</b>
Gabriel Beaupré, Ben Harpur, Sami Niku, Jonathon Merrill, Josh Manson

<b>Scratches</b>
Andrey Zubarev (Healthy), Ville Leino (Healthy), Yannick Weber (Healthy), Robin Kovacs (Healthy), Nils Lundkvist (Healthy)
Lucas Wallmark (Healthy), Vitek Vanecek (Healthy)</pre></div>
<h1 class="TeamLineFarm_POR"><a id="PortlandPirates">Portland Pirates</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#PortlandPirates">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#PortlandPirates">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#PortlandPirates">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#PortlandPirates">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#PortlandPirates">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PortlandPirates');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PortlandPirates" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joseph Blandisi          Vadim Vasjonkin          Juuso Ikonen             27     0   1  4  
 2 Hafthor Sigrunarson      Jayden Halbgewachs       Rihards Bukarts          26     0   1  4  
 3 Rodrigo Abols            Jacob Ratcliffe          Conor Garland            25     0   1  4  
 4 Max Hermens              Arturas Laukaitis        Sam Miletic              22     0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 T.J. Brodie              Karlis Cukste                                     35     0   4  1  
 2 Adam McQuaid             Vilmos Gallo                                      30     1   3  1  
 3 Sam Jardine              Mattias Norstebo                                  25     0   4  1  
 4 Mark Borowiecki          Arturs Kulda                                      10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Max Hermens              Hafthor Sigrunarson      Conor Garland            53     0   0  5  
 2 Joseph Blandisi          Juuso Ikonen             Rihards Bukarts          47     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Borowiecki          Vilmos Gallo                                      60     1   1  3  
 2 Mattias Norstebo         Adam McQuaid                                      40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Karlis Cukste            Conor Garland            60     1   4  0  
 2 Arturs Kulda             Juuso Ikonen             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Sam Jardine              Mark Borowiecki          60     1   4  0  
 2 Adam McQuaid             Mattias Norstebo         40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Karlis Cukste                                     60     1   4  0  
 2 Hafthor Sigrunarson                               40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Arturs Kulda             Adam McQuaid             60     1   4  0  
 2 Mark Borowiecki          Mattias Norstebo         40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Max Hermens              Rihards Bukarts          60     1   2  2  
 2 Jacob Ratcliffe          Conor Garland            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Borowiecki          Mattias Norstebo         60     1   2  2  
 2 Adam McQuaid             Karlis Cukste            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Hafthor Sigrunarson      Rihards Bukarts          Conor Garland            Adam McQuaid             Mark Borowiecki          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joseph Blandisi          Rihards Bukarts          Conor Garland            Adam McQuaid             Mark Borowiecki          

<b>Goaltenders</b>
Starting : Craig Anderson           
Backup : Connor Hellebuyck        
Third : Mareks Mitens            

<b>Extra Forwards</b>
Normal : Conor Garland, Vilmos Gallo, Max Hermens - PP : Max Hermens, Sam Miletic - PK : Max Hermens
<b>Extra Defensemen</b>
Normal : Mark Borowiecki, Mattias Norstebo, Adam McQuaid - PP : Mark Borowiecki - PK : Mark Borowiecki, Adam McQuaid
<b>Penalty Shots</b>
Max Hermens, Rihards Bukarts, Joseph Blandisi, Conor Garland, Hafthor Sigrunarson
<b>Custom OT Lines Forwards</b>
Juuso Ikonen, Vilmos Gallo, Jacob Ratcliffe, Conor Garland, Hafthor Sigrunarson, Arturas Laukaitis, Max Hermens, Sam Miletic, Rihards Bukarts, Joseph Blandisi
<b>Custom OT Lines Defensemen</b>
Mark Borowiecki, Adam McQuaid, Vilmos Gallo, Sam Jardine, Mattias Norstebo

<b>Scratches</b>
Ronalds Kenins (Healthy), Skyler McKenzie (Healthy), Jermaine Loewen (Healthy)</pre></div>
<h1 class="TeamLineFarm_PRO"><a id="ProvidenceBruins">Providence Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#ProvidenceBruins">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#ProvidenceBruins">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#ProvidenceBruins">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#ProvidenceBruins">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#ProvidenceBruins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ProvidenceBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ProvidenceBruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jordan Schroeder         Ryan Donato              Hudson Fasching          25     1   2  2  
 2 Frank Vatrano            Alexander Khokhlachev    Jamie Arniel             25     1   2  2  
 3 Rasmus Asplund           Justin Florek            Ben Sexton               25     1   2  2  
 4 Adam Courchaine          Tim Bozon                Tyler Randell            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cameron Gaunce           Zach Trotman                                      25     1   2  2  
 2 Tommy Cross              Maxim Chudinov                                    25     1   2  2  
 3 Konrad Abeltshauser      David Warsofsky                                   25     1   2  2  
 4 Cameron Gaunce           Zach Trotman                                      25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jordan Schroeder         Alexander Khokhlachev    Hudson Fasching          60     1   2  2  
 2 Frank Vatrano            Justin Florek            Jamie Arniel             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cameron Gaunce           Zach Trotman                                      60     1   2  2  
 2 Tommy Cross              Maxim Chudinov                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Schroeder         Hudson Fasching          60     1   2  2  
 2 Alexander Khokhlachev    Frank Vatrano            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Gaunce           Zach Trotman             60     1   2  2  
 2 Tommy Cross              Maxim Chudinov           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Schroeder                                  60     1   2  2  
 2 Hudson Fasching                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Gaunce           Zach Trotman             60     1   2  2  
 2 Tommy Cross              Maxim Chudinov           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Schroeder         Hudson Fasching          60     1   2  2  
 2 Alexander Khokhlachev    Frank Vatrano            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Gaunce           Zach Trotman             60     1   2  2  
 2 Tommy Cross              Maxim Chudinov           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Schroeder         Alexander Khokhlachev    Hudson Fasching          Cameron Gaunce           Zach Trotman             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Schroeder         Alexander Khokhlachev    Hudson Fasching          Cameron Gaunce           Zach Trotman             

<b>Goaltenders</b>
Starting : Michael Hutchinson       
Backup : Dan Ellis                
Third : Lars Volden              

<b>Extra Forwards</b>
Normal : Marc-Antoine Pouliot, Brian Ferlin, Rasmus Asplund - PP : Marc-Antoine Pouliot, Brian Ferlin - PK : Rasmus Asplund
<b>Extra Defensemen</b>
Normal : Konrad Abeltshauser, David Warsofsky, Tommy Cross - PP : Konrad Abeltshauser - PK : David Warsofsky, Tommy Cross
<b>Penalty Shots</b>
Jordan Schroeder, Hudson Fasching, Alexander Khokhlachev, Frank Vatrano, Justin Florek
<b>Custom OT Lines Forwards</b>
Jordan Schroeder, Hudson Fasching, Alexander Khokhlachev, Frank Vatrano, Justin Florek, Jamie Arniel, Rasmus Asplund, Ryan Donato, Ben Sexton, Adam Courchaine
<b>Custom OT Lines Defensemen</b>
Cameron Gaunce, Zach Trotman, Tommy Cross, Maxim Chudinov, Konrad Abeltshauser

<b>Scratches</b>
Vladimir Tkachev (Broken Ribs Injury), Robert Bortuzzo (Strained Left Knee Injury), Simon Tremblay (Healthy), Roland McKeown (Suspend)</pre></div>
<h1 class="TeamLineFarm_RCH"><a id="RochesterAmericans">Rochester Americans</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#RochesterAmericans">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#RochesterAmericans">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#RochesterAmericans">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#RochesterAmericans">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#RochesterAmericans">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RochesterAmericans');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RochesterAmericans" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Laughton           Ryane Clowe              Andreas Nodl             25     1   2  2  
 2 Matthew Highmore         Richard Panik            Benn Ferriero            25     1   2  2  
 3 Sean Kuraly              Jack Roslovic            Tyler Kennedy            25     1   2  2  
 4 Ryane Clowe              Matthew Highmore         Andreas Nodl             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Keegan Kanzig            Dillon Heatherington                              25     1   2  2  
 2 Tim Gleason              Chris Butler                                      25     1   2  2  
 3 Harrison Ruopp           Daniel Sorvik                                     25     1   2  2  
 4 Dillon Heatherington     Keegan Kanzig                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Laughton           Jack Roslovic            Andreas Nodl             60     1   2  2  
 2 Tyler Kennedy            Richard Panik            Ryane Clowe              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Daniel Sorvik            Dillon Heatherington                              60     1   2  2  
 2 Harrison Ruopp           Chris Butler                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryane Clowe              Scott Laughton           60     1   2  2  
 2 Andreas Nodl             Tyler Kennedy            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dillon Heatherington     Daniel Sorvik            60     1   2  2  
 2 Harrison Ruopp           Chris Butler             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Scott Laughton                                    60     1   2  2  
 2 Tyler Kennedy                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Harrison Ruopp           Dillon Heatherington     60     1   2  2  
 2 Daniel Sorvik            Chris Butler             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Scott Laughton           Ryane Clowe              60     1   2  2  
 2 Richard Panik            Tyler Kennedy            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dillon Heatherington     Harrison Ruopp           60     1   2  2  
 2 Daniel Sorvik            Chris Butler             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Laughton           Ryane Clowe              Andreas Nodl             Tim Gleason              Dillon Heatherington     

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Laughton           Ryane Clowe              Andreas Nodl             Tim Gleason              Dillon Heatherington     

<b>Goaltenders</b>
Starting : Oscar Dansk              
Backup : Cameron Talbot           
Third : Bradley Eidsness         

<b>Extra Forwards</b>
Normal : Jack Roslovic, Tyler Kennedy, Ryane Clowe - PP : Jack Roslovic, Tyler Kennedy - PK : Ryane Clowe
<b>Extra Defensemen</b>
Normal : Harrison Ruopp, Daniel Sorvik, Dillon Heatherington - PP : Harrison Ruopp - PK : Daniel Sorvik, Dillon Heatherington
<b>Penalty Shots</b>
Ryane Clowe, Scott Laughton, Andreas Nodl, Tyler Kennedy, Richard Panik
<b>Custom OT Lines Forwards</b>
Andreas Nodl, Ryane Clowe, Benn Ferriero, Tyler Kennedy, Richard Panik, Scott Laughton, Jack Roslovic, James Sheppard, Sean Kuraly, Matthew Highmore
<b>Custom OT Lines Defensemen</b>
Dillon Heatherington, Daniel Sorvik, Tim Gleason, Chris Butler, Harrison Ruopp

<b>Scratches</b>
Ryan Pulock (Sprained Right Ankle Injury), Daniel O'Regan (Bruised Left Shoulder Injury), Peter Cehlarik (Healthy)</pre></div>
<h1 class="TeamLineFarm_JOL"><a id="JolietteSportif">Joliette Sportif</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#JolietteSportif">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#JolietteSportif">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#JolietteSportif">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#JolietteSportif">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#JolietteSportif">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_JolietteSportif');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_JolietteSportif" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dustin Jeffrey           Michael Ferland          Greg Nemisz              25     1   2  2  
 2 Zach Boychuk             Drew Miller              Danny Kristo             25     1   2  2  
 3 Josh Ho-Sang             Blake Geoffrion          Jesper Fasth             25     1   2  2  
 4 Scott Wilson             Greg Nemisz              Zachary Senyshyn         25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matthew Finn             John Ramage                                       25     1   2  2  
 2 Joakim Ryan              Fredrik Claesson                                  25     1   2  2  
 3 Jacob Larsson            Jerome Gauthier-Leduc                             25     1   2  2  
 4 Matthew Finn             John Ramage                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dustin Jeffrey           Michael Ferland          Greg Nemisz              60     1   2  2  
 2 Zach Boychuk             Drew Miller              Danny Kristo             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matthew Finn             John Ramage                                       60     1   2  2  
 2 Joakim Ryan              Fredrik Claesson                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Greg Nemisz              Michael Ferland          60     1   2  2  
 2 Drew Miller              Danny Kristo             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matthew Finn             John Ramage              60     1   2  2  
 2 Joakim Ryan              Fredrik Claesson         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Greg Nemisz                                       60     1   2  2  
 2 Michael Ferland                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matthew Finn             John Ramage              60     1   2  2  
 2 Joakim Ryan              Fredrik Claesson         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Greg Nemisz              Michael Ferland          60     1   2  2  
 2 Drew Miller              Danny Kristo             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matthew Finn             John Ramage              60     1   2  2  
 2 Joakim Ryan              Fredrik Claesson         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dustin Jeffrey           Michael Ferland          Greg Nemisz              Matthew Finn             John Ramage              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dustin Jeffrey           Michael Ferland          Greg Nemisz              Matthew Finn             John Ramage              

<b>Goaltenders</b>
Starting : Laurent Brossoit         
Backup : Jack Lafontaine          

<b>Extra Forwards</b>
Normal : Dmitri Mikhailov, Josh Ho-Sang, Blake Geoffrion - PP : Dmitri Mikhailov, Josh Ho-Sang - PK : Blake Geoffrion
<b>Extra Defensemen</b>
Normal : Jacob Larsson, Jerome Gauthier-Leduc, Joakim Ryan - PP : Jacob Larsson - PK : Jerome Gauthier-Leduc, Joakim Ryan
<b>Penalty Shots</b>
Greg Nemisz, Michael Ferland, Drew Miller, Danny Kristo, Dustin Jeffrey
<b>Custom OT Lines Forwards</b>
Greg Nemisz, Michael Ferland, Drew Miller, Danny Kristo, Dustin Jeffrey, Zach Boychuk, Josh Ho-Sang, Blake Geoffrion, Jesper Fasth, Zachary Senyshyn
<b>Custom OT Lines Defensemen</b>
Matthew Finn, John Ramage, Joakim Ryan, Fredrik Claesson, Jacob Larsson

<b>Scratches</b>
Mark Alt (Healthy), Nick Paul (Healthy), Anton Zlobin (Healthy), Anthony Brodeur (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHA"><a id="CharlotteCheckers">Charlotte Checkers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#CharlotteCheckers">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#CharlotteCheckers">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#CharlotteCheckers">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#CharlotteCheckers">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#CharlotteCheckers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CharlotteCheckers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CharlotteCheckers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Josh Jooris              Nathan Gerbe             Zac Dalpe                25     1   2  2  
 2 Dominik Uher             Kenny Agostino           Michael Vandas           25     1   2  2  
 3 Darroll Powe             Darren Archibald         Anthony Nigro            25     1   2  2  
 4 Nathan Gerbe             Anthony Nigro            Josh Jooris              25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ladislav Smid            Kevin Marshall                                    25     1   2  2  
 2 Mark Barberio            Fedor Tyutin                                      25     1   2  2  
 3 Michael Stone            Michael Paliotta                                  25     1   2  2  
 4 Dillon Donnelly          Kenney Morrison                                   25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Josh Jooris              Nathan Gerbe             Anthony Nigro            60     1   2  2  
 2 Dominik Uher             Zac Dalpe                Michael Vandas           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ladislav Smid            Kevin Marshall                                    60     1   2  2  
 2 Mark Barberio            Fedor Tyutin                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nathan Gerbe             Zac Dalpe                60     1   2  2  
 2 Michael Vandas           Josh Jooris              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ladislav Smid            Kevin Marshall           60     1   2  2  
 2 Mark Barberio            Fedor Tyutin             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nathan Gerbe                                      60     1   2  2  
 2 Josh Jooris                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ladislav Smid            Kevin Marshall           60     1   2  2  
 2 Mark Barberio            Fedor Tyutin             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nathan Gerbe             Anthony Nigro            60     1   2  2  
 2 Zac Dalpe                Josh Jooris              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ladislav Smid            Kevin Marshall           60     1   2  2  
 2 Mark Barberio            Fedor Tyutin             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Josh Jooris              Nathan Gerbe             Zac Dalpe                Ladislav Smid            Kevin Marshall           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Josh Jooris              Nathan Gerbe             Zac Dalpe                Ladislav Smid            Kevin Marshall           

<b>Goaltenders</b>
Starting : Mike Murphy              
Backup : Kristers Gudlevskis      

<b>Extra Forwards</b>
Normal : Nathan Gerbe, Josh Jooris, Anthony Nigro - PP : Nathan Gerbe, Josh Jooris - PK : Anthony Nigro
<b>Extra Defensemen</b>
Normal : Ricard Blidstrand, Shayne Tacker, Michael Stone - PP : Ricard Blidstrand - PK : Shayne Tacker, Michael Stone
<b>Penalty Shots</b>
Nathan Gerbe, Anthony Nigro, Dominik Uher, Josh Jooris, Zac Dalpe
<b>Custom OT Lines Forwards</b>
Nathan Gerbe, Zac Dalpe, Kenny Agostino, Josh Jooris, Darroll Powe, Anthony Nigro, Michael Vandas, Dominik Uher, Darren Archibald, Guillaume Latendresse
<b>Custom OT Lines Defensemen</b>
Ladislav Smid, Kevin Marshall, Mark Barberio, Fedor Tyutin, Michael Stone

<b>Scratches</b>
Patrick O'Sullivan (Healthy), Tomas Kundratek (Healthy), Curt Gogol (Healthy), Rasmus Nielsen (Healthy), Sondre Olden (Healthy)</pre></div>
<h1 class="TeamLineFarm_RFD"><a id="RockfordIceHogs">Rockford IceHogs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#RockfordIceHogs">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#RockfordIceHogs">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#RockfordIceHogs">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#RockfordIceHogs">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#RockfordIceHogs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RockfordIceHogs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RockfordIceHogs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 David Ullstrom           Philippe Paradis         Justin Auger             25     1   2  2  
 2 Mirko Hoefflin           Adam Helewka             Gustav Nyquist           25     1   2  2  
 3 Christopher DiDomenico   Nikolai Zherdev          Zac Rinaldo              25     1   2  2  
 4 Brad Morrison            Erik Foley               David Ullstrom           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Julian Melchiori         Rasmus Andersson                                  34     1   2  2  
 2 Stephen Johns            Justin Holl                                       33     1   2  2  
 3 Jason Fram               Erik Foley                                        33     1   2  2  
 4 Julian Melchiori         Trevor Van Riemsdyk                               0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 David Ullstrom           Philippe Paradis         Justin Auger             60     1   2  2  
 2 Mirko Hoefflin           Adam Helewka             Gustav Nyquist           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Julian Melchiori         Rasmus Andersson                                  60     1   2  2  
 2 Stephen Johns            Justin Holl                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Ullstrom           Philippe Paradis         60     1   2  2  
 2 Adam Helewka             Justin Auger             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Julian Melchiori         Jason Fram               60     1   2  2  
 2 Stephen Johns            Justin Holl              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 David Ullstrom                                    60     1   2  2  
 2 Philippe Paradis                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Julian Melchiori         Jason Fram               60     1   2  2  
 2 Stephen Johns            Justin Holl              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Ullstrom           Philippe Paradis         60     1   2  2  
 2 Adam Helewka             Justin Auger             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Julian Melchiori         Rasmus Andersson         60     1   2  2  
 2 Stephen Johns            Justin Holl              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   David Ullstrom           Philippe Paradis         Justin Auger             Julian Melchiori         Rasmus Andersson         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   David Ullstrom           Philippe Paradis         Justin Auger             Julian Melchiori         Rasmus Andersson         

<b>Goaltenders</b>
Starting : Antti Raanta             
Backup : Mackenzie Blackwood      
Third : Michael McNiven          

<b>Extra Forwards</b>
Normal : Zach Pochiro, David Gilbert, Nikolai Zherdev - PP : Zach Pochiro, David Gilbert - PK : Nikolai Zherdev
<b>Extra Defensemen</b>
Normal : Jason Fram, Stephen Johns, Justin Holl - PP : Jason Fram - PK : Stephen Johns, Justin Holl
<b>Penalty Shots</b>
David Ullstrom, Philippe Paradis, Adam Helewka, Justin Auger, Gustav Nyquist
<b>Custom OT Lines Forwards</b>
David Ullstrom, Philippe Paradis, Adam Helewka, Justin Auger, Gustav Nyquist, Justin Holl, Mirko Hoefflin, Nikolai Zherdev, Erik Foley, Zac Rinaldo
<b>Custom OT Lines Defensemen</b>
Julian Melchiori, Rasmus Andersson, Stephen Johns, Justin Holl, Jason Fram

<b>Scratches</b>
Julien Pelletier (Healthy), Byron Froese (Fractured Orbital Bone Injury)</pre></div>
<h1 class="TeamLineFarm_LKE"><a id="LakeErieMonsters">Lake Erie Monsters</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#LakeErieMonsters">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#LakeErieMonsters">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#LakeErieMonsters">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#LakeErieMonsters">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#LakeErieMonsters">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LakeErieMonsters');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LakeErieMonsters" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Malone              Taylor Leier             Anton Slepyshev          32     1   1  3  
 2 Jan Kovar                Sergey Tolchinsky        Luke Walker              32     1   1  3  
 3 Evan Rodrigues           Marcel Noebels           Stephen MacAulay         26     1   1  3  
 4 Taylor Leier             Luke Moffatt             Kurtis Gabriel           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gavin Bayreuther         Troy Rutkowski                                    35     1   2  2  
 2 Andreas Englund          Brett Cote                                        35     1   2  2  
 3 Gus Young                Stephen Silas                                     30     1   2  2  
 4 Gavin Bayreuther         Gus Young                                         0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evan Rodrigues           Taylor Leier             Anton Slepyshev          60     0   0  5  
 2 Jan Kovar                Marcel Noebels           Sergey Tolchinsky        40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brett Cote               Gavin Bayreuther                                  54     0   1  4  
 2 Gus Young                Andreas Englund                                   46     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evan Rodrigues           Marcel Noebels           60     0   5  0  
 2 Taylor Leier             Kurtis Gabriel           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gavin Bayreuther         Andreas Englund          60     1   2  2  
 2 Gus Young                Brett Cote               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Evan Rodrigues                                    60     0   5  0  
 2 Marcel Noebels                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gavin Bayreuther         Gus Young                60     1   2  2  
 2 Andreas Englund          Brett Cote               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evan Rodrigues           Anton Slepyshev          60     1   2  2  
 2 Jan Kovar                Sergey Tolchinsky        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gus Young                Andreas Englund          60     1   2  2  
 2 Brett Cote               Gavin Bayreuther         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Malone              Taylor Leier             Evan Rodrigues           Brett Cote               Andreas Englund          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evan Rodrigues           Marcel Noebels           Taylor Leier             Andreas Englund          Brett Cote               

<b>Goaltenders</b>
Starting : Peter Delmas             
Backup : Matt O'Connor            
Third : Trevor Cann              

<b>Extra Forwards</b>
Normal : Taylor Leier, Marcel Noebels, Evan Rodrigues - PP : Evan Rodrigues, Taylor Leier - PK : Evan Rodrigues
<b>Extra Defensemen</b>
Normal : Andreas Englund, Gus Young, Brett Cote - PP : Andreas Englund - PK : Gavin Bayreuther, Brett Cote
<b>Penalty Shots</b>
Jan Kovar, Brad Malone, Anton Slepyshev, Luke Walker, Sergey Tolchinsky
<b>Custom OT Lines Forwards</b>
Evan Rodrigues, Anton Slepyshev, Jan Kovar, Marcel Noebels, Taylor Leier, Sergey Tolchinsky, Luke Walker, Stephen MacAulay, Luke Moffatt, Kurtis Gabriel
<b>Custom OT Lines Defensemen</b>
Gus Young, Andreas Englund, Brett Cote, Stephen Silas, Gavin Bayreuther

<b>Scratches</b>
Ben Maxwell (Healthy), Ryan Stanton (Bruised Right Leg Injury)</pre></div>
<h1 class="TeamLineFarm_SPR"><a id="SpringfieldFalcons">Springfield Falcons</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#SpringfieldFalcons">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#SpringfieldFalcons">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#SpringfieldFalcons">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#SpringfieldFalcons">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#SpringfieldFalcons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SpringfieldFalcons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SpringfieldFalcons" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Barclay Goodrow          Jason Dickinson          Alexander Dergachyov     25     1   2  2  
 2 T.J. Tynan               Anton Blidh              Petr Straka              25     1   2  2  
 3 Josh Currie              Marcus Karlberg          Dalton Smith             25     1   2  2  
 4 T.J. Tynan               Dalton Smith             Barclay Goodrow          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Madison Bowey            Connor Carrick                                    25     1   2  2  
 2 Nikita Nesterov          Shane Hanna                                       25     1   2  2  
 3 Brendan Guhle            Slater Koekkoek                                   25     1   2  2  
 4 Madison Bowey            David Quenneville                                 25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Barclay Goodrow          Josh Currie              Alexander Dergachyov     60     1   2  2  
 2 T.J. Tynan               Anton Blidh              Petr Straka              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Madison Bowey            Connor Carrick                                    60     1   2  2  
 2 Nikita Nesterov          Shane Hanna                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anton Blidh              Barclay Goodrow          60     1   2  2  
 2 T.J. Tynan               Alexander Dergachyov     40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Madison Bowey            Connor Carrick           60     1   2  2  
 2 Nikita Nesterov          Shane Hanna              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alexander Dergachyov                              60     1   2  2  
 2 Anton Blidh                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Madison Bowey            Connor Carrick           60     1   2  2  
 2 Nikita Nesterov          Shane Hanna              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anton Blidh              Barclay Goodrow          60     1   2  2  
 2 T.J. Tynan               Alexander Dergachyov     40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Madison Bowey            Connor Carrick           60     1   2  2  
 2 Nikita Nesterov          Shane Hanna              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Barclay Goodrow          Jason Dickinson          Alexander Dergachyov     Madison Bowey            Connor Carrick           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Barclay Goodrow          Jason Dickinson          Alexander Dergachyov     Madison Bowey            Connor Carrick           

<b>Goaltenders</b>
Starting : Jake Paterson            
Backup : Anton Forsberg           
Third : Spencer Martin           

<b>Extra Forwards</b>
Normal : Josh Currie, Alexander Dergachyov, Anton Blidh - PP : Josh Currie, Alexander Dergachyov - PK : Anton Blidh
<b>Extra Defensemen</b>
Normal : Madison Bowey, Brendan Guhle, Connor Carrick - PP : Madison Bowey - PK : Brendan Guhle, Madison Bowey
<b>Penalty Shots</b>
Josh Currie, Jason Dickinson, T.J. Tynan, Alexander Dergachyov, Anton Blidh
<b>Custom OT Lines Forwards</b>
Barclay Goodrow, Jason Dickinson, T.J. Tynan, Alexander Dergachyov, Anton Blidh, Petr Straka, Josh Currie, Marcus Karlberg, Dalton Smith, Unknown Player
<b>Custom OT Lines Defensemen</b>
Madison Bowey, Connor Carrick, Nikita Nesterov, Shane Hanna, Brendan Guhle

<b>Scratches</b>
Remi Elie (Healthy)</pre></div>
<h1 class="TeamLineFarm_LVG"><a id="LasVegasGamblers">Las Vegas Gamblers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#LasVegasGamblers">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#LasVegasGamblers">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#LasVegasGamblers">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#LasVegasGamblers">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#LasVegasGamblers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LasVegasGamblers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LasVegasGamblers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Conner Bleackley         Justin Kea               Marc-Andre Cliche        25     1   2  2  
 2 Chris Kelly              Isac Lundestrom          Curtis McKenzie          25     1   2  2  
 3 Andrew Calof             Adam Brodecki            Jimmy Vesey              25     1   2  2  
 4 Conner Bleackley         Marc-Andre Cliche        Chris Kelly              25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Patrik Nemeth            Nick Holden                                       25     1   2  2  
 2 Markus Nutivaara         Riley Stadel                                      25     1   2  2  
 3 Christian Jaros          Brett Carson                                      25     1   2  2  
 4 Parker Wotherspoon       Brett Festerling                                  25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Conner Bleackley         Andrew Calof             Marc-Andre Cliche        60     1   2  2  
 2 Chris Kelly              Isac Lundestrom          Adam Brodecki            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Patrik Nemeth            Nick Holden                                       60     1   2  2  
 2 Markus Nutivaara         Riley Stadel                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Conner Bleackley         Marc-Andre Cliche        60     1   2  2  
 2 Andrew Calof             Chris Kelly              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Patrik Nemeth            Nick Holden              60     1   2  2  
 2 Markus Nutivaara         Riley Stadel             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Conner Bleackley                                  60     1   2  2  
 2 Marc-Andre Cliche                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Patrik Nemeth            Nick Holden              60     1   2  2  
 2 Markus Nutivaara         Riley Stadel             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Conner Bleackley         Marc-Andre Cliche        60     1   2  2  
 2 Isac Lundestrom          Chris Kelly              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Patrik Nemeth            Nick Holden              60     1   2  2  
 2 Markus Nutivaara         Riley Stadel             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Conner Bleackley         Curtis McKenzie          Marc-Andre Cliche        Patrik Nemeth            Nick Holden              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Conner Bleackley         Curtis McKenzie          Marc-Andre Cliche        Patrik Nemeth            Nick Holden              

<b>Goaltenders</b>
Starting : Filip Gustavsson         
Backup : Alexander Sharychenkov   
Third : Evan Fitzpatrick         

<b>Extra Forwards</b>
Normal : Adam Brodecki, Conner Bleackley, Andrew Calof - PP : Adam Brodecki, Marc-Andre Cliche - PK : Andrew Calof
<b>Extra Defensemen</b>
Normal : Aaron Rome, Christian Jaros, Brett Carson - PP : Aaron Rome - PK : Christian Jaros, Brett Carson
<b>Penalty Shots</b>
Conner Bleackley, Marc-Andre Cliche, Adam Brodecki, Chris Kelly, Isac Lundestrom
<b>Custom OT Lines Forwards</b>
Conner Bleackley, Marc-Andre Cliche, Justin Kea, Chris Kelly, Isac Lundestrom, Curtis McKenzie, Adam Brodecki, Jimmy Vesey, Andrew Calof, Unknown Player
<b>Custom OT Lines Defensemen</b>
Patrik Nemeth, Nick Holden, Markus Nutivaara, Riley Stadel, Christian Jaros

<b>Scratches</b>
Alexander Nylander (Healthy), Givani Smith (Healthy), Tobias Lindberg (Healthy)</pre></div>
<h1 class="TeamLineFarm_GRG"><a id="GrandRapidsGriffins">Grand Rapids Griffins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#GrandRapidsGriffins">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#GrandRapidsGriffins">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#GrandRapidsGriffins">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#GrandRapidsGriffins">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#GrandRapidsGriffins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GrandRapidsGriffins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GrandRapidsGriffins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Peter Holland            Mitchell Callahan        Tomas Vincour            25     1   2  2  
 2 Philippe Hudon           Colton Gillies           Brooks Macek             25     1   2  2  
 3 Shane Prince             Brent Raedeke            Dale Weise               25     1   2  2  
 4 Philippe Hudon           Tomas Vincour            Mitchell Callahan        25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexei Marchenko         Joey Laleggia                                     25     1   2  2  
 2 Josh Gorges              Adam Almqvist                                     25     1   2  2  
 3 Chris Wideman            Ryan Button                                       25     1   2  2  
 4 Chad Billins             Alexei Marchenko                                  25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Peter Holland            Shane Prince             Tomas Vincour            60     1   2  2  
 2 Dale Weise               Colton Gillies           Brooks Macek             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexei Marchenko         Joey Laleggia                                     60     1   2  2  
 2 Josh Gorges              Adam Almqvist                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colton Gillies           Peter Holland            60     1   2  2  
 2 Tomas Vincour            Shane Prince             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexei Marchenko         Joey Laleggia            60     1   2  2  
 2 Josh Gorges              Adam Almqvist            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tomas Vincour                                     60     1   2  2  
 2 Peter Holland                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexei Marchenko         Joey Laleggia            60     1   2  2  
 2 Josh Gorges              Adam Almqvist            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dale Weise               Peter Holland            60     1   2  2  
 2 Tomas Vincour            Brooks Macek             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexei Marchenko         Joey Laleggia            60     1   2  2  
 2 Josh Gorges              Adam Almqvist            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Peter Holland            Brooks Macek             Tomas Vincour            Alexei Marchenko         Joey Laleggia            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Peter Holland            Brooks Macek             Tomas Vincour            Alexei Marchenko         Joey Laleggia            

<b>Goaltenders</b>
Starting : Alex Dubeau              
Backup : Luka Gracnar             

<b>Extra Forwards</b>
Normal : Miha Verlic, Shane Prince, Dale Weise - PP : Miha Verlic, Shane Prince - PK : Dale Weise
<b>Extra Defensemen</b>
Normal : Chris Wideman, Ryan Button, Chad Billins - PP : Chris Wideman - PK : Ryan Button, Chad Billins
<b>Penalty Shots</b>
Shane Prince, Peter Holland, Tomas Vincour, Brooks Macek, Colton Gillies
<b>Custom OT Lines Forwards</b>
Miha Verlic, Peter Holland, Tomas Vincour, Philippe Hudon, Colton Gillies, Brooks Macek, Shane Prince, Dale Weise, Mitchell Callahan, Brent Raedeke
<b>Custom OT Lines Defensemen</b>
Alexei Marchenko, Joey Laleggia, Josh Gorges, Adam Almqvist, Chris Wideman

<b>Scratches</b>
Dominic Zwerger (Healthy)</pre></div>
<h1 class="TeamLineFarm_OKC"><a id="OklahomaCityBarons">Oklahoma City Barons</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#OklahomaCityBarons">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#OklahomaCityBarons">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#OklahomaCityBarons">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#OklahomaCityBarons">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#OklahomaCityBarons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OklahomaCityBarons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OklahomaCityBarons" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Maxim Lapierre           Morgan Klimchuk          Kailer Yamamoto          34     0   1  4  
 2 Bogdan Yakimov           Brendan Lemieux          Valentin Zykov           32     0   1  4  
 3 Beau Starrett            Paul Bittner             Jared Knight             27     0   1  4  
 4 Tyler Pitlick            Teemu Hartikainen        Jared Knight             7      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Lintuniemi          Mikko Vainonen                                    34     1   2  2  
 2 Dillon Simpson           Jack Dougherty                                    33     1   2  2  
 3 Matthew Spencer          Colton White                                      27     1   2  2  
 4 Matthew Spencer          Colton White                                      6      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Beau Starrett            Morgan Klimchuk          Kailer Yamamoto          56     0   0  5  
 2 Bogdan Yakimov           Brendan Lemieux          Valentin Zykov           44     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jack Dougherty           Mikko Vainonen                                    56     0   1  4  
 2 Dillon Simpson           Colton White                                      44     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Beau Starrett            Teemu Hartikainen        55     0   4  1  
 2 Tyler Pitlick            Brian Gibbons            45     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matthew Spencer          Colton White             56     1   4  0  
 2 Jack Dougherty           Dillon Simpson           44     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tyler Pitlick                                     56     0   5  0  
 2 Beau Starrett                                     44     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matthew Spencer          Colton White             55     0   5  0  
 2 Mikko Vainonen           Jack Dougherty           45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Beau Starrett            Morgan Klimchuk          56     0   1  4  
 2 Bogdan Yakimov           Brendan Lemieux          44     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Dougherty           Mikko Vainonen           56     0   1  4  
 2 Matthew Spencer          Dillon Simpson           44     0   1  4  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Beau Starrett            Morgan Klimchuk          Valentin Zykov           Mikko Vainonen           Jack Dougherty           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Pitlick            Beau Starrett            Teemu Hartikainen        Dillon Simpson           Matthew Spencer          

<b>Goaltenders</b>
Starting : Samu Perhonen            
Backup : Tyler Bunz               

<b>Extra Forwards</b>
Normal : Kailer Yamamoto, Morgan Klimchuk, Beau Starrett - PP : Brendan Lemieux, Morgan Klimchuk - PK : Brian Gibbons
<b>Extra Defensemen</b>
Normal : Jack Dougherty, Mikko Vainonen, Alex Lintuniemi - PP : Jack Dougherty - PK : Dillon Simpson, Jack Dougherty
<b>Penalty Shots</b>
Jared Knight, Kailer Yamamoto, Morgan Klimchuk, Beau Starrett, Paul Bittner
<b>Custom OT Lines Forwards</b>
Maxim Lapierre, Kailer Yamamoto, Bogdan Yakimov, Morgan Klimchuk, Tyler Pitlick, Valentin Zykov, Brian Gibbons, Paul Bittner, Beau Starrett, Teemu Hartikainen
<b>Custom OT Lines Defensemen</b>
Matthew Spencer, Mikko Vainonen, Dillon Simpson, Jack Dougherty, Colton White

<b>Scratches</b>
Daniel Winnik (Healthy), Dominik Masin (Healthy), Jimmy Hayes (Healthy), Cedrick Desjardins (Healthy)</pre></div>
<h1 class="TeamLineFarm_SAR"><a id="SanAntonioRampage">San Antonio Rampage</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#SanAntonioRampage">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#SanAntonioRampage">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#SanAntonioRampage">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#SanAntonioRampage">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#SanAntonioRampage">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanAntonioRampage');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanAntonioRampage" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Timmins            Oscar Lindberg           Bobby Butler             25     1   2  2  
 2 Andrew Desjardins        Iiro Pakarinen           Tomas Hyka               25     1   2  2  
 3 Andrea Kristler          Garrett Wilson           Adam Cracknell           25     1   2  2  
 4 Scott Timmins            Justin Feser             Vaclav Karabacek         25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Velischek           Bernhard Ebner                                    25     1   2  2  
 2 Alexander Sulzer         Andrei Markov                                     25     1   2  2  
 3 Adam Pardy               Anton Belov                                       25     1   2  2  
 4 Jan Kostalek             Andrei Pervyshin                                  25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Timmins            Oscar Lindberg           Bobby Butler             60     1   2  2  
 2 Andrew Desjardins        Iiro Pakarinen           Tomas Hyka               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Velischek           Bernhard Ebner                                    60     1   2  2  
 2 Alexander Sulzer         Andrei Markov                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Scott Timmins            Oscar Lindberg           60     1   2  2  
 2 Andrew Desjardins        Bobby Butler             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Velischek           Bernhard Ebner           60     1   2  2  
 2 Alexander Sulzer         Andrei Markov            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Scott Timmins                                     60     1   2  2  
 2 Oscar Lindberg                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Velischek           Bernhard Ebner           60     1   2  2  
 2 Alexander Sulzer         Andrei Markov            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Scott Timmins            Oscar Lindberg           60     1   2  2  
 2 Andrew Desjardins        Bobby Butler             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Velischek           Bernhard Ebner           60     1   2  2  
 2 Alexander Sulzer         Andrei Markov            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Timmins            Oscar Lindberg           Bobby Butler             Alex Velischek           Bernhard Ebner           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Timmins            Oscar Lindberg           Bobby Butler             Alex Velischek           Bernhard Ebner           

<b>Goaltenders</b>
Starting : Al Montoya               
Backup : Alex Auld                
Third : Antero Niittymaki        

<b>Extra Forwards</b>
Normal : Aaron Volpatti, Garrett Wilson, Andrea Kristler - PP : Aaron Volpatti, Garrett Wilson - PK : Andrea Kristler
<b>Extra Defensemen</b>
Normal : Adam Pardy, Anton Belov, Jan Kostalek - PP : Adam Pardy - PK : Anton Belov, Jan Kostalek
<b>Penalty Shots</b>
Scott Timmins, Oscar Lindberg, Andrew Desjardins, Bobby Butler, Iiro Pakarinen
<b>Custom OT Lines Forwards</b>
Scott Timmins, Oscar Lindberg, Andrew Desjardins, Bobby Butler, Iiro Pakarinen, Tomas Hyka, Garrett Wilson, Andrea Kristler, Justin Feser, Adam Cracknell
<b>Custom OT Lines Defensemen</b>
Alex Velischek, Bernhard Ebner, Alexander Sulzer, Andrei Markov, Adam Pardy

<b>Scratches</b>
Melvin Nyffeler (Healthy)</pre></div>
<h1 class="TeamLineFarm_GAT"><a id="GatineauOlympiques">Gatineau Olympiques</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#GatineauOlympiques">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#GatineauOlympiques">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#GatineauOlympiques">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#GatineauOlympiques">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#GatineauOlympiques">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GatineauOlympiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GatineauOlympiques" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Cirelli          Miles Wood               Michael Mersch           35     0   1  4  
 2 Jujhar Khaira            Brendan Gaunce           Anders Bjork             33     0   2  3  
 3 Patrick Holland          Jerry D'Amigo            Laurin Braun             22     0   2  3  
 4 Gregory Beron            Andy Andreoff            Brett Bulmer             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Gravel             Matt Donovan                                      30     0   2  3  
 2 Robert Hagg              Victor Mete                                       30     0   2  3  
 3 Gregory Beron            Ryan Segalla                                      30     0   3  2  
 4 Victor Mete              Matt Donovan                                      10     0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Cirelli          Jerry D'Amigo            Miles Wood               60     1   2  2  
 2 Jujhar Khaira            Brendan Gaunce           Laurin Braun             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Gravel             Gregory Beron                                     60     1   2  2  
 2 Robert Hagg              Victor Mete                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrick Holland          Jerry D'Amigo            60     1   2  2  
 2 Brendan Gaunce           Laurin Braun             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Gregory Beron            60     1   2  2  
 2 Robert Hagg              Matt Donovan             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jerry D'Amigo                                     60     1   2  2  
 2 Patrick Holland                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Gregory Beron            60     1   2  2  
 2 Robert Hagg              Matt Donovan             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brendan Gaunce           Patrick Holland          60     1   2  2  
 2 Jerry D'Amigo            Andy Andreoff            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Gregory Beron            60     1   2  2  
 2 Robert Hagg              Victor Mete              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrick Holland          Jerry D'Amigo            Brendan Gaunce           Kevin Gravel             Gregory Beron            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrick Holland          Jerry D'Amigo            Brendan Gaunce           Kevin Gravel             Gregory Beron            

<b>Goaltenders</b>
Starting : Adin Hill                
Backup : Christopher Gibson       

<b>Extra Forwards</b>
Normal : Gregory Beron, Patrick Holland, Brendan Gaunce - PP : Patrick Holland, Gregory Beron - PK : Patrick Holland
<b>Extra Defensemen</b>
Normal : Victor Mete, Robert Hagg, Matt Donovan - PP : Victor Mete - PK : Robert Hagg, Matt Donovan
<b>Penalty Shots</b>
Brendan Gaunce, Gregory Beron, Patrick Holland, Jerry D'Amigo, Jujhar Khaira
<b>Custom OT Lines Forwards</b>
Jujhar Khaira, Gregory Beron, Patrick Holland, Anthony Cirelli, Jerry D'Amigo, Brendan Gaunce, Miles Wood, Laurin Braun, Andy Andreoff, Anders Bjork
<b>Custom OT Lines Defensemen</b>
Kevin Gravel, Gregory Beron, Robert Hagg, Matt Donovan, Victor Mete

<b>Scratches</b>
Kyle Beach (Healthy), Anze Kuralt (Healthy), Charles Bertrand (Healthy), Luke Glendening (Healthy), Ryan Rupert (Healthy)
Joonas Korpisalo (Healthy)</pre></div>
<h1 class="TeamLineFarm_HOU"><a id="HoustonAeros">Houston Aeros</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#HoustonAeros">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#HoustonAeros">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#HoustonAeros">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#HoustonAeros">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#HoustonAeros">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HoustonAeros');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HoustonAeros" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jussi Jokinen            Carl Klingberg           Paul Byron               25     1   2  2  
 2 Matthias Plachta         Benoit Pouliot           Derek Dorsett            25     1   2  2  
 3 Cody Almond              Daniil Zharkov           Jay Beagle               25     1   2  2  
 4 Carl Klingberg           Danick Martel            Jussi Jokinen            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Connauton          Maxim Noreau                                      25     1   2  2  
 2 Jared Spurgeon           Charles-Olivier Roussel                           25     1   2  2  
 3 Brooks Orpik             Steve Weinstein                                   25     1   2  2  
 4 Cale Fleury              Kevin Connauton                                   25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jussi Jokinen            Carl Klingberg           Paul Byron               60     1   2  2  
 2 Matthias Plachta         Benoit Pouliot           Derek Dorsett            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Connauton          Brooks Orpik                                      60     1   2  2  
 2 Jared Spurgeon           Charles-Olivier Roussel                           40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Carl Klingberg           Jussi Jokinen            60     1   2  2  
 2 Paul Byron               Derek Dorsett            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Connauton          Steve Weinstein          60     1   2  2  
 2 Jared Spurgeon           Charles-Olivier Roussel  40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Carl Klingberg                                    60     1   2  2  
 2 Jussi Jokinen                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Connauton          Steve Weinstein          60     1   2  2  
 2 Jared Spurgeon           Charles-Olivier Roussel  40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Carl Klingberg           Jussi Jokinen            60     1   2  2  
 2 Paul Byron               Derek Dorsett            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Connauton          Cale Fleury              60     1   2  2  
 2 Jared Spurgeon           Charles-Olivier Roussel  40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jussi Jokinen            Carl Klingberg           Paul Byron               Kevin Connauton          Charles-Olivier Roussel  

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jussi Jokinen            Carl Klingberg           Paul Byron               Kevin Connauton          Charles-Olivier Roussel  

<b>Goaltenders</b>
Starting : Anton Khudobin           
Backup : François Tremblay        
Third : Justin Peters            

<b>Extra Forwards</b>
Normal : Reto Suri, Daniil Zharkov, Danick Martel - PP : Reto Suri, Daniil Zharkov - PK : Danick Martel
<b>Extra Defensemen</b>
Normal : Brooks Orpik, Steve Weinstein, Cale Fleury - PP : Brooks Orpik - PK : Steve Weinstein, Cale Fleury
<b>Penalty Shots</b>
Carl Klingberg, Jussi Jokinen, Paul Byron, Derek Dorsett, Benoit Pouliot
<b>Custom OT Lines Forwards</b>
Carl Klingberg, Jussi Jokinen, Paul Byron, Derek Dorsett, Benoit Pouliot, Daniil Zharkov, Danick Martel, Matthias Plachta, Cody Almond, Jay Beagle
<b>Custom OT Lines Defensemen</b>
Kevin Connauton, Cale Fleury, Jared Spurgeon, Charles-Olivier Roussel, Brooks Orpik

<b>Scratches</b>
Ziga Pance (Healthy), Sebastian Collberg (Healthy), Nikita Zaitsev (Healthy), John Marino (Healthy)</pre></div>
<h1 class="TeamLineFarm_TRD"><a id="Trois-RivièresDraveurs">Trois-Rivières Draveurs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#Trois-RivièresDraveurs">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#Trois-RivièresDraveurs">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#Trois-RivièresDraveurs">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#Trois-RivièresDraveurs">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#Trois-RivièresDraveurs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Trois-RivièresDraveurs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Trois-RivièresDraveurs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Greg McKegg              Martin Reway             Samuel Blais             32     0   2  3  
 2 Dominic Turgeon          Ivan Barbashev           Maximilian Veronneau     30     0   2  3  
 3 Clark Bishop             Clarke MacArthur         Ryan Tesink              28     1   2  2  
 4 Jérémy Grégoire          Lawson Crouse            Ryan White               10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ian McCoshen             Andreas Borgman                                   40     1   2  2  
 2 Rinat Valiev             Dean Kukan                                        35     1   2  2  
 3 Oskars Bartulis          Derek Mathers                                     25     1   2  2  
 4 Ian McCoshen             Oskars Bartulis                                   0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Greg McKegg              Martin Reway             Maximilian Veronneau     60     1   1  3  
 2 Ryan Tesink              Ivan Barbashev           Samuel Blais             40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ian McCoshen             Andreas Borgman                                   60     1   1  3  
 2 Oskars Bartulis          Derek Mathers                                     40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Clark Bishop             Ryan White               60     1   3  1  
 2 Dominic Turgeon          Ryan Tesink              40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oskars Bartulis          Dean Kukan               60     1   3  1  
 2 Ian McCoshen             Andreas Borgman          40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Greg McKegg                                       60     1   3  1  
 2 Clark Bishop                                      40     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oskars Bartulis          Dean Kukan               50     1   4  0  
 2 Ian McCoshen             Andreas Borgman          50     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Greg McKegg              Martin Reway             50     1   2  2  
 2 Ryan Tesink              Clarke MacArthur         50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oskars Bartulis          Ian McCoshen             50     1   2  2  
 2 Andreas Borgman          Rinat Valiev             50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Greg McKegg              Martin Reway             Maximilian Veronneau     Ian McCoshen             Andreas Borgman          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Tesink              Clarke MacArthur         Ryan White               Andreas Borgman          Ian McCoshen             

<b>Goaltenders</b>
Starting : Ilya Samsonov            
Backup : Antoine Bibeau           

<b>Extra Forwards</b>
Normal : Greg McKegg, Samuel Blais, Martin Reway - PP : Martin Reway, Ryan Tesink - PK : Clark Bishop
<b>Extra Defensemen</b>
Normal : Ian McCoshen, Oskars Bartulis, Andreas Borgman - PP : Ian McCoshen - PK : Oskars Bartulis, Ian McCoshen
<b>Penalty Shots</b>
Martin Reway, Clarke MacArthur, Greg McKegg, Ivan Barbashev, Lawson Crouse
<b>Custom OT Lines Forwards</b>
Greg McKegg, Clarke MacArthur, Ryan Tesink, Samuel Blais, Lawson Crouse, Ryan White, Dominic Turgeon, Ivan Barbashev, Maximilian Veronneau, Jérémy Grégoire
<b>Custom OT Lines Defensemen</b>
Ian McCoshen, Andreas Borgman, Rinat Valiev, Oskars Bartulis, Dean Kukan

<b>Scratches</b>
Alex Burrows (Healthy), Mads Eller (Healthy), Andreas Martinsen (Healthy), Jonas Siegenthaler (Healthy), Francis Beauvillier (Healthy)
Nathan Walker (Healthy)</pre></div>
<h1 class="TeamLineFarm_MIL"><a id="MilwaukeeAdmirals">Milwaukee Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#MilwaukeeAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#MilwaukeeAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#MilwaukeeAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#MilwaukeeAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#MilwaukeeAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MilwaukeeAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MilwaukeeAdmirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Miikka Salomäki          Troy Brouwer             Jiri Hudler              25     1   2  2  
 2 John Quenneville         Blake Comeau             Taylor Beck              25     1   2  2  
 3 Cristoval Nieves         Philippe Cornet          Marc-Olivier Roy         25     1   2  2  
 4 Mark Jankowski           Mitch Moroz              Victor Olofsson          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Joshua Jacobs            Alexandre R.Picard                                25     1   2  2  
 2 Dylan Blujus             Ales Kranjc                                       25     1   2  2  
 3 Mads Boedker             Mitch Moroz                                       25     1   2  2  
 4 Joshua Jacobs            Alexandre R.Picard                                25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Miikka Salomäki          Troy Brouwer             Jiri Hudler              60     1   2  2  
 2 John Quenneville         Blake Comeau             Taylor Beck              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Joshua Jacobs            Alexandre R.Picard                                60     1   2  2  
 2 Dylan Blujus             Ales Kranjc                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Troy Brouwer             Jiri Hudler              60     1   2  2  
 2 Blake Comeau             Miikka Salomäki          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joshua Jacobs            Alexandre R.Picard       60     1   2  2  
 2 Dylan Blujus             Ales Kranjc              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Troy Brouwer                                      60     1   2  2  
 2 Jiri Hudler                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joshua Jacobs            Alexandre R.Picard       60     1   2  2  
 2 Dylan Blujus             Ales Kranjc              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Troy Brouwer             Jiri Hudler              60     1   2  2  
 2 Blake Comeau             Miikka Salomäki          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joshua Jacobs            Alexandre R.Picard       60     1   2  2  
 2 Dylan Blujus             Ales Kranjc              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Miikka Salomäki          Troy Brouwer             Jiri Hudler              Joshua Jacobs            Alexandre R.Picard       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Miikka Salomäki          Troy Brouwer             Jiri Hudler              Joshua Jacobs            Alexandre R.Picard       

<b>Goaltenders</b>
Starting : Jonas Gustavsson         
Backup : Louis Domingue           

<b>Extra Forwards</b>
Normal : Michael Latta, Carter Camper, Justin Fontaine - PP : Michael Latta, Carter Camper - PK : Justin Fontaine
<b>Extra Defensemen</b>
Normal : Mads Boedker, Dylan Blujus, Ales Kranjc - PP : Mads Boedker - PK : Dylan Blujus, Ales Kranjc
<b>Penalty Shots</b>
Troy Brouwer, Jiri Hudler, Blake Comeau, Miikka Salomäki, Philippe Cornet
<b>Custom OT Lines Forwards</b>
Troy Brouwer, Jiri Hudler, Blake Comeau, Miikka Salomäki, Philippe Cornet, Taylor Beck, Mitch Moroz, John Quenneville, Cristoval Nieves, Mark Jankowski
<b>Custom OT Lines Defensemen</b>
Joshua Jacobs, Alexandre R.Picard, Dylan Blujus, Ales Kranjc, Mads Boedker

<b>Scratches</b>
Matt Niskanen (Back Spasms Injury), Craig Cunningham (Healthy), Markus Lauridsen (Abdomen/Ribs Injury), Brett Pollock (Healthy), Stuart Percy (Healthy)
Kyle Platzer (Healthy)</pre></div>
<h1 class="TeamLineFarm_ALB"><a id="AlbanyDevils">Albany Devils</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#AlbanyDevils">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#AlbanyDevils">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#AlbanyDevils">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#AlbanyDevils">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#AlbanyDevils">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AlbanyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AlbanyDevils" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Zach Hall                Brenden Morrow           Andreas Johnsson         25     1   2  2  
 2 Dylan Strome             Alexander Delnov         Jackson Houck            25     1   2  2  
 3 Lukas Sutter             Dwight King              Matt Leitner             25     1   2  2  
 4 Scott Glennie            Lucas Lessio             Andrew Fritsch           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Christopher Tanev        Brendan Mikkelson                                 25     1   2  2  
 2 Oliver Lauridsen         Adam Polasek                                      25     1   2  2  
 3 Andy Welinski            Gabriel Carlsson                                  25     1   2  2  
 4 Axel Andersson           Christopher Tanev                                 25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Zach Hall                Brenden Morrow           Andreas Johnsson         60     1   2  2  
 2 Scott Glennie            Alexander Delnov         Jackson Houck            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Christopher Tanev        Brendan Mikkelson                                 60     1   2  2  
 2 Oliver Lauridsen         Adam Polasek                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andreas Johnsson         Brenden Morrow           60     1   2  2  
 2 Alexander Delnov         Jackson Houck            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Christopher Tanev        Brendan Mikkelson        60     1   2  2  
 2 Oliver Lauridsen         Adam Polasek             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Andreas Johnsson                                  60     1   2  2  
 2 Brenden Morrow                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Christopher Tanev        Brendan Mikkelson        60     1   2  2  
 2 Oliver Lauridsen         Adam Polasek             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andreas Johnsson         Brenden Morrow           60     1   2  2  
 2 Alexander Delnov         Jackson Houck            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Christopher Tanev        Brendan Mikkelson        60     1   2  2  
 2 Oliver Lauridsen         Adam Polasek             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Zach Hall                Brenden Morrow           Andreas Johnsson         Christopher Tanev        Brendan Mikkelson        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Zach Hall                Brenden Morrow           Andreas Johnsson         Christopher Tanev        Brendan Mikkelson        

<b>Goaltenders</b>
Starting : Anders Lindback          
Backup : Jeremy Smith             
Third : Scott Wedgewood          

<b>Extra Forwards</b>
Normal : Ales Music, Dwight King, Lukas Sutter - PP : Ales Music, Dwight King - PK : Lukas Sutter
<b>Extra Defensemen</b>
Normal : Andy Welinski, Gabriel Carlsson, Axel Andersson - PP : Andy Welinski - PK : Gabriel Carlsson, Axel Andersson
<b>Penalty Shots</b>
Andreas Johnsson, Brenden Morrow, Alexander Delnov, Jackson Houck, Zach Hall
<b>Custom OT Lines Forwards</b>
Andreas Johnsson, Brenden Morrow, Alexander Delnov, Jackson Houck, Zach Hall, Scott Glennie, Dwight King, Lukas Sutter, Matt Leitner, Dylan Strome
<b>Custom OT Lines Defensemen</b>
Christopher Tanev, Brendan Mikkelson, Oliver Lauridsen, Adam Polasek, Andy Welinski

<b>Scratches</b>
Brooks Laich (Healthy), Curtis Glencross (Healthy)</pre></div>
<h1 class="TeamLineFarm_BRI"><a id="BridgeportSoundTigers">Bridgeport Sound Tigers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#BridgeportSoundTigers">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#BridgeportSoundTigers">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#BridgeportSoundTigers">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#BridgeportSoundTigers">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#BridgeportSoundTigers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BridgeportSoundTigers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BridgeportSoundTigers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Radek Faksa              Jared McCann             Tyson Baillie            25     1   2  2  
 2 Johan Sundstrom          Nikita Scherbak          Kerby Rychel             25     1   2  2  
 3 Dane Fox                 Jonathan Dahlen          Julien Gauthier          25     1   2  2  
 4 Sean Malone              Broc Little              Luke Kunin               25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitry Korobov           Trevor Murphy                                     25     1   2  2  
 2 Brenden Kichton          Cale Makar                                        25     1   2  2  
 3 Alexandre Carrier        Sean Malone                                       25     1   2  2  
 4 Dmitry Korobov           Trevor Murphy                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Radek Faksa              Jared McCann             Tyson Baillie            60     1   2  2  
 2 Johan Sundstrom          Nikita Scherbak          Kerby Rychel             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitry Korobov           Trevor Murphy                                     60     1   2  2  
 2 Brenden Kichton          Cale Makar                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Radek Faksa              Jared McCann             60     1   2  2  
 2 Tyson Baillie            Johan Sundstrom          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitry Korobov           Trevor Murphy            60     1   2  2  
 2 Brenden Kichton          Cale Makar               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Radek Faksa                                       60     1   2  2  
 2 Jared McCann                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitry Korobov           Trevor Murphy            60     1   2  2  
 2 Brenden Kichton          Cale Makar               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Radek Faksa              Jared McCann             60     1   2  2  
 2 Tyson Baillie            Johan Sundstrom          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitry Korobov           Trevor Murphy            60     1   2  2  
 2 Brenden Kichton          Cale Makar               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Radek Faksa              Jared McCann             Tyson Baillie            Dmitry Korobov           Trevor Murphy            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Radek Faksa              Jared McCann             Tyson Baillie            Dmitry Korobov           Trevor Murphy            

<b>Goaltenders</b>
Starting : Callum Booth             
Backup : Shamil Shmakov           

<b>Extra Forwards</b>
Normal : Jared McCann, Radek Faksa, Dane Fox - PP : Radek Faksa, Jared McCann - PK : Dane Fox
<b>Extra Defensemen</b>
Normal : Alexandre Carrier, Brenden Kichton, Cale Makar - PP : Alexandre Carrier - PK : Brenden Kichton, Cale Makar
<b>Penalty Shots</b>
Radek Faksa, Jared McCann, Tyson Baillie, Johan Sundstrom, Nikita Scherbak
<b>Custom OT Lines Forwards</b>
Radek Faksa, Jared McCann, Tyson Baillie, Johan Sundstrom, Nikita Scherbak, Dane Fox, Sean Malone, Kerby Rychel, Julien Gauthier, Luke Kunin
<b>Custom OT Lines Defensemen</b>
Dmitry Korobov, Trevor Murphy, Brenden Kichton, Cale Makar, Alexandre Carrier

<b>Scratches</b>
Antoine Marcoux (Healthy), Adam Boqvist (Healthy), Kelly Klima (Healthy), Logan Brown (Healthy)</pre></div>
<h1 class="TeamLineFarm_CTW"><a id="ConnecticutWhale">Connecticut Whale</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#ConnecticutWhale">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#ConnecticutWhale">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#ConnecticutWhale">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#ConnecticutWhale">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#ConnecticutWhale">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ConnecticutWhale');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ConnecticutWhale" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Christian Fischer        Denis Guryanov           Travis Konecny           25     1   2  2  
 2 Carter Verhaeghe         Erik Haula               Jakub Vrana              25     1   2  2  
 3 Trent Frederic           Tyson Jost               Denis Malgin             25     1   2  2  
 4 Travis Konecny           J.T. Compher             Denis Guryanov           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brandon Carlo            Christian Folin                                   34     1   2  2  
 2 Kevin Czuczman           Gustav Forsling                                   33     1   2  2  
 3 Adam Pelech              Ethan Bear                                        33     1   2  2  
 4 Brandon Carlo            Adam Pelech                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Travis Konecny           Erik Haula               Carter Verhaeghe         60     1   2  2  
 2 Tyson Jost               Denis Guryanov           Christian Fischer        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Pelech              Brandon Carlo                                     60     1   2  2  
 2 Ethan Bear               Gustav Forsling                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Christian Fischer        Tyson Jost               60     1   2  2  
 2 Erik Haula               Denis Guryanov           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Carlo            Adam Pelech              60     1   2  2  
 2 Gustav Forsling          Kevin Czuczman           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Erik Haula                                        60     1   2  2  
 2 Denis Guryanov                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Carlo            Adam Pelech              60     1   2  2  
 2 Ethan Bear               Gustav Forsling          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Carter Verhaeghe         Trent Frederic           60     1   2  2  
 2 Erik Haula               Denis Guryanov           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Carlo            Adam Pelech              60     1   2  2  
 2 Ethan Bear               Gustav Forsling          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Travis Konecny           Erik Haula               Denis Guryanov           Gustav Forsling          Brandon Carlo            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Travis Konecny           Erik Haula               Denis Guryanov           Adam Pelech              Brandon Carlo            

<b>Goaltenders</b>
Starting : Anthony Stolarz          
Backup : Felix Sandström          
Third : Matej Tomek              

<b>Extra Forwards</b>
Normal : Denis Guryanov, Carter Verhaeghe, Trent Frederic - PP : Denis Guryanov, Carter Verhaeghe - PK : Trent Frederic
<b>Extra Defensemen</b>
Normal : Brandon Carlo, Gustav Forsling, Adam Pelech - PP : Gustav Forsling - PK : Brandon Carlo, Adam Pelech
<b>Penalty Shots</b>
Travis Konecny, Christian Fischer, Erik Haula, Denis Guryanov, Tyson Jost
<b>Custom OT Lines Forwards</b>
Travis Konecny, Denis Malgin, Erik Haula, Denis Guryanov, Tyson Jost, Jakub Vrana, Carter Verhaeghe, Christian Fischer, Trent Frederic, J.T. Compher
<b>Custom OT Lines Defensemen</b>
Brandon Carlo, Ethan Bear, Christian Folin, Gustav Forsling, Adam Pelech

<b>Scratches</b>
Damir Zhafyarov (Healthy), Chris Bigras (Healthy), Jesper Bratt (Healthy), Henrik Borgstrom (Healthy), Jake DeBrusk (Healthy)</pre></div>
<h1 class="TeamLineFarm_BNG"><a id="BinghamtonSenators">Binghamton Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#BinghamtonSenators">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#BinghamtonSenators">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#BinghamtonSenators">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#BinghamtonSenators">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#BinghamtonSenators">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BinghamtonSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BinghamtonSenators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Calle Jarnkrok           Dany Heatley             Matt Puempel             25     1   2  2  
 2 Connor Rankin            Derek Grant              Joel Armia               25     1   2  2  
 3 Blair Betts              Gustav Possler           Nick Baptiste            25     1   2  2  
 4 Matt Schmalz             Andre Petersson          Dany Heatley             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Bieksa             Brian Strait                                      25     1   2  2  
 2 Rob O'Gara               Gustav Olofsson                                   25     1   2  2  
 3 Andrew Nielsen           Filip Berglund                                    25     1   2  2  
 4 Jakub Nakládal           Cody Donaghey                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Calle Jarnkrok           Dany Heatley             Matt Puempel             60     1   2  2  
 2 Connor Rankin            Derek Grant              Joel Armia               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Bieksa             Brian Strait                                      60     1   2  2  
 2 Rob O'Gara               Gustav Olofsson                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dany Heatley             Matt Puempel             60     1   2  2  
 2 Joel Armia               Calle Jarnkrok           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Bieksa             Brian Strait             60     1   2  2  
 2 Rob O'Gara               Gustav Olofsson          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dany Heatley                                      60     1   2  2  
 2 Matt Puempel                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Bieksa             Brian Strait             60     1   2  2  
 2 Rob O'Gara               Gustav Olofsson          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dany Heatley             Matt Puempel             60     1   2  2  
 2 Joel Armia               Calle Jarnkrok           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Bieksa             Brian Strait             60     1   2  2  
 2 Rob O'Gara               Gustav Olofsson          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Calle Jarnkrok           Dany Heatley             Matt Puempel             Kevin Bieksa             Brian Strait             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Calle Jarnkrok           Dany Heatley             Matt Puempel             Kevin Bieksa             Brian Strait             

<b>Goaltenders</b>
Starting : Igor Bobkov              
Backup : Denis Godla              
Third : Stephon Williams         

<b>Extra Forwards</b>
Normal : Marcus Sorensen, Nick Baptiste, Blair Betts - PP : Marcus Sorensen, Nick Baptiste - PK : Blair Betts
<b>Extra Defensemen</b>
Normal : Andrew Nielsen, Filip Berglund, Jakub Nakládal - PP : Andrew Nielsen - PK : Filip Berglund, Jakub Nakládal
<b>Penalty Shots</b>
Dany Heatley, Matt Puempel, Joel Armia, Calle Jarnkrok, Nick Baptiste
<b>Custom OT Lines Forwards</b>
Dany Heatley, Matt Puempel, Joel Armia, Calle Jarnkrok, Nick Baptiste, Connor Rankin, Derek Grant, Blair Betts, Gustav Possler, Andre Petersson
<b>Custom OT Lines Defensemen</b>
Kevin Bieksa, Brian Strait, Rob O'Gara, Gustav Olofsson, Andrew Nielsen

<b>Scratches</b>
Derek Joslin (Healthy), Jeff Schultz (Healthy), Max McCormick (Healthy), Eric Locke (Healthy)</pre></div>
<h1 class="TeamLineFarm_ADK"><a id="AdirondackPhantoms">Adirondack Phantoms</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#AdirondackPhantoms">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#AdirondackPhantoms">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#AdirondackPhantoms">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#AdirondackPhantoms">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#AdirondackPhantoms">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AdirondackPhantoms');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AdirondackPhantoms" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Stephane Da Costa        Michael Parks            Christian Hanson         35     0   1  4  
 2 Tom Pyatt                Jerome Samson            Alexandre Mallet         30     0   1  4  
 3 Alexis Loiseau           Matt Read                Spencer Machacek         20     1   2  2  
 4 Stephane Da Costa        Alexandre Mallet         Spencer Machacek         15     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Randy Gazzola            Alex Plante                                       25     1   2  2  
 2 Taylor Chorney           Daniel Brickley                                   25     1   2  2  
 3 Markus Niemelainen       Kale Clague                                       25     1   2  2  
 4 Alex Plante              Daniel Brickley                                   25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alexis Loiseau           Stephane Da Costa        Michael Parks            60     1   2  2  
 2 Matt Read                Spencer Machacek         Alexandre Mallet         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Plante              Markus Niemelainen                                60     1   2  2  
 2 Taylor Chorney           Daniel Brickley                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Spencer Machacek         Alexis Loiseau           60     1   2  2  
 2 Alexandre Mallet         Stephane Da Costa        40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney           60     1   2  2  
 2 Markus Niemelainen       Daniel Brickley          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Stephane Da Costa                                 60     1   2  2  
 2 Alexis Loiseau                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Plante              Markus Niemelainen       60     1   2  2  
 2 Randy Gazzola            Daniel Brickley          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexis Loiseau           Spencer Machacek         60     1   2  2  
 2 Michael Parks            Stephane Da Costa        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Markus Niemelainen       Alex Plante              60     1   2  2  
 2 Taylor Chorney           Daniel Brickley          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Stephane Da Costa        Spencer Machacek         Michael Parks            Alex Plante              Taylor Chorney           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Stephane Da Costa        Spencer Machacek         Michael Parks            Alex Plante              Taylor Chorney           

<b>Goaltenders</b>
Starting : Zane McIntyre            
Backup : Allen York               

<b>Extra Forwards</b>
Normal : Stephane Da Costa, Alexis Loiseau, Spencer Machacek - PP : Stephane Da Costa, Alexis Loiseau - PK : Alexis Loiseau
<b>Extra Defensemen</b>
Normal : Markus Niemelainen, Daniel Brickley, Alex Plante - PP : Markus Niemelainen - PK : Daniel Brickley, Alex Plante
<b>Penalty Shots</b>
Alexandre Mallet, Alexis Loiseau, Michael Parks, Spencer Machacek, Stephane Da Costa
<b>Custom OT Lines Forwards</b>
Christian Hanson, Stephane Da Costa, Michael Parks, Tom Pyatt, Jerome Samson, Alexis Loiseau, Jared Staal, Matt Read, Alexandre Mallet, Spencer Machacek
<b>Custom OT Lines Defensemen</b>
Alex Plante, Markus Niemelainen, Kale Clague, Daniel Brickley, Taylor Chorney

<b>Scratches</b>
Fredrik Karlstrom (Healthy), Emil Bemstrom (Healthy), Jacob Peterson (Healthy), Nikita Popugaev (Healthy)</pre></div>
<h1 class="TeamLineFarm_WBS"><a id="Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#Wilkes-Barre/ScrantonPenguins">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#Wilkes-Barre/ScrantonPenguins">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#Wilkes-Barre/ScrantonPenguins">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#Wilkes-Barre/ScrantonPenguins">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#Wilkes-Barre/ScrantonPenguins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wilkes-Barre/ScrantonPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wilkes-Barre/ScrantonPenguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Shannon             Milan Michalek           Ales Hemsky              33     0   0  5  
 2 Matthew Lombardi         Antti Pihlstrom          Martin Erat              32     0   0  5  
 3 Adam Hall                Chad Ruhwedel            David Jones              30     1   2  2  
 4 Mike Ribeiro             Brandon Prust            Ryan Shannon             5      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brian Dumoulin           Justin Braun                                      36     0   1  4  
 2 Anton Stralman           Matthew Corrente                                  34     0   1  4  
 3 Kevan Miller             Niklas Kronwall                                   25     0   4  1  
 4 Zbynek Michalek          Matthew Corrente                                  5      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Shannon             Milan Michalek           Ales Hemsky              60     3   0  2  
 2 Brandon Prust            David Jones              Martin Erat              40     3   0  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brian Dumoulin           Justin Braun                                      60     3   0  2  
 2 Anton Babchuk            Anton Stralman                                    40     3   0  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Shannon             Adam Hall                60     1   2  2  
 2 Brandon Prust            Milan Michalek           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brian Dumoulin           Justin Braun             60     1   2  2  
 2 Anton Stralman           Kevan Miller             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 David Jones                                       60     1   2  2  
 2 Ales Hemsky                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Stralman           Niklas Kronwall          60     1   2  2  
 2 Anton Babchuk            Justin Braun             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Shannon             Ales Hemsky              60     1   2  2  
 2 Brandon Prust            Milan Michalek           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brian Dumoulin           Justin Braun             60     1   2  2  
 2 Anton Stralman           Kevan Miller             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Shannon             Antti Pihlstrom          Ales Hemsky              Justin Braun             Chad Ruhwedel            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Shannon             David Jones              Brandon Prust            Anton Stralman           Niklas Kronwall          

<b>Goaltenders</b>
Starting : Jeff Drouin-Deslauriers  
Backup : Alex Lyon                
Third : Alexander Pechursky      

<b>Extra Forwards</b>
Normal : Ales Hemsky, Adam Hall, David Jones - PP : Ales Hemsky, Adam Hall - PK : Brandon Prust
<b>Extra Defensemen</b>
Normal : Brian Campbell, Kevan Miller, Brian Dumoulin - PP : Brian Campbell - PK : Kevan Miller, Brian Dumoulin
<b>Penalty Shots</b>
David Jones, Martin Erat, Brandon Prust, Milan Michalek, Ryan Shannon
<b>Custom OT Lines Forwards</b>
David Jones, Mike Ribeiro, Brandon Prust, Milan Michalek, Ryan Shannon, Martin Erat, Ales Hemsky, Adam Hall, Chad Ruhwedel, Antti Pihlstrom
<b>Custom OT Lines Defensemen</b>
Anton Stralman, Niklas Kronwall, Anton Babchuk, Justin Braun, Kevan Miller

<b>Scratches</b>
Alexander Frolov (Healthy), Andy Greene (Healthy), Brian Gionta (Healthy), Garrett Meurs (Healthy), Francis Verreault-Paul (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="ChicoutimiSaguenéens">Chicoutimi Saguenéens</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#ChicoutimiSaguenéens">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#ChicoutimiSaguenéens">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#ChicoutimiSaguenéens">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#ChicoutimiSaguenéens">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#ChicoutimiSaguenéens">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicoutimiSaguenéens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicoutimiSaguenéens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Nevins              Brett MacLean            Christopher Higgins      25     1   2  2  
 2 Alexandre Picard         J.T. Brown               Philip Lane              25     1   2  2  
 3 Connor Crisp             Christopher Clapperton   Alexander Avtsin         25     1   2  2  
 4 Brett MacLean            Ben Hanowski             Justin Bailey            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nick Ebert               Dillon Fournier                                   25     1   2  2  
 2 Matt Greene              Mikael Wikstrand                                  25     1   2  2  
 3 Andre Benoit             Mark Streit                                       25     1   2  2  
 4 Matt Greene              Dillon Fournier                                   25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Nevins              Brett MacLean            Christopher Higgins      60     1   2  2  
 2 Alexandre Picard         J.T. Brown               Philip Lane              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nick Ebert               Dillon Fournier                                   60     1   2  2  
 2 Matt Greene              Mikael Wikstrand                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brett MacLean            Christopher Higgins      60     1   2  2  
 2 Philip Lane              Alexander Avtsin         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andre Benoit             Dillon Fournier          60     1   2  2  
 2 Matt Greene              Mikael Wikstrand         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brett MacLean                                     60     1   2  2  
 2 Christopher Higgins                               40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nick Ebert               Dillon Fournier          60     1   2  2  
 2 Matt Greene              Mikael Wikstrand         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brett MacLean            Christopher Higgins      60     1   2  2  
 2 Philip Lane              Alexander Avtsin         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Streit              Dillon Fournier          60     1   2  2  
 2 Matt Greene              Mikael Wikstrand         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Nevins              Brett MacLean            Christopher Higgins      Nick Ebert               Dillon Fournier          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Nevins              Brett MacLean            Christopher Higgins      Nick Ebert               Dillon Fournier          

<b>Goaltenders</b>
Starting : Mason McDonald           
Backup : Ivan Nalimov             

<b>Extra Forwards</b>
Normal : Vitali Abramov, Raphaël Kuonen, Bokondji Imama - PP : Vitali Abramov, Raphaël Kuonen - PK : Bokondji Imama
<b>Extra Defensemen</b>
Normal : Andre Benoit, Mark Streit, Matt Greene - PP : Andre Benoit - PK : Mark Streit, Matt Greene
<b>Penalty Shots</b>
Brett MacLean, Christopher Higgins, Philip Lane, Alexander Avtsin, Justin Bailey
<b>Custom OT Lines Forwards</b>
Brett MacLean, Christopher Higgins, Philip Lane, Alexander Avtsin, Justin Bailey, J.T. Brown, Christopher Clapperton, Jack Nevins, Ben Hanowski, Vitali Abramov
<b>Custom OT Lines Defensemen</b>
Mark Streit, Dillon Fournier, Matt Greene, Mikael Wikstrand, Andre Benoit

<b>Scratches</b>
Alexander Killorn (Healthy), Josh Archibald (Healthy), Alexis Pepin (Healthy), Shane Eiserman (Healthy)</pre></div>
<h1 class="TeamLineFarm_RNO"><a id="Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#Rouyn-NorandaHuskies">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#Rouyn-NorandaHuskies">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#Rouyn-NorandaHuskies">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#Rouyn-NorandaHuskies">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#Rouyn-NorandaHuskies">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rouyn-NorandaHuskies');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rouyn-NorandaHuskies" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Eric Wellwood            Reid Boucher             Nicolas Deslauriers      25     1   2  2  
 2 Liam O'Brien             A.J. Greer               Antoine Waked            25     1   2  2  
 3 Maxime St-Cyr            Julien Nantel            Jordan Nolan             25     1   2  2  
 4 Francis Perron           Martins Dzierkals        Jean-Sébastien Dea       25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Andrew O'Brien           Jérémy Lauzon                                     25     1   2  2  
 2 Sébastien Piché          Nikolas Brouillard                                25     1   2  2  
 3 Mathieu Brisebois        Francis Perron                                    25     1   2  2  
 4 Andrew O'Brien           Jérémy Lauzon                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Eric Wellwood            Reid Boucher             Nicolas Deslauriers      60     1   2  2  
 2 Liam O'Brien             A.J. Greer               Antoine Waked            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Andrew O'Brien           Jérémy Lauzon                                     60     1   2  2  
 2 Sébastien Piché          Nikolas Brouillard                                40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Reid Boucher             A.J. Greer               60     1   2  2  
 2 Nicolas Deslauriers      Eric Wellwood            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrew O'Brien           Jérémy Lauzon            60     1   2  2  
 2 Sébastien Piché          Nikolas Brouillard       40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Reid Boucher                                      60     1   2  2  
 2 A.J. Greer                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrew O'Brien           Jérémy Lauzon            60     1   2  2  
 2 Sébastien Piché          Nikolas Brouillard       40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Reid Boucher             A.J. Greer               60     1   2  2  
 2 Nicolas Deslauriers      Eric Wellwood            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrew O'Brien           Jérémy Lauzon            60     1   2  2  
 2 Sébastien Piché          Nikolas Brouillard       40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Eric Wellwood            Reid Boucher             Nicolas Deslauriers      Andrew O'Brien           Jérémy Lauzon            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Eric Wellwood            Reid Boucher             Nicolas Deslauriers      Andrew O'Brien           Jérémy Lauzon            

<b>Goaltenders</b>
Starting : Mike Smith               
Backup : Alex Nedeljkovic         
Third : Alexandre Bélanger       

<b>Extra Forwards</b>
Normal : Alexandre Fortin, Jean-Christophe Beaudin, Manuel Wiederer - PP : Alexandre Fortin, Jean-Christophe Beaudin - PK : Manuel Wiederer
<b>Extra Defensemen</b>
Normal : Mathieu Brisebois, Sébastien Piché, Nikolas Brouillard - PP : Mathieu Brisebois - PK : Sébastien Piché, Nikolas Brouillard
<b>Penalty Shots</b>
Reid Boucher, A.J. Greer, Nicolas Deslauriers, Eric Wellwood, Liam O'Brien
<b>Custom OT Lines Forwards</b>
Reid Boucher, A.J. Greer, Nicolas Deslauriers, Eric Wellwood, Liam O'Brien, Maxime St-Cyr, Julien Nantel, Francis Perron, Antoine Waked, Martins Dzierkals
<b>Custom OT Lines Defensemen</b>
Andrew O'Brien, Jérémy Lauzon, Sébastien Piché, Nikolas Brouillard, Mathieu Brisebois

<b>Scratches</b>
Bruno-Carl Denis (Healthy), Grant Clitsome (Healthy), Philippe Myers (Healthy), Mattias Backman (Healthy)</pre></div>
<h1 class="TeamLineFarm_MIA"><a id="MercerIslandArchangels">Mercer Island Archangels</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Saints Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#SeattleSaints">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#MercerIslandArchangels">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#MercerIslandArchangels">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#MercerIslandArchangels">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#MercerIslandArchangels">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#MercerIslandArchangels">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MercerIslandArchangels');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MercerIslandArchangels" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikhail Grabovski        Wojtek Wolski            Kirill Petrov            25     0   1  4  
 2 Philip McRae             Trevor Cox               Alex Chiasson            25     0   1  4  
 3 Nick Bonino              Yan-Pavel Laplante       Brandon Kozun            25     0   1  4  
 4 Connor Hurley            Pius Suter               Sam Kurker               25     0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Connor Clifton           Dalton Prout                                      25     0   1  4  
 2 Brian Lashoff            Eric Gryba                                        25     0   1  4  
 3 Mac Bennett              John Nyberg                                       25     0   1  4  
 4 Connor Clifton           Brian Lashoff                                     25     0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikhail Grabovski        Wojtek Wolski            Kirill Petrov            60     0   0  5  
 2 Philip McRae             Trevor Cox               Alex Chiasson            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Connor Clifton           Dalton Prout                                      60     0   0  5  
 2 Brian Lashoff            Mac Bennett                                       40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alex Chiasson            Mikhail Grabovski        60     0   5  0  
 2 Wojtek Wolski            Philip McRae             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mac Bennett              Dalton Prout             60     0   5  0  
 2 Brian Lashoff            Connor Clifton           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Wojtek Wolski                                     60     0   5  0  
 2 Mikhail Grabovski                                 40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Connor Clifton           Dalton Prout             60     0   5  0  
 2 Brian Lashoff            John Nyberg              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alex Chiasson            Mikhail Grabovski        60     0   1  4  
 2 Wojtek Wolski            Philip McRae             40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Nyberg              Dalton Prout             60     0   1  4  
 2 Brian Lashoff            Connor Clifton           40     0   1  4  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikhail Grabovski        Wojtek Wolski            Alex Chiasson            Brian Lashoff            Dalton Prout             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikhail Grabovski        Wojtek Wolski            Alex Chiasson            Brian Lashoff            Dalton Prout             

<b>Goaltenders</b>
Starting : Chet Pickard             
Backup : Chad Johnson             
Third : Mike Condon              

<b>Extra Forwards</b>
Normal : Nick Bonino, Brandon Kozun, Connor Hurley - PP : Nick Bonino, Brandon Kozun - PK : Connor Hurley
<b>Extra Defensemen</b>
Normal : Mac Bennett, John Nyberg, Connor Clifton - PP : Mac Bennett - PK : John Nyberg, Connor Clifton
<b>Penalty Shots</b>
Brandon Kozun, Mikhail Grabovski, Wojtek Wolski, Philip McRae, Alex Chiasson
<b>Custom OT Lines Forwards</b>
Pius Suter, Mikhail Grabovski, Wojtek Wolski, Philip McRae, Alex Chiasson, Nick Bonino, Brandon Kozun, Kirill Petrov, Trevor Cox, Yan-Pavel Laplante
<b>Custom OT Lines Defensemen</b>
John Nyberg, Dalton Prout, Brian Lashoff, Connor Clifton, Mac Bennett

<b>Scratches</b>
Justin Falk (Healthy), Vinny Saponari (Healthy), Jason Akeson (Healthy), Matthew Irwin (Healthy), Jesper Jensen (Healthy)</pre></div>
<h1 class="TeamLineFarm_PEO"><a id="PeoriaRivermen">Peoria Rivermen</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#PeoriaRivermen">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#PeoriaRivermen">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#PeoriaRivermen">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#PeoriaRivermen">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#PeoriaRivermen">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PeoriaRivermen');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PeoriaRivermen" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Peter Regin              Mattias Ritola           Jordan Szwarz            38     1   0  4  
 2 Michael Santorelli       Yohann Auvitu            Mike Vecchione           35     1   0  4  
 3 Dustin Boyd              Borna Rendulic           Sebastian Wannstrom      20     0   2  3  
 4 Michael Santorelli       Jake Chelios             Jamie McGinn             7      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jan Rutta                Alexei Emelin                                     39     1   1  3  
 2 Alex Grant               Johnny Boychuk                                    37     1   1  3  
 3 Frederic St-Denis        Mathieu Carle                                     20     1   1  3  
 4 Alex Grant               Mathieu Carle                                     4      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Peter Regin              Michael Santorelli       Sebastian Wannstrom      60     1   2  2  
 2 Dustin Boyd              Mattias Ritola           Mike Vecchione           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jan Rutta                Alex Grant                                        60     1   0  4  
 2 Alexei Emelin            Mathieu Carle                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Santorelli       Jamie McGinn             60     1   4  0  
 2 Peter Regin              Mattias Ritola           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Johnny Boychuk           Jan Rutta                60     1   2  2  
 2 Alexei Emelin            Alex Grant               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jamie McGinn                                      60     1   2  2  
 2 Peter Regin                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Johnny Boychuk           Jan Rutta                60     1   2  2  
 2 Alexei Emelin            Alex Grant               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dustin Boyd              Sebastian Wannstrom      60     1   2  2  
 2 Mattias Ritola           Michael Santorelli       40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mathieu Carle            Alexei Emelin            60     1   2  2  
 2 Johnny Boychuk           Alex Grant               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Santorelli       Peter Regin              Sebastian Wannstrom      Alex Grant               Jan Rutta                

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Santorelli       Jake Chelios             Jamie McGinn             Jan Rutta                Alexei Emelin            

<b>Goaltenders</b>
Starting : Leland Irving            
Backup : Sami Aittokallio         
Third : Andrey Makarov           

<b>Extra Forwards</b>
Normal : Sebastian Wannstrom, Jordan Szwarz, Borna Rendulic - PP : Michael Santorelli, Yohann Auvitu  - PK : Yohann Auvitu 
<b>Extra Defensemen</b>
Normal : Alex Grant, Alexei Emelin, Johnny Boychuk - PP : Alexei Emelin - PK : Alex Grant, Johnny Boychuk
<b>Penalty Shots</b>
Mattias Ritola, Sebastian Wannstrom, Jordan Szwarz, Michael Santorelli, Jamie McGinn
<b>Custom OT Lines Forwards</b>
Yohann Auvitu , Borna Rendulic, Michael Santorelli, Peter Regin, Jamie McGinn, Mattias Ritola, Mike Vecchione, Sebastian Wannstrom, Jake Chelios, Dustin Boyd
<b>Custom OT Lines Defensemen</b>
Alex Grant, Jan Rutta, Alexei Emelin, Mathieu Carle, Johnny Boychuk

<b>Scratches</b>
Daniel Carcillo (Healthy), Francis Charette (Healthy), Kevin Dallman (Healthy)</pre></div>
<h1 class="TeamLineFarm_NOR"><a id="NorfolkAdmirals">Norfolk Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#NorfolkAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#NorfolkAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#NorfolkAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#NorfolkAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#NorfolkAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NorfolkAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NorfolkAdmirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Carl Soderberg           Pontus Aberg             Jason Pominville         25     1   2  2  
 2 Brian Sutherby           Daniel Carr              Adam Burish              25     1   2  2  
 3 Denis Golubev            Austin Wagner            Anthony Stewart          25     1   2  2  
 4 Jason Pominville         Aaron Palushaj           Pavel Padakin            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jason Garrison           Adam Janosik                                      25     1   2  2  
 2 Radko Gudas              Luke Witkowski                                    25     1   2  2  
 3 Guillaume Brisebois      Pavel Padakin                                     25     1   2  2  
 4 Jason Garrison           Radko Gudas                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Carl Soderberg           Pontus Aberg             Jason Pominville         60     1   2  2  
 2 Brian Sutherby           Daniel Carr              Adam Burish              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jason Garrison           Guillaume Brisebois                               60     1   2  2  
 2 Radko Gudas              Luke Witkowski                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jason Pominville         Pontus Aberg             60     1   2  2  
 2 Adam Burish              Anthony Stewart          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jason Garrison           Guillaume Brisebois      60     1   2  2  
 2 Radko Gudas              Luke Witkowski           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jason Pominville                                  60     1   2  2  
 2 Pontus Aberg                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jason Garrison           Guillaume Brisebois      60     1   2  2  
 2 Radko Gudas              Luke Witkowski           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jason Pominville         Pontus Aberg             60     1   2  2  
 2 Adam Burish              Anthony Stewart          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jason Garrison           Adam Janosik             60     1   2  2  
 2 Radko Gudas              Luke Witkowski           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Carl Soderberg           Pontus Aberg             Jason Pominville         Jason Garrison           Radko Gudas              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Carl Soderberg           Pontus Aberg             Jason Pominville         Jason Garrison           Radko Gudas              

<b>Goaltenders</b>
Starting : Jaroslav Janus           
Backup : Konstantin Barulin       
Third : Adam Wilcox              

<b>Extra Forwards</b>
Normal : Nicolas Aubé-Kubel, Dmytro Timashov, Austin Wagner - PP : Nicolas Aubé-Kubel, Dmytro Timashov - PK : Austin Wagner
<b>Extra Defensemen</b>
Normal : Guillaume Brisebois, Radko Gudas, Luke Witkowski - PP : Guillaume Brisebois - PK : Radko Gudas, Luke Witkowski
<b>Penalty Shots</b>
Jason Pominville, Pontus Aberg, Adam Burish, Anthony Stewart, Luke Witkowski
<b>Custom OT Lines Forwards</b>
Jason Pominville, Pontus Aberg, Adam Burish, Anthony Stewart, Luke Witkowski, Carl Soderberg, Daniel Carr, Pavel Padakin, Nicolas Aubé-Kubel, Austin Wagner
<b>Custom OT Lines Defensemen</b>
Jason Garrison, Adam Janosik, Radko Gudas, Luke Witkowski, Guillaume Brisebois

<b>Scratches</b>
Stefan Chaput (Healthy), Brandon Burlon (Healthy)</pre></div>
<h1 class="TeamLineFarm_ROB"><a id="RobervalDwarfs">Roberval Dwarfs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#RobervalDwarfs">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#RobervalDwarfs">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#RobervalDwarfs">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#RobervalDwarfs">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#RobervalDwarfs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RobervalDwarfs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RobervalDwarfs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Charles Hudon            Andrew Agozzino          Stanislav Galiev         25     1   2  2  
 2 Mark Olver               Artturi Lehkonen         Alexander Barabanov      25     1   2  2  
 3 Dominic Moore            Kasperi Kapanen          David Legwand            25     1   2  2  
 4 Andrew Crescenzi         Petrus Palmu             Lennart Petrell          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Taormina            Pavel Valentenko                                  25     1   2  2  
 2 Ilya Lyubushkin          Eetu Sopanen                                      25     1   2  2  
 3 Robin Salo               Andrew Crescenzi                                  25     1   2  2  
 4 Matt Taormina            Pavel Valentenko                                  25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Charles Hudon            Andrew Agozzino          Stanislav Galiev         60     1   2  2  
 2 Mark Olver               Artturi Lehkonen         Alexander Barabanov      40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Taormina            Pavel Valentenko                                  60     1   2  2  
 2 Ilya Lyubushkin          Eetu Sopanen                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Charles Hudon            Andrew Agozzino          60     1   2  2  
 2 Mark Olver               Stanislav Galiev         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Taormina            Pavel Valentenko         60     1   2  2  
 2 Ilya Lyubushkin          Eetu Sopanen             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Charles Hudon                                     60     1   2  2  
 2 Andrew Agozzino                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Taormina            Pavel Valentenko         60     1   2  2  
 2 Ilya Lyubushkin          Eetu Sopanen             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Charles Hudon            Andrew Agozzino          60     1   2  2  
 2 Mark Olver               Stanislav Galiev         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Taormina            Pavel Valentenko         60     1   2  2  
 2 Ilya Lyubushkin          Eetu Sopanen             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Charles Hudon            Andrew Agozzino          Stanislav Galiev         Matt Taormina            Pavel Valentenko         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Charles Hudon            Andrew Agozzino          Stanislav Galiev         Matt Taormina            Pavel Valentenko         

<b>Goaltenders</b>
Starting : Timo Pielmeier           
Backup : Garret Sparks            
Third : Alex Stalock             

<b>Extra Forwards</b>
Normal : Aleksi Saarela, Justin Kirkland, Dominic Moore - PP : Aleksi Saarela, Justin Kirkland - PK : Dominic Moore
<b>Extra Defensemen</b>
Normal : Robin Salo, Ilya Lyubushkin, Eetu Sopanen - PP : Robin Salo - PK : Ilya Lyubushkin, Eetu Sopanen
<b>Penalty Shots</b>
Charles Hudon, Andrew Agozzino, Mark Olver, Stanislav Galiev, Artturi Lehkonen
<b>Custom OT Lines Forwards</b>
Charles Hudon, Andrew Agozzino, Mark Olver, Stanislav Galiev, Artturi Lehkonen, Dominic Moore, Alexander Barabanov, Andrew Crescenzi, Kasperi Kapanen, David Legwand
<b>Custom OT Lines Defensemen</b>
Matt Taormina, Pavel Valentenko, Ilya Lyubushkin, Eetu Sopanen, Robin Salo

<b>Scratches</b>
Joe Finley (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="ChicagoWolves">Chicago Wolves</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#ChicagoWolves">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#ChicagoWolves">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#ChicagoWolves">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#ChicagoWolves">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#ChicagoWolves">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoWolves');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoWolves" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Cooper Marody            Joseph Labate            Riley Nash               25     1   2  2  
 2 Michael Raffl            Mats Zuccarello          Nicklas Jensen           25     1   2  2  
 3 Alex Friesen             Tim Connolly             Alexandre Grenier        25     1   2  2  
 4 Riley Nash               Mats Zuccarello          Mathieu Perreault        25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Julius Bergman           Dennis Persson                                    25     1   2  2  
 2 Bobby Sanguinetti        Teemu Laakso                                      25     1   2  2  
 3 Patrick McNally          Brad Hunt                                         25     1   2  2  
 4 Julius Bergman           Dennis Persson                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joseph Labate            Michael Raffl            Riley Nash               60     1   2  2  
 2 Cooper Marody            Mats Zuccarello          Nicklas Jensen           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Bobby Sanguinetti        Dennis Persson                                    60     1   2  2  
 2 Patrick McNally          Julius Bergman                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cooper Marody            Michael Raffl            60     1   2  2  
 2 Joseph Labate            Riley Nash               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brad Hunt                Dennis Persson           60     1   2  2  
 2 Patrick McNally          Julius Bergman           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Riley Nash                                        60     1   2  2  
 2 Michael Raffl                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Patrick McNally          Dennis Persson           60     1   2  2  
 2 Bobby Sanguinetti        Julius Bergman           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cooper Marody            Michael Raffl            60     1   2  2  
 2 Joseph Labate            Riley Nash               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Patrick McNally          Dennis Persson           60     1   2  2  
 2 Brad Hunt                Julius Bergman           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mats Zuccarello          Michael Raffl            Riley Nash               Julius Bergman           Dennis Persson           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mats Zuccarello          Michael Raffl            Riley Nash               Julius Bergman           Dennis Persson           

<b>Goaltenders</b>
Starting : Eddie Lack               
Backup : Joe Cannata              
Third : Mark Owuya               

<b>Extra Forwards</b>
Normal : Alex Friesen, Alexandre Grenier, Cooper Marody - PP : Alex Friesen, Alexandre Grenier - PK : Cooper Marody
<b>Extra Defensemen</b>
Normal : Patrick McNally, Dennis Persson, Julius Bergman - PP : Patrick McNally - PK : Julius Bergman, Dennis Persson
<b>Penalty Shots</b>
Cooper Marody, Michael Raffl, Joseph Labate, Riley Nash, Nicklas Jensen
<b>Custom OT Lines Forwards</b>
Mathieu Perreault, Michael Raffl, Joseph Labate, Riley Nash, Nicklas Jensen, Mats Zuccarello, Alex Friesen, Alexandre Grenier, Cooper Marody, Tim Connolly
<b>Custom OT Lines Defensemen</b>
Teemu Laakso, Dennis Persson, Bobby Sanguinetti, Julius Bergman, Patrick McNally

<b>Scratches</b>
Kellan Tochkin (Healthy), Ludwig Blomstrand (Healthy), Justin Shugg (Healthy), Matic Podlipnik (Healthy)</pre></div>
<h1 class="TeamLineFarm_LAN"><a id="LandshutCannibals">Landshut Cannibals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#LandshutCannibals">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#LandshutCannibals">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#LandshutCannibals">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#LandshutCannibals">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#LandshutCannibals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LandshutCannibals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LandshutCannibals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Pavel Zacha              Matthew Bradley          Daniel Bernhardt         25     1   2  2  
 2 German Rubtsov           Nick Ritchie             Steve Moses              25     1   2  2  
 3 Dominik Simon            John Hayden              Mathias From             25     1   2  2  
 4 Matthew Bradley          Dryden Hunt              Nick Ritchie             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Kylington         Yegor Rykov                                       25     1   2  2  
 2 Kyle Capobianco          Chaz Reddekopp                                    25     1   2  2  
 3 Johnathan MacLeod        Dryden Hunt                                       25     1   2  2  
 4 Oliver Kylington         Yegor Rykov                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Pavel Zacha              Dryden Hunt              Daniel Bernhardt         60     1   2  2  
 2 German Rubtsov           Nick Ritchie             Steve Moses              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Kylington         Yegor Rykov                                       60     1   2  2  
 2 Kyle Capobianco          Chaz Reddekopp                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Steve Moses              German Rubtsov           60     1   2  2  
 2 Nick Ritchie             Daniel Bernhardt         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Kylington         Yegor Rykov              60     1   2  2  
 2 Kyle Capobianco          Chaz Reddekopp           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Daniel Bernhardt                                  60     1   2  2  
 2 Nick Ritchie                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Kylington         Yegor Rykov              60     1   2  2  
 2 Kyle Capobianco          Chaz Reddekopp           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dryden Hunt              German Rubtsov           60     1   2  2  
 2 Nick Ritchie             Daniel Bernhardt         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Kylington         Yegor Rykov              60     1   2  2  
 2 Kyle Capobianco          Chaz Reddekopp           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Pavel Zacha              Nick Ritchie             Daniel Bernhardt         Oliver Kylington         Yegor Rykov              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Pavel Zacha              Nick Ritchie             Daniel Bernhardt         Oliver Kylington         Yegor Rykov              

<b>Goaltenders</b>
Starting : Danny aus den Birken     
Backup : Veini Vehvilainen        
Third : Ken Appleby              

<b>Extra Forwards</b>
Normal : Pavel Zacha, Nick Ritchie, Daniel Bernhardt - PP : Daniel Bernhardt, Nick Ritchie - PK : Nick Ritchie
<b>Extra Defensemen</b>
Normal : Oliver Kylington, Kyle Capobianco, Chaz Reddekopp - PP : Yegor Rykov - PK : Kyle Capobianco, Chaz Reddekopp
<b>Penalty Shots</b>
Pavel Zacha, Steve Moses, Nick Ritchie, Daniel Bernhardt, German Rubtsov
<b>Custom OT Lines Forwards</b>
Pavel Zacha, Matthew Bradley, Nick Ritchie, Daniel Bernhardt, German Rubtsov, Dominik Simon, Steve Moses, John Hayden, Dryden Hunt, Mathias From
<b>Custom OT Lines Defensemen</b>
Oliver Kylington, Yegor Rykov, Kyle Capobianco, Chaz Reddekopp, Johnathan MacLeod

<b>Scratches</b>
David Griger (Fractured Bone in Right Hand Injury), Hudson Elynuik (Healthy), Kevin Hancock (Healthy), Tyler Soy (Healthy)</pre></div>
<h1 class="TeamLineFarm_MAN"><a id="ManitobaMoose">Manitoba Moose</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL8-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL8-FarmTeamScoring.php#ManitobaMoose">Farm Team Scoring</a> ]
[ <a href="ASHL8-FarmTeamLines.php#ManitobaMoose">Farm Team Lines</a> ]
[ <a href="ASHL8-FarmTeamSchedule.php#ManitobaMoose">Farm Team Schedule</a> ]
[ <a href="ASHL8-FarmTeamStats.php#ManitobaMoose">Farm Team Stats</a> ]
[ <a href="ASHL8-FarmTeamStatsVS.php#ManitobaMoose">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ManitobaMoose');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ManitobaMoose" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Angelo Miceli            Vladislav Kamenev        Max Görtz                25     1   2  2  
 2 Linden Vey               Adam Tambellini          Matt Halischuk           25     1   2  2  
 3 Greg Chase               Noah Rod                 Jérôme Verrier           25     1   2  2  
 4 Colin Blackwell          Pierre-Édouard Bellemare Michael Joly             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Sebastian Owuya          Ryan Graves                                       25     1   2  2  
 2 Ralfs Freibergs          Peter Stoykewych                                  25     1   2  2  
 3 Marcus Pettersson        Colin Blackwell                                   25     1   2  2  
 4 Peter Stoykewych         Ryan Graves                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Angelo Miceli            Vladislav Kamenev        Max Görtz                60     1   2  2  
 2 Linden Vey               Adam Tambellini          Matt Halischuk           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marcus Pettersson        Ryan Graves                                       60     1   2  2  
 2 Ralfs Freibergs          Peter Stoykewych                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Max Görtz                Angelo Miceli            60     1   2  2  
 2 Matt Halischuk           Vladislav Kamenev        40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Peter Stoykewych         Ryan Graves              60     1   2  2  
 2 Ralfs Freibergs          Marcus Pettersson        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Max Görtz                                         60     1   2  2  
 2 Angelo Miceli                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Peter Stoykewych         Ryan Graves              60     1   2  2  
 2 Ralfs Freibergs          Sebastian Owuya          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Max Görtz                Angelo Miceli            60     1   2  2  
 2 Matt Halischuk           Vladislav Kamenev        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Sebastian Owuya          Ryan Graves              60     1   2  2  
 2 Ralfs Freibergs          Peter Stoykewych         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Angelo Miceli            Vladislav Kamenev        Max Görtz                Peter Stoykewych         Ryan Graves              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Angelo Miceli            Vladislav Kamenev        Max Görtz                Peter Stoykewych         Ryan Graves              

<b>Goaltenders</b>
Starting : Edward Pasquale          
Backup : Jason Kasdorf            
Third : Andrej Hocevar           

<b>Extra Forwards</b>
Normal : Brent Pedersen, Max Görtz, Greg Chase - PP : Brent Pedersen, Angelo Miceli - PK : Greg Chase
<b>Extra Defensemen</b>
Normal : Ryan Graves, Ralfs Freibergs, Peter Stoykewych - PP : Ryan Graves - PK : Ralfs Freibergs, Ryan Graves
<b>Penalty Shots</b>
Max Görtz, Angelo Miceli, Matt Halischuk, Vladislav Kamenev, Linden Vey
<b>Custom OT Lines Forwards</b>
Max Görtz, Angelo Miceli, Matt Halischuk, Vladislav Kamenev, Linden Vey, Greg Chase, Colin Blackwell, Adam Tambellini, Jérôme Verrier, Noah Rod
<b>Custom OT Lines Defensemen</b>
Sebastian Owuya, Ryan Graves, Ralfs Freibergs, Marcus Pettersson, Peter Stoykewych

<b>Scratches</b>
Kay Schweri (Healthy), Nicolas Petan (Right Eye Injury), Kevin Lidström (Healthy), Daniel Lafontaine (Healthy)</pre></div>
<?php include "Footer.php";?>
