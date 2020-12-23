-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 03:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doorstour`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `comment_date`) VALUES
(1, 'shreyansh', 'ashushreyansh', 'testing', '2020-11-08 12:32:38'),
(2, 'nyhbtgvfd', 'yhbgfds', 'nhbgfvdbgnhjmk', '2020-11-08 12:40:50'),
(6, 'dcfgvhb', 'extrcyvubnio', 'cyvubnmuytfcrerxtcfygvubhijnm,lmnbhvgcfxdxrtcfvygbhn,mnbhvgcfxtcfgvhbj', '2020-11-08 13:19:49'),
(8, 'Shreyansh', 'ashushreyasnsh@gmail.com', 'timezone set testing\n', '2020-11-09 13:19:06'),
(9, 'shreyansh', '', 'timestamp', '2020-11-09 13:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(2, 'shreyansh', 'chaurasia', 'shereyansh', 'chau****a'),
(4, 'shrey', 'ansh', 'shreyansh', 'chaurasia'),
(11, 'shreyansh', 'chaurasia', 'ashushreyansh@gmail.com', 'qwerty1999'),
(13, 'trfedw', 'gtrfew', 'y6tg5rfew', 'j7uhy6gt5ryhuj');

-- --------------------------------------------------------

--
-- Table structure for table `template1`
--

CREATE TABLE `template1` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `bhk` int(11) NOT NULL,
  `Bedroom` int(11) NOT NULL,
  `Bathroom` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `price` double NOT NULL,
  `link` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL,
  `propertyType` varchar(11) NOT NULL,
  `yearBuilt` int(11) NOT NULL,
  `stories` int(11) NOT NULL,
  `roomsCount` int(11) NOT NULL,
  `parkingSpaces` int(11) NOT NULL,
  `info` varchar(5000) NOT NULL,
  `extraInfo` varchar(5000) NOT NULL,
  `Internet` tinyint(1) NOT NULL,
  `Garage` tinyint(1) NOT NULL,
  `airConditioning` tinyint(1) NOT NULL,
  `Dishwasher` tinyint(1) NOT NULL,
  `Disposal` tinyint(1) NOT NULL,
  `Balcony` tinyint(1) NOT NULL,
  `Gym` tinyint(1) NOT NULL,
  `Playroom` tinyint(1) NOT NULL,
  `Bar` tinyint(1) NOT NULL,
  `agentName` varchar(50) NOT NULL,
  `agentEmail` varchar(50) NOT NULL,
  `agentContact` varchar(22) NOT NULL,
  `School` int(11) NOT NULL,
  `Metro` int(11) NOT NULL,
  `Hospital` int(11) NOT NULL,
  `ShoppingMall` int(11) NOT NULL,
  `Bus Stand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template1`
--

INSERT INTO `template1` (`id`, `location`, `address`, `bhk`, `Bedroom`, `Bathroom`, `area`, `price`, `link`, `status`, `propertyType`, `yearBuilt`, `stories`, `roomsCount`, `parkingSpaces`, `info`, `extraInfo`, `Internet`, `Garage`, `airConditioning`, `Dishwasher`, `Disposal`, `Balcony`, `Gym`, `Playroom`, `Bar`, `agentName`, `agentEmail`, `agentContact`, `School`, `Metro`, `Hospital`, `ShoppingMall`, `Bus Stand`) VALUES
(1, 'Rohini', '173-4 Sector-7, Rohini, New Delhi - 110085', 5, 3, 2, 3945, 3.2, 'https://kanishk014.github.io/clakk/', 'Coming Soon', 'Apartment', 1980, 23, 6, 2, 'Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is', 'a corner room with double windows. The kitchen has fabulous space, new appliances, and a laundry area. Other features include rich herringbone floors, crown moldings and coffered ceilings throughout the apartment. 1049 5th Avenue is a classic pre-war building located across from Central Park, the reservoir and The Metropolitan Museum. Elegant lobby and 24 hours doorman. This is a pet-friendly building.\r\n\r\nConveniently located close to several trendy fitness centers like Equinox, New York Sports Clubs & Crunch. Fine restaurants around the area, as well as top-ranked schools. 2% Flip tax paid by buyer to the condominium. Building just put an assessment for 18 months of approximately $500 per month.', 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Sarita Kumari', 'saritakumari@doorstour.com', '+91 99999-99', 5, 1, 2, 1, 1),
(2, 'Dwarka', '173-4 Sector-7, Dwarka, New Delhi - 110085', 5, 3, 2, 5046, 8.9, 'https://kanishk014.github.io/clakk/', 'Coming Soon', 'Flat', 2009, 16, 7, 2, 'Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is', 'a corner room with double windows. The kitchen has fabulous space, new appliances, and a laundry area. Other features include rich herringbone floors, crown moldings and coffered ceilings throughout the apartment. 1049 5th Avenue is a classic pre-war building located across from Central Park, the reservoir and The Metropolitan Museum. Elegant lobby and 24 hours doorman. This is a pet-friendly building.\r\n\r\nConveniently located close to several trendy fitness centers like Equinox, New York Sports Clubs & Crunch. Fine restaurants around the area, as well as top-ranked schools. 2% Flip tax paid by buyer to the condominium. Building just put an assessment for 18 months of approximately $500 per month.', 1, 1, 1, 1, 0, 1, 1, 1, 0, 'Sarita Kumari', 'saritakumari@doorstour.com', '+91 99999-99', 3, 1, 2, 5, 2),
(3, 'Karol Bagh', '173-4 Sector-7, Karol Bagh, New Delhi - 110085', 6, 4, 2, 4500, 6.2, 'https://kanishk014.github.io/clakk/', 'Coming Soon', 'Plot', 1998, 1, 7, 1, 'Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is', 'a corner room with double windows. The kitchen has fabulous space, new appliances, and a laundry area. Other features include rich herringbone floors, crown moldings and coffered ceilings throughout the apartment. 1049 5th Avenue is a classic pre-war building located across from Central Park, the reservoir and The Metropolitan Museum. Elegant lobby and 24 hours doorman. This is a pet-friendly building.\r\n\r\nConveniently located close to several trendy fitness centers like Equinox, New York Sports Clubs & Crunch. Fine restaurants around the area, as well as top-ranked schools. 2% Flip tax paid by buyer to the condominium. Building just put an assessment for 18 months of approximately $500 per month.', 1, 1, 1, 1, 1, 1, 0, 0, 0, 'Sarita Kumari', 'saritakumari@doorstour.com', '+91 99999-99', 4, 3, 5, 4, 1),
(4, 'Karkardooma', '173-4 Sector-7, Karkardooma, New Delhi - 110085', 3, 2, 1, 2100, 2.4, 'https://kanishk014.github.io/clakk/', 'Coming Soon', 'Apartment', 2016, 15, 5, 1, 'Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is', 'a corner room with double windows. The kitchen has fabulous space, new appliances, and a laundry area. Other features include rich herringbone floors, crown moldings and coffered ceilings throughout the apartment. 1049 5th Avenue is a classic pre-war building located across from Central Park, the reservoir and The Metropolitan Museum. Elegant lobby and 24 hours doorman. This is a pet-friendly building.\r\n\r\nConveniently located close to several trendy fitness centers like Equinox, New York Sports Clubs & Crunch. Fine restaurants around the area, as well as top-ranked schools. 2% Flip tax paid by buyer to the condominium. Building just put an assessment for 18 months of approximately $500 per month.', 1, 0, 1, 0, 1, 1, 0, 1, 1, 'Sarita Kumari', 'saritakumari@doorstour.com', '+91 99999-99', 4, 2, 4, 3, 3),
(5, 'Ashok Vihar', '173-4 Sector-7, Ashok Vihar, New Delhi - 110085', 5, 3, 2, 3400, 4.8, 'https://kanishk014.github.io/clakk/', 'Coming Soon', 'Apartment', 2018, 15, 7, 1, 'Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is', 'a corner room with double windows. The kitchen has fabulous space, new appliances, and a laundry area. Other features include rich herringbone floors, crown moldings and coffered ceilings throughout the apartment. 1049 5th Avenue is a classic pre-war building located across from Central Park, the reservoir and The Metropolitan Museum. Elegant lobby and 24 hours doorman. This is a pet-friendly building.\r\n\r\nConveniently located close to several trendy fitness centers like Equinox, New York Sports Clubs & Crunch. Fine restaurants around the area, as well as top-ranked schools. 2% Flip tax paid by buyer to the condominium. Building just put an assessment for 18 months of approximately $500 per month.', 1, 0, 1, 0, 0, 1, 1, 1, 1, 'Sarita Kumari', 'saritakumari@doorstour.com', '+91 99999-99999', 2, 1, 6, 1, 1),
(6, 'Janakpuri', '173-4 Sector-7, Janakpuri, New Delhi - 110085', 3, 2, 1, 1500, 1.2, 'https://kanishk014.github.io/clakk/', 'Coming Soon', 'Flat', 2015, 3, 5, 1, 'Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is', 'a corner room with double windows. The kitchen has fabulous space, new appliances, and a laundry area. Other features include rich herringbone floors, crown moldings and coffered ceilings throughout the apartment. 1049 5th Avenue is a classic pre-war building located across from Central Park, the reservoir and The Metropolitan Museum. Elegant lobby and 24 hours doorman. This is a pet-friendly building.\r\n\r\nConveniently located close to several trendy fitness centers like Equinox, New York Sports Clubs & Crunch. Fine restaurants around the area, as well as top-ranked schools. 2% Flip tax paid by buyer to the condominium. Building just put an assessment for 18 months of approximately $500 per month.', 1, 1, 1, 1, 0, 1, 0, 1, 0, 'Sarita Kumari', 'saritakumari@doorstour.com', '+91 99999-99999', 6, 3, 3, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `template2`
--

CREATE TABLE `template2` (
  `id` int(11) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `detailCategory` varchar(200) NOT NULL,
  `detailSummary` varchar(200) NOT NULL,
  `detailDate` date NOT NULL,
  `photo1` varchar(100) NOT NULL,
  `P1` varchar(1000) NOT NULL,
  `P2` varchar(1000) NOT NULL,
  `video_img` varchar(500) NOT NULL,
  `video_link` varchar(500) NOT NULL,
  `P3` varchar(1000) NOT NULL,
  `P4` varchar(1900) NOT NULL,
  `P5` varchar(1900) NOT NULL,
  `quote` varchar(1000) NOT NULL,
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `finalP` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template2`
--

