<?php $PerformanceMonitorStart = microtime(true); require_once "STHSSetting.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="<?php echo $LeagueOwner . " - " . $MetaContent;?>">
<link href="STHSMain.css" rel="stylesheet" type="text/css">
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}

function getCountryAbre($Abre)
{
	switch ($Abre) {
		case ('SU'):
			return 'ch';
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
		case "anton-lundell":
			return "anton-lundell-549558";
			break;
		case "kandre-miller":
			return "kandre-miller-375770";
			break;
		case "matty-beniers":
			return "matty-beniers-579942";
			break;
		case "samuel-montembeault":
			return "sam-montembeault";
			break;
		case "igor-shestyorkin":
			return "igor-shesterkin";
			break;
		case "kent-johnson":
			return "kent-johnson-579886";
			break;		
		case "kaapo-kakko":
			return "kaapo-kakko-359909";
			break;
		case "alexander-wennberg":
			return "alex-wennberg";
			break;
		case "nick-robertson":
			return "nicholas-robertson";
			break;
		case "moritz-seider":
			return "moritz-seider-360208";
			break;
		case "maxime-comtois":
			return "max-comtois";
			break;
		case "ilya-sorokin":
			return "ilya-sorokin-327122";
			break;
		case "j.j.-moser":
			return "jj-moser-558712";
			break;
		case "alexander-nylander":
			return "alex-nylander";
			break;
		case "lucas-raymond":
			return "lucas-raymond-386513";
		default:
			return strtolower(str_replace([" ", "'", "é"], ["-", "", "e"], $name));
			break;
	}
}

function getSeasonName($name)
{
	switch ($name) {
		case "ASHL9-STHS.db":
			return "2019-2020";
			break;
		case "ASHL10-STHS.db":
			return "COVID(2020-2021)";
			break;
		case "ASHL101-STHS.db":
			return "2020-2021";
			break;
		case "ASHL11-STHS.db":
			return "2021-2022";
			break;
		case "ASHL12-STHS.db":
			return "2022-2023";
			break;
		case "ASHL13-STHS.db":
			return "2023-2024";
			break;
		case "ASHL14-STHS.db":
			return "2024-2025";
			break;
		default:
			return $name;
			break;
	}
}

?>
