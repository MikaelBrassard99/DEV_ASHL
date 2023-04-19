<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleSaints">Seattle Saints</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#VegasGoldenKnights">Vegas Golden Knights</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Henrik Sedin             Alex Ovechkin            Émile Poirier            35     0   3  2  
 2 Derek Stepan             Bryan Rust               Brock Boeser             35     0   3  2  
 3 Jesperi Kotkaniemi       Kyle Connor              Jesse Puljujarvi         25     0   3  2  
 4 Kyle Turris              Alex Ovechkin            Chris Wagner             5      0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Taylor Doherty           Tyler Myers                                       35     1   3  1  
 2 Cam Fowler               Andrey Pedan                                      35     1   3  1  
 3 Markus Nutivaara         Darren Dietz                                      25     1   3  1  
 4 Miro Heiskanen           Darren Dietz                                      5      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Henrik Sedin             Alex Ovechkin            Brock Boeser             60     0   1  4  
 2 Derek Stepan             Kyle Connor              Émile Poirier            40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Miro Heiskanen                                    55     0   1  4  
 2 Darren Dietz             Tyler Myers                                       45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Wagner             Bryan Rust               55     1   3  1  
 2 Derek Stepan             Kyle Connor              45     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Doherty           Andrey Pedan             55     1   4  0  
 2 Markus Nutivaara         Tyler Myers              45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Chris Wagner                                      55     1   4  0  
 2 Bryan Rust                                        45     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Doherty           Andrey Pedan             55     1   4  0  
 2 Markus Nutivaara         Tyler Myers              45     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kyle Turris              Alex Ovechkin            50     0   3  2  
 2 Derek Stepan             Kyle Connor              50     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Miro Heiskanen           Markus Nutivaara         55     1   3  1  
 2 Cam Fowler               Darren Dietz             45     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Henrik Sedin             Alex Ovechkin            Brock Boeser             Cam Fowler               Tyler Myers              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Wagner             Kyle Connor              Bryan Rust               Taylor Doherty           Tyler Myers              

<b>Goaltenders</b>
Starting : Sergei Bobrovsky         
Backup : Colton Point             

<b>Extra Forwards</b>
Normal : Alex Ovechkin, Henrik Sedin, Jesse Puljujarvi - PP : Jesse Puljujarvi, Bryan Rust - PK : Henrik Sedin
<b>Extra Defensemen</b>
Normal : Markus Nutivaara, Tyler Myers, Cam Fowler - PP : Markus Nutivaara - PK : Darren Dietz, Cam Fowler
<b>Penalty Shots</b>
Alex Ovechkin, Kyle Connor, Derek Stepan, Émile Poirier, Brock Boeser
<b>Custom OT Lines Forwards</b>
Henrik Sedin, Alex Ovechkin, Derek Stepan, Brock Boeser, Jesperi Kotkaniemi, Émile Poirier, Kyle Turris, Jesse Puljujarvi, Kyle Connor, Bryan Rust
<b>Custom OT Lines Defensemen</b>
Cam Fowler, Tyler Myers, Miro Heiskanen, Darren Dietz, Markus Nutivaara

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Logan Couture            Steven Stamkos           38     0   1  4  
 2 Cole Cassels             Bo Horvat                Drew Stafford            30     0   2  3  
 3 Rasmus Asplund           Alex Iafallo             Alex DeBrincat           17     0   3  2  
 4 Hafthor Sigrunarson      Michael McCarron         Louick Marcotte          15     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Bogosian            Travis Sanheim                                    35     1   3  1  
 2 Hampus Lindholm          Brandon Gormley                                   31     1   3  1  
 3 Sam Jardine              Matthew Finn                                      27     1   3  1  
 4 Hampus Lindholm          Brandon Gormley                                   7      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Logan Couture            Steven Stamkos           60     1   0  4  
 2 Cole Cassels             Bo Horvat                Louick Marcotte          40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Sam Jardine              Hampus Lindholm                                   60     1   1  3  
 2 Brandon Gormley          Travis Sanheim                                    40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cole Cassels             Michael McCarron         60     1   2  2  
 2 Rasmus Asplund           Alex Iafallo             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Gormley          Sam Jardine              60     1   2  2  
 2 Hampus Lindholm          Travis Sanheim           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Cole Cassels                                      60     1   2  2  
 2 Alex Iafallo                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Gormley          Sam Jardine              60     1   2  2  
 2 Hampus Lindholm          Travis Sanheim           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Rasmus Asplund           Louick Marcotte          60     1   2  2  
 2 Cole Cassels             Drew Stafford            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Gormley          Sam Jardine              60     1   2  2  
 2 Travis Sanheim           Hampus Lindholm          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Tavares             Logan Couture            Steven Stamkos           Matthew Finn             Sam Jardine              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cole Cassels             Alex Iafallo             Michael McCarron         Matthew Finn             Sam Jardine              

<b>Goaltenders</b>
Starting : Mark Visentin            
Backup : Connor Hellebuyck        

<b>Extra Forwards</b>
Normal : Alex DeBrincat, Cole Cassels, Louick Marcotte - PP : John Tavares, Alex Iafallo - PK : Alex Iafallo
<b>Extra Defensemen</b>
Normal : Sam Jardine, Brandon Gormley, Hampus Lindholm - PP : Hampus Lindholm - PK : Travis Sanheim, Sam Jardine
<b>Penalty Shots</b>
Logan Couture, Cole Cassels, John Tavares, Alex Iafallo, Bo Horvat
<b>Custom OT Lines Forwards</b>
John Tavares, Louick Marcotte, Logan Couture, Steven Stamkos, Cole Cassels, Alex Iafallo, Bo Horvat, Michael McCarron, Alex DeBrincat, Drew Stafford
<b>Custom OT Lines Defensemen</b>
Sam Jardine, Matthew Finn, Hampus Lindholm, Brandon Gormley, Travis Sanheim

<b>Scratches</b>
Jacob Ratcliffe (Healthy), Mike Amadio (Healthy)</pre></div>
<h1 class="TeamLinesPro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Marchand            Zach Parise              William Nylander         30     1   2  2  
 2 Nico Hischier            Jamie Benn               Rickard Rakell           30     1   2  2  
 3 Josh Bailey              Marko Dano               Jonathan Drouin          25     1   2  2  
 4 Frédérik Gauthier        Colton Sissons           Scott Kosmachuk          15     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Carlson             Derrick Pouliot                                   36     1   3  1  
 2 Charles McAvoy           Marco Scandella                                   36     1   3  1  
 3 Eric Gelinas             Olli Maatta                                       28     1   2  2  
 4 Charles McAvoy           John Carlson                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Marchand            Jamie Benn               William Nylander         60     0   0  5  
 2 Nico Hischier            Zach Parise              Jonathan Drouin          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Carlson             Olli Maatta                                       60     0   1  4  
 2 Derrick Pouliot          Charles McAvoy                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Josh Bailey              Zach Parise              60     0   5  0  
 2 Jonathan Drouin          Brad Marchand            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derrick Pouliot          Marco Scandella          60     0   5  0  
 2 John Carlson             Eric Gelinas             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Josh Bailey                                       60     0   5  0  
 2 Brad Marchand                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marco Scandella          Eric Gelinas             60     0   5  0  
 2 John Carlson             Derrick Pouliot          40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brad Marchand            Jamie Benn               60     0   1  4  
 2 Nico Hischier            Jonathan Drouin          40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Carlson             Charles McAvoy           60     1   2  2  
 2 Derrick Pouliot          Olli Maatta              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Marchand            Jamie Benn               Jonathan Drouin          John Carlson             Charles McAvoy           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Marchand            Zach Parise              Josh Bailey              John Carlson             Marco Scandella          

<b>Goaltenders</b>
Starting : Igor Shestyorkin         
Backup : Josh Harding             

<b>Extra Forwards</b>
Normal : Brad Marchand, Jonathan Drouin, William Nylander - PP : Brad Marchand, Jonathan Drouin - PK : Brad Marchand
<b>Extra Defensemen</b>
Normal : John Carlson, Charles McAvoy, Derrick Pouliot - PP : John Carlson - PK : Marco Scandella, Olli Maatta
<b>Penalty Shots</b>
Jamie Benn, Jonathan Drouin, Brad Marchand, William Nylander, Josh Bailey
<b>Custom OT Lines Forwards</b>
Brad Marchand, Zach Parise, Nico Hischier, Jonathan Drouin, William Nylander, Jamie Benn, Josh Bailey, Rickard Rakell, Marko Dano, Scott Kosmachuk
<b>Custom OT Lines Defensemen</b>
John Carlson, Charles McAvoy, Derrick Pouliot, Olli Maatta, Marco Scandella

<b>Scratches</b>
Vladimir Tkachev (Healthy), Zack Smith (Healthy), Andrej Sustr (Healthy)</pre></div>
<h1 class="TeamLinesPro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan O'Reilly            Evander Kane             Tyler Seguin             29     0   2  3  
 2 Adam Henrique            Anders Lee               Jordan Eberle            29     0   1  4  
 3 Jaedon Descheneau        Brett Connolly           Nikita Soshnikov         25     1   2  2  
 4 Andrej Nestrasil         Alexei Mitrofanov        Reid Boucher             17     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Dylan Olsen                                       29     1   2  2  
 2 Connor Carrick           Erik Gudbranson                                   29     1   2  2  
 3 Mike Green               Slater Koekkoek                                   24     1   2  2  
 4 Connor Carrick           Mike Green                                        18     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Seguin             Evander Kane             Jordan Eberle            50     0   1  4  
 2 Adam Henrique            Anders Lee               Ryan O'Reilly            50     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Mike Green                                        51     1   2  2  
 2 Dylan Olsen              Erik Gudbranson                                   49     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan O'Reilly            Evander Kane             50     1   3  1  
 2 Adam Henrique            Jordan Eberle            50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Erik Gudbranson          50     1   3  1  
 2 Dylan Olsen              Mike Green               50     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan O'Reilly                                     50     1   3  1  
 2 Evander Kane                                      50     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Erik Gudbranson          50     1   3  1  
 2 Dylan Olsen              Mike Green               50     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan O'Reilly            Tyler Seguin             50     1   2  2  
 2 Jordan Eberle            Evander Kane             50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Erik Gudbranson          50     1   2  2  
 2 Dylan Olsen              Mike Green               50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Seguin             Evander Kane             Jordan Eberle            Kevin Shattenkirk        Mike Green               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan O'Reilly            Evander Kane             Jordan Eberle            Kevin Shattenkirk        Erik Gudbranson          

<b>Goaltenders</b>
Starting : Jacob Markstrom          
Backup : Oscar Dansk              

<b>Extra Forwards</b>
Normal : Brett Connolly, Reid Boucher, Jaedon Descheneau - PP : Brett Connolly, Reid Boucher - PK : Jaedon Descheneau
<b>Extra Defensemen</b>
Normal : Kevin Shattenkirk, Slater Koekkoek, Connor Carrick - PP : Kevin Shattenkirk - PK : Slater Koekkoek, Connor Carrick
<b>Penalty Shots</b>
Ryan O'Reilly, Tyler Seguin, Jordan Eberle, Evander Kane, Adam Henrique
<b>Custom OT Lines Forwards</b>
Ryan O'Reilly, Tyler Seguin, Jordan Eberle, Evander Kane, Adam Henrique, Anders Lee, Brett Connolly, Reid Boucher, Jaedon Descheneau, Nikita Soshnikov
<b>Custom OT Lines Defensemen</b>
Kevin Shattenkirk, Erik Gudbranson, Dylan Olsen, Mike Green, Connor Carrick

