<!DOCTYPE html>
<html>

<head>
	<style>
		@media screen and (max-width: 1060px) {
			.ASHL_Banner {
				display: block;
			}

			.ASHL_Logo {
				display: block;
			}

			.MagicScroll {
				display: block;
			}
			.container_slick{
				display: block;
			}
		}

		@media screen and (max-width: 890px) {
			.ASHL_Banner { 
				display: none;
			}

			.ASHL_Logo {
				display: none;
			}

			.MagicScroll {
				display: none;
			}
			.container_slick{
				display: none;
			}
		}
	</style>
</head>


<?php
$MenuFreeAgentYear = (int)1;
if (file_exists($DatabaseFile) == false) {
	$LeagueName = $DatabaseNotFound;
	$LeagueOutputOptionMenu = Null;
	$LeagueGeneralMenu = Null;
	$LeagueSimulationMenu = Null;
	$TeamProMenu = Null;
	$TeamProMenu1 = Null;
	$TeamProMenu2 = Null;
	$TeamFarmMenu = Null;
	$TeamFarmMenu1 = Null;
	$TeamFarmMenu2 = Null;
	echo "<h1>" . $DatabaseNotFound . "</h1>";
} else {
	$dbMenu = new SQLite3($DatabaseFile);
	if ($LeagueName == "") {
		$Query = "Select Name, LastTransactionOutput from LeagueGeneral";
		$LeagueGeneralMenu = $dbMenu->querySingle($Query, true);
		$LeagueName = $LeagueGeneralMenu['Name'];
	}else{
	
	}

	$Query = "Select ShowExpansionDraftLinkinTopMenu, ShowWebClientInDymanicWebsite, ProcessDatabaseTransaction, ShowRSSFeed, OutputCustomURL1, OutputCustomURL1Name, OutputCustomURL2, OutputCustomURL2Name, SplitTodayGames from LeagueOutputOption";
	$LeagueOutputOptionMenu = $dbMenu->querySingle($Query, true);
	$Query = "Select OutputName, OutputFileFormat, EntryDraftStart, OffSeason, DatabaseCreationDate, PlayOffStarted, ProConferenceName1, ProConferenceName2, FarmConferenceName1, FarmConferenceName2 from LeagueGeneral";
	$LeagueGeneralMenu = $dbMenu->querySingle($Query, true);
	$Query = "Select FarmEnable, WaiversEnable, ProTwoConference, FarmTwoConference from LeagueSimulation";
	$LeagueSimulationMenu = $dbMenu->querySingle($Query, true);

	$Query = "Select * from LeagueGeneral";
	$LeagueGeneral = $dbMenu->querySingle($Query,true);		
	$LeagueName = $LeagueGeneral['Name'];

	$Query = "SELECT * FROM SchedulePro WHERE Day = " . ($LeagueGeneral['ScheduleNextDay'] - $LeagueGeneral['DefaultSimulationPerDay']) . " ORDER BY GameNumber ";
	$QuerySchedule = "SELECT SchedulePro.*, 'Pro' AS Type, TeamProStatVisitor.Last10W AS VLast10W, TeamProStatVisitor.Last10L AS VLast10L, TeamProStatVisitor.Last10T AS VLast10T, TeamProStatVisitor.Last10OTW AS VLast10OTW, TeamProStatVisitor.Last10OTL AS VLast10OTL, TeamProStatVisitor.Last10SOW AS VLast10SOW, TeamProStatVisitor.Last10SOL AS VLast10SOL, TeamProStatVisitor.GP AS VGP, TeamProStatVisitor.W AS VW, TeamProStatVisitor.L AS VL, TeamProStatVisitor.T AS VT, TeamProStatVisitor.OTW AS VOTW, TeamProStatVisitor.OTL AS VOTL, TeamProStatVisitor.SOW AS VSOW, TeamProStatVisitor.SOL AS VSOL, TeamProStatVisitor.Points AS VPoints, TeamProStatVisitor.Streak AS VStreak, TeamProStatHome.Last10W AS HLast10W, TeamProStatHome.Last10L AS HLast10L, TeamProStatHome.Last10T AS HLast10T, TeamProStatHome.Last10OTW AS HLast10OTW, TeamProStatHome.Last10OTL AS HLast10OTL, TeamProStatHome.Last10SOW AS HLast10SOW, TeamProStatHome.Last10SOL AS HLast10SOL, TeamProStatHome.GP AS HGP, TeamProStatHome.W AS HW, TeamProStatHome.L AS HL, TeamProStatHome.T AS HT, TeamProStatHome.OTW AS HOTW, TeamProStatHome.OTL AS HOTL, TeamProStatHome.SOW AS HSOW, TeamProStatHome.SOL AS HSOL, TeamProStatHome.Points AS HPoints, TeamProStatHome.Streak AS HStreak FROM (SchedulePRO LEFT JOIN TeamProStat AS TeamProStatHome ON SchedulePRO.HomeTeam = TeamProStatHome.Number) LEFT JOIN TeamProStat AS TeamProStatVisitor ON SchedulePRO.VisitorTeam = TeamProStatVisitor.Number WHERE DAY >= " . $LeagueGeneral['ScheduleNextDay'] . " AND DAY <= " . ($LeagueGeneral['ScheduleNextDay'] + $LeagueGeneral['DefaultSimulationPerDay'] -1) . " ORDER BY Day, GameNumber";
	$LatestScoreProScroll = $dbMenu->query($Query);
	$ScheduleProScroll = $dbMenu->query($QuerySchedule);

	$Query = "SELECT * FROM ScheduleFarm WHERE Day = " . ($LeagueGeneral['ScheduleNextDay'] - $LeagueGeneral['DefaultSimulationPerDay']) . " ORDER BY GameNumber ";
	$QuerySchedule = "SELECT ScheduleFarm.*, 'Farm' AS Type, TeamFarmStatVisitor.Last10W AS VLast10W, TeamFarmStatVisitor.Last10L AS VLast10L, TeamFarmStatVisitor.Last10T AS VLast10T, TeamFarmStatVisitor.Last10OTW AS VLast10OTW, TeamFarmStatVisitor.Last10OTL AS VLast10OTL, TeamFarmStatVisitor.Last10SOW AS VLast10SOW, TeamFarmStatVisitor.Last10SOL AS VLast10SOL, TeamFarmStatVisitor.GP AS VGP, TeamFarmStatVisitor.W AS VW, TeamFarmStatVisitor.L AS VL, TeamFarmStatVisitor.T AS VT, TeamFarmStatVisitor.OTW AS VOTW, TeamFarmStatVisitor.OTL AS VOTL, TeamFarmStatVisitor.SOW AS VSOW, TeamFarmStatVisitor.SOL AS VSOL, TeamFarmStatVisitor.Points AS VPoints, TeamFarmStatVisitor.Streak AS VStreak, TeamFarmStatHome.Last10W AS HLast10W, TeamFarmStatHome.Last10L AS HLast10L, TeamFarmStatHome.Last10T AS HLast10T, TeamFarmStatHome.Last10OTW AS HLast10OTW, TeamFarmStatHome.Last10OTL AS HLast10OTL, TeamFarmStatHome.Last10SOW AS HLast10SOW, TeamFarmStatHome.Last10SOL AS HLast10SOL, TeamFarmStatHome.GP AS HGP, TeamFarmStatHome.W AS HW, TeamFarmStatHome.L AS HL, TeamFarmStatHome.T AS HT, TeamFarmStatHome.OTW AS HOTW, TeamFarmStatHome.OTL AS HOTL, TeamFarmStatHome.SOW AS HSOW, TeamFarmStatHome.SOL AS HSOL, TeamFarmStatHome.Points AS HPoints, TeamFarmStatHome.Streak AS HStreak FROM (ScheduleFARM LEFT JOIN TeamFarmStat AS TeamFarmStatHome ON ScheduleFARM.HomeTeam = TeamFarmStatHome.Number) LEFT JOIN TeamFarmStat AS TeamFarmStatVisitor ON ScheduleFARM.VisitorTeam = TeamFarmStatVisitor.Number WHERE DAY >= " . $LeagueGeneral['ScheduleNextDay'] . " AND DAY <= " . ($LeagueGeneral['ScheduleNextDay'] + $LeagueGeneral['DefaultSimulationPerDay'] -1) . " ORDER BY Day, GameNumber";
	$LatestScoreFarmScroll = $dbMenu->query($Query);
	$ScheduleFarmScroll = $dbMenu->query($QuerySchedule);
	if ($LeagueGeneralMenu['OffSeason'] == "True") {
		$MenuFreeAgentYear = 0;
	}
}
?>

