﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Lines</title>
<script src="ASHL10.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.3.3 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleKraken">Seattle Kraken</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#VegasGoldenKnights">Vegas Golden Knights</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alexander Burmistrov     Émile Poirier            Alex Ovechkin            35     1   0  4  
 2 Jesperi Kotkaniemi       Kyle Connor              Brock Boeser             32     0   2  3  
 3 Mike Hoffman             Jesse Puljujarvi         Dustin Brown             28     1   1  3  
 4 Anthony Beauvillier      Kalle Kossila            Chris Wagner             5      2   1  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Miro Heiskanen                                    35     1   2  2  
 2 Darren Dietz             Tyler Myers                                       35     1   2  2  
 3 Devon Toews              Taylor Doherty                                    25     1   2  2  
 4 Devon Toews              Taylor Doherty                                    5      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alexander Burmistrov     Alex Ovechkin            Brock Boeser             60     0   1  4  
 2 Mike Hoffman             Kyle Connor              Émile Poirier            40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Darren Dietz                                      55     0   1  4  
 2 Devon Toews              Miro Heiskanen                                    45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Wagner             Dustin Brown             55     1   3  1  
 2 Alexander Burmistrov     Kyle Connor              45     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Doherty           Tyler Myers              55     1   4  0  
 2 Darren Dietz             Devon Toews              45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Chris Wagner                                      55     1   4  0  
 2 Dustin Brown                                      45     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Doherty           Tyler Myers              55     1   4  0  
 2 Darren Dietz             Devon Toews              45     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jesperi Kotkaniemi       Alex Ovechkin            50     1   0  4  
 2 Anthony Beauvillier      Jesse Puljujarvi         50     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Doherty           Tyler Myers              55     1   3  1  
 2 Devon Toews              Miro Heiskanen           45     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexander Burmistrov     Alex Ovechkin            Brock Boeser             Cam Fowler               Tyler Myers              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Wagner             Alexander Burmistrov     Dustin Brown             Taylor Doherty           Tyler Myers              

<b>Goaltenders</b>
Starting : Sergei Bobrovsky         
Backup : Colton Point             

<b>Extra Forwards</b>
Normal : Jesse Puljujarvi, Jesperi Kotkaniemi, Alex Ovechkin - PP : Jesse Puljujarvi, Jesperi Kotkaniemi - PK : Émile Poirier
<b>Extra Defensemen</b>
Normal : Devon Toews, Tyler Myers, Cam Fowler - PP : Tyler Myers - PK : Cam Fowler, Miro Heiskanen
<b>Penalty Shots</b>
Alex Ovechkin, Alexander Burmistrov, Brock Boeser, Émile Poirier, Jesse Puljujarvi
<b>Custom OT Lines Forwards</b>
Alexander Burmistrov, Alex Ovechkin, Jesperi Kotkaniemi, Brock Boeser, Mike Hoffman, Émile Poirier, Anthony Beauvillier, Kyle Connor, Kalle Kossila, Jesse Puljujarvi
<b>Custom OT Lines Defensemen</b>
Cam Fowler, Tyler Myers, Miro Heiskanen, Devon Toews, Darren Dietz

<b>Scratches</b>
Andrey Pedan (Healthy), Jonathon Merrill (Healthy), Markus Nutivaara (Healthy)</pre></div>
<h1 class="TeamLinesPro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Oskar Lindblom           Logan Couture            35     0   4  1  
 2 Steven Stamkos           Bo Horvat                Alex DeBrincat           30     0   4  1  
 3 Cole Cassels             Eric Staal               Noel Acciari             20     0   4  1  
 4 Jeff Carter              Marcel Noebels           Michael McCarron         15     1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Bogosian            Ryan Suter                                        35     1   3  1  
 2 Hampus Lindholm          Brandon Gormley                                   31     1   3  1  
 3 Travis Sanheim           Duncan Keith                                      27     1   4  0  
 4 Ryan Suter               Duncan Keith                                      7      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Oskar Lindblom           Steven Stamkos           60     1   0  4  
 2 Cole Cassels             Bo Horvat                Logan Couture            40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Bogosian            Hampus Lindholm                                   60     1   1  3  
 2 Brandon Gormley          Travis Sanheim                                    40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cole Cassels             Noel Acciari             60     1   4  0  
 2 Eric Staal               Jeff Carter              40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zach Bogosian            Ryan Suter               60     1   4  0  
 2 Brandon Gormley          Travis Sanheim           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Cole Cassels                                      60     0   5  0  
 2 Eric Staal                                        40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Gormley          Ryan Suter               60     0   5  0  
 2 Hampus Lindholm          Travis Sanheim           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Eric Staal               Jeff Carter              60     1   2  2  
 2 Noel Acciari             Alex DeBrincat           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Gormley          Ryan Suter               60     1   2  2  
 2 Travis Sanheim           Hampus Lindholm          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Tavares             Logan Couture            Steven Stamkos           Zach Bogosian            Hampus Lindholm          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cole Cassels             Bo Horvat                Noel Acciari             Ryan Suter               Brandon Gormley          

<b>Goaltenders</b>
Starting : Brian Elliott            
Backup : Connor Hellebuyck        

<b>Extra Forwards</b>
Normal : Eric Staal, Jeff Carter, Noel Acciari - PP : Bo Horvat, Eric Staal - PK : Jeff Carter
<b>Extra Defensemen</b>
Normal : Ryan Suter, Brandon Gormley, Travis Sanheim - PP : Travis Sanheim - PK : Travis Sanheim, Duncan Keith
<b>Penalty Shots</b>
Logan Couture, Steven Stamkos, John Tavares, Jeff Carter, Alex DeBrincat
<b>Custom OT Lines Forwards</b>
John Tavares, Marcel Noebels, Logan Couture, Steven Stamkos, Cole Cassels, Eric Staal, Bo Horvat, Alex DeBrincat, Jeff Carter, Noel Acciari
<b>Custom OT Lines Defensemen</b>
Zach Bogosian, Ryan Suter, Hampus Lindholm, Brandon Gormley, Travis Sanheim

<b>Scratches</b>
Hakan Salt (Healthy), Raman Hrabarenka (Healthy)</pre></div>
<h1 class="TeamLinesPro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Marchand            Dillon Dube              William Nylander         30     1   2  2  
 2 Nico Hischier            Jamie Benn               Rickard Rakell           30     1   1  3  
 3 Frédérik Gauthier        Marko Dano               Josh Bailey              25     1   3  1  
 4 Colton Sissons           Vladimir Tkachev         Scott Kosmachuk          15     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Carlson             Charles McAvoy                                    36     1   3  1  
 2 Derrick Pouliot          Olli Maatta                                       36     1   3  1  
 3 Mario Ferraro            Marco Scandella                                   28     1   3  1  
 4 Charles McAvoy           John Carlson                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Marchand            Vladimir Tkachev         William Nylander         60     0   0  5  
 2 Nico Hischier            Jamie Benn               Rickard Rakell           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Carlson             Olli Maatta                                       60     0   1  4  
 2 Derrick Pouliot          Charles McAvoy                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Josh Bailey              Dillon Dube              60     0   5  0  
 2 Frédérik Gauthier        Brad Marchand            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derrick Pouliot          Marco Scandella          60     0   5  0  
 2 John Carlson             Mario Ferraro            40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Josh Bailey                                       60     0   5  0  
 2 Brad Marchand                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marco Scandella          Mario Ferraro            60     0   5  0  
 2 John Carlson             Derrick Pouliot          40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brad Marchand            Jamie Benn               60     0   1  4  
 2 Nico Hischier            William Nylander         40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Carlson             Charles McAvoy           60     1   2  2  
 2 Derrick Pouliot          Olli Maatta              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Marchand            Jamie Benn               William Nylander         John Carlson             Charles McAvoy           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Marchand            Dillon Dube              Josh Bailey              John Carlson             Marco Scandella          

<b>Goaltenders</b>
Starting : Igor Shestyorkin         
Backup : Josh Harding             

<b>Extra Forwards</b>
Normal : Brad Marchand, Nico Hischier, William Nylander - PP : Brad Marchand, Nico Hischier - PK : Brad Marchand
<b>Extra Defensemen</b>
Normal : John Carlson, Charles McAvoy, Derrick Pouliot - PP : John Carlson - PK : Marco Scandella, Olli Maatta
<b>Penalty Shots</b>
Jamie Benn, Nico Hischier, Brad Marchand, William Nylander, Vladimir Tkachev
<b>Custom OT Lines Forwards</b>
Brad Marchand, Jamie Benn, Nico Hischier, Dillon Dube, William Nylander, Vladimir Tkachev, Josh Bailey, Rickard Rakell, Frédérik Gauthier, Scott Kosmachuk
<b>Custom OT Lines Defensemen</b>
John Carlson, Charles McAvoy, Derrick Pouliot, Olli Maatta, Marco Scandella

<b>Scratches</b>
Eric Gelinas (Healthy), Cody Glass (Healthy)</pre></div>
<h1 class="TeamLinesPro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan O'Reilly            Adam Henrique            Anders Lee               29     0   2  3  
 2 Tyler Seguin             Max Friberg              Jordan Eberle            29     0   2  3  
 3 Jaedon Descheneau        Michael Grabner          Jiri Sekac               26     1   2  2  
 4 Jaedon Descheneau        Mattias Janmark-Nylen    Nikita Soshnikov         16     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Dylan Olsen                                       29     1   2  2  
 2 Nathan Beaulieu          Joey Laleggia                                     29     1   2  2  
 3 Slater Koekkoek          Ty Smith                                          24     1   3  1  
 4 Trevor Murphy            Slater Koekkoek                                   18     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Seguin             Jaedon Descheneau        Jordan Eberle            50     0   1  4  
 2 Adam Henrique            Anders Lee               Ryan O'Reilly            50     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Joey Laleggia                                     50     1   2  2  
 2 Dylan Olsen              Nathan Beaulieu                                   50     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan O'Reilly            Tyler Seguin             50     1   3  1  
 2 Adam Henrique            Jordan Eberle            50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Slater Koekkoek          50     1   3  1  
 2 Dylan Olsen              Nathan Beaulieu          50     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan O'Reilly                                     50     1   3  1  
 2 Jordan Eberle                                     50     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Slater Koekkoek          50     1   3  1  
 2 Dylan Olsen              Nathan Beaulieu          50     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan O'Reilly            Tyler Seguin             50     1   2  2  
 2 Jordan Eberle            Nikita Soshnikov         50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Slater Koekkoek          50     1   2  2  
 2 Dylan Olsen              Nathan Beaulieu          50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Seguin             Michael Grabner          Jordan Eberle            Kevin Shattenkirk        Nathan Beaulieu          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan O'Reilly            Michael Grabner          Jordan Eberle            Kevin Shattenkirk        Joey Laleggia            

<b>Goaltenders</b>
Starting : Jacob Markstrom          
Backup : Oscar Dansk              

<b>Extra Forwards</b>
Normal : Ryan O'Reilly, Jaedon Descheneau, Nikita Soshnikov - PP : Jaedon Descheneau, Nikita Soshnikov - PK : Jaedon Descheneau
<b>Extra Defensemen</b>
Normal : Nathan Beaulieu, Slater Koekkoek, Kevin Shattenkirk - PP : Kevin Shattenkirk - PK : Slater Koekkoek, Kevin Shattenkirk
<b>Penalty Shots</b>
Tyler Seguin, Jordan Eberle, Adam Henrique, Anders Lee, Ryan O'Reilly
<b>Custom OT Lines Forwards</b>
Ryan O'Reilly, Tyler Seguin, Jordan Eberle, Michael Grabner, Adam Henrique, Anders Lee, Max Friberg, Mattias Janmark-Nylen, Jaedon Descheneau, Nikita Soshnikov
<b>Custom OT Lines Defensemen</b>
Kevin Shattenkirk, Slater Koekkoek, Dylan Olsen, Nathan Beaulieu, Joey Laleggia

