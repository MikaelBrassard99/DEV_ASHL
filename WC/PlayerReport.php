<!DOCTYPE html>
<?php include "Header.php"; ?>
<?php
/*
Syntax to call this webpage should be PlayersStat.php?Player=2 where only the number change and it's based on the UniqueID of players.
*/
$Player = (int)0;
$Query = (string)"";
$PlayerName = $PlayersLang['IncorrectPlayer'];
$LeagueName = (string)"";
$CareerLeaderSubPrintOut = (int)0;
$PlayerCareerStatFound = (bool)false;
$PlayerProCareerSeason = Null;
$PlayerProCareerPlayoff = Null;
$PlayerProCareerSumSeasonOnly = Null;
$PlayerProCareerSumPlayoffOnly = Null;
$PlayerFarmCareerSeason = Null;
$PlayerFarmCareerPlayoff = Null;
$PlayerFarmCareerSumSeasonOnly = Null;
$PlayerFarmCareerSumPlayoffOnly = Null;
$PlayerProStatMultipleTeamFound = (bool)FALSE;
$PlayerFarmStatMultipleTeamFound = (bool)FALSE;

if (isset($_GET['Player'])) {
	$Player = filter_var($_GET['Player'], FILTER_SANITIZE_NUMBER_INT);
}

if (file_exists($DatabaseFile) == false) {
	$Player = 0;
	$PlayerName = $DatabaseNotFound;
	$LeagueOutputOption = Null;
	$LeagueGeneral = Null;
} else {
	$db = new SQLite3($DatabaseFile);
	$Query = "Select Name, OutputName, LeagueYearOutput, PreSeasonSchedule, PlayOffStarted, LeagueYear from LeagueGeneral";
	$LeagueGeneral = $db->querySingle($Query, true);
	$Query = "Select PlayersMugShotBaseURL, PlayersMugShotFileExtension,OutputSalariesRemaining,OutputSalariesAverageTotal,OutputSalariesAverageRemaining from LeagueOutputOption";
	$LeagueOutputOption = $db->querySingle($Query, true);
}

if ($Player == 0) {
	$PlayerInfo = Null;
	$PlayerProStat = Null;
	$PlayerFarmStat = Null;
	echo "<style>.STHSPHPPlayerStat_Main {display:none;}</style>";
} else {
	$Query = "SELECT count(*) AS count FROM PlayerInfo WHERE Number = " . $Player;
	$Result = $db->querySingle($Query, true);
	if ($Result['count'] == 1) {
		$Query = "SELECT count(*) AS count FROM PlayerProStatMultipleTeam WHERE Number = " . $Player;
		$Result = $db->querySingle($Query, true);
		if ($Result['count'] > 0) {
			$PlayerProStatMultipleTeamFound = TRUE;
		}

		$Query = "SELECT count(*) AS count FROM PlayerFarmStatMultipleTeam WHERE Number = " . $Player;
		$Result = $db->querySingle($Query, true);
		if ($Result['count'] > 0) {
			$PlayerFarmStatMultipleTeamFound = TRUE;
		}

		if ($PlayerInfo['Team'] > 0) {
			$Query = "SELECT MainTable.* FROM (SELECT PlayerInfo.Number, PlayerInfo.Name, PlayerInfo.Team, PlayerInfo.TeamName, PlayerInfo.URLLink, PlayerInfo.NHLID, 'False' AS PosG FROM PlayerInfo WHERE Team = " . $PlayerInfo['Team'] . " UNION ALL SELECT GoalerInfo.Number, GoalerInfo.Name, GoalerInfo.Team, GoalerInfo.TeamName, GoalerInfo.URLLink, GoalerInfo.NHLID, 'True' AS PosG FROM GoalerInfo WHERE Team = " . $PlayerInfo['Team'] . ") AS MainTable ORDER BY Name";
			$TeamPlayers = $db->query($Query);
		}

		$LeagueName = $LeagueGeneral['Name'];
		$PlayerName = $PlayerInfo['Name'];
		if (file_exists($CareerStatDatabaseFile) == true) {
			$CareerStatdb = new SQLite3($CareerStatDatabaseFile);

			$Query = "SELECT PlayerProStatCareer.*, ROUND((CAST(PlayerProStatCareer.G AS REAL) / (PlayerProStatCareer.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerProStatCareer.SecondPlay AS REAL) / 60 / (PlayerProStatCareer.GP)),2) AS AMG,ROUND((CAST(PlayerProStatCareer.FaceOffWon AS REAL) / (PlayerProStatCareer.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerProStatCareer.P AS REAL) / (PlayerProStatCareer.SecondPlay) * 60 * 20),2) AS P20 FROM PlayerProStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $PlayerName) . "') ORDER BY PlayerProStatCareer.Year";
			$PlayerProCareerSeason = $CareerStatdb->query($Query);
			$Query = "SELECT PlayerProStatCareer.*, ROUND((CAST(PlayerProStatCareer.G AS REAL) / (PlayerProStatCareer.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerProStatCareer.SecondPlay AS REAL) / 60 / (PlayerProStatCareer.GP)),2) AS AMG,ROUND((CAST(PlayerProStatCareer.FaceOffWon AS REAL) / (PlayerProStatCareer.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerProStatCareer.P AS REAL) / (PlayerProStatCareer.SecondPlay) * 60 * 20),2) AS P20 FROM PlayerProStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $PlayerName) . "') ORDER BY PlayerProStatCareer.Year";
			$PlayerProCareerPlayoff = $CareerStatdb->query($Query);
			$Query = "SELECT Sum(PlayerProStatCareer.GP) AS SumOfGP, Sum(PlayerProStatCareer.Shots) AS SumOfShots, Sum(PlayerProStatCareer.G) AS SumOfG, Sum(PlayerProStatCareer.A) AS SumOfA, Sum(PlayerProStatCareer.P) AS SumOfP, Sum(PlayerProStatCareer.PlusMinus) AS SumOfPlusMinus, Sum(PlayerProStatCareer.Pim) AS SumOfPim, Sum(PlayerProStatCareer.Pim5) AS SumOfPim5, Sum(PlayerProStatCareer.ShotsBlock) AS SumOfShotsBlock, Sum(PlayerProStatCareer.OwnShotsBlock) AS SumOfOwnShotsBlock, Sum(PlayerProStatCareer.OwnShotsMissGoal) AS SumOfOwnShotsMissGoal, Sum(PlayerProStatCareer.Hits) AS SumOfHits, Sum(PlayerProStatCareer.HitsTook) AS SumOfHitsTook, Sum(PlayerProStatCareer.GW) AS SumOfGW, Sum(PlayerProStatCareer.GT) AS SumOfGT, Sum(PlayerProStatCareer.FaceOffWon) AS SumOfFaceOffWon, Sum(PlayerProStatCareer.FaceOffTotal) AS SumOfFaceOffTotal, Sum(PlayerProStatCareer.PenalityShotsScore) AS SumOfPenalityShotsScore, Sum(PlayerProStatCareer.PenalityShotsTotal) AS SumOfPenalityShotsTotal, Sum(PlayerProStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(PlayerProStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(PlayerProStatCareer.HatTrick) AS SumOfHatTrick, Sum(PlayerProStatCareer.PPG) AS SumOfPPG, Sum(PlayerProStatCareer.PPA) AS SumOfPPA, Sum(PlayerProStatCareer.PPP) AS SumOfPPP, Sum(PlayerProStatCareer.PPShots) AS SumOfPPShots, Sum(PlayerProStatCareer.PPSecondPlay) AS SumOfPPSecondPlay, Sum(PlayerProStatCareer.PKG) AS SumOfPKG, Sum(PlayerProStatCareer.PKA) AS SumOfPKA, Sum(PlayerProStatCareer.PKP) AS SumOfPKP, Sum(PlayerProStatCareer.PKShots) AS SumOfPKShots, Sum(PlayerProStatCareer.PKSecondPlay) AS SumOfPKSecondPlay, Sum(PlayerProStatCareer.GiveAway) AS SumOfGiveAway, Sum(PlayerProStatCareer.TakeAway) AS SumOfTakeAway, Sum(PlayerProStatCareer.PuckPossesionTime) AS SumOfPuckPossesionTime, Sum(PlayerProStatCareer.FightW) AS SumOfFightW, Sum(PlayerProStatCareer.FightL) AS SumOfFightL, Sum(PlayerProStatCareer.FightT) AS SumOfFightT, Sum(PlayerProStatCareer.Star1) AS SumOfStar1, Sum(PlayerProStatCareer.Star2) AS SumOfStar2, Sum(PlayerProStatCareer.Star3) AS SumOfStar3 FROM PlayerProStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $PlayerName) . "')";
			$PlayerProCareerSumSeasonOnly = $CareerStatdb->querySingle($Query, true);
			$Query = "SELECT Sum(PlayerProStatCareer.GP) AS SumOfGP, Sum(PlayerProStatCareer.Shots) AS SumOfShots, Sum(PlayerProStatCareer.G) AS SumOfG, Sum(PlayerProStatCareer.A) AS SumOfA, Sum(PlayerProStatCareer.P) AS SumOfP, Sum(PlayerProStatCareer.PlusMinus) AS SumOfPlusMinus, Sum(PlayerProStatCareer.Pim) AS SumOfPim, Sum(PlayerProStatCareer.Pim5) AS SumOfPim5, Sum(PlayerProStatCareer.ShotsBlock) AS SumOfShotsBlock, Sum(PlayerProStatCareer.OwnShotsBlock) AS SumOfOwnShotsBlock, Sum(PlayerProStatCareer.OwnShotsMissGoal) AS SumOfOwnShotsMissGoal, Sum(PlayerProStatCareer.Hits) AS SumOfHits, Sum(PlayerProStatCareer.HitsTook) AS SumOfHitsTook, Sum(PlayerProStatCareer.GW) AS SumOfGW, Sum(PlayerProStatCareer.GT) AS SumOfGT, Sum(PlayerProStatCareer.FaceOffWon) AS SumOfFaceOffWon, Sum(PlayerProStatCareer.FaceOffTotal) AS SumOfFaceOffTotal, Sum(PlayerProStatCareer.PenalityShotsScore) AS SumOfPenalityShotsScore, Sum(PlayerProStatCareer.PenalityShotsTotal) AS SumOfPenalityShotsTotal, Sum(PlayerProStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(PlayerProStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(PlayerProStatCareer.HatTrick) AS SumOfHatTrick, Sum(PlayerProStatCareer.PPG) AS SumOfPPG, Sum(PlayerProStatCareer.PPA) AS SumOfPPA, Sum(PlayerProStatCareer.PPP) AS SumOfPPP, Sum(PlayerProStatCareer.PPShots) AS SumOfPPShots, Sum(PlayerProStatCareer.PPSecondPlay) AS SumOfPPSecondPlay, Sum(PlayerProStatCareer.PKG) AS SumOfPKG, Sum(PlayerProStatCareer.PKA) AS SumOfPKA, Sum(PlayerProStatCareer.PKP) AS SumOfPKP, Sum(PlayerProStatCareer.PKShots) AS SumOfPKShots, Sum(PlayerProStatCareer.PKSecondPlay) AS SumOfPKSecondPlay, Sum(PlayerProStatCareer.GiveAway) AS SumOfGiveAway, Sum(PlayerProStatCareer.TakeAway) AS SumOfTakeAway, Sum(PlayerProStatCareer.PuckPossesionTime) AS SumOfPuckPossesionTime, Sum(PlayerProStatCareer.FightW) AS SumOfFightW, Sum(PlayerProStatCareer.FightL) AS SumOfFightL, Sum(PlayerProStatCareer.FightT) AS SumOfFightT, Sum(PlayerProStatCareer.Star1) AS SumOfStar1, Sum(PlayerProStatCareer.Star2) AS SumOfStar2, Sum(PlayerProStatCareer.Star3) AS SumOfStar3 FROM PlayerProStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $PlayerName) . "')";
			$PlayerProCareerSumPlayoffOnly = $CareerStatdb->querySingle($Query, true);

			$Query = "SELECT PlayerFarmStatCareer.*, ROUND((CAST(PlayerFarmStatCareer.G AS REAL) / (PlayerFarmStatCareer.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerFarmStatCareer.SecondPlay AS REAL) / 60 / (PlayerFarmStatCareer.GP)),2) AS AMG,ROUND((CAST(PlayerFarmStatCareer.FaceOffWon AS REAL) / (PlayerFarmStatCareer.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerFarmStatCareer.P AS REAL) / (PlayerFarmStatCareer.SecondPlay) * 60 * 20),2) AS P20 FROM PlayerFarmStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $PlayerName) . "') ORDER BY PlayerFarmStatCareer.Year";
			$PlayerFarmCareerSeason = $CareerStatdb->query($Query);
			$Query = "SELECT PlayerFarmStatCareer.*, ROUND((CAST(PlayerFarmStatCareer.G AS REAL) / (PlayerFarmStatCareer.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerFarmStatCareer.SecondPlay AS REAL) / 60 / (PlayerFarmStatCareer.GP)),2) AS AMG,ROUND((CAST(PlayerFarmStatCareer.FaceOffWon AS REAL) / (PlayerFarmStatCareer.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerFarmStatCareer.P AS REAL) / (PlayerFarmStatCareer.SecondPlay) * 60 * 20),2) AS P20 FROM PlayerFarmStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $PlayerName) . "') ORDER BY PlayerFarmStatCareer.Year";
			$PlayerFarmCareerPlayoff = $CareerStatdb->query($Query);
			$Query = "SELECT Sum(PlayerFarmStatCareer.GP) AS SumOfGP, Sum(PlayerFarmStatCareer.Shots) AS SumOfShots, Sum(PlayerFarmStatCareer.G) AS SumOfG, Sum(PlayerFarmStatCareer.A) AS SumOfA, Sum(PlayerFarmStatCareer.P) AS SumOfP, Sum(PlayerFarmStatCareer.PlusMinus) AS SumOfPlusMinus, Sum(PlayerFarmStatCareer.Pim) AS SumOfPim, Sum(PlayerFarmStatCareer.Pim5) AS SumOfPim5, Sum(PlayerFarmStatCareer.ShotsBlock) AS SumOfShotsBlock, Sum(PlayerFarmStatCareer.OwnShotsBlock) AS SumOfOwnShotsBlock, Sum(PlayerFarmStatCareer.OwnShotsMissGoal) AS SumOfOwnShotsMissGoal, Sum(PlayerFarmStatCareer.Hits) AS SumOfHits, Sum(PlayerFarmStatCareer.HitsTook) AS SumOfHitsTook, Sum(PlayerFarmStatCareer.GW) AS SumOfGW, Sum(PlayerFarmStatCareer.GT) AS SumOfGT, Sum(PlayerFarmStatCareer.FaceOffWon) AS SumOfFaceOffWon, Sum(PlayerFarmStatCareer.FaceOffTotal) AS SumOfFaceOffTotal, Sum(PlayerFarmStatCareer.PenalityShotsScore) AS SumOfPenalityShotsScore, Sum(PlayerFarmStatCareer.PenalityShotsTotal) AS SumOfPenalityShotsTotal, Sum(PlayerFarmStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(PlayerFarmStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(PlayerFarmStatCareer.HatTrick) AS SumOfHatTrick, Sum(PlayerFarmStatCareer.PPG) AS SumOfPPG, Sum(PlayerFarmStatCareer.PPA) AS SumOfPPA, Sum(PlayerFarmStatCareer.PPP) AS SumOfPPP, Sum(PlayerFarmStatCareer.PPShots) AS SumOfPPShots, Sum(PlayerFarmStatCareer.PPSecondPlay) AS SumOfPPSecondPlay, Sum(PlayerFarmStatCareer.PKG) AS SumOfPKG, Sum(PlayerFarmStatCareer.PKA) AS SumOfPKA, Sum(PlayerFarmStatCareer.PKP) AS SumOfPKP, Sum(PlayerFarmStatCareer.PKShots) AS SumOfPKShots, Sum(PlayerFarmStatCareer.PKSecondPlay) AS SumOfPKSecondPlay, Sum(PlayerFarmStatCareer.GiveAway) AS SumOfGiveAway, Sum(PlayerFarmStatCareer.TakeAway) AS SumOfTakeAway, Sum(PlayerFarmStatCareer.PuckPossesionTime) AS SumOfPuckPossesionTime, Sum(PlayerFarmStatCareer.FightW) AS SumOfFightW, Sum(PlayerFarmStatCareer.FightL) AS SumOfFightL, Sum(PlayerFarmStatCareer.FightT) AS SumOfFightT, Sum(PlayerFarmStatCareer.Star1) AS SumOfStar1, Sum(PlayerFarmStatCareer.Star2) AS SumOfStar2, Sum(PlayerFarmStatCareer.Star3) AS SumOfStar3 FROM PlayerFarmStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $PlayerName) . "')";
			$PlayerFarmCareerSumSeasonOnly = $CareerStatdb->querySingle($Query, true);
			$Query = "SELECT Sum(PlayerFarmStatCareer.GP) AS SumOfGP, Sum(PlayerFarmStatCareer.Shots) AS SumOfShots, Sum(PlayerFarmStatCareer.G) AS SumOfG, Sum(PlayerFarmStatCareer.A) AS SumOfA, Sum(PlayerFarmStatCareer.P) AS SumOfP, Sum(PlayerFarmStatCareer.PlusMinus) AS SumOfPlusMinus, Sum(PlayerFarmStatCareer.Pim) AS SumOfPim, Sum(PlayerFarmStatCareer.Pim5) AS SumOfPim5, Sum(PlayerFarmStatCareer.ShotsBlock) AS SumOfShotsBlock, Sum(PlayerFarmStatCareer.OwnShotsBlock) AS SumOfOwnShotsBlock, Sum(PlayerFarmStatCareer.OwnShotsMissGoal) AS SumOfOwnShotsMissGoal, Sum(PlayerFarmStatCareer.Hits) AS SumOfHits, Sum(PlayerFarmStatCareer.HitsTook) AS SumOfHitsTook, Sum(PlayerFarmStatCareer.GW) AS SumOfGW, Sum(PlayerFarmStatCareer.GT) AS SumOfGT, Sum(PlayerFarmStatCareer.FaceOffWon) AS SumOfFaceOffWon, Sum(PlayerFarmStatCareer.FaceOffTotal) AS SumOfFaceOffTotal, Sum(PlayerFarmStatCareer.PenalityShotsScore) AS SumOfPenalityShotsScore, Sum(PlayerFarmStatCareer.PenalityShotsTotal) AS SumOfPenalityShotsTotal, Sum(PlayerFarmStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(PlayerFarmStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(PlayerFarmStatCareer.HatTrick) AS SumOfHatTrick, Sum(PlayerFarmStatCareer.PPG) AS SumOfPPG, Sum(PlayerFarmStatCareer.PPA) AS SumOfPPA, Sum(PlayerFarmStatCareer.PPP) AS SumOfPPP, Sum(PlayerFarmStatCareer.PPShots) AS SumOfPPShots, Sum(PlayerFarmStatCareer.PPSecondPlay) AS SumOfPPSecondPlay, Sum(PlayerFarmStatCareer.PKG) AS SumOfPKG, Sum(PlayerFarmStatCareer.PKA) AS SumOfPKA, Sum(PlayerFarmStatCareer.PKP) AS SumOfPKP, Sum(PlayerFarmStatCareer.PKShots) AS SumOfPKShots, Sum(PlayerFarmStatCareer.PKSecondPlay) AS SumOfPKSecondPlay, Sum(PlayerFarmStatCareer.GiveAway) AS SumOfGiveAway, Sum(PlayerFarmStatCareer.TakeAway) AS SumOfTakeAway, Sum(PlayerFarmStatCareer.PuckPossesionTime) AS SumOfPuckPossesionTime, Sum(PlayerFarmStatCareer.FightW) AS SumOfFightW, Sum(PlayerFarmStatCareer.FightL) AS SumOfFightL, Sum(PlayerFarmStatCareer.FightT) AS SumOfFightT, Sum(PlayerFarmStatCareer.Star1) AS SumOfStar1, Sum(PlayerFarmStatCareer.Star2) AS SumOfStar2, Sum(PlayerFarmStatCareer.Star3) AS SumOfStar3 FROM PlayerFarmStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $PlayerName) . "')";
			$PlayerFarmCareerSumPlayoffOnly = $CareerStatdb->querySingle($Query, true);

			$PlayerCareerStatFound = true;
		}
	} else {
		$PlayerName = $PlayersLang['Playernotfound'];
		$PlayerInfo = Null;
		$PlayerProStat = Null;
		$PlayerFarmStat = Null;
		$PlayerProSeasonStat = Null;
		$PlayerFarmSeasonStat = Null;
		echo "<style>.STHSPHPPlayerStat_Main {display:none;}</style>";
	}
}


