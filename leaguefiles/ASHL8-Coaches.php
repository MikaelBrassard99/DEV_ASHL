﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Coaches</title>
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
<h1 class="STHSCoaches_ProCoaches">Pro Coaches</h1>
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); $("table").basictablesorter({headers:{11:{sorter:'thousands'}}});});</script>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>Alain Vigneault (MTL)</td><td>90</td><td>95</td><td>93</td><td>85</td><td>95</td><td>85</td><td>70</td><td>CAN</td><td>57</td><td>2 years</td><td>1 500 000 $</td></tr>
<tr><td>Barry Trotz (ANH)</td><td>90</td><td>94</td><td>90</td><td>92</td><td>99</td><td>89</td><td>70</td><td>CAN</td><td>56</td><td>3 years</td><td>2 510 000 $</td></tr>
<tr><td>Brent Sutter (WSH)</td><td>99</td><td>91</td><td>88</td><td>97</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>56</td><td>1 years</td><td>2 000 000 $</td></tr>
<tr><td>Bruce Boudreau (NSH)</td><td>96</td><td>92</td><td>93</td><td>96</td><td>94</td><td>99</td><td>70</td><td>CAN</td><td>64</td><td>3 years</td><td>2 000 000 $</td></tr>
<tr><td>Bruce Cassidy (NJD)</td><td>90</td><td>85</td><td>83</td><td>85</td><td>75</td><td>75</td><td>70</td><td>CAN</td><td>53</td><td>3 years</td><td>1 500 000 $</td></tr>
<tr><td>Claude Julien (OTT)</td><td>97</td><td>95</td><td>88</td><td>94</td><td>89</td><td>84</td><td>70</td><td>CAN</td><td>58</td><td>1 years</td><td>2 000 000 $</td></tr>
<tr><td>Dale Hunter (MIN)</td><td>90</td><td>90</td><td>85</td><td>80</td><td>80</td><td>85</td><td>70</td><td>CAN</td><td>59</td><td>2 years</td><td>1 000 000 $</td></tr>
<tr><td>Dan Bylsma (PIT)</td><td>99</td><td>92</td><td>90</td><td>91</td><td>77</td><td>82</td><td>70</td><td>USA</td><td>48</td><td>3 years</td><td>2 000 000 $</td></tr>
<tr><td>Darryl Sutter (EDM)</td><td>90</td><td>85</td><td>85</td><td>85</td><td>85</td><td>80</td><td>70</td><td>CAN</td><td>60</td><td>1 years</td><td>1 200 000 $</td></tr>
<tr><td>Dave Tippett (COL)</td><td>75</td><td>92</td><td>88</td><td>80</td><td>97</td><td>96</td><td>70</td><td>CAN</td><td>57</td><td>3 years</td><td>1 500 000 $</td></tr>
<tr><td>Dominique Ducharme (CLB)</td><td>80</td><td>80</td><td>85</td><td>85</td><td>75</td><td>80</td><td>70</td><td>CAN</td><td>46</td><td>5 years</td><td>2 000 000 $</td></tr>
<tr><td>Doug Weight (BOS)</td><td>85</td><td>80</td><td>95</td><td>90</td><td>75</td><td>86</td><td>70</td><td>USA</td><td>47</td><td>1 years</td><td>1 500 000 $</td></tr>
<tr><td>Gerard Gallant (QUE)</td><td>85</td><td>90</td><td>90</td><td>95</td><td>90</td><td>85</td><td>70</td><td>CAN</td><td>56</td><td>2 years</td><td>2 000 000 $</td></tr>
<tr><td>Guy Boucher (LOS)</td><td>80</td><td>95</td><td>85</td><td>85</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>47</td><td>2 years</td><td>700 000 $</td></tr>
<tr><td>Joe Sacco (CAR)</td><td>92</td><td>84</td><td>89</td><td>89</td><td>80</td><td>80</td><td>70</td><td>USA</td><td>49</td><td>3 years</td><td>1 500 000 $</td></tr>
<tr><td>Joel Bouchard (CHI)</td><td>75</td><td>88</td><td>83</td><td>90</td><td>70</td><td>80</td><td>70</td><td>CAN</td><td>45</td><td>2 years</td><td>750 000 $</td></tr>
<tr><td>Joel Quenneville (BUF)</td><td>89</td><td>92</td><td>92</td><td>91</td><td>99</td><td>99</td><td>70</td><td>CAN</td><td>60</td><td>6 years</td><td>3 500 000 $</td></tr>
<tr><td>John Tortorella (NYR)</td><td>99</td><td>94</td><td>88</td><td>94</td><td>99</td><td>94</td><td>70</td><td>USA</td><td>60</td><td>1 years</td><td>1 250 000 $</td></tr>
<tr><td>Jon Cooper (FLA)</td><td>80</td><td>90</td><td>90</td><td>85</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>51</td><td>3 years</td><td>2 000 000 $</td></tr>
<tr><td>Lindy Ruff (SJS)</td><td>85</td><td>92</td><td>90</td><td>85</td><td>99</td><td>96</td><td>70</td><td>CAN</td><td>58</td><td>1 years</td><td>550 000 $</td></tr>
<tr><td>Marc Crawford (ARZ)</td><td>80</td><td>87</td><td>80</td><td>90</td><td>85</td><td>80</td><td>70</td><td>CAN</td><td>56</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Michel Therrien (CGY)</td><td>90</td><td>95</td><td>87</td><td>90</td><td>90</td><td>85</td><td>70</td><td>CAN</td><td>56</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Mike Babcock (DET)</td><td>99</td><td>91</td><td>90</td><td>99</td><td>95</td><td>99</td><td>70</td><td>CAN</td><td>55</td><td>3 years</td><td>2 300 000 $</td></tr>
<tr><td>Mike Sullivan (WPG)</td><td>80</td><td>85</td><td>85</td><td>85</td><td>85</td><td>80</td><td>70</td><td>USA</td><td>49</td><td>2 years</td><td>1 500 000 $</td></tr>
<tr><td>Pascal Vincent (SEA)</td><td>75</td><td>85</td><td>80</td><td>83</td><td>75</td><td>80</td><td>70</td><td>CAN</td><td>46</td><td>3 years</td><td>1 000 000 $</td></tr>
<tr><td>Peter DeBoer (STL)</td><td>75</td><td>95</td><td>95</td><td>99</td><td>80</td><td>75</td><td>70</td><td>CAN</td><td>50</td><td>5 years</td><td>3 600 000 $</td></tr>
<tr><td>Peter Laviolette (PHI)</td><td>99</td><td>95</td><td>90</td><td>95</td><td>95</td><td>99</td><td>70</td><td>USA</td><td>54</td><td>6 years</td><td>2 000 000 $</td></tr>
<tr><td>Randy Carlyle (NYI)</td><td>95</td><td>90</td><td>85</td><td>80</td><td>85</td><td>80</td><td>70</td><td>CAN</td><td>63</td><td>1 years</td><td>1 200 000 $</td></tr>
<tr><td>Ron Wilson (VAN)</td><td>75</td><td>90</td><td>90</td><td>96</td><td>99</td><td>88</td><td>70</td><td>CAN</td><td>63</td><td>2 years</td><td>500 000 $</td></tr>
<tr><td>Ted Nolan (TBL)</td><td>85</td><td>85</td><td>82</td><td>85</td><td>85</td><td>84</td><td>70</td><td>CAN</td><td>61</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Todd McLellan (DAL)</td><td>80</td><td>95</td><td>95</td><td>95</td><td>83</td><td>88</td><td>70</td><td>CAN</td><td>51</td><td>1 years</td><td>1 200 000 $</td></tr>
<tr><td>Todd Richards (TOR)</td><td>80</td><td>90</td><td>95</td><td>95</td><td>80</td><td>75</td><td>70</td><td>USA</td><td>52</td><td>5 years</td><td>2 000 000 $</td></tr>
</table>
<h1 class="STHSCoaches_FarmCoaches">Farm Coaches</h1>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>André Tourigny (RNO)</td><td>80</td><td>80</td><td>75</td><td>80</td><td>75</td><td>80</td><td>70</td><td>CAN</td><td>47</td><td>3 years</td><td>700 000 $</td></tr>
<tr><td>Benoit Groulx (NOR)</td><td>80</td><td>85</td><td>75</td><td>85</td><td>75</td><td>75</td><td>70</td><td>CAN</td><td>52</td><td>2 years</td><td>900 000 $</td></tr>
<tr><td>Bob Hartley (GAT)</td><td>80</td><td>85</td><td>85</td><td>85</td><td>83</td><td>85</td><td>70</td><td>CAN</td><td>59</td><td>2 years</td><td>1 300 000 $</td></tr>
<tr><td>Claude Noel (BNG)</td><td>85</td><td>85</td><td>80</td><td>75</td><td>82</td><td>85</td><td>70</td><td>CAN</td><td>63</td><td>1 years</td><td>900 000 $</td></tr>
<tr><td>Clement Jodoin (TRD)</td><td>75</td><td>85</td><td>75</td><td>80</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>67</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Craig MacTavish (RFD)</td><td>85</td><td>80</td><td>80</td><td>80</td><td>89</td><td>80</td><td>70</td><td>CAN</td><td>60</td><td>2 years</td><td>900 000 $</td></tr>
<tr><td>Dallas Eakins (PEO)</td><td>80</td><td>75</td><td>80</td><td>75</td><td>75</td><td>75</td><td>70</td><td>USA</td><td>51</td><td>1 years</td><td>600 000 $</td></tr>
<tr><td>Dave Cameron (CHA)</td><td>80</td><td>85</td><td>80</td><td>85</td><td>80</td><td>85</td><td>70</td><td>CAN</td><td>60</td><td>2 years</td><td>1 000 000 $</td></tr>
<tr><td>Dave Hakstol (LAV)</td><td>85</td><td>83</td><td>85</td><td>80</td><td>75</td><td>80</td><td>70</td><td>USA</td><td>49</td><td>3 years</td><td>1 200 000 $</td></tr>
<tr><td>Éric Veilleux (CHI)</td><td>80</td><td>75</td><td>77</td><td>80</td><td>70</td><td>71</td><td>70</td><td>CAN</td><td>48</td><td>1 years</td><td>750 000 $</td></tr>
<tr><td>Gilles Bouchard (CHI)</td><td>75</td><td>75</td><td>75</td><td>80</td><td>70</td><td>75</td><td>70</td><td>CAN</td><td>47</td><td>1 years</td><td>750 000 $</td></tr>
<tr><td>Jack Capuano (MIA)</td><td>83</td><td>88</td><td>86</td><td>75</td><td>75</td><td>70</td><td>70</td><td>USA</td><td>52</td><td>3 years</td><td>1 000 000 $</td></tr>
<tr><td>Jeff Daniels (BRI)</td><td>75</td><td>75</td><td>79</td><td>75</td><td>75</td><td>75</td><td>70</td><td>CAN</td><td>50</td><td>1 years</td><td>750 000 $</td></tr>
<tr><td>Jeff Pyle (GRG)</td><td>75</td><td>75</td><td>75</td><td>75</td><td>75</td><td>75</td><td>70</td><td>USA</td><td>60</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>John Stevens (WBS)</td><td>85</td><td>90</td><td>85</td><td>80</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>52</td><td>2 years</td><td>900 000 $</td></tr>
<tr><td>John Torchetti (PRO)</td><td>75</td><td>82</td><td>75</td><td>75</td><td>83</td><td>70</td><td>70</td><td>USA</td><td>54</td><td>1 years</td><td>750 000 $</td></tr>
<tr><td>Ken Gernander (LKE)</td><td>80</td><td>80</td><td>80</td><td>75</td><td>75</td><td>75</td><td>70</td><td>USA</td><td>49</td><td>2 years</td><td>750 000 $</td></tr>
<tr><td>Ken Hitchcock (ADK)</td><td>80</td><td>90</td><td>85</td><td>85</td><td>99</td><td>99</td><td>70</td><td>CAN</td><td>67</td><td>1 years</td><td>1 500 000 $</td></tr>
<tr><td>Kevin Dineen (SAR)</td><td>75</td><td>85</td><td>80</td><td>75</td><td>75</td><td>84</td><td>70</td><td>CAN</td><td>55</td><td>1 years</td><td>750 000 $</td></tr>
<tr><td>Kirk Muller (POR)</td><td>75</td><td>90</td><td>85</td><td>85</td><td>75</td><td>85</td><td>70</td><td>CAN</td><td>52</td><td>4 years</td><td>1 000 000 $</td></tr>
<tr><td>Marco Sturm (LAN)</td><td>74</td><td>80</td><td>80</td><td>90</td><td>75</td><td>85</td><td>70</td><td>GER</td><td>39</td><td>3 years</td><td>1 000 000 $</td></tr>
<tr><td>Mike Yeo (MIL)</td><td>80</td><td>90</td><td>85</td><td>80</td><td>80</td><td>75</td><td>70</td><td>CAN</td><td>44</td><td>1 years</td><td>800 000 $</td></tr>
<tr><td>Patrick Roy (RCH)</td><td>85</td><td>75</td><td>80</td><td>90</td><td>80</td><td>85</td><td>70</td><td>CAN</td><td>54</td><td>3 years</td><td>1 500 000 $</td></tr>
<tr><td>Randy Cunneyworth (MAN)</td><td>75</td><td>85</td><td>75</td><td>70</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>57</td><td>1 years</td><td>800 000 $</td></tr>
<tr><td>Rick Tocchet (SPR)</td><td>85</td><td>85</td><td>90</td><td>80</td><td>75</td><td>80</td><td>70</td><td>CAN</td><td>54</td><td>3 years</td><td>1 500 000 $</td></tr>
<tr><td>Ron Rolston (LVG)</td><td>80</td><td>75</td><td>75</td><td>75</td><td>80</td><td>75</td><td>70</td><td>USA</td><td>52</td><td>1 years</td><td>800 000 $</td></tr>
<tr><td>Roy Sommer (OKC)</td><td>80</td><td>75</td><td>80</td><td>75</td><td>90</td><td>75</td><td>70</td><td>USA</td><td>61</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Saku Koivu (ROB)</td><td>70</td><td>70</td><td>85</td><td>80</td><td>60</td><td>75</td><td>70</td><td>FIN</td><td>43</td><td>1 years</td><td>750 000 $</td></tr>
<tr><td>Ted Dent (ALB)</td><td>99</td><td>75</td><td>75</td><td>70</td><td>70</td><td>70</td><td>70</td><td>CAN</td><td>49</td><td>1 years</td><td>800 000 $</td></tr>
<tr><td>Todd Nelson (JOL)</td><td>75</td><td>75</td><td>75</td><td>75</td><td>75</td><td>75</td><td>70</td><td>CAN</td><td>49</td><td>1 years</td><td>800 000 $</td></tr>
<tr><td>Tom Renney (HOU)</td><td>80</td><td>75</td><td>80</td><td>75</td><td>90</td><td>75</td><td>70</td><td>CAN</td><td>63</td><td>2 years</td><td>600 000 $</td></tr>
<tr><td>Willie Desjardins (CTW)</td><td>80</td><td>85</td><td>85</td><td>85</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>60</td><td>1 years</td><td>650 000 $</td></tr>
</table>
<h1 class="STHSCoaches_AvailableCoaches">Available Coaches</h1>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>Dean Blais</td><td>80</td><td>80</td><td>70</td><td>80</td><td>75</td><td>80</td><td>70</td><td>USA</td><td>68</td><td>0 year</td><td>800 000 $</td></tr>
<tr><td>Derek Laxdal</td><td>75</td><td>75</td><td>80</td><td>80</td><td>70</td><td>70</td><td>70</td><td>CAN</td><td>54</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Glen Gulutzan</td><td>75</td><td>85</td><td>81</td><td>75</td><td>75</td><td>75</td><td>70</td><td>CAN</td><td>47</td><td>0 year</td><td>850 000 $</td></tr>
<tr><td>J.J. Daigneault</td><td>70</td><td>90</td><td>70</td><td>80</td><td>75</td><td>75</td><td>70</td><td>CAN</td><td>54</td><td>2 years</td><td>750 000 $</td></tr>
<tr><td>John Anderson</td><td>85</td><td>85</td><td>83</td><td>85</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>63</td><td>0 year</td><td>850 000 $</td></tr>
<tr><td>John Hynes</td><td>75</td><td>75</td><td>85</td><td>85</td><td>75</td><td>80</td><td>70</td><td>USA</td><td>42</td><td>2 years</td><td>750 000 $</td></tr>
<tr><td>Mike Keenan</td><td>80</td><td>85</td><td>80</td><td>83</td><td>90</td><td>80</td><td>70</td><td>CAN</td><td>71</td><td>0 year</td><td>750 000 $</td></tr>
<tr><td>Paul MacLean</td><td>99</td><td>75</td><td>80</td><td>75</td><td>84</td><td>76</td><td>70</td><td>FRA</td><td>60</td><td>1 years</td><td>700 000 $</td></tr>
</table>
<?php include "Footer.php";?>
