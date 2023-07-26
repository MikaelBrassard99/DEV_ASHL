<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Today Transactions</title>
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
[2019-05-16 07:20:12] - Maximum Farm Players Limit Reached for Milwaukee Admirals!Maximum Players per Team Limit Reached for Nashville Predators!<br />
[2019-05-16 07:19:59] - Maximum Farm Players Limit Reached for Milwaukee Admirals!Maximum Players per Team Limit Reached for Nashville Predators!<br />
[2019-05-16 07:19:46] - Wilkes-Barre/Scranton Penguins are the Farm Playoffs Champions!<br />
[2019-05-16 07:19:46] - Los Angeles Kings are the Playoffs Champions!<br />
[2019-05-16 07:19:46] - In between playoff round rest day - All players have rest for one day.<br />
[2019-05-16 07:19:46] - Playoff Final Round - All players have rest for one day.<br />
[2019-05-16 07:19:46] - Ales Kranjc was cleared from waivers and was sent to down farm.<br />
[2019-05-16 07:19:46] - Last 7 Days Farm Star : 1 - Brandon Prust of Wilkes-Barre/Scranton Penguins (3-3-6) / 2 - Brian Dumoulin of Wilkes-Barre/Scranton Penguins (2-4-6) / 3 - Milan Michalek of Wilkes-Barre/Scranton Penguins (3-2-5)<br />
[2019-05-16 07:19:46] - Last 7 Days Pro Star : 1 - Cam Ward of Pittsburgh Penguins (0,916) / 2 - Paul Stastny of Pittsburgh Penguins (3-5-8) / 3 - Anze Kopitar of Los Angeles Kings (3-3-6)<br />
<span style="color:Blue">[2019-05-16 07:19:46] - Game 105 - Ben Hutton from Los Angeles Kings is injured  (Bruised Right Shoulder) and is out for 1 week.</span><br />
<span style="color:Red">[2019-05-16 07:09:04] - Successfully loaded Los Angeles Kings lines done with STHS Client - 3.1.4.4</span><br />
<span style="color:Red">[2019-05-16 06:59:34] - Auto Lines Function has been run for Wilkes-Barre/Scranton Penguins.</span><br />
<span style="color:Red">[2019-05-16 06:59:31] - Successfully loaded Pittsburgh Penguins lines done with STHS Client - 3.1.8.8</span><br />
[2019-05-16 06:59:30] - Ryan Shannon of Pittsburgh Penguins was sent to pro.<br />
<span style="color:Red">[2019-05-16 06:59:13] - 7 250 000 $ was added to Winnipeg Jets bank account.</span><br />
<span style="color:Red">[2019-05-16 06:59:03] - 7 000 000 $ was added to Washington Capitals bank account.</span><br />
<span style="color:Red">[2019-05-16 06:58:14] - 10 000 000 $ was added to Vancouver Canucks bank account.</span><br />
<span style="color:Red">[2019-05-16 06:57:58] - 5 750 000 $ was added to Toronto Maple Leafs bank account.</span><br />
<span style="color:Red">[2019-05-16 06:56:49] - 10 750 000 $ was added to Tampa Bay Lightning bank account.</span><br />
<span style="color:Red">[2019-05-16 06:56:29] - 12 500 000 $ was added to St. Louis Blues bank account.</span><br />
<span style="color:Red">[2019-05-16 06:56:12] - 12 500 000 $ was added to Seattle Saints bank account.</span><br />
<span style="color:Red">[2019-05-16 06:55:59] - 12 500 000 $ was added to San Jose Sharks bank account.</span><br />
<span style="color:Red">[2019-05-16 06:54:02] - 6 500 000 $ was added to Quebec Nordiques bank account.</span><br />
<span style="color:Red">[2019-05-16 06:53:38] - 11 250 000 $ was added to Philadelphia Flyers bank account.</span><br />
<span style="color:Red">[2019-05-16 06:53:13] - 9 750 000 $ was added to Ottawa Senators bank account.</span><br />
<span style="color:Red">[2019-05-16 06:52:26] - 4 000 000 $ was added to New York Rangers bank account.</span><br />
<span style="color:Red">[2019-05-16 06:52:18] - 4 000 000 $ was added to New York Islanders bank account.</span><br />
<span style="color:Red">[2019-05-16 06:51:29] - 9 250 000 $ was added to New Jersey Devils bank account.</span><br />
<span style="color:Red">[2019-05-16 06:51:10] - 6 750 000 $ was added to Nashville Predators bank account.</span><br />
[2019-05-16 06:51:06] - Maximum Players per Team Limit Reached for Nashville Predators!<br />
<span style="color:Red">[2019-05-16 06:49:55] - 9 000 000 $ was added to Minnesota Wild bank account.</span><br />
<span style="color:Red">[2019-05-16 06:49:18] - 8 500 000 $ was added to Los Angeles Kings bank account.</span><br />
<span style="color:Red">[2019-05-16 06:46:32] - 11 250 000 $ was added to Florida Panthers bank account.</span><br />
<span style="color:Red">[2019-05-16 06:45:51] - 6 000 000 $ was added to Edmonton Oilers bank account.</span><br />
<span style="color:Red">[2019-05-16 06:45:13] - 5 750 000 $ was added to Detroit Red Wings bank account.</span><br />
<span style="color:Red">[2019-05-16 06:44:57] - 4 250 000 $ was added to Dallas Stars bank account.</span><br />
<span style="color:Red">[2019-05-16 06:43:51] - 3 500 000 $ was added to Columbus Blue Jackets bank account.</span><br />
<span style="color:Red">[2019-05-16 06:43:32] - 12 500 000 $ was added to Colorado Avalanche bank account.</span><br />
<span style="color:Red">[2019-05-16 06:43:20] - 12 500 000 $ was added to Chicago Blackhawks bank account.</span><br />
<span style="color:Red">[2019-05-16 06:42:48] - 8 000 000 $ was added to Carolina Hurricanes bank account.</span><br />
<span style="color:Red">[2019-05-16 06:42:29] - 11 000 000 $ was added to Calgary Flames bank account.</span><br />
<span style="color:Red">[2019-05-16 06:40:36] - 5 500 000 $ was added to Buffalo Sabres bank account.</span><br />
<span style="color:Red">[2019-05-16 06:40:19] - 7 750 000 $ was added to Boston Bruins bank account.</span><br />
<span style="color:Red">[2019-05-16 06:40:00] - 12 500 000 $ was added to Arizona Coyotes bank account.</span><br />
<span style="color:Red">[2019-05-16 06:39:17] - 6 500 000 $ was added to Anaheim Ducks bank account.</span><br />
<span style="color:Red">[2019-05-16 06:38:49] - 12 500 000 $ was added to Montreal Canadiens bank account.</span><br />
<?php include "Footer.php";?>
