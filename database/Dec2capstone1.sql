-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 01:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone1`
--

-- --------------------------------------------------------

--
-- Table structure for table `animalhealthtips`
--

CREATE TABLE `animalhealthtips` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animalhealthtips`
--

INSERT INTO `animalhealthtips` (`id`, `link`, `title`, `slug`, `subtitle`, `body`, `date_added`) VALUES
(52, 'https://www.youtube.com/embed/pCklPidvvOY', 'Raising Cattle for Beginners', 'raising-cattle-for-beginners', 'For Beginners edit', 'Sample', '2022-05-11 17:01:46'),
(58, 'https://www.youtube.com/embed/sEXD7PxOMqk', 'Take Care of Cow', 'insert-from-cp', '6 Essentials to Keep Cattle Healthy & Happy Through Winter- zarebasystems.com', '                                            <h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">Intense cold weather can leave cattle struggling. They may have trouble putting on weight or maintaining their normal milk production. Further, cold weather can leave them stressed as they struggle to go about their normal activities.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">But frigid temperatures don’t have to be a miserable time for cattle. In fact, there are many ways you can keep your livestock happy during the worst of winter. By keeping them happy, they’re also more likely to be healthy and healthy animals produce more for their farm or ranch.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\"><b>1. Always Have Water Available</b></h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">Cattle often struggle to get enough water during the winter. Water sources can freeze or are impossible to get to because of snow, ice or mud. Veterinarians say that each day cattle need between 1 and 2 gallons of water per 100 pounds of weight. That makes water an important resource in any weather condition, winter or not. A novice livestock manager may assume that cattle can eat snow or lick ice to reach their normal limit, but that’s simply not the case. Doing so would take hours and reroute valuable body heat, leaving little time or energy to feed and grow.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">Since dehydrated cattle are more at risk for colic and impaction, it’s important to maintain their water uptake and keep them healthy. The easiest solution is to install tank heaters in their water sources. When you do, make sure to follow manufacturer instructions to avoid accidental shocks or fires. If you can’t use a heater, be able to provide unfrozen water several times a day and in multiple locations.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">By ensuring a regular water source, even when temperatures plummet below freezing, your cattle will continue to thrive -- a key sign of a happy animal.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\"><b>2. Keep Cattle Well Fed</b></h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">Do cattle get cold? They do if they aren’t fed well enough! That’s why it’s important to maximize food delivery during cold weather. Without enough energy, they can’t generate enough body heat, their core temperature drops and death could follow.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">To keep your cattle well-fed and happy during the winter, there are a number of options. The easiest, but often most expensive option, is to switch to a feed with increased nutrients. These premium feeds deliver guaranteed nutrients, including fat and protein, but can wreak havoc on the profits of your operation.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">Another option is to find ways to feed cattle while limiting waste. Avoid scattering feed hay on the ground where as much as 50% of it can go to uneaten. Instead, deposit hay in a hay feeder or other similar shelter – just make sure there’s enough feeders for all your cattle to feed at once and without forcing any animal to wait its turn.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">Your best option pays off the most. Try to maintain a few fields of cold-hardy grass that your cattle can graze through the winter, even with snow on the ground. Early in the season, use rotational grazing to section off a paddock or two with your electric fencing. In it, grow a tall, highly nutritious grass that will peak out from under a heavy snow. With the proper training on how to reach the partially buried grass, your cattle will be happy to spend a chilly winter day on the range.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\"><b>3. Provide Proper Shelter</b></h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">Life on the pasture is normally pretty good. Lots of food and plenty of space, but when a winter storm comes roaring in, getting to safety becomes top priority. Without it, cattle can stress over their well-being and panic.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">Providing proper shelter for grazing cattle during cold weather is critical and can even reduce your feed costs, since chilled livestock will have increased energy requirements. Shelter can be provided in a variety of ways. Three-sided sheds placed throughout your pastures will allow cattle to escape harsh weather. Hills, gullies, thickets of trees and shelterbelts can also work as wind breaks.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">It’s also important to pay attention to the weather forecast. When you know there’s a winter storm coming, it’s best to keep cattle close to the barn or near a shelter. That’s one of the benefits of temporary electric fencing – you can control where your cattle are at all times.Cold Weather Tips 14. Avoid Mud</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">Winter mud hits cattle in two ways. First, mud is the perfect breeding ground for foot rot and thrush. Secondly, it can be challenging for cattle to stay warm when they are caked in mud, even if the mud is only on their legs.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">To keep cattle happy in the winter, address your mud issue by adding gravel or woodchips to muddy areas. You may also benefit from rotational grazing to limit the chances of an overgrazed pasture turning into mud. Your electric fencing can also be used to allow muddy fields an opportunity to recover.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\"><b>5. Assist Pregnant Cattle</b></h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">Pregnant cattle should be carefully monitored through the winter. Check with your veterinarian about any specific vaccinations they may need to keep them healthy through the winter, including nutritional supplements and deworming.\r\nPay special attention to them through harsh weather, too. They need to be shielded from extreme temperatures and they have easy access to food and water, regardless of how deep the snow is. Remember a healthy, well-fed mother is going to pay big dividends later on.\r\nIn fact, segregating pregnant cows into paddocks for close monitoring is always helpful. Doing so allows you to provide them with the right nutrition, water and shelter. Also, it keeps them close as they approach their due date. That allows you to be on scene and properly equipped to help during delivery.\r\n</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\"><b>6. Keep Cattle Comfortable</b></h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">\r\nBeyond all the efforts listed above, there are additional ways to bring comfort to your cattle, winter time or not.\r\nMilking cows can be soothed and comforted with udder cream to relieve cracked and sore skin.\r\nProviding sand beds for resting cows helps ease stress on knees and hocks. Some ranchers have gone a step beyond sand beds, installing sloped water beds to ease body stress and increase comfort.\r\nBedding ma</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">terial is also helpful, especially if cows are wet and its cold out.</h6><h6 style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; line-height: 1.2em;\" class=\"\">Another simple solution to increase comfort is to give your cows space – such as extra bed spaces and spaces for feeding. By keeping your herd size at the appropriate level for your capacity, your cattle will be far less stressed and produce better for you</h6>                                        ', '2022-06-24 23:16:27'),
(60, 'https://youtu.be/sEXD7PxOMqk', 'Sample Entry 2', 'sample-entry-2', 'Sample Entry 2', '<h1 style=\"box-sizing: inherit; margin-bottom: 0.5em; font-family: Gilmer, sans-serif; font-weight: 700; line-height: 1.25; color: rgb(27, 43, 104); font-size: 2em;\">The Beginner\'s Guide to Writing an Essay | Steps &amp; Examples</h1><section class=\"content-block\" style=\"box-sizing: inherit; padding: 0px; border-radius: 3px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(13, 64, 95); font-family: Inter, sans-serif;\"><p style=\"box-sizing: inherit; line-height: 1.8;\">An academic essay is a focused piece of writing that develops an idea or argument using evidence, analysis and interpretation.</p><p style=\"box-sizing: inherit; line-height: 1.8;\">There are many&nbsp;<a href=\"https://www.scribbr.com/academic-essay/essay-types/\" data-wpel-link=\"internal\" style=\"box-sizing: inherit; color: rgb(31, 128, 232); touch-action: manipulation;\">types of essays</a>&nbsp;you might write as a student. The content and&nbsp;<a href=\"https://www.scribbr.com/academic-essay/length/\" data-wpel-link=\"internal\" style=\"box-sizing: inherit; color: rgb(31, 128, 232); touch-action: manipulation;\">length of an essay</a>&nbsp;depends on your level, subject of study, and course requirements. However, most essays at university level are&nbsp;<a href=\"https://www.scribbr.com/academic-essay/argumentative-essay/\" data-wpel-link=\"internal\" style=\"box-sizing: inherit; color: rgb(31, 128, 232); touch-action: manipulation;\">argumentative</a>: they aim to persuade the reader of a particular position or perspective on a topic.</p><p style=\"box-sizing: inherit; line-height: 1.8;\">The essay writing process consists of three main stages:</p><ol style=\"box-sizing: inherit; line-height: 1.8; padding-left: 40px;\"><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Preparation:</span>&nbsp;Decide on your topic, do your research, and create an essay outline.</li><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Writing</span><span style=\"box-sizing: inherit; font-weight: bolder;\">:&nbsp;</span>Set out your argument in the introduction, develop it with evidence in the main body, and wrap it up with a conclusion.</li><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Revision:&nbsp;</span>Check the content, organization, grammar, spelling, and formatting of your essay.</li></ol><p style=\"box-sizing: inherit; line-height: 1.8;\">In this guide, we walk you through what to include in the&nbsp;<a href=\"https://www.scribbr.com/category/academic-essay/#introduction\" style=\"box-sizing: inherit; color: rgb(31, 128, 232); touch-action: manipulation;\">introduction</a>,&nbsp;<a href=\"https://www.scribbr.com/category/academic-essay/#body\" style=\"box-sizing: inherit; color: rgb(31, 128, 232); touch-action: manipulation;\">body</a>&nbsp;and&nbsp;<a href=\"https://www.scribbr.com/category/academic-essay/#conclusion\" style=\"box-sizing: inherit; color: rgb(31, 128, 232); touch-action: manipulation;\">conclusion</a>&nbsp;of an academic essay, using paragraphs from our&nbsp;<a href=\"https://www.scribbr.com/academic-essay/example-essay-structure/\" data-wpel-link=\"internal\" style=\"box-sizing: inherit; color: rgb(31, 128, 232); touch-action: manipulation;\">interactive essay example</a>.</p></section>', '2022-09-07 08:35:29'),
(62, 'https://www.youtube.com/embed/-jGze2qKv0c', 'Entry 1', 'entry-1', 'Entry 1', 'Entry 1', '2022-10-18 20:47:23'),
(63, 'https://www.youtube.com/embed/-jGze2qKv0c', 'Sample', 'sample', 'Sample', 'Sample edited', '2022-10-18 21:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `animal_category`
--

CREATE TABLE `animal_category` (
  `id` int(11) NOT NULL,
  `species` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal_category`
--

INSERT INTO `animal_category` (`id`, `species`) VALUES
(1, 'Cow'),
(2, 'Carabao'),
(3, 'Goat'),
(4, 'Pig');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_comment`
--

CREATE TABLE `announcement_comment` (
  `id` int(11) NOT NULL,
  `announcement_slug` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_comment`
--

INSERT INTO `announcement_comment` (`id`, `announcement_slug`, `name`, `email`, `comment`, `date_created`) VALUES
(4, '10-pet-care-tips', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 'Sample', '2022-10-14 02:32:00'),
(5, 'the-rabies-prevention-and-control-program', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 'Comment', '2022-10-14 02:33:00'),
(6, 'sample-title', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 'Sample Comment', '2022-11-06 10:13:00'),
(7, 'sample-title', 'mao', 'marcandrei.gobison@gmail.com', 'Sample', '2022-11-28 09:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `id` int(11) NOT NULL,
  `cat_id` int(2) NOT NULL DEFAULT 0,
  `subcategory` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`id`, `cat_id`, `subcategory`) VALUES
(1, 10, 'Bacauan'),
(2, 10, 'Bacungan'),
(3, 10, 'Batuhan'),
(4, 10, 'Bayanan'),
(5, 10, 'Biga'),
(6, 10, 'Buhay na Tubig'),
(7, 10, 'Calubasanhon'),
(8, 10, 'Calima'),
(9, 10, 'Casiligan'),
(10, 10, 'Malibago'),
(11, 10, 'Maluanluan'),
(12, 10, 'Matulatula'),
(13, 10, 'Pahilahan'),
(14, 10, 'Panikihan'),
(15, 10, 'Zone I'),
(16, 10, 'Zone II'),
(17, 10, 'Pula'),
(18, 10, 'Puting Cacao'),
(19, 10, 'Tagbakin'),
(20, 10, 'Tagumpay'),
(21, 10, 'Tiguihan'),
(22, 10, 'Campamento'),
(23, 10, 'Misong'),
(24, 1, 'Alag'),
(25, 1, 'Bangkatan'),
(26, 1, 'Burbuli'),
(27, 1, 'Catwiran I'),
(28, 1, 'Catwiran II'),
(29, 1, 'Dulangan I'),
(30, 1, 'Dulangan II'),
(31, 1, 'Lumang Bayan'),
(32, 1, 'Malapad'),
(33, 1, 'Mangangan I'),
(34, 1, 'Mangangan II'),
(35, 1, 'Mayabig'),
(36, 1, 'Pambisan'),
(37, 1, 'Pulang Tubig'),
(38, 1, 'Putican Cabulo'),
(39, 1, 'San Andres'),
(40, 1, 'San Ignacio'),
(41, 1, 'Santa Cruz'),
(42, 1, 'Santa Rosa I'),
(43, 1, 'Santa Rosa II'),
(44, 1, 'Tabon tabon'),
(45, 1, 'Tagumpay'),
(46, 1, 'Water'),
(47, 1, 'Baras'),
(48, 1, 'Bayanan'),
(49, 1, 'Lantuyang'),
(50, 1, 'Poblacion'),
(51, 2, 'Alcadesma'),
(52, 2, 'Bato'),
(53, 2, 'Conrazon'),
(54, 2, 'Malo'),
(55, 2, 'Manihala'),
(56, 2, 'Pag asa'),
(57, 2, 'Poblacion'),
(58, 2, 'Proper_Bansud'),
(59, 2, 'Rosacara'),
(60, 2, 'Salcedo'),
(61, 2, 'Sumagui'),
(62, 2, 'Proper_Tiguisan'),
(63, 2, 'Villa_Pag_Asa'),
(64, 3, 'Anilao'),
(65, 3, 'Aplaya'),
(66, 3, 'Bagumbayan I'),
(67, 3, 'Bagumbayan II'),
(68, 3, 'Batangan'),
(69, 3, 'Camantigue'),
(70, 3, 'Batangan'),
(71, 3, 'Carmundo'),
(72, 3, 'Cawayan'),
(73, 3, 'Dayhagan'),
(74, 3, 'Formon'),
(75, 3, 'Hagan'),
(76, 3, 'Hagupit'),
(77, 3, 'Ipil'),
(78, 3, 'Kaligtasan'),
(79, 3, 'Labasan'),
(80, 3, 'Labonan'),
(81, 3, 'Libertad'),
(82, 3, 'Lisap'),
(83, 3, 'Luna'),
(84, 3, 'Malitbog'),
(85, 3, 'Mapang'),
(86, 3, 'Masaguisi'),
(87, 3, 'Mina de Oro'),
(88, 3, 'Morente'),
(89, 3, 'Ogbot'),
(90, 3, 'Orconuma'),
(91, 3, 'Poblacion'),
(92, 3, 'Polusahi'),
(93, 3, 'Sagana'),
(94, 3, 'San Isidro'),
(95, 3, 'San Jose'),
(96, 3, 'San Juan'),
(97, 3, 'Santa Cruz'),
(98, 3, 'Sigange'),
(99, 3, 'Tawas'),
(100, 4, 'Bagong Sikat'),
(101, 4, 'Balatasan'),
(102, 4, 'Benli'),
(103, 4, 'Cabugao'),
(104, 4, 'Cambunang'),
(105, 4, 'Campaasan'),
(106, 4, 'Maasin'),
(107, 4, 'Maujao'),
(108, 4, 'Milagrosa'),
(109, 4, 'Nasukob'),
(110, 4, 'Poblacion'),
(111, 4, 'San Francisco'),
(112, 4, 'San Isidro'),
(113, 4, 'San Juan'),
(114, 4, 'San Roque'),
(115, 5, 'Balingayan'),
(116, 5, 'Balite'),
(117, 5, 'Baruyan'),
(118, 5, 'Batino'),
(119, 5, 'Bayanan I'),
(120, 5, 'Bayanan II'),
(121, 5, 'Biga'),
(122, 5, 'Bondoc'),
(123, 5, 'Bucayao'),
(124, 5, 'Buhuan'),
(125, 5, 'Bulusan'),
(126, 5, 'Calero'),
(127, 5, 'Camansihan'),
(128, 5, 'Camilmil'),
(129, 5, 'Canubing I'),
(130, 5, 'Canubing II'),
(131, 5, 'Comunal'),
(132, 5, 'Guinobatan'),
(133, 5, 'Gulod'),
(134, 5, 'Gutad'),
(135, 5, 'Ibaba_East'),
(136, 5, 'Ibaba_West'),
(137, 5, 'Ilaya'),
(138, 5, 'Lalud'),
(139, 5, 'Lazareto'),
(140, 5, 'Libis'),
(141, 5, 'Lumang Bayan'),
(142, 5, 'Mahal na Pangalan'),
(143, 5, 'Maidlang'),
(144, 5, 'Malad'),
(145, 5, 'Malamig'),
(146, 5, 'Managpi'),
(147, 5, 'Masipit'),
(148, 5, 'Nag Iba I'),
(149, 5, 'Nag Iba II'),
(150, 5, 'Navotas'),
(151, 5, 'Pachoca'),
(152, 5, 'Palhi'),
(153, 5, 'Panggalaan'),
(154, 5, 'Parang'),
(155, 5, 'Patas'),
(156, 5, 'Personas'),
(157, 5, 'Putingtubig'),
(158, 5, 'Salong'),
(159, 5, 'San Antonio'),
(160, 5, 'San Vicente_Central'),
(161, 5, 'San Vicente_East'),
(162, 5, 'San Vicente_North'),
(163, 5, 'San Vicente_South'),
(164, 5, 'San Vicente_West'),
(165, 5, 'Santa Cruz'),
(166, 5, 'Santa Isabel'),
(167, 5, 'Santa Maria_Village'),
(168, 5, 'Santa Rita'),
(169, 5, 'Santo Nino'),
(170, 5, 'Sapul'),
(171, 5, 'Silonay'),
(172, 5, 'Suqui'),
(173, 5, 'Tawagan'),
(174, 5, 'Tawiran'),
(175, 5, 'Tibag'),
(176, 5, 'Wawa'),
(177, 6, 'Agsalin'),
(178, 6, 'Agos'),
(179, 6, 'Alma Villa'),
(180, 6, 'Andres Bonifacio'),
(181, 6, 'Balete'),
(182, 6, 'Banus'),
(183, 6, 'Banutan'),
(184, 6, 'Buong_Lupa'),
(185, 6, 'Bulaklakan'),
(186, 6, 'Gaudencio Antonino'),
(187, 6, 'Guimbonan'),
(188, 6, 'Kawit'),
(189, 6, 'Lucio Laurel'),
(190, 6, 'Macario Adriatico'),
(191, 6, 'Malamig'),
(192, 6, 'Malayong'),
(193, 6, 'Maligaya'),
(194, 6, 'Malubay'),
(195, 6, 'Manguyang'),
(196, 6, 'Maragooc'),
(197, 6, 'Mirayan'),
(198, 6, 'Narra'),
(199, 6, 'Papandungin'),
(200, 6, 'San Antonio'),
(201, 6, 'Santa Maria'),
(202, 6, 'Santa Theresa'),
(203, 6, 'Tambong'),
(204, 7, 'B Del Mundo'),
(205, 7, 'Balugo'),
(206, 7, 'Bonbon'),
(207, 7, 'Budburan'),
(208, 7, 'Cabalwa'),
(209, 7, 'Don_Pedro'),
(210, 7, 'Maliwanag'),
(211, 7, 'Manaul'),
(212, 7, 'Panaytayan'),
(213, 7, 'Poblacion'),
(214, 7, 'Roma'),
(215, 7, 'Sta Brigida'),
(216, 7, 'Santa Maria'),
(217, 7, 'Villa Celestial'),
(218, 7, 'Wasig'),
(219, 7, 'Santa Teresita'),
(220, 7, 'Waygan'),
(221, 8, 'Adrialuna'),
(222, 8, 'Antipolo'),
(223, 8, 'Apitong'),
(224, 8, 'Arangin'),
(225, 8, 'Aurora'),
(226, 8, 'Bacungan'),
(227, 8, 'Bagong Buhay'),
(228, 8, 'Bancuro'),
(229, 8, 'Barcenaga'),
(230, 8, 'Bayani'),
(231, 8, 'Buhangin'),
(232, 8, 'Concepcion'),
(233, 8, 'Dao'),
(234, 8, 'Del Pilar'),
(235, 8, 'Estrella'),
(236, 8, 'Evangelista'),
(237, 8, 'Gamao'),
(238, 8, 'General_Esco'),
(239, 8, 'Herrera'),
(240, 8, 'Inarawan'),
(241, 8, 'Kalinisan'),
(242, 8, 'Laguna'),
(243, 8, 'Mabini'),
(244, 8, 'Andres Ylagan'),
(245, 8, 'Mahabang Parang'),
(246, 8, 'Malaya'),
(247, 8, 'Malinao'),
(248, 8, 'Malvar'),
(249, 8, 'Masagana'),
(250, 8, 'Masaguing'),
(251, 8, 'Melgar A'),
(252, 8, 'Melgar B'),
(253, 8, 'Metolza'),
(254, 8, 'Montelago'),
(255, 8, 'Montemayor'),
(256, 8, 'Motoderazo'),
(257, 8, 'Mulawin'),
(258, 8, 'Nag Iba I'),
(259, 8, 'Nag Iba II'),
(260, 8, 'Pagkakaisa'),
(261, 8, 'Paniquian'),
(262, 8, 'Pinagsabangan I'),
(263, 8, 'Pinagsabangan II'),
(264, 8, 'Pinahan'),
(265, 8, 'PoblacionI'),
(266, 8, 'Poblacion II'),
(267, 8, 'Poblacion III'),
(268, 8, 'Sampaguita'),
(269, 8, 'San Agustin I'),
(270, 8, 'San Agustin II'),
(271, 8, 'San Andres'),
(272, 8, 'San Antonio'),
(273, 8, 'San Carlos'),
(274, 8, 'San Isidro'),
(275, 8, 'San Jose'),
(276, 8, 'San Luis'),
(277, 8, 'San Nicolas'),
(278, 8, 'San Pedro'),
(279, 8, 'Santa Isabel'),
(280, 8, 'Santa Maria'),
(281, 8, 'Santiago'),
(282, 8, 'Santo_Nino'),
(283, 8, 'Tagumpay'),
(284, 8, 'Tigkan'),
(285, 8, 'Santa_Cruz'),
(286, 8, 'Balite'),
(287, 8, 'Banuton'),
(288, 8, 'Caburo'),
(289, 8, 'Magtibay'),
(290, 8, 'Paitan'),
(291, 9, 'Anoling'),
(292, 9, 'Bacungan'),
(293, 9, 'Bangbang'),
(294, 9, 'Banilad'),
(295, 9, 'Buli'),
(296, 9, 'Cacawan'),
(297, 9, 'Calingag'),
(298, 9, 'Del Razon'),
(299, 9, 'Guinhawa'),
(300, 9, 'Inclanay'),
(301, 9, 'Lumambayan'),
(302, 9, 'Malaya'),
(303, 9, 'Maliancog'),
(304, 9, 'Maningcol'),
(305, 9, 'Marayos'),
(306, 9, 'Marfrancisco'),
(307, 9, 'Nabuslot'),
(308, 9, 'Pagalagala'),
(309, 9, 'Palayan'),
(310, 9, 'Pambisan Malaki'),
(311, 9, 'Pambisan_Munti'),
(312, 9, 'Panggulayan'),
(313, 9, 'Papandayan'),
(314, 9, 'Pili'),
(315, 9, 'Quinabigan'),
(316, 9, 'Ranzo'),
(317, 9, 'Rosario'),
(318, 9, 'Sabang'),
(319, 9, 'Sta Isabel'),
(320, 9, 'Sta Maria'),
(321, 9, 'Sta Rita'),
(322, 9, 'Sto Nino'),
(323, 9, 'Wawa'),
(324, 9, 'Zone I'),
(325, 9, 'Zone II'),
(326, 9, 'Zone III'),
(327, 9, 'Zone IV'),
(328, 11, 'Aninuan'),
(329, 11, 'Baclayan\r\n'),
(330, 11, 'Balatero'),
(331, 11, 'Dulangan'),
(332, 11, 'Palangan'),
(333, 11, 'Sabang'),
(334, 11, 'San Antonio'),
(335, 11, 'San Isidro'),
(336, 11, 'Santo Nino'),
(337, 11, 'Sinandigan'),
(338, 11, 'Tabinay'),
(339, 11, 'Villaflor'),
(340, 11, 'Poblacion'),
(341, 12, 'Bagumbayan'),
(342, 12, 'Cantil'),
(343, 12, 'Dangay'),
(344, 12, 'Happy_Valley'),
(345, 12, 'Libertad'),
(346, 12, 'Libtong'),
(347, 12, 'Mabuhay'),
(348, 12, 'Maraska'),
(349, 12, 'Odiong'),
(350, 12, 'Paclasan'),
(351, 12, 'San Aquilino'),
(352, 12, 'San Isidro'),
(353, 12, 'San Jose'),
(354, 12, 'San Mariano'),
(355, 12, 'San Miguel'),
(356, 12, 'San Rafael'),
(357, 12, 'San Vicente'),
(358, 12, 'Uyao'),
(359, 12, 'Victoria'),
(360, 12, 'Little_Tanauan'),
(361, 13, 'Bigaan'),
(362, 13, 'Calangatan'),
(363, 13, 'Calsapa'),
(364, 13, 'Ilag'),
(365, 13, 'Lumangbayan'),
(366, 13, 'Tacligan'),
(367, 13, 'Poblacion'),
(368, 13, 'Caagutayan'),
(369, 14, 'Bagsok'),
(370, 14, 'Bayuin'),
(371, 14, 'Calocmoy'),
(372, 14, 'Catiningan'),
(373, 14, 'Villareal'),
(374, 14, 'La Fortuna'),
(375, 14, 'Happy Valley'),
(376, 14, 'Calubayan'),
(377, 14, 'Leuteboro I'),
(378, 14, 'Leuteboro II'),
(379, 14, 'Mabuhay I'),
(380, 14, 'Malugay'),
(381, 14, 'Matungao'),
(382, 14, 'Monteverde'),
(383, 14, 'Pasi I'),
(384, 14, 'Pasi II'),
(385, 14, 'Zone I'),
(386, 14, 'Zone II'),
(387, 14, 'Zone III'),
(388, 14, 'Zone IV'),
(389, 14, 'Santo Domingo'),
(390, 14, 'Subaan'),
(391, 14, 'Bugtong Na Tuog'),
(392, 14, 'Mabuhay II'),
(393, 14, 'Maria Concepcion'),
(394, 14, 'Batong Dalig'),
(395, 15, 'Alcate'),
(396, 15, 'Antonino'),
(397, 15, 'Babangonan'),
(398, 15, 'Bagong Silang'),
(399, 15, 'Bagong Buhay'),
(400, 15, 'Bambanin'),
(401, 15, 'Bethel'),
(402, 15, 'Canaan'),
(403, 15, 'Concepcion'),
(404, 15, 'Duongan'),
(405, 15, 'Leido'),
(406, 15, 'Loyal'),
(407, 15, 'Mabini'),
(408, 15, 'Macatoc'),
(409, 15, 'Malabo'),
(410, 15, 'Merit'),
(411, 15, 'Ordovilla'),
(412, 15, 'Pakyas'),
(413, 15, 'Poblacion I'),
(414, 15, 'Poblacion II'),
(415, 15, 'Poblacion III'),
(416, 15, 'Poblacion IV'),
(417, 15, 'Sampaguita'),
(418, 15, 'San Antonio'),
(419, 15, 'San Cristobal'),
(420, 15, 'San Gabriel'),
(421, 15, 'San Gelacio'),
(422, 15, 'San Isidro'),
(423, 15, 'San Juan'),
(424, 15, 'San Narciso'),
(425, 15, 'Urdaneta'),
(426, 15, 'Villa Cerveza');

-- --------------------------------------------------------

--
-- Table structure for table `calendar_plugin`
--

CREATE TABLE `calendar_plugin` (
  `fw_id` int(11) NOT NULL,
  `fw_title` varchar(300) DEFAULT NULL,
  `fw_start_event` datetime DEFAULT NULL,
  `fw_end_event` datetime DEFAULT NULL,
  `fw_timestamp` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendar_plugin`
--

INSERT INTO `calendar_plugin` (`fw_id`, `fw_title`, `fw_start_event`, `fw_end_event`, `fw_timestamp`) VALUES
(1, 'Youtube', '2022-09-16 00:00:00', '2022-09-17 00:00:00', '2022-09-12 15:34:49'),
(2, '', '2022-09-12 00:00:00', '2022-09-21 00:00:00', '2022-09-12 15:36:10'),
(3, 'Youtube', '2022-09-12 00:00:00', '2022-09-12 00:00:00', '2022-09-12 15:37:38'),
(4, 'Google', '2022-09-15 00:00:00', '2022-09-16 00:00:00', '2022-09-12 15:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_category`
--

CREATE TABLE `forum_category` (
  `id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_category`
--

INSERT INTO `forum_category` (`id`, `category`, `description`, `date_updated`) VALUES
(24, 'COW BREEDING', 'SAMPLE EDIT', '2022-09-09 14:26:13'),
(25, 'COW GESTATION', 'SAMPLE EDIT', '2022-09-09 14:26:21'),
(27, 'GOAT BREEDING', 'SAMPLE', '2022-09-09 14:23:26'),
(28, 'RAISING COWS', 'SAMPLE', '2022-09-10 08:21:39'),
(29, 'PET MEDICATION', 'Pet Medication Stuff', '2022-10-18 19:15:57'),
(30, 'Category 1', 'Category 1', '2022-10-12 11:32:43'),
(31, 'Category 2', 'Category 2', '2022-10-12 11:32:43'),
(32, 'Category 3', 'Category 3', '2022-10-12 11:32:43'),
(33, 'Category 4', 'Category 4', '2022-10-12 11:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE `forum_comments` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`id`, `topic_id`, `user_id`, `comment`, `date_created`) VALUES
(103, 43, 75, 'Leave Comment Here...', '2022-10-26 12:53:00'),
(105, 45, 74, 'Sa 1', '2022-11-21 07:33:00'),
(106, 45, 74, 'Wqwqw edit', '2022-11-21 07:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `forum_replies`
--

CREATE TABLE `forum_replies` (
  `id` int(30) NOT NULL,
  `comment_id` int(30) NOT NULL,
  `reply` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE `forum_topics` (
  `id` int(30) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `category_ids` text NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `likes` int(11) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_topics`
--

INSERT INTO `forum_topics` (`id`, `forum_id`, `category_ids`, `title`, `content`, `user_id`, `date_created`, `likes`, `views`) VALUES
(44, 37, '24', 'Sample Question?', 'Sample', 75, '2022-10-26 12:53:00', 1, 2),
(45, 37, '25', 'Sample TOPIC edit', 'edit', 74, '2022-11-13 08:28:00', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics_views`
--

CREATE TABLE `forum_topics_views` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_topics_views`
--

INSERT INTO `forum_topics_views` (`id`, `user_id`, `topic_id`) VALUES
(27, 40, 41),
(28, 74, 41),
(29, 74, 42),
(30, 74, 43),
(31, 75, 43),
(32, 75, 44),
(33, 40, 44),
(34, 74, 45),
(35, 75, 45);

-- --------------------------------------------------------

--
-- Table structure for table `forum_votes`
--

CREATE TABLE `forum_votes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `storyid` int(11) NOT NULL,
  `ipaddress` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_votes`
--

INSERT INTO `forum_votes` (`id`, `user_id`, `storyid`, `ipaddress`, `date`) VALUES
(202, 0, 41, '::1', '2022-10-18 11:18:31'),
(203, 74, 42, '', '2022-10-26 03:41:26'),
(204, 75, 43, '', '2022-10-26 04:53:34'),
(207, 75, 44, '', '2022-11-06 02:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `municipality`
--

CREATE TABLE `municipality` (
  `cat_id` int(2) NOT NULL,
  `category` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `municipality`
--

INSERT INTO `municipality` (`cat_id`, `category`) VALUES
(1, 'Baco'),
(2, 'Bansud'),
(3, 'Bongabong'),
(4, 'Bulalacao'),
(5, 'Calapan'),
(6, 'Gloria'),
(7, 'Mansalay'),
(8, 'Naujan'),
(9, 'Pinamalayan'),
(10, 'Pola'),
(11, 'Puerto Galera'),
(12, 'Roxas'),
(13, 'San Teodoro'),
(14, 'Socorro'),
(15, 'Victoria');

-- --------------------------------------------------------

--
-- Table structure for table `rtc`
--

CREATE TABLE `rtc` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `sender_id` varchar(50) NOT NULL,
  `receiver_id` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rtc`
--

INSERT INTO `rtc` (`id`, `time`, `sender_id`, `receiver_id`, `message`) VALUES
(306, '2022-11-24 03:36:58', 'admin@gmail.com', 'marcandrei.gobison@gmail.com', 'hello'),
(307, '2022-11-24 03:37:17', 'marcandrei.gobison@gmail.com', 'admin@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(12, 'Vaccination For DOGS', 'Bayanan Basketball Court', '2022-10-01 08:01:00', '2022-10-01 21:01:00'),
(13, 'Vaccination For DOGS', 'Bayanan Basketball Court', '2022-09-15 08:00:00', '2022-09-15 11:00:00'),
(15, 'Vaccination For DOGS', 'Bayanan Basketball Court', '2022-10-01 08:01:00', '2022-10-01 21:01:00'),
(17, 'DOG VACCINATION edit', 'BAYANAN HEALTH CENTER', '2022-10-21 08:00:00', '2022-10-21 12:30:00'),
(18, 'Sample Data', 'Sample Place', '2022-12-03 07:00:00', '2022-12-03 11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblabout`
--

CREATE TABLE `tblabout` (
  `id` int(11) NOT NULL,
  `who` text NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblabout`
--

INSERT INTO `tblabout` (`id`, `who`, `vision`, `mission`, `date_updated`) VALUES
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt efficitur consectetur. Nulla facilisi. Fusce id ipsum at leo hendrerit consectetur. Fusce id quam dapibus, rhoncus sapien a, volutpat ex. Morbi lobortis lorem ligula, vitae pharetra velit pharetra non. Nam sagittis justo quis lorem tempus volutpat. Nunc libero metus, placerat pellentesque nisi a, viverra tristique dolor. Pellentesque efficitur metus euismod risus congue, non posuere ligula interdum. Nullam condimentum, est ac fringilla facilisis, dui est maximus lacus, eu varius tellus tortor nec nunc. In in vehicula purus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt efficitur consectetur. Nulla facilisi. Fusce id ipsum at leo hendrerit consectetur. Fusce id quam dapibus, rhoncus sapien a, volutpat ex. Morbi lobortis lorem ligula, vitae pharetra velit pharetra non. Nam sagittis justo quis lorem tempus volutpat. Nunc libero metus, placerat pellentesque nisi a, viverra tristique dolor. Pellentesque efficitur metus euismod risus congue, non posuere ligula interdum. Nullam condimentum, est ac fringilla facilisis, dui est maximus lacus, eu varius tellus tortor nec nunc. In in vehicula purus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt efficitur consectetur. Nulla facilisi. Fusce id ipsum at leo hendrerit consectetur. Fusce id quam dapibus, rhoncus sapien a, volutpat ex. Morbi lobortis lorem ligula, vitae pharetra velit pharetra non. Nam sagittis justo quis lorem tempus volutpat. Nunc libero metus, placerat pellentesque nisi a, viverra tristique dolor. Pellentesque efficitur metus euismod risus congue, non posuere ligula interdum. Nullam condimentum, est ac fringilla facilisis, dui est maximus lacus, eu varius tellus tortor nec nunc. In in vehicula purus.', '2022-11-06 13:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `tblannouncement`
--

CREATE TABLE `tblannouncement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `pic_file` text DEFAULT NULL,
  `body` text NOT NULL,
  `date_published` datetime NOT NULL DEFAULT current_timestamp(),
  `date_edited` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblannouncement`
--

INSERT INTO `tblannouncement` (`id`, `title`, `slug`, `subtitle`, `pic_file`, `body`, `date_published`, `date_edited`) VALUES
(21, 'MAO Activities edit', 'mao-activities-edit', 'MAO Activities Edit', 'rabies-animals-medium1.jpg', 'Sample Edit', '2022-04-11 14:46:51', '2022-10-18 00:00:00'),
(22, 'MAO Activities', 'sample-title-2', 'MAO Activities', 'rabies-animals-medium.jpg', 'Sample  Body ', '2022-04-11 16:02:39', '2022-07-04 00:00:00'),
(23, 'Vaccination', 'vaccination', 'Meaning of Vaccination', 'rabies-animals-medium.jpg', 'What is vaccination explain?\r\nVaccination: The act of introducing a vaccine into the body to produce protection from a specific disease. Immunization: A process by which a person becomes protected against a disease through vaccination. This term is often ', '2022-04-14 17:59:49', '2022-04-14 00:00:00'),
(24, 'The Rabies Prevention and Control Program', 'the-rabies-prevention-and-control-program', 'BACKGROUND SAmple', 'rabies-animals-medium.jpg', 'Rabies is a fatal but preventable viral disease. It can spread to people and pets if they are bitten or scratched by a rabid animal. In the United States, rabies is mostly found in wild animals like bats, raccoons, skunks, and foxes. However, in many other countries dogs still carry rabies, and most rabies deaths in people around the world are caused by dog bites.</p><p style=\"color: rgb(0, 0, 0); font-family: \"Open Sans\", apple-system, blinkmacsystemfont, \"Segoe UI\", \"Helvetica Neue\", arial, sans-serif; font-size: 17px;\">The <a href=\"https://www.cdc.gov/rabies/about.html\" style=\"color: rgb(7, 82, 144); text-decoration-line: underline;\">rabies virus</a> infects the central nervous system. If a person does not receive the <a href=\"https://www.cdc.gov/rabies/medical_care/index.html\" style=\"color: rgb(7, 82, 144); text-decoration-line: underline;\">appropriate medical care</a> after a <a href=\"https://www.cdc.gov/rabies/exposure/index.html\" style=\"color: rgb(7, 82, 144); text-decoration-line: underline;\">potential rabies exposure</a>, the virus can cause disease in the brain, ultimately resulting in death. Rabies can be prevented by vaccinating pets, staying away from wildlife, and seeking medical care after potential exposures before symptoms start.</p>\"><p style=\"color: rgb(0, 0, 0); font-family: \"Open Sans\", apple-system, blinkmacsystemfont, \"Segoe UI\", \"Helvetica Neue\", arial, sans-serif; font-size: 17px;\">Rabies is a fatal but preventable viral disease. It can spread to people and pets if they are bitten or scratched by a rabid animal. In the United States, rabies is mostly found in wild animals like bats, raccoons, skunks, and foxes. However, in many other countries dogs still carry rabies, and most rabies deaths in people around the world are caused by dog bites.</p><p style=\"color: rgb(0, 0, 0); font-family: \"Open Sans\", apple-system, blinkmacsystemfont, \"Segoe UI\", \"Helvetica Neue\", arial, sans-serif; font-size: 17px;\">The <a href=\"https://www.cdc.gov/rabies/about.html\" style=\"color: rgb(7, 82, 144); text-decoration-line: underline;\">rabies virus</a> infects the central nervous system. If a person does not receive the <a href=\"https://www.cdc.gov/rabies/medical_care/index.html\" style=\"color: rgb(7, 82, 144); text-decoration-line: underline;\">appropriate medical care</a> after a <a href=\"https://www.cdc.gov/rabies/exposure/index.html\" style=\"color: rgb(7, 82, 144); text-decoration-line: underline;\">potential rabies exposure</a>, the virus can cause disease in the brain, ultimately resulting in death. Rabies can be prevented by vaccinating pets, staying away from wildlife, and seeking medical care after potential exposures before symptoms start.</p>', '2022-04-17 20:52:10', '2022-09-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbldispersal`
--

CREATE TABLE `tbldispersal` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `exposed` varchar(11) NOT NULL,
  `firstcalving` varchar(11) NOT NULL,
  `calvingstart` datetime DEFAULT NULL,
  `owner` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `date_recorded` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Dispered\r\n1=Monitoring',
  `chart_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldispersal`
--

INSERT INTO `tbldispersal` (`id`, `type`, `exposed`, `firstcalving`, `calvingstart`, `owner`, `address`, `email`, `contact`, `date_recorded`, `status`, `chart_id`) VALUES
(29, 'cow', '2021-06-01', 'no', '2022-03-11 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9255364738, '2022-04-23 14:23:00', 1, 1),
(30, 'cow', '2021-07-01', 'no', '2022-04-10 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9255364738, '2022-04-23 14:26:13', 1, 1),
(31, 'cow', '2021-07-01', 'no', '2022-04-10 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9255364738, '2022-04-23 20:53:56', 1, 1),
(32, 'cow', '2021-04-01', 'no', '2022-01-09 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9455645342, '2022-05-11 14:42:07', 1, 1),
(33, 'cow', '2021-03-11', 'no', '2021-12-19 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9455286162, '2022-05-11 14:44:06', 1, 1),
(34, 'cow', '2021-07-01', 'no', '2022-04-10 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9255364738, '2022-05-11 14:44:34', 1, 1),
(35, 'cow', '2021-10-01', 'no', '2022-07-11 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9233457125, '2022-05-11 14:45:17', 1, 1),
(36, 'cow', '2021-08-11', 'no', '2022-05-21 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9455645342, '2022-05-11 14:50:09', 1, 1),
(37, 'cow', '2021-08-05', 'no', '2022-05-15 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9255364738, '2022-05-11 16:54:19', 1, 1),
(38, 'cow', '2022-01-01', 'no', '2022-10-11 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9233457125, '2022-05-11 18:47:18', 1, 1),
(39, 'carabao', '2022-05-07', 'no', '2023-02-14 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9455645342, '2022-05-11 19:05:06', 1, 1),
(40, 'cow', '2022-06-02', 'no', '2023-03-12 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9255364738, '2022-05-12 17:56:06', 1, 1),
(49, 'cow', '2021-08-06', 'no', '2022-05-16 00:00:00', 'Sample 1', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9233457125, '2022-05-13 22:20:14', 1, 1),
(52, 'carabao', '2022-05-14', 'no', '2023-03-30 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9455645342, '2022-05-14 10:40:06', 1, 1),
(54, 'goat', '2022-05-14', 'no', '2022-10-11 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9233457125, '2022-05-14 10:58:22', 1, 1),
(55, 'carabao', '2021-07-01', 'no', '2022-05-17 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9455645342, '2022-05-18 17:39:03', 1, 1),
(56, 'goat', '2021-12-17', 'no', '2022-05-16 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9455645342, '2022-05-18 18:04:28', 1, 1),
(57, 'pig', '2022-01-24', 'no', '2022-05-19 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9233457125, '2022-05-18 18:16:09', 1, 1),
(58, 'cow', '2021-10-01', 'yes', '2022-07-11 00:00:00', 'Sample owner', 'pola', 'marcandrei.gobison@gmail.com', 9288374628, '2022-07-04 21:49:29', 1, 1),
(63, 'pig', '2022-09-05', 'no', '2022-09-06 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9455645342, '2022-09-06 09:24:53', 1, 1),
(64, 'pig', '2022-09-05', 'no', '2022-09-06 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9288374628, '2022-09-06 09:25:24', 1, 1),
(65, 'pig', '2022-09-05', 'no', '2022-09-06 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9288374628, '2022-09-06 09:25:39', 1, 1),
(66, 'pig', '2022-09-05', 'no', '2022-09-06 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9288374628, '2022-09-06 09:25:51', 1, 1),
(70, 'cow', '2021-02-23', 'no', '2021-12-03 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9455645342, '2022-10-19 16:45:05', 1, 1),
(71, 'carabao', '2021-02-04', 'no', '2021-12-21 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9455286162, '2022-10-19 16:46:09', 1, 1),
(72, 'cow', '2022-10-14', 'yes', '2023-07-24 00:00:00', 'Marc Andrei Gobison', 'Zone 1 Pola Oriental Mindoro', 'marcandrei.gobison@gmail.com', 9288374628, '2022-10-19 16:46:53', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbldispersalconsultation`
--

CREATE TABLE `tbldispersalconsultation` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `location` varchar(255) NOT NULL,
  `street` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=Accepted, 1=Pending, 2=OnGoing\r\n',
  `animalname` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `lastdispersal` datetime DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp(),
  `date_accepted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldispersalconsultation`
--

INSERT INTO `tbldispersalconsultation` (`id`, `lastname`, `firstname`, `email`, `user_id`, `contact`, `location`, `street`, `type`, `status`, `animalname`, `age`, `lastdispersal`, `description`, `date_added`, `date_accepted`) VALUES
(16, 'Gobison', 'Marc Andrei', '3f4.gobison.marc.andrei@gmail.com', 70, 9455286162, 'Batuhan', 'Zone 1 Pola Oriental Mindoro', 'Cow', 1, '', 3, '2022-10-12 00:00:00', 'sa', '2022-10-16', '2022-12-02 06:23:41'),
(17, 'Gobison', 'Marc Andrei', '3f4.gobison.marc.andrei@gmail.com', 70, 9455286162, 'Bacungan', 'Zone 1 Pola Oriental Mindoro', 'Cow', 1, '', 20, '2022-10-12 00:00:00', 'sa', '2022-10-16', '2022-12-02 06:22:07'),
(18, 'sa', 'sa', '3f4.gobison.marc.andrei@gmail.com', 70, 0, 'batuhan', 'sa', 'Cow', 0, 'sa', 3, '2022-10-19 21:58:12', 'sa', '2022-10-16', '2022-12-02 06:20:10'),
(19, 'sadf', 'sds', '3f4.gobison.marc.andrei@gmail.com', 0, 0, 'batuhan', 'sa', 'Cow', 1, 'sa', 2, '2022-10-18 21:58:12', 'sa', '2022-10-16', NULL),
(20, 'hghg', 'ghgh', 'marcandrei.gobison@gmail.com', 74, 9455286162, 'Batuhan', 'gfgf', 'Goat', 1, '', 3, '2022-10-10 00:00:00', 'hjhj', '2022-10-27', '2022-12-02 07:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `tblfarmer`
--

CREATE TABLE `tblfarmer` (
  `id` int(11) NOT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `midname` varchar(100) DEFAULT NULL,
  `extension` varchar(9) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `farmlocation` varchar(100) DEFAULT NULL,
  `contact` varchar(12) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(11) DEFAULT NULL,
  `cornarea` varchar(11) DEFAULT NULL,
  `ricearea` varchar(11) DEFAULT NULL,
  `hvcarea` varchar(100) DEFAULT NULL,
  `coconutarea` varchar(100) DEFAULT NULL,
  `lpcount` varchar(30) DEFAULT NULL,
  `regional` varchar(11) DEFAULT NULL,
  `provincial` varchar(11) DEFAULT NULL,
  `municipal` varchar(11) DEFAULT NULL,
  `barangay` varchar(11) DEFAULT NULL,
  `farmer` varchar(11) DEFAULT NULL,
  `date_recorded` datetime NOT NULL DEFAULT current_timestamp(),
  `remarks` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblfarmer`
--

INSERT INTO `tblfarmer` (`id`, `lastname`, `firstname`, `midname`, `extension`, `address`, `farmlocation`, `contact`, `birthday`, `age`, `sex`, `cornarea`, `ricearea`, `hvcarea`, `coconutarea`, `lpcount`, `regional`, `provincial`, `municipal`, `barangay`, `farmer`, `date_recorded`, `remarks`) VALUES
(1, 'JABAT', 'REMEDIOS', 'MENDOZA', '', 'BIGA,POLA', 'BIGA,POLA', '', '0000-00-00', 45, NULL, '', '0.25', '', '', '', '17', '52', '10', '005', '00001', '2022-03-07 20:01:52', 'COMPLETE'),
(2, 'JABAT', 'JAYSON', 'D', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 33, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00002', '2022-03-07 20:01:52', NULL),
(3, 'JABAT', 'RYAN', 'E.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 35, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00003', '2022-02-05 20:01:52', NULL),
(4, 'JABAT', 'MA. WILAFLOR', 'G.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 41, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00004', '2022-02-05 20:01:52', NULL),
(5, 'JABAT', 'RUBEN', 'M', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 57, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00005', '2022-03-07 20:01:52', NULL),
(6, 'JABAT', 'ALTHEA', 'H.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 71, 'F', NULL, '0.25', NULL, NULL, NULL, '17', '52', '10', '005', '00006', '2022-03-07 20:01:52', NULL),
(7, 'JABAT', 'BENJAMEN', 'M', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 65, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00007', '2022-03-07 20:01:52', NULL),
(8, 'JABAT', 'EMILY', 'MAUSIG', NULL, 'BIGA,POLA', 'BIGA,POLA', '9508465313', '0000-00-00', 60, 'F', NULL, '0.25', NULL, NULL, NULL, '17', '52', '10', '005', '00008', '2022-03-07 20:01:52', NULL),
(9, 'JABAT', 'BENEX', 'DEL PRADO', NULL, 'BIGA,POLA', 'BIGA,POLA', '9486720675', '0000-00-00', 32, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00009', '2022-03-07 20:01:52', 'COMPLETE'),
(10, 'JABAT', 'ARNOLD', 'GERONAGA', NULL, 'BIGA,POLA', 'BIGA,POLA', '9090461675', '0000-00-00', 43, 'M', NULL, '2.00', '0.10-BANANA,COCONUT', NULL, NULL, '17', '52', '10', '005', '00010', '2022-03-07 20:01:52', 'INCOMPLETE'),
(11, 'JABAT', 'BERNARDO JR.', 'E.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 38, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00011', '2022-03-07 20:01:52', NULL),
(12, 'JABAT', 'BERNARDO, SR.', 'R.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 69, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00012', '2022-03-07 20:01:52', NULL),
(13, 'LANETE', 'DANIEL', 'H.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 62, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00013', '2022-03-07 20:01:52', NULL),
(14, 'LESORA', 'JOHNNY', 'G', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 55, 'M', NULL, '0.20', NULL, NULL, NULL, '17', '52', '10', '005', '00014', '2022-03-07 20:01:52', NULL),
(15, 'LINGON', 'FLORDELIZA', 'J.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 59, 'F', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00015', '2022-03-07 20:01:52', NULL),
(16, 'LAUGO', 'ADELAIDA', 'M.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 43, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00016', '2022-03-07 20:01:52', NULL),
(17, 'LAURITA', 'BERLITO', 'M.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 48, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00017', '2022-03-07 20:01:52', NULL),
(18, 'MASCARINAS', 'BENEDICTO', 'ALDOVER', NULL, 'BIGA,POLA', 'BIGA,POLA', '9128478443', '1960-05-07', 60, 'M', NULL, '0.50', '1.00-BANANA,COCONUT', NULL, NULL, '17', '52', '10', '005', '00018', '2022-03-07 20:01:52', 'INCOMPLETE'),
(19, 'MASCARINAS', 'RANDY', 'G', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 46, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00019', '2022-03-07 20:01:52', NULL),
(20, 'MAGCAMIT', 'RODOLFO', 'N.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 70, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00020', '2022-03-07 20:01:52', NULL),
(21, 'MAUSIG', 'RUBEN', 'A', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 65, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00021', '2022-03-07 20:01:52', NULL),
(22, 'MAUSIG', 'EDSEL', 'R.', NULL, 'BIGA,POLA', 'BIGA,POLA', '9778027716', '1976-10-10', 44, 'M', NULL, '0.75', NULL, NULL, NULL, '17', '52', '10', '005', '00022', '2022-03-07 20:01:52', NULL),
(23, 'MAUSIG', 'ROSEMARIE', 'A.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 40, 'F', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00023', '2022-03-07 20:01:52', NULL),
(24, 'MAUSIG', 'EDILBERTO', 'P', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 60, 'M', NULL, '1.50', NULL, NULL, NULL, '17', '52', '10', '005', '00024', '2022-03-07 20:01:52', NULL),
(25, 'MATOS', 'MARITES', 'J', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, NULL, 'F', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00025', '2022-03-07 20:01:52', NULL),
(26, 'MAZO', 'SHILA', 'J', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 43, 'F', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00026', '2022-03-07 20:01:52', NULL),
(27, 'MAUSIG', 'ENRICO', 'R.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 54, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00027', '2022-03-07 20:01:52', NULL),
(28, 'MAUSIG', 'NOEL', 'R', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 56, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00028', '2022-03-07 20:01:52', NULL),
(29, 'MAGCAMIT', 'FERNANDO', 'JABAT', NULL, 'BIGA,POLA', 'BIGA,POLA', '9074088350', '0000-00-00', 43, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00029', '2022-03-07 20:01:52', NULL),
(30, 'MENDOZA', 'MARIA', 'A', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, NULL, 'F', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00030', '2022-03-07 20:01:52', NULL),
(31, 'MATRE', 'NEMUEL', 'MAUSIG', NULL, 'BIGA,POLA', 'BIGA,POLA', '9294122153', '0000-00-00', 42, 'M', NULL, '2.00', '0.50-RAMBUTAN,LANZONES,SAGING,NIIYOG', NULL, NULL, '17', '52', '10', '005', '00031', '2022-03-07 20:01:52', 'INCOMPLETE'),
(32, 'MAUSIG', 'ARIEL', 'JABAT', NULL, 'BIGA,POLA', 'BIGA,POLA', '9125451937', '0000-00-00', 51, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00032', '2022-03-07 20:01:52', 'INCOMPLETE /BARC'),
(33, 'MASCARINAS', 'FREDERICK', 'REQUINALA', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, '1978-07-05', 42, 'M', NULL, '1.50', NULL, NULL, NULL, '17', '52', '10', '005', '00033', '2022-03-07 20:01:52', 'COMPLETE'),
(34, 'MAGCAMIT', 'MARCO', 'JABAT', NULL, 'BIGA,POLA', 'BIGA,POLA', '9217838556', '0000-00-00', 38, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00034', '2022-03-07 20:01:52', 'INCOMPLETE INFO'),
(35, 'MANIMTIM', 'ISMAEL', 'A', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 36, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00035', '2022-03-07 20:01:52', NULL),
(36, 'MAUSIG', 'EDISON', 'H', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 43, 'M', NULL, '1.50', NULL, NULL, NULL, '17', '52', '10', '005', '00036', '2022-03-07 20:01:52', NULL),
(37, 'PACIA', 'RUBEN', 'MACARAIG', 'SR.', 'BIGA,POLA', 'BIGA,POLA', '9203088965', '0000-00-00', 61, 'M', NULL, '1.25', NULL, NULL, NULL, '17', '52', '10', '005', '00037', '2022-03-07 20:01:52', 'INCOMPLETE'),
(38, 'PACIA', 'RANDY BOY', 'G.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 41, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00038', '2022-03-07 20:01:52', NULL),
(39, 'PACIA', 'ARTURO', 'M.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 62, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00039', '2022-03-07 20:01:52', NULL),
(40, 'PACIA', 'NICANOR SR.', 'M', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 74, 'M', NULL, '1.25', NULL, NULL, NULL, '17', '52', '10', '005', '00040', '2022-03-07 20:01:52', NULL),
(41, 'PEREZ', 'AMELIA', 'N.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 63, 'F', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00041', '2022-03-07 20:01:52', NULL),
(42, 'PEREZ', 'LIBRADA', 'LIZORA', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, '0000-00-00', 70, 'F', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00042', '2022-03-07 20:01:52', 'COMPLETE'),
(43, 'PROVIDO', 'ARIES', 'O.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 54, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00043', '2022-03-07 20:01:52', NULL),
(44, 'PACIA', 'GUILLERMO', 'M', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, NULL, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00044', '2022-03-07 20:01:52', NULL),
(45, 'PEREZ', 'EFREN', 'DE CASTRO', NULL, 'BIGA,POLA', 'BIGA,POLA', '9303754101', '0000-00-00', 69, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00045', '2022-03-07 20:01:52', 'INCOMPLETE'),
(46, 'REGENCIA', 'ARLINDO', 'J.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 45, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00046', '2022-03-07 20:01:52', NULL),
(47, 'REANZARES', 'DAVID', 'LIZORA', NULL, 'BIGA,POLA', 'BIGA,POLA', '9381795107', '0000-00-00', 47, 'M', NULL, '1.00', '3.00-C0C0NUT,LANZONEZ,CACAO,RAMBUTAN,BANANA', NULL, NULL, '17', '52', '10', '005', '00047', '2022-03-07 20:01:52', 'INCOMPLETE'),
(48, 'REGENCIA', 'ABELARDO', 'M', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 72, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00048', '2022-03-07 20:01:52', NULL),
(49, 'SELDA', 'DIVINA GRACIA', 'P.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 43, 'F', NULL, '1.25', NULL, NULL, NULL, '17', '52', '10', '005', '00049', '2022-03-07 20:01:52', NULL),
(50, 'SENA', 'ARIEL', 'LEZORA', NULL, 'BIGA,POLA', 'BIGA,POLA', '9102662749', '1981-06-07', 39, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00050', '2022-03-07 20:01:52', 'COMPLETE'),
(51, 'VIRAY', 'MONCHITO', 'O.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 51, 'M', NULL, '1.50', NULL, NULL, NULL, '17', '52', '10', '005', '00051', '2022-03-07 20:01:52', NULL),
(52, 'PACIA', 'JOSE', 'M.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 66, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00052', '2022-03-07 20:01:52', NULL),
(53, 'VIRAY', 'BAYANI', 'OLA', NULL, 'BIGA,POLA', 'BIGA,POLA', '9397732904', '1952-05-10', 68, 'M', NULL, '3.00', NULL, NULL, NULL, '17', '52', '10', '005', '00053', '2022-03-07 20:01:52', 'INCOMPLETE'),
(54, 'ACLAN', 'ERNESTO', 'MARQUEZ', NULL, 'BIGA,POLA', 'BIGA,POLA', '9125452016', '0000-00-00', 62, 'M', NULL, '0.75', NULL, NULL, NULL, '17', '52', '10', '005', '00054', '2022-03-07 20:01:52', 'INCOMPLETE'),
(55, 'ACAPULCO', 'SERAFIN', 'M.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 74, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00055', '2022-03-07 20:01:52', NULL),
(56, 'ACAPULCO', 'ARMANDO', 'VIRAY', NULL, 'BIGA,POLA', 'BIGA,POLA', '9097255170', '1970-06-01', 51, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00056', '2022-03-07 20:01:52', NULL),
(57, 'BAROQUILLO', 'ROMEO JR.', 'J', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 47, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00057', '2022-03-07 20:01:52', NULL),
(58, 'BONIFACIO', 'CORA', 'J', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 41, 'F', NULL, '0.25', NULL, NULL, NULL, '17', '52', '10', '005', '00058', '2022-03-07 20:01:52', NULL),
(59, 'BONIFACIO', 'FELICIDAD', 'J', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 77, 'F', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00059', '2022-03-07 20:01:52', NULL),
(60, 'BORCENA', 'ARNULFO', 'R.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 55, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00060', '2022-03-07 20:01:52', NULL),
(61, 'BONIFACIO', 'MERLYN', 'M.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 35, 'F', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00061', '2022-03-07 20:01:52', NULL),
(62, 'BORCENA', 'FERNANDO', 'R.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 42, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00062', '2022-03-07 20:01:52', NULL),
(63, 'CLEOFE', 'NOLASCO', 'L', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 46, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00063', '2022-03-07 20:01:52', NULL),
(64, 'DAMAYAN', 'RON ALLAN', 'MAUSIG', NULL, 'BIGA,POLA', 'BIGA,POLA', '9385775403', '1989-01-04', 31, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00064', '2022-03-07 20:01:52', NULL),
(65, 'DAMAYAN', 'RESTITUTO', 'MATRE', NULL, 'BIGA,POLA', 'BIGA,POLA', '9461290610', '0000-00-00', 65, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00065', '2022-03-07 20:01:52', 'INCOMPLETE'),
(66, 'DAMAYAN', 'FREDERICK', 'G.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 52, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00066', '2022-03-07 20:01:52', NULL),
(67, 'DE CHAVEZ', 'JONATHAN', 'R.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 54, 'M', NULL, '0.75', NULL, NULL, NULL, '17', '52', '10', '005', '00067', '2022-03-07 20:01:52', NULL),
(68, 'DALERE', 'EMILINA', 'MASCARINAS', NULL, 'BIGA,POLA', 'BIGA,POLA', '9071985179', NULL, 70, 'F', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00068', '2022-03-07 20:01:52', 'INCOMPLETE/BARC'),
(69, 'DAMAYAN', 'JIMMY', 'M', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 58, 'M', NULL, '1.50', NULL, NULL, NULL, '17', '52', '10', '005', '00069', '2022-03-07 20:01:52', NULL),
(70, 'DAMAYAN', 'RENY', 'L', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 42, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00070', '2022-03-07 20:01:52', NULL),
(71, 'DECHOSA', 'RICHARD', 'R.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 45, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00071', '2022-03-07 20:01:52', NULL),
(72, 'ESCAMILLAS', 'ALBERTO', 'M.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 66, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00072', '2022-03-07 20:01:52', NULL),
(73, 'ESCAMILLAS', 'JOEY', 'M.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 48, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00073', '2022-03-07 20:01:52', NULL),
(74, 'FEDELICIO', 'JEFFREY', 'P.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 31, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00074', '2022-03-07 20:01:52', NULL),
(75, 'FALOGME', 'WARREN', 'J.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 30, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00075', '2022-03-07 20:01:52', NULL),
(76, 'FAMARANGLAS', 'RUEL JR.', 'S', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 48, 'M', NULL, '0.75', NULL, NULL, NULL, '17', '52', '10', '005', '00076', '2022-03-07 20:01:52', NULL),
(77, 'GERONAGA', 'ELENO', 'MATRE', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, '1958-01-10', 57, 'M', NULL, '3.50', NULL, NULL, NULL, '17', '52', '10', '005', '00077', '2022-03-07 20:01:52', 'COMPLETE'),
(78, 'GUEVARA', 'OSCAR', 'M.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 68, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00078', '2022-03-07 20:01:52', NULL),
(79, 'JABAT', 'GREGORIO', 'M.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 44, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00079', '2022-03-07 20:01:52', NULL),
(80, 'JABAT', 'MILAGROS', 'L', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 59, 'F', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00080', '2022-03-07 20:01:52', NULL),
(81, 'JABAT', 'JOEY', 'D.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 44, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00081', '2022-03-07 20:01:52', NULL),
(82, 'JABAT', 'EDWIN', 'G.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 53, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00082', '2022-03-07 20:01:52', NULL),
(83, 'JABAT', 'LIGAYA', 'R.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 53, 'F', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00083', '2022-03-07 20:01:52', NULL),
(84, 'PACIA', 'NOIME', 'M', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 67, 'F', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00084', '2022-03-07 20:01:52', NULL),
(85, 'MAGCAMIT', 'RODOLFO', 'N', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 70, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00085', '2022-03-07 20:01:52', NULL),
(86, 'DAMAYAN', 'FREDELIN', 'MALITAO', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, '0000-00-00', 60, 'M', NULL, '0.25', NULL, NULL, NULL, '17', '52', '10', '005', '00086', '2022-03-07 20:01:52', 'COMPLETE'),
(87, 'CORDERO', 'RUEL', 'D', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 60, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00087', '2022-03-07 20:01:52', NULL),
(88, 'PEREZ', 'RENJIT', 'L', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 30, 'M', NULL, '1.50', NULL, NULL, NULL, '17', '52', '10', '005', '00088', '2022-03-07 20:01:52', NULL),
(89, 'JABAT', 'BONIFACIO', 'MORALES', NULL, 'BIGA,POLA', 'BIGA,POLA', '9506495574', '0000-00-00', 72, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00089', '2022-03-07 20:01:52', 'INCOMPLETE'),
(90, 'ESCAMILLAS', 'JOMEDES', 'M', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 56, 'M', NULL, '0.75', NULL, NULL, NULL, '17', '52', '10', '005', '00090', '2022-03-07 20:01:52', NULL),
(91, 'REANZARES', 'RUZELL', 'M', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 39, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00091', '2022-03-07 20:01:52', NULL),
(92, 'JABAT', 'RAQUEL', 'M', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 58, 'F', NULL, '0.25', NULL, NULL, NULL, '17', '52', '10', '005', '00092', '2022-03-07 20:01:52', NULL),
(93, 'CORDERO', 'VON LESTER', 'M', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 29, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00093', '2022-03-07 20:01:52', NULL),
(94, 'LACDANG', 'GREG', 'L', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 56, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00094', '2022-03-07 20:01:52', NULL),
(95, 'REQUINALA', 'NIEL', 'MENDOZA', NULL, 'BIGA,POLA', 'BIGA,POLA', '9488563384', '0000-00-00', 34, 'F', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00095', '2022-03-07 20:01:52', 'INCOMPLETE SIGN OF CPT.'),
(96, 'DAMAYAN', 'JOSEFINA', 'E.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 58, 'F', NULL, '0.75', NULL, NULL, NULL, '17', '52', '10', '005', '00096', '2022-03-07 20:01:52', NULL),
(97, 'LESORA', 'RYAN', 'F', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 37, 'M', NULL, '1.50', NULL, NULL, NULL, '17', '52', '10', '005', '00097', '2022-03-07 20:01:52', NULL),
(98, 'MAUSIG', 'ROWEL', 'J', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 62, 'M', NULL, '0.25', NULL, NULL, NULL, '17', '52', '10', '005', '00101', '2022-03-07 20:01:52', NULL),
(99, 'MAYO', 'EZRA', 'F', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 47, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00103', '2022-03-07 20:01:52', NULL),
(100, 'LESORA', 'ROLANDO', 'MANGUE', 'JR.', 'BIGA,POLA', 'BIGA,POLA', NULL, '0000-00-00', 56, 'M', NULL, '1.75', NULL, NULL, NULL, '17', '52', '10', '005', '00104', '2022-03-07 20:01:52', 'COMPLETE'),
(101, 'BORCENA', 'LILYBETH', 'J.', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 45, 'F', NULL, '0.75', NULL, NULL, NULL, '17', '52', '10', '005', '00105', '2022-03-07 20:01:52', NULL),
(102, 'MASCARINAS', 'ROSARIO', 'REQUINALA', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, '0000-00-00', 62, 'F', NULL, '1.50', NULL, NULL, NULL, '17', '52', '10', '005', '00106', '2022-03-07 20:01:52', NULL),
(103, 'MASCARINAS', 'JAYESON', 'GANDOY', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, '0000-00-00', 46, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00107', '2022-03-07 20:01:52', 'COMPLETE'),
(104, 'LA ROSA', 'KAREN', 'M', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 38, 'F', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00108', '2022-03-07 20:01:52', NULL),
(105, 'CORDERO', 'MA. LIZA', 'O', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 51, 'F', NULL, NULL, NULL, NULL, NULL, '17', '52', '10', '005', '00109', '2022-03-07 20:01:52', NULL),
(106, 'ESCAMILLAS', 'JOMAR', 'L', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 35, 'M', NULL, '1.00', NULL, NULL, NULL, '17', '52', '10', '005', '00110', '2022-03-07 20:01:52', NULL),
(107, 'PEREZ', 'BAYANI', 'D', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 71, 'M', NULL, NULL, NULL, NULL, NULL, '17', '52', '10', '005', '00111', '2022-03-07 20:01:52', NULL),
(108, 'MAYO', 'JEAN', 'C', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 42, 'F', NULL, '1.50', NULL, NULL, NULL, '17', '52', '10', '005', '00112', '2022-03-07 20:01:52', NULL),
(109, 'NALING', 'NOEL', 'L', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 52, 'M', NULL, '0.50', NULL, NULL, NULL, '17', '52', '10', '005', '00113', '2022-03-07 20:01:52', NULL),
(110, 'JABAT', 'RONALD', 'D', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, NULL, 38, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00114', '2022-03-07 20:01:52', NULL),
(111, 'MASCARINAS', 'LEO', 'REQUINALA', NULL, 'BIGA,POLA', 'BIGA,POLA', NULL, '1983-04-08', 37, 'M', NULL, '1.50', NULL, NULL, NULL, '17', '52', '10', '005', '00242', '2022-03-07 20:01:52', 'COMPLETE'),
(112, 'LACDANG', 'GREG', 'LESORA', NULL, 'BIGA,POLA', 'BIGA,POLA', '9471671355', '0000-00-00', 56, 'M', NULL, '0.25', NULL, NULL, NULL, '17', '52', '10', '005', '00243', '2022-03-07 20:01:52', 'INCOMPLETE'),
(113, 'JABAT', 'JAY PEE', 'DIEZA', NULL, 'BIGA,POLA', 'BIGA,POLA', '9305598270', '1994-06-10', 26, 'M', NULL, '2.00', NULL, NULL, NULL, '17', '52', '10', '005', '00236', '2022-03-07 20:01:52', 'COMPLETE'),
(114, 'JABAT', 'MELVIN', 'BONIFACIO', NULL, 'BIGA,POLA', 'BIGA,POLA', '95186999618', '0000-00-00', 27, 'M', NULL, NULL, '.12-BANANA,LANZONES', NULL, 'POULTRY-ITIK-13,MANOK-6,PATO-4', '17', '52', '10', '005', '00115', '2022-04-04 20:01:52', 'COMPLETE');

-- --------------------------------------------------------

--
-- Table structure for table `tblmessages`
--

CREATE TABLE `tblmessages` (
  `id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmessages`
--

INSERT INTO `tblmessages` (`id`, `slug`, `name`, `email`, `contact`, `subject`, `message`, `date_added`, `status`) VALUES
(44, 'marc-andrei-gobison-dsds', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'dsds', 'dsds', '2022-06-08 16:15:26', 0),
(45, 'marc-andrei-gobison-from-cp', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'From Cp', 'From cp', '2022-06-24 23:05:00', 0),
(46, 'marc-andrei-gobison-sample-subject-1', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'Sample Subject 1', 'sasa', '2022-09-10 17:35:32', 0),
(47, 'marc-andrei-gobison-sample-subject-1', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'Sample Subject 1', 'aAa', '2022-10-14 18:46:47', 1),
(48, 'marc-andrei-gobison-sample-subject-1', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'Sample Subject 1', 'asas', '2022-10-14 19:10:59', 1),
(49, 'marc-andrei-gobison-dsa', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'dsa', 'dsds', '2022-10-14 19:11:17', 1),
(50, 'marc-andrei-gobison-dsa', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'dsa', 'dsds', '2022-10-14 19:11:41', 1),
(51, 'marc-andrei-gobison-dsa', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'dsa', 'dsds', '2022-10-14 19:11:52', 1),
(52, 'marc-andrei-gobison-dsa', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'dsa', 'dsds', '2022-10-14 19:12:07', 0),
(53, 'marc-andrei-gobison-sample-subject-1', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'Sample Subject 1', 'sa', '2022-10-14 19:13:45', 0),
(54, 'marc-andrei-gobison-sample-subject-1', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'Sample Subject 1', 'sa', '2022-10-14 19:17:23', 0),
(55, 'marc-andrei-gobison-sample', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'Sample', 'sa', '2022-10-14 19:19:20', 0),
(56, 'marc-andrei-gobison-sample-subject-1', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'Sample Subject 1', 'sa', '2022-10-14 19:30:51', 0),
(57, 'marc-andrei-gobison-sample-subject-1', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'Sample Subject 1', 'sa', '2022-10-14 19:30:56', 0),
(60, 'marc-andrei-gobison-dsa', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'dsa', 'dsad', '2022-10-14 20:00:00', 0),
(61, 'marc-andrei-gobison-sample-2', 'Marc Andrei Gobison', '3f4.gobison.marc.andrei@gmail.com', 9455286162, 'Sample 2', 'a', '2022-10-18 01:25:05', 0),
(62, 'sample-1-sa', 'Sample 1', 'gobison.marcandrei@gmail.com', 9455286162, 'sa', 'sa', '2022-10-25 18:33:40', 0),
(63, 'sample-1-sasas', 'Sample 1', 'gobison.marcandrei@gmail.com', 9455286162, 'sasas', 'sasasa', '2022-10-25 18:33:59', 0),
(64, 'sample-1-sa', 'Sample 1', 'gobison.marcandrei@gmail.com', 9455286162, 'sa', 'sasa', '2022-10-25 18:45:09', 1),
(65, 'marc-andrei-gobison-sample-2', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'Sample 2', 'smple', '2022-10-27 14:24:14', 1),
(66, 'samson-sasas', 'Samson', 'gobison.marcandrei@gmail.com', 9455286162, 'sasas', 'l', '2022-10-27 15:45:18', 1),
(67, 'samson-sasas', 'Samson', 'gobison.marcandrei@gmail.com', 9455286162, 'sasas', 'l', '2022-10-27 15:45:26', 1),
(68, 'samson-sasas', 'Samson', 'gobison.marcandrei@gmail.com', 9455286162, 'sasas', 'l', '2022-10-27 15:45:32', 1),
(69, 'marc-andrei-gobison-sample', 'Marc Andrei Gobison', 'marcandrei.gobison@gmail.com', 9455286162, 'Sample', 'sa', '2022-10-31 14:43:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpet`
--

CREATE TABLE `tblpet` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `breed` varchar(50) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `sterilization` varchar(50) NOT NULL,
  `vaccination` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `description` mediumtext NOT NULL,
  `owner` varchar(100) DEFAULT NULL,
  `date_recorded` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(11) NOT NULL DEFAULT 'no',
  `chart_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpet`
--

INSERT INTO `tblpet` (`id`, `name`, `type`, `birthdate`, `breed`, `sex`, `sterilization`, `vaccination`, `color`, `size`, `description`, `owner`, `date_recorded`, `status`, `chart_id`) VALUES
(95, 'EDITED NAMES', '1', '2022-05-01', 'Beagle', 'male', '', 'no', 'black White', '', 'sample', 'admin@gmail.com', '2022-05-11 15:07:16', '', 1),
(97, 'Nemo', '1', '2022-06-01', 'Aspin', 'female', 'yes', 'no', 'black White', 'small', 'sasa', 'tanley@gmail.com', '2022-06-10 14:20:22', '', 1),
(98, 'Murph', '1', '2021-01-01', 'Sample', 'male', 'yes', 'yes', 'black White', 'small', 'Sample', 'tanley@gmail.com', '2022-06-24 17:14:05', '', 1),
(103, 'Sample 1', '1', '2022-10-11', 'Aspin', 'Male', 'Yes', 'Yes', 'Brown', 'med', 'Asa', '3f4.gobison.marc.andrei@gmail.com', '2022-10-16 22:14:55', 'no', 1),
(104, 'Sample 1', '1', '2022-10-19', 'Beagle', 'Male', 'No', 'No', 'Brown white', 'medium', 'Sample', '3f4.gobison.marc.andrei@gmail.com', '2022-10-17 00:19:02', 'yes', 1),
(105, 'Sample', '1', '2022-10-11', 'Aspin', 'Male', 'Yes', 'Yes', 'Brown', 'med', 'Asa', '3f4.gobison.marc.andrei@gmail.com', '2022-10-27 21:27:19', 'yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpethistory`
--

CREATE TABLE `tblpethistory` (
  `id` int(11) NOT NULL,
  `vaccine` varchar(250) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpethistory`
--

INSERT INTO `tblpethistory` (`id`, `vaccine`, `date`) VALUES
(97, 'RABIES', '2022-09-01 00:00:00'),
(98, 'RABIES', '2022-09-01 00:00:00'),
(104, 'RABIES', '2022-10-04 00:00:00'),
(103, 'RABIES', '2022-10-04 00:00:00'),
(104, 'DAP', '2021-02-02 00:00:00'),
(103, 'DAP', '2021-02-02 00:00:00'),
(103, 'DAP', '2022-10-26 00:00:00'),
(103, 'RABIES', '2022-10-30 00:00:00'),
(104, 'DAP', '2022-11-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblsentmail`
--

CREATE TABLE `tblsentmail` (
  `id` int(11) NOT NULL,
  `to_mail` varchar(100) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `attachment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsentmail`
--

INSERT INTO `tblsentmail` (`id`, `to_mail`, `subject`, `message`, `attachment`) VALUES
(1, 'marcandrei.gobison@gmail.com', 'Sample 2', 'Sample', ''),
(2, 'marcandrei.gobison@gmail.com', 'Sample 2', 'Sample', ''),
(3, 'marcandrei.gobison@gmail.com', 'Sample 2', 'SAmple', ''),
(4, 'marcandrei.gobison@gmail.com', 'Sample 2', 'Sample', ''),
(5, 'marcandrei.gobison@gmail.com', 'Sample 2', 'Sample 2', ''),
(6, 'marcandrei.gobison@gmail.com', 'Sample 2 Testing Reply Function', 'Testing Reply Function Message(Body)', ''),
(7, 'marcandrei.gobison@gmail.com', 'Sample 2 Testing Reply Function 2', 'Testing Reply Function 2', ''),
(8, 'marcandrei.gobison@gmail.com', 'Sample 2 Testing Reply Function 3', 'Testing Reply Function 3', ''),
(9, 'marcandrei.gobison@gmail.com', 'sasd', 'assasasasa', ''),
(10, 'marcandrei.gobison@gmail.com', 'Sample Subject 1', 'Sample Email ', ''),
(11, '3f4.gobison.marc.andrei@gmail.com', 'Sample Subject 1', 'sa', ''),
(12, '3f4.gobison.marc.andrei@gmail.com', 'Sample Subject 1', 'sa', ''),
(13, '3f4.gobison.marc.andrei@gmail.com', 'Sample Subject 1', 'sasas', ''),
(14, 'marcandrei.gobison@gmail.com', 'Sample Subject 1', 'sas', ''),
(15, 'marcandrei.gobison@gmail.com', 'Sample Subject 1', 'sas', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblvaccination`
--

CREATE TABLE `tblvaccination` (
  `id` int(11) NOT NULL,
  `vaccine` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `staff` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblvaccination`
--

INSERT INTO `tblvaccination` (`id`, `vaccine`, `location`, `date`, `start_time`, `end_time`, `staff`) VALUES
(32, 'Sample Vaccine 1', 'Bayanan Basketball Court', '2022-09-07', '07:27:00', '11:32:00', 'Mr. Sample Staff 3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_codes`
--

CREATE TABLE `tbl_codes` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `expire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_codes`
--

INSERT INTO `tbl_codes` (`id`, `email`, `expire`) VALUES
(48, 'marcandrei.gobison@gmail.com', 1665900887);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `question`, `answer`, `date_created`) VALUES
(1, 'How to Register an Account in M-A-O?', '<p><span style=\"font-family: \" segoe=\"\" ui\";\"=\"\">1. Click Login at the upper right side and you will be redirected at login page.</span></p><p><span style=\"font-family: \" segoe=\"\" ui\";\"=\"\">2.In login Page you can see register button there, click register button and you will be redirected to register page. </span></p><p><span style=\"font-family: \" segoe=\"\" ui\";\"=\"\">\r\n3. Fill-up all information and click register. After succesfull registration, you will recieve an email confirmation, click confirm email on the email that you recieve and you can login to the M-A-O website.</span></p>', '2022-09-11 16:38:06'),
(5, 'Question?', 'Answer', '2022-09-12 00:00:00'),
(8, 'How to ? ', 'Answer...', '2022-10-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum`
--

CREATE TABLE `tbl_forum` (
  `id` int(30) NOT NULL,
  `title` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_forum`
--

INSERT INTO `tbl_forum` (`id`, `title`, `date_created`) VALUES
(36, 'Pet Vaccination', '2022-10-12 12:03:10'),
(37, 'Animal Gestation', '2022-10-12 12:03:10'),
(38, 'Livestock', '2022-10-14 00:30:47'),
(39, 'Animal Husbandry', '2022-10-14 00:30:47'),
(40, 'Pet Vitamins', '2022-10-18 19:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petcategory`
--

CREATE TABLE `tbl_petcategory` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_petcategory`
--

INSERT INTO `tbl_petcategory` (`cat_id`, `category`) VALUES
(1, 'Dog'),
(2, 'Cat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petsubcategory`
--

CREATE TABLE `tbl_petsubcategory` (
  `cat_id` int(11) NOT NULL,
  `subcategory` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_petsubcategory`
--

INSERT INTO `tbl_petsubcategory` (`cat_id`, `subcategory`) VALUES
(1, 'Beagle'),
(1, 'Chihuahua'),
(1, 'Chow Chow'),
(1, 'German Shepherd'),
(1, 'Labrador Retriever'),
(1, 'Pomeranian'),
(1, 'Poodle'),
(1, 'Pug'),
(1, 'Shih-Tzu'),
(1, 'Siberian Husky'),
(1, 'AsPin'),
(2, 'American Curl'),
(2, 'British Shorthair'),
(2, 'Bengal Cat'),
(2, 'Exotic Shorthair'),
(2, 'American Shorthair'),
(2, 'Russian Blue'),
(2, 'Himalayan Cat'),
(2, 'Siamese Cat'),
(2, 'Persian Cat'),
(2, 'Philippine Shorthair (Puspin)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pic_file` varchar(255) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `mid_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(12) DEFAULT NULL,
  `municipality` varchar(100) DEFAULT NULL,
  `barangay` varchar(100) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(5) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp(),
  `date_edited` datetime DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'inactive',
  `user_status` varchar(10) NOT NULL,
  `last_logout` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `unique_id`, `username`, `pic_file`, `last_name`, `first_name`, `mid_name`, `email`, `contact`, `municipality`, `barangay`, `password`, `usertype`, `date_registered`, `date_edited`, `status`, `user_status`, `last_logout`) VALUES
(40, '', 'Admin', '1.png', 'Admin', 'Admin', '', 'admin@gmail.com', NULL, NULL, NULL, '7fe997c8d3b2dd1a1ae5e76b0acc6084', 'admin', '2022-05-05 22:31:47', NULL, 'active', 'active', '12/02/2022,08:25:40 PM'),
(41, '', 'Guerra', '1.png', 'Guerra', 'Arstanley', 'm', 'tanley@gmail.com', 9455645342, '12', 'San Miguel', '202cb962ac59075b964b07152d234b70', 'user', '2022-05-05 22:32:26', '2022-09-10 00:00:00', 'active', 'active', ''),
(58, '', 'Marc', '1.png', 'Gobison', 'Marc Andrei', 'A', 'dept.of.agriculture.polaormin@gmail.com', NULL, NULL, NULL, 'a8a4669696a655890fdf538fca083fb5', 'ca', '2022-06-08 18:35:02', NULL, 'active', 'active', ''),
(59, '', 'Trial', '1.png', 'Guerra', 'Trial', 'm', 'guerraarstanleymendoza@gmail.com', NULL, NULL, NULL, '389002149611ca2320cb5027757abc32', 'user', '2022-06-11 13:35:15', NULL, 'active', 'active', ''),
(61, '', 'Marco', '1.png', 'Gibson', 'Marco', 'G', 'marcogibson78@gmail.com', 9455645342, NULL, NULL, '4da2ba2974c5eab21049e5785c665bc2', 'user', '2022-06-25 00:54:59', '2022-06-24 00:00:00', 'active', 'active', ''),
(64, '', 'Gibson', 'meeee.jpg', 'Gibson', 'drei', 's', 'drei.gibson@gmail.com', NULL, NULL, NULL, '6a8648d7fe20b0e7a11f565cc48d5ee1', 'user', '2022-09-30 20:21:40', NULL, 'active', 'active', ''),
(74, '', 'Andrei', 'meeee.jpg', 'Gobison', 'Marc Andrei', 'A', 'marcandrei.gobison@gmail.com', 9455286162, '10', 'Bayanan', '4a7d1ed414474e4033ac29ccb8653d9b', 'ca', '2022-10-16 21:10:50', '2022-10-16 00:00:00', 'active', 'inactive', '12/02/2022,05:22:48 PM'),
(75, '', 'Marc', '1.png', 'Gobison', 'Marc Andrei', 'G', '3f4.gobison.marc.andrei@gmail.com', 9455286162, NULL, 'Batuhan', '4a7d1ed414474e4033ac29ccb8653d9b', 'user', '2022-10-16 21:30:47', '2022-10-16 00:00:00', 'active', 'inactive', '12/02/2022,03:28:41 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animalhealthtips`
--
ALTER TABLE `animalhealthtips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animal_category`
--
ALTER TABLE `animal_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement_comment`
--
ALTER TABLE `announcement_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar_plugin`
--
ALTER TABLE `calendar_plugin`
  ADD PRIMARY KEY (`fw_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_category`
--
ALTER TABLE `forum_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_replies`
--
ALTER TABLE `forum_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indexes for table `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_topics_views`
--
ALTER TABLE `forum_topics_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_votes`
--
ALTER TABLE `forum_votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipality`
--
ALTER TABLE `municipality`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `rtc`
--
ALTER TABLE `rtc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`,`receiver_id`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblabout`
--
ALTER TABLE `tblabout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldispersal`
--
ALTER TABLE `tbldispersal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldispersalconsultation`
--
ALTER TABLE `tbldispersalconsultation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfarmer`
--
ALTER TABLE `tblfarmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmessages`
--
ALTER TABLE `tblmessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpet`
--
ALTER TABLE `tblpet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `petownerfk1` (`owner`) USING BTREE;

--
-- Indexes for table `tblpethistory`
--
ALTER TABLE `tblpethistory`
  ADD KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `tblsentmail`
--
ALTER TABLE `tblsentmail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvaccination`
--
ALTER TABLE `tblvaccination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_codes`
--
ALTER TABLE `tbl_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expire` (`expire`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `unique_id` (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animalhealthtips`
--
ALTER TABLE `animalhealthtips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `animal_category`
--
ALTER TABLE `animal_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `announcement_comment`
--
ALTER TABLE `announcement_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;

--
-- AUTO_INCREMENT for table `calendar_plugin`
--
ALTER TABLE `calendar_plugin`
  MODIFY `fw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_category`
--
ALTER TABLE `forum_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `forum_comments`
--
ALTER TABLE `forum_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `forum_replies`
--
ALTER TABLE `forum_replies`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `forum_topics`
--
ALTER TABLE `forum_topics`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `forum_topics_views`
--
ALTER TABLE `forum_topics_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `forum_votes`
--
ALTER TABLE `forum_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `rtc`
--
ALTER TABLE `rtc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblabout`
--
ALTER TABLE `tblabout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbldispersal`
--
ALTER TABLE `tbldispersal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tbldispersalconsultation`
--
ALTER TABLE `tbldispersalconsultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblfarmer`
--
ALTER TABLE `tblfarmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `tblmessages`
--
ALTER TABLE `tblmessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tblpet`
--
ALTER TABLE `tblpet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tblsentmail`
--
ALTER TABLE `tblsentmail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblvaccination`
--
ALTER TABLE `tblvaccination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_codes`
--
ALTER TABLE `tbl_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum_replies`
--
ALTER TABLE `forum_replies`
  ADD CONSTRAINT `forum_replies_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `forum_comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tblpet`
--
ALTER TABLE `tblpet`
  ADD CONSTRAINT `petownerfk1` FOREIGN KEY (`owner`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblpethistory`
--
ALTER TABLE `tblpethistory`
  ADD CONSTRAINT `tblpethistory_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tblpet` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
