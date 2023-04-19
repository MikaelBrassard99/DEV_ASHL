<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Farm Team Lines</title>
<script type="text/javascript" src="ASHL6.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.0.9.9" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL6.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL6-STHS.db";
$LangOverwrite = (boolean)FALSE;
$lang = "en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 7; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#LavalChiefs">Laval Chiefs</a> | <a href="#PortlandPirates">Portland Pirates</a> | <a href="#ProvidenceBruins">Providence Bruins</a> | <a href="#RochesterAmericans">Rochester Americans</a> | <a href="#AbbotsfordHeat">Abbotsford Heat</a> | <a href="#CharlotteCheckers">Charlotte Checkers</a> | <a href="#RockfordIceHogs">Rockford IceHogs</a> | <a href="#LakeErieMonsters">Lake Erie Monsters</a> | <a href="#SpringfieldFalcons">Springfield Falcons</a> | <a href="#LasVegasGamblers">Las Vegas Gamblers</a> | <a href="#GrandRapidsGriffins">Grand Rapids Griffins</a> | <a href="#OklahomaCityBarons">Oklahoma City Barons</a> | <a href="#SanAntonioRampage">San Antonio Rampage</a> | <a href="#GatineauOlympiques">Gatineau Olympiques</a> | <a href="#HoustonAeros">Houston Aeros</a> | <a href="#Trois-RivièresDraveurs">Trois-Rivières Draveurs</a> | <a href="#MilwaukeeAdmirals">Milwaukee Admirals</a> | <a href="#AlbanyDevils">Albany Devils</a> | <a href="#BridgeportSoundTigers">Bridgeport Sound Tigers</a> | <a href="#ConnecticutWhale">Connecticut Whale</a> | <a href="#BinghamtonSenators">Binghamton Senators</a> | <a href="#AdirondackPhantoms">Adirondack Phantoms</a> | <a href="#Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a> | <a href="#ChicoutimiSaguenéens">Chicoutimi Saguenéens</a> | <a href="#Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a> | <a href="#ClevelandKnights">Cleveland Knights</a> | <a href="#PeoriaRivermen">Peoria Rivermen</a> | <a href="#NorfolkAdmirals">Norfolk Admirals</a> | <a href="#RobervalDwarfs">Roberval Dwarfs</a> | <a href="#ChicagoWolves">Chicago Wolves</a> | <a href="#LandshutCannibals">Landshut Cannibals</a> | <a href="#ManitobaMoose">Manitoba Moose</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLineFarm_LAV"><a id="LavalChiefs">Laval Chiefs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#LavalChiefs">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#LavalChiefs">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#LavalChiefs">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#LavalChiefs">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#LavalChiefs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LavalChiefs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LavalChiefs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ville Leino              Vladislav Kamenev        Brad Boyes               40     1   2  2  
 2 Rob Schremp              Antti Miettinen          Robin Kovacs             30     1   2  2  
 3 Ryan White               Sean Bergenheim          Jerome Samson            30     1   2  2  
 4 Vladislav Kamenev        Robin Kovacs             Jay Beagle               0      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Josh Manson              Colton Parayko                                    40     1   2  2  
 2 Chris Campoli            Colin Miller                                      30     1   2  2  
 3 Logan Pyett              Kurtis Foster                                     30     1   2  2  
 4 Josh Manson              Logan Pyett                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ville Leino              Vladislav Kamenev        Rostislav Olesz          60     1   2  2  
 2 Ryan White               Antti Miettinen          Robin Kovacs             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Chris Campoli            Colton Parayko                                    60     1   2  2  
 2 Kurtis Foster            Colin Miller                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jay Beagle               Jerome Samson            60     1   2  2  
 2 Ryan White               Robin Kovacs             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Manson              Colton Parayko           60     1   2  2  
 2 Logan Pyett              Colin Miller             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jay Beagle                                        60     1   2  2  
 2 Ville Leino                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colin Miller             Colton Parayko           60     1   2  2  
 2 Josh Manson              Logan Pyett              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ville Leino              Vladislav Kamenev        60     1   2  2  
 2 Rob Schremp              Robin Kovacs             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Chris Campoli            Colton Parayko           60     1   2  2  
 2 Josh Manson              Colin Miller             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ville Leino              Sean Bergenheim          Rostislav Olesz          Chris Campoli            Colton Parayko           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ville Leino              Sean Bergenheim          Rostislav Olesz          Colin Miller             Colton Parayko           

<b>Goaltenders</b>
Starting : Chris Mason              
Backup : Vitek Vanecek            

<b>Extra Forwards</b>
Normal : Jerome Samson, Vladislav Kamenev, Steve Ott - PP : Rostislav Olesz, Vladislav Kamenev - PK : Steve Ott
<b>Extra Defensemen</b>
Normal : Logan Pyett, Colin Miller, Josh Manson - PP : Logan Pyett - PK : Colin Miller, Josh Manson
<b>Penalty Shots</b>
Sean Bergenheim, Ville Leino, Rostislav Olesz, Ryan White, Antti Miettinen
<b>Custom OT Lines Forwards</b>
Sean Bergenheim, Ville Leino, Rostislav Olesz, Ryan White, Antti Miettinen, Robin Kovacs, Jerome Samson, Steve Ott, Rob Schremp, Vladislav Kamenev
<b>Custom OT Lines Defensemen</b>
Josh Manson, Colton Parayko, Colin Miller, Matt Gilroy, Logan Pyett

<b>Scratches</b>
Colby Cohen (Healthy), Scott Hartnell (Healthy), Trevor Lewis (Healthy)</pre></div>
<h1 class="TeamLineFarm_POR"><a id="PortlandPirates">Portland Pirates</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#PortlandPirates">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#PortlandPirates">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#PortlandPirates">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#PortlandPirates">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#PortlandPirates">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PortlandPirates');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PortlandPirates" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jaedon Descheneau        Cole Ully                Oliver Bjorkstrand       40     1   2  2  
 2 Trevor Cox               Nikita Jevpalovs         Juuso Ikonen             30     1   2  2  
 3 Pius Suter               Rihards Bukarts          Conor Garland            20     1   2  2  
 4 Adam Brooks              Dominic Zwerger          Cole Cassels             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Sam Jardine              Esa Lindell                                       40     1   2  2  
 2 Harrison Ruopp           Blake Kessel                                      30     1   2  2  
 3 Mattias Norstebo         Adam Brooks                                       20     1   2  2  
 4 Sam Jardine              Esa Lindell                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jaedon Descheneau        Cole Ully                Oliver Bjorkstrand       60     1   2  2  
 2 Trevor Cox               Nikita Jevpalovs         Juuso Ikonen             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Sam Jardine              Esa Lindell                                       60     1   2  2  
 2 Harrison Ruopp           Mattias Norstebo                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaedon Descheneau        Oliver Bjorkstrand       60     1   2  2  
 2 Cole Ully                Nikita Jevpalovs         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Sam Jardine              Esa Lindell              60     1   2  2  
 2 Harrison Ruopp           Mattias Norstebo         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jaedon Descheneau                                 60     1   2  2  
 2 Oliver Bjorkstrand                                40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Sam Jardine              Esa Lindell              60     1   2  2  
 2 Harrison Ruopp           Mattias Norstebo         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaedon Descheneau        Oliver Bjorkstrand       60     1   2  2  
 2 Cole Ully                Nikita Jevpalovs         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Sam Jardine              Esa Lindell              60     1   2  2  
 2 Harrison Ruopp           Blake Kessel             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jaedon Descheneau        Cole Ully                Oliver Bjorkstrand       Sam Jardine              Esa Lindell              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jaedon Descheneau        Cole Ully                Oliver Bjorkstrand       Sam Jardine              Esa Lindell              

<b>Goaltenders</b>
Starting : Edgars Masalskis         
Backup : Connor Hellebuyck        

<b>Extra Forwards</b>
Normal : Rodrigo Abols, Vadim Vasjonkin, Rihards Bukarts - PP : Rodrigo Abols, Vadim Vasjonkin - PK : Rihards Bukarts
<b>Extra Defensemen</b>
Normal : Mattias Norstebo, Harrison Ruopp, Esa Lindell - PP : Mattias Norstebo - PK : Harrison Ruopp, Sam Jardine
<b>Penalty Shots</b>
Jaedon Descheneau, Oliver Bjorkstrand, Cole Ully, Nikita Jevpalovs, Trevor Cox
<b>Custom OT Lines Forwards</b>
Jaedon Descheneau, Oliver Bjorkstrand, Cole Ully, Nikita Jevpalovs, Trevor Cox, Rihards Bukarts, Pius Suter, Adam Brooks, Rodrigo Abols, Dominic Zwerger
<b>Custom OT Lines Defensemen</b>
Sam Jardine, Esa Lindell, Harrison Ruopp, Blake Kessel, Mattias Norstebo

<b>Scratches</b>
David Clarkson (Healthy), Ryan Parent (Healthy), Broc Little (Healthy)</pre></div>
<h1 class="TeamLineFarm_PRO"><a id="ProvidenceBruins">Providence Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#ProvidenceBruins">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#ProvidenceBruins">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#ProvidenceBruins">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#ProvidenceBruins">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#ProvidenceBruins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ProvidenceBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ProvidenceBruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Riley Sheahan            Alexander Khokhlachev    P.A. Parenteau           40     1   2  2  
 2 Matthew Stajan           Justin Florek            Jamie Arniel             30     1   2  2  
 3 Ruslan Fedotenko         Craig Cunningham         Tyler Randell            20     1   2  2  
 4 Marc-Antoine Pouliot     Simon Tremblay           Carter Camper            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dalton Thrower           Maxim Chudinov                                    40     1   2  2  
 2 Mark Stuart              Zach Trotman                                      30     1   2  2  
 3 Brian Strait             Ryan Button                                       20     1   2  2  
 4 David Warsofsky          Dalton Thrower                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Riley Sheahan            Alexander Khokhlachev    P.A. Parenteau           60     1   2  2  
 2 Matthew Stajan           Justin Florek            Jamie Arniel             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dalton Thrower           Maxim Chudinov                                    60     1   2  2  
 2 Mark Stuart              Zach Trotman                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 P.A. Parenteau           Riley Sheahan            60     1   2  2  
 2 Matthew Stajan           Jamie Arniel             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dalton Thrower           Maxim Chudinov           60     1   2  2  
 2 Mark Stuart              Zach Trotman             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 P.A. Parenteau                                    60     1   2  2  
 2 Riley Sheahan                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dalton Thrower           Maxim Chudinov           60     1   2  2  
 2 Mark Stuart              Zach Trotman             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 P.A. Parenteau           Riley Sheahan            60     1   2  2  
 2 Matthew Stajan           Jamie Arniel             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dalton Thrower           Maxim Chudinov           60     1   2  2  
 2 Mark Stuart              Zach Trotman             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Riley Sheahan            Alexander Khokhlachev    P.A. Parenteau           Dalton Thrower           Maxim Chudinov           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Riley Sheahan            Alexander Khokhlachev    P.A. Parenteau           Dalton Thrower           Maxim Chudinov           

<b>Goaltenders</b>
Starting : Jeff Frazee              
Backup : Michael Hutchinson       

<b>Extra Forwards</b>
Normal : Ruslan Fedotenko, Marc-Antoine Pouliot, Craig Cunningham - PP : Ruslan Fedotenko, Marc-Antoine Pouliot - PK : Craig Cunningham
<b>Extra Defensemen</b>
Normal : Brian Strait, Ryan Button, David Warsofsky - PP : Brian Strait - PK : Ryan Button, David Warsofsky
<b>Penalty Shots</b>
P.A. Parenteau, Riley Sheahan, Matthew Stajan, Jamie Arniel, Alexander Khokhlachev
<b>Custom OT Lines Forwards</b>
P.A. Parenteau, Riley Sheahan, Matthew Stajan, Jamie Arniel, Alexander Khokhlachev, Justin Florek, Ruslan Fedotenko, Marc-Antoine Pouliot, Craig Cunningham, Tyler Randell
<b>Custom OT Lines Defensemen</b>
Dalton Thrower, Maxim Chudinov, Mark Stuart, Zach Trotman, Brian Strait

<b>Scratches</b>
John Carlson (Healthy), Roland McKeown (Healthy)</pre></div>
<h1 class="TeamLineFarm_RCH"><a id="RochesterAmericans">Rochester Americans</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#RochesterAmericans">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#RochesterAmericans">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#RochesterAmericans">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#RochesterAmericans">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#RochesterAmericans">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RochesterAmericans');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RochesterAmericans" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Chris VandeVelde         Jordan Martinook         Andreas Nodl             40     0   2  3  
 2 Benn Ferriero            Ben Maxwell              Erik Cole                30     0   2  3  
 3 Tomas Kopecky            Nikolai Zherdev          Ryane Clowe              20     0   2  3  
 4 Jake Dowell              John Mitchell            Chuck Kobasew            10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Pysyk               Jonas Siegenthaler                                40     0   3  2  
 2 Dennis Persson           Andrey Zubarev                                    30     0   2  3  
 3 Chris Butler             Drew Mackenzie                                    20     1   3  1  
 4 Mark Pysyk               Kyle Cumiskey                                     10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Chris VandeVelde         Jordan Martinook         Andreas Nodl             60     0   1  4  
 2 Benn Ferriero            Ben Maxwell              Erik Cole                40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Pysyk               Jonas Siegenthaler                                60     0   1  4  
 2 Dennis Persson           Andrey Zubarev                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ben Maxwell              Chuck Kobasew            60     0   4  1  
 2 Jake Dowell              Tomas Kopecky            40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Pysyk               Drew Mackenzie           60     0   5  0  
 2 Chris Butler             Andrey Zubarev           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ben Maxwell                                       60     0   5  0  
 2 Jake Dowell                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Pysyk               Drew Mackenzie           60     0   5  0  
 2 Chris Butler             Andrey Zubarev           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris VandeVelde         Jordan Martinook         60     0   2  3  
 2 Benn Ferriero            Andreas Nodl             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Pysyk               Jonas Siegenthaler       60     0   3  2  
 2 Dennis Persson           Andrey Zubarev           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris VandeVelde         Jordan Martinook         Benn Ferriero            Mark Pysyk               Jonas Siegenthaler       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ben Maxwell              Chuck Kobasew            Tomas Kopecky            Mark Pysyk               Andrey Zubarev           