<b>Scratches</b>
Jesper Boqvist (Healthy), Alexei Mitrofanov (Healthy), Connor Carrick (Healthy)</pre></div>
<h1 class="TeamLinesPro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alex Galchenyuk          Teuvo Teravainen         Anton Slepyshev          25     0   2  3  
 2 Evgeni Malkin            Pierre-Luc Dubois        Ryan Dzingel             25     2   1  2  
 3 Chris Tierney            Kyle Palmieri            Adrian Kempe             25     1   2  2  
 4 Oskar Sundqvist          Ryan MacInnis            Greg Nemisz              25     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Hamonic           Oliver Ekman-Larsson                              25     2   2  1  
 2 Michael Del Zotto        Damon Severson                                    25     1   2  2  
 3 Tyler Wotherspoon        Jonathon Blum                                     25     2   2  1  
 4 Travis Hamonic           Oliver Ekman-Larsson                              25     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeni Malkin            Teuvo Teravainen         Alex Galchenyuk          60     1   1  3  
 2 Pierre-Luc Dubois        Oskar Sundqvist          Ryan MacInnis            40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Hamonic           Damon Severson                                    60     1   1  3  
 2 Michael Del Zotto        Oliver Ekman-Larsson                              40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Tierney            Adrian Kempe             60     2   3  0  
 2 Ryan MacInnis            Pierre-Luc Dubois        40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Oliver Ekman-Larsson     60     1   3  1  
 2 Michael Del Zotto        Jonathon Blum            40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan MacInnis                                     60     1   3  1  
 2 Chris Tierney                                     40     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Oliver Ekman-Larsson     60     1   3  1  
 2 Michael Del Zotto        Jonathon Blum            40     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Oskar Sundqvist          Kyle Palmieri            60     1   2  2  
 2 Ryan MacInnis            Adrian Kempe             40     2   2  1  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Oliver Ekman-Larsson     60     1   2  2  
 2 Michael Del Zotto        Jonathon Blum            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alex Galchenyuk          Teuvo Teravainen         Evgeni Malkin            Travis Hamonic           Oliver Ekman-Larsson     

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Tierney            Adrian Kempe             Pierre-Luc Dubois        Travis Hamonic           Oliver Ekman-Larsson     

<b>Goaltenders</b>
Starting : James Reimer             
Backup : Olivier Roy              

<b>Extra Forwards</b>
Normal : Ryan MacInnis, Chris Tierney, Oskar Sundqvist - PP : Ryan MacInnis, Chris Tierney - PK : Oskar Sundqvist
<b>Extra Defensemen</b>
Normal : Travis Hamonic, Damon Severson, Michael Del Zotto - PP : Oliver Ekman-Larsson - PK : Damon Severson, Michael Del Zotto
<b>Penalty Shots</b>
Alex Galchenyuk, Teuvo Teravainen, Evgeni Malkin, Pierre-Luc Dubois, Chris Tierney
<b>Custom OT Lines Forwards</b>
Alex Galchenyuk, Teuvo Teravainen, Evgeni Malkin, Pierre-Luc Dubois, Chris Tierney, Kyle Palmieri, Oskar Sundqvist, Adrian Kempe, Anton Slepyshev, Ryan Dzingel
<b>Custom OT Lines Defensemen</b>
Travis Hamonic, Oliver Ekman-Larsson, Michael Del Zotto, Jonathon Blum, Damon Severson

<b>Scratches</b>
Ryan Lindgren (Bruised Left Arm Injury)</pre></div>
<h1 class="TeamLinesPro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Bryan Little             Milan Lucic              Loui Eriksson            25     1   2  2  
 2 Tyler Johnson            Reid Boucher             Maxwell Reinhart         25     1   2  2  
 3 Jordan Weal              Anthony Camara           Stefan Noesen            25     1   2  2  
 4 Kenny Agostino           Lawson Crouse            Cal Clutterbuck          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Michael Paliotta         Mark Barberio                                     35     1   2  2  
 2 Joe Morrow               Theo Peckham                                      33     1   2  2  
 3 Jarred Tinordi           Jamie Oleksiak                                    32     1   2  2  
 4 Theo Peckham             Jamie Oleksiak                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Bryan Little             Milan Lucic              Loui Eriksson            60     1   1  3  
 2 Tyler Johnson            Reid Boucher             Maxwell Reinhart         40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jarred Tinordi           Michael Paliotta                                  60     1   1  3  
 2 Joe Morrow               Theo Peckham                                      40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Bryan Little             Loui Eriksson            60     1   3  1  
 2 Jordan Weal              Maxwell Reinhart         40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jarred Tinordi           Michael Paliotta         60     1   3  1  
 2 Joe Morrow               Theo Peckham             40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Bryan Little                                      60     1   2  2  
 2 Jordan Weal                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Paliotta         Jarred Tinordi           60     0   5  0  
 2 Joe Morrow               Theo Peckham             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Bryan Little             Loui Eriksson            60     1   2  2  
 2 Tyler Johnson            Milan Lucic              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Paliotta         Jarred Tinordi           60     1   2  2  
 2 Joe Morrow               Theo Peckham             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Bryan Little             Milan Lucic              Loui Eriksson            Michael Paliotta         Mark Barberio            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Bryan Little             Milan Lucic              Loui Eriksson            Michael Paliotta         Mark Barberio            

<b>Goaltenders</b>
Starting : Calvin Pickard           
Backup : Jhonas Enroth            

<b>Extra Forwards</b>
Normal : Anthony Camara, Stefan Noesen, Jordan Weal - PP : Anthony Camara, Stefan Noesen - PK : Jordan Weal
<b>Extra Defensemen</b>
Normal : Jarred Tinordi, Theo Peckham, Joe Morrow - PP : Jarred Tinordi - PK : Theo Peckham, Joe Morrow
<b>Penalty Shots</b>
Milan Lucic, Loui Eriksson, Bryan Little, Reid Boucher, Anthony Camara
<b>Custom OT Lines Forwards</b>
Milan Lucic, Loui Eriksson, Bryan Little, Reid Boucher, Anthony Camara, Tyler Johnson, Maxwell Reinhart, Stefan Noesen, Jordan Weal, Lawson Crouse
<b>Custom OT Lines Defensemen</b>
Michael Paliotta, Mark Barberio, Joe Morrow, Theo Peckham, Jarred Tinordi

<b>Scratches</b>
Cody Hodgson (Healthy), Keaton Ellerby (Healthy), Jakob Silfverberg (Healthy)</pre></div>
<h1 class="TeamLinesPro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           William Carrier          Evgeny Dadonov           34     0   1  4  
 2 Derick Brassard          Mitch Holmberg           David Backes             28     0   2  3  
 3 Nikolay Prokhorkin       Adam Helewka             Greg Chase               22     1   1  3  
 4 Andreas Engqvist         Nikolay Prokhorkin       Gustav Nyquist           16     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marc Staal               Cody Franson                                      34     1   3  1  
 2 Unknown Player           Erik Karlsson                                     33     1   3  1  
 3 David Savard             John Nyberg                                       33     1   3  1  
 4 Marc Staal               Erik Karlsson                                     0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           William Carrier          David Backes             50     0   0  5  
 2 Derick Brassard          Mitch Holmberg           Evgeny Dadonov           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Cody Franson                                      50     1   3  1  
 2 Marc Staal               Unknown Player                                    50     1   3  1  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           David Backes             50     0   5  0  
 2 Andreas Engqvist         Greg Chase               50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Erik Karlsson            50     1   4  0  
 2 Unknown Player           John Nyberg              50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Toews                                    50     0   5  0  
 2 David Backes                                      50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Erik Karlsson            50     1   4  0  
 2 Unknown Player           John Nyberg              50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           Mitch Holmberg           50     0   2  3  
 2 Derick Brassard          David Backes             50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Cody Franson             50     1   3  1  
 2 Unknown Player           Erik Karlsson            50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Mitch Holmberg           Evgeny Dadonov           Erik Karlsson            Cody Franson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Andreas Engqvist         David Backes             Unknown Player           Marc Staal               

<b>Goaltenders</b>
Starting : Anders Lindback          
Backup : Mackenzie Blackwood      

<b>Extra Forwards</b>
Normal : Mitch Holmberg, William Carrier, David Backes - PP : Evgeny Dadonov, Jonathan Toews - PK : Nikolay Prokhorkin
<b>Extra Defensemen</b>
Normal : Erik Karlsson, John Nyberg, Unknown Player - PP : Marc Staal - PK : Unknown Player, Erik Karlsson
<b>Penalty Shots</b>
Jonathan Toews, Gustav Nyquist, Evgeny Dadonov, David Backes, William Carrier
<b>Custom OT Lines Forwards</b>
Jonathan Toews, Evgeny Dadonov, William Carrier, Mitch Holmberg, Derick Brassard, David Backes, Greg Chase, Gustav Nyquist, Andreas Engqvist, Nikolay Prokhorkin
<b>Custom OT Lines Defensemen</b>
Erik Karlsson, Cody Franson, Unknown Player, John Nyberg, Marc Staal

<b>Scratches</b>
Luca Sbisa (Left Foot Injury), Antti Suomela (Bruised Right Foot Injury)</pre></div>
<h1 class="TeamLinesPro_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Alexander Kerfoot        Devin Setoguchi          39     0   1  4  
 2 Evgeny Grachev           Magnus Paajarvi          Jason Zucker             37     0   1  4  
 3 Joachim Nermark          Sergey Tolchinsky        Nikita Filatov           18     0   1  4  
 4 Joachim Nermark          Taylor Leier             T.J. Galiardi            6      1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dustin Byfuglien         Yann Sauve                                        40     1   1  3  
 2 Gustav Olofsson          Jani Hakanpaa                                     40     1   1  3  
 3 Ryan Stanton             Andreas Englund                                   20     1   2  2  
 4 Dustin Byfuglien         Yann Sauve                                        0      1   1  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Sergey Tolchinsky        Devin Setoguchi          50     0   0  5  
 2 Evgeny Grachev           Robby Fabbri             Magnus Paajarvi          50     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gustav Olofsson          Dustin Byfuglien                                  75     0   1  4  
 2 Yann Sauve               Andreas Englund                                   25     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Monahan             T.J. Galiardi            70     1   3  1  
 2 Joachim Nermark          Taylor Leier             30     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Yann Sauve               Gustav Olofsson          60     1   3  1  
 2 Jani Hakanpaa            Andreas Englund          40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joachim Nermark                                   70     0   4  1  
 2 Sean Monahan                                      30     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Yann Sauve               Gustav Olofsson          60     0   5  0  
 2 Jani Hakanpaa            Andreas Englund          40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Monahan             T.J. Galiardi            60     0   1  4  
 2 Joachim Nermark          Taylor Leier             40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dustin Byfuglien         Yann Sauve               60     0   1  4  
 2 Gustav Olofsson          Andreas Englund          40     0   1  4  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Robby Fabbri             Alexander Kerfoot        Yann Sauve               Dustin Byfuglien         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Joachim Nermark          T.J. Galiardi            Gustav Olofsson          Yann Sauve               

<b>Goaltenders</b>
Starting : Andrew Hammond           
Backup : Martin Jones             

<b>Extra Forwards</b>
Normal : Alexander Kerfoot, Joachim Nermark, Taylor Leier - PP : Alexander Kerfoot, Joachim Nermark - PK : Taylor Leier
<b>Extra Defensemen</b>
Normal : Gustav Olofsson, Andreas Englund, Jani Hakanpaa - PP : Yann Sauve - PK : Dustin Byfuglien, Yann Sauve
<b>Penalty Shots</b>
Evgeny Grachev, Robby Fabbri, Sean Monahan, Alexander Kerfoot, Magnus Paajarvi
<b>Custom OT Lines Forwards</b>
Sean Monahan, Sergey Tolchinsky, Evgeny Grachev, Robby Fabbri, Devin Setoguchi, Magnus Paajarvi, Alexander Kerfoot, Joachim Nermark, Jason Zucker, Nikita Filatov
<b>Custom OT Lines Defensemen</b>
Dustin Byfuglien, Yann Sauve, Jani Hakanpaa, Andreas Englund, Gustav Olofsson

