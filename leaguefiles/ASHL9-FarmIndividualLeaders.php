<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Individual Leaders</title>
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
<b>Minimum Games Played: 40</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Ales Hemsky (WBS)</td><td>80</td><td>35</td></tr>
<tr><td>2</td><td>Valentin Zykov (OKC)</td><td>80</td><td>35</td></tr>
<tr><td>3</td><td>Rihards Bukarts (SAR)</td><td>78</td><td>31</td></tr>
<tr><td>4</td><td>Daniel Bernhardt (LAN)</td><td>78</td><td>31</td></tr>
<tr><td>5</td><td>Rudolfs Balcers (LAV)</td><td>80</td><td>31</td></tr>
<tr><td>6</td><td>Denis Guryanov (CTW)</td><td>80</td><td>31</td></tr>
<tr><td>7</td><td>Lauri Korpikoski (LVG)</td><td>77</td><td>30</td></tr>
<tr><td>8</td><td>Warren Foegele (RNO)</td><td>79</td><td>30</td></tr>
<tr><td>9</td><td>Pavel Padakin (NOR)</td><td>80</td><td>30</td></tr>
<tr><td>10</td><td>Antoine Morand (OKC)</td><td>70</td><td>29</td></tr>
<tr><td>11</td><td>Sergey Tolchinsky (LKE)</td><td>80</td><td>29</td></tr>
<tr><td>12</td><td>Byron Froese (RFD)</td><td>80</td><td>29</td></tr>
<tr><td>13</td><td>Anton Lander (LKE)</td><td>78</td><td>28</td></tr>
<tr><td>14</td><td>Austin Czarnik (RFD)</td><td>80</td><td>28</td></tr>
<tr><td>15</td><td>Gabriel Gagné (CHI)</td><td>74</td><td>27</td></tr>
<tr><td>16</td><td>Jimmy Vesey (LVG)</td><td>76</td><td>27</td></tr>
<tr><td>17</td><td>Andrew Ladd (CHA)</td><td>80</td><td>27</td></tr>
<tr><td>18</td><td>Sonny Milano (LAV)</td><td>80</td><td>27</td></tr>
<tr><td>19</td><td>Alexandre Mallet (ADK)</td><td>80</td><td>26</td></tr>
<tr><td>20</td><td>Jannik Hansen (GRG)</td><td>68</td><td>25</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Ryan Graves (MAN)</td><td>80</td><td>56</td></tr>
<tr><td>2</td><td>Julius Honka (BNG)</td><td>72</td><td>53</td></tr>
<tr><td>3</td><td>Samuel Morin (RNO)</td><td>70</td><td>52</td></tr>
<tr><td>4</td><td>Mark Barberio (CHA)</td><td>80</td><td>51</td></tr>
<tr><td>5</td><td>Colby Robak (SAR)</td><td>80</td><td>51</td></tr>
<tr><td>6</td><td>Christian Wolanin (TRD)</td><td>80</td><td>48</td></tr>
<tr><td>7</td><td>Steve Weinstein (HOU)</td><td>79</td><td>47</td></tr>
<tr><td>8</td><td>Otto Leskinen (OKC)</td><td>80</td><td>47</td></tr>
<tr><td>9</td><td>Ethan Bear (CTW)</td><td>80</td><td>47</td></tr>
<tr><td>10</td><td>Jack Dougherty (OKC)</td><td>80</td><td>46</td></tr>
<tr><td>11</td><td>Lukas Bengtsson (PAR)</td><td>80</td><td>44</td></tr>
<tr><td>12</td><td>Louis Belpedio (JOL)</td><td>80</td><td>44</td></tr>
<tr><td>13</td><td>Xavier Ouellet (MIA)</td><td>69</td><td>43</td></tr>
<tr><td>14</td><td>Erik Foley (BNG)</td><td>78</td><td>42</td></tr>
<tr><td>15</td><td>Anthony DeAngelo (LAN)</td><td>78</td><td>42</td></tr>
<tr><td>16</td><td>Maxim Chudinov (LVG)</td><td>79</td><td>42</td></tr>
<tr><td>17</td><td>Jérémy Lauzon (RNO)</td><td>80</td><td>42</td></tr>
<tr><td>18</td><td>Anthony Cirelli (GAT)</td><td>80</td><td>42</td></tr>
<tr><td>19</td><td>Trevor Murphy (BRI)</td><td>74</td><td>40</td></tr>
<tr><td>20</td><td>Dillon Heatherington (PAR)</td><td>78</td><td>40</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Valentin Zykov (OKC)</td><td>80</td><td>315</td></tr>
<tr><td>2</td><td>Sergey Tolchinsky (LKE)</td><td>80</td><td>295</td></tr>
<tr><td>3</td><td>Anton Lander (LKE)</td><td>78</td><td>291</td></tr>
<tr><td>4</td><td>Maxwell Reinhart (PEO)</td><td>73</td><td>280</td></tr>
<tr><td>5</td><td>Rudolfs Balcers (LAV)</td><td>80</td><td>280</td></tr>
<tr><td>6</td><td>Ales Hemsky (WBS)</td><td>80</td><td>275</td></tr>
<tr><td>7</td><td>Paul Bittner (OKC)</td><td>80</td><td>274</td></tr>
<tr><td>8</td><td>Pavel Padakin (NOR)</td><td>80</td><td>262</td></tr>
<tr><td>9</td><td>Daniel Sprong (LAV)</td><td>77</td><td>259</td></tr>
<tr><td>10</td><td>Warren Foegele (RNO)</td><td>79</td><td>258</td></tr>
<tr><td>11</td><td>Conner Bleackley (LVG)</td><td>80</td><td>257</td></tr>
<tr><td>12</td><td>Miles Wood (GAT)</td><td>71</td><td>255</td></tr>
<tr><td>13</td><td>Justin Auger (RFD)</td><td>77</td><td>253</td></tr>
<tr><td>14</td><td>Byron Froese (RFD)</td><td>80</td><td>251</td></tr>
<tr><td>15</td><td>Sonny Milano (LAV)</td><td>80</td><td>247</td></tr>
<tr><td>16</td><td>Kenny Agostino (CHA)</td><td>80</td><td>245</td></tr>
<tr><td>17</td><td>Brandon Pirri (JOL)</td><td>75</td><td>244</td></tr>
<tr><td>18</td><td>Anthony Cirelli (GAT)</td><td>80</td><td>243</td></tr>
<tr><td>19</td><td>A.J. Greer (RNO)</td><td>71</td><td>242</td></tr>
<tr><td>20</td><td>Erik Foley (BNG)</td><td>78</td><td>242</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Marcus Karlberg (SPR)</td><td>62</td><td>20,59%</td></tr>
<tr><td>2</td><td>Michael Stone (CHA)</td><td>71</td><td>16,87%</td></tr>
<tr><td>3</td><td>Andrea Kristler (SAR)</td><td>80</td><td>16,67%</td></tr>
<tr><td>4</td><td>Ian McCoshen (MIA)</td><td>63</td><td>16,47%</td></tr>
<tr><td>5</td><td>Brendan Mikkelson (ALB)</td><td>63</td><td>16,42%</td></tr>
<tr><td>6</td><td>Matthias Plachta (HOU)</td><td>68</td><td>15,97%</td></tr>
<tr><td>7</td><td>Jamie Arniel (PRO)</td><td>70</td><td>15,48%</td></tr>
<tr><td>8</td><td>Daniel Bernhardt (LAN)</td><td>78</td><td>14,98%</td></tr>
<tr><td>9</td><td>Jussi Jokinen (HOU)</td><td>72</td><td>14,96%</td></tr>
<tr><td>10</td><td>Dalton Thrower (PRO)</td><td>43</td><td>14,89%</td></tr>
<tr><td>11</td><td>Dominik Kahun (LAN)</td><td>72</td><td>14,84%</td></tr>
<tr><td>12</td><td>Zach Pochiro (RFD)</td><td>73</td><td>14,56%</td></tr>
<tr><td>13</td><td>Joel Teasdale (RNO)</td><td>80</td><td>14,44%</td></tr>
<tr><td>14</td><td>Clark Bishop (TRD)</td><td>68</td><td>14,29%</td></tr>
<tr><td>15</td><td>Jimmy Vesey (LVG)</td><td>76</td><td>14,21%</td></tr>
<tr><td>16</td><td>Christian Wolanin (TRD)</td><td>80</td><td>14,18%</td></tr>
<tr><td>17</td><td>Manuel Wiederer (RNO)</td><td>80</td><td>14,10%</td></tr>
<tr><td>18</td><td>Nick Suzuki (ADK)</td><td>52</td><td>14,06%</td></tr>
<tr><td>19</td><td>Martin Erat (WBS)</td><td>52</td><td>14,05%</td></tr>
<tr><td>20</td><td>Anton Blidh (SPR)</td><td>80</td><td>13,99%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Byron Froese (RFD)</td><td>80</td><td>29-37-66</td></tr>
<tr><td>2</td><td>Anthony Cirelli (GAT)</td><td>80</td><td>23-42-65</td></tr>
<tr><td>3</td><td>Mads Eller (NOR)</td><td>80</td><td>20-40-60</td></tr>
<tr><td>4</td><td>Anton Lander (LKE)</td><td>78</td><td>28-31-59</td></tr>
<tr><td>5</td><td>Denis Malgin (CTW)</td><td>80</td><td>25-34-59</td></tr>
<tr><td>6</td><td>Michael Sgarbossa (HOU)</td><td>80</td><td>19-40-59</td></tr>
<tr><td>7</td><td>Zac Dalpe (CHA)</td><td>74</td><td>20-35-55</td></tr>
<tr><td>8</td><td>Shane Prince (GRG)</td><td>80</td><td>24-30-54</td></tr>
<tr><td>9</td><td>Alexander Dergachyov (SPR)</td><td>80</td><td>20-34-54</td></tr>
<tr><td>10</td><td>Alexis Loiseau (ADK)</td><td>80</td><td>22-31-53</td></tr>
<tr><td>11</td><td>Anthony Beauvillier (LAV)</td><td>61</td><td>18-35-53</td></tr>
<tr><td>12</td><td>Pavel Zacha (LAN)</td><td>78</td><td>24-28-52</td></tr>
<tr><td>13</td><td>Connor Rankin (BNG)</td><td>79</td><td>13-39-52</td></tr>
<tr><td>14</td><td>Austin Czarnik (RFD)</td><td>80</td><td>28-23-51</td></tr>
<tr><td>15</td><td>Gabriel Gagné (CHI)</td><td>74</td><td>27-24-51</td></tr>
<tr><td>16</td><td>Patrick Bjorkstrand (TRD)</td><td>80</td><td>20-31-51</td></tr>
<tr><td>17</td><td>Alexandre Mallet (ADK)</td><td>80</td><td>26-24-50</td></tr>
<tr><td>18</td><td>Ryan MacInnis (JOL)</td><td>77</td><td>25-25-50</td></tr>
<tr><td>19</td><td>Rodrigo Abols (POR)</td><td>73</td><td>24-26-50</td></tr>
<tr><td>20</td><td>Linden Vey (MAN)</td><td>72</td><td>18-32-50</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Valentin Zykov (OKC)</td><td>80</td><td>35-37-72</td></tr>
<tr><td>2</td><td>Erik Foley (BNG)</td><td>78</td><td>25-42-67</td></tr>
<tr><td>3</td><td>Sergey Tolchinsky (LKE)</td><td>80</td><td>29-32-61</td></tr>
<tr><td>4</td><td>Rudolfs Balcers (LAV)</td><td>80</td><td>31-29-60</td></tr>
<tr><td>5</td><td>Mads Eller (NOR)</td><td>80</td><td>20-40-60</td></tr>
<tr><td>6</td><td>Lauri Korpikoski (LVG)</td><td>77</td><td>30-27-57</td></tr>
<tr><td>7</td><td>Rihards Bukarts (SAR)</td><td>78</td><td>31-25-56</td></tr>
<tr><td>8</td><td>Andrew Ladd (CHA)</td><td>80</td><td>27-29-56</td></tr>
<tr><td>9</td><td>Warren Foegele (RNO)</td><td>79</td><td>30-24-54</td></tr>
<tr><td>10</td><td>Shane Prince (GRG)</td><td>80</td><td>24-30-54</td></tr>
<tr><td>11</td><td>Daniel Bernhardt (LAN)</td><td>78</td><td>31-22-53</td></tr>
<tr><td>12</td><td>Sonny Milano (LAV)</td><td>80</td><td>27-26-53</td></tr>
<tr><td>13</td><td>Anthony Beauvillier (LAV)</td><td>61</td><td>18-35-53</td></tr>
<tr><td>14</td><td>Pavel Zacha (LAN)</td><td>78</td><td>24-28-52</td></tr>
<tr><td>15</td><td>Paul Bittner (OKC)</td><td>80</td><td>23-29-52</td></tr>
<tr><td>16</td><td>Simon Tremblay (PRO)</td><td>75</td><td>21-31-52</td></tr>
<tr><td>17</td><td>Connor Rankin (BNG)</td><td>79</td><td>13-39-52</td></tr>
<tr><td>18</td><td>A.J. Greer (RNO)</td><td>71</td><td>25-26-51</td></tr>
<tr><td>19</td><td>Maxime Comtois (CHI)</td><td>78</td><td>25-26-51</td></tr>
<tr><td>20</td><td>Patrick Bjorkstrand (TRD)</td><td>80</td><td>20-31-51</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Valentin Zykov (OKC)</td><td>80</td><td>35-37-72</td></tr>
<tr><td>2</td><td>Ales Hemsky (WBS)</td><td>80</td><td>35-34-69</td></tr>
<tr><td>3</td><td>Pavel Padakin (NOR)</td><td>80</td><td>30-31-61</td></tr>
<tr><td>4</td><td>Denis Malgin (CTW)</td><td>80</td><td>25-34-59</td></tr>
<tr><td>5</td><td>Lauri Korpikoski (LVG)</td><td>77</td><td>30-27-57</td></tr>
<tr><td>6</td><td>Rihards Bukarts (SAR)</td><td>78</td><td>31-25-56</td></tr>
<tr><td>7</td><td>Zac Dalpe (CHA)</td><td>74</td><td>20-35-55</td></tr>
<tr><td>8</td><td>Daniel Sprong (LAV)</td><td>77</td><td>19-36-55</td></tr>
<tr><td>9</td><td>Warren Foegele (RNO)</td><td>79</td><td>30-24-54</td></tr>
<tr><td>10</td><td>Alexander Dergachyov (SPR)</td><td>80</td><td>20-34-54</td></tr>
<tr><td>11</td><td>Daniel Bernhardt (LAN)</td><td>78</td><td>31-22-53</td></tr>
<tr><td>12</td><td>Sonny Milano (LAV)</td><td>80</td><td>27-26-53</td></tr>
<tr><td>13</td><td>Kurtis Gabriel (LKE)</td><td>80</td><td>24-29-53</td></tr>
<tr><td>14</td><td>Anthony Beauvillier (LAV)</td><td>61</td><td>18-35-53</td></tr>
<tr><td>15</td><td>Austin Czarnik (RFD)</td><td>80</td><td>28-23-51</td></tr>
<tr><td>16</td><td>Gabriel Gagné (CHI)</td><td>74</td><td>27-24-51</td></tr>
<tr><td>17</td><td>Patrick Bjorkstrand (TRD)</td><td>80</td><td>20-31-51</td></tr>
<tr><td>18</td><td>Alexandre Mallet (ADK)</td><td>80</td><td>26-24-50</td></tr>
<tr><td>19</td><td>Linden Vey (MAN)</td><td>72</td><td>18-32-50</td></tr>
<tr><td>20</td><td>Brooks Macek (GRG)</td><td>79</td><td>16-34-50</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Ryan Graves (MAN)</td><td>80</td><td>15-56-71</td></tr>
<tr><td>2</td><td>Samuel Morin (RNO)</td><td>70</td><td>18-52-70</td></tr>
<tr><td>3</td><td>Christian Wolanin (TRD)</td><td>80</td><td>19-48-67</td></tr>
<tr><td>4</td><td>Julius Honka (BNG)</td><td>72</td><td>12-53-65</td></tr>
<tr><td>5</td><td>Mark Barberio (CHA)</td><td>80</td><td>13-51-64</td></tr>
<tr><td>6</td><td>Colby Robak (SAR)</td><td>80</td><td>10-51-61</td></tr>
<tr><td>7</td><td>Jack Dougherty (OKC)</td><td>80</td><td>14-46-60</td></tr>
<tr><td>8</td><td>Gustav Forsling (CTW)</td><td>80</td><td>20-36-56</td></tr>
<tr><td>9</td><td>Otto Leskinen (OKC)</td><td>80</td><td>9-47-56</td></tr>
<tr><td>10</td><td>Steve Weinstein (HOU)</td><td>79</td><td>8-47-55</td></tr>
<tr><td>11</td><td>Ethan Bear (CTW)</td><td>80</td><td>8-47-55</td></tr>
<tr><td>12</td><td>Trevor Murphy (BRI)</td><td>74</td><td>14-40-54</td></tr>
<tr><td>13</td><td>Dillon Heatherington (PAR)</td><td>78</td><td>14-40-54</td></tr>
<tr><td>14</td><td>Lukas Bengtsson (PAR)</td><td>80</td><td>9-44-53</td></tr>
<tr><td>15</td><td>Louis Belpedio (JOL)</td><td>80</td><td>9-44-53</td></tr>
<tr><td>16</td><td>Rasmus Andersson (GAT)</td><td>70</td><td>14-38-52</td></tr>
<tr><td>17</td><td>Cameron Gaunce (PRO)</td><td>80</td><td>13-38-51</td></tr>
<tr><td>18</td><td>Brandon Burlon (NOR)</td><td>80</td><td>13-38-51</td></tr>
<tr><td>19</td><td>Charles-Olivier Roussel (HOU)</td><td>80</td><td>13-38-51</td></tr>
<tr><td>20</td><td>Anthony DeAngelo (LAN)</td><td>78</td><td>9-42-51</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Nathan Condon (LKE)</td><td>47</td><td>1,24</td></tr>
<tr><td>2</td><td>Jimmy Vesey (LVG)</td><td>76</td><td>0,94</td></tr>
<tr><td>3</td><td>Erik Foley (BNG)</td><td>78</td><td>0,94</td></tr>
<tr><td>4</td><td>Ales Hemsky (WBS)</td><td>80</td><td>0,92</td></tr>
<tr><td>5</td><td>Warren Foegele (RNO)</td><td>79</td><td>0,91</td></tr>
<tr><td>6</td><td>T.J. Brodie (POR)</td><td>40</td><td>0,90</td></tr>
<tr><td>7</td><td>Simon Tremblay (PRO)</td><td>75</td><td>0,89</td></tr>
<tr><td>8</td><td>Valentin Zykov (OKC)</td><td>80</td><td>0,87</td></tr>
<tr><td>9</td><td>Samuel Morin (RNO)</td><td>70</td><td>0,86</td></tr>
<tr><td>10</td><td>Denis Malgin (CTW)</td><td>80</td><td>0,85</td></tr>
<tr><td>11</td><td>Nikita Nesterov (SPR)</td><td>51</td><td>0,85</td></tr>
<tr><td>12</td><td>Jack Hillen (MIL)</td><td>40</td><td>0,85</td></tr>
<tr><td>13</td><td>Julius Honka (BNG)</td><td>72</td><td>0,85</td></tr>
<tr><td>14</td><td>Andrea Kristler (SAR)</td><td>80</td><td>0,84</td></tr>
<tr><td>15</td><td>Daniel Bernhardt (LAN)</td><td>78</td><td>0,84</td></tr>
<tr><td>16</td><td>Victor Olofsson (BRI)</td><td>51</td><td>0,84</td></tr>
<tr><td>17</td><td>Patrice Cormier (MIA)</td><td>52</td><td>0,83</td></tr>
<tr><td>18</td><td>Zac Dalpe (CHA)</td><td>74</td><td>0,83</td></tr>
<tr><td>19</td><td>Alex Tuch (CHI)</td><td>47</td><td>0,82</td></tr>
<tr><td>20</td><td>Martin Erat (WBS)</td><td>52</td><td>0,82</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Philip McRae (MIA)</td><td>80</td><td>57,71%</td></tr>
<tr><td>2</td><td>Antoine Vermette (JOL)</td><td>78</td><td>57,59%</td></tr>
<tr><td>3</td><td>Maxim Lapierre (WBS)</td><td>52</td><td>56,78%</td></tr>
<tr><td>4</td><td>Patrice Cormier (MIA)</td><td>52</td><td>56,11%</td></tr>
<tr><td>5</td><td>Riley Nash (PAR)</td><td>56</td><td>55,75%</td></tr>
<tr><td>6</td><td>Brandon Dubinsky (PEO)</td><td>69</td><td>55,64%</td></tr>
<tr><td>7</td><td>Anton Lander (LKE)</td><td>78</td><td>55,38%</td></tr>
<tr><td>8</td><td>Maxwell Reinhart (PEO)</td><td>73</td><td>55,24%</td></tr>
<tr><td>9</td><td>Ben Smith (TRD)</td><td>76</td><td>55,24%</td></tr>
<tr><td>10</td><td>Ben Maxwell (WBS)</td><td>74</td><td>54,98%</td></tr>
<tr><td>11</td><td>Mike Fisher (WBS)</td><td>75</td><td>54,76%</td></tr>
<tr><td>12</td><td>Andreas Martinsen (CHI)</td><td>68</td><td>54,42%</td></tr>
<tr><td>13</td><td>Garrett Meurs (ROB)</td><td>49</td><td>54,39%</td></tr>
<tr><td>14</td><td>Adam Musil (LAN)</td><td>45</td><td>54,36%</td></tr>
<tr><td>15</td><td>Valtteri Filppula (GRG)</td><td>50</td><td>54,18%</td></tr>
<tr><td>16</td><td>David Desharnais (PEO)</td><td>73</td><td>54,11%</td></tr>
<tr><td>17</td><td>Brad Malone (ALB)</td><td>71</td><td>53,90%</td></tr>
<tr><td>18</td><td>Chris Kreider (CTW)</td><td>80</td><td>53,81%</td></tr>
<tr><td>19</td><td>Melker Karlsson (LVG)</td><td>75</td><td>53,81%</td></tr>
<tr><td>20</td><td>Greg Nemisz (JOL)</td><td>80</td><td>53,75%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Lauri Korpikoski (LVG)</td><td>77</td><td>35</td></tr>
<tr><td>2</td><td>Maxime Comtois (CHI)</td><td>78</td><td>31</td></tr>
<tr><td>3</td><td>Conner Bleackley (LVG)</td><td>80</td><td>28</td></tr>
<tr><td>4</td><td>Chaz Reddekopp (PAR)</td><td>76</td><td>27</td></tr>
<tr><td>5</td><td>Samuel Morin (RNO)</td><td>70</td><td>25</td></tr>
<tr><td>6</td><td>Kyle Okposo (LVG)</td><td>77</td><td>25</td></tr>
<tr><td>7</td><td>Jack Evans (CHI)</td><td>74</td><td>24</td></tr>
<tr><td>8</td><td>Ryan Stanton (LKE)</td><td>80</td><td>23</td></tr>
<tr><td>9</td><td>Ales Hemsky (WBS)</td><td>80</td><td>21</td></tr>
<tr><td>10</td><td>Cameron Hughes (OKC)</td><td>75</td><td>19</td></tr>
<tr><td>11</td><td>Martins Dzierkals (RNO)</td><td>80</td><td>19</td></tr>
<tr><td>12</td><td>Patrice Cormier (MIA)</td><td>52</td><td>18</td></tr>
<tr><td>13</td><td>Filip Berglund (BNG)</td><td>75</td><td>18</td></tr>
<tr><td>14</td><td>Louis Belpedio (JOL)</td><td>80</td><td>18</td></tr>
<tr><td>15</td><td>Kevin Connauton (WBS)</td><td>50</td><td>17</td></tr>
<tr><td>16</td><td>Julian Melchiori (RFD)</td><td>62</td><td>17</td></tr>
<tr><td>17</td><td>Eric Gryba (LVG)</td><td>79</td><td>17</td></tr>
<tr><td>18</td><td>Cristoval Nieves (MIL)</td><td>80</td><td>17</td></tr>
<tr><td>19</td><td>Jack Hillen (MIL)</td><td>40</td><td>16</td></tr>
<tr><td>20</td><td>Nick Holden (LVG)</td><td>50</td><td>16</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Maxim Chudinov (LVG)</td><td>79</td><td>118</td></tr>
<tr><td>2</td><td>Cameron Gaunce (PRO)</td><td>80</td><td>112</td></tr>
<tr><td>3</td><td>Jakob Chychrun (NOR)</td><td>74</td><td>106</td></tr>
<tr><td>4</td><td>Nikita Tryamkin (SPR)</td><td>80</td><td>104</td></tr>
<tr><td>5</td><td>Samuel Morin (RNO)</td><td>70</td><td>101</td></tr>
<tr><td>6</td><td>Andrew O'Brien (SAR)</td><td>74</td><td>95</td></tr>
<tr><td>7</td><td>J.D. Greenway (OKC)</td><td>75</td><td>93</td></tr>
<tr><td>8</td><td>Brett Lernout (CHI)</td><td>80</td><td>92</td></tr>
<tr><td>9</td><td>Ryan Graves (MAN)</td><td>80</td><td>90</td></tr>
<tr><td>10</td><td>Jérémy Lauzon (RNO)</td><td>80</td><td>88</td></tr>
<tr><td>11</td><td>Ryan Lindgren (JOL)</td><td>54</td><td>86</td></tr>
<tr><td>12</td><td>Keegan Kanzig (MIA)</td><td>63</td><td>85</td></tr>
<tr><td>13</td><td>Isaac Ratcliffe (CHI)</td><td>78</td><td>83</td></tr>
<tr><td>14</td><td>Jack Dougherty (OKC)</td><td>80</td><td>82</td></tr>
<tr><td>15</td><td>Johnathan MacLeod (LAN)</td><td>73</td><td>79</td></tr>
<tr><td>16</td><td>Alex Peters (CHI)</td><td>53</td><td>78</td></tr>
<tr><td>17</td><td>Tyler Lewington (ADK)</td><td>80</td><td>78</td></tr>
<tr><td>18</td><td>Harrison Ruopp (RCH)</td><td>61</td><td>77</td></tr>
<tr><td>19</td><td>Austin Wagner (NOR)</td><td>80</td><td>76</td></tr>
<tr><td>20</td><td>Travis Dermott (ALB)</td><td>81</td><td>76</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Cameron Gaunce (PRO)</td><td>80</td><td>159</td></tr>
<tr><td>2</td><td>Joni Pitkanen (ROB)</td><td>80</td><td>145</td></tr>
<tr><td>3</td><td>Ryan Graves (MAN)</td><td>80</td><td>144</td></tr>
<tr><td>4</td><td>Robert Hagg (GAT)</td><td>80</td><td>141</td></tr>
<tr><td>5</td><td>Brandon Burlon (NOR)</td><td>80</td><td>136</td></tr>
<tr><td>6</td><td>Jérémy Lauzon (RNO)</td><td>80</td><td>135</td></tr>
<tr><td>7</td><td>Dillon Heatherington (PAR)</td><td>78</td><td>132</td></tr>
<tr><td>8</td><td>Maxim Chudinov (LVG)</td><td>79</td><td>132</td></tr>
<tr><td>9</td><td>Charles-Olivier Roussel (HOU)</td><td>80</td><td>131</td></tr>
<tr><td>10</td><td>Jack Dougherty (OKC)</td><td>80</td><td>129</td></tr>
<tr><td>11</td><td>Gustav Forsling (CTW)</td><td>80</td><td>129</td></tr>
<tr><td>12</td><td>Jakob Chychrun (NOR)</td><td>74</td><td>128</td></tr>
<tr><td>13</td><td>Brandon Carlo (CTW)</td><td>80</td><td>127</td></tr>
<tr><td>14</td><td>Noah Juulsen (BRI)</td><td>77</td><td>125</td></tr>
<tr><td>15</td><td>Jacob Larsson (JOL)</td><td>80</td><td>124</td></tr>
<tr><td>16</td><td>Kevan Miller (WBS)</td><td>74</td><td>123</td></tr>
<tr><td>17</td><td>Nicolas Hague (LAN)</td><td>80</td><td>120</td></tr>
<tr><td>18</td><td>Karlis Cukste (POR)</td><td>80</td><td>119</td></tr>
<tr><td>19</td><td>Jeff Petry (SPR)</td><td>65</td><td>118</td></tr>
<tr><td>20</td><td>Markus Lauridsen (MIL)</td><td>70</td><td>118</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Valentin Zykov (OKC)</td><td>80</td><td>35-37-72</td></tr>
<tr><td>2</td><td>Ryan Graves (MAN)</td><td>80</td><td>15-56-71</td></tr>
<tr><td>3</td><td>Erik Foley (BNG)</td><td>78</td><td>25-42-67</td></tr>
<tr><td>4</td><td>Christian Wolanin (TRD)</td><td>80</td><td>19-48-67</td></tr>
<tr><td>5</td><td>Anthony Cirelli (GAT)</td><td>80</td><td>23-42-65</td></tr>
<tr><td>6</td><td>Sergey Tolchinsky (LKE)</td><td>80</td><td>29-32-61</td></tr>
<tr><td>7</td><td>Rudolfs Balcers (LAV)</td><td>80</td><td>31-29-60</td></tr>
<tr><td>8</td><td>Jack Dougherty (OKC)</td><td>80</td><td>14-46-60</td></tr>
<tr><td>9</td><td>Denis Malgin (CTW)</td><td>80</td><td>25-34-59</td></tr>
<tr><td>10</td><td>Gustav Forsling (CTW)</td><td>80</td><td>20-36-56</td></tr>
<tr><td>11</td><td>Otto Leskinen (OKC)</td><td>80</td><td>9-47-56</td></tr>
<tr><td>12</td><td>Daniel Sprong (LAV)</td><td>77</td><td>19-36-55</td></tr>
<tr><td>13</td><td>Ethan Bear (CTW)</td><td>80</td><td>8-47-55</td></tr>
<tr><td>14</td><td>Warren Foegele (RNO)</td><td>79</td><td>30-24-54</td></tr>
<tr><td>15</td><td>Alexander Dergachyov (SPR)</td><td>80</td><td>20-34-54</td></tr>
<tr><td>16</td><td>Trevor Murphy (BRI)</td><td>74</td><td>14-40-54</td></tr>
<tr><td>17</td><td>Daniel Bernhardt (LAN)</td><td>78</td><td>31-22-53</td></tr>
<tr><td>18</td><td>Alexis Loiseau (ADK)</td><td>80</td><td>22-31-53</td></tr>
<tr><td>19</td><td>Anthony Beauvillier (LAV)</td><td>61</td><td>18-35-53</td></tr>
<tr><td>20</td><td>Lukas Bengtsson (PAR)</td><td>80</td><td>9-44-53</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Hudson Fasching (PRO)</td><td>75</td><td>229</td></tr>
<tr><td>2</td><td>Kurtis Gabriel (LKE)</td><td>80</td><td>210</td></tr>
<tr><td>3</td><td>Brandon Dubinsky (PEO)</td><td>69</td><td>209</td></tr>
<tr><td>4</td><td>Samuel Morin (RNO)</td><td>70</td><td>208</td></tr>
<tr><td>5</td><td>Miles Wood (GAT)</td><td>71</td><td>207</td></tr>
<tr><td>6</td><td>Cal Clutterbuck (CHA)</td><td>76</td><td>204</td></tr>
<tr><td>7</td><td>Maxim Chudinov (LVG)</td><td>79</td><td>199</td></tr>
<tr><td>8</td><td>Justin Auger (RFD)</td><td>77</td><td>192</td></tr>
<tr><td>9</td><td>Robin Kovacs (LAV)</td><td>78</td><td>192</td></tr>
<tr><td>10</td><td>Jordan Greenway (SAR)</td><td>71</td><td>191</td></tr>
<tr><td>11</td><td>A.J. Greer (RNO)</td><td>71</td><td>190</td></tr>
<tr><td>12</td><td>Cameron Gaunce (PRO)</td><td>80</td><td>190</td></tr>
<tr><td>13</td><td>Lawson Crouse (CHA)</td><td>80</td><td>188</td></tr>
<tr><td>14</td><td>Brent Pedersen (MAN)</td><td>80</td><td>186</td></tr>
<tr><td>15</td><td>Colin Greening (WBS)</td><td>71</td><td>182</td></tr>
<tr><td>16</td><td>Conner Bleackley (LVG)</td><td>80</td><td>181</td></tr>
<tr><td>17</td><td>Isaac Ratcliffe (CHI)</td><td>78</td><td>176</td></tr>
<tr><td>18</td><td>Ryan Graves (MAN)</td><td>80</td><td>176</td></tr>
<tr><td>19</td><td>Radko Gudas (NOR)</td><td>73</td><td>173</td></tr>
<tr><td>20</td><td>Justin Kea (LVG)</td><td>80</td><td>173</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Trevor Murphy (BRI)</td><td>74</td><td>12</td></tr>
<tr><td>2</td><td>Rihards Bukarts (SAR)</td><td>78</td><td>11</td></tr>
<tr><td>3</td><td>Jannik Hansen (GRG)</td><td>68</td><td>10</td></tr>
<tr><td>4</td><td>Ryan Sproul (HOU)</td><td>70</td><td>10</td></tr>
<tr><td>5</td><td>Samuel Morin (RNO)</td><td>70</td><td>10</td></tr>
<tr><td>6</td><td>Daniel Bernhardt (LAN)</td><td>78</td><td>10</td></tr>
<tr><td>7</td><td>Noah Rod (MAN)</td><td>80</td><td>10</td></tr>
<tr><td>8</td><td>Christian Wolanin (TRD)</td><td>80</td><td>10</td></tr>
<tr><td>9</td><td>Ian McCoshen (MIA)</td><td>63</td><td>9</td></tr>
<tr><td>10</td><td>A.J. Greer (RNO)</td><td>71</td><td>9</td></tr>
<tr><td>11</td><td>Sebastian Aho (D) (TRD)</td><td>71</td><td>9</td></tr>
<tr><td>12</td><td>Jack Dougherty (OKC)</td><td>80</td><td>9</td></tr>
<tr><td>13</td><td>Rudolfs Balcers (LAV)</td><td>80</td><td>9</td></tr>
<tr><td>14</td><td>Valentin Zykov (OKC)</td><td>80</td><td>9</td></tr>
<tr><td>15</td><td>Alexandre Mallet (ADK)</td><td>80</td><td>9</td></tr>
<tr><td>16</td><td>Anton Blidh (SPR)</td><td>80</td><td>9</td></tr>
<tr><td>17</td><td>Martin Erat (WBS)</td><td>52</td><td>8</td></tr>
<tr><td>18</td><td>Andrej Sekera (ALB)</td><td>60</td><td>8</td></tr>
<tr><td>19</td><td>Maxime Comtois (CHI)</td><td>78</td><td>8</td></tr>
<tr><td>20</td><td>Justin Holl (RFD)</td><td>78</td><td>8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Brad Richardson (WBS)</td><td>72</td><td>3</td></tr>
<tr><td>2</td><td>Christian Dvorak (SPR)</td><td>39</td><td>2</td></tr>
<tr><td>3</td><td>Kevin Stenlund (ALB)</td><td>55</td><td>2</td></tr>
<tr><td>4</td><td>Cal Clutterbuck (CHA)</td><td>76</td><td>2</td></tr>
<tr><td>5</td><td>Pavel Padakin (NOR)</td><td>80</td><td>2</td></tr>
<tr><td>6</td><td>Byron Froese (RFD)</td><td>80</td><td>2</td></tr>
<tr><td>7</td><td>Rafaël Harvey-Pinard (RNO)</td><td>80</td><td>2</td></tr>
<tr><td>8</td><td>T.J. Galiardi (LKE)</td><td>4</td><td>1</td></tr>
<tr><td>9</td><td>Anthony Camara (CHA)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Gaetan Haas (TRD)</td><td>20</td><td>1</td></tr>
<tr><td>11</td><td>Matt Puempel (BNG)</td><td>35</td><td>1</td></tr>
<tr><td>12</td><td>Jack Hillen (MIL)</td><td>40</td><td>1</td></tr>
<tr><td>13</td><td>Korbinian Holzer (CHI)</td><td>40</td><td>1</td></tr>
<tr><td>14</td><td>Jake Chelios (PEO)</td><td>40</td><td>1</td></tr>
<tr><td>15</td><td>Eric Cornel (RCH)</td><td>45</td><td>1</td></tr>
<tr><td>16</td><td>Michael Bournival (GRG)</td><td>45</td><td>1</td></tr>
<tr><td>17</td><td>Alex Tuch (CHI)</td><td>47</td><td>1</td></tr>
<tr><td>18</td><td>Andrew Agozzino (GRG)</td><td>52</td><td>1</td></tr>
<tr><td>19</td><td>Tyson Baillie (BRI)</td><td>53</td><td>1</td></tr>
<tr><td>20</td><td>Vladislav Kamenev (LAN)</td><td>55</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Pavel Padakin (NOR)</td><td>80</td><td>10</td></tr>
<tr><td>2</td><td>Carl Klingberg (HOU)</td><td>69</td><td>8</td></tr>
<tr><td>3</td><td>Anton Blidh (SPR)</td><td>80</td><td>8</td></tr>
<tr><td>4</td><td>Daniel Bernhardt (LAN)</td><td>78</td><td>7</td></tr>
<tr><td>5</td><td>Valentin Zykov (OKC)</td><td>80</td><td>7</td></tr>
<tr><td>6</td><td>Denis Guryanov (CTW)</td><td>80</td><td>7</td></tr>
<tr><td>7</td><td>Andrew Mangiapane (LAN)</td><td>80</td><td>7</td></tr>
<tr><td>8</td><td>Christian Dvorak (SPR)</td><td>39</td><td>6</td></tr>
<tr><td>9</td><td>Patrice Cormier (MIA)</td><td>52</td><td>6</td></tr>
<tr><td>10</td><td>Kevin Stenlund (ALB)</td><td>55</td><td>6</td></tr>
<tr><td>11</td><td>Ryan Tesink (TRD)</td><td>55</td><td>6</td></tr>
<tr><td>12</td><td>Anthony Beauvillier (LAV)</td><td>61</td><td>6</td></tr>
<tr><td>13</td><td>Remi Elie (SPR)</td><td>78</td><td>6</td></tr>
<tr><td>14</td><td>Andrew Ladd (CHA)</td><td>80</td><td>6</td></tr>
<tr><td>15</td><td>Rudolfs Balcers (LAV)</td><td>80</td><td>6</td></tr>
<tr><td>16</td><td>Manuel Wiederer (RNO)</td><td>80</td><td>6</td></tr>
<tr><td>17</td><td>Sergey Tolchinsky (LKE)</td><td>80</td><td>6</td></tr>
<tr><td>18</td><td>Milan Michalek (WBS)</td><td>43</td><td>5</td></tr>
<tr><td>19</td><td>Tomas Jurco (RCH)</td><td>60</td><td>5</td></tr>
<tr><td>20</td><td>Jérôme Verrier (MAN)</td><td>60</td><td>5</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Austin Czarnik (RFD)</td><td>80</td><td>5</td></tr>
<tr><td>2</td><td>Colin Greening (WBS)</td><td>71</td><td>4</td></tr>
<tr><td>3</td><td>Lauri Korpikoski (LVG)</td><td>77</td><td>4</td></tr>
<tr><td>4</td><td>Robin Kovacs (LAV)</td><td>78</td><td>4</td></tr>
<tr><td>5</td><td>Nick Paul (JOL)</td><td>80</td><td>4</td></tr>
<tr><td>6</td><td>Valentin Zykov (OKC)</td><td>80</td><td>4</td></tr>
<tr><td>7</td><td>Justin Florek (PRO)</td><td>80</td><td>4</td></tr>
<tr><td>8</td><td>Pavel Padakin (NOR)</td><td>80</td><td>4</td></tr>
<tr><td>9</td><td>Nicolas Aubé-Kubel (NOR)</td><td>80</td><td>4</td></tr>
<tr><td>10</td><td>Lane Pederson (PAR)</td><td>80</td><td>4</td></tr>
<tr><td>11</td><td>Jan Kovar (WBS)</td><td>27</td><td>3</td></tr>
<tr><td>12</td><td>Jason Dickinson (SPR)</td><td>61</td><td>3</td></tr>
<tr><td>13</td><td>Carl Hagelin (CHI)</td><td>63</td><td>3</td></tr>
<tr><td>14</td><td>Jannik Hansen (GRG)</td><td>68</td><td>3</td></tr>
<tr><td>15</td><td>Justin Bailey (PAR)</td><td>71</td><td>3</td></tr>
<tr><td>16</td><td>Gabriel Gagné (CHI)</td><td>74</td><td>3</td></tr>
<tr><td>17</td><td>Trevor Murphy (BRI)</td><td>74</td><td>3</td></tr>
<tr><td>18</td><td>Tage Thompson (MIL)</td><td>74</td><td>3</td></tr>
<tr><td>19</td><td>Mitchell Callahan (GRG)</td><td>76</td><td>3</td></tr>
<tr><td>20</td><td>Philip Lane (CHI)</td><td>77</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Artturi Lehkonen (RNO)</td><td>54</td><td>2</td></tr>
<tr><td>2</td><td>A.J. Greer (RNO)</td><td>71</td><td>2</td></tr>
<tr><td>3</td><td>Teemu Hartikainen (OKC)</td><td>80</td><td>2</td></tr>
<tr><td>4</td><td>Wojtek Wolski (MIA)</td><td>80</td><td>2</td></tr>
<tr><td>5</td><td>Denis Guryanov (CTW)</td><td>80</td><td>2</td></tr>
<tr><td>6</td><td>Nicolas Hague (LAN)</td><td>80</td><td>2</td></tr>
<tr><td>7</td><td>Brendan Perlini (SAR)</td><td>8</td><td>1</td></tr>
<tr><td>8</td><td>Brandon Manning (CHI)</td><td>33</td><td>1</td></tr>
<tr><td>9</td><td>Alexei Mitrofanov (RCH)</td><td>41</td><td>1</td></tr>
<tr><td>10</td><td>Joel Eriksson Ek (BRI)</td><td>46</td><td>1</td></tr>
<tr><td>11</td><td>Nikita Scherbak (BRI)</td><td>51</td><td>1</td></tr>
<tr><td>12</td><td>Mathieu Joseph (GAT)</td><td>56</td><td>1</td></tr>
<tr><td>13</td><td>Sergei Kostitsyn (RCH)</td><td>61</td><td>1</td></tr>
<tr><td>14</td><td>Jiri Hudler (JOL)</td><td>62</td><td>1</td></tr>
<tr><td>15</td><td>Michael Paliotta (CHA)</td><td>64</td><td>1</td></tr>
<tr><td>16</td><td>Alex Grant (ALB)</td><td>67</td><td>1</td></tr>
<tr><td>17</td><td>John Hayden (LAN)</td><td>67</td><td>1</td></tr>
<tr><td>18</td><td>Samuel Blais (SPR)</td><td>68</td><td>1</td></tr>
<tr><td>19</td><td>Cody Almond (HOU)</td><td>69</td><td>1</td></tr>
<tr><td>20</td><td>Gustav Olofsson (RFD)</td><td>69</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Ryan Graves (MAN)</td><td>80</td><td>1 955</td></tr>
<tr><td>2</td><td>Cameron Gaunce (PRO)</td><td>80</td><td>1 910</td></tr>
<tr><td>3</td><td>Maxim Chudinov (LVG)</td><td>79</td><td>1 897</td></tr>
<tr><td>4</td><td>Brandon Burlon (NOR)</td><td>80</td><td>1 884</td></tr>
<tr><td>5</td><td>Jacob Larsson (JOL)</td><td>80</td><td>1 871</td></tr>
<tr><td>6</td><td>Mark Barberio (CHA)</td><td>80</td><td>1 870</td></tr>
<tr><td>7</td><td>Joni Pitkanen (ROB)</td><td>80</td><td>1 854</td></tr>
<tr><td>8</td><td>Tom Gilbert (CHI)</td><td>80</td><td>1 839</td></tr>
<tr><td>9</td><td>Dillon Heatherington (PAR)</td><td>78</td><td>1 810</td></tr>
<tr><td>10</td><td>Charles-Olivier Roussel (HOU)</td><td>80</td><td>1 805</td></tr>
<tr><td>11</td><td>Gustav Forsling (CTW)</td><td>80</td><td>1 798</td></tr>
<tr><td>12</td><td>Jack Dougherty (OKC)</td><td>80</td><td>1 779</td></tr>
<tr><td>13</td><td>Michael McLeod (OKC)</td><td>80</td><td>1 759</td></tr>
<tr><td>14</td><td>Anton Lander (LKE)</td><td>78</td><td>1 748</td></tr>
<tr><td>15</td><td>Eric Gryba (LVG)</td><td>79</td><td>1 741</td></tr>
<tr><td>16</td><td>Jérémy Lauzon (RNO)</td><td>80</td><td>1 740</td></tr>
<tr><td>17</td><td>Kevin Gravel (PAR)</td><td>75</td><td>1 738</td></tr>
<tr><td>18</td><td>Ryan Sproul (HOU)</td><td>70</td><td>1 728</td></tr>
<tr><td>19</td><td>Colby Robak (SAR)</td><td>80</td><td>1 705</td></tr>
<tr><td>20</td><td>Justin Auger (RFD)</td><td>77</td><td>1 694</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Jared Knight (OKC)</td><td>78</td><td>2</td></tr>
<tr><td>2</td><td>Warren Foegele (RNO)</td><td>79</td><td>2</td></tr>
<tr><td>3</td><td>Juuso Ikonen (ROB)</td><td>32</td><td>1</td></tr>
<tr><td>4</td><td>Cooper Marody (RFD)</td><td>32</td><td>1</td></tr>
<tr><td>5</td><td>Joel Eriksson Ek (BRI)</td><td>46</td><td>1</td></tr>
<tr><td>6</td><td>Jakob Silfverberg (BRI)</td><td>48</td><td>1</td></tr>
<tr><td>7</td><td>Tyson Baillie (BRI)</td><td>53</td><td>1</td></tr>
<tr><td>8</td><td>Kevin Stenlund (ALB)</td><td>55</td><td>1</td></tr>
<tr><td>9</td><td>Harrison Ruopp (RCH)</td><td>61</td><td>1</td></tr>
<tr><td>10</td><td>Gabriel Dumont (ADK)</td><td>65</td><td>1</td></tr>
<tr><td>11</td><td>David Kampf (MIA)</td><td>65</td><td>1</td></tr>
<tr><td>12</td><td>Lukas Sutter (ALB)</td><td>65</td><td>1</td></tr>
<tr><td>13</td><td>Antoine Morand (OKC)</td><td>70</td><td>1</td></tr>
<tr><td>14</td><td>Ville Leskinen (ROB)</td><td>72</td><td>1</td></tr>
<tr><td>15</td><td>Jussi Jokinen (HOU)</td><td>72</td><td>1</td></tr>
<tr><td>16</td><td>Dominik Kahun (LAN)</td><td>72</td><td>1</td></tr>
<tr><td>17</td><td>Gabriel Gagné (CHI)</td><td>74</td><td>1</td></tr>
<tr><td>18</td><td>Alexei Emelin (PEO)</td><td>75</td><td>1</td></tr>
<tr><td>19</td><td>Ryan Shannon (WBS)</td><td>75</td><td>1</td></tr>
<tr><td>20</td><td>Simon Tremblay (PRO)</td><td>75</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Brandon Kozun (MIA)</td><td>80</td><td>3</td></tr>
<tr><td>2</td><td>Drew Miller (JOL)</td><td>30</td><td>2</td></tr>
<tr><td>3</td><td>Jack Hillen (MIL)</td><td>40</td><td>2</td></tr>
<tr><td>4</td><td>Victor Olofsson (BRI)</td><td>51</td><td>2</td></tr>
<tr><td>5</td><td>Mathieu Joseph (GAT)</td><td>56</td><td>2</td></tr>
<tr><td>6</td><td>Jérôme Verrier (MAN)</td><td>60</td><td>2</td></tr>
<tr><td>7</td><td>Jiri Hudler (JOL)</td><td>62</td><td>2</td></tr>
<tr><td>8</td><td>A.J. Greer (RNO)</td><td>71</td><td>2</td></tr>
<tr><td>9</td><td>Stuart Percy (MIL)</td><td>73</td><td>2</td></tr>
<tr><td>10</td><td>Marcel Noebels (LKE)</td><td>75</td><td>2</td></tr>
<tr><td>11</td><td>Daniel Bernhardt (LAN)</td><td>78</td><td>2</td></tr>
<tr><td>12</td><td>Erik Foley (BNG)</td><td>78</td><td>2</td></tr>
<tr><td>13</td><td>Tyler Soy (CHI)</td><td>78</td><td>2</td></tr>
<tr><td>14</td><td>Warren Foegele (RNO)</td><td>79</td><td>2</td></tr>
<tr><td>15</td><td>Greg Nemisz (JOL)</td><td>80</td><td>2</td></tr>
<tr><td>16</td><td>Michael Sgarbossa (HOU)</td><td>80</td><td>2</td></tr>
<tr><td>17</td><td>Alexis Loiseau (ADK)</td><td>80</td><td>2</td></tr>
<tr><td>18</td><td>Nathan Walker (RFD)</td><td>32</td><td>1</td></tr>
<tr><td>19</td><td>Kalle Kossila (LAV)</td><td>43</td><td>1</td></tr>
<tr><td>20</td><td>Kailer Yamamoto (OKC)</td><td>44</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Blake Siebenaler (SPR)</td><td>59</td><td>6</td></tr>
<tr><td>2</td><td>Cale Fleury (HOU)</td><td>78</td><td>6</td></tr>
<tr><td>3</td><td>Skyler McKenzie (POR)</td><td>73</td><td>5</td></tr>
<tr><td>4</td><td>Pius Suter (SPR)</td><td>81</td><td>5</td></tr>
<tr><td>5</td><td>Jack Hillen (MIL)</td><td>40</td><td>4</td></tr>
<tr><td>6</td><td>Jérôme Verrier (MAN)</td><td>60</td><td>4</td></tr>
<tr><td>7</td><td>Xavier Ouellet (MIA)</td><td>69</td><td>4</td></tr>
<tr><td>8</td><td>Daniel Bernhardt (LAN)</td><td>78</td><td>4</td></tr>
<tr><td>9</td><td>Erik Foley (BNG)</td><td>78</td><td>4</td></tr>
<tr><td>10</td><td>Ryan Graves (MAN)</td><td>80</td><td>4</td></tr>
<tr><td>11</td><td>Oscar Lindberg (CHA)</td><td>80</td><td>4</td></tr>
<tr><td>12</td><td>Zach Budish (MIL)</td><td>80</td><td>4</td></tr>
<tr><td>13</td><td>Francis Perron (RNO)</td><td>80</td><td>4</td></tr>
<tr><td>14</td><td>Byron Froese (RFD)</td><td>80</td><td>4</td></tr>
<tr><td>15</td><td>Mathieu Joseph (GAT)</td><td>56</td><td>3</td></tr>
<tr><td>16</td><td>Gabriel Vilardi (OKC)</td><td>61</td><td>3</td></tr>
<tr><td>17</td><td>Julian Melchiori (RFD)</td><td>62</td><td>3</td></tr>
<tr><td>18</td><td>Josh Mahura (CTW)</td><td>62</td><td>3</td></tr>
<tr><td>19</td><td>Samuel Blais (SPR)</td><td>68</td><td>3</td></tr>
<tr><td>20</td><td>Dennis Persson (GRG)</td><td>70</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Brandon Dubinsky (PEO)</td><td>69</td><td>218</td></tr>
<tr><td>2</td><td>Conner Bleackley (LVG)</td><td>80</td><td>209</td></tr>
<tr><td>3</td><td>Byron Froese (RFD)</td><td>80</td><td>198</td></tr>
<tr><td>4</td><td>Ryan Shannon (WBS)</td><td>75</td><td>191</td></tr>
<tr><td>5</td><td>Anton Lander (LKE)</td><td>78</td><td>183</td></tr>
<tr><td>6</td><td>Lane Pederson (PAR)</td><td>80</td><td>177</td></tr>
<tr><td>7</td><td>Adam Gaudette (PAR)</td><td>78</td><td>176</td></tr>
<tr><td>8</td><td>Michael McLeod (OKC)</td><td>80</td><td>176</td></tr>
<tr><td>9</td><td>Mads Eller (NOR)</td><td>80</td><td>175</td></tr>
<tr><td>10</td><td>Alex Barré-Boulet (LAV)</td><td>80</td><td>173</td></tr>
<tr><td>11</td><td>Antoine Morand (OKC)</td><td>70</td><td>170</td></tr>
<tr><td>12</td><td>Antoine Vermette (JOL)</td><td>78</td><td>169</td></tr>
<tr><td>13</td><td>Anthony Cirelli (GAT)</td><td>80</td><td>167</td></tr>
<tr><td>14</td><td>Linus Lindstrom (SAR)</td><td>80</td><td>166</td></tr>
<tr><td>15</td><td>Alexis Loiseau (ADK)</td><td>80</td><td>165</td></tr>
<tr><td>16</td><td>Karson Kuhlman (MIL)</td><td>58</td><td>159</td></tr>
<tr><td>17</td><td>Philip McRae (MIA)</td><td>80</td><td>159</td></tr>
<tr><td>18</td><td>Linden Vey (MAN)</td><td>72</td><td>158</td></tr>
<tr><td>19</td><td>Ville Leino (ROB)</td><td>80</td><td>157</td></tr>
<tr><td>20</td><td>Aleksi Saarela (ROB)</td><td>80</td><td>154</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Daniel Sprong (LAV)</td><td>77</td><td>4</td></tr>
<tr><td>2</td><td>Peter Holland (PEO)</td><td>61</td><td>3</td></tr>
<tr><td>3</td><td>Antoine Vermette (JOL)</td><td>78</td><td>3</td></tr>
<tr><td>4</td><td>Adam Burish (NOR)</td><td>80</td><td>3</td></tr>
<tr><td>5</td><td>Kenny Agostino (CHA)</td><td>80</td><td>3</td></tr>
<tr><td>6</td><td>Josh Ho-Sang (BNG)</td><td>32</td><td>2</td></tr>
<tr><td>7</td><td>Johan Sundstrom (BRI)</td><td>54</td><td>2</td></tr>
<tr><td>8</td><td>Jordan Weal (GAT)</td><td>55</td><td>2</td></tr>
<tr><td>9</td><td>Roman Horak (HOU)</td><td>61</td><td>2</td></tr>
<tr><td>10</td><td>Dany Heatley (BNG)</td><td>62</td><td>2</td></tr>
<tr><td>11</td><td>Alex Chiasson (MIA)</td><td>66</td><td>2</td></tr>
<tr><td>12</td><td>A.J. Greer (RNO)</td><td>71</td><td>2</td></tr>
<tr><td>13</td><td>Miles Wood (GAT)</td><td>71</td><td>2</td></tr>
<tr><td>14</td><td>Brad Richardson (WBS)</td><td>72</td><td>2</td></tr>
<tr><td>15</td><td>Luke Witkowski (NOR)</td><td>75</td><td>2</td></tr>
<tr><td>16</td><td>Cal Clutterbuck (CHA)</td><td>76</td><td>2</td></tr>
<tr><td>17</td><td>Kyle Okposo (LVG)</td><td>77</td><td>2</td></tr>
<tr><td>18</td><td>Craig Smith (ADK)</td><td>78</td><td>2</td></tr>
<tr><td>19</td><td>Vadim Vasjonkin (POR)</td><td>80</td><td>2</td></tr>
<tr><td>20</td><td>Mats Zuccarello (CHI)</td><td>80</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Michael Ferland (JOL)</td><td>78</td><td>3</td></tr>
<tr><td>2</td><td>Oleg Sosunov (GAT)</td><td>32</td><td>2</td></tr>
<tr><td>3</td><td>Jack Hillen (MIL)</td><td>40</td><td>2</td></tr>
<tr><td>4</td><td>Ryan Lindgren (JOL)</td><td>54</td><td>2</td></tr>
<tr><td>5</td><td>Christian Jaros (LVG)</td><td>57</td><td>2</td></tr>
<tr><td>6</td><td>Greg Chase (MAN)</td><td>64</td><td>2</td></tr>
<tr><td>7</td><td>Dalton Prout (MIA)</td><td>67</td><td>2</td></tr>
<tr><td>8</td><td>Mark Borowiecki (MIL)</td><td>80</td><td>2</td></tr>
<tr><td>9</td><td>Louis Belpedio (JOL)</td><td>80</td><td>2</td></tr>
<tr><td>10</td><td>David Schlemko (CHI)</td><td>20</td><td>1</td></tr>
<tr><td>11</td><td>Derek Mathers (TRD)</td><td>27</td><td>1</td></tr>
<tr><td>12</td><td>Julius Bergman (PAR)</td><td>36</td><td>1</td></tr>
<tr><td>13</td><td>Michael Latta (MIL)</td><td>42</td><td>1</td></tr>
<tr><td>14</td><td>Alexei Marchenko (GRG)</td><td>43</td><td>1</td></tr>
<tr><td>15</td><td>Thomas Chabot (GAT)</td><td>43</td><td>1</td></tr>
<tr><td>16</td><td>Brandon Hickey (SPR)</td><td>55</td><td>1</td></tr>
<tr><td>17</td><td>Zac Rinaldo (RFD)</td><td>57</td><td>1</td></tr>
<tr><td>18</td><td>Mitch Moroz (MIL)</td><td>57</td><td>1</td></tr>
<tr><td>19</td><td>James Sheppard (MAN)</td><td>59</td><td>1</td></tr>
<tr><td>20</td><td>Grant Clitsome (MIA)</td><td>60</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Greg Chase (MAN)</td><td>64</td><td>2</td></tr>
<tr><td>2</td><td>Michael Ferland (JOL)</td><td>78</td><td>2</td></tr>
<tr><td>3</td><td>Ryan Lindgren (JOL)</td><td>54</td><td>1</td></tr>
<tr><td>4</td><td>Christian Jaros (LVG)</td><td>57</td><td>1</td></tr>
<tr><td>5</td><td>Grant Clitsome (MIA)</td><td>60</td><td>1</td></tr>
<tr><td>6</td><td>Jake Muzzin (RFD)</td><td>66</td><td>1</td></tr>
<tr><td>7</td><td>Jesper Jensen (POR)</td><td>73</td><td>1</td></tr>
<tr><td>8</td><td>Braydyn Chizen (PAR)</td><td>75</td><td>1</td></tr>
<tr><td>9</td><td>Jack Nevins (CHI)</td><td>76</td><td>1</td></tr>
<tr><td>10</td><td>Derek Dorsett (HOU)</td><td>77</td><td>1</td></tr>
<tr><td>11</td><td>German Rubtsov (LAN)</td><td>80</td><td>1</td></tr>
<tr><td>12</td><td>Max McCormick (BNG)</td><td>80</td><td>1</td></tr>
<tr><td>13</td><td>Mark Borowiecki (MIL)</td><td>80</td><td>1</td></tr>
<tr><td>14</td><td>Brent Pedersen (MAN)</td><td>80</td><td>1</td></tr>
<tr><td>15</td><td>Parker Wotherspoon (LVG)</td><td>80</td><td>1</td></tr>
<tr><td>16</td><td>Austin Wagner (NOR)</td><td>80</td><td>1</td></tr>
<tr><td>17</td><td>Louis Belpedio (JOL)</td><td>80</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Jake Allen (GRG)</td><td>47</td><td>0,921</td></tr>
<tr><td>2</td><td>Mareks Mitens (POR)</td><td>45</td><td>0,917</td></tr>
<tr><td>3</td><td>Mackenzie Blackwood (RFD)</td><td>52</td><td>0,915</td></tr>
<tr><td>4</td><td>Patrick Killeen (WBS)</td><td>65</td><td>0,915</td></tr>
<tr><td>5</td><td>Mike Murphy (CHA)</td><td>51</td><td>0,912</td></tr>
<tr><td>6</td><td>Adin Hill (GAT)</td><td>46</td><td>0,912</td></tr>
<tr><td>7</td><td>Malcolm Subban (NOR)</td><td>50</td><td>0,911</td></tr>
<tr><td>8</td><td>Peter Delmas (LKE)</td><td>55</td><td>0,911</td></tr>
<tr><td>9</td><td>Michael DiPietro (CTW)</td><td>57</td><td>0,910</td></tr>
<tr><td>10</td><td>Ilya Samsonov (TRD)</td><td>52</td><td>0,910</td></tr>
<tr><td>11</td><td>Juuse Saros (LAN)</td><td>53</td><td>0,909</td></tr>
<tr><td>12</td><td>Sami Aittokallio (PEO)</td><td>61</td><td>0,909</td></tr>
<tr><td>13</td><td>Tyler Parsons (LAV)</td><td>49</td><td>0,909</td></tr>
<tr><td>14</td><td>Alex Nedeljkovic (RNO)</td><td>62</td><td>0,906</td></tr>
<tr><td>15</td><td>Jack Lafontaine (JOL)</td><td>49</td><td>0,906</td></tr>
<tr><td>16</td><td>Jakub Kovar (ADK)</td><td>72</td><td>0,906</td></tr>
<tr><td>17</td><td>Michael Hutchinson (PRO)</td><td>62</td><td>0,905</td></tr>
<tr><td>18</td><td>Jeremy Smith (ALB)</td><td>61</td><td>0,904</td></tr>
<tr><td>19</td><td>Jonas Gustavsson (MIL)</td><td>43</td><td>0,903</td></tr>
<tr><td>20</td><td>Ilya Sorokin (ALB)</td><td>54</td><td>0,900</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Jake Allen (GRG)</td><td>47</td><td>2,43</td></tr>
<tr><td>2</td><td>Adin Hill (GAT)</td><td>46</td><td>2,63</td></tr>
<tr><td>3</td><td>Michael DiPietro (CTW)</td><td>57</td><td>2,75</td></tr>
<tr><td>4</td><td>Mike Murphy (CHA)</td><td>51</td><td>2,77</td></tr>
<tr><td>5</td><td>Mackenzie Blackwood (RFD)</td><td>52</td><td>2,78</td></tr>
<tr><td>6</td><td>Patrick Killeen (WBS)</td><td>65</td><td>2,79</td></tr>
<tr><td>7</td><td>Ilya Samsonov (TRD)</td><td>52</td><td>2,79</td></tr>
<tr><td>8</td><td>Jack Lafontaine (JOL)</td><td>49</td><td>2,84</td></tr>
<tr><td>9</td><td>Sami Aittokallio (PEO)</td><td>61</td><td>2,86</td></tr>
<tr><td>10</td><td>Juuse Saros (LAN)</td><td>53</td><td>2,87</td></tr>
<tr><td>11</td><td>Malcolm Subban (NOR)</td><td>50</td><td>2,90</td></tr>
<tr><td>12</td><td>Peter Delmas (LKE)</td><td>55</td><td>2,94</td></tr>
<tr><td>13</td><td>Jeremy Smith (ALB)</td><td>61</td><td>2,95</td></tr>
<tr><td>14</td><td>Mareks Mitens (POR)</td><td>45</td><td>2,96</td></tr>
<tr><td>15</td><td>Jonas Gustavsson (MIL)</td><td>43</td><td>2,96</td></tr>
<tr><td>16</td><td>Jakub Kovar (ADK)</td><td>72</td><td>3,04</td></tr>
<tr><td>17</td><td>Michael Hutchinson (PRO)</td><td>62</td><td>3,08</td></tr>
<tr><td>18</td><td>Tyler Parsons (LAV)</td><td>49</td><td>3,09</td></tr>
<tr><td>19</td><td>Alex Nedeljkovic (RNO)</td><td>62</td><td>3,17</td></tr>
<tr><td>20</td><td>Ilya Sorokin (ALB)</td><td>54</td><td>3,17</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Jakub Kovar (ADK)</td><td>72</td><td>4 031</td></tr>
<tr><td>2</td><td>Patrick Killeen (WBS)</td><td>65</td><td>3 787</td></tr>
<tr><td>3</td><td>Michael Hutchinson (PRO)</td><td>62</td><td>3 637</td></tr>
<tr><td>4</td><td>Alex Nedeljkovic (RNO)</td><td>62</td><td>3 600</td></tr>
<tr><td>5</td><td>Sami Aittokallio (PEO)</td><td>61</td><td>3 484</td></tr>
<tr><td>6</td><td>Jeremy Smith (ALB)</td><td>61</td><td>3 391</td></tr>
<tr><td>7</td><td>Michael DiPietro (CTW)</td><td>57</td><td>3 230</td></tr>
<tr><td>8</td><td>Peter Delmas (LKE)</td><td>55</td><td>3 222</td></tr>
<tr><td>9</td><td>Ilya Samsonov (TRD)</td><td>52</td><td>3 139</td></tr>
<tr><td>10</td><td>Ilya Sorokin (ALB)</td><td>54</td><td>3 067</td></tr>
<tr><td>11</td><td>Juuse Saros (LAN)</td><td>53</td><td>3 011</td></tr>
<tr><td>12</td><td>Mike Murphy (CHA)</td><td>51</td><td>2 991</td></tr>
<tr><td>13</td><td>Mackenzie Blackwood (RFD)</td><td>52</td><td>2 974</td></tr>
<tr><td>14</td><td>Jack Lafontaine (JOL)</td><td>49</td><td>2 892</td></tr>
<tr><td>15</td><td>Tyler Parsons (LAV)</td><td>49</td><td>2 832</td></tr>
<tr><td>16</td><td>Malcolm Subban (NOR)</td><td>50</td><td>2 814</td></tr>
<tr><td>17</td><td>Jake Allen (GRG)</td><td>47</td><td>2 718</td></tr>
<tr><td>18</td><td>Adin Hill (GAT)</td><td>46</td><td>2 623</td></tr>
<tr><td>19</td><td>Mareks Mitens (POR)</td><td>45</td><td>2 537</td></tr>
<tr><td>20</td><td>Jonas Gustavsson (MIL)</td><td>43</td><td>2 470</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Jakub Kovar (ADK)</td><td>72</td><td>2167</td></tr>
<tr><td>2</td><td>Patrick Killeen (WBS)</td><td>65</td><td>2064</td></tr>
<tr><td>3</td><td>Alex Nedeljkovic (RNO)</td><td>62</td><td>2027</td></tr>
<tr><td>4</td><td>Michael Hutchinson (PRO)</td><td>62</td><td>1963</td></tr>
<tr><td>5</td><td>Sami Aittokallio (PEO)</td><td>61</td><td>1830</td></tr>
<tr><td>6</td><td>Peter Delmas (LKE)</td><td>55</td><td>1779</td></tr>
<tr><td>7</td><td>Jeremy Smith (ALB)</td><td>61</td><td>1747</td></tr>
<tr><td>8</td><td>Michael DiPietro (CTW)</td><td>57</td><td>1644</td></tr>
<tr><td>9</td><td>Ilya Sorokin (ALB)</td><td>54</td><td>1627</td></tr>
<tr><td>10</td><td>Mackenzie Blackwood (RFD)</td><td>52</td><td>1621</td></tr>
<tr><td>11</td><td>Ilya Samsonov (TRD)</td><td>52</td><td>1615</td></tr>
<tr><td>12</td><td>Tyler Parsons (LAV)</td><td>49</td><td>1598</td></tr>
<tr><td>13</td><td>Juuse Saros (LAN)</td><td>53</td><td>1591</td></tr>
<tr><td>14</td><td>Mike Murphy (CHA)</td><td>51</td><td>1573</td></tr>
<tr><td>15</td><td>Malcolm Subban (NOR)</td><td>50</td><td>1535</td></tr>
<tr><td>16</td><td>Mareks Mitens (POR)</td><td>45</td><td>1504</td></tr>
<tr><td>17</td><td>Jack Lafontaine (JOL)</td><td>49</td><td>1457</td></tr>
<tr><td>18</td><td>Jake Allen (GRG)</td><td>47</td><td>1384</td></tr>
<tr><td>19</td><td>Adin Hill (GAT)</td><td>46</td><td>1307</td></tr>
<tr><td>20</td><td>Filip Gustavsson (LVG)</td><td>43</td><td>1305</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Ilya Samsonov (TRD)</td><td>52</td><td>4</td></tr>
<tr><td>2</td><td>Sami Aittokallio (PEO)</td><td>61</td><td>4</td></tr>
<tr><td>3</td><td>Michael Hutchinson (PRO)</td><td>62</td><td>4</td></tr>
<tr><td>4</td><td>Tyler Bunz (OKC)</td><td>41</td><td>3</td></tr>
<tr><td>5</td><td>Adin Hill (GAT)</td><td>46</td><td>3</td></tr>
<tr><td>6</td><td>Jake Allen (GRG)</td><td>47</td><td>3</td></tr>
<tr><td>7</td><td>Mike Murphy (CHA)</td><td>51</td><td>3</td></tr>
<tr><td>8</td><td>Peter Delmas (LKE)</td><td>55</td><td>3</td></tr>
<tr><td>9</td><td>Jeremy Smith (ALB)</td><td>61</td><td>3</td></tr>
<tr><td>10</td><td>Alex Nedeljkovic (RNO)</td><td>62</td><td>3</td></tr>
<tr><td>11</td><td>Jonathan Bernier (RFD)</td><td>14</td><td>2</td></tr>
<tr><td>12</td><td>Ilya Bryzgalov (CHI)</td><td>17</td><td>2</td></tr>
<tr><td>13</td><td>Chad Johnson (LVG)</td><td>20</td><td>2</td></tr>
<tr><td>14</td><td>Justin Peters (TRD)</td><td>21</td><td>2</td></tr>
<tr><td>15</td><td>Edward Pasquale (NOR)</td><td>23</td><td>2</td></tr>
<tr><td>16</td><td>Matt O'Connor (LKE)</td><td>26</td><td>2</td></tr>
<tr><td>17</td><td>Vitek Vanecek (CHI)</td><td>26</td><td>2</td></tr>
<tr><td>18</td><td>Jhonas Enroth (ROB)</td><td>27</td><td>2</td></tr>
<tr><td>19</td><td>Antoine Bibeau (HOU)</td><td>28</td><td>2</td></tr>
<tr><td>20</td><td>Ben Scrivens (CHA)</td><td>31</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Patrick Killeen (WBS)</td><td>65</td><td>39</td></tr>
<tr><td>2</td><td>Jakub Kovar (ADK)</td><td>72</td><td>35</td></tr>
<tr><td>3</td><td>Alex Nedeljkovic (RNO)</td><td>62</td><td>32</td></tr>
<tr><td>4</td><td>Michael DiPietro (CTW)</td><td>57</td><td>31</td></tr>
<tr><td>5</td><td>Jeremy Smith (ALB)</td><td>61</td><td>30</td></tr>
<tr><td>6</td><td>Mackenzie Blackwood (RFD)</td><td>52</td><td>29</td></tr>
<tr><td>7</td><td>Malcolm Subban (NOR)</td><td>50</td><td>28</td></tr>
<tr><td>8</td><td>Ilya Sorokin (ALB)</td><td>54</td><td>28</td></tr>
<tr><td>9</td><td>Michael Hutchinson (PRO)</td><td>62</td><td>28</td></tr>
<tr><td>10</td><td>Mike Murphy (CHA)</td><td>51</td><td>27</td></tr>
<tr><td>11</td><td>Peter Delmas (LKE)</td><td>55</td><td>27</td></tr>
<tr><td>12</td><td>Jack Lafontaine (JOL)</td><td>49</td><td>26</td></tr>
<tr><td>13</td><td>Ilya Samsonov (TRD)</td><td>52</td><td>26</td></tr>
<tr><td>14</td><td>Filip Gustavsson (LVG)</td><td>43</td><td>25</td></tr>
<tr><td>15</td><td>Juuse Saros (LAN)</td><td>53</td><td>25</td></tr>
<tr><td>16</td><td>Adin Hill (GAT)</td><td>46</td><td>24</td></tr>
<tr><td>17</td><td>Jake Allen (GRG)</td><td>47</td><td>24</td></tr>
<tr><td>18</td><td>Sami Aittokallio (PEO)</td><td>61</td><td>24</td></tr>
<tr><td>19</td><td>Jonas Gustavsson (MIL)</td><td>43</td><td>23</td></tr>
<tr><td>20</td><td>Tyler Parsons (LAV)</td><td>49</td><td>22</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Evan Fitzpatrick (LVG)</td><td>9</td><td>1,000</td></tr>
<tr><td>2</td><td>Jeremy Smith (ALB)</td><td>7</td><td>1,000</td></tr>
<tr><td>3</td><td>Anthony Stolarz (CTW)</td><td>4</td><td>1,000</td></tr>
<tr><td>4</td><td>Igor Bobkov (BNG)</td><td>4</td><td>1,000</td></tr>
<tr><td>5</td><td>Mike Smith (BRI)</td><td>4</td><td>1,000</td></tr>
<tr><td>6</td><td>Jake Paterson (BRI)</td><td>4</td><td>1,000</td></tr>
<tr><td>7</td><td>Kristers Gudlevskis (CHA)</td><td>4</td><td>1,000</td></tr>
<tr><td>8</td><td>Kyle Keyser (PAR)</td><td>3</td><td>1,000</td></tr>
<tr><td>9</td><td>Cedrick Desjardins (OKC)</td><td>3</td><td>1,000</td></tr>
<tr><td>10</td><td>Mason McDonald (CHI)</td><td>3</td><td>1,000</td></tr>
<tr><td>11</td><td>Ilya Bryzgalov (CHI)</td><td>3</td><td>1,000</td></tr>
<tr><td>12</td><td>Melvin Nyffeler (JOL)</td><td>3</td><td>1,000</td></tr>
<tr><td>13</td><td>Antti Raanta (RFD)</td><td>3</td><td>1,000</td></tr>
<tr><td>14</td><td>Reto Berra (SPR)</td><td>3</td><td>1,000</td></tr>
<tr><td>15</td><td>Andrey Makarov (PEO)</td><td>3</td><td>1,000</td></tr>
<tr><td>16</td><td>Scott Wedgewood (ALB)</td><td>2</td><td>1,000</td></tr>
<tr><td>17</td><td>Filip Gustavsson (LVG)</td><td>2</td><td>1,000</td></tr>
<tr><td>18</td><td>Bradley Eidsness (RCH)</td><td>11</td><td>0,909</td></tr>
<tr><td>19</td><td>Juuse Saros (LAN)</td><td>9</td><td>0,889</td></tr>
<tr><td>20</td><td>Anders Lindback (MIA)</td><td>8</td><td>0,875</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Jakub Kovar (ADK)</td><td>72</td><td>29</td></tr>
<tr><td>2</td><td>Sami Aittokallio (PEO)</td><td>61</td><td>26</td></tr>
<tr><td>3</td><td>Jeremy Smith (ALB)</td><td>61</td><td>26</td></tr>
<tr><td>4</td><td>Michael Hutchinson (PRO)</td><td>62</td><td>25</td></tr>
<tr><td>5</td><td>Alex Nedeljkovic (RNO)</td><td>62</td><td>25</td></tr>
<tr><td>6</td><td>Juuse Saros (LAN)</td><td>53</td><td>22</td></tr>
<tr><td>7</td><td>Igor Bobkov (BNG)</td><td>37</td><td>21</td></tr>
<tr><td>8</td><td>Tyler Parsons (LAV)</td><td>49</td><td>20</td></tr>
<tr><td>9</td><td>Peter Delmas (LKE)</td><td>55</td><td>20</td></tr>
<tr><td>10</td><td>Michael DiPietro (CTW)</td><td>57</td><td>20</td></tr>
<tr><td>11</td><td>Anton Khudobin (HOU)</td><td>43</td><td>19</td></tr>
<tr><td>12</td><td>Mareks Mitens (POR)</td><td>45</td><td>19</td></tr>
<tr><td>13</td><td>Ilya Samsonov (TRD)</td><td>52</td><td>19</td></tr>
<tr><td>14</td><td>Chet Pickard (MIA)</td><td>39</td><td>18</td></tr>
<tr><td>15</td><td>Keith Petruzzelli (SAR)</td><td>40</td><td>18</td></tr>
<tr><td>16</td><td>Adin Hill (GAT)</td><td>46</td><td>18</td></tr>
<tr><td>17</td><td>Jake Allen (GRG)</td><td>47</td><td>18</td></tr>
<tr><td>18</td><td>Aaron Dell (SPR)</td><td>41</td><td>17</td></tr>
<tr><td>19</td><td>Louis Domingue (MIL)</td><td>42</td><td>17</td></tr>
<tr><td>20</td><td>Mike Murphy (CHA)</td><td>51</td><td>17</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