<b>Goaltenders</b>
Starting : Ray Emery                
Backup : Oscar Dansk              
Third : Bradley Eidsness         

<b>Extra Forwards</b>
Normal : Chris VandeVelde, Jordan Martinook, Andreas Nodl - PP : Chris VandeVelde, Jordan Martinook - PK : Ben Maxwell
<b>Extra Defensemen</b>
Normal : Mark Pysyk, Andrey Zubarev, Jonas Siegenthaler - PP : Mark Pysyk - PK : Andrey Zubarev, Mark Pysyk
<b>Penalty Shots</b>
Nikolai Zherdev, Benn Ferriero, Erik Cole, Andreas Nodl, Jordan Martinook
<b>Custom OT Lines Forwards</b>
Chris VandeVelde, Benn Ferriero, Jordan Martinook, Andreas Nodl, Erik Cole, Ben Maxwell, Chuck Kobasew, Jake Dowell, Nikolai Zherdev, Tomas Kopecky
<b>Custom OT Lines Defensemen</b>
Mark Pysyk, Jonas Siegenthaler, Dennis Persson, Andrey Zubarev, Drew Mackenzie

<b>Scratches</b>
Dmitri Kulikov (Healthy), Jeff Carter (Healthy), Corey Tropp (Healthy)</pre></div>
<h1 class="TeamLineFarm_ABB"><a id="AbbotsfordHeat">Abbotsford Heat</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#AbbotsfordHeat">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#AbbotsfordHeat">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#AbbotsfordHeat">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#AbbotsfordHeat">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#AbbotsfordHeat">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AbbotsfordHeat');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AbbotsfordHeat" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brody Sutter             Adrian Kempe             Greg Nemisz              40     1   2  2  
 2 Philip McRae             Danny Kristo             Josh Ho-Sang             30     1   2  2  
 3 Paul Byron               Ryan MacInnis            Blake Geoffrion          20     1   2  2  
 4 Christian Fischer        Nick Paul                Anton Zlobin             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyler Wotherspoon        Brad Hunt                                         40     1   2  2  
 2 Darren Dietz             Jacob Larsson                                     30     1   2  2  
 3 Mark Alt                 John Ramage                                       20     1   2  2  
 4 Matthew Finn             Matt Taormina                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brody Sutter             Josh Ho-Sang             Greg Nemisz              60     1   2  2  
 2 Philip McRae             Adrian Kempe             Blake Geoffrion          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyler Wotherspoon        Darren Dietz                                      60     1   2  2  
 2 Brad Hunt                Jacob Larsson                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Blake Geoffrion          Greg Nemisz              60     1   2  2  
 2 Philip McRae             Brody Sutter             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brad Hunt                Matthew Finn             60     1   2  2  
 2 Darren Dietz             John Ramage              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan MacInnis                                     60     1   2  2  
 2 Greg Nemisz                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brad Hunt                Matthew Finn             60     1   2  2  
 2 Darren Dietz             John Ramage              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Blake Geoffrion          Ryan MacInnis            60     1   2  2  
 2 Philip McRae             Brody Sutter             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Wotherspoon        Matthew Finn             60     1   2  2  
 2 Matt Taormina            John Ramage              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Paul Byron               Josh Ho-Sang             Greg Nemisz              Tyler Wotherspoon        Brad Hunt                

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Blake Geoffrion          Brody Sutter             Ryan MacInnis            Tyler Wotherspoon        Matthew Finn             

<b>Goaltenders</b>
Starting : Laurent Brossoit         
Backup : Michael Leighton         

<b>Extra Forwards</b>
Normal : Christian Fischer, Danny Kristo, Greg Nemisz - PP : Ryan MacInnis, Danny Kristo - PK : Brody Sutter
<b>Extra Defensemen</b>
Normal : Mark Alt, Jacob Larsson, Matt Taormina - PP : Brad Hunt - PK : John Ramage, Matthew Finn
<b>Penalty Shots</b>
Josh Ho-Sang, Greg Nemisz, Blake Geoffrion, Adrian Kempe, Danny Kristo
<b>Custom OT Lines Forwards</b>
Blake Geoffrion, Greg Nemisz, Philip McRae, Brody Sutter, Danny Kristo, Paul Byron, Ryan MacInnis, Adrian Kempe, Josh Ho-Sang, Christian Fischer
<b>Custom OT Lines Defensemen</b>
Jacob Larsson, Matthew Finn, Matt Taormina, John Ramage, Mark Alt

