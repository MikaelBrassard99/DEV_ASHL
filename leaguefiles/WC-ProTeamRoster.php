<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Pro Team Roster</title>
<script src="WC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - WC-STHS.bin - WC-STHSCareerStat.bin"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 992px) {
.STHSRoster_GoaliesTable tbody td:nth-child(2){display:none;}
.STHSRoster_GoaliesTable thead th:nth-child(2){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(1){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(1){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(3){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(3){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(4){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(4){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(5){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(5){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(6){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(6){display:none;}
.STHSRoster_Coach{display:none;}
.STHSRoster_TeamOverall{display:none;}
}
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
table.basictablesorter tbody td:nth-last-child(1){display:none;}
table.basictablesorter thead th:nth-last-child(1){display:none;}
table.basictablesorter tbody td:nth-last-child(2){display:none;}
table.basictablesorter thead th:nth-last-child(2){display:none;}
table.basictablesorter tbody td:nth-last-child(3){display:none;}
table.basictablesorter thead th:nth-last-child(3){display:none;}
table.basictablesorter tbody td:nth-last-child(4){display:none;}
table.basictablesorter thead th:nth-last-child(4){display:none;}
table.basictablesorter tbody td:nth-last-child(5){display:none;}
table.basictablesorter thead th:nth-last-child(5){display:none;}
table.basictablesorter tbody td:nth-last-child(6){display:none;}
table.basictablesorter thead th:nth-last-child(6){display:none;}
}</style>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); 
$(".STHSRoster_PlayersTable").basictablesorter({headers:{29:{sorter:'thousands'}}});
$(".STHSRoster_GoaliesTable").basictablesorter({headers:{23:{sorter:'thousands'}}});});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#ALLEMAGNE">ALLEMAGNE</a> | <a href="#CANADA">CANADA</a> | <a href="#DANEMARK">DANEMARK</a> | <a href="#FINLANDE">FINLANDE</a> | <a href="#LETTONIE">LETTONIE</a> | <a href="#RUSSIE">RUSSIE</a> | <a href="#SLOVAQUIE">SLOVAQUIE</a> | <a href="#SUÈDE">SUÈDE</a> | <a href="#SUISSE">SUISSE</a> | <a href="#TCHÉQUIE">TCHÉQUIE</a> | <a href="#USA">USA</a> | <a href="#WORLD">WORLD</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamRosterPro_GER"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">ALLEMAGNE Page</a> ]
[ <a href="WC-ProTeamRoster.php#ALLEMAGNE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#ALLEMAGNE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#ALLEMAGNE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#ALLEMAGNE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#ALLEMAGNE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#ALLEMAGNE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#ALLEMAGNE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#ALLEMAGNE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#ALLEMAGNE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#ALLEMAGNE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#ALLEMAGNE">Team History</a> ]
[ <a href="WC-TeamRecords.php#ALLEMAGNE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ALLEMAGNE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ALLEMAGNE" style="display: block;">
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Benoit Dicaire</td>
<td class="STHSRoster_Coach">Coach : Uwe Krupp</td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th Class= "STHSW25">#</th><th Class="STHSW200">Player Name</th><th Class="STHSW10">C</th><th Class="STHSW10">L</th><th Class="STHSW10">R</th><th Class="STHSW10">D</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">CK</th><th Class="STHSW25">FG</th><th Class="STHSW25">DI</th><th Class="STHSW25">SK</th><th Class="STHSW25">ST</th><th Class="STHSW25">EN</th><th Class="STHSW25">DU</th><th Class="STHSW25">PH</th><th Class="STHSW25">FO</th><th Class="STHSW25">PA</th><th Class="STHSW25">SC</th><th Class="STHSW25">DF</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW25">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td><a href="PlayerReport.php?Player=145">Nico Sturm</a></td><td>X</td><td>X</td><td></td><td></td><td>100,00</td><td></td><td>82</td><td>38</td><td>91</td><td>81</td><td>83</td><td>82</td><td>80</td><td>80</td><td>78</td><td>74</td><td>73</td><td>75</td><td>70</td><td>76</td><td>79</td><td>6</td><td>40</td><td></td><td>0</td><td>28</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>2</td><td><a href="PlayerReport.php?Player=1553">Maximilian Kammerer</a></td><td>X</td><td>X</td><td></td><td></td><td>100,00</td><td></td><td>68</td><td>25</td><td>92</td><td>76</td><td>72</td><td>80</td><td>85</td><td>76</td><td>74</td><td>72</td><td>71</td><td>68</td><td>75</td><td>78</td><td>75</td><td>5</td><td>40</td><td></td><td>0</td><td>27</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>3</td><td><a href="PlayerReport.php?Player=1552">Marcel Noebels</a></td><td>X</td><td>X</td><td></td><td></td><td>100,00</td><td></td><td>76</td><td>40</td><td>86</td><td>77</td><td>83</td><td>83</td><td>81</td><td>78</td><td>71</td><td>74</td><td>71</td><td>71</td><td>76</td><td>83</td><td>81</td><td>1</td><td>40</td><td></td><td>0</td><td>31</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>4</td><td><a href="PlayerReport.php?Player=1550">Marc Michaelis</a></td><td>X</td><td>X</td><td></td><td></td><td>100,00</td><td></td><td>73</td><td>25</td><td>82</td><td>79</td><td>78</td><td>82</td><td>81</td><td>78</td><td>72</td><td>73</td><td>71</td><td>67</td><td>78</td><td>70</td><td>73</td><td>1</td><td>40</td><td></td><td>0</td><td>28</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>5</td><td><a href="PlayerReport.php?Player=668">Dominik Kahun</a></td><td>X</td><td>X</td><td></td><td></td><td>100,00</td><td></td><td>60</td><td>15</td><td>99</td><td>90</td><td>71</td><td>80</td><td>77</td><td>84</td><td>75</td><td>76</td><td>76</td><td>69</td><td>74</td><td>83</td><td>83</td><td>6</td><td>40</td><td></td><td>0</td><td>28</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>6</td><td><a href="PlayerReport.php?Player=1549">Brooks Macek</a></td><td>X</td><td></td><td>X</td><td></td><td>100,00</td><td></td><td>68</td><td>25</td><td>89</td><td>79</td><td>80</td><td>83</td><td>82</td><td>79</td><td>75</td><td>72</td><td>75</td><td>68</td><td>83</td><td>81</td><td>77</td><td>1</td><td>40</td><td></td><td>0</td><td>31</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>7</td><td><a href="PlayerReport.php?Player=1545">Tim Stützle</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>77</td><td>25</td><td>80</td><td>89</td><td>82</td><td>85</td><td>82</td><td>90</td><td>67</td><td>84</td><td>84</td><td>67</td><td>81</td><td>75</td><td>73</td><td>10</td><td>40</td><td></td><td>0</td><td>21</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>8</td><td><a href="PlayerReport.php?Player=277">Leon Draisaitl</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>89</td><td>37</td><td>85</td><td>89</td><td>89</td><td>88</td><td>87</td><td>93</td><td>77</td><td>88</td><td>84</td><td>73</td><td>83</td><td>81</td><td>83</td><td>9</td><td>40</td><td></td><td>0</td><td>28</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>9</td><td><a href="PlayerReport.php?Player=1546">JJ Peterka</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>71</td><td>25</td><td>84</td><td>83</td><td>77</td><td>83</td><td>81</td><td>84</td><td>73</td><td>76</td><td>75</td><td>68</td><td>78</td><td>74</td><td>77</td><td>8</td><td>40</td><td></td><td>0</td><td>21</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>10</td><td><a href="PlayerReport.php?Player=1041">Tom Kuhnhackl</a></td><td></td><td>X</td><td></td><td></td><td>100,00</td><td></td><td>62</td><td>38</td><td>89</td><td>79</td><td>73</td><td>79</td><td>72</td><td>76</td><td>60</td><td>69</td><td>69</td><td>69</td><td>76</td><td>86</td><td>86</td><td>1</td><td>40</td><td></td><td>0</td><td>31</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>11</td><td><a href="PlayerReport.php?Player=1551">Yasin Ehliz</a></td><td></td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>65</td><td>30</td><td>84</td><td>78</td><td>77</td><td>80</td><td>76</td><td>79</td><td>75</td><td>73</td><td>71</td><td>67</td><td>78</td><td>83</td><td>76</td><td>1</td><td>40</td><td></td><td>0</td><td>31</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>12</td><td><a href="PlayerReport.php?Player=1547">Lukas Reichel</a></td><td></td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>65</td><td>25</td><td>86</td><td>80</td><td>77</td><td>81</td><td>85</td><td>80</td><td>75</td><td>75</td><td>74</td><td>68</td><td>73</td><td>73</td><td>73</td><td>8</td><td>40</td><td></td><td>0</td><td>21</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>13</td><td><a href="PlayerReport.php?Player=1494">Dominik Bokk(R)</a></td><td></td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>73</td><td>33</td><td>94</td><td>83</td><td>78</td><td>85</td><td>78</td><td>82</td><td>66</td><td>74</td><td>74</td><td>66</td><td>76</td><td>73</td><td>74</td><td>7</td><td>40</td><td></td><td>0</td><td>23</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>14</td><td><a href="PlayerReport.php?Player=1548">Julian Napravnik</a></td><td></td><td></td><td>X</td><td></td><td>100,00</td><td></td><td>67</td><td>25</td><td>83</td><td>76</td><td>72</td><td>81</td><td>76</td><td>77</td><td>70</td><td>71</td><td>71</td><td>68</td><td>78</td><td>65</td><td>64</td><td>5</td><td>40</td><td></td><td>0</td><td>26</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>15</td><td><a href="PlayerReport.php?Player=1555">Marcel Brandt(R)</a></td><td></td><td>X</td><td></td><td>X</td><td>100,00</td><td></td><td>69</td><td>30</td><td>91</td><td>77</td><td>76</td><td>82</td><td>80</td><td>76</td><td>53</td><td>72</td><td>67</td><td>85</td><td>70</td><td>81</td><td>77</td><td>1</td><td>40</td><td></td><td>0</td><td>31</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>16</td><td><a href="PlayerReport.php?Player=1554">Yegor Alanov</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>73</td><td>25</td><td>83</td><td>77</td><td>75</td><td>82</td><td>80</td><td>76</td><td>53</td><td>72</td><td>63</td><td>83</td><td>60</td><td>68</td><td>65</td><td>6</td><td>40</td><td></td><td>0</td><td>23</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>17</td><td><a href="PlayerReport.php?Player=605">Moritz Seider(R)</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>84</td><td>43</td><td>81</td><td>78</td><td>83</td><td>85</td><td>87</td><td>80</td><td>50</td><td>73</td><td>68</td><td>87</td><td>65</td><td>72</td><td>73</td><td>8</td><td>40</td><td></td><td>0</td><td>22</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>18</td><td><a href="PlayerReport.php?Player=1558">Marcus Weber(R)</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>78</td><td>25</td><td>79</td><td>74</td><td>81</td><td>77</td><td>79</td><td>72</td><td>51</td><td>70</td><td>61</td><td>83</td><td>57</td><td>81</td><td>78</td><td>1</td><td>40</td><td></td><td>0</td><td>31</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>19</td><td><a href="PlayerReport.php?Player=1557">Leon Hüttl(R)</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>75</td><td>25</td><td>84</td><td>77</td><td>73</td><td>82</td><td>79</td><td>72</td><td>51</td><td>70</td><td>63</td><td>82</td><td>65</td><td>67</td><td>65</td><td>5</td><td>40</td><td></td><td>0</td><td>23</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>20</td><td><a href="PlayerReport.php?Player=447">Leon Gawanke(R)</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>69</td><td>32</td><td>86</td><td>78</td><td>81</td><td>86</td><td>86</td><td>79</td><td>50</td><td>74</td><td>67</td><td>84</td><td>62</td><td>71</td><td>72</td><td>6</td><td>40</td><td></td><td>0</td><td>24</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>21</td><td><a href="PlayerReport.php?Player=1556">Bernhard Ebner(R)</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>81</td><td>50</td><td>79</td><td>76</td><td>80</td><td>80</td><td>78</td><td>74</td><td>53</td><td>71</td><td>63</td><td>83</td><td>62</td><td>83</td><td>80</td><td>1</td><td>40</td><td></td><td>0</td><td>33</td><td>1</td><td>500 000 $</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th Class="STHSW200">Goalie Name</th><th Class="STHSW25">PO</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">SK</th><th Class="STHSW25">DU</th><th Class="STHSW25">EN</th><th Class="STHSW25">SZ</th><th Class="STHSW25">AG</th><th Class="STHSW25">RB</th><th Class="STHSW25">SC</th><th Class="STHSW25">HS</th><th Class="STHSW25">RT</th><th Class="STHSW25">PH</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW35">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tr><td><a href="GoalieReport.php?Goalie=180">Dustin Strahlmeier</a></td><td>G</td><td>100,00</td><td></td><td>83</td><td>81</td><td>86</td><td>87</td><td>87</td><td>83</td><td>84</td><td>83</td><td>82</td><td>85</td><td>85</td><td>77</td><td>77</td><td>1</td><td>40</td><td></td><td>0</td><td>31</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td><a href="GoalieReport.php?Goalie=181">Mathias Niederberger</a></td><td>G</td><td>100,00</td><td></td><td>84</td><td>81</td><td>85</td><td>82</td><td>86</td><td>83</td><td>82</td><td>82</td><td>85</td><td>87</td><td>84</td><td>80</td><td>80</td><td>1</td><td>40</td><td></td><td>0</td><td>31</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td><a href="GoalieReport.php?Goalie=147">Philipp Grubauer</a></td><td>G</td><td>100,00</td><td></td><td>88</td><td>84</td><td>83</td><td>84</td><td>93</td><td>91</td><td>92</td><td>91</td><td>91</td><td>90</td><td>88</td><td>81</td><td>83</td><td>8</td><td>40</td><td></td><td>0</td><td>32</td><td>1</td><td>500 000 $</td><td></td></tr>
</table>
</div>
<h1 class="TeamRosterPro_CAN"><a id="CANADA">CANADA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">CANADA Page</a> ]
[ <a href="WC-ProTeamRoster.php#CANADA">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#CANADA">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#CANADA">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#CANADA">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#CANADA">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#CANADA">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#CANADA">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#CANADA">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#CANADA">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#CANADA">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#CANADA">Team History</a> ]
[ <a href="WC-TeamRecords.php#CANADA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CANADA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CANADA" style="display: block;">
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Félix Julien</td>
<td class="STHSRoster_Coach">Coach : Jon Cooper</td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th Class= "STHSW25">#</th><th Class="STHSW200">Player Name</th><th Class="STHSW10">C</th><th Class="STHSW10">L</th><th Class="STHSW10">R</th><th Class="STHSW10">D</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">CK</th><th Class="STHSW25">FG</th><th Class="STHSW25">DI</th><th Class="STHSW25">SK</th><th Class="STHSW25">ST</th><th Class="STHSW25">EN</th><th Class="STHSW25">DU</th><th Class="STHSW25">PH</th><th Class="STHSW25">FO</th><th Class="STHSW25">PA</th><th Class="STHSW25">SC</th><th Class="STHSW25">DF</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW25">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td><a href="PlayerReport.php?Player=691">Sidney Crosby</a></td><td>X</td><td></td><td></td><td></td><td>100,00</td><td></td><td>67</td><td>30</td><td>87</td><td>91</td><td>76</td><td>74</td><td>68</td><td>92</td><td>93</td><td>88</td><td>86</td><td>74</td><td>97</td><td>99</td><td>99</td><td>1</td><td>40</td><td></td><td>0</td><td>36</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>2</td><td><a href="PlayerReport.php?Player=1100">Sean Monahan</a></td><td>X</td><td></td><td></td><td></td><td>100,00</td><td></td><td>86</td><td>35</td><td>91</td><td>90</td><td>83</td><td>83</td><td>80</td><td>92</td><td>80</td><td>88</td><td>85</td><td>71</td><td>87</td><td>92</td><td>94</td><td>1</td><td>40</td><td></td><td>0</td><td>29</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>3</td><td><a href="PlayerReport.php?Player=1226">Connor McDavid</a></td><td>X</td><td></td><td></td><td></td><td>100,00</td><td></td><td>88</td><td>35</td><td>82</td><td>96</td><td>83</td><td>92</td><td>90</td><td>96</td><td>82</td><td>93</td><td>94</td><td>73</td><td>97</td><td>90</td><td>99</td><td>10</td><td>40</td><td></td><td>0</td><td>26</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>4</td><td><a href="PlayerReport.php?Player=674">Brayden Point</a></td><td>X</td><td></td><td></td><td></td><td>100,00</td><td></td><td>88</td><td>38</td><td>85</td><td>95</td><td>80</td><td>91</td><td>90</td><td>94</td><td>78</td><td>88</td><td>87</td><td>75</td><td>84</td><td>91</td><td>92</td><td>9</td><td>40</td><td></td><td>0</td><td>27</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>5</td><td><a href="PlayerReport.php?Player=792">Ryan Nugent-Hopkins</a></td><td>X</td><td>X</td><td></td><td></td><td>100,00</td><td></td><td>69</td><td>30</td><td>99</td><td>91</td><td>79</td><td>92</td><td>82</td><td>94</td><td>86</td><td>87</td><td>83</td><td>70</td><td>86</td><td>99</td><td>99</td><td>1</td><td>40</td><td></td><td>0</td><td>30</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>6</td><td><a href="PlayerReport.php?Player=706">Steven Stamkos</a></td><td>X</td><td></td><td>X</td><td></td><td>100,00</td><td></td><td>72</td><td>40</td><td>85</td><td>86</td><td>80</td><td>91</td><td>86</td><td>91</td><td>82</td><td>83</td><td>91</td><td>70</td><td>96</td><td>99</td><td>99</td><td>1</td><td>40</td><td></td><td>0</td><td>33</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>7</td><td><a href="PlayerReport.php?Player=1042">Nathan MacKinnon</a></td><td>X</td><td></td><td>X</td><td></td><td>100,00</td><td></td><td>92</td><td>43</td><td>80</td><td>95</td><td>86</td><td>90</td><td>88</td><td>94</td><td>78</td><td>93</td><td>90</td><td>73</td><td>88</td><td>96</td><td>99</td><td>10</td><td>40</td><td></td><td>0</td><td>28</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>8</td><td><a href="PlayerReport.php?Player=1251">Mathew Barzal</a></td><td>X</td><td></td><td>X</td><td></td><td>100,00</td><td></td><td>74</td><td>35</td><td>89</td><td>95</td><td>80</td><td>84</td><td>80</td><td>95</td><td>78</td><td>91</td><td>82</td><td>69</td><td>86</td><td>83</td><td>83</td><td>9</td><td>40</td><td></td><td>0</td><td>26</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>9</td><td><a href="PlayerReport.php?Player=616">Mitchell Marner</a></td><td>X</td><td></td><td>X</td><td></td><td>100,00</td><td></td><td>76</td><td>28</td><td>84</td><td>92</td><td>74</td><td>86</td><td>87</td><td>95</td><td>75</td><td>90</td><td>84</td><td>71</td><td>91</td><td>87</td><td>93</td><td>9</td><td>40</td><td></td><td>0</td><td>26</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>10</td><td><a href="PlayerReport.php?Player=517">Matt Duchene</a></td><td>X</td><td></td><td>X</td><td></td><td>100,00</td><td></td><td>79</td><td>40</td><td>88</td><td>91</td><td>84</td><td>94</td><td>91</td><td>93</td><td>82</td><td>86</td><td>79</td><td>67</td><td>92</td><td>99</td><td>99</td><td>1</td><td>40</td><td></td><td>0</td><td>32</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>11</td><td><a href="PlayerReport.php?Player=712">Taylor Hall</a></td><td></td><td>X</td><td></td><td></td><td>100,00</td><td></td><td>77</td><td>35</td><td>94</td><td>93</td><td>83</td><td>91</td><td>89</td><td>88</td><td>62</td><td>84</td><td>83</td><td>66</td><td>87</td><td>99</td><td>99</td><td>1</td><td>40</td><td></td><td>0</td><td>32</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>12</td><td><a href="PlayerReport.php?Player=361">Jeff Skinner</a></td><td></td><td>X</td><td></td><td></td><td>100,00</td><td></td><td>68</td><td>31</td><td>99</td><td>93</td><td>82</td><td>94</td><td>93</td><td>93</td><td>68</td><td>86</td><td>87</td><td>70</td><td>92</td><td>99</td><td>99</td><td>1</td><td>40</td><td></td><td>0</td><td>31</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>13</td><td><a href="PlayerReport.php?Player=1054">Shea Theodore</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>78</td><td>30</td><td>94</td><td>90</td><td>87</td><td>86</td><td>86</td><td>88</td><td>50</td><td>83</td><td>76</td><td>88</td><td>73</td><td>92</td><td>92</td><td>9</td><td>40</td><td></td><td>0</td><td>28</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>14</td><td><a href="PlayerReport.php?Player=445">Kris Letang</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>81</td><td>40</td><td>77</td><td>85</td><td>78</td><td>87</td><td>87</td><td>88</td><td>70</td><td>84</td><td>76</td><td>86</td><td>78</td><td>99</td><td>99</td><td>1</td><td>40</td><td></td><td>0</td><td>36</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>15</td><td><a href="PlayerReport.php?Player=251">Drew Doughty</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>97</td><td>46</td><td>71</td><td>83</td><td>84</td><td>90</td><td>90</td><td>90</td><td>50</td><td>85</td><td>77</td><td>94</td><td>78</td><td>99</td><td>99</td><td>1</td><td>40</td><td></td><td>0</td><td>34</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>16</td><td><a href="PlayerReport.php?Player=1363">Cale Makar</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>76</td><td>30</td><td>86</td><td>95</td><td>78</td><td>86</td><td>76</td><td>93</td><td>50</td><td>86</td><td>78</td><td>85</td><td>74</td><td>84</td><td>81</td><td>10</td><td>40</td><td></td><td>0</td><td>25</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>17</td><td><a href="PlayerReport.php?Player=627">Aaron Ekblad</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>95</td><td>46</td><td>74</td><td>90</td><td>89</td><td>89</td><td>84</td><td>87</td><td>52</td><td>82</td><td>77</td><td>95</td><td>74</td><td>96</td><td>99</td><td>9</td><td>40</td><td></td><td>0</td><td>27</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>18</td><td><a href="PlayerReport.php?Player=19">Alex Pietrangelo</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>83</td><td>45</td><td>80</td><td>83</td><td>86</td><td>92</td><td>92</td><td>90</td><td>50</td><td>84</td><td>78</td><td>94</td><td>77</td><td>99</td><td>99</td><td>1</td><td>40</td><td></td><td>0</td><td>33</td><td>1</td><td>500 000 $</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th Class="STHSW200">Goalie Name</th><th Class="STHSW25">PO</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">SK</th><th Class="STHSW25">DU</th><th Class="STHSW25">EN</th><th Class="STHSW25">SZ</th><th Class="STHSW25">AG</th><th Class="STHSW25">RB</th><th Class="STHSW25">SC</th><th Class="STHSW25">HS</th><th Class="STHSW25">RT</th><th Class="STHSW25">PH</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW35">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tr><td><a href="GoalieReport.php?Goalie=23">Carey Price</a></td><td>G</td><td>100,00</td><td></td><td>91</td><td>90</td><td>84</td><td>93</td><td>94</td><td>92</td><td>93</td><td>91</td><td>91</td><td>96</td><td>95</td><td>99</td><td>99</td><td>1</td><td>40</td><td></td><td>0</td><td>36</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td><a href="GoalieReport.php?Goalie=66">Matt Murray</a></td><td>G</td><td>100,00</td><td></td><td>96</td><td>90</td><td>90</td><td>92</td><td>95</td><td>95</td><td>95</td><td>95</td><td>94</td><td>97</td><td>94</td><td>87</td><td>87</td><td>10</td><td>40</td><td></td><td>0</td><td>29</td><td>1</td><td>500 000 $</td><td></td></tr>
</table>
</div>
<h1 class="TeamRosterPro_DAN"><a id="DANEMARK">DANEMARK</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">DANEMARK Page</a> ]
[ <a href="WC-ProTeamRoster.php#DANEMARK">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#DANEMARK">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#DANEMARK">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#DANEMARK">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#DANEMARK">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#DANEMARK">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#DANEMARK">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#DANEMARK">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#DANEMARK">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#DANEMARK">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#DANEMARK">Team History</a> ]
[ <a href="WC-TeamRecords.php#DANEMARK">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DANEMARK');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DANEMARK" style="display: block;">
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Jonathan Légaré</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th Class= "STHSW25">#</th><th Class="STHSW200">Player Name</th><th Class="STHSW10">C</th><th Class="STHSW10">L</th><th Class="STHSW10">R</th><th Class="STHSW10">D</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">CK</th><th Class="STHSW25">FG</th><th Class="STHSW25">DI</th><th Class="STHSW25">SK</th><th Class="STHSW25">ST</th><th Class="STHSW25">EN</th><th Class="STHSW25">DU</th><th Class="STHSW25">PH</th><th Class="STHSW25">FO</th><th Class="STHSW25">PA</th><th Class="STHSW25">SC</th><th Class="STHSW25">DF</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW25">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th Class="STHSW200">Goalie Name</th><th Class="STHSW25">PO</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">SK</th><th Class="STHSW25">DU</th><th Class="STHSW25">EN</th><th Class="STHSW25">SZ</th><th Class="STHSW25">AG</th><th Class="STHSW25">RB</th><th Class="STHSW25">SC</th><th Class="STHSW25">HS</th><th Class="STHSW25">RT</th><th Class="STHSW25">PH</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW35">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_FIN"><a id="FINLANDE">FINLANDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">FINLANDE Page</a> ]
[ <a href="WC-ProTeamRoster.php#FINLANDE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#FINLANDE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#FINLANDE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#FINLANDE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#FINLANDE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#FINLANDE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#FINLANDE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#FINLANDE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#FINLANDE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#FINLANDE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#FINLANDE">Team History</a> ]
[ <a href="WC-TeamRecords.php#FINLANDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FINLANDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FINLANDE" style="display: block;">
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Sébastien Tremblay</td>
<td class="STHSRoster_Coach">Coach : Jukka Jalonen</td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th Class= "STHSW25">#</th><th Class="STHSW200">Player Name</th><th Class="STHSW10">C</th><th Class="STHSW10">L</th><th Class="STHSW10">R</th><th Class="STHSW10">D</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">CK</th><th Class="STHSW25">FG</th><th Class="STHSW25">DI</th><th Class="STHSW25">SK</th><th Class="STHSW25">ST</th><th Class="STHSW25">EN</th><th Class="STHSW25">DU</th><th Class="STHSW25">PH</th><th Class="STHSW25">FO</th><th Class="STHSW25">PA</th><th Class="STHSW25">SC</th><th Class="STHSW25">DF</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW25">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th Class="STHSW200">Goalie Name</th><th Class="STHSW25">PO</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">SK</th><th Class="STHSW25">DU</th><th Class="STHSW25">EN</th><th Class="STHSW25">SZ</th><th Class="STHSW25">AG</th><th Class="STHSW25">RB</th><th Class="STHSW25">SC</th><th Class="STHSW25">HS</th><th Class="STHSW25">RT</th><th Class="STHSW25">PH</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW35">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_LET"><a id="LETTONIE">LETTONIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">LETTONIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#LETTONIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#LETTONIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#LETTONIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#LETTONIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#LETTONIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#LETTONIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#LETTONIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#LETTONIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#LETTONIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#LETTONIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#LETTONIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#LETTONIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LETTONIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LETTONIE" style="display: block;">
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Simon Brassard</td>
<td class="STHSRoster_Coach">Coach : Gilles Bouchard</td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th Class= "STHSW25">#</th><th Class="STHSW200">Player Name</th><th Class="STHSW10">C</th><th Class="STHSW10">L</th><th Class="STHSW10">R</th><th Class="STHSW10">D</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">CK</th><th Class="STHSW25">FG</th><th Class="STHSW25">DI</th><th Class="STHSW25">SK</th><th Class="STHSW25">ST</th><th Class="STHSW25">EN</th><th Class="STHSW25">DU</th><th Class="STHSW25">PH</th><th Class="STHSW25">FO</th><th Class="STHSW25">PA</th><th Class="STHSW25">SC</th><th Class="STHSW25">DF</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW25">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td><a href="PlayerReport.php?Player=113">Rodrigo Abols</a></td><td>X</td><td></td><td></td><td></td><td>100,00</td><td></td><td>84</td><td>39</td><td>83</td><td>81</td><td>81</td><td>78</td><td>76</td><td>80</td><td>73</td><td>74</td><td>73</td><td>67</td><td>77</td><td>73</td><td>74</td><td>6</td><td>40</td><td></td><td>0</td><td>27</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>2</td><td><a href="PlayerReport.php?Player=1539">Oskars Batna</a></td><td>X</td><td></td><td></td><td></td><td>100,00</td><td></td><td>86</td><td>53</td><td>70</td><td>77</td><td>86</td><td>81</td><td>79</td><td>76</td><td>74</td><td>70</td><td>68</td><td>64</td><td>72</td><td>76</td><td>74</td><td>1</td><td>40</td><td></td><td>0</td><td>28</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>3</td><td><a href="PlayerReport.php?Player=1537">Dans Locmelis</a></td><td>X</td><td></td><td></td><td></td><td>100,00</td><td></td><td>67</td><td>25</td><td>82</td><td>76</td><td>73</td><td>77</td><td>81</td><td>74</td><td>74</td><td>69</td><td>68</td><td>64</td><td>74</td><td>61</td><td>60</td><td>6</td><td>40</td><td></td><td>0</td><td>19</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>4</td><td><a href="PlayerReport.php?Player=967">Zemgus Girgensons</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>90</td><td>40</td><td>91</td><td>84</td><td>86</td><td>85</td><td>81</td><td>84</td><td>81</td><td>77</td><td>77</td><td>78</td><td>78</td><td>99</td><td>99</td><td>1</td><td>40</td><td></td><td>0</td><td>29</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>5</td><td><a href="PlayerReport.php?Player=1029">Theodor Blueger</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>79</td><td>35</td><td>91</td><td>87</td><td>77</td><td>86</td><td>85</td><td>84</td><td>78</td><td>77</td><td>76</td><td>67</td><td>77</td><td>95</td><td>95</td><td>1</td><td>40</td><td></td><td>0</td><td>29</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>6</td><td><a href="PlayerReport.php?Player=1535">Miks Indrasis</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>68</td><td>40</td><td>98</td><td>77</td><td>80</td><td>84</td><td>79</td><td>75</td><td>70</td><td>71</td><td>70</td><td>68</td><td>81</td><td>82</td><td>85</td><td>1</td><td>40</td><td></td><td>0</td><td>33</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>7</td><td><a href="PlayerReport.php?Player=1533">Kaspars Daugavins</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>75</td><td>45</td><td>87</td><td>75</td><td>82</td><td>83</td><td>79</td><td>77</td><td>72</td><td>72</td><td>71</td><td>67</td><td>81</td><td>85</td><td>89</td><td>1</td><td>40</td><td></td><td>0</td><td>35</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>8</td><td><a href="PlayerReport.php?Player=1534">Eduards Tralmaks</a></td><td>X</td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>74</td><td>25</td><td>82</td><td>75</td><td>82</td><td>81</td><td>74</td><td>75</td><td>72</td><td>70</td><td>70</td><td>68</td><td>76</td><td>68</td><td>67</td><td>4</td><td>40</td><td></td><td>0</td><td>26</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>9</td><td><a href="PlayerReport.php?Player=1536">Nikolajs Jelisejevs</a></td><td></td><td>X</td><td></td><td></td><td>100,00</td><td></td><td>73</td><td>40</td><td>84</td><td>78</td><td>73</td><td>81</td><td>79</td><td>77</td><td>70</td><td>71</td><td>71</td><td>64</td><td>81</td><td>75</td><td>71</td><td>1</td><td>40</td><td></td><td>0</td><td>29</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>10</td><td><a href="PlayerReport.php?Player=1538">Raivis Ansons</a></td><td></td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>68</td><td>25</td><td>79</td><td>76</td><td>75</td><td>78</td><td>78</td><td>75</td><td>72</td><td>69</td><td>68</td><td>66</td><td>74</td><td>64</td><td>62</td><td>5</td><td>40</td><td></td><td>0</td><td>21</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>11</td><td><a href="PlayerReport.php?Player=1174">Rihards Bukarts</a></td><td></td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>74</td><td>30</td><td>89</td><td>86</td><td>78</td><td>81</td><td>78</td><td>81</td><td>67</td><td>74</td><td>73</td><td>67</td><td>77</td><td>81</td><td>80</td><td>5</td><td>40</td><td></td><td>0</td><td>28</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>12</td><td><a href="PlayerReport.php?Player=607">Rudolfs Balcers</a></td><td></td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>65</td><td>26</td><td>93</td><td>88</td><td>72</td><td>88</td><td>86</td><td>84</td><td>65</td><td>76</td><td>76</td><td>66</td><td>75</td><td>80</td><td>80</td><td>6</td><td>40</td><td></td><td>0</td><td>26</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>13</td><td><a href="PlayerReport.php?Player=1540">Oskars Lapinskis</a></td><td></td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>66</td><td>25</td><td>96</td><td>78</td><td>69</td><td>78</td><td>79</td><td>76</td><td>70</td><td>70</td><td>68</td><td>67</td><td>74</td><td>65</td><td>64</td><td>5</td><td>40</td><td></td><td>0</td><td>21</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>14</td><td><a href="PlayerReport.php?Player=306">Martins Dzierkals</a></td><td></td><td></td><td>X</td><td></td><td>100,00</td><td></td><td>82</td><td>40</td><td>83</td><td>87</td><td>79</td><td>86</td><td>86</td><td>79</td><td>60</td><td>74</td><td>74</td><td>68</td><td>76</td><td>80</td><td>78</td><td>6</td><td>40</td><td></td><td>0</td><td>26</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>15</td><td><a href="PlayerReport.php?Player=1542">Uvis Balinskis</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>71</td><td>30</td><td>83</td><td>78</td><td>77</td><td>82</td><td>83</td><td>76</td><td>53</td><td>72</td><td>66</td><td>85</td><td>70</td><td>78</td><td>76</td><td>6</td><td>40</td><td></td><td>0</td><td>27</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>16</td><td><a href="PlayerReport.php?Player=1136">Ralfs Freibergs</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>76</td><td>40</td><td>79</td><td>72</td><td>76</td><td>76</td><td>71</td><td>73</td><td>51</td><td>67</td><td>62</td><td>82</td><td>68</td><td>78</td><td>78</td><td>1</td><td>40</td><td></td><td>0</td><td>32</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>17</td><td><a href="PlayerReport.php?Player=929">Ralfs Bergmanis(R)</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>78</td><td>45</td><td>73</td><td>72</td><td>73</td><td>79</td><td>81</td><td>71</td><td>52</td><td>68</td><td>62</td><td>79</td><td>62</td><td>62</td><td>66</td><td>5</td><td>40</td><td></td><td>0</td><td>21</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>18</td><td><a href="PlayerReport.php?Player=1543">Oskars Cibulskis</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>78</td><td>50</td><td>83</td><td>74</td><td>82</td><td>81</td><td>79</td><td>73</td><td>55</td><td>70</td><td>61</td><td>86</td><td>61</td><td>81</td><td>80</td><td>1</td><td>40</td><td></td><td>0</td><td>35</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>19</td><td><a href="PlayerReport.php?Player=959">Karlis Cukste(R)</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>94</td><td>47</td><td>73</td><td>77</td><td>89</td><td>82</td><td>82</td><td>76</td><td>50</td><td>73</td><td>65</td><td>87</td><td>63</td><td>71</td><td>70</td><td>6</td><td>40</td><td></td><td>0</td><td>26</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>20</td><td><a href="PlayerReport.php?Player=1544">Kristians Rubins</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>79</td><td>30</td><td>79</td><td>76</td><td>84</td><td>82</td><td>81</td><td>74</td><td>51</td><td>70</td><td>62</td><td>85</td><td>60</td><td>77</td><td>72</td><td>5</td><td>40</td><td></td><td>0</td><td>26</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td>21</td><td><a href="PlayerReport.php?Player=1541">Janis Jaks</a></td><td></td><td></td><td></td><td>X</td><td>100,00</td><td></td><td>77</td><td>40</td><td>79</td><td>78</td><td>79</td><td>82</td><td>79</td><td>75</td><td>54</td><td>70</td><td>64</td><td>84</td><td>67</td><td>69</td><td>68</td><td>5</td><td>40</td><td></td><td>0</td><td>28</td><td>1</td><td>500 000 $</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th Class="STHSW200">Goalie Name</th><th Class="STHSW25">PO</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">SK</th><th Class="STHSW25">DU</th><th Class="STHSW25">EN</th><th Class="STHSW25">SZ</th><th Class="STHSW25">AG</th><th Class="STHSW25">RB</th><th Class="STHSW25">SC</th><th Class="STHSW25">HS</th><th Class="STHSW25">RT</th><th Class="STHSW25">PH</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW35">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tr><td><a href="GoalieReport.php?Goalie=68">Arturs Silovs(R)</a></td><td>G</td><td>100,00</td><td></td><td>85</td><td>83</td><td>83</td><td>87</td><td>84</td><td>83</td><td>84</td><td>83</td><td>82</td><td>85</td><td>83</td><td>65</td><td>64</td><td>8</td><td>40</td><td></td><td>0</td><td>22</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td><a href="GoalieReport.php?Goalie=145">Elvis Merzlikins</a></td><td>G</td><td>100,00</td><td></td><td>85</td><td>78</td><td>81</td><td>81</td><td>87</td><td>85</td><td>84</td><td>85</td><td>85</td><td>86</td><td>84</td><td>68</td><td>74</td><td>6</td><td>40</td><td></td><td>0</td><td>29</td><td>1</td><td>500 000 $</td><td></td></tr>
<tr><td><a href="GoalieReport.php?Goalie=179">Gustavs Davis Grigals</a></td><td>G</td><td>100,00</td><td></td><td>84</td><td>83</td><td>82</td><td>84</td><td>86</td><td>82</td><td>82</td><td>83</td><td>83</td><td>80</td><td>83</td><td>61</td><td>60</td><td>6</td><td>40</td><td></td><td>0</td><td>25</td><td>1</td><td>500 000 $</td><td></td></tr>
</table>
</div>
<h1 class="TeamRosterPro_RUS"><a id="RUSSIE">RUSSIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">RUSSIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#RUSSIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#RUSSIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#RUSSIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#RUSSIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#RUSSIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#RUSSIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#RUSSIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#RUSSIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#RUSSIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#RUSSIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#RUSSIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#RUSSIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RUSSIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RUSSIE" style="display: block;">
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Mathieu Richard</td>
<td class="STHSRoster_Coach">Coach : Igor Larionov</td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th Class= "STHSW25">#</th><th Class="STHSW200">Player Name</th><th Class="STHSW10">C</th><th Class="STHSW10">L</th><th Class="STHSW10">R</th><th Class="STHSW10">D</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">CK</th><th Class="STHSW25">FG</th><th Class="STHSW25">DI</th><th Class="STHSW25">SK</th><th Class="STHSW25">ST</th><th Class="STHSW25">EN</th><th Class="STHSW25">DU</th><th Class="STHSW25">PH</th><th Class="STHSW25">FO</th><th Class="STHSW25">PA</th><th Class="STHSW25">SC</th><th Class="STHSW25">DF</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW25">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th Class="STHSW200">Goalie Name</th><th Class="STHSW25">PO</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">SK</th><th Class="STHSW25">DU</th><th Class="STHSW25">EN</th><th Class="STHSW25">SZ</th><th Class="STHSW25">AG</th><th Class="STHSW25">RB</th><th Class="STHSW25">SC</th><th Class="STHSW25">HS</th><th Class="STHSW25">RT</th><th Class="STHSW25">PH</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW35">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_SVK"><a id="SLOVAQUIE">SLOVAQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">SLOVAQUIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#SLOVAQUIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#SLOVAQUIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#SLOVAQUIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#SLOVAQUIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#SLOVAQUIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#SLOVAQUIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#SLOVAQUIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#SLOVAQUIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#SLOVAQUIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#SLOVAQUIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#SLOVAQUIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#SLOVAQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SLOVAQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SLOVAQUIE" style="display: block;">
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : J-P Vandal</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th Class= "STHSW25">#</th><th Class="STHSW200">Player Name</th><th Class="STHSW10">C</th><th Class="STHSW10">L</th><th Class="STHSW10">R</th><th Class="STHSW10">D</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">CK</th><th Class="STHSW25">FG</th><th Class="STHSW25">DI</th><th Class="STHSW25">SK</th><th Class="STHSW25">ST</th><th Class="STHSW25">EN</th><th Class="STHSW25">DU</th><th Class="STHSW25">PH</th><th Class="STHSW25">FO</th><th Class="STHSW25">PA</th><th Class="STHSW25">SC</th><th Class="STHSW25">DF</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW25">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th Class="STHSW200">Goalie Name</th><th Class="STHSW25">PO</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">SK</th><th Class="STHSW25">DU</th><th Class="STHSW25">EN</th><th Class="STHSW25">SZ</th><th Class="STHSW25">AG</th><th Class="STHSW25">RB</th><th Class="STHSW25">SC</th><th Class="STHSW25">HS</th><th Class="STHSW25">RT</th><th Class="STHSW25">PH</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW35">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_SWE"><a id="SUÈDE">SUÈDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">SUÈDE Page</a> ]
[ <a href="WC-ProTeamRoster.php#SUÈDE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#SUÈDE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#SUÈDE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#SUÈDE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#SUÈDE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#SUÈDE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#SUÈDE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#SUÈDE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#SUÈDE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#SUÈDE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#SUÈDE">Team History</a> ]
[ <a href="WC-TeamRecords.php#SUÈDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUÈDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUÈDE" style="display: block;">
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Alexandre Hamel</td>
<td class="STHSRoster_Coach">Coach : Joel Quenneville</td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th Class= "STHSW25">#</th><th Class="STHSW200">Player Name</th><th Class="STHSW10">C</th><th Class="STHSW10">L</th><th Class="STHSW10">R</th><th Class="STHSW10">D</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">CK</th><th Class="STHSW25">FG</th><th Class="STHSW25">DI</th><th Class="STHSW25">SK</th><th Class="STHSW25">ST</th><th Class="STHSW25">EN</th><th Class="STHSW25">DU</th><th Class="STHSW25">PH</th><th Class="STHSW25">FO</th><th Class="STHSW25">PA</th><th Class="STHSW25">SC</th><th Class="STHSW25">DF</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW25">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td><a href="PlayerReport.php?Player=1180">Andre Burakovsky</a></td><td></td><td>X</td><td>X</td><td></td><td>100,00</td><td></td><td>80</td><td>35</td><td>84</td><td>90</td><td>80</td><td>87</td><td>85</td><td>91</td><td>74</td><td>83</td><td>82</td><td>69</td><td>84</td><td>86</td><td>83</td><td>8</td><td>40</td><td></td><td>0</td><td>28</td><td>1</td><td>500 000 $</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th Class="STHSW200">Goalie Name</th><th Class="STHSW25">PO</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">SK</th><th Class="STHSW25">DU</th><th Class="STHSW25">EN</th><th Class="STHSW25">SZ</th><th Class="STHSW25">AG</th><th Class="STHSW25">RB</th><th Class="STHSW25">SC</th><th Class="STHSW25">HS</th><th Class="STHSW25">RT</th><th Class="STHSW25">PH</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW35">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_SWI"><a id="SUISSE">SUISSE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">SUISSE Page</a> ]
[ <a href="WC-ProTeamRoster.php#SUISSE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#SUISSE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#SUISSE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#SUISSE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#SUISSE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#SUISSE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#SUISSE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#SUISSE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#SUISSE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#SUISSE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#SUISSE">Team History</a> ]
[ <a href="WC-TeamRecords.php#SUISSE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUISSE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUISSE" style="display: block;">
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Jean-Bruno Gélinas</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th Class= "STHSW25">#</th><th Class="STHSW200">Player Name</th><th Class="STHSW10">C</th><th Class="STHSW10">L</th><th Class="STHSW10">R</th><th Class="STHSW10">D</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">CK</th><th Class="STHSW25">FG</th><th Class="STHSW25">DI</th><th Class="STHSW25">SK</th><th Class="STHSW25">ST</th><th Class="STHSW25">EN</th><th Class="STHSW25">DU</th><th Class="STHSW25">PH</th><th Class="STHSW25">FO</th><th Class="STHSW25">PA</th><th Class="STHSW25">SC</th><th Class="STHSW25">DF</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW25">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th Class="STHSW200">Goalie Name</th><th Class="STHSW25">PO</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">SK</th><th Class="STHSW25">DU</th><th Class="STHSW25">EN</th><th Class="STHSW25">SZ</th><th Class="STHSW25">AG</th><th Class="STHSW25">RB</th><th Class="STHSW25">SC</th><th Class="STHSW25">HS</th><th Class="STHSW25">RT</th><th Class="STHSW25">PH</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW35">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_CZE"><a id="TCHÉQUIE">TCHÉQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">TCHÉQUIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#TCHÉQUIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#TCHÉQUIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#TCHÉQUIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#TCHÉQUIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#TCHÉQUIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#TCHÉQUIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#TCHÉQUIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#TCHÉQUIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#TCHÉQUIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#TCHÉQUIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#TCHÉQUIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#TCHÉQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TCHÉQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TCHÉQUIE" style="display: block;">
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Mercier Family</td>
<td class="STHSRoster_Coach">Coach : Martin St-Louis</td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th Class= "STHSW25">#</th><th Class="STHSW200">Player Name</th><th Class="STHSW10">C</th><th Class="STHSW10">L</th><th Class="STHSW10">R</th><th Class="STHSW10">D</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">CK</th><th Class="STHSW25">FG</th><th Class="STHSW25">DI</th><th Class="STHSW25">SK</th><th Class="STHSW25">ST</th><th Class="STHSW25">EN</th><th Class="STHSW25">DU</th><th Class="STHSW25">PH</th><th Class="STHSW25">FO</th><th Class="STHSW25">PA</th><th Class="STHSW25">SC</th><th Class="STHSW25">DF</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW25">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th Class="STHSW200">Goalie Name</th><th Class="STHSW25">PO</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">SK</th><th Class="STHSW25">DU</th><th Class="STHSW25">EN</th><th Class="STHSW25">SZ</th><th Class="STHSW25">AG</th><th Class="STHSW25">RB</th><th Class="STHSW25">SC</th><th Class="STHSW25">HS</th><th Class="STHSW25">RT</th><th Class="STHSW25">PH</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW35">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_USA"><a id="USA">USA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">USA Page</a> ]
[ <a href="WC-ProTeamRoster.php#USA">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#USA">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#USA">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#USA">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#USA">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#USA">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#USA">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#USA">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#USA">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#USA">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#USA">Team History</a> ]
[ <a href="WC-TeamRecords.php#USA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_USA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_USA" style="display: block;">
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Olivier Madgin</td>
<td class="STHSRoster_Coach">Coach : John Tortorella</td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th Class= "STHSW25">#</th><th Class="STHSW200">Player Name</th><th Class="STHSW10">C</th><th Class="STHSW10">L</th><th Class="STHSW10">R</th><th Class="STHSW10">D</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">CK</th><th Class="STHSW25">FG</th><th Class="STHSW25">DI</th><th Class="STHSW25">SK</th><th Class="STHSW25">ST</th><th Class="STHSW25">EN</th><th Class="STHSW25">DU</th><th Class="STHSW25">PH</th><th Class="STHSW25">FO</th><th Class="STHSW25">PA</th><th Class="STHSW25">SC</th><th Class="STHSW25">DF</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW25">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th Class="STHSW200">Goalie Name</th><th Class="STHSW25">PO</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">SK</th><th Class="STHSW25">DU</th><th Class="STHSW25">EN</th><th Class="STHSW25">SZ</th><th Class="STHSW25">AG</th><th Class="STHSW25">RB</th><th Class="STHSW25">SC</th><th Class="STHSW25">HS</th><th Class="STHSW25">RT</th><th Class="STHSW25">PH</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW35">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_WLD"><a id="WORLD">WORLD</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">WORLD Page</a> ]
[ <a href="WC-ProTeamRoster.php#WORLD">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#WORLD">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#WORLD">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#WORLD">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#WORLD">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#WORLD">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#WORLD">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#WORLD">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#WORLD">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#WORLD">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#WORLD">Team History</a> ]
[ <a href="WC-TeamRecords.php#WORLD">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WORLD');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WORLD" style="display: block;">
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Maxime Bourassa Guillemette</td>
<td class="STHSRoster_Coach">Coach : Bob Hartley</td>
<td class="STHSW120"><b>Morale</b> : 40</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th Class= "STHSW25">#</th><th Class="STHSW200">Player Name</th><th Class="STHSW10">C</th><th Class="STHSW10">L</th><th Class="STHSW10">R</th><th Class="STHSW10">D</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">CK</th><th Class="STHSW25">FG</th><th Class="STHSW25">DI</th><th Class="STHSW25">SK</th><th Class="STHSW25">ST</th><th Class="STHSW25">EN</th><th Class="STHSW25">DU</th><th Class="STHSW25">PH</th><th Class="STHSW25">FO</th><th Class="STHSW25">PA</th><th Class="STHSW25">SC</th><th Class="STHSW25">DF</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW25">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th Class="STHSW200">Goalie Name</th><th Class="STHSW25">PO</th><th Class="STHSW25">CON</th><th Class="STHSW25">IJ</th><th Class="STHSW25">SK</th><th Class="STHSW25">DU</th><th Class="STHSW25">EN</th><th Class="STHSW25">SZ</th><th Class="STHSW25">AG</th><th Class="STHSW25">RB</th><th Class="STHSW25">SC</th><th Class="STHSW25">HS</th><th Class="STHSW25">RT</th><th Class="STHSW25">PH</th><th Class="STHSW25">PS</th><th Class="STHSW25">EX</th><th Class="STHSW25">LD</th><th Class="STHSW25">PO</th><th Class="STHSW25">MO</th><th Class="STHSW25">TA</th><th Class="STHSW25">SP</th><th Class="STHSW25">Age</th><th Class="STHSW35">Contract</th><th Class="STHSW100">Salary Average</th><th Class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<?php include "Footer.php";?>
