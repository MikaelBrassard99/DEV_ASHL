<!DOCTYPE html>
<?php include "Header.php"; ?>
<script>
    function toggleDiv(divId) {
        $("#" + divId).toggle();
    }
</script>
<?php
if (file_exists($DatabaseFile) == false) {
    $LeagueName = $DatabaseNotFound;
    $Transaction = Null;
    $Schedule = Null;
    $LeagueGeneral = Null;
    $LeagueOutputOption = Null;
    echo "<title>" . $DatabaseNotFound . "</title>";
    echo "<style>";
    echo ".STHSIndex_Main{display:none;}";
    echo "#cssmenu{display:none;}";
} else {
    $LeagueName = (string)"";

    $db = new SQLite3($DatabaseFile);

    $Query = "Select Name, ScheduleNextDay, DefaultSimulationPerDay, PointSystemSO, OffSeason, Days73StarPro, Days303StarPro, Days73StarFarm, Days303StarFarm, Today3StarPro1, Today3StarPro2, Today3StarPro3, Today3StarFarm1, Today3StarFarm2, Today3StarFarm3 from LeagueGeneral";
    $LeagueGeneral = $db->querySingle($Query, true);
    $LeagueName = $LeagueGeneral['Name'];

    $Query = "SELECT LeagueLog.* FROM LeagueLog WHERE ((LeagueLog.TransactionType = 1) OR (LeagueLog.TransactionType = 2) OR  (LeagueLog.TransactionType = 3) OR  (LeagueLog.TransactionType = 6)) ORDER BY LeagueLog.Number DESC LIMIT 10";
    $Transaction = $db->query($Query);

    $Query = "Select ProMinimumGamePlayerLeader, ShowFarmScoreinPHPHomePage, NumberofNewsinPHPHomePage, NumberofLatestScoreinPHPHomePage from LeagueOutputOption";
    $LeagueOutputOption = $db->querySingle($Query, true);

    if (file_exists($NewsDatabaseFile) == false) {
        $LeagueNews = Null;
    } else {
        $dbNews = new SQLite3($NewsDatabaseFile);
        $Query = "Select LeagueNews.*, TeamProInfo.Name FROM LeagueNews LEFT JOIN TeamProInfo ON LeagueNews.TeamNumber = TeamProInfo.Number WHERE Remove = 'False' ORDER BY Time DESC";
        $dbNews->query("ATTACH DATABASE '" . realpath($DatabaseFile) . "' AS CurrentDB");
        $LeagueNews = $dbNews->query($Query);
    }

    if ($LeagueOutputOption['ShowFarmScoreinPHPHomePage'] == 'True') {
        $Query = "SELECT *,'Pro' as Type FROM SchedulePro WHERE Day = " . ($LeagueGeneral['ScheduleNextDay'] - $LeagueGeneral['DefaultSimulationPerDay']) . " UNION SELECT *,'Farm' as Type FROM ScheduleFarm WHERE Day = " . ($LeagueGeneral['ScheduleNextDay'] - $LeagueGeneral['DefaultSimulationPerDay']) . " ORDER BY TYPE DESC, GAMENUMBER";
        $QuerySchedule = "Select ProSchedule.*, 'Pro' AS Type FROM (SELECT TeamProStatVisitor.Last10W AS VLast10W, TeamProStatVisitor.Last10L AS VLast10L, TeamProStatVisitor.Last10T AS VLast10T, TeamProStatVisitor.Last10OTW AS VLast10OTW, TeamProStatVisitor.Last10OTL AS VLast10OTL, TeamProStatVisitor.Last10SOW AS VLast10SOW, TeamProStatVisitor.Last10SOL AS VLast10SOL, TeamProStatVisitor.GP AS VGP, TeamProStatVisitor.W AS VW, TeamProStatVisitor.L AS VL, TeamProStatVisitor.T AS VT, TeamProStatVisitor.OTW AS VOTW, TeamProStatVisitor.OTL AS VOTL, TeamProStatVisitor.SOW AS VSOW, TeamProStatVisitor.SOL AS VSOL, TeamProStatVisitor.Points AS VPoints, TeamProStatVisitor.Streak AS VStreak, TeamProStatHome.Last10W AS HLast10W, TeamProStatHome.Last10L AS HLast10L, TeamProStatHome.Last10T AS HLast10T, TeamProStatHome.Last10OTW AS HLast10OTW, TeamProStatHome.Last10OTL AS HLast10OTL, TeamProStatHome.Last10SOW AS HLast10SOW, TeamProStatHome.Last10SOL AS HLast10SOL, TeamProStatHome.GP AS HGP, TeamProStatHome.W AS HW, TeamProStatHome.L AS HL, TeamProStatHome.T AS HT, TeamProStatHome.OTW AS HOTW, TeamProStatHome.OTL AS HOTL, TeamProStatHome.SOW AS HSOW, TeamProStatHome.SOL AS HSOL, TeamProStatHome.Points AS HPoints, TeamProStatHome.Streak AS HStreak, SchedulePro.* FROM (SchedulePRO LEFT JOIN TeamProStat AS TeamProStatHome ON SchedulePRO.HomeTeam = TeamProStatHome.Number) LEFT JOIN TeamProStat AS TeamProStatVisitor ON SchedulePRO.VisitorTeam = TeamProStatVisitor.Number WHERE DAY >= " . $LeagueGeneral['ScheduleNextDay'] . " AND DAY <= " . ($LeagueGeneral['ScheduleNextDay'] + $LeagueGeneral['DefaultSimulationPerDay'] - 1) . ") AS ProSchedule  UNION ALL Select FarmSchedule.*, 'Farm' AS Type FROM (SELECT TeamFarmStatVisitor.Last10W AS VLast10W, TeamFarmStatVisitor.Last10L AS VLast10L, TeamFarmStatVisitor.Last10T AS VLast10T, TeamFarmStatVisitor.Last10OTW AS VLast10OTW, TeamFarmStatVisitor.Last10OTL AS VLast10OTL, TeamFarmStatVisitor.Last10SOW AS VLast10SOW, TeamFarmStatVisitor.Last10SOL AS VLast10SOL, TeamFarmStatVisitor.GP AS VGP, TeamFarmStatVisitor.W AS VW, TeamFarmStatVisitor.L AS VL, TeamFarmStatVisitor.T AS VT, TeamFarmStatVisitor.OTW AS VOTW, TeamFarmStatVisitor.OTL AS VOTL, TeamFarmStatVisitor.SOW AS VSOW, TeamFarmStatVisitor.SOL AS VSOL, TeamFarmStatVisitor.Points AS VPoints, TeamFarmStatVisitor.Streak AS VStreak, TeamFarmStatHome.Last10W AS HLast10W, TeamFarmStatHome.Last10L AS HLast10L, TeamFarmStatHome.Last10T AS HLast10T, TeamFarmStatHome.Last10OTW AS HLast10OTW, TeamFarmStatHome.Last10OTL AS HLast10OTL, TeamFarmStatHome.Last10SOW AS HLast10SOW, TeamFarmStatHome.Last10SOL AS HLast10SOL, TeamFarmStatHome.GP AS HGP, TeamFarmStatHome.W AS HW, TeamFarmStatHome.L AS HL, TeamFarmStatHome.T AS HT, TeamFarmStatHome.OTW AS HOTW, TeamFarmStatHome.OTL AS HOTL, TeamFarmStatHome.SOW AS HSOW, TeamFarmStatHome.SOL AS HSOL, TeamFarmStatHome.Points AS HPoints, TeamFarmStatHome.Streak AS HStreak, ScheduleFarm.* FROM (ScheduleFarm LEFT JOIN TeamFarmStat AS TeamFarmStatHome ON ScheduleFarm.HomeTeam = TeamFarmStatHome.Number) LEFT JOIN TeamFarmStat AS TeamFarmStatVisitor ON ScheduleFarm.VisitorTeam = TeamFarmStatVisitor.Number WHERE DAY >= " . $LeagueGeneral['ScheduleNextDay'] . " AND DAY <= " . ($LeagueGeneral['ScheduleNextDay'] + $LeagueGeneral['DefaultSimulationPerDay'] - 1) . ") AS FarmSchedule ORDER BY Day, Type DESC, GameNumber";
    } else {
        $Query = "SELECT *,'Pro' as Type FROM SchedulePro WHERE Day = " . ($LeagueGeneral['ScheduleNextDay'] - $LeagueGeneral['DefaultSimulationPerDay']) . " ORDER BY GameNumber ";
        $QuerySchedule = "SELECT SchedulePro.*, 'Pro' AS Type, TeamProStatVisitor.Last10W AS VLast10W, TeamProStatVisitor.Last10L AS VLast10L, TeamProStatVisitor.Last10T AS VLast10T, TeamProStatVisitor.Last10OTW AS VLast10OTW, TeamProStatVisitor.Last10OTL AS VLast10OTL, TeamProStatVisitor.Last10SOW AS VLast10SOW, TeamProStatVisitor.Last10SOL AS VLast10SOL, TeamProStatVisitor.GP AS VGP, TeamProStatVisitor.W AS VW, TeamProStatVisitor.L AS VL, TeamProStatVisitor.T AS VT, TeamProStatVisitor.OTW AS VOTW, TeamProStatVisitor.OTL AS VOTL, TeamProStatVisitor.SOW AS VSOW, TeamProStatVisitor.SOL AS VSOL, TeamProStatVisitor.Points AS VPoints, TeamProStatVisitor.Streak AS VStreak, TeamProStatHome.Last10W AS HLast10W, TeamProStatHome.Last10L AS HLast10L, TeamProStatHome.Last10T AS HLast10T, TeamProStatHome.Last10OTW AS HLast10OTW, TeamProStatHome.Last10OTL AS HLast10OTL, TeamProStatHome.Last10SOW AS HLast10SOW, TeamProStatHome.Last10SOL AS HLast10SOL, TeamProStatHome.GP AS HGP, TeamProStatHome.W AS HW, TeamProStatHome.L AS HL, TeamProStatHome.T AS HT, TeamProStatHome.OTW AS HOTW, TeamProStatHome.OTL AS HOTL, TeamProStatHome.SOW AS HSOW, TeamProStatHome.SOL AS HSOL, TeamProStatHome.Points AS HPoints, TeamProStatHome.Streak AS HStreak FROM (SchedulePRO LEFT JOIN TeamProStat AS TeamProStatHome ON SchedulePRO.HomeTeam = TeamProStatHome.Number) LEFT JOIN TeamProStat AS TeamProStatVisitor ON SchedulePRO.VisitorTeam = TeamProStatVisitor.Number WHERE DAY >= " . $LeagueGeneral['ScheduleNextDay'] . " AND DAY <= " . ($LeagueGeneral['ScheduleNextDay'] + $LeagueGeneral['DefaultSimulationPerDay'] - 1) . " ORDER BY Day, GameNumber";
    }
    $LatestScore = $db->query($Query);
    $Schedule = $db->query($QuerySchedule);

    echo "<title>" . $LeagueName . " - " . $IndexLang['IndexTitle'] . "</title>";
    echo "<style>";
}
if ($LeagueGeneral['OffSeason'] == "True") {
    echo ".STHSIndex_Score{display:none;}";
    echo ".STHSIndex_Top5Table {display:none;}";
    echo "@media screen and (max-width: 890px) {.STHSIndex_Top5 {display:none;}}";
} else {
    echo ".STHSIndex_Top20FreeAgents {display:none;}";
    echo "@media screen and (max-width: 890px) {.STHSIndex_Score{display:none;}}";
    echo "@media screen and (max-width: 1210px) {.STHSIndex_Top5 {display:none;}}";
} ?>
</style>
</head>

