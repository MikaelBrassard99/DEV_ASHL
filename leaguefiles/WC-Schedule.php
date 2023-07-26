<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Schedule</title>
<script src="WC.js"></script>
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
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 1</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_ProLink">
TCHÉQUIE vs LETTONIE</td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_ProLink">
CANADA vs SLOVAQUIE</td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_ProLink">
DANEMARK vs FINLANDE</td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_ProLink">
USA vs SUÈDE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 2</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_ProLink">
ALLEMAGNE vs CANADA</td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_ProLink">
USA vs TCHÉQUIE</td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_ProLink">
DANEMARK vs SUISSE</td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_ProLink">
WORLD vs SLOVAQUIE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 3</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_ProLink">
FINLANDE vs SUÈDE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_ProLink">
USA vs ALLEMAGNE</td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_ProLink">
RUSSIE vs DANEMARK</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 5</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_ProLink">
SLOVAQUIE vs FINLANDE</td></tr>
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_ProLink">
LETTONIE vs CANADA</td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_ProLink">
SUÈDE vs DANEMARK</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 6</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_ProLink">
USA vs LETTONIE</td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_ProLink">
RUSSIE vs WORLD</td></tr>
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_ProLink">
TCHÉQUIE vs ALLEMAGNE</td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_ProLink">
SUÈDE vs SUISSE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 7</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_ProLink">
LETTONIE vs RUSSIE</td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_ProLink">
CANADA vs TCHÉQUIE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 8</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_ProLink">
FINLANDE vs WORLD</td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_ProLink">
SLOVAQUIE vs ALLEMAGNE</td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_ProLink">
USA vs SUISSE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 9</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_ProLink">
SUISSE vs FINLANDE</td></tr>
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_ProLink">
SUÈDE vs RUSSIE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 10</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_ProLink">
SLOVAQUIE vs TCHÉQUIE</td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_ProLink">
LETTONIE vs ALLEMAGNE</td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_ProLink">
WORLD vs CANADA</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 11</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_ProLink">
RUSSIE vs FINLANDE</td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_ProLink">
DANEMARK vs USA</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 12</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_ProLink">
WORLD vs DANEMARK</td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_ProLink">
LETTONIE vs SLOVAQUIE</td></tr>
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_ProLink">
FINLANDE vs ALLEMAGNE</td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_ProLink">
RUSSIE vs SUISSE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 13</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_ProLink">
CANADA vs USA</td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_ProLink">
SUISSE vs WORLD</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 14</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_ProLink">
RUSSIE vs CANADA</td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_ProLink">
DANEMARK vs LETTONIE</td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_ProLink">
TCHÉQUIE vs FINLANDE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 15</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_ProLink">
WORLD vs SUÈDE</td></tr>
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_ProLink">
DANEMARK vs SLOVAQUIE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 16</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_ProLink">
RUSSIE vs TCHÉQUIE</td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_ProLink">
CANADA vs FINLANDE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 17</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_ProLink">
DANEMARK vs CANADA</td></tr>
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_ProLink">
LETTONIE vs SUISSE</td></tr>
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_ProLink">
ALLEMAGNE vs SUÈDE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 18</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_ProLink">
TCHÉQUIE vs SUÈDE</td></tr>
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_ProLink">
SLOVAQUIE vs USA</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 19</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_ProLink">
RUSSIE vs ALLEMAGNE</td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_ProLink">
SUISSE vs SLOVAQUIE</td></tr>
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_ProLink">
WORLD vs LETTONIE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 20</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_ProLink">
DANEMARK vs TCHÉQUIE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 21</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_ProLink">
CANADA vs SUÈDE</td></tr>
<tr><td class="STHSSchedule_GameNumber">54</td><td class="STHSSchedule_ProLink">
SLOVAQUIE vs RUSSIE</td></tr>
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_ProLink">
WORLD vs USA</td></tr>
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_ProLink">
DANEMARK vs ALLEMAGNE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 22</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_ProLink">
TCHÉQUIE vs SUISSE</td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_ProLink">
FINLANDE vs LETTONIE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 23</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_ProLink">
ALLEMAGNE vs SUISSE</td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_ProLink">
WORLD vs TCHÉQUIE</td></tr>
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_ProLink">
USA vs RUSSIE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 24</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_ProLink">
LETTONIE vs SUÈDE</td></tr>
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_ProLink">
WORLD vs ALLEMAGNE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 25</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_ProLink">
SUISSE vs CANADA</td></tr>
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_ProLink">
SLOVAQUIE vs SUÈDE</td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_ProLink">
USA vs FINLANDE</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 26</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<b>--------------  Rest Day</b>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
</table>
<?php include "Footer.php";?>
