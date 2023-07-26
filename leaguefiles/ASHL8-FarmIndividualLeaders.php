<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Farm Individual Leaders</title>
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
<b>Minimum Games Played: 44</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Kailer Yamamoto (OKC)</td><td>82</td><td>35</td></tr>
<tr><td>2</td><td>Morgan Klimchuk (OKC)</td><td>79</td><td>33</td></tr>
<tr><td>3</td><td>Kasperi Kapanen (ROB)</td><td>81</td><td>29</td></tr>
<tr><td>4</td><td>Daniel Carr (NOR)</td><td>82</td><td>29</td></tr>
<tr><td>5</td><td>Remi Elie (SPR)</td><td>82</td><td>29</td></tr>
<tr><td>6</td><td>Nathan Gerbe (CHA)</td><td>78</td><td>28</td></tr>
<tr><td>7</td><td>Ronalds Kenins (POR)</td><td>63</td><td>27</td></tr>
<tr><td>8</td><td>Robin Kovacs (LAV)</td><td>73</td><td>27</td></tr>
<tr><td>9</td><td>Anton Slepyshev (LKE)</td><td>76</td><td>27</td></tr>
<tr><td>10</td><td>Stephane Da Costa (ADK)</td><td>77</td><td>27</td></tr>
<tr><td>11</td><td>Jared McCann (BRI)</td><td>78</td><td>27</td></tr>
<tr><td>12</td><td>Denis Malgin (CTW)</td><td>82</td><td>27</td></tr>
<tr><td>13</td><td>Daniel Sprong (LAV)</td><td>83</td><td>27</td></tr>
<tr><td>14</td><td>Louick Marcotte (RCH)</td><td>70</td><td>26</td></tr>
<tr><td>15</td><td>Tyson Baillie (BRI)</td><td>74</td><td>26</td></tr>
<tr><td>16</td><td>Joseph Labate (CHI)</td><td>78</td><td>26</td></tr>
<tr><td>17</td><td>Jared Knight (OKC)</td><td>82</td><td>26</td></tr>
<tr><td>18</td><td>Christopher Clapperton (CHI)</td><td>82</td><td>26</td></tr>
<tr><td>19</td><td>Brandon Dubinsky (PEO)</td><td>62</td><td>25</td></tr>
<tr><td>20</td><td>Miles Wood (GAT)</td><td>64</td><td>25</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Ville Pokka (ROB)</td><td>69</td><td>57</td></tr>
<tr><td>2</td><td>Rasmus Andersson (RFD)</td><td>79</td><td>55</td></tr>
<tr><td>3</td><td>Cameron Gaunce (PRO)</td><td>81</td><td>51</td></tr>
<tr><td>4</td><td>Adam McQuaid (POR)</td><td>82</td><td>46</td></tr>
<tr><td>5</td><td>Kailer Yamamoto (OKC)</td><td>82</td><td>46</td></tr>
<tr><td>6</td><td>Brandon Burlon (NOR)</td><td>70</td><td>42</td></tr>
<tr><td>7</td><td>T.J. Brodie (POR)</td><td>77</td><td>42</td></tr>
<tr><td>8</td><td>Chris Bigras (CTW)</td><td>81</td><td>42</td></tr>
<tr><td>9</td><td>Nick Ebert (CHI)</td><td>64</td><td>41</td></tr>
<tr><td>10</td><td>Victor Mete (GAT)</td><td>73</td><td>41</td></tr>
<tr><td>11</td><td>Brett Cote (LKE)</td><td>74</td><td>41</td></tr>
<tr><td>12</td><td>Jack Dougherty (OKC)</td><td>78</td><td>41</td></tr>
<tr><td>13</td><td>Gregory Beron (GAT)</td><td>82</td><td>41</td></tr>
<tr><td>14</td><td>Maxime St-Cyr (RNO)</td><td>82</td><td>41</td></tr>
<tr><td>15</td><td>Dalton Prout (MIA)</td><td>73</td><td>40</td></tr>
<tr><td>16</td><td>Joakim Ryan (JOL)</td><td>78</td><td>40</td></tr>
<tr><td>17</td><td>Julian Melchiori (RFD)</td><td>80</td><td>40</td></tr>
<tr><td>18</td><td>Sami Lepisto (CHI)</td><td>74</td><td>39</td></tr>
<tr><td>19</td><td>Brian Dumoulin (WBS)</td><td>76</td><td>39</td></tr>
<tr><td>20</td><td>Kevin Connauton (HOU)</td><td>76</td><td>39</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Morgan Klimchuk (OKC)</td><td>79</td><td>294</td></tr>
<tr><td>2</td><td>Kailer Yamamoto (OKC)</td><td>82</td><td>291</td></tr>
<tr><td>3</td><td>Daniel Sprong (LAV)</td><td>83</td><td>248</td></tr>
<tr><td>4</td><td>Stephane Da Costa (ADK)</td><td>77</td><td>246</td></tr>
<tr><td>5</td><td>Pontus Aberg (NOR)</td><td>82</td><td>246</td></tr>
<tr><td>6</td><td>Anton Slepyshev (LKE)</td><td>76</td><td>245</td></tr>
<tr><td>7</td><td>Artturi Lehkonen (ROB)</td><td>80</td><td>245</td></tr>
<tr><td>8</td><td>Riley Nash (CHI)</td><td>82</td><td>245</td></tr>
<tr><td>9</td><td>Denis Malgin (CTW)</td><td>82</td><td>242</td></tr>
<tr><td>10</td><td>Nathan Gerbe (CHA)</td><td>78</td><td>240</td></tr>
<tr><td>11</td><td>Jared Knight (OKC)</td><td>82</td><td>240</td></tr>
<tr><td>12</td><td>Adam Helewka (RFD)</td><td>82</td><td>238</td></tr>
<tr><td>13</td><td>Jared McCann (BRI)</td><td>78</td><td>235</td></tr>
<tr><td>14</td><td>Erik Foley (RFD)</td><td>82</td><td>228</td></tr>
<tr><td>15</td><td>Andrej Nestrasil (GRG)</td><td>81</td><td>226</td></tr>
<tr><td>16</td><td>Martins Dzierkals (RNO)</td><td>82</td><td>225</td></tr>
<tr><td>17</td><td>Alex Chiasson (MIA)</td><td>82</td><td>223</td></tr>
<tr><td>18</td><td>Tyson Baillie (BRI)</td><td>74</td><td>222</td></tr>
<tr><td>19</td><td>Charles Hudon (ROB)</td><td>78</td><td>222</td></tr>
<tr><td>20</td><td>Daniel Carr (NOR)</td><td>82</td><td>221</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Vadim Vasjonkin (POR)</td><td>67</td><td>21,37%</td></tr>
<tr><td>2</td><td>Dany Heatley (BNG)</td><td>59</td><td>18,37%</td></tr>
<tr><td>3</td><td>Alexander Killorn (CHI)</td><td>57</td><td>15,86%</td></tr>
<tr><td>4</td><td>Alexander Barabanov (ROB)</td><td>82</td><td>15,43%</td></tr>
<tr><td>5</td><td>Jonathan Dahlen (BRI)</td><td>74</td><td>15,38%</td></tr>
<tr><td>6</td><td>Alex Burrows (TRD)</td><td>57</td><td>15,22%</td></tr>
<tr><td>7</td><td>Philippe Myers (RNO)</td><td>69</td><td>14,94%</td></tr>
<tr><td>8</td><td>Vitali Abramov (CHI)</td><td>78</td><td>14,81%</td></tr>
<tr><td>9</td><td>Ronalds Kenins (POR)</td><td>63</td><td>14,59%</td></tr>
<tr><td>10</td><td>Marcel Noebels (LKE)</td><td>59</td><td>14,57%</td></tr>
<tr><td>11</td><td>Vladimir Tkachev (PRO)</td><td>61</td><td>14,49%</td></tr>
<tr><td>12</td><td>Kellan Tochkin (CHI)</td><td>67</td><td>14,47%</td></tr>
<tr><td>13</td><td>Matt Read (ADK)</td><td>80</td><td>14,47%</td></tr>
<tr><td>14</td><td>Jesper Jensen (MIA)</td><td>70</td><td>14,43%</td></tr>
<tr><td>15</td><td>Andreas Johnsson (ALB)</td><td>49</td><td>14,41%</td></tr>
<tr><td>16</td><td>Kasperi Kapanen (ROB)</td><td>81</td><td>14,22%</td></tr>
<tr><td>17</td><td>Andreas Englund (LKE)</td><td>72</td><td>14,14%</td></tr>
<tr><td>18</td><td>Ian McCoshen (TRD)</td><td>82</td><td>14,04%</td></tr>
<tr><td>19</td><td>Remi Elie (SPR)</td><td>82</td><td>14,01%</td></tr>
<tr><td>20</td><td>Brandon Prust (WBS)</td><td>82</td><td>14,00%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Stephane Da Costa (ADK)</td><td>77</td><td>27-35-62</td></tr>
<tr><td>2</td><td>Anthony Cirelli (GAT)</td><td>79</td><td>25-34-59</td></tr>
<tr><td>3</td><td>Riley Nash (CHI)</td><td>82</td><td>20-39-59</td></tr>
<tr><td>4</td><td>Maxime St-Cyr (RNO)</td><td>82</td><td>18-41-59</td></tr>
<tr><td>5</td><td>Jared McCann (BRI)</td><td>78</td><td>27-30-57</td></tr>
<tr><td>6</td><td>Colin Greening (WBS)</td><td>80</td><td>20-37-57</td></tr>
<tr><td>7</td><td>Ryan Shannon (WBS)</td><td>81</td><td>20-37-57</td></tr>
<tr><td>8</td><td>Denis Malgin (CTW)</td><td>82</td><td>27-29-56</td></tr>
<tr><td>9</td><td>Carl Soderberg (NOR)</td><td>82</td><td>23-29-52</td></tr>
<tr><td>10</td><td>Brett Pollock (MIL)</td><td>78</td><td>19-33-52</td></tr>
<tr><td>11</td><td>Alex Barré-Boulet (LAV)</td><td>82</td><td>14-37-51</td></tr>
<tr><td>12</td><td>Gregory Beron (GAT)</td><td>82</td><td>10-41-51</td></tr>
<tr><td>13</td><td>Tyson Baillie (BRI)</td><td>74</td><td>26-24-50</td></tr>
<tr><td>14</td><td>Mark Olver (ROB)</td><td>82</td><td>17-33-50</td></tr>
<tr><td>15</td><td>Joseph Labate (CHI)</td><td>78</td><td>26-23-49</td></tr>
<tr><td>16</td><td>Bogdan Yakimov (OKC)</td><td>80</td><td>23-26-49</td></tr>
<tr><td>17</td><td>Miikka Salomäki (MIL)</td><td>82</td><td>21-28-49</td></tr>
<tr><td>18</td><td>Jan Kovar (LKE)</td><td>68</td><td>15-34-49</td></tr>
<tr><td>19</td><td>Andrej Nestrasil (GRG)</td><td>81</td><td>24-24-48</td></tr>
<tr><td>20</td><td>Luke Kunin (BRI)</td><td>82</td><td>22-26-48</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Morgan Klimchuk (OKC)</td><td>79</td><td>33-38-71</td></tr>
<tr><td>2</td><td>Kasperi Kapanen (ROB)</td><td>81</td><td>29-30-59</td></tr>
<tr><td>3</td><td>Nathan Gerbe (CHA)</td><td>78</td><td>28-31-59</td></tr>
<tr><td>4</td><td>Jared McCann (BRI)</td><td>78</td><td>27-30-57</td></tr>
<tr><td>5</td><td>Colin Greening (WBS)</td><td>80</td><td>20-37-57</td></tr>
<tr><td>6</td><td>Ryan Shannon (WBS)</td><td>81</td><td>20-37-57</td></tr>
<tr><td>7</td><td>Remi Elie (SPR)</td><td>82</td><td>29-27-56</td></tr>
<tr><td>8</td><td>Christopher Clapperton (CHI)</td><td>82</td><td>26-29-55</td></tr>
<tr><td>9</td><td>Wojtek Wolski (MIA)</td><td>82</td><td>22-33-55</td></tr>
<tr><td>10</td><td>Anton Slepyshev (LKE)</td><td>76</td><td>27-27-54</td></tr>
<tr><td>11</td><td>Miles Wood (GAT)</td><td>64</td><td>25-29-54</td></tr>
<tr><td>12</td><td>Carl Soderberg (NOR)</td><td>82</td><td>23-29-52</td></tr>
<tr><td>13</td><td>Erik Foley (RFD)</td><td>82</td><td>21-31-52</td></tr>
<tr><td>14</td><td>Brett Pollock (MIL)</td><td>78</td><td>19-33-52</td></tr>
<tr><td>15</td><td>Pontus Aberg (NOR)</td><td>82</td><td>22-29-51</td></tr>
<tr><td>16</td><td>Gregory Beron (GAT)</td><td>82</td><td>10-41-51</td></tr>
<tr><td>17</td><td>Daniel Carr (NOR)</td><td>82</td><td>29-20-49</td></tr>
<tr><td>18</td><td>Joseph Labate (CHI)</td><td>78</td><td>26-23-49</td></tr>
<tr><td>19</td><td>Adam Helewka (RFD)</td><td>82</td><td>23-26-49</td></tr>
<tr><td>20</td><td>Miikka Salomäki (MIL)</td><td>82</td><td>21-28-49</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Kailer Yamamoto (OKC)</td><td>82</td><td>35-46-81</td></tr>
<tr><td>2</td><td>Stephane Da Costa (ADK)</td><td>77</td><td>27-35-62</td></tr>
<tr><td>3</td><td>Kasperi Kapanen (ROB)</td><td>81</td><td>29-30-59</td></tr>
<tr><td>4</td><td>Nathan Gerbe (CHA)</td><td>78</td><td>28-31-59</td></tr>
<tr><td>5</td><td>Riley Nash (CHI)</td><td>82</td><td>20-39-59</td></tr>
<tr><td>6</td><td>Ryan Shannon (WBS)</td><td>81</td><td>20-37-57</td></tr>
<tr><td>7</td><td>Denis Malgin (CTW)</td><td>82</td><td>27-29-56</td></tr>
<tr><td>8</td><td>Wojtek Wolski (MIA)</td><td>82</td><td>22-33-55</td></tr>
<tr><td>9</td><td>Anton Slepyshev (LKE)</td><td>76</td><td>27-27-54</td></tr>
<tr><td>10</td><td>Miles Wood (GAT)</td><td>64</td><td>25-29-54</td></tr>
<tr><td>11</td><td>Daniel Sprong (LAV)</td><td>83</td><td>27-26-53</td></tr>
<tr><td>12</td><td>Jared Knight (OKC)</td><td>82</td><td>26-27-53</td></tr>
<tr><td>13</td><td>Justin Auger (RFD)</td><td>79</td><td>19-32-51</td></tr>
<tr><td>14</td><td>Gregory Beron (GAT)</td><td>82</td><td>10-41-51</td></tr>
<tr><td>15</td><td>Tyson Baillie (BRI)</td><td>74</td><td>26-24-50</td></tr>
<tr><td>16</td><td>Daniel Carr (NOR)</td><td>82</td><td>29-20-49</td></tr>
<tr><td>17</td><td>Miikka Salomäki (MIL)</td><td>82</td><td>21-28-49</td></tr>
<tr><td>18</td><td>Andrej Nestrasil (GRG)</td><td>81</td><td>24-24-48</td></tr>
<tr><td>19</td><td>Luke Kunin (BRI)</td><td>82</td><td>22-26-48</td></tr>
<tr><td>20</td><td>Nikita Scherbak (BRI)</td><td>82</td><td>18-30-48</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Ville Pokka (ROB)</td><td>69</td><td>9-57-66</td></tr>
<tr><td>2</td><td>Rasmus Andersson (RFD)</td><td>79</td><td>9-55-64</td></tr>
<tr><td>3</td><td>Ian McCoshen (TRD)</td><td>82</td><td>16-39-55</td></tr>
<tr><td>4</td><td>Jack Dougherty (OKC)</td><td>78</td><td>12-41-53</td></tr>
<tr><td>5</td><td>Adam McQuaid (POR)</td><td>82</td><td>7-46-53</td></tr>
<tr><td>6</td><td>Cameron Gaunce (PRO)</td><td>81</td><td>2-51-53</td></tr>
<tr><td>7</td><td>Brett Cote (LKE)</td><td>74</td><td>11-41-52</td></tr>
<tr><td>8</td><td>Chris Bigras (CTW)</td><td>81</td><td>10-42-52</td></tr>
<tr><td>9</td><td>Oliver Kylington (LAN)</td><td>79</td><td>13-38-51</td></tr>
<tr><td>10</td><td>Julian Melchiori (RFD)</td><td>80</td><td>11-40-51</td></tr>
<tr><td>11</td><td>Gregory Beron (GAT)</td><td>82</td><td>10-41-51</td></tr>
<tr><td>12</td><td>T.J. Brodie (POR)</td><td>77</td><td>9-42-51</td></tr>
<tr><td>13</td><td>Travis Dermott (BRI)</td><td>75</td><td>13-37-50</td></tr>
<tr><td>14</td><td>Mikko Vainonen (OKC)</td><td>82</td><td>11-39-50</td></tr>
<tr><td>15</td><td>Ethan Bear (CTW)</td><td>82</td><td>16-33-49</td></tr>
<tr><td>16</td><td>Jonathon Merrill (LAV)</td><td>74</td><td>13-36-49</td></tr>
<tr><td>17</td><td>Jan Rutta (PEO)</td><td>80</td><td>12-36-48</td></tr>
<tr><td>18</td><td>Joakim Ryan (JOL)</td><td>78</td><td>8-40-48</td></tr>
<tr><td>19</td><td>Nick Ebert (CHI)</td><td>64</td><td>7-41-48</td></tr>
<tr><td>20</td><td>Victor Mete (GAT)</td><td>73</td><td>7-41-48</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Kailer Yamamoto (OKC)</td><td>82</td><td>1,11</td></tr>
<tr><td>2</td><td>Gabriel Gagné (CHI)</td><td>58</td><td>0,92</td></tr>
<tr><td>3</td><td>Pierre-Luc Dubois (JOL)</td><td>53</td><td>0,91</td></tr>
<tr><td>4</td><td>Morgan Klimchuk (OKC)</td><td>79</td><td>0,89</td></tr>
<tr><td>5</td><td>Miles Wood (GAT)</td><td>64</td><td>0,89</td></tr>
<tr><td>6</td><td>Kasperi Kapanen (ROB)</td><td>81</td><td>0,88</td></tr>
<tr><td>7</td><td>Mike Vecchione (PEO)</td><td>68</td><td>0,87</td></tr>
<tr><td>8</td><td>Ales Hemsky (WBS)</td><td>46</td><td>0,87</td></tr>
<tr><td>9</td><td>Evan Rodrigues (LKE)</td><td>52</td><td>0,86</td></tr>
<tr><td>10</td><td>Frank Vatrano (PRO)</td><td>53</td><td>0,84</td></tr>
<tr><td>11</td><td>Andreas Johnsson (ALB)</td><td>49</td><td>0,84</td></tr>
<tr><td>12</td><td>Alexander Barabanov (ROB)</td><td>82</td><td>0,82</td></tr>
<tr><td>13</td><td>Remi Elie (SPR)</td><td>82</td><td>0,82</td></tr>
<tr><td>14</td><td>Christopher Clapperton (CHI)</td><td>82</td><td>0,82</td></tr>
<tr><td>15</td><td>Jan Kovar (LKE)</td><td>68</td><td>0,82</td></tr>
<tr><td>16</td><td>Jared Knight (OKC)</td><td>82</td><td>0,81</td></tr>
<tr><td>17</td><td>Jesper Bratt (CTW)</td><td>58</td><td>0,81</td></tr>
<tr><td>18</td><td>Ronalds Kenins (POR)</td><td>63</td><td>0,81</td></tr>
<tr><td>19</td><td>Mathieu Carle (PEO)</td><td>51</td><td>0,80</td></tr>
<tr><td>20</td><td>Anthony Cirelli (GAT)</td><td>79</td><td>0,80</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Blair Betts (BNG)</td><td>77</td><td>57,61%</td></tr>
<tr><td>2</td><td>Stephen Weiss (LAV)</td><td>53</td><td>57,48%</td></tr>
<tr><td>3</td><td>Antoine Vermette (JOL)</td><td>65</td><td>57,37%</td></tr>
<tr><td>4</td><td>Dominic Moore (ROB)</td><td>77</td><td>57,06%</td></tr>
<tr><td>5</td><td>Brent Raedeke (GRG)</td><td>73</td><td>56,76%</td></tr>
<tr><td>6</td><td>Brad Malone (LKE)</td><td>68</td><td>55,89%</td></tr>
<tr><td>7</td><td>Clarke MacArthur (TRD)</td><td>72</td><td>55,52%</td></tr>
<tr><td>8</td><td>Tim Brent (RNO)</td><td>59</td><td>54,89%</td></tr>
<tr><td>9</td><td>Maxim Lapierre (OKC)</td><td>78</td><td>54,80%</td></tr>
<tr><td>10</td><td>Josh Jooris (CHA)</td><td>72</td><td>54,79%</td></tr>
<tr><td>11</td><td>Brandon Dubinsky (PEO)</td><td>62</td><td>54,59%</td></tr>
<tr><td>12</td><td>Dustin Boyd (PEO)</td><td>82</td><td>54,43%</td></tr>
<tr><td>13</td><td>Christophe Lalancette (HOU)</td><td>76</td><td>54,41%</td></tr>
<tr><td>14</td><td>Johan Sundstrom (BRI)</td><td>82</td><td>54,36%</td></tr>
<tr><td>15</td><td>Mads Eller (TRD)</td><td>61</td><td>54,11%</td></tr>
<tr><td>16</td><td>Philip McRae (MIA)</td><td>76</td><td>54,04%</td></tr>
<tr><td>17</td><td>Riley Nash (CHI)</td><td>82</td><td>53,94%</td></tr>
<tr><td>18</td><td>Jamie Arniel (PRO)</td><td>82</td><td>53,88%</td></tr>
<tr><td>19</td><td>Mathieu Perreault (CHI)</td><td>68</td><td>53,86%</td></tr>
<tr><td>20</td><td>Adam Hall (WBS)</td><td>66</td><td>53,84%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Kailer Yamamoto (OKC)</td><td>82</td><td>32</td></tr>
<tr><td>2</td><td>Denis Malgin (CTW)</td><td>82</td><td>29</td></tr>
<tr><td>3</td><td>Maxim Lapierre (OKC)</td><td>78</td><td>27</td></tr>
<tr><td>4</td><td>Morgan Klimchuk (OKC)</td><td>79</td><td>27</td></tr>
<tr><td>5</td><td>Logan Brown (BRI)</td><td>73</td><td>26</td></tr>
<tr><td>6</td><td>Adam Pelech (CTW)</td><td>82</td><td>24</td></tr>
<tr><td>7</td><td>Victor Mete (GAT)</td><td>73</td><td>23</td></tr>
<tr><td>8</td><td>Alex Friesen (CHI)</td><td>77</td><td>23</td></tr>
<tr><td>9</td><td>Michael Chaput (SPR)</td><td>65</td><td>22</td></tr>
<tr><td>10</td><td>Derek Mathers (TRD)</td><td>69</td><td>21</td></tr>
<tr><td>11</td><td>Andreas Englund (LKE)</td><td>72</td><td>20</td></tr>
<tr><td>12</td><td>Brad Morrison (RFD)</td><td>78</td><td>20</td></tr>
<tr><td>13</td><td>Julian Melchiori (RFD)</td><td>80</td><td>20</td></tr>
<tr><td>14</td><td>Alexandre Grenier (CHI)</td><td>82</td><td>20</td></tr>
<tr><td>15</td><td>Lawson Crouse (TRD)</td><td>76</td><td>19</td></tr>
<tr><td>16</td><td>Matt Donovan (GAT)</td><td>61</td><td>18</td></tr>
<tr><td>17</td><td>Clarke MacArthur (TRD)</td><td>72</td><td>18</td></tr>
<tr><td>18</td><td>Jack Dougherty (OKC)</td><td>78</td><td>18</td></tr>
<tr><td>19</td><td>Rasmus Andersson (RFD)</td><td>79</td><td>18</td></tr>
<tr><td>20</td><td>Alex Lintuniemi (OKC)</td><td>79</td><td>18</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Oliver Lauridsen (ALB)</td><td>82</td><td>108</td></tr>
<tr><td>2</td><td>Alexei Emelin (PEO)</td><td>75</td><td>106</td></tr>
<tr><td>3</td><td>Derek Mathers (TRD)</td><td>69</td><td>105</td></tr>
<tr><td>4</td><td>Luke Witkowski (NOR)</td><td>82</td><td>103</td></tr>
<tr><td>5</td><td>Hunter Drew (CHI)</td><td>70</td><td>101</td></tr>
<tr><td>6</td><td>Michael McCarron (LAN)</td><td>64</td><td>94</td></tr>
<tr><td>7</td><td>Chaz Reddekopp (LAN)</td><td>74</td><td>92</td></tr>
<tr><td>8</td><td>Robert Hagg (GAT)</td><td>82</td><td>91</td></tr>
<tr><td>9</td><td>Stephen Johns (RFD)</td><td>69</td><td>85</td></tr>
<tr><td>10</td><td>Kenny Agostino (CHA)</td><td>81</td><td>84</td></tr>
<tr><td>11</td><td>Andrew O'Brien (RNO)</td><td>81</td><td>84</td></tr>
<tr><td>12</td><td>Jack Nevins (CHI)</td><td>82</td><td>83</td></tr>
<tr><td>13</td><td>Harrison Ruopp (RCH)</td><td>79</td><td>82</td></tr>
<tr><td>14</td><td>Mikko Vainonen (OKC)</td><td>82</td><td>82</td></tr>
<tr><td>15</td><td>Joe Finley (ROB)</td><td>66</td><td>80</td></tr>
<tr><td>16</td><td>Niklas Kronwall (WBS)</td><td>82</td><td>80</td></tr>
<tr><td>17</td><td>Riley Stadel (LVG)</td><td>74</td><td>79</td></tr>
<tr><td>18</td><td>Maxim Lapierre (OKC)</td><td>78</td><td>79</td></tr>
<tr><td>19</td><td>Ben Harpur (LAV)</td><td>80</td><td>79</td></tr>
<tr><td>20</td><td>Johnathan MacLeod (LAN)</td><td>61</td><td>78</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>T.J. Brodie (POR)</td><td>77</td><td>135</td></tr>
<tr><td>2</td><td>Brandon Carlo (CTW)</td><td>82</td><td>135</td></tr>
<tr><td>3</td><td>Robert Hagg (GAT)</td><td>82</td><td>131</td></tr>
<tr><td>4</td><td>Julian Melchiori (RFD)</td><td>80</td><td>126</td></tr>
<tr><td>5</td><td>Oliver Kylington (LAN)</td><td>79</td><td>120</td></tr>
<tr><td>6</td><td>Adam McQuaid (POR)</td><td>82</td><td>119</td></tr>
<tr><td>7</td><td>Joshua Jacobs (MIL)</td><td>82</td><td>119</td></tr>
<tr><td>8</td><td>Ben Harpur (LAV)</td><td>80</td><td>118</td></tr>
<tr><td>9</td><td>Dillon Fournier (CHI)</td><td>74</td><td>117</td></tr>
<tr><td>10</td><td>Cale Makar (BRI)</td><td>82</td><td>117</td></tr>
<tr><td>11</td><td>Julius Bergman (CHI)</td><td>79</td><td>114</td></tr>
<tr><td>12</td><td>Adam Pelech (CTW)</td><td>82</td><td>114</td></tr>
<tr><td>13</td><td>Fredrik Claesson (JOL)</td><td>82</td><td>112</td></tr>
<tr><td>14</td><td>Matthew Spencer (OKC)</td><td>76</td><td>111</td></tr>
<tr><td>15</td><td>Cameron Gaunce (PRO)</td><td>81</td><td>111</td></tr>
<tr><td>16</td><td>Johnathan MacLeod (LAN)</td><td>61</td><td>110</td></tr>
<tr><td>17</td><td>Vince Dunn (LAV)</td><td>81</td><td>110</td></tr>
<tr><td>18</td><td>Ian McCoshen (TRD)</td><td>82</td><td>110</td></tr>
<tr><td>19</td><td>Mark Barberio (CHA)</td><td>82</td><td>109</td></tr>
<tr><td>20</td><td>Mikko Vainonen (OKC)</td><td>82</td><td>109</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Morgan Klimchuk (OKC)</td><td>79</td><td>33-38-71</td></tr>
<tr><td>2</td><td>Ville Pokka (ROB)</td><td>69</td><td>9-57-66</td></tr>
<tr><td>3</td><td>Rasmus Andersson (RFD)</td><td>79</td><td>9-55-64</td></tr>
<tr><td>4</td><td>Kasperi Kapanen (ROB)</td><td>81</td><td>29-30-59</td></tr>
<tr><td>5</td><td>Anthony Cirelli (GAT)</td><td>79</td><td>25-34-59</td></tr>
<tr><td>6</td><td>Maxime St-Cyr (RNO)</td><td>82</td><td>18-41-59</td></tr>
<tr><td>7</td><td>Jared McCann (BRI)</td><td>78</td><td>27-30-57</td></tr>
<tr><td>8</td><td>Remi Elie (SPR)</td><td>82</td><td>29-27-56</td></tr>
<tr><td>9</td><td>Denis Malgin (CTW)</td><td>82</td><td>27-29-56</td></tr>
<tr><td>10</td><td>Christopher Clapperton (CHI)</td><td>82</td><td>26-29-55</td></tr>
<tr><td>11</td><td>Ian McCoshen (TRD)</td><td>82</td><td>16-39-55</td></tr>
<tr><td>12</td><td>Miles Wood (GAT)</td><td>64</td><td>25-29-54</td></tr>
<tr><td>13</td><td>Daniel Sprong (LAV)</td><td>83</td><td>27-26-53</td></tr>
<tr><td>14</td><td>Jared Knight (OKC)</td><td>82</td><td>26-27-53</td></tr>
<tr><td>15</td><td>Jack Dougherty (OKC)</td><td>78</td><td>12-41-53</td></tr>
<tr><td>16</td><td>Erik Foley (RFD)</td><td>82</td><td>21-31-52</td></tr>
<tr><td>17</td><td>Brett Cote (LKE)</td><td>74</td><td>11-41-52</td></tr>
<tr><td>18</td><td>Chris Bigras (CTW)</td><td>81</td><td>10-42-52</td></tr>
<tr><td>19</td><td>Pontus Aberg (NOR)</td><td>82</td><td>22-29-51</td></tr>
<tr><td>20</td><td>Justin Auger (RFD)</td><td>79</td><td>19-32-51</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Luke Witkowski (NOR)</td><td>82</td><td>260</td></tr>
<tr><td>2</td><td>Colin Greening (WBS)</td><td>80</td><td>230</td></tr>
<tr><td>3</td><td>Brendan Lemieux (OKC)</td><td>82</td><td>213</td></tr>
<tr><td>4</td><td>Anthony Camara (SAR)</td><td>59</td><td>212</td></tr>
<tr><td>5</td><td>A.J. Greer (RNO)</td><td>75</td><td>208</td></tr>
<tr><td>6</td><td>Alexei Emelin (PEO)</td><td>75</td><td>205</td></tr>
<tr><td>7</td><td>Jack Nevins (CHI)</td><td>82</td><td>202</td></tr>
<tr><td>8</td><td>Derek Dorsett (HOU)</td><td>76</td><td>195</td></tr>
<tr><td>9</td><td>Brandon Dubinsky (PEO)</td><td>62</td><td>189</td></tr>
<tr><td>10</td><td>Scott Hartnell (LAV)</td><td>82</td><td>188</td></tr>
<tr><td>11</td><td>Ben Harpur (LAV)</td><td>80</td><td>184</td></tr>
<tr><td>12</td><td>Derek Mathers (TRD)</td><td>69</td><td>179</td></tr>
<tr><td>13</td><td>Julius Bergman (CHI)</td><td>79</td><td>179</td></tr>
<tr><td>14</td><td>Alex Chiasson (MIA)</td><td>82</td><td>179</td></tr>
<tr><td>15</td><td>Michael McCarron (LAN)</td><td>64</td><td>174</td></tr>
<tr><td>16</td><td>Alexandre Grenier (CHI)</td><td>82</td><td>174</td></tr>
<tr><td>17</td><td>Michael Parks (ADK)</td><td>80</td><td>173</td></tr>
<tr><td>18</td><td>Maxim Lapierre (OKC)</td><td>78</td><td>172</td></tr>
<tr><td>19</td><td>Marcel Noebels (LKE)</td><td>59</td><td>171</td></tr>
<tr><td>20</td><td>Brandon Carlo (CTW)</td><td>82</td><td>171</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Madison Bowey (SPR)</td><td>73</td><td>11</td></tr>
<tr><td>2</td><td>Brandon Dubinsky (PEO)</td><td>62</td><td>10</td></tr>
<tr><td>3</td><td>Zach Hall (ALB)</td><td>66</td><td>10</td></tr>
<tr><td>4</td><td>Joel Armia (BNG)</td><td>66</td><td>10</td></tr>
<tr><td>5</td><td>Joseph Blandisi (POR)</td><td>68</td><td>10</td></tr>
<tr><td>6</td><td>Hudson Fasching (PRO)</td><td>75</td><td>10</td></tr>
<tr><td>7</td><td>Jordan Subban (GAT)</td><td>77</td><td>10</td></tr>
<tr><td>8</td><td>Ryan Sproul (HOU)</td><td>77</td><td>10</td></tr>
<tr><td>9</td><td>Haydn Fleury (LVG)</td><td>69</td><td>9</td></tr>
<tr><td>10</td><td>Oliver Kylington (LAN)</td><td>79</td><td>9</td></tr>
<tr><td>11</td><td>Morgan Klimchuk (OKC)</td><td>79</td><td>9</td></tr>
<tr><td>12</td><td>Chris Bigras (CTW)</td><td>81</td><td>9</td></tr>
<tr><td>13</td><td>Kasperi Kapanen (ROB)</td><td>81</td><td>9</td></tr>
<tr><td>14</td><td>Alexander Barabanov (ROB)</td><td>82</td><td>9</td></tr>
<tr><td>15</td><td>Julius Honka (RCH)</td><td>36</td><td>8</td></tr>
<tr><td>16</td><td>Nick Spaling (HOU)</td><td>67</td><td>8</td></tr>
<tr><td>17</td><td>Justin Florek (PRO)</td><td>68</td><td>8</td></tr>
<tr><td>18</td><td>Philippe Myers (RNO)</td><td>69</td><td>8</td></tr>
<tr><td>19</td><td>Dillon Fournier (CHI)</td><td>74</td><td>8</td></tr>
<tr><td>20</td><td>Zach Trotman (PRO)</td><td>74</td><td>8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Jayce Hawryluk (LVG)</td><td>51</td><td>2</td></tr>
<tr><td>2</td><td>Frank Vatrano (PRO)</td><td>53</td><td>2</td></tr>
<tr><td>3</td><td>Benoit Pouliot (HOU)</td><td>54</td><td>2</td></tr>
<tr><td>4</td><td>Nick Ebert (CHI)</td><td>64</td><td>2</td></tr>
<tr><td>5</td><td>Peter Holland (GRG)</td><td>76</td><td>2</td></tr>
<tr><td>6</td><td>Greg McKegg (TRD)</td><td>76</td><td>2</td></tr>
<tr><td>7</td><td>Brandon Prust (WBS)</td><td>82</td><td>2</td></tr>
<tr><td>8</td><td>Mikhail Grabovski (MIA)</td><td>82</td><td>2</td></tr>
<tr><td>9</td><td>Tyler Pitlick (OKC)</td><td>82</td><td>2</td></tr>
<tr><td>10</td><td>Matt Halischuk (MAN)</td><td>14</td><td>1</td></tr>
<tr><td>11</td><td>Jake Virtanen (CHI)</td><td>20</td><td>1</td></tr>
<tr><td>12</td><td>Travis Brown (ADK)</td><td>26</td><td>1</td></tr>
<tr><td>13</td><td>Jerry D'Amigo (GAT)</td><td>26</td><td>1</td></tr>
<tr><td>14</td><td>Slater Koekkoek (SPR)</td><td>30</td><td>1</td></tr>
<tr><td>15</td><td>Kevin Fiala (GAT)</td><td>32</td><td>1</td></tr>
<tr><td>16</td><td>Gustav Olofsson (BNG)</td><td>36</td><td>1</td></tr>
<tr><td>17</td><td>Zach Hyman (NOR)</td><td>44</td><td>1</td></tr>
<tr><td>18</td><td>Andrew Calof (LVG)</td><td>46</td><td>1</td></tr>
<tr><td>19</td><td>Evan Rodrigues (LKE)</td><td>52</td><td>1</td></tr>
<tr><td>20</td><td>Nick Palmieri (LVG)</td><td>56</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Ryan Tesink (TRD)</td><td>71</td><td>7</td></tr>
<tr><td>2</td><td>Tyson Baillie (BRI)</td><td>74</td><td>7</td></tr>
<tr><td>3</td><td>Charles Hudon (ROB)</td><td>78</td><td>7</td></tr>
<tr><td>4</td><td>Brad Morrison (RFD)</td><td>78</td><td>7</td></tr>
<tr><td>5</td><td>Morgan Klimchuk (OKC)</td><td>79</td><td>7</td></tr>
<tr><td>6</td><td>Kasperi Kapanen (ROB)</td><td>81</td><td>7</td></tr>
<tr><td>7</td><td>Brandon Prust (WBS)</td><td>82</td><td>7</td></tr>
<tr><td>8</td><td>Jared Knight (OKC)</td><td>82</td><td>7</td></tr>
<tr><td>9</td><td>Cooper Marody (CHI)</td><td>52</td><td>6</td></tr>
<tr><td>10</td><td>Marcel Noebels (LKE)</td><td>59</td><td>6</td></tr>
<tr><td>11</td><td>Brandon Dubinsky (PEO)</td><td>62</td><td>6</td></tr>
<tr><td>12</td><td>Kirill Petrov (MIA)</td><td>67</td><td>6</td></tr>
<tr><td>13</td><td>Jiri Hudler (MIL)</td><td>71</td><td>6</td></tr>
<tr><td>14</td><td>Anton Slepyshev (LKE)</td><td>76</td><td>6</td></tr>
<tr><td>15</td><td>Greg McKegg (TRD)</td><td>76</td><td>6</td></tr>
<tr><td>16</td><td>Jared McCann (BRI)</td><td>78</td><td>6</td></tr>
<tr><td>17</td><td>Jan Rutta (PEO)</td><td>80</td><td>6</td></tr>
<tr><td>18</td><td>Carl Klingberg (HOU)</td><td>82</td><td>6</td></tr>
<tr><td>19</td><td>Kailer Yamamoto (OKC)</td><td>82</td><td>6</td></tr>
<tr><td>20</td><td>Johan Sundstrom (BRI)</td><td>82</td><td>6</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Pontus Aberg (NOR)</td><td>82</td><td>5</td></tr>
<tr><td>2</td><td>Daniel Sprong (LAV)</td><td>83</td><td>5</td></tr>
<tr><td>3</td><td>Brandon Dubinsky (PEO)</td><td>62</td><td>4</td></tr>
<tr><td>4</td><td>Justin Florek (PRO)</td><td>68</td><td>4</td></tr>
<tr><td>5</td><td>Zach Hyman (NOR)</td><td>44</td><td>3</td></tr>
<tr><td>6</td><td>Jesper Bratt (CTW)</td><td>58</td><td>3</td></tr>
<tr><td>7</td><td>Vladislav Kamenev (MAN)</td><td>59</td><td>3</td></tr>
<tr><td>8</td><td>John Hayden (LAN)</td><td>63</td><td>3</td></tr>
<tr><td>9</td><td>T.J. Tynan (SPR)</td><td>64</td><td>3</td></tr>
<tr><td>10</td><td>Zach Hall (ALB)</td><td>66</td><td>3</td></tr>
<tr><td>11</td><td>Christopher Higgins (CHI)</td><td>70</td><td>3</td></tr>
<tr><td>12</td><td>Lukas Sutter (ALB)</td><td>71</td><td>3</td></tr>
<tr><td>13</td><td>Clarke MacArthur (TRD)</td><td>72</td><td>3</td></tr>
<tr><td>14</td><td>Peter Holland (GRG)</td><td>76</td><td>3</td></tr>
<tr><td>15</td><td>Valentin Zykov (OKC)</td><td>78</td><td>3</td></tr>
<tr><td>16</td><td>Tomas Hyka (SAR)</td><td>78</td><td>3</td></tr>
<tr><td>17</td><td>Kenny Agostino (CHA)</td><td>81</td><td>3</td></tr>
<tr><td>18</td><td>Cody Almond (HOU)</td><td>82</td><td>3</td></tr>
<tr><td>19</td><td>Jamie Arniel (PRO)</td><td>82</td><td>3</td></tr>
<tr><td>20</td><td>Mirko Hoefflin (RFD)</td><td>82</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Evan Rodrigues (LKE)</td><td>52</td><td>2</td></tr>
<tr><td>2</td><td>Eric Gelinas (WBS)</td><td>64</td><td>2</td></tr>
<tr><td>3</td><td>Stanislav Galiev (ROB)</td><td>66</td><td>2</td></tr>
<tr><td>4</td><td>Brad Malone (LKE)</td><td>68</td><td>2</td></tr>
<tr><td>5</td><td>Eric Wellwood (RNO)</td><td>11</td><td>1</td></tr>
<tr><td>6</td><td>Gabriel Dumont (ADK)</td><td>12</td><td>1</td></tr>
<tr><td>7</td><td>Anton Lander (LKE)</td><td>13</td><td>1</td></tr>
<tr><td>8</td><td>Thomas Chabot (GAT)</td><td>27</td><td>1</td></tr>
<tr><td>9</td><td>Slater Koekkoek (SPR)</td><td>30</td><td>1</td></tr>
<tr><td>10</td><td>Kevin Fiala (GAT)</td><td>32</td><td>1</td></tr>
<tr><td>11</td><td>Broc Little (BRI)</td><td>41</td><td>1</td></tr>
<tr><td>12</td><td>Derek Joslin (BNG)</td><td>42</td><td>1</td></tr>
<tr><td>13</td><td>Matthew Tkachuk (LAV)</td><td>43</td><td>1</td></tr>
<tr><td>14</td><td>Alexander Sulzer (SAR)</td><td>44</td><td>1</td></tr>
<tr><td>15</td><td>Ales Hemsky (WBS)</td><td>46</td><td>1</td></tr>
<tr><td>16</td><td>Jeff Schultz (BNG)</td><td>50</td><td>1</td></tr>
<tr><td>17</td><td>Frank Vatrano (PRO)</td><td>53</td><td>1</td></tr>
<tr><td>18</td><td>Benoit Pouliot (HOU)</td><td>54</td><td>1</td></tr>
<tr><td>19</td><td>Curtis Glencross (ALB)</td><td>55</td><td>1</td></tr>
<tr><td>20</td><td>Spencer Machacek (ADK)</td><td>55</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Luke Witkowski (NOR)</td><td>82</td><td>1 821</td></tr>
<tr><td>2</td><td>Oliver Kylington (LAN)</td><td>79</td><td>1 812</td></tr>
<tr><td>3</td><td>Cameron Gaunce (PRO)</td><td>81</td><td>1 811</td></tr>
<tr><td>4</td><td>Vince Dunn (LAV)</td><td>81</td><td>1 811</td></tr>
<tr><td>5</td><td>Jan Rutta (PEO)</td><td>80</td><td>1 810</td></tr>
<tr><td>6</td><td>Gregory Beron (GAT)</td><td>82</td><td>1 803</td></tr>
<tr><td>7</td><td>Ian McCoshen (TRD)</td><td>82</td><td>1 781</td></tr>
<tr><td>8</td><td>Rasmus Andersson (RFD)</td><td>79</td><td>1 764</td></tr>
<tr><td>9</td><td>Jack Dougherty (OKC)</td><td>78</td><td>1 732</td></tr>
<tr><td>10</td><td>Mikko Vainonen (OKC)</td><td>82</td><td>1 730</td></tr>
<tr><td>11</td><td>Joshua Jacobs (MIL)</td><td>82</td><td>1 722</td></tr>
<tr><td>12</td><td>Enrico Miglioranzi (RFD)</td><td>79</td><td>1 722</td></tr>
<tr><td>13</td><td>Stephane Da Costa (ADK)</td><td>77</td><td>1 710</td></tr>
<tr><td>14</td><td>Cale Makar (BRI)</td><td>82</td><td>1 702</td></tr>
<tr><td>15</td><td>Julian Melchiori (RFD)</td><td>80</td><td>1 701</td></tr>
<tr><td>16</td><td>Robert Hagg (GAT)</td><td>82</td><td>1 699</td></tr>
<tr><td>17</td><td>Adam Helewka (RFD)</td><td>82</td><td>1 681</td></tr>
<tr><td>18</td><td>Ville Pokka (ROB)</td><td>69</td><td>1 681</td></tr>
<tr><td>19</td><td>Chris Bigras (CTW)</td><td>81</td><td>1 679</td></tr>
<tr><td>20</td><td>Ryan Shannon (WBS)</td><td>81</td><td>1 673</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Laurin Braun (GAT)</td><td>76</td><td>2</td></tr>
<tr><td>2</td><td>Alexander Barabanov (ROB)</td><td>82</td><td>2</td></tr>
<tr><td>3</td><td>Kailer Yamamoto (OKC)</td><td>82</td><td>2</td></tr>
<tr><td>4</td><td>Riley Sheahan (PRO)</td><td>11</td><td>1</td></tr>
<tr><td>5</td><td>Ales Hemsky (WBS)</td><td>46</td><td>1</td></tr>
<tr><td>6</td><td>Cam Barker (CHI)</td><td>52</td><td>1</td></tr>
<tr><td>7</td><td>Pierre-Luc Dubois (JOL)</td><td>53</td><td>1</td></tr>
<tr><td>8</td><td>Alex Burrows (TRD)</td><td>57</td><td>1</td></tr>
<tr><td>9</td><td>Anthony Camara (SAR)</td><td>59</td><td>1</td></tr>
<tr><td>10</td><td>Ronalds Kenins (POR)</td><td>63</td><td>1</td></tr>
<tr><td>11</td><td>Vadim Vasjonkin (POR)</td><td>67</td><td>1</td></tr>
<tr><td>12</td><td>Jan Kovar (LKE)</td><td>68</td><td>1</td></tr>
<tr><td>13</td><td>Justin Florek (PRO)</td><td>68</td><td>1</td></tr>
<tr><td>14</td><td>Scott Glennie (ALB)</td><td>73</td><td>1</td></tr>
<tr><td>15</td><td>Jonathan Dahlen (BRI)</td><td>74</td><td>1</td></tr>
<tr><td>16</td><td>Anton Slepyshev (LKE)</td><td>76</td><td>1</td></tr>
<tr><td>17</td><td>Shane Prince (GRG)</td><td>76</td><td>1</td></tr>
<tr><td>18</td><td>Jared McCann (BRI)</td><td>78</td><td>1</td></tr>
<tr><td>19</td><td>Darren Archibald (CHA)</td><td>78</td><td>1</td></tr>
<tr><td>20</td><td>Simon Tremblay (PRO)</td><td>78</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Matthew Highmore (RCH)</td><td>77</td><td>4</td></tr>
<tr><td>2</td><td>Taylor Leier (LKE)</td><td>36</td><td>3</td></tr>
<tr><td>3</td><td>Artturi Lehkonen (ROB)</td><td>80</td><td>3</td></tr>
<tr><td>4</td><td>David Ullstrom (RFD)</td><td>35</td><td>2</td></tr>
<tr><td>5</td><td>Brett MacLean (CHI)</td><td>50</td><td>2</td></tr>
<tr><td>6</td><td>Pavel Zacha (LAN)</td><td>55</td><td>2</td></tr>
<tr><td>7</td><td>Conner Bleackley (LVG)</td><td>61</td><td>2</td></tr>
<tr><td>8</td><td>Mats Zuccarello (CHI)</td><td>70</td><td>2</td></tr>
<tr><td>9</td><td>Calle Jarnkrok (BNG)</td><td>72</td><td>2</td></tr>
<tr><td>10</td><td>Zach Trotman (PRO)</td><td>74</td><td>2</td></tr>
<tr><td>11</td><td>Greg McKegg (TRD)</td><td>76</td><td>2</td></tr>
<tr><td>12</td><td>Jared McCann (BRI)</td><td>78</td><td>2</td></tr>
<tr><td>13</td><td>Riley Nash (CHI)</td><td>82</td><td>2</td></tr>
<tr><td>14</td><td>Ethan Bear (CTW)</td><td>82</td><td>2</td></tr>
<tr><td>15</td><td>J.T. Brown (CHI)</td><td>10</td><td>1</td></tr>
<tr><td>16</td><td>Travis Konecny (CTW)</td><td>15</td><td>1</td></tr>
<tr><td>17</td><td>Jason Garrison (NOR)</td><td>21</td><td>1</td></tr>
<tr><td>18</td><td>Troy Brouwer (MIL)</td><td>33</td><td>1</td></tr>
<tr><td>19</td><td>Matthew Bradley (LAN)</td><td>33</td><td>1</td></tr>
<tr><td>20</td><td>Tomas Vincour (GRG)</td><td>36</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Anton Stralman (WBS)</td><td>14</td><td>5</td></tr>
<tr><td>2</td><td>Justin Holl (RFD)</td><td>61</td><td>5</td></tr>
<tr><td>3</td><td>Matthew Bradley (LAN)</td><td>33</td><td>4</td></tr>
<tr><td>4</td><td>Taylor Leier (LKE)</td><td>36</td><td>4</td></tr>
<tr><td>5</td><td>Paul Byron (HOU)</td><td>63</td><td>4</td></tr>
<tr><td>6</td><td>Max Hermens (POR)</td><td>64</td><td>4</td></tr>
<tr><td>7</td><td>Calle Jarnkrok (BNG)</td><td>72</td><td>4</td></tr>
<tr><td>8</td><td>Brett Cote (LKE)</td><td>74</td><td>4</td></tr>
<tr><td>9</td><td>Matthew Highmore (RCH)</td><td>77</td><td>4</td></tr>
<tr><td>10</td><td>Daniel Sorvik (RCH)</td><td>79</td><td>4</td></tr>
<tr><td>11</td><td>Connor Clifton (MIA)</td><td>80</td><td>4</td></tr>
<tr><td>12</td><td>Jackson Houck (ALB)</td><td>81</td><td>4</td></tr>
<tr><td>13</td><td>Aaron Palushaj (NOR)</td><td>82</td><td>4</td></tr>
<tr><td>14</td><td>Carl Klingberg (HOU)</td><td>82</td><td>4</td></tr>
<tr><td>15</td><td>Mirko Hoefflin (RFD)</td><td>82</td><td>4</td></tr>
<tr><td>16</td><td>Travis Konecny (CTW)</td><td>15</td><td>3</td></tr>
<tr><td>17</td><td>Gustav Nyquist (RFD)</td><td>18</td><td>3</td></tr>
<tr><td>18</td><td>Jerry D'Amigo (GAT)</td><td>26</td><td>3</td></tr>
<tr><td>19</td><td>Alex Grant (PEO)</td><td>67</td><td>3</td></tr>
<tr><td>20</td><td>Samuel Blais (TRD)</td><td>74</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Ryan Shannon (WBS)</td><td>81</td><td>206</td></tr>
<tr><td>2</td><td>Brandon Dubinsky (PEO)</td><td>62</td><td>198</td></tr>
<tr><td>3</td><td>Maxim Lapierre (OKC)</td><td>78</td><td>176</td></tr>
<tr><td>4</td><td>Anthony Cirelli (GAT)</td><td>79</td><td>175</td></tr>
<tr><td>5</td><td>Maxime St-Cyr (RNO)</td><td>82</td><td>171</td></tr>
<tr><td>6</td><td>Peter Holland (GRG)</td><td>76</td><td>166</td></tr>
<tr><td>7</td><td>Miikka Salomäki (MIL)</td><td>82</td><td>164</td></tr>
<tr><td>8</td><td>Josh Jooris (CHA)</td><td>72</td><td>161</td></tr>
<tr><td>9</td><td>Brad Morrison (RFD)</td><td>78</td><td>160</td></tr>
<tr><td>10</td><td>Mark Olver (ROB)</td><td>82</td><td>160</td></tr>
<tr><td>11</td><td>Brett Pollock (MIL)</td><td>78</td><td>158</td></tr>
<tr><td>12</td><td>Antoine Vermette (JOL)</td><td>65</td><td>157</td></tr>
<tr><td>13</td><td>Oscar Lindberg (SAR)</td><td>82</td><td>157</td></tr>
<tr><td>14</td><td>Carl Soderberg (NOR)</td><td>82</td><td>156</td></tr>
<tr><td>15</td><td>Michael Chaput (SPR)</td><td>65</td><td>154</td></tr>
<tr><td>16</td><td>Zac Dalpe (CHA)</td><td>59</td><td>151</td></tr>
<tr><td>17</td><td>Shane Prince (GRG)</td><td>76</td><td>150</td></tr>
<tr><td>18</td><td>Colin Blackwell (MAN)</td><td>82</td><td>150</td></tr>
<tr><td>19</td><td>Alex Barré-Boulet (LAV)</td><td>82</td><td>148</td></tr>
<tr><td>20</td><td>Riley Nash (CHI)</td><td>82</td><td>148</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Jussi Jokinen (HOU)</td><td>59</td><td>4</td></tr>
<tr><td>2</td><td>David Jones (WBS)</td><td>65</td><td>4</td></tr>
<tr><td>3</td><td>Angelo Miceli (MAN)</td><td>67</td><td>4</td></tr>
<tr><td>4</td><td>Mathieu Perreault (CHI)</td><td>68</td><td>4</td></tr>
<tr><td>5</td><td>Christophe Lalancette (HOU)</td><td>76</td><td>4</td></tr>
<tr><td>6</td><td>Daniel Bernhardt (LAN)</td><td>79</td><td>4</td></tr>
<tr><td>7</td><td>Jared Knight (OKC)</td><td>82</td><td>4</td></tr>
<tr><td>8</td><td>Zac Dalpe (CHA)</td><td>59</td><td>3</td></tr>
<tr><td>9</td><td>Blake Comeau (MIL)</td><td>68</td><td>3</td></tr>
<tr><td>10</td><td>Theodor Blueger (LAN)</td><td>72</td><td>3</td></tr>
<tr><td>11</td><td>Julien Nantel (RNO)</td><td>72</td><td>3</td></tr>
<tr><td>12</td><td>Trevor Cox (MIA)</td><td>74</td><td>3</td></tr>
<tr><td>13</td><td>Peter Holland (GRG)</td><td>76</td><td>3</td></tr>
<tr><td>14</td><td>Brenden Morrow (ALB)</td><td>79</td><td>3</td></tr>
<tr><td>15</td><td>Reid Boucher (RNO)</td><td>31</td><td>2</td></tr>
<tr><td>16</td><td>Max Görtz (MAN)</td><td>42</td><td>2</td></tr>
<tr><td>17</td><td>Philip Lane (CHI)</td><td>43</td><td>2</td></tr>
<tr><td>18</td><td>Troy Terry (LAV)</td><td>45</td><td>2</td></tr>
<tr><td>19</td><td>David Booth (PEO)</td><td>48</td><td>2</td></tr>
<tr><td>20</td><td>Brett MacLean (CHI)</td><td>50</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Michael McCarron (LAN)</td><td>64</td><td>3</td></tr>
<tr><td>2</td><td>Sébastien Piché (RNO)</td><td>68</td><td>3</td></tr>
<tr><td>3</td><td>Riley Stadel (LVG)</td><td>74</td><td>3</td></tr>
<tr><td>4</td><td>Ryan Lindgren (JOL)</td><td>49</td><td>2</td></tr>
<tr><td>5</td><td>Tyler Lewington (ADK)</td><td>53</td><td>2</td></tr>
<tr><td>6</td><td>Michael Ferland (JOL)</td><td>58</td><td>2</td></tr>
<tr><td>7</td><td>Anthony Camara (SAR)</td><td>59</td><td>2</td></tr>
<tr><td>8</td><td>Miles Wood (GAT)</td><td>64</td><td>2</td></tr>
<tr><td>9</td><td>Dale Weise (GRG)</td><td>65</td><td>2</td></tr>
<tr><td>10</td><td>Derek Dorsett (HOU)</td><td>76</td><td>2</td></tr>
<tr><td>11</td><td>Brian Dumoulin (WBS)</td><td>76</td><td>2</td></tr>
<tr><td>12</td><td>Kevin Connauton (HOU)</td><td>76</td><td>2</td></tr>
<tr><td>13</td><td>Nicolas Aubé-Kubel (NOR)</td><td>82</td><td>2</td></tr>
<tr><td>14</td><td>Bryan Bickell (TRD)</td><td>20</td><td>1</td></tr>
<tr><td>15</td><td>Jason Garrison (NOR)</td><td>21</td><td>1</td></tr>
<tr><td>16</td><td>Alexandre R.Picard (MIL)</td><td>22</td><td>1</td></tr>
<tr><td>17</td><td>Steven Santini (ALB)</td><td>25</td><td>1</td></tr>
<tr><td>18</td><td>Nate Thompson (BRI)</td><td>33</td><td>1</td></tr>
<tr><td>19</td><td>Mark Fayne (ALB)</td><td>39</td><td>1</td></tr>
<tr><td>20</td><td>Nils Lundkvist (LAV)</td><td>42</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Kevin Connauton (HOU)</td><td>76</td><td>2</td></tr>
<tr><td>2</td><td>Alexandre R.Picard (MIL)</td><td>22</td><td>1</td></tr>
<tr><td>3</td><td>Nils Lundkvist (LAV)</td><td>42</td><td>1</td></tr>
<tr><td>4</td><td>Emil Bemstrom (ADK)</td><td>45</td><td>1</td></tr>
<tr><td>5</td><td>Peter Regin (PEO)</td><td>49</td><td>1</td></tr>
<tr><td>6</td><td>Tyler Lewington (ADK)</td><td>53</td><td>1</td></tr>
<tr><td>7</td><td>Curtis Glencross (ALB)</td><td>55</td><td>1</td></tr>
<tr><td>8</td><td>Michael Ferland (JOL)</td><td>58</td><td>1</td></tr>
<tr><td>9</td><td>Adam Janosik (NOR)</td><td>59</td><td>1</td></tr>
<tr><td>10</td><td>Anthony Camara (SAR)</td><td>59</td><td>1</td></tr>
<tr><td>11</td><td>Miles Wood (GAT)</td><td>64</td><td>1</td></tr>
<tr><td>12</td><td>Dale Weise (GRG)</td><td>65</td><td>1</td></tr>
<tr><td>13</td><td>Kevin Marshall (CHA)</td><td>65</td><td>1</td></tr>
<tr><td>14</td><td>Alex Grant (PEO)</td><td>67</td><td>1</td></tr>
<tr><td>15</td><td>Connor Crisp (CHI)</td><td>67</td><td>1</td></tr>
<tr><td>16</td><td>Teemu Eronen (ADK)</td><td>69</td><td>1</td></tr>
<tr><td>17</td><td>Riley Stadel (LVG)</td><td>74</td><td>1</td></tr>
<tr><td>18</td><td>Brian Dumoulin (WBS)</td><td>76</td><td>1</td></tr>
<tr><td>19</td><td>Darroll Powe (CHA)</td><td>79</td><td>1</td></tr>
<tr><td>20</td><td>Greg Pateryn (ADK)</td><td>79</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Eddie Lack (CHI)</td><td>53</td><td>0,916</td></tr>
<tr><td>2</td><td>Marek Mazanec (ADK)</td><td>61</td><td>0,914</td></tr>
<tr><td>3</td><td>Al Montoya (SAR)</td><td>56</td><td>0,913</td></tr>
<tr><td>4</td><td>Alex Nedeljkovic (RNO)</td><td>55</td><td>0,913</td></tr>
<tr><td>5</td><td>Mackenzie Blackwood (RFD)</td><td>62</td><td>0,912</td></tr>
<tr><td>6</td><td>Spencer Martin (SPR)</td><td>58</td><td>0,911</td></tr>
<tr><td>7</td><td>Anthony Stolarz (CTW)</td><td>59</td><td>0,910</td></tr>
<tr><td>8</td><td>Igor Bobkov (BNG)</td><td>55</td><td>0,909</td></tr>
<tr><td>9</td><td>Mike Murphy (CHA)</td><td>50</td><td>0,909</td></tr>
<tr><td>10</td><td>Jaroslav Janus (NOR)</td><td>59</td><td>0,908</td></tr>
<tr><td>11</td><td>Jonas Gustavsson (MIL)</td><td>53</td><td>0,908</td></tr>
<tr><td>12</td><td>Jack Lafontaine (JOL)</td><td>51</td><td>0,907</td></tr>
<tr><td>13</td><td>Alex Lyon (WBS)</td><td>55</td><td>0,906</td></tr>
<tr><td>14</td><td>Ivan Nalimov (CHI)</td><td>60</td><td>0,906</td></tr>
<tr><td>15</td><td>Michael Hutchinson (PRO)</td><td>61</td><td>0,905</td></tr>
<tr><td>16</td><td>Peter Delmas (LKE)</td><td>55</td><td>0,904</td></tr>
<tr><td>17</td><td>Christopher Gibson (GAT)</td><td>49</td><td>0,903</td></tr>
<tr><td>18</td><td>Chet Pickard (MIA)</td><td>65</td><td>0,903</td></tr>
<tr><td>19</td><td>Justin Peters (HOU)</td><td>71</td><td>0,900</td></tr>
<tr><td>20</td><td>Emil Garipov (GRG)</td><td>50</td><td>0,898</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Alex Lyon (WBS)</td><td>55</td><td>2,60</td></tr>
<tr><td>2</td><td>Eddie Lack (CHI)</td><td>53</td><td>2,60</td></tr>
<tr><td>3</td><td>Marek Mazanec (ADK)</td><td>61</td><td>2,64</td></tr>
<tr><td>4</td><td>Anthony Stolarz (CTW)</td><td>59</td><td>2,66</td></tr>
<tr><td>5</td><td>Spencer Martin (SPR)</td><td>58</td><td>2,66</td></tr>
<tr><td>6</td><td>Al Montoya (SAR)</td><td>56</td><td>2,72</td></tr>
<tr><td>7</td><td>Mike Murphy (CHA)</td><td>50</td><td>2,79</td></tr>
<tr><td>8</td><td>Mackenzie Blackwood (RFD)</td><td>62</td><td>2,81</td></tr>
<tr><td>9</td><td>Alex Nedeljkovic (RNO)</td><td>55</td><td>2,82</td></tr>
<tr><td>10</td><td>Peter Delmas (LKE)</td><td>55</td><td>2,84</td></tr>
<tr><td>11</td><td>Jaroslav Janus (NOR)</td><td>59</td><td>2,85</td></tr>
<tr><td>12</td><td>Igor Bobkov (BNG)</td><td>55</td><td>2,86</td></tr>
<tr><td>13</td><td>Chet Pickard (MIA)</td><td>65</td><td>2,94</td></tr>
<tr><td>14</td><td>Jack Lafontaine (JOL)</td><td>51</td><td>2,94</td></tr>
<tr><td>15</td><td>Jonas Gustavsson (MIL)</td><td>53</td><td>2,95</td></tr>
<tr><td>16</td><td>Michael Hutchinson (PRO)</td><td>61</td><td>2,97</td></tr>
<tr><td>17</td><td>Justin Peters (HOU)</td><td>71</td><td>3,02</td></tr>
<tr><td>18</td><td>Christopher Gibson (GAT)</td><td>49</td><td>3,04</td></tr>
<tr><td>19</td><td>Emil Garipov (GRG)</td><td>50</td><td>3,05</td></tr>
<tr><td>20</td><td>Ivan Nalimov (CHI)</td><td>60</td><td>3,14</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Justin Peters (HOU)</td><td>71</td><td>4 056</td></tr>
<tr><td>2</td><td>Chet Pickard (MIA)</td><td>65</td><td>3 840</td></tr>
<tr><td>3</td><td>Marek Mazanec (ADK)</td><td>61</td><td>3 566</td></tr>
<tr><td>4</td><td>Spencer Martin (SPR)</td><td>58</td><td>3 469</td></tr>
<tr><td>5</td><td>Mackenzie Blackwood (RFD)</td><td>62</td><td>3 414</td></tr>
<tr><td>6</td><td>Michael Hutchinson (PRO)</td><td>61</td><td>3 410</td></tr>
<tr><td>7</td><td>Jaroslav Janus (NOR)</td><td>59</td><td>3 371</td></tr>
<tr><td>8</td><td>Anthony Stolarz (CTW)</td><td>59</td><td>3 363</td></tr>
<tr><td>9</td><td>Ivan Nalimov (CHI)</td><td>60</td><td>3 265</td></tr>
<tr><td>10</td><td>Alex Nedeljkovic (RNO)</td><td>55</td><td>3 232</td></tr>
<tr><td>11</td><td>Al Montoya (SAR)</td><td>56</td><td>3 215</td></tr>
<tr><td>12</td><td>Peter Delmas (LKE)</td><td>55</td><td>3 152</td></tr>
<tr><td>13</td><td>Jonas Gustavsson (MIL)</td><td>53</td><td>3 152</td></tr>
<tr><td>14</td><td>Eddie Lack (CHI)</td><td>53</td><td>3 133</td></tr>
<tr><td>15</td><td>Alex Lyon (WBS)</td><td>55</td><td>3 112</td></tr>
<tr><td>16</td><td>Igor Bobkov (BNG)</td><td>55</td><td>3 025</td></tr>
<tr><td>17</td><td>Emil Garipov (GRG)</td><td>50</td><td>2 909</td></tr>
<tr><td>18</td><td>Mike Murphy (CHA)</td><td>50</td><td>2 857</td></tr>
<tr><td>19</td><td>Jack Lafontaine (JOL)</td><td>51</td><td>2 854</td></tr>
<tr><td>20</td><td>Christopher Gibson (GAT)</td><td>49</td><td>2 765</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Justin Peters (HOU)</td><td>71</td><td>2050</td></tr>
<tr><td>2</td><td>Chet Pickard (MIA)</td><td>65</td><td>1933</td></tr>
<tr><td>3</td><td>Marek Mazanec (ADK)</td><td>61</td><td>1821</td></tr>
<tr><td>4</td><td>Ivan Nalimov (CHI)</td><td>60</td><td>1817</td></tr>
<tr><td>5</td><td>Mackenzie Blackwood (RFD)</td><td>62</td><td>1812</td></tr>
<tr><td>6</td><td>Michael Hutchinson (PRO)</td><td>61</td><td>1786</td></tr>
<tr><td>7</td><td>Alex Nedeljkovic (RNO)</td><td>55</td><td>1746</td></tr>
<tr><td>8</td><td>Jaroslav Janus (NOR)</td><td>59</td><td>1746</td></tr>
<tr><td>9</td><td>Spencer Martin (SPR)</td><td>58</td><td>1732</td></tr>
<tr><td>10</td><td>Jonas Gustavsson (MIL)</td><td>53</td><td>1687</td></tr>
<tr><td>11</td><td>Al Montoya (SAR)</td><td>56</td><td>1678</td></tr>
<tr><td>12</td><td>Anthony Stolarz (CTW)</td><td>59</td><td>1653</td></tr>
<tr><td>13</td><td>Eddie Lack (CHI)</td><td>53</td><td>1621</td></tr>
<tr><td>14</td><td>Igor Bobkov (BNG)</td><td>55</td><td>1578</td></tr>
<tr><td>15</td><td>Peter Delmas (LKE)</td><td>55</td><td>1546</td></tr>
<tr><td>16</td><td>Jack Lafontaine (JOL)</td><td>51</td><td>1506</td></tr>
<tr><td>17</td><td>Mike Murphy (CHA)</td><td>50</td><td>1454</td></tr>
<tr><td>18</td><td>Emil Garipov (GRG)</td><td>50</td><td>1446</td></tr>
<tr><td>19</td><td>Alex Lyon (WBS)</td><td>55</td><td>1442</td></tr>
<tr><td>20</td><td>Christopher Gibson (GAT)</td><td>49</td><td>1441</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Marek Mazanec (ADK)</td><td>61</td><td>6</td></tr>
<tr><td>2</td><td>Tyler Bunz (OKC)</td><td>43</td><td>5</td></tr>
<tr><td>3</td><td>Anthony Stolarz (CTW)</td><td>59</td><td>5</td></tr>
<tr><td>4</td><td>Peter Delmas (LKE)</td><td>55</td><td>4</td></tr>
<tr><td>5</td><td>Alex Lyon (WBS)</td><td>55</td><td>4</td></tr>
<tr><td>6</td><td>Al Montoya (SAR)</td><td>56</td><td>4</td></tr>
<tr><td>7</td><td>Spencer Martin (SPR)</td><td>58</td><td>4</td></tr>
<tr><td>8</td><td>Michael Hutchinson (PRO)</td><td>61</td><td>4</td></tr>
<tr><td>9</td><td>Sami Aittokallio (PEO)</td><td>23</td><td>3</td></tr>
<tr><td>10</td><td>Tyler Parsons (LAV)</td><td>32</td><td>3</td></tr>
<tr><td>11</td><td>Laurent Brossoit (JOL)</td><td>36</td><td>3</td></tr>
<tr><td>12</td><td>Oscar Dansk (RCH)</td><td>43</td><td>3</td></tr>
<tr><td>13</td><td>Timo Pielmeier (ROB)</td><td>44</td><td>3</td></tr>
<tr><td>14</td><td>Emil Garipov (GRG)</td><td>50</td><td>3</td></tr>
<tr><td>15</td><td>Alex Nedeljkovic (RNO)</td><td>55</td><td>3</td></tr>
<tr><td>16</td><td>Justin Peters (HOU)</td><td>71</td><td>3</td></tr>
<tr><td>17</td><td>Cedrick Desjardins (OKC)</td><td>13</td><td>2</td></tr>
<tr><td>18</td><td>Keith Kinkaid (ALB)</td><td>16</td><td>2</td></tr>
<tr><td>19</td><td>Ken Appleby (LAN)</td><td>33</td><td>2</td></tr>
<tr><td>20</td><td>Anders Lindback (ALB)</td><td>34</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Mackenzie Blackwood (RFD)</td><td>62</td><td>36</td></tr>
<tr><td>2</td><td>Justin Peters (HOU)</td><td>71</td><td>33</td></tr>
<tr><td>3</td><td>Anthony Stolarz (CTW)</td><td>59</td><td>32</td></tr>
<tr><td>4</td><td>Marek Mazanec (ADK)</td><td>61</td><td>32</td></tr>
<tr><td>5</td><td>Tyler Bunz (OKC)</td><td>43</td><td>29</td></tr>
<tr><td>6</td><td>Eddie Lack (CHI)</td><td>53</td><td>29</td></tr>
<tr><td>7</td><td>Igor Bobkov (BNG)</td><td>55</td><td>29</td></tr>
<tr><td>8</td><td>Michael Hutchinson (PRO)</td><td>61</td><td>28</td></tr>
<tr><td>9</td><td>Ilya Samsonov (TRD)</td><td>44</td><td>27</td></tr>
<tr><td>10</td><td>Jack Lafontaine (JOL)</td><td>51</td><td>27</td></tr>
<tr><td>11</td><td>Alex Lyon (WBS)</td><td>55</td><td>27</td></tr>
<tr><td>12</td><td>Spencer Martin (SPR)</td><td>58</td><td>27</td></tr>
<tr><td>13</td><td>Jaroslav Janus (NOR)</td><td>59</td><td>27</td></tr>
<tr><td>14</td><td>Ivan Nalimov (CHI)</td><td>60</td><td>27</td></tr>
<tr><td>15</td><td>Chet Pickard (MIA)</td><td>65</td><td>27</td></tr>
<tr><td>16</td><td>Oscar Dansk (RCH)</td><td>43</td><td>26</td></tr>
<tr><td>17</td><td>Peter Delmas (LKE)</td><td>55</td><td>26</td></tr>
<tr><td>18</td><td>Alex Nedeljkovic (RNO)</td><td>55</td><td>26</td></tr>
<tr><td>19</td><td>Al Montoya (SAR)</td><td>56</td><td>26</td></tr>
<tr><td>20</td><td>Jared Coreau (BRI)</td><td>46</td><td>25</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Eddie Lack (CHI)</td><td>8</td><td>1,000</td></tr>
<tr><td>2</td><td>Denis Godla (BNG)</td><td>7</td><td>1,000</td></tr>
<tr><td>3</td><td>Ilya Samsonov (TRD)</td><td>5</td><td>1,000</td></tr>
<tr><td>4</td><td>Jeff Drouin-Deslauriers (WBS)</td><td>4</td><td>1,000</td></tr>
<tr><td>5</td><td>Leland Irving (PEO)</td><td>4</td><td>1,000</td></tr>
<tr><td>6</td><td>Allen York (ADK)</td><td>3</td><td>1,000</td></tr>
<tr><td>7</td><td>Matt O'Connor (LKE)</td><td>3</td><td>1,000</td></tr>
<tr><td>8</td><td>Antti Raanta (RFD)</td><td>3</td><td>1,000</td></tr>
<tr><td>9</td><td>Adin Hill (GAT)</td><td>3</td><td>1,000</td></tr>
<tr><td>10</td><td>Jordan Binnington (MAN)</td><td>2</td><td>1,000</td></tr>
<tr><td>11</td><td>Jonathan Bernier (RNO)</td><td>2</td><td>1,000</td></tr>
<tr><td>12</td><td>Colton Point (LAV)</td><td>2</td><td>1,000</td></tr>
<tr><td>13</td><td>Jeremy Smith (ALB)</td><td>12</td><td>0,917</td></tr>
<tr><td>14</td><td>Mackenzie Blackwood (RFD)</td><td>26</td><td>0,885</td></tr>
<tr><td>15</td><td>Ivan Nalimov (CHI)</td><td>17</td><td>0,882</td></tr>
<tr><td>16</td><td>Alex Nedeljkovic (RNO)</td><td>17</td><td>0,882</td></tr>
<tr><td>17</td><td>Igor Bobkov (BNG)</td><td>16</td><td>0,875</td></tr>
<tr><td>18</td><td>Samu Perhonen (OKC)</td><td>8</td><td>0,875</td></tr>
<tr><td>19</td><td>Justin Peters (HOU)</td><td>28</td><td>0,857</td></tr>
<tr><td>20</td><td>Louis Domingue (MIL)</td><td>7</td><td>0,857</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Justin Peters (HOU)</td><td>71</td><td>33</td></tr>
<tr><td>2</td><td>Chet Pickard (MIA)</td><td>65</td><td>32</td></tr>
<tr><td>3</td><td>Ivan Nalimov (CHI)</td><td>60</td><td>28</td></tr>
<tr><td>4</td><td>Marek Mazanec (ADK)</td><td>61</td><td>24</td></tr>
<tr><td>5</td><td>Emil Garipov (GRG)</td><td>50</td><td>23</td></tr>
<tr><td>6</td><td>Mike Murphy (CHA)</td><td>50</td><td>23</td></tr>
<tr><td>7</td><td>Peter Delmas (LKE)</td><td>55</td><td>23</td></tr>
<tr><td>8</td><td>Alex Lyon (WBS)</td><td>55</td><td>23</td></tr>
<tr><td>9</td><td>Al Montoya (SAR)</td><td>56</td><td>23</td></tr>
<tr><td>10</td><td>Michael Hutchinson (PRO)</td><td>61</td><td>23</td></tr>
<tr><td>11</td><td>Alexander Sharychenkov (LVG)</td><td>45</td><td>22</td></tr>
<tr><td>12</td><td>Eddie Lack (CHI)</td><td>53</td><td>22</td></tr>
<tr><td>13</td><td>Jaroslav Janus (NOR)</td><td>59</td><td>22</td></tr>
<tr><td>14</td><td>Anthony Stolarz (CTW)</td><td>59</td><td>21</td></tr>
<tr><td>15</td><td>Christopher Gibson (GAT)</td><td>49</td><td>20</td></tr>
<tr><td>16</td><td>Alex Nedeljkovic (RNO)</td><td>55</td><td>20</td></tr>
<tr><td>17</td><td>Spencer Martin (SPR)</td><td>58</td><td>20</td></tr>
<tr><td>18</td><td>Jack Lafontaine (JOL)</td><td>51</td><td>19</td></tr>
<tr><td>19</td><td>Jason Kasdorf (MAN)</td><td>38</td><td>18</td></tr>
<tr><td>20</td><td>Vitek Vanecek (LAV)</td><td>39</td><td>18</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
