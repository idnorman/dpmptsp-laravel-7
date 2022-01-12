-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2022 at 12:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpmptsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_short` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `nama`, `nama_short`, `deskripsi`, `alamat`, `telepon`, `whatsapp`, `instagram`, `youtube`, `facebook`, `created_at`, `updated_at`) VALUES
(1, 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu', 'DPMPTSP', 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP) merupakan penyelenggara pelayanan terpadu satu pintu (one stop service) yang melaksanakan berbagai urusan pemerintah daerah kota XYZ dalam bidang pelayanan Perizinan dan non-Perizinan.', 'Jl. Jalan, Kota XYZ', '0843423423', '0843242342343', 'https://www.instagram.com/', 'https://www.youtube.com/channel/', 'https://www.facebook.com/', NULL, '2020-12-19 07:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subjek` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '["10"]',
  `penulis` bigint(20) DEFAULT NULL,
  `is_publish` enum('ya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` enum('ya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'tidak',
  `is_pinned` enum('ya','tidak') COLLATE utf8mb4_unicode_ci DEFAULT 'tidak',
  `accessed` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `slug`, `deskripsi`, `subjek`, `thumbnail`, `kategori`, `penulis`, `is_publish`, `is_featured`, `is_pinned`, `accessed`, `created_at`, `updated_at`) VALUES
