<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Schedule</title>
<script src="IHWC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="IHWC.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"IHWC-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"IHWC-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 1</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_ProLink">
<a href="IHWC-1.html">TEAM WORLD (3) vs SUISSE (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_ProLink">
<a href="IHWC-2.html">SLOVAQUIE (2) vs CANADA (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_ProLink">
<a href="IHWC-3.html">LETTONIE (0) vs FINLANDE (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_ProLink">
<a href="IHWC-4.html">SUEDE (6) vs REPUBLIQUE TCHEQUE (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_ProLink">
<a href="IHWC-5.html">U23 NORTH AMERICA (3) vs ALLEMAGNE (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_ProLink">
<a href="IHWC-6.html">ETATS-UNIS (5) vs RUSSIE (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 2</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_ProLink">
<a href="IHWC-7.html">LETTONIE (3) vs RUSSIE (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_ProLink">
<a href="IHWC-8.html">TEAM WORLD (5) vs ETATS-UNIS (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_ProLink">
<a href="IHWC-9.html">U23 NORTH AMERICA (3) vs SUEDE (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_ProLink">
<a href="IHWC-10.html">REPUBLIQUE TCHEQUE (3) vs ALLEMAGNE (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_ProLink">
<a href="IHWC-11.html">FINLANDE (4) vs SUISSE (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 3</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_ProLink">
<a href="IHWC-12.html">LETTONIE (2) vs TEAM WORLD (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_ProLink">
<a href="IHWC-13.html">SLOVAQUIE (3) vs ALLEMAGNE (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_ProLink">
<a href="IHWC-14.html">REPUBLIQUE TCHEQUE (4) vs U23 NORTH AMERICA (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_ProLink">
<a href="IHWC-15.html">ETATS-UNIS (2) vs SUISSE (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_ProLink">
<a href="IHWC-16.html">SUEDE (2) vs CANADA (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_ProLink">
<a href="IHWC-17.html">TEAM WORLD (5) vs RUSSIE (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 5</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_ProLink">
<a href="IHWC-18.html">CANADA (3) vs REPUBLIQUE TCHEQUE (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_ProLink">
<a href="IHWC-19.html">ALLEMAGNE (4) vs SUEDE (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_ProLink">
<a href="IHWC-20.html">FINLANDE (4) vs ETATS-UNIS (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_ProLink">
<a href="IHWC-21.html">SUISSE (6) vs LETTONIE (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_ProLink">
<a href="IHWC-22.html">U23 NORTH AMERICA (6) vs SLOVAQUIE (5)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 6</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_ProLink">
<a href="IHWC-23.html">CANADA (5) vs U23 NORTH AMERICA (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_ProLink">
<a href="IHWC-24.html">TEAM WORLD (1) vs FINLANDE (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_ProLink">
<a href="IHWC-25.html">RUSSIE (5) vs SUISSE (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_ProLink">
<a href="IHWC-26.html">LETTONIE (1) vs ETATS-UNIS (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_ProLink">
<a href="IHWC-27.html">REPUBLIQUE TCHEQUE (6) vs SLOVAQUIE (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><a id="Last_Simulate_Day"></a><b>Day 7</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_ProLink">
<a href="IHWC-28.html">SLOVAQUIE (3) vs SUEDE (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_ProLink">
<a href="IHWC-29.html">CANADA (7) vs ALLEMAGNE (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_ProLink">
<a href="IHWC-30.html">FINLANDE (5) vs RUSSIE (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
</table>
<?php include "Footer.php";?>
