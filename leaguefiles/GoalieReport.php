<!DOCTYPE html>
<?php include "Header.php"; ?>
<?php
/*
Syntax to call this webpage should be GoaliesStat.php?Goalie=2 where only the number change and it's based on the UniqueID of Goalies.
*/
$Goalie = (int)0;
$Query = (string)"";
$GoalieName = $PlayersLang['IncorrectGoalie'];
$LeagueName = (string)"";
$CareerLeaderSubPrintOut = (int)0;
$GoalieCareerStatFound = (bool)false;
$GoalieProCareerSeason = Null;
$GoalieProCareerPlayoff = Null;
$GoalieProCareerSumSeasonOnly = Null;
$GoalieProCareerSumPlayoffOnly = Null;
$GoalieFarmCareerSeason = Null;
$GoalieFarmCareerPlayoff = Null;
$GoalieFarmCareerSumSeasonOnly = Null;
$GoalieFarmCareerSumPlayoffOnly = Null;
$GoalieProStatMultipleTeamFound = (bool)FALSE;
$GoalieFarmStatMultipleTeamFound = (bool)FALSE;

if (isset($_GET['Goalie'])) {
	$Goalie = filter_var($_GET['Goalie'], FILTER_SANITIZE_NUMBER_INT);
}

if (file_exists($DatabaseFile) == false) {
	$Goalie = 0;
	$GoalieName = $DatabaseNotFound;
	$LeagueOutputOption = Null;
	$LeagueGeneral = Null;
} else {
	$db = new SQLite3($DatabaseFile);
	$Query = "Select Name, OutputName, LeagueYearOutput, PreSeasonSchedule, PlayOffStarted from LeagueGeneral";
	$LeagueGeneral = $db->querySingle($Query, true);
	$Query = "Select PlayersMugShotBaseURL, PlayersMugShotFileExtension,OutputSalariesRemaining,OutputSalariesAverageTotal,OutputSalariesAverageRemaining from LeagueOutputOption";
	$LeagueOutputOption = $db->querySingle($Query, true);
}
if ($Goalie == 0) {
	$GoalieInfo = Null;
	$GoalieProStat = Null;
	$GoalieFarmStat = Null;

	echo "<style>.STHSPHPPlayerStat_Main {display:none;}</style>";
} else {
	$Query = "SELECT count(*) AS count FROM GoalerInfo WHERE Number = " . $Goalie;
	$Result = $db->querySingle($Query, true);
	if ($Result['count'] == 1) {


		$Query = "SELECT count(*) AS count FROM GoalerProStatMultipleTeam WHERE Number = " . $Goalie;
		$Result = $db->querySingle($Query, true);
		if ($Result['count'] > 0) {
			$GoalieProStatMultipleTeamFound = TRUE;
		}

		$Query = "SELECT count(*) AS count FROM GoalerFarmStatMultipleTeam WHERE Number = " . $Goalie;
		$Result = $db->querySingle($Query, true);
		if ($Result['count'] > 0) {
			$GoalieFarmStatMultipleTeamFound = TRUE;
		}

		if ($GoalieInfo['Team'] > 0) {
			$Query = "SELECT MainTable.* FROM (SELECT PlayerInfo.Number, PlayerInfo.Name, PlayerInfo.Team, PlayerInfo.TeamName, PlayerInfo.URLLink, PlayerInfo.NHLID, 'False' AS PosG FROM PlayerInfo WHERE Team = " . $GoalieInfo['Team'] . " UNION ALL SELECT GoalerInfo.Number, GoalerInfo.Name, GoalerInfo.Team, GoalerInfo.TeamName, GoalerInfo.URLLink, GoalerInfo.NHLID, 'True' AS PosG FROM GoalerInfo WHERE Team = " . $GoalieInfo['Team'] . ") AS MainTable ORDER BY Name";
			$TeamPlayers = $db->query($Query);
		}

		$LeagueName = $LeagueGeneral['Name'];
		$GoalieName = $GoalieInfo['Name'];

		if (file_exists($CareerStatDatabaseFile) == true) { /* CareerStat */
			$CareerStatdb = new SQLite3($CareerStatDatabaseFile);

			$Query = "SELECT GoalerProStatCareer.*, ROUND((CAST(GoalerProStatCareer.GA AS REAL) / (GoalerProStatCareer.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerProStatCareer.SA - GoalerProStatCareer.GA AS REAL) / (GoalerProStatCareer.SA)),3) AS PCT, ROUND((CAST(GoalerProStatCareer.PenalityShotsShots - GoalerProStatCareer.PenalityShotsGoals AS REAL) / (GoalerProStatCareer.PenalityShotsShots)),3) AS PenalityShotsPCT FROM GoalerProStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $GoalieName) . "') ORDER BY GoalerProStatCareer.Year";
			$GoalieProCareerSeason = $CareerStatdb->query($Query);
			$Query = "SELECT GoalerProStatCareer.*, ROUND((CAST(GoalerProStatCareer.GA AS REAL) / (GoalerProStatCareer.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerProStatCareer.SA - GoalerProStatCareer.GA AS REAL) / (GoalerProStatCareer.SA)),3) AS PCT, ROUND((CAST(GoalerProStatCareer.PenalityShotsShots - GoalerProStatCareer.PenalityShotsGoals AS REAL) / (GoalerProStatCareer.PenalityShotsShots)),3) AS PenalityShotsPCT FROM GoalerProStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $GoalieName) . "') ORDER BY GoalerProStatCareer.Year";
			$GoalieProCareerPlayoff = $CareerStatdb->query($Query);
			$Query = "SELECT Sum(GoalerProStatCareer.GP) AS SumOfGP, Sum(GoalerProStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(GoalerProStatCareer.W) AS SumOfW, Sum(GoalerProStatCareer.L) AS SumOfL, Sum(GoalerProStatCareer.OTL) AS SumOfOTL, Sum(GoalerProStatCareer.Shootout) AS SumOfShootout, Sum(GoalerProStatCareer.GA) AS SumOfGA, Sum(GoalerProStatCareer.SA) AS SumOfSA, Sum(GoalerProStatCareer.SARebound) AS SumOfSARebound, Sum(GoalerProStatCareer.Pim) AS SumOfPim, Sum(GoalerProStatCareer.A) AS SumOfA, Sum(GoalerProStatCareer.PenalityShotsShots) AS SumOfPenalityShotsShots, Sum(GoalerProStatCareer.PenalityShotsGoals) AS SumOfPenalityShotsGoals, Sum(GoalerProStatCareer.StartGoaler) AS SumOfStartGoaler, Sum(GoalerProStatCareer.BackupGoaler) AS SumOfBackupGoaler, Sum(GoalerProStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(GoalerProStatCareer.Star1) AS SumOfStar1, Sum(GoalerProStatCareer.Star2) AS SumOfStar2, Sum(GoalerProStatCareer.Star3) AS SumOfStar3 FROM GoalerProStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $GoalieName) . "')";
			$GoalieProCareerSumSeasonOnly = $CareerStatdb->querySingle($Query, true);
			$Query = "SELECT Sum(GoalerProStatCareer.GP) AS SumOfGP, Sum(GoalerProStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(GoalerProStatCareer.W) AS SumOfW, Sum(GoalerProStatCareer.L) AS SumOfL, Sum(GoalerProStatCareer.OTL) AS SumOfOTL, Sum(GoalerProStatCareer.Shootout) AS SumOfShootout, Sum(GoalerProStatCareer.GA) AS SumOfGA, Sum(GoalerProStatCareer.SA) AS SumOfSA, Sum(GoalerProStatCareer.SARebound) AS SumOfSARebound, Sum(GoalerProStatCareer.Pim) AS SumOfPim, Sum(GoalerProStatCareer.A) AS SumOfA, Sum(GoalerProStatCareer.PenalityShotsShots) AS SumOfPenalityShotsShots, Sum(GoalerProStatCareer.PenalityShotsGoals) AS SumOfPenalityShotsGoals, Sum(GoalerProStatCareer.StartGoaler) AS SumOfStartGoaler, Sum(GoalerProStatCareer.BackupGoaler) AS SumOfBackupGoaler, Sum(GoalerProStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(GoalerProStatCareer.Star1) AS SumOfStar1, Sum(GoalerProStatCareer.Star2) AS SumOfStar2, Sum(GoalerProStatCareer.Star3) AS SumOfStar3 FROM GoalerProStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $GoalieName) . "')";
			$GoalieProCareerSumPlayoffOnly = $CareerStatdb->querySingle($Query, true);

			$Query = "SELECT GoalerFarmStatCareer.*, ROUND((CAST(GoalerFarmStatCareer.GA AS REAL) / (GoalerFarmStatCareer.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerFarmStatCareer.SA - GoalerFarmStatCareer.GA AS REAL) / (GoalerFarmStatCareer.SA)),3) AS PCT, ROUND((CAST(GoalerFarmStatCareer.PenalityShotsShots - GoalerFarmStatCareer.PenalityShotsGoals AS REAL) / (GoalerFarmStatCareer.PenalityShotsShots)),3) AS PenalityShotsPCT FROM GoalerFarmStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $GoalieName) . "') ORDER BY GoalerFarmStatCareer.Year";
			$GoalieFarmCareerSeason = $CareerStatdb->query($Query);
			$Query = "SELECT GoalerFarmStatCareer.*, ROUND((CAST(GoalerFarmStatCareer.GA AS REAL) / (GoalerFarmStatCareer.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerFarmStatCareer.SA - GoalerFarmStatCareer.GA AS REAL) / (GoalerFarmStatCareer.SA)),3) AS PCT, ROUND((CAST(GoalerFarmStatCareer.PenalityShotsShots - GoalerFarmStatCareer.PenalityShotsGoals AS REAL) / (GoalerFarmStatCareer.PenalityShotsShots)),3) AS PenalityShotsPCT FROM GoalerFarmStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $GoalieName) . "') ORDER BY GoalerFarmStatCareer.Year";
			$GoalieFarmCareerPlayoff = $CareerStatdb->query($Query);
			$Query = "SELECT Sum(GoalerFarmStatCareer.GP) AS SumOfGP, Sum(GoalerFarmStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(GoalerFarmStatCareer.W) AS SumOfW, Sum(GoalerFarmStatCareer.L) AS SumOfL, Sum(GoalerFarmStatCareer.OTL) AS SumOfOTL, Sum(GoalerFarmStatCareer.Shootout) AS SumOfShootout, Sum(GoalerFarmStatCareer.GA) AS SumOfGA, Sum(GoalerFarmStatCareer.SA) AS SumOfSA, Sum(GoalerFarmStatCareer.SARebound) AS SumOfSARebound, Sum(GoalerFarmStatCareer.Pim) AS SumOfPim, Sum(GoalerFarmStatCareer.A) AS SumOfA, Sum(GoalerFarmStatCareer.PenalityShotsShots) AS SumOfPenalityShotsShots, Sum(GoalerFarmStatCareer.PenalityShotsGoals) AS SumOfPenalityShotsGoals, Sum(GoalerFarmStatCareer.StartGoaler) AS SumOfStartGoaler, Sum(GoalerFarmStatCareer.BackupGoaler) AS SumOfBackupGoaler, Sum(GoalerFarmStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(GoalerFarmStatCareer.Star1) AS SumOfStar1, Sum(GoalerFarmStatCareer.Star2) AS SumOfStar2, Sum(GoalerFarmStatCareer.Star3) AS SumOfStar3 FROM GoalerFarmStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $GoalieName) . "')";
			$GoalieFarmCareerSumSeasonOnly = $CareerStatdb->querySingle($Query, true);
			$Query = "SELECT Sum(GoalerFarmStatCareer.GP) AS SumOfGP, Sum(GoalerFarmStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(GoalerFarmStatCareer.W) AS SumOfW, Sum(GoalerFarmStatCareer.L) AS SumOfL, Sum(GoalerFarmStatCareer.OTL) AS SumOfOTL, Sum(GoalerFarmStatCareer.Shootout) AS SumOfShootout, Sum(GoalerFarmStatCareer.GA) AS SumOfGA, Sum(GoalerFarmStatCareer.SA) AS SumOfSA, Sum(GoalerFarmStatCareer.SARebound) AS SumOfSARebound, Sum(GoalerFarmStatCareer.Pim) AS SumOfPim, Sum(GoalerFarmStatCareer.A) AS SumOfA, Sum(GoalerFarmStatCareer.PenalityShotsShots) AS SumOfPenalityShotsShots, Sum(GoalerFarmStatCareer.PenalityShotsGoals) AS SumOfPenalityShotsGoals, Sum(GoalerFarmStatCareer.StartGoaler) AS SumOfStartGoaler, Sum(GoalerFarmStatCareer.BackupGoaler) AS SumOfBackupGoaler, Sum(GoalerFarmStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(GoalerFarmStatCareer.Star1) AS SumOfStar1, Sum(GoalerFarmStatCareer.Star2) AS SumOfStar2, Sum(GoalerFarmStatCareer.Star3) AS SumOfStar3 FROM GoalerFarmStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $GoalieName) . "')";
			$GoalieFarmCareerSumPlayoffOnly = $CareerStatdb->querySingle($Query, true);

			$GoalieCareerStatFound = true;
		}
	} else {
		$GoalieName = $PlayersLang['Goalienotfound'];
		$GoalieInfo = Null;
		$GoalieProStat = Null;
		$GoalieFarmStat = Null;
		echo "<style>.STHSPHPPlayerStat_Main {display:none;}</style>";
	}
}
echo "<title>" . $LeagueName . " - " . $GoalieName . "</title>";
echo "<style>";
if ($GoalieCareerStatFound == true) {
	echo "#tablesorter_colSelect2:checked + label {background: #5797d7;  border-color: #555;}";
	echo "#tablesorter_colSelect2:checked ~ #tablesorter_ColumnSelector2 {display: block;}";
	echo "#tablesorter_colSelect3:checked + label {background: #5797d7;  border-color: #555;}";
	echo "#tablesorter_colSelect3:checked ~ #tablesorter_ColumnSelector3 {display: block;}";
}
if ($GoalieProStatMultipleTeamFound == true) {
	echo "#tablesorter_colSelect4:checked + label {background: #5797d7;  border-color: #555;}";
	echo "#tablesorter_colSelect4:checked ~ #tablesorter_ColumnSelector4 {display: block;}";
}
if ($GoalieFarmStatMultipleTeamFound == true) {
	echo "#tablesorter_colSelect5:checked + label {background: #5797d7;  border-color: #555;}";
	echo "#tablesorter_colSelect5:checked ~ #tablesorter_ColumnSelector5 {display: block;}";
}

