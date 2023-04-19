<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#LavalChiefs">Laval Chiefs</a> | <a href="#TheNuukVikings">The Nuuk Vikings</a> | <a href="#ProvidenceBruins">Providence Bruins</a> | <a href="#RochesterAmericans">Rochester Americans</a> | <a href="#JolietteSportif">Joliette Sportif</a> | <a href="#CharlotteCheckers">Charlotte Checkers</a> | <a href="#RockfordIceHogs">Rockford IceHogs</a> | <a href="#LakeErieMonsters">Lake Erie Monsters</a> | <a href="#SpringfieldFalcons">Springfield Falcons</a> | <a href="#LasVegasGamblers">Las Vegas Gamblers</a> | <a href="#GrandRapidsGriffins">Grand Rapids Griffins</a> | <a href="#OklahomaCityBarons">Oklahoma City Barons</a> | <a href="#SanAntonioRampage">San Antonio Rampage</a> | <a href="#GatineauOlympiques">Gatineau Olympiques</a> | <a href="#HoustonAeros">Houston Aeros</a> | <a href="#Trois-RivièresDraveurs">Trois-Rivières Draveurs</a> | <a href="#MilwaukeeAdmirals">Milwaukee Admirals</a> | <a href="#AlbanyDevils">Albany Devils</a> | <a href="#BridgeportSoundTigers">Bridgeport Sound Tigers</a> | <a href="#ConnecticutWhale">Connecticut Whale</a> | <a href="#BinghamtonSenators">Binghamton Senators</a> | <a href="#AdirondackPhantoms">Adirondack Phantoms</a> | <a href="#Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a> | <a href="#ChicoutimiSaguenéens">Chicoutimi Saguenéens</a> | <a href="#Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a> | <a href="#MercerIslandHafgufa">Mercer Island Hafgufa</a> | <a href="#PeoriaRivermen">Peoria Rivermen</a> | <a href="#NorfolkAdmirals">Norfolk Admirals</a> | <a href="#RobervalDwarfs">Roberval Dwarfs</a> | <a href="#ChicagoWolves">Chicago Wolves</a> | <a href="#HendersonSilverKnights">Henderson Silver Knights</a> | <a href="#CCCPRedArmy">CCCP Red Army</a> | <a href="#ManitobaMoose">Manitoba Moose</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLineFarm_LAV"><a id="LavalChiefs">Laval Chiefs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#LavalChiefs">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#LavalChiefs">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#LavalChiefs">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#LavalChiefs">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#LavalChiefs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LavalChiefs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LavalChiefs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Beauvillier      Jesper Boqvist           Robin Kovacs             35     1   1  3  
 2 Joe Veleno               Kalle Kossila            Owen Tippett             32     1   1  3  
 3 Troy Terry               Ryan Fitzgerald          Daniel Zaar              28     1   1  3  
 4 Jacob Olofsson           Nikita Korostelev        Axel Holmstrom           5      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Sami Niku                Adam Fox                                          35     1   2  2  
 2 Juuso Välimäki           Filip Hronek                                      35     1   2  2  
 3 Ben Harpur               Kyle Wood                                         20     1   3  1  
 4 Ben Harpur               Michael Brodzinski                                10     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Beauvillier      Kalle Kossila            Robin Kovacs             55     0   0  5  
 2 Joe Veleno               Jesper Boqvist           Owen Tippett             45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Sami Niku                Adam Fox                                          55     0   1  4  
 2 Juuso Välimäki           Filip Hronek                                      45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob Olofsson           Daniel Zaar              60     1   4  0  
 2 Joe Veleno               Anthony Beauvillier      40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Harpur               Kyle Wood                55     1   4  0  
 2 Juuso Välimäki           Adam Fox                 45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jacob Olofsson                                    60     0   5  0  
 2 Daniel Zaar                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Harpur               Kyle Wood                55     0   5  0  
 2 Juuso Välimäki           Adam Fox                 45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Troy Terry               Robin Kovacs             60     1   1  3  
 2 Joe Veleno               Owen Tippett             40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Brodzinski       Ben Harpur               60     1   2  2  
 2 Filip Hronek             Adam Fox                 40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Beauvillier      Jesper Boqvist           Robin Kovacs             Sami Niku                Adam Fox                 

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jacob Olofsson           Joe Veleno               Daniel Zaar              Ben Harpur               Adam Fox                 

<b>Goaltenders</b>
Starting : Colton Point             
Backup : Tyler Parsons            

<b>Extra Forwards</b>
Normal : Owen Tippett, Robin Kovacs, Joe Veleno - PP : Troy Terry, Daniel Zaar - PK : Robin Kovacs
<b>Extra Defensemen</b>
Normal : Ben Harpur, Sami Niku, Michael Brodzinski - PP : Ben Harpur - PK : Filip Hronek, Sami Niku
<b>Penalty Shots</b>
Troy Terry, Joe Veleno, Owen Tippett, Robin Kovacs, Anthony Beauvillier
<b>Custom OT Lines Forwards</b>
Anthony Beauvillier, Kalle Kossila, Joe Veleno, Robin Kovacs, Troy Terry, Owen Tippett, Ryan Fitzgerald, Axel Holmstrom, Jacob Olofsson, Daniel Zaar
<b>Custom OT Lines Defensemen</b>
Adam Fox, Sami Niku, Filip Hronek, Juuso Välimäki, Kyle Wood

<b>Scratches</b>
Andrew MacDonald (Healthy), Joonas Lyytinen (Healthy), Cole Sanford (Healthy), Hannibal Weitzmann (Healthy)</pre></div>
<h1 class="TeamLineFarm_NUU"><a id="TheNuukVikings">The Nuuk Vikings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#TheNuukVikings">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#TheNuukVikings">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#TheNuukVikings">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#TheNuukVikings">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#TheNuukVikings">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TheNuukVikings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TheNuukVikings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Rodrigo Abols            Sam Steel                Joachim Blichfeld        30     3   1  1  
 2 Hafthor Sigrunarson      Jermaine Loewen          Trey Fix-Wolansky        30     3   1  1  
 3 Yegor Sharangovich       Vadim Vasjonkin          Semyon Der-Arguchintsev  22     3   1  1  
 4 Greg Meireles            Reinhard Venter          Hakan Salt               18     3   1  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Norstebo         Karlis Cukste                                     30     2   2  1  
 2 Kirill Steklov           Marko Mladenovic                                  27     2   2  1  
 3 Kacper Bartnik           Gregorio Gios                                     23     2   2  1  
 4 Declan Bronte            Liam Kirk                                         20     2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Steel                Jermaine Loewen          Trey Fix-Wolansky        60     1   1  3  
 2 Hafthor Sigrunarson      Vadim Vasjonkin          Joachim Blichfeld        40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gregorio Gios            Karlis Cukste                                     60     1   1  3  
 2 Mattias Norstebo         Declan Bronte                                     40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Rodrigo Abols            Vadim Vasjonkin          60     1   4  0  
 2 Greg Meireles            Gregorio Gios            40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kacper Bartnik           Karlis Cukste            60     1   4  0  
 2 Mattias Norstebo         Kirill Steklov           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Trey Fix-Wolansky                                 60     1   4  0  
 2 Vadim Vasjonkin                                   40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Declan Bronte            Karlis Cukste            60     1   4  0  
 2 Mattias Norstebo         Marko Mladenovic         40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Trey Fix-Wolansky        Vadim Vasjonkin          60     1   2  2  
 2 Hakan Salt               Jermaine Loewen          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kirill Steklov           Karlis Cukste            60     1   2  2  
 2 Mattias Norstebo         Gregorio Gios            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Steel                Joachim Blichfeld        Trey Fix-Wolansky        Mattias Norstebo         Karlis Cukste            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Rodrigo Abols            Vadim Vasjonkin          Trey Fix-Wolansky        Mattias Norstebo         Karlis Cukste            

<b>Goaltenders</b>
Starting : Demid Yeremeyev          
Backup : Mareks Mitens            

<b>Extra Forwards</b>
Normal : Hafthor Sigrunarson, Rodrigo Abols, Hakan Salt - PP : Hafthor Sigrunarson, Semyon Der-Arguchintsev - PK : Hakan Salt
<b>Extra Defensemen</b>
Normal : Marko Mladenovic, Kirill Steklov, Gregorio Gios - PP : Marko Mladenovic - PK : Kirill Steklov, Gregorio Gios
<b>Penalty Shots</b>
Trey Fix-Wolansky, Sam Steel, Joachim Blichfeld, Rodrigo Abols, Vadim Vasjonkin
<b>Custom OT Lines Forwards</b>
Sam Steel, Vadim Vasjonkin, Rodrigo Abols, Joachim Blichfeld, Semyon Der-Arguchintsev, Trey Fix-Wolansky, Hafthor Sigrunarson, Liam Kirk, Greg Meireles, Jermaine Loewen
<b>Custom OT Lines Defensemen</b>
Rodrigo Abols, Karlis Cukste, Mattias Norstebo, Kirill Steklov, Marko Mladenovic

<b>Scratches</b>
Vilmos Gallo (Healthy), Chad Ruhwedel (Healthy), Jacob Ratcliffe (Healthy), Arturas Laukaitis (Healthy), Kristers Gudlevskis (Healthy)</pre></div>
<h1 class="TeamLineFarm_PRO"><a id="ProvidenceBruins">Providence Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#ProvidenceBruins">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#ProvidenceBruins">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#ProvidenceBruins">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#ProvidenceBruins">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#ProvidenceBruins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ProvidenceBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ProvidenceBruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Artem Anisimov           Simon Tremblay           Colton Sissons           25     1   2  2  
 2 Alexander Khokhlachev    Mason Marchment          Ben Sexton               25     1   2  2  
 3 Jakob Forsbacka Karlsson Calvin Thurkauf          Jordan Schroeder         25     1   2  2  
 4 Riley Sheahan            Adam Mascherin           Artem Anisimov           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Roland McKeown                                    25     1   2  2  
 2 Mario Ferraro            Jacob Bryson                                      25     1   2  2  
 3 Dalton Thrower           Tommy Cross                                       25     1   2  2  
 4 Konrad Abeltshauser      Roland McKeown                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Artem Anisimov           Simon Tremblay           Colton Sissons           60     1   2  2  
 2 Alexander Khokhlachev    Mason Marchment          Ben Sexton               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Roland McKeown                                    60     1   2  2  
 2 Mario Ferraro            Jacob Bryson                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Artem Anisimov           Colton Sissons           60     1   2  2  
 2 Simon Tremblay           Alexander Khokhlachev    40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Roland McKeown           60     1   2  2  
 2 Mario Ferraro            Jacob Bryson             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Artem Anisimov                                    60     1   2  2  
 2 Colton Sissons                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Roland McKeown           60     1   2  2  
 2 Mario Ferraro            Jacob Bryson             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Artem Anisimov           Colton Sissons           60     1   2  2  
 2 Simon Tremblay           Alexander Khokhlachev    40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Roland McKeown           60     1   2  2  
 2 Mario Ferraro            Jacob Bryson             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Artem Anisimov           Simon Tremblay           Colton Sissons           Konrad Abeltshauser      Roland McKeown           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Artem Anisimov           Simon Tremblay           Colton Sissons           Konrad Abeltshauser      Roland McKeown           

<b>Goaltenders</b>
Starting : Lars Volden              
Backup : Zane McIntyre            

<b>Extra Forwards</b>
Normal : Calle Jarnkrok, Jakob Forsbacka Karlsson, Riley Sheahan - PP : Calle Jarnkrok, Jakob Forsbacka Karlsson - PK : Riley Sheahan
<b>Extra Defensemen</b>
Normal : Dalton Thrower, Tommy Cross, Mario Ferraro - PP : Dalton Thrower - PK : Tommy Cross, Mario Ferraro
<b>Penalty Shots</b>
Artem Anisimov, Colton Sissons, Simon Tremblay, Alexander Khokhlachev, Mason Marchment
<b>Custom OT Lines Forwards</b>
Artem Anisimov, Colton Sissons, Simon Tremblay, Alexander Khokhlachev, Mason Marchment, Jakob Forsbacka Karlsson, Riley Sheahan, Calle Jarnkrok, Calvin Thurkauf, Ben Sexton
<b>Custom OT Lines Defensemen</b>
Konrad Abeltshauser, Roland McKeown, Mario Ferraro, Jacob Bryson, Dalton Thrower

<b>Scratches</b>
Ludwig Blomstrand (Suspend), Joonas Donskoi (Healthy), Zach Trotman (Healthy), Tim Bozon (Healthy), Adam Courchaine (Healthy)
Brian Ferlin (Healthy), Michael Hutchinson (Healthy)</pre></div>
<h1 class="TeamLineFarm_RCH"><a id="RochesterAmericans">Rochester Americans</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#RochesterAmericans">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#RochesterAmericans">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#RochesterAmericans">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#RochesterAmericans">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#RochesterAmericans">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RochesterAmericans');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RochesterAmericans" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alexei Mitrofanov        Scott Laughton           Dylan Sikura             25     1   2  2  
 2 Daniel O'Regan           Trevor Cox               Julius Nättinen          25     1   2  2  
 3 Jujhar Khaira            Taro Hirose              Tomas Kubalik            25     1   2  2  
 4 Lukas Vejdemo            Eric Cornel              Nick Baptiste            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Carl Dahlstrom           Robin Press                                       25     1   2  2  
 2 Lucas Carlsson           Mitchell Vande Sompel                             25     1   2  2  
 3 Nils Lundkvist           Ralfs Freibergs                                   25     1   2  2  
 4 Carl Dahlstrom           Robin Press                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alexei Mitrofanov        Scott Laughton           Dylan Sikura             60     1   2  2  
 2 Daniel O'Regan           Trevor Cox               Julius Nättinen          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Carl Dahlstrom           Robin Press                                       60     1   2  2  
 2 Nils Lundkvist           Mitchell Vande Sompel                             40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexei Mitrofanov        Daniel O'Regan           60     1   2  2  
 2 Scott Laughton           Dylan Sikura             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Carl Dahlstrom           Robin Press              60     1   2  2  
 2 Lucas Carlsson           Mitchell Vande Sompel    40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alexei Mitrofanov                                 60     1   2  2  
 2 Daniel O'Regan                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Carl Dahlstrom           Robin Press              60     1   2  2  
 2 Lucas Carlsson           Mitchell Vande Sompel    40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexei Mitrofanov        Daniel O'Regan           60     1   2  2  
 2 Scott Laughton           Dylan Sikura             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Carl Dahlstrom           Mitchell Vande Sompel    60     1   2  2  
 2 Lucas Carlsson           Robin Press              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexei Mitrofanov        Scott Laughton           Dylan Sikura             Carl Dahlstrom           Robin Press              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexei Mitrofanov        Scott Laughton           Dylan Sikura             Carl Dahlstrom           Robin Press              

