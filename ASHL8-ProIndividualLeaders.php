<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Pro Individual Leaders</title>
<script src="ASHL8.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL8.css" rel="stylesheet" type="text/css" />
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
<b>Minimum Games Played: 41</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Steven Stamkos (TBL)</td><td>82</td><td>44</td></tr>
<tr><td>2</td><td>Connor McDavid (CLB)</td><td>78</td><td>42</td></tr>
<tr><td>3</td><td>Alex Ovechkin (PIT)</td><td>74</td><td>41</td></tr>
<tr><td>4</td><td>David Pastrnak (ANH)</td><td>82</td><td>38</td></tr>
<tr><td>5</td><td>Claude Giroux (PHI)</td><td>81</td><td>37</td></tr>
<tr><td>6</td><td>Taylor Hall (EDM)</td><td>81</td><td>36</td></tr>
<tr><td>7</td><td>Jeff Skinner (LOS)</td><td>82</td><td>36</td></tr>
<tr><td>8</td><td>Alex Galchenyuk (TBL)</td><td>80</td><td>35</td></tr>
<tr><td>9</td><td>John Tavares (ARZ)</td><td>82</td><td>35</td></tr>
<tr><td>10</td><td>Logan Couture (ARZ)</td><td>82</td><td>35</td></tr>
<tr><td>11</td><td>Sidney Crosby (MTL)</td><td>62</td><td>34</td></tr>
<tr><td>12</td><td>Nicklas Backstrom (TOR)</td><td>82</td><td>34</td></tr>
<tr><td>13</td><td>Nathan MacKinnon (NSH)</td><td>82</td><td>34</td></tr>
<tr><td>14</td><td>Nikita Kucherov (FLA)</td><td>82</td><td>34</td></tr>
<tr><td>15</td><td>Aleksander Barkov (NYR)</td><td>82</td><td>33</td></tr>
<tr><td>16</td><td>Jonathan Toews (CHI)</td><td>82</td><td>32</td></tr>
<tr><td>17</td><td>Anze Kopitar (LOS)</td><td>82</td><td>31</td></tr>
<tr><td>18</td><td>Evgeni Malkin (CGY)</td><td>71</td><td>30</td></tr>
<tr><td>19</td><td>David Backes (CHI)</td><td>82</td><td>30</td></tr>
<tr><td>20</td><td>Jordan Eberle (EDM)</td><td>82</td><td>30</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Cam Fowler (ANH)</td><td>82</td><td>69</td></tr>
<tr><td>2</td><td>Drew Doughty (LOS)</td><td>82</td><td>65</td></tr>
<tr><td>3</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>61</td></tr>
<tr><td>4</td><td>Justin Schultz (ANH)</td><td>82</td><td>60</td></tr>
<tr><td>5</td><td>Kristopher Letang (LOS)</td><td>82</td><td>59</td></tr>
<tr><td>6</td><td>Luke Schenn (TOR)</td><td>82</td><td>58</td></tr>
<tr><td>7</td><td>Zach Bogosian (ARZ)</td><td>82</td><td>58</td></tr>
<tr><td>8</td><td>P.K. Subban (TBL)</td><td>78</td><td>57</td></tr>
<tr><td>9</td><td>Adam Larsson (PHI)</td><td>82</td><td>57</td></tr>
<tr><td>10</td><td>John Klingberg (STL)</td><td>82</td><td>52</td></tr>
<tr><td>11</td><td>Jonathan Toews (CHI)</td><td>82</td><td>51</td></tr>
<tr><td>12</td><td>Steven Stamkos (TBL)</td><td>82</td><td>51</td></tr>
<tr><td>13</td><td>Hampus Lindholm (ARZ)</td><td>82</td><td>51</td></tr>
<tr><td>14</td><td>Claude Giroux (PHI)</td><td>81</td><td>50</td></tr>
<tr><td>15</td><td>Derek Stepan (PIT)</td><td>82</td><td>50</td></tr>
<tr><td>16</td><td>Aaron Ekblad (VAN)</td><td>82</td><td>50</td></tr>
<tr><td>17</td><td>Ryan O'Reilly (STL)</td><td>82</td><td>50</td></tr>
<tr><td>18</td><td>Tobias Enstrom (TOR)</td><td>82</td><td>49</td></tr>
<tr><td>19</td><td>Dmitri Orlov (NSH)</td><td>82</td><td>49</td></tr>
<tr><td>20</td><td>Victor Hedman (OTT)</td><td>83</td><td>49</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Derek Stepan (PIT)</td><td>82</td><td>371</td></tr>
<tr><td>2</td><td>Jeff Skinner (LOS)</td><td>82</td><td>353</td></tr>
<tr><td>3</td><td>Connor McDavid (CLB)</td><td>78</td><td>352</td></tr>
<tr><td>4</td><td>Steven Stamkos (TBL)</td><td>82</td><td>341</td></tr>
<tr><td>5</td><td>Alex Ovechkin (PIT)</td><td>74</td><td>339</td></tr>
<tr><td>6</td><td>Claude Giroux (PHI)</td><td>81</td><td>322</td></tr>
<tr><td>7</td><td>Nathan MacKinnon (NSH)</td><td>82</td><td>321</td></tr>
<tr><td>8</td><td>Jonathan Toews (CHI)</td><td>82</td><td>313</td></tr>
<tr><td>9</td><td>Matt Duchene (ANH)</td><td>82</td><td>312</td></tr>
<tr><td>10</td><td>Jakub Voracek (MIN)</td><td>82</td><td>307</td></tr>
<tr><td>11</td><td>Jordan Eberle (EDM)</td><td>82</td><td>304</td></tr>
<tr><td>12</td><td>Patrick Kane (CHI)</td><td>82</td><td>302</td></tr>
<tr><td>13</td><td>Logan Couture (ARZ)</td><td>82</td><td>292</td></tr>
<tr><td>14</td><td>Ryan Callahan (EDM)</td><td>82</td><td>292</td></tr>
<tr><td>15</td><td>Taylor Hall (EDM)</td><td>81</td><td>290</td></tr>
<tr><td>16</td><td>David Pastrnak (ANH)</td><td>82</td><td>288</td></tr>
<tr><td>17</td><td>Nicklas Backstrom (TOR)</td><td>82</td><td>285</td></tr>
<tr><td>18</td><td>Max Pacioretty (SEA)</td><td>82</td><td>278</td></tr>
<tr><td>19</td><td>Anze Kopitar (LOS)</td><td>82</td><td>276</td></tr>
<tr><td>20</td><td>Ryan O'Reilly (STL)</td><td>82</td><td>275</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Elias Pettersson (TBL)</td><td>78</td><td>16,43%</td></tr>
<tr><td>2</td><td>Andrew MacDonald (ARZ)</td><td>79</td><td>16,28%</td></tr>
<tr><td>3</td><td>Kirill Kaprizov (NSH)</td><td>58</td><td>16,16%</td></tr>
<tr><td>4</td><td>Toni Rajala (EDM)</td><td>82</td><td>15,96%</td></tr>
<tr><td>5</td><td>Brady Tkachuk (WPG)</td><td>66</td><td>15,85%</td></tr>
<tr><td>6</td><td>Travis Hamonic (ARZ)</td><td>80</td><td>15,69%</td></tr>
<tr><td>7</td><td>Erik Karlsson (OTT)</td><td>75</td><td>15,43%</td></tr>
<tr><td>8</td><td>Charles McAvoy (BOS)</td><td>82</td><td>14,69%</td></tr>
<tr><td>9</td><td>Mika Zibanejad (BUF)</td><td>62</td><td>14,60%</td></tr>
<tr><td>10</td><td>Nikita Kucherov (FLA)</td><td>82</td><td>14,59%</td></tr>
<tr><td>11</td><td>David Backes (CHI)</td><td>82</td><td>14,56%</td></tr>
<tr><td>12</td><td>Brett Connolly (CGY)</td><td>82</td><td>14,29%</td></tr>
<tr><td>13</td><td>Morgan Rielly (TOR)</td><td>82</td><td>14,29%</td></tr>
<tr><td>14</td><td>John Gaudreau (ARZ)</td><td>82</td><td>14,29%</td></tr>
<tr><td>15</td><td>Filip Zadina (WPG)</td><td>74</td><td>14,16%</td></tr>
<tr><td>16</td><td>Dustin Brown (TBL)</td><td>83</td><td>14,15%</td></tr>
<tr><td>17</td><td>Scott Kosmachuk (TBL)</td><td>82</td><td>14,06%</td></tr>
<tr><td>18</td><td>Alex Galchenyuk (TBL)</td><td>80</td><td>14,06%</td></tr>
<tr><td>19</td><td>Evander Kane (BUF)</td><td>66</td><td>13,87%</td></tr>
<tr><td>20</td><td>Nikita Gusev (PHI)</td><td>73</td><td>13,87%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Steven Stamkos (TBL)</td><td>82</td><td>44-51-95</td></tr>
<tr><td>2</td><td>Claude Giroux (PHI)</td><td>81</td><td>37-50-87</td></tr>
<tr><td>3</td><td>Connor McDavid (CLB)</td><td>78</td><td>42-41-83</td></tr>
<tr><td>4</td><td>Jonathan Toews (CHI)</td><td>82</td><td>32-51-83</td></tr>
<tr><td>5</td><td>Nicklas Backstrom (TOR)</td><td>82</td><td>34-47-81</td></tr>
<tr><td>6</td><td>Ryan O'Reilly (STL)</td><td>82</td><td>28-50-78</td></tr>
<tr><td>7</td><td>Matt Duchene (ANH)</td><td>82</td><td>30-47-77</td></tr>
<tr><td>8</td><td>Derek Stepan (PIT)</td><td>82</td><td>27-50-77</td></tr>
<tr><td>9</td><td>Nathan MacKinnon (NSH)</td><td>82</td><td>34-42-76</td></tr>
<tr><td>10</td><td>John Tavares (ARZ)</td><td>82</td><td>35-39-74</td></tr>
<tr><td>11</td><td>Logan Couture (ARZ)</td><td>82</td><td>35-39-74</td></tr>
<tr><td>12</td><td>Anze Kopitar (LOS)</td><td>82</td><td>31-42-73</td></tr>
<tr><td>13</td><td>Patrick Kane (CHI)</td><td>82</td><td>30-43-73</td></tr>
<tr><td>14</td><td>Alex Galchenyuk (TBL)</td><td>80</td><td>35-36-71</td></tr>
<tr><td>15</td><td>Ryan Kesler (VAN)</td><td>82</td><td>27-44-71</td></tr>
<tr><td>16</td><td>Ryan Nugent-Hopkins (DET)</td><td>79</td><td>26-44-70</td></tr>
<tr><td>17</td><td>Sidney Crosby (MTL)</td><td>62</td><td>34-33-67</td></tr>
<tr><td>18</td><td>Colin Wilson (NSH)</td><td>82</td><td>25-41-66</td></tr>
<tr><td>19</td><td>Aleksander Barkov (NYR)</td><td>82</td><td>33-32-65</td></tr>
<tr><td>20</td><td>Michael Frolik (NYI)</td><td>80</td><td>27-38-65</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Claude Giroux (PHI)</td><td>81</td><td>37-50-87</td></tr>
<tr><td>2</td><td>Ryan O'Reilly (STL)</td><td>82</td><td>28-50-78</td></tr>
<tr><td>3</td><td>Jeff Skinner (LOS)</td><td>82</td><td>36-41-77</td></tr>
<tr><td>4</td><td>Alex Ovechkin (PIT)</td><td>74</td><td>41-35-76</td></tr>
<tr><td>5</td><td>Taylor Hall (EDM)</td><td>81</td><td>36-38-74</td></tr>
<tr><td>6</td><td>Logan Couture (ARZ)</td><td>82</td><td>35-39-74</td></tr>
<tr><td>7</td><td>David Pastrnak (ANH)</td><td>82</td><td>38-34-72</td></tr>
<tr><td>8</td><td>Alex Galchenyuk (TBL)</td><td>80</td><td>35-36-71</td></tr>
<tr><td>9</td><td>Filip Forsberg (MTL)</td><td>82</td><td>30-41-71</td></tr>
<tr><td>10</td><td>Ryan Nugent-Hopkins (DET)</td><td>79</td><td>26-44-70</td></tr>
<tr><td>11</td><td>Nikolaj Ehlers (VAN)</td><td>76</td><td>25-41-66</td></tr>
<tr><td>12</td><td>Colin Wilson (NSH)</td><td>82</td><td>25-41-66</td></tr>
<tr><td>13</td><td>Michael Frolik (NYI)</td><td>80</td><td>27-38-65</td></tr>
<tr><td>14</td><td>Sam Gagner (EDM)</td><td>70</td><td>24-41-65</td></tr>
<tr><td>15</td><td>Jakub Voracek (MIN)</td><td>82</td><td>28-33-61</td></tr>
<tr><td>16</td><td>Patrik Berglund (SEA)</td><td>82</td><td>28-33-61</td></tr>
<tr><td>17</td><td>Brad Marchand (BOS)</td><td>82</td><td>25-35-60</td></tr>
<tr><td>18</td><td>Bryan Rust (PIT)</td><td>82</td><td>27-30-57</td></tr>
<tr><td>19</td><td>John Gaudreau (ARZ)</td><td>82</td><td>27-30-57</td></tr>
<tr><td>20</td><td>Max Pacioretty (SEA)</td><td>82</td><td>25-32-57</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Steven Stamkos (TBL)</td><td>82</td><td>44-51-95</td></tr>
<tr><td>2</td><td>Ryan O'Reilly (STL)</td><td>82</td><td>28-50-78</td></tr>
<tr><td>3</td><td>Alex Ovechkin (PIT)</td><td>74</td><td>41-35-76</td></tr>
<tr><td>4</td><td>Nathan MacKinnon (NSH)</td><td>82</td><td>34-42-76</td></tr>
<tr><td>5</td><td>Logan Couture (ARZ)</td><td>82</td><td>35-39-74</td></tr>
<tr><td>6</td><td>Patrick Kane (CHI)</td><td>82</td><td>30-43-73</td></tr>
<tr><td>7</td><td>David Pastrnak (ANH)</td><td>82</td><td>38-34-72</td></tr>
<tr><td>8</td><td>Jordan Eberle (EDM)</td><td>82</td><td>30-42-72</td></tr>
<tr><td>9</td><td>Alex Galchenyuk (TBL)</td><td>80</td><td>35-36-71</td></tr>
<tr><td>10</td><td>Filip Forsberg (MTL)</td><td>82</td><td>30-41-71</td></tr>
<tr><td>11</td><td>Corey Perry (LOS)</td><td>82</td><td>27-41-68</td></tr>
<tr><td>12</td><td>Nikolaj Ehlers (VAN)</td><td>76</td><td>25-41-66</td></tr>
<tr><td>13</td><td>Colin Wilson (NSH)</td><td>82</td><td>25-41-66</td></tr>
<tr><td>14</td><td>Michael Frolik (NYI)</td><td>80</td><td>27-38-65</td></tr>
<tr><td>15</td><td>Sam Gagner (EDM)</td><td>70</td><td>24-41-65</td></tr>
<tr><td>16</td><td>Evgeni Malkin (CGY)</td><td>71</td><td>30-34-64</td></tr>
<tr><td>17</td><td>Nikita Kucherov (FLA)</td><td>82</td><td>34-29-63</td></tr>
<tr><td>18</td><td>David Krejci (OTT)</td><td>80</td><td>26-36-62</td></tr>
<tr><td>19</td><td>David Backes (CHI)</td><td>82</td><td>30-31-61</td></tr>
<tr><td>20</td><td>Ryan Callahan (EDM)</td><td>82</td><td>30-31-61</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Cam Fowler (ANH)</td><td>82</td><td>20-69-89</td></tr>
<tr><td>2</td><td>Drew Doughty (LOS)</td><td>82</td><td>16-65-81</td></tr>
<tr><td>3</td><td>Kristopher Letang (LOS)</td><td>82</td><td>18-59-77</td></tr>
<tr><td>4</td><td>Justin Schultz (ANH)</td><td>82</td><td>17-60-77</td></tr>
<tr><td>5</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>16-61-77</td></tr>
<tr><td>6</td><td>Zach Bogosian (ARZ)</td><td>82</td><td>17-58-75</td></tr>
<tr><td>7</td><td>P.K. Subban (TBL)</td><td>78</td><td>17-57-74</td></tr>
<tr><td>8</td><td>Erik Karlsson (OTT)</td><td>75</td><td>25-45-70</td></tr>
<tr><td>9</td><td>Michael Del Zotto (NYI)</td><td>82</td><td>20-48-68</td></tr>
<tr><td>10</td><td>Aaron Ekblad (VAN)</td><td>82</td><td>18-50-68</td></tr>
<tr><td>11</td><td>Adam Larsson (PHI)</td><td>82</td><td>11-57-68</td></tr>
<tr><td>12</td><td>John Klingberg (STL)</td><td>82</td><td>15-52-67</td></tr>
<tr><td>13</td><td>Torey Krug (PHI)</td><td>82</td><td>18-48-66</td></tr>
<tr><td>14</td><td>Kevin Shattenkirk (CLB)</td><td>82</td><td>19-46-65</td></tr>
<tr><td>15</td><td>Hampus Lindholm (ARZ)</td><td>82</td><td>14-51-65</td></tr>
<tr><td>16</td><td>Luke Schenn (TOR)</td><td>82</td><td>6-58-64</td></tr>
<tr><td>17</td><td>Marc-Edouard Vlasic (CAR)</td><td>82</td><td>15-46-61</td></tr>
<tr><td>18</td><td>Keith Yandle (CLB)</td><td>82</td><td>13-48-61</td></tr>
<tr><td>19</td><td>Charles McAvoy (BOS)</td><td>82</td><td>21-39-60</td></tr>
<tr><td>20</td><td>Shea Weber (DAL)</td><td>68</td><td>17-43-60</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Steven Stamkos (TBL)</td><td>82</td><td>1,24</td></tr>
<tr><td>2</td><td>Sidney Crosby (MTL)</td><td>62</td><td>1,10</td></tr>
<tr><td>3</td><td>Evgeni Malkin (CGY)</td><td>71</td><td>1,08</td></tr>
<tr><td>4</td><td>Claude Giroux (PHI)</td><td>81</td><td>1,04</td></tr>
<tr><td>5</td><td>Nathan MacKinnon (NSH)</td><td>82</td><td>1,04</td></tr>
<tr><td>6</td><td>Connor McDavid (CLB)</td><td>78</td><td>1,01</td></tr>
<tr><td>7</td><td>Alex Ovechkin (PIT)</td><td>74</td><td>1,00</td></tr>
<tr><td>8</td><td>Nikolaj Ehlers (VAN)</td><td>76</td><td>0,98</td></tr>
<tr><td>9</td><td>Jeff Skinner (LOS)</td><td>82</td><td>0,97</td></tr>
<tr><td>10</td><td>Taylor Hall (EDM)</td><td>81</td><td>0,97</td></tr>
<tr><td>11</td><td>Sam Gagner (EDM)</td><td>70</td><td>0,96</td></tr>
<tr><td>12</td><td>Cam Fowler (ANH)</td><td>82</td><td>0,95</td></tr>
<tr><td>13</td><td>David Pastrnak (ANH)</td><td>82</td><td>0,95</td></tr>
<tr><td>14</td><td>Logan Couture (ARZ)</td><td>82</td><td>0,95</td></tr>
<tr><td>15</td><td>Patrick Kane (CHI)</td><td>82</td><td>0,93</td></tr>
<tr><td>16</td><td>Alex Galchenyuk (TBL)</td><td>80</td><td>0,93</td></tr>
<tr><td>17</td><td>Matt Duchene (ANH)</td><td>82</td><td>0,92</td></tr>
<tr><td>18</td><td>Filip Forsberg (MTL)</td><td>82</td><td>0,91</td></tr>
<tr><td>19</td><td>Derek Stepan (PIT)</td><td>82</td><td>0,91</td></tr>
<tr><td>20</td><td>Nicklas Backstrom (TOR)</td><td>82</td><td>0,91</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Paul Gaustad (ANH)</td><td>49</td><td>60,73%</td></tr>
<tr><td>2</td><td>Ryan Kesler (VAN)</td><td>82</td><td>57,74%</td></tr>
<tr><td>3</td><td>Patrice Bergeron (BOS)</td><td>73</td><td>56,61%</td></tr>
<tr><td>4</td><td>Sidney Crosby (MTL)</td><td>62</td><td>56,54%</td></tr>
<tr><td>5</td><td>Jonathan Toews (CHI)</td><td>82</td><td>56,11%</td></tr>
<tr><td>6</td><td>Jordan Staal (ARZ)</td><td>82</td><td>55,43%</td></tr>
<tr><td>7</td><td>Marko Dano (BOS)</td><td>61</td><td>54,71%</td></tr>
<tr><td>8</td><td>Chris Kreider (NYR)</td><td>49</td><td>54,66%</td></tr>
<tr><td>9</td><td>Paul Stastny (PIT)</td><td>82</td><td>54,62%</td></tr>
<tr><td>10</td><td>Eric Staal (SJS)</td><td>79</td><td>54,40%</td></tr>
<tr><td>11</td><td>Vladimir Sobotka (PIT)</td><td>73</td><td>54,21%</td></tr>
<tr><td>12</td><td>Martin Hanzal (CAR)</td><td>74</td><td>54,21%</td></tr>
<tr><td>13</td><td>Tyler Bozak (LOS)</td><td>82</td><td>54,16%</td></tr>
<tr><td>14</td><td>Luke Adam (NYI)</td><td>82</td><td>53,96%</td></tr>
<tr><td>15</td><td>Claude Giroux (PHI)</td><td>81</td><td>53,82%</td></tr>
<tr><td>16</td><td>Anze Kopitar (LOS)</td><td>82</td><td>53,82%</td></tr>
<tr><td>17</td><td>Nicklas Backstrom (TOR)</td><td>82</td><td>53,55%</td></tr>
<tr><td>18</td><td>Jason Spezza (CLB)</td><td>82</td><td>53,46%</td></tr>
<tr><td>19</td><td>Travis Zajac (CAR)</td><td>83</td><td>53,37%</td></tr>
<tr><td>20</td><td>Artem Anisimov (DET)</td><td>56</td><td>53,24%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Patrick Kane (CHI)</td><td>82</td><td>38</td></tr>
<tr><td>2</td><td>Jonathan Toews (CHI)</td><td>82</td><td>37</td></tr>
<tr><td>3</td><td>Josh Bailey (BOS)</td><td>82</td><td>32</td></tr>
<tr><td>4</td><td>Charles McAvoy (BOS)</td><td>82</td><td>32</td></tr>
<tr><td>5</td><td>Steven Stamkos (TBL)</td><td>82</td><td>30</td></tr>
<tr><td>6</td><td>Taylor Hall (EDM)</td><td>81</td><td>29</td></tr>
<tr><td>7</td><td>Bryan Rust (PIT)</td><td>82</td><td>28</td></tr>
<tr><td>8</td><td>Sam Gagner (EDM)</td><td>70</td><td>27</td></tr>
<tr><td>9</td><td>P.K. Subban (TBL)</td><td>78</td><td>27</td></tr>
<tr><td>10</td><td>Jordan Eberle (EDM)</td><td>82</td><td>27</td></tr>
<tr><td>11</td><td>Corey Perry (LOS)</td><td>82</td><td>26</td></tr>
<tr><td>12</td><td>John Carlson (BOS)</td><td>82</td><td>26</td></tr>
<tr><td>13</td><td>Ben Hutton (LOS)</td><td>77</td><td>25</td></tr>
<tr><td>14</td><td>Josh Morrissey (VAN)</td><td>82</td><td>24</td></tr>
<tr><td>15</td><td>Marc Staal (TBL)</td><td>68</td><td>23</td></tr>
<tr><td>16</td><td>Kevin Fiala (LOS)</td><td>50</td><td>22</td></tr>
<tr><td>17</td><td>Tanner Pearson (SJS)</td><td>81</td><td>22</td></tr>
<tr><td>18</td><td>Boone Jenner (PHI)</td><td>63</td><td>21</td></tr>
<tr><td>19</td><td>Adam Clendening (CHI)</td><td>77</td><td>21</td></tr>
<tr><td>20</td><td>Tyler Bozak (LOS)</td><td>82</td><td>21</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Luke Schenn (TOR)</td><td>82</td><td>155</td></tr>
<tr><td>2</td><td>Roman Polak (CHI)</td><td>68</td><td>135</td></tr>
<tr><td>3</td><td>Theo Peckham (TOR)</td><td>70</td><td>126</td></tr>
<tr><td>4</td><td>Duncan Siemens (DAL)</td><td>82</td><td>123</td></tr>
<tr><td>5</td><td>Dylan McIlrath (NYR)</td><td>82</td><td>117</td></tr>
<tr><td>6</td><td>Brendan Smith (QUE)</td><td>71</td><td>115</td></tr>
<tr><td>7</td><td>Ryan Wilson (PIT)</td><td>82</td><td>115</td></tr>
<tr><td>8</td><td>Drew Doughty (LOS)</td><td>82</td><td>113</td></tr>
<tr><td>9</td><td>Karl Alzner (CAR)</td><td>82</td><td>113</td></tr>
<tr><td>10</td><td>Charles McAvoy (BOS)</td><td>82</td><td>110</td></tr>
<tr><td>11</td><td>Luca Sbisa (WPG)</td><td>82</td><td>104</td></tr>
<tr><td>12</td><td>Dmitri Kulikov (DET)</td><td>81</td><td>103</td></tr>
<tr><td>13</td><td>Jani Hakanpaa (COL)</td><td>63</td><td>101</td></tr>
<tr><td>14</td><td>Dustin Byfuglien (NYI)</td><td>82</td><td>100</td></tr>
<tr><td>15</td><td>Ryan Suter (MIN)</td><td>78</td><td>98</td></tr>
<tr><td>16</td><td>Daniel Girardi (EDM)</td><td>82</td><td>98</td></tr>
<tr><td>17</td><td>Keith Aulie (SEA)</td><td>76</td><td>97</td></tr>
<tr><td>18</td><td>Travis Hamonic (ARZ)</td><td>80</td><td>96</td></tr>
<tr><td>19</td><td>Colten Teubert (EDM)</td><td>80</td><td>95</td></tr>
<tr><td>20</td><td>Brad Marchand (BOS)</td><td>82</td><td>92</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Jack Johnson (STL)</td><td>81</td><td>147</td></tr>
<tr><td>2</td><td>Luke Schenn (TOR)</td><td>82</td><td>140</td></tr>
<tr><td>3</td><td>Niklas Hjalmarsson (COL)</td><td>74</td><td>139</td></tr>
<tr><td>4</td><td>Ryan Suter (MIN)</td><td>78</td><td>135</td></tr>
<tr><td>5</td><td>Kevin Shattenkirk (CLB)</td><td>82</td><td>133</td></tr>
<tr><td>6</td><td>Marc-Edouard Vlasic (CAR)</td><td>82</td><td>132</td></tr>
<tr><td>7</td><td>Alex Petrovic (DAL)</td><td>82</td><td>130</td></tr>
<tr><td>8</td><td>Adam Larsson (PHI)</td><td>82</td><td>130</td></tr>
<tr><td>9</td><td>Dion Phaneuf (WSH)</td><td>76</td><td>129</td></tr>
<tr><td>10</td><td>John Carlson (BOS)</td><td>82</td><td>127</td></tr>
<tr><td>11</td><td>Aaron Ekblad (VAN)</td><td>82</td><td>127</td></tr>
<tr><td>12</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>126</td></tr>
<tr><td>13</td><td>Marco Scandella (BOS)</td><td>82</td><td>126</td></tr>
<tr><td>14</td><td>Alex Goligoski (STL)</td><td>82</td><td>125</td></tr>
<tr><td>15</td><td>Jonathon Blum (CGY)</td><td>82</td><td>125</td></tr>
<tr><td>16</td><td>Morgan Rielly (TOR)</td><td>82</td><td>125</td></tr>
<tr><td>17</td><td>Victor Hedman (OTT)</td><td>83</td><td>125</td></tr>
<tr><td>18</td><td>Duncan Keith (PIT)</td><td>82</td><td>124</td></tr>
<tr><td>19</td><td>Daniel Girardi (EDM)</td><td>82</td><td>123</td></tr>
<tr><td>20</td><td>Dylan McIlrath (NYR)</td><td>82</td><td>123</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Ondrej Kase (NJD)</td><td>76</td><td>23-24-47</td></tr>
<tr><td>2</td><td>Ahti Oksanen (VAN)</td><td>81</td><td>17-29-46</td></tr>
<tr><td>3</td><td>Elias Pettersson (TBL)</td><td>78</td><td>23-21-44</td></tr>
<tr><td>4</td><td>Brandon Montour (MTL)</td><td>75</td><td>10-34-44</td></tr>
<tr><td>5</td><td>Rasmus Dahlin (EDM)</td><td>71</td><td>8-36-44</td></tr>
<tr><td>6</td><td>Kyle Connor (ANH)</td><td>77</td><td>19-23-42</td></tr>
<tr><td>7</td><td>Scott Kosmachuk (TBL)</td><td>82</td><td>18-24-42</td></tr>
<tr><td>8</td><td>Jake McCabe (NYR)</td><td>72</td><td>12-30-42</td></tr>
<tr><td>9</td><td>Frank Corrado (SJS)</td><td>79</td><td>8-34-42</td></tr>
<tr><td>10</td><td>Josh Morrissey (VAN)</td><td>82</td><td>7-33-40</td></tr>
<tr><td>11</td><td>Nikolay Prokhorkin (MIN)</td><td>81</td><td>16-22-38</td></tr>
<tr><td>12</td><td>Shea Theodore (NYR)</td><td>80</td><td>7-29-36</td></tr>
<tr><td>13</td><td>Martin Gernat (EDM)</td><td>80</td><td>2-33-35</td></tr>
<tr><td>14</td><td>David Musil (NYI)</td><td>82</td><td>6-28-34</td></tr>
<tr><td>15</td><td>Dylan Demelo (CAR)</td><td>76</td><td>6-27-33</td></tr>
<tr><td>16</td><td>Samuel Morin (TBL)</td><td>61</td><td>4-29-33</td></tr>
<tr><td>17</td><td>Kevin Fiala (LOS)</td><td>50</td><td>13-19-32</td></tr>
<tr><td>18</td><td>Vince Hinostroza (NSH)</td><td>82</td><td>8-23-31</td></tr>
<tr><td>19</td><td>Filip Zadina (WPG)</td><td>74</td><td>16-14-30</td></tr>
<tr><td>20</td><td>Jake Guentzel (QUE)</td><td>81</td><td>12-18-30</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Luca Sbisa (WPG)</td><td>82</td><td>268</td></tr>
<tr><td>2</td><td>Luke Schenn (TOR)</td><td>82</td><td>256</td></tr>
<tr><td>3</td><td>Milan Lucic (CAR)</td><td>82</td><td>249</td></tr>
<tr><td>4</td><td>Travis Hamonic (ARZ)</td><td>80</td><td>236</td></tr>
<tr><td>5</td><td>David Backes (CHI)</td><td>82</td><td>225</td></tr>
<tr><td>6</td><td>Ryan Wilson (PIT)</td><td>82</td><td>225</td></tr>
<tr><td>7</td><td>Ryan Callahan (EDM)</td><td>82</td><td>220</td></tr>
<tr><td>8</td><td>Duncan Siemens (DAL)</td><td>82</td><td>214</td></tr>
<tr><td>9</td><td>James Neal (WSH)</td><td>82</td><td>212</td></tr>
<tr><td>10</td><td>Karl Alzner (CAR)</td><td>82</td><td>208</td></tr>
<tr><td>11</td><td>Brad Marchand (BOS)</td><td>82</td><td>202</td></tr>
<tr><td>12</td><td>Jamie Oleksiak (ANH)</td><td>82</td><td>202</td></tr>
<tr><td>13</td><td>Dustin Byfuglien (NYI)</td><td>82</td><td>196</td></tr>
<tr><td>14</td><td>Ryan Suter (MIN)</td><td>78</td><td>195</td></tr>
<tr><td>15</td><td>Dylan McIlrath (NYR)</td><td>82</td><td>195</td></tr>
<tr><td>16</td><td>Brent Seabrook (CLB)</td><td>81</td><td>194</td></tr>
<tr><td>17</td><td>Adam Larsson (PHI)</td><td>82</td><td>194</td></tr>
<tr><td>18</td><td>Tom Wilson (BUF)</td><td>79</td><td>193</td></tr>
<tr><td>19</td><td>Émile Poirier (NYI)</td><td>79</td><td>193</td></tr>
<tr><td>20</td><td>Mark Scheifele (STL)</td><td>82</td><td>193</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Erik Karlsson (OTT)</td><td>75</td><td>16</td></tr>
<tr><td>2</td><td>Michael Del Zotto (NYI)</td><td>82</td><td>15</td></tr>
<tr><td>3</td><td>Torey Krug (PHI)</td><td>82</td><td>15</td></tr>
<tr><td>4</td><td>Sidney Crosby (MTL)</td><td>62</td><td>13</td></tr>
<tr><td>5</td><td>Nicklas Backstrom (TOR)</td><td>82</td><td>13</td></tr>
<tr><td>6</td><td>Justin Schultz (ANH)</td><td>82</td><td>13</td></tr>
<tr><td>7</td><td>Travis Hamonic (ARZ)</td><td>80</td><td>12</td></tr>
<tr><td>8</td><td>Kristopher Letang (LOS)</td><td>82</td><td>12</td></tr>
<tr><td>9</td><td>Steven Stamkos (TBL)</td><td>82</td><td>12</td></tr>
<tr><td>10</td><td>Aleksander Barkov (NYR)</td><td>82</td><td>12</td></tr>
<tr><td>11</td><td>Jack Johnson (STL)</td><td>81</td><td>11</td></tr>
<tr><td>12</td><td>Kevin Shattenkirk (CLB)</td><td>82</td><td>11</td></tr>
<tr><td>13</td><td>Logan Couture (ARZ)</td><td>82</td><td>11</td></tr>
<tr><td>14</td><td>Aaron Ekblad (VAN)</td><td>82</td><td>11</td></tr>
<tr><td>15</td><td>Shea Weber (DAL)</td><td>68</td><td>10</td></tr>
<tr><td>16</td><td>Connor McDavid (CLB)</td><td>78</td><td>10</td></tr>
<tr><td>17</td><td>Michael Frolik (NYI)</td><td>80</td><td>10</td></tr>
<tr><td>18</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>10</td></tr>
<tr><td>19</td><td>Christian Ehrhoff (PIT)</td><td>82</td><td>10</td></tr>
<tr><td>20</td><td>Jeff Skinner (LOS)</td><td>82</td><td>10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Jaden Schwartz (DET)</td><td>64</td><td>2</td></tr>
<tr><td>2</td><td>Tyler Biggs (TOR)</td><td>82</td><td>2</td></tr>
<tr><td>3</td><td>Patrice Cormier (ARZ)</td><td>83</td><td>2</td></tr>
<tr><td>4</td><td>Reilly Smith (SEA)</td><td>83</td><td>2</td></tr>
<tr><td>5</td><td>Patrick Holland (LOS)</td><td>39</td><td>1</td></tr>
<tr><td>6</td><td>Erik Condra (PIT)</td><td>58</td><td>1</td></tr>
<tr><td>7</td><td>Joe Morrow (DET)</td><td>60</td><td>1</td></tr>
<tr><td>8</td><td>Jani Hakanpaa (COL)</td><td>63</td><td>1</td></tr>
<tr><td>9</td><td>Devante Smith-Pelly (TBL)</td><td>64</td><td>1</td></tr>
<tr><td>10</td><td>Chandler Stephenson (DET)</td><td>65</td><td>1</td></tr>
<tr><td>11</td><td>Jamie Benn (BOS)</td><td>66</td><td>1</td></tr>
<tr><td>12</td><td>Sam Gagner (EDM)</td><td>70</td><td>1</td></tr>
<tr><td>13</td><td>Quinton Howden (TBL)</td><td>70</td><td>1</td></tr>
<tr><td>14</td><td>Zach Budish (NSH)</td><td>70</td><td>1</td></tr>
<tr><td>15</td><td>Evgeny Dadonov (BUF)</td><td>71</td><td>1</td></tr>
<tr><td>16</td><td>Sean Couturier (DAL)</td><td>73</td><td>1</td></tr>
<tr><td>17</td><td>Vladimir Sobotka (PIT)</td><td>73</td><td>1</td></tr>
<tr><td>18</td><td>Tyler Toffoli (CAR)</td><td>74</td><td>1</td></tr>
<tr><td>19</td><td>Sam Bennett (MTL)</td><td>74</td><td>1</td></tr>
<tr><td>20</td><td>Roman Josi (NSH)</td><td>75</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Connor McDavid (CLB)</td><td>78</td><td>11</td></tr>
<tr><td>2</td><td>Alex Ovechkin (PIT)</td><td>74</td><td>10</td></tr>
<tr><td>3</td><td>David Pastrnak (ANH)</td><td>82</td><td>10</td></tr>
<tr><td>4</td><td>Milan Lucic (CAR)</td><td>82</td><td>9</td></tr>
<tr><td>5</td><td>Nathan MacKinnon (NSH)</td><td>82</td><td>9</td></tr>
<tr><td>6</td><td>Brandon Sutter (FLA)</td><td>82</td><td>8</td></tr>
<tr><td>7</td><td>Nicklas Backstrom (TOR)</td><td>82</td><td>8</td></tr>
<tr><td>8</td><td>Kevin Fiala (LOS)</td><td>50</td><td>7</td></tr>
<tr><td>9</td><td>Elias Pettersson (TBL)</td><td>78</td><td>7</td></tr>
<tr><td>10</td><td>Alex Galchenyuk (TBL)</td><td>80</td><td>7</td></tr>
<tr><td>11</td><td>Taylor Hall (EDM)</td><td>81</td><td>7</td></tr>
<tr><td>12</td><td>Brad Marchand (BOS)</td><td>82</td><td>7</td></tr>
<tr><td>13</td><td>Colin Wilson (NSH)</td><td>82</td><td>7</td></tr>
<tr><td>14</td><td>Jeff Skinner (LOS)</td><td>82</td><td>7</td></tr>
<tr><td>15</td><td>Matt Duchene (ANH)</td><td>82</td><td>7</td></tr>
<tr><td>16</td><td>Steven Stamkos (TBL)</td><td>82</td><td>7</td></tr>
<tr><td>17</td><td>Andre Burakovsky (WPG)</td><td>82</td><td>7</td></tr>
<tr><td>18</td><td>Patrice Bergeron (BOS)</td><td>73</td><td>6</td></tr>
<tr><td>19</td><td>Henrik Sedin (NSH)</td><td>78</td><td>6</td></tr>
<tr><td>20</td><td>Nazem Kadri (STL)</td><td>79</td><td>6</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Anthony Duclair (MTL)</td><td>82</td><td>6</td></tr>
<tr><td>2</td><td>Drew Doughty (LOS)</td><td>82</td><td>5</td></tr>
<tr><td>3</td><td>Clayton Keller (ANH)</td><td>77</td><td>4</td></tr>
<tr><td>4</td><td>Alex Galchenyuk (TBL)</td><td>80</td><td>4</td></tr>
<tr><td>5</td><td>Conor Sheary (PIT)</td><td>82</td><td>4</td></tr>
<tr><td>6</td><td>Logan Couture (ARZ)</td><td>82</td><td>4</td></tr>
<tr><td>7</td><td>Max Pacioretty (SEA)</td><td>82</td><td>4</td></tr>
<tr><td>8</td><td>Milan Lucic (CAR)</td><td>82</td><td>4</td></tr>
<tr><td>9</td><td>Steven Stamkos (TBL)</td><td>82</td><td>4</td></tr>
<tr><td>10</td><td>Valtteri Filppula (OTT)</td><td>57</td><td>3</td></tr>
<tr><td>11</td><td>Erik Johnson (ANH)</td><td>72</td><td>3</td></tr>
<tr><td>12</td><td>Frank Corrado (SJS)</td><td>79</td><td>3</td></tr>
<tr><td>13</td><td>Travis Hamonic (ARZ)</td><td>80</td><td>3</td></tr>
<tr><td>14</td><td>Evgeny Grachev (COL)</td><td>81</td><td>3</td></tr>
<tr><td>15</td><td>Mike Richards (MTL)</td><td>81</td><td>3</td></tr>
<tr><td>16</td><td>Nick Foligno (QUE)</td><td>82</td><td>3</td></tr>
<tr><td>17</td><td>Nicklas Backstrom (TOR)</td><td>82</td><td>3</td></tr>
<tr><td>18</td><td>Nikita Filatov (COL)</td><td>82</td><td>3</td></tr>
<tr><td>19</td><td>Tyler Bozak (LOS)</td><td>82</td><td>3</td></tr>
<tr><td>20</td><td>Brett Connolly (CGY)</td><td>82</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>James Neal (WSH)</td><td>82</td><td>2</td></tr>
<tr><td>2</td><td>Adam Erne (VAN)</td><td>84</td><td>2</td></tr>
<tr><td>3</td><td>Adrian Kempe (CGY)</td><td>37</td><td>1</td></tr>
<tr><td>4</td><td>Nikita Zadorov (TBL)</td><td>44</td><td>1</td></tr>
<tr><td>5</td><td>Ryan Getzlaf (DET)</td><td>56</td><td>1</td></tr>
<tr><td>6</td><td>Andrej Sekera (NJD)</td><td>64</td><td>1</td></tr>
<tr><td>7</td><td>Jaden Schwartz (DET)</td><td>64</td><td>1</td></tr>
<tr><td>8</td><td>Joel Edmundson (FLA)</td><td>65</td><td>1</td></tr>
<tr><td>9</td><td>Chandler Stephenson (DET)</td><td>65</td><td>1</td></tr>
<tr><td>10</td><td>Sam Gagner (EDM)</td><td>70</td><td>1</td></tr>
<tr><td>11</td><td>Theo Peckham (TOR)</td><td>70</td><td>1</td></tr>
<tr><td>12</td><td>Bobby Ryan (PIT)</td><td>71</td><td>1</td></tr>
<tr><td>13</td><td>Brendan Smith (QUE)</td><td>71</td><td>1</td></tr>
<tr><td>14</td><td>Yann Sauve (COL)</td><td>72</td><td>1</td></tr>
<tr><td>15</td><td>Valeri Nichushkin (STL)</td><td>72</td><td>1</td></tr>
<tr><td>16</td><td>Trevor Lewis (ANH)</td><td>73</td><td>1</td></tr>
<tr><td>17</td><td>Tyler Myers (BUF)</td><td>74</td><td>1</td></tr>
<tr><td>18</td><td>Tye McGinn (DAL)</td><td>74</td><td>1</td></tr>
<tr><td>19</td><td>Mikko Koivu (ARZ)</td><td>76</td><td>1</td></tr>
<tr><td>20</td><td>Jacob Trouba (NJD)</td><td>76</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Victor Hedman (OTT)</td><td>83</td><td>2 089</td></tr>
<tr><td>2</td><td>Jack Johnson (STL)</td><td>81</td><td>2 050</td></tr>
<tr><td>3</td><td>Luca Sbisa (WPG)</td><td>82</td><td>2 037</td></tr>
<tr><td>4</td><td>Marc-Edouard Vlasic (CAR)</td><td>82</td><td>2 037</td></tr>
<tr><td>5</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>2 031</td></tr>
<tr><td>6</td><td>Luke Schenn (TOR)</td><td>82</td><td>2 026</td></tr>
<tr><td>7</td><td>Morgan Rielly (TOR)</td><td>82</td><td>2 005</td></tr>
<tr><td>8</td><td>Karl Alzner (CAR)</td><td>82</td><td>2 003</td></tr>
<tr><td>9</td><td>Kevin Shattenkirk (CLB)</td><td>82</td><td>1 995</td></tr>
<tr><td>10</td><td>Drew Doughty (LOS)</td><td>82</td><td>1 987</td></tr>
<tr><td>11</td><td>Duncan Keith (PIT)</td><td>82</td><td>1 981</td></tr>
<tr><td>12</td><td>John Carlson (BOS)</td><td>82</td><td>1 959</td></tr>
<tr><td>13</td><td>Alex Goligoski (STL)</td><td>82</td><td>1 957</td></tr>
<tr><td>14</td><td>Dmitri Kulikov (DET)</td><td>81</td><td>1 949</td></tr>
<tr><td>15</td><td>Zach Bogosian (ARZ)</td><td>82</td><td>1 928</td></tr>
<tr><td>16</td><td>Keith Yandle (CLB)</td><td>82</td><td>1 921</td></tr>
<tr><td>17</td><td>Duncan Siemens (DAL)</td><td>82</td><td>1 913</td></tr>
<tr><td>18</td><td>Ryan Suter (MIN)</td><td>78</td><td>1 905</td></tr>
<tr><td>19</td><td>Kristopher Letang (LOS)</td><td>82</td><td>1 904</td></tr>
<tr><td>20</td><td>Alex Petrovic (DAL)</td><td>82</td><td>1 902</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>David Pastrnak (ANH)</td><td>82</td><td>3</td></tr>
<tr><td>2</td><td>Patrice Bergeron (BOS)</td><td>73</td><td>2</td></tr>
<tr><td>3</td><td>Connor McDavid (CLB)</td><td>78</td><td>2</td></tr>
<tr><td>4</td><td>Jeff Skinner (LOS)</td><td>82</td><td>2</td></tr>
<tr><td>5</td><td>Logan Couture (ARZ)</td><td>82</td><td>2</td></tr>
<tr><td>6</td><td>Nicklas Backstrom (TOR)</td><td>82</td><td>2</td></tr>
<tr><td>7</td><td>Patrik Berglund (SEA)</td><td>82</td><td>2</td></tr>
<tr><td>8</td><td>Nikita Kucherov (FLA)</td><td>82</td><td>2</td></tr>
<tr><td>9</td><td>Alexander Kerfoot (WPG)</td><td>84</td><td>2</td></tr>
<tr><td>10</td><td>Auston Matthews (DET)</td><td>71</td><td>1</td></tr>
<tr><td>11</td><td>Brendan Smith (QUE)</td><td>71</td><td>1</td></tr>
<tr><td>12</td><td>Alex Ovechkin (PIT)</td><td>74</td><td>1</td></tr>
<tr><td>13</td><td>Nikolaj Ehlers (VAN)</td><td>76</td><td>1</td></tr>
<tr><td>14</td><td>Maxwell Reinhart (STL)</td><td>77</td><td>1</td></tr>
<tr><td>15</td><td>P.K. Subban (TBL)</td><td>78</td><td>1</td></tr>
<tr><td>16</td><td>Elias Pettersson (TBL)</td><td>78</td><td>1</td></tr>
<tr><td>17</td><td>Michael Dal Colle (WSH)</td><td>79</td><td>1</td></tr>
<tr><td>18</td><td>Émile Poirier (NYI)</td><td>79</td><td>1</td></tr>
<tr><td>19</td><td>Brayden Schenn (TOR)</td><td>80</td><td>1</td></tr>
<tr><td>20</td><td>Michael Frolik (NYI)</td><td>80</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Michael Frolik (NYI)</td><td>80</td><td>3</td></tr>
<tr><td>2</td><td>Nick Foligno (QUE)</td><td>82</td><td>3</td></tr>
<tr><td>3</td><td>Rick Nash (CLB)</td><td>82</td><td>3</td></tr>
<tr><td>4</td><td>Sergei Kostitsyn (BUF)</td><td>64</td><td>2</td></tr>
<tr><td>5</td><td>Eric Staal (SJS)</td><td>79</td><td>2</td></tr>
<tr><td>6</td><td>Dylan Olsen (SJS)</td><td>79</td><td>2</td></tr>
<tr><td>7</td><td>Claude Giroux (PHI)</td><td>81</td><td>2</td></tr>
<tr><td>8</td><td>Dmitri Kulikov (DET)</td><td>81</td><td>2</td></tr>
<tr><td>9</td><td>Jason Demers (BUF)</td><td>81</td><td>2</td></tr>
<tr><td>10</td><td>Ahti Oksanen (VAN)</td><td>81</td><td>2</td></tr>
<tr><td>11</td><td>David Backes (CHI)</td><td>82</td><td>2</td></tr>
<tr><td>12</td><td>Luke Adam (NYI)</td><td>82</td><td>2</td></tr>
<tr><td>13</td><td>Tobias Rieder (EDM)</td><td>82</td><td>2</td></tr>
<tr><td>14</td><td>Morgan Rielly (TOR)</td><td>82</td><td>2</td></tr>
<tr><td>15</td><td>Colin Greening (PIT)</td><td>3</td><td>1</td></tr>
<tr><td>16</td><td>Ryan Sproul (MIN)</td><td>8</td><td>1</td></tr>
<tr><td>17</td><td>Christophe Lalancette (MIN)</td><td>11</td><td>1</td></tr>
<tr><td>18</td><td>Mirco Mueller (CLB)</td><td>18</td><td>1</td></tr>
<tr><td>19</td><td>Gabriel Gagné (QUE)</td><td>28</td><td>1</td></tr>
<tr><td>20</td><td>Joonas Donskoi (NYR)</td><td>45</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Luke Schenn (TOR)</td><td>82</td><td>9</td></tr>
<tr><td>2</td><td>Eric Staal (SJS)</td><td>79</td><td>8</td></tr>
<tr><td>3</td><td>Tanner Pearson (SJS)</td><td>81</td><td>7</td></tr>
<tr><td>4</td><td>Mike Richards (MTL)</td><td>81</td><td>6</td></tr>
<tr><td>5</td><td>Erik Karlsson (OTT)</td><td>75</td><td>5</td></tr>
<tr><td>6</td><td>Ty Rattie (WSH)</td><td>79</td><td>5</td></tr>
<tr><td>7</td><td>Rick Nash (CLB)</td><td>82</td><td>5</td></tr>
<tr><td>8</td><td>Steven Stamkos (TBL)</td><td>82</td><td>5</td></tr>
<tr><td>9</td><td>David Rundblad (PHI)</td><td>63</td><td>4</td></tr>
<tr><td>10</td><td>Jack Johnson (STL)</td><td>81</td><td>4</td></tr>
<tr><td>11</td><td>Jason Demers (BUF)</td><td>81</td><td>4</td></tr>
<tr><td>12</td><td>Nick Foligno (QUE)</td><td>82</td><td>4</td></tr>
<tr><td>13</td><td>Zachary Werenski (FLA)</td><td>49</td><td>3</td></tr>
<tr><td>14</td><td>Sergei Kostitsyn (BUF)</td><td>64</td><td>3</td></tr>
<tr><td>15</td><td>Jake Muzzin (QUE)</td><td>65</td><td>3</td></tr>
<tr><td>16</td><td>Evgeny Dadonov (BUF)</td><td>71</td><td>3</td></tr>
<tr><td>17</td><td>Vyacheslav Voynov (DET)</td><td>72</td><td>3</td></tr>
<tr><td>18</td><td>Alan Quine (CHI)</td><td>75</td><td>3</td></tr>
<tr><td>19</td><td>Stefan Elliott (WPG)</td><td>77</td><td>3</td></tr>
<tr><td>20</td><td>Elias Pettersson (TBL)</td><td>78</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Jonathan Toews (CHI)</td><td>82</td><td>230</td></tr>
<tr><td>2</td><td>David Krejci (OTT)</td><td>80</td><td>224</td></tr>
<tr><td>3</td><td>Louis Leblanc (TOR)</td><td>82</td><td>217</td></tr>
<tr><td>4</td><td>Ryan O'Reilly (STL)</td><td>82</td><td>209</td></tr>
<tr><td>5</td><td>Connor McDavid (CLB)</td><td>78</td><td>206</td></tr>
<tr><td>6</td><td>Derek Stepan (PIT)</td><td>82</td><td>204</td></tr>
<tr><td>7</td><td>Matt Duchene (ANH)</td><td>82</td><td>203</td></tr>
<tr><td>8</td><td>Michael Frolik (NYI)</td><td>80</td><td>199</td></tr>
<tr><td>9</td><td>Claude Giroux (PHI)</td><td>81</td><td>199</td></tr>
<tr><td>10</td><td>Steven Stamkos (TBL)</td><td>82</td><td>199</td></tr>
<tr><td>11</td><td>Aleksander Barkov (NYR)</td><td>82</td><td>198</td></tr>
<tr><td>12</td><td>Travis Zajac (CAR)</td><td>83</td><td>198</td></tr>
<tr><td>13</td><td>Paul Stastny (PIT)</td><td>82</td><td>193</td></tr>
<tr><td>14</td><td>Tobias Rieder (EDM)</td><td>82</td><td>192</td></tr>
<tr><td>15</td><td>Tyler Ennis (SJS)</td><td>82</td><td>190</td></tr>
<tr><td>16</td><td>Patrice Bergeron (BOS)</td><td>73</td><td>189</td></tr>
<tr><td>17</td><td>Ryan Nugent-Hopkins (DET)</td><td>79</td><td>188</td></tr>
<tr><td>18</td><td>Bryan Little (SEA)</td><td>83</td><td>188</td></tr>
<tr><td>19</td><td>Sean Couturier (DAL)</td><td>73</td><td>185</td></tr>
<tr><td>20</td><td>Jordan Staal (ARZ)</td><td>82</td><td>182</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Charlie Coyle (MIN)</td><td>82</td><td>4</td></tr>
<tr><td>2</td><td>Sean Monahan (COL)</td><td>59</td><td>3</td></tr>
<tr><td>3</td><td>Leon Draisaitl (DAL)</td><td>71</td><td>3</td></tr>
<tr><td>4</td><td>Nick Bjugstad (QUE)</td><td>76</td><td>3</td></tr>
<tr><td>5</td><td>Clayton Keller (ANH)</td><td>77</td><td>3</td></tr>
<tr><td>6</td><td>Connor McDavid (CLB)</td><td>78</td><td>3</td></tr>
<tr><td>7</td><td>Brayden Schenn (TOR)</td><td>80</td><td>3</td></tr>
<tr><td>8</td><td>Anze Kopitar (LOS)</td><td>82</td><td>3</td></tr>
<tr><td>9</td><td>James Neal (WSH)</td><td>82</td><td>3</td></tr>
<tr><td>10</td><td>Patrik Berglund (SEA)</td><td>82</td><td>3</td></tr>
<tr><td>11</td><td>Vladimir Tarasenko (STL)</td><td>82</td><td>3</td></tr>
<tr><td>12</td><td>Mark Scheifele (STL)</td><td>82</td><td>3</td></tr>
<tr><td>13</td><td>Evgeny Kuznetsov (MIN)</td><td>82</td><td>3</td></tr>
<tr><td>14</td><td>David Pastrnak (ANH)</td><td>82</td><td>3</td></tr>
<tr><td>15</td><td>Tomas Jurco (SEA)</td><td>57</td><td>2</td></tr>
<tr><td>16</td><td>Sidney Crosby (MTL)</td><td>62</td><td>2</td></tr>
<tr><td>17</td><td>Devante Smith-Pelly (TBL)</td><td>64</td><td>2</td></tr>
<tr><td>18</td><td>Zach Parise (MTL)</td><td>68</td><td>2</td></tr>
<tr><td>19</td><td>Mikko Koivu (ARZ)</td><td>76</td><td>2</td></tr>
<tr><td>20</td><td>Nazem Kadri (STL)</td><td>79</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Drew Stafford (PHI)</td><td>86</td><td>4</td></tr>
<tr><td>2</td><td>Jack Hillen (COL)</td><td>82</td><td>3</td></tr>
<tr><td>3</td><td>Ryan McDonagh (NYR)</td><td>50</td><td>2</td></tr>
<tr><td>4</td><td>Brady Tkachuk (WPG)</td><td>66</td><td>2</td></tr>
<tr><td>5</td><td>Yann Sauve (COL)</td><td>72</td><td>2</td></tr>
<tr><td>6</td><td>Jake McCabe (NYR)</td><td>72</td><td>2</td></tr>
<tr><td>7</td><td>Noah Juulsen (ANH)</td><td>73</td><td>2</td></tr>
<tr><td>8</td><td>Evgeny Grachev (COL)</td><td>81</td><td>2</td></tr>
<tr><td>9</td><td>Mike Richards (MTL)</td><td>81</td><td>2</td></tr>
<tr><td>10</td><td>Alex Pietrangelo (MTL)</td><td>82</td><td>2</td></tr>
<tr><td>11</td><td>Brian Lee (NYI)</td><td>82</td><td>2</td></tr>
<tr><td>12</td><td>Dennis Wideman (CHI)</td><td>82</td><td>2</td></tr>
<tr><td>13</td><td>Jonathan Toews (CHI)</td><td>82</td><td>2</td></tr>
<tr><td>14</td><td>Charles McAvoy (BOS)</td><td>82</td><td>2</td></tr>
<tr><td>15</td><td>T.J. Brennan (ANH)</td><td>82</td><td>2</td></tr>
<tr><td>16</td><td>Rickard Rakell (NYR)</td><td>82</td><td>2</td></tr>
<tr><td>17</td><td>Jeff Carter (OTT)</td><td>83</td><td>2</td></tr>
<tr><td>18</td><td>Nikita Nesterov (CLB)</td><td>3</td><td>1</td></tr>
<tr><td>19</td><td>Grant Clitsome (SJS)</td><td>14</td><td>1</td></tr>
<tr><td>20</td><td>Ziyat Paigin (NYR)</td><td>24</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Ryan McDonagh (NYR)</td><td>50</td><td>2</td></tr>
<tr><td>2</td><td>Mike Richards (MTL)</td><td>81</td><td>2</td></tr>
<tr><td>3</td><td>Jack Hillen (COL)</td><td>82</td><td>2</td></tr>
<tr><td>4</td><td>Drew Stafford (PHI)</td><td>86</td><td>2</td></tr>
<tr><td>5</td><td>Nikita Zadorov (TBL)</td><td>44</td><td>1</td></tr>
<tr><td>6</td><td>Griffin Reinhart (NYR)</td><td>56</td><td>1</td></tr>
<tr><td>7</td><td>Joe Morrow (DET)</td><td>60</td><td>1</td></tr>
<tr><td>8</td><td>Jake Dotchin (ARZ)</td><td>60</td><td>1</td></tr>
<tr><td>9</td><td>Anton Stralman (PIT)</td><td>63</td><td>1</td></tr>
<tr><td>10</td><td>Joel Edmundson (FLA)</td><td>65</td><td>1</td></tr>
<tr><td>11</td><td>Dan Hamhuis (CHI)</td><td>67</td><td>1</td></tr>
<tr><td>12</td><td>Roman Polak (CHI)</td><td>68</td><td>1</td></tr>
<tr><td>13</td><td>Jake McCabe (NYR)</td><td>72</td><td>1</td></tr>
<tr><td>14</td><td>Noah Juulsen (ANH)</td><td>73</td><td>1</td></tr>
<tr><td>15</td><td>Stefan Matteau (VAN)</td><td>74</td><td>1</td></tr>
<tr><td>16</td><td>Keith Aulie (SEA)</td><td>76</td><td>1</td></tr>
<tr><td>17</td><td>Tyson Barrie (NSH)</td><td>79</td><td>1</td></tr>
<tr><td>18</td><td>Frank Corrado (SJS)</td><td>79</td><td>1</td></tr>
<tr><td>19</td><td>Claude Giroux (PHI)</td><td>81</td><td>1</td></tr>
<tr><td>20</td><td>Darren Helm (DET)</td><td>81</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Josh Harding (BOS)</td><td>50</td><td>0,924</td></tr>
<tr><td>2</td><td>Jaroslav Halak (MTL)</td><td>63</td><td>0,918</td></tr>
<tr><td>3</td><td>Carey Price (CHI)</td><td>68</td><td>0,917</td></tr>
<tr><td>4</td><td>Jack Campbell (NYR)</td><td>54</td><td>0,915</td></tr>
<tr><td>5</td><td>Cam Ward (PIT)</td><td>64</td><td>0,914</td></tr>
<tr><td>6</td><td>Matt Hackett (FLA)</td><td>48</td><td>0,912</td></tr>
<tr><td>7</td><td>Sergei Bobrovsky (NJD)</td><td>67</td><td>0,910</td></tr>
<tr><td>8</td><td>Braden Holtby (WSH)</td><td>58</td><td>0,910</td></tr>
<tr><td>9</td><td>Andrew Hammond (COL)</td><td>66</td><td>0,910</td></tr>
<tr><td>10</td><td>Jonas Hiller (NSH)</td><td>49</td><td>0,909</td></tr>
<tr><td>11</td><td>Kari Lehtonen (WPG)</td><td>72</td><td>0,909</td></tr>
<tr><td>12</td><td>Jonathan Quick (TBL)</td><td>78</td><td>0,909</td></tr>
<tr><td>13</td><td>Kevin Poulin (CLB)</td><td>69</td><td>0,909</td></tr>
<tr><td>14</td><td>Tuukka Rask (STL)</td><td>67</td><td>0,908</td></tr>
<tr><td>15</td><td>Michal Neuvirth (LOS)</td><td>65</td><td>0,907</td></tr>
<tr><td>16</td><td>Pekka Rinne (ARZ)</td><td>61</td><td>0,907</td></tr>
<tr><td>17</td><td>Ondrej Pavelec (DET)</td><td>68</td><td>0,906</td></tr>
<tr><td>18</td><td>Antti Niemi (CGY)</td><td>47</td><td>0,905</td></tr>
<tr><td>19</td><td>Ilya Bryzgalov (ANH)</td><td>62</td><td>0,905</td></tr>
<tr><td>20</td><td>James Reimer (OTT)</td><td>64</td><td>0,905</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Josh Harding (BOS)</td><td>50</td><td>2,22</td></tr>
<tr><td>2</td><td>Jaroslav Halak (MTL)</td><td>63</td><td>2,25</td></tr>
<tr><td>3</td><td>Michal Neuvirth (LOS)</td><td>65</td><td>2,59</td></tr>
<tr><td>4</td><td>Jack Campbell (NYR)</td><td>54</td><td>2,61</td></tr>
<tr><td>5</td><td>Carey Price (CHI)</td><td>68</td><td>2,63</td></tr>
<tr><td>6</td><td>Jonas Hiller (NSH)</td><td>49</td><td>2,64</td></tr>
<tr><td>7</td><td>Sergei Bobrovsky (NJD)</td><td>67</td><td>2,65</td></tr>
<tr><td>8</td><td>Matt Hackett (FLA)</td><td>48</td><td>2,66</td></tr>
<tr><td>9</td><td>Pekka Rinne (ARZ)</td><td>61</td><td>2,69</td></tr>
<tr><td>10</td><td>Jonathan Quick (TBL)</td><td>78</td><td>2,71</td></tr>
<tr><td>11</td><td>Tuukka Rask (STL)</td><td>67</td><td>2,71</td></tr>
<tr><td>12</td><td>Antti Niemi (CGY)</td><td>47</td><td>2,73</td></tr>
<tr><td>13</td><td>Matt Murray (FLA)</td><td>73</td><td>2,73</td></tr>
<tr><td>14</td><td>Ilya Bryzgalov (ANH)</td><td>62</td><td>2,74</td></tr>
<tr><td>15</td><td>Cam Ward (PIT)</td><td>64</td><td>2,77</td></tr>
<tr><td>16</td><td>Kari Lehtonen (WPG)</td><td>72</td><td>2,77</td></tr>
<tr><td>17</td><td>Andrew Hammond (COL)</td><td>66</td><td>2,78</td></tr>
<tr><td>18</td><td>Ondrej Pavelec (DET)</td><td>68</td><td>2,83</td></tr>
<tr><td>19</td><td>James Reimer (OTT)</td><td>64</td><td>2,85</td></tr>
<tr><td>20</td><td>Mark Visentin (ARZ)</td><td>63</td><td>2,87</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Jonathan Quick (TBL)</td><td>78</td><td>4 583</td></tr>
<tr><td>2</td><td>Kari Lehtonen (WPG)</td><td>72</td><td>4 206</td></tr>
<tr><td>3</td><td>Matt Murray (FLA)</td><td>73</td><td>4 151</td></tr>
<tr><td>4</td><td>Andrey Vasilevskiy (QUE)</td><td>70</td><td>4 056</td></tr>
<tr><td>5</td><td>Marc-Andre Fleury (EDM)</td><td>67</td><td>4 040</td></tr>
<tr><td>6</td><td>Steve Mason (TOR)</td><td>72</td><td>4 015</td></tr>
<tr><td>7</td><td>Kevin Poulin (CLB)</td><td>69</td><td>4 004</td></tr>
<tr><td>8</td><td>Ondrej Pavelec (DET)</td><td>68</td><td>3 983</td></tr>
<tr><td>9</td><td>Jacob Markstrom (SEA)</td><td>68</td><td>3 970</td></tr>
<tr><td>10</td><td>Tuukka Rask (STL)</td><td>67</td><td>3 938</td></tr>
<tr><td>11</td><td>Cory Schneider (VAN)</td><td>68</td><td>3 881</td></tr>
<tr><td>12</td><td>Carey Price (CHI)</td><td>68</td><td>3 876</td></tr>
<tr><td>13</td><td>Sergei Bobrovsky (NJD)</td><td>67</td><td>3 853</td></tr>
<tr><td>14</td><td>Michal Neuvirth (LOS)</td><td>65</td><td>3 848</td></tr>
<tr><td>15</td><td>Jaroslav Halak (MTL)</td><td>63</td><td>3 843</td></tr>
<tr><td>16</td><td>Andrew Hammond (COL)</td><td>66</td><td>3 836</td></tr>
<tr><td>17</td><td>Calvin Pickard (CAR)</td><td>63</td><td>3 726</td></tr>
<tr><td>18</td><td>James Reimer (OTT)</td><td>64</td><td>3 721</td></tr>
<tr><td>19</td><td>Ilya Bryzgalov (ANH)</td><td>62</td><td>3 564</td></tr>
<tr><td>20</td><td>Mark Visentin (ARZ)</td><td>63</td><td>3 556</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Jonathan Quick (TBL)</td><td>78</td><td>2273</td></tr>
<tr><td>2</td><td>Kari Lehtonen (WPG)</td><td>72</td><td>2132</td></tr>
<tr><td>3</td><td>Kevin Poulin (CLB)</td><td>69</td><td>2119</td></tr>
<tr><td>4</td><td>Andrey Vasilevskiy (QUE)</td><td>70</td><td>2090</td></tr>
<tr><td>5</td><td>Marc-Andre Fleury (EDM)</td><td>67</td><td>2077</td></tr>
<tr><td>6</td><td>Carey Price (CHI)</td><td>68</td><td>2043</td></tr>
<tr><td>7</td><td>Jacob Markstrom (SEA)</td><td>68</td><td>2039</td></tr>
<tr><td>8</td><td>Ondrej Pavelec (DET)</td><td>68</td><td>1997</td></tr>
<tr><td>9</td><td>Steve Mason (TOR)</td><td>72</td><td>1997</td></tr>
<tr><td>10</td><td>Matt Murray (FLA)</td><td>73</td><td>1976</td></tr>
<tr><td>11</td><td>Andrew Hammond (COL)</td><td>66</td><td>1975</td></tr>
<tr><td>12</td><td>Tuukka Rask (STL)</td><td>67</td><td>1945</td></tr>
<tr><td>13</td><td>Sergei Bobrovsky (NJD)</td><td>67</td><td>1896</td></tr>
<tr><td>14</td><td>Cam Ward (PIT)</td><td>64</td><td>1885</td></tr>
<tr><td>15</td><td>James Reimer (OTT)</td><td>64</td><td>1856</td></tr>
<tr><td>16</td><td>Cory Schneider (VAN)</td><td>68</td><td>1856</td></tr>
<tr><td>17</td><td>Calvin Pickard (CAR)</td><td>63</td><td>1838</td></tr>
<tr><td>18</td><td>Michal Neuvirth (LOS)</td><td>65</td><td>1791</td></tr>
<tr><td>19</td><td>Braden Holtby (WSH)</td><td>58</td><td>1772</td></tr>
<tr><td>20</td><td>Jaroslav Halak (MTL)</td><td>63</td><td>1756</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Jack Campbell (NYR)</td><td>54</td><td>7</td></tr>
<tr><td>2</td><td>Carey Price (CHI)</td><td>68</td><td>7</td></tr>
<tr><td>3</td><td>Jonathan Quick (TBL)</td><td>78</td><td>7</td></tr>
<tr><td>4</td><td>Mark Visentin (ARZ)</td><td>63</td><td>6</td></tr>
<tr><td>5</td><td>Jaroslav Halak (MTL)</td><td>63</td><td>5</td></tr>
<tr><td>6</td><td>Sergei Bobrovsky (NJD)</td><td>67</td><td>5</td></tr>
<tr><td>7</td><td>Cory Schneider (VAN)</td><td>68</td><td>5</td></tr>
<tr><td>8</td><td>Ondrej Pavelec (DET)</td><td>68</td><td>5</td></tr>
<tr><td>9</td><td>Matt Murray (FLA)</td><td>73</td><td>5</td></tr>
<tr><td>10</td><td>Ryan Miller (BUF)</td><td>47</td><td>4</td></tr>
<tr><td>11</td><td>Matt Hackett (FLA)</td><td>48</td><td>4</td></tr>
<tr><td>12</td><td>Jonas Hiller (NSH)</td><td>49</td><td>4</td></tr>
<tr><td>13</td><td>Ilya Bryzgalov (ANH)</td><td>62</td><td>4</td></tr>
<tr><td>14</td><td>Michal Neuvirth (LOS)</td><td>65</td><td>4</td></tr>
<tr><td>15</td><td>Steve Mason (TOR)</td><td>72</td><td>4</td></tr>
<tr><td>16</td><td>Darcy Kuemper (VAN)</td><td>22</td><td>3</td></tr>
<tr><td>17</td><td>Henrik Lundqvist (NYR)</td><td>37</td><td>3</td></tr>
<tr><td>18</td><td>Brendan Burke (DAL)</td><td>42</td><td>3</td></tr>
<tr><td>19</td><td>Pekka Rinne (ARZ)</td><td>61</td><td>3</td></tr>
<tr><td>20</td><td>James Reimer (OTT)</td><td>64</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Jonathan Quick (TBL)</td><td>78</td><td>48</td></tr>
<tr><td>2</td><td>Michal Neuvirth (LOS)</td><td>65</td><td>44</td></tr>
<tr><td>3</td><td>Jaroslav Halak (MTL)</td><td>63</td><td>43</td></tr>
<tr><td>4</td><td>Tuukka Rask (STL)</td><td>67</td><td>40</td></tr>
<tr><td>5</td><td>Carey Price (CHI)</td><td>68</td><td>36</td></tr>
<tr><td>6</td><td>Josh Harding (BOS)</td><td>50</td><td>35</td></tr>
<tr><td>7</td><td>Mark Visentin (ARZ)</td><td>63</td><td>35</td></tr>
<tr><td>8</td><td>Jacob Markstrom (SEA)</td><td>68</td><td>35</td></tr>
<tr><td>9</td><td>Ondrej Pavelec (DET)</td><td>68</td><td>35</td></tr>
<tr><td>10</td><td>Steve Mason (TOR)</td><td>72</td><td>35</td></tr>
<tr><td>11</td><td>Matt Murray (FLA)</td><td>73</td><td>35</td></tr>
<tr><td>12</td><td>James Reimer (OTT)</td><td>64</td><td>34</td></tr>
<tr><td>13</td><td>Andrew Hammond (COL)</td><td>66</td><td>33</td></tr>
<tr><td>14</td><td>Ilya Bryzgalov (ANH)</td><td>62</td><td>32</td></tr>
<tr><td>15</td><td>Marc-Andre Fleury (EDM)</td><td>67</td><td>32</td></tr>
<tr><td>16</td><td>Cory Schneider (VAN)</td><td>68</td><td>31</td></tr>
<tr><td>17</td><td>Kari Lehtonen (WPG)</td><td>72</td><td>31</td></tr>
<tr><td>18</td><td>Cam Ward (PIT)</td><td>64</td><td>30</td></tr>
<tr><td>19</td><td>Kevin Poulin (CLB)</td><td>69</td><td>29</td></tr>
<tr><td>20</td><td>Jack Campbell (NYR)</td><td>54</td><td>28</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Aaron Dell (CLB)</td><td>9</td><td>1,000</td></tr>
<tr><td>2</td><td>Craig Anderson (ARZ)</td><td>3</td><td>1,000</td></tr>
<tr><td>3</td><td>Jhonas Enroth (CHI)</td><td>3</td><td>1,000</td></tr>
<tr><td>4</td><td>Martin Jones (COL)</td><td>3</td><td>1,000</td></tr>
<tr><td>5</td><td>Emil Garipov (DET)</td><td>2</td><td>1,000</td></tr>
<tr><td>6</td><td>Calvin Pickard (CAR)</td><td>21</td><td>0,952</td></tr>
<tr><td>7</td><td>Corey Crawford (DAL)</td><td>9</td><td>0,889</td></tr>
<tr><td>8</td><td>Michal Neuvirth (LOS)</td><td>15</td><td>0,867</td></tr>
<tr><td>9</td><td>Jonathan Quick (TBL)</td><td>20</td><td>0,850</td></tr>
<tr><td>10</td><td>Steve Mason (TOR)</td><td>20</td><td>0,850</td></tr>
<tr><td>11</td><td>Jack Campbell (NYR)</td><td>19</td><td>0,842</td></tr>
<tr><td>12</td><td>Tuukka Rask (STL)</td><td>24</td><td>0,833</td></tr>
<tr><td>13</td><td>Ben Bishop (NYI)</td><td>6</td><td>0,833</td></tr>
<tr><td>14</td><td>Ilya Bryzgalov (ANH)</td><td>16</td><td>0,813</td></tr>
<tr><td>15</td><td>Brendan Burke (DAL)</td><td>21</td><td>0,810</td></tr>
<tr><td>16</td><td>Ryan Miller (BUF)</td><td>15</td><td>0,800</td></tr>
<tr><td>17</td><td>Brian Elliott (PHI)</td><td>5</td><td>0,800</td></tr>
<tr><td>18</td><td>Jonas Hiller (NSH)</td><td>5</td><td>0,800</td></tr>
<tr><td>19</td><td>Benjamin Conz (OTT)</td><td>5</td><td>0,800</td></tr>
<tr><td>20</td><td>Josh Harding (BOS)</td><td>29</td><td>0,793</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Andrey Vasilevskiy (QUE)</td><td>70</td><td>34</td></tr>
<tr><td>2</td><td>Kari Lehtonen (WPG)</td><td>72</td><td>33</td></tr>
<tr><td>3</td><td>Sergei Bobrovsky (NJD)</td><td>67</td><td>32</td></tr>
<tr><td>4</td><td>Cory Schneider (VAN)</td><td>68</td><td>32</td></tr>
<tr><td>5</td><td>Kevin Poulin (CLB)</td><td>69</td><td>31</td></tr>
<tr><td>6</td><td>Steve Mason (TOR)</td><td>72</td><td>30</td></tr>
<tr><td>7</td><td>Calvin Pickard (CAR)</td><td>63</td><td>29</td></tr>
<tr><td>8</td><td>Pekka Rinne (ARZ)</td><td>61</td><td>27</td></tr>
<tr><td>9</td><td>Marc-Andre Fleury (EDM)</td><td>67</td><td>27</td></tr>
<tr><td>10</td><td>Ondrej Pavelec (DET)</td><td>68</td><td>27</td></tr>
<tr><td>11</td><td>Matt Murray (FLA)</td><td>73</td><td>27</td></tr>
<tr><td>12</td><td>Ben Bishop (NYI)</td><td>57</td><td>25</td></tr>
<tr><td>13</td><td>Braden Holtby (WSH)</td><td>58</td><td>25</td></tr>
<tr><td>14</td><td>Corey Crawford (DAL)</td><td>45</td><td>23</td></tr>
<tr><td>15</td><td>Ilya Bryzgalov (ANH)</td><td>62</td><td>23</td></tr>
<tr><td>16</td><td>James Reimer (OTT)</td><td>64</td><td>23</td></tr>
<tr><td>17</td><td>Jacob Markstrom (SEA)</td><td>68</td><td>23</td></tr>
<tr><td>18</td><td>Jonathan Quick (TBL)</td><td>78</td><td>23</td></tr>
<tr><td>19</td><td>Robin Lehner (PHI)</td><td>54</td><td>22</td></tr>
<tr><td>20</td><td>Cam Ward (PIT)</td><td>64</td><td>22</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
