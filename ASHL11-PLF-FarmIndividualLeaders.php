<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Individual Leaders</title>
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
<b>Minimum Games Played: 7</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Freddie Hamilton (NOR)</td><td>20</td><td>11</td></tr>
<tr><td>2</td><td>Alexander Volkov (WBS)</td><td>25</td><td>9</td></tr>
<tr><td>3</td><td>Jordan Kyrou (MIH)</td><td>23</td><td>8</td></tr>
<tr><td>4</td><td>Mattias Janmark-Nylen (MIH)</td><td>23</td><td>7</td></tr>
<tr><td>5</td><td>Julius Nättinen (WBS)</td><td>25</td><td>7</td></tr>
<tr><td>6</td><td>Andrew O'Brien (WBS)</td><td>25</td><td>7</td></tr>
<tr><td>7</td><td>Zachary Senyshyn (WBS)</td><td>25</td><td>7</td></tr>
<tr><td>8</td><td>Lukas Vejdemo (RCH)</td><td>10</td><td>6</td></tr>
<tr><td>9</td><td>Joseph Duszak (TRL)</td><td>12</td><td>6</td></tr>
<tr><td>10</td><td>Nikita Filatov (HOU)</td><td>15</td><td>6</td></tr>
<tr><td>11</td><td>Kaedan Korczak (NOR)</td><td>20</td><td>6</td></tr>
<tr><td>12</td><td>Markus Granlund (NOR)</td><td>20</td><td>6</td></tr>
<tr><td>13</td><td>Tomas Jurco (NOR)</td><td>20</td><td>6</td></tr>
<tr><td>14</td><td>Jesper Boqvist (MIH)</td><td>23</td><td>6</td></tr>
<tr><td>15</td><td>William Lockwood (MIH)</td><td>23</td><td>6</td></tr>
<tr><td>16</td><td>Parker Kelly (MIH)</td><td>23</td><td>6</td></tr>
<tr><td>17</td><td>Dominik Simon (WBS)</td><td>25</td><td>6</td></tr>
<tr><td>18</td><td>Mitchell Vande Sompel (RCH)</td><td>10</td><td>5</td></tr>
<tr><td>19</td><td>Alexander True (NUN)</td><td>11</td><td>5</td></tr>
<tr><td>20</td><td>Nick Sorensen (HOU)</td><td>15</td><td>5</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Andrew O'Brien (WBS)</td><td>25</td><td>15</td></tr>
<tr><td>2</td><td>Braydyn Chizen (MIH)</td><td>23</td><td>14</td></tr>
<tr><td>3</td><td>Dominik Simon (WBS)</td><td>25</td><td>14</td></tr>
<tr><td>4</td><td>Sebastian Aho (D) (TRL)</td><td>12</td><td>12</td></tr>
<tr><td>5</td><td>Sean Day (WBS)</td><td>25</td><td>12</td></tr>
<tr><td>6</td><td>Zachary Senyshyn (WBS)</td><td>25</td><td>12</td></tr>
<tr><td>7</td><td>Markus Granlund (NOR)</td><td>20</td><td>11</td></tr>
<tr><td>8</td><td>Ryan McLeod (MIH)</td><td>23</td><td>11</td></tr>
<tr><td>9</td><td>Chaz Reddekopp (MIH)</td><td>23</td><td>11</td></tr>
<tr><td>10</td><td>Noah Gregor (TRL)</td><td>12</td><td>10</td></tr>
<tr><td>11</td><td>Freddie Hamilton (NOR)</td><td>20</td><td>10</td></tr>
<tr><td>12</td><td>Semyon Chistyakov (PAR)</td><td>10</td><td>9</td></tr>
<tr><td>13</td><td>Martin Fehervary (NUN)</td><td>11</td><td>9</td></tr>
<tr><td>14</td><td>Charles-Olivier Roussel (HOU)</td><td>15</td><td>9</td></tr>
<tr><td>15</td><td>Ty Dellandrea (NOR)</td><td>20</td><td>9</td></tr>
<tr><td>16</td><td>Brandon Burlon (NOR)</td><td>20</td><td>9</td></tr>
<tr><td>17</td><td>Jordan Kyrou (MIH)</td><td>23</td><td>9</td></tr>
<tr><td>18</td><td>Jordan Schneider (MIH)</td><td>23</td><td>9</td></tr>
<tr><td>19</td><td>Nicolas Hague (MIH)</td><td>23</td><td>9</td></tr>
<tr><td>20</td><td>Oliver Kylington (WBS)</td><td>25</td><td>9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Jordan Kyrou (MIH)</td><td>23</td><td>73</td></tr>
<tr><td>2</td><td>Zachary Senyshyn (WBS)</td><td>25</td><td>69</td></tr>
<tr><td>3</td><td>Freddie Hamilton (NOR)</td><td>20</td><td>65</td></tr>
<tr><td>4</td><td>Ryan McLeod (MIH)</td><td>23</td><td>65</td></tr>
<tr><td>5</td><td>Parker Kelly (MIH)</td><td>23</td><td>65</td></tr>
<tr><td>6</td><td>Austin Wagner (NOR)</td><td>20</td><td>64</td></tr>
<tr><td>7</td><td>German Rubtsov (MIH)</td><td>23</td><td>59</td></tr>
<tr><td>8</td><td>Julius Nättinen (WBS)</td><td>25</td><td>59</td></tr>
<tr><td>9</td><td>Alexander Volkov (WBS)</td><td>25</td><td>58</td></tr>
<tr><td>10</td><td>Dominik Simon (WBS)</td><td>25</td><td>58</td></tr>
<tr><td>11</td><td>Mattias Janmark-Nylen (MIH)</td><td>23</td><td>56</td></tr>
<tr><td>12</td><td>Alexander Delnov (WBS)</td><td>25</td><td>55</td></tr>
<tr><td>13</td><td>Alex Newhook (NOR)</td><td>20</td><td>54</td></tr>
<tr><td>14</td><td>Nolan Foote (MIH)</td><td>23</td><td>53</td></tr>
<tr><td>15</td><td>Oliver Kylington (WBS)</td><td>25</td><td>53</td></tr>
<tr><td>16</td><td>Ty Dellandrea (NOR)</td><td>20</td><td>52</td></tr>
<tr><td>17</td><td>Ryan Suzuki (MIH)</td><td>23</td><td>50</td></tr>
<tr><td>18</td><td>Janne Kuokkanen (WBS)</td><td>25</td><td>46</td></tr>
<tr><td>19</td><td>Markus Granlund (NOR)</td><td>20</td><td>45</td></tr>
<tr><td>20</td><td>Tomas Jurco (NOR)</td><td>20</td><td>45</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Mitchell Vande Sompel (RCH)</td><td>10</td><td>29,41%</td></tr>
<tr><td>2</td><td>Lukas Bengtsson (PAR)</td><td>10</td><td>25,00%</td></tr>
<tr><td>3</td><td>Nikita Filatov (HOU)</td><td>15</td><td>25,00%</td></tr>
<tr><td>4</td><td>Kaedan Korczak (NOR)</td><td>20</td><td>23,08%</td></tr>
<tr><td>5</td><td>Adam Ruzicka (PAR)</td><td>10</td><td>22,22%</td></tr>
<tr><td>6</td><td>Christian Jaros (NUN)</td><td>11</td><td>21,43%</td></tr>
<tr><td>7</td><td>Joseph Duszak (TRL)</td><td>12</td><td>21,43%</td></tr>
<tr><td>8</td><td>Jesper Boqvist (MIH)</td><td>23</td><td>21,43%</td></tr>
<tr><td>9</td><td>Andrew O'Brien (WBS)</td><td>25</td><td>21,21%</td></tr>
<tr><td>10</td><td>David Perron (PAR)</td><td>10</td><td>21,05%</td></tr>
<tr><td>11</td><td>Justin Almeida (HOU)</td><td>15</td><td>20,83%</td></tr>
<tr><td>12</td><td>Lukas Vejdemo (RCH)</td><td>10</td><td>20,00%</td></tr>
<tr><td>13</td><td>Justin Kea (NUN)</td><td>11</td><td>19,05%</td></tr>
<tr><td>14</td><td>Jack Dugan (TRL)</td><td>12</td><td>18,18%</td></tr>
<tr><td>15</td><td>Freddie Hamilton (NOR)</td><td>20</td><td>16,92%</td></tr>
<tr><td>16</td><td>Mattias Ekholm (NOR)</td><td>20</td><td>16,67%</td></tr>
<tr><td>17</td><td>William Lockwood (MIH)</td><td>23</td><td>15,79%</td></tr>
<tr><td>18</td><td>Alexander Volkov (WBS)</td><td>25</td><td>15,52%</td></tr>
<tr><td>19</td><td>Raphael Lavoie (WBS)</td><td>25</td><td>15,38%</td></tr>
<tr><td>20</td><td>Nick Sorensen (HOU)</td><td>15</td><td>15,15%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Freddie Hamilton (NOR)</td><td>20</td><td>11-10-21</td></tr>
<tr><td>2</td><td>Dominik Simon (WBS)</td><td>25</td><td>6-14-20</td></tr>
<tr><td>3</td><td>Jordan Kyrou (MIH)</td><td>23</td><td>8-9-17</td></tr>
<tr><td>4</td><td>Markus Granlund (NOR)</td><td>20</td><td>6-11-17</td></tr>
<tr><td>5</td><td>Ryan McLeod (MIH)</td><td>23</td><td>5-11-16</td></tr>
<tr><td>6</td><td>Julius Nättinen (WBS)</td><td>25</td><td>7-8-15</td></tr>
<tr><td>7</td><td>Mattias Janmark-Nylen (MIH)</td><td>23</td><td>7-7-14</td></tr>
<tr><td>8</td><td>Jesper Boqvist (MIH)</td><td>23</td><td>6-8-14</td></tr>
<tr><td>9</td><td>Alexander True (NUN)</td><td>11</td><td>5-8-13</td></tr>
<tr><td>10</td><td>German Rubtsov (MIH)</td><td>23</td><td>5-8-13</td></tr>
<tr><td>11</td><td>Noah Gregor (TRL)</td><td>12</td><td>3-10-13</td></tr>
<tr><td>12</td><td>Connor Bunnaman (MIH)</td><td>23</td><td>5-7-12</td></tr>
<tr><td>13</td><td>Alex Newhook (NOR)</td><td>20</td><td>4-8-12</td></tr>
<tr><td>14</td><td>Lukas Vejdemo (RCH)</td><td>10</td><td>6-5-11</td></tr>
<tr><td>15</td><td>Ty Dellandrea (NOR)</td><td>20</td><td>2-9-11</td></tr>
<tr><td>16</td><td>Parker Kelly (MIH)</td><td>23</td><td>6-4-10</td></tr>
<tr><td>17</td><td>Mikhail Maltsev (WBS)</td><td>25</td><td>5-5-10</td></tr>
<tr><td>18</td><td>Trevor Cox (RCH)</td><td>9</td><td>4-6-10</td></tr>
<tr><td>19</td><td>Justin Almeida (HOU)</td><td>15</td><td>5-4-9</td></tr>
<tr><td>20</td><td>Lane Pederson (HOU)</td><td>15</td><td>3-6-9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dominik Simon (WBS)</td><td>25</td><td>6-14-20</td></tr>
<tr><td>2</td><td>Markus Granlund (NOR)</td><td>20</td><td>6-11-17</td></tr>
<tr><td>3</td><td>Ryan McLeod (MIH)</td><td>23</td><td>5-11-16</td></tr>
<tr><td>4</td><td>Alexander Volkov (WBS)</td><td>25</td><td>9-6-15</td></tr>
<tr><td>5</td><td>Julius Nättinen (WBS)</td><td>25</td><td>7-8-15</td></tr>
<tr><td>6</td><td>Mattias Janmark-Nylen (MIH)</td><td>23</td><td>7-7-14</td></tr>
<tr><td>7</td><td>Jesper Boqvist (MIH)</td><td>23</td><td>6-8-14</td></tr>
<tr><td>8</td><td>Noah Gregor (TRL)</td><td>12</td><td>3-10-13</td></tr>
<tr><td>9</td><td>Connor Bunnaman (MIH)</td><td>23</td><td>5-7-12</td></tr>
<tr><td>10</td><td>Alex Newhook (NOR)</td><td>20</td><td>4-8-12</td></tr>
<tr><td>11</td><td>Lukas Vejdemo (RCH)</td><td>10</td><td>6-5-11</td></tr>
<tr><td>12</td><td>Erik Foley (HOU)</td><td>15</td><td>4-7-11</td></tr>
<tr><td>13</td><td>Mikhail Maltsev (WBS)</td><td>25</td><td>5-5-10</td></tr>
<tr><td>14</td><td>Trevor Cox (RCH)</td><td>9</td><td>4-6-10</td></tr>
<tr><td>15</td><td>Alexander Delnov (WBS)</td><td>25</td><td>4-6-10</td></tr>
<tr><td>16</td><td>Daniil Zharkov (HOU)</td><td>15</td><td>5-4-9</td></tr>
<tr><td>17</td><td>David Perron (PAR)</td><td>10</td><td>4-5-9</td></tr>
<tr><td>18</td><td>Nolan Foote (MIH)</td><td>23</td><td>4-5-9</td></tr>
<tr><td>19</td><td>Brandon Pirri (TRL)</td><td>12</td><td>2-7-9</td></tr>
<tr><td>20</td><td>Nikita Filatov (HOU)</td><td>15</td><td>6-2-8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Freddie Hamilton (NOR)</td><td>20</td><td>11-10-21</td></tr>
<tr><td>2</td><td>Zachary Senyshyn (WBS)</td><td>25</td><td>7-12-19</td></tr>
<tr><td>3</td><td>Jordan Kyrou (MIH)</td><td>23</td><td>8-9-17</td></tr>
<tr><td>4</td><td>Ryan McLeod (MIH)</td><td>23</td><td>5-11-16</td></tr>
<tr><td>5</td><td>Alexander Volkov (WBS)</td><td>25</td><td>9-6-15</td></tr>
<tr><td>6</td><td>Julius Nättinen (WBS)</td><td>25</td><td>7-8-15</td></tr>
<tr><td>7</td><td>Noah Gregor (TRL)</td><td>12</td><td>3-10-13</td></tr>
<tr><td>8</td><td>William Lockwood (MIH)</td><td>23</td><td>6-6-12</td></tr>
<tr><td>9</td><td>Nick Sorensen (HOU)</td><td>15</td><td>5-7-12</td></tr>
<tr><td>10</td><td>Alex Newhook (NOR)</td><td>20</td><td>4-8-12</td></tr>
<tr><td>11</td><td>Ty Dellandrea (NOR)</td><td>20</td><td>2-9-11</td></tr>
<tr><td>12</td><td>Parker Kelly (MIH)</td><td>23</td><td>6-4-10</td></tr>
<tr><td>13</td><td>Alexander Delnov (WBS)</td><td>25</td><td>4-6-10</td></tr>
<tr><td>14</td><td>David Perron (PAR)</td><td>10</td><td>4-5-9</td></tr>
<tr><td>15</td><td>Brandon Pirri (TRL)</td><td>12</td><td>2-7-9</td></tr>
<tr><td>16</td><td>Nikita Filatov (HOU)</td><td>15</td><td>6-2-8</td></tr>
<tr><td>17</td><td>Tomas Jurco (NOR)</td><td>20</td><td>6-2-8</td></tr>
<tr><td>18</td><td>Travis Boyd (NUN)</td><td>11</td><td>4-4-8</td></tr>
<tr><td>19</td><td>Nicolas Aubé-Kubel (NOR)</td><td>16</td><td>4-4-8</td></tr>
<tr><td>20</td><td>Jonny Brodzinski (TRL)</td><td>12</td><td>3-5-8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Andrew O'Brien (WBS)</td><td>25</td><td>7-15-22</td></tr>
<tr><td>2</td><td>Sebastian Aho (D) (TRL)</td><td>12</td><td>4-12-16</td></tr>
<tr><td>3</td><td>Braydyn Chizen (MIH)</td><td>23</td><td>2-14-16</td></tr>
<tr><td>4</td><td>Oliver Kylington (WBS)</td><td>25</td><td>5-9-14</td></tr>
<tr><td>5</td><td>Kale Clague (WBS)</td><td>25</td><td>5-9-14</td></tr>
<tr><td>6</td><td>Sean Day (WBS)</td><td>25</td><td>1-12-13</td></tr>
<tr><td>7</td><td>Mattias Ekholm (NOR)</td><td>20</td><td>5-6-11</td></tr>
<tr><td>8</td><td>Ryan Merkley (NOR)</td><td>20</td><td>3-8-11</td></tr>
<tr><td>9</td><td>Martin Fehervary (NUN)</td><td>11</td><td>2-9-11</td></tr>
<tr><td>10</td><td>Nicolas Hague (MIH)</td><td>23</td><td>2-9-11</td></tr>
<tr><td>11</td><td>Chaz Reddekopp (MIH)</td><td>23</td><td>0-11-11</td></tr>
<tr><td>12</td><td>Parker Wotherspoon (NUN)</td><td>11</td><td>3-7-10</td></tr>
<tr><td>13</td><td>Semyon Chistyakov (PAR)</td><td>10</td><td>1-9-10</td></tr>
<tr><td>14</td><td>Charles-Olivier Roussel (HOU)</td><td>15</td><td>1-9-10</td></tr>
<tr><td>15</td><td>Brandon Burlon (NOR)</td><td>20</td><td>1-9-10</td></tr>
<tr><td>16</td><td>Jordan Schneider (MIH)</td><td>23</td><td>1-9-10</td></tr>
<tr><td>17</td><td>Kaedan Korczak (NOR)</td><td>20</td><td>6-3-9</td></tr>
<tr><td>18</td><td>Mitchell Vande Sompel (RCH)</td><td>10</td><td>5-4-9</td></tr>
<tr><td>19</td><td>Joseph Duszak (TRL)</td><td>12</td><td>6-2-8</td></tr>
<tr><td>20</td><td>Christian Jaros (NUN)</td><td>11</td><td>3-5-8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Andrew Poturalski (PAR)</td><td>8</td><td>1,54</td></tr>
<tr><td>2</td><td>Jonny Brodzinski (TRL)</td><td>12</td><td>1,30</td></tr>
<tr><td>3</td><td>Alexander True (NUN)</td><td>11</td><td>1,27</td></tr>
<tr><td>4</td><td>Trevor Cox (RCH)</td><td>9</td><td>1,26</td></tr>
<tr><td>5</td><td>Jesper Boqvist (MIH)</td><td>23</td><td>1,17</td></tr>
<tr><td>6</td><td>Nick Sorensen (HOU)</td><td>15</td><td>1,16</td></tr>
<tr><td>7</td><td>Sebastian Aho (D) (TRL)</td><td>12</td><td>1,14</td></tr>
<tr><td>8</td><td>Lukas Vejdemo (RCH)</td><td>10</td><td>1,11</td></tr>
<tr><td>9</td><td>David Perron (PAR)</td><td>10</td><td>1,07</td></tr>
<tr><td>10</td><td>Noah Gregor (TRL)</td><td>12</td><td>1,00</td></tr>
<tr><td>11</td><td>Martin Fehervary (NUN)</td><td>11</td><td>0,98</td></tr>
<tr><td>12</td><td>Freddie Hamilton (NOR)</td><td>20</td><td>0,97</td></tr>
<tr><td>13</td><td>Brandon Pirri (TRL)</td><td>12</td><td>0,97</td></tr>
<tr><td>14</td><td>Luke Green (MIH)</td><td>23</td><td>0,95</td></tr>
<tr><td>15</td><td>Semyon Chistyakov (PAR)</td><td>10</td><td>0,94</td></tr>
<tr><td>16</td><td>Dominik Simon (WBS)</td><td>25</td><td>0,91</td></tr>
<tr><td>17</td><td>Erik Foley (HOU)</td><td>15</td><td>0,91</td></tr>
<tr><td>18</td><td>Markus Granlund (NOR)</td><td>20</td><td>0,89</td></tr>
<tr><td>19</td><td>Mitchell Vande Sompel (RCH)</td><td>10</td><td>0,89</td></tr>
<tr><td>20</td><td>Eric Cornel (RCH)</td><td>10</td><td>0,88</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Eric Cornel (RCH)</td><td>10</td><td>58,55%</td></tr>
<tr><td>2</td><td>Matthew Highmore (RCH)</td><td>10</td><td>56,04%</td></tr>
<tr><td>3</td><td>Andreas Engqvist (MIH)</td><td>20</td><td>55,48%</td></tr>
<tr><td>4</td><td>Rhett Gardner (NUN)</td><td>11</td><td>54,93%</td></tr>
<tr><td>5</td><td>Brandon Pirri (TRL)</td><td>12</td><td>54,03%</td></tr>
<tr><td>6</td><td>Mikhail Maltsev (WBS)</td><td>25</td><td>53,38%</td></tr>
<tr><td>7</td><td>Marcus Kruger (NOR)</td><td>20</td><td>53,22%</td></tr>
<tr><td>8</td><td>Scott Laughton (RCH)</td><td>10</td><td>52,63%</td></tr>
<tr><td>9</td><td>Logan Shaw (PAR)</td><td>10</td><td>52,02%</td></tr>
<tr><td>10</td><td>Jonny Brodzinski (TRL)</td><td>12</td><td>52,00%</td></tr>
<tr><td>11</td><td>Julius Nättinen (WBS)</td><td>25</td><td>51,95%</td></tr>
<tr><td>12</td><td>Lucas Wallmark (WBS)</td><td>25</td><td>51,82%</td></tr>
<tr><td>13</td><td>Jesper Boqvist (MIH)</td><td>23</td><td>51,79%</td></tr>
<tr><td>14</td><td>Connor Hurley (PAR)</td><td>10</td><td>51,58%</td></tr>
<tr><td>15</td><td>Tyler Graovac (HOU)</td><td>15</td><td>51,45%</td></tr>
<tr><td>16</td><td>David Gustafsson (PAR)</td><td>10</td><td>51,41%</td></tr>
<tr><td>17</td><td>Markus Granlund (NOR)</td><td>20</td><td>51,36%</td></tr>
<tr><td>18</td><td>Chris Wagner (NUN)</td><td>11</td><td>51,18%</td></tr>
<tr><td>19</td><td>Justin Almeida (HOU)</td><td>15</td><td>51,08%</td></tr>
<tr><td>20</td><td>Lukas Vejdemo (RCH)</td><td>10</td><td>50,92%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Braydyn Chizen (MIH)</td><td>23</td><td>13</td></tr>
<tr><td>2</td><td>Jordan Kyrou (MIH)</td><td>23</td><td>11</td></tr>
<tr><td>3</td><td>German Rubtsov (MIH)</td><td>23</td><td>11</td></tr>
<tr><td>4</td><td>Jordan Schneider (MIH)</td><td>23</td><td>11</td></tr>
<tr><td>5</td><td>Mattias Janmark-Nylen (MIH)</td><td>23</td><td>9</td></tr>
<tr><td>6</td><td>Chaz Reddekopp (MIH)</td><td>23</td><td>9</td></tr>
<tr><td>7</td><td>Semyon Chistyakov (PAR)</td><td>10</td><td>8</td></tr>
<tr><td>8</td><td>Joseph Garreffa (MIH)</td><td>23</td><td>8</td></tr>
<tr><td>9</td><td>Brett Murray (MIH)</td><td>23</td><td>8</td></tr>
<tr><td>10</td><td>Marko Mladenovic (MIH)</td><td>23</td><td>8</td></tr>
<tr><td>11</td><td>Andrew O'Brien (WBS)</td><td>25</td><td>8</td></tr>
<tr><td>12</td><td>Lucas Wallmark (WBS)</td><td>25</td><td>8</td></tr>
<tr><td>13</td><td>Ludwig Bystrom (PAR)</td><td>10</td><td>7</td></tr>
<tr><td>14</td><td>Travis Boyd (NUN)</td><td>11</td><td>7</td></tr>
<tr><td>15</td><td>Jesper Boqvist (MIH)</td><td>23</td><td>7</td></tr>
<tr><td>16</td><td>Julius Nättinen (WBS)</td><td>25</td><td>7</td></tr>
<tr><td>17</td><td>Zachary Senyshyn (WBS)</td><td>25</td><td>7</td></tr>
<tr><td>18</td><td>Kale Clague (WBS)</td><td>25</td><td>7</td></tr>
<tr><td>19</td><td>Sebastian Aho (D) (TRL)</td><td>12</td><td>6</td></tr>
<tr><td>20</td><td>Nick Sorensen (HOU)</td><td>15</td><td>6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Andrew O'Brien (WBS)</td><td>25</td><td>31</td></tr>
<tr><td>2</td><td>Marko Mladenovic (MIH)</td><td>23</td><td>28</td></tr>
<tr><td>3</td><td>Braydyn Chizen (MIH)</td><td>23</td><td>28</td></tr>
<tr><td>4</td><td>Kurtis MacDermid (TRL)</td><td>12</td><td>26</td></tr>
<tr><td>5</td><td>Ryan Merkley (NOR)</td><td>20</td><td>26</td></tr>
<tr><td>6</td><td>Braden Schneider (NOR)</td><td>20</td><td>20</td></tr>
<tr><td>7</td><td>Austin Wagner (NOR)</td><td>20</td><td>20</td></tr>
<tr><td>8</td><td>Chaz Reddekopp (MIH)</td><td>23</td><td>20</td></tr>
<tr><td>9</td><td>Nicolas Hague (MIH)</td><td>23</td><td>20</td></tr>
<tr><td>10</td><td>Charles-Olivier Roussel (HOU)</td><td>15</td><td>18</td></tr>
<tr><td>11</td><td>Cale Fleury (HOU)</td><td>15</td><td>18</td></tr>
<tr><td>12</td><td>Oliver Kylington (WBS)</td><td>25</td><td>18</td></tr>
<tr><td>13</td><td>Harrison Ruopp (RCH)</td><td>10</td><td>17</td></tr>
<tr><td>14</td><td>Alexander Volkov (WBS)</td><td>25</td><td>17</td></tr>
<tr><td>15</td><td>Christian Jaros (NUN)</td><td>11</td><td>16</td></tr>
<tr><td>16</td><td>Rob O'Gara (NUN)</td><td>11</td><td>16</td></tr>
<tr><td>17</td><td>Sean Day (WBS)</td><td>25</td><td>16</td></tr>
<tr><td>18</td><td>Ryan Collins (NUN)</td><td>11</td><td>14</td></tr>
<tr><td>19</td><td>Justin Auger (TRL)</td><td>12</td><td>14</td></tr>
<tr><td>20</td><td>Trevor Carrick (CHI)</td><td>6</td><td>12</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Sean Day (WBS)</td><td>25</td><td>39</td></tr>
<tr><td>2</td><td>Andrew O'Brien (WBS)</td><td>25</td><td>36</td></tr>
<tr><td>3</td><td>Nicolas Hague (MIH)</td><td>23</td><td>34</td></tr>
<tr><td>4</td><td>Axel Andersson (WBS)</td><td>25</td><td>30</td></tr>
<tr><td>5</td><td>Ryan Merkley (NOR)</td><td>20</td><td>28</td></tr>
<tr><td>6</td><td>Oliver Kylington (WBS)</td><td>25</td><td>28</td></tr>
<tr><td>7</td><td>Kaedan Korczak (NOR)</td><td>20</td><td>27</td></tr>
<tr><td>8</td><td>Sebastian Aho (D) (TRL)</td><td>12</td><td>25</td></tr>
<tr><td>9</td><td>Mac Bennett (WBS)</td><td>20</td><td>24</td></tr>
<tr><td>10</td><td>Filip Berglund (MIH)</td><td>23</td><td>24</td></tr>
<tr><td>11</td><td>Harrison Ruopp (RCH)</td><td>10</td><td>23</td></tr>
<tr><td>12</td><td>Mattias Ekholm (NOR)</td><td>20</td><td>23</td></tr>
<tr><td>13</td><td>Gustav Lindstrom (HOU)</td><td>15</td><td>22</td></tr>
<tr><td>14</td><td>Dylan Demelo (HOU)</td><td>15</td><td>22</td></tr>
<tr><td>15</td><td>Jordan Schneider (MIH)</td><td>23</td><td>22</td></tr>
<tr><td>16</td><td>Braydyn Chizen (MIH)</td><td>23</td><td>22</td></tr>
<tr><td>17</td><td>Chaz Reddekopp (MIH)</td><td>23</td><td>22</td></tr>
<tr><td>18</td><td>Kurtis MacDermid (TRL)</td><td>12</td><td>21</td></tr>
<tr><td>19</td><td>Kale Clague (WBS)</td><td>25</td><td>21</td></tr>
<tr><td>20</td><td>Christian Jaros (NUN)</td><td>11</td><td>20</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Ryan McLeod (MIH)</td><td>23</td><td>5-11-16</td></tr>
<tr><td>2</td><td>Sebastian Aho (D) (TRL)</td><td>12</td><td>4-12-16</td></tr>
<tr><td>3</td><td>Braydyn Chizen (MIH)</td><td>23</td><td>2-14-16</td></tr>
<tr><td>4</td><td>Alexander Volkov (WBS)</td><td>25</td><td>9-6-15</td></tr>
<tr><td>5</td><td>Julius Nättinen (WBS)</td><td>25</td><td>7-8-15</td></tr>
<tr><td>6</td><td>Jesper Boqvist (MIH)</td><td>23</td><td>6-8-14</td></tr>
<tr><td>7</td><td>Oliver Kylington (WBS)</td><td>25</td><td>5-9-14</td></tr>
<tr><td>8</td><td>Kale Clague (WBS)</td><td>25</td><td>5-9-14</td></tr>
<tr><td>9</td><td>Alexander True (NUN)</td><td>11</td><td>5-8-13</td></tr>
<tr><td>10</td><td>German Rubtsov (MIH)</td><td>23</td><td>5-8-13</td></tr>
<tr><td>11</td><td>Noah Gregor (TRL)</td><td>12</td><td>3-10-13</td></tr>
<tr><td>12</td><td>Sean Day (WBS)</td><td>25</td><td>1-12-13</td></tr>
<tr><td>13</td><td>William Lockwood (MIH)</td><td>23</td><td>6-6-12</td></tr>
<tr><td>14</td><td>Connor Bunnaman (MIH)</td><td>23</td><td>5-7-12</td></tr>
<tr><td>15</td><td>Alex Newhook (NOR)</td><td>20</td><td>4-8-12</td></tr>
<tr><td>16</td><td>Lukas Vejdemo (RCH)</td><td>10</td><td>6-5-11</td></tr>
<tr><td>17</td><td>Erik Foley (HOU)</td><td>15</td><td>4-7-11</td></tr>
<tr><td>18</td><td>Martin Fehervary (NUN)</td><td>11</td><td>2-9-11</td></tr>
<tr><td>19</td><td>Ty Dellandrea (NOR)</td><td>20</td><td>2-9-11</td></tr>
<tr><td>20</td><td>Nicolas Hague (MIH)</td><td>23</td><td>2-9-11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Andrew O'Brien (WBS)</td><td>25</td><td>72</td></tr>
<tr><td>2</td><td>Ryan Merkley (NOR)</td><td>20</td><td>52</td></tr>
<tr><td>3</td><td>Braydyn Chizen (MIH)</td><td>23</td><td>50</td></tr>
<tr><td>4</td><td>Nolan Foote (MIH)</td><td>23</td><td>49</td></tr>
<tr><td>5</td><td>Zachary Senyshyn (WBS)</td><td>25</td><td>48</td></tr>
<tr><td>6</td><td>German Rubtsov (MIH)</td><td>23</td><td>45</td></tr>
<tr><td>7</td><td>Kurtis MacDermid (TRL)</td><td>12</td><td>43</td></tr>
<tr><td>8</td><td>Austin Wagner (NOR)</td><td>20</td><td>41</td></tr>
<tr><td>9</td><td>Mads Eller (NOR)</td><td>20</td><td>40</td></tr>
<tr><td>10</td><td>Kale Clague (WBS)</td><td>25</td><td>38</td></tr>
<tr><td>11</td><td>Chaz Reddekopp (MIH)</td><td>23</td><td>37</td></tr>
<tr><td>12</td><td>Braden Schneider (NOR)</td><td>20</td><td>36</td></tr>
<tr><td>13</td><td>Mikhail Maltsev (WBS)</td><td>25</td><td>36</td></tr>
<tr><td>14</td><td>Sean Day (WBS)</td><td>25</td><td>34</td></tr>
<tr><td>15</td><td>Oliver Kylington (WBS)</td><td>25</td><td>34</td></tr>
<tr><td>16</td><td>Justin Auger (TRL)</td><td>12</td><td>33</td></tr>
<tr><td>17</td><td>Nicolas Hague (MIH)</td><td>23</td><td>33</td></tr>
<tr><td>18</td><td>Christian Jaros (NUN)</td><td>11</td><td>30</td></tr>
<tr><td>19</td><td>Riley Stadel (NOR)</td><td>15</td><td>29</td></tr>
<tr><td>20</td><td>Mattias Ekholm (NOR)</td><td>20</td><td>28</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Mitchell Vande Sompel (RCH)</td><td>10</td><td>4</td></tr>
<tr><td>2</td><td>Mattias Ekholm (NOR)</td><td>20</td><td>4</td></tr>
<tr><td>3</td><td>Lukas Bengtsson (PAR)</td><td>10</td><td>3</td></tr>
<tr><td>4</td><td>Joseph Duszak (TRL)</td><td>12</td><td>3</td></tr>
<tr><td>5</td><td>Jonny Brodzinski (TRL)</td><td>12</td><td>3</td></tr>
<tr><td>6</td><td>Kaedan Korczak (NOR)</td><td>20</td><td>3</td></tr>
<tr><td>7</td><td>Mikhail Maltsev (WBS)</td><td>25</td><td>3</td></tr>
<tr><td>8</td><td>Alexander Volkov (WBS)</td><td>25</td><td>3</td></tr>
<tr><td>9</td><td>Kale Clague (WBS)</td><td>25</td><td>3</td></tr>
<tr><td>10</td><td>Dmitry Zavgorodniy (CCC)</td><td>4</td><td>2</td></tr>
<tr><td>11</td><td>Cam York (RNO)</td><td>5</td><td>2</td></tr>
<tr><td>12</td><td>Ian Cole (CHA)</td><td>6</td><td>2</td></tr>
<tr><td>13</td><td>Kirby Dach (OKC)</td><td>6</td><td>2</td></tr>
<tr><td>14</td><td>Teemu Hartikainen (OKC)</td><td>6</td><td>2</td></tr>
<tr><td>15</td><td>Trevor Cox (RCH)</td><td>9</td><td>2</td></tr>
<tr><td>16</td><td>Justin Kea (NUN)</td><td>11</td><td>2</td></tr>
<tr><td>17</td><td>Rob O'Gara (NUN)</td><td>11</td><td>2</td></tr>
<tr><td>18</td><td>Parker Wotherspoon (NUN)</td><td>11</td><td>2</td></tr>
<tr><td>19</td><td>Oskari Laaksonen (TRL)</td><td>12</td><td>2</td></tr>
<tr><td>20</td><td>Sebastian Aho (D) (TRL)</td><td>12</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Joel Teasdale (RNO)</td><td>5</td><td>1</td></tr>
<tr><td>2</td><td>Will Borgen (PAR)</td><td>10</td><td>1</td></tr>
<tr><td>3</td><td>Andrew O'Brien (WBS)</td><td>25</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Zachary Senyshyn (WBS)</td><td>25</td><td>4</td></tr>
<tr><td>2</td><td>Andrew Poturalski (PAR)</td><td>8</td><td>3</td></tr>
<tr><td>3</td><td>Joseph Duszak (TRL)</td><td>12</td><td>3</td></tr>
<tr><td>4</td><td>Nolan Foote (MIH)</td><td>23</td><td>3</td></tr>
<tr><td>5</td><td>Dominik Simon (WBS)</td><td>25</td><td>3</td></tr>
<tr><td>6</td><td>Justin Kea (NUN)</td><td>11</td><td>2</td></tr>
<tr><td>7</td><td>Nick Sorensen (HOU)</td><td>15</td><td>2</td></tr>
<tr><td>8</td><td>Sebastian Repo (HOU)</td><td>15</td><td>2</td></tr>
<tr><td>9</td><td>Alex Newhook (NOR)</td><td>20</td><td>2</td></tr>
<tr><td>10</td><td>Freddie Hamilton (NOR)</td><td>20</td><td>2</td></tr>
<tr><td>11</td><td>Markus Granlund (NOR)</td><td>20</td><td>2</td></tr>
<tr><td>12</td><td>Mattias Ekholm (NOR)</td><td>20</td><td>2</td></tr>
<tr><td>13</td><td>Jordan Kyrou (MIH)</td><td>23</td><td>2</td></tr>
<tr><td>14</td><td>Connor Bunnaman (MIH)</td><td>23</td><td>2</td></tr>
<tr><td>15</td><td>Daniel O'Regan (RCH)</td><td>4</td><td>1</td></tr>
<tr><td>16</td><td>Cam York (RNO)</td><td>5</td><td>1</td></tr>
<tr><td>17</td><td>Morgan Geekie (CHI)</td><td>5</td><td>1</td></tr>
<tr><td>18</td><td>Ryan Poehling (CTW)</td><td>5</td><td>1</td></tr>
<tr><td>19</td><td>Jordan Martinook (GRG)</td><td>5</td><td>1</td></tr>
<tr><td>20</td><td>Sam Lafferty (CHA)</td><td>6</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Freddie Hamilton (NOR)</td><td>20</td><td>2</td></tr>
<tr><td>2</td><td>Connor Bunnaman (MIH)</td><td>23</td><td>2</td></tr>
<tr><td>3</td><td>Frédéric Allard (CHI)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Brandon Hagel (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>5</td><td>Shane Pinto (OKC)</td><td>6</td><td>1</td></tr>
<tr><td>6</td><td>Adam Ruzicka (PAR)</td><td>10</td><td>1</td></tr>
<tr><td>7</td><td>David Gustafsson (PAR)</td><td>10</td><td>1</td></tr>
<tr><td>8</td><td>Lukas Bengtsson (PAR)</td><td>10</td><td>1</td></tr>
<tr><td>9</td><td>Michael Bunting (PAR)</td><td>10</td><td>1</td></tr>
<tr><td>10</td><td>Parker Wotherspoon (NUN)</td><td>11</td><td>1</td></tr>
<tr><td>11</td><td>Sebastian Aho (D) (TRL)</td><td>12</td><td>1</td></tr>
<tr><td>12</td><td>Nick Sorensen (HOU)</td><td>15</td><td>1</td></tr>
<tr><td>13</td><td>Lane Pederson (HOU)</td><td>15</td><td>1</td></tr>
<tr><td>14</td><td>Ty Dellandrea (NOR)</td><td>20</td><td>1</td></tr>
<tr><td>15</td><td>Alex Newhook (NOR)</td><td>20</td><td>1</td></tr>
<tr><td>16</td><td>Mattias Ekholm (NOR)</td><td>20</td><td>1</td></tr>
<tr><td>17</td><td>Tomas Jurco (NOR)</td><td>20</td><td>1</td></tr>
<tr><td>18</td><td>Ryan Merkley (NOR)</td><td>20</td><td>1</td></tr>
<tr><td>19</td><td>Jesper Boqvist (MIH)</td><td>23</td><td>1</td></tr>
<tr><td>20</td><td>Jordan Kyrou (MIH)</td><td>23</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Andreas Engqvist (MIH)</td><td>20</td><td>1</td></tr>
<tr><td>2</td><td>Tomas Jurco (NOR)</td><td>20</td><td>1</td></tr>
<tr><td>3</td><td>Jesper Boqvist (MIH)</td><td>23</td><td>1</td></tr>
<tr><td>4</td><td>William Lockwood (MIH)</td><td>23</td><td>1</td></tr>
<tr><td>5</td><td>Oliver Kylington (WBS)</td><td>25</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Oliver Kylington (WBS)</td><td>25</td><td>553</td></tr>
<tr><td>2</td><td>Andrew O'Brien (WBS)</td><td>25</td><td>549</td></tr>
<tr><td>3</td><td>Julius Nättinen (WBS)</td><td>25</td><td>527</td></tr>
<tr><td>4</td><td>Kale Clague (WBS)</td><td>25</td><td>527</td></tr>
<tr><td>5</td><td>Sean Day (WBS)</td><td>25</td><td>502</td></tr>
<tr><td>6</td><td>Zachary Senyshyn (WBS)</td><td>25</td><td>494</td></tr>
<tr><td>7</td><td>Filip Berglund (MIH)</td><td>23</td><td>488</td></tr>
<tr><td>8</td><td>Braydyn Chizen (MIH)</td><td>23</td><td>484</td></tr>
<tr><td>9</td><td>Nicolas Hague (MIH)</td><td>23</td><td>481</td></tr>
<tr><td>10</td><td>Alexander Volkov (WBS)</td><td>25</td><td>467</td></tr>
<tr><td>11</td><td>Ryan Merkley (NOR)</td><td>20</td><td>442</td></tr>
<tr><td>12</td><td>Dominik Simon (WBS)</td><td>25</td><td>441</td></tr>
<tr><td>13</td><td>Janne Kuokkanen (WBS)</td><td>25</td><td>437</td></tr>
<tr><td>14</td><td>Kaedan Korczak (NOR)</td><td>20</td><td>435</td></tr>
<tr><td>15</td><td>Chaz Reddekopp (MIH)</td><td>23</td><td>434</td></tr>
<tr><td>16</td><td>Freddie Hamilton (NOR)</td><td>20</td><td>432</td></tr>
<tr><td>17</td><td>Mattias Ekholm (NOR)</td><td>20</td><td>432</td></tr>
<tr><td>18</td><td>Ryan McLeod (MIH)</td><td>23</td><td>430</td></tr>
<tr><td>19</td><td>Ty Dellandrea (NOR)</td><td>20</td><td>427</td></tr>
<tr><td>20</td><td>Axel Andersson (WBS)</td><td>25</td><td>419</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Trent Frederic (CTW)</td><td>5</td><td>1</td></tr>
<tr><td>2</td><td>Alexander True (NUN)</td><td>11</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Cam York (RNO)</td><td>5</td><td>2</td></tr>
<tr><td>2</td><td>Jordan Martinook (GRG)</td><td>5</td><td>2</td></tr>
<tr><td>3</td><td>Max Görtz (GRG)</td><td>5</td><td>2</td></tr>
<tr><td>4</td><td>Peter Abbandonato (RNO)</td><td>5</td><td>2</td></tr>
<tr><td>5</td><td>Yegor Sokolov (CCC)</td><td>4</td><td>1</td></tr>
<tr><td>6</td><td>Kristian Tanus (CCC)</td><td>4</td><td>1</td></tr>
<tr><td>7</td><td>Bode Wilde (CCC)</td><td>4</td><td>1</td></tr>
<tr><td>8</td><td>Adam Musil (CCC)</td><td>4</td><td>1</td></tr>
<tr><td>9</td><td>Isaac Ratcliffe (CHI)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Maxime Comtois (CHI)</td><td>5</td><td>1</td></tr>
<tr><td>11</td><td>Samuel Regis (RNO)</td><td>5</td><td>1</td></tr>
<tr><td>12</td><td>Dawson Mercer (CTW)</td><td>5</td><td>1</td></tr>
<tr><td>13</td><td>Jean-Christophe Beaudin (RNO)</td><td>5</td><td>1</td></tr>
<tr><td>14</td><td>Trent Frederic (CTW)</td><td>5</td><td>1</td></tr>
<tr><td>15</td><td>Mats Zuccarello (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>16</td><td>Mattias Tedenby (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>17</td><td>Kirby Dach (OKC)</td><td>6</td><td>1</td></tr>
<tr><td>18</td><td>Simon Ryfors (RCH)</td><td>6</td><td>1</td></tr>
<tr><td>19</td><td>Anton Lander (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>20</td><td>Ryan Haggerty (CHA)</td><td>6</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Sebastian Aho (D) (TRL)</td><td>12</td><td>6</td></tr>
<tr><td>2</td><td>Kieffer Bellows (OKC)</td><td>6</td><td>5</td></tr>
<tr><td>3</td><td>Kirby Dach (OKC)</td><td>6</td><td>4</td></tr>
<tr><td>4</td><td>Semyon Chistyakov (PAR)</td><td>10</td><td>4</td></tr>
<tr><td>5</td><td>Markus Granlund (NOR)</td><td>20</td><td>4</td></tr>
<tr><td>6</td><td>Manuel Wiederer (RNO)</td><td>5</td><td>3</td></tr>
<tr><td>7</td><td>David Schlemko (CHI)</td><td>6</td><td>3</td></tr>
<tr><td>8</td><td>Dmitri Samorukov (OKC)</td><td>6</td><td>3</td></tr>
<tr><td>9</td><td>Martin Fehervary (NUN)</td><td>11</td><td>3</td></tr>
<tr><td>10</td><td>Michael Rasmussen (CCC)</td><td>4</td><td>2</td></tr>
<tr><td>11</td><td>Jordan Spence (CCC)</td><td>4</td><td>2</td></tr>
<tr><td>12</td><td>Bode Wilde (CCC)</td><td>4</td><td>2</td></tr>
<tr><td>13</td><td>Cam York (RNO)</td><td>5</td><td>2</td></tr>
<tr><td>14</td><td>Martins Dzierkals (RNO)</td><td>5</td><td>2</td></tr>
<tr><td>15</td><td>Alexander Barabanov (GRG)</td><td>5</td><td>2</td></tr>
<tr><td>16</td><td>Jordan Martinook (GRG)</td><td>5</td><td>2</td></tr>
<tr><td>17</td><td>Dawson Mercer (CTW)</td><td>5</td><td>2</td></tr>
<tr><td>18</td><td>Morgan Frost (CTW)</td><td>5</td><td>2</td></tr>
<tr><td>19</td><td>Morgan Ellis (GRG)</td><td>5</td><td>2</td></tr>
<tr><td>20</td><td>Max Görtz (GRG)</td><td>5</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Dominik Simon (WBS)</td><td>25</td><td>60</td></tr>
<tr><td>2</td><td>Ty Dellandrea (NOR)</td><td>20</td><td>48</td></tr>
<tr><td>3</td><td>Markus Granlund (NOR)</td><td>20</td><td>46</td></tr>
<tr><td>4</td><td>Julius Nättinen (WBS)</td><td>25</td><td>44</td></tr>
<tr><td>5</td><td>German Rubtsov (MIH)</td><td>23</td><td>43</td></tr>
<tr><td>6</td><td>Oliver Kylington (WBS)</td><td>25</td><td>35</td></tr>
<tr><td>7</td><td>Marcus Kruger (NOR)</td><td>20</td><td>33</td></tr>
<tr><td>8</td><td>Ryan McLeod (MIH)</td><td>23</td><td>33</td></tr>
<tr><td>9</td><td>Nicolas Hague (MIH)</td><td>23</td><td>32</td></tr>
<tr><td>10</td><td>Justin Almeida (HOU)</td><td>15</td><td>31</td></tr>
<tr><td>11</td><td>Ryan Suzuki (MIH)</td><td>23</td><td>31</td></tr>
<tr><td>12</td><td>Lane Pederson (HOU)</td><td>15</td><td>30</td></tr>
<tr><td>13</td><td>Freddie Hamilton (NOR)</td><td>20</td><td>30</td></tr>
<tr><td>14</td><td>Jordan Kyrou (MIH)</td><td>23</td><td>30</td></tr>
<tr><td>15</td><td>Andrew O'Brien (WBS)</td><td>25</td><td>30</td></tr>
<tr><td>16</td><td>Zachary Senyshyn (WBS)</td><td>25</td><td>30</td></tr>
<tr><td>17</td><td>Connor Bunnaman (MIH)</td><td>23</td><td>29</td></tr>
<tr><td>18</td><td>Janne Kuokkanen (WBS)</td><td>25</td><td>29</td></tr>
<tr><td>19</td><td>Lukas Vejdemo (RCH)</td><td>10</td><td>28</td></tr>
<tr><td>20</td><td>David Gustafsson (PAR)</td><td>10</td><td>28</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Harrison Ruopp (RCH)</td><td>10</td><td>1</td></tr>
<tr><td>2</td><td>Nathan Bastian (RCH)</td><td>10</td><td>1</td></tr>
<tr><td>3</td><td>Alexander Volkov (WBS)</td><td>25</td><td>1</td></tr>
<tr><td>4</td><td>Andrew O'Brien (WBS)</td><td>25</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Nathan Bastian (RCH)</td><td>10</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Josef Korenar (WBS)</td><td>25</td><td>0,921</td></tr>
<tr><td>2</td><td>Adam Wilcox (NOR)</td><td>16</td><td>0,915</td></tr>
<tr><td>3</td><td>Alex Lyon (MIH)</td><td>22</td><td>0,912</td></tr>
<tr><td>4</td><td>Samuel Montembeault (TRL)</td><td>12</td><td>0,910</td></tr>
<tr><td>5</td><td>Brendan Burke (RCH)</td><td>10</td><td>0,908</td></tr>
<tr><td>6</td><td>Antoine Bibeau (HOU)</td><td>15</td><td>0,900</td></tr>
<tr><td>7</td><td>Filip Gustavsson (NUN)</td><td>10</td><td>0,892</td></tr>
<tr><td>8</td><td>Kyle Keyser (PAR)</td><td>10</td><td>0,883</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Josef Korenar (WBS)</td><td>25</td><td>2,37</td></tr>
<tr><td>2</td><td>Alex Lyon (MIH)</td><td>22</td><td>2,48</td></tr>
<tr><td>3</td><td>Adam Wilcox (NOR)</td><td>16</td><td>2,60</td></tr>
<tr><td>4</td><td>Brendan Burke (RCH)</td><td>10</td><td>2,66</td></tr>
<tr><td>5</td><td>Samuel Montembeault (TRL)</td><td>12</td><td>2,88</td></tr>
<tr><td>6</td><td>Antoine Bibeau (HOU)</td><td>15</td><td>2,88</td></tr>
<tr><td>7</td><td>Kyle Keyser (PAR)</td><td>10</td><td>3,09</td></tr>
<tr><td>8</td><td>Filip Gustavsson (NUN)</td><td>10</td><td>3,33</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Josef Korenar (WBS)</td><td>25</td><td>1 494</td></tr>
<tr><td>2</td><td>Alex Lyon (MIH)</td><td>22</td><td>1 329</td></tr>
<tr><td>3</td><td>Adam Wilcox (NOR)</td><td>16</td><td>971</td></tr>
<tr><td>4</td><td>Antoine Bibeau (HOU)</td><td>15</td><td>916</td></tr>
<tr><td>5</td><td>Samuel Montembeault (TRL)</td><td>12</td><td>687</td></tr>
<tr><td>6</td><td>Filip Gustavsson (NUN)</td><td>10</td><td>612</td></tr>
<tr><td>7</td><td>Brendan Burke (RCH)</td><td>10</td><td>609</td></tr>
<tr><td>8</td><td>Kyle Keyser (PAR)</td><td>10</td><td>562</td></tr>
<tr><td>9</td><td>Tyler Bunz (OKC)</td><td>6</td><td>368</td></tr>
<tr><td>10</td><td>Brandon Halverson (CHI)</td><td>6</td><td>365</td></tr>
<tr><td>11</td><td>Timur Bilyalov (GRG)</td><td>5</td><td>302</td></tr>
<tr><td>12</td><td>Michael DiPietro (CTW)</td><td>5</td><td>284</td></tr>
<tr><td>13</td><td>Spencer Knight (NOR)</td><td>4</td><td>249</td></tr>
<tr><td>14</td><td>Samuel Harvey (RNO)</td><td>5</td><td>242</td></tr>
<tr><td>15</td><td>Kevin Lankinen (CHA)</td><td>4</td><td>239</td></tr>
<tr><td>16</td><td>Alexei Melnichuk (CCC)</td><td>4</td><td>179</td></tr>
<tr><td>17</td><td>Mason McDonald (CHI)</td><td>3</td><td>158</td></tr>
<tr><td>18</td><td>Olivier Roy (CHI)</td><td>3</td><td>142</td></tr>
<tr><td>19</td><td>Eric Comrie (CHA)</td><td>2</td><td>129</td></tr>
<tr><td>20</td><td>Jonathan Bernier (MIH)</td><td>2</td><td>69</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Josef Korenar (WBS)</td><td>25</td><td>749</td></tr>
<tr><td>2</td><td>Alex Lyon (MIH)</td><td>22</td><td>625</td></tr>
<tr><td>3</td><td>Adam Wilcox (NOR)</td><td>16</td><td>493</td></tr>
<tr><td>4</td><td>Antoine Bibeau (HOU)</td><td>15</td><td>440</td></tr>
<tr><td>5</td><td>Samuel Montembeault (TRL)</td><td>12</td><td>367</td></tr>
<tr><td>6</td><td>Filip Gustavsson (NUN)</td><td>10</td><td>314</td></tr>
<tr><td>7</td><td>Brendan Burke (RCH)</td><td>10</td><td>294</td></tr>
<tr><td>8</td><td>Kyle Keyser (PAR)</td><td>10</td><td>248</td></tr>
<tr><td>9</td><td>Tyler Bunz (OKC)</td><td>6</td><td>203</td></tr>
<tr><td>10</td><td>Brandon Halverson (CHI)</td><td>6</td><td>186</td></tr>
<tr><td>11</td><td>Timur Bilyalov (GRG)</td><td>5</td><td>137</td></tr>
<tr><td>12</td><td>Michael DiPietro (CTW)</td><td>5</td><td>135</td></tr>
<tr><td>13</td><td>Spencer Knight (NOR)</td><td>4</td><td>128</td></tr>
<tr><td>14</td><td>Samuel Harvey (RNO)</td><td>5</td><td>118</td></tr>
<tr><td>15</td><td>Alexei Melnichuk (CCC)</td><td>4</td><td>111</td></tr>
<tr><td>16</td><td>Kevin Lankinen (CHA)</td><td>4</td><td>104</td></tr>
<tr><td>17</td><td>Olivier Roy (CHI)</td><td>3</td><td>80</td></tr>
<tr><td>18</td><td>Mason McDonald (CHI)</td><td>3</td><td>72</td></tr>
<tr><td>19</td><td>Eric Comrie (CHA)</td><td>2</td><td>63</td></tr>
<tr><td>20</td><td>Jonathan Bernier (MIH)</td><td>2</td><td>43</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Antoine Bibeau (HOU)</td><td>15</td><td>2</td></tr>
<tr><td>2</td><td>Tyler Bunz (OKC)</td><td>6</td><td>1</td></tr>
<tr><td>3</td><td>Filip Gustavsson (NUN)</td><td>10</td><td>1</td></tr>
<tr><td>4</td><td>Josef Korenar (WBS)</td><td>25</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Alex Lyon (MIH)</td><td>22</td><td>16</td></tr>
<tr><td>2</td><td>Josef Korenar (WBS)</td><td>25</td><td>15</td></tr>
<tr><td>3</td><td>Adam Wilcox (NOR)</td><td>16</td><td>9</td></tr>
<tr><td>4</td><td>Antoine Bibeau (HOU)</td><td>15</td><td>8</td></tr>
<tr><td>5</td><td>Samuel Montembeault (TRL)</td><td>12</td><td>7</td></tr>
<tr><td>6</td><td>Filip Gustavsson (NUN)</td><td>10</td><td>6</td></tr>
<tr><td>7</td><td>Brendan Burke (RCH)</td><td>10</td><td>6</td></tr>
<tr><td>8</td><td>Kyle Keyser (PAR)</td><td>10</td><td>5</td></tr>
<tr><td>9</td><td>Kevin Lankinen (CHA)</td><td>4</td><td>2</td></tr>
<tr><td>10</td><td>Spencer Knight (NOR)</td><td>4</td><td>2</td></tr>
<tr><td>11</td><td>Tyler Bunz (OKC)</td><td>6</td><td>2</td></tr>
<tr><td>12</td><td>Brandon Halverson (CHI)</td><td>6</td><td>2</td></tr>
<tr><td>13</td><td>Zachary Emond (RNO)</td><td>2</td><td>1</td></tr>
<tr><td>14</td><td>Mason McDonald (CHI)</td><td>3</td><td>1</td></tr>
<tr><td>15</td><td>Timur Bilyalov (GRG)</td><td>5</td><td>1</td></tr>
<tr><td>16</td><td>Michael DiPietro (CTW)</td><td>5</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Josef Korenar (WBS)</td><td>25</td><td>9</td></tr>
<tr><td>2</td><td>Adam Wilcox (NOR)</td><td>16</td><td>7</td></tr>
<tr><td>3</td><td>Antoine Bibeau (HOU)</td><td>15</td><td>6</td></tr>
<tr><td>4</td><td>Samuel Montembeault (TRL)</td><td>12</td><td>5</td></tr>
<tr><td>5</td><td>Alexei Melnichuk (CCC)</td><td>4</td><td>4</td></tr>
<tr><td>6</td><td>Brandon Halverson (CHI)</td><td>6</td><td>4</td></tr>
<tr><td>7</td><td>Kyle Keyser (PAR)</td><td>10</td><td>4</td></tr>
<tr><td>8</td><td>Alex Lyon (MIH)</td><td>22</td><td>4</td></tr>
<tr><td>9</td><td>Olivier Roy (CHI)</td><td>3</td><td>3</td></tr>
<tr><td>10</td><td>Timur Bilyalov (GRG)</td><td>5</td><td>3</td></tr>
<tr><td>11</td><td>Samuel Harvey (RNO)</td><td>5</td><td>3</td></tr>
<tr><td>12</td><td>Tyler Bunz (OKC)</td><td>6</td><td>3</td></tr>
<tr><td>13</td><td>Kevin Lankinen (CHA)</td><td>4</td><td>2</td></tr>
<tr><td>14</td><td>Spencer Knight (NOR)</td><td>4</td><td>2</td></tr>
<tr><td>15</td><td>Michael DiPietro (CTW)</td><td>5</td><td>2</td></tr>
<tr><td>16</td><td>Filip Gustavsson (NUN)</td><td>10</td><td>2</td></tr>
<tr><td>17</td><td>Brendan Burke (RCH)</td><td>10</td><td>2</td></tr>
<tr><td>18</td><td>Felix Sandström (CTW)</td><td>1</td><td>1</td></tr>
<tr><td>19</td><td>Evan Fitzpatrick (NUN)</td><td>1</td><td>1</td></tr>
<tr><td>20</td><td>Eric Comrie (CHA)</td><td>2</td><td>1</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
