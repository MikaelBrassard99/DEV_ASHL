<!DOCTYPE html>
<?php include "Header.php"; ?>
<?php
$TypeText = (string)"Pro";
$TitleType = $DynamicTitleLang['Pro'];
$TypeTextTeam = (string)"Pro";
$Playoff = (bool)False;
$Title = (string)"";
$DatabaseFound = (bool)False;
$Search = (bool)False;
$LeagueOutputOption = Null;
$ColumnPerTable = 17;
if (file_exists($DatabaseFile) == false) {
    $DatabaseFound = False;
    $LeagueName = $DatabaseNotFound;
    $Standing = Null;
    $LeagueGeneral = Null;
    echo "<title>" . $DatabaseNotFound . "</title>";
    $Title = $DatabaseNotFound;
} else {
    $DatabaseFound = True;
    $Title = (string)"";
    $LeagueName = (string)"";
    if (isset($_GET['Farm'])) {
        $TypeText = "Farm";
        $TypeTextTeam = (string)"Farm";
        $TitleType = $DynamicTitleLang['Farm'];
    }

    $db = new SQLite3($DatabaseFile);

    $Query = "Select Name, PointSystemW, PointSystemSO, " . $TypeText . "ConferenceName1 AS ConferenceName1," . $TypeText . "ConferenceName2 AS ConferenceName2," . $TypeText . "DivisionName1 AS DivisionName1," . $TypeText . "DivisionName2 AS DivisionName2," . $TypeText . "DivisionName3 AS DivisionName3," . $TypeText . "DivisionName4 AS DivisionName4," . $TypeText . "DivisionName5 AS DivisionName5," . $TypeText . "DivisionName6 AS DivisionName6," . $TypeText . "HowManyPlayOffTeam AS HowManyPlayOffTeam," . $TypeText . "DivisionNewNHLPlayoff  AS DivisionNewNHLPlayoff,PlayOffWinner" . $TypeText . " AS PlayOffWinner, PlayOffStarted, PlayOffRound FROM LeagueGeneral";
    $LeagueGeneral = $db->querySingle($Query, true);
    $LeagueName = $LeagueGeneral['Name'];
    $Query = "Select StandardStandingOutput From LeagueOutputOption";
    $LeagueOutputOption = $db->querySingle($Query, true);
    $Conference = array($LeagueGeneral['ConferenceName1'], $LeagueGeneral['ConferenceName2']);
    $Division = array($LeagueGeneral['DivisionName1'], $LeagueGeneral['DivisionName2'], $LeagueGeneral['DivisionName3'], $LeagueGeneral['DivisionName4'], $LeagueGeneral['DivisionName5'], $LeagueGeneral['DivisionName6']);

    $Query = "Select " . $TypeText . "TwoConference AS TwoConference from LeagueSimulation";
    $LeagueSimulation = $db->querySingle($Query, true);

    if ($LeagueOutputOption['StandardStandingOutput'] == "False") {
        $ColumnPerTable = 20;
        if ($LeagueGeneral['PointSystemSO'] == "False") {
            $ColumnPerTable = $ColumnPerTable - 1;
        }
    }

    if ($LeagueGeneral['PlayOffStarted'] == "True") {
        $Title = $LeagueName . " - " . $StandingLang['Playoff'] . " " . $TitleType;
        $Playoff = True;
    } else {
        $Title = $LeagueName . " - " . $StandingLang['Standing'] . " " . $TitleType;
    }
}
echo "<title>" . $Title . "</title>";

function PrintStandingTop($TeamStatLang, $StandardStandingOutput, $PointSystemSO)
{
    echo "<div style=\"overflow-x:auto;\">";
    echo "<table class=\"tablesorter STHSPHPStanding_Table\"><thead><tr>";
    echo "<th title=\"Position\" class=\"STHSW35\">PO</th>";
    echo "<th class=\"sticky-col first-col\" title=\"Team Name\" class=\"STHSW200\">" . $TeamStatLang['TeamName'] . "</th>";
    echo "<th title=\"Games Played\" class=\"STHSW30\">GP</th>";
    if ($StandardStandingOutput == "True") {
        echo "<th title=\"Wins\" class=\"STHSW30\">W</th>";
        echo "<th title=\"Loss\" class=\"STHSW30\">L</th>";
        echo "<th title=\"Overtime Loss\" class=\"STHSW30\">OTL</th>";
    } else {
        echo "<th title=\"Wins\" class=\"STHSW30\">W</th>";
        echo "<th title=\"Loss\" class=\"STHSW30\">L</th>";
        if ($PointSystemSO == "False") {
            echo "<th title=\"Ties\" class=\"STHSW30\">T</th>";
        }
        echo "<th title=\"Overtime Wins\" class=\"STHSW30\">OTW</th>";
        echo "<th title=\"Overtime Loss\" class=\"STHSW30\">OTL</th>";
        if ($PointSystemSO == "True") {
            echo "<th title=\"Shutouts Wins\" class=\"STHSW30\">SOW</th>";
            echo "<th title=\"Shutouts Loss\" class=\"STHSW30\">SOL</th>";
        }
    }
    echo "<th title=\"Points\" class=\"STHSW30\">P</th>";
    echo "<th title=\"Normal Wins + Overtime Win\" class=\"STHSW30\">ROW</th>";
    echo "<th title=\"Goals For\" class=\"STHSW30\">GF</th>";
    echo "<th title=\"Goals Against\" class=\"STHSW30\">GA</th>";
    echo "<th title=\"Goals For Diffirencial against Goals Against\" class=\"STHSW30\">Diff</th>";
    echo "<th title=\"Points Percentage\" class=\"STHSW45\">PCT</th>";
    echo "<th title=\"Home Only\" class=\"STHSW75\">" . $TeamStatLang['Home'] . "</th>";
    echo "<th title=\"Visitor Only\" class=\"STHSW75\">" . $TeamStatLang['Visitor'] . "</th>";
    echo "<th title=\"Last 10 Game\" class=\"STHSW75\">" . $TeamStatLang['Last10'] . "</th>";
    echo "<th title=\"Streak\" class=\"STHSW30\">STK</th>";
    echo "<th title=\"Next Game\" class=\"STHSW30\">Next</th>";
    echo "</tr></thead><tbody>";
}

function PrintStandingTable($TypeTextTeam, $Standing, $TypeText, $StandardStandingOutput, $PointSystemSO, $PointSystemW, $ColumnPerTable, $LinesNumber = 0, $DatabaseFile)
{
    $LoopCount = 0;
    while ($row = $Standing->fetchArray()) {
        $LoopCount += 1;
        PrintStandingTableRow($TypeTextTeam, $row, $TypeText, $StandardStandingOutput, $PointSystemSO, $PointSystemW, $LoopCount, $DatabaseFile);
        if ($LoopCount == 8 && $LoopCount == $LinesNumber) {
            echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"" . $ColumnPerTable . "\"><hr style=\"border-top: 2px solid red;\"/></td></tr>";
        }
    }
    echo "</tbody></table></div>";
}