<b>Scratches</b>
Mattias Janmark-Nylen (Healthy), Nathan Beaulieu (Healthy)</pre></div>
<h1 class="TeamLinesPro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeni Malkin            Teuvo Teravainen         Pierre-Luc Dubois        25     1   2  2  
 2 Alex Galchenyuk          Ryan Dzingel             Michael Grabner          25     1   2  2  
 3 Chris Tierney            Adrian Kempe             Kyle Palmieri            25     1   2  2  
 4 Joe Pavelski             Ryan MacInnis            Oskar Sundqvist          25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Damon Severson           Oliver Ekman-Larsson                              25     1   2  2  
 2 Travis Hamonic           Michael Del Zotto                                 25     1   2  2  
 3 Jonathon Blum            Fredrik Claesson                                  25     1   2  2  
 4 Oliver Ekman-Larsson     Travis Hamonic                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeni Malkin            Teuvo Teravainen         Joe Pavelski             60     1   2  2  
 2 Pierre-Luc Dubois        Kyle Palmieri            Ryan Dzingel             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Hamonic           Michael Del Zotto                                 60     1   2  2  
 2 Oliver Ekman-Larsson     Jonathon Blum                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Tierney            Adrian Kempe             60     1   2  2  
 2 Joe Pavelski             Ryan MacInnis            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Travis Hamonic           60     1   2  2  
 2 Fredrik Claesson         Jonathon Blum            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Pierre-Luc Dubois                                 60     1   2  2  
 2 Oskar Sundqvist                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Travis Hamonic           60     1   2  2  
 2 Fredrik Claesson         Damon Severson           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joe Pavelski             Kyle Palmieri            60     1   2  2  
 2 Oskar Sundqvist          Adrian Kempe             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Travis Hamonic           60     1   2  2  
 2 Fredrik Claesson         Michael Del Zotto        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeni Malkin            Teuvo Teravainen         Alex Galchenyuk          Travis Hamonic           Michael Del Zotto        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Tierney            Joe Pavelski             Pierre-Luc Dubois        Travis Hamonic           Jonathon Blum            

<b>Goaltenders</b>
Starting : James Reimer             
Backup : Dustin Tokarski          

<b>Extra Forwards</b>
Normal : Oskar Sundqvist, Kyle Palmieri, Joe Pavelski - PP : Michael Grabner, Kyle Palmieri - PK : Joe Pavelski
<b>Extra Defensemen</b>
Normal : Oliver Ekman-Larsson, Jonathon Blum, Fredrik Claesson - PP : Oliver Ekman-Larsson - PK : Travis Hamonic, Fredrik Claesson
<b>Penalty Shots</b>
Evgeni Malkin, Teuvo Teravainen, Pierre-Luc Dubois, Alex Galchenyuk, Ryan Dzingel
<b>Custom OT Lines Forwards</b>
Evgeni Malkin, Teuvo Teravainen, Michael Grabner, Pierre-Luc Dubois, Chris Tierney, Kyle Palmieri, Ryan Dzingel, Joe Pavelski, Adrian Kempe, Oskar Sundqvist
<b>Custom OT Lines Defensemen</b>
Oliver Ekman-Larsson, Michael Del Zotto, Travis Hamonic, Fredrik Claesson, Jonathon Blum

<b>Scratches</b>
Tyler Wotherspoon (Healthy)</pre></div>
<h1 class="TeamLinesPro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Johnson            Tanner Pearson           Loui Eriksson            25     1   1  3  
 2 Bryan Little             Milan Lucic              Jordan Caron             25     1   1  3  
 3 Cody Hodgson             Ondrej Palat             Anthony Camara           25     1   1  3  
 4 Travis Zajac             Martin Hanzal            Paul Byron               25     1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Theo Peckham             Joe Morrow                                        36     1   2  2  
 2 Keaton Ellerby           Jarred Tinordi                                    33     1   2  2  
 3 Ryan Pulock              Joey Laleggia                                     31     1   2  2  
 4 Keaton Ellerby           Joe Morrow                                        0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Johnson            Tanner Pearson           Loui Eriksson            60     1   1  3  
 2 Bryan Little             Milan Lucic              Jordan Caron             40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Theo Peckham             Joe Morrow                                        60     1   1  3  
 2 Keaton Ellerby           Jarred Tinordi                                    40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Travis Zajac             Ondrej Palat             60     1   3  1  
 2 Bryan Little             Milan Lucic              40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Theo Peckham             Joe Morrow               60     1   3  1  
 2 Keaton Ellerby           Jarred Tinordi           40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Travis Zajac                                      60     0   5  0  
 2 Martin Hanzal                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Theo Peckham             Joe Morrow               60     0   5  0  
 2 Keaton Ellerby           Jarred Tinordi           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Johnson            Loui Eriksson            60     1   2  2  
 2 Bryan Little             Milan Lucic              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Theo Peckham             Joe Morrow               60     1   2  2  
 2 Keaton Ellerby           Jarred Tinordi           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Johnson            Tanner Pearson           Loui Eriksson            Joey Laleggia            Joe Morrow               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Johnson            Tanner Pearson           Loui Eriksson            Joey Laleggia            Joe Morrow               

<b>Goaltenders</b>
Starting : Calvin Pickard           
Backup : Joni Ortio               

<b>Extra Forwards</b>
Normal : Ondrej Palat, Bryan Little, Tanner Pearson - PP : Anthony Camara, Tanner Pearson - PK : Martin Hanzal
<b>Extra Defensemen</b>
Normal : Joey Laleggia, Keaton Ellerby, Joe Morrow - PP : Joey Laleggia - PK : Joey Laleggia, Ryan Pulock
<b>Penalty Shots</b>
Milan Lucic, Loui Eriksson, Bryan Little, Tyler Johnson, Tanner Pearson
<b>Custom OT Lines Forwards</b>
Milan Lucic, Loui Eriksson, Tyler Johnson, Jordan Caron, Tanner Pearson, Bryan Little, Martin Hanzal, Ondrej Palat, Travis Zajac, Anthony Camara
<b>Custom OT Lines Defensemen</b>
Theo Peckham, Joe Morrow, Keaton Ellerby, Jarred Tinordi, Joey Laleggia

<b>Scratches</b>
Daniel Carcillo (Healthy), Alexei Bereglazov (Healthy), Wayne Simmonds (Healthy)</pre></div>
<h1 class="TeamLinesPro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           William Carrier          David Backes             34     0   1  4  
 2 Derick Brassard          Mitch Holmberg           Jack Roslovic            28     0   1  4  
 3 Antti Suomela            Adam Helewka             Logan Shaw               22     1   1  3  
 4 Marian Gaborik           Antoine Roussel          Jeremy Morin             16     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jakub Kindl              Erik Karlsson                                     34     1   3  1  
 2 Joakim Ryan              Cody Franson                                      33     1   3  1  
 3 Dennis Wideman           Adam Clendening                                   33     1   3  1  
 4 Cody Franson             Erik Karlsson                                     0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           William Carrier          David Backes             50     0   0  5  
 2 Derick Brassard          Mitch Holmberg           Jack Roslovic            50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Cody Franson                                      50     1   3  1  
 2 Adam Clendening          Dennis Wideman                                    50     1   3  1  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           David Backes             50     0   5  0  
 2 Jack Roslovic            Logan Shaw               50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakub Kindl              Dennis Wideman           50     1   4  0  
 2 Erik Karlsson            Cody Franson             50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Toews                                    50     0   5  0  
 2 David Backes                                      50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakub Kindl              Dennis Wideman           50     1   4  0  
 2 Erik Karlsson            Cody Franson             50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           Jack Roslovic            50     0   2  3  
 2 Derick Brassard          David Backes             50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakub Kindl              Erik Karlsson            50     1   3  1  
 2 Dennis Wideman           Cody Franson             50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Mitch Holmberg           Jack Roslovic            Erik Karlsson            Cody Franson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Logan Shaw               David Backes             Jakub Kindl              Dennis Wideman           

<b>Goaltenders</b>
Starting : David Rittich            
Backup : Carey Price              

<b>Extra Forwards</b>
Normal : Jack Roslovic, David Backes, Jonathan Toews - PP : Jack Roslovic, Antti Suomela - PK : Antoine Roussel
<b>Extra Defensemen</b>
Normal : Cody Franson, Adam Clendening, Jakub Kindl - PP : Joakim Ryan - PK : Erik Karlsson, Adam Clendening
<b>Penalty Shots</b>
Jonathan Toews, David Backes, Derick Brassard, Mitch Holmberg, William Carrier
<b>Custom OT Lines Forwards</b>
Jonathan Toews, Jack Roslovic, Derick Brassard, David Backes, Antti Suomela, Mitch Holmberg, William Carrier, Adam Helewka, Logan Shaw, Jeremy Morin
<b>Custom OT Lines Defensemen</b>
Erik Karlsson, Cody Franson, Adam Clendening, Dennis Wideman, Joakim Ryan

<b>Scratches</b>
Cooper Marody (Healthy)</pre></div>
<h1 class="TeamLinesPro_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Alexander Kerfoot        Nikita Filatov           37     1   1  3  
 2 Evgeny Grachev           Robby Fabbri             Magnus Paajarvi          35     1   1  3  
 3 Joachim Nermark          Taylor Leier             Devin Setoguchi          22     1   1  3  
 4 Brian Boyle              T.J. Galiardi            Peter Mueller            6      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mike Weber               Marc-Andre Gragnani                               40     1   1  3  
 2 Ty Wishart               Jani Hakanpaa                                     40     1   1  3  
 3 Andreas Englund          Dustin Byfuglien                                  20     1   1  3  
 4 Marc-Andre Gragnani      Dustin Byfuglien                                  0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Evgeny Grachev           Robby Fabbri             70     0   0  5  
 2 Brian Boyle              Magnus Paajarvi          Nikita Filatov           30     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marc-Andre Gragnani      Dustin Byfuglien                                  90     0   1  4  
 2 Jani Hakanpaa            Mike Weber                                        10     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brian Boyle              T.J. Galiardi            65     1   4  0  
 2 Joachim Nermark          Taylor Leier             35     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mike Weber               Jani Hakanpaa            70     1   4  0  
 2 Dustin Byfuglien         Andreas Englund          30     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brian Boyle                                       60     0   5  0  
 2 Joachim Nermark                                   40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jani Hakanpaa            Dustin Byfuglien         70     0   5  0  
 2 Mike Weber               Andreas Englund          30     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evgeny Grachev           Magnus Paajarvi          50     0   2  3  
 2 Sean Monahan             Robby Fabbri             50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mike Weber               Jani Hakanpaa            60     1   2  2  
 2 Andreas Englund          Dustin Byfuglien         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Evgeny Grachev           Alexander Kerfoot        Marc-Andre Gragnani      Dustin Byfuglien         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brian Boyle              Joachim Nermark          Sean Monahan             Ty Wishart               Mike Weber               

<b>Goaltenders</b>
Starting : Andrew Hammond           
Backup : Martin Jones             

<b>Extra Forwards</b>
Normal : Taylor Leier, Joachim Nermark, Sean Monahan - PP : Taylor Leier, Joachim Nermark - PK : T.J. Galiardi
<b>Extra Defensemen</b>
Normal : Andreas Englund, Mike Weber, Jani Hakanpaa - PP : Dustin Byfuglien - PK : Mike Weber, Dustin Byfuglien
<b>Penalty Shots</b>
Evgeny Grachev, Nikita Filatov, Sean Monahan, Robby Fabbri, Devin Setoguchi
<b>Custom OT Lines Forwards</b>
Sean Monahan, Magnus Paajarvi, Evgeny Grachev, Robby Fabbri, Alexander Kerfoot, Nikita Filatov, Devin Setoguchi, Joachim Nermark, Brian Boyle, T.J. Galiardi
<b>Custom OT Lines Defensemen</b>
Andreas Englund, Mike Weber, Jani Hakanpaa, Marc-Andre Gragnani, Dustin Byfuglien

<b>Scratches</b>
Yann Sauve (Left Hand Injury)</pre></div>
<h1 class="TeamLinesPro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Daniel Paille            Johnny Hockey Gaudreau   Andrew Shaw              35     0   0  5  
 2 Christian Dvorak         Jason Dickinson          Mikhail Grigorenko       30     0   0  5  
 3 Michael Chaput           Shawn Matthias           Martin Frk               25     0   1  4  
 4 T.J. Tynan               Mikkel Boedker           Barclay Goodrow          10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Seabrook           Cal Foote                                         35     0   1  4  
 2 Shayne Gostisbehere      Jonas Brodin                                      34     0   1  4  
 3 Nikita Nesterov          Calvin de Haan                                    31     0   2  3  
 4 Brent Seabrook           Cal Foote                                         0      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Shawn Matthias           Johnny Hockey Gaudreau   Andrew Shaw              60     0   1  4  
 2 Christian Dvorak         Jason Dickinson          Mikhail Grigorenko       40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Seabrook           Shayne Gostisbehere                               60     0   1  4  
 2 Nikita Nesterov          Jonas Brodin                                      40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Shawn Matthias           Barclay Goodrow          60     1   4  0  
 2 Michael Chaput           Christian Dvorak         40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Seabrook           Jonas Brodin             60     1   4  0  
 2 Cal Foote                Calvin de Haan           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Shawn Matthias                                    60     1   4  0  
 2 Michael Chaput                                    40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Seabrook           Jonas Brodin             60     1   4  0  
 2 Cal Foote                Calvin de Haan           40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrew Shaw              Johnny Hockey Gaudreau   60     0   1  4  
 2 Christian Dvorak         Mikhail Grigorenko       40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Seabrook           Cal Foote                60     0   2  3  
 2 Jonas Brodin             Shayne Gostisbehere      40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Daniel Paille            Johnny Hockey Gaudreau   Mikhail Grigorenko       Brent Seabrook           Shayne Gostisbehere      

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Daniel Paille            Johnny Hockey Gaudreau   Andrew Shaw              Brent Seabrook           Cal Foote                

