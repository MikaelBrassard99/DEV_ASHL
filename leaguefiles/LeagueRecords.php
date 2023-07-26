<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - League Records</title>
<script src="WC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - WC-STHS.bin - WC-STHSCareerStat.bin"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<h1 class="STHSLeagueRecord_TeamRecords">Team Records</h1>
<table class="STHSRecordTable">
</table>
<h1 class="STHSLeagueRecord_PlayersRecords">Players Records</h1>
<table class="STHSRecordPlayerGoalerTable">
</table>
<h1 class="STHSLeagueRecord_GoaliesRecords">Goalies Records</h1>
<table class="STHSRecordTable">
</table>
<h1 class="STHSLeagueRecord_GameRecords">Game Records</h1>
<table class="STHSRecordPlayerGoalerTable">
</table>
<?php include "Footer.php";?>
