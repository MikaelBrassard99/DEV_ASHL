<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CMHJ - Coaches</title>
<script src="CMHJ-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - CMHJ-STHS.db - CMHJ-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"CMHJ-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"CMHJ-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<h1 class="STHSCoaches_ProCoaches">Pro Coaches</h1>
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); $("table").basictablesorter({headers:{11:{sorter:'thousands'}}});});</script>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>Gilles Bouchard (CAN)</td><td>75</td><td>75</td><td>75</td><td>80</td><td>70</td><td>75</td><td>70</td><td>CAN</td><td>49</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Peter Forsberg (SWE)</td><td>65</td><td>70</td><td>85</td><td>75</td><td>65</td><td>70</td><td>70</td><td>SWE</td><td>47</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Raimo Helminen (FIN)</td><td>75</td><td>75</td><td>80</td><td>80</td><td>70</td><td>75</td><td>70</td><td>FIN</td><td>56</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Robert Lang (CZE)</td><td>70</td><td>75</td><td>80</td><td>75</td><td>70</td><td>75</td><td>70</td><td>CZE</td><td>49</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Tim Hunter (TWO)</td><td>85</td><td>85</td><td>80</td><td>80</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>60</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Tobias Abstreiter  (GER)</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>70</td><td>GER</td><td>50</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Tony Granato (USA)</td><td>75</td><td>80</td><td>80</td><td>80</td><td>80</td><td>85</td><td>70</td><td>USA</td><td>56</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Vladislav Tretiak (RUS)</td><td>70</td><td>80</td><td>70</td><td>80</td><td>80</td><td>75</td><td>70</td><td>RUS</td><td>68</td><td>1 years</td><td>500 000 $</td></tr>
</table>
<h1 class="STHSCoaches_FarmCoaches">Farm Coaches</h1>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tbody></tbody>
</table>
<h1 class="STHSCoaches_AvailableCoaches">Available Coaches</h1>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tbody></tbody>
</table>
<?php include "Footer.php";?>