<b>Goaltenders</b>
Starting : Alexandar Georgiyev      
Backup : Anders Nilsson           

<b>Extra Forwards</b>
Normal : Christian Dvorak, Johnny Hockey Gaudreau, Mikkel Boedker - PP : Christian Dvorak, Johnny Hockey Gaudreau - PK : Christian Dvorak
<b>Extra Defensemen</b>
Normal : Shayne Gostisbehere, Brent Seabrook, Cal Foote - PP : Shayne Gostisbehere - PK : Calvin de Haan, Cal Foote
<b>Penalty Shots</b>
Johnny Hockey Gaudreau, Michael Chaput, Christian Dvorak, Jason Dickinson, Mikhail Grigorenko
<b>Custom OT Lines Forwards</b>
Daniel Paille, Johnny Hockey Gaudreau, Mikhail Grigorenko, Christian Dvorak, Andrew Shaw, Michael Chaput, Jason Dickinson, Mikkel Boedker, Martin Frk, Barclay Goodrow
<b>Custom OT Lines Defensemen</b>
Brent Seabrook, Jonas Brodin, Cal Foote, Calvin de Haan, Shayne Gostisbehere

<b>Scratches</b>
Ryan Johansen (Strained Groin Injury), Brandon Hickey (Healthy)</pre></div>
<h1 class="TeamLinesPro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Brandon Saad             Leon Draisaitl           32     1   1  3  
 2 Mathew Barzal            Tomas Tatar              Vladimir Tarasenko       32     0   1  4  
 3 Mikko Koivu              Max Domi                 Hunter Shinkaruk         23     1   3  1  
 4 Markus Granlund          Phillip Di Giuseppe      Ryan Hartman             13     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens                                    34     1   2  2  
 2 Alex Petrovic            Philip Larsen                                     32     1   2  2  
 3 Morgan Ellis             Nick Holden                                       27     1   3  1  
 4 Shea Weber               Duncan Siemens                                    7      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Tomas Tatar              Leon Draisaitl           50     1   1  3  
 2 Mathew Barzal            Brandon Saad             Vladimir Tarasenko       50     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens                                    57     1   1  3  
 2 Alex Petrovic            Morgan Ellis                                      43     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Ryan Hartman             50     1   3  1  
 2 Mikko Koivu              Phillip Di Giuseppe      50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens           60     1   2  2  
 2 Alex Petrovic            Philip Larsen            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sean Couturier                                    60     1   4  0  
 2 Mikko Koivu                                       40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens           60     1   3  1  
 2 Alex Petrovic            Morgan Ellis             40     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Leon Draisaitl           53     1   2  2  
 2 Mathew Barzal            Vladimir Tarasenko       47     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens           60     1   2  2  
 2 Alex Petrovic            Nick Holden              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Brandon Saad             Leon Draisaitl           Shea Weber               Vladimir Tarasenko       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikko Koivu              Sean Couturier           Markus Granlund          Shea Weber               Duncan Siemens           

<b>Goaltenders</b>
Starting : Corey Crawford           
Backup : Brendan Burke            

<b>Extra Forwards</b>
Normal : Sean Couturier, Tomas Tatar, Mathew Barzal - PP : Sean Couturier, Tomas Tatar - PK : Sean Couturier
<b>Extra Defensemen</b>
Normal : Shea Weber, Duncan Siemens, Alex Petrovic - PP : Duncan Siemens - PK : Shea Weber, Alex Petrovic
<b>Penalty Shots</b>
Sean Couturier, Mikko Koivu, Mathew Barzal, Tomas Tatar, Hunter Shinkaruk
<b>Custom OT Lines Forwards</b>
Sean Couturier, Leon Draisaitl, Mathew Barzal, Brandon Saad, Vladimir Tarasenko, Tomas Tatar, Mikko Koivu, Hunter Shinkaruk, Max Domi, Phillip Di Giuseppe
<b>Custom OT Lines Defensemen</b>
Shea Weber, Duncan Siemens, Nick Holden, Alex Petrovic, Philip Larsen

<b>Scratches</b>
Marc-Andre Cliche (Healthy), Curtis McKenzie (Healthy), Tye McGinn (Healthy)</pre></div>
<h1 class="TeamLinesPro_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jaden Schwartz           Mikael Granlund          Patrik Laine             35     1   2  2  
 2 Mika Zibanejad           Andre Burakovsky         Elias Lindholm           30     1   2  2  
 3 Jason Spezza             Adam Lowry               Sven Andrighetto         20     1   2  2  
 4 Jack Hughes              Michael Bournival        Jaden Schwartz           15     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Alex Goligoski                                    25     1   2  2  
 2 Nick Leddy               Torey Krug                                        25     1   2  2  
 3 Stefan Elliott           Jaccob Slavin                                     25     1   2  2  
 4 Vyacheslav Voynov        Alex Goligoski                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jaden Schwartz           Mikael Granlund          Patrik Laine             60     1   2  2  
 2 Mika Zibanejad           Andre Burakovsky         Elias Lindholm           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Alex Goligoski                                    60     1   2  2  
 2 Nick Leddy               Torey Krug                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaden Schwartz           Mikael Granlund          60     1   2  2  
 2 Mika Zibanejad           Patrik Laine             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Alex Goligoski           60     1   2  2  
 2 Nick Leddy               Torey Krug               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jaden Schwartz                                    60     1   2  2  
 2 Mikael Granlund                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Alex Goligoski           60     1   2  2  
 2 Nick Leddy               Torey Krug               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jaden Schwartz           Mikael Granlund          60     1   2  2  
 2 Mika Zibanejad           Patrik Laine             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vyacheslav Voynov        Alex Goligoski           60     1   2  2  
 2 Nick Leddy               Torey Krug               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jaden Schwartz           Mikael Granlund          Patrik Laine             Vyacheslav Voynov        Alex Goligoski           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jaden Schwartz           Mikael Granlund          Patrik Laine             Vyacheslav Voynov        Alex Goligoski           

<b>Goaltenders</b>
Starting : Ondrej Pavelec           
Backup : Jimmy Howard             

<b>Extra Forwards</b>
Normal : Jaden Schwartz, Adam Lowry, Jason Spezza - PP : Jaden Schwartz, Adam Lowry - PK : Jason Spezza
<b>Extra Defensemen</b>
Normal : Stefan Elliott, Vyacheslav Voynov, Nick Leddy - PP : Stefan Elliott - PK : Alex Goligoski, Nick Leddy
<b>Penalty Shots</b>
Jaden Schwartz, Mikael Granlund, Mika Zibanejad, Patrik Laine, Elias Lindholm
<b>Custom OT Lines Forwards</b>
Jaden Schwartz, Mikael Granlund, Mika Zibanejad, Patrik Laine, Elias Lindholm, Andre Burakovsky, Adam Lowry, Jason Spezza, Dave Bolland, Sven Andrighetto
<b>Custom OT Lines Defensemen</b>
Vyacheslav Voynov, Alex Goligoski, Nick Leddy, Torey Krug, Stefan Elliott

<b>Scratches</b>
Teemu Laakso (Healthy), Chandler Stephenson (Healthy), Max Görtz (Healthy)</pre></div>
<h1 class="TeamLinesPro_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Beau Starrett            Bogdan Yakimov           Tyrell Goulbourne        34     0   1  4  
 2 Seth Griffith            Cédric Paquette          Taylor Hall              33     1   2  2  
 3 Kieffer Bellows          Toni Rajala              Ryan Callahan            32     0   2  3  
 4 Tobias Rieder            Beau Starrett            Ryan Callahan            1      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Daniel Girardi           Martin Gernat                                     33     0   1  4  
 2 Martin Marincin          Colten Teubert                                    33     0   1  4  
 3 Mikko Vainonen           Cody Ceci                                         31     0   1  4  
 4 Cody Ceci                Colten Teubert                                    3      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Beau Starrett            Kieffer Bellows          Seth Griffith            55     0   0  5  
 2 Bogdan Yakimov           Tyrell Goulbourne        Toni Rajala              45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Martin Gernat            Daniel Girardi                                    55     0   1  4  
 2 Martin Marincin          Cody Ceci                                         45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cédric Paquette          Tobias Rieder            57     0   5  0  
 2 Seth Griffith            Ryan Callahan            43     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mikko Vainonen           Cody Ceci                57     1   4  0  
 2 Daniel Girardi           Colten Teubert           43     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tobias Rieder                                     57     0   5  0  
 2 Seth Griffith                                     43     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Martin Gernat            Daniel Girardi           57     0   5  0  
 2 Colten Teubert           Martin Marincin          43     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Beau Starrett            Tyrell Goulbourne        55     0   1  4  
 2 Seth Griffith            Cédric Paquette          45     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Martin Gernat            Daniel Girardi           55     0   2  3  
 2 Colten Teubert           Martin Marincin          45     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Beau Starrett            Cédric Paquette          Ryan Callahan            Martin Gernat            Mikko Vainonen           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Beau Starrett            Kieffer Bellows          Tyrell Goulbourne        Martin Marincin          Colten Teubert           

<b>Goaltenders</b>
Starting : Matt Hackett             
Backup : Marc-Andre Fleury        

<b>Extra Forwards</b>
Normal : Chris Stewart, Beau Starrett, Seth Griffith - PP : Seth Griffith, Tyrell Goulbourne - PK : Beau Starrett
<b>Extra Defensemen</b>
Normal : Martin Marincin, Colten Teubert, Daniel Girardi - PP : Martin Marincin - PK : Cody Ceci, Colten Teubert
<b>Penalty Shots</b>
Chris Stewart, Ryan Callahan, Toni Rajala, Tobias Rieder, Beau Starrett
<b>Custom OT Lines Forwards</b>
Beau Starrett, Tyrell Goulbourne, Kieffer Bellows, Ryan Callahan, Tobias Rieder, Chris Stewart, Cédric Paquette, Toni Rajala, Bogdan Yakimov, Seth Griffith
<b>Custom OT Lines Defensemen</b>
Martin Gernat, Colten Teubert, Martin Marincin, Daniel Girardi, Cody Ceci

<b>Scratches</b>
Brendan Gallagher (Right Leg Injury), Devan Dubnyk (Healthy)</pre></div>
<h1 class="TeamLinesPro_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Bjugstad            Kyle Clifford            Josh Anderson            29     1   3  1  
 2 Dylan Larkin             Jonathan Huberdeau       Matthew Tkachuk          28     0   1  4  
 3 Brock Nelson             Zach Sanford             Brendan Perlini          25     1   2  2  
 4 Derek Roy                Darren Helm              Alan Quine               18     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Aaron Ekblad             Alexander Edler                                   34     1   2  2  
 2 Scott Harrington         Zachary Werenski                                  33     1   2  2  
 3 Joel Edmundson           Madison Bowey                                     33     1   2  2  
 4 Aaron Ekblad             Alexander Edler                                   0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Larkin             Jonathan Huberdeau       Matthew Tkachuk          60     0   0  5  
 2 Nick Bjugstad            Josh Anderson            Brendan Perlini          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Scott Harrington         Zachary Werenski                                  60     0   1  4  
 2 Aaron Ekblad             Madison Bowey                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Darren Helm              Brock Nelson             50     0   5  0  
 2 Derek Roy                Alan Quine               50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Joel Edmundson           60     1   4  0  
 2 Aaron Ekblad             Scott Harrington         40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brock Nelson                                      50     0   5  0  
 2 Darren Helm                                       50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Joel Edmundson           60     0   5  0  
 2 Aaron Ekblad             Scott Harrington         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dylan Larkin             Matthew Tkachuk          50     0   0  5  
 2 Nick Bjugstad            Jonathan Huberdeau       50     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ekblad             Alexander Edler          50     1   2  2  
 2 Scott Harrington         Zachary Werenski         50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dylan Larkin             Jonathan Huberdeau       Matthew Tkachuk          Scott Harrington         Zachary Werenski         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Derek Roy                Brock Nelson             Darren Helm              Alexander Edler          Joel Edmundson           

