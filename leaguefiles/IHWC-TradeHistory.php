<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Trade History</title>
<script src="IHWC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="IHWC.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"IHWC-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"IHWC-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
[2020-04-04 15:28:40] - Anders Nilsson was added to SUEDE.<br />
[2020-04-04 15:27:43] - Anders Nilsson has been added to SUEDE.<br />
[2020-04-04 15:26:54] - Robin Lehner was added to SUEDE.<br />
[2020-04-04 15:26:52] - Robin Lehner has been added to SUEDE.<br />
[2020-04-04 15:25:18] - Niklas Hjalmarsson was added to SUEDE.<br />
[2020-04-04 15:24:16] - Niklas Hjalmarsson has been added to SUEDE.<br />
[2020-04-04 15:23:32] - Rasmus Andersson was added to SUEDE.<br />
[2020-04-04 15:23:31] - Rasmus Andersson has been added to SUEDE.<br />
[2020-04-04 15:21:28] - Jonas Brodin was added to SUEDE.<br />
[2020-04-04 15:21:27] - Jonas Brodin has been added to SUEDE.<br />
[2020-04-04 15:19:46] - Hampus Lindholm was added to SUEDE.<br />
[2020-04-04 15:19:45] - Hampus Lindholm has been added to SUEDE.<br />
[2020-04-04 15:18:07] - Erik Karlsson was added to SUEDE.<br />
[2020-04-04 15:18:06] - Erik Karlsson has been added to SUEDE.<br />
[2020-04-04 15:16:34] - Victor Hedman was added to SUEDE.<br />
[2020-04-04 15:16:32] - Victor Hedman has been added to SUEDE.<br />
[2020-04-04 15:15:08] - Tobias Enstrom was added to SUEDE.<br />
[2020-04-04 15:15:07] - Tobias Enstrom has been added to SUEDE.<br />
[2020-04-04 15:13:39] - Patrik Berglund was added to SUEDE.<br />
[2020-04-04 15:13:38] - Patrik Berglund has been added to SUEDE.<br />
[2020-04-04 15:11:03] - Joel Eriksson Ek was added to SUEDE.<br />
[2020-04-04 15:11:01] - Joel Eriksson Ek has been added to SUEDE.<br />
[2020-04-04 15:09:18] - Max Friberg was added to SUEDE.<br />
[2020-04-04 15:09:17] - Max Friberg has been added to SUEDE.<br />
[2020-04-04 15:07:37] - Mattias Tedenby was added to SUEDE.<br />
[2020-04-04 15:07:35] - Mattias Tedenby has been added to SUEDE.<br />
[2020-04-04 15:06:09] - Gustav Nyquist was added to SUEDE.<br />
[2020-04-04 15:06:07] - Gustav Nyquist has been added to SUEDE.<br />
[2020-04-04 15:04:43] - Jacob De La Rose was added to SUEDE.<br />
[2020-04-04 15:04:42] - Jacob De La Rose has been added to SUEDE.<br />
[2020-04-04 15:03:18] - Magnus Paajarvi was added to SUEDE.<br />
[2020-04-04 15:03:16] - Magnus Paajarvi has been added to SUEDE.<br />
[2020-04-04 15:01:53] - Henrik Sedin was added to SUEDE.<br />
[2020-04-04 15:01:51] - Henrik Sedin has been added to SUEDE.<br />
[2020-04-04 15:00:30] - Victor Olofsson was added to SUEDE.<br />
[2020-04-04 15:00:29] - Victor Olofsson has been added to SUEDE.<br />
[2020-04-04 14:58:55] - Loui Eriksson was added to SUEDE.<br />
[2020-04-04 14:58:54] - Loui Eriksson has been added to SUEDE.<br />
[2020-04-04 14:57:11] - Gabriel Landeskog was added to SUEDE.<br />
[2020-04-04 14:57:09] - Gabriel Landeskog has been added to SUEDE.<br />
[2020-04-04 14:55:48] - William Nylander was added to SUEDE.<br />
[2020-04-04 14:55:45] - William Nylander has been added to SUEDE.<br />
[2020-04-04 14:55:41] - Rickard Rakell was added to SUEDE.<br />
[2020-04-04 14:55:39] - Rickard Rakell has been added to SUEDE.<br />
[2020-04-04 14:51:43] - Nicklas Backstrom was added to SUEDE.<br />
[2020-04-04 14:51:41] - Nicklas Backstrom has been added to SUEDE.<br />
[2020-04-04 13:52:22] - Bo Horvat was added to CANADA.<br />
[2020-04-04 13:52:21] - Brad Marchand was added to CANADA.<br />
[2020-04-04 13:52:20] - Ty Rattie was added to CANADA.<br />
[2020-04-04 13:52:19] - Taylor Hall was added to CANADA.<br />
[2020-04-04 13:52:17] - Steven Stamkos was added to CANADA.<br />
[2020-04-04 13:52:16] - Sean Monahan was added to CANADA.<br />
[2020-04-04 13:52:16] - Sam Reinhart was added to CANADA.<br />
[2020-04-04 13:52:15] - Ryan Ellis was added to CANADA.<br />
[2020-04-04 13:52:14] - Phillip Danault was added to CANADA.<br />
[2020-04-04 13:52:13] - Mark Stone was added to CANADA.<br />
[2020-04-04 13:52:12] - Luke Schenn was added to CANADA.<br />
[2020-04-04 13:52:11] - Logan Couture was added to CANADA.<br />
[2020-04-04 13:52:10] - Jonathan Toews was added to CANADA.<br />
[2020-04-04 13:52:09] - Jonathan Drouin was added to CANADA.<br />
[2020-04-04 13:52:08] - John Tavares was added to CANADA.<br />
[2020-04-04 13:52:06] - David Musil was added to CANADA.<br />
[2020-04-04 13:52:05] - Colton Parayko was added to CANADA.<br />
[2020-04-04 13:52:04] - Cody Ceci was added to CANADA.<br />
[2020-04-04 13:52:03] - Carey Price was added to CANADA.<br />
[2020-04-04 13:52:02] - Cam Fowler was added to CANADA.<br />
[2020-04-04 13:52:01] - Brent Burns was added to CANADA.<br />
[2020-04-04 13:52:00] - Brayden Schenn was added to CANADA.<br />
[2020-04-04 13:51:56] - Braden Holtby was added to CANADA.<br />
[2020-04-04 13:51:53] - Braden Holtby has been added to CANADA.<br />
[2020-04-04 13:51:48] - Carey Price has been added to CANADA.<br />
[2020-04-04 13:51:45] - Luke Schenn has been added to CANADA.<br />
[2020-04-04 13:51:40] - Ryan Ellis has been added to CANADA.<br />
[2020-04-04 13:51:36] - Cody Ceci has been added to CANADA.<br />
[2020-04-04 13:51:31] - Brent Burns has been added to CANADA.<br />
[2020-04-04 13:51:27] - Colton Parayko has been added to CANADA.<br />
[2020-04-04 13:51:22] - David Musil has been added to CANADA.<br />
[2020-04-04 13:51:19] - Cam Fowler has been added to CANADA.<br />
[2020-04-04 13:51:14] - Jonathan Drouin has been added to CANADA.<br />
[2020-04-04 13:51:10] - Phillip Danault has been added to CANADA.<br />
[2020-04-04 13:51:02] - Bo Horvat has been added to CANADA.<br />
[2020-04-04 13:50:58] - Jonathan Toews has been added to CANADA.<br />
[2020-04-04 13:50:52] - Brayden Schenn has been added to CANADA.<br />
[2020-04-04 13:50:46] - Ty Rattie has been added to CANADA.<br />
[2020-04-04 13:50:42] - Logan Couture has been added to CANADA.<br />
[2020-04-04 13:50:38] - Sam Reinhart has been added to CANADA.<br />
[2020-04-04 13:50:33] - Mark Stone has been added to CANADA.<br />
[2020-04-04 13:50:29] - Sean Monahan has been added to CANADA.<br />
[2020-04-04 13:50:26] - Brad Marchand has been added to CANADA.<br />
[2020-04-04 13:50:22] - Steven Stamkos has been added to CANADA.<br />
[2020-04-04 13:50:17] - John Tavares has been added to CANADA.<br />
[2020-04-04 13:50:13] - Taylor Hall has been added to CANADA.<br />
[2020-04-04 13:17:11] - Ville Pokka was added to FINLANDE.<br />
[2020-04-04 13:17:10] - Ville Leskinen was added to FINLANDE.<br />
[2020-04-04 13:17:08] - Tuomo Ruutu was added to FINLANDE.<br />
[2020-04-04 13:17:06] - Toni Rajala was added to FINLANDE.<br />
[2020-04-04 13:17:04] - Teemu Pulkkinen was added to FINLANDE.<br />
[2020-04-04 13:17:02] - Sebastian Aho was added to FINLANDE.<br />
[2020-04-04 13:17:00] - Sami Vatanen was added to FINLANDE.<br />
[2020-04-04 13:16:58] - Saku Maenalanen was added to FINLANDE.<br />
[2020-04-04 13:16:56] - Roope Hintz was added to FINLANDE.<br />
[2020-04-04 13:16:55] - Pekka Rinne was added to FINLANDE.<br />
[2020-04-04 13:16:53] - Olli Maatta was added to FINLANDE.<br />
[2020-04-04 13:16:51] - Miro Heiskanen was added to FINLANDE.<br />
[2020-04-04 13:16:37] - Mikko Rantanen was added to FINLANDE.<br />
[2020-04-04 13:16:35] - Miikka Salomaki was added to FINLANDE.<br />
[2020-04-04 13:16:33] - Kasperi Kapanen was added to FINLANDE.<br />
[2020-04-04 13:16:32] - Jyrki Jokipakka was added to FINLANDE.<br />
[2020-04-04 13:16:30] - Juuse Saros was added to FINLANDE.<br />
[2020-04-04 13:16:28] - Julius Honka was added to FINLANDE.<br />
[2020-04-04 13:16:26] - Joel Armia was added to FINLANDE.<br />
[2020-04-04 13:16:24] - Jesse Puljujarvi was added to FINLANDE.<br />
[2020-04-04 13:16:22] - Jesperi Kotkaniemi was added to FINLANDE.<br />
[2020-04-04 13:16:20] - Jani Hakanpaa was added to FINLANDE.<br />
[2020-04-04 13:16:18] - Antti Suomela was added to FINLANDE.<br />
[2020-04-04 13:16:06] - Pekka Rinne has been added to FINLANDE.<br />
[2020-04-04 13:16:01] - Jyrki Jokipakka has been added to FINLANDE.<br />
[2020-04-04 13:15:56] - Julius Honka has been added to FINLANDE.<br />
[2020-04-04 13:15:51] - Ville Pokka has been added to FINLANDE.<br />
[2020-04-04 13:15:46] - Sami Vatanen has been added to FINLANDE.<br />
[2020-04-04 13:15:40] - Jani Hakanpaa has been added to FINLANDE.<br />
[2020-04-04 13:15:36] - Olli Maatta has been added to FINLANDE.<br />
[2020-04-04 13:15:29] - Miro Heiskanen has been added to FINLANDE.<br />
[2020-04-04 13:15:24] - Jesperi Kotkaniemi has been added to FINLANDE.<br />
[2020-04-04 13:15:18] - Roope Hintz has been added to FINLANDE.<br />
[2020-04-04 13:15:12] - Joel Armia has been added to FINLANDE.<br />
[2020-04-04 13:15:09] - Tuomo Ruutu has been added to FINLANDE.<br />
[2020-04-04 13:15:04] - Ville Leskinen has been added to FINLANDE.<br />
[2020-04-04 13:14:59] - Toni Rajala has been added to FINLANDE.<br />
[2020-04-04 13:14:53] - Miikka Salomaki has been added to FINLANDE.<br />
[2020-04-04 13:14:47] - Kasperi Kapanen has been added to FINLANDE.<br />
[2020-04-04 13:14:43] - Teemu Pulkkinen has been added to FINLANDE.<br />
[2020-04-04 13:14:38] - Antti Suomela has been added to FINLANDE.<br />
[2020-04-04 13:14:33] - Saku Maenalanen has been added to FINLANDE.<br />
[2020-04-04 13:14:27] - Jesse Puljujarvi has been added to FINLANDE.<br />
[2020-04-04 13:14:20] - Mikko Rantanen has been added to FINLANDE.<br />
[2020-04-04 13:14:14] - Sebastian Aho has been added to FINLANDE.<br />
[2020-04-04 13:14:08] - Juuse Saros has been added to FINLANDE.<br />
[2020-04-04 09:26:45] - Kirby Dach has been deleted from U23 NORTH AMERICA.<br />
[2020-04-04 09:26:33] - Kirby Dach has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:30] - Adam Fox was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:28] - Adam Fox has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:25] - Quinn Hughes was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:23] - Quinn Hughes has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:19] - Alexis Lafrenière was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:18] - Alexis Lafrenière has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:17:34] - Kirby Dach was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:17:33] - Kirby Dach has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:14:06] - Arturs Silovs was added to LETTONIE.<br />
[2020-04-04 09:14:05] - Arturs Silovs has been added to LETTONIE.<br />
[2020-04-04 09:05:25] - Carter Hart was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:05:23] - Colton Point was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:47:25] - Colton Point has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:47:21] - Carter Hart has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:47:05] - Noah Hanifin was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:47:03] - Noah Hanifin has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:58] - Cale Makar was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:56] - Cale Makar has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:50] - Samuel Girard was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:48] - Samuel Girard has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:43] - Charles McAvoy was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:41] - Charles McAvoy has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:35] - Thomas Chabot was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:33] - Thomas Chabot has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:40:04] - Brock Boeser was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:40:02] - Brock Boeser has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:56] - Jack Roslovic was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:55] - Jack Roslovic has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:50] - Zachary Senyshyn was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:48] - Zachary Senyshyn has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:40] - Nick Suzuki was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:39] - Nick Suzuki has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:34:10] - Anthony Beauvillier was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:34:09] - Anthony Beauvillier has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:34:02] - Tage Thompson was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:34:01] - Tage Thompson has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:56] - Owen Tippett was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:55] - Owen Tippett has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:49] - Alex DeBrincat was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:48] - Alex DeBrincat has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:40] - Kieffer Bellows was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:39] - Kieffer Bellows has been added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:12] - Dylan Strome was added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:10] - Dylan Strome has been added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:06] - Mitch Marner was added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:03] - Mitch Marner has been added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:00] - Anthony Cirelli was added to U23 NORTH AMERICA.<br />
[2020-04-04 07:27:57] - Anthony Cirelli has been added to U23 NORTH AMERICA.<br />
[2020-04-04 07:18:16] - Alexander Radulov was added to RUSSIE.<br />
[2020-04-04 07:18:15] - Yegor Rykov was added to RUSSIE.<br />
[2020-04-04 07:18:13] - Vladislav Kamenev was added to RUSSIE.<br />
[2020-04-04 07:18:11] - Sergei Bobrovsky was added to RUSSIE.<br />
[2020-04-04 07:18:09] - Pavel Buchnevich was added to RUSSIE.<br />
[2020-04-04 07:18:07] - Nikita Tryamkin was added to RUSSIE.<br />
[2020-04-04 07:18:05] - Nikita Nesterov was added to RUSSIE.<br />
[2020-04-04 07:18:03] - Nikita Filatov was added to RUSSIE.<br />
[2020-04-04 07:18:01] - Mikhail Sergachev was added to RUSSIE.<br />
[2020-04-04 07:17:59] - Kirill Kaprizov was added to RUSSIE.<br />
[2020-04-04 07:17:57] - Ilya Sorokin was added to RUSSIE.<br />
[2020-04-04 07:17:55] - Ilya Kovalchuk was added to RUSSIE.<br />
[2020-04-04 07:17:53] - Evgeny Dadonov was added to RUSSIE.<br />
[2020-04-04 07:17:51] - Dmitri Orlov was added to RUSSIE.<br />
[2020-04-04 07:17:50] - Dmitri Kulikov was added to RUSSIE.<br />
[2020-04-04 07:17:48] - Bogdan Yakimov was added to RUSSIE.<br />
[2020-04-04 07:17:44] - Anton Volchenkov was added to RUSSIE.<br />
[2020-04-04 07:17:41] - Ilya Sorokin has been added to RUSSIE.<br />
[2020-04-04 07:17:35] - Sergei Bobrovsky has been added to RUSSIE.<br />
[2020-04-04 07:17:30] - Yegor Rykov has been added to RUSSIE.<br />
[2020-04-04 07:17:23] - Nikita Tryamkin has been added to RUSSIE.<br />
[2020-04-04 07:17:17] - Mikhail Sergachev has been added to RUSSIE.<br />
[2020-04-04 07:17:12] - Anton Volchenkov has been added to RUSSIE.<br />
[2020-04-04 07:17:06] - Dmitri Orlov has been added to RUSSIE.<br />
[2020-04-04 07:17:01] - Nikita Nesterov has been added to RUSSIE.<br />
[2020-04-04 07:16:55] - Dmitri Kulikov has been added to RUSSIE.<br />
[2020-04-04 07:16:48] - Alexander Radulov has been added to RUSSIE.<br />
[2020-04-04 07:16:43] - Evgeny Dadonov has been added to RUSSIE.<br />
[2020-04-04 07:16:38] - Ilya Kovalchuk has been added to RUSSIE.<br />
[2020-04-04 07:16:32] - Pavel Buchnevich has been added to RUSSIE.<br />
[2020-04-04 07:16:27] - Kirill Kaprizov has been added to RUSSIE.<br />
[2020-04-04 07:16:21] - Vladislav Kamenev has been added to RUSSIE.<br />
[2020-04-04 07:16:15] - Bogdan Yakimov has been added to RUSSIE.<br />
[2020-04-04 07:16:09] - Nikita Filatov has been added to RUSSIE.<br />
[2020-04-04 07:16:00] - Evgeny Grachev was added to RUSSIE.<br />
[2020-04-04 07:15:53] - Evgeny Grachev has been added to RUSSIE.<br />
[2020-04-04 07:15:48] - Mikhail Grigorenko was added to RUSSIE.<br />
[2020-04-04 07:15:46] - Mikhail Grigorenko has been added to RUSSIE.<br />
[2020-04-04 06:58:12] - Vladislav Namestnikov was added to RUSSIE.<br />
[2020-04-04 06:58:10] - Vladislav Namestnikov has been added to RUSSIE.<br />
[2020-04-04 06:55:22] - Dmitrij Jaskin was added to RUSSIE.<br />
[2020-04-04 06:55:20] - Dmitrij Jaskin has been added to RUSSIE.<br />
[2020-04-04 06:43:00] - Nikita Gusev was added to RUSSIE.<br />
[2020-04-04 06:42:58] - Nikita Gusev has been added to RUSSIE.<br />
[2020-04-04 06:41:26] - Alexander Ovechkin was added to RUSSIE.<br />
[2020-04-04 06:41:24] - Alexander Ovechkin has been added to RUSSIE.<br />
[2020-04-04 06:28:05] - Harijs Brants was added to LETTONIE.<br />
[2020-04-04 06:28:03] - Harijs Brants has been added to LETTONIE.<br />
[2020-04-04 06:26:03] - Oskars Bartulis was added to LETTONIE.<br />
[2020-04-04 06:26:01] - Oskars Bartulis has been added to LETTONIE.<br />
[2020-04-04 06:14:52] - Raimonds Vitolins was added to LETTONIE.<br />
[2020-04-04 06:14:50] - Raimonds Vitolins has been added to LETTONIE.<br />
[2020-04-04 06:09:42] - Miks Indrasis was added to LETTONIE.<br />
[2020-04-04 06:09:39] - Miks Indrasis has been added to LETTONIE.<br />
[2020-04-04 05:56:23] - Frenks Razgals was added to LETTONIE.<br />
[2020-04-04 05:56:22] - Frenks Razgals has been added to LETTONIE.<br />
[2020-04-04 05:52:41] - Martin Karsums was added to LETTONIE.<br />
[2020-04-04 05:52:39] - Martin Karsums has been added to LETTONIE.<br />
[2020-04-04 05:46:52] - Andris Dzerins was added to LETTONIE.<br />
[2020-04-04 05:46:51] - Andris Dzerins has been added to LETTONIE.<br />
[2020-04-04 05:42:28] - Vitalijs Pavlovs was added to LETTONIE.<br />
[2020-04-04 05:42:26] - Vitalijs Pavlovs has been added to LETTONIE.<br />
[2020-04-04 05:34:43] - Oskars Batna was added to LETTONIE.<br />
[2020-04-04 05:34:41] - Oskars Batna has been added to LETTONIE.<br />
[2020-04-04 05:30:11] - Kaspars Daugavins was added to LETTONIE.<br />
[2020-04-04 05:30:09] - Kaspars Daugavins has been added to LETTONIE.<br />
[2020-04-04 05:18:42] - Vojtech Budik was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-04 05:18:40] - Vojtech Budik has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-04 04:55:42] - Jindrich Abdul was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-04 04:55:41] - Jindrich Abdul has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 11:40:59] - Patrik Rybar was added to SLOVAQUIE.<br />
[2020-04-03 11:40:57] - Patrik Rybar has been added to SLOVAQUIE.<br />
[2020-04-03 11:37:42] - Connor Hellebuyck was added to ETATS-UNIS.<br />
[2020-04-03 11:37:40] - Connor Hellebuyck has been added to ETATS-UNIS.<br />
[2020-04-03 11:36:26] - Ben Bishop was added to ETATS-UNIS.<br />
[2020-04-03 11:36:24] - Ben Bishop has been added to ETATS-UNIS.<br />
[2020-04-03 11:34:55] - Jake Gardiner was added to ETATS-UNIS.<br />
[2020-04-03 11:34:53] - Jake Gardiner has been added to ETATS-UNIS.<br />
[2020-04-03 11:33:21] - Jamie McBain was added to ETATS-UNIS.<br />
[2020-04-03 11:33:19] - Jamie McBain has been added to ETATS-UNIS.<br />
[2020-04-03 11:31:42] - Jacob Trouba was added to ETATS-UNIS.<br />
[2020-04-03 11:31:40] - Jacob Trouba has been added to ETATS-UNIS.<br />
[2020-04-03 11:30:14] - Ryan Suter was added to ETATS-UNIS.<br />
[2020-04-03 11:30:12] - Ryan Suter has been added to ETATS-UNIS.<br />
[2020-04-03 11:28:43] - John Carlson was added to ETATS-UNIS.<br />
[2020-04-03 11:28:41] - John Carlson has been added to ETATS-UNIS.<br />
[2020-04-03 11:26:29] - Zach Bogosian was added to ETATS-UNIS.<br />
[2020-04-03 11:26:27] - Zach Bogosian has been added to ETATS-UNIS.<br />
[2020-04-03 11:24:48] - Tyler Myers was added to ETATS-UNIS.<br />
[2020-04-03 11:24:46] - Tyler Myers has been added to ETATS-UNIS.<br />
[2020-04-03 11:22:23] - Phil Kessel was added to ETATS-UNIS.<br />
[2020-04-03 11:22:21] - Phil Kessel has been added to ETATS-UNIS.<br />
[2020-04-03 11:19:34] - Ryan Callahan was added to ETATS-UNIS.<br />
[2020-04-03 11:19:32] - Ryan Callahan has been added to ETATS-UNIS.<br />
[2020-04-03 11:17:49] - Emerson Etem was added to ETATS-UNIS.<br />
[2020-04-03 11:17:47] - Emerson Etem has been added to ETATS-UNIS.<br />
[2020-04-03 11:16:09] - Max Pacioretty was added to ETATS-UNIS.<br />
[2020-04-03 11:16:08] - Max Pacioretty has been added to ETATS-UNIS.<br />
[2020-04-03 11:14:01] - Kevin Labanc was added to ETATS-UNIS.<br />
[2020-04-03 11:13:55] - Kevin Labanc has been added to ETATS-UNIS.<br />
[2020-04-03 11:12:29] - James Van Riemsdyk was added to ETATS-UNIS.<br />
[2020-04-03 11:12:27] - James Van Riemsdyk has been added to ETATS-UNIS.<br />
[2020-04-03 11:10:44] - Johnny Gaudreau was added to ETATS-UNIS.<br />
[2020-04-03 11:10:42] - Johnny Gaudreau has been added to ETATS-UNIS.<br />
[2020-04-03 11:09:06] - Zach Parise was added to ETATS-UNIS.<br />
[2020-04-03 11:09:03] - Zach Parise has been added to ETATS-UNIS.<br />
[2020-04-03 11:07:28] - Kyle Connor was added to ETATS-UNIS.<br />
[2020-04-03 11:07:26] - Kyle Connor has been added to ETATS-UNIS.<br />
[2020-04-03 11:05:41] - Jack Eichel was added to ETATS-UNIS.<br />
[2020-04-03 11:05:39] - Jack Eichel has been added to ETATS-UNIS.<br />
[2020-04-03 11:04:12] - Blake Wheeler was added to ETATS-UNIS.<br />
[2020-04-03 11:04:10] - Blake Wheeler has been added to ETATS-UNIS.<br />
[2020-04-03 11:02:26] - Tyler Johnson was added to ETATS-UNIS.<br />
[2020-04-03 11:02:25] - Tyler Johnson has been added to ETATS-UNIS.<br />
[2020-04-03 11:00:55] - Cole Cassels was added to ETATS-UNIS.<br />
[2020-04-03 11:00:53] - Cole Cassels has been added to ETATS-UNIS.<br />
[2020-04-03 10:59:17] - Derek Stepan was added to ETATS-UNIS.<br />
[2020-04-03 10:59:15] - Derek Stepan has been added to ETATS-UNIS.<br />
[2020-04-03 10:52:20] - Denis Godla was added to SLOVAQUIE.<br />
[2020-04-03 10:52:19] - Denis Godla has been added to SLOVAQUIE.<br />
[2020-04-03 10:50:47] - Peter Ceresnak was added to SLOVAQUIE.<br />
[2020-04-03 10:50:45] - Peter Ceresnak has been added to SLOVAQUIE.<br />
[2020-04-03 10:43:50] - Marek Daloga was added to SLOVAQUIE.<br />
[2020-04-03 10:43:48] - Marek Daloga has been added to SLOVAQUIE.<br />
[2020-04-03 10:41:09] - Martin Fehervary was added to SLOVAQUIE.<br />
[2020-04-03 10:41:07] - Martin Fehervary has been added to SLOVAQUIE.<br />
[2020-04-03 10:37:29] - Patrik Koch was added to SLOVAQUIE.<br />
[2020-04-03 10:37:27] - Patrik Koch has been added to SLOVAQUIE.<br />
[2020-04-03 10:33:11] - Martin Marincin was added to SLOVAQUIE.<br />
[2020-04-03 10:33:09] - Martin Marincin has been added to SLOVAQUIE.<br />
[2020-04-03 10:31:26] - Michal Cajkovsky was added to SLOVAQUIE.<br />
[2020-04-03 10:31:24] - Michal Cajkovsky has been added to SLOVAQUIE.<br />
[2020-04-03 10:27:57] - Andrej Sekera was added to SLOVAQUIE.<br />
[2020-04-03 10:27:55] - Andrej Sekera has been added to SLOVAQUIE.<br />
[2020-04-03 10:26:13] - Marcel Hascak was added to SLOVAQUIE.<br />
[2020-04-03 10:26:11] - Marcel Hascak has been added to SLOVAQUIE.<br />
[2020-04-03 10:23:29] - Tomas Marcinko was added to SLOVAQUIE.<br />
[2020-04-03 10:23:27] - Tomas Marcinko has been added to SLOVAQUIE.<br />
[2020-04-03 10:20:55] - Martin Bakos was added to SLOVAQUIE.<br />
[2020-04-03 10:20:52] - Martin Bakos has been added to SLOVAQUIE.<br />
[2020-04-03 10:16:05] - Matus Sukel was added to SLOVAQUIE.<br />
[2020-04-03 10:16:04] - Matus Sukel has been added to SLOVAQUIE.<br />
[2020-04-03 10:12:25] - Patrik Lamper was added to SLOVAQUIE.<br />
[2020-04-03 10:12:23] - Patrik Lamper has been added to SLOVAQUIE.<br />
[2020-04-03 10:09:21] - Lukas Cingel was added to SLOVAQUIE.<br />
[2020-04-03 10:09:19] - Lukas Cingel has been added to SLOVAQUIE.<br />
[2020-04-03 10:03:52] - Michal Kristof was added to SLOVAQUIE.<br />
[2020-04-03 10:03:50] - Michal Kristof has been added to SLOVAQUIE.<br />
[2020-04-03 09:57:18] - Andrej Kudrna was added to SLOVAQUIE.<br />
[2020-04-03 09:57:17] - Andrej Kudrna has been added to SLOVAQUIE.<br />
[2020-04-03 08:38:24] - Marian Studenic was added to SLOVAQUIE.<br />
[2020-04-03 08:38:21] - Marian Studenic has been added to SLOVAQUIE.<br />
[2020-04-03 08:27:48] - Tomas Zigo was added to SLOVAQUIE.<br />
[2020-04-03 08:27:47] - Tomas Zigo has been added to SLOVAQUIE.<br />
[2020-04-03 08:19:28] - Libor Hudacek was added to SLOVAQUIE.<br />
[2020-04-03 08:19:26] - Libor Hudacek has been added to SLOVAQUIE.<br />
[2020-04-03 08:10:13] - Nigel Dawes was added to TEAM WORLD.<br />
[2020-04-03 08:10:11] - Nigel Dawes has been added to TEAM WORLD.<br />
[2020-04-03 08:06:55] - Dustin Boyd was added to TEAM WORLD.<br />
[2020-04-03 08:06:53] - Dustin Boyd has been added to TEAM WORLD.<br />
[2020-04-03 08:04:41] - Darren Dietz was added to TEAM WORLD.<br />
[2020-04-03 08:04:40] - Darren Dietz has been added to TEAM WORLD.<br />
[2020-04-03 06:09:10] - Robert Lantosi was added to SLOVAQUIE.<br />
[2020-04-03 06:09:08] - Robert Lantosi has been added to SLOVAQUIE.<br />
[2020-04-03 06:05:43] - Marko Dano was added to SLOVAQUIE.<br />
[2020-04-03 06:05:41] - Marko Dano has been added to SLOVAQUIE.<br />
[2020-04-03 06:03:40] - Adam Liska was added to SLOVAQUIE.<br />
[2020-04-03 06:03:39] - Adam Liska has been added to SLOVAQUIE.<br />
[2020-04-03 05:57:25] - Tim Bozon was added to TEAM WORLD.<br />
[2020-04-03 05:57:24] - Tim Bozon has been added to TEAM WORLD.<br />
[2020-04-03 05:55:02] - Joachim Blichfeld was added to TEAM WORLD.<br />
[2020-04-03 05:55:01] - Joachim Blichfeld has been added to TEAM WORLD.<br />
[2020-04-03 05:53:21] - Mathias From was added to TEAM WORLD.<br />
[2020-04-03 05:53:19] - Mathias From has been added to TEAM WORLD.<br />
[2020-04-03 05:51:23] - Wojtek Wolski was added to TEAM WORLD.<br />
[2020-04-03 05:51:21] - Wojtek Wolski has been added to TEAM WORLD.<br />
[2020-04-03 05:49:05] - Antoine Roussel was added to TEAM WORLD.<br />
[2020-04-03 05:49:04] - Antoine Roussel has been added to TEAM WORLD.<br />
[2020-04-03 05:47:34] - Daniel Sprong was added to TEAM WORLD.<br />
[2020-04-03 05:47:32] - Daniel Sprong has been added to TEAM WORLD.<br />
[2020-04-03 05:45:43] - Oliver Bjorkstrand was added to TEAM WORLD.<br />
[2020-04-03 05:45:42] - Oliver Bjorkstrand has been added to TEAM WORLD.<br />
[2020-04-03 05:44:04] - Thomas Vanek was added to TEAM WORLD.<br />
[2020-04-03 05:44:02] - Thomas Vanek has been added to TEAM WORLD.<br />
[2020-04-03 05:42:07] - Yegor Sharangovich was added to TEAM WORLD.<br />
[2020-04-03 05:42:05] - Yegor Sharangovich has been added to TEAM WORLD.<br />
[2020-04-03 05:40:27] - Max Hermens was added to TEAM WORLD.<br />
[2020-04-03 05:40:26] - Max Hermens has been added to TEAM WORLD.<br />
[2020-04-03 05:38:48] - Hafthor Sigrunarson was added to TEAM WORLD.<br />
[2020-04-03 05:38:46] - Hafthor Sigrunarson has been added to TEAM WORLD.<br />
[2020-04-03 05:36:58] - Lars Eller was added to TEAM WORLD.<br />
[2020-04-03 05:36:56] - Lars Eller has been added to TEAM WORLD.<br />
[2020-04-03 05:35:20] - Mattias Norstebo was added to TEAM WORLD.<br />
[2020-04-03 05:35:18] - Mattias Norstebo has been added to TEAM WORLD.<br />
[2020-04-03 05:32:51] - Andrey Pedan was added to TEAM WORLD.<br />
[2020-04-03 05:32:49] - Andrey Pedan has been added to TEAM WORLD.<br />
[2020-04-03 05:30:43] - Markus Lauridsen was added to TEAM WORLD.<br />
[2020-04-03 05:30:42] - Markus Lauridsen has been added to TEAM WORLD.<br />
[2020-04-03 05:28:32] - Enrico Miglioranzi was added to TEAM WORLD.<br />
[2020-04-03 05:28:31] - Enrico Miglioranzi has been added to TEAM WORLD.<br />
[2020-04-03 05:26:16] - Jesper Jensen was added to TEAM WORLD.<br />
[2020-04-03 05:26:15] - Jesper Jensen has been added to TEAM WORLD.<br />
[2020-04-03 05:23:47] - Raman Hrabarenka was added to TEAM WORLD.<br />
[2020-04-03 05:23:44] - Raman Hrabarenka has been added to TEAM WORLD.<br />
[2020-04-03 05:21:27] - Frederik Andersen was added to TEAM WORLD.<br />
[2020-04-03 05:21:25] - Frederik Andersen has been added to TEAM WORLD.<br />
[2020-04-03 05:19:45] - Alexandar Georgiyev was added to TEAM WORLD.<br />
[2020-04-03 05:19:43] - Alexandar Georgiyev has been added to TEAM WORLD.<br />
[2020-04-03 05:14:35] - Pavel Francouz was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:14:33] - Pavel Francouz has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:12:57] - Petr Mrazek was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:12:55] - Petr Mrazek has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:11:24] - Filip Kral was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:11:22] - Filip Kral has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:08:49] - Jakub Zboril was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:08:48] - Jakub Zboril has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:42:20] - Tomas Kundratek was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:42:18] - Tomas Kundratek has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:40:26] - Filip Hronek was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:40:24] - Filip Hronek has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:38:30] - Andrej Sustr was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:38:28] - Andrej Sustr has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:35:51] - Jakub Kindl was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:35:50] - Jakub Kindl has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:32:20] - Jaromir Jagr was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:32:18] - Jaromir Jagr has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:29:41] - Filip Chytil was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:29:39] - Filip Chytil has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:24:14] - Martin Necas was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:24:09] - artin Necas has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:03:57] - Filip Chlapik was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:03:54] - Filip Chlapik has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:00:28] - David Kampf was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:00:26] - David Kampf has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:56:30] - Dominik Simon was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:56:28] - Dominik Simon has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:54:07] - Pavel Zacha was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:54:05] - Pavel Zacha has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:49:48] - Filip Zadina was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:49:47] - Filip Zadina has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:47:28] - Michael Frolik was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:47:26] - Michael Frolik has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:43:47] - Ondrej Palat was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:43:45] - Ondrej Palat has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:35:56] - Martin Hanzal was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:35:54] - Martin Hanzal has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:33:10] - Ondrej Kase was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:33:08] - Ondrej Kase has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:30:58] - David Krejci was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:30:56] - David Krejci has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-02 13:53:47] - Yannic Seidenberg was added to ALLEMAGNE.<br />
[2020-04-02 13:53:45] - Yannic Seidenberg has been added to ALLEMAGNE.<br />
[2020-04-02 06:51:11] - Danny aus den Birken was added to ALLEMAGNE.<br />
[2020-04-02 06:51:09] - Danny aus den Birken has been added to ALLEMAGNE.<br />
[2020-04-02 06:48:49] - Mathias Niederberger was added to ALLEMAGNE.<br />
[2020-04-02 06:48:47] - Mathias Niederberger has been added to ALLEMAGNE.<br />
[2020-04-02 06:44:11] - Moritz Seider was added to ALLEMAGNE.<br />
[2020-04-02 06:44:09] - Moritz Seider has been added to ALLEMAGNE.<br />
[2020-04-02 06:39:47] - Simon Sezemsky was added to ALLEMAGNE.<br />
[2020-04-02 06:39:46] - Simon Sezemsky has been added to ALLEMAGNE.<br />
[2020-04-02 06:33:59] - Leon Gawanke was added to ALLEMAGNE.<br />
[2020-04-02 06:33:58] - Leon Gawanke has been added to ALLEMAGNE.<br />
[2020-04-02 06:29:55] - Konrad Abeltshauser was added to ALLEMAGNE.<br />
[2020-04-02 06:29:54] - Konrad Abeltshauser has been added to ALLEMAGNE.<br />
[2020-04-02 06:24:30] - Jonas Müller was added to ALLEMAGNE.<br />
[2020-04-02 06:24:28] - Jonas Müller has been added to ALLEMAGNE.<br />
[2020-04-02 06:15:56] - Denis Reul was added to ALLEMAGNE.<br />
[2020-04-02 06:15:54] - Denis Reul has been added to ALLEMAGNE.<br />
[2020-04-02 05:47:59] - Tobias Rieder was added to ALLEMAGNE.<br />
[2020-04-02 05:47:56] - Tobias Rieder has been added to ALLEMAGNE.<br />
[2020-04-02 05:44:55] - Tim Stützle was added to ALLEMAGNE.<br />
[2020-04-02 05:44:53] - Tim Stützle has been added to ALLEMAGNE.<br />
[2020-04-02 05:32:22] - Philip Gogulla was added to ALLEMAGNE.<br />
[2020-04-02 05:32:20] - Philip Gogulla has been added to ALLEMAGNE.<br />
[2020-04-01 19:36:18] - Nico Sturm was added to ALLEMAGNE.<br />
[2020-04-01 19:36:16] - Nico Sturm has been added to ALLEMAGNE.<br />
[2020-04-01 19:29:06] - Markus Eisenschmid was added to ALLEMAGNE.<br />
[2020-04-01 19:29:05] - Markus Eisenschmid has been added to ALLEMAGNE.<br />
[2020-04-01 19:23:25] - Marc Michaelis was added to ALLEMAGNE.<br />
[2020-04-01 19:23:23] - Marc Michaelis has been added to ALLEMAGNE.<br />
[2020-04-01 19:18:03] - Lukas Reichel was added to ALLEMAGNE.<br />
[2020-04-01 19:17:58] - Lukas Reichel has been added to ALLEMAGNE.<br />
[2020-04-01 19:10:24] - Lean Bergmann was added to ALLEMAGNE.<br />
[2020-04-01 19:10:21] - Lean Bergmann has been added to ALLEMAGNE.<br />
[2020-04-01 19:03:14] - Laurin Braun was added to ALLEMAGNE.<br />
[2020-04-01 19:03:12] - Laurin Braun has been added to ALLEMAGNE.<br />
[2020-04-01 19:00:23] - Eduard Lewandowski was added to ALLEMAGNE.<br />
[2020-04-01 19:00:21] - Eduard Lewandowski has been added to ALLEMAGNE.<br />
[2020-04-01 18:56:30] - Dominik Kahun was added to ALLEMAGNE.<br />
[2020-04-01 18:56:28] - Dominik Kahun has been added to ALLEMAGNE.<br />
[2020-04-01 18:53:19] - Dominik Bokk was added to ALLEMAGNE.<br />
[2020-04-01 18:53:17] - Dominik Bokk has been added to ALLEMAGNE.<br />
[2020-04-01 18:49:37] - Daniel Pietta was added to ALLEMAGNE.<br />
[2020-04-01 18:49:35] - Daniel Pietta has been added to ALLEMAGNE.<br />
[2020-04-01 18:42:48] - Brooks Macek was added to ALLEMAGNE.<br />
[2020-04-01 18:42:45] - Brooks Macek has been added to ALLEMAGNE.<br />
[2020-04-01 18:31:51] - Michael Fora was added to SUISSE.<br />
[2020-04-01 18:31:49] - Michael Fora has been added to SUISSE.<br />
[2020-04-01 18:26:19] - Lukas Frick was added to SUISSE.<br />
[2020-04-01 18:26:17] - Lukas Frick has been added to SUISSE.<br />
[2020-04-01 18:23:04] - Romain Loeffel was added to SUISSE.<br />
[2020-04-01 18:23:02] - Romain Loeffel has been added to SUISSE.<br />
[2020-04-01 18:17:22] - Nino Niederreiter was added to SUISSE.<br />
[2020-04-01 18:17:20] - Nino Niederreiter has been added to SUISSE.<br />
[2020-04-01 18:15:12] - Sven Baertschi was added to SUISSE.<br />
[2020-04-01 18:15:10] - Sven Baertschi has been added to SUISSE.<br />
[2020-03-30 16:09:53] - Luca Sbisa was added to SUISSE.<br />
[2020-03-30 16:09:51] - Luca Sbisa has been added to SUISSE.<br />
[2020-03-28 10:50:20] - Gregory Hofmann was added to SUISSE.<br />
[2020-03-28 10:50:18] - Gregory Hofmann has been added to SUISSE.<br />
[2020-03-28 10:46:27] - Fabrice Herzog was added to SUISSE.<br />
[2020-03-28 10:46:25] - Fabrice Herzog has been added to SUISSE.<br />
[2020-03-28 10:43:19] - Damien Riat was added to SUISSE.<br />
[2020-03-28 10:43:17] - Damien Riat has been added to SUISSE.<br />
[2020-03-28 10:40:38] - Calvin Thurkauf was added to SUISSE.<br />
[2020-03-28 10:40:37] - Calvin Thurkauf has been added to SUISSE.<br />
[2020-03-28 10:35:30] - Philipp Kurashev was added to SUISSE.<br />
[2020-03-28 10:35:28] - Philipp Kurashev has been added to SUISSE.<br />
[2020-03-28 10:32:08] - Simon Moser was added to SUISSE.<br />
[2020-03-28 10:32:06] - Simon Moser has been added to SUISSE.<br />
[2020-03-28 10:29:20] - Andreas Ambuhl was added to SUISSE.<br />
[2020-03-28 10:29:18] - Andreas Ambuhl has been added to SUISSE.<br />
[2020-03-28 10:25:21] - Vincent Praplan was added to SUISSE.<br />
[2020-03-28 10:25:19] - Vincent Praplan has been added to SUISSE.<br />
[2020-03-28 10:20:48] - Christoph Bertschy was added to SUISSE.<br />
[2020-03-28 10:20:40] - Christoph Bertschy  has been added to SUISSE.<br />
[2020-03-28 10:11:45] - Nico Hischier was added to SUISSE.<br />
[2020-03-28 10:11:43] - Nico Hischier has been added to SUISSE.<br />
[2020-03-26 15:13:05] - Robert Mayer was added to SUISSE.<br />
[2020-03-26 15:13:02] - Robert Mayer has been added to SUISSE.<br />
[2020-03-26 15:10:54] - Reto Berra was added to SUISSE.<br />
[2020-03-26 15:10:51] - Reto Berra has been added to SUISSE.<br />
[2020-03-26 15:08:47] - Raphael Diaz was added to SUISSE.<br />
[2020-03-26 15:08:44] - Raphael Diaz has been added to SUISSE.<br />
[2020-03-26 15:04:14] - Mirco Mueller was added to SUISSE.<br />
[2020-03-26 15:04:11] - Mirco Mueller has been added to SUISSE.<br />
[2020-03-26 15:02:03] - Yannick Weber was added to SUISSE.<br />
[2020-03-26 15:02:01] - Yannick Weber has been added to SUISSE.<br />
[2020-03-26 14:56:51] - Noah Rod was added to SUISSE.<br />
[2020-03-26 14:56:48] - Noah Rod has been added to SUISSE.<br />
[2020-03-26 14:54:06] - Damien Brunner was added to SUISSE.<br />
[2020-03-26 14:54:04] - Damien Brunner has been added to SUISSE.<br />
[2020-03-26 14:11:46] - Kristaps Sotnieks was added to LETTONIE.<br />
[2020-03-26 14:11:44] - Kristaps Sotnieks has been added to LETTONIE.<br />
[2020-03-26 14:08:39] - Uvis Janis Balinskis was added to LETTONIE.<br />
[2020-03-26 14:08:36] - Uvis Janis Balinskis has been added to LETTONIE.<br />
[2020-03-26 07:00:40] - Kristaps Zile was added to LETTONIE.<br />
[2020-03-26 07:00:38] - Kristaps Zile has been added to LETTONIE.<br />
[2020-03-26 06:57:35] - Oskars Cibulskis was added to LETTONIE.<br />
[2020-03-26 06:57:29] - Oskars Cibulskis has been added to LETTONIE.<br />
[2020-03-26 06:49:56] - Kalvis Ozols was added to LETTONIE.<br />
[2020-03-26 06:49:53] - Kalvis Ozols has been added to LETTONIE.<br />
[2020-03-26 06:45:50] - Janis Jaks was added to LETTONIE.<br />
[2020-03-26 06:45:47] - Janis Jaks has been added to LETTONIE.<br />
[2020-03-26 06:24:47] - Emils Gegeris was added to LETTONIE.<br />
[2020-03-26 06:24:45] - Emils Gegeris has been added to LETTONIE.<br />
[2020-03-26 06:21:19] - Lauris Darzins was added to LETTONIE.<br />
[2020-03-26 06:21:16] - Lauris Darzins has been added to LETTONIE.<br />
[2020-03-26 06:17:28] - Mareks Mitens was added to LETTONIE.<br />
[2020-03-26 06:17:26] - Mareks Mitens has been added to LETTONIE.<br />
[2020-03-26 06:15:58] - Karlis Cukste was added to LETTONIE.<br />
[2020-03-26 06:15:55] - Karlis Cukste has been added to LETTONIE.<br />
[2020-03-26 06:12:43] - Rodrigo Abols was added to LETTONIE.<br />
[2020-03-26 06:12:40] - Rodrigo Abols has been added to LETTONIE.<br />
[2020-03-26 06:09:43] - Ronalds Kenins was added to LETTONIE.<br />
[2020-03-26 06:09:37] - Ronalds Kenins has been added to LETTONIE.<br />
[2020-03-26 06:07:38] - Rudolfs Balcers was added to LETTONIE.<br />
[2020-03-26 06:07:36] - Rudolfs Balcers has been added to LETTONIE.<br />
[2020-03-26 06:05:21] - Nikita Jevpalovs was added to LETTONIE.<br />
[2020-03-26 06:05:18] - Nikita Jevpalovs has been added to LETTONIE.<br />
<?php include "Footer.php";?>
