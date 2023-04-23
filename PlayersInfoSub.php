<th data-priority="critical" title="Player Name" class="STHSW140Min"><?php echo $PlayersLang['PlayerName'];?></th>
<?php if($Team >= 0){echo "<th class=\"columnSelector-false STHSW140Min\" data-priority=\"critical\" title=\"Team Name\">" . $PlayersLang['TeamName'] . "</th>";}else{echo "<th data-priority=\"2\" title=\"Team Name\" class=\"STHSW140Min\">" . $PlayersLang['TeamName'] ."</th>";}?>
<th data-priority="1" title="Position" class="STHSW45">POS</th>
<th data-priority="1" title="Age" class="STHSW25"><?php echo $PlayersLang['Age'];?></th>
<th data-priority="6" title="Birthday" class="STHSW45"><?php echo $PlayersLang['Birthday'];?></th>
<th data-priority="6" title="Rookie" class="STHSW35"><?php echo $PlayersLang['Rookie'];?></th>
<th data-priority="6" title="Weight" class="STHSW35"><?php echo $PlayersLang['Weight'];?></th>
<th data-priority="6" title="Height" class="STHSW35"><?php echo $PlayersLang['Height'];?></th>
<th data-priority="1" title="No Trade" class="STHSW35"><?php echo $PlayersLang['NoTrade'];?></th>
<th data-priority="6" title="Available For Trade" class="columnSelector-false STHSW35"><?php echo $PlayersLang['AvailableForTrade'];?></th>
<th data-priority="6" title="Force Waiver" class=" STHSW45"><?php echo $PlayersLang['ForceWaiver'];?></th>
<!-- <th data-priority="1" title="Contract Duration" class="columnSelector-false STHSW45"><?php echo $PlayersLang['Contract'];?></th> -->
<th data-priority="1" title="Contract Duration" class="STHSW45"><?php echo $PlayersLang['Contract'];?></th>
<?php echo "<th data-priority=\"1\" class=\"STHSW25\" title=\"Status\">" . $PlayersLang['Status'] . "</th>";?>
<th class="columnSelector-false STHSW55" data-priority="1" title="Type"><?php echo $PlayersLang['Type'];?></th>
<th data-priority="1" title="Current Salary" class="STHSW85"><?php echo $LeagueGeneral['LeagueYearOutput'] . "-" . $LeagueGeneral['LeagueYearOutput'] + 1;?></th>
<?php 
if($LeagueOutputOption != Null){if ($FreeAgentYear == -1){
	if($LeagueOutputOption['OutputSalariesRemaining'] == "True"){echo "<th data-priority=\"6\" title=\"Salary Remaining\" class=\"columnSelector-false STHSW85\">" . $PlayersLang['SalaryRemaining'] . "</th>";}
	if($LeagueOutputOption['OutputSalariesAverageTotal'] == "True"){echo "<th data-priority=\"6\" title=\"Salary Average\" class=\"columnSelector-false STHSW85\">" . $PlayersLang['SalaryAverage'] . "</th>";}
	if($LeagueOutputOption['OutputSalariesAverageRemaining'] == "True"){echo "<th data-priority=\"6\" title=\"Salary Average Remaining\" class=\"columnSelector-false STHSW85\">" . $PlayersLang['SalaryAveRemaining'] . "</th>";}
}}
?>
<th data-priority="6" title="Salary Cap" class="columnSelector-false STHSW85"><?php echo $PlayersLang['SalaryCap'];?></th>
<th data-priority="6" title="Salary Cap Remaining" class="columnSelector-false STHSW85"><?php echo $PlayersLang['SalaryCapRemaining'];?></th>
<th data-priority="6" title="Exclude from Salary Cap" class="columnSelector-false columnSelector-false STHSW35"><?php echo $PlayersLang['ExcludefromSalaryCap'];?></th>
<?php
	echo "<th class=\"STHSW85\" data-priority=\"1\" title=\"Salary Year 2\">" . $LeagueGeneral['LeagueYearOutput'] + 1 . "-" . $LeagueGeneral['LeagueYearOutput'] + 2; "</th>";
	echo "<th class=\"STHSW85\" data-priority=\"1\" title=\"Salary Year 3\">" . $LeagueGeneral['LeagueYearOutput'] + 2 . "-" . $LeagueGeneral['LeagueYearOutput'] + 3; "</th>";
	echo "<th class=\"STHSW85\" data-priority=\"1\" title=\"Salary Year 4\">" . $LeagueGeneral['LeagueYearOutput'] + 3 . "-" . $LeagueGeneral['LeagueYearOutput'] + 4; "</th>";
	echo "<th class=\"STHSW85\" data-priority=\"1\" title=\"Salary Year 5\">" . $LeagueGeneral['LeagueYearOutput'] + 4 . "-" . $LeagueGeneral['LeagueYearOutput'] + 5; "</th>";
	echo "<th class=\"STHSW85\" data-priority=\"1\" title=\"Salary Year 6\">" . $LeagueGeneral['LeagueYearOutput'] + 5 . "-" . $LeagueGeneral['LeagueYearOutput'] + 6; "</th>";
	echo "<th class=\"STHSW85\" data-priority=\"1\" title=\"Salary Year 7\">" . $LeagueGeneral['LeagueYearOutput'] + 6 . "-" . $LeagueGeneral['LeagueYearOutput'] + 7; "</th>";
	echo "<th class=\"STHSW85\" data-priority=\"1\" title=\"Salary Year 8\">" . $LeagueGeneral['LeagueYearOutput'] + 7 . "-" . $LeagueGeneral['LeagueYearOutput'] + 8; "</th>";
	echo "<th class=\"STHSW85\" data-priority=\"1\" title=\"Salary Year 9\">" . $LeagueGeneral['LeagueYearOutput'] + 8 . "-" . $LeagueGeneral['LeagueYearOutput'] + 9; "</th>";
	echo "<th class=\"STHSW85\" data-priority=\"1\" title=\"Salary Year 10\">" . $LeagueGeneral['LeagueYearOutput'] + 9 . "-" . $LeagueGeneral['LeagueYearOutput'] + 10; "</th>";

