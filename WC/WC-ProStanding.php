﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Pro Standing</title>
<script src="WC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - WC-STHS.bin - WC-STHSCareerStat.bin"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1060px) {
.STHSWarning {display:block;}
table.basictablesorter thead th:nth-last-child(2){display:none;}
table.basictablesorter tbody td:nth-last-child(2){display:none;}
table.basictablesorter thead th:nth-last-child(3){display:none;}
table.basictablesorter tbody td:nth-last-child(3){display:none;}
table.basictablesorter thead th:nth-last-child(4){display:none;}
table.basictablesorter tbody td:nth-last-child(4){display:none;}
}@media screen and (max-width: 890px) {
table.basictablesorter thead th:nth-last-child(5){display:none;}
table.basictablesorter tbody td:nth-last-child(5){display:none;}
table.basictablesorter thead th:nth-last-child(6){display:none;}
table.basictablesorter tbody td:nth-last-child(6){display:none;}
}
table.basictablesorter tbody td.staticTD {font-size:9pt;border-right:hidden; border-left:hidden;}
</style>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<script>$(function(){$("table").basictablesorter({ widgets: ['staticRow'] })});</script>
<div class="tabsmain standard"><ul class="tabmain-links">
<li class="activemain"><a href="#tabmain2">Conference</a></li>
<li><a href="#tabmain3">Division</a></li>
<li><a href="#tabmain4">Overall</a></li>
</ul><div class="tabmain-content">
<div class="tabmain active" id="tabmain2">
<h2 class="STHSStanding_H2Header">GROUPE A</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - X</td><td><a href=ProTeam.php?Team=10>CANADA</a></td><td>11</td><td>10</td><td>1</td><td>0</td><td><b>20</b></td><td>10</td><td>10</td><td>52</td><td>19</td><td>33</td><td>0,909</td><td>5-1-0</td><td>5-0-0</td><td>9-1-0</td><td>5-1-0</td><td>5-0-0</td><td>W4</td></tr>
<tr><td>2 - X</td><td><a href=ProTeam.php?Team=2>USA</a></td><td>11</td><td>10</td><td>1</td><td>0</td><td><b>20</b></td><td>8</td><td>8</td><td>49</td><td>23</td><td>26</td><td>0,909</td><td>3-1-0</td><td>7-0-0</td><td>9-1-0</td><td>3-1-0</td><td>7-0-0</td><td>W3</td></tr>
<tr><td>3 - X</td><td><a href=ProTeam.php?Team=4>TCHÉQUIE</a></td><td>11</td><td>8</td><td>3</td><td>0</td><td><b>16</b></td><td>7</td><td>7</td><td>37</td><td>30</td><td>7</td><td>0,727</td><td>4-2-0</td><td>4-1-0</td><td>7-3-0</td><td>4-2-0</td><td>4-1-0</td><td>W5</td></tr>
<tr class="static"><td colspan="19"><hr /></td></tr>
<tr><td>4 - Y</td><td><a href=ProTeam.php?Team=12>ALLEMAGNE</a></td><td>11</td><td>4</td><td>6</td><td>1</td><td><b>9</b></td><td>4</td><td>4</td><td>24</td><td>28</td><td>-4</td><td>0,409</td><td>4-3-1</td><td>0-3-0</td><td>4-5-1</td><td>4-3-1</td><td>0-3-0</td><td>SOL1</td></tr>
<tr><td>5</td><td><a href=ProTeam.php?Team=8>LETTONIE</a></td><td>11</td><td>3</td><td>6</td><td>2</td><td><b>8</b></td><td>3</td><td>3</td><td>25</td><td>41</td><td>-16</td><td>0,364</td><td>3-1-1</td><td>0-5-1</td><td>3-6-1</td><td>3-1-1</td><td>0-5-1</td><td>L1</td></tr>
<tr><td>6</td><td><a href=ProTeam.php?Team=6>SLOVAQUIE</a></td><td>11</td><td>2</td><td>6</td><td>3</td><td><b>7</b></td><td>1</td><td>1</td><td>19</td><td>36</td><td>-17</td><td>0,318</td><td>2-2-1</td><td>0-4-2</td><td>2-5-3</td><td>2-2-1</td><td>0-4-2</td><td>L2</td></tr>
</tbody></table><br />
<h2 class="STHSStanding_H2Header">GROUPE B</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href=ProTeam.php?Team=9>RUSSIE</a></td><td>11</td><td>9</td><td>2</td><td>0</td><td><b>18</b></td><td>7</td><td>8</td><td>42</td><td>19</td><td>23</td><td>0,818</td><td>3-1-0</td><td>6-1-0</td><td>8-2-0</td><td>3-1-0</td><td>6-1-0</td><td>L1</td></tr>
<tr><td>2 - X</td><td><a href=ProTeam.php?Team=1>SUÈDE</a></td><td>11</td><td>6</td><td>4</td><td>1</td><td><b>13</b></td><td>6</td><td>6</td><td>29</td><td>25</td><td>4</td><td>0,591</td><td>4-3-1</td><td>2-1-0</td><td>6-3-1</td><td>4-3-1</td><td>2-1-0</td><td>W2</td></tr>
<tr><td>3 - X</td><td><a href=ProTeam.php?Team=3>FINLANDE</a></td><td>11</td><td>6</td><td>4</td><td>1</td><td><b>13</b></td><td>4</td><td>5</td><td>30</td><td>28</td><td>2</td><td>0,591</td><td>4-2-1</td><td>2-2-0</td><td>5-4-1</td><td>4-2-1</td><td>2-2-0</td><td>L3</td></tr>
<tr class="static"><td colspan="19"><hr /></td></tr>
<tr><td>4 - Y</td><td><a href=ProTeam.php?Team=5>SUISSE</a></td><td>11</td><td>5</td><td>4</td><td>2</td><td><b>12</b></td><td>4</td><td>5</td><td>28</td><td>28</td><td>0</td><td>0,545</td><td>3-2-2</td><td>2-2-0</td><td>4-4-2</td><td>3-2-2</td><td>2-2-0</td><td>L1</td></tr>
<tr><td>5</td><td><a href=ProTeam.php?Team=11>WORLD</a></td><td>11</td><td>3</td><td>8</td><td>0</td><td><b>6</b></td><td>1</td><td>2</td><td>17</td><td>37</td><td>-20</td><td>0,273</td><td>0-3-0</td><td>3-5-0</td><td>2-8-0</td><td>0-3-0</td><td>3-5-0</td><td>SOW1</td></tr>
<tr><td>6</td><td><a href=ProTeam.php?Team=7>DANEMARK</a></td><td>11</td><td>0</td><td>10</td><td>1</td><td><b>1</b></td><td>0</td><td>0</td><td>11</td><td>49</td><td>-38</td><td>0,045</td><td>0-2-1</td><td>0-8-0</td><td>0-9-1</td><td>0-2-1</td><td>0-8-0</td><td>L5</td></tr>
</tbody></table><br />
x - Clinched Playoff Berth<br />
y - Clinched Division Title<br />
z - Clinched Conference Title<br />
e - Eliminated<br />
*Seeding 3 division leaders<br />
</div><div class="tabmain" id="tabmain3">
<h2 class="STHSStanding_H2Header">Division 1</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - X</td><td><a href=ProTeam.php?Team=10>CANADA</a></td><td>11</td><td>10</td><td>1</td><td>0</td><td><b>20</b></td><td>10</td><td>10</td><td>52</td><td>19</td><td>33</td><td>0,909</td><td>5-1-0</td><td>5-0-0</td><td>9-1-0</td><td>5-1-0</td><td>5-0-0</td><td>W4</td></tr>
<tr><td>2 - X</td><td><a href=ProTeam.php?Team=2>USA</a></td><td>11</td><td>10</td><td>1</td><td>0</td><td><b>20</b></td><td>8</td><td>8</td><td>49</td><td>23</td><td>26</td><td>0,909</td><td>3-1-0</td><td>7-0-0</td><td>9-1-0</td><td>3-1-0</td><td>7-0-0</td><td>W3</td></tr>
<tr><td>3 - X</td><td><a href=ProTeam.php?Team=4>TCHÉQUIE</a></td><td>11</td><td>8</td><td>3</td><td>0</td><td><b>16</b></td><td>7</td><td>7</td><td>37</td><td>30</td><td>7</td><td>0,727</td><td>4-2-0</td><td>4-1-0</td><td>7-3-0</td><td>4-2-0</td><td>4-1-0</td><td>W5</td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Division 2</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - Y</td><td><a href=ProTeam.php?Team=12>ALLEMAGNE</a></td><td>11</td><td>4</td><td>6</td><td>1</td><td><b>9</b></td><td>4</td><td>4</td><td>24</td><td>28</td><td>-4</td><td>0,409</td><td>4-3-1</td><td>0-3-0</td><td>4-5-1</td><td>4-3-1</td><td>0-3-0</td><td>SOL1</td></tr>
<tr><td>2</td><td><a href=ProTeam.php?Team=8>LETTONIE</a></td><td>11</td><td>3</td><td>6</td><td>2</td><td><b>8</b></td><td>3</td><td>3</td><td>25</td><td>41</td><td>-16</td><td>0,364</td><td>3-1-1</td><td>0-5-1</td><td>3-6-1</td><td>3-1-1</td><td>0-5-1</td><td>L1</td></tr>
<tr><td>3</td><td><a href=ProTeam.php?Team=6>SLOVAQUIE</a></td><td>11</td><td>2</td><td>6</td><td>3</td><td><b>7</b></td><td>1</td><td>1</td><td>19</td><td>36</td><td>-17</td><td>0,318</td><td>2-2-1</td><td>0-4-2</td><td>2-5-3</td><td>2-2-1</td><td>0-4-2</td><td>L2</td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Division 4</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href=ProTeam.php?Team=9>RUSSIE</a></td><td>11</td><td>9</td><td>2</td><td>0</td><td><b>18</b></td><td>7</td><td>8</td><td>42</td><td>19</td><td>23</td><td>0,818</td><td>3-1-0</td><td>6-1-0</td><td>8-2-0</td><td>3-1-0</td><td>6-1-0</td><td>L1</td></tr>
<tr><td>2 - X</td><td><a href=ProTeam.php?Team=1>SUÈDE</a></td><td>11</td><td>6</td><td>4</td><td>1</td><td><b>13</b></td><td>6</td><td>6</td><td>29</td><td>25</td><td>4</td><td>0,591</td><td>4-3-1</td><td>2-1-0</td><td>6-3-1</td><td>4-3-1</td><td>2-1-0</td><td>W2</td></tr>
<tr><td>3 - X</td><td><a href=ProTeam.php?Team=3>FINLANDE</a></td><td>11</td><td>6</td><td>4</td><td>1</td><td><b>13</b></td><td>4</td><td>5</td><td>30</td><td>28</td><td>2</td><td>0,591</td><td>4-2-1</td><td>2-2-0</td><td>5-4-1</td><td>4-2-1</td><td>2-2-0</td><td>L3</td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Division 5</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - Y</td><td><a href=ProTeam.php?Team=5>SUISSE</a></td><td>11</td><td>5</td><td>4</td><td>2</td><td><b>12</b></td><td>4</td><td>5</td><td>28</td><td>28</td><td>0</td><td>0,545</td><td>3-2-2</td><td>2-2-0</td><td>4-4-2</td><td>3-2-2</td><td>2-2-0</td><td>L1</td></tr>
<tr><td>2</td><td><a href=ProTeam.php?Team=11>WORLD</a></td><td>11</td><td>3</td><td>8</td><td>0</td><td><b>6</b></td><td>1</td><td>2</td><td>17</td><td>37</td><td>-20</td><td>0,273</td><td>0-3-0</td><td>3-5-0</td><td>2-8-0</td><td>0-3-0</td><td>3-5-0</td><td>SOW1</td></tr>
<tr><td>3</td><td><a href=ProTeam.php?Team=7>DANEMARK</a></td><td>11</td><td>0</td><td>10</td><td>1</td><td><b>1</b></td><td>0</td><td>0</td><td>11</td><td>49</td><td>-38</td><td>0,045</td><td>0-2-1</td><td>0-8-0</td><td>0-9-1</td><td>0-2-1</td><td>0-8-0</td><td>L5</td></tr>
</tbody></table>
</div><div class="tabmain" id="tabmain4">
<h2 class="STHSStanding_H2Header">Overall</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - X</td><td><a href=ProTeam.php?Team=10>CANADA</a></td><td>11</td><td>10</td><td>1</td><td>0</td><td><b>20</b></td><td>10</td><td>10</td><td>52</td><td>19</td><td>33</td><td>0,909</td><td>5-1-0</td><td>5-0-0</td><td>9-1-0</td><td>5-1-0</td><td>5-0-0</td><td>W4</td></tr>
<tr><td>2 - X</td><td><a href=ProTeam.php?Team=2>USA</a></td><td>11</td><td>10</td><td>1</td><td>0</td><td><b>20</b></td><td>8</td><td>8</td><td>49</td><td>23</td><td>26</td><td>0,909</td><td>3-1-0</td><td>7-0-0</td><td>9-1-0</td><td>3-1-0</td><td>7-0-0</td><td>W3</td></tr>
<tr><td>3 - Z</td><td><a href=ProTeam.php?Team=9>RUSSIE</a></td><td>11</td><td>9</td><td>2</td><td>0</td><td><b>18</b></td><td>7</td><td>8</td><td>42</td><td>19</td><td>23</td><td>0,818</td><td>3-1-0</td><td>6-1-0</td><td>8-2-0</td><td>3-1-0</td><td>6-1-0</td><td>L1</td></tr>
<tr><td>4 - X</td><td><a href=ProTeam.php?Team=4>TCHÉQUIE</a></td><td>11</td><td>8</td><td>3</td><td>0</td><td><b>16</b></td><td>7</td><td>7</td><td>37</td><td>30</td><td>7</td><td>0,727</td><td>4-2-0</td><td>4-1-0</td><td>7-3-0</td><td>4-2-0</td><td>4-1-0</td><td>W5</td></tr>
<tr><td>5 - X</td><td><a href=ProTeam.php?Team=1>SUÈDE</a></td><td>11</td><td>6</td><td>4</td><td>1</td><td><b>13</b></td><td>6</td><td>6</td><td>29</td><td>25</td><td>4</td><td>0,591</td><td>4-3-1</td><td>2-1-0</td><td>6-3-1</td><td>4-3-1</td><td>2-1-0</td><td>W2</td></tr>
<tr><td>6 - X</td><td><a href=ProTeam.php?Team=3>FINLANDE</a></td><td>11</td><td>6</td><td>4</td><td>1</td><td><b>13</b></td><td>4</td><td>5</td><td>30</td><td>28</td><td>2</td><td>0,591</td><td>4-2-1</td><td>2-2-0</td><td>5-4-1</td><td>4-2-1</td><td>2-2-0</td><td>L3</td></tr>
<tr><td>7 - Y</td><td><a href=ProTeam.php?Team=5>SUISSE</a></td><td>11</td><td>5</td><td>4</td><td>2</td><td><b>12</b></td><td>4</td><td>5</td><td>28</td><td>28</td><td>0</td><td>0,545</td><td>3-2-2</td><td>2-2-0</td><td>4-4-2</td><td>3-2-2</td><td>2-2-0</td><td>L1</td></tr>
<tr><td>8 - Y</td><td><a href=ProTeam.php?Team=12>ALLEMAGNE</a></td><td>11</td><td>4</td><td>6</td><td>1</td><td><b>9</b></td><td>4</td><td>4</td><td>24</td><td>28</td><td>-4</td><td>0,409</td><td>4-3-1</td><td>0-3-0</td><td>4-5-1</td><td>4-3-1</td><td>0-3-0</td><td>SOL1</td></tr>
<tr><td>9</td><td><a href=ProTeam.php?Team=8>LETTONIE</a></td><td>11</td><td>3</td><td>6</td><td>2</td><td><b>8</b></td><td>3</td><td>3</td><td>25</td><td>41</td><td>-16</td><td>0,364</td><td>3-1-1</td><td>0-5-1</td><td>3-6-1</td><td>3-1-1</td><td>0-5-1</td><td>L1</td></tr>
<tr><td>10</td><td><a href=ProTeam.php?Team=6>SLOVAQUIE</a></td><td>11</td><td>2</td><td>6</td><td>3</td><td><b>7</b></td><td>1</td><td>1</td><td>19</td><td>36</td><td>-17</td><td>0,318</td><td>2-2-1</td><td>0-4-2</td><td>2-5-3</td><td>2-2-1</td><td>0-4-2</td><td>L2</td></tr>
<tr><td>11</td><td><a href=ProTeam.php?Team=11>WORLD</a></td><td>11</td><td>3</td><td>8</td><td>0</td><td><b>6</b></td><td>1</td><td>2</td><td>17</td><td>37</td><td>-20</td><td>0,273</td><td>0-3-0</td><td>3-5-0</td><td>2-8-0</td><td>0-3-0</td><td>3-5-0</td><td>SOW1</td></tr>
<tr><td>12</td><td><a href=ProTeam.php?Team=7>DANEMARK</a></td><td>11</td><td>0</td><td>10</td><td>1</td><td><b>1</b></td><td>0</td><td>0</td><td>11</td><td>49</td><td>-38</td><td>0,045</td><td>0-2-1</td><td>0-8-0</td><td>0-9-1</td><td>0-2-1</td><td>0-8-0</td><td>L5</td></tr>
</tbody></table></div></div></div>
<h2 class="STHSStanding_PointSystem">Point System</h2>
<b>Win :</b> 2 -- <b>Loss :</b> 0 -- <b>OT Win :</b> 2 -- <b>OT Loss :</b> 1 -- <b>SO Win :</b> 2 -- <b>SO Loss :</b> 1<br /><br />P.S. The simulator only uses points to give the title. If two team have the same amount of point, none of them will be award the title until your simulate the last game/day of your season.
<?php include "Footer.php";?>