<b>Goaltenders</b>
Starting : Brendan Burke            
Backup : Jake Oettinger           

<b>Extra Forwards</b>
Normal : Julius Nättinen, Dominic Turgeon, Alexei Mitrofanov - PP : Julius Nättinen, Dominic Turgeon - PK : Alexei Mitrofanov
<b>Extra Defensemen</b>
Normal : Nils Lundkvist, Lucas Carlsson, Mitchell Vande Sompel - PP : Nils Lundkvist - PK : Lucas Carlsson, Mitchell Vande Sompel
<b>Penalty Shots</b>
Alexei Mitrofanov, Daniel O'Regan, Scott Laughton, Dylan Sikura, Trevor Cox
<b>Custom OT Lines Forwards</b>
Alexei Mitrofanov, Daniel O'Regan, Scott Laughton, Dylan Sikura, Trevor Cox, Jujhar Khaira, Julius Nättinen, Taro Hirose, Tomas Kubalik, Lukas Vejdemo
<b>Custom OT Lines Defensemen</b>
Carl Dahlstrom, Robin Press, Lucas Carlsson, Mitchell Vande Sompel, Nils Lundkvist

<b>Scratches</b>
Anatoli Golyshev (Healthy), Cameron Wright (Healthy), Matthew Highmore (Groin Injury), Cameron Morrison (Healthy), Filip Westerlund (Healthy)</pre></div>
<h1 class="TeamLineFarm_JOL"><a id="JolietteSportif">Joliette Sportif</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#JolietteSportif">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#JolietteSportif">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#JolietteSportif">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#JolietteSportif">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#JolietteSportif">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_JolietteSportif');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_JolietteSportif" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Barrett Hayton           Alexander Nylander       Anthony Angello          25     1   1  3  
 2 Filip Chlapik            Greg Nemisz              Clark Bishop             25     1   2  2  
 3 Antoine Vermette         Danny Kristo             Peter Holland            25     2   2  1  
 4 Antoine Vermette         Michael Ferland          Anthony Angello          25     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Lindgren            Ty Smith                                          25     1   2  2  
 2 Guillaume Brisebois      Dennis Gilbert                                    25     1   2  2  
 3 Leon Gawanke             Luke Green                                        25     1   2  2  
 4 Ryan Lindgren            Ty Smith                                          25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Barrett Hayton           Alexander Nylander       Filip Chlapik            60     1   0  4  
 2 Clark Bishop             Anthony Angello          Greg Nemisz              40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ty Smith                 Dennis Gilbert                                    60     1   1  3  
 2 Ryan Lindgren            Guillaume Brisebois                               40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Ferland          Greg Nemisz              60     1   4  0  
 2 Antoine Vermette         Clark Bishop             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Lindgren            Dennis Gilbert           60     1   4  0  
 2 Guillaume Brisebois      Ty Smith                 40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael Ferland                                   60     1   4  0  
 2 Anthony Angello                                   40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Guillaume Brisebois      Dennis Gilbert           60     1   4  0  
 2 Ryan Lindgren            Ty Smith                 40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Ferland          Alexander Nylander       60     1   2  2  
 2 Antoine Vermette         Greg Nemisz              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Guillaume Brisebois      Dennis Gilbert           60     1   2  2  
 2 Ryan Lindgren            Ty Smith                 40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Barrett Hayton           Alexander Nylander       Anthony Angello          Ryan Lindgren            Dennis Gilbert           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Antoine Vermette         Michael Ferland          Greg Nemisz              Ryan Lindgren            Dennis Gilbert           

<b>Goaltenders</b>
Starting : Laurent Brossoit         
Backup : Jack Lafontaine          

<b>Extra Forwards</b>
Normal : Clark Bishop, Filip Chlapik, Peter Holland - PP : Clark Bishop, Filip Chlapik - PK : Peter Holland
<b>Extra Defensemen</b>
Normal : Guillaume Brisebois, Leon Gawanke, Luke Green - PP : Guillaume Brisebois - PK : Leon Gawanke, Luke Green
<b>Penalty Shots</b>
Filip Chlapik, Barrett Hayton, Alexander Nylander, Anthony Angello, Greg Nemisz
<b>Custom OT Lines Forwards</b>
Clark Bishop, Barrett Hayton, Filip Chlapik, Greg Nemisz, Alexander Nylander, Danny Kristo, Anthony Angello, Antoine Vermette, Peter Holland, Michael Ferland
<b>Custom OT Lines Defensemen</b>
Leon Gawanke, Dennis Gilbert, Ryan Lindgren, Ty Smith, Guillaume Brisebois

