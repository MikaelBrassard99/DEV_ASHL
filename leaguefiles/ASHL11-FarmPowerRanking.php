﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Power Ranking</title>
<script src="ASHL11.js"></script>
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
<tr><td>1</td><td>1</td><td>Grand Rapids Griffins</td><td>39</td><td>8</td><td>2</td><td>0</td><td>0</td><td>0</td><td>41</td><td>25</td></tr>
<tr><td>2</td><td>2</td><td>Gatineau Olympiques</td><td>31</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>42</td><td>29</td></tr>
<tr><td>3</td><td>3</td><td>Charlotte Checkers</td><td>30</td><td>6</td><td>1</td><td>0</td><td>1</td><td>2</td><td>38</td><td>29</td></tr>
<tr><td>4</td><td>4</td><td>Rochester Americans</td><td>26</td><td>7</td><td>2</td><td>0</td><td>0</td><td>1</td><td>32</td><td>28</td></tr>
<tr><td>5</td><td>5</td><td>Connecticut Whale</td><td>24</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>36</td><td>30</td></tr>
<tr><td>6</td><td>6</td><td>Nunavik Natturaliit</td><td>23</td><td>6</td><td>2</td><td>0</td><td>2</td><td>0</td><td>27</td><td>24</td></tr>
<tr><td>7</td><td>7</td><td>Mercer Island Hafgufa</td><td>23</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>41</td><td>33</td></tr>
<tr><td>8</td><td>8</td><td>Adirondack Phantoms</td><td>22</td><td>6</td><td>3</td><td>0</td><td>1</td><td>0</td><td>33</td><td>29</td></tr>
<tr><td>9</td><td>9</td><td>Houston Aeros</td><td>22</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>31</td><td>23</td></tr>
<tr><td>10</td><td>10</td><td>Oklahoma City Barons</td><td>20</td><td>5</td><td>4</td><td>0</td><td>1</td><td>0</td><td>31</td><td>26</td></tr>
<tr><td>11</td><td>11</td><td>Chicoutimi Saguenéens</td><td>19</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>30</td><td>26</td></tr>
<tr><td>12</td><td>12</td><td>Chicago Wolves</td><td>18</td><td>5</td><td>2</td><td>0</td><td>2</td><td>1</td><td>32</td><td>32</td></tr>
<tr><td>13</td><td>13</td><td>Manitoba Moose</td><td>16</td><td>5</td><td>4</td><td>0</td><td>0</td><td>1</td><td>33</td><td>33</td></tr>
<tr><td>14</td><td>14</td><td>Rockford IceHogs</td><td>16</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>32</td><td>28</td></tr>
<tr><td>15</td><td>15</td><td>The Nuuk Vikings</td><td>16</td><td>6</td><td>3</td><td>0</td><td>1</td><td>0</td><td>34</td><td>37</td></tr>
<tr><td>16</td><td>16</td><td>Lake Erie Monsters</td><td>15</td><td>5</td><td>3</td><td>0</td><td>1</td><td>1</td><td>33</td><td>34</td></tr>
<tr><td>17</td><td>17</td><td>Rouyn-Noranda Huskies</td><td>15</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>32</td><td>31</td></tr>
<tr><td>18</td><td>18</td><td>CCCP Red Army</td><td>15</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>28</td><td>28</td></tr>
<tr><td>19</td><td>19</td><td>Milwaukee Admirals</td><td>14</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>28</td><td>31</td></tr>
<tr><td>20</td><td>20</td><td>Trois-Rivières Lions</td><td>13</td><td>5</td><td>4</td><td>0</td><td>1</td><td>0</td><td>27</td><td>29</td></tr>
<tr><td>21</td><td>21</td><td>Bridgeport Sound Tigers</td><td>12</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>35</td><td>38</td></tr>
<tr><td>22</td><td>22</td><td>Roberval Dwarfs</td><td>11</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>32</td><td>33</td></tr>
<tr><td>23</td><td>23</td><td>San Antonio Rampage</td><td>11</td><td>4</td><td>4</td><td>0</td><td>1</td><td>1</td><td>31</td><td>34</td></tr>
<tr><td>24</td><td>24</td><td>Springfield Falcons</td><td>9</td><td>4</td><td>5</td><td>0</td><td>0</td><td>1</td><td>27</td><td>31</td></tr>
<tr><td>25</td><td>25</td><td>Joliette Sportif</td><td>9</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>27</td><td>33</td></tr>
<tr><td>26</td><td>26</td><td>Albany Devils</td><td>7</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>30</td><td>35</td></tr>
<tr><td>27</td><td>27</td><td>Wilkes-Barre/Scranton Penguins</td><td>7</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>20</td><td>25</td></tr>
<tr><td>28</td><td>28</td><td>Norfolk Admirals</td><td>7</td><td>4</td><td>4</td><td>0</td><td>0</td><td>2</td><td>27</td><td>34</td></tr>
<tr><td>29</td><td>29</td><td>Providence Bruins</td><td>6</td><td>4</td><td>5</td><td>0</td><td>0</td><td>1</td><td>25</td><td>31</td></tr>
<tr><td>30</td><td>30</td><td>Peoria Rivermen</td><td>4</td><td>3</td><td>6</td><td>0</td><td>1</td><td>0</td><td>24</td><td>30</td></tr>
<tr><td>31</td><td>31</td><td>Henderson Silver Knights</td><td>0</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>23</td><td>35</td></tr>
<tr><td>32</td><td>32</td><td>Binghamton Senators</td><td>-5</td><td>2</td><td>7</td><td>0</td><td>0</td><td>1</td><td>23</td><td>34</td></tr>
<tr><td>33</td><td>33</td><td>Laval Chiefs</td><td>-8</td><td>2</td><td>8</td><td>0</td><td>0</td><td>0</td><td>23</td><td>37</td></tr>
</table>
<?php include "Footer.php";?>