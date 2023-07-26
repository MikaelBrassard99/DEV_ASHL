<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Today Transactions</title>
<script type="text/javascript" src="ASHL7-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.2.2" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL7-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL7-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL7-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 7; /* Show Webpage Top Menu */
include "Menu.php";?>
[2018-07-10 19:57:12] - Maximum Farm Players Limit Reached for Rochester Americans!Maximum Players per Team Limit Reached for Buffalo Sabres!<br />
[2018-07-10 09:50:50] - Maximum Farm Players Limit Reached for Binghamton Senators!Maximum Players per Team Limit Reached for Ottawa Senators!<br />
[2018-07-10 09:50:49] - Maximum Farm Players Limit Reached for Rochester Americans!Maximum Players per Team Limit Reached for Buffalo Sabres!<br />
[2018-07-10 09:50:38] - Laval Chiefs are the Farm Playoffs Champions!<br />
[2018-07-10 09:50:38] - Detroit Red Wings are the Playoffs Champions!<br />
[2018-07-10 09:50:38] - In between playoff round rest day - All players have rest for one day.<br />
[2018-07-10 09:50:38] - Playoff Final Round - All players have rest for one day.<br />
<span style="color:Blue">[2018-07-10 09:50:38] - Dmitri Mikhailov from St-Cyrille Condors is back from Sore Right Knee Injury.</span><br />
<span style="color:Blue">[2018-07-10 09:50:38] - Jake McCabe from Connecticut Whale is back from Fractured Bone in Left Hand Injury.</span><br />
[2018-07-10 09:50:38] - Jamie Doornbosch was cleared from waivers and was sent to down farm.<br />
[2018-07-10 09:50:38] - Andrew Nielsen was cleared from waivers and was sent to down farm.<br />
[2018-07-10 09:50:38] - Stephen Gionta was cleared from waivers and was sent to down farm.<br />
[2018-07-10 09:50:38] - Alexei Marchenko of Detroit Red Wings was sent to farm.<br />
<span style="color:Red">[2018-07-10 09:50:36] - Auto Lines Partial Function has been run for Landshut Cannibals.</span><br />
[2018-07-10 09:50:36] - Landshut Cannibals (Washington Capitals) lines errors : Normal line # 1 RW is empty.
Normal line # 4 LW is empty.
PP line1 LW is empty.
PK line 1 C is empty.
4 vs 4 line 1 C is empty.
PK3 line 1 RW is empty.
LastMinOff line C is empty.
LastMinDef line C is empty.
Extra Forward #1 is empty.
Penalty Shot Player #1 is empty.
Extra Forward #3 is empty.
Penalty Shot Player #3 is empty.
Extra Forward #5 is empty.
Unknown Player is used twice in Extra Forward Normal
Unknown Player is used twice in Extra Penalty Shot
OT Forward #2 is empty.
OT Forward #3 is empty.
Unknown Player is used twice in OT Forward
<br />
<span style="color:Red">[2018-07-10 09:50:36] - Auto Roster Partial Function has been run for Washington Capitals.</span><br />
[2018-07-10 09:50:36] - Landshut Cannibals roster errors : Not enough Players available in Farm Team! 17 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
<span style="color:Red">[2018-07-10 09:50:31] - Auto Lines Function has been run for Grand Rapids Griffins.</span><br />
<span style="color:Red">[2018-07-10 09:50:29] - Successfully loaded Detroit Red Wings lines done with STHS Client - 3.1.2.2</span><br />
[2018-07-10 09:50:28] - Nate Schmidt of Detroit Red Wings was sent down to farm.<br />
[2018-07-10 09:50:28] - Alexei Marchenko of Detroit Red Wings was sent to pro.<br />
<span style="color:Red">[2018-07-10 09:50:17] - Auto Lines Partial Function has been run for Detroit Red Wings.</span><br />
<span style="color:Red">[2018-07-10 09:50:17] - Auto Roster Partial Function has been run for Detroit Red Wings.</span><br />
[2018-07-10 09:50:17] - Nate Schmidt of Detroit Red Wings was sent to pro.<br />
[2018-07-10 09:50:17] - Detroit Red Wings roster errors : Not enough Defenseman available in Pro Team! 5 Dressed. 6 Required.
Not enough Players available in Pro Team! 17 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
<span style="color:Red">[2018-07-10 09:50:14] - Successfully loaded Quebec Nordiques lines done with STHS Client - 3.1.3.0</span><br />
[2018-07-10 09:31:26] - Maximum Players per Team Limit Reached for Ottawa Senators!<br />
<?php include "Footer.php";?>