<b>Scratches</b>
Jiri Hudler (Healthy), Todd Burgess (Healthy), Jesper Fasth (Healthy), Riley Barber (Healthy), Melvin Nyffeler (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHA"><a id="CharlotteCheckers">Charlotte Checkers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#CharlotteCheckers">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#CharlotteCheckers">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#CharlotteCheckers">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#CharlotteCheckers">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#CharlotteCheckers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CharlotteCheckers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CharlotteCheckers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Rasmus Asplund           Joel Kiviranta           Kiefer Sherwood          25     1   2  2  
 2 Joey Hishon              Daniel Carr              Carter Ashton            25     1   2  2  
 3 Laurent Dauphin          Sondre Olden             Mikhail Vorobyov         25     1   2  2  
 4 Mikhail Vorobyov         Connor Dewar             Joel Kiviranta           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Michael Paliotta         Patrik Nemeth                                     25     1   2  2  
 2 Louis Belpedio           Markus Lauridsen                                  25     1   2  2  
 3 Stephen Johns            Kale Clague                                       25     1   2  2  
 4 Johannes Kinnvall        Michael Paliotta                                  25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Rasmus Asplund           Joel Kiviranta           Kiefer Sherwood          60     1   2  2  
 2 Joey Hishon              Daniel Carr              Carter Ashton            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Michael Paliotta         Patrik Nemeth                                     60     1   2  2  
 2 Louis Belpedio           Markus Lauridsen                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joel Kiviranta           Rasmus Asplund           60     1   2  2  
 2 Kiefer Sherwood          Carter Ashton            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Paliotta         Patrik Nemeth            60     1   2  2  
 2 Louis Belpedio           Markus Lauridsen         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joel Kiviranta                                    60     1   2  2  
 2 Rasmus Asplund                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Paliotta         Patrik Nemeth            60     1   2  2  
 2 Louis Belpedio           Markus Lauridsen         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joel Kiviranta           Rasmus Asplund           60     1   2  2  
 2 Kiefer Sherwood          Carter Ashton            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Paliotta         Patrik Nemeth            60     1   2  2  
 2 Louis Belpedio           Markus Lauridsen         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Rasmus Asplund           Joel Kiviranta           Kiefer Sherwood          Michael Paliotta         Patrik Nemeth            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Rasmus Asplund           Joel Kiviranta           Kiefer Sherwood          Michael Paliotta         Patrik Nemeth            

<b>Goaltenders</b>
Starting : Ben Scrivens             
Backup : Kevin Lankinen           

<b>Extra Forwards</b>
Normal : Tyler Benson, Sondre Olden, Laurent Dauphin - PP : Tyler Benson, Sondre Olden - PK : Laurent Dauphin
<b>Extra Defensemen</b>
Normal : Stephen Johns, Kale Clague, Johannes Kinnvall - PP : Stephen Johns - PK : Kale Clague, Johannes Kinnvall
<b>Penalty Shots</b>
Joel Kiviranta, Rasmus Asplund, Kiefer Sherwood, Carter Ashton, Daniel Carr
<b>Custom OT Lines Forwards</b>
Joel Kiviranta, Rasmus Asplund, Kiefer Sherwood, Carter Ashton, Daniel Carr, Joey Hishon, Sondre Olden, Laurent Dauphin, Mikhail Vorobyov, Connor Dewar
<b>Custom OT Lines Defensemen</b>
Michael Paliotta, Patrik Nemeth, Louis Belpedio, Markus Lauridsen, Stephen Johns

<b>Scratches</b>
Anton Volchenkov (Healthy), Alexei Bereglazov (Healthy), Theo Peckham (Healthy), Scott Wilson (Healthy), Radovan Bondra (Healthy)</pre></div>
<h1 class="TeamLineFarm_RFD"><a id="RockfordIceHogs">Rockford IceHogs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#RockfordIceHogs">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#RockfordIceHogs">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#RockfordIceHogs">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#RockfordIceHogs">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#RockfordIceHogs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RockfordIceHogs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RockfordIceHogs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Rourke Chartier          Nathan Walker            Austin Czarnik           34     0   1  4  
 2 Riley Damiani            Julien Pelletier         Justin Auger             28     1   1  3  
 3 Stephen Weiss            Philippe Paradis         MacKenzie Entwistle      22     1   2  2  
 4 Jimmy Huntington         Christopher DiDomenico   MacKenzie Entwistle      16     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jason Fram               Julian Melchiori                                  34     1   3  1  
 2 Jakub Zboril             Jake Muzzin                                       33     1   3  1  
 3 Trevor Van Riemsdyk      Joe Hicketts                                      33     1   3  1  
 4 Jake Muzzin              Julian Melchiori                                  0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Rourke Chartier          Nathan Walker            Austin Czarnik           50     0   0  5  
 2 Riley Damiani            Julien Pelletier         Justin Auger             50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Julian Melchiori         Joe Hicketts                                      50     1   3  1  
 2 Jakub Zboril             Jason Fram                                        50     1   3  1  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Riley Damiani            MacKenzie Entwistle      50     0   5  0  
 2 Julien Pelletier         Justin Auger             50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakub Zboril             Julian Melchiori         50     1   4  0  
 2 Jake Muzzin              Joe Hicketts             50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 MacKenzie Entwistle                               50     0   5  0  
 2 Julien Pelletier                                  50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakub Zboril             Julian Melchiori         50     1   4  0  
 2 Trevor Van Riemsdyk      Joe Hicketts             50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Julien Pelletier         MacKenzie Entwistle      50     1   1  3  
 2 Riley Damiani            Austin Czarnik           50     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Muzzin              Julian Melchiori         50     1   3  1  
 2 Jakub Zboril             Joe Hicketts             50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Riley Damiani            Nathan Walker            Austin Czarnik           Julian Melchiori         Joe Hicketts             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Philippe Paradis         Justin Auger             MacKenzie Entwistle      Jakub Zboril             Julian Melchiori         

<b>Goaltenders</b>
Starting : Antti Raanta             
Backup : Alexis Gravel            

<b>Extra Forwards</b>
Normal : Riley Damiani, Jimmy Huntington, MacKenzie Entwistle - PP : MacKenzie Entwistle, Jimmy Huntington - PK : Julien Pelletier
<b>Extra Defensemen</b>
Normal : Jakub Zboril, Joe Hicketts, Julian Melchiori - PP : Julian Melchiori - PK : Jakub Zboril, Joe Hicketts
<b>Penalty Shots</b>
Christopher DiDomenico, Philippe Paradis, Austin Czarnik, MacKenzie Entwistle, Riley Damiani
<b>Custom OT Lines Forwards</b>
Riley Damiani, Austin Czarnik, Jimmy Huntington, Justin Auger, Rourke Chartier, Nathan Walker, Christopher DiDomenico, MacKenzie Entwistle, Julien Pelletier, Philippe Paradis
<b>Custom OT Lines Defensemen</b>
Jake Muzzin, Joe Hicketts, Jakub Zboril, Trevor Van Riemsdyk, Julian Melchiori

<b>Scratches</b>
Andreas Engqvist (Healthy), Nikolai Zherdev (Healthy), Enrico Miglioranzi (Healthy), Michael McNiven (Healthy)</pre></div>
<h1 class="TeamLineFarm_LKE"><a id="LakeErieMonsters">Lake Erie Monsters</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#LakeErieMonsters">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#LakeErieMonsters">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#LakeErieMonsters">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#LakeErieMonsters">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#LakeErieMonsters">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LakeErieMonsters');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LakeErieMonsters" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 T.J. Galiardi            Jason Zucker             Seth Griffith            25     1   2  2  
 2 Joseph Cramarossa        Kyle Rau                 Kurtis Gabriel           25     1   2  2  
 3 Stephen MacAulay         Sam Miletic              Luke Moffatt             25     1   2  2  
 4 Francis Beauvillier      Christoph Bertschy       Josh Leivo               25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brett Cote               Christian Djoos                                   25     1   2  2  
 2 Gus Young                Stephen Silas                                     25     1   2  2  
 3 Ryan Stanton             Tim Heed                                          25     1   2  2  
 4 Brett Cote               Christian Djoos                                   25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 T.J. Galiardi            Jason Zucker             Seth Griffith            60     1   2  2  
 2 Joseph Cramarossa        Kyle Rau                 Kurtis Gabriel           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brett Cote               Christian Djoos                                   60     1   2  2  
 2 Gus Young                Stephen Silas                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jason Zucker             T.J. Galiardi            60     1   2  2  
 2 Seth Griffith            Kurtis Gabriel           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brett Cote               Christian Djoos          60     1   2  2  
 2 Gus Young                Stephen Silas            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jason Zucker                                      60     1   2  2  
 2 T.J. Galiardi                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brett Cote               Christian Djoos          60     1   2  2  
 2 Gus Young                Stephen Silas            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jason Zucker             T.J. Galiardi            60     1   2  2  
 2 Seth Griffith            Kurtis Gabriel           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brett Cote               Christian Djoos          60     1   2  2  
 2 Gus Young                Stephen Silas            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   T.J. Galiardi            Jason Zucker             Seth Griffith            Brett Cote               Christian Djoos          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   T.J. Galiardi            Jason Zucker             Seth Griffith            Brett Cote               Christian Djoos          

<b>Goaltenders</b>
Starting : Dustin Tokarski          
Backup : Edward Pasquale          
Third : Peter Delmas             

<b>Extra Forwards</b>
Normal : Brendan Warren, Luke Moffatt, Stephen MacAulay - PP : Brendan Warren, Luke Moffatt - PK : Stephen MacAulay
<b>Extra Defensemen</b>
Normal : Ryan Stanton, Tim Heed, Gus Young - PP : Ryan Stanton - PK : Tim Heed, Gus Young
<b>Penalty Shots</b>
Jason Zucker, T.J. Galiardi, Seth Griffith, Kurtis Gabriel, Luke Moffatt
<b>Custom OT Lines Forwards</b>
Jason Zucker, T.J. Galiardi, Seth Griffith, Kurtis Gabriel, Luke Moffatt, Joseph Cramarossa, Kyle Rau, Stephen MacAulay, Josh Leivo, Sam Miletic
<b>Custom OT Lines Defensemen</b>
Brett Cote, Christian Djoos, Gus Young, Stephen Silas, Ryan Stanton

<b>Scratches</b>
Dylan Labbé (Healthy), Keegan Iverson (Healthy), Michael Latta (Healthy), Troy Rutkowski (Healthy)</pre></div>
<h1 class="TeamLineFarm_SPR"><a id="SpringfieldFalcons">Springfield Falcons</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#SpringfieldFalcons">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#SpringfieldFalcons">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#SpringfieldFalcons">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#SpringfieldFalcons">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#SpringfieldFalcons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SpringfieldFalcons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SpringfieldFalcons" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Johan Sundstrom          Pius Suter               Dominik Bokk             35     0   1  4  
 2 Shane Bowers             Brett Bulmer             Martin Kaut              30     0   1  4  
 3 T.J. Tynan               Ivan Telegin             Marcus Karlberg          25     0   1  4  
 4 Dominik Uher             Filip Ahl                Anton Blidh              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Samuelsson       Adam Boqvist                                      35     1   1  3  
 2 David Quenneville        Marcus Pettersson                                 35     1   3  1  
 3 Brandon Hickey           Brendan Guhle                                     30     1   2  2  
 4 Mattias Samuelsson       Adam Boqvist                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Johan Sundstrom          Pius Suter               Dominik Bokk             60     0   0  5  
 2 Shane Bowers             Brett Bulmer             Martin Kaut              40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 David Quenneville        Adam Boqvist                                      60     1   0  4  
 2 Marcus Pettersson        Mattias Samuelsson                                40     1   0  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dominik Uher             Filip Ahl                60     1   4  0  
 2 T.J. Tynan               Ivan Telegin             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Guhle            Brandon Hickey           60     1   4  0  
 2 Marcus Pettersson        Adam Boqvist             40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dominik Uher                                      60     1   4  0  
 2 Ivan Telegin                                      40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Guhle            Brandon Hickey           60     1   4  0  
 2 Marcus Pettersson        Adam Boqvist             40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Johan Sundstrom          Dominik Bokk             60     1   1  3  
 2 Pius Suter               Martin Kaut              40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Boqvist             Mattias Samuelsson       60     1   1  3  
 2 Marcus Pettersson        Brendan Guhle            40     1   1  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Johan Sundstrom          Pius Suter               Brett Bulmer             Marcus Pettersson        Adam Boqvist             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Johan Sundstrom          Pius Suter               Brett Bulmer             Brandon Hickey           Mattias Samuelsson       

<b>Goaltenders</b>
Starting : Anders Nilsson           
Backup : Spencer Martin           

<b>Extra Forwards</b>
Normal : Brett Bulmer, T.J. Tynan, Shane Bowers - PP : Ivan Telegin, T.J. Tynan - PK : Shane Bowers
<b>Extra Defensemen</b>
Normal : David Quenneville, Mattias Samuelsson, Adam Boqvist - PP : David Quenneville - PK : David Quenneville, Mattias Samuelsson
<b>Penalty Shots</b>
Johan Sundstrom, Ivan Telegin, Dominik Bokk, Dominik Uher, Shane Bowers
<b>Custom OT Lines Forwards</b>
Anton Blidh, Dominik Bokk, Martin Kaut, Johan Sundstrom, Brett Bulmer, Shane Bowers, Dominik Uher, Marcus Karlberg, Ivan Telegin, Filip Ahl
<b>Custom OT Lines Defensemen</b>
Marcus Pettersson, Adam Boqvist, Mattias Samuelsson, Brendan Guhle, David Quenneville

<b>Scratches</b>
Steve Weinstein (Healthy), Ziga Pance (Healthy), Alexander Dergachyov (Left Forearm Injury), Blake Siebenaler (Healthy), Eric Locke (Healthy)
Carsen Twarynski (Healthy), Reto Berra (Healthy)</pre></div>
<h1 class="TeamLineFarm_LVG"><a id="LasVegasGamblers">Las Vegas Gamblers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#LasVegasGamblers">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#LasVegasGamblers">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#LasVegasGamblers">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#LasVegasGamblers">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#LasVegasGamblers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LasVegasGamblers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LasVegasGamblers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Lauri Korpikoski         Justin Kea               Kyle Okposo              40     0   2  3  
 2 Daniel Audette           Andrew Ladd              Jimmy Vesey              30     0   2  3  
 3 Isac Lundestrom          Albin Eriksson           Adam Brodecki            25     0   4  1  
 4 Lauri Korpikoski         Andrew Ladd              Cam Atkinson             5      0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Collins             Christian Folin                                   35     0   4  1  
 2 Christian Jaros          Casey Nelson                                      34     1   2  2  
 3 Brandon Manning          Curtis McKenzie                                   21     1   2  2  
 4 Brandon Manning          Christian Jaros                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Lauri Korpikoski         Justin Kea               Andrew Ladd              50     0   0  5  
 2 Daniel Audette           Kyle Okposo              Jimmy Vesey              50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Collins             Brandon Manning                                   50     0   2  3  
 2 Christian Jaros          Casey Nelson                                      50     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Daniel Audette           Lauri Korpikoski         50     0   4  1  
 2 Andrew Ladd              Jimmy Vesey              50     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Manning          Ryan Collins             50     0   5  0  
 2 Christian Jaros          Casey Nelson             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Daniel Audette                                    50     0   5  0  
 2 Lauri Korpikoski                                  50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Manning          Ryan Collins             50     0   5  0  
 2 Christian Jaros          Casey Nelson             50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lauri Korpikoski         Andrew Ladd              50     0   2  3  
 2 Daniel Audette           Justin Kea               50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Collins             Brandon Manning          50     0   4  1  
 2 Christian Jaros          Casey Nelson             50     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Lauri Korpikoski         Justin Kea               Kyle Okposo              Brandon Manning          Christian Jaros          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kyle Okposo              Lauri Korpikoski         Andrew Ladd              Brandon Manning          Christian Jaros          

<b>Goaltenders</b>
Starting : Jhonas Enroth            
Backup : Olivier Roy              

<b>Extra Forwards</b>
Normal : Lauri Korpikoski, Albin Eriksson, Daniel Audette - PP : Daniel Audette, Albin Eriksson - PK : Daniel Audette
<b>Extra Defensemen</b>
Normal : Ryan Collins, Christian Jaros, Casey Nelson - PP : Ryan Collins - PK : Christian Jaros, Casey Nelson
<b>Penalty Shots</b>
Albin Eriksson, Daniel Audette, Jimmy Vesey, Andrew Ladd, Kyle Okposo
<b>Custom OT Lines Forwards</b>
Andrew Ladd, Daniel Audette, Adam Brodecki, Kyle Okposo, Albin Eriksson, Jimmy Vesey, Justin Kea, Lauri Korpikoski, Curtis McKenzie, Isac Lundestrom
<b>Custom OT Lines Defensemen</b>
Brandon Manning, Christian Folin, Christian Jaros, Casey Nelson, Ryan Collins

<b>Scratches</b>
Brian Boyle (Healthy), Rob O'Gara (Lacerated Right Calf Injury), Nick Holden (Healthy), Alex Grant (Healthy), Givani Smith (Healthy)
Chad Johnson (Healthy)</pre></div>
<h1 class="TeamLineFarm_GRG"><a id="GrandRapidsGriffins">Grand Rapids Griffins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#GrandRapidsGriffins">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#GrandRapidsGriffins">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#GrandRapidsGriffins">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#GrandRapidsGriffins">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#GrandRapidsGriffins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GrandRapidsGriffins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GrandRapidsGriffins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Shane Prince             Zach Hyman               Brooks Macek             25     1   2  2  
 2 Philippe Hudon           Andrew Agozzino          Mitchell Callahan        25     1   2  2  
 3 Tomas Vincour            Brady Tkachuk            Nick Suzuki              25     1   2  2  
 4 Valtteri Filppula        Liam Foudy               Shane Prince             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dalton Prout             Chris Wideman                                     25     1   2  2  
 2 Ryan Button              Chad Billins                                      25     1   2  2  
 3 Joseph Duszak            Valtteri Filppula                                 25     1   2  2  
 4 Dalton Prout             Chris Wideman                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Shane Prince             Zach Hyman               Brooks Macek             60     1   2  2  
 2 Philippe Hudon           Andrew Agozzino          Mitchell Callahan        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dalton Prout             Chris Wideman                                     60     1   2  2  
 2 Ryan Button              Chad Billins                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Shane Prince             Zach Hyman               60     1   2  2  
 2 Brooks Macek             Philippe Hudon           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dalton Prout             Chris Wideman            60     1   2  2  
 2 Ryan Button              Chad Billins             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Shane Prince                                      60     1   2  2  
 2 Zach Hyman                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dalton Prout             Chris Wideman            60     1   2  2  
 2 Ryan Button              Chad Billins             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Shane Prince             Zach Hyman               60     1   2  2  
 2 Brooks Macek             Philippe Hudon           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dalton Prout             Chris Wideman            60     1   2  2  
 2 Ryan Button              Chad Billins             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Shane Prince             Zach Hyman               Brooks Macek             Dalton Prout             Chris Wideman            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Shane Prince             Zach Hyman               Brooks Macek             Dalton Prout             Chris Wideman            

<b>Goaltenders</b>
Starting : Alex Dubeau              
Backup : Luka Gracnar             

<b>Extra Forwards</b>
Normal : Brent Raedeke, Kaspars Daugavins, Dominic Zwerger - PP : Brent Raedeke, Kaspars Daugavins - PK : Dominic Zwerger
<b>Extra Defensemen</b>
Normal : Joseph Duszak, Ryan Button, Chad Billins - PP : Joseph Duszak - PK : Ryan Button, Chad Billins
<b>Penalty Shots</b>
Shane Prince, Zach Hyman, Brooks Macek, Philippe Hudon, Andrew Agozzino
<b>Custom OT Lines Forwards</b>
Shane Prince, Zach Hyman, Brooks Macek, Philippe Hudon, Andrew Agozzino, Mitchell Callahan, Tomas Vincour, Valtteri Filppula, Brady Tkachuk, Liam Foudy
<b>Custom OT Lines Defensemen</b>
Dalton Prout, Chris Wideman, Ryan Button, Chad Billins, Joseph Duszak

<b>Scratches</b>
Alex Lyon (Healthy)</pre></div>
<h1 class="TeamLineFarm_OKC"><a id="OklahomaCityBarons">Oklahoma City Barons</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#OklahomaCityBarons">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#OklahomaCityBarons">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#OklahomaCityBarons">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#OklahomaCityBarons">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#OklahomaCityBarons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OklahomaCityBarons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OklahomaCityBarons" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael McLeod           Paul Bittner             Kirby Dach               34     0   2  3  
 2 Cameron Hughes           Brendan Lemieux          Brett Howden             32     0   2  3  
 3 Antoine Morand           Jared Knight             Jakub Lauko              27     0   2  3  
 4 Michael McLeod           Kirby Dach               Cameron Hughes           7      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Samorukov         Jack Dougherty                                    34     0   2  3  
 2 Henri Jokiharju          J.D. Greenway                                     33     0   2  3  
 3 Otto Leskinen            Dominik Masin                                     27     1   2  2  
 4 Otto Leskinen            Jack Dougherty                                    6      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael McLeod           Jakub Lauko              Brett Howden             56     0   0  5  
 2 Cameron Hughes           Kirby Dach               Brendan Lemieux          44     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jack Dougherty           Dmitri Samorukov                                  56     0   1  4  
 2 J.D. Greenway            Henri Jokiharju                                   44     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Antoine Morand           Gabriel Vilardi          55     0   5  0  
 2 Cameron Hughes           Jared Knight             45     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matthew Spencer          Jack Dougherty           56     1   4  0  
 2 Otto Leskinen            Dmitri Samorukov         44     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Cameron Hughes                                    56     0   5  0  
 2 Michael McLeod                                    44     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Otto Leskinen            Jack Dougherty           55     0   5  0  
 2 Matthew Spencer          Dmitri Samorukov         45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cameron Hughes           Antoine Morand           56     0   1  4  
 2 Michael McLeod           Jared Knight             44     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Otto Leskinen            Jack Dougherty           56     0   1  4  
 2 Henri Jokiharju          Dmitri Samorukov         44     0   1  4  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael McLeod           Jared Knight             Brett Howden             Dmitri Samorukov         Jack Dougherty           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cameron Hughes           Jared Knight             Paul Bittner             Henri Jokiharju          Dmitri Samorukov         

<b>Goaltenders</b>
Starting : Devan Dubnyk             
Backup : Tyler Bunz               

<b>Extra Forwards</b>
Normal : Michael McLeod, Antoine Morand, Jakub Lauko - PP : Jared Knight, Antoine Morand - PK : Antoine Morand
<b>Extra Defensemen</b>
Normal : Dmitri Samorukov, Jack Dougherty, Otto Leskinen - PP : Jack Dougherty - PK : Otto Leskinen, Jack Dougherty
<b>Penalty Shots</b>
Antoine Morand, Michael McLeod, Cameron Hughes, Jared Knight, Kirby Dach
<b>Custom OT Lines Forwards</b>
Cameron Hughes, Paul Bittner, Michael McLeod, Kirby Dach, Brett Howden, Jared Knight, Antoine Morand, Gabriel Vilardi, Brendan Lemieux, Jakub Lauko
<b>Custom OT Lines Defensemen</b>
Otto Leskinen, Jack Dougherty, Matthew Spencer, Dmitri Samorukov, Henri Jokiharju

<b>Scratches</b>
Patrick Khodorenko (Healthy), Toni Rajala (Healthy), Dillon Simpson (Healthy), Tyrell Goulbourne (Healthy), Samu Perhonen (Healthy)</pre></div>
<h1 class="TeamLineFarm_SAR"><a id="SanAntonioRampage">San Antonio Rampage</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#SanAntonioRampage">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#SanAntonioRampage">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#SanAntonioRampage">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#SanAntonioRampage">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#SanAntonioRampage">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanAntonioRampage');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanAntonioRampage" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Angle              Beau Bennett             Justin Abdelkader        25     1   2  2  
 2 Dana Tyrell              Iiro Pakarinen           Ryan Tesink              25     1   2  2  
 3 Linus Lindstrom          Garrett Wilson           Tomas Hyka               25     1   2  2  
 4 Tanner Kaspick           Peter Cehlarik           Brandon Dubinsky         25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Benning             Alexei Emelin                                     25     1   2  2  
 2 Andrej Sustr             Fredrik Claesson                                  25     1   2  2  
 3 Wyatt Kalynuk            Juuso Riikola                                     25     1   2  2  
 4 Matt Benning             Alexei Emelin                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Angle              Beau Bennett             Justin Abdelkader        60     1   2  2  
 2 Dana Tyrell              Iiro Pakarinen           Ryan Tesink              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Wyatt Kalynuk            Juuso Riikola                                     60     1   2  2  
 2 Andrej Sustr             Fredrik Claesson                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Dubinsky         Beau Bennett             60     1   2  2  
 2 Justin Abdelkader        Dana Tyrell              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Benning             Alexei Emelin            60     1   2  2  
 2 Andrej Sustr             Fredrik Claesson         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brandon Dubinsky                                  60     1   2  2  
 2 Beau Bennett                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Benning             Alexei Emelin            60     1   2  2  
 2 Andrej Sustr             Fredrik Claesson         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Dubinsky         Beau Bennett             60     1   2  2  
 2 Justin Abdelkader        Dana Tyrell              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Benning             Alexei Emelin            60     1   2  2  
 2 Andrej Sustr             Fredrik Claesson         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brandon Dubinsky         Beau Bennett             Justin Abdelkader        Matt Benning             Alexei Emelin            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brandon Dubinsky         Beau Bennett             Justin Abdelkader        Matt Benning             Alexei Emelin            

<b>Goaltenders</b>
Starting : Keith Petruzzelli        
Backup : Johan Gustafsson         

<b>Extra Forwards</b>
Normal : Tanner Kaspick, Tomas Hyka, Garrett Wilson - PP : Tanner Kaspick, Tomas Hyka - PK : Garrett Wilson
<b>Extra Defensemen</b>
Normal : Wyatt Kalynuk, Juuso Riikola, Andrej Sustr - PP : Wyatt Kalynuk - PK : Juuso Riikola, Andrej Sustr
<b>Penalty Shots</b>
Brandon Dubinsky, Beau Bennett, Justin Abdelkader, Dana Tyrell, Ryan Tesink
<b>Custom OT Lines Forwards</b>
Brandon Dubinsky, Beau Bennett, Justin Abdelkader, Dana Tyrell, Ryan Tesink, Tomas Hyka, Iiro Pakarinen, Garrett Wilson, Linus Lindstrom, Peter Cehlarik
<b>Custom OT Lines Defensemen</b>
Matt Benning, Alexei Emelin, Andrej Sustr, Fredrik Claesson, Wyatt Kalynuk

<b>Scratches</b>
Alexei Marchenko (Healthy), Linus Arnesson (Healthy), Alex Velischek (Healthy), Vaclav Karabacek (Healthy), Aapeli Rasanen (Healthy)</pre></div>
<h1 class="TeamLineFarm_GAT"><a id="GatineauOlympiques">Gatineau Olympiques</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#GatineauOlympiques">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#GatineauOlympiques">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#GatineauOlympiques">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#GatineauOlympiques">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#GatineauOlympiques">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GatineauOlympiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GatineauOlympiques" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikey Eyssimont          Mathieu Joseph           Anders Bjork             36     0   1  4  
 2 Nicolas Roy              Alexander Volkov         Matt Luff                35     0   1  4  
 3 Ross Colton              Jerry D'Amigo            Laurin Braun             17     1   2  2  
 4 Mitchell Stephens        Nolan Stevens            Brendan Gaunce           12     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oleg Sosunov             Ryan Segalla                                      34     0   3  2  
 2 Robert Hagg              Caleb Jones                                       34     0   3  2  
 3 Victor Mete              Rasmus Andersson                                  32     0   3  2  
 4 Robert Hagg              Ryan Segalla                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicolas Roy              Mathieu Joseph           Anders Bjork             60     0   0  5  
 2 Mikey Eyssimont          Alexander Volkov         Jerry D'Amigo            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Mete              Ryan Segalla                                      60     0   1  4  
 2 Robert Hagg              Caleb Jones                                       40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicolas Roy              Nolan Stevens            60     1   4  0  
 2 Mikey Eyssimont          Jerry D'Amigo            40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Mete              Ryan Segalla             60     1   4  0  
 2 Robert Hagg              Caleb Jones              40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nicolas Roy                                       60     0   5  0  
 2 Mikey Eyssimont                                   40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Mete              Ryan Segalla             60     2   3  0  
 2 Robert Hagg              Caleb Jones              40     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicolas Roy              Anders Bjork             60     1   2  2  
 2 Mikey Eyssimont          Jerry D'Amigo            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Mete              Ryan Segalla             60     1   2  2  
 2 Robert Hagg              Caleb Jones              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicolas Roy              Mikey Eyssimont          Mathieu Joseph           Rasmus Andersson         Ryan Segalla             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicolas Roy              Mikey Eyssimont          Jerry D'Amigo            Rasmus Andersson         Ryan Segalla             

<b>Goaltenders</b>
Starting : Antti Niemi              
Backup : Joonas Korpisalo         

<b>Extra Forwards</b>
Normal : Nolan Stevens, Anders Bjork, Alexander Volkov - PP : Nolan Stevens, Anders Bjork - PK : Alexander Volkov
<b>Extra Defensemen</b>
Normal : Victor Mete, Oleg Sosunov, Robert Hagg - PP : Rasmus Andersson - PK : Rasmus Andersson, Robert Hagg
<b>Penalty Shots</b>
Nicolas Roy, Anders Bjork, Ryan Segalla, Jerry D'Amigo, Mathieu Joseph
<b>Custom OT Lines Forwards</b>
Nicolas Roy, Mathieu Joseph, Mikey Eyssimont, Jerry D'Amigo, Anders Bjork, Nolan Stevens, Brendan Gaunce, Alexander Volkov, Laurin Braun, Ross Colton
<b>Custom OT Lines Defensemen</b>
Oleg Sosunov, Ryan Segalla, Rasmus Andersson, Caleb Jones, Victor Mete

<b>Scratches</b>
Nick Foligno (Healthy), Jeff Taylor (Healthy), Ryan Rupert (Healthy)</pre></div>
<h1 class="TeamLineFarm_HOU"><a id="HoustonAeros">Houston Aeros</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#HoustonAeros">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#HoustonAeros">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#HoustonAeros">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#HoustonAeros">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#HoustonAeros">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HoustonAeros');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HoustonAeros" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alex Barré-Boulet        Erik Foley               Conor Garland            40     1   2  2  
 2 Justin Almeida           Ivan Chekhovich          Sebastian Collberg       30     1   2  2  
 3 Tyler Graovac            Daniil Zharkov           Nick Sorensen            20     1   2  2  
 4 Leo Komarov              Roman Horak              Jussi Jokinen            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Ginning             Dylan Demelo                                      25     1   2  2  
 2 Ryan Sproul              Cale Fleury                                       25     1   2  2  
 3 Nick Seeler              Maxim Noreau                                      25     1   2  2  
 4 Adam Ginning             Ryan Sproul                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alex Barré-Boulet        Ivan Chekhovich          Conor Garland            60     1   2  2  
 2 Justin Almeida           Erik Foley               Sebastian Collberg       40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dylan Demelo             Ryan Sproul                                       60     1   2  2  
 2 Cale Fleury              Tyler Graovac                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Graovac            Nick Sorensen            60     1   2  2  
 2 Alex Barré-Boulet        Sebastian Collberg       40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nick Seeler              Dylan Demelo             60     1   2  2  
 2 Cale Fleury              Adam Ginning             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tyler Graovac                                     60     1   2  2  
 2 Erik Foley                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nick Seeler              Dylan Demelo             60     1   2  2  
 2 Cale Fleury              Adam Ginning             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alex Barré-Boulet        Conor Garland            60     1   2  2  
 2 Justin Almeida           Daniil Zharkov           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Ginning             Ryan Sproul              60     1   2  2  
 2 Dylan Demelo             Cale Fleury              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alex Barré-Boulet        Daniil Zharkov           Sebastian Collberg       Dylan Demelo             Ryan Sproul              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Graovac            Sebastian Collberg       Nick Sorensen            Nick Seeler              Dylan Demelo             

<b>Goaltenders</b>
Starting : Anton Khudobin           
Backup : Antoine Bibeau           

<b>Extra Forwards</b>
Normal : Ivan Chekhovich, Tyler Graovac, Justin Almeida - PP : Justin Almeida, Tyler Graovac - PK : Justin Almeida
<b>Extra Defensemen</b>
Normal : Ryan Sproul, Cale Fleury, Dylan Demelo - PP : Ryan Sproul - PK : Cale Fleury, Dylan Demelo
<b>Penalty Shots</b>
Tyler Graovac, Sebastian Collberg, Daniil Zharkov, Alex Barré-Boulet, Jussi Jokinen
<b>Custom OT Lines Forwards</b>
Ivan Chekhovich, Sebastian Collberg, Erik Foley, Alex Barré-Boulet, Jussi Jokinen, Nick Sorensen, Tyler Graovac, Justin Almeida, Conor Garland, Daniil Zharkov
<b>Custom OT Lines Defensemen</b>
Ryan Sproul, Dylan Demelo, Cale Fleury, Adam Ginning, Nick Seeler

<b>Scratches</b>
Cody Almond (Healthy), Reto Suri (Healthy), Charles-Olivier Roussel (Healthy), Nikita Zaitsev (Healthy), John Marino (Healthy)
François Tremblay (Healthy)</pre></div>
<h1 class="TeamLineFarm_TRD"><a id="Trois-RivièresDraveurs">Trois-Rivières Draveurs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#Trois-RivièresDraveurs">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#Trois-RivièresDraveurs">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#Trois-RivièresDraveurs">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#Trois-RivièresDraveurs">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#Trois-RivièresDraveurs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Trois-RivièresDraveurs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Trois-RivièresDraveurs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Blake Lizotte            John Leonard             Noah Gregor              29     1   1  3  
 2 Marcus Davidsson         Sam Lafferty             Frédérick Gaudreau       26     1   2  2  
 3 Gaetan Haas              Patrick Bjorkstrand      Mathieu Olivier          25     1   3  1  
 4 Curtis Douglas           Matteson Iacopelli       Maximilian Veronneau     20     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dean Kukan               Sebastian Aho (D)                                 35     1   2  2  
 2 Niko Mikkola             Kurtis MacDermid                                  35     1   3  1  
 3 Christian Wolanin        Derek Mathers                                     25     1   3  1  
 4 Dean Kukan               Sebastian Aho (D)                                 5      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Blake Lizotte            Patrick Bjorkstrand      Sam Lafferty             65     0   0  5  
 2 Gaetan Haas              John Leonard             Frédérick Gaudreau       35     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Sebastian Aho (D)        Noah Gregor                                       60     0   0  5  
 2 Dean Kukan               Mathieu Olivier                                   40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gaetan Haas              Mathieu Olivier          60     1   3  1  
 2 Blake Lizotte            Sam Lafferty             40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Sebastian Aho (D)        Dean Kukan               60     1   3  1  
 2 Niko Mikkola             Kurtis MacDermid         40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sam Lafferty                                      60     1   3  1  
 2 Gaetan Haas                                       40     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dean Kukan               Sebastian Aho (D)        60     2   3  0  
 2 Niko Mikkola             Kurtis MacDermid         40     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Noah Gregor              Patrick Bjorkstrand      50     1   2  2  
 2 Blake Lizotte            John Leonard             50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Niko Mikkola             Dean Kukan               60     1   2  2  
 2 Sebastian Aho (D)        Kurtis MacDermid         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Noah Gregor              Patrick Bjorkstrand      Sam Lafferty             Sebastian Aho (D)        Dean Kukan               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Gaetan Haas              John Leonard             Mathieu Olivier          Dean Kukan               Niko Mikkola             

<b>Goaltenders</b>
Starting : Ilya Samsonov            
Backup : Leland Irving            

<b>Extra Forwards</b>
Normal : John Leonard, Blake Lizotte, Patrick Bjorkstrand - PP : Noah Gregor, John Leonard - PK : Mathieu Olivier
<b>Extra Defensemen</b>
Normal : Dean Kukan, Niko Mikkola, Sebastian Aho (D) - PP : Sebastian Aho (D) - PK : Dean Kukan, Kurtis MacDermid
<b>Penalty Shots</b>
Patrick Bjorkstrand, Maximilian Veronneau, Matteson Iacopelli, John Leonard, Curtis Douglas
<b>Custom OT Lines Forwards</b>
Noah Gregor, Blake Lizotte, Mathieu Olivier, Maximilian Veronneau, Patrick Bjorkstrand, John Leonard, Sam Lafferty, Frédérick Gaudreau, Matteson Iacopelli, Marcus Davidsson
<b>Custom OT Lines Defensemen</b>
Dean Kukan, Sebastian Aho (D), Niko Mikkola, Christian Wolanin, Kurtis MacDermid

<b>Scratches</b>
Jay Beagle (Healthy), Josh Gorges (Head Injury), Antoine Marcoux (Healthy), Nicolas Deslauriers (Healthy), Alex Chiasson (Healthy)
Bokondji Imama (Healthy), Josh Currie (Healthy)</pre></div>
<h1 class="TeamLineFarm_MIL"><a id="MilwaukeeAdmirals">Milwaukee Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#MilwaukeeAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#MilwaukeeAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#MilwaukeeAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#MilwaukeeAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#MilwaukeeAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MilwaukeeAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MilwaukeeAdmirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Miikka Salomäki          Tage Thompson            Nicholas Caamano         36     0   2  3  
 2 Logan Brown              Mathieu Perreault        Drew Shore               33     0   2  3  
 3 Mark Jankowski           Marc-Olivier Roy         Freddie Hamilton         23     0   2  3  
 4 Cristoval Nieves         Luke Adam                Nick Palmieri            8      0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Joshua Jacobs            Patrick Wiercioch                                 35     1   3  1  
 2 T.J. Brodie              Spencer Stastney                                  33     1   3  1  
 3 Nate Schmidt             Stuart Percy                                      32     1   3  1  
 4 Patrick Wiercioch        Joshua Jacobs                                     0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Brown              Tage Thompson            Nicholas Caamano         60     0   0  5  
 2 Miikka Salomäki          Mark Jankowski           Drew Shore               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nate Schmidt             Stuart Percy                                      60     0   0  5  
 2 Spencer Stastney         T.J. Brodie                                       40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cristoval Nieves         Freddie Hamilton         60     0   5  0  
 2 Miikka Salomäki          Marc-Olivier Roy         40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joshua Jacobs            Patrick Wiercioch        60     0   5  0  
 2 T.J. Brodie              Spencer Stastney         40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Cristoval Nieves                                  60     0   5  0  
 2 Miikka Salomäki                                   40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joshua Jacobs            Patrick Wiercioch        60     0   5  0  
 2 T.J. Brodie              Spencer Stastney         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Logan Brown              Tage Thompson            60     0   2  3  
 2 Miikka Salomäki          Nicholas Caamano         40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joshua Jacobs            Patrick Wiercioch        60     1   3  1  
 2 T.J. Brodie              Spencer Stastney         40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Brown              Tage Thompson            Nicholas Caamano         Nate Schmidt             Joshua Jacobs            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Miikka Salomäki          Tage Thompson            Freddie Hamilton         Joshua Jacobs            Patrick Wiercioch        

<b>Goaltenders</b>
Starting : Chet Pickard             
Backup : Christopher Gibson       

<b>Extra Forwards</b>
Normal : Miikka Salomäki, Logan Brown, Freddie Hamilton - PP : Mathieu Perreault, Freddie Hamilton - PK : Nick Palmieri
<b>Extra Defensemen</b>
Normal : Joshua Jacobs, T.J. Brodie, Patrick Wiercioch - PP : Patrick Wiercioch - PK : Spencer Stastney, Stuart Percy
<b>Penalty Shots</b>
Logan Brown, Mathieu Perreault, Drew Shore, Luke Adam, Tage Thompson
<b>Custom OT Lines Forwards</b>
Logan Brown, Freddie Hamilton, Miikka Salomäki, Nicholas Caamano, Tage Thompson, Cristoval Nieves, Mark Jankowski, Marc-Olivier Roy, Drew Shore, Nick Palmieri
<b>Custom OT Lines Defensemen</b>
Joshua Jacobs, Patrick Wiercioch, Spencer Stastney, T.J. Brodie, Nate Schmidt

<b>Scratches</b>
Mitch Moroz (Healthy), Brett Pollock (Healthy), Kyle Platzer (Healthy), Dylan Blujus (Healthy), Jonas Johansson (Healthy)</pre></div>
<h1 class="TeamLineFarm_ALB"><a id="AlbanyDevils">Albany Devils</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#AlbanyDevils">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#AlbanyDevils">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#AlbanyDevils">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#AlbanyDevils">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#AlbanyDevils">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AlbanyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AlbanyDevils" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Roope Hintz              Philipp Kurashev         Blake Coleman            35     1   2  2  
 2 Zach Hall                Lucas Lessio             Taylor Raddysh           30     1   2  2  
 3 Lukas Sutter             Nolan Foote              Jackson Houck            20     1   2  2  
 4 Evan Barratt             Ryan Kuffner             Roope Hintz              15     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Dermott           Thomas Hickey                                     35     1   2  2  
 2 Dysin Mayo               Brenden Dillon                                    30     1   2  2  
 3 Adam Polasek             Gabriel Carlsson                                  20     1   2  2  
 4 Travis Dermott           Benjamin Finkelstein                              15     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Roope Hintz              Blake Coleman            Jackson Houck            60     1   2  2  
 2 Zach Hall                Lucas Lessio             Taylor Raddysh           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Dermott           Thomas Hickey                                     60     1   2  2  
 2 Dysin Mayo               Brenden Dillon                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Roope Hintz              Zach Hall                60     1   2  2  
 2 Jackson Houck            Blake Coleman            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Dermott           Thomas Hickey            60     1   2  2  
 2 Dysin Mayo               Brenden Dillon           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Roope Hintz                                       60     1   2  2  
 2 Zach Hall                                         40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Dermott           Thomas Hickey            60     1   2  2  
 2 Dysin Mayo               Brenden Dillon           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Roope Hintz              Zach Hall                60     1   2  2  
 2 Jackson Houck            Blake Coleman            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Dermott           Thomas Hickey            60     1   2  2  
 2 Dysin Mayo               Brenden Dillon           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Roope Hintz              Blake Coleman            Jackson Houck            Travis Dermott           Thomas Hickey            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Roope Hintz              Blake Coleman            Jackson Houck            Travis Dermott           Thomas Hickey            

<b>Goaltenders</b>
Starting : Jeremy Smith             
Backup : Alex Stalock             

<b>Extra Forwards</b>
Normal : Roope Hintz, Lukas Sutter, Evan Barratt - PP : Roope Hintz, Lukas Sutter - PK : Evan Barratt
<b>Extra Defensemen</b>
Normal : Adam Polasek, Gabriel Carlsson, Travis Dermott - PP : Adam Polasek - PK : Gabriel Carlsson, Travis Dermott
<b>Penalty Shots</b>
Roope Hintz, Zach Hall, Jackson Houck, Blake Coleman, Lukas Sutter
<b>Custom OT Lines Forwards</b>
Roope Hintz, Zach Hall, Jackson Houck, Blake Coleman, Lukas Sutter, Lucas Lessio, Evan Barratt, Taylor Raddysh, Nolan Foote, Philipp Kurashev
<b>Custom OT Lines Defensemen</b>
Travis Dermott, Thomas Hickey, Dysin Mayo, Brenden Dillon, Adam Polasek

<b>Scratches</b>
Zach Boychuk (Healthy), Andrew Fritsch (Healthy), Sam Kurker (Healthy)</pre></div>
<h1 class="TeamLineFarm_BRI"><a id="BridgeportSoundTigers">Bridgeport Sound Tigers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#BridgeportSoundTigers">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#BridgeportSoundTigers">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#BridgeportSoundTigers">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#BridgeportSoundTigers">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#BridgeportSoundTigers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BridgeportSoundTigers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BridgeportSoundTigers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andrej Nestrasil         Brandon Gignac           Christopher Clapperton   35     0   4  1  
 2 Sean Malone              Brett Seney              Julien Gauthier          30     0   2  3  
 3 Dane Fox                 Jordan Bellerive         Kerby Rychel             25     0   2  3  
 4 Jordan Bellerive         Dane Fox                 Christopher Clapperton   10     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cale Makar               Cal Foote                                         40     0   3  2  
 2 Noah Juulsen             Jérémy Roy                                        36     1   2  2  
 3 Julius Bergman           Robbie Russo                                      23     1   2  2  
 4 Brenden Kichton          Colton White                                      1      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brandon Gignac           Christopher Clapperton   Andrej Nestrasil         60     0   1  4  
 2 Dane Fox                 Sean Malone              Julien Gauthier          40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cale Makar               Robbie Russo                                      60     0   1  4  
 2 Cal Foote                Jérémy Roy                                        40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Malone              Dane Fox                 60     1   2  2  
 2 Brandon Gignac           Christopher Clapperton   40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cal Foote                Noah Juulsen             60     1   2  2  
 2 Julius Bergman           Robbie Russo             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sean Malone                                       60     1   2  2  
 2 Christopher Clapperton                            40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Juulsen             Cal Foote                60     1   2  2  
 2 Robbie Russo             Brenden Kichton          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Christopher Clapperton   Sean Malone              60     1   2  2  
 2 Andrej Nestrasil         Brandon Gignac           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cale Makar               Cal Foote                60     1   2  2  
 2 Noah Juulsen             Jérémy Roy               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrej Nestrasil         Brandon Gignac           Christopher Clapperton   Cale Makar               Cal Foote                

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Malone              Christopher Clapperton   Kerby Rychel             Noah Juulsen             Cal Foote                

<b>Goaltenders</b>
Starting : Jake Paterson            
Backup : Matthew Villalta         
Third : Shamil Shmakov           

<b>Extra Forwards</b>
Normal : Sean Malone, Brandon Gignac, Christopher Clapperton - PP : Sean Malone, Brandon Gignac - PK : Sean Malone
<b>Extra Defensemen</b>
Normal : Jérémy Roy, Cale Makar, Brenden Kichton - PP : Jérémy Roy - PK : Cale Makar, Brenden Kichton
<b>Penalty Shots</b>
Sean Malone, Cale Makar, Andrej Nestrasil, Christopher Clapperton, Dane Fox
<b>Custom OT Lines Forwards</b>
Andrej Nestrasil, Christopher Clapperton, Brandon Gignac, Kerby Rychel, Jonathan Dahlen, Sean Malone, Brett Seney, Julien Gauthier, Dane Fox, Jordan Bellerive
<b>Custom OT Lines Defensemen</b>
Cale Makar, Julius Bergman, Jérémy Roy, Brenden Kichton, Alexandre Carrier

<b>Scratches</b>
Kirill Kabanov (Healthy), Kelly Klima (Healthy), Kevin Klima (Healthy)</pre></div>
<h1 class="TeamLineFarm_CTW"><a id="ConnecticutWhale">Connecticut Whale</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#ConnecticutWhale">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#ConnecticutWhale">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#ConnecticutWhale">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#ConnecticutWhale">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#ConnecticutWhale">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ConnecticutWhale');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ConnecticutWhale" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Cozens             Ryan Donato              Denis Malgin             26     0   0  5  
 2 Henrik Borgstrom         Christian Fischer        Denis Guryanov           26     0   0  5  
 3 Trent Frederic           Erik Haula               Josh Norris              26     0   0  5  
 4 Glenn Gawdin             Jan Jenik                Jeremy Bracco            22     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brandon Carlo            Josh Mahura                                       34     1   2  2  
 2 Casey Fitzgerald         Gustav Forsling                                   34     1   2  2  
 3 Scott Walford            William Lagesson                                  32     1   2  2  
 4 William Lagesson         Josh Mahura                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Cozens             Denis Guryanov           Denis Malgin             55     0   0  5  
 2 Henrik Borgstrom         Ryan Donato              Christian Fischer        45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gustav Forsling          William Lagesson                                  55     0   0  5  
 2 Brandon Carlo            Josh Mahura                                       45     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Trent Frederic           Christian Fischer        55     1   4  0  
 2 Glenn Gawdin             Denis Malgin             45     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Carlo            Gustav Forsling          55     1   4  0  
 2 Josh Mahura              William Lagesson         45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Trent Frederic                                    55     0   5  0  
 2 Glenn Gawdin                                      45     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Carlo            Gustav Forsling          55     0   5  0  
 2 Josh Mahura              William Lagesson         45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Josh Norris              Jan Jenik                60     1   2  2  
 2 Glenn Gawdin             Jeremy Bracco            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Scott Walford            William Lagesson         60     1   2  2  
 2 Josh Mahura              Brandon Carlo            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dylan Cozens             Denis Guryanov           Denis Malgin             Gustav Forsling          Brandon Carlo            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Glenn Gawdin             Christian Fischer        Denis Malgin             Brandon Carlo            Gustav Forsling          

<b>Goaltenders</b>
Starting : Felix Sandström          
Backup : Michael DiPietro         

<b>Extra Forwards</b>
Normal : Denis Malgin, Jan Jenik, Erik Haula - PP : Trent Frederic, Josh Norris - PK : Ryan Donato
<b>Extra Defensemen</b>
Normal : Gustav Forsling, Brandon Carlo, Scott Walford - PP : William Lagesson - PK : Gustav Forsling, Josh Mahura
<b>Penalty Shots</b>
Denis Guryanov, Denis Malgin, Dylan Cozens, Erik Haula, Jan Jenik
<b>Custom OT Lines Forwards</b>
Denis Malgin, Denis Guryanov, Henrik Borgstrom, Ryan Donato, Christian Fischer, Trent Frederic, Josh Norris, Dylan Cozens, Glenn Gawdin, Erik Haula
<b>Custom OT Lines Defensemen</b>
Gustav Forsling, Brandon Carlo, Scott Walford, Josh Mahura, William Lagesson

<b>Scratches</b>
Aidan Dudas (Healthy), Cam Hillis (Healthy), Damir Zhafyarov (Healthy), Ziyat Paigin (Healthy), Matej Tomek (Healthy)</pre></div>
<h1 class="TeamLineFarm_BNG"><a id="BinghamtonSenators">Binghamton Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#BinghamtonSenators">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#BinghamtonSenators">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#BinghamtonSenators">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#BinghamtonSenators">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#BinghamtonSenators">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BinghamtonSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BinghamtonSenators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 German Rubtsov           Kevin Roy                Noah Rod                 25     0   2  3  
 2 Maxim Shalunov           Connor Rankin            Derek Dorsett            25     0   2  3  
 3 Max McCormick            Danick Martel            Matt Puempel             25     1   2  2  
 4 Jérémy Grégoire          Arttu Ruotsalainen       German Rubtsov           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Andrew Nielsen           Brogan Rafferty                                   25     1   2  2  
 2 Christian Ehrhoff        Hunter Drew                                       25     1   2  2  
 3 Mason Geertsen           Jérémy Grégoire                                   25     1   2  2  
 4 Brogan Rafferty          Christian Ehrhoff                                 25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 German Rubtsov           Kevin Roy                Noah Rod                 60     1   2  2  
 2 Connor Rankin            Maxim Shalunov           Derek Dorsett            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mason Geertsen           Brogan Rafferty                                   60     1   2  2  
 2 Christian Ehrhoff        Hunter Drew                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Noah Rod                 German Rubtsov           60     1   2  2  
 2 Jérémy Grégoire          Kevin Roy                40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Hunter Drew              Christian Ehrhoff        60     1   2  2  
 2 Mason Geertsen           Brogan Rafferty          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Noah Rod                                          60     1   2  2  
 2 German Rubtsov                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Hunter Drew              Christian Ehrhoff        60     1   2  2  
 2 Mason Geertsen           Brogan Rafferty          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Noah Rod                 German Rubtsov           60     1   2  2  
 2 Maxim Shalunov           Kevin Roy                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mason Geertsen           Christian Ehrhoff        60     1   2  2  
 2 Hunter Drew              Brogan Rafferty          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   German Rubtsov           Noah Rod                 Maxim Shalunov           Brogan Rafferty          Christian Ehrhoff        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   German Rubtsov           Noah Rod                 Maxim Shalunov           Brogan Rafferty          Christian Ehrhoff        

<b>Goaltenders</b>
Starting : Igor Bobkov              
Backup : Ilya Konovalov           
Third : Stephon Williams         

<b>Extra Forwards</b>
Normal : Gustav Possler, German Rubtsov, Jayden Halbgewachs - PP : Gustav Possler, German Rubtsov - PK : Jayden Halbgewachs
<b>Extra Defensemen</b>
Normal : Mason Geertsen, Christian Ehrhoff, Brogan Rafferty - PP : Mason Geertsen - PK : Christian Ehrhoff, Brogan Rafferty
<b>Penalty Shots</b>
Kevin Roy, German Rubtsov, Noah Rod, Jérémy Grégoire, Danick Martel
<b>Custom OT Lines Forwards</b>
Noah Rod, German Rubtsov, Derek Dorsett, Kevin Roy, Danick Martel, Connor Rankin, Max McCormick, Jérémy Grégoire, Arttu Ruotsalainen, Gustav Possler
<b>Custom OT Lines Defensemen</b>
Andrew Nielsen, Christian Ehrhoff, Hunter Drew, Brogan Rafferty, Mason Geertsen

<b>Scratches</b>
Marcus Sorensen (Healthy), Andre Petersson (Healthy), Kole Lind (Healthy)</pre></div>
<h1 class="TeamLineFarm_ADK"><a id="AdirondackPhantoms">Adirondack Phantoms</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#AdirondackPhantoms">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#AdirondackPhantoms">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#AdirondackPhantoms">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#AdirondackPhantoms">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#AdirondackPhantoms">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AdirondackPhantoms');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AdirondackPhantoms" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Fredrik Karlstrom        Zach Hamill              Wojtek Wolski            25     0   0  5  
 2 Oscar Lindberg           Benoit Pouliot           Sebastian Repo           25     0   0  5  
 3 Mike Winther             Alexandre Mallet         Michael Parks            25     0   0  5  
 4 Zach Hamill              Benoit Pouliot           Mike Winther             25     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney                                    25     0   2  3  
 2 Daniel Brickley          Teemu Eronen                                      25     0   5  0  
 3 Randy Gazzola            Tyler Lewington                                   25     0   5  0  
 4 Alex Plante              Taylor Chorney                                    25     0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Fredrik Karlstrom        Zach Hamill              Wojtek Wolski            60     0   0  5  
 2 Mike Winther             Benoit Pouliot           Sebastian Repo           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyler Lewington          Taylor Chorney                                    60     0   0  5  
 2 Daniel Brickley          Alex Plante                                       40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Wojtek Wolski            Sebastian Repo           60     0   5  0  
 2 Fredrik Karlstrom        Mike Winther             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Lewington          Alex Plante              60     0   5  0  
 2 Daniel Brickley          Taylor Chorney           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sebastian Repo                                    60     0   5  0  
 2 Fredrik Karlstrom                                 40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Lewington          Taylor Chorney           60     0   5  0  
 2 Daniel Brickley          Alex Plante              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Fredrik Karlstrom        Sebastian Repo           60     0   0  5  
 2 Wojtek Wolski            Mike Winther             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Plante              Taylor Chorney           60     0   2  3  
 2 Daniel Brickley          Tyler Lewington          40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Fredrik Karlstrom        Wojtek Wolski            Sebastian Repo           Alex Plante              Teemu Eronen             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Fredrik Karlstrom        Mike Winther             Sebastian Repo           Alex Plante              Tyler Lewington          

<b>Goaltenders</b>
Starting : Aaron Dell               
Backup : Jakub Kovar              
Third : Anthony Brodeur          

<b>Extra Forwards</b>
Normal : Fredrik Karlstrom, Wojtek Wolski, Sebastian Repo - PP : Fredrik Karlstrom, Sebastian Repo - PK : Fredrik Karlstrom
<b>Extra Defensemen</b>
Normal : Daniel Brickley, Tyler Lewington, Taylor Chorney - PP : Tyler Lewington - PK : Alex Plante, Tyler Lewington
<b>Penalty Shots</b>
Fredrik Karlstrom, Sebastian Repo, Benoit Pouliot, Mike Winther, Wojtek Wolski
<b>Custom OT Lines Forwards</b>
Keegan Kolesar, Sebastian Repo, Fredrik Karlstrom, Wojtek Wolski, Mike Winther, Benoit Pouliot, Oscar Lindberg, Michael Parks, Alexandre Mallet, Zach Hamill
<b>Custom OT Lines Defensemen</b>
Alex Plante, Tyler Lewington, Teemu Eronen, Daniel Brickley, Taylor Chorney

<b>Scratches</b>
Vladimir Sobotka (Healthy), Chris Martenet (Healthy)</pre></div>
<h1 class="TeamLineFarm_WBS"><a id="Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#Wilkes-Barre/ScrantonPenguins">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#Wilkes-Barre/ScrantonPenguins">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#Wilkes-Barre/ScrantonPenguins">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#Wilkes-Barre/ScrantonPenguins">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#Wilkes-Barre/ScrantonPenguins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wilkes-Barre/ScrantonPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wilkes-Barre/ScrantonPenguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Colin White              Mikhail Maltsev          Zachary Senyshyn         33     0   0  5  
 2 Jan Kovar                Dominik Simon            Samuel Blais             31     1   0  4  
 3 Raphael Lavoie           Skyler McKenzie          Ostap Safin              26     1   2  2  
 4 Reid Duke                Milan Michalek           Maxime Talbot            10     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Troy Stecher             Justin Braun                                      37     1   3  1  
 2 Axel Andersson           Jonas Siegenthaler                                36     1   3  1  
 3 Andrew O'Brien           Sean Day                                          20     1   4  0  
 4 Axel Andersson           Andrew O'Brien                                    7      1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Colin White              Jan Kovar                Samuel Blais             53     0   0  5  
 2 Dominik Simon            Mikhail Maltsev          Zachary Senyshyn         47     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Troy Stecher             Andrew O'Brien                                    60     0   0  5  
 2 Axel Andersson           Justin Braun                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Maxime Talbot            Zachary Senyshyn         54     1   4  0  
 2 Reid Duke                Samuel Blais             46     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Troy Stecher             Jonas Siegenthaler       54     1   4  0  
 2 Sean Day                 Justin Braun             46     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Maxime Talbot                                     50     0   5  0  
 2 Reid Duke                                         50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Sean Day                 Andrew O'Brien           53     0   5  0  
 2 Justin Braun             Jonas Siegenthaler       47     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dominik Simon            Colin White              55     0   1  4  
 2 Jan Kovar                Zachary Senyshyn         45     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Troy Stecher             Andrew O'Brien           50     0   3  2  
 2 Axel Andersson           Justin Braun             50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Colin White              Dominik Simon            Samuel Blais             Troy Stecher             Andrew O'Brien           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Reid Duke                Maxime Talbot            Zachary Senyshyn         Jonas Siegenthaler       Justin Braun             

<b>Goaltenders</b>
Starting : Kaapo Kähkönen           
Backup : Charlie Lindgren         

<b>Extra Forwards</b>
Normal : Skyler McKenzie, Raphael Lavoie, Ostap Safin - PP : Skyler McKenzie, Raphael Lavoie - PK : Ostap Safin
<b>Extra Defensemen</b>
Normal : Jonas Siegenthaler, Axel Andersson, Sean Day - PP : Axel Andersson - PK : Jonas Siegenthaler, Sean Day
<b>Penalty Shots</b>
Colin White, Samuel Blais, Jan Kovar, Zachary Senyshyn, Milan Michalek
<b>Custom OT Lines Forwards</b>
Maxime Talbot, Colin White, Jan Kovar, Samuel Blais, Reid Duke, Dominik Simon, Mikhail Maltsev, Zachary Senyshyn, Raphael Lavoie, Milan Michalek
<b>Custom OT Lines Defensemen</b>
Troy Stecher, Jonas Siegenthaler, Justin Braun, Axel Andersson, Andrew O'Brien

<b>Scratches</b>
Ryan Kujawinski (Healthy), Robin Norell (Healthy), Matt Martin (Healthy), Robert Bortuzzo (Healthy), Mac Bennett (Healthy)
Max Hermens (Healthy), Patrick Killeen (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="ChicoutimiSaguenéens">Chicoutimi Saguenéens</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#ChicoutimiSaguenéens">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#ChicoutimiSaguenéens">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#ChicoutimiSaguenéens">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#ChicoutimiSaguenéens">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#ChicoutimiSaguenéens">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicoutimiSaguenéens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicoutimiSaguenéens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Gabriel Gagné            Joel Farabee             Cody Glass               30     0   0  5  
 2 Jack Evans               Maxime Comtois           Yakov Trenin             30     0   0  5  
 3 Lane Pederson            Isaac Ratcliffe          Vitali Abramov           25     1   1  3  
 4 Nate Schnarr             Unknown Player           Philip Lane              15     1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brett Kulak              Brett Lernout                                     35     0   3  2  
 2 Gavin Bayreuther         Sean Durzi                                        35     0   2  3  
 3 Frédéric Allard          Mikael Wikstrand                                  30     0   2  3  
 4 Unknown Player           Brett Lernout                                     0      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joel Farabee             Gabriel Gagné            Maxime Comtois           60     0   0  5  
 2 Philip Lane              Jack Evans               Cody Glass               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brett Lernout            Brett Kulak                                       60     1   2  2  
 2 Frédéric Allard          Gavin Bayreuther                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joel Farabee             Maxime Comtois           60     0   2  3  
 2 Gabriel Gagné            Yakov Trenin             40     0   2  3  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brett Lernout            Gavin Bayreuther         60     1   2  2  
 2 Mikael Wikstrand         Brett Kulak              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Maxime Comtois                                    60     1   2  2  
 2 Vitali Abramov                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brett Kulak              Brett Lernout            60     1   2  2  
 2 Unknown Player           Mikael Wikstrand         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gabriel Gagné            Joel Farabee             60     0   0  5  
 2 Isaac Ratcliffe          Cody Glass               40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brett Kulak              Brett Lernout            60     1   2  2  
 2 Sean Durzi               Frédéric Allard          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joel Farabee             Gabriel Gagné            Maxime Comtois           Brett Kulak              Brett Lernout            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joel Farabee             Gabriel Gagné            Maxime Comtois           Brett Kulak              Brett Lernout            

<b>Goaltenders</b>
Starting : Sami Aittokallio         
Backup : Mason McDonald           

<b>Extra Forwards</b>
Normal : Brad Morrison, Joel Farabee, Gabriel Gagné - PP : Maxime Comtois, Jack Evans - PK : Nate Schnarr
<b>Extra Defensemen</b>
Normal : Sean Durzi, Unknown Player, Brett Kulak - PP : Brett Lernout - PK : Gavin Bayreuther, Brett Lernout
<b>Penalty Shots</b>
Brad Morrison, Joel Farabee, Gabriel Gagné, Maxime Comtois, Jack Evans
<b>Custom OT Lines Forwards</b>
Nate Schnarr, Brad Morrison, Joel Farabee, Gabriel Gagné, Maxime Comtois, Philip Lane, Jack Evans, Lane Pederson, Yakov Trenin, Isaac Ratcliffe
<b>Custom OT Lines Defensemen</b>
Sean Durzi, Unknown Player, Brett Lernout, Gavin Bayreuther, Mikael Wikstrand

<b>Scratches</b>
Arvid Henrikson (Healthy), J.T. Brown (Healthy), Callum Booth (Healthy)</pre></div>
<h1 class="TeamLineFarm_RNO"><a id="Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#Rouyn-NorandaHuskies">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#Rouyn-NorandaHuskies">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#Rouyn-NorandaHuskies">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#Rouyn-NorandaHuskies">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#Rouyn-NorandaHuskies">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rouyn-NorandaHuskies');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rouyn-NorandaHuskies" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Francis Perron           Joel Teasdale            Joey Anderson            30     0   2  3  
 2 Manuel Wiederer          Julien Nantel            Martins Dzierkals        30     0   2  3  
 3 Peter Abbandonato        Rafaël Harvey-Pinard     Antoine Waked            20     0   3  2  
 4 Félix Bibeau             Alex Beaucage            Alexandre Fortin         20     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Dobson              Philippe Myers                                    30     0   3  2  
 2 Jérémy Lauzon            Samuel Regis                                      30     0   3  2  
 3 Justin Bergeron          Jacob Neveu                                       30     0   3  2  
 4 Samuel Regis             Noah Dobson                                       10     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Francis Perron           Vincent Marleau          Joey Anderson            60     0   1  4  
 2 Manuel Wiederer          Alexandre Fortin         Martins Dzierkals        40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Dobson              Philippe Myers                                    60     0   2  3  
 2 Jérémy Lauzon            Justin Bergeron                                   40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Martins Dzierkals        Rafaël Harvey-Pinard     60     1   4  0  
 2 Manuel Wiederer          Antoine Waked            40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jérémy Lauzon            Jacob Neveu              60     0   5  0  
 2 Philippe Myers           Noah Dobson              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Martins Dzierkals                                 60     0   5  0  
 2 Antoine Waked                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jérémy Lauzon            Noah Dobson              60     0   5  0  
 2 Philippe Myers           Jacob Neveu              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Peter Abbandonato        Alex Beaucage            60     0   2  3  
 2 Joel Teasdale            Rafaël Harvey-Pinard     40     0   4  1  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Dobson              Justin Bergeron          60     0   3  2  
 2 Jérémy Lauzon            Philippe Myers           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Francis Perron           Joel Teasdale            Martins Dzierkals        Noah Dobson              Philippe Myers           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Martins Dzierkals        Rafaël Harvey-Pinard     Manuel Wiederer          Noah Dobson              Jérémy Lauzon            

<b>Goaltenders</b>
Starting : Alex Nedeljkovic         
Backup : Samuel Harvey            

<b>Extra Forwards</b>
Normal : Antoine Waked, Rafaël Harvey-Pinard, Peter Abbandonato - PP : Antoine Waked, Vincent Marleau - PK : Peter Abbandonato
<b>Extra Defensemen</b>
Normal : Justin Bergeron, Noah Dobson, Jérémy Lauzon - PP : Justin Bergeron - PK : Jérémy Lauzon, Jacob Neveu
<b>Penalty Shots</b>
Francis Perron, Martins Dzierkals, Julien Nantel, Joel Teasdale, Alexandre Fortin
<b>Custom OT Lines Forwards</b>
Francis Perron, Félix Bibeau, Manuel Wiederer, Martins Dzierkals, Julien Nantel, Antoine Waked, Peter Abbandonato, Alexandre Fortin, Rafaël Harvey-Pinard, Joel Teasdale
<b>Custom OT Lines Defensemen</b>
Noah Dobson, Philippe Myers, Jérémy Lauzon, Jacob Neveu, Justin Bergeron

<b>Scratches</b>
Alexis Arsenault (Healthy), William Rouleau (Healthy), Jean-Christophe Beaudin (Healthy), Zachary Lauzon (Healthy), Zachary Emond (Healthy)</pre></div>
<h1 class="TeamLineFarm_MIH"><a id="MercerIslandHafgufa">Mercer Island Hafgufa</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Kraken Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#MercerIslandHafgufa">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#MercerIslandHafgufa">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#MercerIslandHafgufa">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#MercerIslandHafgufa">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#MercerIslandHafgufa">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MercerIslandHafgufa');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MercerIslandHafgufa" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Quenneville         Daniel Bernhardt         Ryan Haggerty            25     0   4  1  
 2 Otto Somppi              Yevgeni Svechnikov       Vinni Lettieri           25     0   1  4  
 3 Rem Pitlick              Janne Kuokkanen          Justin Brazeau           25     0   4  1  
 4 Mason Shaw               Brayden Burke            Paul Byron               25     0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Scott Mayfield           Nick Ebert                                        25     0   4  1  
 2 Chaz Reddekopp           Jordan Schneider                                  25     0   1  4  
 3 Filip Berglund           Reid McNeill                                      25     0   1  4  
 4 Braydyn Chizen           Scott Mayfield                                    25     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Quenneville         Daniel Bernhardt         Ryan Haggerty            60     0   0  5  
 2 Paul Byron               Yevgeni Svechnikov       Vinni Lettieri           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Scott Mayfield           Nick Ebert                                        60     0   0  5  
 2 Chaz Reddekopp           Jordan Schneider                                  40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Otto Somppi              Daniel Bernhardt         60     0   5  0  
 2 John Quenneville         Vinni Lettieri           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Scott Mayfield           Nick Ebert               60     0   5  0  
 2 Chaz Reddekopp           Jordan Schneider         40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Otto Somppi                                       60     0   5  0  
 2 Vinni Lettieri                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Scott Mayfield           Nick Ebert               60     0   5  0  
 2 Chaz Reddekopp           Jordan Schneider         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Daniel Bernhardt         John Quenneville         60     0   4  1  
 2 Ryan Haggerty            Paul Byron               40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Scott Mayfield           Nick Ebert               60     0   1  4  
 2 Chaz Reddekopp           Jordan Schneider         40     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Quenneville         Daniel Bernhardt         Ryan Haggerty            Scott Mayfield           Nick Ebert               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Otto Somppi              Daniel Bernhardt         Vinni Lettieri           Scott Mayfield           Nick Ebert               

<b>Goaltenders</b>
Starting : Denis Godla              
Backup : Alexandre Bélanger       
Third : Daniel Vladar            

<b>Extra Forwards</b>
Normal : Daniel Bernhardt, Rem Pitlick, Janne Kuokkanen - PP : Daniel Bernhardt, Rem Pitlick - PK : Janne Kuokkanen
<b>Extra Defensemen</b>
Normal : Filip Berglund, Scott Mayfield, Braydyn Chizen - PP : Filip Berglund - PK : Scott Mayfield, Braydyn Chizen
<b>Penalty Shots</b>
Daniel Bernhardt, John Quenneville, Ryan Haggerty, Paul Byron, Yevgeni Svechnikov
<b>Custom OT Lines Forwards</b>
Daniel Bernhardt, John Quenneville, Ryan Haggerty, Paul Byron, Yevgeni Svechnikov, Vinni Lettieri, Rem Pitlick, Janne Kuokkanen, Otto Somppi, Justin Brazeau
<b>Custom OT Lines Defensemen</b>
Braydyn Chizen, Nick Ebert, Chaz Reddekopp, Jordan Schneider, Filip Berglund

<b>Scratches</b>
Andrej Meszaros (Healthy), Corey Schueneman (Healthy), Kevin Hancock (Healthy), Matthew Bradley (Healthy)</pre></div>
<h1 class="TeamLineFarm_PEO"><a id="PeoriaRivermen">Peoria Rivermen</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#PeoriaRivermen">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#PeoriaRivermen">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#PeoriaRivermen">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#PeoriaRivermen">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#PeoriaRivermen">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PeoriaRivermen');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PeoriaRivermen" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 David Gustafsson         David Booth              Blake Speers             30     0   2  3  
 2 Chase De Leo             Mason Appleton           John Hayden              28     0   1  4  
 3 Oskar Steen              Antoine Roussel          Liam Reddox              26     0   1  4  
 4 Tye Felhaber             Dennis Yan               Austin Lemieux           16     0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Klein              Ludwig Bystrom                                    34     0   2  3  
 2 Jacob Larsson            Niklas Hansson                                    33     0   2  3  
 3 Andy Welinski            Jack Hillen                                       27     0   2  3  
 4 Andy Welinski            Kevin Klein                                       6      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 David Gustafsson         John Hayden              Blake Speers             55     0   0  5  
 2 Mason Appleton           David Booth              Chase De Leo             45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Klein              Jack Hillen                                       50     0   0  5  
 2 Jacob Larsson            Niklas Hansson                                    50     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Oskar Steen              Liam Reddox              53     0   5  0  
 2 John Hayden              Mason Appleton           47     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Hillen              Niklas Hansson           52     0   5  0  
 2 Jacob Larsson            Kevin Klein              48     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Oskar Steen                                       53     0   5  0  
 2 Liam Reddox                                       47     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Klein              Niklas Hansson           52     1   2  2  
 2 Jacob Larsson            Andy Welinski            48     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Oskar Steen              Blake Speers             55     0   2  3  
 2 John Hayden              Chase De Leo             45     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Niklas Hansson           Kevin Klein              52     0   2  3  
 2 Jacob Larsson            Jack Hillen              48     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   David Gustafsson         John Hayden              Mason Appleton           Jacob Larsson            Niklas Hansson           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Oskar Steen              David Booth              Liam Reddox              Jacob Larsson            Niklas Hansson           

<b>Goaltenders</b>
Starting : Marcus Hogberg           
Backup : Andrey Makarov           

<b>Extra Forwards</b>
Normal : Oskar Steen, Liam Reddox, Dennis Yan - PP : Oskar Steen, Chase De Leo - PK : David Gustafsson
<b>Extra Defensemen</b>
Normal : Andy Welinski, Jacob Larsson, Niklas Hansson - PP : Andy Welinski - PK : Andy Welinski, Kevin Klein
<b>Penalty Shots</b>
Oskar Steen, Liam Reddox, Chase De Leo, Mason Appleton, John Hayden
<b>Custom OT Lines Forwards</b>
Oskar Steen, Austin Lemieux, Liam Reddox, Mason Appleton, John Hayden, Chase De Leo, Tye Felhaber, David Booth, Dennis Yan, Blake Speers
<b>Custom OT Lines Defensemen</b>
Niklas Hansson, Kevin Klein, Jacob Larsson, Ludwig Bystrom, Jack Hillen

<b>Scratches</b>
Patrick McNally (Torn Left MCL Injury), Jordan Szwarz (Healthy), Alex Dostie (Healthy), Miroslav Svoboda (Healthy)</pre></div>
<h1 class="TeamLineFarm_NOR"><a id="NorfolkAdmirals">Norfolk Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#NorfolkAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#NorfolkAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#NorfolkAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#NorfolkAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#NorfolkAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NorfolkAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NorfolkAdmirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Markus Granlund          Austin Wagner            Josh Ho-Sang             33     0   0  5  
 2 Ty Dellandrea            Tomas Jurco              Nicolas Aubé-Kubel       32     0   0  5  
 3 Mads Eller               Dmytro Timashov          Pavel Padakin            25     1   1  3  
 4 Lucas Wallmark           Pontus Aberg             Ben Smith                10     1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Quinn Hughes             Sam Jardine                                       35     1   1  3  
 2 Miro Heiskanen           Ryan Merkley                                      35     1   1  3  
 3 Riley Stadel             Radko Gudas                                       25     1   4  0  
 4 Quinn Hughes             Miro Heiskanen                                    5      0   0  5  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Markus Granlund          Tomas Jurco              Josh Ho-Sang             60     0   0  5  
 2 Ty Dellandrea            Mads Eller               Nicolas Aubé-Kubel       40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Quinn Hughes             Miro Heiskanen                                    75     0   0  5  
 2 Ryan Merkley             Sam Jardine                                       25     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ty Dellandrea            Pavel Padakin            50     0   5  0  
 2 Mads Eller               Austin Wagner            50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Miro Heiskanen           Sam Jardine              50     0   5  0  
 2 Radko Gudas              Riley Stadel             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Austin Wagner                                     60     0   5  0  
 2 Ty Dellandrea                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Miro Heiskanen           Sam Jardine              60     0   5  0  
 2 Radko Gudas              Riley Stadel             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Markus Granlund          Josh Ho-Sang             60     0   0  5  
 2 Mads Eller               Nicolas Aubé-Kubel       40     1   3  1  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Quinn Hughes             Sam Jardine              60     1   1  3  
 2 Miro Heiskanen           Ryan Merkley             40     0   0  5  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Markus Granlund          Tomas Jurco              Josh Ho-Sang             Quinn Hughes             Miro Heiskanen           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ty Dellandrea            Nicolas Aubé-Kubel       Pavel Padakin            Sam Jardine              Radko Gudas              

<b>Goaltenders</b>
Starting : Spencer Knight           
Backup : Ken Appleby              

<b>Extra Forwards</b>
Normal : Pontus Aberg, Nicolas Aubé-Kubel, Austin Wagner - PP : Pontus Aberg, Nicolas Aubé-Kubel - PK : Austin Wagner
<b>Extra Defensemen</b>
Normal : Riley Stadel, Ryan Merkley, Radko Gudas - PP : Riley Stadel - PK : Ryan Merkley, Radko Gudas
<b>Penalty Shots</b>
Ben Smith, Josh Ho-Sang, Tomas Jurco, Markus Granlund, Pavel Padakin
<b>Custom OT Lines Forwards</b>
Ben Smith, Josh Ho-Sang, Tomas Jurco, Markus Granlund, Pavel Padakin, Mads Eller, Pontus Aberg, Nicolas Aubé-Kubel, Austin Wagner, Lucas Wallmark
<b>Custom OT Lines Defensemen</b>
Quinn Hughes, Sam Jardine, Radko Gudas, Miro Heiskanen, Riley Stadel

<b>Scratches</b>
Andrei Loktionov (Healthy), Mike Vecchione (Healthy), Brandon Burlon (Healthy), Patrick Holland (Healthy), Matt Schmalz (Healthy)
Liam O'Brien (Healthy), Kasper Krog (Healthy)</pre></div>
<h1 class="TeamLineFarm_ROB"><a id="RobervalDwarfs">Roberval Dwarfs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#RobervalDwarfs">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#RobervalDwarfs">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#RobervalDwarfs">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#RobervalDwarfs">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#RobervalDwarfs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RobervalDwarfs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RobervalDwarfs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Trevor Lewis             Ville Leskinen           Alexander Barabanov      25     1   2  2  
 2 Aleksi Saarela           Kasperi Kapanen          Teemu Turunen            25     1   2  2  
 3 Ville Leino              Petrus Palmu             Juuso Ikonen             25     1   2  2  
 4 Andrew Crescenzi         Alexander Barabanov      Jesse Ylonen             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Eetu Sopanen             Olli Juolevi                                      25     1   2  2  
 2 Oliwer Kaski             Lassi Thomson                                     25     1   2  2  
 3 Jan Kostalek             Robin Salo                                        25     1   2  2  
 4 Eetu Sopanen             Olli Juolevi                                      25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Trevor Lewis             Ville Leskinen           Alexander Barabanov      60     1   2  2  
 2 Aleksi Saarela           Kasperi Kapanen          Teemu Turunen            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Eetu Sopanen             Olli Juolevi                                      60     1   2  2  
 2 Oliwer Kaski             Lassi Thomson                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexander Barabanov      Ville Leskinen           60     1   2  2  
 2 Kasperi Kapanen          Trevor Lewis             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Eetu Sopanen             Olli Juolevi             60     1   2  2  
 2 Oliwer Kaski             Lassi Thomson            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alexander Barabanov                               60     1   2  2  
 2 Ville Leskinen                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Eetu Sopanen             Olli Juolevi             60     1   2  2  
 2 Oliwer Kaski             Lassi Thomson            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexander Barabanov      Ville Leskinen           60     1   2  2  
 2 Kasperi Kapanen          Trevor Lewis             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Eetu Sopanen             Olli Juolevi             60     1   2  2  
 2 Oliwer Kaski             Lassi Thomson            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Trevor Lewis             Ville Leskinen           Alexander Barabanov      Eetu Sopanen             Olli Juolevi             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Trevor Lewis             Ville Leskinen           Alexander Barabanov      Eetu Sopanen             Olli Juolevi             

<b>Goaltenders</b>
Starting : Zachary Fucale           
Backup : Harri Sateri             

<b>Extra Forwards</b>
Normal : Tuukka Tieksola, Juuso Ikonen, Ville Leino - PP : Tuukka Tieksola, Juuso Ikonen - PK : Ville Leino
<b>Extra Defensemen</b>
Normal : Jan Kostalek, Robin Salo, Oliwer Kaski - PP : Jan Kostalek - PK : Robin Salo, Oliwer Kaski
<b>Penalty Shots</b>
Alexander Barabanov, Ville Leskinen, Kasperi Kapanen, Trevor Lewis, Teemu Turunen
<b>Custom OT Lines Forwards</b>
Alexander Barabanov, Ville Leskinen, Kasperi Kapanen, Trevor Lewis, Teemu Turunen, Aleksi Saarela, Juuso Ikonen, Ville Leino, Petrus Palmu, Andrew Crescenzi
<b>Custom OT Lines Defensemen</b>
Eetu Sopanen, Olli Juolevi, Oliwer Kaski, Lassi Thomson, Jan Kostalek

<b>Scratches</b>
Olivier Galipeau (Healthy), Jesse Blacker (Healthy), Trevor Smith (Healthy), Nikita Jevpalovs (Healthy), Justin Kirkland (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="ChicagoWolves">Chicago Wolves</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#ChicagoWolves">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#ChicagoWolves">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#ChicagoWolves">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#ChicagoWolves">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#ChicagoWolves">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoWolves');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoWolves" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Adam Brooks              Brandon Hagel            Nicklas Jensen           29     1   2  2  
 2 Joseph Labate            Matt Filipe              Spencer Smallman         29     1   2  2  
 3 Tyler Soy                Mattias Tedenby          Justin Shugg             26     1   2  2  
 4 Anton Lander             Joseph Labate            Mattias Tedenby          16     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Backman          David Schlemko                                    25     1   2  2  
 2 Tom Gilbert              Lucas Johansen                                    25     1   2  2  
 3 Alex Peters              Matthew Cairns                                    25     1   2  2  
 4 Mattias Backman          David Schlemko                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mattias Tedenby          Brandon Hagel            Nicklas Jensen           60     1   2  2  
 2 Joseph Labate            Justin Shugg             Spencer Smallman         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Backman          David Schlemko                                    60     1   2  2  
 2 Alex Peters              Lucas Johansen                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anton Lander             Brandon Hagel            60     1   2  2  
 2 Joseph Labate            Nicklas Jensen           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mattias Backman          David Schlemko           60     1   2  2  
 2 Matthew Cairns           Lucas Johansen           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nicklas Jensen                                    60     1   2  2  
 2 Anton Lander                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mattias Backman          David Schlemko           60     1   2  2  
 2 Matthew Cairns           Lucas Johansen           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mattias Tedenby          Brandon Hagel            60     1   2  2  
 2 Joseph Labate            Nicklas Jensen           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mattias Backman          David Schlemko           60     1   2  2  
 2 Alex Peters              Lucas Johansen           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anton Lander             Mattias Tedenby          Nicklas Jensen           Mattias Backman          David Schlemko           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anton Lander             Mattias Tedenby          Nicklas Jensen           Mattias Backman          David Schlemko           

<b>Goaltenders</b>
Starting : Brandon Halverson        
Backup : Matt O'Connor            

<b>Extra Forwards</b>
Normal : Anton Lander, Mattias Tedenby, Nicklas Jensen - PP : Joseph Labate, Brandon Hagel - PK : Nicklas Jensen
<b>Extra Defensemen</b>
Normal : Alex Peters, Matthew Cairns, David Schlemko - PP : Alex Peters - PK : Matthew Cairns, Mattias Backman
<b>Penalty Shots</b>
Mattias Tedenby, Anton Lander, Joseph Labate, Nicklas Jensen, Brandon Hagel
<b>Custom OT Lines Forwards</b>
Mattias Tedenby, Anton Lander, Joseph Labate, Nicklas Jensen, Brandon Hagel, Tyler Soy, Spencer Smallman, Matt Filipe, Justin Shugg, Connor Crisp
<b>Custom OT Lines Defensemen</b>
Mattias Backman, David Schlemko, Tom Gilbert, Lucas Johansen, Alex Peters

<b>Scratches</b>
Carl Klingberg (Healthy), David Desharnais (Healthy), Mats Zuccarello (Healthy), Trevor Carrick (Right Eye Injury), Petr Straka (Healthy)
Andreas Martinsen (Healthy)</pre></div>
<h1 class="TeamLineFarm_PAR"><a id="HendersonSilverKnights">Henderson Silver Knights</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#HendersonSilverKnights">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#HendersonSilverKnights">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#HendersonSilverKnights">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#HendersonSilverKnights">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#HendersonSilverKnights">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HendersonSilverKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HendersonSilverKnights" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor Hurley            Justin Bailey            Nathan Bastian           40     0   1  4  
 2 Nathan Todd              Linus Omark              Tanner Jeannot           30     0   5  0  
 3 Andrew Poturalski        Dryden Hunt              Chris Kreider            22     0   4  1  
 4 Riley Nash               Michael Mersch           Yohann Auvitu            8      0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Lukas Bengtsson          Dennis Cholowski                                  40     0   1  4  
 2 Connor Mackey            Anton Stralman                                    35     0   4  1  
 3 Will Borgen              Connor Clifton                                    25     0   3  2  
 4 Will Borgen              Anton Stralman                                    0      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor Hurley            Justin Bailey            Nathan Bastian           60     0   1  4  
 2 Nathan Todd              Andrew Poturalski        Tanner Jeannot           40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Connor Mackey            Dennis Cholowski                                  60     0   1  4  
 2 Lukas Bengtsson          Anton Stralman                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Riley Nash               Yohann Auvitu            60     0   5  0  
 2 Derek Roy                Tanner Jeannot           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Stralman           Connor Clifton           60     0   5  0  
 2 Will Borgen              Connor Mackey            40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Riley Nash                                        60     0   5  0  
 2 Derek Roy                                         40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Stralman           Will Borgen              60     0   5  0  
 2 Connor Mackey            Connor Clifton           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor Hurley            Riley Nash               60     0   3  2  
 2 Nathan Todd              Nathan Bastian           40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Connor Mackey            Dennis Cholowski         60     0   3  2  
 2 Will Borgen              Anton Stralman           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor Hurley            Justin Bailey            Tanner Jeannot           Connor Mackey            Dennis Cholowski         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Riley Nash               Justin Bailey            Michael Mersch           Connor Mackey            Dennis Cholowski         

<b>Goaltenders</b>
Starting : Kyle Keyser              
Backup : Vasili Koshechkin        

<b>Extra Forwards</b>
Normal : Tanner Jeannot, Justin Bailey, Nathan Bastian - PP : Nathan Bastian, Justin Bailey - PK : Riley Nash
<b>Extra Defensemen</b>
Normal : Connor Mackey, Dennis Cholowski, Lukas Bengtsson - PP : Connor Mackey - PK : Connor Mackey, Will Borgen
<b>Penalty Shots</b>
Tanner Jeannot, Justin Bailey, Michael Mersch, Connor Hurley, Nathan Todd
<b>Custom OT Lines Forwards</b>
Michael Mersch, Justin Bailey, Linus Omark, Nathan Bastian, Connor Hurley, Nathan Todd, Tanner Jeannot, Andrew Poturalski, Chris Kreider, Gregory Beron
<b>Custom OT Lines Defensemen</b>
Connor Mackey, Lukas Bengtsson, Dennis Cholowski, Will Borgen, Anton Stralman

<b>Scratches</b>
Jeff Malott (Sprained Right Knee Injury), Vinny Saponari (Healthy), Cory Conacher (Healthy), Konstantin Barulin (Healthy)</pre></div>
<h1 class="TeamLineFarm_CCC"><a id="CCCPRedArmy">CCCP Red Army</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#CCCPRedArmy">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#CCCPRedArmy">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#CCCPRedArmy">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#CCCPRedArmy">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#CCCPRedArmy">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CCCPRedArmy');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CCCPRedArmy" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Dal Colle        Andrew Mangiapane        Nikolai Kovalenko        25     1   2  2  
 2 Adam Musil               Klim Kostin              Mathias From             25     1   2  2  
 3 Hudson Elynuik           Dmitry Zavgorodniy       Oliver Wahlstrom         25     1   2  2  
 4 Kristian Tanus           Michael Dal Colle        Nikolai Kovalenko        25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Kylington         Johnathan MacLeod                                 25     1   2  2  
 2 Alexander Alexeyev       Kyle Capobianco                                   25     1   2  2  
 3 Artemi Knyazev           Bode Wilde                                        25     1   2  2  
 4 Jordan Spence            Johnathan MacLeod                                 25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Dal Colle        Andrew Mangiapane        Hudson Elynuik           60     1   2  2  
 2 Adam Musil               Klim Kostin              Mathias From             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Kylington         Johnathan MacLeod                                 60     1   2  2  
 2 Alexander Alexeyev       Kyle Capobianco                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Dal Colle        Andrew Mangiapane        60     1   2  2  
 2 Oliver Wahlstrom         Klim Kostin              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Bode Wilde               Johnathan MacLeod        60     1   2  2  
 2 Alexander Alexeyev       Kyle Capobianco          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael Dal Colle                                 60     1   2  2  
 2 Andrew Mangiapane                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jordan Spence            Johnathan MacLeod        60     1   2  2  
 2 Alexander Alexeyev       Kyle Capobianco          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Dal Colle        Andrew Mangiapane        60     1   2  2  
 2 Adam Musil               Klim Kostin              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Artemi Knyazev           Johnathan MacLeod        60     1   2  2  
 2 Alexander Alexeyev       Kyle Capobianco          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Dal Colle        Andrew Mangiapane        Klim Kostin              Oliver Kylington         Johnathan MacLeod        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Dal Colle        Andrew Mangiapane        Klim Kostin              Oliver Kylington         Johnathan MacLeod        

<b>Goaltenders</b>
Starting : Alexei Melnichuk         
Backup : Danny aus den Birken     
Third : Dustin Wolf              

<b>Extra Forwards</b>
Normal : Hudson Elynuik, Oliver Wahlstrom, Dmitry Zavgorodniy - PP : Hudson Elynuik, Oliver Wahlstrom - PK : Dmitry Zavgorodniy
<b>Extra Defensemen</b>
Normal : Artemi Knyazev, Bode Wilde, Jordan Spence - PP : Artemi Knyazev - PK : Bode Wilde, Jordan Spence
<b>Penalty Shots</b>
Michael Dal Colle, Andrew Mangiapane, Dmitry Zavgorodniy, Klim Kostin, Adam Musil
<b>Custom OT Lines Forwards</b>
Michael Dal Colle, Andrew Mangiapane, Kristian Tanus, Klim Kostin, Adam Musil, Hudson Elynuik, Mathias From, Oliver Wahlstrom, Dmitry Zavgorodniy, Nikolai Kovalenko
<b>Custom OT Lines Defensemen</b>
Oliver Kylington, Johnathan MacLeod, Alexander Alexeyev, Kyle Capobianco, Artemi Knyazev

<b>Scratches</b>
Michael Rasmussen (Healthy), David Jones (Fractured Left Foot Injury), Luke Henman (Healthy)</pre></div>
<h1 class="TeamLineFarm_MAN"><a id="ManitobaMoose">Manitoba Moose</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL101-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL101-FarmTeamScoring.php#ManitobaMoose">Farm Team Scoring</a> ]
[ <a href="ASHL101-FarmTeamLines.php#ManitobaMoose">Farm Team Lines</a> ]
[ <a href="ASHL101-FarmTeamSchedule.php#ManitobaMoose">Farm Team Schedule</a> ]
[ <a href="ASHL101-FarmTeamStats.php#ManitobaMoose">Farm Team Stats</a> ]
[ <a href="ASHL101-FarmTeamStatsVS.php#ManitobaMoose">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ManitobaMoose');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ManitobaMoose" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jérôme Verrier           Adam Tambellini          Michael Joly             25     1   2  2  
 2 Linden Vey               Brent Pedersen           Alexander Avtsin         25     1   2  2  
 3 Colin Blackwell          Taylor Beck              Gabriel Dumont           25     1   2  2  
 4 Daniel Lafontaine        Jérôme Verrier           Alexandre Grenier        25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Gravel             Peter Stoykewych                                  25     1   2  2  
 2 Oscar Fantenberg         Jerome Gauthier-Leduc                             25     1   2  2  
 3 Mark Alt                 Kevin Lidström                                    25     1   2  2  
 4 Jerome Gauthier-Leduc    Kevin Gravel                                      25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jérôme Verrier           Adam Tambellini          Michael Joly             60     1   2  2  
 2 Linden Vey               Brent Pedersen           Alexander Avtsin         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Gravel             Peter Stoykewych                                  60     1   2  2  
 2 Oscar Fantenberg         Jerome Gauthier-Leduc                             40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jérôme Verrier           Michael Joly             60     1   2  2  
 2 Adam Tambellini          Brent Pedersen           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Peter Stoykewych         60     1   2  2  
 2 Oscar Fantenberg         Mark Alt                 40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jérôme Verrier                                    60     1   2  2  
 2 Michael Joly                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Peter Stoykewych         60     1   2  2  
 2 Oscar Fantenberg         Kevin Lidström           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jérôme Verrier           Michael Joly             60     1   2  2  
 2 Adam Tambellini          Brent Pedersen           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Peter Stoykewych         60     1   2  2  
 2 Oscar Fantenberg         Jerome Gauthier-Leduc    40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jérôme Verrier           Adam Tambellini          Michael Joly             Kevin Gravel             Peter Stoykewych         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jérôme Verrier           Adam Tambellini          Michael Joly             Kevin Gravel             Peter Stoykewych         

<b>Goaltenders</b>
Starting : Louis Domingue           
Backup : Jean-François Bérubé     
Third : Olof Lindbom             

<b>Extra Forwards</b>
Normal : Taylor Beck, Colin Blackwell, Gabriel Dumont - PP : Taylor Beck, Colin Blackwell - PK : Gabriel Dumont
<b>Extra Defensemen</b>
Normal : Mark Alt, Kevin Lidström, Jerome Gauthier-Leduc - PP : Mark Alt - PK : Kevin Lidström, Jerome Gauthier-Leduc
<b>Penalty Shots</b>
Jérôme Verrier, Michael Joly, Adam Tambellini, Brent Pedersen, Alexander Avtsin
<b>Custom OT Lines Forwards</b>
Jérôme Verrier, Michael Joly, Adam Tambellini, Brent Pedersen, Alexander Avtsin, Taylor Beck, Linden Vey, Colin Blackwell, Gabriel Dumont, Alexandre Grenier
<b>Custom OT Lines Defensemen</b>
Kevin Gravel, Peter Stoykewych, Oscar Fantenberg, Kevin Lidström, Mark Alt

<b>Scratches</b>
Kay Schweri (Healthy), Simon Stransky (Healthy), Maxime Macenauer (Healthy), Joel Chouinard (Healthy), Rinat Valiev (Healthy)</pre></div>
<?php include "Footer.php";?>