$arrayDbs = [$DatabaseFileS10, $DatabaseFileS_C, $DatabaseFileS11, $DatabaseFileS12,$DatabaseFileS13, $DatabaseFileS14, $DatabaseFile];
$count = 0;
//dictionnaire des donnees des joueurs selon le count (annee)
$dictLeagueGeneral[[]];
$dictGoalieInfo[[]];
$dictGoaliesProStats[[]];
$dictGoaliesFarmStats[[]];
$dictGoaliesProSeasonStats[[]];
$dictGoaliesFarmSeasonStats[[]];
foreach ($arrayDbs as $Dbs) {
	$db = new SQLite3($Dbs);
	$Query = "Select Name, OutputName, LeagueYearOutput, PreSeasonSchedule, PlayOffStarted, LeagueYear from LeagueGeneral";
	$LeagueGeneral = $db->querySingle($Query, true);
	$dictLeagueGeneral[$count] = $LeagueGeneral;

	$Query = "Select PlayersMugShotBaseURL, PlayersMugShotFileExtension,OutputSalariesRemaining,OutputSalariesAverageTotal,OutputSalariesAverageRemaining from LeagueOutputOption";
	$LeagueOutputOption = $db->querySingle($Query, true);

	if ($Goalie == 0) {
		$GoalieInfo = Null;
		$GoalieProStat = Null;
		$GoalieFarmStat = Null;

		echo "<style>.STHSPHPPlayerStat_Main {display:none;}</style>";
	} else {
		$Query = "SELECT count(*) AS count FROM GoalerInfo WHERE Number = " . $Goalie;
		$Result = $db->querySingle($Query, true);
		if ($Result['count'] == 1) {
			$Query = "SELECT GoalerInfo.*, TeamProInfo.Name AS ProTeamName FROM GoalerInfo LEFT JOIN TeamProInfo ON GoalerInfo.Team = TeamProInfo.Number WHERE GoalerInfo.Number = " . $Goalie;
			$GoalieInfo = $db->querySingle($Query, true);
			$dictGoalieInfo[$count] = $GoalieInfo;

			$Query = "SELECT GoalerProStat.*, ROUND((CAST(GoalerProStat.GA AS REAL) / (GoalerProStat.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerProStat.SA - GoalerProStat.GA AS REAL) / (GoalerProStat.SA)),3) AS PCT, ROUND((CAST(GoalerProStat.PenalityShotsShots - GoalerProStat.PenalityShotsGoals AS REAL) / (GoalerProStat.PenalityShotsShots)),3) AS PenalityShotsPCT  FROM GoalerProStat WHERE Number = " . $Goalie;
			$GoalieProStat = $db->querySingle($Query, true);
			$dictGoaliesProStats[$count] = $GoalieProStat;

			$Query = "SELECT GoalerFarmStat.*, ROUND((CAST(GoalerFarmStat.GA AS REAL) / (GoalerFarmStat.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerFarmStat.SA - GoalerFarmStat.GA AS REAL) / (GoalerFarmStat.SA)),3) AS PCT, ROUND((CAST(GoalerFarmStat.PenalityShotsShots - GoalerFarmStat.PenalityShotsGoals AS REAL) / (GoalerFarmStat.PenalityShotsShots)),3) AS PenalityShotsPCT FROM GoalerFarmStat WHERE Number = " . $Goalie;
			$GoalieFarmStat = $db->querySingle($Query, true);
			$dictGoaliesFarmStats[$count] = $GoalieFarmStat;

			$Query = "SELECT GoalerProSeasonStat.*, ROUND((CAST(GoalerProSeasonStat.GA AS REAL) / (GoalerProSeasonStat.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerProSeasonStat.SA - GoalerProSeasonStat.GA AS REAL) / (GoalerProSeasonStat.SA)),3) AS PCT, ROUND((CAST(GoalerProSeasonStat.PenalityShotsShots - GoalerProSeasonStat.PenalityShotsGoals AS REAL) / (GoalerProSeasonStat.PenalityShotsShots)),3) AS PenalityShotsPCT  FROM GoalerProSeasonStat WHERE Number = " . $Goalie;
			$GoalieProStatSeason = $db->querySingle($Query, true);
			$dictGoaliesProSeasonStats[$count] = $GoalieProStatSeason;

			$Query = "SELECT GoalerFarmSeasonStat.*, ROUND((CAST(GoalerFarmSeasonStat.GA AS REAL) / (GoalerFarmSeasonStat.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerFarmSeasonStat.SA - GoalerFarmSeasonStat.GA AS REAL) / (GoalerFarmSeasonStat.SA)),3) AS PCT, ROUND((CAST(GoalerFarmSeasonStat.PenalityShotsShots - GoalerFarmSeasonStat.PenalityShotsGoals AS REAL) / (GoalerFarmSeasonStat.PenalityShotsShots)),3) AS PenalityShotsPCT FROM GoalerFarmSeasonStat WHERE Number = " . $Goalie;
			$GoalieFarmSeasonStat = $db->querySingle($Query, true);
			$dictGoaliesFarmSeasonStats[$count] = $GoalieFarmSeasonStat;

			$Query = "SELECT count(*) AS count FROM GoalerProStatMultipleTeam WHERE Number = " . $Goalie;
			$Result = $db->querySingle($Query, true);
			if ($Result['count'] > 0) {
				$GoalieProStatMultipleTeamFound = TRUE;
			}

			$Query = "SELECT count(*) AS count FROM GoalerFarmStatMultipleTeam WHERE Number = " . $Goalie;
			$Result = $db->querySingle($Query, true);
			if ($Result['count'] > 0) {
				$GoalieFarmStatMultipleTeamFound = TRUE;
			}

			if ($GoalieInfo['Team'] > 0) {
				$Query = "SELECT MainTable.* FROM (SELECT PlayerInfo.Number, PlayerInfo.Name, PlayerInfo.Team, PlayerInfo.TeamName, PlayerInfo.URLLink, PlayerInfo.NHLID, 'False' AS PosG FROM PlayerInfo WHERE Team = " . $GoalieInfo['Team'] . " UNION ALL SELECT GoalerInfo.Number, GoalerInfo.Name, GoalerInfo.Team, GoalerInfo.TeamName, GoalerInfo.URLLink, GoalerInfo.NHLID, 'True' AS PosG FROM GoalerInfo WHERE Team = " . $GoalieInfo['Team'] . ") AS MainTable ORDER BY Name";
				$TeamPlayers = $db->query($Query);
			}

			$LeagueName = $LeagueGeneral['Name'];
			$GoalieName = $GoalieInfo['Name'];

			if (file_exists($CareerStatDatabaseFile) == true) { /* CareerStat */
				$CareerStatdb = new SQLite3($CareerStatDatabaseFile);

				$Query = "SELECT GoalerProStatCareer.*, ROUND((CAST(GoalerProStatCareer.GA AS REAL) / (GoalerProStatCareer.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerProStatCareer.SA - GoalerProStatCareer.GA AS REAL) / (GoalerProStatCareer.SA)),3) AS PCT, ROUND((CAST(GoalerProStatCareer.PenalityShotsShots - GoalerProStatCareer.PenalityShotsGoals AS REAL) / (GoalerProStatCareer.PenalityShotsShots)),3) AS PenalityShotsPCT FROM GoalerProStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $GoalieName) . "') ORDER BY GoalerProStatCareer.Year";
				$GoalieProCareerSeason = $CareerStatdb->query($Query);
				$Query = "SELECT GoalerProStatCareer.*, ROUND((CAST(GoalerProStatCareer.GA AS REAL) / (GoalerProStatCareer.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerProStatCareer.SA - GoalerProStatCareer.GA AS REAL) / (GoalerProStatCareer.SA)),3) AS PCT, ROUND((CAST(GoalerProStatCareer.PenalityShotsShots - GoalerProStatCareer.PenalityShotsGoals AS REAL) / (GoalerProStatCareer.PenalityShotsShots)),3) AS PenalityShotsPCT FROM GoalerProStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $GoalieName) . "') ORDER BY GoalerProStatCareer.Year";
				$GoalieProCareerPlayoff = $CareerStatdb->query($Query);
				$Query = "SELECT Sum(GoalerProStatCareer.GP) AS SumOfGP, Sum(GoalerProStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(GoalerProStatCareer.W) AS SumOfW, Sum(GoalerProStatCareer.L) AS SumOfL, Sum(GoalerProStatCareer.OTL) AS SumOfOTL, Sum(GoalerProStatCareer.Shootout) AS SumOfShootout, Sum(GoalerProStatCareer.GA) AS SumOfGA, Sum(GoalerProStatCareer.SA) AS SumOfSA, Sum(GoalerProStatCareer.SARebound) AS SumOfSARebound, Sum(GoalerProStatCareer.Pim) AS SumOfPim, Sum(GoalerProStatCareer.A) AS SumOfA, Sum(GoalerProStatCareer.PenalityShotsShots) AS SumOfPenalityShotsShots, Sum(GoalerProStatCareer.PenalityShotsGoals) AS SumOfPenalityShotsGoals, Sum(GoalerProStatCareer.StartGoaler) AS SumOfStartGoaler, Sum(GoalerProStatCareer.BackupGoaler) AS SumOfBackupGoaler, Sum(GoalerProStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(GoalerProStatCareer.Star1) AS SumOfStar1, Sum(GoalerProStatCareer.Star2) AS SumOfStar2, Sum(GoalerProStatCareer.Star3) AS SumOfStar3 FROM GoalerProStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $GoalieName) . "')";
				$GoalieProCareerSumSeasonOnly = $CareerStatdb->querySingle($Query, true);
				$Query = "SELECT Sum(GoalerProStatCareer.GP) AS SumOfGP, Sum(GoalerProStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(GoalerProStatCareer.W) AS SumOfW, Sum(GoalerProStatCareer.L) AS SumOfL, Sum(GoalerProStatCareer.OTL) AS SumOfOTL, Sum(GoalerProStatCareer.Shootout) AS SumOfShootout, Sum(GoalerProStatCareer.GA) AS SumOfGA, Sum(GoalerProStatCareer.SA) AS SumOfSA, Sum(GoalerProStatCareer.SARebound) AS SumOfSARebound, Sum(GoalerProStatCareer.Pim) AS SumOfPim, Sum(GoalerProStatCareer.A) AS SumOfA, Sum(GoalerProStatCareer.PenalityShotsShots) AS SumOfPenalityShotsShots, Sum(GoalerProStatCareer.PenalityShotsGoals) AS SumOfPenalityShotsGoals, Sum(GoalerProStatCareer.StartGoaler) AS SumOfStartGoaler, Sum(GoalerProStatCareer.BackupGoaler) AS SumOfBackupGoaler, Sum(GoalerProStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(GoalerProStatCareer.Star1) AS SumOfStar1, Sum(GoalerProStatCareer.Star2) AS SumOfStar2, Sum(GoalerProStatCareer.Star3) AS SumOfStar3 FROM GoalerProStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $GoalieName) . "')";
				$GoalieProCareerSumPlayoffOnly = $CareerStatdb->querySingle($Query, true);

				$Query = "SELECT GoalerFarmStatCareer.*, ROUND((CAST(GoalerFarmStatCareer.GA AS REAL) / (GoalerFarmStatCareer.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerFarmStatCareer.SA - GoalerFarmStatCareer.GA AS REAL) / (GoalerFarmStatCareer.SA)),3) AS PCT, ROUND((CAST(GoalerFarmStatCareer.PenalityShotsShots - GoalerFarmStatCareer.PenalityShotsGoals AS REAL) / (GoalerFarmStatCareer.PenalityShotsShots)),3) AS PenalityShotsPCT FROM GoalerFarmStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $GoalieName) . "') ORDER BY GoalerFarmStatCareer.Year";
				$GoalieFarmCareerSeason = $CareerStatdb->query($Query);
				$Query = "SELECT GoalerFarmStatCareer.*, ROUND((CAST(GoalerFarmStatCareer.GA AS REAL) / (GoalerFarmStatCareer.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerFarmStatCareer.SA - GoalerFarmStatCareer.GA AS REAL) / (GoalerFarmStatCareer.SA)),3) AS PCT, ROUND((CAST(GoalerFarmStatCareer.PenalityShotsShots - GoalerFarmStatCareer.PenalityShotsGoals AS REAL) / (GoalerFarmStatCareer.PenalityShotsShots)),3) AS PenalityShotsPCT FROM GoalerFarmStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $GoalieName) . "') ORDER BY GoalerFarmStatCareer.Year";
				$GoalieFarmCareerPlayoff = $CareerStatdb->query($Query);
				$Query = "SELECT Sum(GoalerFarmStatCareer.GP) AS SumOfGP, Sum(GoalerFarmStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(GoalerFarmStatCareer.W) AS SumOfW, Sum(GoalerFarmStatCareer.L) AS SumOfL, Sum(GoalerFarmStatCareer.OTL) AS SumOfOTL, Sum(GoalerFarmStatCareer.Shootout) AS SumOfShootout, Sum(GoalerFarmStatCareer.GA) AS SumOfGA, Sum(GoalerFarmStatCareer.SA) AS SumOfSA, Sum(GoalerFarmStatCareer.SARebound) AS SumOfSARebound, Sum(GoalerFarmStatCareer.Pim) AS SumOfPim, Sum(GoalerFarmStatCareer.A) AS SumOfA, Sum(GoalerFarmStatCareer.PenalityShotsShots) AS SumOfPenalityShotsShots, Sum(GoalerFarmStatCareer.PenalityShotsGoals) AS SumOfPenalityShotsGoals, Sum(GoalerFarmStatCareer.StartGoaler) AS SumOfStartGoaler, Sum(GoalerFarmStatCareer.BackupGoaler) AS SumOfBackupGoaler, Sum(GoalerFarmStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(GoalerFarmStatCareer.Star1) AS SumOfStar1, Sum(GoalerFarmStatCareer.Star2) AS SumOfStar2, Sum(GoalerFarmStatCareer.Star3) AS SumOfStar3 FROM GoalerFarmStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $GoalieName) . "')";
				$GoalieFarmCareerSumSeasonOnly = $CareerStatdb->querySingle($Query, true);
				$Query = "SELECT Sum(GoalerFarmStatCareer.GP) AS SumOfGP, Sum(GoalerFarmStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(GoalerFarmStatCareer.W) AS SumOfW, Sum(GoalerFarmStatCareer.L) AS SumOfL, Sum(GoalerFarmStatCareer.OTL) AS SumOfOTL, Sum(GoalerFarmStatCareer.Shootout) AS SumOfShootout, Sum(GoalerFarmStatCareer.GA) AS SumOfGA, Sum(GoalerFarmStatCareer.SA) AS SumOfSA, Sum(GoalerFarmStatCareer.SARebound) AS SumOfSARebound, Sum(GoalerFarmStatCareer.Pim) AS SumOfPim, Sum(GoalerFarmStatCareer.A) AS SumOfA, Sum(GoalerFarmStatCareer.PenalityShotsShots) AS SumOfPenalityShotsShots, Sum(GoalerFarmStatCareer.PenalityShotsGoals) AS SumOfPenalityShotsGoals, Sum(GoalerFarmStatCareer.StartGoaler) AS SumOfStartGoaler, Sum(GoalerFarmStatCareer.BackupGoaler) AS SumOfBackupGoaler, Sum(GoalerFarmStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(GoalerFarmStatCareer.Star1) AS SumOfStar1, Sum(GoalerFarmStatCareer.Star2) AS SumOfStar2, Sum(GoalerFarmStatCareer.Star3) AS SumOfStar3 FROM GoalerFarmStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $GoalieName) . "')";
				$GoalieFarmCareerSumPlayoffOnly = $CareerStatdb->querySingle($Query, true);

				$GoalieCareerStatFound = true;
			}
		} else {
			$GoalieName = $PlayersLang['Goalienotfound'];
			$GoalieInfo = Null;
			$GoalieProStat = Null;
			$GoalieFarmStat = Null;
			echo "<style>.STHSPHPPlayerStat_Main {display:none;}</style>";
		}
	}
	$count++;
}

