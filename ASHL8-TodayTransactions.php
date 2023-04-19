<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Today Transactions</title>
<script src="ASHL8.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL8.css" rel="stylesheet" type="text/css" />
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
[2019-04-15 08:41:51] - Maximum Farm Players Limit Reached for Wilkes-Barre/Scranton Penguins!<br />
[2019-04-15 08:41:37] - New Record for Player (Luca Sbisa) Most Hits (268) in 1 Year!<br />
[2019-04-15 08:41:37] - New Record for Player (David Backes) Most Hits (225) in 1 Year!<br />
[2019-04-15 08:41:37] - Rest Day - All players have rest for one day.<br />
<span style="color:Blue">[2019-04-15 08:41:35] - Jake DeBrusk from Connecticut Whale is back from Broken Ribs Injury.</span><br />
<span style="color:Blue">[2019-04-15 08:41:35] - Stuart Percy from Milwaukee Admirals is back from Right Ankle Injury.</span><br />
<span style="color:Blue">[2019-04-15 08:41:35] - Jonas Siegenthaler from Trois-Rivières Draveurs is back from Right Forearm Injury.</span><br />
<span style="color:Blue">[2019-04-15 08:41:35] - Philippe Myers from Rouyn-Noranda Huskies is back from Sore Left Knee Injury.</span><br />
[2019-04-15 08:41:26] - Maximum Players per Team Limit Reached for Nashville Predators!<br />
[2019-04-15 08:41:25] - Maximum Farm Players Limit Reached for Wilkes-Barre/Scranton Penguins!<br />
<span style="color:Blue">[2019-04-15 08:41:19] - Brandon Burlon from Norfolk Admirals is back from Sore Right Knee Injury.</span><br />
<span style="color:Blue">[2019-04-15 08:41:19] - Joe Finley from Roberval Dwarfs is back from Head Injury.</span><br />
<span style="color:Blue">[2019-04-15 08:41:19] - Sam Gagner from Edmonton Oilers is back from Bruised Left Foot Injury.</span><br />
<span style="color:Blue">[2019-04-15 08:41:19] - Jarret Stoll from St. Louis Blues is back from Bruised Right Shoulder Injury.</span><br />
[2019-04-15 08:41:19] - Sondre Olden was cleared from waivers and was sent to down farm.<br />
[2019-04-15 08:41:19] - Francis Verreault-Paul was cleared from waivers and was sent to down farm.<br />
[2019-04-15 08:41:19] - Brian Gionta was cleared from waivers and was sent to down farm.<br />
<span style="color:Red">[2019-04-15 08:41:18] - Auto Lines Partial Function has been run for Peoria Rivermen.</span><br />
[2019-04-15 08:41:18] - Peoria Rivermen (St. Louis Blues) lines errors : Normal line # 4 C is empty.
PK line 1 C is empty.
Extra Forward #4 is empty.
OT Forward #1 is empty.
<br />
<span style="color:Red">[2019-04-15 08:41:18] - Auto Lines Partial Function has been run for St. Louis Blues.</span><br />
[2019-04-15 08:41:18] - St. Louis Blues lines errors : Normal line # 4 RW is empty.
PK line 2 C is empty.
<br />
[2019-04-15 08:41:14] - Alex Dostie of St. Louis Blues was sent to pro.<br />
[2019-04-15 08:40:56] - St. Louis Blues roster errors : Not enough Players available in Pro Team! 17 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2019-04-15 08:40:50] - St. Louis Blues roster errors : Not enough Players available in Pro Team! 17 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
<span style="color:Red">[2019-04-15 08:40:50] - Auto Roster Partial Function has been run for St. Louis Blues.</span><br />
[2019-04-15 08:40:50] - St. Louis Blues roster errors : Not enough Players available in Pro Team! 17 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
<span style="color:Red">[2019-04-15 08:40:50] - Auto Lines Partial Function has been run for Buffalo Sabres.</span><br />
[2019-04-15 08:40:50] - Buffalo Sabres lines errors : Normal line # 1 Defense #1 is empty.
PK line 1 Defense #1 is empty.
4 vs 4 line 1 Defense #1 is empty.
PP line 2 Defense #2 is empty.
LastMinDef line Defense #3 is empty.
LastMinOff line Defense #3 is empty.
OT Defense #4 is empty.
<br />
<span style="color:Red">[2019-04-15 08:40:50] - Auto Roster Partial Function has been run for Buffalo Sabres.</span><br />
[2019-04-15 08:40:50] - Buffalo Sabres roster errors : Not enough Players available in Pro Team! 17 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2019-04-15 08:40:46] - Current fund for Boston Bruins is under 0 $.<br />
<span style="color:Red">[2019-04-15 08:40:45] - Successfully loaded Boston Bruins lines done with STHS Client - 3.1.6.6</span><br />
[2019-04-15 08:40:45] - Frank Vatrano of Boston Bruins was sent down to farm.<br />
[2019-04-15 08:40:42] - Current fund for Boston Bruins is under 0 $.<br />
[2019-04-15 08:03:33] - Maximum Players per Team Limit Reached for Nashville Predators!<br />
[2019-04-15 08:03:32] - Current fund for Boston Bruins is under 0 $.<br />
<?php include "Footer.php";?>
