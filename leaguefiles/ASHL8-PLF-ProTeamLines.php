<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Pro Team Lines</title>
<script src="ASHL8-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL8-PLF.css" rel="stylesheet" type="text/css" />
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleSaints">Seattle Saints</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matt Duchene             Kyle Connor              Brock Boeser             38     0   1  4  
 2 Kyle Turris              Clayton Keller           David Pastrnak           35     0   1  4  
 3 Frans Nielsen            Matthew Tkachuk          Jesse Puljujarvi         22     1   2  2  
 4 Paul Gaustad             Jiri Sekac               Trevor Lewis             5      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Erik Johnson                                      35     1   3  1  
 2 Jamie Oleksiak           Justin Schultz                                    35     1   3  1  
 3 T.J. Brennan             Darren Dietz                                      30     1   3  1  
 4 T.J. Brennan             Darren Dietz                                      0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matt Duchene             Clayton Keller           David Pastrnak           55     0   0  5  
 2 Kyle Turris              Kyle Connor              Brock Boeser             45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Justin Schultz                                    55     1   1  3  
 2 T.J. Brennan             Erik Johnson                                      45     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Frans Nielsen            Matt Duchene             55     1   3  1  
 2 Paul Gaustad             Kyle Connor              45     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jamie Oleksiak           Cam Fowler               55     1   4  0  
 2 T.J. Brennan             Erik Johnson             45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Frans Nielsen                                     55     1   3  1  
 2 Paul Gaustad                                      45     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jamie Oleksiak           Cam Fowler               55     1   4  0  
 2 T.J. Brennan             Erik Johnson             45     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Pastrnak           Matthew Tkachuk          50     0   2  3  
 2 Matt Duchene             Jesse Puljujarvi         50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jamie Oleksiak           Erik Johnson             55     1   2  2  
 2 Justin Schultz           Darren Dietz             45     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Matt Duchene             Clayton Keller           David Pastrnak           Cam Fowler               Justin Schultz           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Paul Gaustad             Frans Nielsen            Kyle Connor              Jamie Oleksiak           Erik Johnson             

<b>Goaltenders</b>
Starting : Ilya Bryzgalov           
Backup : Scott Darling            

<b>Extra Forwards</b>
Normal : Jesse Puljujarvi, David Pastrnak, Kyle Connor - PP : Matthew Tkachuk, Jesse Puljujarvi - PK : Jiri Sekac
<b>Extra Defensemen</b>
Normal : Jamie Oleksiak, Cam Fowler, Justin Schultz - PP : Jamie Oleksiak - PK : Cam Fowler, Justin Schultz
<b>Penalty Shots</b>
Matt Duchene, Clayton Keller, David Pastrnak, Brock Boeser, Jesse Puljujarvi
<b>Custom OT Lines Forwards</b>
Matt Duchene, David Pastrnak, Clayton Keller, Brock Boeser, Kyle Turris, Kyle Connor, Paul Gaustad, Jesse Puljujarvi, Frans Nielsen, Matthew Tkachuk
<b>Custom OT Lines Defensemen</b>
Cam Fowler, Justin Schultz, Erik Johnson, T.J. Brennan, Jamie Oleksiak

<b>Scratches</b>
Noah Juulsen (Healthy), Joe Veleno (Healthy)</pre></div>
<h1 class="TeamLinesPro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Logan Couture            Mark Stone               32     0   4  1  
 2 Jordan Staal             John Gaudreau            Loui Eriksson            27     0   4  1  
 3 Cole Cassels             Bo Horvat                Patrice Cormier          23     0   4  1  
 4 Mikko Koivu              Logan Couture            Alex DeBrincat           18     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Hamonic           Hampus Lindholm                                   38     0   4  1  
 2 Zach Bogosian            Andrew MacDonald                                  36     0   4  1  
 3 Matt Benning             Adam McQuaid                                      21     0   4  1  
 4 Travis Hamonic           Zach Bogosian                                     5      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Logan Couture            Mark Stone               60     0   0  5  
 2 Jordan Staal             John Gaudreau            Loui Eriksson            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Hampus Lindholm          Zach Bogosian                                     70     0   1  4  
 2 Matt Benning             Travis Hamonic                                    30     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cole Cassels             Bo Horvat                70     1   4  0  
 2 Mikko Koivu              Patrice Cormier          30     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zach Bogosian            Travis Hamonic           70     1   4  0  
 2 Andrew MacDonald         Matt Benning             30     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Staal                                      60     1   4  0  
 2 Cole Cassels                                      40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Hampus Lindholm          Andrew MacDonald         60     1   4  0  
 2 Matt Benning             Zach Bogosian            40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrice Cormier          Bo Horvat                60     0   2  3  
 2 Mikko Koivu              Loui Eriksson            40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrew MacDonald         Hampus Lindholm          60     1   3  1  
 2 Matt Benning             Zach Bogosian            40     1   4  0  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Tavares             John Gaudreau            Logan Couture            Hampus Lindholm          Zach Bogosian            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Staal             Cole Cassels             Mikko Koivu              Travis Hamonic           Zach Bogosian            

<b>Goaltenders</b>
Starting : Pekka Rinne              
Backup : Mark Visentin            

<b>Extra Forwards</b>
Normal : Mark Stone, Loui Eriksson, Logan Couture - PP : Cole Cassels, Bo Horvat - PK : John Tavares
<b>Extra Defensemen</b>
Normal : Adam McQuaid, Matt Benning, Zach Bogosian - PP : Hampus Lindholm - PK : Zach Bogosian, Hampus Lindholm
<b>Penalty Shots</b>
Logan Couture, Bo Horvat, John Gaudreau, John Tavares, Jordan Staal
<b>Custom OT Lines Forwards</b>
Jordan Staal, Logan Couture, John Gaudreau, Bo Horvat, John Tavares, Patrice Cormier, Cole Cassels, Mark Stone, Mikko Koivu, Loui Eriksson
<b>Custom OT Lines Defensemen</b>
Hampus Lindholm, Zach Bogosian, Travis Hamonic, Andrew MacDonald, Matt Benning

<b>Scratches</b>
Jake Dotchin (Healthy), Travis Sanheim (Healthy), Nikita Jevpalovs (Healthy)</pre></div>
<h1 class="TeamLinesPro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Jamie Benn               Jonathan Drouin          30     1   3  1  
 2 Nico Hischier            Brad Marchand            William Nylander         30     0   0  5  
 3 Frédérik Gauthier        Josh Bailey              Joe Pavelski             24     1   3  1  
 4 Colton Sissons           Marko Dano               Josh Anderson            16     1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Charles McAvoy           John Carlson                                      38     1   1  3  
 2 Marco Scandella          Derrick Pouliot                                   30     1   2  2  
 3 Andrej Sustr             Olli Maatta                                       27     1   2  2  
 4 Olli Maatta              Derrick Pouliot                                   5      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nico Hischier            Jamie Benn               William Nylander         50     0   0  5  
 2 Patrice Bergeron         Brad Marchand            Jonathan Drouin          50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Charles McAvoy           Derrick Pouliot                                   70     0   1  4  
 2 John Carlson             Olli Maatta                                       30     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrice Bergeron         Brad Marchand            60     1   2  2  
 2 Frédérik Gauthier        Josh Bailey              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marco Scandella          Andrej Sustr             60     1   2  2  
 2 John Carlson             Derrick Pouliot          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Patrice Bergeron                                  50     1   3  1  
 2 Brad Marchand                                     50     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Carlson             Andrej Sustr             60     1   3  1  
 2 Marco Scandella          Charles McAvoy           40     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrice Bergeron         Jamie Benn               60     1   1  3  
 2 Brad Marchand            William Nylander         40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Carlson             Olli Maatta              50     1   2  2  
 2 Charles McAvoy           Derrick Pouliot          50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nico Hischier            Jonathan Drouin          William Nylander         Charles McAvoy           John Carlson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Bergeron         Brad Marchand            Josh Bailey              John Carlson             Marco Scandella          

<b>Goaltenders</b>
Starting : Josh Harding             
Backup : Igor Shestyorkin         

<b>Extra Forwards</b>
Normal : Nico Hischier, Joe Pavelski, Brad Marchand - PP : Brad Marchand, Josh Bailey - PK : Brad Marchand
<b>Extra Defensemen</b>
Normal : Charles McAvoy, Olli Maatta, Andrej Sustr - PP : Charles McAvoy - PK : Charles McAvoy, Olli Maatta
<b>Penalty Shots</b>
Jamie Benn, Brad Marchand, William Nylander, Nico Hischier, Josh Bailey
<b>Custom OT Lines Forwards</b>
Patrice Bergeron, Brad Marchand, Nico Hischier, William Nylander, Jonathan Drouin, Jamie Benn, Josh Bailey, Marko Dano, Frédérik Gauthier, Joe Pavelski
<b>Custom OT Lines Defensemen</b>
Charles McAvoy, John Carlson, Marco Scandella, Derrick Pouliot, Olli Maatta

<b>Scratches</b>
Dalton Thrower (Healthy), Riley Sheahan (Healthy)</pre></div>
<h1 class="TeamLinesPro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Johansen            Andreas Athanasiou       Tom Wilson               30     2   2  1  
 2 Mika Zibanejad           Vladislav Namestnikov    Patric Hornqvist         30     2   2  1  
 3 Tuomo Ruutu              Sergei Kostitsyn         Evgeny Dadonov           25     2   2  1  
 4 Jaedon Descheneau        Evander Kane             Patric Hornqvist         15     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Julius Honka             Tyler Myers                                       34     1   2  2  
 2 Jason Demers             David Savard                                      34     1   2  2  
 3 Mark Giordano            Jeff Petry                                        20     1   2  2  
 4 Jeff Petry               Mark Giordano                                     12     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Johansen            Andreas Athanasiou       Patric Hornqvist         50     0   1  4  
 2 Mika Zibanejad           Tom Wilson               Vladislav Namestnikov    50     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jason Demers             Julius Honka                                      50     0   2  3  
 2 David Savard             Jeff Petry                                        50     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Vladislav Namestnikov    Ryan Johansen            50     1   3  1  
 2 Andreas Athanasiou       Tom Wilson               50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Giordano            David Savard             50     1   3  1  
 2 Jason Demers             Julius Honka             50     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan Johansen                                     50     1   4  0  
 2 Vladislav Namestnikov                             50     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jason Demers             David Savard             50     1   3  1  
 2 Mark Giordano            Julius Honka             50     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tom Wilson               Vladislav Namestnikov    50     1   2  2  
 2 Patric Hornqvist         Andreas Athanasiou       50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jason Demers             Mark Giordano            50     1   2  2  
 2 David Savard             Julius Honka             50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Johansen            Vladislav Namestnikov    Patric Hornqvist         Jason Demers             Tyler Myers              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Johansen            Vladislav Namestnikov    Patric Hornqvist         Tyler Myers              Jason Demers             

<b>Goaltenders</b>
Starting : Ryan Miller              
Backup : John Gibson              

<b>Extra Forwards</b>
Normal : Andreas Athanasiou, Tom Wilson, Tuomo Ruutu - PP : Andreas Athanasiou, Tom Wilson - PK : Tom Wilson
<b>Extra Defensemen</b>
Normal : Mark Giordano, David Savard, Jeff Petry - PP : Mark Giordano - PK : Jason Demers, Jeff Petry
<b>Penalty Shots</b>
Vladislav Namestnikov, Ryan Johansen, Andreas Athanasiou, Mika Zibanejad, Patric Hornqvist
<b>Custom OT Lines Forwards</b>
Patric Hornqvist, Vladislav Namestnikov, Mika Zibanejad, Ryan Johansen, Tom Wilson, Andreas Athanasiou, Sergei Kostitsyn, Tuomo Ruutu, Jaedon Descheneau, Evander Kane
<b>Custom OT Lines Defensemen</b>
Julius Honka, Jason Demers, David Savard, Tyler Myers, Mark Giordano

