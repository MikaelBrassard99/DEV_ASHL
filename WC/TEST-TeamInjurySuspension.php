<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Team Injury Suspension</title>
<script src="TEST.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - TEST-STHS.db - TEST-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"TEST-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"TEST-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleKraken">Seattle Kraken</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#VegasGoldenKnights">Vegas Golden Knights</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamInjurySuspension_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="TEST-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="TEST-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="TEST-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="TEST-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<br />
Steven Stamkos is out for 3 weeks because of a Broken Bone (Left Ankle) Injury.<br />
</div>
<h1 class="TeamInjurySuspension_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="TEST-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="TEST-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="TEST-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="TEST-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="TEST-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="TEST-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="TEST-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="TEST-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="TEST-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="TEST-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="TEST-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="TEST-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="TEST-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="TEST-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="TEST-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="TEST-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<br />
Mathew Barzal is out for 3 weeks because of a Lacerated Left Calf Injury.<br />
</div>
<h1 class="TeamInjurySuspension_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="TEST-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="TEST-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<br />
Josh Anderson is out for 1 days because of a Sore Right Knee Injury.<br />
</div>
<h1 class="TeamInjurySuspension_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="TEST-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="TEST-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<br />
Sam Gagner is out for 3 days because of a Right Ankle Injury.<br />
</div>
<h1 class="TeamInjurySuspension_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="TEST-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="TEST-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<br />
Mario Ferraro is out for 1 week because of a Strained Left Elbow Injury.<br />
</div>
<h1 class="TeamInjurySuspension_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="TEST-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="TEST-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="TEST-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="TEST-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="TEST-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="TEST-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="TEST-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="TEST-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="TEST-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="TEST-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<br />
Will Butcher is out for 0 days because of a Sore Left Knee Injury.<br />
</div>
<h1 class="TeamInjurySuspension_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="TEST-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="TEST-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="TEST-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="TEST-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="TEST-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="TEST-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="TEST-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="TEST-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="TEST-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="TEST-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="TEST-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="TEST-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="TEST-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="TEST-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_SEA"><a id="SeattleKraken">Seattle Kraken</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Kraken Page</a> ]
[ <a href="TEST-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#SeattleKraken">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#SeattleKraken">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#SeattleKraken">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#SeattleKraken">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#SeattleKraken">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#SeattleKraken">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#SeattleKraken">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#SeattleKraken">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#SeattleKraken">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#SeattleKraken">Team History</a> ]
[ <a href="TEST-TeamRecords.php#SeattleKraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleKraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleKraken" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="TEST-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="TEST-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="TEST-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="TEST-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<br />
Esa Lindell is out for 1 days because of a Separated Right Shoulder Injury.<br />
</div>
<h1 class="TeamInjurySuspension_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="TEST-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="TEST-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="TEST-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="TEST-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<br />
Jason Demers is out for 2 weeks because of a Sprained Right Ankle Injury.<br />
</div>
<h1 class="TeamInjurySuspension_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="TEST-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#VegasGoldenKnights">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="TEST-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<br />
Michael Bunting is out for 1 week because of a Sprained Left Finger Injury.<br />
</div>
<h1 class="TeamInjurySuspension_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="TEST-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="TEST-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="TEST-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="TEST-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="TEST-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="TEST-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="TEST-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="TEST-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="TEST-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="TEST-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="TEST-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="TEST-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="TEST-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="TEST-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<br />
No Injury or Suspension.
</div>
<h3 class="STHSTeamInjurySuspension_RecoverySpeed">Pro Injury Recovery Rate is 1.<br />Farm Injury Recovery Rate is 1.</h3>
<?php include "Footer.php";?>