<body>
    <?php include "Menu.php";
    if (file_exists($DatabaseFile) == false) {
        echo "<br /><br /><h1 class=\"STHSCenter\">" . $DatabaseNotFound . "</h1>";
    }
    ?>
    <table class="STHSIndex_Main">
        <tr>
            <td class="STHSIndex_Score">
                <table class="STHSTableFullW">
                    <tr>
                        <td>
                            <div class="STHSIndex_LastestResult"><?php echo $IndexLang['LatestScores']; ?></div>
                            <?php
                            if (empty($LatestScore) == false) {
                                while ($row = $LatestScore->fetchArray()) {
                                    echo "<table class=\"STHSIndex_GamesResult\">";
                                    echo "<tr><th>" . $row['Type'] . " Day " . $row['Day'] . "</th><th class=\"STHSW45\">#" . $row['GameNumber'] . "</th></tr>";
                                    echo "<tr><td> ";
                                    echo "<img src=\"./images/pro-team/" . $row['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPIndexTeamImage\" />";

                                    /*if ($row['VisitorTeamThemeID'] > 0) {
										echo "<img src=\"./images/pro-team/" . $row['UniqueId'] . ".png\" alt=\"\" class=\"STHSPHPIndexTeamImage\" />";
									}*/
                                    echo $row['VisitorTeamName'] . "</td><td class=\"STHSRight\">" . $row['VisitorScore'] . "</td></tr>";
                                    echo "<tr><td>";
                                    echo "<img src=\"./images/pro-team/" . $row['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPIndexTeamImage\" />";

                                    /*if ($row['HomeTeamThemeID'] > 0) {
										echo "<img src=\"./images/pro-team/" . $row['UniqueId'] . ".png\" alt=\"\" class=\"STHSPHPIndexTeamImage\" />";
									}*/
                                    echo $row['HomeTeamName'] . "</td><td class=\"STHSRight\">" . $row['HomeScore'] . "</td></tr>";
                                    echo "<tr><td colspan=\"2\" class=\"STHSPHPIndexBoxScore\"><a href=\"" . $row['Link'] . "\">" . $TodayGamesLang['BoxScore'] .  "</a></td></tr>";
                                    echo "</table>";
                                }
                            }
                            ?>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="STHSIndex_LastestResult"><?php echo $TodayGamesLang['NextGames']; ?></div>
                            <?php
                            if (empty($Schedule) == false) {
                                while ($row = $Schedule->fetchArray()) {
                                    echo "<table class=\"STHSIndex_GamesResult\">";
                                    echo "<tr><th>" . $row['Type'] . " Day " . $row['Day'] .  " - " . $row['GameNumber'] . "</th></tr>";
                                    echo "<tr><td>";
                                    echo "<img src=\"./images/pro-team/" . $row['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPIndexTeamImage\" />";

                                    /*if ($row['VisitorTeamThemeID'] > 0) {
										echo "<img src=\"./images/pro-team/" . $row['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPIndexTeamImage\" />";
									}*/
                                    echo "<a href=\"" . $row['Type']  . "Team.php?Team=" . $row['VisitorTeam'] . "\">" . $row['VisitorTeamName'] . "</a> (" . ($row['VW'] + $row['VOTW'] + $row['VSOW']) . "-";
                                    if ($LeagueGeneral['PointSystemSO'] == "True") {
                                        echo $row['VL'] . "-" . ($row['VOTL'] + $row['VSOL']);
                                    } else {
                                        echo ($row['VL'] + $row['VOTL'] + $row['VSOL']) . "-" . $row['VT'];
                                    }
                                    echo ") - " . $row['VStreak'] . "</td></tr>";
                                    echo "<tr><td>";
                                    echo "<img src=\"./images/pro-team/" . $row['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPIndexTeamImage\" />";
                                    /*if ($row['HomeTeamThemeID'] > 0) {
										echo "<img src=\"./images/pro-team/" . $row['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPIndexTeamImage\" />";
									}*/

                                    echo "<a href=\"" . $row['Type'] . "Team.php?Team=" . $row['HomeTeam'] . "\">" . $row['HomeTeamName'] . "</a> (" . ($row['HW'] + $row['HOTW'] + $row['HSOW']) . "-";
                                    if ($LeagueGeneral['PointSystemSO'] == "True") {
                                        echo $row['HL'] . "-" . ($row['HOTL'] + $row['HSOL']);
                                    } else {
                                        echo ($row['HL'] + $row['HOTL'] + $row['HSOL']) . "-" . $row['HT'];
                                    }
                                    echo ") - " . $row['HStreak'] . "</td></tr>";
                                    echo "</table>";
                                }
                            }
                            ?>

                        </td>
                    </tr>
                </table>
        </tr>
    </table>

    <?php include "Footer.php"; ?>