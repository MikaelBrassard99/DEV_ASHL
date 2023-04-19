<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Today Games</title>
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
<h3 class="STHSTodayGame_Today3Star">Today 3 Star : <br />Pro : 1 - Brad Marchand (Boston Bruins) / 2 - Matthew Peca (Quebec Nordiques) / 3 - Connor McDavid (Vancouver Canucks)</h3>
<table class="STHSTodayGame_MainTable">
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1343</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL101-1343.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Arizona Coyotes</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Braden Holtby (ARZ), 10 saves from 14 shots - (0,714), L, 35-24-6, 26:25 minutes<br />Petr Mrazek (ARZ), 9 saves from 9 shots - (1,000), 33:35 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Boston Bruins</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Brad Marchand(30,31,32), Rickard Rakell(13)<br /><br />
Igor Shestyorkin (BOS), 25 saves from 25 shots - (1,000), W, 37-21-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1344 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL101-1344.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Columbus Blue Jackets</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Ilya Mikheyev(18,19), Christian Dvorak(16), Jason Dickinson(14,15), Nathan MacKinnon(38), Remi Elie(9)<br /><br />
Henrik Lundqvist (CLB), 34 saves from 40 shots - (0,850), W, 25-15-4, 60:31 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Colorado Avalanche</h3></td><td class="STHSTodayGame_TeamScore"><h3>6</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Magnus Paajarvi(18,19), Vyacheslav Voynov(20), Sean Monahan(36), Joachim Nermark(19), Robby Fabbri(30)<br /><br />
Martin Jones (COL), 16 saves from 20 shots - (0,800), OTL, 25-16-5, 49:17 minutes<br />Andrew Hammond (COL), 2 saves from 5 shots - (0,400), 10:24 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1345</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL101-1345.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Los Angeles Kings</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Corey Perry(19), Tyler Bozak(13)<br /><br />
Michal Neuvirth (LOS), 11 saves from 13 shots - (0,846), 33:24 minutes<br />Adin Hill (LOS), 15 saves from 18 shots - (0,833), L, 1-1-0, 26:36 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Minnesota Wild</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">John Moore(2), Sven Andrighetto(24), Ondrej Palat(7), JC Lipon(18), Kevin Labanc(25)<br /><br />
Thatcher Demko (MIN), 25 saves from 27 shots - (0,926), W, 31-24-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1346</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL101-1346.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Nashville Predators</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Ty Rattie(25,26), Sam Reinhart(32)<br /><br />
Tristan Jarry (NSH), 30 saves from 32 shots - (0,938), W, 7-5-2, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>New Jersey Devils</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Patrice Bergeron(28), William Nylander(19)<br /><br />
Scott Wedgewood (NJD), 26 saves from 29 shots - (0,897), L, 0-2-0, 59:02 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1347</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL101-1347.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Toronto Maple Leafs</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Adam Henrique(19), Zack Kassian(13)<br /><br />
Steve Mason (TOR), 40 saves from 44 shots - (0,909), L, 36-28-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Vancouver Canucks</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Nikolaj Ehlers(26), Connor McDavid(40,41), Filip Zadina(6)<br /><br />
Vitek Vanecek (VAN), 23 saves from 25 shots - (0,920), W, 17-16-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1348</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL101-1348.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Edmonton Oilers</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Taylor Hall(36), Tobias Rieder(29,30), Cody Ceci(9)<br /><br />
Marc-Andre Fleury (EDM), 28 saves from 31 shots - (0,903), W, 30-28-6, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Detroit Red Wings</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Jaccob Slavin(13), Jaden Schwartz(31,32)<br /><br />
Timur Bilyalov (DET), 24 saves from 28 shots - (0,857), L, 5-7-2, 59:07 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1349 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL101-1349.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Seattle Kraken</h3></td><td class="STHSTodayGame_TeamScore"><h3>4</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Max Pacioretty(23), Zac Dalpe(3), Greg McKegg(14), Michael Raffl(1)<br /><br />
Jonathan Bernier (SEA), 37 saves from 41 shots - (0,902), OTL, 4-6-1, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>St. Louis Blues</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Nazem Kadri(29), Mark Stone(22), Jamie Oleksiak(5), John Klingberg(18)<br /><br />
Ivan Nalimov (STL), 28 saves from 32 shots - (0,875), W, 19-16-1, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1350</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL101-1350.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>New York Rangers</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Ivan Provorov(5)<br /><br />
Jack Campbell (NYR), 37 saves from 39 shots - (0,949), L, 23-24-9, 58:58 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Ottawa Senators</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Jamie McBain(7), Ryan Dzingel(20)<br /><br />
Robin Lehner (OTT), 28 saves from 29 shots - (0,966), W, 38-23-7, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1351 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL101-1351.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Washington Capitals</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alex DeBrincat(26,27), Quinton Howden(9), Mike Hoffman(11)<br /><br />
Simeon Varlamov (WSH), 20 saves from 23 shots - (0,870), W, 33-34-4, 60:32 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Winnipeg Jets</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alexander Burmistrov(22), Brent Burns(18), Gabriel Landeskog(27)<br /><br />
Carey Price (WPG), 20 saves from 24 shots - (0,833), OTL, 40-21-5, 60:32 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1352</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL101-1352.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Quebec Nordiques</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Brett MacLean(1), Matthew Peca(15,16,17), Alex Tuch(16)<br /><br />
Kari Lehtonen (QUE), 20 saves from 24 shots - (0,833), W, 8-5-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Pittsburgh Penguins</h3></td><td class="STHSTodayGame_TeamScore"><h3>4</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Kyle Turris(15), Mike Green(10), Andre Burakovsky(29), Victor Olofsson(12)<br /><br />
Keith Kinkaid (PIT), 32 saves from 37 shots - (0,865), L, 22-17-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1353 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL101-1353.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Calgary Flames</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Ryan MacInnis(8,9), Travis Hamonic(9), Anthony Duclair(25,26)<br /><br />
Jonathan Quick (CGY), 38 saves from 42 shots - (0,905), W, 39-26-9, 64:06 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Carolina Hurricanes</h3></td><td class="STHSTodayGame_TeamScore"><h3>4</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Keaton Ellerby(8), Andrew Shaw(8), Jordan Weal(4), Evgeny Kuznetsov(25)<br /><br />
Calvin Pickard (CAR), 35 saves from 40 shots - (0,875), OTL, 11-12-4, 64:06 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td></td></tr></table>
<h1 class="STHSTomorrowGame_TomorrowGame">Tomorrow's Games</h1>
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleSchedule"><b>Schedule</b></td>
</tr>
<tr><td colspan="2" class="STHSTomorrowGame_GameDay"><b>Day 194</b></td></tr>
<tr><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
