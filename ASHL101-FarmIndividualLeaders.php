<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Individual Leaders</title>
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
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Denis Malgin (CTW)</td><td>80</td><td>31</td></tr>
<tr><td>2</td><td>Conor Garland (HOU)</td><td>80</td><td>31</td></tr>
<tr><td>3</td><td>Denis Guryanov (CTW)</td><td>80</td><td>31</td></tr>
<tr><td>4</td><td>Rodrigo Abols (NUU)</td><td>69</td><td>30</td></tr>
<tr><td>5</td><td>Tage Thompson (MIL)</td><td>80</td><td>30</td></tr>
<tr><td>6</td><td>Noah Rod (BNG)</td><td>81</td><td>30</td></tr>
<tr><td>7</td><td>Jayce Hawryluk (LVG)</td><td>79</td><td>29</td></tr>
<tr><td>8</td><td>Rasmus Asplund (CHA)</td><td>79</td><td>29</td></tr>
<tr><td>9</td><td>Noah Gregor (TRD)</td><td>75</td><td>28</td></tr>
<tr><td>10</td><td>John Hayden (PEO)</td><td>76</td><td>28</td></tr>
<tr><td>11</td><td>Justin Kea (LVG)</td><td>80</td><td>28</td></tr>
<tr><td>12</td><td>Chase De Leo (PEO)</td><td>80</td><td>28</td></tr>
<tr><td>13</td><td>Nathan Walker (RFD)</td><td>80</td><td>28</td></tr>
<tr><td>14</td><td>Michael McLeod (OKC)</td><td>80</td><td>28</td></tr>
<tr><td>15</td><td>Trey Fix-Wolansky (NUU)</td><td>80</td><td>28</td></tr>
<tr><td>16</td><td>David Gustafsson (PEO)</td><td>81</td><td>28</td></tr>
<tr><td>17</td><td>Colton Sissons (PRO)</td><td>73</td><td>27</td></tr>
<tr><td>18</td><td>Mason Appleton (PEO)</td><td>80</td><td>27</td></tr>
<tr><td>19</td><td>Fredrik Karlstrom (ADK)</td><td>80</td><td>27</td></tr>
<tr><td>20</td><td>Jerry D'Amigo (GAT)</td><td>80</td><td>27</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Brogan Rafferty (BNG)</td><td>80</td><td>58</td></tr>
<tr><td>2</td><td>Brandon Carlo (CTW)</td><td>80</td><td>56</td></tr>
<tr><td>3</td><td>Jack Dougherty (OKC)</td><td>74</td><td>55</td></tr>
<tr><td>4</td><td>Mario Ferraro (PRO)</td><td>80</td><td>55</td></tr>
<tr><td>5</td><td>Troy Stecher (WBS)</td><td>65</td><td>53</td></tr>
<tr><td>6</td><td>Adam Fox (LAV)</td><td>80</td><td>51</td></tr>
<tr><td>7</td><td>Noah Dobson (RNO)</td><td>75</td><td>50</td></tr>
<tr><td>8</td><td>Marcus Pettersson (SPR)</td><td>69</td><td>48</td></tr>
<tr><td>9</td><td>Ryan Sproul (HOU)</td><td>68</td><td>47</td></tr>
<tr><td>10</td><td>Cale Makar (BRI)</td><td>75</td><td>47</td></tr>
<tr><td>11</td><td>Lukas Bengtsson (PAR)</td><td>78</td><td>47</td></tr>
<tr><td>12</td><td>Olli Juolevi (ROB)</td><td>80</td><td>47</td></tr>
<tr><td>13</td><td>Fredrik Claesson (SAR)</td><td>80</td><td>47</td></tr>
<tr><td>14</td><td>Samuel Girard (ROB)</td><td>69</td><td>46</td></tr>
<tr><td>15</td><td>Sam Jardine (NOR)</td><td>74</td><td>46</td></tr>
<tr><td>16</td><td>Parker Wotherspoon (LVG)</td><td>80</td><td>46</td></tr>
<tr><td>17</td><td>Gustav Forsling (CTW)</td><td>76</td><td>45</td></tr>
<tr><td>18</td><td>Carl Dahlstrom (RCH)</td><td>80</td><td>45</td></tr>
<tr><td>19</td><td>Justin Braun (WBS)</td><td>80</td><td>44</td></tr>
<tr><td>20</td><td>Dante Fabbro (GAT)</td><td>80</td><td>44</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Kasperi Kapanen (ROB)</td><td>80</td><td>287</td></tr>
<tr><td>2</td><td>Denis Malgin (CTW)</td><td>80</td><td>276</td></tr>
<tr><td>3</td><td>Trey Fix-Wolansky (NUU)</td><td>80</td><td>276</td></tr>
<tr><td>4</td><td>Pius Suter (SPR)</td><td>77</td><td>267</td></tr>
<tr><td>5</td><td>Francis Perron (RNO)</td><td>80</td><td>259</td></tr>
<tr><td>6</td><td>Jayce Hawryluk (LVG)</td><td>79</td><td>258</td></tr>
<tr><td>7</td><td>Warren Foegele (RNO)</td><td>79</td><td>258</td></tr>
<tr><td>8</td><td>Kevin Roy (BNG)</td><td>80</td><td>256</td></tr>
<tr><td>9</td><td>Daniel O'Regan (RCH)</td><td>80</td><td>255</td></tr>
<tr><td>10</td><td>Erik Foley (HOU)</td><td>78</td><td>250</td></tr>
<tr><td>11</td><td>Anthony Cirelli (GAT)</td><td>80</td><td>248</td></tr>
<tr><td>12</td><td>Brett Howden (OKC)</td><td>78</td><td>246</td></tr>
<tr><td>13</td><td>Austin Czarnik (RFD)</td><td>80</td><td>246</td></tr>
<tr><td>14</td><td>Samuel Blais (WBS)</td><td>76</td><td>244</td></tr>
<tr><td>15</td><td>Nathan Walker (RFD)</td><td>80</td><td>242</td></tr>
<tr><td>16</td><td>Alexander Barabanov (ROB)</td><td>79</td><td>241</td></tr>
<tr><td>17</td><td>Andrej Nestrasil (BRI)</td><td>80</td><td>240</td></tr>
<tr><td>18</td><td>Kiefer Sherwood (CHA)</td><td>80</td><td>239</td></tr>
<tr><td>19</td><td>Denis Guryanov (CTW)</td><td>80</td><td>237</td></tr>
<tr><td>20</td><td>Conner Bleackley (LVG)</td><td>69</td><td>236</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Juuso Välimäki (LAV)</td><td>66</td><td>19,42%</td></tr>
<tr><td>2</td><td>Petrus Palmu (ROB)</td><td>77</td><td>16,20%</td></tr>
<tr><td>3</td><td>Rodrigo Abols (NUU)</td><td>69</td><td>15,63%</td></tr>
<tr><td>4</td><td>Petr Straka (CHI)</td><td>43</td><td>15,38%</td></tr>
<tr><td>5</td><td>Dmitry Zavgorodniy (CCC)</td><td>70</td><td>14,78%</td></tr>
<tr><td>6</td><td>David Gustafsson (PEO)</td><td>81</td><td>14,66%</td></tr>
<tr><td>7</td><td>Francis Beauvillier (LKE)</td><td>80</td><td>14,55%</td></tr>
<tr><td>8</td><td>Connor Dewar (CHA)</td><td>75</td><td>14,41%</td></tr>
<tr><td>9</td><td>Alexei Mitrofanov (RCH)</td><td>51</td><td>14,29%</td></tr>
<tr><td>10</td><td>Adam Musil (CCC)</td><td>68</td><td>14,29%</td></tr>
<tr><td>11</td><td>Spencer Stastney (MIL)</td><td>80</td><td>14,29%</td></tr>
<tr><td>12</td><td>Jordan Schneider (MIH)</td><td>80</td><td>14,29%</td></tr>
<tr><td>13</td><td>Rafaël Harvey-Pinard (RNO)</td><td>73</td><td>14,18%</td></tr>
<tr><td>14</td><td>Noah Rod (BNG)</td><td>81</td><td>14,15%</td></tr>
<tr><td>15</td><td>Chase De Leo (PEO)</td><td>80</td><td>14,14%</td></tr>
<tr><td>16</td><td>Conor Garland (HOU)</td><td>80</td><td>14,09%</td></tr>
<tr><td>17</td><td>John Hayden (PEO)</td><td>76</td><td>14,07%</td></tr>
<tr><td>18</td><td>David Booth (PEO)</td><td>80</td><td>13,99%</td></tr>
<tr><td>19</td><td>David Jones (CCC)</td><td>55</td><td>13,98%</td></tr>
<tr><td>20</td><td>Andreas Engqvist (RFD)</td><td>57</td><td>13,95%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Denis Malgin (CTW)</td><td>80</td><td>31-37-68</td></tr>
<tr><td>2</td><td>Pius Suter (SPR)</td><td>77</td><td>24-41-65</td></tr>
<tr><td>3</td><td>German Rubtsov (BNG)</td><td>77</td><td>24-40-64</td></tr>
<tr><td>4</td><td>Jayce Hawryluk (LVG)</td><td>79</td><td>29-34-63</td></tr>
<tr><td>5</td><td>Chase De Leo (PEO)</td><td>80</td><td>28-35-63</td></tr>
<tr><td>6</td><td>Noah Rod (BNG)</td><td>81</td><td>30-31-61</td></tr>
<tr><td>7</td><td>Anthony Cirelli (GAT)</td><td>80</td><td>25-36-61</td></tr>
<tr><td>8</td><td>Mason Appleton (PEO)</td><td>80</td><td>27-32-59</td></tr>
<tr><td>9</td><td>Manuel Wiederer (RNO)</td><td>80</td><td>23-36-59</td></tr>
<tr><td>10</td><td>Jack Evans (CHI)</td><td>80</td><td>25-33-58</td></tr>
<tr><td>11</td><td>Roope Hintz (ALB)</td><td>73</td><td>17-41-58</td></tr>
<tr><td>12</td><td>Austin Czarnik (RFD)</td><td>80</td><td>23-32-55</td></tr>
<tr><td>13</td><td>Brett Howden (OKC)</td><td>78</td><td>22-33-55</td></tr>
<tr><td>14</td><td>Jakob Forsbacka Karlsson (PRO)</td><td>80</td><td>22-33-55</td></tr>
<tr><td>15</td><td>Nicolas Roy (GAT)</td><td>80</td><td>20-35-55</td></tr>
<tr><td>16</td><td>Ryan Donato (CTW)</td><td>80</td><td>22-32-54</td></tr>
<tr><td>17</td><td>Conner Bleackley (LVG)</td><td>69</td><td>21-33-54</td></tr>
<tr><td>18</td><td>Colton Sissons (PRO)</td><td>73</td><td>27-26-53</td></tr>
<tr><td>19</td><td>Dillon Dube (PRO)</td><td>76</td><td>25-28-53</td></tr>
<tr><td>20</td><td>Daniel O'Regan (RCH)</td><td>80</td><td>18-35-53</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Pius Suter (SPR)</td><td>77</td><td>24-41-65</td></tr>
<tr><td>2</td><td>Kevin Roy (BNG)</td><td>80</td><td>22-43-65</td></tr>
<tr><td>3</td><td>Noah Rod (BNG)</td><td>81</td><td>30-31-61</td></tr>
<tr><td>4</td><td>Mathias From (CCC)</td><td>80</td><td>25-33-58</td></tr>
<tr><td>5</td><td>Daniel Sprong (LAV)</td><td>80</td><td>23-35-58</td></tr>
<tr><td>6</td><td>Mathieu Joseph (GAT)</td><td>64</td><td>25-31-56</td></tr>
<tr><td>7</td><td>Tage Thompson (MIL)</td><td>80</td><td>30-25-55</td></tr>
<tr><td>8</td><td>Brett Howden (OKC)</td><td>78</td><td>22-33-55</td></tr>
<tr><td>9</td><td>Ryan Donato (CTW)</td><td>80</td><td>22-32-54</td></tr>
<tr><td>10</td><td>Denis Guryanov (CTW)</td><td>80</td><td>31-22-53</td></tr>
<tr><td>11</td><td>Dillon Dube (PRO)</td><td>76</td><td>25-28-53</td></tr>
<tr><td>12</td><td>John Hayden (PEO)</td><td>76</td><td>28-24-52</td></tr>
<tr><td>13</td><td>Miikka Salomäki (MIL)</td><td>75</td><td>24-28-52</td></tr>
<tr><td>14</td><td>Justin Kea (LVG)</td><td>80</td><td>28-23-51</td></tr>
<tr><td>15</td><td>Fredrik Karlstrom (ADK)</td><td>80</td><td>27-24-51</td></tr>
<tr><td>16</td><td>Maxime Comtois (CHI)</td><td>63</td><td>19-32-51</td></tr>
<tr><td>17</td><td>Tomas Jurco (NOR)</td><td>79</td><td>19-31-50</td></tr>
<tr><td>18</td><td>Andrej Nestrasil (BRI)</td><td>80</td><td>17-33-50</td></tr>
<tr><td>19</td><td>Sebastian Collberg (HOU)</td><td>79</td><td>26-23-49</td></tr>
<tr><td>20</td><td>Mads Eller (NOR)</td><td>80</td><td>24-25-49</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Denis Malgin (CTW)</td><td>80</td><td>31-37-68</td></tr>
<tr><td>2</td><td>Kevin Roy (BNG)</td><td>80</td><td>22-43-65</td></tr>
<tr><td>3</td><td>Trey Fix-Wolansky (NUU)</td><td>80</td><td>28-36-64</td></tr>
<tr><td>4</td><td>Jayce Hawryluk (LVG)</td><td>79</td><td>29-34-63</td></tr>
<tr><td>5</td><td>Noah Rod (BNG)</td><td>81</td><td>30-31-61</td></tr>
<tr><td>6</td><td>Mason Appleton (PEO)</td><td>80</td><td>27-32-59</td></tr>
<tr><td>7</td><td>Manuel Wiederer (RNO)</td><td>80</td><td>23-36-59</td></tr>
<tr><td>8</td><td>Jack Evans (CHI)</td><td>80</td><td>25-33-58</td></tr>
<tr><td>9</td><td>Mathias From (CCC)</td><td>80</td><td>25-33-58</td></tr>
<tr><td>10</td><td>Daniel Sprong (LAV)</td><td>80</td><td>23-35-58</td></tr>
<tr><td>11</td><td>Roope Hintz (ALB)</td><td>73</td><td>17-41-58</td></tr>
<tr><td>12</td><td>Mathieu Joseph (GAT)</td><td>64</td><td>25-31-56</td></tr>
<tr><td>13</td><td>Tage Thompson (MIL)</td><td>80</td><td>30-25-55</td></tr>
<tr><td>14</td><td>Nicklas Jensen (CHI)</td><td>80</td><td>26-29-55</td></tr>
<tr><td>15</td><td>Austin Czarnik (RFD)</td><td>80</td><td>23-32-55</td></tr>
<tr><td>16</td><td>Brett Howden (OKC)</td><td>78</td><td>22-33-55</td></tr>
<tr><td>17</td><td>Nicholas Caamano (MIL)</td><td>80</td><td>22-32-54</td></tr>
<tr><td>18</td><td>Zachary Senyshyn (WBS)</td><td>67</td><td>18-36-54</td></tr>
<tr><td>19</td><td>Denis Guryanov (CTW)</td><td>80</td><td>31-22-53</td></tr>
<tr><td>20</td><td>Colton Sissons (PRO)</td><td>73</td><td>27-26-53</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Troy Stecher (WBS)</td><td>65</td><td>17-53-70</td></tr>
<tr><td>2</td><td>Brandon Carlo (CTW)</td><td>80</td><td>14-56-70</td></tr>
<tr><td>3</td><td>Brogan Rafferty (BNG)</td><td>80</td><td>10-58-68</td></tr>
<tr><td>4</td><td>Adam Fox (LAV)</td><td>80</td><td>14-51-65</td></tr>
<tr><td>5</td><td>Jack Dougherty (OKC)</td><td>74</td><td>10-55-65</td></tr>
<tr><td>6</td><td>Mario Ferraro (PRO)</td><td>80</td><td>6-55-61</td></tr>
<tr><td>7</td><td>Carl Dahlstrom (RCH)</td><td>80</td><td>15-45-60</td></tr>
<tr><td>8</td><td>Cale Makar (BRI)</td><td>75</td><td>12-47-59</td></tr>
<tr><td>9</td><td>Noah Dobson (RNO)</td><td>75</td><td>9-50-59</td></tr>
<tr><td>10</td><td>Samuel Girard (ROB)</td><td>69</td><td>12-46-58</td></tr>
<tr><td>11</td><td>Ryan Sproul (HOU)</td><td>68</td><td>11-47-58</td></tr>
<tr><td>12</td><td>Dante Fabbro (GAT)</td><td>80</td><td>13-44-57</td></tr>
<tr><td>13</td><td>Sam Jardine (NOR)</td><td>74</td><td>11-46-57</td></tr>
<tr><td>14</td><td>Lukas Bengtsson (PAR)</td><td>78</td><td>10-47-57</td></tr>
<tr><td>15</td><td>Sami Niku (LAV)</td><td>80</td><td>14-42-56</td></tr>
<tr><td>16</td><td>Gustav Forsling (CTW)</td><td>76</td><td>11-45-56</td></tr>
<tr><td>17</td><td>Olli Juolevi (ROB)</td><td>80</td><td>9-47-56</td></tr>
<tr><td>18</td><td>Josh Mahura (CTW)</td><td>80</td><td>14-41-55</td></tr>
<tr><td>19</td><td>Tyler Lewington (ADK)</td><td>80</td><td>12-43-55</td></tr>
<tr><td>20</td><td>Marcus Pettersson (SPR)</td><td>69</td><td>7-48-55</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Joseph Labate (CHI)</td><td>49</td><td>1,02</td></tr>
<tr><td>2</td><td>Chase De Leo (PEO)</td><td>80</td><td>0,96</td></tr>
<tr><td>3</td><td>Robert Thomas (BNG)</td><td>59</td><td>0,94</td></tr>
<tr><td>4</td><td>Kevin Roy (BNG)</td><td>80</td><td>0,94</td></tr>
<tr><td>5</td><td>Denis Malgin (CTW)</td><td>80</td><td>0,93</td></tr>
<tr><td>6</td><td>Trey Fix-Wolansky (NUU)</td><td>80</td><td>0,92</td></tr>
<tr><td>7</td><td>Martin Necas (LAV)</td><td>50</td><td>0,89</td></tr>
<tr><td>8</td><td>Troy Stecher (WBS)</td><td>65</td><td>0,89</td></tr>
<tr><td>9</td><td>Alexei Mitrofanov (RCH)</td><td>51</td><td>0,89</td></tr>
<tr><td>10</td><td>Pius Suter (SPR)</td><td>77</td><td>0,87</td></tr>
<tr><td>11</td><td>Jack Evans (CHI)</td><td>80</td><td>0,87</td></tr>
<tr><td>12</td><td>Mathieu Joseph (GAT)</td><td>64</td><td>0,87</td></tr>
<tr><td>13</td><td>Noah Rod (BNG)</td><td>81</td><td>0,86</td></tr>
<tr><td>14</td><td>Ryan Donato (CTW)</td><td>80</td><td>0,86</td></tr>
<tr><td>15</td><td>Rodrigo Abols (NUU)</td><td>69</td><td>0,86</td></tr>
<tr><td>16</td><td>Petr Straka (CHI)</td><td>43</td><td>0,86</td></tr>
<tr><td>17</td><td>Maxime Comtois (CHI)</td><td>63</td><td>0,85</td></tr>
<tr><td>18</td><td>Filip Zadina (CHI)</td><td>45</td><td>0,84</td></tr>
<tr><td>19</td><td>Nicklas Jensen (CHI)</td><td>80</td><td>0,84</td></tr>
<tr><td>20</td><td>Denis Guryanov (CTW)</td><td>80</td><td>0,84</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Antoine Vermette (JOL)</td><td>69</td><td>59,66%</td></tr>
<tr><td>2</td><td>Luke Adam (MIL)</td><td>80</td><td>59,41%</td></tr>
<tr><td>3</td><td>Derick Brassard (PAR)</td><td>55</td><td>59,18%</td></tr>
<tr><td>4</td><td>Christopher DiDomenico (RFD)</td><td>71</td><td>56,97%</td></tr>
<tr><td>5</td><td>Artem Anisimov (PRO)</td><td>45</td><td>56,75%</td></tr>
<tr><td>6</td><td>Brandon Dubinsky (SAR)</td><td>77</td><td>56,28%</td></tr>
<tr><td>7</td><td>Brett Pollock (MIL)</td><td>53</td><td>56,16%</td></tr>
<tr><td>8</td><td>Maxime Talbot (WBS)</td><td>74</td><td>55,74%</td></tr>
<tr><td>9</td><td>Andreas Engqvist (RFD)</td><td>57</td><td>55,73%</td></tr>
<tr><td>10</td><td>Brent Raedeke (GRG)</td><td>77</td><td>55,35%</td></tr>
<tr><td>11</td><td>Tomas Vincour (GRG)</td><td>73</td><td>55,26%</td></tr>
<tr><td>12</td><td>Anton Lander (CHI)</td><td>80</td><td>55,07%</td></tr>
<tr><td>13</td><td>Justin Kea (LVG)</td><td>80</td><td>55,06%</td></tr>
<tr><td>14</td><td>Derek Roy (PAR)</td><td>58</td><td>54,81%</td></tr>
<tr><td>15</td><td>Trevor Lewis (ROB)</td><td>80</td><td>54,76%</td></tr>
<tr><td>16</td><td>Valtteri Filppula (GRG)</td><td>66</td><td>54,47%</td></tr>
<tr><td>17</td><td>Alexander Khokhlachev (PRO)</td><td>80</td><td>54,34%</td></tr>
<tr><td>18</td><td>T.J. Tynan (SPR)</td><td>58</td><td>54,26%</td></tr>
<tr><td>19</td><td>Riley Nash (PAR)</td><td>80</td><td>54,23%</td></tr>
<tr><td>20</td><td>Mads Eller (NOR)</td><td>80</td><td>53,95%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Brandon Carlo (CTW)</td><td>80</td><td>35</td></tr>
<tr><td>2</td><td>Denis Malgin (CTW)</td><td>80</td><td>29</td></tr>
<tr><td>3</td><td>Mathias From (CCC)</td><td>80</td><td>28</td></tr>
<tr><td>4</td><td>Josh Mahura (CTW)</td><td>80</td><td>25</td></tr>
<tr><td>5</td><td>Maxime Comtois (CHI)</td><td>63</td><td>24</td></tr>
<tr><td>6</td><td>Ryan Donato (CTW)</td><td>80</td><td>24</td></tr>
<tr><td>7</td><td>Miikka Salomäki (MIL)</td><td>75</td><td>22</td></tr>
<tr><td>8</td><td>Cameron Hughes (OKC)</td><td>79</td><td>22</td></tr>
<tr><td>9</td><td>Andreas Engqvist (RFD)</td><td>57</td><td>21</td></tr>
<tr><td>10</td><td>T.J. Brodie (MIL)</td><td>67</td><td>21</td></tr>
<tr><td>11</td><td>Tim Heed (LKE)</td><td>73</td><td>21</td></tr>
<tr><td>12</td><td>Philip Lane (CHI)</td><td>79</td><td>21</td></tr>
<tr><td>13</td><td>Hafthor Sigrunarson (NUU)</td><td>79</td><td>21</td></tr>
<tr><td>14</td><td>Gavin Bayreuther (CHI)</td><td>80</td><td>21</td></tr>
<tr><td>15</td><td>Matt Benning (SAR)</td><td>66</td><td>20</td></tr>
<tr><td>16</td><td>Martin Kaut (SPR)</td><td>74</td><td>20</td></tr>
<tr><td>17</td><td>Spencer Stastney (MIL)</td><td>80</td><td>20</td></tr>
<tr><td>18</td><td>Mathieu Joseph (GAT)</td><td>64</td><td>19</td></tr>
<tr><td>19</td><td>Marcus Pettersson (SPR)</td><td>69</td><td>19</td></tr>
<tr><td>20</td><td>Sam Jardine (NOR)</td><td>74</td><td>19</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Ben Harpur (LAV)</td><td>78</td><td>106</td></tr>
<tr><td>2</td><td>Mark Alt (MAN)</td><td>80</td><td>105</td></tr>
<tr><td>3</td><td>Oleg Sosunov (GAT)</td><td>78</td><td>103</td></tr>
<tr><td>4</td><td>Jérémy Lauzon (RNO)</td><td>80</td><td>100</td></tr>
<tr><td>5</td><td>Brandon Carlo (CTW)</td><td>80</td><td>98</td></tr>
<tr><td>6</td><td>Casey Fitzgerald (CTW)</td><td>73</td><td>96</td></tr>
<tr><td>7</td><td>Jack Dougherty (OKC)</td><td>74</td><td>96</td></tr>
<tr><td>8</td><td>Karlis Cukste (NUU)</td><td>80</td><td>93</td></tr>
<tr><td>9</td><td>Brett Lernout (CHI)</td><td>70</td><td>92</td></tr>
<tr><td>10</td><td>Joseph Cramarossa (LKE)</td><td>80</td><td>92</td></tr>
<tr><td>11</td><td>Julius Bergman (BRI)</td><td>80</td><td>91</td></tr>
<tr><td>12</td><td>Harrison Ruopp (RCH)</td><td>80</td><td>91</td></tr>
<tr><td>13</td><td>Chaz Reddekopp (MIH)</td><td>74</td><td>88</td></tr>
<tr><td>14</td><td>Justin Auger (RFD)</td><td>80</td><td>88</td></tr>
<tr><td>15</td><td>Michael Paliotta (CHA)</td><td>75</td><td>87</td></tr>
<tr><td>16</td><td>Trevor Carrick (CHI)</td><td>77</td><td>86</td></tr>
<tr><td>17</td><td>Christian Jaros (LVG)</td><td>76</td><td>84</td></tr>
<tr><td>18</td><td>Joshua Jacobs (MIL)</td><td>76</td><td>84</td></tr>
<tr><td>19</td><td>Connor Clifton (PAR)</td><td>77</td><td>84</td></tr>
<tr><td>20</td><td>Isaac Ratcliffe (CHI)</td><td>80</td><td>84</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Dylan Demelo (HOU)</td><td>80</td><td>143</td></tr>
<tr><td>2</td><td>Robbie Russo (BRI)</td><td>80</td><td>135</td></tr>
<tr><td>3</td><td>Fredrik Claesson (SAR)</td><td>80</td><td>134</td></tr>
<tr><td>4</td><td>Dante Fabbro (GAT)</td><td>80</td><td>130</td></tr>
<tr><td>5</td><td>Dean Kukan (TRD)</td><td>80</td><td>129</td></tr>
<tr><td>6</td><td>Konrad Abeltshauser (PRO)</td><td>80</td><td>129</td></tr>
<tr><td>7</td><td>Taylor Chorney (ADK)</td><td>80</td><td>126</td></tr>
<tr><td>8</td><td>Carl Dahlstrom (RCH)</td><td>80</td><td>126</td></tr>
<tr><td>9</td><td>Adam Fox (LAV)</td><td>80</td><td>124</td></tr>
<tr><td>10</td><td>Olli Juolevi (ROB)</td><td>80</td><td>123</td></tr>
<tr><td>11</td><td>Brett Lernout (CHI)</td><td>70</td><td>122</td></tr>
<tr><td>12</td><td>Michael Paliotta (CHA)</td><td>75</td><td>121</td></tr>
<tr><td>13</td><td>Otto Leskinen (OKC)</td><td>78</td><td>121</td></tr>
<tr><td>14</td><td>Joe Hicketts (RFD)</td><td>80</td><td>121</td></tr>
<tr><td>15</td><td>Daniel Brickley (ADK)</td><td>80</td><td>121</td></tr>
<tr><td>16</td><td>Harrison Ruopp (RCH)</td><td>80</td><td>121</td></tr>
<tr><td>17</td><td>William Lagesson (CTW)</td><td>80</td><td>120</td></tr>
<tr><td>18</td><td>Riley Stadel (NOR)</td><td>80</td><td>120</td></tr>
<tr><td>19</td><td>Lucas Carlsson (RCH)</td><td>78</td><td>119</td></tr>
<tr><td>20</td><td>Joshua Jacobs (MIL)</td><td>76</td><td>118</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Denis Malgin (CTW)</td><td>80</td><td>31-37-68</td></tr>
<tr><td>2</td><td>Brogan Rafferty (BNG)</td><td>80</td><td>10-58-68</td></tr>
<tr><td>3</td><td>Pius Suter (SPR)</td><td>77</td><td>24-41-65</td></tr>
<tr><td>4</td><td>Adam Fox (LAV)</td><td>80</td><td>14-51-65</td></tr>
<tr><td>5</td><td>Jack Dougherty (OKC)</td><td>74</td><td>10-55-65</td></tr>
<tr><td>6</td><td>Trey Fix-Wolansky (NUU)</td><td>80</td><td>28-36-64</td></tr>
<tr><td>7</td><td>German Rubtsov (BNG)</td><td>77</td><td>24-40-64</td></tr>
<tr><td>8</td><td>Chase De Leo (PEO)</td><td>80</td><td>28-35-63</td></tr>
<tr><td>9</td><td>Noah Rod (BNG)</td><td>81</td><td>30-31-61</td></tr>
<tr><td>10</td><td>Anthony Cirelli (GAT)</td><td>80</td><td>25-36-61</td></tr>
<tr><td>11</td><td>Mario Ferraro (PRO)</td><td>80</td><td>6-55-61</td></tr>
<tr><td>12</td><td>Carl Dahlstrom (RCH)</td><td>80</td><td>15-45-60</td></tr>
<tr><td>13</td><td>Manuel Wiederer (RNO)</td><td>80</td><td>23-36-59</td></tr>
<tr><td>14</td><td>Jack Evans (CHI)</td><td>80</td><td>25-33-58</td></tr>
<tr><td>15</td><td>Mathias From (CCC)</td><td>80</td><td>25-33-58</td></tr>
<tr><td>16</td><td>Daniel Sprong (LAV)</td><td>80</td><td>23-35-58</td></tr>
<tr><td>17</td><td>Roope Hintz (ALB)</td><td>73</td><td>17-41-58</td></tr>
<tr><td>18</td><td>Dante Fabbro (GAT)</td><td>80</td><td>13-44-57</td></tr>
<tr><td>19</td><td>Lukas Bengtsson (PAR)</td><td>78</td><td>10-47-57</td></tr>
<tr><td>20</td><td>Mathieu Joseph (GAT)</td><td>64</td><td>25-31-56</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Brendan Lemieux (OKC)</td><td>71</td><td>227</td></tr>
<tr><td>2</td><td>John Hayden (PEO)</td><td>76</td><td>216</td></tr>
<tr><td>3</td><td>Justin Auger (RFD)</td><td>80</td><td>209</td></tr>
<tr><td>4</td><td>Harrison Ruopp (RCH)</td><td>80</td><td>202</td></tr>
<tr><td>5</td><td>Vadim Vasjonkin (NUU)</td><td>80</td><td>193</td></tr>
<tr><td>6</td><td>Jackson Houck (ALB)</td><td>80</td><td>193</td></tr>
<tr><td>7</td><td>Zach Budish (ADK)</td><td>65</td><td>188</td></tr>
<tr><td>8</td><td>Justin Kea (LVG)</td><td>80</td><td>188</td></tr>
<tr><td>9</td><td>Ryan Tesink (SAR)</td><td>76</td><td>184</td></tr>
<tr><td>10</td><td>Colton Sissons (PRO)</td><td>73</td><td>179</td></tr>
<tr><td>11</td><td>Brandon Carlo (CTW)</td><td>80</td><td>176</td></tr>
<tr><td>12</td><td>Jacob Larsson (PEO)</td><td>77</td><td>175</td></tr>
<tr><td>13</td><td>Philippe Hudon (GRG)</td><td>79</td><td>175</td></tr>
<tr><td>14</td><td>Oleg Sosunov (GAT)</td><td>78</td><td>172</td></tr>
<tr><td>15</td><td>Joshua Jacobs (MIL)</td><td>76</td><td>171</td></tr>
<tr><td>16</td><td>Brent Pedersen (MAN)</td><td>80</td><td>171</td></tr>
<tr><td>17</td><td>Nathan Bastian (PAR)</td><td>79</td><td>170</td></tr>
<tr><td>18</td><td>Karlis Cukste (NUU)</td><td>80</td><td>170</td></tr>
<tr><td>19</td><td>Mattias Samuelsson (SPR)</td><td>80</td><td>169</td></tr>
<tr><td>20</td><td>Christian Jaros (LVG)</td><td>76</td><td>168</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Josh Ho-Sang (NOR)</td><td>77</td><td>14</td></tr>
<tr><td>2</td><td>Philippe Myers (RNO)</td><td>78</td><td>12</td></tr>
<tr><td>3</td><td>Sami Niku (LAV)</td><td>80</td><td>12</td></tr>
<tr><td>4</td><td>Troy Stecher (WBS)</td><td>65</td><td>11</td></tr>
<tr><td>5</td><td>Juuso Välimäki (LAV)</td><td>66</td><td>11</td></tr>
<tr><td>6</td><td>Kirby Dach (OKC)</td><td>57</td><td>10</td></tr>
<tr><td>7</td><td>Ethan Bear (BNG)</td><td>67</td><td>10</td></tr>
<tr><td>8</td><td>Brett Lernout (CHI)</td><td>70</td><td>10</td></tr>
<tr><td>9</td><td>Lassi Thomson (ROB)</td><td>75</td><td>10</td></tr>
<tr><td>10</td><td>Konrad Abeltshauser (PRO)</td><td>80</td><td>10</td></tr>
<tr><td>11</td><td>Tage Thompson (MIL)</td><td>80</td><td>10</td></tr>
<tr><td>12</td><td>Mattias Backman (CHI)</td><td>50</td><td>9</td></tr>
<tr><td>13</td><td>Aleksi Saarela (ROB)</td><td>72</td><td>9</td></tr>
<tr><td>14</td><td>Noah Gregor (TRD)</td><td>75</td><td>9</td></tr>
<tr><td>15</td><td>Pius Suter (SPR)</td><td>77</td><td>9</td></tr>
<tr><td>16</td><td>Adam Boqvist (SPR)</td><td>78</td><td>9</td></tr>
<tr><td>17</td><td>Jayce Hawryluk (LVG)</td><td>79</td><td>9</td></tr>
<tr><td>18</td><td>Jakob Forsbacka Karlsson (PRO)</td><td>80</td><td>9</td></tr>
<tr><td>19</td><td>Conor Garland (HOU)</td><td>80</td><td>9</td></tr>
<tr><td>20</td><td>Alex Grant (LVG)</td><td>51</td><td>8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Gabriel Gagné (CHI)</td><td>39</td><td>2</td></tr>
<tr><td>2</td><td>T.J. Tynan (SPR)</td><td>58</td><td>2</td></tr>
<tr><td>3</td><td>Niklas Hansson (PEO)</td><td>61</td><td>2</td></tr>
<tr><td>4</td><td>Justin Almeida (HOU)</td><td>80</td><td>2</td></tr>
<tr><td>5</td><td>Nolan Stevens (GAT)</td><td>80</td><td>2</td></tr>
<tr><td>6</td><td>Noah Rod (BNG)</td><td>81</td><td>2</td></tr>
<tr><td>7</td><td>Connor Mackey (PAR)</td><td>16</td><td>1</td></tr>
<tr><td>8</td><td>Beau Starrett (OKC)</td><td>27</td><td>1</td></tr>
<tr><td>9</td><td>Zac Dalpe (MIH)</td><td>31</td><td>1</td></tr>
<tr><td>10</td><td>Jason Zucker (LKE)</td><td>37</td><td>1</td></tr>
<tr><td>11</td><td>Taro Hirose (RCH)</td><td>39</td><td>1</td></tr>
<tr><td>12</td><td>Filip Zadina (CHI)</td><td>45</td><td>1</td></tr>
<tr><td>13</td><td>Nick Ebert (MIH)</td><td>46</td><td>1</td></tr>
<tr><td>14</td><td>Ryan Haggerty (MIH)</td><td>47</td><td>1</td></tr>
<tr><td>15</td><td>Zach Hyman (GRG)</td><td>49</td><td>1</td></tr>
<tr><td>16</td><td>Matt Martin (WBS)</td><td>59</td><td>1</td></tr>
<tr><td>17</td><td>Gregory Beron (PAR)</td><td>59</td><td>1</td></tr>
<tr><td>18</td><td>David Desharnais (CHI)</td><td>60</td><td>1</td></tr>
<tr><td>19</td><td>Daniel Bernhardt (MIH)</td><td>60</td><td>1</td></tr>
<tr><td>20</td><td>Brett Seney (BRI)</td><td>61</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Denis Malgin (CTW)</td><td>80</td><td>9</td></tr>
<tr><td>2</td><td>Miikka Salomäki (MIL)</td><td>75</td><td>8</td></tr>
<tr><td>3</td><td>Nikita Jevpalovs (ROB)</td><td>54</td><td>7</td></tr>
<tr><td>4</td><td>Rodrigo Abols (NUU)</td><td>69</td><td>7</td></tr>
<tr><td>5</td><td>Martins Dzierkals (RNO)</td><td>80</td><td>7</td></tr>
<tr><td>6</td><td>Nicolas Roy (GAT)</td><td>80</td><td>7</td></tr>
<tr><td>7</td><td>Conor Garland (HOU)</td><td>80</td><td>7</td></tr>
<tr><td>8</td><td>Denis Guryanov (CTW)</td><td>80</td><td>7</td></tr>
<tr><td>9</td><td>Ryan Haggerty (MIH)</td><td>47</td><td>6</td></tr>
<tr><td>10</td><td>Kirby Dach (OKC)</td><td>57</td><td>6</td></tr>
<tr><td>11</td><td>Shane Prince (GRG)</td><td>57</td><td>6</td></tr>
<tr><td>12</td><td>Robin Kovacs (LAV)</td><td>58</td><td>6</td></tr>
<tr><td>13</td><td>Ryan Tesink (SAR)</td><td>76</td><td>6</td></tr>
<tr><td>14</td><td>German Rubtsov (BNG)</td><td>77</td><td>6</td></tr>
<tr><td>15</td><td>Mason Appleton (PEO)</td><td>80</td><td>6</td></tr>
<tr><td>16</td><td>Jack Evans (CHI)</td><td>80</td><td>6</td></tr>
<tr><td>17</td><td>Mads Eller (NOR)</td><td>80</td><td>6</td></tr>
<tr><td>18</td><td>Austin Czarnik (RFD)</td><td>80</td><td>6</td></tr>
<tr><td>19</td><td>Christopher Clapperton (BRI)</td><td>80</td><td>6</td></tr>
<tr><td>20</td><td>Nicklas Jensen (CHI)</td><td>80</td><td>6</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Brendan Lemieux (OKC)</td><td>71</td><td>5</td></tr>
<tr><td>2</td><td>Martin Kaut (SPR)</td><td>74</td><td>5</td></tr>
<tr><td>3</td><td>Jerry D'Amigo (GAT)</td><td>80</td><td>5</td></tr>
<tr><td>4</td><td>Rodrigo Abols (NUU)</td><td>69</td><td>4</td></tr>
<tr><td>5</td><td>Stanislav Galiev (BNG)</td><td>76</td><td>4</td></tr>
<tr><td>6</td><td>Rasmus Asplund (CHA)</td><td>79</td><td>4</td></tr>
<tr><td>7</td><td>Chase De Leo (PEO)</td><td>80</td><td>4</td></tr>
<tr><td>8</td><td>Denis Malgin (CTW)</td><td>80</td><td>4</td></tr>
<tr><td>9</td><td>Owen Tippett (LAV)</td><td>80</td><td>4</td></tr>
<tr><td>10</td><td>Tage Thompson (MIL)</td><td>80</td><td>4</td></tr>
<tr><td>11</td><td>Martin Necas (LAV)</td><td>50</td><td>3</td></tr>
<tr><td>12</td><td>Greg Nemisz (JOL)</td><td>75</td><td>3</td></tr>
<tr><td>13</td><td>Klim Kostin (CCC)</td><td>76</td><td>3</td></tr>
<tr><td>14</td><td>Filip Hronek (LAV)</td><td>76</td><td>3</td></tr>
<tr><td>15</td><td>German Rubtsov (BNG)</td><td>77</td><td>3</td></tr>
<tr><td>16</td><td>Lucas Carlsson (RCH)</td><td>78</td><td>3</td></tr>
<tr><td>17</td><td>Trevor Cox (RCH)</td><td>78</td><td>3</td></tr>
<tr><td>18</td><td>Marcus Karlberg (SPR)</td><td>78</td><td>3</td></tr>
<tr><td>19</td><td>Paul Byron (MIH)</td><td>79</td><td>3</td></tr>
<tr><td>20</td><td>Philip Lane (CHI)</td><td>79</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Alexei Mitrofanov (RCH)</td><td>51</td><td>2</td></tr>
<tr><td>2</td><td>Nikita Jevpalovs (ROB)</td><td>54</td><td>2</td></tr>
<tr><td>3</td><td>Nolan Patrick (LAV)</td><td>67</td><td>2</td></tr>
<tr><td>4</td><td>Reid Duke (WBS)</td><td>74</td><td>2</td></tr>
<tr><td>5</td><td>Brandon Carlo (CTW)</td><td>80</td><td>2</td></tr>
<tr><td>6</td><td>Matteson Iacopelli (TRD)</td><td>80</td><td>2</td></tr>
<tr><td>7</td><td>Antoine Morand (OKC)</td><td>80</td><td>2</td></tr>
<tr><td>8</td><td>Max Hermens (WBS)</td><td>32</td><td>1</td></tr>
<tr><td>9</td><td>Jesse Blacker (ROB)</td><td>33</td><td>1</td></tr>
<tr><td>10</td><td>Gabriel Gagné (CHI)</td><td>39</td><td>1</td></tr>
<tr><td>11</td><td>Freddie Hamilton (MIL)</td><td>40</td><td>1</td></tr>
<tr><td>12</td><td>Radko Gudas (NOR)</td><td>49</td><td>1</td></tr>
<tr><td>13</td><td>Brett Pollock (MIL)</td><td>53</td><td>1</td></tr>
<tr><td>14</td><td>Henri Jokiharju (OKC)</td><td>59</td><td>1</td></tr>
<tr><td>15</td><td>Scott Laughton (RCH)</td><td>59</td><td>1</td></tr>
<tr><td>16</td><td>Brett Bulmer (SPR)</td><td>61</td><td>1</td></tr>
<tr><td>17</td><td>Ales Hemsky (CHA)</td><td>63</td><td>1</td></tr>
<tr><td>18</td><td>Michael Ferland (JOL)</td><td>63</td><td>1</td></tr>
<tr><td>19</td><td>Blake Coleman (ALB)</td><td>63</td><td>1</td></tr>
<tr><td>20</td><td>Beau Bennett (SAR)</td><td>64</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Olli Juolevi (ROB)</td><td>80</td><td>1 949</td></tr>
<tr><td>2</td><td>Mario Ferraro (PRO)</td><td>80</td><td>1 936</td></tr>
<tr><td>3</td><td>Taylor Chorney (ADK)</td><td>80</td><td>1 889</td></tr>
<tr><td>4</td><td>Harrison Ruopp (RCH)</td><td>80</td><td>1 887</td></tr>
<tr><td>5</td><td>Charles-Olivier Roussel (HOU)</td><td>79</td><td>1 870</td></tr>
<tr><td>6</td><td>Dante Fabbro (GAT)</td><td>80</td><td>1 862</td></tr>
<tr><td>7</td><td>Brogan Rafferty (BNG)</td><td>80</td><td>1 861</td></tr>
<tr><td>8</td><td>Parker Wotherspoon (LVG)</td><td>80</td><td>1 855</td></tr>
<tr><td>9</td><td>Konrad Abeltshauser (PRO)</td><td>80</td><td>1 842</td></tr>
<tr><td>10</td><td>Dean Kukan (TRD)</td><td>80</td><td>1 807</td></tr>
<tr><td>11</td><td>Mark Alt (MAN)</td><td>80</td><td>1 792</td></tr>
<tr><td>12</td><td>Adam Fox (LAV)</td><td>80</td><td>1 788</td></tr>
<tr><td>13</td><td>Carl Dahlstrom (RCH)</td><td>80</td><td>1 775</td></tr>
<tr><td>14</td><td>Noah Dobson (RNO)</td><td>75</td><td>1 756</td></tr>
<tr><td>15</td><td>Brett Cote (LKE)</td><td>75</td><td>1 737</td></tr>
<tr><td>16</td><td>Jacob Larsson (PEO)</td><td>77</td><td>1 737</td></tr>
<tr><td>17</td><td>Joe Hicketts (RFD)</td><td>80</td><td>1 735</td></tr>
<tr><td>18</td><td>Mattias Samuelsson (SPR)</td><td>80</td><td>1 725</td></tr>
<tr><td>19</td><td>Chris Wideman (GRG)</td><td>80</td><td>1 714</td></tr>
<tr><td>20</td><td>Dysin Mayo (ALB)</td><td>80</td><td>1 713</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Gabriel Dumont (MAN)</td><td>79</td><td>2</td></tr>
<tr><td>2</td><td>Tyler Angle (SAR)</td><td>25</td><td>1</td></tr>
<tr><td>3</td><td>Mattias Tedenby (CHI)</td><td>38</td><td>1</td></tr>
<tr><td>4</td><td>Mattias Backman (CHI)</td><td>50</td><td>1</td></tr>
<tr><td>5</td><td>Noah Juulsen (BRI)</td><td>57</td><td>1</td></tr>
<tr><td>6</td><td>Sondre Olden (CHA)</td><td>60</td><td>1</td></tr>
<tr><td>7</td><td>Mathieu Joseph (GAT)</td><td>64</td><td>1</td></tr>
<tr><td>8</td><td>Louis Belpedio (CHA)</td><td>66</td><td>1</td></tr>
<tr><td>9</td><td>Austin Wagner (NOR)</td><td>67</td><td>1</td></tr>
<tr><td>10</td><td>Antoine Vermette (JOL)</td><td>69</td><td>1</td></tr>
<tr><td>11</td><td>Samuel Girard (ROB)</td><td>69</td><td>1</td></tr>
<tr><td>12</td><td>Tyler Benson (CHA)</td><td>71</td><td>1</td></tr>
<tr><td>13</td><td>Noah Gregor (TRD)</td><td>75</td><td>1</td></tr>
<tr><td>14</td><td>Paul Bittner (OKC)</td><td>76</td><td>1</td></tr>
<tr><td>15</td><td>Ryan Tesink (SAR)</td><td>76</td><td>1</td></tr>
<tr><td>16</td><td>Brett Howden (OKC)</td><td>78</td><td>1</td></tr>
<tr><td>17</td><td>Jayce Hawryluk (LVG)</td><td>79</td><td>1</td></tr>
<tr><td>18</td><td>Warren Foegele (RNO)</td><td>79</td><td>1</td></tr>
<tr><td>19</td><td>Julien Gauthier (BRI)</td><td>79</td><td>1</td></tr>
<tr><td>20</td><td>Justin Bailey (PAR)</td><td>80</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Mathieu Joseph (GAT)</td><td>64</td><td>3</td></tr>
<tr><td>2</td><td>Denis Guryanov (CTW)</td><td>80</td><td>3</td></tr>
<tr><td>3</td><td>Yevgeni Svechnikov (MIH)</td><td>81</td><td>3</td></tr>
<tr><td>4</td><td>Linus Omark (PAR)</td><td>21</td><td>2</td></tr>
<tr><td>5</td><td>Jermaine Loewen (NUU)</td><td>23</td><td>2</td></tr>
<tr><td>6</td><td>Dominik Simon (WBS)</td><td>29</td><td>2</td></tr>
<tr><td>7</td><td>Mattias Tedenby (CHI)</td><td>38</td><td>2</td></tr>
<tr><td>8</td><td>Justin Shugg (CHI)</td><td>43</td><td>2</td></tr>
<tr><td>9</td><td>Blake Coleman (ALB)</td><td>63</td><td>2</td></tr>
<tr><td>10</td><td>Brady Tkachuk (GRG)</td><td>68</td><td>2</td></tr>
<tr><td>11</td><td>Kyle Capobianco (CCC)</td><td>72</td><td>2</td></tr>
<tr><td>12</td><td>Klim Kostin (CCC)</td><td>76</td><td>2</td></tr>
<tr><td>13</td><td>Mason Appleton (PEO)</td><td>80</td><td>2</td></tr>
<tr><td>14</td><td>Jack Evans (CHI)</td><td>80</td><td>2</td></tr>
<tr><td>15</td><td>Janne Kuokkanen (MIH)</td><td>80</td><td>2</td></tr>
<tr><td>16</td><td>Alexandre Fortin (RNO)</td><td>80</td><td>2</td></tr>
<tr><td>17</td><td>Daniel O'Regan (RCH)</td><td>80</td><td>2</td></tr>
<tr><td>18</td><td>Nathan Walker (RFD)</td><td>80</td><td>2</td></tr>
<tr><td>19</td><td>Hudson Elynuik (CCC)</td><td>80</td><td>2</td></tr>
<tr><td>20</td><td>Trey Fix-Wolansky (NUU)</td><td>80</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Tage Thompson (MIL)</td><td>80</td><td>8</td></tr>
<tr><td>2</td><td>Roope Hintz (ALB)</td><td>73</td><td>6</td></tr>
<tr><td>3</td><td>Michael Paliotta (CHA)</td><td>75</td><td>5</td></tr>
<tr><td>4</td><td>Anthony Angello (JOL)</td><td>8</td><td>4</td></tr>
<tr><td>5</td><td>Mattias Tedenby (CHI)</td><td>38</td><td>4</td></tr>
<tr><td>6</td><td>Liam Kirk (NUU)</td><td>60</td><td>4</td></tr>
<tr><td>7</td><td>Mathieu Joseph (GAT)</td><td>64</td><td>4</td></tr>
<tr><td>8</td><td>Joe Hicketts (RFD)</td><td>80</td><td>4</td></tr>
<tr><td>9</td><td>Mikhail Maltsev (WBS)</td><td>80</td><td>4</td></tr>
<tr><td>10</td><td>Dominik Simon (WBS)</td><td>29</td><td>3</td></tr>
<tr><td>11</td><td>Gabriel Gagné (CHI)</td><td>39</td><td>3</td></tr>
<tr><td>12</td><td>Justin Shugg (CHI)</td><td>43</td><td>3</td></tr>
<tr><td>13</td><td>Alexei Mitrofanov (RCH)</td><td>51</td><td>3</td></tr>
<tr><td>14</td><td>Kyle Rau (LKE)</td><td>53</td><td>3</td></tr>
<tr><td>15</td><td>Samuel Regis (RNO)</td><td>64</td><td>3</td></tr>
<tr><td>16</td><td>Johan Sundstrom (SPR)</td><td>67</td><td>3</td></tr>
<tr><td>17</td><td>Dmitry Zavgorodniy (CCC)</td><td>70</td><td>3</td></tr>
<tr><td>18</td><td>Dominik Bokk (SPR)</td><td>70</td><td>3</td></tr>
<tr><td>19</td><td>Johnathan MacLeod (CCC)</td><td>74</td><td>3</td></tr>
<tr><td>20</td><td>Sebastian Collberg (HOU)</td><td>79</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Gaetan Haas (TRD)</td><td>80</td><td>200</td></tr>
<tr><td>2</td><td>Nicolas Roy (GAT)</td><td>80</td><td>200</td></tr>
<tr><td>3</td><td>Michael McLeod (OKC)</td><td>80</td><td>188</td></tr>
<tr><td>4</td><td>Antoine Morand (OKC)</td><td>80</td><td>185</td></tr>
<tr><td>5</td><td>German Rubtsov (BNG)</td><td>77</td><td>184</td></tr>
<tr><td>6</td><td>Conner Bleackley (LVG)</td><td>69</td><td>181</td></tr>
<tr><td>7</td><td>Connor Hurley (PAR)</td><td>80</td><td>172</td></tr>
<tr><td>8</td><td>Antoine Vermette (JOL)</td><td>69</td><td>167</td></tr>
<tr><td>9</td><td>Joe Veleno (LAV)</td><td>81</td><td>167</td></tr>
<tr><td>10</td><td>Roope Hintz (ALB)</td><td>73</td><td>164</td></tr>
<tr><td>11</td><td>Daniel O'Regan (RCH)</td><td>80</td><td>164</td></tr>
<tr><td>12</td><td>Anton Lander (CHI)</td><td>80</td><td>161</td></tr>
<tr><td>13</td><td>Manuel Wiederer (RNO)</td><td>80</td><td>158</td></tr>
<tr><td>14</td><td>Oskar Steen (PEO)</td><td>80</td><td>157</td></tr>
<tr><td>15</td><td>Zach Hall (ALB)</td><td>80</td><td>156</td></tr>
<tr><td>16</td><td>Miikka Salomäki (MIL)</td><td>75</td><td>154</td></tr>
<tr><td>17</td><td>Rasmus Asplund (CHA)</td><td>79</td><td>154</td></tr>
<tr><td>18</td><td>Francis Perron (RNO)</td><td>80</td><td>153</td></tr>
<tr><td>19</td><td>Nolan Patrick (LAV)</td><td>67</td><td>152</td></tr>
<tr><td>20</td><td>Anthony Cirelli (GAT)</td><td>80</td><td>152</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Daniel Bernhardt (MIH)</td><td>60</td><td>5</td></tr>
<tr><td>2</td><td>Roope Hintz (ALB)</td><td>73</td><td>4</td></tr>
<tr><td>3</td><td>Dillon Dube (PRO)</td><td>76</td><td>4</td></tr>
<tr><td>4</td><td>Daniel O'Regan (RCH)</td><td>80</td><td>4</td></tr>
<tr><td>5</td><td>Artem Anisimov (PRO)</td><td>45</td><td>3</td></tr>
<tr><td>6</td><td>Sean Kuraly (RCH)</td><td>66</td><td>3</td></tr>
<tr><td>7</td><td>Jack Evans (CHI)</td><td>80</td><td>3</td></tr>
<tr><td>8</td><td>Zac Dalpe (MIH)</td><td>31</td><td>2</td></tr>
<tr><td>9</td><td>Gabriel Gagné (CHI)</td><td>39</td><td>2</td></tr>
<tr><td>10</td><td>Joel Kiviranta (CHA)</td><td>54</td><td>2</td></tr>
<tr><td>11</td><td>Kyle Okposo (LVG)</td><td>56</td><td>2</td></tr>
<tr><td>12</td><td>Shane Prince (GRG)</td><td>57</td><td>2</td></tr>
<tr><td>13</td><td>Melker Karlsson (LVG)</td><td>59</td><td>2</td></tr>
<tr><td>14</td><td>Michael Ferland (JOL)</td><td>63</td><td>2</td></tr>
<tr><td>15</td><td>Kenny Agostino (CHA)</td><td>63</td><td>2</td></tr>
<tr><td>16</td><td>Luke Kunin (RCH)</td><td>64</td><td>2</td></tr>
<tr><td>17</td><td>Filip Chlapik (JOL)</td><td>67</td><td>2</td></tr>
<tr><td>18</td><td>Mats Zuccarello (CHI)</td><td>69</td><td>2</td></tr>
<tr><td>19</td><td>Conner Bleackley (LVG)</td><td>69</td><td>2</td></tr>
<tr><td>20</td><td>Reid Duke (WBS)</td><td>74</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Adam Ginning (HOU)</td><td>76</td><td>3</td></tr>
<tr><td>2</td><td>Anton Volchenkov (CHA)</td><td>59</td><td>2</td></tr>
<tr><td>3</td><td>Connor Dewar (CHA)</td><td>75</td><td>2</td></tr>
<tr><td>4</td><td>Connor Clifton (PAR)</td><td>77</td><td>2</td></tr>
<tr><td>5</td><td>Ben Harpur (LAV)</td><td>78</td><td>2</td></tr>
<tr><td>6</td><td>Nathan Bastian (PAR)</td><td>79</td><td>2</td></tr>
<tr><td>7</td><td>Isaac Ratcliffe (CHI)</td><td>80</td><td>2</td></tr>
<tr><td>8</td><td>Justin Auger (RFD)</td><td>80</td><td>2</td></tr>
<tr><td>9</td><td>Joseph Cramarossa (LKE)</td><td>80</td><td>2</td></tr>
<tr><td>10</td><td>Dylan Blujus (MIL)</td><td>32</td><td>1</td></tr>
<tr><td>11</td><td>Jeff Taylor (GAT)</td><td>34</td><td>1</td></tr>
<tr><td>12</td><td>Brian Ferlin (PRO)</td><td>37</td><td>1</td></tr>
<tr><td>13</td><td>Hunter Drew (BNG)</td><td>41</td><td>1</td></tr>
<tr><td>14</td><td>Stephen Johns (CHA)</td><td>43</td><td>1</td></tr>
<tr><td>15</td><td>Robert Bortuzzo (WBS)</td><td>44</td><td>1</td></tr>
<tr><td>16</td><td>Riley Barber (JOL)</td><td>45</td><td>1</td></tr>
<tr><td>17</td><td>Ryan Rupert (GAT)</td><td>47</td><td>1</td></tr>
<tr><td>18</td><td>Brett Pollock (MIL)</td><td>53</td><td>1</td></tr>
<tr><td>19</td><td>Rasmus Andersson (GAT)</td><td>58</td><td>1</td></tr>
<tr><td>20</td><td>Matt Martin (WBS)</td><td>59</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Dylan Blujus (MIL)</td><td>32</td><td>1</td></tr>
<tr><td>2</td><td>Hunter Drew (BNG)</td><td>41</td><td>1</td></tr>
<tr><td>3</td><td>Stephen Johns (CHA)</td><td>43</td><td>1</td></tr>
<tr><td>4</td><td>Robert Bortuzzo (WBS)</td><td>44</td><td>1</td></tr>
<tr><td>5</td><td>Dennis Gilbert (JOL)</td><td>73</td><td>1</td></tr>
<tr><td>6</td><td>Michael Rasmussen (CCC)</td><td>77</td><td>1</td></tr>
<tr><td>7</td><td>Adam Polasek (ALB)</td><td>77</td><td>1</td></tr>
<tr><td>8</td><td>Connor Clifton (PAR)</td><td>77</td><td>1</td></tr>
<tr><td>9</td><td>Ben Harpur (LAV)</td><td>78</td><td>1</td></tr>
<tr><td>10</td><td>Oleg Sosunov (GAT)</td><td>78</td><td>1</td></tr>
<tr><td>11</td><td>Nathan Bastian (PAR)</td><td>79</td><td>1</td></tr>
<tr><td>12</td><td>Robbie Russo (BRI)</td><td>80</td><td>1</td></tr>
<tr><td>13</td><td>Isaac Ratcliffe (CHI)</td><td>80</td><td>1</td></tr>
<tr><td>14</td><td>Jerome Gauthier-Leduc (MAN)</td><td>80</td><td>1</td></tr>
<tr><td>15</td><td>Jerry D'Amigo (GAT)</td><td>80</td><td>1</td></tr>
<tr><td>16</td><td>Harrison Ruopp (RCH)</td><td>80</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Devan Dubnyk (OKC)</td><td>56</td><td>0,918</td></tr>
<tr><td>2</td><td>Daniel Vladar (MIH)</td><td>52</td><td>0,915</td></tr>
<tr><td>3</td><td>Anders Nilsson (SPR)</td><td>61</td><td>0,913</td></tr>
<tr><td>4</td><td>Mareks Mitens (NUU)</td><td>53</td><td>0,912</td></tr>
<tr><td>5</td><td>Dustin Tokarski (LKE)</td><td>47</td><td>0,912</td></tr>
<tr><td>6</td><td>Alex Nedeljkovic (RNO)</td><td>71</td><td>0,911</td></tr>
<tr><td>7</td><td>Antti Niemi (GAT)</td><td>46</td><td>0,911</td></tr>
<tr><td>8</td><td>Kyle Keyser (PAR)</td><td>64</td><td>0,910</td></tr>
<tr><td>9</td><td>Alexei Melnichuk (CCC)</td><td>46</td><td>0,910</td></tr>
<tr><td>10</td><td>Ken Appleby (NOR)</td><td>54</td><td>0,910</td></tr>
<tr><td>11</td><td>Chet Pickard (MIL)</td><td>66</td><td>0,909</td></tr>
<tr><td>12</td><td>Jeremy Smith (ALB)</td><td>46</td><td>0,908</td></tr>
<tr><td>13</td><td>Michael Hutchinson (PRO)</td><td>44</td><td>0,905</td></tr>
<tr><td>14</td><td>Veini Vehvilainen (ROB)</td><td>65</td><td>0,905</td></tr>
<tr><td>15</td><td>Colton Point (LAV)</td><td>54</td><td>0,904</td></tr>
<tr><td>16</td><td>Aaron Dell (ADK)</td><td>52</td><td>0,901</td></tr>
<tr><td>17</td><td>Filip Gustavsson (LVG)</td><td>67</td><td>0,901</td></tr>
<tr><td>18</td><td>Ilya Samsonov (TRD)</td><td>49</td><td>0,901</td></tr>
<tr><td>19</td><td>Keith Petruzzelli (SAR)</td><td>71</td><td>0,900</td></tr>
<tr><td>20</td><td>Mason McDonald (CHI)</td><td>56</td><td>0,900</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Devan Dubnyk (OKC)</td><td>56</td><td>2,61</td></tr>
<tr><td>2</td><td>Anders Nilsson (SPR)</td><td>61</td><td>2,64</td></tr>
<tr><td>3</td><td>Antti Niemi (GAT)</td><td>46</td><td>2,66</td></tr>
<tr><td>4</td><td>Chet Pickard (MIL)</td><td>66</td><td>2,67</td></tr>
<tr><td>5</td><td>Dustin Tokarski (LKE)</td><td>47</td><td>2,76</td></tr>
<tr><td>6</td><td>Kyle Keyser (PAR)</td><td>64</td><td>2,78</td></tr>
<tr><td>7</td><td>Colton Point (LAV)</td><td>54</td><td>2,80</td></tr>
<tr><td>8</td><td>Ken Appleby (NOR)</td><td>54</td><td>2,82</td></tr>
<tr><td>9</td><td>Daniel Vladar (MIH)</td><td>52</td><td>2,83</td></tr>
<tr><td>10</td><td>Alex Nedeljkovic (RNO)</td><td>71</td><td>2,84</td></tr>
<tr><td>11</td><td>Jeremy Smith (ALB)</td><td>46</td><td>2,84</td></tr>
<tr><td>12</td><td>Mareks Mitens (NUU)</td><td>53</td><td>2,87</td></tr>
<tr><td>13</td><td>Veini Vehvilainen (ROB)</td><td>65</td><td>2,91</td></tr>
<tr><td>14</td><td>Michael Hutchinson (PRO)</td><td>44</td><td>2,92</td></tr>
<tr><td>15</td><td>Alexei Melnichuk (CCC)</td><td>46</td><td>2,96</td></tr>
<tr><td>16</td><td>Keith Petruzzelli (SAR)</td><td>71</td><td>3,00</td></tr>
<tr><td>17</td><td>Ilya Samsonov (TRD)</td><td>49</td><td>3,02</td></tr>
<tr><td>18</td><td>Michael DiPietro (CTW)</td><td>65</td><td>3,07</td></tr>
<tr><td>19</td><td>Filip Gustavsson (LVG)</td><td>67</td><td>3,11</td></tr>
<tr><td>20</td><td>Antoine Bibeau (HOU)</td><td>73</td><td>3,11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Alex Nedeljkovic (RNO)</td><td>71</td><td>4 115</td></tr>
<tr><td>2</td><td>Antoine Bibeau (HOU)</td><td>73</td><td>4 104</td></tr>
<tr><td>3</td><td>Keith Petruzzelli (SAR)</td><td>71</td><td>4 061</td></tr>
<tr><td>4</td><td>Chet Pickard (MIL)</td><td>66</td><td>3 846</td></tr>
<tr><td>5</td><td>Filip Gustavsson (LVG)</td><td>67</td><td>3 843</td></tr>
<tr><td>6</td><td>Michael DiPietro (CTW)</td><td>65</td><td>3 747</td></tr>
<tr><td>7</td><td>Kyle Keyser (PAR)</td><td>64</td><td>3 697</td></tr>
<tr><td>8</td><td>Veini Vehvilainen (ROB)</td><td>65</td><td>3 651</td></tr>
<tr><td>9</td><td>Anders Nilsson (SPR)</td><td>61</td><td>3 430</td></tr>
<tr><td>10</td><td>Igor Bobkov (BNG)</td><td>61</td><td>3 405</td></tr>
<tr><td>11</td><td>Mason McDonald (CHI)</td><td>56</td><td>3 212</td></tr>
<tr><td>12</td><td>Devan Dubnyk (OKC)</td><td>56</td><td>3 169</td></tr>
<tr><td>13</td><td>Ken Appleby (NOR)</td><td>54</td><td>3 129</td></tr>
<tr><td>14</td><td>Aaron Dell (ADK)</td><td>52</td><td>3 078</td></tr>
<tr><td>15</td><td>Mareks Mitens (NUU)</td><td>53</td><td>3 028</td></tr>
<tr><td>16</td><td>Daniel Vladar (MIH)</td><td>52</td><td>3 009</td></tr>
<tr><td>17</td><td>Colton Point (LAV)</td><td>54</td><td>2 960</td></tr>
<tr><td>18</td><td>Ilya Samsonov (TRD)</td><td>49</td><td>2 938</td></tr>
<tr><td>19</td><td>Dustin Tokarski (LKE)</td><td>47</td><td>2 778</td></tr>
<tr><td>20</td><td>Antti Niemi (GAT)</td><td>46</td><td>2 728</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Alex Nedeljkovic (RNO)</td><td>71</td><td>2199</td></tr>
<tr><td>2</td><td>Antoine Bibeau (HOU)</td><td>73</td><td>2072</td></tr>
<tr><td>3</td><td>Keith Petruzzelli (SAR)</td><td>71</td><td>2036</td></tr>
<tr><td>4</td><td>Filip Gustavsson (LVG)</td><td>67</td><td>2010</td></tr>
<tr><td>5</td><td>Kyle Keyser (PAR)</td><td>64</td><td>1906</td></tr>
<tr><td>6</td><td>Chet Pickard (MIL)</td><td>66</td><td>1888</td></tr>
<tr><td>7</td><td>Michael DiPietro (CTW)</td><td>65</td><td>1884</td></tr>
<tr><td>8</td><td>Veini Vehvilainen (ROB)</td><td>65</td><td>1854</td></tr>
<tr><td>9</td><td>Igor Bobkov (BNG)</td><td>61</td><td>1825</td></tr>
<tr><td>10</td><td>Anders Nilsson (SPR)</td><td>61</td><td>1741</td></tr>
<tr><td>11</td><td>Mason McDonald (CHI)</td><td>56</td><td>1723</td></tr>
<tr><td>12</td><td>Devan Dubnyk (OKC)</td><td>56</td><td>1675</td></tr>
<tr><td>13</td><td>Daniel Vladar (MIH)</td><td>52</td><td>1672</td></tr>
<tr><td>14</td><td>Mareks Mitens (NUU)</td><td>53</td><td>1654</td></tr>
<tr><td>15</td><td>Ken Appleby (NOR)</td><td>54</td><td>1638</td></tr>
<tr><td>16</td><td>Aaron Dell (ADK)</td><td>52</td><td>1629</td></tr>
<tr><td>17</td><td>Ilya Samsonov (TRD)</td><td>49</td><td>1494</td></tr>
<tr><td>18</td><td>Alexei Melnichuk (CCC)</td><td>46</td><td>1460</td></tr>
<tr><td>19</td><td>Dustin Tokarski (LKE)</td><td>47</td><td>1454</td></tr>
<tr><td>20</td><td>Colton Point (LAV)</td><td>54</td><td>1441</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Alex Nedeljkovic (RNO)</td><td>71</td><td>7</td></tr>
<tr><td>2</td><td>Anders Nilsson (SPR)</td><td>61</td><td>6</td></tr>
<tr><td>3</td><td>Keith Petruzzelli (SAR)</td><td>71</td><td>6</td></tr>
<tr><td>4</td><td>Ken Appleby (NOR)</td><td>54</td><td>5</td></tr>
<tr><td>5</td><td>Colton Point (LAV)</td><td>54</td><td>4</td></tr>
<tr><td>6</td><td>Veini Vehvilainen (ROB)</td><td>65</td><td>4</td></tr>
<tr><td>7</td><td>Chet Pickard (MIL)</td><td>66</td><td>4</td></tr>
<tr><td>8</td><td>Jared Coreau (RCH)</td><td>25</td><td>3</td></tr>
<tr><td>9</td><td>Jake Paterson (BRI)</td><td>31</td><td>3</td></tr>
<tr><td>10</td><td>Jake Allen (TRD)</td><td>34</td><td>3</td></tr>
<tr><td>11</td><td>Alexei Melnichuk (CCC)</td><td>46</td><td>3</td></tr>
<tr><td>12</td><td>Dustin Tokarski (LKE)</td><td>47</td><td>3</td></tr>
<tr><td>13</td><td>Filip Gustavsson (LVG)</td><td>67</td><td>3</td></tr>
<tr><td>14</td><td>Matt O'Connor (CHI)</td><td>15</td><td>2</td></tr>
<tr><td>15</td><td>Jakub Kovar (ADK)</td><td>19</td><td>2</td></tr>
<tr><td>16</td><td>Kaapo Kähkönen (WBS)</td><td>24</td><td>2</td></tr>
<tr><td>17</td><td>Marcus Hogberg (PEO)</td><td>30</td><td>2</td></tr>
<tr><td>18</td><td>Laurent Brossoit (JOL)</td><td>31</td><td>2</td></tr>
<tr><td>19</td><td>Lars Volden (PRO)</td><td>35</td><td>2</td></tr>
<tr><td>20</td><td>Alex Lyon (GRG)</td><td>37</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Anders Nilsson (SPR)</td><td>61</td><td>37</td></tr>
<tr><td>2</td><td>Chet Pickard (MIL)</td><td>66</td><td>37</td></tr>
<tr><td>3</td><td>Keith Petruzzelli (SAR)</td><td>71</td><td>37</td></tr>
<tr><td>4</td><td>Michael DiPietro (CTW)</td><td>65</td><td>36</td></tr>
<tr><td>5</td><td>Alex Nedeljkovic (RNO)</td><td>71</td><td>33</td></tr>
<tr><td>6</td><td>Filip Gustavsson (LVG)</td><td>67</td><td>32</td></tr>
<tr><td>7</td><td>Antoine Bibeau (HOU)</td><td>73</td><td>31</td></tr>
<tr><td>8</td><td>Veini Vehvilainen (ROB)</td><td>65</td><td>30</td></tr>
<tr><td>9</td><td>Colton Point (LAV)</td><td>54</td><td>29</td></tr>
<tr><td>10</td><td>Dustin Tokarski (LKE)</td><td>47</td><td>28</td></tr>
<tr><td>11</td><td>Daniel Vladar (MIH)</td><td>52</td><td>28</td></tr>
<tr><td>12</td><td>Devan Dubnyk (OKC)</td><td>56</td><td>28</td></tr>
<tr><td>13</td><td>Kyle Keyser (PAR)</td><td>64</td><td>28</td></tr>
<tr><td>14</td><td>Mason McDonald (CHI)</td><td>56</td><td>27</td></tr>
<tr><td>15</td><td>Ken Appleby (NOR)</td><td>54</td><td>26</td></tr>
<tr><td>16</td><td>Igor Bobkov (BNG)</td><td>61</td><td>26</td></tr>
<tr><td>17</td><td>Brendan Burke (RCH)</td><td>39</td><td>25</td></tr>
<tr><td>18</td><td>Antti Niemi (GAT)</td><td>46</td><td>24</td></tr>
<tr><td>19</td><td>Mareks Mitens (NUU)</td><td>53</td><td>24</td></tr>
<tr><td>20</td><td>Jake Allen (TRD)</td><td>34</td><td>23</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Kaapo Kähkönen (WBS)</td><td>16</td><td>1,000</td></tr>
<tr><td>2</td><td>Evan Fitzpatrick (LVG)</td><td>9</td><td>1,000</td></tr>
<tr><td>3</td><td>Olof Lindbom (MAN)</td><td>3</td><td>1,000</td></tr>
<tr><td>4</td><td>Samu Perhonen (OKC)</td><td>3</td><td>1,000</td></tr>
<tr><td>5</td><td>Michael Leighton (CHI)</td><td>3</td><td>1,000</td></tr>
<tr><td>6</td><td>Patrick Killeen (WBS)</td><td>3</td><td>1,000</td></tr>
<tr><td>7</td><td>Alexandre Bélanger (MIH)</td><td>3</td><td>1,000</td></tr>
<tr><td>8</td><td>Ken Appleby (NOR)</td><td>3</td><td>1,000</td></tr>
<tr><td>9</td><td>Antti Niemi (GAT)</td><td>2</td><td>1,000</td></tr>
<tr><td>10</td><td>Zane McIntyre (PRO)</td><td>2</td><td>1,000</td></tr>
<tr><td>11</td><td>Jhonas Enroth (LVG)</td><td>11</td><td>0,909</td></tr>
<tr><td>12</td><td>Mareks Mitens (NUU)</td><td>11</td><td>0,909</td></tr>
<tr><td>13</td><td>Jake Allen (TRD)</td><td>10</td><td>0,900</td></tr>
<tr><td>14</td><td>Jake Paterson (BRI)</td><td>17</td><td>0,882</td></tr>
<tr><td>15</td><td>Jared Coreau (RCH)</td><td>7</td><td>0,857</td></tr>
<tr><td>16</td><td>Keith Petruzzelli (SAR)</td><td>18</td><td>0,833</td></tr>
<tr><td>17</td><td>Igor Bobkov (BNG)</td><td>6</td><td>0,833</td></tr>
<tr><td>18</td><td>Daniel Vladar (MIH)</td><td>17</td><td>0,824</td></tr>
<tr><td>19</td><td>Michael Hutchinson (PRO)</td><td>22</td><td>0,818</td></tr>
<tr><td>20</td><td>Brendan Burke (RCH)</td><td>11</td><td>0,818</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Antoine Bibeau (HOU)</td><td>73</td><td>36</td></tr>
<tr><td>2</td><td>Alex Nedeljkovic (RNO)</td><td>71</td><td>30</td></tr>
<tr><td>3</td><td>Igor Bobkov (BNG)</td><td>61</td><td>28</td></tr>
<tr><td>4</td><td>Veini Vehvilainen (ROB)</td><td>65</td><td>28</td></tr>
<tr><td>5</td><td>Keith Petruzzelli (SAR)</td><td>71</td><td>27</td></tr>
<tr><td>6</td><td>Aaron Dell (ADK)</td><td>52</td><td>26</td></tr>
<tr><td>7</td><td>Filip Gustavsson (LVG)</td><td>67</td><td>26</td></tr>
<tr><td>8</td><td>Ilya Samsonov (TRD)</td><td>49</td><td>23</td></tr>
<tr><td>9</td><td>Kyle Keyser (PAR)</td><td>64</td><td>23</td></tr>
<tr><td>10</td><td>Mason McDonald (CHI)</td><td>56</td><td>22</td></tr>
<tr><td>11</td><td>Devan Dubnyk (OKC)</td><td>56</td><td>22</td></tr>
<tr><td>12</td><td>Ken Appleby (NOR)</td><td>54</td><td>21</td></tr>
<tr><td>13</td><td>Colton Point (LAV)</td><td>54</td><td>21</td></tr>
<tr><td>14</td><td>Jack Lafontaine (JOL)</td><td>34</td><td>20</td></tr>
<tr><td>15</td><td>Daniel Vladar (MIH)</td><td>52</td><td>20</td></tr>
<tr><td>16</td><td>Mareks Mitens (NUU)</td><td>53</td><td>20</td></tr>
<tr><td>17</td><td>Michael DiPietro (CTW)</td><td>65</td><td>20</td></tr>
<tr><td>18</td><td>Chet Pickard (MIL)</td><td>66</td><td>20</td></tr>
<tr><td>19</td><td>Alexei Melnichuk (CCC)</td><td>46</td><td>19</td></tr>
<tr><td>20</td><td>Jeremy Smith (ALB)</td><td>46</td><td>19</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
