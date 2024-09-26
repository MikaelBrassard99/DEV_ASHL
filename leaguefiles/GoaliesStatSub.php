<th  title="Order Number" class="STHSW10 sorter-false">#</th>
<th  class="sticky-col first-col" data-priority="critical" title="Goalie Name" class="STHSW140Min"><?php echo $PlayersLang['GoalieName']; ?></th>
<?php
if ($Team >= 0) {
	echo "<th class=\" STHSW140Min\" data-priority=\"6\" title=\"Team Name\">" . $PlayersLang['TeamName'] . "</th>";
} else {
	echo "<th data-priority=\"2\" title=\"Team Name\" class=\"STHSW140Min\">" . $PlayersLang['TeamName'] . "</th>";
}
if ($CareerLeaderSubPrintOut == 1) {
	echo "<th data-priority=\"2\" title=\"Year\" class=\"STHSW25\">" . $SearchLang['Year'] . "</th><th data-priority=\"5\" title=\"Rookie\" class=\"STHSW25\">" . $PlayersLang['Rookie'] . "</th>";
}
?>
<th  title="Games Played" class="STHSW25">GP</th>
<th  title="Wins" class="STHSW25">W</th>
<th  title="Losses" class="STHSW25">L</th>
<th  title="Overtime Losses" class="STHSW25">OTL</th>
<th data-priority="critical" title="Save Percentage" class="STHSW50">PCT</th>
<th data-priority="critical" title="Goals Against Average" class="STHSW50">GAA</th>
<th  title="Minutes Played" class="STHSW50">MP</th>
<th  title="Penalty Minutes" class="STHSW25">PIM</th>
<th  title="Shutouts" class="STHSW25">SO</th>
<th  title="Goals Against" class="STHSW25">GA</th>
<th  title="Shots Against" class="STHSW45">SA</th>
<th  title="Shots Against Rebound" class="STHSW45">SAR</th>
<th  title="Assists" class="STHSW25">A</th>
<th  title="Empty net Goals" class="STHSW25">EG</th>
<th  title="Penalty Shots Save %" class="STHSW50">PS %</th>
<th  title="Penalty Shots Against" class="STHSW25">PSA</th>
<th class=" STHSW25"  title="Number of game goalies start as Start goalie">ST</th>
<th class=" STHSW25"  title="Number of game goalies start as Backup goalie">BG</th>
<th class=" STHSW25"  title="Number of time players was star #1 in a game">S1</th>
<th class=" STHSW25"  title="Number of time players was star #2 in a game">S2</th>
<th class=" STHSW25"  title="Number of time players was star #3 in a game">S3</th>
</tr>
</thead>
<tbody>
	<?php
	$Order = 0;
	if (empty($GoalieStat) == false) {
		while ($Row = $GoalieStat->fetchArray()) {
			$Order += 1;
			echo "<tr><td>" . $Order . "</td>";
			if ($Row['Number'] != Null) {
				echo "<td class=\"sticky-col first-col\"><a href=\"GoalieReport.php?Goalie=" . $Row['Number'] . "\">" . $Row['Name'] . "</a></td>";
			} else {
				echo "<td class=\"sticky-col first-col\">" . $Row['Name'] . "</td>";
			}
			echo "<td>";
			/*if ($Row['TeamThemeID'] > 0) {
				echo "<img src=\"./images/pro-team/" . $Row['TeamThemeID'] . ".png\" alt=\"\" class=\"STHSPHPPlayersStatsTeamImage\" />";
			}*/
			echo "<img src=\"./images/Pro-team/" . $Row['Team'] . ".png\" alt=\"\" class=\"STHSPHPPlayersStatsTeamImage\" />";
			echo $Row['TeamName'] . "</td>";
			if ($CareerLeaderSubPrintOut == 1) {
				echo "<td>" . $Row['Year'] . "</td><td>" . $Row['Rookie'] . "</td>";
			}
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
			echo "</tr>\n"; /* The \n is for a new line in the HTML Code */
		}
	}
	?>