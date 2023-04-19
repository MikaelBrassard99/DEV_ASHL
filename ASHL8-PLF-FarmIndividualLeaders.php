<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Farm Individual Leaders</title>
<script src="ASHL8-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL8-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL8-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL8-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<b>Minimum Games Played: 7</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Jackson Houck (ALB)</td><td>20</td><td>11</td></tr>
<tr><td>2</td><td>Andreas Johnsson (ALB)</td><td>16</td><td>10</td></tr>
<tr><td>3</td><td>Gregory Beron (GAT)</td><td>19</td><td>10</td></tr>
<tr><td>4</td><td>Ales Hemsky (WBS)</td><td>22</td><td>10</td></tr>
<tr><td>5</td><td>Erik Foley (RFD)</td><td>23</td><td>10</td></tr>
<tr><td>6</td><td>Mike Vecchione (PEO)</td><td>10</td><td>8</td></tr>
<tr><td>7</td><td>Alexander Delnov (ALB)</td><td>20</td><td>8</td></tr>
<tr><td>8</td><td>Michael Mersch (GAT)</td><td>19</td><td>7</td></tr>
<tr><td>9</td><td>Brandon Prust (WBS)</td><td>22</td><td>7</td></tr>
<tr><td>10</td><td>Kailer Yamamoto (OKC)</td><td>7</td><td>6</td></tr>
<tr><td>11</td><td>Greg McKegg (TRD)</td><td>7</td><td>6</td></tr>
<tr><td>12</td><td>Kerby Rychel (BRI)</td><td>7</td><td>6</td></tr>
<tr><td>13</td><td>Mattias Ritola (PEO)</td><td>10</td><td>6</td></tr>
<tr><td>14</td><td>Taylor Leier (LKE)</td><td>10</td><td>6</td></tr>
<tr><td>15</td><td>Jason Pominville (NOR)</td><td>11</td><td>6</td></tr>
<tr><td>16</td><td>Scott Glennie (ALB)</td><td>16</td><td>6</td></tr>
<tr><td>17</td><td>Anthony Cirelli (GAT)</td><td>19</td><td>6</td></tr>
<tr><td>18</td><td>Byron Froese (RFD)</td><td>21</td><td>6</td></tr>
<tr><td>19</td><td>Adam Hall (WBS)</td><td>22</td><td>6</td></tr>
<tr><td>20</td><td>Martin Erat (WBS)</td><td>22</td><td>6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Brian Dumoulin (WBS)</td><td>22</td><td>17</td></tr>
<tr><td>2</td><td>Rasmus Andersson (RFD)</td><td>23</td><td>15</td></tr>
<tr><td>3</td><td>Adam Polasek (ALB)</td><td>20</td><td>14</td></tr>
<tr><td>4</td><td>Kevin Gravel (GAT)</td><td>19</td><td>13</td></tr>
<tr><td>5</td><td>Christopher Tanev (ALB)</td><td>20</td><td>13</td></tr>
<tr><td>6</td><td>Zach Hall (ALB)</td><td>20</td><td>13</td></tr>
<tr><td>7</td><td>Kevan Miller (WBS)</td><td>22</td><td>13</td></tr>
<tr><td>8</td><td>Victor Mete (GAT)</td><td>19</td><td>12</td></tr>
<tr><td>9</td><td>Gregory Beron (GAT)</td><td>19</td><td>12</td></tr>
<tr><td>10</td><td>Ryan Shannon (WBS)</td><td>22</td><td>12</td></tr>
<tr><td>11</td><td>Enrico Miglioranzi (RFD)</td><td>23</td><td>12</td></tr>
<tr><td>12</td><td>Brendan Mikkelson (ALB)</td><td>20</td><td>11</td></tr>
<tr><td>13</td><td>Brad Morrison (RFD)</td><td>23</td><td>11</td></tr>
<tr><td>14</td><td>Patrick Holland (GAT)</td><td>19</td><td>10</td></tr>
<tr><td>15</td><td>Martin Erat (WBS)</td><td>22</td><td>10</td></tr>
<tr><td>16</td><td>Justin Auger (RFD)</td><td>23</td><td>10</td></tr>
<tr><td>17</td><td>Stephen Johns (RFD)</td><td>23</td><td>10</td></tr>
<tr><td>18</td><td>Jason Garrison (NOR)</td><td>11</td><td>9</td></tr>
<tr><td>19</td><td>Jackson Houck (ALB)</td><td>20</td><td>9</td></tr>
<tr><td>20</td><td>Ales Hemsky (WBS)</td><td>22</td><td>9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Andreas Johnsson (ALB)</td><td>16</td><td>81</td></tr>
<tr><td>2</td><td>Anthony Cirelli (GAT)</td><td>19</td><td>76</td></tr>
<tr><td>3</td><td>Erik Foley (RFD)</td><td>23</td><td>75</td></tr>
<tr><td>4</td><td>Ryan Shannon (WBS)</td><td>22</td><td>71</td></tr>
<tr><td>5</td><td>Alexander Delnov (ALB)</td><td>20</td><td>68</td></tr>
<tr><td>6</td><td>Justin Auger (RFD)</td><td>23</td><td>67</td></tr>
<tr><td>7</td><td>Jackson Houck (ALB)</td><td>20</td><td>66</td></tr>
<tr><td>8</td><td>Ales Hemsky (WBS)</td><td>22</td><td>64</td></tr>
<tr><td>9</td><td>David Jones (WBS)</td><td>22</td><td>64</td></tr>
<tr><td>10</td><td>Adam Helewka (RFD)</td><td>23</td><td>64</td></tr>
<tr><td>11</td><td>Michael Mersch (GAT)</td><td>19</td><td>61</td></tr>
<tr><td>12</td><td>Martin Erat (WBS)</td><td>22</td><td>60</td></tr>
<tr><td>13</td><td>Miles Wood (GAT)</td><td>19</td><td>54</td></tr>
<tr><td>14</td><td>Milan Michalek (WBS)</td><td>22</td><td>54</td></tr>
<tr><td>15</td><td>Brad Morrison (RFD)</td><td>23</td><td>54</td></tr>
<tr><td>16</td><td>Rasmus Andersson (RFD)</td><td>23</td><td>53</td></tr>
<tr><td>17</td><td>Byron Froese (RFD)</td><td>21</td><td>49</td></tr>
<tr><td>18</td><td>Jason Pominville (NOR)</td><td>11</td><td>48</td></tr>
<tr><td>19</td><td>Zach Hall (ALB)</td><td>20</td><td>47</td></tr>
<tr><td>20</td><td>David Ullstrom (RFD)</td><td>23</td><td>47</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Kerby Rychel (BRI)</td><td>7</td><td>42,86%</td></tr>
<tr><td>2</td><td>Clarke MacArthur (TRD)</td><td>7</td><td>33,33%</td></tr>
<tr><td>3</td><td>Anton Slepyshev (LKE)</td><td>8</td><td>33,33%</td></tr>
<tr><td>4</td><td>Greg McKegg (TRD)</td><td>7</td><td>28,57%</td></tr>
<tr><td>5</td><td>Philippe Paradis (RFD)</td><td>17</td><td>26,32%</td></tr>
<tr><td>6</td><td>Mike Vecchione (PEO)</td><td>10</td><td>25,81%</td></tr>
<tr><td>7</td><td>Brenden Kichton (BRI)</td><td>7</td><td>25,00%</td></tr>
<tr><td>8</td><td>Stephen MacAulay (LKE)</td><td>10</td><td>25,00%</td></tr>
<tr><td>9</td><td>Ryan White (TRD)</td><td>7</td><td>23,08%</td></tr>
<tr><td>10</td><td>Filip Berglund (BNG)</td><td>12</td><td>23,08%</td></tr>
<tr><td>11</td><td>Sean Malone (BRI)</td><td>7</td><td>22,22%</td></tr>
<tr><td>12</td><td>Gregory Beron (GAT)</td><td>19</td><td>22,22%</td></tr>
<tr><td>13</td><td>Liam Reddox (PEO)</td><td>8</td><td>21,43%</td></tr>
<tr><td>14</td><td>Mattias Ritola (PEO)</td><td>10</td><td>21,43%</td></tr>
<tr><td>15</td><td>Radek Faksa (BRI)</td><td>7</td><td>21,05%</td></tr>
<tr><td>16</td><td>Brian Dumoulin (WBS)</td><td>22</td><td>20,69%</td></tr>
<tr><td>17</td><td>Trevor Murphy (BRI)</td><td>7</td><td>20,00%</td></tr>
<tr><td>18</td><td>Kailer Yamamoto (OKC)</td><td>7</td><td>18,18%</td></tr>
<tr><td>19</td><td>Scott Glennie (ALB)</td><td>16</td><td>17,65%</td></tr>
<tr><td>20</td><td>Andre Petersson (BNG)</td><td>12</td><td>17,39%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Gregory Beron (GAT)</td><td>19</td><td>10-12-22</td></tr>
<tr><td>2</td><td>Ryan Shannon (WBS)</td><td>22</td><td>6-12-18</td></tr>
<tr><td>3</td><td>Mike Vecchione (PEO)</td><td>10</td><td>8-8-16</td></tr>
<tr><td>4</td><td>Zach Hall (ALB)</td><td>20</td><td>3-13-16</td></tr>
<tr><td>5</td><td>Brandon Prust (WBS)</td><td>22</td><td>7-8-15</td></tr>
<tr><td>6</td><td>Anthony Cirelli (GAT)</td><td>19</td><td>6-8-14</td></tr>
<tr><td>7</td><td>Patrick Holland (GAT)</td><td>19</td><td>4-10-14</td></tr>
<tr><td>8</td><td>Brad Morrison (RFD)</td><td>23</td><td>2-11-13</td></tr>
<tr><td>9</td><td>David Ullstrom (RFD)</td><td>23</td><td>5-7-12</td></tr>
<tr><td>10</td><td>Byron Froese (RFD)</td><td>21</td><td>6-5-11</td></tr>
<tr><td>11</td><td>Mattias Ritola (PEO)</td><td>10</td><td>6-4-10</td></tr>
<tr><td>12</td><td>Scott Glennie (ALB)</td><td>16</td><td>6-4-10</td></tr>
<tr><td>13</td><td>Jujhar Khaira (GAT)</td><td>19</td><td>4-6-10</td></tr>
<tr><td>14</td><td>Matthew Lombardi (WBS)</td><td>18</td><td>3-7-10</td></tr>
<tr><td>15</td><td>Matt Leitner (ALB)</td><td>20</td><td>3-7-10</td></tr>
<tr><td>16</td><td>Colin Greening (WBS)</td><td>17</td><td>2-7-9</td></tr>
<tr><td>17</td><td>Johan Sundstrom (BRI)</td><td>7</td><td>1-8-9</td></tr>
<tr><td>18</td><td>Greg McKegg (TRD)</td><td>7</td><td>6-2-8</td></tr>
<tr><td>19</td><td>Adam Hall (WBS)</td><td>22</td><td>6-2-8</td></tr>
<tr><td>20</td><td>Carl Soderberg (NOR)</td><td>11</td><td>3-5-8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Gregory Beron (GAT)</td><td>19</td><td>10-12-22</td></tr>
<tr><td>2</td><td>Erik Foley (RFD)</td><td>23</td><td>10-8-18</td></tr>
<tr><td>3</td><td>Ryan Shannon (WBS)</td><td>22</td><td>6-12-18</td></tr>
<tr><td>4</td><td>Alexander Delnov (ALB)</td><td>20</td><td>8-8-16</td></tr>
<tr><td>5</td><td>Martin Erat (WBS)</td><td>22</td><td>6-10-16</td></tr>
<tr><td>6</td><td>Brandon Prust (WBS)</td><td>22</td><td>7-8-15</td></tr>
<tr><td>7</td><td>Adam Helewka (RFD)</td><td>23</td><td>6-9-15</td></tr>
<tr><td>8</td><td>Milan Michalek (WBS)</td><td>22</td><td>6-8-14</td></tr>
<tr><td>9</td><td>Taylor Leier (LKE)</td><td>10</td><td>6-6-12</td></tr>
<tr><td>10</td><td>David Ullstrom (RFD)</td><td>23</td><td>5-7-12</td></tr>
<tr><td>11</td><td>Laurin Braun (GAT)</td><td>19</td><td>4-8-12</td></tr>
<tr><td>12</td><td>Miles Wood (GAT)</td><td>19</td><td>4-8-12</td></tr>
<tr><td>13</td><td>Michael Mersch (GAT)</td><td>19</td><td>7-4-11</td></tr>
<tr><td>14</td><td>Brett Bulmer (GAT)</td><td>19</td><td>3-8-11</td></tr>
<tr><td>15</td><td>David Jones (WBS)</td><td>22</td><td>2-9-11</td></tr>
<tr><td>16</td><td>Mattias Ritola (PEO)</td><td>10</td><td>6-4-10</td></tr>
<tr><td>17</td><td>Pontus Aberg (NOR)</td><td>11</td><td>5-5-10</td></tr>
<tr><td>18</td><td>Matt Puempel (BNG)</td><td>11</td><td>4-6-10</td></tr>
<tr><td>19</td><td>Jujhar Khaira (GAT)</td><td>19</td><td>4-6-10</td></tr>
<tr><td>20</td><td>Matthew Lombardi (WBS)</td><td>18</td><td>3-7-10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Gregory Beron (GAT)</td><td>19</td><td>10-12-22</td></tr>
<tr><td>2</td><td>Jackson Houck (ALB)</td><td>20</td><td>11-9-20</td></tr>
<tr><td>3</td><td>Ales Hemsky (WBS)</td><td>22</td><td>10-9-19</td></tr>
<tr><td>4</td><td>Ryan Shannon (WBS)</td><td>22</td><td>6-12-18</td></tr>
<tr><td>5</td><td>Andreas Johnsson (ALB)</td><td>16</td><td>10-6-16</td></tr>
<tr><td>6</td><td>Mike Vecchione (PEO)</td><td>10</td><td>8-8-16</td></tr>
<tr><td>7</td><td>Martin Erat (WBS)</td><td>22</td><td>6-10-16</td></tr>
<tr><td>8</td><td>Justin Auger (RFD)</td><td>23</td><td>6-10-16</td></tr>
<tr><td>9</td><td>Brandon Prust (WBS)</td><td>22</td><td>7-8-15</td></tr>
<tr><td>10</td><td>Patrick Holland (GAT)</td><td>19</td><td>4-10-14</td></tr>
<tr><td>11</td><td>Laurin Braun (GAT)</td><td>19</td><td>4-8-12</td></tr>
<tr><td>12</td><td>Miles Wood (GAT)</td><td>19</td><td>4-8-12</td></tr>
<tr><td>13</td><td>Michael Mersch (GAT)</td><td>19</td><td>7-4-11</td></tr>
<tr><td>14</td><td>Brett Bulmer (GAT)</td><td>19</td><td>3-8-11</td></tr>
<tr><td>15</td><td>David Jones (WBS)</td><td>22</td><td>2-9-11</td></tr>
<tr><td>16</td><td>Mattias Ritola (PEO)</td><td>10</td><td>6-4-10</td></tr>
<tr><td>17</td><td>Matt Puempel (BNG)</td><td>11</td><td>4-6-10</td></tr>
<tr><td>18</td><td>Matt Leitner (ALB)</td><td>20</td><td>3-7-10</td></tr>
<tr><td>19</td><td>Jason Pominville (NOR)</td><td>11</td><td>6-3-9</td></tr>
<tr><td>20</td><td>Nikita Scherbak (BRI)</td><td>7</td><td>3-6-9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Brian Dumoulin (WBS)</td><td>22</td><td>6-17-23</td></tr>
<tr><td>2</td><td>Gregory Beron (GAT)</td><td>19</td><td>10-12-22</td></tr>
<tr><td>3</td><td>Rasmus Andersson (RFD)</td><td>23</td><td>4-15-19</td></tr>
<tr><td>4</td><td>Christopher Tanev (ALB)</td><td>20</td><td>5-13-18</td></tr>
<tr><td>5</td><td>Brendan Mikkelson (ALB)</td><td>20</td><td>4-11-15</td></tr>
<tr><td>6</td><td>Adam Polasek (ALB)</td><td>20</td><td>1-14-15</td></tr>
<tr><td>7</td><td>Kevin Gravel (GAT)</td><td>19</td><td>1-13-14</td></tr>
<tr><td>8</td><td>Kevan Miller (WBS)</td><td>22</td><td>1-13-14</td></tr>
<tr><td>9</td><td>Victor Mete (GAT)</td><td>19</td><td>1-12-13</td></tr>
<tr><td>10</td><td>Enrico Miglioranzi (RFD)</td><td>23</td><td>1-12-13</td></tr>
<tr><td>11</td><td>Robert Hagg (GAT)</td><td>19</td><td>5-7-12</td></tr>
<tr><td>12</td><td>Jason Fram (RFD)</td><td>23</td><td>3-9-12</td></tr>
<tr><td>13</td><td>Stephen Johns (RFD)</td><td>23</td><td>2-10-12</td></tr>
<tr><td>14</td><td>Trevor Van Riemsdyk (RFD)</td><td>22</td><td>3-8-11</td></tr>
<tr><td>15</td><td>Anton Babchuk (WBS)</td><td>18</td><td>4-6-10</td></tr>
<tr><td>16</td><td>Matt Donovan (GAT)</td><td>19</td><td>4-6-10</td></tr>
<tr><td>17</td><td>Jason Garrison (NOR)</td><td>11</td><td>1-9-10</td></tr>
<tr><td>18</td><td>Jordan Subban (GAT)</td><td>19</td><td>4-4-8</td></tr>
<tr><td>19</td><td>Ryan Segalla (GAT)</td><td>19</td><td>3-5-8</td></tr>
<tr><td>20</td><td>Matthew Corrente (WBS)</td><td>21</td><td>3-5-8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Mike Vecchione (PEO)</td><td>10</td><td>1,72</td></tr>
<tr><td>2</td><td>Nikita Scherbak (BRI)</td><td>7</td><td>1,53</td></tr>
<tr><td>3</td><td>Lawson Crouse (TRD)</td><td>7</td><td>1,47</td></tr>
<tr><td>4</td><td>Kerby Rychel (BRI)</td><td>7</td><td>1,38</td></tr>
<tr><td>5</td><td>Johan Sundstrom (BRI)</td><td>7</td><td>1,34</td></tr>
<tr><td>6</td><td>Gregory Beron (GAT)</td><td>19</td><td>1,29</td></tr>
<tr><td>7</td><td>Greg McKegg (TRD)</td><td>7</td><td>1,20</td></tr>
<tr><td>8</td><td>Taylor Leier (LKE)</td><td>10</td><td>1,20</td></tr>
<tr><td>9</td><td>Jérémy Grégoire (TRD)</td><td>7</td><td>1,19</td></tr>
<tr><td>10</td><td>Kailer Yamamoto (OKC)</td><td>7</td><td>1,18</td></tr>
<tr><td>11</td><td>Christoph Bertschy (LKE)</td><td>7</td><td>1,13</td></tr>
<tr><td>12</td><td>Zach Hall (ALB)</td><td>20</td><td>1,11</td></tr>
<tr><td>13</td><td>Jackson Houck (ALB)</td><td>20</td><td>1,10</td></tr>
<tr><td>14</td><td>Borna Rendulic (PEO)</td><td>10</td><td>1,10</td></tr>
<tr><td>15</td><td>Matt Schmalz (BNG)</td><td>11</td><td>1,09</td></tr>
<tr><td>16</td><td>Jake Walman (LKE)</td><td>9</td><td>1,06</td></tr>
<tr><td>17</td><td>Jan Kovar (LKE)</td><td>7</td><td>1,05</td></tr>
<tr><td>18</td><td>Laurin Braun (GAT)</td><td>19</td><td>1,04</td></tr>
<tr><td>19</td><td>Rinat Valiev (TRD)</td><td>7</td><td>1,01</td></tr>
<tr><td>20</td><td>Dustin Boyd (PEO)</td><td>10</td><td>1,00</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Matthew Lombardi (WBS)</td><td>18</td><td>61,13%</td></tr>
<tr><td>2</td><td>Jan Kovar (LKE)</td><td>7</td><td>59,26%</td></tr>
<tr><td>3</td><td>Radek Faksa (BRI)</td><td>7</td><td>57,51%</td></tr>
<tr><td>4</td><td>Michael Santorelli (PEO)</td><td>9</td><td>57,30%</td></tr>
<tr><td>5</td><td>Mirko Hoefflin (RFD)</td><td>23</td><td>56,94%</td></tr>
<tr><td>6</td><td>Blair Betts (BNG)</td><td>12</td><td>56,40%</td></tr>
<tr><td>7</td><td>Sean Malone (BRI)</td><td>7</td><td>56,25%</td></tr>
<tr><td>8</td><td>Ryan Shannon (WBS)</td><td>22</td><td>56,08%</td></tr>
<tr><td>9</td><td>Brad Malone (LKE)</td><td>10</td><td>56,07%</td></tr>
<tr><td>10</td><td>Tyler Pitlick (OKC)</td><td>7</td><td>55,56%</td></tr>
<tr><td>11</td><td>Brian Sutherby (NOR)</td><td>11</td><td>55,43%</td></tr>
<tr><td>12</td><td>Jared McCann (BRI)</td><td>7</td><td>54,39%</td></tr>
<tr><td>13</td><td>Carl Soderberg (NOR)</td><td>11</td><td>54,29%</td></tr>
<tr><td>14</td><td>Jason Pominville (NOR)</td><td>11</td><td>53,61%</td></tr>
<tr><td>15</td><td>Scott Glennie (ALB)</td><td>16</td><td>53,47%</td></tr>
<tr><td>16</td><td>Patrick Holland (GAT)</td><td>19</td><td>53,28%</td></tr>
<tr><td>17</td><td>Johan Sundstrom (BRI)</td><td>7</td><td>53,25%</td></tr>
<tr><td>18</td><td>Adam Hall (WBS)</td><td>22</td><td>52,97%</td></tr>
<tr><td>19</td><td>Clarke MacArthur (TRD)</td><td>7</td><td>52,54%</td></tr>
<tr><td>20</td><td>Peter Regin (PEO)</td><td>10</td><td>51,79%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Mike Vecchione (PEO)</td><td>10</td><td>13</td></tr>
<tr><td>2</td><td>Brett Bulmer (GAT)</td><td>19</td><td>13</td></tr>
<tr><td>3</td><td>Gregory Beron (GAT)</td><td>19</td><td>13</td></tr>
<tr><td>4</td><td>Borna Rendulic (PEO)</td><td>10</td><td>12</td></tr>
<tr><td>5</td><td>Mattias Ritola (PEO)</td><td>10</td><td>9</td></tr>
<tr><td>6</td><td>Taylor Leier (LKE)</td><td>10</td><td>9</td></tr>
<tr><td>7</td><td>Jakub Nakládal (BNG)</td><td>12</td><td>8</td></tr>
<tr><td>8</td><td>Enrico Miglioranzi (RFD)</td><td>23</td><td>8</td></tr>
<tr><td>9</td><td>Anton Slepyshev (LKE)</td><td>8</td><td>7</td></tr>
<tr><td>10</td><td>David Jones (WBS)</td><td>22</td><td>7</td></tr>
<tr><td>11</td><td>Brian Dumoulin (WBS)</td><td>22</td><td>7</td></tr>
<tr><td>12</td><td>Rasmus Andersson (RFD)</td><td>23</td><td>7</td></tr>
<tr><td>13</td><td>Andreas Englund (LKE)</td><td>7</td><td>6</td></tr>
<tr><td>14</td><td>Stephen Silas (LKE)</td><td>10</td><td>6</td></tr>
<tr><td>15</td><td>Axel Andersson (ALB)</td><td>14</td><td>6</td></tr>
<tr><td>16</td><td>Adam Polasek (ALB)</td><td>20</td><td>6</td></tr>
<tr><td>17</td><td>Matt Leitner (ALB)</td><td>20</td><td>6</td></tr>
<tr><td>18</td><td>Johnny Boychuk (PEO)</td><td>10</td><td>5</td></tr>
<tr><td>19</td><td>Filip Berglund (BNG)</td><td>12</td><td>5</td></tr>
<tr><td>20</td><td>Jordan Subban (GAT)</td><td>19</td><td>5</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Adam Polasek (ALB)</td><td>20</td><td>40</td></tr>
<tr><td>2</td><td>Jackson Houck (ALB)</td><td>20</td><td>28</td></tr>
<tr><td>3</td><td>Justin Holl (RFD)</td><td>23</td><td>28</td></tr>
<tr><td>4</td><td>Kevan Miller (WBS)</td><td>22</td><td>24</td></tr>
<tr><td>5</td><td>Niklas Kronwall (WBS)</td><td>21</td><td>22</td></tr>
<tr><td>6</td><td>Stephen Johns (RFD)</td><td>23</td><td>22</td></tr>
<tr><td>7</td><td>Colin Greening (WBS)</td><td>17</td><td>20</td></tr>
<tr><td>8</td><td>Adam Burish (NOR)</td><td>11</td><td>19</td></tr>
<tr><td>9</td><td>Ian McCoshen (TRD)</td><td>7</td><td>18</td></tr>
<tr><td>10</td><td>Jordan Subban (GAT)</td><td>19</td><td>18</td></tr>
<tr><td>11</td><td>Brett Cote (LKE)</td><td>10</td><td>17</td></tr>
<tr><td>12</td><td>Stephen Silas (LKE)</td><td>10</td><td>16</td></tr>
<tr><td>13</td><td>Miles Wood (GAT)</td><td>19</td><td>16</td></tr>
<tr><td>14</td><td>Matthew Corrente (WBS)</td><td>21</td><td>16</td></tr>
<tr><td>15</td><td>Rasmus Andersson (RFD)</td><td>23</td><td>16</td></tr>
<tr><td>16</td><td>Enrico Miglioranzi (RFD)</td><td>23</td><td>16</td></tr>
<tr><td>17</td><td>Brenden Morrow (ALB)</td><td>20</td><td>14</td></tr>
<tr><td>18</td><td>Gabriel Carlsson (ALB)</td><td>20</td><td>14</td></tr>
<tr><td>19</td><td>Adam Hall (WBS)</td><td>22</td><td>14</td></tr>
<tr><td>20</td><td>Brian Dumoulin (WBS)</td><td>22</td><td>14</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Kevin Gravel (GAT)</td><td>19</td><td>34</td></tr>
<tr><td>2</td><td>Kevan Miller (WBS)</td><td>22</td><td>34</td></tr>
<tr><td>3</td><td>Trevor Van Riemsdyk (RFD)</td><td>22</td><td>34</td></tr>
<tr><td>4</td><td>Rasmus Andersson (RFD)</td><td>23</td><td>34</td></tr>
<tr><td>5</td><td>Matt Donovan (GAT)</td><td>19</td><td>30</td></tr>
<tr><td>6</td><td>Brendan Mikkelson (ALB)</td><td>20</td><td>29</td></tr>
<tr><td>7</td><td>Christopher Tanev (ALB)</td><td>20</td><td>29</td></tr>
<tr><td>8</td><td>Matthew Corrente (WBS)</td><td>21</td><td>29</td></tr>
<tr><td>9</td><td>Justin Holl (RFD)</td><td>23</td><td>29</td></tr>
<tr><td>10</td><td>Stephen Johns (RFD)</td><td>23</td><td>29</td></tr>
<tr><td>11</td><td>Adam Polasek (ALB)</td><td>20</td><td>28</td></tr>
<tr><td>12</td><td>Jason Fram (RFD)</td><td>23</td><td>28</td></tr>
<tr><td>13</td><td>Anton Babchuk (WBS)</td><td>18</td><td>23</td></tr>
<tr><td>14</td><td>Jordan Subban (GAT)</td><td>19</td><td>23</td></tr>
<tr><td>15</td><td>Brian Dumoulin (WBS)</td><td>22</td><td>23</td></tr>
<tr><td>16</td><td>Niklas Kronwall (WBS)</td><td>21</td><td>22</td></tr>
<tr><td>17</td><td>Enrico Miglioranzi (RFD)</td><td>23</td><td>21</td></tr>
<tr><td>18</td><td>Kevin Bieksa (BNG)</td><td>12</td><td>20</td></tr>
<tr><td>19</td><td>Ryan Segalla (GAT)</td><td>19</td><td>20</td></tr>
<tr><td>20</td><td>Andy Welinski (ALB)</td><td>20</td><td>20</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Jackson Houck (ALB)</td><td>20</td><td>11-9-20</td></tr>
<tr><td>2</td><td>Rasmus Andersson (RFD)</td><td>23</td><td>4-15-19</td></tr>
<tr><td>3</td><td>Erik Foley (RFD)</td><td>23</td><td>10-8-18</td></tr>
<tr><td>4</td><td>Andreas Johnsson (ALB)</td><td>16</td><td>10-6-16</td></tr>
<tr><td>5</td><td>Alexander Delnov (ALB)</td><td>20</td><td>8-8-16</td></tr>
<tr><td>6</td><td>Justin Auger (RFD)</td><td>23</td><td>6-10-16</td></tr>
<tr><td>7</td><td>Zach Hall (ALB)</td><td>20</td><td>3-13-16</td></tr>
<tr><td>8</td><td>Adam Helewka (RFD)</td><td>23</td><td>6-9-15</td></tr>
<tr><td>9</td><td>Anthony Cirelli (GAT)</td><td>19</td><td>6-8-14</td></tr>
<tr><td>10</td><td>Patrick Holland (GAT)</td><td>19</td><td>4-10-14</td></tr>
<tr><td>11</td><td>Kevin Gravel (GAT)</td><td>19</td><td>1-13-14</td></tr>
<tr><td>12</td><td>Brad Morrison (RFD)</td><td>23</td><td>2-11-13</td></tr>
<tr><td>13</td><td>Victor Mete (GAT)</td><td>19</td><td>1-12-13</td></tr>
<tr><td>14</td><td>Taylor Leier (LKE)</td><td>10</td><td>6-6-12</td></tr>
<tr><td>15</td><td>Robert Hagg (GAT)</td><td>19</td><td>5-7-12</td></tr>
<tr><td>16</td><td>Miles Wood (GAT)</td><td>19</td><td>4-8-12</td></tr>
<tr><td>17</td><td>Jason Fram (RFD)</td><td>23</td><td>3-9-12</td></tr>
<tr><td>18</td><td>Pontus Aberg (NOR)</td><td>11</td><td>5-5-10</td></tr>
<tr><td>19</td><td>Matt Puempel (BNG)</td><td>11</td><td>4-6-10</td></tr>
<tr><td>20</td><td>Jujhar Khaira (GAT)</td><td>19</td><td>4-6-10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Stephen Johns (RFD)</td><td>23</td><td>77</td></tr>
<tr><td>2</td><td>Justin Auger (RFD)</td><td>23</td><td>59</td></tr>
<tr><td>3</td><td>Kevan Miller (WBS)</td><td>22</td><td>55</td></tr>
<tr><td>4</td><td>Miles Wood (GAT)</td><td>19</td><td>53</td></tr>
<tr><td>5</td><td>Brandon Prust (WBS)</td><td>22</td><td>53</td></tr>
<tr><td>6</td><td>Rasmus Andersson (RFD)</td><td>23</td><td>51</td></tr>
<tr><td>7</td><td>Matthew Corrente (WBS)</td><td>21</td><td>49</td></tr>
<tr><td>8</td><td>Jackson Houck (ALB)</td><td>20</td><td>46</td></tr>
<tr><td>9</td><td>Colin Greening (WBS)</td><td>17</td><td>43</td></tr>
<tr><td>10</td><td>Brenden Morrow (ALB)</td><td>20</td><td>41</td></tr>
<tr><td>11</td><td>Gabriel Carlsson (ALB)</td><td>20</td><td>41</td></tr>
<tr><td>12</td><td>Brad Morrison (RFD)</td><td>23</td><td>37</td></tr>
<tr><td>13</td><td>Niklas Kronwall (WBS)</td><td>21</td><td>36</td></tr>
<tr><td>14</td><td>David Jones (WBS)</td><td>22</td><td>36</td></tr>
<tr><td>15</td><td>Kevin Gravel (GAT)</td><td>19</td><td>35</td></tr>
<tr><td>16</td><td>Christopher DiDomenico (RFD)</td><td>23</td><td>35</td></tr>
<tr><td>17</td><td>Jordan Subban (GAT)</td><td>19</td><td>34</td></tr>
<tr><td>18</td><td>Justin Holl (RFD)</td><td>23</td><td>33</td></tr>
<tr><td>19</td><td>Brett Bulmer (GAT)</td><td>19</td><td>32</td></tr>
<tr><td>20</td><td>Brian Dumoulin (WBS)</td><td>22</td><td>32</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Kerby Rychel (BRI)</td><td>7</td><td>4</td></tr>
<tr><td>2</td><td>Scott Glennie (ALB)</td><td>16</td><td>4</td></tr>
<tr><td>3</td><td>Brian Dumoulin (WBS)</td><td>22</td><td>4</td></tr>
<tr><td>4</td><td>Kailer Yamamoto (OKC)</td><td>7</td><td>3</td></tr>
<tr><td>5</td><td>Eric Gelinas (WBS)</td><td>9</td><td>3</td></tr>
<tr><td>6</td><td>Jason Pominville (NOR)</td><td>11</td><td>3</td></tr>
<tr><td>7</td><td>Anthony Cirelli (GAT)</td><td>19</td><td>3</td></tr>
<tr><td>8</td><td>Christopher Tanev (ALB)</td><td>20</td><td>3</td></tr>
<tr><td>9</td><td>Alexander Delnov (ALB)</td><td>20</td><td>3</td></tr>
<tr><td>10</td><td>Zach Hall (ALB)</td><td>20</td><td>3</td></tr>
<tr><td>11</td><td>Ales Hemsky (WBS)</td><td>22</td><td>3</td></tr>
<tr><td>12</td><td>Martin Erat (WBS)</td><td>22</td><td>3</td></tr>
<tr><td>13</td><td>Ryan Shannon (WBS)</td><td>22</td><td>3</td></tr>
<tr><td>14</td><td>Erik Foley (RFD)</td><td>23</td><td>3</td></tr>
<tr><td>15</td><td>Anton Stralman (WBS)</td><td>5</td><td>2</td></tr>
<tr><td>16</td><td>Richard Panik (RCH)</td><td>5</td><td>2</td></tr>
<tr><td>17</td><td>Jakub Vrana (CTW)</td><td>5</td><td>2</td></tr>
<tr><td>18</td><td>Clarke MacArthur (TRD)</td><td>7</td><td>2</td></tr>
<tr><td>19</td><td>Ryan White (TRD)</td><td>7</td><td>2</td></tr>
<tr><td>20</td><td>Trevor Murphy (BRI)</td><td>7</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Nick Paul (JOL)</td><td>1</td><td>1</td></tr>
<tr><td>2</td><td>Radek Faksa (BRI)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Julian Melchiori (RFD)</td><td>8</td><td>1</td></tr>
<tr><td>4</td><td>Robert Hagg (GAT)</td><td>19</td><td>1</td></tr>
<tr><td>5</td><td>Adam Helewka (RFD)</td><td>23</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Adam Hall (WBS)</td><td>22</td><td>4</td></tr>
<tr><td>2</td><td>Jason Pominville (NOR)</td><td>11</td><td>3</td></tr>
<tr><td>3</td><td>Anders Bjork (GAT)</td><td>19</td><td>3</td></tr>
<tr><td>4</td><td>Alexander Delnov (ALB)</td><td>20</td><td>3</td></tr>
<tr><td>5</td><td>Jackson Houck (ALB)</td><td>20</td><td>3</td></tr>
<tr><td>6</td><td>Gustav Nyquist (RFD)</td><td>23</td><td>3</td></tr>
<tr><td>7</td><td>Adam Helewka (RFD)</td><td>23</td><td>3</td></tr>
<tr><td>8</td><td>Erik Foley (RFD)</td><td>23</td><td>3</td></tr>
<tr><td>9</td><td>Greg McKegg (TRD)</td><td>7</td><td>2</td></tr>
<tr><td>10</td><td>Trevor Murphy (BRI)</td><td>7</td><td>2</td></tr>
<tr><td>11</td><td>Mike Vecchione (PEO)</td><td>10</td><td>2</td></tr>
<tr><td>12</td><td>Matt Schmalz (BNG)</td><td>11</td><td>2</td></tr>
<tr><td>13</td><td>Pontus Aberg (NOR)</td><td>11</td><td>2</td></tr>
<tr><td>14</td><td>Robert Hagg (GAT)</td><td>19</td><td>2</td></tr>
<tr><td>15</td><td>Brett Bulmer (GAT)</td><td>19</td><td>2</td></tr>
<tr><td>16</td><td>Jujhar Khaira (GAT)</td><td>19</td><td>2</td></tr>
<tr><td>17</td><td>Zach Hall (ALB)</td><td>20</td><td>2</td></tr>
<tr><td>18</td><td>Ales Hemsky (WBS)</td><td>22</td><td>2</td></tr>
<tr><td>19</td><td>Milan Michalek (WBS)</td><td>22</td><td>2</td></tr>
<tr><td>20</td><td>Anton Stralman (WBS)</td><td>5</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Taylor Leier (LKE)</td><td>10</td><td>2</td></tr>
<tr><td>2</td><td>Gregory Beron (GAT)</td><td>19</td><td>2</td></tr>
<tr><td>3</td><td>Erik Foley (RFD)</td><td>23</td><td>2</td></tr>
<tr><td>4</td><td>Joseph Labate (CHI)</td><td>5</td><td>1</td></tr>
<tr><td>5</td><td>Benn Ferriero (RCH)</td><td>5</td><td>1</td></tr>
<tr><td>6</td><td>Jakub Vrana (CTW)</td><td>5</td><td>1</td></tr>
<tr><td>7</td><td>Dillon Simpson (OKC)</td><td>6</td><td>1</td></tr>
<tr><td>8</td><td>Andreas Englund (LKE)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>Dean Kukan (TRD)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Dmitry Korobov (BRI)</td><td>7</td><td>1</td></tr>
<tr><td>11</td><td>Nikita Scherbak (BRI)</td><td>7</td><td>1</td></tr>
<tr><td>12</td><td>Julian Melchiori (RFD)</td><td>8</td><td>1</td></tr>
<tr><td>13</td><td>Mattias Ritola (PEO)</td><td>10</td><td>1</td></tr>
<tr><td>14</td><td>Gus Young (LKE)</td><td>10</td><td>1</td></tr>
<tr><td>15</td><td>Anthony Stewart (NOR)</td><td>11</td><td>1</td></tr>
<tr><td>16</td><td>Carl Soderberg (NOR)</td><td>11</td><td>1</td></tr>
<tr><td>17</td><td>Dany Heatley (BNG)</td><td>12</td><td>1</td></tr>
<tr><td>18</td><td>Andreas Johnsson (ALB)</td><td>16</td><td>1</td></tr>
<tr><td>19</td><td>Scott Glennie (ALB)</td><td>16</td><td>1</td></tr>
<tr><td>20</td><td>Matt Donovan (GAT)</td><td>19</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Tyson Baillie (BRI)</td><td>7</td><td>1</td></tr>
<tr><td>2</td><td>Mike Vecchione (PEO)</td><td>10</td><td>1</td></tr>
<tr><td>3</td><td>Anthony Stewart (NOR)</td><td>11</td><td>1</td></tr>
<tr><td>4</td><td>Rasmus Andersson (RFD)</td><td>23</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Ryan Shannon (WBS)</td><td>22</td><td>566</td></tr>
<tr><td>2</td><td>Rasmus Andersson (RFD)</td><td>23</td><td>526</td></tr>
<tr><td>3</td><td>Justin Auger (RFD)</td><td>23</td><td>516</td></tr>
<tr><td>4</td><td>Brian Dumoulin (WBS)</td><td>22</td><td>514</td></tr>
<tr><td>5</td><td>Christopher Tanev (ALB)</td><td>20</td><td>499</td></tr>
<tr><td>6</td><td>Kevan Miller (WBS)</td><td>22</td><td>470</td></tr>
<tr><td>7</td><td>Adam Helewka (RFD)</td><td>23</td><td>461</td></tr>
<tr><td>8</td><td>Enrico Miglioranzi (RFD)</td><td>23</td><td>454</td></tr>
<tr><td>9</td><td>Trevor Van Riemsdyk (RFD)</td><td>22</td><td>436</td></tr>
<tr><td>10</td><td>Stephen Johns (RFD)</td><td>23</td><td>433</td></tr>
<tr><td>11</td><td>Milan Michalek (WBS)</td><td>22</td><td>426</td></tr>
<tr><td>12</td><td>Brad Morrison (RFD)</td><td>23</td><td>424</td></tr>
<tr><td>13</td><td>Ales Hemsky (WBS)</td><td>22</td><td>424</td></tr>
<tr><td>14</td><td>Jordan Subban (GAT)</td><td>19</td><td>413</td></tr>
<tr><td>15</td><td>Byron Froese (RFD)</td><td>21</td><td>413</td></tr>
<tr><td>16</td><td>Jason Fram (RFD)</td><td>23</td><td>412</td></tr>
<tr><td>17</td><td>Martin Erat (WBS)</td><td>22</td><td>409</td></tr>
<tr><td>18</td><td>Brendan Mikkelson (ALB)</td><td>20</td><td>405</td></tr>
<tr><td>19</td><td>Robert Hagg (GAT)</td><td>19</td><td>405</td></tr>
<tr><td>20</td><td>Matt Donovan (GAT)</td><td>19</td><td>405</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Mike Vecchione (PEO)</td><td>10</td><td>1</td></tr>
<tr><td>2</td><td>Alexander Delnov (ALB)</td><td>20</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Clarke MacArthur (TRD)</td><td>7</td><td>4</td></tr>
<tr><td>2</td><td>Greg McKegg (TRD)</td><td>7</td><td>3</td></tr>
<tr><td>3</td><td>Jesper Bratt (CTW)</td><td>5</td><td>2</td></tr>
<tr><td>4</td><td>Brooks Laich (ALB)</td><td>6</td><td>2</td></tr>
<tr><td>5</td><td>Dustin Boyd (PEO)</td><td>10</td><td>2</td></tr>
<tr><td>6</td><td>Pontus Aberg (NOR)</td><td>11</td><td>2</td></tr>
<tr><td>7</td><td>Matt Puempel (BNG)</td><td>11</td><td>2</td></tr>
<tr><td>8</td><td>Adam Hall (WBS)</td><td>22</td><td>2</td></tr>
<tr><td>9</td><td>Justin Auger (RFD)</td><td>23</td><td>2</td></tr>
<tr><td>10</td><td>Nick Paul (JOL)</td><td>1</td><td>1</td></tr>
<tr><td>11</td><td>Alex Barré-Boulet (LAV)</td><td>4</td><td>1</td></tr>
<tr><td>12</td><td>Sonny Milano (LAV)</td><td>4</td><td>1</td></tr>
<tr><td>13</td><td>Benn Ferriero (RCH)</td><td>5</td><td>1</td></tr>
<tr><td>14</td><td>Greg Nemisz (JOL)</td><td>5</td><td>1</td></tr>
<tr><td>15</td><td>Julius Bergman (CHI)</td><td>5</td><td>1</td></tr>
<tr><td>16</td><td>Richard Panik (RCH)</td><td>5</td><td>1</td></tr>
<tr><td>17</td><td>Justin Shugg (CHI)</td><td>5</td><td>1</td></tr>
<tr><td>18</td><td>Erik Haula (CTW)</td><td>5</td><td>1</td></tr>
<tr><td>19</td><td>Nicklas Jensen (CHI)</td><td>5</td><td>1</td></tr>
<tr><td>20</td><td>Matthew Highmore (RCH)</td><td>5</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Greg McKegg (TRD)</td><td>7</td><td>7</td></tr>
<tr><td>2</td><td>Brandon Prust (WBS)</td><td>22</td><td>6</td></tr>
<tr><td>3</td><td>Matthew Finn (JOL)</td><td>5</td><td>5</td></tr>
<tr><td>4</td><td>Clarke MacArthur (TRD)</td><td>7</td><td>5</td></tr>
<tr><td>5</td><td>Milan Michalek (WBS)</td><td>22</td><td>5</td></tr>
<tr><td>6</td><td>Derek Mathers (TRD)</td><td>7</td><td>4</td></tr>
<tr><td>7</td><td>Kailer Yamamoto (OKC)</td><td>7</td><td>4</td></tr>
<tr><td>8</td><td>Lawson Crouse (TRD)</td><td>7</td><td>4</td></tr>
<tr><td>9</td><td>Borna Rendulic (PEO)</td><td>10</td><td>4</td></tr>
<tr><td>10</td><td>Gregory Beron (GAT)</td><td>19</td><td>4</td></tr>
<tr><td>11</td><td>Brian Dumoulin (WBS)</td><td>22</td><td>4</td></tr>
<tr><td>12</td><td>Ben Harpur (LAV)</td><td>4</td><td>3</td></tr>
<tr><td>13</td><td>Julius Bergman (CHI)</td><td>5</td><td>3</td></tr>
<tr><td>14</td><td>Dennis Persson (CHI)</td><td>5</td><td>3</td></tr>
<tr><td>15</td><td>Jesper Bratt (CTW)</td><td>5</td><td>3</td></tr>
<tr><td>16</td><td>Jake DeBrusk (CTW)</td><td>5</td><td>3</td></tr>
<tr><td>17</td><td>Cale Makar (BRI)</td><td>7</td><td>3</td></tr>
<tr><td>18</td><td>Matt Leitner (ALB)</td><td>20</td><td>3</td></tr>
<tr><td>19</td><td>David Jones (WBS)</td><td>22</td><td>3</td></tr>
<tr><td>20</td><td>Greg Nemisz (JOL)</td><td>5</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Ryan Shannon (WBS)</td><td>22</td><td>69</td></tr>
<tr><td>2</td><td>Byron Froese (RFD)</td><td>21</td><td>53</td></tr>
<tr><td>3</td><td>Brad Morrison (RFD)</td><td>23</td><td>48</td></tr>
<tr><td>4</td><td>Matthew Lombardi (WBS)</td><td>18</td><td>46</td></tr>
<tr><td>5</td><td>Adam Hall (WBS)</td><td>22</td><td>45</td></tr>
<tr><td>6</td><td>Patrick Holland (GAT)</td><td>19</td><td>43</td></tr>
<tr><td>7</td><td>Anthony Cirelli (GAT)</td><td>19</td><td>42</td></tr>
<tr><td>8</td><td>Andreas Johnsson (ALB)</td><td>16</td><td>41</td></tr>
<tr><td>9</td><td>Zach Hall (ALB)</td><td>20</td><td>41</td></tr>
<tr><td>10</td><td>Gregory Beron (GAT)</td><td>19</td><td>37</td></tr>
<tr><td>11</td><td>Rasmus Andersson (RFD)</td><td>23</td><td>37</td></tr>
<tr><td>12</td><td>Justin Auger (RFD)</td><td>23</td><td>36</td></tr>
<tr><td>13</td><td>David Jones (WBS)</td><td>22</td><td>34</td></tr>
<tr><td>14</td><td>Dylan Strome (ALB)</td><td>20</td><td>33</td></tr>
<tr><td>15</td><td>Kevan Miller (WBS)</td><td>22</td><td>33</td></tr>
<tr><td>16</td><td>Andy Welinski (ALB)</td><td>20</td><td>32</td></tr>
<tr><td>17</td><td>Brandon Prust (WBS)</td><td>22</td><td>31</td></tr>
<tr><td>18</td><td>Michael Santorelli (PEO)</td><td>9</td><td>30</td></tr>
<tr><td>19</td><td>Jujhar Khaira (GAT)</td><td>19</td><td>29</td></tr>
<tr><td>20</td><td>Christopher Tanev (ALB)</td><td>20</td><td>29</td></tr>
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
<tr><td>1</td><td>Adam Burish (NOR)</td><td>11</td><td>1</td></tr>
<tr><td>2</td><td>Adam Polasek (ALB)</td><td>20</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Jaroslav Janus (NOR)</td><td>8</td><td>0,927</td></tr>
<tr><td>2</td><td>Antti Raanta (RFD)</td><td>11</td><td>0,924</td></tr>
<tr><td>3</td><td>Alex Lyon (WBS)</td><td>18</td><td>0,918</td></tr>
<tr><td>4</td><td>Adin Hill (GAT)</td><td>19</td><td>0,913</td></tr>
<tr><td>5</td><td>Matt O'Connor (LKE)</td><td>8</td><td>0,910</td></tr>
<tr><td>6</td><td>Mackenzie Blackwood (RFD)</td><td>17</td><td>0,899</td></tr>
<tr><td>7</td><td>Anders Lindback (ALB)</td><td>20</td><td>0,898</td></tr>
<tr><td>8</td><td>Igor Bobkov (BNG)</td><td>11</td><td>0,885</td></tr>
<tr><td>9</td><td>Sami Aittokallio (PEO)</td><td>10</td><td>0,879</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Alex Lyon (WBS)</td><td>18</td><td>2,40</td></tr>
<tr><td>2</td><td>Antti Raanta (RFD)</td><td>11</td><td>2,44</td></tr>
<tr><td>3</td><td>Jaroslav Janus (NOR)</td><td>8</td><td>2,48</td></tr>
<tr><td>4</td><td>Matt O'Connor (LKE)</td><td>8</td><td>2,67</td></tr>
<tr><td>5</td><td>Adin Hill (GAT)</td><td>19</td><td>3,03</td></tr>
<tr><td>6</td><td>Mackenzie Blackwood (RFD)</td><td>17</td><td>3,07</td></tr>
<tr><td>7</td><td>Anders Lindback (ALB)</td><td>20</td><td>3,14</td></tr>
<tr><td>8</td><td>Igor Bobkov (BNG)</td><td>11</td><td>3,45</td></tr>
<tr><td>9</td><td>Sami Aittokallio (PEO)</td><td>10</td><td>3,97</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Anders Lindback (ALB)</td><td>20</td><td>1 186</td></tr>
<tr><td>2</td><td>Adin Hill (GAT)</td><td>19</td><td>1 110</td></tr>
<tr><td>3</td><td>Alex Lyon (WBS)</td><td>18</td><td>1 073</td></tr>
<tr><td>4</td><td>Mackenzie Blackwood (RFD)</td><td>17</td><td>880</td></tr>
<tr><td>5</td><td>Igor Bobkov (BNG)</td><td>11</td><td>662</td></tr>
<tr><td>6</td><td>Jaroslav Janus (NOR)</td><td>8</td><td>532</td></tr>
<tr><td>7</td><td>Sami Aittokallio (PEO)</td><td>10</td><td>528</td></tr>
<tr><td>8</td><td>Antti Raanta (RFD)</td><td>11</td><td>517</td></tr>
<tr><td>9</td><td>Matt O'Connor (LKE)</td><td>8</td><td>495</td></tr>
<tr><td>10</td><td>Callum Booth (BRI)</td><td>7</td><td>410</td></tr>
<tr><td>11</td><td>Ilya Samsonov (TRD)</td><td>6</td><td>367</td></tr>
<tr><td>12</td><td>Oscar Dansk (RCH)</td><td>5</td><td>318</td></tr>
<tr><td>13</td><td>Anthony Stolarz (CTW)</td><td>4</td><td>275</td></tr>
<tr><td>14</td><td>Jeff Drouin-Deslauriers (WBS)</td><td>5</td><td>270</td></tr>
<tr><td>15</td><td>Samu Perhonen (OKC)</td><td>5</td><td>254</td></tr>
<tr><td>16</td><td>Laurent Brossoit (JOL)</td><td>5</td><td>252</td></tr>
<tr><td>17</td><td>Eddie Lack (CHI)</td><td>3</td><td>181</td></tr>
<tr><td>18</td><td>Konstantin Barulin (NOR)</td><td>3</td><td>180</td></tr>
<tr><td>19</td><td>Vitek Vanecek (LAV)</td><td>3</td><td>176</td></tr>
<tr><td>20</td><td>Tyler Bunz (OKC)</td><td>3</td><td>175</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Adin Hill (GAT)</td><td>19</td><td>642</td></tr>
<tr><td>2</td><td>Anders Lindback (ALB)</td><td>20</td><td>608</td></tr>
<tr><td>3</td><td>Alex Lyon (WBS)</td><td>18</td><td>525</td></tr>
<tr><td>4</td><td>Mackenzie Blackwood (RFD)</td><td>17</td><td>445</td></tr>
<tr><td>5</td><td>Igor Bobkov (BNG)</td><td>11</td><td>330</td></tr>
<tr><td>6</td><td>Jaroslav Janus (NOR)</td><td>8</td><td>303</td></tr>
<tr><td>7</td><td>Sami Aittokallio (PEO)</td><td>10</td><td>290</td></tr>
<tr><td>8</td><td>Antti Raanta (RFD)</td><td>11</td><td>277</td></tr>
<tr><td>9</td><td>Callum Booth (BRI)</td><td>7</td><td>249</td></tr>
<tr><td>10</td><td>Matt O'Connor (LKE)</td><td>8</td><td>245</td></tr>
<tr><td>11</td><td>Ilya Samsonov (TRD)</td><td>6</td><td>187</td></tr>
<tr><td>12</td><td>Oscar Dansk (RCH)</td><td>5</td><td>161</td></tr>
<tr><td>13</td><td>Anthony Stolarz (CTW)</td><td>4</td><td>145</td></tr>
<tr><td>14</td><td>Laurent Brossoit (JOL)</td><td>5</td><td>135</td></tr>
<tr><td>15</td><td>Jeff Drouin-Deslauriers (WBS)</td><td>5</td><td>130</td></tr>
<tr><td>16</td><td>Samu Perhonen (OKC)</td><td>5</td><td>129</td></tr>
<tr><td>17</td><td>Konstantin Barulin (NOR)</td><td>3</td><td>112</td></tr>
<tr><td>18</td><td>Eddie Lack (CHI)</td><td>3</td><td>92</td></tr>
<tr><td>19</td><td>Vitek Vanecek (LAV)</td><td>3</td><td>88</td></tr>
<tr><td>20</td><td>Tyler Bunz (OKC)</td><td>3</td><td>87</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Alex Lyon (WBS)</td><td>18</td><td>13</td></tr>
<tr><td>2</td><td>Adin Hill (GAT)</td><td>19</td><td>11</td></tr>
<tr><td>3</td><td>Anders Lindback (ALB)</td><td>20</td><td>11</td></tr>
<tr><td>4</td><td>Mackenzie Blackwood (RFD)</td><td>17</td><td>9</td></tr>
<tr><td>5</td><td>Jaroslav Janus (NOR)</td><td>8</td><td>5</td></tr>
<tr><td>6</td><td>Matt O'Connor (LKE)</td><td>8</td><td>5</td></tr>
<tr><td>7</td><td>Sami Aittokallio (PEO)</td><td>10</td><td>4</td></tr>
<tr><td>8</td><td>Igor Bobkov (BNG)</td><td>11</td><td>4</td></tr>
<tr><td>9</td><td>Antti Raanta (RFD)</td><td>11</td><td>4</td></tr>
<tr><td>10</td><td>Jeff Drouin-Deslauriers (WBS)</td><td>5</td><td>3</td></tr>
<tr><td>11</td><td>Ilya Samsonov (TRD)</td><td>6</td><td>3</td></tr>
<tr><td>12</td><td>Callum Booth (BRI)</td><td>7</td><td>3</td></tr>
<tr><td>13</td><td>Samu Perhonen (OKC)</td><td>5</td><td>2</td></tr>
<tr><td>14</td><td>Joe Cannata (CHI)</td><td>2</td><td>1</td></tr>
<tr><td>15</td><td>Peter Delmas (LKE)</td><td>2</td><td>1</td></tr>
<tr><td>16</td><td>Denis Godla (BNG)</td><td>2</td><td>1</td></tr>
<tr><td>17</td><td>Tyler Bunz (OKC)</td><td>3</td><td>1</td></tr>
<tr><td>18</td><td>Leland Irving (PEO)</td><td>3</td><td>1</td></tr>
<tr><td>19</td><td>Konstantin Barulin (NOR)</td><td>3</td><td>1</td></tr>
<tr><td>20</td><td>Anthony Stolarz (CTW)</td><td>4</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Adin Hill (GAT)</td><td>19</td><td>7</td></tr>
<tr><td>2</td><td>Anders Lindback (ALB)</td><td>20</td><td>7</td></tr>
<tr><td>3</td><td>Igor Bobkov (BNG)</td><td>11</td><td>5</td></tr>
<tr><td>4</td><td>Mackenzie Blackwood (RFD)</td><td>17</td><td>5</td></tr>
<tr><td>5</td><td>Sami Aittokallio (PEO)</td><td>10</td><td>4</td></tr>
<tr><td>6</td><td>Alex Lyon (WBS)</td><td>18</td><td>4</td></tr>
<tr><td>7</td><td>Laurent Brossoit (JOL)</td><td>5</td><td>3</td></tr>
<tr><td>8</td><td>Jaroslav Janus (NOR)</td><td>8</td><td>3</td></tr>
<tr><td>9</td><td>Antti Raanta (RFD)</td><td>11</td><td>3</td></tr>
<tr><td>10</td><td>Tyler Bunz (OKC)</td><td>3</td><td>2</td></tr>
<tr><td>11</td><td>Eddie Lack (CHI)</td><td>3</td><td>2</td></tr>
<tr><td>12</td><td>Konstantin Barulin (NOR)</td><td>3</td><td>2</td></tr>
<tr><td>13</td><td>Vitek Vanecek (LAV)</td><td>3</td><td>2</td></tr>
<tr><td>14</td><td>Oscar Dansk (RCH)</td><td>5</td><td>2</td></tr>
<tr><td>15</td><td>Samu Perhonen (OKC)</td><td>5</td><td>2</td></tr>
<tr><td>16</td><td>Ilya Samsonov (TRD)</td><td>6</td><td>2</td></tr>
<tr><td>17</td><td>Matt O'Connor (LKE)</td><td>8</td><td>2</td></tr>
<tr><td>18</td><td>Antoine Bibeau (TRD)</td><td>1</td><td>1</td></tr>
<tr><td>19</td><td>Felix Sandström (CTW)</td><td>1</td><td>1</td></tr>
<tr><td>20</td><td>Shamil Shmakov (BRI)</td><td>1</td><td>1</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
