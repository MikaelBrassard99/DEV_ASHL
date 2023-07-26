<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Coaches</title>
<script src="ASHL11-PRE.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL11-STHS.db - ASHL11-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL11-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL11-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<h1 class="STHSCoaches_ProCoaches">Pro Coaches</h1>
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); $("table").basictablesorter({headers:{11:{sorter:'thousands'}}});});</script>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>Alain Vigneault (ANH)</td><td>87</td><td>87</td><td>86</td><td>86</td><td>88</td><td>90</td><td>70</td><td>CAN</td><td>60</td><td>2 years</td><td>2 000 000 $</td></tr>
<tr><td>André Tourigny (SJS)</td><td>81</td><td>83</td><td>83</td><td>82</td><td>79</td><td>83</td><td>70</td><td>CAN</td><td>47</td><td>4 years</td><td>2 500 000 $</td></tr>
<tr><td>Barry Trotz (FLA)</td><td>86</td><td>93</td><td>85</td><td>95</td><td>93</td><td>90</td><td>70</td><td>CAN</td><td>58</td><td>4 years</td><td>4 000 000 $</td></tr>
<tr><td>Brent Sutter (WSH)</td><td>82</td><td>83</td><td>79</td><td>85</td><td>83</td><td>77</td><td>70</td><td>CAN</td><td>59</td><td>2 years</td><td>2 300 000 $</td></tr>
<tr><td>Bruce Boudreau (WPG)</td><td>86</td><td>83</td><td>85</td><td>83</td><td>88</td><td>82</td><td>70</td><td>CAN</td><td>66</td><td>3 years</td><td>2 250 000 $</td></tr>
<tr><td>Claude Julien (CGY)</td><td>85</td><td>88</td><td>82</td><td>85</td><td>90</td><td>87</td><td>70</td><td>CAN</td><td>61</td><td>1 years</td><td>3 000 000 $</td></tr>
<tr><td>D.J. Smith (DET)</td><td>84</td><td>86</td><td>83</td><td>83</td><td>77</td><td>80</td><td>70</td><td>CAN</td><td>44</td><td>2 years</td><td>2 000 000 $</td></tr>
<tr><td>Dale Hunter (MIN)</td><td>88</td><td>80</td><td>78</td><td>77</td><td>82</td><td>82</td><td>70</td><td>CAN</td><td>60</td><td>1 years</td><td>1 200 000 $</td></tr>
<tr><td>Darryl Sutter (VAN)</td><td>90</td><td>88</td><td>84</td><td>86</td><td>94</td><td>87</td><td>70</td><td>CAN</td><td>62</td><td>2 years</td><td>2 100 000 $</td></tr>
<tr><td>Dave Tippett (COL)</td><td>83</td><td>93</td><td>85</td><td>86</td><td>90</td><td>91</td><td>70</td><td>CAN</td><td>59</td><td>4 years</td><td>3 500 000 $</td></tr>
<tr><td>Dominique Ducharme (CLB)</td><td>84</td><td>83</td><td>83</td><td>83</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>48</td><td>2 years</td><td>2 000 000 $</td></tr>
<tr><td>Gerard Gallant (QUE)</td><td>84</td><td>84</td><td>86</td><td>83</td><td>87</td><td>85</td><td>70</td><td>CAN</td><td>57</td><td>2 years</td><td>2 500 000 $</td></tr>
<tr><td>Guy Boucher (LOS)</td><td>81</td><td>89</td><td>82</td><td>84</td><td>84</td><td>83</td><td>70</td><td>CAN</td><td>49</td><td>1 years</td><td>2 000 000 $</td></tr>
<tr><td>Jared Bednar (VEG)</td><td>83</td><td>86</td><td>90</td><td>85</td><td>87</td><td>86</td><td>70</td><td>CAN</td><td>49</td><td>2 years</td><td>2 000 000 $</td></tr>
<tr><td>Joel Bouchard (CHI)</td><td>78</td><td>79</td><td>78</td><td>80</td><td>75</td><td>81</td><td>70</td><td>CAN</td><td>47</td><td>2 years</td><td>1 500 000 $</td></tr>
<tr><td>Joel Quenneville (PIT)</td><td>86</td><td>91</td><td>89</td><td>90</td><td>94</td><td>92</td><td>70</td><td>CAN</td><td>62</td><td>3 years</td><td>3 500 000 $</td></tr>
<tr><td>John Tortorella (NYR)</td><td>88</td><td>88</td><td>86</td><td>92</td><td>89</td><td>83</td><td>70</td><td>USA</td><td>63</td><td>1 years</td><td>2 250 000 $</td></tr>
<tr><td>Jon Cooper (NJD)</td><td>84</td><td>92</td><td>93</td><td>90</td><td>90</td><td>94</td><td>70</td><td>CAN</td><td>53</td><td>4 years</td><td>4 000 000 $</td></tr>
<tr><td>Ken Hitchcock (EDM)</td><td>82</td><td>88</td><td>82</td><td>86</td><td>88</td><td>85</td><td>70</td><td>CAN</td><td>69</td><td>1 years</td><td>2 500 000 $</td></tr>
<tr><td>Kirk Muller (NYI)</td><td>81</td><td>85</td><td>83</td><td>81</td><td>80</td><td>83</td><td>70</td><td>CAN</td><td>55</td><td>2 years</td><td>2 000 000 $</td></tr>
<tr><td>Lindy Ruff (BOS)</td><td>83</td><td>88</td><td>86</td><td>85</td><td>92</td><td>87</td><td>70</td><td>CAN</td><td>61</td><td>4 years</td><td>3 000 000 $</td></tr>
<tr><td>Michel Therrien (OTT)</td><td>85</td><td>83</td><td>81</td><td>82</td><td>85</td><td>83</td><td>70</td><td>CAN</td><td>57</td><td>3 years</td><td>2 000 000 $</td></tr>
<tr><td>Mike Babcock (BUF)</td><td>82</td><td>85</td><td>84</td><td>82</td><td>93</td><td>80</td><td>70</td><td>CAN</td><td>58</td><td>2 years</td><td>1 750 000 $</td></tr>
<tr><td>Mike Yeo (DAL)</td><td>80</td><td>83</td><td>82</td><td>81</td><td>82</td><td>82</td><td>70</td><td>CAN</td><td>47</td><td>1 years</td><td>2 000 000 $</td></tr>
<tr><td>Pascal Vincent (MTL)</td><td>80</td><td>79</td><td>83</td><td>83</td><td>80</td><td>83</td><td>70</td><td>CAN</td><td>49</td><td>3 years</td><td>2 250 000 $</td></tr>
<tr><td>Patrick Roy (CAR)</td><td>86</td><td>80</td><td>82</td><td>81</td><td>80</td><td>85</td><td>70</td><td>CAN</td><td>55</td><td>4 years</td><td>2 000 000 $</td></tr>
<tr><td>Peter DeBoer (STL)</td><td>88</td><td>88</td><td>87</td><td>86</td><td>86</td><td>84</td><td>70</td><td>CAN</td><td>53</td><td>2 years</td><td>3 600 000 $</td></tr>
<tr><td>Peter Laviolette (PHI)</td><td>86</td><td>88</td><td>85</td><td>85</td><td>88</td><td>85</td><td>70</td><td>USA</td><td>56</td><td>3 years</td><td>2 000 000 $</td></tr>
<tr><td>Rick Tocchet (NSH)</td><td>83</td><td>85</td><td>87</td><td>82</td><td>84</td><td>86</td><td>70</td><td>CAN</td><td>57</td><td>2 years</td><td>2 000 000 $</td></tr>
<tr><td>Rod Brind'Amour (SEA)</td><td>84</td><td>88</td><td>87</td><td>87</td><td>84</td><td>88</td><td>70</td><td>CAN</td><td>50</td><td>1 years</td><td>2 000 000 $</td></tr>
<tr><td>Ron Wilson (ARZ)</td><td>83</td><td>82</td><td>81</td><td>82</td><td>86</td><td>84</td><td>70</td><td>CAN</td><td>66</td><td>1 years</td><td>2 500 000 $</td></tr>
<tr><td>Todd McLellan (TBL)</td><td>86</td><td>87</td><td>86</td><td>85</td><td>86</td><td>86</td><td>70</td><td>CAN</td><td>53</td><td>3 years</td><td>5 000 000 $</td></tr>
<tr><td>Todd Richards (TOR)</td><td>84</td><td>83</td><td>84</td><td>82</td><td>83</td><td>83</td><td>70</td><td>USA</td><td>54</td><td>2 years</td><td>2 000 000 $</td></tr>
</table>
<h1 class="STHSCoaches_FarmCoaches">Farm Coaches</h1>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>Alexandre Burrows (MIH)</td><td>82</td><td>74</td><td>72</td><td>68</td><td>67</td><td>75</td><td>70</td><td>CAN</td><td>40</td><td>2 years</td><td>750 000 $</td></tr>
<tr><td>Benoit Groulx (LKE)</td><td>77</td><td>78</td><td>78</td><td>79</td><td>78</td><td>80</td><td>70</td><td>CAN</td><td>53</td><td>2 years</td><td>950 000 $</td></tr>
<tr><td>Bob Hartley (GAT)</td><td>82</td><td>82</td><td>86</td><td>85</td><td>90</td><td>90</td><td>70</td><td>CAN</td><td>60</td><td>1 years</td><td>1 500 000 $</td></tr>
<tr><td>Bruce Cassidy (LAV)</td><td>87</td><td>83</td><td>83</td><td>82</td><td>83</td><td>80</td><td>70</td><td>CAN</td><td>56</td><td>3 years</td><td>1 000 000 $</td></tr>
<tr><td>Craig Berube (PEO)</td><td>89</td><td>88</td><td>86</td><td>83</td><td>85</td><td>88</td><td>70</td><td>CAN</td><td>55</td><td>1 years</td><td>1 500 000 $</td></tr>
<tr><td>Craig MacTavish (RFD)</td><td>79</td><td>77</td><td>76</td><td>77</td><td>85</td><td>81</td><td>70</td><td>CAN</td><td>62</td><td>2 years</td><td>975 000 $</td></tr>
<tr><td>Dallas Eakins (SPR)</td><td>82</td><td>82</td><td>83</td><td>82</td><td>81</td><td>81</td><td>70</td><td>USA</td><td>54</td><td>3 years</td><td>1 100 000 $</td></tr>
<tr><td>Dave Hakstol (CTW)</td><td>83</td><td>84</td><td>82</td><td>82</td><td>84</td><td>82</td><td>70</td><td>USA</td><td>52</td><td>3 years</td><td>1 200 000 $</td></tr>
<tr><td>Éric Veilleux (CHI)</td><td>77</td><td>74</td><td>75</td><td>77</td><td>73</td><td>78</td><td>70</td><td>CAN</td><td>49</td><td>1 years</td><td>850 000 $</td></tr>
<tr><td>Gilles Bouchard (TRL)</td><td>76</td><td>76</td><td>78</td><td>77</td><td>73</td><td>78</td><td>70</td><td>CAN</td><td>50</td><td>3 years</td><td>750 000 $</td></tr>
<tr><td>Glen Gulutzan (NUN)</td><td>80</td><td>82</td><td>81</td><td>80</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>49</td><td>1 years</td><td>1 200 000 $</td></tr>
<tr><td>Jeremy Colliton (RCH)</td><td>81</td><td>88</td><td>86</td><td>87</td><td>82</td><td>84</td><td>70</td><td>CAN</td><td>36</td><td>1 years</td><td>750 000 $</td></tr>
<tr><td>John Hynes (BNG)</td><td>83</td><td>86</td><td>84</td><td>83</td><td>84</td><td>82</td><td>70</td><td>USA</td><td>46</td><td>1 years</td><td>900 000 $</td></tr>
<tr><td>John Stevens (CHA)</td><td>84</td><td>82</td><td>81</td><td>80</td><td>83</td><td>80</td><td>70</td><td>CAN</td><td>55</td><td>1 years</td><td>900 000 $</td></tr>
<tr><td>John Torchetti (PRO)</td><td>78</td><td>78</td><td>77</td><td>77</td><td>78</td><td>77</td><td>70</td><td>USA</td><td>57</td><td>1 years</td><td>750 000 $</td></tr>
<tr><td>Kevin Dineen (OKC)</td><td>82</td><td>84</td><td>80</td><td>81</td><td>80</td><td>84</td><td>70</td><td>CAN</td><td>57</td><td>1 years</td><td>900 000 $</td></tr>
<tr><td>Marc Crawford (NUU)</td><td>83</td><td>84</td><td>82</td><td>83</td><td>86</td><td>82</td><td>70</td><td>CAN</td><td>60</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Mario Pouliot (BRI)</td><td>79</td><td>76</td><td>78</td><td>77</td><td>73</td><td>77</td><td>70</td><td>CAN</td><td>57</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Mike Sullivan (WBS)</td><td>83</td><td>83</td><td>87</td><td>84</td><td>85</td><td>83</td><td>70</td><td>USA</td><td>53</td><td>2 years</td><td>1 700 000 $</td></tr>
<tr><td>Mike Vellucci (GRG)</td><td>78</td><td>82</td><td>80</td><td>79</td><td>80</td><td>80</td><td>70</td><td>USA</td><td>54</td><td>1 years</td><td>750 000 $</td></tr>
<tr><td>Patrice Bosch (HOU)</td><td>73</td><td>67</td><td>68</td><td>70</td><td>65</td><td>65</td><td>70</td><td>CAN</td><td>49</td><td>3 years</td><td>900 000 $</td></tr>
<tr><td>Paul MacLean (ALB)</td><td>85</td><td>86</td><td>80</td><td>81</td><td>86</td><td>83</td><td>70</td><td>FRA</td><td>63</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Randy Carlyle (JOL)</td><td>87</td><td>84</td><td>81</td><td>80</td><td>83</td><td>83</td><td>70</td><td>CAN</td><td>65</td><td>2 years</td><td>1 500 000 $</td></tr>
<tr><td>Roberto Luongo (SAR)</td><td>78</td><td>78</td><td>76</td><td>76</td><td>78</td><td>82</td><td>70</td><td>CAN</td><td>42</td><td>3 years</td><td>950 000 $</td></tr>
<tr><td>Saku Koivu (ROB)</td><td>72</td><td>74</td><td>79</td><td>80</td><td>72</td><td>77</td><td>70</td><td>FIN</td><td>46</td><td>1 years</td><td>900 000 $</td></tr>
<tr><td>Sheldon Keefe (MIL)</td><td>81</td><td>82</td><td>85</td><td>83</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>40</td><td>3 years</td><td>1 000 000 $</td></tr>
<tr><td>Ted Nolan (MAN)</td><td>83</td><td>81</td><td>82</td><td>81</td><td>84</td><td>85</td><td>70</td><td>CAN</td><td>63</td><td>1 years</td><td>1 500 000 $</td></tr>
<tr><td>Todd Reirden (CHI)</td><td>81</td><td>83</td><td>82</td><td>80</td><td>82</td><td>82</td><td>70</td><td>USA</td><td>50</td><td>1 years</td><td>750 000 $</td></tr>
<tr><td>Valeri Bragin (CCC)</td><td>72</td><td>83</td><td>82</td><td>85</td><td>78</td><td>83</td><td>70</td><td>RUS</td><td>65</td><td>2 years</td><td>1 000 000 $</td></tr>
<tr><td>Willie Desjardins (PAR)</td><td>83</td><td>82</td><td>81</td><td>82</td><td>82</td><td>82</td><td>70</td><td>CAN</td><td>64</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Yannick Jean (RNO)</td><td>75</td><td>77</td><td>78</td><td>77</td><td>73</td><td>77</td><td>70</td><td>CAN</td><td>45</td><td>3 years</td><td>750 000 $</td></tr>
</table>
<h1 class="STHSCoaches_AvailableCoaches">Available Coaches</h1>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>Claude Noel</td><td>78</td><td>78</td><td>76</td><td>80</td><td>80</td><td>79</td><td>70</td><td>CAN</td><td>65</td><td>0 year</td><td>950 000 $</td></tr>
<tr><td>Clement Jodoin</td><td>74</td><td>76</td><td>74</td><td>77</td><td>82</td><td>83</td><td>70</td><td>CAN</td><td>69</td><td>0 year</td><td>500 000 $</td></tr>
<tr><td>Dan Bylsma</td><td>79</td><td>81</td><td>83</td><td>80</td><td>88</td><td>86</td><td>70</td><td>USA</td><td>50</td><td>0 year</td><td>2 000 000 $</td></tr>
<tr><td>Dave Cameron</td><td>78</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>62</td><td>0 year</td><td>1 000 000 $</td></tr>
<tr><td>Doug Weight</td><td>82</td><td>83</td><td>82</td><td>81</td><td>78</td><td>84</td><td>70</td><td>USA</td><td>50</td><td>1 years</td><td>2 500 000 $</td></tr>
<tr><td>J.J. Daigneault</td><td>75</td><td>82</td><td>73</td><td>75</td><td>75</td><td>77</td><td>70</td><td>CAN</td><td>55</td><td>0 year</td><td>750 000 $</td></tr>
<tr><td>Jack Capuano</td><td>82</td><td>84</td><td>82</td><td>80</td><td>82</td><td>81</td><td>70</td><td>USA</td><td>55</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Joe Sacco</td><td>80</td><td>80</td><td>82</td><td>82</td><td>81</td><td>81</td><td>70</td><td>USA</td><td>52</td><td>1 years</td><td>1 500 000 $</td></tr>
<tr><td>John Anderson</td><td>77</td><td>78</td><td>78</td><td>77</td><td>82</td><td>80</td><td>70</td><td>CAN</td><td>64</td><td>1 years</td><td>850 000 $</td></tr>
<tr><td>Marco Sturm</td><td>77</td><td>83</td><td>82</td><td>80</td><td>76</td><td>80</td><td>70</td><td>GER</td><td>42</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Tom Renney</td><td>80</td><td>81</td><td>81</td><td>83</td><td>87</td><td>85</td><td>70</td><td>CAN</td><td>66</td><td>1 years</td><td>1 000 000 $</td></tr>
</table>
<?php include "Footer.php";?>
