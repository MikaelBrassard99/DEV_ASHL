<?php
$DatabaseFile = (string)"ASHL13-STHS.db";
$CareerStatDatabaseFile = (string)"ASHL13-STHSCareerStat.db";
$NewsDatabaseFile = (string)"ASHL13-STHSNews.db";
$WebClientHeadCode = "<link href=\"STHSMain.css\" rel=\"stylesheet\" type=\"text/css\" />";
if (file_exists("STHSMain-CSSOverwrite.css") == true) {
    $WebClientHeadCode = $WebClientHeadCode . "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";
}