<b>Scratches</b>
Eric Cornel (Healthy), Sami Vatanen (Healthy), Elvis Merzlikins (Healthy)</pre></div>
<h1 class="TeamLinesPro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeni Malkin            Teuvo Teravainen         Kyle Palmieri            25     1   2  2  
 2 Chris Tierney            Brett Connolly           Tomas Hertl              25     1   2  2  
 3 Pierre-Luc Dubois        Adrian Kempe             Ryan Dzingel             25     1   2  2  
 4 Evgeni Malkin            Antoine Vermette         Brody Sutter             25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Ryan Lindgren                                     25     1   2  2  
 2 Tyler Wotherspoon        Damon Severson                                    25     1   2  2  
 3 Jordan Schmaltz          Jonathon Blum                                     25     1   2  2  
 4 Oliver Ekman-Larsson     Damon Severson                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeni Malkin            Teuvo Teravainen         Kyle Palmieri            60     1   2  2  
 2 Chris Tierney            Brett Connolly           Ryan Dzingel             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Damon Severson                                    60     1   2  2  
 2 Tyler Wotherspoon        Ryan Lindgren                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Tierney            Evgeni Malkin            60     1   2  2  
 2 Brody Sutter             Adrian Kempe             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Jonathon Blum            60     1   2  2  
 2 Tyler Wotherspoon        Jordan Schmaltz          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Chris Tierney                                     60     1   2  2  
 2 Evgeni Malkin                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Jonathon Blum            60     1   2  2  
 2 Tyler Wotherspoon        Jordan Schmaltz          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evgeni Malkin            Teuvo Teravainen         60     1   2  2  
 2 Chris Tierney            Kyle Palmieri            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Damon Severson           60     1   2  2  
 2 Ryan Lindgren            Jonathon Blum            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeni Malkin            Teuvo Teravainen         Tomas Hertl              Oliver Ekman-Larsson     Jonathon Blum            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Tierney            Adrian Kempe             Tomas Hertl              Oliver Ekman-Larsson     Jonathon Blum            

<b>Goaltenders</b>
Starting : Simeon Varlamov          
Backup : Antti Niemi              

<b>Extra Forwards</b>
Normal : Adrian Kempe, Pierre-Luc Dubois, Ryan Dzingel - PP : Adrian Kempe, Pierre-Luc Dubois - PK : Brody Sutter
<b>Extra Defensemen</b>
Normal : Damon Severson, Jordan Schmaltz, Tyler Wotherspoon - PP : Damon Severson - PK : Jordan Schmaltz, Tyler Wotherspoon
<b>Penalty Shots</b>
Evgeni Malkin, Teuvo Teravainen, Chris Tierney, Kyle Palmieri, Brett Connolly
<b>Custom OT Lines Forwards</b>
Evgeni Malkin, Teuvo Teravainen, Chris Tierney, Kyle Palmieri, Brett Connolly, Tomas Hertl, Adrian Kempe, Pierre-Luc Dubois, Ryan Dzingel, Antoine Vermette
<b>Custom OT Lines Defensemen</b>
Oliver Ekman-Larsson, Jonathon Blum, Tyler Wotherspoon, Ryan Lindgren, Damon Severson

<b>Scratches</b>
Ryan MacInnis (Healthy), Maxim Mayorov (Healthy)</pre></div>
<h1 class="TeamLinesPro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Travis Zajac             Milan Lucic              Wayne Simmonds           27     1   1  3  
 2 Nick Cousins             Ondrej Palat             Tyler Toffoli            27     1   1  3  
 3 Anders Lee               Matthew Nieto            Andrew Ladd              26     1   1  3  
 4 Martin Hanzal            Kyle Okposo              Cal Clutterbuck          20     1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Karl Alzner                                       38     1   2  2  
 2 Marc Methot              Dylan Demelo                                      33     1   2  2  
 3 Jarred Tinordi           Keaton Ellerby                                    29     1   2  2  
 4 Marc-Edouard Vlasic      Karl Alzner                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Travis Zajac             Milan Lucic              Wayne Simmonds           60     1   1  3  
 2 Nick Cousins             Ondrej Palat             Tyler Toffoli            40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Karl Alzner                                       60     1   2  2  
 2 Jarred Tinordi           Dylan Demelo                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Travis Zajac             Milan Lucic              60     1   3  1  
 2 Nick Cousins             Cal Clutterbuck          40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Karl Alzner              60     1   3  1  
 2 Jarred Tinordi           Dylan Demelo             40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Travis Zajac                                      60     0   5  0  
 2 Nick Cousins                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Karl Alzner              60     0   5  0  
 2 Jarred Tinordi           Dylan Demelo             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Travis Zajac             Ondrej Palat             60     1   2  2  
 2 Nick Cousins             Milan Lucic              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Karl Alzner              60     1   2  2  
 2 Jarred Tinordi           Dylan Demelo             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Travis Zajac             Milan Lucic              Wayne Simmonds           Marc-Edouard Vlasic      Karl Alzner              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Travis Zajac             Milan Lucic              Wayne Simmonds           Marc-Edouard Vlasic      Karl Alzner              

<b>Goaltenders</b>
Starting : Ben Scrivens             
Backup : Calvin Pickard           

<b>Extra Forwards</b>
Normal : Travis Zajac, Milan Lucic, Nick Cousins - PP : Travis Zajac, Matthew Nieto - PK : Matthew Nieto
<b>Extra Defensemen</b>
Normal : Dylan Demelo, Marc-Edouard Vlasic, Karl Alzner - PP : Jarred Tinordi - PK : Jarred Tinordi, Marc-Edouard Vlasic
<b>Penalty Shots</b>
Milan Lucic, Ondrej Palat, Tyler Toffoli, Wayne Simmonds, Travis Zajac
<b>Custom OT Lines Forwards</b>
Milan Lucic, Wayne Simmonds, Travis Zajac, Nick Cousins, Tyler Toffoli, Ondrej Palat, Anders Lee, Andrew Ladd, Kyle Okposo, Matthew Nieto
<b>Custom OT Lines Defensemen</b>
Marc-Edouard Vlasic, Karl Alzner, Marc Methot, Jarred Tinordi, Dylan Demelo

<b>Scratches</b>
Barret Jackman (Healthy), Alexei Bereglazov (Healthy), Joni Ortio (Healthy)</pre></div>
<h1 class="TeamLinesPro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           T.J. Oshie               Patrick Kane             34     1   1  3  
 2 Derick Brassard          Mike Hoffman             David Backes             28     1   1  3  
 3 Antti Suomela            Logan Shaw               Justin Williams          22     1   2  2  
 4 Alan Quine               Antoine Roussel          Marian Gaborik           16     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Hanifin             Ryan Murray                                       34     1   3  1  
 2 Jakub Kindl              Dennis Wideman                                    33     1   3  1  
 3 Dan Hamhuis              Roman Polak                                       33     1   3  1  
 4 Noah Hanifin             Ryan Murray                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           T.J. Oshie               Patrick Kane             50     1   0  4  
 2 Derick Brassard          Mike Hoffman             David Backes             50     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Murray              Noah Hanifin                                      50     1   2  2  
 2 Dennis Wideman           Jakub Kindl                                       50     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           David Backes             50     1   2  2  
 2 Alan Quine               Justin Williams          50     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Hanifin             Ryan Murray              50     1   4  0  
 2 Jakub Kindl              Roman Polak              50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Toews                                    50     1   2  2  
 2 David Backes                                      50     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Hanifin             Ryan Murray              50     1   4  0  
 2 Jakub Kindl              Roman Polak              50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           Patrick Kane             50     1   1  3  
 2 Derick Brassard          David Backes             50     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Hanifin             Ryan Murray              50     1   3  1  
 2 Jakub Kindl              Dennis Wideman           50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           T.J. Oshie               Patrick Kane             Ryan Murray              Noah Hanifin             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Justin Williams          David Backes             Noah Hanifin             Ryan Murray              

<b>Goaltenders</b>
Starting : Carey Price              
Backup : Jhonas Enroth            

<b>Extra Forwards</b>
Normal : Derick Brassard, Antti Suomela, Marian Gaborik - PP : Derick Brassard, Antti Suomela - PK : Antoine Roussel
<b>Extra Defensemen</b>
Normal : Jakub Kindl, Dan Hamhuis, Dennis Wideman - PP : Roman Polak - PK : Dennis Wideman, Dan Hamhuis
<b>Penalty Shots</b>
Patrick Kane, Jonathan Toews, T.J. Oshie, David Backes, Derick Brassard
<b>Custom OT Lines Forwards</b>
Jonathan Toews, Patrick Kane, Derick Brassard, T.J. Oshie, David Backes, Mike Hoffman, Alan Quine, Logan Shaw, Antti Suomela, Marian Gaborik
<b>Custom OT Lines Defensemen</b>
Ryan Murray, Noah Hanifin, Dennis Wideman, Jakub Kindl, Roman Polak

<b>Scratches</b>
Jeremy Morin (Healthy), Adam Clendening (Healthy), Austin Czarnik (Healthy)</pre></div>
<h1 class="TeamLinesPro_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Evgeny Grachev           Nikita Filatov           32     0   1  4  
 2 Robby Fabbri             Magnus Paajarvi          Patrick Sharp            32     0   1  4  
 3 Brian Boyle              Devin Setoguchi          Joachim Nermark          20     2   2  1  
 4 Anton Lander             Peter Mueller            Sean Monahan             16     0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Niklas Hjalmarsson       Jani Hakanpaa                                     41     1   3  1  
 2 Yann Sauve               Carl Gunnarsson                                   41     1   3  1  
 3 Marc-Andre Gragnani      Jack Hillen                                       18     1   3  1  
 4 Yann Sauve               Jack Hillen                                       0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Evgeny Grachev           Robby Fabbri             70     0   0  5  
 2 Anton Lander             Magnus Paajarvi          Nikita Filatov           30     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Niklas Hjalmarsson       Marc-Andre Gragnani                               70     0   1  4  
 2 Jack Hillen              Yann Sauve                                        30     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brian Boyle              Robby Fabbri             70     1   4  0  
 2 Sean Monahan             Evgeny Grachev           30     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Niklas Hjalmarsson       Jani Hakanpaa            55     1   4  0  
 2 Yann Sauve               Carl Gunnarsson          45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brian Boyle                                       70     0   5  0  
 2 Sean Monahan                                      30     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Niklas Hjalmarsson       Jani Hakanpaa            60     0   5  0  
 2 Yann Sauve               Carl Gunnarsson          40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Monahan             Nikita Filatov           55     1   3  1  
 2 Evgeny Grachev           Robby Fabbri             45     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Niklas Hjalmarsson       Jani Hakanpaa            60     1   3  1  
 2 Yann Sauve               Carl Gunnarsson          40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Robby Fabbri             Evgeny Grachev           Marc-Andre Gragnani      Jack Hillen              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brian Boyle              Joachim Nermark          Devin Setoguchi          Yann Sauve               Niklas Hjalmarsson       

<b>Goaltenders</b>
Starting : Andrew Hammond           
Backup : Martin Jones             

<b>Extra Forwards</b>
Normal : Magnus Paajarvi, Robby Fabbri, Sean Monahan - PP : Sean Monahan, Patrick Sharp - PK : Patrick Sharp
<b>Extra Defensemen</b>
Normal : Niklas Hjalmarsson, Yann Sauve, Jani Hakanpaa - PP : Marc-Andre Gragnani - PK : Yann Sauve, Niklas Hjalmarsson
<b>Penalty Shots</b>
Evgeny Grachev, Patrick Sharp, Sean Monahan, Nikita Filatov, Magnus Paajarvi
<b>Custom OT Lines Forwards</b>
Evgeny Grachev, Sean Monahan, Magnus Paajarvi, Robby Fabbri, Nikita Filatov, Anton Lander, Patrick Sharp, Devin Setoguchi, Peter Mueller, Brian Boyle
<b>Custom OT Lines Defensemen</b>
Niklas Hjalmarsson, Marc-Andre Gragnani, Yann Sauve, Jack Hillen, Jani Hakanpaa