?>
<th data-priority="5" title="Hyperlink" class="columnSelector-false STHSW65">Link</th>
</tr></thead><tbody>

<?php 
if (empty($PlayerInfo) == false){while ($Row = $PlayerInfo ->fetchArray()) { 
	echo "<tr><td>";
	if ($Row['PosG']== "True"){echo "<a href=\"GoalieReport.php?Goalie=";}else{echo "<a href=\"PlayerReport.php?Player=";}
	echo $Row['Number'] . "\">" . $Row['Name'] . "</a>";
	if ($Row['Retire'] == "True"){
		echo "</td><td>" . $PlayersLang['Retire'] . "</td>";
	}else{		
		if ($Row['ConditionDecimal'] > $LeagueFinance['RemoveSalaryCapWhenPlayerUnderCondition'] AND $Row['ExcludeSalaryCap'] == "False"){
		if($Row['ProSalaryinFarm'] == "True"){echo $PlayersLang['1WayContract'] . "</td>";}else{echo "</td>";}}else{echo $PlayersLang['OutofPayroll'] . "</td>";}
		if ($FreeAgentYear == -1){
			echo "<td>" . $Row['TeamName'] . "</td>";	
		}else{
			echo "<td>" . $Row['ProTeamName'] . "</td>";	
		}	
	}
	echo "<td>" .$Position = (string)"";
	if ($Row['PosC']== "True"){if ($Position == ""){$Position = "C";}else{$Position = $Position . "/C";}}
	if ($Row['PosLW']== "True"){if ($Position == ""){$Position = "LW";}else{$Position = $Position . "/LW";}}
	if ($Row['PosRW']== "True"){if ($Position == ""){$Position = "RW";}else{$Position = $Position . "/RW";}}
	if ($Row['PosD']== "True"){if ($Position == ""){$Position = "D";}else{$Position = $Position . "/D";}}
	if ($Row['PosG']== "True"){if ($Position == ""){$Position = "G";}}
	echo $Position . "</td>";	
	echo "<td>" . $Row['Age'] . "</td>";
	echo "<td>" . $Row['AgeDate'] . "</td>";
	echo "<td>"; if ($Row['Rookie'] == "True"){ echo "Yes"; }else{echo "No";};echo "</td>";	
	if ($LeagueOutputOption['LBSInsteadofKG'] == "True"){echo "<td>" . $Row['Weight'] . " Lbs</td>";}else{echo "<td>" . Round($Row['Weight'] / 2.2) . " Kg</td>";}
	if ($LeagueOutputOption['InchInsteadofCM'] == "True"){echo "<td>" . (($Row['Height'] - ($Row['Height'] % 12))/12) . " ft" .  ($Row['Height'] % 12) .  "</td>";}else{echo "<td>" . Round($Row['Height'] * 2.54) . " CM</td>";}	
	echo "<td>"; if ($Row['NoTrade']== "True"){ echo "Yes"; }else{echo "No";};echo "</td>";
	echo "<td>"; if ($Row['AvailableForTrade']== "True"){ echo "Yes"; }else{echo "No";};echo "</td>";
	echo "<td>"; if ($Row['ForceWaiver']== "True"){ echo "Yes"; }else{echo "No";};echo "</td>";
	echo "<td>" . $Row['Contract'] . "</td>";
	echo "<td>"; if ($Row['CanPlayPro']== "True" AND $Row['CanPlayFarm']== "True"){echo "Pro &amp; Farm";}elseif($Row['CanPlayPro']== "True" AND $Row['CanPlayFarm']== "False"){echo "Pro Only";}else{echo "Farm Only";	};echo "</td>";
	if ($FreeAgentYear == 1 and $Row['NextYearFreeAgentPlayerType'] != Null){
		if ($Row['PosG']== "True"){
			if ($Row['NextYearFreeAgentPlayerType']=="False"){echo "<td>" . $PlayersLang['AlreadyResign'] . "</td>";}else{echo "<td></td>";}
		}else{
			if ($Row['NextYearFreeAgentPlayerType']=="True"){echo "<td>" . $PlayersLang['AlreadyResign'] . "</td>";}else{echo "<td></td>";}
		}			
	}elseif ($LeagueOutputOption['FreeAgentUseDateInsteadofDay'] == "True" AND $FreeAgentYear == 1){
		$age = date_diff(date_create($Row['AgeDate']), date_create($LeagueOutputOption['FreeAgentRealDate']))->y;
		if ($age >= $LeagueGeneral['UFAAge']){echo "<td>" . $PlayersLang['UFA'] . "</td>";}elseif($age >= $LeagueGeneral['RFAAge']){echo "<td>" . $PlayersLang['RFA'] . "</td>";}else{echo "<td>" . $PlayersLang['ELC'] . "</td>";}
	}else{
		if ($Row['Age'] >= $LeagueGeneral['UFAAge']){echo "<td>" . $PlayersLang['UFA'] . "</td>";}elseif($Row['Age'] >= $LeagueGeneral['RFAAge']){echo "<td>" . $PlayersLang['RFA'] . "</td>";}else{echo "<td>" . $PlayersLang['ELC'] . "</td>";}
	}
	echo "<td>"; if ($Row['Salary1'] > 0){echo number_format($Row['Salary1'],0) . "$";};echo "</td>";	
	if ($FreeAgentYear == -1){
		if($LeagueOutputOption['OutputSalariesRemaining'] == "True"){echo "<td>"; if ($Row['SalaryRemaining'] > 0){echo number_format($Row['SalaryRemaining'],0) . "$";};echo "</td>";}
		if($LeagueOutputOption['OutputSalariesAverageTotal'] == "True"){echo "<td>"; if ($Row['SalaryAverage'] > 0){echo number_format($Row['SalaryAverage'],0) . "$";};echo "</td>";}
		if($LeagueOutputOption['OutputSalariesAverageRemaining'] == "True"){echo "<td>"; if ($Row['SalaryAverageRemaining'] > 0){echo number_format($Row['SalaryAverageRemaining'],0) . "$";};echo "</td>";}
	}
	echo "<td>" .  number_format($Row['SalaryCap'],0) . "$</td>";
	echo "<td>" .  number_format($Row['SalaryCapRemaining'],0) . "$</td>";
	echo "<td>"; if ($Row['ExcludeSalaryCap']== "True"){ echo "Yes"; }else{echo "No";};echo "</td>";
	if ($FreeAgentYear == -1){
		echo "<td>";
			if ($Row['Salary2'] > 0)
			{
				echo number_format($Row['Salary2'],0) . "$";
			}
		echo "</td>";	
		echo "<td>";
			if ($Row['Salary3'] > 0)
			{
				echo number_format($Row['Salary3'],0) . "$";
			}
		echo "</td>";	
		echo "<td>"; 
			if ($Row['Salary4'] > 0)
			{
				echo number_format($Row['Salary4'],0) . "$";
			}
		echo "</td>";	
		echo "<td>"; 
			if ($Row['Salary5'] > 0)
			{
				echo number_format($Row['Salary5'],0) . "$";
			}
		echo "</td>";	
		echo "<td>"; 
			if ($Row['Salary6'] > 0)
			{
				echo number_format($Row['Salary6'],0) . "$";
			}
		echo "</td>";	
		echo "<td>"; 
			if ($Row['Salary7'] > 0)
			{
				echo number_format($Row['Salary7'],0) . "$";
			}
		echo "</td>";	
		echo "<td>"; 
			if ($Row['Salary8'] > 0)
			{
				echo number_format($Row['Salary8'],0) . "$";
			}
		echo "</td>";	
		echo "<td>"; 
			if ($Row['Salary9'] > 0)
			{
				echo number_format($Row['Salary9'],0) . "$";
			}
		echo "</td>";	
		echo "<td>"; 
			if ($Row['Salary10'] > 0)
			{
				echo number_format($Row['Salary10'],0) . "$";
			}
		echo "</td>";
	}
	echo "<td>";
	if ($Row['URLLink'] != ""){echo "<a href=" . $Row['URLLink'] . " target=\"new\">" . $PlayersLang['Link'] . "</a>";}
	if ($Row['URLLink'] != "" AND $Row['NHLID'] != ""){echo " / ";}
	if ($Row['NHLID'] != ""){echo "<a href=\"https://www.nhl.com/player/" . $Row['NHLID'] . "\" target=\"new\">" . $PlayersLang['NHLLink'] . "</a>";}
	echo "</td>";
	echo "</tr>\n"; /* The \n is for a new line in the HTML Code */
}}
?>
