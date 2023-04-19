<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Pro Team PlayersInfo</title>
<script src="IHWC-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
table.basictablesorter tbody td:nth-child(15){display:none;}
table.basictablesorter thead th:nth-child(15){display:none;}
table.basictablesorter tbody td:nth-child(16){display:none;}
table.basictablesorter thead th:nth-child(16){display:none;}
table.basictablesorter tbody td:nth-child(17){display:none;}
table.basictablesorter thead th:nth-child(17){display:none;}
}@media screen and (max-width: 960px) {
table.basictablesorter tbody td:nth-child(8){display:none;}
table.basictablesorter thead th:nth-child(8){display:none;}
table.basictablesorter tbody td:nth-child(9){display:none;}
table.basictablesorter thead th:nth-child(9){display:none;}
table.basictablesorter tbody td:nth-child(11){display:none;}
table.basictablesorter thead th:nth-child(11){display:none;}
table.basictablesorter tbody td:nth-child(12){display:none;}
table.basictablesorter thead th:nth-child(12){display:none;}
}@media screen and (max-width: 720px) {
table.basictablesorter tbody td:nth-child(2){display:none;}
table.basictablesorter thead th:nth-child(2){display:none;}
table.basictablesorter tbody td:nth-child(3){display:none;}
table.basictablesorter thead th:nth-child(3){display:none;}
}</style>
<link href="IHWC-PLF.css" rel="stylesheet" type="text/css" />
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
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); $("table").basictablesorter({headers:{11:{sorter:'thousands'},12:{sorter:'thousands'},13:{sorter:'thousands'},14:{sorter:'thousands'},15:{sorter:'thousands'}}});});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#ALLEMAGNE">ALLEMAGNE</a> | <a href="#CANADA">CANADA</a> | <a href="#ETATS-UNIS">ETATS-UNIS</a> | <a href="#FINLANDE">FINLANDE</a> | <a href="#LETTONIE">LETTONIE</a> | <a href="#REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a> | <a href="#RUSSIE">RUSSIE</a> | <a href="#SLOVAQUIE">SLOVAQUIE</a> | <a href="#SUEDE">SUEDE</a> | <a href="#SUISSE">SUISSE</a> | <a href="#TEAMWORLD">TEAM WORLD</a> | <a href="#U23NORTHAMERICA">U23 NORTH AMERICA</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamPlayerInfoPro_ALL"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">ALLEMAGNE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#ALLEMAGNE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#ALLEMAGNE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#ALLEMAGNE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#ALLEMAGNE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#ALLEMAGNE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#ALLEMAGNE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#ALLEMAGNE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#ALLEMAGNE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#ALLEMAGNE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#ALLEMAGNE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#ALLEMAGNE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#ALLEMAGNE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ALLEMAGNE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ALLEMAGNE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Brooks Macek</td><td>GER</td><td>C/RW</td><td>27</td><td>1993-01-01</td><td>192 Lbs</td><td>5 ft11</td><td>11</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 200 000 $</td><td>1 200 000 $</td><td>1 200 000 $</td><td></td><td></td></tr>
<tr><td>Daniel Pietta</td><td>GER</td><td>C/LW</td><td>33</td><td>1987-01-01</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Danny aus den Birken</td><td>GER</td><td>G</td><td>34</td><td>1986-01-01</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 350 000 $</td><td>1 350 000 $</td><td>1 350 000 $</td><td></td><td></td></tr>
<tr><td>Denis Reul</td><td>GER</td><td>D</td><td>30</td><td>1990-01-01</td><td>247 Lbs</td><td>6 ft4</td><td>26</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dominik Bokk</td><td>DER</td><td>LW/RW</td><td>19</td><td>2001-01-01</td><td>187 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td></tr>
<tr><td>Dominik Kahun</td><td>GER</td><td>C/LW/RW</td><td>24</td><td>1996-01-01</td><td>174 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>1 300 000 $</td><td>1 300 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Eduard Lewandowski</td><td>GER</td><td>RW</td><td>39</td><td>1981-01-01</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jonas Müller</td><td>GER</td><td>D</td><td>24</td><td>1996-01-01</td><td>203 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Konrad Abeltshauser</td><td>GER</td><td>D</td><td>27</td><td>1993-01-01</td><td>220 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 200 000 $</td><td>1 200 000 $</td><td>1 200 000 $</td><td>1 200 000 $</td><td></td></tr>
<tr><td>Laurin Braun</td><td>GER</td><td>LW/RW</td><td>28</td><td>1992-01-01</td><td>172 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 400 000 $</td><td>1 400 000 $</td><td>1 400 000 $</td><td></td><td></td></tr>
<tr><td>Lean Bergmann</td><td>GER</td><td>LW/RW</td><td>21</td><td>1999-01-01</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Leon Gawanke</td><td>GER</td><td>D</td><td>20</td><td>2000-01-01</td><td>198 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Lukas Reichel</td><td>GER</td><td>C/LW/RW</td><td>17</td><td>2003-01-01</td><td>172 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marc Michaelis</td><td>GER</td><td>C/LW</td><td>24</td><td>1996-01-01</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Markus Eisenschmid</td><td>GER</td><td>C/RW</td><td>24</td><td>1996-01-01</td><td>179 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mathias Niederberger</td><td>GER</td><td>G</td><td>27</td><td>1993-01-01</td><td>176 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Moritz Seider</td><td>GER</td><td>D</td><td>18</td><td>2002-01-01</td><td>207 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nico Sturm</td><td>GER</td><td>C</td><td>24</td><td>1996-01-01</td><td>207 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Philip Gogulla</td><td>GER</td><td>LW</td><td>32</td><td>1988-01-01</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Simon Sezemsky</td><td>GER</td><td>C/D</td><td>26</td><td>1994-01-01</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Tim Stützle</td><td>GER</td><td>C/LW/RW</td><td>17</td><td>2003-01-01</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Tobias Rieder</td><td>GER</td><td>C/LW/RW</td><td>26</td><td>1994-01-01</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>2 000 000 $</td><td>2 000 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Yannic Seidenberg</td><td>GER</td><td>LW/D</td><td>35</td><td>1985-01-01</td><td>183 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>25,9</td><td>194 Lbs</td><td>6 ft 1</td><td>1,30 years</td><td>756 522 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_CAN"><a id="CANADA">CANADA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">CANADA Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#CANADA">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#CANADA">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#CANADA">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#CANADA">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#CANADA">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#CANADA">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#CANADA">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#CANADA">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#CANADA">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#CANADA">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#CANADA">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#CANADA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CANADA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CANADA" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Bo Horvat</td><td>CAN</td><td>C/LW</td><td>24</td><td>1996-01-01</td><td>216 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>4 500 000 $</td><td>4 500 000 $</td><td>4 500 000 $</td><td></td><td></td></tr>
<tr><td>Brad Marchand</td><td>CAN</td><td>C/LW</td><td>31</td><td>1989-01-01</td><td>181 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>9 000 000 $</td><td>9 000 000 $</td><td>9 000 000 $</td><td>9 000 000 $</td><td>9 000 000 $</td></tr>
<tr><td>Braden Holtby</td><td>CAN</td><td>G</td><td>30</td><td>1990-01-01</td><td>212 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td></tr>
<tr><td>Brayden Schenn</td><td>CAN</td><td>C/LW/RW</td><td>28</td><td>1992-01-01</td><td>201 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td></tr>
<tr><td>Brent Burns</td><td>CAN</td><td>RW/D</td><td>34</td><td>1986-01-01</td><td>229 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 750 000 $</td><td>6 750 000 $</td><td>6 750 000 $</td><td>6 750 000 $</td><td>6 750 000 $</td></tr>
<tr><td>Cam Fowler</td><td>CAN</td><td>D</td><td>28</td><td>1992-01-01</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>8 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td></tr>
<tr><td>Carey Price</td><td>CAN</td><td>G</td><td>32</td><td>1988-01-01</td><td>216 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>8 years</td><td>Pro &amp; Farm</td><td>No</td><td>10 500 000 $</td><td>10 500 000 $</td><td>10 500 000 $</td><td>10 500 000 $</td><td>10 500 000 $</td></tr>
<tr><td>Cody Ceci</td><td>CAN</td><td>D</td><td>26</td><td>1994-01-01</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>2 500 000 $</td><td>2 500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Colton Parayko</td><td>CAN</td><td>D</td><td>26</td><td>1994-01-01</td><td>229 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>7 years</td><td>Pro &amp; Farm</td><td>No</td><td>4 500 000 $</td><td>4 500 000 $</td><td>4 500 000 $</td><td>4 500 000 $</td><td>4 500 000 $</td></tr>
<tr><td>David Musil</td><td>CAN</td><td>D</td><td>26</td><td>1994-01-01</td><td>208 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>3 000 000 $</td><td>3 000 000 $</td><td>3 000 000 $</td><td>3 000 000 $</td><td></td></tr>
<tr><td>John Tavares</td><td>CAN</td><td>C</td><td>29</td><td>1991-01-01</td><td>207 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>7 years</td><td>Pro &amp; Farm</td><td>No</td><td>10 000 000 $</td><td>10 000 000 $</td><td>10 000 000 $</td><td>10 000 000 $</td><td>10 000 000 $</td></tr>
<tr><td>Jonathan Drouin</td><td>CAN</td><td>C/LW/RW</td><td>24</td><td>1996-01-01</td><td>203 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 700 000 $</td><td>5 700 000 $</td><td>5 700 000 $</td><td></td><td></td></tr>
<tr><td>Jonathan Toews</td><td>CAN</td><td>C</td><td>31</td><td>1989-01-01</td><td>201 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>9 000 000 $</td><td>9 000 000 $</td><td>9 000 000 $</td><td>9 000 000 $</td><td>9 000 000 $</td></tr>
<tr><td>Logan Couture</td><td>CAN</td><td>C/LW/RW</td><td>30</td><td>1990-01-01</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 250 000 $</td><td>7 250 000 $</td><td>7 250 000 $</td><td>7 250 000 $</td><td></td></tr>
<tr><td>Luke Schenn</td><td>CAN</td><td>D</td><td>30</td><td>1990-01-01</td><td>229 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 900 000 $</td><td>5 900 000 $</td><td>5 900 000 $</td><td></td><td></td></tr>
<tr><td>Mark Stone</td><td>CAN</td><td>RW</td><td>27</td><td>1993-01-01</td><td>220 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td></tr>
<tr><td>Phillip Danault</td><td>CAN</td><td>C/LW</td><td>26</td><td>1994-01-01</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td></td></tr>
<tr><td>Ryan Ellis</td><td>CAN</td><td>D</td><td>28</td><td>1992-01-01</td><td>181 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>4 500 000 $</td><td>4 500 000 $</td><td>4 500 000 $</td><td></td><td></td></tr>
<tr><td>Sam Reinhart</td><td>CAN</td><td>C/RW</td><td>24</td><td>1996-01-01</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 500 000 $</td><td>5 500 000 $</td><td>5 500 000 $</td><td>5 500 000 $</td><td></td></tr>
<tr><td>Sean Monahan</td><td>CAN</td><td>C</td><td>25</td><td>1995-01-01</td><td>194 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 000 000 $</td><td>6 000 000 $</td><td>6 000 000 $</td><td></td><td></td></tr>
<tr><td>Steven Stamkos</td><td>CAN</td><td>C/LW/RW</td><td>29</td><td>1991-01-01</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>9 500 000 $</td><td>9 500 000 $</td><td>9 500 000 $</td><td>9 500 000 $</td><td>9 500 000 $</td></tr>
<tr><td>Taylor Hall</td><td>CAN</td><td>LW</td><td>28</td><td>1992-01-01</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>6 500 000 $</td><td>6 500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Ty Rattie</td><td>CAN</td><td>LW/RW</td><td>26</td><td>1994-01-01</td><td>194 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 500 000 $</td><td>5 500 000 $</td><td>5 500 000 $</td><td>5 500 000 $</td><td>5 500 000 $</td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>27,9</td><td>205 Lbs</td><td>6 ft 2</td><td>4,13 years</td><td>6 395 652 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_USA"><a id="ETATS-UNIS">ETATS-UNIS</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">ETATS-UNIS Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#ETATS-UNIS">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#ETATS-UNIS">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#ETATS-UNIS">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#ETATS-UNIS">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#ETATS-UNIS">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#ETATS-UNIS">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#ETATS-UNIS">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#ETATS-UNIS">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#ETATS-UNIS">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#ETATS-UNIS">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#ETATS-UNIS">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#ETATS-UNIS">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ETATS-UNIS');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ETATS-UNIS" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Ben Bishop</td><td>USA</td><td>G</td><td>33</td><td>1987-01-01</td><td>225 Lbs</td><td>6 ft7</td><td>0</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td></tr>
<tr><td>Blake Wheeler</td><td>USA</td><td>C/RW</td><td>33</td><td>1987-01-01</td><td>225 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 750 000 $</td><td>7 750 000 $</td><td>7 750 000 $</td><td>7 750 000 $</td><td>7 750 000 $</td></tr>
<tr><td>Cole Cassels</td><td>USA</td><td>C</td><td>24</td><td>1996-01-01</td><td>179 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>3 000 000 $</td><td>3 000 000 $</td><td>3 000 000 $</td><td>3 000 000 $</td><td></td></tr>
<tr><td>Connor Hellebuyck</td><td>USA</td><td>G</td><td>26</td><td>1994-01-01</td><td>207 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>1 750 000 $</td><td>1 750 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Derek Stepan</td><td>USA</td><td>C</td><td>29</td><td>1991-01-01</td><td>196 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 750 000 $</td><td>6 750 000 $</td><td>6 750 000 $</td><td>6 750 000 $</td><td>6 750 000 $</td></tr>
<tr><td>Emerson Etem</td><td>USA</td><td>LW/RW</td><td>27</td><td>1993-01-01</td><td>212 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 700 000 $</td><td>2 700 000 $</td><td>2 700 000 $</td><td>2 700 000 $</td><td>2 700 000 $</td></tr>
<tr><td>Jack Eichel</td><td>USA</td><td>C</td><td>23</td><td>1997-01-01</td><td>201 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>6 500 000 $</td><td>6 500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jacob Trouba</td><td>USA</td><td>D</td><td>25</td><td>1995-01-01</td><td>203 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>5 000 000 $</td><td>5 000 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jake Gardiner</td><td>USA</td><td>D</td><td>29</td><td>1991-01-01</td><td>201 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td></tr>
<tr><td>James Van Riemsdyk</td><td>USA</td><td>LW</td><td>30</td><td>1990-01-01</td><td>216 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 500 000 $</td><td>5 500 000 $</td><td>5 500 000 $</td><td>5 500 000 $</td><td></td></tr>
<tr><td>Jamie McBain</td><td>USA</td><td>D</td><td>31</td><td>1989-01-01</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>4 500 000 $</td><td>4 500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>John Carlson</td><td>USA</td><td>D</td><td>29</td><td>1991-01-01</td><td>216 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 000 000 $</td><td>6 000 000 $</td><td>6 000 000 $</td><td>6 000 000 $</td><td>6 000 000 $</td></tr>
<tr><td>Johnny Gaudreau</td><td>USA</td><td>LW</td><td>26</td><td>1994-01-01</td><td>165 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>8 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td></tr>
<tr><td>Kevin Labanc</td><td>USA</td><td>LW/RW</td><td>24</td><td>1996-01-01</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Kyle Connor</td><td>USA</td><td>LW</td><td>23</td><td>1997-01-01</td><td>183 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Max Pacioretty</td><td>USA</td><td>LW</td><td>31</td><td>1989-01-01</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>8 000 000 $</td><td>8 000 000 $</td><td>8 000 000 $</td><td>8 000 000 $</td><td>8 000 000 $</td></tr>
<tr><td>Phil Kessel</td><td>USA</td><td>RW</td><td>32</td><td>1988-01-01</td><td>203 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td></tr>
<tr><td>Ryan Callahan</td><td>USA</td><td>RW</td><td>34</td><td>1986-01-01</td><td>187 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>4 900 000 $</td><td>4 900 000 $</td><td></td><td></td></tr>
<tr><td>Ryan Suter</td><td>USA</td><td>D</td><td>34</td><td>1986-01-01</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>7 years</td><td>Pro &amp; Farm</td><td>No</td><td>8 500 000 $</td><td>8 500 000 $</td><td>8 500 000 $</td><td>8 500 000 $</td><td>8 500 000 $</td></tr>
<tr><td>Tyler Johnson</td><td>USA</td><td>C/LW/RW</td><td>29</td><td>1991-01-01</td><td>183 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>7 years</td><td>Pro &amp; Farm</td><td>No</td><td>9 800 000 $</td><td>9 800 000 $</td><td>9 800 000 $</td><td>9 800 000 $</td><td>9 800 000 $</td></tr>
<tr><td>Tyler Myers</td><td>USA</td><td>D</td><td>29</td><td>1991-01-01</td><td>229 Lbs</td><td>6 ft8</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td></tr>
<tr><td>Zach Bogosian</td><td>USA</td><td>D</td><td>29</td><td>1991-01-01</td><td>227 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 000 000 $</td><td>6 000 000 $</td><td>6 000 000 $</td><td>6 000 000 $</td><td>6 000 000 $</td></tr>
<tr><td>Zach Parise</td><td>USA</td><td>LW/RW</td><td>35</td><td>1985-01-01</td><td>194 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>8 000 000 $</td><td>8 000 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>28,9</td><td>202 Lbs</td><td>6 ft 2</td><td>3,87 years</td><td>5 741 304 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_FIN"><a id="FINLANDE">FINLANDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">FINLANDE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#FINLANDE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#FINLANDE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#FINLANDE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#FINLANDE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#FINLANDE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#FINLANDE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#FINLANDE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#FINLANDE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#FINLANDE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#FINLANDE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#FINLANDE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#FINLANDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FINLANDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FINLANDE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Antti Suomela</td><td>FIN</td><td>C</td><td>25</td><td>1995-01-01</td><td>172 Lbs</td><td>6 ft0</td><td>15</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>925 000 $</td><td>925 000 $</td><td>925 000 $</td><td></td><td></td></tr>
<tr><td>Jani Hakanpaa</td><td>FIN</td><td>D</td><td>27</td><td>1993-01-01</td><td>227 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>3 500 000 $</td><td>3 500 000 $</td><td>3 500 000 $</td><td>3 500 000 $</td><td>3 500 000 $</td></tr>
<tr><td>Jesperi Kotkaniemi</td><td>FIN</td><td>C</td><td>19</td><td>2001-01-01</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td></tr>
<tr><td>Jesse Puljujarvi</td><td>FIN</td><td>RW</td><td>21</td><td>1999-01-01</td><td>201 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>3 000 000 $</td><td>3 000 000 $</td><td>3 000 000 $</td><td>3 000 000 $</td><td></td></tr>
<tr><td>Joel Armia</td><td>FIN</td><td>RW</td><td>26</td><td>1994-01-01</td><td>205 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Julius Honka</td><td>FIN</td><td>D</td><td>24</td><td>1996-01-01</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 500 000 $</td><td>1 500 000 $</td><td>1 500 000 $</td><td></td><td></td></tr>
<tr><td>Juuse Saros</td><td>FIN</td><td>G</td><td>24</td><td>1996-01-01</td><td>179 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 500 000 $</td><td>1 500 000 $</td><td>1 500 000 $</td><td></td><td></td></tr>
<tr><td>Jyrki Jokipakka</td><td>FIN</td><td>D</td><td>28</td><td>1992-01-01</td><td>198 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 250 000 $</td><td>2 250 000 $</td><td>2 250 000 $</td><td>2 250 000 $</td><td></td></tr>
<tr><td>Kasperi Kapanen</td><td>FIN</td><td>LW/RW</td><td>23</td><td>1997-01-01</td><td>187 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td></tr>
<tr><td>Miikka Salomaki</td><td>FIN</td><td>C/LW/RW</td><td>26</td><td>1994-01-01</td><td>203 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>1 000 000 $</td><td>1 000 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mikko Rantanen</td><td>FIN</td><td>RW</td><td>23</td><td>1997-01-01</td><td>212 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td></td></tr>
<tr><td>Miro Heiskanen</td><td>FIN</td><td>D</td><td>20</td><td>2000-01-01</td><td>170 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td></tr>
<tr><td>Olli Maatta</td><td>FIN</td><td>D</td><td>25</td><td>1995-01-01</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>3 500 000 $</td><td>3 500 000 $</td><td>3 500 000 $</td><td></td><td></td></tr>
<tr><td>Pekka Rinne</td><td>FIN</td><td>G</td><td>37</td><td>1983-01-01</td><td>216 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td><td></td></tr>
<tr><td>Roope Hintz</td><td>FIN</td><td>C/LW</td><td>23</td><td>1997-01-01</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td></tr>
<tr><td>Saku Maenalanen</td><td>FIN</td><td>LW/RW</td><td>25</td><td>1995-01-01</td><td>207 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 100 000 $</td><td>2 100 000 $</td><td>2 100 000 $</td><td></td><td></td></tr>
<tr><td>Sami Vatanen</td><td>FIN</td><td>D</td><td>28</td><td>1992-01-01</td><td>185 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>3 200 000 $</td><td>3 200 000 $</td><td>3 200 000 $</td><td>3 200 000 $</td><td></td></tr>
<tr><td>Sebastian Aho</td><td>FIN</td><td>C/LW/RW</td><td>22</td><td>1998-01-01</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td><td></td></tr>
<tr><td>Teemu Pulkkinen</td><td>FIN</td><td>RW</td><td>27</td><td>1993-01-01</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>3 000 000 $</td><td>3 000 000 $</td><td>3 000 000 $</td><td>3 000 000 $</td><td>3 000 000 $</td></tr>
<tr><td>Toni Rajala</td><td>FIN</td><td>LW/RW</td><td>28</td><td>1992-01-01</td><td>168 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 900 000 $</td><td>1 900 000 $</td><td>1 900 000 $</td><td></td><td></td></tr>
<tr><td>Tuomo Ruutu</td><td>FIN</td><td>C/LW/RW</td><td>36</td><td>1984-01-01</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Ville Leskinen</td><td>FIN</td><td>LW/RW</td><td>25</td><td>1995-01-01</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td></td></tr>
<tr><td>Ville Pokka</td><td>FIN</td><td>D</td><td>25</td><td>1995-01-01</td><td>214 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 750 000 $</td><td>1 750 000 $</td><td>1 750 000 $</td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>25,5</td><td>195 Lbs</td><td>6 ft 1</td><td>2,52 years</td><td>2 407 609 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_LET"><a id="LETTONIE">LETTONIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">LETTONIE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#LETTONIE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#LETTONIE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#LETTONIE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#LETTONIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#LETTONIE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#LETTONIE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#LETTONIE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#LETTONIE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#LETTONIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#LETTONIE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#LETTONIE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#LETTONIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LETTONIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LETTONIE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Andris Dzerins</td><td>LET</td><td>C</td><td>31</td><td>1989-01-01</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Arturs Silovs</td><td>LET</td><td>G</td><td>18</td><td>2002-01-01</td><td>203 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Emils Gegeris</td><td>LET</td><td>LW</td><td>20</td><td>2000-01-22</td><td>154 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Frenks Razgals</td><td>LET</td><td>LW/RW</td><td>23</td><td>1997-01-02</td><td>179 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Harijs Brants</td><td>LET</td><td>D</td><td>17</td><td>2003-01-01</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Janis Jaks</td><td>LET</td><td>D</td><td>24</td><td>1996-01-22</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Kalvis Ozols</td><td>LET</td><td>D</td><td>26</td><td>1994-01-22</td><td>214 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Karlis Cukste</td><td>LET</td><td>D</td><td>22</td><td>1998-01-22</td><td>220 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 500 000 $</td><td>1 500 000 $</td><td>1 500 000 $</td><td></td><td></td></tr>
<tr><td>Kaspars Daugavins</td><td>LET</td><td>C/LW/RW</td><td>31</td><td>1989-01-01</td><td>214 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>650 000 $</td><td>650 000 $</td><td>650 000 $</td><td></td><td></td></tr>
<tr><td>Kristaps Sotnieks</td><td>LET</td><td>D</td><td>33</td><td>1987-01-01</td><td>207 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Lauris Darzins</td><td>LET</td><td>LW</td><td>35</td><td>1985-01-22</td><td>201 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mareks Mitens</td><td>LET</td><td>G</td><td>21</td><td>1999-01-22</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 200 000 $</td><td>1 200 000 $</td><td>1 200 000 $</td><td>1 200 000 $</td><td></td></tr>
<tr><td>Martin Karsums</td><td>LET</td><td>LW/RW</td><td>33</td><td>1987-01-01</td><td>209 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Miks Indrasis</td><td>LET</td><td>LW/RW</td><td>29</td><td>1991-01-01</td><td>198 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Jevpalovs</td><td>LET</td><td>LW/RW</td><td>25</td><td>1995-01-22</td><td>214 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>1 200 000 $</td><td>1 200 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Oskars Bartulis</td><td>LET</td><td>D</td><td>32</td><td>1988-01-01</td><td>198 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Oskars Batna</td><td>LET</td><td>C</td><td>24</td><td>1996-01-01</td><td>220 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Raimonds Vitolins</td><td>LET</td><td>C/LW/RW</td><td>17</td><td>2003-01-01</td><td>163 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Rodrigo Abols</td><td>LET</td><td>C</td><td>23</td><td>1997-01-22</td><td>187 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>1 500 000 $</td><td>1 500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Ronalds Kenins</td><td>LET</td><td>LW</td><td>28</td><td>1992-01-22</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>2 000 000 $</td><td>2 000 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Rudolfs Balcers</td><td>LET</td><td>LW</td><td>22</td><td>1998-01-22</td><td>180 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td></tr>
<tr><td>Uvis Janis Balinskis</td><td>LET</td><td>D</td><td>23</td><td>1997-01-22</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Vitalijs Pavlovs</td><td>LET</td><td>C/RW</td><td>30</td><td>1990-01-01</td><td>223 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>25,5</td><td>197 Lbs</td><td>6 ft 2</td><td>1,26 years</td><td>739 130 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_TCH"><a id="REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">REPUBLIQUE TCHEQUE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#REPUBLIQUETCHEQUE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#REPUBLIQUETCHEQUE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#REPUBLIQUETCHEQUE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#REPUBLIQUETCHEQUE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#REPUBLIQUETCHEQUE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#REPUBLIQUETCHEQUE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#REPUBLIQUETCHEQUE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#REPUBLIQUETCHEQUE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#REPUBLIQUETCHEQUE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#REPUBLIQUETCHEQUE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#REPUBLIQUETCHEQUE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#REPUBLIQUETCHEQUE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_REPUBLIQUETCHEQUE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_REPUBLIQUETCHEQUE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Andrej Sustr</td><td>CZE</td><td>D</td><td>29</td><td>1991-01-01</td><td>216 Lbs</td><td>6 ft7</td><td>3</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>3 000 000 $</td><td>3 000 000 $</td><td></td><td></td><td></td></tr>
<tr><td>David Kampf</td><td>CZE</td><td>C/RW</td><td>24</td><td>1996-01-01</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 500 000 $</td><td>1 500 000 $</td><td>1 500 000 $</td><td>1 500 000 $</td><td></td></tr>
<tr><td>David Krejci</td><td>CZE</td><td>C/RW</td><td>33</td><td>1987-01-01</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 800 000 $</td><td>6 800 000 $</td><td>6 800 000 $</td><td>6 800 000 $</td><td>6 800 000 $</td></tr>
<tr><td>Dominik Simon</td><td>CZE</td><td>C/LW/RW</td><td>25</td><td>1995-01-01</td><td>190 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>900 000 $</td><td>900 000 $</td><td>900 000 $</td><td></td><td></td></tr>
<tr><td>Filip Chlapik</td><td>CZE</td><td>C</td><td>22</td><td>1998-01-01</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>850 000 $</td><td>850 000 $</td><td>850 000 $</td><td>850 000 $</td><td></td></tr>
<tr><td>Filip Chytil</td><td>CZE</td><td>C</td><td>20</td><td>2000-01-01</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Filip Hronek</td><td>CZE</td><td>D</td><td>22</td><td>1998-01-01</td><td>170 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td></tr>
<tr><td>Filip Kral</td><td>CZE</td><td>D</td><td>20</td><td>2000-01-01</td><td>172 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Filip Zadina</td><td>CZE</td><td>LW/RW</td><td>20</td><td>2000-01-01</td><td>196 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td></tr>
<tr><td>Jakub Kindl</td><td>CZE</td><td>D</td><td>32</td><td>1988-01-01</td><td>198 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>1 700 000 $</td><td>1 700 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jakub Zboril</td><td>CZE</td><td>D</td><td>22</td><td>1998-01-01</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jaromir Jagr</td><td>CZE</td><td>RW</td><td>47</td><td>1973-01-01</td><td>254 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jindrich Abdul</td><td>CZE</td><td>RW</td><td>23</td><td>1997-01-01</td><td>187 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Martin Hanzal</td><td>CZE</td><td>C</td><td>32</td><td>1988-01-01</td><td>229 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>4 000 000 $</td><td>4 000 000 $</td><td>4 000 000 $</td><td></td><td></td></tr>
<tr><td>Martin Necas</td><td>CZE</td><td>C/RW</td><td>20</td><td>2000-01-01</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Michael Frolik</td><td>CZE</td><td>C/LW/RW</td><td>31</td><td>1989-01-01</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>4 650 000 $</td><td>4 650 000 $</td><td>4 650 000 $</td><td>4 650 000 $</td><td></td></tr>
<tr><td>Ondrej Kase</td><td>CZE</td><td>LW/RW</td><td>24</td><td>1996-01-01</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Ondrej Palat</td><td>CZE</td><td>LW</td><td>28</td><td>1992-01-01</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>3 000 000 $</td><td>3 000 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Pavel Francouz</td><td>CZE</td><td>G</td><td>29</td><td>1991-01-01</td><td>179 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 800 000 $</td><td>1 800 000 $</td><td>1 800 000 $</td><td></td><td></td></tr>
<tr><td>Pavel Zacha</td><td>CZE</td><td>C/LW</td><td>22</td><td>1998-01-01</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Petr Mrazek</td><td>CZE</td><td>G</td><td>27</td><td>1993-01-01</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>4 500 000 $</td><td>4 500 000 $</td><td>4 500 000 $</td><td>4 500 000 $</td><td></td></tr>
<tr><td>Tomas Kundratek</td><td>CZE</td><td>D</td><td>30</td><td>1990-01-01</td><td>201 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Vojtech Budik</td><td>CZE</td><td>D</td><td>21</td><td>1999-01-01</td><td>203 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>26,2</td><td>197 Lbs</td><td>6 ft 1</td><td>1,78 years</td><td>1 760 870 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_RUS"><a id="RUSSIE">RUSSIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">RUSSIE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#RUSSIE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#RUSSIE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#RUSSIE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#RUSSIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#RUSSIE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#RUSSIE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#RUSSIE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#RUSSIE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#RUSSIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#RUSSIE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#RUSSIE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#RUSSIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RUSSIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RUSSIE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Alexander Ovechkin</td><td>RUS</td><td>LW/RW</td><td>34</td><td>1986-01-01</td><td>236 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>9 500 000 $</td><td>9 500 000 $</td><td>9 500 000 $</td><td></td><td></td></tr>
<tr><td>Alexander Radulov</td><td>RUS</td><td>LW/RW</td><td>33</td><td>1987-01-01</td><td>201 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td><td></td><td></td></tr>
<tr><td>Anton Volchenkov</td><td>RUS</td><td>D</td><td>37</td><td>1983-01-01</td><td>236 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>2 000 000 $</td><td>2 000 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Bogdan Yakimov</td><td>RUS</td><td>C</td><td>25</td><td>1995-01-01</td><td>227 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 400 000 $</td><td>1 400 000 $</td><td>1 400 000 $</td><td></td><td></td></tr>
<tr><td>Dmitri Kulikov</td><td>RUS</td><td>D</td><td>29</td><td>1991-01-01</td><td>205 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td></tr>
<tr><td>Dmitri Orlov</td><td>RUS</td><td>D</td><td>28</td><td>1992-01-01</td><td>212 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 000 000 $</td><td>6 000 000 $</td><td>6 000 000 $</td><td>6 000 000 $</td><td>6 000 000 $</td></tr>
<tr><td>Dmitrij Jaskin</td><td>RUS</td><td>LW/RW</td><td>26</td><td>1994-01-01</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>1 700 000 $</td><td>1 700 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Evgeny Dadonov</td><td>RUS</td><td>LW/RW</td><td>30</td><td>1990-01-01</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>3 785 000 $</td><td>3 785 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Evgeny Grachev</td><td>RUS</td><td>C/LW/RW</td><td>29</td><td>1991-01-01</td><td>231 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td></tr>
<tr><td>Ilya Kovalchuk</td><td>RUS</td><td>LW/RW</td><td>36</td><td>1984-01-01</td><td>223 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>6 666 666 $</td><td>6 666 666 $</td><td></td><td></td><td></td></tr>
<tr><td>Ilya Sorokin</td><td>RUS</td><td>G</td><td>24</td><td>1996-01-01</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td></tr>
<tr><td>Kirill Kaprizov</td><td>RUS</td><td>LW/RW</td><td>22</td><td>1998-01-01</td><td>201 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mikhail Grigorenko</td><td>RUS</td><td>C/LW/RW</td><td>25</td><td>1995-01-01</td><td>183 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 200 000 $</td><td>2 200 000 $</td><td>2 200 000 $</td><td></td><td></td></tr>
<tr><td>Mikhail Sergachev</td><td>RUS</td><td>D</td><td>21</td><td>1999-01-01</td><td>216 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Filatov</td><td>RUS</td><td>LW/RW</td><td>29</td><td>1991-01-01</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>4 250 000 $</td><td>4 250 000 $</td><td>4 250 000 $</td><td>4 250 000 $</td><td></td></tr>
<tr><td>Nikita Gusev</td><td>RUS</td><td>LW/RW</td><td>27</td><td>1993-01-01</td><td>181 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 250 000 $</td><td>5 250 000 $</td><td>5 250 000 $</td><td>5 250 000 $</td><td>5 250 000 $</td></tr>
<tr><td>Nikita Nesterov</td><td>RUS</td><td>D</td><td>26</td><td>1994-01-01</td><td>198 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>1 200 000 $</td><td>1 200 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Tryamkin</td><td>RUS</td><td>D</td><td>25</td><td>1995-01-01</td><td>254 Lbs</td><td>6 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>1 500 000 $</td><td>1 500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Pavel Buchnevich</td><td>RUS</td><td>LW/RW</td><td>24</td><td>1996-01-01</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Sergei Bobrovsky</td><td>RUS</td><td>G</td><td>31</td><td>1989-01-01</td><td>183 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>8 500 000 $</td><td>8 500 000 $</td><td>8 500 000 $</td><td>8 500 000 $</td><td>8 500 000 $</td></tr>
<tr><td>Vladislav Kamenev</td><td>RUS</td><td>C/LW/RW</td><td>23</td><td>1997-01-01</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 500 000 $</td><td>1 500 000 $</td><td>1 500 000 $</td><td></td><td></td></tr>
<tr><td>Vladislav Namestnikov</td><td>RUS</td><td>C/LW/RW</td><td>27</td><td>1993-01-01</td><td>181 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 800 000 $</td><td>1 800 000 $</td><td>1 800 000 $</td><td></td><td></td></tr>
<tr><td>Yegor Rykov</td><td>RUS</td><td>D</td><td>22</td><td>1998-01-01</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 300 000 $</td><td>1 300 000 $</td><td>1 300 000 $</td><td>1 300 000 $</td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>27,5</td><td>205 Lbs</td><td>6 ft 1</td><td>2,43 years</td><td>3 515 290 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_SLO"><a id="SLOVAQUIE">SLOVAQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">SLOVAQUIE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#SLOVAQUIE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#SLOVAQUIE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#SLOVAQUIE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#SLOVAQUIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#SLOVAQUIE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#SLOVAQUIE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#SLOVAQUIE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#SLOVAQUIE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#SLOVAQUIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#SLOVAQUIE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#SLOVAQUIE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#SLOVAQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SLOVAQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SLOVAQUIE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Adam Liska</td><td>SLO</td><td>LW</td><td>20</td><td>2000-01-01</td><td>183 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Andrej Kudrna</td><td>SLO</td><td>LW/RW</td><td>28</td><td>1992-01-01</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Andrej Sekera</td><td>SLO</td><td>D</td><td>33</td><td>1987-01-01</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>2 500 000 $</td><td>2 500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Denis Godla</td><td>SLO</td><td>G</td><td>24</td><td>1996-01-01</td><td>179 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>800 000 $</td><td>800 000 $</td><td>800 000 $</td><td></td><td></td></tr>
<tr><td>Libor Hudacek</td><td>SLO</td><td>C/RW</td><td>29</td><td>1991-01-01</td><td>172 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Lukas Cingel</td><td>SLO</td><td>C</td><td>27</td><td>1993-01-01</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marcel Hascak</td><td>SLO</td><td>RW</td><td>32</td><td>1988-01-01</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marek Daloga</td><td>SLO</td><td>D</td><td>30</td><td>1990-01-01</td><td>190 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marian Studenic</td><td>SLO</td><td>RW</td><td>21</td><td>1999-01-01</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marko Dano</td><td>SLO</td><td>C/LW/RW</td><td>25</td><td>1995-01-01</td><td>212 Lbs</td><td>6 ft0</td><td>2</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td></td><td></td></tr>
<tr><td>Martin Bakos</td><td>SLO</td><td>LW/RW</td><td>29</td><td>1991-01-01</td><td>198 Lbs</td><td>6 ft2</td><td>2</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Martin Fehervary</td><td>SLO</td><td>D</td><td>20</td><td>2000-01-01</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Martin Marincin</td><td>SLO</td><td>D</td><td>27</td><td>1993-01-01</td><td>209 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>3 250 000 $</td><td>3 250 000 $</td><td>3 250 000 $</td><td>3 250 000 $</td><td>3 250 000 $</td></tr>
<tr><td>Matus Sukel</td><td>SLO</td><td>C</td><td>23</td><td>1997-01-01</td><td>172 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Michal Cajkovsky</td><td>SLO</td><td>D</td><td>27</td><td>1993-01-01</td><td>198 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Michal Kristof</td><td>SLO</td><td>C/LW</td><td>26</td><td>1994-01-01</td><td>159 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Patrik Koch</td><td>SLO</td><td>D</td><td>23</td><td>1997-01-01</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Patrik Lamper</td><td>SLO</td><td>LW/RW</td><td>26</td><td>1994-01-01</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Patrik Rybar</td><td>SLO</td><td>G</td><td>26</td><td>1994-01-01</td><td>190 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Peter Ceresnak</td><td>SLO</td><td>D</td><td>26</td><td>1994-01-01</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Robert Lantosi</td><td>SLO</td><td>RW</td><td>24</td><td>1996-01-01</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Tomas Marcinko</td><td>SLO</td><td>C/RW</td><td>31</td><td>1989-01-01</td><td>214 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Tomas Zigo</td><td>SLO</td><td>C/LW/RW</td><td>27</td><td>1993-01-01</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>26,3</td><td>192 Lbs</td><td>6 ft 1</td><td>1,30 years</td><td>784 783 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_SWE"><a id="SUEDE">SUEDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">SUEDE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#SUEDE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#SUEDE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#SUEDE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#SUEDE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#SUEDE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#SUEDE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#SUEDE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#SUEDE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#SUEDE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#SUEDE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#SUEDE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#SUEDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUEDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUEDE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Anders Nilsson</td><td>SWE</td><td>G</td><td>29</td><td>1991-01-01</td><td>229 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td></tr>
<tr><td>Erik Karlsson</td><td>SWE</td><td>D</td><td>29</td><td>1991-01-01</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>8 500 000 $</td><td>8 500 000 $</td><td>8 500 000 $</td><td>8 500 000 $</td><td></td></tr>
<tr><td>Gabriel Landeskog</td><td>SWE</td><td>LW</td><td>28</td><td>1992-01-01</td><td>216 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td><td>7 000 000 $</td></tr>
<tr><td>Gustav Nyquist</td><td>SWE</td><td>LW/RW</td><td>30</td><td>1990-01-01</td><td>183 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td></td></tr>
<tr><td>Hampus Lindholm</td><td>SWE</td><td>D</td><td>25</td><td>1995-01-01</td><td>207 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td><td></td><td></td></tr>
<tr><td>Henrik Sedin</td><td>SWE</td><td>C</td><td>39</td><td>1981-01-01</td><td>183 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 300 000 $</td><td>7 300 000 $</td><td>7 300 000 $</td><td></td><td></td></tr>
<tr><td>Jacob De La Rose</td><td>SWE</td><td>C/LW</td><td>24</td><td>1996-01-01</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td></td></tr>
<tr><td>Joel Eriksson Ek</td><td>SWE</td><td>C/LW/RW</td><td>22</td><td>1998-01-01</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jonas Brodin</td><td>SWE</td><td>D</td><td>26</td><td>1994-01-01</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>4 000 000 $</td><td>4 000 000 $</td><td>4 000 000 $</td><td>4 000 000 $</td><td>4 000 000 $</td></tr>
<tr><td>Loui Eriksson</td><td>SWE</td><td>LW/RW</td><td>34</td><td>1986-01-01</td><td>179 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td></tr>
<tr><td>Magnus Paajarvi</td><td>SWE</td><td>LW/RW</td><td>28</td><td>1992-01-01</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 200 000 $</td><td>5 200 000 $</td><td>5 200 000 $</td><td></td><td></td></tr>
<tr><td>Mattias Tedenby</td><td>SWE</td><td>LW/RW</td><td>29</td><td>1991-01-01</td><td>174 Lbs</td><td>5 ft10</td><td>16</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 000 000 $</td><td>6 000 000 $</td><td>6 000 000 $</td><td>6 000 000 $</td><td></td></tr>
<tr><td>Max Friberg</td><td>SWE</td><td>LW/RW</td><td>27</td><td>1993-01-01</td><td>201 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>4 300 000 $</td><td>4 300 000 $</td><td>4 300 000 $</td><td>4 300 000 $</td><td>4 300 000 $</td></tr>
<tr><td>Nicklas Backstrom</td><td>SWE</td><td>C</td><td>32</td><td>1988-01-01</td><td>214 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 700 000 $</td><td>6 700 000 $</td><td>6 700 000 $</td><td></td><td></td></tr>
<tr><td>Niklas Hjalmarsson</td><td>SWE</td><td>D</td><td>32</td><td>1988-01-01</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>4 750 000 $</td><td>4 750 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Patrik Berglund</td><td>SWE</td><td>C/LW</td><td>31</td><td>1989-01-01</td><td>218 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 750 000 $</td><td>5 750 000 $</td><td>5 750 000 $</td><td>5 750 000 $</td><td></td></tr>
<tr><td>Rasmus Andersson</td><td>SWE</td><td>D</td><td>23</td><td>1997-01-01</td><td>214 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td></tr>
<tr><td>Rickard Rakell</td><td>SWE</td><td>C/LW/RW</td><td>26</td><td>1994-01-01</td><td>203 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>3 650 000 $</td><td>3 650 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Robin Lehner</td><td>SWE</td><td>G</td><td>28</td><td>1992-01-01</td><td>240 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>4 250 000 $</td><td>4 250 000 $</td><td>4 250 000 $</td><td>4 250 000 $</td><td></td></tr>
<tr><td>Tobias Enstrom</td><td>SWE</td><td>D</td><td>35</td><td>1985-01-01</td><td>179 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td><td></td></tr>
<tr><td>Victor Hedman</td><td>SWE</td><td>D</td><td>29</td><td>1991-01-01</td><td>223 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td><td>6 500 000 $</td></tr>
<tr><td>Victor Olofsson</td><td>SWE</td><td>LW/RW</td><td>24</td><td>1996-01-01</td><td>181 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>900 000 $</td><td>900 000 $</td><td></td><td></td><td></td></tr>
<tr><td>William Nylander</td><td>SWE</td><td>C/LW/RW</td><td>23</td><td>1997-01-01</td><td>190 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>28,4</td><td>202 Lbs</td><td>6 ft 1</td><td>2,83 years</td><td>4 704 348 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_SUI"><a id="SUISSE">SUISSE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">SUISSE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#SUISSE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#SUISSE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#SUISSE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#SUISSE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#SUISSE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#SUISSE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#SUISSE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#SUISSE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#SUISSE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#SUISSE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#SUISSE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#SUISSE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUISSE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUISSE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Andreas Ambuhl</td><td>SWI</td><td>RW</td><td>36</td><td>1984-01-01</td><td>190 Lbs</td><td>5 ft10</td><td>27</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Calvin Thurkauf</td><td>SWI</td><td>C/LW</td><td>22</td><td>1998-01-01</td><td>212 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Christoph Bertschy</td><td>SWI</td><td>C/LW/RW</td><td>25</td><td>1995-01-29</td><td>185 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>750 000 $</td><td>750 000 $</td><td>750 000 $</td><td></td><td></td></tr>
<tr><td>Damien Brunner</td><td>SWI</td><td>LW/RW</td><td>33</td><td>1987-01-01</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Damien Riat</td><td>SWI</td><td>C/LW/RW</td><td>23</td><td>1997-01-01</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Fabrice Herzog</td><td>SWI</td><td>LW/RW</td><td>25</td><td>1995-01-01</td><td>176 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Gregory Hofmann</td><td>SWI</td><td>LW</td><td>27</td><td>1993-01-01</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Luca Sbisa</td><td>SWI</td><td>D</td><td>29</td><td>1991-01-01</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td><td></td></tr>
<tr><td>Lukas Frick</td><td>SWI</td><td>D</td><td>25</td><td>1995-01-01</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Michael Fora</td><td>SWI</td><td>D</td><td>24</td><td>1996-01-01</td><td>216 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mirco Mueller</td><td>SWI</td><td>D</td><td>24</td><td>1996-01-01</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td><td>2 000 000 $</td></tr>
<tr><td>Nico Hischier</td><td>SWI</td><td>C</td><td>20</td><td>2000-01-01</td><td>174 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nino Niederreiter</td><td>SWI</td><td>LW/RW</td><td>27</td><td>1993-01-01</td><td>218 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td></tr>
<tr><td>Noah Rod</td><td>SWI</td><td>C/LW/RW</td><td>23</td><td>1997-01-01</td><td>194 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 000 000 $</td><td>1 000 000 $</td><td>1 000 000 $</td><td></td><td></td></tr>
<tr><td>Philipp Kurashev</td><td>SWI</td><td>C</td><td>20</td><td>2000-01-01</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Raphael Diaz</td><td>SWI</td><td>D</td><td>33</td><td>1987-01-01</td><td>196 Lbs</td><td>5 ft11</td><td>10</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>975 000 $</td><td>975 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Reto Berra</td><td>SWI</td><td>G</td><td>32</td><td>1988-01-01</td><td>218 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 500 000 $</td><td>1 500 000 $</td><td>1 500 000 $</td><td>1 500 000 $</td><td></td></tr>
<tr><td>Robert Mayer</td><td>SWI</td><td>G</td><td>30</td><td>1990-01-01</td><td>201 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Romain Loeffel</td><td>SWI</td><td>D</td><td>28</td><td>1992-01-01</td><td>187 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Simon Moser</td><td>SWI</td><td>C/LW/RW</td><td>30</td><td>1990-01-01</td><td>214 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Sven Baertschi</td><td>SWI</td><td>LW/RW</td><td>27</td><td>1993-01-01</td><td>190 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td><td>5 000 000 $</td></tr>
<tr><td>Vincent Praplan</td><td>SWI</td><td>C/RW</td><td>25</td><td>1995-01-01</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Yannick Weber</td><td>SWI</td><td>D</td><td>31</td><td>1989-01-01</td><td>201 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>26,9</td><td>197 Lbs</td><td>6 ft 1</td><td>1,83 years</td><td>1 288 043 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_TWO"><a id="TEAMWORLD">TEAM WORLD</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">TEAM WORLD Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#TEAMWORLD">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#TEAMWORLD">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#TEAMWORLD">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#TEAMWORLD">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#TEAMWORLD">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#TEAMWORLD">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#TEAMWORLD">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#TEAMWORLD">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#TEAMWORLD">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#TEAMWORLD">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#TEAMWORLD">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#TEAMWORLD">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TEAMWORLD');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TEAMWORLD" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Alexandar Georgiyev</td><td>BUL</td><td>G</td><td>23</td><td>1997-01-01</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td></tr>
<tr><td>Andrey Pedan</td><td>LIT</td><td>D</td><td>26</td><td>1994-01-01</td><td>227 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td></tr>
<tr><td>Antoine Roussel</td><td>FRA</td><td>LW</td><td>30</td><td>1990-01-01</td><td>198 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 800 000 $</td><td>2 800 000 $</td><td>2 800 000 $</td><td></td><td></td></tr>
<tr><td>Daniel Sprong</td><td>NED</td><td>LW/RW</td><td>22</td><td>1998-01-01</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td></tr>
<tr><td>Darren Dietz</td><td>KAZ</td><td>D</td><td>26</td><td>1994-01-01</td><td>201 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 500 000 $</td><td>1 500 000 $</td><td>1 500 000 $</td><td></td><td></td></tr>
<tr><td>Dustin Boyd</td><td>KAZ</td><td>C/LW/RW</td><td>33</td><td>1987-01-01</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>800 000 $</td><td>800 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Enrico Miglioranzi</td><td>ITA</td><td>D</td><td>28</td><td>1992-01-01</td><td>183 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 250 000 $</td><td>1 250 000 $</td><td>1 250 000 $</td><td></td><td></td></tr>
<tr><td>Frederik Andersen</td><td>DEN</td><td>G</td><td>30</td><td>1990-01-01</td><td>229 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>3 500 000 $</td><td>3 500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Hafthor Sigrunarson</td><td>ISL</td><td>C</td><td>22</td><td>1998-01-01</td><td>170 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 000 000 $</td><td>1 000 000 $</td><td>1 000 000 $</td><td></td><td></td></tr>
<tr><td>Jesper Jensen</td><td>DEN</td><td>D</td><td>28</td><td>1992-01-01</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>2 500 000 $</td><td>2 500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Joachim Blichfeld</td><td>DEN</td><td>LW/RW</td><td>21</td><td>1999-01-01</td><td>187 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>850 000 $</td><td>850 000 $</td><td>850 000 $</td><td>850 000 $</td><td></td></tr>
<tr><td>Lars Eller</td><td>DEN</td><td>C/LW/RW</td><td>30</td><td>1990-01-01</td><td>207 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>5 225 000 $</td><td>5 225 000 $</td><td>5 225 000 $</td><td>5 225 000 $</td><td>5 225 000 $</td></tr>
<tr><td>Markus Lauridsen</td><td>DEN</td><td>D</td><td>28</td><td>1992-01-01</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>1 000 000 $</td><td>1 000 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mathias From</td><td>DEN</td><td>LW/RW</td><td>22</td><td>1998-01-01</td><td>187 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>750 000 $</td><td>750 000 $</td><td>750 000 $</td><td></td><td></td></tr>
<tr><td>Mattias Norstebo</td><td>NOR</td><td>D</td><td>24</td><td>1996-01-01</td><td>176 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>1 000 000 $</td><td>1 000 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Max Hermens</td><td>NED</td><td>C</td><td>22</td><td>1998-01-01</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>1 400 000 $</td><td>1 400 000 $</td><td>1 400 000 $</td><td></td><td></td></tr>
<tr><td>Nigel Dawes</td><td>KAZ</td><td>LW/RW</td><td>34</td><td>1986-01-01</td><td>201 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Oliver Bjorkstrand</td><td>DEN</td><td>LW/RW</td><td>24</td><td>1996-01-01</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>3 500 000 $</td><td>3 500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Raman Hrabarenka</td><td>BEL</td><td>D</td><td>27</td><td>1993-01-01</td><td>231 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>2 950 000 $</td><td>2 950 000 $</td><td>2 950 000 $</td><td></td><td></td></tr>
<tr><td>Thomas Vanek</td><td>AUT</td><td>LW/RW</td><td>35</td><td>1985-01-01</td><td>214 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td>7 500 000 $</td><td></td></tr>
<tr><td>Tim Bozon</td><td>FRA</td><td>LW</td><td>25</td><td>1995-01-01</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>750 000 $</td><td>750 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Wojtek Wolski</td><td>POL</td><td>LW/RW</td><td>33</td><td>1987-01-01</td><td>220 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>2 700 000 $</td><td>2 700 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Yegor Sharangovich</td><td>BEL</td><td>C</td><td>21</td><td>1999-01-01</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>775 000 $</td><td>775 000 $</td><td>775 000 $</td><td>775 000 $</td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>26,7</td><td>197 Lbs</td><td>6 ft 1</td><td>1,91 years</td><td>1 960 870 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_U23"><a id="U23NORTHAMERICA">U23 NORTH AMERICA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">U23 NORTH AMERICA Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#U23NORTHAMERICA">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#U23NORTHAMERICA">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#U23NORTHAMERICA">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#U23NORTHAMERICA">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#U23NORTHAMERICA">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#U23NORTHAMERICA">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#U23NORTHAMERICA">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#U23NORTHAMERICA">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#U23NORTHAMERICA">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#U23NORTHAMERICA">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#U23NORTHAMERICA">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#U23NORTHAMERICA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_U23NORTHAMERICA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_U23NORTHAMERICA" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Adam Fox</td><td>USA</td><td>D</td><td>21</td><td>1999-01-01</td><td>181 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Alex DeBrincat</td><td>USA</td><td>LW/RW</td><td>22</td><td>1998-01-01</td><td>165 Lbs</td><td>5 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Alexis Lafrenière</td><td>CAN</td><td>LW</td><td>18</td><td>2002-01-01</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Anthony Beauvillier</td><td>CAN</td><td>LW</td><td>22</td><td>1998-01-01</td><td>183 Lbs</td><td>5 ft11</td><td>2</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Anthony Cirelli</td><td>CAN</td><td>C</td><td>22</td><td>1998-01-01</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>475 000 $</td><td>950 000 $</td><td>0 $</td><td></td><td></td></tr>
<tr><td>Brock Boeser</td><td>USA</td><td>RW</td><td>22</td><td>1998-01-01</td><td>207 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Cale Makar</td><td>CAN</td><td>D</td><td>21</td><td>1999-01-01</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td></tr>
<tr><td>Carter Hart</td><td>CAN</td><td>G</td><td>21</td><td>1999-01-01</td><td>181 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td></tr>
<tr><td>Charles McAvoy</td><td>USA</td><td>D</td><td>22</td><td>1998-01-01</td><td>207 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Colton Point</td><td>CAN</td><td>G</td><td>21</td><td>1999-01-01</td><td>220 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>900 000 $</td><td>900 000 $</td><td>900 000 $</td><td></td><td></td></tr>
<tr><td>Dylan Strome</td><td>CAN</td><td>C</td><td>22</td><td>1998-01-01</td><td>201 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>900 000 $</td><td>900 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jack Roslovic</td><td>USA</td><td>C/RW</td><td>22</td><td>1998-01-01</td><td>187 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td></tr>
<tr><td>Kieffer Bellows</td><td>USA</td><td>C/LW</td><td>21</td><td>1999-01-01</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>900 000 $</td><td>900 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Kirby Dach</td><td>CAN</td><td>C</td><td>18</td><td>2002-01-01</td><td>198 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mitch Marner</td><td>CAN</td><td>C/RW</td><td>22</td><td>1998-01-01</td><td>170 Lbs</td><td>5 ft11</td><td>2</td><td>No</td><td>8 years</td><td>Pro &amp; Farm</td><td>No</td><td>9 500 000 $</td><td>9 500 000 $</td><td>9 500 000 $</td><td>9 500 000 $</td><td>9 500 000 $</td></tr>
<tr><td>Noah Hanifin</td><td>USA</td><td>D</td><td>22</td><td>1998-01-01</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>4 000 000 $</td><td>4 000 000 $</td><td>4 000 000 $</td><td></td><td></td></tr>
<tr><td>Owen Tippett</td><td>CAN</td><td>LW/RW</td><td>20</td><td>2000-01-01</td><td>201 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td></tr>
<tr><td>Quinn Hughes</td><td>USA</td><td>D</td><td>20</td><td>2000-01-01</td><td>170 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Girard</td><td>CAN</td><td>D</td><td>21</td><td>1999-01-01</td><td>161 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td></tr>
<tr><td>Tage Thompson</td><td>USA</td><td>LW/RW</td><td>22</td><td>1998-01-01</td><td>205 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>900 000 $</td><td>900 000 $</td><td>900 000 $</td><td>900 000 $</td><td></td></tr>
<tr><td>Thomas Chabot</td><td>CAN</td><td>D</td><td>22</td><td>1998-01-01</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>950 000 $</td><td>950 000 $</td><td>950 000 $</td><td></td><td></td></tr>
<tr><td>Zachary Senyshyn</td><td>CAN</td><td>RW</td><td>22</td><td>1998-01-01</td><td>192 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>1 250 000 $</td><td>1 250 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>22</td><td>21,2</td><td>190 Lbs</td><td>6 ft 1</td><td>1,91 years</td><td>1 400 000 $</td>
<td>22</td><td>0</td><td>0</td></tr></table></div>
<?php include "Footer.php";?>