echo "</style>";
echo "<title>" . $LeagueName . " - " . $GoalieName .  "</title>";

?>
</head>

<body>
	<?php include "Menu.php"; ?>
	<br />
	<div class="STHSPHPPlayerStat_PlayerNameHeader">
		<?php
		echo "<table class=\"STHSTableFullW STHSPHPPlayerMugShot\"><tr>";
		if ($GoalieInfo <> Null) {
			echo "<tr><td><br />" . $GoalieInfo['TeamName'] . "</td></tr><tr><td><br /></td></tr>";
			echo "<td style=\"width: 100%; text-align: center;\"><img src=\"https://tsnimages.tsn.ca/ImageProvider/PlayerHeadshot?seoId=" . createPickturePlayer($GoalieInfo['Name']) . "&width=136&height=136\" alt=\"\" style=\"border-radius:40%\"/></td></tr>";
		}
		echo "<tr><td><br /></td></tr>
		<tr>
		<td style=\"padding-bottom: 10px; text-align: center;display: flex;justify-content: center;align-items: center;\" >" . $GoalieName . " #" . $GoalieInfo['Jersey'] . "&nbsp" . "<img src=\"https://flagcdn.com/28x21/" . getCountryAbre(substr($GoalieInfo['Country'], 0, -1)) . ".png\"></td>
		</tr>
		<tr><td style=\"font-size: 15px;\">";
		if ($GoalieInfo <> Null) {
			echo "G | Âge: " . $GoalieInfo['Age'] . " | " . $GoalieInfo['Height'] . "in | " . $GoalieInfo['Weight'] . "lbs";
		}
		echo "</tr></table>";
		?></div>

	</div>
	<div class="">
		<br />
		<div style="overflow-x:auto;">
			<table class="STHSPHPPlayerStat_Table">
				<tr>
					<th>SK</th>
					<th>DU</th>
					<th>EN</th>
					<th>SZ</th>
					<th>AG</th>
					<th>RB</th>
					<th>SC</th>
					<th>HS</th>
					<th>RT</th>
					<th>PH</th>
					<th>PS</th>
					<th>EX</th>
					<th>LD</th>
					<th>PO</th>
					<!-- <th>MO</th>
					<th>OV</th> -->
				</tr>
				<tr>
					<?php
					if ($GoalieInfo <> Null) {
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'SK') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'DU') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'EN') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'SZ') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'AG') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'RB') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'SC') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'HS') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'RT') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'PH') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'PS') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'EX') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'LD') . "</td>";
						echo "<td>" . getRankPlayerStat($DatabaseFile, $GoalieInfo, 'PO') . "</td>";

					} ?>
				</tr>
			</table>
		</div>
		<br />

		<div class="tabsmain standard">
			<ul class="tabmain-links">
				<li class="activemain"><a href="#tabmain1"><?php echo $PlayersLang['Information']; ?></a></li>
				<li><a href="#tabmain2"><?php echo $PlayersLang['ProStat']; ?></a></li>
				<li><a href="#tabmain3"><?php echo $PlayersLang['FarmStat']; ?></a></li>
				<?php
				if ($GoalieProStatMultipleTeamFound == TRUE or $GoalieFarmStatMultipleTeamFound == TRUE) {
					echo "<li><a href=\"#tabmain8\">" . $PlayersLang['StatperTeam'] . "</a></li>";
				}
				if ($GoalieCareerStatFound == true) {
					echo "<li><a href=\"#tabmain4\">" . $PlayersLang['CareerProStat'] . "</a></li>";
					echo "<li><a href=\"#tabmain5\">" . $PlayersLang['CareerFarmStat'] . "</a></li>";
				}
				?>
				<li><a href="#tabmain9">Calcul retention salariale</a></li>

			</ul>
			<div class="STHSPHPPlayerStat_Tabmain-content">
				<div class="tabmain active" id="tabmain1">
					<br />
					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['Information']; ?></div><br />
					<table class="STHSPHPPlayerStat_Table_Info">
						<tr>
							<td><?php echo $TeamLang['Equipe actuelle'] ?></td>
							<td><?php echo $GoalieInfo['TeamName']; ?></td>
						</tr>
						<tr>
							<td><?php echo $TeamLang['Date de naissance'] ?></td>
							<td><?php echo $GoalieInfo['AgeDate']; ?></td>
						</tr>
						<tr>
							<td><?php echo $TeamLang['Annee de contrat | Salaire'] ?></td>

							<td><?php echo ($GoalieInfo['NoTrade'] == "False") ? $GoalieInfo['Contract'] . "an(s) | " . $GoalieInfo['SalaryAverage'] . "$ avg" : $GoalieInfo['Contract'] . "an(s) | " . $GoalieInfo['SalaryAverage'] . "$ avg + NTC"; ?></td>
						</tr>
						<tr>
							<td><?php echo $PlayersLang['SalaryRemaining'] ?></td>
							<td><?php echo $GoalieInfo['SalaryRemaining']  . "$ " ?></td>
						</tr>
						<tr>
							<td><?php echo $TeamLang['Recrue'] ?></td>
							<td><?php echo ($GoalieInfo['Rookie'] == "False") ? "&#x2610;" : "&#x2611;"; ?></td>
						</tr>
						<tr>
							<td><?php echo $TeamLang['Disponible pour echange'] ?></td>
							<td><?php echo ($GoalieInfo['AvailableforTrade'] == "False") ? "Indisponible pour echange" : "Disponible pour echange"; ?></td>
						</tr>
						<tr>
							<td><?php echo $TeamLang['Condition | Blessure'] ?></td>
							<td><?php echo (empty($GoalieInfo['Injury'])) ? $GoalieInfo['Condition'] . "% | N/A" : $GoalieInfo['Condition'] . "% | " . $InjuryLang[$GoalieInfo['Injury']]; ?></td>
						</tr>
						<tr>
							<?php
							if ($GoalieInfo != Null) {
							} ?>
						</tr>
					</table>
					<br /><br />
				</div>
				<div class="tabmain" id="tabmain2">
					<br />
					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['ProStat'] . ': Saison régulière'; ?></div><br />
					<div style="overflow-x:auto;">
						<table class="tablesorter ">
							<?php include "GoaliesCareerStatSub.php"; ?>
							<?php $count++;
							?>
						</table>
					</div>
					<br /><br />
					<br />
					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['ProStat'] . ': Séries'; ?></div><br />
					<div style="overflow-x:auto;">
						<table class="tablesorter ">
							<?php include "GoaliesCareerStatPlayoffsSub.php"; ?>
							<?php $count++;
							?>
						</table>
					</div>
					<br /><br />
				</div>
				<div class="tabmain" id="tabmain3">
					<br />
					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['ProStat'] . ': Saison régulière'; ?></div><br />
					<div style="overflow-x:auto;">
						<table class="tablesorter ">
							<?php include "FarmGoaliesCareerStatSub.php"; ?>
							<?php $count++;
							?>
						</table>
					</div>
					<br />

					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['ProStat'] . ': Séries'; ?></div><br />
					<div style="overflow-x:auto;">
						<table class="tablesorter ">
							<table class="tablesorter ">
								<?php include "FarmGoaliesCareerStatPlayoffsSub.php"; ?>
								<?php $count++;
								?>
							</table>
						</table>
					</div>
					<br />
				</div>

				<div class="tabmain" id="tabmain8">
					<br />
					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['StatperTeam']; ?></div>

					<?php
					if ($GoalieProStatMultipleTeamFound == TRUE) {
						echo "<h2>" . $PlayersLang['ProStat'] . "</h2>";
						echo "<div style=\"overflow-x:auto;\"><div class=\"tablesorter_ColumnSelectorWrapper\"><input id=\"tablesorter_colSelect4\" type=\"checkbox\" class=\"hidden\"><label class=\"tablesorter_ColumnSelectorButton\" for=\"tablesorter_colSelect4\">" . $TableSorterLang['ShoworHideColumn'] . "</label><div id=\"tablesorter_ColumnSelector4\" class=\"tablesorter_ColumnSelector\"></div>";
						include "FilterTip.php";
						echo "</div></div>";

						$Query = "SELECT GoalerProStatMultipleTeam.*, ROUND((CAST(GoalerProStatMultipleTeam.GA AS REAL) / (GoalerProStatMultipleTeam.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerProStatMultipleTeam.SA - GoalerProStatMultipleTeam.GA AS REAL) / (GoalerProStatMultipleTeam.SA)),3) AS PCT, ROUND((CAST(GoalerProStatMultipleTeam.PenalityShotsShots - GoalerProStatMultipleTeam.PenalityShotsGoals AS REAL) / (GoalerProStatMultipleTeam.PenalityShotsShots)),3) AS PenalityShotsPCT, 0 as Star1, 0 as Star2, 0 As Star3 FROM  GoalerProStatMultipleTeam WHERE Number = " . $Goalie;
						$GoalieStat = $db->query($Query);
						$Team = (int)-1;
						echo "<div style=\"overflow-x:auto;\">";
						echo "<table class=\"tablesorter STHSPHPProGoalieStatPerTeam_Table\"><thead><tr>";
						include "GoaliesStatSub.php";
						echo "</tbody></table></div>";
					}

					if ($GoalieProStatMultipleTeamFound == TRUE and $GoalieFarmStatMultipleTeamFound == TRUE) {
						echo "<br /><hr /><br />";
					}

					if ($GoalieFarmStatMultipleTeamFound == TRUE) {
						echo "<h2>" . $PlayersLang['FarmStat'] . "</h2>";
						echo "<div style=\"overflow-x:auto;\"><div class=\"tablesorter_ColumnSelectorWrapper\"><input id=\"tablesorter_colSelect5\" type=\"checkbox\" class=\"hidden\"><label class=\"tablesorter_ColumnSelectorButton\" for=\"tablesorter_colSelect5\">" . $TableSorterLang['ShoworHideColumn'] . "</label><div id=\"tablesorter_ColumnSelector5\" class=\"tablesorter_ColumnSelector\"></div>";
						include "FilterTip.php";
						echo "</div></div>";

						$Query = "SELECT GoalerFarmStatMultipleTeam.*, ROUND((CAST(GoalerFarmStatMultipleTeam.GA AS REAL) / (GoalerFarmStatMultipleTeam.SecondPlay / 60))*60,3) AS GAA, ROUND((CAST(GoalerFarmStatMultipleTeam.SA - GoalerFarmStatMultipleTeam.GA AS REAL) / (GoalerFarmStatMultipleTeam.SA)),3) AS PCT, ROUND((CAST(GoalerFarmStatMultipleTeam.PenalityShotsShots - GoalerFarmStatMultipleTeam.PenalityShotsGoals AS REAL) / (GoalerFarmStatMultipleTeam.PenalityShotsShots)),3) AS PenalityShotsPCT, 0 as Star1, 0 as Star2, 0 As Star3 FROM  GoalerFarmStatMultipleTeam WHERE Number = " . $Goalie;
						$GoalieStat = $db->query($Query);
						$Team = (int)-1;
						echo "<div style=\"overflow-x:auto;\">";
						echo "<table class=\"tablesorter STHSPHPFarmGoaliesStatPerTeam_Table\"><thead><tr>";
						include "GoaliesStatSub.php";
						echo "</tbody></table></div>";
					}
					?>

					<br /><br />
				</div>

				<div class="tabmain" id="tabmain4">
					<br />
					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['CareerProStat']; ?></div><br />

					<div class="tablesorter_ColumnSelectorWrapper">
						<input id="tablesorter_colSelect2" type="checkbox" class="hidden">
						<label class="tablesorter_ColumnSelectorButton" for="tablesorter_colSelect2"><?php echo $TableSorterLang['ShoworHideColumn']; ?></label>
						<div id="tablesorter_ColumnSelector2" class="tablesorter_ColumnSelector"></div>
					</div>

					<table class="tablesorter STHSPHPProCareerStat_Table">
						<thead>
							<tr>
								<th data-priority="2" title="Team Name" class="STHSW140Min"><?php echo $PlayersLang['TeamName']; ?></th>
								<th data-priority="1" title="Year" class="STHSW35"><?php echo $TeamLang['Year']; ?></th>
								<th data-priority="1" title="Games Played" class="STHSW25">GP</th>
								<th data-priority="1" title="Wins" class="STHSW25">W</th>
								<th data-priority="2" title="Losses" class="STHSW25">L</th>
								<th data-priority="2" title="Overtime Losses" class="STHSW25">OTL</th>
								<th data-priority="critical" title="Save Percentage" class="STHSW50">PCT</th>
								<th data-priority="critical" title="Goals Against Average" class="STHSW50">GAA</th>
								<th data-priority="3" title="Minutes Played" class="STHSW50">MP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Minutes">PIM</th>
								<th data-priority="4" title="Shutouts" class="STHSW25">SO</th>
								<th data-priority="3" title="Goals Against" class="STHSW25">GA</th>
								<th data-priority="3" title="Shots Against" class="STHSW45">SA</th>
								<th data-priority="5" title="Shots Against Rebound" class="STHSW45">SAR</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Assists">A</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Empty net Goals">EG</th>
								<th data-priority="4" title="Penalty Shots Save %" class="STHSW50">PS %</th>
								<th data-priority="5" title="Penalty Shots Against" class="STHSW25">PSA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of game goalies start as Start goalie">ST</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of game goalies start as Backup goalie">BG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #1 in a game">S1</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #2 in a game">S2</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #3 in a game">S3</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($GoalieInfo <> Null) {
								if ($GoalieProCareerSumSeasonOnly['SumOfGP'] > 0) {
									echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"23\"><strong>" . $PlayersLang['RegularSeason'] . "</strong></td></tr>\n";
								}
								if (empty($GoalieProCareerSeason) == false) {
									while ($Row = $GoalieProCareerSeason->fetchArray()) {
										/* Loop ProGoalieCareerInfo */
										echo "<tr><td>" . $Row['TeamName'] . "</td>";
										echo "<td>" . $Row['Year'] . "</td>";
										echo "<td>" . $Row['GP'] . "</td>";
										echo "<td>" . $Row['W'] . "</td>";
										echo "<td>" . $Row['L'] . "</td>";
										echo "<td>" . $Row['OTL'] . "</td>";
										echo "<td>" . number_Format($Row['PCT'], 3) . "</td>";
										echo "<td>" . number_Format($Row['GAA'], 2) . "</td>";
										echo "<td>";
										if ($Row <> Null) {
											echo Floor($Row['SecondPlay'] / 60);
										};
										echo "</td>";
										echo "<td>" . $Row['Pim'] . "</td>";
										echo "<td>" . $Row['Shootout'] . "</td>";
										echo "<td>" . $Row['GA'] . "</td>";
										echo "<td>" . $Row['SA'] . "</td>";
										echo "<td>" . $Row['SARebound'] . "</td>";
										echo "<td>" . $Row['A'] . "</td>";
										echo "<td>" . $Row['EmptyNetGoal'] . "</td>";
										echo "<td>" . number_Format($Row['PenalityShotsPCT'], 3) . "</td>";
										echo "<td>" . $Row['PenalityShotsShots'] . "</td>";
										echo "<td>" . $Row['StartGoaler'] . "</td>";
										echo "<td>" . $Row['BackupGoaler'] . "</td>";
										echo "<td>" . $Row['Star1'] . "</td>";
										echo "<td>" . $Row['Star2'] . "</td>";
										echo "<td>" . $Row['Star3'] . "</td>";
										echo "</tr>\n";
									}
								}
								if ($GoalieProStat['GP'] > 0 and $LeagueGeneral['PreSeasonSchedule'] == "False" and $LeagueGeneral['PlayOffStarted'] == "False") {
									#Show Current Year
									echo "<tr><td>" . $GoalieInfo['ProTeamName'] . "</td>";
									echo "<td>" . $LeagueGeneral['LeagueYearOutput'] . "</td>";
									echo "<td>" . $GoalieProStat['GP'] . "</td>";
									echo "<td>" . $GoalieProStat['W'] . "</td>";
									echo "<td>" . $GoalieProStat['L'] . "</td>";
									echo "<td>" . $GoalieProStat['OTL'] . "</td>";
									echo "<td>" . number_Format($GoalieProStat['PCT'], 3) . "</td>";
									echo "<td>" . number_Format($GoalieProStat['GAA'], 2) . "</td>";
									echo "<td>";
									if ($GoalieProStat <> Null) {
										echo Floor($GoalieProStat['SecondPlay'] / 60);
									};
									echo "</td>";
									echo "<td>" . $GoalieProStat['Pim'] . "</td>";
									echo "<td>" . $GoalieProStat['Shootout'] . "</td>";
									echo "<td>" . $GoalieProStat['GA'] . "</td>";
									echo "<td>" . $GoalieProStat['SA'] . "</td>";
									echo "<td>" . $GoalieProStat['SARebound'] . "</td>";
									echo "<td>" . $GoalieProStat['A'] . "</td>";
									echo "<td>" . $GoalieProStat['EmptyNetGoal'] . "</td>";
									echo "<td>" . number_Format($GoalieProStat['PenalityShotsPCT'], 3) . "</td>";
									echo "<td>" . $GoalieProStat['PenalityShotsShots'] . "</td>";
									echo "<td>" . $GoalieProStat['StartGoaler'] . "</td>";
									echo "<td>" . $GoalieProStat['BackupGoaler'] . "</td>";
									echo "<td>" . $GoalieProStat['Star1'] . "</td>";
									echo "<td>" . $GoalieProStat['Star2'] . "</td>";
									echo "<td>" . $GoalieProStat['Star3'] . "</td>";
									echo "</tr>\n";

									#Add Current Year in Career Stat
									$GoalieProCareerSumSeasonOnly['SumOfGP'] =  $GoalieProCareerSumSeasonOnly['SumOfGP'] + $GoalieProStat['GP'];
									$GoalieProCareerSumSeasonOnly['SumOfSecondPlay'] =  $GoalieProCareerSumSeasonOnly['SumOfSecondPlay'] + $GoalieProStat['SecondPlay'];
									$GoalieProCareerSumSeasonOnly['SumOfW'] =  $GoalieProCareerSumSeasonOnly['SumOfW'] + $GoalieProStat['W'];
									$GoalieProCareerSumSeasonOnly['SumOfL'] =  $GoalieProCareerSumSeasonOnly['SumOfL'] + $GoalieProStat['L'];
									$GoalieProCareerSumSeasonOnly['SumOfOTL'] =  $GoalieProCareerSumSeasonOnly['SumOfOTL'] + $GoalieProStat['OTL'];
									$GoalieProCareerSumSeasonOnly['SumOfShootout'] =  $GoalieProCareerSumSeasonOnly['SumOfShootout'] + $GoalieProStat['Shootout'];
									$GoalieProCareerSumSeasonOnly['SumOfGA'] =  $GoalieProCareerSumSeasonOnly['SumOfGA'] + $GoalieProStat['GA'];
									$GoalieProCareerSumSeasonOnly['SumOfSA'] =  $GoalieProCareerSumSeasonOnly['SumOfSA'] + $GoalieProStat['SA'];
									$GoalieProCareerSumSeasonOnly['SumOfSARebound'] =  $GoalieProCareerSumSeasonOnly['SumOfSARebound'] + $GoalieProStat['SARebound'];
									$GoalieProCareerSumSeasonOnly['SumOfPim'] =  $GoalieProCareerSumSeasonOnly['SumOfPim'] + $GoalieProStat['Pim'];
									$GoalieProCareerSumSeasonOnly['SumOfA'] =  $GoalieProCareerSumSeasonOnly['SumOfA'] + $GoalieProStat['A'];
									$GoalieProCareerSumSeasonOnly['SumOfPenalityShotsShots'] =  $GoalieProCareerSumSeasonOnly['SumOfPenalityShotsShots'] + $GoalieProStat['PenalityShotsShots'];
									$GoalieProCareerSumSeasonOnly['SumOfPenalityShotsGoals'] =  $GoalieProCareerSumSeasonOnly['SumOfPenalityShotsGoals'] + $GoalieProStat['PenalityShotsGoals'];
									$GoalieProCareerSumSeasonOnly['SumOfStartGoaler'] =  $GoalieProCareerSumSeasonOnly['SumOfStartGoaler'] + $GoalieProStat['StartGoaler'];
									$GoalieProCareerSumSeasonOnly['SumOfBackupGoaler'] =  $GoalieProCareerSumSeasonOnly['SumOfBackupGoaler'] + $GoalieProStat['BackupGoaler'];
									$GoalieProCareerSumSeasonOnly['SumOfEmptyNetGoal'] =  $GoalieProCareerSumSeasonOnly['SumOfEmptyNetGoal'] + $GoalieProStat['EmptyNetGoal'];
									$GoalieProCareerSumSeasonOnly['SumOfStar1'] =  $GoalieProCareerSumSeasonOnly['SumOfStar1'] + $GoalieProStat['Star1'];
									$GoalieProCareerSumSeasonOnly['SumOfStar2'] =  $GoalieProCareerSumSeasonOnly['SumOfStar2'] + $GoalieProStat['Star2'];
									$GoalieProCareerSumSeasonOnly['SumOfStar3'] =  $GoalieProCareerSumSeasonOnly['SumOfStar3'] + $GoalieProStat['Star3'];
								}

								if ($GoalieProCareerSumSeasonOnly['SumOfGP'] > 0) {
									/* Show ProCareer Total for Season */
									echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"2\"><strong>" . $PlayersLang['Total'] . " " . $PlayersLang['RegularSeason'] . "</strong></td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfGP'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfW'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfL'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfOTL'] . "</td>";
									echo "<td>";
									if ($GoalieProCareerSumSeasonOnly['SumOfSA'] > "0") {
										echo number_format(($GoalieProCareerSumSeasonOnly['SumOfSA'] - $GoalieProCareerSumSeasonOnly['SumOfGA']) / $GoalieProCareerSumSeasonOnly['SumOfSA'], 3);
									} else {
										echo "0";
									}
									echo "</td>";
									echo "<td>";
									if ($GoalieProCareerSumSeasonOnly['SumOfSecondPlay'] > "0") {
										echo number_format($GoalieProCareerSumSeasonOnly['SumOfGA'] / ($GoalieProCareerSumSeasonOnly['SumOfSecondPlay'] / 60) * 60, 2);
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">";
									if ($GoalieProCareerSumSeasonOnly <> Null) {
										echo Floor($GoalieProCareerSumSeasonOnly['SumOfSecondPlay'] / 60);
									};
									echo "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfPim'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfShootout'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfGA'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfSA'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfSARebound'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfA'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfEmptyNetGoal'] . "</td>";
									echo "<td>";
									if ($GoalieProCareerSumSeasonOnly['SumOfPenalityShotsShots'] > "0") {
										echo number_format(($GoalieProCareerSumSeasonOnly['SumOfPenalityShotsShots'] - $GoalieProCareerSumSeasonOnly['SumOfPenalityShotsGoals']) / $GoalieProCareerSumSeasonOnly['SumOfPenalityShotsShots'], 3);
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfPenalityShotsShots'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfStartGoaler'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfBackupGoaler'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfStar1'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfStar2'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumSeasonOnly['SumOfStar3'] . "</td>";
									echo "</tr>\n";
								}

								if ($GoalieProCareerSumPlayoffOnly['SumOfGP'] > 0) {
									echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"23\"><strong>" . $PlayersLang['Playoff'] . "</strong></td></tr>\n";
								}
								if (empty($GoalieProCareerPlayoff) == false) {
									while ($Row = $GoalieProCareerPlayoff->fetchArray()) {
										/* Loop ProPlayerCareerPlayofff */
										echo "<tr><td>" . $Row['TeamName'] . "</td>";
										echo "<td>" . $Row['Year'] . "</td>";
										echo "<td>" . $Row['GP'] . "</td>";
										echo "<td>" . $Row['W'] . "</td>";
										echo "<td>" . $Row['L'] . "</td>";
										echo "<td>" . $Row['OTL'] . "</td>";
										echo "<td>" . number_Format($Row['PCT'], 3) . "</td>";
										echo "<td>" . number_Format($Row['GAA'], 2) . "</td>";
										echo "<td>";
										if ($Row <> Null) {
											echo Floor($Row['SecondPlay'] / 60);
										};
										echo "</td>";
										echo "<td>" . $Row['Pim'] . "</td>";
										echo "<td>" . $Row['Shootout'] . "</td>";
										echo "<td>" . $Row['GA'] . "</td>";
										echo "<td>" . $Row['SA'] . "</td>";
										echo "<td>" . $Row['SARebound'] . "</td>";
										echo "<td>" . $Row['A'] . "</td>";
										echo "<td>" . $Row['EmptyNetGoal'] . "</td>";
										echo "<td>" . number_Format($Row['PenalityShotsPCT'], 3) . "</td>";
										echo "<td>" . $Row['PenalityShotsShots'] . "</td>";
										echo "<td>" . $Row['StartGoaler'] . "</td>";
										echo "<td>" . $Row['BackupGoaler'] . "</td>";
										echo "<td>" . $Row['Star1'] . "</td>";
										echo "<td>" . $Row['Star2'] . "</td>";
										echo "<td>" . $Row['Star3'] . "</td>";
										echo "</tr>\n";
									}
								}
								if ($GoalieProStat['GP'] > 0 and $LeagueGeneral['PreSeasonSchedule'] == "False" and $LeagueGeneral['PlayOffStarted'] == "True") {
									#Show Current Year
									echo "<tr><td>" . $GoalieInfo['ProTeamName'] . "</td>";
									echo "<td>" . $LeagueGeneral['LeagueYearOutput'] . "</td>";
									echo "<td>" . $GoalieProStat['GP'] . "</td>";
									echo "<td>" . $GoalieProStat['W'] . "</td>";
									echo "<td>" . $GoalieProStat['L'] . "</td>";
									echo "<td>" . $GoalieProStat['OTL'] . "</td>";
									echo "<td>" . number_Format($GoalieProStat['PCT'], 3) . "</td>";
									echo "<td>" . number_Format($GoalieProStat['GAA'], 2) . "</td>";
									echo "<td>";
									if ($GoalieProStat <> Null) {
										echo Floor($GoalieProStat['SecondPlay'] / 60);
									};
									echo "</td>";
									echo "<td>" . $GoalieProStat['Pim'] . "</td>";
									echo "<td>" . $GoalieProStat['Shootout'] . "</td>";
									echo "<td>" . $GoalieProStat['GA'] . "</td>";
									echo "<td>" . $GoalieProStat['SA'] . "</td>";
									echo "<td>" . $GoalieProStat['SARebound'] . "</td>";
									echo "<td>" . $GoalieProStat['A'] . "</td>";
									echo "<td>" . $GoalieProStat['EmptyNetGoal'] . "</td>";
									echo "<td>" . number_Format($GoalieProStat['PenalityShotsPCT'], 3) . "</td>";
									echo "<td>" . $GoalieProStat['PenalityShotsShots'] . "</td>";
									echo "<td>" . $GoalieProStat['StartGoaler'] . "</td>";
									echo "<td>" . $GoalieProStat['BackupGoaler'] . "</td>";
									echo "<td>" . $GoalieProStat['Star1'] . "</td>";
									echo "<td>" . $GoalieProStat['Star2'] . "</td>";
									echo "<td>" . $GoalieProStat['Star3'] . "</td>";
									echo "</tr>\n";

									#Add Current Year in Career Stat
									$GoalieProCareerSumPlayoffOnly['SumOfGP'] =  $GoalieProCareerSumPlayoffOnly['SumOfGP'] + $GoalieProStat['GP'];
									$GoalieProCareerSumPlayoffOnly['SumOfSecondPlay'] =  $GoalieProCareerSumPlayoffOnly['SumOfSecondPlay'] + $GoalieProStat['SecondPlay'];
									$GoalieProCareerSumPlayoffOnly['SumOfW'] =  $GoalieProCareerSumPlayoffOnly['SumOfW'] + $GoalieProStat['W'];
									$GoalieProCareerSumPlayoffOnly['SumOfL'] =  $GoalieProCareerSumPlayoffOnly['SumOfL'] + $GoalieProStat['L'];
									$GoalieProCareerSumPlayoffOnly['SumOfOTL'] =  $GoalieProCareerSumPlayoffOnly['SumOfOTL'] + $GoalieProStat['OTL'];
									$GoalieProCareerSumPlayoffOnly['SumOfShootout'] =  $GoalieProCareerSumPlayoffOnly['SumOfShootout'] + $GoalieProStat['Shootout'];
									$GoalieProCareerSumPlayoffOnly['SumOfGA'] =  $GoalieProCareerSumPlayoffOnly['SumOfGA'] + $GoalieProStat['GA'];
									$GoalieProCareerSumPlayoffOnly['SumOfSA'] =  $GoalieProCareerSumPlayoffOnly['SumOfSA'] + $GoalieProStat['SA'];
									$GoalieProCareerSumPlayoffOnly['SumOfSARebound'] =  $GoalieProCareerSumPlayoffOnly['SumOfSARebound'] + $GoalieProStat['SARebound'];
									$GoalieProCareerSumPlayoffOnly['SumOfPim'] =  $GoalieProCareerSumPlayoffOnly['SumOfPim'] + $GoalieProStat['Pim'];
									$GoalieProCareerSumPlayoffOnly['SumOfA'] =  $GoalieProCareerSumPlayoffOnly['SumOfA'] + $GoalieProStat['A'];
									$GoalieProCareerSumPlayoffOnly['SumOfPenalityShotsShots'] =  $GoalieProCareerSumPlayoffOnly['SumOfPenalityShotsShots'] + $GoalieProStat['PenalityShotsShots'];
									$GoalieProCareerSumPlayoffOnly['SumOfPenalityShotsGoals'] =  $GoalieProCareerSumPlayoffOnly['SumOfPenalityShotsGoals'] + $GoalieProStat['PenalityShotsGoals'];
									$GoalieProCareerSumPlayoffOnly['SumOfStartGoaler'] =  $GoalieProCareerSumPlayoffOnly['SumOfStartGoaler'] + $GoalieProStat['StartGoaler'];
									$GoalieProCareerSumPlayoffOnly['SumOfBackupGoaler'] =  $GoalieProCareerSumPlayoffOnly['SumOfBackupGoaler'] + $GoalieProStat['BackupGoaler'];
									$GoalieProCareerSumPlayoffOnly['SumOfEmptyNetGoal'] =  $GoalieProCareerSumPlayoffOnly['SumOfEmptyNetGoal'] + $GoalieProStat['EmptyNetGoal'];
									$GoalieProCareerSumPlayoffOnly['SumOfStar1'] =  $GoalieProCareerSumPlayoffOnly['SumOfStar1'] + $GoalieProStat['Star1'];
									$GoalieProCareerSumPlayoffOnly['SumOfStar2'] =  $GoalieProCareerSumPlayoffOnly['SumOfStar2'] + $GoalieProStat['Star2'];
									$GoalieProCareerSumPlayoffOnly['SumOfStar3'] =  $GoalieProCareerSumPlayoffOnly['SumOfStar3'] + $GoalieProStat['Star3'];
								}

								if ($GoalieProCareerSumPlayoffOnly['SumOfGP'] > 0) {
									/* Show ProCareer Total for Playoff */
									echo "<tr class=\"static\"><td colspan=\"2\" class=\"staticTD\"><strong>" . $PlayersLang['Total'] . " " . $PlayersLang['Playoff'] . "</strong></td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfGP'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfW'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfL'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfOTL'] . "</td>";
									echo "<td>";
									if ($GoalieProCareerSumPlayoffOnly['SumOfSA'] > "0") {
										echo number_format(($GoalieProCareerSumPlayoffOnly['SumOfSA'] - $GoalieProCareerSumPlayoffOnly['SumOfGA']) / $GoalieProCareerSumPlayoffOnly['SumOfSA'], 3);
									} else {
										echo "0";
									}
									echo "</td>";
									echo "<td>";
									if ($GoalieProCareerSumPlayoffOnly['SumOfSecondPlay'] > "0") {
										echo number_format($GoalieProCareerSumPlayoffOnly['SumOfGA'] / ($GoalieProCareerSumPlayoffOnly['SumOfSecondPlay'] / 60) * 60, 2);
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">";
									if ($GoalieProCareerSumPlayoffOnly <> Null) {
										echo Floor($GoalieProCareerSumPlayoffOnly['SumOfSecondPlay'] / 60);
									};
									echo "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfPim'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfShootout'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfGA'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfSA'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfSARebound'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfA'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfEmptyNetGoal'] . "</td>";
									echo "<td>";
									if ($GoalieProCareerSumPlayoffOnly['SumOfPenalityShotsShots'] > "0") {
										echo number_format(($GoalieProCareerSumPlayoffOnly['SumOfPenalityShotsShots'] - $GoalieProCareerSumPlayoffOnly['SumOfPenalityShotsGoals']) / $GoalieProCareerSumPlayoffOnly['SumOfPenalityShotsShots'], 3);
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfPenalityShotsShots'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfStartGoaler'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfBackupGoaler'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfStar1'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfStar2'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieProCareerSumPlayoffOnly['SumOfStar3'] . "</td>";
									echo "</tr>\n";
								}
							} ?>
						</tbody>
					</table>
					<br />
				</div>

				<div class="tabmain" id="tabmain5">
					<br />
					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['CareerFarmStat']; ?></div><br />

					<div class="tablesorter_ColumnSelectorWrapper">
						<input id="tablesorter_colSelect3" type="checkbox" class="hidden">
						<label class="tablesorter_ColumnSelectorButton" for="tablesorter_colSelect3"><?php echo $TableSorterLang['ShoworHideColumn']; ?></label>
						<div id="tablesorter_ColumnSelector3" class="tablesorter_ColumnSelector"></div>
					</div>


					<table class="tablesorter STHSPHPFarmCareerStat_Table">
						<thead>
							<tr>
								<th data-priority="1" title="Team Name" class="STHSW140Min"><?php echo $PlayersLang['TeamName']; ?></th>
								<th data-priority="critical" title="Year" class="STHSW35"><?php echo $TeamLang['Year']; ?></th>
								<th data-priority="1" title="Games Played" class="STHSW25">GP</th>
								<th data-priority="1" title="Wins" class="STHSW25">W</th>
								<th data-priority="2" title="Losses" class="STHSW25">L</th>
								<th data-priority="2" title="Overtime Losses" class="STHSW25">OTL</th>
								<th data-priority="critical" title="Save Percentage" class="STHSW50">PCT</th>
								<th data-priority="critical" title="Goals Against Average" class="STHSW50">GAA</th>
								<th data-priority="3" title="Minutes Played" class="STHSW50">MP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Minutes">PIM</th>
								<th data-priority="4" title="Shutouts" class="STHSW25">SO</th>
								<th data-priority="3" title="Goals Against" class="STHSW25">GA</th>
								<th data-priority="3" title="Shots Against" class="STHSW45">SA</th>
								<th data-priority="5" title="Shots Against Rebound" class="STHSW45">SAR</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Assists">A</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Empty net Goals">EG</th>
								<th data-priority="4" title="Penalty Shots Save %" class="STHSW50">PS %</th>
								<th data-priority="5" title="Penalty Shots Against" class="STHSW25">PSA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of game goalies start as Start goalie">ST</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of game goalies start as Backup goalie">BG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #1 in a game">S1</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #2 in a game">S2</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #3 in a game">S3</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($GoalieInfo <> Null) {
								if ($GoalieFarmCareerSumSeasonOnly['SumOfGP'] > 0) {
									echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"23\"><strong>" . $PlayersLang['RegularSeason'] . "</strong></td></tr>\n";
								}
								if (empty($GoalieFarmCareerSeason) == false) {
									while ($Row = $GoalieFarmCareerSeason->fetchArray()) {
										/* Loop FarmPlayerCareerInfo */
										echo "<tr><td>" . $Row['TeamName'] . "</td>";
										echo "<td>" . $Row['Year'] . "</td>";
										echo "<td>" . $Row['GP'] . "</td>";
										echo "<td>" . $Row['W'] . "</td>";
										echo "<td>" . $Row['L'] . "</td>";
										echo "<td>" . $Row['OTL'] . "</td>";
										echo "<td>" . number_Format($Row['PCT'], 3) . "</td>";
										echo "<td>" . number_Format($Row['GAA'], 2) . "</td>";
										echo "<td>";
										if ($Row <> Null) {
											echo Floor($Row['SecondPlay'] / 60);
										};
										echo "</td>";
										echo "<td>" . $Row['Pim'] . "</td>";
										echo "<td>" . $Row['Shootout'] . "</td>";
										echo "<td>" . $Row['GA'] . "</td>";
										echo "<td>" . $Row['SA'] . "</td>";
										echo "<td>" . $Row['SARebound'] . "</td>";
										echo "<td>" . $Row['A'] . "</td>";
										echo "<td>" . $Row['EmptyNetGoal'] . "</td>";
										echo "<td>" . number_Format($Row['PenalityShotsPCT'], 3) . "</td>";
										echo "<td>" . $Row['PenalityShotsShots'] . "</td>";
										echo "<td>" . $Row['StartGoaler'] . "</td>";
										echo "<td>" . $Row['BackupGoaler'] . "</td>";
										echo "<td>" . $Row['Star1'] . "</td>";
										echo "<td>" . $Row['Star2'] . "</td>";
										echo "<td>" . $Row['Star3'] . "</td>";
										echo "</tr>\n";
									}
								}
								if ($GoalieFarmStat['GP'] > 0 and $LeagueGeneral['PreSeasonSchedule'] == "False" and $LeagueGeneral['PlayOffStarted'] == "False") {
									#Show Current Year
									echo "<tr><td>" . $GoalieInfo['ProTeamName'] . "</td>";
									echo "<td>" . $LeagueGeneral['LeagueYearOutput'] . "</td>";
									echo "<td>" . $GoalieFarmStat['GP'] . "</td>";
									echo "<td>" . $GoalieFarmStat['W'] . "</td>";
									echo "<td>" . $GoalieFarmStat['L'] . "</td>";
									echo "<td>" . $GoalieFarmStat['OTL'] . "</td>";
									echo "<td>" . number_Format($GoalieFarmStat['PCT'], 3) . "</td>";
									echo "<td>" . number_Format($GoalieFarmStat['GAA'], 2) . "</td>";
									echo "<td>";
									if ($GoalieFarmStat <> Null) {
										echo Floor($GoalieFarmStat['SecondPlay'] / 60);
									};
									echo "</td>";
									echo "<td>" . $GoalieFarmStat['Pim'] . "</td>";
									echo "<td>" . $GoalieFarmStat['Shootout'] . "</td>";
									echo "<td>" . $GoalieFarmStat['GA'] . "</td>";
									echo "<td>" . $GoalieFarmStat['SA'] . "</td>";
									echo "<td>" . $GoalieFarmStat['SARebound'] . "</td>";
									echo "<td>" . $GoalieFarmStat['A'] . "</td>";
									echo "<td>" . $GoalieFarmStat['EmptyNetGoal'] . "</td>";
									echo "<td>" . number_Format($GoalieFarmStat['PenalityShotsPCT'], 3) . "</td>";
									echo "<td>" . $GoalieFarmStat['PenalityShotsShots'] . "</td>";
									echo "<td>" . $GoalieFarmStat['StartGoaler'] . "</td>";
									echo "<td>" . $GoalieFarmStat['BackupGoaler'] . "</td>";
									echo "<td>" . $GoalieFarmStat['Star1'] . "</td>";
									echo "<td>" . $GoalieFarmStat['Star2'] . "</td>";
									echo "<td>" . $GoalieFarmStat['Star3'] . "</td>";
									echo "</tr>\n";

									#Add Current Year in Career Stat
									$GoalieFarmCareerSumSeasonOnly['SumOfGP'] =  $GoalieFarmCareerSumSeasonOnly['SumOfGP'] + $GoalieFarmStat['GP'];
									$GoalieFarmCareerSumSeasonOnly['SumOfSecondPlay'] =  $GoalieFarmCareerSumSeasonOnly['SumOfSecondPlay'] + $GoalieFarmStat['SecondPlay'];
									$GoalieFarmCareerSumSeasonOnly['SumOfW'] =  $GoalieFarmCareerSumSeasonOnly['SumOfW'] + $GoalieFarmStat['W'];
									$GoalieFarmCareerSumSeasonOnly['SumOfL'] =  $GoalieFarmCareerSumSeasonOnly['SumOfL'] + $GoalieFarmStat['L'];
									$GoalieFarmCareerSumSeasonOnly['SumOfOTL'] =  $GoalieFarmCareerSumSeasonOnly['SumOfOTL'] + $GoalieFarmStat['OTL'];
									$GoalieFarmCareerSumSeasonOnly['SumOfShootout'] =  $GoalieFarmCareerSumSeasonOnly['SumOfShootout'] + $GoalieFarmStat['Shootout'];
									$GoalieFarmCareerSumSeasonOnly['SumOfGA'] =  $GoalieFarmCareerSumSeasonOnly['SumOfGA'] + $GoalieFarmStat['GA'];
									$GoalieFarmCareerSumSeasonOnly['SumOfSA'] =  $GoalieFarmCareerSumSeasonOnly['SumOfSA'] + $GoalieFarmStat['SA'];
									$GoalieFarmCareerSumSeasonOnly['SumOfSARebound'] =  $GoalieFarmCareerSumSeasonOnly['SumOfSARebound'] + $GoalieFarmStat['SARebound'];
									$GoalieFarmCareerSumSeasonOnly['SumOfPim'] =  $GoalieFarmCareerSumSeasonOnly['SumOfPim'] + $GoalieFarmStat['Pim'];
									$GoalieFarmCareerSumSeasonOnly['SumOfA'] =  $GoalieFarmCareerSumSeasonOnly['SumOfA'] + $GoalieFarmStat['A'];
									$GoalieFarmCareerSumSeasonOnly['SumOfPenalityShotsShots'] =  $GoalieFarmCareerSumSeasonOnly['SumOfPenalityShotsShots'] + $GoalieFarmStat['PenalityShotsShots'];
									$GoalieFarmCareerSumSeasonOnly['SumOfPenalityShotsGoals'] =  $GoalieFarmCareerSumSeasonOnly['SumOfPenalityShotsGoals'] + $GoalieFarmStat['PenalityShotsGoals'];
									$GoalieFarmCareerSumSeasonOnly['SumOfStartGoaler'] =  $GoalieFarmCareerSumSeasonOnly['SumOfStartGoaler'] + $GoalieFarmStat['StartGoaler'];
									$GoalieFarmCareerSumSeasonOnly['SumOfBackupGoaler'] =  $GoalieFarmCareerSumSeasonOnly['SumOfBackupGoaler'] + $GoalieFarmStat['BackupGoaler'];
									$GoalieFarmCareerSumSeasonOnly['SumOfEmptyNetGoal'] =  $GoalieFarmCareerSumSeasonOnly['SumOfEmptyNetGoal'] + $GoalieFarmStat['EmptyNetGoal'];
									$GoalieFarmCareerSumSeasonOnly['SumOfStar1'] =  $GoalieFarmCareerSumSeasonOnly['SumOfStar1'] + $GoalieFarmStat['Star1'];
									$GoalieFarmCareerSumSeasonOnly['SumOfStar2'] =  $GoalieFarmCareerSumSeasonOnly['SumOfStar2'] + $GoalieFarmStat['Star2'];
									$GoalieFarmCareerSumSeasonOnly['SumOfStar3'] =  $GoalieFarmCareerSumSeasonOnly['SumOfStar3'] + $GoalieFarmStat['Star3'];
								}
								if ($GoalieFarmCareerSumSeasonOnly['SumOfGP'] > 0) {
									/* Show FarmCareer Total for Season */
									echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"2\"><strong>" . $PlayersLang['Total'] . " " . $PlayersLang['RegularSeason'] . "</strong></td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfGP'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfW'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfL'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfOTL'] . "</td>";
									echo "<td>";
									if ($GoalieFarmCareerSumSeasonOnly['SumOfSA'] > "0") {
										echo number_format(($GoalieFarmCareerSumSeasonOnly['SumOfSA'] - $GoalieFarmCareerSumSeasonOnly['SumOfGA']) / $GoalieFarmCareerSumSeasonOnly['SumOfSA'], 3);
									} else {
										echo "0";
									}
									echo "</td>";
									echo "<td>";
									if ($GoalieFarmCareerSumSeasonOnly['SumOfSecondPlay'] > "0") {
										echo number_format($GoalieFarmCareerSumSeasonOnly['SumOfGA'] / ($GoalieFarmCareerSumSeasonOnly['SumOfSecondPlay'] / 60) * 60, 2);
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">";
									if ($GoalieFarmCareerSumSeasonOnly <> Null) {
										echo Floor($GoalieFarmCareerSumSeasonOnly['SumOfSecondPlay'] / 60);
									};
									echo "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfPim'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfShootout'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfGA'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfSA'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfSARebound'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfA'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfEmptyNetGoal'] . "</td>";
									echo "<td>";
									if ($GoalieFarmCareerSumSeasonOnly['SumOfPenalityShotsShots'] > "0") {
										echo number_format(($GoalieFarmCareerSumSeasonOnly['SumOfPenalityShotsShots'] - $GoalieFarmCareerSumSeasonOnly['SumOfPenalityShotsGoals']) / $GoalieFarmCareerSumSeasonOnly['SumOfPenalityShotsShots'], 3);
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfPenalityShotsShots'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfStartGoaler'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfBackupGoaler'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfStar1'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfStar2'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumSeasonOnly['SumOfStar3'] . "</td>";
									echo "</tr>\n";
								}

								if ($GoalieFarmCareerSumPlayoffOnly['SumOfGP'] > 0) {
									echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"23\"><strong>" . $PlayersLang['Playoff'] . "</strong></td></tr>\n";
								}
								if (empty($GoalieFarmCareerPlayoff) == false) {
									while ($Row = $GoalieFarmCareerPlayoff->fetchArray()) {
										/* Loop FarmPlayerCareerPlayofff */
										echo "<tr><td>" . $Row['TeamName'] . "</td>";
										echo "<td>" . $Row['Year'] . "</td>";
										echo "<td>" . $Row['GP'] . "</td>";
										echo "<td>" . $Row['W'] . "</td>";
										echo "<td>" . $Row['L'] . "</td>";
										echo "<td>" . $Row['OTL'] . "</td>";
										echo "<td>" . number_Format($Row['PCT'], 3) . "</td>";
										echo "<td>" . number_Format($Row['GAA'], 2) . "</td>";
										echo "<td>";
										if ($Row <> Null) {
											echo Floor($Row['SecondPlay'] / 60);
										};
										echo "</td>";
										echo "<td>" . $Row['Pim'] . "</td>";
										echo "<td>" . $Row['Shootout'] . "</td>";
										echo "<td>" . $Row['GA'] . "</td>";
										echo "<td>" . $Row['SA'] . "</td>";
										echo "<td>" . $Row['SARebound'] . "</td>";
										echo "<td>" . $Row['A'] . "</td>";
										echo "<td>" . $Row['EmptyNetGoal'] . "</td>";
										echo "<td>" . number_Format($Row['PenalityShotsPCT'], 3) . "</td>";
										echo "<td>" . $Row['PenalityShotsShots'] . "</td>";
										echo "<td>" . $Row['StartGoaler'] . "</td>";
										echo "<td>" . $Row['BackupGoaler'] . "</td>";
										echo "<td>" . $Row['Star1'] . "</td>";
										echo "<td>" . $Row['Star2'] . "</td>";
										echo "<td>" . $Row['Star3'] . "</td>";
										echo "</tr>\n";
									}
								}
								if ($GoalieFarmStat['GP'] > 0 and $LeagueGeneral['PreSeasonSchedule'] == "False" and $LeagueGeneral['PlayOffStarted'] == "True") {
									#Show Current Year
									echo "<tr><td>" . $GoalieInfo['ProTeamName'] . "</td>";
									echo "<td>" . $LeagueGeneral['LeagueYearOutput'] . "</td>";
									echo "<td>" . $GoalieFarmStat['GP'] . "</td>";
									echo "<td>" . $GoalieFarmStat['W'] . "</td>";
									echo "<td>" . $GoalieFarmStat['L'] . "</td>";
									echo "<td>" . $GoalieFarmStat['OTL'] . "</td>";
									echo "<td>" . number_Format($GoalieFarmStat['PCT'], 3) . "</td>";
									echo "<td>" . number_Format($GoalieFarmStat['GAA'], 2) . "</td>";
									echo "<td>";
									if ($GoalieFarmStat <> Null) {
										echo Floor($GoalieFarmStat['SecondPlay'] / 60);
									};
									echo "</td>";
									echo "<td>" . $GoalieFarmStat['Pim'] . "</td>";
									echo "<td>" . $GoalieFarmStat['Shootout'] . "</td>";
									echo "<td>" . $GoalieFarmStat['GA'] . "</td>";
									echo "<td>" . $GoalieFarmStat['SA'] . "</td>";
									echo "<td>" . $GoalieFarmStat['SARebound'] . "</td>";
									echo "<td>" . $GoalieFarmStat['A'] . "</td>";
									echo "<td>" . $GoalieFarmStat['EmptyNetGoal'] . "</td>";
									echo "<td>" . number_Format($GoalieFarmStat['PenalityShotsPCT'], 3) . "</td>";
									echo "<td>" . $GoalieFarmStat['PenalityShotsShots'] . "</td>";
									echo "<td>" . $GoalieFarmStat['StartGoaler'] . "</td>";
									echo "<td>" . $GoalieFarmStat['BackupGoaler'] . "</td>";
									echo "<td>" . $GoalieFarmStat['Star1'] . "</td>";
									echo "<td>" . $GoalieFarmStat['Star2'] . "</td>";
									echo "<td>" . $GoalieFarmStat['Star3'] . "</td>";
									echo "</tr>\n";

									#Add Current Year in Career Stat
									$GoalieFarmCareerSumPlayoffOnly['SumOfGP'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfGP'] + $GoalieFarmStat['GP'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfSecondPlay'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfSecondPlay'] + $GoalieFarmStat['SecondPlay'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfW'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfW'] + $GoalieFarmStat['W'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfL'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfL'] + $GoalieFarmStat['L'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfOTL'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfOTL'] + $GoalieFarmStat['OTL'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfShootout'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfShootout'] + $GoalieFarmStat['Shootout'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfGA'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfGA'] + $GoalieFarmStat['GA'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfSA'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfSA'] + $GoalieFarmStat['SA'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfSARebound'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfSARebound'] + $GoalieFarmStat['SARebound'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfPim'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfPim'] + $GoalieFarmStat['Pim'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfA'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfA'] + $GoalieFarmStat['A'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfPenalityShotsShots'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfPenalityShotsShots'] + $GoalieFarmStat['PenalityShotsShots'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfPenalityShotsGoals'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfPenalityShotsGoals'] + $GoalieFarmStat['PenalityShotsGoals'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfStartGoaler'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfStartGoaler'] + $GoalieFarmStat['StartGoaler'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfBackupGoaler'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfBackupGoaler'] + $GoalieFarmStat['BackupGoaler'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfEmptyNetGoal'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfEmptyNetGoal'] + $GoalieFarmStat['EmptyNetGoal'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfStar1'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfStar1'] + $GoalieFarmStat['Star1'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfStar2'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfStar2'] + $GoalieFarmStat['Star2'];
									$GoalieFarmCareerSumPlayoffOnly['SumOfStar3'] =  $GoalieFarmCareerSumPlayoffOnly['SumOfStar3'] + $GoalieFarmStat['Star3'];
								}

								if ($GoalieFarmCareerSumPlayoffOnly['SumOfGP'] > 0) {
									/* Show FarmCareer Total for Playoff */
									echo "<tr class=\"static\"><td colspan=\"2\" class=\"staticTD\"><strong>" . $PlayersLang['Total'] . " " . $PlayersLang['Playoff'] . "</strong></td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfGP'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfW'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfL'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfOTL'] . "</td>";
									echo "<td>";
									if ($GoalieFarmCareerSumPlayoffOnly['SumOfSA'] > "0") {
										echo number_format(($GoalieFarmCareerSumPlayoffOnly['SumOfSA'] - $GoalieFarmCareerSumPlayoffOnly['SumOfGA']) / $GoalieFarmCareerSumPlayoffOnly['SumOfSA'], 3);
									} else {
										echo "0";
									}
									echo "</td>";
									echo "<td>";
									if ($GoalieFarmCareerSumPlayoffOnly['SumOfSecondPlay'] > "0") {
										echo number_format($GoalieFarmCareerSumPlayoffOnly['SumOfGA'] / ($GoalieFarmCareerSumPlayoffOnly['SumOfSecondPlay'] / 60) * 60, 2);
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">";
									if ($GoalieFarmCareerSumPlayoffOnly <> Null) {
										echo Floor($GoalieFarmCareerSumPlayoffOnly['SumOfSecondPlay'] / 60);
									};
									echo "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfPim'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfShootout'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfGA'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfSA'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfSARebound'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfA'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfEmptyNetGoal'] . "</td>";
									echo "<td>";
									if ($GoalieFarmCareerSumPlayoffOnly['SumOfPenalityShotsShots'] > "0") {
										echo number_format(($GoalieFarmCareerSumPlayoffOnly['SumOfPenalityShotsShots'] - $GoalieFarmCareerSumPlayoffOnly['SumOfPenalityShotsGoals']) / $GoalieFarmCareerSumPlayoffOnly['SumOfPenalityShotsShots'], 3);
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfPenalityShotsShots'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfStartGoaler'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfBackupGoaler'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfStar1'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfStar2'] . "</td>";
									echo "<td class=\"staticTD\">" . $GoalieFarmCareerSumPlayoffOnly['SumOfStar3'] . "</td>";
									echo "</tr>\n";
								}
							} ?>
						</tbody>
					</table>
					<br />
				</div>

				<div class="tabmain" id="tabmain9">
					<table>
						<td>
							<form action="" method="post">
								<td><button type="submit" name="10%">10%</button></td>
								<td><button type="submit" name="20%">20%</button></td>
								<td><button type="submit" name="25%">25%</button></td>
								<td><button type="submit" name="30%">30%</button></td>
								<td><button type="submit" name="40%">40%</button></td>
								<td><button type="submit" name="50%">50%</button></td>
							</form>
						</td>
					</table>
				</div>
				
			</div>


		</div>
	</div>

	<?php
	if ($GoalieCareerStatFound == true) {
		echo "<script type=\"text/javascript\">\$(function() {\$(\".STHSPHPProCareerStat_Table\").tablesorter( {widgets: ['staticRow', 'columnSelector'], widgetOptions : {columnSelector_container : \$('#tablesorter_ColumnSelector2'), columnSelector_layout : '<label><input type=\"checkbox\">{name}</label>', columnSelector_name  : 'title', columnSelector_mediaquery: true, columnSelector_mediaqueryName: 'Automatic', columnSelector_mediaqueryState: true, columnSelector_mediaqueryHidden: true, columnSelector_breakpoints : [ '20em', '40em', '60em', '80em', '90em', '95em' ],}});});</script>";
		echo "<script type=\"text/javascript\">\$(function() {\$(\".STHSPHPFarmCareerStat_Table\").tablesorter({widgets: ['staticRow', 'columnSelector'], widgetOptions : {columnSelector_container : \$('#tablesorter_ColumnSelector3'), columnSelector_layout : '<label><input type=\"checkbox\">{name}</label>', columnSelector_name  : 'title', columnSelector_mediaquery: true, columnSelector_mediaqueryName: 'Automatic', columnSelector_mediaqueryState: true, columnSelector_mediaqueryHidden: true, columnSelector_breakpoints : [ '20em', '40em', '60em', '80em', '90em', '95em' ],}});});</script>";
	}
	if ($GoalieProStatMultipleTeamFound == TRUE) {
		echo "<script type=\"text/javascript\">\$(function() {\$(\".STHSPHPProGoalieStatPerTeam_Table\").tablesorter( {widgets: ['columnSelector', 'stickyHeaders', 'filter'], widgetOptions : {columnSelector_container : \$('#tablesorter_ColumnSelector4'), columnSelector_layout : '<label><input type=\"checkbox\">{name}</label>', columnSelector_name  : 'title', columnSelector_mediaquery: true, columnSelector_mediaqueryName: 'Automatic', columnSelector_mediaqueryState: true, columnSelector_mediaqueryHidden: true, [ '20em', '40em', '60em', '80em', '90em', '95em' ],filter_columnFilters: true,filter_placeholder: { search : '" . $TableSorterLang['Search'] . "' },filter_searchDelay : 1000,filter_reset: '.tablesorter_Reset'}});});</script>";
	}
	if ($GoalieFarmStatMultipleTeamFound == TRUE) {
		echo "<script type=\"text/javascript\">\$(function() {\$(\".STHSPHPFarmGoalieStatPerTeam_Table\").tablesorter( {widgets: ['columnSelector', 'stickyHeaders', 'filter'], widgetOptions : {columnSelector_container : \$('#tablesorter_ColumnSelector5'), columnSelector_layout : '<label><input type=\"checkbox\">{name}</label>', columnSelector_name  : 'title', columnSelector_mediaquery: true, columnSelector_mediaqueryName: 'Automatic', columnSelector_mediaqueryState: true, columnSelector_mediaqueryHidden: true, columnSelector_breakpoints : [ '20em', '40em', '60em', '80em', '90em', '95em' ],filter_columnFilters: true,filter_placeholder: { search : '" . $TableSorterLang['Search'] . "' },filter_searchDelay : 1000,filter_reset: '.tablesorter_Reset'}});});</script>";
	}

	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if(isset($_POST['10%'])){
			func(0.10, salaryRemmaining: $GoalieInfo['SalaryRemaining']);
		}
		if(isset($_POST['20%'])){
			func(0.20, $GoalieInfo['SalaryRemaining']);
		}
		if(isset($_POST['25%'])){
			func(0.25, $GoalieInfo['SalaryRemaining']);
		}
		if(isset($_POST['30%'])){
			func(0.30, $GoalieInfo['SalaryRemaining']);
		}
		if(isset($_POST['40%'])){
			func(0.40, $GoalieInfo['SalaryRemaining']);
		}
		if(isset($_POST['50%'])){
			func(0.50, $GoalieInfo['SalaryRemaining']);
		}
	}
	function func($percent, $salaryRemmaining)
	{
		$value = $salaryRemmaining*$percent;
		echo "<script>alert('Le retenue salariale sera de : $value$');</script>";
	}
	
	function getRankPlayerStat($DatabaseFile, $GoalieInfo, $Rating){
		$db = new SQLite3(filename: $DatabaseFile);
		$QueryForPlayerRatingRank = "SELECT ROW_NUMBER() OVER(ORDER BY (GoalerInfo." . $Rating. ") DESC, GoalerInfo.Overall DESC) AS PlayerRatingRank, GoalerInfo.Number, GoalerInfo." . $Rating . ", GoalerInfo.Overall FROM GoalerInfo WHERE GoalerInfo.Status1 = 3";
		$PlayerRatingRank = $db->query($QueryForPlayerRatingRank);
		if (empty($PlayerRatingRank) == false and $GoalieInfo['Status1'] == 3)
		{
			while ($Row = $PlayerRatingRank ->fetchArray()) {
				if($GoalieInfo['Number'] == $Row['Number']){
					if($Rating == 'PO'){
						return $GoalieInfo[$Rating];
					}
					else{
						return $GoalieInfo[$Rating] . "<br>(" . $Row['PlayerRatingRank'] . "e)";
					}
				}
			}
		}else{
			return $GoalieInfo[$Rating];
		}
	}
	?>

	<?php include "Footer.php"; ?>