<b>Scratches</b>
Maxime Talbot (Healthy), Mike Weber (Healthy), Martin Frk (Healthy)</pre></div>
<h1 class="TeamLinesPro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Rick Nash                Jason Spezza             25     1   2  2  
 2 Andrew Shaw              Patrick Bjorkstrand      Drew Shore               25     1   2  2  
 3 Devin Shore              Ivan Telegin             Mitch Holmberg           25     1   2  2  
 4 Michael Chaput           Rick Nash                Tomas Kubalik            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Keith Yandle                                      25     1   2  2  
 2 Brent Seabrook           Erik Gudbranson                                   25     1   2  2  
 3 Mirco Mueller            Jonas Brodin                                      25     1   2  2  
 4 Mirco Mueller            Kevin Shattenkirk                                 25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mitch Holmberg           Rick Nash                Jason Spezza             60     1   2  2  
 2 Andrew Shaw              Patrick Bjorkstrand      Drew Shore               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Keith Yandle                                      60     1   2  2  
 2 Brent Seabrook           Erik Gudbranson                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Drew Shore               Rick Nash                60     1   2  2  
 2 Jason Spezza             Andrew Shaw              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Keith Yandle             60     1   2  2  
 2 Brent Seabrook           Erik Gudbranson          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jason Spezza                                      60     1   2  2  
 2 Rick Nash                                         40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Keith Yandle             60     1   2  2  
 2 Brent Seabrook           Erik Gudbranson          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mitch Holmberg           Rick Nash                60     1   2  2  
 2 Jason Spezza             Andrew Shaw              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Keith Yandle             60     1   2  2  
 2 Brent Seabrook           Erik Gudbranson          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Rick Nash                Jason Spezza             Kevin Shattenkirk        Keith Yandle             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Rick Nash                Jason Spezza             Kevin Shattenkirk        Keith Yandle             

<b>Goaltenders</b>
Starting : Kevin Poulin             
Backup : Anders Nilsson           

<b>Extra Forwards</b>
Normal : Mitch Holmberg, Devin Shore, Rick Nash - PP : Mitch Holmberg, Devin Shore - PK : Rick Nash
<b>Extra Defensemen</b>
Normal : Kevin Shattenkirk, Jonas Brodin, Mirco Mueller - PP : Keith Yandle - PK : Jonas Brodin, Mirco Mueller
<b>Penalty Shots</b>
Devin Shore, Rick Nash, Jason Spezza, Andrew Shaw, Drew Shore
<b>Custom OT Lines Forwards</b>
Connor McDavid, Rick Nash, Jason Spezza, Andrew Shaw, Drew Shore, Mitch Holmberg, Patrick Bjorkstrand, Devin Shore, Michael Chaput, Tomas Kubalik
<b>Custom OT Lines Defensemen</b>
Kevin Shattenkirk, Keith Yandle, Brent Seabrook, Erik Gudbranson, Mirco Mueller

<b>Scratches</b>
Brandon Gormley (Healthy), Shayne Gostisbehere (Healthy), Aaron Dell (Healthy)</pre></div>
<h1 class="TeamLinesPro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Tomas Tatar              Nick Palmieri            30     1   1  3  
 2 Mathew Barzal            Hunter Shinkaruk         Leon Draisaitl           30     1   2  2  
 3 Victor Rask              Phillip Di Giuseppe      Stefan Noesen            25     1   3  1  
 4 Ryan Hartman             Tye McGinn               Mathew Barzal            15     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens                                    25     1   2  2  
 2 Alex Petrovic            Philip Larsen                                     25     1   2  2  
 3 Colin Miller             Morgan Ellis                                      25     1   2  2  
 4 Shea Weber               Duncan Siemens                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Tomas Tatar              Nick Palmieri            60     1   2  2  
 2 Mathew Barzal            Hunter Shinkaruk         Phillip Di Giuseppe      40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens                                    60     1   2  2  
 2 Alex Petrovic            Philip Larsen                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Hunter Shinkaruk         60     1   2  2  
 2 Mathew Barzal            Tomas Tatar              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens           60     1   2  2  
 2 Alex Petrovic            Philip Larsen            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sean Couturier                                    60     1   2  2  
 2 Tomas Tatar                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens           60     1   2  2  
 2 Alex Petrovic            Philip Larsen            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Phillip Di Giuseppe      60     1   2  2  
 2 Mathew Barzal            Tomas Tatar              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Duncan Siemens           60     1   2  2  
 2 Alex Petrovic            Philip Larsen            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Tomas Tatar              Nick Palmieri            Shea Weber               Duncan Siemens           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Tomas Tatar              Nick Palmieri            Shea Weber               Duncan Siemens           

<b>Goaltenders</b>
Starting : Brendan Burke            
Backup : Corey Crawford           

<b>Extra Forwards</b>
Normal : Sean Couturier, Phillip Di Giuseppe, Tye McGinn - PP : Sean Couturier, Phillip Di Giuseppe - PK : Tye McGinn
<b>Extra Defensemen</b>
Normal : Colin Miller, Morgan Ellis, Alex Petrovic - PP : Colin Miller - PK : Morgan Ellis, Alex Petrovic
<b>Penalty Shots</b>
Sean Couturier, Tye McGinn, Mathew Barzal, Tomas Tatar, Hunter Shinkaruk
<b>Custom OT Lines Forwards</b>
Sean Couturier, Nick Palmieri, Mathew Barzal, Tomas Tatar, Hunter Shinkaruk, Phillip Di Giuseppe, Tye McGinn, Leon Draisaitl, Victor Rask, Stefan Noesen
<b>Custom OT Lines Defensemen</b>
Shea Weber, Duncan Siemens, Alex Petrovic, Philip Larsen, Colin Miller

<b>Scratches</b>
Melker Karlsson (Healthy), Markus Granlund (Healthy), Nick Suzuki (Healthy)</pre></div>
<h1 class="TeamLinesPro_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins      Ryan Getzlaf             Darren Helm              25     1   2  2  
 2 Artem Anisimov           Henrik Zetterberg        Patrik Laine             25     1   2  2  
 3 Auston Matthews          Cory Conacher            Cody Hodgson             25     1   2  2  
 4 Dave Bolland             Adam Lowry               Michael Bournival        25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Kulikov           Vyacheslav Voynov                                 25     1   2  2  
 2 Nick Leddy               Jaccob Slavin                                     25     1   2  2  
 3 Joe Morrow               Nate Schmidt                                      25     1   2  2  
 4 Dmitri Kulikov           Vyacheslav Voynov                                 25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins      Auston Matthews          Darren Helm              60     1   2  2  
 2 Dave Bolland             Henrik Zetterberg        Patrik Laine             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Kulikov           Vyacheslav Voynov                                 60     1   2  2  
 2 Nick Leddy               Jaccob Slavin                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins      Auston Matthews          60     1   2  2  
 2 Dave Bolland             Darren Helm              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitri Kulikov           Vyacheslav Voynov        60     1   2  2  
 2 Nick Leddy               Jaccob Slavin            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins                               60     1   2  2  
 2 Darren Helm                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitri Kulikov           Vyacheslav Voynov        60     1   2  2  
 2 Nick Leddy               Jaccob Slavin            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins      Auston Matthews          60     1   2  2  
 2 Cory Conacher            Darren Helm              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitri Kulikov           Vyacheslav Voynov        60     1   2  2  
 2 Nick Leddy               Jaccob Slavin            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Nugent-Hopkins      Ryan Getzlaf             Darren Helm              Dmitri Kulikov           Vyacheslav Voynov        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Nugent-Hopkins      Ryan Getzlaf             Darren Helm              Dmitri Kulikov           Vyacheslav Voynov        

<b>Goaltenders</b>
Starting : Ondrej Pavelec           
Backup : Ilya Sorokin             

<b>Extra Forwards</b>
Normal : Auston Matthews, Dave Bolland, Cory Conacher - PP : Auston Matthews, Dave Bolland - PK : Cory Conacher
<b>Extra Defensemen</b>
Normal : Joe Morrow, Nate Schmidt, Nick Leddy - PP : Joe Morrow - PK : Nate Schmidt, Nick Leddy
<b>Penalty Shots</b>
Ryan Nugent-Hopkins, Cory Conacher, Ryan Getzlaf, Darren Helm, Auston Matthews
<b>Custom OT Lines Forwards</b>
Ryan Nugent-Hopkins, Artem Anisimov, Ryan Getzlaf, Darren Helm, Auston Matthews, Henrik Zetterberg, Patrik Laine, Dave Bolland, Cory Conacher, Cody Hodgson
<b>Custom OT Lines Defensemen</b>
Dmitri Kulikov, Vyacheslav Voynov, Nick Leddy, Jaccob Slavin, Joe Morrow

<b>Scratches</b>
Artemi Panarin (Healthy), Jaden Schwartz (Suspend), Chandler Stephenson (Healthy)</pre></div>
<h1 class="TeamLinesPro_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Gagner               Taylor Hall              Jordan Eberle            33     0   2  3  
 2 Kieffer Bellows          Chris Stewart            Ryan Callahan            33     0   2  3  
 3 Cédric Paquette          Tobias Rieder            Brendan Gallagher        29     0   2  3  
 4 Seth Griffith            Tobias Rieder            Ryan Callahan            5      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Daniel Girardi           Rasmus Dahlin                                     33     0   2  3  
 2 Martin Marincin          Colten Teubert                                    33     0   2  3  
 3 Martin Gernat            Cody Ceci                                         31     0   2  3  
 4 Cody Ceci                Daniel Girardi                                    3      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Gagner               Taylor Hall              Jordan Eberle            55     0   0  5  
 2 Kieffer Bellows          Chris Stewart            Ryan Callahan            45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Dahlin            Daniel Girardi                                    55     0   1  4  
 2 Martin Marincin          Cody Ceci                                         45     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Eberle            Seth Griffith            57     0   5  0  
 2 Tobias Rieder            Ryan Callahan            43     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Martin Gernat            Cody Ceci                57     1   4  0  
 2 Daniel Girardi           Colten Teubert           43     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tobias Rieder                                     57     0   5  0  
 2 Seth Griffith                                     43     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Dahlin            Daniel Girardi           57     0   5  0  
 2 Colten Teubert           Martin Marincin          43     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cédric Paquette          Jordan Eberle            55     0   1  4  
 2 Kieffer Bellows          Ryan Callahan            45     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Dahlin            Daniel Girardi           55     0   2  3  
 2 Colten Teubert           Martin Marincin          45     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Gagner               Taylor Hall              Jordan Eberle            Rasmus Dahlin            Daniel Girardi           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tobias Rieder            Kieffer Bellows          Ryan Callahan            Martin Marincin          Colten Teubert           

<b>Goaltenders</b>
Starting : Devan Dubnyk             
Backup : Marc-Andre Fleury        

<b>Extra Forwards</b>
Normal : Chris Stewart, Tobias Rieder, Jordan Eberle - PP : Brendan Gallagher, Jordan Eberle - PK : Cédric Paquette
<b>Extra Defensemen</b>
Normal : Martin Marincin, Colten Teubert, Daniel Girardi - PP : Martin Marincin - PK : Cody Ceci, Colten Teubert
<b>Penalty Shots</b>
Jordan Eberle, Ryan Callahan, Cédric Paquette, Toni Rajala, Brendan Gallagher
<b>Custom OT Lines Forwards</b>
Sam Gagner, Jordan Eberle, Kieffer Bellows, Ryan Callahan, Tobias Rieder, Chris Stewart, Seth Griffith, Brendan Gallagher, Cédric Paquette, Taylor Hall
<b>Custom OT Lines Defensemen</b>
Rasmus Dahlin, Colten Teubert, Martin Marincin, Daniel Girardi, Cody Ceci