<b>Goaltenders</b>
Starting : Andrey Vasilevskiy       
Backup : Al Montoya               

<b>Extra Forwards</b>
Normal : Dylan Larkin, Jonathan Huberdeau, Matthew Tkachuk - PP : Dylan Larkin, Jonathan Huberdeau - PK : Brock Nelson
<b>Extra Defensemen</b>
Normal : Aaron Ekblad, Zachary Werenski, Scott Harrington - PP : Zachary Werenski - PK : Joel Edmundson, Alexander Edler
<b>Penalty Shots</b>
Dylan Larkin, Jonathan Huberdeau, Matthew Tkachuk, Nick Bjugstad, Darren Helm
<b>Custom OT Lines Forwards</b>
Jonathan Huberdeau, Dylan Larkin, Matthew Tkachuk, Brendan Perlini, Nick Bjugstad, Josh Anderson, Brock Nelson, Kyle Clifford, Zach Sanford, Darren Helm
<b>Custom OT Lines Defensemen</b>
Aaron Ekblad, Scott Harrington, Zachary Werenski, Alexander Edler, Madison Bowey

<b>Scratches</b>
Dana Tyrell (Healthy), Ben Chiarot (Healthy), Nikita Kucherov (Torso Injury)</pre></div>
<h1 class="TeamLinesPro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             Corey Perry              33     0   1  4  
 2 Jordan Staal             Kevin Fiala              Vincent Trocheck         31     0   2  3  
 3 Mike Richards            Jordan Martinook         Anthony Mantha           26     0   3  2  
 4 Patrick Holland          Kevin Hayes              Brett Ritchie            10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Derek Forbort                                     33     0   3  2  
 2 Mark Pysyk               Jan Rutta                                         32     0   3  2  
 3 Tyler Cuma               Ben Hutton                                        32     0   3  2  
 4 Drew Doughty             Mark Pysyk                                        3      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             Corey Perry              50     0   0  5  
 2 Jordan Staal             Kevin Fiala              Vincent Trocheck         50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Derek Forbort                                     50     0   1  4  
 2 Mark Pysyk               Jan Rutta                                         50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Staal             Patrick Holland          60     0   5  0  
 2 Mike Richards            Kevin Hayes              40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derek Forbort            Mark Pysyk               60     1   4  0  
 2 Drew Doughty             Tyler Cuma               40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Staal                                      60     0   5  0  
 2 Mike Richards                                     40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derek Forbort            Mark Pysyk               60     1   4  0  
 2 Drew Doughty             Tyler Cuma               40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Staal             Mike Richards            55     0   2  3  
 2 Anze Kopitar             Jeff Skinner             45     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Derek Forbort            50     1   3  1  
 2 Jan Rutta                Mark Pysyk               50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Jeff Skinner             Corey Perry              Drew Doughty             Mark Pysyk               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Staal             Mike Richards            Patrick Holland          Drew Doughty             Derek Forbort            

<b>Goaltenders</b>
Starting : Michal Neuvirth          
Backup : Philipp Grubauer         

<b>Extra Forwards</b>
Normal : Vincent Trocheck, Mike Richards, Jordan Martinook - PP : Vincent Trocheck, Anthony Mantha - PK : Anze Kopitar
<b>Extra Defensemen</b>
Normal : Mark Pysyk, Tyler Cuma, Jan Rutta - PP : Mark Pysyk - PK : Jan Rutta, Ben Hutton
<b>Penalty Shots</b>
Jeff Skinner, Anze Kopitar, Corey Perry, Anthony Mantha, Jordan Staal
<b>Custom OT Lines Forwards</b>
Jeff Skinner, Anze Kopitar, Anthony Mantha, Jordan Staal, Corey Perry, Vincent Trocheck, Kevin Fiala, Mike Richards, Brett Ritchie, Kevin Hayes
<b>Custom OT Lines Defensemen</b>
Drew Doughty, Derek Forbort, Tyler Cuma, Mark Pysyk, Jan Rutta

<b>Scratches</b>
Ryan Haggerty (Healthy), Ryan Segalla (Healthy)</pre></div>
<h1 class="TeamLinesPro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Blake Wheeler            James Van Riemsdyk       Jake Virtanen            37     1   2  2  
 2 Brandon McMillan         Thomas Vanek             JC Lipon                 29     1   2  2  
 3 Justin Kloos             Nikolay Prokhorkin       Dmitrij Jaskin           24     1   2  2  
 4 Christophe Lalancette    Devin Shore              Blake Wheeler            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Matt Dumba                                        35     1   2  2  
 2 Ryan Murphy              Neal Pionk                                        35     1   2  2  
 3 Colby Cohen              Dylan Demelo                                      20     1   2  2  
 4 Ryan Murphy              Matt Dumba                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Blake Wheeler            James Van Riemsdyk       Jake Virtanen            60     1   2  2  
 2 Brandon McMillan         Dmitrij Jaskin           JC Lipon                 40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Dumba               Ryan Murphy                                       60     1   2  2  
 2 Neal Pionk               Ryan Suter                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Blake Wheeler            Jake Virtanen            60     1   2  2  
 2 Brandon McMillan         James Van Riemsdyk       40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colby Cohen              Ryan Suter               60     1   2  2  
 2 Neal Pionk               Matt Dumba               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Blake Wheeler                                     60     1   2  2  
 2 Brandon McMillan                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colby Cohen              Ryan Suter               60     1   2  2  
 2 Neal Pionk               Ryan Murphy              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Blake Wheeler            James Van Riemsdyk       60     1   2  2  
 2 Brandon McMillan         Dmitrij Jaskin           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Matt Dumba               60     1   2  2  
 2 Neal Pionk               Ryan Murphy              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Blake Wheeler            James Van Riemsdyk       Thomas Vanek             Ryan Murphy              Matt Dumba               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Blake Wheeler            Brandon McMillan         Jake Virtanen            Colby Cohen              Ryan Suter               

<b>Goaltenders</b>
Starting : Thatcher Demko           
Backup : Petr Mrazek              

<b>Extra Forwards</b>
Normal : Brandon McMillan, Blake Wheeler, James Van Riemsdyk - PP : Brandon McMillan, Blake Wheeler - PK : Brandon McMillan
<b>Extra Defensemen</b>
Normal : Ryan Murphy, Colby Cohen, Matt Dumba - PP : Colby Cohen - PK : Colby Cohen, Ryan Suter
<b>Penalty Shots</b>
Blake Wheeler, James Van Riemsdyk, Brandon McMillan, Nikolay Prokhorkin, Dmitrij Jaskin
<b>Custom OT Lines Forwards</b>
Blake Wheeler, James Van Riemsdyk, Brandon McMillan, Thomas Vanek, Dmitrij Jaskin, Jake Virtanen, Justin Kloos, Nikolay Prokhorkin, Devin Shore, Christophe Lalancette
<b>Custom OT Lines Defensemen</b>
Matt Dumba, Ryan Suter, Ryan Murphy, Neal Pionk, Colby Cohen

<b>Scratches</b>
Sebastian Collberg (Healthy), Shane Hanna (Healthy), Kevin Labanc (Healthy)</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Bennett              Filip Forsberg           Danton Heinen            35     0   2  3  
 2 Eric Staal               Rick Nash                Anthony Duclair          35     0   2  3  
 3 Austin Watson            Beau Bennett             Kevin Roy                20     0   3  2  
 4 Greg McKegg              Dustin Brown             Jason Pominville         10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Alexander Urbom                                   35     0   3  2  
 2 Roman Josi               Oscar Klefbom                                     30     0   3  2  
 3 Darnell Nurse            Brandon Montour                                   30     0   2  3  
 4 Alex Pietrangelo         Darnell Nurse                                     5      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Bennett              Filip Forsberg           Danton Heinen            60     0   0  5  
 2 Eric Staal               Anthony Duclair          Rick Nash                40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Roman Josi                                        60     0   1  4  
 2 Oscar Klefbom            Darnell Nurse                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Eric Staal               Dustin Brown             50     1   4  0  
 2 Austin Watson            Greg McKegg              50     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Alexander Urbom          60     1   4  0  
 2 Brandon Montour          Roman Josi               40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Eric Staal                                        55     0   5  0  
 2 Sam Bennett                                       45     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Urbom          Alex Pietrangelo         60     0   5  0  
 2 Roman Josi               Oscar Klefbom            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sam Bennett              Filip Forsberg           60     1   1  3  
 2 Eric Staal               Danton Heinen            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Roman Josi               60     1   2  2  
 2 Alexander Urbom          Oscar Klefbom            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Bennett              Danton Heinen            Filip Forsberg           Alex Pietrangelo         Roman Josi               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Bennett              Eric Staal               Filip Forsberg           Alex Pietrangelo         Alexander Urbom          

<b>Goaltenders</b>
Starting : Jaroslav Halak           
Backup : Jonas Hiller             

<b>Extra Forwards</b>
Normal : Filip Forsberg, Anthony Duclair, Danton Heinen - PP : Filip Forsberg, Anthony Duclair - PK : Austin Watson
<b>Extra Defensemen</b>
Normal : Alex Pietrangelo, Roman Josi, Darnell Nurse - PP : Alex Pietrangelo - PK : Alex Pietrangelo, Alexander Urbom
<b>Penalty Shots</b>
Kevin Roy, Filip Forsberg, Eric Staal, Anthony Duclair, Danton Heinen
<b>Custom OT Lines Forwards</b>
Sam Bennett, Filip Forsberg, Danton Heinen, Anthony Duclair, Rick Nash, Kevin Roy, Eric Staal, Greg McKegg, Austin Watson, Dustin Brown
<b>Custom OT Lines Defensemen</b>
Alex Pietrangelo, Oscar Klefbom, Roman Josi, Darnell Nurse, Alexander Urbom

<b>Scratches</b>
Sidney Crosby (Strained Groin Injury)</pre></div>
<h1 class="TeamLinesPro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Karson Kuhlman           Brett Pollock            Oliver Bjorkstrand       36     1   3  1  
 2 Mitch Marner             Peter Trainor            Kirill Kaprizov          34     0   1  4  
 3 Miikka Salomäki          John Quenneville         Drew Shore               20     1   2  2  
 4 Freddie Hamilton         Tuomo Ruutu              Trevor Moore             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Faulk             Brett Pesce                                       36     1   3  1  
 2 Dmitri Orlov             Tyson Barrie                                      34     1   3  1  
 3 Marc-Andre Bourdon       Nate Schmidt                                      30     1   3  1  
 4 Dmitri Orlov             Nate Schmidt                                      0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mitch Marner             Kirill Kaprizov          Oliver Bjorkstrand       60     0   0  5  
 2 Peter Trainor            John Quenneville         Drew Shore               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Orlov             Justin Faulk                                      60     0   0  5  
 2 Nate Schmidt             Tyson Barrie                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Karson Kuhlman           Trevor Moore             50     0   5  0  
 2 Freddie Hamilton         Miikka Salomäki          50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc-Andre Bourdon       Brett Pesce              50     0   5  0  
 2 Justin Faulk             Tyson Barrie             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Karson Kuhlman                                    50     0   5  0  
 2 Freddie Hamilton                                  50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc-Andre Bourdon       Brett Pesce              50     0   5  0  
 2 Justin Faulk             Tyson Barrie             50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mitch Marner             Oliver Bjorkstrand       50     1   1  3  
 2 Peter Trainor            Kirill Kaprizov          50     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Brett Pesce              50     1   2  2  
 2 Dmitri Orlov             Tyson Barrie             50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mitch Marner             Kirill Kaprizov          Oliver Bjorkstrand       Dmitri Orlov             Justin Faulk             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Karson Kuhlman           Trevor Moore             Freddie Hamilton         Marc-Andre Bourdon       Brett Pesce              

<b>Goaltenders</b>
Starting : Carter Hart              
Backup : Tristan Jarry            

