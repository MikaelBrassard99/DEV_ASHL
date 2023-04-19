<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Trade History</title>
<script src="ASHL11-PRE.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL11-STHS.db - ASHL11-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL11-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL11-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
[2021-09-15 06:30:23] - TRADE : From Colorado Avalanche to Anaheim Ducks : Devin Setoguchi, Olivier Nadeau (P).<br />
[2021-09-15 06:30:23] - TRADE : From Anaheim Ducks to Colorado Avalanche : Nikita Korostelev.<br />
[2021-09-14 07:40:47] - Garret Sparks was added to Florida Panthers.<br />
[2021-09-11 08:30:44] - Thomas Novak was added to Anaheim Ducks.<br />
[2021-09-11 08:30:41] - Michael Spacek was added to Anaheim Ducks.<br />
[2021-09-11 08:30:36] - Jansen Harkins was added to Anaheim Ducks.<br />
[2021-09-11 06:59:14] - TRADE : From Pittsburgh Penguins to Washington Capitals : Samuel Blais.<br />
[2021-09-11 06:59:14] - TRADE : From Washington Capitals to Pittsburgh Penguins : Andrew Cogliano, Oliver Kylington.<br />
[2021-09-10 19:47:44] - Dylan Coghlan was added to Nashville Predators.<br />
[2021-09-10 17:03:32] - Otto Koivula was added to Winnipeg Jets.<br />
[2021-09-10 17:03:26] - Matthew Phillips was added to Winnipeg Jets.<br />
[2021-09-10 17:03:23] - Connor Ingram was added to Winnipeg Jets.<br />
[2021-09-08 17:24:16] - TRADE : From Washington Capitals to Detroit Red Wings : Connor Hellebuyck, Nicolas Hague, Y:2022-RND:2-FLA.<br />
[2021-09-08 17:24:16] - TRADE : From Detroit Red Wings to Washington Capitals : Jaccob Slavin, Josh Harding, Andrew Cogliano, Liam Foudy.<br />
[2021-09-08 17:20:52] - TRADE : From Columbus Blue Jackets to Detroit Red Wings : Mirco Mueller, 1 000 000 $ (Salary Cap).<br />
[2021-09-08 17:20:52] - TRADE : From Detroit Red Wings to Columbus Blue Jackets : Oscar Klefbom.<br />
[2021-09-08 11:16:47] - Joakim Nygard was added to Florida Panthers.<br />
[2021-09-08 11:16:37] - Gemel Smith was added to Florida Panthers.<br />
[2021-09-08 11:16:27] - Peter Cehlarik was added to Florida Panthers.<br />
[2021-09-08 11:16:17] - Kelly Klima was added to Florida Panthers.<br />
[2021-09-08 11:16:06] - Seth Griffith was added to Florida Panthers.<br />
[2021-09-08 11:15:54] - Patrick Bjorkstrand was added to Florida Panthers.<br />
[2021-09-08 11:15:10] - Andrew MacDonald was added to New Jersey Devils.<br />
[2021-09-08 11:15:06] - Andrej Meszaros was added to New Jersey Devils.<br />
[2021-09-08 11:15:00] - Alex Velischek was added to New Jersey Devils.<br />
[2021-09-08 11:14:55] - Alex Grant was added to New Jersey Devils.<br />
[2021-09-08 11:14:43] - Alex Biega was added to New Jersey Devils.<br />
[2021-09-07 21:45:04] - TRADE : From Ottawa Senators to Detroit Red Wings : Brogan Rafferty, Y:2022-RND:3-OTT.<br />
[2021-09-07 21:45:04] - TRADE : From Detroit Red Wings to Ottawa Senators : Roman Josi.<br />
[2021-09-07 16:23:45] - TRADE : From Anaheim Ducks to Calgary Flames : Markus Nutivaara, Colton Point.<br />
[2021-09-07 16:23:45] - TRADE : From Calgary Flames to Anaheim Ducks : Alexander Nylander, Tyler Wotherspoon, Melvin Nyffeler, Y:2022-RND:4-VEG.<br />
[2021-09-07 08:56:15] - Michael Bournival was added to Buffalo Sabres.<br />
[2021-09-07 08:56:03] - Stefan Elliott was added to Buffalo Sabres.<br />
[2021-09-07 08:52:04] - Maxim Sushko was added to Los Angeles Kings.<br />
[2021-09-07 08:51:38] - Riley Tufte was added to Los Angeles Kings.<br />
[2021-09-07 08:51:22] - Ivan Lodnia was added to Los Angeles Kings.<br />
[2021-09-07 08:51:17] - Brent Gates was added to Los Angeles Kings.<br />
[2021-09-07 08:51:15] - Boris Katchouk was added to Los Angeles Kings.<br />
[2021-09-07 08:11:46] - TRADE : From Ottawa Senators to Calgary Flames : Y:2022-RND:3-DET.<br />
[2021-09-07 08:11:46] - TRADE : From Calgary Flames to Ottawa Senators : Nick Paul.<br />
[2021-09-07 08:09:15] - TRADE : From Carolina Hurricanes to Calgary Flames : Paul Byron, 3 000 000 $ (Salary Cap), Y:2023-RND:3-STL.<br />
[2021-09-07 08:09:15] - TRADE : From Calgary Flames to Carolina Hurricanes : Riley Barber, Jan Mysak (P).<br />
[2021-09-06 06:00:30] - Brycen Martin was added to Minnesota Wild.<br />
[2021-09-04 18:47:48] - Brian Lashoff was added to Philadelphia Flyers.<br />
[2021-09-04 18:47:40] - Jordie Benn was added to Philadelphia Flyers.<br />
[2021-09-04 18:47:31] - Peter Mueller was added to Philadelphia Flyers.<br />
[2021-09-04 18:47:21] - Kyle Okposo was added to Philadelphia Flyers.<br />
[2021-09-04 18:47:14] - Brendan Ranford was added to Philadelphia Flyers.<br />
[2021-09-04 18:47:05] - Nikita Filatov was added to Philadelphia Flyers.<br />
[2021-09-04 18:43:34] - Collin Delia was added to Detroit Red Wings.<br />
[2021-09-04 18:43:23] - Morgan Ellis was added to Detroit Red Wings.<br />
[2021-09-04 18:43:13] - Marcus Foligno was added to Detroit Red Wings.<br />
[2021-09-04 18:43:04] - Stefan Elliott was added to Detroit Red Wings.<br />
[2021-09-04 18:42:52] - Cody Eakin was added to Detroit Red Wings.<br />
[2021-09-04 18:42:43] - Kari Lehtonen was added to Detroit Red Wings.<br />
[2021-09-04 18:42:30] - Tom Kuhnhackl was added to Detroit Red Wings.<br />
[2021-09-04 18:42:16] - Martin Frk was added to Detroit Red Wings.<br />
[2021-09-04 18:42:04] - Alexander Semin was added to Detroit Red Wings.<br />
[2021-09-04 18:41:54] - John Moore was added to Detroit Red Wings.<br />
[2021-09-04 18:41:06] - Karl Alzner was added to Detroit Red Wings.<br />
[2021-09-04 18:40:54] - Jordan Martinook was added to Detroit Red Wings.<br />
[2021-09-04 18:40:42] - Jeff Carter was added to Detroit Red Wings.<br />
[2021-09-04 18:40:29] - Michael Bournival was added to Detroit Red Wings.<br />
[2021-09-04 18:40:19] - Dave Bolland was added to Detroit Red Wings.<br />
[2021-08-31 14:33:06] - Spencer Watson was added to Colorado Avalanche.<br />
[2021-08-31 14:17:07] - Shane Prince was added to Detroit Red Wings.<br />
[2021-08-31 14:16:15] - Darren Dietz was added to Vegas Golden Knights.<br />
[2021-08-31 14:16:07] - Casey Cizikas was added to Vegas Golden Knights.<br />
[2021-08-31 14:15:03] - Lean Bergmann was added to Vancouver Canucks.<br />
[2021-08-31 14:14:53] - MacKenzie MacEachern was added to Vancouver Canucks.<br />
[2021-08-30 05:49:30] - Morgan Frost was added to Calgary Flames.<br />
[2021-08-30 05:49:27] - Kody Clark was added to Calgary Flames.<br />
[2021-08-30 05:49:25] - Jakob Ragnarsson was added to Calgary Flames.<br />
[2021-08-28 07:14:13] - Ty Gallagher was added to Arizona Coyotes.<br />
[2021-08-28 07:14:11] - Max Jones was added to Arizona Coyotes.<br />
[2021-08-28 07:14:08] - Karma Stein was added to Arizona Coyotes.<br />
[2021-08-28 07:14:07] - Jack Matier was added to Arizona Coyotes.<br />
[2021-08-28 07:14:04] - Arturs Silovs was added to Arizona Coyotes.<br />
[2021-08-28 06:33:34] - TRADE : From St. Louis Blues to Vegas Golden Knights : Bernhard Ebner.<br />
[2021-08-28 06:33:34] - TRADE : From Vegas Golden Knights to St. Louis Blues : Michael Mersch, Cory Conacher.<br />
[2021-08-28 06:25:50] - Marcus Kruger was added to Tampa Bay Lightning.<br />
[2021-08-28 06:25:40] - Freddie Hamilton was added to Tampa Bay Lightning.<br />
[2021-08-26 06:09:07] - Mattias Janmark-Nylen was added to Seattle Kraken.<br />
[2021-08-26 06:08:55] - Matt Benning was added to Minnesota Wild.<br />
[2021-08-26 06:08:37] - Tomas Vincour was added to St. Louis Blues.<br />
[2021-08-26 06:08:24] - Joonas Donskoi was added to St. Louis Blues.<br />
[2021-08-26 06:08:09] - Gabriel Bourque was added to Montreal Canadiens.<br />
[2021-08-26 06:07:56] - Mark Katic was added to Detroit Red Wings.<br />
[2021-08-22 07:39:57] - Olivier Roy was added to Quebec Nordiques.<br />
[2021-08-22 07:39:45] - Alex Lyon was added to Seattle Kraken.<br />
[2021-08-22 07:39:33] - Mike Smith was added to Columbus Blue Jackets.<br />
[2021-08-22 07:39:20] - Nicklas Jensen was added to Vancouver Canucks.<br />
[2021-08-22 07:39:04] - Sean Kuraly was added to St. Louis Blues.<br />
[2021-08-22 07:35:56] - Jaydon Dureau was added to Nashville Predators.<br />
[2021-08-22 07:35:46] - Cole Clayton was added to Nashville Predators.<br />
[2021-08-22 07:34:57] - Austin Mitchell-King was added to Arizona Coyotes.<br />
[2021-08-22 07:34:46] - Gerald Mayhew was added to Arizona Coyotes.<br />
[2021-08-22 07:30:30] - Gerald Mayhew was added to Anaheim Ducks.<br />
[2021-08-22 07:29:41] - Shawn Element was added to Boston Bruins.<br />
[2021-08-22 07:28:47] - Jacob Christiansen was added to Boston Bruins.<br />
[2021-08-22 07:26:46] - Steven Fogarty was added to Boston Bruins.<br />
[2021-08-22 07:25:29] - Ryan Lomberg was added to Pittsburgh Penguins.<br />
[2021-08-22 07:23:43] - Jérémy Davies was added to Vancouver Canucks.<br />
[2021-08-19 06:12:06] - Kyle Turris was added to Montreal Canadiens.<br />
[2021-08-19 06:11:12] - Jakob Silfverberg was added to New Jersey Devils.<br />
[2021-08-19 06:10:16] - Anders Nilsson was added to Calgary Flames.<br />
[2021-08-19 06:09:09] - Brent Seabrook was added to Vegas Golden Knights.<br />
[2021-08-19 06:08:36] - Zach Parise was added to Ottawa Senators.<br />
[2021-08-19 06:07:34] - Quinton Howden was added to Vancouver Canucks.<br />
[2021-08-19 06:06:30] - David Rundblad was added to Philadelphia Flyers.<br />
[2021-08-19 06:05:28] - Josef Korenar was added to Pittsburgh Penguins.<br />
[2021-08-19 06:04:26] - Tobias Enstrom was added to Vancouver Canucks.<br />
[2021-08-19 06:03:13] - Tyler Bozak was added to Anaheim Ducks.<br />
[2021-08-19 06:02:32] - Kevin Rooney was added to Vegas Golden Knights.<br />
[2021-08-19 06:01:19] - Nikolai Knyzhov was added to Seattle Kraken.<br />
[2021-08-19 06:00:22] - Tomas Hyka was added to Montreal Canadiens.<br />
[2021-08-19 05:50:47] - TRADE : From Arizona Coyotes to Pittsburgh Penguins : Greg Meireles, Liam Kirk, Y:2022-RND:5-QUE.<br />
[2021-08-19 05:50:47] - TRADE : From Pittsburgh Penguins to Arizona Coyotes : 2 100 000 $ (Salary Cap), Y:2022-RND:7-PIT.<br />
[2021-08-18 05:15:08] - TRADE : From New York Islanders to Dallas Stars : Y:2022-RND:6-NYI.<br />
[2021-08-18 05:15:08] - TRADE : From Dallas Stars to New York Islanders : Ryan Hartman.<br />
[2021-08-18 05:12:23] - TRADE : From Minnesota Wild to Columbus Blue Jackets : Brandon McMillan, 2 000 000 $ (Money), Y:2023-RND:3-MIN.<br />
[2021-08-18 05:12:23] - TRADE : From Columbus Blue Jackets to Minnesota Wild : Y:2022-RND:7-CLB.<br />
[2021-08-17 05:36:31] - Max Golod was added to Boston Bruins.<br />
[2021-08-17 05:35:58] - Ryan McGregor was added to Boston Bruins.<br />
[2021-08-17 05:35:49] - Déreck Baribeau was added to Boston Bruins.<br />
[2021-08-17 05:33:44] - Travis Zajac was added to Dallas Stars.<br />
[2021-08-17 05:32:51] - Andrew Ladd was added to Dallas Stars.<br />
[2021-08-17 05:32:02] - Luke Witkowski was added to Vegas Golden Knights.<br />
[2021-08-17 05:28:00] - Brett Murray was added to Seattle Kraken.<br />
[2021-08-17 05:27:31] - Kole Sherwood was added to Montreal Canadiens.<br />
[2021-08-17 05:24:07] - Mathias From was added to Boston Bruins.<br />
[2021-08-17 05:23:41] - Curtis Hamilton was added to Dallas Stars.<br />
[2021-08-17 05:18:59] - Adam Almqvist was added to Calgary Flames.<br />
[2021-08-17 05:18:02] - Steven Lorentz was added to Toronto Maple Leafs.<br />
[2021-08-17 05:17:28] - Tucker Poolman was added to Tampa Bay Lightning.<br />
[2021-08-17 05:17:02] - Dominic Turgeon was added to Toronto Maple Leafs.<br />
[2021-08-17 05:15:46] - Benjamin Conz was added to Arizona Coyotes.<br />
[2021-08-17 05:15:07] - Zach Trotman was added to St. Louis Blues.<br />
[2021-08-17 05:14:37] - Sean Walker was added to Florida Panthers.<br />
[2021-08-17 05:13:47] - Marcus Hogberg was added to St. Louis Blues.<br />
[2021-08-17 05:12:48] - Kyle Capobianco was added to Toronto Maple Leafs.<br />
[2021-08-17 05:12:14] - Zack MacEwen was added to Arizona Coyotes.<br />
[2021-08-17 05:11:01] - James Neal was added to New Jersey Devils.<br />
[2021-08-17 05:09:12] - Alexander Radulov was added to Dallas Stars.<br />
[2021-08-17 05:08:27] - Raman Hrabarenka was added to Arizona Coyotes.<br />
[2021-08-17 05:05:20] - TRADE : From Ottawa Senators to St. Louis Blues : Keith Aulie.<br />
[2021-08-17 05:05:20] - TRADE : From St. Louis Blues to Ottawa Senators : Ben Chiarot, Y:2024-RND:3-STL.<br />
[2021-08-15 06:09:36] - TRADE : From Vegas Golden Knights to Quebec Nordiques : Y:2022-RND:4-TBL, Y:2023-RND:7-VEG, Y:2024-RND:6-VEG.<br />
[2021-08-15 06:09:36] - TRADE : From Quebec Nordiques to Vegas Golden Knights : 2 000 000 $ (Salary Cap), Y:2024-RND:4-QUE.<br />
[2021-08-14 07:19:42] - Chris Driedger was added to Vancouver Canucks.<br />
[2021-08-14 07:17:17] - Peter Delmas was added to Colorado Avalanche.<br />
[2021-08-14 07:16:58] - Simon Ryfors was added to Buffalo Sabres.<br />
[2021-08-14 07:16:38] - Duncan Keith was added to Philadelphia Flyers.<br />
[2021-08-14 07:16:15] - Josh Dunne was added to Nashville Predators.<br />
[2021-08-14 07:16:01] - Matt Kessel was added to Nashville Predators.<br />
[2021-08-14 07:15:49] - Morgan Barron was added to Nashville Predators.<br />
[2021-08-14 07:15:34] - Declan Chisholm was added to Boston Bruins.<br />
[2021-08-14 07:15:24] - Chad Yetman was added to Boston Bruins.<br />
[2021-08-14 07:15:14] - Damien Giroux was added to Boston Bruins.<br />
[2021-08-14 07:12:39] - Oskar Sundqvist was added to Calgary Flames.<br />
[2021-08-14 07:12:05] - Marian Studenic was added to Quebec Nordiques.<br />
[2021-08-14 07:09:58] - Joel Hanley was added to Florida Panthers.<br />
[2021-08-14 07:09:48] - Dominic Toninato was added to Florida Panthers.<br />
[2021-08-14 07:07:44] - Gregory Beron was added to Columbus Blue Jackets.<br />
[2021-08-14 07:07:20] - Parker Kelly was added to Seattle Kraken.<br />
[2021-08-14 07:06:57] - Michael Paliotta was added to St. Louis Blues.<br />
[2021-08-14 07:06:29] - Ralfs Freibergs was added to St. Louis Blues.<br />
[2021-08-14 07:03:45] - Johan Larsson was added to Philadelphia Flyers.<br />
[2021-08-14 07:02:51] - Austin Strand was added to Quebec Nordiques.<br />
[2021-08-14 07:00:25] - Kyle Clifford was added to Ottawa Senators.<br />
[2021-08-14 06:59:46] - Mikko Koskinen was added to Toronto Maple Leafs.<br />
[2021-08-14 06:59:00] - Lauri Korpikoski was added to Toronto Maple Leafs.<br />
[2021-08-14 06:55:46] - Rhett Gardner was added to Dallas Stars.<br />
[2021-08-14 06:52:59] - Ryan Kesler was added to Detroit Red Wings.<br />
[2021-08-14 06:50:22] - Cédric Paquette was added to Edmonton Oilers.<br />
[2021-08-13 05:39:57] - TRADE : From Carolina Hurricanes to Seattle Kraken : Tyson Jost.<br />
[2021-08-13 05:39:57] - TRADE : From Seattle Kraken to Carolina Hurricanes : John Quenneville, Ryan McLeod, Brendan Brisson (P).<br />
[2021-08-12 06:19:31] - TRADE : From Vegas Golden Knights to Seattle Kraken : Hunter Jones (P).<br />
[2021-08-12 06:19:31] - TRADE : From Seattle Kraken to Vegas Golden Knights : Daniel Vladar, Jakob Silfverberg, Y:2022-RND:4-TBL.<br />
[2021-08-12 06:17:30] - TRADE : From Seattle Kraken to Buffalo Sabres : Daniel Bernhardt, Greg McKegg.<br />
[2021-08-12 06:17:30] - TRADE : From Buffalo Sabres to Seattle Kraken : Tyson Baillie.<br />
[2021-08-12 06:16:19] - TRADE : From Nashville Predators to Toronto Maple Leafs : Christopher Gibson.<br />
[2021-08-12 06:16:19] - TRADE : From Toronto Maple Leafs to Nashville Predators : Zachary Fucale, Y:2022-RND:5-TBL.<br />
[2021-08-11 06:31:41] - TRADE : From Minnesota Wild to Seattle Kraken : Y:2022-RND:5-MIN.<br />
[2021-08-11 06:31:41] - TRADE : From Seattle Kraken to Minnesota Wild : Denis Godla.<br />
[2021-08-11 06:28:16] - Scott Darling was added to Philadelphia Flyers.<br />
[2021-08-11 06:27:06] - Alexis Shank was added to Montreal Canadiens.<br />
[2021-08-11 06:26:56] - Brett Budgell was added to Montreal Canadiens.<br />
[2021-08-11 06:26:44] - Mathieu Desgagnés was added to Montreal Canadiens.<br />
[2021-08-11 06:22:23] - Andrei Buyalsky was added to Arizona Coyotes.<br />
[2021-08-11 06:21:03] - Jeffrey Viel was added to Montreal Canadiens.<br />
[2021-08-11 06:19:19] - Sam Carrick was added to Minnesota Wild.<br />
[2021-08-11 06:17:33] - Steve Weinstein was added to St. Louis Blues.<br />
[2021-08-11 06:16:03] - Jerry D'Amigo was added to Pittsburgh Penguins.<br />
[2021-08-11 06:14:09] - Peter Stoykewych was added to St. Louis Blues.<br />
[2021-08-11 06:12:07] - Carson Soucy was added to Boston Bruins.<br />
[2021-08-11 06:09:34] - Ville Husso was added to Edmonton Oilers.<br />
[2021-08-11 06:07:22] - Marek Mazanec was added to Dallas Stars.<br />
[2021-08-11 06:07:11] - Connor Bunnaman was added to Seattle Kraken.<br />
[2021-08-11 06:03:20] - Tyler Johnson was added to Winnipeg Jets.<br />
[2021-08-08 10:27:52] - TRADE : From Boston Bruins to Montreal Canadiens : Y:2022-RND:7-BOS.<br />
[2021-08-08 10:27:52] - TRADE : From Montreal Canadiens to Boston Bruins : Patric Hornqvist, Y:2022-RND:2-MTL.<br />
[2021-08-07 07:32:20] - TRADE : From Buffalo Sabres to Pittsburgh Penguins : James Reimer, Janne Kuokkanen, Julius Nättinen.<br />
[2021-08-07 07:32:20] - TRADE : From Pittsburgh Penguins to Buffalo Sabres : Y:2023-RND:6-PIT.<br />
[2021-08-07 07:30:55] - TRADE : From Boston Bruins to Quebec Nordiques : John Carlson, Y:2023-RND:3-QUE.<br />
[2021-08-07 07:30:55] - TRADE : From Quebec Nordiques to Boston Bruins : Brett Kulak, Tobias Björnfot, Noel Gunler (P), Y:2022-RND:1-QUE, Y:2022-RND:3-NYR.<br />
[2021-08-06 21:23:02] - Patric Hornqvist was added to Montreal Canadiens.<br />
[2021-08-06 21:07:32] - Philipp Grubauer was added to Buffalo Sabres.<br />
[2021-08-06 21:02:56] - Phillip Di Giuseppe was added to Philadelphia Flyers.<br />
[2021-08-06 21:02:12] - Thomas Casey was added to Montreal Canadiens.<br />
[2021-08-06 20:56:46] - Charles-Olivier Roussel was added to Minnesota Wild.<br />
[2021-08-06 20:51:38] - Maximilian Veronneau was added to Boston Bruins.<br />
[2021-08-06 20:42:33] - Mike Hardman was added to Arizona Coyotes.<br />
[2021-08-06 20:39:21] - Logan O'Connor was added to Montreal Canadiens.<br />
[2021-08-06 20:28:54] - Jayson Megna was added to Pittsburgh Penguins.<br />
[2021-08-06 20:23:38] - Dylan McIlrath was added to Ottawa Senators.<br />
[2021-08-06 20:19:51] - Andrey Makarov was added to St. Louis Blues.<br />
[2021-08-06 20:16:30] - Pavel Francouz was added to Boston Bruins.<br />
[2021-08-06 20:06:56] - Alex Belzile was added to Columbus Blue Jackets.<br />
[2021-08-06 19:58:46] - Tomas Nosek was added to Vegas Golden Knights.<br />
[2021-08-06 19:43:10] - Blake Coleman was added to Quebec Nordiques.<br />
[2021-08-06 16:34:39] - TRADE : From Montreal Canadiens to Carolina Hurricanes : Sam Lafferty.<br />
[2021-08-06 16:34:39] - TRADE : From Carolina Hurricanes to Montreal Canadiens : Y:2023-RND:4-SEA.<br />
[2021-08-06 06:02:13] - TRADE : From Carolina Hurricanes to St. Louis Blues : Y:2024-RND:5-MTL.<br />
[2021-08-06 06:02:13] - TRADE : From St. Louis Blues to Carolina Hurricanes : Tomas Plekanec.<br />
[2021-08-05 14:47:26] - TRADE : From Chicago Blackhawks to Pittsburgh Penguins : Alexis Gravel, Y:2022-RND:4-WSH.<br />
[2021-08-05 14:47:26] - TRADE : From Pittsburgh Penguins to Chicago Blackhawks : Keith Kinkaid.<br />
[2021-08-05 06:06:58] - TRADE : From Ottawa Senators to St. Louis Blues : Ian McCoshen.<br />
[2021-08-05 06:06:58] - TRADE : From St. Louis Blues to Ottawa Senators : Chase De Leo.<br />
[2021-08-05 06:05:22] - TRADE : From Boston Bruins to Florida Panthers : Ondrej Kase, Dillon Dube, Mario Ferraro, K'Andre Miller (P), Michael Benning (P), Y:2022-RND:1-BOS, Y:2023-RND:2-BOS.<br />
[2021-08-05 06:05:22] - TRADE : From Florida Panthers to Boston Bruins : David Pastrnak.<br />
[2021-08-05 06:02:19] - TRADE : From Buffalo Sabres to San Jose Sharks : Y:2022-RND:3-STL.<br />
[2021-08-05 06:02:19] - TRADE : From San Jose Sharks to Buffalo Sabres : John Gibson.<br />
[2021-08-04 16:50:02] - Samuel Montembeault was added to Montreal Canadiens.<br />
[2021-08-04 16:49:59] - Oskari Laaksonen was added to Montreal Canadiens.<br />
[2021-08-04 16:49:52] - Michael Vukojevic was added to Montreal Canadiens.<br />
[2021-08-04 16:49:43] - Cal Petersen was added to Montreal Canadiens.<br />
[2021-08-04 11:52:24] - Vladislav Kotkov was added to Toronto Maple Leafs.<br />
[2021-08-04 11:52:20] - Matias Maccelli was added to Toronto Maple Leafs.<br />
[2021-08-04 11:52:16] - Joni Jurmo was added to Toronto Maple Leafs.<br />
[2021-08-04 11:02:33] - TRADE : From Montreal Canadiens to Calgary Flames : Blake Lizotte.<br />
[2021-08-04 11:02:33] - TRADE : From Calgary Flames to Montreal Canadiens : Tomas Tatar.<br />
[2021-08-04 07:42:21] - TRADE : From Vegas Golden Knights to Vancouver Canucks : Matt Grzelcyk, Y:2022-RND:6-VEG.<br />
[2021-08-04 07:42:21] - TRADE : From Vancouver Canucks to Vegas Golden Knights : Jack Studnicka (P), Y:2022-RND:3-NJD.<br />
[2021-08-04 06:28:32] - Simon Benoît was added to New Jersey Devils.<br />
[2021-08-04 06:28:17] - Jacob Middleton was added to New Jersey Devils.<br />
[2021-08-04 06:28:13] - Ivan Prosvetov was added to New Jersey Devils.<br />
[2021-08-04 06:16:50] - Cameron Clarke has been deleted from New Jersey Devils.<br />
[2021-08-04 06:16:47] - Matthew Mistele has been deleted from New Jersey Devils.<br />
[2021-08-04 06:16:42] - Viktor Crus-Rydberg has been deleted from New Jersey Devils.<br />
[2021-08-04 06:16:27] - Zach Whitecloud was added to New York Rangers.<br />
[2021-08-04 06:16:19] - Nick Robertson was added to New York Rangers.<br />
[2021-08-04 06:16:16] - Moritz Seider was added to New York Rangers.<br />
[2021-08-04 06:16:08] - Dawson Mercer was added to New York Rangers.<br />
[2021-08-03 16:53:46] - Samuel Asselin was added to Columbus Blue Jackets.<br />
[2021-08-03 16:53:43] - Riley Stillman was added to Columbus Blue Jackets.<br />
[2021-08-03 16:53:37] - Ben Mirageas was added to Columbus Blue Jackets.<br />
[2021-08-03 16:53:34] - Ben McCartney was added to Columbus Blue Jackets.<br />
[2021-08-03 14:48:33] - Vladislav Kolyachonok was added to Vegas Golden Knights.<br />
[2021-08-03 14:48:29] - Nathan Légaré was added to Vegas Golden Knights.<br />
[2021-08-03 14:48:25] - Lucas Feuk was added to Vegas Golden Knights.<br />
[2021-08-03 14:48:20] - Daniil Tarasov was added to Vegas Golden Knights.<br />
[2021-08-03 14:48:18] - Cole Schwindt was added to Vegas Golden Knights.<br />
[2021-08-03 13:24:50] - TRADE : From St. Louis Blues to Seattle Kraken : Devante Smith-Pelly.<br />
[2021-08-03 13:24:50] - TRADE : From Seattle Kraken to St. Louis Blues : Nikita Tryamkin.<br />
[2021-08-03 08:47:40] - Bryan Little was added to Winnipeg Jets.<br />
[2021-08-03 08:44:38] - Jarred Tinordi was added to Ottawa Senators.<br />
[2021-08-03 08:40:04] - T.J. Brennan was added to Toronto Maple Leafs.<br />
[2021-08-03 08:34:05] - Joseph Duszak was added to Montreal Canadiens.<br />
[2021-08-03 08:32:48] - Alexander Urbom was added to Dallas Stars.<br />
[2021-08-03 08:26:23] - Ryan Callahan was added to Edmonton Oilers.<br />
[2021-08-03 08:17:13] - Christopher Tanev was added to Quebec Nordiques.<br />
[2021-08-03 06:36:17] - Jesse Ylonen has been added to Toronto Maple Leafs.<br />
[2021-08-03 06:34:28] - Robin Salo has been added to Toronto Maple Leafs.<br />
[2021-08-03 05:47:51] - TRADE : From Seattle Kraken to Carolina Hurricanes : Reid McNeill, Ryan Haggerty, Paul Byron.<br />
[2021-08-03 05:47:51] - TRADE : From Carolina Hurricanes to Seattle Kraken : Jakob Silfverberg.<br />
[2021-07-30 06:19:32] - Patrick Moynihan was added to Tampa Bay Lightning.<br />
[2021-07-30 06:19:28] - Kaedan Korczak was added to Tampa Bay Lightning.<br />
[2021-07-30 06:19:24] - Braden Schneider was added to Tampa Bay Lightning.<br />
[2021-07-30 06:19:22] - Alex Newhook was added to Tampa Bay Lightning.<br />
[2021-07-30 05:52:58] - TRADE : From New York Rangers to Florida Panthers : Aleksander Barkov.<br />
[2021-07-30 05:52:58] - TRADE : From Florida Panthers to New York Rangers : Rasmus Sandin, Ryan Poehling, Pavel Zacha, Y:2022-RND:1-CHI.<br />
[2021-07-30 05:49:31] - TRADE : From Quebec Nordiques to Florida Panthers : Matthew Robertson (P).<br />
[2021-07-30 05:49:31] - TRADE : From Florida Panthers to Quebec Nordiques : Marc-Edouard Vlasic.<br />
[2021-07-30 05:48:21] - TRADE : From Buffalo Sabres to Florida Panthers : Carl Dahlstrom.<br />
[2021-07-30 05:48:21] - TRADE : From Florida Panthers to Buffalo Sabres : Kirill Maksimov (P).<br />
[2021-07-30 05:46:42] - TRADE : From Carolina Hurricanes to Seattle Kraken : Y:2023-RND:5-CAR.<br />
[2021-07-30 05:46:42] - TRADE : From Seattle Kraken to Carolina Hurricanes : Rihards Bukarts.<br />
[2021-07-29 06:42:50] - Trevor Zegras was added to Ottawa Senators.<br />
[2021-07-29 06:42:46] - Jack Gorniak was added to Ottawa Senators.<br />
[2021-07-29 06:42:44] - Brinson Pasichnuk was added to Ottawa Senators.<br />
[2021-07-29 06:42:40] - Aarne Talvitie was added to Ottawa Senators.<br />
[2021-07-29 06:06:01] - TRADE : From Carolina Hurricanes to Seattle Kraken : Y:2022-RND:4-VAN.<br />
[2021-07-29 06:06:01] - TRADE : From Seattle Kraken to Carolina Hurricanes : Peter Trainor.<br />
[2021-07-27 05:35:22] - TRADE : From Anaheim Ducks to Vegas Golden Knights : Mike Amadio.<br />
[2021-07-27 05:35:22] - TRADE : From Vegas Golden Knights to Anaheim Ducks : Stefan Noesen, 1 000 000 $ (Salary Cap).<br />
[2021-07-27 05:33:42] - TRADE : From Ottawa Senators to Carolina Hurricanes : Y:2024-RND:3-OTT.<br />
[2021-07-27 05:33:42] - TRADE : From Carolina Hurricanes to Ottawa Senators : Maxwell Reinhart.<br />
[2021-07-27 05:31:24] - TRADE : From Vegas Golden Knights to Carolina Hurricanes : Ryan Getzlaf.<br />
[2021-07-27 05:31:24] - TRADE : From Carolina Hurricanes to Vegas Golden Knights : Stefan Noesen, 2 000 000 $ (Salary Cap).<br />
[2021-07-26 05:11:39] - TRADE : From Carolina Hurricanes to Montreal Canadiens : Joni Ortio, Y:2024-RND:5-CAR.<br />
[2021-07-26 05:11:39] - TRADE : From Montreal Canadiens to Carolina Hurricanes : Y:2024-RND:5-MTL.<br />
[2021-07-25 07:00:23] - William Dufour was added to San Jose Sharks.<br />
[2021-07-25 07:00:21] - Mathieu Gagnon was added to San Jose Sharks.<br />
[2021-07-25 07:00:19] - Evan Nause was added to San Jose Sharks.<br />
[2021-07-25 05:37:07] - TRADE : From Seattle Kraken to Carolina Hurricanes : Ilya Lyubushkin, Y:2024-RND:3-SEA.<br />
[2021-07-25 05:37:07] - TRADE : From Carolina Hurricanes to Seattle Kraken : Patrik Nemeth, Stephen Johns.<br />
[2021-07-25 05:35:43] - TRADE : From Chicago Blackhawks to Carolina Hurricanes : Y:2023-RND:4-SEA.<br />
[2021-07-25 05:35:43] - TRADE : From Carolina Hurricanes to Chicago Blackhawks : Christian Thomas.<br />
[2021-07-25 05:33:35] - TRADE : From New York Islanders to Carolina Hurricanes : Brian Dumoulin, Y:2022-RND:3-CLB.<br />
[2021-07-25 05:33:35] - TRADE : From Carolina Hurricanes to New York Islanders : Daniel Carr.<br />
[2021-07-25 05:31:38] - TRADE : From Carolina Hurricanes to Chicago Blackhawks : Theo Peckham, Carter Ashton.<br />
[2021-07-25 05:31:38] - TRADE : From Chicago Blackhawks to Carolina Hurricanes : Nikita Gusev, Y:2022-RND:2-NJD.<br />
[2021-07-24 07:11:32] - Libor Hájek was added to Edmonton Oilers.<br />
[2021-07-24 07:11:15] - Shane Pinto was added to Edmonton Oilers.<br />
[2021-07-24 07:11:11] - Philip Tomasino was added to Edmonton Oilers.<br />
[2021-07-24 07:10:56] - Andrew Peeke was added to Edmonton Oilers.<br />
[2021-07-23 05:39:09] - TRADE : From Quebec Nordiques to Boston Bruins : Angelo Miceli, Y:2022-RND:3-SJS, Y:2023-RND:3-QUE.<br />
[2021-07-23 05:39:09] - TRADE : From Boston Bruins to Quebec Nordiques : Jamie Benn.<br />
[2021-07-23 05:37:51] - TRADE : From Quebec Nordiques to Minnesota Wild : Brendan Smith, Y:2023-RND:4-QUE.<br />
[2021-07-23 05:37:51] - TRADE : From Minnesota Wild to Quebec Nordiques : Shane Hanna, Y:2023-RND:2-MIN, Y:2023-RND:4-MIN.<br />
[2021-07-23 05:36:20] - TRADE : From Seattle Kraken to Toronto Maple Leafs : Anthony Stolarz, Otto Somppi.<br />
[2021-07-23 05:36:20] - TRADE : From Toronto Maple Leafs to Seattle Kraken : Kasperi Kapanen, Steve Mason.<br />
[2021-07-22 12:17:58] - TRADE : From St. Louis Blues to Detroit Red Wings : John Klingberg.<br />
[2021-07-22 12:17:58] - TRADE : From Detroit Red Wings to St. Louis Blues : Radek Faksa.<br />
[2021-07-22 05:48:47] - TRADE : From Winnipeg Jets to Buffalo Sabres : Mark Scheifele.<br />
[2021-07-22 05:48:47] - TRADE : From Buffalo Sabres to Winnipeg Jets : Luke Kunin, Alex Turcotte (P), Y:2022-RND:2-BUF.<br />
[2021-07-22 05:42:42] - TRADE : From Buffalo Sabres to New York Islanders : Charlie Coyle.<br />
[2021-07-22 05:42:42] - TRADE : From New York Islanders to Buffalo Sabres : Tyson Baillie, 1 000 000 $ (Salary Cap).<br />
[2021-07-22 05:36:53] - TRADE : From Seattle Kraken to New York Islanders : Y:2024-RND:5-SEA.<br />
[2021-07-22 05:36:53] - TRADE : From New York Islanders to Seattle Kraken : Lars Eller, Y:2022-RND:4-TBL.<br />
[2021-07-21 06:14:08] - TRADE : From Winnipeg Jets to Vegas Golden Knights : Alexander Burmistrov.<br />
[2021-07-21 06:14:08] - TRADE : From Vegas Golden Knights to Winnipeg Jets : Nikita Scherbak.<br />
[2021-07-20 06:17:19] - TRADE : From Vegas Golden Knights to Arizona Coyotes : Erik Johnson, William Karlsson, Y:2022-RND:5-VEG.<br />
[2021-07-20 06:17:19] - TRADE : From Arizona Coyotes to Vegas Golden Knights : Logan Couture, Brandon Gormley, Nikita Scherbak.<br />
[2021-07-19 21:26:32] - Isac Lundestrom has been added to Dallas Stars.<br />
[2021-07-19 21:24:32] - Givani Smith has been added to Dallas Stars.<br />
[2021-07-19 05:51:15] - Tyson Foerster was added to Dallas Stars.<br />
[2021-07-19 05:51:11] - Simon Bourque was added to Dallas Stars.<br />
[2021-07-19 05:51:05] - Martin Fehervary was added to Dallas Stars.<br />
[2021-07-19 05:50:58] - Anthony Richard was added to Dallas Stars.<br />
[2021-07-19 05:50:55] - Alexander True was added to Dallas Stars.<br />
[2021-07-18 17:03:17] - Mariooooooo Lemieuuuuuuuux has been deleted from Montreal Canadiens.<br />
[2021-07-18 17:03:10] - Alain La has been deleted from Montreal Canadiens.<br />
[2021-07-18 17:03:06] - Alain La has been added to Montreal Canadiens.<br />
[2021-07-18 17:01:49] - Mario Lemieux has been deleted from Montreal Canadiens.<br />
[2021-07-18 17:01:45] - Mariooooooo Lemieuuuuuuuux has been added to Montreal Canadiens.<br />
[2021-07-18 17:01:03] - Mario Lemieux has been added to Montreal Canadiens.<br />
[2021-07-18 16:32:27] - Matej Pekar was added to Florida Panthers.<br />
[2021-07-18 16:32:22] - Ryan Poehling was added to Florida Panthers.<br />
[2021-07-18 16:32:15] - Kyle Olson was added to Florida Panthers.<br />
[2021-07-18 16:32:10] - Brandon Coe was added to Florida Panthers.<br />
[2021-07-18 09:48:27] - Ty Emberson was added to Buffalo Sabres.<br />
[2021-07-18 09:48:25] - Tyler Tucker was added to Buffalo Sabres.<br />
[2021-07-18 09:48:21] - Yegor Korshkov was added to Buffalo Sabres.<br />
[2021-07-18 09:48:18] - Yegor Sokolov was added to Buffalo Sabres.<br />
[2021-07-18 09:48:06] - Alexandre Texier was added to Buffalo Sabres.<br />
[2021-07-18 09:09:51] - Tobias Björnfot was added to Quebec Nordiques.<br />
[2021-07-18 09:09:02] - Stelio Mattheos was added to Quebec Nordiques.<br />
[2021-07-18 09:08:57] - Morgan Geekie was added to Quebec Nordiques.<br />
[2021-07-18 09:08:50] - Jake Bean was added to Quebec Nordiques.<br />
[2021-07-18 09:08:46] - Filip Kral was added to Quebec Nordiques.<br />
[2021-07-18 06:50:09] - Dylan Gambrell was added to Carolina Hurricanes.<br />
[2021-07-18 06:50:05] - Eric Comrie was added to Carolina Hurricanes.<br />
[2021-07-17 15:13:05] - TRADE : From Carolina Hurricanes to Chicago Blackhawks : Tyler Benson, Y:2022-RND:2-ARZ.<br />
[2021-07-17 15:13:05] - TRADE : From Chicago Blackhawks to Carolina Hurricanes : Luca Sbisa, Y:2022-RND:1-OTT.<br />
[2021-07-17 14:31:11] - Fredrik Karlström* has been added to Philadelphia Flyers.<br />
[2021-07-17 14:28:37] - Nikita Popugaev* has been added to Philadelphia Flyers.<br />
[2021-07-17 07:28:08] - William Lockwood was added to Seattle Kraken.<br />
[2021-07-17 07:28:03] - Ryan McLeod was added to Seattle Kraken.<br />
[2021-07-17 07:27:55] - Adam Ruzicka was added to Seattle Kraken.<br />
[2021-07-16 13:06:27] - TRADE : From St. Louis Blues to Columbus Blue Jackets : Carl Gunnarsson.<br />
[2021-07-16 13:06:27] - TRADE : From Columbus Blue Jackets to St. Louis Blues : Niklas Hjalmarsson.<br />
[2021-07-16 13:06:05] - TRADE : From St. Louis Blues to Carolina Hurricanes : Kevin Poulin.<br />
[2021-07-16 13:06:05] - TRADE : From Carolina Hurricanes to St. Louis Blues : Carl Gunnarsson, Y:2023-RND:4-CAR, Y:2022-RND:5-WPG.<br />
[2021-07-16 13:05:33] - TRADE : From Winnipeg Jets to Montreal Canadiens : Jake Gardiner.<br />
[2021-07-16 13:05:33] - TRADE : From Montreal Canadiens to Winnipeg Jets : Tyler Cuma, Nicolas Deslauriers, Antoine Marcoux.<br />
[2021-07-16 13:05:15] - TRADE : From St. Louis Blues to Montreal Canadiens : Y:2024-RND:2-STL, Y:2025-RND:3-STL.<br />
[2021-07-16 13:05:15] - TRADE : From Montreal Canadiens to St. Louis Blues : Ondrej Pavelec.<br />
[2021-07-14 22:08:14] - Jimmy Lodge has been deleted from St. Louis Blues.<br />
[2021-07-14 22:08:06] - Vincent Dunn has been deleted from St. Louis Blues.<br />
[2021-07-14 22:08:00] - Zack Nastasiuk has been deleted from St. Louis Blues.<br />
[2021-07-14 22:07:33] - Axel Rindell has been added to Toronto Maple Leafs.<br />
[2021-07-14 22:07:03] - Florian Elias has been added to Montreal Canadiens.<br />
[2021-07-14 22:06:33] - Arvid Söderblom has been added to Pittsburgh Penguins.<br />
[2021-07-14 22:05:56] - Robert Orr has been added to Vegas Golden Knights.<br />
[2021-07-14 22:05:37] - Noah Meier has been added to Colorado Avalanche.<br />
[2021-07-14 22:05:21] - Charle Truchon has been added to New Jersey Devils.<br />
[2021-07-14 22:05:05] - Alex Limoges has been added to Pittsburgh Penguins.<br />
[2021-07-14 22:04:49] - Luke Mittelstadt has been added to Florida Panthers.<br />
[2021-07-14 22:04:14] - Ryan Mast has been added to Philadelphia Flyers.<br />
[2021-07-14 22:03:26] - Ilya Safonov has been added to Colorado Avalanche.<br />
[2021-07-14 22:02:58] - Ilya Nazarov has been added to St. Louis Blues.<br />
[2021-07-14 22:02:20] - Jakub Brabenec has been added to Boston Bruins.<br />
[2021-07-14 22:01:52] - Zakhar Bardakov has been added to Montreal Canadiens.<br />
[2021-07-14 22:01:13] - Lorenzo Canonica has been added to Columbus Blue Jackets.<br />
[2021-07-14 22:00:50] - Dylan Coghlan has been added to Nashville Predators.<br />
[2021-07-14 21:59:43] - Mathias Emilio Pettersen has been added to Vegas Golden Knights.<br />
[2021-07-14 21:58:56] - Jake Martin has been added to Vegas Golden Knights.<br />
[2021-07-14 21:58:37] - Kyle Masters has been added to Vegas Golden Knights.<br />
[2021-07-14 21:58:15] - Albert Sjöberg has been added to Edmonton Oilers.<br />
[2021-07-14 21:57:43] - Isaak Phillips has been added to Montreal Canadiens.<br />
[2021-07-14 21:57:01] - Karma Stein has been added to Arizona Coyotes.<br />
[2021-07-14 21:56:45] - Guillaume Richard has been added to Vegas Golden Knights.<br />
[2021-07-14 21:56:31] - Pavel Gogolev has been added to Vegas Golden Knights.<br />
[2021-07-14 21:56:04] - Lucas Forsell has been added to St. Louis Blues.<br />
[2021-07-14 21:55:40] - Jack Matier has been added to Arizona Coyotes.<br />
[2021-07-14 21:55:10] - Manix Landry has been added to New Jersey Devils.<br />
[2021-07-14 21:54:51] - Ty Voit has been added to Quebec Nordiques.<br />
[2021-07-14 21:54:21] - Vladislav Lukashevich has been added to Vegas Golden Knights.<br />
[2021-07-14 21:53:45] - Avery Hayes has been added to St. Louis Blues.<br />
[2021-07-14 21:53:16] - Akito Hirose has been added to St. Louis Blues.<br />
[2021-07-14 21:52:54] - Cameron MacDonald has been added to Washington Capitals.<br />
[2021-07-14 21:52:18] - Martin Rysavy  has been added to Montreal Canadiens.<br />
[2021-07-14 21:52:03] - Adam Scheel has been added to St. Louis Blues.<br />
[2021-07-14 21:50:50] - Ilya Fedotov has been added to Winnipeg Jets.<br />
[2021-07-14 21:50:14] - Ryan St. Louis has been added to Montreal Canadiens.<br />
[2021-07-14 21:49:43] - Marc McLaughlin has been added to St. Louis Blues.<br />
[2021-07-14 21:49:19] - Lucas Ciona has been added to New York Islanders.<br />
[2021-07-14 21:48:57] - Josh Lopina has been added to New York Islanders.<br />
[2021-07-14 21:48:28] - Jackson Blake has been added to Montreal Canadiens.<br />
[2021-07-14 21:47:55] - Niko Huuhtanen has been added to Seattle Kraken.<br />
[2021-07-14 21:47:20] - Liam Gilmartin has been added to Florida Panthers.<br />
[2021-07-14 21:46:53] - Dmitri Kuzmin has been added to Boston Bruins.<br />
[2021-07-14 21:46:14] - Viljami Marjala has been added to Boston Bruins.<br />
[2021-07-14 21:45:50] - Patrik Hamrla has been added to San Jose Sharks.<br />
[2021-07-14 21:45:20] - Isaac Belliveau has been added to Boston Bruins.<br />
[2021-07-14 21:44:49] - Ethan Del Mastro has been added to Montreal Canadiens.<br />
[2021-07-14 21:44:09] - Daniil Tarasov has been added to Vegas Golden Knights.<br />
[2021-07-14 21:42:56] - Ben McCartney has been added to Columbus Blue Jackets.<br />
[2021-07-14 21:42:28] - James Malatesta has been added to Columbus Blue Jackets.<br />
[2021-07-14 21:41:59] - Sasha Teleguine has been added to Philadelphia Flyers.<br />
[2021-07-14 21:41:35] - Connor Kurth has been added to Quebec Nordiques.<br />
[2021-07-14 21:41:00] - Liam Dower Nilsson has been added to Edmonton Oilers.<br />
[2021-07-14 21:40:28] - Matvei Petrov has been added to Pittsburgh Penguins.<br />
[2021-07-14 21:39:31] - Peter Reynolds has been added to Montreal Canadiens.<br />
[2021-07-14 21:39:07] - Dovar Tinling has been added to Quebec Nordiques.<br />
[2021-07-14 21:38:35] - Zach Whitecloud has been added to New York Rangers.<br />
[2021-07-14 21:38:07] - Jayden Grubbe has been added to Seattle Kraken.<br />
[2021-07-14 21:37:37] - Jake Chiasson has been added to Seattle Kraken.<br />
[2021-07-14 21:36:47] - Sean Tschigerl has been added to Seattle Kraken.<br />
[2021-07-14 21:36:08] - Cole Jordan has been added to Vegas Golden Knights.<br />
[2021-07-14 21:35:30] - Dmitri Kostenko has been added to Columbus Blue Jackets.<br />
[2021-07-14 21:35:09] - Brady Lyle has been added to Detroit Red Wings.<br />
[2021-07-14 21:33:39] - Olen Zellweger has been deleted from New York Rangers.<br />
[2021-07-14 21:33:20] - Josh Doan has been added to Columbus Blue Jackets.<br />
[2021-07-14 21:32:47] - Trevor Wong has been added to Vegas Golden Knights.<br />
[2021-07-14 21:32:24] - Mason Lohrei has been added to Montreal Canadiens.<br />
[2021-07-14 21:31:54] - Nolan Allan has been added to Columbus Blue Jackets.<br />
[2021-07-14 21:07:36] - TRADE : From Columbus Blue Jackets to Vegas Golden Knights : Y:2022-RND:5-VEG.<br />
[2021-07-14 21:07:36] - TRADE : From Vegas Golden Knights to Columbus Blue Jackets : Y:2021-RND:5-CGY.<br />
[2021-07-14 20:36:33] - TRADE : From Pittsburgh Penguins to Los Angeles Kings : Y:2022-RND:5-OTT.<br />
[2021-07-14 20:36:33] - TRADE : From Los Angeles Kings to Pittsburgh Penguins : Y:2021-RND:5-COL, Y:2021-RND:5-LOS.<br />
[2021-07-14 20:27:11] - TRADE : From St. Louis Blues to Los Angeles Kings : Y:2023-RND:4-STL.<br />
[2021-07-14 20:27:11] - TRADE : From Los Angeles Kings to St. Louis Blues : Y:2021-RND:4-LOS.<br />
[2021-07-14 20:17:56] - TRADE : From Los Angeles Kings to Montreal Canadiens : Y:2021-RND:4-MTL.<br />
[2021-07-14 20:17:56] - TRADE : From Montreal Canadiens to Los Angeles Kings : Y:2023-RND:4-NSH.<br />
[2021-07-14 19:20:31] - TRADE : From Calgary Flames to Boston Bruins : Y:2021-RND:4-CLB.<br />
[2021-07-14 19:20:31] - TRADE : From Boston Bruins to Calgary Flames : Y:2022-RND:4-BOS.<br />
[2021-07-14 19:18:41] - TRADE : From Calgary Flames to Seattle Kraken : Y:2021-RND:4-NJD.<br />
[2021-07-14 19:18:41] - TRADE : From Seattle Kraken to Calgary Flames : Y:2022-RND:4-VEG.<br />
[2021-07-14 17:17:36] - TRADE : From Seattle Kraken to Vegas Golden Knights : Y:2021-RND:5-ANH, Y:2021-RND:5-BUF.<br />
[2021-07-14 17:17:36] - TRADE : From Vegas Golden Knights to Seattle Kraken : Y:2021-RND:4-COL.<br />
[2021-07-14 17:16:50] - TRADE : From Quebec Nordiques to Arizona Coyotes : Y:2021-RND:5-DET, Y:2021-RND:5-TBL.<br />
[2021-07-14 17:16:50] - TRADE : From Arizona Coyotes to Quebec Nordiques : Y:2022-RND:4-TOR.<br />
[2021-07-14 17:15:50] - TRADE : From Nashville Predators to Montreal Canadiens : Mikael Backlund, Y:2023-RND:4-NSH.<br />
[2021-07-14 17:15:50] - TRADE : From Montreal Canadiens to Nashville Predators : Louis Crevier (P).<br />
[2021-07-14 17:15:09] - TRADE : From Vancouver Canucks to Montreal Canadiens : Y:2021-RND:5-QUE.<br />
[2021-07-14 17:15:09] - TRADE : From Montreal Canadiens to Vancouver Canucks : Y:2022-RND:5-NYI.<br />
[2021-07-14 12:50:11] - TRADE : From Anaheim Ducks to Columbus Blue Jackets : Y:2021-RND:4-ANH, Y:2021-RND:4-BUF, Y:2021-RND:4-NSH.<br />
[2021-07-14 12:50:11] - TRADE : From Columbus Blue Jackets to Anaheim Ducks : Y:2023-RND:3-COL, Y:2022-RND:4-CLB, Y:2022-RND:5-CLB.<br />
[2021-07-14 07:03:10] - TRADE : From Montreal Canadiens to Quebec Nordiques : Y:2021-RND:4-SEA, Y:2022-RND:3-SJS.<br />
[2021-07-14 07:03:10] - TRADE : From Quebec Nordiques to Montreal Canadiens : Y:2021-RND:4-QUE.<br />
[2021-07-14 05:17:03] - TRADE : From Minnesota Wild to Vegas Golden Knights : Y:2021-RND:5-MIN.<br />
[2021-07-14 05:17:03] - TRADE : From Vegas Golden Knights to Minnesota Wild : Kris Russell.<br />
[2021-07-14 05:13:47] - TRADE : From Washington Capitals to Vegas Golden Knights : Y:2021-RND:4-WSH.<br />
[2021-07-14 05:13:47] - TRADE : From Vegas Golden Knights to Washington Capitals : Y:2022-RND:4-OTT.<br />
[2021-07-14 05:11:18] - TRADE : From Ottawa Senators to Vegas Golden Knights : Y:2021-RND:4-DAL, Y:2022-RND:4-OTT.<br />
[2021-07-14 05:11:18] - TRADE : From Vegas Golden Knights to Ottawa Senators : Tanner Jeannot.<br />
[2021-07-13 20:46:16] - Alex Geci has been added to Ottawa Senators.<br />
[2021-07-13 20:45:20] - Zack Ostapchuk has been added to Chicago Blackhawks.<br />
[2021-07-13 20:44:49] - Jack Bar has been added to Columbus Blue Jackets.<br />
[2021-07-13 20:44:17] - Alexei Kolosov has been added to Buffalo Sabres.<br />
[2021-07-13 20:43:47] - Cal Petersen has been added to Montreal Canadiens.<br />
[2021-07-13 20:43:10] - Eric Alarie has been added to Minnesota Wild.<br />
[2021-07-13 20:42:44] - Yevgeni Kashnikov has been added to Ottawa Senators.<br />
[2021-07-13 20:42:17] - Riley Kidney has been added to Ottawa Senators.<br />
[2021-07-13 20:41:32] - Victor Stjernborg has been added to Columbus Blue Jackets.<br />
[2021-07-13 20:40:56] - Olivier Nadeau has been added to Colorado Avalanche.<br />
[2021-07-13 20:40:18] - Ryan Ufko has been added to Quebec Nordiques.<br />
[2021-07-13 20:39:35] - Vincent Iorio has been added to St. Louis Blues.<br />
[2021-07-13 20:39:02] - Hugo Gabrielson has been added to St. Louis Blues.<br />
[2021-07-13 20:38:20] - Elliot Desnoyers has been added to Montreal Canadiens.<br />
[2021-07-13 20:37:46] - Red Savage has been added to Buffalo Sabres.<br />
[2021-07-13 20:37:09] - Thomas Milic has been added to Florida Panthers.<br />
[2021-07-13 20:29:19] - Dmitri Katelevsky has been added to Vancouver Canucks.<br />
[2021-07-13 20:28:52] - Ryan Winterton has been added to Boston Bruins.<br />
[2021-07-13 20:27:40] - Kirill Gerasimyuk has been added to St. Louis Blues.<br />
[2021-07-13 20:27:11] - Ty Gallagher has been added to Arizona Coyotes.<br />
[2021-07-13 20:26:43] - Aidan Hreschuk has been added to St. Louis Blues.<br />
[2021-07-13 20:26:06] - Joshua Roy has been added to Montreal Canadiens.<br />
[2021-07-13 20:25:17] - Artyom Grushnikov has been added to Dallas Stars.<br />
[2021-07-13 20:24:52] - Logan Mailloux has been added to Ottawa Senators.<br />
[2021-07-13 20:24:24] - Tristan Broz has been added to Winnipeg Jets.<br />
[2021-07-13 20:23:56] - Benjamin Gaudreau has been added to Quebec Nordiques.<br />
[2021-07-13 20:23:25] - Roman Schmidt has been added to Ottawa Senators.<br />
[2021-07-13 20:22:51] - Matthew Gleason has been added to St. Louis Blues.<br />
[2021-07-13 20:22:06] - Cameron Whynot has been added to Chicago Blackhawks.<br />
[2021-07-13 20:21:36] - Oliver Kapanen has been added to Nashville Predators.<br />
[2021-07-13 20:21:06] - Tyler Boucher has been added to Buffalo Sabres.<br />
[2021-07-13 20:20:28] - Elmer Söderblom has been added to Montreal Canadiens.<br />
[2021-07-13 20:19:56] - Jack Peart has been added to Quebec Nordiques.<br />
[2021-07-13 20:17:51] - Conner Roulette has been added to Nashville Predators.<br />
[2021-07-13 17:51:50] - Prokhor Poltapov has been added to Chicago Blackhawks.<br />
[2021-07-13 17:48:32] - Eetu Liukas has been added to St. Louis Blues.<br />
[2021-07-13 17:47:10] - Tristan Lennox has been added to Quebec Nordiques.<br />
[2021-07-13 17:44:45] - Samu Salminen has been added to Los Angeles Kings.<br />
[2021-07-13 17:43:46] - Anton Olsson has been added to Calgary Flames.<br />
[2021-07-13 17:42:49] - Caedan Bankier has been added to Arizona Coyotes.<br />
[2021-07-13 17:41:47] - Chase Stillman has been added to Quebec Nordiques.<br />
[2021-07-13 17:40:52] - Brent Johnson has been added to Dallas Stars.<br />
[2021-07-13 17:39:48] - Cole Huckins has been added to Vancouver Canucks.<br />
[2021-07-13 17:38:43] - Samuel Helenius has been added to Dallas Stars.<br />
[2021-07-13 17:37:34] - Colton Dach has been added to Arizona Coyotes.<br />
[2021-07-13 17:20:28] - Aleksi Heimosalmi has been added to Calgary Flames.<br />
[2021-07-13 17:00:07] - Danila Klimovich has been added to Montreal Canadiens.<br />
[2021-07-13 16:36:05] - Zach Dean has been added to Dallas Stars.<br />
[2021-07-13 16:34:29] - Scott Morrow has been added to Calgary Flames.<br />
[2021-07-13 16:32:22] - Ryder Korczak has been added to St. Louis Blues.<br />
[2021-07-13 16:31:01] - Brett Harrison has been added to Boston Bruins.<br />
[2021-07-13 16:14:05] - Ayrton Martino has been added to Montreal Canadiens.<br />
[2021-07-13 16:12:25] - Olen Zellweger has been added to New York Rangers.<br />
[2021-07-13 16:10:59] - Jordan Kawaguchi has been added to St. Louis Blues.<br />
[2021-07-13 16:10:10] - Matthew Samoskevich has been added to Quebec Nordiques.<br />
[2021-07-13 16:09:18] - Odeen Tufto has been added to St. Louis Blues.<br />
[2021-07-13 16:03:19] - TRADE : From Buffalo Sabres to Seattle Kraken : Y:2022-RND:4-VEG.<br />
[2021-07-13 16:03:19] - TRADE : From Seattle Kraken to Buffalo Sabres : Jan Rutta.<br />
[2021-07-13 16:01:42] - TRADE : From Buffalo Sabres to Pittsburgh Penguins : Y:2022-RND:3-BOS.<br />
[2021-07-13 16:01:42] - TRADE : From Pittsburgh Penguins to Buffalo Sabres : Y:2021-RND:3-LOS.<br />
[2021-07-13 16:00:53] - TRADE : From Los Angeles Kings to Pittsburgh Penguins : Jordan Staal, Y:2021-RND:3-LOS.<br />
[2021-07-13 16:00:53] - TRADE : From Pittsburgh Penguins to Los Angeles Kings : Y:2022-RND:2-CLB.<br />
[2021-07-13 15:56:18] - TRADE : From Buffalo Sabres to Calgary Flames : Y:2022-RND:3-TOR, Y:2022-RND:4-BUF.<br />
[2021-07-13 15:56:18] - TRADE : From Calgary Flames to Buffalo Sabres : Y:2021-RND:3-CGY.<br />
[2021-07-13 15:51:46] - TRADE : From Seattle Kraken to Calgary Flames : Eric Robinson.<br />
[2021-07-13 15:51:46] - TRADE : From Calgary Flames to Seattle Kraken : Ilya Lyubushkin, Y:2021-RND:4-VAN, Y:2021-RND:4-DET.<br />
[2021-07-13 07:28:05] - Oskar Olausson has been added to Dallas Stars.<br />
[2021-07-13 07:27:36] - Matt Kiersted has been added to St. Louis Blues.<br />
[2021-07-13 07:27:08] - Xavier Bourgault has been added to St. Louis Blues.<br />
[2021-07-13 07:26:41] - Stanislav Svozil has been added to Boston Bruins.<br />
[2021-07-13 07:26:01] - Isak Rosén has been added to Tampa Bay Lightning.<br />
[2021-07-13 07:25:08] - Sean Behrens has been added to Quebec Nordiques.<br />
[2021-07-13 07:24:44] - Evan Nause has been added to San Jose Sharks.<br />
[2021-07-13 07:24:18] - Alexander Kisakov has been added to Los Angeles Kings.<br />
[2021-07-13 07:23:47] - Brennan Othmann has been added to Minnesota Wild.<br />
[2021-07-13 07:23:16] - Corson Ceulemans has been added to Montreal Canadiens.<br />
[2021-07-13 07:22:52] - Logan Stankoven has been added to Montreal Canadiens.<br />
[2021-07-13 07:22:21] - Zachary Bolduc has been added to St. Louis Blues.<br />
[2021-07-13 07:21:53] - Zachary L'Heureux has been added to St. Louis Blues.<br />
[2021-07-13 07:21:31] - Matthew Knies has been added to St. Louis Blues.<br />
[2021-07-13 07:21:05] - Nikita Chibrikov has been added to Tampa Bay Lightning.<br />
[2021-07-13 07:20:33] - Samu Tuomaala has been added to Toronto Maple Leafs.<br />
[2021-07-13 07:20:00] - Carson Lambos has been added to Dallas Stars.<br />
[2021-07-13 07:19:28] - Yegor Chinakhov has been added to Buffalo Sabres.<br />
[2021-07-13 07:18:38] - Matthew Coronato has been added to Montreal Canadiens.<br />
[2021-07-13 07:18:09] - Cole Sillinger has been added to Vegas Golden Knights.<br />
[2021-07-13 07:17:18] - Aatu Räty has been added to Edmonton Oilers.<br />
[2021-07-13 07:16:17] - Francesco Pinelli has been added to Quebec Nordiques.<br />
[2021-07-13 07:15:21] - Chaz Lucius has been added to Tampa Bay Lightning.<br />
[2021-07-13 07:14:16] - Fabian Lysell has been added to Vancouver Canucks.<br />
[2021-07-13 07:12:43] - Kent Johnson has been added to Vegas Golden Knights.<br />
[2021-07-13 07:12:13] - Jesper Wallstedt has been added to Dallas Stars.<br />
[2021-07-13 07:11:45] - Simon Edvinsson has been added to Dallas Stars.<br />
[2021-07-13 07:11:19] - Luke Hughes has been added to Quebec Nordiques.<br />
[2021-07-13 07:10:49] - William Eklund has been added to Detroit Red Wings.<br />
[2021-07-13 07:10:23] - Matthew Beniers has been added to Chicago Blackhawks.<br />
[2021-07-13 07:09:51] - Mason McTavish has been added to Boston Bruins.<br />
[2021-07-13 07:08:50] - Brandt Clarke has been added to Washington Capitals.<br />
[2021-07-13 07:08:17] - Daniil Chayka has been added to Pittsburgh Penguins.<br />
[2021-07-13 07:06:38] - Dylan Duke has been added to Pittsburgh Penguins.<br />
[2021-07-13 07:05:59] - Ville Koivunen has been added to Pittsburgh Penguins.<br />
[2021-07-13 07:05:14] - Sasha Pastujov has been added to Pittsburgh Penguins.<br />
[2021-07-13 07:04:42] - Fyodor Svechkov has been added to Pittsburgh Penguins.<br />
[2021-07-13 07:04:13] - Dylan Guenther has been added to Pittsburgh Penguins.<br />
[2021-07-13 07:03:15] - Shai Buium has been added to New York Rangers.<br />
[2021-07-13 07:02:10] - Olen Zellweger has been added to New York Rangers.<br />
[2021-07-13 07:01:34] - Sebastian Cossa has been added to New York Rangers.<br />
[2021-07-13 07:00:19] - Justin Robidas has been added to Columbus Blue Jackets.<br />
[2021-07-13 06:59:52] - Kirill Kirsanov has been added to Columbus Blue Jackets.<br />
[2021-07-13 06:58:53] - William Strömgren has been added to Carolina Hurricanes.<br />
[2021-07-13 06:58:08] - Simon Robertsson has been added to Carolina Hurricanes.<br />
[2021-07-13 06:57:12] - Wyatt Johnston has been added to Anaheim Ducks.<br />
[2021-07-13 06:55:49] - Owen Power has been added to Anaheim Ducks.<br />
[2021-07-13 06:47:25] - TRADE : From Ottawa Senators to Washington Capitals : Y:2022-RND:3-PHI.<br />
[2021-07-13 06:47:25] - TRADE : From Washington Capitals to Ottawa Senators : Y:2021-RND:3-NJD.<br />
[2021-07-13 06:45:41] - TRADE : From Ottawa Senators to Seattle Kraken : Y:2021-RND:5-ANH, Y:2022-RND:4-NYI.<br />
[2021-07-13 06:45:41] - TRADE : From Seattle Kraken to Ottawa Senators : Y:2021-RND:3-MTL.<br />
[2021-07-12 19:19:40] - TRADE : From Vegas Golden Knights to Ottawa Senators : Y:2021-RND:3-COL.<br />
[2021-07-12 19:19:40] - TRADE : From Ottawa Senators to Vegas Golden Knights : Y:2021-RND:4-COL, Y:2021-RND:4-CGY.<br />
[2021-07-12 09:43:09] - TRADE : From Pittsburgh Penguins to Chicago Blackhawks : Y:2022-RND:2-NJD.<br />
[2021-07-12 09:43:09] - TRADE : From Chicago Blackhawks to Pittsburgh Penguins : Y:2021-RND:2-CHI.<br />
[2021-07-12 09:28:27] - TRADE : From Seattle Kraken to Quebec Nordiques : Y:2021-RND:1-TOR.<br />
[2021-07-12 09:28:27] - TRADE : From Quebec Nordiques to Seattle Kraken : Ryan McLeod (P).<br />
[2021-07-12 09:27:19] - TRADE : From Arizona Coyotes to Quebec Nordiques : Petr Mrazek, Y:2021-RND:5-DAL.<br />
[2021-07-12 09:27:19] - TRADE : From Quebec Nordiques to Arizona Coyotes : Y:2022-RND:5-QUE.<br />
[2021-07-12 09:26:37] - TRADE : From Arizona Coyotes to Tampa Bay Lightning : Eric Staal.<br />
[2021-07-12 09:26:37] - TRADE : From Tampa Bay Lightning to Arizona Coyotes : Y:2021-RND:5-DAL.<br />
[2021-07-12 09:17:26] - TRADE : From Quebec Nordiques to Florida Panthers : Y:2022-RND:2-QUE.<br />
[2021-07-12 09:17:26] - TRADE : From Florida Panthers to Quebec Nordiques : Y:2021-RND:2-WPG.<br />
[2021-07-12 09:17:06] - TRADE : From Boston Bruins to Florida Panthers : Y:2023-RND:1-BOS.<br />
[2021-07-12 09:17:06] - TRADE : From Florida Panthers to Boston Bruins : Y:2021-RND:2-TBL, Y:2021-RND:2-WSH.<br />
[2021-07-12 06:17:17] - TRADE : From Seattle Kraken to New York Islanders : Yan-Pavel Laplante.<br />
[2021-07-12 06:17:17] - TRADE : From New York Islanders to Seattle Kraken : Ryan Suter, Y:2021-RND:5-BUF.<br />
[2021-07-11 07:36:09] - TRADE : From Arizona Coyotes to New York Islanders : Ryan Suter, Cole Cassels, Y:2021-RND:5-BUF.<br />
[2021-07-11 07:36:09] - TRADE : From New York Islanders to Arizona Coyotes : Nikita Scherbak, Y:2022-RND:4-TOR.<br />
[2021-07-10 18:35:25] - TRADE : From Tampa Bay Lightning to Quebec Nordiques : Y:2021-RND:1-TBL, Y:2021-RND:3-DET, Y:2022-RND:3-NYR.<br />
[2021-07-10 18:35:25] - TRADE : From Quebec Nordiques to Tampa Bay Lightning : Y:2021-RND:1-BOS, Y:2021-RND:2-QUE.<br />
[2021-07-10 18:32:37] - TRADE : From Carolina Hurricanes to Vegas Golden Knights : Y:2021-RND:1-DET.<br />
[2021-07-10 18:32:37] - TRADE : From Vegas Golden Knights to Carolina Hurricanes : Y:2021-RND:1-SEA, Y:2023-RND:2-VEG.<br />
[2021-07-10 18:29:45] - TRADE : From Carolina Hurricanes to St. Louis Blues : Y:2021-RND:3-STL, Y:2021-RND:5-CAR.<br />
[2021-07-10 18:29:45] - TRADE : From St. Louis Blues to Carolina Hurricanes : Y:2023-RND:2-STL.<br />
[2021-07-10 18:25:47] - TRADE : From Vegas Golden Knights to Buffalo Sabres : Alexandre Texier (P).<br />
[2021-07-10 18:25:47] - TRADE : From Buffalo Sabres to Vegas Golden Knights : Y:2021-RND:1-SJS, Y:2021-RND:3-COL.<br />
[2021-07-10 18:21:50] - TRADE : From Dallas Stars to Buffalo Sabres : Kaiden Guhle (P).<br />
[2021-07-10 18:21:50] - TRADE : From Buffalo Sabres to Dallas Stars : Y:2021-RND:1-NSH.<br />
[2021-07-10 10:33:47] - TRADE : From Carolina Hurricanes to Dallas Stars : Y:2021-RND:1-OTT.<br />
[2021-07-10 10:33:47] - TRADE : From Dallas Stars to Carolina Hurricanes : Y:2021-RND:1-DET, Y:2022-RND:4-DAL, Y:2022-RND:2-DAL.<br />
[2021-07-10 10:31:19] - TRADE : From Carolina Hurricanes to Detroit Red Wings : Y:2021-RND:1-CAR.<br />
[2021-07-10 10:31:19] - TRADE : From Detroit Red Wings to Carolina Hurricanes : Y:2021-RND:1-OTT, Y:2022-RND:2-DET, Y:2022-RND:4-DET.<br />
[2021-07-10 10:28:01] - TRADE : From St. Louis Blues to Carolina Hurricanes : Y:2022-RND:2-ANH.<br />
[2021-07-10 10:28:01] - TRADE : From Carolina Hurricanes to St. Louis Blues : Y:2021-RND:3-SJS.<br />
[2021-07-10 10:21:39] - TRADE : From St. Louis Blues to Vegas Golden Knights : David Gustafsson, Y:2021-RND:1-SEA.<br />
[2021-07-10 10:21:39] - TRADE : From Vegas Golden Knights to St. Louis Blues : Morgan Klimchuk, Y:2021-RND:3-BOS, Y:2021-RND:5-VAN.<br />
[2021-07-10 10:16:10] - TRADE : From Carolina Hurricanes to Vegas Golden Knights : Y:2021-RND:5-CGY, Y:2021-RND:5-NYR, Y:2021-RND:5-SEA, Y:2021-RND:5-SJS.<br />
[2021-07-10 10:16:10] - TRADE : From Vegas Golden Knights to Carolina Hurricanes : Y:2023-RND:3-STL, Y:2024-RND:3-VEG.<br />
[2021-07-08 18:27:57] - TRADE : From Calgary Flames to St. Louis Blues : Y:2021-RND:1-SEA, Y:2021-RND:2-TOR.<br />
[2021-07-08 18:27:57] - TRADE : From St. Louis Blues to Calgary Flames : Y:2022-RND:1-STL, Y:2023-RND:1-STL, Y:2022-RND:2-STL.<br />
[2021-07-08 05:24:43] - TRADE : From Ottawa Senators to Vegas Golden Knights : German Rubtsov.<br />
[2021-07-08 05:24:43] - TRADE : From Vegas Golden Knights to Ottawa Senators : Tyler Biggs, Y:2021-RND:3-NYR, Y:2021-RND:5-ANH.<br />
[2021-07-07 21:56:31] - TRADE : From Tampa Bay Lightning to New York Islanders : Darcy Kuemper.<br />
[2021-07-07 21:56:31] - TRADE : From New York Islanders to Tampa Bay Lightning : Y:2022-RND:3-NYI, Y:2023-RND:4-NYI.<br />
[2021-07-07 21:13:36] - TRADE : From Ottawa Senators to Carolina Hurricanes : Evan Rodrigues.<br />
[2021-07-07 21:13:36] - TRADE : From Carolina Hurricanes to Ottawa Senators : Y:2022-RND:4-ANH, Y:2022-RND:4-PHI.<br />
[2021-07-07 12:57:38] - TRADE : From Seattle Kraken to Tampa Bay Lightning : Y:2021-RND:5-DAL, Y:2023-RND:2-SEA.<br />
[2021-07-07 12:57:38] - TRADE : From Tampa Bay Lightning to Seattle Kraken : Anthony Stolarz.<br />
[2021-07-07 12:56:10] - TRADE : From Winnipeg Jets to Montreal Canadiens : Brent Burns.<br />
[2021-07-07 12:56:10] - TRADE : From Montreal Canadiens to Winnipeg Jets : Y:2022-RND:3-COL.<br />
[2021-07-07 12:53:28] - TRADE : From Tampa Bay Lightning to Seattle Kraken : Brayden Schenn.<br />
[2021-07-07 12:53:28] - TRADE : From Seattle Kraken to Tampa Bay Lightning : Y:2021-RND:3-DET, Y:2022-RND:3-ARZ.<br />
[2021-07-07 06:10:07] - TRADE : From Vancouver Canucks to Dallas Stars : Darren Helm.<br />
[2021-07-07 06:10:07] - TRADE : From Dallas Stars to Vancouver Canucks : Y:2022-RND:5-DAL, Y:2023-RND:4-DAL.<br />
[2021-07-07 06:09:45] - TRADE : From Buffalo Sabres to Seattle Kraken : Jaedon Descheneau, Y:2021-RND:1-TOR.<br />
[2021-07-07 06:09:45] - TRADE : From Seattle Kraken to Buffalo Sabres : Janne Kuokkanen, Y:2021-RND:1-SJS, Y:2021-RND:3-COL, Y:2022-RND:3-BOS.<br />
[2021-07-07 06:08:15] - TRADE : From Buffalo Sabres to Toronto Maple Leafs : Kristian Vesalainen (P), Y:2021-RND:5-TOR.<br />
[2021-07-07 06:08:15] - TRADE : From Toronto Maple Leafs to Buffalo Sabres : Filip Hallander (P), Y:2021-RND:1-TOR, Y:2022-RND:3-TOR.<br />
[2021-07-07 06:07:19] - TRADE : From Seattle Kraken to Vegas Golden Knights : Matt Grzelcyk.<br />
[2021-07-07 06:07:19] - TRADE : From Vegas Golden Knights to Seattle Kraken : Y:2021-RND:3-MTL, Y:2021-RND:3-COL, Y:2022-RND:3-BOS, Y:2023-RND:5-VEG.<br />
[2021-07-07 06:03:02] - TRADE : From Tampa Bay Lightning to Montreal Canadiens : Topi Niemela (P), Y:2023-RND:2-BUF.<br />
[2021-07-07 06:03:02] - TRADE : From Montreal Canadiens to Tampa Bay Lightning : Braden Schneider (P).<br />
[2021-07-07 06:02:40] - TRADE : From Colorado Avalanche to Montreal Canadiens : Y:2025-RND:5-COL.<br />
[2021-07-07 06:02:40] - TRADE : From Montreal Canadiens to Colorado Avalanche : Arsen Khisamutdinov (P), Jesper Sellgren (P).<br />
[2021-07-07 06:02:04] - TRADE : From Nashville Predators to Florida Panthers : Oliver Bjorkstrand, Marc-Andre Bourdon, Anton Lundell (P), Ryan Johnson (P), Y:2022-RND:1-NSH, Y:2021-RND:3-NSH.<br />
[2021-07-07 06:02:04] - TRADE : From Florida Panthers to Nashville Predators : Nikita Kucherov.<br />
[2021-07-06 04:22:21] - TRADE : From Florida Panthers to Chicago Blackhawks : Nick Bjugstad, Y:2021-RND:3-ANH.<br />
[2021-07-06 04:22:21] - TRADE : From Chicago Blackhawks to Florida Panthers : Y:2022-RND:1-CHI.<br />
[2021-07-05 12:56:13] - TRADE : From Dallas Stars to Ottawa Senators : Y:2021-RND:4-CGY, Y:2021-RND:4-COL, Y:2021-RND:4-DAL.<br />
[2021-07-05 12:56:13] - TRADE : From Ottawa Senators to Dallas Stars : Y:2021-RND:2-BUF.<br />
[2021-07-05 06:44:54] - Lane Zablocki has been deleted from Dallas Stars.<br />
[2021-07-05 06:44:50] - Hunter Smith has been deleted from Dallas Stars.<br />
[2021-07-05 06:44:32] - TRADE : From New York Islanders to Toronto Maple Leafs : Jyrki Jokipakka.<br />
[2021-07-05 06:44:32] - TRADE : From Toronto Maple Leafs to New York Islanders : Y:2022-RND:4-TOR.<br />
[2021-07-05 06:42:43] - Adam Brooks was added to Dallas Stars.<br />
[2021-07-04 08:30:55] - TRADE : From New York Rangers to New York Islanders : Jesper Bratt, Griffin Reinhart, Y:2023-RND:2-NYR.<br />
[2021-07-04 08:30:55] - TRADE : From New York Islanders to New York Rangers : Jason Robertson, Evan Bouchard (P), Jacob Bernard-Docker (P).<br />
[2021-07-03 20:41:57] - TRADE : From Minnesota Wild to Montreal Canadiens : Y:2021-RND:4-TBL.<br />
[2021-07-03 20:41:57] - TRADE : From Montreal Canadiens to Minnesota Wild : Christian Wolanin, Curtis Douglas, Nolan Stevens, Matteson Iacopelli.<br />
[2021-07-03 07:29:45] - TRADE : From Ottawa Senators to St. Louis Blues : Y:2021-RND:5-NYI, Y:2021-RND:5-OTT, Y:2021-RND:5-STL.<br />
[2021-07-03 07:29:45] - TRADE : From St. Louis Blues to Ottawa Senators : Y:2022-RND:3-PHI, Y:2022-RND:5-NJD.<br />
[2021-07-03 07:18:22] - Tuukka Rask was added to Columbus Blue Jackets.<br />
[2021-07-03 07:18:08] - Kyle Palmieri was added to Quebec Nordiques.<br />
[2021-07-02 16:43:53] - TRADE : From San Jose Sharks to Quebec Nordiques : Paul Stastny, Y:2021-RND:3-CLB.<br />
[2021-07-02 16:43:53] - TRADE : From Quebec Nordiques to San Jose Sharks : Y:2021-RND:4-STL.<br />
[2021-07-02 13:52:38] - TRADE : From Anaheim Ducks to Vegas Golden Knights : Y:2021-RND:3-COL, Y:2021-RND:5-ANH.<br />
[2021-07-02 13:52:38] - TRADE : From Vegas Golden Knights to Anaheim Ducks : Oscar Dansk.<br />
[2021-07-02 05:11:50] - TRADE : From Seattle Kraken to Columbus Blue Jackets : Samuel Asselin (P), Y:2021-RND:2-MTL.<br />
[2021-07-02 05:11:50] - TRADE : From Columbus Blue Jackets to Seattle Kraken : Jakub Voracek.<br />
[2021-07-01 18:03:39] - TRADE : From New Jersey Devils to Quebec Nordiques : Y:2022-RND:4-NJD.<br />
[2021-07-01 18:03:39] - TRADE : From Quebec Nordiques to New Jersey Devils : Y:2021-RND:5-MTL.<br />
[2021-07-01 06:24:18] - TRADE : From Minnesota Wild to Quebec Nordiques : James Van Riemsdyk, Y:2022-RND:3-MIN.<br />
[2021-07-01 06:24:18] - TRADE : From Quebec Nordiques to Minnesota Wild : Lane Pederson.<br />
[2021-06-30 08:22:07] - TRADE : From Minnesota Wild to Montreal Canadiens : Y:2021-RND:1-MIN.<br />
[2021-06-30 08:22:07] - TRADE : From Montreal Canadiens to Minnesota Wild : Alex Ovechkin.<br />
[2021-06-30 08:21:39] - TRADE : From Columbus Blue Jackets to Buffalo Sabres : Y:2021-RND:5-TOR.<br />
[2021-06-30 08:21:39] - TRADE : From Buffalo Sabres to Columbus Blue Jackets : Jakub Voracek, 1 000 000 $ (Salary Cap).<br />
[2021-06-30 08:21:01] - TRADE : From Columbus Blue Jackets to Vegas Golden Knights : Logan Shaw.<br />
[2021-06-30 08:21:01] - TRADE : From Vegas Golden Knights to Columbus Blue Jackets : Y:2021-RND:4-NYI.<br />
[2021-06-30 08:20:38] - TRADE : From Carolina Hurricanes to New York Rangers : Y:2021-RND:1-FLA, Y:2022-RND:2-VEG.<br />
[2021-06-30 08:20:38] - TRADE : From New York Rangers to Carolina Hurricanes : Tyson Jost, Y:2021-RND:3-SJS, Y:2021-RND:5-NYR.<br />
[2021-06-30 08:13:00] - TRADE : From Arizona Coyotes to Anaheim Ducks : John Tavares, 3 500 000 $ (Salary Cap).<br />
[2021-06-30 08:13:00] - TRADE : From Anaheim Ducks to Arizona Coyotes : Vitali Kravtsov (P), Y:2023-RND:1-ANH, Y:2021-RND:3-EDM, Y:2021-RND:5-BUF.<br />
[2021-06-30 08:11:50] - TRADE : From Los Angeles Kings to Montreal Canadiens : Nolan Stevens, Samuel Montembeault (P), Y:2021-RND:1-VEG, Y:2021-RND:3-ARZ.<br />
[2021-06-30 08:11:50] - TRADE : From Montreal Canadiens to Los Angeles Kings : Ilya Samsonov.<br />
[2021-06-30 08:11:15] - TRADE : From Carolina Hurricanes to Vegas Golden Knights : Y:2021-RND:4-NYI, Y:2021-RND:5-PIT, Y:2021-RND:5-VAN.<br />
[2021-06-30 08:11:15] - TRADE : From Vegas Golden Knights to Carolina Hurricanes : Brock Nelson.<br />
[2021-06-30 08:10:33] - TRADE : From Vegas Golden Knights to Montreal Canadiens : Patric Hornqvist, Y:2021-RND:4-WPG, Y:2022-RND:5-NYI.<br />
[2021-06-30 08:10:33] - TRADE : From Montreal Canadiens to Vegas Golden Knights : Y:2022-RND:3-BOS.<br />
[2021-06-30 08:09:48] - TRADE : From Seattle Kraken to Montreal Canadiens : Y:2021-RND:3-WSH, Y:2021-RND:5-WPG.<br />
[2021-06-30 08:09:48] - TRADE : From Montreal Canadiens to Seattle Kraken : Jan Rutta.<br />
[2021-06-30 08:09:22] - TRADE : From Buffalo Sabres to Montreal Canadiens : Y:2021-RND:3-PIT.<br />
[2021-06-30 08:09:22] - TRADE : From Montreal Canadiens to Buffalo Sabres : Y:2022-RND:3-VAN.<br />
[2021-06-30 08:08:59] - TRADE : From Detroit Red Wings to Montreal Canadiens : Jayden Struble (P), Y:2021-RND:1-COL, Y:2022-RND:2-MTL.<br />
[2021-06-30 08:08:59] - TRADE : From Montreal Canadiens to Detroit Red Wings : Evgeni Malkin.<br />
[2021-06-28 22:47:26] - Brandon Saigeon has been deleted from Buffalo Sabres.<br />
[2021-05-29 06:50:42] - Cédric Desruisseaux was added to Montreal Canadiens.<br />
[2021-05-29 06:42:14] - Artyom Zub was added to Montreal Canadiens.<br />
[2021-05-02 20:12:44] - Robin Press was added to Buffalo Sabres.<br />
[2021-04-29 05:27:17] - Nikolas Brouillard was added to Detroit Red Wings.<br />
[2021-04-27 18:50:44] - Vinni Lettieri was added to Seattle Kraken.<br />
[2021-04-27 18:50:35] - Otto Somppi was added to Seattle Kraken.<br />
[2021-04-27 18:49:45] - John Gibson was added to San Jose Sharks.<br />
[2021-04-27 18:49:45] - Anthony Angello was added to Calgary Flames.<br />
[2021-04-26 19:00:12] - Corey Schueneman was added to Seattle Kraken.<br />
[2021-04-26 18:59:52] - Anthony Angello was added to Seattle Kraken.<br />
[2021-04-26 18:41:20] - Logan Stanley was added to Washington Capitals.<br />
[2021-04-24 18:22:15] - Dylan Cozens was added to New York Rangers.<br />
[2021-04-24 05:31:18] - Wyatt Kalynuk was added to Florida Panthers.<br />
[2021-04-24 04:42:41] - Daniel Audette was added to Dallas Stars.<br />
[2021-04-23 18:41:27] - Jeff Malott was added to Vegas Golden Knights.<br />
[2021-04-22 22:57:17] - TRADE : From Nashville Predators to Quebec Nordiques : Angelo Miceli, Y:2021-RND:5-TBL.<br />
[2021-04-22 22:57:17] - TRADE : From Quebec Nordiques to Nashville Predators : Tyler Motte.<br />
[2021-04-22 22:50:10] - Alex Stalock was added to New Jersey Devils.<br />
[2021-04-22 22:38:15] - TRADE : From Carolina Hurricanes to Seattle Kraken : Yevgeni Svechnikov, Brendan Brisson (P), Y:2021-RND:1-SJS, Y:2021-RND:2-MTL.<br />
[2021-04-22 22:38:15] - TRADE : From Seattle Kraken to Carolina Hurricanes : Evgeny Kuznetsov, Y:2022-RND:2-ARZ, Y:2022-RND:2-VEG.<br />
[2021-04-22 22:34:05] - TRADE : From Nashville Predators to New York Rangers : Conor Timmins (P), Eamon Powell (P).<br />
[2021-04-22 22:34:05] - TRADE : From New York Rangers to Nashville Predators : Adam Pelech, 500 000 $ (Salary Cap), Y:2021-RND:5-TBL.<br />
[2021-04-22 22:27:37] - TRADE : From New Jersey Devils to Quebec Nordiques : Y:2021-RND:2-DET.<br />
[2021-04-22 22:27:37] - TRADE : From Quebec Nordiques to New Jersey Devils : Ilya Kovalchuk.<br />
[2021-04-22 22:26:29] - TRADE : From Vancouver Canucks to Winnipeg Jets : Y:2023-RND:5-VAN.<br />
[2021-04-22 22:26:29] - TRADE : From Winnipeg Jets to Vancouver Canucks : Adam Brooks, Y:2024-RND:5-WPG.<br />
[2021-04-22 22:24:11] - TRADE : From Tampa Bay Lightning to Boston Bruins : Joonas Donskoi, Ludwig Blomstrand.<br />
[2021-04-22 22:21:18] - TRADE : From Boston Bruins to Tampa Bay Lightning : Spencer Knight.<br />
[2021-04-22 22:21:18] - TRADE : From Tampa Bay Lightning to Boston Bruins : K'Andre Miller (P), Y:2021-RND:3-MIN.<br />
[2021-04-22 22:19:24] - TRADE : From Tampa Bay Lightning to New York Rangers : Andrey Vasilevskiy, Drew Commesso (P), Y:2021-RND:2-MIN.<br />
[2021-04-22 22:19:24] - TRADE : From New York Rangers to Tampa Bay Lightning : Alexander Wennberg, Anthony Stolarz, Ty Dellandrea, K'Andre Miller (P), Y:2021-RND:1-NYR, Y:2022-RND:3-NYR.<br />
[2021-04-22 22:12:41] - TRADE : From Detroit Red Wings to Montreal Canadiens : Chandler Stephenson.<br />
[2021-04-22 22:12:41] - TRADE : From Montreal Canadiens to Detroit Red Wings : Y:2022-RND:2-MTL.<br />
[2021-04-22 22:08:40] - TRADE : From Dallas Stars to Calgary Flames : Tomas Tatar.<br />
[2021-04-22 22:08:40] - TRADE : From Calgary Flames to Dallas Stars : Brandon Pirri, Oliver Suni (P), Y:2021-RND:2-FLA.<br />
[2021-04-22 21:46:42] - TRADE : From Colorado Avalanche to Detroit Red Wings : Hendrix Lapierre (P), Y:2021-RND:1-COL.<br />
[2021-04-22 21:46:42] - TRADE : From Detroit Red Wings to Colorado Avalanche : Vyacheslav Voynov, Y:2021-RND:3-PHI.<br />
[2021-04-22 21:46:16] - TRADE : From Ottawa Senators to Winnipeg Jets : Y:2022-RND:3-VEG.<br />
[2021-04-22 21:46:16] - TRADE : From Winnipeg Jets to Ottawa Senators : Noah Rod.<br />
[2021-04-22 21:30:38] - TRADE : From Florida Panthers to Seattle Kraken : Samuel Asselin (P).<br />
[2021-04-22 21:30:38] - TRADE : From Seattle Kraken to Florida Panthers : Oskar Sundqvist.<br />
[2021-04-22 21:25:44] - TRADE : From Calgary Flames to Philadelphia Flyers : Pierre-Luc Dubois, Seth Jarvis (P).<br />
[2021-04-22 21:25:44] - TRADE : From Philadelphia Flyers to Calgary Flames : Matt Duchene, Y:2024-RND:3-PHI.<br />
[2021-04-22 21:22:57] - TRADE : From Winnipeg Jets to Ottawa Senators : Maxim Groshev (P).<br />
[2021-04-22 21:22:57] - TRADE : From Ottawa Senators to Winnipeg Jets : Jason Spezza.<br />
[2021-04-22 21:20:58] - TRADE : From Montreal Canadiens to Seattle Kraken : Alexander Gordin (P).<br />
[2021-04-22 21:20:58] - TRADE : From Seattle Kraken to Montreal Canadiens : David Griger.<br />
[2021-04-22 21:15:19] - TRADE : From Boston Bruins to New Jersey Devils : William Nylander.<br />
[2021-04-22 21:15:19] - TRADE : From New Jersey Devils to Boston Bruins : Ondrej Kase, Spencer Knight, Y:2021-RND:1-NJD, Y:2021-RND:4-PHI.<br />
[2021-04-22 21:01:20] - TRADE : From Ottawa Senators to New York Rangers : Jakob Chychrun, Tyson Jost.<br />
[2021-04-22 21:01:20] - TRADE : From New York Rangers to Ottawa Senators : Robert Thomas, Ethan Bear, Michael Grabner, Y:2022-RND:3-VEG.<br />
[2021-04-22 20:57:48] - TRADE : From St. Louis Blues to Carolina Hurricanes : Olle Eriksson-Ek (P), Y:2021-RND:1-FLA, Y:2021-RND:3-STL.<br />
[2021-04-22 20:57:48] - TRADE : From Carolina Hurricanes to St. Louis Blues : Y:2022-RND:2-STL, Y:2022-RND:2-ANH, Y:2022-RND:3-PHI.<br />
[2021-04-22 20:40:48] - TRADE : From Anaheim Ducks to Arizona Coyotes : Sam Bennett.<br />
[2021-04-22 20:40:48] - TRADE : From Arizona Coyotes to Anaheim Ducks : Brendan Leipsic, Erik Brannstrom (P), Y:2023-RND:2-ARZ.<br />
[2021-04-22 20:37:51] - TRADE : From Pittsburgh Penguins to Vegas Golden Knights : Kris Letang, Vinny Saponari, Anton Stralman, 1 700 000 $ (Salary Cap), Y:2021-RND:3-MTL.<br />
[2021-04-22 20:37:51] - TRADE : From Vegas Golden Knights to Pittsburgh Penguins : Troy Stecher, Mac Weegar, Zachary Senyshyn, Y:2021-RND:1-NYI, Y:2021-RND:2-PHI.<br />
[2021-04-22 20:29:10] - TRADE : From Washington Capitals to Toronto Maple Leafs : Saku Maenalanen.<br />
[2021-04-22 20:29:10] - TRADE : From Toronto Maple Leafs to Washington Capitals : Y:2022-RND:2-TOR.<br />
[2021-04-22 20:17:33] - TRADE : From Calgary Flames to Winnipeg Jets : Milan Lucic.<br />
[2021-04-22 20:17:33] - TRADE : From Winnipeg Jets to Calgary Flames : Jakob Ragnarsson (P), Y:2021-RND:4-DET.<br />
[2021-04-22 20:00:56] - TRADE : From Pittsburgh Penguins to Washington Capitals : Michael Rasmussen, Alex Goligoski, Y:2022-RND:1-PHI.<br />
[2021-04-22 20:00:56] - TRADE : From Washington Capitals to Pittsburgh Penguins : Michael Matheson, Anthony DeAngelo.<br />
[2021-04-22 19:50:21] - TRADE : From Ottawa Senators to St. Louis Blues : David Gustafsson, Victor Söderström (P).<br />
[2021-04-22 19:50:21] - TRADE : From St. Louis Blues to Ottawa Senators : Jake Sanderson (P), Y:2021-RND:2-BUF.<br />
[2021-04-22 19:42:10] - TRADE : From Philadelphia Flyers to St. Louis Blues : Kevin Poulin, 1 000 000 $ (Salary Cap).<br />
[2021-04-22 19:42:10] - TRADE : From St. Louis Blues to Philadelphia Flyers : Tuukka Rask, Y:2021-RND:4-MIN.<br />
[2021-04-22 19:41:01] - TRADE : From Buffalo Sabres to Detroit Red Wings : Timur Bilyalov.<br />
[2021-04-22 19:41:01] - TRADE : From Detroit Red Wings to Buffalo Sabres : Dylan Sikura, Y:2021-RND:3-PIT.<br />
[2021-04-22 19:15:34] - TRADE : From Minnesota Wild to Columbus Blue Jackets : Steve Weinstein, Y:2022-RND:2-MIN.<br />
[2021-04-22 19:15:34] - TRADE : From Columbus Blue Jackets to Minnesota Wild : Ondrej Palat.<br />
[2021-04-22 12:02:39] - TRADE : From Montreal Canadiens to Buffalo Sabres : Egor Sokolov (P), Tyler Tucker (P).<br />
[2021-04-22 12:02:39] - TRADE : From Buffalo Sabres to Montreal Canadiens : Slater Koekkoek.<br />
[2021-04-22 10:49:35] - TRADE : From Montreal Canadiens to Minnesota Wild : Karl Alzner.<br />
[2021-04-22 10:49:35] - TRADE : From Minnesota Wild to Montreal Canadiens : Jay Beagle, Y:2021-RND:4-ARZ.<br />
[2021-04-22 10:37:30] - TRADE : From Washington Capitals to Nashville Predators : Colton Parayko, 1 000 000 $ (Salary Cap), Y:2021-RND:3-CAR.<br />
[2021-04-22 10:37:30] - TRADE : From Nashville Predators to Washington Capitals : Bode Wilde, Jaret Anderson-Dolan (P), Y:2022-RND:2-NSH.<br />
[2021-04-22 10:32:30] - TRADE : From New York Rangers to San Jose Sharks : Dylan McIlrath, 750 000 $ (Salary Cap).<br />
[2021-04-22 10:32:30] - TRADE : From San Jose Sharks to New York Rangers : Jean-Sébastien Dea, Y:2023-RND:2-SJS.<br />
[2021-04-22 10:31:12] - TRADE : From New Jersey Devils to San Jose Sharks : Luke Schenn, 1 250 000 $ (Salary Cap).<br />
[2021-04-22 10:31:12] - TRADE : From San Jose Sharks to New Jersey Devils : Y:2021-RND:2-DET, Y:2023-RND:2-PIT.<br />
[2021-04-22 10:30:37] - TRADE : From Calgary Flames to Dallas Stars : Olivier Roy, Y:2021-RND:4-CGY.<br />
[2021-04-22 10:30:37] - TRADE : From Dallas Stars to Calgary Flames : Phillip Di Giuseppe.<br />
[2021-04-22 06:02:28] - TRADE : From New Jersey Devils to Vancouver Canucks : Michael Leighton, Y:2022-RND:3-NJD.<br />
[2021-04-22 06:02:28] - TRADE : From Vancouver Canucks to New Jersey Devils : Cory Schneider.<br />
[2021-04-22 06:01:57] - TRADE : From New York Islanders to Montreal Canadiens : Carter Verhaeghe, Braden Schneider (P), Y:2022-RND:1-CLB.<br />
[2021-04-22 06:01:57] - TRADE : From Montreal Canadiens to New York Islanders : Evan Bouchard (P), Mattias Norlinder (P), Domenick Fensore (P).<br />
[2021-04-22 06:01:02] - TRADE : From Ottawa Senators to San Jose Sharks : Zach Parise, 2 000 000 $ (Salary Cap).<br />
[2021-04-22 06:01:02] - TRADE : From San Jose Sharks to Ottawa Senators : Connor McClennon (P), Y:2023-RND:4-SJS.<br />
[2021-04-22 06:00:34] - TRADE : From Seattle Kraken to Arizona Coyotes : Max Jones (P).<br />
[2021-04-22 06:00:34] - TRADE : From Arizona Coyotes to Seattle Kraken : Adam Ruzicka (P), Y:2022-RND:2-ARZ.<br />
[2021-04-22 05:59:51] - TRADE : From Chicago Blackhawks to Ottawa Senators : Erik Karlsson.<br />
[2021-04-22 05:59:51] - TRADE : From Ottawa Senators to Chicago Blackhawks : Brayden McNabb, Bowen Byram (P), Y:2022-RND:1-OTT.<br />
[2021-04-22 05:59:06] - TRADE : From Washington Capitals to Florida Panthers : Pavel Zacha, Jacob De La Rose, Y:2021-RND:2-WSH.<br />
[2021-04-22 05:59:06] - TRADE : From Florida Panthers to Washington Capitals : Quinton Howden, Philip Broberg (P), Sean Farrell (P).<br />
[2021-04-22 05:58:25] - TRADE : From Detroit Red Wings to Vancouver Canucks : Loui Eriksson.<br />
[2021-04-22 05:58:25] - TRADE : From Vancouver Canucks to Detroit Red Wings : Y:2021-RND:4-OTT, Y:2022-RND:5-ARZ.<br />
[2021-04-22 05:58:00] - TRADE : From Arizona Coyotes to Quebec Nordiques : David Kampf, Morgan Geekie (P), Y:2024-RND:4-ARZ.<br />
[2021-04-22 05:58:00] - TRADE : From Quebec Nordiques to Arizona Coyotes : T.J. Oshie, 2 000 000 $ (Salary Cap).<br />
[2021-04-22 05:57:14] - TRADE : From Detroit Red Wings to Florida Panthers : Ryan O'Reilly.<br />
[2021-04-22 05:57:14] - TRADE : From Florida Panthers to Detroit Red Wings : Radek Faksa, Josh Anderson, Liam Foudy, Jean-Luc Foudy (P), Y:2022-RND:2-DET.<br />
[2021-04-22 05:56:46] - TRADE : From Philadelphia Flyers to Winnipeg Jets : Blake Wheeler, 3 000 000 $ (Salary Cap).<br />
[2021-04-22 05:56:46] - TRADE : From Winnipeg Jets to Philadelphia Flyers : Alexander Holtz (P).<br />
[2021-04-22 05:29:30] - Brandon Hagel was added to Vancouver Canucks.<br />
[2021-04-21 05:44:38] - TRADE : From Pittsburgh Penguins to Arizona Coyotes : Wayne Simmonds, Chad Ruhwedel.<br />
[2021-04-21 05:44:38] - TRADE : From Arizona Coyotes to Pittsburgh Penguins : Skyler McKenzie, Max Hermens.<br />
[2021-04-21 05:43:55] - Derek Ryan was added to Columbus Blue Jackets.<br />
[2021-04-20 06:18:53] - Brandon Hagel was added to Montreal Canadiens.<br />
[2021-04-20 06:17:39] - TRADE : From Pittsburgh Penguins to Minnesota Wild : Vladimir Tarasenko, Leo Komarov, Y:2023-RND:4-COL.<br />
[2021-04-20 06:17:39] - TRADE : From Minnesota Wild to Pittsburgh Penguins : Victor Olofsson, Raphael Lavoie, Jack Rathbone (P), Y:2021-RND:3-MTL, Y:2022-RND:1-PHI.<br />
[2021-04-20 06:17:03] - TRADE : From Montreal Canadiens to Colorado Avalanche : Y:2021-RND:5-VEG.<br />
[2021-04-20 06:17:03] - TRADE : From Colorado Avalanche to Montreal Canadiens : Dustin Byfuglien, 1 400 000 $ (Salary Cap).<br />
[2021-04-19 05:44:54] - Derek Ryan was added to Montreal Canadiens.<br />
[2021-04-19 05:44:41] - Connor Mackey was added to Vegas Golden Knights.<br />
[2021-04-19 05:41:02] - TRADE : From Toronto Maple Leafs to Vegas Golden Knights : Tyler Biggs, Y:2021-RND:1-NYI.<br />
[2021-04-19 05:41:02] - TRADE : From Vegas Golden Knights to Toronto Maple Leafs : Adam Henrique, Lassi Thomson.<br />
[2021-04-18 05:28:59] - TRADE : From Columbus Blue Jackets to Colorado Avalanche : Michael Chaput, Y:2021-RND:5-CLB.<br />
[2021-04-18 05:28:59] - TRADE : From Colorado Avalanche to Columbus Blue Jackets : Ivan Telegin, Y:2023-RND:3-COL.<br />
[2021-04-17 18:53:36] - TRADE : From Dallas Stars to Carolina Hurricanes : Morgan Ellis.<br />
[2021-04-17 18:53:36] - TRADE : From Carolina Hurricanes to Dallas Stars : Jhonas Enroth, Andrew Ladd.<br />
[2021-04-17 05:34:42] - TRADE : From Carolina Hurricanes to Dallas Stars : Alexander True (P), Y:2021-RND:2-STL, Y:2021-RND:3-SEA.<br />
[2021-04-17 05:34:42] - TRADE : From Dallas Stars to Carolina Hurricanes : Brandon Saad.<br />
[2021-04-17 05:34:18] - TRADE : From Winnipeg Jets to Pittsburgh Penguins : Conor Sheary.<br />
[2021-04-17 05:34:18] - TRADE : From Pittsburgh Penguins to Winnipeg Jets : Y:2021-RND:3-VAN, Y:2021-RND:4-TOR.<br />
[2021-04-17 05:33:59] - TRADE : From Dallas Stars to Vegas Golden Knights : Tanner Jeannot.<br />
[2021-04-17 05:33:59] - TRADE : From Vegas Golden Knights to Dallas Stars : Y:2021-RND:4-COL.<br />
[2021-04-16 18:53:05] - Tanner Jeannot was added to Dallas Stars.<br />
[2021-04-16 06:01:22] - TRADE : From Buffalo Sabres to New York Islanders : Pavel Buchnevich, Braden Schneider (P).<br />
[2021-04-16 06:01:22] - TRADE : From New York Islanders to Buffalo Sabres : Mikhail Grigorenko, Dylan Peterson (P).<br />
[2021-04-16 05:58:58] - Tanner Jeannot was added to Vegas Golden Knights.<br />
[2021-04-15 18:34:18] - TRADE : From Tampa Bay Lightning to Florida Panthers : David Pastrnak.<br />
[2021-04-15 18:34:18] - TRADE : From Florida Panthers to Tampa Bay Lightning : Miro Heiskanen, Boone Jenner, Y:2022-RND:1-WPG, Y:2023-RND:1-FLA.<br />
[2021-04-13 05:53:56] - TRADE : From Columbus Blue Jackets to New York Islanders : Mikhail Grigorenko, Dion Phaneuf, Cal Foote, Y:2022-RND:3-CLB.<br />
[2021-04-13 05:53:56] - TRADE : From New York Islanders to Columbus Blue Jackets : Ondrej Palat, Erik Gudbranson, Joel Eriksson Ek, Y:2022-RND:2-CAR.<br />
[2021-04-13 05:53:06] - TRADE : From Buffalo Sabres to New York Islanders : Max Friberg, Carter Verhaeghe, Elvis Merzlikins, Jake Neighbours (P).<br />
[2021-04-13 05:53:06] - TRADE : From New York Islanders to Buffalo Sabres : Nick Cousins, Luke Kunin, Pierre Engvall, Jared Coreau, Y:2021-RND:3-NYI.<br />
[2021-04-12 19:11:38] - TRADE : From Carolina Hurricanes to Seattle Kraken : Zac Dalpe.<br />
[2021-04-12 19:11:38] - TRADE : From Seattle Kraken to Carolina Hurricanes : Y:2024-RND:5-PHI.<br />
[2021-04-11 13:56:03] - TRADE : From Seattle Kraken to Carolina Hurricanes : Mikhail Vorobyov, Tyler Benson, Connor Dewar, Emil Bemstrom, Carl Gunnarsson, Y:2021-RND:4-NYI, Y:2024-RND:2-SEA.<br />
[2021-04-11 13:56:03] - TRADE : From Carolina Hurricanes to Seattle Kraken : Reid Boucher, Paul Byron, Joe Morrow.<br />
[2021-04-11 13:54:35] - TRADE : From Calgary Flames to Winnipeg Jets : Oscar Fantenberg.<br />
[2021-04-11 13:54:35] - TRADE : From Winnipeg Jets to Calgary Flames : Y:2022-RND:4-WPG.<br />
[2021-04-11 13:54:20] - TRADE : From Vegas Golden Knights to Winnipeg Jets : Kevin Gravel.<br />
[2021-04-11 13:54:20] - TRADE : From Winnipeg Jets to Vegas Golden Knights : Y:2021-RND:4-WPG.<br />
[2021-04-11 13:54:07] - TRADE : From Montreal Canadiens to Winnipeg Jets : Rinat Valiev.<br />
[2021-04-11 13:54:07] - TRADE : From Winnipeg Jets to Montreal Canadiens : Y:2023-RND:5-WPG.<br />
[2021-04-09 05:45:01] - TRADE : From Detroit Red Wings to Vegas Golden Knights : Adam Henrique, 2 000 000 $ (Salary Cap).<br />
[2021-04-09 05:45:01] - TRADE : From Vegas Golden Knights to Detroit Red Wings : Jordan Greenway, Charles Hudon, Y:2021-RND:3-PHI.<br />
[2021-04-09 05:44:28] - TRADE : From St. Louis Blues to Vegas Golden Knights : Patrik Laine, 1 000 000 $ (Salary Cap), Y:2023-RND:3-STL, Y:2021-RND:4-COL.<br />
[2021-04-09 05:44:28] - TRADE : From Vegas Golden Knights to St. Louis Blues : Valeri Nichushkin, Jake Sanderson (P), Y:2021-RND:2-OTT, Y:2021-RND:2-ANH, Y:2021-RND:2-EDM, Y:2021-RND:3-CHI.<br />
[2021-04-09 05:42:25] - Travis Boyd was added to Dallas Stars.<br />
[2021-04-08 05:28:08] - Milan Lucic was added to Calgary Flames.<br />
[2021-04-07 05:49:37] - Kurtis MacDermid was added to Montreal Canadiens.<br />
[2021-04-07 05:49:20] - Travis Boyd was added to Montreal Canadiens.<br />
[2021-04-07 05:49:06] - Jacob Bryson was added to Boston Bruins.<br />
[2021-04-07 05:48:55] - TRADE : From Anaheim Ducks to Carolina Hurricanes : Brendan Brisson (P), Y:2022-RND:2-ANH.<br />
[2021-04-07 05:48:55] - TRADE : From Carolina Hurricanes to Anaheim Ducks : Lawson Crouse.<br />
[2021-04-07 05:48:33] - TRADE : From Tampa Bay Lightning to Buffalo Sabres : Charlie Coyle, Pavel Buchnevich, Braden Schneider (P), Yegor Korshkov (P), Y:2022-RND:1-VEG.<br />
[2021-04-07 05:48:33] - TRADE : From Buffalo Sabres to Tampa Bay Lightning : Tyler Seguin, Andreas Athanasiou, Y:2023-RND:2-BUF.<br />
[2021-04-06 06:02:52] - TRADE : From Buffalo Sabres to Dallas Stars : Sven Baertschi, Mattias Janmark-Nylen, Tyson Foerster (P).<br />
[2021-04-06 06:02:52] - TRADE : From Dallas Stars to Buffalo Sabres : Jakub Voracek, Jake Wise (P), Y:2022-RND:3-DAL.<br />
[2021-04-06 05:58:34] - TRADE : From Colorado Avalanche to Pittsburgh Penguins : Y:2023-RND:4-COL.<br />
[2021-04-06 05:58:34] - TRADE : From Pittsburgh Penguins to Colorado Avalanche : Dylan Labbé, Y:2023-RND:5-NJD.<br />
[2021-04-05 08:48:20] - TRADE : From Quebec Nordiques to New York Rangers : Scott Walford.<br />
[2021-04-05 08:48:20] - TRADE : From New York Rangers to Quebec Nordiques : Jon Gillies.<br />
[2021-04-05 06:01:46] - TRADE : From St. Louis Blues to Dallas Stars : Matt Roy.<br />
[2021-04-05 06:01:46] - TRADE : From Dallas Stars to St. Louis Blues : Y:2021-RND:3-DAL, Y:2021-RND:4-COL.<br />
[2021-04-04 06:12:03] - TRADE : From Carolina Hurricanes to Calgary Flames : Bryan Little.<br />
[2021-04-04 06:12:03] - TRADE : From Calgary Flames to Carolina Hurricanes : Louis Belpedio, Yevgeni Svechnikov.<br />
[2021-04-04 06:11:42] - TRADE : From Anaheim Ducks to Tampa Bay Lightning : Émile Poirier.<br />
[2021-04-04 06:11:42] - TRADE : From Tampa Bay Lightning to Anaheim Ducks : Ian Mitchell (P), Cayden Primeau (P), Y:2021-RND:2-NYI.<br />
[2021-04-04 06:10:39] - TRADE : From Vancouver Canucks to Ottawa Senators : Y:2022-RND:4-COL.<br />
[2021-04-04 06:10:39] - TRADE : From Ottawa Senators to Vancouver Canucks : 800 000 $ (Salary Cap), Y:2023-RND:5-OTT.<br />
[2021-04-03 13:51:37] - TRADE : From Florida Panthers to Winnipeg Jets : Anders Lee, Alexander Burmistrov.<br />
[2021-04-03 13:51:37] - TRADE : From Winnipeg Jets to Florida Panthers : Phillip Danault, Philip Broberg (P), Linus Karlsson (P), Y:2022-RND:1-WPG, Y:2021-RND:2-WPG, Y:2022-RND:3-WPG.<br />
[2021-04-03 10:01:10] - TRADE : From Detroit Red Wings to New Jersey Devils : Luke Schenn, 2 000 000 $ (Salary Cap).<br />
[2021-04-03 10:01:10] - TRADE : From New Jersey Devils to Detroit Red Wings : Y:2022-RND:1-NJD.<br />
[2021-04-03 06:56:37] - TRADE : From Vancouver Canucks to Winnipeg Jets : Mark Scheifele, 5 000 000 $ (Salary Cap).<br />
[2021-04-03 06:56:37] - TRADE : From Winnipeg Jets to Vancouver Canucks : Filip Zadina, Eetu Luostarinen (P), Y:2021-RND:2-CLB, Y:2022-RND:2-WPG, Y:2021-RND:4-OTT.<br />
[2021-04-03 06:55:38] - TRADE : From St. Louis Blues to Pittsburgh Penguins : Andre Burakovsky, Zack Phillips, Adam Almqvist, Y:2022-RND:2-CLB, Y:2021-RND:3-VAN.<br />
[2021-04-03 06:55:38] - TRADE : From Pittsburgh Penguins to St. Louis Blues : Mark Stone, Andreas Borgman, Y:2021-RND:1-STL, Y:2021-RND:2-NJD.<br />
[2021-04-02 06:51:21] - TRADE : From Vegas Golden Knights to Washington Capitals : Y:2022-RND:2-SJS, Y:2022-RND:5-SJS.<br />
[2021-04-02 06:51:21] - TRADE : From Washington Capitals to Vegas Golden Knights : Y:2021-RND:2-ANH.<br />
[2021-04-01 06:05:21] - Maxim Mamin was added to Seattle Kraken.<br />
[2021-04-01 05:56:52] - TRADE : From Chicago Blackhawks to Seattle Kraken : Y:2023-RND:5-COL.<br />
[2021-04-01 05:56:52] - TRADE : From Seattle Kraken to Chicago Blackhawks : Stephen Weiss, Y:2023-RND:4-SEA.<br />
[2021-04-01 05:56:24] - TRADE : From Philadelphia Flyers to Seattle Kraken : Y:2024-RND:5-PHI.<br />
[2021-04-01 05:56:24] - TRADE : From Seattle Kraken to Philadelphia Flyers : Oscar Lindberg, Y:2024-RND:4-SEA.<br />
[2021-04-01 05:56:01] - TRADE : From Buffalo Sabres to Seattle Kraken : Peter Trainor, Rem Pitlick, Y:2022-RND:2-VEG.<br />
[2021-04-01 05:56:01] - TRADE : From Seattle Kraken to Buffalo Sabres : Sven Baertschi, Taro Hirose.<br />
[2021-04-01 05:55:12] - TRADE : From Washington Capitals to Seattle Kraken : Juuse Saros, Mason Shaw, Y:2021-RND:3-WSH, Y:2021-RND:5-DAL, Y:2022-RND:5-PIT.<br />
[2021-04-01 05:55:12] - TRADE : From Seattle Kraken to Washington Capitals : Simeon Varlamov, David Jones, Y:2022-RND:2-COL, Y:2022-RND:2-FLA, Y:2022-RND:2-PIT.<br />
[2021-03-31 06:24:16] - TRADE : From Vancouver Canucks to Toronto Maple Leafs : Jesse Ylonen.<br />
[2021-03-31 06:24:16] - TRADE : From Toronto Maple Leafs to Vancouver Canucks : Jack Studnicka (P), Y:2021-RND:3-BUF.<br />
[2021-03-31 06:23:57] - TRADE : From Seattle Kraken to Toronto Maple Leafs : Aku Raty (P).<br />
[2021-03-31 06:23:57] - TRADE : From Toronto Maple Leafs to Seattle Kraken : Erik Portillo (P).<br />
[2021-03-30 06:29:00] - TRADE : From Seattle Kraken to Colorado Avalanche : Jonathon Blum, 2 500 000 $ (Salary Cap).<br />
[2021-03-30 06:29:00] - TRADE : From Colorado Avalanche to Seattle Kraken : Carl Gunnarsson, Y:2022-RND:2-COL.<br />
[2021-03-30 06:28:10] - TRADE : From St. Louis Blues to Ottawa Senators : Y:2023-RND:2-OTT, Y:2021-RND:5-STL.<br />
[2021-03-30 06:28:10] - TRADE : From Ottawa Senators to St. Louis Blues : Devante Smith-Pelly, Y:2021-RND:4-MIN.<br />
[2021-03-30 06:27:38] - TRADE : From Seattle Kraken to Ottawa Senators : Jayden Halbgewachs, Y:2022-RND:3-DET.<br />
[2021-03-30 06:27:38] - TRADE : From Ottawa Senators to Seattle Kraken : Eric Robinson, Drake Caggiula.<br />
[2021-03-30 06:25:08] - TRADE : From Pittsburgh Penguins to Ottawa Senators : Christian Ehrhoff.<br />
[2021-03-30 06:25:08] - TRADE : From Ottawa Senators to Pittsburgh Penguins : Y:2022-RND:5-OTT.<br />
[2021-03-30 06:20:09] - Roman Polak was added to Ottawa Senators.<br />
[2021-03-30 06:20:02] - Braydon Coburn was added to Ottawa Senators.<br />
[2021-03-29 05:49:38] - TRADE : From Los Angeles Kings to Calgary Flames : Thomas Chabot, Y:2021-RND:1-SEA.<br />
[2021-03-29 05:49:38] - TRADE : From Calgary Flames to Los Angeles Kings : Michael Del Zotto, Eemeli Rasanen (P), Nicolas Beaudin (P), 5 000 000 $ (Salary Cap).<br />
[2021-03-29 05:47:28] - Daniel Sorvik was added to Ottawa Senators.<br />
[2021-03-29 05:47:15] - Dillon Donnelly was added to Ottawa Senators.<br />
[2021-03-29 05:45:57] - Jordie Benn was added to Ottawa Senators.<br />
[2021-03-28 10:34:20] - TRADE : From Ottawa Senators to Calgary Flames : Y:2022-RND:3-CGY.<br />
[2021-03-28 10:34:20] - TRADE : From Calgary Flames to Ottawa Senators : Y:2022-RND:4-CGY.<br />
[2021-03-28 09:23:15] - TRADE : From Ottawa Senators to Calgary Flames : Marcus Johansson.<br />
[2021-03-28 09:23:15] - TRADE : From Calgary Flames to Ottawa Senators : Ryan Johansen.<br />
[2021-03-28 06:53:40] - TRADE : From New Jersey Devils to Calgary Flames : Nick Merkley, Christopher Tanev, Y:2022-RND:3-TBL.<br />
[2021-03-28 06:53:40] - TRADE : From Calgary Flames to New Jersey Devils : Colin Miller, Zach Boychuk, 3 000 000 $ (Salary Cap).<br />
[2021-03-28 06:53:02] - TRADE : From Ottawa Senators to Calgary Flames : Alexander Nylander, Ty Smith.<br />
[2021-03-28 06:53:02] - TRADE : From Calgary Flames to Ottawa Senators : Marcus Johansson, Y:2022-RND:3-CGY.<br />
[2021-03-28 06:52:34] - TRADE : From Vegas Golden Knights to New York Islanders : Y:2022-RND:2-CAR.<br />
[2021-03-28 06:52:34] - TRADE : From New York Islanders to Vegas Golden Knights : Alexandre Texier (P), Y:2022-RND:5-NYI.<br />
[2021-03-27 06:19:58] - Andrew Poturalski was added to Vegas Golden Knights.<br />
[2021-03-27 06:19:39] - Tyler Angle was added to Florida Panthers.<br />
[2021-03-26 06:09:17] - TRADE : From Anaheim Ducks to Ottawa Senators : Jesse Puljujarvi.<br />
[2021-03-26 06:09:17] - TRADE : From Ottawa Senators to Anaheim Ducks : Martin Necas, Joseph Woll (P).<br />
[2021-03-26 06:08:47] - TRADE : From New York Islanders to Montreal Canadiens : Dominik Kubalik, Y:2021-RND:5-VEG.<br />
[2021-03-26 06:08:47] - TRADE : From Montreal Canadiens to New York Islanders : Martin Reway, Alexandre Texier (P).<br />
[2021-03-26 06:08:15] - TRADE : From Pittsburgh Penguins to New Jersey Devils : John Gibson, Sébastien Piché.<br />
[2021-03-26 06:08:15] - TRADE : From New Jersey Devils to Pittsburgh Penguins : Keith Kinkaid, Axel Andersson, Y:2021-RND:1-MTL, Y:2023-RND:5-NJD.<br />
[2021-03-26 06:06:51] - TRADE : From Seattle Kraken to Calgary Flames : Colin Miller, Clark Bishop, 5 000 000 $ (Money), Y:2022-RND:4-STL.<br />
[2021-03-26 06:06:51] - TRADE : From Calgary Flames to Seattle Kraken : Andrej Meszaros.<br />
[2021-03-25 05:51:33] - TRADE : From Pittsburgh Penguins to Montreal Canadiens : Tyler Cuma, Karl Alzner, Y:2022-RND:3-VAN, Y:2023-RND:5-PIT.<br />
[2021-03-25 05:51:33] - TRADE : From Montreal Canadiens to Pittsburgh Penguins : Darren Dietz, Jonas Siegenthaler.<br />
[2021-03-25 05:50:34] - TRADE : From Seattle Kraken to San Jose Sharks : William Dufour (P), Y:2023-RND:1-SEA.<br />
[2021-03-25 05:50:34] - TRADE : From San Jose Sharks to Seattle Kraken : Samuel Morin, Y:2023-RND:2-SEA.<br />
[2021-03-25 05:49:35] - TRADE : From Florida Panthers to San Jose Sharks : Joey Anderson.<br />
[2021-03-25 05:49:35] - TRADE : From San Jose Sharks to Florida Panthers : Radek Faksa, 2 500 000 $ (Salary Cap).<br />
[2021-03-24 06:00:18] - TRADE : From Columbus Blue Jackets to Pittsburgh Penguins : Mark Stone, Y:2021-RND:4-CHI.<br />
[2021-03-24 06:00:18] - TRADE : From Pittsburgh Penguins to Columbus Blue Jackets : Nicklas Backstrom, Y:2021-RND:3-FLA.<br />
[2021-03-23 05:58:26] - TRADE : From Pittsburgh Penguins to New Jersey Devils : Tyler Ennis, 3 000 000 $ (Salary Cap).<br />
[2021-03-23 05:58:26] - TRADE : From New Jersey Devils to Pittsburgh Penguins : Alexander Delnov, Michael Rasmussen, Y:2021-RND:1-STL, Y:2021-RND:2-NJD, Y:2022-RND:2-NJD.<br />
[2021-03-22 06:35:56] - TRADE : From Boston Bruins to Pittsburgh Penguins : Josh Bailey, Alex Vlasic (P), Y:2021-RND:2-BOS.<br />
[2021-03-22 06:35:56] - TRADE : From Pittsburgh Penguins to Boston Bruins : Bobby Ryan.<br />
[2021-03-22 06:35:35] - Sam Steel was added to Arizona Coyotes.<br />
[2021-03-21 08:25:01] - TRADE : From Buffalo Sabres to Florida Panthers : Peter Cehlarik.<br />
[2021-03-20 05:41:21] - TRADE : From Buffalo Sabres to Florida Panthers : Anders Lee.<br />
[2021-03-20 05:41:21] - TRADE : From Florida Panthers to Buffalo Sabres : Madison Bowey, Andreas Athanasiou.<br />
[2021-03-20 05:40:31] - TRADE : From Ottawa Senators to Florida Panthers : David Musil, Y:2022-RND:2-DET.<br />
[2021-03-20 05:40:31] - TRADE : From Florida Panthers to Ottawa Senators : Alexander Nylander, Y:2021-RND:4-MIN.<br />
[2021-03-20 05:39:22] - TRADE : From Washington Capitals to Ottawa Senators : German Rubtsov, Vladislav Kamenev.<br />
[2021-03-20 05:39:22] - TRADE : From Ottawa Senators to Washington Capitals : Mike Hoffman, Luke Henman, Carl Grundstrom (P), Y:2023-RND:3-OTT.<br />
[2021-03-20 05:38:42] - TRADE : From Calgary Flames to Boston Bruins : Oliver Ekman-Larsson.<br />
[2021-03-20 05:38:42] - TRADE : From Boston Bruins to Calgary Flames : Olli Maatta, Jan Mysak (P).<br />
[2021-03-19 06:06:56] - TRADE : From Seattle Kraken to Vegas Golden Knights : Jordan Greenway, Connor Clifton.<br />
[2021-03-19 06:06:56] - TRADE : From Vegas Golden Knights to Seattle Kraken : Matt Grzelcyk, Brayden Burke, Matthew Bradley, Y:2021-RND:5-WPG.<br />
[2021-03-19 06:06:07] - Tim Stützle was added to Vegas Golden Knights.<br />
[2021-03-18 05:32:07] - TRADE : From Calgary Flames to Seattle Kraken : Oskar Sundqvist.<br />
[2021-03-18 05:32:07] - TRADE : From Seattle Kraken to Calgary Flames : Filip Chlapik, Guillaume Brisebois.<br />
[2021-03-18 05:31:44] - TRADE : From Calgary Flames to Buffalo Sabres : James Reimer.<br />
[2021-03-18 05:31:44] - TRADE : From Buffalo Sabres to Calgary Flames : Jonathan Quick, 775 000 $ (Salary Cap).<br />
[2021-03-17 19:16:18] - Cameron Wright was added to Buffalo Sabres.<br />
[2021-03-17 06:14:18] - TRADE : From Pittsburgh Penguins to Montreal Canadiens : Henrik Zetterberg.<br />
[2021-03-17 06:14:18] - TRADE : From Montreal Canadiens to Pittsburgh Penguins : Y:2021-RND:4-TOR.<br />
[2021-03-17 06:13:56] - TRADE : From Montreal Canadiens to Colorado Avalanche : Christophe Lalancette.<br />
[2021-03-17 06:13:56] - TRADE : From Colorado Avalanche to Montreal Canadiens : Y:2022-RND:3-COL.<br />
[2021-03-16 05:31:14] - Nathan Todd was added to Vegas Golden Knights.<br />
[2021-03-16 05:30:10] - TRADE : From Anaheim Ducks to Montreal Canadiens : Alex Ovechkin, Y:2021-RND:2-NSH.<br />
[2021-03-16 05:30:10] - TRADE : From Montreal Canadiens to Anaheim Ducks : Brandon Montour, Nolan Patrick, Jarred Tinordi, Brendan Brisson (P).<br />
[2021-03-16 05:25:28] - TRADE : From New York Islanders to Seattle Kraken : Scott Mayfield.<br />
[2021-03-16 05:25:28] - TRADE : From Seattle Kraken to New York Islanders : Y:2021-RND:5-VEG.<br />
[2021-03-15 05:38:59] - Jason Robertson was added to New York Islanders.<br />
[2021-03-14 06:43:06] - Riley Damiani was added to Chicago Blackhawks.<br />
[2021-03-13 07:34:35] - TRADE : From Buffalo Sabres to St. Louis Blues : Nikita Soshnikov, Y:2021-RND:2-BUF, Y:2021-RND:2-VAN.<br />
[2021-03-13 07:34:35] - TRADE : From St. Louis Blues to Buffalo Sabres : Adam Erne, Y:2022-RND:3-STL, Y:2022-RND:5-STL.<br />
[2021-03-13 07:33:49] - TRADE : From Vegas Golden Knights to Seattle Kraken : Chaz Reddekopp, Y:2021-RND:3-DET.<br />
[2021-03-13 07:33:49] - TRADE : From Seattle Kraken to Vegas Golden Knights : Zachary Senyshyn.<br />
[2021-03-13 07:31:57] - Riley Damiani was added to Vegas Golden Knights.<br />
[2021-03-13 07:21:21] - Mason Marchment was added to Boston Bruins.<br />
[2021-03-12 05:43:37] - Frédérick Gaudreau was added to Montreal Canadiens.<br />
[2021-03-11 06:28:41] - TRADE : From Colorado Avalanche to Vegas Golden Knights : Y:2021-RND:3-BOS.<br />
[2021-03-11 06:28:41] - TRADE : From Vegas Golden Knights to Colorado Avalanche : Devon Toews.<br />
[2021-03-11 06:28:21] - TRADE : From St. Louis Blues to Ottawa Senators : Ryan Dzingel, Michael Frolik, Bowen Byram (P), Trevor Zegras (P), Victor Söderström (P).<br />
[2021-03-11 06:28:21] - TRADE : From Ottawa Senators to St. Louis Blues : Patrik Laine, Zack Phillips, Y:2022-RND:2-CLB, Y:2023-RND:2-OTT.<br />
[2021-03-11 06:26:50] - Kaapo Kähkönen was added to Pittsburgh Penguins.<br />
[2021-03-11 06:06:03] - John Leonard was added to Montreal Canadiens.<br />
[2021-03-10 05:55:52] - TRADE : From Quebec Nordiques to Buffalo Sabres : Brendan Burke.<br />
[2021-03-10 05:55:52] - TRADE : From Buffalo Sabres to Quebec Nordiques : Y:2023-RND:5-BUF.<br />
[2021-03-07 06:32:40] - TRADE : From Seattle Kraken to Montreal Canadiens : Curtis Hamilton, Jarred Tinordi.<br />
[2021-03-07 06:32:40] - TRADE : From Montreal Canadiens to Seattle Kraken : Yan-Pavel Laplante.<br />
[2021-03-07 06:32:21] - TRADE : From Seattle Kraken to Carolina Hurricanes : Marcel Noebels.<br />
[2021-03-07 06:32:21] - TRADE : From Carolina Hurricanes to Seattle Kraken : Oscar Lindberg.<br />
[2021-03-06 05:39:39] - TRADE : From Seattle Kraken to Pittsburgh Penguins : Travis Zajac, Andreas Borgman, Samuel Blais.<br />
[2021-03-06 05:39:39] - TRADE : From Pittsburgh Penguins to Seattle Kraken : Stephen Weiss, David Jones, Reid McNeill.<br />
[2021-03-04 05:36:48] - TRADE : From Columbus Blue Jackets to New York Islanders : Yanni Gourde, Jason Robertson (P), Y:2022-RND:1-CLB, Y:2023-RND:3-CLB.<br />
[2021-03-04 05:36:48] - TRADE : From New York Islanders to Columbus Blue Jackets : Mark Stone, 2 000 000 $ (Salary Cap), Y:2023-RND:2-NYI.<br />
[2021-03-02 05:52:05] - TRADE : From Florida Panthers to Ottawa Senators : Robin Lehner, Martin Necas.<br />
[2021-03-02 05:52:05] - TRADE : From Ottawa Senators to Florida Panthers : Sergei Bobrovsky, Ryan Tesink, Cam York (P).<br />
[2021-03-02 04:52:14] - Drake Batherson was added to Nashville Predators.<br />
[2021-03-02 04:27:22] - Cody Hodgson was added to Buffalo Sabres.<br />
[2021-03-01 19:24:34] - Barrett Hayton was added to Calgary Flames.<br />
[2021-03-01 18:50:46] - Mark Borowiecki was added to Detroit Red Wings.<br />
[2021-03-01 18:50:37] - Dalton Prout was added to Detroit Red Wings.<br />
[2021-02-28 05:50:34] - TRADE : From Ottawa Senators to Vancouver Canucks : Alexis Pepin, Y:2022-RND:4-COL.<br />
[2021-02-28 05:50:34] - TRADE : From Vancouver Canucks to Ottawa Senators : Louick Marcotte.<br />
[2021-02-28 05:49:38] - TRADE : From Philadelphia Flyers to Vancouver Canucks : Mark Scheifele, 2 000 000 $ (Salary Cap).<br />
[2021-02-28 05:49:38] - TRADE : From Vancouver Canucks to Philadelphia Flyers : Josh Morrissey, Nicolas Kerdiles.<br />
[2021-02-27 06:03:59] - TRADE : From Vegas Golden Knights to Seattle Kraken : Kevin Mandolese (P), Y:2021-RND:5-VEG.<br />
[2021-02-27 06:03:59] - TRADE : From Seattle Kraken to Vegas Golden Knights : Y:2021-RND:3-NYR.<br />
[2021-02-27 06:03:28] - TRADE : From Ottawa Senators to Seattle Kraken : Denis Godla.<br />
[2021-02-27 06:03:28] - TRADE : From Seattle Kraken to Ottawa Senators : Y:2022-RND:4-NYI.<br />
[2021-02-27 06:03:11] - TRADE : From Philadelphia Flyers to Seattle Kraken : Evgeny Kuznetsov.<br />
[2021-02-27 06:03:11] - TRADE : From Seattle Kraken to Philadelphia Flyers : Casey Mittelstadt, David Rittich.<br />
[2021-02-27 06:02:50] - TRADE : From Philadelphia Flyers to Ottawa Senators : Sergei Bobrovsky.<br />
[2021-02-27 06:02:50] - TRADE : From Ottawa Senators to Philadelphia Flyers : Evgeny Kuznetsov, Justus Annunen (P).<br />
[2021-02-26 05:38:25] - TRADE : From St. Louis Blues to Vegas Golden Knights : Charles Hudon, Morgan Klimchuk, 500 000 $ (Salary Cap), Y:2021-RND:2-OTT.<br />
[2021-02-26 05:38:25] - TRADE : From Vegas Golden Knights to St. Louis Blues : Valentin Zykov, Adam Erne, Y:2021-RND:3-VAN, Y:2021-RND:3-STL.<br />
[2021-02-26 05:37:35] - TRADE : From New York Islanders to Anaheim Ducks : Dylan Strome, Cole Perfetti (P), Y:2022-RND:2-NYI.<br />
[2021-02-26 05:37:35] - TRADE : From Anaheim Ducks to New York Islanders : Jordan Kyrou, Pierre Engvall, Peyton Krebs (P), Y:2022-RND:1-ANH.<br />
[2021-02-26 05:29:30] - Darren Helm was added to Vancouver Canucks.<br />
[2021-02-25 05:41:31] - TRADE : From Carolina Hurricanes to St. Louis Blues : Tyler Johnson, 5 000 000 $ (Salary Cap).<br />
[2021-02-25 05:41:31] - TRADE : From St. Louis Blues to Carolina Hurricanes : Stefan Noesen, Y:2022-RND:2-STL.<br />
[2021-02-23 05:29:39] - TRADE : From Nashville Predators to Buffalo Sabres : Peter Trainor, Jack Quinn (P), Kristian Vesalainen (P), Y:2021-RND:1-NSH.<br />
[2021-02-23 05:29:39] - TRADE : From Buffalo Sabres to Nashville Predators : Nail Yakupov, Y:2021-RND:3-OTT.<br />
[2021-02-23 05:29:06] - TRADE : From Nashville Predators to Washington Capitals : Kirill Kaprizov, Grigori Denisenko (P), Y:2021-RND:2-ANH.<br />
[2021-02-23 05:29:06] - TRADE : From Washington Capitals to Nashville Predators : Ty Rattie, Angelo Miceli.<br />
[2021-02-23 05:28:06] - Pekka Rinne was added to Quebec Nordiques.<br />
[2021-02-21 17:23:55] - Nick Foligno was added to Los Angeles Kings.<br />
[2021-02-21 05:41:20] - TRADE : From Buffalo Sabres to Ottawa Senators : Ty Smith.<br />
[2021-02-21 05:41:20] - TRADE : From Ottawa Senators to Buffalo Sabres : Alex Turcotte (P).<br />
[2021-02-21 05:41:00] - TRADE : From Buffalo Sabres to Anaheim Ducks : Jacob Markstrom.<br />
[2021-02-21 05:41:00] - TRADE : From Anaheim Ducks to Buffalo Sabres : Jonathan Quick, Nils Lundkvist, Y:2021-RND:2-VAN.<br />
[2021-02-20 21:57:07] - Ivan Telegin was added to Colorado Avalanche.<br />
[2021-02-20 05:55:14] - Philipp Kurashev was added to New Jersey Devils.<br />
[2021-02-20 05:41:17] - TRADE : From Anaheim Ducks to Carolina Hurricanes : Taylor Doherty.<br />
[2021-02-20 05:41:17] - TRADE : From Carolina Hurricanes to Anaheim Ducks : Y:2022-RND:4-CAR.<br />
[2021-02-19 05:35:07] - TRADE : From Philadelphia Flyers to Detroit Red Wings : Tomas Hertl, Nick Suzuki, Oscar Klefbom, Y:2021-RND:3-PIT, Y:2023-RND:2-PHI.<br />
[2021-02-19 05:35:07] - TRADE : From Detroit Red Wings to Philadelphia Flyers : Matt Duchene, Matt Dumba.<br />
[2021-02-19 05:34:32] - TRADE : From Quebec Nordiques to Colorado Avalanche : Colin Wilson, 5 000 000 $ (Salary Cap).<br />
[2021-02-19 05:34:32] - TRADE : From Colorado Avalanche to Quebec Nordiques : Yakov Trenin, Gavin Bayreuther, Ryan McLeod (P), Y:2021-RND:2-COL.<br />
[2021-02-19 04:43:10] - Mathieu Olivier was added to Montreal Canadiens.<br />
[2021-02-19 04:26:46] - TRADE : From Chicago Blackhawks to Montreal Canadiens : Y:2021-RND:5-CHI.<br />
[2021-02-19 04:26:46] - TRADE : From Montreal Canadiens to Chicago Blackhawks : Alexis Gravel.<br />
[2021-02-18 06:03:45] - TRADE : From Seattle Kraken to Quebec Nordiques : Y:2022-RND:4-NSH.<br />
[2021-02-18 06:03:45] - TRADE : From Quebec Nordiques to Seattle Kraken : Rihards Bukarts.<br />
[2021-02-17 05:34:10] - TRADE : From Montreal Canadiens to Detroit Red Wings : Josh Harding, Roman Josi, Alex Lyon.<br />
[2021-02-17 05:34:10] - TRADE : From Detroit Red Wings to Montreal Canadiens : Torey Krug, Ondrej Pavelec, Jake Allen, Josh Gorges.<br />
[2021-02-15 05:29:20] - TRADE : From Vegas Golden Knights to Anaheim Ducks : Andrew MacDonald, 750 000 $ (Salary Cap), Y:2021-RND:4-NSH.<br />
[2021-02-15 05:29:20] - TRADE : From Anaheim Ducks to Vegas Golden Knights : Devon Toews.<br />
[2021-02-12 05:41:06] - Jordan Kyrou was added to Anaheim Ducks.<br />
[2021-02-11 06:21:58] - Joel Farabee was added to Quebec Nordiques.<br />
[2021-02-06 06:18:52] - TRADE : From Florida Panthers to Anaheim Ducks : Joe Veleno, Zach Sanford, Vitali Kravtsov (P).<br />
[2021-02-06 06:18:52] - TRADE : From Anaheim Ducks to Florida Panthers : Alexander Burmistrov, 4 000 000 $ (Salary Cap).<br />
[2021-02-06 06:18:22] - TRADE : From Seattle Kraken to Quebec Nordiques : Callum Booth, Magnus Nygren.<br />
[2021-02-06 06:18:22] - TRADE : From Quebec Nordiques to Seattle Kraken : Simeon Varlamov.<br />
[2021-02-02 06:01:25] - TRADE : From Calgary Flames to Tampa Bay Lightning : Brayden Schenn.<br />
[2021-02-02 06:01:25] - TRADE : From Tampa Bay Lightning to Calgary Flames : Marcus Johansson.<br />
[2021-02-02 06:01:05] - TRADE : From Columbus Blue Jackets to Seattle Kraken : Nikita Tryamkin.<br />
[2021-02-02 06:01:05] - TRADE : From Seattle Kraken to Columbus Blue Jackets : Alexander Urbom, 1 000 000 $ (Salary Cap).<br />
[2021-02-01 06:01:15] - Jordan Oesterle was added to Vancouver Canucks.<br />
[2021-02-01 05:40:51] - Artem Anisimov was added to Boston Bruins.<br />
[2021-01-31 05:17:11] - Jordan Oesterle was added to Montreal Canadiens.<br />
[2021-01-30 06:00:31] - TRADE : From Buffalo Sabres to Anaheim Ducks : Ryan Strome, Jesper Boqvist, Joey Laleggia, Y:2021-RND:2-NSH.<br />
[2021-01-30 06:00:31] - TRADE : From Anaheim Ducks to Buffalo Sabres : Tyler Myers, 2 500 000 $ (Salary Cap).<br />
[2021-01-30 05:59:56] - TRADE : From Seattle Kraken to Vegas Golden Knights : Y:2021-RND:5-WPG, Y:2022-RND:2-SJS.<br />
[2021-01-30 05:59:56] - TRADE : From Vegas Golden Knights to Seattle Kraken : Janne Kuokkanen, Y:2021-RND:4-NYI.<br />
[2021-01-30 05:39:12] - Chris Kreider was added to Vegas Golden Knights.<br />
[2021-01-28 06:42:11] - TRADE : From Chicago Blackhawks to Montreal Canadiens : Y:2021-RND:3-TBL.<br />
[2021-01-28 06:42:11] - TRADE : From Montreal Canadiens to Chicago Blackhawks : Nikita Gusev, 3 000 000 $ (Salary Cap).<br />
[2021-01-27 06:08:59] - TRADE : From Toronto Maple Leafs to Detroit Red Wings : Jean-Gabriel Pageau, Luke Schenn.<br />
[2021-01-27 06:08:59] - TRADE : From Detroit Red Wings to Toronto Maple Leafs : Mikael Granlund, Stefan Elliott.<br />
[2021-01-27 06:08:36] - TRADE : From St. Louis Blues to New York Islanders : 5 000 000 $ (Money), Y:2021-RND:4-PIT.<br />
[2021-01-27 06:08:36] - TRADE : From New York Islanders to St. Louis Blues : Michael Frolik, 4 000 000 $ (Salary Cap).<br />
[2021-01-27 06:02:37] - Linus Omark was added to Vegas Golden Knights.<br />
[2021-01-26 07:46:10] - TRADE : From Montreal Canadiens to Ottawa Senators : Hunter Drew.<br />
[2021-01-26 07:46:10] - TRADE : From Ottawa Senators to Montreal Canadiens : Y:2021-RND:5-ARZ.<br />
[2021-01-26 06:32:58] - TRADE : From Detroit Red Wings to Ottawa Senators : Patrik Laine, Y:2022-RND:2-DET.<br />
[2021-01-26 06:32:58] - TRADE : From Ottawa Senators to Detroit Red Wings : Kyle Connor, Matt Dumba, Jayden Struble (P), 2 000 000 $ (Salary Cap), Y:2021-RND:1-OTT.<br />
[2021-01-26 06:32:13] - TRADE : From St. Louis Blues to Carolina Hurricanes : Y:2021-RND:2-CAR.<br />
[2021-01-26 06:32:13] - TRADE : From Carolina Hurricanes to St. Louis Blues : Y:2021-RND:2-OTT.<br />
[2021-01-26 06:31:59] - TRADE : From St. Louis Blues to Vegas Golden Knights : Mika Zibanejad, Patric Hornqvist, 5 000 000 $ (Salary Cap).<br />
[2021-01-26 06:31:59] - TRADE : From Vegas Golden Knights to St. Louis Blues : Morgan Klimchuk, Charles Hudon, John Hayden, Y:2021-RND:2-CAR.<br />
[2021-01-26 06:28:42] - Milan Lucic was added to Montreal Canadiens.<br />
[2021-01-26 06:28:42] - Loui Eriksson was added to Detroit Red Wings.<br />
[2021-01-25 06:05:59] - TRADE : From St. Louis Blues to Carolina Hurricanes : Christian Thomas, Scott Wilson, Y:2021-RND:2-STL.<br />
[2021-01-25 06:05:59] - TRADE : From Carolina Hurricanes to St. Louis Blues : Ryan Dzingel.<br />
[2021-01-25 06:05:38] - TRADE : From San Jose Sharks to Carolina Hurricanes : Andrew Shaw, Y:2021-RND:1-CAR, Y:2021-RND:2-OTT.<br />
[2021-01-25 06:05:38] - TRADE : From Carolina Hurricanes to San Jose Sharks : Ryan Pulock, Y:2022-RND:1-CAR.<br />
[2021-01-25 06:02:45] - Milan Lucic was added to Vegas Golden Knights.<br />
[2021-01-25 06:02:35] - Loui Eriksson was added to Vancouver Canucks.<br />
[2021-01-24 14:04:00] - Johannes Kinnvall was added to Carolina Hurricanes.<br />
[2021-01-24 14:03:50] - Kevin Lankinen was added to Carolina Hurricanes.<br />
[2021-01-24 14:03:40] - Joel Kiviranta was added to Carolina Hurricanes.<br />
[2021-01-24 06:24:55] - TRADE : From Detroit Red Wings to Carolina Hurricanes : Kale Clague, Rasmus Asplund, Laurent Dauphin.<br />
[2021-01-24 06:24:36] - TRADE : From Seattle Kraken to Carolina Hurricanes : Ian Scott (P), Luka Burzan (P).<br />
[2021-01-24 06:24:16] - TRADE : From Ottawa Senators to Carolina Hurricanes : Allan McShane (P).<br />
[2021-01-24 06:23:55] - TRADE : From Calgary Flames to Carolina Hurricanes : Yaroslav Alexeyev (P).<br />
[2021-01-24 06:23:41] - TRADE : From New York Islanders to Carolina Hurricanes : Benoit-Olivier Groulx (P).<br />
[2021-01-24 06:23:24] - TRADE : From Edmonton Oilers to Carolina Hurricanes : Thomas Schemitsch (P).<br />
[2021-01-24 06:23:06] - TRADE : From Buffalo Sabres to Carolina Hurricanes : Alexei Lipanov (P), Cedric Pare (P), Eric Comrie (P).<br />
[2021-01-24 06:22:46] - TRADE : From New Jersey Devils to Carolina Hurricanes : Mads Sogaard (P).<br />
[2021-01-24 06:22:30] - TRADE : From St. Louis Blues to Carolina Hurricanes : Jens Lööke.<br />
[2021-01-24 06:22:16] - TRADE : From Anaheim Ducks to Carolina Hurricanes : Dylan Gambrell (P), Nicolas Meloche (P).<br />
[2021-01-24 06:21:57] - TRADE : From Philadelphia Flyers to Carolina Hurricanes : Sasha Chmelevski (P).<br />
[2021-01-24 06:19:17] - TRADE : From Seattle Kraken to Carolina Hurricanes : Y:2021-RND:5-CGY, Y:2022-RND:4-VAN.<br />
[2021-01-24 06:18:58] - TRADE : From Philadelphia Flyers to Carolina Hurricanes : Y:2022-RND:4-ANH, Y:2022-RND:4-PHI.<br />
[2021-01-24 06:18:41] - TRADE : From Ottawa Senators to Carolina Hurricanes : Y:2021-RND:5-PIT, Y:2021-RND:5-SEA.<br />
[2021-01-24 06:18:25] - TRADE : From New Jersey Devils to Carolina Hurricanes : Y:2021-RND:3-SEA.<br />
[2021-01-24 06:18:12] - TRADE : From Anaheim Ducks to Carolina Hurricanes : Y:2021-RND:5-VAN.<br />
[2021-01-24 06:17:58] - TRADE : From Philadelphia Flyers to Carolina Hurricanes : Y:2022-RND:3-PHI.<br />
[2021-01-24 06:17:36] - TRADE : From Montreal Canadiens to Carolina Hurricanes : Alexander True (P), Gabriel Fortier (P), Y:2022-RND:5-WPG.<br />
[2021-01-23 06:10:51] - TRADE : From Vegas Golden Knights to Anaheim Ducks : 1 500 000 $ (Salary Cap), Y:2024-RND:5-CLB.<br />
[2021-01-23 06:10:51] - TRADE : From Anaheim Ducks to Vegas Golden Knights : Y:2021-RND:3-VAN.<br />
[2021-01-23 06:10:00] - Jonathon Merrill was added to Washington Capitals.<br />
[2021-01-20 06:05:04] - TRADE : From Seattle Kraken to Vegas Golden Knights : Y:2021-RND:3-DET, Y:2021-RND:4-NYI.<br />
[2021-01-20 06:05:04] - TRADE : From Vegas Golden Knights to Seattle Kraken : Daniel Vladar, Y:2022-RND:4-STL.<br />
[2021-01-20 05:56:30] - TRADE : From Tampa Bay Lightning to Toronto Maple Leafs : Y:2022-RND:5-TBL.<br />
[2021-01-20 05:56:30] - TRADE : From Toronto Maple Leafs to Tampa Bay Lightning : Mattias Ekholm.<br />
[2021-01-19 06:06:41] - TRADE : From Buffalo Sabres to New York Rangers : Michael Grabner, Ty Dellandrea, John-Jason Peterka (P), Y:2022-RND:1-BUF.<br />
[2021-01-19 06:06:41] - TRADE : From New York Rangers to Buffalo Sabres : Nail Yakupov, Carter Verhaeghe, Zion Nybeck (P).<br />
[2021-01-19 06:05:34] - TRADE : From Seattle Kraken to Vegas Golden Knights : Oscar Dansk.<br />
[2021-01-16 05:36:54] - TRADE : From Edmonton Oilers to Vegas Golden Knights : Valentin Zykov, 500 000 $ (Salary Cap), Y:2021-RND:2-EDM.<br />
[2021-01-16 05:36:54] - TRADE : From Vegas Golden Knights to Edmonton Oilers : Brett Howden, William Wallinder (P).<br />
[2021-01-15 12:17:52] - TRADE : From Anaheim Ducks to Ottawa Senators : Mike Hoffman, Sonny Milano, Jayden Struble (P).<br />
[2021-01-15 12:17:52] - TRADE : From Ottawa Senators to Anaheim Ducks : Alexander Edler, Mike Amadio.<br />
[2021-01-12 05:05:41] - TRADE : From St. Louis Blues to Carolina Hurricanes : Ryan Dzingel, Ian Cole, Y:2021-RND:1-SJS, Y:2021-RND:2-MTL.<br />
[2021-01-12 05:05:41] - TRADE : From Carolina Hurricanes to St. Louis Blues : Jamie Oleksiak, Stefan Noesen.<br />
[2021-01-12 05:03:42] - TRADE : From Buffalo Sabres to Ottawa Senators : Jack Hughes, Jamie Drysdale (P).<br />
[2021-01-12 05:03:42] - TRADE : From Ottawa Senators to Buffalo Sabres : Jonathan Drouin, William Villeneuve (P), Y:2021-RND:2-NSH.<br />
[2021-01-10 05:18:26] - Jarred Tinordi was added to Seattle Kraken.<br />
[2021-01-08 05:42:12] - Harri Sateri was added to Toronto Maple Leafs.<br />
[2021-01-07 04:54:35] - Leland Irving was added to Montreal Canadiens.<br />
[2021-01-07 04:52:46] - Josh Leivo was added to Colorado Avalanche.<br />
[2021-01-07 04:52:37] - Michael Latta was added to Colorado Avalanche.<br />
[2021-01-05 05:09:21] - TRADE : From Pittsburgh Penguins to Vancouver Canucks : Derek Stepan.<br />
[2021-01-05 05:09:21] - TRADE : From Vancouver Canucks to Pittsburgh Penguins : Colin White, Ryan Spooner, Y:2022-RND:1-VAN, Y:2022-RND:3-VAN, Y:2023-RND:2-VAN.<br />
[2021-01-01 05:33:55] - Hannibal Weitzmann was added to Anaheim Ducks.<br />
[2021-01-01 04:51:57] - TRADE : From Winnipeg Jets to Montreal Canadiens : Y:2022-RND:5-WPG.<br />
[2021-01-01 04:51:57] - TRADE : From Montreal Canadiens to Winnipeg Jets : Louis Domingue.<br />
[2020-12-29 05:22:54] - TRADE : From Columbus Blue Jackets to Vegas Golden Knights : Y:2024-RND:5-CLB.<br />
[2020-12-29 05:22:54] - TRADE : From Vegas Golden Knights to Columbus Blue Jackets : Johan Sundstrom, 5 000 000 $ (Money), Y:2024-RND:4-VEG.<br />
[2020-12-25 16:46:12] - Derek Roy was added to Vegas Golden Knights.<br />
[2020-12-25 05:02:06] - TRADE : From Vegas Golden Knights to Seattle Kraken : David Griger, Y:2021-RND:5-CGY.<br />
[2020-12-25 05:02:06] - TRADE : From Seattle Kraken to Vegas Golden Knights : Troy Stecher.<br />
[2020-12-24 08:45:33] - TRADE : From Ottawa Senators to St. Louis Blues : Frans Nielsen, Y:2021-RND:4-PIT.<br />
[2020-12-24 08:45:33] - TRADE : From St. Louis Blues to Ottawa Senators : Eric Robinson.<br />
[2020-12-22 05:12:46] - TRADE : From Anaheim Ducks to Philadelphia Flyers : Sergei Bobrovsky, 1 000 000 $ (Salary Cap), Y:2022-RND:4-ANH.<br />
[2020-12-22 05:12:46] - TRADE : From Philadelphia Flyers to Anaheim Ducks : Jonathan Quick, Y:2022-RND:2-PHI.<br />
[2020-12-22 05:11:20] - TRADE : From Vancouver Canucks to Seattle Kraken : Max Jones (P), Y:2022-RND:2-SJS, Y:2022-RND:4-VAN.<br />
[2020-12-22 05:11:20] - TRADE : From Seattle Kraken to Vancouver Canucks : Ryan Spooner, 2 500 000 $ (Salary Cap), Y:2022-RND:5-ARZ.<br />
[2020-12-22 05:10:38] - TRADE : From Minnesota Wild to Philadelphia Flyers : Blake Wheeler, Benoit Pouliot, 4 000 000 $ (Salary Cap).<br />
[2020-12-22 05:10:38] - TRADE : From Philadelphia Flyers to Minnesota Wild : Andreas Johnsson, John Moore, Y:2022-RND:1-PHI.<br />
[2020-12-22 05:04:20] - TRADE : From St. Louis Blues to Pittsburgh Penguins : Jake DeBrusk, Y:2021-RND:1-CGY.<br />
[2020-12-22 05:04:20] - TRADE : From Pittsburgh Penguins to St. Louis Blues : Mika Zibanejad.<br />
[2020-12-22 02:58:10] - Andrej Meszaros was added to Calgary Flames.<br />
[2020-12-21 05:07:21] - TRADE : From St. Louis Blues to Vegas Golden Knights : Y:2021-RND:3-STL, Y:2022-RND:2-CAR, Y:2022-RND:4-STL.<br />
[2020-12-21 05:07:21] - TRADE : From Vegas Golden Knights to St. Louis Blues : Dillon Heatherington.<br />
[2020-12-21 05:06:48] - TRADE : From Calgary Flames to New York Rangers : Kyle Palmieri.<br />
[2020-12-21 05:06:48] - TRADE : From New York Rangers to Calgary Flames : Emil Andrae (P).<br />
[2020-12-21 04:12:31] - Andrew MacDonald was added to Vegas Golden Knights.<br />
[2020-12-21 04:00:37] - TRADE : From Seattle Kraken to Arizona Coyotes : Brendan Leipsic, Keegan Kanzig, 3 000 000 $ (Salary Cap).<br />
[2020-12-21 04:00:37] - TRADE : From Arizona Coyotes to Seattle Kraken : Daniel Bernhardt, Jayden Halbgewachs, Y:2022-RND:3-ARZ, Y:2022-RND:3-DET.<br />
[2020-12-20 04:57:03] - TRADE : From St. Louis Blues to Calgary Flames : Ryan Johansen, Peter Holland, 4 000 000 $ (Salary Cap).<br />
[2020-12-20 04:57:03] - TRADE : From Calgary Flames to St. Louis Blues : Ryan Dzingel, Jacob Larsson, Scott Wilson, Y:2021-RND:1-CGY.<br />
[2020-12-20 04:55:54] - TRADE : From Ottawa Senators to Minnesota Wild : Jack Roslovic, Ivan Chekhovich, Thomas Harley (P), Y:2021-RND:1-PIT.<br />
[2020-12-20 04:55:54] - TRADE : From Minnesota Wild to Ottawa Senators : Matt Dumba, Derek Dorsett, 1 500 000 $ (Salary Cap).<br />
[2020-12-19 08:06:21] - TRADE : From Dallas Stars to Pittsburgh Penguins : Y:2022-RND:1-PIT.<br />
[2020-12-19 08:06:21] - TRADE : From Pittsburgh Penguins to Dallas Stars : Y:2021-RND:1-DET, Y:2022-RND:5-DAL.<br />
[2020-12-18 05:05:46] - Alex Grant was added to Dallas Stars.<br />
[2020-12-17 05:02:37] - TRADE : From Buffalo Sabres to Tampa Bay Lightning : Elias Lindholm.<br />
[2020-12-17 05:02:37] - TRADE : From Tampa Bay Lightning to Buffalo Sabres : Ryan Strome, Tyson Foerster (P), Lukas Dostal (P), Albert Johansson (P).<br />
[2020-12-15 05:11:36] - TRADE : From New York Islanders to Seattle Kraken : Y:2022-RND:4-NYI.<br />
[2020-12-15 05:11:36] - TRADE : From Seattle Kraken to New York Islanders : Matthew Villalta.<br />
[2020-12-15 05:11:14] - TRADE : From Buffalo Sabres to Seattle Kraken : Oscar Dansk, Y:2021-RND:5-WPG.<br />
[2020-12-15 05:11:14] - TRADE : From Seattle Kraken to Buffalo Sabres : Mitchell Vande Sompel, Filip Johansson (P).<br />
[2020-12-15 04:50:23] - Mattias Ekholm was added to Toronto Maple Leafs.<br />
[2020-12-15 04:49:11] - TRADE : From Florida Panthers to Toronto Maple Leafs : Jan Kostalek.<br />
[2020-12-15 04:49:11] - TRADE : From Toronto Maple Leafs to Florida Panthers : 1 $ (Money).<br />
[2020-12-14 16:41:32] - Christian Folin was added to Dallas Stars.<br />
[2020-12-14 16:07:29] - TRADE : From Seattle Kraken to Ottawa Senators : Stanislav Galiev.<br />
[2020-12-14 05:04:33] - TRADE : From Seattle Kraken to Arizona Coyotes : David Kampf.<br />
[2020-12-14 05:04:33] - TRADE : From Arizona Coyotes to Seattle Kraken : Marcel Noebels, Y:2022-RND:5-ARZ.<br />
[2020-12-14 05:04:14] - TRADE : From Minnesota Wild to Arizona Coyotes : Petr Mrazek, 2 500 000 $ (Salary Cap).<br />
[2020-12-14 05:04:14] - TRADE : From Arizona Coyotes to Minnesota Wild : Brian Elliott, Y:2021-RND:3-VEG.<br />
[2020-12-13 10:12:40] - Mattias Ekholm was added to Tampa Bay Lightning.<br />
[2020-12-13 05:03:48] - TRADE : From Arizona Coyotes to Washington Capitals : Connor Hellebuyck, Alex DeBrincat.<br />
[2020-12-13 05:03:48] - TRADE : From Washington Capitals to Arizona Coyotes : Braden Holtby, Daniel Bernhardt.<br />
[2020-12-13 05:03:00] - TRADE : From Pittsburgh Penguins to San Jose Sharks : Y:2021-RND:1-WPG.<br />
[2020-12-13 05:03:00] - TRADE : From San Jose Sharks to Pittsburgh Penguins : Y:2023-RND:1-PIT.<br />
[2020-12-13 04:42:42] - Tyler Toffoli was added to Tampa Bay Lightning.<br />
[2020-12-12 05:42:50] - TRADE : From Florida Panthers to Minnesota Wild : Alex Barré-Boulet.<br />
[2020-12-12 05:42:50] - TRADE : From Minnesota Wild to Florida Panthers : Andreas Athanasiou, Y:2021-RND:4-MIN.<br />
[2020-12-12 05:42:32] - TRADE : From Pittsburgh Penguins to Detroit Red Wings : Matt Duchene.<br />
[2020-12-12 05:42:32] - TRADE : From Detroit Red Wings to Pittsburgh Penguins : Mika Zibanejad, Adam Lowry, Y:2021-RND:1-DET, Y:2021-RND:1-WPG.<br />
[2020-12-12 05:42:06] - TRADE : From Seattle Kraken to Winnipeg Jets : Simon Stransky, Taylor Beck, Jordan Schmaltz, Y:2021-RND:4-OTT.<br />
[2020-12-12 05:42:06] - TRADE : From Winnipeg Jets to Seattle Kraken : 1 $ (Money).<br />
[2020-12-12 05:41:42] - TRADE : From Seattle Kraken to Montreal Canadiens : Nikita Gusev, 5 000 000 $ (Salary Cap).<br />
[2020-12-12 05:41:42] - TRADE : From Montreal Canadiens to Seattle Kraken : Greg McKegg, Luka Burzan (P).<br />
[2020-12-12 05:41:19] - TRADE : From Anaheim Ducks to Montreal Canadiens : Darren Dietz.<br />
[2020-12-12 05:41:19] - TRADE : From Montreal Canadiens to Anaheim Ducks : Y:2022-RND:3-MTL.<br />
[2020-12-11 05:52:26] - TRADE : From Quebec Nordiques to Boston Bruins : Alex Vlasic (P).<br />
[2020-12-11 05:52:22] - TRADE : From Quebec Nordiques to Boston Bruins : 6 000 000 $ (Salary Cap).<br />
[2020-12-11 05:52:22] - TRADE : From Boston Bruins to Quebec Nordiques : Alex Vlasic (P).<br />
[2020-12-11 05:52:00] - TRADE : From Quebec Nordiques to Boston Bruins : Jake Guentzel.<br />
[2020-12-11 05:52:00] - TRADE : From Boston Bruins to Quebec Nordiques : Cody Glass, Jake Bean (P), Akil Thomas (P), Y:2021-RND:1-BOS, Y:2023-RND:3-BOS.<br />
[2020-12-11 05:50:48] - TRADE : From Seattle Kraken to Ottawa Senators : David Musil, Y:2021-RND:2-NSH, Y:2022-RND:2-CLB.<br />
[2020-12-11 05:50:48] - TRADE : From Ottawa Senators to Seattle Kraken : Filip Berglund, Magnus Nygren, Y:2022-RND:1-SEA, Y:2021-RND:3-NYR, Y:2021-RND:4-OTT.<br />
[2020-12-11 05:49:58] - TRADE : From Vegas Golden Knights to Philadelphia Flyers : Kevin Poulin.<br />
[2020-12-11 05:49:58] - TRADE : From Philadelphia Flyers to Vegas Golden Knights : Y:2021-RND:2-CAR, Y:2021-RND:2-PHI.<br />
[2020-12-11 05:49:18] - TRADE : From Columbus Blue Jackets to Washington Capitals : Y:2025-RND:5-CLB.<br />
[2020-12-11 05:49:18] - TRADE : From Washington Capitals to Columbus Blue Jackets : Marcus Pettersson.<br />
[2020-12-11 05:48:45] - TRADE : From Seattle Kraken to Detroit Red Wings : 1 500 000 $ (Salary Cap), Y:2022-RND:5-DET.<br />
[2020-12-11 05:48:45] - TRADE : From Detroit Red Wings to Seattle Kraken : Troy Stecher.<br />
[2020-12-11 05:47:59] - TRADE : From Anaheim Ducks to Florida Panthers : Miro Heiskanen, Alex Barré-Boulet, Y:2021-RND:3-ANH.<br />
[2020-12-11 05:47:59] - TRADE : From Florida Panthers to Anaheim Ducks : Zachary Werenski.<br />
[2020-12-11 05:47:32] - TRADE : From Seattle Kraken to Washington Capitals : Y:2025-RND:5-SEA.<br />
[2020-12-11 05:47:32] - TRADE : From Washington Capitals to Seattle Kraken : Travis Zajac.<br />
[2020-12-11 05:46:45] - TRADE : From St. Louis Blues to Florida Panthers : Marc-Edouard Vlasic.<br />
[2020-12-11 05:46:45] - TRADE : From Florida Panthers to St. Louis Blues : Ben Chiarot, Victor Söderström (P), Y:2021-RND:1-FLA.<br />
[2020-12-10 15:44:05] - Vasili Koshechkin was added to Vegas Golden Knights.<br />
[2020-12-10 08:49:33] - TRADE : From Florida Panthers to Seattle Kraken : Jonathan Bernier, Jordan Greenway, Y:2022-RND:2-FLA.<br />
[2020-12-10 08:49:33] - TRADE : From Seattle Kraken to Florida Panthers : Robin Lehner, 2 000 000 $ (Salary Cap).<br />
[2020-12-10 06:03:15] - TRADE : From Philadelphia Flyers to St. Louis Blues : Curtis Lazar, Trevor Zegras (P), Y:2021-RND:1-PHI.<br />
[2020-12-10 06:03:15] - TRADE : From St. Louis Blues to Philadelphia Flyers : Mark Scheifele, Jeremy Swayman (P), 3 000 000 $ (Salary Cap).<br />
[2020-12-10 06:02:31] - TRADE : From Columbus Blue Jackets to Seattle Kraken : Samuel Blais, Emil Bemstrom, Y:2022-RND:2-CLB.<br />
[2020-12-10 06:02:31] - TRADE : From Seattle Kraken to Columbus Blue Jackets : Yanni Gourde, Brett Bulmer, Dominik Uher.<br />
[2020-12-10 06:01:51] - TRADE : From Nashville Predators to Seattle Kraken : Taro Hirose, John Quenneville, Y:2021-RND:2-NSH, Y:2022-RND:4-NSH.<br />
[2020-12-10 06:01:51] - TRADE : From Seattle Kraken to Nashville Predators : Nicolas Petan, Mathieu Perreault, 1 500 000 $ (Salary Cap).<br />
[2020-12-10 06:01:08] - TRADE : From Winnipeg Jets to Columbus Blue Jackets : Niklas Hjalmarsson, Logan Shaw, Y:2021-RND:3-WPG.<br />
[2020-12-10 06:01:08] - TRADE : From Columbus Blue Jackets to Winnipeg Jets : Calvin de Haan, Conor Sheary, Y:2021-RND:2-CLB.<br />
[2020-12-10 06:00:32] - TRADE : From St. Louis Blues to Columbus Blue Jackets : Nathan MacKinnon.<br />
[2020-12-10 06:00:32] - TRADE : From Columbus Blue Jackets to St. Louis Blues : Andre Burakovsky, Ryan Johansen, Bowen Byram (P), 3 000 000 $ (Salary Cap), Y:2021-RND:1-CLB.<br />
[2020-12-10 05:57:46] - TRADE : From Anaheim Ducks to Ottawa Senators : Kyle Connor, Cam York (P).<br />
[2020-12-10 05:57:46] - TRADE : From Ottawa Senators to Anaheim Ducks : Sam Bennett, Y:2021-RND:2-VAN.<br />
[2020-12-09 06:12:52] - TRADE : From Detroit Red Wings to Buffalo Sabres : Jack Hughes, Elias Lindholm, John-Jason Peterka (P).<br />
[2020-12-09 06:12:52] - TRADE : From Buffalo Sabres to Detroit Red Wings : Ryan O'Reilly, Adam Henrique, 4 500 000 $ (Salary Cap).<br />
[2020-12-09 06:12:09] - TRADE : From Columbus Blue Jackets to Minnesota Wild : Michael Sgarbossa, Raphael Lavoie.<br />
[2020-12-09 06:12:09] - TRADE : From Minnesota Wild to Columbus Blue Jackets : Dmitrij Jaskin, Ziga Pance.<br />
[2020-12-09 06:10:23] - TRADE : From Vegas Golden Knights to Seattle Kraken : Casey Mittelstadt, Ryan Suzuki (P), Y:2022-RND:2-PIT.<br />
[2020-12-09 06:10:23] - TRADE : From Seattle Kraken to Vegas Golden Knights : Morgan Klimchuk, 2 000 000 $ (Salary Cap), Y:2021-RND:3-CHI.<br />
[2020-12-08 06:33:24] - TRADE : From St. Louis Blues to Ottawa Senators : Evgeny Kuznetsov.<br />
[2020-12-08 06:33:24] - TRADE : From Ottawa Senators to St. Louis Blues : Patric Hornqvist, Y:2021-RND:1-SJS, Y:2021-RND:2-MTL.<br />
[2020-12-08 04:17:46] - Philip Larsen was added to Detroit Red Wings.<br />
[2020-12-07 06:00:27] - TRADE : From New York Islanders to Tampa Bay Lightning : Patrick Holland, Logan Hutsko (P), Y:2021-RND:2-MIN, Y:2021-RND:2-NYI.<br />
[2020-12-07 06:00:27] - TRADE : From Tampa Bay Lightning to New York Islanders : Brian Dumoulin, Y:2022-RND:4-TBL.<br />
[2020-12-06 16:17:56] - Cameron Talbot was added to Carolina Hurricanes.<br />
[2020-12-05 06:06:55] - TRADE : From Vegas Golden Knights to Quebec Nordiques : Lane Pederson, Egor Afanasyev (P), Y:2021-RND:4-SJS.<br />
[2020-12-05 06:06:55] - TRADE : From Quebec Nordiques to Vegas Golden Knights : Ryan Getzlaf, 5 000 000 $ (Salary Cap).<br />
[2020-12-02 18:06:25] - Derick Brassard was added to Vegas Golden Knights.<br />
[2020-12-02 06:04:02] - TRADE : From Seattle Kraken to Calgary Flames : Brayden Schenn, Ilya Lyubushkin.<br />
[2020-12-02 06:04:02] - TRADE : From Calgary Flames to Seattle Kraken : Anton Slepyshev, Jonathon Blum, Filip Johansson (P), Y:2021-RND:3-DET.<br />
[2020-12-01 06:09:34] - Alex Goligoski was added to Pittsburgh Penguins.<br />
[2020-12-01 06:04:09] - Corey Crawford was added to Calgary Flames.<br />
[2020-11-29 12:58:09] - TRADE : From Seattle Kraken to Chicago Blackhawks : 2 500 000 $ (Salary Cap), Y:2023-RND:5-CGY.<br />
[2020-11-29 12:58:09] - TRADE : From Chicago Blackhawks to Seattle Kraken : Nathan Smith (P), Y:2021-RND:3-CHI.<br />
[2020-11-29 06:07:56] - Ivan Barbashev was added to Pittsburgh Penguins.<br />
[2020-11-29 06:07:56] - Christian Thomas was added to St. Louis Blues.<br />
[2020-11-28 06:28:56] - Matthias Plachta was added to Winnipeg Jets.<br />
[2020-11-28 06:23:50] - Gabriel Dumont was added to Winnipeg Jets.<br />
[2020-11-28 06:19:48] - Andrei Loktionov was added to Tampa Bay Lightning.<br />
[2020-11-27 09:18:56] - Tomas Jurco was added to Tampa Bay Lightning.<br />
[2020-11-27 09:18:37] - Markus Granlund was added to Tampa Bay Lightning.<br />
[2020-11-27 09:17:28] - Christian Thomas was added to Tampa Bay Lightning.<br />
[2020-11-26 05:01:58] - TRADE : From Edmonton Oilers to Colorado Avalanche : Seth Griffith.<br />
[2020-11-26 05:01:12] - TRADE : From Philadelphia Flyers to Florida Panthers : Jonathan Bernier.<br />
[2020-11-25 17:51:48] - TRADE : From Toronto Maple Leafs to Montreal Canadiens : 900 000 $ (Salary Cap), Y:2021-RND:4-TOR.<br />
[2020-11-25 17:51:48] - TRADE : From Montreal Canadiens to Toronto Maple Leafs : Y:2021-RND:3-BUF.<br />
[2020-11-25 17:43:48] - TRADE : From Washington Capitals to Chicago Blackhawks : Y:2022-RND:4-WSH.<br />
[2020-11-25 17:43:48] - TRADE : From Chicago Blackhawks to Washington Capitals : Derick Brassard, Y:2022-RND:2-CHI.<br />
[2020-11-25 06:57:52] - Casey Nelson was added to Dallas Stars.<br />
[2020-11-25 06:57:44] - Brandon Manning was added to Dallas Stars.<br />
[2020-11-25 06:48:23] - TRADE : From Calgary Flames to Montreal Canadiens : Evgeni Malkin.<br />
[2020-11-25 06:48:23] - TRADE : From Montreal Canadiens to Calgary Flames : Anthony Duclair, Morgan Frost (P), Y:2021-RND:2-TOR, Y:2023-RND:1-MTL.<br />
[2020-11-25 06:31:51] - Colin Smith was added to Colorado Avalanche.<br />
[2020-11-24 18:31:15] - Aaron Dell was added to Philadelphia Flyers.<br />
[2020-11-24 04:42:40] - Sam Jardine was added to Tampa Bay Lightning.<br />
[2020-11-24 04:42:28] - Matt Schmalz was added to Tampa Bay Lightning.<br />
[2020-11-24 04:42:13] - Colin Smith was added to Tampa Bay Lightning.<br />
[2020-11-23 13:41:32] - Vladimir Sobotka was added to Philadelphia Flyers.<br />
[2020-11-23 13:41:09] - Wojtek Wolski was added to Philadelphia Flyers.<br />
[2020-11-23 13:40:46] - Zach Budish was added to Philadelphia Flyers.<br />
[2020-11-23 13:40:25] - Zach Hamill was added to Philadelphia Flyers.<br />
[2020-11-23 13:39:26] - Jonathan Bernier was added to Philadelphia Flyers.<br />
[2020-11-23 13:23:05] - TRADE : From Tampa Bay Lightning to Florida Panthers : Boone Jenner, Martin Necas, Quinton Howden, Joey Anderson, Y:2021-RND:2-TBL.<br />
[2020-11-23 13:23:05] - TRADE : From Florida Panthers to Tampa Bay Lightning : Andrey Vasilevskiy.<br />
[2020-11-22 21:48:45] - Matt O'Connor was added to Vancouver Canucks.<br />
[2020-11-22 10:18:27] - TRADE : From Carolina Hurricanes to Columbus Blue Jackets : Y:2021-RND:4-CAR.<br />
[2020-11-22 10:18:27] - TRADE : From Columbus Blue Jackets to Carolina Hurricanes : Shayne Gostisbehere.<br />
[2020-11-22 09:56:05] - Brendan Burke was added to Quebec Nordiques.<br />
[2020-11-22 09:55:57] - Sami Aittokallio was added to Quebec Nordiques.<br />
[2020-11-22 06:54:54] - TRADE : From Philadelphia Flyers to Ottawa Senators : Keith Aulie.<br />
[2020-11-22 06:50:05] - TRADE : From Pittsburgh Penguins to Columbus Blue Jackets : Dion Phaneuf.<br />
[2020-11-22 06:44:58] - TRADE : From Colorado Avalanche to Vegas Golden Knights : Sergey Tolchinsky.<br />
[2020-11-22 06:41:19] - TRADE : From Florida Panthers to Montreal Canadiens : Patrik Berglund.<br />
[2020-11-22 06:38:04] - TRADE : From New York Islanders to Minnesota Wild : Victor Olofsson.<br />
[2020-11-22 06:35:58] - TRADE : From Vancouver Canucks to Tampa Bay Lightning : Ken Appleby.<br />
[2020-11-22 06:30:12] - TRADE : From Quebec Nordiques to Edmonton Oilers : Frank Vatrano.<br />
[2020-11-22 06:27:52] - TRADE : From Florida Panthers to Quebec Nordiques : Rihards Bukarts.<br />
[2020-11-22 06:23:20] - TRADE : From Vancouver Canucks to Ottawa Senators : Frans Nielsen.<br />
[2020-11-22 06:21:05] - TRADE : From Carolina Hurricanes to Pittsburgh Penguins : Dominik Simon.<br />
[2020-11-22 06:13:55] - TRADE : From Quebec Nordiques to St. Louis Blues : Ivan Nalimov.<br />
[2020-11-22 06:03:51] - TRADE : From Vancouver Canucks to Boston Bruins : Rick Nash.<br />
[2020-11-21 05:42:19] - Mikko Koivu was added to Toronto Maple Leafs.<br />
[2020-11-19 16:39:18] - Alexander Urbom was added to Seattle Kraken.<br />
[2020-11-19 16:38:41] - TRADE : From Montreal Canadiens to Seattle Kraken : 1 $ (Money).<br />
[2020-11-19 16:38:41] - TRADE : From Seattle Kraken to Montreal Canadiens : Antoine Marcoux.<br />
[2020-11-18 05:27:25] - TRADE : From Vegas Golden Knights to Seattle Kraken : Ryan Spooner, 3 500 000 $ (Salary Cap).<br />
[2020-11-18 05:27:25] - TRADE : From Seattle Kraken to Vegas Golden Knights : Y:2022-RND:2-PIT.<br />
[2020-11-16 13:54:28] - Jacob Peterson has been added to Philadelphia Flyers.<br />
[2020-11-16 05:42:38] - Alexandre Bélanger was added to Seattle Kraken.<br />
[2020-11-16 05:13:34] - Antti Niemi was added to Los Angeles Kings.<br />
[2020-11-15 18:22:39] - TRADE : From Seattle Saints to San Jose Sharks : Andrew Shaw, Connor McClennon (P), Y:2023-RND:2-SEA.<br />
[2020-11-15 18:22:39] - TRADE : From San Jose Sharks to Seattle Saints : Yanni Gourde.<br />
[2020-11-15 13:35:46] - Ian Cole was added to St. Louis Blues.<br />
[2020-11-15 13:35:33] - Tomas Plekanec was added to St. Louis Blues.<br />
[2020-11-15 09:45:09] - Nick Palmieri was added to Nashville Predators.<br />
[2020-11-15 05:59:51] - TRADE : From Pittsburgh Penguins to San Jose Sharks : Brandon Sutter, Jonathan Audy-Marchessault, Y:2023-RND:1-PIT, Y:2023-RND:2-PIT.<br />
[2020-11-15 05:59:51] - TRADE : From San Jose Sharks to Pittsburgh Penguins : Tyler Ennis, Y:2023-RND:4-VEG, Y:2023-RND:5-SJS.<br />
[2020-11-11 06:25:30] - TRADE : From Vegas Golden Knights to Seattle Saints : Morgan Klimchuk, Braydyn Chizen, Y:2021-RND:4-NYI.<br />
[2020-11-11 06:25:30] - TRADE : From Seattle Saints to Vegas Golden Knights : Darnell Nurse, 2 500 000 $ (Salary Cap).<br />
[2020-11-10 05:41:50] - TRADE : From Boston Bruins to Montreal Canadiens : Josh Harding, 3 500 000 $ (Salary Cap), Y:2022-RND:3-BOS.<br />
[2020-11-10 05:41:50] - TRADE : From Montreal Canadiens to Boston Bruins : Pavel Francouz, Akil Thomas (P).<br />
[2020-10-30 08:50:40] - Brandon Dubinsky was added to Florida Panthers.<br />
[2020-10-30 08:50:31] - Patrik Berglund was added to Florida Panthers.<br />
[2020-10-30 08:50:21] - Beau Bennett was added to Florida Panthers.<br />
[2020-10-30 08:50:12] - Alexei Emelin was added to Florida Panthers.<br />
[2020-10-30 08:50:02] - Justin Abdelkader was added to Florida Panthers.<br />
[2020-10-30 08:49:48] - Alexei Marchenko was added to Florida Panthers.<br />
[2020-10-30 08:49:37] - Andrej Sustr was added to Florida Panthers.<br />
[2020-10-30 08:49:29] - Fredrik Claesson was added to Florida Panthers.<br />
[2020-10-27 08:41:54] - TRADE : From Dallas Stars to Pittsburgh Penguins : Vladimir Tarasenko, Y:2022-RND:5-DAL.<br />
[2020-10-27 08:41:54] - TRADE : From Pittsburgh Penguins to Dallas Stars : Jakub Voracek, Ryan Collins, Mikhail Abramov (P), Y:2022-RND:1-PIT.<br />
[2020-10-27 08:41:09] - TRADE : From Florida Panthers to Pittsburgh Penguins : Y:2021-RND:3-FLA.<br />
[2020-10-27 08:41:09] - TRADE : From Pittsburgh Penguins to Florida Panthers : Frederik Andersen, Linus Arnesson.<br />
[2020-10-27 08:40:50] - TRADE : From Tampa Bay Lightning to Pittsburgh Penguins : John Gibson.<br />
[2020-10-27 08:40:50] - TRADE : From Pittsburgh Penguins to Tampa Bay Lightning : Bryan Rust, Pavel Buchnevich.<br />
[2020-10-27 08:40:30] - TRADE : From New York Islanders to Chicago Blackhawks : David Savard, Y:2021-RND:3-TBL.<br />
[2020-10-27 08:40:30] - TRADE : From Chicago Blackhawks to New York Islanders : Joakim Ryan.<br />
[2020-10-27 08:39:55] - TRADE : From Vegas Golden Knights to Pittsburgh Penguins : Kristopher Letang, Pavel Buchnevich.<br />
[2020-10-27 08:39:55] - TRADE : From Pittsburgh Penguins to Vegas Golden Knights : Erik Johnson, Adam Erne.<br />
[2020-10-27 08:39:33] - TRADE : From Arizona Coyotes to Seattle Saints : Andrew Shaw, Matthew Finn.<br />
[2020-10-27 08:39:33] - TRADE : From Seattle Saints to Arizona Coyotes : Raman Hrabarenka.<br />
[2020-10-27 08:39:12] - TRADE : From Ottawa Senators to Vegas Golden Knights : Brock Nelson.<br />
[2020-10-27 08:39:12] - TRADE : From Vegas Golden Knights to Ottawa Senators : Devante Smith-Pelly.<br />
[2020-10-27 08:38:49] - TRADE : From Ottawa Senators to Montreal Canadiens : Y:2021-RND:3-BUF.<br />
[2020-10-27 08:38:49] - TRADE : From Montreal Canadiens to Ottawa Senators : Alexander Urbom.<br />
[2020-10-27 08:38:34] - TRADE : From Pittsburgh Penguins to Vancouver Canucks : Brandon Halverson, Y:2024-RND:3-PIT.<br />
[2020-10-27 08:38:34] - TRADE : From Vancouver Canucks to Pittsburgh Penguins : Frederik Andersen.<br />
[2020-10-27 08:37:41] - David Desharnais was added to Vancouver Canucks.<br />
[2020-10-27 08:37:30] - Frederik Andersen was added to Vancouver Canucks.<br />
[2020-10-27 08:35:38] - TRADE : From Pittsburgh Penguins to Anaheim Ducks : Mike Hoffman, Dustin Brown, Y:2023-RND:4-PIT.<br />
[2020-10-27 08:35:38] - TRADE : From Anaheim Ducks to Pittsburgh Penguins : Jonathan Audy-Marchessault, Bryan Rust.<br />
[2020-10-27 08:35:05] - TRADE : From Vegas Golden Knights to New York Islanders : Brett Seney.<br />
[2020-10-27 08:35:05] - TRADE : From New York Islanders to Vegas Golden Knights : Y:2022-RND:5-SJS.<br />
[2020-10-27 08:34:16] - Victor Antipin was added to Vegas Golden Knights.<br />
[2020-10-27 08:32:00] - TRADE : From New York Islanders to Anaheim Ducks : Jonathan Audy-Marchessault.<br />
[2020-10-27 08:30:50] - Tyler Cuma was added to Pittsburgh Penguins.<br />
[2020-10-27 08:30:43] - Mike Green was added to Pittsburgh Penguins.<br />
[2020-10-27 08:30:34] - Karl Alzner was added to Pittsburgh Penguins.<br />
[2020-10-27 08:30:20] - Kyle Turris was added to Pittsburgh Penguins.<br />
[2020-10-27 08:30:12] - Henrik Zetterberg was added to Pittsburgh Penguins.<br />
[2020-10-27 08:29:34] - Noel Acciari was added to Arizona Coyotes.<br />
[2020-10-27 08:26:15] - TRADE : From Seattle Saints to Buffalo Sabres : Dominic Turgeon, Y:2022-RND:4-VEG.<br />
[2020-10-27 08:26:15] - TRADE : From Buffalo Sabres to Seattle Saints : Joseph Garreffa, Mikhail Vorobyov.<br />
[2020-10-27 08:25:12] - TRADE : From Detroit Red Wings to Seattle Saints : Y:2022-RND:5-DET.<br />
[2020-10-27 08:25:12] - TRADE : From Seattle Saints to Detroit Red Wings : Kirill Petrov, 2 150 000 $ (Money), Y:2022-RND:4-SEA.<br />
[2020-10-27 08:24:38] - TRADE : From New York Islanders to Vegas Golden Knights : Johan Sundstrom.<br />
[2020-10-27 08:24:38] - TRADE : From Vegas Golden Knights to New York Islanders : Jonathan Audy-Marchessault, 5 000 000 $ (Money), Y:2021-RND:4-VEG, Y:2022-RND:5-SJS.<br />
[2020-10-27 08:24:02] - TRADE : From St. Louis Blues to Carolina Hurricanes : Jamie Oleksiak.<br />
[2020-10-27 08:24:02] - TRADE : From Carolina Hurricanes to St. Louis Blues : Tanner Pearson.<br />
[2020-10-27 08:23:43] - TRADE : From St. Louis Blues to Vegas Golden Knights : Valeri Nichushkin, Y:2021-RND:4-NSH.<br />
[2020-10-27 08:23:43] - TRADE : From Vegas Golden Knights to St. Louis Blues : Jake DeBrusk, Y:2024-RND:5-VEG.<br />
[2020-07-21 08:59:55] - Dominic Toninato has been deleted from Dallas Stars.<br />
[2020-07-21 08:59:44] - Yakov Trenin was added to Colorado Avalanche.<br />
[2020-07-21 08:59:39] - Kyle Rau was added to Colorado Avalanche.<br />
[2020-07-21 08:59:37] - Keegan Iverson was added to Colorado Avalanche.<br />
[2020-07-21 08:59:35] - Joseph Cramarossa was added to Colorado Avalanche.<br />
[2020-07-21 08:59:32] - Brendan Warren was added to Colorado Avalanche.<br />
[2020-07-21 08:03:09] - Dominik Uher was added to Seattle Saints.<br />
[2020-07-21 08:02:58] - Brett Bulmer was added to Seattle Saints.<br />
[2020-07-21 08:02:42] - Taylor Beck was added to Seattle Saints.<br />
[2020-07-21 05:55:13] - TRADE : From Columbus Blue Jackets to Arizona Coyotes : Andrew Shaw, 2 000 000 $ (Salary Cap).<br />
[2020-07-21 05:55:13] - TRADE : From Arizona Coyotes to Columbus Blue Jackets : Michael Sgarbossa, Y:2023-RND:4-ARZ.<br />
[2020-07-20 17:00:24] - TRADE : From Seattle Saints to Montreal Canadiens : Alex Chiasson, Y:2023-RND:5-SEA.<br />
[2020-07-20 17:00:24] - TRADE : From Montreal Canadiens to Seattle Saints : Clark Bishop, Dominic Turgeon.<br />
[2020-07-20 15:29:50] - David Honzik has been deleted from Vancouver Canucks.<br />
[2020-07-20 15:22:47] - Yannick Veilleux has been deleted from St. Louis Blues.<br />
[2020-07-20 15:22:17] - Troy Josephs has been deleted from St. Louis Blues.<br />
[2020-07-20 15:22:03] - Niko Hovinen has been deleted from St. Louis Blues.<br />
[2020-07-20 15:21:51] - Jonathan Racine has been deleted from St. Louis Blues.<br />
[2020-07-20 15:21:41] - Jonas Junland has been deleted from St. Louis Blues.<br />
[2020-07-20 15:18:54] - Zach Sill has been deleted from Pittsburgh Penguins.<br />
[2020-07-20 15:18:23] - Henri Ikonen has been deleted from Pittsburgh Penguins.<br />
[2020-07-20 15:17:31] - Colin McDonald has been deleted from Pittsburgh Penguins.<br />
[2020-07-20 15:16:54] - Ilya Konovalov has been deleted from Ottawa Senators.<br />
[2020-07-20 15:15:19] - Troy Bourke has been deleted from New York Islanders.<br />
[2020-07-20 15:15:05] - Santeri Saari has been deleted from New York Islanders.<br />
[2020-07-20 15:12:37] - John Persson has been deleted from New York Islanders.<br />
[2020-07-20 15:12:14] - Corey Trivino has been deleted from New York Islanders.<br />
[2020-07-20 15:06:15] - Seth Helgeson has been deleted from New Jersey Devils.<br />
[2020-07-20 15:05:39] - Daniel Altshuller has been deleted from New Jersey Devils.<br />
[2020-07-20 15:05:25] - Blake Pietila has been deleted from New Jersey Devils.<br />
[2020-07-20 14:59:50] - Rasmus Bodin has been deleted from Detroit Red Wings.<br />
[2020-07-20 14:58:59] - Patrick Sieloff has been deleted from Detroit Red Wings.<br />
[2020-07-20 14:57:33] - Mitchell Heard has been deleted from Dallas Stars.<br />
[2020-07-20 14:57:21] - Matej Stransky has been deleted from Dallas Stars.<br />
[2020-07-20 14:57:04] - Luke Gazdic has been deleted from Dallas Stars.<br />
[2020-07-20 14:56:11] - Hubert Labrie has been deleted from Dallas Stars.<br />
[2020-07-20 14:55:58] - Guillaume Gélinas has been deleted from Dallas Stars.<br />
[2020-07-20 14:55:39] - Emil Molin has been deleted from Dallas Stars.<br />
[2020-07-20 14:50:21] - Tommi Kivisto has been deleted from Carolina Hurricanes.<br />
[2020-07-20 14:50:11] - Tanner Kero has been deleted from Carolina Hurricanes.<br />
[2020-07-20 14:49:59] - Rasmus Rissanen has been deleted from Carolina Hurricanes.<br />
[2020-07-20 14:49:49] - Michal Jordan has been deleted from Carolina Hurricanes.<br />
[2020-07-20 14:49:38] - Logan Nelson has been deleted from Carolina Hurricanes.<br />
[2020-07-20 14:49:22] - Keegan Lowe has been deleted from Carolina Hurricanes.<br />
[2020-07-20 14:49:07] - Gregory Hofmann has been deleted from Carolina Hurricanes.<br />
[2020-07-20 08:26:07] - Nils Höglander was added to Dallas Stars.<br />
[2020-07-20 08:26:02] - Albin Eriksson was added to Dallas Stars.<br />
[2020-07-20 06:00:54] - Luke Adam was added to Nashville Predators.<br />
[2020-07-20 06:00:44] - Patrick Wiercioch was added to Nashville Predators.<br />
[2020-07-20 05:55:54] - Brian Boyle was added to Dallas Stars.<br />
[2020-07-20 05:53:26] - Liam O'Brien was added to Tampa Bay Lightning.<br />
[2020-07-20 05:53:08] - Brandon Burlon was added to Tampa Bay Lightning.<br />
[2020-07-20 05:52:57] - Riley Stadel was added to Tampa Bay Lightning.<br />
[2020-07-20 05:48:20] - Louick Marcotte was added to Vancouver Canucks.<br />
[2020-07-20 05:44:56] - Konstantin Barulin was added to Vegas Golden Knights.<br />
[2020-07-20 05:43:02] - Antoine Roussel was added to St. Louis Blues.<br />
[2020-07-20 05:40:21] - Wayne Simmonds was added to Pittsburgh Penguins.<br />
[2020-07-20 05:06:27] - TRADE : From Washington Capitals to Carolina Hurricanes : Radovan Bondra.<br />
[2020-07-20 05:06:27] - TRADE : From Carolina Hurricanes to Washington Capitals : Travis Zajac, Y:2022-RND:3-CAR.<br />
[2020-07-19 11:22:19] - Nick Seeler was added to Minnesota Wild.<br />
[2020-07-19 07:51:29] - Nicolas Roy was added to Los Angeles Kings.<br />
[2020-07-19 07:51:25] - Dante Fabbro was added to Los Angeles Kings.<br />
[2020-07-19 07:51:22] - Alexander Volkov was added to Los Angeles Kings.<br />
[2020-07-19 07:31:17] - Ales Hemsky was added to Carolina Hurricanes.<br />
[2020-07-19 07:31:10] - Joe Colborne was added to Carolina Hurricanes.<br />
[2020-07-19 07:27:41] - Ben Smith was added to Tampa Bay Lightning.<br />
[2020-07-19 07:24:32] - Edward Pasquale was added to Colorado Avalanche.<br />
[2020-07-19 07:22:20] - David Schlemko was added to Vancouver Canucks.<br />
[2020-07-19 07:22:10] - Rick Nash was added to Vancouver Canucks.<br />
[2020-07-19 07:22:02] - Jakub Jerabek was added to Vancouver Canucks.<br />
[2020-07-19 07:15:17] - John Hayden was added to Vegas Golden Knights.<br />
[2020-07-19 07:13:02] - Brian Elliott was added to Arizona Coyotes.<br />
[2020-07-19 07:10:03] - Dion Phaneuf was added to Pittsburgh Penguins.<br />
[2020-07-19 06:11:57] - Kirby Dach was added to Edmonton Oilers.<br />
[2020-07-19 06:11:55] - Jakub Lauko was added to Edmonton Oilers.<br />
[2020-07-19 06:11:53] - Henri Jokiharju was added to Edmonton Oilers.<br />
[2020-07-19 05:02:22] - TRADE : From Vegas Golden Knights to New Jersey Devils : Patrice Bergeron, Y:2022-RND:3-TBL.<br />
[2020-07-19 05:02:22] - TRADE : From New Jersey Devils to Vegas Golden Knights : Ryan Spooner, Jonathan Audy-Marchessault, Casey Mittelstadt.<br />
[2020-07-18 07:29:24] - Maxwell Reinhart was added to Carolina Hurricanes.<br />
[2020-07-18 07:24:40] - Dustin Brown was added to Pittsburgh Penguins.<br />
[2020-07-18 07:22:01] - Carl Klingberg was added to Vancouver Canucks.<br />
[2020-07-18 07:21:53] - Mattias Tedenby was added to Vancouver Canucks.<br />
[2020-07-18 07:15:48] - Chet Pickard was added to Nashville Predators.<br />
[2020-07-18 07:09:11] - T.J. Brodie was added to Nashville Predators.<br />
[2020-07-18 07:04:34] - Ryan Fitzgerald was added to Anaheim Ducks.<br />
[2020-07-18 07:04:30] - Pierre Engvall was added to Anaheim Ducks.<br />
[2020-07-18 07:04:15] - Michael Brodzinski was added to Anaheim Ducks.<br />
[2020-07-18 07:04:09] - Kyle Wood was added to Anaheim Ducks.<br />
[2020-07-18 07:04:04] - Devon Toews was added to Anaheim Ducks.<br />
[2020-07-18 07:03:53] - Daniel Zaar was added to Anaheim Ducks.<br />
[2020-07-18 07:03:51] - Cole Sanford was added to Anaheim Ducks.<br />
[2020-07-18 07:03:48] - Axel Holmstrom was added to Anaheim Ducks.<br />
[2020-07-18 07:03:37] - Adam Fox was added to Anaheim Ducks.<br />
[2020-07-17 05:58:35] - Anton Lander was added to Vancouver Canucks.<br />
[2020-07-17 05:55:50] - Mattias Backman was added to Vancouver Canucks.<br />
[2020-07-17 05:50:20] - David Desharnais was added to Arizona Coyotes.<br />
[2020-07-17 05:44:32] - Jhonas Enroth was added to Carolina Hurricanes.<br />
[2020-07-17 05:41:48] - Brandon Pirri was added to Calgary Flames.<br />
[2020-07-17 05:37:31] - Michael Grabner was added to Buffalo Sabres.<br />
[2020-07-17 05:27:58] - Reinhard Venter was added to Arizona Coyotes.<br />
[2020-07-17 05:27:53] - Declan Bronte was added to Arizona Coyotes.<br />
[2020-07-17 05:27:47] - Hakan Salt was added to Arizona Coyotes.<br />
[2020-07-17 05:27:44] - Kirill Steklov was added to Arizona Coyotes.<br />
[2020-07-17 05:27:42] - Marko Mladenovic was added to Arizona Coyotes.<br />
[2020-07-17 05:27:40] - Liam Kirk was added to Arizona Coyotes.<br />
[2020-07-17 05:27:37] - Semyon Der-Arguchintsev was added to Arizona Coyotes.<br />
[2020-07-17 05:27:32] - Oskar Lindblom was added to Arizona Coyotes.<br />
[2020-07-16 16:05:44] - Dominik Kubalik was added to New York Islanders.<br />
[2020-07-16 16:05:41] - Kirill Kabanov was added to New York Islanders.<br />
[2020-07-16 16:05:37] - Brandon Gignac was added to New York Islanders.<br />
[2020-07-16 15:45:44] - William Lagesson was added to New York Rangers.<br />
[2020-07-16 15:45:41] - Vladislav Gavrikov was added to New York Rangers.<br />
[2020-07-16 15:45:36] - Nikolay Goldobin was added to New York Rangers.<br />
[2020-07-16 15:45:31] - Josh Norris was added to New York Rangers.<br />
[2020-07-16 15:45:29] - Jeremy Bracco was added to New York Rangers.<br />
[2020-07-16 15:45:28] - Jan Jenik was added to New York Rangers.<br />
[2020-07-16 15:45:26] - Glenn Gawdin was added to New York Rangers.<br />
[2020-07-16 15:45:23] - Cam Hillis was added to New York Rangers.<br />
[2020-07-16 15:45:19] - Aidan Dudas was added to New York Rangers.<br />
[2020-07-16 15:45:16] - Jon Gillies was added to New York Rangers.<br />
[2020-07-16 11:03:31] - Ryan Bourque has been deleted from New York Rangers.<br />
[2020-07-16 08:13:48] - Daniel Carr was added to Carolina Hurricanes.<br />
[2020-07-16 08:11:49] - Jack Hillen was added to St. Louis Blues.<br />
[2020-07-16 08:09:29] - Nick Ebert was added to Seattle Saints.<br />
[2020-07-16 08:06:36] - Eric Staal was added to Arizona Coyotes.<br />
[2020-07-16 08:03:39] - Jeff Carter was added to Arizona Coyotes.<br />
[2020-07-16 08:01:54] - Andreas Engqvist was added to Chicago Blackhawks.<br />
[2020-07-16 08:00:25] - Ondrej Palat was added to New York Islanders.<br />
[2020-07-16 07:58:25] - Dustin Tokarski was added to Colorado Avalanche.<br />
[2020-07-16 05:18:01] - TRADE : From Vegas Golden Knights to New York Islanders : Patrick Holland, Julius Bergman.<br />
[2020-07-16 05:18:01] - TRADE : From New York Islanders to Vegas Golden Knights : Mac Weegar, Y:2021-RND:4-NYI, Y:2021-RND:4-SJS.<br />
[2020-07-15 15:55:09] - Steven Fogarty has been deleted from New York Rangers.<br />
[2020-07-15 15:54:57] - Peter Ceresnak has been deleted from New York Rangers.<br />
[2020-07-15 15:54:52] - Joni Nikko has been deleted from New York Rangers.<br />
[2020-07-15 11:39:12] - TRADE : From Tampa Bay Lightning to Vegas Golden Knights : Devante Smith-Pelly, Ryan Suzuki (P), Y:2021-RND:3-PHI, Y:2022-RND:3-TBL.<br />
[2020-07-15 11:39:12] - TRADE : From Vegas Golden Knights to Tampa Bay Lightning : Simon Despres, Y:2022-RND:1-VEG, Y:2023-RND:3-VEG.<br />
[2020-07-15 11:36:29] - Yevgeni Svechnikov was added to Calgary Flames.<br />
[2020-07-15 11:36:27] - Todd Burgess was added to Calgary Flames.<br />
[2020-07-15 11:36:22] - Leon Gawanke was added to Calgary Flames.<br />
[2020-07-15 11:36:19] - Dennis Gilbert was added to Calgary Flames.<br />
[2020-07-15 06:48:42] - Christopher Gibson was added to Nashville Predators.<br />
[2020-07-15 06:45:25] - Brett Connolly was added to Quebec Nordiques.<br />
[2020-07-15 06:26:14] - Tyler Bozak was added to Los Angeles Kings.<br />
[2020-07-14 17:10:09] - Spencer Smallman was added to Vancouver Canucks.<br />
[2020-07-14 17:10:05] - Lucas Johansen was added to Vancouver Canucks.<br />
[2020-07-14 17:10:03] - Matt Filipe was added to Vancouver Canucks.<br />
[2020-07-14 08:08:11] - Evgeny Dadonov was added to Chicago Blackhawks.<br />
[2020-07-14 08:05:31] - Ryan Haggerty was added to Seattle Saints.<br />
[2020-07-14 08:02:41] - Stephen Johns was added to Carolina Hurricanes.<br />
[2020-07-13 07:02:44] - Jason Zucker was added to Colorado Avalanche.<br />
[2020-07-13 06:59:18] - Duncan Keith was added to Arizona Coyotes.<br />
[2020-07-13 06:57:01] - Dominik Simon was added to Carolina Hurricanes.<br />
[2020-07-13 06:53:44] - Zach Hyman was added to Detroit Red Wings.<br />
[2020-07-13 06:01:38] - TRADE : From Chicago Blackhawks to Minnesota Wild : Byron Froese, Y:2022-RND:4-CHI.<br />
[2020-07-13 06:01:38] - TRADE : From Minnesota Wild to Chicago Blackhawks : Nikolay Prokhorkin.<br />
[2020-07-12 07:03:11] - Devan Dubnyk was added to Edmonton Oilers.<br />
[2020-07-12 07:00:36] - Frans Nielsen was added to Vancouver Canucks.<br />
[2020-07-12 06:58:29] - Adam Burish was added to St. Louis Blues.<br />
[2020-07-12 06:55:51] - Markus Lauridsen was added to Carolina Hurricanes.<br />
[2020-07-12 06:54:11] - Patrick Holland was added to Vegas Golden Knights.<br />
[2020-07-12 06:44:32] - Olivier Roy was added to Calgary Flames.<br />
[2020-07-12 06:37:40] - Christian Ehrhoff was added to Pittsburgh Penguins.<br />
[2020-07-12 06:35:16] - Stanislav Galiev was added to Seattle Saints.<br />
[2020-07-11 08:30:43] - Alec Martinez was added to Nashville Predators.<br />
[2020-07-11 08:28:02] - Marc-Andre Gragnani was added to Vancouver Canucks.<br />
[2020-07-11 08:26:00] - Jordan Caron was added to Winnipeg Jets.<br />
[2020-07-10 07:28:45] - Zach Parise was added to Ottawa Senators.<br />
[2020-07-10 07:25:22] - Joe Pavelski was added to Minnesota Wild.<br />
[2020-07-10 06:08:34] - TRADE : From Arizona Coyotes to Minnesota Wild : Sven Andrighetto, Justin Almeida, Brett Leason (P), Y:2022-RND:4-ARZ.<br />
[2020-07-10 06:08:34] - TRADE : From Minnesota Wild to Arizona Coyotes : Ryan Suter, 4 000 000 $ (Salary Cap).<br />
[2020-07-09 10:34:41] - Maxime Talbot was added to Pittsburgh Penguins.<br />
[2020-07-09 08:23:25] - Jakob Silfverberg was added to Carolina Hurricanes.<br />
[2020-07-09 08:20:59] - Cameron Talbot was added to Pittsburgh Penguins.<br />
[2020-07-09 08:19:06] - Kevin Klein was added to St. Louis Blues.<br />
[2020-07-09 08:18:18] - Zane McIntyre was added to Boston Bruins.<br />
[2020-07-09 08:18:14] - Mario Ferraro was added to Boston Bruins.<br />
[2020-07-09 08:18:09] - Dillon Dube was added to Boston Bruins.<br />
[2020-07-09 08:18:08] - Calvin Thurkauf was added to Boston Bruins.<br />
[2020-07-09 08:18:05] - Adam Mascherin was added to Boston Bruins.<br />
[2020-07-08 06:51:35] - Johan Larsson was added to Nashville Predators.<br />
[2020-07-08 06:50:17] - Jan Rutta was added to Montreal Canadiens.<br />
[2020-07-08 06:47:22] - Jiri Sekac was added to Buffalo Sabres.<br />
[2020-07-07 09:54:01] - Raphael Lavoie was added to Columbus Blue Jackets.<br />
[2020-07-07 09:53:53] - Mattias Samuelsson was added to Columbus Blue Jackets.<br />
[2020-07-07 09:53:51] - Ilya Mikheyev was added to Columbus Blue Jackets.<br />
[2020-07-07 09:53:49] - Filip Ahl was added to Columbus Blue Jackets.<br />
[2020-07-07 09:28:29] - Spencer Stastney was added to Nashville Predators.<br />
[2020-07-07 09:28:26] - Nicholas Caamano was added to Nashville Predators.<br />
[2020-07-07 09:28:23] - Jonas Johansson was added to Nashville Predators.<br />
[2020-07-07 09:28:15] - Bode Wilde was added to Nashville Predators.<br />
[2020-07-07 06:34:18] - Henrik Lundqvist was added to Columbus Blue Jackets.<br />
[2020-07-07 06:34:04] - Jordan Weal was added to Carolina Hurricanes.<br />
[2020-07-07 06:33:52] - Leo Komarov was added to Pittsburgh Penguins.<br />
[2020-07-07 05:18:29] - Dylan Sadowy has been deleted from Nashville Predators.<br />
[2020-07-07 05:13:56] - TRADE : From Chicago Blackhawks to Colorado Avalanche : Gustav Olofsson.<br />
[2020-07-07 05:13:56] - TRADE : From Colorado Avalanche to Chicago Blackhawks : Jimmy Huntington, Y:2023-RND:5-COL.<br />
[2020-07-07 05:11:41] - TRADE : From Ottawa Senators to Colorado Avalanche : Christian Djoos.<br />
[2020-07-07 05:11:41] - TRADE : From Colorado Avalanche to Ottawa Senators : Y:2022-RND:4-COL.<br />
[2020-07-06 16:47:35] - Sam Lafferty was added to Montreal Canadiens.<br />
[2020-07-06 16:47:32] - Noah Gregor was added to Montreal Canadiens.<br />
[2020-07-06 16:47:24] - Curtis Douglas was added to Montreal Canadiens.<br />
[2020-07-06 16:47:21] - Blake Lizotte was added to Montreal Canadiens.<br />
[2020-07-06 16:47:19] - Alexis Gravel was added to Montreal Canadiens.<br />
[2020-07-06 14:50:42] - Valentin Nussbaumer was added to Washington Capitals.<br />
[2020-07-06 14:50:40] - Tyler Steenbergen was added to Washington Capitals.<br />
[2020-07-06 14:50:37] - Simon Gnyp was added to Washington Capitals.<br />
[2020-07-06 14:50:32] - Mason Shaw was added to Washington Capitals.<br />
[2020-07-06 14:50:31] - Markus Nurmi was added to Washington Capitals.<br />
[2020-07-06 14:50:26] - Kristian Tanus was added to Washington Capitals.<br />
[2020-07-06 14:50:23] - Klim Kostin was added to Washington Capitals.<br />
[2020-07-06 14:50:19] - Jordan Spence was added to Washington Capitals.<br />
[2020-07-06 14:50:16] - Dmitry Zavgorodniy was added to Washington Capitals.<br />
[2020-07-06 14:50:13] - Artemi Knyazev was added to Washington Capitals.<br />
[2020-07-06 14:50:07] - Alexander Alexeyev was added to Washington Capitals.<br />
[2020-07-06 14:50:04] - Dustin Wolf was added to Washington Capitals.<br />
[2020-07-06 10:58:49] - TRADE : From Detroit Red Wings to Toronto Maple Leafs : Mikko Lehtonen.<br />
[2020-07-06 10:58:49] - TRADE : From Toronto Maple Leafs to Detroit Red Wings : Troy Stecher, 1 000 000 $ (Salary Cap).<br />
[2020-07-06 10:58:26] - TRADE : From Philadelphia Flyers to Montreal Canadiens : Nolan Patrick, Noah Gregor (P).<br />
[2020-07-06 10:58:26] - TRADE : From Montreal Canadiens to Philadelphia Flyers : Oscar Klefbom.<br />
[2020-07-06 07:06:01] - TRADE : From Ottawa Senators to Montreal Canadiens : Jakub Vrana, Julius Honka.<br />
[2020-07-06 07:06:01] - TRADE : From Montreal Canadiens to Ottawa Senators : Sam Bennett, Ryan Tesink, Kevin Roy, Y:2021-RND:2-MTL.<br />
[2020-07-06 06:51:32] - Logan Shaw was added to Winnipeg Jets.<br />
[2020-07-06 06:49:21] - Patrik Nemeth was added to Carolina Hurricanes.<br />
[2020-07-06 06:45:49] - Andrew Cogliano was added to Detroit Red Wings.<br />
[2020-07-05 07:43:19] - Zachary Emond was added to San Jose Sharks.<br />
[2020-07-05 07:43:18] - William Rouleau was added to San Jose Sharks.<br />
[2020-07-05 07:43:16] - Samuel Regis was added to San Jose Sharks.<br />
[2020-07-05 07:43:14] - Justin Bergeron was added to San Jose Sharks.<br />
[2020-07-05 07:43:12] - Alexis Arsenault was added to San Jose Sharks.<br />
[2020-07-05 07:43:10] - Alex Beaucage was added to San Jose Sharks.<br />
[2020-07-05 07:08:16] - Alexander Semin was added to New Jersey Devils.<br />
[2020-07-05 07:05:39] - Mattias Ekholm was added to Quebec Nordiques.<br />
[2020-07-05 07:02:10] - Anton Forsberg was added to Vancouver Canucks.<br />
[2020-07-04 11:58:06] - Tye Felhaber was added to St. Louis Blues.<br />
[2020-07-04 11:57:58] - Oskar Steen was added to St. Louis Blues.<br />
[2020-07-04 11:57:56] - Niklas Hansson was added to St. Louis Blues.<br />
[2020-07-04 11:57:49] - Miroslav Svoboda was added to St. Louis Blues.<br />
[2020-07-04 11:57:47] - Matt Roy was added to St. Louis Blues.<br />
[2020-07-04 11:57:45] - Marcus Hogberg was added to St. Louis Blues.<br />
[2020-07-04 11:57:39] - Ludwig Bystrom was added to St. Louis Blues.<br />
[2020-07-04 11:57:34] - Jens Lööke was added to St. Louis Blues.<br />
[2020-07-04 11:57:31] - Dennis Yan was added to St. Louis Blues.<br />
[2020-07-04 11:57:28] - Blake Speers was added to St. Louis Blues.<br />
[2020-07-04 11:57:26] - Austin Lemieux was added to St. Louis Blues.<br />
[2020-07-04 10:20:25] - Mikko Lehtonen was added to Detroit Red Wings.<br />
[2020-07-04 09:21:58] - Ivan Chekhovich was added to Ottawa Senators.<br />
[2020-07-04 09:21:55] - David Gustafsson was added to Ottawa Senators.<br />
[2020-07-04 09:21:53] - Christian Djoos was added to Ottawa Senators.<br />
[2020-07-04 08:04:20] - Will Borgen was added to Vegas Golden Knights.<br />
[2020-07-04 08:04:15] - Lassi Thomson was added to Vegas Golden Knights.<br />
[2020-07-04 08:04:11] - Janne Kuokkanen was added to Vegas Golden Knights.<br />
[2020-07-04 08:04:07] - Brayden Burke was added to Vegas Golden Knights.<br />
[2020-07-04 08:04:05] - Daniel Vladar was added to Vegas Golden Knights.<br />
[2020-07-04 07:21:10] - Mike Richards was added to Toronto Maple Leafs.<br />
[2020-07-04 07:18:54] - Austin Czarnik was added to Chicago Blackhawks.<br />
[2020-07-04 07:15:17] - Louis Domingue was added to Montreal Canadiens.<br />
[2020-07-04 07:13:46] - Kristers Gudlevskis was added to Arizona Coyotes.<br />
[2020-07-03 09:42:37] - Zachary Fucale was added to Toronto Maple Leafs.<br />
[2020-07-03 09:42:31] - Oliwer Kaski was added to Toronto Maple Leafs.<br />
[2020-07-03 09:42:29] - Olivier Galipeau was added to Toronto Maple Leafs.<br />
[2020-07-03 09:42:27] - Olli Juolevi was added to Toronto Maple Leafs.<br />
[2020-07-03 09:42:24] - Teemu Turunen was added to Toronto Maple Leafs.<br />
[2020-07-03 09:42:20] - Tuukka Tieksola was added to Toronto Maple Leafs.<br />
[2020-07-03 07:12:31] - Mikael Backlund was added to Nashville Predators.<br />
[2020-07-03 07:09:19] - Aaron Ness was added to Minnesota Wild.<br />
[2020-07-03 07:06:37] - Vasili Koshechkin was added to Pittsburgh Penguins.<br />
[2020-07-02 10:33:08] - Quinn Hughes was added to Tampa Bay Lightning.<br />
[2020-07-02 10:33:02] - Martin Necas was added to Tampa Bay Lightning.<br />
[2020-07-02 10:17:57] - Marc Staal was added to Chicago Blackhawks.<br />
[2020-07-02 10:12:55] - Marcus Kruger was added to Vegas Golden Knights.<br />
[2020-07-02 10:11:47] - Mac Bennett was added to Pittsburgh Penguins.<br />
[2020-07-02 10:06:08] - Eric Robinson was added to St. Louis Blues.<br />
[2020-07-02 10:00:59] - Joseph Garreffa was added to Buffalo Sabres.<br />
[2020-07-02 08:58:38] - Evan Barratt was added to New Jersey Devils.<br />
[2020-07-02 08:58:30] - Casey Mittelstadt was added to New Jersey Devils.<br />
[2020-07-02 08:58:23] - Michael Rasmussen was added to New Jersey Devils.<br />
[2020-07-02 08:58:18] - Taylor Raddysh was added to New Jersey Devils.<br />
[2020-07-02 08:58:15] - Spencer Knight was added to New Jersey Devils.<br />
[2020-07-02 08:58:09] - Nolan Foote was added to New Jersey Devils.<br />
[2020-07-02 08:58:05] - Nick Merkley was added to New Jersey Devils.<br />
[2020-07-02 08:57:57] - Dysin Mayo was added to New Jersey Devils.<br />
[2020-07-02 08:57:53] - Benjamin Finkelstein was added to New Jersey Devils.<br />
[2020-07-01 13:09:21] - Rasmus Sandin was added to Florida Panthers.<br />
[2020-07-01 13:09:18] - Ville Husso was added to Florida Panthers.<br />
[2020-07-01 11:31:34] - Ilya Kovalchuk was added to Quebec Nordiques.<br />
[2020-07-01 11:22:05] - Brogan Rafferty was added to Ottawa Senators.<br />
[2020-07-01 11:04:16] - Joseph Duszak was added to Detroit Red Wings.<br />
[2020-07-01 11:01:38] - Patrick Khodorenko was added to Edmonton Oilers.<br />
[2020-07-01 10:58:21] - Byron Froese was added to Chicago Blackhawks.<br />
[2020-07-01 10:37:58] - Anton Volchenkov was added to Carolina Hurricanes.<br />
[2020-07-01 10:34:20] - Xavier Ouellet was added to Vegas Golden Knights.<br />
[2020-07-01 10:32:34] - Xavier Ouellet was added to Vegas Golden Knights.<br />
[2020-07-01 10:21:33] - Niko Mikkola was added to Montreal Canadiens.<br />
[2020-07-01 10:09:37] - Alexei Melnichuk was added to Washington Capitals.<br />
[2020-07-01 10:01:25] - Brett Seney was added to Vegas Golden Knights.<br />
[2020-07-01 09:56:19] - Andrew O'Brien was added to Pittsburgh Penguins.<br />
[2020-07-01 09:28:45] - Linus Arnesson was added to Pittsburgh Penguins.<br />
[2020-07-01 09:28:41] - Dylan Labbé was added to Pittsburgh Penguins.<br />
[2020-07-01 09:28:37] - Brandon Halverson was added to Pittsburgh Penguins.<br />
[2020-07-01 09:28:32] - Charlie Lindgren was added to Pittsburgh Penguins.<br />
[2020-07-01 09:28:26] - Mikhail Maltsev was added to Pittsburgh Penguins.<br />
[2020-07-01 09:28:22] - Nico Sturm was added to Pittsburgh Penguins.<br />
[2020-07-01 09:28:17] - Ostap Safin was added to Pittsburgh Penguins.<br />
[2020-07-01 09:28:15] - Reid Duke was added to Pittsburgh Penguins.<br />
[2020-07-01 09:28:12] - Robin Norell was added to Pittsburgh Penguins.<br />
[2020-07-01 09:28:09] - Ryan Collins was added to Pittsburgh Penguins.<br />
[2020-07-01 09:28:06] - Ryan Kujawinski was added to Pittsburgh Penguins.<br />
[2020-07-01 09:28:01] - Sean Day was added to Pittsburgh Penguins.<br />
[2020-07-01 05:56:32] - TRADE : From Buffalo Sabres to Carolina Hurricanes : Reid Boucher.<br />
[2020-07-01 05:56:32] - TRADE : From Carolina Hurricanes to Buffalo Sabres : Joey Laleggia.<br />
[2020-07-01 05:37:47] - TRADE : From Vancouver Canucks to Tampa Bay Lightning : Y:2021-RND:3-MIN, Y:2022-RND:4-TBL.<br />
[2020-07-01 05:37:47] - TRADE : From Tampa Bay Lightning to Vancouver Canucks : Max Jones (P).<br />
[2020-06-30 16:56:54] - Ty Smith was added to Buffalo Sabres.<br />
[2020-06-30 16:56:52] - Ty Dellandrea was added to Buffalo Sabres.<br />
[2020-06-30 16:56:50] - Timur Bilyalov was added to Buffalo Sabres.<br />
[2020-06-30 16:56:47] - Rem Pitlick was added to Buffalo Sabres.<br />
[2020-06-30 16:56:46] - Mikhail Vorobyov was added to Buffalo Sabres.<br />
[2020-06-30 16:56:44] - Maxim Letunov was added to Buffalo Sabres.<br />
[2020-06-30 16:56:42] - Lukas Vejdemo was added to Buffalo Sabres.<br />
[2020-06-30 16:56:40] - Lucas Carlsson was added to Buffalo Sabres.<br />
[2020-06-30 16:56:37] - Julius Nättinen was added to Buffalo Sabres.<br />
[2020-06-30 16:56:35] - Jesper Boqvist was added to Buffalo Sabres.<br />
[2020-06-30 16:56:32] - Jake Oettinger was added to Buffalo Sabres.<br />
[2020-06-30 16:56:28] - Anatoli Golyshev was added to Buffalo Sabres.<br />
[2020-06-30 14:01:41] - Arvid Henrikson was added to Quebec Nordiques.<br />
[2020-06-30 13:17:11] - Jakub Zboril was added to Chicago Blackhawks.<br />
[2020-06-30 13:17:09] - MacKenzie Entwistle was added to Chicago Blackhawks.<br />
[2020-06-30 13:17:05] - Joe Hicketts was added to Chicago Blackhawks.<br />
[2020-06-30 11:33:54] - Fredrik Olofsson has been deleted from Chicago Blackhawks.<br />
[2020-06-30 11:31:50] - Miro Karjalainen has been deleted from Chicago Blackhawks.<br />
[2020-06-30 08:28:18] - Connor Dewar was added to Seattle Saints.<br />
[2020-06-30 06:12:55] - Fredrik Olofsson has been added to Chicago Blackhawks.<br />
[2020-06-30 05:57:32] - TRADE : From New York Islanders to Buffalo Sabres : Trevor Murphy, Max Friberg.<br />
[2020-06-30 05:57:32] - TRADE : From Buffalo Sabres to New York Islanders : Erik Gudbranson, Andrej Nestrasil.<br />
[2020-06-29 12:02:05] - TRADE : From Seattle Saints to Montreal Canadiens : Y:2022-RND:5-SEA.<br />
[2020-06-29 12:02:05] - TRADE : From Montreal Canadiens to Seattle Saints : John St. Ivany (P).<br />
[2020-06-29 05:06:27] - TRADE : From Vancouver Canucks to Quebec Nordiques : Eddie Lack, Y:2021-RND:4-STL.<br />
[2020-06-29 05:06:27] - TRADE : From Quebec Nordiques to Vancouver Canucks : Y:2021-RND:5-QUE.<br />
[2020-06-27 14:38:30] - TRADE : From Toronto Maple Leafs to Montreal Canadiens : Y:2021-RND:2-TOR.<br />
[2020-06-27 14:38:30] - TRADE : From Montreal Canadiens to Toronto Maple Leafs : Tuuka Tieksola (P).<br />
[2020-06-27 04:19:01] - TRADE : From Seattle Saints to Montreal Canadiens : Matteson Iacopelli, Nicolas Deslauriers, Y:2021-RND:4-SEA.<br />
[2020-06-27 04:19:01] - TRADE : From Montreal Canadiens to Seattle Saints : Arnaud Durandeau (P), Connor Dewar (P), Ethan Keppen (P), Ian Scott (P), Vladimir Bakanin (P), Xavier Parent (P).<br />
[2020-06-26 09:10:24] - TRADE : From Florida Panthers to Montreal Canadiens : Y:2020-RND:5-QUE.<br />
[2020-06-26 09:10:24] - TRADE : From Montreal Canadiens to Florida Panthers : Y:2023-RND:4-MTL.<br />
[2020-06-26 06:16:53] - TRADE : From Los Angeles Kings to Montreal Canadiens : Y:2020-RND:5-LOS.<br />
[2020-06-26 06:16:53] - TRADE : From Montreal Canadiens to Los Angeles Kings : Y:2021-RND:5-COL.<br />
[2020-06-25 05:35:47] - TRADE : From New York Rangers to Vancouver Canucks : Y:2021-RND:3-MIN.<br />
[2020-06-25 05:35:47] - TRADE : From Vancouver Canucks to New York Rangers : Y:2020-RND:4-DAL.<br />
[2020-06-25 05:33:57] - TRADE : From Buffalo Sabres to Vancouver Canucks : Lucas Johansen (P).<br />
[2020-06-25 05:33:57] - TRADE : From Vancouver Canucks to Buffalo Sabres : Y:2020-RND:4-VEG.<br />
[2020-06-24 14:29:09] - TRADE : From Buffalo Sabres to New York Rangers : Lauri Pajuniemi (P), Y:2022-RND:3-VEG.<br />
[2020-06-24 14:29:09] - TRADE : From New York Rangers to Buffalo Sabres : Y:2020-RND:4-BOS.<br />
[2020-06-24 13:23:57] - TRADE : From Calgary Flames to Vegas Golden Knights : Y:2021-RND:4-VEG, Y:2021-RND:5-CGY.<br />
[2020-06-24 13:23:57] - TRADE : From Vegas Golden Knights to Calgary Flames : 2 000 000 $ (Salary Cap).<br />
[2020-06-24 13:16:41] - TRADE : From Dallas Stars to Montreal Canadiens : Y:2020-RND:4-WPG, Y:2020-RND:5-OTT.<br />
[2020-06-24 13:16:41] - TRADE : From Montreal Canadiens to Dallas Stars : Y:2021-RND:4-COL, Y:2022-RND:4-MTL.<br />
[2020-06-24 13:01:40] - TRADE : From New York Rangers to St. Louis Blues : Y:2020-RND:4-NYR.<br />
[2020-06-24 13:01:40] - TRADE : From St. Louis Blues to New York Rangers : Y:2021-RND:3-MIN.<br />
[2020-06-24 12:59:10] - TRADE : From Anaheim Ducks to Buffalo Sabres : Y:2020-RND:4-DET.<br />
[2020-06-24 12:59:10] - TRADE : From Buffalo Sabres to Anaheim Ducks : Y:2021-RND:4-BUF, Y:2022-RND:5-BUF.<br />
[2020-06-23 05:30:03] - TRADE : From Anaheim Ducks to Edmonton Oilers : Y:2020-RND:3-ANH.<br />
[2020-06-23 05:30:03] - TRADE : From Edmonton Oilers to Anaheim Ducks : Y:2021-RND:3-EDM.<br />
[2020-06-22 05:34:49] - Alexander Pashin has been added to Washington Capitals.<br />
[2020-06-22 05:27:25] - TRADE : From Buffalo Sabres to Ottawa Senators : Thomas Harley (P).<br />
[2020-06-22 05:27:25] - TRADE : From Ottawa Senators to Buffalo Sabres : Yan Kuznetsov (P), Jake Neighbours (P).<br />
[2020-06-22 05:01:03] - TRADE : From Anaheim Ducks to Pittsburgh Penguins : Y:2020-RND:3-EDM.<br />
[2020-06-22 05:01:03] - TRADE : From Pittsburgh Penguins to Anaheim Ducks : Y:2020-RND:4-DET, Y:2022-RND:4-PIT.<br />
[2020-06-21 09:15:37] - TRADE : From Seattle Saints to Vegas Golden Knights : Y:2020-RND:5-MIN.<br />
[2020-06-21 09:15:37] - TRADE : From Vegas Golden Knights to Seattle Saints : Y:2021-RND:4-SEA.<br />
[2020-06-20 21:09:14] - TRADE : From Winnipeg Jets to Arizona Coyotes : Oskar Lindblom (P), Y:2020-RND:2-ARZ, Y:2020-RND:5-WPG.<br />
[2020-06-20 21:09:14] - TRADE : From Arizona Coyotes to Winnipeg Jets : Mark Visentin.<br />
[2020-06-20 20:52:31] - TRADE : From Toronto Maple Leafs to Tampa Bay Lightning : Y:2020-RND:2-CLB, Y:2020-RND:2-QUE.<br />
[2020-06-20 20:52:31] - TRADE : From Tampa Bay Lightning to Toronto Maple Leafs : Y:2020-RND:2-PHI, Y:2020-RND:2-TBL.<br />
[2020-06-20 19:56:40] - TRADE : From Chicago Blackhawks to Florida Panthers : Y:2020-RND:1-MTL.<br />
[2020-06-20 19:56:40] - TRADE : From Florida Panthers to Chicago Blackhawks : Y:2020-RND:2-STL, Y:2020-RND:2-WPG.<br />
[2020-06-20 19:40:01] - TRADE : From Tampa Bay Lightning to Florida Panthers : Y:2020-RND:1-TBL.<br />
[2020-06-20 19:40:01] - TRADE : From Florida Panthers to Tampa Bay Lightning : Y:2020-RND:1-VAN, Y:2020-RND:2-FLA, Y:2020-RND:2-COL.<br />
[2020-06-20 19:28:20] - TRADE : From Boston Bruins to Quebec Nordiques : Y:2020-RND:1-PHI.<br />
[2020-06-20 19:28:20] - TRADE : From Quebec Nordiques to Boston Bruins : Y:2020-RND:1-QUE, Y:2020-RND:2-NSH.<br />
[2020-06-20 19:02:43] - TRADE : From Nashville Predators to Quebec Nordiques : Y:2020-RND:1-SEA, Y:2020-RND:2-NSH.<br />
[2020-06-20 19:02:43] - TRADE : From Quebec Nordiques to Nashville Predators : Y:2020-RND:1-BOS.<br />
[2020-06-20 18:59:00] - TRADE : From Vegas Golden Knights to Toronto Maple Leafs : Y:2020-RND:2-CAR, Y:2021-RND:1-NYI.<br />
[2020-06-20 18:59:00] - TRADE : From Toronto Maple Leafs to Vegas Golden Knights : Y:2020-RND:1-TOR.<br />
[2020-06-20 09:39:34] - TRADE : From Vancouver Canucks to Florida Panthers : Joe Veleno, Alexander Nylander, Liam Foudy, Ryan Poehling (P), Y:2020-RND:1-VAN.<br />
[2020-06-20 09:39:34] - TRADE : From Florida Panthers to Vancouver Canucks : Matthew Tkachuk.<br />
[2020-06-20 05:35:04] - TRADE : From Calgary Flames to Florida Panthers : Y:2020-RND:2-STL.<br />
[2020-06-20 05:35:04] - TRADE : From Florida Panthers to Calgary Flames : Y:2021-RND:2-FLA.<br />
[2020-06-20 03:32:38] - TRADE : From Vegas Golden Knights to New Jersey Devils : Adam Gaudette, Y:2020-RND:4-CGY.<br />
[2020-06-20 03:32:38] - TRADE : From New Jersey Devils to Vegas Golden Knights : Y:2020-RND:2-NJD, Y:2021-RND:5-VEG.<br />
[2020-06-20 03:30:36] - TRADE : From Winnipeg Jets to Detroit Red Wings : Y:2020-RND:4-PIT.<br />
[2020-06-20 03:30:36] - TRADE : From Detroit Red Wings to Winnipeg Jets : Y:2021-RND:4-DET.<br />
[2020-06-20 03:29:18] - TRADE : From Pittsburgh Penguins to Anaheim Ducks : Alexander Burmistrov.<br />
[2020-06-20 03:29:18] - TRADE : From Anaheim Ducks to Pittsburgh Penguins : Derek Stepan, Y:2020-RND:4-DET.<br />
[2020-06-20 03:27:14] - TRADE : From Washington Capitals to Arizona Coyotes : Y:2020-RND:5-WSH.<br />
[2020-06-20 03:27:14] - TRADE : From Arizona Coyotes to Washington Capitals : Y:2021-RND:5-WSH.<br />
[2020-06-18 23:23:41] - TRADE : From Calgary Flames to Nashville Predators : Y:2020-RND:2-VEG.<br />
[2020-06-18 23:23:41] - TRADE : From Nashville Predators to Calgary Flames : Y:2021-RND:2-PIT.<br />
[2020-06-18 23:22:03] - TRADE : From Winnipeg Jets to Dallas Stars : Jordan Binnington, Y:2020-RND:3-WPG, Y:2020-RND:4-WPG, Y:2020-RND:5-OTT.<br />
[2020-06-18 23:22:03] - TRADE : From Dallas Stars to Winnipeg Jets : Y:2020-RND:1-NJD.<br />
[2020-06-17 14:24:35] - TRADE : From Ottawa Senators to Detroit Red Wings : Y:2020-RND:1-STL.<br />
[2020-06-17 14:24:35] - TRADE : From Detroit Red Wings to Ottawa Senators : Mike Amadio, Y:2020-RND:2-PIT.<br />
[2020-06-17 14:18:32] - TRADE : From New York Rangers to Ottawa Senators : Jakub Vrana, Y:2021-RND:3-NYR.<br />
[2020-06-17 14:18:32] - TRADE : From Ottawa Senators to New York Rangers : Y:2020-RND:1-WPG.<br />
[2020-06-17 03:14:40] - TRADE : From Minnesota Wild to Arizona Coyotes : Michael Sgarbossa, Y:2020-RND:5-NYI.<br />
[2020-06-17 03:14:40] - TRADE : From Arizona Coyotes to Minnesota Wild : Kasper Bjorkqvist (P), Y:2021-RND:4-ARZ.<br />
[2020-06-16 10:15:21] - TRADE : From Toronto Maple Leafs to Pittsburgh Penguins : Nicklas Backstrom, Y:2020-RND:5-TBL.<br />
[2020-06-16 10:15:21] - TRADE : From Pittsburgh Penguins to Toronto Maple Leafs : Y:2020-RND:2-QUE, Y:2021-RND:1-ARZ.<br />
[2020-06-16 05:52:30] - TRADE : From Calgary Flames to Vegas Golden Knights : Y:2020-RND:4-CGY.<br />
[2020-06-16 05:52:30] - TRADE : From Vegas Golden Knights to Calgary Flames : Y:2021-RND:4-CLB.<br />
[2020-06-15 08:21:27] - TRADE : From Montreal Canadiens to Minnesota Wild : Tim Soderlund (P), Y:2021-RND:4-TBL.<br />
[2020-06-15 08:21:27] - TRADE : From Minnesota Wild to Montreal Canadiens : Christophe Lalancette, 1 000 000 $ (Salary Cap).<br />
[2020-06-13 17:40:11] - TRADE : From San Jose Sharks to Pittsburgh Penguins : Mike Hoffman.<br />
[2020-06-13 17:40:11] - TRADE : From Pittsburgh Penguins to San Jose Sharks : Paul Stastny, 1 000 000 $ (Salary Cap).<br />
[2020-06-13 03:17:03] - TRADE : From Calgary Flames to Vancouver Canucks : Y:2020-RND:4-SJS, Y:2020-RND:4-VEG.<br />
[2020-06-13 03:17:03] - TRADE : From Vancouver Canucks to Calgary Flames : Y:2021-RND:4-NJD, Y:2021-RND:4-VEG, Y:2022-RND:5-VAN.<br />
[2020-06-12 06:05:34] - TRADE : From New York Islanders to San Jose Sharks : Chris Bigras, Y:2022-RND:1-NYI, Y:2023-RND:1-NYI.<br />
[2020-06-12 06:05:34] - TRADE : From San Jose Sharks to New York Islanders : Seth Jones, Y:2021-RND:2-NYI, Y:2021-RND:2-MIN.<br />
[2020-06-12 06:01:59] - TRADE : From Ottawa Senators to San Jose Sharks : Y:2023-RND:1-OTT.<br />
[2020-06-12 06:01:59] - TRADE : From San Jose Sharks to Ottawa Senators : Y:2020-RND:2-MTL, Y:2021-RND:2-VAN.<br />
[2020-06-11 13:24:37] - TRADE : From Ottawa Senators to Boston Bruins : Cody Glass, Calen Addison (P), Y:2020-RND:1-PHI.<br />
[2020-06-11 13:24:37] - TRADE : From Boston Bruins to Ottawa Senators : Jonathan Drouin.<br />
[2020-06-11 04:58:27] - TRADE : From Ottawa Senators to Buffalo Sabres : Tyler Toffoli.<br />
[2020-06-11 04:58:27] - TRADE : From Buffalo Sabres to Ottawa Senators : Arttu Ruotsalainen, Kole Lind.<br />
[2020-06-11 04:55:49] - TRADE : From Vegas Golden Knights to Minnesota Wild : Y:2020-RND:4-COL.<br />
[2020-06-11 04:55:49] - TRADE : From Minnesota Wild to Vegas Golden Knights : Justin Bailey.<br />
[2020-06-11 04:54:31] - TRADE : From Colorado Avalanche to Montreal Canadiens : Y:2021-RND:5-COL.<br />
[2020-06-11 04:54:31] - TRADE : From Montreal Canadiens to Colorado Avalanche : Y:2020-RND:5-BUF.<br />
[2020-06-10 11:10:50] - TRADE : From Ottawa Senators to Pittsburgh Penguins : Jakub Voracek, Sébastien Piché, Y:2020-RND:2-QUE.<br />
[2020-06-10 11:10:50] - TRADE : From Pittsburgh Penguins to Ottawa Senators : Patric Hornqvist, Cody Glass.<br />
[2020-06-10 08:09:19] - TRADE : From Seattle Saints to Vegas Golden Knights : Pavel Buchnevich.<br />
[2020-06-10 08:09:19] - TRADE : From Vegas Golden Knights to Seattle Saints : Brendan Leipsic, 2 500 000 $ (Salary Cap), Y:2020-RND:2-MIN.<br />
[2020-06-10 07:59:17] - TRADE : From Minnesota Wild to Ottawa Senators : Danick Martel, Y:2020-RND:1-PHI.<br />
[2020-06-10 07:59:17] - TRADE : From Ottawa Senators to Minnesota Wild : Andreas Athanasiou, Erik Foley.<br />
[2020-06-10 05:04:44] - TRADE : From Columbus Blue Jackets to Ottawa Senators : Martin Frk, Y:2020-RND:1-WPG, Y:2021-RND:3-BUF.<br />
[2020-06-10 05:04:44] - TRADE : From Ottawa Senators to Columbus Blue Jackets : Andre Burakovsky.<br />
[2020-06-09 16:05:52] - TRADE : From New Jersey Devils to Montreal Canadiens : Y:2020-RND:1-BUF, Y:2020-RND:1-VEG.<br />
[2020-06-09 16:05:52] - TRADE : From Montreal Canadiens to New Jersey Devils : Nolan Foote (P), Y:2021-RND:1-MTL.<br />
[2020-06-08 05:04:19] - TRADE : From Arizona Coyotes to Colorado Avalanche : Alex Iafallo, Sam Miletic, Y:2021-RND:3-BOS.<br />
[2020-06-08 05:04:19] - TRADE : From Colorado Avalanche to Arizona Coyotes : Marcel Noebels.<br />
[2020-06-08 05:02:34] - TRADE : From Tampa Bay Lightning to Ottawa Senators : Jakob Chychrun.<br />
[2020-06-08 05:02:34] - TRADE : From Ottawa Senators to Tampa Bay Lightning : Josh Ho-Sang, Ryan Merkley, Y:2020-RND:2-PHI, Y:2022-RND:3-PIT.<br />
[2020-06-08 05:00:27] - TRADE : From Pittsburgh Penguins to Washington Capitals : Y:2021-RND:5-DAL, Y:2022-RND:5-PIT.<br />
[2020-06-08 05:00:27] - TRADE : From Washington Capitals to Pittsburgh Penguins : Charlie Lindgren (P), Ostap Safin (P), Sean Day (P), Nick Henry (P), Denis Smirnov (P), Mikhail Maltsev (P).<br />
[2020-06-08 04:58:02] - TRADE : From New Jersey Devils to Washington Capitals : Y:2020-RND:2-ANH, Y:2021-RND:3-NJD.<br />
[2020-06-08 04:58:02] - TRADE : From Washington Capitals to New Jersey Devils : Alexander Radulov.<br />
[2020-06-07 07:49:57] - TRADE : From Quebec Nordiques to Montreal Canadiens : Hunter Drew.<br />
[2020-06-07 07:49:57] - TRADE : From Montreal Canadiens to Quebec Nordiques : Y:2020-RND:5-MTL.<br />
[2020-06-07 05:18:50] - TRADE : From Vegas Golden Knights to Vancouver Canucks : Cory Schneider, 1 000 000 $ (Salary Cap), Y:2020-RND:4-OTT.<br />
[2020-06-07 05:18:50] - TRADE : From Vancouver Canucks to Vegas Golden Knights : Y:2020-RND:2-CAR.<br />
[2020-06-07 05:16:16] - TRADE : From Ottawa Senators to Buffalo Sabres : Ty Dellandrea (P), Y:2020-RND:2-BUF.<br />
[2020-06-07 05:16:16] - TRADE : From Buffalo Sabres to Ottawa Senators : Justus Annunen (P), Y:2020-RND:2-OTT.<br />
[2020-06-07 05:13:03] - TRADE : From Vancouver Canucks to Tampa Bay Lightning : Darcy Kuemper.<br />
[2020-06-07 05:13:03] - TRADE : From Tampa Bay Lightning to Vancouver Canucks : Y:2022-RND:4-TBL, Y:2023-RND:5-TBL.<br />
[2020-06-06 18:35:26] - TRADE : From Ottawa Senators to New York Rangers : Dylan Cozens (P).<br />
[2020-06-06 18:35:26] - TRADE : From New York Rangers to Ottawa Senators : Tyson Jost, Y:2020-RND:1-STL.<br />
[2020-06-06 11:32:49] - TRADE : From Pittsburgh Penguins to Ottawa Senators : Y:2021-RND:5-NYI.<br />
[2020-06-06 11:32:49] - TRADE : From Ottawa Senators to Pittsburgh Penguins : Brandon Halverson (P), Dylan Labbé (P), Linus Arnesson (P), Reid Duke (P), Robin Norell (P), Ryan Collins (P), Ryan Kujawinski (P), Ryan Mantha (P).<br />
[2020-06-06 09:07:01] - TRADE : From Pittsburgh Penguins to Vegas Golden Knights : Matt Murray.<br />
[2020-06-06 09:07:01] - TRADE : From Vegas Golden Knights to Pittsburgh Penguins : Adam Erne, Cody Glass, Y:2021-RND:1-ARZ.<br />
[2020-06-03 09:44:11] - TRADE : From Calgary Flames to Columbus Blue Jackets : Y:2020-RND:3-VEG.<br />
[2020-06-03 09:44:11] - TRADE : From Columbus Blue Jackets to Calgary Flames : Y:2021-RND:3-DET.<br />
[2020-06-03 04:51:34] - TRADE : From Seattle Saints to Ottawa Senators : Brayden McNabb, Ian McCoshen, 5 000 000 $ (Money).<br />
[2020-06-03 04:51:34] - TRADE : From Ottawa Senators to Seattle Saints : Colin Miller, Y:2020-RND:3-PIT.<br />
[2020-05-31 08:42:06] - TRADE : From Nashville Predators to Florida Panthers : Y:2021-RND:4-FLA.<br />
[2020-05-31 08:42:06] - TRADE : From Florida Panthers to Nashville Predators : Darren Helm.<br />
[2020-05-28 13:33:08] - TRADE : From Ottawa Senators to Montreal Canadiens : Alex Lyon.<br />
[2020-05-28 13:33:08] - TRADE : From Montreal Canadiens to Ottawa Senators : Jérémy Grégoire.<br />
[2020-05-28 08:22:57] - TRADE : From Detroit Red Wings to Ottawa Senators : Jason Spezza, Andre Burakovsky.<br />
[2020-05-28 08:22:57] - TRADE : From Ottawa Senators to Detroit Red Wings : Laurent Dauphin, Kale Clague.<br />
[2020-05-28 08:18:50] - TRADE : From Detroit Red Wings to Arizona Coyotes : Sven Andrighetto, Y:2022-RND:3-DET.<br />
[2020-05-28 08:18:50] - TRADE : From Arizona Coyotes to Detroit Red Wings : Rasmus Asplund, Mike Amadio.<br />
[2020-05-28 05:43:04] - TRADE : From Vancouver Canucks to Ottawa Senators : Jakub Voracek, 2 000 000 $ (Salary Cap), Y:2020-RND:3-PIT.<br />
[2020-05-28 05:43:04] - TRADE : From Ottawa Senators to Vancouver Canucks : Alexander Nylander, Jesse Ylonen, Y:2020-RND:2-CAR.<br />
[2020-05-27 10:17:53] - TRADE : From San Jose Sharks to Vegas Golden Knights : Cory Schneider, Y:2020-RND:4-CLB.<br />
[2020-05-27 10:17:53] - TRADE : From Vegas Golden Knights to San Jose Sharks : Marek Mazanec, Y:2021-RND:3-CLB, Y:2023-RND:4-VEG.<br />
[2020-05-27 05:36:08] - TRADE : From San Jose Sharks to Montreal Canadiens : Ryan Kesler, Y:2022-RND:3-SJS.<br />
[2020-05-27 05:36:08] - TRADE : From Montreal Canadiens to San Jose Sharks : Jaroslav Halak, 4 500 000 $ (Salary Cap).<br />
[2020-05-24 13:54:44] - TRADE : From Seattle Saints to Tampa Bay Lightning : Patrice Cormier.<br />
[2020-05-24 13:54:44] - TRADE : From Tampa Bay Lightning to Seattle Saints : Guillaume Brisebois.<br />
[2020-05-21 06:32:06] - William Bitten has been deleted from Tampa Bay Lightning.<br />
[2020-05-21 06:32:01] - Fabrice Herzog has been deleted from Tampa Bay Lightning.<br />
[2020-05-21 06:31:56] - Ryan Culkin has been deleted from Tampa Bay Lightning.<br />
[2020-05-21 06:31:50] - Olivier Archambault has been deleted from Tampa Bay Lightning.<br />
[2020-05-21 06:31:46] - Linus Nässen has been deleted from Tampa Bay Lightning.<br />
[2020-05-21 06:31:41] - Guillaume Gauthier has been deleted from Tampa Bay Lightning.<br />
[2020-05-21 06:31:39] - François Brassard has been deleted from Tampa Bay Lightning.<br />
[2020-05-21 06:31:35] - Etienne Marcoux has been deleted from Tampa Bay Lightning.<br />
[2020-05-21 06:31:31] - Carl Neill has been deleted from Tampa Bay Lightning.<br />
[2020-05-21 06:30:52] - Mathieu Boucher has been deleted from San Jose Sharks.<br />
[2020-05-21 06:30:49] - Gabriel Fontaine has been deleted from San Jose Sharks.<br />
[2020-05-21 06:30:47] - Alex Schoenborn has been deleted from San Jose Sharks.<br />
[2020-05-21 06:29:38] - Taylor Cammarata has been deleted from Buffalo Sabres.<br />
[2020-05-21 06:29:36] - Philippe Desrosiers has been deleted from Buffalo Sabres.<br />
[2020-05-21 06:29:32] - Matt MacKenzie has been deleted from Buffalo Sabres.<br />
[2020-05-21 06:29:29] - Mark Friedman has been deleted from Buffalo Sabres.<br />
[2020-05-21 06:29:25] - Mackenzie MacEachern has been deleted from Buffalo Sabres.<br />
[2020-05-21 06:29:21] - Keaton Thompson has been deleted from Buffalo Sabres.<br />
[2020-05-21 06:29:14] - Jonne Tammela has been deleted from Buffalo Sabres.<br />
[2020-05-21 06:29:10] - Jonathan Ang has been deleted from Buffalo Sabres.<br />
[2020-05-21 06:29:05] - Joe Wegwerth has been deleted from Buffalo Sabres.<br />
[2020-05-21 05:31:20] - Cliff Pu has been deleted from Washington Capitals.<br />
[2020-05-21 05:31:16] - Jesse Gabrielle has been deleted from Washington Capitals.<br />
[2020-05-21 05:30:07] - TRADE : From Tampa Bay Lightning to New York Rangers : Y:2021-RND:5-TBL.<br />
[2020-05-21 05:30:07] - TRADE : From New York Rangers to Tampa Bay Lightning : Cody Eakin.<br />
[2020-05-21 05:25:22] - Juho Lammikko has been deleted from Winnipeg Jets.<br />
[2020-05-21 05:25:18] - Jacob Moverare has been deleted from Winnipeg Jets.<br />
[2020-05-21 05:25:15] - Artur Kayumov has been deleted from Winnipeg Jets.<br />
[2020-05-21 05:25:11] - Eetu Tuulola has been deleted from Winnipeg Jets.<br />
[2020-05-21 05:25:03] - Ryan Gropp has been deleted from Winnipeg Jets.<br />
[2020-05-21 05:24:59] - Maxime Fortier has been deleted from Winnipeg Jets.<br />
[2020-05-21 05:24:54] - Jordan Sambrook has been deleted from Winnipeg Jets.<br />
[2020-05-21 05:24:50] - Graham Knott has been deleted from Winnipeg Jets.<br />
[2020-05-21 05:24:47] - Deven Sideroff has been deleted from Winnipeg Jets.<br />
[2020-05-20 16:59:57] - Janne Kuokkanen has been deleted from Chicago Blackhawks.<br />
[2020-05-20 16:59:52] - Fredrik Olofsson has been deleted from Chicago Blackhawks.<br />
[2020-05-20 16:59:49] - Alexander Broadhurst has been deleted from Chicago Blackhawks.<br />
[2020-05-20 13:10:24] - TRADE : From Seattle Saints to Chicago Blackhawks : Anders Lindback.<br />
[2020-05-20 13:10:24] - TRADE : From Chicago Blackhawks to Seattle Saints : David Rittich.<br />
[2020-05-20 11:10:58] - TRADE : From Seattle Saints to Montreal Canadiens : Y:2020-RND:5-BUF.<br />
[2020-05-20 11:10:58] - TRADE : From Montreal Canadiens to Seattle Saints : Austin Watson.<br />
[2020-05-20 09:17:08] - TRADE : From Montreal Canadiens to Seattle Saints : Antoine Marcoux.<br />
[2020-05-20 09:17:08] - TRADE : From Seattle Saints to Montreal Canadiens : Chet Pickard, Y:2021-RND:4-TBL.<br />
[2020-05-20 07:59:00] - TRADE : From Columbus Blue Jackets to Vegas Golden Knights : Y:2020-RND:3-NJD, Y:2020-RND:4-NYI, Y:2021-RND:3-CLB, Y:2021-RND:4-CLB.<br />
[2020-05-20 07:59:00] - TRADE : From Vegas Golden Knights to Columbus Blue Jackets : Conor Sheary.<br />
[2020-05-20 06:05:53] - TRADE : From Ottawa Senators to Chicago Blackhawks : Gustav Nyquist, Aliaksei Protas (P), Y:2021-RND:3-TOR.<br />
[2020-05-20 06:05:53] - TRADE : From Chicago Blackhawks to Ottawa Senators : Jack Roslovic, Y:2020-RND:2-CAR.<br />
[2020-05-20 06:03:41] - TRADE : From St. Louis Blues to Vancouver Canucks : James Neal, Y:2021-RND:4-STL.<br />
[2020-05-20 06:03:41] - TRADE : From Vancouver Canucks to St. Louis Blues : Y:2020-RND:3-VAN, Y:2021-RND:3-MIN.<br />
[2020-05-19 15:46:34] - TRADE : From Detroit Red Wings to Ottawa Senators : Ilya Konovalov.<br />
[2020-05-19 15:46:34] - TRADE : From Ottawa Senators to Detroit Red Wings : Y:2020-RND:2-PIT.<br />
[2020-05-19 15:30:53] - TRADE : From Seattle Saints to Montreal Canadiens : Martin Reway, Y:2020-RND:2-VAN, Y:2020-RND:3-MIN.<br />
[2020-05-19 15:30:53] - TRADE : From Montreal Canadiens to Seattle Saints : Darnell Nurse, Justin Brazeau.<br />
[2020-05-19 15:28:39] - TRADE : From Washington Capitals to Montreal Canadiens : Pavel Francouz.<br />
[2020-05-19 15:28:39] - TRADE : From Montreal Canadiens to Washington Capitals : Y:2021-RND:3-CAR.<br />
[2020-05-19 08:28:06] - TRADE : From Buffalo Sabres to Tampa Bay Lightning : Evander Kane.<br />
[2020-05-19 08:28:06] - TRADE : From Tampa Bay Lightning to Buffalo Sabres : Jesper Boqvist (P), Ty Smith (P).<br />
[2020-05-19 08:26:42] - TRADE : From Ottawa Senators to Florida Panthers : Y:2020-RND:2-CHI, Y:2020-RND:2-WPG.<br />
[2020-05-19 08:26:42] - TRADE : From Florida Panthers to Ottawa Senators : Alexander Edler, Brock Nelson, Carl Grundstrom (P).<br />
[2020-05-19 08:24:31] - TRADE : From Minnesota Wild to Vegas Golden Knights : Y:2020-RND:2-MIN, Y:2020-RND:4-OTT.<br />
[2020-05-19 08:24:31] - TRADE : From Vegas Golden Knights to Minnesota Wild : Justin Bailey, 30 000 000 $ (Money), Y:2020-RND:5-NYI.<br />
[2020-05-19 05:32:29] - TRADE : From Vegas Golden Knights to Seattle Saints : Matthew Villalta.<br />
[2020-05-19 05:32:29] - TRADE : From Seattle Saints to Vegas Golden Knights : Y:2021-RND:4-SEA.<br />
[2020-05-19 05:29:39] - TRADE : From Tampa Bay Lightning to Toronto Maple Leafs : Jean-Gabriel Pageau, Y:2020-RND:5-TBL.<br />
[2020-05-19 05:29:39] - TRADE : From Toronto Maple Leafs to Tampa Bay Lightning : Y:2020-RND:2-TOR.<br />
[2020-05-19 05:27:26] - TRADE : From Seattle Saints to Washington Capitals : Nino Niederreiter, Angelo Miceli.<br />
[2020-05-19 05:27:26] - TRADE : From Washington Capitals to Seattle Saints : Pavel Buchnevich, Nikita Gusev, Kevin Hancock, Mitchell Vande Sompel, Hardy Haman-Aktell (P), Aku Raty (P).<br />
[2020-05-18 19:10:57] - TRADE : From Seattle Saints to Toronto Maple Leafs : Petteri Lindbohm, Veini Vehvilainen.<br />
[2020-05-18 19:10:57] - TRADE : From Toronto Maple Leafs to Seattle Saints : Ilya Lyubushkin, Y:2020-RND:2-VAN.<br />
[2020-05-18 19:07:50] - TRADE : From Winnipeg Jets to Chicago Blackhawks : Luca Sbisa, Greg Chase, Jakub Zboril (P), Janne Kuokkanen (P), MacKenzie Entwistle (P), Y:2020-RND:1-MTL.<br />
[2020-05-18 19:07:50] - TRADE : From Chicago Blackhawks to Winnipeg Jets : Carey Price, 5 000 000 $ (Salary Cap), Y:2020-RND:4-CHI, Y:2020-RND:5-CHI, Y:2020-RND:5-OTT.<br />
[2020-05-18 10:39:43] - TRADE : From Vegas Golden Knights to Columbus Blue Jackets : Raphaël Lavoie (P), Y:2020-RND:1-SJS, Y:2020-RND:1-WPG.<br />
[2020-05-18 10:39:43] - TRADE : From Columbus Blue Jackets to Vegas Golden Knights : Y:2020-RND:1-CLB, Y:2020-RND:4-COL, Y:2020-RND:5-NYI.<br />
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
<?php include "Footer.php";?>