<b>Scratches</b>
Joni Pitkanen (Healthy), Michael McLeod (Healthy), Michael Leighton (Healthy)</pre></div>
<h1 class="TeamLinesPro_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Adam Henrique            Gabriel Landeskog        Brandon Sutter           30     0   1  4  
 2 Tyler Seguin             Dylan Larkin             Nikita Kucherov          30     0   2  3  
 3 Brock Nelson             Alex Tuch                Connor Brown             30     0   2  3  
 4 Derek Roy                Anthony Camara           Lauri Korpikoski         10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Edler          Zachary Werenski                                  34     0   3  2  
 2 Dan DeKeyser             Joel Edmundson                                    33     0   3  2  
 3 Matthew Carle            Brent Burns                                       33     0   3  2  
 4 Matthew Carle            Brent Burns                                       0      0   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Seguin             Dylan Larkin             Nikita Kucherov          60     0   0  5  
 2 Adam Henrique            Gabriel Landeskog        Brandon Sutter           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Burns              Zachary Werenski                                  60     1   1  3  
 2 Alexander Edler          Dan DeKeyser                                      40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Roy                Lauri Korpikoski         50     0   5  0  
 2 Brock Nelson             Anthony Camara           50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Joel Edmundson           60     1   4  0  
 2 Matthew Carle            Dan DeKeyser             40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Derek Roy                                         50     0   5  0  
 2 Brock Nelson                                      50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Joel Edmundson           60     0   5  0  
 2 Matthew Carle            Dan DeKeyser             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Seguin             Dylan Larkin             50     0   0  5  
 2 Adam Henrique            Nikita Kucherov          50     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Zachary Werenski         50     1   2  2  
 2 Dan DeKeyser             Brent Burns              50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Seguin             Dylan Larkin             Nikita Kucherov          Brent Burns              Zachary Werenski         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brandon Sutter           Gabriel Landeskog        Lauri Korpikoski         Alexander Edler          Joel Edmundson           

<b>Goaltenders</b>
Starting : Matt Murray              
Backup : Matt Hackett             

<b>Extra Forwards</b>
Normal : Nikita Kucherov, Tyler Seguin, Dylan Larkin - PP : Nikita Kucherov, Tyler Seguin - PK : Derek Roy
<b>Extra Defensemen</b>
Normal : Alexander Edler, Dan DeKeyser, Brent Burns - PP : Zachary Werenski - PK : Alexander Edler, Dan DeKeyser
<b>Penalty Shots</b>
Tyler Seguin, Nikita Kucherov, Dylan Larkin, Adam Henrique, Gabriel Landeskog
<b>Custom OT Lines Forwards</b>
Nikita Kucherov, Tyler Seguin, Dylan Larkin, Adam Henrique, Gabriel Landeskog, Brandon Sutter, Brock Nelson, Connor Brown, Alex Tuch, Derek Roy
<b>Custom OT Lines Defensemen</b>
Alexander Edler, Dan DeKeyser, Zachary Werenski, Brent Burns, Matthew Carle

<b>Scratches</b>
Colby Robak (Healthy), Joel Eriksson Ek (Healthy)</pre></div>
<h1 class="TeamLinesPro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             Corey Perry              55     1   1  3  
 2 Tyler Bozak              Kevin Fiala              Anthony Mantha           41     1   2  2  
 3 Jordan Weal              Jordan Martinook         Vincent Trocheck         3      1   3  1  
 4 Ryan Haggerty            Kevin Hayes              Brett Ritchie            1      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Mark Pysyk                                        45     2   2  1  
 2 Kristopher Letang        Derek Forbort                                     38     2   2  1  
 3 Unknown Player           Thomas Chabot                                     10     1   4  0  
 4 Drew Doughty             Kristopher Letang                                 7      0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             Corey Perry              62     0   0  5  
 2 Tyler Bozak              Kevin Fiala              Anthony Mantha           38     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Kristopher Letang                                 60     0   0  5  
 2 Mark Pysyk               Unknown Player                                    40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anze Kopitar             Corey Perry              60     0   5  0  
 2 Tyler Bozak              Kevin Hayes              40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derek Forbort            Mark Pysyk               60     1   4  0  
 2 Drew Doughty             Kristopher Letang        40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Anze Kopitar                                      60     0   5  0  
 2 Kevin Hayes                                       40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derek Forbort            Mark Pysyk               60     1   4  0  
 2 Drew Doughty             Kristopher Letang        40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anze Kopitar             Jeff Skinner             55     0   1  4  
 2 Tyler Bozak              Corey Perry              45     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Unknown Player           50     0   3  2  
 2 Kristopher Letang        Mark Pysyk               50     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Jeff Skinner             Corey Perry              Drew Doughty             Kristopher Letang        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Jeff Skinner             Corey Perry              Drew Doughty             Derek Forbort            

<b>Goaltenders</b>
Starting : Michal Neuvirth          
Backup : Philipp Grubauer         

<b>Extra Forwards</b>
Normal : Vincent Trocheck, Kevin Hayes, Brett Ritchie - PP : Vincent Trocheck, Anthony Mantha - PK : Ryan Haggerty
<b>Extra Defensemen</b>
Normal : Thomas Chabot, Derek Forbort, Kristopher Letang - PP : Thomas Chabot - PK : Mark Pysyk, Drew Doughty
<b>Penalty Shots</b>
Jeff Skinner, Anze Kopitar, Corey Perry, Anthony Mantha, Vincent Trocheck
<b>Custom OT Lines Forwards</b>
Jeff Skinner, Anze Kopitar, Corey Perry, Tyler Bozak, Kevin Fiala, Brett Ritchie, Vincent Trocheck, Jordan Weal, Anthony Mantha, Jordan Martinook
<b>Custom OT Lines Defensemen</b>
Drew Doughty, Derek Forbort, Kristopher Letang, Mark Pysyk, Unknown Player

<b>Scratches</b>
Ben Hutton (Bruised Right Shoulder Injury), Tyler Cuma (Healthy), Jeff Taylor (Healthy)</pre></div>
<h1 class="TeamLinesPro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         JC Lipon                 Blake Wheeler            36     1   2  2  
 2 Charlie Coyle            Nikolay Prokhorkin       Jakub Voracek            28     1   2  2  
 3 Andrew Copp              Mattias Tedenby          Thomas Vanek             25     1   2  2  
 4 Christophe Lalancette    JC Lipon                 Roman Horak              11     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Steven Kampfer           Ryan Suter                                        40     1   2  2  
 2 Simon Despres            Ryan Sproul                                       30     1   2  2  
 3 Jamie McBain             Colby Cohen                                       20     1   2  2  
 4 Ryan Suter               Simon Despres                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Jakub Voracek            Nikolay Prokhorkin       60     1   2  2  
 2 Charlie Coyle            Mattias Tedenby          Blake Wheeler            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Jamie McBain                                      60     1   2  2  
 2 Simon Despres            Steven Kampfer                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrew Copp              Blake Wheeler            60     1   2  2  
 2 Christophe Lalancette    Jakub Voracek            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colby Cohen              Ryan Suter               60     1   2  2  
 2 Simon Despres            Jamie McBain             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Andrew Copp                                       60     1   2  2  
 2 Blake Wheeler                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colby Cohen              Jamie McBain             60     1   2  2  
 2 Simon Despres            Ryan Suter               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Jakub Voracek            60     1   2  2  
 2 Charlie Coyle            Blake Wheeler            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jamie McBain             Ryan Suter               60     1   2  2  
 2 Simon Despres            Steven Kampfer           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeny Kuznetsov         Charlie Coyle            Jakub Voracek            Ryan Sproul              Ryan Suter               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Copp              Blake Wheeler            Christophe Lalancette    Ryan Suter               Jamie McBain             

<b>Goaltenders</b>
Starting : Thatcher Demko           
Backup : Petr Mrazek              

<b>Extra Forwards</b>
Normal : Charlie Coyle, Evgeny Kuznetsov, Jakub Voracek - PP : Charlie Coyle, Jakub Voracek - PK : Blake Wheeler
<b>Extra Defensemen</b>
Normal : Simon Despres, Jamie McBain, Ryan Suter - PP : Jamie McBain - PK : Colby Cohen, Jamie McBain
<b>Penalty Shots</b>
Charlie Coyle, Jakub Voracek, Evgeny Kuznetsov, Blake Wheeler, Nikolay Prokhorkin
<b>Custom OT Lines Forwards</b>
Evgeny Kuznetsov, Jakub Voracek, Charlie Coyle, Blake Wheeler, Andrew Copp, Nikolay Prokhorkin, Christophe Lalancette, JC Lipon, Mattias Tedenby, Thomas Vanek
<b>Custom OT Lines Defensemen</b>
Ryan Suter, Colby Cohen, Simon Despres, Steven Kampfer, Jamie McBain

<b>Scratches</b>
Nick Sorensen (Healthy), Zack Phillips (Healthy), Kevin Labanc (Healthy)</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mike Richards            Zach Parise              Curtis Hamilton          32     1   3  1  
 2 Alexander Radulov        Sam Bennett              Filip Forsberg           30     0   2  3  
 3 Tomas Plekanec           Danton Heinen            Anthony Duclair          28     0   2  3  
 4 Austin Watson            Bryan Bickell            Ilya Kovalchuk           10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Scott Harrington                                  32     0   2  3  
 2 Oskars Bartulis          James Wisniewski                                  30     0   2  3  
 3 Xavier Ouellet           Mac Weegar                                        28     0   3  2  
 4 Alex Pietrangelo         James Wisniewski                                  10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Bennett              Ilya Kovalchuk           Filip Forsberg           60     1   0  4  
 2 Mike Richards            Anthony Duclair          Danton Heinen            40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         James Wisniewski                                  60     1   0  4  
 2 Mac Weegar               Scott Harrington                                  40     1   0  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mike Richards            Curtis Hamilton          50     1   3  1  
 2 Tomas Plekanec           Austin Watson            50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Scott Harrington         65     1   3  1  
 2 James Wisniewski         Mac Weegar               35     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mike Richards                                     55     1   4  0  
 2 Tomas Plekanec                                    45     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Scott Harrington         60     1   3  1  
 2 James Wisniewski         Mac Weegar               40     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mike Richards            Filip Forsberg           65     1   1  3  
 2 Sam Bennett              Anthony Duclair          35     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Scott Harrington         60     1   2  2  
 2 James Wisniewski         Mac Weegar               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexander Radulov        Ilya Kovalchuk           Filip Forsberg           Alex Pietrangelo         James Wisniewski         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mike Richards            Curtis Hamilton          Austin Watson            Alex Pietrangelo         Scott Harrington         

<b>Goaltenders</b>
Starting : Jimmy Howard             
Backup : Jaroslav Halak           

<b>Extra Forwards</b>
Normal : Danton Heinen, Filip Forsberg, Ilya Kovalchuk - PP : Filip Forsberg, Anthony Duclair - PK : Mike Richards
<b>Extra Defensemen</b>
Normal : Alex Pietrangelo, Scott Harrington, James Wisniewski - PP : James Wisniewski - PK : Scott Harrington, Alex Pietrangelo
<b>Penalty Shots</b>
Filip Forsberg, Zach Parise, Ilya Kovalchuk, Anthony Duclair, Mike Richards
<b>Custom OT Lines Forwards</b>
Mike Richards, Danton Heinen, Filip Forsberg, Ilya Kovalchuk, Bryan Bickell, Austin Watson, Sam Bennett, Zach Parise, Curtis Hamilton, Anthony Duclair
<b>Custom OT Lines Defensemen</b>
Mac Weegar, Alex Pietrangelo, Scott Harrington, James Wisniewski, Xavier Ouellet