<b>Extra Forwards</b>
Normal : Mitch Marner, Kirill Kaprizov, Oliver Bjorkstrand - PP : Drew Shore, Trevor Moore - PK : Brett Pollock
<b>Extra Defensemen</b>
Normal : Dmitri Orlov, Justin Faulk, Tyson Barrie - PP : Brett Pesce - PK : Dmitri Orlov, Nate Schmidt
<b>Penalty Shots</b>
Mitch Marner, Kirill Kaprizov, Karson Kuhlman, Peter Trainor, Oliver Bjorkstrand
<b>Custom OT Lines Forwards</b>
Mitch Marner, Kirill Kaprizov, Peter Trainor, Oliver Bjorkstrand, Karson Kuhlman, Miikka Salomäki, John Quenneville, Drew Shore, Freddie Hamilton, Trevor Moore
<b>Custom OT Lines Defensemen</b>
Dmitri Orlov, Justin Faulk, Tyson Barrie, Brett Pesce, Nate Schmidt

<b>Scratches</b>
Sam Reinhart (Healthy)</pre></div>
<h1 class="TeamLinesPro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Henrik Samuelsson        Ondrej Kase              35     1   2  2  
 2 Kevin Stenlund           Jonathan Audy-MarchessaulJared McCann             30     1   2  2  
 3 Victor Rask              Ryan Spooner             Alexander Delnov         20     1   2  2  
 4 Zach Hall                Kevin Stenlund           Blake Coleman            15     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Will Butcher             Jacob Trouba                                      35     1   2  2  
 2 Steven Santini           Ryan Whitney                                      30     1   2  2  
 3 T.J. Brennan             Thomas Hickey                                     20     1   2  2  
 4 Will Butcher             Jacob Trouba                                      15     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Henrik Samuelsson        Ondrej Kase              60     1   2  2  
 2 Blake Coleman            Jonathan Audy-MarchessaulJared McCann             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Trouba             Will Butcher                                      60     1   2  2  
 2 Ryan Whitney             T.J. Brennan                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Audy-MarchessaulBlake Coleman            60     1   2  2  
 2 Victor Rask              Ondrej Kase              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Will Butcher             Thomas Hickey            60     1   2  2  
 2 Steven Santini           T.J. Brennan             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jack Eichel                                       60     1   2  2  
 2 Blake Coleman                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Thomas Hickey            60     1   2  2  
 2 Steven Santini           T.J. Brennan             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Eichel              Jared McCann             60     1   2  2  
 2 Jonathan Audy-MarchessaulOndrej Kase              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 T.J. Brennan             Will Butcher             60     1   2  2  
 2 Thomas Hickey            Jacob Trouba             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Jonathan Audy-MarchessaulOndrej Kase              Jacob Trouba             Will Butcher             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Ryan Spooner             Blake Coleman            Thomas Hickey            Steven Santini           

<b>Goaltenders</b>
Starting : Frederik Andersen        
Backup : Keith Kinkaid            

<b>Extra Forwards</b>
Normal : Henrik Samuelsson, Jonathan Audy-Marchessault, Jack Eichel - PP : Henrik Samuelsson, Jonathan Audy-Marchessault - PK : Ondrej Kase
<b>Extra Defensemen</b>
Normal : Will Butcher, Steven Santini, Jacob Trouba - PP : Steven Santini - PK : Will Butcher, T.J. Brennan
<b>Penalty Shots</b>
Jonathan Audy-Marchessault, Ondrej Kase, Henrik Samuelsson, Ryan Spooner, Jack Eichel
<b>Custom OT Lines Forwards</b>
Jack Eichel, Jared McCann, Kevin Stenlund, Victor Rask, Ondrej Kase, Blake Coleman, Henrik Samuelsson, Ryan Spooner, Jonathan Audy-Marchessault, Alexander Delnov
<b>Custom OT Lines Defensemen</b>
Thomas Hickey, Will Butcher, T.J. Brennan, Jacob Trouba, Steven Santini

