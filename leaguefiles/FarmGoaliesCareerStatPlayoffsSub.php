<thead>
	<th data-priority="3" title="Order Number" class="STHSW10 sorter-false">#</th>
	<th data-priority="critical" title="League Name" class="STHSW140Min"><?php echo $GeneralStatLang['Season']; ?></th>
	<th data-priority="critical" title="Team Name" class="STHSW55"><?php echo $GeneralStatLang['Team']; ?></th>
	<th data-priority="1" title="Games Played" class="STHSW25">GP</th>
	<th data-priority="1" title="Wins" class="STHSW25">W</th>
	<th data-priority="2" title="Losses" class="STHSW25">L</th>
	<th data-priority="2" title="Overtime Losses" class="STHSW25">OTL</th>
	<th data-priority="critical" title="Save Percentage" class="STHSW50">PCT</th>
	<th data-priority="critical" title="Goals Against Average" class="STHSW50">GAA</th>
	<th data-priority="3" title="Minutes Played" class="STHSW50">MP</th>
	<th data-priority="5" title="Penalty Minutes" class="STHSW25">PIM</th>
	<th data-priority="4" title="Shutouts" class="STHSW25">SO</th>
	<th data-priority="3" title="Goals Against" class="STHSW25">GA</th>
	<th data-priority="3" title="Shots Against" class="STHSW45">SA</th>
	<th data-priority="4" title="Shots Against Rebound" class="STHSW45">SAR</th>
	<th data-priority="5" title="Assists" class="STHSW25">A</th>
	<th data-priority="5" title="Empty net Goals" class="STHSW25">EG</th>
	<th data-priority="4" title="Penalty Shots Save %" class="STHSW50">PS %</th>
	<th data-priority="5" title="Penalty Shots Against" class="STHSW25">PSA</th>
	<th class="columnSelector-false STHSW25" data-priority="6" title="Number of game goalies start as Start goalie">ST</th>
	<th class="columnSelector-false STHSW25" data-priority="6" title="Number of game goalies start as Backup goalie">BG</th>
	<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time Goalies was star #1 in a game">S1</th>
	<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time Goalies was star #2 in a game">S2</th>
	<th class="columnSelector-false STHSW25" data-priority="6" title="Number of time Goalies was star #3 in a game">S3</th>
	</tr>
</thead>
<tbody>
	<?php
	$Order = 0;
	foreach ($arrayDbs as $Dbs) {
		if ($dictGoaliesFarmSeasonStats[$Order] <> Null) {
			if ($dictGoaliesFarmStats[$Order]['GP'] <> 0 && $dictGoaliesFarmStats[$Order]['GP'] <> Null) {
				$Row = $dictGoaliesFarmStats[$Order];
				$Row1 = $dictGoalieInfo[$Order];
				$Order += 1;
				echo "<tr><td>" . $Order . "</td>";
				echo "<td><a>" . getSeasonName($Dbs) . "</a></td>";
				echo "<td>";
				echo "<img src=\"./images/Farm-team/" . $Row1['Team'] . ".png\" alt=\"\" class=\"STHSPHPPlayersStatsTeamImage\" />";
				echo "</td>";
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
			} else {
				echo "<tr><td>" . $Order . "</td>";
				echo "<td><a>" . getSeasonName($Dbs) . "</a></td>";
				echo "<td colspan=\"22\"\" style=\"font-size: 1,5em; text-align:center; background-color:#F9F9F9;\">N/A</td></tr>";
				$Order += 1;
				echo "\n";
			}
		} else {
			echo "<tr><td>" . $Order . "</td>";
			echo "<td><a>" . getSeasonName($Dbs) . "</a></td>";
			echo "<td colspan=\"22\"\" style=\"font-size: 1,5em; text-align:center; background-color:#F9F9F9;\">N/A</td></tr>";
			$Order += 1;
			echo "\n";
		}
	}

	?>
</tbody>