(11, 'Tips To Choose A Good DVD Maker Software Program The Same Is True About DVDs', 'tips-to-choose-a-good-dvd-maker-software-program-the-same-is-true-about-dvds', 'We know that technological advancements make things obsolete at some point in time. According to the rule of evolution, the fittest survives in the end. The same is true about DVDs.', '<p>We know that technological advancements make things obsolete at some point in time. According to the rule of evolution, the fittest survives in the end. The same is true about DVDs. They will disappear sooner or later. Another reason DVDs are not going to disappear anytime soon is because people will continue to use DVDs for years to come. The thing is that many people still prefer homemade DVDs. If you are one of them, we suggest that you get a good DVD maker. Let&#39;s find out more.</p>\r\n\r\n<p>Today, most people record videos on their mobile phones and then burn them on their DVDs. The credit goes to mobile phones that come with high-quality cameras. After these videos are burnt onto DVDs, they are ready to be shared with family and relatives. If you want to put these videos on DVDs, you need a piece of software. Given below are some things that you should keep in mind before choosing one.</p>\r\n\r\n<p><strong>File Format Support</strong></p>\r\n\r\n<p>First of all, you need to consider the import support. If you have iPhone, this device will record videos in MOV format. On the other hand, android smartphones record and save videos in MP4 format. Therefore, we suggest that you choose a piece of software that supports both of these video formats.</p>\r\n\r\n<p>The good news is that most of the DVD maker software programs support the MP4 format. What you need to be worried about is the MOV format. Apart from this, make sure that your desired software program supports other popular formats, such as VOB, M4V, FLV, 3GP, WMA, WMV, TS, M2TS, AVI, and MKV.<br />\r\nArticle Source: http://EzineArticles.com/10552371</p>', '626310.jpg-1641881231.jpg', '[\"14\",\"15\"]', 1, 'ya', 'ya', 'tidak', 11, '2022-01-11 06:07:19', '2022-01-11 12:20:21'),
(12, 'Brainstorming The Ideas for Influencing Your Mobile App Audience', 'brainstorming-the-ideas-for-influencing-your-mobile-app-audience', 'Once the app is downloaded, you have little time to take a sigh of relief, and then again start focusing on making things easier for the them till their goal is achieved.', '<p>Once the app is downloaded, you have little time to take a sigh of relief, and then again start focusing on making things easier for the them till their goal is achieved.</p>\r\n\r\n<p>According to the AppsFlyer, an app marketing company, the global uninstall rate for apps after 30 days is 28%. Entertainment apps are most frequently deleted, whereas apps based on Finance is least frequently deleted. No matter which app category you belong to, your strategy should be to remain in the mobile phones of users for a long time, and not just sit around but to fulfill your purpose as well.</p>\r\n\r\n<p>If we analyze the encounters of users with an app step by step, it can help us unveil the critical factors that influence mobile app audiences, so that we can work upon those and achieve our purpose. Here are the details:</p>\r\n\r\n<p>Step1. Finding Your App in Appstore</p>\r\n\r\n<p>For this, we have to first find out what exactly users type to search an app. Based on a research, it has been found that 47% app users on iOS confirmed that they found the app through the App Store&#39;s search engine and 53% app users on Android confirmed the same.</p>\r\n\r\n<p>What have been their search queries? Interestingly, as the per the data provided by the TUNE research, 86% of the top 100 keywords were brands.With little scope for non-branded categories, most of the keywords were either of games of utility apps. Common keywords in the non branded category are: games, free games, VPN, calculator, music, photo editor, and weather.</p>\r\n\r\n<p>Leaving brands aside, if we analyze the user-type of a Non-branded category, we will get two types of users:</p>\r\n\r\n<p>1. Users are informed, and they know what they are search</p>\r\n\r\n<p>2. Users are exploring possibilities, have no precise information in mind.</p>\r\n\r\n<p>If you are a mobile app development company, targeting non-branded users, then your efforts must be directed to creating apps that compel these two types of users. To do so, we have to analyze once they are on an app store, what keywords they use to search. Regina Leuwer, with expertise in marketing &amp; communications, bring some light to the subject. She reached out Sebastian Knopp, creator of app store search intelligence tool appkeywords, who shared with her the data of unique trending search phrases. And according to that data, in 2017, there were around 2,455 unique search phrases trending in the US.</p>\r\n\r\n<p>Now, if we study these data to get information, we will find that name of the app is critical to attract the attention of the users.</p>\r\n\r\n<p>If your app belongs to non-branded category, then make sure your app name is similar to the common search queries but also unique in comparison with your competitors. So that when your app name is flashed, they click it on to it, finding it purposeful and compelling both.</p>\r\n\r\n<p>Step 2. Installation</p>\r\n\r\n<p>Remember your users are on mobile devices has limited resources, from battery to storage and RAM to Internet. Everything is limited. So better create an application that is easy to download or say get downloaded with 5 minutes. One critical advice here:</p>\r\n\r\n<p>1. Keep the application file size small.</p>\r\n\r\n<p>If you are a developer, use APK Analyser to find out which part of the application is consuming maximum space. You can also reduce classes.dex file and res folder that contains images, raw files, and XML.</p>\r\n\r\n<p>Step 3. Onboarding</p>\r\n\r\n<p>After the user has successfully downloaded your mobile application, don&#39;t leave anything on assumptions. Guide them properly. This you can do through an onboarding process, where users can learn the key functionality and where to begin with the mobile app. Below are the 3 things you need to keep in your mind when creating an onboarding process for your users.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Short and Crisp: The entire guidance of features and functions should be completed within few seconds, with easy options loud and clear option to skip.</p>\r\n	</li>\r\n	<li>\r\n	<p>Precise Information: Don&#39;t introduce them to the app. They already know what they have downloaded. The objective to inform about the key functions and features.</p>\r\n	</li>\r\n	<li>\r\n	<p>Allow Users to Skip: Let the tech-savvy users skip the intro. Your app is to meet their requirement and not to have a friendly session.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Step 4. Purpose and UI</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Here, the stage is set for your app and it is the golden chance for you to impress your users. What is needed here is the collaboration between purpose and UI of the app. It totally depends on the problem-solving capability and ease of use of the mobile app. Interface design plays the critical role, allowing the users to access features of the apps easily and quickly to perform the task for what they have downloaded the app. When it comes to interface design, make sure that the design is interactive and task-oriented. Here are some factors that you must take care off while creating mobile app interface:</p>\r\n\r\n<p>1. Usability: The Mobile phone is an epitome of convenience and if your users find it difficult to use your app, then there is no way there are going to make the space for it in their mobile phones. From screen size to the color of the app, there are many factors that are equally critical and need attention.</p>\r\n\r\n<p>2. Intuitive: To create an intuitive User Interface, you have to read the mind of the users, and develop a model based on that. The next should be precise, clear and &#39;obvious&#39; in an interface.</p>\r\n\r\n<p>3. Availability: Key features should be hidden in the drop down menu or even if so, it should be obvious for the user to look into the drop-down. An intricate work of design and research is required to make essential features available for the customers and they don&#39;t need to navigate here and there.</p>\r\n\r\n<p>If you need more help with the user-interface and innovative ideas for a mobile app, write to me webmaster@finoit.com and I promise to get back to you with interesting mobile app designs.</p>\r\n\r\n<p><br />\r\n<br />\r\nArticle Source: http://EzineArticles.com/10002056</p>', '626311.jpg-1641882148.jpg', '[\"15\",\"16\"]', 1, 'ya', 'ya', 'tidak', 3, '2022-01-11 06:22:36', '2022-01-11 09:54:19'),
(13, 'Image Hosting Vs Image Sharing: Things You Need to Know', 'image-hosting-vs-image-sharing-things-you-need-to-know', 'On an image hosting website, when you upload your desired images, you will have an embedded link that you can put on different platforms, such as online marketplaces, blogs, websites, and forums.', '<p>Nowadays, image hosting websites are quite popular among individuals and business owners. In other words, both personal and professional users check out these websites on a daily basis for sharing their personal or business photos with their friends and clients. Before you choose a platform, we suggest that you consider some of the essential features first. If you are new to this world, you may be wondering if there is a difference between image sharing and image hosting. Given below are some of the points that can help you understand the difference between the two terms. Read on to find out more.</p>\r\n\r\n<p>Image Hosting</p>\r\n\r\n<p>On an image hosting website, when you upload your desired images, you will have an embedded link that you can put on different platforms, such as online marketplaces, blogs, websites, and forums. All you need to do is make a few clicks using your mouse and copy and paste the links. So, it can save you plenty of time and effort no matter how many times you have to repeat the process.</p>\r\n\r\n<p>Another great benefit of these platforms is that your desired photos can be shared across a wide network. You don&#39;t need to put all of the load on your own servers. So, it can reduce the load on your in-house servers significantly.</p>\r\n\r\n<p>If you host your images on these servers, you will have peace of mind that your images will be safe and secure. Even if your blog or website goes down for some reason, you can still get your photos back in a few minutes. So, there will be no loss of data if you are going to use these platforms.</p>\r\n\r\n<p>Sharing Images</p>\r\n\r\n<p>Unlike image hosting, sharing images is a different process. In this process, you can share your photos and precious memories with your friends and family members through different social media platforms. If your photos get deleted on this platform, you will have a headache. On the other hand, image hosting websites don&#39;t lose data no matter what.</p>\r\n\r\n<p>With the sharing feature, you can share your photos with a few clicks. You don&#39;t need to switch back and forth on different social media websites. As a matter of fact, you can check out the very first images you uploaded and shared on your profiles.</p>\r\n\r\n<p>If any of these websites go down for some reason, you have the ability to get them back once again. As far as original images are concerned, there will be no problem with quality. And they won&#39;t even be compressed unlike Facebook or other platforms out there.</p>\r\n\r\n<p>The takeaway</p>\r\n\r\n<p>So, you can see that there is a huge difference between sharing images and hosting images. If you are a professional user, you have no choice but use and image hosting platforms. After all, you don&#39;t want to lose your valuable business photos and other staff. So, we suggest that you look for a good website that allows you to host your images. If you have tons of images to host, we suggest that you consider a paid plan.</p>\r\n\r\n<p><br />\r\n<br />\r\nArticle Source: http://EzineArticles.com/10537263</p>', '626312.jpg-1641882715.jpg', '[\"16\"]', 1, 'ya', 'tidak', 'tidak', 0, '2022-01-11 06:32:00', '2022-01-11 06:32:00'),
(14, 'What Digital Marketing Expert Says About Digital Marketing Future', 'what-digital-marketing-expert-says-about-digital-marketing-future', 'As fast Internet is actually readily available in budget-friendly prices on portable gadgets, company managers are actually pushed to choose a pro Internet Marketing Company for a successful on-line visibility.', '<p>That is actually an age from material advertising and marketing: Gone are actually the times from universal advertising. A Digital Marketing Company creates the advertising and marketing initiative highlighting the prominent attributes in such a means that they strike the audiences in the fastest feasible opportunity. Given that individuals find lots from relevant information in the kind from company message, this is actually in addition crucial for a Digital Marketing Company to create appealing as well as artistic information. User-specific electronic advertising initiative will definitely create individuals knowledgeable from the simple fact that their tasks are actually being actually tracked through electronic advertising providers.</p>\r\n\r\n<p>This is actually a period from information advertising and marketing: Gone are actually the times from common advertising. As individuals anticipate even more enticing expertise, artistic supervisors possess to invest terrific initiatives on contemplating special information. A Digital Marketing Company develops the advertising and marketing project highlighting the remarkable attributes in such a technique that they strike the visitors in the quickest achievable opportunity.</p>\r\n\r\n<p>As fast Internet is actually readily available in budget-friendly prices on portable gadgets, company managers are actually pushed to choose a pro Internet Marketing Company for a successful on-line visibility.</p>\r\n\r\n<p>Pinpoint aim at advertising will definitely displace whatever: With a boost in individual profiling as well as market segmenting, artistic developers will definitely possess to establish a certain web content that targets to particular target market. Every Internet Marketing Company are going to be actually obliged to examine the consumer actions prior to supplying information.</p>\r\n\r\n<p>A significant boost electronic advertising in the latest years, as well as the exact same fad appears to carry on in the happening years. Depending on to price quotes, firms are going to devote extremely higher on electronic media as reviewed to the standard one. As fast Internet is actually accessible in economical costs on portable gadgets, company managers are actually required to employ a pro Internet Marketing Company for an efficient on the web existence.</p>\r\n\r\n<p>Customers will certainly protest to invasion right into their personal area: This is actually extremely a lot very clear that individual profiling has actually to be actually performed through tracking the individual actions and also task on the Internet. User-specific electronic advertising and marketing project will definitely make folks knowledgeable from the simple fact that their tasks are actually being actually tracked through electronic advertising business. Specialists experience that this will definitely be actually an issue from problem in the happening years.</p>\r\n\r\n<p>Considering that individuals find bunches from info in the kind from brand name texting, this is actually in addition significant for a Digital Marketing Company to build appealing and also artistic web content. Fastest, as well as most intelligent information, could entice lots of eyeballs</p>\r\n\r\n<p><br />\r\n<br />\r\nArticle Source: http://EzineArticles.com/9998048</p>', '626315.jpg-1641882874.jpg', '[\"14\",\"17\"]', 1, 'ya', 'tidak', 'tidak', 8, '2022-01-11 06:34:42', '2022-01-11 12:20:31'),
(15, '[PENGUMUMAN] What Is An Access Control System & What Key Points You Need To Know Before Buying One', 'pengumuman-what-is-an-access-control-system-what-key-points-you-need-to-know-before-buying-one', 'These systems have evolved largely during the recent decades and now a days, the term normally refers to a computer based electronic system in which electronic cards are assigned to the authorized users of an organization to access a specific location.', '<p>An access control system provides you a way to manage and control the access of a passage in to or out of a specific area. Traditional locks which normally come with a brass key can be visualized as basic form of an ACS The primary purpose of such a system is to allow only the authorized person to access a specific area while restricting others who are not allowed to access because of some reason.</p>\r\n\r\n<p>These systems have evolved largely during the recent decades and now a days, the term normally refers to a computer based electronic system in which electronic cards are assigned to the authorized users of an organization to access a specific location. Other means of authentication may include a keypad or thumb print etc. Access control systems are normally installed and operated on building entrances, critical locations inside the building or any other associated area e.g.</p>\r\n\r\n<p>garages, parking lots etc. Access control systems are of critical importance for those organizations which deal with sensitive data or allow the access of very specific persons to their premises. Access control systems are equally beneficial in organizations where you expect a large number of visitors every day and you need to keep the record of each and every visitor. Many levels of access can also be defined if required to restrict a visitor to one specific location and not the other etc.</p>\r\n\r\n<p>A basic card based ACS is comprised of various components including access cards off course, card readers, electric Locks (that serves as the hardware), intelligent controller, an access control software system which is normally a server holding the application access control software. These servers are mostly dedicated for operation and management of ACS.</p>\r\n\r\n<p>An access control system provides you desirable and reliable security however, each organization does not have the same security needs. For instance, an organization may need strict security at one point (for instance server room) but do not need the same security level at another (for instance, lobby or washroom area).Hence, if you are planning to buy an access control system for your organization, keeping a few key points in mind shall be greatly helpful in making the right and economic choice for you. These are as follows:</p>\r\n\r\n<p>1. Security Requirement level: Analyze your organizational or business requirements. Access control systems provide dependable security for your organization&#39;s sensitive areas but each location doesn&#39;t need the same level of security. How many locations are there where you want to use access control system and how much security you need at these locations?</p>\r\n\r\n<p>2. Future needs: Besides full filling your current security requirements, an access control system must also be able to cope with your future business needs. An access control system must be able to support the future expansion in case required</p>\r\n\r\n<p>3. Easy to use: ACS you are going to select must be user friendly and should not involve any complex procedures and processes that might become a headache for your operating staff (may be less technical staff).</p>\r\n\r\n<p>4. User management facility: Is the system reliable enough to handle multiple users simultaneously in an effective manner as per your requirement?</p>\r\n\r\n<p>5. Reporting facility: Is the system capable enough to connect multiple associated sites efficiently and providing you proper reporting facility for a clear insight of what&#39;s going on at a specific location in real time?</p>\r\n\r\n<p>6. Backup and restore options: Is the system providing you an effective backup and restore facility so that you might not lose any critical data?</p>\r\n\r\n<p>7. Compatibility issues: Can you implement changes in the system efficiently? Is the system easy to maintain. Is your vendor offering maintenance services at low or no cost</p>\r\n\r\n<p>8. Support and training: Is the vendor providing you enough training and support material to train the related staff that can be helpful in smooth flow of system.</p>\r\n\r\n<p>If you have decided not to compromise at the security of your organization etc. and have planned to spend some fairly good amount on buying an access control system, then considering the above factors would definitely be helpful in making the right choice to a great extent.</p>\r\n\r\n<p><br />\r\n<br />\r\nArticle Source: http://EzineArticles.com/9995486</p>', '626317.jpg-1641883980.jpg', '[\"15\"]', 1, 'ya', 'tidak', 'ya', 2, '2022-01-11 06:53:07', '2022-01-11 10:07:50'),
(16, '[JADWAL] Jadwal Kantor Aktif Mulai Tahun 2050', 'jadwal-jadwal-kantor-aktif-mulai-tahun-2050', 'sdfsdfs', '<p>bada dsadasd</p>', '626310.jpg-1641884267.jpg', '[\"17\"]', 1, 'ya', 'tidak', 'ya', 1, '2022-01-11 06:57:54', '2022-01-11 10:07:53'),
(17, '[PENGUMUMAN] Daftar persentase kenaikan gaji PNS dan Honorer se-Kabupaten', 'pengumuman-daftar-persentase-kenaikan-gaji-pns-dan-honorer-se-kabupaten', 'sfds', '<p>sfsfsdf</p>', '626311.jpg-1641884391.jpg', '[\"17\"]', 1, 'ya', 'tidak', 'ya', 0, '2022-01-11 06:59:58', '2022-01-11 06:59:58'),
(18, 'Home or Room Decor Ideas Helpful Guide for Non Designers', 'home-or-room-decor-ideas-helpful-guide-for-non-designers', 'Many repurposing projects are within anyone\'s ability, given the proper instruction. Mastering the art of repurposing home décor items will serve you well into the future, too.', '<p>It&#39;s fascinating however individuals very take time in conceptualizing their lounge ornament concepts. creating up ideas that may suit the house is usually a task that the house owners do themselves to form positive the designer gets what they really need, or there ar times that they merely leave all the construct thinking to the designers whom they believe to be capable of doing their jobs! each ways in which have their blessings and drawbacks after all.</p>\r\n\r\n<p>For today, we are going to be showing you a shocking assortment of twenty lounge decor concepts that we tend to hope will stir your brains in regarding obtaining the correct decor concepts you&#39;ll be able to use for your homes! This long list will certainly be associate degree attention disagreeable person since we tend to got the photos that may sure as shooting be a concept&acirc;-&acirc;whether or not you wish it to be stylish, classic, eclectic or perhaps rustic. Take a glance, and enjoy!</p>\r\n\r\n<p>Here we go the list of Top 20 Living Room Decor (2018)<br />\r\nFound collection on decorforless.ca blog.</p>\r\n\r\n<p>Look at the chairs that serve as spare when more seating is needed, or serves as a center table in lieu of an ottoman which is usually an alternate for center tables in chic living rooms!<br />\r\nIt&#39;s can be fun to update your home, whether you add new window treatments or swap out old furniture. Rather than throw away your old d&eacute;cor, though, what about repurposing it?</p>\r\n\r\n<p>Many repurposing projects are within anyone&#39;s ability, given the proper instruction. Mastering the art of repurposing home d&eacute;cor items will serve you well into the future, too.</p>\r\n\r\n<p>Not only does it mean you can have brand-new home d&eacute;cor items on a limited budget, but it also offers a potential extra revenue stream. You could make another $1,000 per month through the hobby of repurposing and selling goods.</p>\r\n\r\n<p>If you don&#39;t have an old door available around the house, you can find one at an antique store or flea market for a few bucks. With a little sandpaper, paint, and vision, you&#39;ll soon have a beautiful headboard to accent your bedroom in a refreshing new way.<br />\r\nRustic, barndoor-style headboards are highly popular, and that has driven up the price of a ready-made item. If you want to make a quick buck or you do something similar for your bed, convert an old door into a headboard.</p>\r\n\r\n<p>Hopefully guys you like this Living Room Interior Design which collected from different places around the world. Also you can found these design on Decor for less.</p>\r\n\r\n<p><br />\r\n<br />\r\nArticle Source: http://EzineArticles.com/9990841</p>', '255974.jpg-1641884698.jpg', '[\"14\"]', 1, 'ya', 'tidak', 'tidak', 1, '2022-01-11 07:05:06', '2022-01-11 11:18:49'),
(19, 'Things to Know Before You Hire a Tree Trimming Service', 'things-to-know-before-you-hire-a-tree-trimming-service', 'Since stump grinding is an extra service, your company may not offer this service unless you pay extra for it. For instance, if they don\'t have a crane, they may not be able to perform the work beyond a specific height.', '<p>If you have a tree next to your house, you need to trim it regularly to prevent the limbs from breaking and falling on your roof. Aside from this, the tree may cause mold growth on the sides of your house if not trimmed properly. During a storm, dead or damaged trees can pose serious risk to your house. Therefore, hiring a tree trimming service is a good idea. Read on to know the things you need to consider before choosing a provider.</p>\r\n\r\n<p><strong>License and credentials</strong></p>\r\n\r\n<p>First of all, you should ensure that the company is licensed. If the employees are not trained, they may end up causing damage to your house or trees. So, this is important to keep in mind.</p>\r\n\r\n<p><strong>Insurance</strong></p>\r\n\r\n<p>Don&#39;t allow a company to work near your house unless it has an insurance policy. This means that the company should have worker&#39;s compensation insurance and liability insurance.</p>\r\n\r\n<p>With liability insurance, you can easily cover the expenses if the employees end up causing damage to your property or home during the tree trimming service.</p>\r\n\r\n<p>Similarly, worker&#39;s compensation insurance offers protection for the employees and you in case the employees get injured during the job. In addition, it will offer protection for you against a lawsuit.</p>\r\n\r\n<p><strong>Referrals</strong></p>\r\n\r\n<p>Before you choose a company, don&#39;t forget to ask for referrals. You can then contact those customers to find out if they were happy with the company&#39;s services. It&#39;s important that you ask for referrals first.</p>\r\n\r\n<p>Keep in mind that inexperienced employees may not be able to work properly. They are more likely to make mistakes that may cause you a loss of thousands of dollars.</p>\r\n\r\n<p><strong>Get an estimate</strong></p>\r\n\r\n<p>Before you sign the contract, make sure you get an estimate. If the service provider shows hesitation while answering your questions about the total cost, look for another provider. Hiring the services of this type of company is not a good idea. They may rip you off.</p>\r\n\r\n<p><strong>Company charges</strong></p>\r\n\r\n<p>Next, you should find out how much you are going to get charged for the services. For instance, find out if they are going to charge you for stump grinding. It&#39;s better if you get a fixed quote for the entire job.</p>\r\n\r\n<p><strong>Equipment type</strong></p>\r\n\r\n<p>Find out about the type of equipment they are going to use for the job. The company should have all the required tools to do the trimming or removing of trees. Let them know what you need to get done. Without the right tools, they can&#39;t do a good job.</p>\r\n\r\n<p><strong>Compare the services</strong></p>\r\n\r\n<p>Since stump grinding is an extra service, your company may not offer this service unless you pay extra for it. For instance, if they don&#39;t have a crane, they may not be able to perform the work beyond a specific height.</p>\r\n\r\n<p><strong>Employee training</strong></p>\r\n\r\n<p>Find out about the background of the company employees. If possible, you may want to hire employees that have at least 5 years of experience doing the tree trimming and other jobs.</p>\r\n\r\n<p>Long story short, you may want to consider these things before hiring a tree trimming service.</p>\r\n\r\n<p><br />\r\n<br />\r\nArticle Source: http://EzineArticles.com/10285741</p>', '626324.jpg-1641884871.jpg', '[\"15\"]', 1, 'ya', 'tidak', 'tidak', 2, '2022-01-11 07:08:14', '2022-01-11 10:04:15'),
(20, 'The Importance of Hiring the Right Company For Your Tree Removal West Chester PA', 'the-importance-of-hiring-the-right-company-for-your-tree-removal-west-chester-pa', 'By taking all of these elements into consideration, you can ensure a smooth tree removal, which will free you of the burdensome liability and worry of an unstable tree.', '<p>Trees that are strong and healthy provide beauty and shade as well as improve air quality and property value. However, trees that develop irreversible health or safety issues are a huge liability. Once a tree&#39;s health or stability is damaged beyond repair, tree removal is the only wise option to ensure against the risk of fallen limbs or the entire tree falling.</p>\r\n\r\n<p>Tree removal is an extremely dangerous, complex process that should only be done by a qualified, insured tree service. Tree removals that have been attempted by homeowners or inexperienced tree companies have resulted in major injury, property damage and even fatality.</p>\r\n\r\n<p>Safe tree removal requires specialized equipment in order to remove a tree systematically so that each branch and section of the tree is taken down in a controlled way. This is essential to making sure every limb and section of the tree reaches the ground without incident. Planning and controlling the movement of limbs on their descent is much harder than it appears. The weight and size of tree limbs make them easy to lose control of while being removed. Because of this, it demands not only specialized equipment, but also detailed training on how to utilize the equipment correctly and how to carry out the entire process without error.. If you attempt to remove a tree yourself or have an inexperienced company remove it, the results could be disastrous or even deadly. The risk you pose to yourself, your property, and neighboring properties by having your tree removed by an unqualified person cannot be overestimated.</p>\r\n\r\n<p>By entrusting a tree removal to a company that has employees who are trained in proper use of safety gear and the necessary machinery and equipment, a tree removal can be a smooth, easy process free of worry and complication. Making sure a tree company is licensed and insured is the first essential step in Choosing the right company for the job. Another important step is to read reviews on the tree company you are considering to learn of other people&#39;s experiences with them. Also,make sure you get a written contract with the details and total cost of the job. Some details to consider are whether or not you would like the stump removed and what degree of clean up is done after the job is complete.</p>\r\n\r\n<p>By taking all of these elements into consideration, you can ensure a smooth tree removal, which will free you of the burdensome liability and worry of an unstable tree.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<br />\r\nArticle Source: http://EzineArticles.com/10081825</p>', '626330.jpg-1641885089.jpg', '[\"16\"]', 1, 'ya', 'tidak', 'tidak', 0, '2022-01-11 07:11:35', '2022-01-11 07:11:35'),
(21, 'Enjoy Those Outdoor Hardscaped Kitchen Adventures Under The Moon And Stars', 'enjoy-those-outdoor-hardscaped-kitchen-adventures-under-the-moon-and-stars', 'Will it be California Gold Slate Flagstones on the floor? Several natural stones create a sizzling ambiance. After all those painful hours working at the office desk, grab some outdoor freshness after getting home. Friends amidst nature would be intensely reviving.', '<p>Basements were the rave earlier with music, dance, food and drink. Quitting the underground odors, why not get out into the open like living it up in resorts? Retreats and theater work so well in the backyard facilities. Get noisy and merry, grill it all up, outdoor kitchens are hot and cool sanctuaries for the modern generation.</p>\r\n\r\n<p><strong>Have lots of fun with Yellow River Granite</strong></p>\r\n\r\n<p>Though men often feel that the spouse rules over the home, let that outdoor kitchen portray what is male. Perhaps Rustic Gold stacked stone panels could combine with Yellow River Granite. The modern built-in fire pit glows amidst the shining blue crystals. Get as wild as you wish outdoors, since the kids won&#39;t wake and drunks will not knock over those dainty fittings and artworks as they stagger around.</p>\r\n\r\n<p><strong>The Ultimate Amusement Area</strong></p>\r\n\r\n<p>Would you fancy Canyon Creek Stacked Stone? Watch dramatic games out there, savor drinks at the bar and make merry across the wild nights. Fans provide relief in the summer and the fireplace is ever waiting during winter. Canyon Creek Stacked Stone makes you feel at home in modern rustic grace with the grays and golds.</p>\r\n\r\n<p><strong>A blissful refuge far away</strong></p>\r\n\r\n<p>Tuscany Beige Travertine Pavers bring the warmth of the interiors. The man cave need not be extensive, a small part of the backyard would suffice. Whether reserved or outgoing by nature, neutral tones in the outdoor kitchen and lounge area feel relaxed. Install rustic wooden beams.</p>\r\n\r\n<p><strong>A Nature Cocoon</strong></p>\r\n\r\n<p>Will it be California Gold Slate Flagstones on the floor? Several natural stones create a sizzling ambiance. After all those painful hours working at the office desk, grab some outdoor freshness after getting home. Friends amidst nature would be intensely reviving.</p>\r\n\r\n<p><strong>Would you cook too?</strong></p>\r\n\r\n<p>Let the outdoor space be large, according to availability. Silver Travertine Pavers in silver, beige and gray create the right setting and would match well with beige cabinets and steel appliances. A cooking contest perhaps, among the family and friends. A steel grill, a large sink and a cooktop are essentials.</p>\r\n\r\n<p>If you fancy a hardscaped kitchen outdoors with facilities for entertainment and partying, why not do it? The right investment it is to live it up at intimate assemblies for many years. You get to do many things out there, besides being revived from the interior tedious life, especially during weekends. Explore the possible designs and options.</p>\r\n\r\n<p><br />\r\n<br />\r\nArticle Source: http://EzineArticles.com/9913772</p>', '626338.jpg-1641885329.jpg', '[\"15\"]', 1, 'ya', 'tidak', 'tidak', 0, '2022-01-11 07:15:39', '2022-01-11 07:15:39'),
(22, '[HIMBAUAN] Diharapkan Agar Seluruh Masyarakat Memakai Masker Saat di Luar Selama Pandemi Ini', 'himbauan-diharapkan-agar-seluruh-masyarakat-memakai-masker-saat-di-luar-selama-pandemi-ini', 'Deskripsi', '<p>dasdasd</p>', '626311.jpg-1641895073.jpg', '[\"16\"]', 3, 'ya', 'tidak', 'ya', 1, '2022-01-11 09:57:59', '2022-01-11 09:59:23'),
(23, '[PENGUMUMAN] Informasi Mengenai Tempat, Waktu dan Aturan dalam pembagian Bantuan Sosial (BANSOS)', 'pengumuman-informasi-mengenai-tempat-waktu-dan-aturan-dalam-pembagian-bantuan-sosial-bansos', 'dfsgsdfgdsf', '<p>dgfdgdfg</p>', '626315.jpg-1641895157.jpg', '[\"15\"]', 3, 'ya', 'tidak', 'ya', 0, '2022-01-11 09:59:23', '2022-01-11 09:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_menu` enum('ya','tidak') COLLATE utf8mb4_unicode_ci DEFAULT 'tidak',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `slug`, `deskripsi`, `is_menu`, `created_at`, `updated_at`) VALUES
(14, 'UMKM', 'umkm', 'Informasi-informasi terkait UMKM baik itu daerah lokal maupun nasional', 'tidak', '2020-12-21 08:09:45', '2020-12-21 13:47:43'),
(15, 'Daerah', 'daerah', 'Informasi seputar daerah-daerah setempat', 'ya', '2020-12-21 10:13:11', '2022-01-11 11:14:29'),
(16, 'Nasional', 'nasional', 'Informasi dalam skala nasional', 'ya', '2020-12-21 10:13:53', '2022-01-11 11:14:29'),
(17, 'Layanan', 'layanan', 'Informasi layanan DPMPTSP pada masyarakat', 'tidak', '2020-12-21 10:28:47', '2020-12-21 10:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Google', 'https://www.google.com', NULL, '2020-12-21 13:47:58'),
(2, 'Facebook', 'facebook.com', NULL, NULL),
(3, 'Youtube', 'http://youtube.com', '2020-12-21 13:23:14', '2020-12-21 13:23:14'),
(4, 'Perizinan', 'http://localhost:8000/perizinan', '2022-01-11 11:13:43', '2022-01-11 11:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_28_115222_create_pegawai_table', 1),
(5, '2020_12_06_005814_add_remember_token_to_pegawai', 2),
(6, '2020_12_12_032056_create_jabatan_table', 3),
(7, '2020_12_12_032502_create_bidang_table', 3),
(8, '2020_12_13_114807_create_category_table', 4),
(9, '2020_12_13_114836_create_articles_table', 4),
(10, '2020_12_18_212633_create_perizinan_table', 5),
(11, '2020_12_19_135625_create_about_table', 6),
(12, '2020_12_20_081844_create_menu_table', 7),
(13, '2020_12_22_191157_create_widget_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `perizinan`
--

CREATE TABLE `perizinan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formulir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perizinan`
--

INSERT INTO `perizinan` (`id`, `nama`, `deskripsi`, `sop`, `formulir`, `created_at`, `updated_at`) VALUES
(3, 'Izin Usaha Dagang Makanan dan Minuman', '<p>Usaha dagang makanan dan minuman merupakan bla bla...</p>', 'sop-formulir-contoh.pdf_11_01_2022_19_0_54.pdf', 'sop-formulir-contoh.pdf_11_01_2022_19_0_54.pdf', '2022-01-11 12:18:54', '2022-01-11 12:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_user` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nip`, `nama`, `username`, `password`, `foto`, `level_user`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, '12345', 'Admin Pro', 'admin', '$2y$10$RWe6tFero8R0537tq519nO5I0L..ETeoXIvJJpkGalSY8n6/ShfWG', 'default.png', 'admin', '2020-12-05 17:00:00', '2020-12-05 17:00:00', NULL),
(3, '11237636732', 'Nama Penulis', 'penulis', '$2y$10$2ZmhQzX5QQGrd7F.xtANLe3qx2MBfBL0T2rpqxy7CxhiRFl8s/jjy', 'Lighthouse.jpg-1608473161.jpg', 'penulis', '2020-12-20 14:06:01', '2020-12-20 14:23:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

CREATE TABLE `widget` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` enum('banner','widget') COLLATE utf8mb4_unicode_ci DEFAULT 'widget',
  `kode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`id`, `nama`, `jenis`, `kode`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Header Banner', 'banner', NULL, 'header-banner-contoh.png_11_01_2022_17_0_10.png', NULL, '2022-01-11 10:18:11'),
(2, 'Hero Banner', 'banner', NULL, 'hero-banner-contoh.png_11_01_2022_17_0_27.png', NULL, '2022-01-11 10:47:27'),
(3, 'Cuaca Ibukota', 'widget', '<a class=\"weatherwidget-io\" href=\"https://forecast7.com/en/n6d21106d85/jakarta/\" data-label_1=\"JAKARTA\" data-label_2=\"Weather\" data-days=\"3\" data-theme=\"weather_one\" >JAKARTA Weather</a>\r\n<script>\r\n!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\'https://weatherwidget.io/js/widget.min.js\';fjs.parentNode.insertBefore(js,fjs);}}(document,\'script\',\'weatherwidget-io-js\');\r\n</script>', NULL, NULL, '2022-01-11 04:12:32'),
(4, 'Hari ini', 'widget', '<!--Dayspedia.com widget--><div class=\"DPDC\" cityid=\"6452\" lang=\"en\" id=\"dayspedia_widget_2b4059d24da28a85\" host=\"https://dayspedia.com\" ampm=\"false\" nightsign=\"true\" sun=\"false\">\r\n\r\n	<style media=\"screen\" id=\"dayspedia_widget_2b4059d24da28a85_style\">\r\n				/*COMMON*/\r\n		.DPDC{display:table;position:relative;box-sizing:border-box;font-size:100.01%;font-style:normal;font-family:Arial;background-position:50% 50%;background-repeat:no-repeat;background-size:cover;overflow:hidden;user-select:none}\r\n		.DPDCh,.DPDCd{width:fit-content;line-height:1.4}\r\n		.DPDCh{margin-bottom:1em}\r\n		.DPDCd{margin-top:.24em}\r\n		.DPDCt{line-height:1}\r\n		.DPDCth,.DPDCtm,.DPDCts{display:inline-block;vertical-align:text-top;white-space:nowrap}\r\n		.DPDCth{min-width:1.15em}\r\n		.DPDCtm,.DPDCts{min-width:1.44em}\r\n		.DPDCtm::before,.DPDCts::before{display:inline-block;content:\':\';vertical-align:middle;margin:-.34em 0 0 -.07em;width:.32em;text-align:center;opacity:.72;filter:alpha(opacity=72)}\r\n		.DPDCt12{display:inline-block;vertical-align:text-top;font-size:40%}\r\n		.DPDCdm::after{content:\' \'}\r\n		.DPDCda::after{content:\', \'}\r\n		.DPDCdt{margin-right:.48em}\r\n		.DPDCtn{display:inline-block;position:relative;width:13px;height:13px;border:2px solid;border-radius:50%;overflow:hidden}\r\n		.DPDCtn>i{display:block;content:\'\';position:absolute;right:33%;top:-5%;width:85%;height:85%;border-radius:50%}\r\n		.DPDCs{margin:.96em 0 0 -3px;font-size:90%;line-height:1;white-space:nowrap}\r\n		.DPDCs sup{padding-left:.24em;font-size:65%}\r\n		.DPDCsl::before,.DPDCsl::after{display:inline-block;opacity:.4}\r\n		.DPDCsl::before{content:\'~\';margin:0 .12em}\r\n		.DPDCsl::after{content:\'~\';margin:0 .24em}\r\n		.DPDCs svg{display:inline-block;vertical-align:bottom;width:1.2em;height:1.2em;opacity:.48}\r\n		/*CUSTOM*/\r\n		\r\n		.DPDC{width:auto;padding:24px;background-color:#ffffff;border:1px solid #343434;border-radius:8px} /* widget width, padding, background, border, rounded corners */\r\n		.DPDCh{color:#007DBF;font-weight:normal} /* headline color, font-weight*/\r\n		.DPDCt,.DPDCd{color:#343434;font-weight:bold} /* time & date color, font-weight */\r\n		.DPDCtn{border-color:#343434} /* night-sign color = time & date color */\r\n		.DPDCtn>i{background-color:#343434} /* night-sign color = time & date color */\r\n		.DPDCt{font-size:48px} /* time font-size */\r\n		.DPDCh,.DPDCd{font-size:16px} /* headline & date font-size */\r\n	</style>\r\n\r\n	<a class=\"DPl\" href=\"https://dayspedia.com/time/id/Pekanbaru/\" target=\"_blank\" style=\"display:block!important;text-decoration:none!important;border:none!important;cursor:pointer!important;background:transparent!important;line-height:0!important;text-shadow:none!important;position:absolute;z-index:1;top:0;right:0;bottom:0;left:0\">\r\n		<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 16 16\" style=\"position:absolute;right:8px;bottom:0;width:16px;height:16px\">\r\n			<path style=\"fill:/*defined*/#007DBF\" d=\"M0,0v16h1.7c-0.1-0.2-0.1-0.3-0.1-0.5c0-0.9,0.8-1.6,1.6-1.6c0.9,0,1.6,0.8,1.6,1.6c0,0.2,0,0.3-0.1,0.5h1.8 c-0.1-0.2-0.1-0.3-0.1-0.5c0-0.9,0.8-1.6,1.6-1.6s1.6,0.8,1.6,1.6c0,0.2,0,0.3-0.1,0.5h1.8c-0.1-0.2-0.1-0.3-0.1-0.5 c0-0.9,0.8-1.6,1.6-1.6c0.9,0,1.6,0.8,1.6,1.6c0,0.2,0,0.3-0.1,0.5H16V0H0z M4.2,8H2V2h2.2c2.1,0,3.3,1.3,3.3,3S6.3,8,4.2,8z M11.4,6.3h-0.8V8H9V2h2.5c1.4,0,2.4,0.8,2.4,2.1C13.9,5.6,12.9,6.3,11.4,6.3z M4.4,3.5H3.7v3h0.7C5.4,6.5,6,6,6,5 C6,4.1,5.4,3.5,4.4,3.5z M11.3,3.4h-0.8V5h0.8c0.6,0,0.9-0.3,0.9-0.8C12.2,3.7,11.9,3.4,11.3,3.4z\">\r\n			</path>\r\n		</svg>\r\n		<span title=\"DaysPedia.com\" style=\"position:absolute;right:28px;bottom:6px;height:10px;width:60px;overflow:hidden;text-align:right;font:normal 10px/10px Arial,sans-serif!important;color:/*defined*/#007DBF\">Powered&nbsp;by DaysPedia.com</span>\r\n	</a>\r\n	<div class=\"DPDCh\">Current Time in Pekanbaru</div>\r\n	<div class=\"DPDCt\">\r\n		<span class=\"DPDCth\">11</span><span class=\"DPDCtm\">24</span><span class=\"DPDCts\">43</span><span class=\"DPDCt12\" style=\"display: none;\"></span>\r\n	</div>\r\n	<div class=\"DPDCd\">\r\n		<span class=\"DPDCdt\">Tue, January 11</span><span class=\"DPDCtn\" style=\"display: none;\"><i></i></span>\r\n	</div>\r\n	\r\n	<div class=\"DPDCs\" style=\"display:none\">\r\n		<span class=\"DPDCsr\">\r\n			<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\"><path d=\"M12,4L7.8,8.2l1.4,1.4c0,0,0.9-0.9,1.8-1.8V14h2c0,0,0-3.3,0-6.2l1.8,1.8l1.4-1.4L12,4z\"></path><path d=\"M6.8,15.3L5,13.5l-1.4,1.4l1.8,1.8L6.8,15.3z M4,21H1v2h3V21z M20.5,14.9L19,13.5l-1.8,1.8l1.4,1.4L20.5,14.9z M20,21v2h3 v-2H20z M6.1,23C6,22.7,6,22.3,6,22c0-3.3,2.7-6,6-6s6,2.7,6,6c0,0.3,0,0.7-0.1,1H6.1z\"></path></svg>\r\n			06:23<sup>am</sup>\r\n		</span>\r\n		<span class=\"DPDCsl\">12:04</span>\r\n		<span class=\"DPDCss\">\r\n			<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\"><path d=\"M12,14L7.8,9.8l1.4-1.4c0,0,0.9,0.9,1.8,1.8V4h2c0,0,0,3.3,0,6.2l1.8-1.8l1.4,1.4L12,14z\"></path><path d=\"M6.8,15.3L5,13.5l-1.4,1.4l1.8,1.8L6.8,15.3z M4,21H1v2h3V21z M20.5,14.9L19,13.5l-1.8,1.8l1.4,1.4L20.5,14.9z M20,21v2h3 v-2H20z M6.1,23C6,22.7,6,22.3,6,22c0-3.3,2.7-6,6-6s6,2.7,6,6c0,0.3,0,0.7-0.1,1H6.1z\"></path></svg>\r\n			06:27<sup>pm</sup>\r\n		</span>\r\n	</div>\r\n	<script>\r\n		var s, t; s = document.createElement(\"script\"); s.type = \"text/javascript\";\r\n		s.src = \"//cdn.dayspedia.com/js/dwidget.min.v7c6abcf8.js\";\r\n		t = document.getElementsByTagName(\'script\')[0]; t.parentNode.insertBefore(s, t);\r\n		s.onload = function() {\r\n			window.dwidget = new window.DigitClock();\r\n			window.dwidget.init(\"dayspedia_widget_2b4059d24da28a85\");\r\n		};\r\n	</script>\r\n	<!--/DPDC-->\r\n	</div><!--Dayspedia.com widget ENDS-->', NULL, '2020-12-22 15:58:20', '2022-01-11 04:25:41'),
(5, 'Banner Again', 'banner', NULL, 'sidebar-banner.jpg', '2020-12-22 16:25:21', '2020-12-22 16:25:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perizinan`
--
ALTER TABLE `perizinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `perizinan`
--
ALTER TABLE `perizinan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `widget`
--
ALTER TABLE `widget`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
