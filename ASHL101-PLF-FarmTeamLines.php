<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#LavalChiefs">Laval Chiefs</a> | <a href="#TheNuukVikings">The Nuuk Vikings</a> | <a href="#ProvidenceBruins">Providence Bruins</a> | <a href="#RochesterAmericans">Rochester Americans</a> | <a href="#JolietteSportif">Joliette Sportif</a> | <a href="#CharlotteCheckers">Charlotte Checkers</a> | <a href="#RockfordIceHogs">Rockford IceHogs</a> | <a href="#LakeErieMonsters">Lake Erie Monsters</a> | <a href="#SpringfieldFalcons">Springfield Falcons</a> | <a href="#LasVegasGamblers">Las Vegas Gamblers</a> | <a href="#GrandRapidsGriffins">Grand Rapids Griffins</a> | <a href="#OklahomaCityBarons">Oklahoma City Barons</a> | <a href="#SanAntonioRampage">San Antonio Rampage</a> | <a href="#GatineauOlympiques">Gatineau Olympiques</a> | <a href="#HoustonAeros">Houston Aeros</a> | <a href="#Trois-RivièresDraveurs">Trois-Rivières Draveurs</a> | <a href="#MilwaukeeAdmirals">Milwaukee Admirals</a> | <a href="#AlbanyDevils">Albany Devils</a> | <a href="#BridgeportSoundTigers">Bridgeport Sound Tigers</a> | <a href="#ConnecticutWhale">Connecticut Whale</a> | <a href="#BinghamtonSenators">Binghamton Senators</a> | <a href="#AdirondackPhantoms">Adirondack Phantoms</a> | <a href="#Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a> | <a href="#ChicoutimiSaguenéens">Chicoutimi Saguenéens</a> | <a href="#Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a> | <a href="#MercerIslandHafgufa">Mercer Island Hafgufa</a> | <a href="#PeoriaRivermen">Peoria Rivermen</a> | <a href="#NorfolkAdmirals">Norfolk Admirals</a> | <a href="#RobervalDwarfs">Roberval Dwarfs</a> | <a href="#ChicagoWolves">Chicago Wolves</a> | <a href="#HendersonSilverKnights">Henderson Silver Knights</a> | <a href="#CCCPRedArmy">CCCP Red Army</a> | <a href="#ManitobaMoose">Manitoba Moose</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLineFarm_LAV"><a id="LavalChiefs">Laval Chiefs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#LavalChiefs">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#LavalChiefs">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#LavalChiefs">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#LavalChiefs">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#LavalChiefs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LavalChiefs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LavalChiefs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Beauvillier      Owen Tippett             Nolan Patrick            38     1   1  3  
 2 Joe Veleno               Robin Kovacs             Troy Terry               34     1   1  3  
 3 Jacob Olofsson           Ryan Fitzgerald          Jesper Boqvist           20     1   1  3  
 4 Axel Holmstrom           Kalle Kossila            Daniel Zaar              8      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Sami Niku                Adam Fox                                          35     1   2  2  
 2 Juuso Välimäki           Filip Hronek                                      35     1   2  2  
 3 Ben Harpur               Kyle Wood                                         20     1   3  1  
 4 Ben Harpur               Michael Brodzinski                                10     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Beauvillier      Robin Kovacs             Nolan Patrick            55     0   0  5  
 2 Joe Veleno               Jesper Boqvist           Owen Tippett             45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Sami Niku                Adam Fox                                          55     0   1  4  
 2 Juuso Välimäki           Filip Hronek                                      45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob Olofsson           Daniel Zaar              60     1   4  0  
 2 Joe Veleno               Nolan Patrick            40     1   4  0  

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
   Anthony Beauvillier      Robin Kovacs             Nolan Patrick            Sami Niku                Adam Fox                 

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jacob Olofsson           Joe Veleno               Daniel Zaar              Ben Harpur               Adam Fox                 

<b>Goaltenders</b>
Starting : Colton Point             
Backup : Tyler Parsons            

<b>Extra Forwards</b>
Normal : Owen Tippett, Robin Kovacs, Joe Veleno - PP : Troy Terry, Daniel Zaar - PK : Anthony Beauvillier
<b>Extra Defensemen</b>
Normal : Ben Harpur, Sami Niku, Michael Brodzinski - PP : Ben Harpur - PK : Filip Hronek, Sami Niku
<b>Penalty Shots</b>
Troy Terry, Joe Veleno, Owen Tippett, Robin Kovacs, Anthony Beauvillier
<b>Custom OT Lines Forwards</b>
Anthony Beauvillier, Robin Kovacs, Nolan Patrick, Owen Tippett, Joe Veleno, Jesper Boqvist, Troy Terry, Axel Holmstrom, Ryan Fitzgerald, Daniel Zaar
<b>Custom OT Lines Defensemen</b>
Adam Fox, Sami Niku, Filip Hronek, Juuso Välimäki, Kyle Wood

<b>Scratches</b>
Andrew MacDonald (Healthy), Joonas Lyytinen (Healthy), Cole Sanford (Healthy), Nikita Korostelev (Healthy), Hannibal Weitzmann (Healthy)</pre></div>
<h1 class="TeamLineFarm_NUU"><a id="TheNuukVikings">The Nuuk Vikings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#TheNuukVikings">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#TheNuukVikings">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#TheNuukVikings">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#TheNuukVikings">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#TheNuukVikings">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TheNuukVikings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TheNuukVikings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael McCarron         Joachim Blichfeld        Trey Fix-Wolansky        25     1   2  2  
 2 Rodrigo Abols            Jermaine Loewen          Reinhard Venter          25     1   2  2  
 3 Yegor Sharangovich       Vadim Vasjonkin          Hafthor Sigrunarson      25     1   2  2  
 4 Hafthor Sigrunarson      Liam Kirk                Michael McCarron         25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Karlis Cukste            Mattias Norstebo                                  25     1   2  2  
 2 Gregorio Gios            Kacper Bartnik                                    25     1   2  2  
 3 Kirill Steklov           Marko Mladenovic                                  25     1   2  2  
 4 Declan Bronte            Karlis Cukste                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael McCarron         Joachim Blichfeld        Trey Fix-Wolansky        60     1   2  2  
 2 Rodrigo Abols            Jermaine Loewen          Reinhard Venter          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Karlis Cukste            Mattias Norstebo                                  60     1   2  2  
 2 Gregorio Gios            Kacper Bartnik                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael McCarron         Trey Fix-Wolansky        60     1   2  2  
 2 Joachim Blichfeld        Rodrigo Abols            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Karlis Cukste            Mattias Norstebo         60     1   2  2  
 2 Gregorio Gios            Kacper Bartnik           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael McCarron                                  60     1   2  2  
 2 Trey Fix-Wolansky                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Karlis Cukste            Mattias Norstebo         60     1   2  2  
 2 Gregorio Gios            Kacper Bartnik           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael McCarron         Trey Fix-Wolansky        60     1   2  2  
 2 Joachim Blichfeld        Rodrigo Abols            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Karlis Cukste            Mattias Norstebo         60     1   2  2  
 2 Gregorio Gios            Kacper Bartnik           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael McCarron         Joachim Blichfeld        Trey Fix-Wolansky        Karlis Cukste            Mattias Norstebo         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael McCarron         Joachim Blichfeld        Trey Fix-Wolansky        Karlis Cukste            Mattias Norstebo         

<b>Goaltenders</b>
Starting : Mareks Mitens            
Backup : Demid Yeremeyev          

<b>Extra Forwards</b>
Normal : Semyon Der-Arguchintsev, Greg Meireles, Hakan Salt - PP : Semyon Der-Arguchintsev, Greg Meireles - PK : Hakan Salt
<b>Extra Defensemen</b>
Normal : Kirill Steklov, Marko Mladenovic, Declan Bronte - PP : Kirill Steklov - PK : Marko Mladenovic, Declan Bronte
<b>Penalty Shots</b>
Michael McCarron, Trey Fix-Wolansky, Joachim Blichfeld, Rodrigo Abols, Jermaine Loewen
<b>Custom OT Lines Forwards</b>
Michael McCarron, Trey Fix-Wolansky, Joachim Blichfeld, Rodrigo Abols, Jermaine Loewen, Yegor Sharangovich, Vadim Vasjonkin, Hafthor Sigrunarson, Semyon Der-Arguchintsev, Liam Kirk
<b>Custom OT Lines Defensemen</b>
Karlis Cukste, Mattias Norstebo, Gregorio Gios, Kacper Bartnik, Kirill Steklov

