<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Coaches</title>
<script src="WC-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - WC-STHS.bin - WC-STHSCareerStat.bin"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<h1 class="STHSCoaches_ProCoaches">Pro Coaches</h1>
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); $("table").basictablesorter({headers:{11:{sorter:'thousands'}}});});</script>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>Barry Trotz (DAN)</td><td>86</td><td>93</td><td>85</td><td>95</td><td>93</td><td>90</td><td>70</td><td>CAN</td><td>61</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Bob Hartley (WLD)</td><td>82</td><td>82</td><td>86</td><td>85</td><td>90</td><td>90</td><td>70</td><td>CAN</td><td>63</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Gilles Bouchard (LET)</td><td>76</td><td>76</td><td>78</td><td>77</td><td>73</td><td>78</td><td>70</td><td>CAN</td><td>53</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Igor Larionov (RUS)</td><td>71</td><td>81</td><td>81</td><td>85</td><td>85</td><td>84</td><td>70</td><td>RUS</td><td>63</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Joel Quenneville (SWE)</td><td>86</td><td>91</td><td>89</td><td>90</td><td>94</td><td>92</td><td>70</td><td>CAN</td><td>65</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>John Tortorella (USA)</td><td>88</td><td>88</td><td>86</td><td>92</td><td>89</td><td>83</td><td>70</td><td>USA</td><td>66</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Jon Cooper (CAN)</td><td>84</td><td>92</td><td>93</td><td>90</td><td>90</td><td>94</td><td>70</td><td>CAN</td><td>56</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Jukka Jalonen (FIN)</td><td>78</td><td>81</td><td>80</td><td>81</td><td>82</td><td>82</td><td>70</td><td>FIN</td><td>61</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Martin St-Louis (CZE)</td><td>76</td><td>78</td><td>85</td><td>80</td><td>70</td><td>85</td><td>70</td><td>CAN</td><td>49</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Peter Stastny (SVK)</td><td>72</td><td>72</td><td>82</td><td>75</td><td>82</td><td>81</td><td>70</td><td>SVK</td><td>66</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Reto von Arx (SWI)</td><td>70</td><td>75</td><td>78</td><td>83</td><td>70</td><td>76</td><td>70</td><td>SWI</td><td>46</td><td>1 years</td><td>500 000 $</td></tr>
<tr><td>Uwe Krupp (GER)</td><td>81</td><td>83</td><td>76</td><td>78</td><td>82</td><td>84</td><td>70</td><td>GER</td><td>58</td><td>1 years</td><td>500 000 $</td></tr>
</table>
<h1 class="STHSCoaches_FarmCoaches">Farm Coaches</h1>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tbody></tbody>
</table>
<h1 class="STHSCoaches_AvailableCoaches">Available Coaches</h1>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>Alain Vigneault</td><td>87</td><td>87</td><td>86</td><td>86</td><td>88</td><td>90</td><td>70</td><td>CAN</td><td>63</td><td>2 years</td><td>2 500 000 $</td></tr>
<tr><td>Alexandre Burrows</td><td>81</td><td>74</td><td>72</td><td>68</td><td>67</td><td>75</td><td>70</td><td>CAN</td><td>43</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Andrew Brunette</td><td>82</td><td>84</td><td>84</td><td>83</td><td>80</td><td>84</td><td>70</td><td>CAN</td><td>51</td><td>1 years</td><td>1 500 000 $</td></tr>
<tr><td>Benoit Groulx</td><td>77</td><td>78</td><td>78</td><td>79</td><td>78</td><td>80</td><td>70</td><td>CAN</td><td>56</td><td>0 year</td><td>950 000 $</td></tr>
<tr><td>Brent Sutter</td><td>82</td><td>83</td><td>79</td><td>85</td><td>83</td><td>77</td><td>70</td><td>CAN</td><td>62</td><td>0 year</td><td>2 300 000 $</td></tr>
<tr><td>Bruce Boudreau</td><td>86</td><td>83</td><td>85</td><td>83</td><td>88</td><td>82</td><td>70</td><td>CAN</td><td>69</td><td>2 years</td><td>2 500 000 $</td></tr>
<tr><td>Bruce Cassidy</td><td>87</td><td>83</td><td>83</td><td>82</td><td>83</td><td>80</td><td>70</td><td>CAN</td><td>59</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Claude Julien</td><td>85</td><td>88</td><td>82</td><td>85</td><td>90</td><td>87</td><td>70</td><td>CAN</td><td>64</td><td>1 years</td><td>3 000 000 $</td></tr>
<tr><td>Claude Noel</td><td>78</td><td>78</td><td>76</td><td>80</td><td>80</td><td>79</td><td>70</td><td>CAN</td><td>68</td><td>3 years</td><td>950 000 $</td></tr>
<tr><td>Clement Jodoin</td><td>74</td><td>76</td><td>74</td><td>77</td><td>82</td><td>83</td><td>70</td><td>CAN</td><td>72</td><td>0 year</td><td>500 000 $</td></tr>
<tr><td>Craig Berube</td><td>89</td><td>88</td><td>86</td><td>83</td><td>85</td><td>88</td><td>70</td><td>CAN</td><td>58</td><td>3 years</td><td>3 000 000 $</td></tr>
<tr><td>Craig MacTavish</td><td>79</td><td>77</td><td>76</td><td>77</td><td>85</td><td>81</td><td>70</td><td>CAN</td><td>65</td><td>2 years</td><td>975 000 $</td></tr>
<tr><td>D.J. Smith</td><td>84</td><td>86</td><td>83</td><td>83</td><td>77</td><td>80</td><td>70</td><td>CAN</td><td>47</td><td>3 years</td><td>2 000 000 $</td></tr>
<tr><td>Dale Hunter</td><td>88</td><td>80</td><td>78</td><td>77</td><td>82</td><td>82</td><td>70</td><td>CAN</td><td>63</td><td>2 years</td><td>900 000 $</td></tr>
<tr><td>Dallas Eakins</td><td>82</td><td>82</td><td>83</td><td>82</td><td>81</td><td>81</td><td>70</td><td>USA</td><td>57</td><td>1 years</td><td>1 100 000 $</td></tr>
<tr><td>Dan Bylsma</td><td>79</td><td>81</td><td>83</td><td>80</td><td>88</td><td>86</td><td>70</td><td>USA</td><td>53</td><td>1 years</td><td>2 000 000 $</td></tr>
<tr><td>Darryl Sutter</td><td>90</td><td>88</td><td>84</td><td>86</td><td>94</td><td>87</td><td>70</td><td>CAN</td><td>65</td><td>3 years</td><td>2 200 000 $</td></tr>
<tr><td>Dave Cameron</td><td>78</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>65</td><td>0 year</td><td>1 000 000 $</td></tr>
<tr><td>Dave Hakstol</td><td>83</td><td>84</td><td>82</td><td>82</td><td>84</td><td>82</td><td>70</td><td>USA</td><td>55</td><td>1 years</td><td>1 200 000 $</td></tr>
<tr><td>Dave Tippett</td><td>83</td><td>93</td><td>85</td><td>86</td><td>90</td><td>91</td><td>70</td><td>CAN</td><td>62</td><td>3 years</td><td>3 500 000 $</td></tr>
<tr><td>Dean Evason</td><td>82</td><td>82</td><td>84</td><td>83</td><td>82</td><td>80</td><td>70</td><td>CAN</td><td>60</td><td>2 years</td><td>2 000 000 $</td></tr>
<tr><td>Dominique Ducharme</td><td>84</td><td>83</td><td>83</td><td>83</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>51</td><td>3 years</td><td>3 500 000 $</td></tr>
<tr><td>Don Granato</td><td>82</td><td>81</td><td>83</td><td>82</td><td>75</td><td>82</td><td>70</td><td>USA</td><td>57</td><td>1 years</td><td>1 250 000 $</td></tr>
<tr><td>Doug Weight</td><td>82</td><td>83</td><td>82</td><td>81</td><td>78</td><td>84</td><td>70</td><td>USA</td><td>53</td><td>1 years</td><td>2 000 000 $</td></tr>
<tr><td>Gerard Gallant</td><td>84</td><td>84</td><td>86</td><td>83</td><td>87</td><td>85</td><td>70</td><td>CAN</td><td>60</td><td>6 years</td><td>3 500 000 $</td></tr>
<tr><td>Glen Gulutzan</td><td>80</td><td>82</td><td>81</td><td>80</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>52</td><td>1 years</td><td>1 200 000 $</td></tr>
<tr><td>Guy Boucher</td><td>81</td><td>89</td><td>82</td><td>84</td><td>84</td><td>83</td><td>70</td><td>CAN</td><td>52</td><td>2 years</td><td>2 500 000 $</td></tr>
<tr><td>J.J. Daigneault</td><td>75</td><td>82</td><td>73</td><td>75</td><td>75</td><td>77</td><td>70</td><td>CAN</td><td>58</td><td>0 year</td><td>750 000 $</td></tr>
<tr><td>Jack Capuano</td><td>82</td><td>84</td><td>82</td><td>80</td><td>82</td><td>81</td><td>70</td><td>USA</td><td>58</td><td>1 years</td><td>1 250 000 $</td></tr>
<tr><td>Jared Bednar</td><td>83</td><td>86</td><td>90</td><td>85</td><td>87</td><td>86</td><td>70</td><td>CAN</td><td>52</td><td>3 years</td><td>3 000 000 $</td></tr>
<tr><td>Jay Woodcroft</td><td>81</td><td>82</td><td>87</td><td>81</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>47</td><td>1 years</td><td>2 500 000 $</td></tr>
<tr><td>Jeremy Colliton</td><td>81</td><td>88</td><td>86</td><td>87</td><td>82</td><td>84</td><td>70</td><td>CAN</td><td>39</td><td>5 years</td><td>3 500 000 $</td></tr>
<tr><td>Jim Montgomery</td><td>86</td><td>89</td><td>86</td><td>89</td><td>87</td><td>85</td><td>50</td><td>CAN</td><td>53</td><td>4 years</td><td>3 500 000 $</td></tr>
<tr><td>Joe Sacco</td><td>80</td><td>80</td><td>82</td><td>82</td><td>81</td><td>81</td><td>70</td><td>USA</td><td>55</td><td>2 years</td><td>1 600 000 $</td></tr>
<tr><td>Joel Bouchard</td><td>78</td><td>79</td><td>78</td><td>80</td><td>75</td><td>81</td><td>70</td><td>CAN</td><td>50</td><td>2 years</td><td>1 500 000 $</td></tr>
<tr><td>John Anderson</td><td>77</td><td>78</td><td>78</td><td>77</td><td>82</td><td>80</td><td>70</td><td>CAN</td><td>67</td><td>1 years</td><td>850 000 $</td></tr>
<tr><td>John Hynes</td><td>83</td><td>86</td><td>84</td><td>83</td><td>84</td><td>82</td><td>70</td><td>USA</td><td>49</td><td>2 years</td><td>1 600 000 $</td></tr>
<tr><td>John Stevens</td><td>84</td><td>82</td><td>81</td><td>80</td><td>83</td><td>80</td><td>70</td><td>CAN</td><td>58</td><td>2 years</td><td>1 000 000 $</td></tr>
<tr><td>John Torchetti</td><td>78</td><td>78</td><td>77</td><td>77</td><td>78</td><td>77</td><td>70</td><td>USA</td><td>60</td><td>0 year</td><td>750 000 $</td></tr>
<tr><td>Ken Hitchcock</td><td>82</td><td>88</td><td>82</td><td>86</td><td>88</td><td>85</td><td>70</td><td>CAN</td><td>72</td><td>2 years</td><td>1 500 000 $</td></tr>
<tr><td>Kevin Dineen</td><td>82</td><td>84</td><td>80</td><td>81</td><td>80</td><td>84</td><td>70</td><td>CAN</td><td>60</td><td>2 years</td><td>1 500 000 $</td></tr>
<tr><td>Kirk Muller</td><td>81</td><td>85</td><td>83</td><td>81</td><td>80</td><td>83</td><td>70</td><td>CAN</td><td>58</td><td>1 years</td><td>2 000 000 $</td></tr>
<tr><td>Lane Lambert</td><td>88</td><td>84</td><td>81</td><td>83</td><td>80</td><td>83</td><td>70</td><td>CAN</td><td>58</td><td>2 years</td><td>1 500 000 $</td></tr>
<tr><td>Lindy Ruff</td><td>83</td><td>88</td><td>86</td><td>85</td><td>92</td><td>87</td><td>70</td><td>CAN</td><td>64</td><td>2 years</td><td>3 000 000 $</td></tr>
<tr><td>Luke Richardson</td><td>87</td><td>86</td><td>78</td><td>83</td><td>80</td><td>85</td><td>70</td><td>CAN</td><td>54</td><td>2 years</td><td>1 000 000 $</td></tr>
<tr><td>Marc Crawford</td><td>83</td><td>84</td><td>82</td><td>83</td><td>86</td><td>82</td><td>70</td><td>CAN</td><td>63</td><td>2 years</td><td>1 500 000 $</td></tr>
<tr><td>Marco Sturm</td><td>77</td><td>83</td><td>82</td><td>80</td><td>76</td><td>80</td><td>70</td><td>GER</td><td>45</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Mario Pouliot</td><td>79</td><td>76</td><td>78</td><td>77</td><td>73</td><td>77</td><td>70</td><td>CAN</td><td>60</td><td>0 year</td><td>1 000 000 $</td></tr>
<tr><td>Mark French</td><td>78</td><td>78</td><td>78</td><td>81</td><td>77</td><td>81</td><td>70</td><td>CAN</td><td>53</td><td>0 year</td><td>500 000 $</td></tr>
<tr><td>Michel Therrien</td><td>85</td><td>83</td><td>81</td><td>82</td><td>85</td><td>83</td><td>70</td><td>CAN</td><td>60</td><td>2 years</td><td>2 000 000 $</td></tr>
<tr><td>Mike Babcock</td><td>82</td><td>85</td><td>84</td><td>82</td><td>93</td><td>80</td><td>70</td><td>CAN</td><td>61</td><td>1 years</td><td>2 500 000 $</td></tr>
<tr><td>Mike Sullivan</td><td>83</td><td>83</td><td>87</td><td>84</td><td>85</td><td>83</td><td>70</td><td>USA</td><td>56</td><td>3 years</td><td>2 500 000 $</td></tr>
<tr><td>Mike Vellucci</td><td>78</td><td>82</td><td>80</td><td>79</td><td>80</td><td>80</td><td>70</td><td>USA</td><td>57</td><td>0 year</td><td>750 000 $</td></tr>
<tr><td>Mike Yeo</td><td>80</td><td>83</td><td>82</td><td>81</td><td>82</td><td>82</td><td>70</td><td>CAN</td><td>50</td><td>0 year</td><td>1 000 000 $</td></tr>
<tr><td>Pascal Vincent</td><td>80</td><td>79</td><td>83</td><td>83</td><td>80</td><td>83</td><td>70</td><td>CAN</td><td>52</td><td>1 years</td><td>2 250 000 $</td></tr>
<tr><td>Patrice Bosch</td><td>73</td><td>67</td><td>68</td><td>70</td><td>65</td><td>65</td><td>70</td><td>CAN</td><td>52</td><td>1 years</td><td>900 000 $</td></tr>
<tr><td>Patrick Roy</td><td>86</td><td>80</td><td>82</td><td>81</td><td>80</td><td>85</td><td>70</td><td>CAN</td><td>58</td><td>3 years</td><td>2 500 000 $</td></tr>
<tr><td>Paul MacLean</td><td>85</td><td>86</td><td>80</td><td>81</td><td>86</td><td>83</td><td>70</td><td>FRA</td><td>66</td><td>2 years</td><td>1 500 000 $</td></tr>
<tr><td>Paul Maurice</td><td>88</td><td>86</td><td>86</td><td>86</td><td>88</td><td>89</td><td>79</td><td>CAN</td><td>57</td><td>1 years</td><td>2 500 000 $</td></tr>
<tr><td>Peter DeBoer</td><td>88</td><td>88</td><td>87</td><td>86</td><td>86</td><td>84</td><td>70</td><td>CAN</td><td>56</td><td>3 years</td><td>3 000 000 $</td></tr>
<tr><td>Peter Laviolette</td><td>86</td><td>88</td><td>85</td><td>85</td><td>88</td><td>85</td><td>70</td><td>USA</td><td>59</td><td>1 years</td><td>2 000 000 $</td></tr>
<tr><td>Randy Carlyle</td><td>87</td><td>84</td><td>81</td><td>80</td><td>83</td><td>83</td><td>70</td><td>CAN</td><td>68</td><td>0 year</td><td>1 500 000 $</td></tr>
<tr><td>Rick Bowness</td><td>82</td><td>85</td><td>82</td><td>86</td><td>91</td><td>82</td><td>70</td><td>CAN</td><td>68</td><td>1 years</td><td>1 750 000 $</td></tr>
<tr><td>Rick Tocchet</td><td>83</td><td>85</td><td>87</td><td>82</td><td>84</td><td>86</td><td>70</td><td>CAN</td><td>60</td><td>3 years</td><td>3 500 000 $</td></tr>
<tr><td>Roberto Luongo</td><td>78</td><td>78</td><td>76</td><td>76</td><td>78</td><td>82</td><td>70</td><td>CAN</td><td>45</td><td>1 years</td><td>950 000 $</td></tr>
<tr><td>Rod Brind'Amour</td><td>84</td><td>88</td><td>87</td><td>87</td><td>84</td><td>88</td><td>70</td><td>CAN</td><td>53</td><td>3 years</td><td>3 500 000 $</td></tr>
<tr><td>Ron Wilson</td><td>83</td><td>82</td><td>81</td><td>82</td><td>86</td><td>84</td><td>70</td><td>CAN</td><td>69</td><td>0 year</td><td>2 500 000 $</td></tr>
<tr><td>Saku Koivu</td><td>72</td><td>74</td><td>79</td><td>80</td><td>72</td><td>77</td><td>70</td><td>FIN</td><td>49</td><td>2 years</td><td>900 000 $</td></tr>
<tr><td>Sheldon Keefe</td><td>81</td><td>82</td><td>85</td><td>83</td><td>80</td><td>80</td><td>70</td><td>CAN</td><td>43</td><td>3 years</td><td>2 500 000 $</td></tr>
<tr><td>Ted Nolan</td><td>83</td><td>81</td><td>82</td><td>81</td><td>84</td><td>85</td><td>70</td><td>CAN</td><td>66</td><td>2 years</td><td>1 300 000 $</td></tr>
<tr><td>Todd McLellan</td><td>86</td><td>87</td><td>86</td><td>85</td><td>86</td><td>86</td><td>70</td><td>CAN</td><td>56</td><td>1 years</td><td>5 000 000 $</td></tr>
<tr><td>Todd Reirden</td><td>81</td><td>83</td><td>82</td><td>80</td><td>82</td><td>82</td><td>70</td><td>USA</td><td>53</td><td>3 years</td><td>2 500 000 $</td></tr>
<tr><td>Todd Richards</td><td>84</td><td>83</td><td>84</td><td>82</td><td>83</td><td>83</td><td>70</td><td>USA</td><td>57</td><td>3 years</td><td>2 500 000 $</td></tr>
<tr><td>Tom Renney</td><td>80</td><td>81</td><td>81</td><td>83</td><td>87</td><td>85</td><td>70</td><td>CAN</td><td>69</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Valeri Bragin</td><td>72</td><td>83</td><td>82</td><td>85</td><td>78</td><td>83</td><td>70</td><td>RUS</td><td>68</td><td>4 years</td><td>1 500 000 $</td></tr>
<tr><td>Willie Desjardins</td><td>83</td><td>82</td><td>81</td><td>82</td><td>82</td><td>82</td><td>70</td><td>CAN</td><td>67</td><td>1 years</td><td>1 000 000 $</td></tr>
<tr><td>Yannick Jean</td><td>75</td><td>77</td><td>78</td><td>77</td><td>73</td><td>77</td><td>70</td><td>CAN</td><td>48</td><td>1 years</td><td>750 000 $</td></tr>
</table>
<?php include "Footer.php";?>
