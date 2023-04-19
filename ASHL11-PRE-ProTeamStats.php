<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Stats</title>
<script src="ASHL11-PRE.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL11-STHS.db - ASHL11-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (min-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(2){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(2){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(2){display:none;}}
@media screen and (max-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(1){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(1){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(1){display:none;}}
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
.STHSTeamStat_Table2 thead th:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(2){display:none;}
}
@media screen and (max-width: 960px) {
.STHSTeamStat_Table2 thead th:nth-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(8){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(9){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(9){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(9){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(10){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(10){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(10){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(11){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(11){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(3){display:none;}
}
}</style>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL11-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL11-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>9</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>5</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>4</td><td>10</td><td>19</td><td>29</td></tr>
<tr><td>Arizona Coyotes</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>13</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>7</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>6</td><td>6</td><td>11</td><td>17</td></tr>
<tr><td>Boston Bruins</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>14</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>5</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>9</td><td>8</td><td>13</td><td>21</td></tr>
<tr><td>Buffalo Sabres</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>11</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>7</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>4</td><td>13</td><td>26</td><td>39</td></tr>
<tr><td>Calgary Flames</td><td>4</td><td>0</td><td>2</td><td>0</td><td>1</td><td>0</td><td>1</td><td>6</td><td>18</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>1</td><td>3</td><td>5</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>13</td><td>6</td><td>12</td><td>18</td></tr>
<tr><td>Carolina Hurricanes</td><td>4</td><td>1</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>13</td><td>11</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>6</td><td>6</td><td>2</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>7</td><td>5</td><td>13</td><td>24</td><td>37</td></tr>
<tr><td>Chicago Blackhawks</td><td>4</td><td>0</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>12</td><td>14</td><td>2</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>5</td><td>6</td><td>2</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>7</td><td>8</td><td>12</td><td>22</td><td>34</td></tr>
<tr><td>Colorado Avalanche</td><td>4</td><td>3</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>16</td><td>12</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>6</td><td>6</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>6</td><td>16</td><td>31</td><td>47</td></tr>
<tr><td>Columbus Blue Jackets</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>10</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>3</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>7</td><td>19</td><td>33</td><td>52</td></tr>
<tr><td>Dallas Stars</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>8</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>3</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>5</td><td>5</td><td>9</td><td>14</td></tr>
<tr><td>Detroit Red Wings</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>10</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>4</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>6</td><td>14</td><td>23</td><td>37</td></tr>
<tr><td>Edmonton Oilers</td><td>4</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>18</td><td>11</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>6</td><td>2</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>5</td><td>5</td><td>18</td><td>34</td><td>52</td></tr>
<tr><td>Florida Panthers</td><td>4</td><td>2</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>10</td><td>9</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>5</td><td>2</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>2</td><td>4</td><td>10</td><td>20</td><td>30</td></tr>
<tr><td>Los Angeles Kings</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>10</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>6</td><td>13</td><td>26</td><td>39</td></tr>
<tr><td>Minnesota Wild</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>16</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>4</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>12</td><td>8</td><td>15</td><td>23</td></tr>
<tr><td>Montreal Canadiens</td><td>4</td><td>1</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>15</td><td>11</td><td>2</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>11</td><td>3</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>8</td><td>15</td><td>27</td><td>42</td></tr>
<tr><td>Nashville Predators</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>8</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>5</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>3</td><td>14</td><td>23</td><td>37</td></tr>
<tr><td>New Jersey Devils</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>10</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>6</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>8</td><td>16</td><td>24</td></tr>
<tr><td>New York Islanders</td><td>4</td><td>1</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>14</td><td>15</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>8</td><td>9</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>6</td><td>14</td><td>26</td><td>40</td></tr>
<tr><td>New York Rangers</td><td>4</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>14</td><td>10</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>2</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>6</td><td>8</td><td>14</td><td>25</td><td>39</td></tr>
<tr><td>Ottawa Senators</td><td>4</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>10</td><td>9</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>5</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>5</td><td>4</td><td>10</td><td>19</td><td>29</td></tr>
<tr><td>Philadelphia Flyers</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>9</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>3</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>6</td><td>7</td><td>13</td><td>20</td></tr>
<tr><td>Pittsburgh Penguins</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>1</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>3</td><td>12</td><td>23</td><td>35</td></tr>
<tr><td>Quebec Nordiques</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>14</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>2</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>12</td><td>9</td><td>17</td><td>26</td></tr>
<tr><td>San Jose Sharks</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>11</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>4</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>7</td><td>8</td><td>14</td><td>22</td></tr>
<tr><td>Seattle Kraken</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>15</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>10</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>5</td><td>16</td><td>30</td><td>46</td></tr>
<tr><td>St. Louis Blues</td><td>4</td><td>2</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>9</td><td>9</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>4</td><td>3</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>6</td><td>9</td><td>15</td><td>24</td></tr>
<tr><td>Tampa Bay Lightning</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>14</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>7</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>7</td><td>6</td><td>12</td><td>18</td></tr>
<tr><td>Toronto Maple Leafs</td><td>4</td><td>1</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>11</td><td>13</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>8</td><td>2</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>3</td><td>5</td><td>11</td><td>20</td><td>31</td></tr>
<tr><td>Vancouver Canucks</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>8</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>3</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>5</td><td>12</td><td>23</td><td>35</td></tr>
<tr><td>Vegas Golden Knights</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>11</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>4</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>7</td><td>10</td><td>18</td><td>28</td></tr>
<tr><td>Washington Capitals</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>12</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>4</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>8</td><td>11</td><td>22</td><td>33</td></tr>
<tr><td>Winnipeg Jets</td><td>4</td><td>1</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>12</td><td>10</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>5</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>4</td><td>5</td><td>12</td><td>21</td><td>33</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>ANH</td><td>6</td><td>4</td><td>0</td><td>0</td><td>103</td><td>36</td><td>39</td><td>28</td><td>0</td><td>120</td><td>35</td><td>48</td><td>103</td><td>14</td><td>4</td><td>28,57%</td><td>22</td><td>4</td><td>81,82%</td><td>0</td><td>47,13%</td><td>53,97%</td><td>58,18%</td><td>102</td><td>86</td><td>51</td><td>30</td><td>57</td><td>24</td><td>2</td><td>0</td></tr>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>1</td><td>2</td><td>3</td><td>0</td><td>111</td><td>37</td><td>28</td><td>46</td><td>0</td><td>112</td><td>39</td><td>28</td><td>93</td><td>16</td><td>3</td><td>18,75%</td><td>11</td><td>4</td><td>63,64%</td><td>0</td><td>43,06%</td><td>40,14%</td><td>48,48%</td><td>94</td><td>95</td><td>51</td><td>30</td><td>65</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>Boston Bruins</td><td>BOS</td><td>4</td><td>1</td><td>3</td><td>0</td><td>112</td><td>43</td><td>38</td><td>31</td><td>0</td><td>123</td><td>36</td><td>36</td><td>81</td><td>15</td><td>3</td><td>20,00%</td><td>17</td><td>3</td><td>82,35%</td><td>0</td><td>45,64%</td><td>48,57%</td><td>48,44%</td><td>100</td><td>92</td><td>48</td><td>29</td><td>63</td><td>24</td><td>0</td><td>0</td></tr>
<tr><td>Buffalo Sabres</td><td>BUF</td><td>5</td><td>4</td><td>4</td><td>0</td><td>128</td><td>35</td><td>41</td><td>52</td><td>0</td><td>107</td><td>28</td><td>22</td><td>82</td><td>15</td><td>2</td><td>13,33%</td><td>10</td><td>2</td><td>80,00%</td><td>0</td><td>43,90%</td><td>45,07%</td><td>56,76%</td><td>88</td><td>101</td><td>51</td><td>29</td><td>71</td><td>26</td><td>0</td><td>0</td></tr>
<tr><td>Calgary Flames</td><td>CGY</td><td>2</td><td>2</td><td>2</td><td>1</td><td>113</td><td>44</td><td>36</td><td>30</td><td>6</td><td>146</td><td>39</td><td>39</td><td>82</td><td>14</td><td>3</td><td>21,43%</td><td>15</td><td>5</td><td>66,67%</td><td>0</td><td>45,33%</td><td>56,43%</td><td>58,93%</td><td>98</td><td>99</td><td>50</td><td>29</td><td>72</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>Carolina Hurricanes</td><td>CAR</td><td>2</td><td>7</td><td>2</td><td>3</td><td>109</td><td>33</td><td>42</td><td>30</td><td>6</td><td>118</td><td>39</td><td>26</td><td>74</td><td>21</td><td>4</td><td>19,05%</td><td>13</td><td>4</td><td>69,23%</td><td>0</td><td>51,95%</td><td>48,59%</td><td>51,56%</td><td>101</td><td>93</td><td>51</td><td>32</td><td>63</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>Chicago Blackhawks</td><td>CHI</td><td>4</td><td>4</td><td>2</td><td>2</td><td>121</td><td>42</td><td>38</td><td>38</td><td>3</td><td>117</td><td>36</td><td>30</td><td>82</td><td>18</td><td>5</td><td>27,78%</td><td>15</td><td>2</td><td>86,67%</td><td>0</td><td>48,85%</td><td>44,14%</td><td>55,17%</td><td>102</td><td>92</td><td>51</td><td>30</td><td>63</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>Colorado Avalanche</td><td>COL</td><td>4</td><td>4</td><td>8</td><td>0</td><td>115</td><td>31</td><td>37</td><td>44</td><td>3</td><td>120</td><td>42</td><td>30</td><td>75</td><td>16</td><td>3</td><td>18,75%</td><td>14</td><td>5</td><td>64,29%</td><td>0</td><td>48,55%</td><td>51,88%</td><td>53,23%</td><td>99</td><td>97</td><td>49</td><td>29</td><td>68</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>Columbus Blue Jackets</td><td>CLB</td><td>10</td><td>7</td><td>2</td><td>0</td><td>104</td><td>34</td><td>35</td><td>35</td><td>0</td><td>108</td><td>32</td><td>30</td><td>68</td><td>9</td><td>5</td><td>55,56%</td><td>13</td><td>0</td><td>100,00%</td><td>0</td><td>48,82%</td><td>50,00%</td><td>44,44%</td><td>97</td><td>89</td><td>54</td><td>31</td><td>60</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>Dallas Stars</td><td>DAL</td><td>2</td><td>3</td><td>0</td><td>0</td><td>111</td><td>35</td><td>38</td><td>38</td><td>0</td><td>126</td><td>35</td><td>36</td><td>78</td><td>11</td><td>2</td><td>18,18%</td><td>17</td><td>1</td><td>94,12%</td><td>0</td><td>51,55%</td><td>57,46%</td><td>55,93%</td><td>96</td><td>93</td><td>51</td><td>30</td><td>62</td><td>25</td><td>1</td><td>0</td></tr>
<tr><td>Detroit Red Wings</td><td>DET</td><td>5</td><td>4</td><td>5</td><td>0</td><td>135</td><td>46</td><td>38</td><td>51</td><td>0</td><td>115</td><td>33</td><td>24</td><td>73</td><td>17</td><td>7</td><td>41,18%</td><td>10</td><td>2</td><td>80,00%</td><td>0</td><td>47,89%</td><td>47,97%</td><td>56,14%</td><td>98</td><td>95</td><td>47</td><td>28</td><td>68</td><td>24</td><td>0</td><td>0</td></tr>
<tr><td>Edmonton Oilers</td><td>EDM</td><td>7</td><td>5</td><td>5</td><td>1</td><td>139</td><td>46</td><td>51</td><td>38</td><td>4</td><td>118</td><td>32</td><td>43</td><td>85</td><td>16</td><td>4</td><td>25,00%</td><td>15</td><td>7</td><td>53,33%</td><td>0</td><td>50,70%</td><td>57,43%</td><td>40,91%</td><td>91</td><td>101</td><td>50</td><td>28</td><td>72</td><td>24</td><td>0</td><td>0</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>8</td><td>2</td><td>0</td><td>0</td><td>130</td><td>44</td><td>33</td><td>52</td><td>1</td><td>92</td><td>18</td><td>30</td><td>85</td><td>12</td><td>4</td><td>33,33%</td><td>12</td><td>1</td><td>91,67%</td><td>0</td><td>50,77%</td><td>50,00%</td><td>44,23%</td><td>93</td><td>101</td><td>50</td><td>28</td><td>71</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>5</td><td>7</td><td>1</td><td>0</td><td>123</td><td>53</td><td>39</td><td>31</td><td>0</td><td>114</td><td>26</td><td>30</td><td>87</td><td>16</td><td>5</td><td>31,25%</td><td>13</td><td>4</td><td>69,23%</td><td>0</td><td>55,30%</td><td>52,94%</td><td>50,00%</td><td>89</td><td>99</td><td>51</td><td>30</td><td>69</td><td>27</td><td>0</td><td>0</td></tr>
<tr><td>Minnesota Wild</td><td>MIN</td><td>3</td><td>5</td><td>0</td><td>0</td><td>99</td><td>34</td><td>30</td><td>35</td><td>0</td><td>115</td><td>33</td><td>32</td><td>62</td><td>13</td><td>0</td><td>0,00%</td><td>14</td><td>8</td><td>42,86%</td><td>0</td><td>49,62%</td><td>47,97%</td><td>48,39%</td><td>93</td><td>97</td><td>50</td><td>27</td><td>68</td><td>26</td><td>1</td><td>0</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>6</td><td>2</td><td>6</td><td>1</td><td>127</td><td>45</td><td>34</td><td>45</td><td>3</td><td>135</td><td>38</td><td>38</td><td>78</td><td>14</td><td>4</td><td>28,57%</td><td>15</td><td>4</td><td>73,33%</td><td>0</td><td>49,65%</td><td>50,72%</td><td>49,23%</td><td>101</td><td>93</td><td>51</td><td>29</td><td>64</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>9</td><td>1</td><td>4</td><td>0</td><td>104</td><td>36</td><td>36</td><td>32</td><td>0</td><td>115</td><td>40</td><td>32</td><td>76</td><td>14</td><td>2</td><td>14,29%</td><td>15</td><td>2</td><td>86,67%</td><td>0</td><td>55,00%</td><td>55,47%</td><td>53,45%</td><td>93</td><td>97</td><td>49</td><td>29</td><td>69</td><td>25</td><td>1</td><td>0</td></tr>
<tr><td>New Jersey Devils</td><td>NJD</td><td>3</td><td>1</td><td>4</td><td>0</td><td>107</td><td>37</td><td>28</td><td>42</td><td>0</td><td>133</td><td>37</td><td>40</td><td>92</td><td>10</td><td>2</td><td>20,00%</td><td>19</td><td>4</td><td>78,95%</td><td>0</td><td>54,36%</td><td>52,59%</td><td>56,00%</td><td>98</td><td>93</td><td>48</td><td>29</td><td>65</td><td>23</td><td>1</td><td>0</td></tr>
<tr><td>New York Islanders</td><td>NYI</td><td>4</td><td>6</td><td>3</td><td>1</td><td>111</td><td>40</td><td>39</td><td>32</td><td>2</td><td>124</td><td>43</td><td>36</td><td>59</td><td>18</td><td>2</td><td>11,11%</td><td>18</td><td>4</td><td>77,78%</td><td>0</td><td>51,45%</td><td>54,48%</td><td>54,69%</td><td>97</td><td>99</td><td>50</td><td>29</td><td>70</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>New York Rangers</td><td>NYR</td><td>4</td><td>4</td><td>6</td><td>0</td><td>111</td><td>39</td><td>28</td><td>41</td><td>6</td><td>89</td><td>34</td><td>40</td><td>85</td><td>21</td><td>5</td><td>23,81%</td><td>20</td><td>3</td><td>85,00%</td><td>0</td><td>56,49%</td><td>50,00%</td><td>44,00%</td><td>97</td><td>99</td><td>49</td><td>31</td><td>70</td><td>24</td><td>1</td><td>0</td></tr>
<tr><td>Ottawa Senators</td><td>OTT</td><td>2</td><td>4</td><td>4</td><td>0</td><td>118</td><td>37</td><td>34</td><td>41</td><td>8</td><td>108</td><td>31</td><td>36</td><td>94</td><td>16</td><td>3</td><td>18,75%</td><td>18</td><td>2</td><td>88,89%</td><td>0</td><td>49,66%</td><td>53,80%</td><td>51,47%</td><td>95</td><td>97</td><td>52</td><td>31</td><td>64</td><td>26</td><td>0</td><td>0</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>5</td><td>1</td><td>1</td><td>0</td><td>104</td><td>41</td><td>31</td><td>32</td><td>0</td><td>94</td><td>30</td><td>30</td><td>73</td><td>18</td><td>3</td><td>16,67%</td><td>15</td><td>3</td><td>80,00%</td><td>0</td><td>54,05%</td><td>44,20%</td><td>46,15%</td><td>94</td><td>97</td><td>49</td><td>28</td><td>68</td><td>25</td><td>1</td><td>0</td></tr>
<tr><td>Pittsburgh Penguins</td><td>PIT</td><td>7</td><td>2</td><td>3</td><td>0</td><td>116</td><td>43</td><td>37</td><td>36</td><td>0</td><td>99</td><td>16</td><td>14</td><td>66</td><td>17</td><td>1</td><td>5,88%</td><td>6</td><td>0</td><td>100,00%</td><td>0</td><td>48,39%</td><td>57,14%</td><td>46,43%</td><td>90</td><td>99</td><td>51</td><td>30</td><td>69</td><td>26</td><td>1</td><td>0</td></tr>
<tr><td>Quebec Nordiques</td><td>QUE</td><td>4</td><td>2</td><td>3</td><td>0</td><td>120</td><td>37</td><td>37</td><td>46</td><td>0</td><td>128</td><td>41</td><td>30</td><td>77</td><td>18</td><td>2</td><td>11,11%</td><td>14</td><td>5</td><td>64,29%</td><td>0</td><td>47,92%</td><td>49,65%</td><td>55,22%</td><td>93</td><td>97</td><td>50</td><td>29</td><td>68</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>San Jose Sharks</td><td>SJS</td><td>3</td><td>3</td><td>2</td><td>0</td><td>88</td><td>34</td><td>23</td><td>31</td><td>0</td><td>117</td><td>33</td><td>34</td><td>88</td><td>17</td><td>4</td><td>23,53%</td><td>15</td><td>3</td><td>80,00%</td><td>0</td><td>46,62%</td><td>52,67%</td><td>41,27%</td><td>100</td><td>91</td><td>50</td><td>30</td><td>62</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>Seattle Kraken</td><td>SEA</td><td>8</td><td>7</td><td>1</td><td>0</td><td>142</td><td>49</td><td>43</td><td>50</td><td>0</td><td>126</td><td>36</td><td>28</td><td>88</td><td>14</td><td>2</td><td>14,29%</td><td>14</td><td>2</td><td>85,71%</td><td>0</td><td>50,00%</td><td>52,90%</td><td>45,45%</td><td>93</td><td>95</td><td>52</td><td>28</td><td>66</td><td>27</td><td>0</td><td>0</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>2</td><td>5</td><td>2</td><td>0</td><td>117</td><td>33</td><td>39</td><td>45</td><td>0</td><td>126</td><td>37</td><td>44</td><td>71</td><td>10</td><td>2</td><td>20,00%</td><td>21</td><td>4</td><td>80,95%</td><td>0</td><td>49,04%</td><td>48,55%</td><td>50,00%</td><td>96</td><td>95</td><td>49</td><td>29</td><td>66</td><td>24</td><td>1</td><td>0</td></tr>
<tr><td>Tampa Bay Lightning</td><td>TBL</td><td>2</td><td>2</td><td>2</td><td>0</td><td>88</td><td>32</td><td>30</td><td>26</td><td>0</td><td>121</td><td>45</td><td>42</td><td>75</td><td>10</td><td>3</td><td>30,00%</td><td>21</td><td>3</td><td>85,71%</td><td>0</td><td>48,99%</td><td>52,50%</td><td>57,14%</td><td>101</td><td>90</td><td>49</td><td>30</td><td>61</td><td>24</td><td>0</td><td>0</td></tr>
<tr><td>Toronto Maple Leafs</td><td>TOR</td><td>5</td><td>4</td><td>2</td><td>0</td><td>109</td><td>41</td><td>33</td><td>35</td><td>0</td><td>108</td><td>36</td><td>40</td><td>63</td><td>14</td><td>2</td><td>14,29%</td><td>19</td><td>3</td><td>84,21%</td><td>1</td><td>51,09%</td><td>59,38%</td><td>46,43%</td><td>90</td><td>102</td><td>48</td><td>28</td><td>73</td><td>24</td><td>0</td><td>1</td></tr>
<tr><td>Vancouver Canucks</td><td>VAN</td><td>3</td><td>2</td><td>7</td><td>0</td><td>121</td><td>37</td><td>35</td><td>49</td><td>0</td><td>96</td><td>37</td><td>26</td><td>68</td><td>22</td><td>3</td><td>13,64%</td><td>12</td><td>4</td><td>66,67%</td><td>0</td><td>49,21%</td><td>51,68%</td><td>44,23%</td><td>94</td><td>99</td><td>48</td><td>29</td><td>70</td><td>24</td><td>0</td><td>0</td></tr>
<tr><td>Vegas Golden Knights</td><td>VEG</td><td>5</td><td>4</td><td>1</td><td>0</td><td>110</td><td>35</td><td>35</td><td>40</td><td>0</td><td>102</td><td>24</td><td>30</td><td>77</td><td>8</td><td>1</td><td>12,50%</td><td>12</td><td>2</td><td>83,33%</td><td>0</td><td>53,73%</td><td>56,52%</td><td>52,86%</td><td>92</td><td>95</td><td>53</td><td>30</td><td>65</td><td>27</td><td>0</td><td>0</td></tr>
<tr><td>Washington Capitals</td><td>WSH</td><td>3</td><td>8</td><td>0</td><td>0</td><td>128</td><td>35</td><td>46</td><td>47</td><td>0</td><td>124</td><td>32</td><td>30</td><td>63</td><td>15</td><td>5</td><td>33,33%</td><td>12</td><td>2</td><td>83,33%</td><td>0</td><td>43,48%</td><td>46,36%</td><td>47,69%</td><td>97</td><td>93</td><td>50</td><td>29</td><td>65</td><td>26</td><td>0</td><td>0</td></tr>
<tr><td>Winnipeg Jets</td><td>WPG</td><td>6</td><td>3</td><td>2</td><td>2</td><td>133</td><td>36</td><td>40</td><td>56</td><td>4</td><td>111</td><td>27</td><td>22</td><td>72</td><td>8</td><td>2</td><td>25,00%</td><td>10</td><td>0</td><td>100,00%</td><td>0</td><td>40,94%</td><td>54,11%</td><td>54,72%</td><td>96</td><td>97</td><td>52</td><td>27</td><td>68</td><td>26</td><td>0</td><td>1</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,80</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Columbus Blue Jackets</td><td>4,75</td></tr>
<tr><td>2</td><td>Edmonton Oilers</td><td>4,50</td></tr>
<tr><td>3</td><td>Colorado Avalanche</td><td>4,00</td></tr>
<tr><td>4</td><td>Seattle Kraken</td><td>4,00</td></tr>
<tr><td>5</td><td>Montreal Canadiens</td><td>3,75</td></tr>
<tr><td>6</td><td>Detroit Red Wings</td><td>3,50</td></tr>
<tr><td>7</td><td>Nashville Predators</td><td>3,50</td></tr>
<tr><td>8</td><td>New York Islanders</td><td>3,50</td></tr>
<tr><td>9</td><td>New York Rangers</td><td>3,50</td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>3,25</td></tr>
<tr><td>11</td><td>Carolina Hurricanes</td><td>3,25</td></tr>
<tr><td>12</td><td>Los Angeles Kings</td><td>3,25</td></tr>
<tr><td>13</td><td>Winnipeg Jets</td><td>3,00</td></tr>
<tr><td>14</td><td>Chicago Blackhawks</td><td>3,00</td></tr>
<tr><td>15</td><td>Pittsburgh Penguins</td><td>3,00</td></tr>
<tr><td>16</td><td>Vancouver Canucks</td><td>3,00</td></tr>
<tr><td>17</td><td>Toronto Maple Leafs</td><td>2,75</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>2,75</td></tr>
<tr><td>19</td><td>Anaheim Ducks</td><td>2,50</td></tr>
<tr><td>20</td><td>Florida Panthers</td><td>2,50</td></tr>
<tr><td>21</td><td>Ottawa Senators</td><td>2,50</td></tr>
<tr><td>22</td><td>Vegas Golden Knights</td><td>2,50</td></tr>
<tr><td>23</td><td>Quebec Nordiques</td><td>2,25</td></tr>
<tr><td>24</td><td>St. Louis Blues</td><td>2,25</td></tr>
<tr><td>25</td><td>Boston Bruins</td><td>2,00</td></tr>
<tr><td>26</td><td>Minnesota Wild</td><td>2,00</td></tr>
<tr><td>27</td><td>New Jersey Devils</td><td>2,00</td></tr>
<tr><td>28</td><td>San Jose Sharks</td><td>2,00</td></tr>
<tr><td>29</td><td>Philadelphia Flyers</td><td>1,75</td></tr>
<tr><td>30</td><td>Tampa Bay Lightning</td><td>1,50</td></tr>
<tr><td>31</td><td>Arizona Coyotes</td><td>1,50</td></tr>
<tr><td>32</td><td>Calgary Flames</td><td>1,50</td></tr>
<tr><td>33</td><td>Dallas Stars</td><td>1,25</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2,80</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Pittsburgh Penguins</td><td>1,00</td></tr>
<tr><td>2</td><td>Nashville Predators</td><td>2,00</td></tr>
<tr><td>3</td><td>Dallas Stars</td><td>2,00</td></tr>
<tr><td>4</td><td>Vancouver Canucks</td><td>2,00</td></tr>
<tr><td>5</td><td>St. Louis Blues</td><td>2,25</td></tr>
<tr><td>6</td><td>Philadelphia Flyers</td><td>2,25</td></tr>
<tr><td>7</td><td>Ottawa Senators</td><td>2,25</td></tr>
<tr><td>8</td><td>Florida Panthers</td><td>2,25</td></tr>
<tr><td>9</td><td>Anaheim Ducks</td><td>2,25</td></tr>
<tr><td>10</td><td>Winnipeg Jets</td><td>2,50</td></tr>
<tr><td>11</td><td>New York Rangers</td><td>2,50</td></tr>
<tr><td>12</td><td>New Jersey Devils</td><td>2,50</td></tr>
<tr><td>13</td><td>Los Angeles Kings</td><td>2,50</td></tr>
<tr><td>14</td><td>Detroit Red Wings</td><td>2,50</td></tr>
<tr><td>15</td><td>Columbus Blue Jackets</td><td>2,50</td></tr>
<tr><td>16</td><td>Vegas Golden Knights</td><td>2,75</td></tr>
<tr><td>17</td><td>San Jose Sharks</td><td>2,75</td></tr>
<tr><td>18</td><td>Edmonton Oilers</td><td>2,75</td></tr>
<tr><td>19</td><td>Carolina Hurricanes</td><td>2,75</td></tr>
<tr><td>20</td><td>Buffalo Sabres</td><td>2,75</td></tr>
<tr><td>21</td><td>Montreal Canadiens</td><td>2,75</td></tr>
<tr><td>22</td><td>Washington Capitals</td><td>3,00</td></tr>
<tr><td>23</td><td>Colorado Avalanche</td><td>3,00</td></tr>
<tr><td>24</td><td>Toronto Maple Leafs</td><td>3,25</td></tr>
<tr><td>25</td><td>Arizona Coyotes</td><td>3,25</td></tr>
<tr><td>26</td><td>Tampa Bay Lightning</td><td>3,50</td></tr>
<tr><td>27</td><td>Quebec Nordiques</td><td>3,50</td></tr>
<tr><td>28</td><td>Chicago Blackhawks</td><td>3,50</td></tr>
<tr><td>29</td><td>Boston Bruins</td><td>3,50</td></tr>
<tr><td>30</td><td>Seattle Kraken</td><td>3,75</td></tr>
<tr><td>31</td><td>New York Islanders</td><td>3,75</td></tr>
<tr><td>32</td><td>Minnesota Wild</td><td>4,00</td></tr>
<tr><td>33</td><td>Calgary Flames</td><td>4,50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Pittsburgh Penguins</td><td>300,00%</td></tr>
<tr><td>2</td><td>Columbus Blue Jackets</td><td>190,00%</td></tr>
<tr><td>3</td><td>Nashville Predators</td><td>175,00%</td></tr>
<tr><td>4</td><td>Edmonton Oilers</td><td>163,64%</td></tr>
<tr><td>5</td><td>Vancouver Canucks</td><td>150,00%</td></tr>
<tr><td>6</td><td>Detroit Red Wings</td><td>140,00%</td></tr>
<tr><td>7</td><td>New York Rangers</td><td>140,00%</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>136,36%</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>133,33%</td></tr>
<tr><td>10</td><td>Los Angeles Kings</td><td>130,00%</td></tr>
<tr><td>11</td><td>Winnipeg Jets</td><td>120,00%</td></tr>
<tr><td>12</td><td>Carolina Hurricanes</td><td>118,18%</td></tr>
<tr><td>13</td><td>Buffalo Sabres</td><td>118,18%</td></tr>
<tr><td>14</td><td>Anaheim Ducks</td><td>111,11%</td></tr>
<tr><td>15</td><td>Florida Panthers</td><td>111,11%</td></tr>
<tr><td>16</td><td>Ottawa Senators</td><td>111,11%</td></tr>
<tr><td>17</td><td>Seattle Kraken</td><td>106,67%</td></tr>
<tr><td>18</td><td>St. Louis Blues</td><td>100,00%</td></tr>
<tr><td>19</td><td>New York Islanders</td><td>93,33%</td></tr>
<tr><td>20</td><td>Washington Capitals</td><td>91,67%</td></tr>
<tr><td>21</td><td>Vegas Golden Knights</td><td>90,91%</td></tr>
<tr><td>22</td><td>Chicago Blackhawks</td><td>85,71%</td></tr>
<tr><td>23</td><td>Toronto Maple Leafs</td><td>84,62%</td></tr>
<tr><td>24</td><td>New Jersey Devils</td><td>80,00%</td></tr>
<tr><td>25</td><td>Philadelphia Flyers</td><td>77,78%</td></tr>
<tr><td>26</td><td>San Jose Sharks</td><td>72,73%</td></tr>
<tr><td>27</td><td>Quebec Nordiques</td><td>64,29%</td></tr>
<tr><td>28</td><td>Dallas Stars</td><td>62,50%</td></tr>
<tr><td>29</td><td>Boston Bruins</td><td>57,14%</td></tr>
<tr><td>30</td><td>Minnesota Wild</td><td>50,00%</td></tr>
<tr><td>31</td><td>Arizona Coyotes</td><td>46,15%</td></tr>
<tr><td>32</td><td>Tampa Bay Lightning</td><td>42,86%</td></tr>
<tr><td>33</td><td>Calgary Flames</td><td>33,33%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 20,94%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Columbus Blue Jackets</td><td>55,56%</td></tr>
<tr><td>2</td><td>Detroit Red Wings</td><td>41,18%</td></tr>
<tr><td>3</td><td>Florida Panthers</td><td>33,33%</td></tr>
<tr><td>4</td><td>Washington Capitals</td><td>33,33%</td></tr>
<tr><td>5</td><td>Los Angeles Kings</td><td>31,25%</td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>30,00%</td></tr>
<tr><td>7</td><td>Anaheim Ducks</td><td>28,57%</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>28,57%</td></tr>
<tr><td>9</td><td>Chicago Blackhawks</td><td>27,78%</td></tr>
<tr><td>10</td><td>Edmonton Oilers</td><td>25,00%</td></tr>
<tr><td>11</td><td>Winnipeg Jets</td><td>25,00%</td></tr>
<tr><td>12</td><td>New York Rangers</td><td>23,81%</td></tr>
<tr><td>13</td><td>San Jose Sharks</td><td>23,53%</td></tr>
<tr><td>14</td><td>Calgary Flames</td><td>21,43%</td></tr>
<tr><td>15</td><td>New Jersey Devils</td><td>20,00%</td></tr>
<tr><td>16</td><td>Boston Bruins</td><td>20,00%</td></tr>
<tr><td>17</td><td>St. Louis Blues</td><td>20,00%</td></tr>
<tr><td>18</td><td>Carolina Hurricanes</td><td>19,05%</td></tr>
<tr><td>19</td><td>Arizona Coyotes</td><td>18,75%</td></tr>
<tr><td>20</td><td>Colorado Avalanche</td><td>18,75%</td></tr>
<tr><td>21</td><td>Ottawa Senators</td><td>18,75%</td></tr>
<tr><td>22</td><td>Dallas Stars</td><td>18,18%</td></tr>
<tr><td>23</td><td>Philadelphia Flyers</td><td>16,67%</td></tr>
<tr><td>24</td><td>Nashville Predators</td><td>14,29%</td></tr>
<tr><td>25</td><td>Seattle Kraken</td><td>14,29%</td></tr>
<tr><td>26</td><td>Toronto Maple Leafs</td><td>14,29%</td></tr>
<tr><td>27</td><td>Vancouver Canucks</td><td>13,64%</td></tr>
<tr><td>28</td><td>Buffalo Sabres</td><td>13,33%</td></tr>
<tr><td>29</td><td>Vegas Golden Knights</td><td>12,50%</td></tr>
<tr><td>30</td><td>New York Islanders</td><td>11,11%</td></tr>
<tr><td>31</td><td>Quebec Nordiques</td><td>11,11%</td></tr>
<tr><td>32</td><td>Pittsburgh Penguins</td><td>5,88%</td></tr>
<tr><td>33</td><td>Minnesota Wild</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 79,06%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Columbus Blue Jackets</td><td>100,00%</td></tr>
<tr><td>2</td><td>Pittsburgh Penguins</td><td>100,00%</td></tr>
<tr><td>3</td><td>Winnipeg Jets</td><td>100,00%</td></tr>
<tr><td>4</td><td>Dallas Stars</td><td>94,12%</td></tr>
<tr><td>5</td><td>Florida Panthers</td><td>91,67%</td></tr>
<tr><td>6</td><td>Ottawa Senators</td><td>88,89%</td></tr>
<tr><td>7</td><td>Chicago Blackhawks</td><td>86,67%</td></tr>
<tr><td>8</td><td>Nashville Predators</td><td>86,67%</td></tr>
<tr><td>9</td><td>Seattle Kraken</td><td>85,71%</td></tr>
<tr><td>10</td><td>Tampa Bay Lightning</td><td>85,71%</td></tr>
<tr><td>11</td><td>New York Rangers</td><td>85,00%</td></tr>
<tr><td>12</td><td>Toronto Maple Leafs</td><td>84,21%</td></tr>
<tr><td>13</td><td>Vegas Golden Knights</td><td>83,33%</td></tr>
<tr><td>14</td><td>Washington Capitals</td><td>83,33%</td></tr>
<tr><td>15</td><td>Boston Bruins</td><td>82,35%</td></tr>
<tr><td>16</td><td>Anaheim Ducks</td><td>81,82%</td></tr>
<tr><td>17</td><td>St. Louis Blues</td><td>80,95%</td></tr>
<tr><td>18</td><td>Buffalo Sabres</td><td>80,00%</td></tr>
<tr><td>19</td><td>Detroit Red Wings</td><td>80,00%</td></tr>
<tr><td>20</td><td>Philadelphia Flyers</td><td>80,00%</td></tr>
<tr><td>21</td><td>San Jose Sharks</td><td>80,00%</td></tr>
<tr><td>22</td><td>New Jersey Devils</td><td>78,95%</td></tr>
<tr><td>23</td><td>New York Islanders</td><td>77,78%</td></tr>
<tr><td>24</td><td>Montreal Canadiens</td><td>73,33%</td></tr>
<tr><td>25</td><td>Carolina Hurricanes</td><td>69,23%</td></tr>
<tr><td>26</td><td>Los Angeles Kings</td><td>69,23%</td></tr>
<tr><td>27</td><td>Calgary Flames</td><td>66,67%</td></tr>
<tr><td>28</td><td>Vancouver Canucks</td><td>66,67%</td></tr>
<tr><td>29</td><td>Colorado Avalanche</td><td>64,29%</td></tr>
<tr><td>30</td><td>Quebec Nordiques</td><td>64,29%</td></tr>
<tr><td>31</td><td>Arizona Coyotes</td><td>63,64%</td></tr>
<tr><td>32</td><td>Edmonton Oilers</td><td>53,33%</td></tr>
<tr><td>33</td><td>Minnesota Wild</td><td>42,86%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Columbus Blue Jackets</td><td>155,56%</td></tr>
<tr><td>2</td><td>Florida Panthers</td><td>125,00%</td></tr>
<tr><td>3</td><td>Winnipeg Jets</td><td>125,00%</td></tr>
<tr><td>4</td><td>Detroit Red Wings</td><td>121,18%</td></tr>
<tr><td>5</td><td>Washington Capitals</td><td>116,67%</td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>115,71%</td></tr>
<tr><td>7</td><td>Chicago Blackhawks</td><td>114,44%</td></tr>
<tr><td>8</td><td>Dallas Stars</td><td>112,30%</td></tr>
<tr><td>9</td><td>Anaheim Ducks</td><td>110,39%</td></tr>
<tr><td>10</td><td>New York Rangers</td><td>108,81%</td></tr>
<tr><td>11</td><td>Ottawa Senators</td><td>107,64%</td></tr>
<tr><td>12</td><td>Pittsburgh Penguins</td><td>105,88%</td></tr>
<tr><td>13</td><td>San Jose Sharks</td><td>103,53%</td></tr>
<tr><td>14</td><td>Boston Bruins</td><td>102,35%</td></tr>
<tr><td>15</td><td>Montreal Canadiens</td><td>101,90%</td></tr>
<tr><td>16</td><td>Nashville Predators</td><td>100,95%</td></tr>
<tr><td>17</td><td>St. Louis Blues</td><td>100,95%</td></tr>
<tr><td>18</td><td>Los Angeles Kings</td><td>100,48%</td></tr>
<tr><td>19</td><td>Seattle Kraken</td><td>100,00%</td></tr>
<tr><td>20</td><td>New Jersey Devils</td><td>98,95%</td></tr>
<tr><td>21</td><td>Toronto Maple Leafs</td><td>98,50%</td></tr>
<tr><td>22</td><td>Philadelphia Flyers</td><td>96,67%</td></tr>
<tr><td>23</td><td>Vegas Golden Knights</td><td>95,83%</td></tr>
<tr><td>24</td><td>Buffalo Sabres</td><td>93,33%</td></tr>
<tr><td>25</td><td>New York Islanders</td><td>88,89%</td></tr>
<tr><td>26</td><td>Carolina Hurricanes</td><td>88,28%</td></tr>
<tr><td>27</td><td>Calgary Flames</td><td>88,10%</td></tr>
<tr><td>28</td><td>Colorado Avalanche</td><td>83,04%</td></tr>
<tr><td>29</td><td>Arizona Coyotes</td><td>82,39%</td></tr>
<tr><td>30</td><td>Vancouver Canucks</td><td>80,30%</td></tr>
<tr><td>31</td><td>Edmonton Oilers</td><td>78,33%</td></tr>
<tr><td>32</td><td>Quebec Nordiques</td><td>75,40%</td></tr>
<tr><td>33</td><td>Minnesota Wild</td><td>42,86%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28,84</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Seattle Kraken</td><td>35,50</td></tr>
<tr><td>2</td><td>Edmonton Oilers</td><td>34,75</td></tr>
<tr><td>3</td><td>Detroit Red Wings</td><td>33,75</td></tr>
<tr><td>4</td><td>Winnipeg Jets</td><td>33,25</td></tr>
<tr><td>5</td><td>Florida Panthers</td><td>32,50</td></tr>
<tr><td>6</td><td>Buffalo Sabres</td><td>32,00</td></tr>
<tr><td>7</td><td>Washington Capitals</td><td>32,00</td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>31,75</td></tr>
<tr><td>9</td><td>Los Angeles Kings</td><td>30,75</td></tr>
<tr><td>10</td><td>Chicago Blackhawks</td><td>30,25</td></tr>
<tr><td>11</td><td>Vancouver Canucks</td><td>30,25</td></tr>
<tr><td>12</td><td>Quebec Nordiques</td><td>30,00</td></tr>
<tr><td>13</td><td>Ottawa Senators</td><td>29,50</td></tr>
<tr><td>14</td><td>St. Louis Blues</td><td>29,25</td></tr>
<tr><td>15</td><td>Pittsburgh Penguins</td><td>29,00</td></tr>
<tr><td>16</td><td>Colorado Avalanche</td><td>28,75</td></tr>
<tr><td>17</td><td>Calgary Flames</td><td>28,25</td></tr>
<tr><td>18</td><td>Boston Bruins</td><td>28,00</td></tr>
<tr><td>19</td><td>Arizona Coyotes</td><td>27,75</td></tr>
<tr><td>20</td><td>Dallas Stars</td><td>27,75</td></tr>
<tr><td>21</td><td>New York Islanders</td><td>27,75</td></tr>
<tr><td>22</td><td>New York Rangers</td><td>27,75</td></tr>
<tr><td>23</td><td>Vegas Golden Knights</td><td>27,50</td></tr>
<tr><td>24</td><td>Carolina Hurricanes</td><td>27,25</td></tr>
<tr><td>25</td><td>Toronto Maple Leafs</td><td>27,25</td></tr>
<tr><td>26</td><td>New Jersey Devils</td><td>26,75</td></tr>
<tr><td>27</td><td>Columbus Blue Jackets</td><td>26,00</td></tr>
<tr><td>28</td><td>Nashville Predators</td><td>26,00</td></tr>
<tr><td>29</td><td>Philadelphia Flyers</td><td>26,00</td></tr>
<tr><td>30</td><td>Anaheim Ducks</td><td>25,75</td></tr>
<tr><td>31</td><td>Minnesota Wild</td><td>24,75</td></tr>
<tr><td>32</td><td>San Jose Sharks</td><td>22,00</td></tr>
<tr><td>33</td><td>Tampa Bay Lightning</td><td>22,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28,84</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>New York Rangers</td><td>22,25</td></tr>
<tr><td>2</td><td>Florida Panthers</td><td>23,00</td></tr>
<tr><td>3</td><td>Philadelphia Flyers</td><td>23,50</td></tr>
<tr><td>4</td><td>Vancouver Canucks</td><td>24,00</td></tr>
<tr><td>5</td><td>Pittsburgh Penguins</td><td>24,75</td></tr>
<tr><td>6</td><td>Vegas Golden Knights</td><td>25,50</td></tr>
<tr><td>7</td><td>Buffalo Sabres</td><td>26,75</td></tr>
<tr><td>8</td><td>Toronto Maple Leafs</td><td>27,00</td></tr>
<tr><td>9</td><td>Ottawa Senators</td><td>27,00</td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>27,00</td></tr>
<tr><td>11</td><td>Winnipeg Jets</td><td>27,75</td></tr>
<tr><td>12</td><td>Arizona Coyotes</td><td>28,00</td></tr>
<tr><td>13</td><td>Los Angeles Kings</td><td>28,50</td></tr>
<tr><td>14</td><td>Nashville Predators</td><td>28,75</td></tr>
<tr><td>15</td><td>Minnesota Wild</td><td>28,75</td></tr>
<tr><td>16</td><td>Detroit Red Wings</td><td>28,75</td></tr>
<tr><td>17</td><td>San Jose Sharks</td><td>29,25</td></tr>
<tr><td>18</td><td>Chicago Blackhawks</td><td>29,25</td></tr>
<tr><td>19</td><td>Edmonton Oilers</td><td>29,50</td></tr>
<tr><td>20</td><td>Carolina Hurricanes</td><td>29,50</td></tr>
<tr><td>21</td><td>Colorado Avalanche</td><td>30,00</td></tr>
<tr><td>22</td><td>Anaheim Ducks</td><td>30,00</td></tr>
<tr><td>23</td><td>Tampa Bay Lightning</td><td>30,25</td></tr>
<tr><td>24</td><td>Boston Bruins</td><td>30,75</td></tr>
<tr><td>25</td><td>Washington Capitals</td><td>31,00</td></tr>
<tr><td>26</td><td>New York Islanders</td><td>31,00</td></tr>
<tr><td>27</td><td>St. Louis Blues</td><td>31,50</td></tr>
<tr><td>28</td><td>Seattle Kraken</td><td>31,50</td></tr>
<tr><td>29</td><td>Dallas Stars</td><td>31,50</td></tr>
<tr><td>30</td><td>Quebec Nordiques</td><td>32,00</td></tr>
<tr><td>31</td><td>New Jersey Devils</td><td>33,25</td></tr>
<tr><td>32</td><td>Montreal Canadiens</td><td>33,75</td></tr>
<tr><td>33</td><td>Calgary Flames</td><td>36,50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Florida Panthers</td><td>141,30%</td></tr>
<tr><td>2</td><td>Vancouver Canucks</td><td>126,04%</td></tr>
<tr><td>3</td><td>New York Rangers</td><td>124,72%</td></tr>
<tr><td>4</td><td>Winnipeg Jets</td><td>119,82%</td></tr>
<tr><td>5</td><td>Buffalo Sabres</td><td>119,63%</td></tr>
<tr><td>6</td><td>Edmonton Oilers</td><td>117,80%</td></tr>
<tr><td>7</td><td>Detroit Red Wings</td><td>117,39%</td></tr>
<tr><td>8</td><td>Pittsburgh Penguins</td><td>117,17%</td></tr>
<tr><td>9</td><td>Seattle Kraken</td><td>112,70%</td></tr>
<tr><td>10</td><td>Philadelphia Flyers</td><td>110,64%</td></tr>
<tr><td>11</td><td>Ottawa Senators</td><td>109,26%</td></tr>
<tr><td>12</td><td>Los Angeles Kings</td><td>107,89%</td></tr>
<tr><td>13</td><td>Vegas Golden Knights</td><td>107,84%</td></tr>
<tr><td>14</td><td>Chicago Blackhawks</td><td>103,42%</td></tr>
<tr><td>15</td><td>Washington Capitals</td><td>103,23%</td></tr>
<tr><td>16</td><td>Toronto Maple Leafs</td><td>100,93%</td></tr>
<tr><td>17</td><td>Arizona Coyotes</td><td>99,11%</td></tr>
<tr><td>18</td><td>Columbus Blue Jackets</td><td>96,30%</td></tr>
<tr><td>19</td><td>Colorado Avalanche</td><td>95,83%</td></tr>
<tr><td>20</td><td>Montreal Canadiens</td><td>94,07%</td></tr>
<tr><td>21</td><td>Quebec Nordiques</td><td>93,75%</td></tr>
<tr><td>22</td><td>St. Louis Blues</td><td>92,86%</td></tr>
<tr><td>23</td><td>Carolina Hurricanes</td><td>92,37%</td></tr>
<tr><td>24</td><td>Boston Bruins</td><td>91,06%</td></tr>
<tr><td>25</td><td>Nashville Predators</td><td>90,43%</td></tr>
<tr><td>26</td><td>New York Islanders</td><td>89,52%</td></tr>
<tr><td>27</td><td>Dallas Stars</td><td>88,10%</td></tr>
<tr><td>28</td><td>Minnesota Wild</td><td>86,09%</td></tr>
<tr><td>29</td><td>Anaheim Ducks</td><td>85,83%</td></tr>
<tr><td>30</td><td>New Jersey Devils</td><td>80,45%</td></tr>
<tr><td>31</td><td>Calgary Flames</td><td>77,40%</td></tr>
<tr><td>32</td><td>San Jose Sharks</td><td>75,21%</td></tr>
<tr><td>33</td><td>Tampa Bay Lightning</td><td>72,73%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8,15</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Pittsburgh Penguins</td><td>3,50</td></tr>
<tr><td>2</td><td>Buffalo Sabres</td><td>5,50</td></tr>
<tr><td>3</td><td>Winnipeg Jets</td><td>5,50</td></tr>
<tr><td>4</td><td>Detroit Red Wings</td><td>6,00</td></tr>
<tr><td>5</td><td>Vancouver Canucks</td><td>6,50</td></tr>
<tr><td>6</td><td>Carolina Hurricanes</td><td>6,50</td></tr>
<tr><td>7</td><td>Seattle Kraken</td><td>7,00</td></tr>
<tr><td>8</td><td>Arizona Coyotes</td><td>7,00</td></tr>
<tr><td>9</td><td>Washington Capitals</td><td>7,50</td></tr>
<tr><td>10</td><td>Vegas Golden Knights</td><td>7,50</td></tr>
<tr><td>11</td><td>Quebec Nordiques</td><td>7,50</td></tr>
<tr><td>12</td><td>Philadelphia Flyers</td><td>7,50</td></tr>
<tr><td>13</td><td>Los Angeles Kings</td><td>7,50</td></tr>
<tr><td>14</td><td>Florida Panthers</td><td>7,50</td></tr>
<tr><td>15</td><td>Columbus Blue Jackets</td><td>7,50</td></tr>
<tr><td>16</td><td>Colorado Avalanche</td><td>7,50</td></tr>
<tr><td>17</td><td>Chicago Blackhawks</td><td>7,50</td></tr>
<tr><td>18</td><td>Minnesota Wild</td><td>8,00</td></tr>
<tr><td>19</td><td>Nashville Predators</td><td>8,00</td></tr>
<tr><td>20</td><td>San Jose Sharks</td><td>8,50</td></tr>
<tr><td>21</td><td>Ottawa Senators</td><td>9,00</td></tr>
<tr><td>22</td><td>New York Islanders</td><td>9,00</td></tr>
<tr><td>23</td><td>Dallas Stars</td><td>9,00</td></tr>
<tr><td>24</td><td>Boston Bruins</td><td>9,00</td></tr>
<tr><td>25</td><td>Montreal Canadiens</td><td>9,50</td></tr>
<tr><td>26</td><td>Calgary Flames</td><td>9,75</td></tr>
<tr><td>27</td><td>Toronto Maple Leafs</td><td>10,00</td></tr>
<tr><td>28</td><td>New York Rangers</td><td>10,00</td></tr>
<tr><td>29</td><td>New Jersey Devils</td><td>10,00</td></tr>
<tr><td>30</td><td>Tampa Bay Lightning</td><td>10,50</td></tr>
<tr><td>31</td><td>Edmonton Oilers</td><td>10,75</td></tr>
<tr><td>32</td><td>St. Louis Blues</td><td>11,00</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>12,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19,51</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Anaheim Ducks</td><td>25,75</td></tr>
<tr><td>2</td><td>Ottawa Senators</td><td>23,50</td></tr>
<tr><td>3</td><td>Arizona Coyotes</td><td>23,25</td></tr>
<tr><td>4</td><td>New Jersey Devils</td><td>23,00</td></tr>
<tr><td>5</td><td>San Jose Sharks</td><td>22,00</td></tr>
<tr><td>6</td><td>Seattle Kraken</td><td>22,00</td></tr>
<tr><td>7</td><td>Los Angeles Kings</td><td>21,75</td></tr>
<tr><td>8</td><td>Edmonton Oilers</td><td>21,25</td></tr>
<tr><td>9</td><td>Florida Panthers</td><td>21,25</td></tr>
<tr><td>10</td><td>New York Rangers</td><td>21,25</td></tr>
<tr><td>11</td><td>Buffalo Sabres</td><td>20,50</td></tr>
<tr><td>12</td><td>Calgary Flames</td><td>20,50</td></tr>
<tr><td>13</td><td>Chicago Blackhawks</td><td>20,50</td></tr>
<tr><td>14</td><td>Boston Bruins</td><td>20,25</td></tr>
<tr><td>15</td><td>Montreal Canadiens</td><td>19,50</td></tr>
<tr><td>16</td><td>Dallas Stars</td><td>19,50</td></tr>
<tr><td>17</td><td>Quebec Nordiques</td><td>19,25</td></tr>
<tr><td>18</td><td>Vegas Golden Knights</td><td>19,25</td></tr>
<tr><td>19</td><td>Nashville Predators</td><td>19,00</td></tr>
<tr><td>20</td><td>Colorado Avalanche</td><td>18,75</td></tr>
<tr><td>21</td><td>Tampa Bay Lightning</td><td>18,75</td></tr>
<tr><td>22</td><td>Carolina Hurricanes</td><td>18,50</td></tr>
<tr><td>23</td><td>Detroit Red Wings</td><td>18,25</td></tr>
<tr><td>24</td><td>Philadelphia Flyers</td><td>18,25</td></tr>
<tr><td>25</td><td>Winnipeg Jets</td><td>18,00</td></tr>
<tr><td>26</td><td>St. Louis Blues</td><td>17,75</td></tr>
<tr><td>27</td><td>Columbus Blue Jackets</td><td>17,00</td></tr>
<tr><td>28</td><td>Vancouver Canucks</td><td>17,00</td></tr>
<tr><td>29</td><td>Pittsburgh Penguins</td><td>16,50</td></tr>
<tr><td>30</td><td>Toronto Maple Leafs</td><td>15,75</td></tr>
<tr><td>31</td><td>Washington Capitals</td><td>15,75</td></tr>
<tr><td>32</td><td>Minnesota Wild</td><td>15,50</td></tr>
<tr><td>33</td><td>New York Islanders</td><td>14,75</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Nashville Predators</td><td>54,93%</td></tr>
<tr><td>2</td><td>Vegas Golden Knights</td><td>54,68%</td></tr>
<tr><td>3</td><td>Dallas Stars</td><td>54,52%</td></tr>
<tr><td>4</td><td>New Jersey Devils</td><td>53,89%</td></tr>
<tr><td>5</td><td>Toronto Maple Leafs</td><td>53,58%</td></tr>
<tr><td>6</td><td>Los Angeles Kings</td><td>53,30%</td></tr>
<tr><td>7</td><td>New York Islanders</td><td>53,27%</td></tr>
<tr><td>8</td><td>Calgary Flames</td><td>52,02%</td></tr>
<tr><td>9</td><td>Pittsburgh Penguins</td><td>51,99%</td></tr>
<tr><td>10</td><td>Tampa Bay Lightning</td><td>51,81%</td></tr>
<tr><td>11</td><td>New York Rangers</td><td>51,80%</td></tr>
<tr><td>12</td><td>Ottawa Senators</td><td>51,75%</td></tr>
<tr><td>13</td><td>Edmonton Oilers</td><td>51,69%</td></tr>
<tr><td>14</td><td>Anaheim Ducks</td><td>51,48%</td></tr>
<tr><td>15</td><td>Colorado Avalanche</td><td>50,75%</td></tr>
<tr><td>16</td><td>Carolina Hurricanes</td><td>50,56%</td></tr>
<tr><td>17</td><td>Seattle Kraken</td><td>50,14%</td></tr>
<tr><td>18</td><td>Montreal Canadiens</td><td>50,00%</td></tr>
<tr><td>19</td><td>Quebec Nordiques</td><td>50,00%</td></tr>
<tr><td>20</td><td>Vancouver Canucks</td><td>49,54%</td></tr>
<tr><td>21</td><td>Florida Panthers</td><td>49,39%</td></tr>
<tr><td>22</td><td>Detroit Red Wings</td><td>49,28%</td></tr>
<tr><td>23</td><td>Winnipeg Jets</td><td>49,08%</td></tr>
<tr><td>24</td><td>St. Louis Blues</td><td>48,96%</td></tr>
<tr><td>25</td><td>Minnesota Wild</td><td>48,73%</td></tr>
<tr><td>26</td><td>Philadelphia Flyers</td><td>48,26%</td></tr>
<tr><td>27</td><td>Columbus Blue Jackets</td><td>48,17%</td></tr>
<tr><td>28</td><td>San Jose Sharks</td><td>48,01%</td></tr>
<tr><td>29</td><td>Chicago Blackhawks</td><td>47,90%</td></tr>
<tr><td>30</td><td>Boston Bruins</td><td>47,31%</td></tr>
<tr><td>31</td><td>Buffalo Sabres</td><td>47,20%</td></tr>
<tr><td>32</td><td>Washington Capitals</td><td>45,48%</td></tr>
<tr><td>33</td><td>Arizona Coyotes</td><td>42,90%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