<b>Scratches</b>
Vilmos Gallo (Healthy), Chad Ruhwedel (Healthy), Jacob Ratcliffe (Healthy), Arturas Laukaitis (Healthy), Kristers Gudlevskis (Healthy)</pre></div>
<h1 class="TeamLineFarm_PRO"><a id="ProvidenceBruins">Providence Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#ProvidenceBruins">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#ProvidenceBruins">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#ProvidenceBruins">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#ProvidenceBruins">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#ProvidenceBruins">Farm Team StatsVS</a> ]
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
 2 Jacob Bryson             Dalton Thrower                                    25     1   2  2  
 3 Tommy Cross              Riley Sheahan                                     25     1   2  2  
 4 Konrad Abeltshauser      Roland McKeown                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Artem Anisimov           Simon Tremblay           Colton Sissons           60     1   2  2  
 2 Alexander Khokhlachev    Mason Marchment          Ben Sexton               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Roland McKeown                                    60     1   2  2  
 2 Jacob Bryson             Dalton Thrower                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Artem Anisimov           Colton Sissons           60     1   2  2  
 2 Simon Tremblay           Alexander Khokhlachev    40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Roland McKeown           60     1   2  2  
 2 Jacob Bryson             Dalton Thrower           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Artem Anisimov                                    60     1   2  2  
 2 Colton Sissons                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Roland McKeown           60     1   2  2  
 2 Jacob Bryson             Dalton Thrower           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Artem Anisimov           Colton Sissons           60     1   2  2  
 2 Simon Tremblay           Alexander Khokhlachev    40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Konrad Abeltshauser      Roland McKeown           60     1   2  2  
 2 Jacob Bryson             Dalton Thrower           40     1   2  2  

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
Normal : Calle Jarnkrok, Ludwig Blomstrand, Jakob Forsbacka Karlsson - PP : Calle Jarnkrok, Ludwig Blomstrand - PK : Jakob Forsbacka Karlsson
<b>Extra Defensemen</b>
Normal : Tommy Cross, Jacob Bryson, Dalton Thrower - PP : Tommy Cross - PK : Jacob Bryson, Dalton Thrower
<b>Penalty Shots</b>
Artem Anisimov, Colton Sissons, Simon Tremblay, Alexander Khokhlachev, Mason Marchment
<b>Custom OT Lines Forwards</b>
Artem Anisimov, Colton Sissons, Simon Tremblay, Alexander Khokhlachev, Mason Marchment, Jakob Forsbacka Karlsson, Riley Sheahan, Calle Jarnkrok, Calvin Thurkauf, Ben Sexton
<b>Custom OT Lines Defensemen</b>
Konrad Abeltshauser, Roland McKeown, Jacob Bryson, Dalton Thrower, Tommy Cross

<b>Scratches</b>
Joonas Donskoi (Healthy), Zach Trotman (Healthy), Tim Bozon (Healthy), Adam Courchaine (Healthy), Brian Ferlin (Healthy)
Michael Hutchinson (Healthy)</pre></div>
<h1 class="TeamLineFarm_RCH"><a id="RochesterAmericans">Rochester Americans</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#RochesterAmericans">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#RochesterAmericans">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#RochesterAmericans">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#RochesterAmericans">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#RochesterAmericans">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RochesterAmericans');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RochesterAmericans" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Laughton           Alexei Mitrofanov        Dylan Sikura             25     0   2  3  
 2 Daniel O'Regan           Trevor Cox               Matthew Highmore         25     0   2  3  
 3 Sean Kuraly              Jujhar Khaira            Tomas Kubalik            25     1   2  2  
 4 Lukas Vejdemo            Taro Hirose              Nick Baptiste            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Carl Dahlstrom           Harrison Ruopp                                    25     1   2  2  
 2 Mitchell Vande Sompel    Lucas Carlsson                                    25     1   2  2  
 3 Ralfs Freibergs          Nils Lundkvist                                    25     1   2  2  
 4 Carl Dahlstrom           Harrison Ruopp                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Laughton           Alexei Mitrofanov        Dylan Sikura             60     0   1  4  
 2 Daniel O'Regan           Trevor Cox               Matthew Highmore         40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Carl Dahlstrom           Harrison Ruopp                                    60     1   2  2  
 2 Mitchell Vande Sompel    Lucas Carlsson                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Scott Laughton           Alexei Mitrofanov        60     1   2  2  
 2 Daniel O'Regan           Dylan Sikura             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Carl Dahlstrom           Harrison Ruopp           60     1   2  2  
 2 Mitchell Vande Sompel    Lucas Carlsson           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Scott Laughton                                    60     1   2  2  
 2 Alexei Mitrofanov                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Carl Dahlstrom           Harrison Ruopp           60     1   2  2  
 2 Mitchell Vande Sompel    Lucas Carlsson           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Scott Laughton           Alexei Mitrofanov        60     1   2  2  
 2 Daniel O'Regan           Dylan Sikura             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Carl Dahlstrom           Harrison Ruopp           60     1   2  2  
 2 Mitchell Vande Sompel    Lucas Carlsson           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Laughton           Alexei Mitrofanov        Dylan Sikura             Carl Dahlstrom           Harrison Ruopp           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Laughton           Alexei Mitrofanov        Dylan Sikura             Carl Dahlstrom           Harrison Ruopp           

<b>Goaltenders</b>
Starting : Brendan Burke            
Backup : Jake Oettinger           

<b>Extra Forwards</b>
Normal : Julius Nättinen, Dominic Turgeon, Sean Kuraly - PP : Julius Nättinen, Dominic Turgeon - PK : Sean Kuraly
<b>Extra Defensemen</b>
Normal : Ralfs Freibergs, Nils Lundkvist, Mitchell Vande Sompel - PP : Ralfs Freibergs - PK : Nils Lundkvist, Mitchell Vande Sompel
<b>Penalty Shots</b>
Scott Laughton, Alexei Mitrofanov, Daniel O'Regan, Dylan Sikura, Trevor Cox
<b>Custom OT Lines Forwards</b>
Scott Laughton, Alexei Mitrofanov, Daniel O'Regan, Dylan Sikura, Trevor Cox, Sean Kuraly, Jujhar Khaira, Matthew Highmore, Taro Hirose, Tomas Kubalik
<b>Custom OT Lines Defensemen</b>
Carl Dahlstrom, Harrison Ruopp, Mitchell Vande Sompel, Lucas Carlsson, Ralfs Freibergs

<b>Scratches</b>
Anatoli Golyshev (Healthy), Eric Cornel (Healthy), Cameron Wright (Healthy), Cameron Morrison (Healthy), Filip Westerlund (Healthy)</pre></div>
<h1 class="TeamLineFarm_JOL"><a id="JolietteSportif">Joliette Sportif</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#JolietteSportif">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#JolietteSportif">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#JolietteSportif">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#JolietteSportif">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#JolietteSportif">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_JolietteSportif');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_JolietteSportif" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Antoine Vermette         Michael Ferland          Anthony Angello          25     1   2  2  
 2 Filip Chlapik            Anton Zlobin             Greg Nemisz              25     1   2  2  
 3 Peter Holland            Alexander Nylander       Danny Kristo             25     1   2  2  
 4 Nick Merkley             Antoine Vermette         Dmitri Mikhailov         25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Gilbert           Leon Gawanke                                      25     1   2  2  
 2 Ty Smith                 Guillaume Brisebois                               25     1   2  2  
 3 Luke Green               Nick Merkley                                      25     1   2  2  
 4 Dennis Gilbert           Leon Gawanke                                      25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Antoine Vermette         Michael Ferland          Anthony Angello          60     1   2  2  
 2 Filip Chlapik            Anton Zlobin             Greg Nemisz              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Gilbert           Leon Gawanke                                      60     1   2  2  
 2 Ty Smith                 Guillaume Brisebois                               40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Antoine Vermette         Anthony Angello          60     1   2  2  
 2 Greg Nemisz              Michael Ferland          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Gilbert           Leon Gawanke             60     1   2  2  
 2 Ty Smith                 Guillaume Brisebois      40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Antoine Vermette                                  60     1   2  2  
 2 Anthony Angello                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Gilbert           Leon Gawanke             60     1   2  2  
 2 Ty Smith                 Guillaume Brisebois      40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Antoine Vermette         Anthony Angello          60     1   2  2  
 2 Greg Nemisz              Michael Ferland          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Gilbert           Leon Gawanke             60     1   2  2  
 2 Ty Smith                 Guillaume Brisebois      40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Antoine Vermette         Michael Ferland          Anthony Angello          Dennis Gilbert           Leon Gawanke             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Antoine Vermette         Michael Ferland          Anthony Angello          Dennis Gilbert           Leon Gawanke             

