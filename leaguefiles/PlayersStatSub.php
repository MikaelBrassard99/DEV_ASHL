<th  title="Order Number" class="STHSW10 sorter-false">#</th>
<th class="sticky-col first-col" data-priority="critical" title="Player Name" class="STHSW140Min"><?php echo $PlayersLang['PlayerName']; ?></th>
<?php
if ($CareerLeaderSubPrintOut == 0 or $CareerLeaderSubPrintOut == 2) {
	echo "<th data-priority=\"2\" title=\"Position\" class=\"STHSW25\">POS</th>";
}
if ($CareerLeaderSubPrintOut == 1 or $CareerLeaderSubPrintOut == 2) {
	echo "<th data-priority=\"2\" title=\"Year\" class=\"STHSW25\">" . $SearchLang['Year'] . "</th><th data-priority=\"5\" title=\"Rookie\" class=\"STHSW25\">" . $PlayersLang['Rookie'] . "</th>";
}
?>
<th  title="Games Played" class="STHSW25">GP</th>
<th  title="Goals" class="STHSW25">G</th>
<th  title="Assists" class="STHSW25">A</th>
<th  title="Points" class="STHSW25">P</th>
<th  title="Plus/Minus" class="STHSW25">+/-</th>
<th  title="Penalty Minutes" class="STHSW25">PIM</th>
<th class=" STHSW25"  title="Penalty Minutes for Major Penalty">PIM5</th>
<th  title="Hits" class="STHSW25">HIT</th>
<th class=" STHSW25"  title="Hits Received">HTT</th>
<th  title="Shots" class="STHSW25">SHT</th>
<th class=" STHSW25"  title="Own Shots Block by others players">OSB</th>
<th class=" STHSW25"  title="Own Shots Miss the net">OSM</th>
<th  title="Shooting Percentage" class="STHSW55">SHT%</th>
<th  title="Shots Blocked" class="STHSW25">SB</th>
<th  title="Minutes Played" class="STHSW35">MP</th>
<th  title="Average Minutes Played per Game" class="STHSW35">AMG</th>
<th  title="Power Play Goals" class="STHSW25">PPG</th>
<th  title="Power Play Assists" class="STHSW25">PPA</th>
<th  title="Power Play Points" class="STHSW25">PPP</th>
<th class=" STHSW25"  title="Power Play Shots">PPS</th>
<th class=" STHSW25"  title="Power Play Minutes Played">PPM</th>
<th  title="Short Handed Goals" class="STHSW25">PKG</th>
<th  title="Short Handed Assists" class="STHSW25">PKA</th>
<th  title="Short Handed Points" class="STHSW25">PKP</th>
<th class=" STHSW25"  title="Penalty Kill Shots">PKS</th>
<th class=" STHSW25"  title="Penalty Kill Minutes Played">PKM</th>
<th class=" STHSW25"  title="Game Winning Goals">GW</th>
<th class=" STHSW25"  title="Game Tying Goals">GT</th>
<th class=" STHSW25"  title="Face offs Percentage">FO%</th>
<th class=" STHSW25"  title="Face offs Taken">FOT</th>
<th class=" STHSW25"  title="Give Aways">GA</th>
<th class=" STHSW25"  title="Take Aways">TA</th>
<th class=" STHSW25"  title="Empty Net Goals">EG</th>
<th class=" STHSW25"  title="Hat Tricks">HT</th>
<th  title="Points per 20 Minutes" class="STHSW25">P/20</th>
<th class=" STHSW25"  title="Penalty Shots Goals">PSG</th>
<th class=" STHSW25"  title="Penalty Shots Taken">PSS</th>
<th class=" STHSW25"  title="Fight Won">FW</th>
<th class=" STHSW25"  title="Fight Lost">FL</th>
<th class=" STHSW25"  title="Fight Ties">FT</th>
<th class=" STHSW25"  title="Number of time players was star #1 in a game">S1</th>
<th class=" STHSW25"  title="Number of time players was star #2 in a game">S2</th>
<th class=" STHSW25"  title="Number of time players was star #3 in a game">S3</th>
</tr>
</thead>
<tbody>
	<?php
	if (isset($_GET['Farm'])) {
		$TypeText = "Farm";
	} else {
		$TypeText = "Pro";
	}
	$Order = 0;

	if (empty($PlayerStat) == false) {
		while ($Row = $PlayerStat->fetchArray()) {
			$Order += 1;
			echo "<tr><td>" . $Order . "</td>";
			if ($Row['Number'] != Null) {
				echo "<td class=\"sticky-col first-col\"><a href=\"PlayerReport.php?Player=" . $Row['Number'] . "\">" . $Row['Name'] . "</a></td>";
			} else {
				echo "<td class=\"sticky-col first-col\">" . $Row['Name'] . "</td>";
			}
			if ($CareerLeaderSubPrintOut == 0 or $CareerLeaderSubPrintOut == 2) {
				echo "<td>" . $Position = (string)"";
				if ($Row['PosC'] == "True") {
					if ($Position == "") {
						$Position = "C";
					} else {
						$Position = $Position . "/C";
					}
				}
				if ($Row['PosLW'] == "True") {
					if ($Position == "") {
						$Position = "LW";
					} else {
						$Position = $Position . "/LW";
					}
				}
				if ($Row['PosRW'] == "True") {
					if ($Position == "") {
						$Position = "RW";
					} else {
						$Position = $Position . "/RW";
					}
				}
				if ($Row['PosD'] == "True") {
					if ($Position == "") {
						$Position = "D";
					} else {
						$Position = $Position . "/D";
					}
				}
				echo $Position . "</td>";
			}
			if ($CareerLeaderSubPrintOut == 1 or $CareerLeaderSubPrintOut == 2) {
				echo "<td>" . $Row['Year'] . "</td>";
				echo "<td>" . $Row['Rookie'] . "</td>";
			}
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
			echo "</tr>\n"; /* The \n is for a new line in the HTML Code */
		}
	}
	?>