<b>Scratches</b>
Carl Gunnarsson (Healthy), Yakov Trenin (Healthy), Alex Iafallo (Healthy)</pre></div>
<h1 class="TeamLinesPro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Johansen            Johnny Hockey Gaudreau   Ilya Mikheyev            35     1   2  2  
 2 Christian Dvorak         Andre Burakovsky         Mikhail Grigorenko       30     1   2  2  
 3 Jason Dickinson          Remi Elie                Conor Sheary             25     1   2  2  
 4 Michael Chaput           Shawn Matthias           Barclay Goodrow          10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Seabrook           Jonas Brodin                                      35     1   2  2  
 2 Shayne Gostisbehere      Nikita Nesterov                                   34     1   2  2  
 3 Mirco Mueller            Calvin de Haan                                    31     1   2  2  
 4 Brent Seabrook           Jonas Brodin                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Johansen            Johnny Hockey Gaudreau   Ilya Mikheyev            60     0   1  4  
 2 Christian Dvorak         Andre Burakovsky         Mikhail Grigorenko       40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Seabrook           Shayne Gostisbehere                               60     1   1  3  
 2 Nikita Nesterov          Jonas Brodin                                      40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Shawn Matthias           Barclay Goodrow          60     1   4  0  
 2 Jason Dickinson          Remi Elie                40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Seabrook           Jonas Brodin             60     1   4  0  
 2 Mirco Mueller            Calvin de Haan           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Shawn Matthias                                    60     1   4  0  
 2 Remi Elie                                         40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Seabrook           Jonas Brodin             60     1   4  0  
 2 Mirco Mueller            Calvin de Haan           40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Johansen            Johnny Hockey Gaudreau   60     1   1  3  
 2 Andre Burakovsky         Mikhail Grigorenko       40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Seabrook           Nikita Nesterov          60     0   2  3  
 2 Jonas Brodin             Shayne Gostisbehere      40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Johansen            Johnny Hockey Gaudreau   Mikhail Grigorenko       Brent Seabrook           Shayne Gostisbehere      

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Shawn Matthias           Jason Dickinson          Ilya Mikheyev            Brent Seabrook           Mirco Mueller            

<b>Goaltenders</b>
Starting : Henrik Lundqvist         
Backup : Alexandar Georgiyev      

<b>Extra Forwards</b>
Normal : Christian Dvorak, Johnny Hockey Gaudreau, Andre Burakovsky - PP : Christian Dvorak, Johnny Hockey Gaudreau - PK : Christian Dvorak
<b>Extra Defensemen</b>
Normal : Shayne Gostisbehere, Brent Seabrook, Mirco Mueller - PP : Shayne Gostisbehere - PK : Calvin de Haan, Mirco Mueller
<b>Penalty Shots</b>
Johnny Hockey Gaudreau, Andre Burakovsky, Christian Dvorak, Ryan Johansen, Mikhail Grigorenko
<b>Custom OT Lines Forwards</b>
Andre Burakovsky, Johnny Hockey Gaudreau, Mikhail Grigorenko, Christian Dvorak, Ryan Johansen, Michael Chaput, Jason Dickinson, Conor Sheary, Ilya Mikheyev, Barclay Goodrow
<b>Custom OT Lines Defensemen</b>
Brent Seabrook, Jonas Brodin, Mirco Mueller, Calvin de Haan, Shayne Gostisbehere

<b>Scratches</b>
Nikita Tryamkin (Healthy), Michael Sgarbossa (Healthy)</pre></div>
<h1 class="TeamLinesPro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathew Barzal            Brandon Saad             Leon Draisaitl           31     1   1  3  
 2 Sean Couturier           Max Domi                 Jakub Voracek            30     1   1  3  
 3 Mikko Koivu              Hunter Shinkaruk         Tomas Tatar              26     1   3  1  
 4 Brian Boyle              Phillip Di Giuseppe      Ryan Hartman             13     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens                                    30     1   2  2  
 2 Alex Petrovic            Haydn Fleury                                      30     1   2  2  
 3 Morgan Ellis             Nick Holden                                       29     1   2  2  
 4 Shea Weber               Haydn Fleury                                      11     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathew Barzal            Brandon Saad             Leon Draisaitl           60     0   1  4  
 2 Sean Couturier           Max Domi                 Brian Boyle              40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens                                    60     1   2  2  
 2 Alex Petrovic            Haydn Fleury                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Brian Boyle              60     1   3  1  
 2 Mikko Koivu              Phillip Di Giuseppe      40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens           60     1   2  2  
 2 Alex Petrovic            Haydn Fleury             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brian Boyle                                       60     1   2  2  
 2 Mikko Koivu                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens           60     1   2  2  
 2 Alex Petrovic            Haydn Fleury             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Brian Boyle              60     1   2  2  
 2 Mathew Barzal            Leon Draisaitl           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens           60     1   2  2  
 2 Alex Petrovic            Haydn Fleury             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mathew Barzal            Brandon Saad             Leon Draisaitl           Shea Weber               Duncan Siemens           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Phillip Di Giuseppe      Brian Boyle              Shea Weber               Duncan Siemens           

<b>Goaltenders</b>
Starting : Jordan Binnington        
Backup : Chad Johnson             

<b>Extra Forwards</b>
Normal : Brian Boyle, Tomas Tatar, Hunter Shinkaruk - PP : Brian Boyle, Tomas Tatar - PK : Hunter Shinkaruk
<b>Extra Defensemen</b>
Normal : Morgan Ellis, Nick Holden, Alex Petrovic - PP : Morgan Ellis - PK : Nick Holden, Alex Petrovic
<b>Penalty Shots</b>
Mathew Barzal, Sean Couturier, Leon Draisaitl, Brandon Saad, Max Domi
<b>Custom OT Lines Forwards</b>
Mathew Barzal, Leon Draisaitl, Sean Couturier, Brian Boyle, Brandon Saad, Max Domi, Tomas Tatar, Hunter Shinkaruk, Phillip Di Giuseppe, Ryan Hartman
<b>Custom OT Lines Defensemen</b>
Shea Weber, Duncan Siemens, Alex Petrovic, Haydn Fleury, Morgan Ellis

<b>Scratches</b>
Curtis McKenzie (Healthy)</pre></div>
<h1 class="TeamLinesPro_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jaden Schwartz           Mikael Granlund          Patrik Laine             25     1   2  2  
 2 Mika Zibanejad           Andrew Cogliano          Elias Lindholm           25     1   2  2  
 3 Michael Bournival        Adam Lowry               Chandler Stephenson      25     1   2  2  
 4 Jack Hughes              Jaden Schwartz           Max Görtz                25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Nick Leddy                                        25     1   2  2  
 2 Torey Krug               Stefan Elliott                                    25     1   2  2  
 3 Jaccob Slavin            Alex Goligoski                                    25     1   2  2  
 4 Vyacheslav Voynov        Nick Leddy                                        25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jaden Schwartz           Mikael Granlund          Patrik Laine             60     1   2  2  
 2 Mika Zibanejad           Andrew Cogliano          Elias Lindholm           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Nick Leddy                                        60     1   2  2  
 2 Torey Krug               Stefan Elliott                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaden Schwartz           Mikael Granlund          60     1   2  2  
 2 Patrik Laine             Mika Zibanejad           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Nick Leddy               60     1   2  2  
 2 Torey Krug               Stefan Elliott           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jaden Schwartz                                    60     1   2  2  
 2 Mikael Granlund                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Nick Leddy               60     1   2  2  
 2 Torey Krug               Stefan Elliott           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaden Schwartz           Mikael Granlund          60     1   2  2  
 2 Patrik Laine             Mika Zibanejad           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Nick Leddy               60     1   2  2  
 2 Torey Krug               Stefan Elliott           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jaden Schwartz           Mikael Granlund          Patrik Laine             Vyacheslav Voynov        Nick Leddy               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jaden Schwartz           Mikael Granlund          Patrik Laine             Vyacheslav Voynov        Nick Leddy               

<b>Goaltenders</b>
Starting : Jimmy Howard             
Backup : Ondrej Pavelec           

<b>Extra Forwards</b>
Normal : Dave Bolland, Adam Lowry, Michael Bournival - PP : Dave Bolland, Adam Lowry - PK : Michael Bournival
<b>Extra Defensemen</b>
Normal : Jaccob Slavin, Alex Goligoski, Torey Krug - PP : Jaccob Slavin - PK : Alex Goligoski, Torey Krug
<b>Penalty Shots</b>
Jaden Schwartz, Mikael Granlund, Patrik Laine, Mika Zibanejad, Elias Lindholm
<b>Custom OT Lines Forwards</b>
Jaden Schwartz, Mikael Granlund, Patrik Laine, Mika Zibanejad, Elias Lindholm, Andrew Cogliano, Adam Lowry, Michael Bournival, Chandler Stephenson, Jack Hughes
<b>Custom OT Lines Defensemen</b>
Vyacheslav Voynov, Nick Leddy, Torey Krug, Stefan Elliott, Jaccob Slavin

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Kailer Yamamoto          Taylor Hall              Ryan Callahan            34     0   1  4  
 2 Kirby Dach               Kieffer Bellows          Brendan Gallagher        33     0   2  3  
 3 Tobias Rieder            Brendan Lemieux          Chris Stewart            32     0   2  3  
 4 Cédric Paquette          Tobias Rieder            Ryan Callahan            1      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cody Ceci                Rasmus Dahlin                                     33     0   1  4  
 2 Daniel Girardi           Colten Teubert                                    33     0   2  3  
 3 Martin Marincin          Mikko Vainonen                                    31     0   2  3  
 4 Cody Ceci                Rasmus Dahlin                                     3      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Callahan            Taylor Hall              Tobias Rieder            55     0   0  5  
 2 Kirby Dach               Kieffer Bellows          Brendan Gallagher        45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Dahlin            Daniel Girardi                                    55     0   1  4  
 2 Colten Teubert           Cody Ceci                                         45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cédric Paquette          Tobias Rieder            57     0   5  0  
 2 Bogdan Yakimov           Ryan Callahan            43     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mikko Vainonen           Cody Ceci                57     1   4  0  
 2 Daniel Girardi           Colten Teubert           43     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Cédric Paquette                                   57     0   5  0  
 2 Tobias Rieder                                     43     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mikko Vainonen           Daniel Girardi           57     0   5  0  
 2 Colten Teubert           Martin Marincin          43     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brendan Gallagher        Taylor Hall              55     0   1  4  
 2 Kirby Dach               Ryan Callahan            45     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Dahlin            Daniel Girardi           55     0   2  3  
 2 Colten Teubert           Martin Marincin          45     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kailer Yamamoto          Taylor Hall              Ryan Callahan            Rasmus Dahlin            Mikko Vainonen           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cédric Paquette          Kieffer Bellows          Brendan Gallagher        Cody Ceci                Colten Teubert           

<b>Goaltenders</b>
Starting : Marc-Andre Fleury        
Backup : Matt Hackett             

<b>Extra Forwards</b>
Normal : Chris Stewart, Brendan Gallagher, Taylor Hall - PP : Brendan Gallagher, Kailer Yamamoto - PK : Brendan Gallagher
<b>Extra Defensemen</b>
Normal : Martin Marincin, Colten Teubert, Daniel Girardi - PP : Martin Marincin - PK : Cody Ceci, Colten Teubert
<b>Penalty Shots</b>
Tobias Rieder, Taylor Hall, Chris Stewart, Ryan Callahan, Brendan Gallagher
<b>Custom OT Lines Forwards</b>
Kieffer Bellows, Taylor Hall, Kirby Dach, Ryan Callahan, Tobias Rieder, Chris Stewart, Cédric Paquette, Brendan Gallagher, Bogdan Yakimov, Kailer Yamamoto
<b>Custom OT Lines Defensemen</b>
Rasmus Dahlin, Colten Teubert, Martin Marincin, Daniel Girardi, Cody Ceci

