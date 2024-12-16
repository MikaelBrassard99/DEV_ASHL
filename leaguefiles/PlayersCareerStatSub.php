<tbody>
	<?php
	$Order = 0;
	foreach ($arrayDbs as $Dbs) {
		if ($dictPlayerProSeasonStats[$Order] <> Null) {
			if ($dictPlayerProSeasonStats[$Order]['GP'] <> 0 && $dictPlayerProSeasonStats[$Order]['GP'] <> Null &&  $dictPlayerProSeasonStats[$Order]['Name'] == $PlayerName){
				$Row = $dictPlayerProSeasonStats[$Order];
				$Row1 = $dictPlayerInfo[$Order];
				$Order += 1;
				echo "<tr><td>" . $Order . "</td>";
				echo "<td><a>" . getSeasonName($Dbs) . "</a></td>";
				echo "<td>";
				echo "<img src=\"./images/Pro-team/" . $Row1['Team'] . ".png\" alt=\"\" class=\"STHSPHPPlayersStatsTeamImage\" />";
				echo "</td>";
				echo "<td>" . $Row['GP'] . "</td>";
				echo "<td>" . $Row['G'] . "</td>";
				echo "<td>" . $Row['A'] . "</td>";
				echo "<td style=\"font-weight:bold\">" . $Row['P'] . "</td>";
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
				echo "</tr>\n"; /* The \n is for a new line in the HTML Code */
			} else {
				echo "<tr><td>" . $Order . "</td>";
				echo "<td><a>" . getSeasonName($Dbs) . "</a></td>";
				echo "<td colspan=\"44\"\" style=\"font-size: 1,5em; text-align:center; background-color:#F9F9F9;\">N/A</td></tr>";
				$Order += 1;
				echo "\n";
			}
		} else {
			if ($dictPlayerProStats[$Order] <> Null) {
				if ($dictPlayerProStats[$Order]['GP'] <> 0 && $dictPlayerProStats[$Order]['GP'] <> Null) {
					$Row = $dictPlayerProStats[$Order];
					$Row1 = $dictPlayerInfo[$Order];
					$Order += 1;
					echo "<tr><td>" . $Order . "</td>";
					echo "<td><a>" . getSeasonName($Dbs) . "</a></td>";
					echo "<td>";
					echo "<img src=\"./images/Pro-team/" . $Row1['Team'] . ".png\" alt=\"\" class=\"STHSPHPPlayersStatsTeamImage\" />";
					echo "</td>";
					echo "<td>" . $Row['GP'] . "</td>";
					echo "<td>" . $Row['G'] . "</td>";
					echo "<td>" . $Row['A'] . "</td>";
					echo "<td style=\"font-weight:bold\">" . $Row['P'] . "</td>";
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
					echo "</tr>\n"; /* The \n is for a new line in the HTML Code */
				} else {
					echo "<tr><td>" . $Order . "</td>";
					echo "<td><a>" . getSeasonName($Dbs) . "</a></td>";
					echo "<td colspan=\"44\"\" style=\"font-size: 1,5em; text-align:center; background-color:#F9F9F9;\">N/A</td></tr>";
					$Order += 1;
					echo "\n";
				}
			} else {
				echo "<tr><td>" . $Order . "</td>";
				echo "<td><a>" . getSeasonName($Dbs) . "</a></td>";
				echo "<td colspan=\"44\"\" style=\"font-size: 1,5em; text-align:center; background-color:#F9F9F9;\">N/A</td></tr>";
				$Order += 1;
				echo "\n";
			}
		}
	}
	?>