echo "<style>";
if ($PlayerCareerStatFound == true) {
	echo "#tablesorter_colSelect2:checked + label {background: #5797d7;  border-color: #555;}";
	echo "#tablesorter_colSelect2:checked ~ #tablesorter_ColumnSelector2 {display: block;}";
	echo "#tablesorter_colSelect3:checked + label {background: #5797d7;  border-color: #555;}";
	echo "#tablesorter_colSelect3:checked ~ #tablesorter_ColumnSelector3 {display: block;}";
}
if ($PlayerProStatMultipleTeamFound == true) {
	echo "#tablesorter_colSelect4:checked + label {background: #5797d7;  border-color: #555;}";
	echo "#tablesorter_colSelect4:checked ~ #tablesorter_ColumnSelector4 {display: block;}";
}
if ($PlayerFarmStatMultipleTeamFound == true) {
	echo "#tablesorter_colSelect5:checked + label {background: #5797d7;  border-color: #555;}";
	echo "#tablesorter_colSelect5:checked ~ #tablesorter_ColumnSelector5 {display: block;}";
}

function getCountryAbre($Abre)
{
	switch ($Abre) {
		case ('SW'):
			return 'se';
		case ('GE'):
			return 'de';
		case ('DE'):
			return 'dk';
		case ('SV'):
			return 'sk';
		case ('TC'):
			return 'cz';
		case ('LE'):
			return 'lv';
		case ('PO'):
			return 'pl';
		case ('JA'):
			return 'jm';
		default:
			return strtolower($Abre);
	}
};

function createPickturePlayer($name)
{
	switch (strtolower(str_replace([" ", "'", "é"], ["-", "", "e"], $name))) {
		case "mike-reilly":
			return "mike-reilly-106004";
			break;
		case "robert-thomas":
			return "robert-thomas-270853";
			break;
		case "sam-reinhart":
			return "sam-reinhart-68137";
			break;
		case "zachary-werenski":
			return "zach-werenski";
			break;
		case "kaapo-kähkönen":
			return "kaapo-kahkonen";
			break;
		case "anthony-deangelo":
			return "tony-deangelo";
			break;
		case "tyler-johnson":
			return "tyler-johnson-40574";
			break;
		case "dmitri-kulikov":
			return "dmitry-kulikov";
			break;
		default:
			return strtolower(str_replace([" ", "'", "é"], ["-", "", "e"], $name));
			break;
	}
}

function getSeasonName($name)
{
	switch ($name) {
		case "WC-STHS.bin":
			return "WC : 2023";
			break;
		default:
			return $name;
			break;
	}
}

$arrayDbs = [$DatabaseFileS10, $DatabaseFileS_C, $DatabaseFileS11, $DatabaseFileS12, $DatabaseFileS13, $DatabaseFile];
$count = 0;
//dictionnaire des donnees des joueurs selon le count (annee)
$dictLeagueGeneral[[]];
$dictPlayerInfo[[]];
$dictPlayerProStats[[]];
$dictPlayerFarmStats[[]];
$dictPlayerProSeasonStats[[]];
$dictPlayerFarmSeasonStats[[]];

foreach ($arrayDbs as $Dbs) {
	$db = new SQLite3($Dbs);
	$Query = "Select Name, OutputName, LeagueYearOutput, PreSeasonSchedule, PlayOffStarted, LeagueYear from LeagueGeneral";
	$LeagueGeneral = $db->querySingle($Query, true);
	$dictLeagueGeneral[$count] = $LeagueGeneral;

	$Query = "Select PlayersMugShotBaseURL, PlayersMugShotFileExtension,OutputSalariesRemaining,OutputSalariesAverageTotal,OutputSalariesAverageRemaining from LeagueOutputOption";
	$LeagueOutputOption = $db->querySingle($Query, true);

	if ($Player == 0) {
		$PlayerInfo = Null;
		$PlayerProStat = Null;
		$PlayerFarmStat = Null;
		echo "<style>.STHSPHPPlayerStat_Main {display:none;}</style>";
	} else {
		$Query = "SELECT count(*) AS count FROM PlayerInfo WHERE Number = " . $Player;
		$Result = $db->querySingle($Query, true);
		if ($Result['count'] == 1) {

			$Query = "SELECT PlayerInfo.*, TeamProInfo.Name AS ProTeamName FROM PlayerInfo LEFT JOIN TeamProInfo ON PlayerInfo.Team = TeamProInfo.Number WHERE PlayerInfo.Number = " . $Player;
			$PlayerInfo = $db->querySingle($Query, true);
			$dictPlayerInfo[$count] = $PlayerInfo;

			$Query = "SELECT PlayerProStat.*, ROUND((CAST(PlayerProStat.G AS REAL) / (PlayerProStat.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerProStat.SecondPlay AS REAL) / 60 / (PlayerProStat.GP)),2) AS AMG,ROUND((CAST(PlayerProStat.FaceOffWon AS REAL) / (PlayerProStat.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerProStat.P AS REAL) / (PlayerProStat.SecondPlay) * 60 * 20),2) AS P20 FROM PlayerProStat WHERE Number = " . $Player;
			$PlayerProStat = $db->querySingle($Query, true);
			$dictPlayerProStats[$count] = $PlayerProStat;

			$Query = "SELECT PlayerFarmStat.*, ROUND((CAST(PlayerFarmStat.G AS REAL) / (PlayerFarmStat.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerFarmStat.SecondPlay AS REAL) / 60 / (PlayerFarmStat.GP)),2) AS AMG,ROUND((CAST(PlayerFarmStat.FaceOffWon AS REAL) / (PlayerFarmStat.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerFarmStat.P AS REAL) / (PlayerFarmStat.SecondPlay) * 60 * 20),2) AS P20 FROM PlayerFarmStat WHERE Number = " . $Player;
			$PlayerFarmStat = $db->querySingle($Query, true);
			$dictPlayerFarmStats[$count] = $PlayerFarmStat;

			$Query = "SELECT PlayerProSeasonStat.*, ROUND((CAST(PlayerProSeasonStat.G AS REAL) / (PlayerProSeasonStat.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerProSeasonStat.SecondPlay AS REAL) / 60 / (PlayerProSeasonStat.GP)),2) AS AMG,ROUND((CAST(PlayerProSeasonStat.FaceOffWon AS REAL) / (PlayerProSeasonStat.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerProSeasonStat.P AS REAL) / (PlayerProSeasonStat.SecondPlay) * 60 * 20),2) AS P20 FROM PlayerProSeasonStat WHERE Number = " . $Player;
			$PlayerProSeasonStat = $db->querySingle($Query, true);
			$dictPlayerProSeasonStats[$count] = $PlayerProSeasonStat;

			$Query = "SELECT PlayerFarmSeasonStat.*, ROUND((CAST(PlayerFarmSeasonStat.G AS REAL) / (PlayerFarmSeasonStat.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerFarmSeasonStat.SecondPlay AS REAL) / 60 / (PlayerFarmSeasonStat.GP)),2) AS AMG,ROUND((CAST(PlayerFarmSeasonStat.FaceOffWon AS REAL) / (PlayerFarmSeasonStat.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerFarmSeasonStat.P AS REAL) / (PlayerFarmSeasonStat.SecondPlay) * 60 * 20),2) AS P20 FROM PlayerFarmSeasonStat WHERE Number = " . $Player;
			$PlayerFarmSeasonStat = $db->querySingle($Query, true);
			$dictPlayerFarmSeasonStats[$count] = $PlayerFarmSeasonStat;

			$Query = "SELECT count(*) AS count FROM PlayerProStatMultipleTeam WHERE Number = " . $Player;
			$Result = $db->querySingle($Query, true);
			if ($Result['count'] > 0) {
				$PlayerProStatMultipleTeamFound = TRUE;
			}

			$Query = "SELECT count(*) AS count FROM PlayerFarmStatMultipleTeam WHERE Number = " . $Player;
			$Result = $db->querySingle($Query, true);
			if ($Result['count'] > 0) {
				$PlayerFarmStatMultipleTeamFound = TRUE;
			}

			if ($PlayerInfo['Team'] > 0) {
				$Query = "SELECT MainTable.* FROM (SELECT PlayerInfo.Number, PlayerInfo.Name, PlayerInfo.Team, PlayerInfo.TeamName, PlayerInfo.URLLink, PlayerInfo.NHLID, 'False' AS PosG FROM PlayerInfo WHERE Team = " . $PlayerInfo['Team'] . " UNION ALL SELECT GoalerInfo.Number, GoalerInfo.Name, GoalerInfo.Team, GoalerInfo.TeamName, GoalerInfo.URLLink, GoalerInfo.NHLID, 'True' AS PosG FROM GoalerInfo WHERE Team = " . $PlayerInfo['Team'] . ") AS MainTable ORDER BY Name";
				$TeamPlayers = $db->query($Query);
			}

			$LeagueName = $LeagueGeneral['Name'];
			$PlayerName = $PlayerInfo['Name'];
			if (file_exists($CareerStatDatabaseFile) == true) {
				$CareerStatdb = new SQLite3($CareerStatDatabaseFile);

				$Query = "SELECT PlayerProStatCareer.*, ROUND((CAST(PlayerProStatCareer.G AS REAL) / (PlayerProStatCareer.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerProStatCareer.SecondPlay AS REAL) / 60 / (PlayerProStatCareer.GP)),2) AS AMG,ROUND((CAST(PlayerProStatCareer.FaceOffWon AS REAL) / (PlayerProStatCareer.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerProStatCareer.P AS REAL) / (PlayerProStatCareer.SecondPlay) * 60 * 20),2) AS P20 FROM PlayerProStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $PlayerName) . "') ORDER BY PlayerProStatCareer.Year";
				$PlayerProCareerSeason = $CareerStatdb->query($Query);
				$Query = "SELECT PlayerProStatCareer.*, ROUND((CAST(PlayerProStatCareer.G AS REAL) / (PlayerProStatCareer.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerProStatCareer.SecondPlay AS REAL) / 60 / (PlayerProStatCareer.GP)),2) AS AMG,ROUND((CAST(PlayerProStatCareer.FaceOffWon AS REAL) / (PlayerProStatCareer.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerProStatCareer.P AS REAL) / (PlayerProStatCareer.SecondPlay) * 60 * 20),2) AS P20 FROM PlayerProStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $PlayerName) . "') ORDER BY PlayerProStatCareer.Year";
				$PlayerProCareerPlayoff = $CareerStatdb->query($Query);
				$Query = "SELECT Sum(PlayerProStatCareer.GP) AS SumOfGP, Sum(PlayerProStatCareer.Shots) AS SumOfShots, Sum(PlayerProStatCareer.G) AS SumOfG, Sum(PlayerProStatCareer.A) AS SumOfA, Sum(PlayerProStatCareer.P) AS SumOfP, Sum(PlayerProStatCareer.PlusMinus) AS SumOfPlusMinus, Sum(PlayerProStatCareer.Pim) AS SumOfPim, Sum(PlayerProStatCareer.Pim5) AS SumOfPim5, Sum(PlayerProStatCareer.ShotsBlock) AS SumOfShotsBlock, Sum(PlayerProStatCareer.OwnShotsBlock) AS SumOfOwnShotsBlock, Sum(PlayerProStatCareer.OwnShotsMissGoal) AS SumOfOwnShotsMissGoal, Sum(PlayerProStatCareer.Hits) AS SumOfHits, Sum(PlayerProStatCareer.HitsTook) AS SumOfHitsTook, Sum(PlayerProStatCareer.GW) AS SumOfGW, Sum(PlayerProStatCareer.GT) AS SumOfGT, Sum(PlayerProStatCareer.FaceOffWon) AS SumOfFaceOffWon, Sum(PlayerProStatCareer.FaceOffTotal) AS SumOfFaceOffTotal, Sum(PlayerProStatCareer.PenalityShotsScore) AS SumOfPenalityShotsScore, Sum(PlayerProStatCareer.PenalityShotsTotal) AS SumOfPenalityShotsTotal, Sum(PlayerProStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(PlayerProStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(PlayerProStatCareer.HatTrick) AS SumOfHatTrick, Sum(PlayerProStatCareer.PPG) AS SumOfPPG, Sum(PlayerProStatCareer.PPA) AS SumOfPPA, Sum(PlayerProStatCareer.PPP) AS SumOfPPP, Sum(PlayerProStatCareer.PPShots) AS SumOfPPShots, Sum(PlayerProStatCareer.PPSecondPlay) AS SumOfPPSecondPlay, Sum(PlayerProStatCareer.PKG) AS SumOfPKG, Sum(PlayerProStatCareer.PKA) AS SumOfPKA, Sum(PlayerProStatCareer.PKP) AS SumOfPKP, Sum(PlayerProStatCareer.PKShots) AS SumOfPKShots, Sum(PlayerProStatCareer.PKSecondPlay) AS SumOfPKSecondPlay, Sum(PlayerProStatCareer.GiveAway) AS SumOfGiveAway, Sum(PlayerProStatCareer.TakeAway) AS SumOfTakeAway, Sum(PlayerProStatCareer.PuckPossesionTime) AS SumOfPuckPossesionTime, Sum(PlayerProStatCareer.FightW) AS SumOfFightW, Sum(PlayerProStatCareer.FightL) AS SumOfFightL, Sum(PlayerProStatCareer.FightT) AS SumOfFightT, Sum(PlayerProStatCareer.Star1) AS SumOfStar1, Sum(PlayerProStatCareer.Star2) AS SumOfStar2, Sum(PlayerProStatCareer.Star3) AS SumOfStar3 FROM PlayerProStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $PlayerName) . "')";
				$PlayerProCareerSumSeasonOnly = $CareerStatdb->querySingle($Query, true);
				$Query = "SELECT Sum(PlayerProStatCareer.GP) AS SumOfGP, Sum(PlayerProStatCareer.Shots) AS SumOfShots, Sum(PlayerProStatCareer.G) AS SumOfG, Sum(PlayerProStatCareer.A) AS SumOfA, Sum(PlayerProStatCareer.P) AS SumOfP, Sum(PlayerProStatCareer.PlusMinus) AS SumOfPlusMinus, Sum(PlayerProStatCareer.Pim) AS SumOfPim, Sum(PlayerProStatCareer.Pim5) AS SumOfPim5, Sum(PlayerProStatCareer.ShotsBlock) AS SumOfShotsBlock, Sum(PlayerProStatCareer.OwnShotsBlock) AS SumOfOwnShotsBlock, Sum(PlayerProStatCareer.OwnShotsMissGoal) AS SumOfOwnShotsMissGoal, Sum(PlayerProStatCareer.Hits) AS SumOfHits, Sum(PlayerProStatCareer.HitsTook) AS SumOfHitsTook, Sum(PlayerProStatCareer.GW) AS SumOfGW, Sum(PlayerProStatCareer.GT) AS SumOfGT, Sum(PlayerProStatCareer.FaceOffWon) AS SumOfFaceOffWon, Sum(PlayerProStatCareer.FaceOffTotal) AS SumOfFaceOffTotal, Sum(PlayerProStatCareer.PenalityShotsScore) AS SumOfPenalityShotsScore, Sum(PlayerProStatCareer.PenalityShotsTotal) AS SumOfPenalityShotsTotal, Sum(PlayerProStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(PlayerProStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(PlayerProStatCareer.HatTrick) AS SumOfHatTrick, Sum(PlayerProStatCareer.PPG) AS SumOfPPG, Sum(PlayerProStatCareer.PPA) AS SumOfPPA, Sum(PlayerProStatCareer.PPP) AS SumOfPPP, Sum(PlayerProStatCareer.PPShots) AS SumOfPPShots, Sum(PlayerProStatCareer.PPSecondPlay) AS SumOfPPSecondPlay, Sum(PlayerProStatCareer.PKG) AS SumOfPKG, Sum(PlayerProStatCareer.PKA) AS SumOfPKA, Sum(PlayerProStatCareer.PKP) AS SumOfPKP, Sum(PlayerProStatCareer.PKShots) AS SumOfPKShots, Sum(PlayerProStatCareer.PKSecondPlay) AS SumOfPKSecondPlay, Sum(PlayerProStatCareer.GiveAway) AS SumOfGiveAway, Sum(PlayerProStatCareer.TakeAway) AS SumOfTakeAway, Sum(PlayerProStatCareer.PuckPossesionTime) AS SumOfPuckPossesionTime, Sum(PlayerProStatCareer.FightW) AS SumOfFightW, Sum(PlayerProStatCareer.FightL) AS SumOfFightL, Sum(PlayerProStatCareer.FightT) AS SumOfFightT, Sum(PlayerProStatCareer.Star1) AS SumOfStar1, Sum(PlayerProStatCareer.Star2) AS SumOfStar2, Sum(PlayerProStatCareer.Star3) AS SumOfStar3 FROM PlayerProStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $PlayerName) . "')";
				$PlayerProCareerSumPlayoffOnly = $CareerStatdb->querySingle($Query, true);

				$Query = "SELECT PlayerFarmStatCareer.*, ROUND((CAST(PlayerFarmStatCareer.G AS REAL) / (PlayerFarmStatCareer.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerFarmStatCareer.SecondPlay AS REAL) / 60 / (PlayerFarmStatCareer.GP)),2) AS AMG,ROUND((CAST(PlayerFarmStatCareer.FaceOffWon AS REAL) / (PlayerFarmStatCareer.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerFarmStatCareer.P AS REAL) / (PlayerFarmStatCareer.SecondPlay) * 60 * 20),2) AS P20 FROM PlayerFarmStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $PlayerName) . "') ORDER BY PlayerFarmStatCareer.Year";
				$PlayerFarmCareerSeason = $CareerStatdb->query($Query);
				$Query = "SELECT PlayerFarmStatCareer.*, ROUND((CAST(PlayerFarmStatCareer.G AS REAL) / (PlayerFarmStatCareer.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerFarmStatCareer.SecondPlay AS REAL) / 60 / (PlayerFarmStatCareer.GP)),2) AS AMG,ROUND((CAST(PlayerFarmStatCareer.FaceOffWon AS REAL) / (PlayerFarmStatCareer.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerFarmStatCareer.P AS REAL) / (PlayerFarmStatCareer.SecondPlay) * 60 * 20),2) AS P20 FROM PlayerFarmStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $PlayerName) . "') ORDER BY PlayerFarmStatCareer.Year";
				$PlayerFarmCareerPlayoff = $CareerStatdb->query($Query);
				$Query = "SELECT Sum(PlayerFarmStatCareer.GP) AS SumOfGP, Sum(PlayerFarmStatCareer.Shots) AS SumOfShots, Sum(PlayerFarmStatCareer.G) AS SumOfG, Sum(PlayerFarmStatCareer.A) AS SumOfA, Sum(PlayerFarmStatCareer.P) AS SumOfP, Sum(PlayerFarmStatCareer.PlusMinus) AS SumOfPlusMinus, Sum(PlayerFarmStatCareer.Pim) AS SumOfPim, Sum(PlayerFarmStatCareer.Pim5) AS SumOfPim5, Sum(PlayerFarmStatCareer.ShotsBlock) AS SumOfShotsBlock, Sum(PlayerFarmStatCareer.OwnShotsBlock) AS SumOfOwnShotsBlock, Sum(PlayerFarmStatCareer.OwnShotsMissGoal) AS SumOfOwnShotsMissGoal, Sum(PlayerFarmStatCareer.Hits) AS SumOfHits, Sum(PlayerFarmStatCareer.HitsTook) AS SumOfHitsTook, Sum(PlayerFarmStatCareer.GW) AS SumOfGW, Sum(PlayerFarmStatCareer.GT) AS SumOfGT, Sum(PlayerFarmStatCareer.FaceOffWon) AS SumOfFaceOffWon, Sum(PlayerFarmStatCareer.FaceOffTotal) AS SumOfFaceOffTotal, Sum(PlayerFarmStatCareer.PenalityShotsScore) AS SumOfPenalityShotsScore, Sum(PlayerFarmStatCareer.PenalityShotsTotal) AS SumOfPenalityShotsTotal, Sum(PlayerFarmStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(PlayerFarmStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(PlayerFarmStatCareer.HatTrick) AS SumOfHatTrick, Sum(PlayerFarmStatCareer.PPG) AS SumOfPPG, Sum(PlayerFarmStatCareer.PPA) AS SumOfPPA, Sum(PlayerFarmStatCareer.PPP) AS SumOfPPP, Sum(PlayerFarmStatCareer.PPShots) AS SumOfPPShots, Sum(PlayerFarmStatCareer.PPSecondPlay) AS SumOfPPSecondPlay, Sum(PlayerFarmStatCareer.PKG) AS SumOfPKG, Sum(PlayerFarmStatCareer.PKA) AS SumOfPKA, Sum(PlayerFarmStatCareer.PKP) AS SumOfPKP, Sum(PlayerFarmStatCareer.PKShots) AS SumOfPKShots, Sum(PlayerFarmStatCareer.PKSecondPlay) AS SumOfPKSecondPlay, Sum(PlayerFarmStatCareer.GiveAway) AS SumOfGiveAway, Sum(PlayerFarmStatCareer.TakeAway) AS SumOfTakeAway, Sum(PlayerFarmStatCareer.PuckPossesionTime) AS SumOfPuckPossesionTime, Sum(PlayerFarmStatCareer.FightW) AS SumOfFightW, Sum(PlayerFarmStatCareer.FightL) AS SumOfFightL, Sum(PlayerFarmStatCareer.FightT) AS SumOfFightT, Sum(PlayerFarmStatCareer.Star1) AS SumOfStar1, Sum(PlayerFarmStatCareer.Star2) AS SumOfStar2, Sum(PlayerFarmStatCareer.Star3) AS SumOfStar3 FROM PlayerFarmStatCareer WHERE Playoff = 'False' AND (Name = '" . str_replace("'", "''", $PlayerName) . "')";
				$PlayerFarmCareerSumSeasonOnly = $CareerStatdb->querySingle($Query, true);
				$Query = "SELECT Sum(PlayerFarmStatCareer.GP) AS SumOfGP, Sum(PlayerFarmStatCareer.Shots) AS SumOfShots, Sum(PlayerFarmStatCareer.G) AS SumOfG, Sum(PlayerFarmStatCareer.A) AS SumOfA, Sum(PlayerFarmStatCareer.P) AS SumOfP, Sum(PlayerFarmStatCareer.PlusMinus) AS SumOfPlusMinus, Sum(PlayerFarmStatCareer.Pim) AS SumOfPim, Sum(PlayerFarmStatCareer.Pim5) AS SumOfPim5, Sum(PlayerFarmStatCareer.ShotsBlock) AS SumOfShotsBlock, Sum(PlayerFarmStatCareer.OwnShotsBlock) AS SumOfOwnShotsBlock, Sum(PlayerFarmStatCareer.OwnShotsMissGoal) AS SumOfOwnShotsMissGoal, Sum(PlayerFarmStatCareer.Hits) AS SumOfHits, Sum(PlayerFarmStatCareer.HitsTook) AS SumOfHitsTook, Sum(PlayerFarmStatCareer.GW) AS SumOfGW, Sum(PlayerFarmStatCareer.GT) AS SumOfGT, Sum(PlayerFarmStatCareer.FaceOffWon) AS SumOfFaceOffWon, Sum(PlayerFarmStatCareer.FaceOffTotal) AS SumOfFaceOffTotal, Sum(PlayerFarmStatCareer.PenalityShotsScore) AS SumOfPenalityShotsScore, Sum(PlayerFarmStatCareer.PenalityShotsTotal) AS SumOfPenalityShotsTotal, Sum(PlayerFarmStatCareer.EmptyNetGoal) AS SumOfEmptyNetGoal, Sum(PlayerFarmStatCareer.SecondPlay) AS SumOfSecondPlay, Sum(PlayerFarmStatCareer.HatTrick) AS SumOfHatTrick, Sum(PlayerFarmStatCareer.PPG) AS SumOfPPG, Sum(PlayerFarmStatCareer.PPA) AS SumOfPPA, Sum(PlayerFarmStatCareer.PPP) AS SumOfPPP, Sum(PlayerFarmStatCareer.PPShots) AS SumOfPPShots, Sum(PlayerFarmStatCareer.PPSecondPlay) AS SumOfPPSecondPlay, Sum(PlayerFarmStatCareer.PKG) AS SumOfPKG, Sum(PlayerFarmStatCareer.PKA) AS SumOfPKA, Sum(PlayerFarmStatCareer.PKP) AS SumOfPKP, Sum(PlayerFarmStatCareer.PKShots) AS SumOfPKShots, Sum(PlayerFarmStatCareer.PKSecondPlay) AS SumOfPKSecondPlay, Sum(PlayerFarmStatCareer.GiveAway) AS SumOfGiveAway, Sum(PlayerFarmStatCareer.TakeAway) AS SumOfTakeAway, Sum(PlayerFarmStatCareer.PuckPossesionTime) AS SumOfPuckPossesionTime, Sum(PlayerFarmStatCareer.FightW) AS SumOfFightW, Sum(PlayerFarmStatCareer.FightL) AS SumOfFightL, Sum(PlayerFarmStatCareer.FightT) AS SumOfFightT, Sum(PlayerFarmStatCareer.Star1) AS SumOfStar1, Sum(PlayerFarmStatCareer.Star2) AS SumOfStar2, Sum(PlayerFarmStatCareer.Star3) AS SumOfStar3 FROM PlayerFarmStatCareer WHERE Playoff = 'True' AND (Name = '" . str_replace("'", "''", $PlayerName) . "')";
				$PlayerFarmCareerSumPlayoffOnly = $CareerStatdb->querySingle($Query, true);

				$PlayerCareerStatFound = true;
			}
		} else {
			$PlayerName = $PlayersLang['Playernotfound'];
			$PlayerInfo = Null;
			$PlayerProStat = Null;
			$PlayerFarmStat = Null;
			echo "<style>.STHSPHPPlayerStat_Main {display:none;}</style>";
		}
	}
	$count++;
}
echo "</style>";
echo "<title>" . $LeagueName . " - " . $PlayerName .  "</title>";

