﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Waivers</title>
<script src="WC-PLF.js"></script>
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
<table class="STHSWaiver_Table"><thead><tr><th>
<b>Player</b></th><th>
<b>From Team</b></th><th>
<b>Picked by</b></th><th>
<b>Day Put on Waivers</b></th><th>
<b>Day Removed from Waivers</b></th></tr></thead><tbody>
<tr><td colspan="5" style="text-align:center;"><br /><h2 class="STHSWaivers_NoPlayerOnWaiver">No Player on Waivers</h2></td></tr>
</tbody></table>
<br />
<h1 class="STHSWaivers_WaiverOrder">Waiver Order</h1>
1 - DANEMARK<br />
2 - WORLD<br />
3 - SLOVAQUIE<br />
4 - LETTONIE<br />
5 - ALLEMAGNE<br />
6 - SUISSE<br />
7 - FINLANDE<br />
8 - SUÈDE<br />
9 - TCHÉQUIE<br />
10 - RUSSIE<br />
11 - USA<br />
12 - CANADA<br />
14 - FINLANDE<br />
<?php include "Footer.php";?>