<b>Scratches</b>
Sidney Crosby (Healthy), Brandon Montour (Suspend), Kevin Roy (Healthy)</pre></div>
<h1 class="TeamLinesPro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Henrik Sedin             Cam Atkinson             Sam Reinhart             33     1   1  3  
 2 Nathan MacKinnon         Colin Wilson             Oliver Bjorkstrand       32     0   1  4  
 3 Zack Smith               Justin Abdelkader        Zach Budish              20     1   2  2  
 4 Peter Trainor            Vince Hinostroza         Freddie Hamilton         15     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Roman Josi               Tyson Barrie                                      36     1   2  2  
 2 Dmitri Orlov             Raphael Diaz                                      34     1   3  1  
 3 Thomas Hickey            Brett Pesce                                       30     1   3  1  
 4 Dmitri Orlov             Roman Josi                                        0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nathan MacKinnon         Colin Wilson             Oliver Bjorkstrand       60     0   0  5  
 2 Henrik Sedin             Zack Smith               Sam Reinhart             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitri Orlov             Roman Josi                                        60     0   0  5  
 2 Thomas Hickey            Tyson Barrie                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Zack Smith               Justin Abdelkader        50     0   5  0  
 2 Sam Reinhart             Zach Budish              50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Dmitri Orlov             50     0   5  0  
 2 Thomas Hickey            Tyson Barrie             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Zack Smith                                        50     0   5  0  
 2 Sam Reinhart                                      50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Dmitri Orlov             50     0   5  0  
 2 Thomas Hickey            Tyson Barrie             50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nathan MacKinnon         Colin Wilson             50     0   1  4  
 2 Henrik Sedin             Sam Reinhart             50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Tyson Barrie             50     1   2  2  
 2 Dmitri Orlov             Thomas Hickey            50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nathan MacKinnon         Colin Wilson             Oliver Bjorkstrand       Roman Josi               Dmitri Orlov             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Zack Smith               Justin Abdelkader        Sam Reinhart             Roman Josi               Raphael Diaz             

<b>Goaltenders</b>
Starting : Jonas Hiller             
Backup : Tristan Jarry            

<b>Extra Forwards</b>
Normal : Nathan MacKinnon, Colin Wilson, Sam Reinhart - PP : Peter Trainor, Vince Hinostroza - PK : Zach Budish
<b>Extra Defensemen</b>
Normal : Dmitri Orlov, Roman Josi, Tyson Barrie - PP : Roman Josi - PK : Dmitri Orlov, Roman Josi
<b>Penalty Shots</b>
Colin Wilson, Nathan MacKinnon, Sam Reinhart, Henrik Sedin, Oliver Bjorkstrand
<b>Custom OT Lines Forwards</b>
Nathan MacKinnon, Colin Wilson, Sam Reinhart, Oliver Bjorkstrand, Henrik Sedin, Vince Hinostroza, Zach Budish, Freddie Hamilton, Zack Smith, Justin Abdelkader
<b>Custom OT Lines Defensemen</b>
Dmitri Orlov, Roman Josi, Tyson Barrie, Raphael Diaz, Thomas Hickey

<b>Scratches</b>
Jakub Jerabek (Healthy), Kirill Kaprizov (Healthy), Kieran Millan (Healthy)</pre></div>
<h1 class="TeamLinesPro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Henrik Samuelsson        Jonathan Audy-Marchessaul35     0   0  5  
 2 Andrew Cogliano          Ryan Spooner             Elias Lindholm           30     0   0  5  
 3 Nick Schmaltz            Linus Omark              Anthony Beauvillier      20     1   0  4  
 4 Kevin Stenlund           Ondrej Kase              Beau Bennett             15     1   0  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Trouba             Steven Santini                                    37     0   0  5  
 2 Mark Katic               Ryan Whitney                                      33     0   0  5  
 3 Andrej Sekera            Mark Fayne                                        20     1   0  4  
 4 Jacob Trouba             Steven Santini                                    10     1   0  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Henrik Samuelsson        Jonathan Audy-Marchessaul60     0   0  5  
 2 Andrew Cogliano          Ryan Spooner             Elias Lindholm           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Trouba             Steven Santini                                    60     0   0  5  
 2 Andrej Sekera            Ryan Whitney                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Audy-MarchessaulAndrew Cogliano          60     0   4  1  
 2 Henrik Samuelsson        Jack Eichel              40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Steven Santini           60     0   4  1  
 2 Andrej Sekera            Mark Fayne               40     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Audy-Marchessaul                         60     0   5  0  
 2 Andrew Cogliano                                   40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Steven Santini           60     0   5  0  
 2 Andrej Sekera            Mark Katic               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Henrik Samuelsson        Andrew Cogliano          60     1   0  4  
 2 Jonathan Audy-MarchessaulRyan Spooner             40     1   0  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Trouba             Ryan Whitney             60     1   0  4  
 2 Andrej Sekera            Steven Santini           40     1   0  4  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Henrik Samuelsson        Jonathan Audy-MarchessaulJacob Trouba             Ryan Whitney             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Andrew Cogliano          Anthony Beauvillier      Jacob Trouba             Ryan Whitney             

<b>Goaltenders</b>
Starting : Sergei Bobrovsky         
Backup : Keith Kinkaid            

<b>Extra Forwards</b>
Normal : Kevin Stenlund, Jonathan Audy-Marchessault, Henrik Samuelsson - PP : Kevin Stenlund, Jonathan Audy-Marchessault - PK : Henrik Samuelsson
<b>Extra Defensemen</b>
Normal : Jacob Trouba, Steven Santini, Andrej Sekera - PP : Jacob Trouba - PK : Jacob Trouba, Andrej Sekera
<b>Penalty Shots</b>
Elias Lindholm, Jack Eichel, Linus Omark, Ryan Spooner, Andrew Cogliano
<b>Custom OT Lines Forwards</b>
Kevin Stenlund, Jonathan Audy-Marchessault, Jack Eichel, Ryan Spooner, Linus Omark, Beau Bennett, Andrew Cogliano, Henrik Samuelsson, Elias Lindholm, Nick Schmaltz
<b>Custom OT Lines Defensemen</b>
Jacob Trouba, Steven Santini, Andrej Sekera, Ryan Whitney, Mark Katic

