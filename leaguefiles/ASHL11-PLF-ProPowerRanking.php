<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Power Ranking</title>
<script src="ASHL11-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.2.2 - ASHL11-STHS.db - ASHL11-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<script>$(function(){$("table").basictablesorter()});$(function (){$("table").stickyTableHeaders();});</script>
<table class="basictablesorter"><thead><tr><th class="STHSW35">Today</th><th class="STHSW35">Last</th><th class="STHSW200">Teams</th><th class="STHSW45">Points</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">T</th><th class="STHSW25">OTL</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th></tr></thead>
<tr><td>1</td><td>1</td><td>Philadelphia Flyers</td><td>31</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>35</td><td>25</td></tr>
<tr><td>2</td><td>2</td><td>New York Rangers</td><td>21</td><td>5</td><td>3</td><td>0</td><td>2</td><td>0</td><td>28</td><td>24</td></tr>
<tr><td>3</td><td>3</td><td>Los Angeles Kings</td><td>15</td><td>5</td><td>4</td><td>0</td><td>1</td><td>0</td><td>34</td><td>34</td></tr>
<tr><td>4</td><td>4</td><td>Tampa Bay Lightning</td><td>13</td><td>5</td><td>4</td><td>0</td><td>1</td><td>0</td><td>25</td><td>28</td></tr>
<tr><td>5</td><td>5</td><td>Detroit Red Wings</td><td>13</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>30</td><td>32</td></tr>
<tr><td>6</td><td>6</td><td>Arizona Coyotes</td><td>11</td><td>4</td><td>5</td><td>0</td><td>1</td><td>0</td><td>28</td><td>30</td></tr>
<tr><td>7</td><td>7</td><td>St. Louis Blues</td><td>11</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>26</td><td>30</td></tr>
<tr><td>8</td><td>8</td><td>Nashville Predators</td><td>9</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>20</td><td>20</td></tr>
<tr><td>9</td><td>9</td><td>New Jersey Devils</td><td>9</td><td>4</td><td>5</td><td>0</td><td>1</td><td>0</td><td>25</td><td>29</td></tr>
<tr><td>10</td><td>10</td><td>Toronto Maple Leafs</td><td>7</td><td>3</td><td>3</td><td>0</td><td>1</td><td>0</td><td>19</td><td>22</td></tr>
<tr><td>11</td><td>11</td><td>Florida Panthers</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>20</td><td>22</td></tr>
<tr><td>12</td><td>12</td><td>Chicago Blackhawks</td><td>6</td><td>2</td><td>3</td><td>0</td><td>1</td><td>0</td><td>19</td><td>20</td></tr>
<tr><td>13</td><td>13</td><td>Vegas Golden Knights</td><td>4</td><td>2</td><td>3</td><td>0</td><td>1</td><td>0</td><td>18</td><td>21</td></tr>
<tr><td>14</td><td>14</td><td>New York Islanders</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>15</td><td>15</td><td>Pittsburgh Penguins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>16</td><td>16</td><td>Buffalo Sabres</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>17</td><td>17</td><td>Boston Bruins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>18</td><td>18</td><td>Carolina Hurricanes</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>19</td><td>19</td><td>Washington Capitals</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>20</td><td>20</td><td>Winnipeg Jets</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>21</td><td>21</td><td>Columbus Blue Jackets</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>22</td><td>22</td><td>Calgary Flames</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>23</td><td>23</td><td>Colorado Avalanche</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>24</td><td>24</td><td>Edmonton Oilers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>25</td><td>25</td><td>Minnesota Wild</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>26</td><td>26</td><td>Vancouver Canucks</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>27</td><td>27</td><td>Anaheim Ducks</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>28</td><td>28</td><td>San Jose Sharks</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>29</td><td>29</td><td>Quebec Nordiques</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>30</td><td>30</td><td>Seattle Kraken</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>31</td><td>31</td><td>Ottawa Senators</td><td>-2</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>13</td><td>18</td></tr>
<tr><td>32</td><td>32</td><td>Montreal Canadiens</td><td>-3</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>17</td><td>23</td></tr>
<tr><td>33</td><td>33</td><td>Dallas Stars</td><td>-5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>13</td><td>21</td></tr>
</table>
<?php include "Footer.php";?>
