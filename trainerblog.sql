-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2020 at 07:52 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainerblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL,
  `idAuthor` int(11) NOT NULL,
  `shortDesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mainImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `backgroundImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mainContent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `createdAt`, `idAuthor`, `shortDesc`, `mainImg`, `backgroundImg`, `mainContent`) VALUES
(1, 'Ime bloga', '2020-10-22 22:00:00', 4, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque eos quisquam beatae veritatis alias tempore sapiente quo adipisci qui', 'planTreninga.jpg', 'blogBackground.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, inventore beatae architecto harum earum vitae. Omnis esse repellendus illo perspiciatis asperiores officiis, iure ex culpa facilis facere at distinctio sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet eveniet quos at distinctio deleniti, eius ea, reprehenderit ducimus natus asperiores consectetur? Doloribus sed tempore placeat veniam amet repellendus ad alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non magni itaque, earum in laudantium ullam dolorum modi tempore. Eligendi porro molestiae officia quam recusandae id cumque, necessitatibus rerum possimus dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse nulla quisquam tempora error quidem, cumque eos molestias minus eligendi. Aut consectetur in accusantium quisquam veniam doloribus et aliquid nihil eos? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur labore voluptatum, obcaecati consectetur ab dolore soluta ipsum rem! Nam deserunt perspiciatis itaque recusandae optio provident quis nihil soluta accusamus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus non repellat tempora nam alias odio? Tempore sunt eaque voluptas minus consectetur eius placeat dolores inventore esse, aliquam laudantium porro sit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus mollitia natus at, quam minima, aliquam labore quidem maxime molestiae ab pariatur quod sint voluptatum iste sapiente praesentium quia aut odit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, inventore beatae architecto harum earum vitae. Omnis esse repellendus illo perspiciatis asperiores officiis, iure ex culpa facilis facere at distinctio sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet eveniet quos at distinctio deleniti, eius ea, reprehenderit ducimus natus asperiores consectetur? Doloribus sed tempore'),
(2, 'Ime Bloga 2', '2020-10-23 22:00:00', 4, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque eos quisquam beatae veritatis alias tempore sapiente quo adipisci qui', 'planTreninga.jpg', 'blogBackground.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, inventore beatae architecto harum earum vitae. Omnis esse repellendus illo perspiciatis asperiores officiis, iure ex culpa facilis facere at distinctio sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet eveniet quos at distinctio deleniti, eius ea, reprehenderit ducimus natus asperiores consectetur? Doloribus sed tempore placeat veniam amet repellendus ad alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non magni itaque, earum in laudantium ullam dolorum modi tempore. Eligendi porro molestiae officia quam recusandae id cumque, necessitatibus rerum possimus dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse nulla quisquam tempora error quidem, cumque eos molestias minus eligendi. Aut consectetur in accusantium quisquam veniam doloribus et aliquid nihil eos? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur labore voluptatum, obcaecati consectetur ab dolore soluta ipsum rem! Nam deserunt perspiciatis itaque recusandae optio provident quis nihil soluta accusamus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus non repellat tempora nam alias odio? Tempore sunt eaque voluptas minus consectetur eius placeat dolores inventore esse, aliquam laudantium porro sit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus mollitia natus at, quam minima, aliquam labore quidem maxime molestiae ab pariatur quod sint voluptatum iste sapiente praesentium quia aut odit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, inventore beatae architecto harum earum vitae. Omnis esse repellendus illo perspiciatis asperiores officiis, iure ex culpa facilis facere at distinctio sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet eveniet quos at distinctio deleniti, eius ea, reprehenderit ducimus natus asperiores consectetur? Doloribus sed tempore'),
(3, 'Ime bloga 3', '2020-10-24 22:00:00', 4, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque eos quisquam beatae veritatis alias tempore sapiente quo adipisci qui', 'planTreninga.jpg', 'blogBackground.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, inventore beatae architecto harum earum vitae. Omnis esse repellendus illo perspiciatis asperiores officiis, iure ex culpa facilis facere at distinctio sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet eveniet quos at distinctio deleniti, eius ea, reprehenderit ducimus natus asperiores consectetur? Doloribus sed tempore placeat veniam amet repellendus ad alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non magni itaque, earum in laudantium ullam dolorum modi tempore. Eligendi porro molestiae officia quam recusandae id cumque, necessitatibus rerum possimus dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse nulla quisquam tempora error quidem, cumque eos molestias minus eligendi. Aut consectetur in accusantium quisquam veniam doloribus et aliquid nihil eos? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur labore voluptatum, obcaecati consectetur ab dolore soluta ipsum rem! Nam deserunt perspiciatis itaque recusandae optio provident quis nihil soluta accusamus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus non repellat tempora nam alias odio? Tempore sunt eaque voluptas minus consectetur eius placeat dolores inventore esse, aliquam laudantium porro sit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus mollitia natus at, quam minima, aliquam labore quidem maxime molestiae ab pariatur quod sint voluptatum iste sapiente praesentium quia aut odit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, inventore beatae architecto harum earum vitae. Omnis esse repellendus illo perspiciatis asperiores officiis, iure ex culpa facilis facere at distinctio sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet eveniet quos at distinctio deleniti, eius ea, reprehenderit ducimus natus asperiores consectetur? Doloribus sed tempore');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL,
  `parentCommentId` int(11) DEFAULT NULL,
  `idBlog` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `idUser`, `content`, `createdAt`, `parentCommentId`, `idBlog`) VALUES
(1, 3, 'dsauidasy uidd udsh dusdhiasdu hsaid ashuaisdhiauh a test komentar na 2 blog postu', '2020-10-25 08:00:00', NULL, 2),
(2, 1, 'test proba odgovora na prvi komentar', '2020-10-25 17:42:11', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namePlan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `mainImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialPlan` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idRole` int(11) NOT NULL,
  `city` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isVerified` tinyint(1) NOT NULL,
  `activationCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `pass`, `idRole`, `city`, `isVerified`, `activationCode`, `createdAt`) VALUES
(1, 'Aleks', 'Madic', 'info@alemadic.com', 'javascript', 2, 'Bor', 0, '06e0e430c2d527b16488a6a3fff487f1dd11d3ba', '2020-10-25 11:21:40'),
(3, 'Aleks', 'Madic', 'aleksmadic00@gmail.com', 'javascript', 2, 'Bor', 0, 'f9428f042fb5e8541df14fcf4d3e641062892769', '2020-10-25 11:21:40'),
(4, 'Milos', 'Premcevic', 'admin@beautyandthebeast.com', '123', 1, 'Beograd', 1, 'dshajdashdjashjashdj2h3j2h13j1hwkadjkas', '2020-10-25 11:21:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
