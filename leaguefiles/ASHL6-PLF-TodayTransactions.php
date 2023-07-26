<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Today Transactions</title>
<script type="text/javascript" src="ASHL6-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.0.9.9" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL6-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL6-STHS.db";
$LangOverwrite = (boolean)FALSE;
$lang = "en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 7; /* Show Webpage Top Menu */
include "Menu.php";?>
[2017-08-20 13:15:46] - Providence Bruins are the Farm Playoffs Champions!<br />
[2017-08-20 13:15:46] - Toronto Maple Leafs are the Playoffs Champions!<br />
[2017-08-20 13:15:46] - In between playoff round rest day - All players have rest for one day.<br />
[2017-08-20 13:15:46] - Playoff Final Round - All players have rest for one day.<br />
<span style="color:Blue">[2017-08-20 13:15:46] - Maxim Chudinov from Providence Bruins is back from Broken Right Thumb Injury.</span><br />
[2017-08-20 13:15:46] - Last 7 Days Farm Star : 1 - Chris Mason of Laval Chiefs (0,925) / 2 - Justin Florek of Providence Bruins (5-4-9) / 3 - Jeff Frazee of Providence Bruins (0,925)<br />
[2017-08-20 13:15:46] - Last 7 Days Pro Star : 1 - Teuvo Teravainen of Calgary Flames (6-7-13) / 2 - Tomas Hertl of Calgary Flames (3-14-17) / 3 - Sergei Kostitsyn of Calgary Flames (7-6-13)<br />
<span style="color:Red">[2017-08-20 13:15:12] - Successfully loaded Anaheim Ducks lines done with STHS Client - 3.0.9.9</span><br />
<span style="color:Red">[2017-08-20 13:04:36] - Successfully loaded Calgary Flames lines done with STHS Client - 3.0.9.9</span><br />
<span style="color:Red">[2017-08-20 13:03:23] - Auto Lines Partial Function has been run for Providence Bruins.</span><br />
<?php include "Footer.php";?>