<b>Scratches</b>
Sam Gagner (Sprained Right Finger Injury)</pre></div>
<h1 class="TeamLinesPro_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Bjugstad            Kyle Clifford            Josh Anderson            29     1   2  2  
 2 Dylan Larkin             Jonathan Huberdeau       Nikita Kucherov          28     0   1  4  
 3 Dana Tyrell              Zach Sanford             Brendan Perlini          25     1   3  1  
 4 Alan Quine               Jordan Greenway          Dana Tyrell              18     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Aaron Ekblad             Rasmus Sandin                                     34     1   2  2  
 2 Scott Harrington         Zachary Werenski                                  33     1   2  2  
 3 Joel Edmundson           Madison Bowey                                     33     1   2  2  
 4 Joel Edmundson           Madison Bowey                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Larkin             Jonathan Huberdeau       Nikita Kucherov          60     0   0  5  
 2 Nick Bjugstad            Brendan Perlini          Josh Anderson            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zachary Werenski         Madison Bowey                                     60     0   1  4  
 2 Aaron Ekblad             Rasmus Sandin                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alan Quine               Zach Sanford             50     0   5  0  
 2 Nikita Kucherov          Dana Tyrell              50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ekblad             Joel Edmundson           60     1   4  0  
 2 Scott Harrington         Rasmus Sandin            40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alan Quine                                        50     0   5  0  
 2 Nikita Kucherov                                   50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ekblad             Joel Edmundson           60     0   5  0  
 2 Scott Harrington         Rasmus Sandin            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dylan Larkin             Nikita Kucherov          50     0   0  5  
 2 Nick Bjugstad            Jonathan Huberdeau       50     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ekblad             Rasmus Sandin            50     1   2  2  
 2 Scott Harrington         Zachary Werenski         50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dylan Larkin             Jonathan Huberdeau       Nikita Kucherov          Aaron Ekblad             Zachary Werenski         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nikita Kucherov          Zach Sanford             Alan Quine               Aaron Ekblad             Joel Edmundson           

<b>Goaltenders</b>
Starting : Andrey Vasilevskiy       
Backup : Frederik Andersen        

<b>Extra Forwards</b>
Normal : Nikita Kucherov, Dylan Larkin, Jonathan Huberdeau - PP : Nikita Kucherov, Dylan Larkin - PK : Dylan Larkin
<b>Extra Defensemen</b>
Normal : Aaron Ekblad, Scott Harrington, Zachary Werenski - PP : Zachary Werenski - PK : Joel Edmundson, Aaron Ekblad
<b>Penalty Shots</b>
Nikita Kucherov, Jonathan Huberdeau, Dylan Larkin, Josh Anderson, Kyle Clifford
<b>Custom OT Lines Forwards</b>
Nikita Kucherov, Dylan Larkin, Jonathan Huberdeau, Nick Bjugstad, Josh Anderson, Brendan Perlini, Alan Quine, Kyle Clifford, Dana Tyrell, Zach Sanford
<b>Custom OT Lines Defensemen</b>
Aaron Ekblad, Scott Harrington, Zachary Werenski, Madison Bowey, Rasmus Sandin

<b>Scratches</b>
Joe Veleno (Healthy), Ville Husso (Healthy)</pre></div>
<h1 class="TeamLinesPro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             Anthony Mantha           35     0   1  4  
 2 Jordan Staal             Kevin Fiala              Corey Perry              33     0   1  4  
 3 Tyler Bozak              Miles Wood               Vincent Trocheck         19     1   3  1  
 4 Jordan Martinook         Kevin Hayes              Brett Ritchie            13     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Thomas Chabot                                     35     0   3  2  
 2 Mark Pysyk               Derek Forbort                                     35     0   4  1  
 3 Rasmus Andersson         Ben Hutton                                        30     0   3  2  
 4 Drew Doughty             Mark Pysyk                                        0      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             Corey Perry              60     0   0  5  
 2 Jordan Staal             Kevin Fiala              Anthony Mantha           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Ben Hutton                                        60     0   1  4  
 2 Mark Pysyk               Rasmus Andersson                                  40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Staal             Kevin Hayes              60     0   5  0  
 2 Tyler Bozak              Brett Ritchie            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derek Forbort            Mark Pysyk               60     2   3  0  
 2 Drew Doughty             Thomas Chabot            40     2   3  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Staal                                      60     0   5  0  
 2 Anze Kopitar                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derek Forbort            Mark Pysyk               60     1   4  0  
 2 Drew Doughty             Thomas Chabot            40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Staal             Corey Perry              50     1   2  2  
 2 Anze Kopitar             Jeff Skinner             50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Derek Forbort            50     1   3  1  
 2 Thomas Chabot            Mark Pysyk               50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Jeff Skinner             Corey Perry              Drew Doughty             Mark Pysyk               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Staal             Tyler Bozak              Brett Ritchie            Drew Doughty             Derek Forbort            

<b>Goaltenders</b>
Starting : Michal Neuvirth          
Backup : Philipp Grubauer         

<b>Extra Forwards</b>
Normal : Vincent Trocheck, Jordan Staal, Jordan Martinook - PP : Vincent Trocheck, Anthony Mantha - PK : Anze Kopitar
<b>Extra Defensemen</b>
Normal : Drew Doughty, Derek Forbort, Mark Pysyk - PP : Mark Pysyk - PK : Drew Doughty, Thomas Chabot
<b>Penalty Shots</b>
Jeff Skinner, Anze Kopitar, Corey Perry, Anthony Mantha, Jordan Staal
<b>Custom OT Lines Forwards</b>
Jeff Skinner, Anze Kopitar, Anthony Mantha, Jordan Staal, Corey Perry, Vincent Trocheck, Kevin Fiala, Tyler Bozak, Brett Ritchie, Kevin Hayes
<b>Custom OT Lines Defensemen</b>
Drew Doughty, Derek Forbort, Thomas Chabot, Mark Pysyk, Ben Hutton

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Blake Wheeler            Kevin Labanc             Jake Virtanen            37     1   2  2  
 2 Dmitrij Jaskin           Sven Andrighetto         JC Lipon                 29     1   2  2  
 3 Justin Kloos             James Van Riemsdyk       Andreas Athanasiou       24     1   2  2  
 4 Byron Froese             Brandon McMillan         Joe Pavelski             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shane Hanna              Matt Dumba                                        35     1   2  2  
 2 Ryan Murphy              Neal Pionk                                        35     1   2  2  
 3 Colby Cohen              Dylan Demelo                                      20     1   2  2  
 4 Ryan Murphy              Matt Dumba                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Blake Wheeler            Kevin Labanc             JC Lipon                 60     1   2  2  
 2 Dmitrij Jaskin           Andreas Athanasiou       Jake Virtanen            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Dumba               Ryan Murphy                                       60     1   2  2  
 2 Neal Pionk               Sven Andrighetto                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Byron Froese             Joe Pavelski             60     1   2  2  
 2 Blake Wheeler            Jake Virtanen            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dylan Demelo             Neal Pionk               60     1   2  2  
 2 Shane Hanna              Colby Cohen              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Byron Froese                                      60     1   2  2  
 2 Joe Pavelski                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dylan Demelo             Neal Pionk               60     1   2  2  
 2 Shane Hanna              Colby Cohen              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Blake Wheeler            Kevin Labanc             60     1   2  2  
 2 Andreas Athanasiou       Sven Andrighetto         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shane Hanna              Matt Dumba               60     1   2  2  
 2 Neal Pionk               Ryan Murphy              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Blake Wheeler            Kevin Labanc             JC Lipon                 Ryan Murphy              Matt Dumba               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Byron Froese             Joe Pavelski             Blake Wheeler            Neal Pionk               Dylan Demelo             

<b>Goaltenders</b>
Starting : Thatcher Demko           
Backup : Petr Mrazek              

<b>Extra Forwards</b>
Normal : Andreas Athanasiou, Blake Wheeler, Kevin Labanc - PP : Sven Andrighetto, Blake Wheeler - PK : Jake Virtanen
<b>Extra Defensemen</b>
Normal : Ryan Murphy, Matt Dumba, Neal Pionk - PP : Neal Pionk - PK : Shane Hanna, Dylan Demelo
<b>Penalty Shots</b>
Blake Wheeler, Kevin Labanc, Sven Andrighetto, Andreas Athanasiou, Dmitrij Jaskin
<b>Custom OT Lines Forwards</b>
Blake Wheeler, Kevin Labanc, Sven Andrighetto, Andreas Athanasiou, Dmitrij Jaskin, JC Lipon, Justin Kloos, James Van Riemsdyk, Joe Pavelski, Jake Virtanen
<b>Custom OT Lines Defensemen</b>
Matt Dumba, Ryan Murphy, Neal Pionk, Shane Hanna, Dylan Demelo

<b>Scratches</b>
Aaron Ness (Separated Right Shoulder Injury), Erik Foley (Healthy), Devin Shore (Healthy), Cale Fleury (Healthy)</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nolan Patrick            Filip Forsberg           Anthony Duclair          33     0   1  4  
 2 Danton Heinen            Martin Reway             Jakub Vrana              26     0   2  3  
 3 Ryan Kesler              Sam Lafferty             Christophe Lalancette    23     0   3  2  
 4 Sidney Crosby            Yan-Pavel Laplante       Greg McKegg              18     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Brandon Montour                                   35     0   3  2  
 2 Roman Josi               Julius Honka                                      30     0   3  2  
 3 Jan Rutta                Christian Wolanin                                 30     0   2  3  
 4 Alex Pietrangelo         Brandon Montour                                   5      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Filip Forsberg           Anthony Duclair          70     0   0  5  
 2 Danton Heinen            Martin Reway             Jakub Vrana              30     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Brandon Montour                                   70     0   1  4  
 2 Julius Honka             Roman Josi                                        30     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Kesler              Jakub Vrana              60     1   4  0  
 2 Christophe Lalancette    Sam Lafferty             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Montour          Jan Rutta                50     1   4  0  
 2 Alex Pietrangelo         Roman Josi               50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan Kesler                                       65     0   5  0  
 2 Christophe Lalancette                             35     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Montour          Jan Rutta                50     0   5  0  
 2 Alex Pietrangelo         Roman Josi               50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Kesler              Danton Heinen            50     0   3  2  
 2 Sidney Crosby            Filip Forsberg           50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Brandon Montour          50     1   2  2  
 2 Roman Josi               Jan Rutta                50     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Filip Forsberg           Danton Heinen            Alex Pietrangelo         Brandon Montour          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Filip Forsberg           Danton Heinen            Alex Pietrangelo         Brandon Montour          

<b>Goaltenders</b>
Starting : Pavel Francouz           
Backup : Ilya Samsonov            

<b>Extra Forwards</b>
Normal : Sidney Crosby, Filip Forsberg, Danton Heinen - PP : Sidney Crosby, Filip Forsberg - PK : Sidney Crosby
<b>Extra Defensemen</b>
Normal : Alex Pietrangelo, Brandon Montour, Roman Josi - PP : Alex Pietrangelo - PK : Alex Pietrangelo, Brandon Montour
<b>Penalty Shots</b>
Sidney Crosby, Ryan Kesler, Filip Forsberg, Anthony Duclair, Danton Heinen
<b>Custom OT Lines Forwards</b>
Sidney Crosby, Filip Forsberg, Danton Heinen, Anthony Duclair, Jakub Vrana, Martin Reway, Ryan Kesler, Christophe Lalancette, Sam Lafferty, Yan-Pavel Laplante
<b>Custom OT Lines Defensemen</b>
Alex Pietrangelo, Brandon Montour, Roman Josi, Jan Rutta, Julius Honka

<b>Scratches</b>
Gaetan Haas (Upper Body Injury)</pre></div>
<h1 class="TeamLinesPro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Reinhart             Kirill Kaprizov          Oliver Bjorkstrand       35     0   2  3  
 2 Mitch Marner             Peter Trainor            Johan Larsson            32     0   2  3  
 3 Mikael Backlund          Taro Hirose              Brett Pollock            23     0   2  3  
 4 Freddie Hamilton         Trevor Moore             Karson Kuhlman           10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Faulk             Tyson Barrie                                      36     1   3  1  
 2 Dmitri Orlov             Brett Pesce                                       34     1   3  1  
 3 Marc-Andre Bourdon       Alec Martinez                                     30     1   3  1  
 4 Dmitri Orlov             Justin Faulk                                      0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mitch Marner             Kirill Kaprizov          Oliver Bjorkstrand       60     0   0  5  
 2 Sam Reinhart             Peter Trainor            Johan Larsson            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Orlov             Justin Faulk                                      60     0   0  5  
 2 Alec Martinez            Tyson Barrie                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sam Reinhart             Karson Kuhlman           50     0   5  0  
 2 Freddie Hamilton         Trevor Moore             50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc-Andre Bourdon       Brett Pesce              50     0   5  0  
 2 Alec Martinez            Justin Faulk             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mitch Marner                                      50     0   5  0  
 2 Freddie Hamilton                                  50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc-Andre Bourdon       Brett Pesce              50     0   5  0  
 2 Alec Martinez            Justin Faulk             50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mitch Marner             Oliver Bjorkstrand       50     0   2  3  
 2 Sam Reinhart             Kirill Kaprizov          50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Tyson Barrie             50     1   2  2  
 2 Dmitri Orlov             Alec Martinez            50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mitch Marner             Oliver Bjorkstrand       Sam Reinhart             Dmitri Orlov             Justin Faulk             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Reinhart             Brett Pollock            Oliver Bjorkstrand       Alec Martinez            Justin Faulk             

