<?php
$DatabaseFile = (string)"ASHL11-STHS.db";
$CareerStatDatabaseFile = (string)"ASHL11-STHSCareerStat.db";
$NewsDatabaseFile = (string)"ASHL11-STHSNews.db";
$WebClientHeadCode = "<link href=\"STHSMain.css\" rel=\"stylesheet\" type=\"text/css\" />";
if (file_exists("STHSMain-CSSOverwrite.css") == true) {
    $WebClientHeadCode = $WebClientHeadCode . "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";
}