INSERT INTO `template2` (`id`, `detail`, `detailCategory`, `detailSummary`, `detailDate`, `photo1`, `P1`, `P2`, `video_img`, `video_link`, `P3`, `P4`, `P5`, `quote`, `img1`, `img2`, `finalP`) VALUES
(1, 'Real Estate', 'Future of Real Estate post COVID-19', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a', '2020-10-21', 'images/post-covid-1.png', 'COVID pandemic has shaken our entire world not just         economies, businesses but also the society. Much has         changed since the Coronavirus hit the world in December         2019. Amid countries applying numerous measures to         contain the pandemic, businesses came to a halt across the         world, forcing monetary agencies to slash growth forecasts         for the global economy, recent report from MOODY’s,         GOLDMAN SACHS, IMF show the same result .', 'While the ill effects of the pandemic are already being felt         across world, varying opinions are emerging on COVID-19’s         impact on the real estate sector. A more shocking fact         emerges research agencies are predicting a near-term halt         in growth of real estate in India. PropTiger.com data show         housing sales in India’s eight major cities declined by 66%         in the period between July-September 2020.         The lockdown, brought most economic activity in the         country to a halt, it has hurt all sectors, including real         estate. The inauspicious impact of the Coronavirus is visible         on housing sales in the last quarter of the last fiscal because         March is usually one of the biggest month for sales,” says         Dhruv Agarwala, group CEO, Housing.com,         Makaan.com and PropTiger.com.', 'images/hero-prop-12.jpg', 'https://www.youtube.com/embed/4Wee4LASqvE?start=23', 'But central government is trying hard to give some         relaxation to this sector, The Centre announced higher tax         breaks and lower interest rates on home loans to make         purchases more lucrative, apart from setting up an Rs         25,000-crore stress fund for stuck projects.         The demand halt in the residential segment has already         curtailed housing sales, project launches and price growth         in India’s residential realty sector, which has been under         the pressure caused by big regulatory changes, such as the         Real Estate Regulatory Authority (RERA), the Goods and         Services Tax (GST), demonetization and the benami         property law.', 'Companies not only in India but worldwide have provided         work from home facility to their employees which has led         to decrease in office demand that has further led to         downfall in revenue generation. Majority of malls were         empty during look down and even now many of them have         little crowd that led to less investment in new property,         new ventures. Another sad news for real estate business is         that now many home buyers have also post poned the         buying of new houses because of majorly two factors - 1) Chances of Getting infected from virus.         2)Uncertainty of their own financial condition         3) Fear of losing their jobs', 'Delay in supply of construction material is another         significant reason for downfall of real estate sector many of         the workers have returned to their native places in month         of may June. Due to scarcity of cheap labor it has become         very difficult to operate functions under same price.         But covid has changed many things for sure in our realestate business, like- With the forced lockdown and         continued Work from Home (WFH) and online schooling,         people are now eyeing larger homes – even if they have to         move to the peripheries to fit their budgets. There’s high         demand for 3 BHK. The increase in demand for big         houses in not a bad sign for this sector but now the         housing plan needs a change.         It has been known fact that the sector, especially         residential segment, has already been struggling with         project delays, regulatory changes for last few years. And         How the coronavirus will affect it, is a new question. There is a belief that the residential market would be affected         more as the problem of labor, delays, finance and sale will         only get worst. The estimate is that people will lose jobs         and would not take a long-term loan when they are not         confident about the future.         The developers may not be able to sustain the present         debts and would go bankrupt if the government does not         come out with a relief sooner or later. Even labor would         not come back to big towns as they will feel comparatively         safer in the villages, which might end up increasing production cost. With labour unavailability, the costs of         building homes would go up due to increase in cost of         labour and the low supply will result in increase in cost of         materials .', '\" The impact of the novel Coronavirus on Indian real estate has been unprecedented. The Nationwide house price index for May showed that prices fell 1.7% from the previous month, the largest decline for 11 years. \"', 'images/post-covid-2.png', 'images/post-covid-3.png', 'Dispite all our fears and less expectations, real estate in the         post-covid world will most likely survive and eventually         thrive as an asset sector, though it will have mny changes         and many different things. Decentralization, redistribution         and restructuring will be the major themes of this mega         transformation which is also the need of time. The good         news for India is that in the long-term housing demand         trend remains constant due to a young population which         continues to enter the workforce in large numbers.         In the last few years, there has been a huge shift in mindset         among first-time homebuyers who began to favour a rental         home, different from the established choice of Indians to         buy homes. there will be increasing preference to move         away from the polluted, congested parts of the city. Cities         like Bengaluru, supported by metro rail connectivity, are         already witnessing a shift toward the suburbs. In those sub         urban area there will be a huge demand of housing and that         will help real estate to flourish again.         With better connecting network, satellite towns will emerge and we saw that in case of National Capital Region, this could get  replicated in other metros like Mumbai , Bengaluru this will get a huge jump for real estate market.'),
(2, 'Virtual Reality', 'How Virtual Reality is transforming Real Estate Industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a', '2020-10-22', 'images/virtual-real-estate-1.jpg', 'The real estate industry has hyped up after the assistance of the virtual reality, which has\r\n        helped the buyer and the seller both in case of visiting the property and to connect both the\r\n        parties who are geographically far apart.\r\n        Virtual reality is the new advanced technology of making it possible to travel from place to place\r\n        even when one is still at a place. The main idea of virtual reality is to give the customer an HD\r\n        (HighDefinition) experience of visiting a place without even moving from his place.\r\n        Virtual reality has helped many industries to bloom in days with better experience, transforming\r\n        the old and traditional way of business.', 'With the help of virtual reality, it has become possible for the buyers to visit the property or have\r\n        a look at how the estate might look making it easy for not just the buyers but also for the sellers\r\n        / real estate agents to show the house property at their convenience.', 'images/hero-prop-12.jpg', 'https://www.youtube.com/embed/4Wee4LASqvE?start=23', 'The old traditional method of buying and selling of property used to happen when the buyer and\r\n        seller meets in person and visits the property.\r\n        The process includes huge formalities from searching from ways to actually visiting the place.\r\n        The buyer used to decide the area to shift in and then they contact the local real estate agents\r\n        of the area and then take priop approval of the property seller for visit. The seller needs to be\r\n        available for visit and accordingly the buyer and agents had to decide for the same.\r\n        Also the agents and buyer needed to keep knowledge of the availability of keys of the flat /\r\n        property, so as to avoid inconvenience.', 'How Virtual reality could help the real estate industry / Why one prefers VR over\r\n        traditional method :\r\n        With the help of VR it has helped to save time, energy and money of both the parties.\r\n        ● Saves time : It has become easy for the buyer and seller to not search for directions to\r\n        property.\r\n        ● Saves Money : travelling cost of both the parties could be saved with the help of VR\r\n        experience.\r\n        ● Saves energy : So as it has become easy to visit the property sitting at one\'s home itself\r\n        at one\'s convenience it helps save enery.\r\n        Types of Virtual Tours :\r\n\r\nThere are currently 2 types of virtual tours\r\n● Interactive Visits : This kind of experience is for as to when the buyer can actively\r\ninteract with all the areas of the property as this kind of visit helps one to look and\r\nexperience in detail all the areas which the buyer wishes to visit. In short Interactive type\r\nof visit helps the buyer to control his experience of visit.\r\n● Guided Visits : This kind of tours usually exists for as a video format with a 3d effect\r\nwith it so as the buyer can visit all the recorded portions of the property.\r\n\r\nWhat is Architectural Visualization ?\r\n\r\nThere are a lot many properties / building still working in progress of construction. It becomes\r\ndifficult for the seller / builder to showcase their \'Not yet developed\' project which is still under\r\nconstruction, in this case it becomes very expensive if Architectural Visualization wouldn\'t\r\nhave been made available.\r\nArchitectural Visualization is really cheap and has made it easy and possible for the seller to\r\npresent their work / project with better visualization effect. This way the client gets a proper view\r\nof what is offered to them.', 'What is Virtual Commerce ?\r\n\r\n        As discussed above it proves that everything is possible from visiting places by just sitting at\r\n        one\'s home. A person from a foreign country could visit any property staying at home.\r\n        (Example, a person from Dubai, could visit a property in India with the help of VR assistance)\r\n        Now imagine visiting a property, which has furniture in it, you like the property but are not\r\n        satisfied with the interior design, what could be possible here?\r\n        You can simply go to a virtual store and replace the furniture or designs you are not satisfied\r\n        with, Yes it\'s possible.\r\n        This is the idea of Virtual Commerce.\r\n        This helps the client / buyer to visit the property and design the property just by visiting the\r\n        virtual store and get a perfect view of how actually your property will look like when designed by\r\n        self.', 'This is probably the biggest benefit – virtual reality solutions save time for both clients and realtors. Thanks to VR, there’s no need to travel from one property to another and sit in traffic jams.', 'images/virtual-real-estate-2.png', 'images/virtual-real-estate-3.png', 'Virtual Reality has already started evolution in the real estate industry making lives of people easier to visualize how their home/property would look like without stepping out of their homes or actually visiting it.'),
(3, 'Interior Design', 'Stylish Modern Ranch Exuding a Welcoming Feel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a', '2019-04-09', 'images/post-6.jpg', 'Most designers will tell you that, as much as we all love to         watch home design shows, their prevalence has done them a         bit of a disservice. Thanks to TV magic, the designers on         those shows pull off projects with tight deadlines and         shoestring budgets that would never fly in the real world.', 'Of course, every project is different. The best way to get a         handle on an anticipated budget and duration is by asking         potential designers for this information upfront. Don’t be         afraid to reach out to more than one to get a realistic         picture of what to expect.', 'images/hero-prop-12.jpg', 'https://www.youtube.com/embed/4Wee4LASqvE?start=23', 'Not all designers are created equal. Like all of us, each         designer has his or her own unique personal tastes, quirks         and business practices. To make sure your project is a         success, it’s important that you and your designer are on         the same page with a lot of these details. You may need to         interview a few before you find someone who’s the right fit.', 'In the design world, this interview is called a         consultation. It can be an in-person meeting or held over         the phone, and it can be paid or unpaid. You can use this         time to ask to see samples of the designer’s work, learn         more about their process, and ask about business practices,         such as their preferred methods for communication and         billing.', 'You can also use this time to let the designer get to know         you. Feel free to bring in a few photos or items you intend         to use for design inspiration. Let the designer know about         your specific quirks and personal preferences. By the end of         the meeting, you should have a good sense of whether the two         of you will work well together.', 'It is a long established fact that a reader will be         distracted by the readable content of a page when looking at         its layout.', 'images/hero-prop-3.jpg', 'images/hero-prop-12.jpg', 'For those who have never hired an interior designer before,         the idea of doing so can feel out of reach, but it doesn’t         need to be. We’ve created a first-timer’s guide to working         with an interior designer to help you take the plunge. Use         the advice in this post to make an informed decision as to         whether hiring professional help is the right choice for         you.'),
(4, 'Interior Design', 'What to Expect When Working with an Interior Designer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a', '2019-04-09', 'images/post-5.jpg', 'Most designers will tell you that, as much as we all love to         watch home design shows, their prevalence has done them a         bit of a disservice. Thanks to TV magic, the designers on         those shows pull off projects with tight deadlines and         shoestring budgets that would never fly in the real world.', 'Of course, every project is different. The best way to get a         handle on an anticipated budget and duration is by asking         potential designers for this information upfront. Don’t be         afraid to reach out to more than one to get a realistic         picture of what to expect.', 'images/hero-prop-12.jpg', 'https://www.youtube.com/embed/4Wee4LASqvE?start=23', 'Not all designers are created equal. Like all of us, each         designer has his or her own unique personal tastes, quirks         and business practices. To make sure your project is a         success, it’s important that you and your designer are on         the same page with a lot of these details. You may need to         interview a few before you find someone who’s the right fit.', 'In the design world, this interview is called a         consultation. It can be an in-person meeting or held over         the phone, and it can be paid or unpaid. You can use this         time to ask to see samples of the designer’s work, learn         more about their process, and ask about business practices,         such as their preferred methods for communication and         billing.', 'You can also use this time to let the designer get to know         you. Feel free to bring in a few photos or items you intend         to use for design inspiration. Let the designer know about         your specific quirks and personal preferences. By the end of         the meeting, you should have a good sense of whether the two         of you will work well together.', 'It is a long established fact that a reader will be         distracted by the readable content of a page when looking at         its layout.', 'images/hero-prop-4.jpg', 'images/hero-prop-12.jpg', 'For those who have never hired an interior designer before,         the idea of doing so can feel out of reach, but it doesn’t         need to be. We’ve created a first-timer’s guide to working         with an interior designer to help you take the plunge. Use         the advice in this post to make an informed decision as to         whether hiring professional help is the right choice for         you.'),
(5, 'Architecture', 'Private Contemporary Home Balancing Openness', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a', '2019-04-09', 'images/post-4.jpg', 'Most designers will tell you that, as much as we all love to         watch home design shows, their prevalence has done them a         bit of a disservice. Thanks to TV magic, the designers on         those shows pull off projects with tight deadlines and         shoestring budgets that would never fly in the real world.', 'Of course, every project is different. The best way to get a         handle on an anticipated budget and duration is by asking         potential designers for this information upfront. Don’t be         afraid to reach out to more than one to get a realistic         picture of what to expect.', 'images/hero-prop-12.jpg', 'https://www.youtube.com/embed/4Wee4LASqvE?start=23', 'Not all designers are created equal. Like all of us, each         designer has his or her own unique personal tastes, quirks         and business practices. To make sure your project is a         success, it’s important that you and your designer are on         the same page with a lot of these details. You may need to         interview a few before you find someone who’s the right fit.', 'In the design world, this interview is called a         consultation. It can be an in-person meeting or held over         the phone, and it can be paid or unpaid. You can use this         time to ask to see samples of the designer’s work, learn         more about their process, and ask about business practices,         such as their preferred methods for communication and         billing', 'You can also use this time to let the designer get to know         you. Feel free to bring in a few photos or items you intend         to use for design inspiration. Let the designer know about         your specific quirks and personal preferences. By the end of         the meeting, you should have a good sense of whether the two         of you will work well together.', 'It is a long established fact that a reader will be         distracted by the readable content of a page when looking at         its layout.', 'images/hero-prop-3.jpg', 'images/hero-prop-9.jpg', 'For those who have never hired an interior designer before,         the idea of doing so can feel out of reach, but it doesn’t         need to be. We’ve created a first-timer’s guide to working         with an interior designer to help you take the plunge. Use         the advice in this post to make an informed decision as to         whether hiring professional help is the right choice for         you.'),
(6, 'Interior Design', 'Stylish Modern Ranch Exuding a Welcoming Feel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a', '2019-04-09', 'images/single-post-fig.jpg', 'Most designers will tell you that, as much as we all love to         watch home design shows, their prevalence has done them a         bit of a disservice. Thanks to TV magic, the designers on         those shows pull off projects with tight deadlines and         shoestring budgets that would never fly in the real world.', 'Of course, every project is different. The best way to get a         handle on an anticipated budget and duration is by asking         potential designers for this information upfront. Don’t be         afraid to reach out to more than one to get a realistic         picture of what to expect.', 'images/hero-prop-12.jpg', 'https://www.youtube.com/embed/4Wee4LASqvE?start=23', 'Not all designers are created equal. Like all of us, each         designer has his or her own unique personal tastes, quirks         and business practices. To make sure your project is a         success, it’s important that you and your designer are on         the same page with a lot of these details. You may need to         interview a few before you find someone who’s the right fit.', 'In the design world, this interview is called a         consultation. It can be an in-person meeting or held over         the phone, and it can be paid or unpaid. You can use this         time to ask to see samples of the designer’s work, learn         more about their process, and ask about business practices,         such as their preferred methods for communication and         billing.', 'You can also use this time to let the designer get to know         you. Feel free to bring in a few photos or items you intend         to use for design inspiration. Let the designer know about         your specific quirks and personal preferences. By the end of         the meeting, you should have a good sense of whether the two         of you will work well together.', 'It is a long established fact that a reader will be         distracted by the readable content of a page when looking at         its layout.', 'images/hero-prop-3.jpg', 'images/hero-prop-10.jpg', 'For those who have never hired an interior designer before,         the idea of doing so can feel out of reach, but it doesn’t         need to be. We’ve created a first-timer’s guide to working         with an interior designer to help you take the plunge. Use         the advice in this post to make an informed decision as to         whether hiring professional help is the right choice for         you.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `avatar` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `session` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template1`
--
ALTER TABLE `template1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template2`
--
ALTER TABLE `template2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `template1`
--
ALTER TABLE `template1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `template2`
--
ALTER TABLE `template2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
