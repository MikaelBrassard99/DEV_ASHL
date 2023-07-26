<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Trade History</title>
<script src="ASHL9.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - ASHL9-STHS.db - ASHL9-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL9.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL9-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL9-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
[2020-03-22 10:06:40] - Konstantin Barulin was added to Vegas Golden Knights.<br />
[2020-03-10 06:28:59] - Martin Frk was added to Columbus Blue Jackets.<br />
[2020-03-02 17:26:14] - Ilya Konovalov has been added to Ottawa Senators.<br />
[2020-02-27 07:00:41] - Jeff Petry was added to Columbus Blue Jackets.<br />
[2020-02-26 06:49:18] - TRADE : From Colorado Avalanche to Winnipeg Jets : Niklas Hjalmarsson, 4 000 000 $ (Salary Cap).<br />
[2020-02-26 06:49:18] - TRADE : From Winnipeg Jets to Colorado Avalanche : Alexander Kerfoot.<br />
[2020-02-26 06:46:54] - TRADE : From Los Angeles Kings to Vegas Golden Knights : Brett Howden.<br />
[2020-02-26 06:46:54] - TRADE : From Vegas Golden Knights to Los Angeles Kings : Mike Richards.<br />
[2020-02-26 06:45:50] - TRADE : From Ottawa Senators to Arizona Coyotes : Louick Marcotte.<br />
[2020-02-26 06:45:50] - TRADE : From Arizona Coyotes to Ottawa Senators : Aliaksei Protas (P), David Gustafsson (P).<br />
[2020-02-26 06:43:42] - TRADE : From Ottawa Senators to Dallas Stars : Brandon Saad, Rob O'Gara, Jake Wise (P), Y:2020-RND:3-OTT.<br />
[2020-02-26 06:43:42] - TRADE : From Dallas Stars to Ottawa Senators : Colin Miller, Alexander Nylander, Ty Dellandrea (P), Y:2020-RND:2-DAL.<br />
[2020-02-26 06:39:43] - TRADE : From Florida Panthers to Nashville Predators : Troy Brouwer, Y:2020-RND:4-VAN, Y:2021-RND:4-FLA.<br />
[2020-02-26 06:39:43] - TRADE : From Nashville Predators to Florida Panthers : Darren Helm, 1 000 000 $ (Salary Cap).<br />
[2020-02-26 06:28:24] - TRADE : From Detroit Red Wings to Washington Capitals : Vladislav Kamenev, Oliver Wahlstrom, Y:2020-RND:1-DET.<br />
[2020-02-26 06:28:24] - TRADE : From Washington Capitals to Detroit Red Wings : Mikael Granlund.<br />
[2020-02-25 19:58:29] - TRADE : From Buffalo Sabres to Nashville Predators : Nate Schmidt, Ryan Johnson (P).<br />
[2020-02-25 19:58:29] - TRADE : From Nashville Predators to Buffalo Sabres : Mike Green.<br />
[2020-02-25 19:38:59] - TRADE : From Anaheim Ducks to Vancouver Canucks : Trevor Carrick.<br />
[2020-02-25 19:38:59] - TRADE : From Vancouver Canucks to Anaheim Ducks : Y:2020-RND:4-DET.<br />
[2020-02-25 19:22:13] - TRADE : From Nashville Predators to Montreal Canadiens : Roman Josi.<br />
[2020-02-25 19:22:13] - TRADE : From Montreal Canadiens to Nashville Predators : Mike Green, Conor Timmins (P), Y:2020-RND:4-ARZ, Y:2021-RND:2-PIT.<br />
[2020-02-25 19:20:56] - TRADE : From Florida Panthers to Washington Capitals : Artemi Knyazev (P).<br />
[2020-02-25 19:20:56] - TRADE : From Washington Capitals to Florida Panthers : Kyle Clifford.<br />
[2020-02-25 18:12:25] - TRADE : From Columbus Blue Jackets to Vegas Golden Knights : Linus Omark, 300 000 $ (Salary Cap).<br />
[2020-02-25 18:12:25] - TRADE : From Vegas Golden Knights to Columbus Blue Jackets : Derek Grant, 5 000 000 $ (Money), Y:2021-RND:4-CHI.<br />
[2020-02-25 18:07:59] - TRADE : From Calgary Flames to Arizona Coyotes : Matthew Finn, Erik Brannstrom (P), Y:2020-RND:1-LOS.<br />
[2020-02-25 18:07:59] - TRADE : From Arizona Coyotes to Calgary Flames : Travis Hamonic, 1 453 552 $ (Salary Cap).<br />
[2020-02-25 18:06:14] - TRADE : From Ottawa Senators to Pittsburgh Penguins : Alexander Burmistrov.<br />
[2020-02-25 18:06:14] - TRADE : From Pittsburgh Penguins to Ottawa Senators : Brandon Saad, Aarne Talvitie (P), Y:2021-RND:1-PIT.<br />
[2020-02-25 18:05:10] - TRADE : From Vancouver Canucks to Arizona Coyotes : Mike Amadio, David Gustafsson (P), Samuel Fagemo (P), Y:2021-RND:4-ARZ.<br />
[2020-02-25 18:05:10] - TRADE : From Arizona Coyotes to Vancouver Canucks : Jakub Voracek, Y:2021-RND:3-MIN.<br />
[2020-02-25 06:53:41] - TRADE : From Seattle Saints to Vegas Golden Knights : Mike Richards, 1 000 000 $ (Salary Cap).<br />
[2020-02-25 06:53:41] - TRADE : From Vegas Golden Knights to Seattle Saints : Evgeny Dadonov.<br />
[2020-02-25 06:53:19] - TRADE : From New York Islanders to Vegas Golden Knights : Morgan Klimchuk, Dennis Cholowski.<br />
[2020-02-25 06:53:19] - TRADE : From Vegas Golden Knights to New York Islanders : Mark Stone, Benoit-Olivier Groulx (P), 3 500 000 $ (Salary Cap).<br />
[2020-02-25 06:52:42] - TRADE : From Columbus Blue Jackets to Minnesota Wild : James Van Riemsdyk, Shane Hanna, Adam Ginning.<br />
[2020-02-25 06:52:42] - TRADE : From Minnesota Wild to Columbus Blue Jackets : Ryan Johansen.<br />
[2020-02-24 06:41:48] - TRADE : From Vancouver Canucks to Ottawa Senators : Alexander Burmistrov, Y:2021-RND:5-SEA.<br />
[2020-02-24 06:41:48] - TRADE : From Ottawa Senators to Vancouver Canucks : Erik Cernak, Colin White, Y:2020-RND:3-PIT.<br />
[2020-02-24 06:41:13] - TRADE : From New York Islanders to San Jose Sharks : Clayton Keller, Y:2021-RND:2-NYI.<br />
[2020-02-24 06:41:13] - TRADE : From San Jose Sharks to New York Islanders : Nick Cousins, Y:2020-RND:1-OTT.<br />
[2020-02-23 17:22:01] - TRADE : From New York Islanders to Seattle Saints : Martin Reway, Curtis Hamilton, Callum Booth.<br />
[2020-02-23 17:22:01] - TRADE : From Seattle Saints to New York Islanders : Lars Eller, Tom Wilson, Jake Paterson, Y:2020-RND:4-PHI.<br />
[2020-02-22 07:06:10] - TRADE : From Seattle Saints to Pittsburgh Penguins : Robert Bortuzzo.<br />
[2020-02-22 07:06:10] - TRADE : From Pittsburgh Penguins to Seattle Saints : Y:2022-RND:2-PIT.<br />
[2020-02-22 07:05:33] - TRADE : From Seattle Saints to Vancouver Canucks : Alexander Burmistrov, Samuel Fagemo (P).<br />
[2020-02-22 07:05:33] - TRADE : From Vancouver Canucks to Seattle Saints : Brayden Schenn, Zachary Senyshyn, Keegan Kanzig, Y:2020-RND:3-MIN, Y:2020-RND:5-BUF.<br />
[2020-02-22 07:04:55] - TRADE : From Seattle Saints to Vegas Golden Knights : Michael Bunting.<br />
[2020-02-22 07:04:55] - TRADE : From Vegas Golden Knights to Seattle Saints : Patrice Cormier.<br />
[2020-02-21 11:22:19] - Tomas Kubalik was added to Buffalo Sabres.<br />
[2020-02-21 11:22:13] - Nicklas Bergfors was added to Buffalo Sabres.<br />
[2020-02-21 11:22:08] - Matt Taormina was added to Buffalo Sabres.<br />
[2020-02-21 11:22:04] - Kyle Cumiskey was added to Buffalo Sabres.<br />
[2020-02-20 06:55:54] - TRADE : From Vegas Golden Knights to Ottawa Senators : Evan Rodrigues, Drake Caggiula, 14 000 000 $ (Money), Y:2022-RND:3-PIT.<br />
[2020-02-20 06:55:54] - TRADE : From Ottawa Senators to Vegas Golden Knights : Brendan Leipsic.<br />
[2020-02-19 06:35:37] - TRADE : From Chicago Blackhawks to Seattle Saints : Nicolas Petan.<br />
[2020-02-19 06:35:37] - TRADE : From Seattle Saints to Chicago Blackhawks : William Carrier, Mitch Holmberg, Y:2020-RND:2-CAR.<br />
[2020-02-19 06:35:04] - TRADE : From Ottawa Senators to Columbus Blue Jackets : Alexandar Georgiyev, Y:2020-RND:4-NYI, Y:2020-RND:5-NYI.<br />
[2020-02-19 06:35:04] - TRADE : From Columbus Blue Jackets to Ottawa Senators : Luke Henman, Y:2020-RND:2-PHI.<br />
[2020-02-19 06:33:39] - TRADE : From Vegas Golden Knights to Columbus Blue Jackets : Y:2022-RND:5-VEG.<br />
[2020-02-19 06:33:39] - TRADE : From Columbus Blue Jackets to Vegas Golden Knights : Frans Nielsen.<br />
[2020-02-18 06:36:03] - TRADE : From Montreal Canadiens to New York Islanders : Mac Weegar.<br />
[2020-02-18 06:36:03] - TRADE : From New York Islanders to Montreal Canadiens : Antoine Marcoux, Y:2020-RND:3-FLA.<br />
[2020-02-15 07:27:49] - TRADE : From Philadelphia Flyers to Calgary Flames : Alex Galchenyuk, 2 000 000 $ (Salary Cap), Y:2020-RND:3-SEA.<br />
[2020-02-15 07:27:49] - TRADE : From Calgary Flames to Philadelphia Flyers : Tomas Hertl, Nolan Patrick.<br />
[2020-02-13 06:26:34] - TRADE : From Boston Bruins to Arizona Coyotes : Rasmus Asplund, Y:2021-RND:3-BOS.<br />
[2020-02-13 06:26:34] - TRADE : From Arizona Coyotes to Boston Bruins : Zach Parise.<br />
[2020-02-11 06:27:22] - TRADE : From Seattle Saints to Montreal Canadiens : Alexander Urbom.<br />
[2020-02-11 06:27:22] - TRADE : From Montreal Canadiens to Seattle Saints : Ian McCoshen.<br />
[2020-02-10 06:25:22] - TRADE : From New Jersey Devils to St. Louis Blues : Artemi Panarin, Y:2022-RND:5-NJD.<br />
[2020-02-10 06:25:22] - TRADE : From St. Louis Blues to New Jersey Devils : Jared McCann, Nick Merkley (P), Simon Benoit (P), Xavier Simoneau (P), Y:2021-RND:1-STL.<br />
[2020-02-09 13:36:32] - Gaetan Haas was added to Montreal Canadiens.<br />
[2020-02-09 06:23:15] - TRADE : From Minnesota Wild to Montreal Canadiens : Y:2020-RND:5-MTL.<br />
[2020-02-09 06:23:15] - TRADE : From Montreal Canadiens to Minnesota Wild : Antoine Bibeau.<br />
[2020-02-08 06:46:11] - TRADE : From Tampa Bay Lightning to Anaheim Ducks : Y:2020-RND:3-SJS.<br />
[2020-02-08 06:46:11] - TRADE : From Anaheim Ducks to Tampa Bay Lightning : Lucas Wallmark.<br />
[2020-02-08 06:45:44] - TRADE : From Ottawa Senators to Vancouver Canucks : Kirill Marchenko (P), Y:2020-RND:5-BUF.<br />
[2020-02-08 06:45:44] - TRADE : From Vancouver Canucks to Ottawa Senators : Y:2020-RND:2-CHI, Y:2020-RND:3-OTT.<br />
[2020-02-08 06:44:50] - TRADE : From Ottawa Senators to Quebec Nordiques : T.J. Oshie.<br />
[2020-02-08 06:44:50] - TRADE : From Quebec Nordiques to Ottawa Senators : Alexis Pepin, Allan McShane (P), Y:2020-RND:2-QUE.<br />
[2020-02-07 06:21:06] - Jason Pominville was added to Montreal Canadiens.<br />
[2020-02-06 06:51:15] - TRADE : From Seattle Saints to Tampa Bay Lightning : Ryan Strome, Kaedan Korczak (P).<br />
[2020-02-06 06:51:15] - TRADE : From Tampa Bay Lightning to Seattle Saints : Nino Niederreiter, Y:2021-RND:4-TBL.<br />
[2020-02-06 06:50:47] - TRADE : From Ottawa Senators to Pittsburgh Penguins : Jiri Sekac.<br />
[2020-02-06 06:50:47] - TRADE : From Pittsburgh Penguins to Ottawa Senators : Y:2020-RND:4-NYI.<br />
[2020-02-06 06:50:29] - TRADE : From Ottawa Senators to Philadelphia Flyers : Mark Giordano, Trevor Zegras (P).<br />
[2020-02-06 06:50:29] - TRADE : From Philadelphia Flyers to Ottawa Senators : Andrej Meszaros, Dylan Cozens (P).<br />
[2020-02-05 18:02:30] - Jason Garrison was added to Pittsburgh Penguins.<br />
[2020-02-05 18:02:21] - Jason Pominville was added to Pittsburgh Penguins.<br />
[2020-02-05 18:02:13] - Jan Kovar was added to Pittsburgh Penguins.<br />
[2020-02-05 06:32:23] - TRADE : From Nashville Predators to Anaheim Ducks : Henrik Sedin.<br />
[2020-02-05 06:32:23] - TRADE : From Anaheim Ducks to Nashville Predators : Tuomo Ruutu, Y:2020-RND:2-WSH, Y:2021-RND:2-ANH.<br />
[2020-02-05 06:31:45] - TRADE : From Columbus Blue Jackets to Detroit Red Wings : Jason Spezza, 3 000 000 $ (Salary Cap).<br />
[2020-02-05 06:31:45] - TRADE : From Detroit Red Wings to Columbus Blue Jackets : Frans Nielsen, Ilya Mikheyev (P), Y:2021-RND:3-DET.<br />
[2020-02-04 06:52:37] - TRADE : From Philadelphia Flyers to Detroit Red Wings : Mika Zibanejad, Jack Hughes.<br />
[2020-02-04 06:52:37] - TRADE : From Detroit Red Wings to Philadelphia Flyers : Ryan Nugent-Hopkins, Dylan Cozens (P).<br />
[2020-02-04 06:51:59] - TRADE : From Quebec Nordiques to Nashville Predators : Y:2020-RND:1-SEA.<br />
[2020-02-04 06:51:59] - TRADE : From Nashville Predators to Quebec Nordiques : Colin Wilson.<br />
[2020-02-03 06:23:51] - TRADE : From St. Louis Blues to Ottawa Senators : Tyler Toffoli.<br />
[2020-02-03 06:23:51] - TRADE : From Ottawa Senators to St. Louis Blues : Tomas Plekanec, Y:2020-RND:3-STL.<br />
[2020-02-03 06:23:16] - TRADE : From Montreal Canadiens to Quebec Nordiques : 1 $ (Money).<br />
[2020-02-03 06:23:16] - TRADE : From Quebec Nordiques to Montreal Canadiens : Bokondji Imama.<br />
[2020-02-02 06:27:52] - TRADE : From Vegas Golden Knights to New Jersey Devils : Ilya Sorokin, Travis Dermott, Y:2020-RND:1-VEG.<br />
[2020-02-02 06:27:52] - TRADE : From New Jersey Devils to Vegas Golden Knights : Mark Stone, 2 500 000 $ (Salary Cap).<br />
[2020-02-01 06:56:44] - TRADE : From Anaheim Ducks to New York Islanders : Max Friberg.<br />
[2020-02-01 06:56:44] - TRADE : From New York Islanders to Anaheim Ducks : Taylor Doherty.<br />
[2020-02-01 06:55:59] - Blair Betts was added to Toronto Maple Leafs.<br />
[2020-01-31 06:35:27] - TRADE : From Colorado Avalanche to Columbus Blue Jackets : 5 000 000 $ (Money), Y:2020-RND:4-COL.<br />
[2020-01-31 06:35:27] - TRADE : From Columbus Blue Jackets to Colorado Avalanche : Dustin Byfuglien, 4 500 000 $ (Salary Cap).<br />
[2020-01-30 06:27:44] - TRADE : From Seattle Saints to Buffalo Sabres : Jacob Markstrom.<br />
[2020-01-30 06:27:44] - TRADE : From Buffalo Sabres to Seattle Saints : Robin Lehner, Samuel Fagemo (P), Y:2020-RND:2-CAR.<br />
[2020-01-29 06:27:09] - TRADE : From Seattle Saints to Montreal Canadiens : Justin Brazeau, Y:2022-RND:2-OTT.<br />
[2020-01-29 06:27:09] - TRADE : From Montreal Canadiens to Seattle Saints : Andreas Borgman.<br />
[2020-01-29 06:26:35] - TRADE : From Anaheim Ducks to Pittsburgh Penguins : Brandon Saad.<br />
[2020-01-29 06:26:35] - TRADE : From Pittsburgh Penguins to Anaheim Ducks : Max Friberg.<br />
[2020-01-28 06:40:01] - TRADE : From Seattle Saints to New York Islanders : Chris Bigras, Luke Adam.<br />
[2020-01-28 06:40:01] - TRADE : From New York Islanders to Seattle Saints : Brayden McNabb, Kaedan Korczak (P).<br />
[2020-01-26 07:40:37] - TRADE : From Vancouver Canucks to Ottawa Senators : Ryan Merkley, Jesse Ylonen.<br />
[2020-01-26 07:40:37] - TRADE : From Ottawa Senators to Vancouver Canucks : Joe Veleno, Bracken Kearns, Y:2020-RND:4-DET.<br />
[2020-01-26 07:39:55] - TRADE : From San Jose Sharks to Ottawa Senators : Brendan Leipsic, Sébastien Piché, Trevor Zegras (P).<br />
[2020-01-26 07:39:55] - TRADE : From Ottawa Senators to San Jose Sharks : Mike Hoffman, Duncan Keith, Y:2021-RND:2-OTT.<br />
[2020-01-26 07:39:14] - TRADE : From Vancouver Canucks to Ottawa Senators : Andreas Athanasiou.<br />
[2020-01-26 07:39:14] - TRADE : From Ottawa Senators to Vancouver Canucks : Zachary Senyshyn, Y:2020-RND:2-CHI, Y:2020-RND:3-MIN.<br />
[2020-01-26 07:38:40] - TRADE : From Vegas Golden Knights to Ottawa Senators : Kale Clague.<br />
[2020-01-26 07:38:40] - TRADE : From Ottawa Senators to Vegas Golden Knights : Derek Grant, Y:2021-RND:1-ARZ.<br />
[2020-01-25 08:00:43] - TRADE : From Vegas Golden Knights to Vancouver Canucks : Alexander Killorn, Y:2021-RND:4-VEG.<br />
[2020-01-25 08:00:43] - TRADE : From Vancouver Canucks to Vegas Golden Knights : Cory Conacher.<br />
[2020-01-25 07:59:01] - TRADE : From Montreal Canadiens to Columbus Blue Jackets : Shawn Matthias.<br />
[2020-01-25 07:59:01] - TRADE : From Columbus Blue Jackets to Montreal Canadiens : Y:2020-RND:4-NJD.<br />
[2020-01-25 07:58:51] - TRADE : From Dallas Stars to Columbus Blue Jackets : Y:2020-RND:3-NJD.<br />
[2020-01-25 07:58:51] - TRADE : From Columbus Blue Jackets to Dallas Stars : Mikko Koivu.<br />
[2020-01-24 09:20:45] - TRADE : From Vancouver Canucks to Philadelphia Flyers : Jack Hughes, Andrei Svechnikov, Nick Suzuki, Y:2020-RND:3-SEA.<br />
[2020-01-24 09:20:45] - TRADE : From Philadelphia Flyers to Vancouver Canucks : Connor McDavid, Andreas Athanasiou.<br />
[2020-01-24 09:13:40] - Petr Straka was added to Vancouver Canucks.<br />
[2020-01-23 06:24:02] - TRADE : From Tampa Bay Lightning to New York Islanders : Vince Dunn, Y:2021-RND:3-TBL.<br />
[2020-01-23 06:24:02] - TRADE : From New York Islanders to Tampa Bay Lightning : Brian Dumoulin, Alex Newhook (P).<br />
[2020-01-20 13:01:36] - TRADE : From Vancouver Canucks to New York Islanders : Joel Eriksson Ek, Y:2020-RND:3-FLA.<br />
[2020-01-20 13:01:36] - TRADE : From New York Islanders to Vancouver Canucks : Brayden Schenn, Y:2021-RND:5-SEA.<br />
[2020-01-09 06:37:07] - TRADE : From Ottawa Senators to Vegas Golden Knights : Jake DeBrusk.<br />
[2020-01-09 06:37:07] - TRADE : From Vegas Golden Knights to Ottawa Senators : Josh Ho-Sang, Y:2020-RND:2-BUF.<br />
[2020-01-07 05:18:15] - Leo Komarov was added to Montreal Canadiens.<br />
[2020-01-06 06:29:09] - TRADE : From Ottawa Senators to Pittsburgh Penguins : Kris Versteeg.<br />
[2020-01-06 06:29:09] - TRADE : From Pittsburgh Penguins to Ottawa Senators : Duncan Keith.<br />
[2020-01-06 06:28:52] - TRADE : From New York Islanders to Pittsburgh Penguins : Max Friberg, Y:2020-RND:4-NYI, Y:2021-RND:5-NYI.<br />
[2020-01-06 06:28:52] - TRADE : From Pittsburgh Penguins to New York Islanders : Brayden Schenn.<br />
[2020-01-06 06:28:23] - TRADE : From Vancouver Canucks to Dallas Stars : Vladimir Tarasenko, Max Domi, 7 000 000 $ (Money), 5 600 000 $ (Salary Cap).<br />
[2020-01-06 06:28:23] - TRADE : From Dallas Stars to Vancouver Canucks : Kaapo Kakko, Nick Suzuki, Y:2020-RND:4-DAL.<br />
[2020-01-06 06:27:00] - TRADE : From Vancouver Canucks to New Jersey Devils : T.J. Brennan.<br />
[2020-01-06 06:27:00] - TRADE : From New Jersey Devils to Vancouver Canucks : Y:2020-RND:3-SEA, Y:2021-RND:4-NJD.<br />
[2020-01-06 06:26:00] - TRADE : From Ottawa Senators to Florida Panthers : Josh Anderson, Madison Bowey.<br />
[2020-01-06 06:26:00] - TRADE : From Florida Panthers to Ottawa Senators : Mike Hoffman, Colin White.<br />
[2020-01-05 06:54:24] - TRADE : From Seattle Saints to New York Islanders : Morgan Klimchuk, Taylor Doherty.<br />
[2020-01-05 06:54:24] - TRADE : From New York Islanders to Seattle Saints : Sven Baertschi, Chris Bigras, Tyler Benson.<br />
[2020-01-05 05:03:52] - Hannibal Weitzmann was added to Washington Capitals.<br />
[2020-01-04 03:38:48] - Kyle Keyser was added to Vegas Golden Knights.<br />
[2020-01-03 11:38:29] - TRADE : From Vegas Golden Knights to New York Islanders : Chris Bigras, Vince Hinostroza, Mike Smith.<br />
[2020-01-03 11:38:29] - TRADE : From New York Islanders to Vegas Golden Knights : Mattias Ekholm, Matthew Villalta, Y:2021-RND:1-NYI.<br />
[2020-01-01 11:55:15] - TRADE : From Columbus Blue Jackets to Ottawa Senators : Y:2020-RND:4-DET.<br />
[2020-01-01 11:55:15] - TRADE : From Ottawa Senators to Columbus Blue Jackets : Filip Ahl (P).<br />
[2019-12-31 06:30:40] - Henrik Karlsson was added to Boston Bruins.<br />
[2019-12-30 07:01:09] - TRADE : From New Jersey Devils to Anaheim Ducks : Sergei Bobrovsky.<br />
[2019-12-30 07:01:09] - TRADE : From Anaheim Ducks to New Jersey Devils : Frederik Andersen, Casey Mittelstadt (P), Y:2020-RND:1-BUF.<br />
[2019-12-29 11:36:52] - TRADE : From Ottawa Senators to Buffalo Sabres : Jujhar Khaira.<br />
[2019-12-29 11:36:52] - TRADE : From Buffalo Sabres to Ottawa Senators : Zack Phillips, Y:2020-RND:5-BUF.<br />
[2019-12-29 11:36:23] - TRADE : From Philadelphia Flyers to New Jersey Devils : Mark Stone, Y:2021-RND:4-PHI.<br />
[2019-12-29 11:36:23] - TRADE : From New Jersey Devils to Philadelphia Flyers : Nick Schmaltz, Andreas Johnsson, Artem Anisimov.<br />
[2019-12-29 11:35:49] - TRADE : From Philadelphia Flyers to Columbus Blue Jackets : Johnny Hockey Gaudreau, Emil Bemstrom, Bowen Byram (P), 3 500 000 $ (Salary Cap).<br />
[2019-12-29 11:35:49] - TRADE : From Columbus Blue Jackets to Philadelphia Flyers : Elias Pettersson.<br />
[2019-12-29 11:35:09] - TRADE : From Vancouver Canucks to Columbus Blue Jackets : Y:2022-RND:2-SEA.<br />
[2019-12-29 11:35:09] - TRADE : From Columbus Blue Jackets to Vancouver Canucks : Ryan Merkley.<br />
[2019-12-29 11:34:38] - TRADE : From Ottawa Senators to Columbus Blue Jackets : Samuel Blais, Eric Locke, Jason Robertson (P), Y:2020-RND:4-DET.<br />
[2019-12-29 11:34:38] - TRADE : From Columbus Blue Jackets to Ottawa Senators : Joe Veleno, Madison Bowey, Y:2020-RND:5-NYI.<br />
[2019-12-29 11:33:04] - TRADE : From Buffalo Sabres to Columbus Blue Jackets : Dustin Byfuglien, 2 000 000 $ (Salary Cap), Y:2020-RND:4-NJD, Y:2021-RND:3-BUF.<br />
[2019-12-29 11:33:04] - TRADE : From Columbus Blue Jackets to Buffalo Sabres : Erik Gudbranson.<br />
[2019-12-29 11:32:34] - TRADE : From Buffalo Sabres to Philadelphia Flyers : Mika Zibanejad, Andreas Athanasiou.<br />
[2019-12-29 11:32:34] - TRADE : From Philadelphia Flyers to Buffalo Sabres : Ryan O'Reilly, Zack Phillips, Rem Pitlick (P).<br />
[2019-12-28 10:02:46] - TRADE : From Vegas Golden Knights to Seattle Saints : Ryan Strome, Jake Dotchin, Y:2020-RND:4-PHI.<br />
[2019-12-28 10:02:46] - TRADE : From Seattle Saints to Vegas Golden Knights : Josh Ho-Sang, Chris Bigras.<br />
[2019-12-28 10:02:15] - TRADE : From Vegas Golden Knights to Columbus Blue Jackets : Pius Suter, Y:2020-RND:2-PHI.<br />
[2019-12-28 10:02:15] - TRADE : From Columbus Blue Jackets to Vegas Golden Knights : Evgeny Dadonov, 2 000 000 $ (Salary Cap).<br />
[2019-12-28 10:01:44] - TRADE : From Ottawa Senators to Boston Bruins : Calle Jarnkrok, Jake Bean (P).<br />
[2019-12-28 10:01:44] - TRADE : From Boston Bruins to Ottawa Senators : Josh Anderson.<br />
[2019-12-28 10:01:15] - TRADE : From Ottawa Senators to Montreal Canadiens : Eric Staal, Y:2020-RND:4-ARZ.<br />
[2019-12-28 10:01:15] - TRADE : From Montreal Canadiens to Ottawa Senators : Jiri Sekac, Y:2020-RND:2-WPG.<br />
[2019-12-27 11:33:54] - TRADE : From Arizona Coyotes to Montreal Canadiens : Nolan Foote (P).<br />
[2019-12-27 11:33:54] - TRADE : From Montreal Canadiens to Arizona Coyotes : Sam Steel (P).<br />
[2019-12-26 06:28:48] - TRADE : From New York Islanders to San Jose Sharks : Radek Faksa, 1 000 000 $ (Salary Cap), Y:2021-RND:2-MIN.<br />
[2019-12-26 06:28:48] - TRADE : From San Jose Sharks to New York Islanders : Alex Newhook (P), Y:2021-RND:4-SJS.<br />
[2019-12-25 07:39:44] - Allen York was added to Anaheim Ducks.<br />
[2019-12-25 07:32:44] - Erik Gustafsson was added to Nashville Predators.<br />
[2019-12-25 07:32:37] - Jack Hillen was added to Nashville Predators.<br />
[2019-12-24 08:24:15] - TRADE : From Winnipeg Jets to Ottawa Senators : Erik Cernak, Jason Robertson (P), Y:2020-RND:3-PIT.<br />
[2019-12-24 08:24:15] - TRADE : From Ottawa Senators to Winnipeg Jets : Rocco Grimaldi, Y:2020-RND:1-MTL.<br />
[2019-12-24 08:23:45] - TRADE : From Buffalo Sabres to New Jersey Devils : Roope Hintz.<br />
[2019-12-24 08:23:45] - TRADE : From New Jersey Devils to Buffalo Sabres : Jake Oettinger (P), Y:2020-RND:4-NJD.<br />
[2019-12-24 08:23:14] - TRADE : From New York Rangers to Ottawa Senators : Jake DeBrusk.<br />
[2019-12-24 08:23:14] - TRADE : From Ottawa Senators to New York Rangers : Joseph Blandisi, Alex Formenton (P).<br />
[2019-12-22 06:59:54] - TRADE : From Ottawa Senators to Buffalo Sabres : Roope Hintz, Lucas Johansen (P).<br />
[2019-12-22 06:59:54] - TRADE : From Buffalo Sabres to Ottawa Senators : Julius Honka, Y:2020-RND:4-ARZ.<br />
[2019-12-22 06:59:19] - TRADE : From Tampa Bay Lightning to Winnipeg Jets : Gabriel Landeskog, Anton Forsberg, Y:2020-RND:4-TBL.<br />
[2019-12-22 06:59:19] - TRADE : From Winnipeg Jets to Tampa Bay Lightning : Nino Niederreiter, Boone Jenner, Edward Pasquale, Jonatan Berggren (P).<br />
[2019-12-22 06:58:45] - TRADE : From New York Islanders to Nashville Predators : Logan Brown, Y:2020-RND:4-BUF.<br />
[2019-12-22 06:58:45] - TRADE : From Nashville Predators to New York Islanders : Victor Olofsson.<br />
[2019-12-22 06:58:25] - TRADE : From New York Islanders to Buffalo Sabres : Dustin Byfuglien, 4 000 000 $ (Salary Cap).<br />
[2019-12-22 06:58:25] - TRADE : From Buffalo Sabres to New York Islanders : Yannick Weber, Jordan Bellerive.<br />
[2019-12-22 06:58:02] - TRADE : From Vegas Golden Knights to Buffalo Sabres : Connor Carrick, Ryan Johnson (P), Y:2020-RND:1-CAR, Y:2022-RND:2-VEG.<br />
[2019-12-22 06:58:02] - TRADE : From Buffalo Sabres to Vegas Golden Knights : Justin Schultz, 3 500 000 $ (Salary Cap).<br />
[2019-12-21 06:47:43] - TRADE : From Buffalo Sabres to Philadelphia Flyers : Alex Galchenyuk.<br />
[2019-12-21 06:47:38] - TRADE : From Philadelphia Flyers to Buffalo Sabres : Alex Galchenyuk.<br />
[2019-12-21 06:47:38] - TRADE : From Buffalo Sabres to Philadelphia Flyers : 3 000 000 $ (Salary Cap).<br />
[2019-12-21 06:39:48] - TRADE : From Edmonton Oilers to New York Islanders : Colton White.<br />
[2019-12-21 06:39:48] - TRADE : From New York Islanders to Edmonton Oilers : Otto Leskinen, Y:2020-RND:2-NYI.<br />
[2019-12-21 06:39:07] - TRADE : From Buffalo Sabres to Philadelphia Flyers : Alex Galchenyuk, Ryan O'Reilly, Jonathan Quick.<br />
[2019-12-21 06:39:07] - TRADE : From Philadelphia Flyers to Buffalo Sabres : Tyler Seguin, Adam Henrique, Robin Lehner, 1 500 000 $ (Salary Cap).<br />
[2019-12-21 06:37:52] - TRADE : From Ottawa Senators to Philadelphia Flyers : Bowen Byram (P).<br />
[2019-12-21 06:37:52] - TRADE : From Philadelphia Flyers to Ottawa Senators : Alex Turcotte (P).<br />
[2019-12-21 06:37:36] - TRADE : From Florida Panthers to New York Rangers : Scott Perunovich (P).<br />
[2019-12-21 06:37:36] - TRADE : From New York Rangers to Florida Panthers : Zach Sanford.<br />
[2019-12-20 06:32:48] - TRADE : From New York Rangers to Buffalo Sabres : Thomas Harley (P), Y:2020-RND:2-CAR.<br />
[2019-12-20 06:32:48] - TRADE : From Buffalo Sabres to New York Rangers : Michael DiPietro.<br />
[2019-12-20 06:30:57] - Greg Meireles was added to Arizona Coyotes.<br />
[2019-12-20 06:21:02] - Mark Fayne was added to San Jose Sharks.<br />
[2019-12-19 07:22:25] - TRADE : From Minnesota Wild to Arizona Coyotes : Jakub Voracek, Y:2021-RND:3-MIN.<br />
[2019-12-19 07:22:25] - TRADE : From Arizona Coyotes to Minnesota Wild : Neal Pionk, Jake Virtanen, Conor Garland.<br />
[2019-12-19 07:14:37] - Ilya Bryzgalov was added to Quebec Nordiques.<br />
[2019-12-18 06:44:41] - TRADE : From San Jose Sharks to Detroit Red Wings : Torey Krug, 3 000 000 $ (Salary Cap).<br />
[2019-12-18 06:44:41] - TRADE : From Detroit Red Wings to San Jose Sharks : Alex Newhook (P), Trevor Zegras (P), Y:2021-RND:2-DET.<br />
[2019-12-18 06:44:04] - TRADE : From Ottawa Senators to Vegas Golden Knights : Nathan Bastian.<br />
[2019-12-18 06:44:04] - TRADE : From Vegas Golden Knights to Ottawa Senators : Louick Marcotte, 500 000 $ (Salary Cap).<br />
[2019-12-18 06:36:32] - Sergei Kalinin has been deleted from Minnesota Wild.<br />
[2019-12-18 06:36:30] - Nick Moutrey has been deleted from Minnesota Wild.<br />
[2019-12-18 06:36:28] - Michael Downing has been deleted from Minnesota Wild.<br />
[2019-12-18 06:36:22] - Jonathan-Ismael Diaby has been deleted from Minnesota Wild.<br />
[2019-12-18 06:36:12] - Mario Lucia has been deleted from Minnesota Wild.<br />
[2019-12-18 06:36:10] - Kristopher Foucault has been deleted from Minnesota Wild.<br />
[2019-12-18 06:36:07] - Julian Walker has been deleted from Minnesota Wild.<br />
[2019-12-18 06:36:05] - Joel Broda has been deleted from Minnesota Wild.<br />
[2019-12-18 06:36:02] - Dennis Endras has been deleted from Minnesota Wild.<br />
[2019-12-18 06:35:59] - David McIntyre has been deleted from Minnesota Wild.<br />
[2019-12-18 06:35:57] - Colton Jobke has been deleted from Minnesota Wild.<br />
[2019-12-18 06:35:54] - Chay Genoway has been deleted from Minnesota Wild.<br />
[2019-12-18 06:35:52] - Chad Rau has been deleted from Minnesota Wild.<br />
[2019-12-18 06:35:49] - Bjorn Krupp has been deleted from Minnesota Wild.<br />
[2019-12-17 06:29:20] - TRADE : From Vegas Golden Knights to Winnipeg Jets : Andrew Copp, Y:2020-RND:2-ARZ.<br />
[2019-12-17 06:29:20] - TRADE : From Winnipeg Jets to Vegas Golden Knights : Ryan Strome, 500 000 $ (Salary Cap).<br />
[2019-12-17 06:28:51] - TRADE : From Vegas Golden Knights to Minnesota Wild : Dmitrij Jaskin.<br />
[2019-12-17 06:28:51] - TRADE : From Minnesota Wild to Vegas Golden Knights : Simon Despres.<br />
[2019-12-17 06:28:34] - TRADE : From Vegas Golden Knights to Philadelphia Flyers : Ryan Murray, Keith Aulie, 3 000 000 $ (Salary Cap).<br />
[2019-12-17 06:28:34] - TRADE : From Philadelphia Flyers to Vegas Golden Knights : Cody Glass, Kale Clague, Y:2020-RND:2-ARZ, Y:2020-RND:2-PHI, Y:2020-RND:4-PHI.<br />
[2019-12-16 06:29:32] - TRADE : From Winnipeg Jets to Philadelphia Flyers : Tyler Seguin, Y:2020-RND:2-ARZ.<br />
[2019-12-16 06:29:32] - TRADE : From Philadelphia Flyers to Winnipeg Jets : Victor Hedman, Phillip Danault.<br />
[2019-12-16 06:29:03] - TRADE : From Buffalo Sabres to Ottawa Senators : Steven Kampfer.<br />
[2019-12-16 06:29:03] - TRADE : From Ottawa Senators to Buffalo Sabres : Brett Connolly.<br />
[2019-12-16 06:28:32] - Pekka Rinne was added to Ottawa Senators.<br />
[2019-12-15 13:11:16] - TRADE : From Ottawa Senators to Vegas Golden Knights : Matt Schmalz.<br />
[2019-12-15 13:11:16] - TRADE : From Vegas Golden Knights to Ottawa Senators : 500 000 $ (Salary Cap).<br />
[2019-12-15 09:44:53] - Dustin Wolf has been deleted from Washington Capitals.<br />
[2019-12-13 14:11:04] - Brandon Whitney has been deleted from Vancouver Canucks.<br />
[2019-12-13 14:10:56] - Tommy Vannelli has been deleted from St. Louis Blues.<br />
[2019-12-13 14:10:52] - Niklas Lundstrom has been deleted from St. Louis Blues.<br />
[2019-12-13 14:10:47] - Max Gardiner has been deleted from St. Louis Blues.<br />
[2019-12-13 14:10:36] - Dimitri Semin has been deleted from St. Louis Blues.<br />
[2019-12-13 14:10:21] - Adam Marsh has been deleted from Seattle Saints.<br />
[2019-12-13 06:36:50] - TRADE : From Buffalo Sabres to Vegas Golden Knights : Adam Gaudette, Dillon Heatherington.<br />
[2019-12-13 06:36:50] - TRADE : From Vegas Golden Knights to Buffalo Sabres : Nathan Beaulieu, Y:2022-RND:3-VEG.<br />
[2019-12-13 06:36:14] - TRADE : From Chicago Blackhawks to Vegas Golden Knights : Y:2021-RND:4-CHI.<br />
[2019-12-13 06:36:14] - TRADE : From Vegas Golden Knights to Chicago Blackhawks : Nathan Walker.<br />
[2019-12-13 06:35:52] - TRADE : From Ottawa Senators to Toronto Maple Leafs : Joel Armia, Sampo Ranta (P).<br />
[2019-12-13 06:35:52] - TRADE : From Toronto Maple Leafs to Ottawa Senators : Gustav Nyquist, Kirill Marchenko (P), Y:2020-RND:4-DET, Y:2021-RND:3-TOR.<br />
[2019-12-13 06:33:03] - Sergei Anshakov has been deleted from Pittsburgh Penguins.<br />
[2019-12-13 06:33:02] - Patrick Ehelechner has been deleted from Pittsburgh Penguins.<br />
[2019-12-13 06:32:59] - Nicholas D'Agostino has been deleted from Pittsburgh Penguins.<br />
[2019-12-13 06:32:56] - Mattias Modig has been deleted from Pittsburgh Penguins.<br />
[2019-12-13 06:32:52] - Evgeni Isakov has been deleted from Pittsburgh Penguins.<br />
[2019-12-12 07:13:33] - TRADE : From Washington Capitals to Toronto Maple Leafs : Patrick Puistola (P), Anttoni Honka (P), Y:2020-RND:2-CLB.<br />
[2019-12-12 07:13:33] - TRADE : From Toronto Maple Leafs to Washington Capitals : Phil Kessel, 1 290 983 $ (Salary Cap).<br />
[2019-12-12 07:12:51] - TRADE : From Chicago Blackhawks to Ottawa Senators : T.J. Oshie, Erik Foley, Bowen Byram (P), Y:2020-RND:1-MTL.<br />
[2019-12-12 07:12:51] - TRADE : From Ottawa Senators to Chicago Blackhawks : Erik Karlsson, Andreas Engqvist.<br />
[2019-12-12 07:11:17] - TRADE : From Vancouver Canucks to Ottawa Senators : Eric Staal, Laurent Dauphin, Y:2021-RND:1-SJS.<br />
[2019-12-12 07:11:17] - TRADE : From Ottawa Senators to Vancouver Canucks : Andreas Martinsen, Connor Crisp, Ryan Poehling (P), Y:2020-RND:3-VAN.<br />
[2019-12-11 12:13:09] - Milan Kolena has been deleted from New York Islanders.<br />
[2019-12-11 12:12:56] - Ryan Pilon has been deleted from New Jersey Devils.<br />
[2019-12-11 12:12:40] - Stephen Michalek has been deleted from Minnesota Wild.<br />
[2019-12-11 12:12:38] - Sean Lorenz has been deleted from Minnesota Wild.<br />
[2019-12-11 12:12:29] - Mikko Lehtonen has been deleted from Minnesota Wild.<br />
[2019-12-11 12:12:22] - Kyle Medvec has been deleted from Minnesota Wild.<br />
[2019-12-11 12:12:17] - Kris Fredheim has been deleted from Minnesota Wild.<br />
[2019-12-11 12:12:06] - Josh Caron has been deleted from Minnesota Wild.<br />
[2019-12-11 12:11:59] - Jon Disalvatore has been deleted from Minnesota Wild.<br />
[2019-12-11 12:11:54] - Jeff Penner has been deleted from Minnesota Wild.<br />
[2019-12-11 12:11:51] - Jarod Palmer has been deleted from Minnesota Wild.<br />
[2019-12-11 12:11:47] - Anthony Hamburg has been deleted from Minnesota Wild.<br />
[2019-12-11 12:11:33] - Troy Vance has been deleted from Dallas Stars.<br />
[2019-12-11 12:11:20] - Gianluca Curcuruto has been deleted from Carolina Hurricanes.<br />
[2019-12-11 06:56:39] - TRADE : From Carolina Hurricanes to Detroit Red Wings : Alex Goligoski, Frans Nielsen.<br />
[2019-12-11 06:56:39] - TRADE : From Detroit Red Wings to Carolina Hurricanes : Joe Morrow, Cody Hodgson.<br />
[2019-12-11 06:56:12] - TRADE : From Philadelphia Flyers to Arizona Coyotes : Steven Stamkos.<br />
[2019-12-11 06:56:12] - TRADE : From Arizona Coyotes to Philadelphia Flyers : Johnny Hockey Gaudreau, Mark Stone, Y:2022-RND:1-ARZ.<br />
[2019-12-11 06:55:39] - TRADE : From Chicago Blackhawks to Florida Panthers : Mike Hoffman, Alan Quine.<br />
[2019-12-11 06:55:39] - TRADE : From Florida Panthers to Chicago Blackhawks : Nicolas Petan, Rourke Chartier, 1 500 000 $ (Salary Cap).<br />
[2019-12-11 06:50:41] - Nathan Gerbe was added to Vancouver Canucks.<br />
[2019-12-10 06:33:08] - TRADE : From Ottawa Senators to Chicago Blackhawks : Alexander Khovanov (P), Y:2020-RND:5-OTT.<br />
[2019-12-10 06:33:08] - TRADE : From Chicago Blackhawks to Ottawa Senators : Y:2020-RND:2-CHI, Y:2020-RND:3-MIN.<br />
[2019-12-10 05:55:42] - Nick Magyar has been deleted from Buffalo Sabres.<br />
[2019-12-10 05:55:29] - Mark Adams has been deleted from Buffalo Sabres.<br />
[2019-12-09 06:26:14] - TRADE : From Vancouver Canucks to Columbus Blue Jackets : Adam Boqvist, Christian Dvorak, Mikkel Boedker, Y:2020-RND:5-NYI, Y:2022-RND:2-VAN.<br />
[2019-12-09 06:26:14] - TRADE : From Columbus Blue Jackets to Vancouver Canucks : Rasmus Ristolainen, 2 500 000 $ (Salary Cap).<br />
[2019-12-09 06:08:21] - Brandon Mashinter was added to Columbus Blue Jackets.<br />
[2019-12-09 06:08:12] - Pierre-Luc Letourneau-Leblond was added to Columbus Blue Jackets.<br />
[2019-12-08 06:37:52] - TRADE : From Quebec Nordiques to Florida Panthers : Andrey Vasilevskiy.<br />
[2019-12-08 06:37:52] - TRADE : From Florida Panthers to Quebec Nordiques : Simeon Varlamov, Josh Brook (P), Eeli Tolvanen (P), Y:2020-RND:1-SEA.<br />
[2019-12-08 06:35:32] - Daniel Paille was added to Columbus Blue Jackets.<br />
[2019-12-08 06:28:48] - TRADE : From Dallas Stars to Pittsburgh Penguins : Y:2020-RND:5-DAL, Y:2021-RND:5-DAL.<br />
[2019-12-08 06:28:48] - TRADE : From Pittsburgh Penguins to Dallas Stars : 60 000 000 $ (Money).<br />
[2019-12-07 06:35:41] - TRADE : From Anaheim Ducks to Vegas Golden Knights : Will Borgen (P).<br />
[2019-12-07 06:35:41] - TRADE : From Vegas Golden Knights to Anaheim Ducks : Y:2021-RND:5-BUF.<br />
[2019-12-07 06:09:52] - Cody Goloubef was added to Boston Bruins.<br />
[2019-12-07 06:09:43] - Christian Ehrhoff was added to Boston Bruins.<br />
[2019-12-06 07:21:47] - TRADE : From Vegas Golden Knights to Seattle Saints : Veini Vehvilainen, Y:2022-RND:4-VEG.<br />
[2019-12-06 07:21:47] - TRADE : From Seattle Saints to Vegas Golden Knights : Kevin Poulin.<br />
[2019-12-06 07:21:18] - TRADE : From New York Islanders to Seattle Saints : William Carrier, Luke Adam, Josh Ho-Sang, David Musil, Jordan Schmaltz.<br />
[2019-12-06 07:21:18] - TRADE : From Seattle Saints to New York Islanders : Martin Reway, Jyrki Jokipakka, David Perron, David Savard.<br />
[2019-12-05 06:48:59] - TRADE : From St. Louis Blues to Carolina Hurricanes : Tyler Johnson, Kiefer Sherwood, Alex Goligoski, Anthony Camara.<br />
[2019-12-05 06:48:59] - TRADE : From Carolina Hurricanes to St. Louis Blues : Marc-Edouard Vlasic, James Neal, Tyler Toffoli, Y:2022-RND:2-CAR.<br />
[2019-12-05 06:48:17] - TRADE : From Anaheim Ducks to New York Islanders : Clayton Keller, Noah Juulsen.<br />
[2019-12-05 06:48:17] - TRADE : From New York Islanders to Anaheim Ducks : Émile Poirier, Anthony Beauvillier, Cam York (P).<br />
[2019-12-05 06:47:40] - TRADE : From Ottawa Senators to Washington Capitals : Alexander Radulov, Jared Cowen.<br />
[2019-12-05 06:47:40] - TRADE : From Washington Capitals to Ottawa Senators : Roope Hintz, Magnus Nygren, Alexandar Georgiyev, Jake Bean (P), Alex Formenton (P), Christian Djoos (P).<br />
[2019-12-04 07:05:07] - TRADE : From Vegas Golden Knights to San Jose Sharks : Seth Jones, Marcus Kruger, 1 900 000 $ (Salary Cap), Y:2020-RND:2-MTL.<br />
[2019-12-04 07:05:07] - TRADE : From San Jose Sharks to Vegas Golden Knights : Nathan Beaulieu, Myles Bell, Y:2020-RND:1-CAR.<br />
[2019-12-04 07:04:29] - TRADE : From St. Louis Blues to Toronto Maple Leafs : Troy Stecher, Oliwer Kaski (P), Niklas Nordgren (P).<br />
[2019-12-04 07:04:29] - TRADE : From Toronto Maple Leafs to St. Louis Blues : Brady Skjei.<br />
[2019-12-04 06:30:04] - Drew Shore was added to Nashville Predators.<br />
[2019-12-03 05:45:46] - Garrett Meurs was added to Toronto Maple Leafs.<br />
[2019-12-02 17:10:57] - TRADE : From Seattle Saints to Montreal Canadiens : Shawn Matthias, Beau Bennett, Y:2020-RND:4-MIN.<br />
[2019-12-02 17:10:57] - TRADE : From Montreal Canadiens to Seattle Saints : Mike Richards, David Perron.<br />
[2019-12-02 06:30:26] - TRADE : From San Jose Sharks to Vancouver Canucks : Eric Staal, 2 000 000 $ (Salary Cap), Y:2021-RND:1-SJS, Y:2022-RND:2-SJS.<br />
[2019-12-02 06:30:26] - TRADE : From Vancouver Canucks to San Jose Sharks : Ryan Kesler, Y:2021-RND:2-VAN, Y:2020-RND:4-CLB, Y:2020-RND:5-CGY.<br />
[2019-11-29 12:21:42] - Korbinian Holzer was added to Vancouver Canucks.<br />
[2019-11-29 12:21:35] - Jared Spurgeon was added to Vancouver Canucks.<br />
[2019-11-29 06:28:33] - TRADE : From Arizona Coyotes to Seattle Saints : David Kampf.<br />
[2019-11-29 06:28:33] - TRADE : From Seattle Saints to Arizona Coyotes : Mattias Backman, Y:2021-RND:3-VEG.<br />
[2019-11-29 06:26:44] - Marcus Foligno was added to Washington Capitals.<br />
[2019-11-29 05:49:39] - TRADE : From New York Islanders to Vegas Golden Knights : 1 500 000 $ (Salary Cap).<br />
[2019-11-29 05:49:39] - TRADE : From Vegas Golden Knights to New York Islanders : Y:2021-RND:5-SEA.<br />
[2019-11-28 06:49:12] - TRADE : From Vancouver Canucks to Vegas Golden Knights : Louick Marcotte.<br />
[2019-11-28 06:49:12] - TRADE : From Vegas Golden Knights to Vancouver Canucks : Laurent Dauphin, Y:2021-RND:4-ARZ.<br />
[2019-11-28 06:47:59] - TRADE : From Minnesota Wild to Buffalo Sabres : Steven Kampfer.<br />
[2019-11-28 06:47:59] - TRADE : From Buffalo Sabres to Minnesota Wild : Dylan Demelo.<br />
[2019-11-27 06:39:49] - TRADE : From New York Islanders to Vancouver Canucks : Vladimir Tarasenko, Adam Boqvist, Y:2020-RND:5-NYI.<br />
[2019-11-27 06:39:49] - TRADE : From Vancouver Canucks to New York Islanders : Dylan Strome, Anthony Beauvillier, Otto Leskinen, Brandon Gignac (P), Y:2020-RND:4-BUF.<br />
[2019-11-26 12:37:00] - TRADE : From New York Islanders to Pittsburgh Penguins : Tim Erixon.<br />
[2019-11-26 12:37:00] - TRADE : From Pittsburgh Penguins to New York Islanders : Brian Dumoulin, Christopher Clapperton.<br />
[2019-11-26 06:05:42] - Kevin Connauton was added to Pittsburgh Penguins.<br />
[2019-11-26 06:05:34] - Marc Methot was added to Pittsburgh Penguins.<br />
[2019-11-26 06:05:27] - Nick Petrecki was added to Pittsburgh Penguins.<br />
[2019-11-26 06:03:27] - TRADE : From Quebec Nordiques to Pittsburgh Penguins : Christopher Clapperton, Y:2020-RND:5-ARZ.<br />
[2019-11-26 06:03:27] - TRADE : From Pittsburgh Penguins to Quebec Nordiques : Johan Larsson.<br />
[2019-11-25 06:35:41] - TRADE : From Pittsburgh Penguins to Florida Panthers : Juuso Riikola, Simeon Varlamov, Matthew Tkachuk, Samuel Asselin (P).<br />
[2019-11-25 06:35:41] - TRADE : From Florida Panthers to Pittsburgh Penguins : Matt Murray, Brandon Sutter.<br />
[2019-11-24 08:46:23] - Jujhar Khaira was added to Ottawa Senators.<br />
[2019-11-23 06:54:35] - Alexandre Giroux was added to New Jersey Devils.<br />
[2019-11-23 06:54:31] - Alexander Bonsaksen was added to New Jersey Devils.<br />
[2019-11-23 06:53:06] - Brendon Nash was added to Calgary Flames.<br />
[2019-11-22 06:25:07] - Marcus Foligno was added to Vancouver Canucks.<br />
[2019-11-20 06:31:28] - TRADE : From Vegas Golden Knights to Seattle Saints : Angelo Miceli, Michael Bunting.<br />
[2019-11-20 06:31:28] - TRADE : From Seattle Saints to Vegas Golden Knights : Alexander Killorn, Y:2020-RND:2-MTL.<br />
[2019-11-20 05:47:08] - Vladimir Sobotka was added to Vegas Golden Knights.<br />
[2019-11-20 05:46:26] - TRADE : From Vancouver Canucks to Calgary Flames : Ilya Bryzgalov, Y:2020-RND:4-VEG.<br />
[2019-11-20 05:46:26] - TRADE : From Calgary Flames to Vancouver Canucks : Antti Niemi, Y:2020-RND:5-CGY.<br />
[2019-11-20 05:43:44] - Melvin Nyffeler was added to Calgary Flames.<br />
[2019-11-19 06:39:09] - TRADE : From Calgary Flames to New York Islanders : Josh Ho-Sang, Jordan Schmaltz, Y:2020-RND:1-CGY.<br />
[2019-11-19 06:39:09] - TRADE : From New York Islanders to Calgary Flames : Michael Del Zotto.<br />
[2019-11-19 06:38:43] - TRADE : From Ottawa Senators to New York Islanders : David Krejci, Y:2021-RND:2-MIN.<br />
[2019-11-19 06:38:43] - TRADE : From New York Islanders to Ottawa Senators : Samuel Blais, Maxim Shalunov, Lucas Johansen (P).<br />
[2019-11-18 12:27:32] - TRADE : From Seattle Saints to Chicago Blackhawks : John Nyberg.<br />
[2019-11-18 12:27:32] - TRADE : From Chicago Blackhawks to Seattle Saints : Y:2020-RND:2-MTL.<br />
[2019-11-18 12:26:26] - Jaroslav Janus was added to Philadelphia Flyers.<br />
[2019-11-18 06:19:50] - TRADE : From Anaheim Ducks to Pittsburgh Penguins : Erik Johnson, Matthew Tkachuk.<br />
[2019-11-18 06:19:50] - TRADE : From Pittsburgh Penguins to Anaheim Ducks : Alex Ovechkin, Markus Nutivaara.<br />
[2019-11-18 06:19:31] - TRADE : From Seattle Saints to Pittsburgh Penguins : Tyler Bozak, Vinny Saponari, Jason Akeson.<br />
[2019-11-18 06:19:31] - TRADE : From Pittsburgh Penguins to Seattle Saints : Alexander Steen, Justin Brazeau.<br />
[2019-11-18 06:18:56] - TRADE : From Washington Capitals to Arizona Coyotes : Michael McCarron, Kasper Bjorkqvist (P), Y:2021-RND:5-WSH.<br />
[2019-11-18 06:18:56] - TRADE : From Arizona Coyotes to Washington Capitals : Robert Mastrosimone (P).<br />
[2019-11-17 06:16:13] - Justin Peters was added to Montreal Canadiens.<br />
[2019-11-16 06:15:47] - Riley Nash was added to Vegas Golden Knights.<br />
[2019-11-15 06:25:39] - Jake Dotchin was added to Vegas Golden Knights.<br />
[2019-11-15 06:09:51] - TRADE : From Florida Panthers to Seattle Saints : 1 $ (Money).<br />
[2019-11-15 06:09:51] - TRADE : From Seattle Saints to Florida Panthers : 50 001 $ (Money).<br />
[2019-11-15 06:09:40] - TRADE : From Tampa Bay Lightning to Seattle Saints : 1 $ (Money).<br />
[2019-11-15 06:09:40] - TRADE : From Seattle Saints to Tampa Bay Lightning : 50 001 $ (Money).<br />
[2019-11-15 06:09:25] - TRADE : From Buffalo Sabres to Seattle Saints : 1 $ (Money).<br />
[2019-11-15 06:09:25] - TRADE : From Seattle Saints to Buffalo Sabres : 50 001 $ (Money).<br />
[2019-11-15 06:09:17] - TRADE : From New Jersey Devils to Seattle Saints : 1 $ (Money).<br />
[2019-11-15 06:09:17] - TRADE : From Seattle Saints to New Jersey Devils : 50 001 $ (Money).<br />
[2019-11-15 06:09:09] - TRADE : From Anaheim Ducks to Seattle Saints : 1 $ (Money).<br />
[2019-11-15 06:09:09] - TRADE : From Seattle Saints to Anaheim Ducks : 50 001 $ (Money).<br />
[2019-11-14 06:28:24] - TRADE : From Ottawa Senators to Montreal Canadiens : David Perron.<br />
[2019-11-14 06:28:24] - TRADE : From Montreal Canadiens to Ottawa Senators : Alexander Radulov, 400 000 $ (Salary Cap).<br />
[2019-11-14 06:28:01] - TRADE : From Chicago Blackhawks to Vegas Golden Knights : Ryan Murray, 2 500 000 $ (Salary Cap).<br />
[2019-11-14 06:28:01] - TRADE : From Vegas Golden Knights to Chicago Blackhawks : Cooper Marody, Y:2020-RND:1-ARZ.<br />
[2019-11-14 06:27:33] - TRADE : From New York Islanders to Vegas Golden Knights : Travis Dermott.<br />
[2019-11-14 06:27:33] - TRADE : From Vegas Golden Knights to New York Islanders : Mattias Ekholm, 10 000 000 $ (Money), 2 000 000 $ (Salary Cap).<br />
[2019-11-13 06:33:27] - TRADE : From St. Louis Blues to Anaheim Ducks : Devon Toews (P), Y:2020-RND:3-CLB.<br />
[2019-11-13 06:33:27] - TRADE : From Anaheim Ducks to St. Louis Blues : Jamie Oleksiak.<br />
[2019-11-13 06:29:25] - TRADE : From Pittsburgh Penguins to Ottawa Senators : Alex Lyon, Karl Alzner, Jake Wise (P), Y:2021-RND:4-PIT, Y:2021-RND:5-PIT.<br />
[2019-11-13 06:29:25] - TRADE : From Ottawa Senators to Pittsburgh Penguins : Simeon Varlamov.<br />
[2019-11-13 06:28:48] - TRADE : From Arizona Coyotes to Ottawa Senators : Joseph Blandisi, Y:2021-RND:5-ARZ.<br />
[2019-11-13 06:28:48] - TRADE : From Ottawa Senators to Arizona Coyotes : Drew Stafford, 3 000 000 $ (Salary Cap).<br />
[2019-11-13 05:10:03] - TRADE : From Nashville Predators to Boston Bruins : Zack Smith, 5 000 000 $ (Money).<br />
[2019-11-13 05:10:03] - TRADE : From Boston Bruins to Nashville Predators : 1 $ (Money).<br />
[2019-11-13 05:07:34] - Valtteri Filppula was added to Detroit Red Wings.<br />
[2019-11-13 05:07:25] - Kaspars Daugavins was added to Detroit Red Wings.<br />
[2019-11-13 05:07:16] - Andrew Agozzino was added to Detroit Red Wings.<br />
[2019-11-12 06:27:01] - TRADE : From St. Louis Blues to Nashville Predators : Mitch Marner, Taro Hirose, Urho Vaakanainen (P), Connor McMichael (P).<br />
[2019-11-12 06:27:01] - TRADE : From Nashville Predators to St. Louis Blues : Nathan MacKinnon, Y:2021-RND:4-NSH.<br />
[2019-11-10 05:39:54] - Sebastian Owuya was added to Pittsburgh Penguins.<br />
[2019-11-10 05:39:46] - Niklas Grossman was added to Pittsburgh Penguins.<br />
[2019-11-09 07:31:38] - TRADE : From Toronto Maple Leafs to Pittsburgh Penguins : Brayden Schenn.<br />
[2019-11-09 07:31:38] - TRADE : From Pittsburgh Penguins to Toronto Maple Leafs : Emerson Etem, Erik Gustafsson, Colten Ellis (P).<br />
[2019-11-09 07:31:20] - TRADE : From Seattle Saints to Vegas Golden Knights : William Karlsson, Seth Jones, 1 000 000 $ (Salary Cap), Y:2020-RND:2-BUF.<br />
[2019-11-09 07:31:20] - TRADE : From Vegas Golden Knights to Seattle Saints : Martin Reway, Noah Hanifin, Y:2020-RND:4-MIN, Y:2021-RND:3-VEG.<br />
[2019-11-09 07:30:42] - TRADE : From Arizona Coyotes to Vegas Golden Knights : Charles Hudon, Y:2021-RND:4-ARZ.<br />
[2019-11-09 07:30:42] - TRADE : From Vegas Golden Knights to Arizona Coyotes : Zach Parise, 5 000 000 $ (Salary Cap).<br />
[2019-11-09 07:29:23] - Dana Tyrell was added to Florida Panthers.<br />
[2019-11-08 06:33:42] - TRADE : From Carolina Hurricanes to Pittsburgh Penguins : Karl Alzner.<br />
[2019-11-08 06:33:42] - TRADE : From Pittsburgh Penguins to Carolina Hurricanes : Loui Eriksson.<br />
[2019-11-07 06:35:11] - TRADE : From Buffalo Sabres to Vegas Golden Knights : Kris Russell, Y:2021-RND:5-BUF.<br />
[2019-11-07 06:35:11] - TRADE : From Vegas Golden Knights to Buffalo Sabres : Dylan Demelo.<br />
[2019-11-07 06:34:46] - TRADE : From San Jose Sharks to Vegas Golden Knights : Mattias Ekholm, Y:2020-RND:1-ARZ, Y:2020-RND:1-SJS, Y:2020-RND:1-WPG.<br />
[2019-11-07 06:34:46] - TRADE : From Vegas Golden Knights to San Jose Sharks : Torey Krug, Artturi Lehkonen, 4 000 000 $ (Salary Cap).<br />
[2019-11-07 06:33:58] - Dana Tyrell was added to Vegas Golden Knights.<br />
[2019-11-02 06:31:51] - TRADE : From Buffalo Sabres to Carolina Hurricanes : James Neal.<br />
[2019-11-02 06:31:51] - TRADE : From Carolina Hurricanes to Buffalo Sabres : Anders Lee.<br />
[2019-11-01 06:28:01] - TRADE : From Winnipeg Jets to Buffalo Sabres : Jordan Eberle, Nate Schmidt.<br />
[2019-11-01 06:28:01] - TRADE : From Buffalo Sabres to Winnipeg Jets : Boone Jenner, Sami Vatanen, Y:2020-RND:3-PHI.<br />
[2019-11-01 06:27:29] - TRADE : From Columbus Blue Jackets to Montreal Canadiens : Rick Nash, 6 400 000 $ (Salary Cap).<br />
[2019-11-01 06:27:29] - TRADE : From Montreal Canadiens to Columbus Blue Jackets : Y:2021-RND:5-TOR.<br />
[2019-11-01 06:26:59] - TRADE : From Vegas Golden Knights to Chicago Blackhawks : Joakim Ryan, Y:2020-RND:1-MTL.<br />
[2019-11-01 06:26:59] - TRADE : From Chicago Blackhawks to Vegas Golden Knights : Noah Hanifin, 2 500 000 $ (Salary Cap).<br />
[2019-10-31 06:59:16] - TRADE : From Anaheim Ducks to Buffalo Sabres : Justin Schultz, Alex Galchenyuk.<br />
[2019-10-31 06:59:16] - TRADE : From Buffalo Sabres to Anaheim Ducks : Brandon Saad, Tyler Myers, Juuso Välimäki, Y:2020-RND:1-BUF.<br />
[2019-10-31 06:58:02] - TRADE : From New York Islanders to Vegas Golden Knights : Laurent Dauphin.<br />
[2019-10-31 06:58:02] - TRADE : From Vegas Golden Knights to New York Islanders : Maxim Shalunov, 1 000 000 $ (Salary Cap).<br />
[2019-10-31 06:56:54] - Ryan Pulock was added to Carolina Hurricanes.<br />
[2019-10-30 06:31:21] - TRADE : From Minnesota Wild to St. Louis Blues : Evgeny Kuznetsov.<br />
[2019-10-30 06:31:21] - TRADE : From St. Louis Blues to Minnesota Wild : Ryan Johansen.<br />
[2019-10-30 06:31:06] - TRADE : From Carolina Hurricanes to Vegas Golden Knights : Drake Caggiula.<br />
[2019-10-30 06:31:06] - TRADE : From Vegas Golden Knights to Carolina Hurricanes : Joey Laleggia.<br />
[2019-10-29 07:22:38] - TRADE : From New York Islanders to St. Louis Blues : Jared McCann, Urho Vaakanainen (P).<br />
[2019-10-29 07:22:38] - TRADE : From St. Louis Blues to New York Islanders : Vladimir Tarasenko, Y:2020-RND:3-BUF.<br />
[2019-10-29 07:22:08] - TRADE : From New Jersey Devils to Detroit Red Wings : Elias Lindholm.<br />
[2019-10-29 07:22:08] - TRADE : From Detroit Red Wings to New Jersey Devils : Artem Anisimov, Artemi Panarin, Y:2020-RND:2-ANH.<br />
[2019-10-29 07:21:43] - TRADE : From New Jersey Devils to Vegas Golden Knights : Dmitrij Jaskin.<br />
[2019-10-29 07:21:43] - TRADE : From Vegas Golden Knights to New Jersey Devils : Reilly Smith, 1 300 000 $ (Salary Cap), Y:2021-RND:5-VEG.<br />
[2019-10-29 07:21:10] - TRADE : From Philadelphia Flyers to Montreal Canadiens : Mike Green, 2 000 000 $ (Salary Cap).<br />
[2019-10-29 07:21:10] - TRADE : From Montreal Canadiens to Philadelphia Flyers : Zack Phillips.<br />
[2019-10-28 17:57:33] - Matt Frattin was added to Tampa Bay Lightning.<br />
[2019-10-28 17:57:09] - Brian Flynn was added to Tampa Bay Lightning.<br />
[2019-10-28 17:49:41] - TRADE : From Philadelphia Flyers to Tampa Bay Lightning : Y:2020-RND:1-PIT.<br />
[2019-10-28 06:50:21] - Patrik Nemeth was added to Tampa Bay Lightning.<br />
[2019-10-28 06:50:08] - TRADE : From Tampa Bay Lightning to Philadelphia Flyers : Steven Stamkos, Mike Green, Phillip Danault.<br />
[2019-10-28 06:50:08] - TRADE : From Philadelphia Flyers to Tampa Bay Lightning : Charlie Coyle, Marcus Johansson, Martin Necas (P), Ty Smith (P), Y:2021-RND:3-PHI, Y:2023-RND:3-PHI.<br />
[2019-10-27 09:53:18] - Harri Sateri was added to Toronto Maple Leafs.<br />
[2019-10-26 09:43:56] - Chad Johnson was added to Dallas Stars.<br />
[2019-10-24 06:29:31] - Nick Palmieri was added to St. Louis Blues.<br />
[2019-10-24 06:29:22] - Peter Holland was added to St. Louis Blues.<br />
[2019-10-17 06:56:39] - Alexander Killorn was added to Seattle Saints.<br />
[2019-10-17 06:56:31] - Tyler Bozak was added to Seattle Saints.<br />
[2019-10-15 06:41:06] - Kris Russell was added to Buffalo Sabres.<br />
[2019-10-15 06:40:23] - Justin Pogge was added to Columbus Blue Jackets.<br />
[2019-10-14 11:16:56] - Mark Owuya was added to Columbus Blue Jackets.<br />
[2019-10-14 11:13:59] - Keith Aulie was added to Vegas Golden Knights.<br />
[2019-10-10 06:41:04] - Jyrki Jokipakka was added to Seattle Saints.<br />
[2019-10-10 06:38:06] - Jean-François Bérubé was added to Winnipeg Jets.<br />
[2019-10-09 08:24:17] - Dustin Tokarski was added to Calgary Flames.<br />
[2019-10-09 07:14:24] - TRADE : From Calgary Flames to Ottawa Senators : Brett Connolly, Zachary Senyshyn, Vadim Shipachev, Simeon Varlamov.<br />
[2019-10-09 07:14:24] - TRADE : From Ottawa Senators to Calgary Flames : Michael Grabner, James Reimer.<br />
[2019-10-09 07:13:45] - TRADE : From Seattle Saints to Vegas Golden Knights : Adam Erne, Matt Grzelcyk, Y:2020-RND:1-MTL.<br />
[2019-10-09 07:13:45] - TRADE : From Vegas Golden Knights to Seattle Saints : Morgan Klimchuk, Chris Bigras, Y:2020-RND:2-BUF, Y:2021-RND:4-SEA.<br />
[2019-10-09 07:12:53] - TRADE : From Vancouver Canucks to Buffalo Sabres : Brad Hunt.<br />
[2019-10-09 07:12:53] - TRADE : From Buffalo Sabres to Vancouver Canucks : Keegan Kanzig, Y:2020-RND:4-BUF.<br />
[2019-10-09 02:36:42] - Brian Lee was added to Vegas Golden Knights.<br />
[2019-10-04 06:53:27] - Curtis Hamilton was added to New York Islanders.<br />
[2019-10-02 22:42:32] - Bracken Kearns was added to Ottawa Senators.<br />
[2019-10-02 22:42:24] - Andreas Martinsen was added to Ottawa Senators.<br />
[2019-10-02 06:53:26] - TRADE : From Seattle Saints to Montreal Canadiens : Darnell Nurse.<br />
[2019-10-02 06:53:26] - TRADE : From Montreal Canadiens to Seattle Saints : Xavier Ouellet, Matt Grzelcyk, Filip Chlapik, William Lockwood (P), Y:2020-RND:1-MTL.<br />
[2019-10-01 06:41:33] - Connor Crisp was added to Ottawa Senators.<br />
[2019-09-28 11:19:41] - Maxim Chudinov was added to Dallas Stars.<br />
[2019-09-28 11:19:33] - Eric Gryba was added to Dallas Stars.<br />
[2019-09-28 11:18:32] - Colton Gillies was added to Dallas Stars.<br />
[2019-09-28 11:18:21] - Melker Karlsson was added to Dallas Stars.<br />
[2019-09-28 11:18:10] - Lauri Korpikoski was added to Dallas Stars.<br />
[2019-09-28 11:18:01] - Kyle Okposo was added to Dallas Stars.<br />
[2019-09-28 11:17:26] - Cam Atkinson was added to Dallas Stars.<br />
[2019-09-28 06:59:48] - TRADE : From Seattle Saints to Calgary Flames : Vadim Shipachev, 750 000 $ (Money), Y:2023-RND:3-SEA.<br />
[2019-09-28 06:59:48] - TRADE : From Calgary Flames to Seattle Saints : Y:2023-RND:5-CGY.<br />
[2019-09-27 06:12:18] - TRADE : From Seattle Saints to San Jose Sharks : Mattias Ekholm, 1 500 000 $ (Money), Y:2020-RND:4-ANH.<br />
[2019-09-27 06:12:18] - TRADE : From San Jose Sharks to Seattle Saints : Mattias Backman, Y:2020-RND:5-MIN.<br />
[2019-09-26 07:14:19] - TRADE : From Vancouver Canucks to Vegas Golden Knights : Zach Parise, 3 000 000 $ (Salary Cap).<br />
[2019-09-26 07:14:19] - TRADE : From Vegas Golden Knights to Vancouver Canucks : Christian Ehrhoff, Tyler Soy, 10 000 000 $ (Money), Y:2020-RND:3-OTT, Y:2020-RND:4-VEG.<br />
[2019-09-26 07:13:30] - TRADE : From Vancouver Canucks to Detroit Red Wings : Teemu Laakso, Dennis Persson, Patrick Wiercioch.<br />
[2019-09-26 07:13:30] - TRADE : From Detroit Red Wings to Vancouver Canucks : 1 $ (Money).<br />
[2019-09-25 19:32:50] - Andreas Engqvist was added to Ottawa Senators.<br />
[2019-09-25 19:32:41] - Andrei Kostitsyn was added to Ottawa Senators.<br />
[2019-09-25 19:31:46] - Carl Hagelin was added to Vancouver Canucks.<br />
[2019-09-24 07:05:01] - Brad Malone was added to New Jersey Devils.<br />
[2019-09-24 07:04:56] - Benn Ferriero was added to New Jersey Devils.<br />
[2019-09-24 07:03:38] - Alexandre Grenier was added to Winnipeg Jets.<br />
[2019-09-24 07:03:30] - Maxime Macenauer was added to Winnipeg Jets.<br />
[2019-09-24 07:03:22] - Mark Alt was added to Winnipeg Jets.<br />
[2019-09-24 07:03:12] - Joel Chouinard was added to Winnipeg Jets.<br />
[2019-09-24 07:03:02] - Jerome Gauthier-Leduc was added to Winnipeg Jets.<br />
[2019-09-24 07:02:53] - Frederic St-Denis was added to Winnipeg Jets.<br />
[2019-09-24 07:02:12] - Ralfs Freibergs was added to Buffalo Sabres.<br />
[2019-09-24 07:00:53] - TRADE : From Buffalo Sabres to Winnipeg Jets : Tyler Kennedy, James Sheppard.<br />
[2019-09-24 07:00:53] - TRADE : From Winnipeg Jets to Buffalo Sabres : Y:2021-RND:5-WPG.<br />
[2019-09-24 06:59:32] - TRADE : From Seattle Saints to Vancouver Canucks : Mikkel Boedker, Y:2022-RND:2-SEA.<br />
[2019-09-24 06:59:32] - TRADE : From Vancouver Canucks to Seattle Saints : Mathieu Perreault, Michael Raffl.<br />
[2019-09-24 06:58:03] - TRADE : From Toronto Maple Leafs to Arizona Coyotes : Charles Hudon.<br />
[2019-09-24 06:58:03] - TRADE : From Arizona Coyotes to Toronto Maple Leafs : Juuso Ikonen, Nikita Jevpalovs.<br />
[2019-09-24 06:54:13] - Brett Sutter was added to Pittsburgh Penguins.<br />
[2019-09-24 06:54:03] - Ben Maxwell was added to Pittsburgh Penguins.<br />
[2019-09-24 06:53:55] - Alexander Steen was added to Pittsburgh Penguins.<br />
[2019-09-24 06:51:24] - TRADE : From Ottawa Senators to Chicago Blackhawks : Gustav Olofsson.<br />
[2019-09-24 06:48:20] - TRADE : From San Jose Sharks to Buffalo Sabres : Adam Gaudette.<br />
[2019-09-24 06:48:17] - TRADE : From San Jose Sharks to Buffalo Sabres : 1 000 000 $ (Salary Cap).<br />
[2019-09-24 06:48:17] - TRADE : From Buffalo Sabres to San Jose Sharks : Adam Gaudette.<br />
[2019-09-24 06:47:15] - TRADE : From Vegas Golden Knights to San Jose Sharks : A.J. Greer.<br />
[2019-09-24 06:47:11] - TRADE : From San Jose Sharks to Vegas Golden Knights : A.J. Greer.<br />
[2019-09-24 06:47:11] - TRADE : From Vegas Golden Knights to San Jose Sharks : 3 000 000 $ (Salary Cap).<br />
[2019-09-24 06:44:22] - TRADE : From Washington Capitals to Winnipeg Jets : Adam Brooks.<br />
[2019-09-24 06:44:18] - TRADE : From Winnipeg Jets to Washington Capitals : Adam Brooks.<br />
[2019-09-24 06:44:18] - TRADE : From Washington Capitals to Winnipeg Jets : 1 500 000 $ (Salary Cap).<br />
[2019-09-24 06:41:16] - TRADE : From New York Rangers to Buffalo Sabres : Adam Gaudette.<br />
[2019-09-24 06:41:11] - TRADE : From Buffalo Sabres to New York Rangers : Adam Gaudette.<br />
[2019-09-24 06:41:11] - TRADE : From New York Rangers to Buffalo Sabres : 1 500 000 $ (Salary Cap).<br />
[2019-09-24 06:40:45] - TRADE : From Washington Capitals to Buffalo Sabres : Adam Gaudette.<br />
[2019-09-24 06:40:41] - TRADE : From Buffalo Sabres to Washington Capitals : Adam Gaudette.<br />
[2019-09-24 06:40:41] - TRADE : From Washington Capitals to Buffalo Sabres : 2 000 000 $ (Salary Cap).<br />
[2019-09-24 06:39:59] - TRADE : From Tampa Bay Lightning to Vancouver Canucks : Ahti Oksanen.<br />
[2019-09-24 06:39:59] - TRADE : From Vancouver Canucks to Tampa Bay Lightning : Adam Burish.<br />
[2019-09-24 06:39:53] - TRADE : From Tampa Bay Lightning to Vancouver Canucks : Adam Burish.<br />
[2019-09-24 06:39:53] - TRADE : From Vancouver Canucks to Tampa Bay Lightning : Ahti Oksanen, 2 000 000 $ (Salary Cap).<br />
[2019-09-23 17:57:29] - TRADE : From Pittsburgh Penguins to Boston Bruins : Eric Gelinas.<br />
[2019-09-23 17:57:22] - TRADE : From Tampa Bay Lightning to Boston Bruins : Scott Kosmachuk.<br />
[2019-09-23 17:55:59] - TRADE : From St. Louis Blues to Los Angeles Kings : Jan Rutta.<br />
[2019-09-23 17:55:00] - TRADE : From New Jersey Devils to St. Louis Blues : Andy Welinski.<br />
[2019-09-23 17:54:45] - TRADE : From Detroit Red Wings to St. Louis Blues : Adam Almqvist.<br />
[2019-09-23 17:53:35] - TRADE : From Dallas Stars to Pittsburgh Penguins : Markus Nutivaara.<br />
[2019-09-23 17:53:24] - TRADE : From Columbus Blue Jackets to Pittsburgh Penguins : Erik Gustafsson.<br />
[2019-09-23 17:52:11] - TRADE : From Ottawa Senators to Chicago Blackhawks : David Rittich.<br />
[2019-09-23 17:51:12] - TRADE : From Winnipeg Jets to Seattle Saints : Marcus Foligno.<br />
[2019-09-23 17:50:15] - TRADE : From Winnipeg Jets to Detroit Red Wings : Max Görtz.<br />
[2019-09-23 17:49:27] - TRADE : From Columbus Blue Jackets to Buffalo Sabres : Slater Koekkoek.<br />
[2019-09-23 17:49:14] - TRADE : From Buffalo Sabres to Montreal Canadiens : Ryan Pulock.<br />
[2019-09-23 17:47:25] - TRADE : From Columbus Blue Jackets to San Jose Sharks : Drew Shore.<br />
[2019-09-23 17:46:27] - TRADE : From Toronto Maple Leafs to Vancouver Canucks : Otto Leskinen.<br />
[2019-09-23 17:45:34] - TRADE : From Nashville Predators to New Jersey Devils : Thomas Hickey.<br />
[2019-09-23 17:44:24] - TRADE : From Pittsburgh Penguins to Carolina Hurricanes : Stefan Noesen.<br />
[2019-09-23 17:43:30] - TRADE : From Columbus Blue Jackets to Vegas Golden Knights : Connor Carrick.<br />
[2019-09-23 17:42:23] - TRADE : From Columbus Blue Jackets to Minnesota Wild : Devin Shore.<br />
[2019-09-23 17:41:21] - TRADE : From Chicago Blackhawks to Calgary Flames : Brandon Pirri.<br />
[2019-09-23 17:41:09] - TRADE : From Colorado Avalanche to Calgary Flames : Anton Slepyshev.<br />
[2019-09-23 17:39:43] - TRADE : From Boston Bruins to Quebec Nordiques : Frank Vatrano.<br />
[2019-09-21 21:33:35] - TRADE : From Calgary Flames to Philadelphia Flyers : Anthony Brodeur.<br />
[2019-09-21 21:33:35] - TRADE : From Philadelphia Flyers to Calgary Flames : Y:2020-RND:5-PHI.<br />
[2019-09-21 07:45:37] - Otto Leskinen was added to Toronto Maple Leafs.<br />
[2019-09-20 07:37:49] - TRADE : From Detroit Red Wings to Winnipeg Jets : 1 000 000 $ (Money).<br />
[2019-09-20 07:37:49] - TRADE : From Winnipeg Jets to Detroit Red Wings : Stefan Elliott.<br />
[2019-09-20 00:25:15] - TRADE : From Seattle Saints to Ottawa Senators : Y:2021-RND:2-OTT.<br />
[2019-09-20 00:24:14] - TRADE : From Pittsburgh Penguins to Philadelphia Flyers : Y:2020-RND:1-PIT.<br />
[2019-09-20 00:22:23] - TRADE : From Ottawa Senators to Minnesota Wild : Y:2020-RND:2-MIN.<br />
[2019-09-20 00:21:34] - TRADE : From Los Angeles Kings to Vegas Golden Knights : Y:2020-RND:1-VEG.<br />
[2019-09-20 00:19:01] - TRADE : From Montreal Canadiens to Colorado Avalanche : Y:2020-RND:4-COL.<br />
[2019-09-19 23:44:53] - Mike Condon was added to Nashville Predators.<br />
[2019-09-19 23:44:45] - Mac Bennett was added to Nashville Predators.<br />
[2019-09-19 23:44:37] - Matthew Carle was added to Nashville Predators.<br />
[2019-09-19 23:44:29] - Mark Borowiecki was added to Nashville Predators.<br />
[2019-09-19 23:04:02] - Pascal Leclaire was added to Pittsburgh Penguins.<br />
[2019-09-19 23:03:35] - TRADE : From Quebec Nordiques to Winnipeg Jets : Y:2020-RND:5-DET.<br />
[2019-09-19 23:03:09] - TRADE : From Anaheim Ducks to Winnipeg Jets : Y:2020-RND:5-VAN.<br />
[2019-09-19 23:02:46] - TRADE : From Pittsburgh Penguins to Winnipeg Jets : Y:2020-RND:4-PIT.<br />
[2019-09-19 23:02:28] - TRADE : From Los Angeles Kings to Winnipeg Jets : Y:2020-RND:4-MTL.<br />
[2019-09-19 23:02:00] - TRADE : From Philadelphia Flyers to Winnipeg Jets : Y:2020-RND:3-PIT.<br />
[2019-09-19 23:01:35] - TRADE : From Arizona Coyotes to Winnipeg Jets : Y:2020-RND:2-ARZ.<br />
[2019-09-19 23:01:20] - TRADE : From Colorado Avalanche to Washington Capitals : Y:2020-RND:5-COL.<br />
[2019-09-19 23:01:05] - TRADE : From Vegas Golden Knights to Washington Capitals : Y:2020-RND:5-VEG.<br />
[2019-09-19 23:00:49] - TRADE : From Detroit Red Wings to Washington Capitals : Y:2020-RND:3-DET.<br />
[2019-09-19 23:00:38] - TRADE : From Columbus Blue Jackets to Washington Capitals : Y:2020-RND:2-CLB.<br />
[2019-09-19 23:00:22] - TRADE : From San Jose Sharks to Vegas Golden Knights : Y:2022-RND:5-SJS.<br />
[2019-09-19 23:00:11] - TRADE : From Pittsburgh Penguins to Vegas Golden Knights : Y:2022-RND:3-PIT.<br />
[2019-09-19 22:59:54] - TRADE : From Seattle Saints to Vegas Golden Knights : Y:2021-RND:4-SEA, Y:2021-RND:5-SEA.<br />
[2019-09-19 22:59:36] - TRADE : From Minnesota Wild to Vegas Golden Knights : Y:2020-RND:4-MIN.<br />
[2019-09-19 22:58:44] - TRADE : From Buffalo Sabres to Vegas Golden Knights : Y:2020-RND:3-OTT.<br />
[2019-09-19 22:58:22] - TRADE : From Buffalo Sabres to Vegas Golden Knights : Y:2020-RND:2-BUF.<br />
[2019-09-19 22:57:37] - TRADE : From Columbus Blue Jackets to Vancouver Canucks : Y:2020-RND:4-CLB.<br />
[2019-09-19 22:57:26] - TRADE : From Florida Panthers to Vancouver Canucks : Y:2020-RND:3-FLA.<br />
[2019-09-19 22:56:33] - TRADE : From Detroit Red Wings to Toronto Maple Leafs : Y:2020-RND:4-DET.<br />
[2019-09-19 22:56:22] - TRADE : From Vancouver Canucks to Toronto Maple Leafs : Y:2020-RND:2-VAN.<br />
[2019-09-19 22:55:51] - TRADE : From New York Rangers to Tampa Bay Lightning : Y:2020-RND:3-SJS.<br />
[2019-09-19 22:55:00] - TRADE : From Toronto Maple Leafs to St. Louis Blues : Y:2020-RND:4-TOR.<br />
[2019-09-19 22:54:49] - TRADE : From Buffalo Sabres to St. Louis Blues : Y:2020-RND:3-BUF.<br />
[2019-09-19 22:54:41] - TRADE : From Columbus Blue Jackets to St. Louis Blues : Y:2020-RND:3-CLB.<br />
[2019-09-19 22:54:06] - TRADE : From Ottawa Senators to Seattle Saints : Y:2022-RND:2-OTT.<br />
[2019-09-19 22:53:50] - TRADE : From Anaheim Ducks to Seattle Saints : Y:2020-RND:4-ANH.<br />
[2019-09-19 22:53:20] - TRADE : From Carolina Hurricanes to San Jose Sharks : Y:2021-RND:1-CAR.<br />
[2019-09-19 22:53:05] - TRADE : From Minnesota Wild to San Jose Sharks : Y:2020-RND:5-MIN.<br />
[2019-09-19 22:52:24] - TRADE : From Ottawa Senators to San Jose Sharks : Y:2020-RND:1-ARZ.<br />
[2019-09-19 22:51:43] - TRADE : From Detroit Red Wings to San Jose Sharks : Y:2020-RND:1-WPG.<br />
[2019-09-19 22:51:12] - TRADE : From Ottawa Senators to San Jose Sharks : Y:2020-RND:1-OTT.<br />
[2019-09-19 22:50:34] - TRADE : From Detroit Red Wings to Quebec Nordiques : Y:2021-RND:5-DET.<br />
[2019-09-19 22:50:18] - TRADE : From Anaheim Ducks to Quebec Nordiques : Y:2021-RND:5-MTL.<br />
[2019-09-19 22:49:49] - TRADE : From Arizona Coyotes to Quebec Nordiques : Y:2020-RND:5-ARZ.<br />
[2019-09-19 22:49:36] - TRADE : From Boston Bruins to Quebec Nordiques : Y:2020-RND:1-BOS.<br />
[2019-09-19 22:49:19] - TRADE : From Carolina Hurricanes to Pittsburgh Penguins : Y:2020-RND:5-CAR.<br />
[2019-09-19 22:48:31] - TRADE : From Vegas Golden Knights to Philadelphia Flyers : Y:2021-RND:3-PIT.<br />
[2019-09-19 22:48:01] - TRADE : From Carolina Hurricanes to Philadelphia Flyers : Y:2021-RND:2-CAR.<br />
[2019-09-19 22:47:27] - TRADE : From Vegas Golden Knights to Philadelphia Flyers : Y:2020-RND:5-SEA.<br />
[2019-09-19 22:47:11] - TRADE : From Anaheim Ducks to Philadelphia Flyers : Y:2020-RND:5-ANH.<br />
[2019-09-19 22:46:33] - TRADE : From Seattle Saints to Ottawa Senators : Y:2022-RND:1-SEA.<br />
[2019-09-19 22:45:53] - TRADE : From Minnesota Wild to Ottawa Senators : Y:2021-RND:2-MIN.<br />
[2019-09-19 22:45:42] - TRADE : From Arizona Coyotes to Ottawa Senators : Y:2021-RND:1-ARZ.<br />
[2019-09-19 22:45:27] - TRADE : From Anaheim Ducks to Ottawa Senators : Y:2020-RND:3-VAN.<br />
[2019-09-19 22:45:04] - TRADE : From St. Louis Blues to Ottawa Senators : Y:2020-RND:3-STL.<br />
[2019-09-19 22:44:50] - TRADE : From Montreal Canadiens to Ottawa Senators : Y:2020-RND:2-PIT.<br />
[2019-09-19 22:44:24] - TRADE : From Montreal Canadiens to Ottawa Senators : Y:2020-RND:2-SEA.<br />
[2019-09-19 22:43:36] - TRADE : From San Jose Sharks to New York Rangers : Y:2021-RND:3-SJS.<br />
[2019-09-19 22:43:23] - TRADE : From Boston Bruins to New York Rangers : Y:2020-RND:4-BOS.<br />
[2019-09-19 22:43:14] - TRADE : From Nashville Predators to New York Rangers : Y:2020-RND:3-NSH.<br />
[2019-09-19 22:42:59] - TRADE : From Calgary Flames to New York Rangers : Y:2020-RND:2-SJS.<br />
[2019-09-19 22:42:31] - TRADE : From Philadelphia Flyers to New York Rangers : Y:2020-RND:2-CAR.<br />
[2019-09-19 22:42:11] - TRADE : From St. Louis Blues to New York Rangers : Y:2020-RND:1-STL.<br />
[2019-09-19 22:41:38] - TRADE : From Anaheim Ducks to New York Islanders : Y:2020-RND:3-COL.<br />
[2019-09-19 22:41:03] - TRADE : From Toronto Maple Leafs to New York Islanders : Y:2020-RND:3-TOR.<br />
[2019-09-19 22:40:36] - TRADE : From Seattle Saints to New Jersey Devils : Y:2022-RND:3-SEA.<br />
[2019-09-19 22:39:11] - TRADE : From Toronto Maple Leafs to Montreal Canadiens : Y:2021-RND:5-TOR.<br />
[2019-09-19 22:38:59] - TRADE : From Colorado Avalanche to Montreal Canadiens : Y:2021-RND:4-COL.<br />
[2019-09-19 22:38:48] - TRADE : From Carolina Hurricanes to Montreal Canadiens : Y:2021-RND:3-CAR.<br />
[2019-09-19 22:38:38] - TRADE : From Seattle Saints to Montreal Canadiens : Y:2021-RND:2-SEA.<br />
[2019-09-19 22:38:26] - TRADE : From Pittsburgh Penguins to Montreal Canadiens : Y:2021-RND:2-PIT.<br />
[2019-09-19 22:38:13] - TRADE : From Quebec Nordiques to Montreal Canadiens : Y:2020-RND:3-QUE.<br />
[2019-09-19 22:38:02] - TRADE : From New York Islanders to Montreal Canadiens : Y:2020-RND:3-NYI.<br />
[2019-09-19 22:37:46] - TRADE : From Winnipeg Jets to Montreal Canadiens : Y:2020-RND:2-WPG.<br />
[2019-09-19 22:37:37] - TRADE : From Los Angeles Kings to Montreal Canadiens : Y:2020-RND:2-LOS.<br />
[2019-09-19 22:37:30] - TRADE : From Chicago Blackhawks to Montreal Canadiens : Y:2020-RND:1-CHI.<br />
[2019-09-19 22:36:56] - TRADE : From Montreal Canadiens to Minnesota Wild : Y:2021-RND:3-MTL.<br />
[2019-09-19 22:36:22] - TRADE : From Quebec Nordiques to Minnesota Wild : Y:2020-RND:5-MTL.<br />
[2019-09-19 22:35:53] - TRADE : From Ottawa Senators to Minnesota Wild : Y:2020-RND:4-OTT.<br />
[2019-09-19 22:35:35] - TRADE : From Philadelphia Flyers to Minnesota Wild : Y:2020-RND:1-PHI.<br />
[2019-09-19 22:35:10] - TRADE : From Montreal Canadiens to Los Angeles Kings : Y:2021-RND:4-MTL.<br />
[2019-09-19 22:34:58] - TRADE : From Arizona Coyotes to Los Angeles Kings : Y:2021-RND:3-ARZ.<br />
[2019-09-19 22:34:40] - TRADE : From Vegas Golden Knights to Los Angeles Kings : Y:2021-RND:1-VEG.<br />
[2019-09-19 22:34:24] - TRADE : From Florida Panthers to Los Angeles Kings : Y:2021-RND:1-SEA.<br />
[2019-09-19 22:34:03] - TRADE : From Ottawa Senators to Florida Panthers : Y:2021-RND:1-SEA.<br />
[2019-09-19 22:26:32] - TRADE : From Quebec Nordiques to Florida Panthers : Y:2020-RND:5-QUE.<br />
[2019-09-19 22:26:11] - TRADE : From Calgary Flames to Florida Panthers : Y:2020-RND:4-VAN.<br />
[2019-09-19 22:25:45] - TRADE : From Chicago Blackhawks to Florida Panthers : Y:2020-RND:3-CHI.<br />
[2019-09-19 22:25:26] - TRADE : From Colorado Avalanche to Florida Panthers : Y:2020-RND:2-COL.<br />
[2019-09-19 22:25:13] - TRADE : From Los Angeles Kings to Florida Panthers : Y:2020-RND:1-SEA.<br />
[2019-09-19 22:24:35] - TRADE : From Vegas Golden Knights to Edmonton Oilers : Y:2020-RND:4-SEA.<br />
[2019-09-19 22:23:13] - TRADE : From Winnipeg Jets to Detroit Red Wings : Y:2021-RND:1-WPG.<br />
[2019-09-19 22:23:01] - TRADE : From Anaheim Ducks to Detroit Red Wings : Y:2020-RND:2-ANH.<br />
[2019-09-19 22:22:27] - TRADE : From Minnesota Wild to Dallas Stars : Y:2020-RND:3-MTL.<br />
[2019-09-19 22:22:02] - TRADE : From New Jersey Devils to Dallas Stars : Y:2020-RND:3-NJD.<br />
[2019-09-19 22:21:55] - TRADE : From New Jersey Devils to Dallas Stars : Y:2020-RND:1-NJD.<br />
[2019-09-19 22:21:21] - TRADE : From Minnesota Wild to Chicago Blackhawks : Y:2020-RND:3-MIN.<br />
[2019-09-19 22:21:11] - TRADE : From Montreal Canadiens to Chicago Blackhawks : Y:2020-RND:2-MTL.<br />
[2019-09-19 22:20:51] - TRADE : From Vegas Golden Knights to Carolina Hurricanes : Y:2021-RND:5-SJS.<br />
[2019-09-19 22:20:11] - TRADE : From Montreal Canadiens to Carolina Hurricanes : Y:2020-RND:5-TOR.<br />
[2019-09-19 22:19:41] - TRADE : From Pittsburgh Penguins to Carolina Hurricanes : Y:2020-RND:5-PIT.<br />
[2019-09-19 22:19:20] - TRADE : From Vancouver Canucks to Calgary Flames : Y:2021-RND:4-VAN.<br />
[2019-09-19 22:19:08] - TRADE : From San Jose Sharks to Calgary Flames : Y:2021-RND:2-SJS.<br />
[2019-09-19 22:18:49] - TRADE : From St. Louis Blues to Calgary Flames : Y:2020-RND:5-STL.<br />
[2019-09-19 22:18:40] - TRADE : From Carolina Hurricanes to Calgary Flames : Y:2020-RND:4-CAR.<br />
[2019-09-19 22:18:26] - TRADE : From San Jose Sharks to Calgary Flames : Y:2020-RND:4-SJS.<br />
[2019-09-19 22:18:04] - TRADE : From Los Angeles Kings to Calgary Flames : Y:2020-RND:3-ARZ.<br />
[2019-09-19 22:17:36] - TRADE : From Montreal Canadiens to Calgary Flames : Y:2020-RND:3-CAR.<br />
[2019-09-19 22:17:07] - TRADE : From Vegas Golden Knights to Calgary Flames : Y:2020-RND:3-VEG.<br />
[2019-09-19 22:16:53] - TRADE : From St. Louis Blues to Calgary Flames : Y:2020-RND:2-STL.<br />
[2019-09-19 22:16:35] - TRADE : From Arizona Coyotes to Calgary Flames : Y:2020-RND:2-VEG.<br />
[2019-09-19 22:14:11] - TRADE : From Detroit Red Wings to Calgary Flames : Y:2020-RND:2-DET.<br />
[2019-09-19 22:14:03] - TRADE : From Los Angeles Kings to Calgary Flames : Y:2020-RND:1-LOS.<br />
[2019-09-19 22:13:34] - TRADE : From Anaheim Ducks to Calgary Flames : Y:2020-RND:1-ANH.<br />
[2019-09-19 22:12:58] - TRADE : From Ottawa Senators to Buffalo Sabres : Y:2021-RND:3-OTT.<br />
[2019-09-19 22:12:43] - TRADE : From Arizona Coyotes to Buffalo Sabres : Y:2020-RND:4-ARZ.<br />
[2019-09-19 22:12:26] - TRADE : From Philadelphia Flyers to Buffalo Sabres : Y:2020-RND:3-PHI.<br />
[2019-09-19 22:12:09] - TRADE : From Ottawa Senators to Buffalo Sabres : Y:2020-RND:2-OTT.<br />
[2019-09-19 22:11:42] - TRADE : From Vegas Golden Knights to Arizona Coyotes : Y:2021-RND:2-VEG.<br />
[2019-09-19 22:11:30] - TRADE : From Columbus Blue Jackets to Arizona Coyotes : Y:2020-RND:5-CLB.<br />
[2019-09-19 22:11:07] - TRADE : From Carolina Hurricanes to Arizona Coyotes : Y:2020-RND:5-SJS.<br />
[2019-09-19 22:10:12] - TRADE : From Montreal Canadiens to Anaheim Ducks : Y:2022-RND:5-MTL.<br />
[2019-09-19 22:09:40] - TRADE : From Vancouver Canucks to Anaheim Ducks : Y:2021-RND:5-VAN, Y:2021-RND:3-VAN.<br />
[2019-09-19 22:09:17] - TRADE : From Colorado Avalanche to Anaheim Ducks : Y:2021-RND:3-COL.<br />
[2019-09-19 22:08:59] - TRADE : From Edmonton Oilers to Anaheim Ducks : Y:2020-RND:3-EDM.<br />
[2019-09-19 22:08:41] - TRADE : From Washington Capitals to Anaheim Ducks : Y:2020-RND:2-WSH.<br />
[2019-09-19 22:04:49] - Tomas Plekanec was added to Ottawa Senators.<br />
[2019-09-19 22:01:36] - Craig Anderson (Retired) was added to Toronto Maple Leafs.<br />
[2019-09-19 12:10:10] - TRADE : From Toronto Maple Leafs to Montreal Canadiens : Y:2021-RND:5-TOR.<br />
[2019-09-19 12:10:10] - TRADE : From Montreal Canadiens to Toronto Maple Leafs : Jhonas Enroth.<br />
[2019-09-18 17:17:53] - TRADE : From Quebec Nordiques to Chicago Blackhawks : Jake Muzzin.<br />
[2019-09-18 17:17:53] - TRADE : From Chicago Blackhawks to Quebec Nordiques : Brad Morrison.<br />
[2019-09-17 19:24:32] - Emil Garipov was added to Arizona Coyotes.<br />
[2019-09-17 12:15:05] - Jonas Hiller was added to Montreal Canadiens.<br />
[2019-09-17 12:14:36] - TRADE : From Florida Panthers to Arizona Coyotes : Jake Virtanen, Lauri Korpikoski.<br />
[2019-09-17 12:14:36] - TRADE : From Arizona Coyotes to Florida Panthers : Matt Benning, Rihards Bukarts.<br />
[2019-09-14 20:58:18] - TRADE : From Detroit Red Wings to Winnipeg Jets : Auston Matthews, Nate Schmidt.<br />
[2019-09-14 20:58:18] - TRADE : From Winnipeg Jets to Detroit Red Wings : Andre Burakovsky, Brady Tkachuk, Dylan Cozens (P), Y:2021-RND:1-WPG.<br />
[2019-09-13 06:54:56] - TRADE : From Vancouver Canucks to Columbus Blue Jackets : Linus Omark.<br />
[2019-09-13 06:54:56] - TRADE : From Columbus Blue Jackets to Vancouver Canucks : 1 $ (Money).<br />
[2019-09-12 07:10:53] - TRADE : From Anaheim Ducks to Montreal Canadiens : Jiri Sekac.<br />
[2019-09-12 07:10:53] - TRADE : From Montreal Canadiens to Anaheim Ducks : Y:2022-RND:5-MTL.<br />
[2019-09-11 07:25:29] - TRADE : From Colorado Avalanche to Montreal Canadiens : Y:2020-RND:3-QUE, Y:2021-RND:4-COL.<br />
[2019-09-11 07:25:29] - TRADE : From Montreal Canadiens to Colorado Avalanche : Ivan Barbashev, Francis Beauvillier, T.J. Galiardi.<br />
[2019-09-11 07:23:56] - TRADE : From Carolina Hurricanes to Montreal Canadiens : Y:2020-RND:2-LOS, Y:2021-RND:3-CAR.<br />
[2019-09-11 07:23:56] - TRADE : From Montreal Canadiens to Carolina Hurricanes : Lawson Crouse.<br />
[2019-09-09 07:17:20] - TRADE : From Vancouver Canucks to New Jersey Devils : Will Butcher, Dmitrij Jaskin.<br />
[2019-09-09 07:17:20] - TRADE : From New Jersey Devils to Vancouver Canucks : Anthony Beauvillier, Dylan Strome, Linus Omark.<br />
[2019-09-04 06:49:58] - TRADE : From Winnipeg Jets to Detroit Red Wings : Oliver Wahlstrom, Vladislav Kamenev.<br />
[2019-09-04 06:49:58] - TRADE : From Detroit Red Wings to Winnipeg Jets : Dmitri Kulikov, 15 000 000 $ (Money), Y:2020-RND:5-DET.<br />
[2019-09-03 07:17:14] - TRADE : From Nashville Predators to New York Rangers : Josh Mahura, Y:2020-RND:3-NSH.<br />
[2019-09-03 07:17:14] - TRADE : From New York Rangers to Nashville Predators : Justin Faulk.<br />
[2019-09-02 12:05:59] - Reto Berra was added to Columbus Blue Jackets.<br />
[2019-09-01 08:10:38] - Jakub Nakládal was added to Nashville Predators.<br />
[2019-09-01 08:08:28] - Jacob Lagace was added to Detroit Red Wings.<br />
[2019-09-01 08:08:15] - Eric Tangradi was added to Detroit Red Wings.<br />
[2019-09-01 08:08:07] - Denis Parshin was added to Detroit Red Wings.<br />
[2019-09-01 08:06:08] - Taylor Fedun was added to Winnipeg Jets.<br />
[2019-09-01 08:05:38] - Erik Cernak was added to Winnipeg Jets.<br />
[2019-09-01 08:04:56] - Adam Pardy was added to Winnipeg Jets.<br />
[2019-09-01 05:52:31] - Roman Polak was added to Montreal Canadiens.<br />
[2019-08-31 10:16:49] - Anton Forsberg was added to Tampa Bay Lightning.<br />
[2019-08-31 10:16:37] - Kasper Krog was added to Tampa Bay Lightning.<br />
[2019-08-31 10:16:27] - Mike Vecchione was added to Tampa Bay Lightning.<br />
[2019-08-31 10:16:19] - Ludwig Blomstrand was added to Tampa Bay Lightning.<br />
[2019-08-31 10:16:10] - Mads Eller was added to Tampa Bay Lightning.<br />
[2019-08-31 10:16:02] - Joonas Donskoi was added to Tampa Bay Lightning.<br />
[2019-08-31 10:08:54] - Jakob Forsbacka Karlsson was added to Boston Bruins.<br />
[2019-08-31 07:27:56] - TRADE : From Vancouver Canucks to Anaheim Ducks : Tuomo Ruutu, Y:2021-RND:5-VAN.<br />
[2019-08-31 07:27:56] - TRADE : From Anaheim Ducks to Vancouver Canucks : Ilya Bryzgalov.<br />
[2019-08-31 07:23:09] - Matt Niskanen was added to St. Louis Blues.<br />
[2019-08-31 07:22:59] - Jordie Benn was added to St. Louis Blues.<br />
[2019-08-27 18:35:06] - TRADE : From Buffalo Sabres to Seattle Saints : David Savard, Jamie Doornbosch.<br />
[2019-08-27 18:35:06] - TRADE : From Seattle Saints to Buffalo Sabres : Tomas Jurco, Trevor Cox.<br />
[2019-08-26 08:21:27] - Yannick Weber was added to Buffalo Sabres.<br />
[2019-08-23 09:44:21] - TRADE : From San Jose Sharks to Buffalo Sabres : Dylan Olsen, Reid Boucher, 1 000 000 $ (Salary Cap).<br />
[2019-08-23 09:44:21] - TRADE : From Buffalo Sabres to San Jose Sharks : Samuel Morin, Warren Foegele.<br />
[2019-08-23 07:38:21] - TRADE : From Tampa Bay Lightning to Buffalo Sabres : Jonathan Quick, Samuel Morin.<br />
[2019-08-23 07:38:21] - TRADE : From Buffalo Sabres to Tampa Bay Lightning : Joey Anderson, John Gibson.<br />
[2019-08-16 09:46:13] - TRADE : From Buffalo Sabres to Philadelphia Flyers : Cody Glass.<br />
[2019-08-16 09:46:13] - TRADE : From Philadelphia Flyers to Buffalo Sabres : Boone Jenner.<br />
[2019-08-16 09:44:53] - Kaapo Kakko was added to Dallas Stars.<br />
[2019-08-14 07:58:56] - TRADE : From Seattle Saints to Buffalo Sabres : Alexei Mitrofanov.<br />
[2019-08-14 07:58:56] - TRADE : From Buffalo Sabres to Seattle Saints : Tom Wilson.<br />
[2019-08-12 09:39:47] - Tyler Benson was added to New York Islanders.<br />
[2019-08-12 09:39:44] - Robbie Russo was added to New York Islanders.<br />
[2019-08-12 09:39:39] - Matthew Villalta was added to New York Islanders.<br />
[2019-08-12 09:39:32] - Jérémy Roy was added to New York Islanders.<br />
[2019-08-12 09:39:28] - Dennis Cholowski was added to New York Islanders.<br />
[2019-08-12 09:39:18] - Maxim Gaudreault has been deleted from Florida Panthers.<br />
[2019-08-08 05:59:21] - Olof Lindbom was added to Winnipeg Jets.<br />
[2019-08-07 09:43:27] - Jimmy Huntington was added to Colorado Avalanche.<br />
[2019-08-07 09:43:24] - Tim Heed was added to Colorado Avalanche.<br />
[2019-08-05 06:52:25] - TRADE : From Detroit Red Wings to Quebec Nordiques : Ryan Getzlaf, Y:2021-RND:5-DET.<br />
[2019-08-05 06:52:25] - TRADE : From Quebec Nordiques to Detroit Red Wings : Sven Andrighetto, Dylan Sikura.<br />
[2019-08-01 13:28:59] - TRADE : From New York Islanders to Montreal Canadiens : Y:2020-RND:3-NYI.<br />
[2019-08-01 13:28:59] - TRADE : From Montreal Canadiens to New York Islanders : Samuel Blais, Samuel Houde (P).<br />
[2019-08-01 10:20:51] - David Desharnais was added to St. Louis Blues.<br />
[2019-08-01 07:34:53] - Brenden Dillon was added to New Jersey Devils.<br />
[2019-08-01 07:34:48] - Alex Grant was added to New Jersey Devils.<br />
[2019-08-01 07:34:38] - Alex Biega was added to New Jersey Devils.<br />
[2019-07-31 16:15:04] - TRADE : From Ottawa Senators to Arizona Coyotes : Brandon Gormley.<br />
[2019-07-31 16:15:04] - TRADE : From Arizona Coyotes to Ottawa Senators : Jake Dotchin, Calen Addison (P), Y:2021-RND:1-ARZ.<br />
[2019-07-31 15:47:47] - Patrick Killeen was added to Pittsburgh Penguins.<br />
[2019-07-31 15:35:43] - Erik Cernak has been added to Winnipeg Jets.<br />
[2019-07-31 15:07:56] - TRADE : From Anaheim Ducks to Seattle Saints : Y:2020-RND:4-ANH.<br />
[2019-07-31 15:07:56] - TRADE : From Seattle Saints to Anaheim Ducks : Frederik Andersen.<br />
[2019-07-31 08:54:10] - Lars Eller was added to Seattle Saints.<br />
[2019-07-31 08:51:57] - Tomas Plekanec was added to Ottawa Senators.<br />
[2019-07-31 08:50:41] - Nick Holden was added to Dallas Stars.<br />
[2019-07-31 08:46:55] - Frans Nielsen was added to Carolina Hurricanes.<br />
[2019-07-31 08:46:15] - Carter Ashton was added to Carolina Hurricanes.<br />
[2019-07-31 08:46:06] - Theo Peckham was added to Carolina Hurricanes.<br />
[2019-07-31 08:45:57] - Josh Manson was added to Carolina Hurricanes.<br />
[2019-07-31 08:45:45] - James Wisniewski was added to Carolina Hurricanes.<br />
[2019-07-31 08:43:34] - Dustin Brown was added to Montreal Canadiens.<br />
[2019-07-31 08:41:47] - Jhonas Enroth was added to Montreal Canadiens.<br />
[2019-07-31 08:39:04] - Craig Anderson was added to Toronto Maple Leafs.<br />
[2019-07-31 08:37:33] - Jake Paterson was added to Seattle Saints.<br />
[2019-07-31 08:35:38] - Jake Allen was added to Detroit Red Wings.<br />
[2019-07-31 08:34:14] - Bryan Little was added to Carolina Hurricanes.<br />
[2019-07-31 08:32:44] - Jakub Jerabek was added to Vancouver Canucks.<br />
[2019-07-31 08:30:37] - Cory Conacher was added to Vancouver Canucks.<br />
[2019-07-31 08:28:32] - Thomas Hickey was added to Nashville Predators.<br />
[2019-07-31 08:26:49] - Matt Hackett was added to Edmonton Oilers.<br />
[2019-07-31 08:24:49] - Kevin Poulin was added to Seattle Saints.<br />
[2019-07-31 08:22:06] - Ben Smith was added to Montreal Canadiens.<br />
[2019-07-31 08:21:43] - Patrick Bjorkstrand was added to Montreal Canadiens.<br />
[2019-07-31 08:20:34] - Andrey Zubarev was added to Florida Panthers.<br />
[2019-07-31 08:20:25] - Andrew O'Brien was added to Florida Panthers.<br />
[2019-07-31 08:20:15] - Andrew Bodnarchuk was added to Florida Panthers.<br />
[2019-07-31 08:20:05] - Adam McQuaid was added to Florida Panthers.<br />
[2019-07-31 08:19:27] - Pascal Leclaire was added to Pittsburgh Penguins.<br />
[2019-07-31 08:18:54] - Paul Byron was added to Carolina Hurricanes.<br />
[2019-07-31 08:18:47] - Joey Hishon was added to Carolina Hurricanes.<br />
[2019-07-31 08:18:00] - Daniel Carcillo was added to Carolina Hurricanes.<br />
[2019-07-31 08:17:25] - Oscar Lindberg was added to Carolina Hurricanes.<br />
[2019-07-31 08:16:31] - Tim Gleason was added to Pittsburgh Penguins.<br />
[2019-07-31 08:09:42] - Ryan Shannon was added to Pittsburgh Penguins.<br />
[2019-07-31 08:09:18] - Ryan Wilson was added to Pittsburgh Penguins.<br />
[2019-07-31 08:08:16] - Greg Nemisz was added to Calgary Flames.<br />
[2019-07-31 08:07:51] - Jiri Hudler was added to Calgary Flames.<br />
[2019-07-31 08:06:55] - Raphael Diaz was added to St. Louis Blues.<br />
[2019-07-31 08:06:13] - Stephen Weiss was added to Pittsburgh Penguins.<br />
[2019-07-31 08:05:41] - Jay Bouwmeester was added to Pittsburgh Penguins.<br />
[2019-07-31 08:04:39] - Nathan Horton was added to Pittsburgh Penguins.<br />
[2019-07-31 08:04:12] - Maxim Lapierre was added to Pittsburgh Penguins.<br />
[2019-07-30 16:49:59] - TRADE : From Quebec Nordiques to Florida Panthers : Y:2020-RND:2-COL.<br />
[2019-07-30 07:45:05] - TRADE : From New York Rangers to Boston Bruins : Rickard Rakell.<br />
[2019-07-30 07:45:05] - TRADE : From Boston Bruins to New York Rangers : Ryan Donato, Y:2020-RND:4-BOS.<br />
[2019-07-29 09:12:15] - Zach Sanford was added to New York Rangers.<br />
[2019-07-29 09:11:00] - Robert Thomas was added to New York Rangers.<br />
[2019-07-29 09:10:56] - Tyler Bertuzzi was added to New York Rangers.<br />
[2019-07-29 08:23:47] - TRADE : From Vegas Golden Knights to San Jose Sharks : Jack Johnson, 3 000 000 $ (Salary Cap), Y:2020-RND:5-MIN.<br />
[2019-07-29 08:23:47] - TRADE : From San Jose Sharks to Vegas Golden Knights : Christian Ehrhoff, Benoit-Olivier Groulx (P), Y:2020-RND:2-BUF, Y:2022-RND:5-SJS.<br />
[2019-07-29 08:21:28] - TRADE : From Carolina Hurricanes to San Jose Sharks : Nick Cousins.<br />
[2019-07-29 08:21:28] - TRADE : From San Jose Sharks to Carolina Hurricanes : Jordan Caron, Y:2021-RND:5-SJS.<br />
[2019-07-26 08:14:33] - TRADE : From San Jose Sharks to Carolina Hurricanes : Tanner Pearson, Drake Caggiula, Y:2020-RND:2-LOS, Y:2020-RND:5-PIT, Y:2020-RND:5-TOR.<br />
[2019-07-26 08:14:33] - TRADE : From Carolina Hurricanes to San Jose Sharks : Matthew Nieto, Y:2021-RND:1-CAR.<br />
[2019-07-25 11:41:05] - TRADE : From Pittsburgh Penguins to Vegas Golden Knights : Y:2022-RND:3-PIT.<br />
[2019-07-25 11:41:05] - TRADE : From Vegas Golden Knights to Pittsburgh Penguins : Stefan Noesen.<br />
[2019-07-25 09:26:27] - Nathan Bastian was added to Ottawa Senators.<br />
[2019-07-25 09:26:23] - David Rittich was added to Ottawa Senators.<br />
[2019-07-25 09:03:26] - Lawrence Pilut was added to Vegas Golden Knights.<br />
[2019-07-25 09:01:29] - Gustav Nyquist was added to Toronto Maple Leafs.<br />
[2019-07-25 08:59:23] - Trevor Van Riemsdyk was added to Chicago Blackhawks.<br />
[2019-07-25 08:57:17] - Joe Pavelski was added to Calgary Flames.<br />
[2019-07-25 08:55:42] - Ilya Konovalov was added to Detroit Red Wings.<br />
[2019-07-25 08:53:58] - Alexei Mitrofanov was added to Seattle Saints.<br />
[2019-07-25 08:50:50] - Jimmy Howard was added to Detroit Red Wings.<br />
[2019-07-25 08:49:16] - Yohann Auvitu  was added to Vegas Golden Knights.<br />
[2019-07-25 08:47:05] - Andrej Nestrasil was added to Buffalo Sabres.<br />
[2019-07-25 08:45:17] - Mike Smith was added to Vegas Golden Knights.<br />
[2019-07-25 08:43:34] - Robert Bortuzzo was added to Seattle Saints.<br />
[2019-07-25 08:40:06] - Nathan Walker was added to Vegas Golden Knights.<br />
[2019-07-25 08:39:48] - Ville Leino was added to Toronto Maple Leafs.<br />
[2019-07-25 08:39:13] - Juuso Riikola was added to Pittsburgh Penguins.<br />
[2019-07-25 08:38:22] - Alex Burrows was added to Montreal Canadiens.<br />
[2019-07-25 08:38:13] - Josh Currie was added to Montreal Canadiens.<br />
[2019-07-25 08:37:59] - Maxime Talbot was added to Montreal Canadiens.<br />
[2019-07-25 08:36:42] - Bernhard Ebner was added to St. Louis Blues.<br />
[2019-07-25 08:35:31] - Trevor Lewis was added to Toronto Maple Leafs.<br />
[2019-07-25 08:34:41] - Mike Fisher was added to Pittsburgh Penguins.<br />
[2019-07-25 08:34:14] - Michael Leighton was added to New Jersey Devils.<br />
[2019-07-25 08:33:10] - Patrice Cormier was added to Vegas Golden Knights.<br />
[2019-07-24 15:36:03] - TRADE : From Minnesota Wild to Montreal Canadiens : Zack Phillips.<br />
[2019-07-24 15:36:03] - TRADE : From Montreal Canadiens to Minnesota Wild : Andrew MacDonald, Y:2021-RND:3-MTL.<br />
[2019-07-24 15:13:12] - TRADE : From Florida Panthers to Montreal Canadiens : Matt Grzelcyk, Domenick Fensore (P).<br />
[2019-07-24 15:13:12] - TRADE : From Montreal Canadiens to Florida Panthers : Scott Harrington.<br />
[2019-07-23 14:05:02] - Sebastian Aho (D) was added to Montreal Canadiens.<br />
[2019-07-23 14:04:58] - Marcus Davidsson was added to Montreal Canadiens.<br />
[2019-07-23 14:04:53] - Filip Chlapik was added to Montreal Canadiens.<br />
[2019-07-23 11:24:23] - TRADE : From Ottawa Senators to Vegas Golden Knights : Conor Sheary.<br />
[2019-07-23 11:24:23] - TRADE : From Vegas Golden Knights to Ottawa Senators : Y:2020-RND:3-STL, Y:2020-RND:3-VAN.<br />
[2019-07-23 11:23:55] - Ross Colton was added to Los Angeles Kings.<br />
[2019-07-23 11:23:49] - Oleg Sosunov was added to Los Angeles Kings.<br />
[2019-07-23 11:23:47] - Nolan Stevens was added to Los Angeles Kings.<br />
[2019-07-23 11:23:36] - Mitchell Stephens was added to Los Angeles Kings.<br />
[2019-07-23 11:23:34] - Mikey Eyssimont was added to Los Angeles Kings.<br />
[2019-07-23 11:23:31] - Matt Luff was added to Los Angeles Kings.<br />
[2019-07-23 11:23:29] - Mathieu Joseph was added to Los Angeles Kings.<br />
[2019-07-23 11:23:20] - Caleb Jones was added to Los Angeles Kings.<br />
[2019-07-23 11:23:18] - Brett Howden was added to Los Angeles Kings.<br />
[2019-07-23 09:38:55] - Sebastian Repo was added to Philadelphia Flyers.<br />
[2019-07-23 09:38:53] - Keegan Kolesar was added to Philadelphia Flyers.<br />
[2019-07-23 09:38:50] - Jakub Kovar was added to Philadelphia Flyers.<br />
[2019-07-23 09:38:48] - Chris Martenet was added to Philadelphia Flyers.<br />
[2019-07-22 16:52:01] - Shane Bowers was added to Columbus Blue Jackets.<br />
[2019-07-22 16:52:00] - Ryan Merkley was added to Columbus Blue Jackets.<br />
[2019-07-22 16:51:57] - Martin Kaut was added to Columbus Blue Jackets.<br />
[2019-07-22 16:51:55] - Luke Henman was added to Columbus Blue Jackets.<br />
[2019-07-22 16:51:54] - Dominik Bokk was added to Columbus Blue Jackets.<br />
[2019-07-22 16:51:52] - Carsen Twarynski was added to Columbus Blue Jackets.<br />
[2019-07-22 16:51:51] - Cal Foote was added to Columbus Blue Jackets.<br />
[2019-07-22 15:55:20] - Tyrell Goulbourne was added to Edmonton Oilers.<br />
[2019-07-22 15:55:11] - J.D. Greenway was added to Edmonton Oilers.<br />
[2019-07-22 15:55:09] - Gabriel Vilardi was added to Edmonton Oilers.<br />
[2019-07-22 15:55:07] - Dmitri Samorukov was added to Edmonton Oilers.<br />
[2019-07-22 15:55:05] - Cameron Hughes was added to Edmonton Oilers.<br />
[2019-07-22 15:55:03] - Antoine Morand was added to Edmonton Oilers.<br />
[2019-07-20 23:19:32] - Samuel Girard was added to Toronto Maple Leafs.<br />
[2019-07-20 21:46:17] - Jack Hughes was added to Vancouver Canucks.<br />
[2019-07-20 21:46:13] - Mike Amadio was added to Vancouver Canucks.<br />
[2019-07-20 21:46:11] - Matthew Cairns was added to Vancouver Canucks.<br />
[2019-07-20 21:46:08] - Liam Foudy was added to Vancouver Canucks.<br />
[2019-07-20 21:46:03] - Alex Peters was added to Vancouver Canucks.<br />
[2019-07-20 08:34:38] - Luke Green was added to Calgary Flames.<br />
[2019-07-20 08:34:35] - Louis Belpedio was added to Calgary Flames.<br />
[2019-07-20 08:34:30] - Riley Barber was added to Calgary Flames.<br />
[2019-07-20 08:34:26] - Oscar Fantenberg was added to Calgary Flames.<br />
[2019-07-20 08:34:23] - Oskar Sundqvist was added to Calgary Flames.<br />
[2019-07-20 08:34:19] - Nolan Patrick was added to Calgary Flames.<br />
[2019-07-19 22:43:39] - Alex Roach has been deleted from Calgary Flames.<br />
[2019-07-19 21:45:14] - Lane Pederson was added to Vegas Golden Knights.<br />
[2019-07-19 21:35:33] - Trevor Moore was added to Nashville Predators.<br />
[2019-07-19 21:35:31] - Tage Thompson was added to Nashville Predators.<br />
[2019-07-19 21:35:27] - Karson Kuhlman was added to Nashville Predators.<br />
[2019-07-19 21:35:24] - Josh Mahura was added to Nashville Predators.<br />
[2019-07-19 21:35:19] - Carter Hart was added to Nashville Predators.<br />
[2019-07-19 08:55:20] - Nikolai Zherdev was added to Chicago Blackhawks.<br />
[2019-07-19 08:55:10] - Christopher DiDomenico was added to Chicago Blackhawks.<br />
[2019-07-19 08:53:59] - Patrick McNally was added to St. Louis Blues.<br />
[2019-07-19 08:52:55] - Ville Leskinen was added to Toronto Maple Leafs.<br />
[2019-07-19 08:50:00] - Joni Pitkanen was added to Toronto Maple Leafs.<br />
[2019-07-19 08:49:12] - Mitch Holmberg was added to Seattle Saints.<br />
[2019-07-19 08:47:19] - Kacper Bartnik was added to Arizona Coyotes.<br />
[2019-07-19 08:45:40] - Derick Brassard was added to Chicago Blackhawks.<br />
[2019-07-19 08:44:05] - Marc-Andre Bourdon was added to Nashville Predators.<br />
[2019-07-19 08:41:42] - Kevin Marshall was added to Washington Capitals.<br />
[2019-07-19 08:39:50] - Henrik Zetterberg was added to Washington Capitals.<br />
[2019-07-19 08:37:54] - Arttu Ruotsalainen was added to Buffalo Sabres.<br />
[2019-07-19 08:35:24] - Gregory Beron was added to Vegas Golden Knights.<br />
[2019-07-19 08:33:18] - Darren Helm was added to Nashville Predators.<br />
[2019-07-19 08:31:12] - Ales Music was added to Ottawa Senators.<br />
[2019-07-19 08:30:36] - Troy Brouwer was added to Florida Panthers.<br />
[2019-07-19 08:29:37] - Cody Franson was added to Chicago Blackhawks.<br />
[2019-07-19 08:27:16] - Jeremy Smith was added to New Jersey Devils.<br />
[2019-07-19 08:26:10] - Anders Lindback was added to Seattle Saints.<br />
[2019-07-19 08:23:20] - Yanni Gourde was added to San Jose Sharks.<br />
[2019-07-19 08:21:28] - Ben Chiarot was added to Florida Panthers.<br />
[2019-07-19 08:16:08] - Alexandar Georgiyev was added to Washington Capitals.<br />
[2019-07-19 08:15:18] - Roope Hintz was added to Washington Capitals.<br />
[2019-07-19 08:15:16] - Radovan Bondra was added to Washington Capitals.<br />
[2019-07-19 08:15:13] - Nikolai Kovalenko was added to Washington Capitals.<br />
[2019-07-19 08:15:11] - Nicolas Hague was added to Washington Capitals.<br />
[2019-07-19 08:15:08] - Mitchell Vande Sompel was added to Washington Capitals.<br />
[2019-07-19 08:15:00] - Juuse Saros was added to Washington Capitals.<br />
[2019-07-19 08:14:49] - Anthony DeAngelo was added to Washington Capitals.<br />
[2019-07-19 08:14:47] - Andrew Mangiapane was added to Washington Capitals.<br />
[2019-07-19 08:14:25] - Adam Musil was added to Washington Capitals.<br />
[2019-07-17 15:54:46] - Lawrence Pilut has been deleted from Washington Capitals.<br />
[2019-07-17 15:54:42] - Travis Boyd has been deleted from Washington Capitals.<br />
[2019-07-17 15:54:38] - Steffen Soberg has been deleted from Washington Capitals.<br />
[2019-07-17 15:54:33] - J.J. Piccinich has been deleted from Washington Capitals.<br />
[2019-07-17 15:54:29] - Pavel Kraskovsky has been deleted from Washington Capitals.<br />
[2019-07-17 15:37:24] - TRADE : From Seattle Saints to Vegas Golden Knights : Y:2021-RND:5-SEA.<br />
[2019-07-17 15:37:24] - TRADE : From Vegas Golden Knights to Seattle Saints : Petteri Lindbohm.<br />
[2019-07-17 15:34:50] - TRADE : From Seattle Saints to New Jersey Devils : Sam Kurker, Y:2022-RND:3-SEA.<br />
[2019-07-17 15:34:50] - TRADE : From New Jersey Devils to Seattle Saints : Beau Bennett.<br />
[2019-07-17 15:28:41] - Michael DiPietro was added to Buffalo Sabres.<br />
[2019-07-17 15:28:35] - Kole Lind was added to Buffalo Sabres.<br />
[2019-07-17 15:28:32] - Juuso Välimäki was added to Buffalo Sabres.<br />
[2019-07-17 15:28:22] - Jordan Bellerive was added to Buffalo Sabres.<br />
[2019-07-17 15:28:18] - Joey Anderson was added to Buffalo Sabres.<br />
[2019-07-17 15:28:15] - Filip Westerlund was added to Buffalo Sabres.<br />
[2019-07-17 15:28:12] - Cody Glass was added to Buffalo Sabres.<br />
[2019-07-17 15:28:09] - Carl Dahlstrom was added to Buffalo Sabres.<br />
[2019-07-17 15:28:06] - Cameron Morrison was added to Buffalo Sabres.<br />
[2019-07-17 15:28:02] - Adam Gaudette was added to Buffalo Sabres.<br />
[2019-07-16 15:31:27] - TRADE : From Vegas Golden Knights to Detroit Red Wings : Y:2020-RND:2-ANH.<br />
[2019-07-16 15:31:16] - Joey Laleggia was added to Vegas Golden Knights.<br />
[2019-07-16 15:28:39] - TRADE : From New Jersey Devils to Dallas Stars : Y:2020-RND:1-NJD, Y:2020-RND:3-NJD.<br />
[2019-07-16 15:28:26] - Victor Rask was added to New Jersey Devils.<br />
[2019-07-16 11:27:32] - TRADE : From Vancouver Canucks to Buffalo Sabres : Y:2020-RND:2-OTT.<br />
[2019-07-16 11:27:14] - Louick Marcotte was added to Vancouver Canucks.<br />
[2019-07-15 16:48:45] - Tanner Kaspick was added to Florida Panthers.<br />
[2019-07-15 16:48:42] - Rourke Chartier was added to Florida Panthers.<br />
[2019-07-15 16:48:37] - Matt Grzelcyk was added to Florida Panthers.<br />
[2019-07-15 16:48:33] - Linus Lindstrom was added to Florida Panthers.<br />
[2019-07-15 16:48:29] - Keith Petruzzelli was added to Florida Panthers.<br />
[2019-07-15 16:48:26] - Jordan Greenway was added to Florida Panthers.<br />
[2019-07-15 16:48:23] - Johan Gustafsson was added to Florida Panthers.<br />
[2019-07-15 16:48:19] - Colin White was added to Florida Panthers.<br />
[2019-07-15 16:48:15] - Aapeli Rasanen was added to Florida Panthers.<br />
[2019-07-15 13:44:33] - TRADE : From Seattle Saints to Arizona Coyotes : Jesper Jensen.<br />
[2019-07-15 13:44:33] - TRADE : From Arizona Coyotes to Seattle Saints : Simon Stransky, Anthony Salinitri (P), Maxim Mamin (P).<br />
[2019-07-14 06:40:27] - Zachary Lauzon was added to San Jose Sharks.<br />
[2019-07-14 06:40:25] - Vincent Marleau was added to San Jose Sharks.<br />
[2019-07-14 06:40:23] - Timo Meier was added to San Jose Sharks.<br />
[2019-07-14 06:40:20] - Samuel Harvey was added to San Jose Sharks.<br />
[2019-07-14 06:40:18] - Rafaël Harvey-Pinard was added to San Jose Sharks.<br />
[2019-07-14 06:40:08] - Peter Abbandonato was added to San Jose Sharks.<br />
[2019-07-14 06:40:05] - Noah Dobson was added to San Jose Sharks.<br />
[2019-07-14 06:39:55] - Joel Teasdale was added to San Jose Sharks.<br />
[2019-07-14 06:39:47] - Jacob Neveu was added to San Jose Sharks.<br />
[2019-07-14 06:39:44] - Félix Bibeau was added to San Jose Sharks.<br />
[2019-07-14 05:11:08] - Justin Brazeau was added to Pittsburgh Penguins.<br />
[2019-07-14 05:11:05] - Reid McNeill was added to Pittsburgh Penguins.<br />
[2019-07-14 04:36:22] - TRADE : From Vancouver Canucks to Buffalo Sabres : Y:2020-RND:3-PHI.<br />
[2019-07-14 04:36:22] - TRADE : From Buffalo Sabres to Vancouver Canucks : Jason Demers.<br />
[2019-07-14 04:34:33] - Neal Pionk was added to Arizona Coyotes.<br />
[2019-07-14 04:34:13] - Yegor Sharangovich was added to Arizona Coyotes.<br />
[2019-07-14 04:34:11] - Trey Fix-Wolansky was added to Arizona Coyotes.<br />
[2019-07-14 04:34:08] - Simon Stransky was added to Arizona Coyotes.<br />
[2019-07-14 04:33:33] - Justin Almeida was added to Arizona Coyotes.<br />
[2019-07-14 04:33:31] - Joachim Blichfeld was added to Arizona Coyotes.<br />
[2019-07-14 04:33:28] - Gregorio Gios was added to Arizona Coyotes.<br />
[2019-07-14 04:33:26] - Demid Yeremeyev was added to Arizona Coyotes.<br />
[2019-07-14 04:33:23] - David Kampf was added to Arizona Coyotes.<br />
[2019-07-12 21:19:46] - Rudolfs Balcers was added to Anaheim Ducks.<br />
[2019-07-12 21:19:25] - Trevor Carrick was added to Anaheim Ducks.<br />
[2019-07-12 21:19:01] - Nikita Korostelev was added to Anaheim Ducks.<br />
[2019-07-12 21:18:57] - Miro Heiskanen was added to Anaheim Ducks.<br />
[2019-07-12 21:18:50] - Kalle Kossila was added to Anaheim Ducks.<br />
[2019-07-12 21:18:31] - Joonas Lyytinen was added to Anaheim Ducks.<br />
[2019-07-12 21:18:27] - Jesperi Kotkaniemi was added to Anaheim Ducks.<br />
[2019-07-12 21:18:23] - Filip Hronek was added to Anaheim Ducks.<br />
[2019-07-12 21:18:19] - Chris Wagner was added to Anaheim Ducks.<br />
[2019-07-12 21:17:58] - Andrey Pedan was added to Anaheim Ducks.<br />
[2019-07-12 20:17:25] - TRADE : From Seattle Saints to Vegas Golden Knights : Reilly Smith.<br />
[2019-07-12 20:17:25] - TRADE : From Vegas Golden Knights to Seattle Saints : Shawn Matthias, Grant Clitsome, Nicolas Deslauriers.<br />
[2019-07-12 11:46:39] - TRADE : From Arizona Coyotes to Montreal Canadiens : Andrew MacDonald.<br />
[2019-07-12 11:46:39] - TRADE : From Montreal Canadiens to Arizona Coyotes : Yegor Sharangovich (P).<br />
[2019-07-12 11:46:09] - Sean Durzi was added to Quebec Nordiques.<br />
[2019-07-12 11:46:06] - Scott Walford was added to Quebec Nordiques.<br />
[2019-07-12 11:46:01] - Nate Schnarr was added to Quebec Nordiques.<br />
[2019-07-12 11:45:59] - Mike Reilly was added to Quebec Nordiques.<br />
[2019-07-12 11:45:55] - Maxime Lajoie was added to Quebec Nordiques.<br />
[2019-07-12 11:45:53] - Maxime Comtois was added to Quebec Nordiques.<br />
[2019-07-12 11:45:48] - Jack Evans was added to Quebec Nordiques.<br />
[2019-07-12 11:45:38] - Isaac Ratcliffe was added to Quebec Nordiques.<br />
[2019-07-12 11:45:36] - Frédéric Allard was added to Quebec Nordiques.<br />
[2019-07-12 11:45:24] - Dylan Sikura was added to Quebec Nordiques.<br />
[2019-07-12 10:17:32] - Troy Stecher was added to St. Louis Blues.<br />
[2019-07-12 10:17:28] - Taro Hirose was added to St. Louis Blues.<br />
[2019-07-12 10:17:21] - Mason Appleton was added to St. Louis Blues.<br />
[2019-07-12 10:17:17] - Kiefer Sherwood was added to St. Louis Blues.<br />
[2019-07-12 10:17:09] - Chase De Leo was added to St. Louis Blues.<br />
[2019-07-11 15:53:21] - TRADE : From Seattle Saints to Montreal Canadiens : Yan-Pavel Laplante.<br />
[2019-07-11 15:53:21] - TRADE : From Montreal Canadiens to Seattle Saints : Ilya Kovalchuk.<br />
[2019-07-11 14:03:11] - TRADE : From Vegas Golden Knights to San Jose Sharks : Y:2020-RND:5-TOR.<br />
[2019-07-11 14:03:11] - TRADE : From San Jose Sharks to Vegas Golden Knights : Grant Clitsome, Nicolas Deslauriers, Y:2020-RND:3-STL.<br />
[2019-07-11 13:59:26] - TRADE : From Chicago Blackhawks to San Jose Sharks : Joel Teasdale (P), 1 $ (Money).<br />
[2019-07-11 13:59:26] - TRADE : From San Jose Sharks to Chicago Blackhawks : Jonathan Bernier, Brandon Pirri, Y:2020-RND:2-MTL.<br />
[2019-07-07 11:07:42] - Lane Pederson has been added to Vegas Golden Knights.<br />
[2019-07-07 11:03:17] - Tye Felhaber has been added to St. Louis Blues.<br />
[2019-07-07 11:01:17] - Vladimir Bakanin has been added to Montreal Canadiens.<br />
[2019-07-07 11:00:05] - Trevor Moore has been added to Nashville Predators.<br />
[2019-07-07 10:57:30] - Semyon Chystyakov has been added to Vegas Golden Knights.<br />
[2019-07-07 10:56:33] - Ethan Phillips has been added to Nashville Predators.<br />
[2019-07-07 10:54:40] - Gregorio Gios has been added to Arizona Coyotes.<br />
[2019-07-07 10:53:52] - Demid Yeremeyev has been added to Arizona Coyotes.<br />
[2019-07-07 10:51:17] - Blake Murray has been added to St. Louis Blues.<br />
[2019-07-07 10:49:56] - Xavier Parent has been added to Montreal Canadiens.<br />
[2019-07-07 10:49:38] - Justin Brazeau has been added to Pittsburgh Penguins.<br />
[2019-07-07 10:48:44] - Liam Kirk has been added to Arizona Coyotes.<br />
[2019-07-07 10:47:10] - Reece Newkirk has been added to Minnesota Wild.<br />
[2019-07-07 10:46:34] - Tyler Tucker has been added to Montreal Canadiens.<br />
[2019-07-07 10:46:14] - Henri Nikkanen has been added to Vegas Golden Knights.<br />
[2019-07-07 10:45:08] - Eric Hjorth has been added to Vegas Golden Knights.<br />
[2019-07-07 10:42:03] - Xavier Simoneau has been added to St. Louis Blues.<br />
[2019-07-07 10:40:40] - Marcus Kallionkieli has been added to Minnesota Wild.<br />
[2019-07-07 10:38:32] - Filip Larsson has been added to St. Louis Blues.<br />
[2019-07-07 10:36:07] - Jesper Sellgren has been added to Montreal Canadiens.<br />
[2019-07-07 10:34:31] - Alexandr Darin has been added to Vegas Golden Knights.<br />
[2019-07-07 10:31:19] - Judd Caulfield has been added to Montreal Canadiens.<br />
[2019-07-07 10:31:09] - Arsen Khisamutdinov has been added to Montreal Canadiens.<br />
[2019-07-07 10:29:45] - TRADE : From Montreal Canadiens to Quebec Nordiques : Y:2021-RND:5-MTL.<br />
[2019-07-07 10:29:45] - TRADE : From Quebec Nordiques to Montreal Canadiens : Y:2019-RND:5-QUE.<br />
[2019-07-07 10:28:52] - Gianni Fairbrother has been added to New Jersey Devils.<br />
[2019-07-07 10:28:35] - Jack Malone has been added to Vegas Golden Knights.<br />
[2019-07-07 10:24:29] - TRADE : From Montreal Canadiens to Edmonton Oilers : Y:2020-RND:4-SEA.<br />
[2019-07-07 10:24:29] - TRADE : From Edmonton Oilers to Montreal Canadiens : Y:2019-RND:5-EDM.<br />
[2019-07-07 10:23:01] - Dustin Wolf has been added to Washington Capitals.<br />
[2019-07-07 10:22:05] - John Ludvig has been added to Vegas Golden Knights.<br />
[2019-07-07 10:17:58] - Dustin Wolf has been added to Washington Capitals.<br />
[2019-07-07 10:16:51] - Colten Ellis has been added to Pittsburgh Penguins.<br />
[2019-07-07 10:16:38] - Aarne Talvitie has been added to Pittsburgh Penguins.<br />
[2019-07-07 10:15:10] - Quinn Olson has been added to Dallas Stars.<br />
[2019-07-07 10:13:19] - Matvei Guskov has been added to Tampa Bay Lightning.<br />
[2019-07-07 10:11:26] - Quinn Olson has been deleted from Anaheim Ducks.<br />
[2019-07-07 10:11:09] - TRADE : From Anaheim Ducks to Tampa Bay Lightning : Y:2019-RND:4-PIT, Y:2020-RND:3-SJS.<br />
[2019-07-07 10:02:36] - Ronnie Attard has been added to Quebec Nordiques.<br />
[2019-07-07 10:00:59] - Lucas Feuk has been added to Vegas Golden Knights.<br />
[2019-07-07 09:59:54] - Simon Benoit has been added to St. Louis Blues.<br />
[2019-07-07 09:57:52] - Arturs Silovs has been added to Arizona Coyotes.<br />
[2019-07-07 09:55:47] - Quinn Olson has been added to Anaheim Ducks.<br />
[2019-07-07 09:55:27] - Karson Kuhlman has been added to Nashville Predators.<br />
[2019-07-07 09:50:57] - Domenick Fensore has been added to Florida Panthers.<br />
[2019-07-07 09:46:05] - Patrick Moynihan has been added to Tampa Bay Lightning.<br />
[2019-07-07 09:45:46] - Daniil Misyul has been added to New Jersey Devils.<br />
[2019-07-07 09:35:02] - William Rouleau has been added to San Jose Sharks.<br />
[2019-07-07 09:34:07] - Zach Sanford has been added to New York Rangers.<br />
[2019-07-07 09:32:49] - Marc Del Gaizo has been added to Edmonton Oilers.<br />
[2019-07-07 09:31:25] - Vincent Marleau has been added to San Jose Sharks.<br />
[2019-07-07 09:30:43] - Alexis Arsenault has been added to San Jose Sharks.<br />
[2019-07-07 09:29:05] - Aku Raty has been added to Washington Capitals.<br />
[2019-07-07 09:28:01] - Samuel Asselin has been added to Pittsburgh Penguins.<br />
[2019-07-07 09:25:52] - Samuel Regis has been added to San Jose Sharks.<br />
[2019-07-07 09:24:33] - Matthew Stienburg has been added to Vegas Golden Knights.<br />
[2019-07-07 09:21:27] - Mattias Norlinder has been added to Montreal Canadiens.<br />
[2019-07-07 09:20:17] - Yegor Spiridonov has been added to New York Islanders.<br />
[2019-07-07 09:19:11] - Zachary Emond has been added to San Jose Sharks.<br />
[2019-07-07 09:17:44] - Layton Ahac has been added to Anaheim Ducks.<br />
[2019-07-07 09:13:15] - TRADE : From Washington Capitals to Arizona Coyotes : Y:2021-RND:2-VEG.<br />
[2019-07-07 09:12:41] - Valentin Nussbaumer has been added to Washington Capitals.<br />
[2019-07-07 09:10:25] - Tristan Langan has been added to New York Islanders.<br />
[2019-07-07 09:08:27] - Joel Teasdale has been added to Chicago Blackhawks.<br />
[2019-07-07 09:06:48] - Félix Bibeau has been added to San Jose Sharks.<br />
[2019-07-07 09:05:41] - Eetu Pakkila has been added to Toronto Maple Leafs.<br />
[2019-07-07 09:03:34] - TRADE : From Toronto Maple Leafs to New York Islanders : Y:2020-RND:3-TOR.<br />
[2019-07-07 09:03:34] - TRADE : From New York Islanders to Toronto Maple Leafs : Y:2019-RND:4-NJD, Y:2020-RND:4-DET.<br />
[2019-07-07 08:58:13] - Jimmy Huntington has been added to Colorado Avalanche.<br />
[2019-07-07 08:57:11] - Aliaksei Protas has been added to Arizona Coyotes.<br />
[2019-07-07 08:55:06] - TRADE : From Washington Capitals to Arizona Coyotes : Y:2019-RND:4-OTT, Y:2019-RND:4-WSH, Y:2019-RND:5-WSH.<br />
[2019-07-07 08:55:06] - TRADE : From Arizona Coyotes to Washington Capitals : Y:2021-RND:2-VEG.<br />
[2019-07-07 07:11:17] - Nikita Okhotyuk has been added to Vegas Golden Knights.<br />
[2019-07-07 07:04:58] - TRADE : From Vegas Golden Knights to Winnipeg Jets : Y:2020-RND:3-PIT, Y:2020-RND:4-MTL, Y:2020-RND:4-PIT.<br />
[2019-07-07 07:04:58] - TRADE : From Winnipeg Jets to Vegas Golden Knights : Y:2019-RND:4-MIN, Y:2019-RND:4-PHI, Y:2019-RND:5-MTL, Y:2019-RND:5-NSH, Y:2019-RND:5-WPG.<br />
[2019-07-07 06:57:19] - Kirill Slepets has been added to Washington Capitals.<br />
[2019-07-07 06:56:10] - Tyce Thompson has been added to New York Rangers.<br />
[2019-07-07 06:53:44] - Henry Thrun has been added to Dallas Stars.<br />
[2019-07-07 06:53:03] - Viktor Lodin has been added to Winnipeg Jets.<br />
[2019-07-06 10:22:13] - Oskar Steen has been added to St. Louis Blues.<br />
[2019-07-06 10:20:42] - Cade Webber has been added to New York Islanders.<br />
[2019-07-06 10:19:11] - Nicolas Abruzzese has been added to New Jersey Devils.<br />
[2019-07-06 10:17:37] - Jordan Spence has been added to Washington Capitals.<br />
[2019-07-06 10:15:36] - TRADE : From Ottawa Senators to Buffalo Sabres : Cameron Morrison (P), Y:2021-RND:3-OTT.<br />
[2019-07-06 10:15:36] - TRADE : From Buffalo Sabres to Ottawa Senators : Rocco Grimaldi.<br />
[2019-07-06 07:21:03] - Graeme Clarke has been added to Boston Bruins.<br />
[2019-07-06 07:13:51] - Michael Vukojevic has been added to Montreal Canadiens.<br />
[2019-07-06 07:13:20] - Karl Henrikson has been added to Boston Bruins.<br />
[2019-07-06 07:06:38] - Kiefer Sherwood has been added to St. Louis Blues.<br />
[2019-07-06 07:05:37] - Jake Schmaltz has been added to New Jersey Devils.<br />
[2019-07-06 07:04:41] - Mason Appleton has been added to St. Louis Blues.<br />
[2019-07-06 07:04:01] - Michal Teply has been added to Edmonton Oilers.<br />
[2019-07-06 07:02:40] - TRADE : From Edmonton Oilers to Anaheim Ducks : Y:2020-RND:3-EDM.<br />
[2019-07-06 07:02:40] - TRADE : From Anaheim Ducks to Edmonton Oilers : Y:2019-RND:3-NYR.<br />
[2019-07-05 13:12:56] - Rafael Harvey Pinard has been added to San Jose Sharks.<br />
[2019-07-05 13:12:09] - Hugo Alnefelt has been added to Dallas Stars.<br />
[2019-07-05 13:11:37] - Dillon Hamaliuk has been added to Dallas Stars.<br />
[2019-07-05 13:10:54] - Mikko Kokkonen has been added to Ottawa Senators.<br />
[2019-07-05 13:09:55] - Adam Beckman has been added to Edmonton Oilers.<br />
[2019-07-05 13:08:45] - Justin Bergeron has been added to San Jose Sharks.<br />
[2019-07-05 13:08:10] - Albin Grewe has been added to New York Rangers.<br />
[2019-07-05 13:07:34] - Luka Burzan has been added to Montreal Canadiens.<br />
[2019-07-05 13:06:42] - Maxim Cajkovic has been added to Quebec Nordiques.<br />
[2019-07-05 13:05:57] - Teemu Turunen has been added to Toronto Maple Leafs.<br />
[2019-07-05 13:04:41] - Matt Luff has been added to Los Angeles Kings.<br />
[2019-07-05 13:03:05] - John Farinacci has been added to Washington Capitals.<br />
[2019-07-05 13:02:11] - TRADE : From Ottawa Senators to Anaheim Ducks : Y:2019-RND:4-PIT, Y:2020-RND:3-SJS.<br />
[2019-07-05 12:58:46] - TRADE : From Quebec Nordiques to Florida Panthers : Nick Bjugstad.<br />
[2019-07-05 12:58:46] - TRADE : From Florida Panthers to Quebec Nordiques : Alex Tuch.<br />
[2019-07-05 12:57:05] - TRADE : From Winnipeg Jets to Florida Panthers : Brendan Perlini, Nicolas Petan, Jonathan Huberdeau.<br />
[2019-07-05 12:57:05] - TRADE : From Florida Panthers to Winnipeg Jets : Tyler Seguin, Brent Burns.<br />
[2019-07-05 12:54:15] - TRADE : From Vegas Golden Knights to Vancouver Canucks : Y:2020-RND:3-PHI.<br />
[2019-07-05 12:54:15] - TRADE : From Vancouver Canucks to Vegas Golden Knights : Y:2019-RND:5-SEA, Y:2019-RND:5-SJS.<br />
[2019-07-05 12:51:57] - Antti Saarela has been added to Toronto Maple Leafs.<br />
[2019-07-05 12:50:38] - Simon Lundmark has been added to Anaheim Ducks.<br />
[2019-07-05 12:49:30] - Tuuka Tieksola has been added to Montreal Canadiens.<br />
[2019-07-05 12:49:06] - Cole Schwindt has been added to Vegas Golden Knights.<br />
[2019-07-05 12:46:56] - Anttoni Honka has been added to Washington Capitals.<br />
[2019-07-05 12:46:22] - Ilya Nikolayev has been added to Edmonton Oilers.<br />
[2019-07-05 12:45:56] - TRADE : From Winnipeg Jets to Washington Capitals : Magnus Nygren, Marcus Pettersson, Y:2019-RND:3-MIN.<br />
[2019-07-05 12:45:56] - TRADE : From Washington Capitals to Winnipeg Jets : Dion Phaneuf, 1 500 000 $ (Salary Cap).<br />
[2019-06-30 07:07:58] - TRADE : From Anaheim Ducks to Vancouver Canucks : T.J. Brennan, Y:2020-RND:4-CLB.<br />
[2019-06-30 07:07:58] - TRADE : From Vancouver Canucks to Anaheim Ducks : Matthew Strome (P), Y:2020-RND:2-WSH.<br />
[2019-06-30 07:05:38] - Albert Johansson has been added to Tampa Bay Lightning.<br />
[2019-06-30 07:04:45] - Alexander Campbell has been added to Buffalo Sabres.<br />
[2019-06-30 07:04:09] - Matias Maccelli has been added to Toronto Maple Leafs.<br />
[2019-06-30 07:03:38] - Marshall Warren has been added to Edmonton Oilers.<br />
[2019-06-30 07:03:03] - Erik Portillo has been added to Toronto Maple Leafs.<br />
[2019-06-30 07:02:42] - Kaedan Korczak has been added to New York Islanders.<br />
[2019-06-29 16:26:48] - Vladislav Kolyachonok has been added to Vegas Golden Knights.<br />
[2019-06-29 16:26:34] - Oliwer Kaski has been added to St. Louis Blues.<br />
[2019-06-29 16:26:17] - Zac Jones has been added to Nashville Predators.<br />
[2019-06-29 16:26:00] - Drew Helleson has been added to New York Rangers.<br />
[2019-06-29 16:25:44] - Hunter Jones has been added to Vegas Golden Knights.<br />
[2019-06-29 16:25:28] - Jackson Lacombe has been added to Washington Capitals.<br />
[2019-06-29 16:25:09] - Pavel Dorofeyev has been added to Anaheim Ducks.<br />
[2019-06-29 16:24:50] - Ethan Keppen has been added to Montreal Canadiens.<br />
[2019-06-29 16:24:34] - David Rittich has been added to Ottawa Senators.<br />
[2019-06-29 16:24:04] - Samuel Bolduc has been added to Quebec Nordiques.<br />
[2019-06-29 16:23:34] - Devon Toews has been added to St. Louis Blues.<br />
[2019-06-29 16:22:44] - Jayden Struble has been added to Anaheim Ducks.<br />
[2019-06-29 16:22:22] - Nikita Alexandrov has been added to Florida Panthers.<br />
[2019-06-29 16:21:59] - Vladislav Firstov has been added to Montreal Canadiens.<br />
[2019-06-29 16:21:10] - Nick Robertson has been added to New York Rangers.<br />
[2019-06-29 16:20:16] - Robert Mastrosimone has been added to Arizona Coyotes.<br />
[2019-06-29 16:19:42] - Samuel Fagemo has been added to Buffalo Sabres.<br />
[2019-06-29 16:18:52] - Artemi Knyazev has been added to Florida Panthers.<br />
[2019-06-29 16:18:32] - Antti Tuomisto has been added to Toronto Maple Leafs.<br />
[2019-06-29 16:18:07] - Taro Hirose has been added to St. Louis Blues.<br />
[2019-06-29 16:17:49] - Jamieson Rees has been added to Anaheim Ducks.<br />
[2019-06-29 16:17:17] - Shane Pinto has been added to Edmonton Oilers.<br />
[2019-06-29 16:16:59] - Pyotr Kotchekov has been added to Anaheim Ducks.<br />
[2019-06-29 16:16:11] - Mads Sogaard has been added to New Jersey Devils.<br />
[2019-06-29 16:15:30] - Egor Afanasyev has been added to Vegas Golden Knights.<br />
[2019-06-29 16:15:01] - Patrick Puistola has been added to Washington Capitals.<br />
[2019-06-29 16:14:43] - Brett Leason has been added to Arizona Coyotes.<br />
[2019-06-29 16:14:20] - Alex Vlasic has been added to Boston Bruins.<br />
[2019-06-29 15:31:03] - TRADE : From Quebec Nordiques to Florida Panthers : Y:2019-RND:2-ANH.<br />
[2019-06-29 15:31:03] - TRADE : From Florida Panthers to Quebec Nordiques : Y:2019-RND:2-ARZ.<br />
[2019-06-29 15:29:53] - TRADE : From Quebec Nordiques to Florida Panthers : Y:2019-RND:2-ARZ.<br />
[2019-06-29 15:24:24] - TRADE : From Quebec Nordiques to Florida Panthers : Y:2020-RND:3-CHI.<br />
[2019-06-29 15:24:24] - TRADE : From Florida Panthers to Quebec Nordiques : Y:2019-RND:2-QUE.<br />
[2019-06-29 14:49:17] - TRADE : From Montreal Canadiens to Winnipeg Jets : Y:2019-RND:1-PHI.<br />
[2019-06-29 14:49:17] - TRADE : From Winnipeg Jets to Montreal Canadiens : Oscar Klefbom, Y:2019-RND:2-EDM, Y:2020-RND:2-WPG.<br />
[2019-06-29 14:12:28] - TRADE : From Winnipeg Jets to Edmonton Oilers : Y:2019-RND:1-CGY, Y:2019-RND:3-WPG, Y:2019-RND:3-PIT.<br />
[2019-06-29 14:12:28] - TRADE : From Edmonton Oilers to Winnipeg Jets : Jordan Eberle, Serron Noel (P), Y:2019-RND:2-EDM.<br />
[2019-06-29 12:32:36] - TRADE : From Buffalo Sabres to Vegas Golden Knights : Y:2019-RND:2-CAR.<br />
[2019-06-29 12:32:36] - TRADE : From Vegas Golden Knights to Buffalo Sabres : Y:2019-RND:2-COL, Y:2019-RND:3-CGY.<br />
[2019-06-29 11:07:11] - TRADE : From Vancouver Canucks to Columbus Blue Jackets : Elias Pettersson, Rasmus Ristolainen, Mikhail Grigorenko.<br />
[2019-06-29 11:07:11] - TRADE : From Columbus Blue Jackets to Vancouver Canucks : Max Domi, Y:2019-RND:1-VAN.<br />
[2019-06-29 09:21:19] - TRADE : From Quebec Nordiques to Florida Panthers : Y:2019-RND:2-QUE.<br />
[2019-06-29 09:21:19] - TRADE : From Florida Panthers to Quebec Nordiques : Y:2019-RND:2-ANH.<br />
[2019-06-29 00:23:11] - TRADE : From Arizona Coyotes to Quebec Nordiques : Y:2020-RND:5-ARZ.<br />
[2019-06-29 00:23:11] - TRADE : From Quebec Nordiques to Arizona Coyotes : Olivier Roy.<br />
[2019-06-28 21:33:40] - TRADE : From Arizona Coyotes to Los Angeles Kings : Y:2021-RND:3-ARZ.<br />
[2019-06-28 21:33:40] - TRADE : From Los Angeles Kings to Arizona Coyotes : Y:2019-RND:4-LOS.<br />
[2019-06-28 21:04:39] - TRADE : From Florida Panthers to Quebec Nordiques : Dan DeKeyser, Dylan Sikura (P).<br />
[2019-06-28 21:04:39] - TRADE : From Quebec Nordiques to Florida Panthers : Y:2019-RND:2-ANH.<br />
[2019-06-28 20:27:31] - TRADE : From Florida Panthers to Quebec Nordiques : Connor Brown, Mike Reilly (P), Y:2019-RND:5-CHI.<br />
[2019-06-28 20:27:31] - TRADE : From Quebec Nordiques to Florida Panthers : Jake Virtanen, Y:2019-RND:2-DET, Y:2020-RND:5-QUE.<br />
[2019-06-28 09:19:30] - TRADE : From Los Angeles Kings to Montreal Canadiens : Y:2019-RND:1-PHI, Y:2019-RND:3-COL, Y:2019-RND:5-LOS.<br />
[2019-06-28 09:19:30] - TRADE : From Montreal Canadiens to Los Angeles Kings : Y:2019-RND:1-NJD, Y:2021-RND:4-MTL.<br />
[2019-06-28 09:15:10] - TRADE : From Vegas Golden Knights to Calgary Flames : Y:2020-RND:1-LOS, Y:2020-RND:2-DET, Y:2020-RND:4-CAR.<br />
[2019-06-28 09:15:10] - TRADE : From Calgary Flames to Vegas Golden Knights : Y:2019-RND:2-CGY, Y:2019-RND:2-WPG, Y:2019-RND:3-CGY.<br />
[2019-06-28 09:13:25] - TRADE : From New York Islanders to Philadelphia Flyers : Y:2019-RND:1-NYI.<br />
[2019-06-28 09:13:25] - TRADE : From Philadelphia Flyers to New York Islanders : Jacob Bernard-Docker (P), Y:2019-RND:1-MIN, Y:2019-RND:4-DET, Y:2019-RND:4-NJD, Y:2019-RND:4-SJS.<br />
[2019-06-28 09:10:13] - TRADE : From Ottawa Senators to Chicago Blackhawks : Y:2019-RND:1-CHI.<br />
[2019-06-28 09:10:13] - TRADE : From Chicago Blackhawks to Ottawa Senators : Alexander Khovanov (P), Sampo Ranta (P), 4 000 000 $ (Salary Cap).<br />
[2019-06-28 09:09:53] - TRADE : From Vegas Golden Knights to San Jose Sharks : Y:2020-RND:2-MTL, Y:2019-RND:4-TOR.<br />
[2019-06-28 09:09:53] - TRADE : From San Jose Sharks to Vegas Golden Knights : Y:2019-RND:2-BOS.<br />
[2019-06-27 10:45:42] - TRADE : From Vegas Golden Knights to Anaheim Ducks : Y:2019-RND:2-OTT.<br />
[2019-06-27 10:45:42] - TRADE : From Anaheim Ducks to Vegas Golden Knights : Y:2020-RND:2-ANH, Y:2020-RND:2-DET.<br />
[2019-06-26 13:53:45] - TRADE : From San Jose Sharks to Vegas Golden Knights : Petteri Lindbohm, Y:2019-RND:2-COL, Y:2019-RND:5-MIN.<br />
[2019-06-26 13:53:45] - TRADE : From Vegas Golden Knights to San Jose Sharks : Aaron Ness, Y:2019-RND:4-CHI, Y:2019-RND:4-CLB, Y:2020-RND:2-LOS.<br />
[2019-06-22 07:25:26] - Alexander Semin was added to Quebec Nordiques.<br />
[2019-06-21 11:43:07] - TRADE : From Ottawa Senators to Pittsburgh Penguins : Johan Larsson.<br />
[2019-06-21 11:43:07] - TRADE : From Pittsburgh Penguins to Ottawa Senators : Conor Sheary.<br />
[2019-06-21 06:47:48] - TRADE : From San Jose Sharks to New York Rangers : Y:2020-RND:1-STL, Y:2020-RND:2-SJS.<br />
[2019-06-21 06:47:48] - TRADE : From New York Rangers to San Jose Sharks : Y:2019-RND:1-FLA, Y:2020-RND:3-STL.<br />
[2019-06-21 05:08:38] - TRADE : From Vegas Golden Knights to Los Angeles Kings : Jordan Staal, Mark Pysyk, Rasmus Andersson, Y:2019-RND:3-BUF, Y:2021-RND:1-VEG.<br />
[2019-06-21 05:08:38] - TRADE : From Los Angeles Kings to Vegas Golden Knights : Tyler Bozak, Kristopher Letang, Y:2019-RND:1-LOS, Y:2019-RND:2-LOS, Y:2020-RND:1-LOS, Y:2020-RND:2-LOS.<br />
[2019-06-19 13:10:06] - TRADE : From Washington Capitals to Pittsburgh Penguins : Emerson Etem.<br />
[2019-06-19 13:10:06] - TRADE : From Pittsburgh Penguins to Washington Capitals : Nikita Gusev, Kasper Bjorkqvist (P), Y:2019-RND:4-VEG.<br />
[2019-06-19 10:51:39] - TRADE : From Buffalo Sabres to Pittsburgh Penguins : Patric Hornqvist.<br />
[2019-06-19 10:51:39] - TRADE : From Pittsburgh Penguins to Buffalo Sabres : Trevor Daley, Y:2020-RND:4-ARZ.<br />
[2019-06-19 07:47:04] - TRADE : From San Jose Sharks to Pittsburgh Penguins : Loui Eriksson.<br />
[2019-06-19 07:47:04] - TRADE : From Pittsburgh Penguins to San Jose Sharks : Christian Ehrhoff, Y:2020-RND:5-PIT.<br />
[2019-06-18 07:38:00] - TRADE : From Vegas Golden Knights to Vancouver Canucks : Ken Appleby.<br />
[2019-06-18 07:38:00] - TRADE : From Vancouver Canucks to Vegas Golden Knights : Y:2019-RND:5-PHI.<br />
[2019-06-17 16:53:39] - TRADE : From Montreal Canadiens to Vegas Golden Knights : Y:2020-RND:2-MTL, Y:2020-RND:4-MTL, Y:2020-RND:5-TOR.<br />
[2019-06-17 16:53:39] - TRADE : From Vegas Golden Knights to Montreal Canadiens : Y:2019-RND:3-FLA, Y:2019-RND:4-COL, Y:2019-RND:5-CLB, Y:2019-RND:5-VAN.<br />
[2019-06-17 14:14:14] - TRADE : From Calgary Flames to Arizona Coyotes : Y:2019-RND:2-MIN, Y:2019-RND:2-PHI.<br />
[2019-06-17 14:14:14] - TRADE : From Arizona Coyotes to Calgary Flames : Y:2020-RND:2-VEG, Y:2020-RND:2-STL, Y:2020-RND:3-ARZ.<br />
[2019-06-17 09:59:02] - TRADE : From Vegas Golden Knights to Pittsburgh Penguins : Y:2020-RND:4-ARZ, Y:2020-RND:5-CAR.<br />
[2019-06-17 09:59:02] - TRADE : From Pittsburgh Penguins to Vegas Golden Knights : 50 000 000 $ (Money).<br />
[2019-06-17 08:21:37] - TRADE : From New York Rangers to Buffalo Sabres : Brandon Saad, 1 500 000 $ (Salary Cap).<br />
[2019-06-17 08:21:37] - TRADE : From Buffalo Sabres to New York Rangers : Y:2019-RND:1-BUF.<br />
[2019-06-17 08:13:38] - TRADE : From Washington Capitals to Buffalo Sabres : James Neal, 2 000 000 $ (Salary Cap).<br />
[2019-06-17 08:13:38] - TRADE : From Buffalo Sabres to Washington Capitals : Vladislav Namestnikov, Jake Bean (P), Jonny Tychonick (P), Y:2020-RND:2-CLB.<br />
[2019-06-17 08:09:45] - TRADE : From Columbus Blue Jackets to Arizona Coyotes : Y:2020-RND:5-CLB.<br />
[2019-06-17 08:09:45] - TRADE : From Arizona Coyotes to Columbus Blue Jackets : Mikko Koivu, 15 000 000 $ (Money).<br />
[2019-06-17 08:05:27] - TRADE : From Vancouver Canucks to San Jose Sharks : Cory Schneider, Y:2020-RND:1-STL.<br />
[2019-06-17 08:05:27] - TRADE : From San Jose Sharks to Vancouver Canucks : Tuomo Ruutu, Matthew Strome (P), Y:2019-RND:5-SEA, Y:2020-RND:1-VAN, Y:2020-RND:2-OTT, Y:2020-RND:2-WSH.<br />
[2019-06-17 08:02:56] - TRADE : From Vancouver Canucks to Tampa Bay Lightning : 2 000 000 $ (Salary Cap).<br />
[2019-06-17 08:02:56] - TRADE : From Tampa Bay Lightning to Vancouver Canucks : Y:2019-RND:5-PHI, Y:2019-RND:5-SJS.<br />
[2019-06-17 08:00:52] - TRADE : From Vegas Golden Knights to San Jose Sharks : Tuomo Ruutu.<br />
[2019-06-17 08:00:52] - TRADE : From San Jose Sharks to Vegas Golden Knights : 1 $ (Money).<br />
[2019-06-17 08:00:08] - TRADE : From Vegas Golden Knights to Arizona Coyotes : Y:2019-RND:5-TBL.<br />
[2019-06-17 08:00:08] - TRADE : From Arizona Coyotes to Vegas Golden Knights : Y:2020-RND:4-ARZ.<br />
[2019-06-13 09:14:37] - TRADE : From Vancouver Canucks to Tampa Bay Lightning : Gabriel Landeskog, Vince Dunn, Y:2019-RND:1-STL.<br />
[2019-06-13 09:14:37] - TRADE : From Tampa Bay Lightning to Vancouver Canucks : Elias Pettersson.<br />
[2019-06-12 08:52:14] - TRADE : From Detroit Red Wings to Chicago Blackhawks : Joe Hicketts (P).<br />
[2019-06-12 08:52:14] - TRADE : From Chicago Blackhawks to Detroit Red Wings : 30 000 000 $ (Money).<br />
[2019-06-10 08:32:39] - TRADE : From Anaheim Ducks to Florida Panthers : Mike Reilly (P).<br />
[2019-06-10 08:32:39] - TRADE : From Florida Panthers to Anaheim Ducks : Y:2019-RND:3-CLB.<br />
[2019-06-10 08:29:25] - TRADE : From Anaheim Ducks to St. Louis Blues : Troy Stecher (P).<br />
[2019-06-10 08:29:25] - TRADE : From St. Louis Blues to Anaheim Ducks : Y:2019-RND:2-SJS, Y:2019-RND:3-NYR.<br />
[2019-06-07 08:15:27] - TRADE : From Vancouver Canucks to Anaheim Ducks : Y:2020-RND:2-DET, Y:2021-RND:3-VAN.<br />
[2019-06-07 08:15:27] - TRADE : From Anaheim Ducks to Vancouver Canucks : Jesse Ylonen, Vitek Vanecek.<br />
[2019-06-07 08:13:45] - TRADE : From Vancouver Canucks to Anaheim Ducks : Lias Andersson (P).<br />
[2019-06-07 08:13:45] - TRADE : From Anaheim Ducks to Vancouver Canucks : Vince Dunn.<br />
[2019-06-07 08:11:18] - TRADE : From Vancouver Canucks to Florida Panthers : Aaron Ekblad, Y:2020-RND:4-VAN.<br />
[2019-06-07 08:11:18] - TRADE : From Florida Panthers to Vancouver Canucks : Joel Eriksson Ek, Gabriel Landeskog, Y:2020-RND:3-FLA.<br />
[2019-06-06 07:50:41] - TRADE : From Vancouver Canucks to Calgary Flames : Y:2021-RND:4-VAN.<br />
[2019-06-06 07:50:41] - TRADE : From Calgary Flames to Vancouver Canucks : Patrick Wiercioch.<br />
[2019-06-06 07:49:27] - TRADE : From Columbus Blue Jackets to Anaheim Ducks : Timothy Liljegren (P), Y:2019-RND:2-CLB, Y:2020-RND:4-CLB.<br />
[2019-06-06 07:49:27] - TRADE : From Anaheim Ducks to Columbus Blue Jackets : Joe Veleno.<br />
[2019-06-06 07:45:48] - TRADE : From Quebec Nordiques to Winnipeg Jets : Alexander Avtsin.<br />
[2019-06-06 07:45:48] - TRADE : From Winnipeg Jets to Quebec Nordiques : Kari Lehtonen.<br />
[2019-06-05 12:58:31] - TRADE : From Vegas Golden Knights to San Jose Sharks : Nathan Beaulieu, Y:2019-RND:5-MIN.<br />
[2019-06-05 12:58:31] - TRADE : From San Jose Sharks to Vegas Golden Knights : Y:2019-RND:1-PIT.<br />
[2019-06-05 09:00:34] - TRADE : From Buffalo Sabres to Ottawa Senators : Mark Giordano.<br />
[2019-06-05 09:00:34] - TRADE : From Ottawa Senators to Buffalo Sabres : Nick Baptiste, Nikita Soshnikov, Filip Westerlund (P).<br />
[2019-06-05 07:58:57] - TRADE : From Ottawa Senators to Vegas Golden Knights : Torey Krug.<br />
[2019-06-05 07:58:57] - TRADE : From Vegas Golden Knights to Ottawa Senators : Brandon Gormley, Cameron Morrison (P).<br />
[2019-06-05 07:55:15] - TRADE : From Philadelphia Flyers to Ottawa Senators : Johan Larsson, Y:2019-RND:4-PIT.<br />
[2019-06-05 07:55:15] - TRADE : From Ottawa Senators to Philadelphia Flyers : John Moore.<br />
[2019-06-04 11:59:26] - TRADE : From Vancouver Canucks to Buffalo Sabres : Rocco Grimaldi.<br />
[2019-06-04 11:59:26] - TRADE : From Buffalo Sabres to Vancouver Canucks : Brandon Gignac (P), Y:2020-RND:2-DET.<br />
[2019-06-04 11:55:47] - TRADE : From Vegas Golden Knights to St. Louis Blues : Anthony Camara, Theodor Blueger, Y:2019-RND:3-TBL.<br />
[2019-06-04 11:55:47] - TRADE : From St. Louis Blues to Vegas Golden Knights : Jack Johnson.<br />
[2019-06-04 08:20:03] - TRADE : From Vancouver Canucks to Montreal Canadiens : T.J. Galiardi.<br />
[2019-06-04 08:20:03] - TRADE : From Montreal Canadiens to Vancouver Canucks : Zach Parise.<br />
[2019-06-04 07:37:24] - TRADE : From Philadelphia Flyers to Quebec Nordiques : Y:2019-RND:1-MTL, Y:2019-RND:1-TOR, Y:2019-RND:3-DET.<br />
[2019-06-04 07:37:24] - TRADE : From Quebec Nordiques to Philadelphia Flyers : Y:2019-RND:1-MIN.<br />
[2019-06-04 07:34:26] - TRADE : From Buffalo Sabres to St. Louis Blues : Ryan Johansen.<br />
[2019-06-04 07:34:26] - TRADE : From St. Louis Blues to Buffalo Sabres : Ryan O'Reilly, Alexei Lipanov (P).<br />
[2019-06-04 07:32:30] - TRADE : From Pittsburgh Penguins to Philadelphia Flyers : Y:2020-RND:1-PIT.<br />
[2019-06-04 07:32:30] - TRADE : From Philadelphia Flyers to Pittsburgh Penguins : Nikita Gusev.<br />
[2019-06-03 16:18:32] - TRADE : From Arizona Coyotes to San Jose Sharks : Loui Eriksson, Y:2019-RND:4-ARZ, Y:2019-RND:4-SEA.<br />
[2019-06-03 16:18:32] - TRADE : From San Jose Sharks to Arizona Coyotes : Y:2020-RND:2-STL.<br />
[2019-06-03 16:15:04] - TRADE : From Philadelphia Flyers to Toronto Maple Leafs : Y:2019-RND:1-ANH, Y:2019-RND:3-DAL, Y:2019-RND:3-QUE, Y:2019-RND:3-VAN.<br />
[2019-06-03 16:15:04] - TRADE : From Toronto Maple Leafs to Philadelphia Flyers : Y:2019-RND:1-TOR.<br />
[2019-06-03 15:31:39] - TRADE : From Tampa Bay Lightning to Ottawa Senators : Nathan Bastian (P), Y:2020-RND:3-SJS.<br />
[2019-06-03 15:31:39] - TRADE : From Ottawa Senators to Tampa Bay Lightning : Jeff Carter.<br />
[2019-06-03 15:29:44] - TRADE : From Philadelphia Flyers to Ottawa Senators : Torey Krug, Y:2019-RND:1-CHI, Y:2020-RND:2-PIT.<br />
[2019-06-03 15:29:44] - TRADE : From Ottawa Senators to Philadelphia Flyers : Charlie Coyle, Valtteri Filppula, Ty Smith (P).<br />
[2019-06-03 11:39:52] - TRADE : From Columbus Blue Jackets to San Jose Sharks : Keith Yandle, Y:2019-RND:2-COL.<br />
[2019-06-03 11:39:52] - TRADE : From San Jose Sharks to Columbus Blue Jackets : Calvin de Haan, Timothy Liljegren (P), Mattias Samuelsson (P).<br />
[2019-06-03 11:31:32] - TRADE : From St. Louis Blues to Vegas Golden Knights : Marcus Kruger.<br />
[2019-06-03 11:31:04] - TRADE : From New York Rangers to Vegas Golden Knights : Chris Bigras.<br />
[2019-06-03 11:30:14] - TRADE : From Montreal Canadiens to Vegas Golden Knights : Martin Reway.<br />
[2019-06-03 11:01:06] - TRADE : From Vancouver Canucks to Seattle Saints : Adam Erne, Matteson Iacopelli.<br />
[2019-06-03 11:01:06] - TRADE : From Seattle Saints to Vancouver Canucks : Y:2020-RND:1-STL.<br />
[2019-06-03 11:00:46] - TRADE : From Buffalo Sabres to Seattle Saints : Y:2020-RND:1-STL.<br />
[2019-06-03 11:00:46] - TRADE : From Seattle Saints to Buffalo Sabres : Mattias Janmark-Nylen.<br />
[2019-06-03 11:00:22] - TRADE : From Vegas Golden Knights to Calgary Flames : Y:2020-RND:4-SJS, Y:2020-RND:3-VEG, Y:2020-RND:5-STL.<br />
[2019-06-03 11:00:22] - TRADE : From Calgary Flames to Vegas Golden Knights : Y:2019-RND:5-MIN, Y:2019-RND:3-CAR, Y:2019-RND:5-CAR.<br />
[2019-06-03 10:58:34] - TRADE : From Vegas Golden Knights to San Jose Sharks : Y:2019-RND:4-MTL, Y:2019-RND:5-SEA.<br />
[2019-06-03 10:58:34] - TRADE : From San Jose Sharks to Vegas Golden Knights : Y:2019-RND:2-OTT.<br />
[2019-06-03 10:58:10] - TRADE : From Vegas Golden Knights to Chicago Blackhawks : Jack Roslovic, Y:2020-RND:3-MIN.<br />
[2019-06-03 10:58:10] - TRADE : From Chicago Blackhawks to Vegas Golden Knights : Rasmus Andersson.<br />
[2019-06-03 10:57:45] - TRADE : From Philadelphia Flyers to Ottawa Senators : Drew Stafford, Ryan Poehling (P), Brinson Pasichnuk (P), Y:2020-RND:2-SEA.<br />
[2019-06-03 10:57:45] - TRADE : From Ottawa Senators to Philadelphia Flyers : Victor Hedman, Y:2019-RND:4-DET.<br />
[2019-06-03 10:56:56] - TRADE : From Minnesota Wild to Ottawa Senators : Charlie Coyle, Mattias Tedenby, Jamie McBain, Y:2021-RND:2-MIN.<br />
[2019-06-03 10:56:56] - TRADE : From Ottawa Senators to Minnesota Wild : Brandon McMillan, Ryan Murphy, Justin Kloos, Michael Sgarbossa, Y:2020-RND:4-OTT, Y:2019-RND:5-ANH, Y:2019-RND:5-DET.<br />
[2019-06-03 10:55:50] - TRADE : From Quebec Nordiques to Montreal Canadiens : Y:2019-RND:1-QUE.<br />
[2019-06-03 10:55:50] - TRADE : From Montreal Canadiens to Quebec Nordiques : Stelio Mattheos (P), Maxime Lajoie (P), Y:2019-RND:1-MIN.<br />
[2019-06-03 10:55:22] - TRADE : From Philadelphia Flyers to Florida Panthers : Jordan Greenway (P), Matt Grzelcyk (P).<br />
[2019-06-03 10:55:22] - TRADE : From Florida Panthers to Philadelphia Flyers : Adam Henrique.<br />
[2019-06-03 10:54:23] - TRADE : From San Jose Sharks to Montreal Canadiens : Y:2019-RND:1-MIN, Y:2020-RND:1-CHI.<br />
[2019-06-03 10:54:23] - TRADE : From Montreal Canadiens to San Jose Sharks : Noah Dobson (P), Y:2019-RND:2-OTT.<br />
[2019-06-03 10:54:00] - TRADE : From Philadelphia Flyers to Columbus Blue Jackets : Max Domi, James Van Riemsdyk, Cal Foote (P), Shane Bowers (P), Y:2019-RND:1-VAN.<br />
[2019-06-03 10:54:00] - TRADE : From Columbus Blue Jackets to Philadelphia Flyers : Connor McDavid.<br />
[2019-06-03 10:53:02] - TRADE : From Ottawa Senators to Tampa Bay Lightning : William Bitten (P), Y:2019-RND:3-ANH.<br />
[2019-06-03 10:53:02] - TRADE : From Tampa Bay Lightning to Ottawa Senators : David Perron.<br />
[2019-06-03 10:52:40] - TRADE : From Pittsburgh Penguins to Anaheim Ducks : Bryan Rust, Derek Stepan.<br />
[2019-06-03 10:52:40] - TRADE : From Anaheim Ducks to Pittsburgh Penguins : Matt Duchene, Y:2019-RND:4-ANH.<br />
[2019-06-03 10:52:08] - TRADE : From Tampa Bay Lightning to Anaheim Ducks : Alex Galchenyuk, Owen Tippett.<br />
[2019-06-03 10:52:08] - TRADE : From Anaheim Ducks to Tampa Bay Lightning : David Pastrnak, Y:2019-RND:1-SEA.<br />
[2019-06-03 10:51:32] - TRADE : From Columbus Blue Jackets to Buffalo Sabres : Kevin Shattenkirk, Y:2020-RND:2-CLB.<br />
[2019-06-03 10:51:32] - TRADE : From Buffalo Sabres to Columbus Blue Jackets : Evgeny Dadonov, Martin Kaut (P).<br />
[2019-06-03 10:47:27] - TRADE : From Vegas Golden Knights to Boston Bruins : Jakob Forsbacka Karlsson (P), Y:2019-RND:2-VEG.<br />
[2019-06-03 10:47:27] - TRADE : From Boston Bruins to Vegas Golden Knights : Patrice Bergeron.<br />
[2019-06-03 10:46:45] - TRADE : From Los Angeles Kings to Vegas Golden Knights : Mark Pysyk, Michael Mersch, Kevin Gravel.<br />
[2019-06-03 10:45:33] - TRADE : From Vegas Golden Knights to Arizona Coyotes : Y:2019-RND:1-TBL, Y:2020-RND:2-VEG, Y:2021-RND:2-VEG.<br />
[2019-06-03 10:45:33] - TRADE : From Arizona Coyotes to Vegas Golden Knights : Pekka Rinne, Jordan Staal, Jyrki Jokipakka, 7 000 000 $ (Money).<br />
[2019-06-03 10:43:59] - TRADE : From Tampa Bay Lightning to Vegas Golden Knights : Nathan Beaulieu, Y:2019-RND:1-TBL.<br />
[2019-06-03 10:43:59] - TRADE : From Vegas Golden Knights to Tampa Bay Lightning : Y:2019-RND:3-VEG.<br />
[2019-05-30 13:53:15] - TRADE : From Pittsburgh Penguins to Vegas Golden Knights : Shawn Matthias.<br />
[2019-05-30 09:54:29] - TRADE : From Vegas Golden Knights to Buffalo Sabres : Y:2019-RND:2-CAR.<br />
[2019-05-29 16:56:30] - TRADE : From Vegas Golden Knights to Chicago Blackhawks : Y:2019-RND:1-VEG.<br />
[2019-05-29 16:56:30] - TRADE : From Chicago Blackhawks to Vegas Golden Knights : Patrick Kane, Y:2019-RND:4-CHI.<br />
[2019-05-29 07:49:05] - TRADE : From Ottawa Senators to Vegas Golden Knights : Maxim Shalunov, Y:2019-RND:5-TBL, Y:2020-RND:3-OTT, Y:2020-RND:3-PIT, Y:2020-RND:5-STL.<br />
[2019-05-27 10:10:37] - TRADE : From Nashville Predators to Vegas Golden Knights : Vince Hinostroza.<br />
[2019-05-27 07:41:53] - TRADE : From Edmonton Oilers to Vegas Golden Knights : Morgan Klimchuk.<br />
[2019-05-26 04:51:27] - TRADE : From Seattle Saints to Vegas Golden Knights : Connor Hurley, Pius Suter, Y:2021-RND:4-SEA.<br />
[2019-05-26 04:39:41] - TRADE : From Philadelphia Flyers to Vegas Golden Knights : Marek Mazanec.<br />
[2019-05-24 07:56:28] - TRADE : From Colorado Avalanche to Vegas Golden Knights : Evan Rodrigues, Kevin Mandolese (P), Y:2019-RND:4-COL.<br />
[2019-05-24 07:51:27] - TRADE : From Detroit Red Wings to Vegas Golden Knights : Ilya Sorokin.<br />
[2019-05-22 10:45:46] - TRADE : From Florida Panthers to Vegas Golden Knights : Anthony Camara.<br />
[2019-05-21 16:10:49] - TRADE : From Toronto Maple Leafs to Vegas Golden Knights : Artturi Lehkonen.<br />
[2019-05-21 16:10:24] - TRADE : From Anaheim Ducks to Vegas Golden Knights : Cameron Morrison (P).<br />
[2019-05-21 16:10:13] - TRADE : From Buffalo Sabres to Vegas Golden Knights : Tuomo Ruutu, Jack Roslovic, Y:2019-RND:2-CAR, Y:2019-RND:3-BUF, Y:2019-RND:5-SEA, Y:2020-RND:4-PIT.<br />
[2019-05-21 16:09:12] - TRADE : From New Jersey Devils to Vegas Golden Knights : Daniel Vladar (P).<br />
[2019-05-21 16:07:42] - TRADE : From Washington Capitals to Vegas Golden Knights : Theodor Blueger, Veini Vehvilainen, Ken Appleby, Tyler Soy, Matthew Bradley, Dryden Hunt, Chaz Reddekopp, Braydyn Chizen, David Griger, Lukas Bengtsson.<br />
[2019-05-21 16:07:42] - TRADE : From Vegas Golden Knights to Washington Capitals : Y:2019-RND:2-TBL, Y:2020-RND:5-VEG.<br />
[2019-05-21 16:05:23] - TRADE : From San Jose Sharks to Vegas Golden Knights : Aaron Ness, Jakob Forsbacka Karlsson (P), Y:2019-RND:2-TBL, Y:2020-RND:4-SJS.<br />
[2019-05-21 16:05:23] - TRADE : From Vegas Golden Knights to San Jose Sharks : Y:2019-RND:2-BOS.<br />
[2019-05-21 15:57:52] - TRADE : From Vancouver Canucks to Vegas Golden Knights : Julius Bergman, Cooper Marody, Y:2019-RND:2-BOS, Y:2019-RND:4-TOR, Y:2019-RND:5-VAN.<br />
[2019-05-21 15:55:54] - TRADE : From Columbus Blue Jackets to Vegas Golden Knights : Brandon Gormley, Y:2019-RND:4-CLB, Y:2019-RND:5-CLB, Y:2020-RND:3-VAN.<br />
[2019-05-21 15:54:42] - TRADE : From Carolina Hurricanes to Vegas Golden Knights : Dylan Demelo, Y:2019-RND:4-MTL, Y:2020-RND:4-CAR, Y:2020-RND:5-CAR.<br />
[2019-05-21 13:38:16] - TRADE : From Vegas Golden Knights to Pittsburgh Penguins : Y:2019-RND:4-VEG, Y:2019-RND:5-VEG.<br />
[2019-05-21 13:38:16] - TRADE : From Pittsburgh Penguins to Vegas Golden Knights : 20 000 000 $ (Money).<br />
[2019-05-21 07:54:32] - TRADE : From Minnesota Wild to Vegas Golden Knights : Y:2020-RND:3-MIN, Y:2020-RND:3-PHI, Y:2020-RND:4-MIN, Y:2020-RND:5-MIN.<br />
[2019-05-21 07:54:01] - TRADE : From Minnesota Wild to Vegas Golden Knights : Andrew Copp.<br />
[2019-05-21 07:53:34] - TRADE : From Calgary Flames to Vegas Golden Knights : Joakim Ryan.<br />
[2019-05-21 05:46:47] - TRADE : From Dallas Stars to Vegas Golden Knights : Stefan Noesen.<br />
[2019-05-21 05:46:35] - TRADE : From Winnipeg Jets to Vegas Golden Knights : Angelo Miceli.<br />
[2019-05-16 11:17:49] - TRADE : From Quebec Nordiques to Vegas Golden Knights : Justin Bailey.<br />
[2019-05-16 11:17:40] - TRADE : From New York Islanders to Vegas Golden Knights : Michael Bunting, Y:2019-RND:3-FLA, Y:2019-RND:3-TBL.<br />
[2019-05-07 03:08:20] - Tyler Stahl has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:08:17] - Matt Mahalak has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:08:11] - Nicolas Blanchard has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:08:05] - Matthew Pistilli has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:08:02] - Kyle Lawson has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:07:57] - Justin Soryal has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:07:52] - Justin Krueger has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:07:50] - Joe Sova has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:07:45] - Danny Biega has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:07:44] - Cody Beach has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:07:42] - Chris Durno has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:07:39] - Cedric McNicoll has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:07:37] - Austin Levi has been deleted from Carolina Hurricanes.<br />
[2019-05-07 03:07:34] - A.J. Jenks has been deleted from Carolina Hurricanes.<br />
[2019-04-14 07:59:16] - Bryan Bickell was added to Montreal Canadiens.<br />
[2019-04-04 16:04:32] - Mads Boedker was added to Nashville Predators.<br />
[2019-03-31 06:56:55] - Freddie Hamilton was added to Nashville Predators.<br />
[2019-03-30 09:43:42] - Luke Opilka has been deleted from Ottawa Senators.<br />
[2019-03-30 09:43:36] - Zachary Stepan has been deleted from Ottawa Senators.<br />
[2019-03-29 07:51:41] - Zachary Yuen has been deleted from Winnipeg Jets.<br />
[2019-03-29 07:51:38] - Yaroslav Kosov has been deleted from Winnipeg Jets.<br />
[2019-03-29 07:51:33] - Kendall McFaull has been deleted from Winnipeg Jets.<br />
[2019-03-29 07:51:30] - Jordan Samuels-Thomas has been deleted from Winnipeg Jets.<br />
[2019-03-29 07:51:27] - Eamon McAdam has been deleted from Winnipeg Jets.<br />
[2019-03-29 07:51:24] - Dennis Everberg has been deleted from Winnipeg Jets.<br />
[2019-03-29 07:51:21] - Daultan Leveille has been deleted from Winnipeg Jets.<br />
[2019-03-29 07:51:18] - Cody Sol has been deleted from Winnipeg Jets.<br />
[2019-03-29 07:51:16] - Austen Brassard has been deleted from Winnipeg Jets.<br />
[2019-03-29 07:51:13] - Aaron Harstad has been deleted from Winnipeg Jets.<br />
[2019-03-28 22:30:12] - Derek Roy was added to Florida Panthers.<br />
[2019-03-28 22:30:12] - Ryan Kuffner was added to New Jersey Devils.<br />
[2019-03-26 08:09:12] - Ryan Kuffner was added to Buffalo Sabres.<br />
[2019-03-23 14:48:33] - TRADE : From Columbus Blue Jackets to New Jersey Devils : Jack Eichel, Elias Lindholm, Anthony Beauvillier, Dylan Strome, Michael Rasmussen (P), Y:2019-RND:1-CLB.<br />
[2019-03-23 14:48:33] - TRADE : From New Jersey Devils to Columbus Blue Jackets : Connor McDavid, Jonas Brodin, Y:2019-RND:2-COL.<br />
[2019-03-23 14:35:17] - TRADE : From New York Islanders to Detroit Red Wings : Cory Conacher.<br />
[2019-03-23 14:35:17] - TRADE : From Detroit Red Wings to New York Islanders : Broc Little, Y:2019-RND:3-TBL, Y:2020-RND:4-DET.<br />
[2019-03-23 14:04:46] - Maximilian Veronneau was added to Montreal Canadiens.<br />
[2019-03-23 13:50:46] - TRADE : From Carolina Hurricanes to Colorado Avalanche : Marc-Andre Gragnani.<br />
[2019-03-23 13:50:46] - TRADE : From Colorado Avalanche to Carolina Hurricanes : Dillon Donnelly, Y:2019-RND:4-MTL.<br />
[2019-03-23 13:49:03] - TRADE : From Arizona Coyotes to Nashville Predators : Oliver Bjorkstrand, Drake Batherson (P), Y:2019-RND:5-STL.<br />
[2019-03-23 13:49:03] - TRADE : From Nashville Predators to Arizona Coyotes : Mark Stone, 1 000 000 $ (Salary Cap).<br />
[2019-03-23 13:43:14] - TRADE : From Montreal Canadiens to Minnesota Wild : Paul Byron, Brooks Orpik, Y:2020-RND:5-MTL.<br />
[2019-03-23 13:43:14] - TRADE : From Minnesota Wild to Montreal Canadiens : 1 $ (Money).<br />
[2019-03-23 13:33:06] - TRADE : From Florida Panthers to Ottawa Senators : Ryan Murphy.<br />
[2019-03-23 13:33:06] - TRADE : From Ottawa Senators to Florida Panthers : Joel Edmundson.<br />
[2019-03-23 13:20:42] - TRADE : From Detroit Red Wings to Columbus Blue Jackets : Slater Koekkoek, Madison Bowey, Dominik Bokk (P).<br />
[2019-03-23 13:20:42] - TRADE : From Columbus Blue Jackets to Detroit Red Wings : Ryan Getzlaf.<br />
[2019-03-23 13:15:24] - TRADE : From Philadelphia Flyers to Seattle Saints : William Karlsson, Tomas Jurco.<br />
[2019-03-23 13:15:24] - TRADE : From Seattle Saints to Philadelphia Flyers : Marcus Johansson, Christian Hanson, Jacob Bernard-Docker (P).<br />
[2019-03-23 11:58:33] - TRADE : From Seattle Saints to St. Louis Blues : Valeri Nichushkin.<br />
[2019-03-23 11:58:33] - TRADE : From St. Louis Blues to Seattle Saints : Alexander Burmistrov.<br />
[2019-03-23 11:16:00] - TRADE : From St. Louis Blues to Florida Panthers : Adam Henrique, Y:2019-RND:3-CLB.<br />
[2019-03-23 11:16:00] - TRADE : From Florida Panthers to St. Louis Blues : Alexander Burmistrov, Y:2019-RND:5-FLA.<br />
[2019-03-23 11:01:49] - TRADE : From Nashville Predators to Montreal Canadiens : James Wisniewski, Kevin Roy.<br />
[2019-03-23 11:01:49] - TRADE : From Montreal Canadiens to Nashville Predators : Justin Fontaine, Troy Brouwer, Jaret Anderson-Dolan (P).<br />
[2019-03-23 10:47:40] - TRADE : From Columbus Blue Jackets to Montreal Canadiens : Ilya Kovalchuk.<br />
[2019-03-23 10:47:40] - TRADE : From Montreal Canadiens to Columbus Blue Jackets : Brent Seabrook.<br />
[2019-03-23 10:28:52] - TRADE : From Columbus Blue Jackets to Vancouver Canucks : Adam Erne.<br />
[2019-03-23 10:28:52] - TRADE : From Vancouver Canucks to Columbus Blue Jackets : Carsen Twarynski (P), Y:2020-RND:3-VAN.<br />
[2019-03-23 10:07:43] - TRADE : From Buffalo Sabres to Detroit Red Wings : Cody Hodgson.<br />
[2019-03-23 10:07:43] - TRADE : From Detroit Red Wings to Buffalo Sabres : Joey Anderson (P), Anatoli Golyshev (P), Y:2020-RND:2-DET.<br />
[2019-03-23 09:01:43] - TRADE : From New Jersey Devils to Montreal Canadiens : Tomas Plekanec.<br />
[2019-03-23 09:01:43] - TRADE : From Montreal Canadiens to New Jersey Devils : Y:2019-RND:3-LOS.<br />
[2019-03-23 08:22:49] - TRADE : From Quebec Nordiques to Florida Panthers : Alex Auld, 1 000 000 $ (Money), 1 000 000 $ (Salary Cap).<br />
[2019-03-23 08:22:49] - TRADE : From Florida Panthers to Quebec Nordiques : 1 $ (Money).<br />
[2019-03-23 08:21:33] - TRADE : From Buffalo Sabres to Philadelphia Flyers : James Van Riemsdyk, Jerome Samson, Y:2019-RND:4-NJD.<br />
[2019-03-23 08:21:33] - TRADE : From Philadelphia Flyers to Buffalo Sabres : Cody Hodgson, Vladislav Namestnikov, Y:2019-RND:2-CAR.<br />
[2019-03-23 08:12:53] - TRADE : From Minnesota Wild to Florida Panthers : Matt Hackett, Connor Brown, Josh Brook (P).<br />
[2019-03-23 08:12:53] - TRADE : From Florida Panthers to Minnesota Wild : Petr Mrazek, Blake Wheeler, 3 000 000 $ (Money), 750 000 $ (Salary Cap).<br />
[2019-03-23 08:07:06] - TRADE : From Tampa Bay Lightning to Detroit Red Wings : Y:2019-RND:3-TBL.<br />
[2019-03-23 08:07:06] - TRADE : From Detroit Red Wings to Tampa Bay Lightning : Dustin Brown.<br />
[2019-03-23 08:04:06] - TRADE : From Pittsburgh Penguins to Montreal Canadiens : Y:2019-RND:5-BUF, Y:2021-RND:2-PIT.<br />
[2019-03-23 08:04:06] - TRADE : From Montreal Canadiens to Pittsburgh Penguins : Cody Franson.<br />
[2019-03-21 11:27:58] - Luke Pither has been deleted from Philadelphia Flyers.<br />
[2019-03-21 11:27:55] - Harry Zolnierczyk has been deleted from Philadelphia Flyers.<br />
[2019-03-21 11:27:53] - Colin Suellentrop has been deleted from Philadelphia Flyers.<br />
[2019-03-21 07:58:01] - TRADE : From Carolina Hurricanes to San Jose Sharks : Brandon Pirri, Matthew Strome (P), Y:2020-RND:1-CAR.<br />
[2019-03-21 07:58:01] - TRADE : From San Jose Sharks to Carolina Hurricanes : Matthew Nieto, 2 000 000 $ (Salary Cap).<br />
[2019-03-20 07:57:01] - TRADE : From Philadelphia Flyers to Buffalo Sabres : Martin Kaut (P), Jake Bean (P).<br />
[2019-03-20 07:57:01] - TRADE : From Buffalo Sabres to Philadelphia Flyers : Y:2019-RND:1-VAN, Y:2020-RND:2-SEA.<br />
[2019-03-20 07:55:51] - TRADE : From Philadelphia Flyers to Chicago Blackhawks : T.J. Oshie, Y:2019-RND:4-VAN.<br />
[2019-03-20 07:55:51] - TRADE : From Chicago Blackhawks to Philadelphia Flyers : Nikita Gusev, Y:2019-RND:1-MTL.<br />
[2019-03-20 07:55:08] - TRADE : From Vancouver Canucks to San Jose Sharks : Mattias Samuelsson (P), Y:2020-RND:1-VAN, Y:2019-RND:3-SEA.<br />
[2019-03-20 07:55:08] - TRADE : From San Jose Sharks to Vancouver Canucks : Josh Morrissey.<br />
[2019-03-19 08:05:33] - TRADE : From San Jose Sharks to Arizona Coyotes : Pekka Rinne, 1 000 000 $ (Salary Cap).<br />
[2019-03-19 08:05:33] - TRADE : From Arizona Coyotes to San Jose Sharks : Jonathan Bernier, Y:2020-RND:1-ARZ.<br />
[2019-03-19 08:05:03] - TRADE : From Ottawa Senators to Carolina Hurricanes : Kyle Okposo, Matthew Strome (P).<br />
[2019-03-19 08:05:03] - TRADE : From Carolina Hurricanes to Ottawa Senators : Valtteri Filppula, Ivan Chekhovich (P), 500 000 $ (Salary Cap).<br />
[2019-03-19 08:04:33] - TRADE : From Philadelphia Flyers to San Jose Sharks : Grant Clitsome, Timothy Liljegren (P), Y:2019-RND:1-MIN, Y:2019-RND:1-PIT, Y:2019-RND:3-ARZ.<br />
[2019-03-19 08:04:33] - TRADE : From San Jose Sharks to Philadelphia Flyers : Adam Larsson.<br />
[2019-03-18 07:54:37] - TRADE : From Seattle Saints to Carolina Hurricanes : Tomas Kundratek, Anders Lee.<br />
[2019-03-18 07:54:37] - TRADE : From Carolina Hurricanes to Seattle Saints : Nick Petrecki, Mattias Janmark-Nylen.<br />
[2019-03-18 07:54:13] - TRADE : From Winnipeg Jets to San Jose Sharks : Matt Calvert, Nikolas Brouillard, Timo Meier (P), Y:2020-RND:1-WPG.<br />
[2019-03-18 07:54:13] - TRADE : From San Jose Sharks to Winnipeg Jets : Jonathan Huberdeau, Nicolas Petan, 3 000 000 $ (Salary Cap), Y:2019-RND:5-NSH.<br />
[2019-03-17 08:10:55] - TRADE : From Philadelphia Flyers to Carolina Hurricanes : Tyler Toffoli, Ivan Chekhovich (P).<br />
[2019-03-17 08:10:55] - TRADE : From Carolina Hurricanes to Philadelphia Flyers : Cody Hodgson, Y:2021-RND:2-CAR.<br />
[2019-03-17 08:08:36] - TRADE : From Philadelphia Flyers to Ottawa Senators : David Krejci, Blair Betts, Jack Gorniak (P), Y:2019-RND:4-DET.<br />
[2019-03-17 08:08:36] - TRADE : From Ottawa Senators to Philadelphia Flyers : Boone Jenner, Tomas Jurco.<br />
[2019-03-15 08:09:04] - TRADE : From New York Islanders to St. Louis Blues : Marcus Kruger, Y:2019-RND:5-NYI.<br />
[2019-03-15 08:09:04] - TRADE : From St. Louis Blues to New York Islanders : Jakob Silfverberg, Tyler Benson (P).<br />
[2019-03-14 07:59:49] - Alex Auld was added to Quebec Nordiques.<br />
[2019-03-13 08:01:27] - TRADE : From Arizona Coyotes to Seattle Saints : Trevor Cox.<br />
[2019-03-13 08:01:27] - TRADE : From Seattle Saints to Arizona Coyotes : Patrice Cormier.<br />
[2019-03-13 08:01:12] - TRADE : From St. Louis Blues to Columbus Blue Jackets : Aaron Dell.<br />
[2019-03-13 08:01:12] - TRADE : From Columbus Blue Jackets to St. Louis Blues : Y:2020-RND:3-CLB.<br />
[2019-03-13 08:00:59] - TRADE : From Philadelphia Flyers to Montreal Canadiens : Alex Burrows.<br />
[2019-03-13 08:00:59] - TRADE : From Montreal Canadiens to Philadelphia Flyers : Jack Gorniak (P).<br />
[2019-03-10 15:11:46] - TRADE : From St. Louis Blues to Buffalo Sabres : James Van Riemsdyk, Tuomo Ruutu, Eric Comrie (P), Jordan Bellerive (P), Carl Dahlstrom (P), Y:2020-RND:1-STL.<br />
[2019-03-10 15:11:46] - TRADE : From Buffalo Sabres to St. Louis Blues : Adam Henrique, Maxwell Reinhart, Y:2020-RND:3-BUF.<br />
[2019-03-10 08:01:14] - Andre Benoit was added to Quebec Nordiques.<br />
[2019-03-10 08:00:23] - Matt Greene was added to Quebec Nordiques.<br />
[2019-03-10 08:00:12] - Mark Streit was added to Quebec Nordiques.<br />
[2019-03-09 08:20:21] - TRADE : From Chicago Blackhawks to Carolina Hurricanes : Andrew Ladd.<br />
[2019-03-09 08:20:21] - TRADE : From Carolina Hurricanes to Chicago Blackhawks : Marian Gaborik.<br />
[2019-03-08 11:54:27] - TRADE : From Winnipeg Jets to Montreal Canadiens : Alexandre Texier (P), Y:2019-RND:2-STL.<br />
[2019-03-08 11:54:27] - TRADE : From Montreal Canadiens to Winnipeg Jets : Alexander Kerfoot.<br />
[2019-03-08 11:54:13] - TRADE : From Carolina Hurricanes to Florida Panthers : Blake Wheeler.<br />
[2019-03-08 11:54:13] - TRADE : From Florida Panthers to Carolina Hurricanes : Wayne Simmonds.<br />
[2019-03-08 11:54:00] - TRADE : From Vancouver Canucks to Florida Panthers : Alexander Edler, Brandon Sutter, 5 000 000 $ (Salary Cap).<br />
[2019-03-08 11:54:00] - TRADE : From Florida Panthers to Vancouver Canucks : Andrei Svechnikov, Will Butcher, Mattias Samuelsson (P), Mike Amadio (P).<br />
[2019-03-06 08:02:31] - TRADE : From Chicago Blackhawks to Quebec Nordiques : Jackson Perbix (P), Filip Kral (P), Y:2020-RND:3-CHI.<br />
[2019-03-06 08:02:31] - TRADE : From Quebec Nordiques to Chicago Blackhawks : Derick Brassard, 4 000 000 $ (Salary Cap).<br />
[2019-03-06 08:02:06] - TRADE : From Chicago Blackhawks to Florida Panthers : Y:2019-RND:5-CHI.<br />
[2019-03-06 08:02:06] - TRADE : From Florida Panthers to Chicago Blackhawks : Andrew Ladd.<br />
[2019-03-05 07:58:31] - TRADE : From Dallas Stars to Arizona Coyotes : Mikko Koivu, 4 000 000 $ (Salary Cap), Y:2019-RND:4-STL.<br />
[2019-03-05 07:58:31] - TRADE : From Arizona Coyotes to Dallas Stars : Christian Jaros, 5 000 000 $ (Money).<br />
[2019-03-05 07:58:00] - TRADE : From Buffalo Sabres to Montreal Canadiens : Alexander Radulov.<br />
[2019-03-05 07:58:00] - TRADE : From Montreal Canadiens to Buffalo Sabres : Evgeny Dadonov, Y:2019-RND:4-NJD.<br />
[2019-03-04 18:35:50] - Allen York was added to Philadelphia Flyers.<br />
[2019-03-04 08:02:12] - TRADE : From Arizona Coyotes to Quebec Nordiques : Lukas Sedlak, Sean Durzi (P).<br />
[2019-03-04 08:02:12] - TRADE : From Quebec Nordiques to Arizona Coyotes : Andrew MacDonald, 1 500 000 $ (Salary Cap).<br />
[2019-03-04 08:01:48] - TRADE : From Colorado Avalanche to Quebec Nordiques : Jake Virtanen, Y:2020-RND:2-COL.<br />
[2019-03-04 08:01:48] - TRADE : From Quebec Nordiques to Colorado Avalanche : Evgeny Grachev, Y:2020-RND:3-QUE.<br />
[2019-03-04 07:38:04] - TRADE : From Winnipeg Jets to Arizona Coyotes : 500 000 $ (Money).<br />
[2019-03-04 07:38:04] - TRADE : From Arizona Coyotes to Winnipeg Jets : 1 500 000 $ (Salary Cap).<br />
<?php include "Footer.php";?>
