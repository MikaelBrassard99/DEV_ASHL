<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Individual Leaders</title>
<script src="ASHL9.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - ASHL9-STHS.db - ASHL9-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL9.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL9-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL9-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<b>Minimum Games Played: 42</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (STL)</td><td>79</td><td>44</td></tr>
<tr><td>2</td><td>Jeff Skinner (LOS)</td><td>82</td><td>43</td></tr>
<tr><td>3</td><td>Matt Duchene (PIT)</td><td>81</td><td>42</td></tr>
<tr><td>4</td><td>Brayden Point (NYR)</td><td>81</td><td>40</td></tr>
<tr><td>5</td><td>Sidney Crosby (MTL)</td><td>67</td><td>39</td></tr>
<tr><td>6</td><td>Sean Couturier (DAL)</td><td>82</td><td>39</td></tr>
<tr><td>7</td><td>Jack Eichel (NJD)</td><td>79</td><td>38</td></tr>
<tr><td>8</td><td>Auston Matthews (WPG)</td><td>74</td><td>37</td></tr>
<tr><td>9</td><td>Anze Kopitar (LOS)</td><td>82</td><td>37</td></tr>
<tr><td>10</td><td>Connor McDavid (VAN)</td><td>82</td><td>37</td></tr>
<tr><td>11</td><td>Claude Giroux (PHI)</td><td>82</td><td>36</td></tr>
<tr><td>12</td><td>Patrick Kane (VEG)</td><td>82</td><td>36</td></tr>
<tr><td>13</td><td>Aleksander Barkov (NYR)</td><td>82</td><td>36</td></tr>
<tr><td>14</td><td>Nikita Kucherov (FLA)</td><td>80</td><td>35</td></tr>
<tr><td>15</td><td>David Pastrnak (TBL)</td><td>82</td><td>35</td></tr>
<tr><td>16</td><td>Taylor Hall (EDM)</td><td>82</td><td>34</td></tr>
<tr><td>17</td><td>Jordan Eberle (BUF)</td><td>83</td><td>34</td></tr>
<tr><td>18</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>33</td></tr>
<tr><td>19</td><td>Ryan Nugent-Hopkins (PHI)</td><td>71</td><td>32</td></tr>
<tr><td>20</td><td>Jonathan Toews (CHI)</td><td>81</td><td>32</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Kristopher Letang (VEG)</td><td>82</td><td>69</td></tr>
<tr><td>2</td><td>Drew Doughty (LOS)</td><td>82</td><td>63</td></tr>
<tr><td>3</td><td>Brent Seabrook (CLB)</td><td>82</td><td>60</td></tr>
<tr><td>4</td><td>Nathan MacKinnon (STL)</td><td>79</td><td>57</td></tr>
<tr><td>5</td><td>Erik Johnson (PIT)</td><td>79</td><td>54</td></tr>
<tr><td>6</td><td>Nick Leddy (DET)</td><td>80</td><td>54</td></tr>
<tr><td>7</td><td>Shea Weber (DAL)</td><td>82</td><td>54</td></tr>
<tr><td>8</td><td>John Tavares (ARZ)</td><td>82</td><td>51</td></tr>
<tr><td>9</td><td>Keith Yandle (SJS)</td><td>82</td><td>51</td></tr>
<tr><td>10</td><td>Kevin Shattenkirk (BUF)</td><td>82</td><td>51</td></tr>
<tr><td>11</td><td>Cam Fowler (ANH)</td><td>80</td><td>50</td></tr>
<tr><td>12</td><td>Matt Duchene (PIT)</td><td>81</td><td>50</td></tr>
<tr><td>13</td><td>Morgan Rielly (TOR)</td><td>82</td><td>50</td></tr>
<tr><td>14</td><td>Erik Karlsson (CHI)</td><td>78</td><td>49</td></tr>
<tr><td>15</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>49</td></tr>
<tr><td>16</td><td>Jamie McBain (OTT)</td><td>82</td><td>49</td></tr>
<tr><td>17</td><td>John Carlson (BOS)</td><td>82</td><td>49</td></tr>
<tr><td>18</td><td>Jake Guentzel (QUE)</td><td>76</td><td>48</td></tr>
<tr><td>19</td><td>Seth Jones (SJS)</td><td>78</td><td>48</td></tr>
<tr><td>20</td><td>Anze Kopitar (LOS)</td><td>82</td><td>48</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Jeff Skinner (LOS)</td><td>82</td><td>400</td></tr>
<tr><td>2</td><td>Matt Duchene (PIT)</td><td>81</td><td>392</td></tr>
<tr><td>3</td><td>Nathan MacKinnon (STL)</td><td>79</td><td>388</td></tr>
<tr><td>4</td><td>Anze Kopitar (LOS)</td><td>82</td><td>376</td></tr>
<tr><td>5</td><td>David Pastrnak (TBL)</td><td>82</td><td>366</td></tr>
<tr><td>6</td><td>Steven Stamkos (ARZ)</td><td>79</td><td>352</td></tr>
<tr><td>7</td><td>Jack Eichel (NJD)</td><td>79</td><td>352</td></tr>
<tr><td>8</td><td>Claude Giroux (PHI)</td><td>82</td><td>351</td></tr>
<tr><td>9</td><td>Auston Matthews (WPG)</td><td>74</td><td>337</td></tr>
<tr><td>10</td><td>Alex Ovechkin (ANH)</td><td>85</td><td>331</td></tr>
<tr><td>11</td><td>Tyler Seguin (BUF)</td><td>83</td><td>327</td></tr>
<tr><td>12</td><td>Robby Fabbri (COL)</td><td>82</td><td>326</td></tr>
<tr><td>13</td><td>Jake Guentzel (QUE)</td><td>76</td><td>324</td></tr>
<tr><td>14</td><td>Taylor Hall (EDM)</td><td>82</td><td>318</td></tr>
<tr><td>15</td><td>Connor McDavid (VAN)</td><td>82</td><td>316</td></tr>
<tr><td>16</td><td>Mitch Marner (NSH)</td><td>85</td><td>316</td></tr>
<tr><td>17</td><td>Jordan Eberle (BUF)</td><td>83</td><td>313</td></tr>
<tr><td>18</td><td>Brayden Point (NYR)</td><td>81</td><td>311</td></tr>
<tr><td>19</td><td>Sean Couturier (DAL)</td><td>82</td><td>305</td></tr>
<tr><td>20</td><td>Alexander Burmistrov (PIT)</td><td>82</td><td>303</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Alexander Urbom (MTL)</td><td>86</td><td>17,54%</td></tr>
<tr><td>2</td><td>Brady Skjei (STL)</td><td>77</td><td>16,82%</td></tr>
<tr><td>3</td><td>Sidney Crosby (MTL)</td><td>67</td><td>15,98%</td></tr>
<tr><td>4</td><td>Barclay Goodrow (CLB)</td><td>82</td><td>15,96%</td></tr>
<tr><td>5</td><td>Brent Burns (WPG)</td><td>76</td><td>15,91%</td></tr>
<tr><td>6</td><td>Darren Dietz (ANH)</td><td>76</td><td>15,46%</td></tr>
<tr><td>7</td><td>Mike Amadio (ARZ)</td><td>46</td><td>15,25%</td></tr>
<tr><td>8</td><td>Luke Schenn (TOR)</td><td>74</td><td>15,22%</td></tr>
<tr><td>9</td><td>Dan DeKeyser (QUE)</td><td>82</td><td>14,75%</td></tr>
<tr><td>10</td><td>Colin White (VAN)</td><td>63</td><td>14,58%</td></tr>
<tr><td>11</td><td>Jakub Vrana (NYR)</td><td>82</td><td>14,53%</td></tr>
<tr><td>12</td><td>Anthony Camara (CAR)</td><td>79</td><td>14,13%</td></tr>
<tr><td>13</td><td>Jordan Martinook (LOS)</td><td>69</td><td>13,92%</td></tr>
<tr><td>14</td><td>Marko Dano (BOS)</td><td>82</td><td>13,89%</td></tr>
<tr><td>15</td><td>Elias Lindholm (DET)</td><td>84</td><td>13,81%</td></tr>
<tr><td>16</td><td>Joe Veleno (VAN)</td><td>68</td><td>13,79%</td></tr>
<tr><td>17</td><td>Jamie McBain (OTT)</td><td>82</td><td>13,79%</td></tr>
<tr><td>18</td><td>Mika Zibanejad (DET)</td><td>83</td><td>13,79%</td></tr>
<tr><td>19</td><td>Vince Dunn (NYI)</td><td>63</td><td>13,75%</td></tr>
<tr><td>20</td><td>Brock Boeser (ANH)</td><td>82</td><td>13,68%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (STL)</td><td>79</td><td>44-57-101</td></tr>
<tr><td>2</td><td>Matt Duchene (PIT)</td><td>81</td><td>42-50-92</td></tr>
<tr><td>3</td><td>Anze Kopitar (LOS)</td><td>82</td><td>37-48-85</td></tr>
<tr><td>4</td><td>Jack Eichel (NJD)</td><td>79</td><td>38-44-82</td></tr>
<tr><td>5</td><td>Claude Giroux (PHI)</td><td>82</td><td>36-44-80</td></tr>
<tr><td>6</td><td>Brayden Point (NYR)</td><td>81</td><td>40-38-78</td></tr>
<tr><td>7</td><td>Sean Couturier (DAL)</td><td>82</td><td>39-39-78</td></tr>
<tr><td>8</td><td>Jake Guentzel (QUE)</td><td>76</td><td>30-48-78</td></tr>
<tr><td>9</td><td>Auston Matthews (WPG)</td><td>74</td><td>37-40-77</td></tr>
<tr><td>10</td><td>Patrick Kane (VEG)</td><td>82</td><td>36-41-77</td></tr>
<tr><td>11</td><td>John Tavares (ARZ)</td><td>82</td><td>25-51-76</td></tr>
<tr><td>12</td><td>Dylan Larkin (FLA)</td><td>82</td><td>27-47-74</td></tr>
<tr><td>13</td><td>Connor McDavid (VAN)</td><td>82</td><td>37-35-72</td></tr>
<tr><td>14</td><td>Ryan Getzlaf (QUE)</td><td>78</td><td>26-46-72</td></tr>
<tr><td>15</td><td>Sidney Crosby (MTL)</td><td>67</td><td>39-32-71</td></tr>
<tr><td>16</td><td>Tyler Ennis (SJS)</td><td>82</td><td>31-40-71</td></tr>
<tr><td>17</td><td>Jordan Staal (LOS)</td><td>82</td><td>30-41-71</td></tr>
<tr><td>18</td><td>Tyler Seguin (BUF)</td><td>83</td><td>25-46-71</td></tr>
<tr><td>19</td><td>Aleksander Barkov (NYR)</td><td>82</td><td>36-34-70</td></tr>
<tr><td>20</td><td>Steven Stamkos (ARZ)</td><td>79</td><td>31-39-70</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Jeff Skinner (LOS)</td><td>82</td><td>43-47-90</td></tr>
<tr><td>2</td><td>Claude Giroux (PHI)</td><td>82</td><td>36-44-80</td></tr>
<tr><td>3</td><td>David Pastrnak (TBL)</td><td>82</td><td>35-43-78</td></tr>
<tr><td>4</td><td>Jake Guentzel (QUE)</td><td>76</td><td>30-48-78</td></tr>
<tr><td>5</td><td>Dylan Larkin (FLA)</td><td>82</td><td>27-47-74</td></tr>
<tr><td>6</td><td>Tyler Ennis (SJS)</td><td>82</td><td>31-40-71</td></tr>
<tr><td>7</td><td>Taylor Hall (EDM)</td><td>82</td><td>34-35-69</td></tr>
<tr><td>8</td><td>Logan Couture (ARZ)</td><td>82</td><td>31-38-69</td></tr>
<tr><td>9</td><td>Bobby Ryan (PIT)</td><td>82</td><td>32-35-67</td></tr>
<tr><td>10</td><td>Viktor Arvidsson (NYR)</td><td>82</td><td>31-36-67</td></tr>
<tr><td>11</td><td>Alex Ovechkin (ANH)</td><td>85</td><td>31-36-67</td></tr>
<tr><td>12</td><td>Evgeny Grachev (COL)</td><td>73</td><td>21-46-67</td></tr>
<tr><td>13</td><td>Teuvo Teravainen (CGY)</td><td>82</td><td>20-47-67</td></tr>
<tr><td>14</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>33-33-66</td></tr>
<tr><td>15</td><td>Ryan Nugent-Hopkins (PHI)</td><td>71</td><td>32-34-66</td></tr>
<tr><td>16</td><td>Sam Gagner (EDM)</td><td>79</td><td>20-45-65</td></tr>
<tr><td>17</td><td>Robby Fabbri (COL)</td><td>82</td><td>30-34-64</td></tr>
<tr><td>18</td><td>Jaden Schwartz (DET)</td><td>82</td><td>29-35-64</td></tr>
<tr><td>19</td><td>Kevin Fiala (LOS)</td><td>82</td><td>26-38-64</td></tr>
<tr><td>20</td><td>Ryan O'Reilly (BUF)</td><td>79</td><td>29-34-63</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (STL)</td><td>79</td><td>44-57-101</td></tr>
<tr><td>2</td><td>Matt Duchene (PIT)</td><td>81</td><td>42-50-92</td></tr>
<tr><td>3</td><td>Claude Giroux (PHI)</td><td>82</td><td>36-44-80</td></tr>
<tr><td>4</td><td>Nikita Kucherov (FLA)</td><td>80</td><td>35-45-80</td></tr>
<tr><td>5</td><td>David Pastrnak (TBL)</td><td>82</td><td>35-43-78</td></tr>
<tr><td>6</td><td>Patrick Kane (VEG)</td><td>82</td><td>36-41-77</td></tr>
<tr><td>7</td><td>Jordan Eberle (BUF)</td><td>83</td><td>34-37-71</td></tr>
<tr><td>8</td><td>Tyler Seguin (BUF)</td><td>83</td><td>25-46-71</td></tr>
<tr><td>9</td><td>Steven Stamkos (ARZ)</td><td>79</td><td>31-39-70</td></tr>
<tr><td>10</td><td>Logan Couture (ARZ)</td><td>82</td><td>31-38-69</td></tr>
<tr><td>11</td><td>Bobby Ryan (PIT)</td><td>82</td><td>32-35-67</td></tr>
<tr><td>12</td><td>Viktor Arvidsson (NYR)</td><td>82</td><td>31-36-67</td></tr>
<tr><td>13</td><td>Alex Ovechkin (ANH)</td><td>85</td><td>31-36-67</td></tr>
<tr><td>14</td><td>Brent Burns (WPG)</td><td>76</td><td>28-39-67</td></tr>
<tr><td>15</td><td>Teuvo Teravainen (CGY)</td><td>82</td><td>20-47-67</td></tr>
<tr><td>16</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>33-33-66</td></tr>
<tr><td>17</td><td>Evgeni Malkin (CGY)</td><td>82</td><td>27-38-65</td></tr>
<tr><td>18</td><td>Sam Gagner (EDM)</td><td>79</td><td>20-45-65</td></tr>
<tr><td>19</td><td>Jaden Schwartz (DET)</td><td>82</td><td>29-35-64</td></tr>
<tr><td>20</td><td>Kevin Fiala (LOS)</td><td>82</td><td>26-38-64</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Kristopher Letang (VEG)</td><td>82</td><td>21-69-90</td></tr>
<tr><td>2</td><td>Drew Doughty (LOS)</td><td>82</td><td>19-63-82</td></tr>
<tr><td>3</td><td>Brent Seabrook (CLB)</td><td>82</td><td>14-60-74</td></tr>
<tr><td>4</td><td>Jamie McBain (OTT)</td><td>82</td><td>24-49-73</td></tr>
<tr><td>5</td><td>Cam Fowler (ANH)</td><td>80</td><td>21-50-71</td></tr>
<tr><td>6</td><td>Erik Johnson (PIT)</td><td>79</td><td>14-54-68</td></tr>
<tr><td>7</td><td>Brent Burns (WPG)</td><td>76</td><td>28-39-67</td></tr>
<tr><td>8</td><td>Kevin Shattenkirk (BUF)</td><td>82</td><td>16-51-67</td></tr>
<tr><td>9</td><td>Shea Weber (DAL)</td><td>82</td><td>13-54-67</td></tr>
<tr><td>10</td><td>Morgan Rielly (TOR)</td><td>82</td><td>16-50-66</td></tr>
<tr><td>11</td><td>Keith Yandle (SJS)</td><td>82</td><td>15-51-66</td></tr>
<tr><td>12</td><td>John Carlson (BOS)</td><td>82</td><td>16-49-65</td></tr>
<tr><td>13</td><td>Nick Leddy (DET)</td><td>80</td><td>11-54-65</td></tr>
<tr><td>14</td><td>Jack Johnson (SJS)</td><td>82</td><td>17-47-64</td></tr>
<tr><td>15</td><td>Brendan Smith (QUE)</td><td>82</td><td>17-46-63</td></tr>
<tr><td>16</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>13-49-62</td></tr>
<tr><td>17</td><td>Brady Skjei (STL)</td><td>77</td><td>18-43-61</td></tr>
<tr><td>18</td><td>Michael Del Zotto (CGY)</td><td>83</td><td>18-43-61</td></tr>
<tr><td>19</td><td>Tyler Myers (ANH)</td><td>84</td><td>16-45-61</td></tr>
<tr><td>20</td><td>Erik Karlsson (CHI)</td><td>78</td><td>12-49-61</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Nathan MacKinnon (STL)</td><td>79</td><td>1,22</td></tr>
<tr><td>2</td><td>Nikita Kucherov (FLA)</td><td>80</td><td>1,13</td></tr>
<tr><td>3</td><td>Jeff Skinner (LOS)</td><td>82</td><td>1,13</td></tr>
<tr><td>4</td><td>Patrice Bergeron (VEG)</td><td>61</td><td>1,09</td></tr>
<tr><td>5</td><td>Matt Duchene (PIT)</td><td>81</td><td>1,09</td></tr>
<tr><td>6</td><td>Sidney Crosby (MTL)</td><td>67</td><td>1,08</td></tr>
<tr><td>7</td><td>Dylan Larkin (FLA)</td><td>82</td><td>1,05</td></tr>
<tr><td>8</td><td>Brayden Point (NYR)</td><td>81</td><td>1,04</td></tr>
<tr><td>9</td><td>Jake Guentzel (QUE)</td><td>76</td><td>1,04</td></tr>
<tr><td>10</td><td>Anze Kopitar (LOS)</td><td>82</td><td>1,02</td></tr>
<tr><td>11</td><td>Auston Matthews (WPG)</td><td>74</td><td>1,01</td></tr>
<tr><td>12</td><td>Teuvo Teravainen (CGY)</td><td>82</td><td>1,00</td></tr>
<tr><td>13</td><td>Viktor Arvidsson (NYR)</td><td>82</td><td>0,97</td></tr>
<tr><td>14</td><td>John Tavares (ARZ)</td><td>82</td><td>0,96</td></tr>
<tr><td>15</td><td>Tyler Ennis (SJS)</td><td>82</td><td>0,96</td></tr>
<tr><td>16</td><td>Patrick Kane (VEG)</td><td>82</td><td>0,96</td></tr>
<tr><td>17</td><td>Claude Giroux (PHI)</td><td>82</td><td>0,95</td></tr>
<tr><td>18</td><td>Jack Eichel (NJD)</td><td>79</td><td>0,95</td></tr>
<tr><td>19</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>0,94</td></tr>
<tr><td>20</td><td>Filip Forsberg (MTL)</td><td>67</td><td>0,94</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Jonathan Toews (CHI)</td><td>81</td><td>57,14%</td></tr>
<tr><td>2</td><td>Stephen Weiss (PIT)</td><td>80</td><td>56,98%</td></tr>
<tr><td>3</td><td>Sidney Crosby (MTL)</td><td>67</td><td>56,85%</td></tr>
<tr><td>4</td><td>Ryan Kesler (SJS)</td><td>82</td><td>56,25%</td></tr>
<tr><td>5</td><td>Eric Staal (MTL)</td><td>83</td><td>55,71%</td></tr>
<tr><td>6</td><td>Paul Stastny (PIT)</td><td>82</td><td>55,40%</td></tr>
<tr><td>7</td><td>Patrice Bergeron (VEG)</td><td>61</td><td>55,19%</td></tr>
<tr><td>8</td><td>Luke Adam (NYI)</td><td>58</td><td>55,10%</td></tr>
<tr><td>9</td><td>Travis Zajac (CAR)</td><td>82</td><td>54,81%</td></tr>
<tr><td>10</td><td>Mikko Koivu (DAL)</td><td>79</td><td>54,78%</td></tr>
<tr><td>11</td><td>Nicklas Backstrom (TOR)</td><td>82</td><td>54,73%</td></tr>
<tr><td>12</td><td>Claude Giroux (PHI)</td><td>82</td><td>54,55%</td></tr>
<tr><td>13</td><td>Jason Spezza (DET)</td><td>86</td><td>54,49%</td></tr>
<tr><td>14</td><td>Joe Pavelski (CGY)</td><td>82</td><td>54,33%</td></tr>
<tr><td>15</td><td>Anze Kopitar (LOS)</td><td>82</td><td>54,22%</td></tr>
<tr><td>16</td><td>Martin Hanzal (CAR)</td><td>82</td><td>54,16%</td></tr>
<tr><td>17</td><td>Ryan Getzlaf (QUE)</td><td>78</td><td>54,15%</td></tr>
<tr><td>18</td><td>John Tavares (ARZ)</td><td>82</td><td>54,10%</td></tr>
<tr><td>19</td><td>Brian Boyle (COL)</td><td>82</td><td>53,97%</td></tr>
<tr><td>20</td><td>Brock Nelson (FLA)</td><td>82</td><td>53,93%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Jeff Skinner (LOS)</td><td>82</td><td>46</td></tr>
<tr><td>2</td><td>Anze Kopitar (LOS)</td><td>82</td><td>38</td></tr>
<tr><td>3</td><td>Tyler Cuma (LOS)</td><td>82</td><td>34</td></tr>
<tr><td>4</td><td>Bobby Ryan (PIT)</td><td>82</td><td>30</td></tr>
<tr><td>5</td><td>Brady Skjei (STL)</td><td>77</td><td>26</td></tr>
<tr><td>6</td><td>Matt Duchene (PIT)</td><td>81</td><td>26</td></tr>
<tr><td>7</td><td>Scott Harrington (FLA)</td><td>82</td><td>24</td></tr>
<tr><td>8</td><td>Derek Forbort (LOS)</td><td>69</td><td>23</td></tr>
<tr><td>9</td><td>Erik Johnson (PIT)</td><td>79</td><td>23</td></tr>
<tr><td>10</td><td>Esa Lindell (TBL)</td><td>82</td><td>22</td></tr>
<tr><td>11</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>22</td></tr>
<tr><td>12</td><td>Charlie Coyle (TBL)</td><td>83</td><td>22</td></tr>
<tr><td>13</td><td>Gustav Nyquist (OTT)</td><td>84</td><td>22</td></tr>
<tr><td>14</td><td>Bryan Rust (ANH)</td><td>82</td><td>21</td></tr>
<tr><td>15</td><td>Brent Burns (WPG)</td><td>76</td><td>20</td></tr>
<tr><td>16</td><td>Nikita Kucherov (FLA)</td><td>80</td><td>20</td></tr>
<tr><td>17</td><td>Conor Sheary (VEG)</td><td>81</td><td>20</td></tr>
<tr><td>18</td><td>Brandon Saad (DAL)</td><td>83</td><td>20</td></tr>
<tr><td>19</td><td>Radek Faksa (SJS)</td><td>72</td><td>19</td></tr>
<tr><td>20</td><td>Markus Nutivaara (ANH)</td><td>74</td><td>19</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Charles McAvoy (BOS)</td><td>82</td><td>138</td></tr>
<tr><td>2</td><td>Dylan McIlrath (NYR)</td><td>82</td><td>131</td></tr>
<tr><td>3</td><td>Tyler Myers (ANH)</td><td>84</td><td>123</td></tr>
<tr><td>4</td><td>Griffin Reinhart (NYR)</td><td>82</td><td>120</td></tr>
<tr><td>5</td><td>David Musil (SEA)</td><td>77</td><td>118</td></tr>
<tr><td>6</td><td>Mike Weber (COL)</td><td>82</td><td>118</td></tr>
<tr><td>7</td><td>Luke Schenn (TOR)</td><td>74</td><td>114</td></tr>
<tr><td>8</td><td>Alex Petrovic (DAL)</td><td>82</td><td>114</td></tr>
<tr><td>9</td><td>Mark Pysyk (LOS)</td><td>82</td><td>114</td></tr>
<tr><td>10</td><td>Zach Bogosian (ARZ)</td><td>81</td><td>110</td></tr>
<tr><td>11</td><td>Colten Teubert (EDM)</td><td>82</td><td>109</td></tr>
<tr><td>12</td><td>Duncan Siemens (DAL)</td><td>82</td><td>106</td></tr>
<tr><td>13</td><td>Karl Alzner (OTT)</td><td>82</td><td>102</td></tr>
<tr><td>14</td><td>Ryan Getzlaf (QUE)</td><td>78</td><td>101</td></tr>
<tr><td>15</td><td>Erik Johnson (PIT)</td><td>79</td><td>101</td></tr>
<tr><td>16</td><td>Brendan Smith (QUE)</td><td>82</td><td>101</td></tr>
<tr><td>17</td><td>Daniel Girardi (EDM)</td><td>82</td><td>100</td></tr>
<tr><td>18</td><td>Marc Staal (TBL)</td><td>82</td><td>98</td></tr>
<tr><td>19</td><td>Evander Kane (BUF)</td><td>63</td><td>97</td></tr>
<tr><td>20</td><td>Dmitri Kulikov (WPG)</td><td>77</td><td>96</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Alexander Urbom (MTL)</td><td>86</td><td>166</td></tr>
<tr><td>2</td><td>Shea Weber (DAL)</td><td>82</td><td>165</td></tr>
<tr><td>3</td><td>Erik Gudbranson (BUF)</td><td>85</td><td>158</td></tr>
<tr><td>4</td><td>Travis Hamonic (CGY)</td><td>85</td><td>149</td></tr>
<tr><td>5</td><td>Ryan Suter (MIN)</td><td>82</td><td>146</td></tr>
<tr><td>6</td><td>Duncan Siemens (DAL)</td><td>82</td><td>145</td></tr>
<tr><td>7</td><td>John Carlson (BOS)</td><td>82</td><td>142</td></tr>
<tr><td>8</td><td>Alex Petrovic (DAL)</td><td>82</td><td>140</td></tr>
<tr><td>9</td><td>Marc-Edouard Vlasic (STL)</td><td>80</td><td>139</td></tr>
<tr><td>10</td><td>Tobias Enstrom (TOR)</td><td>82</td><td>138</td></tr>
<tr><td>11</td><td>Erik Johnson (PIT)</td><td>79</td><td>135</td></tr>
<tr><td>12</td><td>Marco Scandella (BOS)</td><td>82</td><td>135</td></tr>
<tr><td>13</td><td>Dylan McIlrath (NYR)</td><td>82</td><td>135</td></tr>
<tr><td>14</td><td>Jared Cowen (WSH)</td><td>79</td><td>133</td></tr>
<tr><td>15</td><td>Zach Bogosian (ARZ)</td><td>81</td><td>133</td></tr>
<tr><td>16</td><td>Brendan Smith (QUE)</td><td>82</td><td>132</td></tr>
<tr><td>17</td><td>Ryan McDonagh (NYR)</td><td>72</td><td>130</td></tr>
<tr><td>18</td><td>Drew Doughty (LOS)</td><td>82</td><td>130</td></tr>
<tr><td>19</td><td>Cody Franson (CHI)</td><td>79</td><td>129</td></tr>
<tr><td>20</td><td>Luca Sbisa (WPG)</td><td>82</td><td>129</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Esa Lindell (TBL)</td><td>82</td><td>10-46-56</td></tr>
<tr><td>2</td><td>Morgan Klimchuk (VEG)</td><td>82</td><td>25-29-54</td></tr>
<tr><td>3</td><td>Chris Bigras (NYI)</td><td>82</td><td>9-39-48</td></tr>
<tr><td>4</td><td>Timo Meier (SJS)</td><td>81</td><td>25-22-47</td></tr>
<tr><td>5</td><td>Ville Pokka (TOR)</td><td>82</td><td>9-37-46</td></tr>
<tr><td>6</td><td>Dylan Strome (NYI)</td><td>79</td><td>20-23-43</td></tr>
<tr><td>7</td><td>Radek Faksa (SJS)</td><td>72</td><td>15-24-39</td></tr>
<tr><td>8</td><td>Neal Pionk (MIN)</td><td>80</td><td>6-33-39</td></tr>
<tr><td>9</td><td>Noah Dobson (SJS)</td><td>78</td><td>12-26-38</td></tr>
<tr><td>10</td><td>Samuel Girard (TOR)</td><td>77</td><td>9-28-37</td></tr>
<tr><td>11</td><td>Jack Hughes (DET)</td><td>67</td><td>17-19-36</td></tr>
<tr><td>12</td><td>Jack Roslovic (CHI)</td><td>82</td><td>19-15-34</td></tr>
<tr><td>13</td><td>Vince Dunn (NYI)</td><td>63</td><td>11-23-34</td></tr>
<tr><td>14</td><td>Miro Heiskanen (ANH)</td><td>78</td><td>8-26-34</td></tr>
<tr><td>15</td><td>Connor Carrick (BUF)</td><td>81</td><td>6-28-34</td></tr>
<tr><td>16</td><td>Jared McCann (NJD)</td><td>80</td><td>13-20-33</td></tr>
<tr><td>17</td><td>Theodor Blueger (STL)</td><td>82</td><td>12-20-32</td></tr>
<tr><td>18</td><td>Jakub Vrana (NYR)</td><td>82</td><td>17-13-30</td></tr>
<tr><td>19</td><td>Charles Hudon (VEG)</td><td>72</td><td>15-14-29</td></tr>
<tr><td>20</td><td>Colin White (VAN)</td><td>63</td><td>14-13-27</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Adam Erne (VEG)</td><td>83</td><td>287</td></tr>
<tr><td>2</td><td>Ryan Callahan (EDM)</td><td>82</td><td>249</td></tr>
<tr><td>3</td><td>Milan Lucic (CAR)</td><td>82</td><td>245</td></tr>
<tr><td>4</td><td>Pierre-Luc Dubois (CGY)</td><td>82</td><td>243</td></tr>
<tr><td>5</td><td>Boone Jenner (TBL)</td><td>83</td><td>237</td></tr>
<tr><td>6</td><td>Alex Ovechkin (ANH)</td><td>85</td><td>223</td></tr>
<tr><td>7</td><td>Gabriel Landeskog (WPG)</td><td>80</td><td>220</td></tr>
<tr><td>8</td><td>Vyacheslav Voynov (DET)</td><td>82</td><td>220</td></tr>
<tr><td>9</td><td>Tyler Myers (ANH)</td><td>84</td><td>220</td></tr>
<tr><td>10</td><td>Travis Hamonic (CGY)</td><td>85</td><td>216</td></tr>
<tr><td>11</td><td>Ryan Getzlaf (QUE)</td><td>78</td><td>207</td></tr>
<tr><td>12</td><td>Drew Doughty (LOS)</td><td>82</td><td>205</td></tr>
<tr><td>13</td><td>Émile Poirier (ANH)</td><td>81</td><td>199</td></tr>
<tr><td>14</td><td>Jacob Trouba (NJD)</td><td>73</td><td>197</td></tr>
<tr><td>15</td><td>Mark Pysyk (LOS)</td><td>82</td><td>194</td></tr>
<tr><td>16</td><td>Adrian Kempe (CGY)</td><td>82</td><td>192</td></tr>
<tr><td>17</td><td>Michael Dal Colle (WSH)</td><td>82</td><td>192</td></tr>
<tr><td>18</td><td>Jamie Oleksiak (STL)</td><td>77</td><td>191</td></tr>
<tr><td>19</td><td>Timo Meier (SJS)</td><td>81</td><td>191</td></tr>
<tr><td>20</td><td>Brayden McNabb (SEA)</td><td>74</td><td>187</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Aleksander Barkov (NYR)</td><td>82</td><td>15</td></tr>
<tr><td>2</td><td>Cam Fowler (ANH)</td><td>80</td><td>14</td></tr>
<tr><td>3</td><td>Dmitri Kulikov (WPG)</td><td>77</td><td>12</td></tr>
<tr><td>4</td><td>Brady Skjei (STL)</td><td>77</td><td>12</td></tr>
<tr><td>5</td><td>Zach Bogosian (ARZ)</td><td>81</td><td>12</td></tr>
<tr><td>6</td><td>Timo Meier (SJS)</td><td>81</td><td>12</td></tr>
<tr><td>7</td><td>Tyler Myers (ANH)</td><td>84</td><td>12</td></tr>
<tr><td>8</td><td>Jeff Skinner (LOS)</td><td>82</td><td>11</td></tr>
<tr><td>9</td><td>John Carlson (BOS)</td><td>82</td><td>11</td></tr>
<tr><td>10</td><td>Dmitri Orlov (NSH)</td><td>82</td><td>11</td></tr>
<tr><td>11</td><td>Michael Del Zotto (CGY)</td><td>83</td><td>11</td></tr>
<tr><td>12</td><td>Nathan MacKinnon (STL)</td><td>79</td><td>10</td></tr>
<tr><td>13</td><td>Damon Severson (CGY)</td><td>79</td><td>10</td></tr>
<tr><td>14</td><td>Jamie McBain (OTT)</td><td>82</td><td>10</td></tr>
<tr><td>15</td><td>Jordan Staal (LOS)</td><td>82</td><td>10</td></tr>
<tr><td>16</td><td>Kevin Shattenkirk (BUF)</td><td>82</td><td>10</td></tr>
<tr><td>17</td><td>Paul Stastny (PIT)</td><td>82</td><td>10</td></tr>
<tr><td>18</td><td>Aaron Ekblad (FLA)</td><td>82</td><td>10</td></tr>
<tr><td>19</td><td>Mark Scheifele (STL)</td><td>82</td><td>10</td></tr>
<tr><td>20</td><td>Morgan Rielly (TOR)</td><td>82</td><td>10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Jordan Eberle (BUF)</td><td>83</td><td>5</td></tr>
<tr><td>2</td><td>T.J. Galiardi (COL)</td><td>75</td><td>3</td></tr>
<tr><td>3</td><td>Michael McCarron (ARZ)</td><td>68</td><td>2</td></tr>
<tr><td>4</td><td>Drake Caggiula (OTT)</td><td>75</td><td>2</td></tr>
<tr><td>5</td><td>Zach Hyman (TBL)</td><td>78</td><td>2</td></tr>
<tr><td>6</td><td>Blake Wheeler (MIN)</td><td>82</td><td>2</td></tr>
<tr><td>7</td><td>Jordan Caron (CAR)</td><td>82</td><td>2</td></tr>
<tr><td>8</td><td>Sean Couturier (DAL)</td><td>82</td><td>2</td></tr>
<tr><td>9</td><td>Freddie Hamilton (NSH)</td><td>82</td><td>2</td></tr>
<tr><td>10</td><td>Jiri Sekac (PIT)</td><td>25</td><td>1</td></tr>
<tr><td>11</td><td>Dana Tyrell (FLA)</td><td>42</td><td>1</td></tr>
<tr><td>12</td><td>Miikka Salomäki (NSH)</td><td>47</td><td>1</td></tr>
<tr><td>13</td><td>Eric Gelinas (BOS)</td><td>62</td><td>1</td></tr>
<tr><td>14</td><td>Jyrki Jokipakka (NYI)</td><td>65</td><td>1</td></tr>
<tr><td>15</td><td>Brad Marchand (BOS)</td><td>67</td><td>1</td></tr>
<tr><td>16</td><td>Sidney Crosby (MTL)</td><td>67</td><td>1</td></tr>
<tr><td>17</td><td>Nikita Zadorov (TBL)</td><td>68</td><td>1</td></tr>
<tr><td>18</td><td>Shawn Matthias (CLB)</td><td>71</td><td>1</td></tr>
<tr><td>19</td><td>Ryan McDonagh (NYR)</td><td>72</td><td>1</td></tr>
<tr><td>20</td><td>Joel Edmundson (FLA)</td><td>73</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (LOS)</td><td>82</td><td>10</td></tr>
<tr><td>2</td><td>Matthew Nieto (SJS)</td><td>82</td><td>10</td></tr>
<tr><td>3</td><td>Sidney Crosby (MTL)</td><td>67</td><td>9</td></tr>
<tr><td>4</td><td>Nathan MacKinnon (STL)</td><td>79</td><td>9</td></tr>
<tr><td>5</td><td>Alexander Radulov (WSH)</td><td>82</td><td>9</td></tr>
<tr><td>6</td><td>Auston Matthews (WPG)</td><td>74</td><td>8</td></tr>
<tr><td>7</td><td>Colin Wilson (QUE)</td><td>78</td><td>8</td></tr>
<tr><td>8</td><td>Brayden Point (NYR)</td><td>81</td><td>8</td></tr>
<tr><td>9</td><td>Pierre-Luc Dubois (CGY)</td><td>82</td><td>8</td></tr>
<tr><td>10</td><td>Tomas Tatar (DAL)</td><td>82</td><td>8</td></tr>
<tr><td>11</td><td>Ryan Nugent-Hopkins (PHI)</td><td>71</td><td>7</td></tr>
<tr><td>12</td><td>Corey Perry (LOS)</td><td>82</td><td>7</td></tr>
<tr><td>13</td><td>Loui Eriksson (CAR)</td><td>82</td><td>7</td></tr>
<tr><td>14</td><td>Sean Couturier (DAL)</td><td>82</td><td>7</td></tr>
<tr><td>15</td><td>Connor McDavid (VAN)</td><td>82</td><td>7</td></tr>
<tr><td>16</td><td>Evgeny Kuznetsov (STL)</td><td>84</td><td>7</td></tr>
<tr><td>17</td><td>Mitch Marner (NSH)</td><td>85</td><td>7</td></tr>
<tr><td>18</td><td>Zemgus Girgensons (VAN)</td><td>80</td><td>6</td></tr>
<tr><td>19</td><td>Nikita Kucherov (FLA)</td><td>80</td><td>6</td></tr>
<tr><td>20</td><td>Matt Duchene (PIT)</td><td>81</td><td>6</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Brady Skjei (STL)</td><td>77</td><td>5</td></tr>
<tr><td>2</td><td>Morgan Klimchuk (VEG)</td><td>82</td><td>5</td></tr>
<tr><td>3</td><td>Jake Guentzel (QUE)</td><td>76</td><td>4</td></tr>
<tr><td>4</td><td>Samuel Girard (TOR)</td><td>77</td><td>4</td></tr>
<tr><td>5</td><td>Leon Draisaitl (DAL)</td><td>78</td><td>4</td></tr>
<tr><td>6</td><td>Tomas Plekanec (STL)</td><td>79</td><td>4</td></tr>
<tr><td>7</td><td>Anze Kopitar (LOS)</td><td>82</td><td>4</td></tr>
<tr><td>8</td><td>Bobby Ryan (PIT)</td><td>82</td><td>4</td></tr>
<tr><td>9</td><td>John Tavares (ARZ)</td><td>82</td><td>4</td></tr>
<tr><td>10</td><td>Brandon Saad (DAL)</td><td>83</td><td>4</td></tr>
<tr><td>11</td><td>Mika Zibanejad (DET)</td><td>83</td><td>4</td></tr>
<tr><td>12</td><td>Alexander Urbom (MTL)</td><td>86</td><td>4</td></tr>
<tr><td>13</td><td>Auston Matthews (WPG)</td><td>74</td><td>3</td></tr>
<tr><td>14</td><td>Brent Burns (WPG)</td><td>76</td><td>3</td></tr>
<tr><td>15</td><td>Brandon Sutter (PIT)</td><td>78</td><td>3</td></tr>
<tr><td>16</td><td>Brett Connolly (BUF)</td><td>78</td><td>3</td></tr>
<tr><td>17</td><td>Ryan O'Reilly (BUF)</td><td>79</td><td>3</td></tr>
<tr><td>18</td><td>Steven Stamkos (ARZ)</td><td>79</td><td>3</td></tr>
<tr><td>19</td><td>William Carrier (CHI)</td><td>79</td><td>3</td></tr>
<tr><td>20</td><td>Jared McCann (NJD)</td><td>80</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Nick Leddy (DET)</td><td>80</td><td>2</td></tr>
<tr><td>2</td><td>Gabriel Landeskog (WPG)</td><td>80</td><td>2</td></tr>
<tr><td>3</td><td>Dan DeKeyser (QUE)</td><td>82</td><td>2</td></tr>
<tr><td>4</td><td>Jacob De La Rose (WSH)</td><td>82</td><td>2</td></tr>
<tr><td>5</td><td>Travis Hamonic (CGY)</td><td>85</td><td>2</td></tr>
<tr><td>6</td><td>Louis Leblanc (TOR)</td><td>59</td><td>1</td></tr>
<tr><td>7</td><td>Patrice Bergeron (VEG)</td><td>61</td><td>1</td></tr>
<tr><td>8</td><td>Laurent Dauphin (OTT)</td><td>63</td><td>1</td></tr>
<tr><td>9</td><td>Jyrki Jokipakka (NYI)</td><td>65</td><td>1</td></tr>
<tr><td>10</td><td>Taylor Doherty (ANH)</td><td>66</td><td>1</td></tr>
<tr><td>11</td><td>Brad Marchand (BOS)</td><td>67</td><td>1</td></tr>
<tr><td>12</td><td>Alex Iafallo (ARZ)</td><td>69</td><td>1</td></tr>
<tr><td>13</td><td>Ryan Wilson (PIT)</td><td>70</td><td>1</td></tr>
<tr><td>14</td><td>Ryan McDonagh (NYR)</td><td>72</td><td>1</td></tr>
<tr><td>15</td><td>Sam Reinhart (NSH)</td><td>73</td><td>1</td></tr>
<tr><td>16</td><td>Auston Matthews (WPG)</td><td>74</td><td>1</td></tr>
<tr><td>17</td><td>Curtis Hamilton (SEA)</td><td>74</td><td>1</td></tr>
<tr><td>18</td><td>Mattias Tedenby (OTT)</td><td>75</td><td>1</td></tr>
<tr><td>19</td><td>Darren Helm (FLA)</td><td>76</td><td>1</td></tr>
<tr><td>20</td><td>Jake Guentzel (QUE)</td><td>76</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Shea Weber (DAL)</td><td>82</td><td>2 057</td></tr>
<tr><td>2</td><td>John Carlson (BOS)</td><td>82</td><td>2 047</td></tr>
<tr><td>3</td><td>Vyacheslav Voynov (DET)</td><td>82</td><td>2 032</td></tr>
<tr><td>4</td><td>Duncan Siemens (DAL)</td><td>82</td><td>2 013</td></tr>
<tr><td>5</td><td>Kristopher Letang (VEG)</td><td>82</td><td>1 993</td></tr>
<tr><td>6</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>1 984</td></tr>
<tr><td>7</td><td>Travis Hamonic (CGY)</td><td>85</td><td>1 974</td></tr>
<tr><td>8</td><td>Morgan Rielly (TOR)</td><td>82</td><td>1 942</td></tr>
<tr><td>9</td><td>Jack Johnson (SJS)</td><td>82</td><td>1 932</td></tr>
<tr><td>10</td><td>Jamie McBain (OTT)</td><td>82</td><td>1 928</td></tr>
<tr><td>11</td><td>Michael Del Zotto (CGY)</td><td>83</td><td>1 926</td></tr>
<tr><td>12</td><td>Blake Wheeler (MIN)</td><td>82</td><td>1 922</td></tr>
<tr><td>13</td><td>Brendan Smith (QUE)</td><td>82</td><td>1 911</td></tr>
<tr><td>14</td><td>Marc-Edouard Vlasic (STL)</td><td>80</td><td>1 896</td></tr>
<tr><td>15</td><td>Tyler Myers (ANH)</td><td>84</td><td>1 891</td></tr>
<tr><td>16</td><td>Oliver Ekman-Larsson (CGY)</td><td>82</td><td>1 890</td></tr>
<tr><td>17</td><td>Matt Dumba (MIN)</td><td>82</td><td>1 884</td></tr>
<tr><td>18</td><td>Keith Yandle (SJS)</td><td>82</td><td>1 884</td></tr>
<tr><td>19</td><td>Zach Bogosian (ARZ)</td><td>81</td><td>1 880</td></tr>
<tr><td>20</td><td>P.K. Subban (TBL)</td><td>82</td><td>1 879</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Sidney Crosby (MTL)</td><td>67</td><td>2</td></tr>
<tr><td>2</td><td>Auston Matthews (WPG)</td><td>74</td><td>2</td></tr>
<tr><td>3</td><td>Brayden Point (NYR)</td><td>81</td><td>2</td></tr>
<tr><td>4</td><td>Artturi Lehkonen (SJS)</td><td>28</td><td>1</td></tr>
<tr><td>5</td><td>Johnny Hockey Gaudreau (CLB)</td><td>57</td><td>1</td></tr>
<tr><td>6</td><td>David Savard (NYI)</td><td>64</td><td>1</td></tr>
<tr><td>7</td><td>Artemi Panarin (STL)</td><td>73</td><td>1</td></tr>
<tr><td>8</td><td>Marcus Kruger (SJS)</td><td>73</td><td>1</td></tr>
<tr><td>9</td><td>Jake Guentzel (QUE)</td><td>76</td><td>1</td></tr>
<tr><td>10</td><td>Reilly Smith (NJD)</td><td>77</td><td>1</td></tr>
<tr><td>11</td><td>Alexander Semin (QUE)</td><td>78</td><td>1</td></tr>
<tr><td>12</td><td>Brett Connolly (BUF)</td><td>78</td><td>1</td></tr>
<tr><td>13</td><td>Anders Lee (BUF)</td><td>78</td><td>1</td></tr>
<tr><td>14</td><td>Ryan O'Reilly (BUF)</td><td>79</td><td>1</td></tr>
<tr><td>15</td><td>Sam Gagner (EDM)</td><td>79</td><td>1</td></tr>
<tr><td>16</td><td>Steven Stamkos (ARZ)</td><td>79</td><td>1</td></tr>
<tr><td>17</td><td>Nathan MacKinnon (STL)</td><td>79</td><td>1</td></tr>
<tr><td>18</td><td>Cam Fowler (ANH)</td><td>80</td><td>1</td></tr>
<tr><td>19</td><td>Gabriel Landeskog (WPG)</td><td>80</td><td>1</td></tr>
<tr><td>20</td><td>Jonathan Toews (CHI)</td><td>81</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Brayden Point (NYR)</td><td>81</td><td>4</td></tr>
<tr><td>2</td><td>Hunter Shinkaruk (DAL)</td><td>82</td><td>3</td></tr>
<tr><td>3</td><td>Jiri Sekac (PIT)</td><td>25</td><td>2</td></tr>
<tr><td>4</td><td>Brent Burns (WPG)</td><td>76</td><td>2</td></tr>
<tr><td>5</td><td>Jack Eichel (NJD)</td><td>79</td><td>2</td></tr>
<tr><td>6</td><td>Sebastian Aho (TOR)</td><td>81</td><td>2</td></tr>
<tr><td>7</td><td>Slater Koekkoek (BUF)</td><td>81</td><td>2</td></tr>
<tr><td>8</td><td>Brent Seabrook (CLB)</td><td>82</td><td>2</td></tr>
<tr><td>9</td><td>Claude Giroux (PHI)</td><td>82</td><td>2</td></tr>
<tr><td>10</td><td>Kristopher Letang (VEG)</td><td>82</td><td>2</td></tr>
<tr><td>11</td><td>Sean Couturier (DAL)</td><td>82</td><td>2</td></tr>
<tr><td>12</td><td>Morgan Rielly (TOR)</td><td>82</td><td>2</td></tr>
<tr><td>13</td><td>Matthew Nieto (SJS)</td><td>82</td><td>2</td></tr>
<tr><td>14</td><td>Kirill Kaprizov (NSH)</td><td>82</td><td>2</td></tr>
<tr><td>15</td><td>Brandon Saad (DAL)</td><td>83</td><td>2</td></tr>
<tr><td>16</td><td>Simon Despres (VEG)</td><td>84</td><td>2</td></tr>
<tr><td>17</td><td>Emerson Etem (TOR)</td><td>87</td><td>2</td></tr>
<tr><td>18</td><td>Greg Chase (WPG)</td><td>10</td><td>1</td></tr>
<tr><td>19</td><td>Ty Wishart (COL)</td><td>20</td><td>1</td></tr>
<tr><td>20</td><td>Kevin Stenlund (NJD)</td><td>21</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (LOS)</td><td>82</td><td>11</td></tr>
<tr><td>2</td><td>Brayden Point (NYR)</td><td>81</td><td>8</td></tr>
<tr><td>3</td><td>Brent Seabrook (CLB)</td><td>82</td><td>8</td></tr>
<tr><td>4</td><td>Seth Jones (SJS)</td><td>78</td><td>6</td></tr>
<tr><td>5</td><td>Tyler Ennis (SJS)</td><td>82</td><td>6</td></tr>
<tr><td>6</td><td>Patrice Bergeron (VEG)</td><td>61</td><td>5</td></tr>
<tr><td>7</td><td>Ryan Nugent-Hopkins (PHI)</td><td>71</td><td>5</td></tr>
<tr><td>8</td><td>John Moore (PHI)</td><td>73</td><td>5</td></tr>
<tr><td>9</td><td>Mikko Koivu (DAL)</td><td>79</td><td>4</td></tr>
<tr><td>10</td><td>Phil Kessel (WSH)</td><td>80</td><td>4</td></tr>
<tr><td>11</td><td>Alex Goligoski (DET)</td><td>81</td><td>4</td></tr>
<tr><td>12</td><td>Claude Giroux (PHI)</td><td>82</td><td>4</td></tr>
<tr><td>13</td><td>John Tavares (ARZ)</td><td>82</td><td>4</td></tr>
<tr><td>14</td><td>Mikko Rantanen (TOR)</td><td>82</td><td>4</td></tr>
<tr><td>15</td><td>Hunter Shinkaruk (DAL)</td><td>82</td><td>4</td></tr>
<tr><td>16</td><td>Jiri Sekac (PIT)</td><td>25</td><td>3</td></tr>
<tr><td>17</td><td>Tim Erixon (PIT)</td><td>38</td><td>3</td></tr>
<tr><td>18</td><td>Ben Hutton (LOS)</td><td>46</td><td>3</td></tr>
<tr><td>19</td><td>Troy Stecher (TOR)</td><td>67</td><td>3</td></tr>
<tr><td>20</td><td>Ryan McDonagh (NYR)</td><td>72</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Jonathan Toews (CHI)</td><td>81</td><td>250</td></tr>
<tr><td>2</td><td>Jordan Staal (LOS)</td><td>82</td><td>234</td></tr>
<tr><td>3</td><td>Ryan Kesler (SJS)</td><td>82</td><td>219</td></tr>
<tr><td>4</td><td>Nathan MacKinnon (STL)</td><td>79</td><td>218</td></tr>
<tr><td>5</td><td>Aleksander Barkov (NYR)</td><td>82</td><td>218</td></tr>
<tr><td>6</td><td>Sean Couturier (DAL)</td><td>82</td><td>216</td></tr>
<tr><td>7</td><td>Connor McDavid (VAN)</td><td>82</td><td>199</td></tr>
<tr><td>8</td><td>Ryan O'Reilly (BUF)</td><td>79</td><td>197</td></tr>
<tr><td>9</td><td>Brayden Point (NYR)</td><td>81</td><td>195</td></tr>
<tr><td>10</td><td>Tobias Rieder (EDM)</td><td>82</td><td>195</td></tr>
<tr><td>11</td><td>Jack Eichel (NJD)</td><td>79</td><td>192</td></tr>
<tr><td>12</td><td>Mark Scheifele (STL)</td><td>82</td><td>191</td></tr>
<tr><td>13</td><td>Claude Giroux (PHI)</td><td>82</td><td>189</td></tr>
<tr><td>14</td><td>Mike Richards (LOS)</td><td>80</td><td>184</td></tr>
<tr><td>15</td><td>Nicklas Backstrom (TOR)</td><td>82</td><td>183</td></tr>
<tr><td>16</td><td>Sam Gagner (EDM)</td><td>79</td><td>182</td></tr>
<tr><td>17</td><td>Anze Kopitar (LOS)</td><td>82</td><td>182</td></tr>
<tr><td>18</td><td>Derek Stepan (ANH)</td><td>82</td><td>182</td></tr>
<tr><td>19</td><td>Evgeny Grachev (COL)</td><td>73</td><td>179</td></tr>
<tr><td>20</td><td>Matt Duchene (PIT)</td><td>81</td><td>175</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Nicklas Backstrom (TOR)</td><td>82</td><td>4</td></tr>
<tr><td>2</td><td>Tyler Ennis (SJS)</td><td>82</td><td>4</td></tr>
<tr><td>3</td><td>Nail Yakupov (NYR)</td><td>82</td><td>4</td></tr>
<tr><td>4</td><td>Leon Draisaitl (DAL)</td><td>78</td><td>3</td></tr>
<tr><td>5</td><td>Ryan Getzlaf (QUE)</td><td>78</td><td>3</td></tr>
<tr><td>6</td><td>Mikko Koivu (DAL)</td><td>79</td><td>3</td></tr>
<tr><td>7</td><td>Bobby Ryan (PIT)</td><td>82</td><td>3</td></tr>
<tr><td>8</td><td>David Backes (CHI)</td><td>82</td><td>3</td></tr>
<tr><td>9</td><td>Jeff Skinner (LOS)</td><td>82</td><td>3</td></tr>
<tr><td>10</td><td>Patric Hornqvist (PIT)</td><td>82</td><td>3</td></tr>
<tr><td>11</td><td>Kirill Kaprizov (NSH)</td><td>82</td><td>3</td></tr>
<tr><td>12</td><td>Tyler Seguin (BUF)</td><td>83</td><td>3</td></tr>
<tr><td>13</td><td>Max Friberg (NYI)</td><td>84</td><td>3</td></tr>
<tr><td>14</td><td>William Karlsson (VEG)</td><td>85</td><td>3</td></tr>
<tr><td>15</td><td>Brad Marchand (BOS)</td><td>67</td><td>2</td></tr>
<tr><td>16</td><td>Peter Mueller (COL)</td><td>67</td><td>2</td></tr>
<tr><td>17</td><td>Andre Burakovsky (DET)</td><td>68</td><td>2</td></tr>
<tr><td>18</td><td>Ryan Nugent-Hopkins (PHI)</td><td>71</td><td>2</td></tr>
<tr><td>19</td><td>Sam Reinhart (NSH)</td><td>73</td><td>2</td></tr>
<tr><td>20</td><td>Sean Monahan (COL)</td><td>77</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Derek Forbort (LOS)</td><td>69</td><td>3</td></tr>
<tr><td>2</td><td>Nikita Zadorov (TBL)</td><td>68</td><td>2</td></tr>
<tr><td>3</td><td>David Musil (SEA)</td><td>77</td><td>2</td></tr>
<tr><td>4</td><td>Mike Richards (LOS)</td><td>80</td><td>2</td></tr>
<tr><td>5</td><td>Karl Alzner (OTT)</td><td>82</td><td>2</td></tr>
<tr><td>6</td><td>Marco Scandella (BOS)</td><td>82</td><td>2</td></tr>
<tr><td>7</td><td>Aaron Ekblad (FLA)</td><td>82</td><td>2</td></tr>
<tr><td>8</td><td>Ryan Suter (MIN)</td><td>82</td><td>2</td></tr>
<tr><td>9</td><td>Charles McAvoy (BOS)</td><td>82</td><td>2</td></tr>
<tr><td>10</td><td>Devante Smith-Pelly (TBL)</td><td>82</td><td>2</td></tr>
<tr><td>11</td><td>Michael Matheson (WSH)</td><td>82</td><td>2</td></tr>
<tr><td>12</td><td>Boone Jenner (TBL)</td><td>83</td><td>2</td></tr>
<tr><td>13</td><td>Matthew Tkachuk (FLA)</td><td>83</td><td>2</td></tr>
<tr><td>14</td><td>Emerson Etem (TOR)</td><td>87</td><td>2</td></tr>
<tr><td>15</td><td>Ryan MacInnis (CGY)</td><td>7</td><td>1</td></tr>
<tr><td>16</td><td>Roman Polak (MTL)</td><td>25</td><td>1</td></tr>
<tr><td>17</td><td>Patrice Cormier (SEA)</td><td>31</td><td>1</td></tr>
<tr><td>18</td><td>Julius Bergman (VEG)</td><td>31</td><td>1</td></tr>
<tr><td>19</td><td>Brendan Lemieux (EDM)</td><td>54</td><td>1</td></tr>
<tr><td>20</td><td>Magnus Nygren (OTT)</td><td>55</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Nikita Zadorov (TBL)</td><td>68</td><td>2</td></tr>
<tr><td>2</td><td>Karl Alzner (OTT)</td><td>82</td><td>2</td></tr>
<tr><td>3</td><td>Brendan Lemieux (EDM)</td><td>54</td><td>1</td></tr>
<tr><td>4</td><td>Magnus Nygren (OTT)</td><td>55</td><td>1</td></tr>
<tr><td>5</td><td>Filip Forsberg (MTL)</td><td>67</td><td>1</td></tr>
<tr><td>6</td><td>Ryan Wilson (PIT)</td><td>70</td><td>1</td></tr>
<tr><td>7</td><td>Mark Giordano (PHI)</td><td>74</td><td>1</td></tr>
<tr><td>8</td><td>Colin Wilson (QUE)</td><td>78</td><td>1</td></tr>
<tr><td>9</td><td>Seth Jones (SJS)</td><td>78</td><td>1</td></tr>
<tr><td>10</td><td>Cam Fowler (ANH)</td><td>80</td><td>1</td></tr>
<tr><td>11</td><td>Zach Bogosian (ARZ)</td><td>81</td><td>1</td></tr>
<tr><td>12</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>1</td></tr>
<tr><td>13</td><td>Jack Johnson (SJS)</td><td>82</td><td>1</td></tr>
<tr><td>14</td><td>Jamie Benn (BOS)</td><td>82</td><td>1</td></tr>
<tr><td>15</td><td>Jamie McBain (OTT)</td><td>82</td><td>1</td></tr>
<tr><td>16</td><td>Jesse Puljujarvi (ANH)</td><td>82</td><td>1</td></tr>
<tr><td>17</td><td>Marc Staal (TBL)</td><td>82</td><td>1</td></tr>
<tr><td>18</td><td>Marco Scandella (BOS)</td><td>82</td><td>1</td></tr>
<tr><td>19</td><td>Ryan Callahan (EDM)</td><td>82</td><td>1</td></tr>
<tr><td>20</td><td>Marc-Andre Bourdon (NSH)</td><td>82</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Jacob Markstrom (BUF)</td><td>73</td><td>0,920</td></tr>
<tr><td>2</td><td>Jaroslav Halak (MTL)</td><td>56</td><td>0,917</td></tr>
<tr><td>3</td><td>Ondrej Pavelec (DET)</td><td>70</td><td>0,916</td></tr>
<tr><td>4</td><td>Mark Visentin (ARZ)</td><td>61</td><td>0,916</td></tr>
<tr><td>5</td><td>Tuukka Rask (STL)</td><td>67</td><td>0,914</td></tr>
<tr><td>6</td><td>Simeon Varlamov (QUE)</td><td>52</td><td>0,914</td></tr>
<tr><td>7</td><td>Braden Holtby (WSH)</td><td>62</td><td>0,913</td></tr>
<tr><td>8</td><td>Matt Murray (PIT)</td><td>54</td><td>0,913</td></tr>
<tr><td>9</td><td>Kevin Poulin (VEG)</td><td>49</td><td>0,912</td></tr>
<tr><td>10</td><td>Pekka Rinne (OTT)</td><td>52</td><td>0,912</td></tr>
<tr><td>11</td><td>Thatcher Demko (MIN)</td><td>61</td><td>0,912</td></tr>
<tr><td>12</td><td>Michal Neuvirth (LOS)</td><td>80</td><td>0,910</td></tr>
<tr><td>13</td><td>Andrey Vasilevskiy (FLA)</td><td>69</td><td>0,910</td></tr>
<tr><td>14</td><td>Igor Shestyorkin (BOS)</td><td>53</td><td>0,910</td></tr>
<tr><td>15</td><td>Jonathan Quick (PHI)</td><td>70</td><td>0,910</td></tr>
<tr><td>16</td><td>Sergei Bobrovsky (ANH)</td><td>69</td><td>0,909</td></tr>
<tr><td>17</td><td>Marc-Andre Fleury (EDM)</td><td>46</td><td>0,909</td></tr>
<tr><td>18</td><td>Martin Jones (COL)</td><td>66</td><td>0,907</td></tr>
<tr><td>19</td><td>Calvin Pickard (CAR)</td><td>68</td><td>0,907</td></tr>
<tr><td>20</td><td>Ben Bishop (NYI)</td><td>77</td><td>0,907</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Mark Visentin (ARZ)</td><td>61</td><td>2,55</td></tr>
<tr><td>2</td><td>Matt Murray (PIT)</td><td>54</td><td>2,60</td></tr>
<tr><td>3</td><td>Jaroslav Halak (MTL)</td><td>56</td><td>2,61</td></tr>
<tr><td>4</td><td>Jacob Markstrom (BUF)</td><td>73</td><td>2,62</td></tr>
<tr><td>5</td><td>Braden Holtby (WSH)</td><td>62</td><td>2,64</td></tr>
<tr><td>6</td><td>Tuukka Rask (STL)</td><td>67</td><td>2,66</td></tr>
<tr><td>7</td><td>Ondrej Pavelec (DET)</td><td>70</td><td>2,68</td></tr>
<tr><td>8</td><td>Michal Neuvirth (LOS)</td><td>80</td><td>2,70</td></tr>
<tr><td>9</td><td>Simeon Varlamov (QUE)</td><td>52</td><td>2,73</td></tr>
<tr><td>10</td><td>Andrey Vasilevskiy (FLA)</td><td>69</td><td>2,74</td></tr>
<tr><td>11</td><td>Kevin Poulin (VEG)</td><td>49</td><td>2,83</td></tr>
<tr><td>12</td><td>Jonathan Quick (PHI)</td><td>70</td><td>2,86</td></tr>
<tr><td>13</td><td>Thatcher Demko (MIN)</td><td>61</td><td>2,90</td></tr>
<tr><td>14</td><td>Igor Shestyorkin (BOS)</td><td>53</td><td>2,90</td></tr>
<tr><td>15</td><td>Sergei Bobrovsky (ANH)</td><td>69</td><td>2,91</td></tr>
<tr><td>16</td><td>Robin Lehner (SEA)</td><td>67</td><td>2,93</td></tr>
<tr><td>17</td><td>James Reimer (CGY)</td><td>79</td><td>2,94</td></tr>
<tr><td>18</td><td>Pekka Rinne (OTT)</td><td>52</td><td>2,95</td></tr>
<tr><td>19</td><td>Jordan Binnington (WPG)</td><td>68</td><td>3,00</td></tr>
<tr><td>20</td><td>Calvin Pickard (CAR)</td><td>68</td><td>3,01</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>James Reimer (CGY)</td><td>79</td><td>4 677</td></tr>
<tr><td>2</td><td>Michal Neuvirth (LOS)</td><td>80</td><td>4 350</td></tr>
<tr><td>3</td><td>Ben Bishop (NYI)</td><td>77</td><td>4 312</td></tr>
<tr><td>4</td><td>Jonathan Quick (PHI)</td><td>70</td><td>4 232</td></tr>
<tr><td>5</td><td>Jacob Markstrom (BUF)</td><td>73</td><td>4 170</td></tr>
<tr><td>6</td><td>Ondrej Pavelec (DET)</td><td>70</td><td>4 140</td></tr>
<tr><td>7</td><td>Andrey Vasilevskiy (FLA)</td><td>69</td><td>4 052</td></tr>
<tr><td>8</td><td>Calvin Pickard (CAR)</td><td>68</td><td>3 973</td></tr>
<tr><td>9</td><td>Jordan Binnington (WPG)</td><td>68</td><td>3 958</td></tr>
<tr><td>10</td><td>Sergei Bobrovsky (ANH)</td><td>69</td><td>3 914</td></tr>
<tr><td>11</td><td>Robin Lehner (SEA)</td><td>67</td><td>3 887</td></tr>
<tr><td>12</td><td>Tuukka Rask (STL)</td><td>67</td><td>3 864</td></tr>
<tr><td>13</td><td>Carey Price (CHI)</td><td>69</td><td>3 695</td></tr>
<tr><td>14</td><td>Carter Hart (NSH)</td><td>65</td><td>3 607</td></tr>
<tr><td>15</td><td>Jack Campbell (NYR)</td><td>63</td><td>3 595</td></tr>
<tr><td>16</td><td>Thatcher Demko (MIN)</td><td>61</td><td>3 563</td></tr>
<tr><td>17</td><td>Mark Visentin (ARZ)</td><td>61</td><td>3 555</td></tr>
<tr><td>18</td><td>Steve Mason (TOR)</td><td>62</td><td>3 547</td></tr>
<tr><td>19</td><td>Braden Holtby (WSH)</td><td>62</td><td>3 543</td></tr>
<tr><td>20</td><td>Martin Jones (COL)</td><td>66</td><td>3 425</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>James Reimer (CGY)</td><td>79</td><td>2386</td></tr>
<tr><td>2</td><td>Ben Bishop (NYI)</td><td>77</td><td>2345</td></tr>
<tr><td>3</td><td>Jacob Markstrom (BUF)</td><td>73</td><td>2271</td></tr>
<tr><td>4</td><td>Jonathan Quick (PHI)</td><td>70</td><td>2237</td></tr>
<tr><td>5</td><td>Ondrej Pavelec (DET)</td><td>70</td><td>2202</td></tr>
<tr><td>6</td><td>Michal Neuvirth (LOS)</td><td>80</td><td>2183</td></tr>
<tr><td>7</td><td>Calvin Pickard (CAR)</td><td>68</td><td>2137</td></tr>
<tr><td>8</td><td>Sergei Bobrovsky (ANH)</td><td>69</td><td>2096</td></tr>
<tr><td>9</td><td>Jordan Binnington (WPG)</td><td>68</td><td>2076</td></tr>
<tr><td>10</td><td>Andrey Vasilevskiy (FLA)</td><td>69</td><td>2054</td></tr>
<tr><td>11</td><td>Robin Lehner (SEA)</td><td>67</td><td>2029</td></tr>
<tr><td>12</td><td>Carey Price (CHI)</td><td>69</td><td>1991</td></tr>
<tr><td>13</td><td>Tuukka Rask (STL)</td><td>67</td><td>1989</td></tr>
<tr><td>14</td><td>Thatcher Demko (MIN)</td><td>61</td><td>1957</td></tr>
<tr><td>15</td><td>Jack Campbell (NYR)</td><td>63</td><td>1933</td></tr>
<tr><td>16</td><td>Carter Hart (NSH)</td><td>65</td><td>1880</td></tr>
<tr><td>17</td><td>Martin Jones (COL)</td><td>66</td><td>1869</td></tr>
<tr><td>18</td><td>Steve Mason (TOR)</td><td>62</td><td>1811</td></tr>
<tr><td>19</td><td>Braden Holtby (WSH)</td><td>62</td><td>1802</td></tr>
<tr><td>20</td><td>Mark Visentin (ARZ)</td><td>61</td><td>1796</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Calvin Pickard (CAR)</td><td>68</td><td>5</td></tr>
<tr><td>2</td><td>Pekka Rinne (OTT)</td><td>52</td><td>4</td></tr>
<tr><td>3</td><td>Jaroslav Halak (MTL)</td><td>56</td><td>4</td></tr>
<tr><td>4</td><td>Jacob Markstrom (BUF)</td><td>73</td><td>4</td></tr>
<tr><td>5</td><td>Michal Neuvirth (LOS)</td><td>80</td><td>4</td></tr>
<tr><td>6</td><td>Chase Marchand (SJS)</td><td>43</td><td>3</td></tr>
<tr><td>7</td><td>Simeon Varlamov (QUE)</td><td>52</td><td>3</td></tr>
<tr><td>8</td><td>Igor Shestyorkin (BOS)</td><td>53</td><td>3</td></tr>
<tr><td>9</td><td>Mark Visentin (ARZ)</td><td>61</td><td>3</td></tr>
<tr><td>10</td><td>Martin Jones (COL)</td><td>66</td><td>3</td></tr>
<tr><td>11</td><td>Ondrej Pavelec (DET)</td><td>70</td><td>3</td></tr>
<tr><td>12</td><td>Ilya Sorokin (NJD)</td><td>19</td><td>2</td></tr>
<tr><td>13</td><td>Henrik Lundqvist (NYR)</td><td>27</td><td>2</td></tr>
<tr><td>14</td><td>Kari Lehtonen (QUE)</td><td>30</td><td>2</td></tr>
<tr><td>15</td><td>Alex Lyon (OTT)</td><td>33</td><td>2</td></tr>
<tr><td>16</td><td>Josh Harding (BOS)</td><td>36</td><td>2</td></tr>
<tr><td>17</td><td>Marek Mazanec (VEG)</td><td>37</td><td>2</td></tr>
<tr><td>18</td><td>Cam Ward (PIT)</td><td>44</td><td>2</td></tr>
<tr><td>19</td><td>Marc-Andre Fleury (EDM)</td><td>46</td><td>2</td></tr>
<tr><td>20</td><td>Kevin Poulin (VEG)</td><td>49</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Michal Neuvirth (LOS)</td><td>80</td><td>47</td></tr>
<tr><td>2</td><td>James Reimer (CGY)</td><td>79</td><td>43</td></tr>
<tr><td>3</td><td>Andrey Vasilevskiy (FLA)</td><td>69</td><td>39</td></tr>
<tr><td>4</td><td>Ondrej Pavelec (DET)</td><td>70</td><td>39</td></tr>
<tr><td>5</td><td>Tuukka Rask (STL)</td><td>67</td><td>37</td></tr>
<tr><td>6</td><td>Jacob Markstrom (BUF)</td><td>73</td><td>37</td></tr>
<tr><td>7</td><td>Jonathan Quick (PHI)</td><td>70</td><td>36</td></tr>
<tr><td>8</td><td>Matt Murray (PIT)</td><td>54</td><td>35</td></tr>
<tr><td>9</td><td>Jaroslav Halak (MTL)</td><td>56</td><td>34</td></tr>
<tr><td>10</td><td>Jack Campbell (NYR)</td><td>63</td><td>34</td></tr>
<tr><td>11</td><td>Jordan Binnington (WPG)</td><td>68</td><td>34</td></tr>
<tr><td>12</td><td>Mark Visentin (ARZ)</td><td>61</td><td>32</td></tr>
<tr><td>13</td><td>Martin Jones (COL)</td><td>66</td><td>32</td></tr>
<tr><td>14</td><td>Calvin Pickard (CAR)</td><td>68</td><td>32</td></tr>
<tr><td>15</td><td>Braden Holtby (WSH)</td><td>62</td><td>31</td></tr>
<tr><td>16</td><td>Ben Bishop (NYI)</td><td>77</td><td>31</td></tr>
<tr><td>17</td><td>Carter Hart (NSH)</td><td>65</td><td>30</td></tr>
<tr><td>18</td><td>Robin Lehner (SEA)</td><td>67</td><td>29</td></tr>
<tr><td>19</td><td>Sergei Bobrovsky (ANH)</td><td>69</td><td>29</td></tr>
<tr><td>20</td><td>Carey Price (CHI)</td><td>69</td><td>28</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Matt Hackett (EDM)</td><td>6</td><td>1,000</td></tr>
<tr><td>2</td><td>David Rittich (CHI)</td><td>6</td><td>1,000</td></tr>
<tr><td>3</td><td>Cam Ward (PIT)</td><td>18</td><td>0,889</td></tr>
<tr><td>4</td><td>Connor Hellebuyck (ARZ)</td><td>9</td><td>0,889</td></tr>
<tr><td>5</td><td>Keith Kinkaid (NJD)</td><td>8</td><td>0,875</td></tr>
<tr><td>6</td><td>Pekka Rinne (OTT)</td><td>6</td><td>0,833</td></tr>
<tr><td>7</td><td>Ilya Sorokin (NJD)</td><td>6</td><td>0,833</td></tr>
<tr><td>8</td><td>Simeon Varlamov (QUE)</td><td>11</td><td>0,818</td></tr>
<tr><td>9</td><td>Jack Campbell (NYR)</td><td>31</td><td>0,806</td></tr>
<tr><td>10</td><td>Corey Crawford (DAL)</td><td>15</td><td>0,800</td></tr>
<tr><td>11</td><td>Vitek Vanecek (VAN)</td><td>5</td><td>0,800</td></tr>
<tr><td>12</td><td>Marek Mazanec (VEG)</td><td>14</td><td>0,786</td></tr>
<tr><td>13</td><td>John Gibson (TBL)</td><td>9</td><td>0,778</td></tr>
<tr><td>14</td><td>Craig Anderson (TOR)</td><td>13</td><td>0,769</td></tr>
<tr><td>15</td><td>James Reimer (CGY)</td><td>17</td><td>0,765</td></tr>
<tr><td>16</td><td>Sergei Bobrovsky (ANH)</td><td>21</td><td>0,762</td></tr>
<tr><td>17</td><td>Chase Marchand (SJS)</td><td>16</td><td>0,750</td></tr>
<tr><td>18</td><td>Pavel Francouz (WSH)</td><td>16</td><td>0,750</td></tr>
<tr><td>19</td><td>Calvin Pickard (CAR)</td><td>12</td><td>0,750</td></tr>
<tr><td>20</td><td>Cory Schneider (SJS)</td><td>8</td><td>0,750</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Carey Price (CHI)</td><td>69</td><td>35</td></tr>
<tr><td>2</td><td>Ben Bishop (NYI)</td><td>77</td><td>35</td></tr>
<tr><td>3</td><td>Calvin Pickard (CAR)</td><td>68</td><td>31</td></tr>
<tr><td>4</td><td>James Reimer (CGY)</td><td>79</td><td>31</td></tr>
<tr><td>5</td><td>Thatcher Demko (MIN)</td><td>61</td><td>29</td></tr>
<tr><td>6</td><td>Carter Hart (NSH)</td><td>65</td><td>28</td></tr>
<tr><td>7</td><td>Braden Holtby (WSH)</td><td>62</td><td>27</td></tr>
<tr><td>8</td><td>Steve Mason (TOR)</td><td>62</td><td>27</td></tr>
<tr><td>9</td><td>Jacob Markstrom (BUF)</td><td>73</td><td>27</td></tr>
<tr><td>10</td><td>Jordan Binnington (WPG)</td><td>68</td><td>26</td></tr>
<tr><td>11</td><td>Sergei Bobrovsky (ANH)</td><td>69</td><td>26</td></tr>
<tr><td>12</td><td>Frederik Andersen (NJD)</td><td>45</td><td>25</td></tr>
<tr><td>13</td><td>Anders Nilsson (CLB)</td><td>56</td><td>24</td></tr>
<tr><td>14</td><td>Robin Lehner (SEA)</td><td>67</td><td>24</td></tr>
<tr><td>15</td><td>Mark Visentin (ARZ)</td><td>61</td><td>23</td></tr>
<tr><td>16</td><td>Andrey Vasilevskiy (FLA)</td><td>69</td><td>23</td></tr>
<tr><td>17</td><td>Jonathan Quick (PHI)</td><td>70</td><td>23</td></tr>
<tr><td>18</td><td>Ondrej Pavelec (DET)</td><td>70</td><td>23</td></tr>
<tr><td>19</td><td>Matt Hackett (EDM)</td><td>41</td><td>21</td></tr>
<tr><td>20</td><td>Marc-Andre Fleury (EDM)</td><td>46</td><td>21</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