<b>Scratches</b>
Johan Harju (Healthy), Carter Bancks (Healthy), Justin Azevedo (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHA"><a id="CharlotteCheckers">Charlotte Checkers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#CharlotteCheckers">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#CharlotteCheckers">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#CharlotteCheckers">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#CharlotteCheckers">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#CharlotteCheckers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CharlotteCheckers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CharlotteCheckers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrick Holland          Darroll Powe             Chris Thorburn           40     1   2  2  
 2 Mattias Janmark-Nylen    Stefan Meyer             Jeff Tambellini          30     1   2  2  
 3 Greg McKegg              Darren Archibald         Andreas Thuresson        20     1   2  2  
 4 Greg Carey               Dominik Uher             Darroll Powe             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Pavel Valentenko         Filip Berglund                                    40     1   2  2  
 2 Michael Paliotta         Shayne Tacker                                     30     1   2  2  
 3 Kenney Morrison          Ricard Blidstrand                                 20     1   2  2  
 4 Filip Berglund           Curt Gogol                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrick Holland          Darroll Powe             Chris Thorburn           60     1   2  2  
 2 Mattias Janmark-Nylen    Stefan Meyer             Jeff Tambellini          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Pavel Valentenko         Filip Berglund                                    60     1   2  2  
 2 Michael Paliotta         Shayne Tacker                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Darroll Powe             Chris Thorburn           60     1   2  2  
 2 Jeff Tambellini          Patrick Holland          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Pavel Valentenko         Kenney Morrison          60     1   2  2  
 2 Michael Paliotta         Shayne Tacker            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Darroll Powe                                      60     1   2  2  
 2 Chris Thorburn                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Pavel Valentenko         Filip Berglund           60     1   2  2  
 2 Michael Paliotta         Shayne Tacker            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Darroll Powe             Chris Thorburn           60     1   2  2  
 2 Jeff Tambellini          Patrick Holland          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Pavel Valentenko         Ricard Blidstrand        60     1   2  2  
 2 Michael Paliotta         Shayne Tacker            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrick Holland          Darroll Powe             Chris Thorburn           Pavel Valentenko         Michael Paliotta         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrick Holland          Darroll Powe             Chris Thorburn           Pavel Valentenko         Michael Paliotta         

<b>Goaltenders</b>
Starting : Mike Murphy              
Backup : Kristers Gudlevskis      

<b>Extra Forwards</b>
Normal : Darren Archibald, Greg McKegg, Andreas Thuresson - PP : Darren Archibald, Greg McKegg - PK : Andreas Thuresson
<b>Extra Defensemen</b>
Normal : Kenney Morrison, Ricard Blidstrand, Filip Berglund - PP : Kenney Morrison - PK : Ricard Blidstrand, Filip Berglund
<b>Penalty Shots</b>
Darroll Powe, Chris Thorburn, Jeff Tambellini, Patrick Holland, Mattias Janmark-Nylen
<b>Custom OT Lines Forwards</b>
Darroll Powe, Chris Thorburn, Jeff Tambellini, Patrick Holland, Mattias Janmark-Nylen, Stefan Meyer, Darren Archibald, Greg McKegg, Andreas Thuresson, Greg Carey
<b>Custom OT Lines Defensemen</b>
Pavel Valentenko, Ricard Blidstrand, Michael Paliotta, Shayne Tacker, Kenney Morrison

<b>Scratches</b>
Patrick Wiercioch (Healthy), Morgan Ellis (Healthy), Michael Stone (Healthy)</pre></div>
<h1 class="TeamLineFarm_RFD"><a id="RockfordIceHogs">Rockford IceHogs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#RockfordIceHogs">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#RockfordIceHogs">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#RockfordIceHogs">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#RockfordIceHogs">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#RockfordIceHogs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RockfordIceHogs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RockfordIceHogs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Kevin Hayes              Adam Helewka             Christophe Lalancette    34     0   1  4  
 2 Christopher DiDomenico   Julien Pelletier         Maxim Shalunov           28     0   1  4  
 3 Mirko Hoefflin           Daniel Cleary            Zac Rinaldo              22     1   1  3  
 4 Dustin Boyd              Zach Pochiro             Justin Auger             16     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexandre R.Picard       Rasmus Andersson                                  34     1   3  1  
 2 Enrico Miglioranzi       Trevor Van Riemsdyk                               28     0   4  1  
 3 Jordan Leopold           Jason Fram                                        22     0   4  1  
 4 Justin Holl              Stephen Johns                                     16     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Kevin Hayes              Adam Helewka             Christophe Lalancette    50     0   0  5  
 2 Christopher DiDomenico   Julien Pelletier         Maxim Shalunov           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Andersson         Trevor Van Riemsdyk                               60     0   0  5  
 2 Jason Fram               Enrico Miglioranzi                                40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kevin Hayes              Justin Holl              50     0   5  0  
 2 Christophe Lalancette    Daniel Cleary            50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexandre R.Picard       Rasmus Andersson         50     0   5  0  
 2 Enrico Miglioranzi       Trevor Van Riemsdyk      50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Kevin Hayes                                       50     0   5  0  
 2 Christophe Lalancette                             50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexandre R.Picard       Rasmus Andersson         50     0   5  0  
 2 Enrico Miglioranzi       Trevor Van Riemsdyk      50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kevin Hayes              Christophe Lalancette    50     0   1  4  
 2 Christopher DiDomenico   Adam Helewka             50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexandre R.Picard       Rasmus Andersson         50     1   3  1  
 2 Enrico Miglioranzi       Trevor Van Riemsdyk      50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kevin Hayes              Adam Helewka             Christophe Lalancette    Rasmus Andersson         Trevor Van Riemsdyk      

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kevin Hayes              Daniel Cleary            Christophe Lalancette    Trevor Van Riemsdyk      Rasmus Andersson         

<b>Goaltenders</b>
Starting : Mackenzie Blackwood      
Backup : Niklas Svedberg          

<b>Extra Forwards</b>
Normal : Maxim Shalunov, Christophe Lalancette, Dustin Boyd - PP : Maxim Shalunov, Dustin Boyd - PK : Justin Holl
<b>Extra Defensemen</b>
Normal : Trevor Van Riemsdyk, Jason Fram, Stephen Johns - PP : Enrico Miglioranzi - PK : Trevor Van Riemsdyk, Stephen Johns
<b>Penalty Shots</b>
Christopher DiDomenico, Mirko Hoefflin, Adam Helewka, Kevin Hayes, Maxim Shalunov
<b>Custom OT Lines Forwards</b>
Kevin Hayes, Maxim Shalunov, Christopher DiDomenico, Christophe Lalancette, Mirko Hoefflin, Adam Helewka, Dustin Boyd, Julien Pelletier, Zach Pochiro, Justin Auger
<b>Custom OT Lines Defensemen</b>
Rasmus Andersson, Jason Fram, Trevor Van Riemsdyk, Enrico Miglioranzi, Justin Holl

<b>Scratches</b>
Jeremy Morin (Healthy), Peter Regin (Healthy), Adam Clendening (Healthy)</pre></div>
<h1 class="TeamLineFarm_LKE"><a id="LakeErieMonsters">Lake Erie Monsters</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#LakeErieMonsters">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#LakeErieMonsters">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#LakeErieMonsters">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#LakeErieMonsters">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#LakeErieMonsters">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LakeErieMonsters');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LakeErieMonsters" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joachim Nermark          Nikolay Prokhorkin       Brad Malone              40     1   2  2  
 2 Cory Emmerton            Taylor Leier             Gustav Nyquist           30     1   2  2  
 3 Stephen MacAulay         Danick Martel            Luke Walker              20     1   2  2  
 4 Petteri Nokelainen       Joachim Nermark          Luke Moffatt             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dillon Donnelly          Brett Cote                                        40     1   2  2  
 2 Stephen Silas            Andreas Englund                                   30     1   2  2  
 3 Gus Young                Jake Walman                                       20     1   2  2  
 4 Dillon Donnelly          Brett Cote                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joachim Nermark          Nikolay Prokhorkin       Brad Malone              60     1   2  2  
 2 Cory Emmerton            Taylor Leier             Gustav Nyquist           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dillon Donnelly          Brett Cote                                        60     1   2  2  
 2 Stephen Silas            Andreas Englund                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joachim Nermark          Nikolay Prokhorkin       60     1   2  2  
 2 Taylor Leier             Cory Emmerton            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dillon Donnelly          Brett Cote               60     1   2  2  
 2 Stephen Silas            Andreas Englund          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joachim Nermark                                   60     1   2  2  
 2 Nikolay Prokhorkin                                40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dillon Donnelly          Brett Cote               60     1   2  2  
 2 Stephen Silas            Andreas Englund          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joachim Nermark          Nikolay Prokhorkin       60     1   2  2  
 2 Taylor Leier             Cory Emmerton            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dillon Donnelly          Brett Cote               60     1   2  2  
 2 Stephen Silas            Andreas Englund          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joachim Nermark          Nikolay Prokhorkin       Brad Malone              Dillon Donnelly          Brett Cote               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joachim Nermark          Nikolay Prokhorkin       Brad Malone              Dillon Donnelly          Brett Cote               

<b>Goaltenders</b>
Starting : Trevor Cann              
Backup : Matt O'Connor            
Third : Kieran Millan            

<b>Extra Forwards</b>
Normal : Kurtis Gabriel, Luke Walker, Stephen MacAulay - PP : Kurtis Gabriel, Luke Walker - PK : Stephen MacAulay
<b>Extra Defensemen</b>
Normal : Gus Young, Jake Walman, Stephen Silas - PP : Gus Young - PK : Jake Walman, Stephen Silas
<b>Penalty Shots</b>
Joachim Nermark, Nikolay Prokhorkin, Taylor Leier, Cory Emmerton, Brad Malone
<b>Custom OT Lines Forwards</b>
Joachim Nermark, Nikolay Prokhorkin, Taylor Leier, Cory Emmerton, Brad Malone, Gustav Nyquist, Luke Walker, Stephen MacAulay, Petteri Nokelainen, Luke Moffatt
<b>Custom OT Lines Defensemen</b>
Dillon Donnelly, Brett Cote, Stephen Silas, Andreas Englund, Gus Young

<b>Scratches</b>
Jan Kovar (Healthy), Evan Rodrigues (Healthy), Denis Parshin (Healthy)</pre></div>
<h1 class="TeamLineFarm_SPR"><a id="SpringfieldFalcons">Springfield Falcons</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#SpringfieldFalcons">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#SpringfieldFalcons">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#SpringfieldFalcons">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#SpringfieldFalcons">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#SpringfieldFalcons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SpringfieldFalcons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SpringfieldFalcons" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Chaput           Adam Erne                Tomas Kubalik            40     1   2  2  
 2 Jason Dickinson          Ivan Telegin             Jake Hansen              30     1   2  2  
 3 T.J. Tynan               Petr Straka              Mats Rosseli Olsen       20     1   2  2  
 4 Rylan Schwartz           Nicolas Deschamps        Michael Chaput           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Samuel Morin             Mirco Mueller                                     40     1   2  2  
 2 Shane Hanna              Connor Carrick                                    30     1   2  2  
 3 Nikita Tryamkin          Shayne Gostisbehere                               20     1   2  2  
 4 Samuel Morin             Mirco Mueller                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Chaput           Adam Erne                Tomas Kubalik            60     1   2  2  
 2 Jason Dickinson          Ivan Telegin             Jake Hansen              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Samuel Morin             Mirco Mueller                                     60     1   2  2  
 2 Shane Hanna              Connor Carrick                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Chaput           Adam Erne                60     1   2  2  
 2 Tomas Kubalik            Jason Dickinson          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Morin             Mirco Mueller            60     1   2  2  
 2 Shane Hanna              Connor Carrick           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael Chaput                                    60     1   2  2  
 2 Adam Erne                                         40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Morin             Mirco Mueller            60     1   2  2  
 2 Shane Hanna              Connor Carrick           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Chaput           Adam Erne                60     1   2  2  
 2 Tomas Kubalik            Jason Dickinson          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Morin             Mirco Mueller            60     1   2  2  
 2 Shane Hanna              Connor Carrick           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Chaput           Adam Erne                Tomas Kubalik            Samuel Morin             Mirco Mueller            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Chaput           Adam Erne                Tomas Kubalik            Samuel Morin             Mirco Mueller            

<b>Goaltenders</b>
Starting : Spencer Martin           
Backup : Jake Paterson            

<b>Extra Forwards</b>
Normal : Dalton Smith, Petr Straka, T.J. Tynan - PP : Dalton Smith, Petr Straka - PK : T.J. Tynan
<b>Extra Defensemen</b>
Normal : Nikita Tryamkin, Shayne Gostisbehere, Shane Hanna - PP : Nikita Tryamkin - PK : Shayne Gostisbehere, Shane Hanna
<b>Penalty Shots</b>
Michael Chaput, Adam Erne, Tomas Kubalik, Jason Dickinson, Ivan Telegin
<b>Custom OT Lines Forwards</b>
Michael Chaput, Adam Erne, Tomas Kubalik, Jason Dickinson, Ivan Telegin, Jake Hansen, Petr Straka, T.J. Tynan, Rylan Schwartz, Mats Rosseli Olsen
<b>Custom OT Lines Defensemen</b>
Samuel Morin, Mirco Mueller, Shane Hanna, Connor Carrick, Nikita Tryamkin

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_LVG"><a id="LasVegasGamblers">Las Vegas Gamblers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#LasVegasGamblers">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#LasVegasGamblers">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#LasVegasGamblers">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#LasVegasGamblers">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#LasVegasGamblers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LasVegasGamblers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LasVegasGamblers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Victor Rask              Max Domi                 Ryan Hartman             34     0   2  3  
 2 Markus Granlund          Phillip Di Giuseppe      Andreas Johnson          33     0   2  3  
 3 Conner Bleackley         Pierre-Marc Bouchard     Jayce Hawryluk           26     0   2  3  
 4 Mads Eller               Jimmy Vesey              Jerry D'Amigo            7      0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Petrovic            Patrik Nemeth                                     34     0   2  3  
 2 Korbinian Holzer         Nick Holden                                       33     0   2  3  
 3 Brett Festerling         Aaron Rome                                        26     0   3  2  
 4 Alex Petrovic            Korbinian Holzer                                  7      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Markus Granlund          Max Domi                 Andreas Johnson          50     0   0  5  
 2 Victor Rask              Phillip Di Giuseppe      Ryan Hartman             50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Petrovic            Nick Holden                                       50     0   1  4  
 2 Korbinian Holzer         Patrik Nemeth                                     50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Conner Bleackley         Jerry D'Amigo            50     0   4  1  
 2 Jayce Hawryluk           Curtis McKenzie          50     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Petrovic            Patrik Nemeth            50     0   5  0  
 2 Korbinian Holzer         Brett Festerling         50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Conner Bleackley                                  50     0   5  0  
 2 Jayce Hawryluk                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Petrovic            Patrik Nemeth            50     0   5  0  
 2 Korbinian Holzer         Brett Festerling         50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Victor Rask              Ryan Hartman             50     0   2  3  
 2 Markus Granlund          Phillip Di Giuseppe      50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Petrovic            Patrik Nemeth            50     0   3  2  
 2 Korbinian Holzer         Nick Holden              50     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Victor Rask              Phillip Di Giuseppe      Ryan Hartman             Alex Petrovic            Patrik Nemeth            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Conner Bleackley         Curtis McKenzie          Jerry D'Amigo            Alex Petrovic            Brett Festerling         

<b>Goaltenders</b>
Starting : Richard Bachman          
Backup : Alexander Sharychenkov   

<b>Extra Forwards</b>
Normal : Markus Granlund, Jayce Hawryluk, Andreas Johnson - PP : Victor Rask, Markus Granlund - PK : Mads Eller
<b>Extra Defensemen</b>
Normal : Brett Festerling, Patrik Nemeth, Nick Holden - PP : Brett Festerling - PK : Brett Festerling, Alex Petrovic
<b>Penalty Shots</b>
Max Domi, Phillip Di Giuseppe, Andreas Johnson, Pierre-Marc Bouchard, Victor Rask
<b>Custom OT Lines Forwards</b>
Victor Rask, Ryan Hartman, Markus Granlund, Phillip Di Giuseppe, Conner Bleackley, Pierre-Marc Bouchard, Max Domi, Jerry D'Amigo, Jayce Hawryluk, Andreas Johnson
<b>Custom OT Lines Defensemen</b>
Alex Petrovic, Korbinian Holzer, Patrik Nemeth, Brett Festerling, Nick Holden

<b>Scratches</b>
Nick Schultz (Healthy), Wojtek Wolski (Healthy), Jared Staal (Healthy)</pre></div>
<h1 class="TeamLineFarm_GRG"><a id="GrandRapidsGriffins">Grand Rapids Griffins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#GrandRapidsGriffins">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#GrandRapidsGriffins">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#GrandRapidsGriffins">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#GrandRapidsGriffins">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#GrandRapidsGriffins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GrandRapidsGriffins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GrandRapidsGriffins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jiri Tlusty              Brent Raedeke            Miks Indrashis           40     1   2  2  
 2 Calle Jarnkrok           Justin Kea               Mitchell Callahan        30     1   2  2  
 3 Luke Glendening          Valentin Claireaux       Steve Moses              20     1   2  2  
 4 Brooks Macek             Mitchell Callahan        Miks Indrashis           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Almqvist            Matt Bartkowski                                   40     1   2  2  
 2 Alexei Marchenko         Matt Pelech                                       30     1   2  2  
 3 Nate Schmidt             Brandon Burlon                                    20     1   2  2  
 4 Shaone Morrisonn         Adam Almqvist                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Luke Glendening          Brent Raedeke            Steve Moses              60     1   2  2  
 2 Calle Jarnkrok           Justin Kea               Mitchell Callahan        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brandon Burlon           Matt Bartkowski                                   60     1   2  2  
 2 Alexei Marchenko         Matt Pelech                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Luke Glendening          Steve Moses              60     1   2  2  
 2 Calle Jarnkrok           Brent Raedeke            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shaone Morrisonn         Matt Bartkowski          60     1   2  2  
 2 Alexei Marchenko         Matt Pelech              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Calle Jarnkrok                                    60     1   2  2  
 2 Brent Raedeke                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Almqvist            Matt Bartkowski          60     1   2  2  
 2 Alexei Marchenko         Matt Pelech              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mitchell Callahan        Steve Moses              60     1   2  2  
 2 Calle Jarnkrok           Brent Raedeke            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nate Schmidt             Matt Bartkowski          60     1   2  2  
 2 Alexei Marchenko         Matt Pelech              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jiri Tlusty              Brent Raedeke            Calle Jarnkrok           Alexei Marchenko         Matt Bartkowski          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jiri Tlusty              Brent Raedeke            Calle Jarnkrok           Alexei Marchenko         Matt Bartkowski          

<b>Goaltenders</b>
Starting : Tom McCollum             
Backup : Emil Garipov             
Third : Luka Gracnar             

<b>Extra Forwards</b>
Normal : Philippe Hudon, Steve Moses, Luke Glendening - PP : Philippe Hudon, Steve Moses - PK : Luke Glendening
<b>Extra Defensemen</b>
Normal : Nate Schmidt, Brandon Burlon, Shaone Morrisonn - PP : Nate Schmidt - PK : Brandon Burlon, Shaone Morrisonn
<b>Penalty Shots</b>
Steve Moses, Jiri Tlusty, Calle Jarnkrok, Brent Raedeke, Mitchell Callahan
<b>Custom OT Lines Forwards</b>
Philippe Hudon, Jiri Tlusty, Calle Jarnkrok, Brent Raedeke, Mitchell Callahan, Steve Moses, Luke Glendening, Miks Indrashis, Brooks Macek, Justin Kea
<b>Custom OT Lines Defensemen</b>
Brandon Burlon, Matt Bartkowski, Alexei Marchenko, Matt Pelech, Nate Schmidt

<b>Scratches</b>
Jaden Schwartz (Separated Right Shoulder Injury)</pre></div>
<h1 class="TeamLineFarm_OKC"><a id="OklahomaCityBarons">Oklahoma City Barons</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#OklahomaCityBarons">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#OklahomaCityBarons">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#OklahomaCityBarons">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#OklahomaCityBarons">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#OklahomaCityBarons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OklahomaCityBarons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OklahomaCityBarons" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Seth Griffith            Morgan Klimchuk          Toni Rajala              34     1   2  2  
 2 Bogdan Yakimov           Paul Bittner             Valentin Zykov           32     1   2  2  
 3 Tyler Pitlick            Brendan Lemieux          Jared Knight             24     1   2  2  
 4 Tyler Pitlick            Brendan Lemieux          Jared Knight             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Sulzer         Jack Dougherty                                    35     1   2  2  
 2 Taylor Fedun             Martin Marincin                                   33     1   2  2  
 3 Dominik Masin            Mikko Vainonen                                    29     1   2  2  
 4 Alexander Sulzer         Mikko Vainonen                                    3      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Seth Griffith            Morgan Klimchuk          Toni Rajala              56     1   2  2  
 2 Bogdan Yakimov           Paul Bittner             Valentin Zykov           44     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Sulzer         Martin Marincin                                   57     1   2  2  
 2 Mikko Vainonen           Jack Dougherty                                    43     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brian Gibbons            Brendan Lemieux          55     1   2  2  
 2 Tyler Pitlick            Philippe Cornet          45     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Sulzer         Dominik Masin            55     1   2  2  
 2 Taylor Fedun             Jack Dougherty           45     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brian Gibbons                                     60     1   2  2  
 2 Tyler Pitlick                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Sulzer         Dominik Masin            60     1   2  2  
 2 Taylor Fedun             Martin Marincin          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Bogdan Yakimov           Morgan Klimchuk          56     1   2  2  
 2 Seth Griffith            Toni Rajala              44     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Fedun             Jack Dougherty           55     1   2  2  
 2 Alexander Sulzer         Martin Marincin          45     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Seth Griffith            Morgan Klimchuk          Toni Rajala              Alexander Sulzer         Martin Marincin          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brian Gibbons            Paul Bittner             Jared Knight             Alexander Sulzer         Dominik Masin            

<b>Goaltenders</b>
Starting : Samu Perhonen            
Backup : Jeff Zatkoff             

<b>Extra Forwards</b>
Normal : Valentin Zykov, Tyler Pitlick, Brian Gibbons - PP : Tyler Pitlick, Valentin Zykov - PK : Morgan Klimchuk
<b>Extra Defensemen</b>
Normal : Dominik Masin, Mikko Vainonen, Taylor Fedun - PP : Dominik Masin - PK : Mikko Vainonen, Taylor Fedun
<b>Penalty Shots</b>
Brian Gibbons, Morgan Klimchuk, Valentin Zykov, Toni Rajala, Philippe Cornet
<b>Custom OT Lines Forwards</b>
Bogdan Yakimov, Morgan Klimchuk, Seth Griffith, Jared Knight, Brian Gibbons, Toni Rajala, Sean Collins, Valentin Zykov, Tyler Pitlick, Brendan Lemieux
<b>Custom OT Lines Defensemen</b>
Martin Marincin, Jack Dougherty, Dominik Masin, Taylor Fedun, Alexander Sulzer

<b>Scratches</b>
Alex Plante (Healthy), Rostislav Klesla (Healthy)</pre></div>
<h1 class="TeamLineFarm_SAR"><a id="SanAntonioRampage">San Antonio Rampage</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#SanAntonioRampage">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#SanAntonioRampage">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#SanAntonioRampage">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#SanAntonioRampage">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#SanAntonioRampage">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanAntonioRampage');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanAntonioRampage" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Timmins            Anthony Camara           Mattias Ritola           35     1   2  2  
 2 Robby Fabbri             Josh Anderson            Justin Kloos             35     1   2  2  
 3 Oscar Lindberg           Leo Komarov              Nikita Soshnikov         25     1   2  2  
 4 Joel Perrault            Adam Cracknell           Milan Hejduk             5      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Derrick Pouliot          Barret Jackman                                    40     1   2  2  
 2 Dylan Demelo             Adam Pardy                                        30     1   2  2  
 3 Andre Benoit             Anton Belov                                       20     1   2  2  
 4 Derrick Pouliot          Barret Jackman                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Timmins            Anthony Camara           Mattias Ritola           60     1   2  2  
 2 Robby Fabbri             Josh Anderson            Justin Kloos             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Derrick Pouliot          Barret Jackman                                    60     1   2  2  
 2 Dylan Demelo             Adam Pardy                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Scott Timmins            Anthony Camara           60     1   2  2  
 2 Mattias Ritola           Robby Fabbri             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derrick Pouliot          Barret Jackman           60     1   2  2  
 2 Dylan Demelo             Adam Pardy               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Scott Timmins                                     60     1   2  2  
 2 Anthony Camara                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derrick Pouliot          Barret Jackman           60     1   2  2  
 2 Dylan Demelo             Adam Pardy               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Scott Timmins            Anthony Camara           60     1   2  2  
 2 Mattias Ritola           Robby Fabbri             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derrick Pouliot          Barret Jackman           60     1   2  2  
 2 Dylan Demelo             Adam Pardy               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Timmins            Anthony Camara           Mattias Ritola           Derrick Pouliot          Barret Jackman           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Timmins            Anthony Camara           Mattias Ritola           Derrick Pouliot          Barret Jackman           

<b>Goaltenders</b>
Starting : Melvin Nyffeler          
Backup : Thomas Greiss            

<b>Extra Forwards</b>
Normal : Justin Feser, James Wright, Nikita Soshnikov - PP : Justin Feser, James Wright - PK : Nikita Soshnikov
<b>Extra Defensemen</b>
Normal : Andre Benoit, Anton Belov, Dylan Demelo - PP : Andre Benoit - PK : Anton Belov, Dylan Demelo
<b>Penalty Shots</b>
Scott Timmins, Anthony Camara, Mattias Ritola, Robby Fabbri, Justin Kloos
<b>Custom OT Lines Forwards</b>
Scott Timmins, Anthony Camara, Mattias Ritola, Robby Fabbri, Justin Kloos, Josh Anderson, Nikita Soshnikov, Milan Hejduk, Oscar Lindberg, Leo Komarov
<b>Custom OT Lines Defensemen</b>
Derrick Pouliot, Barret Jackman, Dylan Demelo, Adam Pardy, Andre Benoit

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_GAT"><a id="GatineauOlympiques">Gatineau Olympiques</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#GatineauOlympiques">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#GatineauOlympiques">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#GatineauOlympiques">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#GatineauOlympiques">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#GatineauOlympiques">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GatineauOlympiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GatineauOlympiques" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kuralt              Michael Mersch           Charles Bertrand         40     1   2  2  
 2 Alexander Barta          Adam Hall                Joel Ward                30     1   2  2  
 3 Nic Dowd                 Andy Andreoff            Laurin Braun             20     1   2  2  
 4 Adam Hall                Charles Bertrand         Joel Ward                10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ales Kranjc              Chris Summers                                     40     1   2  2  
 2 Anssi Salmela            Gregory Beron                                     30     1   2  2  
 3 Matt Donovan             Robert Hagg                                       20     1   2  2  
 4 Chris Summers            Ales Kranjc                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joel Ward                Michael Mersch           Nic Dowd                 60     1   2  2  
 2 Adam Hall                Andy Andreoff            Charles Bertrand         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ales Kranjc              Chris Summers                                     60     1   2  2  
 2 Gregory Beron            Robert Hagg                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Mersch           Andy Andreoff            60     1   2  2  
 2 Joel Ward                Nic Dowd                 40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gregory Beron            Chris Summers            60     1   2  2  
 2 Matt Donovan             Robert Hagg              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Andy Andreoff                                     60     1   2  2  
 2 Michael Mersch                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ales Kranjc              Chris Summers            60     1   2  2  
 2 Anssi Salmela            Robert Hagg              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Mersch           Andy Andreoff            60     1   2  2  
 2 Joel Ward                Nic Dowd                 40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Donovan             Chris Summers            60     1   2  2  
 2 Robert Hagg              Ales Kranjc              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joel Ward                Michael Mersch           Adam Hall                Robert Hagg              Chris Summers            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joel Ward                Michael Mersch           Adam Hall                Robert Hagg              Chris Summers            

<b>Goaltenders</b>
Starting : Christopher Gibson       
Backup : Joonas Korpisalo         

<b>Extra Forwards</b>
Normal : Anze Kuralt, Andy Andreoff, Nic Dowd - PP : Anze Kuralt, Andy Andreoff - PK : Nic Dowd
<b>Extra Defensemen</b>
Normal : Chris Summers, Robert Hagg, Anssi Salmela - PP : Chris Summers - PK : Robert Hagg, Chris Summers
<b>Penalty Shots</b>
Andy Andreoff, Charles Bertrand, Adam Hall, Nic Dowd, Michael Mersch
<b>Custom OT Lines Forwards</b>
Charles Bertrand, Anze Kuralt, Alexander Barta, Gregory Beron, Michael Mersch, Adam Hall, Joel Ward, Andy Andreoff, Nic Dowd, Laurin Braun
<b>Custom OT Lines Defensemen</b>
Anssi Salmela, Chris Summers, Gregory Beron, Matt Donovan, Robert Hagg

<b>Scratches</b>
Zac Dalpe (Lacerated Right Calf Injury)</pre></div>
<h1 class="TeamLineFarm_HOU"><a id="HoustonAeros">Houston Aeros</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#HoustonAeros">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#HoustonAeros">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#HoustonAeros">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#HoustonAeros">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#HoustonAeros">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HoustonAeros');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HoustonAeros" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Cody Almond              Brett Bulmer             Nick Sorensen            40     1   2  2  
 2 Carson McMillan          Sebastian Collberg       Steve Bernier            30     1   2  2  
 3 Chris Mueller            Daniil Zharkov           Adam Burish              20     1   2  2  
 4 Matthias Plachta         Reto Suri                Derek Dorsett            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Redmond             Cody Goloubef                                     40     1   2  2  
 2 Jared Spurgeon           Ryan Sproul                                       30     1   2  2  
 3 Steve Weinstein          Matthias Plachta                                  20     1   2  2  
 4 Zach Redmond             Cody Goloubef                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Cody Almond              Brett Bulmer             Derek Dorsett            60     1   2  2  
 2 Carson McMillan          Sebastian Collberg       Steve Bernier            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Redmond             Cody Goloubef                                     60     1   2  2  
 2 Jared Spurgeon           Steve Weinstein                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Dorsett            Steve Bernier            60     1   2  2  
 2 Adam Burish              Brett Bulmer             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zach Redmond             Cody Goloubef            60     1   2  2  
 2 Jared Spurgeon           Steve Weinstein          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Derek Dorsett                                     60     1   2  2  
 2 Steve Bernier                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zach Redmond             Cody Goloubef            60     1   2  2  
 2 Jared Spurgeon           Steve Weinstein          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Dorsett            Steve Bernier            60     1   2  2  
 2 Adam Burish              Brett Bulmer             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zach Redmond             Cody Goloubef            60     1   2  2  
 2 Jared Spurgeon           Ryan Sproul              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cody Almond              Brett Bulmer             Derek Dorsett            Zach Redmond             Cody Goloubef            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cody Almond              Brett Bulmer             Derek Dorsett            Zach Redmond             Cody Goloubef            

<b>Goaltenders</b>
Starting : Justin Peters            
Backup : Alex Stalock             

<b>Extra Forwards</b>
Normal : Tyler Graovac, Chris Mueller, Daniil Zharkov - PP : Tyler Graovac, Chris Mueller - PK : Daniil Zharkov
<b>Extra Defensemen</b>
Normal : Steve Weinstein, Jared Spurgeon, Cody Goloubef - PP : Steve Weinstein - PK : Jared Spurgeon, Zach Redmond
<b>Penalty Shots</b>
Derek Dorsett, Steve Bernier, Adam Burish, Brett Bulmer, Cody Almond
<b>Custom OT Lines Forwards</b>
Derek Dorsett, Steve Bernier, Adam Burish, Brett Bulmer, Cody Almond, Sebastian Collberg, Carson McMillan, Chris Mueller, Daniil Zharkov, Matthias Plachta
<b>Custom OT Lines Defensemen</b>
Zach Redmond, Cody Goloubef, Jared Spurgeon, Ryan Sproul, Steve Weinstein

<b>Scratches</b>
Cam Barker (Healthy), Jason Gregoire (Healthy)</pre></div>
<h1 class="TeamLineFarm_TRD"><a id="Trois-RivièresDraveurs">Trois-Rivières Draveurs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#Trois-RivièresDraveurs">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#Trois-RivièresDraveurs">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#Trois-RivièresDraveurs">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#Trois-RivièresDraveurs">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#Trois-RivièresDraveurs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Trois-RivièresDraveurs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Trois-RivièresDraveurs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Point            Kenny Agostino           Andreas Athanasiou       33     1   0  4  
 2 Alan Quine               Yanni Gourde             Guillaume Latendresse    27     1   0  4  
 3 Riley Holzapfel          Eric Tangradi            Jackson Houck            25     1   2  2  
 4 Ryan Tesink              Stefan Della Rovere      Philippe Paradis         15     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Frederic St-Denis        Brendon Nash                                      37     1   1  3  
 2 Dean Kukan               Daniel Sorvik                                     33     1   2  2  
 3 Gabriel Beaupré          Joel Chouinard                                    20     1   3  1  
 4 Gabriel Beaupré          Frederic St-Denis                                 10     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Point            Kenny Agostino           Andreas Athanasiou       55     0   0  5  
 2 Alan Quine               Guillaume Latendresse    Jackson Houck            45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Frederic St-Denis        Daniel Sorvik                                     65     1   1  3  
 2 Joel Chouinard           Brendon Nash                                      35     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Riley Holzapfel          Ryan Tesink              55     1   3  1  
 2 Alan Quine               Kenny Agostino           45     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gabriel Beaupré          Brendon Nash             60     1   3  1  
 2 Joel Chouinard           Frederic St-Denis        40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Riley Holzapfel                                   50     1   3  1  
 2 Alan Quine                                        50     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dean Kukan               Brendon Nash             60     1   4  0  
 2 Frederic St-Denis        Gabriel Beaupré          40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brayden Point            Andreas Athanasiou       50     1   0  4  
 2 Alan Quine               Guillaume Latendresse    50     1   0  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Daniel Sorvik            Frederic St-Denis        50     1   2  2  
 2 Dean Kukan               Brendon Nash             50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brayden Point            Guillaume Latendresse    Andreas Athanasiou       Frederic St-Denis        Daniel Sorvik            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Riley Holzapfel          Kenny Agostino           Ryan Tesink              Brendon Nash             Frederic St-Denis        

<b>Goaltenders</b>
Starting : Peter Delmas             
Backup : Jared Coreau             

<b>Extra Forwards</b>
Normal : Andreas Athanasiou, Brayden Point, Guillaume Latendresse - PP : Guillaume Latendresse, Andreas Athanasiou - PK : Riley Holzapfel
<b>Extra Defensemen</b>
Normal : Frederic St-Denis, Brendon Nash, Gabriel Beaupré - PP : Daniel Sorvik - PK : Brendon Nash, Frederic St-Denis
<b>Penalty Shots</b>
Andreas Athanasiou, Guillaume Latendresse, Yanni Gourde, Kenny Agostino, Alan Quine
<b>Custom OT Lines Forwards</b>
Guillaume Latendresse, Kenny Agostino, Andreas Athanasiou, Alan Quine, Brayden Point, Yanni Gourde, Jackson Houck, Riley Holzapfel, Eric Tangradi, Stefan Della Rovere
<b>Custom OT Lines Defensemen</b>
Frederic St-Denis, Brendon Nash, Daniel Sorvik, Gabriel Beaupré, Dean Kukan

<b>Scratches</b>
Mike Fisher (Healthy), Shane Doan (Healthy), Vernon Fiddler (Right Hand Injury), Yannick Weber (Healthy)</pre></div>
<h1 class="TeamLineFarm_MIL"><a id="MilwaukeeAdmirals">Milwaukee Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#MilwaukeeAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#MilwaukeeAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#MilwaukeeAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#MilwaukeeAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#MilwaukeeAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MilwaukeeAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MilwaukeeAdmirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Peter Trainor            Taylor Beck              Mark Arcobello           40     1   0  4  
 2 Vince Hinostroza         Vladimir Tkachev         Vladimir Zharkov         30     1   0  4  
 3 Miikka Salomäki          Brett Pollock            Dan Sexton               20     1   1  3  
 4 Michael Latta            Mitch Moroz              Marc-Olivier Roy         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Joshua Jacobs            Anthony Bitetto                                   35     1   2  2  
 2 Jeff Schultz             Stuart Percy                                      35     1   2  2  
 3 Dmitry Korobov           Markus Lauridsen                                  20     1   2  2  
 4 Dmitry Korobov           Anthony Bitetto                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Peter Trainor            Taylor Beck              Mark Arcobello           60     1   0  4  
 2 Vince Hinostroza         Vladimir Tkachev         Vladimir Zharkov         40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Joshua Jacobs            Stuart Percy                                      60     1   1  3  
 2 Dmitry Korobov           Anthony Bitetto                                   40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Miikka Salomäki          Dan Sexton               60     1   4  0  
 2 Brett Pollock            Marc-Olivier Roy         40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Schultz             Markus Lauridsen         60     1   4  0  
 2 Dmitry Korobov           Anthony Bitetto          40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Miikka Salomäki                                   60     1   4  0  
 2 Brett Pollock                                     40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Schultz             Markus Lauridsen         60     1   4  0  
 2 Dmitry Korobov           Anthony Bitetto          40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Peter Trainor            Taylor Beck              50     1   0  4  
 2 Vince Hinostroza         Vladimir Zharkov         50     1   0  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joshua Jacobs            Anthony Bitetto          50     1   1  3  
 2 Jeff Schultz             Stuart Percy             50     1   1  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Peter Trainor            Taylor Beck              Vladimir Zharkov         Joshua Jacobs            Anthony Bitetto          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Miikka Salomäki          Brett Pollock            Dan Sexton               Jeff Schultz             Markus Lauridsen         

<b>Goaltenders</b>
Starting : Chet Pickard             
Backup : Louis Domingue           

<b>Extra Forwards</b>
Normal : Peter Trainor, Vladimir Tkachev, Taylor Beck - PP : Mark Arcobello, Brett Pollock - PK : Peter Trainor
<b>Extra Defensemen</b>
Normal : Anthony Bitetto, Dmitry Korobov, Jeff Schultz - PP : Markus Lauridsen - PK : Joshua Jacobs, Stuart Percy
<b>Penalty Shots</b>
Peter Trainor, Vladimir Tkachev, Vladimir Zharkov, Mark Arcobello, Vince Hinostroza
<b>Custom OT Lines Forwards</b>
Peter Trainor, Vladimir Zharkov, Vince Hinostroza, Vladimir Tkachev, Mark Arcobello, Taylor Beck, Brett Pollock, Michael Latta, Marc-Olivier Roy, Miikka Salomäki
<b>Custom OT Lines Defensemen</b>
Anthony Bitetto, Joshua Jacobs, Jeff Schultz, Stuart Percy, Dmitry Korobov

<b>Scratches</b>
Matt Beleskey (Healthy), Zach Budish (Healthy)</pre></div>
<h1 class="TeamLineFarm_ALB"><a id="AlbanyDevils">Albany Devils</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#AlbanyDevils">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#AlbanyDevils">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#AlbanyDevils">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#AlbanyDevils">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#AlbanyDevils">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AlbanyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AlbanyDevils" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Bournival        Jayson Megna             Kirill Petrov            40     1   2  2  
 2 Peter Holland            Dwight King              Keven Veilleux           30     1   2  2  
 3 Henrik Samuelsson        Nick Schmaltz            Jimmy Hayes              20     1   2  2  
 4 Matt Leitner             Lucas Lessio             Alexander Avtsin         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jonas Brodin             Madison Bowey                                     40     1   2  2  
 2 Christopher Tanev        Oliver Lauridsen                                  30     1   2  2  
 3 Brian Campbell           Adam Polasek                                      20     1   2  2  
 4 Andreas Lilja            Jonas Brodin                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Bournival        Jayson Megna             Kirill Petrov            60     1   2  2  
 2 Peter Holland            Dwight King              Keven Veilleux           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jonas Brodin             Madison Bowey                                     60     1   2  2  
 2 Christopher Tanev        Oliver Lauridsen                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Bournival        Kirill Petrov            60     1   2  2  
 2 Peter Holland            Henrik Samuelsson        40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jonas Brodin             Madison Bowey            60     1   2  2  
 2 Christopher Tanev        Oliver Lauridsen         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael Bournival                                 60     1   2  2  
 2 Kirill Petrov                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jonas Brodin             Madison Bowey            60     1   2  2  
 2 Christopher Tanev        Oliver Lauridsen         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Bournival        Kirill Petrov            60     1   2  2  
 2 Peter Holland            Henrik Samuelsson        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jonas Brodin             Madison Bowey            60     1   2  2  
 2 Christopher Tanev        Oliver Lauridsen         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Bournival        Jayson Megna             Kirill Petrov            Jonas Brodin             Madison Bowey            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Bournival        Jayson Megna             Kirill Petrov            Jonas Brodin             Madison Bowey            

<b>Goaltenders</b>
Starting : Ilya Samsonov            
Backup : Scott Wedgewood          

<b>Extra Forwards</b>
Normal : Lukas Sutter, Jimmy Hayes, Alexander Avtsin - PP : Lukas Sutter, Jimmy Hayes - PK : Alexander Avtsin
<b>Extra Defensemen</b>
Normal : Brian Campbell, Adam Polasek, Andreas Lilja - PP : Brian Campbell - PK : Adam Polasek, Andreas Lilja
<b>Penalty Shots</b>
Michael Bournival, Kirill Petrov, Peter Holland, Henrik Samuelsson, Jayson Megna
<b>Custom OT Lines Forwards</b>
Michael Bournival, Kirill Petrov, Peter Holland, Henrik Samuelsson, Jayson Megna, Dwight King, Keven Veilleux, Jimmy Hayes, Alexander Avtsin, Nick Schmaltz
<b>Custom OT Lines Defensemen</b>
Jonas Brodin, Madison Bowey, Christopher Tanev, Oliver Lauridsen, Brian Campbell

<b>Scratches</b>
Anders Nilsson (Healthy)</pre></div>
<h1 class="TeamLineFarm_BRI"><a id="BridgeportSoundTigers">Bridgeport Sound Tigers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#BridgeportSoundTigers">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#BridgeportSoundTigers">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#BridgeportSoundTigers">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#BridgeportSoundTigers">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#BridgeportSoundTigers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BridgeportSoundTigers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BridgeportSoundTigers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Roman Horak              Jared McCann             Mitch Holmberg           40     0   1  4  
 2 Johan Sundstrom          Maxim Mayorov            Nikita Scherbak          30     0   2  3  
 3 Dane Fox                 Ryan Haggerty            Michal Repik             20     0   2  3  
 4 Jonathan Dahlen          Sergey Tolchinsky        Maxim Mayorov            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Eric Brewer              Doug Murray                                       40     1   2  2  
 2 Scott Mayfield           Trevor Murphy                                     30     1   2  2  
 3 Alexandre Carrier        Gavin Bayreuther                                  20     1   2  2  
 4 Trevor Murphy            Eric Brewer                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michal Repik             Maxim Mayorov            Nikita Scherbak          60     1   2  2  
 2 Johan Sundstrom          Jared McCann             Mitch Holmberg           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Eric Brewer              Gavin Bayreuther                                  60     1   2  2  
 2 Alexandre Carrier        Trevor Murphy                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Maxim Mayorov            Michal Repik             60     1   2  2  
 2 Johan Sundstrom          Mitch Holmberg           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexandre Carrier        Eric Brewer              60     1   2  2  
 2 Gavin Bayreuther         Trevor Murphy            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mitch Holmberg                                    60     1   2  2  
 2 Michal Repik                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Eric Brewer              Alexandre Carrier        60     1   2  2  
 2 Gavin Bayreuther         Trevor Murphy            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Maxim Mayorov            Michal Repik             60     1   2  2  
 2 Johan Sundstrom          Mitch Holmberg           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gavin Bayreuther         Eric Brewer              60     1   2  2  
 2 Alexandre Carrier        Trevor Murphy            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mitch Holmberg           Maxim Mayorov            Michal Repik             Eric Brewer              Doug Murray              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mitch Holmberg           Maxim Mayorov            Michal Repik             Eric Brewer              Doug Murray              

<b>Goaltenders</b>
Starting : Peter Budaj              
Backup : Justin Pogge             

<b>Extra Forwards</b>
Normal : Jonathan Dahlen, Nikita Scherbak, Maxim Mayorov - PP : Jonathan Dahlen, Nikita Scherbak - PK : Mitch Holmberg
<b>Extra Defensemen</b>
Normal : Alexandre Carrier, Gavin Bayreuther, Eric Brewer - PP : Alexandre Carrier - PK : Gavin Bayreuther, Eric Brewer
<b>Penalty Shots</b>
Nikita Scherbak, Michal Repik, Johan Sundstrom, Mitch Holmberg, Maxim Mayorov
<b>Custom OT Lines Forwards</b>
Jonathan Dahlen, Michal Repik, Johan Sundstrom, Mitch Holmberg, Maxim Mayorov, Jared McCann, Nikita Scherbak, Roman Horak, Ryan Haggerty, Dane Fox
<b>Custom OT Lines Defensemen</b>
Gavin Bayreuther, Eric Brewer, Doug Murray, Trevor Murphy, Alexandre Carrier

<b>Scratches</b>
Michael Del Zotto (Healthy), Antoine Marcoux (Healthy), Andreas Martinsen (Healthy)</pre></div>
<h1 class="TeamLineFarm_CTW"><a id="ConnecticutWhale">Connecticut Whale</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#ConnecticutWhale">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#ConnecticutWhale">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#ConnecticutWhale">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#ConnecticutWhale">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#ConnecticutWhale">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ConnecticutWhale');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ConnecticutWhale" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Denis Malgin             James Sheppard           Joonas Donskoi           40     1   2  2  
 2 Carter Verhaeghe         Tyler Bertuzzi           Denis Guryanov           30     1   2  2  
 3 J.T. Compher             Brian Flynn              Simon Hjalmarsson        20     1   2  2  
 4 James Sheppard           Damir Zhafyarov          Jakub Vrana              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake McCabe              Brandon Carlo                                     40     1   2  2  
 2 Shea Theodore            Griffin Reinhart                                  30     1   2  2  
 3 Chris Bigras             Josh Morrissey                                    20     1   2  2  
 4 Jake McCabe              Brandon Carlo                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Denis Malgin             J.T. Compher             Joonas Donskoi           60     1   2  2  
 2 Carter Verhaeghe         Tyler Bertuzzi           Denis Guryanov           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake McCabe              Brandon Carlo                                     60     1   2  2  
 2 Shea Theodore            Griffin Reinhart                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Carter Verhaeghe         Joonas Donskoi           60     1   2  2  
 2 Denis Malgin             Denis Guryanov           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake McCabe              Brandon Carlo            60     1   2  2  
 2 Shea Theodore            Griffin Reinhart         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 J.T. Compher                                      60     1   2  2  
 2 Denis Malgin                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake McCabe              Brandon Carlo            60     1   2  2  
 2 Shea Theodore            Griffin Reinhart         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Denis Malgin             Jakub Vrana              60     1   2  2  
 2 Joonas Donskoi           Denis Guryanov           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake McCabe              Brandon Carlo            60     1   2  2  
 2 Shea Theodore            Griffin Reinhart         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Denis Malgin             Denis Guryanov           Joonas Donskoi           Jake McCabe              Brandon Carlo            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Denis Malgin             Denis Guryanov           Joonas Donskoi           Griffin Reinhart         Brandon Carlo            

<b>Goaltenders</b>
Starting : Anthony Stolarz          
Backup : Felix Sandström          

<b>Extra Forwards</b>
Normal : J.T. Compher, Simon Hjalmarsson, Jakub Vrana - PP : J.T. Compher, Simon Hjalmarsson - PK : Jakub Vrana
<b>Extra Defensemen</b>
Normal : Chris Bigras, Josh Morrissey, Shea Theodore - PP : Chris Bigras - PK : Josh Morrissey, Shea Theodore
<b>Penalty Shots</b>
Denis Malgin, Brian Flynn, Joonas Donskoi, Denis Guryanov, Carter Verhaeghe
<b>Custom OT Lines Forwards</b>
James Sheppard, Brian Flynn, Joonas Donskoi, Denis Guryanov, Carter Verhaeghe, J.T. Compher, Denis Malgin, Simon Hjalmarsson, Jakub Vrana, Tyler Bertuzzi
<b>Custom OT Lines Defensemen</b>
Jake McCabe, Brandon Carlo, Shea Theodore, Griffin Reinhart, Chris Bigras

<b>Scratches</b>
Kevan Miller (Healthy), Michael Raffl (Bruised Right Arm Injury), Fyodor Malykhin (Healthy)</pre></div>
<h1 class="TeamLineFarm_BNG"><a id="BinghamtonSenators">Binghamton Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#BinghamtonSenators">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#BinghamtonSenators">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#BinghamtonSenators">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#BinghamtonSenators">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#BinghamtonSenators">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BinghamtonSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BinghamtonSenators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tomas Jurco              Stefan Matteau           Stefan Noesen            40     1   2  2  
 2 Jay McClement            Shane Prince             Max McCormick            30     1   2  2  
 3 Nick Shore               Matt Puempel             Jordan Nolan             20     1   2  2  
 4 William Karlsson         Tomas Jurco              Nick Shore               10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Backman          Danny Syvret                                      40     1   2  2  
 2 Matt Lashoff             Rob O'Gara                                        30     1   2  2  
 3 Chris Phillips           William Karlsson                                  20     1   2  2  
 4 Danny Syvret             Mattias Backman                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Shore               Stefan Matteau           Stefan Noesen            60     1   2  2  
 2 Jay McClement            Shane Prince             Max McCormick            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mattias Backman          Danny Syvret                                      60     1   2  2  
 2 Matt Lashoff             Rob O'Gara                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Shore               Stefan Noesen            60     1   2  2  
 2 Stefan Matteau           Jay McClement            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Danny Syvret             Mattias Backman          60     1   2  2  
 2 Matt Lashoff             Rob O'Gara               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jay McClement                                     60     1   2  2  
 2 Stefan Noesen                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Danny Syvret             Mattias Backman          60     1   2  2  
 2 Matt Lashoff             Rob O'Gara               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Shore               Stefan Noesen            60     1   2  2  
 2 Tomas Jurco              Jay McClement            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mattias Backman          Danny Syvret             60     1   2  2  
 2 Matt Lashoff             Rob O'Gara               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jay McClement            Stefan Matteau           Stefan Noesen            Mattias Backman          Danny Syvret             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jay McClement            Stefan Matteau           Stefan Noesen            Mattias Backman          Danny Syvret             

<b>Goaltenders</b>
Starting : Alex Auld                
Backup : Igor Bobkov              
Third : Yann Danis               

<b>Extra Forwards</b>
Normal : Charles Hudon, Max McCormick, Nick Shore - PP : Charles Hudon, Max McCormick - PK : Nick Shore
<b>Extra Defensemen</b>
Normal : Mattias Backman, Matt Lashoff, Rob O'Gara - PP : Mattias Backman - PK : Matt Lashoff, Rob O'Gara
<b>Penalty Shots</b>
William Karlsson, Stefan Noesen, Shane Prince, Jay McClement, Nick Shore
<b>Custom OT Lines Forwards</b>
Stefan Matteau, Stefan Noesen, Jay McClement, Nick Shore, William Karlsson, Shane Prince, Jordan Nolan, Tomas Jurco, Matt Puempel, Max McCormick
<b>Custom OT Lines Defensemen</b>
Mattias Backman, Chris Phillips, Danny Syvret, Matt Lashoff, Chris Wideman

<b>Scratches</b>
Andrew Nielsen (Healthy), Sami Lepisto (Healthy), Jonas Hiller (Healthy)</pre></div>
<h1 class="TeamLineFarm_ADK"><a id="AdirondackPhantoms">Adirondack Phantoms</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#AdirondackPhantoms">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#AdirondackPhantoms">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#AdirondackPhantoms">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#AdirondackPhantoms">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#AdirondackPhantoms">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AdirondackPhantoms');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AdirondackPhantoms" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Austin Czarnik           Ahti Oksanen             Brendan Ranford          40     0   1  4  
 2 Kevin Stenlund           Joakim Nordstrom         Patrick Bjorkstrand      30     0   2  3  
 3 Fredrik Karlstrom        Chad LaRose              Michael Parks            20     0   2  3  
 4 Mike Winther             Patrick O'Sullivan       Derek Mathers            10     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Stanton             Haydn Fleury                                      40     0   2  3  
 2 Maxim Noreau             Daniel Brickley                                   30     0   3  2  
 3 Tyler Lewington          Mark Fistric                                      20     0   3  2  
 4 Maxim Noreau             Ryan Stanton                                      10     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Austin Czarnik           Ahti Oksanen             Brendan Ranford          60     0   1  4  
 2 Kevin Stenlund           Joakim Nordstrom         Patrick Bjorkstrand      40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Stanton             Haydn Fleury                                      60     0   1  4  
 2 Maxim Noreau             Daniel Brickley                                   40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrick Bjorkstrand      Ahti Oksanen             60     0   4  1  
 2 Joakim Nordstrom         Derek Mathers            40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Maxim Noreau             Ryan Stanton             60     0   5  0  
 2 Daniel Brickley          Haydn Fleury             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joakim Nordstrom                                  60     0   5  0  
 2 Patrick Bjorkstrand                               40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Maxim Noreau             Ryan Stanton             60     0   5  0  
 2 Mark Fistric             Haydn Fleury             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrick Bjorkstrand      Brendan Ranford          60     0   2  3  
 2 Austin Czarnik           Joakim Nordstrom         40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Haydn Fleury             Ryan Stanton             60     0   3  2  
 2 Maxim Noreau             Tyler Lewington          40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrick Bjorkstrand      Austin Czarnik           Brendan Ranford          Ryan Stanton             Haydn Fleury             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrick Bjorkstrand      Ahti Oksanen             Joakim Nordstrom         Maxim Noreau             Haydn Fleury             

<b>Goaltenders</b>
Starting : Filip Gustavsson         
Backup : Mathieu Garon            

<b>Extra Forwards</b>
Normal : Brendan Ranford, Patrick Bjorkstrand, Joakim Nordstrom - PP : Brendan Ranford, Austin Czarnik - PK : Joakim Nordstrom
<b>Extra Defensemen</b>
Normal : Maxim Noreau, Ryan Stanton, Haydn Fleury - PP : Ryan Stanton - PK : Haydn Fleury, Maxim Noreau
<b>Penalty Shots</b>
Brendan Ranford, Patrick Bjorkstrand, Joakim Nordstrom, Austin Czarnik, Ahti Oksanen
<b>Custom OT Lines Forwards</b>
Chad LaRose, Brendan Ranford, Ahti Oksanen, Joakim Nordstrom, Patrick Bjorkstrand, Michael Parks, Derek Mathers, Austin Czarnik, Patrick O'Sullivan, Mike Winther
<b>Custom OT Lines Defensemen</b>
Haydn Fleury, Mark Fistric, Maxim Noreau, Ahti Oksanen, Ryan Stanton

<b>Scratches</b>
Blair Betts (Healthy), Oskars Bartulis (Healthy), Ty Wishart (Healthy)</pre></div>
<h1 class="TeamLineFarm_WBS"><a id="Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#Wilkes-Barre/ScrantonPenguins">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#Wilkes-Barre/ScrantonPenguins">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#Wilkes-Barre/ScrantonPenguins">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#Wilkes-Barre/ScrantonPenguins">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#Wilkes-Barre/ScrantonPenguins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wilkes-Barre/ScrantonPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wilkes-Barre/ScrantonPenguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tom Wandell              Eric Wellwood            Radim Vrbata             40     1   2  2  
 2 Artyom Demkov            Simon Gagne              Stephen Gionta           30     1   2  2  
 3 Max Sauve                Nick Petersen            Stefan Legein            20     1   2  2  
 4 Garrett Meurs            Max Sauve                Radim Vrbata             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Arturs Kulda             Mark Cundari                                      40     1   2  2  
 2 Alex Velischek           Chris Lee                                         30     1   2  2  
 3 Chad Billins             Alexei Bereglazov                                 20     1   2  2  
 4 Arturs Kulda             Alexei Bereglazov                                 10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tom Wandell              Eric Wellwood            Radim Vrbata             60     1   2  2  
 2 Artyom Demkov            Simon Gagne              Stephen Gionta           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Arturs Kulda             Mark Cundari                                      60     1   2  2  
 2 Alex Velischek           Chris Lee                                         40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Radim Vrbata             Eric Wellwood            60     1   2  2  
 2 Simon Gagne              Stephen Gionta           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Arturs Kulda             Mark Cundari             60     1   2  2  
 2 Alex Velischek           Alexei Bereglazov        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Radim Vrbata                                      60     1   2  2  
 2 Eric Wellwood                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Arturs Kulda             Mark Cundari             60     1   2  2  
 2 Alex Velischek           Alexei Bereglazov        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Radim Vrbata             Eric Wellwood            60     1   2  2  
 2 Simon Gagne              Stephen Gionta           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Arturs Kulda             Mark Cundari             60     1   2  2  
 2 Alex Velischek           Chris Lee                40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tom Wandell              Eric Wellwood            Radim Vrbata             Arturs Kulda             Mark Cundari             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Eric Wellwood            Simon Gagne              Radim Vrbata             Arturs Kulda             Mark Cundari             

<b>Goaltenders</b>
Starting : Alexander Pechursky      
Backup : Patrick Killeen          

<b>Extra Forwards</b>
Normal : Stefan Legein, Nick Jones, Max Sauve - PP : Stefan Legein, Nick Jones - PK : Tom Wandell
<b>Extra Defensemen</b>
Normal : Alexei Bereglazov, Chad Billins, Andrei Filichkin - PP : Alexei Bereglazov - PK : Chad Billins, Andrei Filichkin
<b>Penalty Shots</b>
Radim Vrbata, Eric Wellwood, Simon Gagne, Stephen Gionta, Stefan Legein
<b>Custom OT Lines Forwards</b>
Radim Vrbata, Eric Wellwood, Simon Gagne, Stephen Gionta, Stefan Legein, Artyom Demkov, Nick Petersen, Nick Jones, Tom Wandell, Bracken Kearns
<b>Custom OT Lines Defensemen</b>
Arturs Kulda, Mark Cundari, Alex Velischek, Chris Lee, Chad Billins

<b>Scratches</b>
Matt Cullen (Healthy), Mike Lundin (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="ChicoutimiSaguenéens">Chicoutimi Saguenéens</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#ChicoutimiSaguenéens">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#ChicoutimiSaguenéens">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#ChicoutimiSaguenéens">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#ChicoutimiSaguenéens">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#ChicoutimiSaguenéens">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicoutimiSaguenéens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicoutimiSaguenéens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Gilbert Brule            Jack Skille              Philip Lane              40     1   2  2  
 2 Matthew Peca             Jack Nevins              Gabriel Gagné            30     1   2  2  
 3 Joey Hishon              Christopher Clapperton   Justin Bailey            20     1   2  2  
 4 Yan-Pavel Laplante       Jack Skille              Zach Aston-Reese         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Connor Murphy            Brandon Manning                                   40     1   2  2  
 2 Philip Samuelsson        Nick Ebert                                        30     1   2  2  
 3 Brett Lernout            Dillon Fournier                                   20     1   2  2  
 4 Brett Kulak              Mikael Wikstrand                                  10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Gilbert Brule            Jack Skille              Philip Lane              60     1   2  2  
 2 Matthew Peca             Jack Nevins              Gabriel Gagné            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Connor Murphy            Brandon Manning                                   60     1   2  2  
 2 Philip Samuelsson        Nick Ebert                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Skille              Gilbert Brule            60     1   2  2  
 2 Philip Lane              Matthew Peca             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Connor Murphy            Brandon Manning          60     1   2  2  
 2 Philip Samuelsson        Nick Ebert               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jack Skille                                       60     1   2  2  
 2 Gilbert Brule                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Connor Murphy            Brandon Manning          60     1   2  2  
 2 Philip Samuelsson        Nick Ebert               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Skille              Gilbert Brule            60     1   2  2  
 2 Philip Lane              Matthew Peca             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Connor Murphy            Brandon Manning          60     1   2  2  
 2 Philip Samuelsson        Nick Ebert               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Gilbert Brule            Jack Skille              Philip Lane              Connor Murphy            Brandon Manning          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Gilbert Brule            Jack Skille              Philip Lane              Connor Murphy            Brandon Manning          

<b>Goaltenders</b>
Starting : Karri Ramo               
Backup : Reto Berra               
Third : Tyson Sexsmith           

<b>Extra Forwards</b>
Normal : Connor Crisp, Joey Hishon, Justin Bailey - PP : Connor Crisp, Joey Hishon - PK : Justin Bailey
<b>Extra Defensemen</b>
Normal : Brett Lernout, Dillon Fournier, Brett Kulak - PP : Brett Lernout - PK : Dillon Fournier, Brett Kulak
<b>Penalty Shots</b>
Jack Skille, Gilbert Brule, Philip Lane, Matthew Peca, Joey Hishon
<b>Custom OT Lines Forwards</b>
Jack Skille, Gilbert Brule, Philip Lane, Matthew Peca, Joey Hishon, Gabriel Gagné, Jack Nevins, Justin Bailey, Christopher Clapperton, Yan-Pavel Laplante
<b>Custom OT Lines Defensemen</b>
Connor Murphy, Brandon Manning, Philip Samuelsson, Nick Ebert, Brett Lernout

<b>Scratches</b>
Raphael Diaz (Healthy), Olivier Roy (Healthy)</pre></div>
<h1 class="TeamLineFarm_RNO"><a id="Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#Rouyn-NorandaHuskies">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#Rouyn-NorandaHuskies">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#Rouyn-NorandaHuskies">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#Rouyn-NorandaHuskies">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#Rouyn-NorandaHuskies">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rouyn-NorandaHuskies');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rouyn-NorandaHuskies" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Freddie Hamilton         Sven Andrighetto         Myles Bell               40     1   2  2  
 2 Maxime St-Cyr            Nicolas Deslauriers      Antoine Waked            30     1   2  2  
 3 Francis Perron           A.J. Greer               Martins Dzierkals        20     1   2  2  
 4 Liam O'Brien             Martins Dzierkals        Freddie Hamilton         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Julian Melchiori         Andrew O'Brien                                    40     1   2  2  
 2 Frank Corrado            Joey Laleggia                                     30     1   2  2  
 3 Sébastien Piché          Mathieu Brisebois                                 20     1   2  2  
 4 Bruno-Carl Denis         Julian Melchiori                                  10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Freddie Hamilton         Sven Andrighetto         Myles Bell               60     1   2  2  
 2 Maxime St-Cyr            Nicolas Deslauriers      Antoine Waked            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Julian Melchiori         Andrew O'Brien                                    60     1   2  2  
 2 Frank Corrado            Joey Laleggia                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Freddie Hamilton         Sven Andrighetto         60     1   2  2  
 2 Myles Bell               Nicolas Deslauriers      40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Julian Melchiori         Andrew O'Brien           60     1   2  2  
 2 Frank Corrado            Joey Laleggia            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Freddie Hamilton                                  60     1   2  2  
 2 Sven Andrighetto                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Julian Melchiori         Andrew O'Brien           60     1   2  2  
 2 Frank Corrado            Joey Laleggia            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Freddie Hamilton         Sven Andrighetto         60     1   2  2  
 2 Myles Bell               Nicolas Deslauriers      40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Julian Melchiori         Andrew O'Brien           60     1   2  2  
 2 Frank Corrado            Joey Laleggia            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Freddie Hamilton         Sven Andrighetto         Myles Bell               Julian Melchiori         Andrew O'Brien           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Freddie Hamilton         Sven Andrighetto         Myles Bell               Julian Melchiori         Andrew O'Brien           

<b>Goaltenders</b>
Starting : Chase Marchand           
Backup : Alex Nedeljkovic         

<b>Extra Forwards</b>
Normal : Julien Nantel, Jean-Sébastien Dea, A.J. Greer - PP : Julien Nantel, Jean-Sébastien Dea - PK : A.J. Greer
<b>Extra Defensemen</b>
Normal : Sébastien Piché, Mathieu Brisebois, Bruno-Carl Denis - PP : Sébastien Piché - PK : Mathieu Brisebois, Bruno-Carl Denis
<b>Penalty Shots</b>
Freddie Hamilton, Sven Andrighetto, Myles Bell, Nicolas Deslauriers, A.J. Greer
<b>Custom OT Lines Forwards</b>
Freddie Hamilton, Sven Andrighetto, Myles Bell, Nicolas Deslauriers, A.J. Greer, Maxime St-Cyr, Martins Dzierkals, Francis Perron, Julien Nantel, Liam O'Brien
<b>Custom OT Lines Defensemen</b>
Julian Melchiori, Andrew O'Brien, Frank Corrado, Joey Laleggia, Myles Bell

<b>Scratches</b>
Mike Weber (Healthy), Taylor Doherty (Healthy), Viktor Tikhonov (Healthy)</pre></div>
<h1 class="TeamLineFarm_CLE"><a id="ClevelandKnights">Cleveland Knights</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Saints Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#SeattleSaints">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#ClevelandKnights">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#ClevelandKnights">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#ClevelandKnights">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#ClevelandKnights">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#ClevelandKnights">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ClevelandKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ClevelandKnights" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Johan Larsson            Matt Moulson             Benoit Pouliot           32     0   1  4  
 2 Michael Sgarbossa        Martin Reway             Martin Frk               32     0   1  4  
 3 Maxwell Reinhart         Bryan Rust               Louick Marcotte          31     0   1  4  
 4 Marcel Noebels           Simon Moser              Jason Akeson             5      0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Eric Gryba               Raman Hrabarenka                                  40     0   3  2  
 2 Mac Bennett              John Oduya                                        30     0   3  2  
 3 Jesper Jensen            Jordan Schneider                                  20     0   3  2  
 4 Jordan Schneider         Raman Hrabarenka                                  10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Johan Larsson            Marcel Noebels           Benoit Pouliot           60     0   0  5  
 2 Michael Sgarbossa        Martin Reway             Martin Frk               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jordan Schneider         John Oduya                                        60     0   0  5  
 2 Eric Gryba               Raman Hrabarenka                                  40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Sgarbossa        Bryan Rust               60     0   5  0  
 2 Marcel Noebels           Maxwell Reinhart         40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Raman Hrabarenka         John Oduya               60     0   5  0  
 2 Eric Gryba               Mac Bennett              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Marcel Noebels                                    60     0   5  0  
 2 Michael Sgarbossa                                 40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Raman Hrabarenka         John Oduya               60     0   5  0  
 2 Eric Gryba               Mac Bennett              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Johan Larsson            Marcel Noebels           60     0   1  4  
 2 Benoit Pouliot           Michael Sgarbossa        40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mac Bennett              John Oduya               60     0   3  2  
 2 Eric Gryba               Raman Hrabarenka         40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Johan Larsson            Matt Moulson             Benoit Pouliot           Jordan Schneider         John Oduya               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Johan Larsson            Matt Moulson             Benoit Pouliot           Eric Gryba               John Oduya               

<b>Goaltenders</b>
Starting : John Gibson              
Backup : Mike Condon              

<b>Extra Forwards</b>
Normal : Louick Marcotte, Jason Akeson, Marcel Noebels - PP : Louick Marcotte, Jason Akeson - PK : Marcel Noebels
<b>Extra Defensemen</b>
Normal : Jesper Jensen, Mac Bennett, Jordan Schneider - PP : Jesper Jensen - PK : Mac Bennett, Jordan Schneider
<b>Penalty Shots</b>
Johan Larsson, Matt Moulson, Benoit Pouliot, Michael Sgarbossa, Maxwell Reinhart
<b>Custom OT Lines Forwards</b>
Johan Larsson, Matt Moulson, Benoit Pouliot, Michael Sgarbossa, Maxwell Reinhart, Martin Frk, Marcel Noebels, Martin Reway, Bryan Rust, Louick Marcotte
<b>Custom OT Lines Defensemen</b>
Raman Hrabarenka, John Oduya, Eric Gryba, Mac Bennett, Jesper Jensen

<b>Scratches</b>
Alexander Bonsaksen (Healthy), Sondre Olden (Healthy), Connor Hurley (Healthy)</pre></div>
<h1 class="TeamLineFarm_PEO"><a id="PeoriaRivermen">Peoria Rivermen</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#PeoriaRivermen">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#PeoriaRivermen">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#PeoriaRivermen">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#PeoriaRivermen">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#PeoriaRivermen">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PeoriaRivermen');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PeoriaRivermen" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nik Antropov             Jake Guentzel            Jordan Szwarz            40     1   2  2  
 2 Daniel Brière            Antti Pihlstrom          Tyler Shattock           30     1   2  2  
 3 Craig Adams              Anthony Nigro            Sebastian Wannstrom      20     1   2  2  
 4 Tyler Shattock           Daniel Carcillo          Craig Adams              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Xavier Ouellet           Alex Grant                                        40     1   2  2  
 2 Teemu Eronen             Matthew Corrente                                  30     1   2  2  
 3 Mathieu Carle            Joel Edmundson                                    20     1   2  2  
 4 Bobby Sanguinetti        Jake Chelios                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nik Antropov             Jake Guentzel            Jordan Szwarz            60     1   0  4  
 2 Daniel Brière            Antti Pihlstrom          Tyler Shattock           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Xavier Ouellet           Mathieu Carle                                     60     1   0  4  
 2 Teemu Eronen             Bobby Sanguinetti                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Craig Adams              Tyler Shattock           60     1   2  2  
 2 Daniel Brière            Andrea Kristler          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Xavier Ouellet           Matthew Corrente         60     1   2  2  
 2 Teemu Eronen             Joel Edmundson           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Craig Adams                                       60     1   2  2  
 2 Andrea Kristler                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Xavier Ouellet           Matthew Corrente         60     1   2  2  
 2 Teemu Eronen             Joel Edmundson           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Craig Adams              Daniel Brière            60     1   2  2  
 2 Tyler Shattock           Jordan Szwarz            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Xavier Ouellet           Matthew Corrente         60     1   2  2  
 2 Teemu Eronen             Mathieu Carle            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jake Guentzel            Daniel Brière            Jordan Szwarz            Xavier Ouellet           Mathieu Carle            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Craig Adams              Daniel Brière            Tyler Shattock           Xavier Ouellet           Matthew Corrente         

<b>Goaltenders</b>
Starting : Sami Aittokallio         
Backup : Leland Irving            

<b>Extra Forwards</b>
Normal : Jordan Szwarz, Jake Guentzel, Anthony Nigro - PP : Andrea Kristler, Sebastian Wannstrom - PK : Anthony Nigro
<b>Extra Defensemen</b>
Normal : Joel Edmundson, Alex Grant, Bobby Sanguinetti - PP : Joel Edmundson - PK : Alex Grant, Bobby Sanguinetti
<b>Penalty Shots</b>
Craig Adams, Daniel Brière, Tyler Shattock, Jordan Szwarz, Jake Guentzel
<b>Custom OT Lines Forwards</b>
Craig Adams, Daniel Brière, Tyler Shattock, Jordan Szwarz, Jake Chelios, Antti Pihlstrom, Jake Guentzel, Anthony Nigro, Andrea Kristler, Sebastian Wannstrom
<b>Custom OT Lines Defensemen</b>
Xavier Ouellet, Matthew Corrente, Teemu Eronen, Mathieu Carle, Joel Edmundson

<b>Scratches</b>
Jamie McGinn (Healthy), Niklas Grossman (Healthy), Yohann Auvitu  (Healthy)</pre></div>
<h1 class="TeamLineFarm_NOR"><a id="NorfolkAdmirals">Norfolk Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#NorfolkAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#NorfolkAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#NorfolkAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#NorfolkAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#NorfolkAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NorfolkAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NorfolkAdmirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Max Friberg              Brett Connolly           Martin Erat              40     1   2  2  
 2 Vladislav Namestnikov    Daniel Carr              Reid Boucher             30     1   2  2  
 3 Nick Cousins             Jiri Sekac               Scott Kosmachuk          20     1   2  2  
 4 Alexandre Picard         Dustin Penner            Daniel Carr              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Radko Gudas              Bruno Gervais                                     40     1   2  2  
 2 Brenden Dillon           Nikita Nesterov                                   30     1   2  2  
 3 Adam Janosik             Dustin Penner                                     20     1   2  2  
 4 Bruno Gervais            Brenden Dillon                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Scott Kosmachuk          Brett Connolly           Martin Erat              60     1   2  2  
 2 Vladislav Namestnikov    Jiri Sekac               Reid Boucher             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nikita Nesterov          Bruno Gervais                                     60     1   2  2  
 2 Brenden Dillon           Adam Janosik                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jiri Sekac               Brett Connolly           60     1   2  2  
 2 Vladislav Namestnikov    Martin Erat              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Radko Gudas              Bruno Gervais            60     1   2  2  
 2 Brenden Dillon           Adam Janosik             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Martin Erat                                       60     1   2  2  
 2 Brett Connolly                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Bruno Gervais            Nikita Nesterov          60     1   2  2  
 2 Brenden Dillon           Adam Janosik             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Vladislav Namestnikov    Brett Connolly           60     1   2  2  
 2 Scott Kosmachuk          Martin Erat              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Bruno Gervais            Adam Janosik             60     1   2  2  
 2 Brenden Dillon           Nikita Nesterov          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Max Friberg              Brett Connolly           Martin Erat              Radko Gudas              Bruno Gervais            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Max Friberg              Brett Connolly           Martin Erat              Radko Gudas              Bruno Gervais            

<b>Goaltenders</b>
Starting : Robin Lehner             
Backup : Jaroslav Janus           

<b>Extra Forwards</b>
Normal : Pontus Aberg, Jiri Sekac, Scott Kosmachuk - PP : Pontus Aberg, Jiri Sekac - PK : Scott Kosmachuk
<b>Extra Defensemen</b>
Normal : Adam Janosik, Brenden Dillon, Bruno Gervais - PP : Adam Janosik - PK : Brenden Dillon, Adam Janosik
<b>Penalty Shots</b>
Max Friberg, Brett Connolly, Reid Boucher, Martin Erat, Vladislav Namestnikov
<b>Custom OT Lines Forwards</b>
Max Friberg, Brett Connolly, Daniel Carr, Martin Erat, Vladislav Namestnikov, Reid Boucher, Jiri Sekac, Scott Kosmachuk, Dustin Penner, Pontus Aberg
<b>Custom OT Lines Defensemen</b>
Radko Gudas, Bruno Gervais, Brenden Dillon, Nikita Nesterov, Adam Janosik

<b>Scratches</b>
Anthony Stewart (Healthy), Brendan Mikkelson (Right Forearm Injury), Dennis Seidenberg (Healthy)</pre></div>
<h1 class="TeamLineFarm_ROB"><a id="RobervalDwarfs">Roberval Dwarfs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#RobervalDwarfs">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#RobervalDwarfs">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#RobervalDwarfs">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#RobervalDwarfs">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#RobervalDwarfs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RobervalDwarfs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RobervalDwarfs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikko Rantanen           Artturi Lehkonen         Sebastian Aho            40     0   0  5  
 2 Mark Olver               Stanislav Galiev         Tyler Biggs              30     0   1  4  
 3 Sam Carrick              Matt Frattin             Alexander Barabanov      20     1   2  2  
 4 Aleksi Saarela           Tyler Biggs              Patrick Eaves            10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jesse Blacker            Nikita Nikitin                                    40     1   2  2  
 2 James Melindy            Ville Pokka                                       30     1   2  2  
 3 Brady Skjei              Eetu Sopanen                                      20     1   2  2  
 4 Brady Skjei              James Melindy                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikko Rantanen           Artturi Lehkonen         Sebastian Aho            60     0   0  5  
 2 Mark Olver               Stanislav Galiev         Matt Frattin             40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Eetu Sopanen             Brady Skjei                                       60     0   2  3  
 2 James Melindy            Ville Pokka                                       40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sam Carrick              Tyler Biggs              60     0   4  1  
 2 Matt Frattin             Patrick Eaves            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jesse Blacker            Brady Skjei              60     1   4  0  
 2 James Melindy            Ville Pokka              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sam Carrick                                       60     0   5  0  
 2 Mark Olver                                        40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brady Skjei              Eetu Sopanen             60     0   5  0  
 2 James Melindy            Ville Pokka              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Matt Frattin             Sebastian Aho            60     0   2  3  
 2 Mark Olver               Stanislav Galiev         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Eetu Sopanen             Brady Skjei              60     1   2  2  
 2 James Melindy            Ville Pokka              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Olver               Matt Frattin             Tyler Biggs              Jesse Blacker            Brady Skjei              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Olver               Matt Frattin             Tyler Biggs              Jesse Blacker            Brady Skjei              

<b>Goaltenders</b>
Starting : Niklas Backstrom         
Backup : Timo Pielmeier           

<b>Extra Forwards</b>
Normal : Sebastian Aho, Stanislav Galiev, Mark Olver - PP : Sebastian Aho, Stanislav Galiev - PK : Tyler Biggs
<b>Extra Defensemen</b>
Normal : Brady Skjei, Eetu Sopanen, James Melindy - PP : Brady Skjei - PK : Eetu Sopanen, James Melindy
<b>Penalty Shots</b>
Tyler Biggs, Mark Olver, Matt Frattin, Stanislav Galiev, Sebastian Aho
<b>Custom OT Lines Forwards</b>
Mikko Rantanen, Sebastian Aho, Artturi Lehkonen, Mark Olver, Tyler Biggs, Stanislav Galiev, Patrick Eaves, Matt Frattin, Sam Carrick, Alexander Barabanov
<b>Custom OT Lines Defensemen</b>
Jesse Blacker, Eetu Sopanen, James Melindy, Ville Pokka, Brady Skjei

<b>Scratches</b>
Corey Potter (Healthy), Daniel Paille (Healthy), Fedor Tyutin (Healthy)</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="ChicagoWolves">Chicago Wolves</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#ChicagoWolves">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#ChicagoWolves">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#ChicagoWolves">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#ChicagoWolves">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#ChicagoWolves">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoWolves');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoWolves" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tim Connolly             Brendan Perlini          Mike Vecchione           38     0   2  3  
 2 Nicolas Kerdiles         Joseph Labate            Nicklas Jensen           35     0   2  3  
 3 Mark Letestu             Viktor Stalberg          Alexandre Grenier        20     1   2  2  
 4 Alex Friesen             Anton Rodin              Kellan Tochkin           7      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Connauton          Teemu Laakso                                      40     1   2  2  
 2 Ben Lovejoy              Julius Honka                                      30     1   2  2  
 3 Patrick McNally          Matic Podlipnik                                   20     1   2  2  
 4 Kevin Connauton          Teemu Laakso                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tim Connolly             Viktor Stalberg          Mike Vecchione           60     1   2  2  
 2 Nicolas Kerdiles         Brendan Perlini          Nicklas Jensen           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Connauton          Teemu Laakso                                      60     1   2  2  
 2 Ben Lovejoy              Julius Honka                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tim Connolly             Viktor Stalberg          60     1   2  2  
 2 Nicolas Kerdiles         Mark Letestu             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Connauton          Teemu Laakso             60     1   2  2  
 2 Ben Lovejoy              Julius Honka             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tim Connolly                                      60     1   2  2  
 2 Viktor Stalberg                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Connauton          Teemu Laakso             60     1   2  2  
 2 Ben Lovejoy              Julius Honka             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tim Connolly             Brendan Perlini          60     1   2  2  
 2 Nicolas Kerdiles         Mark Letestu             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Connauton          Teemu Laakso             60     1   2  2  
 2 Ben Lovejoy              Julius Honka             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tim Connolly             Viktor Stalberg          Mike Vecchione           Kevin Connauton          Teemu Laakso             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tim Connolly             Viktor Stalberg          Mike Vecchione           Kevin Connauton          Teemu Laakso             

<b>Goaltenders</b>
Starting : Dustin Tokarski          
Backup : Eddie Lack               
Third : Joe Cannata              

<b>Extra Forwards</b>
Normal : Justin Shugg, Brendan Perlini, Alexandre Grenier - PP : Justin Shugg, Brendan Perlini - PK : Alexandre Grenier
<b>Extra Defensemen</b>
Normal : Patrick McNally, Matic Podlipnik, Ben Lovejoy - PP : Patrick McNally - PK : Matic Podlipnik, Ben Lovejoy
<b>Penalty Shots</b>
Tim Connolly, Viktor Stalberg, Nicolas Kerdiles, Mark Letestu, Joseph Labate
<b>Custom OT Lines Forwards</b>
Tim Connolly, Viktor Stalberg, Nicolas Kerdiles, Mark Letestu, Joseph Labate, Brendan Perlini, Mike Vecchione, Nicklas Jensen, Alexandre Grenier, Alex Friesen
<b>Custom OT Lines Defensemen</b>
Kevin Connauton, Teemu Laakso, Ben Lovejoy, Julius Honka, Patrick McNally

<b>Scratches</b>
Dany Sabourin (Healthy)</pre></div>
<h1 class="TeamLineFarm_LAN"><a id="LandshutCannibals">Landshut Cannibals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#LandshutCannibals">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#LandshutCannibals">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#LandshutCannibals">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#LandshutCannibals">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#LandshutCannibals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LandshutCannibals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LandshutCannibals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alexei Mitrofanov        Saku Maenalanen          Dryden Hunt              40     1   2  2  
 2 Theodor Blueger          David Griger             Daniel Bernhardt         30     1   2  2  
 3 Michael Dal Colle        Nick Ritchie             German Rubtsov           20     1   2  2  
 4 German Rubtsov           Dryden Hunt              David Griger             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Bryan Allen              Lawrence Pilut                                    40     1   2  2  
 2 Johnathan MacLeod        Yegor Rykov                                       30     1   2  2  
 3 Ivan Vereshchagin        Alexis Loiseau                                    20     1   2  2  
 4 Bryan Allen              Lawrence Pilut                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alexei Mitrofanov        Saku Maenalanen          Michael Dal Colle        60     1   2  2  
 2 Theodor Blueger          David Griger             Daniel Bernhardt         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Bryan Allen              Lawrence Pilut                                    60     1   2  2  
 2 Johnathan MacLeod        Yegor Rykov                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Griger             Saku Maenalanen          60     1   2  2  
 2 Alexei Mitrofanov        Theodor Blueger          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Bryan Allen              Ivan Vereshchagin        60     1   2  2  
 2 Johnathan MacLeod        Yegor Rykov              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alexei Mitrofanov                                 60     1   2  2  
 2 Theodor Blueger                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Bryan Allen              Ivan Vereshchagin        60     1   2  2  
 2 Johnathan MacLeod        Yegor Rykov              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Griger             Michael Dal Colle        60     1   2  2  
 2 Alexei Mitrofanov        Theodor Blueger          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Bryan Allen              Lawrence Pilut           60     1   2  2  
 2 Johnathan MacLeod        Yegor Rykov              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexei Mitrofanov        Saku Maenalanen          David Griger             Bryan Allen              Lawrence Pilut           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexei Mitrofanov        Saku Maenalanen          David Griger             Bryan Allen              Lawrence Pilut           

<b>Goaltenders</b>
Starting : Pavel Francouz           
Backup : Veini Vehvilainen        

<b>Extra Forwards</b>
Normal : Oskar Norlov, Dominik Kahun, Michael Dal Colle - PP : Oskar Norlov, Dominik Kahun - PK : Michael Dal Colle
<b>Extra Defensemen</b>
Normal : Ivan Vereshchagin, Johnathan MacLeod, Yegor Rykov - PP : Ivan Vereshchagin - PK : Johnathan MacLeod, Yegor Rykov
<b>Penalty Shots</b>
German Rubtsov, Daniel Bernhardt, Alexei Mitrofanov, Theodor Blueger, David Griger
<b>Custom OT Lines Forwards</b>
Saku Maenalanen, Alexei Mitrofanov, David Griger, Theodor Blueger, Michael Dal Colle, Alexis Loiseau, Nick Ritchie, Daniel Bernhardt, German Rubtsov, Dryden Hunt
<b>Custom OT Lines Defensemen</b>
Bryan Allen, Lawrence Pilut, Yegor Rykov, Johnathan MacLeod, Lukas Bengtsson

<b>Scratches</b>
Matt Niskanen (Healthy)</pre></div>
<h1 class="TeamLineFarm_MAN"><a id="ManitobaMoose">Manitoba Moose</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL6-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL6-FarmTeamScoring.php#ManitobaMoose">Farm Team Scoring</a> ]
[ <a href="ASHL6-FarmTeamLines.php#ManitobaMoose">Farm Team Lines</a> ]
[ <a href="ASHL6-FarmTeamSchedule.php#ManitobaMoose">Farm Team Schedule</a> ]
[ <a href="ASHL6-FarmTeamStats.php#ManitobaMoose">Farm Team Stats</a> ]
[ <a href="ASHL6-FarmTeamStatsVS.php#ManitobaMoose">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ManitobaMoose');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ManitobaMoose" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Angelo Miceli            Hunter Shinkaruk         Max Görtz                40     0   0  5  
 2 Colin Blackwell          Noah Rod                 Greg Chase               32     0   0  5  
 3 Daniel Lafontaine        Adam Tambellini          Michael Joly             20     0   2  3  
 4 Jérôme Verrier           Brent Pedersen           Kay Schweri              8      0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Graves              Marcus Pettersson                                 40     0   2  3  
 2 Nikolas Brouillard       Erik Cernak                                       35     0   2  3  
 3 Brad Stuart              Kevin Lidström                                    20     0   3  2  
 4 Ryan Graves              Marcus Pettersson                                 5      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Angelo Miceli            Hunter Shinkaruk         Max Görtz                60     1   0  4  
 2 Daniel Lafontaine        Noah Rod                 Greg Chase               40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marcus Pettersson        Ryan Graves                                       60     1   1  3  
 2 Erik Cernak              Nikolas Brouillard                                40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Daniel Lafontaine        Brent Pedersen           60     1   4  0  
 2 Jérôme Verrier           Adam Tambellini          40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marcus Pettersson        Ryan Graves              55     1   4  0  
 2 Kevin Lidström           Erik Cernak              45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jérôme Verrier                                    60     1   4  0  
 2 Daniel Lafontaine                                 40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marcus Pettersson        Ryan Graves              55     1   4  0  
 2 Nikolas Brouillard       Erik Cernak              45     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Angelo Miceli            Max Görtz                60     0   2  3  
 2 Daniel Lafontaine        Michael Joly             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Graves              Erik Cernak              55     0   2  3  
 2 Kevin Lidström           Marcus Pettersson        45     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Angelo Miceli            Hunter Shinkaruk         Max Görtz                Marcus Pettersson        Ryan Graves              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Angelo Miceli            Hunter Shinkaruk         Max Görtz                Marcus Pettersson        Ryan Graves              

<b>Goaltenders</b>
Starting : Jordan Binnington        
Backup : Henrik Karlsson          

<b>Extra Forwards</b>
Normal : Daniel Lafontaine, Jérôme Verrier, Michael Joly - PP : Daniel Lafontaine, Jérôme Verrier - PK : Michael Joly
<b>Extra Defensemen</b>
Normal : Marcus Pettersson, Kevin Lidström, Ryan Graves - PP : Ryan Graves - PK : Marcus Pettersson, Ryan Graves
<b>Penalty Shots</b>
Angelo Miceli, Greg Chase, Max Görtz, Hunter Shinkaruk, Brent Pedersen
<b>Custom OT Lines Forwards</b>
Angelo Miceli, Hunter Shinkaruk, Max Görtz, Colin Blackwell, Noah Rod, Greg Chase, Jérôme Verrier, Michael Joly, Daniel Lafontaine, Adam Tambellini
<b>Custom OT Lines Defensemen</b>
Ryan Graves, Marcus Pettersson, Erik Cernak, Kevin Lidström, Nikolas Brouillard

<b>Scratches</b>
Joe Thornton (Healthy), Nathan Gerbe (Healthy), Paul Postma (Healthy)</pre></div>
<?php include "Footer.php";?>
