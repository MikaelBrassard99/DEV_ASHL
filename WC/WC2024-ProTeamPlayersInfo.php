<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Pro Team PlayersInfo</title>
<script src="WC2024.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.9.9 - WC2024-STHS.bin - WC2024-STHSCareerStat.bin"/>
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
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); $("table").basictablesorter({headers:{11:{sorter:'thousands'},12:{sorter:'thousands'},13:{sorter:'thousands'},14:{sorter:'thousands'},15:{sorter:'thousands'}}});});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#ALLEMAGNE">ALLEMAGNE</a> | <a href="#CANADA">CANADA</a> | <a href="#ÉTATS-UNIS">ÉTATS-UNIS</a> | <a href="#FINLANDE">FINLANDE</a> | <a href="#LETTONIE">LETTONIE</a> | <a href="#QUÉBEC">QUÉBEC</a> | <a href="#RUSSIE">RUSSIE</a> | <a href="#SLOVAQUIE">SLOVAQUIE</a> | <a href="#SUÈDE">SUÈDE</a> | <a href="#SUISSE">SUISSE</a> | <a href="#TCHÉQUIE">TCHÉQUIE</a> | <a href="#WORLD">WORLD</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamPlayerInfoPro_GER"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">ALLEMAGNE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#ALLEMAGNE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#ALLEMAGNE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#ALLEMAGNE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#ALLEMAGNE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#ALLEMAGNE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#ALLEMAGNE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#ALLEMAGNE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#ALLEMAGNE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#ALLEMAGNE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#ALLEMAGNE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#ALLEMAGNE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#ALLEMAGNE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ALLEMAGNE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ALLEMAGNE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Dominik Bokk</td><td>GER</td><td>LW/RW</td><td>24</td><td>2000-01-22</td><td>181 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Dominik Kahun</td><td>GER</td><td>C/LW/RW</td><td>29</td><td>1995-01-22</td><td>165 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>JJ Peterka</td><td>GER</td><td>C/LW/RW</td><td>22</td><td>2002-01-02</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Lean Bergmann</td><td>GER</td><td>C/LW/RW</td><td>26</td><td>1998-01-02</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Leon Draisaitl</td><td>GER</td><td>C/LW/RW</td><td>29</td><td>1995-01-22</td><td>216 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Leon Gawanke</td><td>GER</td><td>D</td><td>25</td><td>1999-01-02</td><td>198 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Moritz Seider</td><td>GER</td><td>D</td><td>23</td><td>2001-01-02</td><td>207 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Nico Sturm</td><td>GER</td><td>C/LW</td><td>29</td><td>1995-01-02</td><td>207 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Philipp Grubauer</td><td>GER</td><td>G</td><td>33</td><td>1991-01-22</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Tim Stützle</td><td>GER</td><td>C/LW</td><td>22</td><td>2002-01-02</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Tobias Rieder</td><td>GER</td><td>C/LW/RW</td><td>31</td><td>1993-01-22</td><td>165 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>11</td><td>26,6</td><td>192 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>$500,000</td>
<td>11</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_CAN"><a id="CANADA">CANADA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">CANADA Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#CANADA">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#CANADA">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#CANADA">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#CANADA">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#CANADA">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#CANADA">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#CANADA">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#CANADA">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#CANADA">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#CANADA">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#CANADA">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#CANADA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CANADA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CANADA" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Aaron Ekblad</td><td>CAN</td><td>D</td><td>28</td><td>1996-01-22</td><td>216 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Alex Pietrangelo</td><td>CAN</td><td>D</td><td>34</td><td>1990-01-22</td><td>206 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Brayden Point</td><td>CAN</td><td>C</td><td>28</td><td>1996-01-22</td><td>165 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Cale Makar</td><td>CAN</td><td>D</td><td>26</td><td>1998-01-22</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Carter Hart</td><td>CAN</td><td>G</td><td>26</td><td>1998-01-22</td><td>181 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Connor Bedard</td><td>CAN</td><td>C</td><td>19</td><td>2005-01-02</td><td>185 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Connor McDavid</td><td>CAN</td><td>C</td><td>27</td><td>1997-01-22</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Drew Doughty</td><td>CAN</td><td>D</td><td>35</td><td>1989-01-22</td><td>212 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jeff Skinner</td><td>CAN</td><td>LW</td><td>32</td><td>1992-01-22</td><td>193 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jordan Binnington</td><td>CAN</td><td>G</td><td>31</td><td>1993-01-22</td><td>160 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Mathew Barzal</td><td>CAN</td><td>C/RW</td><td>27</td><td>1997-01-22</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Matt Murray</td><td>CAN</td><td>G</td><td>30</td><td>1994-01-22</td><td>179 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Mitchell Marner</td><td>CAN</td><td>C/RW</td><td>27</td><td>1997-01-22</td><td>170 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Nathan MacKinnon</td><td>CAN</td><td>C/RW</td><td>29</td><td>1995-01-22</td><td>182 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Noah Dobson</td><td>CAN</td><td>D</td><td>24</td><td>2000-01-22</td><td>183 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Owen Power</td><td>CAN</td><td>D</td><td>22</td><td>2002-01-02</td><td>218 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Robby Fabbri</td><td>CAN</td><td>C/LW</td><td>28</td><td>1996-01-22</td><td>170 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Robert Thomas</td><td>CAN</td><td>C/RW</td><td>25</td><td>1999-01-22</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Ryan Nugent-Hopkins</td><td>CAN</td><td>C/LW</td><td>31</td><td>1993-01-22</td><td>155 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Sean Monahan</td><td>CAN</td><td>C</td><td>30</td><td>1994-01-22</td><td>187 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Shea Theodore</td><td>CAN</td><td>D</td><td>29</td><td>1995-01-22</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Sidney Crosby</td><td>CAN</td><td>C</td><td>37</td><td>1987-01-22</td><td>200 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Steven Stamkos</td><td>CAN</td><td>C/LW/RW</td><td>34</td><td>1990-01-22</td><td>188 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Travis Konecny</td><td>CAN</td><td>LW/RW</td><td>27</td><td>1997-01-02</td><td>174 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>28,6</td><td>186 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>$500,000</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_USA"><a id="ÉTATS-UNIS">ÉTATS-UNIS</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">ÉTATS-UNIS Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#ÉTATS-UNIS">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#ÉTATS-UNIS">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#ÉTATS-UNIS">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#ÉTATS-UNIS">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#ÉTATS-UNIS">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#ÉTATS-UNIS">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#ÉTATS-UNIS">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#ÉTATS-UNIS">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#ÉTATS-UNIS">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#ÉTATS-UNIS">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#ÉTATS-UNIS">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#ÉTATS-UNIS">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ÉTATS-UNIS');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ÉTATS-UNIS" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Adam Fox</td><td>USA</td><td>D</td><td>26</td><td>1998-01-02</td><td>181 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Alex DeBrincat</td><td>USA</td><td>LW/RW</td><td>27</td><td>1997-01-22</td><td>165 Lbs</td><td>5 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Alex Galchenyuk</td><td>USA</td><td>C/LW/RW</td><td>30</td><td>1994-01-22</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Auston Matthews</td><td>USA</td><td>C</td><td>27</td><td>1997-01-22</td><td>216 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Brock Boeser</td><td>USA</td><td>RW</td><td>27</td><td>1997-01-22</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Cam Fowler</td><td>CAN</td><td>D</td><td>33</td><td>1991-01-22</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Charlie McAvoy</td><td>USA</td><td>D</td><td>27</td><td>1997-01-22</td><td>207 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Clayton Keller</td><td>USA</td><td>C/LW/RW</td><td>26</td><td>1998-01-22</td><td>168 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Cole Cassels</td><td>USA</td><td>C</td><td>29</td><td>1995-01-22</td><td>178 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Connor Hellebuyck</td><td>USA</td><td>G</td><td>31</td><td>1993-01-22</td><td>200 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Dylan Larkin</td><td>USA</td><td>C/LW</td><td>28</td><td>1996-01-22</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jack Eichel</td><td>USA</td><td>C</td><td>28</td><td>1996-01-22</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jack Hughes</td><td>USA</td><td>C/LW</td><td>23</td><td>2001-01-22</td><td>176 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jacob Trouba</td><td>USA</td><td>D</td><td>30</td><td>1994-01-22</td><td>183 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jake Guentzel</td><td>USA</td><td>C/LW</td><td>30</td><td>1994-01-22</td><td>168 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jeremy Swayman</td><td>USA</td><td>G</td><td>26</td><td>1998-01-02</td><td>194 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Kailer Yamamoto</td><td>USA</td><td>LW/RW</td><td>26</td><td>1998-01-02</td><td>159 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Kyle Connor</td><td>USA</td><td>LW</td><td>28</td><td>1996-01-22</td><td>183 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Matt Boldy</td><td>USA</td><td>LW/RW</td><td>23</td><td>2001-01-02</td><td>201 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Matthew Tkachuk</td><td>USA</td><td>LW/RW</td><td>27</td><td>1997-01-22</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Noah Hanifin</td><td>USA</td><td>D</td><td>27</td><td>1997-01-22</td><td>203 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Seth Jones</td><td>USA</td><td>D</td><td>30</td><td>1994-01-22</td><td>205 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Thatcher Demko</td><td>USA</td><td>G</td><td>29</td><td>1995-01-22</td><td>192 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Zachary Werenski</td><td>USA</td><td>D</td><td>27</td><td>1997-01-22</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>27,7</td><td>191 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>$500,000</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_FIN"><a id="FINLANDE">FINLANDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">FINLANDE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#FINLANDE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#FINLANDE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#FINLANDE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#FINLANDE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#FINLANDE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#FINLANDE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#FINLANDE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#FINLANDE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#FINLANDE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#FINLANDE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#FINLANDE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#FINLANDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FINLANDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FINLANDE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Aleksander Barkov</td><td>FIN</td><td>C</td><td>29</td><td>1995-01-22</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Anton Lundell</td><td>FIN</td><td>C</td><td>23</td><td>2001-01-02</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Artturi Lehkonen</td><td>FIN</td><td>LW/RW</td><td>29</td><td>1995-01-22</td><td>176 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Eeli Tolvanen</td><td>FIN</td><td>LW/RW</td><td>25</td><td>1999-01-02</td><td>192 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Esa Lindell</td><td>FIN</td><td>D</td><td>30</td><td>1994-01-22</td><td>216 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jesperi Kotkaniemi</td><td>FIN</td><td>C/LW</td><td>24</td><td>2000-01-22</td><td>187 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jesse Puljujarvi</td><td>FIN</td><td>LW/RW</td><td>26</td><td>1998-01-22</td><td>203 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Joel Kiviranta</td><td>FIN</td><td>LW/RW</td><td>28</td><td>1996-01-22</td><td>181 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Juho Lammikko</td><td>FIN</td><td>C/LW</td><td>28</td><td>1996-01-02</td><td>203 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Julius Honka</td><td>FIN</td><td>D</td><td>29</td><td>1995-01-22</td><td>181 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Juuse Saros</td><td>FIN</td><td>G</td><td>29</td><td>1995-01-22</td><td>179 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Kaapo Kähkönen</td><td>FIN</td><td>G</td><td>28</td><td>1996-01-02</td><td>216 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Kaapo Kakko</td><td>FIN</td><td>RW</td><td>23</td><td>2001-01-22</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Markus Nutivaara</td><td>FIN</td><td>D</td><td>30</td><td>1994-01-22</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Mikael Granlund</td><td>FIN</td><td>C/LW/RW</td><td>32</td><td>1992-01-22</td><td>169 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Mikko Rantanen</td><td>FIN</td><td>C/LW/RW</td><td>28</td><td>1996-01-22</td><td>212 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Miro Heiskanen</td><td>FIN</td><td>D</td><td>25</td><td>1999-01-22</td><td>170 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Olli Maatta</td><td>FIN</td><td>D</td><td>30</td><td>1994-01-22</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Patrik Laine</td><td>FIN</td><td>LW/RW</td><td>26</td><td>1998-01-22</td><td>205 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Rasmus Ristolainen</td><td>FIN</td><td>D</td><td>30</td><td>1994-01-02</td><td>219 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Sebastian Aho</td><td>FIN</td><td>C/LW/RW</td><td>27</td><td>1997-01-22</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Teuvo Teravainen</td><td>FIN</td><td>C/LW/RW</td><td>30</td><td>1994-01-22</td><td>185 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Ukko-Pekka Luukkonen</td><td>FIN</td><td>G</td><td>25</td><td>1999-01-02</td><td>196 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Ville Pokka</td><td>FIN</td><td>D</td><td>30</td><td>1994-01-22</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>27,7</td><td>193 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>$500,000</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_LET"><a id="LETTONIE">LETTONIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">LETTONIE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#LETTONIE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#LETTONIE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#LETTONIE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#LETTONIE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#LETTONIE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#LETTONIE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#LETTONIE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#LETTONIE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#LETTONIE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#LETTONIE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#LETTONIE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#LETTONIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LETTONIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LETTONIE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Arturs Silovs</td><td>LAT</td><td>G</td><td>23</td><td>2001-01-02</td><td>216 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Arvils Bergmanis</td><td>LAT</td><td>D</td><td>25</td><td>1999-01-02</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Dans Locmelis</td><td>LAT</td><td>C</td><td>20</td><td>2004-01-02</td><td>179 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Eduards Tralmaks</td><td>LAT</td><td>C/LW/RW</td><td>27</td><td>1997-01-02</td><td>209 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Elvis Merzlikins</td><td>LET</td><td>G</td><td>30</td><td>1994-01-22</td><td>185 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Janis Jaks</td><td>LAT</td><td>D</td><td>29</td><td>1995-01-02</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Karlis Cukste</td><td>LET</td><td>D</td><td>27</td><td>1997-01-22</td><td>220 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Kaspars Daugavins</td><td>LAT</td><td>C/LW/RW</td><td>36</td><td>1988-01-02</td><td>220 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Kristaps Zile</td><td>LAT</td><td>D</td><td>27</td><td>1997-01-02</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Kristers Gudlevskis</td><td>LAT</td><td>G</td><td>32</td><td>1992-01-02</td><td>214 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Martins Dzierkals</td><td>LAT</td><td>RW</td><td>27</td><td>1997-01-22</td><td>170 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Miks Indrasis</td><td>LAT</td><td>C/LW/RW</td><td>34</td><td>1990-01-02</td><td>198 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Jevpalovs</td><td>LET</td><td>LW/RW</td><td>30</td><td>1994-01-22</td><td>200 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Oskars Batna</td><td>LAT</td><td>C/LW</td><td>29</td><td>1995-01-02</td><td>234 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Raivis Ansons</td><td>LAT</td><td>LW/RW</td><td>22</td><td>2002-01-02</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Ralfs Bergmanis</td><td>LAT</td><td>D</td><td>22</td><td>2002-01-02</td><td>172 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Rihards Bukarts</td><td>LET</td><td>LW/RW</td><td>29</td><td>1995-01-22</td><td>192 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Roberts Mamcics</td><td>LAT</td><td>D</td><td>29</td><td>1995-01-02</td><td>231 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Rodrigo Abols</td><td>LET</td><td>C</td><td>28</td><td>1996-01-22</td><td>187 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Rudolfs Balcers</td><td>LET</td><td>LW/RW</td><td>27</td><td>1997-01-22</td><td>174 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Sandis Vilmanis</td><td>LAT</td><td>LW/RW</td><td>20</td><td>2004-01-02</td><td>192 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Theodor Blueger</td><td>LAT</td><td>C/LW/RW</td><td>30</td><td>1994-01-22</td><td>165 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Uvis Balinskis</td><td>LAT</td><td>D</td><td>28</td><td>1996-01-02</td><td>196 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Zemgus Girgensons</td><td>LET</td><td>C/LW/RW</td><td>30</td><td>1994-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>27,5</td><td>196 Lbs</td><td>6 ft 2</td><td>1,00 years</td><td>$500,000</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_QUÉ"><a id="QUÉBEC">QUÉBEC</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">QUÉBEC Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#QUÉBEC">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#QUÉBEC">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#QUÉBEC">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#QUÉBEC">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#QUÉBEC">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#QUÉBEC">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#QUÉBEC">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#QUÉBEC">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#QUÉBEC">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#QUÉBEC">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#QUÉBEC">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#QUÉBEC">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QUÉBEC');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QUÉBEC" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>A.J. Greer</td><td>CAN</td><td>LW</td><td>28</td><td>1996-01-22</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Alexandre Carrier</td><td>CAN</td><td>D</td><td>28</td><td>1996-01-22</td><td>174 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Alexis Lafrenière</td><td>CAN</td><td>LW/RW</td><td>23</td><td>2001-01-02</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Anthony Duclair</td><td>CAN</td><td>LW/RW</td><td>29</td><td>1995-01-22</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Anthony Mantha</td><td>CAN</td><td>LW/RW</td><td>30</td><td>1994-01-22</td><td>225 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Devon Levi</td><td>CAN</td><td>G</td><td>23</td><td>2001-01-02</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Émile Poirier</td><td>CAN</td><td>C/LW</td><td>30</td><td>1994-01-02</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Frédérik Gauthier</td><td>CAN</td><td>C</td><td>29</td><td>1995-01-02</td><td>238 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Hendrix Lapierre</td><td>CAN</td><td>C</td><td>22</td><td>2002-01-02</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jonathan Drouin</td><td>CAN</td><td>C/LW/RW</td><td>29</td><td>1995-01-22</td><td>186 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jonathan Huberdeau</td><td>CAN</td><td>LW/RW</td><td>31</td><td>1993-01-22</td><td>171 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Kevin Poulin</td><td>CAN</td><td>G</td><td>34</td><td>1990-01-22</td><td>211 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Kris Letang</td><td>CAN</td><td>D</td><td>37</td><td>1987-01-22</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Mavrik Bourque</td><td>CAN</td><td>C</td><td>22</td><td>2002-01-02</td><td>185 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Maxime Comtois</td><td>CAN</td><td>LW</td><td>25</td><td>1999-01-22</td><td>207 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Maxime Lajoie</td><td>CAN</td><td>D</td><td>27</td><td>1997-01-22</td><td>183 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Mike Matheson</td><td>CAN</td><td>D</td><td>30</td><td>1994-01-22</td><td>175 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Nicolas Roy</td><td>CAN</td><td>C</td><td>27</td><td>1997-01-02</td><td>207 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Pierre-Luc Dubois</td><td>CAN</td><td>C/LW</td><td>26</td><td>1998-01-22</td><td>207 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Girard</td><td>CAN</td><td>D</td><td>26</td><td>1998-01-22</td><td>161 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Montembeault</td><td>CAN</td><td>G</td><td>28</td><td>1996-01-02</td><td>207 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Morin</td><td>CAN</td><td>LW/D</td><td>29</td><td>1995-01-22</td><td>206 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Thomas Chabot</td><td>CAN</td><td>D</td><td>27</td><td>1997-01-22</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>William Carrier</td><td>CAN</td><td>C/LW</td><td>30</td><td>1994-01-22</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>27,9</td><td>195 Lbs</td><td>6 ft 2</td><td>1,00 years</td><td>$500,000</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_RUS"><a id="RUSSIE">RUSSIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">RUSSIE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#RUSSIE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#RUSSIE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#RUSSIE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#RUSSIE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#RUSSIE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#RUSSIE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#RUSSIE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#RUSSIE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#RUSSIE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#RUSSIE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#RUSSIE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#RUSSIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RUSSIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RUSSIE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Alex Ovechkin</td><td>RUS</td><td>LW/RW</td><td>39</td><td>1985-01-22</td><td>233 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Alexander Burmistrov</td><td>RUS</td><td>C/LW/RW</td><td>33</td><td>1991-01-22</td><td>180 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Andrei Svechnikov</td><td>RUS</td><td>LW/RW</td><td>24</td><td>2000-01-22</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Andrey Kuzmenko</td><td>RUS</td><td>LW/RW</td><td>28</td><td>1996-01-02</td><td>194 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Andrey Vasilevskiy</td><td>RUS</td><td>G</td><td>30</td><td>1994-01-22</td><td>204 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Denis Guryanov</td><td>RUS</td><td>LW/RW</td><td>27</td><td>1997-01-02</td><td>201 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Dmitri Kulikov</td><td>RUS</td><td>D</td><td>34</td><td>1990-01-22</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Dmitri Orlov</td><td>RUS</td><td>D</td><td>33</td><td>1991-01-22</td><td>197 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Igor Shestyorkin</td><td>RUS</td><td>G</td><td>29</td><td>1995-01-22</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Ilya Mikheyev</td><td>RUS</td><td>LW/RW</td><td>30</td><td>1994-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Ivan Provorov</td><td>RUS</td><td>D</td><td>27</td><td>1997-01-22</td><td>201 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Kirill Kaprizov</td><td>RUS</td><td>LW/RW</td><td>27</td><td>1997-01-22</td><td>192 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Matvei Michkov</td><td>RUS</td><td>RW</td><td>20</td><td>2004-01-02</td><td>176 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Mikhail Grigorenko</td><td>RUS</td><td>C/LW/RW</td><td>30</td><td>1994-01-22</td><td>200 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Mikhail Sergachev</td><td>RUS</td><td>D</td><td>26</td><td>1998-01-22</td><td>216 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Kucherov</td><td>RUS</td><td>RW</td><td>31</td><td>1993-01-22</td><td>174 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Nesterov</td><td>RUS</td><td>D</td><td>31</td><td>1993-01-22</td><td>198 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Zadorov</td><td>RUS</td><td>D</td><td>29</td><td>1995-01-22</td><td>236 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Pavel Buchnevich</td><td>RUS</td><td>LW/RW</td><td>29</td><td>1995-01-22</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Sergei Bobrovsky</td><td>RUS</td><td>G</td><td>36</td><td>1988-01-22</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Valeri Nichushkin</td><td>RUS</td><td>LW/RW</td><td>29</td><td>1995-01-22</td><td>202 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Vladimir Tarasenko</td><td>RUS</td><td>C/LW/RW</td><td>33</td><td>1991-01-22</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Vladislav Kamenev</td><td>RUS</td><td>C/LW</td><td>28</td><td>1996-01-22</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Vyacheslav Voynov</td><td>RUS</td><td>D</td><td>34</td><td>1990-01-22</td><td>193 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>29,9</td><td>198 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>$500,000</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_SLO"><a id="SLOVAQUIE">SLOVAQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">SLOVAQUIE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#SLOVAQUIE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#SLOVAQUIE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#SLOVAQUIE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#SLOVAQUIE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#SLOVAQUIE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#SLOVAQUIE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#SLOVAQUIE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#SLOVAQUIE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#SLOVAQUIE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#SLOVAQUIE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#SLOVAQUIE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#SLOVAQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SLOVAQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SLOVAQUIE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Adam Gajan</td><td>SVK</td><td>G</td><td>20</td><td>2004-01-02</td><td>187 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Adam Ruzicka</td><td>SVK</td><td>C/LW/RW</td><td>25</td><td>1999-01-02</td><td>203 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Christian Jaros</td><td>SVK</td><td>D</td><td>28</td><td>1996-01-22</td><td>201 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Dalibor Dvorský</td><td>SVK</td><td>C/RW</td><td>19</td><td>2005-01-02</td><td>203 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>David Griger</td><td>SVK</td><td>C/RW</td><td>30</td><td>1994-01-22</td><td>176 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Erik Cernak</td><td>SVK</td><td>D</td><td>27</td><td>1997-01-22</td><td>225 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jaroslav Halak</td><td>SVK</td><td>G</td><td>39</td><td>1985-01-22</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Juraj Slafkovsky</td><td>SVK</td><td>LW/RW</td><td>20</td><td>2004-01-02</td><td>238 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Kristian Pospisil</td><td>SVK</td><td>LW</td><td>28</td><td>1996-01-02</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Marek Hrivík</td><td>SVK</td><td>C</td><td>33</td><td>1991-01-02</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Marian Studenic</td><td>SVK</td><td>RW</td><td>26</td><td>1998-01-02</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Marko Dano</td><td>SVK</td><td>C/LW/RW</td><td>30</td><td>1994-01-22</td><td>183 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Martin Fehervary</td><td>SVK</td><td>D</td><td>25</td><td>1999-01-02</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Martin Gernat</td><td>SVK</td><td>D</td><td>31</td><td>1993-01-22</td><td>191 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Martin Marincin</td><td>SVK</td><td>D</td><td>32</td><td>1992-01-22</td><td>187 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Martin Pospisil</td><td>SVK</td><td>RW</td><td>25</td><td>1999-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Martin Reway</td><td>SVK</td><td>C/LW</td><td>29</td><td>1995-01-22</td><td>158 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Maxim Cajkovic</td><td>SVK</td><td>RW</td><td>23</td><td>2001-01-02</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Michal Kristof</td><td>SVK</td><td>C</td><td>31</td><td>1993-01-02</td><td>159 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Peter Cehlarik</td><td>SVK</td><td>LW/RW</td><td>29</td><td>1995-01-22</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Hlavaj</td><td>SVK</td><td>G</td><td>23</td><td>2001-01-02</td><td>218 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Knazko</td><td>SVK</td><td>D</td><td>22</td><td>2002-01-02</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Simon Nemec</td><td>SVK</td><td>D</td><td>20</td><td>2004-01-02</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Tomas Tatar</td><td>SVK</td><td>C/LW/RW</td><td>34</td><td>1990-01-22</td><td>176 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>27,0</td><td>194 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>$500,000</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_SWE"><a id="SUÈDE">SUÈDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">SUÈDE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#SUÈDE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#SUÈDE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#SUÈDE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#SUÈDE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#SUÈDE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#SUÈDE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#SUÈDE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#SUÈDE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#SUÈDE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#SUÈDE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#SUÈDE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#SUÈDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUÈDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUÈDE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Adam Boqvist</td><td>SWE</td><td>D</td><td>24</td><td>2000-01-22</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Adam Larsson</td><td>SWE</td><td>D</td><td>32</td><td>1992-01-22</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Alexander Holtz</td><td>SWE</td><td>RW</td><td>22</td><td>2002-01-02</td><td>194 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Alexander Wennberg</td><td>SWE</td><td>C</td><td>30</td><td>1994-01-22</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Elias Lindholm</td><td>SWE</td><td>C/RW</td><td>30</td><td>1994-01-22</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Elias Pettersson</td><td>SWE</td><td>C/LW/RW</td><td>26</td><td>1998-01-22</td><td>176 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Erik Karlsson</td><td>SWE</td><td>D</td><td>34</td><td>1990-01-22</td><td>175 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Fabian Zetterlund</td><td>SWE</td><td>LW</td><td>25</td><td>1999-01-02</td><td>220 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Filip Forsberg</td><td>SWE</td><td>LW/RW</td><td>30</td><td>1994-01-22</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Filip Gustavsson</td><td>SWE</td><td>G</td><td>26</td><td>1998-01-22</td><td>185 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Gabriel Landeskog</td><td>SWE</td><td>C/LW</td><td>32</td><td>1992-01-22</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Hampus Lindholm</td><td>SWE</td><td>D</td><td>30</td><td>1994-01-22</td><td>195 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jacob Markstrom</td><td>SWE</td><td>G</td><td>34</td><td>1990-01-22</td><td>178 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jesper Bratt</td><td>SWE</td><td>LW/RW</td><td>26</td><td>1998-01-22</td><td>174 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>John Klingberg</td><td>SWE</td><td>D</td><td>32</td><td>1992-01-22</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Leo Carlsson</td><td>SWE</td><td>C/RW</td><td>20</td><td>2004-01-02</td><td>198 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Lucas Raymond</td><td>SWE</td><td>RW</td><td>22</td><td>2002-01-02</td><td>183 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Mika Zibanejad</td><td>SWE</td><td>C</td><td>31</td><td>1993-01-22</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Rasmus Dahlin</td><td>SWE</td><td>D</td><td>24</td><td>2000-01-22</td><td>181 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Robin Lehner</td><td>SWE</td><td>G</td><td>33</td><td>1991-01-22</td><td>220 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Victor Hedman</td><td>SWE</td><td>D</td><td>34</td><td>1990-01-22</td><td>229 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Viktor Arvidsson</td><td>SWE</td><td>LW/RW</td><td>31</td><td>1993-01-22</td><td>181 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>William Karlsson</td><td>SWE</td><td>C/LW</td><td>31</td><td>1993-01-22</td><td>163 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>William Nylander</td><td>SWE</td><td>C/LW/RW</td><td>28</td><td>1996-01-22</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>28,6</td><td>190 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>$500,000</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_SUI"><a id="SUISSE">SUISSE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">SUISSE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#SUISSE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#SUISSE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#SUISSE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#SUISSE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#SUISSE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#SUISSE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#SUISSE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#SUISSE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#SUISSE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#SUISSE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#SUISSE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#SUISSE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUISSE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUISSE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Akira Schmid</td><td>SUI</td><td>G</td><td>24</td><td>2000-01-02</td><td>205 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Andres Ambühl</td><td>SUI</td><td>C/LW/RW</td><td>41</td><td>1983-01-02</td><td>185 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Benjamin Conz</td><td>SUI</td><td>G</td><td>33</td><td>1991-01-22</td><td>198 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Calvin Thurkauf</td><td>SWI</td><td>C/LW</td><td>27</td><td>1997-01-02</td><td>212 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Christoph Bertschy</td><td>SWI</td><td>C/LW/RW</td><td>30</td><td>1994-01-22</td><td>185 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Damien Riat</td><td>SUI</td><td>C/LW/RW</td><td>27</td><td>1997-01-02</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Dean Kukan</td><td>SWI</td><td>D</td><td>31</td><td>1993-01-22</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Denis Malgin</td><td>SWI</td><td>C/RW</td><td>27</td><td>1997-01-22</td><td>176 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>J.J. Moser</td><td>SUI</td><td>D</td><td>24</td><td>2000-01-02</td><td>183 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jonas Siegenthaler</td><td>SWI</td><td>D</td><td>27</td><td>1997-01-02</td><td>218 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Kevin Fiala</td><td>CZE</td><td>LW/RW</td><td>28</td><td>1996-01-22</td><td>192 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Leonardo Genoni</td><td>SUI</td><td>G</td><td>37</td><td>1987-01-02</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Mirco Mueller</td><td>SWI</td><td>D</td><td>29</td><td>1995-01-22</td><td>184 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Nico Hischier</td><td>SUI</td><td>C</td><td>25</td><td>1999-01-22</td><td>179 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Nino Niederreiter</td><td>SWI</td><td>LW/RW</td><td>32</td><td>1992-01-22</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Noah Rod</td><td>SWI</td><td>C/LW/RW</td><td>28</td><td>1996-01-22</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Philipp Kurashev</td><td>SWI</td><td>C/LW/RW</td><td>25</td><td>1999-01-22</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Pius Suter</td><td>SWI</td><td>C/LW</td><td>28</td><td>1996-01-22</td><td>176 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Romain Loeffel</td><td>SUI</td><td>D</td><td>33</td><td>1991-01-02</td><td>187 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Roman Josi</td><td>SWI</td><td>D</td><td>34</td><td>1990-01-22</td><td>198 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Sven Andrighetto</td><td>SUI</td><td>C/LW/RW</td><td>31</td><td>1993-01-22</td><td>188 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Sven Baertschi</td><td>SWI</td><td>LW/RW</td><td>32</td><td>1992-01-22</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Tim Berni</td><td>SUI</td><td>D</td><td>24</td><td>2000-01-02</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Timo Meier</td><td>SWI</td><td>LW/RW</td><td>28</td><td>1996-01-22</td><td>184 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>29,4</td><td>191 Lbs</td><td>6 ft 0</td><td>1,00 years</td><td>$500,000</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_TCH"><a id="TCHÉQUIE">TCHÉQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">TCHÉQUIE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#TCHÉQUIE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#TCHÉQUIE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#TCHÉQUIE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#TCHÉQUIE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#TCHÉQUIE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#TCHÉQUIE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#TCHÉQUIE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#TCHÉQUIE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#TCHÉQUIE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#TCHÉQUIE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#TCHÉQUIE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#TCHÉQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TCHÉQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TCHÉQUIE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>David Jiricek</td><td>CZE</td><td>D</td><td>21</td><td>2003-01-02</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>David Musil</td><td>CAN</td><td>D</td><td>31</td><td>1993-01-22</td><td>203 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>David Pastrnak</td><td>TCH</td><td>LW/RW</td><td>28</td><td>1996-01-22</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Dominik Kubalik</td><td>CZE</td><td>LW/RW</td><td>29</td><td>1995-01-02</td><td>179 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Dominik Masin</td><td>TCH</td><td>D</td><td>28</td><td>1996-01-22</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Filip Chlapik</td><td>CZE</td><td>C</td><td>27</td><td>1997-01-22</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Filip Chytil</td><td>CZE</td><td>C</td><td>25</td><td>1999-01-02</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Filip Hronek</td><td>CZE</td><td>D</td><td>27</td><td>1997-01-22</td><td>170 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Filip Zadina</td><td>TCH</td><td>LW/RW</td><td>25</td><td>1999-01-22</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jakub Vrana</td><td>TCH</td><td>LW/RW</td><td>28</td><td>1996-01-22</td><td>196 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jakub Zboril</td><td>TCH</td><td>D</td><td>27</td><td>1997-01-02</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jiri Kulich</td><td>CZE</td><td>C/LW</td><td>20</td><td>2004-01-02</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Karel Vejmelka</td><td>CZE</td><td>G</td><td>28</td><td>1996-01-02</td><td>203 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Martin Necas</td><td>TCH</td><td>C/RW</td><td>25</td><td>1999-01-02</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Michal Neuvirth</td><td>CZE</td><td>G</td><td>36</td><td>1988-01-22</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Ondrej Kase</td><td>CZE</td><td>LW/RW</td><td>29</td><td>1995-01-22</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Pavel Zacha</td><td>CZE</td><td>C/LW/RW</td><td>27</td><td>1997-01-22</td><td>214 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Radek Faksa</td><td>TCH</td><td>C/LW</td><td>30</td><td>1994-01-22</td><td>202 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Radim Zohorna</td><td>CZE</td><td>C/LW/RW</td><td>28</td><td>1996-01-02</td><td>229 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Radko Gudas</td><td>CZE</td><td>D</td><td>34</td><td>1990-01-22</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Stanislav Svozil</td><td>CZE</td><td>D</td><td>21</td><td>2003-01-02</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Tomas Hertl</td><td>TCH</td><td>C/LW/RW</td><td>31</td><td>1993-01-22</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Tomas Nosek</td><td>CZE</td><td>C/LW</td><td>32</td><td>1992-01-02</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Vitek Vanecek</td><td>TCH</td><td>G</td><td>28</td><td>1996-01-22</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>27,7</td><td>196 Lbs</td><td>6 ft 2</td><td>1,00 years</td><td>$500,000</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_WOR"><a id="WORLD">WORLD</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">WORLD Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#WORLD">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#WORLD">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#WORLD">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#WORLD">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#WORLD">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#WORLD">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#WORLD">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#WORLD">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#WORLD">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#WORLD">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#WORLD">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#WORLD">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WORLD');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WORLD" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Alexandar Georgiyev</td><td>BUL</td><td>G</td><td>28</td><td>1996-01-22</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Alexandre Texier</td><td>FRA</td><td>C/LW/RW</td><td>25</td><td>1999-01-02</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Aliaksei Protas</td><td>BEL</td><td>C</td><td>23</td><td>2001-01-02</td><td>225 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Andre Burakovsky</td><td>SWE</td><td>LW/RW</td><td>29</td><td>1995-01-22</td><td>187 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Andrey Pedan</td><td>LIT</td><td>D</td><td>31</td><td>1993-01-22</td><td>214 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Arthur Kaliyev</td><td>UZB</td><td>LW/RW</td><td>23</td><td>2001-01-02</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Daniel Sprong</td><td>HOL</td><td>LW/RW</td><td>27</td><td>1997-01-22</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>David Reinbacher</td><td>AUT</td><td>D</td><td>20</td><td>2004-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Demid Yeremeyev</td><td>KAZ</td><td>G</td><td>25</td><td>1999-01-22</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Hafthor Sigrunarson</td><td>ISL</td><td>C</td><td>27</td><td>1997-01-22</td><td>154 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jermaine Loewen</td><td>JAM</td><td>LW/RW</td><td>26</td><td>1998-01-22</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Joachim Blichfeld</td><td>DEN</td><td>LW/RW</td><td>26</td><td>1998-01-22</td><td>187 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jordan Spence</td><td>AUS</td><td>D</td><td>23</td><td>2001-01-02</td><td>181 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Luca Sbisa</td><td>ITA</td><td>D</td><td>34</td><td>1990-01-22</td><td>207 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Mads Sogaard</td><td>DEN</td><td>G</td><td>24</td><td>2000-01-02</td><td>198 Lbs</td><td>6 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Marco Kasper</td><td>AUT</td><td>C</td><td>20</td><td>2004-01-02</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Marco Rossi</td><td>AUT</td><td>C</td><td>23</td><td>2001-01-02</td><td>183 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Marco Scandella</td><td>CAN</td><td>D</td><td>34</td><td>1990-01-22</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Nikolaj Ehlers</td><td>DEN</td><td>LW/RW</td><td>28</td><td>1996-01-02</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Oliver Bjorkstrand</td><td>DEN</td><td>LW/RW</td><td>29</td><td>1995-01-22</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Raman Hrabarenka</td><td>BEL</td><td>D</td><td>32</td><td>1992-01-22</td><td>212 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Stian Solberg</td><td>NOR</td><td>D</td><td>19</td><td>2005-01-02</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
<tr><td>Vadim Vasjonkin</td><td>EST</td><td>LW</td><td>28</td><td>1996-01-22</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$500,000</td><td>$500,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>26,3</td><td>194 Lbs</td><td>6 ft 2</td><td>1,00 years</td><td>$500,000</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<?php include "Footer.php";?>
