-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 12:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be17_cr4_mauritzgstaettner_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `ISBN` varchar(13) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `author_first_name` varchar(55) DEFAULT NULL,
  `author_last_name` varchar(55) DEFAULT NULL,
  `publisher_name` varchar(55) DEFAULT NULL,
  `publisher_address` varchar(55) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `availability` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `image_url`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `availability`) VALUES
(1, 'Don Quixote', 'https://coverart.oclc.org/ImageWebSvc/oclc/+-+3584215756_140.jpg?allowDefault=false&client=WorldcatOrgUI', '9780486821955', 'The final and greatest utterance of the human mind.\" -- Fyodor Dostoyevsky. A founding work of modern Western literature, Cervantes masterpiece has been translated into more than 60 languages and the novels elderly knight, Don Quixote, and his loyal squire, Sancho Panza, rank among fictions most recognized characters. This monumental parody of chivalric romances and epic of heroic idealism presents a strikingly contemporary narrative that also reflects the historical realities of 17th century Spain', 'book', 'Miguel', 'de Cervantes Saavedra', 'Dover Publications', '31 2nd St, Mineola, NY 11501, USA', '1605-02-12', 'available'),
(2, 'The adventures of Huckleberry Finn', 'https://coverart.oclc.org/ImageWebSvc/oclc/+-+98240992_140.jpg?allowDefault=false&client=WorldcatOrgUI', '9781402726002', 'Presents the adventures of a boy and a runaway slave as they travel down the Mississippi River on a raft. Universally acclaimed as one of the greatest creations of American fiction, Adventures of Huckleberry Finn is one of those few books that are read over and over again, with ever increasing enjoyment', 'book', 'Mark', 'Twain', 'Sterling Childrens Books', '387 Park Ave S, New York, NY 10016, USA', '1884-12-10', 'available'),
(3, 'JANE EYRE', 'https://coverart.oclc.org/ImageWebSvc/oclc/+-+2793271586_140.jpg?allowDefault=false&client=WorldcatOrgUI', '9781435172555', 'Jane Eyre is a first-person narrative told from the perspective of Jane, a seemingly ‘plain’ girl who meets a lot of challenges in life. The novel presents Jane’s life from childhood to adulthood.', 'book', 'CHARLOTTE', 'BRONTE', 'UNION SQUARE AND CO', '33 East 17th Street New York, NY 10003, USA', '1847-10-19', 'reserved'),
(4, 'Moby-Dick', 'https://coverart.oclc.org/ImageWebSvc/oclc/+-+8072382176_140.jpg?allowDefault=false&client=WorldcatOrgUI', '9780198853695', 'Moby-Dick has a monumental reputation. Less well known are the novels unexpectedly weird, funny, tantalizing, messy, and wondrous moments. Narrator Ishmael, along with the whaleship Pequods other \"meanest mariners, and renegades and castaways\", is beguiled into joining Captain Ahab in his vengeful pursuit of the white whale that \"dismasted\" him. But along the way, Ishmael takes the reader along many a detour into variegated ways of knowing. In a tone \"strangely compounded of fun and fury\", Moby-Dick brings outlandish curiosity to bear on the multitudinous, oceanic scale of our diverse world', 'book', 'Herman', 'Melville', 'Oxford University Press', 'Great Clarendon St, Oxford OX2 6DP, UK', '1956-01-01', 'available'),
(5, 'Pride and prejudice', 'https://coverart.oclc.org/ImageWebSvc/oclc/+-+1819544586_140.jpg?allowDefault=false&client=WorldcatOrgUI', '9781435172487', 'A novel of manners about the romantic pas de deux between Elizabeth Bennet and Fitzwilliam Darcy, two perfectly suited lovers who, at first, find each other insufferable. Despite Elizabeths negative feelings about Darcy, fate seems determined to keep throwing this pair together, and Darcy, almost in spite of himself, will make revelations that will end up causing Elizabeth to question everything she believes. Set in a time when marrying well was a womans only way to assure a secure and comfortable future, Pride and Prejudice is arguably the forerunner of all romantic comedies and certainly one of the best-loved novels of all time.', 'book', 'Jane', 'Austen', 'Union Square & Co', '301 E 57th St UNIT 4, New York, NY 10022 USA', '1813-01-28', 'available'),
(6, 'The adventures of Tom Sawyer', 'https://coverart.oclc.org/ImageWebSvc/oclc/+-+3430974476_140.jpg?allowDefault=false&client=WorldcatOrgUI', '9781686597763', 'The classic story of a mischievous nineteenth-century boy in a Mississippi River town and his friends, Huck Finn and Becky Thatcher, as they run away from home, witness a murder, and find treasure in a cave', 'book', 'Mark', 'Twain', 'Pink Dots', '582 Rockaway Ave, Brooklyn, NY 11212, USA', '1876-11-22', 'reserved'),
(7, 'Treasure Island', 'https://coverart.oclc.org/ImageWebSvc/oclc/+-+0256002_140.jpg?allowDefault=false&client=WorldcatOrgUI', '9780684171609', 'While going through the possessions of a deceased guest who owed them money, the mistress of the inn and her son find a treasure map that leads to a pirate fortune as well as great dange', 'book', 'Robert', 'Louis', 'Scribner', '597 5th Ave, New York, NY 10017, USA', '1881-06-25', 'available'),
(8, 'White fang', 'https://coverart.oclc.org/ImageWebSvc/oclc/+-+66949209_140.jpg?allowDefault=false&client=WorldcatOrgUI', '9780439236195', 'The adventures in the northern wilderness of a dog who is part wolf and how he comes to make his peace with man', 'book', 'Jack', 'London', 'Scholastic', '601 W 26th St, New York, NY 10001, USA', '1906-10-01', 'reserved'),
(9, 'Wuthering Heights', 'https://coverart.oclc.org/ImageWebSvc/oclc/+-+6801671456_140.jpg?allowDefault=false&client=WorldcatOrgUI', '9780785230793', 'A fine, exclusive edition of one of literatures most beloved stories. Featuring a laser-cut jacket on a textured book with foil stamping, all titles in this series are first editions. Only 10,000 copies have printed, and each are individually numbered from 1 to 10,000.', 'book', 'Emily', 'Brontë', 'Thomas Nelson', '501 Nelson Pl, Nashville, TN 37214, USA', '1978-03-14', 'available'),
(10, 'Alices adventures in wonderland', 'https://coverart.oclc.org/ImageWebSvc/oclc/+-+9826578756_140.jpg?allowDefault=false&client=WorldcatOrgUI', '9781786751041', 'This edition brings together the complete and unabridged text with more than 70 stunning illustrations by Robert Ingpen each reflecting his unique style and extraordinary imagination in visualising this enchanting story.', 'book', 'Lewis', 'Carroll', 'Palazzo Editions Ltd', 'PALAZZO 15 Church Road London SW13 9HE', '1865-11-05', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
