
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
(1, 'ab4f63f9ac65152575886860dde480a1', '25f9e794323b453885f5181f1b624d0b', '2021-11-11 18:00:00', '2022-12-20 00:00:00'),
(2, '20c8d69d0580c43b533f6cd628eed279', '55722118e8b7648e5385b65528a77712', '2021-12-11 20:00:00', '2022-12-20 00:00:00');

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