<body>
	<div class="container_slick">
		<?php
		$datetimeToday = new DateTime();
		$datetimeTomorrow = new DateTime('tomorrow');
		echo "<div class=\"MagicScroll\">";
			echo "<div style=\"\">";
				echo "<table class=\"STHSIndex_GamesResultScrollBox\">";
					echo "<tr><td class=\"STHSIndex_GamesResultScrollBox_TeamName\">Today</td></tr>";
				echo "</table>";
		 	echo "</div>";
			if (empty($LatestScoreProScroll) == false) {
				while ($row = $LatestScoreProScroll->fetchArray()) {
					echo "<div style=\"\">";
						echo "<table class=\"STHSIndex_GamesResultScrollBox\">";
							echo "<tr><td class=\"STHSIndex_GamesResultScrollBox_TeamName\"><img src=\"./images/Pro-team/" . $row['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPMenuDivTeamImage\" />" . " " . $row['VisitorTeamAbbre']. " - " . $row['VisitorScore'] . "</td></tr>";
							echo "<tr><td class=\"STHSIndex_GamesResultScrollBox_TeamName\"><img src=\"./images/Pro-team/" . $row['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPMenuDivTeamImage\" />" . " " . $row['HomeTeamAbbre']. " - " . $row['HomeScore'] . "</td></tr>";
						echo "</table>";
					echo "</div>";
				}
			}
			if (empty($LatestScoreFarmScroll) == false) {
				while ($row = $LatestScoreFarmScroll->fetchArray()) {
					echo "<div style=\"\">";
						echo "<table class=\"STHSIndex_GamesResultScrollBox\">";
							echo "<tr><td class=\"STHSIndex_GamesResultScrollBox_TeamName\"><img src=\"./images/Farm-team/" . $row['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPMenuDivTeamImage\" />" . " " . $row['VisitorTeamAbbre']. " - " . $row['VisitorScore'] . "</td></tr>";
							echo "<tr><td class=\"STHSIndex_GamesResultScrollBox_TeamName\"><img src=\"./images/Farm-team/" . $row['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPMenuDivTeamImage\" />" . " " . $row['HomeTeamAbbre']. " - " . $row['HomeScore'] . "</td></tr>";
						echo "</table>";
					echo "</div>";
				}
			}
		echo "<div style=\"\">";
			echo "<table class=\"STHSIndex_GamesResultScrollBox\">";
				echo "<tr><td class=\"STHSIndex_GamesResultScrollBox_TeamName\">Next day</td></tr>";
			echo "</table>";
		 echo "</div>";
			if (empty($ScheduleProScroll) == false) {
				while ($row = $ScheduleProScroll->fetchArray()) {
					echo "<div style=\"\">";
						echo "<table class=\"STHSIndex_GamesResultScrollBox\">";
							echo "<tr>";
								echo "<td class=\"STHSIndex_GamesResultScrollBox_TeamName\">";
									echo "<img src=\"./images/Pro-team/" . $row['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPMenuDivTeamImage\" />" . " (" . ($row['VW'] + $row['VOTW'] + $row['VSOW']) . "-";
									if ($LeagueGeneral['PointSystemSO'] == "True") {
										echo $row['VL'] . "-" . ($row['VOTL'] + $row['VSOL']);
									} else {
										echo ($row['VL'] + $row['VOTL'] + $row['VSOL']) . "-" . $row['VT'];
									}
									echo ") - " . $row['VStreak'];
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td class=\"STHSIndex_GamesResultScrollBox_TeamName\">";
								echo "<img src=\"./images/Pro-team/" . $row['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPMenuDivTeamImage\" />" . " (" . ($row['HW'] + $row['HOTW'] + $row['HSOW']) . "-";
								if ($LeagueGeneral['PointSystemSO'] == "True") {
										echo $row['HL'] . "-" . ($row['HOTL'] + $row['HSOL']);
									} else {
										echo ($row['HL'] + $row['HOTL'] + $row['HSOL']) . "-" . $row['HT'];
									}
									echo ") - " . $row['HStreak'];							
								echo "</td>";
							echo "</tr>";
						echo "</table>";
					echo "</div>";
				}
			}
			if (empty($ScheduleFarmScroll) == false) {
				while ($row = $ScheduleFarmScroll->fetchArray()) {
					echo "<div style=\"\">";
						echo "<table class=\"STHSIndex_GamesResultScrollBox\">";
							echo "<tr>";
								echo "<td class=\"STHSIndex_GamesResultScrollBox_TeamName\">";
								echo "<img src=\"./images/Farm-team/" . $row['VisitorTeam'] . ".png\" alt=\"\" class=\"STHSPHPMenuDivTeamImage\" />" . " (" . ($row['VW'] + $row['VOTW'] + $row['VSOW']) . "-";
								if ($LeagueGeneral['PointSystemSO'] == "True") {
										echo $row['VL'] . "-" . ($row['VOTL'] + $row['VSOL']);
									} else {
										echo ($row['VL'] + $row['VOTL'] + $row['VSOL']) . "-" . $row['VT'];
									}
									echo ") - " . $row['VStreak'];
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td class=\"STHSIndex_GamesResultScrollBox_TeamName\">";
								echo "<img src=\"./images/Farm-team/" . $row['HomeTeam'] . ".png\" alt=\"\" class=\"STHSPHPMenuDivTeamImage\" />" . " (" . ($row['VW'] + $row['VOTW'] + $row['VSOW']) . "-";
								if ($LeagueGeneral['PointSystemSO'] == "True") {
										echo $row['HL'] . "-" . ($row['HOTL'] + $row['HSOL']);
									} else {
										echo ($row['HL'] + $row['HOTL'] + $row['HSOL']) . "-" . $row['HT'];
									}
									echo ") - " . $row['HStreak'];							
								echo "</td>";
							echo "</tr>";
						echo "</table>";
					echo "</div>";
				}
			}
		echo "</div>";
		?>
	</div>
	<table style="border-collapse: collapse; padding:0px;margin:0px; position: relative;">
		<tr>
			<td>
				<a href=#><img src=images/ashl/ASHL.jpg class="ASHL_Banner"></a>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 15%; padding-top: 0%;">
				<?php
				if (file_exists($DatabaseFile) == True) {
					$Query = "Select UniqueID, Number, Name, Abbre from TeamProInfo ORDER BY Name";
					$TeamProMenu = $dbMenu->query($Query);
					echo "<div class=\"logoMenu\">";
					if (empty($TeamProMenu) == false) {
						while ($Row = $TeamProMenu->fetchArray()) {
							echo "<a href=\"ProTeam.php?Team=" . $Row['Number'] . "\"><img src=\"./images/Pro-team/" . $Row['Number'] . ".png\" alt=\"\" class=\"STHSPHPMenuDivTeamImage\" /></a>";
						}
					}
					echo "</div>";
				}
				?>
			</td>
		</tr>
		<tr>
			<td style="display:block;">
				<img src=images/ashl/logo-ashl.gif class="ASHL_Logo">
			</td>
			<td style="display:block;">
				<div id='cssmenu'>
					<ul style="padding:0%;margin:0%; width:100%; padding-left:15%;">
						<li><a href="/site"><?php echo $TopMenuLang['Home']; ?></a></li>
						<li><a href="#"><?php echo $TopMenuLang['Main']; ?></a>
							<ul>
								<li><a href="<?php echo $LeagueGeneralMenu['OutputName'] . ".stc"; ?>"><?php echo $TopMenuLang['STHSClientLeagueFile']; ?></a></li>
								<?php if ($LeagueOutputOptionMenu['SplitTodayGames'] == "True") {
									echo "<li><a href=\"TodayGames.php?Type=1\">" . $DynamicTitleLang['Pro'] . $TopMenuLang['TodaysGames'] . "</a></li><li><a href=\"TodayGames.php?Type=2\">" . $DynamicTitleLang['Farm'] . $TopMenuLang['TodaysGames'] . "</a></li>";
								} else {
									echo "<li><a href=\"TodayGames.php\">" . $TopMenuLang['TodaysGames'] . "</a></li>";
								} ?>
								<li><a href="Transaction.php?SinceLast"><?php echo $TopMenuLang['TodaysTransactions']; ?></a></li>
								<li><a href="Search.php"><?php echo $TopMenuLang['Search']; ?></a></li>
								<li><a href="NewsManagement.php"><?php echo $TopMenuLang['LeagueNewsManagement']; ?></a></li>
								<li><a href="Upload.php"><?php echo $TopMenuLang['UploadLine']; ?></a></li>
								<?php
								if ($LeagueOutputOptionMenu['ProcessDatabaseTransaction'] == "True") {
									echo "<li><a href=\"Trade.php\">" . $TopMenuLang['Trade'] . "</a></li>";
								}
								if ($LeagueOutputOptionMenu['ShowWebClientInDymanicWebsite'] == "True") {
									echo "<li><a href=\"WebClientIndex.php\">" . $TopMenuLang['WebClient'] . "</a></li>";
								}
								if ($LeagueOutputOptionMenu['OutputCustomURL1'] != "" and $LeagueOutputOptionMenu['OutputCustomURL1Name'] != "") {
									echo "<li><a href=\"" . $LeagueOutputOptionMenu['OutputCustomURL1'] . "\">" . $LeagueOutputOptionMenu['OutputCustomURL1Name'] . "</a></li>\n";
								}
								if ($LeagueOutputOptionMenu['OutputCustomURL2'] != "" and $LeagueOutputOptionMenu['OutputCustomURL2Name'] != "") {
									echo "<li><a href=\"" . $LeagueOutputOptionMenu['OutputCustomURL2'] . "\">" . $LeagueOutputOptionMenu['OutputCustomURL2Name'] . "</a></li>\n";
								}
								?>
								<li><a href="SendEmail.php"><?php echo $TodayGamesLang['Email']; ?></a></li>
							</ul>
						</li>
						<li><a href="#"><?php echo $TopMenuLang['TeamsDirectLink']; ?></a>
							<ul>
								<?php
								if (file_exists($DatabaseFile) == True) {
									/* Pro */
									echo "<li><a href=\"#\">" . $TopMenuLang['ProTeam'], "</a><ul>\n";

									if ($LeagueSimulationMenu['ProTwoConference'] == "True") {
										/* 2 Conference */
										echo "<li><a href=\"#\">" . $LeagueGeneralMenu['ProConferenceName1'], "</a><ul>\n";
										$Query = "Select Number, Name, Abbre from TeamProInfo Where Conference = '" . str_replace("'", "''", $LeagueGeneralMenu['ProConferenceName1']) . "' ORDER BY Name";
										$TeamProMenu1 = $dbMenu->query($Query);
										if (empty($TeamProMenu1) == false) {
											while ($Row = $TeamProMenu1->fetchArray()) {
												echo "<li><a href=\"ProTeam.php?Team=" . $Row['Number'] . "\">";
												echo "<img src=\"./images/Pro-team/" . $Row['Number'] . ".png\" alt=\"\" class=\"STHSPHPMenuTeamImage\" />";

												/*if ($Row['TeamThemeID'] > 0) {
								echo "<img src=\"./images/pro-team/" . $Row['TeamThemeID'] . ".png\" alt=\"\" class=\"STHSPHPMenuTeamImage\" />";
							}*/
												echo $Row['Name'] . "</a></li>\n";
											}
										}
										echo "</ul></li>\n";

										echo "<li><a href=\"#\">" . $LeagueGeneralMenu['ProConferenceName2'], "</a><ul>\n";
										$Query = "Select Number, Name, Abbre from TeamProInfo Where Conference = '" . str_replace("'", "''", $LeagueGeneralMenu['ProConferenceName2'])  . "' ORDER BY Name";
										$TeamProMenu2 = $dbMenu->query($Query);
										if (empty($TeamProMenu2) == false) {
											while ($Row = $TeamProMenu2->fetchArray()) {
												echo "<li><a href=\"ProTeam.php?Team=" . $Row['Number'] . "\">";
												echo "<img src=\"./images/Pro-team/" . $Row['Number'] . ".png\" alt=\"\" class=\"STHSPHPMenuTeamImage\" />";

												/*if ($Row['TeamThemeID'] > 0) {
							}*/
												echo $Row['Name'] . "</a></li>\n";
											}
										}
										echo "</ul></li>\n";
									} else {
										/* 1 Conference Only */
										$Query = "Select Number, Name, Abbre from TeamProInfo ORDER BY Name";
										$TeamProMenu = $dbMenu->query($Query);
										if (empty($TeamProMenu) == false) {
											while ($Row = $TeamProMenu->fetchArray()) {
												echo "<li><a href=\"ProTeam.php?Team=" . $Row['Number'] . "\">";
												echo "<img src=\"./images/Pro-team/" . $Row['Number'] . ".png\" alt=\"\" class=\"STHSPHPMenuTeamImage\" />";

												/*if ($Row['TeamThemeID'] > 0) {
								echo "<img src=\"./images/pro-team/" . $Row['TeamThemeID'] . ".png\" alt=\"\" class=\"STHSPHPMenuTeamImage\" />";
							}*/
												echo $Row['Name'] . "</a></li>\n";
											}
										}
									}

									echo "</ul></li>\n";

									if ($LeagueSimulationMenu['FarmEnable'] == "True") {
										/* Farm */
										echo "<li><a href=\"#\">" . $TopMenuLang['FarmTeam'], "</a><ul>\n";

										if ($LeagueSimulationMenu['FarmTwoConference'] == "True") {
											/* 2 Conference */
											echo "<li><a href=\"#\">" . $LeagueGeneralMenu['FarmConferenceName1'], "</a><ul>\n";
											$Query = "Select Number, Name, Abbre from TeamFarmInfo Where Conference = '" . $LeagueGeneralMenu['FarmConferenceName1'] . "' ORDER BY Name";
											$TeamFarmMenu1 = $dbMenu->query($Query);
											if (empty($TeamFarmMenu1) == false) {
												while ($Row = $TeamFarmMenu1->fetchArray()) {
													echo "<li><a href=\"FarmTeam.php?Team=" . $Row['Number'] . "\">";
													echo "<img src=\"./images/Farm-team/" . $Row['Number'] . ".png\" alt=\"\" class=\"STHSPHPMenuTeamImage\" />";

													/*if ($Row['TeamThemeID'] > 0) {
									echo "<img src=\"./images/pro-team/" . $Row['TeamThemeID'] . ".png\" alt=\"\" class=\"STHSPHPMenuTeamImage\" />";
								}*/
													echo $Row['Name'] . "</a></li>\n";
												}
											}
											echo "</ul></li>\n";

											echo "<li><a href=\"#\">" . $LeagueGeneralMenu['FarmConferenceName2'], "</a><ul>\n";
											$Query = "Select Number, Name, Abbre from TeamFarmInfo Where Conference = '" . $LeagueGeneralMenu['FarmConferenceName2'] . "' ORDER BY Name";
											$TeamFarmMenu2 = $dbMenu->query($Query);
											if (empty($TeamFarmMenu2) == false) {
												while ($Row = $TeamFarmMenu2->fetchArray()) {
													echo "<li><a href=\"FarmTeam.php?Team=" . $Row['Number'] . "\">";
													echo "<img src=\"./images/Farm-team/" . $Row['Number'] . ".png\" alt=\"\" class=\"STHSPHPMenuTeamImage\" />";

													/*if ($Row['TeamThemeID'] > 0) {
									echo "<img src=\"./images/Farm-team/" . $Row['Number'] . ".png\" alt=\"\" class=\"STHSPHPMenuTeamImage\" />";
								}*/
													echo $Row['Name'] . "</a></li>\n";
												}
											}
											echo "</ul></li>\n";
										} else {
											/* 1 Conference Only */
											$Query = "Select Number, Name, Abbre from TeamFarmInfo ORDER BY Name";
											$TeamFarmMenu = $dbMenu->query($Query);
											if (empty($TeamFarmMenu) == false) {
												while ($Row = $TeamFarmMenu->fetchArray()) {
													echo "<li><a href=\"FarmTeam.php?Team=" . $Row['Number'] . "\">";
													echo "<img src=\"./images/Farm-team/" . $Row['Number'] . ".png\" alt=\"\" class=\"STHSPHPMenuTeamImage\" />";

													/*if ($Row['TeamThemeID'] > 0) {
									echo "<img src=\"./images/pro-team/" . $Row['TeamThemeID'] . ".png\" alt=\"\" class=\"STHSPHPMenuTeamImage\" />";
								}*/
													echo $Row['Name'] . "</a></li>\n";
												}
											}
										}

										echo "</ul></li>\n";
									}
								}
								?>
							</ul>
						</li>
						<li><a href="#" class="MenuAfterImage"><?php echo $TopMenuLang['ProLeague']; ?></a>
							<ul>
								<li><a href="Standing.php"><?php echo $TopMenuLang['Standing']; ?></a></li>
								<li><a href="Schedule.php"><?php echo $TopMenuLang['Schedule']; ?></a></li>
								<li><a href="PlayersStat.php?Order=P&MinGP&Max=50"><?php echo $TopMenuLang['PlayersLeader']; ?></a></li>
								<li><a href="GoaliesStat.php?Order=P&MinGP&Max=10"><?php echo $TopMenuLang['GoaliesLeader']; ?></a></li>
								<li><a href="IndividualLeaders.php"><?php echo $TopMenuLang['IndividualLeaders']; ?></a></li>
								<li><a href="PlayersStat.php"><?php echo $TopMenuLang['AllPlayersStats']; ?></a></li>
								<li><a href="GoaliesStat.php"><?php echo $TopMenuLang['AllGoaliesStats']; ?></a></li>
								<li><a href="TeamsStat.php"><?php echo $TopMenuLang['TeamsStats']; ?></a></li>
								<li><a href="Finance.php"><?php echo $TopMenuLang['Finance']; ?></a></li>
								<li><a href="PowerRanking.php"><?php echo $TopMenuLang['PowerRanking']; ?></a></li>
							</ul>
						</li>

						<?php if ($LeagueSimulationMenu['FarmEnable'] == "True") {
							echo "<li><a href=\"#\" class=\"MenuAfterImage\">" . $TopMenuLang['FarmLeague'] . "</a><ul>";
							echo "<li><a href=\"Standing.php?Farm\">" . $TopMenuLang['Standing'] . "</a></li>";
							echo "<li><a href=\"Schedule.php?Farm\">" . $TopMenuLang['Schedule'] . "</a></li>";
							echo "<li><a href=\"PlayersStat.php?Farm&MinGP&Order=P&Max=50\">" . $TopMenuLang['PlayersLeader'] . "</a></li>";
							echo "<li><a href=\"GoaliesStat.php?Farm&MinGP&Order=P&Max=10\">" . $TopMenuLang['GoaliesLeader'] . "</a></li>";
							echo "<li><a href=\"IndividualLeaders.php?Farm\">" . $TopMenuLang['IndividualLeaders'] . "</a></li>";
							echo "<li><a href=\"PlayersStat.php?Farm\">" . $TopMenuLang['AllPlayersStats'] . "</a></li>";
							echo "<li><a href=\"GoaliesStat.php?Farm\">" . $TopMenuLang['AllGoaliesStats'] . "</a></li>";
							echo "<li><a href=\"TeamsStat.php?Farm\">" . $TopMenuLang['TeamsStats'] . "</a></li>";
							echo "<li><a href=\"Finance.php?Farm\">" . $TopMenuLang['Finance'] . "</a></li>";
							echo "<li><a href=\"PowerRanking.php?Farm\">" . $TopMenuLang['PowerRanking'] . "</a></li>";
							echo "</ul></li>";
						}
						?>

						<li><a href="#" class="MenuAfterImage"><?php echo $TopMenuLang['League']; ?></a>
							<ul>
								<?php if ($LeagueGeneralMenu['EntryDraftStart'] == "True" and $LeagueGeneralMenu['OffSeason'] == "True") {
									echo "<li><a href=\"EntryDraft.php\">" . $TopMenuLang['EntryDraft'] . "</a></li>";
								} else {
									echo "<li><a href=\"EntryDraftProjection.php\">" . $TopMenuLang['EntryDraftProjection'] . "</a></li>";
								} ?>
								<li><a href="Coaches.php"><?php echo $TopMenuLang['Coaches']; ?></a></li>
								<li><a href="Transaction.php"><?php echo $TopMenuLang['Transactions']; ?></a></li>
								<?php if ($LeagueSimulationMenu['WaiversEnable'] == "True") {
									echo "<li><a href=\"Waivers.php\">" . $TopMenuLang['Waivers'] . "</a></li>";
								} ?>
								<?php if ($LeagueOutputOptionMenu['ShowExpansionDraftLinkinTopMenu'] == "True") {
									echo "<li><a href=\"#\">" . $TopMenuLang['ExpansionDraft'] . "</a><ul><li><a href=\"PlayersRoster.php?Expansion\">" . $TopMenuLang['Players'] . "</a></li><li><a href=\"GoaliesRoster.php?Expansion\">" . $TopMenuLang['Goalies'] . "</a></li></ul></li>";
								} ?>
								<li><a href="TeamsAndGMInfo.php"><?php echo $TopMenuLang['Team/GM']; ?></a></li>
								<li><a href="Transaction.php?TradeHistory"><?php echo $TopMenuLang['TradeHistory']; ?></a></li>
								<li><a href="Prospects.php"><?php echo $TopMenuLang['Prospects']; ?></a></li>
								<?php if ($LeagueOutputOptionMenu['ShowRSSFeed'] == "True") {
									echo "<li><a href=\"RSSFeed.xml\">" . $TopMenuLang['RSSFeed'] . "</a></li>";
								} ?>
								<li><a href="#"><?php echo $TopMenuLang['Unassigned']; ?></a>
									<ul>
										<li><a href="PlayersRoster.php?Team=0&Type=0"><?php echo $TopMenuLang['Players']; ?></a></li>
										<li><a href="GoaliesRoster.php?Team=0&Type=0"><?php echo $TopMenuLang['Goalies']; ?></a></li>
									</ul>
								</li>
								<li><a href="#"><?php echo $TopMenuLang['AvailableForTrade']; ?></a>
									<ul>
										<li><a href="PlayersRoster.php?AvailableForTrade"><?php echo $TopMenuLang['Players']; ?></a></li>
										<li><a href="GoaliesRoster.php?AvailableForTrade"><?php echo $TopMenuLang['Goalies']; ?></a></li>
									</ul>
								</li>
								<li><a href="#"><?php echo $TopMenuLang['Compare']; ?></a>
									<ul>
										<li><a href="PlayersCompare.php"><?php echo $TopMenuLang['Players']; ?></a></li>
										<li><a href="GoaliesCompare.php"><?php echo $TopMenuLang['Goalies']; ?></a></li>
									</ul>
								</li>
								<li><a href="#"><?php echo $TopMenuLang['FreeAgents']; ?></a>
									<ul>
										<li><a href="PlayersRoster.php?Type=0&FreeAgent=<?php echo $MenuFreeAgentYear . "\">" . $TopMenuLang['Players']; ?></a></li><li><a href=" GoaliesRoster.php?Type=0&FreeAgent=<?php echo $MenuFreeAgentYear . "\">" . $TopMenuLang['Goalies']; ?></a></li>
									</ul>
								<li><a href="#"><?php echo $TopMenuLang['Retire']; ?></a>
									<ul>
										<li><a href="PlayersRoster.php?Retire"><?php echo $TopMenuLang['Players']; ?></a></li>
										<li><a href="GoaliesRoster.php?Retire"><?php echo $TopMenuLang['Goalies']; ?></a></li>
									</ul>
								</li>
							</ul>
						</li>


						<li><a href="#"><?php if (file_exists($CareerStatDatabaseFile) == true) {
											echo $TopMenuLang['RecordsAndCareerStat'];
										} else {
											echo $TopMenuLang['Records'];
										} ?></a>
							<ul>
								<li><a style="width:375px;" href="LeagueRecords.php"><?php echo $TopMenuLang['LeagueRecords']; ?></a></li>
								<li><a style="width:375px;" href="TeamsRecords.php"><?php echo $TopMenuLang['TeamRecords']; ?></a></li>
								<?php
								if (file_exists($CareerStatDatabaseFile) == true) {
									echo "<li><a style=\"width:375px;\" href=\"CareerStatTeamsStat.php\"> " . $TopMenuLang['TeamCareerStat'] . "</a></li>";
									echo "<li><a style=\"width:375px;\" href=\"CareerStatPlayersStat.php\"> " . $TopMenuLang['PlayersCareerStat'] . "</a></li>";
									echo "<li><a style=\"width:375px;\" href=\"CareerStatGoaliesStat.php\"> " . $TopMenuLang['GoaliesCareerStat'] . "</a></li>";
									echo "<li><a style=\"width:375px;\" href=\"CareerStatIndividualLeaders.php\"> " . $TopMenuLang['CareerStatsIndividualLeaders'] . "</a></li>";
									echo "<li><a style=\"width:375px;\" href=\"CareerStatTeamsStat.php?Playoff=on\"> " . $TopMenuLang['TeamCareerStat'] . $TopMenuLang['Playoff'] . "</a></li>";
									echo "<li><a style=\"width:375px;\" href=\"CareerStatPlayersStat.php?Playoff=on\"> " . $TopMenuLang['PlayersCareerStat'] . $TopMenuLang['Playoff'] . "</a></li>";
									echo "<li><a style=\"width:375px;\" href=\"CareerStatGoaliesStat.php?Playoff=on\"> " . $TopMenuLang['GoaliesCareerStat'] . $TopMenuLang['Playoff'] . "</a></li>";
									echo "<li><a style=\"width:375px;\" href=\"CareerStatIndividualLeaders.php?Playoff=on\"> " . $TopMenuLang['CareerStatsIndividualLeaders'] . $TopMenuLang['Playoff'] . "</a></li>";
									echo "<li><a style=\"width:375px;\" href=\"HistoryStanding.php\"> " . $TopMenuLang['PreviousStanding'] . "</a></li>";
									echo "<li><a style=\"width:375px;\" href=\"Search.php#History\"> " . $TopMenuLang['SearchHistory'] . "</a></li>";
								}
								?>
							</ul>
						</li>

						<li><a href="Search.php"><?php echo $TopMenuLang['Search']; ?></a></li>
						<?php
						if (file_exists("STHSLegacy.dat") == True) {
							echo "<li><a href=\"#\">" . $TopMenuLang['OldWebsitePage'] . "</a><ul>\n";
							$HTMLFiles = file("STHSLegacy.dat", FILE_IGNORE_NEW_LINES);
							foreach ($HTMLFiles as $File) {
								$Data = explode(",", $File);
								echo "<li><a href=\"" . $Data[0] . "\">" . $Data[1] . "</a></li>\n";
							}
							echo "</ul></li>\n";
						} ?>

						<?php
						if ($LeagueGeneralMenu['PlayOffStarted'] == "True") {
							if ($LeagueGeneralMenu['PlayOffStarted'] == "True") {
								echo "<li><a href=\"#\">" . $TopMenuLang['SeasonStat'] . "</a><ul>\n";
							}
							echo "<li><a href=\"#\">" . $TopMenuLang['ProLeague'] . "</a><ul>\n";
							echo "<li><a  href=\"Standing.php?Season\">" . $TopMenuLang['Standing'] . "</a></li>\n";
							echo "<li><a  href=\"PlayersStat.php?Order=P&MinGP&Max=50&Season\">" .  $TopMenuLang['PlayersLeader'] . "</a></li>\n";
							echo "<li><a  href=\"GoaliesStat.php?Order=P&MinGP&Max=10&Season\">" .  $TopMenuLang['GoaliesLeader'] . "</a></li>\n";
							echo "<li><a  href=\"PlayersStat.php?Season\">" .  $TopMenuLang['AllPlayersStats'] . "</a></li>\n";
							echo "<li><a  href=\"GoaliesStat.php?Season\">" .  $TopMenuLang['AllGoaliesStats'] . "</a></li>\n";
							echo "<li><a  href=\"TeamsStat.php?Season\">" .  $TopMenuLang['TeamsStats'] . "</a></li>\n";
							echo "</ul></li>";
							echo "<li><a href=\"#\">" . $TopMenuLang['FarmLeague'] . "</a><ul>\n";
							echo "<li><a  href=\"Standing.php?Season&Farm\">" . $TopMenuLang['Standing'] . "</a></li>\n";
							echo "<li><a  href=\"PlayersStat.php?Farm&MinGP&Order=P&Max=50&Season\">" .  $TopMenuLang['PlayersLeader'] . "</a></li>\n";
							echo "<li><a  href=\"GoaliesStat.php?Farm&MinGP&Order=P&Max=10&Season\">" .  $TopMenuLang['GoaliesLeader'] . "</a></li>\n";
							echo "<li><a  href=\"PlayersStat.php?Farm&Season\">" .  $TopMenuLang['AllPlayersStats'] . "</a></li>\n";
							echo "<li><a  href=\"GoaliesStat.php?Farm&Season\">" .  $TopMenuLang['AllGoaliesStats'] . "</a></li>\n";
							echo "<li><a  href=\"TeamsStat.php?Farm&Season\">" .  $TopMenuLang['TeamsStats'] . "</a></li>\n";
							echo "</ul></li>\n";
							echo "</ul></li>\n";
						}
						?>
						<li><a href='#'><?php echo $TopMenuLang['Help']; ?></a>
							<ul>
								<li><a href="http://sths.simont.info/DownloadLatestClient.php"><?php echo $TopMenuLang['LatestSTHSClient']; ?></a></li>
								<li><a href="http://sths.simont.info/ManualV3_En.php#Team_Management"><?php echo $TopMenuLang['ManualLinkTitle']; ?></a></li>
							</ul>
						</li>
						<li><a href="Login.php"><?php echo $TopMenuLang['Login']; ?></a></li>
					</ul>
				</div>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 15%; padding-top: 0%;">
				<?php
				if (file_exists($DatabaseFile) == True) {
					$Query = "Select UniqueID, Number, Name, Abbre from TeamFarmInfo ORDER BY Name";
					$TeamFarmMenu = $dbMenu->query($Query);
					echo "<div class=\"logoMenu\">";
					if (empty($TeamFarmMenu) == false) {
						while ($Row = $TeamFarmMenu->fetchArray()) {
							echo "<a href=\"FarmTeam.php?Team=" . $Row['Number'] . "\"><img src=\"./images/Farm-team/" . $Row['Number'] . ".png\" alt=\"\" class=\"STHSPHPMenuDivTeamImage\" /></a>";
						}
					}
					echo "</div>";
				}
				?>
			</td>
		</tr>
	</table>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.6/slick.min.js" />
	</script>
	<script type="text/javascript" src="magicscroll/magicscroll.js"></script>
</body>
<script type="text/javascript">
	function navigateTo(i) {
		var href = "/" + i;
		alert(href);
		location.assign(i);
	}
	// Size of browser viewport.
	$(window).height();
	$(window).width();

	// Size of HTML document (same as pageHeight/pageWidth in screenshot).
	$(document).height();
	$(document).width();

	var win = window,
		doc = document,
		docElem = doc.documentElement,
		body = doc.getElementsByTagName('body')[0],
		x = win.innerWidth || docElem.clientWidth || body.clientWidth,
		y = win.innerHeight || docElem.clientHeight || body.clientHeight;
	if (x > 1400) {
		MagicScrollOptions = {
			items: 4,
			step:1,
			autoplay: 5000
		}
	} else if (x < 975) {
		MagicScrollOptions = {
			items: 3,
			step:1,
			autoplay: 5000
		}
	} else {
		MagicScrollOptions = {
			items: 3,
			step:1,
			autoplay: 5000
		}
	}
</script>

</html>
<?php if (file_exists("STHSMenuEnd.php") == true) {
	include "STHSMenuEnd.php";
} ?>