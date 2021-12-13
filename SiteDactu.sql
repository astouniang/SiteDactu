
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `SiteDactu`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(10) NOT NULL,
  `btitle` varchar(150) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `country` varchar(75) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(40) NOT NULL,
  `category` varchar(100) NOT NULL,
  `bbody` text NOT NULL,
  `bpa` varchar(50) NOT NULL,
  `bpb` varchar(50) NOT NULL,
  `dbc` varchar(50) NOT NULL,
  `posted_at` varchar(30) NOT NULL,
  `approved` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `btitle`, `fullname`, `phone`, `email`, `country`, `state`, `city`, `category`, `bbody`, `bpa`, `bpb`, `dbc`, `posted_at`, `approved`) VALUES
(10, 'Priyanka Chopra, Kareena Kapoor ', 'test', '9872778144', 'test@test.com', '', '', 'Ludhiana', 'bollywood', 'On Friday evening, Kareena Kapoor drove down all the way from Pune to Mumbai for shooting her televised act for an award ceremony. What should have ended in a few hours took them forever, thanks to Priyanka Chopra.\r\n\r\nBebo finished with her make-up and hair and arrived on the stage to see that it was already occupied by Priyanka Chopra. She had to wait for four hours before she could actually shoot her performance.\r\n\r\nA source present at the awards revealed, â€œKareena landed at Yash Raj Studios around midnight; she found that the stage was occupied by Priyanka. She waited patiently for sometime. On spotting her, PC came down from the stage and told her that she could not give the stage until 1 am (although Kareena was assigned the stage at 12 am).â€\r\n\r\nPC continued to rehearse till 4 am, by that time, the exhausted Kareena had left for home.\r\n\r\nThe next morning, Kareena asked her manager Zahid to cancel the shooting (with Salman for Bodyguard), which was scheduled on Saturday in Pune and then came back to the studio to finish her song.\r\n\r\nNormally, the fiery Bebo would have flared up because she was kept waiting for more than four hours. Although, she was smarting with humiliation, she maintained her cool. Later, she gave a call to the organizers and gave her piece.\r\n\r\nThey explained it to her that because of some technical problems, Priyankaâ€™s act took a longer time.\r\n\r\nPCâ€™s spokesperson said, â€œPriyanka was not aware that Bebo had to wait for hours. Not that I am aware of. Priyanka had a long act with many changes.â€\r\n\r\nBebo remained unavailable for comment.', 'uploads/436611priyanka-and-kareena.jpg', 'uploads/424298', 'uploads/11573', 'undefined', 'approve'),
(11, 'Rimi Sen Likes Irfan Khan A Lot', 'raman', '9872778144', 'y@gmail.com', '', '', 'Lucknow', 'bollywood', 'Very recently we read somewhere that actress Rimi Sen had said in an interview that she was not keen on doing multi-starrers. However, contrary to her statement, in todayâ€™s release, Rimi Sen will be seen in a multistarrer, the Anees Bazmee directed THANK YOU, featuring Akshay Kumar, Suneil Shetty, Irrfan Khan, Sonam Kapoor and of course Rimi herself. \r\n\r\nWhen we clarified the same from Rimi, the straight forward actress, without batting an eyelid, accepted that she had indeed made such a statement. She told us, â€œActually most muti-starrers donâ€™t have much role for actresses.\r\n\r\nThat is why I am not very keen on them.â€ So, why did she decide to do THANK YOU? And Rimi replied, â€œI really like Irrfan Khan, both as an actor and as a person and thatâ€™s why I wanted to act with him. Another reason is that I like the way Anees Bazmee makes his films and thatâ€™s why I chose to do THANK YOU.â€ About the duration of her shoot she said, â€œI shot for about a month.', 'uploads/290108rimi-sen-hot-phoot-shoot-278x300.jpg', 'uploads/432461', 'uploads/419529', 'undefined', 'approve'),
(12, 'Ranbir Kapoor - The New Face Of Tata Docomo', 'madi', '', '', '', '', 'Adoni', 'bollywood', 'Bollywood actor Ranbir Kapoor has added Tata Docomo to his endorsement kitty. Telecom company Tata DOCOMO has launched its new brand campaign â€˜Keep It Simpleâ€™ that will be endorsed by Kapoor.\r\n\r\nâ€˜With impactful rendition of many an act(s) that mark our daily experiences in life and with our mobile phones, Ranbir will drive home the Keep It Simple message through the April and May months of the IPL series,â€™ said a company spokesperson. \r\n\r\nSpeaking on the occasion, S Ramakrishna, Regional Head - South East, TATA Docomo, said: â€˜As a youth icon, Ranbir is a trend-setter and appeals to young audience-he is professional, dynamic and youthful. This is a perfect match with Tata Docomo, and we welcome him to the family and look forward to a long and meaningful association.â€™\r\n\r\nâ€˜I have always believed in being different and doing things in a unique and new way-which is what made me jump at the chance to associate with Tata DOCOMO, which is such a close replica of my own persona,â€™ said Kapoor, expressing his excitement at this new connection in his life.', 'uploads/54310rk.jpg', 'uploads/125186', 'uploads/277113', 'undefined', 'approve'),
(13, 'Hrithik Roshan Bleeds On The Sets Of Agneepath', 'madi', '', '', '', '', 'Alibag', 'bollywood', 'We all know that Hrithik Roshan is starring in the remake of â€˜Agneepathâ€™ â€“  the cult bollywood gangster acted by the magnificent Amitabh Bachchan. Produced by Dharma productions, the movie fetched the national award for the best actor to Amitabh Bachchan and best supporting actor to Mithun Da ( Mithun Chakraborty) in 1990.\r\n\r\nThe cult in his 2011 version is said to have the slick and the â€˜inâ€™ look where the B-town handsome hunk Hrithik will play the role of Vijay Dinanath Chauhan and dreaded Kaacha Chhena wil be enacted by none other than Sanju baba who returns to his good bad ways with a punch.\r\n\r\nWhile shooting for the film in Versova, Hrithik Roshan got injured.  The scene required Hrithik to break a coconut on the ground.', 'uploads/392109hr.jpg', 'uploads/46091', 'uploads/456359', 'undefined', 'approve'),
(14, 'Mahendra Singh Dhoni Becomes Trendsetter Once more with His Hair, or rather No Hair', 'madi', '9872778144', '', '', '', 'Adilabad', 'cricket', 'One of the most talked about issues since India won the ICC Cricket World Cup 2011 was about Gurujis of the cricketers as well as Yuvraj Singhâ€™s mystery dedication and also, Mahendra Singh Dhoniâ€™s changing hair styles.\r\nThe pictures of the Indian captain over the years tells a story of how the Indian cricketer has set trends over the years that have been emulated by several since.\r\n\r\nDhoni looks bald in the pictures released with the ICC Cricket World Cup 2011. But no, the Indian skipper has not suffered hair loss en route to Indiaâ€™s glory. Rather the decision to clean shave his pate had apparently to do with a religious vow he took and the fulfillment of his wish, Indian winning the World Cup, meant that he would keep his vow.\r\n\r\nOne would have to say that the look sits rather well with the captain known to experiment a lot. Besides, not many can argue that it is the right look for the summer as the heat will well and truly descend upon India in the course of the IPL 4 season. ', 'uploads/213144mahendra-singh-dhoni-shaved_pRsRf_17', 'uploads/29927', 'uploads/394493', 'undefined', 'terminate'),
(15, 'Akshay Kumarâ€™s â€˜Thank Youâ€™ To Hit The Theatres Today', 'Raman', '', '', '', '', 'Almora', 'bollywood', 'The sole release of the week is â€˜Thank Youâ€™ and it has everything going in itâ€™s favour as far as release timing and positioning amongst the audience is concerned. There is no competition due to absence of any newer releases, from the earlier releases there is only F.A.L.T.U. to contend with and that too basically has a restricted market for itself. Next week too there is just one small film arriving in theaters - â€˜Teen Thay Bhaiâ€™. Though IPL is kick starting, it is no threat as viewers have had enough of cricket and they would rather step into theaters to watch a film.\r\n \r\nAll of this means that the sole requirement for â€˜Thank Youâ€™ to earn mega bucks for itself is to be a good film. Period. The cast is huge, the director has a great track record and the promos are giving an impression of a fun watch. All of this means that it is a given that â€˜Thank Youâ€™ would take one of the better starts for Akshay Kumar in the recent months. While â€˜Patiala Houseâ€™ opening would comfortably be left behind, it now has to be seen whether Akshay can surpass the weekend opening of â€˜Tees Maar Khanâ€™ and â€˜Housefullâ€™, both of which had crossed the 30 crores mark.\r\n \r\nAs things stand today, both Akshay Kumar as well as the makers would be happy if â€˜Thank Youâ€™ indeed manages over 25 crores opening for itself, something which is on the cards. Once such an opening is accomplished and the film finds decent to good word of mouth for itself, it would be a winning situation for â€˜Thank Youâ€™ as it could then benefit out of an open fortnight ahead.', 'uploads/273504akshay-kumar12.jpg', 'uploads/197613', 'uploads/492276', 'undefined', 'approve'),
(16, 'Hrithikâ€™s Mind Blowing Abs In His Upcoming Film', 'raman', '', '', '', '', 'Aizawl', 'bollywood', 'Director Zoya Akhtarâ€™s Zindagi Na Milegi Dobara has been creating a lot of pomp in the recent times. With its multi-starrer cast and an uncommon name, the film has managed to grab the audience attention from day one. The filmmakers have finally launched the first look (poster) of the film.\r\n\r\nThe poster features, the three male lead of the film, namely Farhan Akhtar, Hrithik Roshan and Abhay Deol. The poster tries to fill a curiosity among the viewers, by only showing a portion of the actors face and by hiding the eyes and forehead. Hrithik Roshan is seen flaunting his chiseled body, while Farhan and Abhay are donning a cool look. The pictures shows the actors on a road trip.\r\n\r\nApart from Farhan, Hrithik and Abhay Zindagi Na Milegi Dobara also stars Katrina Kaif, Kalki Koechlin and Ariadna Cabrol as its female lead. The film is being produced by Riteish Sidhwani and Farhan Akhtar and is being directed by Zoya Akhtar. The music for Zindagi Na Milegi Dobara has been composed by Shankar Ehsaan Loy.', 'uploads/205649zindagi-na-milegi-b-070411-207x300.j', 'uploads/51611', 'uploads/294472', 'undefined', 'terminate'),
(17, 'Is Shahrukh Khan Performing At The IPL Ceremony Today ?', 'raman', '', '', '', '', 'Alwaye', 'bollywood', 'The fourth season of Indian Premier League just got bigger! According to sources, Bollywood superstar Shah Rukh Khan is most likely to perform at the opening ceremony of IPL on Friday.\r\n\r\nThe actor is all set to inaugurate the ceremony with a rocking performance. The actorâ€™s team Kolkata Knight Riders would be playing the first match against Chennai Super Kings on the same day.\r\n\r\nConfirming the news, N Srinivasan of Team Chennai told a leading daily, â€œYes, he`s performing at the event.â€ So Badshah Khan will be seen dancing on the tunes of hit hindi film numbers.\r\n\r\nAccording to a source, â€œThe actor is rehearsing in Mumbai at the moment for the big event. He will land in the city this afternoon.â€\r\n\r\nCaptain of Chennai Super Kings, M S Dhoni, is looking forward to the match and joked â€œI simply cut my hair after the World Cup win,â€ he said, â€œBut, considering the heat in Chennai, I think it`s a good decision!â€', 'uploads/120521shahrukh_khan_ipl_20080616-300x233.j', 'uploads/11223', 'uploads/121632', 'undefined', 'terminate'),
(18, 'Amitabh Bachchan To Turn Action Hero Again', 'Madi', '', '', '', '', 'Bahraich', 'bollywood', 'Megastar Amitabh Bachchan will be seen doing action sequences in his home production Bbuddah-Hoga Tera Baap, with the actor admitting that he missed the thrill of punching and kicking.\r\n\r\nâ€œI had not punched, kicked or walloped a guy in ages! At least not in the past 15 years or so. But finding myself in those climes for Bbuddah-Hoga Tera Baap, I must admit I was really missing something,â€ he wrote on his blog bigb.bigadda.com.\r\n\r\nâ€œIts nostalgic to be in the presence of action directors againâ€¦had not been there for yearsâ€¦homesick for it!!â€ he said.\r\n\r\nâ€œThe stride has been firmer, the heart pumping the blood through the veins as rapidly as one would imagine and that strange feel of having conquered all, fills me up with enthusiasm, hope and a brighter tomorrow. There is a strange connect in this and I sometimes wonder why the earlier films got the kind of attention they did when they did,â€ he said.', 'uploads/153366amitabh-bachchan.jpg', 'uploads/227601', 'uploads/266396', 'undefined', 'approve'),

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_edit_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_status` varchar(10) COLLATE utf8_bin NOT NULL,
  `cat_priority` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `cat_title`, `cat_desc`, `cat_slug`, `cat_date`, `cat_edit_date`, `cat_status`, `cat_priority`) VALUES
(59, 'Sport', 'Catégorie du Sport', 'hardware', '', '', '1', '2'),
(60, 'Economie', 'Catégorie de l\'économie', 'software', '', '16/11/2021', '1', '1'),
(61, 'Industries', 'Catégorie des industries', 'games', '16/04/2019', '16/11/2021', '1', '1'),
(62, 'Agricuture', 'Catégorie de l\'agriculture', 'mobile', '17/05/2019', '17/05/2021', '1', '1');

-- --------------------------------------------------------







-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `post_category` varchar(10) COLLATE utf8_bin NOT NULL,
  `post_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_autor` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_edit_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_text` text COLLATE utf8_bin NOT NULL,
  `post_tag` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_visit_counter` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_status` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_priority` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `posts`
--


-- --------------------------------------------------------

--
-- Structure de la table `tokens`
--


--
-- Déchargement des données de la table `tokens`
--

INSERT INTO `tokens` (`id`, `valeur`, `client`, `date_creation`, `date_expiration`) VALUES
(1, 'ab4f63f9ac65152575886860dde480a1', '25f9e794323b453885f5181f1b624d0b', '2020-12-11 16:00:00', '2021-04-13 00:00:00'),
(2, '20c8d69d0580c43b533f6cd628eed279', '55722118e8b7648e5385b65528a77712', '2020-12-11 16:00:00', '2021-04-13 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