<b>Scratches</b>
Andrew Cogliano (Left Foot Injury), Reilly Smith (Right Knee Injury), Ilya Sorokin (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Strome             Max Friberg              Mark Stone               40     1   1  3  
 2 Lars Eller               Nick Cousins             David Krejci             25     1   1  3  
 3 Michael Frolik           Vince Hinostroza         Gabriel Bourque          20     1   1  3  
 4 Luke Adam                David Perron             Tom Wilson               15     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 David Savard             Chris Bigras                                      35     1   1  3  
 2 Vince Dunn               Mac Weegar                                        30     0   3  2  
 3 Robbie Russo             Jyrki Jokipakka                                   25     0   3  2  
 4 Jyrki Jokipakka          David Savard                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Lars Eller               Max Friberg              Gabriel Bourque          60     0   0  5  
 2 Nick Cousins             Michael Frolik           Mark Stone               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 David Savard             Chris Bigras                                      60     0   0  5  
 2 Mac Weegar               Vince Dunn                                        40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gabriel Bourque          Tom Wilson               60     1   2  2  
 2 Lars Eller               Mark Stone               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jyrki Jokipakka          Robbie Russo             60     1   2  2  
 2 David Perron             Mac Weegar               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tom Wilson                                        60     1   2  2  
 2 Gabriel Bourque                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jyrki Jokipakka          Robbie Russo             60     1   2  2  
 2 David Savard             Mac Weegar               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lars Eller               Michael Frolik           60     1   2  2  
 2 Gabriel Bourque          Tom Wilson               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Robbie Russo             Chris Bigras             60     1   2  2  
 2 David Savard             Mac Weegar               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dylan Strome             Max Friberg              Lars Eller               David Savard             Chris Bigras             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Gabriel Bourque          Lars Eller               Tom Wilson               Jyrki Jokipakka          Robbie Russo             

<b>Goaltenders</b>
Starting : Ben Bishop               
Backup : Jared Coreau             

<b>Extra Forwards</b>
Normal : Michael Frolik, Lars Eller, Gabriel Bourque - PP : Michael Frolik, Gabriel Bourque - PK : Michael Frolik
<b>Extra Defensemen</b>
Normal : Jyrki Jokipakka, Mac Weegar, David Savard - PP : Mac Weegar - PK : Chris Bigras, Mac Weegar
<b>Penalty Shots</b>
Lars Eller, Tom Wilson, Michael Frolik, Nick Cousins, Gabriel Bourque
<b>Custom OT Lines Forwards</b>
Dylan Strome, Max Friberg, Lars Eller, Mark Stone, Nick Cousins, Gabriel Bourque, Michael Frolik, David Perron, Tom Wilson, Luke Adam
<b>Custom OT Lines Defensemen</b>
Chris Bigras, David Savard, Jyrki Jokipakka, Mac Weegar, Robbie Russo

<b>Scratches</b>
Anton Volchenkov (Healthy), Jakob Silfverberg (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Point            J.T. Miller              Travis Konecny           29     0   1  4  
 2 Aleksander Barkov        Tyler Bertuzzi           Damir Zhafyarov          28     0   1  4  
 3 Alexander Wennberg       Viktor Arvidsson         Jakub Vrana              28     1   1  3  
 4 Carter Verhaeghe         Jesper Bratt             Christian Thomas         15     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan McDonagh            Adam Pelech                                       34     1   2  2  
 2 Shea Theodore            Griffin Reinhart                                  33     1   2  2  
 3 Jake McCabe              Dylan McIlrath                                    33     1   2  2  
 4 Adam Pelech              Dylan McIlrath                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Point            Alexander Wennberg       Jakub Vrana              60     0   0  5  
 2 Aleksander Barkov        Viktor Arvidsson         Travis Konecny           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan McDonagh            Shea Theodore                                     60     0   1  4  
 2 Jake McCabe              Griffin Reinhart                                  40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Brayden Point            60     1   4  0  
 2 Alexander Wennberg       Viktor Arvidsson         40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Griffin Reinhart         Dylan McIlrath           60     1   4  0  
 2 Ryan McDonagh            Adam Pelech              40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Aleksander Barkov                                 60     0   5  0  
 2 Alexander Wennberg                                40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dylan McIlrath           Griffin Reinhart         60     0   5  0  
 2 Ryan McDonagh            Adam Pelech              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexander Wennberg       Jakub Vrana              60     1   2  2  
 2 Viktor Arvidsson         Aleksander Barkov        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Pelech              Jake McCabe              60     1   2  2  
 2 Griffin Reinhart         Dylan McIlrath           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brayden Point            Viktor Arvidsson         Damir Zhafyarov          Ryan McDonagh            Shea Theodore            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Viktor Arvidsson         Tyler Bertuzzi           Griffin Reinhart         Dylan McIlrath           

<b>Goaltenders</b>
Starting : Henrik Lundqvist         
Backup : Jack Campbell            

<b>Extra Forwards</b>
Normal : Alexander Wennberg, Aleksander Barkov, Viktor Arvidsson - PP : Alexander Wennberg, Jakub Vrana - PK : Aleksander Barkov
<b>Extra Defensemen</b>
Normal : Adam Pelech, Griffin Reinhart, Dylan McIlrath - PP : Jake McCabe - PK : Dylan McIlrath, Shea Theodore
<b>Penalty Shots</b>
Jakub Vrana, Aleksander Barkov, Viktor Arvidsson, Brayden Point, Alexander Wennberg
<b>Custom OT Lines Forwards</b>
Brayden Point, Aleksander Barkov, Damir Zhafyarov, Viktor Arvidsson, J.T. Miller, Tyler Bertuzzi, Alexander Wennberg, Jakub Vrana, Travis Konecny, Christian Thomas
<b>Custom OT Lines Defensemen</b>
Ryan McDonagh, Shea Theodore, Dylan McIlrath, Jake McCabe, Griffin Reinhart

<b>Scratches</b>
Nail Yakupov (Broken Right Index Finger Injury)</pre></div>
<h1 class="TeamLinesPro_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andreas Athanasiou       Gustav Nyquist           Josh Ho-Sang             37     0   1  4  
 2 Drake Caggiula           Tyler Toffoli            Alexander Nylander       32     0   1  4  
 3 Luke Henman              Laurent Dauphin          Matt Puempel             21     0   1  4  
 4 Zack Phillips            Evan Rodrigues           Tyler Toffoli            10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Merkley             Jamie McBain                                      25     0   3  2  
 2 Alec Martinez            Andrej Meszaros                                   25     0   3  2  
 3 Steven Kampfer           Karl Alzner                                       25     0   4  1  
 4 Jamie McBain             Karl Alzner                                       25     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andreas Athanasiou       Gustav Nyquist           Josh Ho-Sang             60     0   1  4  
 2 Zack Phillips            Tyler Toffoli            Alexander Nylander       40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Merkley             Jamie McBain                                      60     0   1  4  
 2 Karl Alzner              Alec Martinez                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Luke Henman              Drake Caggiula           60     0   3  2  
 2 Evan Rodrigues           Laurent Dauphin          40     0   3  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrej Meszaros          Alec Martinez            60     0   3  2  
 2 Karl Alzner              Jamie McBain             40     0   3  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Laurent Dauphin                                   60     0   4  1  
 2 Evan Rodrigues                                    40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Steven Kampfer           Alec Martinez            60     0   4  1  
 2 Karl Alzner              Jamie McBain             40     0   4  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Laurent Dauphin          Gustav Nyquist           60     0   2  3  
 2 Evan Rodrigues           Drake Caggiula           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Steven Kampfer           Karl Alzner              60     0   3  2  
 2 Alec Martinez            Jamie McBain             40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Maxim Shalunov           Andreas Athanasiou       Gustav Nyquist           Ryan Merkley             Jamie McBain             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Toffoli            Laurent Dauphin          Gustav Nyquist           Alec Martinez            Jamie McBain             

<b>Goaltenders</b>
Starting : Pekka Rinne              
Backup : Alex Lyon                

<b>Extra Forwards</b>
Normal : Andreas Athanasiou, Gustav Nyquist, Laurent Dauphin - PP : Andreas Athanasiou, Gustav Nyquist - PK : Drake Caggiula
<b>Extra Defensemen</b>
Normal : Alec Martinez, Jamie McBain, Ryan Merkley - PP : Jamie McBain - PK : Jamie McBain, Alec Martinez
<b>Penalty Shots</b>
Evan Rodrigues, Andreas Athanasiou, Gustav Nyquist, Tyler Toffoli, Laurent Dauphin
<b>Custom OT Lines Forwards</b>
Andreas Athanasiou, Gustav Nyquist, Laurent Dauphin, Drake Caggiula, Tyler Toffoli, Evan Rodrigues, Maxim Shalunov, Luke Henman, Zack Phillips, Josh Ho-Sang
<b>Custom OT Lines Defensemen</b>
Alec Martinez, Steven Kampfer, Andrej Meszaros, Jamie McBain, Karl Alzner

<b>Scratches</b>
Mattias Tedenby (Chest/Ribs Injury), Colin Miller (Healthy), Magnus Nygren (Healthy)</pre></div>
<h1 class="TeamLinesPro_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Ryan Nugent-Hopkins      Tomas Hertl              25     0   0  5  
 2 Curtis Lazar             Brendan Ranford          Nick Schmaltz            25     0   0  5  
 3 Elias Pettersson         Joakim Nordstrom         Andreas Johnsson         25     0   0  5  
 4 Artem Anisimov           Claude Giroux            Nick Shore               25     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Larsson             Mark Giordano                                     37     0   2  3  
 2 Ryan Murray              John Moore                                        37     0   2  3  
 3 Travis Brown             David Rundblad                                    26     0   2  3  
 4 Adam Larsson             Mark Giordano                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Ryan Nugent-Hopkins      Tomas Hertl              60     0   0  5  
 2 Curtis Lazar             Brendan Ranford          Nick Schmaltz            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Larsson             Mark Giordano                                     60     0   0  5  
 2 Ryan Murray              John Moore                                        40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins      Joakim Nordstrom         60     0   5  0  
 2 Nick Shore               Claude Giroux            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Rundblad           Travis Brown             60     0   5  0  
 2 Ryan Murray              John Moore               40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Claude Giroux                                     60     0   5  0  
 2 Ryan Nugent-Hopkins                               40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Larsson             Mark Giordano            60     0   5  0  
 2 Ryan Murray              John Moore               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Claude Giroux            Ryan Nugent-Hopkins      60     0   0  5  
 2 Tomas Hertl              Curtis Lazar             40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Larsson             Mark Giordano            60     0   2  3  
 2 Ryan Murray              John Moore               40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Ryan Nugent-Hopkins      Tomas Hertl              Adam Larsson             Ryan Murray              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Ryan Nugent-Hopkins      Tomas Hertl              Adam Larsson             Ryan Murray              

<b>Goaltenders</b>
Starting : Jonathan Quick           
Backup : Brian Elliott            

<b>Extra Forwards</b>
Normal : Nick Shore, Joakim Nordstrom, Andreas Johnsson - PP : Nick Shore, Joakim Nordstrom - PK : Andreas Johnsson
<b>Extra Defensemen</b>
Normal : Travis Brown, David Rundblad, Ryan Murray - PP : Travis Brown - PK : David Rundblad, Ryan Murray
<b>Penalty Shots</b>
Claude Giroux, Ryan Nugent-Hopkins, Tomas Hertl, Curtis Lazar, Brendan Ranford
<b>Custom OT Lines Forwards</b>
Claude Giroux, Ryan Nugent-Hopkins, Tomas Hertl, Curtis Lazar, Brendan Ranford, Nick Schmaltz, Joakim Nordstrom, Andreas Johnsson, Nick Shore, Artem Anisimov
<b>Custom OT Lines Defensemen</b>
Adam Larsson, Mark Giordano, Ryan Murray, David Rundblad, Travis Brown

<b>Scratches</b>
Andrei Svechnikov (Healthy), Nolan Patrick (Healthy), Jaroslav Janus (Healthy)</pre></div>
<h1 class="TeamLinesPro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Paul Stastny             Alexander Burmistrov     Matt Duchene             35     1   1  3  
 2 Brandon Sutter           Bobby Ryan               Patric Hornqvist         33     1   1  3  
 3 Tyler Bozak              Kris Versteeg            Jiri Sekac               26     1   2  2  
 4 Stephen Weiss            Matt Duchene             Nathan Horton            6      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Johnson             Ryan Wilson                                       37     0   2  3  
 2 Justin Braun             Tim Erixon                                        33     1   2  2  
 3 Anton Stralman           Robert Bortuzzo                                   20     1   3  1  
 4 Justin Braun             Anton Stralman                                    10     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Paul Stastny             Alexander Burmistrov     Matt Duchene             50     0   0  5  
 2 Tyler Bozak              Kris Versteeg            Brandon Sutter           50     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Bobby Ryan               Erik Johnson                                      50     0   1  4  
 2 Tim Erixon               Patric Hornqvist                                  50     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Bozak              Jiri Sekac               50     1   4  0  
 2 Stephen Weiss            Brandon Sutter           50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Johnson             Ryan Wilson              50     1   4  0  
 2 Justin Braun             Robert Bortuzzo          50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alexander Burmistrov                              55     1   3  1  
 2 Jiri Sekac                                        45     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Johnson             Ryan Wilson              55     1   3  1  
 2 Justin Braun             Tim Erixon               45     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Matt Duchene             Alexander Burmistrov     60     0   2  3  
 2 Paul Stastny             Brandon Sutter           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Johnson             Bobby Ryan               60     1   2  2  
 2 Justin Braun             Tim Erixon               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Paul Stastny             Bobby Ryan               Matt Duchene             Erik Johnson             Tim Erixon               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Bozak              Alexander Burmistrov     Brandon Sutter           Erik Johnson             Ryan Wilson              

<b>Goaltenders</b>
Starting : Matt Murray              
Backup : Cam Ward                 

<b>Extra Forwards</b>
Normal : Matt Duchene, Alexander Burmistrov, Bobby Ryan - PP : Tyler Bozak, Nathan Horton - PK : Stephen Weiss
<b>Extra Defensemen</b>
Normal : Erik Johnson, Justin Braun, Tim Erixon - PP : Anton Stralman - PK : Justin Braun, Anton Stralman
<b>Penalty Shots</b>
Matt Duchene, Brandon Sutter, Bobby Ryan, Patric Hornqvist, Paul Stastny
<b>Custom OT Lines Forwards</b>
Matt Duchene, Alexander Burmistrov, Paul Stastny, Bobby Ryan, Brandon Sutter, Kris Versteeg, Tyler Bozak, Patric Hornqvist, Stephen Weiss, Jiri Sekac
<b>Custom OT Lines Defensemen</b>
Erik Johnson, Tim Erixon, Anton Stralman, Justin Braun, Ryan Wilson

<b>Scratches</b>
Martin Erat (Healthy), Matt Martin (Healthy), Vinny Saponari (Healthy)</pre></div>
<h1 class="TeamLinesPro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Colin Wilson             Jake Guentzel            Zach Aston-Reese         35     0   0  5  
 2 Ryan Getzlaf             T.J. Oshie               Johan Larsson            30     0   0  5  
 3 Lukas Sedlak             Alexander Semin          Connor Brown             20     0   2  3  
 4 Frank Vatrano            Tom Kuhnhackl            Nick Foligno             15     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser                                      35     1   2  2  
 2 Connor Murphy            Mike Reilly                                       35     1   2  2  
 3 Brett Kulak              Dillon Fournier                                   30     1   2  2  
 4 Brendan Smith            Dan DeKeyser                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Colin Wilson             Jake Guentzel            Zach Aston-Reese         60     1   2  2  
 2 Ryan Getzlaf             T.J. Oshie               Alexander Semin          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brendan Smith            Mike Reilly                                       60     1   2  2  
 2 Connor Murphy            Dan DeKeyser                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colin Wilson             Ryan Getzlaf             60     1   2  2  
 2 Jake Guentzel            Nick Foligno             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser             60     1   2  2  
 2 Connor Murphy            Brett Kulak              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Colin Wilson                                      60     1   2  2  
 2 Ryan Getzlaf                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser             60     1   2  2  
 2 Connor Murphy            Brett Kulak              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colin Wilson             Ryan Getzlaf             60     1   2  2  
 2 Jake Guentzel            Nick Foligno             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Dan DeKeyser             60     1   2  2  
 2 Connor Murphy            Brett Kulak              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Colin Wilson             Jake Guentzel            Nick Foligno             Brendan Smith            Dan DeKeyser             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Colin Wilson             Jake Guentzel            Nick Foligno             Brendan Smith            Dan DeKeyser             

<b>Goaltenders</b>
Starting : Kari Lehtonen            
Backup : Simeon Varlamov          

<b>Extra Forwards</b>
Normal : Connor Brown, Zach Aston-Reese, Frank Vatrano - PP : Connor Brown, Alexander Semin - PK : Frank Vatrano
<b>Extra Defensemen</b>
Normal : Mike Reilly, Dillon Fournier, Connor Murphy - PP : Mike Reilly - PK : Dillon Fournier, Connor Murphy
<b>Penalty Shots</b>
Colin Wilson, Ryan Getzlaf, Jake Guentzel, Nick Foligno, T.J. Oshie
<b>Custom OT Lines Forwards</b>
Colin Wilson, Ryan Getzlaf, Jake Guentzel, Nick Foligno, T.J. Oshie, Johan Larsson, Connor Brown, Alexander Semin, Frank Vatrano, Lukas Sedlak
<b>Custom OT Lines Defensemen</b>
Brendan Smith, Dan DeKeyser, Connor Murphy, Brett Kulak, Mike Reilly

<b>Scratches</b>
J.T. Brown (Healthy), Matthew Peca (Healthy), Nick Ebert (Healthy)</pre></div>
<h1 class="TeamLinesPro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Kesler              Jacob Josefson           Matthew Nieto            35     0   0  5  
 2 Tyler Ennis              Mike Hoffman             Timo Meier               30     0   0  5  
 3 Radek Faksa              Clayton Keller           Marcus Kruger            30     1   3  1  
 4 Maxime St-Cyr            Brock McGinn             Yanni Gourde             5      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jack Johnson             Keith Yandle                                      35     1   3  1  
 2 Seth Jones               Noah Dobson                                       35     1   3  1  
 3 Frank Corrado            Aaron Ness                                        30     1   2  2  
 4 Jack Johnson             Frank Corrado                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Kesler              Tyler Ennis              Timo Meier               60     0   1  4  
 2 Jacob Josefson           Clayton Keller           Matthew Nieto            40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jack Johnson             Keith Yandle                                      60     1   2  2  
 2 Seth Jones               Noah Dobson                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Kesler              Brock McGinn             60     1   3  1  
 2 Marcus Kruger            Radek Faksa              40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Johnson             Frank Corrado            60     1   3  1  
 2 Keith Yandle             Aaron Ness               40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan Kesler                                       60     1   4  0  
 2 Radek Faksa                                       40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Johnson             Frank Corrado            60     2   3  0  
 2 Keith Yandle             Aaron Ness               40     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob Josefson           Mike Hoffman             60     1   1  3  
 2 Tyler Ennis              Timo Meier               40     1   3  1  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Johnson             Seth Jones               60     1   2  2  
 2 Noah Dobson              Keith Yandle             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jacob Josefson           Tyler Ennis              Timo Meier               Jack Johnson             Keith Yandle             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Kesler              Matthew Nieto            Brock McGinn             Jack Johnson             Seth Jones               

<b>Goaltenders</b>
Starting : Cory Schneider           
Backup : Chase Marchand           

<b>Extra Forwards</b>
Normal : Tyler Ennis, Ryan Kesler, Mike Hoffman - PP : Mike Hoffman, Tyler Ennis - PK : Brock McGinn
<b>Extra Defensemen</b>
Normal : Jack Johnson, Aaron Ness, Frank Corrado - PP : Frank Corrado - PK : Aaron Ness, Jack Johnson
<b>Penalty Shots</b>
Tyler Ennis, Ryan Kesler, Timo Meier, Jacob Josefson, Matthew Nieto
<b>Custom OT Lines Forwards</b>
Jacob Josefson, Timo Meier, Ryan Kesler, Matthew Nieto, Tyler Ennis, Clayton Keller, Brock McGinn, Radek Faksa, Marcus Kruger, Mike Hoffman
<b>Custom OT Lines Defensemen</b>
Jack Johnson, Keith Yandle, Seth Jones, Frank Corrado, Aaron Ness

<b>Scratches</b>
Duncan Keith (Healthy), Mark Fayne (Healthy), Jean-Christophe Beaudin (Healthy)</pre></div>
<h1 class="TeamLinesPro_SEA"><a id="SeattleSaints">Seattle Saints</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Saints Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#SeattleSaints">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#SeattleSaints">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#SeattleSaints">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#SeattleSaints">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#SeattleSaints">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#SeattleSaints">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#SeattleSaints">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#SeattleSaints">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#SeattleSaints">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#SeattleSaints">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#SeattleSaints">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#SeattleSaints">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleSaints');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleSaints" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Schenn           Nicolas Petan            Sven Baertschi           32     0   0  5  
 2 Martin Reway             Max Pacioretty           Ilya Kovalchuk           30     0   0  5  
 3 Patrik Berglund          Evgeny Dadonov           Nino Niederreiter        29     0   0  5  
 4 Patrice Cormier          Curtis Hamilton          David Kampf              9      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brayden McNabb           Noah Hanifin                                      37     0   1  4  
 2 Jake Dotchin             David Musil                                       34     0   1  4  
 3 Raman Hrabarenka         Ian McCoshen                                      29     0   2  3  
 4 Brayden McNabb           Raman Hrabarenka                                  0      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Schenn           Evgeny Dadonov           Ilya Kovalchuk           55     0   0  5  
 2 Nicolas Petan            Max Pacioretty           Sven Baertschi           45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brayden McNabb           Noah Hanifin                                      60     0   0  5  
 2 Raman Hrabarenka         Ian McCoshen                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrik Berglund          Curtis Hamilton          60     0   5  0  
 2 Patrice Cormier          David Kampf              40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Dotchin             Noah Hanifin             60     0   5  0  
 2 David Musil              Raman Hrabarenka         40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 David Kampf                                       60     0   5  0  
 2 Patrice Cormier                                   40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Raman Hrabarenka         Brayden McNabb           60     0   5  0  
 2 Jake Dotchin             Noah Hanifin             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrik Berglund          Curtis Hamilton          60     0   0  5  
 2 Martin Reway             David Kampf              40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian McCoshen             Brayden McNabb           60     0   1  4  
 2 Raman Hrabarenka         Noah Hanifin             40     0   1  4  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brayden Schenn           Nicolas Petan            Sven Baertschi           Noah Hanifin             Ilya Kovalchuk           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Cormier          Curtis Hamilton          David Kampf              David Musil              Jake Dotchin             

<b>Goaltenders</b>
Starting : Robin Lehner             
Backup : Anders Lindback          

<b>Extra Forwards</b>
Normal : Nicolas Petan, Nino Niederreiter, Martin Reway - PP : Nino Niederreiter, Patrik Berglund - PK : Martin Reway
<b>Extra Defensemen</b>
Normal : Brayden McNabb, Raman Hrabarenka, Ian McCoshen - PP : Raman Hrabarenka - PK : Ian McCoshen, Noah Hanifin
<b>Penalty Shots</b>
Brayden Schenn, Ilya Kovalchuk, Max Pacioretty, Nicolas Petan, Sven Baertschi
<b>Custom OT Lines Forwards</b>
Brayden Schenn, Sven Baertschi, Martin Reway, Ilya Kovalchuk, Nicolas Petan, Max Pacioretty, Nino Niederreiter, Evgeny Dadonov, Curtis Hamilton, Patrik Berglund
<b>Custom OT Lines Defensemen</b>
Noah Hanifin, Raman Hrabarenka, Ian McCoshen, Brayden McNabb, Jake Dotchin

<b>Scratches</b>
Angelo Miceli (Healthy), Andreas Borgman (Dislocated Patella Injury)</pre></div>
<h1 class="TeamLinesPro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Nazem Kadri              Nathan MacKinnon         30     0   0  5  
 2 Mark Scheifele           Artemi Panarin           James Neal               29     0   0  5  
 3 Tomas Plekanec           Valeri Nichushkin        Theodor Blueger          26     0   1  4  
 4 Brandon Dubinsky         Peter Regin              Nick Palmieri            15     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Adam Almqvist                                     36     1   2  2  
 2 Ian Cole                 Jamie Oleksiak                                    34     1   2  2  
 3 Kevin Klein              Matt Niskanen                                     20     0   4  1  
 4 Ian Cole                 Marc-Edouard Vlasic                               10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nathan MacKinnon         James Neal               Mark Scheifele           50     1   0  4  
 2 Evgeny Kuznetsov         Theodor Blueger          Valeri Nichushkin        50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Artemi Panarin           Nazem Kadri                                       50     1   0  4  
 2 Ian Cole                 Marc-Edouard Vlasic                               50     1   0  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tomas Plekanec           Brandon Dubinsky         50     0   1  4  
 2 Theodor Blueger          James Neal               50     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian Cole                 Marc-Edouard Vlasic      50     1   4  0  
 2 Adam Almqvist            Kevin Klein              50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tomas Plekanec                                    55     1   2  2  
 2 Nick Palmieri                                     45     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Ian Cole                 55     1   4  0  
 2 Adam Almqvist            Kevin Klein              45     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mark Scheifele           Nathan MacKinnon         50     1   2  2  
 2 Evgeny Kuznetsov         James Neal               50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Artemi Panarin           Ian Cole                 50     0   1  4  
 2 Nazem Kadri              Marc-Edouard Vlasic      50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Artemi Panarin           Nathan MacKinnon         Ian Cole                 Marc-Edouard Vlasic      

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tomas Plekanec           James Neal               Nathan MacKinnon         Marc-Edouard Vlasic      Jamie Oleksiak           

<b>Goaltenders</b>
Starting : Richard Bachman          
Backup : Tuukka Rask              

<b>Extra Forwards</b>
Normal : Nathan MacKinnon, Mark Scheifele, Artemi Panarin - PP : Tomas Plekanec, Nick Palmieri - PK : Nathan MacKinnon
<b>Extra Defensemen</b>
Normal : Marc-Edouard Vlasic, Ian Cole, Adam Almqvist - PP : Marc-Edouard Vlasic - PK : Ian Cole, Adam Almqvist
<b>Penalty Shots</b>
Mark Scheifele, Nazem Kadri, Evgeny Kuznetsov, Nathan MacKinnon, James Neal
<b>Custom OT Lines Forwards</b>
Nathan MacKinnon, Evgeny Kuznetsov, Mark Scheifele, Nazem Kadri, James Neal, Nick Palmieri, Theodor Blueger, Peter Regin, Tomas Plekanec, Artemi Panarin
<b>Custom OT Lines Defensemen</b>
Matt Niskanen, Marc-Edouard Vlasic, Ian Cole, Adam Almqvist, Kevin Klein

<b>Scratches</b>
Mason Appleton (Healthy), Brady Skjei (Healthy), John Klingberg (Fractured Left Foot Injury)</pre></div>
<h1 class="TeamLinesPro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jean-Gabriel Pageau      Boone Jenner             Charlie Coyle            38     3   1  1  
 2 Ryan Strome              Marcus Johansson         David Pastrnak           30     1   3  1  
 3 Mikael Backlund          Quinton Howden           Jeff Carter              20     3   1  1  
 4 Zach Hyman               Devante Smith-Pelly      Pontus Aberg             12     4   1  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 P.K. Subban              Patrik Nemeth                                     37     1   3  1  
 2 Brian Dumoulin           Esa Lindell                                       33     2   3  0  
 3 Marc Staal               Tucker Poolman                                    30     2   3  0  
 4 Marc Staal               Esa Lindell                                       0      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Marcus Johansson         Boone Jenner             David Pastrnak           63     0   0  5  
 2 Ryan Strome              Quinton Howden           Charlie Coyle            37     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 P.K. Subban              Esa Lindell                                       63     0   0  5  
 2 Brian Dumoulin           Marc Staal                                        37     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Quinton Howden           David Pastrnak           50     1   4  0  
 2 Boone Jenner             Devante Smith-Pelly      50     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Esa Lindell              50     1   4  0  
 2 P.K. Subban              Brian Dumoulin           50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Quinton Howden                                    60     2   3  0  
 2 David Pastrnak                                    40     2   3  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Esa Lindell              60     0   5  0  
 2 P.K. Subban              Brian Dumoulin           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Marcus Johansson         David Pastrnak           65     0   1  4  
 2 Boone Jenner             Jeff Carter              35     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 P.K. Subban              Esa Lindell              65     0   3  2  
 2 Brian Dumoulin           Marc Staal               35     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Marcus Johansson         Boone Jenner             David Pastrnak           P.K. Subban              Esa Lindell              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Boone Jenner             Quinton Howden           Devante Smith-Pelly      Patrik Nemeth            Marc Staal               

<b>Goaltenders</b>
Starting : John Gibson              
Backup : Edward Pasquale          

<b>Extra Forwards</b>
Normal : David Pastrnak, Pontus Aberg, Boone Jenner - PP : David Pastrnak, Pontus Aberg - PK : David Pastrnak
<b>Extra Defensemen</b>
Normal : Brian Dumoulin, Esa Lindell, P.K. Subban - PP : Tucker Poolman - PK : Esa Lindell, Brian Dumoulin
<b>Penalty Shots</b>
David Pastrnak, Marcus Johansson, Jeff Carter, Charlie Coyle, P.K. Subban
<b>Custom OT Lines Forwards</b>
Marcus Johansson, David Pastrnak, Boone Jenner, Ryan Strome, Charlie Coyle, Jeff Carter, Quinton Howden, Mikael Backlund, Devante Smith-Pelly, Pontus Aberg
<b>Custom OT Lines Defensemen</b>
P.K. Subban, Brian Dumoulin, Tucker Poolman, Esa Lindell, Marc Staal

<b>Scratches</b>
Joonas Donskoi (Healthy), Nikita Zadorov (Healthy), Malcolm Subban (Healthy)</pre></div>
<h1 class="TeamLinesPro_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Sebastian Aho            Teemu Pulkkinen          35     0   1  4  
 2 Mikko Rantanen           Emerson Etem             Kasperi Kapanen          30     0   1  4  
 3 Louis Leblanc            Juuso Ikonen             Joel Armia               20     1   2  2  
 4 Sam Carrick              Zack Kassian             Tyler Biggs              15     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Morgan Rielly            Ville Pokka                                       40     0   2  3  
 2 Tobias Enstrom           Samuel Girard                                     35     1   2  2  
 3 Trevor Smith             Troy Stecher                                      25     1   3  1  
 4 Tobias Enstrom           Morgan Rielly                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Sebastian Aho            Mikko Rantanen           60     0   0  5  
 2 Zack Kassian             Emerson Etem             Teemu Pulkkinen          40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Morgan Rielly            Troy Stecher                                      60     0   2  3  
 2 Ville Pokka              Tobias Enstrom                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mikko Rantanen           Zack Kassian             60     1   4  0  
 2 Nicklas Backstrom        Tyler Biggs              40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Troy Stecher             Ville Pokka              60     1   4  0  
 2 Tobias Enstrom           Morgan Rielly            40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sebastian Aho                                     60     0   5  0  
 2 Nicklas Backstrom                                 40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Trevor Smith             Ville Pokka              60     0   5  0  
 2 Morgan Rielly            Tobias Enstrom           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Backstrom        Emerson Etem             60     0   2  3  
 2 Mikko Rantanen           Sebastian Aho            40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Morgan Rielly            Samuel Girard            60     1   2  2  
 2 Ville Pokka              Tobias Enstrom           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Sebastian Aho            Mikko Rantanen           Morgan Rielly            Ville Pokka              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Zack Kassian             Sam Carrick              Troy Stecher             Trevor Smith             

<b>Goaltenders</b>
Starting : Steve Mason              
Backup : Craig Anderson           

<b>Extra Forwards</b>
Normal : Emerson Etem, Teemu Pulkkinen, Nicklas Backstrom - PP : Nicklas Backstrom, Emerson Etem - PK : Tyler Biggs
<b>Extra Defensemen</b>
Normal : Morgan Rielly, Tobias Enstrom, Ville Pokka - PP : Morgan Rielly - PK : Ville Pokka, Tobias Enstrom
<b>Penalty Shots</b>
Sebastian Aho, Nicklas Backstrom, Mikko Rantanen, Teemu Pulkkinen, Emerson Etem
<b>Custom OT Lines Forwards</b>
Nicklas Backstrom, Sebastian Aho, Mikko Rantanen, Emerson Etem, Teemu Pulkkinen, Joel Armia, Zack Kassian, Tyler Biggs, Sam Carrick, Juuso Ikonen
<b>Custom OT Lines Defensemen</b>
Morgan Rielly, Tobias Enstrom, Ville Pokka, Troy Stecher, Trevor Smith

<b>Scratches</b>
Luke Schenn (Right Eye Injury)</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Nikolaj Ehlers           Colin White              34     1   2  2  
 2 Zemgus Girgensons        Jakub Voracek            Kaapo Kakko              34     1   2  2  
 3 Joe Veleno               Ahti Oksanen             Nicolas Kerdiles         26     1   3  1  
 4 Joseph Labate            Liam Foudy               Stefan Matteau           6      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Josh Morrissey                                    36     1   3  1  
 2 Rasmus Ristolainen       Jason Demers                                      36     1   2  2  
 3 Jakub Jerabek            David Schlemko                                    28     1   4  0  
 4 David Schlemko           Jakub Jerabek                                     0      0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Jakub Voracek            Nikolaj Ehlers           51     1   0  4  
 2 Colin White              Zemgus Girgensons        Kaapo Kakko              49     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Ahti Oksanen                                      55     1   0  4  
 2 Dougie Hamilton          Josh Morrissey                                    45     1   0  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor McDavid           Joseph Labate            60     0   5  0  
 2 Zemgus Girgensons        Nicolas Kerdiles         40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jason Demers             Dougie Hamilton          51     0   5  0  
 2 Josh Morrissey           Ahti Oksanen             49     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Zemgus Girgensons                                 60     0   5  0  
 2 Stefan Matteau                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Morrissey           David Schlemko           60     0   5  0  
 2 Jason Demers             Jakub Jerabek            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colin White              Liam Foudy               60     0   2  3  
 2 Connor McDavid           Nikolaj Ehlers           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jason Demers             Dougie Hamilton          60     0   2  3  
 2 Rasmus Ristolainen       Josh Morrissey           40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Nikolaj Ehlers           Jakub Voracek            Rasmus Ristolainen       Dougie Hamilton          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Zemgus Girgensons        Ahti Oksanen             Jakub Voracek            Dougie Hamilton          Rasmus Ristolainen       

<b>Goaltenders</b>
Starting : Vitek Vanecek            
Backup : Darcy Kuemper            

<b>Extra Forwards</b>
Normal : Connor McDavid, Zemgus Girgensons, Nikolaj Ehlers - PP : Connor McDavid, Nikolaj Ehlers - PK : Zemgus Girgensons
<b>Extra Defensemen</b>
Normal : Dougie Hamilton, Josh Morrissey, Rasmus Ristolainen - PP : Dougie Hamilton - PK : Dougie Hamilton, Rasmus Ristolainen
<b>Penalty Shots</b>
Nikolaj Ehlers, Connor McDavid, Zemgus Girgensons, Colin White, Joe Veleno
<b>Custom OT Lines Forwards</b>
Connor McDavid, Nikolaj Ehlers, Zemgus Girgensons, Colin White, Jakub Voracek, Nicolas Kerdiles, Joe Veleno, Stefan Matteau, Joseph Labate, Ahti Oksanen
<b>Custom OT Lines Defensemen</b>
Dougie Hamilton, Rasmus Ristolainen, Josh Morrissey, Jason Demers, Ahti Oksanen

<b>Scratches</b>
Nicklas Jensen (Healthy), Antti Niemi (Healthy)</pre></div>
<h1 class="TeamLinesPro_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#VegasGoldenKnights">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Morgan Klimchuk          Patrick Kane             30     0   1  4  
 2 William Karlsson         Conor Sheary             Adam Erne                30     0   2  3  
 3 Charles Hudon            Jake DeBrusk             Brendan Leipsic          25     0   3  2  
 4 Frans Nielsen            Michael Bunting          Linus Omark              15     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kristopher Letang        Simon Despres                                     33     0   3  2  
 2 Matt Grzelcyk            Myles Bell                                        32     0   4  1  
 3 Kris Russell             Mattias Ekholm                                    30     0   4  1  
 4 Kristopher Letang        Mattias Ekholm                                    5      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Morgan Klimchuk          Patrick Kane             60     0   0  5  
 2 William Karlsson         Conor Sheary             Adam Erne                40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kristopher Letang        Simon Despres                                     60     0   1  4  
 2 Matt Grzelcyk            Myles Bell                                        40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Frans Nielsen            Myles Bell               60     0   5  0  
 2 Charles Hudon            Michael Bunting          40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Grzelcyk            Simon Despres            60     0   5  0  
 2 Kristopher Letang        Mattias Ekholm           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Frans Nielsen                                     60     0   5  0  
 2 Charles Hudon                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Grzelcyk            Simon Despres            60     0   4  1  
 2 Kristopher Letang        Mattias Ekholm           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 William Karlsson         Patrick Kane             60     0   2  3  
 2 Patrice Bergeron         Morgan Klimchuk          40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kristopher Letang        Matt Grzelcyk            60     0   2  3  
 2 Mattias Ekholm           Simon Despres            40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   William Karlsson         Morgan Klimchuk          Patrick Kane             Kristopher Letang        Matt Grzelcyk            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Bergeron         Myles Bell               Patrick Kane             Kristopher Letang        Simon Despres            

<b>Goaltenders</b>
Starting : Kevin Poulin             
Backup : Marek Mazanec            

<b>Extra Forwards</b>
Normal : William Karlsson, Patrick Kane, Patrice Bergeron - PP : Patrick Kane, Patrice Bergeron - PK : Frans Nielsen
<b>Extra Defensemen</b>
Normal : Kristopher Letang, Matt Grzelcyk, Myles Bell - PP : Kristopher Letang - PK : Simon Despres, Mattias Ekholm
<b>Penalty Shots</b>
Patrick Kane, Patrice Bergeron, William Karlsson, Morgan Klimchuk, Conor Sheary
<b>Custom OT Lines Forwards</b>
Patrick Kane, Morgan Klimchuk, William Karlsson, Patrice Bergeron, Adam Erne, Jake DeBrusk, Brendan Leipsic, Conor Sheary, Charles Hudon, Frans Nielsen
<b>Custom OT Lines Defensemen</b>
Kristopher Letang, Myles Bell, Matt Grzelcyk, Simon Despres, Mattias Ekholm

<b>Scratches</b>
Julius Bergman (Back Spasms Injury), Justin Schultz (Healthy), Konstantin Barulin (Healthy)</pre></div>
<h1 class="TeamLinesPro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Dal Colle        Ty Rattie                Phil Kessel              39     1   1  3  
 2 Henrik Zetterberg        Saku Maenalanen          Alexander Radulov        26     1   1  3  
 3 Jacob De La Rose         Nikita Gusev             Pavel Buchnevich         22     1   1  3  
 4 Vladislav Namestnikov    Jason Zucker             Marcus Foligno           13     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Colton Parayko           Ryan Ellis                                        36     1   2  2  
 2 Jared Cowen              Mikhail Sergachev                                 31     1   2  2  
 3 Kevin Marshall           Michael Matheson                                  26     1   2  2  
 4 Colton Parayko           Michael Matheson                                  7      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Dal Colle        Ty Rattie                Phil Kessel              60     0   1  4  
 2 Vladislav Namestnikov    Saku Maenalanen          Alexander Radulov        40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Colton Parayko           Mikhail Sergachev                                 60     1   1  3  
 2 Ryan Ellis               Michael Matheson                                  40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jacob De La Rose         Marcus Foligno           60     1   2  2  
 2 Henrik Zetterberg        Jason Zucker             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Marshall           Jared Cowen              60     1   2  2  
 2 Michael Matheson         Colton Parayko           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jacob De La Rose                                  60     1   2  2  
 2 Henrik Zetterberg                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jared Cowen              Colton Parayko           60     1   2  2  
 2 Michael Matheson         Kevin Marshall           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Dal Colle        Pavel Buchnevich         60     1   2  2  
 2 Vladislav Namestnikov    Ty Rattie                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Matheson         Colton Parayko           60     1   2  2  
 2 Ryan Ellis               Mikhail Sergachev        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Dal Colle        Ty Rattie                Phil Kessel              Ryan Ellis               Mikhail Sergachev        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jacob De La Rose         Marcus Foligno           Jason Zucker             Colton Parayko           Jared Cowen              

<b>Goaltenders</b>
Starting : Braden Holtby            
Backup : Pavel Francouz           

<b>Extra Forwards</b>
Normal : Pavel Buchnevich, Nikita Gusev, Vladislav Namestnikov - PP : Marcus Foligno, Jacob De La Rose - PK : Michael Dal Colle
<b>Extra Defensemen</b>
Normal : Mikhail Sergachev, Michael Matheson, Colton Parayko - PP : Ryan Ellis - PK : Ryan Ellis, Mikhail Sergachev
<b>Penalty Shots</b>
Alexander Radulov, Phil Kessel, Ty Rattie, Henrik Zetterberg, Nikita Gusev
<b>Custom OT Lines Forwards</b>
Michael Dal Colle, Phil Kessel, Jacob De La Rose, Ty Rattie, Henrik Zetterberg, Saku Maenalanen, Vladislav Namestnikov, Alexander Radulov, Marcus Foligno, Nikita Gusev
<b>Custom OT Lines Defensemen</b>
Colton Parayko, Mikhail Sergachev, Michael Matheson, Jared Cowen, Kevin Marshall

<b>Scratches</b>
Braydon Coburn (Healthy), Joe Colborne (Healthy), Oliver Wahlstrom (Healthy)</pre></div>
<h1 class="TeamLinesPro_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL9-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL9-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL9-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL9-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL9-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL9-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL9-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL9-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL9-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL9-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL9-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL9-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Phillip Danault          Gabriel Landeskog        Brent Burns              35     0   1  4  
 2 Casey Cizikas            Andrew Copp              Colin Smith              30     1   2  2  
 3 Matt Halischuk           Cole Ully                Greg Chase               25     1   2  2  
 4 Colin Blackwell          Adam Tambellini          Gabriel Landeskog        10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Dmitri Kulikov                                    25     1   2  2  
 2 Luca Sbisa               Niklas Hjalmarsson                                25     1   2  2  
 3 Jake Gardiner            Dion Phaneuf                                      25     1   2  2  
 4 Victor Hedman            Dmitri Kulikov                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Phillip Danault          Gabriel Landeskog        Brent Burns              60     1   2  2  
 2 Casey Cizikas            Andrew Copp              Colin Smith              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Dmitri Kulikov                                    60     1   2  2  
 2 Luca Sbisa               Niklas Hjalmarsson                                40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gabriel Landeskog        Phillip Danault          60     1   2  2  
 2 Casey Cizikas            Colin Smith              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Dmitri Kulikov           60     1   2  2  
 2 Luca Sbisa               Brent Burns              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Gabriel Landeskog                                 60     1   2  2  
 2 Phillip Danault                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Dmitri Kulikov           60     1   2  2  
 2 Luca Sbisa               Brent Burns              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gabriel Landeskog        Phillip Danault          60     1   2  2  
 2 Casey Cizikas            Colin Smith              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Dmitri Kulikov           60     1   2  2  
 2 Luca Sbisa               Brent Burns              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Phillip Danault          Gabriel Landeskog        Brent Burns              Victor Hedman            Dmitri Kulikov           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Phillip Danault          Gabriel Landeskog        Brent Burns              Victor Hedman            Dmitri Kulikov           

<b>Goaltenders</b>
Starting : Anton Forsberg           
Backup : Jordan Binnington        

<b>Extra Forwards</b>
Normal : Gabriel Landeskog, Cole Ully, Greg Chase - PP : Gabriel Landeskog, Cole Ully - PK : Greg Chase
<b>Extra Defensemen</b>
Normal : Jake Gardiner, Dion Phaneuf, Niklas Hjalmarsson - PP : Jake Gardiner - PK : Dion Phaneuf, Niklas Hjalmarsson
<b>Penalty Shots</b>
Gabriel Landeskog, Brent Burns, Phillip Danault, Casey Cizikas, Colin Smith
<b>Custom OT Lines Forwards</b>
Gabriel Landeskog, Brent Burns, Phillip Danault, Casey Cizikas, Colin Smith, Matt Halischuk, Andrew Copp, Cole Ully, Greg Chase, Colin Blackwell
<b>Custom OT Lines Defensemen</b>
Victor Hedman, Dmitri Kulikov, Luca Sbisa, Brent Burns, Niklas Hjalmarsson

<b>Scratches</b>
Auston Matthews (Sore Left Knee Injury), Sami Vatanen (Healthy), Rocco Grimaldi (Lower Body Injury), Filip Zadina (Healthy)</pre></div>
<?php include "Footer.php";?>
