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
    echo "<table class=\"tablesorter STHSPHPStanding_Table\"><thead><tr>";
    echo "<th title=\"Position\" class=\"STHSW35\">PO</th>";
    echo "<th title=\"Team Name\" class=\"STHSW200\">" . $TeamStatLang['TeamName'] . "</th>";
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
        if ($LoopCount > 0 and $LoopCount == $LinesNumber) {
            echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"" . $ColumnPerTable . "\"><hr style=\"border-top: 1px solid red;\"/></td></tr>";
        }
    }
    echo "</tbody></table>";
}

function PrintStandingTableRow($TypeTextTeam, $row, $TypeText, $StandardStandingOutput, $PointSystemSO, $PointSystemW, $LoopCount, $DatabaseFile)
{
    echo "<tr><td>" . $LoopCount . "</td>";
    echo "<td style=\"\"><span class=\"" . $TypeText . "Standing_Team" . $row['Number'] . "\"></span>";
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
    @media screen and (max-width: 1060px) {
        .STHSWarning {
            display: block;
        }

        .STHSPHPStanding_Table thead th:nth-last-child(1) {
            display: none;
        }

        .STHSPHPStanding_Table tbody td:nth-last-child(1) {
            display: none;
        }

        .STHSPHPStanding_Table thead th:nth-last-child(3) {
            display: none;
        }

        .STHSPHPStanding_Table tbody td:nth-last-child(3) {
            display: none;
        }

        .STHSPHPStanding_Table thead th:nth-last-child(4) {
            display: none;
        }

        .STHSPHPStanding_Table tbody td:nth-last-child(4) {
            display: none;
        }

        .STHSPHPStanding_Table thead th:nth-last-child(5) {
            display: none;
        }

        .STHSPHPStanding_Table tbody td:nth-last-child(5) {
            display: none;
        }
    }

    @media screen and (max-width: 890px) {
        .STHSPHPStanding_Table thead th:nth-last-child(2) {
            display: none;
        }

        .STHSPHPStanding_Table tbody td:nth-last-child(2) {
            display: none;
        }

        .STHSPHPStanding_Table thead th:nth-last-child(6) {
            display: none;
        }

        .STHSPHPStanding_Table tbody td:nth-last-child(6) {
            display: none;
        }
    }

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
    <div style="width:100%;margin:auto;">
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
                <div class="tabmain <?php if ($LeagueGeneral['DivisionNewNHLPlayoff'] == "True") {
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
                                    echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"" . $ColumnPerTable . "\"><hr style=\"border-top: 1px solid red;\"/></td></tr>";
                                }
                            }
                        }

                        echo "</tbody></table>";


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

                        echo "</tbody></table>";
                    }
                    ?>

                </div>
                <div class="tabmain <?php if ($LeagueGeneral['DivisionNewNHLPlayoff'] == "False") {
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
                                    PrintStandingTable($TypeTextTeam, $Standing, $TypeText, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO'], $LeagueGeneral['PointSystemW'], $ColumnPerTable, $LeagueGeneral['HowManyPlayOffTeam'] / 2, $DatabaseFile);
                                } else {
                                    PrintStandingTable($TypeTextTeam, $Standing, $TypeText, $LeagueOutputOption['StandardStandingOutput'], $LeagueGeneral['PointSystemSO'], $LeagueGeneral['PointSystemW'], $ColumnPerTable, $LeagueGeneral['HowManyPlayOffTeam'], $DatabaseFile);
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
                            $Winner = $db->querySingle("Select Team" . $TypeText . "Info.Name,Team" . $TypeText . "from Team" . $TypeText . "Info WHERE Team" . $TypeText . "Info.Number = " . $LeagueGeneral['PlayOffWinner'], true);
                            echo "<div class=\"STHSCenter\">";
                            echo "<td>";
                            echo "<img src=\"./images/pro-team/" . $Winner['UniqueID'] . ".png\" alt=\"\" class=\"STHSPHPStandingPlayoffWinnerImage \" />";

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
        </div>



        <script>
            $(function() {
                $(".STHSPHPStanding_Table").tablesorter({
                    widgets: ['staticRow']
                });
            });
        </script>

    </div>

    <!DOCTYPE html>
    <html lang="en_CA">

    <head>
        <title>Stanley Cup Playoffs</title>

        <!-- meta meta tag -->
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="-1" />
        <meta http-equiv="content-language" content="en" />
        <meta name="keywords" content="nhl, nhl.com, www.nhl.com, playoffs, scores, video, photos, standings, news, features, players, shop, auctions, tickets, mobile, game center live, stanley cup, winter classic, draft, free agency" />
        <meta name="countryCode" content=CA />



        <meta property="og:title" content="Stanley Cup Playoffs" />
        <meta itemprop="name" content="Stanley Cup Playoffs NHL.com" />

        <meta property="og:site_name" content="NHL.com" />
        <meta property="og:type" content="website" />

        <meta property="og:image" content="https://www-league.nhlstatic.com/images/playoffs/en/2020/bracket-share.jpg" />
        <meta itemprop="image" content="https://www-league.nhlstatic.com/images/playoffs/en/2020/bracket-share.jpg" />

        <link rel="canonical" href="https://www.nhl.com/stanley-cup-playoffs" />

        <meta property="og:url" content="https://www.nhl.com/stanley-cup-playoffs" />

        <meta name="description" content="The official home of the National Hockey League Playoff Page including playoff news, bracket, and video." />
        <meta property="og:description" content="The official home of the National Hockey League Playoff Page including playoff news, bracket, and video." />
        <meta property="description" content="The official home of the National Hockey League Playoff Page including playoff news, bracket, and video." />

        <meta property="fb:app_id" content="" />
        <meta property="fb:pages" content="61652252465" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="env" content="production" />

        <meta name="build" content="true" />

        <meta name="server_url" content="https://www.nhl.com" />
        <meta name="secure_url" content="https://localhost:3000" />
        <meta name="service_url" content="" />
        <meta name="suggest_url" content="//suggest.svc.nhl.com" />
        <meta name="uistatic_url" content="//www-league.nhlstatic.com/nhl.com" />
        <meta name="uistatic_cms_url" content="//www-league.nhlstatic.com" />
        <meta name="login_url" content="https://account.nhl.com/ui/pub/login?lang&#x3D;en" />
        <meta name="sign_out_url" content="https://account.nhl.com/ui/SignOut?lang&#x3D;en" />
        <meta name="account_url" content="https://account.nhl.com/ui/?lang&#x3D;en&amp;returnLabel&#x3D;NHL.com" />
        <meta name="rogers_login_url" content="https://www.nhl.com/login/rogers" />
        <meta name="rogers_account_url" content="https://gamecentrelive.rogers.com/en/" />
        <meta name="bamcontent_client_url" content="https://cms.nhl.bamgrid.com" />
        <meta name="game_data_url" content="https://statsapi.web.nhl.com" />
        <meta name="control_plane_url" content="https://user.svc.nhl.com" />
        <meta name="control_plane_client_token" content="d2ViX25obC12MS4wLjA6MmQxZDg0NmVhM2IxOTRhMThlZjQwYWM5ZmJjZTk3ZTM&#x3D;" />
        <meta name="recon_rest" content="https://localhost:3000" />
        <meta name="recon_ws" content="wss://localhost:3000" />
        <meta name="msapplication-config" content="none" />
        <meta name="app-view" content="web" />
        <meta name="club" content="nhl" />
        <meta name="team_id" content="" />
        <meta name="inactive_team_id" content="" />
        <meta name="context-url-prefix" content="" />
        <meta name="locale" content="en" />
        <meta name="lang" content="en_CA" />
        <meta name="appversion" content="peppercorn@1.1.0">
        <meta name="dfpAdUnitHierarchy" content="nhl_web_en">

        <meta name="site_code" content="en_nhlCA" />

        <meta name="geolocation" content="CA" />
        <meta name="isTrueUSGeo" content="false" />
        <meta name="serverTime" content="2021-05-11T06:17:24-04:00" />
        <meta name="flipTime" content="12:00" />
        <meta name="flipTimeZoneOffset" content="-04:00" />

        <meta name="scoresDatesDisplay" content="" />
        <meta name="scoresDatesLoad" content="" />
        <meta name="scoresDatesEnd" content="" />

        <meta name="enableTicketLinkTranslation" content="false" />


        <meta name="scoresLeaderGameTypes" content="R" />

        <meta name="doubleclickNetworkId" content="21668666170" />

        <meta name="iasPubID" content="929269" />
        <meta name="enableIAS" content="true" />

        <meta name="enableAppNexus" content="true" />


        <meta name="scoresRecapURL--2018040641" content="" />

        <meta name="scoresWatchURL--2018040641" content="" />

        <meta name="scoresGameCenterURL--2018040641" content="" />


        <meta name="scoresRecapURL--2018040642" content="" />

        <meta name="scoresWatchURL--2018040642" content="" />

        <meta name="scoresGameCenterURL--2018040642" content="" />


        <meta name="scoresRecapURL--2018040643" content="" />

        <meta name="scoresWatchURL--2018040643" content="" />

        <meta name="scoresGameCenterURL--2018040643" content="" />





        <meta name="colorPalette" content="lightPalette" />

        <meta name="omniturePageName" content="2020 Playoffs" />

        <meta name="omniturePageProps" content="%7B%22pageName%22%3A%22playoffs%22%2C%22registrationPoints%22%3A%22playoffs%22%7D" />

        <meta name="paywall" content="true" />

        <meta name="header" content="true" />


        <meta name="apple-mobile-web-app-title" content="NHL.com" />



        <link rel="alternate" href="https://www.nhl.com/fi/stanley-cup-playoffs" hreflang="fi-fi" />
        <link rel="alternate" href="https://www.nhl.com/de/stanley-cup-playoffs" hreflang="de-de" />
        <link rel="alternate" href="https://www.nhl.com/fr/stanley-cup-playoffs" hreflang="fr-ca" />
        <link rel="alternate" href="https://www.nhl.com/sk/stanley-cup-playoffs" hreflang="sk-sk" />
        <link rel="alternate" href="https://www.nhl.com/cs/stanley-cup-playoffs" hreflang="cs-cz" />
        <link rel="alternate" href="https://www.nhl.com/ru/stanley-cup-playoffs" hreflang="ru-ru" />
        <link rel="alternate" href="https://www.nhl.com/sv/stanley-cup-playoffs" hreflang="sv-se" />
        <link rel="alternate" href="https://www.nhl.com/stanley-cup-playoffs" hreflang="en-us" />
        <link rel="alternate" href="https://www.nhl.com/stanley-cup-playoffs" hreflang="x-default" />


        <link rel="shortcut icon" href="//www-league.nhlstatic.com/nhl.com/builds/site-core/80600c08b77b058d3b5615c1aabe57b9d81b2442_1618934609/images/favicon.ico">

        <link rel="apple-touch-icon" sizes="57x57" href="//www-league.nhlstatic.com/nhl.com/builds/site-core/80600c08b77b058d3b5615c1aabe57b9d81b2442_1618934609/images/iOS/apple-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="//www-league.nhlstatic.com/nhl.com/builds/site-core/80600c08b77b058d3b5615c1aabe57b9d81b2442_1618934609/images/iOS/apple-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="//www-league.nhlstatic.com/nhl.com/builds/site-core/80600c08b77b058d3b5615c1aabe57b9d81b2442_1618934609/images/iOS/apple-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="//www-league.nhlstatic.com/nhl.com/builds/site-core/80600c08b77b058d3b5615c1aabe57b9d81b2442_1618934609/images/iOS/apple-icon-144x144.png" />

        <meta name="siteCoreBuildPath" content="//www-league.nhlstatic.com/nhl.com/builds" />
        <meta name="siteCoreBuildVersionDirectory" content="80600c08b77b058d3b5615c1aabe57b9d81b2442_1618934609/" />



        <!-- new relic -->

        <script type="text/javascript">
            window.NREUM || (NREUM = {}), __nr_require = function(t, e, n) {
                function r(n) {
                    if (!e[n]) {
                        var o = e[n] = {
                            exports: {}
                        };
                        t[n][0].call(o.exports, function(e) {
                            var o = t[n][1][e];
                            return r(o ? o : e)
                        }, o, o.exports)
                    }
                    return e[n].exports
                }
                if ("function" == typeof __nr_require) return __nr_require;
                for (var o = 0; o < n.length; o++) r(n[o]);
                return r
            }({
                QJf3ax: [function(t, e) {
                    function n(t) {
                        function e(e, n, a) {
                            t && t(e, n, a), a || (a = {});
                            for (var c = s(e), f = c.length, u = i(a, o, r), d = 0; f > d; d++) c[d].apply(u, n);
                            return u
                        }

                        function a(t, e) {
                            f[t] = s(t).concat(e)
                        }

                        function s(t) {
                            return f[t] || []
                        }

                        function c() {
                            return n(e)
                        }
                        var f = {};
                        return {
                            on: a,
                            emit: e,
                            create: c,
                            listeners: s,
                            _events: f
                        }
                    }

                    function r() {
                        return {}
                    }
                    var o = "nr@context",
                        i = t("gos");
                    e.exports = n()
                }, {
                    gos: "7eSDFh"
                }],
                ee: [function(t, e) {
                    e.exports = t("QJf3ax")
                }, {}],
                3: [function(t) {
                    function e(t) {
                        try {
                            i.console && console.log(t)
                        } catch (e) {}
                    }
                    var n, r = t("ee"),
                        o = t(1),
                        i = {};
                    try {
                        n = localStorage.getItem("__nr_flags").split(","), console && "function" == typeof console.log && (i.console = !0, -1 !== n.indexOf("dev") && (i.dev = !0), -1 !== n.indexOf("nr_dev") && (i.nrDev = !0))
                    } catch (a) {}
                    i.nrDev && r.on("internal-error", function(t) {
                        e(t.stack)
                    }), i.dev && r.on("fn-err", function(t, n, r) {
                        e(r.stack)
                    }), i.dev && (e("NR AGENT IN DEVELOPMENT MODE"), e("flags: " + o(i, function(t) {
                        return t
                    }).join(", ")))
                }, {
                    1: 22,
                    ee: "QJf3ax"
                }],
                4: [function(t) {
                    function e(t, e, n, i, s) {
                        try {
                            c ? c -= 1 : r("err", [s || new UncaughtException(t, e, n)])
                        } catch (f) {
                            try {
                                r("ierr", [f, (new Date).getTime(), !0])
                            } catch (u) {}
                        }
                        return "function" == typeof a ? a.apply(this, o(arguments)) : !1
                    }

                    function UncaughtException(t, e, n) {
                        this.message = t || "Uncaught error with no additional information", this.sourceURL = e, this.line = n
                    }

                    function n(t) {
                        r("err", [t, (new Date).getTime()])
                    }
                    var r = t("handle"),
                        o = t(6),
                        i = t("ee"),
                        a = window.onerror,
                        s = !1,
                        c = 0;
                    t("loader").features.err = !0, t(5), window.onerror = e;
                    try {
                        throw new Error
                    } catch (f) {
                        "stack" in f && (t(1), t(2), "addEventListener" in window && t(3), window.XMLHttpRequest && XMLHttpRequest.prototype && XMLHttpRequest.prototype.addEventListener && window.XMLHttpRequest && XMLHttpRequest.prototype && XMLHttpRequest.prototype.addEventListener && !/CriOS/.test(navigator.userAgent) && t(4), s = !0)
                    }
                    i.on("fn-start", function() {
                        s && (c += 1)
                    }), i.on("fn-err", function(t, e, r) {
                        s && (this.thrown = !0, n(r))
                    }), i.on("fn-end", function() {
                        s && !this.thrown && c > 0 && (c -= 1)
                    }), i.on("internal-error", function(t) {
                        r("ierr", [t, (new Date).getTime(), !0])
                    })
                }, {
                    1: 9,
                    2: 8,
                    3: 6,
                    4: 10,
                    5: 3,
                    6: 23,
                    ee: "QJf3ax",
                    handle: "D5DuLP",
                    loader: "G9z0Bl"
                }],
                5: [function(t) {
                    function e() {}
                    if (window.performance && window.performance.timing && window.performance.getEntriesByType) {
                        var n = t("ee"),
                            r = t("handle"),
                            o = t(1),
                            i = t(2);
                        t("loader").features.stn = !0, t(3), n.on("fn-start", function(t) {
                            var e = t[0];
                            e instanceof Event && (this.bstStart = Date.now())
                        }), n.on("fn-end", function(t, e) {
                            var n = t[0];
                            n instanceof Event && r("bst", [n, e, this.bstStart, Date.now()])
                        }), o.on("fn-start", function(t, e, n) {
                            this.bstStart = Date.now(), this.bstType = n
                        }), o.on("fn-end", function(t, e) {
                            r("bstTimer", [e, this.bstStart, Date.now(), this.bstType])
                        }), i.on("fn-start", function() {
                            this.bstStart = Date.now()
                        }), i.on("fn-end", function(t, e) {
                            r("bstTimer", [e, this.bstStart, Date.now(), "requestAnimationFrame"])
                        }), n.on("pushState-start", function() {
                            this.time = Date.now(), this.startPath = location.pathname + location.hash
                        }), n.on("pushState-end", function() {
                            r("bstHist", [location.pathname + location.hash, this.startPath, this.time])
                        }), "addEventListener" in window.performance && (window.performance.addEventListener("webkitresourcetimingbufferfull", function() {
                            r("bstResource", [window.performance.getEntriesByType("resource")]), window.performance.webkitClearResourceTimings()
                        }, !1), window.performance.addEventListener("resourcetimingbufferfull", function() {
                            r("bstResource", [window.performance.getEntriesByType("resource")]), window.performance.clearResourceTimings()
                        }, !1)), document.addEventListener("scroll", e, !1), document.addEventListener("keypress", e, !1), document.addEventListener("click", e, !1)
                    }
                }, {
                    1: 9,
                    2: 8,
                    3: 7,
                    ee: "QJf3ax",
                    handle: "D5DuLP",
                    loader: "G9z0Bl"
                }],
                6: [function(t, e) {
                    function n(t) {
                        i.inPlace(t, ["addEventListener", "removeEventListener"], "-", r)
                    }

                    function r(t) {
                        return t[1]
                    }
                    var o = (t(1), t("ee").create()),
                        i = t(2)(o),
                        a = t("gos");
                    if (e.exports = o, n(window), "getPrototypeOf" in Object) {
                        for (var s = document; s && !s.hasOwnProperty("addEventListener");) s = Object.getPrototypeOf(s);
                        s && n(s);
                        for (var c = XMLHttpRequest.prototype; c && !c.hasOwnProperty("addEventListener");) c = Object.getPrototypeOf(c);
                        c && n(c)
                    } else XMLHttpRequest.prototype.hasOwnProperty("addEventListener") && n(XMLHttpRequest.prototype);
                    o.on("addEventListener-start", function(t) {
                        if (t[1]) {
                            var e = t[1];
                            "function" == typeof e ? this.wrapped = t[1] = a(e, "nr@wrapped", function() {
                                return i(e, "fn-", null, e.name || "anonymous")
                            }) : "function" == typeof e.handleEvent && i.inPlace(e, ["handleEvent"], "fn-")
                        }
                    }), o.on("removeEventListener-start", function(t) {
                        var e = this.wrapped;
                        e && (t[1] = e)
                    })
                }, {
                    1: 23,
                    2: 24,
                    ee: "QJf3ax",
                    gos: "7eSDFh"
                }],
                7: [function(t, e) {
                    var n = (t(2), t("ee").create()),
                        r = t(1)(n);
                    e.exports = n, r.inPlace(window.history, ["pushState"], "-")
                }, {
                    1: 24,
                    2: 23,
                    ee: "QJf3ax"
                }],
                8: [function(t, e) {
                    var n = (t(2), t("ee").create()),
                        r = t(1)(n);
                    e.exports = n, r.inPlace(window, ["requestAnimationFrame", "mozRequestAnimationFrame", "webkitRequestAnimationFrame", "msRequestAnimationFrame"], "raf-"), n.on("raf-start", function(t) {
                        t[0] = r(t[0], "fn-")
                    })
                }, {
                    1: 24,
                    2: 23,
                    ee: "QJf3ax"
                }],
                9: [function(t, e) {
                    function n(t, e, n) {
                        t[0] = o(t[0], "fn-", null, n)
                    }
                    var r = (t(2), t("ee").create()),
                        o = t(1)(r);
                    e.exports = r, o.inPlace(window, ["setTimeout", "setInterval", "setImmediate"], "setTimer-"), r.on("setTimer-start", n)
                }, {
                    1: 24,
                    2: 23,
                    ee: "QJf3ax"
                }],
                10: [function(t, e) {
                    function n() {
                        f.inPlace(this, p, "fn-")
                    }

                    function r(t, e) {
                        f.inPlace(e, ["onreadystatechange"], "fn-")
                    }

                    function o(t, e) {
                        return e
                    }

                    function i(t, e) {
                        for (var n in t) e[n] = t[n];
                        return e
                    }
                    var a = t("ee").create(),
                        s = t(1),
                        c = t(2),
                        f = c(a),
                        u = c(s),
                        d = window.XMLHttpRequest,
                        p = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"];
                    e.exports = a, window.XMLHttpRequest = function(t) {
                        var e = new d(t);
                        try {
                            a.emit("new-xhr", [], e), u.inPlace(e, ["addEventListener", "removeEventListener"], "-", o), e.addEventListener("readystatechange", n, !1)
                        } catch (r) {
                            try {
                                a.emit("internal-error", [r])
                            } catch (i) {}
                        }
                        return e
                    }, i(d, XMLHttpRequest), XMLHttpRequest.prototype = d.prototype, f.inPlace(XMLHttpRequest.prototype, ["open", "send"], "-xhr-", o), a.on("send-xhr-start", r), a.on("open-xhr-start", r)
                }, {
                    1: 6,
                    2: 24,
                    ee: "QJf3ax"
                }],
                11: [function(t) {
                    function e(t) {
                        var e = this.params,
                            r = this.metrics;
                        if (!this.ended) {
                            this.ended = !0;
                            for (var i = 0; c > i; i++) t.removeEventListener(s[i], this.listener, !1);
                            if (!e.aborted) {
                                if (r.duration = (new Date).getTime() - this.startTime, 4 === t.readyState) {
                                    e.status = t.status;
                                    var a = t.responseType,
                                        f = "arraybuffer" === a || "blob" === a || "json" === a ? t.response : t.responseText,
                                        u = n(f);
                                    if (u && (r.rxSize = u), this.sameOrigin) {
                                        var d = t.getResponseHeader("X-NewRelic-App-Data");
                                        d && (e.cat = d.split(", ").pop())
                                    }
                                } else e.status = 0;
                                r.cbTime = this.cbTime, o("xhr", [e, r, this.startTime])
                            }
                        }
                    }

                    function n(t) {
                        if ("string" == typeof t && t.length) return t.length;
                        if ("object" != typeof t) return void 0;
                        if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t.byteLength) return t.byteLength;
                        if ("undefined" != typeof Blob && t instanceof Blob && t.size) return t.size;
                        if ("undefined" != typeof FormData && t instanceof FormData) return void 0;
                        try {
                            return JSON.stringify(t).length
                        } catch (e) {
                            return void 0
                        }
                    }

                    function r(t, e) {
                        var n = i(e),
                            r = t.params;
                        r.host = n.hostname + ":" + n.port, r.pathname = n.pathname, t.sameOrigin = n.sameOrigin
                    }
                    if (window.XMLHttpRequest && XMLHttpRequest.prototype && XMLHttpRequest.prototype.addEventListener && !/CriOS/.test(navigator.userAgent)) {
                        t("loader").features.xhr = !0;
                        var o = t("handle"),
                            i = t(2),
                            a = t("ee"),
                            s = ["load", "error", "abort", "timeout"],
                            c = s.length,
                            f = t(1);
                        t(4), t(3), a.on("new-xhr", function() {
                            this.totalCbs = 0, this.called = 0, this.cbTime = 0, this.end = e, this.ended = !1, this.xhrGuids = {}
                        }), a.on("open-xhr-start", function(t) {
                            this.params = {
                                method: t[0]
                            }, r(this, t[1]), this.metrics = {}
                        }), a.on("open-xhr-end", function(t, e) {
                            "loader_config" in NREUM && "xpid" in NREUM.loader_config && this.sameOrigin && e.setRequestHeader("X-NewRelic-ID", NREUM.loader_config.xpid)
                        }), a.on("send-xhr-start", function(t, e) {
                            var r = this.metrics,
                                o = t[0],
                                i = this;
                            if (r && o) {
                                var f = n(o);
                                f && (r.txSize = f)
                            }
                            this.startTime = (new Date).getTime(), this.listener = function(t) {
                                try {
                                    "abort" === t.type && (i.params.aborted = !0), ("load" !== t.type || i.called === i.totalCbs && (i.onloadCalled || "function" != typeof e.onload)) && i.end(e)
                                } catch (n) {
                                    try {
                                        a.emit("internal-error", [n])
                                    } catch (r) {}
                                }
                            };
                            for (var u = 0; c > u; u++) e.addEventListener(s[u], this.listener, !1)
                        }), a.on("xhr-cb-time", function(t, e, n) {
                            this.cbTime += t, e ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof n.onload || this.end(n)
                        }), a.on("xhr-load-added", function(t, e) {
                            var n = "" + f(t) + !!e;
                            this.xhrGuids && !this.xhrGuids[n] && (this.xhrGuids[n] = !0, this.totalCbs += 1)
                        }), a.on("xhr-load-removed", function(t, e) {
                            var n = "" + f(t) + !!e;
                            this.xhrGuids && this.xhrGuids[n] && (delete this.xhrGuids[n], this.totalCbs -= 1)
                        }), a.on("addEventListener-end", function(t, e) {
                            e instanceof XMLHttpRequest && "load" === t[0] && a.emit("xhr-load-added", [t[1], t[2]], e)
                        }), a.on("removeEventListener-end", function(t, e) {
                            e instanceof XMLHttpRequest && "load" === t[0] && a.emit("xhr-load-removed", [t[1], t[2]], e)
                        }), a.on("fn-start", function(t, e, n) {
                            e instanceof XMLHttpRequest && ("onload" === n && (this.onload = !0), ("load" === (t[0] && t[0].type) || this.onload) && (this.xhrCbStart = (new Date).getTime()))
                        }), a.on("fn-end", function(t, e) {
                            this.xhrCbStart && a.emit("xhr-cb-time", [(new Date).getTime() - this.xhrCbStart, this.onload, e], e)
                        })
                    }
                }, {
                    1: "XL7HBI",
                    2: 12,
                    3: 10,
                    4: 6,
                    ee: "QJf3ax",
                    handle: "D5DuLP",
                    loader: "G9z0Bl"
                }],
                12: [function(t, e) {
                    e.exports = function(t) {
                        var e = document.createElement("a"),
                            n = window.location,
                            r = {};
                        e.href = t, r.port = e.port;
                        var o = e.href.split("://");
                        return !r.port && o[1] && (r.port = o[1].split("/")[0].split("@").pop().split(":")[1]), r.port && "0" !== r.port || (r.port = "https" === o[0] ? "443" : "80"), r.hostname = e.hostname || n.hostname, r.pathname = e.pathname, r.protocol = o[0], "/" !== r.pathname.charAt(0) && (r.pathname = "/" + r.pathname), r.sameOrigin = !e.hostname || e.hostname === document.domain && e.port === n.port && e.protocol === n.protocol, r
                    }
                }, {}],
                13: [function(t, e) {
                    function n(t) {
                        return function() {
                            r(t, [(new Date).getTime()].concat(i(arguments)))
                        }
                    }
                    var r = t("handle"),
                        o = t(1),
                        i = t(2);
                    "undefined" == typeof window.newrelic && (newrelic = window.NREUM);
                    var a = ["setPageViewName", "addPageAction", "setCustomAttribute", "finished", "addToTrace", "inlineHit", "noticeError"];
                    o(a, function(t, e) {
                        window.NREUM[e] = n("api-" + e)
                    }), e.exports = window.NREUM
                }, {
                    1: 22,
                    2: 23,
                    handle: "D5DuLP"
                }],
                "7eSDFh": [function(t, e) {
                    function n(t, e, n) {
                        if (r.call(t, e)) return t[e];
                        var o = n();
                        if (Object.defineProperty && Object.keys) try {
                            return Object.defineProperty(t, e, {
                                value: o,
                                writable: !0,
                                enumerable: !1
                            }), o
                        } catch (i) {}
                        return t[e] = o, o
                    }
                    var r = Object.prototype.hasOwnProperty;
                    e.exports = n
                }, {}],
                gos: [function(t, e) {
                    e.exports = t("7eSDFh")
                }, {}],
                handle: [function(t, e) {
                    e.exports = t("D5DuLP")
                }, {}],
                D5DuLP: [function(t, e) {
                    function n(t, e, n) {
                        return r.listeners(t).length ? r.emit(t, e, n) : (o[t] || (o[t] = []), void o[t].push(e))
                    }
                    var r = t("ee").create(),
                        o = {};
                    e.exports = n, n.ee = r, r.q = o
                }, {
                    ee: "QJf3ax"
                }],
                id: [function(t, e) {
                    e.exports = t("XL7HBI")
                }, {}],
                XL7HBI: [function(t, e) {
                    function n(t) {
                        var e = typeof t;
                        return !t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : i(t, o, function() {
                            return r++
                        })
                    }
                    var r = 1,
                        o = "nr@id",
                        i = t("gos");
                    e.exports = n
                }, {
                    gos: "7eSDFh"
                }],
                G9z0Bl: [function(t, e) {
                    function n() {
                        var t = p.info = NREUM.info,
                            e = f.getElementsByTagName("script")[0];
                        if (t && t.licenseKey && t.applicationID && e) {
                            s(d, function(e, n) {
                                e in t || (t[e] = n)
                            });
                            var n = "https" === u.split(":")[0] || t.sslForHttp;
                            p.proto = n ? "https://" : "http://", a("mark", ["onload", i()]);
                            var r = f.createElement("script");
                            r.src = p.proto + t.agent, e.parentNode.insertBefore(r, e)
                        }
                    }

                    function r() {
                        "complete" === f.readyState && o()
                    }

                    function o() {
                        a("mark", ["domContent", i()])
                    }

                    function i() {
                        return (new Date).getTime()
                    }
                    var a = t("handle"),
                        s = t(1),
                        c = (t(2), window),
                        f = c.document,
                        u = ("" + location).split("?")[0],
                        d = {
                            beacon: "bam.nr-data.net",
                            errorBeacon: "bam.nr-data.net",
                            agent: "js-agent.newrelic.com/nr-632.min.js"
                        },
                        p = e.exports = {
                            offset: i(),
                            origin: u,
                            features: {}
                        };
                    f.addEventListener ? (f.addEventListener("DOMContentLoaded", o, !1), c.addEventListener("load", n, !1)) : (f.attachEvent("onreadystatechange", r), c.attachEvent("onload", n)), a("mark", ["firstbyte", i()])
                }, {
                    1: 22,
                    2: 13,
                    handle: "D5DuLP"
                }],
                loader: [function(t, e) {
                    e.exports = t("G9z0Bl")
                }, {}],
                22: [function(t, e) {
                    function n(t, e) {
                        var n = [],
                            o = "",
                            i = 0;
                        for (o in t) r.call(t, o) && (n[i] = e(o, t[o]), i += 1);
                        return n
                    }
                    var r = Object.prototype.hasOwnProperty;
                    e.exports = n
                }, {}],
                23: [function(t, e) {
                    function n(t, e, n) {
                        e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                        for (var r = -1, o = n - e || 0, i = Array(0 > o ? 0 : o); ++r < o;) i[r] = t[e + r];
                        return i
                    }
                    e.exports = n
                }, {}],
                24: [function(t, e) {
                    function n(t) {
                        return !(t && "function" == typeof t && t.apply && !t[i])
                    }
                    var r = t("ee"),
                        o = t(1),
                        i = "nr@wrapper",
                        a = Object.prototype.hasOwnProperty;
                    e.exports = function(t) {
                        function e(t, e, r, a) {
                            function nrWrapper() {
                                var n, i, s, f;
                                try {
                                    i = this, n = o(arguments), s = r && r(n, i) || {}
                                } catch (d) {
                                    u([d, "", [n, i, a], s])
                                }
                                c(e + "start", [n, i, a], s);
                                try {
                                    return f = t.apply(i, n)
                                } catch (p) {
                                    throw c(e + "err", [n, i, p], s), p
                                } finally {
                                    c(e + "end", [n, i, f], s)
                                }
                            }
                            return n(t) ? t : (e || (e = ""), nrWrapper[i] = !0, f(t, nrWrapper), nrWrapper)
                        }

                        function s(t, r, o, i) {
                            o || (o = "");
                            var a, s, c, f = "-" === o.charAt(0);
                            for (c = 0; c < r.length; c++) s = r[c], a = t[s], n(a) || (t[s] = e(a, f ? s + o : o, i, s))
                        }

                        function c(e, n, r) {
                            try {
                                t.emit(e, n, r)
                            } catch (o) {
                                u([o, e, n, r])
                            }
                        }

                        function f(t, e) {
                            if (Object.defineProperty && Object.keys) try {
                                var n = Object.keys(t);
                                return n.forEach(function(n) {
                                    Object.defineProperty(e, n, {
                                        get: function() {
                                            return t[n]
                                        },
                                        set: function(e) {
                                            return t[n] = e, e
                                        }
                                    })
                                }), e
                            } catch (r) {
                                u([r])
                            }
                            for (var o in t) a.call(t, o) && (e[o] = t[o]);
                            return e
                        }

                        function u(e) {
                            try {
                                t.emit("internal-error", e)
                            } catch (n) {}
                        }
                        return t || (t = r), e.inPlace = s, e.flag = i, e
                    }
                }, {
                    1: 23,
                    ee: "QJf3ax"
                }]
            }, {}, ["G9z0Bl", 4, 11, 5]);;
            NREUM.info = {
                beacon: "bam.nr-data.net",
                errorBeacon: "bam.nr-data.net",
                licenseKey: "870f1eea68",
                applicationID: "56964169",
                sa: 1,
                agent: "js-agent.newrelic.com/nr-632.min.js"
            }
        </script>


        <!-- ld+json -->


        <script type="text/javascript">
            ! function(a, b) {
                "function" != typeof define || !define.amd || "undefined" != typeof bam && "function" == typeof bam.define ? a.deviceBootstrap = b() : define("../device", [], b)
            }(this, function() {
                function a(a, b) {
                    return a && b ? a[b] : a
                }

                function b(a) {
                    var b = a.split(w).slice(0, 3);
                    return a && b.length < 2 && b.push(0), b.join(".")
                }

                function c(a) {
                    return a = a || navigator.userAgent, D[a] ? D[a] : this instanceof c ? (D[a] = this, this.userAgent = a, this.is = {}, this.platform = this.getPlatform(), this.platformVersion = this.getPlatformVersion(), this.browser = this.getBrowser(), this.browserVersion = this.getBrowserVersion(), void(this.formFactor = this.getFormFactor())) : new c(a)
                }
                var d = "(",
                    e = ")",
                    f = "i",
                    g = "|",
                    h = "desktop",
                    i = "version",
                    j = "",
                    k = function(a, b) {
                        return new RegExp(a, b || f)
                    },
                    l = "iP(?:hone|ad|od)",
                    m = "(?:BlackBerry|BB10| RIM )",
                    n = "Android",
                    o = "Windows",
                    p = "WPDesktop",
                    q = o + " Phone",
                    r = "Trident(?:.*?Touch(?:.*?Mobile))",
                    s = "Linux(?!.*Android)",
                    t = "Macintosh",
                    u = "CrOS",
                    v = d + "?:" + [t, o, s, u].join(g) + e,
                    w = /[\._]/,
                    x = {
                        windowsphone: k(r + g + q + g + p),
                        windows: k(o),
                        ios: k(l),
                        blackberry: k(m),
                        android: k(n),
                        linux: k(s),
                        macintosh: k(t),
                        chromebook: k(u)
                    },
                    y = {
                        desktop: /(?:Windows NT(?!.*WPDesktop)(?!.*Xbox))/i,
                        tablet: k(d + ["Tablet|iPad", "\\sNT.*?" + r, n + "(?!.*Mobi)", "silk", m + ".*?Tablet", "xbox"].join(g) + e),
                        phone: k(d + ["Mobi|Mobile", "WPDesktop", l, r, m].join(g) + e)
                    },
                    z = {
                        tablet: k(d + ["Tablet|iPad", "\\sNT.*?" + r, n + "(?!.*Mobi)", "silk", m + ".*?Tablet"].join(g) + e),
                        phone: k(d + ["Mobi|Mobile", l, r, m].join(g) + e),
                        desktop: k(v)
                    },
                    A = {
                        msie: /msie|iemobile|trident/i,
                        edge: /edge/i,
                        android: /android(?!.+(?:chrome|silk))/i,
                        chrome: /chrome|crios/i,
                        firefox: /firefox/i,
                        opera: /opera(?!.*?mini)\//i,
                        operamini: /opera mini/i,
                        silk: /silk/i,
                        safari: /safari/i
                    },
                    B = {
                        webkit: /AppleWebKit/i,
                        gecko: /gecko\//i,
                        trident: /trident/i,
                        edge: /Edge/i
                    },
                    C = {
                        desktop: "desktop",
                        other: h,
                        phone: "phone",
                        tablet: "tablet"
                    },
                    D = {};
                return c.prototype = {
                    getPlatform: function() {
                        return this.test(x) || h
                    },
                    getPlatformVersion: function() {
                        return b(this.match(k("(?:" + (this.is.blackberry ? i : this.platform) + "|" + q + "|OS)[^\\d]+([\\d\\.\\_]+)", "ig"), 1))
                    },
                    getBrowser: function() {
                        return this.test(B), this.test(A) || h
                    },
                    getFormFactor: function() {
                        var a = "";
                        return a = this.is.msie ? y : z, C[this.test(a)] || C.other
                    },
                    getBrowserVersion: function() {
                        var a = this.browser,
                            c = "[\\/\\s]";
                        return this.is.chrome && this.is.ios ? a = "crios" : this.is.opera ? a = i : this.is.msie && (a = a + g + "IEMobile" + g + "rv", c = "[\\/\\:\\s]"), b(this.match(k("(?:" + a + g + i + ")" + c + "([\\d\\.]+)", "i"), 1))
                    },
                    match: function(b, c) {
                        return a(b.exec(this.userAgent), c) || j
                    },
                    test: function(a) {
                        var b, c, d, e = this.userAgent;
                        for (b in a) c = a[b].test(e), this.is[b] = this.is[b] || c && !d, c && !d && (d = b);
                        return d
                    }
                }, c
            });

            //Device Detection
            (function() {

                window.getStartupDeviceTypeString = function() {

                    var type = "";

                    if (window.deviceBootstrap) {
                        type = !type ? window.deviceBootstrap().formFactor : type;
                    } else {
                        console.error("Device Detection", "Module not loaded. Check /templates/meta.html. Pass ?device='[formFactor]' for testing");
                    }

                    return type;
                }

                document.getElementsByTagName('html')[0].className += ' device-' + getStartupDeviceTypeString();

            })();
        </script>



        <script type="text/javascript">
            (function() {

                var siteLess = {
                    "desktop": "site-all",
                    "tablet": "site-all",
                    "phone": "site-all"
                };
                var sectionLess = {
                    "desktop": "section",
                    "tablet": "section",
                    "phone": "section"
                };
                var pageLess = {
                    "desktop": "index",
                    "tablet": "index",
                    "phone": "index"
                };
                var type = getStartupDeviceTypeString();

                if (siteLess[type]) {
                    document.write('<link rel="stylesheet" type="text/css" href="//www-league.nhlstatic.com/nhl.com/builds/site-core/80600c08b77b058d3b5615c1aabe57b9d81b2442_1618934609/styles/' + siteLess[type] + '.css.gz" />');
                }

                if (sectionLess[type]) {
                    document.write('<link rel="stylesheet" type="text/css" href="//www-league.nhlstatic.com/nhl.com/sections/playoffs/builds/71d33d815ff0cba1eb50bd828ea7c4cee7b80777_1617809266/styles/' + sectionLess[type] + '.css.gz" />');
                }

                if (pageLess[type]) {
                    document.write('<link rel="stylesheet" type="text/css" href="//www-league.nhlstatic.com/nhl.com/sections/playoffs/builds/71d33d815ff0cba1eb50bd828ea7c4cee7b80777_1617809266/styles/' + pageLess[type] + '.css.gz" />');
                }

            })();
        </script>


    </head>

    <body id="playoffs_index" class="lang-en_CA league-nhl" data-app-ads=false>

        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M927TZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    '//www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-M927TZ');
        </script>
        <!-- End Google Tag Manager -->

        <span class="btn-container">
            <a href="#content-wrap" class="btn btn-secondary btn-sm skip-to-content" tabindex="1">Skip to Main Content</a>
        </span>

        <!-- main content -->
        <div class="skin" id="content-wrap">
            <script type="text/javascript">
                var serverVals = {
                    playoffsCmsData: '[object Object]',
                    playoffsYear: '2020',
                    playoffSeasonYears: '20192020',
                    atpVtpData: {},
                    displaySchedule: true
                };
            </script>
            <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "BreadcrumbList",

                    "itemListElement": [{
                            "@type": "ListItem",
                            "position": 1,
                            "item": {
                                "@id": "https://www.nhl.com",
                                "name": "NHL.com"
                            }
                        },
                        {
                            "@type": "ListItem",
                            "position": 2,
                            "item": {
                                "@id": "https://www.nhl.com/stanley-cup-playoffs",
                                "name": "Playoffs"
                            }
                        }
                    ]
                }
            </script>

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
                                            echo "<img class=\"center-logo\" src=\"./images/ashl/ashlplayoff.png\" />";
                                            echo "</div>";
                                            break;
                                        case ('Farm'):
                                            echo "<div class=\"center-logo-container\" id=\"center-logo-container\">";
                                            echo "<img class=\"center-logo\" src=\"./images/ashl/ahlplayoff.png\" />";
                                            echo "</div>";
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>

                                    <!-- Center Broadcast Logo
                                    <div class="broadcaster-logo-container" id="broadcaster-logo-container">
                                        <img class="broadcaster-logo" src="https://cms.nhl.bamgrid.com/images/logos/league/cup-broadcasters-enca-v5.svg" />
                                    </div>
                                    -->

                                    <!-- Bracket Box - The brackets to matchup teams -->
                                    <?php
                                    $arrayTeamPlayoffs = array(
                                        "Team1_Conf1_ID" => 0,
                                        "Team8_Conf1_ID" => 0,

                                        "Team2_Conf1_ID" => 0,
                                        "Team7_Conf1_ID" => 0,

                                        "Team3_Conf1_ID" => 0,
                                        "Team6_Conf1_ID" => 0,

                                        "Team4_Conf1_ID" => 0,
                                        "Team5_Conf1_ID" => 0,


                                        "Team1_Conf2_ID" => 0,
                                        "Team8_Conf2_ID" => 0,

                                        "Team2_Conf2_ID" => 0,
                                        "Team7_Conf2_ID" => 0,

                                        "Team3_Conf2_ID" => 0,
                                        "Team6_Conf2_ID" => 0,

                                        "Team4_Conf2_ID" => 0,
                                        "Team5_Conf2_ID" => 0,
                                    );
                                    $Query = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Name as HomeTeamName, TeamInfoVisitor.Name as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round1'], true);
                                    $counter = 0;
                                    if (empty($PlayoffStanding) == false) {
                                        while ($Row = $PlayoffStanding->fetchArray()) {
                                            $counter++;
                                            echo "<tr>";
                                            if ($Row['Round1'] == 0) {
                                                echo "<td></td>";
                                            } else {
                                                $Round1 = $db->querySingle("SELECT Playoff" . $TypeText . ".*, TeamInfoHome.Name as HomeTeamName, TeamInfoVisitor.Name as VisitorTeamName FROM (Playoff" . $TypeText . " INNER JOIN Team" . $TypeText . "Info AS TeamInfoHome ON Playoff" . $TypeText . ".HomeTeam = TeamInfoHome.Number) LEFT JOIN Team" . $TypeText . "Info AS TeamInfoVisitor ON Playoff" . $TypeText . ".VisitorTeam = TeamInfoVisitor.Number WHERE Playoff" . $TypeText . ".Number = " . $Row['Round1'], true);
                                                echo "<td>";
                                                //echo "<div><img src=\"./images/pro-team/" . $Round1['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" /></div><br />";
                                                //echo "<a href=\"" . $TypeText . "Team.php?Team=" . $Round1['VisitorTeam'] . "\">" . $Round1['VisitorTeamName'] . " - " . $Round1['VisitorWin'] . "</a><br />";
                                                //echo "<div><img src=\"./images/pro-team/" . $Round1['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPStandingTeamImage\" /></div>";
                                                switch ($counter) {
                                                    case 1:
                                                        $arrayTeamPlayoffs['Team1_Conf1_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs['Team8_Conf1_ID'] = $Round1['VisitorTeam'];
                                                        break;
                                                    case 2:
                                                        $arrayTeamPlayoffs['Team2_Conf1_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs['Team7_Conf1_ID'] = $Round1['VisitorTeam'];
                                                        break;
                                                    case 3:
                                                        $arrayTeamPlayoffs['Team3_Conf1_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs['Team6_Conf1_ID'] = $Round1['VisitorTeam'];
                                                        break;
                                                    case 4:
                                                        $arrayTeamPlayoffs['Team4_Conf1_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs['Team5_Conf1_ID'] = $Round1['VisitorTeam'];
                                                        break;
                                                    case 5:
                                                        break;
                                                    case 6:
                                                        $arrayTeamPlayoffs['Team1_Conf2_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs['Team8_Conf2_ID'] = $Round1['VisitorTeam'];
                                                        break;
                                                    case 7:
                                                        $arrayTeamPlayoffs['Team2_Conf2_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs['Team7_Conf2_ID'] = $Round1['VisitorTeam'];
                                                        break;
                                                    case 8:
                                                        $arrayTeamPlayoffs['Team3_Conf2_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs['Team6_Conf2_ID'] = $Round1['VisitorTeam'];
                                                        break;
                                                    case 9:
                                                        $arrayTeamPlayoffs['Team4_Conf2_ID'] = $Round1['HomeTeam'];
                                                        $arrayTeamPlayoffs['Team5_Conf2_ID'] = $Round1['VisitorTeam'];
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
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team1_Conf2_ID'] . ".png\" alt=\"\" style=\"border-radius: 50%; max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                    </div>
                                    <div class="bracket-slot eastern atlantic round-1 rank-wc ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team8_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                    </div>
                                    <div class="bracket-slot eastern atlantic round-1 rank-2 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team2_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                    </div>
                                    <div class="bracket-slot eastern atlantic round-1 rank-3 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team7_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-1 rank-1 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team3_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-1 rank-wc ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team6_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-1 rank-2 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team4_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-1 rank-3 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team5_Conf2_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                    </div>
                                    <div class="bracket-slot western central round-1 rank-1 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team1_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                    </div>
                                    <div class="bracket-slot western central round-1 rank-wc ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team8_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                    </div>
                                    <div class="bracket-slot western central round-1 rank-2 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team2_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                    </div>
                                    <div class="bracket-slot western central round-1 rank-3 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team7_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                    </div>
                                    <div class="bracket-slot western pacific round-1 rank-1 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team3_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                    </div>
                                    <div class="bracket-slot western pacific round-1 rank-wc ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team6_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                    </div>
                                    <div class="bracket-slot western pacific round-1 rank-2 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team4_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>

                                        </div>
                                    </div>
                                    <div class="bracket-slot western pacific round-1 rank-3 ">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">
                                            <?php echo "<img src=\"./images/" . $TypeText . "-team/" . $arrayTeamPlayoffs['Team5_Conf1_ID'] . ".png\" alt=\"\"style=\"border-radius: 50%;max-width: 100%; max-height: 100%;\"/>"; ?>
                                        </div>
                                    </div>
                                    <div class="bracket-slot eastern atlantic round-2 team-upper">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot eastern atlantic round-2 team-lower">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-2 team-upper">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-2 team-lower">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot western central round-2 team-upper">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot western central round-2 team-lower">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot western pacific round-2 team-upper">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot western pacific round-2 team-lower">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-3">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot eastern atlantic round-3">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot western central round-3">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot western pacific round-3">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot eastern metropolitan round-4">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot western pacific round-4">
                                        <div class="primary-bg circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>
                                    <div class="bracket-slot round-5">
                                        <div class="primary-bg--league-nhl circle-logo-container bracket-slot-content">

                                        </div>
                                        <div class="circle-logo-container bracket-slot-content inactive"></div>
                                    </div>

                                    <!-- Bracket Rank - The rank of the team, mainly for wildcards -->
                                    <div class="bracket-rank eastern atlantic seed-1 seed
                                        round-1 primary-bd">
                                        1
                                    </div>
                                    <div class="bracket-rank eastern atlantic seed-wc seed
                                        round-1 primary-bd">
                                        8
                                    </div>
                                    <div class="bracket-rank eastern atlantic seed-wc seed
                                            round-1">
                                        8
                                    </div>
                                    <div class="bracket-rank eastern atlantic seed-2 seed
                                        round-1 primary-bd">
                                        2
                                    </div>
                                    <div class="bracket-rank eastern atlantic seed-3 seed
                                        round-1 primary-bd">
                                        7
                                    </div>
                                    <div class="bracket-rank eastern atlantic seed-3 seed
                                            round-1">
                                        7
                                    </div>
                                    <div class="bracket-rank eastern metropolitan seed-1 seed
                                        round-1 primary-bd">
                                        3
                                    </div>
                                    <div class="bracket-rank eastern metropolitan seed-1 seed
                                            round-1">
                                        3
                                    </div>
                                    <div class="bracket-rank eastern metropolitan seed-wc seed
                                        round-1 primary-bd">
                                        6
                                    </div>
                                    <div class="bracket-rank eastern metropolitan seed-2 seed
                                        round-1 primary-bd">
                                        4
                                    </div>
                                    <div class="bracket-rank eastern metropolitan seed-3 seed
                                        round-1 primary-bd">
                                        5
                                    </div>
                                    <div class="bracket-rank eastern metropolitan seed-3 seed
                                            round-1">
                                        5
                                    </div>
                                    <div class="bracket-rank western central seed-1 seed
                                        round-1 primary-bd">
                                        1
                                    </div>
                                    <div class="bracket-rank western central seed-wc seed
                                        round-1 primary-bd">
                                        8
                                    </div>
                                    <div class="bracket-rank western central seed-wc seed
                                            round-1">
                                        8
                                    </div>
                                    <div class="bracket-rank western central seed-2 seed
                                        round-1 primary-bd">
                                        2
                                    </div>
                                    <div class="bracket-rank western central seed-3 seed
                                        round-1 primary-bd">
                                        7
                                    </div>
                                    <div class="bracket-rank western central seed-3 seed
                                            round-1">
                                        7
                                    </div>
                                    <div class="bracket-rank western pacific seed-1 seed
                                        round-1 primary-bd">
                                        3
                                    </div>
                                    <div class="bracket-rank western pacific seed-wc seed
                                        round-1 primary-bd">
                                        6
                                    </div>
                                    <div class="bracket-rank western pacific seed-wc seed
                                            round-1">
                                        6
                                    </div>
                                    <div class="bracket-rank western pacific seed-2 seed
                                        round-1 primary-bd">
                                        4
                                    </div>
                                    <div class="bracket-rank western pacific seed-2 seed
                                            round-1">
                                        4
                                    </div>
                                    <div class="bracket-rank western pacific seed-3 seed
                                        round-1 primary-bd">
                                        5
                                    </div>
                                    <div class="bracket-rank eastern atlantic seed-1 seed-team-upper
                                        round-2 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank eastern atlantic seed-1 seed-team-upper
                                            round-2 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank eastern atlantic seed-wc seed-team-lower
                                        round-2 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank eastern metropolitan seed-2 seed-team-upper
                                        round-2 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank eastern metropolitan seed-2 seed-team-lower
                                        round-2 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank eastern metropolitan seed-2 seed-team-lower
                                            round-2 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank western central seed-1 seed-team-upper
                                        round-2 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank western central seed-3 seed-team-lower
                                        round-2 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank western central seed-3 seed-team-lower
                                            round-2 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank western pacific seed-2 seed-team-upper
                                        round-2 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank western pacific seed-2 seed-team-upper
                                            round-2 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank western pacific seed-1 seed-team-lower
                                        round-2 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank eastern metropolitan seed-2 seed
                                        round-3 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank eastern atlantic seed-wc seed
                                        round-3 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank eastern atlantic seed-wc seed
                                            round-3 inactive">

                                    </div>
                                    <div class="bracket-rank western central seed-1 seed
                                        round-3 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank western central seed-1 seed
                                            round-3 inactive">

                                    </div>
                                    <div class="bracket-rank western pacific seed-1 seed
                                        round-3 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank eastern metropolitan seed-2 seed
                                        round-4 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank western pacific seed-1 seed
                                        round-4 primary-bd inactive">

                                    </div>
                                    <div class="bracket-rank western pacific seed-1 seed
                                            round-4 inactive">

                                    </div>

                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <!-- core javascript files -->


        <script type="text/javascript" src="//www-league.nhlstatic.com/nhl.com/builds/site-core/80600c08b77b058d3b5615c1aabe57b9d81b2442_1618934609/scripts/site-core.js.gz"></script>


        <!-- trackAsync global function -->
        <script>
            (function(window) {
                var getOrientation = function() {
                    var width = window.innerWidth || document.documentElement.clientWidth;
                    var height = window.innerHeight || document.documentElement.clientHeight;
                    var orientation = (height >= width) ? 'Portrait' : 'Landscape';
                    return orientation;
                };

                var getParsedUserTokenId = function() {
                    var userToken = s.Util.cookieRead('Authorization'),
                        spl;
                    if (userToken === '') {
                        return false;
                    } else {
                        spl = userToken.split('.');
                        return (spl.length > 1) ? JSON.parse(window.atob(spl[1])).userid : false;
                    }
                };

                var capitalize = function(str) {
                    return str.charAt(0).toUpperCase() + str.substr(1);
                };

                var trackingSectionName = 'Playoffs';
                var trackingPageName = 'National Hockey League : ' + trackingSectionName + ' : 2020 Playoffs';

                var reportingSuiteIds = 'nhlglobal15,nhlcom15';
                var s = window.adobeAnalytics = s_gi(reportingSuiteIds);

                var contextDataAllCalls = {
                    'site.languageLocale': 'en_CA',
                    'site.origin': 'CA',
                    'site.club': 'nhl',
                    'user.ipid': s.Util.cookieRead('ipid') || getParsedUserTokenId() || null,
                    'user.userAgent': window.navigator.userAgent || null
                };

                window.trackAsync = function(asyncContextDataObj) {
                    var s = s_gi(reportingSuiteIds);
                    var linkTrackVars = [];

                    s.clearVars();
                    s.contextData = {};

                    // props taken from page load
                    for (var prop in contextDataAllCalls) {
                        s.contextData[prop] = contextDataAllCalls[prop];
                    }

                    // Add dynamic props unless explicitly told not to.
                    if (!asyncContextDataObj.notDynamic) {
                        s.contextData['dynamic.component'] = null;
                        s.contextData['dynamic.componentAction'] = null;
                        s.contextData['dynamic.componentLocation'] = trackingPageName;
                        s.contextData['dynamic.formfactorOrientation'] = capitalize(window.getStartupDeviceTypeString()) + ': ' + getOrientation();
                        s.contextData['dynamic.dynamicPageView'] = (parseInt(asyncContextDataObj['events.dynamicPageView'])) ? 'Dynamic Page View' : null;
                        s.contextData['dynamic.ipid'] = s.Util.cookieRead('ipid');
                        s.contextData['site.view'] = 'web';
                        s.contextData['adobe.url'] = window.location.href;
                    }

                    // Generic replacements.
                    if (asyncContextDataObj['dynamic.componentLocation'] === '@SITE_GENERIC@') {
                        asyncContextDataObj['dynamic.componentLocation'] = trackingPageName;
                    }
                    if (asyncContextDataObj['dynamic.formfactorOrientation'] === '@SITE_GENERIC@') {
                        asyncContextDataObj['dynamic.formfactorOrientation'] = capitalize(window.getStartupDeviceTypeString()) + ': ' + getOrientation();
                    }

                    var prop;
                    for (prop in asyncContextDataObj) {
                        s.contextData[prop] = asyncContextDataObj[prop];
                    }

                    // ensure pagename; perform replacement
                    if (asyncContextDataObj['adobe.pagename'] === '@SITE_GENERIC@' || !s.contextData['adobe.pagename']) {
                        s.contextData['adobe.pagename'] = trackingPageName;
                    }


                    //Set s.linkTrackVars as comma-delimited string with all context data vars - prefix each with 'contextData.'
                    for (prop in s.contextData) {
                        if (s.contextData[prop] !== null) {
                            linkTrackVars.push('contextData.' + prop);
                        }
                    }
                    s.linkTrackVars = linkTrackVars.join();

                    var navigate = s.contextData.navigate;
                    var sourceElem = s.contextData.sourceElem;

                    // Remove non-tracking properties.
                    delete s.contextData.wire;
                    delete s.contextData.notDynamic;
                    delete s.contextData.navigate;
                    delete s.contextData.sourceElem;

                    // async call
                    if (navigate && sourceElem) {
                        // https://marketing.adobe.com/resources/help/en_US/sc/implement/link_manual.html
                        s.tl(sourceElem, 'o', 'http://myGenericURL', null, 'navigate');
                    } else {
                        s.tl(true, 'o', 'http://myGenericURL');
                    }
                };

            })(window);
        </script>

        <!-- ab testing-->
        <script type="text/javascript">
            (function(window) {
                try {} catch (e) {}
            })(window);
        </script>

        <!-- build scripts -->
        <script type="text/javascript">
            (function() {

                var siteJS = {
                    "desktop": "site-all",
                    "tablet": "site-all",
                    "phone": "site-all",
                    "webview": "site-webview"
                }
                var sectionJS = {};
                var pageJS = {
                    "desktop": "index",
                    "tablet": "index",
                    "phone": "index"
                };
                var pageAssetJS = {};
                var type = getStartupDeviceTypeString();
                var siteType = getStartupDeviceTypeString();

                /* site and section build=true */

                var siteScripts = [];
                var scripts = [];

                if (siteJS[siteType]) {
                    siteScripts.push('//www-league.nhlstatic.com/nhl.com/builds/site-core/80600c08b77b058d3b5615c1aabe57b9d81b2442_1618934609/scripts/' + siteJS[siteType] + '.js.gz');
                }

                if (sectionJS[type]) {
                    scripts.push('//www-league.nhlstatic.com/nhl.com/sections/playoffs/builds/71d33d815ff0cba1eb50bd828ea7c4cee7b80777_1617809266/scripts/' + sectionJS[type] + '.js.gz');
                }
                if (pageJS[type]) {
                    scripts.push('//www-league.nhlstatic.com/nhl.com/sections/playoffs/builds/71d33d815ff0cba1eb50bd828ea7c4cee7b80777_1617809266/scripts/' + pageJS[type] + '.js.gz');
                }

                var loadPageAssets = function() {
                    if (pageAssetJS && pageAssetJS.length) {
                        var assetScripts = [];

                        pageAssetJS.forEach(function(assetObject) {
                            var assetType = assetObject.type;
                            var assetVersion = assetObject.version;

                            var assetScript = '//www-league.nhlstatic.com/nhl.com/builds/site-core/80600c08b77b058d3b5615c1aabe57b9d81b2442_1618934609/scripts/' + assetType + '/' + assetVersion + '/' + assetType + '.js';
                            assetScripts.push(assetScript);
                        });

                        requirejs.config({
                            waitSeconds: 18,
                            baseUrl: '//www-league.nhlstatic.com/nhl.com/builds/site-core/80600c08b77b058d3b5615c1aabe57b9d81b2442_1618934609/bower_components',
                            config: {
                                text: {
                                    useXhr: function(url, protocol, hostname, port) {
                                        return true;
                                    }
                                }
                            }
                        });

                        requirejs(assetScripts);
                    }
                }

                if (siteScripts.length) {
                    requirejs.config({
                        waitSeconds: 18,
                        paths: {
                            "bam-video-bootstrap": "//www-league.nhlstatic.com/nhl.com/video/videocore/video"
                        }
                    });

                    requirejs(siteScripts, function() {
                        if (scripts.length) {
                            requirejs(scripts, loadPageAssets);
                        } else {
                            loadPageAssets();
                        }
                    });
                }

            })();
        </script>

        <script type="text/javascript">
            (function(window) {

                var getOrientation = function() {
                    var width = window.innerWidth || document.documentElement.clientWidth;
                    var height = window.innerHeight || document.documentElement.clientHeight;
                    var orientation = (height >= width) ? 'Portrait' : 'Landscape';
                    return orientation;
                };

                var getParsedUserTokenId = function() {
                    var userToken = s.Util.cookieRead('Authorization'),
                        spl;
                    if (userToken === '') {
                        return false;
                    } else {
                        spl = userToken.split('.');
                        return (spl.length > 1) ? JSON.parse(window.atob(spl[1])).userid : false;
                    }
                };

                var capitalize = function(str) {
                    return str.charAt(0).toUpperCase() + str.substr(1);
                };

                var trackingSectionName = 'Playoffs';
                var trackingPageName = 'National Hockey League : ' + trackingSectionName + ' : 2020 Playoffs';

                window.visitor = Visitor.getInstance('25823F955A99D5040A495C1D@AdobeOrg', {
                    trackingServer: 'Bamtech.sc.omtrdc.net',
                    trackingServerSecure: 'Bamtech.sc.omtrdc.net'
                });

                var reportingSuiteIds = 'nhlglobal15,nhlcom15';
                var s = window.adobeAnalytics = s_gi(reportingSuiteIds);

                s.visitor = Visitor.getInstance('25823F955A99D5040A495C1D@AdobeOrg');
                s.trackingServer = 'Bamtech.sc.omtrdc.net';
                s.trackingServerSecure = 'Bamtech.sc.omtrdc.net';

                s.trackDownloadLinks = true;
                s.trackExternalLinks = false;
                s.trackInlineStats = true;
                s.linkDownloadFileTypes = 'exe,zip,wav,mp3,mov,mpg,avi,wmv,pdf,doc,docx,xls,xlsx,ppt,pptx,jpg';
                s.linkInternalFilters = 'javascript:,nhl.com';
                s.linkLeaveQueryString = false;
                s.linkTrackVars = 'None';
                s.linkTrackEvents = 'None';

                s.contextData.timestamp = new Date();

                s.contextData['adobe.rsids'] = reportingSuiteIds;
                s.contextData['adobe.svi'] = 'D=s_vi';

                s.contextData['site.sectionTitle'] = '2020 Playoffs';
                s.contextData['site.view'] = 'web';
                s.contextData['site.formFactor'] = capitalize(window.getStartupDeviceTypeString());
                s.contextData['site.orientation'] = getOrientation();
                s.contextData['site.formfactorOrientation'] = capitalize(window.getStartupDeviceTypeString()) + ': ' + getOrientation();

                // used in page and async calls
                var contextDataAllCalls = {
                    'site.languageLocale': 'en_CA',
                    'site.origin': 'CA',
                    'site.club': 'nhl',
                    'user.ipid': s.Util.cookieRead('ipid') || getParsedUserTokenId() || null,
                    'user.userAgent': window.navigator.userAgent || null
                };

                for (var prop in contextDataAllCalls) {
                    s.contextData[prop] = contextDataAllCalls[prop];
                }

                window.adobe = window.adobe || {};

                // Section level adobe overrides.

                // TODO - Pagename vars are backwards video: Multimedia
                s.contextData['adobe.pagename'] = window.adobe.pagename = trackingPageName;
                s.contextData['adobe.channel'] = window.adobe.channel = trackingSectionName;
                s.contextData['adobe.url'] = window.location.href;

                // query params
                s.contextData['qparam.affiliateId'] = s.Util.getQueryParam('affiliateId');
                s.contextData['qparam.mlbkw'] = s.Util.getQueryParam('mlbkw');
                s.contextData['qparam.partnerId'] = s.Util.getQueryParam('partnerId');
                s.contextData['qparam.tcid'] = s.Util.getQueryParam('tcid');
                s.contextData['qparam.tdl'] = s.Util.getQueryParam('tdl');
                s.contextData['qparam.tfl'] = s.Util.getQueryParam('tfl');
                s.contextData['qparam.vbID'] = s.Util.getQueryParam('vbID');

                s.contextData['tcall.isSimPageView'] = 1;

                // section level overrides

                // page level overrides

                // response overrides

                window.trackPageView = function(contextDataObj) {
                    var prop;
                    for (prop in contextDataObj) {
                        s.contextData[prop] = contextDataObj[prop];
                    }

                    s.t();
                };

                // page view call
                trackPageView();
            })(window);
        </script>

        <!-- Google Analytic Code -->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-106053125-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- End Google Analytic Code -->


        <!-- Facebook Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '2273874732629030');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2273874732629030&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->

        <!-- Parse.ly Analytic Code -->
        <script id="parsely-cfg" src="//cdn.parsely.com/keys/nhl.com/p.js">
        </script>
        <!-- End Parse.ly Analytic Code -->

        <!-- Begin comScore Tag -->
        <script>
            var _comscore = _comscore || [];
            _comscore.push({
                c1: "2",
                c2: "3005680"
            });
            (function() {
                var s = document.createElement("script"),
                    el = document.getElementsByTagName("script")[0];
                s.async = true;
                s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
                el.parentNode.insertBefore(s, el);
            })();
        </script>
        <noscript>
            <img src="http://b.scorecardresearch.com/p?c1=2&c2=3005352&cv=2.0&cj=1" />
        </noscript>
        <!-- End comScore Tag -->

        <style>
            .primary-bg--league-nhl {
                background-color: #D2D2D2
            }

            .primary-bd--league-nhl {
                border-color: #D2D2D2
            }

            .icon {
                vertical-align: middle
            }

            .icon--xs {
                width: 14px;
                height: 14px
            }

            .icon--sm {
                width: 18px;
                height: 18px
            }

            .icon--md {
                width: 24px;
                height: 24px
            }

            .icon--lg {
                width: 32px;
                height: 32px
            }

            .icon--xl {
                width: 48px;
                height: 48px
            }

            .ad {
                display: block;
                margin-left: auto;
                margin-right: auto;
                position: relative
            }

            .ad-centered {
                text-align: center
            }

            #interstitial-ad-modal .modal-backdrop {
                z-index: auto
            }

            #interstitial-ad-modal .modal-content {
                border: none
            }

            #interstitial-ad-modal .modal-header {
                text-align: right;
                font-size: 10px;
                padding: 0;
                border-bottom: none;
                min-height: 0
            }

            #interstitial-ad-modal .modal-body {
                padding: 5px
            }

            .interstitial-ad-modal--width-300 .modal-dialog {
                width: 310px
            }

            .interstitial-ad-modal--width-600 .modal-dialog {
                width: 610px
            }

            .logo {
                vertical-align: middle
            }

            .logo--dark {
                background-color: #000
            }

            .logo--xs {
                width: 14px;
                height: 14px
            }

            .logo--sm {
                width: 18px;
                height: 18px
            }

            .logo--md {
                width: 24px;
                height: 24px
            }

            .logo--lg {
                width: 32px;
                height: 32px
            }

            .logo--xl {
                width: 48px;
                height: 48px
            }

            .logo--circle-theme {
                width: 100%;
                height: 100%;
                margin: auto;
                display: block
            }

            .circle-logo-container {
                border-radius: 50%;
                display: flex;
                justify-content: center
            }


            .circle-logo-container.primary-bg {
                background-color: transparent
            }

            .circle-logo-container.primary-bg .logo--circle-theme {
                flex-shrink: 0;
                width: 150%
            }

            .logo-round-team {
                background-size: contain;
                border-radius: 50%;
                background-repeat: no-repeat;
                background-position: center
            }

            .logo-round-full-team {
                background-size: 150% auto;
                background-color: transparent;
                border-radius: 0;
                padding: 0
            }
        </style>
    </body>

    </html>

    <?php
    include "Footer.php";
    ?>