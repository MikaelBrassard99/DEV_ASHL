<?php
/* This Webpage should never modify. If you want to modify the webpage, please modify the Menu.php webpage*/
require_once "STHSSetting.php";
$LangOverwrite = (bool)FALSE;
$lang = (string)"fr"; /* The $lang option must be either "en" or "fr" */
if (isset($_GET['Lang'])) {
    $lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);
    $LangOverwrite = TRUE;
}  /* Allow Users Language Overwrite */
if ($lang == "fr") {
    include 'LanguageFR.php';
} else {
    include 'LanguageEN.php';
} ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
    <script src="STHSMain.js"></script>
    <meta name="author" content="Simon Tremblay, sths.simont.info" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Decription" content="Demo Mode - STHS - Version : 3.2.7.8 - ASHL101-STHS.db - ASHL101-STHSCareerStat.db" />
    <link href="STHSMain.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="logo-ashl.gif" />
    <link href="https://fonts.cdnfonts.com/css/sf-obliquities" rel="stylesheet">
</head>
<?php if (file_exists("STHSMain-CSSOverwrite.css") == True) {
    echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";
} ?>