<b>Scratches</b>
Blake Coleman (Healthy), Ryan Kuffner (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Laurent Dauphin          Max Friberg              Michael Frolik           35     1   2  2  
 2 Luke Adam                Jakob Silfverberg        Sven Baertschi           30     1   2  2  
 3 William Carrier          Michael Bunting          Gabriel Bourque          25     1   2  2  
 4 Nate Thompson            Gabriel Bourque          Carter Ashton            10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tim Erixon               Dustin Byfuglien                                  35     1   2  2  
 2 Michael Del Zotto        Brayden McNabb                                    30     1   2  2  
 3 David Musil              Brian Lee                                         25     1   2  2  
 4 Michael Del Zotto        Dustin Byfuglien                                  10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Laurent Dauphin          Max Friberg              Michael Frolik           60     0   2  3  
 2 William Carrier          Sven Baertschi           Gabriel Bourque          40     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Michael Del Zotto        Brayden McNabb                                    60     1   2  2  
 2 Dustin Byfuglien         Tim Erixon                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sven Baertschi           Gabriel Bourque          60     1   2  2  
 2 Max Friberg              Laurent Dauphin          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brian Lee                Brayden McNabb           60     1   2  2  
 2 David Musil              Michael Del Zotto        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Gabriel Bourque                                   60     1   2  2  
 2 Sven Baertschi                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brayden McNabb           Brian Lee                60     1   2  2  
 2 David Musil              Dustin Byfuglien         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Max Friberg              Laurent Dauphin          60     0   2  3  
 2 Sven Baertschi           Gabriel Bourque          40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Michael Del Zotto        David Musil              60     1   2  2  
 2 Dustin Byfuglien         Brayden McNabb           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Laurent Dauphin          Gabriel Bourque          Michael Frolik           Michael Del Zotto        Dustin Byfuglien         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nate Thompson            Laurent Dauphin          Gabriel Bourque          David Musil              Brayden McNabb           

<b>Goaltenders</b>
Starting : Ben Bishop               
Backup : Jake Allen               

<b>Extra Forwards</b>
Normal : Max Friberg, Gabriel Bourque, Michael Bunting - PP : Sven Baertschi, Gabriel Bourque - PK : Gabriel Bourque
<b>Extra Defensemen</b>
Normal : Michael Del Zotto, Brayden McNabb, Dustin Byfuglien - PP : Michael Del Zotto - PK : David Musil, Brayden McNabb
<b>Penalty Shots</b>
Sven Baertschi, Gabriel Bourque, Michael Bunting, Luke Adam, Max Friberg
<b>Custom OT Lines Forwards</b>
Laurent Dauphin, Gabriel Bourque, Michael Frolik, Luke Adam, Carter Ashton, Nate Thompson, Max Friberg, Michael Bunting, Sven Baertschi, William Carrier
<b>Custom OT Lines Defensemen</b>
Michael Del Zotto, Dustin Byfuglien, David Musil, Brian Lee, Brayden McNabb

<b>Scratches</b>
Émile Poirier (Healthy), Jared Coreau (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Brandon Saad             Nail Yakupov             29     0   1  4  
 2 Alexander Wennberg       J.T. Miller              Rickard Rakell           26     0   1  4  
 3 Brayden Point            Viktor Arvidsson         Christian Thomas         25     1   1  3  
 4 Cody Eakin               Chris Kreider            Joonas Donskoi           20     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dylan McIlrath           Shea Theodore                                     34     1   2  2  
 2 Ryan McDonagh            Ivan Provorov                                     33     1   2  2  
 3 Griffin Reinhart         Justin Faulk                                      33     1   2  2  
 4 Ryan McDonagh            Justin Faulk                                      0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Brandon Saad             Nail Yakupov             60     0   0  5  
 2 Alexander Wennberg       J.T. Miller              Rickard Rakell           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Theodore            Ivan Provorov                                     60     0   1  4  
 2 Ryan McDonagh            Justin Faulk                                      40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Viktor Arvidsson         60     1   4  0  
 2 Alexander Wennberg       Brandon Saad             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dylan McIlrath           Ryan McDonagh            60     1   4  0  
 2 Griffin Reinhart         Justin Faulk             40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Aleksander Barkov                                 60     0   5  0  
 2 Alexander Wennberg                                40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dylan McIlrath           Ryan McDonagh            60     0   5  0  
 2 Griffin Reinhart         Justin Faulk             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nail Yakupov             J.T. Miller              60     1   2  2  
 2 Aleksander Barkov        Christian Thomas         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dylan McIlrath           Shea Theodore            60     1   2  2  
 2 Ryan McDonagh            Justin Faulk             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Brandon Saad             Nail Yakupov             Ivan Provorov            Shea Theodore            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Brandon Saad             Viktor Arvidsson         Ryan McDonagh            Dylan McIlrath           

<b>Goaltenders</b>
Starting : Jack Campbell            
Backup : Henrik Lundqvist         

<b>Extra Forwards</b>
Normal : Nail Yakupov, Aleksander Barkov, Christian Thomas - PP : Aleksander Barkov, Nail Yakupov - PK : Aleksander Barkov
<b>Extra Defensemen</b>
Normal : Ryan McDonagh, Justin Faulk, Shea Theodore - PP : Justin Faulk - PK : Ryan McDonagh, Justin Faulk
<b>Penalty Shots</b>
Nail Yakupov, Aleksander Barkov, J.T. Miller, Christian Thomas, Brandon Saad
<b>Custom OT Lines Forwards</b>
Aleksander Barkov, Viktor Arvidsson, Chris Kreider, J.T. Miller, Nail Yakupov, Brayden Point, Christian Thomas, Alexander Wennberg, Rickard Rakell, Brandon Saad
<b>Custom OT Lines Defensemen</b>
Ryan McDonagh, Dylan McIlrath, Justin Faulk, Griffin Reinhart, Shea Theodore

<b>Scratches</b>
Jake McCabe (Healthy), Fyodor Malykhin (Healthy), Ziyat Paigin (Healthy)</pre></div>
<h1 class="TeamLinesPro_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 David Krejci             Michael Grabner          Brandon McMillan         48     0   2  3  
 2 Lars Eller               Kris Versteeg            Jeff Carter              30     0   2  3  
 3 Michael Sgarbossa        Nikita Soshnikov         Maxim Shalunov           14     0   2  3  
 4 Valtteri Filppula        Carl Hagelin             Joel Armia               8      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jared Cowen              Erik Karlsson                                     48     0   2  3  
 2 Victor Hedman            Ryan Murphy                                       32     0   2  3  
 3 Alec Martinez            John Moore                                        20     0   3  2  
 4 Victor Hedman            Jared Cowen                                       0      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 David Krejci             Lars Eller               Michael Grabner          78     0   0  5  
 2 Brandon McMillan         Kris Versteeg            Jeff Carter              22     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Erik Karlsson                                     78     0   0  5  
 2 Alec Martinez            Ryan Murphy                                       22     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Krejci             Brandon McMillan         58     0   5  0  
 2 Jeff Carter              Lars Eller               42     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Jared Cowen              58     0   5  0  
 2 Alec Martinez            John Moore               42     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 David Krejci                                      58     0   5  0  
 2 Brandon McMillan                                  42     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Jared Cowen              58     0   5  0  
 2 John Moore               Alec Martinez            42     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Krejci             Michael Grabner          68     0   2  3  
 2 Brandon McMillan         Jeff Carter              32     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Erik Karlsson            68     1   2  2  
 2 Jared Cowen              Ryan Murphy              32     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   David Krejci             Lars Eller               Jeff Carter              Victor Hedman            Erik Karlsson            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   David Krejci             Brandon McMillan         Jeff Carter              Jared Cowen              John Moore               

<b>Goaltenders</b>
Starting : James Reimer             
Backup : Benjamin Conz            

<b>Extra Forwards</b>
Normal : David Krejci, Lars Eller, Kris Versteeg - PP : Michael Grabner, Lars Eller - PK : Brandon McMillan
<b>Extra Defensemen</b>
Normal : Erik Karlsson, Victor Hedman, John Moore - PP : Erik Karlsson - PK : Alec Martinez, Ryan Murphy
<b>Penalty Shots</b>
Joel Armia, Kris Versteeg, Michael Grabner, Brandon McMillan, Lars Eller
<b>Custom OT Lines Forwards</b>
Lars Eller, David Krejci, Brandon McMillan, Kris Versteeg, Joel Armia, Maxim Shalunov, Jeff Carter, Michael Grabner, Michael Sgarbossa, Valtteri Filppula
<b>Custom OT Lines Defensemen</b>
Victor Hedman, Erik Karlsson, Alec Martinez, Ryan Murphy, John Moore

<b>Scratches</b>
Justin Kloos (Healthy), Mason Geertsen (Healthy)</pre></div>
<h1 class="TeamLinesPro_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Boone Jenner             Johan Larsson            35     1   1  3  
 2 Marcus Johansson         James Van Riemsdyk       Drew Stafford            35     0   1  4  
 3 Max Domi                 Nikita Gusev             Curtis Lazar             20     1   3  1  
 4 Nick Shore               Joakim Nordstrom         Brendan Ranford          10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Larsson             Torey Krug                                        30     0   1  4  
 2 Travis Brown             Marc-Andre Bourdon                                28     0   1  4  
 3 David Rundblad           Andrej Meszaros                                   27     0   1  4  
 4 Adam Larsson             Torey Krug                                        15     0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Marcus Johansson         Max Domi                 60     0   0  5  
 2 Boone Jenner             Drew Stafford            James Van Riemsdyk       40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Larsson             Torey Krug                                        60     0   0  5  
 2 Travis Brown             David Rundblad                                    40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Curtis Lazar             Joakim Nordstrom         60     0   5  0  
 2 Nick Shore               Marcus Johansson         40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrej Meszaros          David Rundblad           60     0   5  0  
 2 Travis Brown             Marc-Andre Bourdon       40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Claude Giroux                                     60     0   5  0  
 2 Boone Jenner                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Larsson             Marc-Andre Bourdon       60     0   5  0  
 2 Andrej Meszaros          Travis Brown             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Claude Giroux            Max Domi                 60     0   1  4  
 2 Boone Jenner             Drew Stafford            40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Larsson             Torey Krug               60     0   1  4  
 2 Travis Brown             Marc-Andre Bourdon       40     0   1  4  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Max Domi                 Boone Jenner             Marcus Johansson         Torey Krug               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Boone Jenner             Claude Giroux            Curtis Lazar             Marc-Andre Bourdon       Adam Larsson             

<b>Goaltenders</b>
Starting : Brian Elliott            
Backup : Robin Lehner             

<b>Extra Forwards</b>
Normal : Max Domi, Johan Larsson, Drew Stafford - PP : Claude Giroux, Johan Larsson - PK : Claude Giroux
<b>Extra Defensemen</b>
Normal : Andrej Meszaros, David Rundblad, Travis Brown - PP : Marc-Andre Bourdon - PK : Adam Larsson, Andrej Meszaros
<b>Penalty Shots</b>
Claude Giroux, Drew Stafford, Max Domi, Boone Jenner, Curtis Lazar
<b>Custom OT Lines Forwards</b>
Claude Giroux, Boone Jenner, Drew Stafford, Marcus Johansson, Max Domi, James Van Riemsdyk, Curtis Lazar, Nikita Gusev, Brendan Ranford, Johan Larsson
<b>Custom OT Lines Defensemen</b>
Adam Larsson, Torey Krug, Andrej Meszaros, Marc-Andre Bourdon, David Rundblad

<b>Scratches</b>
Jonathan Ericsson (Healthy), Craig Smith (Healthy), Marek Mazanec (Healthy)</pre></div>
<h1 class="TeamLinesPro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Paul Stastny             Alex Ovechkin            Bryan Rust               60     1   1  3  
 2 Derek Stepan             Alexander Semin          Bobby Ryan               30     0   2  3  
 3 Shawn Matthias           Vladimir Sobotka         Conor Sheary             9      0   4  1  
 4 Derek Stepan             Alex Ovechkin            Ryan Shannon             1      0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cody Franson             Duncan Keith                                      50     1   2  2  
 2 Anton Stralman           Justin Braun                                      34     1   2  2  
 3 Ryan Wilson              Trevor Daley                                      15     0   1  4  
 4 Cody Franson             Duncan Keith                                      1      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Derek Stepan             Alexander Semin          Bobby Ryan               60     0   0  5  
 2 Paul Stastny             Conor Sheary             Shawn Matthias           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Ovechkin            Cody Franson                                      60     0   0  5  
 2 Justin Braun             Duncan Keith                                      40     1   0  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Paul Stastny             Shawn Matthias           60     1   4  0  
 2 Vladimir Sobotka         Ryan Shannon             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Wilson              Duncan Keith             60     1   4  0  
 2 Cody Franson             Justin Braun             40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Vladimir Sobotka                                  60     1   2  2  
 2 Derek Stepan                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cody Franson             Duncan Keith             60     1   2  2  
 2 Ryan Wilson              Justin Braun             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Stepan             Alex Ovechkin            60     1   2  2  
 2 Paul Stastny             Bobby Ryan               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Semin          Duncan Keith             60     1   2  2  
 2 Bryan Rust               Cody Franson             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Paul Stastny             Alex Ovechkin            Bobby Ryan               Cody Franson             Duncan Keith             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Derek Stepan             Alex Ovechkin            Bobby Ryan               Cody Franson             Duncan Keith             

<b>Goaltenders</b>
Starting : Cam Ward                 
Backup : Niklas Backstrom         

<b>Extra Forwards</b>
Normal : Alex Ovechkin, Derek Stepan, Paul Stastny - PP : Shawn Matthias, Conor Sheary - PK : Bryan Rust
<b>Extra Defensemen</b>
Normal : Justin Braun, Duncan Keith, Cody Franson - PP : Duncan Keith - PK : Duncan Keith, Ryan Wilson
<b>Penalty Shots</b>
Alex Ovechkin, Derek Stepan, Bobby Ryan, Paul Stastny, Alexander Semin
<b>Custom OT Lines Forwards</b>
Alex Ovechkin, Derek Stepan, Bobby Ryan, Paul Stastny, Shawn Matthias, Alexander Semin, Vladimir Sobotka, Conor Sheary, Matt Martin, Bryan Rust
<b>Custom OT Lines Defensemen</b>
Justin Braun, Duncan Keith, Ryan Wilson, Anton Stralman, Trevor Daley

<b>Scratches</b>
Brad Richardson (Healthy), Christian Ehrhoff (Healthy), Francis Verreault-Paul (Healthy)</pre></div>
<h1 class="TeamLinesPro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Bjugstad            Jake Guentzel            Jake Virtanen            30     0   0  5  
 2 Matthew Peca             Tyler Motte              Sven Andrighetto         30     0   0  5  
 3 Lukas Sedlak             Nick Foligno             Gabriel Gagné            25     0   2  3  
 4 Nick Bjugstad            Tom Kuhnhackl            Zach Aston-Reese         15     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Connor Murphy            Brendan Smith                                     25     1   2  2  
 2 Alex Biega               Jake Muzzin                                       25     1   2  2  
 3 Brandon Manning          Brett Kulak                                       25     1   2  2  
 4 Jake Muzzin              Brendan Smith                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Foligno             Nick Bjugstad            Matthew Peca             60     1   2  2  
 2 Sven Andrighetto         Jake Virtanen            Lukas Sedlak             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brett Kulak              Brandon Manning                                   60     1   2  2  
 2 Jake Muzzin              Brendan Smith                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Bjugstad            Nick Foligno             60     1   2  2  
 2 Lukas Sedlak             Matthew Peca             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Manning          Brendan Smith            60     1   2  2  
 2 Brett Kulak              Jake Muzzin              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nick Foligno                                      60     1   2  2  
 2 Zach Aston-Reese                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Brandon Manning          60     1   2  2  
 2 Brett Kulak              Jake Muzzin              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Foligno             Nick Bjugstad            60     1   2  2  
 2 Lukas Sedlak             Gabriel Gagné            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Smith            Jake Muzzin              60     1   2  2  
 2 Brandon Manning          Brett Kulak              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Bjugstad            Nick Foligno             Matthew Peca             Connor Murphy            Brendan Smith            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Bjugstad            Nick Foligno             Matthew Peca             Connor Murphy            Brendan Smith            

<b>Goaltenders</b>
Starting : Andrey Vasilevskiy       
Backup : Olivier Roy              

<b>Extra Forwards</b>
Normal : Tom Kuhnhackl, Nick Bjugstad, Nick Foligno - PP : Nick Bjugstad, Sven Andrighetto - PK : Tyler Motte
<b>Extra Defensemen</b>
Normal : Brandon Manning, Jake Muzzin, Brett Kulak - PP : Jake Muzzin - PK : Jake Muzzin, Brett Kulak
<b>Penalty Shots</b>
Tom Kuhnhackl, Nick Bjugstad, Nick Foligno, Lukas Sedlak, Sven Andrighetto
<b>Custom OT Lines Forwards</b>
Tyler Motte, Tom Kuhnhackl, Nick Bjugstad, Nick Foligno, Lukas Sedlak, Sven Andrighetto, Jake Virtanen, Jake Guentzel, Gabriel Gagné, Matthew Peca
<b>Custom OT Lines Defensemen</b>
Brandon Manning, Connor Murphy, Brendan Smith, Jake Muzzin, Brett Kulak

<b>Scratches</b>
Joey Hishon (Healthy), Hunter Drew (Healthy), Dmitry Sokolov (Healthy)</pre></div>
<h1 class="TeamLinesPro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Eric Staal               Brendan Leipsic          Jordan Caron             35     0   0  5  
 2 Tyler Ennis              Tanner Pearson           Jacob Josefson           35     0   0  5  
 3 Brandon Pirri            Brock McGinn             Drake Caggiula           30     0   0  5  
 4 Joe Thornton             Matt Calvert             Tim Brent                0      1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dylan Olsen              Myles Bell                                        40     1   2  2  
 2 Frank Corrado            Petteri Lindbohm                                  30     1   2  2  
 3 Aaron Ness               Calvin de Haan                                    30     1   2  2  
 4 Calvin de Haan           Petteri Lindbohm                                  0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Ennis              Jacob Josefson           Jordan Caron             50     0   0  5  
 2 Eric Staal               Tanner Pearson           Brendan Leipsic          50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Aaron Ness               Myles Bell                                        50     0   0  5  
 2 Frank Corrado            Dylan Olsen                                       50     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joe Thornton             Jordan Caron             60     0   5  0  
 2 Tim Brent                Drake Caggiula           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Calvin de Haan           Aaron Ness               50     0   5  0  
 2 Petteri Lindbohm         Frank Corrado            50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joe Thornton                                      50     0   5  0  
 2 Eric Staal                                        50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Calvin de Haan           Myles Bell               50     1   2  2  
 2 Aaron Ness               Frank Corrado            50     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Pirri            Brock McGinn             50     1   2  2  
 2 Joe Thornton             Drake Caggiula           50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dylan Olsen              Myles Bell               50     1   2  2  
 2 Calvin de Haan           Petteri Lindbohm         50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Ennis              Jacob Josefson           Brandon Pirri            Dylan Olsen              Myles Bell               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Eric Staal               Tanner Pearson           Brock McGinn             Aaron Ness               Calvin de Haan           

<b>Goaltenders</b>
Starting : Chase Marchand           
Backup : Jonathan Bernier         

<b>Extra Forwards</b>
Normal : Brendan Leipsic, Tanner Pearson, Myles Bell - PP : Brendan Leipsic, Tanner Pearson - PK : Myles Bell
<b>Extra Defensemen</b>
Normal : Myles Bell, Frank Corrado, Calvin de Haan - PP : Myles Bell - PK : Frank Corrado, Calvin de Haan
<b>Penalty Shots</b>
Eric Staal, Tyler Ennis, Brock McGinn, Tanner Pearson, Jacob Josefson
<b>Custom OT Lines Forwards</b>
Tyler Ennis, Brandon Pirri, Jacob Josefson, Eric Staal, Aaron Ness, Tanner Pearson, Brendan Leipsic, Jordan Caron, Brock McGinn, Myles Bell
<b>Custom OT Lines Defensemen</b>
Petteri Lindbohm, Aaron Ness, Frank Corrado, Myles Bell, Calvin de Haan

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_SEA"><a id="SeattleSaints">Seattle Saints</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Saints Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#SeattleSaints">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#SeattleSaints">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#SeattleSaints">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#SeattleSaints">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#SeattleSaints">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#SeattleSaints">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#SeattleSaints">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#SeattleSaints">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#SeattleSaints">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#SeattleSaints">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#SeattleSaints">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#SeattleSaints">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleSaints');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleSaints" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 William Karlsson         Mattias Janmark-Nylen    Alexander Burmistrov     35     0   0  5  
 2 Patrik Berglund          Max Pacioretty           Mikkel Boedker           30     0   1  4  
 3 Bryan Little             Vadim Shipachev          Reilly Smith             25     0   2  3  
 4 Dana Tyrell              Tomas Jurco              Ben Smith                10     1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Urbom          Seth Jones                                        37     0   3  2  
 2 Darnell Nurse            Keith Aulie                                       33     0   3  2  
 3 Raman Hrabarenka         Mattias Ekholm                                    30     0   3  2  
 4 Raman Hrabarenka         Darnell Nurse                                     0      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrik Berglund          Max Pacioretty           Reilly Smith             55     0   0  5  
 2 William Karlsson         Bryan Little             Alexander Burmistrov     45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Urbom          Seth Jones                                        60     0   0  5  
 2 Darnell Nurse            Raman Hrabarenka                                  40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dana Tyrell              Reilly Smith             60     0   5  0  
 2 Bryan Little             Alexander Burmistrov     40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Keith Aulie              Darnell Nurse            60     0   5  0  
 2 Alexander Urbom          Raman Hrabarenka         40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dana Tyrell                                       60     0   5  0  
 2 Bryan Little                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Seth Jones               Darnell Nurse            60     0   5  0  
 2 Alexander Urbom          Keith Aulie              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ben Smith                Mattias Janmark-Nylen    60     0   2  3  
 2 Bryan Little             Mikkel Boedker           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Seth Jones               Darnell Nurse            60     0   3  2  
 2 Mattias Ekholm           Alexander Urbom          40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   William Karlsson         Max Pacioretty           Alexander Burmistrov     Seth Jones               Darnell Nurse            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dana Tyrell              Patrik Berglund          Bryan Little             Keith Aulie              Alexander Urbom          

<b>Goaltenders</b>
Starting : Jacob Markstrom          
Backup : Frederik Andersen        

<b>Extra Forwards</b>
Normal : Mattias Janmark-Nylen, Mikkel Boedker, Alexander Burmistrov - PP : Tomas Jurco, Mattias Janmark-Nylen - PK : Patrik Berglund
<b>Extra Defensemen</b>
Normal : Mattias Ekholm, Raman Hrabarenka, Darnell Nurse - PP : Darnell Nurse - PK : Mattias Ekholm, Raman Hrabarenka
<b>Penalty Shots</b>
Patrik Berglund, Reilly Smith, Max Pacioretty, Tomas Jurco, Alexander Burmistrov
<b>Custom OT Lines Forwards</b>
Alexander Burmistrov, Max Pacioretty, William Karlsson, Vadim Shipachev, Mattias Janmark-Nylen, Bryan Little, Mikkel Boedker, Reilly Smith, Tomas Jurco, Patrik Berglund
<b>Custom OT Lines Defensemen</b>
Darnell Nurse, Seth Jones, Alexander Urbom, Raman Hrabarenka, Keith Aulie

<b>Scratches</b>
Taylor Doherty (Healthy), Nick Petrecki (Healthy), Simon Moser (Healthy)</pre></div>
<h1 class="TeamLinesPro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan O'Reilly            Brandon Dubinsky         Vladimir Tarasenko       28     0   5  0  
 2 Mark Scheifele           Maxwell Reinhart         Tyler Johnson            26     0   5  0  
 3 Mitch Marner             Nazem Kadri              Jamie McGinn             24     0   0  5  
 4 Marcus Kruger            Jarret Stoll             Valeri Nichushkin        22     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Goligoski           Jack Johnson                                      45     1   2  2  
 2 Ian Cole                 Kevin Klein                                       30     1   2  2  
 3 John Klingberg           Jan Rutta                                         20     1   2  2  
 4 Jack Johnson             John Klingberg                                    5      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan O'Reilly            Mark Scheifele           Nazem Kadri              60     1   0  4  
 2 Marcus Kruger            Tyler Johnson            Valeri Nichushkin        40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Klingberg           Jack Johnson                                      60     1   0  4  
 2 Mitch Marner             Alex Goligoski                                    40     1   0  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Marcus Kruger            Ryan O'Reilly            55     1   4  0  
 2 Maxwell Reinhart         Brandon Dubinsky         45     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Johnson             Alex Goligoski           55     1   4  0  
 2 Kevin Klein              Jan Rutta                45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Marcus Kruger                                     55     1   2  2  
 2 Maxwell Reinhart                                  45     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Goligoski           Jack Johnson             55     1   4  0  
 2 Kevin Klein              Ian Cole                 45     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mark Scheifele           Vladimir Tarasenko       60     1   2  2  
 2 Ryan O'Reilly            Tyler Johnson            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nazem Kadri              John Klingberg           60     0   1  4  
 2 Jack Johnson             Alex Goligoski           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Nazem Kadri              Mitch Marner             Jack Johnson             Alex Goligoski           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan O'Reilly            Brandon Dubinsky         Vladimir Tarasenko       Jack Johnson             Alex Goligoski           

<b>Goaltenders</b>
Starting : Tuukka Rask              
Backup : Richard Bachman          

<b>Extra Forwards</b>
Normal : Vladimir Tarasenko, Mark Scheifele, Nazem Kadri - PP : Marcus Kruger, Maxwell Reinhart - PK : Mitch Marner
<b>Extra Defensemen</b>
Normal : John Klingberg, Alex Goligoski, Jack Johnson - PP : Jan Rutta - PK : John Klingberg, Alex Goligoski
<b>Penalty Shots</b>
Nazem Kadri, Vladimir Tarasenko, Mark Scheifele, Ryan O'Reilly, Tyler Johnson
<b>Custom OT Lines Forwards</b>
Mark Scheifele, Vladimir Tarasenko, Brandon Dubinsky, Tyler Johnson, Ryan O'Reilly, Valeri Nichushkin, Nazem Kadri, Jamie McGinn, Marcus Kruger, Maxwell Reinhart
<b>Custom OT Lines Defensemen</b>
John Klingberg, Alex Goligoski, Jack Johnson, Ian Cole, Jan Rutta

<b>Scratches</b>
Alexei Emelin (Healthy), Yohann Auvitu  (Healthy)</pre></div>
<h1 class="TeamLinesPro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Steven Stamkos           Alex Galchenyuk          David Perron             33     0   1  4  
 2 Mikael Backlund          Dustin Brown             Devante Smith-Pelly      27     0   2  3  
 3 Phillip Danault          Quinton Howden           Jean-Gabriel Pageau      25     0   2  3  
 4 David Desharnais         David Perron             Scott Kosmachuk          15     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nikita Zadorov           P.K. Subban                                       35     0   2  3  
 2 Marc Staal               Mike Green                                        35     0   3  2  
 3 Nathan Beaulieu          Samuel Morin                                      30     0   3  2  
 4 Marc Staal               Mike Green                                        0      0   0  5  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Steven Stamkos           Alex Galchenyuk          Jean-Gabriel Pageau      65     0   0  5  
 2 Mikael Backlund          Dustin Brown             Devante Smith-Pelly      35     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 P.K. Subban              Nathan Beaulieu                                   65     0   0  5  
 2 Mike Green               David Perron                                      35     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Phillip Danault          Quinton Howden           50     0   5  0  
 2 Mikael Backlund          Jean-Gabriel Pageau      50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Samuel Morin             50     0   5  0  
 2 Nikita Zadorov           P.K. Subban              50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mikael Backlund                                   50     0   5  0  
 2 Phillip Danault                                   50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Mike Green               50     0   5  0  
 2 Nikita Zadorov           P.K. Subban              50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Steven Stamkos           Alex Galchenyuk          60     0   2  3  
 2 Phillip Danault          Jean-Gabriel Pageau      40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zadorov           P.K. Subban              60     0   3  2  
 2 Marc Staal               Mike Green               40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Steven Stamkos           Alex Galchenyuk          Devante Smith-Pelly      P.K. Subban              Mike Green               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Phillip Danault          Quinton Howden           Jean-Gabriel Pageau      Nikita Zadorov           Marc Staal               

<b>Goaltenders</b>
Starting : Jonathan Quick           
Backup : Malcolm Subban           

<b>Extra Forwards</b>
Normal : Steven Stamkos, Jean-Gabriel Pageau, Mikael Backlund - PP : Steven Stamkos, Mikael Backlund - PK : Mikael Backlund
<b>Extra Defensemen</b>
Normal : Mike Green, P.K. Subban, Marc Staal - PP : Mike Green - PK : Mike Green, Marc Staal
<b>Penalty Shots</b>
Jean-Gabriel Pageau, David Perron, David Desharnais, Mikael Backlund, Steven Stamkos
<b>Custom OT Lines Forwards</b>
Steven Stamkos, Alex Galchenyuk, Phillip Danault, Dustin Brown, Mikael Backlund, Jean-Gabriel Pageau, David Desharnais, David Perron, Quinton Howden, Scott Kosmachuk
<b>Custom OT Lines Defensemen</b>
Nathan Beaulieu, Marc Staal, Mike Green, Nikita Zadorov, P.K. Subban

<b>Scratches</b>
Zach Hyman (Healthy), Elias Pettersson (Healthy), Owen Tippett (Healthy)</pre></div>
<h1 class="TeamLinesPro_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Sebastian Aho            Phil Kessel              25     0   1  4  
 2 Mikko Rantanen           Brayden Schenn           Teemu Pulkkinen          25     0   1  4  
 3 Louis Leblanc            Zack Kassian             Tyler Biggs              25     1   2  2  
 4 Sam Carrick              Taylor Pyatt             Nicklas Backstrom        25     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tobias Enstrom           Morgan Rielly                                     25     0   2  3  
 2 Luke Schenn              Ville Pokka                                       25     1   2  2  
 3 Jesse Blacker            Theo Peckham                                      25     1   3  1  
 4 Luke Schenn              Morgan Rielly                                     25     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Sebastian Aho            Phil Kessel              60     0   0  5  
 2 Mikko Rantanen           Brayden Schenn           Teemu Pulkkinen          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tobias Enstrom           Luke Schenn                                       60     0   1  4  
 2 Morgan Rielly            Ville Pokka                                       40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Louis Leblanc            Taylor Pyatt             60     0   4  1  
 2 Nicklas Backstrom        Tyler Biggs              40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luke Schenn              Theo Peckham             60     0   5  0  
 2 Tobias Enstrom           Morgan Rielly            40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Louis Leblanc                                     60     0   5  0  
 2 Nicklas Backstrom                                 40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jesse Blacker            Luke Schenn              60     0   5  0  
 2 Tobias Enstrom           Morgan Rielly            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Backstrom        Phil Kessel              60     0   2  3  
 2 Louis Leblanc            Tyler Biggs              40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luke Schenn              Morgan Rielly            60     1   2  2  
 2 Tobias Enstrom           Jesse Blacker            40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Brayden Schenn           Phil Kessel              Morgan Rielly            Tobias Enstrom           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Louis Leblanc            Taylor Pyatt             Zack Kassian             Luke Schenn              Theo Peckham             

<b>Goaltenders</b>
Starting : Steve Mason              
Backup : Dustin Tokarski          

<b>Extra Forwards</b>
Normal : Nicklas Backstrom, Tyler Biggs, Louis Leblanc - PP : Nicklas Backstrom, Louis Leblanc - PK : Tyler Biggs
<b>Extra Defensemen</b>
Normal : Morgan Rielly, Jesse Blacker, Luke Schenn - PP : Tobias Enstrom - PK : Luke Schenn, Morgan Rielly
<b>Penalty Shots</b>
Phil Kessel, Tyler Biggs, Nicklas Backstrom, Teemu Pulkkinen, Louis Leblanc
<b>Custom OT Lines Forwards</b>
Phil Kessel, Nicklas Backstrom, Brayden Schenn, Mikko Rantanen, Sebastian Aho, Teemu Pulkkinen, Louis Leblanc, Zack Kassian, Tyler Biggs, Taylor Pyatt
<b>Custom OT Lines Defensemen</b>
Tobias Enstrom, Morgan Rielly, Luke Schenn, Jesse Blacker, Theo Peckham

<b>Scratches</b>
Brady Skjei (Healthy), James Melindy (Healthy), Trevor Smith (Healthy)</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Kesler              Mikhail Grigorenko       Nikolaj Ehlers           35     0   2  3  
 2 Zemgus Girgensons        Adam Erne                Andrei Svechnikov        31     1   1  3  
 3 Nicolas Kerdiles         Christian Dvorak         Dmitrij Jaskin           30     0   3  2  
 4 Rocco Grimaldi           Stefan Matteau           Matteson Iacopelli       4      0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Ahti Oksanen                                      36     0   2  3  
 2 Rasmus Ristolainen       Aaron Ekblad                                      36     0   2  3  
 3 Josh Morrissey           David Schlemko                                    28     0   3  2  
 4 Ahti Oksanen             David Schlemko                                    0      0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Zemgus Girgensons        Ahti Oksanen             Nikolaj Ehlers           56     0   0  5  
 2 Ryan Kesler              Adam Erne                Mikhail Grigorenko       44     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Josh Morrissey                                    55     0   0  5  
 2 Aaron Ekblad             Rasmus Ristolainen                                45     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Zemgus Girgensons        Ahti Oksanen             60     0   4  1  
 2 Ryan Kesler              Stefan Matteau           40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Aaron Ekblad             54     0   4  1  
 2 Dougie Hamilton          Josh Morrissey           46     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Zemgus Girgensons                                 60     0   5  0  
 2 Stefan Matteau                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ekblad             Dougie Hamilton          60     0   5  0  
 2 Rasmus Ristolainen       Ahti Oksanen             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mikhail Grigorenko       Nikolaj Ehlers           60     0   2  3  
 2 Ryan Kesler              Zemgus Girgensons        40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Morrissey           Rasmus Ristolainen       60     0   2  3  
 2 Dougie Hamilton          Aaron Ekblad             40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Kesler              Zemgus Girgensons        Nikolaj Ehlers           Dougie Hamilton          Rasmus Ristolainen       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Kesler              Zemgus Girgensons        Andrei Svechnikov        Aaron Ekblad             Dougie Hamilton          

<b>Goaltenders</b>
Starting : Darcy Kuemper            
Backup : Cory Schneider           

<b>Extra Forwards</b>
Normal : Ryan Kesler, Nikolaj Ehlers, Andrei Svechnikov - PP : Nikolaj Ehlers, Ryan Kesler - PK : Zemgus Girgensons
<b>Extra Defensemen</b>
Normal : Aaron Ekblad, Rasmus Ristolainen, Dougie Hamilton - PP : Aaron Ekblad - PK : Rasmus Ristolainen, Aaron Ekblad
<b>Penalty Shots</b>
Nikolaj Ehlers, Andrei Svechnikov, Dmitrij Jaskin, Ryan Kesler, Zemgus Girgensons
<b>Custom OT Lines Forwards</b>
Nikolaj Ehlers, Andrei Svechnikov, Ryan Kesler, Ahti Oksanen, Zemgus Girgensons, Dmitrij Jaskin, Mikhail Grigorenko, Nicolas Kerdiles, Christian Dvorak, Stefan Matteau
<b>Custom OT Lines Defensemen</b>
Aaron Ekblad, Dougie Hamilton, Rasmus Ristolainen, Josh Morrissey, Ahti Oksanen

<b>Scratches</b>
T.J. Galiardi (Healthy), Will Butcher (Healthy)</pre></div>
<h1 class="TeamLinesPro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikael Granlund          James Neal               Joe Colborne             35     1   2  2  
 2 Michael Dal Colle        Ty Rattie                Pavel Buchnevich         30     0   1  4  
 3 Jacob De La Rose         Kyle Clifford            Emerson Etem             25     0   2  3  
 4 Alexei Mitrofanov        Joe Colborne             Jason Zucker             10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Ellis               Colton Parayko                                    39     0   1  4  
 2 Dion Phaneuf             Mikhail Sergachev                                 33     0   2  3  
 3 Braydon Coburn           Michael Matheson                                  28     0   3  2  
 4 Dion Phaneuf             Braydon Coburn                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Dal Colle        Ty Rattie                James Neal               60     0   0  5  
 2 Mikael Granlund          Joe Colborne             Kyle Clifford            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Braydon Coburn           Ryan Ellis                                        60     1   1  3  
 2 Mikhail Sergachev        Michael Matheson                                  40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 James Neal               Kyle Clifford            60     1   4  0  
 2 Ty Rattie                Mikael Granlund          40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Braydon Coburn           Ryan Ellis               60     1   4  0  
 2 Dion Phaneuf             Mikhail Sergachev        40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Kyle Clifford                                     60     0   5  0  
 2 James Neal                                        40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Braydon Coburn           Dion Phaneuf             60     0   5  0  
 2 Ryan Ellis               Michael Matheson         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ty Rattie                James Neal               60     1   1  3  
 2 Kyle Clifford            Mikael Granlund          40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dion Phaneuf             Braydon Coburn           60     1   1  3  
 2 Michael Matheson         Ryan Ellis               40     1   1  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   James Neal               Kyle Clifford            Mikael Granlund          Dion Phaneuf             Braydon Coburn           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   James Neal               Kyle Clifford            Mikael Granlund          Dion Phaneuf             Braydon Coburn           

<b>Goaltenders</b>
Starting : Braden Holtby            
Backup : Pavel Francouz           

<b>Extra Forwards</b>
Normal : Ty Rattie, James Neal, Kyle Clifford - PP : Ty Rattie, James Neal - PK : James Neal
<b>Extra Defensemen</b>
Normal : Braydon Coburn, Ryan Ellis, Mikhail Sergachev - PP : Dion Phaneuf - PK : Braydon Coburn, Dion Phaneuf
<b>Penalty Shots</b>
Mikael Granlund, James Neal, Kyle Clifford, Ty Rattie, Michael Dal Colle
<b>Custom OT Lines Forwards</b>
Joe Colborne, Michael Dal Colle, James Neal, Kyle Clifford, Mikael Granlund, Ty Rattie, Emerson Etem, Jacob De La Rose, Jason Zucker, Pavel Buchnevich
<b>Custom OT Lines Defensemen</b>
Braydon Coburn, Ryan Ellis, Mikhail Sergachev, Dion Phaneuf, Michael Matheson

<b>Scratches</b>
Manny Malhotra (Healthy), Saku Maenalanen (Healthy)</pre></div>
<h1 class="TeamLinesPro_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL8-PLF-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL8-PLF-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL8-PLF-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL8-PLF-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL8-PLF-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL8-PLF-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL8-PLF-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL8-PLF-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL8-PLF-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL8-PLF-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andrei Loktionov         Colin Smith              Brady Tkachuk            60     0   0  5  
 2 Casey Cizikas            Cole Ully                Ryan Strome              15     0   0  5  
 3 Andre Burakovsky         Nino Niederreiter        Marcus Foligno           15     0   0  5  
 4 Alexander Kerfoot        Adam Brooks              Jonathan Huberdeau       10     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ben Chiarot              Oscar Klefbom                                     25     1   2  2  
 2 Jake Gardiner            Kris Russell                                      25     1   2  2  
 3 Magnus Nygren            Stefan Elliott                                    25     1   2  2  
 4 Jake Gardiner            Oscar Klefbom                                     25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andrei Loktionov         Andre Burakovsky         Brady Tkachuk            60     1   2  2  
 2 Alexander Kerfoot        Cole Ully                Ryan Strome              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Stefan Elliott           Oscar Klefbom                                     60     1   2  2  
 2 Jake Gardiner            Kris Russell                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrei Loktionov         Ryan Strome              60     1   2  2  
 2 Andre Burakovsky         Brady Tkachuk            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Magnus Nygren            Oscar Klefbom            60     1   2  2  
 2 Jake Gardiner            Kris Russell             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Andrei Loktionov                                  60     1   2  2  
 2 Andre Burakovsky                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Stefan Elliott           Oscar Klefbom            60     1   2  2  
 2 Jake Gardiner            Kris Russell             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexander Kerfoot        Andrei Loktionov         60     1   2  2  
 2 Ryan Strome              Brady Tkachuk            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Magnus Nygren            Oscar Klefbom            60     1   2  2  
 2 Jake Gardiner            Kris Russell             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexander Kerfoot        Brady Tkachuk            Colin Smith              Ben Chiarot              Oscar Klefbom            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Strome              Brady Tkachuk            Colin Smith              Ben Chiarot              Oscar Klefbom            

<b>Goaltenders</b>
Starting : Jordan Binnington        
Backup : Kari Lehtonen            

<b>Extra Forwards</b>
Normal : Andrei Loktionov, Casey Cizikas, Cole Ully - PP : Andrei Loktionov, Casey Cizikas - PK : Cole Ully
<b>Extra Defensemen</b>
Normal : Magnus Nygren, Stefan Elliott, Jake Gardiner - PP : Magnus Nygren - PK : Stefan Elliott, Jake Gardiner
<b>Penalty Shots</b>
Jonathan Huberdeau, Nino Niederreiter, Ryan Strome, Marcus Foligno, Andre Burakovsky
<b>Custom OT Lines Forwards</b>
Jonathan Huberdeau, Nino Niederreiter, Ryan Strome, Marcus Foligno, Andre Burakovsky, Casey Cizikas, Cole Ully, Alexander Kerfoot, Andrei Loktionov, Brady Tkachuk
<b>Custom OT Lines Defensemen</b>
Stefan Elliott, Oscar Klefbom, Jake Gardiner, Kris Russell, Magnus Nygren

<b>Scratches</b>
Luca Sbisa (Healthy), Filip Zadina (Healthy), Oliver Wahlstrom (Healthy)</pre></div>
<?php include "Footer.php";?>