function PrintStandingTableRow($TypeTextTeam, $row, $TypeText, $StandardStandingOutput, $PointSystemSO, $PointSystemW, $LoopCount, $DatabaseFile)
{
    echo "<tr><td>" . $LoopCount . "</td>";
    echo "<td class=\"sticky-col first-col\" style=\"\"><span class=\"" . $TypeText . "Standing_Team" . $row['Number'] . "\"></span>";
    echo "<img src=\"./images/" . $TypeTextTeam . "-team/" . $row['UniqueID'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";

    /*if ($row['TeamThemeID'] > 0) {
        echo "<img src=\"./images/pro-team/" . "1" . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
    }*/
    echo "<a href=\"" . $TypeText . "Team.php?Team=" . $row['Number'] . "\">" . $row['Name'] . "</a>";
    if ($row['StandingPlayoffTitle'] == "E") {
        echo " - E ";
    } else if ($row['StandingPlayoffTitle'] == "X") {
        echo " - X";
    } else if ($row['StandingPlayoffTitle'] == "Y") {
        echo " - Y";
    } else if ($row['StandingPlayoffTitle'] == "Z") {
        echo " - Z";
    }
    echo "</td><td>" . $row['GP'] . "</td>";
    if ($StandardStandingOutput == "True") {
        echo "<td>" . ($row['W'] + $row['OTW'] + $row['SOW']) . "</td>";
        echo "<td>" . $row['L'] . "</td>";
        echo "<td>" . ($row['OTL'] + $row['SOL']) . "</td>";
    } else {
        echo "<td>" . $row['W'] . "</td>";
        echo "<td>" . $row['L'] . "</td>";
        if ($PointSystemSO == "False") {
            echo "<td>" . $row['T'] . "</td>";
        }
        echo "<td>" . $row['OTW'] . "</td>";
        echo "<td>" . $row['OTL'] . "</td>";
        if ($PointSystemSO == "True") {
            echo "<td>" . $row['SOW'] . "</td>";
            echo "<td>" . $row['SOL'] . "</td>";
        }
    }
    echo "<td><strong>" . $row['Points'] . "</strong></td>";
    echo "<td>" . ($row['W'] + $row['OTW']) . "</td>";
    echo "<td>" . $row['GF'] . "</td>";
    echo "<td>" . $row['GA'] . "</td>";
    echo "<td>" . ($row['GF'] - $row['GA']) . "</td>";
    if ($row['GP'] > 0 and $PointSystemW > 0) {
        echo "<td>" . number_Format(($row['Points'] / ($row['GP'] * $PointSystemW)), 3) . "</td>";
    } else {
        echo "<td>" . number_Format("0", 3) . "</td>";
    }
    echo "<td>" . ($row['HomeW'] + $row['HomeOTW'] + $row['HomeSOW']) . "-" . $row['HomeL'] . "-" . ($row['HomeOTL'] + $row['HomeSOL']) . "</td>";
    echo "<td>" . ($row['W'] + $row['OTW'] + $row['SOW'] - $row['HomeW'] - $row['HomeOTW'] - $row['HomeSOW']) . "-" . ($row['L'] - $row['HomeL']) . "-" . ($row['OTL'] + $row['SOL'] - $row['HomeOTL'] - $row['HomeSOL']) . "</td>";
    echo "<td>" . ($row['Last10W'] + $row['Last10OTW'] + $row['Last10SOW']) . "-" . $row['Last10L'] . "-" . ($row['Last10OTL'] + $row['Last10SOL']) . "</td>";
    echo "<td>" . $row['Streak'] . "</td>";
    $dbS = new SQLite3($DatabaseFile);
    $Query = "SELECT count(*) AS count FROM Schedule" . $TypeText . " WHERE (VisitorTeam = " . $row['Number'] . " OR HomeTeam = " . $row['Number'] . ") AND Play = 'False' ORDER BY GameNumber LIMIT 1";
    $Result = $dbS->querySingle($Query, true);
    if ($Result['count'] > 0) {
        $Query = "SELECT * FROM Schedule" . $TypeText . " WHERE (VisitorTeam = " . $row['Number'] . " OR HomeTeam = " . $row['Number'] . ") AND Play = 'False' ORDER BY GameNumber LIMIT 1";
        $ScheduleNext = $dbS->querySingle($Query, true);
        if ($ScheduleNext['HomeTeam'] == $row['Number']) {
            echo "<td><img src=\"./images/" . $TypeTextTeam . "-team/" . $ScheduleNext['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" /></td>";
            //echo "<td> in " . $ScheduleNext['Day'] . " day(s)</td>";
        } elseif ($ScheduleNext['VisitorTeam'] == $row['Number']) {
            echo "<td><img src=\"./images/" . $TypeTextTeam . "-team/" . $ScheduleNext['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" /></td>";
            //echo "<td> vs " . $ScheduleNext['HomeTeamAbbre'] . "</td>";
        }
    } else {
        echo "<td></td>";
    }
    echo "</tr>\n"; /* The \n is for a new line in the HTML Code */
}

?>

<style>
    .STHSPHPStanding_Table tbody td.staticTD {
        font-size: 1pt;
        border-right: hidden;
        border-left: hidden;
    }

    <?php
    if ($Playoff == True) {
        echo "#tabmain1{display:none;}\n";
        echo "#tabmain2{display:none;}\n";
        echo "#tabmain3{display:none;}\n";
        echo "#tabmain4{display:none;}\n";
    } else {
        echo "#tabmain5{display:none;}\n";
    } ?>
</style>

</head>

<body>
    <?php include "Menu.php"; ?>
    <div class="STHSWarning"><?php echo $WarningResolution; ?><br /></div>
    <?php
    //echo "<h1>" . $Title . "</h1>"; 
    ?>
    <div class="tabsmain standard">
        <ul class="tabmain-links">
            <?php
            if ($Playoff == True) {
                echo "<li><a class=\"activemain\" href=\"#tabmain5\">" . $StandingLang['Playoff'] . "</a></li>";
            } else {
                if ($LeagueGeneral['DivisionNewNHLPlayoff'] == "True") {
                    echo "<li class=\"activemain\"><a href=\"#tabmain1\">" . $StandingLang['Wildcard'] . "</a></li>";
                    echo "<li><a href=\"#tabmain2\">" . $StandingLang['Conference'] . "</a></li>";
                } else {
                    echo "<li class=\"activemain\"><a href=\"#tabmain2\">" . $StandingLang['Conference'] . "</a></li>";
                }
                echo "<li><a href=\"#tabmain3\">" . $StandingLang['Division'] . "</a></li>";
                echo "<li><a href=\"#tabmain4\">" . $StandingLang['Overall'] . "</a></li>";
            }
            ?>

        </ul>
        <div class="tabmain-content">
            <div class="tabmain <?php if ($LeagueGeneral['ProDivisionNewNHLPlayoff'] == "True") {
                                    echo "active";
                                } ?>" id="tabmain1">

                <?php
                if ($DatabaseFound == True) {
                    echo "<h2>" . $LeagueGeneral['ConferenceName1'] . "</h2>";
                    PrintStandingTop($TeamStatLang, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO']);

                    /* Division 1 */
                    echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"" . $ColumnPerTable . "\">" . $LeagueGeneral['DivisionName1'] . "</td></tr>";
                    $Query = " SELECT Team" . $TypeTextTeam . "Stat.*, Team" . $TypeText . "Info.Conference, Team" . $TypeText . "Info.Division,Team" . $TypeText . "RankingOrder.Type FROM (Team" . $TypeTextTeam . "Stat INNER JOIN Team" . $TypeText . "Info ON Team" . $TypeTextTeam . "Stat.Number = Team" . $TypeText . "Info.Number) INNER JOIN RankingOrder ON Team" . $TypeTextTeam . "Stat.Number = RankingOrder.Team" . $TypeText . "Number WHERE (((Team" . $TypeText . "Info.Division)=\"" . $LeagueGeneral['DivisionName1'] . "\") AND ((RankingOrder.Type)=0)) ORDER BY RankingOrder.TeamOrder LIMIT 3";
                    $Standing = $db->query($Query);
                    $LoopCount = 0;
                    if (empty($Standing) == false) {
                        while ($row = $Standing->fetchArray()) {
                            $LoopCount += 1;
                            PrintStandingTableRow($TypeTextTeam, $row, $TypeText, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO'], $LeagueGeneral['PointSystemW'], $LoopCount, $DatabaseFile);
                        }
                    }

                    /* Division 2 */
                    echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"" . $ColumnPerTable . "\">" . $LeagueGeneral['DivisionName2'] . "</td></tr>";
                    $Query = " SELECT Team" . $TypeTextTeam . "Stat.*, Team" . $TypeText . "Info.Conference, Team" . $TypeText . "Info.Division,Team" . $TypeText . "RankingOrder.Type FROM (Team" . $TypeTextTeam . "Stat INNER JOIN Team" . $TypeText . "Info ON Team" . $TypeTextTeam . "Stat.Number = Team" . $TypeText . "Info.Number) INNER JOIN RankingOrder ON Team" . $TypeTextTeam . "Stat.Number = RankingOrder.Team" . $TypeText . "Number WHERE (((Team" . $TypeText . "Info.Division)=\"" . $LeagueGeneral['DivisionName2'] . "\") AND ((RankingOrder.Type)=0)) ORDER BY RankingOrder.TeamOrder LIMIT 3";
                    $Standing = $db->query($Query);
                    $LoopCount = 0;
                    if (empty($Standing) == false) {
                        while ($row = $Standing->fetchArray()) {
                            $LoopCount += 1;
                            PrintStandingTableRow($TypeTextTeam, $row, $TypeText, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO'], $LeagueGeneral['PointSystemW'], $LoopCount, $DatabaseFile);
                        }
                    }

                    /* Overall for Conference 1 */
                    echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"" . $ColumnPerTable . "\">" . $StandingLang['Wildcard'] . "</td></tr>";
                    $Query = " SELECT Team" . $TypeTextTeam . "Stat.*, Team" . $TypeText . "Info.Conference, Team" . $TypeText . "Info.Division,Team" . $TypeText . "RankingOrder.Type FROM (Team" . $TypeTextTeam . "Stat INNER JOIN Team" . $TypeText . "Info ON Team" . $TypeTextTeam . "Stat.Number = Team" . $TypeText . "Info.Number) INNER JOIN RankingOrder ON Team" . $TypeTextTeam . "Stat.Number = RankingOrder.Team" . $TypeText . "Number WHERE (((Team" . $TypeText . "Info.Conference)=\"" . $LeagueGeneral['ConferenceName1'] . "\") AND ((RankingOrder.Type)=1)) ORDER BY RankingOrder.TeamOrder";
                    $Standing = $db->query($Query);
                    $LoopCount = 0;
                    if (empty($Standing) == false) {
                        while ($row = $Standing->fetchArray()) {
                            $LoopCount += 1;
                            if ($LoopCount > 6) {
                                PrintStandingTableRow($TypeTextTeam, $row, $TypeText, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO'], $LeagueGeneral['PointSystemW'], $LoopCount, $DatabaseFile);
                            }
                            if ($LoopCount == 8) {
                                echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"" . $ColumnPerTable . "\"><hr /></td></tr>";
                            }
                        }
                    }

                    echo "</tbody></table></div>";


                    echo "<h2>" . $LeagueGeneral['ConferenceName2'] . "</h2>";
                    PrintStandingTop($TeamStatLang, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO']);

                    /* Division 4 */
                    echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"" . $ColumnPerTable . "\">" . $LeagueGeneral['DivisionName4'] . "</td></tr>";
                    $Query = " SELECT Team" . $TypeTextTeam . "Stat.*, Team" . $TypeText . "Info.Conference, Team" . $TypeText . "Info.Division,Team" . $TypeText . "RankingOrder.Type FROM (Team" . $TypeTextTeam . "Stat INNER JOIN Team" . $TypeText . "Info ON Team" . $TypeTextTeam . "Stat.Number = Team" . $TypeText . "Info.Number) INNER JOIN RankingOrder ON Team" . $TypeTextTeam . "Stat.Number = RankingOrder.Team" . $TypeText . "Number WHERE (((Team" . $TypeText . "Info.Division)=\"" . $LeagueGeneral['DivisionName4'] . "\") AND ((RankingOrder.Type)=0)) ORDER BY RankingOrder.TeamOrder LIMIT 3";
                    $Standing = $db->query($Query);
                    $LoopCount = 0;
                    if (empty($Standing) == false) {
                        while ($row = $Standing->fetchArray()) {
                            $LoopCount += 1;
                            PrintStandingTableRow($TypeTextTeam, $row, $TypeText, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO'], $LeagueGeneral['PointSystemW'], $LoopCount, $DatabaseFile);
                        }
                    }

                    /* Division 5 */
                    echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"" . $ColumnPerTable . "\">" . $LeagueGeneral['DivisionName5'] . "</td></tr>";
                    $Query = " SELECT Team" . $TypeTextTeam . "Stat.*, Team" . $TypeText . "Info.Conference, Team" . $TypeText . "Info.Division,Team" . $TypeText . "RankingOrder.Type FROM (Team" . $TypeTextTeam . "Stat INNER JOIN Team" . $TypeText . "Info ON Team" . $TypeTextTeam . "Stat.Number = Team" . $TypeText . "Info.Number) INNER JOIN RankingOrder ON Team" . $TypeTextTeam . "Stat.Number = RankingOrder.Team" . $TypeText . "Number WHERE (((Team" . $TypeText . "Info.Division)=\"" . $LeagueGeneral['DivisionName5'] . "\") AND ((RankingOrder.Type)=0)) ORDER BY RankingOrder.TeamOrder LIMIT 3";
                    $Standing = $db->query($Query);
                    $LoopCount = 0;
                    if (empty($Standing) == false) {
                        while ($row = $Standing->fetchArray()) {
                            $LoopCount += 1;
                            PrintStandingTableRow($TypeTextTeam, $row, $TypeText, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO'], $LeagueGeneral['PointSystemW'], $LoopCount, $DatabaseFile);
                        }
                    }

                    /* Overall for Conference 2 */
                    echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"" . $ColumnPerTable . "\">" . $StandingLang['Wildcard'] . "</td></tr>";
                    $Query = " SELECT Team" . $TypeTextTeam . "Stat.*, Team" . $TypeText . "Info.Conference, Team" . $TypeText . "Info.Division,Team" . $TypeText . "RankingOrder.Type FROM (Team" . $TypeTextTeam . "Stat INNER JOIN Team" . $TypeText . "Info ON Team" . $TypeTextTeam . "Stat.Number = Team" . $TypeText . "Info.Number) INNER JOIN RankingOrder ON Team" . $TypeTextTeam . "Stat.Number = RankingOrder.Team" . $TypeText . "Number WHERE (((Team" . $TypeText . "Info.Conference)=\"" . $LeagueGeneral['ConferenceName2'] . "\") AND ((RankingOrder.Type)=2)) ORDER BY RankingOrder.TeamOrder";
                    $Standing = $db->query($Query);
                    $LoopCount = 0;
                    if (empty($Standing) == false) {
                        while ($row = $Standing->fetchArray()) {
                            $LoopCount += 1;
                            if ($LoopCount > 6) {
                                PrintStandingTableRow($TypeTextTeam, $row, $TypeText, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO'], $LeagueGeneral['PointSystemW'], $LoopCount, $DatabaseFile);
                            }
                            if ($LoopCount == 8) {
                                echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"" . $ColumnPerTable . "\"><hr style=\"border-top: 1px solid red;\"/></td></tr>";
                            }
                        }
                    }

                    echo "</tbody></table></div>";
                }
                ?>

            </div>
            <div class="tabmain <?php if ($LeagueGeneral['ProDivisionNewNHLPlayoff'] == "False") {
                                    echo "active";
                                } ?>" id="tabmain2">
                <?php
                if ($DatabaseFound == True) {
                    $LoopCount = 0;
                    foreach ($Conference as $Value) {
                        $LoopCount += 1;
                        $Query = " SELECT Team" . $TypeTextTeam . "Stat.*, Team" . $TypeText . "Info.Conference, Team" . $TypeText . "Info.Division, RankingOrder.Type FROM (Team" . $TypeTextTeam . "Stat INNER JOIN Team" . $TypeText . "Info ON Team" . $TypeTextTeam . "Stat.Number = Team" . $TypeText . "Info.Number) INNER JOIN RankingOrder ON Team" . $TypeTextTeam . "Stat.Number = RankingOrder.Team" . $TypeText . "Number WHERE (((Team" . $TypeText . "Info.Conference)=\"" . $Value . "\") AND ((RankingOrder.Type)=" . $LoopCount . ")) ORDER BY RankingOrder.TeamOrder";
                        $Standing = $db->query($Query);
                        $DataReturn = $db->query($Query); /* Run the Query Twice to Loop Second Array to confirm the first Query Return Data  */
                        if ($DataReturn->fetchArray()) { /* Only Print Information if Query has row */
                            echo "<h2>" . $Value . "</h2>";
                            PrintStandingTop($TeamStatLang, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO']);
                            if ($LeagueSimulation['TwoConference'] == "True") {
                                //ajouter typetext dans le str
                                PrintStandingTable($TypeTextTeam, $Standing, $TypeText, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO'], $LeagueGeneral['PointSystemW'], $ColumnPerTable, $LeagueGeneral['ProHowManyPlayOffTeam'] / 2, $DatabaseFile);
                            } else {
                                PrintStandingTable($TypeTextTeam, $Standing, $TypeText, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO'], $LeagueGeneral['PointSystemW'], $ColumnPerTable, $LeagueGeneral['ProHowManyPlayOffTeam'], $DatabaseFile);
                            }
                        }
                    }
                }
                ?>
            </div>
            <div class="tabmain" id="tabmain3">
                <?php
                if ($DatabaseFound == True) {
                    foreach ($Division as $Value) {
                        $Query = " SELECT Team" . $TypeTextTeam . "Stat.*, Team" . $TypeText . "Info.Conference, Team" . $TypeText . "Info.Division, RankingOrder.Type FROM (Team" . $TypeTextTeam . "Stat INNER JOIN Team" . $TypeText . "Info ON Team" . $TypeTextTeam . "Stat.Number = Team" . $TypeText . "Info.Number) INNER JOIN RankingOrder ON Team" . $TypeTextTeam . "Stat.Number = RankingOrder.Team" . $TypeText . "Number WHERE (((Team" . $TypeText . "Info.Division)=\"" . $Value . "\") AND ((RankingOrder.Type)=0)) ORDER BY RankingOrder.TeamOrder";
                        $Standing = $db->query($Query);
                        $DataReturn = $db->query($Query); /* Run the Query Twice to Loop Second Array to confirm the first Query Return Data  */
                        if ($DataReturn->fetchArray()) { /* Only Print Information if Query has row */
                            echo "<h2>" . $Value . "</h2>";
                            PrintStandingTop($TeamStatLang, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO']);
                            PrintStandingTable($TypeTextTeam, $Standing, $TypeText, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO'], $LeagueGeneral['PointSystemW'], $ColumnPerTable, 0, $DatabaseFile);
                        }
                    }
                }
                ?>
            </div>
            <div class="tabmain" id="tabmain4">
                <?php
                if ($DatabaseFound == True) {
                    echo "<h2>" . $StandingLang['Overall'] . "</h2>";
                    $Query = " SELECT Team" . $TypeTextTeam . "Stat.*, Team" . $TypeText . "Info.Conference, Team" . $TypeText . "Info.Division, RankingOrder.Type FROM (Team" . $TypeTextTeam . "Stat INNER JOIN Team" . $TypeText . "Info ON Team" . $TypeTextTeam . "Stat.Number = Team" . $TypeText . "Info.Number) INNER JOIN RankingOrder ON Team" . $TypeTextTeam . "Stat.Number = RankingOrder.Team" . $TypeText . "Number WHERE (((RankingOrder.Type)=0)) ORDER BY RankingOrder.TeamOrder";
                    $Standing = $db->query($Query);
                    PrintStandingTop($TeamStatLang, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO']);
                    PrintStandingTable($TypeTextTeam, $Standing, $TypeText, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO'], $LeagueGeneral['PointSystemW'], $ColumnPerTable, 0, $DatabaseFile);
                }
                ?>

            </div>

            <div class="tabmain<?php if ($Playoff == True) {
                                    echo " active";
                                } ?>" id="tabmain5">
                <?php
                if ($DatabaseFound == True) {
                    if ($LeagueGeneral['PlayOffWinner'] != 0 and $Playoff == True) {
                        $Winner = $db->querySingle("Select * from Team" . $TypeText . "Info WHERE Team" . $TypeText . "Info.Number = " . $LeagueGeneral['PlayOffWinner'], true);
                        echo "<div class=\"STHSCenter\">";
                        echo "<td>";
                        echo "<img src=\"./images/" . $TypeText . "-team/" . $Winner['UniqueID'] . ".png\" alt=\"\" class=\"STHSPHPStandingPlayoffWinnerImage \" />";

                        /*if ($Winner['TeamThemeID'] > 0) {
                                echo "<img src=\"./images/pro-team/" . $Winner['TeamThemeID'] . ".png\" alt=\"\" class=\"STHSPHPStandingPlayoffWinnerImage \" />";
                            }*/
                        echo "<h1>" . $Winner['Name'] . $StandingLang['WinsPlayoff'] . "</h1><br /><br /></div>";
                    }
                    echo "<table class=\"STHSTableFullW\"><tr>";
                    for ($Round = 1; $Round <= 5; $Round++) {
                        if ($Round <= $LeagueGeneral['PlayOffRound']) {
                            //echo "<td><b> " . $StandingLang['Round'] . $Round . "</b></td>";
                        } else {
                            echo "<td></td>";
                        }
                    }
                    echo "</tr>";
                    $Query = "SELECT Playoff" . $TypeText . "Number.* FROM Playoff" . $TypeText . "Number ORDER BY Playoff" . $TypeText . "Number.Number";
                    $PlayoffStanding = $db->query($Query);
                    if (empty($PlayoffStanding) == false) {
                        while ($Row = $PlayoffStanding->fetchArray()) {
                            echo "<tr>";
                            if ($Row['Round1'] == 0) {
                                echo "<td></td>";
                            } else {
                                echo "<td>";
                                $Round1 = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Name as HomeTeamName, TeamInfoVisitor.Name as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round1'], true);
                                //echo "<td>";
                                //echo "<div><img src=\"./images/pro-team/" . $Round1['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" /></div><br />";
                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round1['VisitorTeam'] . "\">" . $Round1['VisitorTeamName'] . " - " . $Round1['VisitorWin'] . "</a><br />";
                                //echo "<div><img src=\"./images/pro-team/" . $Round1['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" /></div>";
                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round1['HomeTeam'] . "\">" . $Round1['HomeTeamName'] . " - " . $Round1['HomeWin'] . "</a><br /><br /></td>";
                            }
                            if ($Row['Round2'] == 0) {
                                echo "<td></td>";
                            } else {
                                $Round2 = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Name as HomeTeamName, TeamInfoVisitor.Name as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round2'], true);
                                //echo "<td>";
                                //echo "<img src=\"./images/pro-team/" . $Round2['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round2['VisitorTeam'] . "\">" . $Round2['VisitorTeamName'] . " - " . $Round2['VisitorWin'] . "</a><br />";
                                //echo "<img src=\"./images/pro-team/" . $Round2['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round2['HomeTeam'] . "\">" . $Round2['HomeTeamName'] . " - " . $Round2['HomeWin'] . "</a><br /><br /></td>";
                            }
                            if ($Row['Round3'] == 0) {
                                echo "<td></td>";
                            } else {
                                $Round3 = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Name as HomeTeamName, TeamInfoVisitor.Name as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round3'], true);
                                //echo "<td>";
                                //echo "<img src=\"./images/pro-team/" . $Round3['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round3['VisitorTeam'] . "\">" . $Round3['VisitorTeamName'] . " - " . $Round3['VisitorWin'] . "</a><br />";
                                //echo "<img src=\"./images/pro-team/" . $Round3['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round3['HomeTeam'] . "\">" . $Round3['HomeTeamName'] . " - " . $Round3['HomeWin'] . "</a><br /><br /></td>";
                            }
                            if ($Row['Round4'] == 0) {
                                echo "<td></td>";
                            } else {
                                $Round4 = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Name as HomeTeamName, TeamInfoVisitor.Name as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round4'], true);
                                //echo "<td>";
                                //echo "<img src=\"./images/pro-team/" . $Round4['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round4['VisitorTeam'] . "\">" . $Round4['VisitorTeamName'] . " - " . $Round4['VisitorWin'] . "</a><br />";
                                //echo "<img src=\"./images/pro-team/" . $Round4['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round4['HomeTeam'] . "\">" . $Round4['HomeTeamName'] . " - " . $Round4['HomeWin'] . "</a><br /><br /></td>";
                            }
                            if ($Row['Round5'] == 0) {
                                echo "<td></td>";
                            } else {
                                $Round5 = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Name as HomeTeamName, TeamInfoVisitor.Name as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round5'], true);
                                //echo "<td>";
                                //echo "<img src=\"./images/pro-team/" . $Round5['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round5['VisitorTeam'] . "\">" . $Round5['VisitorTeamName'] . " - " . $Round5['VisitorWin'] . "</a><br />";
                                //echo "<img src=\"./images/pro-team/" . $Round4['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round5['HomeTeam'] . "\">" . $Round5['HomeTeamName'] . " - " . $Round5['HomeWin'] . "</a><br /><br /></td>";
                            }
                            echo "</tr>";
                        }
                    }
                    echo "</table>";
                } ?>

            </div>

        </div>



        <script>
            $(function() {
                $(".STHSPHPStanding_Table").tablesorter({
                    widgets: ['staticRow']
                });
            });
        </script>

    </div>

    <?php
    if ($Playoff == True) { ?>
        <div style="position:relative" id="content-wrap">

            <div class="template template--fluid">
                <div class="ad ad--top ad-responsive-slot" data-targeting='{"pos":1}'>
                    <div id="ad-leaderboard-xs-s" class="ad-responsive-size ad-centered" data-thresholds="[0,1]" data-sizes="[[320,50]]"></div>
                    <div id="ad-leaderboard-m" class="ad-responsive-size ad-centered" data-thresholds="[2]" data-sizes="[[728,90]]"></div>
                    <div id="ad-leaderboard-l" class="ad-responsive-size ad-centered" data-thresholds="[3]" data-sizes="[[970,66],[728,90]]"></div>
                    <div id="ad-leaderboard-xl" class="ad-responsive-size ad-centered" data-thresholds="[4]" data-sizes="[[970,250],[970,90],[970,66],[728,90]]"></div>
                </div>
                <div class="template__container">
                    <div class="template__content template--one-column__content--one">
                        <div class="card">
                            <section id="playoffs-title">
                                <h1><span class="jumbotron-header">Stanley Cup&#174; Playoffs</span></h1>
                            </section>
                            <section id="playoffs-description">
                                <p class="lead">

                                </p>
                            </section>
                            <section id="playoffs-bracket-view">
                                <div class="bracket-container">

                                    <!-- Center Playoffs Logo-->
                                    <?php
                                    switch ($TypeText) {
                                        case ('Pro'):
                                            echo "<div class=\"center-logo-container\" id=\"center-logo-container\">";
                                            echo "<img class=\"center-logo\" src=\"./images/ashl/ashlplayoff.jpeg\" />";
                                            echo "</div>";

                                            break;
                                        case ('Farm'):
                                            echo "<div class=\"center-logo-container\" id=\"center-logo-container\">";
                                            echo "<img class=\"center-logo\" src=\"./images/ashl/ahlplayoff.jpeg\" />";
                                            echo "</div>";
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>

                                    <!-- Center Broadcast Logo -->
                                    <div class="broadcaster-logo-container" id="broadcaster-logo-container">
                                        <table>
                                            <tr>
                                                <td><img class="broadcaster-logoG" src="./images/ashl/sansancune.jpg" /></td>
                                                <td><img class="broadcaster-logoD" src="./images/ashl/SS.jpeg" /></td>
                                            </tr>
                                        </table>
                                    </div>


                                    <!-- Bracket Box - The brackets to matchup teams -->
                                    <?php
                                    $arrayTeamPlayoffs_Round1 = array(
                                        "Team1_Conf1_ID" => 0,
                                        "Team1_Conf1_WIN" => 0,
                                        "Team1_Conf1_NAME" => '',
                                        "Team8_Conf1_ID" => 0,
                                        "Team8_Conf1_WIN" => 0,
                                        "Team8_Conf1_NAME" => '',

                                        "Team2_Conf1_ID" => 0,
                                        "Team2_Conf1_WIN" => 0,
                                        "Team2_Conf1_NAME" => '',
                                        "Team7_Conf1_ID" => 0,
                                        "Team7_Conf1_WIN" => 0,
                                        "Team7_Conf1_NAME" => '',

                                        "Team3_Conf1_ID" => 0,
                                        "Team3_Conf1_WIN" => 0,
                                        "Team3_Conf1_NAME" => '',
                                        "Team6_Conf1_ID" => 0,
                                        "Team6_Conf1_WIN" => 0,
                                        "Team6_Conf1_NAME" => '',

                                        "Team4_Conf1_ID" => 0,
                                        "Team4_Conf1_WIN" => 0,
                                        "Team4_Conf1_NAME" => '',
                                        "Team5_Conf1_ID" => 0,
                                        "Team5_Conf1_WIN" => 0,
                                        "Team5_Conf1_NAME" => '',

                                        "Team1_Conf2_ID" => 0,
                                        "Team1_Conf2_WIN" => 0,
                                        "Team1_Conf2_NAME" => '',
                                        "Team8_Conf2_ID" => 0,
                                        "Team8_Conf2_WIN" => 0,
                                        "Team8_Conf2_NAME" => '',

                                        "Team2_Conf2_ID" => 0,
                                        "Team2_Conf2_WIN" => 0,
                                        "Team2_Conf2_NAME" => '',
                                        "Team7_Conf2_ID" => 0,
                                        "Team7_Conf2_WIN" => 0,
                                        "Team7_Conf2_NAME" => '',

                                        "Team3_Conf2_ID" => 0,
                                        "Team3_Conf2_WIN" => 0,
                                        "Team3_Conf2_NAME" => '',
                                        "Team6_Conf2_ID" => 0,
                                        "Team6_Conf2_WIN" => 0,
                                        "Team6_Conf2_NAME" => '',

                                        "Team4_Conf2_ID" => 0,
                                        "Team4_Conf2_WIN" => 0,
                                        "Team4_Conf2_NAME" => '',
                                        "Team5_Conf2_ID" => 0,
                                        "Team5_Conf2_WIN" => 0,
                                        "Team5_Conf2_NAME" => '',
                                    );

                                    $arrayTeamPlayoffs_Round1 = array(
                                        "Team1_Conf1_ID" => 0,
                                        "Team1_Conf1_WIN" => 0,
                                        "Team1_Conf1_NAME" => '',
                                        "Team4_Conf1_ID" => 0,
                                        "Team4_Conf1_WIN" => 0,
                                        "Team4_Conf1_NAME" => '',

                                        "Team2_Conf1_ID" => 0,
                                        "Team2_Conf1_WIN" => 0,
                                        "Team2_Conf1_NAME" => '',
                                        "Team3_Conf1_ID" => 0,
                                        "Team3_Conf1_WIN" => 0,
                                        "Team3_Conf1_NAME" => '',

                                        "Team1_Conf2_ID" => 0,
                                        "Team1_Conf2_WIN" => 0,
                                        "Team1_Conf2_NAME" => '',
                                        "Team4_Conf2_ID" => 0,
                                        "Team4_Conf2_WIN" => 0,
                                        "Team4_Conf2_NAME" => '',

                                        "Team2_Conf2_ID" => 0,
                                        "Team2_Conf2_WIN" => 0,
                                        "Team2_Conf2_NAME" => '',
                                        "Team3_Conf2_ID" => 0,
                                        "Team3_Conf2_WIN" => 0,
                                        "Team3_Conf2_NAME" => '',
                                    );

                                    $arrayTeamPlayoffs_Round3 = array(
                                        "Team1_Conf1_ID" => 0,
                                        "Team1_Conf1_WIN" => 0,
                                        "Team1_Conf1_NAME" => '',
                                        "Team2_Conf1_ID" => 0,
                                        "Team2_Conf1_WIN" => 0,
                                        "Team2_Conf1_NAME" => '',

                                        "Team1_Conf2_ID" => 0,
                                        "Team1_Conf2_WIN" => 0,
                                        "Team1_Conf2_NAME" => '',
                                        "Team2_Conf2_ID" => 0,
                                        "Team2_Conf2_WIN" => 0,
                                        "Team2_Conf2_NAME" => '',
                                    );

                                    $arrayTeamPlayoffs_Round4 = array(
                                        "Team1_Conf1_ID" => 0,
                                        "Team1_Conf1_WIN" => 0,
                                        "Team1_Conf1_NAME" => '',

                                        "Team1_Conf2_ID" => 0,
                                        "Team1_Conf2_WIN" => 0,
                                        "Team1_Conf2_NAME" => '',
                                    );
                                    $Query = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Name as HomeTeamName, TeamInfoVisitor.Abbre as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round1'], true);
                                    $counter = 0;
                                    if (empty($PlayoffStanding) == false) {
                                        while ($Row = $PlayoffStanding->fetchArray()) {
                                            $counter++;
                                            echo "<tr>";
                                            if ($Row['Round1'] == 0) {
                                                echo "<td></td>";
                                            } else {
                                                $Round1 = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Abbre as HomeTeamName, TeamInfoVisitor.Abbre as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round1'], true);
                                                echo "<td>";
                                                //echo "<div><img src=\"./images/pro-team/" . $Round1['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" /></div><br />";
                                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round1['VisitorTeam'] . "\">" . $Round1['VisitorTeamName'] . " - " . $Round1['VisitorWin'] . "</a><br />";
                                                //echo "<div><img src=\"./images/pro-team/" . $Round1['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" /></div>";
                                                switch ($counter) {
                                                    case 1:
                                                        $arrayTeamPlayoffs_Round1['Team1_Conf1_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team1_Conf1_WIN'] = $Round1['HomeWin'];
                                                        $arrayTeamPlayoffs_Round1['Team1_Conf1_NAME'] = $Round1['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round1['Team8_Conf1_ID'] = $Round1['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team8_Conf1_WIN'] = $Round1['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round1['Team8_Conf1_NAME'] = $Round1['VisitorTeamName'];

                                                        break;
                                                    case 2:
                                                        $arrayTeamPlayoffs_Round1['Team2_Conf1_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team2_Conf1_WIN'] = $Round1['HomeWin'];
                                                        $arrayTeamPlayoffs_Round1['Team2_Conf1_NAME'] = $Round1['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round1['Team7_Conf1_ID'] = $Round1['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team7_Conf1_WIN'] = $Round1['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round1['Team7_Conf1_NAME'] = $Round1['VisitorTeamName'];

                                                        break;
                                                    case 3:
                                                        $arrayTeamPlayoffs_Round1['Team3_Conf1_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team3_Conf1_WIN'] = $Round1['HomeWin'];
                                                        $arrayTeamPlayoffs_Round1['Team3_Conf1_NAME'] = $Round1['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round1['Team6_Conf1_ID'] = $Round1['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team6_Conf1_WIN'] = $Round1['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round1['Team6_Conf1_NAME'] = $Round1['VisitorTeamName'];

                                                        break;
                                                    case 4:
                                                        $arrayTeamPlayoffs_Round1['Team4_Conf1_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team4_Conf1_WIN'] = $Round1['HomeWin'];
                                                        $arrayTeamPlayoffs_Round1['Team4_Conf1_NAME'] = $Round1['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round1['Team5_Conf1_ID'] = $Round1['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team5_Conf1_WIN'] = $Round1['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round1['Team5_Conf1_NAME'] = $Round1['VisitorTeamName'];
                                                        break;
                                                    case 6:
                                                        $arrayTeamPlayoffs_Round1['Team1_Conf2_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team1_Conf2_WIN'] = $Round1['HomeWin'];
                                                        $arrayTeamPlayoffs_Round1['Team1_Conf2_NAME'] = $Round1['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round1['Team8_Conf2_ID'] = $Round1['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team8_Conf2_WIN'] = $Round1['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round1['Team8_Conf2_NAME'] = $Round1['VisitorTeamName'];

                                                        break;
                                                    case 7:
                                                        $arrayTeamPlayoffs_Round1['Team2_Conf2_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team2_Conf2_WIN'] = $Round1['HomeWin'];
                                                        $arrayTeamPlayoffs_Round1['Team2_Conf2_NAME'] = $Round1['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round1['Team7_Conf2_ID'] = $Round1['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team7_Conf2_WIN'] = $Round1['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round1['Team7_Conf2_NAME'] = $Round1['VisitorTeamName'];

                                                        break;
                                                    case 8:
                                                        $arrayTeamPlayoffs_Round1['Team3_Conf2_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team3_Conf2_WIN'] = $Round1['HomeWin'];
                                                        $arrayTeamPlayoffs_Round1['Team3_Conf2_NAME'] = $Round1['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round1['Team6_Conf2_ID'] = $Round1['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team6_Conf2_WIN'] = $Round1['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round1['Team6_Conf2_NAME'] = $Round1['VisitorTeamName'];

                                                        break;
                                                    case 9:
                                                        $arrayTeamPlayoffs_Round1['Team4_Conf2_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team4_Conf2_WIN'] = $Round1['HomeWin'];
                                                        $arrayTeamPlayoffs_Round1['Team4_Conf2_NAME'] = $Round1['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round1['Team5_Conf2_ID'] = $Round1['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round1['Team5_Conf2_WIN'] = $Round1['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round1['Team5_Conf2_NAME'] = $Round1['VisitorTeamName'];

                                                        break;
                                                    default:
                                                        continue;
                                                        break;
                                                }
                                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round1['HomeTeam'] . "\">" . $Round1['HomeTeamName'] . " - " . $Round1['HomeWin'] . "</a><br /><br /></td>";
                                            }
                                            if ($Row['Round2'] == 0) {
                                                echo "<td></td>";
                                            } else {
                                                $Round2 = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Abbre as HomeTeamName, TeamInfoVisitor.Abbre as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round2'], true);
                                                switch ($counter) {
                                                    case 2:
                                                        $arrayTeamPlayoffs_Round2['Team1_Conf1_ID'] = $Round2['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round2['Team1_Conf1_WIN'] = $Round2['HomeWin'];
                                                        $arrayTeamPlayoffs_Round2['Team1_Conf1_NAME'] = $Round2['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round2['Team4_Conf1_ID'] = $Round2['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round2['Team4_Conf1_WIN'] = $Round2['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round2['Team4_Conf1_NAME'] = $Round2['VisitorTeamName'];

                                                        break;
                                                    case 4:
                                                        $arrayTeamPlayoffs_Round2['Team2_Conf1_ID'] = $Round2['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round2['Team2_Conf1_WIN'] = $Round2['HomeWin'];
                                                        $arrayTeamPlayoffs_Round2['Team2_Conf1_NAME'] = $Round2['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round2['Team3_Conf1_ID'] = $Round2['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round2['Team3_Conf1_WIN'] = $Round2['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round2['Team3_Conf1_NAME'] = $Round2['VisitorTeamName'];
                                                        break;
                                                    case 6:
                                                        $arrayTeamPlayoffs_Round2['Team1_Conf2_ID'] = $Round2['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round2['Team1_Conf2_WIN'] = $Round2['HomeWin'];
                                                        $arrayTeamPlayoffs_Round2['Team1_Conf2_NAME'] = $Round2['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round2['Team4_Conf2_ID'] = $Round2['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round2['Team4_Conf2_WIN'] = $Round2['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round2['Team4_Conf2_NAME'] = $Round2['VisitorTeamName'];

                                                        break;
                                                    case 8:
                                                        $arrayTeamPlayoffs_Round2['Team2_Conf2_ID'] = $Round2['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round2['Team2_Conf2_WIN'] = $Round2['HomeWin'];
                                                        $arrayTeamPlayoffs_Round2['Team2_Conf2_NAME'] = $Round2['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round2['Team3_Conf2_ID'] = $Round2['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round2['Team3_Conf2_WIN'] = $Round2['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round2['Team3_Conf2_NAME'] = $Round2['VisitorTeamName'];

                                                        break;
                                                    default:
                                                        continue;
                                                        break;
                                                }
                                                //echo "<td>";
                                                //echo "<img src=\"./images/pro-team/" . $Round2['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round2['VisitorTeam'] . "\">" . $Round2['VisitorTeamName'] . " - " . $Round2['VisitorWin'] . "</a><br />";
                                                //echo "<img src=\"./images/pro-team/" . $Round2['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round2['HomeTeam'] . "\">" . $Round2['HomeTeamName'] . " - " . $Round2['HomeWin'] . "</a><br /><br /></td>";
                                            }
                                            if ($Row['Round3'] == 0) {
                                                echo "<td></td>";
                                            } else {
                                                $Round3 = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Abbre as HomeTeamName, TeamInfoVisitor.Abbre as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round3'], true);
                                                switch ($counter) {
                                                    case 4:
                                                        $arrayTeamPlayoffs_Round3['Team1_Conf1_ID'] = $Round3['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round3['Team1_Conf1_WIN'] = $Round3['HomeWin'];
                                                        $arrayTeamPlayoffs_Round3['Team1_Conf1_NAME'] = $Round3['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round3['Team2_Conf1_ID'] = $Round3['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round3['Team2_Conf1_WIN'] = $Round3['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round3['Team2_Conf1_NAME'] = $Round3['VisitorTeamName'];
                                                        break;
                                                    case 5:
                                                        break;
                                                    case 6:
                                                        $arrayTeamPlayoffs_Round3['Team1_Conf2_ID'] = $Round3['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round3['Team1_Conf2_WIN'] = $Round3['HomeWin'];
                                                        $arrayTeamPlayoffs_Round3['Team1_Conf2_NAME'] = $Round3['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round3['Team2_Conf2_ID'] = $Round3['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round3['Team2_Conf2_WIN'] = $Round3['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round3['Team2_Conf2_NAME'] = $Round3['VisitorTeamName'];
                                                        break;
                                                    default:
                                                        continue;
                                                        break;
                                                }

                                                //echo "<td>";
                                                //echo "<img src=\"./images/pro-team/" . $Round3['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round3['VisitorTeam'] . "\">" . $Round3['VisitorTeamName'] . " - " . $Round3['VisitorWin'] . "</a><br />";
                                                //echo "<img src=\"./images/pro-team/" . $Round3['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round3['HomeTeam'] . "\">" . $Round3['HomeTeamName'] . " - " . $Round3['HomeWin'] . "</a><br /><br /></td>";
                                            }
                                            if ($Row['Round4'] == 0) {
                                                echo "<td></td>";
                                            } else {
                                                $Round4 = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Abbre as HomeTeamName, TeamInfoVisitor.Abbre as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round4'], true);
                                                switch ($counter) {
                                                    case 5:
                                                        $arrayTeamPlayoffs_Round4['Team1_Conf1_ID'] = $Round4['HomeTeam'];
                                                        $arrayTeamPlayoffs_Round4['Team1_Conf1_WIN'] = $Round4['HomeWin'];
                                                        $arrayTeamPlayoffs_Round4['Team1_Conf1_NAME'] = $Round4['HomeTeamName'];

                                                        $arrayTeamPlayoffs_Round4['Team1_Conf2_ID'] = $Round4['VisitorTeam'];
                                                        $arrayTeamPlayoffs_Round4['Team1_Conf2_WIN'] = $Round4['VisitorWin'];
                                                        $arrayTeamPlayoffs_Round4['Team1_Conf2_NAME'] = $Round4['VisitorTeamName'];
                                                        break;
                                                    default:
                                                        continue;
                                                        break;
                                                }
                                                //echo "<td>";
                                                //echo "<img src=\"./images/pro-team/" . $Round4['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round4['VisitorTeam'] . "\">" . $Round4['VisitorTeamName'] . " - " . $Round4['VisitorWin'] . "</a><br />";
                                                //echo "<img src=\"./images/pro-team/" . $Round4['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round4['HomeTeam'] . "\">" . $Round4['HomeTeamName'] . " - " . $Round4['HomeWin'] . "</a><br /><br /></td>";
                                            }
                                            if ($Row['Round5'] == 0) {
                                                echo "<td></td>";
                                            } else {
                                                $Round5 = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Abbre as HomeTeamName, TeamInfoVisitor.Abbre as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round5'], true);
                                                //echo "<td>";
                                                //echo "<img src=\"./images/pro-team/" . $Round5['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round5['VisitorTeam'] . "\">" . $Round5['VisitorTeamName'] . " - " . $Round5['VisitorWin'] . "</a><br />";
                                                //echo "<img src=\"./images/pro-team/" . $Round4['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" />";
                                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round5['HomeTeam'] . "\">" . $Round5['HomeTeamName'] . " - " . $Round5['HomeWin'] . "</a><br /><br /></td>";
                                            }
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                    <div class="bracket-box eastern division-upper matchup-upper round-1"></div>
                                    <div class="bracket-box eastern division-upper matchup-lower round-1"></div>
                                    <div class="bracket-box eastern division-lower matchup-upper round-1"></div>
                                    <div class="bracket-box eastern division-lower matchup-lower round-1"></div>
                                    <div class="bracket-box western division-upper matchup-upper round-1"></div>
                                    <div class="bracket-box western division-upper matchup-lower round-1"></div>
                                    <div class="bracket-box western division-lower matchup-upper round-1"></div>
                                    <div class="bracket-box western division-lower matchup-lower round-1"></div>
                                    <div class="bracket-box eastern division-upper round-2 shorten-bracket"></div>
                                    <div class="bracket-box eastern division-lower round-2 shorten-bracket"></div>
                                    <div class="bracket-box western division-upper round-2 shorten-bracket"></div>
                                    <div class="bracket-box western division-lower round-2 shorten-bracket"></div>
                                    <div class="bracket-box eastern round-3 shorten-bracket"></div>
                                    <div class="bracket-box western round-3 shorten-bracket"></div>
                                    <div class="bracket-box eastern round-4 hasReseed"></div>
                                    <div class="bracket-box western round-4 hasReseed"></div>

                                    <!-- Bracket Slot - Teams in there appropriate slots -->

                                    <!-- Inactif lors elimine : <div class="circle-logo-container bracket-slot-content inactive"></div>-->
                                    <div class="bracket-slot eastern atlantic round-1 rank-1 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team1_Conf2_ID'] . ".png\" alt=\"\" style=\"border-radius: 50%; max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>
                                    </div>
                                    <div class="bracket-slot eastern atlantic round-1 rank-wc ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team8_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot eastern atlantic round-1 rank-2 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team2_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot eastern atlantic round-1 rank-3 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team7_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-1 rank-1 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team3_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-1 rank-wc ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team6_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-1 rank-2 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team4_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-1 rank-3 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team5_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot western central round-1 rank-1 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team1_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot western central round-1 rank-wc ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team8_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot western central round-1 rank-2 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team2_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot western central round-1 rank-3 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team7_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot western pacific round-1 rank-1 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team3_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot western pacific round-1 rank-wc ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team6_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot western pacific round-1 rank-2 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team4_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot western pacific round-1 rank-3 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round1['Team5_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                        <?php if ($Round1 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot eastern atlantic round-2 team-upper">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round2['Team1_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot eastern atlantic round-2 team-lower">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round2['Team4_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-2 team-upper">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round2['Team2_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-2 team-lower">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round2['Team3_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot western central round-2 team-upper">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round2['Team1_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot western central round-2 team-lower">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round2['Team4_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot western pacific round-2 team-upper">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round2['Team2_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot western pacific round-2 team-lower">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round2['Team3_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>

                                    </div>
                                    <div class="bracket-slot eastern atlantic round-3">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round3['Team1_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round3 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>
                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-3">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round3['Team2_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round3 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>
                                    </div>
                                    <div class="bracket-slot western central round-3">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round3['Team1_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round3 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>
                                    </div>
                                    <div class="bracket-slot western pacific round-3">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round3['Team2_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                        <?php if ($Round3 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>
                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-4">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                            <?php
                                            if ($TypeText == 'Farm') {
                                                echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round4['Team1_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>";
                                            } else {
                                                echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round4['Team1_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>";
                                            } ?>

                                        </div>
                                        <?php if ($Round4 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>
                                    </div>
                                    <div class="bracket-slot western pacific round-4">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php
                                            if ($TypeText == 'Farm') {
                                                echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round4['Team1_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>";
                                            } else {
                                                echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs_Round4['Team1_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>";
                                            } ?>
                                        </div>
                                        <?php if ($Round4 == 0) {
                                            echo "<div class=\"circle-logo-container bracket-slot-content inactive\"></div>";
                                        } ?>
                                    </div>


                                    <a class="series-status series-status--has-link eastern atlantic 
                                    round-1 series-top">
                                        <?php
                                        if ($Round1 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round1['Team1_Conf2_NAME'] . " " . $arrayTeamPlayoffs_Round1['Team1_Conf2_WIN'] . " - " . $arrayTeamPlayoffs_Round1['Team8_Conf2_WIN'] . " " . $arrayTeamPlayoffs_Round1['Team8_Conf2_NAME'] . "";
                                        } ?>
                                    </a>

                                    <a class="series-status series-status--has-link eastern atlantic 
                                    round-1 series-bottom">
                                        <?php if ($Round1 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round1['Team2_Conf2_NAME'] . " " . $arrayTeamPlayoffs_Round1['Team2_Conf2_WIN'] . " - " . $arrayTeamPlayoffs_Round1['Team7_Conf2_WIN'] . " " . $arrayTeamPlayoffs_Round1['Team7_Conf2_NAME'] . "";
                                        } ?>
                                    </a>
                                    <a class="series-status series-status--has-link eastern metropolitan 
                                    round-1 series-top">
                                        <?php if ($Round1 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round1['Team3_Conf2_NAME'] . " " . $arrayTeamPlayoffs_Round1['Team3_Conf2_WIN'] . " - " . $arrayTeamPlayoffs_Round1['Team6_Conf2_WIN'] . " " . $arrayTeamPlayoffs_Round1['Team6_Conf2_NAME'] . "";
                                        } ?>
                                    </a>
                                    <a class="series-status series-status--has-link eastern metropolitan 
                                    round-1 series-bottom">
                                        <?php if ($Round1 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round1['Team4_Conf2_NAME'] . " " . $arrayTeamPlayoffs_Round1['Team4_Conf2_WIN'] . " - " . $arrayTeamPlayoffs_Round1['Team5_Conf2_WIN'] . " " . $arrayTeamPlayoffs_Round1['Team5_Conf2_NAME'] . "";
                                        } ?>
                                    </a>
                                    <a class="series-status series-status--has-link western central 
                                    round-1 series-top">
                                        <?php if ($Round1 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round1['Team1_Conf1_NAME'] . " " . $arrayTeamPlayoffs_Round1['Team1_Conf1_WIN'] . " - " . $arrayTeamPlayoffs_Round1['Team8_Conf1_WIN'] . " " . $arrayTeamPlayoffs_Round1['Team8_Conf1_NAME'] . "";
                                        } ?>
                                    </a>
                                    <a class="series-status series-status--has-link western central 
                                    round-1 series-bottom">
                                        <?php if ($Round1 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round1['Team2_Conf1_NAME'] . " " . $arrayTeamPlayoffs_Round1['Team2_Conf1_WIN'] . " - " . $arrayTeamPlayoffs_Round1['Team7_Conf1_WIN'] . " " . $arrayTeamPlayoffs_Round1['Team7_Conf1_NAME'] . "";
                                        } ?>
                                    </a>
                                    <a class="series-status series-status--has-link western pacific 
                                    round-1 series-top">
                                        <?php if ($Round1 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round1['Team3_Conf1_NAME'] . " " . $arrayTeamPlayoffs_Round1['Team3_Conf1_WIN'] . " - " . $arrayTeamPlayoffs_Round1['Team6_Conf1_WIN'] . " " . $arrayTeamPlayoffs_Round1['Team6_Conf1_NAME'] . "";
                                        } ?>
                                    </a>
                                    <a class="series-status series-status--has-link western pacific 
                                    round-1 series-bottom"">
                                        <?php if ($Round1 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round1['Team4_Conf1_NAME'] . " " . $arrayTeamPlayoffs_Round1['Team4_Conf1_WIN'] . " - " . $arrayTeamPlayoffs_Round1['Team5_Conf1_WIN'] . " " . $arrayTeamPlayoffs_Round1['Team5_Conf1_NAME'] . "";
                                        } ?>
                                    </a>
                                    <a class=" series-status series-status--has-link eastern atlantic round-2">
                                        <?php if ($Round2 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round2['Team1_Conf2_NAME'] . " " . $arrayTeamPlayoffs_Round2['Team1_Conf2_WIN'] . " - " . $arrayTeamPlayoffs_Round2['Team4_Conf2_WIN'] . " " . $arrayTeamPlayoffs_Round2['Team4_Conf2_NAME'] . "";
                                        } ?>
                                    </a>
                                    <a class="series-status series-status--has-link eastern metropolitan 
                                    round-2">
                                        <?php if ($Round2 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round2['Team2_Conf2_NAME'] . " " . $arrayTeamPlayoffs_Round2['Team2_Conf2_WIN'] . " - " . $arrayTeamPlayoffs_Round2['Team3_Conf2_WIN'] . " " . $arrayTeamPlayoffs_Round2['Team3_Conf2_NAME'] . "";
                                        } ?>
                                    </a>
                                    <a class="series-status series-status--has-link western central 
                                    round-2">
                                        <?php if ($Round2 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round2['Team1_Conf1_NAME'] . " " . $arrayTeamPlayoffs_Round2['Team1_Conf1_WIN'] . " - " . $arrayTeamPlayoffs_Round2['Team4_Conf1_WIN'] . " " . $arrayTeamPlayoffs_Round2['Team4_Conf1_NAME'] . "";
                                        } ?>
                                    </a>
                                    <a class="series-status series-status--has-link western pacific 
                                    round-2">
                                        <?php if ($Round2 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round2['Team2_Conf1_NAME'] . " " . $arrayTeamPlayoffs_Round2['Team2_Conf1_WIN'] . " - " . $arrayTeamPlayoffs_Round2['Team3_Conf1_WIN'] . " " . $arrayTeamPlayoffs_Round2['Team3_Conf1_NAME'] . "";
                                        } ?>
                                    </a>
                                    <a class="series-status series-status--has-link eastern
                                    round-3">
                                        <?php if ($Round3 == 0) {
                                        } else {
                                            echo " " . $arrayTeamPlayoffs_Round3['Team1_Conf2_NAME'] . " " . $arrayTeamPlayoffs_Round3['Team1_Conf2_WIN'] . " - " . $arrayTeamPlayoffs_Round3['Team2_Conf2_WIN'] . " " . $arrayTeamPlayoffs_Round3['Team2_Conf2_NAME'] . "";
                                        } ?>
                                    </a>
                                    <a class="series-status series-status--has-link western
                                    round-3"> <?php if ($Round3 == 0) {
                                                } else {
                                                    echo " " . $arrayTeamPlayoffs_Round3['Team1_Conf1_NAME'] . " " . $arrayTeamPlayoffs_Round3['Team1_Conf1_WIN'] . " - " . $arrayTeamPlayoffs_Round3['Team2_Conf1_WIN'] . " " . $arrayTeamPlayoffs_Round3['Team2_Conf1_NAME'] . "";
                                                } ?>
                                    </a>
                                    <a class="series-status series-status--has-link
                                    round-4">
                                        <?php if ($Round4 == 0) {
                                        } else {
                                            if ($TypeText == 'Farm') {
                                                echo " " . $arrayTeamPlayoffs_Round4['Team1_Conf1_NAME'] . " " . $arrayTeamPlayoffs_Round4['Team1_Conf1_WIN'] . " - " . $arrayTeamPlayoffs_Round4['Team1_Conf2_WIN'] . " " . $arrayTeamPlayoffs_Round4['Team1_Conf2_NAME'] . "";
                                            } else {
                                                echo " " . $arrayTeamPlayoffs_Round4['Team1_Conf2_NAME'] . " " . $arrayTeamPlayoffs_Round4['Team1_Conf2_WIN'] . " - " . $arrayTeamPlayoffs_Round4['Team1_Conf1_WIN'] . " " . $arrayTeamPlayoffs_Round4['Team1_Conf1_NAME'] . "";
                                            }
                                        } ?>
                                    </a>
                                    <!-- Bracket Rank - The rank of the team, mainly for wildcards -->

                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank eastern atlantic seed-1 seed
                                            round-1 primary-bd inactive\">" . 1 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank eastern atlantic seed-1 seed
                                            round-1 primary-bd\">" . 1 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank eastern atlantic seed-wc seed
                                        round-1 primary-bd inactive\">" . 8 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank eastern atlantic seed-wc seed
                                        round-1 primary-bd\">" . 8 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank eastern atlantic seed-2 seed
                                        round-1 primary-bd inactive\">" . 2 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank eastern atlantic seed-2 seed
                                        round-1 primary-bd\">" . 2 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank eastern atlantic seed-3 seed
                                        round-1 primary-bd inactive\">" . 7 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank eastern atlantic seed-3 seed
                                        round-1 primary-bd\">" . 7 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank eastern metropolitan seed-1 seed
                                        round-1 primary-bd inactive\">" . 3 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank eastern metropolitan seed-1 seed
                                        round-1 primary-bd\">" . 3 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank eastern metropolitan seed-wc seed
                                        round-1 primary-bd inactive\">" . 6 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank eastern metropolitan seed-wc seed
                                        round-1 primary-bd\">" . 6 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank eastern metropolitan seed-2 seed
                                        round-1 primary-bd inactive\">" . 4 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank eastern metropolitan seed-2 seed
                                        round-1 primary-bd\">" . 4 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank eastern metropolitan seed-3 seed
                                        round-1 primary-bd inactive\">" . 5 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank eastern metropolitan seed-3 seed
                                        round-1 primary-bd\">" . 5 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank western central seed-1 seed
                                        round-1 primary-bd inactive\">" . 1 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank western central seed-1 seed
                                        round-1 primary-bd\">" . 1 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank western central seed-wc seed
                                        round-1 primary-bd inactive\">" . 8 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank western central seed-wc seed
                                        round-1 primary-bd\">" . 8 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank western central seed-2 seed
                                        round-1 primary-bd inactive\">" . 2 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank western central seed-2 seed
                                        round-1 primary-bd\">" . 2 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank western central seed-3 seed
                                        round-1 primary-bd inactive\">" . 7 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank western central seed-3 seed
                                        round-1 primary-bd\">" . 7 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank western pacific seed-1 seed
                                        round-1 primary-bd inactive\">" . 3 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank western pacific seed-1 seed
                                        round-1 primary-bd\">" . 3 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank western pacific seed-wc seed
                                        round-1 primary-bd inactive\">" . 6 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank western pacific seed-wc seed
                                        round-1 primary-bd\">" . 6 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank western pacific seed-2 seed
                                        round-1 primary-bd inactive\">" . 4 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank western pacific seed-2 seed
                                        round-1 primary-bd\">" . 4 . "</div>";
                                    } ?>
                                    <?php if ($Round1 == 0) {
                                        echo "<div class=\"bracket-rank western pacific seed-3 seed
                                        round-1 primary-bd inactive\">" . 5 . "</div>";
                                    } else {
                                        echo "<div class=\"bracket-rank western pacific seed-3 seed
                                        round-1 primary-bd\">" . 5 . "</div>";
                                    } ?>

                                    <!-- <?php if ($Round2 == 0) {
                                                echo "<div class=\"bracket-rank eastern atlantic seed-1 seed-team-upper
                                        round-2 primary-bd inactive\">" . $arrayTeamPlayoffs_Round2['Team1_Conf2_WIN'] . "</div>";
                                            } else {
                                                echo "<div class=\"bracket-rank eastern atlantic seed-1 seed-team-upper
                                        round-2 primary-bd\">" . $arrayTeamPlayoffs_Round2['Team1_Conf2_WIN'] . "</div>";
                                            } ?>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"bracket-rank eastern atlantic seed-wc seed-team-lower
                                        round-2 primary-bd inactive\">" . $arrayTeamPlayoffs_Round2['Team4_Conf2_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank eastern atlantic seed-wc seed-team-lower
                                        round-2 primary-bd\">" . $arrayTeamPlayoffs_Round2['Team4_Conf2_WIN'] . "</div>";
                                        } ?>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"bracket-rank eastern metropolitan seed-2 seed-team-upper
                                        round-2 primary-bd inactive\">" . $arrayTeamPlayoffs_Round2['Team2_Conf2_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank eastern metropolitan seed-2 seed-team-upper
                                        round-2 primary-bd\">" . $arrayTeamPlayoffs_Round2['Team2_Conf2_WIN'] . "</div>";
                                        } ?>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"bracket-rank eastern metropolitan seed-2 seed-team-lower
                                        round-2 primary-bd inactive\">" . $arrayTeamPlayoffs_Round2['Team3_Conf2_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank eastern metropolitan seed-2 seed-team-lower
                                        round-2 primary-bd\">" . $arrayTeamPlayoffs_Round2['Team3_Conf2_WIN'] . "</div>";
                                        } ?>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"bracket-rank western central seed-1 seed-team-upper
                                        round-2 primary-bd inactive\">" . $arrayTeamPlayoffs_Round2['Team1_Conf1_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank western central seed-1 seed-team-upper
                                        round-2 primary-bd\">" . $arrayTeamPlayoffs_Round2['Team1_Conf1_WIN'] . "</div>";
                                        } ?>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"bracket-rank western central seed-3 seed-team-lower
                                        round-2 primary-bd inactive\">" . $arrayTeamPlayoffs_Round2['Team4_Conf1_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank western central seed-3 seed-team-lower
                                        round-2 primary-bd\">" . $arrayTeamPlayoffs_Round2['Team4_Conf1_WIN'] . "</div>";
                                        } ?>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"bracket-rank western pacific seed-2 seed-team-upper
                                        round-2 primary-bd inactive\">" . $arrayTeamPlayoffs_Round2['Team2_Conf1_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank western pacific seed-2 seed-team-upper
                                        round-2 primary-bd\">" . $arrayTeamPlayoffs_Round2['Team2_Conf1_WIN'] . "</div>";
                                        } ?>
                                        <?php if ($Round2 == 0) {
                                            echo "<div class=\"bracket-rank western pacific seed-1 seed-team-lower
                                        round-2 primary-bd inactive\">" . $arrayTeamPlayoffs_Round2['Team3_Conf1_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank western pacific seed-1 seed-team-lower
                                        round-2 primary-bd\">" . $arrayTeamPlayoffs_Round2['Team3_Conf1_WIN'] . "</div>";
                                        } ?>


                                        <?php if ($Round3 == 0) {
                                            echo "<div class=\"bracket-rank eastern metropolitan seed-2 seed
                                        round-3 primary-bd inactive\">" . $arrayTeamPlayoffs_Round3['Team1_Conf2_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank eastern metropolitan seed-2 seed
                                        round-3 primary-bd\">" . $arrayTeamPlayoffs_Round3['Team1_Conf2_WIN'] . "</div>";
                                        } ?>
                                        <?php if ($Round3 == 0) {
                                            echo "<div class=\"bracket-rank eastern atlantic seed-wc seed
                                        round-3 primary-bd inactive\">" . $arrayTeamPlayoffs_Round3['Team2_Conf2_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank eastern atlantic seed-wc seed
                                        round-3 primary-bd\">" . $arrayTeamPlayoffs_Round3['Team2_Conf2_WIN'] . "</div>";
                                        } ?>
                                        <?php if ($Round3 == 0) {
                                            echo "<div class=\"bracket-rank western central seed-1 seed
                                        round-3 primary-bd inactive\">" . $arrayTeamPlayoffs_Round3['Team1_Conf1_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank western central seed-1 seed
                                        round-3 primary-bd\">" . $arrayTeamPlayoffs_Round3['Team1_Conf1_WIN'] . "</div>";
                                        } ?>
                                        <?php if ($Round3 == 0) {
                                            echo "<div class=\"bracket-rank western pacific seed-1 seed
                                        round-3 primary-bd inactive\">" . $arrayTeamPlayoffs_Round3['Team2_Conf1_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank western pacific seed-1 seed
                                        round-3 primary-bd\">" . $arrayTeamPlayoffs_Round3['Team2_Conf1_WIN'] . "</div>";
                                        } ?>

                                        <?php if ($Round4 == 0) {
                                            echo "<div class=\"bracket-rank eastern metropolitan seed-2 seed
                                        round-4 primary-bd inactive\">" . $arrayTeamPlayoffs_Round4['Team1_Conf2_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank eastern metropolitan seed-2 seed
                                        round-4 primary-bd\">" . $arrayTeamPlayoffs_Round4['Team1_Conf2_WIN'] . "</div>";
                                        } ?>
                                        <?php if ($Round4 == 0) {
                                            echo "<div class=\"bracket-rank western pacific seed-1 seed
                                        round-4 primary-bd inactive\">" . $arrayTeamPlayoffs_Round4['Team1_Conf1_WIN'] . "</div>";
                                        } else {
                                            echo "<div class=\"bracket-rank western pacific seed-1 seed
                                        round-4 primary-bd\">" . $arrayTeamPlayoffs_Round4['Team1_Conf1_WIN'] . "</div>";
                                        } ?> -->


                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div><?php }
            include "Footer.php"; ?></div>