?>
</head>

<body>
	<?php include "Menu.php"; ?>
	<br />

	<div class="STHSPHPPlayerStat_PlayerNameHeader">
		<?php
		echo "<table class=\"STHSTableFullW STHSPHPPlayerMugShot\"><tr>";
		if ($PlayerInfo <> Null) {
			echo "<tr><td><br />" . $PlayerInfo['TeamName'] . "</td></tr><tr><td><br /></td></tr>";
			echo "<td style=\"width: 100%; text-align: center;\"><img src=\"https://tsnimages.tsn.ca/ImageProvider/PlayerHeadshot?seoId=" . createPickturePlayer($PlayerInfo['Name']) . "&width=136&height=136\" alt=\"\" style=\"border-radius:40%\"/></td></tr>";
		}
		echo "<tr><td><br /></td></tr>
		<tr>
		<td style=\"padding-bottom: 10px; text-align: center;display: flex;justify-content: center;align-items: center;\" >" . $PlayerName . " #" . $PlayerInfo['Jersey'] . "&nbsp" . "<img src=\"https://flagcdn.com/28x21/" . getCountryAbre(substr($PlayerInfo['Country'], 0, -1)) . ".png\"></td>
		</tr>
		<tr><td style=\"font-size: 15px;\">";
		if ($PlayerInfo <> Null) {
			$Position = (string)"";
			if ($PlayerInfo['PosC'] == "True") {
				if ($Position == "") {
					$Position = $TeamLang['Center'];
				} else {
					$Position = $Position . " - " . $TeamLang['Center'];
				}
			}
			if ($PlayerInfo['PosLW'] == "True") {
				if ($Position == "") {
					$Position = $TeamLang['LeftWing'];
				} else {
					$Position = $Position . " - " . $TeamLang['LeftWing'];
				}
			}
			if ($PlayerInfo['PosRW'] == "True") {
				if ($Position == "") {
					$Position = $TeamLang['RightWing'];
				} else {
					$Position = $Position . " - " . $TeamLang['RightWing'];
				}
			}
			if ($PlayerInfo['PosD'] == "True") {
				if ($Position == "") {
					$Position = $TeamLang['Defense'];
				} else {
					$Position = $Position . " - " . $TeamLang['Defense'];
				}
			}
			echo $Position . " | Âge: " . $PlayerInfo['Age'] . " | " . $PlayerInfo['Height'] . "in | " . $PlayerInfo['Weight'] . "lbs";
		}
		echo "</td></tr>";
		echo "</table>";
		?>
	</div>

	<div class="">
		<br />
		<div style="overflow-x:auto;">
			<table class="STHSPHPPlayerStat_Table">
				<tr>
					<th>CK</th>
					<th>FG</th>
					<th>DI</th>
					<th>SK</th>
					<th>ST</th>
					<th>EN</th>
					<th>DU</th>
					<th>PH</th>
					<th>FO</th>
					<th>PA</th>
					<th>SC</th>
					<th>DF</th>
					<th>PS</th>
					<th>EX</th>
					<th>LD</th>
					<th>PO</th>
					<th>MO</th>
					<th>OV</th>
				</tr>
				<tr>
					<?php
					if ($PlayerInfo <> Null) {
						echo "<td>" . $PlayerInfo['CK'] . "</td>";
						echo "<td>" . $PlayerInfo['FG'] . "</td>";
						echo "<td>" . $PlayerInfo['DI'] . "</td>";
						echo "<td>" . $PlayerInfo['SK'] . "</td>";
						echo "<td>" . $PlayerInfo['ST'] . "</td>";
						echo "<td>" . $PlayerInfo['EN'] . "</td>";
						echo "<td>" . $PlayerInfo['DU'] . "</td>";
						echo "<td>" . $PlayerInfo['PH'] . "</td>";
						echo "<td>" . $PlayerInfo['FO'] . "</td>";
						echo "<td>" . $PlayerInfo['PA'] . "</td>";
						echo "<td>" . $PlayerInfo['SC'] . "</td>";
						echo "<td>" . $PlayerInfo['DF'] . "</td>";
						echo "<td>" . $PlayerInfo['PS'] . "</td>";
						echo "<td>" . $PlayerInfo['EX'] . "</td>";
						echo "<td>" . $PlayerInfo['LD'] . "</td>";
						echo "<td>" . $PlayerInfo['PO'] . "</td>";
						echo "<td>" . $PlayerInfo['MO'] . "</td>";
						echo "<td>" . $PlayerInfo['Overall'] . "</td>";
					} ?>
				</tr>
			</table>
		</div>
		<br />
		<div class="tabsmain standard">
			<ul class="tabmain-links">
				<li class="activemain"><a href="#tabmain1"><?php echo $PlayersLang['Information']; ?></a></li>
				<li><a href="#tabmain2"><?php echo $PlayersLang['ProStat'] . $PlayersLang['Basic']; ?></a></li>
				<li><a href="#tabmain4"><?php echo $PlayersLang['FarmStat'] . $PlayersLang['Basic']; ?></a></li>
				<?php
				if ($PlayerProStatMultipleTeamFound == TRUE or $PlayerFarmStatMultipleTeamFound == TRUE) {
					echo "<li><a href=\"#tabmain8\">" . $PlayersLang['StatperTeam'] . "</a></li>";
				}
				if ($PlayerCareerStatFound == true) {
					echo "<li><a href=\"#tabmain6\">" . $PlayersLang['CareerProStat'] . "</a></li>";
					echo "<li><a href=\"#tabmain7\">" . $PlayersLang['CareerFarmStat'] . "</a></li>";
				}
				?>
			</ul>
			<div class="STHSPHPPlayerStat_Tabmain-content">

				<div class="tabmain active" id="tabmain1">
					<br />
					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['Information']; ?></div><br />
					<table class="STHSPHPPlayerStat_Table_Info">
						<tr>
							<td><?php echo $TeamLang['Equipe actuelle'] ?></td>
							<td><?php echo $PlayerInfo['TeamName']; ?></td>
						</tr>
						<tr>
							<td><?php echo $TeamLang['Date de naissance'] ?></td>
							<td><?php echo $PlayerInfo['AgeDate']; ?></td>
						</tr>
						<tr>
							<td><?php echo $TeamLang['Annee de contrat | Salaire'] ?></td>
							<td><?php echo ($PlayerInfo['NoTrade'] == "False") ? $PlayerInfo['Contract'] . "an(s) | " . $PlayerInfo['SalaryAverage'] . "$ avg" : $PlayerInfo['Contract'] . "an(s) | " . $PlayerInfo['SalaryAverage'] . "$ avg + NTC"; ?></td>
						</tr>
						<tr>
							<td><?php echo $TeamLang['Recrue'] ?></td>
							<td><?php echo ($PlayerInfo['Rookie'] == "False") ? "&#x2610;" : "&#x2611;"; ?></td>
						</tr>
						<tr>
							<td><?php echo $TeamLang['Annee de repêchage | Rang'] ?></td>
							<td><?php echo (($PlayerInfo['DraftYear'] == 0) ? "N/A" : $PlayerInfo['DraftYear'] . " | " . $PlayerInfo['DraftOverallPick'] . "e"); ?></td>
						</tr>
						<tr>
							<td><?php echo $TeamLang['Condition | Blessure'] ?></td>
							<td><?php echo (empty($PlayerInfo['Injury'])) ? $PlayerInfo['Condition'] . "% | N/A" : $PlayerInfo['Condition'] . "% | " . $InjuryLang[$PlayerInfo['Injury']]; ?></td>
						</tr>
						<tr>
							<?php
							if ($PlayerInfo != Null) {
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
							<thead>
								<th data-priority="3" title="Order Number" class="STHSW10 sorter-false">#</th>
								<th data-priority="critical" title="League Name" class="STHSW140Min"><?php echo $GeneralStatLang['Season']; ?></th>
								<th data-priority="critical" title="Team Name" class="STHSW55"><?php echo $GeneralStatLang['Team']; ?></th>
								<th data-priority="1" title="Games Played" class="STHSW25">GP</th>
								<th data-priority="1" title="Goals" class="STHSW25">G</th>
								<th data-priority="1" title="Assists" class="STHSW25">A</th>
								<th data-priority="1" title="Points" class="STHSW25">P</th>
								<th data-priority="2" title="Plus/Minus" class="STHSW25">+/-</th>
								<th data-priority="2" title="Penalty Minutes" class="STHSW25">PIM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Minutes for Major Penalty">PIM5</th>
								<th data-priority="2" title="Hits" class="STHSW25">HIT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hits Received">HTT</th>
								<th data-priority="2" title="Shots" class="STHSW25">SHT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Block by others players">OSB</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Miss the net">OSM</th>
								<th data-priority="3" title="Shooting Percentage" class="STHSW55">SHT%</th>
								<th data-priority="3" title="Shots Blocked" class="STHSW25">SB</th>
								<th data-priority="3" title="Minutes Played" class="STHSW35">MP</th>
								<th data-priority="3" title="Average Minutes Played per Game" class="STHSW35">AMG</th>
								<th data-priority="4" title="Power Play Goals" class="STHSW25">PPG</th>
								<th data-priority="4" title="Power Play Assists" class="STHSW25">PPA</th>
								<th data-priority="4" title="Power Play Points" class="STHSW25">PPP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Shots">PPS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Minutes Played">PPM</th>
								<th data-priority="5" title="Short Handed Goals" class="STHSW25">PKG</th>
								<th data-priority="5" title="Short Handed Assists" class="STHSW25">PKA</th>
								<th data-priority="5" title="Short Handed Points" class="STHSW25">PKP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Shots">PKS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Minutes Played">PKM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Winning Goals">GW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Tying Goals">GT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Percentage">FO%</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Taken">FOT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Give Aways">GA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Take Aways">TA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Empty Net Goals">EG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hat Tricks">HT</th>
								<th data-priority="4" title="Points per 20 Minutes" class="STHSW25">P/20</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Goals">PSG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Taken">PSS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Won">FW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Lost">FL</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Ties">FT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #1 in a game">S1</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #2 in a game">S2</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #3 in a game">S3</th>
								</tr>
							</thead>
							<tr>
								<?php include "PlayersCareerStatSub.php"; ?>
								</tbody>
								<?php $count++;
								?>
						</table>
					</div>
					<br />

					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['ProStat'] . ': Séries'; ?></div><br />
					<div style="overflow-x:auto;">
						<table class="tablesorter ">
							<thead>
								<th data-priority="3" title="Order Number" class="STHSW10 sorter-false">#</th>
								<th data-priority="critical" title="League Name" class="STHSW140Min"><?php echo $GeneralStatLang['Season']; ?></th>
								<th data-priority="critical" title="Team Name" class="STHSW55"><?php echo $GeneralStatLang['Team']; ?></th>
								<th data-priority="1" title="Games Played" class="STHSW25">GP</th>
								<th data-priority="1" title="Goals" class="STHSW25">G</th>
								<th data-priority="1" title="Assists" class="STHSW25">A</th>
								<th data-priority="1" title="Points" class="STHSW25">P</th>
								<th data-priority="2" title="Plus/Minus" class="STHSW25">+/-</th>
								<th data-priority="2" title="Penalty Minutes" class="STHSW25">PIM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Minutes for Major Penalty">PIM5</th>
								<th data-priority="2" title="Hits" class="STHSW25">HIT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hits Received">HTT</th>
								<th data-priority="2" title="Shots" class="STHSW25">SHT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Block by others players">OSB</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Miss the net">OSM</th>
								<th data-priority="3" title="Shooting Percentage" class="STHSW55">SHT%</th>
								<th data-priority="3" title="Shots Blocked" class="STHSW25">SB</th>
								<th data-priority="3" title="Minutes Played" class="STHSW35">MP</th>
								<th data-priority="3" title="Average Minutes Played per Game" class="STHSW35">AMG</th>
								<th data-priority="4" title="Power Play Goals" class="STHSW25">PPG</th>
								<th data-priority="4" title="Power Play Assists" class="STHSW25">PPA</th>
								<th data-priority="4" title="Power Play Points" class="STHSW25">PPP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Shots">PPS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Minutes Played">PPM</th>
								<th data-priority="5" title="Short Handed Goals" class="STHSW25">PKG</th>
								<th data-priority="5" title="Short Handed Assists" class="STHSW25">PKA</th>
								<th data-priority="5" title="Short Handed Points" class="STHSW25">PKP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Shots">PKS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Minutes Played">PKM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Winning Goals">GW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Tying Goals">GT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Percentage">FO%</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Taken">FOT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Give Aways">GA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Take Aways">TA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Empty Net Goals">EG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hat Tricks">HT</th>
								<th data-priority="4" title="Points per 20 Minutes" class="STHSW25">P/20</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Goals">PSG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Taken">PSS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Won">FW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Lost">FL</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Ties">FT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #1 in a game">S1</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #2 in a game">S2</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #3 in a game">S3</th>
								</tr>
							</thead>
							<tr>
								<?php include "PlayerscareerStatPlayoffsSub.php"; ?>
								</tbody>
								<?php $count++;
								?>
						</table>
					</div>
					<br />

				</div>

				<div class="tabmain" id="tabmain3">
					<br />
					<div style="overflow-x:auto;">
						<table class="tablesorter ">
							<thead>
								<th data-priority="3" title="Order Number" class="STHSW10 sorter-false">#</th>
								<th data-priority="critical" title="League Name" class="STHSW140Min"><?php echo $GeneralStatLang['Season']; ?></th>
								<?php
								if ($Team >= 0) {
									echo "<th class=\"columnSelector-false STHSW140Min\" data-priority=\"6\" title=\"Team Name\">" . $PlayersLang['TeamName'] . "</th>";
								} else {
									echo "<th data-priority=\"2\" title=\"Team Name\" class=\"STHSW140Min\">" . $PlayersLang['TeamName'] . "</th>";
								}
								if ($CareerLeaderSubPrintOut == 0 or $CareerLeaderSubPrintOut == 2) {
									echo "<th data-priority=\"2\" title=\"Position\" class=\"STHSW25\">POS</th>";
								}
								if ($CareerLeaderSubPrintOut == 1 or $CareerLeaderSubPrintOut == 2) {
									echo "<th data-priority=\"2\" title=\"Year\" class=\"STHSW25\">" . $SearchLang['Year'] . "</th><th data-priority=\"5\" title=\"Rookie\" class=\"STHSW25\">" . $PlayersLang['Rookie'] . "</th>";
								}
								?>
								<th data-priority="1" title="Games Played" class="STHSW25">GP</th>
								<th data-priority="1" title="Goals" class="STHSW25">G</th>
								<th data-priority="1" title="Assists" class="STHSW25">A</th>
								<th data-priority="1" title="Points" class="STHSW25">P</th>
								<th data-priority="2" title="Plus/Minus" class="STHSW25">+/-</th>
								<th data-priority="2" title="Penalty Minutes" class="STHSW25">PIM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Minutes for Major Penalty">PIM5</th>
								<th data-priority="2" title="Hits" class="STHSW25">HIT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hits Received">HTT</th>
								<th data-priority="2" title="Shots" class="STHSW25">SHT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Block by others players">OSB</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Miss the net">OSM</th>
								<th data-priority="3" title="Shooting Percentage" class="STHSW55">SHT%</th>
								<th data-priority="3" title="Shots Blocked" class="STHSW25">SB</th>
								<th data-priority="3" title="Minutes Played" class="STHSW35">MP</th>
								<th data-priority="3" title="Average Minutes Played per Game" class="STHSW35">AMG</th>
								<th data-priority="4" title="Power Play Goals" class="STHSW25">PPG</th>
								<th data-priority="4" title="Power Play Assists" class="STHSW25">PPA</th>
								<th data-priority="4" title="Power Play Points" class="STHSW25">PPP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Shots">PPS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Minutes Played">PPM</th>
								<th data-priority="5" title="Short Handed Goals" class="STHSW25">PKG</th>
								<th data-priority="5" title="Short Handed Assists" class="STHSW25">PKA</th>
								<th data-priority="5" title="Short Handed Points" class="STHSW25">PKP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Shots">PKS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Minutes Played">PKM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Winning Goals">GW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Tying Goals">GT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Percentage">FO%</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Taken">FOT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Give Aways">GA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Take Aways">TA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Empty Net Goals">EG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hat Tricks">HT</th>
								<th data-priority="4" title="Points per 20 Minutes" class="STHSW25">P/20</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Goals">PSG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Taken">PSS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Won">FW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Lost">FL</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Ties">FT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #1 in a game">S1</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #2 in a game">S2</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #3 in a game">S3</th>
								</tr>
							</thead>
							<tr>
								<?php include "PlayersCareerStatSub.php"; ?>
								</tbody>
								<?php $count++;
								?>
						</table>
					</div>
					<br /><br />
				</div>

				<div class="tabmain" id="tabmain4">
					<br />
					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['FarmStat'] . ': Saison régulière'; ?></div><br />
					<div style="overflow-x:auto;">
						<table class="tablesorter ">
							<thead>
								<th data-priority="3" title="Order Number" class="STHSW10 sorter-false">#</th>
								<th data-priority="critical" title="League Name" class="STHSW140Min"><?php echo $GeneralStatLang['Season']; ?></th>
								<th data-priority="critical" title="Team Name" class="STHSW55"><?php echo $GeneralStatLang['Team']; ?></th>
								<th data-priority="1" title="Games Played" class="STHSW25">GP</th>
								<th data-priority="1" title="Goals" class="STHSW25">G</th>
								<th data-priority="1" title="Assists" class="STHSW25">A</th>
								<th data-priority="1" title="Points" class="STHSW25">P</th>
								<th data-priority="2" title="Plus/Minus" class="STHSW25">+/-</th>
								<th data-priority="2" title="Penalty Minutes" class="STHSW25">PIM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Minutes for Major Penalty">PIM5</th>
								<th data-priority="2" title="Hits" class="STHSW25">HIT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hits Received">HTT</th>
								<th data-priority="2" title="Shots" class="STHSW25">SHT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Block by others players">OSB</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Miss the net">OSM</th>
								<th data-priority="3" title="Shooting Percentage" class="STHSW55">SHT%</th>
								<th data-priority="3" title="Shots Blocked" class="STHSW25">SB</th>
								<th data-priority="3" title="Minutes Played" class="STHSW35">MP</th>
								<th data-priority="3" title="Average Minutes Played per Game" class="STHSW35">AMG</th>
								<th data-priority="4" title="Power Play Goals" class="STHSW25">PPG</th>
								<th data-priority="4" title="Power Play Assists" class="STHSW25">PPA</th>
								<th data-priority="4" title="Power Play Points" class="STHSW25">PPP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Shots">PPS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Minutes Played">PPM</th>
								<th data-priority="5" title="Short Handed Goals" class="STHSW25">PKG</th>
								<th data-priority="5" title="Short Handed Assists" class="STHSW25">PKA</th>
								<th data-priority="5" title="Short Handed Points" class="STHSW25">PKP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Shots">PKS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Minutes Played">PKM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Winning Goals">GW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Tying Goals">GT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Percentage">FO%</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Taken">FOT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Give Aways">GA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Take Aways">TA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Empty Net Goals">EG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hat Tricks">HT</th>
								<th data-priority="4" title="Points per 20 Minutes" class="STHSW25">P/20</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Goals">PSG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Taken">PSS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Won">FW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Lost">FL</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Ties">FT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #1 in a game">S1</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #2 in a game">S2</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #3 in a game">S3</th>
								</tr>
							</thead>
							<tr>
								<?php include "FarmPlayersCareerStatSub.php"; ?>
								</tbody>
								<?php $count++;
								?>
						</table>
					</div>
					<br /><br />

					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['FarmStat'] . ': Séries'; ?></div><br />
					<div style="overflow-x:auto;">
						<table class="tablesorter ">
							<thead>
								<th data-priority="3" title="Order Number" class="STHSW10 sorter-false">#</th>
								<th data-priority="critical" title="League Name" class="STHSW140Min"><?php echo $GeneralStatLang['Season']; ?></th>
								<th data-priority="critical" title="Team Name" class="STHSW55"><?php echo $GeneralStatLang['Team']; ?></th>
								<th data-priority="1" title="Games Played" class="STHSW25">GP</th>
								<th data-priority="1" title="Goals" class="STHSW25">G</th>
								<th data-priority="1" title="Assists" class="STHSW25">A</th>
								<th data-priority="1" title="Points" class="STHSW25">P</th>
								<th data-priority="2" title="Plus/Minus" class="STHSW25">+/-</th>
								<th data-priority="2" title="Penalty Minutes" class="STHSW25">PIM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Minutes for Major Penalty">PIM5</th>
								<th data-priority="2" title="Hits" class="STHSW25">HIT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hits Received">HTT</th>
								<th data-priority="2" title="Shots" class="STHSW25">SHT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Block by others players">OSB</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Miss the net">OSM</th>
								<th data-priority="3" title="Shooting Percentage" class="STHSW55">SHT%</th>
								<th data-priority="3" title="Shots Blocked" class="STHSW25">SB</th>
								<th data-priority="3" title="Minutes Played" class="STHSW35">MP</th>
								<th data-priority="3" title="Average Minutes Played per Game" class="STHSW35">AMG</th>
								<th data-priority="4" title="Power Play Goals" class="STHSW25">PPG</th>
								<th data-priority="4" title="Power Play Assists" class="STHSW25">PPA</th>
								<th data-priority="4" title="Power Play Points" class="STHSW25">PPP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Shots">PPS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Minutes Played">PPM</th>
								<th data-priority="5" title="Short Handed Goals" class="STHSW25">PKG</th>
								<th data-priority="5" title="Short Handed Assists" class="STHSW25">PKA</th>
								<th data-priority="5" title="Short Handed Points" class="STHSW25">PKP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Shots">PKS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Minutes Played">PKM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Winning Goals">GW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Tying Goals">GT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Percentage">FO%</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Taken">FOT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Give Aways">GA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Take Aways">TA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Empty Net Goals">EG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hat Tricks">HT</th>
								<th data-priority="4" title="Points per 20 Minutes" class="STHSW25">P/20</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Goals">PSG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Taken">PSS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Won">FW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Lost">FL</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Ties">FT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #1 in a game">S1</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #2 in a game">S2</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #3 in a game">S3</th>
								</tr>
							</thead>
							<tr>
								<?php include "FarmPlayerscareerStatPlayoffsSub.php"; ?>
								</tbody>
								<?php $count++;
								?>
						</table>
					</div>
				</div>

				<div class="tabmain" id="tabmain5">
					<br />
					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['FarmStat'] . $PlayersLang['Advanced']; ?></div><br />
					<table class="STHSPHPPlayerStat_Table">
						<tr>
							<th><?php echo $GeneralStatLang['GameWinningGoals']; ?></th>
							<th><?php echo $GeneralStatLang['GameTyingGoals']; ?></th>
							<th><?php echo $GeneralStatLang['FaceoffPCT']; ?></th>
							<th><?php echo $GeneralStatLang['FaceoffsTaken']; ?></th>
							<th><?php echo $GeneralStatLang['GiveAways']; ?></th>
							<th><?php echo $GeneralStatLang['TakeAways']; ?></th>
							<th><?php echo $GeneralStatLang['EmptyNetGoals']; ?></th>
							<th><?php echo $GeneralStatLang['HatTricks']; ?></th>
						</tr>
						<tr>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['GW'];
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['GT'];
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo sprintf("%.2f%%", $PlayerFarmStat['FaceoffPCT']);
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['FaceOffTotal'];
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['GiveAway'];
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['TakeAway'];
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['EmptyNetGoal'];
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['HatTrick'];
								} ?></td>
						</tr>
					</table>
					<div class="STHSBlankDiv"></div>

					<table class="STHSPHPPlayerStat_Table">
						<tr>
							<th><?php echo $GeneralStatLang['Pointper20Minutes']; ?></th>
							<th><?php echo $GeneralStatLang['PenaltyShotsGoals']; ?></th>
							<th><?php echo $GeneralStatLang['PenaltyShotsTaken']; ?></th>
							<th><?php echo $GeneralStatLang['FightWon']; ?></th>
							<th><?php echo $GeneralStatLang['FightLost']; ?></th>
							<th><?php echo $GeneralStatLang['FightTies']; ?></th>
						</tr>
						<tr>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo number_format($PlayerFarmStat['P20'], 2);
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['PenalityShotsScore'];
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['PenalityShotsTotal'];
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['FightW'];
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['FightL'];
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['FightT'];
								} ?></td>
						</tr>
					</table>
					<div class="STHSBlankDiv"></div>

					<table class="STHSPHPPlayerStat_Table">
						<tr>
							<th><?php echo $GeneralStatLang['CurrentGoalScoringStreak']; ?></th>
							<th><?php echo $GeneralStatLang['CurrentPointScoringSteak']; ?></th>
							<th><?php echo $GeneralStatLang['CurrentGoalScoringSlump']; ?></th>
							<th><?php echo $GeneralStatLang['CurrentPointScoringSlump']; ?></th>
						</tr>
						<tr>
							<td><?php if ($PlayerInfo <> Null) {
									echo $PlayerInfo['GameInRowWithAGoal'];
								} ?></td>
							<td><?php if ($PlayerInfo <> Null) {
									echo $PlayerInfo['GameInRowWithAPoint'];
								} ?></td>
							<td><?php if ($PlayerInfo <> Null) {
									echo $PlayerInfo['GameInRowWithOutAGoal'];
								} ?></td>
							<td><?php if ($PlayerInfo <> Null) {
									echo $PlayerInfo['GameInRowWithOutAPoint'];
								} ?></td>
						</tr>
					</table>
					<div class="STHSBlankDiv"></div>

					<table class="STHSPHPPlayerStat_Table">
						<tr>
							<th><?php echo $GeneralStatLang['NumberTimeStar1']; ?></th>
							<th><?php echo $GeneralStatLang['NumberTimeStar2']; ?></th>
							<th><?php echo $GeneralStatLang['NumberTimeStar3']; ?></th>
						</tr>
						<tr>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['Star1'];
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['Star2'];
								} ?></td>
							<td><?php if ($PlayerFarmStat <> Null) {
									echo $PlayerFarmStat['Star3'];
								} ?></td>
						</tr>
					</table>
					<br /><br />
				</div>

				<div class="tabmain" id="tabmain8">
					<br />
					<div class="STHSPHPPlayerStat_TabHeader"><?php echo $PlayersLang['StatperTeam']; ?></div>

					<?php
					if ($PlayerProStatMultipleTeamFound == TRUE) {
						echo "<h2>" . $PlayersLang['ProStat'] . "</h2>";
						echo "<div style=\"width:99%;margin:auto;\"><div class=\"tablesorter_ColumnSelectorWrapper\"><input id=\"tablesorter_colSelect4\" type=\"checkbox\" class=\"hidden\"><label class=\"tablesorter_ColumnSelectorButton\" for=\"tablesorter_colSelect4\">" . $TableSorterLang['ShoworHideColumn'] . "</label><div id=\"tablesorter_ColumnSelector4\" class=\"tablesorter_ColumnSelector\"></div>";
						include "FilterTip.php";
						echo "</div></div>";

						$Query = "SELECT PlayerProStatMultipleTeam.*, PlayerInfo.PosC, PlayerInfo.PosLW, PlayerInfo.PosRW, PlayerInfo.PosD, ROUND((CAST(PlayerProStatMultipleTeam.G AS REAL) / (PlayerProStatMultipleTeam.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerProStatMultipleTeam.SecondPlay AS REAL) / 60 / (PlayerProStatMultipleTeam.GP)),2) AS AMG,ROUND((CAST(PlayerProStatMultipleTeam.FaceOffWon AS REAL) / (PlayerProStatMultipleTeam.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerProStatMultipleTeam.P AS REAL) / (PlayerProStatMultipleTeam.SecondPlay) * 60 * 20),2) AS P20, 0 as Star1, 0 as Star2, 0 As Star3 FROM PlayerInfo INNER JOIN PlayerProStatMultipleTeam ON PlayerInfo.Number = PlayerProStatMultipleTeam.Number WHERE PlayerProStatMultipleTeam.Number = " . $Player;
						$PlayerStat = $db->query($Query);
						$Team = (int)-1;
						echo "<table class=\"tablesorter \"><thead><tr>";
						include "PlayersStatSub.php";
						echo "</tbody></table>";
					}

					if ($PlayerProStatMultipleTeamFound == TRUE and $PlayerFarmStatMultipleTeamFound == TRUE) {
						echo "<br /><hr /><br />";
					}

					if ($PlayerFarmStatMultipleTeamFound == TRUE) {
						echo "<h2>" . $PlayersLang['FarmStat'] . "</h2>";
						echo "<div style=\"width:99%;margin:auto;\"><div class=\"tablesorter_ColumnSelectorWrapper\"><input id=\"tablesorter_colSelect5\" type=\"checkbox\" class=\"hidden\"><label class=\"tablesorter_ColumnSelectorButton\" for=\"tablesorter_colSelect5\">" . $TableSorterLang['ShoworHideColumn'] . "</label><div id=\"tablesorter_ColumnSelector5\" class=\"tablesorter_ColumnSelector\"></div>";
						include "FilterTip.php";
						echo "</div></div>";

						$Query = "SELECT PlayerFarmStatMultipleTeam.*, PlayerInfo.PosC, PlayerInfo.PosLW, PlayerInfo.PosRW, PlayerInfo.PosD, ROUND((CAST(PlayerFarmStatMultipleTeam.G AS REAL) / (PlayerFarmStatMultipleTeam.Shots))*100,2) AS ShotsPCT, ROUND((CAST(PlayerFarmStatMultipleTeam.SecondPlay AS REAL) / 60 / (PlayerFarmStatMultipleTeam.GP)),2) AS AMG,ROUND((CAST(PlayerFarmStatMultipleTeam.FaceOffWon AS REAL) / (PlayerFarmStatMultipleTeam.FaceOffTotal))*100,2) as FaceoffPCT,ROUND((CAST(PlayerFarmStatMultipleTeam.P AS REAL) / (PlayerFarmStatMultipleTeam.SecondPlay) * 60 * 20),2) AS P20, 0 as Star1, 0 as Star2, 0 As Star3 FROM PlayerInfo INNER JOIN PlayerFarmStatMultipleTeam ON PlayerInfo.Number = PlayerFarmStatMultipleTeam.Number WHERE PlayerFarmStatMultipleTeam.Number = " . $Player;
						$PlayerStat = $db->query($Query);
						$Team = (int)-1;
						echo "<table class=\"tablesorter STHSPHPFarmPlayerStatPerTeam_Table\"><thead><tr>";
						include "PlayersStatSub.php";
						echo "</tbody></table>";
					}
					?>

					<br /><br />
				</div>

				<div class="tabmain" id="tabmain6">
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
								<th data-priority="1" title="Goals" class="STHSW25">G</th>
								<th data-priority="1" title="Assists" class="STHSW25">A</th>
								<th data-priority="1" title="Points" class="STHSW25">P</th>
								<th data-priority="2" title="Plus/Minus" class="STHSW25">+/-</th>
								<th data-priority="2" title="Penalty Minutes" class="STHSW25">PIM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Minutes for Major Penalty">PIM5</th>
								<th data-priority="2" title="Hits" class="STHSW25">HIT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hits Received">HTT</th>
								<th data-priority="2" title="Shots" class="STHSW25">SHT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Block by others players">OSB</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Miss the net">OSM</th>
								<th data-priority="3" title="Shooting Percentage" class="STHSW55">SHT%</th>
								<th data-priority="3" title="Shots Blocked" class="STHSW25">SB</th>
								<th data-priority="3" title="Minutes Played" class="STHSW35">MP</th>
								<th data-priority="3" title="Average Minutes Played per Game" class="STHSW35">AMG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Goals">PPG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Assists">PPA</th>
								<th data-priority="4" title="Power Play Points" class="STHSW25">PPP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Shots">PPS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Minutes Played">PPM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Short Handed Goals">PKG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Short Handed Assists">PKA</th>
								<th data-priority="5" title="Short Handed Points" class="STHSW25">PKP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Shots">PKS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Minutes Played">PKM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Winning Goals">GW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Tying Goals">GT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Percentage">FO%</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Taken">FOT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Give Aways">GA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Take Aways">TA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Empty Net Goals">EG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hat Tricks">HT</th>
								<th data-priority="4" title="Points per 20 Minutes" class="STHSW25">P/20</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Goals">PSG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Taken">PSS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Won">FW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Lost">FL</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Ties">FT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #1 in a game">S1</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #2 in a game">S2</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #3 in a game">S3</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($PlayerInfo <> Null) {
								if ($PlayerProCareerSumSeasonOnly['SumOfGP'] > 0) {
									echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"45\"><strong>" . $PlayersLang['RegularSeason'] . "</strong></td></tr>\n";
								}
								if (empty($PlayerProCareerSeason) == false) {
									while ($Row = $PlayerProCareerSeason->fetchArray()) {
										/* Loop ProPlayerCareerInfo */
										echo "<tr><td>" . $Row['TeamName'] . "</td>";
										echo "<td>" . $Row['Year'] . "</td>";
										echo "<td>" . $Row['GP'] . "</td>";
										echo "<td>" . $Row['G'] . "</td>";
										echo "<td>" . $Row['A'] . "</td>";
										echo "<td>" . $Row['P'] . "</td>";
										echo "<td>" . $Row['PlusMinus'] . "</td>";
										echo "<td>" . $Row['Pim'] . "</td>";
										echo "<td>" . $Row['Pim5'] . "</td>";
										echo "<td>" . $Row['Hits'] . "</td>";
										echo "<td>" . $Row['HitsTook'] . "</td>";
										echo "<td>" . $Row['Shots'] . "</td>";
										echo "<td>" . $Row['OwnShotsBlock'] . "</td>";
										echo "<td>" . $Row['OwnShotsMissGoal'] . "</td>";
										echo "<td>" . number_Format($Row['ShotsPCT'], 2) . "%</td>";
										echo "<td>" . $Row['ShotsBlock'] . "</td>";
										echo "<td>" . Floor($Row['SecondPlay'] / 60) . "</td>";
										echo "<td>" . number_Format($Row['AMG'], 2) . "</td>";
										echo "<td>" . $Row['PPG'] . "</td>";
										echo "<td>" . $Row['PPA'] . "</td>";
										echo "<td>" . $Row['PPP'] . "</td>";
										echo "<td>" . $Row['PPShots'] . "</td>";
										echo "<td>" . Floor($Row['PPSecondPlay'] / 60) . "</td>";
										echo "<td>" . $Row['PKG'] . "</td>";
										echo "<td>" . $Row['PKA'] . "</td>";
										echo "<td>" . $Row['PKP'] . "</td>";
										echo "<td>" . $Row['PKShots'] . "</td>";
										echo "<td>" . Floor($Row['PKSecondPlay'] / 60) . "</td>";
										echo "<td>" . $Row['GW'] . "</td>";
										echo "<td>" . $Row['GT'] . "</td>";
										echo "<td>" . number_Format($Row['FaceoffPCT'], 2) . "%</td>";
										echo "<td>" . $Row['FaceOffTotal'] . "</td>";
										echo "<td>" . $Row['GiveAway'] . "</td>";
										echo "<td>" . $Row['TakeAway'] . "</td>";
										echo "<td>" . $Row['EmptyNetGoal'] . "</td>";
										echo "<td>" . $Row['HatTrick'] . "</td>";
										echo "<td>" . number_Format($Row['P20'], 2) . "</td>";
										echo "<td>" . $Row['PenalityShotsScore'] . "</td>";
										echo "<td>" . $Row['PenalityShotsTotal'] . "</td>";
										echo "<td>" . $Row['FightW'] . "</td>";
										echo "<td>" . $Row['FightL'] . "</td>";
										echo "<td>" . $Row['FightT'] . "</td>";
										echo "<td>" . $Row['Star1'] . "</td>";
										echo "<td>" . $Row['Star2'] . "</td>";
										echo "<td>" . $Row['Star3'] . "</td>";
										echo "</tr>\n";
									}
								}
								if ($PlayerProStat['GP'] > 0 and $LeagueGeneral['PreSeasonSchedule'] == "False" and $LeagueGeneral['PlayOffStarted'] == "False") {
									#Show Current Year
									echo "<tr><td>" . $PlayerInfo['ProTeamName'] . "</td>";
									echo "<td>" . $LeagueGeneral['LeagueYearOutput'] . "</td>";
									echo "<td>" . $PlayerProStat['GP'] . "</td>";
									echo "<td>" . $PlayerProStat['G'] . "</td>";
									echo "<td>" . $PlayerProStat['A'] . "</td>";
									echo "<td>" . $PlayerProStat['P'] . "</td>";
									echo "<td>" . $PlayerProStat['PlusMinus'] . "</td>";
									echo "<td>" . $PlayerProStat['Pim'] . "</td>";
									echo "<td>" . $PlayerProStat['Pim5'] . "</td>";
									echo "<td>" . $PlayerProStat['Hits'] . "</td>";
									echo "<td>" . $PlayerProStat['HitsTook'] . "</td>";
									echo "<td>" . $PlayerProStat['Shots'] . "</td>";
									echo "<td>" . $PlayerProStat['OwnShotsBlock'] . "</td>";
									echo "<td>" . $PlayerProStat['OwnShotsMissGoal'] . "</td>";
									echo "<td>" . number_Format($PlayerProStat['ShotsPCT'], 2) . "%</td>";	#####	
									echo "<td>" . $PlayerProStat['ShotsBlock'] . "</td>";
									echo "<td>" . Floor($PlayerProStat['SecondPlay'] / 60) . "</td>";
									echo "<td>" . number_Format($PlayerProStat['AMG'], 2) . "</td>";		#####
									echo "<td>" . $PlayerProStat['PPG'] . "</td>";
									echo "<td>" . $PlayerProStat['PPA'] . "</td>";
									echo "<td>" . $PlayerProStat['PPP'] . "</td>";
									echo "<td>" . $PlayerProStat['PPShots'] . "</td>";
									echo "<td>" . Floor($PlayerProStat['PPSecondPlay'] / 60) . "</td>";
									echo "<td>" . $PlayerProStat['PKG'] . "</td>";
									echo "<td>" . $PlayerProStat['PKA'] . "</td>";
									echo "<td>" . $PlayerProStat['PKP'] . "</td>";
									echo "<td>" . $PlayerProStat['PKShots'] . "</td>";
									echo "<td>" . Floor($PlayerProStat['PKSecondPlay'] / 60) . "</td>";
									echo "<td>" . $PlayerProStat['GW'] . "</td>";
									echo "<td>" . $PlayerProStat['GT'] . "</td>";
									echo "<td>" . number_Format($PlayerProStat['FaceoffPCT'], 2) . "%</td>";	 ####
									echo "<td>" . $PlayerProStat['FaceOffTotal'] . "</td>";
									echo "<td>" . $PlayerProStat['GiveAway'] . "</td>";
									echo "<td>" . $PlayerProStat['TakeAway'] . "</td>";
									echo "<td>" . $PlayerProStat['EmptyNetGoal'] . "</td>";
									echo "<td>" . $PlayerProStat['HatTrick'] . "</td>";
									echo "<td>" . number_Format($PlayerProStat['P20'], 2) . "</td>";		####	
									echo "<td>" . $PlayerProStat['PenalityShotsScore'] . "</td>";
									echo "<td>" . $PlayerProStat['PenalityShotsTotal'] . "</td>";
									echo "<td>" . $PlayerProStat['FightW'] . "</td>";
									echo "<td>" . $PlayerProStat['FightL'] . "</td>";
									echo "<td>" . $PlayerProStat['FightT'] . "</td>";
									echo "<td>" . $PlayerProStat['Star1'] . "</td>";
									echo "<td>" . $PlayerProStat['Star2'] . "</td>";
									echo "<td>" . $PlayerProStat['Star3'] . "</td>";
									echo "</tr>\n";

									#Add Current Year in Career Stat
									$PlayerProCareerSumSeasonOnly['SumOfGP'] =  $PlayerProCareerSumSeasonOnly['SumOfGP'] + $PlayerProStat['GP'];
									$PlayerProCareerSumSeasonOnly['SumOfShots'] =  $PlayerProCareerSumSeasonOnly['SumOfShots'] + $PlayerProStat['Shots'];
									$PlayerProCareerSumSeasonOnly['SumOfG'] =  $PlayerProCareerSumSeasonOnly['SumOfG'] + $PlayerProStat['G'];
									$PlayerProCareerSumSeasonOnly['SumOfA'] =  $PlayerProCareerSumSeasonOnly['SumOfA'] + $PlayerProStat['A'];
									$PlayerProCareerSumSeasonOnly['SumOfP'] =  $PlayerProCareerSumSeasonOnly['SumOfP'] + $PlayerProStat['P'];
									$PlayerProCareerSumSeasonOnly['SumOfPlusMinus'] =  $PlayerProCareerSumSeasonOnly['SumOfPlusMinus'] + $PlayerProStat['PlusMinus'];
									$PlayerProCareerSumSeasonOnly['SumOfPim'] =  $PlayerProCareerSumSeasonOnly['SumOfPim'] + $PlayerProStat['Pim'];
									$PlayerProCareerSumSeasonOnly['SumOfPim5'] =  $PlayerProCareerSumSeasonOnly['SumOfPim5'] + $PlayerProStat['Pim5'];
									$PlayerProCareerSumSeasonOnly['SumOfShotsBlock'] =  $PlayerProCareerSumSeasonOnly['SumOfShotsBlock'] + $PlayerProStat['ShotsBlock'];
									$PlayerProCareerSumSeasonOnly['SumOfOwnShotsBlock'] =  $PlayerProCareerSumSeasonOnly['SumOfOwnShotsBlock'] + $PlayerProStat['OwnShotsBlock'];
									$PlayerProCareerSumSeasonOnly['SumOfOwnShotsMissGoal'] =  $PlayerProCareerSumSeasonOnly['SumOfOwnShotsMissGoal'] + $PlayerProStat['OwnShotsMissGoal'];
									$PlayerProCareerSumSeasonOnly['SumOfHits'] =  $PlayerProCareerSumSeasonOnly['SumOfHits'] + $PlayerProStat['Hits'];
									$PlayerProCareerSumSeasonOnly['SumOfHitsTook'] =  $PlayerProCareerSumSeasonOnly['SumOfHitsTook'] + $PlayerProStat['HitsTook'];
									$PlayerProCareerSumSeasonOnly['SumOfGW'] =  $PlayerProCareerSumSeasonOnly['SumOfGW'] + $PlayerProStat['GW'];
									$PlayerProCareerSumSeasonOnly['SumOfGT'] =  $PlayerProCareerSumSeasonOnly['SumOfGT'] + $PlayerProStat['GT'];
									$PlayerProCareerSumSeasonOnly['SumOfFaceOffWon'] =  $PlayerProCareerSumSeasonOnly['SumOfFaceOffWon'] + $PlayerProStat['FaceOffWon'];
									$PlayerProCareerSumSeasonOnly['SumOfFaceOffTotal'] =  $PlayerProCareerSumSeasonOnly['SumOfFaceOffTotal'] + $PlayerProStat['FaceOffTotal'];
									$PlayerProCareerSumSeasonOnly['SumOfPenalityShotsScore'] =  $PlayerProCareerSumSeasonOnly['SumOfPenalityShotsScore'] + $PlayerProStat['PenalityShotsScore'];
									$PlayerProCareerSumSeasonOnly['SumOfPenalityShotsTotal'] =  $PlayerProCareerSumSeasonOnly['SumOfPenalityShotsTotal'] + $PlayerProStat['PenalityShotsTotal'];
									$PlayerProCareerSumSeasonOnly['SumOfEmptyNetGoal'] =  $PlayerProCareerSumSeasonOnly['SumOfEmptyNetGoal'] + $PlayerProStat['EmptyNetGoal'];
									$PlayerProCareerSumSeasonOnly['SumOfSecondPlay'] =  $PlayerProCareerSumSeasonOnly['SumOfSecondPlay'] + $PlayerProStat['SecondPlay'];
									$PlayerProCareerSumSeasonOnly['SumOfHatTrick'] =  $PlayerProCareerSumSeasonOnly['SumOfHatTrick'] + $PlayerProStat['HatTrick'];
									$PlayerProCareerSumSeasonOnly['SumOfPPG'] =  $PlayerProCareerSumSeasonOnly['SumOfPPG'] + $PlayerProStat['PPG'];
									$PlayerProCareerSumSeasonOnly['SumOfPPA'] =  $PlayerProCareerSumSeasonOnly['SumOfPPA'] + $PlayerProStat['PPA'];
									$PlayerProCareerSumSeasonOnly['SumOfPPP'] =  $PlayerProCareerSumSeasonOnly['SumOfPPP'] + $PlayerProStat['PPP'];
									$PlayerProCareerSumSeasonOnly['SumOfPPShots'] =  $PlayerProCareerSumSeasonOnly['SumOfPPShots'] + $PlayerProStat['PPShots'];
									$PlayerProCareerSumSeasonOnly['SumOfPPSecondPlay'] =  $PlayerProCareerSumSeasonOnly['SumOfPPSecondPlay'] + $PlayerProStat['PPSecondPlay'];
									$PlayerProCareerSumSeasonOnly['SumOfPKG'] =  $PlayerProCareerSumSeasonOnly['SumOfPKG'] + $PlayerProStat['PKG'];
									$PlayerProCareerSumSeasonOnly['SumOfPKA'] =  $PlayerProCareerSumSeasonOnly['SumOfPKA'] + $PlayerProStat['PKA'];
									$PlayerProCareerSumSeasonOnly['SumOfPKP'] =  $PlayerProCareerSumSeasonOnly['SumOfPKP'] + $PlayerProStat['PKP'];
									$PlayerProCareerSumSeasonOnly['SumOfPKShots'] =  $PlayerProCareerSumSeasonOnly['SumOfPKShots'] + $PlayerProStat['PKShots'];
									$PlayerProCareerSumSeasonOnly['SumOfPKSecondPlay'] =  $PlayerProCareerSumSeasonOnly['SumOfPKSecondPlay'] + $PlayerProStat['PKSecondPlay'];
									$PlayerProCareerSumSeasonOnly['SumOfGiveAway'] =  $PlayerProCareerSumSeasonOnly['SumOfGiveAway'] + $PlayerProStat['GiveAway'];
									$PlayerProCareerSumSeasonOnly['SumOfTakeAway'] =  $PlayerProCareerSumSeasonOnly['SumOfTakeAway'] + $PlayerProStat['TakeAway'];
									$PlayerProCareerSumSeasonOnly['SumOfPuckPossesionTime'] =  $PlayerProCareerSumSeasonOnly['SumOfPuckPossesionTime'] + $PlayerProStat['PuckPossesionTime'];
									$PlayerProCareerSumSeasonOnly['SumOfFightW'] =  $PlayerProCareerSumSeasonOnly['SumOfFightW'] + $PlayerProStat['FightW'];
									$PlayerProCareerSumSeasonOnly['SumOfFightL'] =  $PlayerProCareerSumSeasonOnly['SumOfFightL'] + $PlayerProStat['FightL'];
									$PlayerProCareerSumSeasonOnly['SumOfFightT'] =  $PlayerProCareerSumSeasonOnly['SumOfFightT'] + $PlayerProStat['FightT'];
									$PlayerProCareerSumSeasonOnly['SumOfStar1'] =  $PlayerProCareerSumSeasonOnly['SumOfStar1'] + $PlayerProStat['Star1'];
									$PlayerProCareerSumSeasonOnly['SumOfStar2'] =  $PlayerProCareerSumSeasonOnly['SumOfStar2'] + $PlayerProStat['Star2'];
									$PlayerProCareerSumSeasonOnly['SumOfStar3'] =  $PlayerProCareerSumSeasonOnly['SumOfStar3'] + $PlayerProStat['Star3'];
								}

								if ($PlayerProCareerSumSeasonOnly['SumOfGP'] > 0) {
									/* Show ProCareer Total for Season */
									echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"2\"><strong>" . $PlayersLang['Total'] . " " . $PlayersLang['RegularSeason'] . "</strong></td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfGP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfG'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfA'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPlusMinus'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPim'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPim5'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfHits'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfHitsTook'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfShots'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfOwnShotsBlock'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfOwnShotsMissGoal'] . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerProCareerSumSeasonOnly['SumOfShots'] > 0) {
										echo sprintf("%.2f%%", ($PlayerProCareerSumSeasonOnly['SumOfG'] / $PlayerProCareerSumSeasonOnly['SumOfShots'] * 100));
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfShotsBlock'] . "</td>";
									echo "<td class=\"staticTD\">" . Floor($PlayerProCareerSumSeasonOnly['SumOfSecondPlay'] / 60) . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerProCareerSumSeasonOnly['SumOfGP'] > 0) {
										echo number_format(($PlayerProCareerSumSeasonOnly['SumOfSecondPlay'] / 60 / $PlayerProCareerSumSeasonOnly['SumOfGP']), 2);
									} else {
										echo "0";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPPG'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPPA'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPPP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPPShots'] . "</td>";
									echo "<td class=\"staticTD\">" . Floor($PlayerProCareerSumSeasonOnly['SumOfPPSecondPlay'] / 60) . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPKG'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPKA'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPKP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPKShots'] . "</td>";
									echo "<td class=\"staticTD\">" . Floor($PlayerProCareerSumSeasonOnly['SumOfPKSecondPlay'] / 60) . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfGW'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfGT'] . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerProCareerSumSeasonOnly['SumOfFaceOffTotal'] > 0) {
										echo sprintf("%.2f%%", ($PlayerProCareerSumSeasonOnly['SumOfFaceOffWon'] / $PlayerProCareerSumSeasonOnly['SumOfFaceOffTotal'] * 100));
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfFaceOffTotal'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfGiveAway'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfTakeAway'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfEmptyNetGoal'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfHatTrick'] . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerProCareerSumSeasonOnly['SumOfSecondPlay'] > 0) {
										echo number_format($PlayerProCareerSumSeasonOnly['SumOfP'] / $PlayerProCareerSumSeasonOnly['SumOfSecondPlay'] * 60 * 20, 2);
									} else {
										echo "0";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPenalityShotsScore'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfPenalityShotsTotal'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfFightW'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfFightL'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfFightT'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfStar1'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfStar2'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumSeasonOnly['SumOfStar3'] . "</td>";
									echo "</tr>\n";
								}

								if ($PlayerProCareerSumPlayoffOnly['SumOfGP'] > 0) {
									echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"45\"><strong>" . $PlayersLang['Playoff'] . "</strong></td></tr>\n";
								}
								if (empty($PlayerProCareerPlayoff) == false) {
									while ($Row = $PlayerProCareerPlayoff->fetchArray()) {
										/* Loop ProPlayerCareerPlayofff */
										echo "<tr><td>" . $Row['TeamName'] . "</td>";
										echo "<td>" . $Row['Year'] . "</td>";
										echo "<td>" . $Row['GP'] . "</td>";
										echo "<td>" . $Row['G'] . "</td>";
										echo "<td>" . $Row['A'] . "</td>";
										echo "<td>" . $Row['P'] . "</td>";
										echo "<td>" . $Row['PlusMinus'] . "</td>";
										echo "<td>" . $Row['Pim'] . "</td>";
										echo "<td>" . $Row['Pim5'] . "</td>";
										echo "<td>" . $Row['Hits'] . "</td>";
										echo "<td>" . $Row['HitsTook'] . "</td>";
										echo "<td>" . $Row['Shots'] . "</td>";
										echo "<td>" . $Row['OwnShotsBlock'] . "</td>";
										echo "<td>" . $Row['OwnShotsMissGoal'] . "</td>";
										echo "<td>" . number_Format($Row['ShotsPCT'], 2) . "%</td>";
										echo "<td>" . $Row['ShotsBlock'] . "</td>";
										echo "<td>" . Floor($Row['SecondPlay'] / 60) . "</td>";
										echo "<td>" . number_Format($Row['AMG'], 2) . "</td>";
										echo "<td>" . $Row['PPG'] . "</td>";
										echo "<td>" . $Row['PPA'] . "</td>";
										echo "<td>" . $Row['PPP'] . "</td>";
										echo "<td>" . $Row['PPShots'] . "</td>";
										echo "<td>" . Floor($Row['PPSecondPlay'] / 60) . "</td>";
										echo "<td>" . $Row['PKG'] . "</td>";
										echo "<td>" . $Row['PKA'] . "</td>";
										echo "<td>" . $Row['PKP'] . "</td>";
										echo "<td>" . $Row['PKShots'] . "</td>";
										echo "<td>" . Floor($Row['PKSecondPlay'] / 60) . "</td>";
										echo "<td>" . $Row['GW'] . "</td>";
										echo "<td>" . $Row['GT'] . "</td>";
										echo "<td>" . number_Format($Row['FaceoffPCT'], 2) . "%</td>";
										echo "<td>" . $Row['FaceOffTotal'] . "</td>";
										echo "<td>" . $Row['GiveAway'] . "</td>";
										echo "<td>" . $Row['TakeAway'] . "</td>";
										echo "<td>" . $Row['EmptyNetGoal'] . "</td>";
										echo "<td>" . $Row['HatTrick'] . "</td>";
										echo "<td>" . number_Format($Row['P20'], 2) . "</td>";
										echo "<td>" . $Row['PenalityShotsScore'] . "</td>";
										echo "<td>" . $Row['PenalityShotsTotal'] . "</td>";
										echo "<td>" . $Row['FightW'] . "</td>";
										echo "<td>" . $Row['FightL'] . "</td>";
										echo "<td>" . $Row['FightT'] . "</td>";
										echo "<td>" . $Row['Star1'] . "</td>";
										echo "<td>" . $Row['Star2'] . "</td>";
										echo "<td>" . $Row['Star3'] . "</td>";
										echo "</tr>\n";
									}
								}

								if ($PlayerProStat['GP'] > 0 and $LeagueGeneral['PreSeasonSchedule'] == "False" and $LeagueGeneral['PlayOffStarted'] == "True") {
									#Show Current Year
									echo "<tr><td>" . $PlayerInfo['ProTeamName'] . "</td>";
									echo "<td>" . $LeagueGeneral['LeagueYearOutput'] . "</td>";
									echo "<td>" . $PlayerProStat['GP'] . "</td>";
									echo "<td>" . $PlayerProStat['G'] . "</td>";
									echo "<td>" . $PlayerProStat['A'] . "</td>";
									echo "<td>" . $PlayerProStat['P'] . "</td>";
									echo "<td>" . $PlayerProStat['PlusMinus'] . "</td>";
									echo "<td>" . $PlayerProStat['Pim'] . "</td>";
									echo "<td>" . $PlayerProStat['Pim5'] . "</td>";
									echo "<td>" . $PlayerProStat['Hits'] . "</td>";
									echo "<td>" . $PlayerProStat['HitsTook'] . "</td>";
									echo "<td>" . $PlayerProStat['Shots'] . "</td>";
									echo "<td>" . $PlayerProStat['OwnShotsBlock'] . "</td>";
									echo "<td>" . $PlayerProStat['OwnShotsMissGoal'] . "</td>";
									echo "<td>" . number_Format($PlayerProStat['ShotsPCT'], 2) . "%</td>";	#####	
									echo "<td>" . $PlayerProStat['ShotsBlock'] . "</td>";
									echo "<td>" . Floor($PlayerProStat['SecondPlay'] / 60) . "</td>";
									echo "<td>" . number_Format($PlayerProStat['AMG'], 2) . "</td>";		#####
									echo "<td>" . $PlayerProStat['PPG'] . "</td>";
									echo "<td>" . $PlayerProStat['PPA'] . "</td>";
									echo "<td>" . $PlayerProStat['PPP'] . "</td>";
									echo "<td>" . $PlayerProStat['PPShots'] . "</td>";
									echo "<td>" . Floor($PlayerProStat['PPSecondPlay'] / 60) . "</td>";
									echo "<td>" . $PlayerProStat['PKG'] . "</td>";
									echo "<td>" . $PlayerProStat['PKA'] . "</td>";
									echo "<td>" . $PlayerProStat['PKP'] . "</td>";
									echo "<td>" . $PlayerProStat['PKShots'] . "</td>";
									echo "<td>" . Floor($PlayerProStat['PKSecondPlay'] / 60) . "</td>";
									echo "<td>" . $PlayerProStat['GW'] . "</td>";
									echo "<td>" . $PlayerProStat['GT'] . "</td>";
									echo "<td>" . number_Format($PlayerProStat['FaceoffPCT'], 2) . "%</td>";	 ####
									echo "<td>" . $PlayerProStat['FaceOffTotal'] . "</td>";
									echo "<td>" . $PlayerProStat['GiveAway'] . "</td>";
									echo "<td>" . $PlayerProStat['TakeAway'] . "</td>";
									echo "<td>" . $PlayerProStat['EmptyNetGoal'] . "</td>";
									echo "<td>" . $PlayerProStat['HatTrick'] . "</td>";
									echo "<td>" . number_Format($PlayerProStat['P20'], 2) . "</td>";		####	
									echo "<td>" . $PlayerProStat['PenalityShotsScore'] . "</td>";
									echo "<td>" . $PlayerProStat['PenalityShotsTotal'] . "</td>";
									echo "<td>" . $PlayerProStat['FightW'] . "</td>";
									echo "<td>" . $PlayerProStat['FightL'] . "</td>";
									echo "<td>" . $PlayerProStat['FightT'] . "</td>";
									echo "<td>" . $PlayerProStat['Star1'] . "</td>";
									echo "<td>" . $PlayerProStat['Star2'] . "</td>";
									echo "<td>" . $PlayerProStat['Star3'] . "</td>";
									echo "</tr>\n";

									#Add Current Year in Career Stat
									$PlayerProCareerSumPlayoffOnly['SumOfGP'] =  $PlayerProCareerSumPlayoffOnly['SumOfGP'] + $PlayerProStat['GP'];
									$PlayerProCareerSumPlayoffOnly['SumOfShots'] =  $PlayerProCareerSumPlayoffOnly['SumOfShots'] + $PlayerProStat['Shots'];
									$PlayerProCareerSumPlayoffOnly['SumOfG'] =  $PlayerProCareerSumPlayoffOnly['SumOfG'] + $PlayerProStat['G'];
									$PlayerProCareerSumPlayoffOnly['SumOfA'] =  $PlayerProCareerSumPlayoffOnly['SumOfA'] + $PlayerProStat['A'];
									$PlayerProCareerSumPlayoffOnly['SumOfP'] =  $PlayerProCareerSumPlayoffOnly['SumOfP'] + $PlayerProStat['P'];
									$PlayerProCareerSumPlayoffOnly['SumOfPlusMinus'] =  $PlayerProCareerSumPlayoffOnly['SumOfPlusMinus'] + $PlayerProStat['PlusMinus'];
									$PlayerProCareerSumPlayoffOnly['SumOfPim'] =  $PlayerProCareerSumPlayoffOnly['SumOfPim'] + $PlayerProStat['Pim'];
									$PlayerProCareerSumPlayoffOnly['SumOfPim5'] =  $PlayerProCareerSumPlayoffOnly['SumOfPim5'] + $PlayerProStat['Pim5'];
									$PlayerProCareerSumPlayoffOnly['SumOfShotsBlock'] =  $PlayerProCareerSumPlayoffOnly['SumOfShotsBlock'] + $PlayerProStat['ShotsBlock'];
									$PlayerProCareerSumPlayoffOnly['SumOfOwnShotsBlock'] =  $PlayerProCareerSumPlayoffOnly['SumOfOwnShotsBlock'] + $PlayerProStat['OwnShotsBlock'];
									$PlayerProCareerSumPlayoffOnly['SumOfOwnShotsMissGoal'] =  $PlayerProCareerSumPlayoffOnly['SumOfOwnShotsMissGoal'] + $PlayerProStat['OwnShotsMissGoal'];
									$PlayerProCareerSumPlayoffOnly['SumOfHits'] =  $PlayerProCareerSumPlayoffOnly['SumOfHits'] + $PlayerProStat['Hits'];
									$PlayerProCareerSumPlayoffOnly['SumOfHitsTook'] =  $PlayerProCareerSumPlayoffOnly['SumOfHitsTook'] + $PlayerProStat['HitsTook'];
									$PlayerProCareerSumPlayoffOnly['SumOfGW'] =  $PlayerProCareerSumPlayoffOnly['SumOfGW'] + $PlayerProStat['GW'];
									$PlayerProCareerSumPlayoffOnly['SumOfGT'] =  $PlayerProCareerSumPlayoffOnly['SumOfGT'] + $PlayerProStat['GT'];
									$PlayerProCareerSumPlayoffOnly['SumOfFaceOffWon'] =  $PlayerProCareerSumPlayoffOnly['SumOfFaceOffWon'] + $PlayerProStat['FaceOffWon'];
									$PlayerProCareerSumPlayoffOnly['SumOfFaceOffTotal'] =  $PlayerProCareerSumPlayoffOnly['SumOfFaceOffTotal'] + $PlayerProStat['FaceOffTotal'];
									$PlayerProCareerSumPlayoffOnly['SumOfPenalityShotsScore'] =  $PlayerProCareerSumPlayoffOnly['SumOfPenalityShotsScore'] + $PlayerProStat['PenalityShotsScore'];
									$PlayerProCareerSumPlayoffOnly['SumOfPenalityShotsTotal'] =  $PlayerProCareerSumPlayoffOnly['SumOfPenalityShotsTotal'] + $PlayerProStat['PenalityShotsTotal'];
									$PlayerProCareerSumPlayoffOnly['SumOfEmptyNetGoal'] =  $PlayerProCareerSumPlayoffOnly['SumOfEmptyNetGoal'] + $PlayerProStat['EmptyNetGoal'];
									$PlayerProCareerSumPlayoffOnly['SumOfSecondPlay'] =  $PlayerProCareerSumPlayoffOnly['SumOfSecondPlay'] + $PlayerProStat['SecondPlay'];
									$PlayerProCareerSumPlayoffOnly['SumOfHatTrick'] =  $PlayerProCareerSumPlayoffOnly['SumOfHatTrick'] + $PlayerProStat['HatTrick'];
									$PlayerProCareerSumPlayoffOnly['SumOfPPG'] =  $PlayerProCareerSumPlayoffOnly['SumOfPPG'] + $PlayerProStat['PPG'];
									$PlayerProCareerSumPlayoffOnly['SumOfPPA'] =  $PlayerProCareerSumPlayoffOnly['SumOfPPA'] + $PlayerProStat['PPA'];
									$PlayerProCareerSumPlayoffOnly['SumOfPPP'] =  $PlayerProCareerSumPlayoffOnly['SumOfPPP'] + $PlayerProStat['PPP'];
									$PlayerProCareerSumPlayoffOnly['SumOfPPShots'] =  $PlayerProCareerSumPlayoffOnly['SumOfPPShots'] + $PlayerProStat['PPShots'];
									$PlayerProCareerSumPlayoffOnly['SumOfPPSecondPlay'] =  $PlayerProCareerSumPlayoffOnly['SumOfPPSecondPlay'] + $PlayerProStat['PPSecondPlay'];
									$PlayerProCareerSumPlayoffOnly['SumOfPKG'] =  $PlayerProCareerSumPlayoffOnly['SumOfPKG'] + $PlayerProStat['PKG'];
									$PlayerProCareerSumPlayoffOnly['SumOfPKA'] =  $PlayerProCareerSumPlayoffOnly['SumOfPKA'] + $PlayerProStat['PKA'];
									$PlayerProCareerSumPlayoffOnly['SumOfPKP'] =  $PlayerProCareerSumPlayoffOnly['SumOfPKP'] + $PlayerProStat['PKP'];
									$PlayerProCareerSumPlayoffOnly['SumOfPKShots'] =  $PlayerProCareerSumPlayoffOnly['SumOfPKShots'] + $PlayerProStat['PKShots'];
									$PlayerProCareerSumPlayoffOnly['SumOfPKSecondPlay'] =  $PlayerProCareerSumPlayoffOnly['SumOfPKSecondPlay'] + $PlayerProStat['PKSecondPlay'];
									$PlayerProCareerSumPlayoffOnly['SumOfGiveAway'] =  $PlayerProCareerSumPlayoffOnly['SumOfGiveAway'] + $PlayerProStat['GiveAway'];
									$PlayerProCareerSumPlayoffOnly['SumOfTakeAway'] =  $PlayerProCareerSumPlayoffOnly['SumOfTakeAway'] + $PlayerProStat['TakeAway'];
									$PlayerProCareerSumPlayoffOnly['SumOfPuckPossesionTime'] =  $PlayerProCareerSumPlayoffOnly['SumOfPuckPossesionTime'] + $PlayerProStat['PuckPossesionTime'];
									$PlayerProCareerSumPlayoffOnly['SumOfFightW'] =  $PlayerProCareerSumPlayoffOnly['SumOfFightW'] + $PlayerProStat['FightW'];
									$PlayerProCareerSumPlayoffOnly['SumOfFightL'] =  $PlayerProCareerSumPlayoffOnly['SumOfFightL'] + $PlayerProStat['FightL'];
									$PlayerProCareerSumPlayoffOnly['SumOfFightT'] =  $PlayerProCareerSumPlayoffOnly['SumOfFightT'] + $PlayerProStat['FightT'];
									$PlayerProCareerSumPlayoffOnly['SumOfStar1'] =  $PlayerProCareerSumPlayoffOnly['SumOfStar1'] + $PlayerProStat['Star1'];
									$PlayerProCareerSumPlayoffOnly['SumOfStar2'] =  $PlayerProCareerSumPlayoffOnly['SumOfStar2'] + $PlayerProStat['Star2'];
									$PlayerProCareerSumPlayoffOnly['SumOfStar3'] =  $PlayerProCareerSumPlayoffOnly['SumOfStar3'] + $PlayerProStat['Star3'];
								}

								if ($PlayerProCareerSumPlayoffOnly['SumOfGP'] > 0) {
									/* Show ProCareer Total for Playoff */
									echo "<tr class=\"static\"><td colspan=\"2\"><strong>" . $PlayersLang['Total'] . " " . $PlayersLang['Playoff'] . "</strong></td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfGP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfG'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfA'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPlusMinus'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPim'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPim5'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfHits'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfHitsTook'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfShots'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfOwnShotsBlock'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfOwnShotsMissGoal'] . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerProCareerSumPlayoffOnly['SumOfShots'] > 0) {
										echo sprintf("%.2f%%", ($PlayerProCareerSumPlayoffOnly['SumOfG'] / $PlayerProCareerSumPlayoffOnly['SumOfShots'] * 100));
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfShotsBlock'] . "</td>";
									echo "<td class=\"staticTD\">" . Floor($PlayerProCareerSumPlayoffOnly['SumOfSecondPlay'] / 60) . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerProCareerSumPlayoffOnly['SumOfGP'] > 0) {
										echo number_format(($PlayerProCareerSumPlayoffOnly['SumOfSecondPlay'] / 60 / $PlayerProCareerSumPlayoffOnly['SumOfGP']), 2);
									} else {
										echo "0";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPPG'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPPA'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPPP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPPShots'] . "</td>";
									echo "<td class=\"staticTD\">" . Floor($PlayerProCareerSumPlayoffOnly['SumOfPPSecondPlay'] / 60) . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPKG'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPKA'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPKP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPKShots'] . "</td>";
									echo "<td class=\"staticTD\">" . Floor($PlayerProCareerSumPlayoffOnly['SumOfPKSecondPlay'] / 60) . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfGW'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfGT'] . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerProCareerSumPlayoffOnly['SumOfFaceOffTotal'] > 0) {
										echo sprintf("%.2f%%", ($PlayerProCareerSumPlayoffOnly['SumOfFaceOffWon'] / $PlayerProCareerSumPlayoffOnly['SumOfFaceOffTotal'] * 100));
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfFaceOffTotal'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfGiveAway'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfTakeAway'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfEmptyNetGoal'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfHatTrick'] . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerProCareerSumPlayoffOnly['SumOfSecondPlay'] > 0) {
										echo number_format($PlayerProCareerSumPlayoffOnly['SumOfP'] / $PlayerProCareerSumPlayoffOnly['SumOfSecondPlay'] * 60 * 20, 2);
									} else {
										echo "0";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPenalityShotsScore'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfPenalityShotsTotal'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfFightW'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfFightL'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfFightT'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfStar1'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfStar2'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerProCareerSumPlayoffOnly['SumOfStar3'] . "</td>";
									echo "</tr>\n";
								}
							}
							?>
						</tbody>
					</table>
					<br />
				</div>

				<div class="tabmain" id="tabmain7">
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
								<th data-priority="1" title="Goals" class="STHSW25">G</th>
								<th data-priority="1" title="Assists" class="STHSW25">A</th>
								<th data-priority="1" title="Points" class="STHSW25">P</th>
								<th data-priority="2" title="Plus/Minus" class="STHSW25">+/-</th>
								<th data-priority="2" title="Penalty Minutes" class="STHSW25">PIM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Minutes for Major Penalty">PIM5</th>
								<th data-priority="2" title="Hits" class="STHSW25">HIT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hits Received">HTT</th>
								<th data-priority="2" title="Shots" class="STHSW25">SHT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Block by others players">OSB</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Own Shots Miss the net">OSM</th>
								<th data-priority="3" title="Shooting Percentage" class="STHSW55">SHT%</th>
								<th data-priority="3" title="Shots Blocked" class="STHSW25">SB</th>
								<th data-priority="3" title="Minutes Played" class="STHSW35">MP</th>
								<th data-priority="3" title="Average Minutes Played per Game" class="STHSW35">AMG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Goals">PPG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Assists">PPA</th>
								<th data-priority="4" title="Power Play Points" class="STHSW25">PPP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Shots">PPS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Power Play Minutes Played">PPM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Short Handed Goals">PKG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Short Handed Assists">PKA</th>
								<th data-priority="5" title="Short Handed Points" class="STHSW25">PKP</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Shots">PKS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Kill Minutes Played">PKM</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Winning Goals">GW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Game Tying Goals">GT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Percentage">FO%</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Face offs Taken">FOT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Give Aways">GA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Take Aways">TA</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Empty Net Goals">EG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Hat Tricks">HT</th>
								<th data-priority="4" title="Points per 20 Minutes" class="STHSW25">P/20</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Goals">PSG</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Penalty Shots Taken">PSS</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Won">FW</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Lost">FL</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Fight Ties">FT</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #1 in a game">S1</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #2 in a game">S2</th>
								<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time players was star #3 in a game">S3</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($PlayerInfo <> Null) {
								if ($PlayerFarmCareerSumSeasonOnly['SumOfGP'] > 0) {
									echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"45\"><strong>" . $PlayersLang['RegularSeason'] . "</strong></td></tr>\n";
								}
								if (empty($PlayerFarmCareerSeason) == false) {
									while ($Row = $PlayerFarmCareerSeason->fetchArray()) {
										/* Loop FarmPlayerCareerInfo */
										echo "<tr><td>" . $Row['TeamName'] . "</td>";
										echo "<td>" . $Row['Year'] . "</td>";
										echo "<td>" . $Row['GP'] . "</td>";
										echo "<td>" . $Row['G'] . "</td>";
										echo "<td>" . $Row['A'] . "</td>";
										echo "<td>" . $Row['P'] . "</td>";
										echo "<td>" . $Row['PlusMinus'] . "</td>";
										echo "<td>" . $Row['Pim'] . "</td>";
										echo "<td>" . $Row['Pim5'] . "</td>";
										echo "<td>" . $Row['Hits'] . "</td>";
										echo "<td>" . $Row['HitsTook'] . "</td>";
										echo "<td>" . $Row['Shots'] . "</td>";
										echo "<td>" . $Row['OwnShotsBlock'] . "</td>";
										echo "<td>" . $Row['OwnShotsMissGoal'] . "</td>";
										echo "<td>" . number_Format($Row['ShotsPCT'], 2) . "%</td>";
										echo "<td>" . $Row['ShotsBlock'] . "</td>";
										echo "<td>" . Floor($Row['SecondPlay'] / 60) . "</td>";
										echo "<td>" . number_Format($Row['AMG'], 2) . "</td>";
										echo "<td>" . $Row['PPG'] . "</td>";
										echo "<td>" . $Row['PPA'] . "</td>";
										echo "<td>" . $Row['PPP'] . "</td>";
										echo "<td>" . $Row['PPShots'] . "</td>";
										echo "<td>" . Floor($Row['PPSecondPlay'] / 60) . "</td>";
										echo "<td>" . $Row['PKG'] . "</td>";
										echo "<td>" . $Row['PKA'] . "</td>";
										echo "<td>" . $Row['PKP'] . "</td>";
										echo "<td>" . $Row['PKShots'] . "</td>";
										echo "<td>" . Floor($Row['PKSecondPlay'] / 60) . "</td>";
										echo "<td>" . $Row['GW'] . "</td>";
										echo "<td>" . $Row['GT'] . "</td>";
										echo "<td>" . number_Format($Row['FaceoffPCT'], 2) . "%</td>";
										echo "<td>" . $Row['FaceOffTotal'] . "</td>";
										echo "<td>" . $Row['GiveAway'] . "</td>";
										echo "<td>" . $Row['TakeAway'] . "</td>";
										echo "<td>" . $Row['EmptyNetGoal'] . "</td>";
										echo "<td>" . $Row['HatTrick'] . "</td>";
										echo "<td>" . number_Format($Row['P20'], 2) . "</td>";
										echo "<td>" . $Row['PenalityShotsScore'] . "</td>";
										echo "<td>" . $Row['PenalityShotsTotal'] . "</td>";
										echo "<td>" . $Row['FightW'] . "</td>";
										echo "<td>" . $Row['FightL'] . "</td>";
										echo "<td>" . $Row['FightT'] . "</td>";
										echo "<td>" . $Row['Star1'] . "</td>";
										echo "<td>" . $Row['Star2'] . "</td>";
										echo "<td>" . $Row['Star3'] . "</td>";
										echo "</tr>\n";
									}
								}

								if ($PlayerFarmStat['GP'] > 0 and $LeagueGeneral['PreSeasonSchedule'] == "False" and $LeagueGeneral['PlayOffStarted'] == "False") {
									#Show Current Year
									echo "<tr><td>" . $PlayerInfo['ProTeamName'] . "</td>";
									echo "<td>" . $LeagueGeneral['LeagueYearOutput'] . "</td>";
									echo "<td>" . $PlayerFarmStat['GP'] . "</td>";
									echo "<td>" . $PlayerFarmStat['G'] . "</td>";
									echo "<td>" . $PlayerFarmStat['A'] . "</td>";
									echo "<td>" . $PlayerFarmStat['P'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PlusMinus'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Pim'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Pim5'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Hits'] . "</td>";
									echo "<td>" . $PlayerFarmStat['HitsTook'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Shots'] . "</td>";
									echo "<td>" . $PlayerFarmStat['OwnShotsBlock'] . "</td>";
									echo "<td>" . $PlayerFarmStat['OwnShotsMissGoal'] . "</td>";
									echo "<td>" . number_Format($PlayerFarmStat['ShotsPCT'], 2) . "%</td>";	#####	
									echo "<td>" . $PlayerFarmStat['ShotsBlock'] . "</td>";
									echo "<td>" . Floor($PlayerFarmStat['SecondPlay'] / 60) . "</td>";
									echo "<td>" . number_Format($PlayerFarmStat['AMG'], 2) . "</td>";		#####
									echo "<td>" . $PlayerFarmStat['PPG'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PPA'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PPP'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PPShots'] . "</td>";
									echo "<td>" . Floor($PlayerFarmStat['PPSecondPlay'] / 60) . "</td>";
									echo "<td>" . $PlayerFarmStat['PKG'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PKA'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PKP'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PKShots'] . "</td>";
									echo "<td>" . Floor($PlayerFarmStat['PKSecondPlay'] / 60) . "</td>";
									echo "<td>" . $PlayerFarmStat['GW'] . "</td>";
									echo "<td>" . $PlayerFarmStat['GT'] . "</td>";
									echo "<td>" . number_Format($PlayerFarmStat['FaceoffPCT'], 2) . "%</td>";	 ####
									echo "<td>" . $PlayerFarmStat['FaceOffTotal'] . "</td>";
									echo "<td>" . $PlayerFarmStat['GiveAway'] . "</td>";
									echo "<td>" . $PlayerFarmStat['TakeAway'] . "</td>";
									echo "<td>" . $PlayerFarmStat['EmptyNetGoal'] . "</td>";
									echo "<td>" . $PlayerFarmStat['HatTrick'] . "</td>";
									echo "<td>" . number_Format($PlayerFarmStat['P20'], 2) . "</td>";		####	
									echo "<td>" . $PlayerFarmStat['PenalityShotsScore'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PenalityShotsTotal'] . "</td>";
									echo "<td>" . $PlayerFarmStat['FightW'] . "</td>";
									echo "<td>" . $PlayerFarmStat['FightL'] . "</td>";
									echo "<td>" . $PlayerFarmStat['FightT'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Star1'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Star2'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Star3'] . "</td>";
									echo "</tr>\n";

									#Add Current Year in Career Stat
									$PlayerFarmCareerSumSeasonOnly['SumOfGP'] =  $PlayerFarmCareerSumSeasonOnly['SumOfGP'] + $PlayerFarmStat['GP'];
									$PlayerFarmCareerSumSeasonOnly['SumOfShots'] =  $PlayerFarmCareerSumSeasonOnly['SumOfShots'] + $PlayerFarmStat['Shots'];
									$PlayerFarmCareerSumSeasonOnly['SumOfG'] =  $PlayerFarmCareerSumSeasonOnly['SumOfG'] + $PlayerFarmStat['G'];
									$PlayerFarmCareerSumSeasonOnly['SumOfA'] =  $PlayerFarmCareerSumSeasonOnly['SumOfA'] + $PlayerFarmStat['A'];
									$PlayerFarmCareerSumSeasonOnly['SumOfP'] =  $PlayerFarmCareerSumSeasonOnly['SumOfP'] + $PlayerFarmStat['P'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPlusMinus'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPlusMinus'] + $PlayerFarmStat['PlusMinus'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPim'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPim'] + $PlayerFarmStat['Pim'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPim5'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPim5'] + $PlayerFarmStat['Pim5'];
									$PlayerFarmCareerSumSeasonOnly['SumOfShotsBlock'] =  $PlayerFarmCareerSumSeasonOnly['SumOfShotsBlock'] + $PlayerFarmStat['ShotsBlock'];
									$PlayerFarmCareerSumSeasonOnly['SumOfOwnShotsBlock'] =  $PlayerFarmCareerSumSeasonOnly['SumOfOwnShotsBlock'] + $PlayerFarmStat['OwnShotsBlock'];
									$PlayerFarmCareerSumSeasonOnly['SumOfOwnShotsMissGoal'] =  $PlayerFarmCareerSumSeasonOnly['SumOfOwnShotsMissGoal'] + $PlayerFarmStat['OwnShotsMissGoal'];
									$PlayerFarmCareerSumSeasonOnly['SumOfHits'] =  $PlayerFarmCareerSumSeasonOnly['SumOfHits'] + $PlayerFarmStat['Hits'];
									$PlayerFarmCareerSumSeasonOnly['SumOfHitsTook'] =  $PlayerFarmCareerSumSeasonOnly['SumOfHitsTook'] + $PlayerFarmStat['HitsTook'];
									$PlayerFarmCareerSumSeasonOnly['SumOfGW'] =  $PlayerFarmCareerSumSeasonOnly['SumOfGW'] + $PlayerFarmStat['GW'];
									$PlayerFarmCareerSumSeasonOnly['SumOfGT'] =  $PlayerFarmCareerSumSeasonOnly['SumOfGT'] + $PlayerFarmStat['GT'];
									$PlayerFarmCareerSumSeasonOnly['SumOfFaceOffWon'] =  $PlayerFarmCareerSumSeasonOnly['SumOfFaceOffWon'] + $PlayerFarmStat['FaceOffWon'];
									$PlayerFarmCareerSumSeasonOnly['SumOfFaceOffTotal'] =  $PlayerFarmCareerSumSeasonOnly['SumOfFaceOffTotal'] + $PlayerFarmStat['FaceOffTotal'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPenalityShotsScore'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPenalityShotsScore'] + $PlayerFarmStat['PenalityShotsScore'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPenalityShotsTotal'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPenalityShotsTotal'] + $PlayerFarmStat['PenalityShotsTotal'];
									$PlayerFarmCareerSumSeasonOnly['SumOfEmptyNetGoal'] =  $PlayerFarmCareerSumSeasonOnly['SumOfEmptyNetGoal'] + $PlayerFarmStat['EmptyNetGoal'];
									$PlayerFarmCareerSumSeasonOnly['SumOfSecondPlay'] =  $PlayerFarmCareerSumSeasonOnly['SumOfSecondPlay'] + $PlayerFarmStat['SecondPlay'];
									$PlayerFarmCareerSumSeasonOnly['SumOfHatTrick'] =  $PlayerFarmCareerSumSeasonOnly['SumOfHatTrick'] + $PlayerFarmStat['HatTrick'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPPG'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPPG'] + $PlayerFarmStat['PPG'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPPA'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPPA'] + $PlayerFarmStat['PPA'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPPP'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPPP'] + $PlayerFarmStat['PPP'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPPShots'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPPShots'] + $PlayerFarmStat['PPShots'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPPSecondPlay'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPPSecondPlay'] + $PlayerFarmStat['PPSecondPlay'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPKG'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPKG'] + $PlayerFarmStat['PKG'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPKA'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPKA'] + $PlayerFarmStat['PKA'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPKP'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPKP'] + $PlayerFarmStat['PKP'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPKShots'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPKShots'] + $PlayerFarmStat['PKShots'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPKSecondPlay'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPKSecondPlay'] + $PlayerFarmStat['PKSecondPlay'];
									$PlayerFarmCareerSumSeasonOnly['SumOfGiveAway'] =  $PlayerFarmCareerSumSeasonOnly['SumOfGiveAway'] + $PlayerFarmStat['GiveAway'];
									$PlayerFarmCareerSumSeasonOnly['SumOfTakeAway'] =  $PlayerFarmCareerSumSeasonOnly['SumOfTakeAway'] + $PlayerFarmStat['TakeAway'];
									$PlayerFarmCareerSumSeasonOnly['SumOfPuckPossesionTime'] =  $PlayerFarmCareerSumSeasonOnly['SumOfPuckPossesionTime'] + $PlayerFarmStat['PuckPossesionTime'];
									$PlayerFarmCareerSumSeasonOnly['SumOfFightW'] =  $PlayerFarmCareerSumSeasonOnly['SumOfFightW'] + $PlayerFarmStat['FightW'];
									$PlayerFarmCareerSumSeasonOnly['SumOfFightL'] =  $PlayerFarmCareerSumSeasonOnly['SumOfFightL'] + $PlayerFarmStat['FightL'];
									$PlayerFarmCareerSumSeasonOnly['SumOfFightT'] =  $PlayerFarmCareerSumSeasonOnly['SumOfFightT'] + $PlayerFarmStat['FightT'];
									$PlayerFarmCareerSumSeasonOnly['SumOfStar1'] =  $PlayerFarmCareerSumSeasonOnly['SumOfStar1'] + $PlayerFarmStat['Star1'];
									$PlayerFarmCareerSumSeasonOnly['SumOfStar2'] =  $PlayerFarmCareerSumSeasonOnly['SumOfStar2'] + $PlayerFarmStat['Star2'];
									$PlayerFarmCareerSumSeasonOnly['SumOfStar3'] =  $PlayerFarmCareerSumSeasonOnly['SumOfStar3'] + $PlayerFarmStat['Star3'];
								}

								if ($PlayerFarmCareerSumSeasonOnly['SumOfGP'] > 0) {
									/* Show FarmCareer Total for Season */
									echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"2\"><strong>" . $PlayersLang['Total'] . " " . $PlayersLang['RegularSeason'] . "</strong></td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfGP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfG'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfA'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPlusMinus'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPim'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPim5'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfHits'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfHitsTook'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfShots'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfOwnShotsBlock'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfOwnShotsMissGoal'] . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerFarmCareerSumSeasonOnly['SumOfShots'] > 0) {
										echo sprintf("%.2f%%", ($PlayerFarmCareerSumSeasonOnly['SumOfG'] / $PlayerFarmCareerSumSeasonOnly['SumOfShots'] * 100));
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfShotsBlock'] . "</td>";
									echo "<td class=\"staticTD\">" . Floor($PlayerFarmCareerSumSeasonOnly['SumOfSecondPlay'] / 60) . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerFarmCareerSumSeasonOnly['SumOfGP'] > 0) {
										echo number_format(($PlayerFarmCareerSumSeasonOnly['SumOfSecondPlay'] / 60 / $PlayerFarmCareerSumSeasonOnly['SumOfGP']), 2);
									} else {
										echo "0";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPPG'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPPA'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPPP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPPShots'] . "</td>";
									echo "<td class=\"staticTD\">" . Floor($PlayerFarmCareerSumSeasonOnly['SumOfPPSecondPlay'] / 60) . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPKG'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPKA'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPKP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPKShots'] . "</td>";
									echo "<td class=\"staticTD\">" . Floor($PlayerFarmCareerSumSeasonOnly['SumOfPKSecondPlay'] / 60) . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfGW'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfGT'] . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerFarmCareerSumSeasonOnly['SumOfFaceOffTotal'] > 0) {
										echo sprintf("%.2f%%", ($PlayerFarmCareerSumSeasonOnly['SumOfFaceOffWon'] / $PlayerFarmCareerSumSeasonOnly['SumOfFaceOffTotal'] * 100));
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfFaceOffTotal'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfGiveAway'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfTakeAway'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfEmptyNetGoal'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfHatTrick'] . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerFarmCareerSumSeasonOnly['SumOfSecondPlay'] > 0) {
										echo number_format($PlayerFarmCareerSumSeasonOnly['SumOfP'] / $PlayerFarmCareerSumSeasonOnly['SumOfSecondPlay'] * 60 * 20, 2);
									} else {
										echo "0";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPenalityShotsScore'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfPenalityShotsTotal'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfFightW'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfFightL'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfFightT'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfStar1'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfStar2'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumSeasonOnly['SumOfStar3'] . "</td>";
									echo "</tr>\n";
								}

								if ($PlayerFarmCareerSumPlayoffOnly['SumOfGP'] > 0) {
									echo "<tr class=\"static\"><td class=\"staticTD\" colspan=\"45\"><strong>" . $PlayersLang['Playoff'] . "</strong></td></tr>\n";
								}
								if (empty($PlayerFarmCareerPlayoff) == false) {
									while ($Row = $PlayerFarmCareerPlayoff->fetchArray()) {
										/* Loop FarmPlayerCareerPlayofff */
										echo "<tr><td>" . $Row['TeamName'] . "</td>";
										echo "<td>" . $Row['Year'] . "</td>";
										echo "<td>" . $Row['GP'] . "</td>";
										echo "<td>" . $Row['G'] . "</td>";
										echo "<td>" . $Row['A'] . "</td>";
										echo "<td>" . $Row['P'] . "</td>";
										echo "<td>" . $Row['PlusMinus'] . "</td>";
										echo "<td>" . $Row['Pim'] . "</td>";
										echo "<td>" . $Row['Pim5'] . "</td>";
										echo "<td>" . $Row['Hits'] . "</td>";
										echo "<td>" . $Row['HitsTook'] . "</td>";
										echo "<td>" . $Row['Shots'] . "</td>";
										echo "<td>" . $Row['OwnShotsBlock'] . "</td>";
										echo "<td>" . $Row['OwnShotsMissGoal'] . "</td>";
										echo "<td>" . number_Format($Row['ShotsPCT'], 2) . "%</td>";
										echo "<td>" . $Row['ShotsBlock'] . "</td>";
										echo "<td>" . Floor($Row['SecondPlay'] / 60) . "</td>";
										echo "<td>" . number_Format($Row['AMG'], 2) . "</td>";
										echo "<td>" . $Row['PPG'] . "</td>";
										echo "<td>" . $Row['PPA'] . "</td>";
										echo "<td>" . $Row['PPP'] . "</td>";
										echo "<td>" . $Row['PPShots'] . "</td>";
										echo "<td>" . Floor($Row['PPSecondPlay'] / 60) . "</td>";
										echo "<td>" . $Row['PKG'] . "</td>";
										echo "<td>" . $Row['PKA'] . "</td>";
										echo "<td>" . $Row['PKP'] . "</td>";
										echo "<td>" . $Row['PKShots'] . "</td>";
										echo "<td>" . Floor($Row['PKSecondPlay'] / 60) . "</td>";
										echo "<td>" . $Row['GW'] . "</td>";
										echo "<td>" . $Row['GT'] . "</td>";
										echo "<td>" . number_Format($Row['FaceoffPCT'], 2) . "%</td>";
										echo "<td>" . $Row['FaceOffTotal'] . "</td>";
										echo "<td>" . $Row['GiveAway'] . "</td>";
										echo "<td>" . $Row['TakeAway'] . "</td>";
										echo "<td>" . $Row['EmptyNetGoal'] . "</td>";
										echo "<td>" . $Row['HatTrick'] . "</td>";
										echo "<td>" . number_Format($Row['P20'], 2) . "</td>";
										echo "<td>" . $Row['PenalityShotsScore'] . "</td>";
										echo "<td>" . $Row['PenalityShotsTotal'] . "</td>";
										echo "<td>" . $Row['FightW'] . "</td>";
										echo "<td>" . $Row['FightL'] . "</td>";
										echo "<td>" . $Row['FightT'] . "</td>";
										echo "<td>" . $Row['Star1'] . "</td>";
										echo "<td>" . $Row['Star2'] . "</td>";
										echo "<td>" . $Row['Star3'] . "</td>";
										echo "</tr>\n";
									}
								}

								if ($PlayerFarmStat['GP'] > 0 and $LeagueGeneral['PreSeasonSchedule'] == "False" and $LeagueGeneral['PlayOffStarted'] == "True") {
									#Show Current Year
									echo "<tr><td>" . $PlayerInfo['ProTeamName'] . "</td>";
									echo "<td>" . $LeagueGeneral['LeagueYearOutput'] . "</td>";
									echo "<td>" . $PlayerFarmStat['GP'] . "</td>";
									echo "<td>" . $PlayerFarmStat['G'] . "</td>";
									echo "<td>" . $PlayerFarmStat['A'] . "</td>";
									echo "<td>" . $PlayerFarmStat['P'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PlusMinus'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Pim'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Pim5'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Hits'] . "</td>";
									echo "<td>" . $PlayerFarmStat['HitsTook'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Shots'] . "</td>";
									echo "<td>" . $PlayerFarmStat['OwnShotsBlock'] . "</td>";
									echo "<td>" . $PlayerFarmStat['OwnShotsMissGoal'] . "</td>";
									echo "<td>" . number_Format($PlayerFarmStat['ShotsPCT'], 2) . "%</td>";	#####	
									echo "<td>" . $PlayerFarmStat['ShotsBlock'] . "</td>";
									echo "<td>" . Floor($PlayerFarmStat['SecondPlay'] / 60) . "</td>";
									echo "<td>" . number_Format($PlayerFarmStat['AMG'], 2) . "</td>";		#####
									echo "<td>" . $PlayerFarmStat['PPG'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PPA'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PPP'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PPShots'] . "</td>";
									echo "<td>" . Floor($PlayerFarmStat['PPSecondPlay'] / 60) . "</td>";
									echo "<td>" . $PlayerFarmStat['PKG'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PKA'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PKP'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PKShots'] . "</td>";
									echo "<td>" . Floor($PlayerFarmStat['PKSecondPlay'] / 60) . "</td>";
									echo "<td>" . $PlayerFarmStat['GW'] . "</td>";
									echo "<td>" . $PlayerFarmStat['GT'] . "</td>";
									echo "<td>" . number_Format($PlayerFarmStat['FaceoffPCT'], 2) . "%</td>";	 ####
									echo "<td>" . $PlayerFarmStat['FaceOffTotal'] . "</td>";
									echo "<td>" . $PlayerFarmStat['GiveAway'] . "</td>";
									echo "<td>" . $PlayerFarmStat['TakeAway'] . "</td>";
									echo "<td>" . $PlayerFarmStat['EmptyNetGoal'] . "</td>";
									echo "<td>" . $PlayerFarmStat['HatTrick'] . "</td>";
									echo "<td>" . number_Format($PlayerFarmStat['P20'], 2) . "</td>";		####	
									echo "<td>" . $PlayerFarmStat['PenalityShotsScore'] . "</td>";
									echo "<td>" . $PlayerFarmStat['PenalityShotsTotal'] . "</td>";
									echo "<td>" . $PlayerFarmStat['FightW'] . "</td>";
									echo "<td>" . $PlayerFarmStat['FightL'] . "</td>";
									echo "<td>" . $PlayerFarmStat['FightT'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Star1'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Star2'] . "</td>";
									echo "<td>" . $PlayerFarmStat['Star3'] . "</td>";
									echo "</tr>\n";

									#Add Current Year in Career Stat
									$PlayerFarmCareerSumPlayoffOnly['SumOfGP'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfGP'] + $PlayerFarmStat['GP'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfShots'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfShots'] + $PlayerFarmStat['Shots'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfG'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfG'] + $PlayerFarmStat['G'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfA'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfA'] + $PlayerFarmStat['A'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfP'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfP'] + $PlayerFarmStat['P'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPlusMinus'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPlusMinus'] + $PlayerFarmStat['PlusMinus'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPim'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPim'] + $PlayerFarmStat['Pim'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPim5'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPim5'] + $PlayerFarmStat['Pim5'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfShotsBlock'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfShotsBlock'] + $PlayerFarmStat['ShotsBlock'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfOwnShotsBlock'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfOwnShotsBlock'] + $PlayerFarmStat['OwnShotsBlock'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfOwnShotsMissGoal'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfOwnShotsMissGoal'] + $PlayerFarmStat['OwnShotsMissGoal'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfHits'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfHits'] + $PlayerFarmStat['Hits'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfHitsTook'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfHitsTook'] + $PlayerFarmStat['HitsTook'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfGW'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfGW'] + $PlayerFarmStat['GW'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfGT'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfGT'] + $PlayerFarmStat['GT'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfFaceOffWon'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfFaceOffWon'] + $PlayerFarmStat['FaceOffWon'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfFaceOffTotal'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfFaceOffTotal'] + $PlayerFarmStat['FaceOffTotal'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPenalityShotsScore'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPenalityShotsScore'] + $PlayerFarmStat['PenalityShotsScore'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPenalityShotsTotal'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPenalityShotsTotal'] + $PlayerFarmStat['PenalityShotsTotal'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfEmptyNetGoal'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfEmptyNetGoal'] + $PlayerFarmStat['EmptyNetGoal'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfSecondPlay'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfSecondPlay'] + $PlayerFarmStat['SecondPlay'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfHatTrick'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfHatTrick'] + $PlayerFarmStat['HatTrick'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPPG'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPPG'] + $PlayerFarmStat['PPG'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPPA'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPPA'] + $PlayerFarmStat['PPA'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPPP'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPPP'] + $PlayerFarmStat['PPP'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPPShots'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPPShots'] + $PlayerFarmStat['PPShots'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPPSecondPlay'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPPSecondPlay'] + $PlayerFarmStat['PPSecondPlay'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPKG'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPKG'] + $PlayerFarmStat['PKG'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPKA'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPKA'] + $PlayerFarmStat['PKA'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPKP'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPKP'] + $PlayerFarmStat['PKP'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPKShots'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPKShots'] + $PlayerFarmStat['PKShots'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPKSecondPlay'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPKSecondPlay'] + $PlayerFarmStat['PKSecondPlay'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfGiveAway'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfGiveAway'] + $PlayerFarmStat['GiveAway'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfTakeAway'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfTakeAway'] + $PlayerFarmStat['TakeAway'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfPuckPossesionTime'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfPuckPossesionTime'] + $PlayerFarmStat['PuckPossesionTime'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfFightW'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfFightW'] + $PlayerFarmStat['FightW'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfFightL'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfFightL'] + $PlayerFarmStat['FightL'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfFightT'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfFightT'] + $PlayerFarmStat['FightT'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfStar1'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfStar1'] + $PlayerFarmStat['Star1'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfStar2'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfStar2'] + $PlayerFarmStat['Star2'];
									$PlayerFarmCareerSumPlayoffOnly['SumOfStar3'] =  $PlayerFarmCareerSumPlayoffOnly['SumOfStar3'] + $PlayerFarmStat['Star3'];
								}

								if ($PlayerFarmCareerSumPlayoffOnly['SumOfGP'] > 0) {
									/* Show FarmCareer Total for Playoff */
									echo "<tr class=\"static\"><td colspan=\"2\"><strong>" . $PlayersLang['Total'] . " " . $PlayersLang['Playoff'] . "</strong></td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfGP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfG'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfA'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPlusMinus'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPim'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPim5'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfHits'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfHitsTook'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfShots'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfOwnShotsBlock'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfOwnShotsMissGoal'] . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerFarmCareerSumPlayoffOnly['SumOfShots'] > 0) {
										echo sprintf("%.2f%%", ($PlayerFarmCareerSumPlayoffOnly['SumOfG'] / $PlayerFarmCareerSumPlayoffOnly['SumOfShots'] * 100));
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfShotsBlock'] . "</td>";
									echo "<td class=\"staticTD\">" . Floor($PlayerFarmCareerSumPlayoffOnly['SumOfSecondPlay'] / 60) . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerFarmCareerSumPlayoffOnly['SumOfGP'] > 0) {
										echo number_format(($PlayerFarmCareerSumPlayoffOnly['SumOfSecondPlay'] / 60 / $PlayerFarmCareerSumPlayoffOnly['SumOfGP']), 2);
									} else {
										echo "0";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPPG'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPPA'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPPP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPPShots'] . "</td>";
									echo "<td class=\"staticTD\">" . Floor($PlayerFarmCareerSumPlayoffOnly['SumOfPPSecondPlay'] / 60) . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPKG'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPKA'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPKP'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPKShots'] . "</td>";
									echo "<td class=\"staticTD\">" . Floor($PlayerFarmCareerSumPlayoffOnly['SumOfPKSecondPlay'] / 60) . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfGW'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfGT'] . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerFarmCareerSumPlayoffOnly['SumOfFaceOffTotal'] > 0) {
										echo sprintf("%.2f%%", ($PlayerFarmCareerSumPlayoffOnly['SumOfFaceOffWon'] / $PlayerFarmCareerSumPlayoffOnly['SumOfFaceOffTotal'] * 100));
									} else {
										echo "0%";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfFaceOffTotal'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfGiveAway'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfTakeAway'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfEmptyNetGoal'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfHatTrick'] . "</td>";
									echo "<td class=\"staticTD\">";
									if ($PlayerFarmCareerSumPlayoffOnly['SumOfSecondPlay'] > 0) {
										echo number_format($PlayerFarmCareerSumPlayoffOnly['SumOfP'] / $PlayerFarmCareerSumPlayoffOnly['SumOfSecondPlay'] * 60 * 20, 2);
									} else {
										echo "0";
									}
									echo "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPenalityShotsScore'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfPenalityShotsTotal'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfFightW'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfFightL'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfFightT'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfStar1'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfStar2'] . "</td>";
									echo "<td class=\"staticTD\">" . $PlayerFarmCareerSumPlayoffOnly['SumOfStar3'] . "</td>";
									echo "</tr>\n";
								}
							} ?>
						</tbody>
					</table>
					<br />
				</div>
			</div>



		</div>
	</div>
</body>
<?php

echo "<script type=\"text/javascript\">\$(function() {\$(\".STHSPHPProCareerStat_Table\").tablesorter( {widgets: ['staticRow', 'columnSelector'], widgetOptions : {columnSelector_container : \$('#tablesorter_ColumnSelector2'), columnSelector_layout : '<label><input type=\"checkbox\">{name}</label>', columnSelector_name  : 'title', columnSelector_mediaquery: true, columnSelector_mediaqueryName: 'Automatic', columnSelector_mediaqueryState: true, columnSelector_mediaqueryHidden: true, columnSelector_breakpoints : [ '20em', '40em', '60em', '80em', '90em', '95em' ],}});});</script>";
echo "<script type=\"text/javascript\">\$(function() {\$(\".STHSPHPFarmCareerStat_Table\").tablesorter({widgets: ['staticRow', 'columnSelector'], widgetOptions : {columnSelector_container : \$('#tablesorter_ColumnSelector3'), columnSelector_layout : '<label><input type=\"checkbox\">{name}</label>', columnSelector_name  : 'title', columnSelector_mediaquery: true, columnSelector_mediaqueryName: 'Automatic', columnSelector_mediaqueryState: true, columnSelector_mediaqueryHidden: true, columnSelector_breakpoints : [ '20em', '40em', '60em', '80em', '90em', '95em' ],}});});</script>";
echo "<script type=\"text/javascript\">\$(function() {\$(\".STHSPHPProPlayerStatPerTeam_Table\").tablesorter( {widgets: ['columnSelector', 'stickyHeaders', 'filter'], widgetOptions : {columnSelector_container : \$('#tablesorter_ColumnSelector4'), columnSelector_layout : '<label><input type=\"checkbox\">{name}</label>', columnSelector_name  : 'title', columnSelector_mediaquery: true, columnSelector_mediaqueryName: 'Automatic', columnSelector_mediaqueryState: true, columnSelector_mediaqueryHidden: true, columnSelector_breakpoints : [ '20em', '40em', '60em', '80em', '90em', '95em' ],filter_columnFilters: true,filter_placeholder: { search : '" . $TableSorterLang['Search'] . "' },filter_searchDelay : 1000,filter_reset: '.tablesorter_Reset'}});});</script>";
echo "<script type=\"text/javascript\">\$(function() {\$(\".STHSPHPFarmPlayerStatPerTeam_Table\").tablesorter( {widgets: ['columnSelector', 'stickyHeaders', 'filter'], widgetOptions : {columnSelector_container : \$('#tablesorter_ColumnSelector5'), columnSelector_layout : '<label><input type=\"checkbox\">{name}</label>', columnSelector_name  : 'title', columnSelector_mediaquery: true, columnSelector_mediaqueryName: 'Automatic', columnSelector_mediaqueryState: true, columnSelector_mediaqueryHidden: true, columnSelector_breakpoints : [ '20em', '40em', '60em', '80em', '90em', '95em' ],filter_columnFilters: true,filter_placeholder: { search : '" . $TableSorterLang['Search'] . "' },filter_searchDelay : 1000,filter_reset: '.tablesorter_Reset'}});});</script>";


//"https://tsnimages.tsn.ca/ImageProvider/PlayerHeadshot?seoId=" . ((strtolower(str_replace(" ", "-", $PlayerInfo['Name'])) == 'mike-reilly') ? 'mike-reilly-106004' : strtolower(str_replace(" ", "-", $PlayerInfo['Name']))) . "&width=200&height=200";

?>


<?php include "Footer.php"; ?>