<b>Goaltenders</b>
Starting : Tristan Jarry            
Backup : Carter Hart              

<b>Extra Forwards</b>
Normal : Mitch Marner, Sam Reinhart, Johan Larsson - PP : Mikael Backlund, Sam Reinhart - PK : Mikael Backlund
<b>Extra Defensemen</b>
Normal : Dmitri Orlov, Justin Faulk, Tyson Barrie - PP : Brett Pesce - PK : Dmitri Orlov, Tyson Barrie
<b>Penalty Shots</b>
Mitch Marner, Kirill Kaprizov, Sam Reinhart, Karson Kuhlman, Oliver Bjorkstrand
<b>Custom OT Lines Forwards</b>
Mitch Marner, Kirill Kaprizov, Sam Reinhart, Oliver Bjorkstrand, Johan Larsson, Peter Trainor, Mikael Backlund, Taro Hirose, Karson Kuhlman, Freddie Hamilton
<b>Custom OT Lines Defensemen</b>
Dmitri Orlov, Justin Faulk, Tyson Barrie, Brett Pesce, Alec Martinez

<b>Scratches</b>
Darren Helm (Broken Bone (Left Ankle) Injury)</pre></div>
<h1 class="TeamLinesPro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Jared McCann             Ondrej Kase              35     1   1  3  
 2 Kevin Stenlund           Alexander Semin          Reilly Smith             30     1   1  3  
 3 Victor Rask              Henrik Samuelsson        Roope Hintz              20     2   1  2  
 4 Blake Coleman            Alexander Delnov         Adam Gaudette            15     3   1  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Trouba             Travis Dermott                                    35     1   1  3  
 2 Mark Katic               Will Butcher                                      30     1   1  3  
 3 Steven Santini           T.J. Brennan                                      20     2   1  2  
 4 Jacob Trouba             Travis Dermott                                    15     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Jared McCann             Ondrej Kase              60     1   1  3  
 2 Kevin Stenlund           Alexander Semin          Reilly Smith             40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Trouba             Will Butcher                                      60     1   1  3  
 2 Travis Dermott           T.J. Brennan                                      40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Adam Gaudette            Jack Eichel              60     1   3  1  
 2 Jared McCann             Victor Rask              40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Travis Dermott           60     1   3  1  
 2 Mark Katic               Steven Santini           40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jared McCann                                      60     1   2  2  
 2 Kevin Stenlund                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Travis Dermott           60     1   2  2  
 2 Mark Katic               Steven Santini           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Eichel              Reilly Smith             60     1   2  2  
 2 Jared McCann             Victor Rask              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Travis Dermott           60     1   2  2  
 2 Mark Katic               Will Butcher             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Jared McCann             Ondrej Kase              Jacob Trouba             Will Butcher             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Jared McCann             Adam Gaudette            Jacob Trouba             Steven Santini           

<b>Goaltenders</b>
Starting : Ilya Sorokin             
Backup : Keith Kinkaid            

<b>Extra Forwards</b>
Normal : Kevin Stenlund, Alexander Semin, Reilly Smith - PP : Kevin Stenlund, Alexander Semin - PK : Reilly Smith
<b>Extra Defensemen</b>
Normal : Steven Santini, T.J. Brennan, Mark Katic - PP : Steven Santini - PK : T.J. Brennan, Mark Katic
<b>Penalty Shots</b>
Jack Eichel, Alexander Semin, Jared McCann, Victor Rask, Reilly Smith
<b>Custom OT Lines Forwards</b>
Jack Eichel, Adam Gaudette, Jared McCann, Victor Rask, Reilly Smith, Henrik Samuelsson, Ondrej Kase, Kevin Stenlund, Alexander Semin, Roope Hintz
<b>Custom OT Lines Defensemen</b>
Jacob Trouba, Travis Dermott, Mark Katic, Will Butcher, Steven Santini

