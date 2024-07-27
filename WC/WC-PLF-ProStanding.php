<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Pro Standing</title>
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
<div class="STHSCenter"><h1>CANADA wins the tournament!</h1></div>
<table class="STHSTableFullW"><tr>
<td><b> Round : 1</b></td>
<td><b> Round : 2</b></td>
<td><b> Round : 3</b></td>
</tr>
<tr>
<td><b>
<a href=ProTeam.php?Team=10>CANADA - 0</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href=ProTeam.php?Team=3>FINLANDE - 0</a><br />
<a href=ProTeam.php?Team=2>USA - 1</a><br />
<br /></b></td>
<td><b>
<a href=ProTeam.php?Team=2>USA - 0</a><br />
<a href=ProTeam.php?Team=10>CANADA - 1</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href=ProTeam.php?Team=4>TCHÉQUIE - 1</a><br />
<a href=ProTeam.php?Team=1>SUÈDE - 0</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<a href=ProTeam.php?Team=4>TCHÉQUIE - 0</a><br />
<a href=ProTeam.php?Team=2>USA - 1</a><br />
<br /></b></td>
</tr>
<tr>
<td><b>
<a href=ProTeam.php?Team=9>RUSSIE - 0</a><br />
<br /></b></td>
<td><b>
<a href=ProTeam.php?Team=4>TCHÉQUIE - 0</a><br />
<a href=ProTeam.php?Team=9>RUSSIE - 1</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<a href=ProTeam.php?Team=9>RUSSIE - 0</a><br />
<a href=ProTeam.php?Team=10>CANADA - 1</a><br />
<br /></b></td>
</tr>
</table>
<?php include "Footer.php";?>