<b>Goaltenders</b>
Starting : Laurent Brossoit         
Backup : Jack Lafontaine          

<b>Extra Forwards</b>
Normal : Clark Bishop, Jesper Fasth, Danny Kristo - PP : Clark Bishop, Jesper Fasth - PK : Danny Kristo
<b>Extra Defensemen</b>
Normal : Luke Green, Ty Smith, Guillaume Brisebois - PP : Luke Green - PK : Ty Smith, Guillaume Brisebois
<b>Penalty Shots</b>
Antoine Vermette, Anthony Angello, Greg Nemisz, Michael Ferland, Filip Chlapik
<b>Custom OT Lines Forwards</b>
Antoine Vermette, Anthony Angello, Greg Nemisz, Michael Ferland, Filip Chlapik, Danny Kristo, Peter Holland, Anton Zlobin, Nick Merkley, Clark Bishop
<b>Custom OT Lines Defensemen</b>
Dennis Gilbert, Leon Gawanke, Ty Smith, Guillaume Brisebois, Luke Green

<b>Scratches</b>
Jiri Hudler (Healthy), Todd Burgess (Healthy), Riley Barber (Healthy), Melvin Nyffeler (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHA"><a id="CharlotteCheckers">Charlotte Checkers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#CharlotteCheckers">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#CharlotteCheckers">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#CharlotteCheckers">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#CharlotteCheckers">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#CharlotteCheckers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CharlotteCheckers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CharlotteCheckers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Rasmus Asplund           Tyler Benson             Kiefer Sherwood          36     0   1  4  
 2 Mikhail Vorobyov         Scott Wilson             Joel Kiviranta           34     0   1  4  
 3 Joey Hishon              Daniel Carr              Laurent Dauphin          24     1   3  1  
 4 Connor Dewar             Sondre Olden             Jens Lööke               6      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Markus Lauridsen         Michael Paliotta                                  36     0   3  2  
 2 Louis Belpedio           Patrik Nemeth                                     34     0   3  2  
 3 Kale Clague              Theo Peckham                                      30     1   3  1  
 4 Johannes Kinnvall        Michael Paliotta                                  0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Rasmus Asplund           Joel Kiviranta           Kiefer Sherwood          55     0   0  5  
 2 Joey Hishon              Daniel Carr              Laurent Dauphin          45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Michael Paliotta         Patrik Nemeth                                     60     0   1  4  
 2 Louis Belpedio           Markus Lauridsen                                  40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joel Kiviranta           Rasmus Asplund           60     1   4  0  
 2 Kiefer Sherwood          Daniel Carr              40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Paliotta         Patrik Nemeth            60     1   4  0  
 2 Louis Belpedio           Markus Lauridsen         40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joel Kiviranta                                    60     0   5  0  
 2 Rasmus Asplund                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Paliotta         Patrik Nemeth            60     0   5  0  
 2 Louis Belpedio           Markus Lauridsen         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joel Kiviranta           Rasmus Asplund           60     0   2  3  
 2 Kiefer Sherwood          Daniel Carr              40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Paliotta         Patrik Nemeth            60     0   3  2  
 2 Louis Belpedio           Markus Lauridsen         40     0   3  2  

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
Normal : Tyler Benson, Sondre Olden, Joel Kiviranta - PP : Tyler Benson, Sondre Olden - PK : Joel Kiviranta
<b>Extra Defensemen</b>
Normal : Stephen Johns, Kale Clague, Johannes Kinnvall - PP : Stephen Johns - PK : Kale Clague, Johannes Kinnvall
<b>Penalty Shots</b>
Joel Kiviranta, Rasmus Asplund, Kiefer Sherwood, Sondre Olden, Daniel Carr
<b>Custom OT Lines Forwards</b>
Joel Kiviranta, Rasmus Asplund, Kiefer Sherwood, Laurent Dauphin, Daniel Carr, Joey Hishon, Sondre Olden, Tyler Benson, Mikhail Vorobyov, Connor Dewar
<b>Custom OT Lines Defensemen</b>
Michael Paliotta, Patrik Nemeth, Louis Belpedio, Markus Lauridsen, Stephen Johns

<b>Scratches</b>
Anton Volchenkov (Healthy), Alexei Bereglazov (Healthy), Carter Ashton (Healthy), Emil Bemstrom (Healthy), Radovan Bondra (Healthy)</pre></div>
<h1 class="TeamLineFarm_RFD"><a id="RockfordIceHogs">Rockford IceHogs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#RockfordIceHogs">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#RockfordIceHogs">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#RockfordIceHogs">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#RockfordIceHogs">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#RockfordIceHogs">Farm Team StatsVS</a> ]
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
[ <a href="ASHL101-PLF-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#LakeErieMonsters">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#LakeErieMonsters">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#LakeErieMonsters">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#LakeErieMonsters">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#LakeErieMonsters">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LakeErieMonsters');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LakeErieMonsters" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Seth Griffith            Francis Beauvillier      Kurtis Gabriel           25     1   1  3  
 2 Joseph Cramarossa        Kyle Rau                 Luke Moffatt             25     1   1  3  
 3 Stephen MacAulay         Sam Miletic              Josh Leivo               25     1   1  3  
 4 Francis Beauvillier      Christoph Bertschy       Seth Griffith            25     1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brett Cote               Ryan Stanton                                      36     1   1  3  
 2 Christian Djoos          Gus Young                                         34     1   1  3  
 3 Stephen Silas            Troy Rutkowski                                    30     1   2  2  
 4 Tim Heed                 Brett Cote                                        0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Seth Griffith            Stephen MacAulay         Kurtis Gabriel           60     0   0  5  
 2 Joseph Cramarossa        Kyle Rau                 Luke Moffatt             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brett Cote               Ryan Stanton                                      60     0   0  5  
 2 Christian Djoos          Gus Young                                         40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Stephen MacAulay         Seth Griffith            60     0   0  5  
 2 Joseph Cramarossa        Luke Moffatt             40     0   0  5  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brett Cote               Ryan Stanton             60     0   5  0  
 2 Christian Djoos          Gus Young                40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joseph Cramarossa                                 60     1   2  2  
 2 Stephen MacAulay                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brett Cote               Ryan Stanton             60     1   2  2  
 2 Christian Djoos          Gus Young                40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joseph Cramarossa        Seth Griffith            60     1   1  3  
 2 Kurtis Gabriel           Luke Moffatt             40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brett Cote               Ryan Stanton             60     1   2  2  
 2 Christian Djoos          Gus Young                40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Seth Griffith            Luke Moffatt             Kurtis Gabriel           Brett Cote               Ryan Stanton             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joseph Cramarossa        Seth Griffith            Kurtis Gabriel           Brett Cote               Ryan Stanton             

<b>Goaltenders</b>
Starting : Dustin Tokarski          
Backup : Edward Pasquale          

<b>Extra Forwards</b>
Normal : Brendan Warren, Stephen MacAulay, Josh Leivo - PP : Brendan Warren, Stephen MacAulay - PK : Josh Leivo
<b>Extra Defensemen</b>
Normal : Stephen Silas, Troy Rutkowski, Tim Heed - PP : Stephen Silas - PK : Troy Rutkowski, Tim Heed
<b>Penalty Shots</b>
Stephen MacAulay, Seth Griffith, Kurtis Gabriel, Luke Moffatt, Joseph Cramarossa
<b>Custom OT Lines Forwards</b>
Brendan Warren, Seth Griffith, Kurtis Gabriel, Luke Moffatt, Joseph Cramarossa, Kyle Rau, Stephen MacAulay, Josh Leivo, Sam Miletic, Francis Beauvillier
<b>Custom OT Lines Defensemen</b>
Brett Cote, Ryan Stanton, Christian Djoos, Gus Young, Stephen Silas

<b>Scratches</b>
Keegan Iverson (Healthy), Michael Latta (Healthy), Jason Zucker (Healthy)</pre></div>
<h1 class="TeamLineFarm_SPR"><a id="SpringfieldFalcons">Springfield Falcons</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#SpringfieldFalcons">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#SpringfieldFalcons">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#SpringfieldFalcons">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#SpringfieldFalcons">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#SpringfieldFalcons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SpringfieldFalcons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SpringfieldFalcons" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Johan Sundstrom          Pius Suter               Dominik Bokk             35     1   1  3  
 2 Alexander Dergachyov     Brett Bulmer             Martin Kaut              30     1   1  3  
 3 T.J. Tynan               Ivan Telegin             Anton Blidh              25     2   1  2  
 4 Shane Bowers             Dominik Uher             Marcus Karlberg          10     3   1  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Samuelsson       Adam Boqvist                                      35     2   1  2  
 2 Unknown Player           Marcus Pettersson                                 35     2   2  1  
 3 Brandon Hickey           David Quenneville                                 30     2   2  1  
 4 Mattias Samuelsson       Adam Boqvist                                      0      2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Johan Sundstrom          Pius Suter               Dominik Bokk             60     0   0  5  
 2 Alexander Dergachyov     Brett Bulmer             Martin Kaut              40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 David Quenneville        Adam Boqvist                                      60     0   1  4  
 2 Marcus Pettersson        Mattias Samuelsson                                40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dominik Uher             Anton Blidh              60     1   4  0  
 2 T.J. Tynan               Ivan Telegin             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Brandon Hickey           60     1   4  0  
 2 Marcus Pettersson        Mattias Samuelsson       40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dominik Uher                                      60     1   4  0  
 2 Ivan Telegin                                      40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Brandon Hickey           60     2   3  0  
 2 Marcus Pettersson        Mattias Samuelsson       40     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Johan Sundstrom          Dominik Bokk             60     1   1  3  
 2 Pius Suter               Martin Kaut              40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Boqvist             Mattias Samuelsson       60     1   1  3  
 2 Marcus Pettersson        Unknown Player           40     1   1  3  

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
Anton Blidh, Dominik Bokk, Martin Kaut, Johan Sundstrom, Brett Bulmer, Shane Bowers, Dominik Uher, Marcus Karlberg, Ivan Telegin, Alexander Dergachyov
<b>Custom OT Lines Defensemen</b>
Marcus Pettersson, Adam Boqvist, Mattias Samuelsson, Unknown Player, David Quenneville

<b>Scratches</b>
Filip Ahl (Healthy), Steve Weinstein (Healthy), Ziga Pance (Healthy), Blake Siebenaler (Healthy), Brendan Guhle (Healthy)
Eric Locke (Healthy), Carsen Twarynski (Healthy), Reto Berra (Healthy)</pre></div>
<h1 class="TeamLineFarm_LVG"><a id="LasVegasGamblers">Las Vegas Gamblers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#LasVegasGamblers">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#LasVegasGamblers">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#LasVegasGamblers">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#LasVegasGamblers">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#LasVegasGamblers">Farm Team StatsVS</a> ]
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
Brian Boyle (Healthy), Rob O'Gara (Healthy), Nick Holden (Healthy), Alex Grant (Healthy), Givani Smith (Healthy)
Chad Johnson (Healthy)</pre></div>
<h1 class="TeamLineFarm_GRG"><a id="GrandRapidsGriffins">Grand Rapids Griffins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#GrandRapidsGriffins">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#GrandRapidsGriffins">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#GrandRapidsGriffins">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#GrandRapidsGriffins">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#GrandRapidsGriffins">Farm Team StatsVS</a> ]
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
[ <a href="ASHL101-PLF-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#OklahomaCityBarons">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#OklahomaCityBarons">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#OklahomaCityBarons">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#OklahomaCityBarons">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#OklahomaCityBarons">Farm Team StatsVS</a> ]
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
[ <a href="ASHL101-PLF-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#SanAntonioRampage">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#SanAntonioRampage">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#SanAntonioRampage">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#SanAntonioRampage">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#SanAntonioRampage">Farm Team StatsVS</a> ]
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
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#GatineauOlympiques">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#GatineauOlympiques">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#GatineauOlympiques">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#GatineauOlympiques">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#GatineauOlympiques">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GatineauOlympiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GatineauOlympiques" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Foligno             Mathieu Joseph           Anders Bjork             39     0   2  3  
 2 Nicolas Roy              Alexander Volkov         Matt Luff                39     0   1  4  
 3 Ross Colton              Jerry D'Amigo            Laurin Braun             14     0   4  1  
 4 Mitchell Stephens        Nolan Stevens            Brendan Gaunce           8      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oleg Sosunov             Dante Fabbro                                      34     0   3  2  
 2 Unknown Player           Caleb Jones                                       34     2   3  0  
 3 Robert Hagg              Victor Mete                                       32     1   3  1  
 4 Robert Hagg              Dante Fabbro                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nolan Stevens            Mathieu Joseph           Anders Bjork             55     0   0  5  
 2 Nicolas Roy              Alexander Volkov         Jerry D'Amigo            45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Mete              Dante Fabbro                                      60     0   0  5  
 2 Unknown Player           Caleb Jones                                       40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anders Bjork             Nolan Stevens            60     1   4  0  
 2 Nicolas Roy              Jerry D'Amigo            40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Mete              Dante Fabbro             60     1   4  0  
 2 Unknown Player           Caleb Jones              40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jerry D'Amigo                                     60     0   5  0  
 2 Nicolas Roy                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Mete              Dante Fabbro             60     2   3  0  
 2 Unknown Player           Caleb Jones              40     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mathieu Joseph           Anders Bjork             60     1   2  2  
 2 Nicolas Roy              Jerry D'Amigo            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Mete              Dante Fabbro             60     1   2  2  
 2 Robert Hagg              Caleb Jones              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Foligno             Nicolas Roy              Mathieu Joseph           Victor Mete              Dante Fabbro             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Foligno             Nicolas Roy              Jerry D'Amigo            Caleb Jones              Dante Fabbro             

<b>Goaltenders</b>
Starting : Adin Hill                
Backup : Antti Niemi              

<b>Extra Forwards</b>
Normal : Nolan Stevens, Anders Bjork, Alexander Volkov - PP : Nolan Stevens, Anders Bjork - PK : Alexander Volkov
<b>Extra Defensemen</b>
Normal : Victor Mete, Oleg Sosunov, Robert Hagg - PP : Robert Hagg - PK : Oleg Sosunov, Robert Hagg
<b>Penalty Shots</b>
Alexander Volkov, Anders Bjork, Nicolas Roy, Jerry D'Amigo, Mathieu Joseph
<b>Custom OT Lines Forwards</b>
Nick Foligno, Mathieu Joseph, Nicolas Roy, Jerry D'Amigo, Anders Bjork, Nolan Stevens, Brendan Gaunce, Alexander Volkov, Laurin Braun, Ross Colton
<b>Custom OT Lines Defensemen</b>
Oleg Sosunov, Dante Fabbro, Robert Hagg, Caleb Jones, Victor Mete

<b>Scratches</b>
Jeff Taylor (Healthy), Ryan Rupert (Healthy), Mikey Eyssimont (Healthy), Joonas Korpisalo (Healthy)</pre></div>
<h1 class="TeamLineFarm_HOU"><a id="HoustonAeros">Houston Aeros</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#HoustonAeros">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#HoustonAeros">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#HoustonAeros">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#HoustonAeros">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#HoustonAeros">Farm Team StatsVS</a> ]
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
[ <a href="ASHL101-PLF-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#Trois-RivièresDraveurs">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#Trois-RivièresDraveurs">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#Trois-RivièresDraveurs">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#Trois-RivièresDraveurs">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#Trois-RivièresDraveurs">Farm Team StatsVS</a> ]
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
Artyom Zub (Healthy), Cédric Desruisseaux (Healthy), Jay Beagle (Healthy), Josh Gorges (Healthy), Antoine Marcoux (Healthy)
Nicolas Deslauriers (Healthy), Alex Chiasson (Healthy), Bokondji Imama (Healthy), Josh Currie (Healthy)</pre></div>
<h1 class="TeamLineFarm_MIL"><a id="MilwaukeeAdmirals">Milwaukee Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#MilwaukeeAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#MilwaukeeAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#MilwaukeeAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#MilwaukeeAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#MilwaukeeAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MilwaukeeAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MilwaukeeAdmirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Miikka Salomäki          Tage Thompson            Nicholas Caamano         35     0   2  3  
 2 Logan Brown              Marc-Olivier Roy         Drew Shore               32     0   2  3  
 3 Mark Jankowski           Mathieu Perreault        Freddie Hamilton         23     0   2  3  
 4 Cristoval Nieves         Luke Adam                Nick Palmieri            10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Joshua Jacobs            Patrick Wiercioch                                 35     1   3  1  
 2 T.J. Brodie              Spencer Stastney                                  33     1   3  1  
 3 Nate Schmidt             Dylan Blujus                                      32     1   3  1  
 4 Patrick Wiercioch        Joshua Jacobs                                     0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Brown              Tage Thompson            Nicholas Caamano         60     0   0  5  
 2 Miikka Salomäki          Marc-Olivier Roy         Drew Shore               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nate Schmidt             Joshua Jacobs                                     60     0   0  5  
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
Normal : Miikka Salomäki, Logan Brown, Tage Thompson - PP : Mathieu Perreault, Freddie Hamilton - PK : Nick Palmieri
<b>Extra Defensemen</b>
Normal : Joshua Jacobs, T.J. Brodie, Patrick Wiercioch - PP : Patrick Wiercioch - PK : Nate Schmidt, Dylan Blujus
<b>Penalty Shots</b>
Logan Brown, Mathieu Perreault, Drew Shore, Mark Jankowski, Tage Thompson
<b>Custom OT Lines Forwards</b>
Logan Brown, Freddie Hamilton, Miikka Salomäki, Nicholas Caamano, Tage Thompson, Cristoval Nieves, Mark Jankowski, Marc-Olivier Roy, Drew Shore, Nick Palmieri
<b>Custom OT Lines Defensemen</b>
Joshua Jacobs, Patrick Wiercioch, Spencer Stastney, T.J. Brodie, Nate Schmidt

<b>Scratches</b>
Mitch Moroz (Healthy), Stuart Percy (Healthy), Kyle Platzer (Healthy), Jonas Johansson (Healthy)</pre></div>
<h1 class="TeamLineFarm_ALB"><a id="AlbanyDevils">Albany Devils</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#AlbanyDevils">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#AlbanyDevils">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#AlbanyDevils">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#AlbanyDevils">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#AlbanyDevils">Farm Team StatsVS</a> ]
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
[ <a href="ASHL101-PLF-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#BridgeportSoundTigers">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#BridgeportSoundTigers">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#BridgeportSoundTigers">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#BridgeportSoundTigers">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#BridgeportSoundTigers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BridgeportSoundTigers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BridgeportSoundTigers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andrej Nestrasil         Christopher Clapperton   Jason Robertson          35     0   4  1  
 2 Sean Malone              Brandon Gignac           Julien Gauthier          30     0   2  3  
 3 Jonathan Dahlen          Brett Seney              Kerby Rychel             25     0   2  3  
 4 Jordan Bellerive         Kevin Klima              Christopher Clapperton   10     0   2  3  

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
 2 Brandon Gignac           Kevin Klima              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cal Foote                Noah Juulsen             60     1   2  2  
 2 Julius Bergman           Robbie Russo             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sean Malone                                       60     1   2  2  
 2 Kevin Klima                                       40     1   2  2  

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
Cale Makar, Julius Bergman, Jérémy Roy, Brenden Kichton, Colton White

<b>Scratches</b>
Alexandre Carrier (Healthy), Kelly Klima (Healthy)</pre></div>
<h1 class="TeamLineFarm_CTW"><a id="ConnecticutWhale">Connecticut Whale</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#ConnecticutWhale">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#ConnecticutWhale">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#ConnecticutWhale">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#ConnecticutWhale">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#ConnecticutWhale">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ConnecticutWhale');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ConnecticutWhale" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Cozens             Ryan Donato              Denis Malgin             26     0   0  5  
 2 Henrik Borgstrom         Christian Fischer        Denis Guryanov           26     0   0  5  
 3 Glenn Gawdin             Jan Jenik                Josh Norris              26     0   0  5  
 4 Glenn Gawdin             Denis Malgin             Jeremy Bracco            22     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ziyat Paigin             Josh Mahura                                       34     1   2  2  
 2 Casey Fitzgerald         Brandon Carlo                                     34     1   2  2  
 3 Scott Walford            William Lagesson                                  32     1   2  2  
 4 William Lagesson         Josh Mahura                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Cozens             Denis Guryanov           Denis Malgin             55     0   0  5  
 2 Henrik Borgstrom         Ryan Donato              Christian Fischer        45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brandon Carlo            William Lagesson                                  55     0   0  5  
 2 Scott Walford            Josh Mahura                                       45     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Denis Guryanov           Christian Fischer        55     1   4  0  
 2 Glenn Gawdin             Denis Malgin             45     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Scott Walford            Brandon Carlo            55     1   4  0  
 2 Josh Mahura              William Lagesson         45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Denis Malgin                                      55     0   5  0  
 2 Glenn Gawdin                                      45     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Scott Walford            Brandon Carlo            55     0   5  0  
 2 Josh Mahura              William Lagesson         45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Josh Norris              Jan Jenik                60     1   2  2  
 2 Glenn Gawdin             Jeremy Bracco            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Scott Walford            William Lagesson         60     1   2  2  
 2 Josh Mahura              Casey Fitzgerald         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dylan Cozens             Denis Guryanov           Denis Malgin             Brandon Carlo            William Lagesson         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Glenn Gawdin             Christian Fischer        Denis Malgin             William Lagesson         Brandon Carlo            

<b>Goaltenders</b>
Starting : Michael DiPietro         
Backup : Felix Sandström          
Third : Matej Tomek              

<b>Extra Forwards</b>
Normal : Denis Malgin, Jan Jenik, Glenn Gawdin - PP : Denis Malgin, Josh Norris - PK : Ryan Donato
<b>Extra Defensemen</b>
Normal : Josh Mahura, William Lagesson, Scott Walford - PP : William Lagesson - PK : William Lagesson, Josh Mahura
<b>Penalty Shots</b>
Denis Guryanov, Denis Malgin, Dylan Cozens, Jan Jenik, Josh Norris
<b>Custom OT Lines Forwards</b>
Denis Malgin, Denis Guryanov, Henrik Borgstrom, Ryan Donato, Christian Fischer, Jeremy Bracco, Josh Norris, Dylan Cozens, Glenn Gawdin, Jan Jenik
<b>Custom OT Lines Defensemen</b>
Ziyat Paigin, Casey Fitzgerald, Scott Walford, Josh Mahura, William Lagesson

<b>Scratches</b>
Aidan Dudas (Healthy), Damir Zhafyarov (Healthy), Erik Haula (Healthy), Gustav Forsling (Healthy)</pre></div>
<h1 class="TeamLineFarm_BNG"><a id="BinghamtonSenators">Binghamton Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#BinghamtonSenators">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#BinghamtonSenators">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#BinghamtonSenators">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#BinghamtonSenators">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#BinghamtonSenators">Farm Team StatsVS</a> ]
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
[ <a href="ASHL101-PLF-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#AdirondackPhantoms">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#AdirondackPhantoms">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#AdirondackPhantoms">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#AdirondackPhantoms">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#AdirondackPhantoms">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AdirondackPhantoms');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AdirondackPhantoms" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vladimir Sobotka         Oscar Lindberg           Michael Parks            25     1   2  2  
 2 Mike Winther             Fredrik Karlstrom        Sebastian Repo           25     1   2  2  
 3 Zach Hamill              Alexandre Mallet         Benoit Pouliot           25     1   2  2  
 4 Vladimir Sobotka         Nikita Popugaev          Keegan Kolesar           25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Plante              Teemu Eronen                                      25     1   2  2  
 2 Tyler Lewington          Taylor Chorney                                    25     1   2  2  
 3 Daniel Brickley          Randy Gazzola                                     25     1   2  2  
 4 Markus Niemelainen       Alex Plante                                       25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vladimir Sobotka         Oscar Lindberg           Michael Parks            60     1   2  2  
 2 Mike Winther             Fredrik Karlstrom        Sebastian Repo           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Plante              Teemu Eronen                                      60     1   2  2  
 2 Tyler Lewington          Taylor Chorney                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Vladimir Sobotka         Oscar Lindberg           60     1   2  2  
 2 Michael Parks            Mike Winther             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Plante              Teemu Eronen             60     1   2  2  
 2 Tyler Lewington          Taylor Chorney           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Vladimir Sobotka                                  60     1   2  2  
 2 Oscar Lindberg                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Plante              Teemu Eronen             60     1   2  2  
 2 Tyler Lewington          Taylor Chorney           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Vladimir Sobotka         Oscar Lindberg           60     1   2  2  
 2 Michael Parks            Mike Winther             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Plante              Teemu Eronen             60     1   2  2  
 2 Tyler Lewington          Taylor Chorney           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vladimir Sobotka         Oscar Lindberg           Michael Parks            Alex Plante              Teemu Eronen             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vladimir Sobotka         Oscar Lindberg           Michael Parks            Alex Plante              Teemu Eronen             

<b>Goaltenders</b>
Starting : Aaron Dell               
Backup : Jakub Kovar              
Third : Anthony Brodeur          

<b>Extra Forwards</b>
Normal : Zach Hamill, Alexandre Mallet, Benoit Pouliot - PP : Zach Hamill, Alexandre Mallet - PK : Benoit Pouliot
<b>Extra Defensemen</b>
Normal : Daniel Brickley, Randy Gazzola, Markus Niemelainen - PP : Daniel Brickley - PK : Randy Gazzola, Markus Niemelainen
<b>Penalty Shots</b>
Vladimir Sobotka, Oscar Lindberg, Michael Parks, Mike Winther, Sebastian Repo
<b>Custom OT Lines Forwards</b>
Vladimir Sobotka, Oscar Lindberg, Michael Parks, Mike Winther, Sebastian Repo, Fredrik Karlstrom, Zach Hamill, Alexandre Mallet, Benoit Pouliot, Keegan Kolesar
<b>Custom OT Lines Defensemen</b>
Alex Plante, Teemu Eronen, Tyler Lewington, Taylor Chorney, Daniel Brickley

<b>Scratches</b>
Chris Martenet (Healthy)</pre></div>
<h1 class="TeamLineFarm_WBS"><a id="Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#Wilkes-Barre/ScrantonPenguins">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#Wilkes-Barre/ScrantonPenguins">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#Wilkes-Barre/ScrantonPenguins">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#Wilkes-Barre/ScrantonPenguins">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#Wilkes-Barre/ScrantonPenguins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wilkes-Barre/ScrantonPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wilkes-Barre/ScrantonPenguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dominik Simon            Samuel Blais             Zachary Senyshyn         25     1   2  2  
 2 Maxime Talbot            Mikhail Maltsev          Matt Martin              25     1   2  2  
 3 Jan Kovar                Milan Michalek           Raphael Lavoie           25     1   2  2  
 4 Reid Duke                Ostap Safin              Samuel Blais             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Troy Stecher             Andrew O'Brien                                    25     1   2  2  
 2 Jonas Siegenthaler       Justin Braun                                      25     1   2  2  
 3 Adam Almqvist            Axel Andersson                                    25     1   2  2  
 4 Troy Stecher             Andrew O'Brien                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dominik Simon            Samuel Blais             Zachary Senyshyn         60     1   2  2  
 2 Maxime Talbot            Mikhail Maltsev          Matt Martin              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Troy Stecher             Andrew O'Brien                                    60     1   2  2  
 2 Jonas Siegenthaler       Justin Braun                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Samuel Blais             Dominik Simon            60     1   2  2  
 2 Zachary Senyshyn         Maxime Talbot            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Troy Stecher             Andrew O'Brien           60     1   2  2  
 2 Jonas Siegenthaler       Justin Braun             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Samuel Blais                                      60     1   2  2  
 2 Dominik Simon                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Troy Stecher             Andrew O'Brien           60     1   2  2  
 2 Jonas Siegenthaler       Justin Braun             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Samuel Blais             Dominik Simon            60     1   2  2  
 2 Zachary Senyshyn         Maxime Talbot            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Troy Stecher             Andrew O'Brien           60     1   2  2  
 2 Jonas Siegenthaler       Justin Braun             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dominik Simon            Samuel Blais             Zachary Senyshyn         Troy Stecher             Andrew O'Brien           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dominik Simon            Samuel Blais             Zachary Senyshyn         Troy Stecher             Andrew O'Brien           

<b>Goaltenders</b>
Starting : Kaapo Kähkönen           
Backup : Charlie Lindgren         

<b>Extra Forwards</b>
Normal : Skyler McKenzie, Milan Michalek, Jan Kovar - PP : Skyler McKenzie, Milan Michalek - PK : Jan Kovar
<b>Extra Defensemen</b>
Normal : Adam Almqvist, Axel Andersson, Jonas Siegenthaler - PP : Adam Almqvist - PK : Axel Andersson, Jonas Siegenthaler
<b>Penalty Shots</b>
Samuel Blais, Dominik Simon, Zachary Senyshyn, Maxime Talbot, Mikhail Maltsev
<b>Custom OT Lines Forwards</b>
Samuel Blais, Dominik Simon, Zachary Senyshyn, Maxime Talbot, Mikhail Maltsev, Milan Michalek, Jan Kovar, Matt Martin, Reid Duke, Raphael Lavoie
<b>Custom OT Lines Defensemen</b>
Troy Stecher, Andrew O'Brien, Jonas Siegenthaler, Justin Braun, Adam Almqvist

<b>Scratches</b>
Sean Day (Healthy), Ryan Kujawinski (Healthy), Robin Norell (Healthy), Robert Bortuzzo (Healthy), Mac Bennett (Healthy)
Max Hermens (Healthy), Patrick Killeen (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="ChicoutimiSaguenéens">Chicoutimi Saguenéens</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#ChicoutimiSaguenéens">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#ChicoutimiSaguenéens">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#ChicoutimiSaguenéens">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#ChicoutimiSaguenéens">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#ChicoutimiSaguenéens">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicoutimiSaguenéens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicoutimiSaguenéens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Gabriel Gagné            Maxime Comtois           Vitali Abramov           35     0   0  5  
 2 Jack Evans               Joel Farabee             Yakov Trenin             35     0   0  5  
 3 Cody Glass               Isaac Ratcliffe          Philip Lane              20     1   1  3  
 4 Nate Schnarr             Brad Morrison            J.T. Brown               10     1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Maxime Lajoie            Brett Lernout                                     35     0   3  2  
 2 Gavin Bayreuther         Sean Durzi                                        30     0   2  3  
 3 Frédéric Allard          Brett Kulak                                       25     0   2  3  
 4 Mikael Wikstrand         Brett Kulak                                       10     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joel Farabee             Gabriel Gagné            Maxime Comtois           60     0   0  5  
 2 Jack Evans               Vitali Abramov           Cody Glass               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Maxime Lajoie            Frédéric Allard                                   60     0   0  5  
 2 Sean Durzi               Gavin Bayreuther                                  40     0   0  5  

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
 2 Gavin Bayreuther         Mikael Wikstrand         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gabriel Gagné            Joel Farabee             60     0   0  5  
 2 Maxime Comtois           Cody Glass               40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brett Kulak              Brett Lernout            60     1   2  2  
 2 Sean Durzi               Frédéric Allard          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joel Farabee             Gabriel Gagné            Maxime Comtois           Maxime Lajoie            Sean Durzi               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joel Farabee             Gabriel Gagné            Maxime Comtois           Brett Kulak              Brett Lernout            

<b>Goaltenders</b>
Starting : Sami Aittokallio         
Backup : Mason McDonald           

<b>Extra Forwards</b>
Normal : Brad Morrison, Joel Farabee, Gabriel Gagné - PP : Maxime Comtois, Jack Evans - PK : Nate Schnarr
<b>Extra Defensemen</b>
Normal : Sean Durzi, Brett Lernout, Brett Kulak - PP : Brett Lernout - PK : Gavin Bayreuther, Brett Lernout
<b>Penalty Shots</b>
Brad Morrison, Joel Farabee, Gabriel Gagné, Maxime Comtois, Jack Evans
<b>Custom OT Lines Forwards</b>
Nate Schnarr, Brad Morrison, Joel Farabee, Gabriel Gagné, Maxime Comtois, Philip Lane, Jack Evans, Cody Glass, Yakov Trenin, Isaac Ratcliffe
<b>Custom OT Lines Defensemen</b>
Sean Durzi, Brett Kulak, Brett Lernout, Gavin Bayreuther, Maxime Lajoie

<b>Scratches</b>
Arvid Henrikson (Healthy), Jack Nevins (Healthy), Lane Pederson (Healthy), Jon Gillies (Healthy), Callum Booth (Healthy)</pre></div>
<h1 class="TeamLineFarm_RNO"><a id="Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#Rouyn-NorandaHuskies">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#Rouyn-NorandaHuskies">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#Rouyn-NorandaHuskies">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#Rouyn-NorandaHuskies">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#Rouyn-NorandaHuskies">Farm Team StatsVS</a> ]
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
[ <a href="ASHL101-PLF-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#MercerIslandHafgufa">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#MercerIslandHafgufa">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#MercerIslandHafgufa">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#MercerIslandHafgufa">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#MercerIslandHafgufa">Farm Team StatsVS</a> ]
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
[ <a href="ASHL101-PLF-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#PeoriaRivermen">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#PeoriaRivermen">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#PeoriaRivermen">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#PeoriaRivermen">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#PeoriaRivermen">Farm Team StatsVS</a> ]
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
Patrick McNally (Healthy), Jordan Szwarz (Healthy), Alex Dostie (Healthy), Miroslav Svoboda (Healthy)</pre></div>
<h1 class="TeamLineFarm_NOR"><a id="NorfolkAdmirals">Norfolk Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#NorfolkAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#NorfolkAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#NorfolkAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#NorfolkAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#NorfolkAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NorfolkAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NorfolkAdmirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Markus Granlund          Tomas Jurco              Josh Ho-Sang             35     0   3  2  
 2 Ty Dellandrea            Austin Wagner            Nicolas Aubé-Kubel       34     0   4  1  
 3 Mads Eller               Ben Smith                Pavel Padakin            26     0   3  2  
 4 Mike Vecchione           Pontus Aberg             Patrick Holland          5      0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Quinn Hughes             Sam Jardine                                       35     0   4  1  
 2 Miro Heiskanen           Ryan Merkley                                      35     0   4  1  
 3 Brandon Burlon           Radko Gudas                                       25     1   4  0  
 4 Quinn Hughes             Miro Heiskanen                                    5      0   5  0  

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
 2 Patrick Holland          Austin Wagner            50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Miro Heiskanen           Sam Jardine              50     0   5  0  
 2 Radko Gudas              Quinn Hughes             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Patrick Holland                                   60     0   5  0  
 2 Austin Wagner                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Miro Heiskanen           Sam Jardine              60     0   5  0  
 2 Radko Gudas              Ryan Merkley             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Markus Granlund          Josh Ho-Sang             60     1   3  1  
 2 Mads Eller               Nicolas Aubé-Kubel       40     1   3  1  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Quinn Hughes             Sam Jardine              60     1   3  1  
 2 Miro Heiskanen           Ryan Merkley             40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Markus Granlund          Tomas Jurco              Josh Ho-Sang             Quinn Hughes             Miro Heiskanen           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ty Dellandrea            Nicolas Aubé-Kubel       Pavel Padakin            Sam Jardine              Radko Gudas              

<b>Goaltenders</b>
Starting : Ken Appleby              
Backup : Spencer Knight           

<b>Extra Forwards</b>
Normal : Pontus Aberg, Nicolas Aubé-Kubel, Austin Wagner - PP : Pontus Aberg, Nicolas Aubé-Kubel - PK : Austin Wagner
<b>Extra Defensemen</b>
Normal : Miro Heiskanen, Ryan Merkley, Radko Gudas - PP : Miro Heiskanen - PK : Ryan Merkley, Radko Gudas
<b>Penalty Shots</b>
Markus Granlund, Josh Ho-Sang, Tomas Jurco, Mike Vecchione, Pavel Padakin
<b>Custom OT Lines Forwards</b>
Ben Smith, Josh Ho-Sang, Tomas Jurco, Markus Granlund, Pavel Padakin, Mads Eller, Pontus Aberg, Nicolas Aubé-Kubel, Austin Wagner, Mike Vecchione
<b>Custom OT Lines Defensemen</b>
Quinn Hughes, Sam Jardine, Radko Gudas, Miro Heiskanen, Ryan Merkley

<b>Scratches</b>
Andrei Loktionov (Healthy), Riley Stadel (Healthy), Matt Schmalz (Healthy), Liam O'Brien (Healthy), Dmytro Timashov (Healthy)
Lucas Wallmark (Healthy), Kasper Krog (Healthy)</pre></div>
<h1 class="TeamLineFarm_ROB"><a id="RobervalDwarfs">Roberval Dwarfs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#RobervalDwarfs">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#RobervalDwarfs">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#RobervalDwarfs">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#RobervalDwarfs">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#RobervalDwarfs">Farm Team StatsVS</a> ]
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
Starting : Veini Vehvilainen        
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
Olivier Galipeau (Healthy), Jesse Blacker (Healthy), Trevor Smith (Healthy), Nikita Jevpalovs (Healthy), Justin Kirkland (Healthy)
Zachary Fucale (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="ChicagoWolves">Chicago Wolves</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#ChicagoWolves">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#ChicagoWolves">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#ChicagoWolves">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#ChicagoWolves">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#ChicagoWolves">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoWolves');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoWolves" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anton Lander             Mattias Tedenby          Carl Klingberg           25     1   2  2  
 2 David Desharnais         Joseph Labate            Nicklas Jensen           25     1   2  2  
 3 Adam Brooks              Brandon Hagel            Petr Straka              25     1   2  2  
 4 Tyler Soy                Matt Filipe              Spencer Smallman         25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Backman          David Schlemko                                    25     1   2  2  
 2 Trevor Carrick           Lucas Johansen                                    25     1   2  2  
 3 Matthew Cairns           Tyler Soy                                         25     1   2  2  
 4 Mattias Backman          David Schlemko                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anton Lander             Mattias Tedenby          Carl Klingberg           60     1   2  2  
 2 David Desharnais         Joseph Labate            Nicklas Jensen           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Backman          David Schlemko                                    60     1   2  2  
 2 Trevor Carrick           Lucas Johansen                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mattias Tedenby          Anton Lander             60     1   2  2  
 2 Carl Klingberg           David Desharnais         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mattias Backman          David Schlemko           60     1   2  2  
 2 Trevor Carrick           Lucas Johansen           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mattias Tedenby                                   60     1   2  2  
 2 Anton Lander                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mattias Backman          David Schlemko           60     1   2  2  
 2 Trevor Carrick           Lucas Johansen           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mattias Tedenby          Anton Lander             60     1   2  2  
 2 Carl Klingberg           David Desharnais         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mattias Backman          David Schlemko           60     1   2  2  
 2 Trevor Carrick           Lucas Johansen           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anton Lander             Mattias Tedenby          Carl Klingberg           Mattias Backman          David Schlemko           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anton Lander             Mattias Tedenby          Carl Klingberg           Mattias Backman          David Schlemko           

<b>Goaltenders</b>
Starting : Matt O'Connor            
Backup : Brandon Halverson        

<b>Extra Forwards</b>
Normal : Justin Shugg, Adam Brooks, Brandon Hagel - PP : Justin Shugg, Adam Brooks - PK : Brandon Hagel
<b>Extra Defensemen</b>
Normal : Matthew Cairns, Trevor Carrick, Lucas Johansen - PP : Matthew Cairns - PK : Trevor Carrick, Lucas Johansen
<b>Penalty Shots</b>
Mattias Tedenby, Anton Lander, Carl Klingberg, David Desharnais, Joseph Labate
<b>Custom OT Lines Forwards</b>
Mattias Tedenby, Anton Lander, Carl Klingberg, David Desharnais, Joseph Labate, Nicklas Jensen, Adam Brooks, Brandon Hagel, Petr Straka, Tyler Soy
<b>Custom OT Lines Defensemen</b>
Mattias Backman, David Schlemko, Trevor Carrick, Lucas Johansen, Matthew Cairns

<b>Scratches</b>
Mats Zuccarello (Healthy), Tom Gilbert (Healthy), Andreas Martinsen (Healthy), Alexis Pepin (Healthy), Connor Crisp (Healthy)
Alex Peters (Healthy)</pre></div>
<h1 class="TeamLineFarm_PAR"><a id="HendersonSilverKnights">Henderson Silver Knights</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#HendersonSilverKnights">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#HendersonSilverKnights">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#HendersonSilverKnights">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#HendersonSilverKnights">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#HendersonSilverKnights">Farm Team StatsVS</a> ]
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
Starting : Oscar Dansk              
Backup : Kyle Keyser              

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
Jeff Malott (Healthy), Vinny Saponari (Healthy), Cory Conacher (Healthy), Sergey Tolchinsky (Healthy), Konstantin Barulin (Healthy)</pre></div>
<h1 class="TeamLineFarm_CCC"><a id="CCCPRedArmy">CCCP Red Army</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#CCCPRedArmy">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#CCCPRedArmy">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#CCCPRedArmy">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#CCCPRedArmy">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#CCCPRedArmy">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CCCPRedArmy');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CCCPRedArmy" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Rasmussen        Andrew Mangiapane        David Jones              25     1   2  2  
 2 Adam Musil               Klim Kostin              Mathias From             25     1   2  2  
 3 Hudson Elynuik           Dmitry Zavgorodniy       Oliver Wahlstrom         25     1   2  2  
 4 Klim Kostin              Mathias From             Andrew Mangiapane        25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Kylington         Johnathan MacLeod                                 25     1   2  2  
 2 Alexander Alexeyev       Yegor Rykov                                       25     1   2  2  
 3 Artemi Knyazev           Bode Wilde                                        25     1   2  2  
 4 Jordan Spence            Johnathan MacLeod                                 25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Oliver Wahlstrom         Andrew Mangiapane        Hudson Elynuik           60     1   2  2  
 2 Adam Musil               Klim Kostin              Mathias From             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Kylington         Johnathan MacLeod                                 60     1   2  2  
 2 Alexander Alexeyev       Bode Wilde                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Hudson Elynuik           Andrew Mangiapane        60     1   2  2  
 2 Oliver Wahlstrom         Klim Kostin              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Bode Wilde               Johnathan MacLeod        60     1   2  2  
 2 Alexander Alexeyev       Oliver Kylington         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Klim Kostin                                       60     1   2  2  
 2 Andrew Mangiapane                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jordan Spence            Johnathan MacLeod        60     1   2  2  
 2 Alexander Alexeyev       Artemi Knyazev           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dmitry Zavgorodniy       Andrew Mangiapane        60     1   2  2  
 2 Adam Musil               Klim Kostin              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Artemi Knyazev           Johnathan MacLeod        60     1   2  2  
 2 Alexander Alexeyev       Jordan Spence            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Rasmussen        Andrew Mangiapane        Klim Kostin              Oliver Kylington         Johnathan MacLeod        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Rasmussen        Andrew Mangiapane        Klim Kostin              Oliver Kylington         Johnathan MacLeod        

<b>Goaltenders</b>
Starting : Danny aus den Birken     
Backup : Alexei Melnichuk         
Third : Dustin Wolf              

<b>Extra Forwards</b>
Normal : Hudson Elynuik, Oliver Wahlstrom, Dmitry Zavgorodniy - PP : Hudson Elynuik, Oliver Wahlstrom - PK : Dmitry Zavgorodniy
<b>Extra Defensemen</b>
Normal : Artemi Knyazev, Bode Wilde, Jordan Spence - PP : Artemi Knyazev - PK : Bode Wilde, Jordan Spence
<b>Penalty Shots</b>
Michael Rasmussen, Andrew Mangiapane, Dmitry Zavgorodniy, Klim Kostin, Adam Musil
<b>Custom OT Lines Forwards</b>
Michael Rasmussen, Andrew Mangiapane, David Jones, Klim Kostin, Adam Musil, Hudson Elynuik, Mathias From, Oliver Wahlstrom, Dmitry Zavgorodniy, Nikolai Kovalenko
<b>Custom OT Lines Defensemen</b>
Oliver Kylington, Johnathan MacLeod, Alexander Alexeyev, Bode Wilde, Artemi Knyazev

<b>Scratches</b>
Kristian Tanus (Healthy), Valentin Nussbaumer (Healthy), Michael Dal Colle (Healthy)</pre></div>
<h1 class="TeamLineFarm_MAN"><a id="ManitobaMoose">Manitoba Moose</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL101-PLF-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL101-PLF-FarmTeamScoring.php#ManitobaMoose">Farm Team Scoring</a> ]
[ <a href="ASHL101-PLF-FarmTeamLines.php#ManitobaMoose">Farm Team Lines</a> ]
[ <a href="ASHL101-PLF-FarmTeamSchedule.php#ManitobaMoose">Farm Team Schedule</a> ]
[ <a href="ASHL101-PLF-FarmTeamStats.php#ManitobaMoose">Farm Team Stats</a> ]
[ <a href="ASHL101-PLF-FarmTeamStatsVS.php#ManitobaMoose">Farm Team StatsVS</a> ]
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
 2 Rinat Valiev             Jerome Gauthier-Leduc                             25     1   2  2  
 3 Mark Alt                 Kevin Lidström                                    25     1   2  2  
 4 Jerome Gauthier-Leduc    Kevin Gravel                                      25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jérôme Verrier           Adam Tambellini          Michael Joly             60     1   2  2  
 2 Linden Vey               Brent Pedersen           Alexander Avtsin         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Gravel             Peter Stoykewych                                  60     1   2  2  
 2 Mark Alt                 Jerome Gauthier-Leduc                             40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jérôme Verrier           Michael Joly             60     1   2  2  
 2 Adam Tambellini          Brent Pedersen           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Peter Stoykewych         60     1   2  2  
 2 Jerome Gauthier-Leduc    Mark Alt                 40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jérôme Verrier                                    60     1   2  2  
 2 Michael Joly                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Peter Stoykewych         60     1   2  2  
 2 Jerome Gauthier-Leduc    Kevin Lidström           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jérôme Verrier           Michael Joly             60     1   2  2  
 2 Adam Tambellini          Brent Pedersen           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Gravel             Peter Stoykewych         60     1   2  2  
 2 Kevin Lidström           Jerome Gauthier-Leduc    40     1   2  2  

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
Kevin Gravel, Peter Stoykewych, Jerome Gauthier-Leduc, Kevin Lidström, Mark Alt

<b>Scratches</b>
Kay Schweri (Healthy), Maxime Macenauer (Healthy), Joel Chouinard (Healthy), Frederic St-Denis (Healthy)</pre></div>
<?php include "Footer.php";?>
