<?php If (isset($TeamLang) == False){include 'LanguageEN.php';include 'LanguageEN-Stat.php';} If (isset($Team) == False){$Team = (integer)-1;} If (isset($CareerLeaderSubPrintOut ) == False){$CareerLeaderSubPrintOut  = (integer)-1;} ?> 
<th class="sorter-false"></th><th class="sorter-false" colspan="12"><?php echo $TeamLang['Overall'];?></th><th class="sorter-false" colspan="11"><?php echo $TeamLang['Home'];?></th><th class="sorter-false" colspan="11"><?php echo $TeamLang['Visitor'];?></th><th class="sorter-false" colspan="42"></th></tr><tr>
<th  title="Order Number" class="STHSW10 sorter-false">#</th>
<th class="sticky-col first-col" data-priority="critical" title="Team Name" class="STHSW200"><?php If ($Team <> 0){echo "VS ";}?><?php echo $TeamLang['TeamName'];?></th>
<?php If ($CareerLeaderSubPrintOut == 1){echo "<th data-priority=\"2\" title=\"Year\" class=\"STHSW25\">Year</th>";} /* $CareerLeaderSubPrintOut /  0 = Normal Regular Season  / 1 = CareerStat Year Information */?>
<th  title="Overall Games Played" class="STHSW25">GP</th>
<th  title="Overall Wins" class="STHSW25">W</th>
<th  title="Overall Loss" class="STHSW25">L</th>
<th  title="Overall Ties" class=" STHSW35">T</th>
<th  title="Overall Overtime Wins" class="STHSW25">OTW</th>
<th  title="Overall Overtime Loss" class="STHSW25">OTL</th>
<th  title="Overall Shootout Wins" class="STHSW25">SOW</th>
<th  title="Overall Shootout Loss" class="STHSW25">SOL</th>
<th  title="Overall Goals For" class="STHSW25">GF</th>
<th  title="Overall Goals Against" class="STHSW25">GA</th>
<th  title="Overall Goals For Diffirencial against Goals Against" class="STHSW25">Diff</th>
<th  title="Home Games Played" class="STHSW25">GP</th>
<th  title="Home Wins" class="STHSW25">W</th>
<th  title="Home Loss" class="STHSW25">L</th>
<th  title="Home Ties" class=" STHSW35">T</th>
<th  title="Home Overtime Wins" class="STHSW25">OTW</th>
<th  title="Home Overtime Loss" class="STHSW25">OTL</th>
<th  title="Home Shootout Wins" class="STHSW25">SOW</th>
<th  title="Home Shootout Loss" class="STHSW25">SOL</th>
<th  title="Home Goals For" class="STHSW25">GF</th>
<th  title="Home Goals Against" class="STHSW25">GA</th>
<th  title="Home Goals For Diffirencial against Goals Against" class="STHSW25">Diff</th>
<th  title="Visitor Games Played" class=" STHSW25">GP</th>
<th  title="Visitor Wins" class=" STHSW25">W</th>
<th  title="Visitor Loss" class=" STHSW25">L</th>
<th  title="Visitor Ties" class=" STHSW35">T</th>
<th  title="Visitor Overtime Wins" class=" STHSW25">OTW</th>
<th  title="Visitor Overtime Loss" class=" STHSW25">OTL</th>
<th  title="Visitor Shootout Wins" class=" STHSW25">SOW</th>
<th  title="Visitor Shootout Loss" class=" STHSW25">SOL</th>
<th  title="Visitor Goals For" class=" STHSW25">GF</th>
<th  title="Visitor Goals Against" class=" STHSW25">GA</th>
<th  title="Visitor Goals For Diffirencial against Goals Against" class=" STHSW25">Diff</th>
<th  title="Points" class="STHSW25">P</th>
<th  title="Points Percentage" class="STHSW45">PCT</th>
<th  title="Total Team Goals" class="STHSW25">G</th>
<th  title="Total Team Assists" class="STHSW25">A</th>
<th  title="Total Team Players Points" class=" STHSW25">TP</th>
<th  title="Shutouts" class=" STHSW25">SO</th>
<th  title="Empty Net Goals" class=" STHSW25">EG</th>
<th  title="Goals for 1st Period" class=" STHSW25">GP1</th>
<th  title="Goals for 2nd Period" class=" STHSW25">GP2</th>
<th  title="Goals for 3rd Period" class=" STHSW25">GP3</th>
<th  title="Goals for 4th Period" class=" STHSW25">GP4</th>
<th  title="Shots For" class="STHSW25">SHF</th>
<th  title="Shots for 1st Period" class=" STHSW25">SH1</th>
<th  title="Shots for 2nd Period" class=" STHSW25">SP2</th>
<th  title="Shots for 3rd Period" class=" STHSW25">SP3</th>
<th  title="Goals for 4th Period" class=" STHSW25">SP4</th>
<th  title="Shots Against" class="STHSW25">SHA</th>
<th  title="Shots Block" class="STHSW25">SHB</th>
<th  title="Penalty Minutes" class="STHSW25">Pim</th>
<th  title="Hits" class="STHSW25">Hit</th>
<th  title="Power Play Attemps" class=" STHSW25">PPA</th>
<th  title="Power Play Goals" class=" STHSW25">PPG</th>
<th  title="Power Play %" class="STHSW35">PP%</th>
<th  title="Penalty Kill Attemps" class=" STHSW25">PKA</th>
<th  title="Penalty Kill Goals Against" class=" STHSW25">PK GA</th>
<th  title="Penalty Kill %" class="STHSW35">PK%</th>
<th  title="Penalty Kill Goals For" class=" STHSW25">PK GF</th>
<th  title="Won Offensif Zone Faceoff" class=" STHSW35">W OF FO</th>
<th  title="Total Offensif Zone Faceoff" class=" STHSW35">T OF FO</th>
<th  title="Offensif Zone Faceoff %" class=" STHSW35">OF FO%</th>
<th  title="Won Defensif Zone Faceoff" class=" STHSW35">W DF FO</th>
<th  title="Total Defensif Zone Faceoff" class=" STHSW35">T DF FO</th>
<th  title="Defensif Zone Faceoff %" class=" STHSW35">DF FO%</th>
<th  title="Won Neutral Zone Faceoff" class=" STHSW35">W NT FO</th>
<th  title="Total Neutral Zone Faceoff" class=" STHSW35">T NT FO</th>
<th  title="Neutral Zone Faceoff %" class=" STHSW35">NT FO%</th>
<th  title="Puck Time In Offensif Zone" class=" STHSW25">PZ DF</th>
<th  title="Puck Time Control In Offensif Zone" class=" STHSW25">PZ OF</th>
<th  title="Puck Time In Defensif Zone" class=" STHSW25">PZ NT</th>
<th  title="Puck Time Control In Defensif Zone" class=" STHSW25">PC DF</th>
<th  title="Puck Time In Neutral Zone" class=" STHSW25">PC OF</th>
<th  title="Puck Time Control In Neutral Zone" class=" STHSW25">PC NT</th>
</tr></thead><tbody>
<?php
$Order = 0;
$NoSort = (boolean)FALSE;
if (empty($TeamStatSub) == false){while ($row = $TeamStatSub ->fetchArray()) {
	If ($row['Number'] <= 100){
		$Order +=1;
		echo "<tr><td>" . $Order ."</td>";		
		If ($CareerLeaderSubPrintOut == 0){
			echo "<td class=\"sticky-col first-col\">";
			If ($row['TeamThemeID'] > 0){echo "<img src=\"" . $ImagesCDNPath . "/images/" . $row['TeamThemeID'] .".png\" alt=\"\" class=\"STHSPHPTeamStatsTeamImage\" />";}				
			echo "<a href=\"" . $TypeText . "Team.php?Team=" . $row['Number'] . "\">" . $row['Name'] . "</a></td>";
		}else{
			echo "<td class=\"sticky-col first-col\">" . $row['Name'] . "</td>";
		}
	}else{
		If ($NoSort == False){echo "</tbody><tbody class=\"tablesorter-no-sort\">";$NoSort=True;}
		echo "<tr><td></td>";
		echo "<td class=\"sticky-col first-col\">" . $row['Name'] . "</td>";
	}
	If ($CareerLeaderSubPrintOut == 1){echo "<td>" . $row['Year'] . "</td>";}
	echo "<td>" . $row['GP'] . "</td>";
	echo "<td>" . $row['W']  . "</td>";
	echo "<td>" . $row['L'] . "</td>";
	echo "<td>" . $row['T'] . "</td>";
	echo "<td>" . $row['OTW'] . "</td>";	
	echo "<td>" . $row['OTL'] . "</td>";	
	echo "<td>" . $row['SOW'] . "</td>";	
	echo "<td>" . $row['SOL'] . "</td>";	
	echo "<td>" . $row['GF'] . "</td>";
	echo "<td>" . $row['GA'] . "</td>";
	echo "<td>" . ($row['GF'] - $row['GA']) . "</td>";	
	echo "<td>" . $row['HomeGP'] . "</td>";
	echo "<td>" . $row['HomeW']  . "</td>";
	echo "<td>" . $row['HomeL'] . "</td>";
	echo "<td>" . $row['HomeT'] . "</td>";
	echo "<td>" . $row['HomeOTW'] . "</td>";	
	echo "<td>" . $row['HomeOTL'] . "</td>";	
	echo "<td>" . $row['HomeSOW'] . "</td>";	
	echo "<td>" . $row['HomeSOL'] . "</td>";	
	echo "<td>" . $row['HomeGF'] . "</td>";
	echo "<td>" . $row['HomeGA'] . "</td>";	
	echo "<td>" . ($row['HomeGF'] - $row['HomeGA']) . "</td>";	
	echo "<td>" . ($row['GP'] - $row['HomeGP']) . "</td>";
	echo "<td>" . ($row['W'] - $row['HomeW']) . "</td>";
	echo "<td>" . ($row['L'] - $row['HomeL']) . "</td>";
	echo "<td>" . ($row['T'] - $row['HomeT']) . "</td>";	
	echo "<td>" . ($row['OTW'] - $row['HomeOTW']) . "</td>";
	echo "<td>" . ($row['OTL'] - $row['HomeOTL']) . "</td>";
	echo "<td>" . ($row['SOW'] - $row['HomeSOW']) . "</td>";
	echo "<td>" . ($row['SOL'] - $row['HomeSOL']) . "</td>";
	echo "<td>" . ($row['GF'] - $row['HomeGF']) . "</td>";
	echo "<td>" . ($row['GA'] - $row['HomeGA']) . "</td>";
	echo "<td>" . (($row['GF'] - $row['HomeGF']) - ($row['GA'] - $row['HomeGA'])) . "</td>";		
	echo "<td><strong>" . $row['Points'] . "</strong></td>";
	if ($row['GP'] > 0 AND $LeagueGeneral['PointSystemW'] > 0){echo "<td>" . number_Format(($row['Points'] / ($row['GP'] * $LeagueGeneral['PointSystemW'])),3) . "</td>";}else{echo "<td>" . number_Format("0",3) . "</td>";}
	echo "<td>" . $row['TotalGoal'] . "</td>";
	echo "<td>" . $row['TotalAssist'] . "</td>";
	echo "<td>" . $row['TotalPoint'] . "</td>";
	echo "<td>" . $row['EmptyNetGoal']. "</td>";
	echo "<td>" . $row['Shutouts']. "</td>";		
	echo "<td>" . $row['GoalsPerPeriod1']. "</td>";		
	echo "<td>" . $row['GoalsPerPeriod2']. "</td>";	
	echo "<td>" . $row['GoalsPerPeriod3']. "</td>";	
	echo "<td>" . $row['GoalsPerPeriod4']. "</td>";	
	echo "<td>" . $row['ShotsFor']. "</td>";	
	echo "<td>" . $row['ShotsPerPeriod1']. "</td>";
	echo "<td>" . $row['ShotsPerPeriod2']. "</td>";
	echo "<td>" . $row['ShotsPerPeriod3']. "</td>";
	echo "<td>" . $row['ShotsPerPeriod4']. "</td>";
	echo "<td>" . $row['ShotsAga']. "</td>";
	echo "<td>" . $row['ShotsBlock']. "</td>";		
	echo "<td>" . $row['Pim']. "</td>";
	echo "<td>" . $row['Hits']. "</td>";	
	echo "<td>" . $row['PPAttemp']. "</td>";
	echo "<td>" . $row['PPGoal']. "</td>";
	echo "<td>";if ($row['PPAttemp'] > 0){echo number_Format($row['PPGoal'] / $row['PPAttemp'] * 100,2) . "%";} else { echo "0%";} echo "</td>";		
	echo "<td>" . $row['PKAttemp']. "</td>";
	echo "<td>" . $row['PKGoalGA']. "</td>";
	echo "<td>";if ($row['PKAttemp'] > 0){echo number_Format(($row['PKAttemp'] - $row['PKGoalGA']) / $row['PKAttemp'] * 100,2) . "%";} else {echo "0%";} echo "</td>";
	echo "<td>" .  $row['PKGoalGF']. "</td>";	
	echo "<td>" . $row['FaceOffWonOffensifZone']. "</td>";
	echo "<td>" . $row['FaceOffTotalOffensifZone']. "</td>";		
	echo "<td>";if ($row['FaceOffTotalOffensifZone'] > 0){echo number_Format($row['FaceOffWonOffensifZone'] / $row['FaceOffTotalOffensifZone'] * 100,2) . "%" ;} else { echo "0%";} echo "</td>";	
	echo "<td>" . $row['FaceOffWonDefensifZone']. "</td>";
	echo "<td>" . $row['FaceOffTotalDefensifZone']. "</td>";
	echo "<td>";if ($row['FaceOffTotalDefensifZone'] > 0){echo number_Format($row['FaceOffWonDefensifZone'] / $row['FaceOffTotalDefensifZone'] * 100,2) . "%" ;} else { echo "0%";} echo "</td>";	
	echo "<td>" . $row['FaceOffWonNeutralZone']. "</td>";	
	echo "<td>" . $row['FaceOffTotalNeutralZone']. "</td>";	
	echo "<td>";if ($row['FaceOffTotalNeutralZone'] > 0){echo number_Format($row['FaceOffWonNeutralZone'] / $row['FaceOffTotalNeutralZone'] * 100,2) . "%" ;} else { echo "0%";} echo "</td>";	
	echo "<td>" . Floor($row['PuckTimeInZoneOF']/60). "</td>";
	echo "<td>" . Floor($row['PuckTimeControlinZoneOF']/60). "</td>";
	echo "<td>" . Floor($row['PuckTimeInZoneDF']/60). "</td>";
	echo "<td>" . Floor($row['PuckTimeControlinZoneDF']/60). "</td>";
	echo "<td>" . Floor($row['PuckTimeInZoneNT']/60). "</td>";		
	echo "<td>" . Floor($row['PuckTimeControlinZoneNT']/60). "</td>";		
	echo "</tr>\n"; /* The \n is for a new line in the HTML Code */
}}