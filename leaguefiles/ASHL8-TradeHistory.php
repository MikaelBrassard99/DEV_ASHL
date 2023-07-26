<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Trade History</title>
<script src="ASHL8.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL8.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL8-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL8-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
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
[2019-03-02 09:17:30] - TRADE : From Winnipeg Jets to Arizona Coyotes : Loui Eriksson, 6 000 000 $ (Salary Cap).<br />
[2019-03-02 09:17:30] - TRADE : From Arizona Coyotes to Winnipeg Jets : Adam Brooks, Cole Ully, Y:2019-RND:3-MIN, Y:2019-RND:4-PHI, Y:2020-RND:2-ARZ.<br />
[2019-02-28 08:30:10] - TRADE : From Buffalo Sabres to Montreal Canadiens : Jonas Siegenthaler, Ivan Barbashev.<br />
[2019-02-28 08:30:10] - TRADE : From Montreal Canadiens to Buffalo Sabres : Eric Cornel, Y:2020-RND:4-PIT.<br />
[2019-02-28 07:56:02] - TRADE : From Winnipeg Jets to Montreal Canadiens : Evgeny Dadonov, 2 000 000 $ (Salary Cap).<br />
[2019-02-28 07:56:02] - TRADE : From Montreal Canadiens to Winnipeg Jets : Y:2019-RND:2-STL, Y:2019-RND:4-MIN, Y:2019-RND:5-MTL.<br />
[2019-02-28 07:55:37] - TRADE : From New Jersey Devils to Montreal Canadiens : Justin Fontaine, Y:2019-RND:3-NJD, Y:2019-RND:3-LOS, Y:2019-RND:4-NJD.<br />
[2019-02-28 07:55:37] - TRADE : From Montreal Canadiens to New Jersey Devils : Andreas Johnsson.<br />
[2019-02-27 07:53:48] - Adam Pardy was added to Florida Panthers.<br />
[2019-02-27 07:53:44] - Andrei Markov was added to Florida Panthers.<br />
[2019-02-26 10:16:59] - TRADE : From Montreal Canadiens to Chicago Blackhawks : Jhonas Enroth.<br />
[2019-02-26 10:16:59] - TRADE : From Chicago Blackhawks to Montreal Canadiens : Y:2019-RND:4-MIN.<br />
[2019-02-09 19:10:39] - TRADE : From Boston Bruins to Quebec Nordiques : Arvid Henrikson (P), Joel Farabee (P), Y:2019-RND:2-ANH, Y:2020-RND:1-BOS.<br />
[2019-02-09 19:10:39] - TRADE : From Quebec Nordiques to Boston Bruins : Jamie Benn, 2 780 000 $ (Salary Cap).<br />
[2019-02-09 19:07:00] - TRADE : From Buffalo Sabres to Philadelphia Flyers : Y:2019-RND:4-SJS.<br />
[2019-02-08 08:03:42] - Jeff Petry was added to Buffalo Sabres.<br />
[2019-02-08 08:03:36] - Niklas Backstrom was added to Pittsburgh Penguins.<br />
[2019-02-07 08:15:32] - TRADE : From Buffalo Sabres to Philadelphia Flyers : Craig Smith, Cal Foote (P), Y:2019-RND:4-PIT.<br />
[2019-02-07 08:15:32] - TRADE : From Philadelphia Flyers to Buffalo Sabres : Sami Vatanen, Y:2019-RND:5-SEA.<br />
[2019-02-06 08:22:18] - TRADE : From Buffalo Sabres to Pittsburgh Penguins : Bobby Ryan, Eric Gelinas, Y:2019-RND:5-BUF.<br />
[2019-02-06 08:22:18] - TRADE : From Pittsburgh Penguins to Buffalo Sabres : Patric Hornqvist, Tom Wilson.<br />
[2019-02-05 08:18:07] - TRADE : From San Jose Sharks to Arizona Coyotes : Jayden Halbgewachs, Skyler McKenzie.<br />
[2019-02-05 08:18:07] - TRADE : From Arizona Coyotes to San Jose Sharks : Y:2020-RND:2-SJS, Y:2020-RND:4-SJS.<br />
[2019-02-04 08:12:31] - TRADE : From Carolina Hurricanes to St. Louis Blues : Jakob Silfverberg.<br />
[2019-02-04 08:12:31] - TRADE : From St. Louis Blues to Carolina Hurricanes : Jarred Tinordi.<br />
[2019-02-04 08:12:12] - TRADE : From Tampa Bay Lightning to Quebec Nordiques : Vitali Abramov, Y:2019-RND:2-ARZ.<br />
[2019-02-04 08:12:12] - TRADE : From Quebec Nordiques to Tampa Bay Lightning : David Perron, 2 500 000 $ (Salary Cap).<br />
[2019-02-04 08:11:34] - Dylan Demelo was added to Carolina Hurricanes.<br />
[2019-02-02 08:22:08] - TRADE : From Seattle Saints to New Jersey Devils : Y:2019-RND:3-LOS.<br />
[2019-02-02 08:22:08] - TRADE : From New Jersey Devils to Seattle Saints : Vadim Shipachev.<br />
[2019-02-02 08:21:36] - TRADE : From St. Louis Blues to Toronto Maple Leafs : Brayden Schenn, Y:2019-RND:2-TOR.<br />
[2019-02-02 08:21:36] - TRADE : From Toronto Maple Leafs to St. Louis Blues : Nazem Kadri, Y:2019-RND:5-TOR, Y:2020-RND:4-TOR.<br />
[2019-02-02 08:20:59] - TRADE : From Vancouver Canucks to Florida Panthers : Tyler Seguin, Will Butcher.<br />
[2019-02-02 08:20:59] - TRADE : From Florida Panthers to Vancouver Canucks : Nikolaj Ehlers, Lias Andersson (P), Y:2019-RND:3-SEA.<br />
[2019-02-02 08:17:46] - Alexandre R.Picard was added to Nashville Predators.<br />
[2019-02-02 08:17:38] - Ales Kranjc was added to Nashville Predators.<br />
[2019-02-01 11:02:24] - TRADE : From St. Louis Blues to Philadelphia Flyers : Drew Stafford, Jordan Greenway (P), Y:2019-RND:1-ANH.<br />
[2019-02-01 11:02:24] - TRADE : From Philadelphia Flyers to St. Louis Blues : Brayden Schenn, Y:2019-RND:5-COL.<br />
[2019-02-01 08:46:22] - TRADE : From Dallas Stars to Philadelphia Flyers : Max Domi, Kale Clague, Jared Staal, Jonathan Ericsson, Matt Grzelcyk (P), Y:2019-RND:3-DAL, Y:2019-RND:3-QUE.<br />
[2019-02-01 08:46:22] - TRADE : From Philadelphia Flyers to Dallas Stars : Shea Weber, Filip Gustavsson, Colin Miller, Stefan Noesen.<br />
[2019-02-01 08:33:45] - TRADE : From Winnipeg Jets to Vancouver Canucks : David Schlemko.<br />
[2019-02-01 08:33:45] - TRADE : From Vancouver Canucks to Winnipeg Jets : Y:2020-RND:5-VAN.<br />
[2019-02-01 08:26:21] - TRADE : From Calgary Flames to San Jose Sharks : Eric Staal, 6 300 000 $ (Salary Cap).<br />
[2019-02-01 08:26:21] - TRADE : From San Jose Sharks to Calgary Flames : Ryan Dzingel, Y:2020-RND:1-ANH, Y:2021-RND:2-SJS.<br />
[2019-01-31 08:17:13] - TRADE : From Calgary Flames to Winnipeg Jets : Colin Smith, Y:2019-RND:1-CGY.<br />
[2019-01-31 08:17:13] - TRADE : From Winnipeg Jets to Calgary Flames : Nolan Patrick (P), Erik Brannstrom (P), Jack Drury (P), Y:2019-RND:2-PHI, Y:2019-RND:2-WPG.<br />
[2019-01-31 08:16:40] - TRADE : From Chicago Blackhawks to San Jose Sharks : Dylan Olsen, Brendan Leipsic, 1 500 000 $ (Salary Cap), Y:2020-RND:1-CHI.<br />
[2019-01-31 08:16:40] - TRADE : From San Jose Sharks to Chicago Blackhawks : Ryan Murray, Austin Czarnik.<br />
[2019-01-29 08:10:17] - TRADE : From San Jose Sharks to Nashville Predators : Jonas Hiller, Seth Barton (P), Tage Thompson (P).<br />
[2019-01-29 08:10:17] - TRADE : From Nashville Predators to San Jose Sharks : Pekka Rinne, 1 000 000 $ (Salary Cap), Y:2019-RND:5-NSH.<br />
[2019-01-29 08:09:23] - TRADE : From Ottawa Senators to Tampa Bay Lightning : Esa Lindell, Pavel Padakin, Max Jones (P), Y:2019-RND:2-ARZ.<br />
[2019-01-29 08:09:23] - TRADE : From Tampa Bay Lightning to Ottawa Senators : Michael Grabner, 3 000 000 $ (Salary Cap), Y:2019-RND:5-TBL.<br />
[2019-01-29 08:08:43] - TRADE : From Philadelphia Flyers to Buffalo Sabres : Evander Kane.<br />
[2019-01-29 08:08:43] - TRADE : From Buffalo Sabres to Philadelphia Flyers : Brayden Schenn, Ryan Poehling (P).<br />
[2019-01-27 07:45:45] - TRADE : From Quebec Nordiques to Montreal Canadiens : Cody Franson.<br />
[2019-01-27 07:45:45] - TRADE : From Montreal Canadiens to Quebec Nordiques : Frederic Allard (P), Y:2019-RND:2-QUE.<br />
[2019-01-27 07:45:08] - TRADE : From Detroit Red Wings to Seattle Saints : Marcus Johansson, Christian Hanson.<br />
[2019-01-27 07:45:08] - TRADE : From Seattle Saints to Detroit Red Wings : Artemi Panarin, Chandler Stephenson.<br />
[2019-01-26 08:08:44] - TRADE : From Ottawa Senators to Philadelphia Flyers : Tyler Toffoli, Stefan Noesen, Martin Necas (P), Y:2019-RND:1-CHI.<br />
[2019-01-26 08:08:44] - TRADE : From Philadelphia Flyers to Ottawa Senators : Boone Jenner, Maxim Shalunov, Y:2019-RND:3-ANH, Y:2019-RND:5-ANH.<br />
[2019-01-26 08:07:54] - TRADE : From Pittsburgh Penguins to Philadelphia Flyers : T.J. Oshie, Y:2019-RND:1-PIT, Y:2021-RND:3-PIT.<br />
[2019-01-26 08:07:54] - TRADE : From Philadelphia Flyers to Pittsburgh Penguins : Patric Hornqvist, Kasper Bjorkqvist (P).<br />
[2019-01-24 09:37:10] - TRADE : From Seattle Saints to New Jersey Devils : Jonathan Audy-Marchessault, Taylor Raddysh (P), Y:2021-RND:3-SEA.<br />
[2019-01-24 09:37:10] - TRADE : From New Jersey Devils to Seattle Saints : Seth Jones.<br />
[2019-01-22 07:57:38] - TRADE : From St. Louis Blues to San Jose Sharks : Joe Thornton, Jordan Caron, Jakob Forsbacka Karlsson (P), Tage Thompson (P), Y:2020-RND:2-STL, Y:2020-RND:2-WSH.<br />
[2019-01-22 07:57:38] - TRADE : From San Jose Sharks to St. Louis Blues : James Van Riemsdyk, Frederic St-Denis, Y:2019-RND:3-CLB.<br />
[2019-01-22 07:56:39] - TRADE : From Tampa Bay Lightning to Carolina Hurricanes : Nick Cousins.<br />
[2019-01-22 07:56:39] - TRADE : From Carolina Hurricanes to Tampa Bay Lightning : Quinton Howden.<br />
[2019-01-17 10:50:17] - TRADE : From Detroit Red Wings to Quebec Nordiques : Alexander Avtsin, Brett MacLean.<br />
[2019-01-17 10:50:17] - TRADE : From Quebec Nordiques to Detroit Red Wings : 1 $ (Money).<br />
[2019-01-16 08:27:33] - TRADE : From San Jose Sharks to Arizona Coyotes : Y:2020-RND:2-SJS, Y:2020-RND:4-SJS.<br />
[2019-01-16 08:27:33] - TRADE : From Arizona Coyotes to San Jose Sharks : Jayden Halbgewachs, Skyler McKenzie.<br />
[2019-01-15 08:45:37] - TRADE : From Buffalo Sabres to Pittsburgh Penguins : Conor Sheary, Matthew Corrente.<br />
[2019-01-15 08:45:37] - TRADE : From Pittsburgh Penguins to Buffalo Sabres : Matthew Highmore, Tyler Kennedy, Adam Gaudette (P).<br />
[2019-01-14 06:01:27] - TRADE : From Detroit Red Wings to Washington Capitals : Steve Moses, Y:2019-RND:4-OTT, Y:2020-RND:3-DET.<br />
[2019-01-14 06:01:27] - TRADE : From Washington Capitals to Detroit Red Wings : Artem Anisimov, Dustin Brown, 2 250 000 $ (Money).<br />
[2019-01-14 05:07:31] - Jason Garrison was added to Tampa Bay Lightning.<br />
[2019-01-14 05:06:32] - Eric Wellwood was added to San Jose Sharks.<br />
[2019-01-13 08:18:37] - Jimmy Howard was added to Montreal Canadiens.<br />
[2019-01-13 08:18:28] - Oskars Bartulis was added to Montreal Canadiens.<br />
[2019-01-13 08:16:00] - TRADE : From St. Louis Blues to Washington Capitals : Colton Parayko, Dustin Brown, Logan Stanley (P), Y:2019-RND:1-ARZ.<br />
[2019-01-13 08:16:00] - TRADE : From Washington Capitals to St. Louis Blues : Jack Johnson, Y:2020-RND:2-WSH.<br />
[2019-01-10 08:05:57] - TRADE : From San Jose Sharks to Ottawa Senators : Alec Martinez, Y:2019-RND:2-NYR.<br />
[2019-01-10 08:05:57] - TRADE : From Ottawa Senators to San Jose Sharks : Petteri Lindbohm, Y:2020-RND:1-OTT.<br />
[2019-01-10 07:53:06] - TRADE : From New Jersey Devils to Detroit Red Wings : Peter Holland, Alexander Avtsin.<br />
[2019-01-10 07:53:06] - TRADE : From Detroit Red Wings to New Jersey Devils : 1 $ (Money).<br />
[2019-01-10 07:45:46] - Cedrick Desjardins was added to Edmonton Oilers.<br />
[2019-01-09 08:05:36] - TRADE : From San Jose Sharks to Ottawa Senators : Benjamin Conz, Kyle Okposo, Max Jones (P), Y:2019-RND:2-ARZ.<br />
[2019-01-09 08:05:36] - TRADE : From Ottawa Senators to San Jose Sharks : Jonas Hiller, Austin Czarnik, Y:2019-RND:3-CLB, Y:2020-RND:2-OTT.<br />
[2019-01-06 08:49:13] - TRADE : From Buffalo Sabres to Seattle Saints : Frederik Andersen, Jacob Bernard-Docker (P), Y:2019-RND:3-LOS.<br />
[2019-01-06 08:49:13] - TRADE : From Seattle Saints to Buffalo Sabres : John Gibson, 1 000 000 $ (Salary Cap).<br />
[2019-01-04 07:57:49] - Dominic Zwerger was added to Detroit Red Wings.<br />
[2019-01-04 07:56:50] - Sven Andrighetto was added to Quebec Nordiques.<br />
[2019-01-02 08:50:44] - Reid Boucher was added to San Jose Sharks.<br />
[2019-01-01 08:17:30] - TRADE : From Arizona Coyotes to Ottawa Senators : Denis Godla, Matthew Strome (P).<br />
[2019-01-01 08:17:30] - TRADE : From Ottawa Senators to Arizona Coyotes : Connor Hellebuyck.<br />
[2019-01-01 08:16:51] - Derek Joslin was added to Ottawa Senators.<br />
[2018-12-31 14:01:51] - TRADE : From Buffalo Sabres to Ottawa Senators : Michael Sgarbossa, Victor Hedman, Jakub Nakládal.<br />
[2018-12-31 14:01:51] - TRADE : From Ottawa Senators to Buffalo Sabres : Mika Zibanejad, Jason Demers, Richard Panik, Jacob Bernard-Docker (P), Y:2019-RND:1-VAN.<br />
[2018-12-31 13:56:07] - TRADE : From New York Islanders to Ottawa Senators : James Reimer.<br />
[2018-12-31 13:56:07] - TRADE : From Ottawa Senators to New York Islanders : Jake Allen.<br />
[2018-12-30 08:00:18] - TRADE : From Seattle Saints to Ottawa Senators : Mika Zibanejad, Carl Hagelin, Justin Kloos, Y:2022-RND:1-SEA.<br />
[2018-12-30 08:00:18] - TRADE : From Ottawa Senators to Seattle Saints : Reilly Smith, Bryan Little, Mikkel Boedker, Taylor Raddysh (P), Y:2022-RND:2-OTT.<br />
[2018-12-30 07:59:02] - TRADE : From Chicago Blackhawks to Ottawa Senators : Gustav Olofsson, Martin Necas (P), Ty Smith (P), Y:2019-RND:1-CHI.<br />
[2018-12-30 07:59:02] - TRADE : From Ottawa Senators to Chicago Blackhawks : Noah Hanifin.<br />
[2018-12-29 09:31:11] - TRADE : From Chicago Blackhawks to Montreal Canadiens : Danton Heinen, Y:2019-RND:2-STL.<br />
[2018-12-29 09:31:11] - TRADE : From Montreal Canadiens to Chicago Blackhawks : Alan Quine, Logan Shaw, Martin Necas (P), Andrei Svetlakov (P), Y:2019-RND:1-MTL, Y:2019-RND:4-MIN.<br />
[2018-12-27 11:10:07] - TRADE : From Arizona Coyotes to Seattle Saints : Tyler Kelleher (P), Dante Salituro (P), Adam Marsh (P).<br />
[2018-12-27 11:10:07] - TRADE : From Seattle Saints to Arizona Coyotes : Y:2020-RND:4-ARZ.<br />
[2018-12-24 07:47:15] - TRADE : From Philadelphia Flyers to Vancouver Canucks : Zemgus Girgensons, Rasmus Ristolainen.<br />
[2018-12-24 07:47:15] - TRADE : From Vancouver Canucks to Philadelphia Flyers : Evander Kane, Marc-Andre Bourdon, Nick Shore.<br />
[2018-12-23 08:03:41] - Ahti Oksanen was added to Vancouver Canucks.<br />
[2018-12-17 08:51:07] - TRADE : From Nashville Predators to Boston Bruins : Konrad Abeltshauser.<br />
[2018-12-17 08:51:07] - TRADE : From Boston Bruins to Nashville Predators : Carter Camper, Craig Cunningham, Jakub Jerabek.<br />
[2018-12-15 08:01:19] - Mike Weber was added to Colorado Avalanche.<br />
[2018-12-14 08:03:46] - TRADE : From San Jose Sharks to New York Rangers : Gustav Forsling, Y:2019-RND:1-FLA, Y:2021-RND:3-SJS.<br />
[2018-12-14 08:03:46] - TRADE : From New York Rangers to San Jose Sharks : Josh Morrissey, Tanner Pearson, Y:2019-RND:2-NYR.<br />
[2018-12-12 08:01:47] - TRADE : From St. Louis Blues to Vancouver Canucks : Will Butcher, Marc-Andre Bourdon, Y:2019-RND:1-STL.<br />
[2018-12-12 08:01:47] - TRADE : From Vancouver Canucks to St. Louis Blues : John Klingberg, Ben Lovejoy, Y:2019-RND:3-STL.<br />
[2018-12-11 08:52:28] - TRADE : From New Jersey Devils to Seattle Saints : Artemi Panarin.<br />
[2018-12-11 08:52:28] - TRADE : From Seattle Saints to New Jersey Devils : Beau Bennett.<br />
[2018-12-11 08:33:55] - TRADE : From Anaheim Ducks to St. Louis Blues : Mitch Marner.<br />
[2018-12-11 08:33:55] - TRADE : From St. Louis Blues to Anaheim Ducks : Clayton Keller.<br />
[2018-12-10 08:17:30] - TRADE : From Carolina Hurricanes to Seattle Saints : Jonathan Audy-Marchessault.<br />
[2018-12-10 08:17:30] - TRADE : From Seattle Saints to Carolina Hurricanes : Cody Hodgson.<br />
[2018-12-10 08:17:15] - TRADE : From Carolina Hurricanes to Ottawa Senators : Reilly Smith.<br />
[2018-12-10 08:17:15] - TRADE : From Ottawa Senators to Carolina Hurricanes : Ondrej Palat.<br />
[2018-12-10 08:17:00] - TRADE : From Pittsburgh Penguins to Ottawa Senators : Jeff Carter, Y:2019-RND:3-CLB.<br />
[2018-12-10 08:17:00] - TRADE : From Ottawa Senators to Pittsburgh Penguins : T.J. Oshie, Y:2019-RND:5-OTT.<br />
[2018-12-10 08:09:30] - TRADE : From Quebec Nordiques to Nashville Predators : 4 000 000 $ (Salary Cap).<br />
[2018-12-10 08:09:30] - TRADE : From Nashville Predators to Quebec Nordiques : Allan McShane (P).<br />
[2018-12-09 07:50:27] - TRADE : From Boston Bruins to Nashville Predators : Thomas Hickey, Y:2019-RND:1-BOS.<br />
[2018-12-09 07:50:27] - TRADE : From Nashville Predators to Boston Bruins : Olli Maatta, Y:2019-RND:3-NSH.<br />
[2018-12-09 07:50:05] - TRADE : From Detroit Red Wings to Nashville Predators : Nathan MacKinnon, Kirill Kaprizov, Bode Wilde (P).<br />
[2018-12-09 07:50:05] - TRADE : From Nashville Predators to Detroit Red Wings : Patrik Laine.<br />
[2018-12-08 11:03:27] - TRADE : From Columbus Blue Jackets to Boston Bruins : Dan Ellis.<br />
[2018-12-06 08:11:20] - TRADE : From Calgary Flames to Carolina Hurricanes : Karl Alzner, Joni Ortio.<br />
[2018-12-06 08:11:20] - TRADE : From Carolina Hurricanes to Calgary Flames : Antti Niemi, Patrick Wiercioch, Y:2020-RND:3-CAR.<br />
[2018-12-05 07:56:03] - TRADE : From Calgary Flames to Columbus Blue Jackets : Jason Spezza.<br />
[2018-12-05 07:56:03] - TRADE : From Columbus Blue Jackets to Calgary Flames : Eric Staal.<br />
[2018-12-05 07:55:51] - TRADE : From Colorado Avalanche to Carolina Hurricanes : Calvin Pickard.<br />
[2018-12-05 07:55:51] - TRADE : From Carolina Hurricanes to Colorado Avalanche : Carl Gunnarsson, Marcel Noebels.<br />
[2018-12-05 07:55:33] - TRADE : From Montreal Canadiens to Anaheim Ducks : T.J. Brennan, Daniel Sprong, Sonny Milano, Y:2019-RND:2-MTL.<br />
[2018-12-05 07:55:33] - TRADE : From Anaheim Ducks to Montreal Canadiens : Mike Richards, Brandon Montour, Ryan White, 2 000 000 $ (Salary Cap).<br />
[2018-12-04 07:59:56] - TRADE : From Tampa Bay Lightning to San Jose Sharks : Drake Caggiula, Y:2019-RND:2-TBL.<br />
[2018-12-04 07:59:56] - TRADE : From San Jose Sharks to Tampa Bay Lightning : Mikael Backlund, Y:2020-RND:3-SJS.<br />
[2018-12-04 07:59:10] - TRADE : From Buffalo Sabres to Anaheim Ducks : Kyle Turris, Jordan Kyrou (P), Y:2019-RND:4-BUF.<br />
[2018-12-04 07:59:10] - TRADE : From Anaheim Ducks to Buffalo Sabres : Bobby Ryan, Mark Friedman (P), 1 500 000 $ (Salary Cap).<br />
[2018-12-02 10:35:34] - TRADE : From San Jose Sharks to Anaheim Ducks : Joe Veleno, Gabriel Beaupré, Y:2019-RND:1-SJS.<br />
[2018-12-02 10:35:34] - TRADE : From Anaheim Ducks to San Jose Sharks : Gustav Forsling, Y:2020-RND:1-ANH.<br />
[2018-12-02 10:35:01] - TRADE : From Calgary Flames to Anaheim Ducks : Frans Nielsen, Darren Dietz, Jesperi Kotkaniemi (P).<br />
[2018-12-02 10:35:01] - TRADE : From Anaheim Ducks to Calgary Flames : Evgeni Malkin, Louis Belpedio (P), Riley Barber (P), Oscar Fantenberg (P), Oskar Sundqvist (P).<br />
[2018-12-01 08:37:12] - Kieran Millan was added to Nashville Predators.<br />
[2018-12-01 08:35:58] - Andrej Hocevar was added to Winnipeg Jets.<br />
[2018-12-01 08:35:01] - Alex Stalock was added to Toronto Maple Leafs.<br />
[2018-11-30 10:27:17] - TRADE : From St. Louis Blues to New York Islanders : William Carrier, Y:2019-RND:3-FLA.<br />
[2018-11-30 10:27:17] - TRADE : From New York Islanders to St. Louis Blues : Torrey Mitchell, Y:2019-RND:2-CHI, Y:2019-RND:2-NYI.<br />
[2018-11-29 11:25:27] - TRADE : From Colorado Avalanche to Anaheim Ducks : Y:2021-RND:3-COL.<br />
[2018-11-29 11:25:27] - TRADE : From Anaheim Ducks to Colorado Avalanche : Spencer Watson (P), Kyle Rau (P), Keegan Iverson (P), Tim Heed (P), Joseph Cramarossa (P).<br />
[2018-11-29 11:24:00] - TRADE : From Florida Panthers to Anaheim Ducks : Noah Juulsen, Jiri Sekac, Paul Gaustad, Ben Harpur, Filip Chytil (P), Y:2019-RND:1-SEA.<br />
[2018-11-29 11:24:00] - TRADE : From Anaheim Ducks to Florida Panthers : Gabriel Landeskog, Aapeli Rasanen (P), Johan Gustafsson (P), Linus Lindstrom (P).<br />
[2018-11-29 11:22:49] - Alexander Sulzer was added to Florida Panthers.<br />
[2018-11-29 11:22:45] - Alex Velischek was added to Florida Panthers.<br />
[2018-11-27 13:45:00] - Sean Zimmerman has been deleted from Anaheim Ducks.<br />
[2018-11-27 13:44:43] - Ryan Walters has been deleted from Anaheim Ducks.<br />
[2018-11-27 13:44:28] - Ryan Hegarty has been deleted from Anaheim Ducks.<br />
[2018-11-27 13:43:28] - Richard Schofield has been deleted from Anaheim Ducks.<br />
[2018-11-27 13:43:14] - Radoslav Illo has been deleted from Anaheim Ducks.<br />
[2018-11-27 13:43:01] - Quentin Shore has been deleted from Anaheim Ducks.<br />
[2018-11-27 13:41:56] - Nick Pryor has been deleted from Anaheim Ducks.<br />
[2018-11-27 13:31:12] - Mat Clark has been deleted from Anaheim Ducks.<br />
[2018-11-27 13:30:42] - Mark Bell has been deleted from Anaheim Ducks.<br />
[2018-11-27 13:25:39] - Josh Brittain has been deleted from Anaheim Ducks.<br />
[2018-11-27 13:22:45] - Iiro Tarkki has been deleted from Anaheim Ducks.<br />
[2018-11-27 13:18:00] - Brett Perlini has been deleted from Anaheim Ducks.<br />
[2018-11-27 13:17:18] - Andreas Dahlstrom has been deleted from Anaheim Ducks.<br />
[2018-11-27 08:14:24] - TRADE : From Pittsburgh Penguins to Columbus Blue Jackets : Anders Nilsson, Nikita Nesterov.<br />
[2018-11-27 08:14:24] - TRADE : From Columbus Blue Jackets to Pittsburgh Penguins : Y:2019-RND:3-CLB.<br />
[2018-11-27 08:14:03] - TRADE : From San Jose Sharks to Ottawa Senators : Stephon Williams.<br />
[2018-11-27 08:14:03] - TRADE : From Ottawa Senators to San Jose Sharks : Jordan Nolan.<br />
[2018-11-26 08:03:06] - TRADE : From San Jose Sharks to Arizona Coyotes : Y:2020-RND:5-SJS.<br />
[2018-11-26 08:03:06] - TRADE : From Arizona Coyotes to San Jose Sharks : 250 000 $ (Salary Cap).<br />
[2018-11-26 08:02:19] - Sergei Kostitsyn was added to Buffalo Sabres.<br />
[2018-11-26 08:00:18] - Michael Leighton was added to Edmonton Oilers.<br />
[2018-11-26 07:59:59] - Dan Ellis was added to Columbus Blue Jackets.<br />
[2018-11-22 07:58:46] - Brooks Orpik was added to Montreal Canadiens.<br />
[2018-11-22 07:51:15] - Joe Finley was added to Toronto Maple Leafs.<br />
[2018-11-21 08:00:16] - Mark Borowiecki was added to Arizona Coyotes.<br />
[2018-11-19 07:52:57] - TRADE : From Florida Panthers to Ottawa Senators : Tyler Toffoli.<br />
[2018-11-19 07:52:57] - TRADE : From Ottawa Senators to Florida Panthers : Dylan Sikura (P).<br />
[2018-11-19 07:52:42] - TRADE : From Philadelphia Flyers to Ottawa Senators : Lars Eller, Y:2019-RND:5-DET.<br />
[2018-11-19 07:52:42] - TRADE : From Ottawa Senators to Philadelphia Flyers : William Karlsson.<br />
[2018-11-19 07:52:08] - TRADE : From St. Louis Blues to Tampa Bay Lightning : Jonathan Quick.<br />
[2018-11-19 07:52:08] - TRADE : From Tampa Bay Lightning to St. Louis Blues : Tuukka Rask, Y:2019-RND:3-FLA.<br />
[2018-11-19 07:51:32] - TRADE : From Vancouver Canucks to Ottawa Senators : Jason Demers, $3,000,000 (Salary Cap).<br />
[2018-11-19 07:51:32] - TRADE : From Ottawa Senators to Vancouver Canucks : Stefan Matteau, Y:2019-RND:3-STL.<br />
[2018-11-18 07:46:12] - TRADE : From Quebec Nordiques to St. Louis Blues : Vladimir Tarasenko, Y:2019-RND:4-QUE.<br />
[2018-11-18 07:46:12] - TRADE : From St. Louis Blues to Quebec Nordiques : Jake Guentzel, Evgeny Grachev, Maxime Comtois (P), Y:2019-RND:2-DET.<br />
[2018-11-18 07:45:38] - TRADE : From San Jose Sharks to Buffalo Sabres : Alexander Radulov, Y:2019-RND:4-SJS.<br />
[2018-11-18 07:45:38] - TRADE : From Buffalo Sabres to San Jose Sharks : Kyle Okposo, $4,000,000 (Money), Y:2020-RND:2-BUF.<br />
[2018-11-17 07:59:57] - TRADE : From San Jose Sharks to Montreal Canadiens : Nathan Walker.<br />
[2018-11-17 07:59:57] - TRADE : From Montreal Canadiens to San Jose Sharks : Frederic St-Denis, Gabriel Beaupré.<br />
[2018-11-17 07:59:33] - David Legwand was added to Toronto Maple Leafs.<br />
[2018-11-17 07:01:32] - TRADE : From New Jersey Devils to Montreal Canadiens : Andreas Martinsen.<br />
[2018-11-17 07:01:32] - TRADE : From Montreal Canadiens to New Jersey Devils : $1 (Money).<br />
[2018-11-15 08:59:22] - TRADE : From Detroit Red Wings to Florida Panthers : Alexander Burmistrov.<br />
[2018-11-15 08:59:22] - TRADE : From Florida Panthers to Detroit Red Wings : Vyacheslav Voynov.<br />
[2018-11-15 08:41:01] - Vladimir Sobotka was added to Pittsburgh Penguins.<br />
[2018-11-13 08:02:10] - TRADE : From Ottawa Senators to Edmonton Oilers : Alex Lintuniemi.<br />
[2018-11-13 08:02:10] - TRADE : From Edmonton Oilers to Ottawa Senators : Zachary Stepan (P).<br />
[2018-11-11 08:36:28] - TRADE : From Chicago Blackhawks to New York Islanders : Marcus Kruger, Y:2019-RND:2-CHI.<br />
[2018-11-11 08:36:28] - TRADE : From New York Islanders to Chicago Blackhawks : Brendan Leipsic.<br />
[2018-11-11 08:36:12] - TRADE : From Colorado Avalanche to New York Islanders : Y:2020-RND:3-COL.<br />
[2018-11-11 08:36:12] - TRADE : From New York Islanders to Colorado Avalanche : Sergey Tolchinsky, Gavin Bayreuther.<br />
[2018-11-11 08:35:15] - Mike Hoffman was added to Chicago Blackhawks.<br />
[2018-11-09 08:07:13] - Mike Hoffman was added to Pittsburgh Penguins.<br />
[2018-11-09 08:07:08] - Gustav Possler was added to Ottawa Senators.<br />
[2018-11-09 08:05:12] - TRADE : From Vancouver Canucks to Tampa Bay Lightning : Austin Wagner.<br />
[2018-11-09 08:05:12] - TRADE : From Tampa Bay Lightning to Vancouver Canucks : Rocco Grimaldi.<br />
[2018-11-08 13:53:10] - TRADE : From Montreal Canadiens to New Jersey Devils : Andrej Sekera, Brendan Mikkelson, Mark Fayne, Brooks Laich, Y:2019-RND:4-BOS.<br />
[2018-11-08 13:53:10] - TRADE : From New Jersey Devils to Montreal Canadiens : $1 (Money).<br />
[2018-11-08 08:01:32] - TRADE : From Calgary Flames to Ottawa Senators : Ondrej Palat, Jared Cowen, Cam Dineen (P).<br />
[2018-11-08 08:01:32] - TRADE : From Ottawa Senators to Calgary Flames : Jason Spezza, Damon Severson.<br />
[2018-11-06 08:16:42] - TRADE : From Seattle Saints to Ottawa Senators : Connor Rankin, Pavel Padakin.<br />
[2018-11-06 08:16:42] - TRADE : From Ottawa Senators to Seattle Saints : Beau Bennett.<br />
[2018-11-06 08:15:52] - Jonathon Merrill was added to Anaheim Ducks.<br />
[2018-11-03 07:47:02] - David Rundblad was added to Philadelphia Flyers.<br />
[2018-11-03 07:44:52] - Aaron Gagnon was added to Anaheim Ducks.<br />
[2018-11-01 08:24:29] - TRADE : From Ottawa Senators to Tampa Bay Lightning : Zach Hyman, David Desharnais, Y:2019-RND:3-FLA.<br />
[2018-11-01 08:24:29] - TRADE : From Tampa Bay Lightning to Ottawa Senators : Brandon McMillan, Reid Boucher.<br />
[2018-11-01 08:23:30] - Ryan Dzingel was added to San Jose Sharks.<br />
[2018-11-01 08:23:30] - Colin Miller was added to Philadelphia Flyers.<br />
[2018-10-31 11:46:59] - Pavel Valentenko was added to Toronto Maple Leafs.<br />
[2018-10-30 11:56:01] - TRADE : From Ottawa Senators to Florida Panthers : Brent Burns.<br />
[2018-10-30 11:56:01] - TRADE : From Florida Panthers to Ottawa Senators : John Moore, Taylor Raddysh (P), Y:2019-RND:3-FLA.<br />
[2018-10-30 09:21:15] - TRADE : From Ottawa Senators to Detroit Red Wings : Darren Helm, Y:2019-RND:4-OTT.<br />
[2018-10-30 09:21:15] - TRADE : From Detroit Red Wings to Ottawa Senators : Jacob Bernard-Docker (P).<br />
[2018-10-30 07:59:14] - Colin Miller was added to Arizona Coyotes.<br />
[2018-10-30 07:59:14] - Jakob Silfverberg was added to Carolina Hurricanes.<br />
[2018-10-30 07:59:14] - Ryan Dzingel was added to Columbus Blue Jackets.<br />
[2018-10-29 08:22:50] - TRADE : From Carolina Hurricanes to Ottawa Senators : Matt Schmalz, Filip Berglund.<br />
[2018-10-29 08:22:50] - TRADE : From Ottawa Senators to Carolina Hurricanes : Travis Zajac.<br />
[2018-10-29 08:01:53] - TRADE : From Seattle Saints to Arizona Coyotes : Jonathan Bernier.<br />
[2018-10-29 08:01:53] - TRADE : From Arizona Coyotes to Seattle Saints : Y:2020-RND:4-ARZ.<br />
[2018-10-28 04:25:25] - TRADE : From Detroit Red Wings to Minnesota Wild : Christophe Lalancette.<br />
[2018-10-27 11:13:28] - TRADE : From Chicago Blackhawks to Philadelphia Flyers : Maxim Shalunov.<br />
[2018-10-27 11:11:07] - TRADE : From Florida Panthers to Detroit Red Wings : Joe Morrow.<br />
[2018-10-27 11:09:39] - TRADE : From Minnesota Wild to Detroit Red Wings : Christophe Lalancette.<br />
[2018-10-27 11:04:41] - TRADE : From Edmonton Oilers to New York Islanders : David Musil.<br />
[2018-10-27 11:03:27] - TRADE : From Florida Panthers to Seattle Saints : Justin Kloos.<br />
[2018-10-27 11:00:47] - Connor Hellebuyck was added to Ottawa Senators.<br />
[2018-10-27 10:58:58] - TRADE : From Tampa Bay Lightning to Pittsburgh Penguins : Nikita Nesterov.<br />
[2018-10-24 10:14:02] - TRADE : From Philadelphia Flyers to Calgary Flames : Y:2019-RND:5-CAR.<br />
[2018-10-24 10:14:02] - TRADE : From Calgary Flames to Philadelphia Flyers : $1,000,000 (Salary Cap).<br />
[2018-10-04 10:25:27] - Lawrence Pilut has been deleted from Washington Capitals.<br />
[2018-10-04 10:25:23] - Lawrence Pilut has been added to Washington Capitals.<br />
[2018-10-01 08:13:19] - TRADE : From Buffalo Sabres to Carolina Hurricanes : Jonathan Audy-Marchessault, Quinton Howden, Alexei Bereglazov.<br />
[2018-10-01 08:13:19] - TRADE : From Carolina Hurricanes to Buffalo Sabres : Kyle Turris, Michael Sgarbossa, Elvis Merzlikins.<br />
[2018-10-01 08:12:46] - TRADE : From Seattle Saints to Carolina Hurricanes : Nick Petrecki, Michael Sgarbossa.<br />
[2018-10-01 08:12:46] - TRADE : From Carolina Hurricanes to Seattle Saints : Raman Hrabarenka, Anders Lee.<br />
[2018-10-01 08:12:29] - TRADE : From Washington Capitals to Carolina Hurricanes : Cal Clutterbuck.<br />
[2018-10-01 08:12:29] - TRADE : From Carolina Hurricanes to Washington Capitals : Jason Zucker.<br />
[2018-09-29 09:50:34] - TRADE : From Carolina Hurricanes to Florida Panthers : Jiri Sekac.<br />
[2018-09-29 09:50:34] - TRADE : From Florida Panthers to Carolina Hurricanes : Brandon Pirri.<br />
[2018-09-28 08:09:03] - Andrew Bodnarchuk was added to Washington Capitals.<br />
[2018-09-26 08:00:18] - Ziga Pance was added to Minnesota Wild.<br />
[2018-09-26 08:00:10] - Derek Dorsett was added to Minnesota Wild.<br />
[2018-09-26 08:00:02] - Cody Almond was added to Minnesota Wild.<br />
[2018-09-26 07:59:53] - Reto Suri was added to Minnesota Wild.<br />
[2018-09-26 07:59:37] - TRADE : From Philadelphia Flyers to Tampa Bay Lightning : Konstantin Barulin, Cayden Primeau (P), Y:2019-RND:3-TBL.<br />
[2018-09-26 07:59:37] - TRADE : From Tampa Bay Lightning to Philadelphia Flyers : Robin Lehner.<br />
[2018-09-22 07:55:16] - TRADE : From Carolina Hurricanes to Buffalo Sabres : Eric Gelinas.<br />
[2018-09-22 07:55:16] - TRADE : From Buffalo Sabres to Carolina Hurricanes : Josh Jooris.<br />
[2018-09-20 07:53:42] - TRADE : From Carolina Hurricanes to Florida Panthers : Colby Robak.<br />
[2018-09-20 07:53:42] - TRADE : From Florida Panthers to Carolina Hurricanes : Michael Vandas.<br />
[2018-09-16 07:51:39] - James Sheppard was added to Buffalo Sabres.<br />
[2018-09-16 07:51:34] - Anders Nilsson was added to Pittsburgh Penguins.<br />
[2018-09-13 08:06:16] - TRADE : From Pittsburgh Penguins to Ottawa Senators : Dany Heatley, Dylan Sikura (P), Y:2020-RND:3-PIT.<br />
[2018-09-13 08:06:16] - TRADE : From Ottawa Senators to Pittsburgh Penguins : Tom Wilson.<br />
[2018-09-12 12:58:54] - Josh Gorges was added to Detroit Red Wings.<br />
[2018-09-12 12:58:45] - Chris Wideman was added to Detroit Red Wings.<br />
[2018-09-12 12:58:34] - Chad Billins was added to Detroit Red Wings.<br />
[2018-09-12 12:58:24] - Brett MacLean was added to Detroit Red Wings.<br />
[2018-09-12 12:58:13] - Brent Raedeke was added to Detroit Red Wings.<br />
[2018-09-12 09:46:50] - TRADE : From Montreal Canadiens to Dallas Stars : Anthony Richard (P), Y:2020-RND:3-MTL.<br />
[2018-09-12 09:46:50] - TRADE : From Dallas Stars to Montreal Canadiens : Andreas Johnsson, Mads Eller.<br />
[2018-09-11 08:15:01] - TRADE : From Florida Panthers to Columbus Blue Jackets : David Quenneville.<br />
[2018-09-11 08:15:01] - TRADE : From Columbus Blue Jackets to Florida Panthers : Tyler Toffoli.<br />
[2018-09-10 15:46:46] - Marc-Andre Gragnani was added to Carolina Hurricanes.<br />
[2018-09-10 11:52:34] - Wacey Hamilton has been deleted from Ottawa Senators.<br />
[2018-09-10 11:52:30] - Nick Baptiste was added to Ottawa Senators.<br />
[2018-09-10 11:52:29] - Mason Geertsen was added to Ottawa Senators.<br />
[2018-09-10 11:52:25] - Jordan Fransoo has been deleted from Ottawa Senators.<br />
[2018-09-10 11:52:24] - Ilya Zubov has been deleted from Ottawa Senators.<br />
[2018-09-10 11:52:22] - Geoff Kinrade has been deleted from Ottawa Senators.<br />
[2018-09-10 11:52:20] - Eric Locke was added to Ottawa Senators.<br />
[2018-09-10 11:52:18] - Darren Kramer has been deleted from Ottawa Senators.<br />
[2018-09-10 11:52:15] - Bryce Aneloski has been deleted from Ottawa Senators.<br />
[2018-09-10 11:52:12] - Andre Petersson was added to Ottawa Senators.<br />
[2018-09-10 11:52:10] - Alex Lintuniemi was added to Ottawa Senators.<br />
[2018-09-10 08:34:09] - Alex Auld was added to Ottawa Senators.<br />
[2018-09-10 08:19:09] - Tyler Bertuzzi has been added to New York Rangers.<br />
[2018-09-10 08:01:17] - Philippe Cornet was added to Nashville Predators.<br />
[2018-09-10 08:00:59] - Jonas Gustavsson was added to Nashville Predators.<br />
[2018-09-10 08:00:57] - Jiri Hudler was added to Nashville Predators.<br />
[2018-09-10 08:00:53] - Guillaume Latendresse was added to Carolina Hurricanes.<br />
[2018-09-10 08:00:50] - Blake Comeau was added to Nashville Predators.<br />
[2018-09-07 07:58:33] - Brandon Dubinsky was added to St. Louis Blues.<br />
[2018-09-07 07:58:30] - Justin Braun was added to Pittsburgh Penguins.<br />
[2018-09-07 07:54:56] - TRADE : From Philadelphia Flyers to Colorado Avalanche : Ty Wishart, Ben Maxwell, Y:2019-RND:4-CAR.<br />
[2018-09-07 07:54:56] - TRADE : From Colorado Avalanche to Philadelphia Flyers : 1 $ (Money).<br />
[2018-09-06 09:58:21] - TRADE : From Winnipeg Jets to Detroit Red Wings : Jaccob Slavin.<br />
[2018-09-06 09:58:21] - TRADE : From Detroit Red Wings to Winnipeg Jets : Magnus Nygren, Nolan Patrick (P), Y:2019-RND:3-PIT.<br />
[2018-09-06 08:45:22] - TRADE : From Philadelphia Flyers to Carolina Hurricanes : Keaton Ellerby.<br />
[2018-09-06 08:45:22] - TRADE : From Carolina Hurricanes to Philadelphia Flyers : Y:2019-RND:4-CAR, Y:2019-RND:5-CAR.<br />
[2018-09-04 08:40:39] - Shawn Matthias was added to Pittsburgh Penguins.<br />
[2018-09-04 08:40:34] - Konstantin Barulin was added to Philadelphia Flyers.<br />
[2018-09-04 08:40:17] - Keaton Ellerby was added to Philadelphia Flyers.<br />
[2018-09-04 08:40:01] - Johnny Boychuk was added to St. Louis Blues.<br />
[2018-08-23 16:47:25] - TRADE : From Arizona Coyotes to Carolina Hurricanes : Colby Robak.<br />
[2018-08-23 16:47:25] - TRADE : From Carolina Hurricanes to Arizona Coyotes : Ronalds Kenins.<br />
[2018-08-22 11:09:52] - Mark Fayne was added to Montreal Canadiens.<br />
[2018-08-22 10:26:42] - Drew Stafford was added to St. Louis Blues.<br />
[2018-08-22 09:01:00] - Ryan Callahan was added to Edmonton Oilers.<br />
[2018-08-22 08:59:12] - Mike Green was added to Tampa Bay Lightning.<br />
[2018-08-22 08:36:22] - Troy Brouwer was added to Montreal Canadiens.<br />
[2018-08-22 08:35:38] - Clarke MacArthur was added to Montreal Canadiens.<br />
[2018-08-22 08:29:34] - Brooks Laich was added to Montreal Canadiens.<br />
[2018-08-22 08:28:20] - Stefan Chaput was added to Tampa Bay Lightning.<br />
[2018-08-22 08:28:12] - Peter Regin was added to St. Louis Blues.<br />
[2018-08-22 08:28:07] - Milan Michalek was added to Pittsburgh Penguins.<br />
[2018-08-22 08:27:58] - Matt Read was added to Philadelphia Flyers.<br />
[2018-08-22 08:27:21] - Matt Martin was added to Pittsburgh Penguins.<br />
[2018-08-22 08:26:43] - Marian Gaborik was added to Carolina Hurricanes.<br />
[2018-08-22 08:26:31] - Ladislav Smid was added to Carolina Hurricanes.<br />
[2018-08-22 08:24:20] - Fedor Tyutin was added to Carolina Hurricanes.<br />
[2018-08-22 08:24:04] - Chad Ruhwedel was added to Pittsburgh Penguins.<br />
[2018-08-22 08:22:39] - Brian Sutherby was added to Tampa Bay Lightning.<br />
[2018-08-22 08:22:34] - Brian Campbell was added to Pittsburgh Penguins.<br />
[2018-08-22 08:22:29] - Ben Maxwell was added to Philadelphia Flyers.<br />
[2018-08-21 14:10:29] - Lawrence Pilut has been added to Washington Capitals.<br />
[2018-08-19 18:31:48] - TRADE : From Vancouver Canucks to Toronto Maple Leafs : Y:2020-RND:2-VAN.<br />
[2018-08-19 18:31:48] - TRADE : From Toronto Maple Leafs to Vancouver Canucks : 2 000 000 $ (Salary Cap), Y:2019-RND:4-TOR.<br />
[2018-08-19 14:06:53] - TRADE : From Montreal Canadiens to Carolina Hurricanes : Raman Hrabarenka.<br />
[2018-08-19 14:06:53] - TRADE : From Carolina Hurricanes to Montreal Canadiens : Greg McKegg.<br />
[2018-08-19 09:05:50] - TRADE : From Boston Bruins to Montreal Canadiens : Y:2019-RND:4-BOS.<br />
[2018-08-19 09:05:50] - TRADE : From Montreal Canadiens to Boston Bruins : Andrej Sustr.<br />
[2018-08-18 12:39:02] - Oliver Wahlstrom was added to Winnipeg Jets.<br />
[2018-08-18 12:38:55] - Filip Zadina was added to Winnipeg Jets.<br />
[2018-08-18 12:38:48] - Brady Tkachuk was added to Winnipeg Jets.<br />
[2018-08-18 12:15:02] - TRADE : From Carolina Hurricanes to Detroit Red Wings : Magnus Nygren, Y:2019-RND:1-CAR, Y:2019-RND:3-PIT.<br />
[2018-08-18 12:15:02] - TRADE : From Detroit Red Wings to Carolina Hurricanes : Marc-Edouard Vlasic.<br />
[2018-08-17 11:21:37] - TRADE : From St. Louis Blues to Anaheim Ducks : Jesse Puljujarvi.<br />
[2018-08-17 11:21:37] - TRADE : From Anaheim Ducks to St. Louis Blues : Colton Parayko, Y:2019-RND:1-ANH.<br />
[2018-08-17 09:12:13] - Craig Anderson was added to Arizona Coyotes.<br />
[2018-08-17 09:07:10] - Mike Smith was added to San Jose Sharks.<br />
[2018-08-17 09:05:38] - Grant Clitsome was added to Philadelphia Flyers.<br />
[2018-08-17 08:47:56] - Dave Bolland was added to Detroit Red Wings.<br />
[2018-08-17 08:03:26] - Brian Elliott was added to Philadelphia Flyers.<br />
[2018-08-17 08:00:20] - Anders Lee was added to Carolina Hurricanes.<br />
[2018-08-17 07:53:31] - Mathieu Perreault was added to Vancouver Canucks.<br />
[2018-08-17 07:53:23] - Martin Erat was added to Pittsburgh Penguins.<br />
[2018-08-17 07:52:42] - Liam Reddox was added to St. Louis Blues.<br />
[2018-08-17 07:51:50] - Jason Pominville was added to Tampa Bay Lightning.<br />
[2018-08-17 07:51:30] - Erik Condra was added to Pittsburgh Penguins.<br />
[2018-08-17 07:51:14] - Dustin Boyd was added to St. Louis Blues.<br />
[2018-08-17 07:50:59] - David Booth was added to St. Louis Blues.<br />
[2018-08-17 07:50:30] - Brian Gionta was added to Pittsburgh Penguins.<br />
[2018-08-17 07:50:02] - Brad Richardson was added to Pittsburgh Penguins.<br />
[2018-08-17 07:49:59] - Antti Pihlstrom was added to Pittsburgh Penguins.<br />
[2018-08-17 07:49:27] - Alexander Frolov was added to Pittsburgh Penguins.<br />
[2018-08-17 07:49:24] - Ales Hemsky was added to Pittsburgh Penguins.<br />
[2018-08-17 07:49:20] - Adam Hall was added to Pittsburgh Penguins.<br />
[2018-08-16 16:18:14] - Alex Dubeau was added to Detroit Red Wings.<br />
[2018-08-16 15:16:45] - Vince Dunn was added to Anaheim Ducks.<br />
[2018-08-16 15:16:43] - Tyler Parsons was added to Anaheim Ducks.<br />
[2018-08-16 15:16:41] - Troy Terry was added to Anaheim Ducks.<br />
[2018-08-16 15:16:37] - Sami Niku was added to Anaheim Ducks.<br />
[2018-08-16 15:16:29] - Nils Lundkvist was added to Anaheim Ducks.<br />
[2018-08-16 15:16:21] - Lucas Wallmark was added to Anaheim Ducks.<br />
[2018-08-16 15:16:14] - Jesse Ylonen was added to Anaheim Ducks.<br />
[2018-08-16 15:16:11] - Jacob Olofsson was added to Anaheim Ducks.<br />
[2018-08-16 15:16:05] - Colton Point was added to Anaheim Ducks.<br />
[2018-08-16 13:40:53] - TRADE : From Vancouver Canucks to Philadelphia Flyers : Y:2019-RND:3-VAN, Y:2019-RND:4-VAN.<br />
[2018-08-16 13:40:53] - TRADE : From Philadelphia Flyers to Vancouver Canucks : 2 000 000 $ (Salary Cap).<br />
[2018-08-16 13:20:12] - Trevor Smith was added to Toronto Maple Leafs.<br />
[2018-08-16 13:20:08] - Richard Bachman was added to St. Louis Blues.<br />
[2018-08-16 13:20:03] - Mike Ribeiro was added to Pittsburgh Penguins.<br />
[2018-08-16 13:19:57] - Mattias Ritola was added to St. Louis Blues.<br />
[2018-08-16 13:19:52] - Matthew Lombardi was added to Pittsburgh Penguins.<br />
[2018-08-16 13:19:47] - Lennart Petrell was added to Toronto Maple Leafs.<br />
[2018-08-16 13:19:43] - Kevin Dallman was added to St. Louis Blues.<br />
[2018-08-16 13:19:37] - Jarret Stoll was added to St. Louis Blues.<br />
[2018-08-16 13:19:30] - David Jones was added to Pittsburgh Penguins.<br />
[2018-08-16 13:19:24] - Brandon Burlon was added to Tampa Bay Lightning.<br />
[2018-08-16 13:19:11] - Adam Burish was added to Tampa Bay Lightning.<br />
[2018-08-16 13:19:02] - Aaron Palushaj was added to Tampa Bay Lightning.<br />
[2018-08-16 13:00:36] - TRADE : From Anaheim Ducks to Boston Bruins : Y:2019-RND:2-ANH.<br />
[2018-08-16 13:00:36] - TRADE : From Boston Bruins to Anaheim Ducks : 7 000 000 $ (Salary Cap).<br />
[2018-08-16 10:05:43] - Austin Wagner was added to Vancouver Canucks.<br />
[2018-08-16 09:58:49] - Thomas Chabot was added to Los Angeles Kings.<br />
[2018-08-16 09:58:45] - Ryan Segalla was added to Los Angeles Kings.<br />
[2018-08-16 09:58:43] - Ryan Rupert was added to Los Angeles Kings.<br />
[2018-08-16 09:58:32] - Joel Lowry was added to Los Angeles Kings.<br />
[2018-08-16 09:58:29] - Jeff Taylor was added to Los Angeles Kings.<br />
[2018-08-16 09:58:24] - Anthony Cirelli was added to Los Angeles Kings.<br />
[2018-08-16 09:58:21] - Anders Bjork was added to Los Angeles Kings.<br />
[2018-08-16 09:58:18] - Adin Hill was added to Los Angeles Kings.<br />
[2018-08-15 16:50:40] - Tobias Lindberg was added to Dallas Stars.<br />
[2018-08-15 16:50:36] - Parker Wotherspoon was added to Dallas Stars.<br />
[2018-08-15 16:50:34] - Nick Suzuki was added to Dallas Stars.<br />
[2018-08-15 16:50:29] - Kale Clague was added to Dallas Stars.<br />
[2018-08-15 16:50:25] - Isac Lundestrom was added to Dallas Stars.<br />
[2018-08-15 16:50:22] - Givani Smith was added to Dallas Stars.<br />
[2018-08-15 16:50:20] - Evan Fitzpatrick was added to Dallas Stars.<br />
[2018-08-15 16:50:17] - Alexander Nylander was added to Dallas Stars.<br />
[2018-08-15 13:05:56] - Nikita Popugaev was added to Philadelphia Flyers.<br />
[2018-08-15 13:05:52] - Markus Niemelainen was added to Philadelphia Flyers.<br />
[2018-08-15 12:51:14] - Tyler Brown has been deleted from Philadelphia Flyers.<br />
[2018-08-15 12:51:12] - Shane Harper has been deleted from Philadelphia Flyers.<br />
[2018-08-15 12:51:07] - Petr Placek has been deleted from Philadelphia Flyers.<br />
[2018-08-15 12:51:04] - Paul Thompson has been deleted from Philadelphia Flyers.<br />
[2018-08-15 12:51:01] - Nick Luukko has been deleted from Philadelphia Flyers.<br />
[2018-08-15 12:50:55] - Mike Testwuide has been deleted from Philadelphia Flyers.<br />
[2018-08-15 12:50:52] - Jon Kalinski has been deleted from Philadelphia Flyers.<br />
[2018-08-15 12:50:48] - Ethan Werek has been deleted from Philadelphia Flyers.<br />
[2018-08-15 12:50:44] - Denis Bodrov has been deleted from Philadelphia Flyers.<br />
[2018-08-15 12:50:41] - Andrew Rowe has been deleted from Philadelphia Flyers.<br />
[2018-08-15 12:50:38] - Andrei Popov has been deleted from Philadelphia Flyers.<br />
[2018-08-15 11:14:49] - John Marino was added to Minnesota Wild.<br />
[2018-08-15 11:14:33] - Cale Fleury was added to Minnesota Wild.<br />
[2018-08-14 20:04:31] - Marcus Karlberg was added to Columbus Blue Jackets.<br />
[2018-08-14 20:04:28] - Josh Currie was added to Columbus Blue Jackets.<br />
[2018-08-14 20:04:25] - Brendan Guhle was added to Columbus Blue Jackets.<br />
[2018-08-14 20:04:24] - Brandon Hickey was added to Columbus Blue Jackets.<br />
[2018-08-14 20:04:22] - Blake Siebenaler was added to Columbus Blue Jackets.<br />
[2018-08-14 20:04:19] - Anton Forsberg was added to Columbus Blue Jackets.<br />
[2018-08-14 20:04:17] - Anton Blidh was added to Columbus Blue Jackets.<br />
[2018-08-14 20:04:15] - Adam Ginning was added to Columbus Blue Jackets.<br />
[2018-08-09 15:20:27] - Nikolai Zherdev was added to Chicago Blackhawks.<br />
[2018-08-09 14:23:18] - Teemu Eronen was added to Philadelphia Flyers.<br />
[2018-08-09 14:22:05] - Jonathan Bernier was added to Seattle Saints.<br />
[2018-08-09 14:01:49] - Andrew Hammond was added to Colorado Avalanche.<br />
[2018-08-09 13:56:58] - Tomas Vincour was added to Detroit Red Wings.<br />
[2018-08-09 13:56:09] - Michael Raffl was added to Vancouver Canucks.<br />
[2018-08-09 13:55:57] - Mats Zuccarello was added to Vancouver Canucks.<br />
[2018-08-09 13:55:36] - Joffrey Lupul was added to Vancouver Canucks.<br />
[2018-08-09 13:55:07] - Jay Beagle was added to Minnesota Wild.<br />
[2018-08-09 13:54:42] - Dany Heatley was added to Pittsburgh Penguins.<br />
[2018-08-09 13:54:19] - Colin Greening was added to Pittsburgh Penguins.<br />
[2018-08-09 13:54:01] - Anton Stralman was added to Pittsburgh Penguins.<br />
[2018-08-09 13:53:38] - Christopher Higgins was added to Quebec Nordiques.<br />
[2018-08-09 13:53:02] - Chris Stewart was added to Edmonton Oilers.<br />
[2018-08-09 13:52:46] - Alexandre Picard was added to Quebec Nordiques.<br />
[2018-08-09 13:49:24] - Tuomo Ruutu was added to St. Louis Blues.<br />
[2018-08-09 13:48:24] - Joe Thornton was added to St. Louis Blues.<br />
[2018-08-09 13:47:41] - Alex Goligoski was added to St. Louis Blues.<br />
[2018-08-09 13:44:46] - Steve Mason was added to Toronto Maple Leafs.<br />
[2018-08-09 08:21:55] - Vadim Shipachev was added to New Jersey Devils.<br />
[2018-08-09 08:21:50] - Taylor Chorney was added to Philadelphia Flyers.<br />
[2018-08-09 08:21:43] - Philip McRae was added to Seattle Saints.<br />
[2018-08-09 08:21:38] - Petrus Palmu was added to Toronto Maple Leafs.<br />
[2018-08-09 08:21:31] - Peter Delmas was added to Colorado Avalanche.<br />
[2018-08-09 08:21:26] - Pavel Francouz was added to Washington Capitals.<br />
[2018-08-09 08:21:22] - Nate Thompson was added to New York Islanders.<br />
[2018-08-09 08:21:06] - Kirill Petrov was added to Seattle Saints.<br />
[2018-08-09 08:21:00] - Justin Fontaine was added to New Jersey Devils.<br />
[2018-08-09 08:20:55] - Jussi Jokinen was added to Minnesota Wild.<br />
[2018-08-09 08:20:45] - Jake Muzzin was added to Quebec Nordiques.<br />
[2018-08-09 08:20:40] - J.T. Brown was added to Quebec Nordiques.<br />
[2018-08-09 08:20:35] - Greg Pateryn was added to Philadelphia Flyers.<br />
[2018-08-09 08:20:29] - Derek Roy was added to Montreal Canadiens.<br />
[2018-08-09 08:20:22] - Carl Gunnarsson was added to Carolina Hurricanes.<br />
[2018-08-09 08:20:16] - Brenden Morrow was added to New Jersey Devils.<br />
[2018-08-09 08:20:11] - Brandon Kozun was added to Seattle Saints.<br />
[2018-08-09 08:20:06] - Brad Hunt was added to Vancouver Canucks.<br />
[2018-08-09 08:20:00] - Ben Hanowski was added to Quebec Nordiques.<br />
[2018-08-09 08:19:53] - Barret Jackman was added to Carolina Hurricanes.<br />
[2018-08-09 08:19:47] - Anton Volchenkov was added to New York Islanders.<br />
[2018-08-09 08:19:39] - Alexis Loiseau was added to Philadelphia Flyers.<br />
[2018-08-09 08:19:28] - Alex Chiasson was added to Seattle Saints.<br />
[2018-08-08 13:13:18] - TRADE : From Detroit Red Wings to Columbus Blue Jackets : Drew Shore.<br />
[2018-08-08 13:13:05] - Drew Shore was added to Detroit Red Wings.<br />
[2018-08-08 08:10:33] - Roman Horak was added to Minnesota Wild.<br />
[2018-08-07 21:11:39] - TRADE : From Colorado Avalanche to Los Angeles Kings : Y:2019-RND:3-COL.<br />
[2018-08-07 21:11:39] - TRADE : From Los Angeles Kings to Colorado Avalanche : Martin Jones.<br />
[2018-08-07 13:15:09] - Christoph Bertschy was added to Colorado Avalanche.<br />
[2018-08-07 13:07:21] - Zach Cohen has been deleted from Colorado Avalanche.<br />
[2018-08-07 13:07:18] - Mike Carman has been deleted from Colorado Avalanche.<br />
[2018-08-07 13:07:14] - Kent Patterson has been deleted from Colorado Avalanche.<br />
[2018-08-07 13:07:11] - Jake Newton has been deleted from Colorado Avalanche.<br />
[2018-08-07 11:52:30] - Gustav Olofsson was added to Chicago Blackhawks.<br />
[2018-08-07 11:52:27] - Antti Suomela was added to Chicago Blackhawks.<br />
[2018-08-07 11:35:17] - Robin Salo was added to Toronto Maple Leafs.<br />
[2018-08-07 11:35:12] - Kasperi Kapanen was added to Toronto Maple Leafs.<br />
[2018-08-07 11:35:10] - Justin Kirkland was added to Toronto Maple Leafs.<br />
[2018-08-07 11:35:07] - Ilya Lyubushkin was added to Toronto Maple Leafs.<br />
[2018-08-07 11:35:04] - Andrew Crescenzi was added to Toronto Maple Leafs.<br />
[2018-08-07 10:45:16] - Rasmus Dahlin was added to Edmonton Oilers.<br />
[2018-08-07 10:45:11] - Michael McLeod was added to Edmonton Oilers.<br />
[2018-08-07 10:45:08] - Matthew Spencer was added to Edmonton Oilers.<br />
[2018-08-07 10:45:02] - Colton White was added to Edmonton Oilers.<br />
[2018-08-07 10:44:59] - Beau Starrett was added to Edmonton Oilers.<br />
[2018-08-07 10:24:25] - Simon Danis-Pepin has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:24:23] - Shawn Lalonde has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:24:20] - Rob Flick has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:24:19] - Raphael Bussières has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:24:16] - Paul Phillips has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:24:12] - Mac Carruth has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:24:10] - Ludvig Rensfeldt has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:24:08] - Klas Dahlbeck has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:24:05] - Kent Simpson has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:24:02] - Johan Mattsson has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:23:59] - Joe Lavin has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:23:55] - Connor Chatham has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:23:53] - Braden Birch has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:23:48] - Ben Duffy has been deleted from Chicago Blackhawks.<br />
[2018-08-07 10:20:26] - Vitali Abramov was added to Tampa Bay Lightning.<br />
[2018-08-07 10:20:19] - Tucker Poolman was added to Tampa Bay Lightning.<br />
[2018-08-07 10:20:14] - Owen Tippett was added to Tampa Bay Lightning.<br />
[2018-08-07 10:20:11] - Nicolas Aubé-Kubel was added to Tampa Bay Lightning.<br />
[2018-08-07 10:20:08] - Luke Witkowski was added to Tampa Bay Lightning.<br />
[2018-08-07 10:20:00] - Guillaume Brisebois was added to Tampa Bay Lightning.<br />
[2018-08-07 10:19:57] - Elias Pettersson was added to Tampa Bay Lightning.<br />
[2018-08-07 10:19:54] - Drake Caggiula was added to Tampa Bay Lightning.<br />
[2018-08-07 10:19:52] - Dmytro Timashov was added to Tampa Bay Lightning.<br />
[2018-08-07 10:19:47] - Adam Wilcox was added to Tampa Bay Lightning.<br />
[2018-08-07 08:21:48] - Jaroslav Halak was added to Montreal Canadiens.<br />
[2018-08-07 08:21:24] - Tyler Johnson was added to St. Louis Blues.<br />
[2018-08-07 07:29:59] - Zach Boychuk was added to Calgary Flames.<br />
[2018-08-07 07:29:28] - Yann Sauve was added to Colorado Avalanche.<br />
[2018-08-07 07:26:52] - Mareks Mitens was added to Arizona Coyotes.<br />
[2018-08-07 07:26:16] - Kevin Klein was added to St. Louis Blues.<br />
[2018-08-07 07:25:21] - Hunter Drew was added to Quebec Nordiques.<br />
[2018-08-07 07:24:25] - Danny aus den Birken was added to Washington Capitals.<br />
[2018-08-07 07:22:59] - Daniel Girardi was added to Edmonton Oilers.<br />
[2018-08-07 07:21:27] - Curtis Glencross was added to New Jersey Devils.<br />
[2018-08-07 07:20:36] - Chet Pickard was added to Seattle Saints.<br />
[2018-08-07 07:19:29] - Cam Barker was added to Quebec Nordiques.<br />
[2018-08-07 07:18:31] - Benoit Pouliot was added to Minnesota Wild.<br />
[2018-08-07 07:17:48] - Ben Scrivens was added to Carolina Hurricanes.<br />
[2018-08-07 07:17:06] - Anton Khudobin was added to Minnesota Wild.<br />
[2018-08-07 07:16:19] - Antoine Vermette was added to Calgary Flames.<br />
[2018-08-07 07:15:11] - Antero Niittymaki was added to Florida Panthers.<br />
[2018-08-07 07:14:47] - Andrew Ladd was added to Florida Panthers.<br />
[2018-08-07 07:13:20] - Andreas Martinsen was added to New Jersey Devils.<br />
[2018-08-07 07:12:22] - Alexander Killorn was added to Quebec Nordiques.<br />
[2018-08-07 07:11:32] - Ales Music was added to New Jersey Devils.<br />
[2018-08-07 07:11:01] - Adam McQuaid was added to Arizona Coyotes.<br />
[2018-08-05 07:47:19] - TRADE : From Philadelphia Flyers to Arizona Coyotes : Mark Borowiecki, Y:2019-RND:3-MIN.<br />
[2018-08-05 07:47:19] - TRADE : From Arizona Coyotes to Philadelphia Flyers : 1 $ (Money).<br />
[2018-08-05 07:47:19] - Mark Borowiecki was added to Arizona Coyotes.<br />
[2018-08-04 11:35:39] - TRADE : From Tampa Bay Lightning to Philadelphia Flyers : Vladislav Namestnikov, Y:2019-RND:3-TBL.<br />
[2018-08-04 11:35:39] - TRADE : From Philadelphia Flyers to Tampa Bay Lightning : Michael Grabner, Y:2019-RND:5-PHI.<br />
[2018-08-04 11:35:38] - Vladislav Namestnikov was added to Philadelphia Flyers.<br />
[2018-08-04 11:35:38] - Michael Grabner was added to Tampa Bay Lightning.<br />
[2018-08-04 11:33:37] - TRADE : From Minnesota Wild to Philadelphia Flyers : Curtis Lazar, Y:2019-RND:1-MIN, Y:2019-RND:3-MIN.<br />
[2018-08-04 11:33:37] - TRADE : From Philadelphia Flyers to Minnesota Wild : Simon Despres, Y:2020-RND:1-PHI, Y:2020-RND:3-PHI.<br />
[2018-08-04 11:33:36] - Curtis Lazar was added to Philadelphia Flyers.<br />
[2018-08-04 11:33:36] - Simon Despres was added to Minnesota Wild.<br />
[2018-08-03 11:17:38] - Tyson Jost was added to New York Rangers.<br />
[2018-08-03 11:17:36] - Trent Frederic was added to New York Rangers.<br />
[2018-08-03 11:17:23] - Jake DeBrusk was added to New York Rangers.<br />
[2018-08-03 11:17:20] - Casey Nelson was added to New York Rangers.<br />
[2018-08-03 11:17:18] - Casey Fitzgerald was added to New York Rangers.<br />
[2018-08-03 11:17:13] - Adam Pelech was added to New York Rangers.<br />
[2018-08-03 10:18:23] - Tyler Soy was added to Washington Capitals.<br />
[2018-08-03 10:18:17] - Matthew Bradley was added to Washington Capitals.<br />
[2018-08-03 10:18:15] - Mathias From was added to Washington Capitals.<br />
[2018-08-03 10:18:11] - Kyle Capobianco was added to Washington Capitals.<br />
[2018-08-03 10:18:09] - Kevin Hancock was added to Washington Capitals.<br />
[2018-08-03 10:18:05] - Ken Appleby was added to Washington Capitals.<br />
[2018-08-03 10:18:01] - Hudson Elynuik was added to Washington Capitals.<br />
[2018-08-03 10:17:58] - Dominik Simon was added to Washington Capitals.<br />
[2018-08-03 10:17:50] - Chaz Reddekopp was added to Washington Capitals.<br />
[2018-08-03 10:17:48] - Braydyn Chizen was added to Washington Capitals.<br />
[2018-08-02 16:55:11] - Sonny Milano was added to Montreal Canadiens.<br />
[2018-08-02 16:55:07] - Samuel Blais was added to Montreal Canadiens.<br />
[2018-08-02 16:55:04] - Rinat Valiev was added to Montreal Canadiens.<br />
[2018-08-02 16:54:58] - Jérémy Grégoire was added to Montreal Canadiens.<br />
[2018-08-02 16:54:54] - Ian McCoshen was added to Montreal Canadiens.<br />
[2018-08-02 16:54:50] - Dominic Turgeon was added to Montreal Canadiens.<br />
[2018-08-02 16:54:48] - Daniel Sprong was added to Montreal Canadiens.<br />
[2018-08-02 16:54:45] - Clark Bishop was added to Montreal Canadiens.<br />
[2018-08-02 16:54:42] - Christian Wolanin was added to Montreal Canadiens.<br />
[2018-08-02 16:54:39] - Andreas Borgman was added to Montreal Canadiens.<br />
[2018-08-02 16:11:34] - Felix Girard has been deleted from Montreal Canadiens.<br />
[2018-08-02 16:10:04] - Layne Viveiros has been deleted from Washington Capitals.<br />
[2018-08-02 16:10:00] - Ivan Vereshchagin has been deleted from Washington Capitals.<br />
[2018-08-02 16:09:56] - Garrett Haar has been deleted from Washington Capitals.<br />
[2018-08-02 16:09:51] - Aaron Haydon has been deleted from Washington Capitals.<br />
[2018-08-02 16:07:53] - Daniel Walcott has been deleted from Montreal Canadiens.<br />
[2018-08-02 15:53:23] - Shamil Shmakov was added to New York Islanders.<br />
[2018-08-02 15:53:16] - Luke Kunin was added to New York Islanders.<br />
[2018-08-02 15:53:13] - Logan Brown was added to New York Islanders.<br />
[2018-08-02 15:53:11] - Laurent Dauphin was added to New York Islanders.<br />
[2018-08-02 15:53:07] - Kevin Klima was added to New York Islanders.<br />
[2018-08-02 15:53:05] - Kelly Klima was added to New York Islanders.<br />
[2018-08-02 15:53:02] - Julien Gauthier was added to New York Islanders.<br />
[2018-08-02 15:52:55] - Callum Booth was added to New York Islanders.<br />
[2018-08-02 15:52:53] - Cale Makar was added to New York Islanders.<br />
[2018-08-02 15:52:49] - Adam Boqvist was added to New York Islanders.<br />
[2018-08-02 14:54:33] - Warren Foegele was added to Buffalo Sabres.<br />
[2018-08-02 14:54:30] - Scott Laughton was added to Buffalo Sabres.<br />
[2018-08-02 14:54:25] - Peter Cehlarik was added to Buffalo Sabres.<br />
[2018-08-02 14:54:13] - Jack Roslovic was added to Buffalo Sabres.<br />
[2018-08-02 14:54:11] - Ivan Barbashev was added to Buffalo Sabres.<br />
[2018-08-02 13:57:52] - Scott Wilson was added to Calgary Flames.<br />
[2018-08-02 13:57:49] - Ryan Lindgren was added to Calgary Flames.<br />
[2018-08-02 13:57:45] - Josh Ho-Sang was added to Calgary Flames.<br />
[2018-08-02 13:57:41] - Jerome Gauthier-Leduc was added to Calgary Flames.<br />
[2018-08-02 13:30:20] - Anthony Brodeur was added to Calgary Flames.<br />
[2018-08-02 11:43:25] - Stephon Williams was added to San Jose Sharks.<br />
[2018-08-02 11:43:22] - Nathan Walker was added to San Jose Sharks.<br />
[2018-08-02 11:43:19] - Joe Veleno was added to San Jose Sharks.<br />
[2018-08-02 11:20:11] - Andrey Makarov was added to St. Louis Blues.<br />
[2018-08-02 11:20:07] - Alex Dostie was added to St. Louis Blues.<br />
[2018-08-02 10:42:19] - Rasmus Asplund was added to Boston Bruins.<br />
[2018-08-02 10:42:15] - Ryan Donato was added to Boston Bruins.<br />
[2018-08-02 10:31:36] - Tommy Cross was added to Boston Bruins.<br />
[2018-08-02 10:31:32] - Lars Volden was added to Boston Bruins.<br />
[2018-08-02 10:31:27] - Brian Ferlin was added to Boston Bruins.<br />
[2018-08-02 10:31:24] - Ben Sexton was added to Boston Bruins.<br />
[2018-08-02 10:31:21] - Alexander Fallstrom has been deleted from Boston Bruins.<br />
[2018-08-02 10:31:18] - Adam Courchaine was added to Boston Bruins.<br />
[2018-08-02 09:27:01] - Marc Cantin has been deleted from Boston Bruins.<br />
[2018-08-02 09:26:56] - Zach McKelvie has been deleted from Boston Bruins.<br />
[2018-08-02 09:26:50] - Trent Whitfield has been deleted from Boston Bruins.<br />
[2018-08-02 09:26:45] - Nick Tremblay has been deleted from Boston Bruins.<br />
[2018-08-02 09:26:42] - Nathan McIver has been deleted from Boston Bruins.<br />
[2018-08-02 09:26:37] - Mark Goggin has been deleted from Boston Bruins.<br />
[2018-08-02 09:26:32] - Lane MacDermid has been deleted from Boston Bruins.<br />
[2018-08-02 09:25:23] - Ilya Sorokin was added to Detroit Red Wings.<br />
[2018-08-02 09:05:36] - Jhonas Enroth was added to Montreal Canadiens.<br />
[2018-08-02 09:05:00] - Vaclav Karabacek was added to Florida Panthers.<br />
[2018-08-02 09:04:57] - Tomas Hyka was added to Florida Panthers.<br />
[2018-08-02 09:04:46] - Noah Juulsen was added to Florida Panthers.<br />
[2018-08-02 09:04:39] - Jan Kostalek was added to Florida Panthers.<br />
[2018-08-02 09:04:37] - Iiro Pakarinen was added to Florida Panthers.<br />
[2018-08-02 09:04:33] - Garrett Wilson was added to Florida Panthers.<br />
[2018-08-02 09:04:29] - Andrei Svechnikov was added to Florida Panthers.<br />
[2018-08-01 16:27:49] - Shane Eiserman was added to Quebec Nordiques.<br />
[2018-08-01 16:27:46] - Dmitry Sokolov was added to Quebec Nordiques.<br />
[2018-08-01 16:27:44] - Connor Crisp was added to Quebec Nordiques.<br />
[2018-08-01 16:27:42] - Bokondji Imama was added to Quebec Nordiques.<br />
[2018-08-01 16:27:40] - Alexis Pepin was added to Quebec Nordiques.<br />
[2018-08-01 15:53:03] - Axel Andersson was added to New Jersey Devils.<br />
[2018-08-01 15:52:52] - Gabriel Carlsson was added to New Jersey Devils.<br />
[2018-08-01 15:52:38] - Andy Welinski was added to New Jersey Devils.<br />
[2018-08-01 15:52:35] - Blake Coleman was added to New Jersey Devils.<br />
[2018-08-01 15:08:15] - Matthew Highmore was added to Pittsburgh Penguins.<br />
[2018-08-01 15:08:11] - Alex Lyon was added to Pittsburgh Penguins.<br />
[2018-08-01 14:40:56] - Sam Miletic was added to Arizona Coyotes.<br />
[2018-08-01 14:40:54] - Sam Miletic has been added to Arizona Coyotes.<br />
[2018-08-01 14:40:50] - Sam Milletic has been deleted from Arizona Coyotes.<br />
[2018-08-01 14:40:32] - Jermaine Loewen was added to Arizona Coyotes.<br />
[2018-08-01 14:40:30] - Jayden Halbgewachs was added to Arizona Coyotes.<br />
[2018-08-01 14:40:26] - Skyler McKenzie was added to Arizona Coyotes.<br />
[2018-08-01 14:40:11] - Matt Benning was added to Arizona Coyotes.<br />
[2018-08-01 14:40:08] - Matt Benning has been added to Arizona Coyotes.<br />
[2018-08-01 14:40:02] - Matthew Benning has been deleted from Arizona Coyotes.<br />
[2018-08-01 14:39:51] - Denis Godla was added to Arizona Coyotes.<br />
[2018-08-01 14:20:05] - Alex Iafallo was added to Arizona Coyotes.<br />
[2018-08-01 13:28:03] - TRADE : From Colorado Avalanche to New Jersey Devils : Steven Santini, Y:2019-RND:2-COL.<br />
[2018-08-01 13:28:03] - TRADE : From New Jersey Devils to Colorado Avalanche : Magnus Paajarvi.<br />
[2018-08-01 13:28:02] - Steven Santini was added to New Jersey Devils.<br />
[2018-08-01 13:28:02] - Magnus Paajarvi was added to Colorado Avalanche.<br />
[2018-08-01 11:29:43] - Dylan Blujus was added to Nashville Predators.<br />
[2018-08-01 11:29:38] - Kyle Platzer was added to Nashville Predators.<br />
[2018-08-01 11:29:35] - Victor Olofsson was added to Nashville Predators.<br />
[2018-08-01 11:29:31] - Kevin Roy was added to Nashville Predators.<br />
[2018-08-01 11:29:26] - John Quenneville was added to Nashville Predators.<br />
[2018-08-01 11:29:21] - Cristoval Nieves was added to Nashville Predators.<br />
[2018-08-01 09:53:32] - Sam Kurker was added to Seattle Saints.<br />
[2018-08-01 09:53:31] - John Nyberg was added to Seattle Saints.<br />
[2018-08-01 09:53:29] - Connor Clifton was added to Seattle Saints.<br />
[2018-08-01 09:10:08] - Olivier Leblanc has been deleted from Montreal Canadiens.<br />
[2018-08-01 08:37:30] - Nick Bonino was added to Seattle Saints.<br />
[2018-08-01 07:54:25] - Steven Shipley has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:54:21] - Shawn Szydlowski has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:54:16] - Nick Crawford has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:54:11] - Nathan Lieuwen has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:54:04] - Kevin Sundher has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:53:59] - Justin Jokinen has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:53:52] - Jonathan Parker has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:53:46] - Jesper Lindgren has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:53:41] - Gregg Sutch has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:53:34] - Daniel Gunnarsson has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:53:30] - Daniel Catenacci has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:53:27] - Corey Fienhage has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:53:24] - Connor Knapp has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:53:19] - Christian Isackson has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:53:11] - Brad Navin has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:53:06] - Alex Lepkowski has been deleted from Buffalo Sabres.<br />
[2018-08-01 07:53:00] - Aidan Muir has been deleted from Buffalo Sabres.<br />
[2018-07-31 19:48:08] - Justin Haché has been deleted from Buffalo Sabres.<br />
[2018-07-31 19:48:02] - Tanner Richard has been deleted from Buffalo Sabres.<br />
[2018-07-31 19:47:58] - Drew Schiestel has been deleted from Buffalo Sabres.<br />
[2018-07-31 19:47:53] - Cedrick Henley has been deleted from Buffalo Sabres.<br />
[2018-07-31 19:47:49] - Cameron Darcy has been deleted from Buffalo Sabres.<br />
[2018-07-31 15:41:30] - TRADE : From Colorado Avalanche to Montreal Canadiens : Y:2018-RND:5-BOS.<br />
[2018-07-31 15:41:30] - TRADE : From Montreal Canadiens to Colorado Avalanche : Y:2019-RND:4-MTL.<br />
[2018-07-31 15:31:51] - TRADE : From New York Islanders to Chicago Blackhawks : Y:2018-RND:5-TOR.<br />
[2018-07-31 15:31:51] - TRADE : From Chicago Blackhawks to New York Islanders : 5 000 000 $ (Money), Y:2018-RND:5-PHI.<br />
[2018-07-31 15:01:16] - TRADE : From New Jersey Devils to New York Islanders : Y:2018-RND:5-DET, Y:2018-RND:5-NJD.<br />
[2018-07-31 15:01:16] - TRADE : From New York Islanders to New Jersey Devils : Y:2018-RND:5-CGY.<br />
[2018-07-31 14:54:16] - TRADE : From Dallas Stars to Detroit Red Wings : Y:2018-RND:5-COL, Y:2018-RND:5-DAL.<br />
[2018-07-31 14:54:16] - TRADE : From Detroit Red Wings to Dallas Stars : Justin Kea.<br />
[2018-07-31 14:54:15] - Justin Kea was added to Dallas Stars.<br />
[2018-07-31 14:47:56] - Anatoli Golyshev has been added to Detroit Red Wings.<br />
[2018-07-31 14:17:33] - TRADE : From Dallas Stars to Chicago Blackhawks : Y:2018-RND:4-TBL.<br />
[2018-07-31 14:17:33] - TRADE : From Chicago Blackhawks to Dallas Stars : Y:2019-RND:3-CHI.<br />
[2018-07-31 14:17:09] - TRADE : From Dallas Stars to Montreal Canadiens : Y:2018-RND:4-MIN.<br />
[2018-07-31 14:17:09] - TRADE : From Montreal Canadiens to Dallas Stars : Y:2018-RND:4-TBL.<br />
[2018-07-31 14:04:25] - TRADE : From Dallas Stars to New York Islanders : Jachym Kondelik (P).<br />
[2018-07-31 14:04:25] - TRADE : From New York Islanders to Dallas Stars : Joel Hofer (P).<br />
[2018-07-31 13:58:29] - TRADE : From Montreal Canadiens to Dallas Stars : Y:2019-RND:3-QUE.<br />
[2018-07-31 13:58:29] - TRADE : From Dallas Stars to Montreal Canadiens : Y:2018-RND:4-TBL.<br />
[2018-07-31 11:57:25] - Jordan Harris has been added to Minnesota Wild.<br />
[2018-07-31 10:06:22] - Rasmus Bengtsson has been deleted from Florida Panthers.<br />
[2018-07-31 10:06:17] - John McFarland has been deleted from Florida Panthers.<br />
[2018-07-31 10:06:12] - Colin Jacobs has been deleted from Florida Panthers.<br />
[2018-07-31 08:25:16] - TRADE : From Colorado Avalanche to Minnesota Wild : Nikolay Prokhorkin, Danick Martel.<br />
[2018-07-31 08:25:16] - TRADE : From Minnesota Wild to Colorado Avalanche : Y:2018-RND:3-FLA, Y:2018-RND:3-NJD.<br />
[2018-07-31 08:25:15] - Danick Martel was added to Minnesota Wild.<br />
[2018-07-31 08:25:15] - Nikolay Prokhorkin was added to Minnesota Wild.<br />
[2018-07-31 08:12:52] - TRADE : From Chicago Blackhawks to Minnesota Wild : Christophe Lalancette.<br />
[2018-07-31 08:12:52] - TRADE : From Minnesota Wild to Chicago Blackhawks : Y:2018-RND:3-TOR.<br />
[2018-07-31 08:12:51] - Christophe Lalancette was added to Minnesota Wild.<br />
[2018-07-30 16:46:43] - TRADE : From Seattle Saints to Montreal Canadiens : Y:2019-RND:3-QUE, Y:2020-RND:4-PIT, Y:2020-RND:4-SEA, Y:2021-RND:2-SEA.<br />
[2018-07-30 16:46:43] - TRADE : From Montreal Canadiens to Seattle Saints : Jacob Markstrom.<br />
[2018-07-30 16:46:42] - Jacob Markstrom was added to Seattle Saints.<br />
[2018-07-30 15:39:42] - TRADE : From Seattle Saints to Montreal Canadiens : Antoine Bibeau.<br />
[2018-07-30 15:39:42] - TRADE : From Montreal Canadiens to Seattle Saints : Patrice Cormier.<br />
[2018-07-30 15:39:41] - Antoine Bibeau was added to Montreal Canadiens.<br />
[2018-07-30 15:39:41] - Patrice Cormier was added to Seattle Saints.<br />
[2018-07-30 13:35:41] - TRADE : From Los Angeles Kings to Buffalo Sabres : Victor Hedman, David Savard, Y:2019-RND:3-LOS.<br />
[2018-07-30 13:35:41] - TRADE : From Buffalo Sabres to Los Angeles Kings : Victor Mete, Vincent Trocheck, Mark Pysyk, Nicolas Roy (P), Dante Fabbro (P).<br />
[2018-07-30 13:35:40] - David Savard was added to Buffalo Sabres.<br />
[2018-07-30 13:35:40] - Victor Hedman was added to Buffalo Sabres.<br />
[2018-07-30 13:35:40] - Mark Pysyk was added to Los Angeles Kings.<br />
[2018-07-30 13:35:40] - Vincent Trocheck was added to Los Angeles Kings.<br />
[2018-07-30 13:35:40] - Victor Mete was added to Los Angeles Kings.<br />
[2018-07-30 13:24:59] - TRADE : From Florida Panthers to Colorado Avalanche : Robby Fabbri, Steven Santini, Jake Virtanen, Y:2018-RND:3-MIN.<br />
[2018-07-30 13:24:59] - TRADE : From Colorado Avalanche to Florida Panthers : Joel Eriksson Ek, Vyacheslav Voynov.<br />
[2018-07-30 13:24:58] - Jake Virtanen was added to Colorado Avalanche.<br />
[2018-07-30 13:24:58] - Steven Santini was added to Colorado Avalanche.<br />
[2018-07-30 13:24:58] - Robby Fabbri was added to Colorado Avalanche.<br />
[2018-07-30 13:24:58] - Vyacheslav Voynov was added to Florida Panthers.<br />
[2018-07-30 13:24:58] - Joel Eriksson Ek was added to Florida Panthers.<br />
[2018-07-29 10:26:35] - Axel Andersson has been added to New Jersey Devils.<br />
[2018-07-29 10:23:49] - TRADE : From Buffalo Sabres to Tampa Bay Lightning : Y:2018-RND:2-COL.<br />
[2018-07-29 10:22:49] - TRADE : From Tampa Bay Lightning to Chicago Blackhawks : Y:2018-RND:2-TBL.<br />
[2018-07-29 10:21:39] - TRADE : From San Jose Sharks to Washington Capitals : Y:2018-RND:2-NYR.<br />
[2018-07-29 10:20:59] - TRADE : From Arizona Coyotes to San Jose Sharks : Y:2018-RND:2-SEA.<br />
[2018-07-29 10:20:14] - TRADE : From Chicago Blackhawks to Arizona Coyotes : Y:2018-RND:2-CHI.<br />
[2018-07-29 10:19:18] - TRADE : From Toronto Maple Leafs to Buffalo Sabres : Y:2018-RND:2-MIN.<br />
[2018-07-29 10:18:39] - TRADE : From Arizona Coyotes to Toronto Maple Leafs : Y:2018-RND:2-BUF.<br />
[2018-07-29 10:17:41] - TRADE : From Nashville Predators to Arizona Coyotes : Y:2018-RND:2-NSH.<br />
[2018-07-29 10:16:48] - TRADE : From Pittsburgh Penguins to Nashville Predators : Y:2018-RND:2-PHI.<br />
[2018-07-29 10:15:42] - TRADE : From Washington Capitals to Pittsburgh Penguins : Y:2018-RND:2-ANH.<br />
[2018-07-29 10:03:27] - TRADE : From Toronto Maple Leafs to Florida Panthers : Y:2018-RND:1-PHI.<br />
[2018-07-29 08:16:22] - TRADE : From Florida Panthers to Toronto Maple Leafs : Y:2018-RND:1-CHI.<br />
[2018-07-28 17:57:08] - TRADE : From Minnesota Wild to Montreal Canadiens : Zach Parise.<br />
[2018-07-28 17:57:08] - TRADE : From Montreal Canadiens to Minnesota Wild : JC Lipon.<br />
[2018-07-28 17:57:07] - Zach Parise was added to Montreal Canadiens.<br />
[2018-07-28 17:57:07] - JC Lipon was added to Minnesota Wild.<br />
[2018-07-28 17:34:20] - TRADE : From New York Rangers to Florida Panthers : Y:2018-RND:2-LOS.<br />
[2018-07-28 17:34:20] - TRADE : From Florida Panthers to New York Rangers : Y:2019-RND:2-FLA, Y:2018-RND:4-QUE.<br />
[2018-07-28 16:49:46] - TRADE : From San Jose Sharks to Arizona Coyotes : Jordan Staal, Y:2018-RND:2-CLB.<br />
[2018-07-28 16:49:46] - TRADE : From Arizona Coyotes to San Jose Sharks : Tyler Ennis, Y:2018-RND:3-COL.<br />
[2018-07-28 16:49:45] - Jordan Staal was added to Arizona Coyotes.<br />
[2018-07-28 16:49:45] - Tyler Ennis was added to San Jose Sharks.<br />
[2018-07-28 16:07:59] - TRADE : From San Jose Sharks to Florida Panthers : Y:2018-RND:1-CHI, Y:2018-RND:3-VAN.<br />
[2018-07-28 16:07:59] - TRADE : From Florida Panthers to San Jose Sharks : Max Jones (P), Y:2019-RND:1-FLA.<br />
[2018-07-28 14:25:55] - TRADE : From Anaheim Ducks to Philadelphia Flyers : Michael Grabner, 3 250 000 $ (Salary Cap).<br />
[2018-07-28 14:25:55] - TRADE : From Philadelphia Flyers to Anaheim Ducks : Y:2018-RND:1-LOS.<br />
[2018-07-28 14:25:55] - Michael Grabner was added to Philadelphia Flyers.<br />
[2018-07-28 14:14:53] - TRADE : From Colorado Avalanche to Montreal Canadiens : Lawson Crouse, Xavier Ouellet, Y:2019-RND:2-QUE.<br />
[2018-07-28 14:14:53] - TRADE : From Montreal Canadiens to Colorado Avalanche : Y:2018-RND:1-SEA.<br />
[2018-07-28 14:14:52] - Xavier Ouellet was added to Montreal Canadiens.<br />
[2018-07-28 14:14:52] - Lawson Crouse was added to Montreal Canadiens.<br />
[2018-07-28 13:59:23] - TRADE : From Winnipeg Jets to Anaheim Ducks : Y:2018-RND:1-QUE, Y:2018-RND:3-WPG.<br />
[2018-07-28 13:59:23] - TRADE : From Anaheim Ducks to Winnipeg Jets : Vladislav Kamenev.<br />
[2018-07-28 13:59:22] - Vladislav Kamenev was added to Winnipeg Jets.<br />
[2018-07-28 13:56:53] - TRADE : From Chicago Blackhawks to Toronto Maple Leafs : Y:2018-RND:1-PHI, Y:2018-RND:4-ANH.<br />
[2018-07-28 13:56:53] - TRADE : From Toronto Maple Leafs to Chicago Blackhawks : Y:2018-RND:1-NYI.<br />
[2018-07-28 13:55:14] - TRADE : From New York Islanders to Toronto Maple Leafs : Olli Juolevi (P), Joni Ikonen (P), Y:2018-RND:1-NYI, Y:2018-RND:2-CAR, Y:2018-RND:3-LOS.<br />
[2018-07-28 13:55:14] - TRADE : From Toronto Maple Leafs to New York Islanders : Cale Makar (P), Laurent Dauphin (P), Y:2018-RND:1-TOR, Y:2018-RND:4-TOR, Y:2018-RND:5-CGY.<br />
[2018-07-28 11:46:52] - TRADE : From Vancouver Canucks to Buffalo Sabres : Julius Honka, Y:2018-RND:4-DET.<br />
[2018-07-28 11:46:52] - TRADE : From Buffalo Sabres to Vancouver Canucks : Christian Dvorak.<br />
[2018-07-28 11:46:50] - Julius Honka was added to Buffalo Sabres.<br />
[2018-07-28 11:46:50] - Christian Dvorak was added to Vancouver Canucks.<br />
[2018-07-28 08:48:07] - TRADE : From New Jersey Devils to Detroit Red Wings : Madison Bowey, Y:2018-RND:1-NJD, Y:2018-RND:2-VAN.<br />
[2018-07-28 08:48:07] - TRADE : From Detroit Red Wings to New Jersey Devils : Jacob Trouba.<br />
[2018-07-28 08:48:06] - Madison Bowey was added to Detroit Red Wings.<br />
[2018-07-28 08:48:06] - Jacob Trouba was added to New Jersey Devils.<br />
[2018-07-28 07:43:31] - TRADE : From Philadelphia Flyers to Arizona Coyotes : 1 $ (Money).<br />
[2018-07-28 07:43:31] - TRADE : From Arizona Coyotes to Philadelphia Flyers : Mark Borowiecki, Y:2019-RND:3-ARZ.<br />
[2018-07-28 07:43:30] - Mark Borowiecki was added to Philadelphia Flyers.<br />
[2018-07-27 15:22:21] - TRADE : From St. Louis Blues to Buffalo Sabres : Kyle Okposo.<br />
[2018-07-27 15:22:21] - TRADE : From Buffalo Sabres to St. Louis Blues : Y:2019-RND:2-BUF, Y:2019-RND:2-SJS.<br />
[2018-07-27 15:22:20] - Kyle Okposo was added to Buffalo Sabres.<br />
[2018-07-27 15:20:08] - TRADE : From Detroit Red Wings to Buffalo Sabres : Jonathan Audy-Marchessault.<br />
[2018-07-27 15:20:08] - TRADE : From Buffalo Sabres to Detroit Red Wings : Y:2018-RND:1-BUF.<br />
[2018-07-27 15:20:07] - Jonathan Audy-Marchessault was added to Buffalo Sabres.<br />
[2018-07-27 06:29:47] - TRADE : From New York Rangers to St. Louis Blues : Ryan O'Reilly, Y:2019-RND:3-NYR, Y:2019-RND:5-NYR.<br />
[2018-07-27 06:29:47] - TRADE : From St. Louis Blues to New York Rangers : Robert Thomas (P), Tyson Jost (P), Y:2020-RND:2-CAR, Y:2020-RND:3-STL.<br />
[2018-07-27 06:29:46] - Ryan O'Reilly was added to St. Louis Blues.<br />
[2018-07-26 13:33:49] - TRADE : From San Jose Sharks to Washington Capitals : Y:2018-RND:2-DAL, Y:2019-RND:3-SJS.<br />
[2018-07-26 13:33:49] - TRADE : From Washington Capitals to San Jose Sharks : Benjamin Conz.<br />
[2018-07-26 13:33:48] - Benjamin Conz was added to San Jose Sharks.<br />
[2018-07-26 13:33:37] - TRADE : From Philadelphia Flyers to San Jose Sharks : Y:2018-RND:2-NYR.<br />
[2018-07-26 11:04:27] - TRADE : From Seattle Saints to Buffalo Sabres : Craig Smith, Daniel O'Regan, Cedric Pare (P).<br />
[2018-07-26 11:04:27] - TRADE : From Buffalo Sabres to Seattle Saints : Ben Smith, Dana Tyrell.<br />
[2018-07-26 11:04:26] - Daniel O'Regan was added to Buffalo Sabres.<br />
[2018-07-26 11:04:26] - Craig Smith was added to Buffalo Sabres.<br />
[2018-07-26 11:04:26] - Dana Tyrell was added to Seattle Saints.<br />
[2018-07-26 11:04:26] - Ben Smith was added to Seattle Saints.<br />
[2018-07-25 14:09:16] - TRADE : From Quebec Nordiques to Seattle Saints : Yan-Pavel Laplante, Y:2019-RND:3-QUE.<br />
[2018-07-25 14:09:16] - TRADE : From Seattle Saints to Quebec Nordiques : Derick Brassard.<br />
[2018-07-25 14:09:15] - Yan-Pavel Laplante was added to Seattle Saints.<br />
[2018-07-25 14:09:15] - Derick Brassard was added to Quebec Nordiques.<br />
[2018-07-25 13:25:56] - TRADE : From Toronto Maple Leafs to Arizona Coyotes : 2 000 000 $ (Money).<br />
[2018-07-25 11:43:00] - TRADE : From Buffalo Sabres to Montreal Canadiens : Brent Seabrook.<br />
[2018-07-25 11:43:00] - TRADE : From Montreal Canadiens to Buffalo Sabres : Colin Miller, Nicolas Roy (P), Y:2018-RND:1-BUF.<br />
[2018-07-25 11:42:59] - Brent Seabrook was added to Montreal Canadiens.<br />
[2018-07-25 11:42:59] - Colin Miller was added to Buffalo Sabres.<br />
[2018-07-25 10:33:19] - TRADE : From Dallas Stars to Winnipeg Jets : Y:2018-RND:1-DAL.<br />
[2018-07-25 10:33:15] - TRADE : From Winnipeg Jets to Dallas Stars : Hunter Shinkaruk, Y:2018-RND:1-TBL, Y:2018-RND:4-MIN.<br />
[2018-07-25 10:33:13] - Hunter Shinkaruk was added to Dallas Stars.<br />
[2018-07-25 10:26:19] - TRADE : From Arizona Coyotes to Dallas Stars : Tomas Tatar.<br />
[2018-07-25 10:26:19] - TRADE : From Dallas Stars to Arizona Coyotes : Y:2018-RND:2-QUE, Y:2018-RND:4-DAL.<br />
[2018-07-25 10:26:18] - Tomas Tatar was added to Dallas Stars.<br />
[2018-07-25 10:24:37] - TRADE : From Minnesota Wild to St. Louis Blues : Marc-Andre Bourdon.<br />
[2018-07-25 10:24:37] - TRADE : From St. Louis Blues to Minnesota Wild : Y:2018-RND:3-FLA.<br />
[2018-07-25 10:24:35] - Marc-Andre Bourdon was added to St. Louis Blues.<br />
[2018-07-25 10:22:09] - TRADE : From St. Louis Blues to Carolina Hurricanes : Kyle Turris.<br />
[2018-07-25 10:22:09] - TRADE : From Carolina Hurricanes to St. Louis Blues : Alexei Emelin, Y:2020-RND:2-CAR.<br />
[2018-07-25 10:22:09] - Kyle Turris was added to Carolina Hurricanes.<br />
[2018-07-25 10:22:09] - Alexei Emelin was added to St. Louis Blues.<br />
[2018-07-24 16:14:35] - TRADE : From Seattle Saints to Los Angeles Kings : Jerry D'Amigo, Patrick Holland, Y:2018-RND:4-BUF, Y:2021-RND:1-SEA.<br />
[2018-07-24 16:14:35] - TRADE : From Los Angeles Kings to Seattle Saints : Mika Zibanejad.<br />
[2018-07-24 16:14:34] - Patrick Holland was added to Los Angeles Kings.<br />
[2018-07-24 16:14:34] - Jerry D'Amigo was added to Los Angeles Kings.<br />
[2018-07-24 16:14:34] - Mika Zibanejad was added to Seattle Saints.<br />
[2018-07-24 15:32:20] - TRADE : From Columbus Blue Jackets to Arizona Coyotes : 2 000 000 $ (Money).<br />
[2018-07-24 13:32:21] - TRADE : From Columbus Blue Jackets to New York Islanders : Michael Bunting.<br />
[2018-07-24 13:32:21] - TRADE : From New York Islanders to Columbus Blue Jackets : Mitch Holmberg.<br />
[2018-07-24 13:32:20] - Michael Bunting was added to New York Islanders.<br />
[2018-07-24 13:32:20] - Mitch Holmberg was added to Columbus Blue Jackets.<br />
[2018-07-24 13:30:32] - TRADE : From New Jersey Devils to Buffalo Sabres : Johnny Boychuk.<br />
[2018-07-24 13:30:32] - TRADE : From Buffalo Sabres to New Jersey Devils : Y:2018-RND:5-SJS.<br />
[2018-07-24 13:30:32] - Johnny Boychuk was added to Buffalo Sabres.<br />
[2018-07-24 13:28:56] - TRADE : From Nashville Predators to Buffalo Sabres : Mark Giordano.<br />
[2018-07-24 13:28:56] - TRADE : From Buffalo Sabres to Nashville Predators : James Wisniewski, Y:2018-RND:4-CGY.<br />
[2018-07-24 13:28:54] - Mark Giordano was added to Buffalo Sabres.<br />
[2018-07-24 13:28:54] - James Wisniewski was added to Nashville Predators.<br />
[2018-07-24 09:58:13] - TRADE : From Colorado Avalanche to Seattle Saints : Nick Petrecki.<br />
[2018-07-24 09:58:13] - TRADE : From Seattle Saints to Colorado Avalanche : Y:2018-RND:4-COL, Y:2018-RND:5-BOS, Y:2018-RND:5-NYR.<br />
[2018-07-24 09:58:12] - Nick Petrecki was added to Seattle Saints.<br />
[2018-07-24 07:40:35] - TRADE : From St. Louis Blues to Tampa Bay Lightning : Guillaume Brisebois (P), Y:2018-RND:4-OTT.<br />
[2018-07-24 07:40:35] - TRADE : From Tampa Bay Lightning to St. Louis Blues : Jarred Tinordi.<br />
[2018-07-24 07:40:34] - Jarred Tinordi was added to St. Louis Blues.<br />
[2018-07-22 10:38:20] - Patrick Sharp was added to Colorado Avalanche.<br />
[2018-07-21 11:07:58] - TRADE : From Philadelphia Flyers to Los Angeles Kings : Kevin Hayes, Y:2019-RND:1-PHI.<br />
[2018-07-21 11:07:58] - TRADE : From Los Angeles Kings to Philadelphia Flyers : Lars Eller, Y:2018-RND:1-LOS.<br />
[2018-07-21 11:07:56] - Kevin Hayes was added to Los Angeles Kings.<br />
[2018-07-21 11:07:56] - Lars Eller was added to Philadelphia Flyers.<br />
[2018-07-20 10:07:55] - TRADE : From Philadelphia Flyers to Seattle Saints : Y:2018-RND:4-BUF, Y:2018-RND:4-COL, Y:2018-RND:5-BOS, Y:2018-RND:5-NYR.<br />
[2018-07-20 10:07:55] - TRADE : From Seattle Saints to Philadelphia Flyers : Y:2019-RND:5-ANH, Y:2019-RND:5-COL, Y:2019-RND:5-PHI, Y:2019-RND:5-SEA, Y:2020-RND:5-ANH, Y:2020-RND:5-SEA.<br />
[2018-07-19 15:06:39] - TRADE : From Montreal Canadiens to Tampa Bay Lightning : Cam Barker, Y:2018-RND:5-QUE.<br />
[2018-07-19 15:06:39] - TRADE : From Tampa Bay Lightning to Montreal Canadiens : Brendan Mikkelson.<br />
[2018-07-19 15:06:38] - Cam Barker was added to Tampa Bay Lightning.<br />
[2018-07-19 15:06:38] - Brendan Mikkelson was added to Montreal Canadiens.<br />
[2018-07-19 08:25:14] - TRADE : From Seattle Saints to New York Islanders : Sven Baertschi.<br />
[2018-07-19 08:25:14] - TRADE : From New York Islanders to Seattle Saints : Cody Hodgson, Cedric Pare (P).<br />
[2018-07-19 08:25:13] - Sven Baertschi was added to New York Islanders.<br />
[2018-07-19 08:25:13] - Cody Hodgson was added to Seattle Saints.<br />
[2018-07-19 08:21:16] - TRADE : From St. Louis Blues to Toronto Maple Leafs : Y:2018-RND:2-MIN.<br />
[2018-07-19 08:21:16] - TRADE : From Toronto Maple Leafs to St. Louis Blues : Y:2019-RND:2-TOR.<br />
[2018-07-03 06:15:32] - Robert Czarnik has been deleted from Los Angeles Kings.<br />
[2018-07-03 06:15:29] - Robbie Baillargeon has been deleted from Los Angeles Kings.<br />
[2018-07-03 06:15:24] - Ray Kaunisto has been deleted from Los Angeles Kings.<br />
[2018-07-03 06:15:09] - Mikhail Lyubushin has been deleted from Los Angeles Kings.<br />
[2018-07-03 06:15:04] - Michael Schumacher has been deleted from Los Angeles Kings.<br />
[2018-07-03 06:15:01] - Maxim Kitsyn has been deleted from Los Angeles Kings.<br />
[2018-07-03 06:14:57] - Johan Fransson has been deleted from Los Angeles Kings.<br />
[2018-07-03 06:14:52] - David Meckler has been deleted from Los Angeles Kings.<br />
[2018-07-03 06:14:49] - David Kolomatis has been deleted from Los Angeles Kings.<br />
[2018-07-03 06:14:45] - Andrew Campbell has been deleted from Los Angeles Kings.<br />
[2018-06-18 10:33:03] - Wade Megan has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:59] - Spencer Dillon has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:56] - Sergei Gayduchenko has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:53] - Roman Derlyuk has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:50] - R.J. Boyd has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:47] - Ondrej Roman has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:43] - Mattias Lindstrom has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:41] - Martin Lojek has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:39] - Mark Cullen has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:34] - Keith Seabrook has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:32] - Justin Bernhardt has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:30] - Josh Birkholz has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:26] - Jonathan Hazen has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:24] - John Lee has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:21] - Joe Basaraba has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:18] - Greg Rallo has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:14] - Edward Wittchow has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:12] - Denis Yachmenev has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:09] - Denis Stasyuk has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:07] - David Pacan has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:04] - Corey Durocher has been deleted from Florida Panthers.<br />
[2018-06-18 10:32:01] - Connor Brickley has been deleted from Florida Panthers.<br />
[2018-06-18 10:31:52] - Benjamin Gallacher has been deleted from Florida Panthers.<br />
[2018-06-10 12:35:46] - Edgars Masalskis was added to Tampa Bay Lightning.<br />
[2018-06-08 02:23:59] - Paul Byron was added to Montreal Canadiens.<br />
[2018-05-30 02:15:29] - Craig Smith was added to Seattle Saints.<br />
<?php include "Footer.php";?>
