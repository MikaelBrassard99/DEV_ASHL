<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Today Transactions</title>
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
[2020-04-01 08:01:33] - New Record for Goalie (James Reimer) Most Shots Received (2386) in 1 Year!<br />
[2020-04-01 08:01:33] - New Record for Player (Adam Erne) Most Hits (287) in 1 Year!<br />
[2020-04-01 08:01:33] - New Record for Player (Jeff Skinner) Most Shots (400) in 1 Year!<br />
[2020-04-01 08:01:33] - Rest Day - All players have rest for one day.<br />
<span style="color:Blue">[2020-04-01 08:01:32] - Brady Skjei from St. Louis Blues is back from Sprained Right Finger Injury.</span><br />
<span style="color:Blue">[2020-04-01 08:01:32] - Oliver Kylington from Landshut Cannibals is back from Bruised Right Arm Injury.</span><br />
<span style="color:Blue">[2020-04-01 06:54:18] - Tyler Wotherspoon from Calgary Flames is back from Right Ankle Injury.</span><br />
<span style="color:Blue">[2020-04-01 06:54:18] - Game 1320 - Gabriel Gagné from Chicoutimi Saguenéens is injured  (Strained Left Knee) and is out for 1 week.</span><br />
<span style="color:Red">[2020-04-01 06:54:13] - Auto Lines Function has been run for Joliette Sportif.</span><br />
<span style="color:Red">[2020-04-01 06:54:07] - Auto Lines Partial Function has been run for Paradise Dark Angels.</span><br />
[2020-04-01 06:54:07] - Paradise Dark Angels (Vegas Golden Knights) lines errors : Normal line # 2 Defense #2 is empty.
PP line 1 Defense #1 is empty.
4 vs 4 line 1 Defense #1 is empty.
LastMinOff line Defense is empty.
Extra Defense #3 is empty.
OT Defense #3 is empty.
<br />
[2020-04-01 06:54:07] - Joliette Sportif (Calgary Flames) lines errors : Normal line # 3 Defense #3 is empty.
<br />
[2020-04-01 06:54:06] - Joliette Sportif (Calgary Flames) lines errors : Normal line # 3 RW is empty.
Normal line # 3 Defense #3 is empty.
Unknown Player is used twice in Normal line #3
Extra Forward #2 is empty.
Extra Defense #2 is empty.
Extra Forward #5 is empty.
Extra Defense #5 is empty.
OT Forward #6 is empty.
<br />
<span style="color:Red">[2020-04-01 06:54:06] - Auto Roster Partial Function has been run for Calgary Flames.</span><br />
[2020-04-01 06:54:06] - Joliette Sportif roster errors : Not enough Players available in Farm Team! 17 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
<span style="color:Blue">[2020-04-01 06:53:52] - Justin Kirkland from Roberval Dwarfs is back from Bruised Left Arm Injury.</span><br />
<span style="color:Blue">[2020-04-01 06:53:52] - Justin Schultz from Vegas Golden Knights is back from Right Wrist Injury.</span><br />
<span style="color:Blue">[2020-04-01 06:53:52] - Mike Winther from Adirondack Phantoms is back from Sprained Left Knee Injury.</span><br />
<span style="color:Blue">[2020-04-01 06:53:52] - Rodrigo Abols from Portland Pirates is back from Bruised Left Leg Injury.</span><br />
<span style="color:Blue">[2020-04-01 06:53:52] - Game 1319 - Lukas Bengtsson from Paradise Dark Angels is injured  (Bruised Right Shoulder) and is out for 2 weeks.</span><br />
<span style="color:Blue">[2020-04-01 06:53:52] - Game 1316 - Danny Kristo from Joliette Sportif is injured  (Right Foot) and is out for 1 week.</span><br />
<span style="color:Red">[2020-04-01 06:53:51] - Auto Lines Partial Function has been run for Adirondack Phantoms.</span><br />
[2020-04-01 06:53:51] - Adirondack Phantoms (Philadelphia Flyers) lines errors : Normal line # 3 Defense #3 is empty.
Extra Defense #2 is empty.
Extra Defense #5 is empty.
OT Defense #5 is empty.
<br />
<span style="color:Red">[2020-04-01 06:53:47] - Auto Lines Partial Function has been run for Roberval Dwarfs.</span><br />
[2020-04-01 06:53:47] - Roberval Dwarfs (Toronto Maple Leafs) lines errors : Normal line # 1 RW is empty.
Normal line # 4 LW is empty.
OT Forward #2 is empty.
<br />
<span style="color:Red">[2020-04-01 06:53:43] - 1 000 000 $ was added to Washington Capitals bank account.</span><br />
[2020-04-01 06:53:37] - Current fund for Washington Capitals is under 0 $.<br />
[2020-04-01 06:53:28] - Current fund for Washington Capitals is under 0 $.<br />
[2020-04-01 06:53:23] - Last 7 Days Farm Star : 1 - Jack Hillen of Milwaukee Admirals (3-4-7) / 2 - Jakub Kovar of Adirondack Phantoms (0,944) / 3 - Samuel Blais of Springfield Falcons (3-2-5)<br />
[2020-04-01 06:53:23] - Last 7 Days Pro Star : 1 - Sean Couturier of Dallas Stars (4-1-5) / 2 - Patrice Bergeron of Vegas Golden Knights (4-4-8) / 3 - Jack Eichel of New Jersey Devils (2-3-5)<br />
<span style="color:Blue">[2020-04-01 06:53:23] - Game 1308 - Teemu Eronen from Adirondack Phantoms is injured  (Sprained Right Ankle) and is out for 1 week.</span><br />
<span style="color:Blue">[2020-04-01 06:53:23] - Game 1306 - Justin Kirkland from Roberval Dwarfs is injured  (Bruised Left Arm) and is out for 1 week.</span><br />
[2020-04-01 06:53:22] - Stephen Silas from Lake Erie Monsters has scored a Hat Trick!<br />
<span style="color:Red">[2020-04-01 06:53:16] - Auto Lines Function has been run for Rochester Americans.</span><br />
<span style="color:Red">[2020-04-01 06:53:05] - Auto Lines Partial Function has been run for Houston Aeros.</span><br />
[2020-04-01 06:53:05] - Houston Aeros (Minnesota Wild) lines errors : Normal line # 2 Defense #2 is empty.
PP line 2 Defense #2 is empty.
PK line 2 Defense #2 is empty.
4 vs 4 line 2 Defense #2 is empty.
PK3 line 2 Defense #2 is empty.
OT Defense #4 is empty.
<br />
<span style="color:Red">[2020-04-01 06:53:05] - Auto Lines Partial Function has been run for Minnesota Wild.</span><br />
[2020-04-01 06:53:05] - Minnesota Wild lines errors : Normal line # 2 LW is empty.
Normal line # 3 Defense #3 is empty.
Normal line # 4 RW is empty.
Unknown Player is used twice in normal lines 2 and 3.
PP line 1 RW is empty.
PK line 2 LW is empty.
PK line 2 Defense #2 is empty.
4 vs 4 line 2 LW is empty.
PK3 line 2 Defense #2 is empty.
Unknown Player is used twice in PK line#2
LastMinOff line RW is empty.
Extra Forward #1 is empty.
Penalty Shot Player #3 is empty.
Extra Forward #4 is empty.
OT Forward #4 is empty.
OT Defense #5 is empty.
<br />
<span style="color:Red">[2020-04-01 06:53:05] - Auto Roster Partial Function has been run for Minnesota Wild.</span><br />
[2020-04-01 06:53:05] - Houston Aeros roster errors : Not enough Players available in Farm Team! 17 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
<span style="color:Red">[2020-04-01 06:53:05] - Auto Lines Partial Function has been run for Oklahoma City Barons.</span><br />
[2020-04-01 06:53:05] - Oklahoma City Barons (Edmonton Oilers) lines errors : Normal line # 3 C is empty.
4 vs 4 line 1 C is empty.
PK3 line 1 RW is empty.
PP line2 RW is empty.
PK line 2 C is empty.
LastMinDef line C is empty.
Extra Forward #3 is empty.
Penalty Shot Player #3 is empty.
OT Forward #3 is empty.
<br />
<span style="color:Red">[2020-04-01 06:53:05] - Auto Lines Partial Function has been run for Edmonton Oilers.</span><br />
[2020-04-01 06:53:05] - Edmonton Oilers lines errors : Normal line # 2 RW is empty.
Extra Forward #0 is empty.
Extra Forward #4 is empty.
Penalty Shot Player #5 is empty.
OT Forward #8 is empty.
<br />
<span style="color:Red">[2020-04-01 06:53:05] - Auto Roster Partial Function has been run for Edmonton Oilers.</span><br />
[2020-04-01 06:53:05] - Edmonton Oilers roster errors : Not enough Players available in Pro Team! 17 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-01 06:53:05] - Rochester Americans (Buffalo Sabres) lines errors : Normal line # 2 Defense #2 is empty.
<br />
[2020-04-01 06:53:04] - Rochester Americans (Buffalo Sabres) lines errors : Normal line # 2 Defense #2 is empty.
PP line 2 Defense #2 is empty.
PK line 2 Defense #2 is empty.
4 vs 4 line 2 Defense #2 is empty.
PK3 line 2 Defense #2 is empty.
OT Defense #4 is empty.
<br />
<span style="color:Red">[2020-04-01 06:53:04] - Auto Lines Partial Function has been run for Pittsburgh Penguins.</span><br />
[2020-04-01 06:53:04] - Pittsburgh Penguins lines errors : Normal line # 4 LW is empty.
<br />
<span style="color:Red">[2020-04-01 06:53:04] - Auto Lines Partial Function has been run for New Jersey Devils.</span><br />
[2020-04-01 06:53:04] - New Jersey Devils lines errors : Normal line # 2 C is empty.
PK line 1 C is empty.
PK3 line 1 forward is empty.
PP line 2 C is empty.
LastMinDef line C is empty.
Extra Forward #0 is empty.
Extra Forward #3 is empty.
Penalty Shot Player #3 is empty.
OT Forward #6 is empty.
Backup Goalie is empty.
<br />
<span style="color:Red">[2020-04-01 06:53:04] - Auto Roster Partial Function has been run for New Jersey Devils.</span><br />
[2020-04-01 06:53:04] - New Jersey Devils roster errors : Not enough Players available in Pro Team! 17 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
<span style="color:Red">[2020-04-01 06:52:59] - Auto Lines Partial Function has been run for Wilkes-Barre/Scranton Penguins.</span><br />
[2020-04-01 06:52:59] - Wilkes-Barre/Scranton Penguins (Pittsburgh Penguins) lines errors : Normal line # 2 RW is empty.
Normal line # 4 LW is empty.
Normal line # 4 RW is empty.
Unknown Player is used twice in Normal line #4
PP line 1 Defense #1 is empty.
PK line 1 LW is empty.
PP line 2 Defense #2 is empty.
PK line 2 LW is empty.
Unknown Player is used twice in PP lines 1 and 2.
Unknown Player is used twice in PK lines 1 and 2.
Penalty Shot Player #3 is empty.
OT Forward #1 is empty.
OT Forward #7 is empty.
Unknown Player is used twice in OT Forward
<br />
[2020-04-01 06:52:57] - Vinny Saponari of Pittsburgh Penguins was sent to pro.<br />
[2020-04-01 06:52:54] - Wilkes-Barre/Scranton Penguins roster errors : Maximum Players Limit Reached in Farm Team!
Some errors will be automatically fixed.
<br />
[2020-04-01 06:52:53] - Maximum Farm Players Limit Reached for Wilkes-Barre/Scranton Penguins!<br />
[2020-04-01 06:52:48] - Wilkes-Barre/Scranton Penguins roster errors : Maximum Players Limit Reached in Farm Team!
Some errors will be automatically fixed.
<br />
<span style="color:Red">[2020-04-01 06:52:48] - Auto Roster Partial Function has been run for Pittsburgh Penguins.</span><br />
<span style="color:Red">[2020-04-01 06:52:48] - Auto Roster Farm Only Function has been run for Pittsburgh Penguins.</span><br />
[2020-04-01 06:52:48] - Wilkes-Barre/Scranton Penguins roster errors : Maximum Players Limit Reached in Farm Team!
Some errors will be automatically fixed.
<br />
<span style="color:Red">[2020-04-01 06:39:48] - Auto Lines Partial Function has been run for Landshut Cannibals.</span><br />
<span style="color:Red">[2020-04-01 06:39:48] - Auto Roster Farm Only Function has been run for Washington Capitals.</span><br />
[2020-04-01 06:39:48] - Landshut Cannibals roster errors : Not enough Players available in Farm Team! 17 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-01 06:39:48] - Wilkes-Barre/Scranton Penguins roster errors : Maximum Players Limit Reached in Farm Team!
Some errors will be automatically fixed.
<br />
<span style="color:Red">[2020-04-01 06:39:48] - Auto Roster Partial Function has been run for Pittsburgh Penguins.</span><br />
<span style="color:Red">[2020-04-01 06:39:48] - Auto Roster Farm Only Function has been run for Pittsburgh Penguins.</span><br />
[2020-04-01 06:39:48] - Wilkes-Barre/Scranton Penguins roster errors : Maximum Players Limit Reached in Farm Team!
Some errors will be automatically fixed.
<br />
[2020-04-01 06:39:28] - Current fund for Washington Capitals is under 0 $.<br />
[2020-04-01 06:39:27] - Maximum Farm Players Limit Reached for Wilkes-Barre/Scranton Penguins!<br />
<?php include "Footer.php";?>
