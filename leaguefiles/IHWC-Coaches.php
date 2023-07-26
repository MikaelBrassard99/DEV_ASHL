<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Coaches</title>
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
<h1 class="STHSCoaches_ProCoaches">Pro Coaches</h1>
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); $("table").basictablesorter({headers:{11:{sorter:'thousands'}}});});</script>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>Aldis Girgensons (LET)</td><td>70</td><td>78</td><td>73</td><td>75</td><td>65</td><td>70</td><td>70</td><td>LET</td><td>51</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Bruce Boudreau (U23)</td><td>96</td><td>92</td><td>93</td><td>96</td><td>94</td><td>99</td><td>70</td><td>CAN</td><td>65</td><td>2 years</td><td>2 000 000 $</td></tr>
<tr><td>Christian Wohlwend (SUI)</td><td>80</td><td>85</td><td>80</td><td>80</td><td>70</td><td>70</td><td>70</td><td>SWI</td><td>43</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Daniel Alfredsson (SWE)</td><td>70</td><td>80</td><td>90</td><td>80</td><td>65</td><td>80</td><td>70</td><td>SWE</td><td>47</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Marco Sturm (ALL)</td><td>74</td><td>80</td><td>80</td><td>90</td><td>75</td><td>85</td><td>70</td><td>GER</td><td>42</td><td>2 years</td><td>1 000 000 $</td></tr>
<tr><td>Miroslav Satan (SLO)</td><td>70</td><td>75</td><td>85</td><td>80</td><td>75</td><td>80</td><td>70</td><td>SLO</td><td>47</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Paul MacLean (TWO)</td><td>99</td><td>75</td><td>80</td><td>75</td><td>84</td><td>76</td><td>70</td><td>FRA</td><td>63</td><td>3 years</td><td>1 000 000 $</td></tr>
<tr><td>Robert Lang (TCH)</td><td>75</td><td>80</td><td>85</td><td>80</td><td>80</td><td>75</td><td>70</td><td>CZE</td><td>49</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Ron Wilson (CAN)</td><td>75</td><td>90</td><td>90</td><td>96</td><td>99</td><td>88</td><td>70</td><td>CAN</td><td>64</td><td>3 years</td><td>2 500 000 $</td></tr>
<tr><td>Saku Koivu (FIN)</td><td>70</td><td>75</td><td>85</td><td>80</td><td>60</td><td>75</td><td>70</td><td>FIN</td><td>44</td><td>3 years</td><td>900 000 $</td></tr>
<tr><td>Todd Richards (USA)</td><td>80</td><td>90</td><td>95</td><td>95</td><td>80</td><td>75</td><td>70</td><td>USA</td><td>53</td><td>4 years</td><td>2 000 000 $</td></tr>
<tr><td>Zinetula Bilyaletdinov (RUS)</td><td>70</td><td>75</td><td>95</td><td>85</td><td>80</td><td>80</td><td>70</td><td>RUS</td><td>65</td><td>1 years</td><td>500 000 $</td></tr>
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
