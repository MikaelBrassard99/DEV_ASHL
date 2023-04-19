<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Individual Leaders</title>
<script src="ASHL101.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL101-STHS.db - ASHL101-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL101-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL101-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<b>Minimum Games Played: 41</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Jeff Skinner (LOS)</td><td>82</td><td>46</td></tr>
<tr><td>2</td><td>Steven Stamkos (ARZ)</td><td>82</td><td>44</td></tr>
<tr><td>3</td><td>Auston Matthews (WPG)</td><td>82</td><td>41</td></tr>
<tr><td>4</td><td>Connor McDavid (VAN)</td><td>82</td><td>41</td></tr>
<tr><td>5</td><td>Nathan MacKinnon (CLB)</td><td>82</td><td>38</td></tr>
<tr><td>6</td><td>Jonathan Toews (CHI)</td><td>81</td><td>37</td></tr>
<tr><td>7</td><td>Matt Duchene (CGY)</td><td>82</td><td>37</td></tr>
<tr><td>8</td><td>Sidney Crosby (MTL)</td><td>76</td><td>36</td></tr>
<tr><td>9</td><td>Taylor Hall (EDM)</td><td>82</td><td>36</td></tr>
<tr><td>10</td><td>Sean Monahan (COL)</td><td>82</td><td>36</td></tr>
<tr><td>11</td><td>Anze Kopitar (LOS)</td><td>82</td><td>35</td></tr>
<tr><td>12</td><td>Clayton Keller (SJS)</td><td>82</td><td>35</td></tr>
<tr><td>13</td><td>Jaden Schwartz (DET)</td><td>79</td><td>32</td></tr>
<tr><td>14</td><td>Brad Marchand (BOS)</td><td>82</td><td>32</td></tr>
<tr><td>15</td><td>Jordan Eberle (BUF)</td><td>82</td><td>32</td></tr>
<tr><td>16</td><td>Sam Reinhart (NSH)</td><td>82</td><td>32</td></tr>
<tr><td>17</td><td>Filip Forsberg (MTL)</td><td>82</td><td>31</td></tr>
<tr><td>18</td><td>Aleksander Barkov (NYR)</td><td>82</td><td>31</td></tr>
<tr><td>19</td><td>David Pastrnak (FLA)</td><td>82</td><td>31</td></tr>
<tr><td>20</td><td>Robby Fabbri (COL)</td><td>77</td><td>30</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Drew Doughty (LOS)</td><td>82</td><td>73</td></tr>
<tr><td>2</td><td>Brady Skjei (STL)</td><td>82</td><td>63</td></tr>
<tr><td>3</td><td>Anze Kopitar (LOS)</td><td>82</td><td>60</td></tr>
<tr><td>4</td><td>Morgan Rielly (TOR)</td><td>80</td><td>58</td></tr>
<tr><td>5</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>58</td></tr>
<tr><td>6</td><td>Cam Fowler (ANH)</td><td>82</td><td>57</td></tr>
<tr><td>7</td><td>Victor Hedman (WPG)</td><td>82</td><td>57</td></tr>
<tr><td>8</td><td>Torey Krug (MTL)</td><td>83</td><td>54</td></tr>
<tr><td>9</td><td>Kris Letang (VEG)</td><td>84</td><td>53</td></tr>
<tr><td>10</td><td>Jaden Schwartz (DET)</td><td>79</td><td>52</td></tr>
<tr><td>11</td><td>Claude Giroux (PHI)</td><td>82</td><td>52</td></tr>
<tr><td>12</td><td>Charlie McAvoy (BOS)</td><td>78</td><td>51</td></tr>
<tr><td>13</td><td>Sean Monahan (COL)</td><td>82</td><td>51</td></tr>
<tr><td>14</td><td>Jack Johnson (SJS)</td><td>82</td><td>50</td></tr>
<tr><td>15</td><td>Keith Yandle (SJS)</td><td>82</td><td>50</td></tr>
<tr><td>16</td><td>Derrick Pouliot (BOS)</td><td>79</td><td>49</td></tr>
<tr><td>17</td><td>Andre Burakovsky (PIT)</td><td>82</td><td>49</td></tr>
<tr><td>18</td><td>Aaron Ekblad (FLA)</td><td>75</td><td>48</td></tr>
<tr><td>19</td><td>Noah Hanifin (SEA)</td><td>75</td><td>48</td></tr>
<tr><td>20</td><td>Nick Leddy (DET)</td><td>76</td><td>48</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Jeff Skinner (LOS)</td><td>82</td><td>384</td></tr>
<tr><td>2</td><td>Jonathan Toews (CHI)</td><td>81</td><td>366</td></tr>
<tr><td>3</td><td>Auston Matthews (WPG)</td><td>82</td><td>360</td></tr>
<tr><td>4</td><td>Connor McDavid (VAN)</td><td>82</td><td>348</td></tr>
<tr><td>5</td><td>Nathan MacKinnon (CLB)</td><td>82</td><td>337</td></tr>
<tr><td>6</td><td>Steven Stamkos (ARZ)</td><td>82</td><td>322</td></tr>
<tr><td>7</td><td>David Pastrnak (FLA)</td><td>82</td><td>320</td></tr>
<tr><td>8</td><td>Claude Giroux (PHI)</td><td>82</td><td>306</td></tr>
<tr><td>9</td><td>Taylor Hall (EDM)</td><td>82</td><td>306</td></tr>
<tr><td>10</td><td>Sean Monahan (COL)</td><td>82</td><td>306</td></tr>
<tr><td>11</td><td>Sidney Crosby (MTL)</td><td>76</td><td>305</td></tr>
<tr><td>12</td><td>Mathew Barzal (DAL)</td><td>82</td><td>305</td></tr>
<tr><td>13</td><td>Filip Forsberg (MTL)</td><td>82</td><td>303</td></tr>
<tr><td>14</td><td>Aleksander Barkov (NYR)</td><td>82</td><td>300</td></tr>
<tr><td>15</td><td>Robby Fabbri (COL)</td><td>77</td><td>296</td></tr>
<tr><td>16</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>292</td></tr>
<tr><td>17</td><td>Jack Eichel (NJD)</td><td>82</td><td>291</td></tr>
<tr><td>18</td><td>Brayden Point (NYR)</td><td>82</td><td>290</td></tr>
<tr><td>19</td><td>Mitchell Marner (NSH)</td><td>82</td><td>288</td></tr>
<tr><td>20</td><td>Gabriel Landeskog (WPG)</td><td>82</td><td>288</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Bobby Ryan (BOS)</td><td>80</td><td>18,25%</td></tr>
<tr><td>2</td><td>Roman Josi (DET)</td><td>81</td><td>17,89%</td></tr>
<tr><td>3</td><td>Brent Seabrook (CLB)</td><td>82</td><td>17,86%</td></tr>
<tr><td>4</td><td>Casey Mittelstadt (PHI)</td><td>75</td><td>17,48%</td></tr>
<tr><td>5</td><td>Erik Karlsson (OTT)</td><td>53</td><td>16,16%</td></tr>
<tr><td>6</td><td>Miles Wood (LOS)</td><td>82</td><td>15,69%</td></tr>
<tr><td>7</td><td>Adrian Kempe (CGY)</td><td>66</td><td>15,46%</td></tr>
<tr><td>8</td><td>Nazem Kadri (STL)</td><td>82</td><td>14,87%</td></tr>
<tr><td>9</td><td>Stefan Noesen (CAR)</td><td>72</td><td>14,86%</td></tr>
<tr><td>10</td><td>Peter Trainor (SEA)</td><td>71</td><td>14,81%</td></tr>
<tr><td>11</td><td>Alex Iafallo (COL)</td><td>74</td><td>14,67%</td></tr>
<tr><td>12</td><td>Brendan Gallagher (EDM)</td><td>82</td><td>14,58%</td></tr>
<tr><td>13</td><td>Joakim Ryan (NYI)</td><td>81</td><td>14,46%</td></tr>
<tr><td>14</td><td>Marcus Johansson (CGY)</td><td>84</td><td>14,43%</td></tr>
<tr><td>15</td><td>Ondrej Kase (BOS)</td><td>81</td><td>14,38%</td></tr>
<tr><td>16</td><td>Oliver Bjorkstrand (NSH)</td><td>82</td><td>14,35%</td></tr>
<tr><td>17</td><td>Sami Vatanen (WPG)</td><td>82</td><td>14,29%</td></tr>
<tr><td>18</td><td>Maxwell Reinhart (CAR)</td><td>82</td><td>14,29%</td></tr>
<tr><td>19</td><td>Matt Duchene (CGY)</td><td>82</td><td>13,91%</td></tr>
<tr><td>20</td><td>Nathan Beaulieu (BUF)</td><td>73</td><td>13,89%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (LOS)</td><td>82</td><td>35-60-95</td></tr>
<tr><td>2</td><td>Sean Monahan (COL)</td><td>82</td><td>36-51-87</td></tr>
<tr><td>3</td><td>Steven Stamkos (ARZ)</td><td>82</td><td>44-42-86</td></tr>
<tr><td>4</td><td>Jaden Schwartz (DET)</td><td>79</td><td>32-52-84</td></tr>
<tr><td>5</td><td>Auston Matthews (WPG)</td><td>82</td><td>41-42-83</td></tr>
<tr><td>6</td><td>Connor McDavid (VAN)</td><td>82</td><td>41-41-82</td></tr>
<tr><td>7</td><td>Claude Giroux (PHI)</td><td>82</td><td>29-52-81</td></tr>
<tr><td>8</td><td>Sam Gagner (EDM)</td><td>82</td><td>30-47-77</td></tr>
<tr><td>9</td><td>Jonathan Toews (CHI)</td><td>81</td><td>37-39-76</td></tr>
<tr><td>10</td><td>Sam Reinhart (NSH)</td><td>82</td><td>32-44-76</td></tr>
<tr><td>11</td><td>Nathan MacKinnon (CLB)</td><td>82</td><td>38-36-74</td></tr>
<tr><td>12</td><td>Matt Duchene (CGY)</td><td>82</td><td>37-36-73</td></tr>
<tr><td>13</td><td>Aleksander Barkov (NYR)</td><td>82</td><td>31-41-72</td></tr>
<tr><td>14</td><td>Robby Fabbri (COL)</td><td>77</td><td>30-42-72</td></tr>
<tr><td>15</td><td>Sidney Crosby (MTL)</td><td>76</td><td>36-35-71</td></tr>
<tr><td>16</td><td>Mitchell Marner (NSH)</td><td>82</td><td>30-41-71</td></tr>
<tr><td>17</td><td>Dylan Larkin (FLA)</td><td>82</td><td>30-41-71</td></tr>
<tr><td>18</td><td>Mathew Barzal (DAL)</td><td>82</td><td>29-42-71</td></tr>
<tr><td>19</td><td>Ryan O'Reilly (FLA)</td><td>81</td><td>25-45-70</td></tr>
<tr><td>20</td><td>Brad Marchand (BOS)</td><td>82</td><td>32-36-68</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Jeff Skinner (LOS)</td><td>82</td><td>46-43-89</td></tr>
<tr><td>2</td><td>Jaden Schwartz (DET)</td><td>79</td><td>32-52-84</td></tr>
<tr><td>3</td><td>Claude Giroux (PHI)</td><td>82</td><td>29-52-81</td></tr>
<tr><td>4</td><td>Andre Burakovsky (PIT)</td><td>82</td><td>29-49-78</td></tr>
<tr><td>5</td><td>Sam Gagner (EDM)</td><td>82</td><td>30-47-77</td></tr>
<tr><td>6</td><td>Taylor Hall (EDM)</td><td>82</td><td>36-37-73</td></tr>
<tr><td>7</td><td>David Pastrnak (FLA)</td><td>82</td><td>31-42-73</td></tr>
<tr><td>8</td><td>Robby Fabbri (COL)</td><td>77</td><td>30-42-72</td></tr>
<tr><td>9</td><td>Dylan Larkin (FLA)</td><td>82</td><td>30-41-71</td></tr>
<tr><td>10</td><td>Filip Forsberg (MTL)</td><td>82</td><td>31-39-70</td></tr>
<tr><td>11</td><td>Ryan O'Reilly (FLA)</td><td>81</td><td>25-45-70</td></tr>
<tr><td>12</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>29-40-69</td></tr>
<tr><td>13</td><td>Brad Marchand (BOS)</td><td>82</td><td>32-36-68</td></tr>
<tr><td>14</td><td>Clayton Keller (SJS)</td><td>82</td><td>35-31-66</td></tr>
<tr><td>15</td><td>Jake Guentzel (BOS)</td><td>81</td><td>24-41-65</td></tr>
<tr><td>16</td><td>Alex Galchenyuk (CGY)</td><td>79</td><td>27-37-64</td></tr>
<tr><td>17</td><td>Tobias Rieder (EDM)</td><td>82</td><td>30-33-63</td></tr>
<tr><td>18</td><td>Jonathan Drouin (BUF)</td><td>81</td><td>27-35-62</td></tr>
<tr><td>19</td><td>Valeri Nichushkin (STL)</td><td>81</td><td>25-37-62</td></tr>
<tr><td>20</td><td>Colin Wilson (COL)</td><td>83</td><td>24-38-62</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Steven Stamkos (ARZ)</td><td>82</td><td>44-42-86</td></tr>
<tr><td>2</td><td>Jaden Schwartz (DET)</td><td>79</td><td>32-52-84</td></tr>
<tr><td>3</td><td>Claude Giroux (PHI)</td><td>82</td><td>29-52-81</td></tr>
<tr><td>4</td><td>Andre Burakovsky (PIT)</td><td>82</td><td>29-49-78</td></tr>
<tr><td>5</td><td>Sam Gagner (EDM)</td><td>82</td><td>30-47-77</td></tr>
<tr><td>6</td><td>Sam Reinhart (NSH)</td><td>82</td><td>32-44-76</td></tr>
<tr><td>7</td><td>Nathan MacKinnon (CLB)</td><td>82</td><td>38-36-74</td></tr>
<tr><td>8</td><td>Matt Duchene (CGY)</td><td>82</td><td>37-36-73</td></tr>
<tr><td>9</td><td>David Pastrnak (FLA)</td><td>82</td><td>31-42-73</td></tr>
<tr><td>10</td><td>Mitchell Marner (NSH)</td><td>82</td><td>30-41-71</td></tr>
<tr><td>11</td><td>Filip Forsberg (MTL)</td><td>82</td><td>31-39-70</td></tr>
<tr><td>12</td><td>Ryan O'Reilly (FLA)</td><td>81</td><td>25-45-70</td></tr>
<tr><td>13</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>29-40-69</td></tr>
<tr><td>14</td><td>Nikita Kucherov (FLA)</td><td>82</td><td>29-40-69</td></tr>
<tr><td>15</td><td>Clayton Keller (SJS)</td><td>82</td><td>35-31-66</td></tr>
<tr><td>16</td><td>Alex Galchenyuk (CGY)</td><td>79</td><td>27-37-64</td></tr>
<tr><td>17</td><td>Tobias Rieder (EDM)</td><td>82</td><td>30-33-63</td></tr>
<tr><td>18</td><td>Leon Draisaitl (DAL)</td><td>82</td><td>30-32-62</td></tr>
<tr><td>19</td><td>Jonathan Drouin (BUF)</td><td>81</td><td>27-35-62</td></tr>
<tr><td>20</td><td>Valeri Nichushkin (STL)</td><td>81</td><td>25-37-62</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Drew Doughty (LOS)</td><td>82</td><td>12-73-85</td></tr>
<tr><td>2</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>19-58-77</td></tr>
<tr><td>3</td><td>Cam Fowler (ANH)</td><td>82</td><td>16-57-73</td></tr>
<tr><td>4</td><td>Brady Skjei (STL)</td><td>82</td><td>8-63-71</td></tr>
<tr><td>5</td><td>Zachary Werenski (ANH)</td><td>82</td><td>20-48-68</td></tr>
<tr><td>6</td><td>Kris Letang (VEG)</td><td>84</td><td>14-53-67</td></tr>
<tr><td>7</td><td>Victor Hedman (WPG)</td><td>82</td><td>10-57-67</td></tr>
<tr><td>8</td><td>Ryan Murray (PHI)</td><td>77</td><td>20-46-66</td></tr>
<tr><td>9</td><td>P.K. Subban (TBL)</td><td>82</td><td>20-46-66</td></tr>
<tr><td>10</td><td>John Klingberg (STL)</td><td>81</td><td>18-46-64</td></tr>
<tr><td>11</td><td>Justin Schultz (VEG)</td><td>75</td><td>17-47-64</td></tr>
<tr><td>12</td><td>Jacob Trouba (NJD)</td><td>81</td><td>17-47-64</td></tr>
<tr><td>13</td><td>Aaron Ekblad (FLA)</td><td>75</td><td>16-48-64</td></tr>
<tr><td>14</td><td>Nick Leddy (DET)</td><td>76</td><td>16-48-64</td></tr>
<tr><td>15</td><td>Charlie McAvoy (BOS)</td><td>78</td><td>12-51-63</td></tr>
<tr><td>16</td><td>Jack Johnson (SJS)</td><td>82</td><td>12-50-62</td></tr>
<tr><td>17</td><td>Torey Krug (MTL)</td><td>83</td><td>8-54-62</td></tr>
<tr><td>18</td><td>Morgan Rielly (TOR)</td><td>80</td><td>4-58-62</td></tr>
<tr><td>19</td><td>Vyacheslav Voynov (COL)</td><td>82</td><td>20-41-61</td></tr>
<tr><td>20</td><td>Dmitri Orlov (NSH)</td><td>82</td><td>14-47-61</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Steven Stamkos (ARZ)</td><td>82</td><td>1,17</td></tr>
<tr><td>2</td><td>Jaden Schwartz (DET)</td><td>79</td><td>1,12</td></tr>
<tr><td>3</td><td>Anze Kopitar (LOS)</td><td>82</td><td>1,10</td></tr>
<tr><td>4</td><td>Jeff Skinner (LOS)</td><td>82</td><td>1,09</td></tr>
<tr><td>5</td><td>Claude Giroux (PHI)</td><td>82</td><td>1,05</td></tr>
<tr><td>6</td><td>Sean Monahan (COL)</td><td>82</td><td>1,04</td></tr>
<tr><td>7</td><td>Connor McDavid (VAN)</td><td>82</td><td>1,01</td></tr>
<tr><td>8</td><td>Auston Matthews (WPG)</td><td>82</td><td>0,98</td></tr>
<tr><td>9</td><td>Andre Burakovsky (PIT)</td><td>82</td><td>0,96</td></tr>
<tr><td>10</td><td>Matt Duchene (CGY)</td><td>82</td><td>0,96</td></tr>
<tr><td>11</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>0,95</td></tr>
<tr><td>12</td><td>Dylan Larkin (FLA)</td><td>82</td><td>0,95</td></tr>
<tr><td>13</td><td>Sam Reinhart (NSH)</td><td>82</td><td>0,95</td></tr>
<tr><td>14</td><td>Robby Fabbri (COL)</td><td>77</td><td>0,95</td></tr>
<tr><td>15</td><td>Sidney Crosby (MTL)</td><td>76</td><td>0,94</td></tr>
<tr><td>16</td><td>Nathan MacKinnon (CLB)</td><td>82</td><td>0,94</td></tr>
<tr><td>17</td><td>Alex Galchenyuk (CGY)</td><td>79</td><td>0,94</td></tr>
<tr><td>18</td><td>Filip Forsberg (MTL)</td><td>82</td><td>0,93</td></tr>
<tr><td>19</td><td>Emerson Etem (TOR)</td><td>82</td><td>0,93</td></tr>
<tr><td>20</td><td>Sam Gagner (EDM)</td><td>82</td><td>0,92</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Jonathan Toews (CHI)</td><td>81</td><td>58,08%</td></tr>
<tr><td>2</td><td>Brian Boyle (DAL)</td><td>78</td><td>57,05%</td></tr>
<tr><td>3</td><td>Marcus Kruger (VEG)</td><td>77</td><td>56,83%</td></tr>
<tr><td>4</td><td>Sidney Crosby (MTL)</td><td>76</td><td>56,45%</td></tr>
<tr><td>5</td><td>Ryan Kesler (MTL)</td><td>82</td><td>55,94%</td></tr>
<tr><td>6</td><td>Patrice Bergeron (NJD)</td><td>82</td><td>55,65%</td></tr>
<tr><td>7</td><td>Ryan Nugent-Hopkins (PHI)</td><td>70</td><td>55,47%</td></tr>
<tr><td>8</td><td>Paul Stastny (SJS)</td><td>77</td><td>55,37%</td></tr>
<tr><td>9</td><td>Travis Zajac (PIT)</td><td>55</td><td>55,30%</td></tr>
<tr><td>10</td><td>Evgeny Grachev (COL)</td><td>79</td><td>55,28%</td></tr>
<tr><td>11</td><td>Jason Spezza (WPG)</td><td>69</td><td>55,27%</td></tr>
<tr><td>12</td><td>Tyler Bozak (LOS)</td><td>82</td><td>55,02%</td></tr>
<tr><td>13</td><td>Nicklas Backstrom (CLB)</td><td>84</td><td>54,69%</td></tr>
<tr><td>14</td><td>John Tavares (ARZ)</td><td>82</td><td>54,66%</td></tr>
<tr><td>15</td><td>Nazem Kadri (STL)</td><td>82</td><td>54,58%</td></tr>
<tr><td>16</td><td>Mikko Koivu (TOR)</td><td>82</td><td>54,46%</td></tr>
<tr><td>17</td><td>Frédérik Gauthier (BOS)</td><td>82</td><td>54,35%</td></tr>
<tr><td>18</td><td>Josh Bailey (PIT)</td><td>80</td><td>54,30%</td></tr>
<tr><td>19</td><td>Claude Giroux (PHI)</td><td>82</td><td>54,28%</td></tr>
<tr><td>20</td><td>Tyler Seguin (TBL)</td><td>80</td><td>54,09%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (LOS)</td><td>82</td><td>37</td></tr>
<tr><td>2</td><td>Xavier Ouellet (VEG)</td><td>75</td><td>30</td></tr>
<tr><td>3</td><td>Blake Wheeler (WPG)</td><td>81</td><td>25</td></tr>
<tr><td>4</td><td>Jeff Skinner (LOS)</td><td>82</td><td>25</td></tr>
<tr><td>5</td><td>Steven Stamkos (ARZ)</td><td>82</td><td>25</td></tr>
<tr><td>6</td><td>Jaden Schwartz (DET)</td><td>79</td><td>24</td></tr>
<tr><td>7</td><td>Alex Galchenyuk (CGY)</td><td>79</td><td>24</td></tr>
<tr><td>8</td><td>Mac Weegar (PIT)</td><td>79</td><td>24</td></tr>
<tr><td>9</td><td>Evander Kane (TBL)</td><td>82</td><td>23</td></tr>
<tr><td>10</td><td>Nick Bjugstad (FLA)</td><td>82</td><td>23</td></tr>
<tr><td>11</td><td>Sean Couturier (DAL)</td><td>81</td><td>22</td></tr>
<tr><td>12</td><td>Roman Josi (DET)</td><td>81</td><td>22</td></tr>
<tr><td>13</td><td>Bo Horvat (ARZ)</td><td>82</td><td>22</td></tr>
<tr><td>14</td><td>Derek Forbort (LOS)</td><td>79</td><td>21</td></tr>
<tr><td>15</td><td>Mikko Vainonen (EDM)</td><td>82</td><td>21</td></tr>
<tr><td>16</td><td>David Backes (CHI)</td><td>81</td><td>20</td></tr>
<tr><td>17</td><td>Nick Schmaltz (PHI)</td><td>82</td><td>20</td></tr>
<tr><td>18</td><td>Dougie Hamilton (VAN)</td><td>82</td><td>20</td></tr>
<tr><td>19</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>20</td></tr>
<tr><td>20</td><td>Kailer Yamamoto (EDM)</td><td>82</td><td>20</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Drew Doughty (LOS)</td><td>82</td><td>138</td></tr>
<tr><td>2</td><td>Zach Bogosian (ARZ)</td><td>82</td><td>122</td></tr>
<tr><td>3</td><td>Jamie Oleksiak (STL)</td><td>83</td><td>120</td></tr>
<tr><td>4</td><td>Petteri Lindbohm (TOR)</td><td>75</td><td>118</td></tr>
<tr><td>5</td><td>Colten Teubert (EDM)</td><td>82</td><td>116</td></tr>
<tr><td>6</td><td>Seth Jones (NYI)</td><td>79</td><td>112</td></tr>
<tr><td>7</td><td>Tyler Myers (BUF)</td><td>81</td><td>109</td></tr>
<tr><td>8</td><td>Aaron Ekblad (FLA)</td><td>75</td><td>107</td></tr>
<tr><td>9</td><td>Vyacheslav Voynov (COL)</td><td>82</td><td>107</td></tr>
<tr><td>10</td><td>Dylan McIlrath (SJS)</td><td>79</td><td>106</td></tr>
<tr><td>11</td><td>Jani Hakanpaa (COL)</td><td>82</td><td>106</td></tr>
<tr><td>12</td><td>Jarred Tinordi (ANH)</td><td>77</td><td>103</td></tr>
<tr><td>13</td><td>Joel Edmundson (FLA)</td><td>82</td><td>102</td></tr>
<tr><td>14</td><td>Luca Sbisa (CHI)</td><td>82</td><td>102</td></tr>
<tr><td>15</td><td>Brent Seabrook (CLB)</td><td>82</td><td>100</td></tr>
<tr><td>16</td><td>Simon Despres (TBL)</td><td>82</td><td>99</td></tr>
<tr><td>17</td><td>Darren Dietz (PIT)</td><td>84</td><td>98</td></tr>
<tr><td>18</td><td>Luke Schenn (SJS)</td><td>81</td><td>96</td></tr>
<tr><td>19</td><td>Duncan Siemens (DAL)</td><td>81</td><td>95</td></tr>
<tr><td>20</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>95</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>158</td></tr>
<tr><td>2</td><td>Yann Sauve (COL)</td><td>82</td><td>151</td></tr>
<tr><td>3</td><td>Jacob Trouba (NJD)</td><td>81</td><td>143</td></tr>
<tr><td>4</td><td>Joel Edmundson (FLA)</td><td>82</td><td>143</td></tr>
<tr><td>5</td><td>Shea Weber (DAL)</td><td>82</td><td>143</td></tr>
<tr><td>6</td><td>Drew Doughty (LOS)</td><td>82</td><td>140</td></tr>
<tr><td>7</td><td>Brady Skjei (STL)</td><td>82</td><td>140</td></tr>
<tr><td>8</td><td>Travis Hamonic (CGY)</td><td>82</td><td>138</td></tr>
<tr><td>9</td><td>Jani Hakanpaa (COL)</td><td>82</td><td>137</td></tr>
<tr><td>10</td><td>Jake Dotchin (SEA)</td><td>76</td><td>136</td></tr>
<tr><td>11</td><td>Alexander Urbom (CLB)</td><td>80</td><td>135</td></tr>
<tr><td>12</td><td>Jack Johnson (SJS)</td><td>82</td><td>135</td></tr>
<tr><td>13</td><td>Victor Hedman (WPG)</td><td>82</td><td>135</td></tr>
<tr><td>14</td><td>Alexander Edler (ANH)</td><td>82</td><td>133</td></tr>
<tr><td>15</td><td>Simon Despres (TBL)</td><td>82</td><td>131</td></tr>
<tr><td>16</td><td>Niklas Hjalmarsson (CLB)</td><td>74</td><td>130</td></tr>
<tr><td>17</td><td>Ryan Murray (PHI)</td><td>77</td><td>129</td></tr>
<tr><td>18</td><td>Oscar Klefbom (DET)</td><td>81</td><td>129</td></tr>
<tr><td>19</td><td>Ryan McDonagh (NYR)</td><td>82</td><td>129</td></tr>
<tr><td>20</td><td>Esa Lindell (TBL)</td><td>82</td><td>128</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Anthony DeAngelo (PIT)</td><td>83</td><td>11-39-50</td></tr>
<tr><td>2</td><td>Jordan Subban (LOS)</td><td>82</td><td>11-36-47</td></tr>
<tr><td>3</td><td>Rasmus Sandin (FLA)</td><td>81</td><td>7-38-45</td></tr>
<tr><td>4</td><td>Dominik Kubalik (MTL)</td><td>79</td><td>19-25-44</td></tr>
<tr><td>5</td><td>Quinn Hughes (TBL)</td><td>71</td><td>11-33-44</td></tr>
<tr><td>6</td><td>Oskar Lindblom (ARZ)</td><td>82</td><td>20-19-39</td></tr>
<tr><td>7</td><td>Pavel Zacha (FLA)</td><td>68</td><td>15-22-37</td></tr>
<tr><td>8</td><td>Jake DeBrusk (PIT)</td><td>68</td><td>15-22-37</td></tr>
<tr><td>9</td><td>Casey Mittelstadt (PHI)</td><td>75</td><td>18-18-36</td></tr>
<tr><td>10</td><td>Andreas Borgman (STL)</td><td>65</td><td>7-26-33</td></tr>
<tr><td>11</td><td>Miles Wood (LOS)</td><td>82</td><td>16-16-32</td></tr>
<tr><td>12</td><td>Dominik Kahun (WSH)</td><td>82</td><td>11-21-32</td></tr>
<tr><td>13</td><td>Tyson Jost (NYR)</td><td>81</td><td>11-19-30</td></tr>
<tr><td>14</td><td>Victor Olofsson (PIT)</td><td>67</td><td>12-17-29</td></tr>
<tr><td>15</td><td>Jordan Greenway (DET)</td><td>72</td><td>10-17-27</td></tr>
<tr><td>16</td><td>Lawson Crouse (ANH)</td><td>83</td><td>14-12-26</td></tr>
<tr><td>17</td><td>John Quenneville (SEA)</td><td>60</td><td>13-13-26</td></tr>
<tr><td>18</td><td>Matt Roy (DAL)</td><td>86</td><td>8-18-26</td></tr>
<tr><td>19</td><td>Erik Cernak (VAN)</td><td>82</td><td>5-21-26</td></tr>
<tr><td>20</td><td>A.J. Greer (SJS)</td><td>82</td><td>14-10-24</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Adam Erne (BUF)</td><td>82</td><td>258</td></tr>
<tr><td>2</td><td>Ryan Callahan (EDM)</td><td>82</td><td>254</td></tr>
<tr><td>3</td><td>William Carrier (CHI)</td><td>82</td><td>241</td></tr>
<tr><td>4</td><td>Pierre-Luc Dubois (PHI)</td><td>82</td><td>227</td></tr>
<tr><td>5</td><td>Brad Marchand (BOS)</td><td>82</td><td>221</td></tr>
<tr><td>6</td><td>Travis Hamonic (CGY)</td><td>82</td><td>213</td></tr>
<tr><td>7</td><td>Tyler Myers (BUF)</td><td>81</td><td>209</td></tr>
<tr><td>8</td><td>Seth Jones (NYI)</td><td>79</td><td>206</td></tr>
<tr><td>9</td><td>Bobby Ryan (BOS)</td><td>80</td><td>203</td></tr>
<tr><td>10</td><td>Alex Ovechkin (MTL)</td><td>83</td><td>203</td></tr>
<tr><td>11</td><td>Anthony Camara (CAR)</td><td>82</td><td>202</td></tr>
<tr><td>12</td><td>Luca Sbisa (CHI)</td><td>82</td><td>201</td></tr>
<tr><td>13</td><td>Tyler Bertuzzi (NYR)</td><td>82</td><td>201</td></tr>
<tr><td>14</td><td>Nathan MacKinnon (CLB)</td><td>82</td><td>200</td></tr>
<tr><td>15</td><td>Evander Kane (TBL)</td><td>82</td><td>197</td></tr>
<tr><td>16</td><td>Jamie Oleksiak (STL)</td><td>83</td><td>195</td></tr>
<tr><td>17</td><td>Robby Fabbri (COL)</td><td>77</td><td>194</td></tr>
<tr><td>18</td><td>Jack Johnson (SJS)</td><td>82</td><td>194</td></tr>
<tr><td>19</td><td>Brendan Smith (QUE)</td><td>82</td><td>194</td></tr>
<tr><td>20</td><td>Luke Schenn (SJS)</td><td>81</td><td>191</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Jeff Skinner (LOS)</td><td>82</td><td>14</td></tr>
<tr><td>2</td><td>Vyacheslav Voynov (COL)</td><td>82</td><td>14</td></tr>
<tr><td>3</td><td>Mikko Rantanen (TOR)</td><td>75</td><td>13</td></tr>
<tr><td>4</td><td>Anze Kopitar (LOS)</td><td>82</td><td>13</td></tr>
<tr><td>5</td><td>Mike Reilly (QUE)</td><td>75</td><td>12</td></tr>
<tr><td>6</td><td>Alexander Burmistrov (WPG)</td><td>81</td><td>12</td></tr>
<tr><td>7</td><td>Joe Morrow (SEA)</td><td>81</td><td>12</td></tr>
<tr><td>8</td><td>Auston Matthews (WPG)</td><td>82</td><td>12</td></tr>
<tr><td>9</td><td>Cam Fowler (ANH)</td><td>82</td><td>12</td></tr>
<tr><td>10</td><td>Gabriel Landeskog (WPG)</td><td>82</td><td>12</td></tr>
<tr><td>11</td><td>Ryan Murray (PHI)</td><td>77</td><td>11</td></tr>
<tr><td>12</td><td>Artemi Panarin (STL)</td><td>81</td><td>11</td></tr>
<tr><td>13</td><td>John Klingberg (STL)</td><td>81</td><td>11</td></tr>
<tr><td>14</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>11</td></tr>
<tr><td>15</td><td>Leon Draisaitl (DAL)</td><td>82</td><td>11</td></tr>
<tr><td>16</td><td>Logan Couture (ARZ)</td><td>82</td><td>11</td></tr>
<tr><td>17</td><td>P.K. Subban (TBL)</td><td>82</td><td>11</td></tr>
<tr><td>18</td><td>Aaron Ekblad (FLA)</td><td>75</td><td>10</td></tr>
<tr><td>19</td><td>Jonas Brodin (CLB)</td><td>79</td><td>10</td></tr>
<tr><td>20</td><td>Jacob Trouba (NJD)</td><td>81</td><td>10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Jonathan Toews (CHI)</td><td>81</td><td>4</td></tr>
<tr><td>2</td><td>Logan Couture (ARZ)</td><td>82</td><td>3</td></tr>
<tr><td>3</td><td>Justin Holl (CHI)</td><td>59</td><td>2</td></tr>
<tr><td>4</td><td>Drake Caggiula (SEA)</td><td>63</td><td>2</td></tr>
<tr><td>5</td><td>Phillip Danault (FLA)</td><td>73</td><td>2</td></tr>
<tr><td>6</td><td>Byron Froese (MIN)</td><td>75</td><td>2</td></tr>
<tr><td>7</td><td>Remi Elie (CLB)</td><td>76</td><td>2</td></tr>
<tr><td>8</td><td>Cole Cassels (ARZ)</td><td>80</td><td>2</td></tr>
<tr><td>9</td><td>Kyle Clifford (FLA)</td><td>82</td><td>2</td></tr>
<tr><td>10</td><td>Ryan Callahan (EDM)</td><td>82</td><td>2</td></tr>
<tr><td>11</td><td>Alexander Wennberg (TBL)</td><td>82</td><td>2</td></tr>
<tr><td>12</td><td>William Carrier (CHI)</td><td>82</td><td>2</td></tr>
<tr><td>13</td><td>Chris Tierney (CGY)</td><td>82</td><td>2</td></tr>
<tr><td>14</td><td>Derek Ryan (CLB)</td><td>17</td><td>1</td></tr>
<tr><td>15</td><td>Gabriel Bourque (NYI)</td><td>44</td><td>1</td></tr>
<tr><td>16</td><td>T.J. Galiardi (COL)</td><td>46</td><td>1</td></tr>
<tr><td>17</td><td>Tomas Plekanec (STL)</td><td>63</td><td>1</td></tr>
<tr><td>18</td><td>Eric Robinson (SEA)</td><td>66</td><td>1</td></tr>
<tr><td>19</td><td>Danton Heinen (MTL)</td><td>69</td><td>1</td></tr>
<tr><td>20</td><td>Brandon McMillan (MIN)</td><td>71</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Auston Matthews (WPG)</td><td>82</td><td>12</td></tr>
<tr><td>2</td><td>Robby Fabbri (COL)</td><td>77</td><td>10</td></tr>
<tr><td>3</td><td>Claude Giroux (PHI)</td><td>82</td><td>9</td></tr>
<tr><td>4</td><td>Jeff Skinner (LOS)</td><td>82</td><td>9</td></tr>
<tr><td>5</td><td>Taylor Hall (EDM)</td><td>82</td><td>9</td></tr>
<tr><td>6</td><td>Andre Burakovsky (PIT)</td><td>82</td><td>9</td></tr>
<tr><td>7</td><td>Matt Duchene (CGY)</td><td>82</td><td>8</td></tr>
<tr><td>8</td><td>Sam Gagner (EDM)</td><td>82</td><td>8</td></tr>
<tr><td>9</td><td>Gabriel Landeskog (WPG)</td><td>82</td><td>8</td></tr>
<tr><td>10</td><td>Nathan MacKinnon (CLB)</td><td>82</td><td>8</td></tr>
<tr><td>11</td><td>Marcus Johansson (CGY)</td><td>84</td><td>8</td></tr>
<tr><td>12</td><td>Ryan Johansen (OTT)</td><td>79</td><td>7</td></tr>
<tr><td>13</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>7</td></tr>
<tr><td>14</td><td>Brad Marchand (BOS)</td><td>82</td><td>7</td></tr>
<tr><td>15</td><td>Evgeny Dadonov (CHI)</td><td>82</td><td>7</td></tr>
<tr><td>16</td><td>Matthew Nieto (SJS)</td><td>82</td><td>7</td></tr>
<tr><td>17</td><td>Jaden Schwartz (DET)</td><td>79</td><td>6</td></tr>
<tr><td>18</td><td>Patrick Kane (VEG)</td><td>81</td><td>6</td></tr>
<tr><td>19</td><td>Anze Kopitar (LOS)</td><td>82</td><td>6</td></tr>
<tr><td>20</td><td>Leon Draisaitl (DAL)</td><td>82</td><td>6</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>T.J. Oshie (ARZ)</td><td>70</td><td>5</td></tr>
<tr><td>2</td><td>Sean Monahan (COL)</td><td>82</td><td>5</td></tr>
<tr><td>3</td><td>Anze Kopitar (LOS)</td><td>82</td><td>4</td></tr>
<tr><td>4</td><td>Auston Matthews (WPG)</td><td>82</td><td>4</td></tr>
<tr><td>5</td><td>Max Pacioretty (SEA)</td><td>82</td><td>4</td></tr>
<tr><td>6</td><td>Tobias Rieder (EDM)</td><td>82</td><td>4</td></tr>
<tr><td>7</td><td>Ryan Nugent-Hopkins (PHI)</td><td>70</td><td>3</td></tr>
<tr><td>8</td><td>Casey Mittelstadt (PHI)</td><td>75</td><td>3</td></tr>
<tr><td>9</td><td>Brandon Saad (CAR)</td><td>78</td><td>3</td></tr>
<tr><td>10</td><td>Alex Galchenyuk (CGY)</td><td>79</td><td>3</td></tr>
<tr><td>11</td><td>Anthony Mantha (LOS)</td><td>79</td><td>3</td></tr>
<tr><td>12</td><td>Blake Wheeler (WPG)</td><td>81</td><td>3</td></tr>
<tr><td>13</td><td>Jonathan Toews (CHI)</td><td>81</td><td>3</td></tr>
<tr><td>14</td><td>Patrick Kane (VEG)</td><td>81</td><td>3</td></tr>
<tr><td>15</td><td>Valeri Nichushkin (STL)</td><td>81</td><td>3</td></tr>
<tr><td>16</td><td>Brock Boeser (ANH)</td><td>81</td><td>3</td></tr>
<tr><td>17</td><td>Drew Doughty (LOS)</td><td>82</td><td>3</td></tr>
<tr><td>18</td><td>Jeff Skinner (LOS)</td><td>82</td><td>3</td></tr>
<tr><td>19</td><td>Jordan Eberle (BUF)</td><td>82</td><td>3</td></tr>
<tr><td>20</td><td>Brayden Point (NYR)</td><td>82</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Kevin Hayes (LOS)</td><td>80</td><td>4</td></tr>
<tr><td>2</td><td>Frédérik Gauthier (BOS)</td><td>82</td><td>3</td></tr>
<tr><td>3</td><td>Jason Spezza (WPG)</td><td>69</td><td>2</td></tr>
<tr><td>4</td><td>Zach Sanford (ANH)</td><td>78</td><td>2</td></tr>
<tr><td>5</td><td>Jonathan Toews (CHI)</td><td>81</td><td>2</td></tr>
<tr><td>6</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>2</td></tr>
<tr><td>7</td><td>Joachim Nermark (COL)</td><td>82</td><td>2</td></tr>
<tr><td>8</td><td>Oliver Bjorkstrand (NSH)</td><td>82</td><td>2</td></tr>
<tr><td>9</td><td>Riley Barber (CGY)</td><td>9</td><td>1</td></tr>
<tr><td>10</td><td>Jordan Staal (LOS)</td><td>45</td><td>1</td></tr>
<tr><td>11</td><td>Travis Brown (PHI)</td><td>58</td><td>1</td></tr>
<tr><td>12</td><td>Justin Holl (CHI)</td><td>59</td><td>1</td></tr>
<tr><td>13</td><td>John Quenneville (SEA)</td><td>60</td><td>1</td></tr>
<tr><td>14</td><td>Adrian Kempe (CGY)</td><td>66</td><td>1</td></tr>
<tr><td>15</td><td>Aaron Ness (MIN)</td><td>69</td><td>1</td></tr>
<tr><td>16</td><td>Brandon McMillan (MIN)</td><td>71</td><td>1</td></tr>
<tr><td>17</td><td>Vladislav Namestnikov (WSH)</td><td>73</td><td>1</td></tr>
<tr><td>18</td><td>Byron Froese (MIN)</td><td>75</td><td>1</td></tr>
<tr><td>19</td><td>Sidney Crosby (MTL)</td><td>76</td><td>1</td></tr>
<tr><td>20</td><td>Jakub Voracek (BUF)</td><td>77</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Kris Letang (VEG)</td><td>84</td><td>2 046</td></tr>
<tr><td>2</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>2 005</td></tr>
<tr><td>3</td><td>Morgan Rielly (TOR)</td><td>80</td><td>2 002</td></tr>
<tr><td>4</td><td>Travis Hamonic (CGY)</td><td>82</td><td>1 988</td></tr>
<tr><td>5</td><td>T.J. Brennan (NJD)</td><td>82</td><td>1 973</td></tr>
<tr><td>6</td><td>Jacob Trouba (NJD)</td><td>81</td><td>1 967</td></tr>
<tr><td>7</td><td>Jack Johnson (SJS)</td><td>82</td><td>1 963</td></tr>
<tr><td>8</td><td>Colton Parayko (NSH)</td><td>84</td><td>1 958</td></tr>
<tr><td>9</td><td>John Carlson (BOS)</td><td>82</td><td>1 956</td></tr>
<tr><td>10</td><td>Victor Hedman (WPG)</td><td>82</td><td>1 951</td></tr>
<tr><td>11</td><td>Drew Doughty (LOS)</td><td>82</td><td>1 932</td></tr>
<tr><td>12</td><td>Vyacheslav Voynov (COL)</td><td>82</td><td>1 929</td></tr>
<tr><td>13</td><td>Shea Weber (DAL)</td><td>82</td><td>1 924</td></tr>
<tr><td>14</td><td>Zach Bogosian (ARZ)</td><td>82</td><td>1 903</td></tr>
<tr><td>15</td><td>Ryan Murphy (MIN)</td><td>82</td><td>1 896</td></tr>
<tr><td>16</td><td>Keith Yandle (SJS)</td><td>82</td><td>1 887</td></tr>
<tr><td>17</td><td>Erik Johnson (VEG)</td><td>82</td><td>1 861</td></tr>
<tr><td>18</td><td>Brady Skjei (STL)</td><td>82</td><td>1 860</td></tr>
<tr><td>19</td><td>Oliver Ekman-Larsson (BOS)</td><td>81</td><td>1 853</td></tr>
<tr><td>20</td><td>Yann Sauve (COL)</td><td>82</td><td>1 851</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Zemgus Girgensons (VAN)</td><td>73</td><td>2</td></tr>
<tr><td>2</td><td>Josh Bailey (PIT)</td><td>80</td><td>2</td></tr>
<tr><td>3</td><td>Auston Matthews (WPG)</td><td>82</td><td>2</td></tr>
<tr><td>4</td><td>Taylor Hall (EDM)</td><td>82</td><td>2</td></tr>
<tr><td>5</td><td>Clayton Keller (SJS)</td><td>82</td><td>2</td></tr>
<tr><td>6</td><td>JC Lipon (MIN)</td><td>82</td><td>2</td></tr>
<tr><td>7</td><td>Drake Batherson (NSH)</td><td>38</td><td>1</td></tr>
<tr><td>8</td><td>Erik Karlsson (OTT)</td><td>53</td><td>1</td></tr>
<tr><td>9</td><td>Quinn Hughes (TBL)</td><td>71</td><td>1</td></tr>
<tr><td>10</td><td>Mike Reilly (QUE)</td><td>75</td><td>1</td></tr>
<tr><td>11</td><td>Tomas Hertl (DET)</td><td>75</td><td>1</td></tr>
<tr><td>12</td><td>Nick Leddy (DET)</td><td>76</td><td>1</td></tr>
<tr><td>13</td><td>Viktor Arvidsson (NYR)</td><td>76</td><td>1</td></tr>
<tr><td>14</td><td>Sidney Crosby (MTL)</td><td>76</td><td>1</td></tr>
<tr><td>15</td><td>Vince Dunn (NYI)</td><td>76</td><td>1</td></tr>
<tr><td>16</td><td>Matthew Peca (QUE)</td><td>77</td><td>1</td></tr>
<tr><td>17</td><td>Jaden Schwartz (DET)</td><td>79</td><td>1</td></tr>
<tr><td>18</td><td>Alex Galchenyuk (CGY)</td><td>79</td><td>1</td></tr>
<tr><td>19</td><td>Bobby Ryan (BOS)</td><td>80</td><td>1</td></tr>
<tr><td>20</td><td>Tyler Seguin (TBL)</td><td>80</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>5</td></tr>
<tr><td>2</td><td>Alex Tuch (QUE)</td><td>82</td><td>4</td></tr>
<tr><td>3</td><td>Mark Stone (STL)</td><td>81</td><td>3</td></tr>
<tr><td>4</td><td>Ty Rattie (NSH)</td><td>85</td><td>3</td></tr>
<tr><td>5</td><td>Tim Stützle (VEG)</td><td>31</td><td>2</td></tr>
<tr><td>6</td><td>Greg McKegg (SEA)</td><td>68</td><td>2</td></tr>
<tr><td>7</td><td>Quinton Howden (WSH)</td><td>74</td><td>2</td></tr>
<tr><td>8</td><td>Mikhail Grigorenko (BUF)</td><td>79</td><td>2</td></tr>
<tr><td>9</td><td>Jonathan Toews (CHI)</td><td>81</td><td>2</td></tr>
<tr><td>10</td><td>Ryan O'Reilly (FLA)</td><td>81</td><td>2</td></tr>
<tr><td>11</td><td>Duncan Siemens (DAL)</td><td>81</td><td>2</td></tr>
<tr><td>12</td><td>Brad Marchand (BOS)</td><td>82</td><td>2</td></tr>
<tr><td>13</td><td>Corey Perry (LOS)</td><td>82</td><td>2</td></tr>
<tr><td>14</td><td>Kyle Turris (PIT)</td><td>82</td><td>2</td></tr>
<tr><td>15</td><td>Magnus Paajarvi (COL)</td><td>82</td><td>2</td></tr>
<tr><td>16</td><td>Artturi Lehkonen (SJS)</td><td>82</td><td>2</td></tr>
<tr><td>17</td><td>Patrice Bergeron (NJD)</td><td>82</td><td>2</td></tr>
<tr><td>18</td><td>Travis Hamonic (CGY)</td><td>82</td><td>2</td></tr>
<tr><td>19</td><td>Tobias Rieder (EDM)</td><td>82</td><td>2</td></tr>
<tr><td>20</td><td>Joachim Nermark (COL)</td><td>82</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Drew Doughty (LOS)</td><td>82</td><td>11</td></tr>
<tr><td>2</td><td>Brad Marchand (BOS)</td><td>82</td><td>8</td></tr>
<tr><td>3</td><td>Alex DeBrincat (WSH)</td><td>82</td><td>8</td></tr>
<tr><td>4</td><td>Jonathan Huberdeau (FLA)</td><td>82</td><td>8</td></tr>
<tr><td>5</td><td>Thomas Chabot (CGY)</td><td>80</td><td>7</td></tr>
<tr><td>6</td><td>Matt Duchene (CGY)</td><td>82</td><td>6</td></tr>
<tr><td>7</td><td>Brayden Point (NYR)</td><td>82</td><td>6</td></tr>
<tr><td>8</td><td>Filip Forsberg (MTL)</td><td>82</td><td>6</td></tr>
<tr><td>9</td><td>Jake Guentzel (BOS)</td><td>81</td><td>5</td></tr>
<tr><td>10</td><td>Ryan O'Reilly (FLA)</td><td>81</td><td>5</td></tr>
<tr><td>11</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>5</td></tr>
<tr><td>12</td><td>Ivan Provorov (NYR)</td><td>82</td><td>5</td></tr>
<tr><td>13</td><td>Dmitri Orlov (NSH)</td><td>82</td><td>5</td></tr>
<tr><td>14</td><td>Dougie Hamilton (VAN)</td><td>82</td><td>5</td></tr>
<tr><td>15</td><td>Nikolaj Ehlers (VAN)</td><td>82</td><td>5</td></tr>
<tr><td>16</td><td>Connor McDavid (VAN)</td><td>82</td><td>5</td></tr>
<tr><td>17</td><td>Torey Krug (MTL)</td><td>83</td><td>5</td></tr>
<tr><td>18</td><td>Marcus Johansson (CGY)</td><td>84</td><td>5</td></tr>
<tr><td>19</td><td>Devon Toews (COL)</td><td>74</td><td>4</td></tr>
<tr><td>20</td><td>Sidney Crosby (MTL)</td><td>76</td><td>4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Jonathan Toews (CHI)</td><td>81</td><td>267</td></tr>
<tr><td>2</td><td>Sean Couturier (DAL)</td><td>81</td><td>209</td></tr>
<tr><td>3</td><td>Patrice Bergeron (NJD)</td><td>82</td><td>207</td></tr>
<tr><td>4</td><td>Claude Giroux (PHI)</td><td>82</td><td>206</td></tr>
<tr><td>5</td><td>Nicklas Backstrom (CLB)</td><td>84</td><td>204</td></tr>
<tr><td>6</td><td>Mathew Barzal (DAL)</td><td>82</td><td>199</td></tr>
<tr><td>7</td><td>Sean Monahan (COL)</td><td>82</td><td>197</td></tr>
<tr><td>8</td><td>Anze Kopitar (LOS)</td><td>82</td><td>195</td></tr>
<tr><td>9</td><td>Sam Gagner (EDM)</td><td>82</td><td>195</td></tr>
<tr><td>10</td><td>Connor McDavid (VAN)</td><td>82</td><td>194</td></tr>
<tr><td>11</td><td>Sidney Crosby (MTL)</td><td>76</td><td>191</td></tr>
<tr><td>12</td><td>Auston Matthews (WPG)</td><td>82</td><td>191</td></tr>
<tr><td>13</td><td>Nico Hischier (BOS)</td><td>82</td><td>187</td></tr>
<tr><td>14</td><td>Jack Eichel (NJD)</td><td>82</td><td>186</td></tr>
<tr><td>15</td><td>Bryan Little (CGY)</td><td>80</td><td>183</td></tr>
<tr><td>16</td><td>Tobias Rieder (EDM)</td><td>82</td><td>183</td></tr>
<tr><td>17</td><td>Matt Duchene (CGY)</td><td>82</td><td>177</td></tr>
<tr><td>18</td><td>Joachim Nermark (COL)</td><td>82</td><td>177</td></tr>
<tr><td>19</td><td>Ryan Kesler (MTL)</td><td>82</td><td>176</td></tr>
<tr><td>20</td><td>Tyler Seguin (TBL)</td><td>80</td><td>174</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Jack Eichel (NJD)</td><td>82</td><td>6</td></tr>
<tr><td>2</td><td>Sidney Crosby (MTL)</td><td>76</td><td>4</td></tr>
<tr><td>3</td><td>Brett Connolly (QUE)</td><td>82</td><td>4</td></tr>
<tr><td>4</td><td>Maxim Mamin (SEA)</td><td>26</td><td>3</td></tr>
<tr><td>5</td><td>Bobby Ryan (BOS)</td><td>80</td><td>3</td></tr>
<tr><td>6</td><td>Corey Perry (LOS)</td><td>82</td><td>3</td></tr>
<tr><td>7</td><td>Jamie Benn (BOS)</td><td>82</td><td>3</td></tr>
<tr><td>8</td><td>Max Pacioretty (SEA)</td><td>82</td><td>3</td></tr>
<tr><td>9</td><td>Anton Slepyshev (SEA)</td><td>82</td><td>3</td></tr>
<tr><td>10</td><td>Ryan Strome (ANH)</td><td>82</td><td>3</td></tr>
<tr><td>11</td><td>Teemu Pulkkinen (TOR)</td><td>82</td><td>3</td></tr>
<tr><td>12</td><td>Alex Ovechkin (MTL)</td><td>83</td><td>3</td></tr>
<tr><td>13</td><td>Patrik Laine (VEG)</td><td>83</td><td>3</td></tr>
<tr><td>14</td><td>Tom Kuhnhackl (QUE)</td><td>39</td><td>2</td></tr>
<tr><td>15</td><td>Gabriel Gagné (QUE)</td><td>39</td><td>2</td></tr>
<tr><td>16</td><td>Jack Hughes (OTT)</td><td>50</td><td>2</td></tr>
<tr><td>17</td><td>Jakob Silfverberg (CAR)</td><td>52</td><td>2</td></tr>
<tr><td>18</td><td>Saku Maenalanen (TOR)</td><td>57</td><td>2</td></tr>
<tr><td>19</td><td>Pavel Zacha (FLA)</td><td>68</td><td>2</td></tr>
<tr><td>20</td><td>T.J. Oshie (ARZ)</td><td>70</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Dylan Olsen (BUF)</td><td>82</td><td>3</td></tr>
<tr><td>2</td><td>Drake Batherson (NSH)</td><td>38</td><td>2</td></tr>
<tr><td>3</td><td>Charlie McAvoy (BOS)</td><td>78</td><td>2</td></tr>
<tr><td>4</td><td>Brayden Schenn (TBL)</td><td>80</td><td>2</td></tr>
<tr><td>5</td><td>Dillon Fournier (QUE)</td><td>80</td><td>2</td></tr>
<tr><td>6</td><td>Eric Staal (ARZ)</td><td>82</td><td>2</td></tr>
<tr><td>7</td><td>Travis Hamonic (CGY)</td><td>82</td><td>2</td></tr>
<tr><td>8</td><td>Zach Bogosian (ARZ)</td><td>82</td><td>2</td></tr>
<tr><td>9</td><td>Emerson Etem (TOR)</td><td>82</td><td>2</td></tr>
<tr><td>10</td><td>Matthew Tkachuk (VAN)</td><td>82</td><td>2</td></tr>
<tr><td>11</td><td>Devante Smith-Pelly (STL)</td><td>83</td><td>2</td></tr>
<tr><td>12</td><td>Brett Pollock (NSH)</td><td>11</td><td>1</td></tr>
<tr><td>13</td><td>Nick Suzuki (DET)</td><td>26</td><td>1</td></tr>
<tr><td>14</td><td>Rob O'Gara (DAL)</td><td>27</td><td>1</td></tr>
<tr><td>15</td><td>Josh Manson (CAR)</td><td>48</td><td>1</td></tr>
<tr><td>16</td><td>Dustin Byfuglien (MTL)</td><td>49</td><td>1</td></tr>
<tr><td>17</td><td>Ryan Wilson (PIT)</td><td>53</td><td>1</td></tr>
<tr><td>18</td><td>Philip Larsen (DET)</td><td>54</td><td>1</td></tr>
<tr><td>19</td><td>Travis Brown (PHI)</td><td>58</td><td>1</td></tr>
<tr><td>20</td><td>Marc-Andre Bourdon (NSH)</td><td>65</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Travis Hamonic (CGY)</td><td>82</td><td>2</td></tr>
<tr><td>2</td><td>Ryan Wilson (PIT)</td><td>53</td><td>1</td></tr>
<tr><td>3</td><td>Rasmus Dahlin (EDM)</td><td>77</td><td>1</td></tr>
<tr><td>4</td><td>Brian Boyle (DAL)</td><td>78</td><td>1</td></tr>
<tr><td>5</td><td>Charlie McAvoy (BOS)</td><td>78</td><td>1</td></tr>
<tr><td>6</td><td>Erik Gudbranson (CLB)</td><td>78</td><td>1</td></tr>
<tr><td>7</td><td>Evgeny Grachev (COL)</td><td>79</td><td>1</td></tr>
<tr><td>8</td><td>Alexander Urbom (CLB)</td><td>80</td><td>1</td></tr>
<tr><td>9</td><td>Brayden Schenn (TBL)</td><td>80</td><td>1</td></tr>
<tr><td>10</td><td>Dillon Fournier (QUE)</td><td>80</td><td>1</td></tr>
<tr><td>11</td><td>Mark Katic (NJD)</td><td>81</td><td>1</td></tr>
<tr><td>12</td><td>Eric Staal (ARZ)</td><td>82</td><td>1</td></tr>
<tr><td>13</td><td>James Van Riemsdyk (MIN)</td><td>82</td><td>1</td></tr>
<tr><td>14</td><td>Matt Duchene (CGY)</td><td>82</td><td>1</td></tr>
<tr><td>15</td><td>Jyrki Jokipakka (NYI)</td><td>82</td><td>1</td></tr>
<tr><td>16</td><td>Zach Bogosian (ARZ)</td><td>82</td><td>1</td></tr>
<tr><td>17</td><td>JC Lipon (MIN)</td><td>82</td><td>1</td></tr>
<tr><td>18</td><td>Matthew Tkachuk (VAN)</td><td>82</td><td>1</td></tr>
<tr><td>19</td><td>Nicklas Backstrom (CLB)</td><td>84</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Keith Kinkaid (PIT)</td><td>42</td><td>0,920</td></tr>
<tr><td>2</td><td>Matt Murray (VEG)</td><td>77</td><td>0,916</td></tr>
<tr><td>3</td><td>Juuse Saros (SEA)</td><td>45</td><td>0,914</td></tr>
<tr><td>4</td><td>Henrik Lundqvist (CLB)</td><td>50</td><td>0,913</td></tr>
<tr><td>5</td><td>Carey Price (WPG)</td><td>67</td><td>0,913</td></tr>
<tr><td>6</td><td>Steve Mason (TOR)</td><td>70</td><td>0,911</td></tr>
<tr><td>7</td><td>Josh Harding (DET)</td><td>54</td><td>0,911</td></tr>
<tr><td>8</td><td>Cam Ward (PIT)</td><td>68</td><td>0,910</td></tr>
<tr><td>9</td><td>Tuukka Rask (PHI)</td><td>56</td><td>0,909</td></tr>
<tr><td>10</td><td>Jordan Binnington (DAL)</td><td>67</td><td>0,909</td></tr>
<tr><td>11</td><td>Michal Neuvirth (LOS)</td><td>71</td><td>0,909</td></tr>
<tr><td>12</td><td>Jack Campbell (NYR)</td><td>58</td><td>0,909</td></tr>
<tr><td>13</td><td>Braden Holtby (ARZ)</td><td>67</td><td>0,909</td></tr>
<tr><td>14</td><td>Andrey Vasilevskiy (NYR)</td><td>62</td><td>0,908</td></tr>
<tr><td>15</td><td>Ben Bishop (NYI)</td><td>67</td><td>0,908</td></tr>
<tr><td>16</td><td>Robin Lehner (OTT)</td><td>71</td><td>0,908</td></tr>
<tr><td>17</td><td>James Reimer (BUF)</td><td>70</td><td>0,907</td></tr>
<tr><td>18</td><td>Carter Hart (NSH)</td><td>72</td><td>0,907</td></tr>
<tr><td>19</td><td>Martin Jones (COL)</td><td>51</td><td>0,906</td></tr>
<tr><td>20</td><td>Jaroslav Halak (SJS)</td><td>76</td><td>0,905</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Keith Kinkaid (PIT)</td><td>42</td><td>2,22</td></tr>
<tr><td>2</td><td>Matt Murray (VEG)</td><td>77</td><td>2,41</td></tr>
<tr><td>3</td><td>Carey Price (WPG)</td><td>67</td><td>2,62</td></tr>
<tr><td>4</td><td>Josh Harding (DET)</td><td>54</td><td>2,63</td></tr>
<tr><td>5</td><td>Braden Holtby (ARZ)</td><td>67</td><td>2,63</td></tr>
<tr><td>6</td><td>Michal Neuvirth (LOS)</td><td>71</td><td>2,65</td></tr>
<tr><td>7</td><td>Henrik Lundqvist (CLB)</td><td>50</td><td>2,65</td></tr>
<tr><td>8</td><td>Andrey Vasilevskiy (NYR)</td><td>62</td><td>2,66</td></tr>
<tr><td>9</td><td>Tuukka Rask (PHI)</td><td>56</td><td>2,68</td></tr>
<tr><td>10</td><td>Jack Campbell (NYR)</td><td>58</td><td>2,71</td></tr>
<tr><td>11</td><td>Steve Mason (TOR)</td><td>70</td><td>2,71</td></tr>
<tr><td>12</td><td>Cam Ward (PIT)</td><td>68</td><td>2,74</td></tr>
<tr><td>13</td><td>Juuse Saros (SEA)</td><td>45</td><td>2,80</td></tr>
<tr><td>14</td><td>Jaroslav Halak (SJS)</td><td>76</td><td>2,80</td></tr>
<tr><td>15</td><td>Igor Shestyorkin (BOS)</td><td>66</td><td>2,80</td></tr>
<tr><td>16</td><td>Robin Lehner (OTT)</td><td>71</td><td>2,81</td></tr>
<tr><td>17</td><td>Jonathan Quick (CGY)</td><td>76</td><td>2,82</td></tr>
<tr><td>18</td><td>Carter Hart (NSH)</td><td>72</td><td>2,83</td></tr>
<tr><td>19</td><td>James Reimer (BUF)</td><td>70</td><td>2,85</td></tr>
<tr><td>20</td><td>Ben Bishop (NYI)</td><td>67</td><td>2,86</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Matt Murray (VEG)</td><td>77</td><td>4 458</td></tr>
<tr><td>2</td><td>Jonathan Quick (CGY)</td><td>76</td><td>4 364</td></tr>
<tr><td>3</td><td>Jaroslav Halak (SJS)</td><td>76</td><td>4 302</td></tr>
<tr><td>4</td><td>Simeon Varlamov (WSH)</td><td>73</td><td>4 294</td></tr>
<tr><td>5</td><td>Steve Mason (TOR)</td><td>70</td><td>4 100</td></tr>
<tr><td>6</td><td>Carter Hart (NSH)</td><td>72</td><td>4 068</td></tr>
<tr><td>7</td><td>Robin Lehner (OTT)</td><td>71</td><td>4 059</td></tr>
<tr><td>8</td><td>Jacob Markstrom (ANH)</td><td>72</td><td>4 029</td></tr>
<tr><td>9</td><td>Cam Ward (PIT)</td><td>68</td><td>4 013</td></tr>
<tr><td>10</td><td>James Reimer (BUF)</td><td>70</td><td>3 959</td></tr>
<tr><td>11</td><td>Michal Neuvirth (LOS)</td><td>71</td><td>3 946</td></tr>
<tr><td>12</td><td>Carey Price (WPG)</td><td>67</td><td>3 944</td></tr>
<tr><td>13</td><td>Sergei Bobrovsky (FLA)</td><td>66</td><td>3 838</td></tr>
<tr><td>14</td><td>Braden Holtby (ARZ)</td><td>67</td><td>3 787</td></tr>
<tr><td>15</td><td>Jordan Binnington (DAL)</td><td>67</td><td>3 714</td></tr>
<tr><td>16</td><td>Igor Shestyorkin (BOS)</td><td>66</td><td>3 701</td></tr>
<tr><td>17</td><td>Marc-Andre Fleury (EDM)</td><td>64</td><td>3 690</td></tr>
<tr><td>18</td><td>Ondrej Pavelec (MTL)</td><td>62</td><td>3 584</td></tr>
<tr><td>19</td><td>Andrey Vasilevskiy (NYR)</td><td>62</td><td>3 560</td></tr>
<tr><td>20</td><td>Thatcher Demko (MIN)</td><td>65</td><td>3 537</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Simeon Varlamov (WSH)</td><td>73</td><td>2297</td></tr>
<tr><td>2</td><td>Jonathan Quick (CGY)</td><td>76</td><td>2143</td></tr>
<tr><td>3</td><td>Jaroslav Halak (SJS)</td><td>76</td><td>2120</td></tr>
<tr><td>4</td><td>Matt Murray (VEG)</td><td>77</td><td>2120</td></tr>
<tr><td>5</td><td>Steve Mason (TOR)</td><td>70</td><td>2085</td></tr>
<tr><td>6</td><td>Robin Lehner (OTT)</td><td>71</td><td>2057</td></tr>
<tr><td>7</td><td>Carter Hart (NSH)</td><td>72</td><td>2054</td></tr>
<tr><td>8</td><td>James Reimer (BUF)</td><td>70</td><td>2029</td></tr>
<tr><td>9</td><td>Cam Ward (PIT)</td><td>68</td><td>2024</td></tr>
<tr><td>10</td><td>Jacob Markstrom (ANH)</td><td>72</td><td>1984</td></tr>
<tr><td>11</td><td>Jordan Binnington (DAL)</td><td>67</td><td>1967</td></tr>
<tr><td>12</td><td>Carey Price (WPG)</td><td>67</td><td>1966</td></tr>
<tr><td>13</td><td>Sergei Bobrovsky (FLA)</td><td>66</td><td>1952</td></tr>
<tr><td>14</td><td>Michal Neuvirth (LOS)</td><td>71</td><td>1912</td></tr>
<tr><td>15</td><td>Marc-Andre Fleury (EDM)</td><td>64</td><td>1876</td></tr>
<tr><td>16</td><td>Thatcher Demko (MIN)</td><td>65</td><td>1851</td></tr>
<tr><td>17</td><td>Ben Bishop (NYI)</td><td>67</td><td>1821</td></tr>
<tr><td>18</td><td>Braden Holtby (ARZ)</td><td>67</td><td>1818</td></tr>
<tr><td>19</td><td>Ondrej Pavelec (MTL)</td><td>62</td><td>1807</td></tr>
<tr><td>20</td><td>Igor Shestyorkin (BOS)</td><td>66</td><td>1799</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Andrey Vasilevskiy (NYR)</td><td>62</td><td>8</td></tr>
<tr><td>2</td><td>Josh Harding (DET)</td><td>54</td><td>6</td></tr>
<tr><td>3</td><td>Matt Murray (VEG)</td><td>77</td><td>6</td></tr>
<tr><td>4</td><td>Keith Kinkaid (PIT)</td><td>42</td><td>5</td></tr>
<tr><td>5</td><td>Martin Jones (COL)</td><td>51</td><td>5</td></tr>
<tr><td>6</td><td>Thatcher Demko (MIN)</td><td>65</td><td>5</td></tr>
<tr><td>7</td><td>James Reimer (BUF)</td><td>70</td><td>5</td></tr>
<tr><td>8</td><td>Carter Hart (NSH)</td><td>72</td><td>5</td></tr>
<tr><td>9</td><td>Juuse Saros (SEA)</td><td>45</td><td>4</td></tr>
<tr><td>10</td><td>Cory Schneider (NJD)</td><td>63</td><td>4</td></tr>
<tr><td>11</td><td>Braden Holtby (ARZ)</td><td>67</td><td>4</td></tr>
<tr><td>12</td><td>Carey Price (WPG)</td><td>67</td><td>4</td></tr>
<tr><td>13</td><td>Jordan Binnington (DAL)</td><td>67</td><td>4</td></tr>
<tr><td>14</td><td>Steve Mason (TOR)</td><td>70</td><td>4</td></tr>
<tr><td>15</td><td>Anthony Stolarz (TBL)</td><td>32</td><td>3</td></tr>
<tr><td>16</td><td>Alexandar Georgiyev (CLB)</td><td>40</td><td>3</td></tr>
<tr><td>17</td><td>Pekka Rinne (QUE)</td><td>59</td><td>3</td></tr>
<tr><td>18</td><td>Ben Bishop (NYI)</td><td>67</td><td>3</td></tr>
<tr><td>19</td><td>Michal Neuvirth (LOS)</td><td>71</td><td>3</td></tr>
<tr><td>20</td><td>Jaroslav Halak (SJS)</td><td>76</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Matt Murray (VEG)</td><td>77</td><td>47</td></tr>
<tr><td>2</td><td>Carey Price (WPG)</td><td>67</td><td>40</td></tr>
<tr><td>3</td><td>Michal Neuvirth (LOS)</td><td>71</td><td>40</td></tr>
<tr><td>4</td><td>Jonathan Quick (CGY)</td><td>76</td><td>39</td></tr>
<tr><td>5</td><td>Robin Lehner (OTT)</td><td>71</td><td>38</td></tr>
<tr><td>6</td><td>Jaroslav Halak (SJS)</td><td>76</td><td>38</td></tr>
<tr><td>7</td><td>Igor Shestyorkin (BOS)</td><td>66</td><td>37</td></tr>
<tr><td>8</td><td>James Reimer (BUF)</td><td>70</td><td>36</td></tr>
<tr><td>9</td><td>Steve Mason (TOR)</td><td>70</td><td>36</td></tr>
<tr><td>10</td><td>Braden Holtby (ARZ)</td><td>67</td><td>35</td></tr>
<tr><td>11</td><td>Carter Hart (NSH)</td><td>72</td><td>35</td></tr>
<tr><td>12</td><td>Tuukka Rask (PHI)</td><td>56</td><td>34</td></tr>
<tr><td>13</td><td>Sergei Bobrovsky (FLA)</td><td>66</td><td>34</td></tr>
<tr><td>14</td><td>Cam Ward (PIT)</td><td>68</td><td>33</td></tr>
<tr><td>15</td><td>Simeon Varlamov (WSH)</td><td>73</td><td>33</td></tr>
<tr><td>16</td><td>Thatcher Demko (MIN)</td><td>65</td><td>31</td></tr>
<tr><td>17</td><td>Marc-Andre Fleury (EDM)</td><td>64</td><td>30</td></tr>
<tr><td>18</td><td>Ben Bishop (NYI)</td><td>67</td><td>30</td></tr>
<tr><td>19</td><td>Jordan Binnington (DAL)</td><td>67</td><td>29</td></tr>
<tr><td>20</td><td>Jacob Markstrom (ANH)</td><td>72</td><td>29</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Thatcher Demko (MIN)</td><td>12</td><td>1,000</td></tr>
<tr><td>2</td><td>Malcolm Subban (TBL)</td><td>7</td><td>1,000</td></tr>
<tr><td>3</td><td>Henrik Lundqvist (CLB)</td><td>6</td><td>1,000</td></tr>
<tr><td>4</td><td>Jake Allen (MTL)</td><td>4</td><td>1,000</td></tr>
<tr><td>5</td><td>Jhonas Enroth (DAL)</td><td>3</td><td>1,000</td></tr>
<tr><td>6</td><td>Vitek Vanecek (VAN)</td><td>3</td><td>1,000</td></tr>
<tr><td>7</td><td>Brian Elliott (MIN)</td><td>2</td><td>1,000</td></tr>
<tr><td>8</td><td>Jacob Markstrom (ANH)</td><td>17</td><td>0,941</td></tr>
<tr><td>9</td><td>Braden Holtby (ARZ)</td><td>8</td><td>0,875</td></tr>
<tr><td>10</td><td>Jack Campbell (NYR)</td><td>13</td><td>0,846</td></tr>
<tr><td>11</td><td>Steve Mason (TOR)</td><td>18</td><td>0,833</td></tr>
<tr><td>12</td><td>Benjamin Conz (OTT)</td><td>6</td><td>0,833</td></tr>
<tr><td>13</td><td>Sergei Bobrovsky (FLA)</td><td>6</td><td>0,833</td></tr>
<tr><td>14</td><td>Andrew Hammond (COL)</td><td>6</td><td>0,833</td></tr>
<tr><td>15</td><td>Ben Bishop (NYI)</td><td>11</td><td>0,818</td></tr>
<tr><td>16</td><td>Garret Sparks (TOR)</td><td>15</td><td>0,800</td></tr>
<tr><td>17</td><td>Kevin Poulin (STL)</td><td>10</td><td>0,800</td></tr>
<tr><td>18</td><td>Philipp Grubauer (LOS)</td><td>14</td><td>0,786</td></tr>
<tr><td>19</td><td>Carter Hart (NSH)</td><td>23</td><td>0,783</td></tr>
<tr><td>20</td><td>Anders Lindback (CHI)</td><td>18</td><td>0,778</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Simeon Varlamov (WSH)</td><td>73</td><td>34</td></tr>
<tr><td>2</td><td>Jacob Markstrom (ANH)</td><td>72</td><td>33</td></tr>
<tr><td>3</td><td>Jordan Binnington (DAL)</td><td>67</td><td>32</td></tr>
<tr><td>4</td><td>Pekka Rinne (QUE)</td><td>59</td><td>31</td></tr>
<tr><td>5</td><td>Marc-Andre Fleury (EDM)</td><td>64</td><td>28</td></tr>
<tr><td>6</td><td>Steve Mason (TOR)</td><td>70</td><td>28</td></tr>
<tr><td>7</td><td>Ben Bishop (NYI)</td><td>67</td><td>27</td></tr>
<tr><td>8</td><td>James Reimer (BUF)</td><td>70</td><td>27</td></tr>
<tr><td>9</td><td>Carter Hart (NSH)</td><td>72</td><td>27</td></tr>
<tr><td>10</td><td>Joni Ortio (CAR)</td><td>49</td><td>26</td></tr>
<tr><td>11</td><td>Ondrej Pavelec (MTL)</td><td>62</td><td>26</td></tr>
<tr><td>12</td><td>Cory Schneider (NJD)</td><td>63</td><td>26</td></tr>
<tr><td>13</td><td>Jonathan Quick (CGY)</td><td>76</td><td>26</td></tr>
<tr><td>14</td><td>Andrey Vasilevskiy (NYR)</td><td>62</td><td>25</td></tr>
<tr><td>15</td><td>Cam Ward (PIT)</td><td>68</td><td>25</td></tr>
<tr><td>16</td><td>Jaroslav Halak (SJS)</td><td>76</td><td>25</td></tr>
<tr><td>17</td><td>Jack Campbell (NYR)</td><td>58</td><td>24</td></tr>
<tr><td>18</td><td>Thatcher Demko (MIN)</td><td>65</td><td>24</td></tr>
<tr><td>19</td><td>Sergei Bobrovsky (FLA)</td><td>66</td><td>24</td></tr>
<tr><td>20</td><td>Braden Holtby (ARZ)</td><td>67</td><td>24</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