<b>Scratches</b>
Patrice Bergeron (Sprained Left Knee Injury), Alexander Radulov (Concussion Injury), Thomas Hickey (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Strome             Dominik Kubalik          Mark Stone               35     0   1  4  
 2 Vince Hinostroza         Nick Cousins             Tyson Baillie            30     0   1  4  
 3 Lars Eller               Nikita Scherbak          Tom Wilson               20     2   1  2  
 4 Patrick Holland          Ondrej Palat             David Krejci             15     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vince Dunn               Erik Gudbranson                                   35     2   1  2  
 2 Noah Juulsen             Seth Jones                                        30     1   2  2  
 3 Jyrki Jokipakka          Joakim Ryan                                       25     1   3  1  
 4 Seth Jones               Erik Gudbranson                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Strome             Dominik Kubalik          Mark Stone               60     0   0  5  
 2 Tyson Baillie            Nick Cousins             David Krejci             40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Seth Jones               Erik Gudbranson                                   60     0   0  5  
 2 Vince Dunn               Noah Juulsen                                      40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Krejci             Tom Wilson               60     1   2  2  
 2 Tyson Baillie            Patrick Holland          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Gudbranson          Seth Jones               60     1   2  2  
 2 Noah Juulsen             Vince Dunn               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tom Wilson                                        60     1   2  2  
 2 David Krejci                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Gudbranson          Seth Jones               60     1   2  2  
 2 Vince Dunn               Noah Juulsen             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyson Baillie            Mark Stone               60     1   2  2  
 2 Dominik Kubalik          David Krejci             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Gudbranson          Seth Jones               60     1   2  2  
 2 Noah Juulsen             Vince Dunn               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dylan Strome             Nick Cousins             Mark Stone               Vince Dunn               Seth Jones               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyson Baillie            Tom Wilson               David Krejci             Erik Gudbranson          Joakim Ryan              

<b>Goaltenders</b>
Starting : Jake Paterson            
Backup : Ben Bishop               

<b>Extra Forwards</b>
Normal : Nikita Scherbak, Lars Eller, Mark Stone - PP : Tyson Baillie, Dylan Strome - PK : Patrick Holland
<b>Extra Defensemen</b>
Normal : Seth Jones, Noah Juulsen, Erik Gudbranson - PP : Erik Gudbranson - PK : Erik Gudbranson, Vince Dunn
<b>Penalty Shots</b>
Dominik Kubalik, Tom Wilson, Seth Jones, Nick Cousins, Lars Eller
<b>Custom OT Lines Forwards</b>
Dylan Strome, Mark Stone, Dominik Kubalik, Nick Cousins, Patrick Holland, Tyson Baillie, Lars Eller, Nikita Scherbak, David Krejci, Tom Wilson
<b>Custom OT Lines Defensemen</b>
Seth Jones, Vince Dunn, Erik Gudbranson, Noah Juulsen, Joakim Ryan

<b>Scratches</b>
Robbie Russo (Healthy), Michael Frolik (Healthy), Gabriel Bourque (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Point            J.T. Miller              Nail Yakupov             29     0   1  4  
 2 Aleksander Barkov        Travis Konecny           Viktor Arvidsson         28     0   1  4  
 3 Carter Verhaeghe         Jesper Bratt             Tyler Bertuzzi           28     1   1  3  
 4 Denis Malgin             Erik Haula               Aleksander Barkov        15     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan McDonagh            Shea Theodore                                     34     1   2  2  
 2 Dylan McIlrath           Ivan Provorov                                     33     1   2  2  
 3 Griffin Reinhart         Adam Pelech                                       33     1   2  2  
 4 Ryan McDonagh            Shea Theodore                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Point            Nail Yakupov             Viktor Arvidsson         60     0   0  5  
 2 Aleksander Barkov        J.T. Miller              Travis Konecny           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Theodore            Ivan Provorov                                     60     0   1  4  
 2 Ryan McDonagh            Dylan McIlrath                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Tyler Bertuzzi           60     1   4  0  
 2 Brayden Point            Denis Malgin             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan McDonagh            Dylan McIlrath           60     1   4  0  
 2 Griffin Reinhart         Shea Theodore            40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Aleksander Barkov                                 60     0   5  0  
 2 Brayden Point                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan McDonagh            Dylan McIlrath           60     0   5  0  
 2 Griffin Reinhart         Ivan Provorov            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Brayden Point            60     1   2  2  
 2 Denis Malgin             Jesper Bratt             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan McDonagh            Dylan McIlrath           60     1   2  2  
 2 Griffin Reinhart         Ivan Provorov            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brayden Point            Nail Yakupov             Aleksander Barkov        Ivan Provorov            Shea Theodore            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        J.T. Miller              Denis Malgin             Ryan McDonagh            Dylan McIlrath           

<b>Goaltenders</b>
Starting : Jack Campbell            
Backup : Anthony Stolarz          

<b>Extra Forwards</b>
Normal : J.T. Miller, Aleksander Barkov, Brayden Point - PP : Aleksander Barkov, Jesper Bratt - PK : Tyler Bertuzzi
<b>Extra Defensemen</b>
Normal : Griffin Reinhart, Dylan McIlrath, Ryan McDonagh - PP : Griffin Reinhart - PK : Shea Theodore, Ivan Provorov
<b>Penalty Shots</b>
Nail Yakupov, Aleksander Barkov, Brayden Point, Viktor Arvidsson, J.T. Miller
<b>Custom OT Lines Forwards</b>
Brayden Point, Aleksander Barkov, Nail Yakupov, Viktor Arvidsson, J.T. Miller, Erik Haula, Travis Konecny, Tyler Bertuzzi, Jesper Bratt, Denis Malgin
<b>Custom OT Lines Defensemen</b>
Ryan McDonagh, Shea Theodore, Dylan McIlrath, Griffin Reinhart, Ivan Provorov

<b>Scratches</b>
Nikolay Goldobin (Healthy), Jake McCabe (Healthy), Alexander Wennberg (Strained Right Elbow Injury)</pre></div>
<h1 class="TeamLinesPro_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jason Spezza             Zach Parise              Jonathan Drouin          37     0   1  4  
 2 Sam Bennett              Tyson Jost               Patric Hornqvist         35     0   1  4  
 3 Zack Phillips            Devante Smith-Pelly      Jack Roslovic            20     1   1  3  
 4 Evan Rodrigues           Zack Phillips            Martin Frk               8      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Edler          Jamie McBain                                      40     0   3  2  
 2 Jakob Chychrun           Alexander Urbom                                   30     0   3  2  
 3 Brayden McNabb           Magnus Nygren                                     20     0   4  1  
 4 Magnus Nygren            Jamie McBain                                      10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jason Spezza             Sam Bennett              Jonathan Drouin          57     0   1  4  
 2 Zack Phillips            Devante Smith-Pelly      Patric Hornqvist         43     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Edler          Zach Parise                                       57     0   1  4  
 2 Jakob Chychrun           Martin Frk                                        43     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jason Spezza             Devante Smith-Pelly      60     0   4  1  
 2 Zack Phillips            Zach Parise              40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Alexander Urbom          60     0   3  2  
 2 Brayden McNabb           Jakob Chychrun           40     0   3  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jason Spezza                                      60     0   4  1  
 2 Evan Rodrigues                                    40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Alexander Urbom          60     0   4  1  
 2 Jakob Chychrun           Brayden McNabb           40     0   4  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sam Bennett              Jonathan Drouin          60     0   2  3  
 2 Jason Spezza             Patric Hornqvist         40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Jamie McBain             60     0   3  2  
 2 Jakob Chychrun           Brayden McNabb           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jason Spezza             Jonathan Drouin          Sam Bennett              Alexander Edler          Steven Kampfer           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Bennett              Zach Parise              Devante Smith-Pelly      Alexander Edler          Alexander Urbom          

<b>Goaltenders</b>
Starting : Pekka Rinne              
Backup : Benjamin Conz            

<b>Extra Forwards</b>
Normal : Sam Bennett, Jonathan Drouin, Devante Smith-Pelly - PP : Patric Hornqvist, Jack Roslovic - PK : Evan Rodrigues
<b>Extra Defensemen</b>
Normal : Alexander Edler, Alexander Urbom, Jakob Chychrun - PP : Jamie McBain - PK : Alexander Urbom, Alexander Edler
<b>Penalty Shots</b>
Zach Parise, Patric Hornqvist, Jason Spezza, Jonathan Drouin, Jack Roslovic
<b>Custom OT Lines Forwards</b>
Jonathan Drouin, Jack Roslovic, Zach Parise, Patric Hornqvist, Sam Bennett, Tyson Jost, Devante Smith-Pelly, Jason Spezza, Martin Frk, Evan Rodrigues
<b>Custom OT Lines Defensemen</b>
Alexander Edler, Jakob Chychrun, Brayden McNabb, Alexander Urbom, Steven Kampfer

<b>Scratches</b>
Brogan Rafferty (Healthy), Kevin Roy (Healthy), Ilya Konovalov (Healthy)</pre></div>
<h1 class="TeamLinesPro_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Tomas Hertl              Nick Schmaltz            37     0   0  5  
 2 Ryan Nugent-Hopkins      Curtis Lazar             Andrei Svechnikov        33     0   0  5  
 3 Elias Pettersson         Joakim Nordstrom         Andreas Johnsson         15     0   2  3  
 4 Alexis Loiseau           Brendan Ranford          Nick Shore               15     0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Larsson             Oscar Klefbom                                     36     0   1  4  
 2 Ryan Murray              Travis Brown                                      35     0   1  4  
 3 David Rundblad           Mark Giordano                                     29     0   1  4  
 4 Adam Larsson             Oscar Klefbom                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Curtis Lazar             Tomas Hertl              60     0   0  5  
 2 Ryan Nugent-Hopkins      Andrei Svechnikov        Nick Schmaltz            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Larsson             Oscar Klefbom                                     60     0   0  5  
 2 Ryan Murray              Travis Brown                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Shore               Joakim Nordstrom         60     0   5  0  
 2 Alexis Loiseau           Brendan Ranford          40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Giordano            David Rundblad           60     0   5  0  
 2 Ryan Murray              Travis Brown             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Claude Giroux                                     60     0   5  0  
 2 Ryan Nugent-Hopkins                               40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Larsson             Ryan Murray              60     0   5  0  
 2 Oscar Klefbom            Travis Brown             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Claude Giroux            Ryan Nugent-Hopkins      60     0   0  5  
 2 Tomas Hertl              Curtis Lazar             40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Larsson             Oscar Klefbom            60     0   0  5  
 2 Ryan Murray              Travis Brown             40     0   0  5  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Ryan Nugent-Hopkins      Tomas Hertl              Adam Larsson             Ryan Murray              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Ryan Nugent-Hopkins      Tomas Hertl              Adam Larsson             Ryan Murray              

<b>Goaltenders</b>
Starting : Jonathan Quick           
Backup : Jakub Kovar              

<b>Extra Forwards</b>
Normal : Nick Shore, Joakim Nordstrom, Andrei Svechnikov - PP : Nick Shore, Joakim Nordstrom - PK : Andrei Svechnikov
<b>Extra Defensemen</b>
Normal : Mark Giordano, David Rundblad, Ryan Murray - PP : Mark Giordano - PK : David Rundblad, Ryan Murray
<b>Penalty Shots</b>
Claude Giroux, Ryan Nugent-Hopkins, Tomas Hertl, Andrei Svechnikov, Elias Pettersson
<b>Custom OT Lines Forwards</b>
Claude Giroux, Ryan Nugent-Hopkins, Tomas Hertl, Curtis Lazar, Andreas Johnsson, Nick Schmaltz, Joakim Nordstrom, Andrei Svechnikov, Brendan Ranford, Elias Pettersson
<b>Custom OT Lines Defensemen</b>
Adam Larsson, Oscar Klefbom, Ryan Murray, Travis Brown, Mark Giordano

<b>Scratches</b>
John Moore (Healthy)</pre></div>
<h1 class="TeamLinesPro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Derek Stepan             Bobby Ryan               Matt Duchene             37     0   0  5  
 2 Nicklas Backstrom        Vladimir Tarasenko       Brandon Sutter           37     0   0  5  
 3 Kyle Turris              Henrik Zetterberg        Jonathan Audy-Marchessaul21     0   2  3  
 4 Stephen Weiss            Matt Martin              Wayne Simmonds           5      3   1  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kristopher Letang        Tyler Cuma                                        35     0   2  3  
 2 Andrew O'Brien           Tim Erixon                                        35     0   2  3  
 3 Karl Alzner              Mike Green                                        20     0   3  2  
 4 Tim Erixon               Karl Alzner                                       10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Bobby Ryan               Matt Duchene             55     1   0  4  
 2 Derek Stepan             Kyle Turris              Brandon Sutter           45     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kristopher Letang        Mike Green                                        55     0   1  4  
 2 Tim Erixon               Henrik Zetterberg                                 45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Backstrom        Brandon Sutter           55     0   5  0  
 2 Henrik Zetterberg        Kyle Turris              45     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Cuma               Kristopher Letang        55     1   3  1  
 2 Tim Erixon               Andrew O'Brien           45     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Derek Stepan                                      55     1   1  3  
 2 Matt Duchene                                      45     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Cuma               Tim Erixon               55     1   1  3  
 2 Andrew O'Brien           Karl Alzner              45     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Stepan             Matt Duchene             50     0   2  3  
 2 Nicklas Backstrom        Brandon Sutter           50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mike Green               Kristopher Letang        50     1   1  3  
 2 Tim Erixon               Jonathan Audy-Marchessaul50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Derek Stepan             Bobby Ryan               Matt Duchene             Kristopher Letang        Tim Erixon               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Bobby Ryan               Matt Duchene             Kristopher Letang        Karl Alzner              

<b>Goaltenders</b>
Starting : John Gibson              
Backup : Cam Ward                 

<b>Extra Forwards</b>
Normal : Matt Duchene, Derek Stepan, Bobby Ryan - PP : Wayne Simmonds, Matt Duchene - PK : Matt Duchene
<b>Extra Defensemen</b>
Normal : Kristopher Letang, Tim Erixon, Tyler Cuma - PP : Karl Alzner - PK : Andrew O'Brien, Mike Green
<b>Penalty Shots</b>
Derek Stepan, Nicklas Backstrom, Brandon Sutter, Bobby Ryan, Matt Duchene
<b>Custom OT Lines Forwards</b>
Matt Duchene, Vladimir Tarasenko, Bobby Ryan, Nicklas Backstrom, Brandon Sutter, Jonathan Audy-Marchessault, Henrik Zetterberg, Wayne Simmonds, Kyle Turris, Derek Stepan
<b>Custom OT Lines Defensemen</b>
Mike Green, Tim Erixon, Karl Alzner, Tyler Cuma, Kristopher Letang

<b>Scratches</b>
Ryan Wilson (Back Spasms Injury), Mac Bennett (Fractured Left Foot Injury)</pre></div>
<h1 class="TeamLinesPro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Colin Wilson             Jake Guentzel            Brett Connolly           25     0   0  5  
 2 Ryan Getzlaf             T.J. Oshie               Connor Brown             25     0   0  5  
 3 Tyler Motte              Lukas Sedlak             Ilya Kovalchuk           25     0   2  3  
 4 Colin Wilson             Alex Tuch                Jack Evans               25     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser                                      25     1   2  2  
 2 Connor Murphy            Mike Reilly                                       25     1   2  2  
 3 Mattias Ekholm           Brett Kulak                                       25     1   2  2  
 4 Brendan Smith            Dan DeKeyser                                      25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Colin Wilson             Jake Guentzel            Brett Connolly           60     1   2  2  
 2 Ryan Getzlaf             T.J. Oshie               Connor Brown             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser                                      60     1   2  2  
 2 Connor Murphy            Mike Reilly                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colin Wilson             Jake Guentzel            60     1   2  2  
 2 Ryan Getzlaf             Brett Connolly           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser             60     1   2  2  
 2 Connor Murphy            Mike Reilly              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Colin Wilson                                      60     1   2  2  
 2 Jake Guentzel                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser             60     1   2  2  
 2 Connor Murphy            Mike Reilly              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colin Wilson             Jake Guentzel            60     1   2  2  
 2 Ryan Getzlaf             Brett Connolly           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser             60     1   2  2  
 2 Connor Murphy            Mike Reilly              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Colin Wilson             Jake Guentzel            Brett Connolly           Brendan Smith            Dan DeKeyser             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Colin Wilson             Jake Guentzel            Brett Connolly           Brendan Smith            Dan DeKeyser             

<b>Goaltenders</b>
Starting : Simeon Varlamov          
Backup : Kari Lehtonen            

<b>Extra Forwards</b>
Normal : Colin Wilson, Ilya Kovalchuk, Alex Tuch - PP : Colin Wilson, Ilya Kovalchuk - PK : Alex Tuch
<b>Extra Defensemen</b>
Normal : Mattias Ekholm, Brett Kulak, Connor Murphy - PP : Mattias Ekholm - PK : Brett Kulak, Connor Murphy
<b>Penalty Shots</b>
Colin Wilson, Jake Guentzel, Ryan Getzlaf, Brett Connolly, Connor Brown
<b>Custom OT Lines Forwards</b>
Colin Wilson, Jake Guentzel, Ryan Getzlaf, Brett Connolly, Connor Brown, T.J. Oshie, Lukas Sedlak, Ilya Kovalchuk, Alex Tuch, Tyler Motte
<b>Custom OT Lines Defensemen</b>
Brendan Smith, Dan DeKeyser, Connor Murphy, Mike Reilly, Mattias Ekholm

<b>Scratches</b>
Maxime Comtois (Healthy), Zach Aston-Reese (Healthy)</pre></div>
<h1 class="TeamLinesPro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Paul Stastny             Timo Meier               Clayton Keller           40     0   0  5  
 2 Jacob Josefson           Tyler Ennis              Matthew Nieto            35     1   1  3  
 3 Radek Faksa              A.J. Greer               Brock McGinn             15     1   3  1  
 4 Maxime St-Cyr            Yanni Gourde             Artturi Lehkonen         10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jack Johnson             Samuel Morin                                      40     1   3  1  
 2 Keith Yandle             Chris Bigras                                      40     1   2  2  
 3 Frank Corrado            Nikolas Brouillard                                20     1   2  2  
 4 Samuel Morin             Nikolas Brouillard                                0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Paul Stastny             Clayton Keller           Timo Meier               60     0   0  5  
 2 Tyler Ennis              A.J. Greer               Matthew Nieto            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jack Johnson             Chris Bigras                                      60     1   1  3  
 2 Keith Yandle             Frank Corrado                                     40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Radek Faksa              A.J. Greer               60     1   4  0  
 2 Maxime St-Cyr            Matthew Nieto            40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Johnson             Samuel Morin             60     1   4  0  
 2 Frank Corrado            Nikolas Brouillard       40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Radek Faksa                                       60     1   4  0  
 2 Jacob Josefson                                    40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Johnson             Samuel Morin             60     1   4  0  
 2 Keith Yandle             Frank Corrado            40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob Josefson           Timo Meier               60     1   2  2  
 2 Radek Faksa              Artturi Lehkonen         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Morin             Keith Yandle             60     1   2  2  
 2 Chris Bigras             Frank Corrado            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Paul Stastny             Clayton Keller           Timo Meier               Jack Johnson             Keith Yandle             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Radek Faksa              Matthew Nieto            Brock McGinn             Jack Johnson             Samuel Morin             

<b>Goaltenders</b>
Starting : Jaroslav Halak           
Backup : Marek Mazanec            

<b>Extra Forwards</b>
Normal : Artturi Lehkonen, Jacob Josefson, Yanni Gourde - PP : Artturi Lehkonen, Jacob Josefson - PK : A.J. Greer
<b>Extra Defensemen</b>
Normal : Jack Johnson, Keith Yandle, Nikolas Brouillard - PP : Jack Johnson - PK : Chris Bigras, Nikolas Brouillard
<b>Penalty Shots</b>
Clayton Keller, Tyler Ennis, Paul Stastny, Timo Meier, Matthew Nieto
<b>Custom OT Lines Forwards</b>
Paul Stastny, Timo Meier, Clayton Keller, Matthew Nieto, Jacob Josefson, Tyler Ennis, Radek Faksa, A.J. Greer, Yanni Gourde, Artturi Lehkonen
<b>Custom OT Lines Defensemen</b>
Jack Johnson, Keith Yandle, Frank Corrado, Chris Bigras, Samuel Morin

<b>Scratches</b>
Alexis Arsenault (Healthy), Jean-Sébastien Dea (Healthy)</pre></div>
<h1 class="TeamLinesPro_SEA"><a id="SeattleKraken">Seattle Kraken</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Kraken Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#SeattleKraken">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#SeattleKraken">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#SeattleKraken">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#SeattleKraken">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#SeattleKraken">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#SeattleKraken">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#SeattleKraken">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#SeattleKraken">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#SeattleKraken">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#SeattleKraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleKraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleKraken" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Schenn           Max Pacioretty           Sven Baertschi           35     0   1  4  
 2 Nicolas Petan            Nikita Gusev             Brendan Leipsic          30     0   1  4  
 3 Austin Watson            Stanislav Galiev         Andrew Shaw              25     0   1  4  
 4 Filip Chlapik            Curtis Hamilton          David Kampf              10     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 David Musil              Noah Hanifin                                      37     0   1  4  
 2 Jake Dotchin             Darnell Nurse                                     32     0   1  4  
 3 Andreas Borgman          Colin Miller                                      31     0   2  3  
 4 Andreas Borgman          Jake Dotchin                                      0      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Schenn           Nikita Gusev             Stanislav Galiev         55     0   0  5  
 2 Nicolas Petan            Max Pacioretty           Sven Baertschi           45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake Dotchin             Noah Hanifin                                      60     0   0  5  
 2 David Musil              Darnell Nurse                                     40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Austin Watson            Curtis Hamilton          60     0   5  0  
 2 David Kampf              Andrew Shaw              40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Dotchin             Noah Hanifin             60     0   5  0  
 2 David Musil              Colin Miller             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Austin Watson                                     60     0   5  0  
 2 David Kampf                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Musil              Andreas Borgman          60     0   5  0  
 2 Jake Dotchin             Noah Hanifin             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Filip Chlapik            Curtis Hamilton          60     0   0  5  
 2 David Kampf              Andrew Shaw              40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Dotchin             Andreas Borgman          60     0   1  4  
 2 David Musil              Colin Miller             40     0   1  4  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brayden Schenn           Nicolas Petan            Sven Baertschi           Noah Hanifin             Darnell Nurse            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Austin Watson            Curtis Hamilton          David Kampf              David Musil              Jake Dotchin             

<b>Goaltenders</b>
Starting : Robin Lehner             
Backup : David Rittich            

<b>Extra Forwards</b>
Normal : Andrew Shaw, Curtis Hamilton, Max Pacioretty - PP : Filip Chlapik, Stanislav Galiev - PK : Brendan Leipsic
<b>Extra Defensemen</b>
Normal : Noah Hanifin, Jake Dotchin, Andreas Borgman - PP : Andreas Borgman - PK : Andreas Borgman, Darnell Nurse
<b>Penalty Shots</b>
Max Pacioretty, Stanislav Galiev, Nikita Gusev, Sven Baertschi, Brayden Schenn
<b>Custom OT Lines Forwards</b>
Brayden Schenn, Sven Baertschi, David Kampf, Brendan Leipsic, Nicolas Petan, Max Pacioretty, Austin Watson, Stanislav Galiev, Curtis Hamilton, Andrew Shaw
<b>Custom OT Lines Defensemen</b>
Noah Hanifin, Darnell Nurse, Colin Miller, David Musil, Jake Dotchin

<b>Scratches</b>
Brendan Burke (Healthy)</pre></div>
<h1 class="TeamLinesPro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mark Scheifele           Artemi Panarin           Jake DeBrusk             40     0   1  4  
 2 Nathan MacKinnon         Nazem Kadri              Evgeny Kuznetsov         38     0   1  4  
 3 Tomas Plekanec           Tanner Pearson           Theodor Blueger          17     1   2  2  
 4 Evgeny Kuznetsov         Eric Robinson            Jordan Szwarz            5      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Brady Skjei                                       40     0   2  3  
 2 John Klingberg           Ian Cole                                          35     0   2  3  
 3 Adam Almqvist            Matt Roy                                          20     0   4  1  
 4 Brady Skjei              John Klingberg                                    5      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Artemi Panarin           Nathan MacKinnon         55     1   0  4  
 2 Tomas Plekanec           Tanner Pearson           Nazem Kadri              45     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Klingberg           Mark Scheifele                                    55     0   0  5  
 2 Brady Skjei              Jake DeBrusk                                      45     1   0  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tomas Plekanec           Antoine Roussel          57     1   4  0  
 2 Nathan MacKinnon         Tanner Pearson           43     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Ian Cole                 57     0   5  0  
 2 Matt Roy                 Brady Skjei              43     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tomas Plekanec                                    55     1   4  0  
 2 Eric Robinson                                     45     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Almqvist            Brady Skjei              55     1   4  0  
 2 Matt Roy                 John Klingberg           45     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nathan MacKinnon         Nazem Kadri              50     1   2  2  
 2 Evgeny Kuznetsov         Theodor Blueger          50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Artemi Panarin           John Klingberg           50     0   1  4  
 2 Tanner Pearson           Brady Skjei              50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Evgeny Kuznetsov         Nathan MacKinnon         Marc-Edouard Vlasic      John Klingberg           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Tanner Pearson           Nathan MacKinnon         Marc-Edouard Vlasic      Brady Skjei              

<b>Goaltenders</b>
Starting : Tuukka Rask              
Backup : Andrey Makarov           

<b>Extra Forwards</b>
Normal : Nazem Kadri, Evgeny Kuznetsov, Nathan MacKinnon - PP : Theodor Blueger, Eric Robinson - PK : Nathan MacKinnon
<b>Extra Defensemen</b>
Normal : Marc-Edouard Vlasic, Brady Skjei, John Klingberg - PP : John Klingberg - PK : Matt Roy, Marc-Edouard Vlasic
<b>Penalty Shots</b>
Theodor Blueger, Nazem Kadri, Evgeny Kuznetsov, Nathan MacKinnon, Artemi Panarin
<b>Custom OT Lines Forwards</b>
Nathan MacKinnon, Evgeny Kuznetsov, Jake DeBrusk, Nazem Kadri, Brady Skjei, Artemi Panarin, Theodor Blueger, Tomas Plekanec, Jordan Szwarz, Antoine Roussel
<b>Custom OT Lines Defensemen</b>
John Klingberg, Marc-Edouard Vlasic, Brady Skjei, Ian Cole, Matt Roy

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Marcus Johansson         Evander Kane             David Pastrnak           35     0   1  4  
 2 Boone Jenner             Pavel Buchnevich         Charlie Coyle            30     0   2  3  
 3 Ryan Strome              Quinton Howden           Bryan Rust               25     0   2  3  
 4 Patrice Cormier          Ben Smith                Josh Ho-Sang             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Quinn Hughes             Esa Lindell                                       30     0   3  2  
 2 Simon Despres            Nikita Zadorov                                    30     1   3  1  
 3 Brian Dumoulin           P.K. Subban                                       30     1   3  1  
 4 Brian Dumoulin           Simon Despres                                     10     2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Boone Jenner             Evander Kane             David Pastrnak           65     0   0  5  
 2 Marcus Johansson         Ryan Strome              Charlie Coyle            35     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Quinn Hughes             P.K. Subban                                       65     0   0  5  
 2 Esa Lindell              Pavel Buchnevich                                  35     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrice Cormier          Bryan Rust               60     1   3  1  
 2 Boone Jenner             Quinton Howden           40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zadorov           Simon Despres            60     2   3  0  
 2 Esa Lindell              Brian Dumoulin           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Quinton Howden                                    50     0   5  0  
 2 Patrice Cormier                                   50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zadorov           Simon Despres            50     1   4  0  
 2 Esa Lindell              Brian Dumoulin           50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Marcus Johansson         David Pastrnak           55     0   2  3  
 2 Charlie Coyle            Evander Kane             45     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Quinn Hughes             Simon Despres            55     1   3  1  
 2 Esa Lindell              Brian Dumoulin           45     2   3  0  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Boone Jenner             Evander Kane             David Pastrnak           P.K. Subban              Quinn Hughes             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Cormier          Marcus Johansson         Bryan Rust               Nikita Zadorov           Simon Despres            

<b>Goaltenders</b>
Starting : Darcy Kuemper            
Backup : Malcolm Subban           

<b>Extra Forwards</b>
Normal : Quinton Howden, David Pastrnak, Ben Smith - PP : Quinton Howden, Evander Kane - PK : Ben Smith
<b>Extra Defensemen</b>
Normal : Nikita Zadorov, Quinn Hughes, Esa Lindell - PP : Nikita Zadorov - PK : Quinn Hughes, Esa Lindell
<b>Penalty Shots</b>
David Pastrnak, Marcus Johansson, Ryan Strome, Boone Jenner, Evander Kane
<b>Custom OT Lines Forwards</b>
David Pastrnak, Evander Kane, Marcus Johansson, Boone Jenner, Charlie Coyle, Pavel Buchnevich, Ryan Strome, Quinton Howden, Bryan Rust, Patrice Cormier
<b>Custom OT Lines Defensemen</b>
P.K. Subban, Simon Despres, Esa Lindell, Quinn Hughes, Brian Dumoulin

<b>Scratches</b>
Cody Eakin (Healthy)</pre></div>
<h1 class="TeamLinesPro_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jean-Gabriel Pageau      Sebastian Aho            Mikko Rantanen           35     0   1  4  
 2 Mike Richards            Emerson Etem             Teemu Pulkkinen          30     0   1  4  
 3 Louis Leblanc            Kasperi Kapanen          Joel Armia               20     1   2  2  
 4 Sam Carrick              Zack Kassian             Tyler Biggs              15     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliwer Kaski             Morgan Rielly                                     40     0   2  3  
 2 Luke Schenn              Ville Pokka                                       35     1   2  2  
 3 Samuel Girard            Mikko Lehtonen                                    25     1   3  1  
 4 Morgan Rielly            Luke Schenn                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sebastian Aho            Emerson Etem             Mikko Rantanen           60     0   0  5  
 2 Jean-Gabriel Pageau      Kasperi Kapanen          Teemu Pulkkinen          40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Morgan Rielly            Luke Schenn                                       60     0   2  3  
 2 Ville Pokka              Samuel Girard                                     40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mike Richards            Jean-Gabriel Pageau      60     1   4  0  
 2 Louis Leblanc            Zack Kassian             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luke Schenn              Ville Pokka              60     1   4  0  
 2 Morgan Rielly            Mikko Lehtonen           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mike Richards                                     60     0   5  0  
 2 Louis Leblanc                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luke Schenn              Ville Pokka              60     0   5  0  
 2 Morgan Rielly            Mikko Lehtonen           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jean-Gabriel Pageau      Mikko Rantanen           60     0   2  3  
 2 Mike Richards            Sebastian Aho            40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Morgan Rielly            Luke Schenn              60     1   2  2  
 2 Mikko Lehtonen           Ville Pokka              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mike Richards            Sebastian Aho            Mikko Rantanen           Morgan Rielly            Oliwer Kaski             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mike Richards            Zack Kassian             Louis Leblanc            Morgan Rielly            Luke Schenn              

<b>Goaltenders</b>
Starting : Steve Mason              
Backup : Antti Niemi              

<b>Extra Forwards</b>
Normal : Jean-Gabriel Pageau, Emerson Etem, Joel Armia - PP : Joel Armia, Sebastian Aho - PK : Tyler Biggs
<b>Extra Defensemen</b>
Normal : Mikko Lehtonen, Morgan Rielly, Ville Pokka - PP : Mikko Lehtonen - PK : Luke Schenn, Samuel Girard
<b>Penalty Shots</b>
Mikko Rantanen, Teemu Pulkkinen, Sebastian Aho, Emerson Etem, Jean-Gabriel Pageau
<b>Custom OT Lines Forwards</b>
Sebastian Aho, Mikko Rantanen, Jean-Gabriel Pageau, Emerson Etem, Teemu Pulkkinen, Mike Richards, Kasperi Kapanen, Joel Armia, Louis Leblanc, Zack Kassian
<b>Custom OT Lines Defensemen</b>
Morgan Rielly, Mikko Lehtonen, Ville Pokka, Luke Schenn, Samuel Girard

<b>Scratches</b>
Tobias Enstrom (Healthy), Trevor Smith (Healthy), Zachary Fucale (Healthy)</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Zemgus Girgensons        Matthew Tkachuk          Kaapo Kakko              33     1   2  2  
 2 Nicolas Kerdiles         James Neal               Nikolaj Ehlers           32     1   2  2  
 3 Connor McDavid           Ahti Oksanen             Colin White              29     0   2  3  
 4 Stefan Matteau           Mattias Tedenby          Louick Marcotte          6      0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Cernak              Dougie Hamilton                                   34     0   3  2  
 2 Rasmus Ristolainen       Josh Morrissey                                    34     0   3  2  
 3 Jason Demers             Mattias Backman                                   32     1   3  1  
 4 Erik Cernak              Mattias Backman                                   0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Zemgus Girgensons        Matthew Tkachuk          James Neal               56     0   0  5  
 2 Connor McDavid           Nikolaj Ehlers           Kaapo Kakko              44     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ahti Oksanen             Rasmus Ristolainen                                56     0   0  5  
 2 Dougie Hamilton          Josh Morrissey                                    44     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Zemgus Girgensons        Ahti Oksanen             54     1   3  1  
 2 Nicolas Kerdiles         Stefan Matteau           46     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          Erik Cernak              54     1   4  0  
 2 Jason Demers             Josh Morrissey           46     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Stefan Matteau                                    55     1   4  0  
 2 Nicolas Kerdiles                                  45     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          Rasmus Ristolainen       55     1   4  0  
 2 Jason Demers             Erik Cernak              45     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor McDavid           Nikolaj Ehlers           53     1   1  3  
 2 Zemgus Girgensons        Matthew Tkachuk          47     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Morrissey           Rasmus Ristolainen       55     1   2  2  
 2 Jason Demers             Dougie Hamilton          45     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Nikolaj Ehlers           Matthew Tkachuk          Dougie Hamilton          Rasmus Ristolainen       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Nikolaj Ehlers           Zemgus Girgensons        Dougie Hamilton          Rasmus Ristolainen       

<b>Goaltenders</b>
Starting : Vitek Vanecek            
Backup : Cory Schneider           

<b>Extra Forwards</b>
Normal : Connor McDavid, Nikolaj Ehlers, Matthew Tkachuk - PP : Nikolaj Ehlers, Connor McDavid - PK : Zemgus Girgensons
<b>Extra Defensemen</b>
Normal : Ahti Oksanen, Dougie Hamilton, Jason Demers - PP : Ahti Oksanen - PK : Dougie Hamilton, Jason Demers
<b>Penalty Shots</b>
Connor McDavid, Nikolaj Ehlers, Zemgus Girgensons, Matthew Tkachuk, Nicolas Kerdiles
<b>Custom OT Lines Forwards</b>
Connor McDavid, Nikolaj Ehlers, Zemgus Girgensons, Matthew Tkachuk, Nicolas Kerdiles, James Neal, Mattias Tedenby, Ahti Oksanen, Kaapo Kakko, Colin White
<b>Custom OT Lines Defensemen</b>
Dougie Hamilton, Rasmus Ristolainen, Jason Demers, Josh Morrissey, Ahti Oksanen

<b>Scratches</b>
Jesse Ylonen (Healthy)</pre></div>
<h1 class="TeamLinesPro_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 William Karlsson         Adam Erne                Patrick Kane             30     0   1  4  
 2 Brock Nelson             Morgan Klimchuk          Valeri Nichushkin        30     0   2  3  
 3 Ryan Spooner             Casey Mittelstadt        Myles Bell               25     0   2  3  
 4 Marcus Kruger            Charles Hudon            Michael Bunting          15     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Johnson             Justin Schultz                                    33     0   3  2  
 2 Xavier Ouellet           Matt Grzelcyk                                     32     0   4  1  
 3 Dillon Heatherington     Mac Weegar                                        30     0   4  1  
 4 Erik Johnson             Justin Schultz                                    5      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 William Karlsson         Adam Erne                Valeri Nichushkin        60     0   0  5  
 2 Casey Mittelstadt        Morgan Klimchuk          Patrick Kane             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Johnson             Justin Schultz                                    60     0   1  4  
 2 Myles Bell               Matt Grzelcyk                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brock Nelson             Myles Bell               60     0   5  0  
 2 Marcus Kruger            Michael Bunting          40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Johnson             Matt Grzelcyk            60     0   5  0  
 2 Dillon Heatherington     Mac Weegar               40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brock Nelson                                      60     0   5  0  
 2 Marcus Kruger                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Johnson             Matt Grzelcyk            60     0   4  1  
 2 Dillon Heatherington     Mac Weegar               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 William Karlsson         Valeri Nichushkin        60     0   2  3  
 2 Ryan Spooner             Patrick Kane             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Johnson             Justin Schultz           60     0   2  3  
 2 Dillon Heatherington     Matt Grzelcyk            40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   William Karlsson         Valeri Nichushkin        Patrick Kane             Erik Johnson             Justin Schultz           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brock Nelson             Myles Bell               Patrick Kane             Erik Johnson             Matt Grzelcyk            

<b>Goaltenders</b>
Starting : Matt Murray              
Backup : Kevin Poulin             

<b>Extra Forwards</b>
Normal : William Karlsson, Patrick Kane, Morgan Klimchuk - PP : Patrick Kane, Morgan Klimchuk - PK : Marcus Kruger
<b>Extra Defensemen</b>
Normal : Erik Johnson, Justin Schultz, Matt Grzelcyk - PP : Justin Schultz - PK : Erik Johnson, Matt Grzelcyk
<b>Penalty Shots</b>
Patrick Kane, William Karlsson, Valeri Nichushkin, Ryan Spooner, Morgan Klimchuk
<b>Custom OT Lines Forwards</b>
Patrick Kane, Morgan Klimchuk, William Karlsson, Adam Erne, Ryan Spooner, Valeri Nichushkin, Casey Mittelstadt, Brock Nelson, Charles Hudon, Marcus Kruger
<b>Custom OT Lines Defensemen</b>
Erik Johnson, Justin Schultz, Matt Grzelcyk, Dillon Heatherington, Mac Weegar

<b>Scratches</b>
Kris Russell (Healthy), John Hayden (Healthy)</pre></div>
<h1 class="TeamLinesPro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Dal Colle        Ty Rattie                Phil Kessel              39     1   1  3  
 2 Pavel Zacha              Travis Zajac             Saku Maenalanen          26     1   1  3  
 3 Jacob De La Rose         Marcus Foligno           Nino Niederreiter        22     1   1  3  
 4 Angelo Miceli            Nick Ritchie             Vladislav Namestnikov    13     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Colton Parayko           Ryan Ellis                                        36     1   2  2  
 2 Johnathan MacLeod        Mikhail Sergachev                                 31     1   2  2  
 3 Jared Cowen              Michael Matheson                                  26     1   2  2  
 4 Colton Parayko           Mikhail Sergachev                                 7      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Dal Colle        Ty Rattie                Phil Kessel              60     0   1  4  
 2 Pavel Zacha              Saku Maenalanen          Nino Niederreiter        40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Colton Parayko           Mikhail Sergachev                                 60     1   1  3  
 2 Ryan Ellis               Jared Cowen                                       40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob De La Rose         Nick Ritchie             60     1   2  2  
 2 Pavel Zacha              Saku Maenalanen          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mikhail Sergachev        Ryan Ellis               60     1   2  2  
 2 Jared Cowen              Colton Parayko           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jacob De La Rose                                  60     1   2  2  
 2 Pavel Zacha                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jared Cowen              Colton Parayko           60     1   2  2  
 2 Michael Matheson         Ryan Ellis               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Dal Colle        Nino Niederreiter        60     1   2  2  
 2 Vladislav Namestnikov    Ty Rattie                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mikhail Sergachev        Colton Parayko           60     1   2  2  
 2 Ryan Ellis               Michael Matheson         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Dal Colle        Ty Rattie                Phil Kessel              Ryan Ellis               Mikhail Sergachev        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jacob De La Rose         Nick Ritchie             Pavel Zacha              Colton Parayko           Jared Cowen              

<b>Goaltenders</b>
Starting : Braden Holtby            
Backup : Juuse Saros              

<b>Extra Forwards</b>
Normal : Michael Dal Colle, Pavel Zacha, Vladislav Namestnikov - PP : Nino Niederreiter, Jacob De La Rose - PK : Michael Dal Colle
<b>Extra Defensemen</b>
Normal : Ryan Ellis, Jared Cowen, Colton Parayko - PP : Ryan Ellis - PK : Ryan Ellis, Colton Parayko
<b>Penalty Shots</b>
Michael Dal Colle, Vladislav Namestnikov, Pavel Zacha, Phil Kessel, Ty Rattie
<b>Custom OT Lines Forwards</b>
Michael Dal Colle, Phil Kessel, Jacob De La Rose, Ty Rattie, Pavel Zacha, Saku Maenalanen, Vladislav Namestnikov, Nick Ritchie, Nino Niederreiter, Travis Zajac
<b>Custom OT Lines Defensemen</b>
Colton Parayko, Jared Cowen, Ryan Ellis, Mikhail Sergachev, Michael Matheson

<b>Scratches</b>
Dominik Kahun (Healthy), Andrew Mangiapane (Healthy), Anthony DeAngelo (Healthy)</pre></div>
<h1 class="TeamLinesPro_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Unknown Player           Jordan Caron             37     1   1  3  
 2 Phillip Danault          Cole Ully                Brent Burns              33     1   2  2  
 3 Casey Cizikas            Logan Shaw               Filip Zadina             20     1   2  2  
 4 Andrew Copp              Noah Rod                 Rocco Grimaldi           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Niklas Hjalmarsson                                37     1   1  3  
 2 Dmitri Kulikov           Sami Vatanen                                      33     1   2  2  
 3 Ryan Graves              Jake Gardiner                                     20     1   2  2  
 4 Victor Hedman            Dmitri Kulikov                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Unknown Player           Brent Burns              60     1   2  2  
 2 Phillip Danault          Filip Zadina             Cole Ully                40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Dmitri Kulikov                                    60     1   2  2  
 2 Niklas Hjalmarsson       Jake Gardiner                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrew Copp              Logan Shaw               60     1   2  2  
 2 Phillip Danault          Jordan Caron             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Sami Vatanen             Niklas Hjalmarsson       60     1   2  2  
 2 Dmitri Kulikov           Jake Gardiner            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Phillip Danault                                   60     1   2  2  
 2 Casey Cizikas                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Dmitri Kulikov           60     1   2  2  
 2 Niklas Hjalmarsson       Jake Gardiner            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Auston Matthews          Unknown Player           60     1   2  2  
 2 Logan Shaw               Brent Burns              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Dmitri Kulikov           60     1   2  2  
 2 Niklas Hjalmarsson       Jake Gardiner            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Auston Matthews          Unknown Player           Brent Burns              Victor Hedman            Dmitri Kulikov           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Auston Matthews          Unknown Player           Brent Burns              Victor Hedman            Dmitri Kulikov           

<b>Goaltenders</b>
Starting : Carey Price              
Backup : Mark Visentin            

<b>Extra Forwards</b>
Normal : Casey Cizikas, Cole Ully, Andrew Copp - PP : Casey Cizikas, Cole Ully - PK : Andrew Copp
<b>Extra Defensemen</b>
Normal : Sami Vatanen, Brent Burns, Jake Gardiner - PP : Sami Vatanen - PK : Brent Burns, Jake Gardiner
<b>Penalty Shots</b>
Auston Matthews, Unknown Player, Noah Rod, Phillip Danault, Jordan Caron
<b>Custom OT Lines Forwards</b>
Auston Matthews, Unknown Player, Brent Burns, Phillip Danault, Jordan Caron, Casey Cizikas, Cole Ully, Andrew Copp, Rocco Grimaldi, Filip Zadina
<b>Custom OT Lines Defensemen</b>
Victor Hedman, Dmitri Kulikov, Niklas Hjalmarsson, Brent Burns, Jake Gardiner

<b>Scratches</b>
Gabriel Landeskog (Strained Right Knee Injury)</pre></div>
<?php include "Footer.php";?>
