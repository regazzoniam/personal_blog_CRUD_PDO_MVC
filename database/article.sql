-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 18 avr. 2022 à 15:09
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projets-perso`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  `summary` varchar(200) NOT NULL,
  `url_img` varchar(500) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `author`, `title`, `content`, `summary`, `url_img`, `date`) VALUES
(1, 'Marie Kondo', 'Less stuff more joy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur venenatis lacinia sem at vehicula. Nunc aliquet nunc vel eleifend ultricies. Duis tortor felis, tempus eu libero sed, venenatis sagittis ante. Nulla dui nisl, mattis in gravida maximus, lacinia vel libero. In hac habitasse platea dictumst. Maecenas arcu nibh, eleifend nec felis sit amet, hendrerit cursus massa. Nullam rutrum eget massa et posuere. Morbi et dui molestie, gravida ex eget, posuere libero. Nullam vitae nunc a sapien.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur venenatis lacinia sem at vehicula.', 'assets/img/less-stuff-more-joy.jpg', '04-18-2022'),
(2, 'Dominique Loreau', 'How to declutter your bathroom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur venenatis lacinia sem at vehicula. Nunc aliquet nunc vel eleifend ultricies. Duis tortor felis, tempus eu libero sed, venenatis sagittis ante. Nulla dui nisl, mattis in gravida maximus, lacinia vel libero. In hac habitasse platea dictumst. Maecenas arcu nibh, eleifend nec felis sit amet, hendrerit cursus massa. Nullam rutrum eget massa et posuere. Morbi et dui molestie, gravida ex eget, posuere libero. Nullam vitae nunc a sapien.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur venenatis lacinia sem at vehicula.', 'assets/img/bathroom.jpg', '11-03-2021'),
(3, 'Ryan Nicodemus & Joshua Fields Millburn', 'Love people use things', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra cursus vehicula. Aliquam eleifend velit vitae pulvinar vestibulum. Mauris ac arcu mauris. Mauris molestie tristique velit eu pretium. Etiam vel libero at lectus ultricies condimentum sit amet vel sem. Proin semper nisl eu risus cursus convallis. Pellentesque vitae efficitur lacus.\r\n\r\nDonec nec finibus leo, et convallis nulla. Aenean id quam eget lacus porta tristique eu ac tellus. Maecenas non neque mauris.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra cursus vehicula.', 'assets/img/love-people-use-things.jpg', '01-10-2022'),
(4, 'Vicky Payeur', 'Go minimal and save money', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus turpis ex, rhoncus nec ante quis, porta lobortis massa. Cras felis ipsum, euismod vel velit aliquam, interdum maximus lectus. Aenean non pharetra lacus. Suspendisse pharetra porttitor quam eget dictum. Duis dictum magna risus, eu varius odio venenatis et. Vivamus blandit, mauris sit amet molestie tempor, magna libero tristique eros, quis varius dui tellus sit amet turpis. Nunc vulputate tristique odio. Fusce consectetur enim eu at.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus turpis ex, rhoncus nec ante quis, porta lobortis massa.', 'assets/img/go-minimal-save-money.jpg', '08-16-2022'),
(5, 'Fumio Sasaki', 'Why less is actually more', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus turpis ex, rhoncus nec ante quis, porta lobortis massa. Cras felis ipsum, euismod vel velit aliquam, interdum maximus lectus. Aenean non pharetra lacus. Suspendisse pharetra porttitor quam eget dictum. Duis dictum magna risus, eu varius odio venenatis et. Vivamus blandit, mauris sit amet molestie tempor, magna libero tristique eros, quis varius dui tellus sit amet turpis. Nunc vulputate tristique odio. Fusce consectetur enim eu at.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus turpis ex, rhoncus nec ante quis, porta lobortis massa.', 'assets/img/less-is-more.jpg', '08-15-2021'),
(6, 'Josée Anne SC', 'Minimal wardrobe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus turpis ex, rhoncus nec ante quis, porta lobortis massa. Cras felis ipsum, euismod vel velit aliquam, interdum maximus lectus. Aenean non pharetra lacus. Suspendisse pharetra porttitor quam eget dictum. Duis dictum magna risus, eu varius odio venenatis et. Vivamus blandit, mauris sit amet molestie tempor, magna libero tristique eros, quis varius dui tellus sit amet turpis. Nunc vulputate tristique odio. Fusce consectetur enim eu at.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus turpis ex, rhoncus nec ante quis, porta lobortis massa.', 'assets/img/wardrobe.jpg', '04-30-2021'),
(7, 'Francine Jay', 'Digital declutter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus augue non velit consequat, nec placerat odio luctus. \r\n\r\nAliquam erat volutpat. Fusce maximus consectetur est, id egestas dolor lacinia a. Mauris facilisis erat id convallis pretium. Ut laoreet laoreet mi, ut laoreet sapien vestibulum sagittis. Donec at sapien justo. Ut egestas eu purus vel maximus. Nam sollicitudin elementum vestibulum. Praesent viverra. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus augue non velit consequat, nec placerat odio luctus. ', 'assets/img/digital.jpg', '05-20-2021'),
(8, 'Josée Anne SC', 'Owning less allows me to travel more', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus augue non velit consequat, nec placerat odio luctus. Phasellus sit amet massa eget eros volutpat molestie feugiat et lacus. Aliquam erat volutpat. \r\n\r\nFusce maximus consectetur est, id egestas dolor lacinia a. Mauris facilisis erat id convallis pretium. Ut laoreet laoreet mi, ut laoreet sapien vestibulum sagittis. Donec at sapien justo.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus augue non velit consequat, nec placerat odio luctus.', 'assets/img/travel-more.jpg', '06-08-2021'),
(25, 'ar', 'ar', 'ar', 'ar', 'ar', 'ar'),
(26, 'bb', 'bb', 'bb', 'bb', 'bb', 'bb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
