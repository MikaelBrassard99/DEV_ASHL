<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Pro Team PlayersInfo</title>
<script src="WC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - WC-STHS.bin - WC-STHSCareerStat.bin"/>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#ALLEMAGNE">ALLEMAGNE</a> | <a href="#CANADA">CANADA</a> | <a href="#DANEMARK">DANEMARK</a> | <a href="#FINLANDE">FINLANDE</a> | <a href="#LETTONIE">LETTONIE</a> | <a href="#RUSSIE">RUSSIE</a> | <a href="#SLOVAQUIE">SLOVAQUIE</a> | <a href="#SUÈDE">SUÈDE</a> | <a href="#SUISSE">SUISSE</a> | <a href="#TCHÉQUIE">TCHÉQUIE</a> | <a href="#USA">USA</a> | <a href="#WORLD">WORLD</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamPlayerInfoPro_GER"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">ALLEMAGNE Page</a> ]
[ <a href="WC-ProTeamRoster.php#ALLEMAGNE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#ALLEMAGNE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#ALLEMAGNE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#ALLEMAGNE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#ALLEMAGNE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#ALLEMAGNE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#ALLEMAGNE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#ALLEMAGNE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#ALLEMAGNE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#ALLEMAGNE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#ALLEMAGNE">Team History</a> ]
[ <a href="WC-TeamRecords.php#ALLEMAGNE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ALLEMAGNE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ALLEMAGNE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Bernhard Ebner</td><td>GER</td><td>D</td><td>33</td><td>1989-01-02</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Brooks Macek</td><td>GER</td><td>C/RW</td><td>31</td><td>1991-01-02</td><td>201 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dominik Bokk</td><td>GER</td><td>LW/RW</td><td>23</td><td>1999-01-22</td><td>181 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dominik Kahun</td><td>GER</td><td>C/LW</td><td>28</td><td>1994-01-22</td><td>165 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dustin Strahlmeier</td><td>GER</td><td>G</td><td>31</td><td>1991-01-02</td><td>192 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>JJ Peterka</td><td>GER</td><td>C/LW/RW</td><td>21</td><td>2001-01-02</td><td>192 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Julian Napravnik</td><td>GER</td><td>RW</td><td>26</td><td>1996-01-02</td><td>174 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Leon Draisaitl</td><td>GER</td><td>C/LW/RW</td><td>28</td><td>1994-01-22</td><td>216 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Leon Gawanke</td><td>GER</td><td>D</td><td>24</td><td>1998-01-02</td><td>198 Lbs</td><td>6 ft1</td><td>19</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Leon Hüttl</td><td>GER</td><td>D</td><td>23</td><td>1999-01-02</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Lukas Reichel</td><td>GER</td><td>LW/RW</td><td>21</td><td>2001-01-02</td><td>170 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marc Michaelis</td><td>GER</td><td>C/LW</td><td>28</td><td>1994-01-02</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marcel Brandt</td><td>GER</td><td>LW/D</td><td>31</td><td>1991-01-02</td><td>190 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marcel Noebels</td><td>GER</td><td>C/LW</td><td>31</td><td>1991-01-02</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marcus Weber</td><td>GER</td><td>D</td><td>31</td><td>1991-01-02</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mathias Niederberger</td><td>GER</td><td>G</td><td>31</td><td>1991-01-02</td><td>174 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Maximilian Kammerer</td><td>GER</td><td>C/LW</td><td>27</td><td>1995-01-02</td><td>165 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Moritz Seider</td><td>GER</td><td>D</td><td>22</td><td>2000-01-02</td><td>207 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nico Sturm</td><td>GER</td><td>C/LW</td><td>28</td><td>1994-01-02</td><td>207 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Philipp Grubauer</td><td>GER</td><td>G</td><td>32</td><td>1990-01-22</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Tim Stützle</td><td>GER</td><td>C/LW/RW</td><td>21</td><td>2001-01-02</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Tom Kuhnhackl</td><td>GER</td><td>LW</td><td>31</td><td>1991-01-22</td><td>183 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Yasin Ehliz</td><td>GER</td><td>LW/RW</td><td>31</td><td>1991-01-02</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Yegor Alanov</td><td>GER</td><td>D</td><td>23</td><td>1999-01-02</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>27,3</td><td>189 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>500 000 $</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_CAN"><a id="CANADA">CANADA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">CANADA Page</a> ]
[ <a href="WC-ProTeamRoster.php#CANADA">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#CANADA">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#CANADA">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#CANADA">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#CANADA">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#CANADA">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#CANADA">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#CANADA">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#CANADA">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#CANADA">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#CANADA">Team History</a> ]
[ <a href="WC-TeamRecords.php#CANADA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CANADA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CANADA" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Aaron Ekblad</td><td>CAN</td><td>D</td><td>27</td><td>1995-01-22</td><td>216 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Alex Pietrangelo</td><td>CAN</td><td>D</td><td>33</td><td>1989-01-22</td><td>206 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Brayden Point</td><td>CAN</td><td>C</td><td>27</td><td>1995-01-22</td><td>165 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Cale Makar</td><td>CAN</td><td>D</td><td>25</td><td>1997-01-22</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Carey Price</td><td>CAN</td><td>G</td><td>36</td><td>1986-01-22</td><td>219 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Carter Hart</td><td>CAN</td><td>G</td><td>25</td><td>1997-01-22</td><td>181 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Connor McDavid</td><td>CAN</td><td>C</td><td>26</td><td>1996-01-22</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Danton Heinen</td><td>CAN</td><td>C/LW/RW</td><td>28</td><td>1994-01-21</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Drew Doughty</td><td>CAN</td><td>D</td><td>34</td><td>1988-01-22</td><td>212 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jeff Skinner</td><td>CAN</td><td>LW</td><td>31</td><td>1991-01-22</td><td>193 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Kris Letang</td><td>CAN</td><td>D</td><td>36</td><td>1986-01-22</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mathew Barzal</td><td>CAN</td><td>C/RW</td><td>26</td><td>1996-01-22</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Matt Duchene</td><td>CAN</td><td>C/RW</td><td>32</td><td>1990-01-22</td><td>200 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Matt Murray</td><td>CAN</td><td>G</td><td>29</td><td>1993-01-22</td><td>179 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mitchell Marner</td><td>CAN</td><td>C/RW</td><td>26</td><td>1996-01-22</td><td>170 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nathan MacKinnon</td><td>CAN</td><td>C/RW</td><td>28</td><td>1994-01-22</td><td>182 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Ryan Nugent-Hopkins</td><td>CAN</td><td>C/LW</td><td>30</td><td>1992-01-22</td><td>155 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Girard</td><td>CAN</td><td>D</td><td>25</td><td>1997-01-22</td><td>161 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Sean Monahan</td><td>CAN</td><td>C</td><td>29</td><td>1993-01-22</td><td>187 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Shea Theodore</td><td>CAN</td><td>D</td><td>28</td><td>1994-01-22</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Sidney Crosby</td><td>CAN</td><td>C</td><td>36</td><td>1986-01-22</td><td>200 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Steven Stamkos</td><td>CAN</td><td>C/LW/RW</td><td>33</td><td>1989-01-22</td><td>188 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Taylor Hall</td><td>CAN</td><td>LW</td><td>32</td><td>1990-01-22</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Travis Konecny</td><td>CAN</td><td>LW/RW</td><td>26</td><td>1996-01-02</td><td>174 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>29,5</td><td>189 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>500 000 $</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_DAN"><a id="DANEMARK">DANEMARK</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">DANEMARK Page</a> ]
[ <a href="WC-ProTeamRoster.php#DANEMARK">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#DANEMARK">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#DANEMARK">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#DANEMARK">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#DANEMARK">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#DANEMARK">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#DANEMARK">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#DANEMARK">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#DANEMARK">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#DANEMARK">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#DANEMARK">Team History</a> ]
[ <a href="WC-TeamRecords.php#DANEMARK">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DANEMARK');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DANEMARK" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Alexander True</td><td>DEN</td><td>C</td><td>26</td><td>1996-01-02</td><td>201 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Frans Nielsen</td><td>DNK</td><td>C/LW</td><td>39</td><td>1983-01-22</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Frederik Andersen</td><td>DEN</td><td>G</td><td>34</td><td>1988-01-22</td><td>230 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jesper Jensen Aabo</td><td>DEN</td><td>D</td><td>32</td><td>1990-01-02</td><td>196 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Joachim Blichfeld</td><td>DEN</td><td>LW/RW</td><td>25</td><td>1997-01-22</td><td>187 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jonas Røndbjerg</td><td>DEN</td><td>LW/RW</td><td>24</td><td>1998-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Lars Eller</td><td>DNK</td><td>C/LW/RW</td><td>34</td><td>1988-01-22</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mads Eller</td><td>DEN</td><td>C/LW</td><td>28</td><td>1994-01-22</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mads Søgaard</td><td>DEN</td><td>G</td><td>23</td><td>1999-01-02</td><td>198 Lbs</td><td>6 ft7</td><td>2</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Markus Lauridsen</td><td>DEN</td><td>D</td><td>32</td><td>1990-01-02</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mathias From</td><td>DEN</td><td>LW/RW</td><td>26</td><td>1996-01-22</td><td>187 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Matias Lassen</td><td>DEN</td><td>D</td><td>27</td><td>1995-01-02</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mikkel Bødker</td><td>DEN</td><td>LW/RW</td><td>34</td><td>1988-01-02</td><td>207 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nicklas Jensen</td><td>DEN</td><td>RW</td><td>30</td><td>1992-01-22</td><td>202 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nikolaj Ehlers</td><td>DEN</td><td>LW/RW</td><td>27</td><td>1995-01-02</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Oliver Bjorkstrand</td><td>DEN</td><td>LW/RW</td><td>28</td><td>1994-01-22</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Oliver Joakim Larsen</td><td>DEN</td><td>D</td><td>25</td><td>1997-01-02</td><td>207 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Oliver Lauridsen</td><td>DEN</td><td>D</td><td>34</td><td>1988-01-02</td><td>205 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Oscar Fisker Mølgaard</td><td>DEN</td><td>C</td><td>18</td><td>2004-01-02</td><td>168 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Patrick Bjorkstrand</td><td>DEN</td><td>C/LW/RW</td><td>31</td><td>1991-01-22</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Patrick Russell</td><td>DEN</td><td>RW</td><td>30</td><td>1992-01-02</td><td>203 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Philip Larsen</td><td>DNK</td><td>D</td><td>34</td><td>1988-01-22</td><td>183 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>22</td><td>29,1</td><td>193 Lbs</td><td>6 ft 2</td><td>1,00 years</td><td>500 000 $</td>
<td>22</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_FIN"><a id="FINLANDE">FINLANDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">FINLANDE Page</a> ]
[ <a href="WC-ProTeamRoster.php#FINLANDE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#FINLANDE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#FINLANDE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#FINLANDE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#FINLANDE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#FINLANDE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#FINLANDE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#FINLANDE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#FINLANDE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#FINLANDE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#FINLANDE">Team History</a> ]
[ <a href="WC-TeamRecords.php#FINLANDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FINLANDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FINLANDE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Ahti Oksanen</td><td>FIN</td><td>LW</td><td>30</td><td>1992-01-22</td><td>207 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Aleksander Barkov</td><td>FIN</td><td>C</td><td>28</td><td>1994-01-22</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Antti Suomela</td><td>FIN</td><td>C</td><td>29</td><td>1993-01-22</td><td>172 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Eetu Luostarinen</td><td>FIN</td><td>C</td><td>25</td><td>1997-01-02</td><td>190 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Esa Lindell</td><td>FIN</td><td>D</td><td>29</td><td>1993-01-22</td><td>216 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jesse Puljujarvi</td><td>FIN</td><td>LW/RW</td><td>25</td><td>1997-01-22</td><td>203 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Joel Kiviranta</td><td>FIN</td><td>LW/RW</td><td>27</td><td>1995-01-22</td><td>181 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Juho Lammikko</td><td>FIN</td><td>C/LW</td><td>27</td><td>1995-01-02</td><td>203 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Julis Nättinen</td><td>FIN</td><td>C/LW/RW</td><td>26</td><td>1996-01-02</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Julius Honka</td><td>FIN</td><td>D</td><td>28</td><td>1994-01-22</td><td>181 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Juuse Saros</td><td>FIN</td><td>G</td><td>28</td><td>1994-01-22</td><td>179 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Kaapo Kähkönen</td><td>FIN</td><td>G</td><td>27</td><td>1995-01-02</td><td>214 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Markus Nutivaara</td><td>FIN</td><td>D</td><td>29</td><td>1993-01-22</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Miikka Salomäki</td><td>FIN</td><td>C/LW/RW</td><td>30</td><td>1992-01-22</td><td>198 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mikael Granlund</td><td>FIN</td><td>C/LW/RW</td><td>31</td><td>1991-01-22</td><td>169 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mikko Koskinen</td><td>FIN</td><td>G</td><td>35</td><td>1987-01-02</td><td>203 Lbs</td><td>6 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mikko Rantanen</td><td>FIN</td><td>C/LW/RW</td><td>27</td><td>1995-01-22</td><td>212 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Miro Heiskanen</td><td>FIN</td><td>D</td><td>24</td><td>1998-01-22</td><td>170 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Olli Maatta</td><td>FIN</td><td>D</td><td>29</td><td>1993-01-22</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Patrik Laine</td><td>FIN</td><td>LW/RW</td><td>25</td><td>1997-01-22</td><td>205 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Rasmus Ristolainen</td><td>FIN</td><td>D</td><td>29</td><td>1993-01-02</td><td>219 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Sebastian Aho</td><td>FIN</td><td>C/LW/RW</td><td>26</td><td>1996-01-22</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Teuvo Teravainen</td><td>FIN</td><td>C/LW/RW</td><td>29</td><td>1993-01-22</td><td>185 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Ville Pokka</td><td>FIN</td><td>D</td><td>29</td><td>1993-01-22</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>28,0</td><td>195 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>500 000 $</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_LET"><a id="LETTONIE">LETTONIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">LETTONIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#LETTONIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#LETTONIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#LETTONIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#LETTONIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#LETTONIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#LETTONIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#LETTONIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#LETTONIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#LETTONIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#LETTONIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#LETTONIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#LETTONIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LETTONIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LETTONIE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Arturs Silovs</td><td>LAT</td><td>G</td><td>22</td><td>2000-01-02</td><td>203 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dans Locmelis</td><td>LAT</td><td>C</td><td>19</td><td>2003-01-02</td><td>170 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Eduards Tralmaks</td><td>LAT</td><td>C/LW/RW</td><td>26</td><td>1996-01-02</td><td>209 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Elvis Merzlikins</td><td>LET</td><td>G</td><td>29</td><td>1993-01-22</td><td>185 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Gustavs Davis Grigals</td><td>LAT</td><td>G</td><td>25</td><td>1997-01-02</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Janis Jaks</td><td>LAT</td><td>D</td><td>28</td><td>1994-01-02</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Karlis Cukste</td><td>LET</td><td>D</td><td>26</td><td>1996-01-22</td><td>220 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Kaspars Daugavins</td><td>LAT</td><td>C/LW/RW</td><td>35</td><td>1987-01-02</td><td>220 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Kristians Rubins</td><td>LAT</td><td>D</td><td>26</td><td>1996-01-02</td><td>227 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Martins Dzierkals</td><td>LAT</td><td>RW</td><td>26</td><td>1996-01-22</td><td>170 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Miks Indrasis</td><td>LAT</td><td>C/LW/RW</td><td>33</td><td>1989-01-02</td><td>198 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nikolajs Jelisejevs</td><td>LAT</td><td>LW</td><td>29</td><td>1993-01-02</td><td>190 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Oskars Batna</td><td>LAT</td><td>C</td><td>28</td><td>1994-01-02</td><td>234 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Oskars Cibulskis</td><td>LAT</td><td>D</td><td>35</td><td>1987-01-02</td><td>212 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Oskars Lapinskis</td><td>LAT</td><td>LW/RW</td><td>21</td><td>2001-01-02</td><td>170 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Raivis Ansons</td><td>LAT</td><td>LW/RW</td><td>21</td><td>2001-01-02</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Ralfs Bergmanis</td><td>LAT</td><td>D</td><td>21</td><td>2001-01-02</td><td>172 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Ralfs Freibergs</td><td>LAT</td><td>D</td><td>32</td><td>1990-01-22</td><td>190 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Rihards Bukarts</td><td>LET</td><td>LW/RW</td><td>28</td><td>1994-01-22</td><td>192 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Rodrigo Abols</td><td>LET</td><td>C</td><td>27</td><td>1995-01-22</td><td>187 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Rudolfs Balcers</td><td>LET</td><td>LW/RW</td><td>26</td><td>1996-01-22</td><td>174 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Theodor Blueger</td><td>LAT</td><td>C/LW/RW</td><td>29</td><td>1993-01-22</td><td>165 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Uvis Balinskis</td><td>LAT</td><td>D</td><td>27</td><td>1995-01-02</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Zemgus Girgensons</td><td>LET</td><td>C/LW/RW</td><td>29</td><td>1993-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>27,0</td><td>194 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>500 000 $</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_RUS"><a id="RUSSIE">RUSSIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">RUSSIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#RUSSIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#RUSSIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#RUSSIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#RUSSIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#RUSSIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#RUSSIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#RUSSIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#RUSSIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#RUSSIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#RUSSIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#RUSSIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#RUSSIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RUSSIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RUSSIE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Alex Ovechkin</td><td>RUS</td><td>LW/RW</td><td>38</td><td>1984-01-22</td><td>233 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Alexander Burmistrov</td><td>RUS</td><td>C/LW/RW</td><td>32</td><td>1990-01-22</td><td>180 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Andrei Svechnikov</td><td>RUS</td><td>LW/RW</td><td>23</td><td>1999-01-22</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Andrey Kuzmenko</td><td>RUS</td><td>LW</td><td>27</td><td>1995-01-02</td><td>194 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Andrey Vasilevskiy</td><td>RUS</td><td>G</td><td>29</td><td>1993-01-22</td><td>204 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Denis Guryanov</td><td>RUS</td><td>LW/RW</td><td>26</td><td>1996-01-02</td><td>201 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dmitri Kulikov</td><td>RUS</td><td>D</td><td>33</td><td>1989-01-22</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dmitri Orlov</td><td>RUS</td><td>D</td><td>32</td><td>1990-01-22</td><td>197 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>German Rubtsov</td><td>RUS</td><td>C</td><td>25</td><td>1997-01-22</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Igor Shestyorkin</td><td>RUS</td><td>G</td><td>28</td><td>1994-01-22</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Ilya Mikheyev</td><td>RUS</td><td>RW</td><td>29</td><td>1993-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Ivan Provorov</td><td>RUS</td><td>D</td><td>26</td><td>1996-01-22</td><td>201 Lbs</td><td>6 ft1</td><td>8</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Kirill Kaprizov</td><td>RUS</td><td>LW/RW</td><td>26</td><td>1996-01-22</td><td>192 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mikhail Grigorenko</td><td>RUS</td><td>C/LW/RW</td><td>29</td><td>1993-01-22</td><td>200 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mikhail Sergachev</td><td>RUS</td><td>D</td><td>25</td><td>1997-01-22</td><td>216 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Kucherov</td><td>RUS</td><td>RW</td><td>30</td><td>1992-01-22</td><td>174 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Nesterov</td><td>RUS</td><td>D</td><td>30</td><td>1992-01-22</td><td>198 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Zadorov</td><td>RUS</td><td>D</td><td>28</td><td>1994-01-22</td><td>236 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Pavel Buchnevich</td><td>RUS</td><td>LW/RW</td><td>28</td><td>1994-01-22</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Sergei Bobrovsky</td><td>RUS</td><td>G</td><td>35</td><td>1987-01-22</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Valeri Nichushkin</td><td>RUS</td><td>LW/RW</td><td>28</td><td>1994-01-22</td><td>202 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Vladimir Tarasenko</td><td>RUS</td><td>C/LW/RW</td><td>32</td><td>1990-01-22</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Vladislav Kamenev</td><td>RUS</td><td>C/LW</td><td>27</td><td>1995-01-22</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Vyacheslav Voynov</td><td>RUS</td><td>D</td><td>33</td><td>1989-01-22</td><td>193 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>29,1</td><td>198 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>500 000 $</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_SVK"><a id="SLOVAQUIE">SLOVAQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">SLOVAQUIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#SLOVAQUIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#SLOVAQUIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#SLOVAQUIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#SLOVAQUIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#SLOVAQUIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#SLOVAQUIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#SLOVAQUIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#SLOVAQUIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#SLOVAQUIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#SLOVAQUIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#SLOVAQUIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#SLOVAQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SLOVAQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SLOVAQUIE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Adam Húska</td><td>SVK</td><td>G</td><td>26</td><td>1996-01-02</td><td>176 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Adam Ruzicka</td><td>SVK</td><td>C/LW/RW</td><td>24</td><td>1998-01-02</td><td>203 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Adam Sýkora</td><td>SVK</td><td>C/LW</td><td>19</td><td>2003-01-02</td><td>172 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Christian Jaros</td><td>SVK</td><td>D</td><td>27</td><td>1995-01-22</td><td>201 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dalibor Dvorský</td><td>SVK</td><td>C/RW</td><td>18</td><td>2004-01-02</td><td>201 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Erik Cernak</td><td>SVK</td><td>D</td><td>26</td><td>1996-01-22</td><td>225 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Filip Mesar</td><td>SVK</td><td>RW</td><td>19</td><td>2003-01-02</td><td>176 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jaroslav Halak</td><td>SVK</td><td>G</td><td>38</td><td>1984-01-22</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jaroslav Janus</td><td>SVK</td><td>G</td><td>34</td><td>1988-01-22</td><td>189 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Juraj Slafkovský</td><td>SVK</td><td>LW</td><td>19</td><td>2003-01-02</td><td>238 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marian Studenic</td><td>SVK</td><td>RW</td><td>25</td><td>1997-01-02</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marko Dano</td><td>SVK</td><td>C/LW/RW</td><td>29</td><td>1993-01-22</td><td>183 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Martin Chromiak</td><td>SVK</td><td>LW/RW</td><td>21</td><td>2001-01-02</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Martin Fehervary</td><td>SVK</td><td>D</td><td>24</td><td>1998-01-02</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Martin Marincin</td><td>SVK</td><td>D</td><td>31</td><td>1991-01-22</td><td>187 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Martin Pospisil</td><td>SVK</td><td>RW</td><td>24</td><td>1998-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Martin Reway</td><td>SVK</td><td>C/LW</td><td>28</td><td>1994-01-22</td><td>158 Lbs</td><td>5 ft8</td><td>5</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Michal Ivan</td><td>SVK</td><td>D</td><td>24</td><td>1998-01-02</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Milos Kelemen</td><td>SVK</td><td>LW/RW</td><td>24</td><td>1998-01-02</td><td>218 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Pavol Regenda</td><td>SVK</td><td>LW</td><td>24</td><td>1998-01-02</td><td>218 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Peter Cehlarik</td><td>SVK</td><td>LW/RW</td><td>28</td><td>1994-01-22</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Knazko</td><td>SVK</td><td>D</td><td>21</td><td>2001-01-02</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Simon Nemec</td><td>SVK</td><td>D</td><td>19</td><td>2003-01-02</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Tomas Tatar</td><td>SVK</td><td>C/LW/RW</td><td>33</td><td>1989-01-22</td><td>176 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>25,2</td><td>193 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>500 000 $</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_SWE"><a id="SUÈDE">SUÈDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">SUÈDE Page</a> ]
[ <a href="WC-ProTeamRoster.php#SUÈDE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#SUÈDE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#SUÈDE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#SUÈDE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#SUÈDE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#SUÈDE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#SUÈDE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#SUÈDE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#SUÈDE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#SUÈDE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#SUÈDE">Team History</a> ]
[ <a href="WC-TeamRecords.php#SUÈDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUÈDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUÈDE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Alexander Wennberg</td><td>SWE</td><td>C</td><td>29</td><td>1993-01-22</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Andre Burakovsky</td><td>SWE</td><td>LW/RW</td><td>28</td><td>1994-01-22</td><td>187 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Elias Lindholm</td><td>SWE</td><td>C/RW</td><td>29</td><td>1993-01-22</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Elias Pettersson</td><td>SWE</td><td>C/LW/RW</td><td>25</td><td>1997-01-22</td><td>176 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Erik Karlsson</td><td>SWE</td><td>D</td><td>33</td><td>1989-01-22</td><td>175 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Filip Forsberg</td><td>SWE</td><td>LW/RW</td><td>29</td><td>1993-01-22</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Filip Gustavsson</td><td>SWE</td><td>G</td><td>25</td><td>1997-01-22</td><td>185 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Gabriel Landeskog</td><td>SWE</td><td>LW/RW</td><td>31</td><td>1991-01-22</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Hampus Lindholm</td><td>SWE</td><td>D</td><td>29</td><td>1993-01-22</td><td>195 Lbs</td><td>6 ft3</td><td>19</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jacob De La Rose</td><td>SWE</td><td>C/LW/RW</td><td>28</td><td>1994-01-22</td><td>176 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jacob Markstrom</td><td>SWE</td><td>G</td><td>33</td><td>1989-01-22</td><td>178 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jesper Bratt</td><td>SWE</td><td>LW/RW</td><td>25</td><td>1997-01-22</td><td>174 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>John Klingberg</td><td>SWE</td><td>D</td><td>31</td><td>1991-01-22</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jonas Brodin</td><td>SWE</td><td>D</td><td>30</td><td>1992-01-22</td><td>172 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Lucas Raymond</td><td>SWE</td><td>RW</td><td>21</td><td>2001-01-02</td><td>183 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Mika Zibanejad</td><td>SWE</td><td>C</td><td>30</td><td>1992-01-22</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Oscar Klefbom</td><td>SWE</td><td>D</td><td>30</td><td>1992-01-22</td><td>201 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Oskar Lindblom</td><td>SWE</td><td>LW/RW</td><td>27</td><td>1995-01-02</td><td>192 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Rasmus Dahlin</td><td>SWE</td><td>D</td><td>23</td><td>1999-01-22</td><td>181 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Robin Lehner</td><td>SWE</td><td>G</td><td>32</td><td>1990-01-22</td><td>220 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Victor Hedman</td><td>SWE</td><td>D</td><td>33</td><td>1989-01-22</td><td>229 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Viktor Arvidsson</td><td>SWE</td><td>LW/RW</td><td>30</td><td>1992-01-22</td><td>181 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>William Karlsson</td><td>SWE</td><td>C/LW</td><td>30</td><td>1992-01-22</td><td>163 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>William Nylander</td><td>SWE</td><td>C/LW/RW</td><td>27</td><td>1995-01-22</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>28,7</td><td>186 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>500 000 $</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_SWI"><a id="SUISSE">SUISSE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">SUISSE Page</a> ]
[ <a href="WC-ProTeamRoster.php#SUISSE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#SUISSE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#SUISSE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#SUISSE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#SUISSE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#SUISSE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#SUISSE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#SUISSE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#SUISSE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#SUISSE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#SUISSE">Team History</a> ]
[ <a href="WC-TeamRecords.php#SUISSE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUISSE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUISSE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Akira Schmid</td><td>SWI</td><td>G</td><td>23</td><td>1999-01-02</td><td>205 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dario Bürgler</td><td>SWI</td><td>RW</td><td>36</td><td>1986-01-02</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dean Kukan</td><td>SWI</td><td>D</td><td>30</td><td>1992-01-22</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Denis Malgin</td><td>SWI</td><td>C/RW</td><td>26</td><td>1996-01-22</td><td>176 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Enzo Corvi</td><td>SWI</td><td>C</td><td>31</td><td>1991-01-02</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Grégory Hofmann</td><td>SWI</td><td>LW</td><td>31</td><td>1991-01-02</td><td>174 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Inti Pestoni</td><td>SWI</td><td>LW</td><td>32</td><td>1990-01-02</td><td>176 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>J.J. Moser</td><td>SUI</td><td>D</td><td>23</td><td>1999-01-02</td><td>183 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jonas Siegenthaler</td><td>SWI</td><td>D</td><td>26</td><td>1996-01-02</td><td>218 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Kevin Fiala</td><td>CZE</td><td>LW/RW</td><td>27</td><td>1995-01-22</td><td>192 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Leonardo Genoni</td><td>SWI</td><td>G</td><td>36</td><td>1986-01-02</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Lian Bichsel</td><td>SWI</td><td>D</td><td>19</td><td>2003-01-02</td><td>216 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Lino Martschini</td><td>SWI</td><td>RW</td><td>30</td><td>1992-01-02</td><td>146 Lbs</td><td>5 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marco Müller</td><td>SWI</td><td>C/LW/RW</td><td>29</td><td>1993-01-02</td><td>179 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Maxime Montandon</td><td>SUI</td><td>D</td><td>29</td><td>1993-01-02</td><td>227 Lbs</td><td>6 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nico Hischier</td><td>SUI</td><td>C</td><td>24</td><td>1998-01-22</td><td>179 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nino Niederreiter</td><td>SWI</td><td>LW/RW</td><td>31</td><td>1991-01-22</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Pius Suter</td><td>SWI</td><td>C/LW</td><td>27</td><td>1995-01-22</td><td>176 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Ramon Untersander</td><td>SWI</td><td>D</td><td>32</td><td>1990-01-02</td><td>192 Lbs</td><td>6 ft0</td><td>33</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Roman Josi</td><td>SWI</td><td>D</td><td>33</td><td>1989-01-22</td><td>198 Lbs</td><td>6 ft1</td><td>11</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Sandro Aeschlimann</td><td>SWI</td><td>G</td><td>29</td><td>1993-01-02</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Sven Andrighetto</td><td>SUI</td><td>C/LW/RW</td><td>30</td><td>1992-01-22</td><td>188 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Tim Berni</td><td>SWI</td><td>D</td><td>23</td><td>1999-01-02</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Timo Meier</td><td>SWI</td><td>LW/RW</td><td>27</td><td>1995-01-22</td><td>184 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Tyler Moy</td><td>SWI</td><td>C/RW</td><td>28</td><td>1994-01-02</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>25</td><td>28,5</td><td>190 Lbs</td><td>6 ft 0</td><td>1,00 years</td><td>500 000 $</td>
<td>25</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_CZE"><a id="TCHÉQUIE">TCHÉQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">TCHÉQUIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#TCHÉQUIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#TCHÉQUIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#TCHÉQUIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#TCHÉQUIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#TCHÉQUIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#TCHÉQUIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#TCHÉQUIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#TCHÉQUIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#TCHÉQUIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#TCHÉQUIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#TCHÉQUIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#TCHÉQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TCHÉQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TCHÉQUIE" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>David Jiricek</td><td>CZE</td><td>D</td><td>20</td><td>2002-01-02</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>David Kampf</td><td>CZE</td><td>C/RW</td><td>28</td><td>1994-01-22</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>David Musil</td><td>CAN</td><td>D</td><td>30</td><td>1992-01-22</td><td>203 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>David Pastrnak</td><td>TCH</td><td>LW/RW</td><td>27</td><td>1995-01-22</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dominik Kubalik</td><td>CZE</td><td>LW/RW</td><td>28</td><td>1994-01-02</td><td>179 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dominik Masin</td><td>TCH</td><td>D</td><td>27</td><td>1995-01-22</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Filip Chytil</td><td>CZE</td><td>C</td><td>24</td><td>1998-01-02</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Filip Hronek</td><td>CZE</td><td>D</td><td>26</td><td>1996-01-22</td><td>170 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Filip Zadina</td><td>TCH</td><td>LW/RW</td><td>24</td><td>1998-01-22</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jakub Voracek</td><td>CZE</td><td>LW/RW</td><td>34</td><td>1988-01-22</td><td>214 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jakub Vrana</td><td>TCH</td><td>LW/RW</td><td>27</td><td>1995-01-22</td><td>196 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jakub Zboril</td><td>TCH</td><td>D</td><td>26</td><td>1996-01-02</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jiri Kulich</td><td>CZE</td><td>C</td><td>19</td><td>2003-01-02</td><td>179 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Karel Vejmelka</td><td>CZE</td><td>G</td><td>27</td><td>1995-01-02</td><td>203 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Martin Necas</td><td>TCH</td><td>C/RW</td><td>24</td><td>1998-01-02</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Michal Neuvirth</td><td>CZE</td><td>G</td><td>35</td><td>1987-01-22</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Ondrej Kase</td><td>CZE</td><td>LW/RW</td><td>28</td><td>1994-01-22</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Ondrej Pavelec</td><td>CZE</td><td>G</td><td>36</td><td>1986-01-22</td><td>220 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Pavel Zacha</td><td>CZE</td><td>C/LW/RW</td><td>26</td><td>1996-01-22</td><td>214 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Radek Faksa</td><td>TCH</td><td>C</td><td>29</td><td>1993-01-22</td><td>202 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Radim Simek</td><td>CZE</td><td>D</td><td>31</td><td>1991-01-02</td><td>201 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Stanislav Svozil</td><td>CZE</td><td>D</td><td>20</td><td>2002-01-02</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Tomas Hertl</td><td>TCH</td><td>C/LW/RW</td><td>30</td><td>1992-01-22</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Tomas Nosek</td><td>CZE</td><td>C/LW</td><td>31</td><td>1991-01-02</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>27,4</td><td>196 Lbs</td><td>6 ft 2</td><td>1,00 years</td><td>500 000 $</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_USA"><a id="USA">USA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">USA Page</a> ]
[ <a href="WC-ProTeamRoster.php#USA">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#USA">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#USA">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#USA">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#USA">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#USA">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#USA">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#USA">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#USA">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#USA">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#USA">Team History</a> ]
[ <a href="WC-TeamRecords.php#USA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_USA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_USA" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Adam Erne</td><td>USA</td><td>LW/RW</td><td>28</td><td>1994-01-22</td><td>210 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Alex Galchenyuk</td><td>USA</td><td>C/LW/RW</td><td>29</td><td>1993-01-22</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Auston Matthews</td><td>USA</td><td>C</td><td>26</td><td>1996-01-22</td><td>216 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Brady Tkachuk</td><td>USA</td><td>LW</td><td>24</td><td>1998-01-22</td><td>212 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Brock Boeser</td><td>USA</td><td>RW</td><td>26</td><td>1996-01-22</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Cam Fowler</td><td>CAN</td><td>D</td><td>32</td><td>1990-01-22</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Charlie McAvoy</td><td>USA</td><td>D</td><td>26</td><td>1996-01-22</td><td>207 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Clayton Keller</td><td>USA</td><td>C/LW/RW</td><td>25</td><td>1997-01-22</td><td>168 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Cole Caufield</td><td>USA</td><td>LW/RW</td><td>22</td><td>2000-01-02</td><td>174 Lbs</td><td>5 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Connor Hellebuyck</td><td>USA</td><td>G</td><td>30</td><td>1992-01-22</td><td>200 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Dylan Larkin</td><td>USA</td><td>C/LW</td><td>27</td><td>1995-01-22</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jack Campbell</td><td>USA</td><td>G</td><td>31</td><td>1991-01-22</td><td>199 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jack Eichel</td><td>USA</td><td>C</td><td>27</td><td>1995-01-22</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jack Hughes</td><td>USA</td><td>C/LW</td><td>22</td><td>2000-01-22</td><td>176 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jacob Trouba</td><td>USA</td><td>D</td><td>29</td><td>1993-01-22</td><td>183 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jake Guentzel</td><td>USA</td><td>C/LW</td><td>29</td><td>1993-01-22</td><td>168 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jeremy Swayman</td><td>USA</td><td>G</td><td>25</td><td>1997-01-02</td><td>194 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Joel Farabee</td><td>USA</td><td>LW/RW</td><td>23</td><td>1999-01-22</td><td>163 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Kyle Connor</td><td>USA</td><td>LW</td><td>27</td><td>1995-01-22</td><td>183 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Matthew Tkachuk</td><td>USA</td><td>LW/RW</td><td>26</td><td>1996-01-22</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Noah Hanifin</td><td>USA</td><td>D</td><td>26</td><td>1996-01-22</td><td>203 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Quinn Hughes</td><td>USA</td><td>D</td><td>24</td><td>1998-01-02</td><td>170 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Seth Jones</td><td>USA</td><td>D</td><td>29</td><td>1993-01-22</td><td>205 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Zachary Werenski</td><td>USA</td><td>D</td><td>26</td><td>1996-01-22</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>26,6</td><td>193 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>500 000 $</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_WLD"><a id="WORLD">WORLD</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">WORLD Page</a> ]
[ <a href="WC-ProTeamRoster.php#WORLD">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#WORLD">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#WORLD">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#WORLD">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#WORLD">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#WORLD">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#WORLD">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#WORLD">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#WORLD">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#WORLD">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#WORLD">Team History</a> ]
[ <a href="WC-TeamRecords.php#WORLD">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WORLD');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WORLD" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Ahmad Al Saegh</td><td>KWT</td><td>G</td><td>23</td><td>1999-01-02</td><td>165 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Alexandar Georgiyev</td><td>BUL</td><td>G</td><td>27</td><td>1995-01-22</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Alexandre Texier</td><td>FRA</td><td>C/LW/RW</td><td>24</td><td>1998-01-02</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Aliaksei Protas</td><td>BLR</td><td>C</td><td>22</td><td>2000-01-02</td><td>225 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Andrey Pedan</td><td>LIT</td><td>D</td><td>30</td><td>1992-01-22</td><td>214 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Angelo Miceli</td><td>CAN</td><td>C/LW</td><td>29</td><td>1993-01-22</td><td>176 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Anze Kopitar</td><td>SVN</td><td>C</td><td>36</td><td>1986-01-22</td><td>227 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Arthur Kaliyev</td><td>UZB</td><td>LW/RW</td><td>22</td><td>2000-01-02</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Daniel Sprong</td><td>NED</td><td>LW/RW</td><td>26</td><td>1996-01-22</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>David Reinbacher</td><td>AUT</td><td>D</td><td>19</td><td>2003-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Demid Yeremeyev</td><td>KAZ</td><td>G</td><td>24</td><td>1998-01-22</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Hafthor Sigrunarson</td><td>ISL</td><td>C</td><td>26</td><td>1996-01-22</td><td>154 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jermaine Loewen</td><td>JAM</td><td>LW/RW</td><td>25</td><td>1997-01-22</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Jordan Spence</td><td>AUS</td><td>D</td><td>22</td><td>2000-01-02</td><td>181 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Liam Kirk</td><td>GBR</td><td>C/LW</td><td>23</td><td>1999-01-02</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Luca Sbisa</td><td>ITA</td><td>D</td><td>33</td><td>1989-01-22</td><td>207 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marco Kasper</td><td>AUT</td><td>C</td><td>19</td><td>2003-01-02</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marco Rossi</td><td>AUT</td><td>C</td><td>22</td><td>2000-01-02</td><td>183 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Marco Scandella</td><td>CAN</td><td>D</td><td>33</td><td>1989-01-22</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Nick Cicek</td><td>TUR</td><td>D</td><td>23</td><td>1999-01-02</td><td>201 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Raman Hrabarenka</td><td>BEL</td><td>D</td><td>31</td><td>1991-01-22</td><td>212 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Reinhard Venter</td><td>RSA</td><td>C/LW/RW</td><td>22</td><td>2000-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Vadim Vasjonkin</td><td>EST</td><td>LW</td><td>27</td><td>1995-01-22</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
<tr><td>Yusaku Ando</td><td>JPN</td><td>C/LW/RW</td><td>20</td><td>2002-01-02</td><td>148 Lbs</td><td>5 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>500 000 $</td><td>500 000 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>24</td><td>25,3</td><td>193 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>500 000 $</td>
<td>24</td><td>0</td><td>0</td></tr></table></div>
<?php include "Footer.php";?>
